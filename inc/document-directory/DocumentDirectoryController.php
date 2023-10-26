<?php

namespace Brace;

class DocumentDirectoryController extends ComponentController
{
    public $classes = array();

    private $restore_language = 'en';

    /**
     * @return DocumentDirectoryController
     */
    public static function getInstance()
    {
        return parent::getInstance();
    }

    public function init()
    {
        parent::init();

        $this->setup_classes();

        add_filter('query_vars', array($this, 'add_query_vars'));

        add_action('pre_get_posts', array($this, 'pre_get_posts_filters'), 10);
        add_action('pre_get_posts', array($this, 'force_archive_search_page'), 10);
        add_action('wp', array($this, 'maybe_enqueue'));

        // add_filter('icl_ls_languages', array($this, 'language_switcher_query_params'));
        add_filter('posts_join', array($this, 'posts_join_related_posts'), 10, 2);
        add_filter('posts_where', array($this, 'posts_where_related_posts_in'), 10, 2);

        add_action('get_header', array($this, 'enqueue_gform_scripts'));
        add_filter('gform_entry_meta', array($this, 'add_dc_entry_meta'), 10, 2);
        add_filter('gform_entry_detail_meta_boxes', array($this, 'add_dc_meta_box'), 10, 3);
        add_filter('gform_pre_send_email', array($this, 'add_dc_entry_info'), 10, 4);
        add_filter('gform_confirmation', array($this, 'inject_dc_confirmation_token'), 10, 4);
        add_filter('gform_confirmation_anchor', array($this, 'prevent_dc_confirmation_scroll'), 10, 2);

        add_ajax_action('document_download_url', array($this, 'ajax_document_download_url'));
        add_ajax_action('document_download', array($this, 'ajax_document_download'));

        add_filter('manage_document_posts_columns', array($this, 'manage_document_columns'));
        add_action('manage_document_posts_custom_column', array($this, 'manage_document_column_output'), 10, 2);

        // Default filter options
        add_filter('document_directory/filter_options/product', array($this, 'default_filter_options_product'));
        add_filter('document_directory/filter_options/document-industry', array($this, 'default_filter_options_industry'));
        add_filter('document_directory/filter_options/service', array($this, 'default_filter_options_service'));
        add_filter('document_directory/filter_options/document-language', array($this, 'default_filter_options_language'));
        add_filter('document_directory/filter_options/document-application', array($this, 'default_filter_options_category'));
        add_filter('document_directory/filter_options/document-product-group', array($this, 'default_filter_options_product_group'));

        // Default filter application
        add_action('document_directory/filter_pre_get_posts/product', array($this, 'default_filter_application_product'), 10, 2);
        add_action('document_directory/filter_pre_get_posts/document-industry', array($this, 'default_filter_application_industry'), 10, 2);
        add_action('document_directory/filter_pre_get_posts/service', array($this, 'default_filter_application_service'), 10, 2);
        add_action('document_directory/filter_pre_get_posts/document-language', array($this, 'default_filter_language_category'), 10, 2);
        add_action('document_directory/filter_pre_get_posts/document-application', array($this, 'default_filter_application_category'), 10, 2);
        add_action('document_directory/filter_pre_get_posts/document-product-group', array($this, 'default_filter_application_product_group'), 10, 2);
    }

    public function add_query_vars($vars)
    {
        foreach ($this->get_filters() as $filter => $args) {
            $vars[] = $filter;
        }

        return $vars;
    }

    public function is_document_archive_query($query)
    {
        if (is_admin()) {
            return false;
        }

        if (!$query->is_main_query() || !$query->is_archive() || $query->get('post_type') !== 'document') {
            return false;
        }

        return true;
    }

    public function unfilter_archive_language($query)
    {
        if (!$this->is_document_archive_query($query)) {
            return;
        }

        global $wpml_query_filter;

        remove_filter('posts_where', array($wpml_query_filter, 'posts_where_filter'), 10, 2);
    }

    public function pre_get_posts_filters($query)
    {
        if (!$this->is_document_archive_query($query)) {
            return;
        }

        foreach ($this->get_filters() as $filter => $label) {
            $terms = get_query_var($filter);
            $terms = is_string($terms) ? parse_csv($terms) : $terms;

            if (empty($terms)) {
                continue;
            }

            do_action("document_directory/filter_pre_get_posts/{$filter}", $query, $terms);
        }
    }

    public function force_archive_search_page(\WP_Query $query)
    {
        if (is_admin() || !$query->is_search()) {
            return;
        }

        if ($query->get('post_type') !== 'document') {
            return;
        }

        $query->is_search = false;
    }

    public function maybe_enqueue()
    {
        global $wp_query;

        if (!$this->is_document_archive_query($wp_query)) {
            return;
        }

        $this->enqueue();
    }

    public function language_switcher_query_params($languages)
    {
        global $sitepress;

        foreach ($this->get_filters() as $filter => $args) {
            $terms = get_query_var($filter);

            if (empty($terms) || empty($args['translation_element_type']) || empty($args['object_type'])) {
                continue;
            }

            $terms = parse_csv($terms);

            foreach ($languages as &$language) {
                $translated_slugs = array();

                foreach ($terms as $term) {
                    if ($args['object_type'] === 'term') {
                        $translated_term = get_translated_term_by_slug(
                            $term,
                            $args['translation_element_type'],
                            $language['code']
                        );

                        if (!$translated_term) {
                            continue;
                        }

                        $translated_slugs[] = $translated_term->slug;
                    } elseif ($args['object_type'] === 'post') {
                        $posts = get_posts(array(
                            'post_status'    => 'publish',
                            'posts_per_page' => 1,
                            'post_type'      => $args['translation_element_type'],
                            'name'           => $term
                        ));

                        if (empty($posts)) {
                            continue;
                        }

                        $post = reset($posts);

                        $translated_post_id = apply_filters(
                            'wpml_object_id',
                            $post->ID,
                            $args['translation_element_type'],
                            false,
                            $language['code']
                        );

                        if (!$translated_post_id) {
                            continue;
                        }

                        $translated_post = get_post($translated_post_id);

                        if (!$translated_post) {
                            continue;
                        }

                        $translated_slugs[] = $translated_post->post_name;
                    }

                    if (!empty($translated_slugs)) {
                        $language['url'] = add_query_arg($filter, join(',', $translated_slugs), $language['url']);
                    }
                }
            }
        }

        return $languages;
    }

    public function posts_join_related_posts($join, \WP_Query $query)
    {
        global $wpdb;

        if (empty($query->get('related_posts'))) {
            return $join;
        }

        foreach ($query->get('related_posts') as $related_posts_args) {
            $join .= " LEFT JOIN {$wpdb->postmeta} post_rp_{$related_posts_args['field']} ON {$wpdb->posts}.ID=post_rp_{$related_posts_args['field']}.post_id AND post_rp_{$related_posts_args['field']}.meta_key='{$related_posts_args['field']}'";
        }

        return $join;
    }

    public function posts_where_related_posts_in($where, \WP_Query $query)
    {
        if (empty($query->get('related_posts'))) {
            return $where;
        }

        foreach ($query->get('related_posts') as $related_posts_args) {
            $id_where = array();

            foreach ($related_posts_args['ids'] as $id) {
                if (!is_int($id)) {
                    continue;
                }

                $id_where[] = "post_rp_{$related_posts_args['field']}.meta_value LIKE '%s:" . strlen((string) $id) . ':"' . $id . '";%\'';
            }

            if (empty($id_where)) {
                continue;
            }

            $where .= ' AND (' . join(' OR ', $id_where) . ')';
        }

        return $where;
    }

    public function get_styles()
    {
        return array(
            'document-directory' => array(
                'production'  => get_stylesheet_directory_uri() . '/dist/css/document-directory.css',
            )
        );
    }

    public function get_scripts()
    {
        return array(
            'select2' => array(
                'development' => get_stylesheet_directory_uri() . '/src/js/select2.js',
                'production'  => get_stylesheet_directory_uri() . '/dist/js/select2.js',
            ),
            'document-directory' => array(
                'development' => 'http://localhost:3000/js/document-directory.js',
                'production'  => get_stylesheet_directory_uri() . '/dist/js/document-directory.js',
                'vars_name'   => 'documentDirectoryProps',
                'vars'        => array(
                    'rootClassName'         => $this->classes['root'],
                    'searchFormClassName'   => $this->classes['search_form'],
                    'loaderClassName'       => $this->classes['loader'],
                    'filterClassName'       => $this->classes['filter'],
                    'downloadClassName'     => $this->classes['download'],
                    'pagerClassName'        => $this->classes['pager'],
                    'scrollOffsetClassName' => $this->classes['scroll_offset'],
                    'documentDcClose'       => $this->classes['data_capture_close'],
                    'clearSearchClassName'  => $this->classes['clear_search']
                )
            )
        );
    }

    public function enqueue_gform_scripts()
    {
        $form_id = $this->get_download_data_capture_form_id();

        if (!function_exists(('gravity_form_enqueue_scripts')) || !$form_id) {
            return;
        }

        gravity_form_enqueue_scripts($form_id, true);
    }

    public function setup_classes()
    {
        $this->classes = apply_filters('document_directory_classes', array(
            'root'               => 'document-directory',
            'search_form'        => 'document-directory-search',
            'loader'             => 'document-directory-loader',
            'filter'             => 'document-directory-filter',
            'download'           => 'document-directory-download',
            'pager'              => 'page-numbers',
            'scroll_offset'      => 'main-nav',
            'data_capture_close' => 'document-dc-close',
            'clear_search'       => 'document-directory__clear-search'
        ));
    }

    public function get_filters()
    {
        return array(
            'document-application' => array(
                'label'    => __('Application', 'gantrex'),
                'multiple' => true,
                'translation_element_type' => 'document_application',
                'object_type' => 'term'
            ),
            'document-industry'  => array(
                'label'    => __('Industry', 'gantrex'),
                'multiple' => true,
                'translation_element_type' => 'industries',
                'object_type' => 'post'
            ),
            'document-language' => array(
                'label'    => __('Language', 'gantrex'),
                'multiple' => true,
                'translation_element_type' => 'document_language',
                'object_type' => 'term'
            ),
            'product'  => array(
                'label'    => __('Product', 'gantrex'),
                'multiple' => true,
                'translation_element_type' => 'products',
                'object_type' => 'post'
            ),
            'service'  => array(
                'label'    => __('Service', 'gantrex'),
                'multiple' => true,
                'translation_element_type' => 'services',
                'object_type' => 'post'
            )
        );
    }

    public function get_columns()
    {
        return array(
            'name'        => __('Name', 'gantrex'),
            'language'    => __('Language', 'gantrex'),
            'type'        => __('Type', 'gantrex'),
            'product'     => __('Product', 'gantrex'),
            // 'product-group' => __('Product Group', 'gantrex'),
            'industry'    => __('Industry', 'gantrex'),
            'service'     => __('Service', 'gantrex'),
            'application' => __('Application', 'gantrex')
        );
    }

    public function print_filters()
    {
        $result = array();

        foreach ($this->get_filters() as $filter => $args) {
            $result[] = new DocumentFilter($filter, $args);
        }

        template('template-parts/document-archive/filters', array(
            'filters' => $result,
            'class'   => $this->classes['filter']
        ));
    }

    public function print_column_headers()
    {
        $result = array();

        foreach ($this->get_columns() as $column => $label) {
            $result[] = new DocumentColumn($column, $label);
        }

        template('template-parts/document-archive/table-headers', array(
            'columns' => $result
        ));
    }

    public function default_filter_options_post_type_default($query_var, $post_type)
    {
        $options = array();
        $selected = parse_csv(get_query_var($query_var));

        $posts = get_posts(array(
            'post_type'        => $post_type,
            'posts_per_page'   => -1,
            'post_status'      => 'publish',
            'suppress_filters' => false
        ));

        foreach ($posts as $post) {
            $options[] = array(
                'value'    => $post->post_name,
                'label'    => $post->post_title,
                'selected' => in_array($post->post_name, $selected, true)
            );
        }

        return $options;
    }

    public function default_filter_options_product()
    {
        return $this->default_filter_options_post_type_default('product', 'products');
    }

    public function default_filter_options_industry()
    {
        return $this->default_filter_options_post_type_default('document-industry', 'industries');
    }

    public function default_filter_options_service()
    {
        return $this->default_filter_options_post_type_default('service', 'services');
    }

    public function default_filter_options_taxonomy_default($query_var, $taxonomy)
    {
        $options  = array();
        $selected = parse_csv(get_query_var($query_var));

        foreach (get_terms(array('taxonomy' => $taxonomy)) as $term) {
            $options[] = array(
                'value'    => $term->slug,
                'label'    => $term->name,
                'selected' => in_array($term->slug, $selected, true)
            );
        }

        return $options;
    }

    public function default_filter_options_language()
    {
        return $this->default_filter_options_taxonomy_default('document-language', 'document_language');
    }

    public function default_filter_options_category()
    {
        return $this->default_filter_options_taxonomy_default('document-application', 'document_application');
    }

    public function default_filter_options_product_group()
    {
        return $this->default_filter_options_taxonomy_default('document-product-group', 'document_product_group');
    }

    public function default_filter_application_post_type_default($query, $terms, $post_type)
    {
        $ids = array();

        foreach ($terms as $term) {
            $posts = get_posts(array(
                'post_type'      => $post_type,
                'posts_per_page' => 1,
                'post_status'    => 'publish',
                'name'           => $term
            ));

            if (empty($posts)) {
                continue;
            }

            $ids[] = apply_filters('wpml_object_id', $posts[0]->ID, 'post', false, apply_filters('wpml_default_language', null));
        }

        $related_posts = $query->get('related_posts', array());

        $related_posts[] = array(
            'field' => $post_type,
            'ids'   => $ids
        );

        $query->set('related_posts', $related_posts);
    }

    public function default_filter_application_product(\WP_Query $query, $terms)
    {
        $this->default_filter_application_post_type_default($query, $terms, 'products');
    }

    public function default_filter_application_industry(\WP_Query $query, $terms)
    {
        $this->default_filter_application_post_type_default($query, $terms, 'industries');
    }

    public function default_filter_application_service(\WP_Query $query, $terms)
    {
        $this->default_filter_application_post_type_default($query, $terms, 'services');
    }

    public function default_filter_application_taxonomy_default($query, $terms, $taxonomy)
    {
        $tax_query = $query->get('tax_query', array());

        $tax_query[] = array(
            'taxonomy' => $taxonomy,
            'field'    => 'slug',
            'terms'    => $terms,
            'compare'  => 'IN'
        );

        $query->set('tax_query', $tax_query);
    }

    public function default_filter_language_category(\WP_Query $query, $terms)
    {
        return $this->default_filter_application_taxonomy_default($query, $terms, 'document_language');
    }

    public function default_filter_application_category(\WP_Query $query, $terms)
    {
        return $this->default_filter_application_taxonomy_default($query, $terms, 'document_application');
    }

    public function default_filter_application_product_group(\WP_Query $query, $terms)
    {
        return $this->default_filter_application_taxonomy_default($query, $terms, 'document_product_group');
    }

    public function get_download_data_capture_form_id()
    {
        $form_id = get_field('document_download_data_capture_form', 'option');

        if (!$form_id) {
            return null;
        }

        $form_id = absint($form_id);

        return $form_id;
    }

    public function get_download_data_capture_form(\WP_Post $document)
    {
        $form_id = $this->get_download_data_capture_form_id();

        if (!$form_id) {
            return null;
        }

        $form = do_shortcode(sprintf(
            '[gravityform id="%d" ajax="true"  field_values="document_id=%d" /]',
            $form_id,
            $document->ID
        ));

        if (!$form) {
            return null;
        }

        return get_template('template-parts/common/data-capture-wrap', array(
            'form' => $form,
            'close_class' => $this->classes['data_capture_close']
        ));
    }

    public function add_dc_entry_meta($entry_meta, $form_id)
    {
        if ($form_id !== $this->get_download_data_capture_form_id()) {
            return $entry_meta;
        }

        $entry_meta['token'] = array(
            'label' => 'Token',
            'is_numeric' => true,
            'update_entry_meta_callback' => array($this, 'update_dc_entry_token'),
            'is_default_column' => false
        );

        $entry_meta['document'] = array(
            'label' => 'Document',
            'is_numeric' => true,
            'update_entry_meta_callback' => array($this, 'update_dc_entry_document'),
            'is_default_column' => true
        );

        return $entry_meta;
    }

    public function update_dc_entry_token($key, $lead, $form)
    {
        return bin2hex(random_bytes(20));
    }

    public function update_dc_entry_document($key, $lead, $form)
    {
        $field_values = wp_parse_args(rgpost('gform_field_values'));

        if (empty($field_values['document_id'])) {
            return '[Unknown:1]';
        }

        $document_id = (int) $field_values['document_id'];

        if (!$document_id) {
            return '[Unknown:2]';
        }

        $document = get_post($document_id);

        if (!$document || $document->post_status !== 'publish' || $document->post_type !== 'document') {
            return '[Unknown:3]';
        }

        return sprintf(
            '#%d - %s',
            $document->ID,
            apply_filters('the_title', $document->post_title, $document->ID)
        );
    }

    public function add_dc_meta_box($meta_boxes, $entry, $form)
    {
        if ($form['id'] !== $this->get_download_data_capture_form_id()) {
            return $meta_boxes;
        }

        $document_meta_box = array(
            'title'         => esc_html__('Data Capture', 'gravityforms'),
            'callback'      => array($this, 'data_capture_meta_box'),
            'context'       => 'side',
            'callback_args' => array($entry, $form),
        );

        return array_merge(
            array('document' => $document_meta_box),
            $meta_boxes
        );
    }

    public function data_capture_meta_box($entry, $form)
    {
        if (empty($entry['entry']['document'])) {
            return;
        }

        echo '<div><strong>Document downloaded:</strong></div>';
        echo sprintf(
            '<div>%s</div>',
            $entry['entry']['document']
        );
    }

    public function add_dc_entry_info($email, $format, $notification, $entry)
    {
        if (absint($entry['form_id']) !== $this->get_download_data_capture_form_id()) {
            return $email;
        }

        if (empty($entry['document'])) {
            return $email;
        }

        $content = sprintf(
            apply_filters('gform_notification_document_downloaded', '<div><strong>Document downloaded:</strong></div><div>%s</div>'),
            $entry['document']
        );

        $email['message'] = str_replace('</body>', sprintf('%s</body>', $content), $email['message']);

        return $email;
    }

    public function inject_dc_confirmation_token($confirmation, $form, $entry, $ajax)
    {
        if ($form['id'] !== $this->get_download_data_capture_form_id()) {
            return $confirmation;
        }

        if (!is_string($confirmation)) {
            return $confirmation;
        }

        $confirmation .= \GFCommon::get_inline_script_tag("window.dataCaptureResultToken = '{$entry['token']}'");

        return $confirmation;
    }

    public function prevent_dc_confirmation_scroll($anchor, $form)
    {
        if ($form['id'] !== $this->get_download_data_capture_form_id()) {
            return $anchor;
        }

        return false;
    }

    public function ajax_document_download_url()
    {
        $data = json_decode(file_get_contents('php://input'), true);

        if (empty($data['id'])) {
            return wp_send_json_error("A document ID is required");
        }

        $document = get_post($data['id']);

        if (!$document || $document->post_status !== 'publish' || $document->post_type !== 'document') {
            return wp_send_json_error("An invalid document was requested");
        }

        $file = get_field('document', $document->ID);

        if (!$file) {
            return wp_send_json_error("Could not locate document file");
        }

        $form = $this->get_download_data_capture_form($document);

        if (!$form) {
            wp_send_json_success(array(
                'id'     => $data['id'],
                'url'    => $file['url']
            ));
        }

        if (empty($data['token'])) {
            return wp_send_json_success(array(
                'id'     => $data['id'],
                'form'   => $form
            ));
        }

        $entries = \GFAPI::get_entries(
            $this->get_download_data_capture_form_id(),
            array(
                'field_filters' => array(
                    array(
                        'key' => 'token',
                        'value' => $data['token']
                    )
                )
            )
        );

        if (empty($entries)) {
            return wp_send_json_success(array(
                'id'     => $data['id'],
                'form'   => $form
            ));
        }

        return wp_send_json_success(array(
            'id'     => $data['id'],
            'url'    => $file['url']
        ));
    }

    public function ajax_document_download()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : '';

        if (empty($id)) {
            return wp_send_json_error("A document ID is required");
        }

        $document = get_post($id);

        if (!$document || $document->post_status !== 'publish' || $document->post_type !== 'document') {
            return wp_send_json_error("An invalid document was requested");
        }

        $file = get_field('document', $document->ID);

        if (!$file) {
            return wp_send_json_error("Could not locate document file");
        }

        header("Content-Type: application/force-download");
        header("Content-Type: application/octet-stream");
        header("Content-Type: application/download");
        header('Content-Disposition: attachment; filename="' . $file['filename'] . '"');

        echo file_get_contents(get_attached_file($file['id']));
        exit();
    }

    public function manage_document_columns($columns)
    {
        unset($columns['date']);

        $columns['document_file'] = __('File', 'gantrex');
        $columns['date'] = __('Date', 'gantrex');

        return $columns;
    }

    public function manage_document_column_output($column, $post_id)
    {
        if ($column !== 'document_file') {
            return;
        }

        $file = get_field('document', $post_id);

        if (!$file) {
            echo '<span style="color: #e14646; font-weight: bold">No file selected</span>';
            return;
        }

        if (!file_exists(get_attached_file($file['ID']))) {
            echo '<span style="color: #e14646; font-weight: bold">File does not exist</span>';
            return;
        }

        echo sprintf(
            '<a href="%s">%s</a>',
            get_edit_post_link($file['ID']),
            $file['title']
        );
    }
}

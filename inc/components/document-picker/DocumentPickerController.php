<?php

namespace Brace;

class DocumentPickerController extends ComponentController
{
    public $classes = array();

    public $related_post_types = array();

    /**
     * @return DocumentPickerController
     */
    public static function getInstance()
    {
        return parent::getInstance();
    }

    public function init()
    {
        parent::init();

        $this->setup_classes();
        $this->setup_related_post_types();

        add_action('init', array($this, 'register_shortcodes'));

        add_ajax_action('document_picker', array($this, 'ajax_document_picker'));
    }

    public function register_shortcodes()
    {
        $terms = get_terms(array('taxonomy' => 'document_type', 'hide_empty' => false));

        if (is_wp_error($terms) || empty($terms)) {
            return;
        }

        $manager = ShortcodeManager::getInstance();
        $taxonomies = get_object_taxonomies('document');

        foreach ($terms as $term) {
            $manager->register($term->slug, array(
                'callback' => array($this, 'render'),
                'args'     => array(
                    'document_type' => $term->slug
                ),
                'attr_pairs' => array_merge(
                    array_fill_keys(array_merge($taxonomies, $this->related_post_types), ''),
                    array('theme' => '')
                )
            ));
        }
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
            'document-picker' => array(
                'development' => 'http://localhost:3000/js/document-picker.js',
                'production'  => get_stylesheet_directory_uri() . '/dist/js/document-picker.js',
                'vars_name'   => 'documentPickerProps',
                'vars'        => array(
                    'rootClassName'           => $this->classes['root'],
                    'languageClassName'       => $this->classes['language'],
                    'selectClassName'         => $this->classes['select'],
                    'languageLoaderClassName' => $this->classes['language_loader'],
                    'documentLoaderClassName' => $this->classes['document_loader'],
                )
            )
        );
    }

    public function setup_classes()
    {
        $this->classes = apply_filters('document_picker_classes', array(
            'root'            => 'document-picker',
            'language'        => 'document-picker-language',
            'select'          => 'document-picker-select',
            'language_loader' => 'document-picker-language-loader',
            'document_loader' => 'document-picker-document-loader'
        ));
    }

    public function setup_related_post_types()
    {
        $this->related_post_types = apply_filters('document_related_post_types', array(
            'products',
            'services',
            'industries'
        ));
    }

    public function pluck_shortcode_tax_filters($atts)
    {
        $result = array();
        $taxonomies = get_object_taxonomies('document');

        foreach ($taxonomies as $taxonomy) {
            if (!isset($atts[$taxonomy])) {
                continue;
            }

            $result[$taxonomy] = $atts[$taxonomy];
        }

        return $result;
    }

    public function pluck_shortcode_pt_filters($atts)
    {
        $result = array();

        foreach ($this->related_post_types as $post_type) {
            if (!isset($atts[$post_type])) {
                continue;
            }

            $result[$post_type] = $atts[$post_type];
        }

        return $result;
    }

    public function create_document_query($filters)
    {
        global $sitepress;

        $term_filters = isset($filters['tax']) ? $filters['tax'] : array();

        $query_args = array_merge(
            array(
                'post_type'        => 'document',
                'posts_per_page'   => -1,
                'post_status'      => 'publish',
                'suppress_filters' => 0
            ),
            $term_filters
        );

        if (isset($filters['pt'])) {
            $related_posts = array();

            $default_language = apply_filters('wpml_default_language', null);
            $current_lang = apply_filters('wpml_current_language', null);

            // $sitepress->switch_lang($default_language, false);
            PLL()->curlang = PLL()->model->get_language( $default_language );

            foreach ($filters['pt'] as $post_type => $pt_filter) {
                $slugs = is_string($pt_filter) ? parse_csv($pt_filter) : $pt_filter;
                $ids = array();

                foreach ($slugs as $slug) {
                    $posts = get_posts(array(
                        'post_type'      => $post_type,
                        'posts_per_page' => 1,
                        'post_status'    => 'publish',
                        'name'           => $slug
                    ));

                    if (empty($posts)) {
                        continue;
                    }

                    $ids[] = $posts[0]->ID;
                }

                if (!empty($ids)) {
                    $related_posts[] = array(
                        'field' => $post_type,
                        'ids'   => $ids
                    );
                }
            }

            // $sitepress->switch_lang($current_lang, false);
            PLL()->curlang = PLL()->model->get_language( $current_lang );

            if (!empty($related_posts)) {
                $query_args['related_posts'] = $related_posts;
            }
        }

        return $query_args;
    }

    public function render($args = array())
    {
        $this->enqueue();

        $tax_filters = $this->pluck_shortcode_tax_filters($args);
        $pt_filters = $this->pluck_shortcode_pt_filters($args);

        $languages = get_terms(array(
            'taxonomy' => 'document_language'
        ));

        $languages_filtered = array();

        foreach ($languages as $language) {
            $language_query_args = $this->create_document_query(array(
                'tax' => array_merge($tax_filters, array('document_language' => $language->slug)),
                'pt'  => $pt_filters
            ));

            $language_query = get_posts($language_query_args);

            if (empty($language_query)) {
                continue;
            }

            $languages_filtered[] = $language;
        }

        $language_picker = get_template('template-parts/document-picker/language-picker', array(
            'class'     => $this->classes['language'],
            'languages' => $languages_filtered
        ));

        $filters = array(
            'tax' => $tax_filters,
            'pt'  => $pt_filters
        );

        $document_picker = $this->render_document_picker($filters);

        $theme = !empty($args['theme']) ? $args['theme'] : 'light';

        $container = get_template('template-parts/document-picker/container', array(
            'class'                 => sprintf('%1$s %1$s--%2$s', $this->classes['root'], $theme),
            'filters_attr'          => json_encode($filters),
            'language_picker'       => $language_picker,
            'document_picker'       => $document_picker,
            'language_loader_class' => $this->classes['language_loader'],
            'document_loader_class' => $this->classes['document_loader'],
            'theme'                 => $theme
        ));

        return $container;
    }

    public function render_document_picker($filters = array())
    {
        $query_args = $this->create_document_query($filters);
        $documents = get_posts($query_args);

        if (empty($documents)) {
            return get_template('template-parts/document-picker/no-results', array(
                'class'     => $this->classes['select']
            ));
        }

        return get_template('template-parts/document-picker/document-picker', array(
            'class'     => $this->classes['select'],
            'documents' => $documents
        ));
    }

    public function ajax_document_picker()
    {
        global $sitepress;

        $data = json_decode(file_get_contents('php://input'), true);

        $language = isset($data['language']) ? $data['language'] : '';
        $filters  = isset($data['filters']) ? $data['filters'] : array();

        if (!isset($filters['tax'])) {
            $filters['tax'] = array();
        }

        $filters['tax']['document_language'] = $language;

        wp_send_json_success(array(
            'markup'  => $this->render_document_picker($filters),
            'filters' => $filters
        ));
    }
}

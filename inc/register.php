<?php

namespace Brace;

function register_post_types()
{
    $post_types = array(
        'location' => array(
            'public'       => true,
            'show_in_rest' => true,
            'has_archive'  => false,
            'hierarchical' => true,
            'menu_icon'    => 'dashicons-admin-site',
            'supports'     => array('title', 'page-attributes')
        ),
        'team_member' => array(
            'public'       => true,
            'show_in_rest' => true,
            'has_archive'  => true,
            'hierarchical' => true,
            'menu_icon'    => 'dashicons-admin-users',
            'supports'     => array('title'),
            'publicly_queryable'  => false
        ),
        'document' => array(
            'public'       => true,
            'show_in_rest' => true,
            'has_archive'  => get_field('document_directory_path', 'option') ?: 'documents',
            'hierarchical' => true,
            'menu_icon'    => 'dashicons-media-document',
            'supports'     => array('title', 'editor')
        ),
    );

    foreach ($post_types as $post_type => $post_type_args) {
        register_post_type($post_type, array_merge(
            $post_type_args,
            array(
                'labels' => create_pt_labels($post_type)
            )
        ));
    }
}

add_action('init', '\Brace\register_post_types');

function register_taxonomies()
{
    $taxonomies = array(
        'document_type' => array(
            'hierarchical'      => true,
            'show_ui'           => true,
            'show_admin_column' => true,
            'query_var'         => true,
            'rewrite'           => false,
            'show_in_rest'      => true,
            'post_types'        => array('document'),
            'label_origin'      => 'type'
        ),
        'document_application' => array(
            'hierarchical'      => true,
            'show_ui'           => true,
            'show_admin_column' => true,
            'query_var'         => true,
            'rewrite'           => false,
            'show_in_rest'      => true,
            'post_types'        => array('document'),
            'label_origin'      => 'application'
        ),
        'document_product_group' => array(
            'hierarchical'      => true,
            'show_ui'           => true,
            'show_admin_column' => true,
            'query_var'         => true,
            'rewrite'           => false,
            'show_in_rest'      => true,
            'post_types'        => array('document'),
            'label_origin'      => 'product_group'
        ),
        'document_language' => array(
            'hierarchical'      => true,
            'show_ui'           => true,
            'show_admin_column' => true,
            'query_var'         => true,
            'rewrite'           => false,
            'show_in_rest'      => true,
            'post_types'        => array('document'),
            'label_origin'      => 'language'
        ),
    );

    foreach ($taxonomies as $taxonomy => $taxonomy_args) {
        register_taxonomy($taxonomy, $taxonomy_args['post_types'], array_merge(
            $taxonomy_args,
            array(
                'labels' => create_tax_labels(isset($taxonomy_args['label_origin']) ? $taxonomy_args['label_origin'] : $taxonomy)
            )
        ));
    }
}

add_action('init', '\Brace\register_taxonomies');

function register_options_page()
{
    if (!function_exists('acf_add_options_page')) {
        return;
    }

    acf_add_options_page(array(
        'page_title'  => 'Gantrex',
        'menu_title'  => 'Gantrex',
        'menu_slug'   => 'gantrex-settings',
        'parent_slug' => 'options-general.php'
    ));

    if(function_exists('acf_add_options_sub_page')) {

        $cpt_pages = array(
            'careers',
            'industries',
            'services',
            'references',
            'products',
            'post'
        );

        foreach ($cpt_pages as $cpt) {

            //    Register the CPT language options pages
            foreach (['en', 'es', 'de', 'fr', 'zh-hans'] as $lang) {

                $lang_uc = ucfirst($lang);
                $parent = '';

                if($cpt == 'post') {
                    $parent = 'edit.php';
                } else {
                    $parent = 'edit.php?post_type=';
                }

                acf_add_options_sub_page([
                    'page_title' => "Options $lang_uc",
                    'menu_title' => __("Options ${lang_uc}", 'brace-starter-theme'),
                    'menu_slug' => "${cpt}-options-${lang}",
                    'post_id' => $lang,
                    'parent' => "${parent}${cpt}"
                ]);

            }

        }

    }

}

add_action('init', '\Brace\register_options_page');

function register_acf_fields()
{
    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    $locationFields = ACF\fields('Location Options', 'location')->add(
        ACF\field('Latitude', 'text')->width(50),
        ACF\field('Longitude', 'text')->width(50),
        ACF\field('Team Member', 'post_object')->set(array(
            'post_type' => array('team_member')
        )),
        ACF\repeater('Manager CCs')->set(array(
            'instructions' => 'Email addresses provided here will be CC\'d into any notifications sent for this location and any locations within it.'
        ))->add(
            ACF\field('Email', 'email')
        )
    );

    acf_add_local_field_group($locationFields->toArray());

    $teamMemberFields = ACF\fields('Team Member Options', 'team_member')->add(
        ACF\field('Role', 'text')->width(33.33),
        ACF\field('Telephone', 'text')->width(33.33),
        ACF\field('Email', 'email')->width(33.33),
        ACF\field('Image ', 'image')->width(33.33)
    );

    acf_add_local_field_group($teamMemberFields->toArray());

    $documentFields = ACF\fields('Document Options', 'document')->add(
        ACF\field('Document', 'file')->set(array(
            'required' => true
        )),
        ACF\field('Products', 'post_object')->set(array(
            'multiple'  => true,
            'post_type' => array('products')
        ))->width(33.33),
        ACF\field('Services', 'post_object')->set(array(
            'multiple'  => true,
            'post_type' => array('services')
        ))->width(33.33),
        ACF\field('Industries', 'post_object')->set(array(
            'multiple'  => true,
            'post_type' => array('industries')
        ))->width(33.33),
    );

    acf_add_local_field_group($documentFields->toArray());

    $documentDirectoryOptions = ACF\fields('Document Directory', array(
        array(
            array(
                'param' => 'options_page',
                'operator' => '==',
                'value' => 'gantrex-settings',
            ),
        ),
    ))->add(
        ACF\field('document_directory_path', 'text')->set(array(
            'label'        => 'Path',
            'instructions' => sprintf('This value will default to "documents" if left blank. Note that upon changing this setting, you will be required to <a href="%s">flush permalinks</a> (simply navigate to the page).', admin_url('/options-permalink.php')),
            'placeholder'  => 'documents',
            'prepend'      => home_url('/')
        )),
        ACF\field('document_directory_image', 'image')->set(array(
            'label'         => 'Hero image',
            'instructions'  => 'This image will be displayed as a full-page hero at the top of the document directory page.',
            'return_format' => 'id'
        )),
        ACF\field('document_directory_intro', 'wysiwyg')->set(array(
            'label'        => 'Introduction text',
            'instructions' => 'A brief introduction to be displayed above the document directory table.'
        )),
        ACF\field('document_download_data_capture_form', 'select')->set(array(
            'label'        => 'Download Data Capture Form',
            'instructions' => 'This form will be presented to the user when they attempt to download a document. It will only be presented to each user once',
            'choices'      => array('' => 'No form selected') + wp_list_pluck(\GFAPI::get_forms(), 'title', 'id')
        ))
    );

    acf_add_local_field_group($documentDirectoryOptions->toArray());
}

add_action('init', '\Brace\register_acf_fields');

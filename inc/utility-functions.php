<?php

namespace Brace;

function pluralize($singular)
{
    $last_letter = strtolower($singular[strlen($singular) - 1]);
    switch ($last_letter) {
        case 'y':
            return substr($singular, 0, -1) . 'ies';
        case 's':
            return $singular . 'es';
        default:
            return $singular . 's';
    }
}

function create_pt_labels($post_type)
{
    $single = ucwords(str_replace('_', ' ', $post_type));
    $single_lower = strtolower($single);
    $plural = pluralize($single);
    $plural_lower = strtolower($plural);

    return array(
        'name'                  => _x("{$plural}", 'Post type general name', 'gantrex'),
        'singular_name'         => _x("{$single}", 'Post type singular name', 'gantrex'),
        'menu_name'             => _x("{$plural}", 'Admin Menu text', 'gantrex'),
        'name_admin_bar'        => _x("{$single}", 'Add New on Toolbar', 'gantrex'),
        'add_new'               => __("Add New", 'gantrex'),
        'add_new_item'          => __("Add New {$single}", 'gantrex'),
        'new_item'              => __("New {$single}", 'gantrex'),
        'edit_item'             => __("Edit {$single}", 'gantrex'),
        'view_item'             => __("View {$single}", 'gantrex'),
        'view_items'            => __("View {$plural}", 'gantrex'),
        'all_items'             => __("All {$plural}", 'gantrex'),
        'search_items'          => __("Search {$plural}", 'gantrex'),
        'parent_item_colon'     => __("Parent {$plural}:", 'gantrex'),
        'not_found'             => __("No {$plural_lower} found.", 'gantrex'),
        'not_found_in_trash'    => __("No {$plural_lower} found in Trash.", 'gantrex'),
        'featured_image'        => _x("{$single} Cover Image", 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'gantrex'),
        'set_featured_image'    => _x("Set cover image", 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'gantrex'),
        'remove_featured_image' => _x("Remove cover image", 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'gantrex'),
        'use_featured_image'    => _x("Use as cover image", 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'gantrex'),
        'archives'              => _x("{$single} archives", 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'gantrex'),
        'insert_into_item'      => _x("Insert into {$single_lower}", 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'gantrex'),
        'uploaded_to_this_item' => _x("Uploaded to this {$single_lower}", 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'gantrex'),
        'filter_items_list'     => _x("Filter {$plural_lower} list", 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'gantrex'),
        'items_list_navigation' => _x("{$plural} list navigation", 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'gantrex'),
        'items_list'            => _x("{$plural} list", 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'gantrex'),
    );
}

function create_tax_labels($taxonomy)
{
    $single = ucwords(str_replace('_', ' ', $taxonomy));
    $plural = pluralize($single);

    return array(
        'name'              => _x("{$plural}", 'taxonomy general name', 'gantrex'),
        'singular_name'     => _x("{$single}", 'taxonomy singular name', 'gantrex'),
        'search_items'      => __("Search {$plural}", 'gantrex'),
        'all_items'         => __("All {$plural}", 'gantrex'),
        'parent_item'       => __("Parent {$single}", 'gantrex'),
        'parent_item_colon' => __("Parent {$single}:", 'gantrex'),
        'edit_item'         => __("Edit {$single}", 'gantrex'),
        'update_item'       => __("Update {$single}", 'gantrex'),
        'add_new_item'      => __("Add New {$single}", 'gantrex'),
        'new_item_name'     => __("New {$single} Name", 'gantrex'),
        'menu_name'         => __("{$single}", 'gantrex'),
    );
}

function add_ajax_action($action, $callback)
{
    add_action("wp_ajax_nopriv_{$action}", $callback);
    add_action("wp_ajax_{$action}", $callback);
}

function get_location(int $post_id)
{
    $post = get_post($post_id);

    if (!$post || $post->post_type !== 'location') {
        return null;
    }

    return $post;
}

function get_field($selector, $post_id = false, $format_value = true)
{
    if (!function_exists('\get_field')) {
        return null;
    }

    return \get_field($selector, $post_id, $format_value);
}

function parse_csv($str)
{
    return array_filter(str_getcsv($str));
}

function get_translated_term_by_slug($slug, $taxonomy, $target_language)
{
    global $sitepress;

    $term = get_term_by('slug', $slug, $taxonomy);

    if (!$term) {
        return null;
    }

    $translated_term_id = apply_filters(
        'wpml_object_id',
        $term->term_id,
        $taxonomy,
        false,
        $target_language
    );

    if (!$translated_term_id) {
        return null;
    }

    $has_get_term_filter = remove_filter('get_term', array($sitepress, 'get_term_adjust_id'), 1);

    $translated_term = get_term($translated_term_id, $taxonomy);

    if ($has_get_term_filter) {
        add_filter('get_term', array($sitepress, 'get_term_adjust_id'), 1, 1);
    }

    return $translated_term;
}
function post_fallback_image() {
    global $post;
    $fallback_image = '';
    $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
    $fallback_image = $matches[1][0];
  
    if (empty($fallback_image)) {
        $fallback_image = get_stylesheet_directory_uri(). "/images/placeholder-1.jpg";
    }
    print '<img src="'. $fallback_image .'" alt="'. get_the_title() .'" class="wp-post-image" />';
}


  
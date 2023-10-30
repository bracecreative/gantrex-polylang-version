<?php

// Allow SVG
add_filter( 'wp_check_filetype_and_ext', function($data, $file, $filename, $mimes) {

	global $wp_version;
	if ( $wp_version !== '4.7.1' ) {
	   return $data;
	}

	$filetype = wp_check_filetype( $filename, $mimes );

	return [
		'ext'             => $filetype['ext'],
		'type'            => $filetype['type'],
		'proper_filename' => $data['proper_filename']
	];

}, 10, 4 );

add_filter( 'upload_mimes', 'cc_mime_types' );
function cc_mime_types( $mimes ){
	$mimes['svg'] = 'image/svg';
	return $mimes;
}

add_action( 'admin_head', 'fix_svg' );
function fix_svg() {
	echo '<style type="text/css">
		  .attachment-266x266, .thumbnail img {
			   width: 100% !important;
			   height: auto !important;
		  }
		  </style>';
}

function brace_highlighter($highlight, $original) {

	$highlighted_text = str_replace($highlight, "<span class='px-2 py-0 bg-accent text-white'>{$highlight}</span>", $original);

	return $highlighted_text;
	
}


function limit_words($string, $word_limit) {

	$words = explode(' ', $string);

	return implode(' ', array_slice($words, 0, $word_limit));

}

// Navigation generator
class BraceNavBuilder {
	protected $menuParams;

	public function __construct($location) {
		$this->menuParams = array(
			'theme_location' => $location,
			'container' => false,
			'echo' => true,
			'items_wrap' => '<ul id="nav-wrap">%3$s</ul>',
			'depth' => 0,
		);
	}

	public function generate() {
		echo strip_tags(wp_nav_menu( $this->menuParams ), '<a>' );
	} 
}

// Change Menu Classes
function change_ul_item_classes_in_nav( $classes, $args, $depth ) {
	if ( 0 == $depth ) {
	$classes[] = 'first-level';
	}
	if ( 1 == $depth ) {
	$classes[] = 'second-level';
	}
	return $classes;
}

add_filter( 'nav_menu_submenu_css_class', 'change_ul_item_classes_in_nav', 10, 3 );

// Insert top level class
function top_level_class($classes, $item) {
	if( $item->menu_item_parent == 0 ) {
	$classes[] = "top__level";
	}
	
	return $classes;
}
	
add_filter('nav_menu_css_class', 'top_level_class', 10, 2 );

add_filter('acf/load_field/name=choose_post_type', 'brace_acf_load_post_types');
/*
 *  Load Select Field `select_post_type` populated with the value and labels of the singular 
 *  name of all public post types
 */
function brace_acf_load_post_types( $field ) {

    $choices = get_post_types( array( 'show_in_nav_menus' => true ), 'objects' );

    foreach ( $choices as $post_type ) :
        $field['choices'][$post_type->name] = $post_type->labels->singular_name;
    endforeach;
    return $field;
}

function gtxCleanString($string) {
    //Lower case everything
    $string = strtolower($string);
    //Make alphanumeric (removes all other characters)
    $string = preg_replace("/[^a-z0-9_\s-]/", "", $string);
    //Clean up multiple dashes or whitespaces
    $string = preg_replace("/[\s-]+/", " ", $string);
    //Convert whitespaces and underscore to dash
    $string = preg_replace("/[\s_]/", "-", $string);
    return $string;
}


//  ACF options page
if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
        'page_title'    => 'Ports Page Logo IDs',
        'menu_title'    => 'Ports Page Logo IDs',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
}

//Functions used for hardcoded links in polylang
function the_permalink_polylang($post_id){

    $translations = pll_get_post_translations($post_id);
    $current_lang = pll_current_language('slug');

    echo get_the_permalink($translations[$current_lang]);
}

function the_title_polylang($post_id){
    $translations = pll_get_post_translations($post_id);
    $current_lang = pll_current_language('slug');

    echo get_the_title($translations[$current_lang]);
}

//Show archives even if there are no Polylang translations for that post type
add_filter( 'pll_hide_archive_translation_url', '__return_false' );
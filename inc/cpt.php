<?php function create_post_types() {
	$labels = array(
		'name' 					=> __( 'Products', 'gantrex' ),
		'singular_name' 		=> __( 'Product', 'gantrex' ),
		'add_new' 				=> __( 'Add Product', 'gantrex' ),
		'add_new_item' 			=> __( 'Add New Product', 'gantrex' ),
		'edit_item' 			=> __( 'Edit Product', 'gantrex' ),
		'new_item' 				=> __( 'New Product', 'gantrex' ),
		'view_item' 			=> __( 'View Product', 'gantrex' ),
		'search_items' 			=> __( 'Search Product', 'gantrex' ),
		'not_found' 			=> __( 'No Product found', 'gantrex' ),
		'not_found_in_trash' 	=> __( 'No Product found in Trash', 'gantrex' ),
		'parent_item_colon' 	=> ''
	);


	$args = array(
	'labels' 				=> $labels,
	'public' 				=> true,
	'show_in_rest' 			=> true,
	'has_archive' 			=> true,
	'hierarchical' 			=> true,
	'menu_icon' 			=> 'dashicons-cart',
	'supports' 				=> array( 'title', 'editor', 'thumbnail', 'excerpt', 'page-attributes')
	);

	register_post_type( 'products', $args );

	$labels = array(
		'name' 					=> __( 'Services', 'gantrex' ),
		'singular_name' 		=> __( 'Service', 'gantrex' ),
		'add_new' 				=> __( 'Add Service', 'gantrex' ),
		'add_new_item' 			=> __( 'Add New Service', 'gantrex' ),
		'edit_item' 			=> __( 'Edit Service', 'gantrex' ),
		'new_item' 				=> __( 'New Service', 'gantrex' ),
		'view_item' 			=> __( 'View Service', 'gantrex' ),
		'search_items' 			=> __( 'Search Service', 'gantrex' ),
		'not_found' 			=> __( 'No Service found', 'gantrex' ),
		'not_found_in_trash' 	=> __( 'No Service found in Trash', 'gantrex' ),
		'parent_item_colon' 	=> ''
	);

	$args = array(
	'labels' 				=> $labels,
	'public' 				=> true,
	'show_in_rest' 			=> true,
	'has_archive' 			=> true,
	'hierarchical' 			=> true,
	'menu_icon' 			=> 'dashicons-businessperson',
	'supports' 				=> array( 'title', 'editor', 'thumbnail', 'excerpt', 'page-attributes')
	);

	register_post_type( 'services', $args );

	$labels = array(
		'name' 					=> __( 'Careers', 'gantrex' ),
		'singular_name' 		=> __( 'Career', 'gantrex' ),
		'add_new' 				=> __( 'Add Career', 'gantrex' ),
		'add_new_item' 			=> __( 'Add New Career', 'gantrex' ),
		'edit_item' 			=> __( 'Edit Career', 'gantrex' ),
		'new_item' 				=> __( 'New Career', 'gantrex' ),
		'view_item' 			=> __( 'View Career', 'gantrex' ),
		'search_items' 			=> __( 'Search Career', 'gantrex' ),
		'not_found' 			=> __( 'No Career found', 'gantrex' ),
		'not_found_in_trash' 	=> __( 'No Career found in Trash', 'gantrex' ),
		'parent_item_colon' 	=> ''
	);

	$args = array(
	'labels' 				=> $labels,
	'public' 				=> true,
	'show_in_rest' 			=> true,
	'has_archive' 			=> true,
	'hierarchical' 			=> true,
	'menu_icon' 			=> 'dashicons-money',
	'supports' 				=> array( 'title', 'editor', 'thumbnail', 'excerpt')
	);

	register_post_type( 'careers', $args );

	$labels = array(
		'name' 					=> __( 'References', 'gantrex' ),
		'singular_name' 		=> __( 'Reference', 'gantrex' ),
		'add_new' 				=> __( 'Add Reference', 'gantrex' ),
		'add_new_item' 			=> __( 'Add New Reference', 'gantrex' ),
		'edit_item' 			=> __( 'Edit Reference', 'gantrex' ),
		'new_item' 				=> __( 'New Reference', 'gantrex' ),
		'view_item' 			=> __( 'View Reference', 'gantrex' ),
		'search_items' 			=> __( 'Search Reference', 'gantrex' ),
		'not_found' 			=> __( 'No Reference found', 'gantrex' ),
		'not_found_in_trash' 	=> __( 'No Reference found in Trash', 'gantrex' ),
		'parent_item_colon' 	=> ''
	);

	$args = array(
	'labels' 				=> $labels,
	'public' 				=> true,
	'show_in_rest' 			=> true,
	'has_archive' 			=> true,
	'hierarchical' 			=> true,
	'menu_icon' 			=> 'dashicons-megaphone',
	'supports' 				=> array( 'title', 'editor', 'thumbnail', 'excerpt'),
	'taxonomies'          => array( 'category', 'countries' ),
	);

	register_post_type( 'references', $args );

	$labels = array(
		'name' 					=> __( 'Industries', 'gantrex' ),
		'singular_name' 		=> __( 'Industry', 'gantrex' ),
		'add_new' 				=> __( 'Add Industry', 'gantrex' ),
		'add_new_item' 			=> __( 'Add New Industry', 'gantrex' ),
		'edit_item' 			=> __( 'Edit Industry', 'gantrex' ),
		'new_item' 				=> __( 'New Industry', 'gantrex' ),
		'view_item' 			=> __( 'View Industry', 'gantrex' ),
		'search_items' 			=> __( 'Search Industry', 'gantrex' ),
		'not_found' 			=> __( 'No Industry found', 'gantrex' ),
		'not_found_in_trash' 	=> __( 'No Industry found in Trash', 'gantrex' ),
		'parent_item_colon' 	=> ''
	);

	$args = array(
	'labels' 				=> $labels,
	'public' 				=> true,
	'show_in_rest' 			=> true,
	'has_archive' 			=> true,
	'hierarchical' 			=> true,
	'menu_icon' 			=> 'dashicons-bank',
	'supports' 				=> array( 'title', 'editor', 'thumbnail', 'excerpt', 'page-attributes', 'custom-fields')
	);

	register_post_type( 'industries', $args );
}
add_action( 'init', 'create_post_types' );


// Register Custom Taxonomy

function custom_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Locations', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Location', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Locations', 'text_domain' ),
		'all_items'                  => __( 'All Items', 'text_domain' ),
		'parent_item'                => __( 'Parent Item', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),
		'new_item_name'              => __( 'New Item Name', 'text_domain' ),
		'add_new_item'               => __( 'Add New Item', 'text_domain' ),
		'edit_item'                  => __( 'Edit Item', 'text_domain' ),
		'update_item'                => __( 'Update Item', 'text_domain' ),
		'view_item'                  => __( 'View Item', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Items', 'text_domain' ),
		'search_items'               => __( 'Search Items', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No items', 'text_domain' ),
		'items_list'                 => __( 'Items list', 'text_domain' ),
		'items_list_navigation'      => __( 'Items list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_in_rest' 				 => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
        'exclude_from_search'        => false
	);
	register_taxonomy( 'country', ['references'], $args );

	$labels = array(
		'name'                       => _x( 'Industries', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Industry', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Industries', 'text_domain' ),
		'all_items'                  => __( 'All Items', 'text_domain' ),
		'parent_item'                => __( 'Parent Item', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),
		'new_item_name'              => __( 'New Item Name', 'text_domain' ),
		'add_new_item'               => __( 'Add New Item', 'text_domain' ),
		'edit_item'                  => __( 'Edit Item', 'text_domain' ),
		'update_item'                => __( 'Update Item', 'text_domain' ),
		'view_item'                  => __( 'View Item', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Items', 'text_domain' ),
		'search_items'               => __( 'Search Items', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No items', 'text_domain' ),
		'items_list'                 => __( 'Items list', 'text_domain' ),
		'items_list_navigation'      => __( 'Items list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_in_rest' 			=> true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'industry', ['references'], $args );

}
add_action( 'init', 'custom_taxonomy', 0 );
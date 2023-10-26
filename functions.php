<?php

use Mpdf\Tag\P;

$file_includes = array(
	'/env.php',
	'/setup.php',
	'/enqueue.php',
	'/utility.php',
	'/cpt.php',
	'/utility-functions.php',
	'/template-functions.php',
	'/acf-factory/index.php',
	'/register.php',
	'/components/index.php',
	'/gravity-forms/index.php',
	'/document-directory/index.php',
	'/custom-search.php'
);

foreach ($file_includes as $file) {
	require_once get_template_directory() . '/inc' . $file;
}


function fix_nav_menu_in_search($query)
{
	if (is_search()) {
		$query->set('post_type', ['post', 'products', 'services', 'nav_menu_item', 'location']);
	}

	return $query;
}
add_filter('pre_get_posts', 'fix_nav_menu_in_search');
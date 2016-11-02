<?php
if( function_exists('acf_add_options_page') ) {

	$option_page = acf_add_options_page(array(
		'page_title' 	=> 'Global Settings',
		'menu_title' 	=> 'Global Settings',
		'menu_slug' 	=> 'theme-global-settings',
		'capability' 	=> 'edit_posts',
		'redirect' 	=> false
	));

}

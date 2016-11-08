<?php
/**
 * The main template file
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists
 *
 * Methods for TimberHelper can be found in the /lib sub-directory
 *
 * @package  WordPress
 * @subpackage  Timber
 * @since   Timber 0.1
 */
if ( ! class_exists( 'Timber' ) ) {
	echo 'Timber not activated. Make sure you activate the plugin in <a href="/wp-admin/plugins.php#timber">/wp-admin/plugins.php</a>';
	return;
}
$context = Timber::get_context();
$context['posts'] = Timber::get_posts([
	"posts_per_page" => -1,
	"post_type" => "work",
	'tax_query' => array(
		array(
			'taxonomy' => 'sector',
			'field'    => 'term_id',
			'terms'    => get_queried_object_id()
		),
	),
]);
$context['sector'] = Timber::get_term(get_queried_object_id(), 'sector');
$context['sectordesc'] = term_description(get_queried_object_id(), 'sector');
$templates = array( 'sector.twig' );
Timber::render( $templates, $context );

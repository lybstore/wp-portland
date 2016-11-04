<?php
/**
 * Template Name: Home
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
$context['post'] = Timber::get_post();
$context['work'] = Timber::get_posts([
	'post_type' => 'work',
	'posts_per_page' => 20,
	'numberposts' => 20,
	'orderby' => 'meta_value',
	'meta_key' => 'featured'
]);
$context['news'] = get_permalink( get_option( 'page_for_posts' ) );
$context['newsticker'] = get_field('newsticker');

if(file_exists(get_stylesheet_directory().'/inc/twittercache/results.json')){
	$tweet_json = file_get_contents(get_stylesheet_directory().'/inc/twittercache/results.json');
	$context['tweet'] = json_decode(json_decode($tweet_json, true), true);
}

$context['frqs'] = get_post_type_archive_link( 'frq' );

$templates = array( 'home.twig' );
Timber::render( $templates, $context );

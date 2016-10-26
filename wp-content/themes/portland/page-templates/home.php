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
$context['newsticker'] = get_field('newsticker');
$templates = array( 'home.twig' );
Timber::render( $templates, $context );

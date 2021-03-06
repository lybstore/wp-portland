<?php

/* WOODCHIPPR: Timber and the Bones starter theme ground to a fine powder */

if ( ! class_exists( 'Timber' ) ) {
	add_action( 'admin_notices', function() {
			echo '<div class="error"><p>Timber not activated. Make sure you activate the plugin in <a href="' . esc_url( admin_url( 'plugins.php#timber' ) ) . '">' . esc_url( admin_url( 'plugins.php' ) ) . '</a></p></div>';
		} );
	return;
}

add_filter('show_admin_bar', '__return_false');

class WoodChippr extends TimberSite {

	function __construct() {
		add_theme_support( 'menus' );
		add_theme_support( 'post-thumbnails', array( 'post', 'page' ) );
		add_filter( 'timber_context', array( $this, 'add_to_context' ) );
		add_filter( 'get_twig', array( $this, 'add_to_twig' ) );
		add_action( 'init', array( $this, 'register_post_types' ) );
		add_action( 'init', array( $this, 'register_taxonomies' ) );
	  register_nav_menu('main-menu',__( 'Main Menu' ));

		add_image_size( 'prod-img', 460 );
		add_image_size( 'prod-img-r', 920 );

    /* CHIPPR functions: Bones's tidying functions */
    include_once 'inc/functions/wp-tidy.php';

    /* CHIPPR functions: Declare theme support options in dedicated file */
		include_once 'inc/functions/theme-support.php';

		/* CHIPPR functions: Utility functions */

    include_once 'inc/functions/helpers.php';

    /* CHIPPR functions: Custom gallery templating using Timber */
    include_once 'inc/functions/gallery.php';

    /* CHIPPR functions: Enqueue scripts and styles */
    include_once 'inc/functions/script-tags.php';

    /* CHIPPR functions: Custom gallery templating using Timber */
		include_once 'inc/functions/init-theme.php';

		/* CHIPPR post_types: FRQs */
    include_once 'inc/post_type/frq.php';

		/* CHIPPR post_types: News */
     include_once 'inc/post_type/news.php';

		/* CHIPPR post_types: News */
		include_once 'inc/post_type/work.php';
    include_once 'inc/post_type/sectors.php';

		/* CHIPPR custom fields */
		include_once 'inc/acf/acf.php';
		include_once 'inc/acf/options-pages.php';

		/* CHIPPR Dependency management */
		include_once 'inc/dependencies/dependencies.php';

		/* CHIPPR Scheduling */
		include_once 'inc/functions/scheduling.php';

		parent::__construct();
	}

	function register_post_types() {
		//this is where you can register custom post types
	}

	function register_taxonomies() {
		//this is where you can register custom taxonomies
	}

	function add_to_context( $context ) {
	  $context['option'] = get_fields('option');
		// $context['menu'] = new TimberMenu('Main Menu');
		// Until the active class functionality is working for Timber,
		// this is the best way of handling wordpress menus

		$context['mainmenu'] = new TimberMenu('main-menu');

		$context["analyticscode"] = "MISSING_TRACKING_CODE";
		$context['homepage'] = get_field('homepage', 'option');

	  return $context;
	}

	function add_to_twig( $twig ) {
		/* this is where you can add your own fuctions to twig */
		$twig->addExtension( new Twig_Extension_StringLoader() );
		return $twig;
	}

}

new WoodChippr();

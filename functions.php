<?php
/**
 * felejo functions and definitions
 *
 * @package felejo
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'felejo_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function felejo_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on felejo, use a find and replace
	 * to change 'felejo' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'felejo', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'felejo' ),
	) );

	// Enable support for Post Formats.
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'felejo_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Enable support for HTML5 markup.
	add_theme_support( 'html5', array( 'comment-list', 'search-form', 'comment-form', ) );
}
endif; // felejo_setup
add_action( 'after_setup_theme', 'felejo_setup' );

/**
 * Register widgetized area and update sidebar with default widgets.
 */
function felejo_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'felejo' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget panel col-xs-12 col-md-9 %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="panel-heading panel-title widget-title">',
		'after_title'   => '</h1>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer', 'felejo' ),
		'id'            => 'footer-1',
		'before_widget' => '<aside id="%1$s" class="widget panel col-xs-12 col-md-4 %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="panel-heading widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'felejo_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function felejo_scripts() {
//	wp_enqueue_style( 'felejo-style', get_stylesheet_uri() );

	wp_enqueue_script( 'felejo-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'felejo-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'felejo_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
/**
 * Enable Bootstrap, jQuery, Font Awesome
 */
// Only on front-end pages, NOT in admin area
if (!is_admin()) {
	// Load CSS
	add_action('wp_enqueue_scripts', 'twbs_load_styles', 11);
	function twbs_load_styles() {
		// Bootstrap
		wp_register_style('bootstrap-styles', '//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css', array(), null, 'all');
		wp_enqueue_style('bootstrap-styles');
		// Bootswatch Amelia styles
//		wp_register_style('bootswatch-styles', '//netdna.bootstrapcdn.com/bootswatch/3.1.0/amelia/bootstrap.min.css', array(), null, 'all');
//		wp_enqueue_style('bootswatch-styles');
		// Theme Styles
		wp_register_style('theme-styles', get_stylesheet_uri(), array(), null, 'all');
		wp_enqueue_style('theme-styles');
		// Font Awesome
		wp_register_style('font-awesome', '//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css', array(), null, 'all');
		wp_enqueue_style('font-awesome');
	}
	// Load Javascript
	add_action('wp_enqueue_scripts', 'twbs_load_scripts', 12);
	function twbs_load_scripts() {
		// jQuery
		wp_deregister_script('jquery');
		wp_register_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js', array(), null, false);
		wp_enqueue_script('jquery');
		// Bootstrap
		wp_register_script('bootstrap-scripts', '//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js', array('jquery'), null, true);
		wp_enqueue_script('bootstrap-scripts');
		// Slider fade
		wp_register_script('slider-scripts', get_template_directory_uri() .'/js/slider.js', array('jquery'), null, true);
		wp_enqueue_script('slider-scripts');
	}

} // end if !is_admin
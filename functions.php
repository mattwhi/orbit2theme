<?php
/**
 * Orbit2Theme functions and definitions
 *
 * @package Orbit2Theme
 */

if ( ! function_exists( 'orbit2theme_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function orbit2theme_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Orbit2Theme, use a find and replace
	 * to change 'orbit2theme' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'orbit2theme', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'orbit2theme' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'orbit2theme_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // orbit2theme_setup
add_action( 'after_setup_theme', 'orbit2theme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function orbit2theme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'orbit2theme_content_width', 640 );
}
add_action( 'after_setup_theme', 'orbit2theme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function orbit2theme_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'orbit2theme' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'orbit2theme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function orbit2theme_scripts() {

	wp_enqueue_script( 'orbit2theme-jquery', get_template_directory_uri() . '/assets/js/jquery-1.11.3.js', array(), '20120206', true );

	wp_enqueue_style( 'orbit2theme-style', get_stylesheet_uri() );

	wp_enqueue_script( 'orbit2theme-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'orbit2theme-main', get_template_directory_uri() . '/assets/js/main.min.js', array(), '20120206', true );

	wp_enqueue_script( 'orbit2theme-customizer', get_template_directory_uri() . '/assets/js/customizer.js', array(), '20120206', true );

	wp_enqueue_script( 'orbit2theme-plugins', get_template_directory_uri() . '/assets/js/plugins.min.js', array(), '20120206', true );

	wp_enqueue_script( 'orbit2theme-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'orbit2theme_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

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

function register_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'extra-menu' => __( 'Extra Menu' )
    )
  );
}
add_action( 'init', 'register_menus' );

/**
 * Required: set 'ot_theme_mode' filter to true.
 */
add_filter( 'ot_theme_mode', '__return_true' );

/**
 * Required: include OptionTree.
 */
require( trailingslashit( get_template_directory() ) . '/option-tree/ot-loader.php' );
/**
 * Theme Options
 */
require( trailingslashit( get_template_directory() ) . '/inc/theme-options.php' );

require_once get_template_directory() . '/inc/wp_bootstrap_navwalker.php';
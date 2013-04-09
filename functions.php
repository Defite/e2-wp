<?php
/**
 * e2 functions and definitions
 *
 * @package e2
 * @since e2 1.0
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 *
 * @since e2 1.0
 */
if ( ! isset( $content_width ) )
	$content_width = 1006; /* pixels */

if ( ! function_exists( 'e2_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 *
 * @since e2 1.0
 */
function e2_setup() {

	/**
	 * Custom template tags for this theme.
	 */
	require( get_template_directory() . '/inc/template-tags.php' );

	/**
	 * Custom functions that act independently of the theme templates
	 */
	require( get_template_directory() . '/inc/extras.php' );

	/**
	 * Custom Theme Options
	 */
	require( get_template_directory() . '/inc/theme-options/options.php' );

	/**
	 * Make theme available for translation
	 * Translations can be filed in the /languages/ directory
	 * If you're building a theme based on e2, use a find and replace
	 * to change 'e2' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'e2', get_template_directory() . '/languages' );

	/**
	 * Add default posts and comments RSS feed links to head
	 */
	add_theme_support( 'automatic-feed-links' );

	/**
	 * Enable support for Post Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	/**
	 * This theme uses wp_nav_menu() in one location.
	 */
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'e2' ),
	) );

	/**
	 * Add support for the Post Formats
	 */
	add_theme_support( 'structured-post-formats', array(
		'link', 'video'
	) );
	add_theme_support( 'post-formats', array(
		'aside', 'audio', 'chat', 'gallery', 'image', 'quote', 'status'
	) );

}
endif; // e2_setup
add_action( 'after_setup_theme', 'e2_setup' );

/**
 * Register widgetized area and update sidebar with default widgets
 *
 * @since e2 1.0
 */
function e2_widgets_init() {
	register_sidebar( array(
		'name' => __( 'Sidebar', 'e2' ),
		'id' => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h1 class="widget-title">',
		'after_title' => '</h1>',
	) );
}
add_action( 'widgets_init', 'e2_widgets_init' );

/**
 * Enqueue scripts and styles
 */
function e2_scripts() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );

	wp_enqueue_script( 'small-menu', get_template_directory_uri() . '/js/small-menu.js', array( 'jquery' ), '20120206', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
	}
}
add_action( 'wp_enqueue_scripts', 'e2_scripts' );

/**
 * Returns the URL from the post.
 *
 * @uses get_the_link() to get the URL in the post meta (if it exists) or
 * the first link found in the post content.
 *
 * Falls back to the post permalink if no URL is found in the post.
 *
 * @since e2 1.0
 * @return string URL
 */
function e2_get_link_url() {
	$has_url = get_the_post_format_url();

	return ( $has_url ) ? $has_url : apply_filters( 'the_permalink', get_permalink() );
}

/**
 * Implement the Custom Header feature
 */
//require( get_template_directory() . '/inc/custom-header.php' );
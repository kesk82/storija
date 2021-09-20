<?php
/**
 * Storija functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Storija
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'storija_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function storija_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Storija, use a find and replace
		 * to change 'storija' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'storija', get_template_directory() . '/languages' );

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
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'storija' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'storija_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'storija_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function storija_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'storija_content_width', 640 );
}
add_action( 'after_setup_theme', 'storija_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function storija_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'storija' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'storija' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'storija_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function storija_scripts() {
	wp_enqueue_style( 'storija-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'storija-style', 'rtl', 'replace' );

	wp_enqueue_script( 'storija-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'storija_scripts' );

/**
 * Helper functions.
 */
require get_template_directory() . '/inc/helper.php';

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

function storija_custom_excerpt_length( $length ) {
	return 11;
}
add_filter( 'excerpt_length', 'storija_custom_excerpt_length', 11 );

function new_excerpt_more( $more ) {
    return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');

/*
 *
 * Post view counter... 
 * ************************** */
function skke_get_post_view() {
	$count = get_post_meta( get_the_ID(), 'post_views_count', true );
	return "$count views";
}

function skke_set_post_view() {
	$key = 'post_views_count';
	$post_id = get_the_ID();
	$count = (int) get_post_meta( $post_id, $key, true );
	$count++;
	update_post_meta( $post_id, $key, $count );
}

function skke_posts_column_views( $columns ) {
	$columns['post_views'] = 'Views';
	return $columns;
}

function skke_posts_custom_column_views( $column ) {
	if ( $column === 'post_views') {
			echo skke_get_post_view();
	}
}

add_filter( 'manage_posts_columns', 'skke_posts_column_views' );
add_action( 'manage_posts_custom_column', 'skke_posts_custom_column_views' );

require_once get_stylesheet_directory() . '/inc/list_comments_cb.php';
require_once get_stylesheet_directory() . '/inc/acf.php';

function skke_comment_form_fields_cb( $fields ) { 
	return array(
		'author' => $fields['author'],
		'email' => $fields['email'],
		'url' => $fields['url'],
		'comment' => $fields['comment'],
		'cookies' => $fields['cookies']
	);
} 
add_filter( 'comment_form_fields', 'skke_comment_form_fields_cb' );

function skke_comment_form_default_fields_cb($fields) {
	return $fields;
}
add_filter( 'comment_form_default_fields', 'skke_comment_form_default_fields_cb' );

add_theme_support( 'post-formats', array( 'video', 'audio' ) );

add_image_size('news-grid-thumb', 1920, 1440, true);
add_image_size('skke-video-thumb', 1920, 1080, true);

add_image_size('video-news-thumb', 640, 360, true);
add_image_size('video-news-thumb@2x', 1280, 720, true);

add_image_size('storia-thumb-xxl', 1920, 1440, true);
add_image_size('storia-thumb-xl', 1600, 1200, true);
add_image_size('storia-thumb-l', 1024, 768, true);
add_image_size('storia-thumb-m', 600, 450, true);
add_image_size('storia-thumb-s', 300, 225, true);
add_image_size('storia-thumb-xs', 120, 90, true);
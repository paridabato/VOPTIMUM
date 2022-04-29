<?php
/**
 * voptimum functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package voptimum
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function voptimum_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on voptimum, use a find and replace
		* to change 'voptimum' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'voptimum', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'voptimum' ),
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
			'voptimum_custom_background_args',
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
add_action( 'after_setup_theme', 'voptimum_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function voptimum_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'voptimum_content_width', 640 );
}
add_action( 'after_setup_theme', 'voptimum_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function voptimum_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'voptimum' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'voptimum' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'voptimum_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function voptimum_scripts() {
	wp_enqueue_style( 'voptimum-style', get_template_directory_uri() . '/scss/style.css', array(), _S_VERSION );
	wp_enqueue_style( 'unpkg-style', '//unpkg.com/swiper/swiper-bundle.min.css', array(), _S_VERSION );

	wp_enqueue_script( 'unpkg-navigation', '//unpkg.com/swiper/swiper-bundle.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'menu-navigation', get_template_directory_uri() . '/js/menu.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'counter-navigation', get_template_directory_uri() . '/js/counter.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'banner-slider-navigation', get_template_directory_uri() . '/js/banner-slider.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'auto-brand-navigation', get_template_directory_uri() . '/js/auto-brand.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'voptimum_scripts' );

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
if( function_exists('acf_add_options_page') ) {
    acf_add_options_page();
}

add_filter( 'nav_menu_link_attributes', 'filter_nav_menu_link_attributes', 10, 4 );
function filter_nav_menu_link_attributes( $atts, $item, $args, $depth ) {
        $class = 'header-menu__items__item';
        $atts['class'] = isset( $atts['class'] ) ? "{$atts['class']} $class" : $class;

    return $atts;
}

add_filter( 'upload_mimes', 'filter_function_name_5485');
function filter_function_name_5485($mime_types){
    $mime_types['avif'] = 'image/avif';

    return $mime_types;
}

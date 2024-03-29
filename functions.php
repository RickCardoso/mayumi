<?php
/**
 * mayumi functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package mayumi
 */

if ( ! function_exists( 'mayumi_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function mayumi_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on mayumi, use a find and replace
		 * to change 'mayumi' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'mayumi', get_template_directory() . '/languages' );

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
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Header', 'mayumi' ),
			'menu-2' => esc_html__( 'Footer', 'mayumi' ),
			'menu-3' => esc_html__( 'Social', 'mayumi' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'mayumi_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'mayumi_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function mayumi_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'mayumi_content_width', 640 );
}
add_action( 'after_setup_theme', 'mayumi_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function mayumi_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'mayumi' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'mayumi' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'mayumi_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function mayumi_scripts() {
	wp_enqueue_style( 'mayumi-style', get_stylesheet_uri() );

	wp_enqueue_script( 'mayumi-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'mayumi-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	/* jQuery */
	wp_deregister_script('jquery');
	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/ext-res/jquery/jquery-3.2.1.js', array(), '3.2.1', true );

	/* Popper.js */
	wp_enqueue_script( 'popper', get_template_directory_uri() . '/ext-res/popper/popper.js', array(), '1.12.5', true );

	/* Bootstrap */
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/ext-res/bootstrap/js/bootstrap.js', array(), '4.0.0-beta', true );

	/* Font-Awesome */
	wp_enqueue_script( 'font-awesome-brands', get_template_directory_uri() . '/ext-res/font-awesome/packs/brands.js', array(), '5.0', true );
	wp_enqueue_script( 'font-awesome-light', get_template_directory_uri() . '/ext-res/font-awesome/packs/light.js', array(), '5.0', true );
	wp_enqueue_script( 'font-awesome-regular', get_template_directory_uri() . '/ext-res/font-awesome/packs/regular.js', array(), '5.0', true );
	wp_enqueue_script( 'font-awesome-solid', get_template_directory_uri() . '/ext-res/font-awesome/packs/solid.js', array(), '5.0', true );
	wp_enqueue_script( 'font-awesome', get_template_directory_uri() . '/ext-res/font-awesome/fontawesome.js', array(), '5.0', true );

	/* Emergence */
	wp_enqueue_script( 'emergence', get_template_directory_uri() . '/ext-res/emergence/dist/emergence.js', array(), '1.0.10', true );

	/* Custom jQuery */
	wp_enqueue_script( 'iccube-jquery', get_template_directory_uri() . '/js/app.js', array('jquery'), '1.0.0', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'mayumi_scripts' );

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

<?php
/**
 * Mattress Shop functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Mattress Shop
 */

if ( ! defined( 'MATTRESS_SHOP_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'MATTRESS_SHOP_VERSION', wp_get_theme()->get( 'Version' ) );
}

if ( ! function_exists( 'mattress_shop_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function mattress_shop_setup() {

		define('MATTRESS_SHOP_LIVE_DEMO',__('https://demos.buywptemplates.com/mattress-shop-pro/', 'mattress-shop'));
		define('MATTRESS_SHOP_BUY_PRO',__('https://www.buywptemplates.com/products/mattress-wordpress-theme', 'mattress-shop'));
		define('MATTRESS_SHOP_PRO_DOC',__('https://demos.buywptemplates.com/demo/docs/mattress-shop-pro/', 'mattress-shop'));
		define('MATTRESS_SHOP_FREE_DOC',__('https://demos.buywptemplates.com/demo/docs/mattress-shop-lite/', 'mattress-shop'));
		define('MATTRESS_SHOP_PRO_SUPPORT',__('https://buywptemplates.com/pages/community', 'mattress-shop'));
		define('MATTRESS_SHOP_FREE_SUPPORT',__('https://wordpress.org/support/theme/mattress-shop/', 'mattress-shop'));
		define('MATTRESS_SHOP_REVIEW',__('https://wordpress.org/support/theme/mattress-shop/reviews/', 'mattress-shop'));	
		define('MATTRESS_SHOP_CREDIT',__('https://www.buywptemplates.com/products/mattress-shop', 'mattress-shop'));

		load_theme_textdomain( 'mattress-shop', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		add_theme_support( 'align-wide' );

		add_theme_support( 'woocommerce' );

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Add support for core custom logo.
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 192,
				'width'       => 192,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);

		// Enqueue editor styles.
		// add_editor_style( 'style.css' );

		// Experimental support for adding blocks inside nav menus
		add_theme_support( 'block-nav-menus' );

		// Add support for experimental link color control.
		add_theme_support( 'experimental-link-color' );

		// Register nav menus.
		register_nav_menus(
			array(
				'primary' => __( 'Primary Navigation', 'mattress-shop' ),
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'mattress_shop_setup' );

/**
 * Enqueue scripts and styles.
 */
function mattress_shop_scripts() {
	wp_enqueue_style('mattress-shop-style', get_stylesheet_uri(), array() );
	wp_enqueue_script( 'jquery-wow', esc_url(get_template_directory_uri()) . '/js/wow.js', array('jquery') );
	wp_enqueue_style( 'animate-css', esc_url(get_template_directory_uri()).'/css/animate.css' );
	wp_enqueue_style('swiper-css', esc_url(get_template_directory_uri())."/css/swiper-bundle.css");
	wp_enqueue_script('swiper-js', esc_url(get_template_directory_uri()). '/js/swiper-bundle.js', array('jquery'));
	wp_enqueue_script( 'mattress-shop-custom-scripts', get_template_directory_uri() . '/js/custom.js', array('jquery'),'' ,true );
	wp_style_add_data( 'mattress-shop-style', 'rtl', 'replace' );
}
add_action( 'wp_enqueue_scripts', 'mattress_shop_scripts' );

/**
 * Enqueue block editor style
 */
function mattress_shop_block_editor_styles() {
	wp_enqueue_style( 'mattress-shop-block-patterns-style-editor', get_theme_file_uri( '/css/block-editor.css' ), false, '1.0', 'all' );	
}
add_action( 'enqueue_block_editor_assets', 'mattress_shop_block_editor_styles' );

function mattress_shop_init_setup() {
	// Add block patterns
	require get_template_directory() . '/inc/block-patterns.php';

	/**
	 * TGM
	 */
	require_once get_template_directory() . '/inc/tgm/tgm.php';
}
add_action( 'after_setup_theme', 'mattress_shop_init_setup' );	

/* Load welcome message.*/
require get_template_directory() . '/inc/dashboard/get_started_info.php';

/**
 * Section Pro
 */
require get_template_directory() . '/inc/section-pro/customizer.php';
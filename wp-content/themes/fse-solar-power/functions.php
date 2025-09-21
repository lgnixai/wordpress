<?php
/**
 * FSE Solar Power functions and definitions
 *
 * @package FSE Solar Power
 * @since 1.0
 */

if ( ! function_exists( 'fse_solar_power_support' ) ) :
	function fse_solar_power_support() {
		
		add_theme_support( 'html5', array(
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		add_theme_support( 'custom-background', apply_filters( 'fse_solar_power_custom_background', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        )));
		
		add_theme_support( 'wp-block-styles' );

		add_editor_style( 'style.css' );

	}
endif;
add_action( 'after_setup_theme', 'fse_solar_power_support' );

/*-------------------------------------------------------------
 Enqueue Styles
--------------------------------------------------------------*/

if ( ! function_exists( 'fse_solar_power_styles' ) ) :
	function fse_solar_power_styles() {
		// Register theme stylesheet.
		wp_enqueue_style('fse-solar-power-style', get_stylesheet_uri(), array(), wp_get_theme()->get('version') );
		wp_enqueue_style('owl-carousel-css', get_template_directory_uri(). '/assets/css/owl.carousel.css');
		wp_enqueue_style('fse-solar-power-style-blocks', get_template_directory_uri(). '/assets/css/blocks.css');
		wp_enqueue_style('fse-solar-power-style-responsive', get_template_directory_uri(). '/assets/css/responsive.css');
		wp_style_add_data( 'fse-solar-power-basic-style', 'rtl', 'replace' );

		wp_enqueue_script( 'owl-carousel-js', get_theme_file_uri( '/assets/js/owl.carousel.js' ), array( 'jquery' ), true );
		wp_enqueue_script( 'wow-js', get_theme_file_uri( '/assets/js/wow.js' ), array( 'jquery' ), true );
		wp_enqueue_script( 'fse-solar-power-custom-js', get_theme_file_uri( '/assets/js/custom.js' ), array( 'jquery' ), true );
		
		wp_enqueue_style( 'animate-css', get_template_directory_uri().'/assets/css/animate.css' );
	}
endif;
add_action( 'wp_enqueue_scripts', 'fse_solar_power_styles' );

// Add block patterns
require get_template_directory() . '/inc/block-patterns.php';

// TGM
require get_template_directory() . '/inc/tgm/tgm.php';

?>
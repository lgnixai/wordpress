<?php
/**
 * ConsultingWP functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @subpackage ConsultingWP
 * @since ConsultingWP 1.0
 */

function consultingwp_theme_scripts() {
    // Enqueue theme stylesheet for the front-end.
    wp_enqueue_style( 'consultingwp-style', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );
	wp_enqueue_style( 'consultingwp-fontawesome', get_template_directory_uri() . '/assets/font-awesome/css/all.css', array(), '5.15.3' );
    wp_enqueue_style( 'dashicons' );
	wp_enqueue_script('pinnaclepost-jquery-sticky', get_template_directory_uri() . '/assets/js/jquery-sticky.js', array('jquery') );    
	wp_enqueue_script('consultingwp-main-script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), '1.0.0', true);
    
}

add_action('enqueue_block_assets', function (): void {
    wp_enqueue_style('dashicons');
});

add_action( 'wp_enqueue_scripts', 'consultingwp_theme_scripts' );
add_editor_style( 'style.css' ); // Add this line to enqueue the editor style.

// register own theme pattern

function consultingwp_register_pattern_category() {

	$patterns = array();

	$block_pattern_categories = array(
		'consultingwp' => array( 'label' => __( 'ConsultingWP', 'consultingwp' ) )
	);

	$block_pattern_categories = apply_filters( 'consultingwp_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}
}

add_action( 'init', 'consultingwp_register_pattern_category');


//recommend plugins
require get_theme_file_path( '/inc/tgm-plugin/tgmpa-hook.php' );

// Admin Info
require get_template_directory() . '/class/admin-info.php';
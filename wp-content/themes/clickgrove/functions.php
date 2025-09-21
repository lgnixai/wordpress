<?php
/**
 * ClickGrove functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @subpackage ClickGrove
 * @since ClickGrove 1.0
 */

function clickgrove_theme_scripts() {
    // Enqueue theme stylesheet for the front-end.
    wp_enqueue_style( 'clickgrove-style', get_stylesheet_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );
	wp_enqueue_script('clickgrove-main-script', get_stylesheet_directory_uri() . '/assets/js/script.js', array('jquery'), '1.0.0', true);
    
}
add_action('enqueue_block_assets', function (): void {
    wp_enqueue_style('dashicons');
});

add_action( 'wp_enqueue_scripts', 'clickgrove_theme_scripts' );
add_editor_style( 'style.css' ); // Add this line to enqueue the editor style.

// register own theme pattern

function clickgrove_register_pattern_category() {

	$patterns = array();

	$block_pattern_categories = array(
		'clickgrove' => array( 'label' => __( 'ClickGrove', 'clickgrove' ) )
	);

	$block_pattern_categories = apply_filters( 'clickgrove_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}
}

add_action( 'init', 'clickgrove_register_pattern_category');
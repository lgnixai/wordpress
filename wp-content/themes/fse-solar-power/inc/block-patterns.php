<?php   
/**
 * Block Patterns
 *
 * @package FSE Solar Power
 * @since 1.0
 */

/**
 * Registers block patterns and categories.
 *
 * @since 1.0
 *
 * @return void
 */
function fse_solar_power_register_block_patterns() {
	$block_pattern_categories = array(
		'fse-solar-power' => array( 'label' => esc_html__( 'FSE Solar Power Patterns', 'fse-solar-power' ) ),
		'pages'    => array( 'label' => esc_html__( 'Pages', 'fse-solar-power' ) ),
	);

	$block_pattern_categories = apply_filters( 'fse_solar_power_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}

	$block_patterns = array(
		'header-default',
		'header-banner',
		'services-section',
		'about-section',
		'team-section',
		'inner-banner',
		'latest-blog',
		'hidden-404',
		'sidebar',
		'footer-default',
	);

	$block_patterns = apply_filters( 'fse_solar_power_block_patterns', $block_patterns );

	foreach ( $block_patterns as $block_pattern ) {
		$pattern_file = get_parent_theme_file_path( '/inc/patterns/' . $block_pattern . '.php' );

		register_block_pattern(
			'fse-solar-power/' . $block_pattern,
			require $pattern_file
		);
	}
}
add_action( 'init', 'fse_solar_power_register_block_patterns', 9 );
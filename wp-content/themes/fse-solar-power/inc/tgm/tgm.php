<?php

require get_template_directory() . '/inc/tgm/class-tgm-plugin-activation.php';
/**
 * Recommended plugins.
 */
function fse_solar_power_register_recommended_plugins() {
	$plugins = array(		
		array(
			'name'      => esc_html__( 'WooCommerce', 'fse-solar-power' ),
			'slug'      => 'woocommerce',
			'source'           => '',
			'required'         => false,
			'force_activation' => false,
		)
	);
	$config = array();
	tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'fse_solar_power_register_recommended_plugins' );
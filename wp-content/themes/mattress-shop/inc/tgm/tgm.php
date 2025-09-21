<?php

require get_template_directory() . '/inc/tgm/class-tgm-plugin-activation.php';
/**
 * Recommended plugins.
 */
function mattress_shop_register_recommended_plugins() {
	$plugins = array(
		array(
			'name'             => __( 'Video Popup Block by WPZOOM', 'mattress-shop' ),
			'slug'             => 'wpzoom-video-popup-block',
			'source'           => '',
			'required'         => false,
			'force_activation' => false,
		),
		array(
			'name'             => __( 'WooCommerce', 'mattress-shop' ),
			'slug'             => 'woocommerce',
			'required'         => false,
			'force_activation' => false,
		),
		array(
			'name'             => __( 'GTranslate', 'mattress-shop' ),
			'slug'             => 'gtranslate',
			'source'           => '',
			'required'         => false,
			'force_activation' => false,
		)
	);
	$config = array();
	tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'mattress_shop_register_recommended_plugins' );
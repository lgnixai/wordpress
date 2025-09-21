<?php

	require get_template_directory() . '/demo-import/tgm/class-tgm-plugin-activation.php';
/**
 * Recommended plugins.
 */
function woodworking_workshop_register_recommended_plugins() {
	$plugins = array(
		
		array(
			'name'             => __( 'FAQly – Ultimate FAQ', 'woodworking-workshop' ),
			'slug'             => 'faqly-ultimate-faq',
			'required'         => false,
			'force_activation' => false,
		)

	);
	$config = array();
	tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'woodworking_workshop_register_recommended_plugins' );
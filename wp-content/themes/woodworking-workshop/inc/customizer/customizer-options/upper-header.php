<?php
function woodworking_workshop_upper_header_settings( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';

	/*=========================================
	Social Media
	=========================================*/
	$wp_customize->add_section(
        'woodworking_workshop_upper_header',
        array(
        	'priority'      => 3,
            'title' 		=> __('Header Informations','woodworking-workshop'),
			'panel'  		=> 'woodworking_workshop_frontpage_sections',
		)
    );

	$wp_customize->add_setting(
		'woodworking_workshop_call_text',array(
			'default'=> 'CALL US TODAY',
			'sanitize_callback'	=> 'sanitize_text_field'
		)
	);

	$wp_customize->add_control(
		'woodworking_workshop_call_text',array(
			'label'	=> __('Add Call Text','woodworking-workshop'),
			'section'=> 'woodworking_workshop_upper_header',
			'type'=> 'text'
		)
	);

	$wp_customize->add_setting(
		'woodworking_workshop_call',
		array(
			'default'=> '+000-2415-145',
			'sanitize_callback'	=> 'woodworking_workshop_sanitize_phone_number'
		)
	);

	$wp_customize->add_control(
		'woodworking_workshop_call',array(
			'label'	=> __('Add Phone Number','woodworking-workshop'),
			'section'=> 'woodworking_workshop_upper_header',
			'type'=> 'text'
		)
	);

	$wp_customize->add_setting(
   		'woodworking_workshop_mail_text',
   		array(
			'default'=> 'EMAIL',
			'sanitize_callback'	=> 'sanitize_text_field'
		)
	);

	$wp_customize->add_control(
		'woodworking_workshop_mail_text',
		array(
			'label'	=> __('Add Email Text','woodworking-workshop'),
			'section'=> 'woodworking_workshop_upper_header',
			'type'=> 'text'
		)
	);

	$wp_customize->add_setting(
		'woodworking_workshop_mail',array(
			'default'=> 'carpenter@example.com',
			'sanitize_callback'	=> 'sanitize_email'
		)
	);

	$wp_customize->add_control(
		'woodworking_workshop_mail',array(
			'label'	=> __('Add Mail Address','woodworking-workshop'),
			'section'=> 'woodworking_workshop_upper_header',
			'type'=> 'text'
		)
	);

	$wp_customize->add_setting( 'woodworking_workshop_upgrade_page_settings_12445',
        array(
            'sanitize_callback' => 'sanitize_text_field'
        )
    );
    $wp_customize->add_control( new Woodworking_Workshop_Control_Upgrade(
        $wp_customize, 'woodworking_workshop_upgrade_page_settings_12445',
            array(
                'priority'      => 200,
                'section'       => 'woodworking_workshop_upper_header',
                'settings'      => 'woodworking_workshop_upgrade_page_settings_12445',
                'label'         => __( 'Woodworking Workshop Pro comes with additional features.', 'woodworking-workshop' ),
                'choices'       => array( __( '15+ Ready-Made Sections', 'woodworking-workshop' ), __( 'One-Click Demo Import', 'woodworking-workshop' ), __( 'WooCommerce Integrated', 'woodworking-workshop' ), __( 'Drag & Drop Section Reordering', 'woodworking-workshop' ),__( 'Advanced Typography Control', 'woodworking-workshop' ),__( 'Intuitive Customization Options', 'woodworking-workshop' ),__( '24/7 Support', 'woodworking-workshop' ), )
            )
        )
    );
}
add_action( 'customize_register', 'woodworking_workshop_upper_header_settings' );
<?php

function woodworking_workshop_footer( $wp_customize ) {
	$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	// Footer Panel // 
	$wp_customize->add_panel( 
		'woodworking_workshop_footer_section', 
		array(
			'priority'      => 34,
			'capability'    => 'edit_theme_options',
			'title'			=> __('Footer Options', 'woodworking-workshop'),
		) 
	);

	// Footer Widgets // 
	$wp_customize->add_section(
        'woodworking_workshop_footer_top',
        array(
            'title' 		=> __('Footer Widgets','woodworking-workshop'),
			'panel'  		=> 'woodworking_workshop_footer_section',
			'priority'      => 3,
		)
    );

    // Footer Widgets Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'woodworking_workshop_footer_widgets_setting' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'woodworking_workshop_sanitize_checkbox',
			'capability' => 'edit_theme_options',
		) 
	);
	
	$wp_customize->add_control(
	'woodworking_workshop_footer_widgets_setting', 
		array(
			'label'	      => esc_html__( 'Hide / Show Footer Widgets', 'woodworking-workshop' ),
			'section'     => 'woodworking_workshop_footer_top',
			'settings'    => 'woodworking_workshop_footer_widgets_setting',
			'type'        => 'checkbox'
		) 
	);

	// Footer Background Image Setting
	$wp_customize->add_setting('woodworking_workshop_footer_bg_image',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'woodworking_workshop_footer_bg_image',array(
	'label' => __('Footer Background Image','woodworking-workshop'),
	'section' => 'woodworking_workshop_footer_top'
	)));

	// Footer Background Image Opacity
	$wp_customize->add_setting('woodworking_workshop_footer_bg_image_opacity', array(
		'default'           => 50,
		'sanitize_callback' => 'absint',
		'capability'        => 'edit_theme_options',
	));

	$wp_customize->add_control('woodworking_workshop_footer_bg_image_opacity', array(
		'label'    => __('Footer Background Image Opacity (%)', 'woodworking-workshop'),
		'section'  => 'woodworking_workshop_footer_top',
		'type'     => 'range',
		'input_attrs' => array(
			'min'  => 0,
			'max'  => 100,
			'step' => 1,
		),
	));

	// Footer Background Color Setting
	$wp_customize->add_setting('woodworking_workshop_footer_bg_color',array(
		'default' => '#332f2e',
		'sanitize_callback' => 'sanitize_hex_color',
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'woodworking_workshop_footer_bg_color',array(
		'label' => esc_html__('Footer Background Color', 'woodworking-workshop'),
		'section' => 'woodworking_workshop_footer_top', // Adjust section if needed
		'settings' => 'woodworking_workshop_footer_bg_color',
	)));

	$wp_customize->add_setting( 'woodworking_workshop_upgrade_page_settings_1',
        array(
            'sanitize_callback' => 'sanitize_text_field'
        )
    );
    $wp_customize->add_control( new Woodworking_Workshop_Control_Upgrade(
        $wp_customize, 'woodworking_workshop_upgrade_page_settings_1',
            array(
                'priority'      => 200,
                'section'       => 'woodworking_workshop_footer_top',
                'settings'      => 'woodworking_workshop_upgrade_page_settings_1',
                'label'         => __( '
Woodworking Workshop Pro comes with additional features.', 'woodworking-workshop' ),
                'choices'       => array( __( '15+ Ready-Made Sections', 'woodworking-workshop' ), __( 'One-Click Demo Import', 'woodworking-workshop' ), __( 'WooCommerce Integrated', 'woodworking-workshop' ), __( 'Drag & Drop Section Reordering', 'woodworking-workshop' ),__( 'Advanced Typography Control', 'woodworking-workshop' ),__( 'Intuitive Customization Options', 'woodworking-workshop' ),__( '24/7 Support', 'woodworking-workshop' ), )
            )
        )
    ); 

	// Footer Bottom // 
	$wp_customize->add_section(
        'woodworking_workshop_footer_bottom',
        array(
            'title' 		=> __('Footer Bottom','woodworking-workshop'),
			'panel'  		=> 'woodworking_workshop_footer_section',
			'priority'      => 3,
		)
    );

	// Site Title Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'woodworking_workshop_footer_copyright_setting' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'woodworking_workshop_sanitize_checkbox',
			'capability' => 'edit_theme_options',
		) 
	);
	
	$wp_customize->add_control(
	'woodworking_workshop_footer_copyright_setting', 
		array(
			'label'	      => esc_html__( 'Hide / Show Footer Copyright', 'woodworking-workshop' ),
			'section'     => 'woodworking_workshop_footer_bottom',
			'settings'    => 'woodworking_workshop_footer_copyright_setting',
			'type'        => 'checkbox'
		) 
	);
	
	// Footer Copyright 
	$wp_customize->add_setting(
    	'woodworking_workshop_footer_copyright',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);

	$wp_customize->add_control( 
		'woodworking_workshop_footer_copyright',
		array(
		    'label'   		=> __('Edit Copyright Text','woodworking-workshop'),
		    'section'		=> 'woodworking_workshop_footer_bottom',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);

	$wp_customize->add_setting( 'woodworking_workshop_copyright_alignment', array(
        'default'   => 'center',
        'sanitize_callback' => 'woodworking_workshop_sanitize_copyright_position',
    ));

    $wp_customize->add_control( 'woodworking_workshop_copyright_alignment', array(
        'label'    => __( 'Copyright Position', 'woodworking-workshop' ),
        'section'  => 'woodworking_workshop_footer_bottom',
        'settings' => 'woodworking_workshop_copyright_alignment',
        'type'     => 'radio',
        'choices'  => array(
            'right' => __( 'Right Align', 'woodworking-workshop' ),
            'left'  => __( 'Left Align', 'woodworking-workshop' ),
            'center'  => __( 'Center Align', 'woodworking-workshop' ),
        ),
    ));


	$wp_customize->add_setting( 'woodworking_workshop_upgrade_page_settings_2',
        array(
            'sanitize_callback' => 'sanitize_text_field'
        )
    );
    $wp_customize->add_control( new Woodworking_Workshop_Control_Upgrade(
        $wp_customize, 'woodworking_workshop_upgrade_page_settings_2',
            array(
                'priority'      => 200,
                'section'       => 'woodworking_workshop_footer_bottom',
                'settings'      => 'woodworking_workshop_upgrade_page_settings_2',
                'label'         => __( '
Woodworking Workshop Pro comes with additional features.', 'woodworking-workshop' ),
                'choices'       => array( __( '15+ Ready-Made Sections', 'woodworking-workshop' ), __( 'One-Click Demo Import', 'woodworking-workshop' ), __( 'WooCommerce Integrated', 'woodworking-workshop' ), __( 'Drag & Drop Section Reordering', 'woodworking-workshop' ),__( 'Advanced Typography Control', 'woodworking-workshop' ),__( 'Intuitive Customization Options', 'woodworking-workshop' ),__( '24/7 Support', 'woodworking-workshop' ), )
            )
        )
    ); 
}
add_action( 'customize_register', 'woodworking_workshop_footer' );

// Footer selective refresh
function woodworking_workshop_footer_partials( $wp_customize ){
	// footer_copyright
	$wp_customize->selective_refresh->add_partial( 'footer_copyright', array(
		'selector'            => '.copy-right .copyright-text',
		'settings'            => 'footer_copyright',
		'render_callback'  => 'woodworking_workshop_footer_copyright_render_callback',
	) );
}
add_action( 'customize_register', 'woodworking_workshop_footer_partials' );

// copyright_content
function woodworking_workshop_footer_copyright_render_callback() {
	return get_theme_mod( 'footer_copyright' );
}
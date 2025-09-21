<?php
function woodworking_workshop_sidebar_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	$wp_customize->add_panel(
		'woodworking_workshop_sidebar', array(
			'priority' => 31,
			'title' => esc_html__( 'Sidebar Options', 'woodworking-workshop' ),
		)
	);

	/*=========================================
	Archive Post  Section
	=========================================*/
	$wp_customize->add_section(
		'woodworking_workshop_sidebar_settings', array(
			'title' => esc_html__( 'Sidebar Options', 'woodworking-workshop' ),
			'priority' => 1,
			'panel' => 'woodworking_workshop_general',
		)
	);
	
	// Archive Post Settings 
	$wp_customize->add_setting(
		'archive_post_settings'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'woodworking_workshop_sanitize_text',
			'priority' => 1,
		)
	);

	$wp_customize->add_control(
	'archive_post_settings',
		array(
			'type' => 'hidden',
			'label' => __('All Sidebar Setting','woodworking-workshop'),
			'section' => 'woodworking_workshop_sidebar_settings',
		)
	);
	

	// Archive Sidebar Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'woodworking_workshop_archive_sidebar_setting' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'woodworking_workshop_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'woodworking_workshop_archive_sidebar_setting', 
		array(
			'label'	      => esc_html__( 'Hide / Show Archive Sidebar', 'woodworking-workshop' ),
			'section'     => 'woodworking_workshop_sidebar_settings',
			'settings'    => 'woodworking_workshop_archive_sidebar_setting',
			'type'        => 'checkbox'
		) 
	);

	// Index Sidebar Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'woodworking_workshop_index_sidebar_setting' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'woodworking_workshop_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'woodworking_workshop_index_sidebar_setting', 
		array(
			'label'	      => esc_html__( 'Hide / Show Index Sidebar', 'woodworking-workshop' ),
			'section'     => 'woodworking_workshop_sidebar_settings',
			'settings'    => 'woodworking_workshop_index_sidebar_setting',
			'type'        => 'checkbox'
		) 
	);

	// Pages Sidebar Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'woodworking_workshop_paged_sidebar_setting' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'woodworking_workshop_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'woodworking_workshop_paged_sidebar_setting', 
		array(
			'label'	      => esc_html__( 'Hide / Show Pages Sidebar', 'woodworking-workshop' ),
			'section'     => 'woodworking_workshop_sidebar_settings',
			'settings'    => 'woodworking_workshop_paged_sidebar_setting',
			'type'        => 'checkbox'
		) 
	);

	// Search Result Sidebar Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'woodworking_workshop_search_result_sidebar_setting' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'woodworking_workshop_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'woodworking_workshop_search_result_sidebar_setting', 
		array(
			'label'	      => esc_html__( 'Hide / Show Search Result Sidebar', 'woodworking-workshop' ),
			'section'     => 'woodworking_workshop_sidebar_settings',
			'settings'    => 'woodworking_workshop_search_result_sidebar_setting',
			'type'        => 'checkbox'
		) 
	);

	// Single Post Sidebar Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'woodworking_workshop_single_post_sidebar_setting' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'woodworking_workshop_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'woodworking_workshop_single_post_sidebar_setting', 
		array(
			'label'	      => esc_html__( 'Hide / Show Single Post Sidebar', 'woodworking-workshop' ),
			'section'     => 'woodworking_workshop_sidebar_settings',
			'settings'    => 'woodworking_workshop_single_post_sidebar_setting',
			'type'        => 'checkbox'
		) 
	);

	// Sidebar Page Sidebar Date Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'woodworking_workshop_single_page_sidebar_setting' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'woodworking_workshop_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'woodworking_workshop_single_page_sidebar_setting', 
		array(
			'label'	      => esc_html__( 'Hide / Show Page Width Sidebar', 'woodworking-workshop' ),
			'section'     => 'woodworking_workshop_sidebar_settings',
			'settings'    => 'woodworking_workshop_single_page_sidebar_setting',
			'type'        => 'checkbox'
		) 
	);

	$wp_customize->add_setting( 'woodworking_workshop_sidebar_position', array(
        'default'   => 'right',
        'sanitize_callback' => 'woodworking_workshop_sanitize_sidebar_position',
    ));

    $wp_customize->add_control( 'woodworking_workshop_sidebar_position', array(
        'label'    => __( 'Sidebar Position', 'woodworking-workshop' ),
        'section'  => 'woodworking_workshop_sidebar_settings',
        'settings' => 'woodworking_workshop_sidebar_position',
        'type'     => 'radio',
        'choices'  => array(
            'right' => __( 'Right Sidebar', 'woodworking-workshop' ),
            'left'  => __( 'Left Sidebar', 'woodworking-workshop' ),
        ),
    ));

	 $wp_customize->add_setting( 'woodworking_workshop_upgrade_page_settings_15',
        array(
            'sanitize_callback' => 'sanitize_text_field'
        )
    );
    $wp_customize->add_control( new Woodworking_Workshop_Control_Upgrade(
        $wp_customize, 'woodworking_workshop_upgrade_page_settings_15',
            array(
                'priority'      => 200,
                'section'       => 'woodworking_workshop_sidebar_settings',
                'settings'      => 'woodworking_workshop_upgrade_page_settings_15',
                'label'         => __( 'Woodworking Workshop Pro comes with additional features.', 'woodworking-workshop' ),
                'choices'       => array( __( '15+ Ready-Made Sections', 'woodworking-workshop' ), __( 'One-Click Demo Import', 'woodworking-workshop' ), __( 'WooCommerce Integrated', 'woodworking-workshop' ), __( 'Drag & Drop Section Reordering', 'woodworking-workshop' ),__( 'Advanced Typography Control', 'woodworking-workshop' ),__( 'Intuitive Customization Options', 'woodworking-workshop' ),__( '24/7 Support', 'woodworking-workshop' ), )
            )
        )
    ); 
}

add_action( 'customize_register', 'woodworking_workshop_sidebar_setting' );
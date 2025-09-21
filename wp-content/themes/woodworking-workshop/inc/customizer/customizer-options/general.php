<?php
function woodworking_workshop_general_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	$wp_customize->add_panel(
		'woodworking_workshop_general', array(
			'priority' => 2,
			'title' => esc_html__( 'General Options', 'woodworking-workshop' ),
		)
	);

	/*=========================================
	Breadcrumb  Section
	=========================================*/
	$wp_customize->add_section(
		'woodworking_workshop_breadcrumb_setting', array(
			'title' => esc_html__( 'Breadcrumb Options', 'woodworking-workshop' ),
			'priority' => 1,
			'panel' => 'woodworking_workshop_general',
		)
	);
	
	// Settings 
	$wp_customize->add_setting(
		'woodworking_workshop_breadcrumb_settings'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'woodworking_workshop_sanitize_text',
			'priority' => 1,
		)
	);

	$wp_customize->add_control(
	'woodworking_workshop_breadcrumb_settings',
		array(
			'type' => 'hidden',
			'label' => __('Settings','woodworking-workshop'),
			'section' => 'woodworking_workshop_breadcrumb_setting',
		)
	);
	
	// Breadcrumb Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'woodworking_workshop_hs_breadcrumb' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'woodworking_workshop_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'woodworking_workshop_hs_breadcrumb', 
		array(
			'label'	      => esc_html__( 'Hide / Show Section', 'woodworking-workshop' ),
			'section'     => 'woodworking_workshop_breadcrumb_setting',
			'settings'    => 'woodworking_workshop_hs_breadcrumb',
			'type'        => 'checkbox'
		) 
	);

	$wp_customize->add_setting(
    	'woodworking_workshop_breadcrumb_seprator',
    	array(
			'default' => '/',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'woodworking_workshop_breadcrumb_seprator',
		array(
		    'label'   		=> __('Breadcrumb separator','woodworking-workshop'),
		    'section'		=> 'woodworking_workshop_breadcrumb_setting',
			'type' 			=> 'text',
		)  
	);

	$wp_customize->add_setting( 'woodworking_workshop_upgrade_page_settings_5',
        array(
            'sanitize_callback' => 'sanitize_text_field'
        )
    );
    $wp_customize->add_control( new Woodworking_Workshop_Control_Upgrade(
        $wp_customize, 'woodworking_workshop_upgrade_page_settings_5',
            array(
                'priority'      => 200,
                'section'       => 'woodworking_workshop_breadcrumb_setting',
                'settings'      => 'woodworking_workshop_upgrade_page_settings_5',
                'label'         => __( '
Woodworking Workshop Pro comes with additional features.', 'woodworking-workshop' ),
                'choices'       => array( __( '15+ Ready-Made Sections', 'woodworking-workshop' ), __( 'One-Click Demo Import', 'woodworking-workshop' ), __( 'WooCommerce Integrated', 'woodworking-workshop' ), __( 'Drag & Drop Section Reordering', 'woodworking-workshop' ),__( 'Advanced Typography Control', 'woodworking-workshop' ),__( 'Intuitive Customization Options', 'woodworking-workshop' ),__( '24/7 Support', 'woodworking-workshop' ), )
            )
        )
    );

	/*=========================================
	Preloader Section
	=========================================*/
	$wp_customize->add_section(
		'woodworking_workshop_preloader_section_setting', array(
			'title' => esc_html__( 'Preloader Options', 'woodworking-workshop' ),
			'priority' => 3,
			'panel' => 'woodworking_workshop_general',
		)
	);

	// Preloader Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'woodworking_workshop_preloader_setting' , 
			array(
			'sanitize_callback' => 'woodworking_workshop_sanitize_checkbox',
			'capability' => 'edit_theme_options',
		) 
	);
	
	$wp_customize->add_control(
	'woodworking_workshop_preloader_setting', 
		array(
			'label'	      => esc_html__( 'Hide / Show Preloader', 'woodworking-workshop' ),
			'section'     => 'woodworking_workshop_preloader_section_setting',
			'settings'    => 'woodworking_workshop_preloader_setting',
			'type'        => 'checkbox'
		) 
	);

	$wp_customize->add_setting(
    	'woodworking_workshop_preloader_text',
    	array(
			'default' => 'Loading',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'woodworking_workshop_preloader_text',
		array(
		    'label'   		=> __('Preloader Text','woodworking-workshop'),
		    'section'		=> 'woodworking_workshop_preloader_section_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)
	);

	// Preloader Background Color Setting
    $wp_customize->add_setting(
        'woodworking_workshop_preloader_bg_color',
        array(
            'default' => '#ffffff',
            'sanitize_callback' => 'sanitize_hex_color',
            'capability' => 'edit_theme_options',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'woodworking_workshop_preloader_bg_color',
            array(
                'label' => esc_html__('Preloader Background Color', 'woodworking-workshop'),
                'section' => 'woodworking_workshop_preloader_section_setting', // Adjust section if needed
                'settings' => 'woodworking_workshop_preloader_bg_color',
            )
        )
    );

    // Preloader Color Setting
    $wp_customize->add_setting(
        'woodworking_workshop_preloader_color',
        array(
            'default' => '#ac7443',
            'sanitize_callback' => 'sanitize_hex_color',
            'capability' => 'edit_theme_options',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'woodworking_workshop_preloader_color',
            array(
                'label' => esc_html__('Preloader Color', 'woodworking-workshop'),
                'section' => 'woodworking_workshop_preloader_section_setting', // Adjust section if needed
                'settings' => 'woodworking_workshop_preloader_color',
            )
        )
    );

    $wp_customize->add_setting( 'woodworking_workshop_upgrade_page_settings_6',
        array(
            'sanitize_callback' => 'sanitize_text_field'
        )
    );
    $wp_customize->add_control( new Woodworking_Workshop_Control_Upgrade(
        $wp_customize, 'woodworking_workshop_upgrade_page_settings_6',
            array(
                'priority'      => 200,
                'section'       => 'woodworking_workshop_preloader_section_setting',
                'settings'      => 'woodworking_workshop_upgrade_page_settings_6',
                'label'         => __( '
Woodworking Workshop Pro comes with additional features.', 'woodworking-workshop' ),
                'choices'       => array( __( '15+ Ready-Made Sections', 'woodworking-workshop' ), __( 'One-Click Demo Import', 'woodworking-workshop' ), __( 'WooCommerce Integrated', 'woodworking-workshop' ), __( 'Drag & Drop Section Reordering', 'woodworking-workshop' ),__( 'Advanced Typography Control', 'woodworking-workshop' ),__( 'Intuitive Customization Options', 'woodworking-workshop' ),__( '24/7 Support', 'woodworking-workshop' ), )
            )
        )
    );

	/*=========================================
	Scroll To Top Section
	=========================================*/
	$wp_customize->add_section(
		'woodworking_workshop_scroll_to_top_section_setting', array(
			'title' => esc_html__( 'Scroll To Top Options', 'woodworking-workshop' ),
			'priority' => 3,
			'panel' => 'woodworking_workshop_footer_section',
		)
	);

	// Scroll To Top Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'woodworking_workshop_scroll_top_setting' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'woodworking_workshop_sanitize_checkbox',
			'capability' => 'edit_theme_options',
		) 
	);
	
	$wp_customize->add_control(
	'woodworking_workshop_scroll_top_setting', 
		array(
			'label'	      => esc_html__( 'Hide / Show Scroll To Top', 'woodworking-workshop' ),
			'section'     => 'woodworking_workshop_scroll_to_top_section_setting',
			'settings'    => 'woodworking_workshop_scroll_top_setting',
			'type'        => 'checkbox'
		) 
	);

	// Scroll To Top Color Setting
	$wp_customize->add_setting(
		'woodworking_workshop_scroll_top_color',
		array(
			'default'           => '#fff',
			'sanitize_callback' => 'sanitize_hex_color',
			'capability'        => 'edit_theme_options',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'woodworking_workshop_scroll_top_color',
			array(
				'label'    => esc_html__( 'Scroll To Top Color', 'woodworking-workshop' ),
				'section'  => 'woodworking_workshop_scroll_to_top_section_setting',
				'settings' => 'woodworking_workshop_scroll_top_color',
			)
		)
	);

	// Scroll To Top Background Color Setting
	$wp_customize->add_setting(
		'woodworking_workshop_scroll_top_bg_color',
		array(
			'default'           => '#ac7443',
			'sanitize_callback' => 'sanitize_hex_color',
			'capability'        => 'edit_theme_options',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'woodworking_workshop_scroll_top_bg_color',
			array(
				'label'    => esc_html__( 'Scroll To Top Background Color', 'woodworking-workshop' ),
				'section'  => 'woodworking_workshop_scroll_to_top_section_setting',
				'settings' => 'woodworking_workshop_scroll_top_bg_color',
			)
		)
	);


    $wp_customize->add_setting( 'woodworking_workshop_upgrade_page_settings_7',
        array(
            'sanitize_callback' => 'sanitize_text_field'
        )
    );
    $wp_customize->add_control( new Woodworking_Workshop_Control_Upgrade(
        $wp_customize, 'woodworking_workshop_upgrade_page_settings_7',
            array(
                'priority'      => 200,
                'section'       => 'woodworking_workshop_scroll_to_top_section_setting',
                'settings'      => 'woodworking_workshop_upgrade_page_settings_7',
                'label'         => __( '
Woodworking Workshop Pro comes with additional features.', 'woodworking-workshop' ),
                'choices'       => array( __( '15+ Ready-Made Sections', 'woodworking-workshop' ), __( 'One-Click Demo Import', 'woodworking-workshop' ), __( 'WooCommerce Integrated', 'woodworking-workshop' ), __( 'Drag & Drop Section Reordering', 'woodworking-workshop' ),__( 'Advanced Typography Control', 'woodworking-workshop' ),__( 'Intuitive Customization Options', 'woodworking-workshop' ),__( '24/7 Support', 'woodworking-workshop' ), )
            )
        )
    );

	/*=========================================
	Woocommerce Section
	=========================================*/
	$wp_customize->add_section(
		'woodworking_workshop_woocommerce_section_setting', array(
			'title' => esc_html__( 'Woocommerce Settings', 'woodworking-workshop' ),
			'priority' => 3,
			'panel' => 'woocommerce',
		)
	);

	$wp_customize->add_setting(
    	'woodworking_workshop_custom_shop_per_columns',
    	array(
			'default' => '3',
			'sanitize_callback' => 'absint',
		)
	);	
	$wp_customize->add_control( 
		'woodworking_workshop_custom_shop_per_columns',
		array(
		    'label'   		=> __('Product Per Columns','woodworking-workshop'),
		    'section'		=> 'woodworking_workshop_woocommerce_section_setting',
			'type' 			=> 'number',
			'transport'         => $selective_refresh,
		)  
	);

	$wp_customize->add_setting(
    	'woodworking_workshop_custom_shop_product_per_page',
    	array(
			'default' => '9',
			'sanitize_callback' => 'absint',
		)
	);	
	$wp_customize->add_control( 
		'woodworking_workshop_custom_shop_product_per_page',
		array(
		    'label'   		=> __('Product Per Page','woodworking-workshop'),
		    'section'		=> 'woodworking_workshop_woocommerce_section_setting',
			'type' 			=> 'number',
			'transport'         => $selective_refresh,
		)  
	);

	// Woocommerce Sidebar Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'woodworking_workshop_wocommerce_sidebar_setting' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'woodworking_workshop_sanitize_checkbox',
			'capability' => 'edit_theme_options',
		) 
	);
	
	$wp_customize->add_control(
	'woodworking_workshop_wocommerce_sidebar_setting', 
		array(
			'label'	      => esc_html__( 'Hide / Show Woocommerce Sidebar', 'woodworking-workshop' ),
			'section'     => 'woodworking_workshop_woocommerce_section_setting',
			'settings'    => 'woodworking_workshop_wocommerce_sidebar_setting',
			'type'        => 'checkbox'
		)
	);

	$wp_customize->add_setting( 'woodworking_workshop_upgrade_page_settings_8',
        array(
            'sanitize_callback' => 'sanitize_text_field'
        )
    );
    $wp_customize->add_control( new Woodworking_Workshop_Control_Upgrade(
        $wp_customize, 'woodworking_workshop_upgrade_page_settings_8',
            array(
                'priority'      => 200,
                'section'       => 'woodworking_workshop_woocommerce_section_setting',
                'settings'      => 'woodworking_workshop_upgrade_page_settings_8',
                'label'         => __( '
Woodworking Workshop Pro comes with additional features.', 'woodworking-workshop' ),
                'choices'       => array( __( '15+ Ready-Made Sections', 'woodworking-workshop' ), __( 'One-Click Demo Import', 'woodworking-workshop' ), __( 'WooCommerce Integrated', 'woodworking-workshop' ), __( 'Drag & Drop Section Reordering', 'woodworking-workshop' ),__( 'Advanced Typography Control', 'woodworking-workshop' ),__( 'Intuitive Customization Options', 'woodworking-workshop' ),__( '24/7 Support', 'woodworking-workshop' ), )
            )
        )
    );

	/*=========================================
	Sticky Header Section
	=========================================*/
	$wp_customize->add_section(
		'sticky_header_section_setting', array(
			'title' => esc_html__( 'Sticky Header Options', 'woodworking-workshop' ),
			'priority' => 3,
			'panel' => 'woodworking_workshop_general',
		)
	);

	// Sticky Header Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'woodworking_workshop_sticky_header' , 
			array(
			'sanitize_callback' => 'woodworking_workshop_sanitize_checkbox',
			'capability' => 'edit_theme_options',
		) 
	);
	
	$wp_customize->add_control(
	'woodworking_workshop_sticky_header', 
		array(
			'label'	      => esc_html__( 'Hide / Show Sticky Header', 'woodworking-workshop' ),
			'section'     => 'sticky_header_section_setting',
			'settings'    => 'woodworking_workshop_sticky_header',
			'type'        => 'checkbox'
		) 
	);

	 $wp_customize->add_setting( 'woodworking_workshop_upgrade_page_settings_9',
        array(
            'sanitize_callback' => 'sanitize_text_field'
        )
    );
    $wp_customize->add_control( new Woodworking_Workshop_Control_Upgrade(
        $wp_customize, 'woodworking_workshop_upgrade_page_settings_9',
            array(
                'priority'      => 200,
                'section'       => 'sticky_header_section_setting',
                'settings'      => 'woodworking_workshop_upgrade_page_settings_9',
                'label'         => __( 'Woodworking Workshop Pro comes with additional features.', 'woodworking-workshop' ),
                'choices'       => array( __( '15+ Ready-Made Sections', 'woodworking-workshop' ), __( 'One-Click Demo Import', 'woodworking-workshop' ), __( 'WooCommerce Integrated', 'woodworking-workshop' ), __( 'Drag & Drop Section Reordering', 'woodworking-workshop' ),__( 'Advanced Typography Control', 'woodworking-workshop' ),__( 'Intuitive Customization Options', 'woodworking-workshop' ),__( '24/7 Support', 'woodworking-workshop' ), )
            )
        )
    ); 

	/*=========================================
	404 Page Options
	=========================================*/
	$wp_customize->add_section(
		'woodworking_workshop_404_section', array(
			'title' => esc_html__( '404 Page Options', 'woodworking-workshop' ),
			'priority' => 1,
			'panel' => 'woodworking_workshop_general',
		)
	);

	$wp_customize->add_setting(
    	'woodworking_workshop_404_title',
    	array(
			'default' => '404',
			'sanitize_callback' => 'sanitize_text_field',
			'priority' => 2,
		)
	);	
	$wp_customize->add_control( 
		'woodworking_workshop_404_title',
		array(
		    'label'   		=> __('404 Heading','woodworking-workshop'),
		    'section'		=> 'woodworking_workshop_404_section',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);

	$wp_customize->add_setting(
    	'woodworking_workshop_404_Text',
    	array(
			'default' => 'Page Not Found',
			'sanitize_callback' => 'sanitize_text_field',
			'priority' => 2,
		)
	);	
	$wp_customize->add_control( 
		'woodworking_workshop_404_Text',
		array(
		    'label'   		=> __('404 Title','woodworking-workshop'),
		    'section'		=> 'woodworking_workshop_404_section',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);

	$wp_customize->add_setting(
    	'woodworking_workshop_404_content',
    	array(
			'default' => 'The page you were looking for could not be found.',
			'sanitize_callback' => 'sanitize_text_field',
			'priority' => 2,
		)
	);	
	$wp_customize->add_control( 
		'woodworking_workshop_404_content',
		array(
		    'label'   		=> __('404 Content','woodworking-workshop'),
		    'section'		=> 'woodworking_workshop_404_section',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);

	 $wp_customize->add_setting( 'woodworking_workshop_upgrade_page_settings_10',
        array(
            'sanitize_callback' => 'sanitize_text_field'
        )
    );
    $wp_customize->add_control( new Woodworking_Workshop_Control_Upgrade(
        $wp_customize, 'woodworking_workshop_upgrade_page_settings_10',
            array(
                'priority'      => 200,
                'section'       => 'woodworking_workshop_404_section',
                'settings'      => 'woodworking_workshop_upgrade_page_settings_10',
                'label'         => __( 'Woodworking Workshop Pro comes with additional features.', 'woodworking-workshop' ),
                'choices'       => array( __( '15+ Ready-Made Sections', 'woodworking-workshop' ), __( 'One-Click Demo Import', 'woodworking-workshop' ), __( 'WooCommerce Integrated', 'woodworking-workshop' ), __( 'Drag & Drop Section Reordering', 'woodworking-workshop' ),__( 'Advanced Typography Control', 'woodworking-workshop' ),__( 'Intuitive Customization Options', 'woodworking-workshop' ),__( '24/7 Support', 'woodworking-workshop' ), )
            )
        )
    ); 

}

add_action( 'customize_register', 'woodworking_workshop_general_setting' );
<?php
function woodworking_workshop_blog_setting( $wp_customize ) {

$wp_customize->register_control_type( 'Woodworking_Workshop_Control_Upgrade' );

$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	$wp_customize->add_panel(
		'woodworking_workshop_frontpage_sections', array(
			'priority' => 1,
			'title' => esc_html__( 'Frontpage Sections', 'woodworking-workshop' ),
		)
	);
	
	/*=========================================
	Slider Section
	=========================================*/
	$wp_customize->add_section(
		'woodworking_workshop_slider_section', array(
			'title' => esc_html__( 'Slider Section', 'woodworking-workshop' ),
			'priority' => 13,
			'panel' => 'woodworking_workshop_frontpage_sections',
		)
	);

	// Slider Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'woodworking_workshop_slider_setting' , 
			array(
			'default' => true,
			'sanitize_callback' => 'woodworking_workshop_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'woodworking_workshop_slider_setting', 
		array(
			'label'	      => esc_html__( 'Hide / Show Section', 'woodworking-workshop' ),
			'section'     => 'woodworking_workshop_slider_section',
			'settings'    => 'woodworking_workshop_slider_setting',
			'type'        => 'checkbox'
		) 
	);
	
	// Slider 1
	$wp_customize->add_setting( 
    	'woodworking_workshop_slider1',
    	array(
			'default'           => get_page_id_by_slug('slider-page'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'woodworking_workshop_slider1',
		array(
		    'label'   		=> __('Slider 1','woodworking-workshop'),
		    'section'		=> 'woodworking_workshop_slider_section',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);		

	// Slider 2
	$wp_customize->add_setting(
    	'woodworking_workshop_slider2',
    	array(
			'default'           => get_page_id_by_slug('slider-pages'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 2,
		)
	);

	$wp_customize->add_control( 
		'woodworking_workshop_slider2',
		array(
		    'label'   		=> __('Slider 2','woodworking-workshop'),
		    'section'		=> 'woodworking_workshop_slider_section',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);

	// Slider 3
	$wp_customize->add_setting(
    	'woodworking_workshop_slider3',
    	array(
			'default'           => get_page_id_by_slug('slider-pagess'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);

	$wp_customize->add_control( 
		'woodworking_workshop_slider3',
		array(
		    'label'   		=> __('Slider 3','woodworking-workshop'),
		    'section'		=> 'woodworking_workshop_slider_section',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);

	// Slider Text
	$wp_customize->add_setting( 
    	'woodworking_workshop_slider_text',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'woodworking_workshop_slider_text',
		array(
		    'label'   		=> __('Slider Text','woodworking-workshop'),
		    'section'		=> 'woodworking_workshop_slider_section',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)
	);

	$wp_customize->add_setting( 'woodworking_workshop_upgrade_page_settings_3',
        array(
            'sanitize_callback' => 'sanitize_text_field'
        )
    );
    $wp_customize->add_control( new Woodworking_Workshop_Control_Upgrade(
        $wp_customize, 'woodworking_workshop_upgrade_page_settings_3',
            array(
                'priority'      => 200,
                'section'       => 'woodworking_workshop_slider_section',
                'settings'      => 'woodworking_workshop_upgrade_page_settings_3',
                'label'         => __( 'Woodworking Workshop Pro comes with additional features.', 'woodworking-workshop' ),
                'choices'       => array( __( '15+ Ready-Made Sections', 'woodworking-workshop' ), __( 'One-Click Demo Import', 'woodworking-workshop' ), __( 'WooCommerce Integrated', 'woodworking-workshop' ), __( 'Drag & Drop Section Reordering', 'woodworking-workshop' ),__( 'Advanced Typography Control', 'woodworking-workshop' ),__( 'Intuitive Customization Options', 'woodworking-workshop' ),__( '24/7 Support', 'woodworking-workshop' ), )
            )
        )
    ); 

	/*=========================================
	service Section
	=========================================*/
	$wp_customize->add_section( 
		'woodworking_workshop_our_services_section' , 
		array(
	        'title'      => __( 'Our Services Settings', 'woodworking-workshop' ),
	        'panel' => 'woodworking_workshop_frontpage_sections',
    	) 
    );

    // Adventure Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'woodworking_workshop_services_setting' , 
			array(
			'default' => true,
			'sanitize_callback' => 'woodworking_workshop_sanitize_checkbox',
			'capability' => 'edit_theme_options',
		) 
	);
	$wp_customize->add_control(
	'woodworking_workshop_services_setting', 
		array(
			'label'	      => esc_html__( 'Hide / Show Section', 'woodworking-workshop' ),
			'section'     => 'woodworking_workshop_our_services_section',
			'settings'    => 'woodworking_workshop_services_setting',
			'type'        => 'checkbox',
			'priority' => 2,
		) 
	);

	// Adventure Button Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'woodworking_workshop_serv_button_setting' , 
			array(
			'default' => true,
			'sanitize_callback' => 'woodworking_workshop_sanitize_checkbox',
			'capability' => 'edit_theme_options',
		) 
	);
	$wp_customize->add_control(
	'woodworking_workshop_serv_button_setting', 
		array(
			'label'	      => esc_html__( 'Hide / Show Button', 'woodworking-workshop' ),
			'section'     => 'woodworking_workshop_our_services_section',
			'settings'    => 'woodworking_workshop_serv_button_setting',
			'type'        => 'checkbox',
			'priority' => 2,
		) 
	);

    $wp_customize->add_setting(
    	'woodworking_workshop_offer_section_tittle',
    	array(
	        'default'   => '',
	        'sanitize_callback' => 'sanitize_text_field'
    	)
    );
    $wp_customize->add_control(
    	'woodworking_workshop_offer_section_tittle',
    	array(
	        'label' => __('Section Title','woodworking-workshop'),
	        'section'   => 'woodworking_workshop_our_services_section',
	        'type'      => 'text',
	        'priority' => 3,
    	)
    );

    $woodworking_workshop_categories = get_categories();
    $cats = array();
    $woodworking_workshop_i = 0;
    $woodworking_workshop_offer_cat[]= 'select';
    foreach($woodworking_workshop_categories as $woodworking_workshop_category){
        if($woodworking_workshop_i==0){
            $woodworking_workshop_default = $woodworking_workshop_category->slug;
            $woodworking_workshop_i++;
        }
        $woodworking_workshop_offer_cat[$woodworking_workshop_category->slug] = $woodworking_workshop_category->name;
    }

    $wp_customize->add_setting(
    	'woodworking_workshop_offer_section_category',
    	array(
	        'default'   => 'uncategorized',
	        'sanitize_callback' => 'woodworking_workshop_sanitize_choices',
    	)
    );
    $wp_customize->add_control(
    	'woodworking_workshop_offer_section_category',
    	array(
	        'type'    => 'select',
	        'choices' => $woodworking_workshop_offer_cat,
	        'label' => __('Select Category','woodworking-workshop'),
	        'section' => 'woodworking_workshop_our_services_section',
	        'priority' => 4,
    	)
    );

    $wp_customize->add_setting('woodworking_workshop_serv_btn_link',array(
		'default'=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));

	$wp_customize->add_control('woodworking_workshop_serv_btn_link',array(
		'label'	=> esc_html__('Add Service Button link','woodworking-workshop'),
		'section'=> 'woodworking_workshop_our_services_section',
		'type'=> 'url',
		'priority' => 6,
	));

	$wp_customize->add_setting( 'woodworking_workshop_upgrade_page_settings_4',
        array(
            'sanitize_callback' => 'sanitize_text_field'
        )
    );
    $wp_customize->add_control( new Woodworking_Workshop_Control_Upgrade(
        $wp_customize, 'woodworking_workshop_upgrade_page_settings_4',
            array(
                'priority'      => 200,
                'section'       => 'woodworking_workshop_our_services_section',
                'settings'      => 'woodworking_workshop_upgrade_page_settings_4',
                'label'         => __( '
Woodworking Workshop Pro comes with additional features.', 'woodworking-workshop' ),
                'choices'       => array( __( '15+ Ready-Made Sections', 'woodworking-workshop' ), __( 'One-Click Demo Import', 'woodworking-workshop' ), __( 'WooCommerce Integrated', 'woodworking-workshop' ), __( 'Drag & Drop Section Reordering', 'woodworking-workshop' ),__( 'Advanced Typography Control', 'woodworking-workshop' ),__( 'Intuitive Customization Options', 'woodworking-workshop' ),__( '24/7 Support', 'woodworking-workshop' ), )
            )
        )
    );
}

add_action( 'customize_register', 'woodworking_workshop_blog_setting' );

// service selective refresh
function woodworking_workshop_blog_section_partials( $wp_customize ){	
	// blog_title
	$wp_customize->selective_refresh->add_partial( 'blog_title', array(
		'selector'            => '.home-blog .title h6',
		'settings'            => 'blog_title',
		'render_callback'  => 'woodworking_workshop_blog_title_render_callback',
	
	) );
	
	// blog_subtitle
	$wp_customize->selective_refresh->add_partial( 'blog_subtitle', array(
		'selector'            => '.home-blog .title h2',
		'settings'            => 'blog_subtitle',
		'render_callback'  => 'woodworking_workshop_blog_subtitle_render_callback',
	
	) );
	
	// blog_description
	$wp_customize->selective_refresh->add_partial( 'blog_description', array(
		'selector'            => '.home-blog .title p',
		'settings'            => 'blog_description',
		'render_callback'  => 'woodworking_workshop_blog_description_render_callback',
	
	) );	
	}

add_action( 'customize_register', 'woodworking_workshop_blog_section_partials' );

// blog_title
function woodworking_workshop_blog_title_render_callback() {
	return get_theme_mod( 'blog_title' );
}

// blog_subtitle
function woodworking_workshop_blog_subtitle_render_callback() {
	return get_theme_mod( 'blog_subtitle' );
}

// service description
function woodworking_workshop_blog_description_render_callback() {
	return get_theme_mod( 'blog_description' );
}
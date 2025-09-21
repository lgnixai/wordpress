<?php
function woodworking_workshop_post_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	$wp_customize->add_panel(
		'woodworking_workshop_post', array(
			'priority' => 31,
			'title' => esc_html__( 'Post Options', 'woodworking-workshop' ),
		)
	);

	/*=========================================
	Archive Post  Section
	=========================================*/
	$wp_customize->add_section(
		'woodworking_workshop_archive_post_setting', array(
			'title' => esc_html__( 'Archive Post', 'woodworking-workshop' ),
			'priority' => 1,
			'panel' => 'woodworking_workshop_post',
		)
	);

	// Layouts Post
	$wp_customize->add_setting('woodworking_workshop_blog_layout_option_setting',array(
	  'default' => 'Default',
	  'sanitize_callback' => 'woodworking_workshop_sanitize_choices'
	));
	$wp_customize->add_control(new Woodworking_Workshop_Image_Radio_Control($wp_customize, 'woodworking_workshop_blog_layout_option_setting', array(
	  'type' => 'select',
	  'label' => __('Blog Post Layouts','woodworking-workshop'),
	  'section' => 'woodworking_workshop_archive_post_setting',
	  'choices' => array(
		'Default' => esc_url(get_template_directory_uri()).'/assets/images/layout-1.png',
		'Left' => esc_url(get_template_directory_uri()).'/assets/images/layout-2.png',
		'Right' => esc_url(get_template_directory_uri()).'/assets/images/layout-3.png',
	))));
		
	// Post Heading Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'woodworking_workshop_post_heading_settings' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'woodworking_workshop_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
		'woodworking_workshop_post_heading_settings', 
		array(
			'label'	      => esc_html__( 'Hide / Show Post Heading', 'woodworking-workshop' ),
			'section'     => 'woodworking_workshop_archive_post_setting',
			'settings'    => 'woodworking_workshop_post_heading_settings',
			'type'        => 'checkbox'
		) 
	);

	// Post Content Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'woodworking_workshop_post_content_settings' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'woodworking_workshop_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'woodworking_workshop_post_content_settings', 
		array(
			'label'	      => esc_html__( 'Hide / Show Post Content', 'woodworking-workshop' ),
			'section'     => 'woodworking_workshop_archive_post_setting',
			'settings'    => 'woodworking_workshop_post_content_settings',
			'type'        => 'checkbox'
		) 
	);

	// Post Featured Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'woodworking_workshop_post_featured_image_settings' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'woodworking_workshop_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'woodworking_workshop_post_featured_image_settings', 
		array(
			'label'	      => esc_html__( 'Hide / Show Post Feature Image', 'woodworking-workshop' ),
			'section'     => 'woodworking_workshop_archive_post_setting',
			'settings'    => 'woodworking_workshop_post_featured_image_settings',
			'type'        => 'checkbox'
		) 
	);

	// Post Date Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'woodworking_workshop_post_date_settings' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'woodworking_workshop_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'woodworking_workshop_post_date_settings', 
		array(
			'label'	      => esc_html__( 'Hide / Show Post Date', 'woodworking-workshop' ),
			'section'     => 'woodworking_workshop_archive_post_setting',
			'settings'    => 'woodworking_workshop_post_date_settings',
			'type'        => 'checkbox'
		) 
	);

	// Post Date Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'woodworking_workshop_post_comments_settings' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'woodworking_workshop_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'woodworking_workshop_post_comments_settings', 
		array(
			'label'	      => esc_html__( 'Hide / Show Post Comment', 'woodworking-workshop' ),
			'section'     => 'woodworking_workshop_archive_post_setting',
			'settings'    => 'woodworking_workshop_post_comments_settings',
			'type'        => 'checkbox'
		) 
	);

	// Post Date Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'woodworking_workshop_post_author_settings' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'woodworking_workshop_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'woodworking_workshop_post_author_settings', 
		array(
			'label'	      => esc_html__( 'Hide / Show Post Author', 'woodworking-workshop' ),
			'section'     => 'woodworking_workshop_archive_post_setting',
			'settings'    => 'woodworking_workshop_post_author_settings',
			'type'        => 'checkbox'
		) 
	);

	// Post Timing Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'woodworking_workshop_post_timing_settings' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'woodworking_workshop_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'woodworking_workshop_post_timing_settings', 
		array(
			'label'	      => esc_html__( 'Hide / Show Post Timings', 'woodworking-workshop' ),
			'section'     => 'woodworking_workshop_archive_post_setting',
			'settings'    => 'woodworking_workshop_post_timing_settings',
			'type'        => 'checkbox'
		) 
	);

	// Post Tags Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'woodworking_workshop_post_tags_settings' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'woodworking_workshop_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'woodworking_workshop_post_tags_settings', 
		array(
			'label'	      => esc_html__( 'Hide / Show Post Tags', 'woodworking-workshop' ),
			'section'     => 'woodworking_workshop_archive_post_setting',
			'settings'    => 'woodworking_workshop_post_tags_settings',
			'type'        => 'checkbox'
		) 
	);

	$wp_customize->add_setting('woodworking_workshop_excerpt_limit', array(
        'default'           => 50,
        'sanitize_callback' => 'absint',
    ));

    $wp_customize->add_control('woodworking_workshop_excerpt_limit', array(
        'label'   => __('Excerpt Word Limit', 'woodworking-workshop'),
        'section' => 'woodworking_workshop_archive_post_setting',
        'type'    => 'number',
    ));

	$wp_customize->add_setting( 'woodworking_workshop_upgrade_page_settings_133',
	array(
		'sanitize_callback' => 'sanitize_text_field'
		)
	);
	$wp_customize->add_control( new Woodworking_Workshop_Control_Upgrade(
		$wp_customize, 'woodworking_workshop_upgrade_page_settings_133',
			array(
				'priority'      => 200,
				'section'       => 'woodworking_workshop_archive_post_setting',
				'settings'      => 'woodworking_workshop_upgrade_page_settings_133',
				'label'         => __( 'Woodworking Workshop Pro comes with additional features.', 'woodworking-workshop' ),
				'choices'       => array( __( '15+ Ready-Made Sections', 'woodworking-workshop' ), __( 'One-Click Demo Import', 'woodworking-workshop' ), __( 'WooCommerce Integrated', 'woodworking-workshop' ), __( 'Drag & Drop Section Reordering', 'woodworking-workshop' ),__( 'Advanced Typography Control', 'woodworking-workshop' ),__( 'Intuitive Customization Options', 'woodworking-workshop' ),__( '24/7 Support', 'woodworking-workshop' ), )
			)
		)
	); 

	/*=========================================
	Single Post  Section
	=========================================*/
	$wp_customize->add_section(
		'woodworking_workshop_single_post', array(
			'title' => esc_html__( 'Single Post', 'woodworking-workshop' ),
			'priority' => 3,
			'panel' => 'woodworking_workshop_post',
		)
	);
	
	// Post Heading Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'woodworking_workshop_single_post_heading_settings' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'woodworking_workshop_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'woodworking_workshop_single_post_heading_settings', 
		array(
			'label'	      => esc_html__( 'Hide / Show Post Heading', 'woodworking-workshop' ),
			'section'     => 'woodworking_workshop_single_post',
			'settings'    => 'woodworking_workshop_single_post_heading_settings',
			'type'        => 'checkbox'
		) 
	);

	// Post Content Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'woodworking_workshop_single_post_content_settings' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'woodworking_workshop_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'woodworking_workshop_single_post_content_settings', 
		array(
			'label'	      => esc_html__( 'Hide / Show Post Content', 'woodworking-workshop' ),
			'section'     => 'woodworking_workshop_single_post',
			'settings'    => 'woodworking_workshop_single_post_content_settings',
			'type'        => 'checkbox'
		) 
	);

	// Post Featured Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'woodworking_workshop_single_post_featured_image_settings' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'woodworking_workshop_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'woodworking_workshop_single_post_featured_image_settings', 
		array(
			'label'	      => esc_html__( 'Hide / Show Post Feature Image', 'woodworking-workshop' ),
			'section'     => 'woodworking_workshop_single_post',
			'settings'    => 'woodworking_workshop_single_post_featured_image_settings',
			'type'        => 'checkbox'
		) 
	);

	// Post Date Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'woodworking_workshop_single_post_date_settings' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'woodworking_workshop_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'woodworking_workshop_single_post_date_settings', 
		array(
			'label'	      => esc_html__( 'Hide / Show Post Date', 'woodworking-workshop' ),
			'section'     => 'woodworking_workshop_single_post',
			'settings'    => 'woodworking_workshop_single_post_date_settings',
			'type'        => 'checkbox'
		) 
	);

	// Post Date Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'woodworking_workshop_single_post_comments_settings' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'woodworking_workshop_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'woodworking_workshop_single_post_comments_settings', 
		array(
			'label'	      => esc_html__( 'Hide / Show Post Comment', 'woodworking-workshop' ),
			'section'     => 'woodworking_workshop_single_post',
			'settings'    => 'woodworking_workshop_single_post_comments_settings',
			'type'        => 'checkbox'
		) 
	);

	// Post Date Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'woodworking_workshop_single_post_author_settings' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'woodworking_workshop_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'woodworking_workshop_single_post_author_settings', 
		array(
			'label'	      => esc_html__( 'Hide / Show Post Author', 'woodworking-workshop' ),
			'section'     => 'woodworking_workshop_single_post',
			'settings'    => 'woodworking_workshop_single_post_author_settings',
			'type'        => 'checkbox'
		) 
	);

	// Post Date Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'woodworking_workshop_single_post_timing_settings' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'woodworking_workshop_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'woodworking_workshop_single_post_timing_settings', 
		array(
			'label'	      => esc_html__( 'Hide / Show Post Timings', 'woodworking-workshop' ),
			'section'     => 'woodworking_workshop_single_post',
			'settings'    => 'woodworking_workshop_single_post_timing_settings',
			'type'        => 'checkbox'
		) 
	);

	// Post Tags Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'woodworking_workshop_single_post_tags_settings' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'woodworking_workshop_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'woodworking_workshop_single_post_tags_settings', 
		array(
			'label'	      => esc_html__( 'Hide / Show Post Tags', 'woodworking-workshop' ),
			'section'     => 'woodworking_workshop_single_post',
			'settings'    => 'woodworking_workshop_single_post_tags_settings',
			'type'        => 'checkbox'
		) 
	);

	// Related Posts Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'woodworking_workshop_show_hide_related_post' , 
			array(
			'default' => '1',
			'sanitize_callback' => 'woodworking_workshop_sanitize_checkbox',
			'capability' => 'edit_theme_options',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'woodworking_workshop_show_hide_related_post', 
		array(
			'label'	      => esc_html__( 'Hide / Show Related Posts', 'woodworking-workshop' ),
			'section'     => 'woodworking_workshop_single_post',
			'settings'    => 'woodworking_workshop_show_hide_related_post',
			'type'        => 'checkbox'
		) 
	);

	$wp_customize->add_setting( 
    	'woodworking_workshop_related_posts_heading',
    	array(
			'default' => 'Related Posts',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'woodworking_workshop_related_posts_heading',
		array(
		    'label'   		=> __('Related Post Heading','woodworking-workshop'),
		    'section'		=> 'woodworking_workshop_single_post',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)
	);

	$wp_customize->add_setting('woodworking_workshop_related_post_counts', array(
        'default'           => 3,
        'sanitize_callback' => 'absint',
    ));

    $wp_customize->add_control('woodworking_workshop_related_post_counts', array(
        'label'   => __('Number Of Related Posts To Show', 'woodworking-workshop'),
        'section' => 'woodworking_workshop_single_post',
        'type'    => 'number',
    ));

	$wp_customize->add_setting( 'woodworking_workshop_upgrade_page_settings_58',
	array(
		'sanitize_callback' => 'sanitize_text_field'
	)
	);
	$wp_customize->add_control( new Woodworking_Workshop_Control_Upgrade(
		$wp_customize, 'woodworking_workshop_upgrade_page_settings_58',
			array(
				'priority'      => 200,
				'section'       => 'woodworking_workshop_single_post',
				'settings'      => 'woodworking_workshop_upgrade_page_settings_58',
				'label'         => __( 'Woodworking Workshop Pro comes with additional features.', 'woodworking-workshop' ),
				'choices'       => array( __( '15+ Ready-Made Sections', 'woodworking-workshop' ), __( 'One-Click Demo Import', 'woodworking-workshop' ), __( 'WooCommerce Integrated', 'woodworking-workshop' ), __( 'Drag & Drop Section Reordering', 'woodworking-workshop' ),__( 'Advanced Typography Control', 'woodworking-workshop' ),__( 'Intuitive Customization Options', 'woodworking-workshop' ),__( '24/7 Support', 'woodworking-workshop' ), )
			)
		)
	); 
}

add_action( 'customize_register', 'woodworking_workshop_post_setting' );
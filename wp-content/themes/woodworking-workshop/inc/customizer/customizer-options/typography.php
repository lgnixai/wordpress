<?php
function woodworking_workshop_typography_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	$wp_customize->add_panel(
		'woodworking_workshop_typography', array(
			'priority' => 31,
			'title' => esc_html__( 'Typography Options', 'woodworking-workshop' ),
		)
	);

	/*=========================================
	Archive Post  Section
	=========================================*/
	$wp_customize->add_section(
		'woodworking_workshop_typography_settings', array(
			'title' => esc_html__( 'Heading/Content Typography Options', 'woodworking-workshop' ),
			'priority' => 1,
			'panel' => 'woodworking_workshop_typography',
		)
	);
	$woodworking_workshop_font_choices = array(
		'' => 'Select',
		'Source Sans Pro:400,700,400italic,700italic' => 'Source Sans Pro',
		'Open Sans:400italic,700italic,400,700' => 'Open Sans',
		'Oswald:400,700' => 'Oswald',
		'Playfair Display:400,700,400italic' => 'Playfair Display',
		'Montserrat:400,700' => 'Montserrat',
		'Raleway:400,700' => 'Raleway',
		'Droid Sans:400,700' => 'Droid Sans',
		'Lato:400,700,400italic,700italic' => 'Lato',
		'Arvo:400,700,400italic,700italic' => 'Arvo',
		'Lora:400,700,400italic,700italic' => 'Lora',
		'Merriweather:400,300italic,300,400italic,700,700italic' => 'Merriweather',
		'Oxygen:400,300,700' => 'Oxygen',
		'PT Serif:400,700' => 'PT Serif',
		'PT Sans:400,700,400italic,700italic' => 'PT Sans',
		'PT Sans Narrow:400,700' => 'PT Sans Narrow',
		'Cabin:400,700,400italic' => 'Cabin',
		'Fjalla One:400' => 'Fjalla One',
		'Francois One:400' => 'Francois One',
		'Josefin Sans:400,300,600,700' => 'Josefin Sans',
		'Libre Baskerville:400,400italic,700' => 'Libre Baskerville',
		'Arimo:400,700,400italic,700italic' => 'Arimo',
		'Ubuntu:400,700,400italic,700italic' => 'Ubuntu',
		'Bitter:400,700,400italic' => 'Bitter',
		'Droid Serif:400,700,400italic,700italic' => 'Droid Serif',
		'Roboto:400,400italic,700,700italic' => 'Roboto',
		'Open Sans Condensed:700,300italic,300' => 'Open Sans Condensed',
		'Roboto Condensed:400italic,700italic,400,700' => 'Roboto Condensed',
		'Roboto Slab:400,700' => 'Roboto Slab',
		'Yanone Kaffeesatz:400,700' => 'Yanone Kaffeesatz',
		'Rokkitt:400' => 'Rokkitt',
		'Poppins:400' => 'Poppins',
		'Fira Sans:400' => 'Fira Sans',
	);

	$wp_customize->add_setting( 'woodworking_workshop_headings_text', array(
		'sanitize_callback' => 'woodworking_workshop_sanitize_fonts',
	));

	$wp_customize->add_control( 'woodworking_workshop_headings_text', array(
		'type' => 'select',
		'description' => __('Select your appropriate font for the headings.', 'woodworking-workshop'),
		'section' => 'woodworking_workshop_typography_settings',
		'choices' => $woodworking_workshop_font_choices

	));

	$wp_customize->add_setting( 'woodworking_workshop_body_text', array(
		'sanitize_callback' => 'woodworking_workshop_sanitize_fonts'
	));

	$wp_customize->add_control( 'woodworking_workshop_body_text', array(
		'type' => 'select',
		'description' => __( 'Select your appropriate font for the body.', 'woodworking-workshop' ),
		'section' => 'woodworking_workshop_typography_settings',
		'choices' => $woodworking_workshop_font_choices
	) );
	
	$wp_customize->add_section(
	'woodworking_workshop_dynamic_color_settings', array(
		'title' => esc_html__( 'Dynamic Color Options', 'woodworking-workshop' ),
		'priority' => 1,
		'panel' => 'woodworking_workshop_typography',
		)
	);

	$wp_customize->add_setting('woodworking_workshop_dynamic_color_one', array(
        'default'           => '#ac7443',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'woodworking_workshop_dynamic_color_one', array(
        'label'    => __('First Dynamic Color', 'woodworking-workshop'),
        'section'  => 'woodworking_workshop_dynamic_color_settings',
    )));

	

	$wp_customize->add_setting( 'woodworking_workshop_upgrade_page_settings_20_color',
        array(
            'sanitize_callback' => 'sanitize_text_field'
        )
    );
    $wp_customize->add_control( new Woodworking_Workshop_Control_Upgrade(
        $wp_customize, 'woodworking_workshop_upgrade_page_settings_20_color',
            array(
                'priority'      => 200,
                'section'       => 'woodworking_workshop_dynamic_color_settings',
                'settings'      => 'woodworking_workshop_upgrade_page_settings_20_color',
                'label'         => __( 'Woodworking Workshop Pro comes with additional features.', 'woodworking-workshop' ),
                'choices'       => array( __( '15+ Ready-Made Sections', 'woodworking-workshop' ), __( 'One-Click Demo Import', 'woodworking-workshop' ), __( 'WooCommerce Integrated', 'woodworking-workshop' ), __( 'Drag & Drop Section Reordering', 'woodworking-workshop' ),__( 'Advanced Typography Control', 'woodworking-workshop' ),__( 'Intuitive Customization Options', 'woodworking-workshop' ),__( '24/7 Support', 'woodworking-workshop' ), )
            )
        )
    ); 

	$wp_customize->add_setting( 'woodworking_workshop_upgrade_page_settings_20',
        array(
            'sanitize_callback' => 'sanitize_text_field'
        )
    );
    $wp_customize->add_control( new Woodworking_Workshop_Control_Upgrade(
        $wp_customize, 'woodworking_workshop_upgrade_page_settings_20',
            array(
                'priority'      => 200,
                'section'       => 'woodworking_workshop_typography_settings',
                'settings'      => 'woodworking_workshop_upgrade_page_settings_20',
                'label'         => __( 'Woodworking Workshop Pro comes with additional features.', 'woodworking-workshop' ),
                'choices'       => array( __( '15+ Ready-Made Sections', 'woodworking-workshop' ), __( 'One-Click Demo Import', 'woodworking-workshop' ), __( 'WooCommerce Integrated', 'woodworking-workshop' ), __( 'Drag & Drop Section Reordering', 'woodworking-workshop' ),__( 'Advanced Typography Control', 'woodworking-workshop' ),__( 'Intuitive Customization Options', 'woodworking-workshop' ),__( '24/7 Support', 'woodworking-workshop' ), )
            )
        )
    ); 
}

add_action( 'customize_register', 'woodworking_workshop_typography_setting' );
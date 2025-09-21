<?php
function woodworking_workshop_header_settings( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';

    // Site Title Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'woodworking_workshop_site_title_setting' , 
			array(
			'default' => '0',
			'sanitize_callback' => 'woodworking_workshop_sanitize_checkbox',
			'capability' => 'edit_theme_options',
		) 
	);
	
	$wp_customize->add_control(
	'woodworking_workshop_site_title_setting', 
		array(
			'label'	      => esc_html__( 'Hide / Show Site Title', 'woodworking-workshop' ),
			'section'     => 'title_tagline',
			'settings'    => 'woodworking_workshop_site_title_setting',
			'type'        => 'checkbox'
		) 
	);

	// Tagline Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'woodworking_workshop_tagline_setting' , 
			array(
			'default' => '',
			'sanitize_callback' => 'woodworking_workshop_sanitize_checkbox',
			'capability' => 'edit_theme_options',
		) 
	);
	
	$wp_customize->add_control(
	'woodworking_workshop_tagline_setting', 
		array(
			'label'	      => esc_html__( 'Hide / Show Tagline', 'woodworking-workshop' ),
			'section'     => 'title_tagline',
			'settings'    => 'woodworking_workshop_tagline_setting',
			'type'        => 'checkbox'
		) 
	);

	// Add the setting for logo width
	$wp_customize->add_setting(
		'woodworking_workshop_logo_width',
		array(
			'sanitize_callback' => 'woodworking_workshop_sanitize_logo_width',
			'priority'          => 2,
		)
	);

	// Add control for logo width
	$wp_customize->add_control( 
		'woodworking_workshop_logo_width',
		array(
			'label'     => __('Logo Width', 'woodworking-workshop'),
			'section'   => 'title_tagline',
			'type'      => 'number',
			'input_attrs' => array(
				'min'   => 1,
				'max'   => 150,
				'step'  => 1,
			),
			'transport' => $selective_refresh,
		)  
	);

	$wp_customize->add_setting( 'woodworking_workshop_upgrade_page_settings_99',
        array(
            'sanitize_callback' => 'sanitize_text_field'
        )
    );
    $wp_customize->add_control( new Woodworking_Workshop_Control_Upgrade(
        $wp_customize, 'woodworking_workshop_upgrade_page_settings_99',
            array(
                'priority'      => 200,
                'section'       => 'title_tagline',
                'settings'      => 'woodworking_workshop_upgrade_page_settings_99',
                'label'         => __( 'Woodworking Workshop Pro comes with additional features.', 'woodworking-workshop' ),
                'choices'       => array( __( '15+ Ready-Made Sections', 'woodworking-workshop' ), __( 'One-Click Demo Import', 'woodworking-workshop' ), __( 'WooCommerce Integrated', 'woodworking-workshop' ), __( 'Drag & Drop Section Reordering', 'woodworking-workshop' ),__( 'Advanced Typography Control', 'woodworking-workshop' ),__( 'Intuitive Customization Options', 'woodworking-workshop' ),__( '24/7 Support', 'woodworking-workshop' ), )
            )
        )
    );

	/*=========================================
	Woodworking Workshop Site Identity
	=========================================*/
	$wp_customize->add_section(
        'title_tagline',
        array(
        	'priority'      => 1,
            'title' 		=> __('Site Identity','woodworking-workshop'),
			'panel'  		=> 'woodworking_workshop_frontpage_sections',
		)
    );

	$wp_customize->register_panel_type( 'Woodworking_Workshop_WP_Customize_Panel' );
	$wp_customize->register_section_type( 'Woodworking_Workshop_WP_Customize_Section' );

}
add_action( 'customize_register', 'woodworking_workshop_header_settings' );

if ( class_exists( 'WP_Customize_Panel' ) ) {
  	class Woodworking_Workshop_WP_Customize_Panel extends WP_Customize_Panel {
	   public $panel;
	   public $type = 'woodworking_workshop_panel';
	   public function json() {

	      $array = wp_array_slice_assoc( (array) $this, array( 'id', 'description', 'priority', 'type', 'panel', ) );
	      $array['title'] = html_entity_decode( $this->title, ENT_QUOTES, get_bloginfo( 'charset' ) );
	      $array['content'] = $this->get_content();
	      $array['active'] = $this->active();
	      $array['instanceNumber'] = $this->instance_number;
	      return $array;
    	}
  	}
}

if ( class_exists( 'WP_Customize_Section' ) ) {
  	class Woodworking_Workshop_WP_Customize_Section extends WP_Customize_Section {
	   public $section;
	   public $type = 'woodworking_workshop_section';
	   public function json() {

	      $array = wp_array_slice_assoc( (array) $this, array( 'id', 'description', 'priority', 'panel', 'type', 'description_hidden', 'section', ) );
	      $array['title'] = html_entity_decode( $this->title, ENT_QUOTES, get_bloginfo( 'charset' ) );
	      $array['content'] = $this->get_content();
	      $array['active'] = $this->active();
	      $array['instanceNumber'] = $this->instance_number;

	      if ( $this->panel ) {
	        $array['customizeAction'] = sprintf( 'Customizing &#9656; %s', esc_html( $this->manager->get_panel( $this->panel )->title ) );
	      } else {
	        $array['customizeAction'] = 'Customizing';
	      }
	      return $array;
    	}
  	}
}
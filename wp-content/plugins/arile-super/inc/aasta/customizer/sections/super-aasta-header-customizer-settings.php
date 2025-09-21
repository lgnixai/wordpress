<?php
/**
 * Frontpage Site Top Header.
 *
 * @package arile-super
 */

defined( 'ABSPATH' ) || exit;

/**
* Site Top Header customizer options.
*/
if ( ! class_exists( 'Aasta_Customize_Homepage_Site_Top_Header_Option' ) ) :

	class Aasta_Customize_Homepage_Site_Top_Header_Option extends Aasta_Customize_Base_Option {

		/**
		 * @return array
		 */
		public function elements() {

			return array(
			
			    'aasta_site_top_header_content_heading'     => array(
					'setting' => array(),
					'control' => array(
						'type'    => 'heading',
						'priority'        => 1,
						'label'   => esc_html__( 'Top Header Options', 'arile-super' ),
						'section' => 'aasta_theme_top_header_area',
					),
				),
			
				'aasta_site_top_header_disabled'            => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'Aasta_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 2,
						'label'    => esc_html__( 'Header Enable/Disable', 'arile-super' ),
						'section'  => 'aasta_theme_top_header_area',
					),
				),
				
				'aasta_site_top_header_social_disabled'            => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'Aasta_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 3,
						'label'    => esc_html__( 'Social Icon Enable/Disable', 'arile-super' ),
						'section'  => 'aasta_theme_top_header_area',
					),
				),
				
			    'aasta_site_top_header_info_disabled'            => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'Aasta_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 4,
						'label'    => esc_html__( 'Info Enable/Disable', 'arile-super' ),
						'section'  => 'aasta_theme_top_header_area',
					),
				),
				
			   'aasta_top_upgrade'            => array(
					'setting' => array( ),
					'control' => array(
						'type'     => 'upgrade',
						'priority' => 11,
						'label'    => esc_html__( 'Top Header Info', 'arile-super' ),
						'section'  => 'aasta_theme_top_header_area',
					),
				),
				
				'aasta_social_upgrade'            => array(
					'setting' => array( ),
					'control' => array(
						'type'     => 'upgrade',
						'priority' => 10,
						'label'    => esc_html__( 'Social Icons', 'arile-super' ),
						'section'  => 'aasta_theme_top_header_area',
					),
				),

			);

		}

	}

	new Aasta_Customize_Homepage_Site_Top_Header_Option();

endif;
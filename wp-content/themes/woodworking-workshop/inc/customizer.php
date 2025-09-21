<?php
/**
 * Woodworking Workshop Theme Customizer.
 *
 * @package Woodworking Workshop
 */

 if ( ! class_exists( 'Woodworking_Workshop_Customizer' ) ) {

	/**
	 * Customizer Loader
	 *
	 * @since 1.0.0
	 */
	class Woodworking_Workshop_Customizer {

		/**
		 * Instance
		 *
		 * @access private
		 * @var object
		 */
		private static $woodworking_workshop_instance;

		/**
		 * Initiator
		 */
		public static function get_instance() {
			if ( ! isset( self::$woodworking_workshop_instance ) ) {
				self::$woodworking_workshop_instance = new self;
			}
			return self::$woodworking_workshop_instance;
		}

		/**
		 * Constructor
		 */
		public function __construct() {
			/**
			 * Customizer
			 */
			add_action( 'customize_preview_init',                  array( $this, 'Woodworking_Workshop_Customize_preview_js' ) );
			add_action( 'customize_controls_enqueue_scripts', 	   array( $this, 'Woodworking_Workshop_Customizer_script' ) );
			add_action( 'customize_register',                      array( $this, 'Woodworking_Workshop_Customizer_register' ) );
			add_action( 'after_setup_theme',                       array( $this, 'Woodworking_Workshop_Customizer_settings' ) );
		}
		
		/**
		 * Add postMessage support for site title and description for the Theme Customizer.
		 *
		 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
		 */
		function Woodworking_Workshop_Customizer_register( $wp_customize ) {
			
			$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
			$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
			$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
			$wp_customize->get_setting( 'background_color' )->transport = 'postMessage';
			$wp_customize->get_setting('custom_logo')->transport = 'refresh';			
			
			/**
			 * Helper files
			 */
			require WOODWORKING_WORKSHOP_PARENT_INC_DIR . '/customizer/sanitization.php';
		}
		
		/**
		 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
		 */
		function Woodworking_Workshop_Customize_preview_js() {
			wp_enqueue_script( 'woodworking-workshop-customizer', WOODWORKING_WORKSHOP_PARENT_INC_URI . '/customizer/assets/js/customizer-preview.js', array( 'customize-preview' ), '20151215', true );
		}		
		
		function Woodworking_Workshop_Customizer_script() {
			 wp_enqueue_script( 'woodworking-workshop-customizer-section', WOODWORKING_WORKSHOP_PARENT_INC_URI .'/customizer/assets/js/customizer-section.js', array("jquery"),'', true  );
		}

		// Include customizer customizer settings.
			
		function Woodworking_Workshop_Customizer_settings() {
			require WOODWORKING_WORKSHOP_PARENT_INC_DIR . '/customizer/customizer-options/header.php';
			require WOODWORKING_WORKSHOP_PARENT_INC_DIR . '/customizer/customizer-options/upper-header.php';
			require WOODWORKING_WORKSHOP_PARENT_INC_DIR . '/customizer/customizer-options/frontpage.php';
			require WOODWORKING_WORKSHOP_PARENT_INC_DIR . '/customizer/customizer-options/footer.php';
			require WOODWORKING_WORKSHOP_PARENT_INC_DIR . '/customizer/customizer-options/typography.php';
			require WOODWORKING_WORKSHOP_PARENT_INC_DIR . '/customizer/customizer-options/post.php';
			require WOODWORKING_WORKSHOP_PARENT_INC_DIR . '/customizer/customizer-options/general.php';
			require WOODWORKING_WORKSHOP_PARENT_INC_DIR . '/customizer/customizer-pro/class-customize.php';
			require WOODWORKING_WORKSHOP_PARENT_INC_DIR . '/customizer/customizer-pro/customizer-upgrade-class.php';
			require WOODWORKING_WORKSHOP_PARENT_INC_DIR . '/customizer/customizer-options/sidebar-option.php';
		}

	}
}

/**
 *  Kicking this off by calling 'get_instance()' method
 */
Woodworking_Workshop_Customizer::get_instance();
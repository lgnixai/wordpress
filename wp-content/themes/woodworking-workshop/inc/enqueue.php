<?php

// Load the JS and CSS.
add_action( 'customize_controls_enqueue_scripts', function() {

	$version = wp_get_theme()->get( 'Version' );

	wp_enqueue_script(
		'woodworking-workshop-customize-section-button',
		get_theme_file_uri( 'assets/js/customize-controls.js' ),
		[ 'customize-controls' ],
		$version,
		true
	);
	wp_localize_script(
		'woodworking-workshop-customize-section-button',
		'Woodworking_Workshop_Customizer_params',
		array(
			'ajaxurl' =>	admin_url( 'admin-ajax.php' )
		)
	);

	wp_enqueue_style(
		'woodworking-workshop-customize-section-button',
		get_theme_file_uri( 'assets/css/customize-controls.css' ),
		[ 'customize-controls' ],
 		$version
	);

} );

 /**
 * Enqueue scripts and styles.
 */
function woodworking_workshop_scripts() {
	// Styles	 

	wp_enqueue_style('all-min',get_template_directory_uri().'/assets/css/all.min.css');

	wp_enqueue_style('bootstrap-min',get_template_directory_uri().'/assets/css/bootstrap.min.css');
		
	wp_enqueue_style('font-awesome',get_template_directory_uri().'/assets/css/fonts/font-awesome/css/font-awesome.min.css');
	
	wp_enqueue_style('woodworking-workshop-editor-style',get_template_directory_uri().'/assets/css/editor-style.css');

	wp_enqueue_style('woodworking-workshop-main', get_template_directory_uri() . '/assets/css/main.css');

	wp_enqueue_style('woodworking-workshop-woo', get_template_directory_uri() . '/assets/css/woo.css');
	
	wp_enqueue_style( 'woodworking-workshop-style', get_stylesheet_uri() );


	wp_enqueue_style('woodworking-workshop-style', get_stylesheet_uri(), array() );
		wp_style_add_data('woodworking-workshop-style', 'rtl', 'replace');
	
	// Scripts

	wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array('jquery'), false, true);

	wp_enqueue_script('woodworking-workshop-theme-js', get_template_directory_uri() . '/assets/js/theme.js', array('jquery'), false, true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	// Define a unique handle for your inline stylesheet
    $handle = 'woodworking-workshop-style';
    
    // Get the generated custom CSS
    $woodworking_workshop_custom_css = "";

    $woodworking_workshop_blog_layouts = get_theme_mod('woodworking_workshop_blog_layout_option_setting', 'Default');
    if ($woodworking_workshop_blog_layouts == 'Default') {
        $woodworking_workshop_custom_css .= '.blog-item{';
        $woodworking_workshop_custom_css .= 'text-align:center;';
        $woodworking_workshop_custom_css .= '}';
    } elseif ($woodworking_workshop_blog_layouts == 'Left') {
        $woodworking_workshop_custom_css .= '.blog-item{';
        $woodworking_workshop_custom_css .= 'text-align:Left;';
        $woodworking_workshop_custom_css .= '}';
    } elseif ($woodworking_workshop_blog_layouts == 'Right') {
        $woodworking_workshop_custom_css .= '.blog-item{';
        $woodworking_workshop_custom_css .= 'text-align:Right;';
        $woodworking_workshop_custom_css .= '}';
    }

    // Enqueue the inline stylesheet
    wp_add_inline_style($handle, $woodworking_workshop_custom_css);

	// inlin css
	$woodworking_workshop_inline_style = '';

	$woodworking_workshop_slider_setting = get_theme_mod( 'woodworking_workshop_slider_setting', '1');
	if($woodworking_workshop_slider_setting == '0') {
	    $woodworking_workshop_inline_style .= '.page-template-template-frontpage .logo{';
	    $woodworking_workshop_inline_style .= 'position: static; margin:0 40px;';
	    $woodworking_workshop_inline_style .= '}';
	    $woodworking_workshop_inline_style .= '.page-template-template-frontpage .main-header{';
	    $woodworking_workshop_inline_style .= 'transform: none; position:static;';
	    $woodworking_workshop_inline_style .= '}';
	}

	$woodworking_workshop_services_setting = get_theme_mod( 'woodworking_workshop_services_setting', '1');
	if($woodworking_workshop_services_setting == '0') {
	    $woodworking_workshop_inline_style .= '.page-template-template-frontpage #content{';
	    $woodworking_workshop_inline_style .= 'margin-bottom:5em;';
	    $woodworking_workshop_inline_style .= '}';
	}

	wp_add_inline_style( 'woodworking-workshop-style', $woodworking_workshop_inline_style );

	// Add inline style for Scroll to Top
    $woodworking_workshop_scroll_top_bg_color = get_theme_mod('woodworking_workshop_scroll_top_bg_color', '#ac7443');
    $woodworking_workshop_scroll_top_color = get_theme_mod('woodworking_workshop_scroll_top_color', '#fff');
    $woodworking_workshop_scroll_custom_css = "
        #scrolltop {
            background-color: {$woodworking_workshop_scroll_top_bg_color};
        }
        #scrolltop span {
            color: {$woodworking_workshop_scroll_top_color};
        }
    ";
    wp_add_inline_style('woodworking-workshop-style', $woodworking_workshop_scroll_custom_css);

    // Add inline style for Preloader
    $woodworking_workshop_preloader_bg_color = get_theme_mod('woodworking_workshop_preloader_bg_color', '#ffffff');
    $woodworking_workshop_preloader_color = get_theme_mod('woodworking_workshop_preloader_color', '#ac7443');
    $woodworking_workshop_preloader_custom_css = "
        .loading {
            background-color: {$woodworking_workshop_preloader_bg_color};
        }
        .loader {
            border-color: {$woodworking_workshop_preloader_color};
            color: {$woodworking_workshop_preloader_color};
            text-shadow: 0 0 10px {$woodworking_workshop_preloader_color};
        }
        .loader::before {
            border-top-color: {$woodworking_workshop_preloader_color};
            border-right-color: {$woodworking_workshop_preloader_color};
        }
        .loader span::before {
            background: {$woodworking_workshop_preloader_color};
            box-shadow: 0 0 10px {$woodworking_workshop_preloader_color};
        }
    ";
    wp_add_inline_style('woodworking-workshop-style', $woodworking_workshop_preloader_custom_css);


}
add_action( 'wp_enqueue_scripts', 'woodworking_workshop_scripts' );

//Admin Enqueue for Admin
function woodworking_workshop_admin_enqueue_scripts(){
	wp_enqueue_style('woodworking-workshop-admin-style', esc_url( get_template_directory_uri() ) . '/inc/aboutthemes/admin.css');
	
	wp_enqueue_script('dismiss-notice-script', get_stylesheet_directory_uri() . '/inc/aboutthemes/theme-admin-notice.js', array('jquery'), null, true);
}
add_action( 'admin_enqueue_scripts', 'woodworking_workshop_admin_enqueue_scripts' );
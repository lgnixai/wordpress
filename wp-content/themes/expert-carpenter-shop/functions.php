<?php

// Enqueue styles and scripts
add_action('wp_enqueue_scripts', 'expert_carpenter_shop_my_theme_enqueue_styles');
function expert_carpenter_shop_my_theme_enqueue_styles() {
    $expert_carpenter_shop_parent_style = 'woodworking-workshop-main'; // Style handle of parent theme
    wp_enqueue_style($expert_carpenter_shop_parent_style, get_template_directory_uri() . '/assets/css/main.css');
    wp_enqueue_style('expert-carpenter-shop-style', get_stylesheet_uri(), array($expert_carpenter_shop_parent_style));
}

add_action('wp_enqueue_scripts', 'expert_carpenter_shop_script');
function expert_carpenter_shop_script() {
    $expert_carpenter_shop_parent_script_handle = 'woodworking-workshop-theme-js'; // Script handle of parent theme
    wp_enqueue_script($expert_carpenter_shop_parent_script_handle, get_theme_file_uri('/assets/js/theme.js'), array(), null, true);
}

// Theme setup
if (!function_exists('expert_carpenter_shop_setup')) :
    function expert_carpenter_shop_setup() {
        add_theme_support('automatic-feed-links');
        add_theme_support('title-tag');
        add_theme_support('custom-header');
        add_theme_support('responsive-embeds');
        add_theme_support('post-thumbnails');
        add_theme_support('align-wide');
        load_theme_textdomain( 'expert-carpenter-shop', get_template_directory() . '/languages' );
        add_editor_style(array('assets/css/editor-style.css'));
        add_theme_support('custom-background', apply_filters('expert_carpenter_shop_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        )));

        if ( ! defined( 'EXPERT_CARPENTAR_SHOP_DEMO_IMPORT_URL' ) ) {
            define( 'EXPERT_CARPENTAR_SHOP_DEMO_IMPORT_URL', esc_url( admin_url( 'themes.php?page=expertcarpentershop-wizard' ) ) );
        }
        if ( ! defined( 'EXPERT_CARPENTAR_SHOP_WELCOME_MESSAGE' ) ) {
            define( 'EXPERT_CARPENTAR_SHOP_WELCOME_MESSAGE', __( 'Welcome! Thank you for choosing Expert Carpenter Shop', 'expert-carpenter-shop' ) );
        }

    }
endif;
add_action('after_setup_theme', 'expert_carpenter_shop_setup');

// Set content width
function expert_carpenter_shop_content_width() {
    $GLOBALS['content_width'] = apply_filters('expert_carpenter_shop_content_width', 1170);
}
add_action('after_setup_theme', 'expert_carpenter_shop_content_width', 0);

// Register widget areas
function expert_carpenter_shop_widgets_init() {
    register_sidebar(array(
        'name' => __('Sidebar Widget Area', 'expert-carpenter-shop'),
        'id' => 'woodworking-workshop-sidebar-primary',
        'description' => __('The Primary Widget Area', 'expert-carpenter-shop'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4><div class="title"><span class="shap"></span></div>',
    ));
    register_sidebar(array(
        'name' => __('Footer Widget Area', 'expert-carpenter-shop'),
        'id' => 'woodworking-workshop-footer-widget-area',
        'description' => __('The Footer Widget Area', 'expert-carpenter-shop'),
        'before_widget' => '<div class="footer-widget col-lg-3 col-sm-6 wow fadeIn" data-wow-delay="0.2s"><aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside></div>',
        'before_title' => '<h5 class="widget-title w-title">',
        'after_title' => '</h5><span class="shap"></span>',
    ));
}
add_action('widgets_init', 'expert_carpenter_shop_widgets_init');

function expert_carpenter_shop_customize_css() {
    $woodworking_workshop_dynamic_color_one = get_theme_mod( 'woodworking_workshop_dynamic_color_one', '#ab7442' );

    $woodworking_workshop_custom_css = "
        :root {
            --color-primary1: {$woodworking_workshop_dynamic_color_one} !important;
        }
    ";

    // Add the custom CSS inline to the site
    wp_add_inline_style( 'woodworking-workshop-style', $woodworking_workshop_custom_css );
}
add_action( 'wp_enqueue_scripts', 'expert_carpenter_shop_customize_css' );

function woodworking_workshop_child_customize_register( $wp_customize ) {

    // Add a new setting (or override if exists)
    $wp_customize->add_setting(
        'expert_carpenter_shop_offer_section_details',
        array(
            'default'           => '',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );
    // Add control to an existing section
    $wp_customize->add_control(
        'expert_carpenter_shop_offer_section_details',
        array(
            'label'    => __('Section Details', 'expert-carpenter-shop'),
            'section'  => 'woodworking_workshop_our_services_section', // Make sure this section exists
            'type'     => 'text',
            'priority' => 3,
        )
    );

}
add_action( 'customize_register', 'woodworking_workshop_child_customize_register', 20 );

// NOTICE
function expert_carpenter_shop_activation_notice() {
    // Check if the notice has already been dismissed
    if (get_option('woodworking_workshop_notice_dismissed')) {
        return;
    }

    // Avoid showing the notice on the demo import wizard page
    if (isset($_GET['page']) && $_GET['page'] === 'expertcarpentershop-wizard') {
        return;
    }
    ?>
    <div class="updated notice notice-get-started-class is-dismissible" data-notice="get_started">
        <div class="woodworking-workshop-getting-started-notice clearfix">
            <div class="woodworking-workshop-theme-notice-content">
                <h2 class="woodworking-workshop-notice-h2">
					<?php echo esc_html( EXPERT_CARPENTAR_SHOP_WELCOME_MESSAGE ); ?>
                </h2>
                <a class="woodworking-workshop-btn-get-started button button-primary button-hero woodworking-workshop-button-padding" 
                    href="<?php echo esc_url( EXPERT_CARPENTAR_SHOP_DEMO_IMPORT_URL ); ?>" 
                    id="woodworking-workshop-import-button">
                    <?php esc_html_e('One Click Demo Import', 'woodworking-workshop') ?>
                </a>
            </div>
        </div>
    </div>
    <?php
}

add_action('admin_notices', 'expert_carpenter_shop_activation_notice');

// Add Ajax action to handle dismiss
add_action('wp_ajax_expert_carpenter_shop_dismiss_notice', 'expert_carpenter_shop_dismiss_notice');

// Reset the dismissed status when the theme is activated
function expert_carpenter_shop_notice_status() {
    delete_option('expert_carpenter_shop_notice_dismissed');
}
add_action('after_switch_theme', 'expert_carpenter_shop_notice_status');

function expert_carpenter_shop_dismiss_notice() {
    // Update the option to mark the notice as dismissed
    update_option('expert_carpenter_shop_notice_dismissed', true);

    // Return a JSON response to indicate the success of the action
    wp_send_json_success();
}

function woodworking_workshop_remove_parent_activation_notice() {
    remove_action('wp_ajax_woodworking_workshop_dismiss_notice', 'woodworking_workshop_dismiss_notice');
    remove_action('admin_notices', 'woodworking_workshop_activation_notice');
}
add_action('init', 'woodworking_workshop_remove_parent_activation_notice');
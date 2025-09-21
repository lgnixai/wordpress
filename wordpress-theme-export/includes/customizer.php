<?php
/**
 * Export Business Theme Customizer
 *
 * @package Export_Business_Theme
 */

function export_theme_customize_register($wp_customize) {
    // Add sections
    $wp_customize->add_section('export_theme_header_section', array(
        'title'    => __('Header Settings', 'export-theme'),
        'priority' => 30,
    ));

    $wp_customize->add_section('export_theme_footer_section', array(
        'title'    => __('Footer Settings', 'export-theme'),
        'priority' => 40,
    ));

    $wp_customize->add_section('export_theme_social_section', array(
        'title'    => __('Social Media', 'export-theme'),
        'priority' => 50,
    ));

    // Header Settings
    $wp_customize->add_setting('export_theme_header_cta_text', array(
        'default'           => 'Get Quote',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('export_theme_header_cta_text', array(
        'label'    => __('Header CTA Text', 'export-theme'),
        'section'  => 'export_theme_header_section',
        'type'     => 'text',
    ));

    $wp_customize->add_setting('export_theme_header_cta_url', array(
        'default'           => '/contact',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control('export_theme_header_cta_url', array(
        'label'    => __('Header CTA URL', 'export-theme'),
        'section'  => 'export_theme_header_section',
        'type'     => 'url',
    ));

    // Footer Settings
    $wp_customize->add_setting('export_theme_footer_copyright', array(
        'default'           => '© 2024 Your Company. All rights reserved.',
        'sanitize_callback' => 'wp_kses_post',
    ));

    $wp_customize->add_control('export_theme_footer_copyright', array(
        'label'    => __('Copyright Text', 'export-theme'),
        'section'  => 'export_theme_footer_section',
        'type'     => 'textarea',
    ));

    // Social Media Links
    $social_networks = array(
        'facebook'  => 'Facebook',
        'twitter'   => 'Twitter/X',
        'linkedin'  => 'LinkedIn',
        'instagram' => 'Instagram',
        'youtube'   => 'YouTube',
        'whatsapp'  => 'WhatsApp',
    );

    foreach ($social_networks as $network => $label) {
        $wp_customize->add_setting('export_theme_social_' . $network, array(
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
        ));

        $wp_customize->add_control('export_theme_social_' . $network, array(
            'label'    => sprintf(__('%s URL', 'export-theme'), $label),
            'section'  => 'export_theme_social_section',
            'type'     => 'url',
        ));
    }

    // Company Info
    $wp_customize->add_section('export_theme_company_section', array(
        'title'    => __('Company Information', 'export-theme'),
        'priority' => 60,
    ));

    $wp_customize->add_setting('export_theme_company_phone', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('export_theme_company_phone', array(
        'label'    => __('Phone Number', 'export-theme'),
        'section'  => 'export_theme_company_section',
        'type'     => 'text',
    ));

    $wp_customize->add_setting('export_theme_company_email', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_email',
    ));

    $wp_customize->add_control('export_theme_company_email', array(
        'label'    => __('Email Address', 'export-theme'),
        'section'  => 'export_theme_company_section',
        'type'     => 'email',
    ));

    $wp_customize->add_setting('export_theme_company_address', array(
        'default'           => '',
        'sanitize_callback' => 'wp_kses_post',
    ));

    $wp_customize->add_control('export_theme_company_address', array(
        'label'    => __('Company Address', 'export-theme'),
        'section'  => 'export_theme_company_section',
        'type'     => 'textarea',
    ));
}
add_action('customize_register', 'export_theme_customize_register');
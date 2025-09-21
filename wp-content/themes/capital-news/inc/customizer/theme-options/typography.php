<?php
/**
 * Typography
 *
 * @package Capital News
 */

$wp_customize->add_section(
	'capital_news_typography',
	array(
		'panel' => 'capital_news_theme_options',
		'title' => esc_html__( 'Typography', 'capital-news' ),
	)
);

// Typography - Site Title Font.
$wp_customize->add_setting(
	'capital_news_site_title_font',
	array(
		'default'           => 'Rubik',
		'sanitize_callback' => 'capital_news_sanitize_google_fonts',
	)
);

$wp_customize->add_control(
	'capital_news_site_title_font',
	array(
		'label'    => esc_html__( 'Site Title Font Family', 'capital-news' ),
		'section'  => 'capital_news_typography',
		'settings' => 'capital_news_site_title_font',
		'type'     => 'select',
		'choices'  => capital_news_get_all_google_font_families(),
	)
);

// Typography - Site Description Font.
$wp_customize->add_setting(
	'capital_news_site_description_font',
	array(
		'default'           => 'Poppins',
		'sanitize_callback' => 'capital_news_sanitize_google_fonts',
	)
);

$wp_customize->add_control(
	'capital_news_site_description_font',
	array(
		'label'    => esc_html__( 'Site Description Font Family', 'capital-news' ),
		'section'  => 'capital_news_typography',
		'settings' => 'capital_news_site_description_font',
		'type'     => 'select',
		'choices'  => capital_news_get_all_google_font_families(),
	)
);

// Typography - Header Font.
$wp_customize->add_setting(
	'capital_news_header_font',
	array(
		'default'           => 'Mulish',
		'sanitize_callback' => 'capital_news_sanitize_google_fonts',
	)
);

$wp_customize->add_control(
	'capital_news_header_font',
	array(
		'label'    => esc_html__( 'Header Font Family', 'capital-news' ),
		'section'  => 'capital_news_typography',
		'settings' => 'capital_news_header_font',
		'type'     => 'select',
		'choices'  => capital_news_get_all_google_font_families(),
	)
);

// Typography - Body Font.
$wp_customize->add_setting(
	'capital_news_body_font',
	array(
		'default'           => 'Poppins',
		'sanitize_callback' => 'capital_news_sanitize_google_fonts',
	)
);

$wp_customize->add_control(
	'capital_news_body_font',
	array(
		'label'    => esc_html__( 'Body Font Family', 'capital-news' ),
		'section'  => 'capital_news_typography',
		'settings' => 'capital_news_body_font',
		'type'     => 'select',
		'choices'  => capital_news_get_all_google_font_families(),
	)
);

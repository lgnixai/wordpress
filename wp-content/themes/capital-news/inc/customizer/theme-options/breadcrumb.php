<?php
/**
 * Breadcrumb
 *
 * @package Capital News
 */

$wp_customize->add_section(
	'capital_news_breadcrumb',
	array(
		'title' => esc_html__( 'Breadcrumb', 'capital-news' ),
		'panel' => 'capital_news_theme_options',
	)
);

// Breadcrumb - Enable Breadcrumb.
$wp_customize->add_setting(
	'capital_news_enable_breadcrumb',
	array(
		'sanitize_callback' => 'capital_news_sanitize_switch',
		'default'           => true,
	)
);

$wp_customize->add_control(
	new Capital_News_Toggle_Switch_Custom_Control(
		$wp_customize,
		'capital_news_enable_breadcrumb',
		array(
			'label'   => esc_html__( 'Enable Breadcrumb', 'capital-news' ),
			'section' => 'capital_news_breadcrumb',
		)
	)
);

// Breadcrumb - Separator.
$wp_customize->add_setting(
	'capital_news_breadcrumb_separator',
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default'           => '/',
	)
);

$wp_customize->add_control(
	'capital_news_breadcrumb_separator',
	array(
		'label'           => esc_html__( 'Separator', 'capital-news' ),
		'active_callback' => 'capital_news_is_breadcrumb_enabled',
		'section'         => 'capital_news_breadcrumb',
	)
);

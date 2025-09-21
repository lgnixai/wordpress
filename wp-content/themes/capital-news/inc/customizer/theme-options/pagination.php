<?php
/**
 * Pagination
 *
 * @package Capital News
 */

$wp_customize->add_section(
	'capital_news_pagination',
	array(
		'panel' => 'capital_news_theme_options',
		'title' => esc_html__( 'Pagination', 'capital-news' ),
	)
);

// Pagination - Enable Pagination.
$wp_customize->add_setting(
	'capital_news_enable_pagination',
	array(
		'default'           => true,
		'sanitize_callback' => 'capital_news_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Capital_News_Toggle_Switch_Custom_Control(
		$wp_customize,
		'capital_news_enable_pagination',
		array(
			'label'    => esc_html__( 'Enable Pagination', 'capital-news' ),
			'section'  => 'capital_news_pagination',
			'settings' => 'capital_news_enable_pagination',
			'type'     => 'checkbox',
		)
	)
);

// Pagination - Pagination Type.
$wp_customize->add_setting(
	'capital_news_pagination_type',
	array(
		'default'           => 'numeric',
		'sanitize_callback' => 'capital_news_sanitize_select',
	)
);

$wp_customize->add_control(
	'capital_news_pagination_type',
	array(
		'label'           => esc_html__( 'Pagination Type', 'capital-news' ),
		'section'         => 'capital_news_pagination',
		'settings'        => 'capital_news_pagination_type',
		'active_callback' => 'capital_news_is_pagination_enabled',
		'type'            => 'select',
		'choices'         => array(
			'default' => __( 'Default (Older/Newer)', 'capital-news' ),
			'numeric' => __( 'Numeric', 'capital-news' ),
		),
	)
);

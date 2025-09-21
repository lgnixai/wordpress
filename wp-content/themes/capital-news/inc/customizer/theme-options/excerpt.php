<?php
/**
 * Excerpt
 *
 * @package Capital News
 */

$wp_customize->add_section(
	'capital_news_excerpt_options',
	array(
		'panel' => 'capital_news_theme_options',
		'title' => esc_html__( 'Excerpt', 'capital-news' ),
	)
);

// Excerpt - Excerpt Length.
$wp_customize->add_setting(
	'capital_news_excerpt_length',
	array(
		'default'           => 20,
		'sanitize_callback' => 'capital_news_sanitize_number_range',
		'validate_callback' => 'capital_news_validate_excerpt_length',
	)
);

$wp_customize->add_control(
	'capital_news_excerpt_length',
	array(
		'label'       => esc_html__( 'Excerpt Length (no. of words)', 'capital-news' ),
		'description' => esc_html__( 'Note: Min 1 & Max 100. Please input the valid number and save. Then refresh the page to see the change.', 'capital-news' ),
		'section'     => 'capital_news_excerpt_options',
		'settings'    => 'capital_news_excerpt_length',
		'type'        => 'number',
		'input_attrs' => array(
			'min'  => 1,
			'max'  => 100,
			'step' => 1,
		),
	)
);

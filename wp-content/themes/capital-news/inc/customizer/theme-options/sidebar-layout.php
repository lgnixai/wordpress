<?php
/**
 * Sidebar Option
 *
 * @package Capital News
 */

$wp_customize->add_section(
	'capital_news_sidebar_option',
	array(
		'title' => esc_html__( 'Layout', 'capital-news' ),
		'panel' => 'capital_news_theme_options',
	)
);

// Sidebar Option - Global Sidebar Position.
$wp_customize->add_setting(
	'capital_news_sidebar_position',
	array(
		'sanitize_callback' => 'capital_news_sanitize_select',
		'default'           => 'right-sidebar',
	)
);

$wp_customize->add_control(
	'capital_news_sidebar_position',
	array(
		'label'   => esc_html__( 'Global Sidebar Position', 'capital-news' ),
		'section' => 'capital_news_sidebar_option',
		'type'    => 'select',
		'choices' => array(
			'right-sidebar' => esc_html__( 'Right Sidebar', 'capital-news' ),
			'no-sidebar'    => esc_html__( 'No Sidebar', 'capital-news' ),
		),
	)
);

// Sidebar Option - Post Sidebar Position.
$wp_customize->add_setting(
	'capital_news_post_sidebar_position',
	array(
		'sanitize_callback' => 'capital_news_sanitize_select',
		'default'           => 'right-sidebar',
	)
);

$wp_customize->add_control(
	'capital_news_post_sidebar_position',
	array(
		'label'   => esc_html__( 'Post Sidebar Position', 'capital-news' ),
		'section' => 'capital_news_sidebar_option',
		'type'    => 'select',
		'choices' => array(
			'right-sidebar' => esc_html__( 'Right Sidebar', 'capital-news' ),
			'no-sidebar'    => esc_html__( 'No Sidebar', 'capital-news' ),
		),
	)
);

// Sidebar Option - Page Sidebar Position.
$wp_customize->add_setting(
	'capital_news_page_sidebar_position',
	array(
		'sanitize_callback' => 'capital_news_sanitize_select',
		'default'           => 'right-sidebar',
	)
);

$wp_customize->add_control(
	'capital_news_page_sidebar_position',
	array(
		'label'   => esc_html__( 'Page Sidebar Position', 'capital-news' ),
		'section' => 'capital_news_sidebar_option',
		'type'    => 'select',
		'choices' => array(
			'right-sidebar' => esc_html__( 'Right Sidebar', 'capital-news' ),
			'no-sidebar'    => esc_html__( 'No Sidebar', 'capital-news' ),
		),
	)
);

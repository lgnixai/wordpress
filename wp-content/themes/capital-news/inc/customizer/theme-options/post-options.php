<?php
/**
 * Post Options
 *
 * @package Capital News
 */

$wp_customize->add_section(
	'capital_news_post_options',
	array(
		'title' => esc_html__( 'Post Options', 'capital-news' ),
		'panel' => 'capital_news_theme_options',
	)
);

// Post Options - Hide Date.
$wp_customize->add_setting(
	'capital_news_post_hide_date',
	array(
		'default'           => false,
		'sanitize_callback' => 'capital_news_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Capital_News_Toggle_Switch_Custom_Control(
		$wp_customize,
		'capital_news_post_hide_date',
		array(
			'label'   => esc_html__( 'Hide Date', 'capital-news' ),
			'section' => 'capital_news_post_options',
		)
	)
);

// Post Options - Hide Author.
$wp_customize->add_setting(
	'capital_news_post_hide_author',
	array(
		'default'           => false,
		'sanitize_callback' => 'capital_news_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Capital_News_Toggle_Switch_Custom_Control(
		$wp_customize,
		'capital_news_post_hide_author',
		array(
			'label'   => esc_html__( 'Hide Author', 'capital-news' ),
			'section' => 'capital_news_post_options',
		)
	)
);

// Post Options - Hide Category.
$wp_customize->add_setting(
	'capital_news_post_hide_category',
	array(
		'default'           => false,
		'sanitize_callback' => 'capital_news_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Capital_News_Toggle_Switch_Custom_Control(
		$wp_customize,
		'capital_news_post_hide_category',
		array(
			'label'   => esc_html__( 'Hide Category', 'capital-news' ),
			'section' => 'capital_news_post_options',
		)
	)
);

// Post Options - Hide Tag.
$wp_customize->add_setting(
	'capital_news_post_hide_tags',
	array(
		'default'           => false,
		'sanitize_callback' => 'capital_news_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Capital_News_Toggle_Switch_Custom_Control(
		$wp_customize,
		'capital_news_post_hide_tags',
		array(
			'label'   => esc_html__( 'Hide Tag', 'capital-news' ),
			'section' => 'capital_news_post_options',
		)
	)
);

// Post Options - Related Post Label.
$wp_customize->add_setting(
	'capital_news_post_related_post_label',
	array(
		'default'           => __( 'Related Posts', 'capital-news' ),
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'capital_news_post_related_post_label',
	array(
		'label'    => esc_html__( 'Related Posts Label', 'capital-news' ),
		'section'  => 'capital_news_post_options',
		'settings' => 'capital_news_post_related_post_label',
		'type'     => 'text',
	)
);

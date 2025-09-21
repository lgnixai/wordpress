<?php
/**
 * Banner Section
 *
 * @package Capital News
 */

$wp_customize->add_section(
	'capital_news_banner_section',
	array(
		'panel' => 'capital_news_front_page_options',
		'title' => esc_html__( 'Banner Section', 'capital-news' ),
	)
);

// Banner Section - Enable Section.
$wp_customize->add_setting(
	'capital_news_enable_banner_section',
	array(
		'default'           => false,
		'sanitize_callback' => 'capital_news_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Capital_News_Toggle_Switch_Custom_Control(
		$wp_customize,
		'capital_news_enable_banner_section',
		array(
			'label'    => esc_html__( 'Enable Banner Section', 'capital-news' ),
			'section'  => 'capital_news_banner_section',
			'settings' => 'capital_news_enable_banner_section',
		)
	)
);

if ( isset( $wp_customize->selective_refresh ) ) {
	$wp_customize->selective_refresh->add_partial(
		'capital_news_enable_banner_section',
		array(
			'selector' => '#capital_news_banner_section .section-link',
			'settings' => 'capital_news_enable_banner_section',
		)
	);
}

// Banner Section Main - Heading.
$wp_customize->add_setting(
	'capital_news_banner_section_area',
	array(
		'sanitize_callback' => 'wp_kses_post',
	)
);

$wp_customize->add_control(
	new Capital_News_Title_Control(
		$wp_customize,
		'capital_news_banner_section_area',
		array(
			'label'           => __( 'Main Banner Settings', 'capital-news' ),
			'section'         => 'capital_news_banner_section',
			'settings'        => 'capital_news_banner_section_area',
			'active_callback' => 'capital_news_is_banner_section_enabled',
		)
	)
);

// Banner Section - Main News Content Type.
$wp_customize->add_setting(
	'capital_news_main_news_content_type',
	array(
		'default'           => 'post',
		'sanitize_callback' => 'capital_news_sanitize_select',
	)
);

$wp_customize->add_control(
	'capital_news_main_news_content_type',
	array(
		'label'           => esc_html__( 'Select Content Type', 'capital-news' ),
		'section'         => 'capital_news_banner_section',
		'settings'        => 'capital_news_main_news_content_type',
		'type'            => 'select',
		'active_callback' => 'capital_news_is_banner_section_enabled',
		'choices'         => array(
			'post'     => esc_html__( 'Post', 'capital-news' ),
			'category' => esc_html__( 'Category', 'capital-news' ),
		),
	)
);

for ( $i = 1; $i <= 4; $i++ ) {
	// Banner Section - Select Post.
	$wp_customize->add_setting(
		'capital_news_main_news_content_post_' . $i,
		array(
			'sanitize_callback' => 'absint',
		)
	);

	$wp_customize->add_control(
		'capital_news_main_news_content_post_' . $i,
		array(
			'label'           => sprintf( esc_html__( 'Select Post %d', 'capital-news' ), $i ),
			'section'         => 'capital_news_banner_section',
			'settings'        => 'capital_news_main_news_content_post_' . $i,
			'active_callback' => 'capital_news_is_main_news_section_and_content_type_post_enabled',
			'type'            => 'select',
			'choices'         => capital_news_get_post_choices(),
		)
	);

}

// Banner Section - Select Category.
$wp_customize->add_setting(
	'capital_news_main_news_content_category',
	array(
		'sanitize_callback' => 'capital_news_sanitize_select',
	)
);

$wp_customize->add_control(
	'capital_news_main_news_content_category',
	array(
		'label'           => esc_html__( 'Select Category', 'capital-news' ),
		'section'         => 'capital_news_banner_section',
		'settings'        => 'capital_news_main_news_content_category',
		'active_callback' => 'capital_news_is_main_news_section_and_content_type_category_enabled',
		'type'            => 'select',
		'choices'         => capital_news_get_post_cat_choices(),
	)
);

// Banner Section - Featured News Heading.
$wp_customize->add_setting(
	'capital_news_featured_news_area',
	array(
		'sanitize_callback' => 'wp_kses_post',
	)
);

$wp_customize->add_control(
	new Capital_News_Title_Control(
		$wp_customize,
		'capital_news_featured_news_area',
		array(
			'label'           => __( 'Featured News Settings', 'capital-news' ),
			'section'         => 'capital_news_banner_section',
			'settings'        => 'capital_news_featured_news_area',
			'active_callback' => 'capital_news_is_banner_section_enabled',
		)
	)
);

// Banner Section - Editor Choice Title.
$wp_customize->add_setting(
	'capital_news_featured_news_title',
	array(
		'default'           => __( 'Featured News', 'capital-news' ),
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'capital_news_featured_news_title',
	array(
		'label'           => esc_html__( 'Section Title', 'capital-news' ),
		'section'         => 'capital_news_banner_section',
		'settings'        => 'capital_news_featured_news_title',
		'type'            => 'text',
		'active_callback' => 'capital_news_is_banner_section_enabled',
	)
);

// Banner Section - Editor Choice Button Label.
$wp_customize->add_setting(
	'capital_news_featured_news_button_label',
	array(
		'default'           => __( 'View All', 'capital-news' ),
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'capital_news_featured_news_button_label',
	array(
		'label'           => esc_html__( 'Button Label', 'capital-news' ),
		'section'         => 'capital_news_banner_section',
		'settings'        => 'capital_news_featured_news_button_label',
		'type'            => 'text',
		'active_callback' => 'capital_news_is_banner_section_enabled',
	)
);

// Banner Section - Editor Choice Button Link.
$wp_customize->add_setting(
	'capital_news_featured_news_button_link',
	array(
		'default'           => '#',
		'sanitize_callback' => 'esc_url_raw',
	)
);

$wp_customize->add_control(
	'capital_news_featured_news_button_link',
	array(
		'label'           => esc_html__( 'Button Link', 'capital-news' ),
		'section'         => 'capital_news_banner_section',
		'settings'        => 'capital_news_featured_news_button_link',
		'type'            => 'url',
		'active_callback' => 'capital_news_is_banner_section_enabled',
	)
);

// Banner Section - Featured News Content Type.
$wp_customize->add_setting(
	'capital_news_featured_news_content_type',
	array(
		'default'           => 'post',
		'sanitize_callback' => 'capital_news_sanitize_select',
	)
);

$wp_customize->add_control(
	'capital_news_featured_news_content_type',
	array(
		'label'           => esc_html__( 'Select Content Type', 'capital-news' ),
		'section'         => 'capital_news_banner_section',
		'settings'        => 'capital_news_featured_news_content_type',
		'type'            => 'select',
		'active_callback' => 'capital_news_is_banner_section_enabled',
		'choices'         => array(
			'post'     => esc_html__( 'Post', 'capital-news' ),
			'category' => esc_html__( 'Category', 'capital-news' ),
		),
	)
);

for ( $i = 1; $i <= 5; $i++ ) {
	// Banner Section - Select Post.
	$wp_customize->add_setting(
		'capital_news_featured_news_content_post_' . $i,
		array(
			'sanitize_callback' => 'absint',
		)
	);

	$wp_customize->add_control(
		'capital_news_featured_news_content_post_' . $i,
		array(
			'label'           => sprintf( esc_html__( 'Select Post %d', 'capital-news' ), $i ),
			'section'         => 'capital_news_banner_section',
			'settings'        => 'capital_news_featured_news_content_post_' . $i,
			'active_callback' => 'capital_news_is_featured_news_section_and_content_type_post_enabled',
			'type'            => 'select',
			'choices'         => capital_news_get_post_choices(),
		)
	);

}

// Banner Section - Select Category.
$wp_customize->add_setting(
	'capital_news_featured_news_content_category',
	array(
		'sanitize_callback' => 'capital_news_sanitize_select',
	)
);

$wp_customize->add_control(
	'capital_news_featured_news_content_category',
	array(
		'label'           => esc_html__( 'Select Category', 'capital-news' ),
		'section'         => 'capital_news_banner_section',
		'settings'        => 'capital_news_featured_news_content_category',
		'active_callback' => 'capital_news_is_featured_news_section_and_content_type_category_enabled',
		'type'            => 'select',
		'choices'         => capital_news_get_post_cat_choices(),
	)
);

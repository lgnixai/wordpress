<?php
/**
 * Footer Options
 *
 * @package Capital News
 */

$wp_customize->add_section(
	'capital_news_footer_options',
	array(
		'panel' => 'capital_news_theme_options',
		'title' => esc_html__( 'Footer Options', 'capital-news' ),
	)
);

// Footer Options - Copyright Text.
/* translators: 1: Year, 2: Site Title with home URL. */
$copyright_default = sprintf( esc_html_x( 'Copyright &copy; %1$s %2$s', '1: Year, 2: Site Title with home URL', 'capital-news' ), '[the-year]', '[site-link]' );
$wp_customize->add_setting(
	'capital_news_footer_copyright_text',
	array(
		'default'           => $copyright_default,
		'sanitize_callback' => 'wp_kses_post',
	)
);

$wp_customize->add_control(
	'capital_news_footer_copyright_text',
	array(
		'label'    => esc_html__( 'Copyright Text', 'capital-news' ),
		'section'  => 'capital_news_footer_options',
		'settings' => 'capital_news_footer_copyright_text',
		'type'     => 'textarea',
	)
);

<?php
/**
 * Theme Options
 *
 * @package Capital News
 */

$wp_customize->add_panel(
	'capital_news_theme_options',
	array(
		'title'    => esc_html__( 'Theme Options', 'capital-news' ),
		'priority' => 130,
	)
);

// Typography.
require get_template_directory() . '/inc/customizer/theme-options/typography.php';

// Excerpt.
require get_template_directory() . '/inc/customizer/theme-options/excerpt.php';

// Breadcrumb.
require get_template_directory() . '/inc/customizer/theme-options/breadcrumb.php';

// Layout.
require get_template_directory() . '/inc/customizer/theme-options/sidebar-layout.php';

// Post Options.
require get_template_directory() . '/inc/customizer/theme-options/post-options.php';

// Pagination.
require get_template_directory() . '/inc/customizer/theme-options/pagination.php';

// Footer Options.
require get_template_directory() . '/inc/customizer/theme-options/footer-options.php';

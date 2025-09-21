<?php

/**
 * Dynamic CSS
 */
function capital_news_dynamic_css() {

	$site_title_font       = get_theme_mod( 'capital_news_site_title_font', 'Rubik' );
	$site_description_font = get_theme_mod( 'capital_news_site_description_font', 'Poppins' );
	$header_font           = get_theme_mod( 'capital_news_header_font', 'Mulish' );
	$body_font             = get_theme_mod( 'capital_news_body_font', 'Poppins' );

	$custom_css  = '';
	$custom_css .= '
	/* Color */
	:root {
		--site-title-color: ' . esc_attr( '#' . get_header_textcolor() ) . ';
		--custom-bg-clr: ' . esc_attr( '#' . get_background_color() ) . ';
	}
	';

	$custom_css .= '
	/* Typograhpy */
	:root {
		--font-heading: "' . esc_attr( $header_font ) . '", serif;
		--font-main: -apple-system, BlinkMacSystemFont,"' . esc_attr( $body_font ) . '", "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
	}

	body,
	button, input, select, optgroup, textarea {
		font-family: "' . esc_attr( $body_font ) . '", serif;
	}

	.site-title a {
		font-family: "' . esc_attr( $site_title_font ) . '", serif;
	}
	
	.site-description {
		font-family: "' . esc_attr( $site_description_font ) . '", serif;
	}
	';

	wp_add_inline_style( 'capital-news-style', $custom_css );
}

add_action( 'wp_enqueue_scripts', 'capital_news_dynamic_css', 99 );

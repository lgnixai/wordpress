<?php
/**
 * Mattress Shop: Block Patterns
 *
 * @since Mattress Shop 1.0
 */

 /**
  * Get patterns content.
  *
  * @param string $file_name Filename.
  * @return string
  */
function mattress_shop_get_pattern_content( $file_name ) {
	ob_start();
	include get_theme_file_path( '/patterns/' . $file_name . '.php' );
	$output = ob_get_contents();
	ob_end_clean();
	return $output;
}

/**
 * Registers block patterns and categories.
 *
 * @since Mattress Shop 1.0
 *
 * @return void
 */
function mattress_shop_register_block_patterns() {

	$patterns = array(
		'header-default' => array(
			'title'      => __( 'Default header', 'mattress-shop' ),
			'categories' => array( 'mattress-shop-headers' ),
			'blockTypes' => array( 'parts/header' ),
		),
		'footer-default' => array(
			'title'      => __( 'Default footer', 'mattress-shop' ),
			'categories' => array( 'mattress-shop-footers' ),
			'blockTypes' => array( 'parts/footer' ),
		),
		'home-banner' => array(
			'title'      => __( 'Home Banner', 'mattress-shop' ),
			'categories' => array( 'mattress-shop-banner' ),
		),
		'product-section' => array(
			'title'      => __( 'Product Section', 'mattress-shop' ),
			'categories' => array( 'mattress-shop-product-section' ),
		),
		'about-section' => array(
			'title'      => __( 'About Section', 'mattress-shop' ),
			'categories' => array( 'mattress-shop-about-section' ),
		),
		'testimonial-section' => array(
			'title'      => __( 'Testimonial Section', 'mattress-shop' ),
			'categories' => array( 'mattress-shop-testimonial-section' ),
		),
		'news-section' => array(
			'title'      => __( 'News Section', 'mattress-shop' ),
			'categories' => array( 'mattress-shop-news-section' ),
		),
		'faq-section' => array(
			'title'      => __( 'FAQ Section', 'mattress-shop' ),
			'categories' => array( 'mattress-shop-faq-section' ),
		),
		'primary-sidebar' => array(
			'title'    => __( 'Primary Sidebar', 'mattress-shop' ),
			'categories' => array( 'mattress-shop-sidebars' ),
		),
		'hidden-404' => array(
			'title'    => __( '404 content', 'mattress-shop' ),
			'categories' => array( 'mattress-shop-pages' ),
		),
		'post-listing-single-column' => array(
			'title'    => __( 'Post Single Column', 'mattress-shop' ),
			//'inserter' => false,
			'categories' => array( 'mattress-shop-query' ),
		),
		'post-listing-two-column' => array(
			'title'    => __( 'Post Two Column', 'mattress-shop' ),
			//'inserter' => false,
			'categories' => array( 'mattress-shop-query' ),
		),
		'post-listing-three-column' => array(
			'title'    => __( 'Post Three Column', 'mattress-shop' ),
			//'inserter' => false,
			'categories' => array( 'mattress-shop-query' ),
		),
		'post-listing-four-column' => array(
			'title'    => __( 'Post Four Column', 'mattress-shop' ),
			//'inserter' => false,
			'categories' => array( 'mattress-shop-query' ),
		),
		'feature-post-column' => array(
			'title'    => __( 'Feature Post Column', 'mattress-shop' ),
			//'inserter' => false,
			'categories' => array( 'mattress-shop-query' ),
		),
		'comment-section-1' => array(
			'title'    => __( 'Comment Section 1', 'mattress-shop' ),
			'categories' => array( 'mattress-shop-comment-sections' ),
		),
		'cover-with-post-title' => array(
			'title'    => __( 'Cover With Post Title', 'mattress-shop' ),
			'categories' => array( 'mattress-shop-banner-sections' ),
		),
		'cover-with-search-title' => array(
			'title'    => __( 'Cover With Search Title', 'mattress-shop' ),
			'categories' => array( 'mattress-shop-banner-sections' ),
		),
		'cover-with-archive-title' => array(
			'title'    => __( 'Cover With Archive Title', 'mattress-shop' ),
			'categories' => array( 'mattress-shop-banner-sections' ),
		),
		'cover-with-index-title' => array(
			'title'    => __( 'Cover With Index Title', 'mattress-shop' ),
			'categories' => array( 'mattress-shop-banner-sections' ),
		),
		'theme-button' => array(
			'title'    => __( 'Theme Button', 'mattress-shop' ),
			'categories' => array( 'mattress-shop-theme-button' ),
		),
	);

	$block_pattern_categories = array(
		'mattress-shop-footers' => array( 'label' => __( 'Footers', 'mattress-shop' ) ),
		'mattress-shop-headers' => array( 'label' => __( 'Headers', 'mattress-shop' ) ),
		'mattress-shop-pages'   => array( 'label' => __( 'Pages', 'mattress-shop' ) ),
		'mattress-shop-query'   => array( 'label' => __( 'Query', 'mattress-shop' ) ),
		'mattress-shop-sidebars'   => array( 'label' => __( 'Sidebars', 'mattress-shop' ) ),
		'mattress-shop-banner'   => array( 'label' => __( 'Banner Sections', 'mattress-shop' ) ),
		'mattress-shop-product-section'   => array( 'label' => __( 'Product Section', 'mattress-shop' ) ),
		'mattress-shop-about-section'   => array( 'label' => __( 'About Section', 'mattress-shop' ) ),
		'mattress-shop-testimonial-section'   => array( 'label' => __( 'Testimonial Section', 'mattress-shop' ) ),
		'mattress-shop-news-section'   => array( 'label' => __( 'News Section', 'mattress-shop' ) ),
		'mattress-shop-faq-section'   => array( 'label' => __( 'FAQ Section', 'mattress-shop' ) ),
		'mattress-shop-comment-section'   => array( 'label' => __( 'Comment Sections', 'mattress-shop' ) ),
		'mattress-shop-theme-button'   => array( 'label' => __( 'Theme Button Sections', 'mattress-shop' ) ),
	);

	/**
	 * Filters the theme block pattern categories.
	 *
	 * @since Mattress Shop 1.0
	 *
	 * @param array[] $block_pattern_categories {
	 *     An associative array of block pattern categories, keyed by category name.
	 *
	 *     @type array[] $properties {
	 *         An array of block category properties.
	 *
	 *         @type string $label A human-readable label for the pattern category.
	 *     }
	 * }
	 */
	$block_pattern_categories = apply_filters( 'mattress_shop_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}

	/**
	 * Filters the theme block patterns.
	 *
	 * @since Mattress Shop 1.0
	 *
	 * @param array $block_patterns List of block patterns by name.
	 */
	$patterns = apply_filters( 'mattress_shop_block_patterns', $patterns );

	foreach ( $patterns as $block_pattern => $pattern ) {
		$pattern['content'] = mattress_shop_get_pattern_content( $block_pattern );
		register_block_pattern(
			'mattress-shop/' . $block_pattern,
			$pattern
		);
	}
}
add_action( 'init', 'mattress_shop_register_block_patterns', 9 );

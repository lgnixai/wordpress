<?php
/**
 * Title: Home Banner
 * Slug: mattress-shop/home-banner
 * Categories: template
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url(get_template_directory_uri()); ?>/images/banner.png","id":45,"dimRatio":0,"customOverlayColor":"#9e9c9a","isUserOverlayColor":false,"minHeight":550,"isDark":false,"sizeSlug":"large","align":"full","className":"banner-cover","layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull is-light banner-cover" style="min-height:550px"><img class="wp-block-cover__image-background wp-image-45 size-large" alt="" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/banner.png" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#9e9c9a"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"constrained","contentSize":"75%"}} -->
<div class="wp-block-group"><!-- wp:columns {"className":"banner-col","style":{"spacing":{"padding":{"right":"var:preset|spacing|60","left":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns banner-col" style="padding-right:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:column {"width":"40%","className":"banner-left"} -->
<div class="wp-block-column banner-left" style="flex-basis:40%"><!-- wp:site-title {"style":{"elements":{"link":{"color":{"text":"var:preset|color|secaccent"}}},"typography":{"fontSize":"32px","fontStyle":"normal","fontWeight":"600"}},"textColor":"secaccent","fontFamily":"playfair-display"} /-->

<!-- wp:heading {"className":"banner-heading","style":{"typography":{"fontSize":"38px","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary","fontFamily":"playfair-display"} -->
<h2 class="wp-block-heading banner-heading has-secondary-color has-text-color has-link-color has-playfair-display-font-family" style="font-size:38px;font-style:normal;font-weight:600"><?php echo esc_html__('Sleep Better Every', 'mattress-shop'); ?><br><?php echo esc_html__('Night', 'mattress-shop'); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"banner-para","style":{"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"400"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}},"textColor":"primary","fontFamily":"inter"} -->
<p class="banner-para has-primary-color has-text-color has-link-color has-inter-font-family" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-size:18px;font-style:normal;font-weight:400"><?php echo esc_html__('Discover the perfect mattress for deep, uninterrupted rest.', 'mattress-shop'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"banner-btn-section","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":{"top":"0","left":"0"}}}} -->
<div class="wp-block-buttons banner-btn-section" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:button {"backgroundColor":"secaccent","textColor":"background","className":"banner-btn","style":{"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"border":{"radius":"30px"},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"fontFamily":"inter"} -->
<div class="wp-block-button banner-btn"><a class="wp-block-button__link has-background-color has-secaccent-background-color has-text-color has-background has-link-color has-inter-font-family has-custom-font-size wp-element-button" style="border-radius:30px;padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);font-size:14px;font-style:normal;font-weight:600"><?php echo esc_html__('Shop Now', 'mattress-shop'); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"backgroundColor":"secaccent","textColor":"background","className":"banner-btn-icon","style":{"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"border":{"radius":"100px"},"spacing":{"padding":{"left":"var:preset|spacing|30","right":"var:preset|spacing|30","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"fontFamily":"inter"} -->
<div class="wp-block-button banner-btn-icon"><a class="wp-block-button__link has-background-color has-secaccent-background-color has-text-color has-background has-link-color has-inter-font-family has-custom-font-size wp-element-button" style="border-radius:100px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--30);font-size:16px;font-style:normal;font-weight:600"><img class="wp-image-214" style="width: 27px;" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/Vector.png" alt=""></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"60%","className":"banner-right"} -->
<div class="wp-block-column banner-right" style="flex-basis:60%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
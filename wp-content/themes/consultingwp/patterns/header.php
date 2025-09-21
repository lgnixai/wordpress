<?php
/**
 * Title: Header
 * Slug: consultingwp/header
 * Categories: header, consultingwp
 * Keywords: header
 * Block Types: core/template-part/header
 */
?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"20px","bottom":"20px","left":"20px","right":"20px"}}},"backgroundColor":"secondary","className":"animated fadeIn","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide animated fadeIn has-secondary-background-color has-background" id="sticky-header" style="padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:columns {"className":"with-100-mobile"} -->
<div class="wp-block-columns with-100-mobile"><!-- wp:column {"width":"70%"} -->
<div class="wp-block-column" style="flex-basis:70%"><!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"},"layout":{"selfStretch":"fit","flexSize":null}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"0px"}}} -->
<div class="wp-block-group"><!-- wp:site-title {"level":0,"style":{"spacing":{"margin":{"right":"var:preset|spacing|20"}},"typography":{"fontStyle":"normal","fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|heading-text-color"}}}},"textColor":"heading-text-color","fontSize":"large"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:navigation {"textColor":"heading-text-color","icon":"menu","overlayBackgroundColor":"primary","style":{"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"400"}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"30%"} -->
<div class="wp-block-column" style="flex-basis:30%"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
<div class="wp-block-group"><!-- wp:social-links {"iconColor":"primary","iconColorValue":"#008170","iconBackgroundColorValue":"#fff","style":{"spacing":{"margin":{"right":"var:preset|spacing|10","left":"var:preset|spacing|10","top":"0","bottom":"0"},"blockGap":{"top":"0","left":"8px"}}},"className":"is-style-default","layout":{"type":"flex","orientation":"horizontal","justifyContent":"right"}} -->
<ul class="wp-block-social-links has-icon-color has-icon-background-color is-style-default" style="margin-top:0;margin-right:var(--wp--preset--spacing--10);margin-bottom:0;margin-left:var(--wp--preset--spacing--10)"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"linkedin"} /--></ul>
<!-- /wp:social-links -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
<div class="wp-block-buttons"><!-- wp:button {"textColor":"heading-text-color","style":{"border":{"width":"0px","style":"none"},"spacing":{"padding":{"left":"10px","right":"10px","top":"10px","bottom":"10px"}},"elements":{"link":{"color":{"text":"var:preset|color|heading-text-color"}}}},"fontSize":"small"} -->
<div class="wp-block-button has-custom-font-size has-small-font-size"><a class="wp-block-button__link has-heading-text-color-color has-text-color has-link-color wp-element-button" style="border-style:none;border-width:0px;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px"><?php echo esc_html__( 'Schadule a call', 'consultingwp' ); ?> </a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
<?php
 /**
  * Title: Sidebar
  * Slug: clickgrove/sidebar
  */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"20px","bottom":"20px","left":"20px","right":"20px"}},"border":{"radius":"10px"}},"backgroundColor":"accent-5","layout":{"type":"default"}} -->
<div class="wp-block-group has-accent-5-background-color has-background" style="border-radius:10px;padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search","buttonText":"Search","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"border":{"width":"0px","style":"none"}},"textColor":"base"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"left":"20px","right":"20px","top":"20px","bottom":"20px"}},"border":{"radius":"10px"}},"backgroundColor":"accent-5","layout":{"type":"default"}} -->
<div class="wp-block-group has-accent-5-background-color has-background" style="border-radius:10px;padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"},"spacing":{"margin":{"top":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|heading-text-color"}}}},"textColor":"heading-text-color"} -->
<h4 class="wp-block-heading has-heading-text-color-color has-text-color has-link-color" style="margin-top:0;font-style:normal;font-weight:700"><?php echo esc_html__( 'Latest Posts', 'clickgrove' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:latest-posts {"excerptLength":11,"displayFeaturedImage":true,"featuredImageAlign":"left","featuredImageSizeWidth":75,"featuredImageSizeHeight":75,"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"left":"20px","right":"20px","top":"20px","bottom":"20px"}},"border":{"radius":"10px"}},"backgroundColor":"accent-5","layout":{"type":"default"}} -->
<div class="wp-block-group has-accent-5-background-color has-background" style="border-radius:10px;padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|heading-text-color"}}}},"textColor":"heading-text-color"} -->
<h4 class="wp-block-heading has-heading-text-color-color has-text-color has-link-color" style="font-style:normal;font-weight:700"><?php echo esc_html__( 'Categories', 'clickgrove' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:categories /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"left":"20px","right":"20px","top":"20px","bottom":"20px"}},"border":{"radius":"10px"}},"backgroundColor":"accent-5","layout":{"type":"default"}} -->
<div class="wp-block-group has-accent-5-background-color has-background" style="border-radius:10px;padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|heading-text-color"}}}},"textColor":"heading-text-color"} -->
<h4 class="wp-block-heading has-heading-text-color-color has-text-color has-link-color" style="font-style:normal;font-weight:700"><?php echo esc_html__( 'Tags', 'clickgrove' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:tag-cloud /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<?php
/**
 * Title: News Section
 * Slug: mattress-shop/news-section
 * Categories: template
 */
?>
<!-- wp:group {"className":"news-section","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"constrained","contentSize":"75%"}} -->
<div class="wp-block-group news-section" style="margin-top:0px;margin-bottom:0px"><!-- wp:group {"className":"news-head-box wow fadeInDown","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group news-head-box wow fadeInDown" style="margin-bottom:var(--wp--preset--spacing--80)"><!-- wp:paragraph {"align":"center","className":"news-small-title","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"typography":{"fontStyle":"normal","fontWeight":"600","textTransform":"capitalize","fontSize":"17px"},"spacing":{"padding":{"top":"0px","right":"0","bottom":"0px","left":"0"},"margin":{"bottom":"0px"}},"border":{"radius":"4px"}},"textColor":"secondary"} -->
<p class="has-text-align-center news-small-title has-secondary-color has-text-color has-link-color" style="border-radius:4px;margin-bottom:0px;padding-top:0px;padding-right:0;padding-bottom:0px;padding-left:0;font-size:17px;font-style:normal;font-weight:600;text-transform:capitalize"><?php echo esc_html__('news & blogs', 'mattress-shop'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":3,"className":"news-sec-heading","style":{"typography":{"textTransform":"capitalize","fontSize":"30px","fontStyle":"normal","fontWeight":"700","lineHeight":"1.2"},"spacing":{"margin":{"top":"0px","bottom":"0rem"}},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontFamily":"playfair-display"} -->
<h3 class="wp-block-heading has-text-align-center news-sec-heading has-primary-color has-text-color has-link-color has-playfair-display-font-family" style="margin-top:0px;margin-bottom:0rem;font-size:30px;font-style:normal;font-weight:700;line-height:1.2;text-transform:capitalize"><?php echo esc_html__('our latest news & blogs', 'mattress-shop'); ?></h3>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","level":3,"className":"news-bg-heading","style":{"typography":{"fontSize":"70px","textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground","fontFamily":"playfair-display"} -->
<h3 class="wp-block-heading has-text-align-center news-bg-heading has-foreground-color has-text-color has-link-color has-playfair-display-font-family" style="font-size:70px;text-transform:uppercase"><?php echo esc_html__('news & blogs', 'mattress-shop'); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":11,"query":{"perPage":6,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[],"format":[]},"metadata":{"categories":["posts"],"patternName":"core/query-standard-posts","name":"Standard"},"className":"swiper2 mySwiper2 wow zoomIn"} -->
<div class="wp-block-query swiper2 mySwiper2 wow zoomIn"><!-- wp:post-template {"className":"news-box swiper-wrapper","layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"className":"news-main-box","style":{"spacing":{"padding":{"top":"12px","bottom":"12px","left":"12px","right":"12px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group news-main-box" style="padding-top:12px;padding-right:12px;padding-bottom:12px;padding-left:12px"><!-- wp:group {"className":"news-img","style":{"dimensions":{"minHeight":"230px"},"border":{"radius":"10px"},"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}},"color":{"background":"#00000069"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group news-img has-background" style="border-radius:10px;background-color:#00000069;min-height:230px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:post-featured-image {"isLink":true,"height":"230px","align":"wide","style":{"color":[],"border":{"radius":"0px"}}} /--></div>
<!-- /wp:group -->

<!-- wp:post-date {"format":"M j","className":"news-date","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"spacing":{"margin":{"top":"0px","bottom":"0px"},"padding":{"top":"2px","bottom":"2px","left":"10px","right":"10px"}},"typography":{"fontSize":"18px"}},"backgroundColor":"secondary","textColor":"background"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"news-meta-box","style":{"spacing":{"padding":{"right":"12px","left":"12px"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group news-meta-box" style="padding-right:12px;padding-left:12px"><!-- wp:post-author-name {"className":"news-author","style":{"typography":{"fontSize":"16px","textTransform":"capitalize"},"spacing":{"padding":{"left":"var:preset|spacing|50"}}}} /-->

<!-- wp:comments {"className":"news-comment"} -->
<div class="wp-block-comments news-comment"><!-- wp:comments-title {"showPostTitle":false,"style":{"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"400"},"spacing":{"margin":{"top":"0px","bottom":"0px"},"padding":{"left":"var:preset|spacing|50"}}}} /--></div>
<!-- /wp:comments --></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":5,"isLink":true,"className":"news-title","style":{"spacing":{"margin":{"bottom":"5px","top":"5px"},"padding":{"top":"0px","bottom":"0px","left":"12px","right":"12px"}},"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"600","textTransform":"capitalize"},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground"} /-->

<!-- wp:post-excerpt {"moreText":"","excerptLength":15,"className":"news-desc","style":{"typography":{"fontSize":"15px","lineHeight":1.4},"spacing":{"margin":{"top":"0px","bottom":"5px"},"padding":{"top":"0px","bottom":"12px","left":"12px","right":"12px"}},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground"} /-->
<!-- /wp:post-template -->

<!-- wp:buttons {"className":"news-swiper-pagination","layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons news-swiper-pagination"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
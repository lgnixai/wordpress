<?php
/**
 * Title:Latest News
 * Slug: consultingwp/news
 * Categories: consultingwp
 * Keywords: blog
 */
?>
<!-- wp:group {"tagName":"main","style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}},"color":{"gradient":"linear-gradient(180deg,rgb(1,21,20) 0%,rgb(13,5,5) 57%,rgb(16,42,45) 100%)"}},"className":"animated fadeInUp news-section","layout":{"type":"constrained"}} -->
<main class="wp-block-group animated fadeInUp news-section has-background" style="background:linear-gradient(180deg,rgb(1,21,20) 0%,rgb(13,5,5) 57%,rgb(16,42,45) 100%);margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|30"},"padding":{"right":"25px","left":"25px"}}},"layout":{"type":"constrained","contentSize":"720px"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--30);padding-right:25px;padding-left:25px"><!-- wp:paragraph {"align":"center","className":"consultingwp-sub-title"} -->
<p class="has-text-align-center consultingwp-sub-title"><strong><?php echo esc_html__( 'News', 'consultingwp' ); ?> &amp; <?php echo esc_html__( 'Articles', 'consultingwp' ); ?></strong></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"32px"},"elements":{"link":{"color":{"text":"var:preset|color|heading-text-color"}}}},"textColor":"heading-text-color","fontFamily":"body"} -->
<h2 class="wp-block-heading has-text-align-center has-heading-text-color-color has-text-color has-link-color has-body-font-family" style="font-size:32px;font-style:normal;font-weight:600"><?php echo esc_html__( 'Latest News And Articles', 'consultingwp' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"16px"}}} -->
<p class="has-text-align-center" style="font-size:16px"><?php echo esc_html__( 'Cras non dolor. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur suscipit suscipit tellus. Phasellus tempus. Aenean imperdiet.', 'consultingwp' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"right":"17px","left":"17px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-right:17px;padding-left:17px"><!-- wp:query {"queryId":23,"query":{"perPage":"4","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"grid","columnCount":4}} -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"15px","bottom":"15px","left":"15px","right":"15px"}},"color":{"gradient":"radial-gradient(rgb(0,0,0) 0%,rgb(36,39,46) 100%)"},"border":{"radius":"8px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background" style="border-radius:8px;background:radial-gradient(rgb(0,0,0) 0%,rgb(36,39,46) 100%);padding-top:15px;padding-right:15px;padding-bottom:15px;padding-left:15px"><!-- wp:post-featured-image {"isLink":true,"style":{"border":{"radius":"0px"}}} /-->

<!-- wp:post-date {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-3"}}}},"textColor":"contrast-3"} /-->

<!-- wp:post-title {"isLink":true,"style":{"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"500","lineHeight":"1.5"}},"textColor":"heading-text-color"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->
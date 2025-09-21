<?php
 /**
  * Title: Archive
  * Slug: clickgrove/archive
  * Inserter: no
  */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_stylesheet_directory_uri() );?>/assets/images/cover.jpg","id":12946,"dimRatio":80,"minHeight":300,"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover" style="margin-top:0;margin-bottom:0;min-height:300px"><img class="wp-block-cover__image-background wp-image-12946" alt="" src="<?php echo esc_url( get_stylesheet_directory_uri() );?>/assets/images/cover.jpg" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-80 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:query-title {"type":"archive","textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"xx-large"} /--></div></div>
<!-- /wp:cover -->

<!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"backgroundColor":"base-2","layout":{"type":"constrained"}} -->
<main class="wp-block-group has-base-2-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:query {"queryId":20,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":{"category":[9]}},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"typography":{"lineHeight":"1.5"}},"layout":{"type":"default"}} -->
<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"20px","right":"20px"},"margin":{"top":"0","bottom":"var:preset|spacing|30"},"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"}},"border":{"radius":"25px"}},"backgroundColor":"accent-5"} -->
<div class="wp-block-columns are-vertically-aligned-center has-accent-5-background-color has-background" style="border-radius:25px;margin-top:0;margin-bottom:var(--wp--preset--spacing--30);padding-top:var(--wp--preset--spacing--30);padding-right:20px;padding-bottom:var(--wp--preset--spacing--30);padding-left:20px"><!-- wp:column {"verticalAlignment":"center","width":""} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:post-date {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast"} /-->

<!-- wp:post-author-name {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast"} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1.5"}},"fontSize":"medium"} /-->

<!-- wp:post-excerpt {"moreText":"Read More","excerptLength":40,"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}},"typography":{"lineHeight":"1.6","fontSize":"16px"}},"textColor":"contrast"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"250px"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:250px"><!-- wp:post-featured-image {"isLink":true,"width":"250px","height":"250px","align":"right","style":{"border":{"radius":"8px"}}} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:template-part {"slug":"sidebar","area":"uncategorized"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->
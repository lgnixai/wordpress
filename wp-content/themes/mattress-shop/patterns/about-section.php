<?php
/**
 * Title: About Section
 * Slug: mattress-shop/about-section
 * Categories: template
 */
?>
<!-- wp:group {"className":"about-section wow zoomIn","style":{"spacing":{"margin":{"top":"var:preset|spacing|80"}}},"layout":{"type":"constrained","contentSize":"75%"}} -->
<div class="wp-block-group about-section wow zoomIn" style="margin-top:var(--wp--preset--spacing--80)"><!-- wp:columns {"className":"about-inner-boxes"} -->
<div class="wp-block-columns about-inner-boxes"><!-- wp:column {"width":"30%","className":"about-left-box"} -->
<div class="wp-block-column about-left-box" style="flex-basis:30%"><!-- wp:paragraph {"className":"about-desc","style":{"typography":{"fontSize":"15px"},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground"} -->
<p class="about-desc has-foreground-color has-text-color has-link-color" style="font-size:15px"><?php echo esc_html__('Lorem Ipsum & is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'mattress-shop'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"about-btn"} -->
<div class="wp-block-buttons about-btn"><!-- wp:button {"backgroundColor":"secaccent","textColor":"background","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"spacing":{"padding":{"left":"25px","right":"25px","top":"5px","bottom":"5px"}},"typography":{"textTransform":"capitalize","fontSize":"15px","fontStyle":"normal","fontWeight":"400"},"border":{"radius":"0px","width":"0px","style":"none"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-background-color has-secaccent-background-color has-text-color has-background has-link-color has-custom-font-size wp-element-button" style="border-style:none;border-width:0px;border-radius:0px;padding-top:5px;padding-right:25px;padding-bottom:5px;padding-left:25px;font-size:15px;font-style:normal;font-weight:400;text-transform:capitalize"><?php echo esc_html__('explore more', 'mattress-shop'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"stretch","width":"30%","className":"about-mid-box"} -->
<div class="wp-block-column is-vertically-aligned-stretch about-mid-box" style="flex-basis:30%"><!-- wp:columns {"className":"about-mid-outer-box"} -->
<div class="wp-block-columns about-mid-outer-box"><!-- wp:column {"className":"about-inner-box1","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|20","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"backgroundColor":"secondary"} -->
<div class="wp-block-column about-inner-box1 has-secondary-background-color has-background" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--50)"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"fontSize":"35px","fontStyle":"normal","fontWeight":"600","lineHeight":"1.2"},"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}},"textColor":"background"} -->
<p class="has-background-color has-text-color has-link-color" style="margin-bottom:var(--wp--preset--spacing--30);font-size:35px;font-style:normal;font-weight:600;line-height:1.2"><?php echo esc_html__('36+', 'mattress-shop'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"500","lineHeight":"1.3","textTransform":"capitalize"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"background"} -->
<p class="has-background-color has-text-color has-link-color" style="margin-top:0px;margin-bottom:0px;font-size:16px;font-style:normal;font-weight:500;line-height:1.3;text-transform:capitalize"><?php echo esc_html__('year of experence', 'mattress-shop'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"about-inner-box2","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|20","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"backgroundColor":"primary"} -->
<div class="wp-block-column about-inner-box2 has-primary-background-color has-background" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--50)"><!-- wp:image {"id":271,"width":"auto","height":"50px","sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}}} -->
<figure class="wp-block-image size-full is-resized" style="margin-bottom:var(--wp--preset--spacing--30)"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/professional-img.png" alt="" class="wp-image-271" style="width:auto;height:50px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"500","lineHeight":"1.3","textTransform":"capitalize"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"background"} -->
<p class="has-background-color has-text-color has-link-color" style="margin-top:0px;margin-bottom:0px;font-size:16px;font-style:normal;font-weight:500;line-height:1.3;text-transform:capitalize"><?php echo esc_html__('professional team', 'mattress-shop'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:cover {"url":"<?php echo esc_url(get_template_directory_uri()); ?>/images/about-img.png","id":275,"dimRatio":0,"isUserOverlayColor":true,"minHeight":280,"isDark":false,"sizeSlug":"full","className":"about-mid-btm-img","style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"},"margin":{"top":"10px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover is-light about-mid-btm-img" style="margin-top:10px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;min-height:280px"><img class="wp-block-cover__image-background wp-image-275 size-full" alt="" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/about-img.png" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"40%","className":"about-right-box"} -->
<div class="wp-block-column about-right-box" style="flex-basis:40%"><!-- wp:paragraph {"align":"left","className":"about-small-title","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"typography":{"fontStyle":"normal","fontWeight":"600","textTransform":"capitalize","fontSize":"17px"},"spacing":{"padding":{"top":"0px","right":"0","bottom":"0px","left":"0"},"margin":{"bottom":"0px"}},"border":{"radius":"4px"}},"textColor":"secondary"} -->
<p class="has-text-align-left about-small-title has-secondary-color has-text-color has-link-color" style="border-radius:4px;margin-bottom:0px;padding-top:0px;padding-right:0;padding-bottom:0px;padding-left:0;font-size:17px;font-style:normal;font-weight:600;text-transform:capitalize"><?php echo esc_html__('about us', 'mattress-shop'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"left","level":3,"className":"about-sec-heading","style":{"typography":{"textTransform":"capitalize","fontSize":"32px","fontStyle":"normal","fontWeight":"700","lineHeight":"1.3"},"spacing":{"margin":{"top":"0px","bottom":"0rem"}},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontFamily":"playfair-display"} -->
<h3 class="wp-block-heading has-text-align-left about-sec-heading has-primary-color has-text-color has-link-color has-playfair-display-font-family" style="margin-top:0px;margin-bottom:0rem;font-size:32px;font-style:normal;font-weight:700;line-height:1.3;text-transform:capitalize"><?php echo esc_html__('Advanced Comfort Solutions for Restful Living', 'mattress-shop'); ?></h3>
<!-- /wp:heading -->

<!-- wp:cover {"url":"<?php echo esc_url(get_template_directory_uri()); ?>/images/video-img.png","id":9,"dimRatio":0,"isUserOverlayColor":true,"minHeight":260,"sizeSlug":"full","className":"about-video","layout":{"type":"constrained"}} -->
<div class="wp-block-cover about-video" style="min-height:260px"><img class="wp-block-cover__image-background wp-image-9 size-full" alt="" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/video-img.png" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:wpzoom-video-popup-block/block {"url":"https://www.youtube.com/embed/9xwazD5SyVg","text":"","icon":3} -->
<a class="wp-block-wpzoom-video-popup-block-block wpzoom-video-popup-block" href="https://www.youtube.com/embed/9xwazD5SyVg" data-popup-width="900px"><span class="wpzoom-video-popup-block_icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" aria-hidden="true"><path d="m3.5 0v32l25-16z" fill="currentColor"></path></svg></span></a>
<!-- /wp:wpzoom-video-popup-block/block --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"10px"} -->
<div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
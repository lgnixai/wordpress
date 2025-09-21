<?php
/**
 * Title: Project Section
 * Slug: mattress-shop/project-section
 * Categories: template
 */
$interior_store_pluginsList = get_option( 'active_plugins' );
$interior_store_plugin = 'woocommerce/woocommerce.php';
$interior_store_results = in_array( $interior_store_plugin , $interior_store_pluginsList);
if ( $interior_store_results )  {
?>

<!-- wp:group {"className":"mattress-product-section","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"backgroundColor":"secbackground","layout":{"type":"constrained","contentSize":"75%"}} -->
<div class="wp-block-group mattress-product-section has-secbackground-background-color has-background" style="margin-top:0px;margin-bottom:0px;padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:group {"className":"project-head-box wow fadeInDown","layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group project-head-box wow fadeInDown"><!-- wp:heading {"textAlign":"center","className":"project-bg-heading","style":{"typography":{"fontSize":"25px","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary","fontFamily":"playfair-display"} -->
<h2 class="wp-block-heading has-text-align-center project-bg-heading has-secondary-color has-text-color has-link-color has-playfair-display-font-family" style="font-size:25px;font-style:normal;font-weight:600"><?php echo esc_html__('Explore Our Mattress Range', 'mattress-shop'); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"400"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}},"textColor":"primary","fontFamily":"inter"} -->
<p class="has-text-align-center has-primary-color has-text-color has-link-color has-inter-font-family" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-size:18px;font-style:normal;font-weight:400"><?php echo esc_html__('Handcrafted with premium materials for every type of sleeper.', 'mattress-shop'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:woocommerce/product-collection {"queryId":6,"query":{"perPage":3,"pages":1,"offset":0,"postType":"product","order":"desc","orderBy":"date","search":"","exclude":[],"inherit":false,"taxQuery":[],"isProductCollectionBlock":true,"featured":false,"woocommerceOnSale":false,"woocommerceStockStatus":["instock","outofstock","onbackorder"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[],"timeFrame":{"operator":"in","value":"-7 days"},"filterable":false,"relatedBy":{"categories":true,"tags":true}},"tagName":"div","displayLayout":{"type":"flex","columns":3,"shrinkColumns":true},"dimensions":{"widthType":"fill"},"collection":"woocommerce/product-collection/new-arrivals","hideControls":["inherit","order","filterable"],"queryContextIncludes":["collection"],"__privatePreviewState":{"isPreview":false,"previewMessage":"Actual products will vary depending on the page being viewed."},"className":"products-column","layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-woocommerce-product-collection products-column"><!-- wp:woocommerce/product-template -->
<!-- wp:post-title {"textAlign":"center","isLink":true,"className":"product-title","style":{"spacing":{"margin":{"bottom":"0.75rem","top":"0"}},"typography":{"lineHeight":"1.4","fontStyle":"normal","fontWeight":"500","fontSize":"18px"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontFamily":"inter","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

<!-- wp:woocommerce/product-image {"showSaleBadge":false,"isDescendentOfQueryLoop":true,"width":"","height":"200px","className":"product-img","style":{"border":{"radius":"20px"}}} /-->

<!-- wp:woocommerce/product-description {"className":"product-description","style":{"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"400","lineHeight":"1.4"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"spacing":{"padding":{"bottom":"0"}}},"textColor":"primary","fontFamily":"inter","layout":{"type":"default"}} /-->

<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"center","className":"product-price","textColor":"secaccent","fontFamily":"playfair-display","style":{"typography":{"fontSize":"26px","fontStyle":"normal","fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|secaccent"}}},"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"},"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}}} /-->

<!-- wp:woocommerce/product-summary {"isDescendentOfQueryLoop":true,"showDescriptionIfEmpty":true,"summaryLength":10,"className":"product-summery","textColor":"primary","fontFamily":"inter","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"400"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}}} /-->

<!-- wp:woocommerce/product-button {"width":100,"isDescendentOfQueryLoop":true,"className":"product-btn","backgroundColor":"primary","textColor":"background","fontFamily":"inter","style":{"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"border":{"radius":"5px"},"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}}} /-->
<!-- /wp:woocommerce/product-template --></div>
<!-- /wp:woocommerce/product-collection --></div>
<!-- /wp:group -->

<?php } else { ?>

<!-- wp:group {"className":"mattress-product-section-static","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"backgroundColor":"secbackground","layout":{"type":"constrained","contentSize":"75%"}} -->
<div class="wp-block-group mattress-product-section-static has-secbackground-background-color has-background" style="margin-top:0px;margin-bottom:0px;padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:group {"className":"project-head-box wow fadeInDown","layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group project-head-box wow fadeInDown"><!-- wp:heading {"textAlign":"center","className":"project-bg-heading","style":{"typography":{"fontSize":"22px","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary","fontFamily":"playfair-display"} -->
<h2 class="wp-block-heading has-text-align-center project-bg-heading has-secondary-color has-text-color has-link-color has-playfair-display-font-family" style="font-size:22px;font-style:normal;font-weight:600"><?php echo esc_html__('Explore Our Mattress Range', 'mattress-shop'); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"400"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}},"textColor":"primary","fontFamily":"inter"} -->
<p class="has-text-align-center has-primary-color has-text-color has-link-color has-inter-font-family" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-size:18px;font-style:normal;font-weight:400"><?php echo esc_html__('Handcrafted with premium materials for every type of sleeper.', 'mattress-shop'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:columns {"className":"product-section-column-static"} -->
<div class="wp-block-columns product-section-column-static"><!-- wp:column {"className":"product-col","style":{"spacing":{"padding":{"right":"var:preset|spacing|60","left":"var:preset|spacing|60","top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}},"border":{"radius":"20px"}},"backgroundColor":"background"} -->
<div class="wp-block-column product-col has-background-background-color has-background" style="border-radius:20px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--60)"><!-- wp:heading {"textAlign":"center","level":3,"className":"static-product-name","style":{"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"},"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"textColor":"primary","fontFamily":"inter"} -->
<h3 class="wp-block-heading has-text-align-center static-product-name has-primary-color has-text-color has-link-color has-inter-font-family" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-size:18px;font-style:normal;font-weight:500"><?php echo esc_html__('DreamNest CloudCool', 'mattress-shop'); ?></h3>
<!-- /wp:heading -->

<!-- wp:image {"id":337,"scale":"cover","sizeSlug":"full","linkDestination":"none","className":"static-product-img","style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"0","left":"0","right":"0"}},"border":{"radius":"10px"}}} -->
<figure class="wp-block-image size-full has-custom-border static-product-img" style="margin-top:var(--wp--preset--spacing--40);margin-right:0;margin-bottom:0;margin-left:0"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/product1.png" alt="" class="wp-image-337" style="border-radius:10px;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"static-product-info","style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"0"},"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group static-product-info" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:paragraph {"align":"center","className":"static-product-description","style":{"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"400"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"border":{"bottom":{"color":"var:preset|color|primary","width":"1px"}},"spacing":{"margin":{"bottom":"0"},"padding":{"bottom":"var:preset|spacing|40"}}},"textColor":"primary","fontFamily":"inter"} -->
<p class="has-text-align-center static-product-description has-primary-color has-text-color has-link-color has-inter-font-family" style="border-bottom-color:var(--wp--preset--color--primary);border-bottom-width:1px;margin-bottom:0;padding-bottom:var(--wp--preset--spacing--40);font-size:16px;font-style:normal;font-weight:400"><?php echo esc_html__('Say goodbye to night sweats with CloudCool, designed with next-gen cooling.', 'mattress-shop'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","className":"static-product-price","style":{"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"26px"},"elements":{"link":{"color":{"text":"var:preset|color|secaccent"}}},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}},"textColor":"secaccent","fontFamily":"playfair-display"} -->
<p class="has-text-align-center static-product-price has-secaccent-color has-text-color has-link-color has-playfair-display-font-family" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-size:26px;font-style:normal;font-weight:700"><?php echo esc_html__('$ 479', 'mattress-shop'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","className":"static-product-summery","style":{"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"400"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}},"textColor":"primary","fontFamily":"inter"} -->
<p class="has-text-align-center static-product-summery has-primary-color has-text-color has-link-color has-inter-font-family" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-size:16px;font-style:normal;font-weight:400"><?php echo esc_html__('Ideal for people with back pain or posture-related issues', 'mattress-shop'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"static-product-btn","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"var:preset|spacing|30","bottom":"0"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons static-product-btn" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:button {"backgroundColor":"primary","textColor":"background","width":100,"style":{"typography":{"fontSize":"15px","fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"fontFamily":"inter"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link has-background-color has-primary-background-color has-text-color has-background has-link-color has-inter-font-family has-custom-font-size wp-element-button" style="font-size:15px;font-style:normal;font-weight:500"><?php echo esc_html__('Shop OrthoFlex Now', 'mattress-shop'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"product-col","style":{"spacing":{"padding":{"right":"var:preset|spacing|60","left":"var:preset|spacing|60","top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}},"border":{"radius":"20px"}},"backgroundColor":"background"} -->
<div class="wp-block-column product-col has-background-background-color has-background" style="border-radius:20px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--60)"><!-- wp:heading {"textAlign":"center","level":3,"className":"static-product-name","style":{"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"},"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"textColor":"primary","fontFamily":"inter"} -->
<h3 class="wp-block-heading has-text-align-center static-product-name has-primary-color has-text-color has-link-color has-inter-font-family" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-size:18px;font-style:normal;font-weight:500"><?php echo esc_html__('SleepHaven BreezeRest', 'mattress-shop'); ?></h3>
<!-- /wp:heading -->

<!-- wp:image {"id":408,"scale":"cover","sizeSlug":"full","linkDestination":"none","className":"static-product-img","style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"0","left":"0","right":"0"}},"border":{"radius":"10px"}}} -->
<figure class="wp-block-image size-full has-custom-border static-product-img" style="margin-top:var(--wp--preset--spacing--40);margin-right:0;margin-bottom:0;margin-left:0"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/product2.png" alt="" class="wp-image-408" style="border-radius:10px;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"static-product-info","style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"0"},"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group static-product-info" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:paragraph {"align":"center","className":"static-product-description","style":{"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"400"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"border":{"bottom":{"color":"var:preset|color|primary","width":"1px"}},"spacing":{"margin":{"bottom":"0"},"padding":{"bottom":"var:preset|spacing|40"}}},"textColor":"primary","fontFamily":"inter"} -->
<p class="has-text-align-center static-product-description has-primary-color has-text-color has-link-color has-inter-font-family" style="border-bottom-color:var(--wp--preset--color--primary);border-bottom-width:1px;margin-bottom:0;padding-bottom:var(--wp--preset--spacing--40);font-size:16px;font-style:normal;font-weight:400"><?php echo esc_html__('Say goodbye to night sweats with CloudCool, designed with next-gen cooling.', 'mattress-shop'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","className":"static-product-price","style":{"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"22px"},"elements":{"link":{"color":{"text":"var:preset|color|secaccent"}}},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}},"textColor":"secaccent","fontFamily":"playfair-display"} -->
<p class="has-text-align-center static-product-price has-secaccent-color has-text-color has-link-color has-playfair-display-font-family" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-size:22px;font-style:normal;font-weight:700">$ 579</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","className":"static-product-summery","style":{"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"400"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}},"textColor":"primary","fontFamily":"inter"} -->
<p class="has-text-align-center static-product-summery has-primary-color has-text-color has-link-color has-inter-font-family" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-size:16px;font-style:normal;font-weight:400"><?php echo esc_html__('Ideal for people with back pain or posture-related issues', 'mattress-shop'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"static-product-btn","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"var:preset|spacing|30","bottom":"0"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons static-product-btn" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:button {"backgroundColor":"primary","textColor":"background","width":100,"style":{"typography":{"fontSize":"15px","fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"fontFamily":"inter"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link has-background-color has-primary-background-color has-text-color has-background has-link-color has-inter-font-family has-custom-font-size wp-element-button" style="font-size:15px;font-style:normal;font-weight:500"><?php echo esc_html__('Shop OrthoFlex Now', 'mattress-shop'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"product-col","style":{"spacing":{"padding":{"right":"var:preset|spacing|60","left":"var:preset|spacing|60","top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}},"border":{"radius":"20px"}},"backgroundColor":"background"} -->
<div class="wp-block-column product-col has-background-background-color has-background" style="border-radius:20px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--60)"><!-- wp:heading {"textAlign":"center","level":3,"className":"static-product-name","style":{"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"},"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"textColor":"primary","fontFamily":"inter"} -->
<h3 class="wp-block-heading has-text-align-center static-product-name has-primary-color has-text-color has-link-color has-inter-font-family" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-size:18px;font-style:normal;font-weight:500"><?php echo esc_html__('SlumberLux AirFoam', 'mattress-shop'); ?></h3>
<!-- /wp:heading -->

<!-- wp:image {"id":409,"scale":"cover","sizeSlug":"full","linkDestination":"none","className":"static-product-img","style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"0","left":"0","right":"0"}},"border":{"radius":"10px"}}} -->
<figure class="wp-block-image size-full has-custom-border static-product-img" style="margin-top:var(--wp--preset--spacing--40);margin-right:0;margin-bottom:0;margin-left:0"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/product3.png" alt="" class="wp-image-409" style="border-radius:10px;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"static-product-info","style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"0"},"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group static-product-info" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:paragraph {"align":"center","className":"static-product-description","style":{"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"400"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"border":{"bottom":{"color":"var:preset|color|primary","width":"1px"}},"spacing":{"margin":{"bottom":"0"},"padding":{"bottom":"var:preset|spacing|40"}}},"textColor":"primary","fontFamily":"inter"} -->
<p class="has-text-align-center static-product-description has-primary-color has-text-color has-link-color has-inter-font-family" style="border-bottom-color:var(--wp--preset--color--primary);border-bottom-width:1px;margin-bottom:0;padding-bottom:var(--wp--preset--spacing--40);font-size:16px;font-style:normal;font-weight:400"><?php echo esc_html__('Say goodbye to night sweats with CloudCool, designed with next-gen cooling.', 'mattress-shop'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","className":"static-product-price","style":{"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"22px"},"elements":{"link":{"color":{"text":"var:preset|color|secaccent"}}},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}},"textColor":"secaccent","fontFamily":"playfair-display"} -->
<p class="has-text-align-center static-product-price has-secaccent-color has-text-color has-link-color has-playfair-display-font-family" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-size:22px;font-style:normal;font-weight:700"><?php echo esc_html__('$ 479', 'mattress-shop'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","className":"static-product-summery","style":{"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"400"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}},"textColor":"primary","fontFamily":"inter"} -->
<p class="has-text-align-center static-product-summery has-primary-color has-text-color has-link-color has-inter-font-family" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-size:16px;font-style:normal;font-weight:400"><?php echo esc_html__('Ideal for people with back pain or posture-related issues', 'mattress-shop'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"static-product-btn","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"var:preset|spacing|30","bottom":"0"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons static-product-btn" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:button {"backgroundColor":"primary","textColor":"background","width":100,"style":{"typography":{"fontSize":"15px","fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"fontFamily":"inter"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link has-background-color has-primary-background-color has-text-color has-background has-link-color has-inter-font-family has-custom-font-size wp-element-button" style="font-size:15px;font-style:normal;font-weight:500"><?php echo esc_html__('Shop OrthoFlex Now', 'mattress-shop'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<?php } ?>
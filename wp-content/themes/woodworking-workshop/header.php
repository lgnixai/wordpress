<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="https://gmpg.org/xfn/11">
		<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
			<link rel="pingback" href="<?php echo esc_url(get_bloginfo( 'pingback_url' )); ?>">
		<?php endif; ?>
		<?php wp_head(); ?>
	</head>
<body <?php body_class();?> >
<?php wp_body_open(); ?>
<?php $woodworking_workshop_preloader = get_theme_mod('woodworking_workshop_preloader_setting');
  if($woodworking_workshop_preloader == '1') { ?>
	<div class="loading">
		<div class="loader">
			<?php $woodworking_workshop_preloader_text = get_theme_mod('woodworking_workshop_preloader_text','Loading');
			if (!empty($woodworking_workshop_preloader_text)) { ?> <?php echo esc_html($woodworking_workshop_preloader_text); ?> <?php } ?>
		  <span></span>
		</div>
	</div>
<?php } ?>

	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'woodworking-workshop' ); ?></a>

	<div class="mainhead">
		<?php 
			get_template_part('template-parts/sections/section','header'); 
			
			if ( !is_page_template( 'templates/template-frontpage.php' ) ) {
				woodworking_workshop_breadcrumbs_style();  
			}
		?>
	</div>
	
	<div id="content" class="woodworking-workshop-content">
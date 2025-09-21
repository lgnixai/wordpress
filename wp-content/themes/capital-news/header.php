<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Capital News
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<?php wp_body_open(); ?>
	<div id="page" class="site">

		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'capital-news' ); ?></a>

		<div id="loader" class="loader-4">
			<div class="loader-container">
				<div id="preloader">
				</div>
			</div>
		</div><!-- #loader -->

		<header id="masthead" class="site-header">
				<div class="capital-news-topbar <?php echo esc_attr( get_header_image() ? 'has-header-image' : '' ); ?>" style="background-image: url(<?php echo esc_url( get_header_image() ); ?>);">
					<div class="section-wrapper">
						<div class="topbar-wrapper">
							<!-- site branding -->
								<div class="site-branding">
									<?php if ( has_custom_logo() ) { ?>
										<div class="site-logo" style="max-width: var(--logo-size-custom);">
											<?php the_custom_logo(); ?>
										</div>
									<?php } ?>
									<div class="site-identity">
										<?php
										if ( is_front_page() && is_home() ) :
											?>
										<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
											<?php
										else :
											?>
											<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
											<?php
										endif;
										$capital_news_description = get_bloginfo( 'description', 'display' );
										if ( $capital_news_description || is_customize_preview() ) :
											?>
											<p class="site-description"><?php echo $capital_news_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
										<?php endif; ?>
									</div>	
								</div>	
								<div class="topbar-right">
									<?php if ( has_nav_menu( 'social' ) ) { ?>
										<div class="header-social-icon">
											<div class="header-social-icon-container">
												<?php
												wp_nav_menu(
													array(
														'menu_class'     => 'menu social-links',
														'link_before'    => '<span class="screen-reader-text">',
														'link_after'     => '</span>',
														'theme_location' => 'social',
													)
												);
												?>
											</div>
										</div>
									<?php } ?>
								</div>
							</div>
						</div>
					</div>
				<div class="capital-news-navigation-outer-wrapper" style="min-height: 44px;">
					<div class="capital-news-bottom-header">
						<div class="section-wrapper">
							<div class="capital-news-bottom-header-wrapper">

								<!-- navigation -->
								<div class="navigation">
									
									<!-- navigation -->
									<nav id="site-navigation" class="main-navigation">
										<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
											<span class="ham-icon"></span>
											<span class="ham-icon"></span>
											<span class="ham-icon"></span>
										</button>
										<div class="navigation-area">
											<?php
											if ( has_nav_menu( 'primary' ) ) {
												wp_nav_menu(
													array(
														'theme_location' => 'primary',
														'menu_id' => 'primary-menu',
													)
												);
											}
											?>
										</div>
									</nav><!-- #site-navigation -->
								</div>

								<div class="bottom-header-right-part">
									<div class="capital-news-header-search">
										<div class="header-search-wrap">
											<a href="#" class="search-icon"><i class="fa-solid fa-magnifying-glass" aria-hidden="true"></i></a>
											<div class="header-search-form">
												<?php get_search_form(); ?>
											</div>
										</div>
									</div>
								</div>

							</div>	
						</div>
					</div>
				</div>	
				<!-- end of navigation -->
			</header><!-- #masthead -->

			<?php
			if ( ! is_front_page() || is_home() ) {
				if ( is_front_page() ) {

					require get_template_directory() . '/sections/sections.php';

				}
				?>
				<div class="capital-news-main-wrapper">
					<div class="section-wrapper">
						<div class="capital-news-container-wrapper">
						<?php } ?>

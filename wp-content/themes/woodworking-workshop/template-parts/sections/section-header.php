<div class="container headerbox">
	<div class="<?php if( get_theme_mod( 'woodworking_workshop_sticky_header', '0')) { ?>sticky-header<?php } else { ?>close-sticky<?php } ?>">
		<header class="main-header pt-3 px-md-4 px-2">
			<div class="upper-header-aera">
				<?php    
					$woodworking_workshop_call = get_theme_mod( 'woodworking_workshop_call','+000-2415-145' );
					$woodworking_workshop_call_text = get_theme_mod( 'woodworking_workshop_call_text','CALL US TODAY' );
				?>
				<div class="row m-0">
					<div class="call col-lg-4 col-md-4 align-self-center mb-md-3">
						<?php if( get_theme_mod( 'woodworking_workshop_call' ) != '+000-2415-145' || get_theme_mod( 'woodworking_workshop_call_text' ) != 'CALL US TODAY') { ?>
							<i class="fas fa-phone me-2"></i><span class="simplep text-uppercase me-2"><?php echo esc_html( get_theme_mod('woodworking_workshop_call_text','CALL US TODAY') ); ?></span><span class="infotext"><a class="phn" href="tel:<?php echo esc_url( get_theme_mod('woodworking_workshop_call','+000-2415-145' )); ?>"><?php echo esc_html( get_theme_mod('woodworking_workshop_call','+000-2415-145')); ?></a></span>
						<?php } ?>
					</div>
					<div class="col-lg-4 col-md-4 align-self-center main-logo">
						<div class="logo text-center">
							<?php 
                            if (has_custom_logo()) {
                                the_custom_logo();
                            } else {
                                // Check if both title and tagline settings are disabled
                                $woodworking_workshop_tagline_enabled = get_theme_mod('woodworking_workshop_tagline_setting', false);
                                $woodworking_workshop_title_enabled = get_theme_mod('woodworking_workshop_site_title_setting', false);

                                if (!$woodworking_workshop_tagline_enabled && !$woodworking_workshop_title_enabled) {
                                    // Display the default logo
                                    $woodworking_workshop_default_logo_url = get_template_directory_uri() . '/assets/images/logo.png'; // Replace with your default logo path
                                    echo '<a href="' . esc_url(home_url('/')) . '">';
                                    echo '<img src="' . esc_url($woodworking_workshop_default_logo_url) . '" alt="' . esc_attr(get_bloginfo('name')) . '">';
                                    echo '</a>';
                                }

                                // Display tagline if the setting is enabled
                                if ($woodworking_workshop_tagline_enabled) :
                                    $woodworking_workshop_site_desc = get_bloginfo('description'); ?>
                                    <p class="site-description"><?php echo esc_html($woodworking_workshop_site_desc); ?></p>
                                <?php endif; ?>

                                <?php
                                // Display site title if the setting is enabled
                                if ($woodworking_workshop_title_enabled) : ?>
                                    <p class="site-title">
                                        <a href="<?php echo esc_url(home_url('/')); ?>">
                                            <?php echo esc_html(get_bloginfo('name')); ?>
                                        </a>
                                    </p>
                                <?php endif; ?>
                            <?php } ?>
						</div>
					</div>
					<div class="email text-md-end col-lg-4 col-md-4 align-self-center mb-2 mb-lg-3">
						<?php if( get_theme_mod( 'woodworking_workshop_mail_text' ) != 'EMAIL' || get_theme_mod( 'woodworking_workshop_mail' ) != 'carpenter@example.com') { ?>
							<span class="infotext"><a class="mail" href="mailto:<?php echo esc_attr( get_theme_mod('woodworking_workshop_mail','carpenter@example.com') ); ?>"><?php echo esc_html( get_theme_mod('woodworking_workshop_mail','carpenter@example.com') ); ?></a></span><span class="simplep text-uppercase ms-2"><?php echo esc_html( get_theme_mod('woodworking_workshop_mail_text','EMAIL')); ?></span><i class="fas fa-envelope-open ms-2"></i>
						<?php } ?>
					</div>
				</div>
			</div>
			<div class="middle-header-aera">
				<div class="row">
					<div class="col-lg-10 col-md-6 col-6 align-self-center">
						<div class="navbar-menubar responsive-menu navigation_header">
                            <div class="toggle-nav mobile-menu">
                                <button onclick="woodworking_workshop_openNav()">
                                    <i class="fa fa-bars"></i> <!-- Initial hamburger icon -->
                                </button>
                            </div>
                            <div id="mySidenav" class="nav sidenav">
                                <nav id="site-navigation" class="main-navigation navbar navbar-expand-xl" aria-label="<?php esc_attr_e( 'Top Menu', 'woodworking-workshop' ); ?>">

                                    <?php 
                                        wp_nav_menu(
                                            array(
                                                'theme_location' => 'primary',
                                                'container_class' => 'main-menu clearfix',
                                                'menu_class' => 'clearfix menu',
                                                'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
                                                'fallback_cb' => 'wp_page_menu',
                                            )
                                        );
                                    ?>
                                    <a href="javascript:void(0)" class="closebtn mobile-menu" onclick="woodworking_workshop_closeNav()">
                                        <i class="fa fa-times"></i> <!-- Close icon for the menu -->
                                    </a>
                                </nav>
                            </div>
                        </div>
					</div>
					<div class="col-lg-2 col-md-6 col-6 text-lg-end text-center align-self-center">
						<span class="search-bar text-center me-3">
						<button type="button" class="open-search"><i class="fas fa-search"></i></button>
					</span>
					</div>
					<div class="search-outer">
						<div class="inner_searchbox w-100 h-100">
							<?php get_search_form(); ?>
						</div>
						<button type="button" class="search-close"><?php esc_html_e('CLOSE', 'woodworking-workshop'); ?></button>
					</div>
				</div>
			</div>
		</header>
	</div>
</div>
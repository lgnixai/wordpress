</div>
<?php
    $expert_carpenter_shop_footer_bg_color = get_theme_mod('woodworking_workshop_footer_bg_color');
    $expert_carpenter_shop_footer_bg_image = get_theme_mod('woodworking_workshop_footer_bg_image');
    $expert_carpenter_shop_footer_opacity = get_theme_mod('woodworking_workshop_footer_bg_image_opacity', 50);
    $expert_carpenter_shop_opacity_decimal = $expert_carpenter_shop_footer_opacity / 100;

    // Compose inline styles for footer background
    $expert_carpenter_shop_footer_styles = 'background-color: ' . esc_attr($expert_carpenter_shop_footer_bg_color) . ';';
    if ($expert_carpenter_shop_footer_bg_image) {
        $expert_carpenter_shop_footer_styles .= ' background-image: linear-gradient(rgba(0,0,0,' . (1 - $expert_carpenter_shop_opacity_decimal) . '), rgba(0,0,0,' . (1 - $expert_carpenter_shop_opacity_decimal) . ')), url(' . esc_url($expert_carpenter_shop_footer_bg_image) . ');';
    }
?>
<footer class="footer-area" style="<?php echo esc_attr($expert_carpenter_shop_footer_styles); ?>">  
	<div class="container"> 
		<?php 
		$expert_carpenter_shop_footer_widgets_setting = get_theme_mod('woodworking_workshop_footer_widgets_setting', '1');

		do_action('expert_carpenter_shop_footer_above'); 
		
		if ($expert_carpenter_shop_footer_widgets_setting != '') { 
			if (is_active_sidebar('woodworking-workshop-footer-widget-area')) { ?>
				<div class="row footer-row"> 
					<?php dynamic_sidebar('woodworking-workshop-footer-widget-area'); ?>
				</div>  
			<?php 
			} else { ?>
				<div class="row footer-row">
					<div class="footer-widget col-lg-3 col-sm-6 wow fadeIn" data-wow-delay="0.2s">
						<aside id="search-3" class="widget widget_search default_footer_search">
							<h2 class="widget-title w-title"><?php esc_html_e('Search', 'expert-carpenter-shop'); ?></h2>
							<?php get_search_form(); ?>
						</aside>
					</div>
					<div class="footer-widget col-lg-3 col-sm-6 wow fadeIn" data-wow-delay="0.2s">
						<aside id="archives-2" class="widget widget_archive">
							<h2 class="widget-title w-title"><?php esc_html_e('Recent Posts', 'expert-carpenter-shop'); ?></h2>
							<ul>
								<?php
								wp_get_archives(array(
									'type' => 'postbypost',
									'format' => 'html',
								));
								?>
							</ul>
						</aside>
					</div>
					<div class="footer-widget col-lg-3 col-sm-6 wow fadeIn" data-wow-delay="0.2s">
						<aside id="pages-2" class="widget widget_pages">
							<h2 class="widget-title w-title"><?php esc_html_e('Pages', 'expert-carpenter-shop'); ?></h2>
							<ul>
								<?php
								wp_list_pages(array(
									'title_li' => '',
								));
								?>
							</ul>
						</aside>
					</div>
					<div class="footer-widget col-lg-3 col-sm-6 wow fadeIn" data-wow-delay="0.2s">
						<aside id="categories-2" class="widget widget_categories">
							<h2 class="widget-title w-title"><?php esc_html_e('Categories', 'expert-carpenter-shop'); ?></h2>
							<ul>
								<?php
								wp_list_categories(array(
									'title_li' => '',
								));
								?>
							</ul>
						</aside>
					</div>
				</div>
			<?php } 
		} ?>
	</div>

	<?php 
		$woodworking_workshop_footer_copyright = get_theme_mod('woodworking_workshop_footer_copyright','');
	?>
	<?php $woodworking_workshop_footer_copyright_setting = get_theme_mod('woodworking_workshop_footer_copyright_setting','1');
	 if( $woodworking_workshop_footer_copyright_setting != ''){?>
		<div class="copy-right"> 
			<div class="container">
				<p class="copyright-text">	
					<?php
						echo esc_html( apply_filters('expert_carpenter_shop_footer_copyright',($woodworking_workshop_footer_copyright)));
				    ?>
					<?php if ( empty($woodworking_workshop_footer_copyright) ) { ?>
					    <?php
					        echo esc_html__( 'Copyright &copy; 2025,', 'expert-carpenter-shop' );
					    ?>
					    <a href="https://www.seothemesexpert.com/products/free-woodworking-wordpress-theme" target="blank">
					        <?php
					            echo esc_html__( 'Expert Carpenter Shop', 'expert-carpenter-shop' );
					        ?>
					    </a>
					    <span> | </span>
					    <a href="https://wordpress.org/" target="_blank">
					        <?php
					            echo esc_html__( 'WordPress Theme', 'expert-carpenter-shop' );
					        ?>
					    </a>
					<?php } ?>
				</p>
			</div>
		</div>
	<?php } ?>
	<?php $woodworking_workshop_scroll_top = get_theme_mod('woodworking_workshop_scroll_top_setting','1');
      if($woodworking_workshop_scroll_top == '1') { ?>
		<a id="scrolltop"><span><?php esc_html_e('TOP','expert-carpenter-shop'); ?><span></a>
	<?php } ?>
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>
<?php
$featured_query = new WP_Query( $featured_news_args );
if ( $featured_query->have_posts() ) {

	$featured_title      = get_theme_mod( 'capital_news_featured_news_title', __( 'Featured News', 'capital-news' ) );
	$featured_button     = get_theme_mod( 'capital_news_featured_news_button_label', __( 'View All', 'capital-news' ) );
	$featured_button_url = get_theme_mod( 'capital_news_featured_news_button_link', '#' );
	$advertisement_image = get_theme_mod( 'capital_news_banner_advertisement_image' );
	$advertisement_url   = get_theme_mod( 'capital_news_banner_advertisement_image_url', '#' );
	$banner_style        = get_theme_mod( 'capital_news_banner_section_style', 'banner-style-2' );
	?>
	<div class="featured-posts">
		<?php if ( ! empty( $featured_title || $featured_button ) ) { ?>
			<div class="title-heading">
				<?php if ( ! empty( $featured_title ) ) : ?>
					<h3 class="section-title"><?php echo esc_html( $featured_title ); ?></h3>
				<?php endif; ?>
				<?php if ( ! empty( $featured_button ) ) { ?>
					<a href="<?php echo esc_url( $featured_button_url ); ?>" class="view-all"><?php echo esc_html( $featured_button ); ?></a>
				<?php } ?>
			</div>
		<?php } ?>
		<div class="featured-posts-wrap">
			<?php
			$i = 1;
			while ( $featured_query->have_posts() ) :
				$featured_query->the_post();
				$class = $i === 1 ? 'grid-layout' : 'list-layout';
				?>
				<div class="blog-post-container <?php echo esc_attr( $class ); ?>">
					<div class="blog-post-inner">
						<div class="blog-post-image">
							<?php if ( has_post_thumbnail() ) { ?>
								<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'post-thumbnail' ); ?></a>
							<?php } ?>
							<?php capital_news_categories_list(); ?>
						</div>
						<div class="blog-post-detail">
							<h2 class="entry-title">
								<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							</h2>
							<div class="post-meta">
								<?php
								capital_news_posted_by();
								capital_news_posted_on();
								?>
							</div>
						</div>
					</div>
				</div>
				<?php
				$i++;
			endwhile;
			wp_reset_postdata();
			?>
		</div>
	</div>
	<?php
}

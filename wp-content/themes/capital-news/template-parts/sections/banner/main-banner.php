<?php
$main_news_query = new WP_Query( $main_news_args );
if ( $main_news_query->have_posts() ) {
	?>
	<div class="banner-main-part">
		<div class="banner-main-wrap banner-slider slick-button">
			<?php
			$i = 1;
			while ( $main_news_query->have_posts() ) :
				$main_news_query->the_post();
				?>
				<div class="blog-post-container tile-layout">
					<div class="blog-post-inner">
						<?php if ( has_post_thumbnail() ) { ?>
							<div class="blog-post-image">
								<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'full' ); ?></a>
								<?php if ( $i !== 1 ) : ?>
									<?php capital_news_categories_list(); ?>
								<?php endif; ?>
							</div>
						<?php } ?>
						<div class="blog-post-detail">
							<?php capital_news_categories_list(); ?>
							<h2 class="entry-title">
								<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							</h2>
							<div class="post-meta">
								<?php
								capital_news_posted_by();
								capital_news_posted_on();
								?>
							</div>
							<?php if ( $i === 1 ) { ?>
								<p class="post-excerpt">
									<?php echo wp_kses_post( wp_trim_words( get_the_content(), 25 ) ); ?>
								</p>
							<?php } ?>
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

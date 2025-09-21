<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Capital News
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="main-container-wrap">
		<div class="blog-post-container list-layout">
			<div class="blog-post-inner">
				<?php if ( has_post_thumbnail() ) { ?>
					<div class="blog-post-image">
						<?php capital_news_post_thumbnail(); ?>
					</div>
				<?php } ?>
				<div class="blog-post-detail">
					<?php capital_news_categories_list(); ?>
					<?php
					if ( is_singular() ) :
						the_title( '<h1 class="post-main-title">', '</h1>' );
					else :
						the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
					endif;
					?>
					<div class="post-excerpt">
						<?php the_excerpt(); ?>
					</div>
					<div class="post-meta">
						<?php
						capital_news_posted_by();
						capital_news_posted_on();
						?>
					</div>
				</div>
			</div>
		</div>	
	</div>
</article><!-- #post-<?php the_ID(); ?> -->

<?php get_header(); ?>
<section class="container mx-auto px-4 py-12">
    <?php if (have_posts()) : ?>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php while (have_posts()) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class('border border-[hsl(var(--border))] rounded-lg overflow-hidden bg-[hsl(var(--card))]'); ?>>
                    <a href="<?php the_permalink(); ?>" class="block">
                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('large', ['class' => 'w-full h-56 object-cover']); ?>
                        <?php endif; ?>
                        <div class="p-5">
                            <h2 class="text-lg font-semibold mb-2 hover:text-[hsl(var(--primary))]"><?php the_title(); ?></h2>
                            <p class="text-sm text-[hsl(var(--muted-foreground))] line-clamp-3"><?php echo wp_kses_post(get_the_excerpt()); ?></p>
                        </div>
                    </a>
                </article>
            <?php endwhile; ?>
        </div>
        <div class="mt-10">
            <?php the_posts_pagination(); ?>
        </div>
    <?php else : ?>
        <p><?php esc_html_e('No content found.', 'shadcn-export'); ?></p>
    <?php endif; ?>
</section>
<?php get_footer(); ?>

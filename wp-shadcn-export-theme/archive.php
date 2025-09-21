<?php get_header(); ?>
<section class="container mx-auto px-4 py-12">
  <header class="mb-8">
    <h1 class="text-3xl font-semibold"><?php the_archive_title(); ?></h1>
    <?php if (get_the_archive_description()) : ?><p class="text-[hsl(var(--muted-foreground))]"><?php the_archive_description(); ?></p><?php endif; ?>
  </header>
  <?php if (have_posts()) : ?>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      <?php while (have_posts()) : the_post(); ?>
        <article class="border border-[hsl(var(--border))] rounded-lg overflow-hidden bg-[hsl(var(--card))]">
          <a href="<?php the_permalink(); ?>" class="block">
            <?php if (has_post_thumbnail()) the_post_thumbnail('large', ['class' => 'w-full h-48 object-cover']); ?>
            <div class="p-5">
              <h2 class="text-lg font-semibold hover:text-[hsl(var(--primary))]"><?php the_title(); ?></h2>
              <p class="mt-2 text-sm text-[hsl(var(--muted-foreground))] line-clamp-3"><?php echo wp_kses_post(get_the_excerpt()); ?></p>
            </div>
          </a>
        </article>
      <?php endwhile; ?>
    </div>
    <div class="mt-10">
      <?php the_posts_pagination(); ?>
    </div>
  <?php else : ?>
    <p>No posts found.</p>
  <?php endif; ?>
</section>
<?php get_footer(); ?>

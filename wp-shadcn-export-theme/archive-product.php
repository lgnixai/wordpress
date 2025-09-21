<?php get_header(); ?>
<section class="container mx-auto px-4 py-12">
  <header class="mb-8 flex items-end justify-between">
    <div>
      <h1 class="text-3xl font-semibold"><?php post_type_archive_title(); ?></h1>
      <?php if (term_description()) : ?><p class="text-[hsl(var(--muted-foreground))]"><?php echo term_description(); ?></p><?php endif; ?>
    </div>
    <?php
    $terms = get_terms(['taxonomy' => 'product_category', 'hide_empty' => true]);
    if (!is_wp_error($terms) && !empty($terms)) : ?>
      <div class="flex gap-2">
        <a href="<?php echo esc_url(get_post_type_archive_link('product')); ?>" class="inline-flex items-center rounded-md border border-[hsl(var(--border))] px-3 py-1.5 text-sm <?php if (!is_tax('product_category')) echo 'bg-white/5'; ?>">All</a>
        <?php foreach ($terms as $term) : ?>
          <a href="<?php echo esc_url(get_term_link($term)); ?>" class="inline-flex items-center rounded-md border border-[hsl(var(--border))] px-3 py-1.5 text-sm <?php if (is_tax('product_category', $term->slug)) echo 'bg-white/5'; ?>"><?php echo esc_html($term->name); ?></a>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>
  </header>
  <?php if (have_posts()) : ?>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
      <?php while (have_posts()) : the_post(); ?>
        <?php get_template_part('template-parts/components/card', 'product'); ?>
      <?php endwhile; ?>
    </div>
    <div class="mt-10">
      <?php the_posts_pagination(); ?>
    </div>
  <?php else : ?>
    <p class="text-[hsl(var(--muted-foreground))]">No products found.</p>
  <?php endif; ?>
</section>
<?php get_footer(); ?>

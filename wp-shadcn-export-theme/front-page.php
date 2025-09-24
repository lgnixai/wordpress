<?php get_header(); ?>

<section class="relative overflow-hidden">
  <div class="absolute inset-0 -z-10">
    <div class="pointer-events-none absolute -top-48 left-1/2 h-[600px] w-[900px] -translate-x-1/2 rounded-full bg-[conic-gradient(at_top_right,_hsl(var(--primary))_0%,_transparent_20%,_hsl(var(--accent))_35%,_transparent_60%,_hsl(var(--secondary))_90%)] opacity-25 blur-3xl"></div>
  </div>
  <div class="container mx-auto px-4 py-24 md:py-32 text-center">
    <div class="inline-flex items-center gap-2 rounded-full border border-[hsl(var(--border))] bg-white/5 px-3 py-1 text-xs text-[hsl(var(--muted-foreground))] backdrop-blur">
      <span class="h-2 w-2 rounded-full bg-[hsl(var(--accent))] animate-pulse"></span>
      Global Export Solutions
    </div>
    <h1 class="mt-6 text-4xl md:text-6xl font-semibold tracking-tight leading-tight">
      Scale your export business with a modern independent site
    </h1>
    <p class="mt-4 text-lg md:text-xl text-[hsl(var(--muted-foreground))] max-w-2xl mx-auto">
      Fast, SEO-friendly, and designed for conversion. Showcase products, publish insights, and win leads.
    </p>
    <div class="mt-8 flex items-center justify-center gap-4">
      <a href="<?php echo esc_url(get_post_type_archive_link('product')); ?>" class="inline-flex items-center rounded-lg bg-[hsl(var(--primary))] text-[hsl(var(--primary-foreground))] px-5 py-3 font-medium shadow hover:opacity-90">
        Browse Products
      </a>
      <a href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>" class="inline-flex items-center rounded-lg border border-[hsl(var(--border))] px-5 py-3 font-medium hover:bg-white/5">
        Read Blog
      </a>
    </div>
    <div class="mt-12 grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-6 opacity-90">
      <?php for ($i=0; $i<4; $i++): ?>
        <div class="rounded-xl border border-[hsl(var(--border))] bg-[hsl(var(--card))] p-4 text-left">
          <div class="text-sm text-[hsl(var(--muted-foreground))]">Featured</div>
          <div class="mt-1 font-medium">Export-ready</div>
        </div>
      <?php endfor; ?>
    </div>
  </div>
</section>

<section class="container mx-auto px-4 py-16">
  <div class="flex items-end justify-between">
    <h2 class="text-2xl md:text-3xl font-semibold">Featured Products</h2>
    <a href="<?php echo esc_url(get_post_type_archive_link('product')); ?>" class="text-sm text-[hsl(var(--muted-foreground))] hover:text-[hsl(var(--foreground))]">View all</a>
  </div>
  <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
    <?php
    $products = new WP_Query([
      'post_type' => 'product',
      'posts_per_page' => 6,
    ]);
    if ($products->have_posts()):
      while ($products->have_posts()): $products->the_post(); ?>
        <?php get_template_part('template-parts/components/card', 'product'); ?>
      <?php endwhile; wp_reset_postdata();
    else: ?>
      <p class="text-[hsl(var(--muted-foreground))]">No products yet.</p>
    <?php endif; ?>
  </div>
</section>

<section class="container mx-auto px-4 py-16">
  <div class="flex items-end justify-between">
    <h2 class="text-2xl md:text-3xl font-semibold">Latest Insights</h2>
    <a href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>" class="text-sm text-[hsl(var(--muted-foreground))] hover:text-[hsl(var(--foreground))]">View all</a>
  </div>
  <div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-8">
    <?php
    $posts = new WP_Query([
      'post_type' => 'post',
      'posts_per_page' => 3,
    ]);
    if ($posts->have_posts()):
      while ($posts->have_posts()): $posts->the_post(); ?>
        <article class="border border-[hsl(var(--border))] rounded-lg overflow-hidden bg-[hsl(var(--card))]">
          <a href="<?php the_permalink(); ?>" class="block">
            <?php if (has_post_thumbnail()) the_post_thumbnail('large', ['class' => 'w-full h-48 object-cover']); ?>
            <div class="p-5">
              <h3 class="text-lg font-semibold hover:text-[hsl(var(--primary))]"><?php the_title(); ?></h3>
              <p class="mt-2 text-sm text-[hsl(var(--muted-foreground))] line-clamp-3"><?php echo wp_kses_post(get_the_excerpt()); ?></p>
            </div>
          </a>
        </article>
      <?php endwhile; wp_reset_postdata();
    else: ?>
      <p class="text-[hsl(var(--muted-foreground))]">No posts yet.</p>
    <?php endif; ?>
  </div>
</section>

<?php get_footer(); ?>

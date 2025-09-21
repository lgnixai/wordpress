<article class="border border-[hsl(var(--border))] rounded-lg overflow-hidden bg-[hsl(var(--card))] hover:shadow transition-shadow">
  <a href="<?php the_permalink(); ?>" class="block">
    <?php if (has_post_thumbnail()) : ?>
      <?php the_post_thumbnail('large', ['class' => 'w-full h-48 object-cover']); ?>
    <?php else: ?>
      <div class="w-full h-48 bg-white/5"></div>
    <?php endif; ?>
    <div class="p-5">
      <h3 class="text-lg font-semibold hover:text-[hsl(var(--primary))]"><?php the_title(); ?></h3>
      <div class="mt-2 text-sm text-[hsl(var(--muted-foreground))] line-clamp-2"><?php echo wp_kses_post(get_the_excerpt()); ?></div>
    </div>
  </a>
</article>

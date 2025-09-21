<?php get_header(); ?>
<section class="container mx-auto px-4 py-12">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article class="grid grid-cols-1 lg:grid-cols-2 gap-10">
      <div>
        <?php if (has_post_thumbnail()) : ?>
          <?php the_post_thumbnail('large', ['class' => 'w-full rounded-lg border border-[hsl(var(--border))]']); ?>
        <?php endif; ?>
        <?php
        $gallery = get_post_gallery_images(get_the_ID());
        if (!empty($gallery)) : ?>
          <div class="mt-4 grid grid-cols-4 gap-3">
            <?php foreach ($gallery as $img) : ?>
              <img src="<?php echo esc_url($img); ?>" class="w-full h-20 object-cover rounded-md border border-[hsl(var(--border))]" alt="">
            <?php endforeach; ?>
          </div>
        <?php endif; ?>
      </div>
      <div>
        <h1 class="text-3xl font-semibold"><?php the_title(); ?></h1>
        <div class="mt-3 text-[hsl(var(--muted-foreground))]">Category: <?php echo get_the_term_list(get_the_ID(), 'product_category', '', ', '); ?></div>
        <div class="prose prose-invert mt-6 max-w-none">
          <?php the_content(); ?>
        </div>
        <div class="mt-8">
          <a href="#contact" class="inline-flex items-center rounded-lg bg-[hsl(var(--primary))] text-[hsl(var(--primary-foreground))] px-5 py-3 font-medium shadow hover:opacity-90">Inquire Now</a>
        </div>
      </div>
    </article>

    <section id="contact" class="mt-16 border-t border-[hsl(var(--border))] pt-10">
      <h2 class="text-2xl font-semibold">Contact Us about this product</h2>
      <form id="contact-form" class="mt-6 grid grid-cols-1 md:grid-cols-2 gap-4">
        <input type="text" name="name" placeholder="Your name" class="rounded-md border border-[hsl(var(--input))] bg-transparent px-3 py-2" required>
        <input type="email" name="email" placeholder="Email" class="rounded-md border border-[hsl(var(--input))] bg-transparent px-3 py-2" required>
        <textarea name="message" placeholder="Message" class="md:col-span-2 rounded-md border border-[hsl(var(--input))] bg-transparent px-3 py-2" rows="5" required>I'm interested in <?php echo esc_html(get_the_title()); ?>.</textarea>
        <input type="hidden" name="action" value="shadcn_contact">
        <input type="hidden" name="nonce" value="<?php echo esc_attr(wp_create_nonce('shadcn_contact_nonce')); ?>">
        <button type="submit" class="inline-flex items-center justify-center rounded-md bg-[hsl(var(--primary))] text-[hsl(var(--primary-foreground))] px-5 py-2.5 font-medium hover:opacity-90">Send</button>
        <div id="contact-result" class="md:col-span-2 text-sm"></div>
      </form>
    </section>
  <?php endwhile; endif; ?>
</section>
<?php get_footer(); ?>

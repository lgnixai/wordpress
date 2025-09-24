<?php /* Template Name: Contact */ ?>
<?php get_header(); ?>
<section class="container mx-auto px-4 py-12">
  <h1 class="text-3xl font-semibold mb-6"><?php the_title(); ?></h1>
  <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
    <div>
      <form id="contact-form" class="space-y-4">
        <input type="text" name="name" placeholder="Your name" class="w-full rounded-md border border-[hsl(var(--input))] bg-transparent px-3 py-2" required>
        <input type="email" name="email" placeholder="Email" class="w-full rounded-md border border-[hsl(var(--input))] bg-transparent px-3 py-2" required>
        <textarea name="message" placeholder="Message" class="w-full rounded-md border border-[hsl(var(--input))] bg-transparent px-3 py-2" rows="6" required></textarea>
        <input type="hidden" name="action" value="shadcn_contact">
        <input type="hidden" name="nonce" value="<?php echo esc_attr(wp_create_nonce('shadcn_contact_nonce')); ?>">
        <button type="submit" class="btn-primary">Send</button>
        <div id="contact-result" class="text-sm"></div>
      </form>
    </div>
    <div class="text-[hsl(var(--muted-foreground))]">
      <p>Email: <?php echo antispambot(get_option('admin_email')); ?></p>
      <p class="mt-2">Address: Your company address here.</p>
    </div>
  </div>
</section>
<?php get_footer(); ?>

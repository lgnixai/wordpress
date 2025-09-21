<?php get_header(); ?>
<section class="container mx-auto px-4 py-12">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article <?php post_class('prose prose-invert max-w-3xl mx-auto'); ?>>
      <h1 class="!mb-6"><?php the_title(); ?></h1>
      <?php the_content(); ?>
    </article>
  <?php endwhile; endif; ?>
</section>
<?php get_footer(); ?>

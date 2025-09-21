<?php
/**
 * The template for displaying all pages
 *
 * @package Export_Business_Theme
 */

get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        
        <?php while (have_posts()) : the_post(); ?>
            
            <!-- Page Header -->
            <section class="bg-gradient-to-r from-gray-100 to-gray-200 py-12 md:py-16">
                <div class="container">
                    <div class="max-w-3xl mx-auto text-center">
                        <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold">
                            <?php the_title(); ?>
                        </h1>
                    </div>
                </div>
            </section>

            <!-- Breadcrumb -->
            <section class="py-4 border-b">
                <div class="container">
                    <?php export_theme_breadcrumbs(); ?>
                </div>
            </section>

            <!-- Page Content -->
            <section class="section">
                <div class="container">
                    <div class="max-w-4xl mx-auto">
                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="mb-8 rounded-lg overflow-hidden">
                                    <?php the_post_thumbnail('large', array('class' => 'w-full h-auto')); ?>
                                </div>
                            <?php endif; ?>
                            
                            <div class="prose prose-lg max-w-none">
                                <?php the_content(); ?>
                            </div>
                            
                            <?php
                            wp_link_pages(array(
                                'before' => '<div class="page-links mt-8"><span class="font-semibold">Pages:</span>',
                                'after'  => '</div>',
                                'link_before' => '<span class="px-3 py-1 mx-1 rounded hover:bg-gray-100">',
                                'link_after' => '</span>',
                            ));
                            ?>
                            
                        </article>
                        
                        <?php
                        // If comments are open or we have at least one comment, load up the comment template.
                        if (comments_open() || get_comments_number()) :
                            comments_template();
                        endif;
                        ?>
                        
                    </div>
                </div>
            </section>
            
        <?php endwhile; ?>
        
    </main>
</div>

<?php
get_footer();
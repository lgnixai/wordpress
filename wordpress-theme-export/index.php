<?php
/**
 * The main template file
 *
 * @package Export_Business_Theme
 */

get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <div class="container section">
            <?php if (is_home() && !is_front_page()) : ?>
                <header class="page-header mb-8">
                    <h1 class="page-title text-3xl md:text-4xl font-bold"><?php single_post_title(); ?></h1>
                </header>
            <?php endif; ?>

            <?php if (have_posts()) : ?>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
                    <?php
                    while (have_posts()) :
                        the_post();
                    ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class('card hover:shadow-lg transition-shadow duration-300'); ?>>
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="relative overflow-hidden rounded-t-lg">
                                    <?php export_theme_post_thumbnail('blog-thumbnail', 'aspect-video object-cover'); ?>
                                </div>
                            <?php endif; ?>
                            
                            <div class="card-content">
                                <header class="entry-header mb-4">
                                    <?php
                                    if (is_singular()) :
                                        the_title('<h1 class="entry-title text-2xl font-bold">', '</h1>');
                                    else :
                                        the_title('<h2 class="entry-title text-xl font-semibold"><a href="' . esc_url(get_permalink()) . '" class="text-foreground hover:text-primary transition-colors" rel="bookmark">', '</a></h2>');
                                    endif;
                                    ?>
                                    
                                    <?php if ('post' === get_post_type()) : ?>
                                        <div class="entry-meta mt-2 flex items-center text-sm text-muted-foreground">
                                            <?php
                                            export_theme_posted_on();
                                            echo '<span class="mx-2">•</span>';
                                            export_theme_posted_by();
                                            ?>
                                        </div>
                                    <?php endif; ?>
                                </header>

                                <div class="entry-content text-muted-foreground">
                                    <?php the_excerpt(); ?>
                                </div>

                                <footer class="entry-footer mt-4">
                                    <a href="<?php the_permalink(); ?>" class="btn btn-link p-0">
                                        <?php esc_html_e('Read More', 'export-theme'); ?>
                                        <svg class="w-4 h-4 ml-1 inline-block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </a>
                                </footer>
                            </div>
                        </article>
                    <?php endwhile; ?>
                </div>

                <div class="mt-12">
                    <?php
                    the_posts_pagination(array(
                        'mid_size'  => 2,
                        'prev_text' => __('Previous', 'export-theme'),
                        'next_text' => __('Next', 'export-theme'),
                        'class'     => 'flex justify-center space-x-2',
                    ));
                    ?>
                </div>

            <?php else : ?>
                <div class="text-center py-12">
                    <h2 class="text-2xl font-semibold mb-4"><?php esc_html_e('Nothing Found', 'export-theme'); ?></h2>
                    <p class="text-muted-foreground mb-8"><?php esc_html_e('It seems we can\'t find what you\'re looking for. Perhaps searching can help.', 'export-theme'); ?></p>
                    <?php get_search_form(); ?>
                </div>
            <?php endif; ?>
        </div>
    </main>
</div>

<?php
get_footer();
<?php
/**
 * The template for displaying archive pages
 *
 * @package Export_Business_Theme
 */

get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        
        <!-- Page Header -->
        <section class="bg-gradient-to-r from-gray-100 to-gray-200 py-12 md:py-16">
            <div class="container">
                <div class="text-center">
                    <?php
                    the_archive_title('<h1 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-4">', '</h1>');
                    the_archive_description('<div class="text-xl text-muted-foreground max-w-2xl mx-auto">', '</div>');
                    ?>
                </div>
            </div>
        </section>

        <!-- Breadcrumb -->
        <section class="py-4 border-b">
            <div class="container">
                <?php export_theme_breadcrumbs(); ?>
            </div>
        </section>

        <!-- Blog Posts -->
        <section class="section">
            <div class="container">
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                    
                    <!-- Main Content -->
                    <div class="lg:col-span-2">
                        <?php if (have_posts()) : ?>
                            <div class="space-y-8">
                                <?php
                                while (have_posts()) :
                                    the_post();
                                ?>
                                    <article id="post-<?php the_ID(); ?>" <?php post_class('card hover:shadow-lg transition-shadow duration-300'); ?>>
                                        <?php if (has_post_thumbnail()) : ?>
                                            <div class="relative overflow-hidden rounded-t-lg">
                                                <a href="<?php the_permalink(); ?>">
                                                    <?php the_post_thumbnail('blog-thumbnail', array('class' => 'w-full h-64 object-cover hover:scale-105 transition-transform duration-300')); ?>
                                                </a>
                                            </div>
                                        <?php endif; ?>
                                        
                                        <div class="card-content">
                                            <header class="entry-header mb-4">
                                                <h2 class="entry-title text-2xl font-bold mb-2">
                                                    <a href="<?php the_permalink(); ?>" class="text-foreground hover:text-primary transition-colors">
                                                        <?php the_title(); ?>
                                                    </a>
                                                </h2>
                                                
                                                <div class="entry-meta flex flex-wrap items-center gap-4 text-sm text-muted-foreground">
                                                    <span class="flex items-center">
                                                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                                        </svg>
                                                        <?php echo get_the_date(); ?>
                                                    </span>
                                                    
                                                    <span class="flex items-center">
                                                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                                        </svg>
                                                        <?php the_author(); ?>
                                                    </span>
                                                    
                                                    <?php
                                                    $categories = get_the_category();
                                                    if ($categories) :
                                                    ?>
                                                        <span class="flex items-center">
                                                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                                                            </svg>
                                                            <?php
                                                            $category_links = array();
                                                            foreach ($categories as $category) {
                                                                $category_links[] = '<a href="' . esc_url(get_category_link($category->term_id)) . '" class="hover:text-primary transition-colors">' . esc_html($category->name) . '</a>';
                                                            }
                                                            echo implode(', ', $category_links);
                                                            ?>
                                                        </span>
                                                    <?php endif; ?>
                                                </div>
                                            </header>

                                            <div class="entry-content prose prose-lg max-w-none mb-4">
                                                <?php the_excerpt(); ?>
                                            </div>

                                            <footer class="entry-footer flex items-center justify-between">
                                                <a href="<?php the_permalink(); ?>" class="btn btn-link p-0">
                                                    Continue Reading
                                                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                                    </svg>
                                                </a>
                                                
                                                <?php if (comments_open() || get_comments_number()) : ?>
                                                    <a href="<?php comments_link(); ?>" class="flex items-center text-sm text-muted-foreground hover:text-primary transition-colors">
                                                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                                                        </svg>
                                                        <?php comments_number('0 Comments', '1 Comment', '% Comments'); ?>
                                                    </a>
                                                <?php endif; ?>
                                            </footer>
                                        </div>
                                    </article>
                                <?php endwhile; ?>
                            </div>

                            <!-- Pagination -->
                            <div class="mt-12">
                                <?php
                                the_posts_pagination(array(
                                    'mid_size'  => 2,
                                    'prev_text' => '<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>',
                                    'next_text' => '<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>',
                                    'class'     => 'flex justify-center space-x-2',
                                ));
                                ?>
                            </div>

                        <?php else : ?>
                            <div class="text-center py-12">
                                <h2 class="text-2xl font-semibold mb-4"><?php esc_html_e('Nothing Found', 'export-theme'); ?></h2>
                                <p class="text-muted-foreground mb-8"><?php esc_html_e('It seems we can\'t find what you\'re looking for.', 'export-theme'); ?></p>
                                <?php get_search_form(); ?>
                            </div>
                        <?php endif; ?>
                    </div>

                    <!-- Sidebar -->
                    <aside class="lg:col-span-1">
                        <?php get_sidebar(); ?>
                    </aside>
                </div>
            </div>
        </section>
        
    </main>
</div>

<?php
get_footer();
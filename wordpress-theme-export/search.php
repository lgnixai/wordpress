<?php
/**
 * The template for displaying search results pages
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
                    <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-4">
                        <?php
                        printf(
                            /* translators: %s: search query. */
                            esc_html__('Search Results for: %s', 'export-theme'),
                            '<span class="text-primary">' . get_search_query() . '</span>'
                        );
                        ?>
                    </h1>
                    <?php
                    global $wp_query;
                    if ($wp_query->found_posts > 0) :
                    ?>
                        <p class="text-xl text-muted-foreground">
                            <?php
                            printf(
                                /* translators: %d: number of search results. */
                                esc_html(_n('Found %d result', 'Found %d results', $wp_query->found_posts, 'export-theme')),
                                $wp_query->found_posts
                            );
                            ?>
                        </p>
                    <?php endif; ?>
                </div>
            </div>
        </section>

        <!-- Breadcrumb -->
        <section class="py-4 border-b">
            <div class="container">
                <?php export_theme_breadcrumbs(); ?>
            </div>
        </section>

        <!-- Search Results -->
        <section class="section">
            <div class="container">
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                    
                    <!-- Main Content -->
                    <div class="lg:col-span-2">
                        <?php if (have_posts()) : ?>
                            
                            <!-- Search Form -->
                            <div class="card mb-8">
                                <div class="card-content">
                                    <form role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>" class="flex gap-2">
                                        <input type="search" class="input flex-1" placeholder="Search again..." value="<?php echo get_search_query(); ?>" name="s">
                                        <button type="submit" class="btn btn-primary">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </div>
                            
                            <div class="space-y-6">
                                <?php
                                while (have_posts()) :
                                    the_post();
                                    $post_type = get_post_type();
                                ?>
                                    <article class="card hover:shadow-lg transition-shadow duration-300">
                                        <div class="card-content">
                                            <div class="flex items-start gap-4">
                                                <?php if (has_post_thumbnail()) : ?>
                                                    <a href="<?php the_permalink(); ?>" class="flex-shrink-0">
                                                        <?php the_post_thumbnail('thumbnail', array('class' => 'w-24 h-24 object-cover rounded')); ?>
                                                    </a>
                                                <?php endif; ?>
                                                
                                                <div class="flex-1">
                                                    <div class="mb-2">
                                                        <span class="badge badge-secondary">
                                                            <?php
                                                            if ($post_type == 'product') {
                                                                echo 'Product';
                                                            } elseif ($post_type == 'post') {
                                                                echo 'Blog Post';
                                                            } else {
                                                                echo 'Page';
                                                            }
                                                            ?>
                                                        </span>
                                                    </div>
                                                    
                                                    <h2 class="text-xl font-semibold mb-2">
                                                        <a href="<?php the_permalink(); ?>" class="text-foreground hover:text-primary transition-colors">
                                                            <?php the_title(); ?>
                                                        </a>
                                                    </h2>
                                                    
                                                    <div class="text-muted-foreground mb-3">
                                                        <?php
                                                        // Highlight search terms in excerpt
                                                        $excerpt = get_the_excerpt();
                                                        $keys = explode(' ', get_search_query());
                                                        foreach ($keys as $key) {
                                                            $excerpt = preg_replace('/(' . preg_quote($key, '/') . ')/i', '<mark class="bg-yellow-200">$1</mark>', $excerpt);
                                                        }
                                                        echo wp_kses_post($excerpt);
                                                        ?>
                                                    </div>
                                                    
                                                    <div class="flex items-center justify-between">
                                                        <div class="text-sm text-muted-foreground">
                                                            <?php echo get_the_date(); ?>
                                                            <?php if ($post_type == 'post') : ?>
                                                                • By <?php the_author(); ?>
                                                            <?php endif; ?>
                                                        </div>
                                                        
                                                        <a href="<?php the_permalink(); ?>" class="btn btn-link btn-sm p-0">
                                                            View More
                                                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                                            </svg>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
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
                                <svg class="w-24 h-24 mx-auto text-gray-300 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                </svg>
                                
                                <h2 class="text-2xl font-semibold mb-4">
                                    <?php esc_html_e('No Results Found', 'export-theme'); ?>
                                </h2>
                                
                                <p class="text-muted-foreground mb-8 max-w-md mx-auto">
                                    <?php esc_html_e('Sorry, but nothing matched your search terms. Please try again with different keywords.', 'export-theme'); ?>
                                </p>
                                
                                <!-- Search Form -->
                                <div class="max-w-md mx-auto mb-8">
                                    <form role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>" class="flex gap-2">
                                        <input type="search" class="input flex-1" placeholder="Try another search..." name="s">
                                        <button type="submit" class="btn btn-primary">
                                            Search
                                        </button>
                                    </form>
                                </div>
                                
                                <!-- Search Suggestions -->
                                <div class="text-left max-w-md mx-auto">
                                    <h3 class="font-semibold mb-3"><?php esc_html_e('Search Suggestions:', 'export-theme'); ?></h3>
                                    <ul class="list-disc list-inside text-muted-foreground space-y-1">
                                        <li><?php esc_html_e('Check your spelling', 'export-theme'); ?></li>
                                        <li><?php esc_html_e('Try more general keywords', 'export-theme'); ?></li>
                                        <li><?php esc_html_e('Try different keywords', 'export-theme'); ?></li>
                                        <li><?php esc_html_e('Browse our product categories', 'export-theme'); ?></li>
                                    </ul>
                                </div>
                                
                                <div class="mt-8">
                                    <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-primary btn-md">
                                        Back to Home
                                    </a>
                                </div>
                            </div>
                            
                        <?php endif; ?>
                    </div>

                    <!-- Sidebar -->
                    <aside class="lg:col-span-1">
                        <div class="sticky top-24 space-y-6">
                            <!-- Search by Category -->
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="text-lg font-semibold">Filter by Type</h3>
                                </div>
                                <div class="card-content">
                                    <form method="get" action="<?php echo esc_url(home_url('/')); ?>">
                                        <input type="hidden" name="s" value="<?php echo get_search_query(); ?>">
                                        <select name="post_type" class="input mb-3" onchange="this.form.submit()">
                                            <option value="">All Types</option>
                                            <option value="product" <?php selected(isset($_GET['post_type']) && $_GET['post_type'] == 'product'); ?>>Products Only</option>
                                            <option value="post" <?php selected(isset($_GET['post_type']) && $_GET['post_type'] == 'post'); ?>>Blog Posts Only</option>
                                            <option value="page" <?php selected(isset($_GET['post_type']) && $_GET['post_type'] == 'page'); ?>>Pages Only</option>
                                        </select>
                                    </form>
                                </div>
                            </div>

                            <!-- Popular Searches -->
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="text-lg font-semibold">Popular Searches</h3>
                                </div>
                                <div class="card-content">
                                    <div class="flex flex-wrap gap-2">
                                        <?php
                                        $popular_searches = array('Export', 'Quality', 'Shipping', 'Products', 'Services');
                                        foreach ($popular_searches as $term) :
                                        ?>
                                            <a href="<?php echo esc_url(home_url('/?s=' . urlencode($term))); ?>" 
                                               class="badge badge-outline hover:bg-primary hover:text-white hover:border-primary transition-all">
                                                <?php echo esc_html($term); ?>
                                            </a>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>

                            <!-- Quick Links -->
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="text-lg font-semibold">Quick Links</h3>
                                </div>
                                <div class="card-content">
                                    <ul class="space-y-2">
                                        <li>
                                            <a href="<?php echo esc_url(get_post_type_archive_link('product')); ?>" 
                                               class="text-muted-foreground hover:text-primary transition-colors">
                                                View All Products
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo esc_url(home_url('/about')); ?>" 
                                               class="text-muted-foreground hover:text-primary transition-colors">
                                                About Us
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo esc_url(home_url('/contact')); ?>" 
                                               class="text-muted-foreground hover:text-primary transition-colors">
                                                Contact Us
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>" 
                                               class="text-muted-foreground hover:text-primary transition-colors">
                                                Blog
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </section>
        
    </main>
</div>

<?php
get_footer();
<?php
/**
 * The template for displaying product archive pages
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
                    <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-4">Our Products</h1>
                    <p class="text-xl text-muted-foreground max-w-2xl mx-auto">
                        Explore our comprehensive range of high-quality export products
                    </p>
                </div>
            </div>
        </section>

        <!-- Breadcrumb -->
        <section class="py-4 border-b">
            <div class="container">
                <?php export_theme_breadcrumbs(); ?>
            </div>
        </section>

        <!-- Products Section -->
        <section class="section">
            <div class="container">
                <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
                    
                    <!-- Sidebar -->
                    <aside class="lg:col-span-1">
                        <div class="sticky top-24">
                            <!-- Product Categories -->
                            <div class="card mb-6">
                                <div class="card-header">
                                    <h3 class="text-lg font-semibold">Product Categories</h3>
                                </div>
                                <div class="card-content">
                                    <ul class="space-y-2">
                                        <li>
                                            <a href="<?php echo esc_url(get_post_type_archive_link('product')); ?>" 
                                               class="flex items-center justify-between text-muted-foreground hover:text-primary transition-colors <?php echo !is_tax('product_category') ? 'text-primary font-semibold' : ''; ?>">
                                                <span>All Products</span>
                                                <span class="text-sm">
                                                    <?php
                                                    $total_products = wp_count_posts('product');
                                                    echo esc_html($total_products->publish);
                                                    ?>
                                                </span>
                                            </a>
                                        </li>
                                        <?php
                                        $categories = get_terms(array(
                                            'taxonomy' => 'product_category',
                                            'hide_empty' => true,
                                        ));
                                        
                                        if (!empty($categories) && !is_wp_error($categories)) :
                                            foreach ($categories as $category) :
                                                $current_cat = get_queried_object();
                                                $is_current = is_tax('product_category', $category->term_id);
                                        ?>
                                            <li>
                                                <a href="<?php echo esc_url(get_term_link($category)); ?>" 
                                                   class="flex items-center justify-between text-muted-foreground hover:text-primary transition-colors <?php echo $is_current ? 'text-primary font-semibold' : ''; ?>">
                                                    <span><?php echo esc_html($category->name); ?></span>
                                                    <span class="text-sm"><?php echo esc_html($category->count); ?></span>
                                                </a>
                                            </li>
                                        <?php
                                            endforeach;
                                        endif;
                                        ?>
                                    </ul>
                                </div>
                            </div>

                            <!-- Filter Form -->
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="text-lg font-semibold">Filter Products</h3>
                                </div>
                                <div class="card-content">
                                    <form method="get" action="<?php echo esc_url(get_post_type_archive_link('product')); ?>">
                                        <!-- Sort By -->
                                        <div class="mb-4">
                                            <label for="orderby" class="label mb-2 block">Sort By</label>
                                            <select name="orderby" id="orderby" class="input">
                                                <option value="date" <?php selected(isset($_GET['orderby']) && $_GET['orderby'] == 'date'); ?>>Latest</option>
                                                <option value="title" <?php selected(isset($_GET['orderby']) && $_GET['orderby'] == 'title'); ?>>Name (A-Z)</option>
                                                <option value="menu_order" <?php selected(isset($_GET['orderby']) && $_GET['orderby'] == 'menu_order'); ?>>Featured</option>
                                            </select>
                                        </div>

                                        <!-- Price Range -->
                                        <div class="mb-4">
                                            <label class="label mb-2 block">Price Range</label>
                                            <div class="space-y-2">
                                                <input type="number" name="min_price" placeholder="Min Price" 
                                                       value="<?php echo isset($_GET['min_price']) ? esc_attr($_GET['min_price']) : ''; ?>" 
                                                       class="input">
                                                <input type="number" name="max_price" placeholder="Max Price" 
                                                       value="<?php echo isset($_GET['max_price']) ? esc_attr($_GET['max_price']) : ''; ?>" 
                                                       class="input">
                                            </div>
                                        </div>

                                        <!-- Search -->
                                        <div class="mb-4">
                                            <label for="search" class="label mb-2 block">Search Products</label>
                                            <input type="text" name="s" id="search" placeholder="Enter keywords..." 
                                                   value="<?php echo get_search_query(); ?>" 
                                                   class="input">
                                            <input type="hidden" name="post_type" value="product">
                                        </div>

                                        <button type="submit" class="btn btn-primary btn-md w-full">
                                            Apply Filters
                                        </button>
                                        
                                        <?php if (!empty($_GET)) : ?>
                                            <a href="<?php echo esc_url(get_post_type_archive_link('product')); ?>" 
                                               class="btn btn-ghost btn-md w-full mt-2">
                                                Clear Filters
                                            </a>
                                        <?php endif; ?>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </aside>

                    <!-- Products Grid -->
                    <div class="lg:col-span-3">
                        <!-- Results Info -->
                        <div class="flex items-center justify-between mb-6">
                            <div class="text-muted-foreground">
                                <?php
                                global $wp_query;
                                $total = $wp_query->found_posts;
                                $current_page = get_query_var('paged') ? get_query_var('paged') : 1;
                                $per_page = get_query_var('posts_per_page');
                                $from = (($current_page - 1) * $per_page) + 1;
                                $to = min($total, $current_page * $per_page);
                                
                                if ($total > 0) {
                                    echo sprintf('Showing %d-%d of %d products', $from, $to, $total);
                                } else {
                                    echo 'No products found';
                                }
                                ?>
                            </div>
                            
                            <!-- View Mode Toggle -->
                            <div class="flex items-center space-x-2">
                                <button class="p-2 rounded hover:bg-gray-100 view-mode-btn active" data-mode="grid">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
                                    </svg>
                                </button>
                                <button class="p-2 rounded hover:bg-gray-100 view-mode-btn" data-mode="list">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <?php if (have_posts()) : ?>
                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 products-grid">
                                <?php
                                while (have_posts()) :
                                    the_post();
                                ?>
                                    <div class="card group hover:shadow-xl transition-all duration-300 product-item">
                                        <div class="relative overflow-hidden rounded-t-lg">
                                            <?php if (has_post_thumbnail()) : ?>
                                                <a href="<?php the_permalink(); ?>">
                                                    <?php the_post_thumbnail('product-thumbnail', array('class' => 'w-full h-56 object-cover group-hover:scale-110 transition-transform duration-300')); ?>
                                                </a>
                                            <?php else : ?>
                                                <a href="<?php the_permalink(); ?>">
                                                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/product-placeholder.jpg'); ?>" 
                                                         alt="<?php the_title(); ?>" 
                                                         class="w-full h-56 object-cover group-hover:scale-110 transition-transform duration-300">
                                                </a>
                                            <?php endif; ?>
                                            
                                            <?php if ($price = export_theme_get_product_price()) : ?>
                                                <span class="absolute top-3 right-3 bg-primary text-white px-3 py-1 rounded-full text-sm font-semibold">
                                                    <?php echo esc_html($price); ?>
                                                </span>
                                            <?php endif; ?>
                                            
                                            <!-- Quick View -->
                                            <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                                                <a href="<?php the_permalink(); ?>" class="btn btn-secondary btn-sm">
                                                    Quick View
                                                </a>
                                            </div>
                                        </div>
                                        
                                        <div class="card-content">
                                            <h3 class="text-lg font-semibold mb-2">
                                                <a href="<?php the_permalink(); ?>" class="text-foreground hover:text-primary transition-colors line-clamp-2">
                                                    <?php the_title(); ?>
                                                </a>
                                            </h3>
                                            
                                            <?php if ($sku = export_theme_get_product_sku()) : ?>
                                                <p class="text-xs text-muted-foreground mb-2">SKU: <?php echo esc_html($sku); ?></p>
                                            <?php endif; ?>
                                            
                                            <?php
                                            $categories = get_the_terms(get_the_ID(), 'product_category');
                                            if ($categories && !is_wp_error($categories)) :
                                            ?>
                                                <div class="flex flex-wrap gap-1 mb-3">
                                                    <?php foreach ($categories as $category) : ?>
                                                        <span class="badge badge-secondary badge-sm">
                                                            <?php echo esc_html($category->name); ?>
                                                        </span>
                                                    <?php endforeach; ?>
                                                </div>
                                            <?php endif; ?>
                                            
                                            <p class="text-sm text-muted-foreground mb-4 line-clamp-2">
                                                <?php echo wp_trim_words(get_the_excerpt(), 15); ?>
                                            </p>
                                            
                                            <div class="flex gap-2">
                                                <a href="<?php the_permalink(); ?>" class="btn btn-primary btn-sm flex-1">
                                                    View Details
                                                </a>
                                                <a href="<?php echo esc_url(home_url('/contact?product=' . get_the_ID())); ?>" 
                                                   class="btn btn-outline btn-sm flex-1">
                                                    Get Quote
                                                </a>
                                            </div>
                                        </div>
                                    </div>
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
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path>
                                </svg>
                                <h2 class="text-2xl font-semibold mb-2"><?php esc_html_e('No Products Found', 'export-theme'); ?></h2>
                                <p class="text-muted-foreground mb-8">
                                    <?php esc_html_e('We couldn\'t find any products matching your criteria.', 'export-theme'); ?>
                                </p>
                                <a href="<?php echo esc_url(get_post_type_archive_link('product')); ?>" class="btn btn-primary btn-md">
                                    View All Products
                                </a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>
        
    </main>
</div>

<?php
get_footer();
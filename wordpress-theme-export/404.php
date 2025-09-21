<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package Export_Business_Theme
 */

get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        
        <section class="section">
            <div class="container">
                <div class="max-w-2xl mx-auto text-center">
                    <div class="mb-8">
                        <h1 class="text-9xl font-bold text-primary/20">404</h1>
                    </div>
                    
                    <h2 class="text-3xl md:text-4xl font-bold mb-4">
                        <?php esc_html_e('Oops! Page Not Found', 'export-theme'); ?>
                    </h2>
                    
                    <p class="text-xl text-muted-foreground mb-8">
                        <?php esc_html_e('The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.', 'export-theme'); ?>
                    </p>
                    
                    <div class="flex flex-wrap gap-4 justify-center mb-12">
                        <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-primary btn-lg">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                            </svg>
                            <?php esc_html_e('Back to Home', 'export-theme'); ?>
                        </a>
                        
                        <a href="<?php echo esc_url(get_post_type_archive_link('product')); ?>" class="btn btn-outline btn-lg">
                            <?php esc_html_e('View Products', 'export-theme'); ?>
                        </a>
                    </div>
                    
                    <!-- Search Form -->
                    <div class="max-w-md mx-auto">
                        <h3 class="text-lg font-semibold mb-4"><?php esc_html_e('Try searching:', 'export-theme'); ?></h3>
                        <?php get_search_form(); ?>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Popular Products -->
        <section class="section bg-gray-50">
            <div class="container">
                <h2 class="text-2xl md:text-3xl font-bold mb-8 text-center">
                    <?php esc_html_e('Popular Products', 'export-theme'); ?>
                </h2>
                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <?php
                    $popular_products = new WP_Query(array(
                        'post_type' => 'product',
                        'posts_per_page' => 4,
                        'orderby' => 'rand'
                    ));
                    
                    if ($popular_products->have_posts()) :
                        while ($popular_products->have_posts()) : $popular_products->the_post();
                    ?>
                        <div class="card group hover:shadow-xl transition-all duration-300">
                            <div class="relative overflow-hidden rounded-t-lg">
                                <?php if (has_post_thumbnail()) : ?>
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail('product-thumbnail', array('class' => 'w-full h-48 object-cover group-hover:scale-110 transition-transform duration-300')); ?>
                                    </a>
                                <?php else : ?>
                                    <a href="<?php the_permalink(); ?>">
                                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/product-placeholder.jpg'); ?>" 
                                             alt="<?php the_title(); ?>" 
                                             class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-300">
                                    </a>
                                <?php endif; ?>
                            </div>
                            
                            <div class="card-content">
                                <h3 class="text-lg font-semibold mb-2">
                                    <a href="<?php the_permalink(); ?>" class="text-foreground hover:text-primary transition-colors">
                                        <?php the_title(); ?>
                                    </a>
                                </h3>
                                
                                <a href="<?php the_permalink(); ?>" class="btn btn-sm btn-primary w-full">
                                    View Details
                                </a>
                            </div>
                        </div>
                    <?php
                        endwhile;
                        wp_reset_postdata();
                    endif;
                    ?>
                </div>
            </div>
        </section>
        
    </main>
</div>

<?php
get_footer();
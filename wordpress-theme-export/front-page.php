<?php
/**
 * The front page template file
 *
 * @package Export_Business_Theme
 */

get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        
        <!-- Hero Section -->
        <section class="relative bg-gradient-to-r from-primary to-primary/80 text-white overflow-hidden">
            <div class="absolute inset-0 bg-black/20"></div>
            <div class="container relative z-10 py-24 md:py-32 lg:py-40">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    <div class="animate-fade-in">
                        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 leading-tight">
                            Your Trusted Partner in Global Trade
                        </h1>
                        <p class="text-xl md:text-2xl mb-8 text-white/90">
                            Premium quality products exported worldwide with excellence and reliability since 1995.
                        </p>
                        <div class="flex flex-wrap gap-4">
                            <a href="<?php echo esc_url(get_post_type_archive_link('product')); ?>" class="btn btn-secondary btn-lg">
                                Explore Products
                            </a>
                            <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-outline btn-lg text-white border-white hover:bg-white hover:text-primary">
                                Get Quote
                            </a>
                        </div>
                    </div>
                    <div class="hidden lg:block">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/hero-image.jpg'); ?>" alt="Export Business" class="rounded-lg shadow-2xl animate-slide-in">
                    </div>
                </div>
            </div>
            
            <!-- Wave SVG -->
            <div class="absolute bottom-0 left-0 right-0">
                <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 120L60 110C120 100 240 80 360 70C480 60 600 60 720 65C840 70 960 80 1080 85C1200 90 1320 90 1380 90L1440 90V120H1380C1320 120 1200 120 1080 120C960 120 840 120 720 120C600 120 480 120 360 120C240 120 120 120 60 120H0V120Z" fill="white"/>
                </svg>
            </div>
        </section>

        <!-- Features Section -->
        <section class="section bg-gray-50">
            <div class="container">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold mb-4">Why Choose Us</h2>
                    <p class="text-xl text-muted-foreground max-w-2xl mx-auto">
                        We deliver excellence in every shipment with our comprehensive export solutions
                    </p>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <?php
                    $features = array(
                        array(
                            'icon' => '<svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>',
                            'title' => 'Quality Assured',
                            'description' => 'All products undergo rigorous quality checks before export'
                        ),
                        array(
                            'icon' => '<svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>',
                            'title' => 'On-Time Delivery',
                            'description' => 'Reliable shipping with real-time tracking and updates'
                        ),
                        array(
                            'icon' => '<svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>',
                            'title' => 'Global Network',
                            'description' => 'Established partnerships in over 50 countries worldwide'
                        ),
                        array(
                            'icon' => '<svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>',
                            'title' => 'Best Prices',
                            'description' => 'Competitive pricing without compromising on quality'
                        )
                    );
                    
                    foreach ($features as $feature) :
                    ?>
                        <div class="text-center animate-on-scroll">
                            <div class="inline-flex items-center justify-center w-20 h-20 mb-4 rounded-full bg-primary/10 text-primary">
                                <?php echo $feature['icon']; ?>
                            </div>
                            <h3 class="text-xl font-semibold mb-2"><?php echo esc_html($feature['title']); ?></h3>
                            <p class="text-muted-foreground"><?php echo esc_html($feature['description']); ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- Featured Products Section -->
        <section class="section">
            <div class="container">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold mb-4">Featured Products</h2>
                    <p class="text-xl text-muted-foreground max-w-2xl mx-auto">
                        Discover our most popular export products trusted by clients worldwide
                    </p>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <?php
                    $featured_products = new WP_Query(array(
                        'post_type' => 'product',
                        'posts_per_page' => 8,
                        'meta_key' => '_featured',
                        'meta_value' => 'yes',
                        'orderby' => 'date',
                        'order' => 'DESC'
                    ));
                    
                    if ($featured_products->have_posts()) :
                        while ($featured_products->have_posts()) : $featured_products->the_post();
                    ?>
                        <div class="card group hover:shadow-xl transition-all duration-300 animate-on-scroll">
                            <div class="relative overflow-hidden rounded-t-lg">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('product-thumbnail', array('class' => 'w-full h-48 object-cover group-hover:scale-110 transition-transform duration-300')); ?>
                                <?php else : ?>
                                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/product-placeholder.jpg'); ?>" alt="<?php the_title(); ?>" class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-300">
                                <?php endif; ?>
                                
                                <?php if ($price = export_theme_get_product_price()) : ?>
                                    <span class="absolute top-2 right-2 bg-primary text-white px-3 py-1 rounded-full text-sm font-semibold">
                                        <?php echo esc_html($price); ?>
                                    </span>
                                <?php endif; ?>
                            </div>
                            
                            <div class="card-content">
                                <h3 class="text-lg font-semibold mb-2">
                                    <a href="<?php the_permalink(); ?>" class="text-foreground hover:text-primary transition-colors">
                                        <?php the_title(); ?>
                                    </a>
                                </h3>
                                
                                <?php
                                $categories = get_the_terms(get_the_ID(), 'product_category');
                                if ($categories && !is_wp_error($categories)) :
                                    $category = $categories[0];
                                ?>
                                    <span class="badge badge-secondary mb-2">
                                        <?php echo esc_html($category->name); ?>
                                    </span>
                                <?php endif; ?>
                                
                                <p class="text-sm text-muted-foreground mb-4">
                                    <?php echo wp_trim_words(get_the_excerpt(), 15); ?>
                                </p>
                                
                                <a href="<?php the_permalink(); ?>" class="btn btn-sm btn-primary w-full">
                                    View Details
                                </a>
                            </div>
                        </div>
                    <?php
                        endwhile;
                        wp_reset_postdata();
                    else :
                        // If no featured products, show recent products
                        $recent_products = new WP_Query(array(
                            'post_type' => 'product',
                            'posts_per_page' => 8
                        ));
                        
                        if ($recent_products->have_posts()) :
                            while ($recent_products->have_posts()) : $recent_products->the_post();
                                // Same product card code as above
                                ?>
                                <div class="card group hover:shadow-xl transition-all duration-300 animate-on-scroll">
                                    <div class="relative overflow-hidden rounded-t-lg">
                                        <?php if (has_post_thumbnail()) : ?>
                                            <?php the_post_thumbnail('product-thumbnail', array('class' => 'w-full h-48 object-cover group-hover:scale-110 transition-transform duration-300')); ?>
                                        <?php else : ?>
                                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/product-placeholder.jpg'); ?>" alt="<?php the_title(); ?>" class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-300">
                                        <?php endif; ?>
                                    </div>
                                    
                                    <div class="card-content">
                                        <h3 class="text-lg font-semibold mb-2">
                                            <a href="<?php the_permalink(); ?>" class="text-foreground hover:text-primary transition-colors">
                                                <?php the_title(); ?>
                                            </a>
                                        </h3>
                                        
                                        <p class="text-sm text-muted-foreground mb-4">
                                            <?php echo wp_trim_words(get_the_excerpt(), 15); ?>
                                        </p>
                                        
                                        <a href="<?php the_permalink(); ?>" class="btn btn-sm btn-primary w-full">
                                            View Details
                                        </a>
                                    </div>
                                </div>
                                <?php
                            endwhile;
                            wp_reset_postdata();
                        endif;
                    endif;
                    ?>
                </div>
                
                <div class="text-center mt-12">
                    <a href="<?php echo esc_url(get_post_type_archive_link('product')); ?>" class="btn btn-outline btn-lg">
                        View All Products
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </section>

        <!-- Statistics Section -->
        <section class="section bg-primary text-white">
            <div class="container">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                    <div class="animate-on-scroll">
                        <div class="text-4xl md:text-5xl font-bold mb-2">25+</div>
                        <div class="text-white/80">Years Experience</div>
                    </div>
                    <div class="animate-on-scroll">
                        <div class="text-4xl md:text-5xl font-bold mb-2">50+</div>
                        <div class="text-white/80">Countries Served</div>
                    </div>
                    <div class="animate-on-scroll">
                        <div class="text-4xl md:text-5xl font-bold mb-2">1000+</div>
                        <div class="text-white/80">Happy Clients</div>
                    </div>
                    <div class="animate-on-scroll">
                        <div class="text-4xl md:text-5xl font-bold mb-2">5000+</div>
                        <div class="text-white/80">Products Exported</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonials Section -->
        <section class="section bg-gray-50">
            <div class="container">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold mb-4">What Our Clients Say</h2>
                    <p class="text-xl text-muted-foreground max-w-2xl mx-auto">
                        Trusted by businesses worldwide for quality and reliability
                    </p>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <?php
                    $testimonials = array(
                        array(
                            'content' => 'Excellent quality products and outstanding service. They never miss a delivery deadline and their customer support is exceptional.',
                            'author' => 'John Smith',
                            'company' => 'ABC Trading Co.',
                            'country' => 'USA'
                        ),
                        array(
                            'content' => 'We have been working with them for over 5 years. Their commitment to quality and competitive pricing makes them our preferred partner.',
                            'author' => 'Maria Garcia',
                            'company' => 'Global Imports Ltd.',
                            'country' => 'Spain'
                        ),
                        array(
                            'content' => 'Professional team, quality products, and reliable shipping. They understand international trade requirements perfectly.',
                            'author' => 'Li Wei',
                            'company' => 'Asia Pacific Trading',
                            'country' => 'China'
                        )
                    );
                    
                    foreach ($testimonials as $testimonial) :
                    ?>
                        <div class="card animate-on-scroll">
                            <div class="card-content">
                                <div class="flex mb-4">
                                    <?php for ($i = 0; $i < 5; $i++) : ?>
                                        <svg class="w-5 h-5 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                            <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                        </svg>
                                    <?php endfor; ?>
                                </div>
                                
                                <p class="text-muted-foreground mb-6 italic">
                                    "<?php echo esc_html($testimonial['content']); ?>"
                                </p>
                                
                                <div class="border-t pt-4">
                                    <div class="font-semibold"><?php echo esc_html($testimonial['author']); ?></div>
                                    <div class="text-sm text-muted-foreground">
                                        <?php echo esc_html($testimonial['company']); ?>, <?php echo esc_html($testimonial['country']); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- Latest News Section -->
        <section class="section">
            <div class="container">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold mb-4">Latest News & Updates</h2>
                    <p class="text-xl text-muted-foreground max-w-2xl mx-auto">
                        Stay informed about industry trends and company updates
                    </p>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <?php
                    $recent_posts = new WP_Query(array(
                        'posts_per_page' => 3,
                        'post_type' => 'post',
                        'orderby' => 'date',
                        'order' => 'DESC'
                    ));
                    
                    if ($recent_posts->have_posts()) :
                        while ($recent_posts->have_posts()) : $recent_posts->the_post();
                    ?>
                        <article class="card hover:shadow-lg transition-shadow duration-300 animate-on-scroll">
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="relative overflow-hidden rounded-t-lg">
                                    <?php the_post_thumbnail('blog-thumbnail', array('class' => 'w-full h-48 object-cover')); ?>
                                </div>
                            <?php endif; ?>
                            
                            <div class="card-content">
                                <div class="text-sm text-muted-foreground mb-2">
                                    <?php echo get_the_date(); ?>
                                </div>
                                
                                <h3 class="text-xl font-semibold mb-3">
                                    <a href="<?php the_permalink(); ?>" class="text-foreground hover:text-primary transition-colors">
                                        <?php the_title(); ?>
                                    </a>
                                </h3>
                                
                                <p class="text-muted-foreground mb-4">
                                    <?php echo wp_trim_words(get_the_excerpt(), 20); ?>
                                </p>
                                
                                <a href="<?php the_permalink(); ?>" class="btn btn-link p-0">
                                    Read More
                                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                            </div>
                        </article>
                    <?php
                        endwhile;
                        wp_reset_postdata();
                    endif;
                    ?>
                </div>
                
                <div class="text-center mt-12">
                    <a href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>" class="btn btn-outline btn-lg">
                        View All News
                    </a>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="section bg-gradient-to-r from-primary to-primary/80 text-white">
            <div class="container text-center">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Ready to Start Your Export Journey?</h2>
                <p class="text-xl mb-8 text-white/90 max-w-2xl mx-auto">
                    Get in touch with our team today and discover how we can help grow your business globally
                </p>
                <div class="flex flex-wrap gap-4 justify-center">
                    <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-secondary btn-lg">
                        Get Free Quote
                    </a>
                    <a href="tel:<?php echo esc_attr(get_theme_mod('export_theme_company_phone', '+1234567890')); ?>" class="btn btn-outline btn-lg text-white border-white hover:bg-white hover:text-primary">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                        Call Now
                    </a>
                </div>
            </div>
        </section>
        
    </main>
</div>

<?php
get_footer();
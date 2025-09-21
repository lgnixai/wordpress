<?php
/**
 * The template for displaying single product
 *
 * @package Export_Business_Theme
 */

get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        
        <?php while (have_posts()) : the_post(); ?>
            
            <!-- Breadcrumb -->
            <section class="py-4 border-b">
                <div class="container">
                    <?php export_theme_breadcrumbs(); ?>
                </div>
            </section>

            <!-- Product Details -->
            <section class="section">
                <div class="container">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12">
                        
                        <!-- Product Gallery -->
                        <div class="product-gallery">
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="mb-4 overflow-hidden rounded-lg">
                                    <?php the_post_thumbnail('product-large', array(
                                        'class' => 'main-image w-full h-auto',
                                        'id' => 'main-product-image'
                                    )); ?>
                                </div>
                                
                                <?php
                                // Get gallery images (assuming using ACF or custom fields)
                                $gallery_ids = get_post_meta(get_the_ID(), '_product_gallery', true);
                                if ($gallery_ids) :
                                    $gallery_ids = explode(',', $gallery_ids);
                                ?>
                                    <div class="grid grid-cols-4 gap-2">
                                        <div class="cursor-pointer">
                                            <?php the_post_thumbnail('thumbnail', array(
                                                'class' => 'thumbnail w-full h-auto rounded ring-2 ring-primary',
                                                'data-large' => get_the_post_thumbnail_url(get_the_ID(), 'product-large')
                                            )); ?>
                                        </div>
                                        <?php foreach ($gallery_ids as $image_id) : ?>
                                            <div class="cursor-pointer">
                                                <?php echo wp_get_attachment_image($image_id, 'thumbnail', false, array(
                                                    'class' => 'thumbnail w-full h-auto rounded hover:ring-2 hover:ring-primary transition-all',
                                                    'data-large' => wp_get_attachment_image_url($image_id, 'product-large')
                                                )); ?>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                <?php endif; ?>
                            <?php else : ?>
                                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/product-placeholder.jpg'); ?>" 
                                     alt="<?php the_title(); ?>" 
                                     class="w-full h-auto rounded-lg">
                            <?php endif; ?>
                        </div>

                        <!-- Product Info -->
                        <div>
                            <h1 class="text-3xl md:text-4xl font-bold mb-4"><?php the_title(); ?></h1>
                            
                            <?php if ($sku = export_theme_get_product_sku()) : ?>
                                <p class="text-muted-foreground mb-4">SKU: <span class="font-semibold"><?php echo esc_html($sku); ?></span></p>
                            <?php endif; ?>
                            
                            <?php
                            $categories = get_the_terms(get_the_ID(), 'product_category');
                            if ($categories && !is_wp_error($categories)) :
                            ?>
                                <div class="flex flex-wrap gap-2 mb-6">
                                    <?php foreach ($categories as $category) : ?>
                                        <a href="<?php echo esc_url(get_term_link($category)); ?>" 
                                           class="badge badge-secondary">
                                            <?php echo esc_html($category->name); ?>
                                        </a>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>
                            
                            <?php if ($price = export_theme_get_product_price()) : ?>
                                <div class="mb-6">
                                    <span class="text-3xl font-bold text-primary"><?php echo esc_html($price); ?></span>
                                    <span class="text-muted-foreground ml-2">per unit</span>
                                </div>
                            <?php endif; ?>
                            
                            <!-- Product Features -->
                            <?php
                            $features = get_post_meta(get_the_ID(), '_product_features', true);
                            if ($features) :
                            ?>
                                <div class="mb-6">
                                    <h3 class="text-lg font-semibold mb-3">Key Features</h3>
                                    <ul class="space-y-2">
                                        <?php
                                        $features_array = explode("\n", $features);
                                        foreach ($features_array as $feature) :
                                            if (trim($feature)) :
                                        ?>
                                            <li class="flex items-start">
                                                <svg class="w-5 h-5 text-green-500 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                </svg>
                                                <span><?php echo esc_html(trim($feature)); ?></span>
                                            </li>
                                        <?php
                                            endif;
                                        endforeach;
                                        ?>
                                    </ul>
                                </div>
                            <?php endif; ?>
                            
                            <!-- Short Description -->
                            <div class="prose prose-lg mb-6">
                                <?php the_excerpt(); ?>
                            </div>
                            
                            <!-- CTA Buttons -->
                            <div class="flex flex-wrap gap-4 mb-8">
                                <a href="<?php echo esc_url(home_url('/contact?product=' . get_the_ID())); ?>" 
                                   class="btn btn-primary btn-lg">
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                    </svg>
                                    Get Quote
                                </a>
                                <a href="tel:<?php echo esc_attr(get_theme_mod('export_theme_company_phone', '+1234567890')); ?>" 
                                   class="btn btn-outline btn-lg">
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                    </svg>
                                    Call Now
                                </a>
                            </div>
                            
                            <!-- Share Buttons -->
                            <div class="border-t pt-6">
                                <p class="text-sm text-muted-foreground mb-3">Share this product:</p>
                                <div class="flex gap-3">
                                    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(get_permalink()); ?>" 
                                       target="_blank" rel="noopener" 
                                       class="p-2 rounded-full bg-gray-100 hover:bg-primary hover:text-white transition-colors">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                        </svg>
                                    </a>
                                    <a href="https://twitter.com/intent/tweet?url=<?php echo urlencode(get_permalink()); ?>&text=<?php echo urlencode(get_the_title()); ?>" 
                                       target="_blank" rel="noopener" 
                                       class="p-2 rounded-full bg-gray-100 hover:bg-primary hover:text-white transition-colors">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                                        </svg>
                                    </a>
                                    <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo urlencode(get_permalink()); ?>&title=<?php echo urlencode(get_the_title()); ?>" 
                                       target="_blank" rel="noopener" 
                                       class="p-2 rounded-full bg-gray-100 hover:bg-primary hover:text-white transition-colors">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                                        </svg>
                                    </a>
                                    <a href="https://wa.me/?text=<?php echo urlencode(get_the_title() . ' - ' . get_permalink()); ?>" 
                                       target="_blank" rel="noopener" 
                                       class="p-2 rounded-full bg-gray-100 hover:bg-primary hover:text-white transition-colors">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Product Details Tabs -->
            <section class="section pt-0">
                <div class="container">
                    <div class="border-b">
                        <nav class="flex space-x-8" aria-label="Tabs">
                            <button class="tab-button py-4 px-1 border-b-2 font-medium text-sm active" data-tab="description">
                                Description
                            </button>
                            <button class="tab-button py-4 px-1 border-b-2 font-medium text-sm" data-tab="specifications">
                                Specifications
                            </button>
                            <button class="tab-button py-4 px-1 border-b-2 font-medium text-sm" data-tab="shipping">
                                Shipping Info
                            </button>
                        </nav>
                    </div>
                    
                    <div class="mt-8">
                        <!-- Description Tab -->
                        <div class="tab-content" id="description-tab">
                            <div class="prose prose-lg max-w-none">
                                <?php the_content(); ?>
                            </div>
                        </div>
                        
                        <!-- Specifications Tab -->
                        <div class="tab-content hidden" id="specifications-tab">
                            <?php
                            $specifications = get_post_meta(get_the_ID(), '_product_specifications', true);
                            if ($specifications) :
                            ?>
                                <div class="overflow-x-auto">
                                    <table class="w-full text-left">
                                        <tbody>
                                            <?php
                                            $specs_array = explode("\n", $specifications);
                                            foreach ($specs_array as $index => $spec) :
                                                if (trim($spec) && strpos($spec, ':') !== false) :
                                                    list($label, $value) = explode(':', $spec, 2);
                                            ?>
                                                <tr class="<?php echo $index % 2 ? 'bg-gray-50' : ''; ?>">
                                                    <td class="px-4 py-3 font-medium w-1/3"><?php echo esc_html(trim($label)); ?></td>
                                                    <td class="px-4 py-3"><?php echo esc_html(trim($value)); ?></td>
                                                </tr>
                                            <?php
                                                endif;
                                            endforeach;
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            <?php else : ?>
                                <p class="text-muted-foreground">No specifications available for this product.</p>
                            <?php endif; ?>
                        </div>
                        
                        <!-- Shipping Tab -->
                        <div class="tab-content hidden" id="shipping-tab">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                                <div>
                                    <h3 class="text-lg font-semibold mb-4">Shipping Methods</h3>
                                    <ul class="space-y-3">
                                        <li class="flex items-start">
                                            <svg class="w-5 h-5 text-primary mr-3 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                            </svg>
                                            <div>
                                                <strong>Sea Freight:</strong> Most economical for large shipments (20-40 days)
                                            </div>
                                        </li>
                                        <li class="flex items-start">
                                            <svg class="w-5 h-5 text-primary mr-3 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                            </svg>
                                            <div>
                                                <strong>Air Freight:</strong> Faster delivery for urgent orders (5-10 days)
                                            </div>
                                        </li>
                                        <li class="flex items-start">
                                            <svg class="w-5 h-5 text-primary mr-3 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                            </svg>
                                            <div>
                                                <strong>Express Courier:</strong> Door-to-door service (3-5 days)
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                
                                <div>
                                    <h3 class="text-lg font-semibold mb-4">Packaging</h3>
                                    <ul class="space-y-3">
                                        <li class="flex items-start">
                                            <svg class="w-5 h-5 text-primary mr-3 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                            </svg>
                                            <span>Export-quality packaging to ensure product safety</span>
                                        </li>
                                        <li class="flex items-start">
                                            <svg class="w-5 h-5 text-primary mr-3 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                            </svg>
                                            <span>Custom branding and labeling available</span>
                                        </li>
                                        <li class="flex items-start">
                                            <svg class="w-5 h-5 text-primary mr-3 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                            </svg>
                                            <span>Compliance with international shipping standards</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            
                            <div class="mt-8 p-6 bg-blue-50 rounded-lg">
                                <p class="text-sm text-blue-800">
                                    <strong>Note:</strong> Shipping times and costs vary based on destination, order quantity, and selected shipping method. Contact us for a detailed shipping quote.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Related Products -->
            <section class="section bg-gray-50">
                <div class="container">
                    <h2 class="text-2xl md:text-3xl font-bold mb-8 text-center">Related Products</h2>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                        <?php
                        $related_args = array(
                            'post_type' => 'product',
                            'posts_per_page' => 4,
                            'post__not_in' => array(get_the_ID()),
                            'orderby' => 'rand'
                        );
                        
                        // Get products from same category
                        $product_categories = wp_get_post_terms(get_the_ID(), 'product_category', array('fields' => 'ids'));
                        if (!empty($product_categories)) {
                            $related_args['tax_query'] = array(
                                array(
                                    'taxonomy' => 'product_category',
                                    'field'    => 'term_id',
                                    'terms'    => $product_categories
                                )
                            );
                        }
                        
                        $related_products = new WP_Query($related_args);
                        
                        if ($related_products->have_posts()) :
                            while ($related_products->have_posts()) : $related_products->the_post();
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
                        ?>
                    </div>
                </div>
            </section>

            <script>
            // Tab functionality
            document.addEventListener('DOMContentLoaded', function() {
                const tabButtons = document.querySelectorAll('.tab-button');
                const tabContents = document.querySelectorAll('.tab-content');
                
                tabButtons.forEach(button => {
                    button.addEventListener('click', function() {
                        const targetTab = this.getAttribute('data-tab');
                        
                        // Remove active class from all buttons and contents
                        tabButtons.forEach(btn => {
                            btn.classList.remove('active', 'border-primary', 'text-primary');
                            btn.classList.add('border-transparent', 'text-muted-foreground');
                        });
                        tabContents.forEach(content => content.classList.add('hidden'));
                        
                        // Add active class to clicked button and show corresponding content
                        this.classList.add('active', 'border-primary', 'text-primary');
                        this.classList.remove('border-transparent', 'text-muted-foreground');
                        document.getElementById(targetTab + '-tab').classList.remove('hidden');
                    });
                });
                
                // Set initial active tab styles
                const activeButton = document.querySelector('.tab-button.active');
                if (activeButton) {
                    activeButton.classList.add('border-primary', 'text-primary');
                    activeButton.classList.remove('border-transparent', 'text-muted-foreground');
                }
            });
            </script>
            
        <?php endwhile; ?>
        
    </main>
</div>

<?php
get_footer();
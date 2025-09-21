<?php
/**
 * Template Name: About Us
 * 
 * @package Export_Business_Theme
 */

get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        
        <!-- Hero Section -->
        <section class="relative bg-gradient-to-r from-primary/90 to-primary text-white py-20 md:py-28">
            <div class="absolute inset-0 bg-black/20"></div>
            <div class="container relative z-10">
                <div class="max-w-3xl mx-auto text-center">
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 animate-fade-in">
                        About Our Company
                    </h1>
                    <p class="text-xl md:text-2xl text-white/90 animate-slide-in">
                        Leading the way in global trade with integrity, quality, and innovation since 1995
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

        <!-- Company Story -->
        <section class="section">
            <div class="container">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    <div class="animate-on-scroll">
                        <h2 class="text-3xl md:text-4xl font-bold mb-6">Our Story</h2>
                        <div class="prose prose-lg">
                            <p>Founded in 1995, our company began as a small family business with a vision to connect quality manufacturers with global markets. Over the years, we've grown into a trusted name in international trade, serving clients across 50+ countries.</p>
                            
                            <p>Our journey has been marked by a commitment to excellence, innovation, and building lasting partnerships. We've weathered economic changes, adapted to new technologies, and consistently delivered value to our clients.</p>
                            
                            <p>Today, we stand as a leader in export services, offering comprehensive solutions that span product sourcing, quality control, logistics, and customer support. Our success is built on the trust of our clients and the dedication of our team.</p>
                        </div>
                    </div>
                    
                    <div class="animate-on-scroll">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/about-story.jpg'); ?>" 
                             alt="Our Story" 
                             class="rounded-lg shadow-xl w-full h-auto">
                    </div>
                </div>
            </div>
        </section>

        <!-- Mission, Vision, Values -->
        <section class="section bg-gray-50">
            <div class="container">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold mb-4">Our Core Values</h2>
                    <p class="text-xl text-muted-foreground max-w-2xl mx-auto">
                        Guiding principles that drive our business forward
                    </p>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="card text-center animate-on-scroll">
                        <div class="card-content">
                            <div class="inline-flex items-center justify-center w-16 h-16 mb-4 rounded-full bg-primary/10 text-primary">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold mb-3">Our Mission</h3>
                            <p class="text-muted-foreground">
                                To provide exceptional export services that connect quality products with global markets, 
                                creating value for our clients and partners while maintaining the highest standards of integrity.
                            </p>
                        </div>
                    </div>
                    
                    <div class="card text-center animate-on-scroll">
                        <div class="card-content">
                            <div class="inline-flex items-center justify-center w-16 h-16 mb-4 rounded-full bg-primary/10 text-primary">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold mb-3">Our Vision</h3>
                            <p class="text-muted-foreground">
                                To be the most trusted and innovative export partner globally, recognized for our commitment 
                                to quality, sustainability, and fostering long-term business relationships.
                            </p>
                        </div>
                    </div>
                    
                    <div class="card text-center animate-on-scroll">
                        <div class="card-content">
                            <div class="inline-flex items-center justify-center w-16 h-16 mb-4 rounded-full bg-primary/10 text-primary">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold mb-3">Our Values</h3>
                            <p class="text-muted-foreground">
                                Integrity, Quality, Innovation, Customer Focus, Sustainability, and Teamwork form the 
                                foundation of everything we do, ensuring excellence in every transaction.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Team Section -->
        <section class="section">
            <div class="container">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold mb-4">Meet Our Leadership Team</h2>
                    <p class="text-xl text-muted-foreground max-w-2xl mx-auto">
                        Experienced professionals dedicated to your success
                    </p>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <?php
                    $team_members = array(
                        array(
                            'name' => 'John Anderson',
                            'position' => 'CEO & Founder',
                            'image' => get_template_directory_uri() . '/assets/images/team-1.jpg',
                            'description' => '25+ years of experience in international trade'
                        ),
                        array(
                            'name' => 'Sarah Chen',
                            'position' => 'Chief Operating Officer',
                            'image' => get_template_directory_uri() . '/assets/images/team-2.jpg',
                            'description' => 'Expert in supply chain management and logistics'
                        ),
                        array(
                            'name' => 'Michael Roberts',
                            'position' => 'Head of Sales',
                            'image' => get_template_directory_uri() . '/assets/images/team-3.jpg',
                            'description' => 'Leading our global sales and partnerships'
                        ),
                        array(
                            'name' => 'Emily Wang',
                            'position' => 'Quality Director',
                            'image' => get_template_directory_uri() . '/assets/images/team-4.jpg',
                            'description' => 'Ensuring excellence in every product we export'
                        )
                    );
                    
                    foreach ($team_members as $member) :
                    ?>
                        <div class="text-center animate-on-scroll">
                            <div class="relative mb-4 overflow-hidden rounded-lg group">
                                <img src="<?php echo esc_url($member['image']); ?>" 
                                     alt="<?php echo esc_attr($member['name']); ?>" 
                                     class="w-full h-64 object-cover">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            </div>
                            <h3 class="text-lg font-semibold"><?php echo esc_html($member['name']); ?></h3>
                            <p class="text-primary text-sm mb-2"><?php echo esc_html($member['position']); ?></p>
                            <p class="text-sm text-muted-foreground"><?php echo esc_html($member['description']); ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- Achievements -->
        <section class="section bg-primary text-white">
            <div class="container">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold mb-4">Our Achievements</h2>
                    <p class="text-xl text-white/90 max-w-2xl mx-auto">
                        Milestones that showcase our commitment to excellence
                    </p>
                </div>
                
                <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                    <div class="animate-on-scroll">
                        <div class="text-4xl md:text-5xl font-bold mb-2">25+</div>
                        <div class="text-white/80">Years in Business</div>
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
                        <div class="text-4xl md:text-5xl font-bold mb-2">98%</div>
                        <div class="text-white/80">Client Retention</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Certifications -->
        <section class="section">
            <div class="container">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold mb-4">Certifications & Memberships</h2>
                    <p class="text-xl text-muted-foreground max-w-2xl mx-auto">
                        Recognized by leading industry organizations
                    </p>
                </div>
                
                <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-8">
                    <?php
                    $certifications = array(
                        'ISO 9001:2015',
                        'ISO 14001:2015',
                        'AEO Certified',
                        'BSCI Member',
                        'SEDEX Member',
                        'WCA Member'
                    );
                    
                    foreach ($certifications as $index => $cert) :
                    ?>
                        <div class="text-center animate-on-scroll">
                            <div class="h-24 w-24 mx-auto mb-3 bg-gray-100 rounded-lg flex items-center justify-center">
                                <svg class="w-12 h-12 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                                </svg>
                            </div>
                            <p class="text-sm font-medium"><?php echo esc_html($cert); ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="section bg-gradient-to-r from-primary to-primary/80 text-white">
            <div class="container text-center">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Ready to Partner with Us?</h2>
                <p class="text-xl mb-8 text-white/90 max-w-2xl mx-auto">
                    Join hundreds of satisfied clients who trust us for their export needs
                </p>
                <div class="flex flex-wrap gap-4 justify-center">
                    <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-secondary btn-lg">
                        Get Started Today
                    </a>
                    <a href="<?php echo esc_url(get_post_type_archive_link('product')); ?>" class="btn btn-outline btn-lg text-white border-white hover:bg-white hover:text-primary">
                        View Our Products
                    </a>
                </div>
            </div>
        </section>
        
    </main>
</div>

<?php
get_footer();
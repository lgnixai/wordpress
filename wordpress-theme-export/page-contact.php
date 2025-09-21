<?php
/**
 * Template Name: Contact Us
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
                        Get in Touch
                    </h1>
                    <p class="text-xl md:text-2xl text-white/90 animate-slide-in">
                        We're here to help with all your export needs. Reach out to us today!
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

        <!-- Contact Information -->
        <section class="section">
            <div class="container">
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-12">
                    <!-- Phone -->
                    <div class="card text-center animate-on-scroll">
                        <div class="card-content">
                            <div class="inline-flex items-center justify-center w-16 h-16 mb-4 rounded-full bg-primary/10 text-primary">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold mb-2">Call Us</h3>
                            <p class="text-muted-foreground mb-4">Mon-Fri 9:00 AM - 6:00 PM</p>
                            <?php if ($phone = get_theme_mod('export_theme_company_phone')) : ?>
                                <a href="tel:<?php echo esc_attr($phone); ?>" class="text-primary hover:underline font-medium">
                                    <?php echo esc_html($phone); ?>
                                </a>
                            <?php else : ?>
                                <a href="tel:+1234567890" class="text-primary hover:underline font-medium">
                                    +1 (234) 567-890
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="card text-center animate-on-scroll">
                        <div class="card-content">
                            <div class="inline-flex items-center justify-center w-16 h-16 mb-4 rounded-full bg-primary/10 text-primary">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold mb-2">Email Us</h3>
                            <p class="text-muted-foreground mb-4">24/7 Online Support</p>
                            <?php if ($email = get_theme_mod('export_theme_company_email')) : ?>
                                <a href="mailto:<?php echo esc_attr($email); ?>" class="text-primary hover:underline font-medium">
                                    <?php echo esc_html($email); ?>
                                </a>
                            <?php else : ?>
                                <a href="mailto:info@yourcompany.com" class="text-primary hover:underline font-medium">
                                    info@yourcompany.com
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>

                    <!-- Address -->
                    <div class="card text-center animate-on-scroll">
                        <div class="card-content">
                            <div class="inline-flex items-center justify-center w-16 h-16 mb-4 rounded-full bg-primary/10 text-primary">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold mb-2">Visit Us</h3>
                            <p class="text-muted-foreground mb-4">Our Head Office</p>
                            <?php if ($address = get_theme_mod('export_theme_company_address')) : ?>
                                <address class="not-italic">
                                    <?php echo wp_kses_post($address); ?>
                                </address>
                            <?php else : ?>
                                <address class="not-italic">
                                    123 Export Street<br>
                                    Business District<br>
                                    City, State 12345
                                </address>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

                <!-- Contact Form & Map -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                    <!-- Contact Form -->
                    <div class="animate-on-scroll">
                        <h2 class="text-2xl md:text-3xl font-bold mb-6">Send Us a Message</h2>
                        
                        <form id="contact-form" class="needs-validation space-y-6" novalidate>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label for="first_name" class="label mb-2 block">First Name *</label>
                                    <input type="text" id="first_name" name="first_name" required 
                                           class="input" placeholder="John">
                                    <div class="invalid-feedback text-red-500 text-sm mt-1">
                                        Please enter your first name.
                                    </div>
                                </div>
                                
                                <div>
                                    <label for="last_name" class="label mb-2 block">Last Name *</label>
                                    <input type="text" id="last_name" name="last_name" required 
                                           class="input" placeholder="Doe">
                                    <div class="invalid-feedback text-red-500 text-sm mt-1">
                                        Please enter your last name.
                                    </div>
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label for="email" class="label mb-2 block">Email Address *</label>
                                    <input type="email" id="email" name="email" required 
                                           class="input" placeholder="john@example.com">
                                    <div class="invalid-feedback text-red-500 text-sm mt-1">
                                        Please enter a valid email address.
                                    </div>
                                </div>
                                
                                <div>
                                    <label for="phone" class="label mb-2 block">Phone Number</label>
                                    <input type="tel" id="phone" name="phone" 
                                           class="input" placeholder="+1 (234) 567-890">
                                </div>
                            </div>

                            <div>
                                <label for="company" class="label mb-2 block">Company Name</label>
                                <input type="text" id="company" name="company" 
                                       class="input" placeholder="Your Company Ltd.">
                            </div>

                            <div>
                                <label for="subject" class="label mb-2 block">Subject *</label>
                                <select id="subject" name="subject" required class="input">
                                    <option value="">Select a subject</option>
                                    <option value="general">General Inquiry</option>
                                    <option value="quote">Request Quote</option>
                                    <option value="product">Product Information</option>
                                    <option value="partnership">Partnership Opportunity</option>
                                    <option value="support">Customer Support</option>
                                </select>
                                <div class="invalid-feedback text-red-500 text-sm mt-1">
                                    Please select a subject.
                                </div>
                            </div>

                            <div>
                                <label for="message" class="label mb-2 block">Message *</label>
                                <textarea id="message" name="message" rows="5" required 
                                          class="textarea" placeholder="Tell us how we can help you..."></textarea>
                                <div class="invalid-feedback text-red-500 text-sm mt-1">
                                    Please enter your message.
                                </div>
                            </div>

                            <div class="flex items-start">
                                <input type="checkbox" id="newsletter" name="newsletter" 
                                       class="mt-1 mr-2 rounded border-gray-300 text-primary focus:ring-primary">
                                <label for="newsletter" class="text-sm text-muted-foreground">
                                    I would like to receive updates and newsletters about your products and services.
                                </label>
                            </div>

                            <button type="submit" class="btn btn-primary btn-lg w-full">
                                Send Message
                            </button>
                        </form>
                    </div>

                    <!-- Map & Additional Info -->
                    <div class="animate-on-scroll">
                        <h2 class="text-2xl md:text-3xl font-bold mb-6">Find Us on Map</h2>
                        
                        <!-- Map Container -->
                        <div class="bg-gray-200 rounded-lg h-96 mb-8 relative overflow-hidden">
                            <!-- You can integrate Google Maps or other map service here -->
                            <div class="absolute inset-0 flex items-center justify-center">
                                <div class="text-center">
                                    <svg class="w-16 h-16 mx-auto text-gray-400 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                    <p class="text-gray-500">Map integration placeholder</p>
                                </div>
                            </div>
                        </div>

                        <!-- Business Hours -->
                        <div class="card">
                            <div class="card-header">
                                <h3 class="text-lg font-semibold">Business Hours</h3>
                            </div>
                            <div class="card-content">
                                <ul class="space-y-2">
                                    <li class="flex justify-between">
                                        <span class="text-muted-foreground">Monday - Friday</span>
                                        <span class="font-medium">9:00 AM - 6:00 PM</span>
                                    </li>
                                    <li class="flex justify-between">
                                        <span class="text-muted-foreground">Saturday</span>
                                        <span class="font-medium">10:00 AM - 4:00 PM</span>
                                    </li>
                                    <li class="flex justify-between">
                                        <span class="text-muted-foreground">Sunday</span>
                                        <span class="font-medium">Closed</span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Quick Contact -->
                        <div class="mt-6">
                            <h3 class="text-lg font-semibold mb-4">Quick Contact</h3>
                            <div class="flex gap-3">
                                <?php
                                $social_networks = array(
                                    'whatsapp' => array(
                                        'icon' => '<svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>',
                                        'bg' => 'bg-green-500 hover:bg-green-600'
                                    ),
                                    'facebook' => array(
                                        'icon' => '<svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>',
                                        'bg' => 'bg-blue-600 hover:bg-blue-700'
                                    ),
                                    'linkedin' => array(
                                        'icon' => '<svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>',
                                        'bg' => 'bg-blue-700 hover:bg-blue-800'
                                    )
                                );

                                foreach ($social_networks as $network => $data) :
                                    $url = get_theme_mod('export_theme_social_' . $network);
                                    if ($url) :
                                ?>
                                    <a href="<?php echo esc_url($url); ?>" 
                                       target="_blank" rel="noopener" 
                                       class="p-3 rounded-full text-white <?php echo esc_attr($data['bg']); ?> transition-colors">
                                        <?php echo $data['icon']; ?>
                                    </a>
                                <?php
                                    endif;
                                endforeach;
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- FAQ Section -->
        <section class="section bg-gray-50">
            <div class="container">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold mb-4">Frequently Asked Questions</h2>
                    <p class="text-xl text-muted-foreground max-w-2xl mx-auto">
                        Find answers to common questions about our export services
                    </p>
                </div>
                
                <div class="max-w-3xl mx-auto">
                    <div class="space-y-4">
                        <?php
                        $faqs = array(
                            array(
                                'question' => 'What is your minimum order quantity?',
                                'answer' => 'Our minimum order quantity varies by product type. Generally, we require a minimum of one 20ft container for most products. Contact us for specific MOQ details.'
                            ),
                            array(
                                'question' => 'How long does shipping typically take?',
                                'answer' => 'Shipping times depend on the destination and shipping method. Sea freight typically takes 20-40 days, while air freight takes 5-10 days. Express shipping is available for urgent orders.'
                            ),
                            array(
                                'question' => 'Do you provide samples before ordering?',
                                'answer' => 'Yes, we provide samples for most products. Sample costs and shipping fees may apply, which are usually deductible from your bulk order.'
                            ),
                            array(
                                'question' => 'What payment methods do you accept?',
                                'answer' => 'We accept various payment methods including T/T (wire transfer), L/C (Letter of Credit), and escrow services for secure transactions.'
                            ),
                            array(
                                'question' => 'Can you handle custom product specifications?',
                                'answer' => 'Absolutely! We work with manufacturers who can accommodate custom specifications, branding, and packaging requirements.'
                            )
                        );
                        
                        foreach ($faqs as $index => $faq) :
                        ?>
                            <div class="card">
                                <button class="w-full text-left p-6 focus:outline-none faq-toggle" data-target="faq-<?php echo $index; ?>">
                                    <div class="flex items-center justify-between">
                                        <h3 class="text-lg font-semibold"><?php echo esc_html($faq['question']); ?></h3>
                                        <svg class="w-5 h-5 text-muted-foreground transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                        </svg>
                                    </div>
                                </button>
                                <div id="faq-<?php echo $index; ?>" class="hidden px-6 pb-6">
                                    <p class="text-muted-foreground"><?php echo esc_html($faq['answer']); ?></p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </section>

        <script>
        // FAQ Toggle
        document.addEventListener('DOMContentLoaded', function() {
            const faqToggles = document.querySelectorAll('.faq-toggle');
            
            faqToggles.forEach(toggle => {
                toggle.addEventListener('click', function() {
                    const targetId = this.getAttribute('data-target');
                    const target = document.getElementById(targetId);
                    const icon = this.querySelector('svg');
                    
                    if (target.classList.contains('hidden')) {
                        target.classList.remove('hidden');
                        icon.classList.add('rotate-180');
                    } else {
                        target.classList.add('hidden');
                        icon.classList.remove('rotate-180');
                    }
                });
            });
        });
        </script>
        
    </main>
</div>

<?php
get_footer();
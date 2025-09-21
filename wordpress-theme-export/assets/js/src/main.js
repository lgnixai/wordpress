// Main JavaScript for Export Business Theme

document.addEventListener('DOMContentLoaded', function() {
    // Mobile menu toggle
    const mobileMenuToggle = document.querySelector('.mobile-menu-toggle');
    const mobileMenu = document.querySelector('.mobile-menu');
    
    if (mobileMenuToggle && mobileMenu) {
        mobileMenuToggle.addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden');
            
            // Toggle icon
            const icon = this.querySelector('svg');
            if (mobileMenu.classList.contains('hidden')) {
                icon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />';
            } else {
                icon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />';
            }
        });
    }

    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Header scroll effect
    const header = document.getElementById('masthead');
    let lastScroll = 0;
    
    window.addEventListener('scroll', () => {
        const currentScroll = window.pageYOffset;
        
        if (currentScroll <= 0) {
            header.classList.remove('shadow-md');
        } else {
            header.classList.add('shadow-md');
        }
        
        lastScroll = currentScroll;
    });

    // Lazy loading for images
    if ('IntersectionObserver' in window) {
        const imageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    img.src = img.dataset.src;
                    img.classList.remove('lazy');
                    imageObserver.unobserve(img);
                }
            });
        });

        document.querySelectorAll('img.lazy').forEach(img => {
            imageObserver.observe(img);
        });
    }

    // Form validation
    const forms = document.querySelectorAll('.needs-validation');
    forms.forEach(form => {
        form.addEventListener('submit', event => {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }
            form.classList.add('was-validated');
        });
    });

    // Product image gallery
    const productGallery = document.querySelector('.product-gallery');
    if (productGallery) {
        const mainImage = productGallery.querySelector('.main-image');
        const thumbnails = productGallery.querySelectorAll('.thumbnail');
        
        thumbnails.forEach(thumb => {
            thumb.addEventListener('click', function() {
                const newSrc = this.dataset.large;
                mainImage.src = newSrc;
                
                // Update active state
                thumbnails.forEach(t => t.classList.remove('ring-2', 'ring-primary'));
                this.classList.add('ring-2', 'ring-primary');
            });
        });
    }

    // Contact form AJAX submission
    const contactForm = document.getElementById('contact-form');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const formData = new FormData(this);
            formData.append('action', 'submit_contact_form');
            formData.append('nonce', export_theme_ajax.nonce);
            
            const submitButton = this.querySelector('button[type="submit"]');
            const originalText = submitButton.textContent;
            submitButton.textContent = 'Sending...';
            submitButton.disabled = true;
            
            fetch(export_theme_ajax.ajax_url, {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Show success message
                    const successMessage = document.createElement('div');
                    successMessage.className = 'bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4';
                    successMessage.textContent = data.data.message;
                    contactForm.parentNode.insertBefore(successMessage, contactForm);
                    contactForm.reset();
                    
                    // Remove success message after 5 seconds
                    setTimeout(() => {
                        successMessage.remove();
                    }, 5000);
                } else {
                    // Show error message
                    const errorMessage = document.createElement('div');
                    errorMessage.className = 'bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4';
                    errorMessage.textContent = data.data.message || 'An error occurred. Please try again.';
                    contactForm.parentNode.insertBefore(errorMessage, contactForm);
                }
            })
            .catch(error => {
                console.error('Error:', error);
            })
            .finally(() => {
                submitButton.textContent = originalText;
                submitButton.disabled = false;
            });
        });
    }

    // Product filter
    const productFilters = document.querySelectorAll('.product-filter');
    productFilters.forEach(filter => {
        filter.addEventListener('change', function() {
            const category = this.value;
            const products = document.querySelectorAll('.product-item');
            
            products.forEach(product => {
                if (category === 'all' || product.dataset.category === category) {
                    product.style.display = 'block';
                } else {
                    product.style.display = 'none';
                }
            });
        });
    });

    // Animations on scroll
    const animateOnScroll = () => {
        const elements = document.querySelectorAll('.animate-on-scroll');
        
        elements.forEach(element => {
            const elementTop = element.getBoundingClientRect().top;
            const elementBottom = element.getBoundingClientRect().bottom;
            
            if (elementTop < window.innerHeight && elementBottom > 0) {
                element.classList.add('animated');
            }
        });
    };
    
    window.addEventListener('scroll', animateOnScroll);
    animateOnScroll(); // Run on load
});
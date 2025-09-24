<?php
/**
 * Theme setup and functionality for Shadcn Export Theme
 */

if (!defined('SHADCN_EXPORT_VERSION')) {
    define('SHADCN_EXPORT_VERSION', '0.1.0');
}

// Theme setup
add_action('after_setup_theme', function () {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', ['search-form', 'gallery', 'caption', 'comment-list', 'comment-form', 'style', 'script']);
    add_theme_support('editor-styles');
    add_editor_style('dist/styles.css');

    register_nav_menus([
        'primary' => __('Primary Menu', 'shadcn-export'),
        'footer' => __('Footer Menu', 'shadcn-export'),
    ]);
});

// Enqueue assets
add_action('wp_enqueue_scripts', function () {
    $theme_dir = get_template_directory_uri();
    $dist_path = get_template_directory() . '/dist/styles.css';
    if (file_exists($dist_path)) {
        wp_enqueue_style('shadcn-export-styles', $theme_dir . '/dist/styles.css', [], SHADCN_EXPORT_VERSION);
    } else {
        // Fallback to Tailwind CDN for first-time activation (dev convenience)
        wp_enqueue_style('tailwind-cdn', 'https://cdn.jsdelivr.net/npm/tailwindcss@3.4.13/dist/tailwind.min.css', [], null);
    }
    wp_enqueue_script('shadcn-export-js', $theme_dir . '/assets/js/theme.js', ['jquery'], SHADCN_EXPORT_VERSION, true);
});

// Register Custom Post Type: Product
add_action('init', function () {
    $labels = [
        'name' => _x('Products', 'post type general name', 'shadcn-export'),
        'singular_name' => _x('Product', 'post type singular name', 'shadcn-export'),
        'menu_name' => _x('Products', 'admin menu', 'shadcn-export'),
        'name_admin_bar' => _x('Product', 'add new on admin bar', 'shadcn-export'),
        'add_new' => _x('Add New', 'product', 'shadcn-export'),
        'add_new_item' => __('Add New Product', 'shadcn-export'),
        'new_item' => __('New Product', 'shadcn-export'),
        'edit_item' => __('Edit Product', 'shadcn-export'),
        'view_item' => __('View Product', 'shadcn-export'),
        'all_items' => __('All Products', 'shadcn-export'),
        'search_items' => __('Search Products', 'shadcn-export'),
        'parent_item_colon' => __('Parent Products:', 'shadcn-export'),
        'not_found' => __('No products found.', 'shadcn-export'),
        'not_found_in_trash' => __('No products found in Trash.', 'shadcn-export')
    ];

    register_post_type('product', [
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'rewrite' => ['slug' => 'products'],
        'supports' => ['title', 'editor', 'thumbnail', 'excerpt', 'revisions'],
        'menu_icon' => 'dashicons-products',
        'show_in_rest' => true,
    ]);

    register_taxonomy('product_category', ['product'], [
        'label' => __('Product Categories', 'shadcn-export'),
        'rewrite' => ['slug' => 'product-category'],
        'hierarchical' => true,
        'show_in_rest' => true,
    ]);
});

// Simple contact form endpoint (AJAX)
add_action('wp_ajax_nopriv_shadcn_contact', 'shadcn_export_handle_contact');
add_action('wp_ajax_shadcn_contact', 'shadcn_export_handle_contact');
function shadcn_export_handle_contact() {
    check_ajax_referer('shadcn_contact_nonce', 'nonce');

    $name = sanitize_text_field($_POST['name'] ?? '');
    $email = sanitize_email($_POST['email'] ?? '');
    $message = sanitize_textarea_field($_POST['message'] ?? '');

    if (empty($name) || empty($email) || empty($message)) {
        wp_send_json_error(['message' => __('Please fill all fields', 'shadcn-export')], 400);
    }

    $to = get_option('admin_email');
    $subject = sprintf(__('New Contact from %s', 'shadcn-export'), $name);
    $headers = [
        'Content-Type: text/html; charset=UTF-8',
        'Reply-To: ' . $name . ' <' . $email . '>',
    ];
    $body = '<h3>Contact Message</h3>' .
        '<p><strong>Name:</strong> ' . esc_html($name) . '</p>' .
        '<p><strong>Email:</strong> ' . esc_html($email) . '</p>' .
        '<p><strong>Message:</strong><br>' . nl2br(esc_html($message)) . '</p>';

    $sent = wp_mail($to, $subject, $body, $headers);
    if ($sent) {
        wp_send_json_success(['message' => __('Thanks, we will contact you soon.', 'shadcn-export')]);
    }
    wp_send_json_error(['message' => __('Failed to send. Try later.', 'shadcn-export')], 500);
}

// Helper: shadcn style tokens CSS variables via inline root
add_action('wp_head', function () {
    echo '<style id="shadcn-tokens">:root{--background:245 12% 8%;--foreground:0 0% 98%;--card:245 12% 10%;--card-foreground:0 0% 98%;--popover:245 12% 10%;--popover-foreground:0 0% 98%;--primary:220 90% 56%;--primary-foreground:0 0% 100%;--secondary:260 60% 60%;--secondary-foreground:0 0% 100%;--muted:240 6% 20%;--muted-foreground:240 5% 65%;--accent:200 90% 60%;--accent-foreground:0 0% 100%;--destructive:0 84% 60%;--destructive-foreground:0 0% 100%;--border:240 6% 22%;--input:240 6% 22%;--ring:220 90% 56%;--radius:0.75rem}html{color-scheme:dark}</style>';
});

// Add nonce for contact form
add_action('wp_enqueue_scripts', function () {
    wp_localize_script('shadcn-export-js', 'SHADCN', [
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('shadcn_contact_nonce'),
    ]);
}, 20);


<?php
/**
 * Export Business Theme functions and definitions
 *
 * @package Export_Business_Theme
 */

if (!defined('_S_VERSION')) {
    define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function export_theme_setup() {
    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    // Let WordPress manage the document title.
    add_theme_support('title-tag');

    // Enable support for Post Thumbnails on posts and pages.
    add_theme_support('post-thumbnails');

    // Add theme support for custom logo.
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    ));

    // Register navigation menus.
    register_nav_menus(array(
        'primary' => esc_html__('Primary Menu', 'export-theme'),
        'footer'  => esc_html__('Footer Menu', 'export-theme'),
    ));

    // Switch default core markup to output valid HTML5.
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ));

    // Add theme support for selective refresh for widgets.
    add_theme_support('customize-selective-refresh-widgets');

    // Add support for core custom logo.
    add_theme_support('custom-logo', array(
        'height'      => 250,
        'width'       => 250,
        'flex-width'  => true,
        'flex-height' => true,
    ));

    // Add support for Block Styles.
    add_theme_support('wp-block-styles');

    // Add support for full and wide align images.
    add_theme_support('align-wide');

    // Add support for responsive embedded content.
    add_theme_support('responsive-embeds');
}
add_action('after_setup_theme', 'export_theme_setup');

/**
 * Register widget areas.
 */
function export_theme_widgets_init() {
    register_sidebar(array(
        'name'          => esc_html__('Sidebar', 'export-theme'),
        'id'            => 'sidebar-1',
        'description'   => esc_html__('Add widgets here.', 'export-theme'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));

    register_sidebar(array(
        'name'          => esc_html__('Footer 1', 'export-theme'),
        'id'            => 'footer-1',
        'description'   => esc_html__('Add widgets here.', 'export-theme'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));

    register_sidebar(array(
        'name'          => esc_html__('Footer 2', 'export-theme'),
        'id'            => 'footer-2',
        'description'   => esc_html__('Add widgets here.', 'export-theme'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));

    register_sidebar(array(
        'name'          => esc_html__('Footer 3', 'export-theme'),
        'id'            => 'footer-3',
        'description'   => esc_html__('Add widgets here.', 'export-theme'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));

    register_sidebar(array(
        'name'          => esc_html__('Footer 4', 'export-theme'),
        'id'            => 'footer-4',
        'description'   => esc_html__('Add widgets here.', 'export-theme'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'export_theme_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function export_theme_scripts() {
    // Enqueue compiled CSS
    wp_enqueue_style('export-theme-style', get_template_directory_uri() . '/assets/css/main.css', array(), _S_VERSION);
    
    // Enqueue theme style.css for WordPress requirement
    wp_enqueue_style('export-theme-wordpress-style', get_stylesheet_uri(), array(), _S_VERSION);

    // Enqueue JavaScript
    wp_enqueue_script('export-theme-script', get_template_directory_uri() . '/assets/js/main.js', array(), _S_VERSION, true);

    // Localize script for AJAX
    wp_localize_script('export-theme-script', 'export_theme_ajax', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce'    => wp_create_nonce('export_theme_nonce'),
    ));

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'export_theme_scripts');

/**
 * Custom Post Type: Products
 */
function export_theme_register_product_post_type() {
    $labels = array(
        'name'               => _x('Products', 'post type general name', 'export-theme'),
        'singular_name'      => _x('Product', 'post type singular name', 'export-theme'),
        'menu_name'          => _x('Products', 'admin menu', 'export-theme'),
        'name_admin_bar'     => _x('Product', 'add new on admin bar', 'export-theme'),
        'add_new'            => _x('Add New', 'product', 'export-theme'),
        'add_new_item'       => __('Add New Product', 'export-theme'),
        'new_item'           => __('New Product', 'export-theme'),
        'edit_item'          => __('Edit Product', 'export-theme'),
        'view_item'          => __('View Product', 'export-theme'),
        'all_items'          => __('All Products', 'export-theme'),
        'search_items'       => __('Search Products', 'export-theme'),
        'parent_item_colon'  => __('Parent Products:', 'export-theme'),
        'not_found'          => __('No products found.', 'export-theme'),
        'not_found_in_trash' => __('No products found in Trash.', 'export-theme'),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'products'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments'),
        'menu_icon'          => 'dashicons-cart',
    );

    register_post_type('product', $args);
}
add_action('init', 'export_theme_register_product_post_type');

/**
 * Register Product Categories
 */
function export_theme_register_product_category() {
    $labels = array(
        'name'              => _x('Product Categories', 'taxonomy general name', 'export-theme'),
        'singular_name'     => _x('Product Category', 'taxonomy singular name', 'export-theme'),
        'search_items'      => __('Search Categories', 'export-theme'),
        'all_items'         => __('All Categories', 'export-theme'),
        'parent_item'       => __('Parent Category', 'export-theme'),
        'parent_item_colon' => __('Parent Category:', 'export-theme'),
        'edit_item'         => __('Edit Category', 'export-theme'),
        'update_item'       => __('Update Category', 'export-theme'),
        'add_new_item'      => __('Add New Category', 'export-theme'),
        'new_item_name'     => __('New Category Name', 'export-theme'),
        'menu_name'         => __('Categories', 'export-theme'),
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'product-category'),
    );

    register_taxonomy('product_category', array('product'), $args);
}
add_action('init', 'export_theme_register_product_category');

/**
 * Add custom image sizes
 */
function export_theme_custom_image_sizes() {
    add_image_size('product-thumbnail', 400, 400, true);
    add_image_size('product-large', 800, 800, true);
    add_image_size('blog-thumbnail', 600, 400, true);
    add_image_size('hero-banner', 1920, 800, true);
}
add_action('after_setup_theme', 'export_theme_custom_image_sizes');

/**
 * Custom excerpt length
 */
function export_theme_excerpt_length($length) {
    return 20;
}
add_filter('excerpt_length', 'export_theme_excerpt_length', 999);

/**
 * Custom excerpt more
 */
function export_theme_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'export_theme_excerpt_more');

/**
 * Add ACF options page (if ACF is installed)
 */
if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title' => 'Theme General Settings',
        'menu_title' => 'Theme Settings',
        'menu_slug'  => 'theme-general-settings',
        'capability' => 'edit_posts',
        'redirect'   => false
    ));
}

/**
 * Custom navigation walker for Tailwind CSS
 */
require_once get_template_directory() . '/includes/class-tailwind-nav-walker.php';

/**
 * Load custom template tags
 */
require_once get_template_directory() . '/includes/template-tags.php';

/**
 * Load customizer
 */
require_once get_template_directory() . '/includes/customizer.php';
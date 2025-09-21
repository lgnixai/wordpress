<?php
/**
 * Custom template tags for this theme
 *
 * @package Export_Business_Theme
 */

if (!function_exists('export_theme_posted_on')) :
    /**
     * Prints HTML with meta information for the current post-date/time.
     */
    function export_theme_posted_on() {
        $time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
        if (get_the_time('U') !== get_the_modified_time('U')) {
            $time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
        }

        $time_string = sprintf(
            $time_string,
            esc_attr(get_the_date(DATE_W3C)),
            esc_html(get_the_date()),
            esc_attr(get_the_modified_date(DATE_W3C)),
            esc_html(get_the_modified_date())
        );

        $posted_on = sprintf(
            /* translators: %s: post date. */
            esc_html_x('Posted on %s', 'post date', 'export-theme'),
            '<a href="' . esc_url(get_permalink()) . '" rel="bookmark">' . $time_string . '</a>'
        );

        echo '<span class="posted-on text-sm text-muted-foreground">' . $posted_on . '</span>';
    }
endif;

if (!function_exists('export_theme_posted_by')) :
    /**
     * Prints HTML with meta information for the current author.
     */
    function export_theme_posted_by() {
        $byline = sprintf(
            /* translators: %s: post author. */
            esc_html_x('by %s', 'post author', 'export-theme'),
            '<span class="author vcard"><a class="url fn n" href="' . esc_url(get_author_posts_url(get_the_author_meta('ID'))) . '">' . esc_html(get_the_author()) . '</a></span>'
        );

        echo '<span class="byline text-sm text-muted-foreground"> ' . $byline . '</span>';
    }
endif;

if (!function_exists('export_theme_entry_footer')) :
    /**
     * Prints HTML with meta information for the categories, tags and comments.
     */
    function export_theme_entry_footer() {
        // Hide category and tag text for pages.
        if ('post' === get_post_type()) {
            /* translators: used between list items, there is a space after the comma */
            $categories_list = get_the_category_list(esc_html__(', ', 'export-theme'));
            if ($categories_list) {
                /* translators: 1: list of categories. */
                printf('<span class="cat-links">' . esc_html__('Posted in %1$s', 'export-theme') . '</span>', $categories_list);
            }

            /* translators: used between list items, there is a space after the comma */
            $tags_list = get_the_tag_list('', esc_html_x(', ', 'list item separator', 'export-theme'));
            if ($tags_list) {
                /* translators: 1: list of tags. */
                printf('<span class="tags-links">' . esc_html__('Tagged %1$s', 'export-theme') . '</span>', $tags_list);
            }
        }

        if (!is_single() && !post_password_required() && (comments_open() || get_comments_number())) {
            echo '<span class="comments-link">';
            comments_popup_link(
                sprintf(
                    wp_kses(
                        /* translators: %s: post title */
                        __('Leave a Comment<span class="screen-reader-text"> on %s</span>', 'export-theme'),
                        array(
                            'span' => array(
                                'class' => array(),
                            ),
                        )
                    ),
                    wp_kses_post(get_the_title())
                )
            );
            echo '</span>';
        }
    }
endif;

if (!function_exists('export_theme_post_thumbnail')) :
    /**
     * Displays an optional post thumbnail.
     */
    function export_theme_post_thumbnail($size = 'post-thumbnail', $class = '') {
        if (post_password_required() || is_attachment() || !has_post_thumbnail()) {
            return;
        }

        if (is_singular()) :
            ?>
            <div class="post-thumbnail <?php echo esc_attr($class); ?>">
                <?php the_post_thumbnail($size, array('class' => 'w-full h-auto')); ?>
            </div>
        <?php else : ?>
            <a class="post-thumbnail <?php echo esc_attr($class); ?>" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
                <?php
                the_post_thumbnail($size, array(
                    'alt' => the_title_attribute(array(
                        'echo' => false,
                    )),
                    'class' => 'w-full h-auto object-cover'
                ));
                ?>
            </a>
        <?php
        endif;
    }
endif;

/**
 * Get product price
 */
function export_theme_get_product_price($post_id = null) {
    if (!$post_id) {
        $post_id = get_the_ID();
    }
    
    $price = get_post_meta($post_id, '_product_price', true);
    $currency = get_option('export_theme_currency', 'USD');
    
    if ($price) {
        return $currency . ' ' . number_format((float)$price, 2);
    }
    
    return false;
}

/**
 * Get product SKU
 */
function export_theme_get_product_sku($post_id = null) {
    if (!$post_id) {
        $post_id = get_the_ID();
    }
    
    return get_post_meta($post_id, '_product_sku', true);
}

/**
 * Breadcrumbs
 */
function export_theme_breadcrumbs() {
    global $post;
    
    if (!is_home()) {
        echo '<nav class="breadcrumbs text-sm text-muted-foreground mb-4">';
        echo '<a href="' . home_url() . '" class="hover:text-primary transition-colors">Home</a>';
        
        if (is_category() || is_single()) {
            echo ' <span class="mx-2">/</span> ';
            
            if (is_single()) {
                if (get_post_type() == 'product') {
                    echo '<a href="' . get_post_type_archive_link('product') . '" class="hover:text-primary transition-colors">Products</a>';
                    echo ' <span class="mx-2">/</span> ';
                } else {
                    the_category(' <span class="mx-2">/</span> ');
                    echo ' <span class="mx-2">/</span> ';
                }
                echo '<span class="text-foreground">' . get_the_title() . '</span>';
            } else {
                echo '<span class="text-foreground">' . single_cat_title('', false) . '</span>';
            }
        } elseif (is_page()) {
            if ($post->post_parent) {
                $ancestors = array_reverse(get_post_ancestors($post->ID));
                foreach ($ancestors as $ancestor) {
                    echo ' <span class="mx-2">/</span> ';
                    echo '<a href="' . get_permalink($ancestor) . '" class="hover:text-primary transition-colors">' . get_the_title($ancestor) . '</a>';
                }
            }
            echo ' <span class="mx-2">/</span> ';
            echo '<span class="text-foreground">' . get_the_title() . '</span>';
        } elseif (is_search()) {
            echo ' <span class="mx-2">/</span> ';
            echo '<span class="text-foreground">Search Results</span>';
        } elseif (is_404()) {
            echo ' <span class="mx-2">/</span> ';
            echo '<span class="text-foreground">404 Not Found</span>';
        }
        
        echo '</nav>';
    }
}

/**
 * Calculate reading time
 */
function export_theme_reading_time() {
    $content = get_post_field('post_content', get_the_ID());
    $word_count = str_word_count(strip_tags($content));
    $reading_time = ceil($word_count / 200);
    return $reading_time;
}
<?php
/**
 * The sidebar containing the main widget area
 *
 * @package Export_Business_Theme
 */

if (!is_active_sidebar('sidebar-1')) {
    return;
}
?>

<div class="sticky top-24 space-y-6">
    <!-- Search Widget -->
    <div class="card">
        <div class="card-header">
            <h3 class="text-lg font-semibold">Search</h3>
        </div>
        <div class="card-content">
            <form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
                <div class="relative">
                    <input type="search" class="input pl-10" placeholder="Search..." value="<?php echo get_search_query(); ?>" name="s">
                    <svg class="w-5 h-5 absolute left-3 top-1/2 transform -translate-y-1/2 text-muted-foreground" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </div>
            </form>
        </div>
    </div>

    <!-- Recent Posts -->
    <div class="card">
        <div class="card-header">
            <h3 class="text-lg font-semibold">Recent Posts</h3>
        </div>
        <div class="card-content">
            <ul class="space-y-4">
                <?php
                $recent_posts = wp_get_recent_posts(array(
                    'numberposts' => 5,
                    'post_status' => 'publish'
                ));
                
                foreach ($recent_posts as $post) :
                ?>
                    <li>
                        <a href="<?php echo get_permalink($post['ID']); ?>" 
                           class="group block">
                            <h4 class="font-medium text-foreground group-hover:text-primary transition-colors line-clamp-2">
                                <?php echo esc_html($post['post_title']); ?>
                            </h4>
                            <p class="text-sm text-muted-foreground mt-1">
                                <?php echo get_the_date('', $post['ID']); ?>
                            </p>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>

    <!-- Categories -->
    <div class="card">
        <div class="card-header">
            <h3 class="text-lg font-semibold">Categories</h3>
        </div>
        <div class="card-content">
            <ul class="space-y-2">
                <?php
                $categories = get_categories(array(
                    'orderby' => 'count',
                    'order' => 'DESC',
                    'number' => 10
                ));
                
                foreach ($categories as $category) :
                ?>
                    <li>
                        <a href="<?php echo esc_url(get_category_link($category->term_id)); ?>" 
                           class="flex items-center justify-between text-muted-foreground hover:text-primary transition-colors">
                            <span><?php echo esc_html($category->name); ?></span>
                            <span class="text-sm">(<?php echo esc_html($category->count); ?>)</span>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>

    <!-- Tags Cloud -->
    <div class="card">
        <div class="card-header">
            <h3 class="text-lg font-semibold">Popular Tags</h3>
        </div>
        <div class="card-content">
            <div class="flex flex-wrap gap-2">
                <?php
                $tags = get_tags(array(
                    'orderby' => 'count',
                    'order' => 'DESC',
                    'number' => 20
                ));
                
                foreach ($tags as $tag) :
                ?>
                    <a href="<?php echo esc_url(get_tag_link($tag->term_id)); ?>" 
                       class="badge badge-outline hover:bg-primary hover:text-white hover:border-primary transition-all">
                        <?php echo esc_html($tag->name); ?>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <!-- Newsletter Signup -->
    <div class="card bg-primary text-white">
        <div class="card-content">
            <h3 class="text-lg font-semibold mb-2">Subscribe to Newsletter</h3>
            <p class="text-sm mb-4 opacity-90">Get the latest updates and news directly to your inbox.</p>
            <form action="#" method="post" class="space-y-3">
                <input type="email" name="email" placeholder="Your email address" required 
                       class="input bg-white/10 border-white/20 placeholder-white/60 text-white">
                <button type="submit" class="btn btn-secondary btn-sm w-full">
                    Subscribe
                </button>
            </form>
        </div>
    </div>

    <!-- Dynamic Sidebar Widgets -->
    <?php dynamic_sidebar('sidebar-1'); ?>
</div>
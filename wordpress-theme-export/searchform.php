<?php
/**
 * Template for displaying search forms
 *
 * @package Export_Business_Theme
 */
?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
    <label class="sr-only" for="search-field">
        <?php echo esc_html_x('Search for:', 'label', 'export-theme'); ?>
    </label>
    <div class="relative">
        <input type="search" id="search-field" class="input pl-10 pr-12" 
               placeholder="<?php echo esc_attr_x('Search &hellip;', 'placeholder', 'export-theme'); ?>" 
               value="<?php echo get_search_query(); ?>" name="s" />
        <svg class="w-5 h-5 absolute left-3 top-1/2 transform -translate-y-1/2 text-muted-foreground" 
             fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                  d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
        </svg>
        <button type="submit" class="absolute right-2 top-1/2 transform -translate-y-1/2 btn btn-primary btn-sm">
            <?php echo esc_html_x('Search', 'submit button', 'export-theme'); ?>
        </button>
    </div>
</form>
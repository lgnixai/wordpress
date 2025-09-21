<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Woodworking Workshop
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $woodworking_workshop_classes Classes for the body element.
 * @return array
 */
function woodworking_workshop_body_classes( $woodworking_workshop_classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$woodworking_workshop_classes[] = 'group-blog';
	}

	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$woodworking_workshop_classes[] = 'hfeed';
	}

	return $woodworking_workshop_classes;
}
add_filter( 'body_class', 'woodworking_workshop_body_classes' );

if ( ! function_exists( 'wp_body_open' ) ) {
	/**
	 * Backward compatibility for wp_body_open hook.
	 *
	 * @since 1.0.0
	 */
	function wp_body_open() {
		do_action( 'wp_body_open' );
	}
}

 /**
 * Breadcrumb Title
 */
 
 if ( ! function_exists( 'woodworking_workshop_breadcrumb_title' ) ) {
    function woodworking_workshop_breadcrumb_title() {
        
        if ( is_home() || is_front_page() ):
            // Escaping the title of the post or page on the homepage or front page
            esc_html( single_post_title() );
        
        elseif ( is_day() ) : 
            /* translators: %s: Daily Archives. */
            printf( __( 'Daily Archives: %s', 'woodworking-workshop' ), esc_html( get_the_date() ) );
        
        elseif ( is_month() ) :
            /* translators: %s: Monthly Archives. */
            printf( __( 'Monthly Archives: %s', 'woodworking-workshop' ), esc_html( get_the_date( 'F Y' ) ) );
        
        elseif ( is_year() ) :
            /* translators: %s: Yearly Archives. */
            printf( __( 'Yearly Archives: %s', 'woodworking-workshop' ), esc_html( get_the_date( 'Y' ) ) );
            
        elseif ( is_category() ) :
            /* translators: %s: Category Archives. */
            printf( __( 'Category Archives: %s', 'woodworking-workshop' ), esc_html( single_cat_title( '', false ) ) );

        elseif ( is_tag() ) :
            /* translators: %s: Tag Archives. */
            printf( __( 'Tag Archives: %s', 'woodworking-workshop' ), esc_html( single_tag_title( '', false ) ) );
            
        elseif ( is_404() ) :
            printf( esc_html__( 'Error 404', 'woodworking-workshop' ) );
            
        elseif ( is_author() ) :
            /* translators: %s: Author. */
            printf( __( 'Author: %s', 'woodworking-workshop' ), esc_html( get_the_author() ) );        
        
        elseif ( class_exists( 'woocommerce' ) ) : 
            
            if ( is_shop() ) {
                esc_html( woocommerce_page_title() );
            }
            
            elseif ( is_cart() ) {
                esc_html( the_title() );
            }
            
            elseif ( is_checkout() ) {
                esc_html( the_title() );
            }
            
            else {
                esc_html( the_title() );
            }
        else :
            esc_html( the_title() );
        endif;
    }
}


/**
* Breadcrumb Content
*/

function woodworking_workshop_breadcrumbs() {
	
	$showOnHome	= esc_html__('1','woodworking-workshop'); 	// 1 - Show breadcrumbs on the homepage, 0 - don't show
	$delimiter 	= '';   // Delimiter between breadcrumb
	$home 		= esc_html__('Home','woodworking-workshop'); 	// Text for the 'Home' link
	$showCurrent= esc_html__('1','woodworking-workshop'); // Current post/page title in breadcrumb in use 1, Use 0 for don't show
	$before		= '<li class="active">'; // Tag before the current Breadcrumb
	$after 		= '</li>'; // Tag after the current Breadcrumb
	$seprator	= get_theme_mod('woodworking_workshop_breadcrumb_seprator','/');
	global $post;
	$homeLink = home_url();

	if (is_home() || is_front_page()) {
 
	if ($showOnHome == 1) echo '<li><a href="' . esc_url($homeLink) . '">' . esc_html($home) . '</a></li>';
 
	} else {
 
    echo '<li><a href="' . esc_url($homeLink) . '">' . esc_html($home) . '</a> ' . '&nbsp' . wp_kses_post($seprator) . '&nbsp';
 
    if ( is_category() ) 
	{
		$thisCat = get_category(get_query_var('cat'), false);
		if ($thisCat->parent != 0) echo get_category_parents($thisCat->parent, TRUE, ' ' . ' ');
		echo $before . esc_html__('Archive by category','woodworking-workshop').' "' . esc_html(single_cat_title('', false)) . '"' .$after;
		
	} 
	
	elseif ( is_search() ) 
	{
		echo $before . esc_html__('Search results for','woodworking-workshop').' "' . esc_html(get_search_query()) . '"' . $after;
	} 
	
	elseif ( is_day() )
	{
		echo '<a href="' . esc_url(get_year_link(get_the_time('Y'))) . '">' . esc_html(get_the_time('Y')) . '</a> ' . '&nbsp' . wp_kses_post($seprator) . '&nbsp';
		echo '<a href="' . esc_url(get_month_link(get_the_time('Y'),get_the_time('m'))) . '">' . esc_html(get_the_time('F')) . '</a> '. '&nbsp' . wp_kses_post($seprator) . '&nbsp';
		echo $before . esc_html(get_the_time('d')) . $after;
	} 
	
	elseif ( is_month() )
	{
		echo '<a href="' . esc_url(get_year_link(get_the_time('Y'))) . '">' . esc_html(get_the_time('Y')) . '</a> ' . esc_attr($delimiter) . '&nbsp' . wp_kses_post($seprator) . '&nbsp';
		echo $before . esc_html(get_the_time('F')) . $after;
	} 
	
	elseif ( is_year() )
	{
		echo $before . esc_html(get_the_time('Y')) . $after;
	} 
	
	elseif ( is_single() && !is_attachment() )
	{
		if ( get_post_type() != 'post' )
		{
			if ( class_exists( 'WooCommerce' ) ) {
				if ($showCurrent == 1) echo ' ' . esc_attr($delimiter) . '&nbsp&nbsp' . $before . wp_kses_post(get_the_title()) . $after;
			}else{	
			$post_type = get_post_type_object(get_post_type());
			$slug = $post_type->rewrite;
			echo '<a href="' . esc_url($homeLink) . '/' . $slug['slug'] . '/">' . $post_type->labels->singular_name . '</a>';
			if ($showCurrent == 1) echo ' ' . esc_attr($delimiter) . '&nbsp' . wp_kses_post($seprator) . '&nbsp' . $before . wp_kses_post(get_the_title()) . $after;
			}
		}
		else
		{
			$cat = get_the_category(); $cat = $cat[0];
			$cats = get_category_parents($cat, TRUE, ' ' . esc_attr($delimiter) . '&nbsp' . wp_kses_post($seprator) . '&nbsp');
			if ($showCurrent == 0) $cats = preg_replace("#^(.+)\s$delimiter\s$#", "$1", $cats);
			echo $cats;
			if ($showCurrent == 1) echo $before . esc_html(get_the_title()) . $after;
		}
 
    }
		
	elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) {
		if ( class_exists( 'WooCommerce' ) ) {
			if ( is_shop() ) {
				$thisshop = woocommerce_page_title();
			}
		}	
		else  {
			$post_type = get_post_type_object(get_post_type());
			echo $before . $post_type->labels->singular_name . $after;
		}	
	} 
	
	elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) 
	{
		$post_type = get_post_type_object(get_post_type());
		echo $before . $post_type->labels->singular_name . $after;
	} 
	
	elseif ( is_attachment() ) 
	{
		$parent = get_post($post->post_parent);
		$cat = get_the_category($parent->ID); 
		if(!empty($cat)){
		$cat = $cat[0];
		echo get_category_parents($cat, TRUE, ' ' . esc_attr($delimiter) . '&nbsp' . wp_kses_post($seprator) . '&nbsp');
		}
		echo '<a href="' . esc_url(get_permalink($parent)) . '">' . $parent->post_title . '</a>';
		if ($showCurrent == 1) echo ' ' . esc_attr($delimiter) . ' ' . $before . esc_html(get_the_title()) . $after;
 
    } 
	
	elseif ( is_page() && !$post->post_parent ) 
	{
		if ($showCurrent == 1) echo $before . esc_html(get_the_title()) . $after;
	} 
	
	elseif ( is_page() && $post->post_parent ) 
	{
		$parent_id  = $post->post_parent;
		$breadcrumbs = array();
		while ($parent_id) 
		{
			$page = get_page($parent_id);
			$breadcrumbs[] = '<a href="' . esc_url(get_permalink($page->ID)) . '">' . esc_html(get_the_title($page->ID)) . '</a>' . '&nbsp' . wp_kses_post($seprator) . '&nbsp';
			$parent_id  = $page->post_parent;
		}
		
		$breadcrumbs = array_reverse($breadcrumbs);
		for ($i = 0; $i < count($breadcrumbs); $i++) 
		{
			echo $breadcrumbs[$i];
			if ($i != count($breadcrumbs)-1) echo ' ' . esc_attr($delimiter) . '&nbsp' . wp_kses_post($seprator) . '&nbsp';
		}
		if ($showCurrent == 1) echo ' ' . esc_attr($delimiter) . ' ' . $before . esc_html(get_the_title()) . $after;
 
    } 
	elseif ( is_tag() ) 
	{
		echo $before . esc_html__('Posts tagged ','woodworking-workshop').' "' . esc_html(single_tag_title('', false)) . '"' . $after;
	} 
	
	elseif ( is_author() ) {
		global $author;
		$userdata = get_userdata($author);
		echo $before . esc_html__('Articles posted by ','woodworking-workshop').'' . $userdata->display_name . $after;
	} 
	
	elseif ( is_404() ) {
		echo $before . esc_html__('Error 404 ','woodworking-workshop'). $after;
    }
	
    if ( get_query_var('paged') ) {
		if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo '';
		echo ' ( ' . esc_html__('Page','woodworking-workshop') . '' . esc_html(get_query_var('paged')). ' )';
		if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo '';
    }
 
    echo '</li>';
 
  }
}

function woodworking_workshop_default_styles() {
    // Begin Style
    $woodworking_workshop_css = '<style>';

    $woodworking_workshop_logo_width = get_theme_mod('woodworking_workshop_logo_width');
    $woodworking_workshop_css .= '
        .main-header .logo a.custom-logo-link img,.main-header .logo a.custom-logo-link img,.logo img, .mobile-logo img{
            max-width: ' . esc_attr($woodworking_workshop_logo_width) . 'px !important;
            max-height: ' . esc_attr($woodworking_workshop_logo_width) . 'px !important;
            overflow: hidden;
            display: inline-block;
        }
    ';

    // End Style
    $woodworking_workshop_css .= '</style>';

    echo $woodworking_workshop_css;
}

add_action('wp_head', 'woodworking_workshop_default_styles', 999); // Use a priority to ensure it loads after other styles
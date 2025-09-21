<?php 
  $woodworking_workshop_slider = get_theme_mod('woodworking_workshop_slider_setting',true);
  
  if ($woodworking_workshop_slider == '1') :
?>

<section id="slider-section" class="slider-area">
  <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
    <?php 

      $woodworking_workshop_pages = array();
        for ($woodworking_workshop_count = 1; $woodworking_workshop_count <= 3; $woodworking_workshop_count++) {
            $woodworking_workshop_mod = intval(get_theme_mod('woodworking_workshop_slider' . $woodworking_workshop_count));
        
            // Check that the value is valid and not the placeholder value 'page-none-selected'
            if ('page-none-selected' !== $woodworking_workshop_mod && $woodworking_workshop_mod > 0) {
                $woodworking_workshop_pages[] = $woodworking_workshop_mod;
            }
        }

      if( !empty($woodworking_workshop_pages) ) :
        $args = array(
          'post_type' => 'page',
          'post__in' => $woodworking_workshop_pages,
          'orderby' => 'post__in'
        );
        $query = new WP_Query( $args );
        if ( $query->have_posts() ) :
          $i = 1;
    ?>
    <div class="carousel-inner" role="listbox">
      <?php while ( $query->have_posts() ) : $query->the_post(); ?>
        <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
          <?php if ( has_post_thumbnail() ) { ?>
            <img src="<?php echo esc_url( get_the_post_thumbnail_url( null, 'full' ) ); ?>" alt="<?php the_title_attribute(); ?>" />
          <?php } else { ?>
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/slider3.png' ); ?>" alt="Default Image" />
          <?php } ?>
          <div class="carousel-caption">
            <div class="inner_carousel">
              <?php
                $woodworking_workshop_slider_text = get_theme_mod( 'woodworking_workshop_slider_text' );
                if( $woodworking_workshop_slider_text != ''){?>
                <div class="border-heading">
                  <p class="mb-3 slider-top-text"><?php echo esc_html( apply_filters('woodworking_workshop_topheader', $woodworking_workshop_slider_text)); ?></p>
                </div>
              <?php } ?>
              <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
              <p><?php echo esc_html(wp_trim_words(get_the_content(),'30') );?></p>
              <div class="read-btn mt-md-4 mt-3">
                <a href="<?php the_permalink(); ?>"><?php echo esc_html('GET A QUOTE','woodworking-workshop'); ?></a>
              </div>
            </div>
          </div>
        </div>
      <?php $i++; endwhile;
      wp_reset_postdata();?>
    </div>
    <?php else : ?>
      <div class="no-postfound"></div>
    <?php endif;
    endif;?>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" id="prev" data-bs-slide="prev">
    <i class="fas fa-angle-left" aria-hidden="true"></i>
    <span class="screen-reader-text"><?php echo esc_html('Previous','woodworking-workshop'); ?></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next" id="next">
    <i class="fas fa-angle-right" aria-hidden="true"></i>
    <span class="screen-reader-text"><?php echo esc_html('Next','woodworking-workshop'); ?></span>
    </button>
  </div>
</section>
<?php endif; ?>
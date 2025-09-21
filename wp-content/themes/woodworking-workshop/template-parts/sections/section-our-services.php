<?php
$woodworking_workshop_services = get_theme_mod('woodworking_workshop_services_setting', true);
$woodworking_workshop_services_button = get_theme_mod('woodworking_workshop_serv_button_setting', true);

if ($woodworking_workshop_services == '1') :
?>
    <section id="service-offer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 mb-4 col-12">
                    <div class="titlebox text-center text-md-start">
                        <?php if (get_theme_mod('woodworking_workshop_offer_section_tittle') != '') : ?>
                            <div class="sec-title text-md-start text-center">
                                <div class="serv-icon text-center"><i class="fas fa-user"></i></div>
                                <h2 class="my-3 text-center text-uppercase"><?php echo esc_html(get_theme_mod('woodworking_workshop_offer_section_tittle', '')); ?></h2>
                            </div>
                        <?php endif; ?>
                        <?php if ($woodworking_workshop_services_button == '1') : ?>
                            <div class="mt-4 text-md-start text-center serv-sec-btn">
                                <a href="<?php echo esc_url(get_theme_mod('woodworking_workshop_serv_btn_link')); ?>"><?php esc_html_e('VIEW ALL SERVICES', 'woodworking-workshop'); ?></a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8">
                    <div class="row">
                        <?php
                        $woodworking_workshop_post_category = get_theme_mod('woodworking_workshop_offer_section_category','uncategorized');
                        if ($woodworking_workshop_post_category) :
                            $woodworking_workshop_page_query = new WP_Query(array('category_name' => esc_html($woodworking_workshop_post_category, 'woodworking-workshop')));
                            if ($woodworking_workshop_page_query->have_posts()) :
                                while ($woodworking_workshop_page_query->have_posts()) : $woodworking_workshop_page_query->the_post(); ?>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="cat-inner-box mb-4">
                                            <div class="serv-img">
                                                <?php if (has_post_thumbnail()) : ?>
	                                                <div class="serv-img">
	                                                    <?php the_post_thumbnail(); ?>
	                                                </div>
	                                            <?php else : ?>
	                                                <div class="serv-img serv-post-color">
	                                                    
	                                                </div>
	                                            <?php endif; ?>
                                            </div>
                                            <div class="title-box p-3">
                                                <div class="row">
                                                    <div class="col-lg-10 col-md-9 col-9 align-self-center">
                                                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                                    </div>
                                                    <div class="col-lg-2 col-md-3 col-3 align-self-center">
                                                        <p class="post-icon"><a href="<?php the_permalink(); ?>"><i class="fas fa-chevron-right"></i></a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endwhile;
                                wp_reset_postdata();
                            endif;
                        endif;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

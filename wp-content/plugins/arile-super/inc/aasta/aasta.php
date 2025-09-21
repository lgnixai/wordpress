<?php
/**
 * @package    arile-super
 */

require arile_super_plugin_dir . 'inc/aasta/customizer/super-aasta-customizer.php';
require arile_super_plugin_dir . 'inc/aasta/customizer/super-aasta-customizer-options.php';
require arile_super_plugin_dir . 'inc/aasta/customizer/super-aasta-customizer-default.php';
if ( ! function_exists( 'arilesuper_aasta_frontpage_sections' ) ) :
	function arilesuper_aasta_frontpage_sections() {
    $activate_theme_data = wp_get_theme(); // getting current theme data
	$activate_theme = $activate_theme_data->name;
		if('BusinessLab' == $activate_theme){
			require arile_super_plugin_dir . 'inc/aasta/front-page/super-businesslab-slider.php';	
			require arile_super_plugin_dir . 'inc/aasta/front-page/super-businesslab-service.php';
			require arile_super_plugin_dir . 'inc/aasta/front-page/super-businesslab-project.php';
			require arile_super_plugin_dir . 'inc/aasta/front-page/super-businesslab-testimonial.php';	
			require arile_super_plugin_dir . 'inc/aasta/front-page/super-aasta-blog.php';
		}
		elseif('StockPress' == $activate_theme){
			require arile_super_plugin_dir . 'inc/aasta/front-page/super-stockpress-slider.php';	
			require arile_super_plugin_dir . 'inc/aasta/front-page/super-stockpress-service.php';
			require arile_super_plugin_dir . 'inc/aasta/front-page/super-stockpress-project.php';
			require arile_super_plugin_dir . 'inc/aasta/front-page/super-stockpress-testimonial.php';	
			require arile_super_plugin_dir . 'inc/aasta/front-page/super-aasta-blog.php';
		}
		elseif('Architect Studio' == $activate_theme){
			require arile_super_plugin_dir . 'inc/aasta/front-page/super-architect-studio-slider.php';	
			require arile_super_plugin_dir . 'inc/aasta/front-page/super-architect-studio-service.php';
			require arile_super_plugin_dir . 'inc/aasta/front-page/super-architect-studio-project.php';
			require arile_super_plugin_dir . 'inc/aasta/front-page/super-architect-studio-testimonial.php';	
			require arile_super_plugin_dir . 'inc/aasta/front-page/super-aasta-blog.php';
		}
		elseif('Appointech' == $activate_theme){
			require arile_super_plugin_dir . 'inc/aasta/front-page/super-appointech-slider.php';	
			require arile_super_plugin_dir . 'inc/aasta/front-page/super-appointech-service.php';
			require arile_super_plugin_dir . 'inc/aasta/front-page/super-appointech-project.php';
			require arile_super_plugin_dir . 'inc/aasta/front-page/super-appointech-testimonial.php';	
			require arile_super_plugin_dir . 'inc/aasta/front-page/super-aasta-blog.php';
		}
		elseif('Consultexo' == $activate_theme){
			require arile_super_plugin_dir . 'inc/aasta/front-page/super-consultexo-slider.php';	
			require arile_super_plugin_dir . 'inc/aasta/front-page/super-consultexo-service.php';
			require arile_super_plugin_dir . 'inc/aasta/front-page/super-consultexo-project.php';
			require arile_super_plugin_dir . 'inc/aasta/front-page/super-consultexo-testimonial.php';	
			require arile_super_plugin_dir . 'inc/aasta/front-page/super-aasta-blog.php';
		}
		elseif('InteriorHub' == $activate_theme){
			require arile_super_plugin_dir . 'inc/aasta/front-page/super-interiorhub-slider.php';	
			require arile_super_plugin_dir . 'inc/aasta/front-page/super-interiorhub-service.php';
			require arile_super_plugin_dir . 'inc/aasta/front-page/super-interiorhub-project.php';
			require arile_super_plugin_dir . 'inc/aasta/front-page/super-interiorhub-testimonial.php';	
			require arile_super_plugin_dir . 'inc/aasta/front-page/super-aasta-blog.php';
		}
		elseif('AgencyWP' == $activate_theme){
			require arile_super_plugin_dir . 'inc/aasta/front-page/super-agencywp-slider.php';	
			require arile_super_plugin_dir . 'inc/aasta/front-page/super-agencywp-service.php';
			require arile_super_plugin_dir . 'inc/aasta/front-page/super-agencywp-project.php';
			require arile_super_plugin_dir . 'inc/aasta/front-page/super-agencywp-testimonial.php';	
			require arile_super_plugin_dir . 'inc/aasta/front-page/super-aasta-blog.php';
		}
		elseif('BuilderZone' == $activate_theme){
			require arile_super_plugin_dir . 'inc/aasta/front-page/super-builderzone-slider.php';	
			require arile_super_plugin_dir . 'inc/aasta/front-page/super-builderzone-service.php';
			require arile_super_plugin_dir . 'inc/aasta/front-page/super-builderzone-project.php';
			require arile_super_plugin_dir . 'inc/aasta/front-page/super-builderzone-testimonial.php';	
			require arile_super_plugin_dir . 'inc/aasta/front-page/super-aasta-blog.php';
		}
		elseif('GlobalHub' == $activate_theme){
			require arile_super_plugin_dir . 'inc/aasta/front-page/super-globalhub-slider.php';	
			require arile_super_plugin_dir . 'inc/aasta/front-page/super-globalhub-service.php';
			require arile_super_plugin_dir . 'inc/aasta/front-page/super-globalhub-project.php';
			require arile_super_plugin_dir . 'inc/aasta/front-page/super-globalhub-testimonial.php';	
			require arile_super_plugin_dir . 'inc/aasta/front-page/super-aasta-blog.php';
		}
		elseif('Hartford' == $activate_theme){
			require arile_super_plugin_dir . 'inc/aasta/front-page/super-hartford-slider.php';	
			require arile_super_plugin_dir . 'inc/aasta/front-page/super-hartford-service.php';
			require arile_super_plugin_dir . 'inc/aasta/front-page/super-hartford-project.php';
			require arile_super_plugin_dir . 'inc/aasta/front-page/super-hartford-testimonial.php';	
			require arile_super_plugin_dir . 'inc/aasta/front-page/super-aasta-blog.php';
		}
		elseif('House Decor' == $activate_theme){
			require arile_super_plugin_dir . 'inc/aasta/front-page/super-house-decor-slider.php';	
			require arile_super_plugin_dir . 'inc/aasta/front-page/super-house-decor-service.php';
			require arile_super_plugin_dir . 'inc/aasta/front-page/super-house-decor-project.php';
			require arile_super_plugin_dir . 'inc/aasta/front-page/super-house-decor-testimonial.php';	
			require arile_super_plugin_dir . 'inc/aasta/front-page/super-aasta-blog.php';
		}
		elseif('Businesstek' == $activate_theme){
			require arile_super_plugin_dir . 'inc/aasta/front-page/super-businesstek-slider.php';	
			require arile_super_plugin_dir . 'inc/aasta/front-page/super-businesstek-service.php';
			require arile_super_plugin_dir . 'inc/aasta/front-page/super-businesstek-project.php';
			require arile_super_plugin_dir . 'inc/aasta/front-page/super-businesstek-testimonial.php';	
			require arile_super_plugin_dir . 'inc/aasta/front-page/super-aasta-blog.php';
		}
		elseif('Agencyfy' == $activate_theme){
			require arile_super_plugin_dir . 'inc/aasta/front-page/super-agencyfy-slider.php';	
			require arile_super_plugin_dir . 'inc/aasta/front-page/super-agencyfy-service.php';
			require arile_super_plugin_dir . 'inc/aasta/front-page/super-agencyfy-project.php';
			require arile_super_plugin_dir . 'inc/aasta/front-page/super-agencyfy-testimonial.php';	
			require arile_super_plugin_dir . 'inc/aasta/front-page/super-aasta-blog.php';
		}
		elseif('BusinessCore' == $activate_theme){
			require arile_super_plugin_dir . 'inc/aasta/front-page/super-businesscore-slider.php';	
			require arile_super_plugin_dir . 'inc/aasta/front-page/super-businesscore-service.php';
			require arile_super_plugin_dir . 'inc/aasta/front-page/super-businesscore-project.php';
			require arile_super_plugin_dir . 'inc/aasta/front-page/super-businesscore-testimonial.php';	
			require arile_super_plugin_dir . 'inc/aasta/front-page/super-aasta-blog.php';
		}
		else{
			require arile_super_plugin_dir . 'inc/aasta/front-page/super-aasta-slider.php';	
			require arile_super_plugin_dir . 'inc/aasta/front-page/super-aasta-service.php';
			require arile_super_plugin_dir . 'inc/aasta/front-page/super-aasta-project.php';
			require arile_super_plugin_dir . 'inc/aasta/front-page/super-aasta-testimonial.php';	
			require arile_super_plugin_dir . 'inc/aasta/front-page/super-aasta-blog.php';
		}	
	
    }
	add_action( 'arilesuper_aasta_frontpage', 'arilesuper_aasta_frontpage_sections' );
endif;

if ( ! function_exists( 'arilesuper_aasta_top_header_section' ) ) :
	function arilesuper_aasta_top_header_section() {
        require arile_super_plugin_dir . 'inc/aasta/front-page/super-aasta-header.php';		
    }
	add_action( 'arilesuper_aasta_top_header', 'arilesuper_aasta_top_header_section' );
endif;
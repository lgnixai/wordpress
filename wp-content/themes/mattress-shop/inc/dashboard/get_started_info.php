<?php
add_action( 'admin_menu', 'mattress_shop_gettingstarted' );
function mattress_shop_gettingstarted() {
	add_theme_page( esc_html__('About Theme', 'mattress-shop'), esc_html__('About Theme', 'mattress-shop'), 'edit_theme_options', 'mattress-shop-guide-page', 'mattress_shop_guide');
}

function mattress_shop_admin_theme_style() {
   wp_enqueue_style('mattress-shop-custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/dashboard/get_started_info.css');
   wp_enqueue_script('mattress-shop-tab', esc_url( get_template_directory_uri() ) . '/inc/dashboard/js/get_started_tab.js');
}
add_action('admin_enqueue_scripts', 'mattress_shop_admin_theme_style');         

function mattress_shop_notice(){
    global $pagenow;
    if ( is_admin() && ('themes.php' == $pagenow) && isset( $_GET['activated'] ) ) {?>
    <div class="notice notice-success is-dismissible getting_started activation-notice">
		<div class="notice-info">
			<div class="notice-image">
				<img style="width: 100%;max-width: 320px;line-height: 40px;display: inline-block;vertical-align: top;" src="<?php echo esc_url(get_stylesheet_directory_uri()) .'/screenshot.png'; ?>" />
			</div>
			<div class="notice-content">
				<h2><?php esc_html_e( 'Thanks For Installing Mattress Shop, You Rock!', 'mattress-shop' ) ?> </h2>
				<p><?php esc_html_e( 'Take benefit of a variety of features, functionalities, elements, and an exclusive set of customization options to build your own professional charity website. Please Click on the link below to know the theme setup information.', 'mattress-shop' ) ?></p>
				<div style="display: grid;">
					<a class="button notice-btn" href="<?php echo esc_url( admin_url( 'themes.php?page=mattress-shop-guide-page' )); ?>"><?php esc_html_e( 'Getting Started', 'mattress-shop' ) ?></a>
					<a class="button notice-btn" target="_blank" href="<?php echo esc_url( MATTRESS_SHOP_LIVE_DEMO ); ?>"><?php esc_html_e('Pro Demo', 'mattress-shop') ?></a>
					<a  class="button notice-btn" target="_blank" href="<?php echo esc_url( MATTRESS_SHOP_FREE_DOC ); ?>"><?php esc_html_e('Free Doc', 'mattress-shop') ?></a>
					<a  class="button notice-btn" target="_blank" href="<?php echo esc_url( MATTRESS_SHOP_BUY_PRO ); ?>"><?php esc_html_e('Upgrade To Pro', 'mattress-shop') ?></a>
				</div>
			</div>
		</div>
	</div>
	<?php }
}
add_action('admin_notices', 'mattress_shop_notice');

/**
 * Theme Info Page
 */
function mattress_shop_guide() {
	// Theme info
	$mattress_shop_return = add_query_arg( array()) ;
	$mattress_shop_theme = wp_get_theme( 'mattress-shop' ); ?>

	<div class="wrap getting-started">
		<div class="getting-started__header">
		    <div>
                <h2 class="tgmpa-notice-warning"></h2>
            </div>
		</div>
		<div class="tab-sec">
			<div class="tab">
				<button role="tab" class="tablinks home" onclick="mattress_shop_openCity(event, 'bwp_getstart')"><?php esc_html_e( 'About Theme', 'mattress-shop' ); ?></button>
				<button role="tab" class="tablinks" onclick="mattress_shop_openCity(event, 'bwp_setup')"><?php esc_html_e( 'Free Theme Information', 'mattress-shop' ); ?></button>
				<button role="tab" class="tablinks" onclick="mattress_shop_openCity(event, 'bwp_premium_info')"><?php esc_html_e( 'Premium Theme Information', 'mattress-shop' ); ?></button>
				<a class="tablinks tablinks-demo" role="tab" href="<?php echo esc_url( MATTRESS_SHOP_LIVE_DEMO ); ?>" target="_blank">
					<?php esc_html_e( 'Live Demo', 'mattress-shop' ); ?>
				</a>
				<a class="tablinks tablinks-pro" role="tab" href="<?php echo esc_url( MATTRESS_SHOP_BUY_PRO ); ?>" target="_blank">
					<?php esc_html_e( 'Buy Pro', 'mattress-shop' ); ?>
				</a>
			</div>
			<div  id="bwp_getstart" class="tabcontent">
				<div class="row">
					<div class="col-md-5 intro">
						<div class="pad-box">
							<h2><?php esc_html_e( 'Welcome to Mattress Shop ', 'mattress-shop' ); ?>
							<span><?php esc_html_e( 'Version: ', 'mattress-shop' ); ?><?php echo esc_html($mattress_shop_theme['Version']);?></span>
							</h2>
							<span class="intro__version"><?php esc_html_e( 'Congratulations! You are about to use the most easy to use and flexible WordPress theme.', 'mattress-shop' ); ?>
							</span>
							<div class="powered-by">
								<p><strong><?php esc_html_e( 'Theme created by Buy WP Templates', 'mattress-shop' ); ?></strong></p>
								<p>
									<img class="logo" src="<?php echo esc_url(get_template_directory_uri() . '/inc/dashboard/media/theme-logo.png'); ?>"/>
								</p>
						
							</div>
						</div>
					</div>
					<div class="col-md-7">
						<div class="install-plugins">
							<img src="<?php echo esc_url(get_template_directory_uri() . '/inc/dashboard/media/responsive1.png'); ?>" alt="<?php echo esc_attr( 'responsive-image', 'mattress-shop'); ?>" />
						</div>
					</div>
				</div>
				<div class="dashboard__blocks">
					<div class="row">
						<div class="col-md-3">
							<h3><?php esc_html_e( 'Get Support','mattress-shop'); ?></h3>
							<ol>
								<li><a target="_blank" href="<?php echo esc_url( MATTRESS_SHOP_FREE_SUPPORT ); ?>"><?php esc_html_e( 'Free Theme Support','mattress-shop'); ?></a></li>
								<li><a target="_blank" href="<?php echo esc_url( MATTRESS_SHOP_PRO_SUPPORT ); ?>"><?php esc_html_e( 'Premium Theme Support','mattress-shop'); ?></a></li>
							</ol>
						</div>
						<div class="col-md-3">
							<h3><?php esc_html_e( 'Getting Started','mattress-shop'); ?></h3>
							<ol>
								<li><?php esc_html_e( 'Start','mattress-shop'); ?> <a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e( 'Customizing','mattress-shop'); ?></a> <?php esc_html_e( 'your website.','mattress-shop'); ?> </li>
							</ol>
						</div>
						<div class="col-md-3">
							<h3><?php esc_html_e( 'Help Docs','mattress-shop'); ?></h3>
							<ol>
								<li><a target="_blank" href="<?php echo esc_url( MATTRESS_SHOP_FREE_DOC ); ?>"><?php esc_html_e( 'Free Theme Documentation','mattress-shop'); ?></a></li>
								<li><a target="_blank" href="<?php echo esc_url( MATTRESS_SHOP_PRO_DOC ); ?>"><?php esc_html_e( 'Premium Theme Documentation','mattress-shop'); ?></a></li>
							</ol>
						</div>
						<div class="col-md-3">
							<h3><?php esc_html_e( 'Buy Premium','mattress-shop'); ?></h3>
							<ol>
								<a href="<?php echo esc_url( MATTRESS_SHOP_BUY_PRO ); ?>" target="_blank"><?php esc_html_e('Buy Pro', 'mattress-shop'); ?></a>
							</ol>
						</div>
					</div>
				</div>
			</div>
			<div  id="bwp_setup" class="tabcontent">
				<h2 class="tg-docs-section intruction-title" id="section-4"><?php esc_html_e( '1) Setup Mattress Shop Theme', 'mattress-shop' ); ?></h2>
				<div class="row">
					<div class="theme-instruction-block col-md-7">
						<div class="pad-box">
							<p><?php esc_html_e( 'Transform your online business with Mattress Shop, a modern, responsive, and user-friendly theme designed specifically for bedding stores, mattress retailers, furniture outlets, and home décor businesses. Whether you’re selling premium mattresses, pillows, bed frames, or sleep accessories, this theme gives you everything you need to create a professional and engaging online mattress shop. Built with a clean layout and intuitive design, Mattress Shop ensures a smooth shopping experience for your customers. The theme is fully customizable, allowing you to showcase your mattress collections, highlight product features, and present pricing details in a visually appealing way. With optimized page speed and mobile responsiveness, your mattress shop website looks perfect on all devices, ensuring higher engagement and conversions. SEO-friendly coding helps your mattress business rank higher in search results, while the integrated eCommerce support makes managing inventory, processing payments, and tracking orders effortless. Showcase mattress categories, run promotional offers, and build customer trust with testimonials and detailed product descriptions. Perfect for online retailers, bedding suppliers, and home interior businesses, this theme is crafted to meet all the needs of a successful mattress store. Its versatile design also works for furniture shops, bedroom décor stores, and other sleep-related businesses. Take your mattress shop online today and provide customers with a seamless browsing and shopping experience. With its professional design and powerful features, the Mattress Shop theme helps you build credibility, grow your brand, and increase sales with ease.', 'mattress-shop' ); ?><p><br>
							<ol>
								<li><?php esc_html_e( 'Start','mattress-shop'); ?> <a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e( 'Customizing','mattress-shop'); ?></a> <?php esc_html_e( 'your website.','mattress-shop'); ?> </l>
								<li><?php esc_html_e( 'Mattress Shop','mattress-shop'); ?> <a target="_blank" href="<?php echo esc_url( MATTRESS_SHOP_FREE_DOC ); ?>"><?php esc_html_e( 'Documentation','mattress-shop'); ?></a> </li>
							</ol>
						</div>
					</div>
					<div class="col-md-5">
						<div class="pad-box">
								<img class="logo" src="<?php echo esc_url(get_template_directory_uri() . '/inc/dashboard/media/screenshot.png'); ?>"/>
						</div>
					</div>	
				</div>
			</div>
			<div class="col-md-12 text-block tabcontent"  id="bwp_premium_info">
				<h2 class="dashboard-install-title"><?php esc_html_e( '2) Premium Theme Information.','mattress-shop'); ?></h2>
				<div class="row">
					<div class="col-md-7">
						<img src="<?php echo esc_url(get_template_directory_uri() . '/inc/dashboard/media/responsive.png'); ?>" alt="<?php echo esc_attr( 'responsive-image', 'mattress-shop'); ?>">
						<div class="pad-box">
							<h3><?php esc_html_e( 'Pro Theme Description','mattress-shop'); ?></h3>
							<p class="pad-box-p"><?php esc_html_e( 'The Mattress WordPress Theme is designed to give mattress retailers, furniture shops, and home decor businesses a professional online presence with ease. Its modern, responsive layout ensures your store looks visually appealing across all devices, helping you attract andretain customers effortlessly. With clean design elements, smooth navigation, and customizable options, this theme allows you to showcase your products in the best way possible. Whether you sell premium mattresses, orthopedic mattresses, bedding accessories, or related sleep solutions, the theme provides an organized product display that emphasizes comfort and quality. Built with an SEO-friendly structure, fast-loading pages, and a user-friendly design, it allows your business to rank better on search engines and deliver an exceptional shopping experience. The theme’s elegant design, combined with its practical features, ensures your mattress shop stands out from competitors in the digital marketplace.', 'mattress-shop' ); ?><p>
						</div>
					</div>
					<div class="col-md-5 install-plugin-right">
						<div class="pad-box">
							<h3><?php esc_html_e( 'Pro Theme Features','mattress-shop'); ?></h3>
							<div class="dashboard-install-benefit">
								<ul>
									<li><?php esc_html_e( 'Responsive & Mobile-Friendly Design','mattress-shop'); ?></li>
									<li><?php esc_html_e( 'Retina-Ready Display','mattress-shop'); ?></li>
									<li><?php esc_html_e( 'Bootstrap Framework','mattress-shop'); ?></li>
									<li><?php esc_html_e( 'Fast Load Times','mattress-shop'); ?></li>
									<li><?php esc_html_e( 'Extensive Customization Options','mattress-shop'); ?></li>
									<li><?php esc_html_e( 'Interactive CTA Buttons','mattress-shop'); ?></li>
									<li><?php esc_html_e( 'Dynamic Banner Section','mattress-shop'); ?></li>
									<li><?php esc_html_e( 'Testimonial Section','mattress-shop'); ?></li>
									<li><?php esc_html_e( 'Team Showcase Section','mattress-shop'); ?></li>
									<li><?php esc_html_e( 'Pre-Built Shortcodes','mattress-shop'); ?></li>
									<li><?php esc_html_e( 'Clean and Secure Code','mattress-shop'); ?></li>
									<li><?php esc_html_e( 'SEO-Optimized Structure','mattress-shop'); ?></li>
									<li><?php esc_html_e( 'Minimal and Elegant Layout','mattress-shop'); ?></li>
									<li><?php esc_html_e( 'One-Click Demo Import','mattress-shop'); ?></li>
									<li><?php esc_html_e( 'WooCommerce Compatibility','mattress-shop'); ?></li>
									<li><?php esc_html_e( 'Customizable Typography','mattress-shop'); ?></li>
									<li><?php esc_html_e( 'Color Scheme Control','mattress-shop'); ?></li>
									<li><?php esc_html_e( 'Cross-Browser Compatibility','mattress-shop'); ?></li>
									<li><?php esc_html_e( 'Regular Theme Updates','mattress-shop'); ?></li>
									<li><?php esc_html_e( 'Built for Print-on-Demand Businesses','mattress-shop'); ?></li>
									<li><?php esc_html_e( 'Lightweight Theme Architecture','mattress-shop'); ?></li>
									<li><?php esc_html_e( 'Easy Product Showcase','mattress-shop'); ?></li>
									<li><?php esc_html_e( 'Blog Section Included','mattress-shop'); ?></li>
									<li><?php esc_html_e( 'Contact Form Integration','mattress-shop'); ?></li>
									<li><?php esc_html_e( 'Compatible with Page Builders','mattress-shop'); ?></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php }?>

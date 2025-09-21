<?php
/**
 * Theme Page
 *
 * @package Woodworking Workshop
 */

if ( ! defined( 'WOODWORKING_WORKSHOP_FREE_THEME_URL' ) ) {
	define( 'WOODWORKING_WORKSHOP_FREE_THEME_URL', 'https://www.seothemesexpert.com/products/free-woodworking-wordpress-theme' );
}
if ( ! defined( 'WOODWORKING_WORKSHOP_PRO_THEME_URL' ) ) {
	define( 'WOODWORKING_WORKSHOP_PRO_THEME_URL', 'https://www.seothemesexpert.com/products/woodworking-website-template' );
}
if ( ! defined( 'WOODWORKING_WORKSHOP_FREE_DOC_URL' ) ) {
	define( 'WOODWORKING_WORKSHOP_FREE_DOC_URL', 'https://demo.seothemesexpert.com/documentation/woodworking-workshop/' );
}
if ( ! defined( 'WOODWORKING_WORKSHOP_DEMO_THEME_URL' ) ) {
	define( 'WOODWORKING_WORKSHOP_DEMO_THEME_URL', 'https://demo.seothemesexpert.com/woodworking-workshop-pro/' );
}
if ( ! defined( 'WOODWORKING_WORKSHOP_RATE_THEME_URL' ) ) {
    define( 'WOODWORKING_WORKSHOP_RATE_THEME_URL', 'https://wordpress.org/support/theme/woodworking-workshop/reviews/#new-post' );
}
if ( ! defined( 'WOODWORKING_WORKSHOP_SUPPORT_THEME_URL' ) ) {
    define( 'WOODWORKING_WORKSHOP_SUPPORT_THEME_URL', 'https://wordpress.org/support/theme/woodworking-workshop/' );
}
if ( ! defined( 'WOODWORKING_WORKSHOP_THEME_BUNDLE_URL' ) ) {
    define( 'WOODWORKING_WORKSHOP_THEME_BUNDLE_URL', 'https://www.seothemesexpert.com/products/wordpress-theme-bundle' );
}
/**
 * Add theme page
 */
function woodworking_workshop_menu() {
	add_theme_page( esc_html__( 'About Theme', 'woodworking-workshop' ), esc_html__( 'About Theme', 'woodworking-workshop' ), 'edit_theme_options', 'woodworking-workshop-about', 'woodworking_workshop_about_display' );
}
add_action( 'admin_menu', 'woodworking_workshop_menu' );

/**
 * Display About page
 */
function woodworking_workshop_about_display() { ?>
	<div class="wrap about-wrap full-width-layout">
		<h1 class="d-none"></h1>
		<nav class="nav-tab-wrapper wp-clearfix" aria-label="<?php esc_attr_e( 'Secondary menu', 'woodworking-workshop' ); ?>">
			<a href="<?php echo esc_url( admin_url( add_query_arg( array( 'page' => 'woodworking-workshop-about' ), 'themes.php' ) ) ); ?>" class="nav-tab<?php echo ( isset( $_GET['page'] ) && 'woodworking-workshop-about' === $_GET['page'] && ! isset( $_GET['tab'] ) ) ?' nav-tab-active' : ''; ?>"><?php esc_html_e( 'About', 'woodworking-workshop' ); ?></a>

			<a href="<?php echo esc_url( admin_url( add_query_arg( array( 'page' => 'woodworking-workshop-about', 'tab' => 'free_vs_pro' ), 'themes.php' ) ) ); ?>" class="nav-tab<?php echo ( isset( $_GET['tab'] ) && 'free_vs_pro' === $_GET['tab'] ) ?' nav-tab-active' : ''; ?>"><?php esc_html_e( 'Compare free Vs Pro', 'woodworking-workshop' ); ?></a>
		</nav>

		<?php
			woodworking_workshop_main_screen();

			woodworking_workshop_free_vs_pro();
		?>

		<div class="return-to-dashboard">
			<?php if ( current_user_can( 'update_core' ) && isset( $_GET['updated'] ) ) : ?>
				<a href="<?php echo esc_url( self_admin_url( 'update-core.php' ) ); ?>" target="_blank">
					<?php is_multisite() ? esc_html_e( 'Return to Updates', 'woodworking-workshop' ) : esc_html_e( 'Return to Dashboard &rarr; Updates', 'woodworking-workshop' ); ?>
				</a> |
			<?php endif; ?>
			<a href="<?php echo esc_url( self_admin_url() ); ?>" target="_blank"><?php is_blog_admin() ? esc_html_e( 'Go to Dashboard &rarr; Home', 'woodworking-workshop' ) : esc_html_e( 'Go to Dashboard', 'woodworking-workshop' ); ?></a>
		</div>
	</div>
	<?php
}

/**
 * Output the main about screen.
 */
function woodworking_workshop_main_screen() {
	if ( isset( $_GET['page'] ) && 'woodworking-workshop-about' === $_GET['page'] && ! isset( $_GET['tab'] ) ) {
	?>
		<div class="main-col-box">
			<div class="feature-section two-col">
				<div class="card">
					<h2 class="title"><?php esc_html_e( 'Upgrade To Pro', 'woodworking-workshop' ); ?></h2>
					<p><?php esc_html_e( 'Take a step towards excellence, try our premium theme. Use Code', 'woodworking-workshop' ) ?><span class="usecode"><?php esc_html_e('" STEPRO10 "', 'woodworking-workshop'); ?></span></p>
					<p><a href="<?php echo esc_url( WOODWORKING_WORKSHOP_PRO_THEME_URL ); ?>" class="button button-primary" target="_blank"><?php esc_html_e( 'Upgrade Pro', 'woodworking-workshop' ); ?></a></p>
				</div>

				<div class="card">
					<h2 class="title"><?php esc_html_e( 'Lite Documentation', 'woodworking-workshop' ); ?></h2>
					<p><?php esc_html_e( 'The free theme documentation can help you set up the theme.', 'woodworking-workshop' ) ?></p>
					<p><a href="<?php echo esc_url( WOODWORKING_WORKSHOP_FREE_DOC_URL ); ?>" class="button button-primary" target="_blank"><?php esc_html_e( 'Lite Documentation', 'woodworking-workshop' ); ?></a></p>
				</div>

				<div class="card">
					<h2 class="title"><?php esc_html_e( 'Theme Info', 'woodworking-workshop' ); ?></h2>
					<p><?php esc_html_e( 'Know more about Woodworking Workshop.', 'woodworking-workshop' ) ?></p>
					<p><a href="<?php echo esc_url( WOODWORKING_WORKSHOP_FREE_THEME_URL ); ?>" class="button button-primary" target="_blank"><?php esc_html_e( 'Theme Info', 'woodworking-workshop' ); ?></a></p>
				</div>

				<div class="card">
					<h2 class="title"><?php esc_html_e( 'Theme Customizer', 'woodworking-workshop' ); ?></h2>
					<p><?php esc_html_e( 'You can get all theme options in customizer.', 'woodworking-workshop' ) ?></p>
					<p><a href="<?php echo esc_url( admin_url( 'customize.php' ) ); ?>" class="button button-primary" target="_blank"><?php esc_html_e( 'Customize', 'woodworking-workshop' ); ?></a></p>
				</div>

				<div class="card">
					<h2 class="title"><?php esc_html_e( 'Need Support?', 'woodworking-workshop' ); ?></h2>
					<p><?php esc_html_e( 'If you are having some issues with the theme or you want to tweak some thing, you can contact us our expert team will help you.', 'woodworking-workshop' ) ?></p>
					<p><a href="<?php echo esc_url( WOODWORKING_WORKSHOP_SUPPORT_THEME_URL ); ?>" class="button button-primary" target="_blank"><?php esc_html_e( 'Support Forum', 'woodworking-workshop' ); ?></a></p>
				</div>

				<div class="card">
					<h2 class="title"><?php esc_html_e( 'Review', 'woodworking-workshop' ); ?></h2>
					<p><?php esc_html_e( 'If you have loved our theme please show your support with the review.', 'woodworking-workshop' ) ?></p>
					<p><a href="<?php echo esc_url( WOODWORKING_WORKSHOP_RATE_THEME_URL ); ?>" class="button button-primary" target="_blank"><?php esc_html_e( 'Rate Us', 'woodworking-workshop' ); ?></a></p>
				</div>		
			</div>
			<div class="about-theme">
				<?php $woodworking_workshop_theme = wp_get_theme(); ?>

				<h1><?php echo esc_html( $woodworking_workshop_theme ); ?></h1>
				<p class="version"><?php esc_html_e( 'Version', 'woodworking-workshop' ); ?>: <?php echo esc_html($woodworking_workshop_theme['Version']);?></p>
				<div class="theme-description">
					<p class="actions">
						<a href="<?php echo esc_url( WOODWORKING_WORKSHOP_PRO_THEME_URL ); ?>" class="protheme button button-secondary" target="_blank"><?php esc_html_e( 'Upgrade to pro', 'woodworking-workshop' ); ?></a>

						<a href="<?php echo esc_url( WOODWORKING_WORKSHOP_DEMO_THEME_URL ); ?>" class="demo button button-secondary" target="_blank"><?php esc_html_e( 'View Demo', 'woodworking-workshop' ); ?></a>

						<a href="<?php echo esc_url( WOODWORKING_WORKSHOP_THEME_BUNDLE_URL ); ?>" class="bundle button button-secondary" target="_blank"><?php esc_html_e( 'Buy All Themes', 'woodworking-workshop' ); ?></a>

						<a href="<?php echo esc_url( WOODWORKING_WORKSHOP_FREE_DOC_URL ); ?>" class="docs button button-secondary" target="_blank"><?php esc_html_e( 'Theme Instructions', 'woodworking-workshop' ); ?></a>
					</p>
				</div>
				<div class="theme-screenshot">
					<img src="<?php echo esc_url( $woodworking_workshop_theme->get_screenshot() ); ?>" />
				</div>
			</div>
		</div>
	<?php
	}
}

/**
 * Import Demo data for theme using catch themes demo import plugin
 */
function woodworking_workshop_free_vs_pro() {
	if ( isset( $_GET['tab'] ) && 'free_vs_pro' === $_GET['tab'] ) {
	?>
		<div class="wrap about-wrap">

			<div class="theme-description">
				<p class="actions">
					<a href="<?php echo esc_url( WOODWORKING_WORKSHOP_PRO_THEME_URL ); ?>" class="protheme button button-secondary" target="_blank"><?php esc_html_e( 'Upgrade to pro', 'woodworking-workshop' ); ?></a>

					<a href="<?php echo esc_url( WOODWORKING_WORKSHOP_DEMO_THEME_URL ); ?>" class="demo button button-secondary" target="_blank"><?php esc_html_e( 'View Demo', 'woodworking-workshop' ); ?></a>

					<a href="<?php echo esc_url( WOODWORKING_WORKSHOP_THEME_BUNDLE_URL ); ?>" class="bundle button button-secondary" target="_blank"><?php esc_html_e( 'Buy All Themes', 'woodworking-workshop' ); ?></a>

					<a href="<?php echo esc_url( WOODWORKING_WORKSHOP_FREE_DOC_URL ); ?>" class="docs button button-secondary" target="_blank"><?php esc_html_e( 'Theme Instructions', 'woodworking-workshop' ); ?></a>
				</p>
			</div>
			<p class="about-description"><?php esc_html_e( 'View Free vs Pro Table below:', 'woodworking-workshop' ); ?></p>
			<div class="vs-theme-table">
				<table>
					<thead>
						<tr><th scope="col"></th>
							<th class="head" scope="col"><?php esc_html_e( 'Free Theme', 'woodworking-workshop' ); ?></th>
							<th class="head" scope="col"><?php esc_html_e( 'Pro Theme', 'woodworking-workshop' ); ?></th>
						</tr>
					</thead>
					<tbody>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><span><?php esc_html_e( 'One click demo import', 'woodworking-workshop' ); ?></span></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Color pallete and font options', 'woodworking-workshop' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Demo Content has 8 to 10 sections', 'woodworking-workshop' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Rearrange sections as per your need', 'woodworking-workshop' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Internal Pages', 'woodworking-workshop' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Plugin Integration', 'woodworking-workshop' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Ultimate technical support', 'woodworking-workshop' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Access our Support Forums', 'woodworking-workshop' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Get regular updates', 'woodworking-workshop' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Install theme on unlimited domains', 'woodworking-workshop' ); ?></td>
							<td><span class="dashicons dashicons-saved"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Mobile Responsive', 'woodworking-workshop' ); ?></td>
							<td><span class="dashicons dashicons-saved"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Easy Customization', 'woodworking-workshop' ); ?></td>
							<td><span class="dashicons dashicons-saved"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td class="feature feature--empty"></td>
							<td class="feature feature--empty"></td>
							<td headers="comp-2" class="td-btn-2"><a target="_blank" class="sidebar-button single-btn protheme button button-secondary" href="<?php echo esc_url(WOODWORKING_WORKSHOP_PRO_THEME_URL);?>" target="_blank"><?php esc_html_e( 'Go for Premium', 'woodworking-workshop' ); ?></a></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	<?php
	}
}
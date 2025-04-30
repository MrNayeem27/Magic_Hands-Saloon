<?php
/**
 * Theme About Page
 *
 * @package hairsaloon
 * @since 1.0
 */

function hairsaloon_theme_page_admin_style( $hook ) {
	if ( 'appearance_page_hairsaloon-theme' === $hook ) {
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_enqueue_style(
			'hairsaloon-theme-admin-style',
			get_theme_file_uri( 'assets/css/about-admin.css' ),
			array(),
			$version_string
		);
	}
}
add_action( 'admin_enqueue_scripts', 'hairsaloon_theme_page_admin_style' );

/**
 * Add theme page
 */
function hairsaloon_menu() {
	add_theme_page( esc_html__( 'Hairsaloon', 'hairsaloon' ), esc_html__( 'Hairsaloon Theme Info', 'hairsaloon' ), 'edit_theme_options', 'hairsaloon-theme', 'hairsaloon_theme_page_display' );
}
add_action( 'admin_menu', 'hairsaloon_menu' );

/**
 * Display About page
 */
function hairsaloon_theme_page_display() {
	$theme = wp_get_theme();
	
	if ( is_child_theme() ) {
		$theme = wp_get_theme()->parent();
	}
	?>
	
	<div id="welcome-panel" class="welcome-panel">
		<div class="welcome-panel-content">
			<div class="welcome-panel-header">
				<h2><?php echo esc_html( $theme->Name ); ?></h2>
				<p><?php esc_html_e( 'Free Full Site Editing WordPress Theme', 'hairsaloon' ); ?></p>
				<div class="logo-panel">
					<a href="<?php echo esc_url('https://alexathemes.net/','hairsaloon'); ?>"><img src="<?php echo esc_url( get_template_directory_uri().'/assets/img/logo.png' ); ?>"></a>
				</div>
			</div>
			
			<div class="welcome-panel-column-container">
				<div class="container-wrap">
					<div class="welcome-panel-column two-columns">
						<!-- <div class="welcome-panel-icon-pages"></div> -->
						<div class="welcome-panel-column-content">
							<h3><?php esc_html_e( 'Getting Started with Hairsaloon!', 'hairsaloon' ); ?></h3>
							<p><?php esc_html_e( 'Awesome! Hairsaloon has been installed and activated successfully. Now, you can start building your dream website with a wide range of highly-customizable block patterns, templates, and template parts available in this astounding theme.', 'hairsaloon' ); ?></p>
						</div>
					</div>
					
					<div class="welcome-panel-column two-columns">
						<div class="welcome-panel-column-content">
							<h3><?php esc_html_e( 'More Features with Hairsaloon Pro Theme', 'hairsaloon' ); ?></h3>
							<p><?php esc_html_e( 'To get more features and unique home page sections, we recommend you activate the Hairsaloon Pro. With the pro theme installed, get more options like google fonts, colors, sliders, page template, shortcodes and more.', 'hairsaloon' ); ?></p>
							<a target="_blank" class="button green button-primary button-hero green" href="https://alexathemes.net/themes/hairsalon-wordpress-theme/"><?php esc_html_e( 'Buy Hairsaloon Pro', 'hairsaloon' ); ?></a>
						</div>
					</div>
					
				</div>
				<div class="sidebar">
					<div class="welcome-panel-column important-links">
					<!-- <div class="welcome-panel-icon-pages"></div> -->
					<div class="welcome-panel-column-content">
						<h3><?php esc_html_e( 'Important Links', 'hairsaloon' ); ?></h3>
						<a target="_blank" href="<?php echo esc_url( 'https://alexathemes.net/themes/hairsalon-wordpress-theme/' ); ?>"><?php esc_html_e( 'Theme Info', 'hairsaloon' ); ?></a>
						<a target="_blank" href="https://live-demo.online/hairsalon/"><?php esc_html_e( 'View Demo', 'hairsaloon' ); ?></a>
						<a target="_blank" href="<?php echo esc_url( 'https://alexathemes.net/forums/' ); ?>"><?php esc_html_e( 'Support', 'hairsaloon' ); ?></a>
					</div>
				</div>
				
				<div class="welcome-panel-column review">
					<!-- <div class="welcome-panel-icon-pages"></div> -->
					<div class="welcome-panel-column-content">
						<h3><?php esc_html_e( 'Leave us a review', 'hairsaloon' ); ?></h3>
						<p><?php esc_html_e( 'Loved Hairsaloon? Feel free to leave your feedback. Your opinion helps us reach more audiences!', 'hairsaloon' ); ?></p>
						<a href="https://wordpress.org/support/theme/hairsaloon/reviews/" class="button button-primary button-hero" style="text-decoration: none;" target="_blank"><?php esc_html_e( 'Review', 'hairsaloon' ); ?></a>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>
	<?php
}

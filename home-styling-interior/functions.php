<?php
/**
 * Home Styling Interior functions and definitions
 *
 * @package Home Styling Interior
 * @since 1.8
 */

if ( ! function_exists( 'home_styling_interior_support' ) ) :
	function home_styling_interior_support() {

		load_theme_textdomain( 'home-styling-interior', get_template_directory() . '/languages' );

		add_theme_support( 'html5', array(
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		add_theme_support( 'custom-background', apply_filters( 'home_styling_interior_custom_background', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        )));
		
		add_theme_support( 'wp-block-styles' );

		add_editor_style( 'style.css' );

		define('HOME_STYLING_INTERIOR_BUY_NOW',__('https://www.themescarts.com/products/home-styling-wordpress-theme/','home-styling-interior'));
		define('HOME_STYLING_INTERIOR_FOOTER_BUY_NOW',__('https://www.themescarts.com/products/free-interior-wordpress-theme/','home-styling-interior'));
		define('HOME_STYLING_INTERIOR_BUNDLE_LINK',__('https://www.themescarts.com/products/wordpress-theme-bundle/','home-styling-interior'));

	}
endif;
add_action( 'after_setup_theme', 'home_styling_interior_support' );

/*-------------------------------------------------------------
 Enqueue Styles
--------------------------------------------------------------*/

if ( ! function_exists( 'home_styling_interior_styles' ) ) :
	function home_styling_interior_styles() {
		// Register theme stylesheet.
		wp_enqueue_style('home-styling-interior-style', get_stylesheet_uri(), array(), wp_get_theme()->get('version') );
		wp_enqueue_style('home-styling-interior-style-blocks', get_template_directory_uri(). '/assets/css/blocks.css');
		wp_enqueue_style('home-styling-interior-style-responsive', get_template_directory_uri(). '/assets/css/responsive.css');
		wp_enqueue_style('home-styling-interior-owl-carousel', get_template_directory_uri(). '/assets/css/owl.carousel.css');
		wp_style_add_data( 'home-styling-interior-basic-style', 'rtl', 'replace' );

		//animation
		wp_enqueue_script( 'wow-js', get_theme_file_uri( '/assets/js/wow.js' ), array( 'jquery' ), true );

		wp_enqueue_script( 'home-styling-interior-owl-carousel', get_theme_file_uri( '/assets/js/owl.carousel.js' ), array( 'jquery' ), true );

		wp_enqueue_script( 'home-styling-interior-custom-js', get_theme_file_uri( '/assets/js/theme.js' ), array( 'jquery' ), true );
		
		wp_enqueue_style( 'animate-css', get_template_directory_uri().'/assets/css/animate.css' );
	}
endif;
add_action( 'wp_enqueue_scripts', 'home_styling_interior_styles' );

function home_styling_interior_enqueue_admin_script($hook) {
    // Enqueue admin JS for notices
    wp_enqueue_script('home-styling-interior-welcome-notice', get_template_directory_uri() . '/inc/home-styling-interior-theme-info-page/js/home-styling-interior-welcome-notice.js', array('jquery'), '', true);
    
    // Localize script to pass data to JavaScript
    wp_localize_script('home-styling-interior-welcome-notice', 'home_styling_interior_localize', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('home_styling_interior_welcome_nonce'),
        'dismiss_nonce' => wp_create_nonce('home_styling_interior_welcome_nonce'), // Nonce for dismissal
        'redirect_url' => admin_url('themes.php?page=home-styling-interior-theme-info-page')
    ));
}
add_action('admin_enqueue_scripts', 'home_styling_interior_enqueue_admin_script');

if (!function_exists('home_styling_interior_enable_plugin_autoupdate')) {

    add_filter('auto_update_plugin', function ($update, $item) {
        if ($item->slug === 'siteready-coming-soon-under-construction') {
            return true;
        }
        return $update;
    }, 10, 2);

}

function home_styling_interior_plugin_update_available($slug, $file) {
    $updates = get_site_transient('update_plugins');

    if (!isset($updates->response[$slug . '/' . $file])) {
        return false; // No update available
    }

    return $updates->response[$slug . '/' . $file];
}

require get_template_directory() .'/inc/TGM/tgm.php';

// Add block patterns
require get_template_directory() . '/inc/block-patterns.php';
require_once get_theme_file_path( 'inc/home-styling-interior-theme-info-page/templates/class-theme-notice.php' );
require_once get_theme_file_path( 'inc/home-styling-interior-theme-info-page/class-theme-info.php' );

require_once get_theme_file_path( '/inc/customizer.php' );


?>
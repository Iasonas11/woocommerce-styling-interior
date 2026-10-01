<?php
/**
 * Theme Info Page
 *
 * @package Home Styling Interior
 */

function home_styling_interior_theme_details() {
	add_theme_page( 'Themes', 'Home Styling Interior Theme', 'edit_theme_options', 'home-styling-interior-theme-info-page', 'theme_details_display', null );
}
add_action( 'admin_menu', 'home_styling_interior_theme_details' );

function theme_details_display() {

	include_once 'templates/theme-details.php';

}

add_action( 'admin_enqueue_scripts', 'home_styling_interior_theme_details_style' );

function home_styling_interior_theme_details_style() {
    wp_register_style( 'home_styling_interior_theme_details_css', get_template_directory_uri() . '/inc/home-styling-interior-theme-info-page/css/theme-details.css', false, '1.0.0' );
    wp_enqueue_style( 'home_styling_interior_theme_details_css' );
}
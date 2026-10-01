<?php   
/**
 * Block Patterns
 *
 * @package Home Styling Interior
 * @since 1.8
 */

/**
 * Registers block patterns and categories.
 *
 * @since 1.0
 *
 * @return void
 */
function home_styling_interior_register_block_patterns() {
	$block_pattern_categories = array(
		'home-styling-interior' => array( 'label' => esc_html__( 'Home Styling Interior Patterns', 'home-styling-interior' ) ),
		'pages'    => array( 'label' => esc_html__( 'Pages', 'home-styling-interior' ) ),
	);

	$block_pattern_categories = apply_filters( 'home_styling_interior_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}

	$block_patterns = array(
		'header-default',
		'header-banner',
		'interior-services-section',
		'archive-inner-banner',
		'inner-banner',
		'post-one-column',
		'post-two-column',
		'latest-blog',
		'hidden-404',
		'sidebar',
		'footer-default',
	);

	$block_patterns = apply_filters( 'home_styling_interior_block_patterns', $block_patterns );

	foreach ( $block_patterns as $block_pattern ) {
		$pattern_file = get_parent_theme_file_path( '/inc/patterns/' . $block_pattern . '.php' );

		register_block_pattern(
			'home-styling-interior/' . $block_pattern,
			require $pattern_file
		);
	}
}
add_action( 'init', 'home_styling_interior_register_block_patterns', 9 );
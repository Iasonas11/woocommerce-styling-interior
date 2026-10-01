<?php 
/**
 * Header Archive Inner Banner
 */
return array(
	'title'      => esc_html__( 'Archive Inner Banner', 'home-styling-interior' ),
	'categories' => array( 'home-styling-interior', 'Archive Inner Banner' ),
	'content'    => '<!-- wp:cover {"url":"' . esc_url( get_theme_file_uri( '/assets/images/inner-banner.png' ) ) . '","id":12,"dimRatio":30,"overlayColor":"background","isUserOverlayColor":true,"focalPoint":{"x":0.52,"y":0.49},"minHeight":450,"minHeightUnit":"px","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-cover" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;min-height:450px"><img class="wp-block-cover__image-background wp-image-12" alt="" src="' . esc_url( get_theme_file_uri( '/assets/images/inner-banner.png' ) ) . '" style="object-position:52% 49%" data-object-fit="cover" data-object-position="52% 49%"/><span aria-hidden="true" class="wp-block-cover__background has-background-background-color has-background-dim-30 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:query-title {"type":"archive","textAlign":"center","level":2,"style":{"typography":{"fontSize":"60px"},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground"} /--></div></div>
<!-- /wp:cover -->',
);
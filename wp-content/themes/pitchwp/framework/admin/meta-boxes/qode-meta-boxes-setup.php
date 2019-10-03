<?php

function pitch_qode_meta_boxes_map_init() {
	global $pitch_qode_framework;
	
	require_once( get_template_directory() . '/framework/admin/meta-boxes/page/map.php' );
	require_once( get_template_directory() . '/framework/admin/meta-boxes/portfolio/map.php' );
	require_once( get_template_directory() . '/framework/admin/meta-boxes/slides/map.php' );
	require_once( get_template_directory() . '/framework/admin/meta-boxes/post/map.php' );
	require_once( get_template_directory() . '/framework/admin/meta-boxes/testimonials/map.php' );
	require_once( get_template_directory() . '/framework/admin/meta-boxes/carousels/map.php' );
	require_once( get_template_directory() . '/framework/admin/meta-boxes/masonry_gallery/map.php' );
}

add_action( 'after_setup_theme', 'pitch_qode_meta_boxes_map_init', 1 );
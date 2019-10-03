<?php

function pitch_qode_admin_map_init() {
	global $pitch_qode_framework;
	
	do_action( 'pitch_qode_action_before_options_map' );
	
	require_once( get_template_directory() . '/framework/admin/options/10.general/map.php' );
	require_once( get_template_directory() . '/framework/admin/options/20.logo/map.php' );
	require_once( get_template_directory() . '/framework/admin/options/30.header/map.php' );
	require_once( get_template_directory() . '/framework/admin/options/40.footer/map.php' );
	require_once( get_template_directory() . '/framework/admin/options/50.title/map.php' );
	require_once( get_template_directory() . '/framework/admin/options/60.fonts/map.php' );
	require_once( get_template_directory() . '/framework/admin/options/70.elements/map.php' );
	require_once( get_template_directory() . '/framework/admin/options/75.sidebar/map.php' );
	require_once( get_template_directory() . '/framework/admin/options/80.blog/map.php' );
	require_once( get_template_directory() . '/framework/admin/options/90.portfolio/map.php' );
	require_once( get_template_directory() . '/framework/admin/options/95.slider/map.php' );
	require_once( get_template_directory() . '/framework/admin/options/96.verticalsplitslider/map.php' );
	require_once( get_template_directory() . '/framework/admin/options/100.social/map.php' );
	require_once( get_template_directory() . '/framework/admin/options/110.error404/map.php' );
	require_once( get_template_directory() . '/framework/admin/options/130.parallax/map.php' );
	require_once( get_template_directory() . '/framework/admin/options/140.contentbottom/map.php' );
	
	if ( pitch_qode_is_visual_composer_installed() && version_compare( pitch_qode_get_vc_version(), '4.4.2' ) >= 0 ) {
		require_once( get_template_directory() . '/framework/admin/options/144.visualcomposer/map.php' );
	} else {
		$pitch_qode_framework->qodeOptions->addOption( "enable_grid_elements", "no" );
	}
	if ( pitch_qode_contact_form_7_installed() ) {
		require_once( get_template_directory() . '/framework/admin/options/145.contactform7/map.php' );
	}
	
	require_once( get_template_directory() . '/framework/admin/options/146.maintenance/map.php' );
	require_once( get_template_directory() . '/framework/admin/options/147.login/map.php' );
	
	if ( pitch_qode_is_woocommerce_installed() ) {
		require_once( get_template_directory() . '/framework/admin/options/150.woocommerce/map.php' );
	}
	require_once( get_template_directory() . '/framework/admin/options/160.reset/map.php' );
}

add_action( 'after_setup_theme', 'pitch_qode_admin_map_init', 0 );
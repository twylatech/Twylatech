<?php

if ( ! function_exists( 'pitch_core_register_widgets' ) ) {
	function pitch_core_register_widgets() {
		$widgets = array(
			'PitchQodeCallToAction',
			'PitchQodeLatestPostsMenu',
			'PitchQodeLatestPosts',
			'PitchQodeStickySidebar',
			'PitchQodeInstagramWidget'
		);
		
		if ( pitch_qode_is_woocommerce_installed() ) {
			$widgets[] = 'PitchQodeWoocommerceDropdownCart';
		}
		
		foreach ( $widgets as $widget ) {
			register_widget( $widget );
		}
	}
	
	add_action( 'widgets_init', 'pitch_core_register_widgets' );
}
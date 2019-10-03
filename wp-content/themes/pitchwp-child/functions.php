<?php

/*** Child Theme Function  ***/

if ( ! function_exists( 'pitch_qode_child_theme_enqueue_scripts' ) ) {
	function pitch_qode_child_theme_enqueue_scripts() {
		$parent_style = 'pitch-default-style';
		
		wp_enqueue_style( 'pitch-child-style', get_stylesheet_directory_uri() . '/style.css', array( $parent_style ) );
	}
	
	add_action( 'wp_enqueue_scripts', 'pitch_qode_child_theme_enqueue_scripts' );
}
<?php

//load post-post-types
require_once PITCH_CORE_MODULES_PATH . '/post-types/post-type-interface.php';
require_once PITCH_CORE_MODULES_PATH . '/shortcodes/shortcode-interface.php';

require_once PITCH_CORE_MODULES_PATH . '/post-types/portfolio/portfolio-register.php';
require_once PITCH_CORE_MODULES_PATH . '/post-types/portfolio/shortcodes/portfolio-list.php';
require_once PITCH_CORE_MODULES_PATH . '/post-types/portfolio/shortcodes/portfolio-slider.php';
require_once PITCH_CORE_MODULES_PATH . '/post-types/testimonials/testimonials-register.php';
require_once PITCH_CORE_MODULES_PATH . '/post-types/testimonials/shortcodes/testimonials.php';
require_once PITCH_CORE_MODULES_PATH . '/post-types/carousels/carousel-register.php';
require_once PITCH_CORE_MODULES_PATH . '/post-types/carousels/shortcodes/carousel.php';
require_once PITCH_CORE_MODULES_PATH . '/post-types/slider/slider-register.php';
require_once PITCH_CORE_MODULES_PATH . '/post-types/slider/tax-custom-fields.php';
require_once PITCH_CORE_MODULES_PATH . '/post-types/slider/shortcodes/slider.php';
require_once PITCH_CORE_MODULES_PATH . '/post-types/masonry-gallery/masonry-gallery-register.php';
require_once PITCH_CORE_MODULES_PATH . '/post-types/masonry-gallery/shortcodes/masonry-gallery.php';
require_once PITCH_CORE_MODULES_PATH . '/post-types/post-types-register.php'; //this has to be loaded last

//load shortcodes inteface
include_once PITCH_CORE_MODULES_PATH . '/shortcodes/shortcodes.php';
require_once PITCH_CORE_MODULES_PATH . '/shortcodes/shortcode-loader.php';

include_once PITCH_CORE_MODULES_PATH . '/instagram/qode-instagram-api.php';
include_once PITCH_CORE_MODULES_PATH . '/qode-like.php';
include_once PITCH_CORE_MODULES_PATH . '/qode-seo.php';
include_once PITCH_CORE_MODULES_PATH . '/widgets/helper.php';

add_filter( 'widget_text', 'do_shortcode' );
add_filter( 'call_to_action_widget', 'do_shortcode' );

if ( ! function_exists( 'pitch_qode_include_meta_boxes' ) ) {
	function pitch_qode_include_meta_boxes() {
		if ( class_exists( 'WP_Block_Type' ) ) {
			add_action( 'admin_head', 'pitch_qode_meta_box_add' );
		} else {
			add_action( 'add_meta_boxes', 'pitch_qode_meta_box_add' );
		}
	}
	
	add_action( 'after_setup_theme', 'pitch_qode_include_meta_boxes' );
}

if ( ! function_exists( 'pitch_qode_create_meta_box_handler' ) ) {
	function pitch_qode_create_meta_box_handler( $box, $key ) {
		
		add_meta_box(
			'qodef-meta-box-'.$key,
			$box->title,
			'pitch_qode_render_meta_box',
			$box->scope,
			'advanced',
			'high',
			array( 'box' => $box)
		);
	}
}

if ( ! function_exists( 'pitch_qode_get_carousel_slider_array' ) ) {
	/**
	 * Function that returns associative array of carousels,
	 * where key is term slug and value is term name
	 * @return array
	 */
	function pitch_qode_get_carousel_slider_array() {
		$carousels_array = array();
		$terms           = get_terms( 'carousels_category' );
		
		if ( is_array( $terms ) && count( $terms ) ) {
			$carousels_array[''] = '';
			foreach ( $terms as $term ) {
				$carousels_array[ $term->slug ] = $term->name;
			}
		}
		
		return $carousels_array;
	}
}

if ( ! function_exists( 'pitch_qode_get_carousel_slider_array_vc' ) ) {
	/**
	 * Function that returns array of carousels formatted for Visual Composer
	 *
	 * @return array array of carousels where key is term title and value is term slug
	 *
	 * @see pitch_qode_get_carousel_slider_array
	 */
	function pitch_qode_get_carousel_slider_array_vc() {
		return array_flip( pitch_qode_get_carousel_slider_array() );
	}
}

if ( ! function_exists( 'pitch_qode_add_user_custom_fields' ) ) {
	function pitch_qode_add_user_custom_fields( $user_contact ) {
		/**
		 * Function that add custom user fields
		 **/
		$user_contact['facebook']  = esc_html__( 'Facebook', 'select-core' );
		$user_contact['twitter']   = esc_html__( 'Twitter', 'select-core' );
		$user_contact['instagram'] = esc_html__( 'Instagram', 'select-core' );
		$user_contact['dribbble']  = esc_html__( 'Dribbble', 'select-core' );
		$user_contact['linkedin']  = esc_html__( 'LinkedIn', 'select-core' );
		
		return $user_contact;
	}
	
	add_filter( 'user_contactmethods', 'pitch_qode_add_user_custom_fields' );
}

if ( ! function_exists( 'pitch_qode_attachment_field_custom_size' ) ) {
	function pitch_qode_attachment_field_custom_size( $form_fields, $post ) {
		$field_value                                                        = get_post_meta( $post->ID, 'qode_portfolio_single_predefined_size', true );
		$form_fields['qode_portfolio_single_predefined_size']               = array(
			'label' => esc_html__( 'Masonry Size', 'select-core' ),
			'input' => 'text',
			'value' => $field_value ? $field_value : ''
		);
		$form_fields["qode_portfolio_single_predefined_size"]["extra_rows"] = array(
			"row1" => esc_html__( "Enter 'large' (twice the size of default image) or 'huge' (three times the size of default image) for Masonry Gallery templates on Portfolio Single Pages.", 'select-core' )
		);
		
		return $form_fields;
	}
	
	add_filter( 'attachment_fields_to_edit', 'pitch_qode_attachment_field_custom_size', 10, 2 );
}

if ( ! function_exists( 'pitch_qode_attachment_field_custom_size_save' ) ) {
	function pitch_qode_attachment_field_custom_size_save( $post, $attachment ) {
		if ( isset( $attachment['qode_portfolio_single_predefined_size'] ) ) {
			update_post_meta( $post['ID'], 'qode_portfolio_single_predefined_size', $attachment['qode_portfolio_single_predefined_size'] );
		}
		
		return $post;
	}
	
	add_filter( 'attachment_fields_to_save', 'pitch_qode_attachment_field_custom_size_save', 10, 2 );
}

if ( ! function_exists( 'pitch_qode_maintenance_mode' ) ) {
	/**
	 * Function that redirects user to desired landing page if maintenance mode is turned on in options
	 */
	function pitch_qode_maintenance_mode() {
		$protocol = is_ssl() ? "https://" : "http://";
		if ( pitch_qode_options()->getOptionValue( 'qode_maintenance_mode' ) == 'yes' && pitch_qode_options()->getOptionValue( 'qode_maintenance_page' ) && ! in_array( $GLOBALS['pagenow'], array( 'wp-login.php', 'wp-register.php' ) ) && ! is_admin() && ! is_user_logged_in()
		     && $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] != get_permalink( pitch_qode_options()->getOptionValue( 'qode_maintenance_page' ) )
		) {
			wp_redirect( get_permalink( pitch_qode_options()->getOptionValue( 'qode_maintenance_page' ) ) );
			exit;
		}
	}
}

if ( ! function_exists( 'pitch_qode_initial_maintenance' ) ) {
	/**
	 * Function that initalize maintenance function
	 */
	function pitch_qode_initial_maintenance() {
		if ( pitch_qode_options()->getOptionValue( 'qode_maintenance_mode' ) == 'yes' ) {
			add_action( 'init', 'pitch_qode_maintenance_mode', 2 );
		}
	}
	
	add_action( 'init', 'pitch_qode_initial_maintenance', 1 );
}

if ( ! function_exists( 'pitch_qode_redirect_logout' ) ) {
	function pitch_qode_redirect_logout() {
		
		if ( pitch_qode_options()->getOptionValue( 'qode_enable_login_page' ) == 'yes' && pitch_qode_options()->getOptionValue( 'qode_login_page' ) ) {
			wp_redirect( get_permalink( pitch_qode_options()->getOptionValue( 'qode_login_page' ) ) );
			exit();
		}
	}
	
	add_action( 'wp_logout', 'pitch_qode_redirect_logout' );
}
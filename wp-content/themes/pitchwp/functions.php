<?php

include_once get_template_directory() . '/theme-includes.php';

if ( ! function_exists( 'pitch_qode_rewrite_rules_on_theme_activation' ) ) {
	/**
	 * Function that flushes rewrite rules on deactivation
	 */
	function pitch_qode_rewrite_rules_on_theme_activation() {
		flush_rewrite_rules();
	}
	
	add_action( 'after_switch_theme', 'pitch_qode_rewrite_rules_on_theme_activation' );
}

if ( ! function_exists( 'pitch_qode_add_theme_support' ) ) {
	function pitch_qode_add_theme_support() {
		
		//add support for feed links
		add_theme_support( 'automatic-feed-links' );
		
		//add support for post formats
		add_theme_support( 'post-formats', array( 'gallery', 'link', 'quote', 'video', 'audio' ) );
		
		//add theme support for post thumbnails
		add_theme_support( 'post-thumbnails' );
		
		//add theme support for title tag
		add_theme_support( 'title-tag' );
		
		//defined content width variable
		$GLOBALS['content_width'] = 1300;
		
		load_theme_textdomain( 'pitch', get_template_directory() . '/languages' );
		
		//add theme support for editor style
		add_editor_style( PITCH_FRAMEWORK_ROOT . '/admin/assets/css/editor-style.css' );
		
		add_image_size( 'qode-pitch-portfolio-related', 306, 229, true );
		add_image_size( 'qode-pitch-portfolio-square', 550, 550, true );
		add_image_size( 'qode-pitch-portfolio-landscape', 800, 600, true );
		add_image_size( 'qode-pitch-portfolio-portrait', 600, 800, true );
		add_image_size( 'qode-pitch-portfolio_masonry_wide', 1000, 500, true );
		add_image_size( 'qode-pitch-portfolio_masonry_tall', 500, 1000, true );
		add_image_size( 'qode-pitch-portfolio_masonry_large', 1000, 1000, true );
		add_image_size( 'qode-pitch-portfolio_masonry_with_space', 700);
		add_image_size( 'qode-pitch-blog_image_format_link_quote', 1100, 500, true);
		
		if ( pitch_qode_options()->getOptionValue( 'header_bottom_appearance' ) !== "stick_with_left_right_menu" || pitch_qode_is_side_header() ) {
			//header and left menu location
			register_nav_menus(
				array(
					'top-navigation' => esc_html__( 'Top Navigation', 'pitch' )
				)
			);
		}
		
		if ( pitch_qode_options()->getOptionValue( 'enable_popup_menu' ) == "yes" && pitch_qode_is_side_header() ) {
			//popup menu location
			register_nav_menus(
				array(
					'popup-navigation' => esc_html__( 'Fullscreen Navigation', 'pitch' )
				)
			);
		}
		
		if ( pitch_qode_options()->getOptionValue( 'header_bottom_appearance' ) === "stick_with_left_right_menu" && ! pitch_qode_is_side_header() ) {
			//header left menu location
			register_nav_menus(
				array(
					'left-top-navigation' => esc_html__( 'Left Top Navigation', 'pitch' )
				)
			);
			
			//header right menu location
			register_nav_menus(
				array(
					'right-top-navigation' => esc_html__( 'Right Top Navigation', 'pitch' )
				)
			);
		}
	}
	
	add_action( 'after_setup_theme', 'pitch_qode_add_theme_support' );
}

if ( ! function_exists( 'pitch_qode_styles' ) ) {
	function pitch_qode_styles() {
		global $wp_styles;
		global $is_chrome;
		global $is_safari;
		
		wp_enqueue_style( 'wp-mediaelement' );
		
		wp_enqueue_style( "pitch-default-style", PITCH_ROOT . "/style.css" );
		
		do_action( 'pitch_qode_action_enqueue_before_main_css' );
		
		wp_enqueue_style( "pitch-stylesheet", PITCH_CSS_ROOT . "/stylesheet.min.css" );
		
		wp_enqueue_style( 'pitch-ie9-style', PITCH_CSS_ROOT . '/ie9_stylesheet.css' );
		$wp_styles->add_data( 'pitch-ie9-style', 'conditional', 'IE 9' );
		
		//is Chrome on Mac
		if ( $is_chrome && strpos( getenv( 'HTTP_USER_AGENT' ), "Macintosh; Intel Mac OS X" ) !== false ) {
			wp_enqueue_style( "pitch-mac-style", PITCH_CSS_ROOT . "/mac_stylesheet.css" );
		}
		
		//is Chrome or Safari?
		if ( $is_chrome || $is_safari ) {
			//include style for webkit browsers only
			wp_enqueue_style( "pitch-webkit-style", PITCH_CSS_ROOT . "/webkit_stylesheet.css" );
		}
		
		if ( pitch_qode_load_blog_assets() ) {
			wp_enqueue_style( "pitch-blog", PITCH_CSS_ROOT . "/blog.min.css" );
		}
		
		$responsiveness = "yes";
		if ( pitch_qode_options()->getOptionValue( 'responsiveness' ) ) {
			$responsiveness = pitch_qode_options()->getOptionValue( 'responsiveness' );
		}
		
		if ( $responsiveness != "no" ) {
			wp_enqueue_style( "pitch-responsive", PITCH_CSS_ROOT . "/responsive.min.css" );
		}
		
		if ( pitch_qode_is_woocommerce_installed() && pitch_qode_load_woo_assets() ) {
			wp_enqueue_style( "pitch-woocommerce", PITCH_CSS_ROOT . "/woocommerce.min.css" );
			
			if ( $responsiveness != "no" ) {
				wp_enqueue_style( "pitch-woocommerce_responsive", PITCH_CSS_ROOT . "/woocommerce_responsive.min.css" );
			}
		}
		
		//include icon collections styles
		$icon_collections = pitch_qode_icon_collections();
		if ( is_array( $icon_collections->iconCollections ) && count( $icon_collections->iconCollections ) ) {
			foreach ( $icon_collections->iconCollections as $collection_key => $collection_obj ) {
				wp_enqueue_style( 'pitch-' . $collection_key, $collection_obj->styleUrl );
			}
		}
		
		if ( file_exists( PITCH_CSS_ROOT_DIR . '/style_dynamic.css' ) && pitch_qode_is_css_folder_writable() && ! is_multisite() ) {
			wp_enqueue_style( 'pitch-style-dynamic', PITCH_CSS_ROOT . '/style_dynamic.css', array(), filemtime( PITCH_CSS_ROOT_DIR . '/style_dynamic.css' ) );
		} else if ( file_exists( PITCH_CSS_ROOT_DIR . '/style_dynamic_ms_id_' . pitch_qode_get_multisite_blog_id() . '.css' ) && pitch_qode_is_css_folder_writable() && is_multisite() ) {
			wp_enqueue_style( 'pitch-style-dynamic', PITCH_CSS_ROOT . '/style_dynamic_ms_id_' . pitch_qode_get_multisite_blog_id() . '.css', array(), filemtime( PITCH_CSS_ROOT_DIR . '/style_dynamic_ms_id_' . pitch_qode_get_multisite_blog_id() . '.css' ) );
		} else {
			wp_enqueue_style( 'pitch-style-dynamic', PITCH_CSS_ROOT . '/style_dynamic_callback.php' ); // Temporary case for Major update
		}
		
		if ( $responsiveness != "no" ):
			//include proper styles
			if ( file_exists( PITCH_CSS_ROOT_DIR . '/style_dynamic_responsive.css' ) && pitch_qode_is_css_folder_writable() && ! is_multisite() ) {
				wp_enqueue_style( 'pitch-style-dynamic-responsive', PITCH_CSS_ROOT . '/style_dynamic_responsive.css', array(), filemtime( PITCH_CSS_ROOT_DIR . '/style_dynamic_responsive.css' ) );
			} else if ( file_exists( PITCH_CSS_ROOT_DIR . '/style_dynamic_responsive_ms_id_' . pitch_qode_get_multisite_blog_id() . '.css' ) && pitch_qode_is_css_folder_writable() && is_multisite() ) {
				wp_enqueue_style( 'pitch-style-dynamic-responsive', PITCH_CSS_ROOT . '/style_dynamic_responsive_ms_id_' . pitch_qode_get_multisite_blog_id() . '.css', array(), filemtime( PITCH_CSS_ROOT_DIR . '/style_dynamic_responsive_ms_id_' . pitch_qode_get_multisite_blog_id() . '.css' ) );
			} else {
				wp_enqueue_style( 'pitch-style-dynamic-responsive', PITCH_CSS_ROOT . '/style_dynamic_responsive_callback.php' ); // Temporary case for Major update
			}
		endif;
		
		//is left menu activated and is responsive turned on?
		if ( pitch_qode_is_side_header() && $responsiveness != "no" && pitch_qode_options()->getOptionValue( 'vertical_area_type' ) != 'hidden' ) {
			wp_enqueue_style( "pitch-vertical-responsive", PITCH_CSS_ROOT . "/vertical_responsive.min.css" );
		}
		
		if ( pitch_qode_return_landing_variable() ) {
			wp_enqueue_style( "pitch-landing-fancybox", get_home_url() . "/demo-files/landing/css/jquery.fancybox.css" );
			wp_enqueue_style( "pitch-landing", get_home_url() . "/demo-files/landing/css/landing_stylesheet_stripped.css" );
		}
		
		if ( pitch_qode_is_visual_composer_installed() ) {
			wp_enqueue_style( 'js_composer_front' );
		}
		
		$custom_css = pitch_qode_options()->getOptionValue( 'custom_css' );
		if ( ! empty( $custom_css ) ) {
			if ( $responsiveness != "no" ) {
				wp_add_inline_style( 'pitch-style-dynamic-responsive', $custom_css );
			} else {
				wp_add_inline_style( 'pitch-style-dynamic', $custom_css );
			}
		}
		
		$font_weight_str = '100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';
		$font_subset_str = 'latin,latin-ext';
		
		//default fonts
		$default_font_family = array(
			'Open Sans',
			'Montserrat'
		);
		
		$modified_default_font_family = array();
		foreach ( $default_font_family as $default_font ) {
			$modified_default_font_family[] = $default_font . ':' . str_replace( ' ', '', $font_weight_str );
		}
		
		$default_font_string = implode( '|', $modified_default_font_family );
		
		$available_font_options = array();
		
		$simple_fonts_array = pitch_qode_framework()->qodeOptions->getOptionsByType( 'fontsimple' );
		if ( is_array( $simple_fonts_array ) && count( $simple_fonts_array ) > 0 ) {
			foreach ( $simple_fonts_array as $simple_font ) {
				array_push( $available_font_options, $simple_font );
			}
		}
		
		$option_fonts_array = pitch_qode_framework()->qodeOptions->getOptionsByType( 'font' );
		if ( is_array( $option_fonts_array ) && count( $option_fonts_array ) > 0 ) {
			foreach ( $option_fonts_array as $option_font ) {
				array_push( $available_font_options, $option_font );
			}
		}
		
		$additional_fonts_args  = array( 'post_status' => 'publish', 'post_type' => 'slides', 'posts_per_page' => - 1 );
		$additional_fonts_query = new WP_Query( $additional_fonts_args );
		
		if ( $additional_fonts_query->have_posts() ):
			while ( $additional_fonts_query->have_posts() ) : $additional_fonts_query->the_post();
				$post_id = get_the_ID();
				
				if ( get_post_meta( $post_id, "qode_slide-title-font-family", true ) != "" && ! pitch_qode_is_native_font( get_post_meta( $post_id, "qode_slide-title-font-family", true ) ) ) {
					array_push( $available_font_options, get_post_meta( $post_id, "qode_slide-title-font-family", true ) );
				}
				if ( get_post_meta( $post_id, "qode_slide-text-font-family", true ) != "" && ! pitch_qode_is_native_font( get_post_meta( $post_id, "qode_slide-text-font-family", true ) ) ) {
					array_push( $available_font_options, get_post_meta( $post_id, "qode_slide-text-font-family", true ) );
				}
				if ( get_post_meta( $post_id, "qode_slide-subtitle-font-family", true ) != "" && ! pitch_qode_is_native_font( get_post_meta( $post_id, "qode_slide-subtitle-font-family", true ) ) ) {
					array_push( $available_font_options, get_post_meta( $post_id, "qode_slide-subtitle-font-family", true ) );
				}
			endwhile;
		endif;
		
		wp_reset_postdata();
		
		//define available font options array
		$fonts_array = array();
		if ( ! empty( $available_font_options ) ) {
			foreach ( $available_font_options as $font_option_value ) {
				$font_option_string = $font_option_value . ':' . $font_weight_str;
				
				if ( ! in_array( str_replace( '+', ' ', $font_option_value ), $default_font_family ) && ! in_array( $font_option_string, $fonts_array ) && ! pitch_qode_is_native_font( pitch_qode_options()->getOptionValue( $font_option_value ) ) && pitch_qode_options()->getOptionValue( $font_option_value ) !== '-1' ) {
					$fonts_array[] = $font_option_string;
				}
			}
			
			$fonts_array = array_diff( $fonts_array, array( '-1:' . $font_weight_str ) );
		}
		
		$google_fonts_string = implode( '|', $fonts_array );
		
		$protocol = is_ssl() ? 'https:' : 'http:';
		
		//is google font option checked anywhere in theme?
		if ( is_array( $fonts_array ) && count( $fonts_array ) > 0 ) {
			
			//include all checked fonts
			$fonts_full_list      = $default_font_string . '|' . str_replace( '+', ' ', $google_fonts_string );
			$fonts_full_list_args = array(
				'family' => urlencode( $fonts_full_list ),
				'subset' => urlencode( $font_subset_str ),
			);
			
			$pitch_global_fonts = add_query_arg( $fonts_full_list_args, $protocol . '//fonts.googleapis.com/css' );
			wp_enqueue_style( 'pitch-google-fonts', esc_url_raw( $pitch_global_fonts ), array(), '1.0.0' );
			
		} else {
			//include default google font that theme is using
			$default_fonts_args          = array(
				'family' => urlencode( $default_font_string ),
				'subset' => urlencode( $font_subset_str ),
			);
			$pitch_global_fonts = add_query_arg( $default_fonts_args, $protocol . '//fonts.googleapis.com/css' );
			wp_enqueue_style( 'pitch-google-fonts', esc_url_raw( $pitch_global_fonts ), array(), '1.0.0' );
		}
	}
	
	add_action( 'wp_enqueue_scripts', 'pitch_qode_styles' );
}

if ( ! function_exists( 'pitch_qode_scripts' ) ) {
	function pitch_qode_scripts() {
		global $is_IE;
		
		//init theme core scripts
		wp_enqueue_script( 'jquery-ui-core' );
		wp_enqueue_script( 'jquery-ui-widget' );
		wp_enqueue_script( 'jquery-ui-accordion' );
		wp_enqueue_script( 'jquery-ui-datepicker' );
		wp_enqueue_script( 'jquery-effects-core' );
		wp_enqueue_script( 'jquery-effects-fade' );
		wp_enqueue_script( 'jquery-effects-scale' );
		wp_enqueue_script( 'jquery-effects-slide' );
		wp_enqueue_script( 'jquery-ui-position' );
		wp_enqueue_script( 'jquery-ui-slider' );
		wp_enqueue_script( 'jquery-ui-tabs' );
		wp_enqueue_script( 'jquery-form' );
		wp_enqueue_script( 'wp-mediaelement' );
		
		// 3rd party JavaScripts that we used in our theme
		wp_enqueue_script( 'doubletaptogo', PITCH_JS_ROOT . '/plugins/doubletaptogo.js', array( 'jquery' ), false, true );
		wp_enqueue_script( 'modernizr', PITCH_JS_ROOT . '/plugins/modernizr.min.js', array( 'jquery' ), false, true );
		wp_enqueue_script( 'appear', PITCH_JS_ROOT . '/plugins/jquery.appear.js', array( 'jquery' ), false, true );
		wp_enqueue_script( 'hoverIntent' );
		wp_enqueue_script( 'absoluteCounter', PITCH_JS_ROOT . '/plugins/absoluteCounter.min.js', array( 'jquery' ), false, true );
		wp_enqueue_script( 'easypiechart', PITCH_JS_ROOT . '/plugins/easypiechart.js', array( 'jquery' ), false, true );
		wp_enqueue_script( 'mixitup', PITCH_JS_ROOT . '/plugins/jquery.mixitup.min.js', array( 'jquery' ), false, true );
		wp_enqueue_script( 'nicescroll', PITCH_JS_ROOT . '/plugins/jquery.nicescroll.min.js', array( 'jquery' ), false, true );
		wp_enqueue_script( 'prettyphoto', PITCH_JS_ROOT . '/plugins/jquery.prettyPhoto.js', array( 'jquery' ), false, true );
		wp_enqueue_script( 'fitvids', PITCH_JS_ROOT . '/plugins/jquery.fitvids.js', array( 'jquery' ), false, true );
		wp_enqueue_script( 'flexslider', PITCH_JS_ROOT . '/plugins/jquery.flexslider-min.js', array( 'jquery' ), false, true );
		wp_enqueue_script( 'infinitescroll', PITCH_JS_ROOT . '/plugins/infinitescroll.js', array( 'jquery' ), false, true );
		wp_enqueue_script( 'waitforimages', PITCH_JS_ROOT . '/plugins/jquery.waitforimages.js', array( 'jquery' ), false, true );
		wp_enqueue_script( 'waypointss', PITCH_JS_ROOT . '/plugins/waypoints.min.js', array( 'jquery' ), false, true );
		wp_enqueue_script( 'jplayer', PITCH_JS_ROOT . '/plugins/jplayer.min.js', array( 'jquery' ), false, true );
		wp_enqueue_script( 'bootstrap-carousel', PITCH_JS_ROOT . '/plugins/bootstrap.carousel.js', array( 'jquery' ), false, true );
		wp_enqueue_script( 'skrollr', PITCH_JS_ROOT . '/plugins/skrollr.js', array( 'jquery' ), false, true );
		wp_enqueue_script( 'Chart', PITCH_JS_ROOT . '/plugins/Chart.min.js', array( 'jquery' ), false, true );
		wp_enqueue_script( 'jquery-easing-1.3', PITCH_JS_ROOT . '/plugins/jquery.easing.1.3.js', array( 'jquery' ), false, true );
		wp_enqueue_script( 'jquery-plugin', PITCH_JS_ROOT . '/plugins/jquery.plugin.min.js', array( 'jquery' ), false, true );
		wp_enqueue_script( 'countdown', PITCH_JS_ROOT . '/plugins/jquery.countdown.min.js', array( 'jquery' ), false, true );
		wp_enqueue_script( 'multiscroll', PITCH_JS_ROOT . '/plugins/jquery.multiscroll.min.js', array( 'jquery' ), false, true );
		wp_enqueue_script( "carouFredSel", PITCH_JS_ROOT . "/plugins/jquery.carouFredSel-6.2.1.js", array( 'jquery' ), false, true );
		wp_enqueue_script( "fullPage", PITCH_JS_ROOT . "/plugins/jquery.fullPage.min.js", array( 'jquery' ), false, true );
		wp_enqueue_script( "lemmonSlider", PITCH_JS_ROOT . "/plugins/lemmon-slider.js", array( 'jquery' ), false, true );
		wp_enqueue_script( "owl_carousel", PITCH_JS_ROOT . "/plugins/owl.carousel.min.js", array( "jquery" ), false, true );
		wp_enqueue_script( "mousewheel", PITCH_JS_ROOT . "/plugins/jquery.mousewheel.min.js", array( 'jquery' ), false, true );
		wp_enqueue_script( "touchSwipe", PITCH_JS_ROOT . "/plugins/jquery.touchSwipe.min.js", array( 'jquery' ), false, true );
		wp_enqueue_script( "isotope", PITCH_JS_ROOT . "/plugins/jquery.isotope.min.js", array( 'jquery' ), false, true );
		
		do_action( 'pitch_qode_action_enqueue_additional_scripts' );
		
		if ( $is_IE ) {
			wp_enqueue_script( "html5", PITCH_JS_ROOT . "/plugins/html5.js", array( 'jquery' ), false, false );
		}
		if ( pitch_qode_options()->getOptionValue( 'google_maps_api_key' ) !== "" ) :
			$google_maps_api_key = pitch_qode_options()->getOptionValue( 'google_maps_api_key' );
			
			if ( ! empty( $google_maps_api_key ) ) {
				wp_enqueue_script( "pitch-google-map-api", "https://maps.googleapis.com/maps/api/js?key=" . esc_attr( $google_maps_api_key ), array( 'jquery' ), false, true );
			}
		endif;
		
		if ( file_exists( PITCH_JS_ROOT_DIR . '/default_dynamic.js' ) && pitch_qode_is_js_folder_writable() && ! is_multisite() ) {
			wp_enqueue_script( 'pitch-default-dynamic', PITCH_JS_ROOT . '/default_dynamic.js', array( 'jquery' ), filemtime( PITCH_JS_ROOT_DIR . '/default_dynamic.js' ), true );
		} else if ( file_exists( PITCH_JS_ROOT_DIR . '/default_dynamic_ms_id_' . pitch_qode_get_multisite_blog_id() . '.js' ) && pitch_qode_is_js_folder_writable() && is_multisite() ) {
			wp_enqueue_script( 'pitch-default-dynamic', PITCH_JS_ROOT . '/default_dynamic_ms_id_' . pitch_qode_get_multisite_blog_id() . '.js', array( 'jquery' ), filemtime( PITCH_JS_ROOT_DIR . '/default_dynamic_ms_id_' . pitch_qode_get_multisite_blog_id() . '.js' ), true );
		} else {
			wp_enqueue_script( 'pitch-default-dynamic', PITCH_JS_ROOT . '/default_dynamic_callback.php', array( 'jquery' ), false, true ); // Temporary case for Major update 4.0
		}
		
		wp_enqueue_script( "pitch-default", PITCH_JS_ROOT . "/default.min.js", array( 'jquery' ), false, true );
		
		if ( pitch_qode_load_blog_assets() ) {
			wp_enqueue_script( 'pitch-blog', PITCH_JS_ROOT . "/blog.min.js", array( 'jquery' ), false, true );
		}
		
		$custom_js = pitch_qode_options()->getOptionValue( 'custom_js' );
		if ( ! empty( $custom_js ) ) {
			wp_add_inline_script( 'pitch-default', $custom_js );
		}
		
		//is smooth scroll enabled enabled and not Mac device?
		if ( pitch_qode_options()->getOptionValue( 'smooth_scroll' ) === 'yes' && strpos( getenv( 'HTTP_USER_AGENT' ), "Macintosh; Intel Mac OS X" ) == false ) {
			wp_enqueue_script( "TweenLite", PITCH_JS_ROOT . "/plugins/TweenLite.min.js", array( 'jquery' ), false, true );
			wp_enqueue_script( "ScrollToPlugin", PITCH_JS_ROOT . "/plugins/ScrollToPlugin.min.js", array( 'jquery' ), false, true );
			wp_enqueue_script( "smoothPageScroll", PITCH_JS_ROOT . "/plugins/smoothPageScroll.js", array( 'jquery' ), false, true );
		}
		
		global $wp_scripts;
		$wp_scripts->add_data( 'comment-reply', 'group', 1 );
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( "comment-reply" );
		}
		
		if ( pitch_qode_is_woocommerce_installed() && pitch_qode_load_woo_assets() ) {
			wp_enqueue_script( "pitch-woocommerce", PITCH_JS_ROOT . "/woocommerce.min.js", array( 'jquery' ), false, true );
			wp_enqueue_script( "select-2", PITCH_JS_ROOT . "/plugins/select2.min.js", array( 'jquery' ), false, true );
		}
		
		if ( pitch_qode_is_ajax_enabled() ) :
			wp_enqueue_script( "pitch-ajax", PITCH_JS_ROOT . "/ajax.min.js", array( 'jquery' ), false, true );
		endif;
		
		if ( pitch_qode_return_toolbar_variable() ) {
			wp_enqueue_script( "pitch-toolbar", get_home_url() . "/toolbar/toolbar.js", array( "jquery" ), false, true );
		}
		
		if ( pitch_qode_return_landing_variable() ) {
			wp_enqueue_script( "fancybox", get_home_url() . "/demo-files/landing/js/jquery.fancybox.js", array(), false, true );
			wp_enqueue_script( "pitch-landing", get_home_url() . "/demo-files/landing/js/landing_default.js", array( "jquery" ), false, true );
		}
		
		if ( pitch_qode_is_visual_composer_installed() ) {
			wp_enqueue_script( 'wpb_composer_front_js' );
		}
	}
	
	add_action('wp_enqueue_scripts', 'pitch_qode_scripts');
}

if ( ! function_exists( 'pitch_qode_set_global_variables' ) ) {
	function pitch_qode_set_global_variables() {
		$sticky_scroll_amount = get_post_meta( pitch_qode_get_page_id(), "qode_page_scroll_amount_for_sticky", true );
		
		if ( $sticky_scroll_amount !== '' ) {
			wp_localize_script( 'pitch-default', 'page_scroll_amount_for_sticky', $sticky_scroll_amount );
		}
		
		if ( is_user_logged_in() ) {
			wp_localize_script( 'pitch-default', 'qodef_logout_url', array(
				'url' => wp_logout_url()
			) );
		}
	}
	
	add_action( 'wp_enqueue_scripts', 'pitch_qode_set_global_variables' );
}

if ( ! function_exists( 'pitch_qode_enqueue_editor_customizer_styles' ) ) {
	/**
	 * Enqueue supplemental block editor styles
	 */
	function pitch_qode_enqueue_editor_customizer_styles() {
		$protocol = is_ssl() ? 'https:' : 'http:';
		//include default google font that theme is using
		$default_fonts_args          = array(
			'family' => urlencode( 'Open Sans:300,400,600,700' ),
			'subset' => urlencode( 'latin-ext' ),
		);
		$pitch_global_fonts = add_query_arg( $default_fonts_args, $protocol . '//fonts.googleapis.com/css' );
		wp_enqueue_style( 'pitch-editor-google-fonts', esc_url_raw( $pitch_global_fonts ) );
		
		wp_enqueue_style( 'pitch-editor-customizer-style', PITCH_FRAMEWORK_ROOT . '/admin/assets/css/editor-customizer-style.css' );
		wp_enqueue_style( 'pitch-editor-blocks-style', PITCH_FRAMEWORK_ROOT . '/admin/assets/css/editor-blocks-style.css' );
	}
	
	add_action( 'enqueue_block_editor_assets', 'pitch_qode_enqueue_editor_customizer_styles' );
}

if ( ! function_exists( 'pitch_qode_user_scalable_meta' ) ) {
	/**
	 * Function that outputs user scalable meta if responsiveness is turned on
	 * Hooked to pitch_qode_action_header_meta action
	 */
	function pitch_qode_user_scalable_meta() {
		//is responsiveness option is chosen?
		if ( pitch_qode_is_responsive_on() ) { ?>
			<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
		<?php } else { ?>
			<meta name="viewport" content="width=1200,user-scalable=no">
		<?php }
	}
	
	add_action( 'pitch_qode_action_header_meta', 'pitch_qode_user_scalable_meta' );
}

if ( ! function_exists( 'pitch_qode_rgba_color' ) ) {
	/**
	 * Function that generates rgba part of css color property
	 *
	 * @param $color string hex color
	 * @param $transparency float transparency value between 0 and 1
	 *
	 * @return string generated rgba string
	 */
	function pitch_qode_rgba_color( $color, $transparency ) {
		if ( $color !== '' && $transparency !== '' ) {
			$rgba_color = '';
			
			$rgb_color_array = pitch_qode_hex2rgb( $color );
			$rgba_color      .= 'rgba(' . implode( ', ', $rgb_color_array ) . ', ' . $transparency . ')';
			
			return $rgba_color;
		}
	}
}

if ( ! function_exists( 'pitch_qode_set_logo_sizes' ) ) {
	/**
	 * Function that sets logo image dimensions to global qode options array so it can be used in the theme
	 */
	function pitch_qode_set_logo_sizes() {
		
		if ( pitch_qode_options()->getOptionValue( 'logo_image' ) ) {
			pitch_qode_options()->addOption( 'logo_width', 280 );
			pitch_qode_options()->addOption( 'logo_height', 130 );
			
			//get logo image size
			$logo_image_sizes = pitch_qode_get_image_dimensions( pitch_qode_options()->getOptionValue( 'logo_image' ) );
			
			if ( isset( $logo_image_sizes['width'] ) && isset( $logo_image_sizes['height'] ) ) {
				pitch_qode_options()->addOption( 'logo_width', intval( $logo_image_sizes['width'] ) );
				pitch_qode_options()->addOption( 'logo_height', intval( $logo_image_sizes['height'] ) );
			}
		}
	}
	
	add_action( 'init', 'pitch_qode_set_logo_sizes', 0 );
}

if ( ! function_exists( 'pitch_qode_is_main_menu_set' ) ) {
	/**
	 * Function that checks if any of main menu locations are set.
	 * Checks whether top-navigation location is set, or left-top-navigation and right-top-navigation is set
	 * @return bool
	 *
	 * @version 0.1
	 */
	function pitch_qode_is_main_menu_set() {
		$has_top_nav     = has_nav_menu( 'top-navigation' );
		$has_divided_nav = has_nav_menu( 'left-top-navigation' ) && has_nav_menu( 'right-top-navigation' );
		
		return $has_top_nav || $has_divided_nav;
	}
}

if ( ! function_exists( 'pitch_qode_has_shortcode' ) ) {
	/**
	 * Function that checks whether shortcode exists on current page / post
	 *
	 * @param string shortcode to find
	 * @param string content to check. If isn't passed current post content will be used
	 *
	 * @return bool whether content has shortcode or not
	 */
	function pitch_qode_has_shortcode( $shortcode, $content = '' ) {
		$has_shortcode = false;
		
		if ( $shortcode ) {
			//if content variable isn't past
			if ( $content == '' ) {
				//take content from current post
				$page_id = pitch_qode_get_page_id();
				if ( ! empty( $page_id ) ) {
					$current_post = get_post( $page_id );
					
					if ( is_object( $current_post ) && property_exists( $current_post, 'post_content' ) ) {
						$content = $current_post->post_content;
					}
					
				}
			}
			
			//does content has shortcode added?
			if ( stripos( $content, '[' . $shortcode ) !== false ) {
				$has_shortcode = true;
			}
		}
		
		return $has_shortcode;
	}
}

if ( ! function_exists( 'pitch_qode_horizontal_slider_icon_classes' ) ) {
	/**
	 * Returns classes for left and right arrow for sliders
	 *
	 * @param $icon_class
	 *
	 * @return array
	 */
	function pitch_qode_horizontal_slider_icon_classes( $icon_class ) {
		
		switch ( $icon_class ) {
			case 'arrow_carrot-left_alt2':
				$left_icon_class  = 'arrow_carrot-left_alt2';
				$right_icon_class = 'arrow_carrot-right_alt2';
				break;
			case 'arrow_carrot-2left_alt2':
				$left_icon_class  = 'arrow_carrot-2left_alt2';
				$right_icon_class = 'arrow_carrot-2right_alt2';
				break;
			case 'arrow_triangle-left_alt2':
				$left_icon_class  = 'arrow_triangle-left_alt2';
				$right_icon_class = 'arrow_triangle-right_alt2';
				break;
			case 'icon-arrows-drag-left-dashed':
				$left_icon_class  = 'icon-arrows-drag-left-dashed';
				$right_icon_class = 'icon-arrows-drag-right-dashed';
				break;
			case 'icon-arrows-left-double-32':
				$left_icon_class  = 'icon-arrows-left-double-32';
				$right_icon_class = 'icon-arrows-right-double';
				break;
			case 'icon-arrows-slide-left1':
				$left_icon_class  = 'icon-arrows-slide-left1';
				$right_icon_class = 'icon-arrows-slide-right1';
				break;
			case 'icon-arrows-slide-left2':
				$left_icon_class  = 'icon-arrows-slide-left2';
				$right_icon_class = 'icon-arrows-slide-right2';
				break;
			case 'icon-arrows-slim-left-dashed':
				$left_icon_class  = 'icon-arrows-slim-left-dashed';
				$right_icon_class = 'icon-arrows-slim-right-dashed';
				break;
			case 'ion-arrow-left-a':
				$left_icon_class  = 'ion-arrow-left-a';
				$right_icon_class = 'ion-arrow-right-a';
				break;
			case 'ion-arrow-left-b':
				$left_icon_class  = 'ion-arrow-left-b';
				$right_icon_class = 'ion-arrow-right-b';
				break;
			case 'ion-arrow-left-c':
				$left_icon_class  = 'ion-arrow-left-c';
				$right_icon_class = 'ion-arrow-right-c';
				break;
			case 'ion-ios-arrow-':
				$left_icon_class  = $icon_class . 'back';
				$right_icon_class = $icon_class . 'forward';
				break;
			case 'ion-ios-fastforward':
				$left_icon_class  = 'ion-ios-rewind';
				$right_icon_class = 'ion-ios-fastforward';
				break;
			case 'ion-ios-fastforward-outline':
				$left_icon_class  = 'ion-ios-rewind-outline';
				$right_icon_class = 'ion-ios-fastforward-outline';
				break;
			case 'ion-ios-skipbackward':
				$left_icon_class  = 'ion-ios-skipbackward';
				$right_icon_class = 'ion-ios-skipforward';
				break;
			case 'ion-ios-skipbackward-outline':
				$left_icon_class  = 'ion-ios-skipbackward-outline';
				$right_icon_class = 'ion-ios-skipforward-outline';
				break;
			case 'ion-android-arrow-':
				$left_icon_class  = $icon_class . 'back';
				$right_icon_class = $icon_class . 'forward';
				break;
			case 'ion-android-arrow-dropleft-circle':
				$left_icon_class  = 'ion-android-arrow-dropleft-circle';
				$right_icon_class = 'ion-android-arrow-dropright-circle';
				break;
			default:
				$left_icon_class  = $icon_class . 'left';
				$right_icon_class = $icon_class . 'right';
		}
		
		$icon_classes = array(
			'left_icon_class'  => $left_icon_class,
			'right_icon_class' => $right_icon_class
		);
		
		return $icon_classes;
	}
}

if ( ! function_exists( 'pitch_qode_get_side_menu_icon_html' ) ) {
	/**
	 * Function that outputs html for side area icon opener.
	 *
	 * @return string generated html
	 */
	function pitch_qode_get_side_menu_icon_html() {
		$icon_html = '';
		
		if ( pitch_qode_options()->getOptionValue( 'side_area_button_icon_pack' ) ) {
			$icon_pack = pitch_qode_options()->getOptionValue( 'side_area_button_icon_pack' );
			if ( $icon_pack !== '' ) {
				$icon_collection_obj = pitch_qode_icon_collections()->getIconCollection( $icon_pack );
				$icon_field_name     = 'side_area_icon_' . $icon_collection_obj->param;
				
				if ( pitch_qode_options()->getOptionValue( $icon_field_name ) !== '' ) {
					$icon_single = pitch_qode_options()->getOptionValue( $icon_field_name );
					
					if ( method_exists( $icon_collection_obj, 'render' ) ) {
						$icon_html = $icon_collection_obj->render( $icon_single );
					}
				}
			}
		}
		
		return $icon_html;
	}
}

if ( ! function_exists( 'pitch_qode_comment' ) ) {
	function pitch_qode_comment( $comment, $args, $depth ) {
		$GLOBALS['comment'] = $comment;
		
		global $post;
		$title_tag = "h5";
		
		if ( pitch_qode_options()->getOptionValue( 'blog_single_title_tags' ) ) {
			$title_tag = pitch_qode_options()->getOptionValue( 'blog_single_title_tags' );
		}
		
		$headings_array = array( 'h2', 'h3', 'h4', 'h5', 'h6' );
		//get correct heading value
		$title_tag = ( in_array( $title_tag, $headings_array ) ) ? $title_tag : 'h5';
		
		$is_pingback_comment = $comment->comment_type == 'pingback';
		$is_author_comment   = $post->post_author == $comment->user_id;
		
		$comment_class = 'comment clearfix';
		
		if ( $is_author_comment ) {
			$comment_class .= ' post_author_comment';
		}
		
		if ( $is_pingback_comment ) {
			$comment_class .= ' pingback-comment';
		}
		
		$open_tag = '<li>';
		
		echo wp_kses_post( $open_tag );
		?>
		
		<div class="<?php echo esc_attr( $comment_class ); ?>">
			<?php if ( ! $is_pingback_comment ) { ?>
				<div class="image"> <?php echo pitch_qode_kses_img( get_avatar( $comment, 102 ) ); ?> </div>
			<?php } ?>
			<div class="text">
				<div class="comment_info">
					<<?php echo esc_attr( $title_tag ); ?> class="name"><?php if ( $is_pingback_comment ) {	esc_html_e( 'Pingback:', 'pitch' );	} ?><?php echo wp_kses_post( get_comment_author_link() ); ?><?php if ( $is_author_comment ) { ?><i class="fa fa-user post-author-comment-icon"></i><?php } ?></<?php echo esc_attr( $title_tag ); ?>>
					<?php
					comment_reply_link( array_merge( $args, array( 'depth'     => $depth, 'max_depth' => $args['max_depth'] ) ) );
					edit_comment_link();
					?>
				</div>
				<?php if ( ! $is_pingback_comment ) { ?>
					<div class="text_holder" id="comment-<?php echo comment_ID(); ?>">
						<?php comment_text(); ?>
					</div>
					<span class="comment_date"><?php comment_time( get_option( 'date_format' ) ); ?><?php esc_html_e( 'at', 'pitch' ); ?><?php comment_time( get_option( 'time_format' ) ); ?></span>
				<?php } ?>
			</div>
		</div>
		<?php //li tag will be closed by WordPress after looping through child elements ?>
		
		<?php
	}
}

if ( ! function_exists( 'pitch_qode_get_dynamic_sidebar' ) ) {
	/**
	 * Return Custom Widget Area content
	 *
	 * @return string
	 */
	function pitch_qode_get_dynamic_sidebar( $index = 1 ) {
		$sidebar_contents = "";
		ob_start();
		dynamic_sidebar( $index );
		$sidebar_contents = ob_get_clean();
		
		return $sidebar_contents;
	}
}
<?php

if(!function_exists('pitch_qode_title_classes')) {
	/**
	 * Function that adds classes to title div.
	 * All other functions are tied to it with add_filter function
	 * @param array $classes array of classes
	 */
	function pitch_qode_title_classes($classes = array()) {
		$classes = array();
		$classes = apply_filters('pitch_qode_filter_title_classes', $classes);

		if(is_array($classes) && count($classes)) {
			echo implode(' ', $classes);
		}
	}
}

if(!function_exists('pitch_qode_title_fontsize')) {
	/**
	 * Function that adds class on title based on title position option
	 * Could be left, centered or right
	 * @param $classes original array of classes
	 * @return array changed array of classes
	 */
	function pitch_qode_title_fontsize($classes) {
		$id = pitch_qode_get_page_id();
		$page_title_fontsize_class = '';

		if(get_post_meta($id, "qode_page_title_font_size", true) != ""){
		    $page_title_fontsize_class = "title_size_" . get_post_meta($id, "qode_page_title_font_size", true);
		}else{
		    if(pitch_qode_options()->getOptionValue( 'predefined_title_sizes' )) {
		        $page_title_fontsize_class = "title_size_" . pitch_qode_options()->getOptionValue( 'predefined_title_sizes' );
		    }
		}

		$classes[] = $page_title_fontsize_class;

		return $classes;
	}

	add_filter('pitch_qode_filter_title_classes', 'pitch_qode_title_fontsize');
}

if(!function_exists('pitch_qode_title_position_class')) {
	/**
	 * Function that adds class on title based on title position option
	 * Could be left, centered or right
	 * @param $classes original array of classes
	 * @return array changed array of classes
	 */
	function pitch_qode_title_position_class($classes) {
		$id = pitch_qode_get_page_id();
		$title_position = 'left';

		if(pitch_qode_is_woocommerce_page()) {
			$id = get_option('woocommerce_shop_page_id');
		}

		if(get_post_meta($id, "qode_page_title_position", true) != "") {
			$title_position = get_post_meta($id, "qode_page_title_position", true);

		} else {
			$title_position = pitch_qode_options()->getOptionValue( 'page_title_position' );
		}

		$classes[] = 'position_'.$title_position;

		return $classes;
	}

	add_filter('pitch_qode_filter_title_classes', 'pitch_qode_title_position_class');
}

if(!function_exists('pitch_qode_title_in_grid_class')) {
    /**
     * Function that adds class on title based on title in grid option
     * Could be enabled or disabled
     * @param $classes original array of classes
     * @return array changed array of classes
     */
    function pitch_qode_title_in_grid_class($classes) {
	    $id = pitch_qode_get_page_id();
        $title_in_grid = '';

        if(pitch_qode_is_woocommerce_page()) {
            $id = get_option('woocommerce_shop_page_id');
        }

        if((get_post_meta($id, "qode_title_content_in_grid", true) == "no")
            || ((get_post_meta($id, "qode_title_content_in_grid", true) != "yes") && pitch_qode_options()->getOptionValue( 'title_content_in_grid' ) == 'no')) {
            $classes[] = 'disable_title_in_grid';
        }

        return $classes;
    }

    add_filter('pitch_qode_filter_title_classes', 'pitch_qode_title_in_grid_class');
}

if(!function_exists('pitch_qode_title_content_shadow')) {
    /**
     * Function that adds class on title based on title content area shadows
     * Could be enabled or disabled
     * @param $classes original array of classes
     * @return array changed array of classes
     */
    function pitch_qode_title_content_shadow($classes) {
	    $id = pitch_qode_get_page_id();

        if((get_post_meta($id, "qode_title_content_shadow", true) == "yes")
            || ((get_post_meta($id, "qode_title_content_shadow", true) != "no") && pitch_qode_options()->getOptionValue( 'title_content_shadows' ) == 'yes')) {
            $classes[] = 'title_content_shadow';
        }

        return $classes;
    }

    add_filter('pitch_qode_filter_title_classes', 'pitch_qode_title_content_shadow');
}

if(!function_exists('pitch_qode_title_with_paspartu')) {
    /**
     * Function that adds class on title based on title paspartu
     * Could be enabled or disabled (by default disabled)
     * @param $classes original array of classes
     * @return array changed array of classes
     */
    function pitch_qode_title_with_paspartu($classes) {
     
    	if((pitch_qode_options()->getOptionValue( 'paspartu_below_tittle' ) == 'yes')) {
            $classes[] = 'paspartu_below_tittle';
        }

        return $classes;
    }

    add_filter('pitch_qode_filter_title_classes', 'pitch_qode_title_with_paspartu');
}

if(!function_exists('pitch_qode_title_background_image_classes')) {
	function pitch_qode_title_background_image_classes($classes) {
		$id = pitch_qode_get_page_id();
		$is_img_responsive 		= '';
		$is_image_fixed			= '';
		$is_image_fixed_array 	= array('yes', 'yes_zoom');
		$show_title_img			= true;
		$title_img				= '';

		if(pitch_qode_is_woocommerce_page()) {
			$id = get_option('woocommerce_shop_page_id');
		}

		//is responsive image is set for current page?
		if(get_post_meta($id, "qode_responsive-title-image", true) != "") {
			$is_img_responsive = get_post_meta($id, "qode_responsive-title-image", true);
		} else {
			//take value from theme options
			$is_img_responsive = pitch_qode_options()->getOptionValue( 'responsive_title_image' );
		}

		//is title image chosen for current page?
		if(get_post_meta($id, "qode_title-image", true) != ""){
			$title_img = get_post_meta($id, "qode_title-image", true);
		}else{
			//take image that is set in theme options
			$title_img = pitch_qode_options()->getOptionValue( 'title_image' );
		}

		//is image set to be fixed for current page?
		if(get_post_meta($id, "qode_fixed-title-image", true) != ""){
			$is_image_fixed = get_post_meta($id, "qode_fixed-title-image", true);
		}else{
			//take setting from theme options
			$is_image_fixed = pitch_qode_options()->getOptionValue( 'fixed_title_image' );
		}

		//is title image hidden for current page?
		if(get_post_meta($id, "qode_show-page-title-image", true) == "yes") {
			$show_title_img = false;
		}

		//is title image set and visible?
		if($title_img !== '' && $show_title_img == true) {
			//is image not responsive and parallax title is set?
            $classes[] = 'preload_background';

            if($is_img_responsive == 'no' && in_array($is_image_fixed, $is_image_fixed_array)) {
				$classes[] = 'has_fixed_background';

				if($is_image_fixed == 'yes_zoom') {
					$classes[] = 'zoom_out';
				}
			}
			//is image not responsive and parallax title isn't set?
			elseif($is_img_responsive == 'no') {
				$classes[] = 'has_background';
			}
		}

		return $classes;
	}

	add_filter('pitch_qode_filter_title_classes', 'pitch_qode_title_background_image_classes');
}

if(!function_exists('pitch_qode_title_text_is_hidden_class')) {
	function pitch_qode_title_text_is_hidden_class($classes) {
		$is_title_text_visible = true;

		//init variables
		$id = pitch_qode_get_page_id();
		
		if(get_post_meta($id, "qode_show_page_title_text", true) == 'yes') {
			$is_title_text_visible = true;
		} elseif(get_post_meta($id, "qode_show_page_title_text", true) == 'no') {
			$is_title_text_visible = false;
		} elseif(get_post_meta($id, "qode_show_page_title_text", true) == '' && (pitch_qode_options()->getOptionValue( 'show_page_title_text' ) == 'yes')) {
			$is_title_text_visible = true;
		} elseif(get_post_meta($id, "qode_show_page_title_text", true) == '' && (pitch_qode_options()->getOptionValue( 'show_page_title_text' ) == 'no')) {
			$is_title_text_visible = false;
		} elseif(pitch_qode_options()->getOptionValue( 'show_page_title_text' ) == 'yes') {
			$is_title_text_visible = true;
		}

		if(!$is_title_text_visible) {
			$classes[] = 'without_title_text';
		}

		return $classes;
	}

	add_filter('pitch_qode_filter_title_classes', 'pitch_qode_title_text_is_hidden_class');
}

if(!function_exists('pitch_qode_title_breadcrumb_type_class')) {
    function pitch_qode_title_breadcrumb_type_class($classes) {
	    $id = pitch_qode_get_page_id();

        $title_type = "standard_title";
        if(get_post_meta($id, "qode_page_title_type", true) != ""){
            $title_type = get_post_meta($id, "qode_page_title_type", true);
        }else if(is_404()){
            $title_type = "breadcrumbs_title";
        }else{
            $title_type = pitch_qode_options()->getOptionValue( 'title_type' );
        }

        $classes[] = $title_type;

        return $classes;
    }

    add_filter('pitch_qode_filter_title_classes', 'pitch_qode_title_breadcrumb_type_class');
}

if(!function_exists('pitch_qode_title_background_color_class')) {
	function pitch_qode_title_background_color_class($classes) {
		$id = pitch_qode_get_page_id();
		
		$title_image	= '';
		$title_bg_color = '';

		if(pitch_qode_is_woocommerce_page()) {
			$id = get_option('woocommerce_shop_page_id');
		}

		//is title image chosen for current page?
		if(get_post_meta($id, "qode_title-image", true) != ""){
			$title_img = get_post_meta($id, "qode_title-image", true);
		}else{
			//take image that is set in theme options
			$title_img = pitch_qode_options()->getOptionValue( 'title_image' );
		}

		//is title background color set?
		if(get_post_meta($id, "qode_page-title-background-color", true) != ""){
			$title_bg_color = get_post_meta($id, "qode_page-title-background-color", true);
		}else{
			//take background color from
			$title_bg_color = pitch_qode_options()->getOptionValue( 'title_background_color' );
		}

		if($title_bg_color !== '' && $title_img === '') {
			$classes[] = 'with_background_color';
		}

		return $classes;
	}

	add_filter('pitch_qode_filter_title_classes', 'pitch_qode_title_background_color_class');
}
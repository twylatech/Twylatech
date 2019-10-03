<?php

if ( ! function_exists( 'pitch_qode_return_landing_variable' ) ) {
	function pitch_qode_return_landing_variable() {
		global $pitch_qode_landing;
		
		return $pitch_qode_landing;
	}
}

if ( ! function_exists( 'pitch_qode_return_toolbar_variable' ) ) {
	function pitch_qode_return_toolbar_variable() {
		global $pitch_qode_toolbar;
		
		return $pitch_qode_toolbar;
	}
}

if ( ! function_exists( 'pitch_qode_return_global_options' ) ) {
	function pitch_qode_return_global_options() {
		global $pitch_qode_options;
		
		return $pitch_qode_options;
	}
}

if ( ! function_exists( 'pitch_qode_return_global_wp_query' ) ) {
	function pitch_qode_return_global_wp_query() {
		global $wp_query;
		
		return $wp_query;
	}
}

if ( ! function_exists( 'pitch_qode_get_module_part' ) ) {
	function pitch_qode_get_module_part( $module ) {
		return $module;
	}
}

if ( ! function_exists( 'pitch_qode_is_core_installed' ) ) {
	/**
	 * Function that checks if Core plugin is installed
	 * @return bool
	 */
	function pitch_qode_is_core_installed() {
		return class_exists( 'PitchCore' );
	}
}

if ( ! function_exists( 'pitch_qode_is_gutenberg_installed' ) ) {
	/**
	 * Function that checks if Gutenberg plugin installed
	 * @return bool
	 */
	function pitch_qode_is_gutenberg_installed() {
		return function_exists( 'is_gutenberg_page' ) && is_gutenberg_page();
	}
}

if ( ! function_exists( 'pitch_qode_contact_form_7_installed' ) ) {
	/**
	 * Function that checks if contact form 7 installed
	 * @return bool
	 */
	function pitch_qode_contact_form_7_installed() {
		return defined( 'WPCF7_VERSION' );
	}
}

if ( ! function_exists( 'pitch_qode_is_wpml_installed' ) ) {
	/**
	 * Function that checks if WPML plugin is installed
	 * @return bool
	 *
	 * @version 0.1
	 */
	function pitch_qode_is_wpml_installed() {
		return defined( 'ICL_SITEPRESS_VERSION' );
	}
}

if ( ! function_exists( 'pitch_qode_get_page_id' ) ) {
	/**
	 * Function that returns current page / post id.
	 * Checks if current page is woocommerce page and returns that id if it is.
	 * Checks if current page is any archive page (category, tag, date, author etc.) and returns -1 because that isn't
	 * page that is created in WP admin.
	 *
	 * @return int
	 *
	 * @version 0.1
	 *
	 * @see pitch_qode_is_woocommerce_installed()
	 * @see pitch_qode_is_woocommerce_shop()
	 */
	function pitch_qode_get_page_id() {
		if ( pitch_qode_is_woocommerce_installed() && ( pitch_qode_is_woocommerce_shop() || pitch_qode_is_product_category() || pitch_qode_is_product_tag() ) ) {
			return pitch_qode_get_woo_shop_page_id();
		}
		
		if ( pitch_qode_is_archive_page() ) {
			return - 1;
		}
		
		return get_queried_object_id();
	}
}

if ( ! function_exists( 'pitch_qode_is_archive_page' ) ) {
	/**
	 * Function that checks if current page archive page, search, 404 or default home blog page
	 * @return bool
	 *
	 * @see is_archive()
	 * @see is_search()
	 * @see is_404()
	 * @see is_front_page()
	 * @see is_home()
	 */
	function pitch_qode_is_archive_page() {
		return is_archive() || is_search() || is_404() || ( is_front_page() && is_home() );
	}
}

if ( ! function_exists( 'pitch_qode_is_ajax_enabled' ) ) {
	/**
	 * Function that checks if ajax is enabled.
	 * @return bool
	 *
	 * @version 0.1
	 */
	function pitch_qode_is_ajax_enabled() {
		return pitch_qode_options()->getOptionValue( 'page_transitions' ) !== '0';
	}
}

if ( ! function_exists( 'pitch_qode_is_ajax_header_animation_enabled' ) ) {
	/**
	 * Function that checks if header animation with ajax is enabled.
	 * @return boolean
	 *
	 * @version 0.1
	 */
	function pitch_qode_is_ajax_header_animation_enabled() {
		return pitch_qode_is_ajax_enabled() && pitch_qode_options()->getOptionValue( 'ajax_animate_header' ) == 'yes';
	}
}

if ( ! function_exists( 'pitch_qode_is_woocommerce_installed' ) ) {
	/**
	 * Function that checks if woocommerce is installed
	 * @return bool
	 */
	function pitch_qode_is_woocommerce_installed() {
		return function_exists( 'is_woocommerce' );
	}
}

if ( ! function_exists( 'pitch_qode_is_woocommerce_page' ) ) {
	/**
	 * Function that checks if current page is woocommerce shop, product or product taxonomy
	 * @return bool
	 *
	 * @see is_woocommerce()
	 */
	function pitch_qode_is_woocommerce_page() {
		return function_exists( 'is_woocommerce' ) && is_woocommerce();
	}
}

if ( ! function_exists( 'pitch_qode_is_woocommerce_shop' ) ) {
	/**
	 * Function that checks if current page is shop or product page
	 * @return bool
	 *
	 * @see is_shop()
	 */
	function pitch_qode_is_woocommerce_shop() {
		return function_exists( 'is_shop' ) && ( is_shop() || is_product() );
	}
}

if ( ! function_exists( 'pitch_qode_get_woo_shop_page_id' ) ) {
	/**
	 * Function that returns shop page id that is set in WooCommerce settings page
	 * @return int id of shop page
	 */
	function pitch_qode_get_woo_shop_page_id() {
		if ( pitch_qode_is_woocommerce_installed() ) {
			return get_option( 'woocommerce_shop_page_id' );
		}
		
		return 0;
	}
}

if ( ! function_exists( 'pitch_qode_is_product_category' ) ) {
	function pitch_qode_is_product_category() {
		return function_exists( 'is_product_category' ) && is_product_category();
	}
}

if ( ! function_exists( 'pitch_qode_is_product_tag' ) ) {
	function pitch_qode_is_product_tag() {
		return function_exists( 'is_product_tag' ) && is_product_tag();
	}
}

if ( ! function_exists( 'pitch_qode_load_woo_assets' ) ) {
	/**
	 * Function that checks whether WooCommerce assets needs to be loaded.
	 *
	 * @return bool
	 * @see pitch_qode_is_woocommerce_page()
	 * @see pitch_qode_has_woocommerce_shortcode()
	 * @see pitch_qode_has_woocommerce_widgets()
	 * @see pitch_qode_is_ajax_enabled()
	 */
	
	function pitch_qode_load_woo_assets() {
		return pitch_qode_is_woocommerce_installed() && ( pitch_qode_is_ajax_enabled() || pitch_qode_is_woocommerce_page() || pitch_qode_has_woocommerce_shortcode() || pitch_qode_has_woocommerce_widgets() );
	}
}

if ( ! function_exists( 'pitch_qode_has_woocommerce_shortcode' ) ) {
	/**
	 * Function that checks if current page has at least one of WooCommerce shortcodes added
	 * @return bool
	 */
	function pitch_qode_has_woocommerce_shortcode() {
		$woocommerce_shortcodes = array(
			'woocommerce_order_tracking',
			'add_to_cart',
			'product',
			'products',
			'product_categories',
			'product_category',
			'recent_products',
			'featured_products',
			'woocommerce_messages',
			'woocommerce_cart',
			'woocommerce_checkout',
			'woocommerce_my_account',
			'woocommerce_edit_address',
			'woocommerce_change_password',
			'woocommerce_view_order',
			'woocommerce_pay',
			'woocommerce_thankyou'
		);
		
		foreach ( $woocommerce_shortcodes as $woocommerce_shortcode ) {
			$has_shortcode = pitch_qode_has_shortcode( $woocommerce_shortcode );
			
			if ( $has_shortcode ) {
				return true;
			}
		}
		
		return false;
	}
}

if ( ! function_exists( 'pitch_qode_has_woocommerce_widgets' ) ) {
	/**
	 * Function that checks if current page has at least one of WooCommerce shortcodes added
	 * @return bool
	 */
	function pitch_qode_has_woocommerce_widgets() {
		$widgets_array = array(
			'qode_pitch_woocommerce_dropdown_cart',
			'woocommerce_widget_cart',
			'woocommerce_layered_nav',
			'woocommerce_layered_nav_filters',
			'woocommerce_price_filter',
			'woocommerce_product_categories',
			'woocommerce_product_search',
			'woocommerce_product_tag_cloud',
			'woocommerce_products',
			'woocommerce_recent_reviews',
			'woocommerce_recently_viewed_products',
			'woocommerce_top_rated_products'
		);
		
		foreach ( $widgets_array as $widget ) {
			$active_widget = is_active_widget( false, false, $widget );
			
			if ( $active_widget ) {
				return true;
			}
		}
		
		return false;
	}
}








if ( ! function_exists( 'pitch_qode_is_visual_composer_installed' ) ) {
	/**
	 * Function that checks if visual composer installed
	 * @return bool
	 */
	function pitch_qode_is_visual_composer_installed() {
		return class_exists( 'WPBakeryVisualComposerAbstract' );
	}
}

if ( ! function_exists( 'pitch_qode_get_vc_version' ) ) {
	/**
	 * Return Visual Composer version string
	 *
	 * @return bool|string
	 */
	function pitch_qode_get_vc_version() {
		if ( pitch_qode_is_visual_composer_installed() ) {
			return WPB_VC_VERSION;
		}
		
		return false;
	}
}

if ( ! function_exists( 'pitch_qode_vc_grid_elements_enabled' ) ) {
	/**
	 * Function that checks if Visual Composer Grid Elements are enabled
	 *
	 * @return bool
	 */
	function pitch_qode_vc_grid_elements_enabled() {
		return pitch_qode_options()->getOptionValue( 'enable_grid_elements' );
	}
}

if ( ! function_exists( 'pitch_qode_visual_composer_grid_elements' ) ) {
	/**
	 * Removes Visual Composer Grid Elements post type if VC Grid option disabled
	 * and enables Visual Composer Grid Elements post type
	 * if VC Grid option enabled
	 */
	function pitch_qode_visual_composer_grid_elements() {
		
		if ( ! pitch_qode_vc_grid_elements_enabled() ) {
			remove_action( 'init', 'vc_grid_item_editor_create_post_type' );
		}
	}
	
	add_action( 'vc_after_init', 'pitch_qode_visual_composer_grid_elements', 12 );
}

if ( ! function_exists( 'pitch_qode_grid_elements_ajax_disable' ) ) {
	/**
	 * Function that disables ajax transitions if grid elements are enabled in theme options
	 */
	function pitch_qode_grid_elements_ajax_disable() {
		
		if ( pitch_qode_vc_grid_elements_enabled() ) {
			pitch_qode_options()->addOption( 'page_transitions', '0' );
		}
	}
	
	add_action( 'wp', 'pitch_qode_grid_elements_ajax_disable' );
}

if ( ! function_exists( 'pitch_qode_visual_composer_custom_shortcode_css' ) ) {
	/**
	 * Function that adds Visual composer's custom css to our action. Needed for ajax page transitions
	 */
	function pitch_qode_visual_composer_custom_shortcode_css() {
		if ( pitch_qode_is_visual_composer_installed() ) {
			if ( is_page() || is_single() || is_singular( 'portfolio_page' ) ) {
				
				$shortcodes_custom_css = get_post_meta( pitch_qode_get_page_id(), '_wpb_shortcodes_custom_css', true );
				if ( ! empty( $shortcodes_custom_css ) ) {
					echo '<style type="text/css" data-type="vc_shortcodes-custom-css-' . esc_attr( pitch_qode_get_page_id() ) . '">';
					echo get_post_meta( pitch_qode_get_page_id(), '_wpb_shortcodes_custom_css', true );
					echo '</style>';
				}
				
				$post_custom_css = get_post_meta( pitch_qode_get_page_id(), '_wpb_post_custom_css', true );
				if ( ! empty( $post_custom_css ) ) {
					echo '<style type="text/css" data-type="vc_custom-css-' . esc_attr( pitch_qode_get_page_id() ) . '">';
					echo get_post_meta( pitch_qode_get_page_id(), '_wpb_post_custom_css', true );
					echo '</style>';
				}
			}
		}
	}
	
	add_action( 'pitch_qode_action_after_content_inner', 'pitch_qode_visual_composer_custom_shortcode_css' );
}

if ( ! function_exists( 'pitch_qode_get_sidebar_layout' ) ) {
	function pitch_qode_get_sidebar_layout( $default_value = true ) {
		$qode_page_id      = pitch_qode_get_page_id();
		$show_sidebar_meta = get_post_meta( $qode_page_id, "qode_show-sidebar", true );
		$sidebar           = $default_value ? pitch_qode_options()->getOptionValue( 'category_blog_sidebar' ) : '';
		
		if ( ! empty( $show_sidebar_meta ) ) {
			$sidebar = $show_sidebar_meta;
		}
		
		if ( is_singular( 'post' ) && ( $show_sidebar_meta === 'default' || empty( $show_sidebar_meta ) ) ) {
			$sidebar = pitch_qode_options()->getOptionValue( 'blog_single_sidebar' );
		}
		
		if ( is_singular( 'portfolio_page' ) ) {
			$show_portfolio_sidebar_meta = get_post_meta( $qode_page_id, "qode_portfolio_show_sidebar", true );
			
			if ( ! empty( $show_portfolio_sidebar_meta ) && $show_portfolio_sidebar_meta != "default" ) {
				$sidebar = $show_portfolio_sidebar_meta;
			}
		}
		
		if ( ! empty( $sidebar ) && ! is_active_sidebar( pitch_qode_get_sidebar_name() ) ) {
			$sidebar = '';
		}
		
		return $sidebar;
	}
}

if ( ! function_exists( 'pitch_qode_get_sidebar_name' ) ) {
	function pitch_qode_get_sidebar_name() {
		$page_id = pitch_qode_get_page_id();
		
		if ( get_post_meta( $page_id, 'qode_choose-sidebar', true ) != "" ) {
			$sidebar = get_post_meta( $page_id, 'qode_choose-sidebar', true );
		} else {
			if ( is_singular( "post" ) ) {
				if ( pitch_qode_options()->getOptionValue( 'blog_single_sidebar_custom_display' ) != "" ) {
					$sidebar = pitch_qode_options()->getOptionValue( 'blog_single_sidebar_custom_display' );
				} else {
					$sidebar = 'sidebar';
				}
			} else {
				$sidebar = 'sidebar_page';
			}
		}
		
		return $sidebar;
	}
}

if ( ! function_exists( 'pitch_qode_inline_page_background_style' ) ) {
	function pitch_qode_inline_page_background_style() {
		$page_id = pitch_qode_get_page_id();
		$style   = array();
		
		$background_color = get_post_meta( $page_id, "qode_page_background_color", true );
		
		if ( ! empty( $background_color ) ) {
			$style[] = 'background-color:' . esc_attr( $background_color );
		}
		
		if ( ! empty( $style ) ) {
			echo pitch_qode_get_inline_style( $style );
		}
	}
}

if ( ! function_exists( 'pitch_qode_inline_page_padding_style' ) ) {
	function pitch_qode_inline_page_padding_style( $with_background = false) {
		$page_id = pitch_qode_get_page_id();
		$style   = array();
		
		$content_padding = get_post_meta( $page_id, "qode_content-top-padding", true );
		$is_mobile_check = get_post_meta( $page_id, "qode_content-top-padding-mobile", true );
		$padding_suffix  = $is_mobile_check === 'yes' ? '!important' : '';
		
		if ( $content_padding !== '' ) {
			$style[] = 'padding-top:' . intval( $content_padding ) . 'px' . $padding_suffix;
		}
		
		if( $with_background ) {
			$background_color = get_post_meta( $page_id, "qode_page_background_color", true );
			
			if ( ! empty( $background_color ) ) {
				$style[] = 'background-color:' . esc_attr( $background_color );
			}
		}
		
		if ( ! empty( $style ) ) {
			echo pitch_qode_get_inline_style( $style );
		}
	}
}

if ( ! function_exists( 'pitch_qode_get_blog_content_part' ) ) {
	function pitch_qode_get_blog_content_part() {
		$page_object = get_post( pitch_qode_get_page_id() );
		$content     = $page_object->post_content;
		$content     = apply_filters( 'the_content', wp_kses_post( $content ) );
		
		return $content;
	}
}

if ( ! function_exists( 'pitch_qode_get_blog_query_posts' ) ) {
	function pitch_qode_get_blog_query_posts() {
		$qode_page_id             = pitch_qode_get_page_id();
		$category                 = get_post_meta( $qode_page_id, "qode_choose-blog-category", true );
		$number_of_posts_per_page = get_post_meta( $qode_page_id, "qode_show-posts-per-page", true );
		$post_number              = ! empty( $number_of_posts_per_page ) ? esc_attr( $number_of_posts_per_page ) : esc_attr( get_option( 'posts_per_page' ) );
		
		if ( get_query_var( 'paged' ) ) {
			$paged = get_query_var( 'paged' );
		} elseif ( get_query_var( 'page' ) ) {
			$paged = get_query_var( 'page' );
		} else {
			$paged = 1;
		}
		
		$query_array = array(
			'post_status'    => 'publish',
			'post_type'      => 'post',
			'paged'          => $paged,
			'cat'            => $category,
			'posts_per_page' => $post_number
		);
		
		$blog_query = new WP_Query( $query_array );
		if ( is_archive() ) {
			$blog_query = pitch_qode_return_global_wp_query();
		}
		
		return $blog_query;
	}
}

if ( ! function_exists( 'pitch_qode_get_blog_pagination' ) ) {
	function pitch_qode_get_blog_pagination( $qode_blog_query ) {
		
		if ( pitch_qode_options()->getOptionValue( 'pagination' ) !== 0 ) {
			$blog_page_range_meta = pitch_qode_options()->getOptionValue( 'blog_page_range' );
			
			if ( ! empty( $blog_page_range_meta ) ) {
				$blog_page_range = $blog_page_range_meta;
			} else {
				$blog_page_range = $qode_blog_query->max_num_pages;
			}
			
			if ( get_query_var( 'paged' ) ) {
				$paged = get_query_var( 'paged' );
			} elseif ( get_query_var( 'page' ) ) {
				$paged = get_query_var( 'page' );
			} else {
				$paged = 1;
			}
			
			pitch_qode_get_blog_pagination_html( $qode_blog_query->max_num_pages, $blog_page_range, $paged );
		}
	}
}

if ( ! function_exists( 'pitch_qode_get_blog_pagination_html' ) ) {
	function pitch_qode_get_blog_pagination_html( $pages = '', $range = 4, $paged = 1 ) {
		$showitems = $range + 1;
		
		if ( $pages == '' ) {
			$pages = pitch_qode_return_global_wp_query()->max_num_pages;
			if ( ! $pages ) {
				$pages = 1;
			}
		}
		
		$pagination_classes = '';
		if ( pitch_qode_options()->getOptionValue( 'pagination_type' ) == 'standard' && pitch_qode_options()->getOptionValue( 'pagination_standard_position' ) !== '' ) {
			$pagination_classes .= "standard_" . esc_attr( pitch_qode_options()->getOptionValue( 'pagination_standard_position' ) );
		} elseif ( pitch_qode_options()->getOptionValue( 'pagination_type' ) == 'arrows_on_sides' ) {
			$pagination_classes .= "arrows_on_sides";
		}
		
		if( is_page_template( "blog-standard-info-on-side.php" ) ) {
			$pagination_classes .= ' container_inner';
		}
		
		$pagination_style = "";
		if ( pitch_qode_options()->getOptionValue( 'blog_pagination_border_above_yesno' ) == 'yes' ) {
			$pagination_classes .= " pagination_with_border";
			if ( pitch_qode_options()->getOptionValue( 'blog_pgn_border_color' ) != '' ) {
				$pagination_style .= "border-top-color:" . pitch_qode_options()->getOptionValue( 'blog_pgn_border_color' ) . "; ";
			} else {
				$pagination_style .= "border-top-color: #dedede; ";
			}
			
			if ( pitch_qode_options()->getOptionValue( 'blog_pgn_border_width' ) != '' ) {
				$pagination_style .= "border-top-width:" . pitch_qode_options()->getOptionValue( 'blog_pgn_border_width' ) . "px; ";
			} else {
				$pagination_style .= "border-top-width: 1px; ";
			}
			
			if ( pitch_qode_options()->getOptionValue( 'blog_pgn_border_style' ) != '' ) {
				$pagination_style .= "border-top-style:" . pitch_qode_options()->getOptionValue( 'blog_pgn_border_style' ) . "; ";
			} else {
				$pagination_style .= "border-top-style: solid; ";
			}
			
			if ( pitch_qode_options()->getOptionValue( 'blog_pagination_border_margin' ) != '' ) {
				$pagination_style .= "padding-top:" . pitch_qode_options()->getOptionValue( 'blog_pagination_border_margin' ) . "px; ";
			} else {
				$pagination_style .= "padding-top: 40px; ";
			}
		}
		
		if ( 1 != $pages ) {
			echo "<div class='pagination " . esc_attr( $pagination_classes ) . "' " . pitch_qode_get_inline_style( $pagination_style ) . "><ul>";
			
			$icon_first_left_html = "<span class='pagination_arrow arrow_carrot-2left'></span>";
			if ( pitch_qode_options()->getOptionValue( 'pagination_double_arrows_type' ) != '' ) {
				$icon_navigation_class = pitch_qode_options()->getOptionValue( 'pagination_double_arrows_type' );
				$direction_nav_classes = pitch_qode_horizontal_slider_icon_classes( $icon_navigation_class );
				$icon_first_left_html  = '<span class="pagination_arrow ' . esc_attr( $direction_nav_classes['left_icon_class'] ) . '"></span>';
			}
			if ( $paged > 2 && $paged > $range + 1 && $showitems < $pages ) {
				echo "<li class='first'><a href='" . esc_url( get_pagenum_link( 1 ) ) . "'>$icon_first_left_html</a></li>";
			}
			echo "<li class='prev";
			if ( $paged > 2 && $paged > $range + 1 && $showitems < $pages ) {
				echo " prev_first";
			}
			
			$icon_left_html = "<i class='pagination_arrow arrow_carrot-left'></i>";
			if ( pitch_qode_options()->getOptionValue( 'pagination_arrows_type' ) != '' ) {
				$icon_navigation_class = pitch_qode_options()->getOptionValue( 'pagination_arrows_type' );
				$direction_nav_classes = pitch_qode_horizontal_slider_icon_classes( $icon_navigation_class );
				$icon_left_html        = '<span class="pagination_arrow ' . $direction_nav_classes['left_icon_class'] . '"></span>';
			}
			
			echo "'><a href='" . esc_url( get_pagenum_link( $paged - 1 ) ) . "'>$icon_left_html</a></li>";
			
			for ( $i = 1; $i <= $pages; $i ++ ) {
				if ( 1 != $pages && ( ! ( $i >= $paged + $range + 1 || $i <= $paged - $range - 1 ) || $pages <= $showitems ) ) {
					echo esc_attr( $paged == $i ) ? "<li class='active'><span>" . $i . "</span></li>" : "<li><a href='" . get_pagenum_link( $i ) . "' class='inactive'>" . $i . "</a></li>";
				}
			}
			
			echo "<li class='next";
			if ( $paged < $pages - 1 && $paged + $range - 1 < $pages && $showitems < $pages ) {
				echo " next_last";
			}
			echo "'><a href=\"";
			if ( $pages > $paged ) {
				echo esc_url( get_pagenum_link( $paged + 1 ) );
			} else {
				echo esc_url( get_pagenum_link( $paged ) );
			}
			
			$icon_right_html = "<i class='pagination_arrow arrow_carrot-right'></i>";
			
			if ( pitch_qode_options()->getOptionValue( 'pagination_arrows_type' ) != '' ) {
				$icon_navigation_class = pitch_qode_options()->getOptionValue( 'pagination_arrows_type' );
				$direction_nav_classes = pitch_qode_horizontal_slider_icon_classes( $icon_navigation_class );
				$icon_right_html       = '<span class="pagination_arrow ' . $direction_nav_classes['right_icon_class'] . '"></span>';
			}
			
			echo "\">$icon_right_html</a></li>";
			
			$icon_last_right_html = "<span class='pagination_arrow arrow_carrot-2right'></span>";
			
			if ( pitch_qode_options()->getOptionValue( 'pagination_double_arrows_type' ) != '' ) {
				$icon_navigation_class = pitch_qode_options()->getOptionValue( 'pagination_double_arrows_type' );
				$direction_nav_classes = pitch_qode_horizontal_slider_icon_classes( $icon_navigation_class );
				$icon_last_right_html  = '<span class="pagination_arrow ' . $direction_nav_classes['right_icon_class'] . '"></span>';
			}
			
			if ( $paged < $pages - 1 && $paged + $range - 1 < $pages && $showitems < $pages ) {
				echo "<li class='last'><a href='" . esc_url( get_pagenum_link( $pages ) ) . "'>$icon_last_right_html</a></li>";
			}
			echo "</ul></div>\n";
		}
	}
}

if ( ! function_exists( 'pitch_qode_is_in_menu' ) ) {
	function pitch_qode_is_in_menu( $menu = null, $object_id = null ) {
		$nav    = wp_get_nav_menu_items( $menu );
		$result = 0;
		
		if ( ! empty( $nav ) ) {
			foreach ( $nav as $item ) {
				
				if ( $object_id == $item->object_id ) {
					$result = $item;
				}
			}
		}
		
		return $result;
	}
}

if ( ! function_exists( 'pitch_qode_replace_menu_name' ) ) {
	function pitch_qode_replace_menu_name() {
		$result = 0;
		if ( pitch_qode_options()->getOptionValue( 'qode_enable_login_page' ) == 'yes' && pitch_qode_options()->getOptionValue( 'qode_login_page' ) ) {
			if ( is_user_logged_in() ) {
				$menus     = wp_get_nav_menus();
				$menu_item = null;
				foreach ( $menus as $menu ) {
					$menu_item = pitch_qode_is_in_menu( $menu->term_id, pitch_qode_options()->getOptionValue( 'qode_login_page' ) );
				}
				if ( $menu_item != null ) {
					$result = $menu_item->ID;
				}
			}
		}
		
		return $result;
	}
	
	add_action( 'get_header', 'pitch_qode_replace_menu_name' );
}

if ( pitch_qode_return_toolbar_variable() ):
	add_action( 'after_setup_theme', 'pitch_qode_start_session', 10 );
	add_action( 'wp_logout', 'pitch_qode_end_session' );
	add_action( 'wp_login', 'pitch_qode_end_session' );
	/* Start session */
	
	if ( ! function_exists( 'pitch_qode_start_session' ) ) {
		function pitch_qode_start_session( $classes ) {
			if ( ! session_id() ) {
				session_start();
			}
			
			$classes[] = 'toolbar_sesion_on';
			
			if ( isset( $_SESSION['enable_popup_menu'] ) ) {
				if ( $_SESSION['enable_popup_menu'] == "yes" || $_SESSION['enable_popup_menu'] == "no" ) {
					pitch_qode_options()->addOption( "enable_popup_menu", $_SESSION['enable_popup_menu'] );
				}
				
				if ( $_SESSION['enable_popup_menu'] == "yes" ) {
					$classes[] = 'landing_fullscreen_menu_on';
				}
			}
			if ( isset( $_SESSION['enable_side_area'] ) ) {
				if ( $_SESSION['enable_side_area'] == "yes" || $_SESSION['enable_side_area'] == "no" ) {
					pitch_qode_options()->addOption( "enable_side_area", $_SESSION['enable_side_area'] );
				}
				if ( $_SESSION['enable_side_area'] == "yes" ) {
					$classes[] = 'landing_side_area_on';
				}
				
			}
			if ( isset( $_SESSION['menu_appearance'] ) ) {
				if ( $_SESSION['menu_appearance'] == "default" || $_SESSION['menu_appearance'] == "top_menu_slide_down" ) {
					pitch_qode_options()->addOption( "menu_appearance", $_SESSION['menu_appearance'] );
				}
				if ( $_SESSION['menu_appearance'] == "top_menu_slide_down" ) {
					$classes[] = 'top_menu_slide_down_on';
				}
			}
			
			return $classes;
		}
		
		add_filter( 'body_class', 'pitch_qode_start_session' );
	}
	/* End session */
	if ( ! function_exists( 'pitch_qode_end_session' ) ) {
		function pitch_qode_end_session() {
			session_destroy();
		}
	}
endif;
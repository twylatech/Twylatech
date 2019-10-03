<?php

if(!function_exists('pitch_qode_is_responsive_on')) {
    /**
     * Checks whether responsive mode is enabled in theme options
     * @return bool
     */
    function pitch_qode_is_responsive_on() {
        return pitch_qode_options()->getOptionValue( 'responsiveness' ) !== 'no';
    }
}

if(!function_exists('pitch_qode_is_seo_enabled')) {
    /**
     * Checks if SEO is enabled in theme options
     * @return bool
     */
    function pitch_qode_is_seo_enabled() {
        return pitch_qode_options()->getOptionValue( 'disable_qode_seo' ) == 'no';
    }
}

if(!function_exists('pitch_qode_is_ios_format_detection_disabled')){
    /**
     * Checks whether iOS format detection is enabled in theme options
     * @return bool
     */
    function pitch_qode_is_ios_format_detection_disabled(){
        return pitch_qode_options()->getOptionValue( 'ios_format_detection' ) == 'yes';
    }
}

if(!function_exists('pitch_qode_get_header_variables')) {
    function pitch_qode_get_header_variables() {
        //init variables
        $id = pitch_qode_get_page_id();
        $loading_animation = true;
        $loading_image =  "";
        $enable_side_area = "yes";
        $enable_popup_menu = "no";
        $popup_menu_animation_style = '';
        $enable_fullscreen_search = "no";
        $fullscreen_search_animation = "fade";
        $fullscreen_search_in_header_top = "";
        $header_button_size = '';
        $paspartu_header_alignment = false;
        $header_in_grid = true;
        $header_bottom_class = ' header_in_grid';
        $menu_item_icon_position = "";
        $menu_position = "";
        $centered_logo = pitch_qode_is_logo_centered();
        $enable_border_top_bottom_menu = false;
        $menu_dropdown_appearance_class = "";
        $logo_wrapper_style = "";
        $divided_left_menu_padding = "";
        $divided_right_menu_padding = "";
        $display_header_top = "yes";
        $header_top_area_scroll = "no";
        $header_style = pitch_qode_get_header_style();
        $header_color_transparency_per_page = pitch_qode_get_header_transparency();
        $header_top_color_transparency_per_page = pitch_qode_get_header_top_transparency();
        $header_color_per_page = "";
        $header_top_color_per_page = "";
        $header_color_transparency_on_scroll = "";
        $header_bottom_border_style = '';
        $header_bottom_appearance = 'fixed';
        $header_transparency = '';
        $enable_vertical_menu = false;
        $enable_search_left_sidearea_right = false;
        $vertical_area_background_image = "";
        $vertical_menu_style = "toggle";
        $vertical_area_scroll = " with_scroll";
        $page_vertical_area_background_transparency = "";
        $page_vertical_area_background = "";
        $header_search_type = "";
		$menu_hover_animation_class = "";
		$top_menu_appearance = 'off';

        if (pitch_qode_options()->getOptionValue( 'loading_animation' )) {
            if(pitch_qode_options()->getOptionValue( 'loading_animation' ) == "off") {
                $loading_animation = false;
            }
        }

        if (pitch_qode_options()->getOptionValue( 'loading_image' ) != "") {
            $loading_image = pitch_qode_options()->getOptionValue( 'loading_image' );
        }

        if (pitch_qode_options()->getOptionValue( 'enable_side_area' )) {
            if(pitch_qode_options()->getOptionValue( 'enable_side_area' ) == "no") {
                $enable_side_area = "no";
            }
        }
		
		if (pitch_qode_options()->getOptionValue( 'menu_appearance' ) != "default") {
			$top_menu_appearance = "on";
        }

        if (pitch_qode_options()->getOptionValue( 'enable_popup_menu' )) {
            if(pitch_qode_options()->getOptionValue( 'enable_popup_menu' ) == "yes" && has_nav_menu('popup-navigation')) {
                $enable_popup_menu = "yes";
            }

            if (pitch_qode_options()->getOptionValue( 'popup_menu_animation_style' )) {
                $popup_menu_animation_style = pitch_qode_options()->getOptionValue( 'popup_menu_animation_style' );
            }
        }

        if(pitch_qode_options()->getOptionValue( 'enable_search' ) == "yes" && pitch_qode_options()->getOptionValue( 'search_type' ) == "fullscreen_search" ){
            $enable_fullscreen_search="yes";
        }

        if(pitch_qode_options()->getOptionValue( 'search_type' ) == "fullscreen_search" && pitch_qode_options()->getOptionValue( 'search_animation' ) !== "" ){
            $fullscreen_search_animation = pitch_qode_options()->getOptionValue( 'search_animation' );
        }

        if(pitch_qode_options()->getOptionValue( 'search_icon_in_header_top' ) == 'yes'){
        	$fullscreen_search_in_header_top = " fullscreen_search_in_header_top";
        }

        if(pitch_qode_options()->getOptionValue( 'header_buttons_size' )){
            $header_button_size = pitch_qode_options()->getOptionValue( 'header_buttons_size' );
        }

        if(pitch_qode_options()->getOptionValue( 'paspartu_header_alignment' ) == 'yes'
            && pitch_qode_options()->getOptionValue( 'paspartu' ) == 'yes') {
            $paspartu_header_alignment = true;
        }

        if (pitch_qode_options()->getOptionValue( 'header_in_grid' ) == "no" || $paspartu_header_alignment){
            $header_in_grid = false;
        }

        if($header_in_grid) {
            $header_bottom_class = ' header_in_grid';
        } else {
            $header_bottom_class = ' header_full_width';
        }

        if(pitch_qode_options()->getOptionValue( 'menu_item_icon_position' )) {
            $menu_item_icon_position = pitch_qode_options()->getOptionValue( 'menu_item_icon_position' );
        }

        if(pitch_qode_options()->getOptionValue( 'menu_position' )) {
            $menu_position = pitch_qode_options()->getOptionValue( 'menu_position' );
        }


        if(pitch_qode_options()->getOptionValue( 'enable_border_top_bottom_menu' ) == "yes") {
            $enable_border_top_bottom_menu = true;
        }

        if(pitch_qode_options()->getOptionValue( 'menu_dropdown_appearance' ) != "default"){
            $menu_dropdown_appearance_class = pitch_qode_options()->getOptionValue( 'menu_dropdown_appearance' );
        }
		
		if(pitch_qode_options()->getOptionValue( 'menu_item_hover_animation' ) != "default" ){
			$menu_hover_animation_class = pitch_qode_options()->getOptionValue( 'menu_item_hover_animation' );
		}

        if(pitch_qode_options()->getOptionValue( 'header_bottom_appearance' ) == "stick_with_left_right_menu"){
            $logo_wrapper_style = 'width:'.(esc_attr(pitch_qode_options()->getOptionValue( 'logo_width' ))/2).'px;';
            $divided_left_menu_padding = 'padding-right:'.(esc_attr(pitch_qode_options()->getOptionValue( 'logo_width' ))/4).'px;';
            $divided_right_menu_padding = 'padding-left:'.(esc_attr(pitch_qode_options()->getOptionValue( 'logo_width' ))/4).'px;';
        }

        if(pitch_qode_options()->getOptionValue( 'center_logo_image' ) == "yes" && pitch_qode_options()->getOptionValue( 'header_bottom_appearance' ) == "regular"){
            $logo_wrapper_style = 'height:'.(esc_attr(pitch_qode_options()->getOptionValue( 'logo_height' ))/2).'px;';
        }

        if(pitch_qode_options()->getOptionValue( 'header_bottom_appearance' ) == "fixed_top_header"){
            $logo_wrapper_style = 'height:'.(esc_attr(pitch_qode_options()->getOptionValue( 'logo_height' ))/2).'px;';
        }

        if(pitch_qode_options()->getOptionValue( 'header_top_area' )){
            $display_header_top = pitch_qode_options()->getOptionValue( 'header_top_area' );
        }

        if(pitch_qode_options()->getOptionValue( 'header_top_area_scroll' )){
            $header_top_area_scroll = pitch_qode_options()->getOptionValue( 'header_top_area_scroll' );
        }

        if(get_post_meta($id, "qode_header_color_per_page", true) != ""){
            if($header_color_transparency_per_page != ""){
                $header_background_color = pitch_qode_hex2rgb(esc_attr(get_post_meta($id, "qode_header_color_per_page", true)));
                $header_color_per_page .= "background-color:rgba(" . $header_background_color[0] . ", " . $header_background_color[1] . ", " . $header_background_color[2] . ", " . $header_color_transparency_per_page . ");";
            }else{
                $header_color_per_page .= "background-color:" . esc_attr(get_post_meta($id, "qode_header_color_per_page", true)) . ";";
            }
        } else if($header_color_transparency_per_page != "" && get_post_meta($id, "qode_header_color_per_page", true) == ""){
            $header_background_color = pitch_qode_options()->getOptionValue( 'header_background_color' ) ? pitch_qode_hex2rgb(esc_attr(pitch_qode_options()->getOptionValue( 'header_background_color' ))) : pitch_qode_hex2rgb("#ffffff");
            $header_color_per_page .= "background-color:rgba(" . $header_background_color[0] . ", " . $header_background_color[1] . ", " . $header_background_color[2] . ", " . $header_color_transparency_per_page . ");";
        }

        if(pitch_qode_options()->getOptionValue( 'header_botom_border_in_grid' ) != "yes" && get_post_meta($id, "qode_header_bottom_border_color", true) != ""){
            $header_color_per_page .= "border-bottom: 1px solid ".esc_attr(get_post_meta($id, "qode_header_bottom_border_color", true)).";";
        }

        if(get_post_meta($id, "qode_header_top_color_per_page", true) != ""){
            if($header_top_color_transparency_per_page != ""){
                $header_top_background_color = pitch_qode_hex2rgb(esc_attr(get_post_meta($id, "qode_header_top_color_per_page", true)));
                $header_top_color_per_page .= "background-color:rgba(" . esc_attr($header_top_background_color[0]) . ", " . esc_attr($header_top_background_color[1]) . ", " . esc_attr($header_top_background_color[2]) . ", " . esc_attr($header_top_color_transparency_per_page) . ");";
            }else{
                $header_top_color_per_page .= "background-color:" . esc_attr(get_post_meta($id, "qode_header_top_color_per_page", true)) . ";";
            }
        } else if($header_top_color_transparency_per_page != "" && get_post_meta($id, "qode_header_top_color_per_page", true) == ""){
            $header_top_background_color = pitch_qode_options()->getOptionValue( 'header_top_background_color' ) ? pitch_qode_hex2rgb(esc_attr(pitch_qode_options()->getOptionValue( 'header_top_background_color' ))) : pitch_qode_hex2rgb("#ffffff");
            $header_top_color_per_page .= "background-color:rgba(" . esc_attr($header_top_background_color[0]) . ", " . esc_attr($header_top_background_color[1]) . ", " . esc_attr($header_top_background_color[2]) . ", " . esc_attr($header_top_color_transparency_per_page) . ");";
        }

        if(pitch_qode_options()->getOptionValue( 'header_background_transparency_sticky' ) != ""){
            $header_color_transparency_on_scroll = pitch_qode_options()->getOptionValue( 'header_background_transparency_sticky' );
        }

        if(pitch_qode_options()->getOptionValue( 'header_botom_border_in_grid' ) == "yes" && get_post_meta($id, "qode_header_bottom_border_color", true) != ""){
            $header_bottom_border_style = 'border-bottom: 1px solid '.esc_attr(get_post_meta($id, "qode_header_bottom_border_color", true)).';';
        }


        if(pitch_qode_options()->getOptionValue( 'header_bottom_appearance' )){
            $header_bottom_appearance = pitch_qode_options()->getOptionValue( 'header_bottom_appearance' );
        }

        $per_page_header_transparency = esc_attr(get_post_meta($id, 'qode_header_color_transparency_per_page', true));
        if($per_page_header_transparency !== '' && $per_page_header_transparency !== false) {
            $header_transparency = $per_page_header_transparency;
        } else {
            $header_transparency = esc_attr(pitch_qode_options()->getOptionValue( 'header_background_transparency_initial' ));
        }

        if(pitch_qode_is_side_header()){
            $enable_vertical_menu = true;
        }

        if(pitch_qode_options()->getOptionValue( 'header_bottom_appearance' ) =='fixed_hiding'){
            if(pitch_qode_options()->getOptionValue( 'search_left_sidearea_right' ) =='yes'){
                $enable_search_left_sidearea_right = true;
            }
        }else{
            if(pitch_qode_options()->getOptionValue( 'search_left_sidearea_right_regular' ) =='yes'){
                $enable_search_left_sidearea_right = true;
            }
        }

        if(pitch_qode_options()->getOptionValue( 'vertical_area_background_image' ) != "" && pitch_qode_options()->getOptionValue( 'vertical_area_dropdown_showing' ) != "side" && get_post_meta($id, "qode_page_disable_vertical_area_background_image", true) != "yes") {
            $vertical_area_background_image = pitch_qode_options()->getOptionValue( 'vertical_area_background_image' );
        }
        if(get_post_meta($id, "qode_page_vertical_area_background_image", true) != "" && get_post_meta($id, "qode_page_disable_vertical_area_background_image", true) != "yes" && pitch_qode_options()->getOptionValue( 'vertical_area_dropdown_showing' ) != "side"){
            $vertical_area_background_image = get_post_meta($id, "qode_page_vertical_area_background_image", true);
        }

        $vertical_area_dropdown_showing = pitch_qode_options()->getOptionValue( 'vertical_area_dropdown_showing' );

        switch($vertical_area_dropdown_showing){
            case 'hover':
                $vertical_menu_style = "toggle";
                break;
            case 'click':
                $vertical_menu_style = "toggle click";
                break;
            case 'side':
                $vertical_menu_style = "side";
                break;
            case 'to_content':
                $vertical_menu_style = "to_content";
                break;
            default:
                $vertical_menu_style = "toggle";

        }
        $vertical_area_scroll = " with_scroll";
        if ($vertical_area_dropdown_showing == 'to_content') {
            $vertical_area_scroll = "";
        }

        if(pitch_qode_options()->getOptionValue( 'paspartu' ) == 'yes' && pitch_qode_options()->getOptionValue( 'vertical_menu_inside_paspartu' ) == 'yes'){
            if(pitch_qode_options()->getOptionValue( 'vertical_area_background_transparency' ) != "") {
                $page_vertical_area_background_transparency = esc_attr(pitch_qode_options()->getOptionValue( 'vertical_area_background_transparency' ));
            }
            if(get_post_meta($id, "qode_page_vertical_area_background_opacity", true) != ""){
                $page_vertical_area_background_transparency = esc_attr(get_post_meta($id, "qode_page_vertical_area_background_opacity", true));
            }

            if(pitch_qode_options()->getOptionValue( 'vertical_area_dropdown_showing' ) == "side"){
                $page_vertical_area_background_transparency = 1;
            }
        }
        else if(pitch_qode_options()->getOptionValue( 'paspartu' ) == 'no') {
            if(pitch_qode_options()->getOptionValue( 'vertical_area_background_transparency' ) != "") {
                $page_vertical_area_background_transparency = esc_attr(pitch_qode_options()->getOptionValue( 'vertical_area_background_transparency' ));
            }
            if(get_post_meta($id, "qode_page_vertical_area_background_opacity", true) != ""){
                $page_vertical_area_background_transparency = esc_attr(get_post_meta($id, "qode_page_vertical_area_background_opacity", true));
            }

            if(pitch_qode_options()->getOptionValue( 'vertical_area_dropdown_showing' ) == "side"){
                $page_vertical_area_background_transparency = 1;
            }
        }

        if(get_post_meta($id, "qode_page_vertical_area_background", true) != ""){
            $page_vertical_area_background =esc_attr(get_post_meta($id, 'qode_page_vertical_area_background', true));

        }else if(get_post_meta($id, "qode_page_vertical_area_background", true) == ""){
            $page_vertical_area_background = pitch_qode_options()->getOptionValue( 'vertical_area_background' );
        }

        $bkg_image="";
        $page_vertical_area_background_style = "";
        $page_vertical_area_background_transparency_style = "";
        if($vertical_area_background_image != ""){ $bkg_image = 'background-image:url('.esc_url($vertical_area_background_image).');'; }
        if($page_vertical_area_background != ""){ $page_vertical_area_background_style = 'background-color:'.esc_attr($page_vertical_area_background).';'; }
        if($page_vertical_area_background_transparency != ""){ $page_vertical_area_background_transparency_style = 'opacity:'.esc_attr($page_vertical_area_background_transparency).';'; }

        $vertical_area_menu_items_arrow = '';
        if (pitch_qode_options()->getOptionValue( 'vertical_area_menu_items_arrow' ) =='yes' ){
            $vertical_area_menu_items_arrow = 'with_arrow';
        }

		$header_search_type = 'search_slides_from_top';
		if(pitch_qode_options()->getOptionValue( 'search_type' ) !== '') {
			$header_search_type = pitch_qode_options()->getOptionValue( 'search_type' );
		}
		if(pitch_qode_options()->getOptionValue( 'search_type' ) == 'search_covers_header') {
			if (pitch_qode_options()->getOptionValue( 'search_cover_only_bottom_yesno' )=='yes') {
				$header_search_type .= ' search_covers_only_bottom';
			}
		}
		if (pitch_qode_options()->getOptionValue( 'search_icon_background_full_height' ) == 'yes'){
			$header_search_type .= ' search_icon_bckg_full';
		}

        return array(
            'id' => $id,
            'loading_animation' => $loading_animation,
            'loading_image' => $loading_image,
            'enable_side_area' => $enable_side_area,
            'enable_popup_menu' => $enable_popup_menu,
			'top_menu_appearance' => $top_menu_appearance,
            'popup_menu_animation_style' => $popup_menu_animation_style,
            'enable_fullscreen_search' => $enable_fullscreen_search,
            'fullscreen_search_animation' => $fullscreen_search_animation,
            'fullscreen_search_in_header_top' => $fullscreen_search_in_header_top,
            'header_button_size' => $header_button_size,
            'header_in_grid' => $header_in_grid,
            'header_bottom_class' => $header_bottom_class,
            'menu_item_icon_position' => $menu_item_icon_position,
            'menu_position' => $menu_position,
            'centered_logo' => $centered_logo,
            'enable_border_top_bottom_menu' => $enable_border_top_bottom_menu,
            'menu_dropdown_appearance_class' => $menu_dropdown_appearance_class,
            'logo_wrapper_style' => $logo_wrapper_style,
            'divided_left_menu_padding' => $divided_left_menu_padding,
            'divided_right_menu_padding' => $divided_right_menu_padding,
            'display_header_top' => $display_header_top,
            'header_top_area_scroll' => $header_top_area_scroll,
            'header_style' => $header_style,
			'menu_hover_animation_class' => $menu_hover_animation_class,
            'header_color_transparency_per_page' => $header_color_transparency_per_page,
            'header_color_per_page' => $header_color_per_page,
            'header_top_color_per_page' => $header_top_color_per_page,
            'header_color_transparency_on_scroll' => $header_color_transparency_on_scroll,
            'header_bottom_border_style' => $header_bottom_border_style,
            'header_bottom_appearance' => $header_bottom_appearance,
            'header_transparency' => $header_transparency,
            'enable_vertical_menu' => $enable_vertical_menu,
            'enable_search_left_sidearea_right' => $enable_search_left_sidearea_right,
            'vertical_area_background_image' => $vertical_area_background_image,
            'vertical_menu_style' => $vertical_menu_style,
            'vertical_area_scroll' => $vertical_area_scroll,
            'page_vertical_area_background_transparency' => $page_vertical_area_background_transparency,
            'page_vertical_area_background' => $page_vertical_area_background,
            'bkg_image' => $bkg_image,
            'page_vertical_area_background_style' => $page_vertical_area_background_style,
            'page_vertical_area_background_transparency_style' => $page_vertical_area_background_transparency_style,
            'vertical_area_menu_items_arrow' => $vertical_area_menu_items_arrow,
            'header_search_type' => $header_search_type
        );
    }
}

if(!function_exists('pitch_qode_get_footer_variables')) {
    function pitch_qode_get_footer_variables() {
        $id = pitch_qode_get_page_id();

        $footer_border_columns				= 'yes';
        $footer_top_border_color            = '';
        $footer_top_border_in_grid          = '';
        $footer_bottom_border_in_grid       = '';
        $footer_bottom_border_color         = '';
        $footer_bottom_border_bottom_color  = '';
        $footer_classes                     = '';
        $footer_classes_array               = array();
        $footer_in_grid                     = true;
        $footer_top_columns                 = 4;
        $footer_bottom_columns              = 3;

        if(pitch_qode_options()->getOptionValue( 'footer_border_columns' ) !== '') {
            $footer_border_columns = pitch_qode_options()->getOptionValue( 'footer_border_columns' );
        }

        if(pitch_qode_options()->getOptionValue( 'footer_top_border_color' )) {
            if (pitch_qode_options()->getOptionValue( 'footer_top_border_width' ) !== '') {
                $footer_border_height = pitch_qode_options()->getOptionValue( 'footer_top_border_width' );
            } else {
                $footer_border_height = '1';
            }

            $footer_top_border_color = 'height: '.esc_attr($footer_border_height).'px;background-color: '.esc_attr(pitch_qode_options()->getOptionValue( 'footer_top_border_color' )).';';
        }

        if(pitch_qode_options()->getOptionValue( 'footer_top_border_in_grid' ) == 'yes') {
            $footer_top_border_in_grid = 'in_grid';
        }

        if(pitch_qode_options()->getOptionValue( 'footer_bottom_border_in_grid' ) == 'yes') {
            $footer_bottom_border_in_grid = 'in_grid';
        }

        if(pitch_qode_options()->getOptionValue( 'footer_bottom_border_color' )) {
            if(pitch_qode_options()->getOptionValue( 'footer_bottom_border_width' )) {
                $footer_bottom_border_width = pitch_qode_options()->getOptionValue( 'footer_bottom_border_width' ).'px';
            }
            else{
                $footer_bottom_border_width = '1px';
            }

            $footer_bottom_border_color = 'height: '.esc_attr($footer_bottom_border_width).';background-color: '.esc_attr(pitch_qode_options()->getOptionValue( 'footer_bottom_border_color' )).';';
        }


        if(pitch_qode_options()->getOptionValue( 'footer_bottom_border_bottom_color' )) {
            if(pitch_qode_options()->getOptionValue( 'footer_bottom_border_bottom_width' )) {
                $footer_bottom_border_bottom_width = pitch_qode_options()->getOptionValue( 'footer_bottom_border_bottom_width' ).'px';
            } else {
                $footer_bottom_border_bottom_width = '1px';
            }

            $footer_bottom_border_bottom_color = 'height: '.esc_attr($footer_bottom_border_bottom_width).';background-color: '.esc_attr(pitch_qode_options()->getOptionValue( 'footer_bottom_border_bottom_color' )).';';
        }

        //is uncovering footer option set in theme options?
        if(pitch_qode_options()->getOptionValue( 'uncovering_footer' ) == "yes" && pitch_qode_options()->getOptionValue( 'paspartu' ) == 'no') {
            //add uncovering footer class to array
            $footer_classes_array[] = 'uncover';
        }


        if(get_post_meta($id, "qode_footer-disable", true) == "yes"){
            $footer_classes_array[] = 'disable_footer';
        }

        if($footer_border_columns == 'yes') {
            $footer_classes_array[] = 'footer_border_columns';
        }

        if(pitch_qode_options()->getOptionValue( 'paspartu' ) == 'yes' && pitch_qode_options()->getOptionValue( 'paspartu_footer_alignment' ) == 'yes'){
            $footer_classes_array[]= 'paspartu_footer_alignment';
        }

        if(pitch_qode_options()->getOptionValue( 'overlapping_content' ) == 'yes' && pitch_qode_options()->getOptionValue( 'overlapping_bottom_content_amount' ) !== "") {
            $footer_classes_array[]= 'footer_overlapped';
        }

        //is some class added to footer classes array?
        if(is_array($footer_classes_array) && count($footer_classes_array)) {
            //concat all classes and prefix it with class attribute
            $footer_classes = esc_attr(implode(' ', $footer_classes_array));
        }

        if(pitch_qode_options()->getOptionValue( 'footer_in_grid' )){
            if (pitch_qode_options()->getOptionValue( 'footer_in_grid' ) != "yes") {
                $footer_in_grid = false;
            }
        }

        if (pitch_qode_options()->getOptionValue( 'footer_top_columns' )) {
            $footer_top_columns = pitch_qode_options()->getOptionValue( 'footer_top_columns' );
        }

        if (pitch_qode_options()->getOptionValue( 'footer_bottom_columns' )) {
            $footer_bottom_columns = pitch_qode_options()->getOptionValue( 'footer_bottom_columns' );
        }
	
	    return array(
		    'footer_border_columns'             => $footer_border_columns,
		    'footer_top_border_color'           => $footer_top_border_color,
		    'footer_top_border_in_grid'         => $footer_top_border_in_grid,
		    'footer_bottom_border_in_grid'      => $footer_bottom_border_in_grid,
		    'footer_bottom_border_color'        => $footer_bottom_border_color,
		    'footer_bottom_border_bottom_color' => $footer_bottom_border_bottom_color,
		    'footer_classes'                    => $footer_classes,
		    'display_footer_text'               => pitch_qode_is_footer_bottom_enabled(),
		    'footer_in_grid'                    => $footer_in_grid,
		    'display_footer_top'                => pitch_qode_is_footer_top_enabled(),
		    'footer_top_columns'                => $footer_top_columns,
		    'footer_bottom_columns'             => $footer_bottom_columns
	    );
    }
}

if ( ! function_exists( 'pitch_qode_is_footer_top_enabled' ) ) {
	function pitch_qode_is_footer_top_enabled() {
		$footer_top_flag = false;
		
		//check value from options and meta field on current page
		$option_flag = true;
		if ( pitch_qode_options()->getOptionValue( 'show_footer_top' ) == "no" ) {
			$option_flag = false;
		}
		
		//check footer columns.If they are empty, disable footer top
		$columns_flag = false;
		for ( $i = 1; $i <= 4; $i ++ ) {
			$footer_columns_id = 'footer_column_' . $i;
			if ( is_active_sidebar( $footer_columns_id ) ) {
				$columns_flag = true;
				break;
			}
		}
		
		if ( $option_flag && $columns_flag ) {
			$footer_top_flag = true;
		}
		
		return $footer_top_flag;
	}
}

if ( ! function_exists( 'pitch_qode_is_footer_bottom_enabled' ) ) {
	function pitch_qode_is_footer_bottom_enabled() {
		$footer_bottom_flag = false;
		
		//check value from options and meta field on current page
		$option_flag = true;
		if ( pitch_qode_options()->getOptionValue( 'footer_text' ) == "no" ) {
			$option_flag = false;
		}
		
		//check footer columns.If they are empty, disable footer top
		$columns_flag = false;
		if ( is_active_sidebar( 'footer_text' ) || is_active_sidebar( 'footer_bottom_left' ) || is_active_sidebar( 'footer_bottom_right' ) ) {
			$columns_flag = true;
		}
		
		if ( $option_flag && $columns_flag ) {
			$footer_bottom_flag = true;
		}
		
		return $footer_bottom_flag;
	}
}

if(!function_exists('pitch_qode_is_logo_centered')) {
    /**
     * Checks if logo is centered or not
     * @return bool
     */
    function pitch_qode_is_logo_centered() {
        $centered_logo = false;

        if (pitch_qode_options()->getOptionValue( 'center_logo_image' )) {
            if(pitch_qode_options()->getOptionValue( 'center_logo_image' ) == "yes" && (pitch_qode_options()->getOptionValue( 'header_bottom_appearance' ) == "stick" || pitch_qode_options()->getOptionValue( 'header_bottom_appearance' ) == "regular" || pitch_qode_options()->getOptionValue( 'header_bottom_appearance' ) == "fixed")) {
                $centered_logo = true;
            }
        }

        if(pitch_qode_options()->getOptionValue( 'header_bottom_appearance' ) == "fixed_hiding"){
            $centered_logo = true;
        }

        return $centered_logo;
    }
}

if(!function_exists('pitch_qode_get_header_style')) {
    /**
     * Returns current page header style. It first checks in current page meta field,
     * if that isn't set it checks in global options
     * @return mixed|string
     */
    function pitch_qode_get_header_style() {
        $id = pitch_qode_get_page_id();
        $header_style = '';

        if(get_post_meta($id, "qode_header-style", true) != "") {
            $header_style = get_post_meta($id, "qode_header-style", true);
        } elseif(pitch_qode_options()->getOptionValue( 'header_style' )) {
            $header_style = pitch_qode_options()->getOptionValue( 'header_style' );
        }

        return $header_style;
    }
}

if(!function_exists('pitch_qode_get_header_transparency')) {
    /**
     * Returns current page's header transparency. First it checks in current page custom field,
     * if not set it checks in global options
     * @return mixed|string
     */
    function pitch_qode_get_header_transparency() {
        $id = pitch_qode_get_page_id();
        $header_color_transparency_per_page = '';


        if(get_post_meta($id, "qode_header_color_transparency_per_page", true) != ""){
            $header_color_transparency_per_page = get_post_meta($id, "qode_header_color_transparency_per_page", true);
        } elseif(pitch_qode_options()->getOptionValue( 'header_background_transparency_initial' ) != "") {
            $header_color_transparency_per_page = pitch_qode_options()->getOptionValue( 'header_background_transparency_initial' );
        }

        return $header_color_transparency_per_page;
    }
}

if(!function_exists('pitch_qode_get_header_top_transparency')) {
    /**
     * Returns current page's header top transparency. First it checks in current page custom field,
     * if not set it checks in global options
     * @return mixed|string
     */
    function pitch_qode_get_header_top_transparency() {
        $id = pitch_qode_get_page_id();
        $header_top_color_transparency_per_page = '';


        if(get_post_meta($id, "qode_header_top_color_transparency_per_page", true) != ""){
            $header_top_color_transparency_per_page = get_post_meta($id, "qode_header_top_color_transparency_per_page", true);
        } elseif(pitch_qode_options()->getOptionValue( 'header_top_transparency' ) != "") {
            $header_top_color_transparency_per_page = pitch_qode_options()->getOptionValue( 'header_top_transparency' );
        }

        return $header_top_color_transparency_per_page;
    }
}

if(!function_exists('pitch_qode_is_top_header')) {
    /**
     * Checks if header type is top
     * @return bool
     */
    function pitch_qode_is_top_header() {
		$top_header = false;
		
        if(pitch_qode_options()->getOptionValue( 'header_type' ) == "top") {
            $top_header = true;
        }

        return $top_header;
    }
}

if(!function_exists('pitch_qode_is_side_header')) {
    /**
     * Checks if header type is side
     * @return bool
     */
    function pitch_qode_is_side_header() {
		$side_header = false;
		
        if(pitch_qode_options()->getOptionValue( 'header_type' ) == "side") {
            $side_header = true;
        }

        return $side_header;
    }
}

if(!function_exists('pitch_qode_space_around_content')) {
    /**
     * Checks if there is spacing around content
     * @return bool
     */
    function pitch_qode_space_around_content() {
        $space_around_content = false;

        if(pitch_qode_options()->getOptionValue( 'boxed' ) == "yes" && pitch_qode_options()->getOptionValue( 'spacing_arround_content' ) == "yes") {
            $space_around_content = true;
        }

        return $space_around_content;
    }
}

if(!function_exists('pitch_qode_include_footer_in_content')) {
    /**
     * Checks if footer is included in spacing
     * @return bool
     */
    function pitch_qode_include_footer_in_content() {
        $include_footer_in_content = false;

        if(pitch_qode_options()->getOptionValue( 'boxed' ) == "yes" && pitch_qode_options()->getOptionValue( 'spacing_arround_content' ) == "yes" && pitch_qode_options()->getOptionValue( 'footer_in_content' ) == "yes") {
            $include_footer_in_content = true;
        }

        return $include_footer_in_content;
    }
}
<?php

if ( ! function_exists( 'pitch_qode_register_button' ) ) {
	function pitch_qode_register_button( $buttons ) {
		array_push( $buttons, "|", "qode_shortcodes" );
		
		return $buttons;
	}
}

if ( ! function_exists( 'pitch_qode_add_plugin' ) ) {
	function pitch_qode_add_plugin( $plugin_array ) {
		$plugin_array['qode_shortcodes'] = PITCH_CORE_MODULES_URL_PATH . '/shortcodes/qode_shortcodes.js';
		
		return $plugin_array;
	}
}

if ( ! function_exists( 'pitch_qode_shortcodes_button' ) ) {
	function pitch_qode_shortcodes_button() {
		if ( ! current_user_can( 'edit_posts' ) && ! current_user_can( 'edit_pages' ) ) {
			return;
		}
		
		if ( get_user_option( 'rich_editing' ) == 'true' ) {
			add_filter( 'mce_external_plugins', 'pitch_qode_add_plugin' );
			add_filter( 'mce_buttons', 'pitch_qode_register_button' );
		}
	}
	
	add_action( 'after_setup_theme', 'pitch_qode_shortcodes_button' );
}

if ( ! function_exists( 'pitch_qode_remove_wpautop' ) ) {
	function pitch_qode_remove_wpautop( $content, $autop = false ) {
		if ( $autop ) {
			$content = wpautop( preg_replace( '/<\/?p\>/', "\n", $content ) . "\n" );
		}
		
		return do_shortcode( shortcode_unautop( $content ) );
	}
}

/* Call To Action shortcode */

if (!function_exists('no_call_to_action')) {
    function no_call_to_action($atts, $content = null) {
        $args = array(
            "type" => "normal",
            "full_width" => "yes",
            "content_in_grid" => "yes",
            "grid_size" => "75",
            "icon_size" => "",
            "icon_position" => "top",
            "icon_color" => "",
            "custom_icon" => "",
            "background_color" => "",
            "border_color" => "",
            "box_padding" => "20px",
            "show_button" => "yes",
            "button_position" => "right",
            "button_size" => "",
            "button_link" => "",
            "button_text" => "button",
            "button_target" => "",
            "button_text_color" => "",
            "button_hover_text_color" => "",
            "button_background_color" => "",
            "button_hover_background_color" => "",
            "button_border_color" => "",
            "button_border_width" => "",
            "button_hover_border_color" => "",
            "border_radius" => "",
            "button_icon_pack" => "",
            "button_icon_size" => "",
            "button_icon_color" => "",
            "button_icon_hover_color" => "",
            "text_color" => "", //used only when shortcode is called from call to action widget
            "text_size" => "",
            "button_hover_animation" => "default",
            'button_icon_position' => 'right', 
        );
        $call_to_action_icons_form_fields = array();

        foreach (pitch_qode_icon_collections()->iconCollections as $collection_key => $collection) {
            $call_to_action_icons_form_fields['button_' . $collection->param ] = '';
        }
        
        $args = array_merge($args, pitch_qode_icon_collections()->getShortcodeParams(),$call_to_action_icons_form_fields);

        extract(shortcode_atts($args, $atts));

        $html = '';
        $action_classes = '';
        $action_styles = '';
        $text_wrapper_classes = '';
        $button_styles = '';
        $icon_styles = '';
        $data_attr = '';
        $content_styles = '';
        $action_inner_styles = '';
        $icon_inner_style = '';
        $call_to_action_text_class = "";
        $button_icon = "";
        $button_icon_styles = "";        

        if ($show_button == 'yes') {
            $text_wrapper_classes .= 'to_action_column1 to_action_cell';
        }

        if ($background_color != '') {
            $action_styles .= 'background-color: ' . $background_color . ';';
        }
        $action_classes .= $type;
        if ($border_color != '') {
            $action_styles .= 'border: 1px solid ' . $border_color . ';';
        }
        if ($box_padding != '') {
            $action_inner_styles .= 'padding: ' . $box_padding . ';';
        }

        if ($button_text_color != '') {
            $button_styles .= 'color: ' . $button_text_color . ';';
        }
        if ($icon_color != "") {
            $icon_styles = 'color: ' . $icon_color . ';';
        }

        if ($icon_size != '') {
            $icon_styles .= 'font-size: ' . $icon_size . 'px;';
        }
        if ($button_icon_color != "") {
            $button_icon_styles = 'color: ' . $button_icon_color . ';';
        }

        if ($button_icon_size != '') {
            $button_icon_styles .= 'font-size: ' . $button_icon_size . 'px;';
        }

        if ($button_border_color != '') {
            $button_styles .= 'border-color: ' . $button_border_color . ';';
        }

        if ($button_border_width != '') {
            $button_styles .= 'border-width: ' . $button_border_width . 'px;';
        }

        if ($border_radius != "") {
            $button_styles .= 'border-radius: ' . $border_radius . 'px;-moz-border-radius: ' . $border_radius . 'px;-webkit-border-radius: ' . $border_radius . 'px; ';
        }

        if ($button_background_color != '') {
            $button_styles .= "background-color: {$button_background_color};";
        }        

        if ($button_hover_border_color != "") {
            $data_attr .= " data-hover-border-color='" . $button_hover_border_color . "'";
        }

        if ($button_hover_text_color != "") {
            $data_attr .= " data-hover-color='" . $button_hover_text_color."'";
        }
		
		if ($button_icon_hover_color != "") {
            $data_attr .= " data-button-icon-hover-color='" . $button_icon_hover_color."'";
        }

        if ($icon_position !== 'top') {
            $icon_inner_style .= 'vertical-align: ' .$icon_position. ';';
        }

        $animate_button = false;
        
        if($button_hover_animation == "fill_from_top" || $button_hover_animation == "fill_from_bottom" || $button_hover_animation == "fill_from_left"){
            $animate_button = true;
        }
        elseif($button_hover_animation == "disable_animation"){
            $animate_button = false;
        }
        if($button_hover_animation == "default" && (pitch_qode_options()->getOptionValue( 'button_hover_animation' ) !== '')){
            $animate_button = true;
        }
        elseif($button_hover_animation == "default" && (pitch_qode_options()->getOptionValue( 'button_hover_animation' ) == '') ){
            $animate_button = false;
        }

        if ($button_hover_background_color != "" && $animate_button == false) {
            $data_attr .= "data-hover-background-color=" . $button_hover_background_color . " ";
        }        
        
        if ($button_hover_background_color != "" && $animate_button == true){
            $data_attr .= "data-hover-animated-background-color=" . $button_hover_background_color . " ";
        }

        $button_classes = '';

        if ($animate_button == true){
            if($button_hover_animation == "fill_from_top" || $button_hover_animation == "fill_from_bottom" || $button_hover_animation == "fill_from_left"){
                $button_classes .= " {$button_hover_animation}";
            }
            elseif((pitch_qode_options()->getOptionValue( 'button_hover_animation' ) != '')){
                $button_classes .= " {pitch_qode_options()->getOptionValue( 'button_hover_animation' )}";
            }
        }		
	
        if ($full_width == "no") {
            $html .= '<div class="container_inner">';
        }

        $html.= '<div class="call_to_action ' . esc_attr($action_classes) . '" '.pitch_qode_get_inline_style($action_styles).'>';

        if ($content_in_grid == 'yes' && $full_width == 'yes') {
            $html .= '<div class="container_inner">';
        }

        if ($show_button == 'yes') {
            if ($grid_size == "75") {
                $html .= '<div class="call_to_action_row_75_25 clearfix" '.pitch_qode_get_inline_style($action_inner_styles).'>';
            }
            elseif ($grid_size == "66") {
                $html .= '<div class="call_to_action_row_66_33 clearfix" '.pitch_qode_get_inline_style($action_inner_styles).'>';
            }
            else {
                $html .= '<div class="call_to_action_row_50_50 clearfix" '.pitch_qode_get_inline_style($action_inner_styles).'>';
            }

        }

        if ($text_size != '') {
            $content_styles .= 'font-size:' . $text_size . 'px;';
            $call_to_action_text_class = " call_to_action_custom_font_size";
        }

        if ($text_color != '') {
            $content_styles .= 'color:' . $text_color . ';';
        }

        $html .= '<div class="text_wrapper ' . esc_attr($text_wrapper_classes) . '">';

        if ($type == "with_icon" || $type == "with_custom_icon") {
            $html .= '<div class="call_to_action_icon_holder">';
            $html .= '<div class="call_to_action_icon">';
            $html .= '<div class="call_to_action_icon_inner" '.pitch_qode_get_inline_style($icon_inner_style).'>';
            if ($custom_icon != "") {
                if (is_numeric($custom_icon)) {
                    $custom_icon_src = wp_get_attachment_url($custom_icon);
                } else {
                    $custom_icon_src = $custom_icon;
                }

                $html .= '<img src="' . esc_attr($custom_icon_src) . '" alt="' . esc_attr__( 'Custom Image', 'select-core' ) . '">';
            } else {

                $icon_collection_obj = pitch_qode_icon_collections()->getIconCollection($icon_pack);

                if (method_exists($icon_collection_obj, 'render')) {
                    $html .= $icon_collection_obj->render(${$icon_collection_obj->param}, array(
                        'icon_attributes' => array(
                            'style' => $icon_styles,
                            'class' => 'call_to_action_icon '
                        )
                    ));
                }

            }

            $html .= '</div>';
            $html .= '</div>';
            $html .= '</div>';
        }

        $html .= '<div class="call_to_action_text'. esc_attr($call_to_action_text_class) .'" '.pitch_qode_get_inline_style($content_styles).'>'.pitch_qode_remove_wpautop($content, true).'</div>';
        $html .= '</div>'; //close text_wrapper

        if ($show_button == 'yes') {
            $button_link = ($button_link != '') ? $button_link : 'javascript: void(0)';

            if ($button_icon_pack != ''){
                $icon_collection_obj = pitch_qode_icon_collections()->getIconCollection($button_icon_pack);

                if (method_exists($icon_collection_obj, 'render')) {
                    $button_icon_label = 'button_' . $icon_collection_obj->param;
                    $button_icon .= $icon_collection_obj->render(${$button_icon_label}, array(
                        'icon_attributes' => array(
                            'style' => $button_icon_styles,
                            'class' => "call_to_action_button_icon "
                        )
                    ));
                }
            }
            
            $html .= '<div class="button_wrapper to_action_column2 to_action_cell '.$button_icon_position.'" style = "text-align: '.esc_attr($button_position).'">';
            $html .= '<a href="' . esc_url($button_link) . '" class="qbutton '.$button_classes.' '. esc_attr($button_size) . '" '.pitch_qode_get_inline_attr($button_target, 'target').' '.pitch_qode_get_inline_style($button_styles).' ' . $data_attr . '>';
            if($button_icon_position == 'left'){
                $html .= $button_icon. '<span class="call_to_action_button_text text_wrap">' . wp_kses_post($button_text) .'</span><span class="a_overlay"></span>';
            }else{
                $html .= '<span class="call_to_action_button_text text_wrap">' . wp_kses_post($button_text) .'</span>'.$button_icon. '<span class="a_overlay"></span>';
            }
            $html .= '</a>';
            $html .= '</div>'; //close button_wrapper
        }

        if ($show_button == 'yes') {
            $html .= '</div>'; //close two_columns_75_25 if opened
        }

        if ($content_in_grid == 'yes' && $full_width == 'yes') {
            $html .= '</div>'; // close .container_inner if oppened
        }

        $html .= '</div>'; //close .call_to_action

        if ($full_width == 'no') {
            $html .= '</div>'; // close .container_inner if oppened
        }

        return $html;
    }

    add_shortcode('no_call_to_action', 'no_call_to_action');
}

/* Blockquote item shortcode */

if (!function_exists('no_blockquote')) {
    function no_blockquote($atts, $content = null) {
        $args = array(
            "text" => "",
            "text_color" => "",
            "title_tag" => "h4",
            "width" => "",
            "line_height" => "",
            "left_padding" => "",
            "background_color" => "",
            "border_color" => "",
            "border_width" => "",
            "border_right_margin" => "",
            "show_quote_icon" => "",
            "quote_icon_font" => "",
            "quote_font_family" => "",
            "quote_icon_pack" => "",
            "quote_icon_color" => "",
            "quote_icon_size" => "",
            "quote_icon_padding_left" => "",
            "show_border" => "yes"
        );

        extract(shortcode_atts($args, $atts));

        $text = esc_html($text);
        $text_color = esc_attr($text_color);
        $width = esc_attr($width);
        $line_height = esc_attr($line_height);
        $left_padding = esc_attr($left_padding);
        $background_color = esc_attr($background_color);
        $border_color = esc_attr($border_color);
        $border_width = esc_attr($border_width);
        $border_right_margin = esc_attr($border_right_margin);
        $quote_font_family = esc_attr($quote_font_family);
        $quote_icon_color = esc_attr($quote_icon_color);
        $quote_icon_size = esc_attr($quote_icon_size);
        $quote_icon_padding_left = esc_attr($quote_icon_padding_left);

        $headings_array = array('h2', 'h3', 'h4', 'h5', 'h6');

        //get correct heading value. If provided heading isn't valid get the default one
        $title_tag = (in_array($title_tag, $headings_array)) ? $title_tag : $args['title_tag'];

        //init variables
        $html = "";
        $blockquote_styles = "";
        $blockquote_classes = array('blockquote_shortcode');
        $heading_styles = "";
        $quote_icon_styles = array();

        if ($show_quote_icon == 'yes') {
            $blockquote_classes[] = 'with_quote_icon';
        } else {
            $blockquote_classes[] = ' without_quote_icon';
        }

        if ($width != "") {
            $blockquote_styles .= "width: " . $width . "%;";
        }

        if ($show_border == "no") {
            $blockquote_styles .= "border-left: 0;";
        }


        if ($show_border == "yes" && $border_color != "") {
            $blockquote_styles .= "border-left-color: " . $border_color . "; ";
        }

        if ($show_border == "yes"){
            if ($border_width !== "") {
                $border_width = (strstr($border_width, 'px', true)) ? $border_width : $border_width . "px";
                $blockquote_styles .= "border-left-width: " . $border_width . "; ";
            }

            if ($border_right_margin != "") {
                $border_right_margin = (strstr($border_right_margin, 'px', true)) ? $border_right_margin : $border_right_margin . "px";
                $blockquote_styles .= "padding-left: " . $border_right_margin . "; ";         
            }
        }


        if ($background_color != "") {
            $blockquote_styles .= "background-color: " . $background_color . ";";
            $blockquote_classes[] = 'with_background';
        }

        if($quote_icon_font != '') {
            $blockquote_classes[] = $quote_icon_font;
        }

        if ($text_color != "") {
            $heading_styles .= "color: " . $text_color . ";";
        }

        if ($line_height != "") {
            $heading_styles .= " line-height: " . $line_height . "px;";
        }
		
		if ($left_padding != "") {
            $heading_styles .= " padding-left: " . $left_padding . "px;";
        }

        if ($quote_icon_color != "") {
            $quote_icon_styles[] = "color: " . $quote_icon_color;
        }

        if ($quote_icon_size != '') {
            $quote_icon_styles[] = 'font-size: ' . $quote_icon_size . 'px; line-height: ' . $quote_icon_size . 'px;';
        }
		
		if ($quote_icon_padding_left != '') {
            $quote_icon_styles[] = 'padding-left: ' . $quote_icon_padding_left . 'px;';
        }

        if ($quote_font_family != "" && $quote_icon_font == 'font_family') {
            $quote_icon_styles[] = "font-family: " . $quote_font_family;
        }

        $html .= "<blockquote class='" . implode(' ', $blockquote_classes) . "' style='" . $blockquote_styles . "'>"; //open blockquote
        if ($show_quote_icon == 'yes') {
            if($quote_icon_font == 'with_icon'){
				if(pitch_qode_options()->getOptionValue( 'blockquote_icon_type' )) { //if icon is set in options
					$html .= '<span style="' . implode(";", $quote_icon_styles) . '" class="icon_quotations_holder">';
					if(pitch_qode_options()->getOptionValue( 'blockquote_icon_type' ) == '')  { //if selected icon is empty use default icon
						$html .= '<i class="qode_icon_font_awesome fa fa-quote-left "></i>';
					}
					else {
						$html .= '<i class="' . pitch_qode_options()->getOptionValue( 'blockquote_icon_type' ) . '"></i>';
					}					
					$html .= '</span>';
				} 
            }
            else if($quote_icon_font == 'font_family') {
                $html .= '<span style="' . implode(";", $quote_icon_styles) . '" class="icon_quotations_holder">"</span>';
            }
        }

        $html .= "<" . $title_tag . " class='blockquote_text' ";
        if ($heading_styles != '') {
            $html .= 'style="' . $heading_styles . '"';
        }
        $html .= ">";
        $html .= "<span>" . $text . "</span>";
        $html .= "</" . $title_tag . ">";
        $html .= "</blockquote>"; //close blockquote
        return $html;
    }

    add_shortcode('no_blockquote', 'no_blockquote');
}

/* Button shortcode */

if (!function_exists('no_button')) {
    function no_button($atts, $content = null) {
        $args = array(
            "size" => "",
            "style" => "",
            "text" => "button",
            "hover_animation" => "",
            "button_width" => "",
            "icon_position" => "",
            "icon_font_size" => "",
            "icon_color" => "",
            "icon_hover_color" => "",
            "icon_background_color" => "",
            "icon_background_hover_color" => "",
            "link" => "",
            "target" => "_self",
            "color" => "",
            "hover_color" => "",
            "background_color" => "",
            "hover_background_color" => "",
            "background_pattern" => "",
            "border_color" => "",
            "hover_border_color" => "",
            "border_width" => "",
			"font_size" => "",
			"line_height" => "",
            "font_style" => "",
            "font_weight" => "",
            "text_align" => "",
            "margin" => "",
            "padding" => "",
            "border_radius" => "",
			"button_hover_animation" => "default"
        );

        $args = array_merge($args, pitch_qode_icon_collections()->getShortcodeParams());

        extract(shortcode_atts($args, $atts));

        $text = esc_html($text);
        $icon_color = esc_attr($icon_color);
        $icon_hover_color = esc_attr($icon_hover_color);
        $icon_background_color = esc_attr($icon_background_color);
        $icon_background_hover_color = esc_attr($icon_background_hover_color);
        $link = esc_url($link);
        $color = esc_attr($color);
        $hover_color = esc_attr($hover_color);
        $background_color = esc_attr($background_color);
        $hover_background_color = esc_attr($hover_background_color);
        $background_pattern = esc_attr($background_pattern);
        $border_color = esc_attr($border_color);
        $hover_border_color = esc_attr($hover_border_color);
        $margin = esc_attr($margin);
        $padding = esc_attr($padding);
        $border_radius = esc_attr($border_radius);
		$button_hover_animation = esc_attr($button_hover_animation);
		

        if ($target == "") {
            $target = "_self";
        }

        //init variables
        $html = "";
        $button_classes = "qbutton ";
		$icon_classes = "button_icon";
        $button_styles = "";
        $add_icon = "";
        $data_attr = "";
		$animation_overlay_styles = "";

        if ($size != "") {
            $button_classes .= " {$size}";
        }

        if($hover_animation != ""){
            $button_classes .= " {$hover_animation}";
        }

        if ($text_align != "") {
            $button_classes .= " {$text_align}";
        }
        if ($style == "white" || $style == "transparent") {
            $button_classes .= " {$style}";
        }
        if ($color != "") {
            $button_styles .= 'color: ' . $color . '; ';
        }

        if ($border_color != "" && $style !== "transparent") {
            if ($style == "top_and_bottom_border") {
                $button_styles .= 'border-color: ' . $border_color . ' transparent; ';
            } else {
                $button_styles .= 'border-color: ' . $border_color . '; ';
            }
        }

        if ($border_width != "" && $style !== "transparent") {
            $border_width = (strstr($border_width, 'px', true)) ? $border_width : $border_width . "px";
            $button_styles .= 'border-width: ' . esc_attr($border_width) . '; ';
        }
		
		if ($font_size != "") {
            $button_styles .= 'font-size: ' . $font_size . 'px; ';
        }
		
		if ($line_height != "") {
            $button_styles .= 'line-height: ' . $line_height . 'px; ';
            $button_styles .= 'height: ' . $line_height . 'px; ';
        }

        if ($font_style != "") {
            $button_styles .= 'font-style: ' . $font_style . '; ';
        }

        if ($font_weight != "") {
            $button_styles .= 'font-weight: ' . $font_weight . '; ';
        }

        if ($padding != "" && $padding != '0px') {
            $padding = (strstr($padding, 'px', true)) ? $padding : $padding . "px";
        }

        if ($button_width != "") {
            $button_width = (strstr($button_width, 'px', true)) ? $button_width : $button_width . "px";
			if($hover_animation != "") {
				$button_styles .= 'width: ' . $button_width . '; ';
			}
        }

        if ($icon_pack != "") {
            $icon_style = "";
            $button_classes .= " qbutton_with_icon";
            if ($icon_color != "") {
                $icon_style .= 'color: ' . $icon_color . ';';
            }
            if ($size !== "big_large_full_width" && $style !== "transparent") {
                if ($icon_background_color !== "") {
                    $icon_style .= 'background-color: ' . $icon_background_color .';';
                }
            }

            if ($padding != "") {
                if ($icon_position == "left") {
                    $icon_style .= 'margin-right: ' . $padding . '; ';
                }
                else {
                    $icon_style .= 'margin-left: ' . $padding . '; ';
                }
            }
			
			if ($icon_font_size != "") {
				$icon_style .= 'font-size: ' . $icon_font_size . 'px; ';
			}
			
			if($icon_background_color != "" || $icon_background_hover_color != "") {
				$icon_classes .= ' has_background_color';
			}
			else {				
				$icon_style .= 'width: auto';
			}
			
			if(($icon_background_color != "" || $icon_background_hover_color != "") && $border_radius != "" && (($hover_animation != "" && $button_width == "") || $hover_animation == "")) {
				if ($icon_position == "left") {
                    $icon_style .= 'border-top-left-radius: ' . $border_radius . 'px;';
					$icon_style .= 'border-bottom-left-radius: ' . $border_radius . 'px;';
                }
                else {
                    $icon_style .= 'border-top-right-radius: ' . $border_radius . 'px;';
					$icon_style .= 'border-bottom-right-radius: ' . $border_radius . 'px;';
                }
				
			}

            $icon_collection_obj = pitch_qode_icon_collections()->getIconCollection($icon_pack);

            if (method_exists($icon_collection_obj, 'render')) {
                $add_icon .= $icon_collection_obj->render(${$icon_collection_obj->param}, array(
                    'icon_attributes' => array(
                        'style' => $icon_style,
                        'class' => $icon_classes
                    )
                ));
            }

        }

        if ($padding != "") {
            if ($add_icon == "" || ($icon_background_color == "" && $icon_background_hover_color == "")) {
                $button_styles .= 'padding: 0 ' . $padding . '; ';
            }
            else {
                if ($icon_position == "left") {
                    $button_styles .= 'padding: 0 ' . $padding . ' 0 0; ';
                }
                else {
                    $button_styles .= 'padding: 0 0 0 ' . $padding . '; ';
                }
            }

        }

        if ($margin != "") {
            $button_styles .= 'margin: ' . $margin . '; ';
        }
		
		$animate_button = false;
		
		if($button_hover_animation == "fill_from_top" || $button_hover_animation == "fill_from_bottom" || $button_hover_animation == "fill_from_left"){
			$animate_button = true;
		}
		elseif($button_hover_animation == "disable_animation"){
			$animate_button = false;
		}
		elseif($button_hover_animation == "default" && (pitch_qode_options()->getOptionValue( 'button_hover_animation' ) !== '')){
			$animate_button = true;
		}
		elseif($button_hover_animation == "default" && (pitch_qode_options()->getOptionValue( 'button_hover_animation' ) == '') ){
			$animate_button = false;
		}


        if ($style !== "transparent"){
	        if ($border_radius != ""){
	            $button_styles .= 'border-radius: ' . $border_radius . 'px;-moz-border-radius: ' . $border_radius . 'px;-webkit-border-radius: ' . $border_radius . 'px; ';
				$animation_overlay_styles .= 'border-radius: ' . $border_radius . 'px;-moz-border-radius: ' . $border_radius . 'px;-webkit-border-radius: ' . $border_radius . 'px; ';
			}

	        if ($background_color != "") {
	            $button_styles .= "background-color: {$background_color};";
	        }

	        if ($hover_background_color != "" && $animate_button == false) {
	            $data_attr .= "data-hover-background-color=" . $hover_background_color . " ";
	        }
			
			
			if ($hover_background_color != "" && $animate_button == true){
	            $data_attr .= "data-hover-animated-background-color=" . $hover_background_color . " ";
	        }
			
			if ($animate_button == true){
				if($button_hover_animation == "fill_from_top" || $button_hover_animation == "fill_from_bottom" || $button_hover_animation == "fill_from_left"){
					$button_classes .= " {$button_hover_animation}";
				}
				elseif((pitch_qode_options()->getOptionValue( 'button_hover_animation' ) != '')){
					$button_classes .= " {pitch_qode_options()->getOptionValue( 'button_hover_animation' )}";
				}
	        }
			
			if ($background_pattern != "") {
				if (is_numeric($background_pattern)) {
	                $background_image_src = wp_get_attachment_url($background_pattern);
	            } else {
	                $background_image_src = $background_pattern;
	            }
	            $button_styles .= "background-image:url(" . $background_image_src . "); background-repeat:no-repeat; background-position: 0px 0px; ";
	        }

	        if ($hover_border_color != "") {
	            $data_attr .= "data-hover-border-color=" . $hover_border_color . " ";
	        }
			
	    }

        if ($hover_color != "") {
            $data_attr .= "data-hover-color=" . $hover_color . " ";
        }

        if ($size !== "big_large_full_width" && $style !== "transparent") {
            if ($icon_background_hover_color !== "") {
                $data_attr .= "data-icon-background-hover-color=" . $icon_background_hover_color . " ";
            }
			
			if ($icon_hover_color !== "") {
                $data_attr .= "data-icon-hover-color=" . $icon_hover_color . " ";
            }
        }
		
		if ($animate_button == true && $style !== 'transparent'){ // for buttons with enabled hover animation
			if ($icon_position == "left") {
				$button_classes .= " icon_left";
				$html .= '<a href="' . $link . '" target="' . $target . '" ' . $data_attr . ' class="' . $button_classes . '" style="' . $button_styles . '">' . $add_icon . '<span class="text_wrap">' . $text . '</span><span class="a_overlay" style="' . $animation_overlay_styles . '"></span></a>';
			} else { // default value is right
				$button_classes .= " icon_right";
				$html .= '<a href="' . $link . '" target="' . $target . '" ' . $data_attr . ' class="' . $button_classes . '" style="' . $button_styles . '"><span class="text_wrap">' . $text . '</span>'. $add_icon .'<span class="a_overlay" style="' . $animation_overlay_styles . '"></span></a>';
			}
		} else {

			if ($icon_position == "left") {
				$button_classes .= " icon_left";
				$html .= '<a href="' . $link . '" target="' . $target . '" ' . $data_attr . ' class="' . $button_classes . '" style="' . $button_styles . '">' . $add_icon . $text  . '</a>';
			} else { // default value is right
				$button_classes .= " icon_right";
				$html .= '<a href="' . $link . '" target="' . $target . '" ' . $data_attr . ' class="' . $button_classes . '" style="' . $button_styles . '">' . $text . $add_icon  . '</a>';
			}
		}

        return $html;
    }

    add_shortcode('no_button', 'no_button');
}

/* Counter shortcode */

if (!function_exists('no_counter')) {

    function no_counter($atts, $content = null) {
        $args = array(
            "type" => "",
            "box" => "",
            "box_border_color" => "",
            "position" => "",
            "digit" => "",
            "underline_digit" => "",
            "counter_icon" => "no",
            "icon_color" => "",
            "icon_custom_size" => "",
            "title" => "",
            "title_color" => "",
            "title_tag" => "h4",
            "title_size" => "",
            "font_size" => "",
            "font_weight" => "",
            "font_color" => "",
            "text" => "",
            "text_size" => "",
            "text_font_weight" => "",
            "text_transform" => "",
            "text_color" => "",
            "separator" => "",
			"separator_position" => "under_title",
			"separator_width" => "",
            "separator_margin_top" => "",
            "separator_margin_bottom" => "",
            "separator_color" => "",
            "separator_border_style" => "",
            "padding_bottom" => "",
            "digit_letter_spacing" => "",
			"separator_thickness"	=> ""
        );
		
		$default_atts = array_merge($args, pitch_qode_icon_collections()->getShortcodeParams());

        extract(shortcode_atts($default_atts, $atts));

        $box_border_color = esc_attr($box_border_color);
        $digit = esc_html($digit);
        $icon_color = esc_html($icon_color);
        $icon_custom_size = esc_html($icon_custom_size);
        $title = esc_html($title);
        $title_color = esc_attr($title_color);
        $title_size = esc_attr($title_size);
        $font_size = esc_attr($font_size);
        $font_color = esc_attr($font_color);
        $text = esc_html($text);
        $text_size = esc_attr($text_size);
        $text_color = esc_attr($text_color);
        $separator_width = esc_attr($separator_width);
        $separator_color = esc_attr($separator_color);
        $separator_margin_top = esc_attr($separator_margin_top);
        $separator_margin_bottom = esc_attr($separator_margin_bottom);
        $padding_bottom = esc_attr($padding_bottom);
        $digit_letter_spacing = esc_attr($digit_letter_spacing);
		$separator_thickness = esc_attr($separator_thickness);

        $headings_array = array('h2', 'h3', 'h4', 'h5', 'h6');

        //get correct heading value. If provided heading isn't valid get the default one
        $title_tag = (in_array($title_tag, $headings_array)) ? $title_tag : $args['title_tag'];

        //init variables
        $html = "";
        $title_styles = "";
        $counter_holder_classes = "";
        $counter_holder_styles = "";
        $counter_classes = "";
        $counter_styles = "";
        $text_styles = "";
        $separator_styles = array();
		$icon_html = "";
		$icon_style = "";	
		
		
		if($counter_icon != 'no') {
			if($icon_color != "") {
				$icon_style .="color:". $icon_color.";";
			}
			
			if($icon_custom_size != "") {
				$icon_style .="font-size:". $icon_custom_size."px;";
			}
		
			$icon_collection_obj = pitch_qode_icon_collections()->getIconCollection($icon_pack);
			if (method_exists($icon_collection_obj, 'render')) {	
				$icon_html .= $icon_collection_obj->render(${$icon_collection_obj->param}, array(
					'icon_attributes' => array(
						'style' => $icon_style
					)
				));
			}
		}


        //generate styles
        if ($title_color != "") {
            $title_styles .= "color:" . $title_color . ";";
        }

        if ($title_size != "") {
            $title_styles .= "font-size:" . $title_size . "px;";
        }

        if ($position != "") {
            $counter_holder_classes .= " " . $position;
        }

        if ($box == "yes") {
            $counter_holder_classes .= " boxed_counter";
        }
		
		if ($counter_icon == "yes") {
            $counter_holder_classes .= " has_icon";
        }

        if ($box_border_color != "") {
            $counter_holder_styles .= "border-color: " . $box_border_color . ";";
        }

        if ($padding_bottom != "") {
            $counter_holder_styles .= "padding-bottom: " . $padding_bottom;
            if (!strstr($padding_bottom, 'px')) {
                $counter_holder_styles .= 'px;';
            }
        }

        if ($type != "") {
            $counter_classes .= " " . $type;
        }

        if ($font_color != "") {
            $counter_styles .= "color: " . $font_color . ";";
        }
        if ($digit_letter_spacing != "") {
            $digit_letter_spacing = (strstr($digit_letter_spacing, 'px', true)) ? $digit_letter_spacing : $digit_letter_spacing . "px";
            $counter_styles .= "letter-spacing: " . $digit_letter_spacing . ";";
        }
        if ($font_size != "") {
            $counter_styles .= "font-size: " . $font_size . "px;";
        }
        if ($font_weight != "") {
            $counter_styles .= "font-weight: " . $font_weight . ";";
        }
        if ($underline_digit == "yes") {
            $counter_styles .= "border-bottom: 1px solid;";
        }
        if ($text_size != "") {
            $text_styles .= "font-size: " . $text_size . "px;";
        }
        if ($text_font_weight != "") {
            $text_styles .= "font-weight: " . $text_font_weight . ";";
        }
        if ($text_transform != "") {
            $text_styles .= "text-transform: " . $text_transform . ";";
        }

        if ($text_color != "") {
            $text_styles .= "color: " . $text_color . ";";
        }
		
		if ($separator_width != "") {
            $separator_styles[] = "width: " . $separator_width . "px" ;
        }

        if ($separator_color != "") {
            $separator_styles[] = "border-color: " . $separator_color ;
        }

        if($separator_margin_top != ""){
            $separator_styles[] = "margin-top: " . $separator_margin_top. 'px';
        }
            
        if($separator_margin_bottom != ""){
            $separator_styles[] = "margin-bottom: " . $separator_margin_bottom. 'px';
        }
		
		if ($separator_thickness != "") {
            $separator_styles[] = "border-bottom-width: " . $separator_thickness . 'px';
        }

        if ($separator_border_style != "") {
            $separator_styles[] = "border-bottom-style: " . $separator_border_style;
        }
		
		if (is_array($separator_styles) && count($separator_styles)) {
				$separator_style = implode(';', $separator_styles);
		} else {
				$separator_style = '';
		}

        $html .= '<div class="q_counter_holder ' . $counter_holder_classes . '" style="' . $counter_holder_styles . '">';
		$html .= '<div class="counter_number_holder">';
		$html .= '<span class="counter_icon">' . $icon_html ." " . '</span>';
		if($type == 'random' && $counter_icon == 'yes') {
			$html .= '<div class="counter_table_holder">';
		}
        $html .= '<span class="counter'. $counter_classes .'" style="' . $counter_styles . '">' . $digit . '</span>';
		if($type == 'random' && $counter_icon == 'yes') {
			$html .= '</div>';
		}
		$html .= '</div>';
		

		if ($separator == "yes" && $separator_position == "above_title" ) {
            $html .= '<span class="separator medium" ' . pitch_qode_get_inline_style($separator_styles) . '></span>';
        }

		if ($title !== ""){
			$html .= "<{$title_tag} class='counter_title' style='" . $title_styles . "'>$title</{$title_tag}>";
		}

        if ($separator == "yes" && $separator_position == "under_title") {
            $html .= '<span class="separator medium" '.pitch_qode_get_inline_style($separator_styles).' ></span>';
        }

        $html .= $content;


        if ($text != "") {
            $html .= '<p class="counter_text" style="' . $text_styles . '">' . $text . '</p>';
        }

        $html .= '</div>'; //close q_counter_holder

        return $html;
    }

    add_shortcode('no_counter', 'no_counter');
}

/* Custom font shortcode */

if (!function_exists('no_custom_font')) {

    function no_custom_font($atts, $content = null) {
        $args = array(
            "font_family" => "",
            "font_size" => "",
            "line_height" => "",
            "font_style" => "",
            "font_weight" => "",
            "color" => "",
            "text_decoration" => "",
            "text_transform" => "none",
            "text_shadow" => "",
            "letter_spacing" => "",
            "background_color" => "",
            "padding" => "",
            "margin" => "",
            "text_align" => "left",
            "show_in_border_box" => "",
            "border_color" => "",
            "border_width" => "",
            "text_background_color" => "",
            "text_padding" => ""
        );
        extract(shortcode_atts($args, $atts));

        $font_family = esc_attr($font_family);
        $font_size = esc_attr($font_size);
        $line_height = esc_attr($line_height);
        $font_weight = esc_attr($font_weight);
        $color = esc_attr($color);
        $letter_spacing = esc_attr($letter_spacing);
        $background_color = esc_attr($background_color);
        $padding = esc_attr($padding);
        $margin = esc_attr($margin);
        $border_color = esc_attr($border_color);
        $border_width = esc_attr($border_width);
        $text_background_color = esc_attr($text_background_color);
        $text_padding = esc_attr($text_padding);

        $html = '';
		$data_attr = '';
		
		$custom_font_wrapper_style = array();
		$custom_font_inner_style = array();
		$custom_font_inner_class = ""; 
		
		if ($font_family != "") {
            $custom_font_wrapper_style[] = 'font-family: ' . $font_family;
        }

        if ($font_size != "") {
			$custom_font_wrapper_style[] = ' font-size: ' . $font_size . 'px';
			$data_attr .= "data-font-size=" . $font_size . " ";
        }

        if ($line_height != "") {
            $custom_font_wrapper_style[] = ' line-height: ' . $line_height . 'px';
			$data_attr .= "data-line-height=" . $line_height . " ";
        }

        if ($font_style != "") {
            $custom_font_wrapper_style[] = ' font-style: ' . $font_style;
        }

        if ($font_weight != "") {
            $custom_font_wrapper_style[] = ' font-weight: ' . $font_weight;
        }

        if ($color != "") {
            $custom_font_wrapper_style[] = ' color: ' . $color;
        }

        if ($text_decoration != "") {
            $custom_font_wrapper_style[] = ' text-decoration: ' . $text_decoration;
        }

        if ($text_shadow == "yes") {
            $custom_font_wrapper_style[] = ' text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.4);';
        }

        if ($letter_spacing != "") {
            $custom_font_wrapper_style[] = ' letter-spacing: ' . $letter_spacing . 'px;';
        }

        if ($background_color != "") {
           $custom_font_wrapper_style[] = ' background-color: ' . $background_color . ';';
        }

        if ($padding != "") {
            $custom_font_wrapper_style[] = ' padding: ' . $padding;
        }

        if ($margin != "") {
            $custom_font_wrapper_style[] = ' margin: ' . $margin;
        }

        if ($text_transform != "") {
            $custom_font_wrapper_style[] = ' text-transform: ' . esc_attr($text_transform);
        }
		
		if ($text_align != "") {
            $custom_font_wrapper_style[] = ' text-align: ' . esc_attr($text_align);
        }
		
		if (is_array($custom_font_wrapper_style) && count($custom_font_wrapper_style)) {
				$custom_font_wrapper_styles = implode(';', $custom_font_wrapper_style);
		} else {
				$custom_font_wrapper_styles = '';
		}
		
//		innner div style
		
		if ($show_in_border_box == "yes") {			
			
			$custom_font_inner_class = "class= 'show_in_border_box'";
			$custom_font_inner_style[] = 'border: 1px solid';
			
            if ($border_color != "") {
                $custom_font_inner_style[] = 'border-color: ' . $border_color;
            }
            if ($border_width != "") {
                $custom_font_inner_style[] = 'border-width: ' . $border_width . 'px';
            }
            if ($text_background_color != "") {
                $custom_font_inner_style[] = 'background-color: ' . $text_background_color;
            }
            if ($text_padding != "") {
                $custom_font_inner_style[] = 'padding: ' . $text_padding;
            }
        }
		
		if (is_array($custom_font_inner_style) && count($custom_font_inner_style)) {
				$custom_font_inner_styles = implode(';', $custom_font_inner_style);
		} else {
				$custom_font_inner_styles = '';
		}
		
        $html .= '<div class="custom_font_holder" '.  pitch_qode_get_inline_style($custom_font_wrapper_styles).' '.$data_attr.'>';
		$html .= '<div '.$custom_font_inner_class.' '.pitch_qode_get_inline_style($custom_font_inner_style).'>'.pitch_qode_remove_wpautop($content, true).'</div>';
		$html .= '</div>';// close div custom_font_holder
        return $html;
    }

    add_shortcode('no_custom_font', 'no_custom_font');
}



/***  Text With Number  **/

if (!function_exists('no_numbered_steps')) {

    function no_numbered_steps($atts, $content = null) {
        $args = array(
            "number" => "",
            "title" => "",
            "subtitle" => "",
			"animation" => "no",
			"animation_delay" => ""
        );
		
        extract(shortcode_atts($args, $atts));

        $number = esc_html($number);
        $title = esc_html($title);
        $subtitle = esc_html($subtitle);
		$animation = esc_attr($animation);
		$animation_delay = esc_attr($animation_delay);
		
		$animation_class = "";
		$animation_delay_style = "";
		
		if($animation == "yes") {
            $animation_class = "animate";
        }

		if ($animation_delay != "") {
            $animation_delay .= 's';
             $animation_delay_style .= '
            -webkit-transition: transform 0.3s cubic-bezier(0, 0.8, 0.18, 1.63) ' . $animation_delay . ', opacity 0.3s cubic-bezier(0, 0.8, 0.18, 1.63) ' . $animation_delay . ';
            transition: transform 0.3s cubic-bezier(0, 0.8, 0.18, 1.63) ' . $animation_delay . ', opacity 0.3s cubic-bezier(0, 0.8, 0.18, 1.63) ' . $animation_delay . ';';  
        }
		
		
        $html = '';

        $html .= '<div class="numbered_steps_holder ' . $animation_class . ' ">';
		$html .= '<div class="number" style="' . $animation_delay_style . '">' . $number . '</div>';
		$html .= '<div class="text">';
		$html .= '<h6>' . $subtitle . '</h6>';
		$html .= '<h3>' . $title . '</h3>';
		$html .= '</div>';// close div text
		$html .= '</div>';// close div numbered_steps_holder
        return $html;
    }

    add_shortcode('no_numbered_steps', 'no_numbered_steps');
}


/* Cover Boxes shortcode */

if (!function_exists('no_cover_boxes')) {

    function no_cover_boxes($atts, $content = null) {
        $args = array(
            "active_element" => "1",
            "title_tag" => "h4",
            "cover_boxes_icon_pack" => "",
            "button_icon_color" => "",
            "button_icon_size" => "",
            "small_title1" => "",
            "title1" => "",
            "title_color1" => "",
            "text1" => "",
            "text_color1" => "",
            "image1" => "",
            "link1" => "",
            "link_label1" => "",
            "target1" => "",
            "small_title2" => "",
            "title2" => "",
            "title_color2" => "",
            "text2" => "",
            "text_color2" => "",
            "image2" => "",
            "link2" => "",
            "link_label2" => "",
            "target2" => "",
            "small_title3" => "",
            "title3" => "",
            "title_color3" => "",
            "text3" => "",
            "text_color3" => "",
            "image3" => "",
            "link3" => "",
            "link_label3" => "",
            "target3" => "",
            "read_more_button_style" => "",
            "separator" => "",
			"separator_thickness" => "",
            "separator_color" => "",
            "separator_border_style" => ""
        );

        $cover_boxes_icons_form_fields = array();
        $number_of_cover_boxes = 3;
        for ($x = 1; $x <= $number_of_cover_boxes; $x++) {

            foreach (pitch_qode_icon_collections()->iconCollections as $collection_key => $collection) {

                $cover_boxes_icons_form_fields['cover_social_' . $collection->param . '_' . $x] = '';

            }

        }

        $args = array_merge($args, $cover_boxes_icons_form_fields);

        extract(shortcode_atts($args, $atts));

        $active_element = esc_attr($active_element);
        $small_title1 = esc_html($small_title1);
        $title1 = esc_html($title1);
        $title_color1 = esc_attr($title_color1);
        $text1 = esc_html($text1);
        $text_color1 = esc_attr($text_color1);
        $image1 = esc_attr($image1);
        $link1 = esc_url($link1);
        $link_label1 = esc_attr($link_label1);
        $small_title2 = esc_html($small_title2);
        $title2 = esc_html($title2);
        $title_color2 = esc_attr($title_color2);
        $text2 = esc_html($text2);
        $text_color2 = esc_attr($text_color2);
        $image2 = esc_attr($image2);
        $link2 = esc_url($link2);
        $link_label2 = esc_attr($link_label2);
        $small_title3 = esc_html($small_title3);
        $title3 = esc_html($title3);
        $title_color3 = esc_attr($title_color3);
        $text3 = esc_html($text3);
        $text_color3 = esc_attr($text_color3);
        $image3 = esc_attr($image3);
        $link3 = esc_url($link3);
        $link_label3 = esc_attr($link_label3);
        $separator_color = esc_attr($separator_color);
		$separator_thickness = esc_attr($separator_thickness);

        $headings_array = array('h2', 'h3', 'h4', 'h5', 'h6');

        //get correct heading value. If provided heading isn't valid get the default one
        $title_tag = (in_array($title_tag, $headings_array)) ? $title_tag : $args['title_tag'];

        //init variables
        $html = "";
        $separator_styles = "";
        $button_icon_styles = "";

        if ($separator_color != "") {
            $separator_styles .= "border-color: " . $separator_color . ";";
        }

        if ($separator_border_style != "") {
            $separator_styles .= "border-bottom-style: " . $separator_border_style . ';';
        }
		
		if ($separator_thickness != "") {
            $separator_styles .= "border-width: " . $separator_thickness . 'px;';
        }

        if ($button_icon_color != "") {
            $button_icon_styles = 'color: ' . $button_icon_color . ';';
        }

        if ($button_icon_size != '') {
            $button_icon_styles .= 'font-size: ' . $button_icon_size . 'px;';
        }

        $items_number = 3;
        $items_number_class = 'boxes_three';

        $html .= "<div class='cover_boxes ".esc_attr($items_number_class)."' data-active-element='" . $active_element . "' ".pitch_qode_get_inline_attr($items_number,"date-number_of_items")."><ul class='clearfix'>";

        $html .= "<li>";
        $html .= "<div class='box'>";
        if ($target1 != "") {
            $target1 = $target1;
        } else {
            $target1 = "_self";
        }
        if (is_numeric($image1)) {
            $image_src1 = wp_get_attachment_url($image1);
        } else {
            $image_src1 = $image1;
        }
        if (is_numeric($image2)) {
            $image_src2 = wp_get_attachment_url($image2);
        } else {
            $image_src2 = $image2;
        }
        if (is_numeric($image3)) {
            $image_src3 = wp_get_attachment_url($image3);
        } else {
            $image_src3 = $image3;
        }
        $html .= "<a class='thumb' href='" . $link1 . "' target='" . $target1 . "'><img alt='" . $title1 . "' src='" . $image_src1 . "' /></a>";
        if ($title_color1 != "") {
            $color1 = " style='color:" . $title_color1 . "''";
        } else {
            $color1 = "";
        }
        if ($text_color1 != "") {
            $t_color1 = " style='color:" . $text_color1 . "'";
        } else {
            $t_color1 = "";
        }
        $html .= "<div class='box_content'>";
        if($small_title1 != '') {
            $html .= "<span class='cover_box_small_title'>" .$small_title1 . "</span>";
        }
        $html .= "<" . $title_tag . " " . $color1 . " class='cover_box_title'>" . $title1 . "</" . $title_tag . ">";
        if ($separator == "yes") {
            $html .= '<span class="separator small" style="' . $separator_styles . '"></span>';
        }
        $html .= "<p " . $t_color1 . ">" . $text1 . "</p>";

        $button_class = "";
        $button_class_wrapper_open = "";
        $button_class_wrapper_close = "";
        if ($read_more_button_style != "no") {
            $button_class = "qbutton small";
        } else {
            $button_class = "cover_boxes_read_more";
            $button_class_wrapper_open = "<h5>";
            $button_class_wrapper_close = "</h5>";
        }

        if ($link_label1 != "") {

            $button_icon = '';
            if ($cover_boxes_icon_pack != ''){
                $icon_collection_obj = pitch_qode_icon_collections()->getIconCollection($cover_boxes_icon_pack);

                if (method_exists($icon_collection_obj, 'render')) {
                    $button_icon_label = 'cover_social_' . $icon_collection_obj->param."_1";
                    $button_icon .= $icon_collection_obj->render(${$button_icon_label}, array(
                        'icon_attributes' => array(
                            'style' => $button_icon_styles,
                            'class' => 'cover_boxes_button_icon'
                        )
                    ));
                }
            }

                $html .= $button_class_wrapper_open . "<a class='" . $button_class . "' href='" . $link1 . "' target='" . $target1 . "'><span class='cover_boxes_button_text'> " . $link_label1 .'</span>'. $button_icon . "</a>" . $button_class_wrapper_close;
        }

        $html .= "</div></div>"; // box_content, box
        $html .= "</li>";

        $html .= "<li>";
        $html .= "<div class='box'>";
        if ($target2 != "") {
            $target2 = $target2;
        } else {
            $target2 = "_self";
        }
        $html .= "<a class='thumb' href='" . $link2 . "' target='" . $target2 . "'><img alt='" . $title2 . "' src='" . $image_src2 . "' /></a>";
        if ($title_color2 != "") {
            $color2 = " style='color:" . $title_color2 . "''";
        } else {
            $color2 = "";
        }
        if ($text_color2 != "") {
            $t_color2 = " style='color:" . $text_color2 . "''";
        } else {
            $t_color2 = "";
        }
        $html .= "<div class='box_content'>";
        if($small_title2 != '') {
            $html .= "<span class='cover_box_small_title'>" .$small_title2 . "</span>";
        }
        $html .= "<" . $title_tag . " " . $color2 . " class='cover_box_title'>" . $title2 . "</" . $title_tag . ">";
        if ($separator == "yes") {
            $html .= '<span class="separator small" style="' . $separator_styles . '"></span>';
        }
        $html .= "<p " . $t_color2 . ">" . $text2 . "</p>";

        if ($link_label2 != "") {

            $button_icon = '';
            if ($cover_boxes_icon_pack != ''){
                $icon_collection_obj = pitch_qode_icon_collections()->getIconCollection($cover_boxes_icon_pack);

                if (method_exists($icon_collection_obj, 'render')) {
                    $button_icon_label = 'cover_social_' . $icon_collection_obj->param."_2";
                    $button_icon .= $icon_collection_obj->render(${$button_icon_label}, array(
                        'icon_attributes' => array(
                            'style' => $button_icon_styles,
                            'class' => 'cover_boxes_button_icon'
                        )
                    ));
                }
            }

            $html .= $button_class_wrapper_open . "<a class='" . $button_class . "' href='" . $link2 . "' target='" . $target2 . "'><span class='cover_boxes_button_text'> " . $link_label2 .'</span>'. $button_icon . "</a>" . $button_class_wrapper_close;
        }

        $html .= "</div></div>"; // box_content, box
        $html .= "</li>";

        if ($items_number != '2') {
            $html .= "<li>";
            $html .= "<div class='box'>";
            if ($target3 != "") {
                $target3 = $target3;
            } else {
                $target3 = "_self";
            }
            $html .= "<a class='thumb' href='" . $link3 . "' target='" . $target3 . "'><img alt='" . $title3 . "' src='" . $image_src3 . "' /></a>";
            if ($title_color3 != "") {
                $color3 = " style='color:" . $title_color3 . "''";
            } else {
                $color3 = "";
            }
            if ($text_color3 != "") {
                $t_color3 = " style='color:" . $text_color3 . "''";
            } else {
                $t_color3 = "";
            }
            $html .= "<div class='box_content'>";
            if($small_title3 != '') {
                $html .= "<span class='cover_box_small_title'>" .$small_title3 . "</span>";
            }
            $html .= "<" . $title_tag . " " . $color3 . " class='cover_box_title'>" . $title3 . "</" . $title_tag . ">";
            if ($separator == "yes") {
                $html .= '<span class="separator small" style="' . $separator_styles . '"></span>';
            }
            $html .= "<p " . $t_color3 . ">" . $text3 . "</p>";

            if ($link_label3 != "") {
                $button_icon = '';
                if ($cover_boxes_icon_pack != ''){
                    $icon_collection_obj = pitch_qode_icon_collections()->getIconCollection($cover_boxes_icon_pack);

                    if (method_exists($icon_collection_obj, 'render')) {
                        $button_icon_label = 'cover_social_' . $icon_collection_obj->param."_3";
                        $button_icon .= $icon_collection_obj->render(${$button_icon_label}, array(
                            'icon_attributes' => array(
                                'style' => $button_icon_styles,
                                'class' => 'cover_boxes_button_icon'
                            )
                        ));
                    }
                }

                $html .= $button_class_wrapper_open . "<a class='" . $button_class . "' href='" . $link3 . "' target='" . $target3 . "'><span class='cover_boxes_button_text'> " . $link_label3 .'</span>'. $button_icon . "</a>" . $button_class_wrapper_close;
            }

            $html .= "</div></div>"; // box_content, box
            $html .= "</li>";
        }

        $html .= "</ul></div>";
        return $html;
    }

    add_shortcode('no_cover_boxes', 'no_cover_boxes');
}

/* Dropcaps shortcode */

if (!function_exists('no_dropcaps')) {

    function no_dropcaps($atts, $content = null) {
        $args = array(
            "color" => "",
            "line_height" => "",
            "width" => "",
            "background_color" => "",
            "border_color" => "",
            "type" => "",
            "font_family" => "",
            "font_size" => "",
            "font_weight" => "",
            "font_style" => "",
            "text_align" => "",
            "margin" => ""
        );
        extract(shortcode_atts($args, $atts));

        $color = esc_attr($color);
        $line_height = esc_attr($line_height);
        $width = esc_attr($width);
        $background_color = esc_attr($background_color);
        $border_color = esc_attr($border_color);
        $font_family = esc_attr($font_family);
        $font_size = esc_attr($font_size);
        $margin = esc_attr($margin);


        $html = "<span class='q_dropcap " . $type . "' style='";
        if ($background_color != "") {
            $html .= "background-color: $background_color;";
        }
        if ($color != "") {
            $html .= " color: $color;";
        }
        if ($border_color != "") {
            $html .= 'border-color: ' . $border_color . ';';
        }
        if ($font_family != "") {
            $html .= 'font-family: ' . $font_family . ';';
        }
        if ($font_size != "") {
            $html .= 'font-size: ' . $font_size . 'px;';
        }
        if ($font_weight != "") {
            $html .= 'font-weight: ' . $font_weight . ';';
        }
        if ($text_align != "") {
            $html .= 'text-align: ' . $text_align . ';';
        }
        if ($margin != "") {
            $margin = (strstr($margin, 'px', true)) ? $margin : $margin . 'px';
            $html .= 'margin: ' . $margin . ';';
        }
        if ($line_height != "") {
            $html .= 'line-height: ' . $line_height . 'px;';
            $html .= 'height: ' . $line_height . 'px;';
        }
        if ($width != "") {
            $html .= 'width: ' . $width . 'px;';
        }
        if ($font_style != "") {
            $html .= 'font-style: ' . $font_style . ';';
        }
        $html .= "'>" . $content . "</span>";

        return $html;
    }

    add_shortcode('no_dropcaps', 'no_dropcaps');
}

/* Highlights shortcode */

if (!function_exists('no_highlight')) {

    function no_highlight($atts, $content = null) {
        extract(shortcode_atts(array("color" => "", "background_color" => ""), $atts));

        $color = esc_attr($color);
        $background_color = esc_attr($background_color);

        $html = "<span class='highlight'";
        if ($color != "" || $background_color != "") {
            $html .= " style='color: " . $color . "; background-color:" . $background_color . ";'";
        }
        $html .= ">" . $content . "</span>";
        return $html;
    }

    add_shortcode('no_highlight', 'no_highlight');
}

/* Icon shortcode */
if (!function_exists('no_icons')) {

    function no_icons($atts, $content = null) {
        $default_atts = array(
            "back_to_top_icon" => "",
            "fa_size" => "",
            "custom_size" => "",
            "shape_size" => "",
            "type" => "",
            "rotated_shape" => "no",
            "border_radius" => "",
            "inner_border" => "",
            "position" => "",
            "shadow_color" => "",
            "hover_shadow_color" => "",
            "icon_shadow" => "",
            "border_color" => "",
            "border_width" => "",
            "icon_color" => "",
            "background_color" => "",
            "background_image" => "",
            "hover_icon_color" => "",
            "hover_border_color" => "",
            "hover_background_color" => "",
            "margin" => "",
            "icon_animation" => "",
            "icon_animation_delay" => "",
            "link" => "",
            "target" => "",
            "anchor_icon" => "",
			"icon_hover_animation" => "no_animation",
			"outline_color" => ""
        );

        $default_atts = array_merge($default_atts, pitch_qode_icon_collections()->getShortcodeParams());

        extract(shortcode_atts($default_atts, $atts));

        $html = "";
        //generate classes
        $icon_stack_classes = ''; //holder
        $animation_delay_style = ''; //holder
        $icon_link_style = ''; //icon
        $icon_link_classes = ''; //link
        //generate inline styles
        $icon_stack_style = ''; //holder
        $icon_style = '';               //icon
        //generate data attr
        $data_attr_icon = array();
        $data_attr_stack = '';
		$hover_animation_class = '';
		$animation_icon_style = '';
        $image_src = $background_image;

        if ($custom_size != "") {
            if ($type == 'normal') {
                $icon_style .= 'font-size: ' . $custom_size;

                if (!strstr($custom_size, 'px')) {
                    $icon_style .= 'px;';
                }
            }
        }

        if ($icon_color != "") {
            $icon_style .= 'color: ' . $icon_color . ';';
            $icon_link_style .= 'color: ' . $icon_color . ';';
            $data_attr_icon["data-color"] = "" . $icon_color . "";
        }
		
		
		if($icon_hover_animation != 'no_animation'){
			$hover_animation_class .= $icon_hover_animation;
		}
		
        $fa_size = pitch_qode_icon_collections()->getIconSizeClass($fa_size);

        if ($custom_size == '') {
            $icon_stack_classes .= $fa_size;
        }

        // font awesome icon with custom shape size has to have vertical align bottom
        if ($icon_pack == 'font_awesome' && !empty($fa_icon) && $type != 'normal' && $shape_size != '') {
            $icon_style .= "vertical-align:bottom;";
        }

        if ($position != "") {
            $icon_stack_classes .= 'pull-' . $position;
        }

        if ($back_to_top_icon == "yes") {
            $icon_stack_classes .= " back_to_top_icon";
        }

        if ($inner_border == "yes") {
            $icon_stack_classes .= " inner_border";
        }

        if ($icon_shadow == "yes") {
            $icon_stack_classes .= " icon_shadow";
            if ($shadow_color != "") {
                $data_attr_stack .= "data-shadow-color=" . $shadow_color . " ";
                $shadow_color_style = 'text-shadow:1px 1px ' . $shadow_color;
                for ($i = 2; $i < 100; $i++) {
                    $shadow_color_style .= ',' . $i . 'px ' . $i . 'px ' . $shadow_color . '';
                }
                $shadow_color_style .= ';';
                $icon_stack_style .= $shadow_color_style;
            }
            if ($hover_shadow_color != "") {
                $data_attr_stack .= "data-hover-shadow-color=" . $hover_shadow_color . " ";
            }
        }

        if ($background_color != "") {
            $icon_stack_style .= 'background-color: ' . $background_color . ';';
        }

        if (is_numeric($background_image)) {
            $image_src = wp_get_attachment_url($background_image);
        }

        if($image_src != ""){
            $icon_stack_style .= 'background-image: url('.$image_src.'); background-size: cover;';
            $icon_stack_classes .= " with_background_image";
        }

        if ($type != 'normal' && $border_color != "") {
            $icon_stack_style .= 'border-color: ' . $border_color . ';';
        }

        if ($type != 'normal') {
            if ($border_width != "") {
                $icon_stack_style .= 'border-width: ' . $border_width . 'px!important; border-style:solid;';
            } else { //default value
                $icon_stack_style .= 'border-width: 1px; border-style:solid;';
            }
        }

        if ($icon_animation_delay != "") {
            $icon_animation_delay .= 'ms';
            if ($type == 'normal') {
                $animation_delay_style .= '
            -webkit-transition: transform 0.2s ease ' . $icon_animation_delay . ', color 0.15s ease-out;
            -moz-transition: -moz-transform 0.2s ease ' . $icon_animation_delay . ', color 0.15s ease-out;
            -o-transition: -o-transform 0.2s ease ' . $icon_animation_delay . ', color 0.15s ease-out;
            -ms-transition: -ms-transform 0.2s ease ' . $icon_animation_delay . ', color 0.15s ease-out;
            transition: transform 0.2s ease ' . $icon_animation_delay . ', color 0.15s ease-out;';
            } else {
                $animation_delay_style .= '
            -webkit-transition: transform 0.2s ease ' . $icon_animation_delay . ', background-color 0.15s ease-out, border-color 0.15s ease-out, color 0.15s ease-out;
            -moz-transition: -moz-transform 0.2s ease ' . $icon_animation_delay . ', background-color 0.15s ease-out, border-color 0.15s ease-out, color 0.15s ease-out;
            -o-transition: -o-transform 0.2s ease ' . $icon_animation_delay . ', background-color 0.15s ease-out, border-color 0.15s ease-out, color 0.15s ease-out;
            -ms-transition: -ms-transform 0.2s ease ' . $icon_animation_delay . ', background-color 0.15s ease-out, border-color 0.15s ease-out, color 0.15s ease-out;
            transition: transform 0.2s ease ' . $icon_animation_delay . ', background-color 0.15s ease-out, border-color 0.15s ease-out, color 0.15s ease-out;';
            }
        }

        if ($margin != "") {
            $icon_stack_style .= 'margin: ' . $margin . ';';
        }

        $icon_font_size = '';

        if ($custom_size != '' && $shape_size != '') {
            $icon_font_size = $custom_size . 'px';
        }

        if ($custom_size != '' && $shape_size == "") {
            $shape_size = $custom_size;
            $icon_font_size = '60%';
        }

        if ($type != 'normal' && $shape_size != "") {
            if (!strstr($shape_size, 'px')) {
                $shape_size .= 'px';
            }

            $icon_style .= 'line-height:' . $shape_size . ';';

            if($icon_font_size !== '') {
                $icon_style .= 'font-size: ' . $icon_font_size . ';';
            }

            $icon_stack_style .= 'line-height:' . $shape_size . ';';
            $icon_stack_style .= 'width:' . $shape_size . ';';
            $icon_stack_style .= 'height:' . $shape_size . ';';
			
			$animation_icon_style .= 'width: ' . $shape_size . ';';
            $animation_icon_style .= 'height: ' . $shape_size . ';';
			
        } elseif ($type == 'normal' && $custom_size != "") {
            $icon_style .= 'line-height:' . ($custom_size + 2) . 'px;';
        }

        if ($type == 'square' && $rotated_shape == 'yes') {
            $icon_stack_classes .= " rotated";
        }

        if ($border_radius != "") {
            $border_radius = (strstr($border_radius, 'px', true)) ? $border_radius : $border_radius . "px";
            $icon_stack_style .= "border-radius: " . $border_radius . ";-moz-border-radius: " . $border_radius . ";-webkit-border-radius: " . $border_radius . ";";
			$animation_icon_style .= "border-radius: " . $border_radius . ";-moz-border-radius: " . $border_radius . ";-webkit-border-radius: " . $border_radius . ";";
        }

        if ($hover_icon_color != "") {
            $data_attr_icon["data-hover-color"] = "" . $hover_icon_color . "";
        }

        if ($hover_border_color != "") {
            $data_attr_stack .= "data-hover-border-color=" . $hover_border_color . " ";
        }
		
        if ($hover_background_color != "") {
            $data_attr_stack .= "data-hover-background-color=" . $hover_background_color . " ";
			
        }
		
		if ($outline_color != "") {
			if($icon_hover_animation == 'pulse'){
				$animation_icon_style .= "box-shadow: 0 0 0 5px " . $outline_color . "; ";
			} 
			else{
				$animation_icon_style .= "box-shadow: 0 0 0 2px " . $outline_color . "; ";
			}
			
        }
		
	
		

        if ($anchor_icon == "yes") {
            $icon_link_classes .= 'anchor';
        }

        $html = '<span class="q_icon_shade q_icon_shortcode ' . esc_attr($icon_pack . ' ' . $type . ' ' . $icon_stack_classes . ' ' . $hover_animation_class . ' ' . $icon_animation) . '" ' . $data_attr_stack . ' '.pitch_qode_get_inline_style($icon_stack_style.$animation_delay_style).'>';
        if ($link != "") {
            $html .= '<a href="' . esc_url($link) . '" target="' . esc_attr($target) . '" '.pitch_qode_get_inline_style($icon_link_style).' '. pitch_qode_get_class_attribute($icon_link_classes) . '>';
        }

        $icon_collection_obj = pitch_qode_icon_collections()->getIconCollection($icon_pack);

        if (method_exists($icon_collection_obj, 'render')) {
            $html .= $icon_collection_obj->render(${$icon_collection_obj->param}, array(
                'icon_attributes' => array_merge(
                        array(
                    'style' => $icon_style . ' ' . $animation_delay_style
                        ), $data_attr_icon
                )
            ));
        }
		
		if (($type == 'square' || $type == 'circle') && $icon_hover_animation != 'no_animation'){
			$html .= '<span class="animation_overlay" '.pitch_qode_get_inline_style($animation_icon_style).'></span>';
		}

        if ($link != "") {
            $html .= '</a>';
        }
		
		
		
        $html.= '</span>';
		
		
        return $html;
    }

    add_shortcode('no_icons', 'no_icons');
}


/* Icon with text shortcode */

if (!function_exists('no_icon_text')) {

    function no_icon_text($atts, $content = null) {
        $default_atts = array(
            "icon_size" => "",
            "custom_icon_size" => "30",
            "text_left_padding" => "86",
            "text_right_padding" => "86",
			"shape_size"		=> "",
            "icon_animation" => "",
            "icon_animation_delay" => "",
            "icon_animation_hover" => "no",
            "icon_type" => "",
            "custom_icon" => "",
			"custom_icon_hover" => "",
            "icon_border_width" => "",
            "without_double_border_icon" => "",
            "icon_position" => "",
            "icon_border_color" => "",
            "icon_margin" => "",
            "icon_color" => "",
            "icon_hover_color" => "",
            "icon_background_color" => "",
            "icon_hover_background_color" => "",
            "box_type" => "",
            "box_border_color" => "",
            "box_background_color" => "",
            "title" => "",
            "title_tag" => "h4",
            "title_color" => "",
            "title_margin" => "",
            "title_padding" => "",
            "separator" => "",
            "separator_color" => "",
            "separator_width" => "",
            "separator_thickness" => "",
            "separator_alignment" => "",
            "text" => "",
            "text_color" => "",
            "link" => "",
            "link_text" => "",
            "link_color" => "",
            "target" => ""
        );

        $default_atts = array_merge($default_atts, pitch_qode_icon_collections()->getShortcodeParams());

        extract(shortcode_atts($default_atts, $atts));

        $custom_icon_size = esc_attr($custom_icon_size);
        $text_left_padding = esc_attr($text_left_padding);
        $text_right_padding = esc_attr($text_right_padding);
        $icon_animation_delay = esc_attr($icon_animation_delay);
        $custom_icon = esc_attr($custom_icon);
		$custom_icon_hover = esc_attr($custom_icon_hover);
        $icon_border_width = esc_attr($icon_border_width);
        $icon_border_color = esc_attr($icon_border_color);
        $icon_margin = esc_attr($icon_margin);
        $icon_color = esc_attr($icon_color);
        $icon_background_color = esc_attr($icon_background_color);
        $box_border_color = esc_attr($box_border_color);
        $box_background_color = esc_attr($box_background_color);
        $title = esc_html($title);
        $title_color = esc_attr($title_color);
        $title_margin = esc_attr($title_margin);
        $title_padding = esc_attr($title_padding);
        $separator_color = esc_attr($separator_color);
        $separator_width = esc_attr($separator_width);
        $separator_thickness = esc_attr($separator_thickness);
        $text = esc_html($text);
        $text_color = esc_attr($text_color);
        $link = esc_url($link);
        $link_text = esc_html($link_text);
        $link_color = esc_attr($link_color);
		$shape_size = esc_attr($shape_size);

        $icon_size = pitch_qode_icon_collections()->getIconSizeClass($icon_size);

        $headings_array = array('h2', 'h3', 'h4', 'h5', 'h6');

        //get correct heading value. If provided heading isn't valid get the default one
        $title_tag = (in_array($title_tag, $headings_array)) ? $title_tag : $default_atts['title_tag'];

        //init icon styles
        $style = '';
        $icon_stack_classes = '';

        //init icon stack styles
        $icon_margin_style = '';
        $icon_stack_square_style = '';
        $icon_stack_base_style = '';
        $icon_stack_style = '';
        $icon_stack_font_size = '';
        $icon_holder_style = '';
        $animation_delay_style = '';
        $separator_style = '';
        $icon_data = '';

        //generate inline icon styles
        if ($custom_icon_size != "") {
            $custom_icon_size = (strstr($custom_icon_size, 'px', true)) ? $custom_icon_size : $custom_icon_size . 'px';
            $icon_stack_style .= 'font-size: ' . $custom_icon_size . ';';
            $icon_stack_font_size .= 'font-size: ' . $custom_icon_size . ';';
        }

        if ($icon_color != "") {
            $style .= 'color: ' . $icon_color . ';';
            $icon_stack_style .= 'color: ' . $icon_color . ';';
        }

        //generate icon stack styles
        if ($icon_background_color != "") {
            $icon_stack_base_style .= 'background-color: ' . $icon_background_color . ';';
            $icon_stack_square_style .= 'background-color: ' . $icon_background_color . ';';
        }

        if ($icon_border_width !== '') {
            $icon_border_width = (strstr($icon_border_width, 'px', true)) ? $icon_border_width : $icon_border_width . 'px';
            $icon_stack_base_style .= 'border-width: ' . $icon_border_width . ';';
            $icon_holder_style .= 'border-width: ' . $icon_border_width . ';';
            $icon_stack_square_style .= 'border-width: ' . $icon_border_width . ';';
        }

        if ($icon_border_color != "") {
            $icon_stack_style .= 'border-color: ' . $icon_border_color . ';';
            $icon_holder_style .= 'border-color: ' . $icon_border_color . ';';
        }
		if($shape_size != ""){
			$icon_stack_style .= 'width: ' . $shape_size . 'px;';
			$icon_stack_style .= 'height: ' . $shape_size . 'px;';
			$icon_stack_style .= 'line-height: ' . $shape_size . 'px;';			
		}

        if ($icon_margin != "") {
            $icon_margin_style .= "margin: " . $icon_margin . ";";
        }

        if ($icon_animation_delay != "" && $icon_animation == "q_icon_animation") {
            $animation_delay_style .= 'transition-delay: ' . $icon_animation_delay . 'ms; -webkit-transition-delay: ' . $icon_animation_delay . 'ms; -moz-transition-delay: ' . $icon_animation_delay . 'ms; -o-transition-delay: ' . $icon_animation_delay . 'ms;';
        }

        $box_size = '';
        //generate icon text holder styles and classes
        //map value of the field to the actual class value


        if ($icon_pack == 'font_awesome' && !empty($fa_icon)) {

            switch ($icon_size) {
                case 'qode_tiny_icon': //smallest icon size
                    $box_size = 'tiny';
                    break;
                case 'qode_small_icon':
                    $box_size = 'small';
                    break;
                case 'qode_medium_icon':
                    $box_size = 'medium';
                    break;
                case 'qode_large_icon':
                    $box_size = 'large';
                    break;
                case 'qode_huge_icon':
                    $box_size = 'very_large';
                    break;
                default:
                    $box_size = 'tiny';
            }
        }

        $box_icon_type = '';
        switch ($icon_type) {
            case 'normal':
                $box_icon_type = 'normal_icon';
                break;
            case 'square':
                $box_icon_type = 'square';
                break;
            case 'circle':
                $box_icon_type = 'circle';
                break;
        }

        if ($separator == 'yes') {
            $separator_style .= 'style="';

            if ($separator_color != '') {
                $separator_style .= 'background-color:' . $separator_color . ';';
            }
            if ($separator_thickness != '') {
                $separator_style .= 'height:' . $separator_thickness . 'px;';
            }
            if ($separator_width != '') {
                $separator_style .= 'width:' . $separator_width . 'px;';
            }
            if ($separator_alignment != '') {
                $separator_style .= 'float:' . $separator_alignment . ';';
            }

            $separator_style .= '"';
        }
        $html = "";
        $html_icon = "";

        // If icon is image, generate html
        $custom_icon_html = "";
        $custom_icon_holder = "";
        if (($custom_icon !== "") && is_numeric($custom_icon)) {
            $custom_icon_src = wp_get_attachment_url($custom_icon);
            $custom_icon_html = '<div class="custom_icon"><img class="custom_icon_original" src=' . $custom_icon_src . ' alt="' . esc_attr__( 'Custom Image', 'select-core' ) . '">';
            $custom_icon_holder = "custom_icon_holder";
			
			if (($custom_icon_hover !== "") && is_numeric($custom_icon_hover)) {
				$custom_icon_hover_src = wp_get_attachment_url($custom_icon_hover);
				$custom_icon_html .= '<img class="custom_icon_hover" src=' . $custom_icon_hover_src . ' alt="' . esc_attr__( 'Custom Image', 'select-core' ) . '">';
				$custom_icon_holder .= " has_hover_icon";
			}
			$custom_icon_html .= '</div>';			
        }

        if ($icon_hover_color !== "") {
            $icon_data .= 'data-icon-hover-color=' . $icon_hover_color . ' ';
        }

        if ($icon_hover_background_color !== "") {
            $icon_data .= 'data-icon-hover-background-color=' . $icon_hover_background_color . ' ';
        }

        //genererate icon html
        switch ($icon_type) {
            case 'circle':
                //if custom icon size is set and if it is larger than large icon size
                if ($custom_icon_size != "") {
                    //add custom font class that has smaller inner icon font
                    $icon_stack_classes .= ' custom-font';
                }

                $icon_collection_obj = pitch_qode_icon_collections()->getIconCollection($icon_pack);

                if (method_exists($icon_collection_obj, 'render')) {

                    if ($icon_pack == 'font_elegant' && !empty($fe_icon)) {

                        $html_icon .= '<span class="q_font_elegant_holder ' . $icon_type . ' ' . $icon_stack_classes . '" style="' . $icon_stack_style . $icon_stack_base_style . '">';
                        $html_icon .= $icon_collection_obj->render(${$icon_collection_obj->param}, array(
                            'icon_attributes' => array(
                                'style' => $icon_stack_font_size,
                                'class' => 'icon_text_icon q_font_elegant_icon '
                            )
                        ));
                        $html_icon .= '</span>';
                    } else {

                        $html_icon .= '<span class="qode_icon_stack ' . $icon_size . ' ' . $icon_stack_classes . '" style="' . $icon_stack_style . $icon_stack_base_style . '">';
                        $html_icon .= $icon_collection_obj->render(${$icon_collection_obj->param}, array(
                            'icon_attributes' => array(
                                'style' => $icon_stack_font_size,
                                'class' => 'icon_text_icon qode_icon_stack_1x'
                            )
                        ));
                        $html_icon .= '</span>';
                    }

                }

                break;
            case 'square':
                //if custom icon size is set and if it is larget than large icon size
                if ($custom_icon_size != "") {
                    //add custom font class that has smaller inner icon font
                    $icon_stack_classes .= ' custom-font';
                }

                $icon_collection_obj = pitch_qode_icon_collections()->getIconCollection($icon_pack);

                if (method_exists($icon_collection_obj, 'render')) {

                    if ($icon_pack == 'font_elegant' && !empty($fe_icon)) {

                        $html_icon .= '<span class="q_font_elegant_holder ' . $icon_type . ' ' . $icon_stack_classes . '" style="' . $icon_stack_style . $icon_stack_square_style . '">';
                        $html_icon .= $icon_collection_obj->render(${$icon_collection_obj->param}, array(
                            'icon_attributes' => array(
                                'style' => $icon_stack_font_size,
                                'class' => 'icon_text_icon q_font_elegant_icon '
                            )
                        ));
                        $html_icon .= '</span>';

                    } else {

                        $html_icon .= '<span class="qode_icon_stack ' . $icon_size . ' ' . $icon_stack_classes . '" style="' . $icon_stack_style . $icon_stack_square_style . '">';
                        $html_icon .= $icon_collection_obj->render(${$icon_collection_obj->param}, array(
                            'icon_attributes' => array(
                                'style' => $icon_stack_font_size,
                                'class' => 'icon_text_icon qode_icon_stack_1x'
                            )
                        ));
                        $html_icon .= '</span>';
                    }

                }
                break;
            default:

                $icon_collection_obj = pitch_qode_icon_collections()->getIconCollection($icon_pack);

                if (method_exists($icon_collection_obj, 'render')) {

                    if ($icon_pack == 'font_elegant' && $fe_icon != '') {

                        $html_icon .= '<span class="q_font_elegant_holder ' . $icon_type . ' ' . $icon_stack_classes . '" style="' . $icon_stack_style . '">';
                        $html_icon .= $icon_collection_obj->render(${$icon_collection_obj->param}, array(
                            'icon_attributes' => array(
                                'style' => $icon_stack_font_size,
                                'class' => 'icon_text_icon q_font_elegant_icon '
                            )
                        ));
                        $html_icon .= '</span>';

                    } else {

                        $html_icon .= '<span class="qode_icon_stack ' . $icon_size . ' ' . $icon_stack_classes . '" style="' . $icon_stack_style . '">';
                        $html_icon .= $icon_collection_obj->render(${$icon_collection_obj->param}, array(
                            'icon_attributes' => array(
                                'style' => $icon_stack_font_size,
                                'class' => 'icon_text_icon qode_icon_stack_1x '
                            )
                        ));
                        $html_icon .= '</span>';
                    }
                }


                break;
        }

        $title_style = "";
        if ($title_color != "") {
            $title_style .= "color: " . $title_color. ";";
        }

        if ($title_margin != "") {
            $title_margin = (strstr($title_margin, 'px', true)) ? $title_margin : $title_margin . "px";
            $title_style .= "margin-bottom: " . $title_margin. ";";
        }

        $text_style = "";
        if ($text_color != "") {
            $text_style .= "color: " . $text_color;
        }

        $link_style = "";

        if ($link_color != "") {
            $link_style .= "color: " . $link_color . ";";
        }

        //generate normal type of a box html
        if ($box_type == "normal") {

            //init icon text wrapper styles
            $icon_with_text_clasess = '';
            $icon_with_text_style = '';
            //$icon_text_holder_style = '';
            $icon_text_left_holder_style = '';
            $icon_text_right_holder_style = '';

            $icon_with_text_clasess .= $box_size;
            $icon_with_text_clasess .= ' ' . $box_icon_type;

            if ($text_left_padding != "") {
                $icon_text_left_holder_style .= 'padding-left: ' . $text_left_padding . 'px;';
            }

            if ($text_right_padding != "") {
                $icon_text_right_holder_style .= 'padding-right: ' . $text_right_padding . 'px;';
            }

            if ($icon_position == "" || $icon_position == "top") {
                $icon_with_text_clasess .= " center";
            }
            if ($icon_position == "left_from_title") {
                $icon_with_text_clasess .= " left_from_title";
            }
            if ($icon_position == "right_from_title") {
                $icon_with_text_clasess .= " right_from_title";
            }
            if ($icon_position == "right") {
                $icon_with_text_clasess .= " right clearfix";
            }

            if ($icon_animation_hover == "zoom") {
                $icon_with_text_clasess .= " animation_zoom";
            }

//            HTML FOR SEPARATOR
            $separator_html = '';
            if ($separator == 'yes') {
                $separator_html .= '<div class = "separator_holder">';
                $separator_html .= '<span class="separator" ' . $separator_style . '></span>';
                $separator_html .= '</div>';
            }

//            HTML FOR TITLE
            $title_html = '';
            $title_html .= '<div class="icon_title_inner_holder"><' . $title_tag . ' class="icon_title ' . $custom_icon_holder . '" style="' . $title_style . '">' . $title . '</' . $title_tag . '>';
            $title_html .= $separator_html;
            $title_html .= '</div>';

//            OPEN SHORTCODE HTML
            $html .= "<div class='q_icon_with_title " . $icon_with_text_clasess . "' " . esc_attr($icon_data) . ">";

//            IF ICON POSTITION IS RIGHT
            if($icon_position == 'right') {

                $html .= '<div class="icon_holder ' . $icon_animation . ' ' . $custom_icon_holder . '" style="' . $icon_margin_style .' position: absolute; right: 0px;' . $animation_delay_style . '">';
                $html .= '<div class="icon_holder_inner">';
                // If icon is image
                if ($custom_icon !== "") {
                    $html .= $custom_icon_html;
                } else {
                    $html .= $html_icon;
                }
                $html .= '</div>'; // close icon_holder_inner
                $html .= '</div>'; //close icon_holder
				
                $html .= '<div class="icon_text_holder" style="' . $icon_text_right_holder_style . ' position: relative;">';
                $html .= $title_html;

            }

//          ICON POSITION LEFT FROM TITLE
            elseif ($icon_position == 'left_from_title') {
                $html .= '<div class="icon_title_holder">';
                // If icon is image
                if ($custom_icon !== "") {
                    $html .= '<div class="' . $custom_icon_holder . ' ' . $icon_animation . '" style="' . $icon_margin_style . ' ' . $animation_delay_style . '">';
                    $html .= $custom_icon_html;
                    $html .= '</div>'; //close icon_holder
                } else {
                    $html .= '<div class="icon_holder ' . $icon_animation . ' ' . $custom_icon_holder .'" style="' . $icon_margin_style . ' ' . $animation_delay_style . '">';
                    $html .= '<div class="icon_holder_inner">';
                    $html .= $html_icon;
                    $html .= '</div>'; //close icon_holder_inner
                    $html .= '</div>'; //close icon_holder
                }
                $html .= $title_html;
                $html .= '</div>';
                $html .= '<div class="icon_text_holder">';

//            ICON POSITION LEFT
            } elseif($icon_position == 'left') {
                $html .= '<div class="icon_holder ' . $icon_animation . ' ' . $custom_icon_holder . '" style="' . $icon_margin_style . ' ' . $animation_delay_style . '">';
                $html .= '<div class="icon_holder_inner">';
                // If icon is image
                if ($custom_icon !== "") {
                    $html .= $custom_icon_html;
                } else {
                    $html .= $html_icon;
                }
                $html .= '</div>'; // close icon_holder_inner
                $html .= '</div>'; //close icon_holder
                $html .= '<div class="icon_text_holder" style="' . $icon_text_left_holder_style . '">';
                $html .= $title_html;

            }elseif($icon_position == 'right_from_title'){
                $html .= '<div class="icon_title_holder">';
                // If icon is image
                $html .= $title_html;
                if ($custom_icon !== "") {
                    $html .= '<div class="' . $custom_icon_holder . ' ' . $icon_animation . '" style="' . $icon_margin_style . ' ' . $animation_delay_style . '">';
                    $html .= $custom_icon_html;
                    $html .= '</div>'; //close icon_holder
                } else {
                    $html .= '<div class="icon_holder ' . $icon_animation . ' ' . $custom_icon_holder .'" style="' . $icon_margin_style . ' ' . $animation_delay_style . '">';
                    $html .= '<div class="icon_holder_inner">';
                    $html .= $html_icon;
                    $html .= '</div>'; //close icon_holder_inner
                    $html .= '</div>'; //close icon_holder
                }
                $html .= '</div>';
                $html .= '<div class="icon_text_holder">';
            }else {
                $html .= '<div class="icon_holder ' . $icon_animation . ' ' . $custom_icon_holder . '" style="' . $icon_margin_style . ' ' . $animation_delay_style . '">';
                $html .= '<div class="icon_holder_inner">';
                // If icon is image
                if ($custom_icon !== "") {
                    $html .= $custom_icon_html;
                } else {
                    $html .= $html_icon;
                }
                $html .= '</div>'; // close icon_holder_inner
                $html .= '</div>'; //close icon_holder
                $html .= '<div class="icon_text_holder">';
                $html .= $title_html;

            }

            $html .= '<div class="icon_text_inner">';

            $html .= "<p style='" . $text_style . "'>" . $text . "</p>";
            if ($link != "") {

                if ($target == "") {
                    $target = "_self";
                }

                if ($link_text == "") {
                    $link_text = "READ MORE";
                }

                $html .= "<a class='icon_with_title_link' href='" . $link . "' target='" . $target . "' style='" . $link_style . "'>" . $link_text . "</a>";
            }

            $html .= '</div></div></div>';

            //BOXED STYLE
        } else {
            //init icon text wrapper styles
            $icon_with_text_clasess = '';
            $box_holder_styles = '';
            $box_holder_classes = '';

            if ($box_border_color != "") {
                $box_holder_styles .= 'border-color: ' . $box_border_color . ';';
            }

            if ($box_background_color != "") {
                $box_holder_styles .= 'background-color: ' . $box_background_color . ';';
            }

            if ($icon_animation_hover == "zoom") {
                $box_holder_classes .= " animation_zoom";
            }

            if ($title_padding != "") {
                $valid_title_padding = (strstr($title_padding, 'px', true)) ? $title_padding : $title_padding . 'px';
                $title_style .= 'padding-top: ' . $valid_title_padding . ';';
            }

            $icon_with_text_clasess .= $box_size;
            $icon_with_text_clasess .= ' ' . $box_icon_type;

            if ($without_double_border_icon == 'yes') {
                $icon_with_text_clasess .= ' without_double_border';
            }

            $html .= '<div class="q_box_holder with_icon' . esc_attr($box_holder_classes) . '" style="' . $box_holder_styles . '" ' . esc_attr($icon_data) . '>';

            $html .= '<div class="box_holder_icon">';
            $html .= '<div class="box_holder_icon_inner ' . $icon_with_text_clasess . ' ' . $icon_animation . ' ' . $custom_icon_holder . '" style="' . $animation_delay_style . '">';
            $html .= '<div class="icon_holder_inner">';
            // If icon is image
            if ($custom_icon !== "") {
                $html .= $custom_icon_html;
            } else {
                $html .= $html_icon;
            }
            $html .= '</div>'; //close icon_holder_inner
            $html .= '</div>'; //close box_holder_icon_inner
            $html .= '</div>'; //close box_holder_icon
            //generate text html
            $html .= '<div class="box_holder_inner ' . $box_size . ' center">';
            $html .= '<' . $title_tag . ' class="icon_title" style="' . $title_style . '">' . $title . '</' . $title_tag . '>';
            $html .= '<p style="' . $text_style . '">' . $text . '</p>';
            $html .= '</div>'; //close box_holder_inner

            $html .= '</div>'; //close box_holder
        }

        return $html;
    }

    add_shortcode('no_icon_text', 'no_icon_text');
}


/* Image hover shortcode */

if (!function_exists('no_image_hover')) {

    function no_image_hover($atts, $content = null) {
        $args = array(
            "image" => "",
            "hover_image" => "",
            "link" => "",
            "target" => "_self",
            "animation" => "",
            "animation_speed" => "",
            "transition_delay" => ""
        );

        extract(shortcode_atts($args, $atts));

        $image = esc_attr($image);
        $hover_image = esc_attr($hover_image);
        $link = esc_url($link);
        $animation_speed = esc_attr($animation_speed);
        $transition_delay = esc_attr($transition_delay);

        //init variables
        $html = "";
        $image_classes = "";
        $image_src = $image;
        $hover_image_src = $hover_image;
        $images_styles = "";

        if ($animation_speed != "") {
            $transition_property = "opacity " . $animation_speed . "s ease-in-out";
            $images_styles .= " -webkit-transition: " . $transition_property . "; -ms-transition:  " . $transition_property . "; -moz-transition:  " . $transition_property . "; -o-transition:  " . $transition_property . "; transition:  " . $transition_property . ";";
        }

        if (is_numeric($image)) {
            $image_src = wp_get_attachment_url($image);
        }

        if (is_numeric($hover_image)) {
            $hover_image_src = wp_get_attachment_url($hover_image);
        }

        if ($hover_image_src != "") {
            $image_classes .= "active_image ";
        }

        $css_transition_delay = ($transition_delay != "" && $transition_delay > 0) ? $transition_delay / 1000 . "s" : "";

        $animate_class = ($animation == "yes") ? "hovered" : "";

        //generate output
        $html .= "<div class='image_hover {$animate_class}' style='' data-transition-delay='{$transition_delay}'>";
        $html .= "<div class='images_holder'>";

        if ($link != "") {
            $html .= "<a href='{$link}' target='{$target}'>";
        }

        $html .= "<img class='{$image_classes}' src='{$image_src}' alt='' style='{$images_styles}' />";
        $html .= "<img class='hover_image' src='{$hover_image_src}' alt='' style='{$images_styles}' />";

        if ($link != "") {
            $html .= "</a>";
        }

        $html .= "</div>"; //close image_hover
        $html .= "</div>"; //close images_holder

        return $html;
    }

    add_shortcode('no_image_hover', 'no_image_hover');
}

/* Icon List Item shortcode */

if (!function_exists('no_icon_list_item')) {

    function no_icon_list_item($atts, $content = null) {
        $args = array(
            "icon_type" => "",
            "icon_size" => "",
            "icon_color" => "",
            "icon_margin_right" => "",
            "border_type" => "",
            "border_color" => "",
            "title" => "",
            "title_color" => "",
            "title_size" => "",
            "title_font_family" => "",
            "title_font_weight" => "",
            "icon_background_color" => "",
            "bottom_margin" => "",
			"show_separator" => ""
        );

        $args = array_merge($args, pitch_qode_icon_collections()->getShortcodeParams());

        extract(shortcode_atts($args, $atts));

        $icon_color = esc_attr($icon_color);
        $icon_margin_right = esc_attr($icon_margin_right);
        $border_color = esc_attr($border_color);
        $title = esc_html($title);
        $title_color = esc_attr($title_color);
        $title_size = esc_attr($title_size);
		$title_font_weight = esc_attr($title_font_weight);
        $icon_background_color = esc_attr($icon_background_color);
        $bottom_margin = esc_attr($bottom_margin);
		$show_separator = esc_attr($show_separator);

        $html = '';
        $icon_style = "";
        $icon_classes = "";
        $title_style = "";
        $item_margin_style = "";

        $icon_classes .= $icon_type . " ";
        $icon_classes .= $icon_pack;

        if ($icon_color != "") {
            $icon_style .= "color:" . $icon_color . ";";
        }

        if ($icon_size != "") {
            $icon_size = (strstr($icon_size, 'px', true)) ? $icon_size : $icon_size . 'px';
            $icon_style .= "font-size:" . $icon_size . ";";
        }

        if ($border_color != "" && $border_type != "") {
            $icon_style .= "border-color: " . $border_color . ";";
        }

        if ($icon_margin_right !== "") {
            $icon_margin_right = (strstr($icon_margin_right, 'px', true)) ? $icon_margin_right : $icon_margin_right . 'px';
            $icon_style .= " margin-right: " . $icon_margin_right . ";";
        }

        if ($title_color != "") {
            $title_style .= "color:" . $title_color . ";";
        }

        if ($title_size != "") {
            $title_style .= "font-size: " . $title_size . "px;";
        }

        if ($title_font_family != "") {
            $title_style .= "font-family: " . $title_font_family . ";";
        }

		if ($title_font_weight != "") {
            $title_style .= "font-weight: " . $title_font_weight . ";";
        }

        if ($bottom_margin != "") {
            $bottom_margin = (strstr($bottom_margin, 'px', true)) ? $bottom_margin : $bottom_margin . 'px';
            $item_margin_style .= "style='margin-bottom: " . $bottom_margin . ";'";
        }
		$text_class = '';
		if($show_separator == "yes"){
			$text_class = 'show_separator';
		}
        $html .= '<div class="q_icon_list" ' .$item_margin_style .'>';

        $html .= '<div class="q_icon_list_icon_holder">';
        $html .= '<div class="q_icon_list_icon_holder_inner">';

        $icon_collection_obj = pitch_qode_icon_collections()->getIconCollection($icon_pack);

        if (method_exists($icon_collection_obj, 'render')) {
            $html .= $icon_collection_obj->render(${$icon_collection_obj->param}, array(
                'icon_attributes' => array(
                    'style' => $icon_style,
                    'class' => $icon_classes . ' ' . $border_type .' q_icon_list_item_icon'
                )
            ));
        }
        $html .= '</div>'; // close q_icon_list_icon_holder_inner
        $html .= '</div>'; // close q_icon_list_icon_holder

        $html .= '<p class="q_icon_list_text '.$text_class.'" '.pitch_qode_get_inline_style($title_style) . '>' . $title . '</p>';
        $html .= '</div>'; // close q_icon_list
        return $html;
    }

    add_shortcode('no_icon_list_item', 'no_icon_list_item');
}


/* Image with text shortcode */

if (!function_exists('no_image_with_text')) {

    function no_image_with_text($atts, $content = null) {
        $args = array(
            "image" => "",
            "text_over_image" => "no",
            "link" => "",
            "target" => "_self",
            "text_position" => "top",
            "alignment" => "center",
            "small_title" => "",
            "small_title_color" => "",
            "title" => "",
            "title_color" => "",
            "title_tag" => "h5",
            "title_underline" => "yes"
        );
        extract(shortcode_atts($args, $atts));

        $image = esc_attr($image);
        $link = esc_url($link);
        $small_title = esc_html($small_title);
        $small_title_color = esc_html($small_title_color);
        $title = esc_html($title);
        $title_color = esc_attr($title_color);

        $title_classes = '';
        $text_position_class = '';

        $headings_array = array('h2', 'h3', 'h4', 'h5', 'h6');

        //get correct heading value. If provided heading isn't valid get the default one
        $title_tag = (in_array($title_tag, $headings_array)) ? $title_tag : $args['title_tag'];

        if($text_over_image == 'yes') {
            $title_classes .= ' text_over_image';
            $text_position_class .= $text_position;
        }

        $html = '';
        $html .= '<div class="image_with_text ' . $alignment . $title_classes . '">';
        if (is_numeric($image)) {
            $image_src = wp_get_attachment_url($image);
        } else {
            $image_src = $image;
        }

        $html .= '<img src="' . $image_src . '" alt="' . $title . '" />';
        if($link != '') {
            $html .= '<a href="' . $link . '" target="' . $target . '"></a>';
        }
        $html .= '<div class="image_with_text_content_holder ' . $text_position_class .'">';
        $html .= '<span class="image_with_text_small_title" ';
        if ($small_title_color != "") {
            $html .= 'style="color:' . $small_title_color . ';"';
        }
        $html .= '>' . $small_title . '</span>';
        $html .= '<' . $title_tag . ' class="image_with_text_title" ';
        if ($title_color != "") {
            $html .= 'style="color:' . $title_color . ';"';
        }
        $html .= '>' . $title;
        if($title_underline == 'yes') {
            $html .= '<span class="title_underline" ';
            if ($title_color != "") {
                $html .= 'style="background-color:' . $title_color . ';"';
            }
            $html .= '></span>';
        }
        $html .= '</' . $title_tag . '>';
        $html .= '<span style="margin:0;" class="separator transparent"></span>';
        $html .= do_shortcode($content);
        $html .= '</div>';
        $html .= '</div>';

        return $html;
    }

    add_shortcode('no_image_with_text', 'no_image_with_text');
}

/* Interactive banners shortcode */

if (!function_exists('no_interactive_banners')) {

    function no_interactive_banners($atts, $content = null) {
        $args = array(
            "layout_width" => "",
            "show_border" => "always",
            "border_color" => "",
            "border_width" => "",
            "inner_border_offset" => "",
            "image" => "",
            "image_animate" => "",
            "overlay_color" => "",
            "overlay_color_hover" => "",
			"show_icon" => "always",
            "icon_custom_size" => "20",
            "icon_color" => "",
            "icon_type" => "circle",
            "title" => "",
            "title_color" => "",
            "title_size" => "",
            "title_tag" => "h4",
            "small_title" => "",
            "link_over_content" => "",
            "content_link" => "",
            "show_button" => "always",
            "button_size" => "",
            "button_padding" => "",
            "button_link" => "",
            "link_text" => "SEE MORE",
            "target" => "_self",
            "link_color" => "",
            "link_border_color" => "",
            "link_background_color" => "",
            "separator" => "yes",
            "separator_thickness" => "",
            "separator_color" => "",
            "show_content" => "always",
            "show_title" => "always"
        );

        $args = array_merge($args, pitch_qode_icon_collections()->getShortcodeParams());

        extract(shortcode_atts($args, $atts));

        $border_color = esc_attr($border_color);
        $border_width = esc_attr($border_width);
        $inner_border_offset = esc_attr($inner_border_offset);
        $image = esc_attr($image);
        $overlay_color = esc_attr($overlay_color);
        $overlay_color_hover = esc_attr($overlay_color_hover);
		$show_icon = esc_attr($show_icon);
		$icon_custom_size = esc_attr($icon_custom_size);
        $icon_color = esc_attr($icon_color);
        $title = esc_html($title);
        $title_color = esc_attr($title_color);
        $title_size = esc_attr($title_size);
        $small_title = esc_attr($small_title);
        $content_link = esc_url($content_link);
        $button_size = esc_attr($button_size);
        $button_padding = esc_attr($button_padding);
        $button_link = esc_url($button_link);
        $link_text = esc_html($link_text);
        $link_color = esc_attr($link_color);
        $link_border_color = esc_attr($link_border_color);
        $link_background_color = esc_attr($link_background_color);
        $separator_thickness = esc_attr($separator_thickness);
        $separator_color = esc_attr($separator_color);

        $headings_array = array('h2', 'h3', 'h4', 'h5', 'h6');

        //get correct heading value. If provided heading isn't valid get the default one
        $title_tag = (in_array($title_tag, $headings_array)) ? $title_tag : $args['title_tag'];

        //init variables
        $html = "";
        $title_styles = "";
        $icon_styles = "";
        $link_style = "";
        $icon_font_style = "";
        $inline_border_style = "";
		$inline_border_style_front = "";
		$inline_border_style_back = "";
        $custom_classes = "";
        $shader_style = ""; 
        $inner_border_style = "";
        $data_attr_shader = "";
        $title_class = "";
		$icon_visible_class = "";
        $data_attr_border  = "";

        //generate styles
        if ($show_border == "never") {
            $inline_border_style .= "border:none;";
			$inline_border_style_front .= "border:none;";
			$inline_border_style_back .= "border:none;";
        }
        if ($show_border == "always" && $border_color != "") {
            $inline_border_style .= "border-color:  " . $border_color . ";";
			$inline_border_style_front .= "border-color:  " . $border_color . ";";
			$inline_border_style_back .= "border-color:  " . $border_color . ";";
        }
		if ($show_border == "always" && $border_width != "") {
			$valid_border_width = (strstr($border_width, 'px', true)) ? $border_width : $border_width . 'px';
			$inline_border_style .= "border-width:  " . $valid_border_width . ";";
			$inline_border_style_front .= "border-width: " . $valid_border_width . ";";
			$inline_border_style_back .= "border-width: " . $valid_border_width . ";";
		}
        if ($show_border == "on_hover") {
			$inline_border_style .= "border:none;";
			$inline_border_style_front .= "border:none;";
			if($border_color != ''){
				$inline_border_style_back .= "border-color:  " . $border_color . ";";
			}
			if ($border_width !== ''){
				$valid_border_width = (strstr($border_width, 'px', true)) ? $border_width : $border_width . 'px';
				$inline_border_style_back .= "border-width: " . $valid_border_width . ";";
			}
        }
        if ($show_border == "before_hover") {
            $inline_border_style_back .= "border:none;";
            if($border_color != ''){
                $inline_border_style .= "border-color:  " . $border_color . ";";
                $inline_border_style_front .= "border-color:  " . $border_color . ";";
            }
            if ($border_width !== ''){
                $valid_border_width = (strstr($border_width, 'px', true)) ? $border_width : $border_width . 'px';
                $inline_border_style .= "border-width: " . $valid_border_width . ";";
                $inline_border_style_front .= "border-width: " . $valid_border_width . ";";
            }
        }

        if ($show_title != "never") {
            if ($title_color != "") {
                $title_styles .= "color: " . $title_color . ";";
            }

            if ($title_size != "") {
                $valid_title_size = (strstr($title_size, 'px', true)) ? $title_size : $title_size . 'px';
                $title_styles .= "font-size: " . $valid_title_size . ";";
            }
        }

        if ($overlay_color != '') {
            $shader_style .= 'style="background-color:' . $overlay_color . ';"';
        }

        if ($overlay_color_hover != '') {
            $data_attr_shader .= "data-hover-background-color=" . $overlay_color_hover . " ";
        }

        if ($inner_border_offset != "") {
            $inner_border_style .= "style='";
            $valid_inner_border_offset = (strstr($inner_border_offset, 'px', true)) ? $inner_border_offset : $inner_border_offset . 'px';
            $inner_border_style .= "padding: " . $valid_inner_border_offset . ";";
            $inner_border_style .= "'";
        }

        if ($icon_pack !== '') {
            $icon_styles .= "";
            if ($icon_color != "") {
                $icon_styles .= "color: " . $icon_color . ";";
            }
            if ($icon_custom_size != "") {
                $icon_font_style .= ' font-size: ' . $icon_custom_size;
                if (!strstr($icon_custom_size, 'px')) {
                    $icon_font_style .= 'px';
                }
                $icon_styles .= $icon_font_style . ';';
            }
        }

        if (is_numeric($image)) {
            $image_src = wp_get_attachment_url($image);
        } else {
            $image_src = $image;
        }

        if ($image_animate == 'yes') {
            $custom_classes .= ' image_zoom';
        }

        if ($link_color != "") {
            $link_style .= "color: " . $link_color . ";";
        }

        if ($link_border_color != "") {
            $link_style .= "border-color: " . $link_border_color . ";";
        }

        if ($link_background_color != "") {
            $link_style .= "background-color: " . $link_background_color . ";";
        }

        if ($show_button != "never") {
            if ($button_size != "") {
                if (!strstr($button_size, 'px')) {
                    $button_size .= 'px';
                }
                $link_style .= "height: " . $button_size . ';';
                $link_style .= "line-height: " . $button_size . ';';
            }

            if ($button_padding != "") {
                if (!strstr($button_padding, 'px')) {
                    $button_padding .= 'px';
                }
                $link_style .= "padding: 0 " . $button_padding . ";";
            }
        }

        if ($separator == "yes" || $separator == "on_hover") {

            $separator_styles = "";
            $separator_classes = "";

            if ($separator_thickness != "") {
                $separator_styles .= 'border-width: ' . $separator_thickness . '';
                if (!strstr($separator_thickness, 'px')) {
                    $separator_styles .= 'px';
                }
                $separator_styles .= ';';
            }

            if ($separator_color != "") {
                $separator_styles .= "border-color: " . $separator_color . ";";
            }


            if ($separator == "on_hover") {
                $separator_classes .= " visible_on_hover";
            }
        }


        if ($show_title == "always") {
            $title_class .= "visible_holder";
        }
      
        if ($show_title == "before_hover") {
            $title_class .= "visible_holder_before_hover";
        }                


		if ($show_icon == "on_hover") {
			$icon_visible_class .= "visible_on_hover";
		}

        if ($show_icon == "before_hover") {
            $icon_visible_class .= "visible_holder_before_hover";
        }


        $link = '#';
        if ($link_over_content == 'yes') {
            $link = $content_link;
        } else {
            $link = $button_link;
        }
		
	
	// render html
		
			$html .= '<div class="q_image_with_text_over ' . $custom_classes . ' ' . $layout_width . '">';

			$html .= '<div class="shader" ' . $shader_style . ' ' . $data_attr_shader . '></div>';
			if ($link_over_content == 'yes' && $show_button == "never") {
				$html .= '<a class="q_image_with_text_link_class" target="_self" href="' . $link . '"></a>';
			}

			$html .= '<img src="' . $image_src . '" alt="' . $title . '" />';

		// FRONT SIDE
			
			$html .= '<div class="front_holder" ' . $inner_border_style . '>';
			$html .= '<div class="front_holder_inner" style="' . $inline_border_style_front . '">';
			$html .= '<div class="front_holder_content">';
			
			$html .= '<div class="front_side">';

			if ( $show_icon == "always" || $show_icon == "before_hover") {
				if ($icon_pack !== '') {
					$html .= '<div class="icon_holder ' .$icon_visible_class. ' ' . $icon_type . '">';
					$icon_collection_obj = pitch_qode_icon_collections()->getIconCollection($icon_pack);

					if (method_exists($icon_collection_obj, 'render')) {

						$html .= $icon_collection_obj->render(${$icon_collection_obj->param}, array(
							'icon_attributes' => array(
								'style' => $icon_styles,
								'class' => ''
							)
						));

					}
					$html .= '</div>'; //close icon_holder
				}
			}

			if ($show_title == "always" || $show_title == "before_hover"){
                $html .= '<div class="content_title_holder">';
                if($small_title != "") {
                    $html .= '<span class="content_small_title">' . $small_title . '</span>';
                }
				if ($title != "") {

					$html .= '<' . $title_tag . ' class="content_title" style="' . $title_styles . '">' . $title . '</' . $title_tag . '>';

					if ($separator == "yes") {
						$html .= '<span class="separator small ' . $separator_classes . '" style="' . $separator_styles . '"></span>';
					}
				}
                $html .= '</div>';
			}

			//text content html
			if ($show_content == "always" || $show_content == "before_hover") {
				if ($content != "") {
					$html .= '<div class="text_content">';
					$html .= '<p>';
					$html .= pitch_qode_remove_wpautop($content, true);
					$html .= '</p></div>';
				}
			}

			//button html
			if ($show_button == "always") {
				if ($link_text != "") {
					$html .= ' <div class="button_holder">';
					$html .= '<a class="qbutton small" href="' . $link . '" target="' . $target . '" style="' . $link_style . '">' . $link_text . '</a>';
					$html .= '</div>';
				}
			}

			$html .= '</div>'; //close front_side
			$html .= '</div>'; //close front_holder_content
			$html .= '</div>'; //close front_holder_inner
			$html .= '</div>'; //close front_holder
			
		// BACK SIDE
			
			$html .= '<div class="back_holder" ' . $inner_border_style . '>';
			$html .= '<div class="back_holder_inner" style="' . $inline_border_style_back . '">';
			$html .= '<div class="back_holder_content">';
			
			$html .= '<div class="back_side">';

			if ( $show_icon == "always" || $show_icon == "on_hover") {
				if ($icon_pack !== '') {
					$html .= '<div class="icon_holder ' .$icon_visible_class. ' ' . $icon_type . '">';
					$icon_collection_obj = pitch_qode_icon_collections()->getIconCollection($icon_pack);

					if (method_exists($icon_collection_obj, 'render')) {

						$html .= $icon_collection_obj->render(${$icon_collection_obj->param}, array(
							'icon_attributes' => array(
								'style' => $icon_styles,
								'class' => ''
							)
						));

					}
					$html .= '</div>'; //close icon_holder
				}
			}

			if ($show_title == "always" || $show_title == "on_hover"){
                $html .= '<div class="content_title_holder">';
                if($small_title != "") {
                    $html .= '<span class="content_small_title">' . $small_title . '</span>';
                }
				if ($title != "") {           

					$html .= '<' . $title_tag . ' class="content_title" style="' . $title_styles . '">' . $title . '</' . $title_tag . '>';

					if ($separator == "yes" || $separator == "on_hover") {
						$html .= '<span class="separator small ' . $separator_classes . '" style="' . $separator_styles . '"></span>';
					}
				}
                $html .= '</div>';
			}

			//text content html
			if ($show_content == "always" || $show_content == "on_hover") {
				if ($content != "") {
					$html .= '<div class="text_content">';
					$html .= pitch_qode_remove_wpautop($content, true);
					$html .= '</div>';
				}
			}

			//button html
			if ($show_button == "always" || $show_button == "on_hover") {
				if ($link_text != "") {
					$html .= ' <div class="button_holder">';
					$html .= '<a class="qbutton small" href="' . $link . '" target="' . $target . '" style="' . $link_style . '">' . $link_text . '</a>';
					$html .= '</div>';
				}
			}

			$html .= '</div>'; //close front_side
			$html .= '</div>'; //close front_holder_content
			$html .= '</div>'; //close front_holder_inner
			$html .= '</div>'; //close front_holder
			
			
			$html .= '</div>'; //close interactive banners
			
		
    return $html;
	
    }

    add_shortcode('no_interactive_banners', 'no_interactive_banners');
}

/* Image with text and icon shortcode */
if (!function_exists('no_image_with_text_and_icon')) {

    function no_image_with_text_and_icon($atts, $content = null) {
        $args = array(
            "image" => "",
            "icon_type" => "",
            "icon_custom_size" => "25",
            "icon_shape_size" => "100",
            "icon_color" => "",
            "icon_background_color" => "",
            "link" => "",
            "target" => "_self",
            "title" => "",
            "title_color" => "",
            "title_tag" => "h4",
            "position_top" => "75",
        );

        $args = array_merge($args, pitch_qode_icon_collections()->getShortcodeParams());

        extract(shortcode_atts($args, $atts));

        $image = esc_attr($image);
        $icon_custom_size = esc_attr($icon_custom_size);
        $icon_shape_size = esc_attr($icon_shape_size);
        $icon_color = esc_attr($icon_color);
        $icon_background_color = esc_attr($icon_background_color);
        $link = esc_url($link);
        $title = esc_html($title);
        $title_color = esc_attr($title_color);
        $position_top = esc_attr($position_top);

        $html = '';
        $holder_style = '';
        $icon_styles = '';

        $icons_param_array = array();
        if ($icon_pack !== '') {
            $icons_param_array[] = "icon_pack='" . $icon_pack . "'";
        }

        foreach (pitch_qode_icon_collections()->iconCollections as $icon_set) {
            if (${$icon_set->param}) {
                $icons_param_array[] = $icon_set->param . "='" . ${$icon_set->param} . "'";
            }
        }

        if ($icon_type !== '') {
            $icons_param_array[] = "type='" . $icon_type . "'";
        }
        if ($icon_custom_size != '') {
            $icons_param_array[] = "custom_size='" . $icon_custom_size . "'";
        }
        if ($icon_shape_size != '') {
            $icons_param_array[] = "shape_size='" . $icon_shape_size . "'";
            $icon_position = (-$icon_shape_size / 2);
        }
        if ($icon_color != '') {
            $icons_param_array[] = "icon_color='" . $icon_color . "'";
        }
        if ($icon_background_color !== '') {
            $icons_param_array[] = "background_color='" . $icon_background_color . "'";
            $icons_param_array[] = "border_color='" . $icon_background_color . "'";
        }

        $html .= '<div class="q_image_with_text_and_icon">';

        $html .= '<div class="box_image">';
        if ($link != "") {
            $html .= '<a href="' . $link . '" target="' . $target . '">';
        }
        $html .= '<div class="image_holder_inner">';
        if (is_numeric($image)) {
            $image_src = wp_get_attachment_url($image);
        } else {
            $image_src = $image;
        }
        $html .= '<img src="' . $image_src . '" alt="' . $title . '" />';
        $html .= '</div>';

        $html .= '<div class="q_icon_holder" style="bottom:' . $icon_position . 'px;">';

        if ($icon_pack !== '') {
            $html .= do_shortcode('[no_icons ' . implode(' ', $icons_param_array) . ']');
        }

        $html .= '</div>';

        if ($link != "") {
            $html .= '</a>';
        }
        $html .= '</div>'; // close box_image

        $html .= '<div style="margin-top:'.$position_top.'px;">';
            if($title != ""){
                $html .= '<'.$title_tag.' class="q_image_with_text_and_icon_title"';
                if($title_color != ""){
                    $html .= ' style="color:'.$title_color.';"';
                }
                $html .= '>' . $title . '</'.$title_tag.'>';
            }
        $html .= '</div>';

        $html .= '<p>' . pitch_qode_remove_wpautop($content, true) . '</p>';

        $html .= '</div>'; // close q_image_with_text_and_icon
        return $html;
    }

    add_shortcode('no_image_with_text_and_icon', 'no_image_with_text_and_icon');
}

/* Latest posts shortcode */

if (!function_exists('no_blog_list')) {

    function no_blog_list($atts, $content = null) {
        $args = array(
            "type" => "boxes",
            "number_of_posts" => "",
            "number_of_columns" => "",
            "overlay_color" => "",
            "overlay_icon" => "",
            "rows" => "",
            "image_size" => "original",
            "image_width" => "",
            "image_height" => "",
            "show_thumbnail" => "yes",
            "order_by" => "",
            "order" => "",
            "category" => "",
            "vertical_align_text" => "middle",
			"border_around_item" => "no",
			"item_border_width" => "",
			"item_border_color" => "",
            "text_length" => "",
            "title_tag" => "h4",
            "title_size" => "",
            "title_color" => "",
            "display_excerpt" => "1",
            "excerpt_color" => "",
            "info_position" => "",
            "display_category" => "",
            "display_date" => "1",
            "date_place" => "by_title",
            "date_size" => "",
            "date_position" => "in_icon",
            "display_author" => "0",
            "display_comments" => "",
            "background_color" => "",
			"box_info_padding" => "",
            "separator" => "",
            "separator_color" => "",
            "separator_border_style" => "",
            "border_color" => "",
            "border_width" => "",
            "display_like" => "1",
            "display_share" => "0",
            "display_button" => "",
            "button_size" => "small",
            "button_style" => "",
            "button_text" => "LEARN MORE",
            "button_color" => "",
            "button_hover_color" => "",
            "button_background_color" => "",
            "button_hover_background_color" => "",
            "button_border_color" => "",
            "button_border_width" => "",
            "button_hover_border_color" => "",
            "button_border_radius" => "",
            "button_icon_position" => "",
            "button_icon_color" => "",
            "button_icon_hover_color" => "",
			"post_info_font_size"  => "",
			"post_info_color"	   => "",
			"post_info_font_family"	   => "",
			"post_info_text_transform"	   => "",
			"post_info_link_color"		=> "",
			"post_info_font_weight"     => "",
			"post_info_letter_spacing"  => "",
			"post_info_font_style"		=> ""
		);

        $args = array_merge($args, pitch_qode_icon_collections()->getShortcodeParams());

        extract(shortcode_atts($args, $atts));
        
		$headings_array = array('h2', 'h3', 'h4', 'h5', 'h6');

        //get correct heading value. If provided heading isn't valid get the default one
        $title_tag = (in_array($title_tag, $headings_array)) ? $title_tag : $args['title_tag'];

       
		
		$icon_data_attr = "";
        //get proper number of posts based on type param
        $posts_number = $number_of_posts;
        if ($number_of_posts === '' && $type ==='boxes'){
            $posts_number = $number_of_columns;
        }
		
		
		//run query to get posts
		$q = new WP_Query(array(
			'post_status' => 'publish',
			'orderby' => $order_by,
			'order' => $order,
			'posts_per_page' => $posts_number,
			'category_name' => $category
		));
		

        //set default value for different type
        if ($display_category == '') {
            if ($type == 'post_over_image') {
                $display_category = '0';
            } else {
                $display_category = '1';
            }
        }

        if ($display_comments == '') {
            if ($type == 'post_over_image' || $type == 'minimal') {
                $display_comments = '0';
            } else {
                $display_comments = '1';
            }
        }



        if ($display_button == '') {
            if ($type == 'post_over_image') {
                $display_button = '1';
            } else {
                $display_button = '0';
            }
        }
        if ($type == 'post_over_image' && $button_style == '') {
            $button_style = 'mid_transparent';
        }

        //get number of columns class for boxes type
        $columns_number = "";
        if ($type == 'boxes' || $type == 'post_over_image' || $type == 'image_with_date' || $type == 'date_in_left_section') {
            switch ($number_of_columns) {
                case 1:
                    $columns_number = 'one_column';
                    break;
                case 2:
                    $columns_number = 'two_columns';
                    break;
                case 3:
                    $columns_number = 'three_columns';
                    break;
                case 4:
                    $columns_number = 'four_columns';
                    break;
                default:
                    break;
            }
        }
		
        $title_style = "";
        if ($title_size != '') {
            $title_size = (strstr($title_size, 'px', true)) ? $title_size : $title_size . "px";
            $title_style .= 'font-size:' . $title_size . ';';
        }

        $title_link_style = "";

        if ($title_color !== "") {
            $title_link_style = 'color: ' . $title_color . ';';
        }

        if ($type == "boxes") {
            if ($title_size != '') {
                $title_size = (strstr($title_size, 'px', true)) ? $title_size : $title_size . "px";
                $title_link_style .= 'font-size:' . $title_size . ';';
            }
        }

        $title_link_style = 'style = "' . $title_link_style . '"';



        if ($type == "boxes" || $type == "image_in_box" ||$type=="minimal") {
            $date_style = '';
            if ($date_size != '') {
                $date_size = (strstr($date_size, 'px', true)) ? $date_size : $date_size . "px";
                $date_style .= 'font-size:' . $date_size . ';';
            }
            if ($date_place == "by_post_info" || $date_place == "over_title") {

                if($post_info_font_size != '' ){
                    $date_style .= 'font-size:' . $post_info_font_size . 'px;';
                }

                if($post_info_color != '' ){
                    $date_style .= 'color:' . $post_info_color . ';';
                }

                if($post_info_font_family != '' ){
                    $date_style .= "font-family:'" . $post_info_font_family . "';";
                }

                if($post_info_text_transform != '' ){
                    $date_style .= 'text-transform:' . $post_info_text_transform . ';';
                }

                if($post_info_letter_spacing != '' ){
                    $date_style .= 'font-weight:' . $post_info_font_weight . ';';
                }

                if($post_info_font_weight != '' ){
                    $date_style .= 'letter-spacing:' . $post_info_letter_spacing .'px;';
                }

                if($post_info_font_style != '' ){
                    $date_style .= 'font-style:' . $post_info_font_style . ';';
                }
            }
        }
		
		$latest_post_info_style_array = array();

		if($post_info_font_size != '' ){
			$latest_post_info_style_array[] = 'font-size:' . $post_info_font_size . 'px';
		}

		$latest_post_info_color = '';
		if($post_info_color != '' ){
			$latest_post_info_style_array[]  = 'color:' . $post_info_color;
			$latest_post_info_color .= 'color: ' .$post_info_color;
		}

		if($post_info_font_family != '' ){
			$latest_post_info_style_array[] = "font-family:'" . $post_info_font_family . "'";
		}

		if($post_info_text_transform != '' ){
			$latest_post_info_style_array[] = 'text-transform:' . $post_info_text_transform;
		}

		if($post_info_letter_spacing != '' ){
			$latest_post_info_style_array[] = 'font-weight:' . $post_info_font_weight;
		}

		if($post_info_font_weight != '' ){
			$latest_post_info_style_array[] = 'letter-spacing:' . $post_info_letter_spacing .'px';
		}

		if($post_info_font_style != '' ){
			$latest_post_info_style_array[] = 'font-style:' . $post_info_font_style;
		}

		$latest_post_info_link_color = '';
		if($post_info_link_color != '' ){
			$latest_post_info_link_color .= 'color: ' .$post_info_link_color;
		}
		
		$box_info_style_array = Array();
		
		if($type == 'boxes' || $type == 'image_in_box' || $type == 'split_column' || $type == 'masonry'){
			if ($vertical_align_text !== 'middle') {
				$box_info_style_array[] = 'vertical-align: ' . $vertical_align_text . ';';
			}
			if($background_color != ""){
				$box_info_style_array[] = 'background-color: '.$background_color;
			}
			if($box_info_padding != ""){
				$box_info_style_array[] = 'padding: '.$box_info_padding;
			}
			
			if($type == "masonry" && $border_around_item == "yes"){
				$box_info_style_array[] = 'border-style: solid';
				if($item_border_width != ""){
					$box_info_style_array[] = 'border-width: ' .$item_border_width . 'px';
				}else{
					$box_info_style_array[] = 'border-width: 1px';
				}
				if($item_border_color != ''){
					$box_info_style_array[] = 'border-color: ' .$item_border_color;
				}

			}
			if (is_array($box_info_style_array) && count($box_info_style_array)) {
				$box_info_style = implode(';', $box_info_style_array);
			} else {
				$box_info_style = '';
			}
			
		}
		

        if ($type == 'boxes') {
            $latest_post_overlay_style = '';
            if ($overlay_color != "") {
                $latest_post_overlay_style .= 'background-color:' . $overlay_color . ';';
            }
        }

        if ($display_excerpt == '1') {
            $excerpt_style = '';
            if ($excerpt_color != '') {
                $excerpt_style .= 'color:' . $excerpt_color;
            }
        }

        if ($type == 'post_over_image') {
            //get separator style
            $separator_styles = "";

            if ($separator_color != "") {
                $separator_styles .= "border-color: " . $separator_color . ";";
            }

            if ($separator_border_style != "") {
                $separator_styles .= "border-bottom-style: " . $separator_border_style . ';';
            }
        }

        if ($display_button == '1') {
            //get button style
            $button_param_array = array();
            if ($button_size !== '') {
                $button_param_array[] = "size='" . $button_size . "'";
            }
            if ($button_style !== '') {
                $button_param_array[] = "style='" . $button_style . "'";
            }
            if ($button_text !== '') {
                $button_param_array[] = "text='" . $button_text . "'";
            }
            if ($button_color !== '') {
                $button_param_array[] = "color='" . $button_color . "'";
            }
            if ($button_hover_color !== '') {
                $button_param_array[] = "hover_color='" . $button_hover_color . "'";
            }
            if ($button_background_color !== '') {
                $button_param_array[] = "background_color='" . $button_background_color . "'";
            }
            if ($button_hover_background_color !== '') {
                $button_param_array[] = "hover_background_color='" . $button_hover_background_color . "'";
            }
            if ($button_border_color !== '') {
                $button_param_array[] = "border_color='" . $button_border_color . "'";
            }
            if ($button_border_width !== '') {
                $button_param_array[] = "border_width='" . $button_border_width . "'";
            }
            if ($button_hover_border_color !== '') {
                $button_param_array[] = "hover_border_color='" . $button_hover_border_color . "'";
            }
            if ($button_border_radius != '') {
                $button_param_array[] = "border_radius='" . $button_border_radius . "'";
            }
            if ($icon_pack !== '') {
                $button_param_array[] = "icon_pack='" . $icon_pack . "'";
            }
            foreach (pitch_qode_icon_collections()->iconCollections as $icon_set) {
                if (${$icon_set->param}) {
                    $button_param_array[] = $icon_set->param . "='" . ${$icon_set->param} . "'";
                }
            }
            if ($button_icon_color !== '') {
                $button_param_array[] = "icon_color='" . $button_icon_color . "'";
            }
            if ($button_icon_position !== '') {
                $button_param_array[] = "icon_position='" . $button_icon_position . "'";
            }           
			
			if ($button_icon_hover_color != "") {
				$icon_data_attr .= "data-hover-icon-color=" . $button_icon_hover_color . " ";
			}
        }
		
        $has_background_class = '';
        if ($background_color !== '') {
            $has_background_class .= ' has_background';
        }

        $thumb_image_size = '';
        if ($image_size !== '' && $image_size == "landscape") {
            $thumb_image_size .= 'qode-pitch-portfolio-landscape';
        } else if($image_size === 'square'){
			$thumb_image_size .= 'qode-pitch-portfolio-square';
		} else if ($image_size !== '' && $image_size == "original") {
            $thumb_image_size .= 'full';
        }



        $html = "";
		$html .= '<div class="latest_post_holder ' . esc_attr($has_background_class . ' ' . $type . ' ' . $columns_number) . '">';
        $html .= "<ul class='post_list' " . $icon_data_attr . ">";
        if ($type == 'masonry') {
            $html .= '<li class="blog-list-masonry-grid-sizer"></li><li class="blog-list-masonry-grid-sizer-gutter"></li>';
        }
		$includedYears = array();

        while ($q->have_posts()) : $q->the_post();
            $li_classes = "";
            $box_style = "";
            $post_info_html = "";

	
            switch ($type) {

                case 'split_column':
                    $html .= '<li class = "clearfix">';
                    $html .= '<div class = "latest_post split_column_holder">';
                    $html .= '<div class = "split_image_holder split_column_column">';
                    if (has_post_thumbnail()) {
                        $html .= '<a href="' . esc_url(get_permalink()) . '">';
						if ($image_size !== 'custom' || $image_width == '' || $image_height == ''){
							$html.= get_the_post_thumbnail(get_the_ID(), $thumb_image_size);
						}
						else{
							$html.= pitch_qode_generate_thumbnail(get_post_thumbnail_id(get_the_ID()),null,$image_width,$image_height);
						}
                        $html .= '</a>';
                    }
                    $html .= '</div>';


                    $html .= '<div class = "split_text_holder split_column_column" '.pitch_qode_get_inline_style($box_info_style).'>';

                    $html .= '<div class = "post_info_holder"  '.pitch_qode_get_inline_style($latest_post_info_style_array).'>';
                    if ($display_date == '1') {
                        $html .= '<div class = "latest_post_date">' . get_the_time('d M Y') . " " . '</div>';
                    }


                    if ($display_category == '1') {
                        $cat = get_the_category();
                        $html .= '<div class="latest_post_categories"> '.esc_html__( 'in ','select-core');
                        foreach ($cat as $categ) {
                            $html .= '<a '.pitch_qode_get_inline_style($latest_post_info_link_color).' href="' . esc_url(get_category_link($categ->term_id)) . '">' . esc_html($categ->cat_name) . ' </a> ';
                        }
                        $html .= '</div>'; //close div.latest_post_categories
                    }

                    if ($display_author == '1') {
                        $html .= '<div class="latest_post_author">';
                        $html .= '<span '.pitch_qode_get_inline_style($latest_post_info_color).' > ' . esc_html__( "by", "select-core") . '</span> <a class="post_author_link" href="' . esc_url(get_author_posts_url(get_the_author_meta("ID"))) . '"><span '.pitch_qode_get_inline_style($latest_post_info_link_color).' >' . esc_html(get_the_author_meta("display_name")) . '</span></a>';
                        $html .= '</div>'; //close div.latest_post_author
                    }

                    if ($display_comments == "1") {
                        $comments_count = get_comments_number();

                        switch ($comments_count) {
                            case 0:
                                $comments_count_text = esc_html__( 'No comment', 'select-core');
                                break;
                            case 1:
                                $comments_count_text = $comments_count . ' ' . esc_html__( 'Comment', 'select-core');
                                break;
                            default:
                                $comments_count_text = $comments_count . ' ' . esc_html__( 'Comments', 'select-core');
                                break;
                        }
                        $html .= '<div class="latest_post_comments"> ';
                        $html .= '<a '.pitch_qode_get_inline_style($latest_post_info_link_color).' class="post_comments" href="' . esc_url(get_comments_link()) . '">';
                        $html .= $comments_count_text;
                        $html .= '</a></div>'; //close post_comments
                    }

                    $html .= '</div>'; //Closing div.post_info_holder

                    $html .= '<' . $title_tag . ' class="latest_post_title " ' . pitch_qode_get_inline_style($title_style) . '>';
                    $html .= '<a href="' . esc_url(get_permalink()) . '" '.$title_link_style.'>' . get_the_title() . '</a>';
                    $html .= '</' . $title_tag . '>';

                    if ($display_excerpt == '1' && $text_length != '0') {
                        $excerpt = ($text_length > 0) ? substr(get_the_excerpt(), 0, intval($text_length)) : get_the_excerpt();
                        $html .= '<div class = "split_column_excerpt" ' . pitch_qode_get_inline_style($excerpt_style) . '>';
                        $html .= $excerpt;
                        $html .= '...</div>';

                    }

                     if ($display_button == '1') {
                        $html .= do_shortcode('[no_button ' . implode(' ', $button_param_array) . ' link="' . get_permalink() . '"]');
                    }
                    $html .= '</div>'; //Closing div.split_text_holder


                    $html .= '</div>'; //Closing div.split_column_holder
                    $html .= '</li>';
                break;

                case 'image_in_box':

                        if ($background_color !== "") {
                             if ($background_color == "transparent" || $background_color == "rgba(0,0,0,0.01)") {
                                $box_info_style = "background-color: transparent; padding-right: 0; padding-left: 0;";
                            }
                        }

                        $post_info_html .= '<div class="post_info_section" ' . pitch_qode_get_inline_style($latest_post_info_style_array) . '>';

                        if ($display_date == '1' && $date_place == 'by_post_info') {
                            $post_info_html .= '<span class="date" ' . pitch_qode_get_inline_style($date_style) . '>' . get_the_time('j F Y') . ' </span>'; //close date_hour_holder
                        }

                        if ($display_comments == "1") {
                          $comments_count = get_comments_number();

                            switch ($comments_count) {
                                case 0:
                                    $comments_count_text = esc_html__( 'No comment', 'select-core');
                                    break;
                                case 1:
                                    $comments_count_text = $comments_count . ' ' . esc_html__( 'Comment', 'select-core');
                                    break;
                                default:
                                    $comments_count_text = $comments_count . ' ' . esc_html__( 'Comments', 'select-core');
                                    break;
                            }
                            $post_info_html .= '<div class="latest_post_comments"> ';
                            $post_info_html .= '<a '.pitch_qode_get_inline_style($latest_post_info_link_color).' class="post_comments" href="' . esc_url(get_comments_link()) . '">';
                            $post_info_html .= $comments_count_text;
                            $post_info_html .= '</a></div>'; //close post_comments
                        }

                        //generate category part of description
                        if ($display_category == '1') {
                            $cat = get_the_category();
                            $post_info_html .= '<div class="latest_post_categories"> ';

                            $post_info_html .= esc_html__( 'in ','select-core');

                            foreach ($cat as $categ) {
                                $post_info_html .= '<a '.pitch_qode_get_inline_style($latest_post_info_link_color).' href="' . esc_url(get_category_link($categ->term_id)) . '">' . esc_html($categ->cat_name) . ' </a> ';
                            }
                            $post_info_html .= '</div>'; //close span.latest_post_categories
                        }

                        //generate author part of description
                        if ($display_author == '1') {
                            $post_info_html .= '<div class="latest_post_author">';
                            $post_info_html .= '<span '.pitch_qode_get_inline_style($latest_post_info_color).'>' . esc_html__( "by", "select-core") . '</span> <a class="post_author_link" href="' . esc_url(get_author_posts_url(get_the_author_meta("ID"))) . '"><span '.pitch_qode_get_inline_style($latest_post_info_link_color).' >' . esc_html(get_the_author_meta("display_name")) . '</span></a>';
                            $post_info_html .= '</div>'; //close span.latest_post_categories
                        }

                        $post_info_html .= '</div>';
                        // generate post info end

                        $separator_style = '';

                        if ($border_color !== "" || $border_width !== "") {
                            $separator_style.= 'style = "';
                            if ($border_color !== "") {
                                $separator_style .= 'border-bottom-color: ' . $border_color . '; ';
                            }
                            else {
                                $separator_style .= 'border-bottom-color: #ededed; ';
                            }

                            if ($border_width !== "") {
                                $border_width = (strstr($border_width, 'px', true)) ? $border_width : $border_width . "px";
                                $separator_style .= 'border-bottom-width: ' . $border_width . '; ';
                            }
                            else {
                                $separator_style .= 'border-bottom-width: 1px; ';
                            }

                            $separator_style .= 'border-bottom-style: solid; padding: 18px 0;"'; 
                        }

                        $html .= '<li class="clearfix" ' . $separator_style . '>';

                        $html .= '<div class="box_padding_border">';

                        $html .= '<div class="latest_post" ' . pitch_qode_get_inline_style($box_info_style) . '>';

                        $html .= '<div class="latest_post_image clearfix">';
                        $html .= '<a href="' . esc_url(get_permalink()) . '">' . get_the_post_thumbnail(get_the_ID(), 'thumbnail') . '</a>';
                        $html .= '</div>';


                        $html .= '<div class="latest_post_text">';

                        if ($display_date == '1' && $date_place == 'over_title') {
                            $html .= '<div class="latest_post_date_over_title_holder">';
                            $html .= '<span class="date" ' . pitch_qode_get_inline_style($date_style) . '>' . get_the_time('j F Y') . ' </span>'; //close date_hour_holder
                            $html .= '</div>';
                        }

                        $html .= '<div class="latest_post_title_holder">';

                        $html .= '<' . $title_tag . ' class="latest_post_title " ' . pitch_qode_get_inline_style($title_style) . '>';
                        if ($display_date == '1' && $date_place == 'by_title') {
                            $html .= '<span class="date" ' . pitch_qode_get_inline_style($date_style) . '>' . get_the_time('d M') . ' </span>'; //close date_hour_holder
                        }

                        $html .= '<a href="' . esc_url(get_permalink()) . '" '.$title_link_style.'>' . get_the_title() . '</a></' . $title_tag . '>';
                        $html .= '</div>';  // close latest_post_title_holder


                        // top position or default for boxes type
                        if ($info_position == "top") {
                            $html .= $post_info_html;
                        }

                        if ($display_excerpt == '1' && $text_length != '0') {
                            $excerpt = ($text_length > 0) ? substr(get_the_excerpt(), 0, intval($text_length)) : get_the_excerpt();

                            $html .= '<p class="excerpt" ' . pitch_qode_get_inline_style($excerpt_style) . '>' . $excerpt . '...</p>';
                        }

                        // bottom position or default for image_in_box type
                        if ($info_position == "bottom" || $info_position == "") {
                            $html .= $post_info_html;
                        }

                        if ($display_button == '1') {
                            $html .= do_shortcode('[no_button ' . implode(' ', $button_param_array) . ' link="' . get_permalink() . '"]');
                        }

                        $html .= '</div>'; //close latest_post_text

                        $html .= '</div>'; //close latest_post
                        $html .= '</div></li>';


                    break;

				case 'boxes':
                        if ($background_color != "") {
                            if ($background_color == "transparent" || $background_color == "rgba(0,0,0,0.01)") {
                                $box_info_style = "background-color: transparent; padding-right: 0; padding-left: 0;";
                            } 
                        }

                        // generate post info start into $post_info_html
                        //generate comments part of description
                        $post_info_html .= '<div class="post_info_section" '.pitch_qode_get_inline_style($latest_post_info_style_array).'>';

                        if ($display_date == '1' && $date_place == 'by_post_info') {
                             $post_info_html .= '<span class="date" ' . pitch_qode_get_inline_style($date_style) . '>' . get_the_time('jS F') . ' </span>'; //close date
                        }

                        if ($display_comments == "1") {
                            $comments_count = get_comments_number();

                            switch ($comments_count) {
                                case 0:
                                    $comments_count_text = esc_html__( 'No comment', 'select-core');
                                    break;
                                case 1:
                                    $comments_count_text = $comments_count . ' ' . esc_html__( 'Comment', 'select-core');
                                    break;
                                default:
                                    $comments_count_text = $comments_count . ' ' . esc_html__( 'Comments', 'select-core');
                                    break;
                            }
                            $post_info_html .= '<div class="latest_post_comments"> ';
                            $post_info_html .= '<a '.pitch_qode_get_inline_style($latest_post_info_link_color).'  class="post_comments" href="' . esc_url(get_comments_link()) . '">';
                            $post_info_html .= $comments_count_text;
                            $post_info_html .= '</a></div>'; //close post_comments
                        }

                        //generate category part of description
                        if ($display_category == '1') {
                            $cat = get_the_category();
                            $post_info_html .= '<div class="latest_post_categories"> ';

                            $post_info_html .= esc_html__( 'In ','select-core');

                            foreach ($cat as $categ) {
                                $post_info_html .= '<a '.pitch_qode_get_inline_style($latest_post_info_link_color).' href="' . esc_url(get_category_link($categ->term_id)) . '">' . esc_html($categ->cat_name) . ' </a> ';
                            }
                            $post_info_html .= '</div>'; //close span.latest_post_categories
                        }

                        //generate author part of description
                        if ($display_author == '1') {
                            $post_info_html .= '<div class="latest_post_author">';
                            $post_info_html .= '<span '.pitch_qode_get_inline_style($latest_post_info_color).' >' . esc_html__( "by", "select-core") . '</span> <a class="post_author_link" href="' . esc_url(get_author_posts_url(get_the_author_meta("ID"))) . '"><span '.pitch_qode_get_inline_style($latest_post_info_link_color).' >' . esc_html(get_the_author_meta("display_name")) . '</span></a>';
                            $post_info_html .= '</div>'; //close span.latest_post_categories
                        }

                        $post_info_html .= '</div>';
                        // generate post info end

                        $minimal_style = '';


                        $html .= '<li class="clearfix" ' . pitch_qode_get_inline_style($minimal_style) . '>';

                        $html .= '<div class="box_padding_border">';

                        if ($show_thumbnail == 'yes') {
                            $html .= '<div class="boxes_image">';
                            $html .= '<a href="' . esc_url(get_permalink()) . '">';
							if ($image_size !== 'custom' || $image_width == '' || $image_height == ''){
								$html.= get_the_post_thumbnail(get_the_ID(), $thumb_image_size);
							}
							else{
								$html.= pitch_qode_generate_thumbnail(get_post_thumbnail_id(get_the_ID()),null,$image_width,$image_height);
							}
                            $html .= '<span class="latest_post_overlay" ' . pitch_qode_get_inline_style($latest_post_overlay_style) . '>';
                            if ($overlay_icon == "1") {
                                $html .= '<i class="icon_plus" aria-hidden="true"></i>';
                            }
                            $html .= '</span></a>';
                            $html .= '</div>';
                        }


                        $html .= '<div class="latest_post" ' . pitch_qode_get_inline_style($box_info_style) . '>';

                        $html .= '<div class="latest_post_text">';

                        if ($display_date == '1' && $date_place == 'over_title') {
                            $html .= '<div class="latest_post_date_over_title_holder">';
                            $html .= '<span class="date" ' . pitch_qode_get_inline_style($date_style) . '>' . get_the_time('F d, Y') . ' </span>'; //close date_hour_holder
                            $html .= '</div>';
                        }

                        // top position or default for boxes type
                        if ($info_position == "top" || $info_position == "") {
                            $html .= $post_info_html;
                        }

                        $html .= '<div class="latest_post_title_holder">';

                        $html .= '<' . $title_tag . ' class="latest_post_title " ' . pitch_qode_get_inline_style($title_style) . '>';
                        if ($display_date == '1' && $date_place == 'by_title') {
                             $html .= '<span class="date" ' . pitch_qode_get_inline_style($date_style) . '>' . get_the_time('d M') . ' </span>'; //close date_hour_holder
                        }
                        $html .= '<a href="' . esc_url(get_permalink()) . '" '.$title_link_style.'>' . get_the_title() . '</a></' . $title_tag . '>';
                        $html .= '</div>';  // close latest_post_title_holder

                        if ($display_excerpt == '1' && $text_length != '0') {
                            $excerpt = ($text_length > 0) ? substr(get_the_excerpt(), 0, intval($text_length)) : get_the_excerpt();

                            $html .= '<p class="excerpt" ' . pitch_qode_get_inline_style($excerpt_style) . '>' . $excerpt . '...</p>';
                        }

                                                // bottom position or default for image_in_box type
                        if ($info_position == "bottom") {
                            $html .= $post_info_html;
                        }


                        if ($display_button == '1') {
                            $html .= do_shortcode('[no_button ' . implode(' ', $button_param_array) . ' link="' . get_permalink() . '"]');
                        }

                        $html .= '</div>'; //close latest_post_text

                        $html .= '</div>'; //close latest_post
                        $html .= '</div></li>';

                    break;

                    case 'post_over_image':

                        $background_image_object = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'qode-pitch-portfolio-portrait');
                        $background_image_src = $background_image_object[0];


                        // generate post info start into $post_info_html
                        //generate comments part of description
                        $post_info_html .= '<div class="post_info_section" '.pitch_qode_get_inline_style($latest_post_info_style_array).'>';

                        if ($display_comments == "1") {
                            $comments_count = get_comments_number();

                            switch ($comments_count) {
                                case 0:
                                    $comments_count_text = esc_html__( 'No comment', 'select-core');
                                    break;
                                case 1:
                                    $comments_count_text = $comments_count . ' ' . esc_html__( 'Comment', 'select-core');
                                    break;
                                default:
                                    $comments_count_text = $comments_count . ' ' . esc_html__( 'Comments', 'select-core');
                                    break;
                            }
                            $post_info_html .= '<div class="latest_post_comments" '.pitch_qode_get_inline_style($latest_post_info_color).'> ';
                            $post_info_html .= '<a '.pitch_qode_get_inline_style($latest_post_info_link_color).' class="post_comments" href="' . esc_url(get_comments_link()) . '">';
                            $post_info_html .= $comments_count_text;
                            $post_info_html .= '</a></div>'; //close post_comments
                        }

                        //generate category part of description
                        if ($display_category == '1') {
                            $cat = get_the_category();
                            $post_info_html .= '<div class="latest_post_categories" '.pitch_qode_get_inline_style($latest_post_info_color).'> ';

                            $post_info_html .= esc_html__( 'in ','select-core');

                            foreach ($cat as $categ) {
                                $post_info_html .= '<a '.pitch_qode_get_inline_style($latest_post_info_link_color).' href="' . esc_url(get_category_link($categ->term_id)) . '">' . esc_html($categ->cat_name) . ' </a> ';
                            }
                            $post_info_html .= '</div>'; //close span.latest_post_categories
                        }

                        //generate author part of description
                        if ($display_author == '1') {
                            $post_info_html .= '<div class="latest_post_author">';
                            $post_info_html .= '<span '.pitch_qode_get_inline_style($latest_post_info_color).'>' . esc_html__( "by", "select-core") . '</span> <a class="post_author_link" href="' . esc_url(get_author_posts_url(get_the_author_meta("ID"))) . '"><span '.pitch_qode_get_inline_style($latest_post_info_link_color).' >' . esc_html(get_the_author_meta("display_name")) . '</span></a>';
                            $post_info_html .= '</div>'; //close span.latest_post_categories
                        }

                        $post_info_html .= '</div>';
                        // generate post info end

                        $minimal_style = '';

                        $html .= '<li class="clearfix" ' . pitch_qode_get_inline_style($minimal_style) . '>';

                        $html .= '<div class="box_padding_border">';

                        $html .= '<div class="latest_post" ' . pitch_qode_get_inline_style($box_style) . '>';

                        $html .= '<div class="latest_post_over_image clearfix" style="background-image: url(' . esc_url($background_image_src) . ');" >';
                        $html .= '<div class="latest_post_frame">';

                        $html .= '<div class="latest_post_text">';
                        $html .= '<div class="latest_post_title_holder">';
                        if ($display_date == '1') {
                            $html .= '<span class="date_holder">';
                            $html .= '<span class="date"><span class="date-day">' . get_the_time('d') . '</span>
                                                    <span class="date-month">' . get_the_time('M') . '</span>
                                      </span>';
                            $html .= '</span>'; //close date_hour_holder
                        }
                        $html .= '<' . $title_tag . ' class="latest_post_title " ' . pitch_qode_get_inline_style($title_style) . '>';

                        $html .= '<a href="' . esc_url(get_permalink()) . '" '.$title_link_style.'>' . get_the_title() . '</a></' . $title_tag . '>';
                        $html .= '</div>';  // close latest_post_title_holder

                        if ($separator == "yes") {
                            $html .= '<span class="separator medium" '.pitch_qode_get_inline_style($separator_styles).'></span>';
                        }

                        // top position or default for boxes type
                        if ($info_position == "top" || $info_position == "") {
                            $html .= $post_info_html;
                        }

                        if ($display_excerpt == '1' && $text_length != '0') {
                            $excerpt = ($text_length > 0) ? substr(get_the_excerpt(), 0, intval($text_length)) : get_the_excerpt();

                            $html .= '<p class="excerpt" ' . pitch_qode_get_inline_style($excerpt_style) . '>' . $excerpt . '...</p>';
                        }

                        // bottom position or default for image_in_box type
                        if ($info_position == "bottom") {
                            $html .= $post_info_html;
                        }

                        $html .= '</div>'; //close latest_post_text

                        if ($display_button == '1') {

                            $html .= do_shortcode('[no_button ' . implode(' ', $button_param_array) . ' link="' . get_permalink() . '"]');

                            $html .= '</div></div>'; //close latest_post_over_image
                        }

                        $html .= '</div>'; //close latest_post
                        $html .= '</div></li>';

                    break;

                    case 'image_with_date':

                        // generate post info start into $post_info_html
                        //generate comments part of description
                        $post_info_html .= '<div class="post_info_section" '.pitch_qode_get_inline_style($latest_post_info_style_array).'>';
                        if ($display_date == '1') {
                            if ($date_position == "down_in_info_section") {
                                $post_info_html .= '<div class="date_holder"><span class="big_date_format">' . get_the_time('d M Y') . '</span></div>';
                            }
                        }
                        if ($display_comments == "1") {
                            $comments_count = get_comments_number();

                            switch ($comments_count) {
                                case 0:
                                    $comments_count_text = esc_html__( 'No comment', 'select-core');
                                    break;
                                case 1:
                                    $comments_count_text = $comments_count . ' ' . esc_html__( 'Comment', 'select-core');
                                    break;
                                default:
                                    $comments_count_text = $comments_count . ' ' . esc_html__( 'Comments', 'select-core');
                                    break;
                            }
                            $post_info_html .= '<div class="latest_post_comments"> ';
                            $post_info_html .= '<a '.pitch_qode_get_inline_style($latest_post_info_link_color).' class="post_comments" href="' . esc_url(get_comments_link()) . '">';
                            $post_info_html .= $comments_count_text;
                            $post_info_html .= '</a></div>'; //close post_comments
                        }

                        //generate category part of description
                        if ($display_category == '1') {
                            $cat = get_the_category();
                            $post_info_html .= '<div class="latest_post_categories"> ';
                            foreach ($cat as $categ) {
                                $post_info_html .= '<a '.pitch_qode_get_inline_style($latest_post_info_link_color).' href="' . esc_url(get_category_link($categ->term_id)) . '">' . esc_html($categ->cat_name) . ' </a> ';
                            }
                            $post_info_html .= '</div>'; //close span.latest_post_categories
                        }

                        //generate author part of description
                        if ($display_author == '1') {
                            $post_info_html .= '<div class="latest_post_author">';
                            $post_info_html .= '<span '.pitch_qode_get_inline_style($latest_post_info_color).'>' . esc_html__( "by", "select-core") . '</span> <a class="post_author_link" href="' . esc_url(get_author_posts_url(get_the_author_meta("ID"))) . '"><span '.pitch_qode_get_inline_style($latest_post_info_link_color).'>' . esc_html(get_the_author_meta("display_name")) . '</span></a>';
                            $post_info_html .= '</div>'; //close span.latest_post_categories
                        }

                        $post_info_html .= '</div>';
                        // generate post info end

                        $minimal_style = '';

                        $html .= '<li class="clearfix" ' . pitch_qode_get_inline_style($minimal_style) . '>';
                        if ($display_date == '1') {
                            if ($date_position == "in_icon") {
                                $html .= '<span class="icon_date_holder">';
                                $html .= '<span class="date"><span class="date_day">' . get_the_time('d') . '</span>
                                                        <span class="date_month_year">' . get_the_time('M, Y') . '</span></span>';
                                $html .= '</span>'; //close date_holder
                            }
                        }
                        $html .= '<div class="box_padding_border">';

                        $html .= '<div class="latest_post" ' . pitch_qode_get_inline_style($box_style) . '>';


                        $html .= '<div class="latest_post_image clearfix">';
                        $html .= '<a href="' . esc_url(get_permalink()) . '">' . get_the_post_thumbnail(get_the_ID(), 'qode-pitch-portfolio_masonry_large') . '</a>';
                        $html .= '</div>';

                        $html .= '<div class="latest_post_text">';
                        $html .= '<div class="latest_post_title_holder">';

                        $html .= '<' . $title_tag . ' class="latest_post_title " ' . pitch_qode_get_inline_style($title_style) . '>';

                        $html .= '<a href="' . esc_url(get_permalink()) . '" '.$title_link_style.'>' . get_the_title() . '</a></' . $title_tag . '>';
                        $html .= '</div>';  // close latest_post_title_holder

                        // top position or default for boxes type
                        if ($info_position == "top" || $info_position == "") {
                            $html .= $post_info_html;
                        }

                        if ($display_excerpt == '1' && $text_length != '0') {
                            $excerpt = ($text_length > 0) ? substr(get_the_excerpt(), 0, intval($text_length)) : get_the_excerpt();

                            $html .= '<p class="excerpt" ' . pitch_qode_get_inline_style($excerpt_style) . '>' . $excerpt . '...</p>';
                        }

                        // bottom position or default for image_in_box type
                        if ($info_position == "bottom") {
                            $html .= $post_info_html;
                        }

                        if ($display_button == '1') {
                            $html .= do_shortcode('[no_button ' . implode(' ', $button_param_array) . ' link="' . get_permalink() . '"]');
                        }

                        $html .= '</div>'; //close latest_post_text

                        $html .= '</div>'; //close latest_post
                        $html .= '</div></li>';

                    break;

                    case 'minimal':

                        // generate post info start into $post_info_html
                        //generate comments part of description
                        $post_info_html .= '<div class="post_info_section" '.pitch_qode_get_inline_style($latest_post_info_style_array).'>';
                        if ($display_date == '1' && $date_place == 'by_post_info') {
                            $post_info_html .= '<span class="date" ' . pitch_qode_get_inline_style($date_style) . '>' . get_the_time('jS F') . ' </span>'; //close date_hour_holder
                        }
                        if ($display_comments == "1") {
                            $comments_count = get_comments_number();
                            switch ($comments_count) {
                                case 0:
                                    $comments_count_text = esc_html__( 'No comment', 'select-core');
                                    break;
                                case 1:
                                    $comments_count_text = $comments_count . ' ' . esc_html__( 'Comment', 'select-core');
                                    break;
                                default:
                                    $comments_count_text = $comments_count . ' ' . esc_html__( 'Comments', 'select-core');
                                    break;
                            }
                            $post_info_html .= '<div class="latest_post_comments"> ';
                            $post_info_html .= '<a '.pitch_qode_get_inline_style($latest_post_info_link_color).' class="post_comments" href="' . esc_url(get_comments_link()) . '">';
                            $post_info_html .= $comments_count_text;
                            $post_info_html .= '</a></div>'; //close post_comments
                        }

                        //generate author part of description
                        if ($display_author == '1') {
                            $post_info_html .= '<div class="latest_post_author">';
                            $post_info_html .= '<span '.pitch_qode_get_inline_style($latest_post_info_color).'></span> <a class="post_author_link" href="' . esc_url(get_author_posts_url(get_the_author_meta("ID"))) . '"><span '.pitch_qode_get_inline_style($latest_post_info_link_color).' >' . esc_html(get_the_author_meta("display_name")) . '</span></a>';
                            $post_info_html .= '</div>'; //close span.latest_post_categories
                        }

                        //generate category part of description
                        if ($display_category == '1') {
                            $cat = get_the_category();
                            $post_info_html .= '<div class="latest_post_categories"> ';

                            $post_info_html .= esc_html__( 'In ','select-core');

                            foreach ($cat as $categ) {
                                $post_info_html .= '<a '.pitch_qode_get_inline_style($latest_post_info_link_color).' href="' . esc_url(get_category_link($categ->term_id)) . '">' . esc_html($categ->cat_name) . ' </a> ';
                            }
                            $post_info_html .= '</div>'; //close span.latest_post_categories
                        }

                        $post_info_html .= '</div>';
                        // generate post info end

                        $minimal_style = '';
                        if ($border_color != '' || $border_width != '') {
                            if ($border_color != '') {
                                $minimal_style .= 'border-bottom-color:' . $border_color . ';';
                            }
                            else {
                                $minimal_style .= 'border-bottom-color: #ebebeb; ';
                            }
                            if ($border_width != '') {
                                $border_width = (strstr($border_width, 'px', true)) ? $border_width : $border_width . "px";
                                $minimal_style .= 'border-bottom-width:' . $border_width . ';';
                            }
                            else {
                                $minimal_style .= 'border-bottom-width: 1px; ';
                            }

                            $minimal_style .= 'border-bottom-style: solid;';
                        }

                        $html .= '<li class="clearfix" ' . pitch_qode_get_inline_style($minimal_style) . '>';

                        $html .= '<div class="box_padding_border">';

                        $html .= '<div class="latest_post" ' . pitch_qode_get_inline_style($box_style) . '>';


                        $html .= '<div class="latest_post_text">';
						if ($display_date == '1' && $date_place == 'over_title') {
                            $html .= '<div class="latest_post_date_over_title_holder">';
                            $html .= '<span class="date" ' . pitch_qode_get_inline_style($date_style) . '>' . get_the_time('jS F') . ' </span>'; //close date_hour_holder
                            $html .= '</div>';
                        }
                        $html .= '<div class="latest_post_title_holder">';

                        if ($display_date == '1' && $date_place == 'by_title') {
                            $html .= '<span class="date" ' . pitch_qode_get_inline_style($date_style) . '>' . get_the_time('jS F') . ' </span>'; //close date_hour_holder
                        }

                        // top position or default for boxes type
                        if ($info_position == "top" || $info_position == "") {
                            $html .= $post_info_html;
                        }

                        $html .= '<' . $title_tag . ' class="latest_post_title " ' . pitch_qode_get_inline_style($title_style) . '>';

                        $html .= '<a href="' . esc_url(get_permalink()) . '" '.$title_link_style.'>' . get_the_title() . '</a></' . $title_tag . '>';
                        $html .= '</div>';  // close latest_post_title_holder


                        if ($display_excerpt == '1' && $text_length != '0') {
                            $excerpt = ($text_length > 0) ? substr(get_the_excerpt(), 0, intval($text_length)) : get_the_excerpt();

                            $html .= '<p class="excerpt" ' . pitch_qode_get_inline_style($excerpt_style) . '>' . $excerpt . '...</p>';
                        }

                        // bottom position or default for image_in_box type
                        if ($info_position == "bottom") {
                            $html .= $post_info_html;
                        }

                        if ($display_button == '1') {
                            $html .= do_shortcode('[no_button ' . implode(' ', $button_param_array) . ' link="' . get_permalink() . '"]');
                        }

                        $html .= '</div>'; //close latest_post_text

                        $html .= '</div>'; //close latest_post
                        $html .= '</div></li>';


                    break;

                    case 'date_in_left_section':

                        $html .= '<li class = "clearfix date_in_left_section_item">';

                        if (has_post_thumbnail()) {
                            $html .= '<div class = "sections_image_holder">';
                            $html .= '<a href="' . esc_url(get_permalink()) . '">';
							if ($image_size !== 'custom' || $image_width == '' || $image_height == ''){
								$html.= get_the_post_thumbnail(get_the_ID(), $thumb_image_size);
							}
							else{
								$html.= pitch_qode_generate_thumbnail(get_post_thumbnail_id(get_the_ID()),null,$image_width,$image_height);
							}
                            $html .= '</a>';
                            $html .= '</div>'; //Closing of .sections_image_holder
                        }

                        $html .= '<div class = "sections_info_content_holder">';

                        $html .= '<div class = "sections_left_info">';

                        $html .= '<div class = "latest_post_date">';

                        $html .=  '<span class= "sections_month">' . get_the_time('M') . '</span>';

                        $html .= '<span class= "sections_day">' . get_the_time('d') . '</span>';

                        $html .= '</div>'; //Closed latest_post_date

                        if ($display_like == '1') {
                            if (function_exists('pitch_qode_get_like')) {
                                $html .= '<div class="blog_like">'.pitch_qode_get_like().'</div>';
                            }
                        }

                        if ($display_share == '1') {
                            $html .= '<div class="blog_list_social">';
                            $html .= do_shortcode('[no_social_share]');
                            $html .= '</div>';
                        }


                        $html .= '</div>'; //Closing of .sections_left_info

                        $html .= '<div class = "sections_content">';

                        $html .= '<' . $title_tag . ' class="latest_post_title " ' . pitch_qode_get_inline_style($title_style) . '>';
                        $html .= '<a href="' . esc_url(get_permalink()) . '" '.$title_link_style.'>' . get_the_title() . '</a>';
                        $html .= '</' . $title_tag . '>';

                        $html .= '<div class = "post_info_holder"  '.pitch_qode_get_inline_style($latest_post_info_style_array).'>';

                        if ($display_author == '1') {
                            $html .= '<div class="latest_post_author">';
                            $html .= '<span '.pitch_qode_get_inline_style($latest_post_info_color).' >' . esc_html__( "by", "select-core") . '</span> <a class="post_author_link" href="' . esc_url(get_author_posts_url(get_the_author_meta("ID"))) . '"><span '.pitch_qode_get_inline_style($latest_post_info_link_color).'>' . esc_html(get_the_author_meta("display_name")) . '</span></a>';
                            $html .= '</div>'; //close span.latest_post_categories
                        }

                        if ($display_category == '1') {
                            $cat = get_the_category();
                            $html .= '<div class="latest_post_categories">';
                            foreach ($cat as $categ) {
                                $html .= '<a '.pitch_qode_get_inline_style($latest_post_info_link_color).' href="' . esc_url(get_category_link($categ->term_id)) . '">' . esc_html($categ->cat_name) . ' </a> ';
                            }
                            $html .= '</div>'; //close span.latest_post_categories
                        }

                        if ($display_comments == "1") {
                            $comments_count = get_comments_number();

                            switch ($comments_count) {
                                case 0:
                                    $comments_count_text = esc_html__( 'No comment', 'select-core');
                                    break;
                                case 1:
                                    $comments_count_text = $comments_count . ' ' . esc_html__( 'Comment', 'select-core');
                                    break;
                                default:
                                    $comments_count_text = $comments_count . ' ' . esc_html__( 'Comments', 'select-core');
                                    break;
                            }
                            $html .= '<div class="latest_post_comments"> ';
                            $html .= '<a '.pitch_qode_get_inline_style($latest_post_info_link_color).' class="post_comments" href="' . esc_url(get_comments_link()) . '">';
                            $html .= $comments_count_text;
                            $html .= '</a></div>'; //close post_comments
                        }

                        $html .= '</div>'; //Closing of .post_info_holder

                        if ($text_length != '0') {
                            $excerpt = ($text_length > 0) ? substr(get_the_excerpt(), 0, intval($text_length)) : get_the_excerpt();
                            $html .= '<div class = "sections_content_excerpt" ' . pitch_qode_get_inline_style($excerpt_style) . '>';
                            $html .= $excerpt;
                            $html .= '...</div>';
                        }

                        if ($display_button == '1') {
                            $html .= do_shortcode('[no_button ' . implode(' ', $button_param_array) . ' link="' . get_permalink() . '"]');
                        }

                        $html .= '</div>'; //Closing of .sections_content

                        $html .= '</div>'; //Closing .sections_info_content_holder

                        $html .= '</li>'; //Closing of li.date_in_left_section

                    break;

                    case 'masonry':
						if ($background_color != "") {
                            if ($background_color == "transparent" || $background_color == "rgba(0,0,0,0.01)") {
                                $box_info_style = "background-color: transparent; padding-right: 0; padding-left: 0;";
                            }
                        }

                        $html .= '<li class="blog-list-masonry-item">';
                        $html .= '<a href="' . esc_url(get_permalink()) . '">' . get_the_post_thumbnail(get_the_ID()) . '</a>';
                        $html .= '<div class="latest_post" '.pitch_qode_get_inline_style($box_info_style).'>';

                        $html .= '<div class="post_info">';
                        //Date
                        if ($display_date == '1') {
                            $html .= '<span class="date">' . get_the_time('jS F') . ' </span>';
                        }

                        //Author
                        if ($display_author == '1') {
                            $html .= '<span class="post_author_link"><a href="' . esc_url(get_author_posts_url(get_the_author_meta("ID"))) . '">' . esc_html(get_the_author_meta("display_name")) . '</a></span>';
                        }

                        //Category
                        if ($display_category == '1') {

                            $category = get_the_category();

                            $post_categories = array();
                            foreach($category as $cat) {
                                $post_categories[] = '<a href="' . esc_url(get_category_link($cat->term_id)) . '" class="post_author_category">' . esc_html($cat->cat_name) . '</a>';
                            }
                            $html .= '<span class="post_categories">' . esc_html__( 'In', 'select-core') . ' ' . implode(', ', $post_categories) . '</span>';

                        }
                        $html .= '</div>';

                        $html .= '<' . $title_tag . ' class="latest_post_title " ' . pitch_qode_get_inline_style($title_style) . '><a href="' . esc_url(get_permalink()) . '" ' . $title_link_style . '>' . get_the_title() . '</a></' . $title_tag . '>';

                        if ($display_excerpt == '1' && $text_length != '0') {
                            $excerpt = ($text_length > 0) ? substr(get_the_excerpt(), 0, intval($text_length)) : get_the_excerpt();

                            $html .= '<p class="excerpt" ' . pitch_qode_get_inline_style($excerpt_style) . '>' . $excerpt . '</p>';
                        }

                        $html .= '</div>';

                        $html .= '</li>';

                    break;

                    default:
                        if ($background_color !== "") {
                             if ($background_color == "transparent" || $background_color == "rgba(0,0,0,0.01)") {
                                $box_style = "background-color: transparent; padding-right: 0; padding-left: 0;";
                            } else {
                                $box_style = "background-color: " . $background_color . ";";
                            }
                        }

                        $post_info_html .= '<div class="post_info_section" '.pitch_qode_get_inline_style($latest_post_info_style_array).'>';

                        if ($display_comments == "1") {
                          $comments_count = get_comments_number();

                            switch ($comments_count) {
                                case 0:
                                    $comments_count_text = esc_html__( 'No comment', 'select-core');
                                    break;
                                case 1:
                                    $comments_count_text = $comments_count . ' ' . esc_html__( 'Comment', 'select-core');
                                    break;
                                default:
                                    $comments_count_text = $comments_count . ' ' . esc_html__( 'Comments', 'select-core');
                                    break;
                            }
                            $post_info_html .= '<div class="latest_post_comments"> ';
                            $post_info_html .= '<a '.pitch_qode_get_inline_style($latest_post_info_link_color).' class="post_comments" href="' . esc_url(get_comments_link()) . '">';
                            $post_info_html .= $comments_count_text;
                            $post_info_html .= '</a></div>'; //close post_comments
                        }

                        //generate category part of description
                        if ($display_category == '1') {
                            $cat = get_the_category();
                            $post_info_html .= '<div class="latest_post_categories"> ';

                            $post_info_html .= esc_html__( 'in ','select-core');

                            foreach ($cat as $categ) {
                                $post_info_html .= '<a '.pitch_qode_get_inline_style($latest_post_info_link_color).' href="' . esc_url(get_category_link($categ->term_id)) . '">' . esc_html($categ->cat_name) . ' </a> ';
                            }
                            $post_info_html .= '</div>'; //close span.latest_post_categories
                        }

                        //generate author part of description
                        if ($display_author == '1') {
                            $post_info_html .= '<div class="latest_post_author">';
                            $post_info_html .= '<span '.pitch_qode_get_inline_style($latest_post_info_color).'>' . esc_html__( "by", "select-core") . '</span> <a  class="post_author_link" href="' . esc_url(get_author_posts_url(get_the_author_meta("ID"))) . '"><span '.pitch_qode_get_inline_style($latest_post_info_link_color).'>' . esc_html(get_the_author_meta("display_name")) . '</span></a>';
                            $post_info_html .= '</div>'; //close span.latest_post_categories
                        }

                        $post_info_html .= '</div>';
                        // generate post info end

                        $minimal_style = '';

                        $html .= '<li class="clearfix" ' . pitch_qode_get_inline_style($minimal_style) . '>';

                        $html .= '<div class="box_padding_border">';

                        $html .= '<div class="latest_post" ' . pitch_qode_get_inline_style($box_style) . '>';

                        $html .= '<div class="latest_post_image clearfix">';
                        $html .= '<a href="' . esc_url(get_permalink()) . '">' . get_the_post_thumbnail(get_the_ID(), 'thumbnail') . '</a>';
                        $html .= '</div>';


                        $html .= '<div class="latest_post_text">';
                        $html .= '<div class="latest_post_title_holder">';

                        $html .= '<' . $title_tag . ' class="latest_post_title " ' . pitch_qode_get_inline_style($title_style) . '>';
                        if ($display_date == '1') {
                            $html .= '<span class="date" ' . pitch_qode_get_inline_style($date_style) . '>' . get_the_time('d M') . ' </span>'; //close date_hour_holder
                        }

                        $html .= '<a href="' . esc_url(get_permalink()) . '">' . get_the_title() . '</a></' . $title_tag . '>';
                        $html .= '</div>';  // close latest_post_title_holder


                        // top position or default for boxes type
                        if ($info_position == "top") {
                            $html .= $post_info_html;
                        }

                        if ($display_excerpt == '1' && $text_length != '0') {
                            $excerpt = ($text_length > 0) ? substr(get_the_excerpt(), 0, intval($text_length)) : get_the_excerpt();

                            $html .= '<p class="excerpt" ' . pitch_qode_get_inline_style($excerpt_style) . '>' . $excerpt . '...</p>';
                        }

                        // bottom position or default for image_in_box type
                        if ($info_position == "bottom" || $info_position == "") {
                            $html .= $post_info_html;
                        }

                        if ($display_button == '1') {
                            $html .= do_shortcode('[no_button ' . implode(' ', $button_param_array) . ' link="' . get_permalink() . '"]');
                        }

                        $html .= '</div>'; //close latest_post_text

                        $html .= '</div>'; //close latest_post
                        $html .= '</div></li>';

                    break;
            }


        endwhile;
        wp_reset_postdata();

        $html .= "</ul></div>"; //close latest_post_holder
        return $html;
    }

    add_shortcode('no_blog_list', 'no_blog_list');
}

/* Line graph shortcode */

if (!function_exists('no_line_graph')) {

    function no_line_graph($atts, $content = null) {
        extract(shortcode_atts(array("type" => "rounded", "custom_color" => "", "labels" => "", "width" => "750", "height" => "350", "scale_steps" => "3", "scale_step_width" => "15"), $atts));

        $custom_color = esc_attr($custom_color);
        $labels = esc_attr($labels);
        $width = esc_attr($width);
        $height = esc_attr($height);
        $scale_steps = esc_attr($scale_steps);
        $scale_step_width = esc_attr($scale_step_width);

        $id = mt_rand(1000, 9999);
        if ($type == "rounded") {
            $bezierCurve = "true";
        } else {
            $bezierCurve = "false";
        }

        $id = mt_rand(1000, 9999);
        $html = "<div class='q_line_graf_holder'><div class='q_line_graf'><canvas id='lineGraph" . $id . "' height='" . $height . "' width='" . $width . "'></canvas></div><div class='q_line_graf_legend'><ul>";
        $line_graph_array = explode(";", $content);
        for ($i = 0; $i < count($line_graph_array); $i = $i + 1) {
            $line_graph_el = explode(",", $line_graph_array[$i]);
            $html .= "<li><div class='color_holder' style='background-color: " . trim($line_graph_el[0]) . ";'></div><p style='color: " . $custom_color . ";'>" . trim($line_graph_el[1]) . "</p></li>";
        }
        $html .= "</ul></div></div><script>var lineGraph" . $id . " = {labels : [";
        $line_graph_labels_array = explode(",", $labels);
        for ($i = 0; $i < count($line_graph_labels_array); $i = $i + 1) {
            if ($i > 0)
                $html .= ",";
            $html .= '"' . $line_graph_labels_array[$i] . '"';
        }
        $html .= "],";
        $html .= "datasets : [";
        $line_graph_array = explode(";", $content);
        for ($i = 0; $i < count($line_graph_array); $i = $i + 1) {
            $line_graph_el = explode(",", $line_graph_array[$i]);
            if ($i > 0)
                $html .= ",";
            $values = "";
            for ($j = 2; $j < count($line_graph_el); $j = $j + 1) {
                if ($j > 2)
                    $values .= ",";
                $values .= $line_graph_el[$j];
            }
            $color = pitch_qode_hex2rgb(trim($line_graph_el[0]));
            $html .= "{fillColor: 'rgba(" . $color[0] . "," . $color[1] . "," . $color[2] . ",0.7)',data:[" . $values . "]}";
        }
        if (pitch_qode_options()->getOptionValue( 'text_fontsize' )) {
            $text_fontsize = pitch_qode_options()->getOptionValue( 'text_fontsize' );
        } else {
            $text_fontsize = 15;
        }
        if (pitch_qode_options()->getOptionValue( 'text_color' )&& $custom_color == "") {
            $text_color = pitch_qode_options()->getOptionValue( 'text_color' );
        } else if (empty(pitch_qode_options()->getOptionValue( 'text_color' )) && $custom_color != "") {
            $text_color = $custom_color;
        } else if (pitch_qode_options()->getOptionValue( 'text_color' )&& $custom_color != "") {
            $text_color = $custom_color;
        } else {
            $text_color = '#818181';
        }
        $html .= "]};
			var \$j = jQuery.noConflict();
			\$j(document).ready(function() {
				if(\$j('.touch .no_delay').length){
					new Chart(document.getElementById('lineGraph" . $id . "').getContext('2d')).Line(lineGraph" . $id . ",{scaleOverride : true,
					scaleStepWidth : " . $scale_step_width . ",
					scaleSteps : " . $scale_steps . ",
					bezierCurve : " . $bezierCurve . ",
					pointDot : false,
					scaleLineColor: '#505050',
					scaleFontColor : '" . $text_color . "',
					scaleFontSize : " . $text_fontsize . ",
					scaleGridLineColor : '#e1e1e1',
					datasetStroke : false,
					datasetStrokeWidth : 0,
					animationSteps : 120,});
				}else{
					\$j('#lineGraph" . $id . "').appear(function() {
						new Chart(document.getElementById('lineGraph" . $id . "').getContext('2d')).Line(lineGraph" . $id . ",{scaleOverride : true,
						scaleStepWidth : " . $scale_step_width . ",
						scaleSteps : " . $scale_steps . ",
						bezierCurve : " . $bezierCurve . ",
						pointDot : false,
						scaleLineColor: '#000000',
						scaleFontColor : '" . $text_color . "',
						scaleFontSize : " . $text_fontsize . ",
						scaleGridLineColor : '#e1e1e1',
						datasetStroke : false,
						datasetStrokeWidth : 0,
						animationSteps : 120,});
					},{accX: 0, accY: -200});
				}
			});
		</script>";
        return $html;
    }

    add_shortcode('no_line_graph', 'no_line_graph');
}

/* Message shortcode */

if (!function_exists('no_message')) {

    function no_message($atts, $content = null) {
        $args = array(
            "type" => "",
            "background_color" => "",
            "border_color" => "",
            "border_width" => "",
            "icon_position" => "",
            "custom_icon_position" => "",
            "icon_size" => "fa-2x",
            "icon_custom_size" => "",
            "icon_color" => "",
            "icon_background_color" => "",
            "custom_icon" => "",
            "close_button_color" => "",
            "close_button_hover_color" => ""
        );

        $args = array_merge($args, pitch_qode_icon_collections()->getShortcodeParams());

        extract(shortcode_atts($args, $atts));

        $background_color = esc_attr($background_color);
        $border_color = esc_attr($border_color);
        $border_width = esc_attr($border_width);
        $icon_custom_size = esc_attr($icon_custom_size);
        $icon_color = esc_attr($icon_color);
        $icon_background_color = esc_attr($icon_background_color);
        $custom_icon = esc_attr($custom_icon);
        $close_button_color = esc_attr($close_button_color);
        $close_button_hover_color = esc_attr($close_button_hover_color);

        //init variables
        $html = "";
        $icon_html = "";
        $message_classes = "";
        $message_styles = "";
        $icon_styles = "";
        $close_button_style = "";
		$data = "";

        if ($type == "with_icon") {
            $message_classes .= " with_icon";
        }

        if ($type == "with_custom_icon") {
            $icon_position = $custom_icon_position;
        }

        if ($background_color != "") {
            $message_styles .= "background-color: " . $background_color . ";";
        }

        if ($border_color != "") {
            if ($border_width != "") {
                $message_styles .= "border: " . $border_width . "px solid " . $border_color . ";";
            } else {
                $message_styles .= "border: 1px solid " . $border_color . ";";
            }
        }

        if ($icon_color != "") {
            $icon_styles .= "color: " . $icon_color . ";";
        }

        if ($icon_background_color != "") {
            $icon_styles .= " background-color: " . $icon_background_color . ";";
        }

        if ($icon_custom_size != "") {
            $icon_font_style = ' font-size: ' . $icon_custom_size;
            if (!strstr($icon_custom_size, 'px')) {
                $icon_font_style .= 'px;';
            }
            $icon_styles .= $icon_font_style;
        }

        if ($close_button_color != "") {
            $close_button_style .= "color: " . $close_button_color;
        }
		
		if ($close_button_hover_color != "") {
			$data .= "data-close-hover-color='" .$close_button_hover_color . "'";
		}

        $icon_size = pitch_qode_icon_collections()->getIconSizeClass($icon_size);

        $html .= "<div class='q_message " . $message_classes . "' " .$data . " style='" . $message_styles . "'>";
        $html .= "<div class='q_message_inner'>";
        if ($type == "with_icon") {
            $icon_html .= '<div class="q_message_icon_holder ' . $icon_position . '"><div class="q_message_icon"><div class="q_message_icon_inner">';
            if ($custom_icon != "") {
                if (is_numeric($custom_icon)) {
                    $custom_icon_src = wp_get_attachment_url($custom_icon);
                } else {
                    $custom_icon_src = $custom_icon;
                }

                $icon_html .= '<img src="' . $custom_icon_src . '" alt="' . esc_attr__( 'Custom Image', 'select-core' ) . '">';
            } else {
                $icon_collection_obj = pitch_qode_icon_collections()->getIconCollection($icon_pack);
                
                if (method_exists($icon_collection_obj, 'render')) {
                    
                    $icon_html .= $icon_collection_obj->render(${$icon_collection_obj->param}, array(
                        'icon_attributes' => array(
                            'style' => $icon_styles,
                            'class' => $icon_size
                        )
                    ));
                    
                }
                
            }

            $icon_html .= '</div></div></div>';
        }

        $html .= $icon_html;

        $html .= "<a href='#' class='close'>";
        $html .= "<i class='q_font_elegant_icon icon_close' style='" . $close_button_style . "'></i>";
        $html .= "</a>"; //close a.close

        $html .= "<div class='message_text_holder'><div class='message_text'><div class='message_text_inner'>" . do_shortcode($content) . "</div></div></div>";

        $html .= "</div></div>"; //close message text div
        return $html;
    }

    add_shortcode('no_message', 'no_message');
}


/* Ordered List shortcode */

if (!function_exists('no_ordered_list')) {

    function no_ordered_list($atts, $content = null) {
		
		$args = array(
			"show_separator" => ""
        );
		extract(shortcode_atts($args, $atts));
		$show_separator = esc_attr($show_separator);
		
		$list_classes = '';
		
		if($show_separator == "yes"){
			$list_classes .= " show_separator";
		}
        $html = "<div class='ordered $list_classes'>" . $content . "</div>";
        return $html;
    }

    add_shortcode('no_ordered_list', 'no_ordered_list');
}


/* Pie Chart shortcode */

if (!function_exists('no_pie_chart')) {

    function no_pie_chart($atts, $content = null) {
        $args = array(
            "size" => "",
            "type_of_central_text" => "",
            "title" => "",
            "title_color" => "",
            "title_tag" => "h4",
            "percent" => "",
            "show_percent_mark" => "with_mark",
            "percentage_color" => "",
            "percent_font_family" => "",
            "percent_font_size" => "",
            "percent_font_weight" => "",
            "active_color" => "",
            "noactive_color" => "",
            "line_width" => "",
            "text" => "",
            "text_color" => "",
            "separator" => "",
            "separator_color" => "",
            "separator_width" => "",
            "separator_thickness" => "",
            "separator_margin_top" => "",
            "separator_margin_bottom" => "",
            "separator_border_style" => "",
            "chart_alignment" => "",
            "margin_below_chart" => "",
            "outer_border" => "no"
        );

        extract(shortcode_atts($args, $atts));

        $size = esc_attr($size);
        $title = esc_html($title);
        $title_color = esc_attr($title_color);
        $percent = esc_attr($percent);
        $percentage_color = esc_attr($percentage_color);
        $percent_font_family = esc_attr($percent_font_family);
        $percent_font_size = esc_attr($percent_font_size);
        $active_color = esc_attr($active_color);
        $noactive_color = esc_attr($noactive_color);
        $line_width = esc_attr($line_width);
        $text = esc_html($text);
        $text_color = esc_attr($text_color);
        $separator_color = esc_attr($separator_color);
        $separator_width = esc_attr($separator_width);
        $separator_thickness = esc_attr($separator_thickness);
        $separator_margin_top = esc_attr($separator_margin_top);
        $separator_margin_bottom = esc_attr($separator_margin_bottom);
        $margin_below_chart = esc_attr($margin_below_chart);

        $headings_array = array('h2', 'h3', 'h4', 'h5', 'h6');

        //get correct heading value. If provided heading isn't valid get the default one
        $title_tag = (in_array($title_tag, $headings_array)) ? $title_tag : $args['title_tag'];

        $html = '';
        $separator_styles = "";
        $text_holder_style = '';
		$pie_chart_classes = '';

        if ($separator_color != "") {
            $separator_styles .= "border-color: " . $separator_color . ";";
        }

        if ($separator_border_style != "") {
            $separator_styles .= "border-bottom-style: " . $separator_border_style . ';';
        }
		
		if ($separator_width != "") {
            $separator_styles .= "width: " . $separator_width . 'px;';
        }
		
		if ($separator_thickness != "") {
            $separator_styles .= "border-bottom-width: " . $separator_thickness . 'px;';
        }
		
		if ($separator_margin_top != "") {
            $separator_styles .= "margin-top: " . $separator_margin_top . 'px;';
        }
		
		if ($separator_margin_bottom != "") {
            $separator_styles .= "margin-bottom: " . $separator_margin_bottom . 'px;';
        }
		
		if($outer_border!="" && $outer_border=='yes'){
			$pie_chart_classes .= ' has_outer_border';
		}

        $html .= '<div class="q_pie_chart_holder"><div class="q_percentage ' . $pie_chart_classes . '" data-alignment="' . $chart_alignment . '" data-percent="' . $percent . '" data-linewidth="' . $line_width . '" data-size="' . $size . '" data-active="' . $active_color . '" data-noactive="' . $noactive_color . '"';

        $html .= '>';
		
        if ($type_of_central_text == "title") {
            if ($title != "") {
                $html .= '<' . $title_tag . ' class="pie_title"';
                if ($title_color != "") {
                    $html .= ' style="color: ' . $title_color . ';"';
                }
                $html .= '>' . $title . '</' . $title_tag . '>';
            }
        } else {
            $html .= '<span class="tocounter ' . $show_percent_mark . '"';
            if ($percentage_color != "" || $percent_font_family != "" || $percent_font_size != "" || $percent_font_weight != "") {
                $html .= ' style="';

                if ($percentage_color != "") {
                    $html .= 'color:' . $percentage_color . ';';
                }
                if ($percent_font_family != "") {
                    $html .= 'font-family:' . $percent_font_family . ';';
                }
                if ($percent_font_size != "") {
                    $html .= 'font-size:' . $percent_font_size . 'px;';
                }
                if ($percent_font_weight != "") {
                    $html .= 'font-weight:' . $percent_font_weight . ';';
                }
                $html .= '"';
            }

            $html .= '>' . $percent . '</span>';
        }

        if ($margin_below_chart != '') {
            $margin_below_chart = (strstr($margin_below_chart, 'px', true)) ? $margin_below_chart : $margin_below_chart . "px";
            $text_holder_style = "style='margin-top:".$margin_below_chart. ";'";
        }

        $html .= '</div><div class="pie_chart_text';
        if ($type_of_central_text == "title" || $title == "") {
            $html .= ' without_title';
        }

        $html .= '" '.$text_holder_style.'>';


        if ($type_of_central_text == "percent") {
            if ($title != "") {
                $html .= '<' . $title_tag . ' class="pie_title"';
                if ($title_color != "") {
                    $html .= ' style="color: ' . $title_color . ';"';
                }
                $html .= '>' . $title . '</' . $title_tag . '>';
            }
        }

        if ($separator == "yes") {
            $html .= '<span class="separator medium" style="' . $separator_styles . '"></span>';
        }

        if ($text != "") {
            $html .= '<p';
            if ($text_color != "") {
                $html .= ' style="color: ' . $text_color . ';"';
            }
            $html .= '>' . $text . '</p>';
        }
        $html .= "</div></div>";
        return $html;
    }

    add_shortcode('no_pie_chart', 'no_pie_chart');
}

/* Pie Chart With Icon shortcode */

if (!function_exists('no_pie_chart_with_icon')) {

    function no_pie_chart_with_icon($atts, $content = null) {
        $args = array(
            "size" => "",
            "percent" => "",
            "active_color" => "",
            "noactive_color" => "",
            "line_width" => "",
            "icon_color" => "",
            "icon_size" => "2x",
            "icon_custom_size" => "",
            "title" => "",
            "title_color" => "",
            "title_tag" => "h4",
            "text" => "",
            "text_color" => "",
            "separator" => "",
            "separator_color" => "",
			"separator_width" => "",
            "separator_thickness" => "",
            "separator_margin_top" => "",
            "separator_margin_bottom" => "",
            "separator_border_style" => "",
            "margin_below_chart" => "",
            "outer_border" => "no"
        );

        $args = array_merge($args, pitch_qode_icon_collections()->getShortcodeParams());

        extract(shortcode_atts($args, $atts));

        $size = esc_attr($size);
        $percent = esc_attr($percent);
        $active_color = esc_attr($active_color);
        $noactive_color = esc_attr($noactive_color);
        $line_width = esc_attr($line_width);
        $icon_color = esc_attr($icon_color);
        $icon_custom_size = esc_attr($icon_custom_size);
        $title = esc_html($title);
        $title_color = esc_attr($title_color);
        $text = esc_html($text);
        $text_color = esc_attr($text_color);
        $separator_color = esc_attr($separator_color);
        $separator_width = esc_attr($separator_width);
        $separator_thickness = esc_attr($separator_thickness);
        $separator_margin_top = esc_attr($separator_margin_top);
        $separator_margin_bottom = esc_attr($separator_margin_bottom);
        $margin_below_chart = esc_attr($margin_below_chart);
        $icon_size = pitch_qode_icon_collections()->getIconSizeClass($icon_size);

        $headings_array = array('h2', 'h3', 'h4', 'h5', 'h6');

        //get correct heading value. If provided heading isn't valid get the default one
        $title_tag = (in_array($title_tag, $headings_array)) ? $title_tag : $args['title_tag'];

        $html = '';
        $separator_styles = "";
        $icon_styles = "";
        $icon_font_style = "";
        $text_holder_style = "";
		$pie_chart_classes = "";

        if ($separator_color != "") {
            $separator_styles .= "border-color: " . $separator_color . ";";
        }

        if ($separator_border_style != "") {
            $separator_styles .= "border-bottom-style: " . $separator_border_style . ';';
        }
		
		if ($separator_width != "") {
            $separator_styles .= "width: " . $separator_width . 'px;';
        }
		
		if ($separator_thickness != "") {
            $separator_styles .= "border-bottom-width: " . $separator_thickness . 'px;';
        }
		
		if ($separator_margin_top != "") {
            $separator_styles .= "margin-top: " . $separator_margin_top . 'px;';
        }
		
		if ($separator_margin_bottom != "") {
            $separator_styles .= "margin-bottom: " . $separator_margin_bottom . 'px;';
        }
		
		if($outer_border!="" && $outer_border=='yes'){
			$pie_chart_classes .= ' has_outer_border';
		}

        $html .= '<div class="q_pie_chart_with_icon_holder"><div class="q_percentage_with_icon ' .$pie_chart_classes . '" data-percent="' . $percent . '" data-linewidth="' . $line_width . '"  data-size="' . $size . '" data-active="' . $active_color . '" data-noactive="' . $noactive_color . '">';
		
        if ($icon_custom_size != "") {
            $icon_font_style = ' font-size: ' . $icon_custom_size;
            if (!strstr($icon_custom_size, 'px')) {
                $icon_font_style .= 'px;';
            }
            $icon_styles .= $icon_font_style;
        }

        if ($icon_color != "") {
            $icon_styles .= ' color: ' . $icon_color;
        }

        $icon_collection_obj = pitch_qode_icon_collections()->getIconCollection($icon_pack);

        if (method_exists($icon_collection_obj, 'render')) {

            $html .= $icon_collection_obj->render(${$icon_collection_obj->param}, array(
                'icon_attributes' => array(
                    'style' => $icon_styles,
                    'class' => $icon_size
                )
            ));

        }

        if ($margin_below_chart != '') {
            $margin_below_chart = (strstr($margin_below_chart, 'px', true)) ? $margin_below_chart : $margin_below_chart . "px";
            $text_holder_style = "style='margin-top:".$margin_below_chart. ";'";
        }

        $html .= '</div><div class="pie_chart_text"'.$text_holder_style.'>';
        if ($title != "") {
            $html .= '<' . $title_tag . ' class="pie_title"';
            if ($title_color != "") {
                $html .= ' style="color: ' . $title_color . ';"';
            }
            $html .= '>' . $title . '</' . $title_tag . '>';
        }
        if ($separator == "yes") {
            $html .= '<span class="separator medium" style="' . $separator_styles . '"></span>';
        }

        if ($text != "") {
            $html .= '<p ';
            if ($text_color != "") {
                $html .= ' style="color: ' . $text_color . ';"';
            }
            $html .= '>' . $text . '</p>';
        }
        $html .= "</div></div>";
        return $html;
    }

    add_shortcode('no_pie_chart_with_icon', 'no_pie_chart_with_icon');
}


/* Pie Chart Full shortcode */

if (!function_exists('no_pie_chart2')) {

    function no_pie_chart2($atts, $content = null) {
        extract(shortcode_atts(array("width" => "150", "height" => "150", "color" => ""), $atts));

        $width = esc_attr($width);
        $height = esc_attr($height);
        $color = esc_attr($color);

        $pattern = "/\\d+(,?#?\\w*\\s?;?)*/";

        preg_match_all($pattern, $content, $matches);

        if (!empty($matches)) {
            if(!empty($matches[0])) {
                $content = $matches[0][0];
            } else {
                return $html = '<p>' . esc_html__( 'Insert valid Pie Chart data', 'select-core' ) . '</p>';
            }
        }

        $id = mt_rand(1000, 9999);
        $html = "<div class='q_pie_graf_holder'><div class='q_pie_graf'><canvas id='pie" . $id . "' height='" . $height . "' width='" . $width . "'></canvas></div><div class='q_pie_graf_legend'><ul>";
        $pie_chart_array = explode(";", $content);
        for ($i = 0; $i < count($pie_chart_array); $i = $i + 1) {
            $pie_chart_el = explode(",", $pie_chart_array[$i]);
            $html .= "<li><div class='color_holder' style='background-color: " . trim($pie_chart_el[1]) . ";'></div><p style='color: " . $color . ";'>" . trim($pie_chart_el[2]) . "</p></li>";
        }
        $html .= "</ul></div></div><script>var pie" . $id . " = [";
        $pie_chart_array = explode(";", $content);
        for ($i = 0; $i < count($pie_chart_array); $i = $i + 1) {
            $pie_chart_el = explode(",", $pie_chart_array[$i]);
            if ($i > 0)
                $html .= ",";
            $html .= "{value: " . trim($pie_chart_el[0]) . ",color:'" . trim($pie_chart_el[1]) . "'}";
        }
        $html .= "];
		var \$j = jQuery.noConflict();
		\$j(document).ready(function() {
			if(\$j('.touch .no_delay').length){
				new Chart(document.getElementById('pie" . $id . "').getContext('2d')).Pie(pie" . $id . ",{segmentStrokeColor : 'transparent',});
			}else{
				\$j('#pie" . $id . "').appear(function() {
					new Chart(document.getElementById('pie" . $id . "').getContext('2d')).Pie(pie" . $id . ",{segmentStrokeColor : 'transparent',});
				},{accX: 0, accY: -200});
			}
		});
	</script>";
        return $html;
    }

    add_shortcode('no_pie_chart2', 'no_pie_chart2');
}


/* Pie Chart Doughnut shortcode */

if (!function_exists('no_pie_chart3')) {

    function no_pie_chart3($atts, $content = null) {
        extract(shortcode_atts(array("width" => "150", "height" => "150", "color" => ""), $atts));


        $width = esc_attr($width);
        $height = esc_attr($height);
        $color = esc_attr($color);

        $pattern = "/\\d+(,?#?\\w*\\s?;?)*/";

        preg_match_all($pattern, $content, $matches);

        if (!empty($matches)) {
            if(!empty($matches[0])) {
                $content = $matches[0][0];
            } else {
                return $html = '<p>' . esc_html__( 'Insert valid Pie Chart data', 'select-core' ) . '</p>';
            }
        }

        $id = mt_rand(1000, 9999);
        $html = "<div class='q_pie_graf_holder'><div class='q_pie_graf'><canvas id='pie" . $id . "' height='" . $height . "' width='" . $width . "'></canvas></div><div class='q_pie_graf_legend'><ul>";
        $pie_chart_array = explode(";", $content);
        for ($i = 0; $i < count($pie_chart_array); $i = $i + 1) {
            $pie_chart_el = explode(",", $pie_chart_array[$i]);
            $html .= "<li><div class='color_holder' style='background-color: " . trim($pie_chart_el[1]) . ";'></div><p style='color: " . $color . ";'>" . trim($pie_chart_el[2]) . "</p></li>";
        }
        $html .= "</ul></div></div><script>var pie" . $id . " = [";
        $pie_chart_array = explode(";", $content);
        for ($i = 0; $i < count($pie_chart_array); $i = $i + 1) {
            $pie_chart_el = explode(",", $pie_chart_array[$i]);
            if ($i > 0)
                $html .= ",";
            $html .= "{value: " . trim($pie_chart_el[0]) . ",color:'" . trim($pie_chart_el[1]) . "'}";
        }
        $html .= "];
		var \$j = jQuery.noConflict();
		\$j(document).ready(function() {
			if(\$j('.touch .no_delay').length){
				new Chart(document.getElementById('pie" . $id . "').getContext('2d')).Doughnut(pie" . $id . ",{segmentStrokeColor : 'transparent',});
			}else{
				\$j('#pie" . $id . "').appear(function() {
					new Chart(document.getElementById('pie" . $id . "').getContext('2d')).Doughnut(pie" . $id . ",{segmentStrokeColor : 'transparent',});
				},{accX: 0, accY: -200});
			}
		});
	</script>";
        return $html;
    }

    add_shortcode('no_pie_chart3', 'no_pie_chart3');
}


/* Progress bar horizontal shortcode */

if (!function_exists('no_progress_bar')) {

    function no_progress_bar($atts, $content = null) {
        $args = array(
            "title" => "",
            "title_color" => "",
            "title_tag" => "h4",
            "title_custom_size" => "",
            "title_padding_bottom" => "",
            "percent" => "100",
            "show_percent_number" => "",
            "show_percent_mark" => "with_mark",
            "percentage_type" => "floating",
            "percentage_bar_margin_bottom" => "",
            "floating_type" => "floating_outside",
            "percent_color" => "",
            "percent_background_color" => "",            
            "percent_border_radius" => "",
            "percent_font_size" => "",
            "percent_font_weight" => "",
            "active_background_color" => "",
            "active_background_second_color" => "",
            "active_border_color" => "",
            "noactive_background_color" => "",
            "height" => "",
            "border_radius" => "",
			"percentage_bar_height" => ""
        );

        extract(shortcode_atts($args, $atts));

        $title = esc_html($title);
        $title_color = esc_attr($title_color);
        $title_custom_size = esc_attr($title_custom_size);
        $title_padding_bottom = esc_attr($title_padding_bottom);
        $percent = esc_attr($percent);
        $percentage_bar_margin_bottom = esc_attr($percentage_bar_margin_bottom);
        $percent_color = esc_attr($percent_color);
        $percent_background_color = esc_attr($percent_background_color);
        $percent_font_size = esc_attr($percent_font_size);
        $percent_font_weight = esc_attr($percent_font_weight);
        $active_background_color = esc_attr($active_background_color);
        $active_border_color = esc_attr($active_border_color);
        $noactive_background_color = esc_attr($noactive_background_color);
        $height = esc_attr($height);
        $border_radius = esc_attr($border_radius);
		$percentage_bar_height = esc_attr($percentage_bar_height);


        $headings_array = array('h2', 'h3', 'h4', 'h5', 'h6');

        //get correct heading value. If provided heading isn't valid get the default one
        $title_tag = (in_array($title_tag, $headings_array)) ? $title_tag : $args['title_tag'];

        //init variables
        $html = "";
        $progress_title_holder_styles = "";
        $number_styles = "";
        $outer_progress_styles = "";
        $percentage_styles = "";
        $progress_number_padding = "";

        //generate styles
        if ($title_color != "") {
            $progress_title_holder_styles .= "color: " . $title_color . ";";
        }

        if ($title_custom_size != "") {
            $title_custom_size = (strstr($title_custom_size, 'px', true)) ? $title_custom_size : $title_custom_size . "px";
            $progress_title_holder_styles .= "font-size: " . $title_custom_size . ";";
        }

        if ($title_padding_bottom != "") {
            $title_padding_bottom = (strstr($title_padding_bottom, 'px', true)) ? $title_padding_bottom : $title_padding_bottom . "px";
            $progress_title_holder_styles .= "padding-bottom: " . $title_padding_bottom . ";";           
        }
		if($percentage_bar_height != "" && $percentage_type == 'floating'){
			$progress_title_holder_styles .= 'height: '.$percentage_bar_height.'px;';
			$number_styles .= 'height: '.$percentage_bar_height.'px;';
			$number_styles .= 'line-height: '.$percentage_bar_height.'px;';
		}
		
		if($percentage_bar_margin_bottom != "") {
			$number_styles .= "margin-bottom: " . $percentage_bar_margin_bottom . "px;";
		}
		
		if($title_padding_bottom != "" && $percentage_bar_margin_bottom != "" && $percentage_bar_margin_bottom > $title_padding_bottom && $floating_type != 'floating_inside') {
			$progress_title_holder_styles .= "padding-top: " . ($percentage_bar_margin_bottom - $title_padding_bottom) . "px;";			
		}
		
		if($title_padding_bottom == "" && $percentage_bar_margin_bottom != "" && $floating_type != 'floating_inside') {
			$progress_title_holder_styles .= "padding-top: " . $percentage_bar_margin_bottom . "px;";
		}

        if ($percent_color != "") {
            $number_styles .= "color: " . $percent_color . ";";
        }

        if ($percent_background_color != "") {
            $number_styles .= "background-color: " . $percent_background_color . ";";
        }


        if ($percent_border_radius != "") {
            $percent_border_radius = (strstr($percent_border_radius, 'px', true)) ? $percent_border_radius : $percent_border_radius . "px";
            $number_styles .= "border-radius: " . $percent_border_radius . ";";
        }

        if ($percent_font_size != "") {
            $number_styles .= "font-size: " . $percent_font_size . "px;";
        }
        if ($percent_font_weight != "") {
            $number_styles .= "font-weight: " . $percent_font_weight . ";";
        }
        if ($height != "") {
            $valid_height = (strstr($height, 'px', true)) ? $height : $height . "px";
            $outer_progress_styles .= "height: " . $valid_height . ";";
            $percentage_styles .= "height: " . $valid_height . ";";
            if ($percentage_type == 'floating' && $floating_type == 'floating_inside') {
                $number_styles .= "line-height: " . $valid_height . "; height: " . $valid_height . ";";
            }
        }

        if ($border_radius != "") {
            $border_radius = (strstr($height, 'px', true)) ? $border_radius : $border_radius . "px";
            $outer_progress_styles .= "border-radius: " . $border_radius . ";-moz-border-radius: " . $border_radius . ";-webkit-border-radius: " . $border_radius . ";";
        }

        if ($noactive_background_color != "") {
            $outer_progress_styles .= "background-color: " . $noactive_background_color . ";";
        }

        if ($active_background_color != "") {

            $percentage_styles .= "background-color: " . $active_background_color . ";";

            if ($active_background_second_color != "") {
                $percentage_styles .= '
                    background: -webkit-linear-gradient(left, '.$active_background_color.' , '.$active_background_second_color.');
                    background: -o-linear-gradient(right, '.$active_background_color.' , '.$active_background_second_color.');
                    background: -moz-linear-gradient(right, '.$active_background_color.' , '.$active_background_second_color.');
                    background: linear-gradient(to right, '.$active_background_color.' , '.$active_background_second_color.');
                    border:none;
                ';
                /* border has to be none if gradient is on background
                 * background color has also to be set, because ie9 doesn't support gradient
                 */
            }
        }

        if ($active_border_color) {
            $percentage_styles .= "border-color: " . $active_border_color . ";";
        }

        $html .= "<div class='q_progress_bar'>";
        $html .= "<{$title_tag} class='progress_title_holder clearfix' ".pitch_qode_get_inline_style($progress_title_holder_styles).">";
        $html .= "<span class='progress_title'>$title</span>"; //close progress_title

        $html .= "<span class='progress_number_wrapper " . $percentage_type;
        if ($percentage_type == 'floating') {
            $html .= " " . $floating_type;
        }
        $html .= "'>";
        if ($show_percent_number != 'no') {
            $html .= "<span class='progress_number " . $show_percent_mark . "' ".pitch_qode_get_inline_style($number_styles).">";
        }
        $html .= "<span class='percent'>0</span>";

        //Add down_arrow class  if type floating(with background shape)
        if ($floating_type == 'floating_outside') {
            $html .= "<span class='down_arrow'";
            if ($percent_background_color != '') {
                $html .= ' style="border-top-color:' . $percent_background_color . ';"';
            }
            $html .= "></span>";
        }
        if ($show_percent_number != 'no') {
            $html .= "</span>"; //close progress number span if percent number is enabled
        }
        $html .= "</span>"; //close progress_number_wrapper

        $html .= "</{$title_tag}>"; //close progress_title_holder

        $html .= "<div class='progress_content_outer' style='{$outer_progress_styles}'>";
        $html .= "<div data-percentage='" . $percent . "' class='progress_content' ".pitch_qode_get_inline_style($percentage_styles).">";
        $html .="</div>"; //close progress_content
        $html .= "</div>"; //close progress_content_outer

        $html .= "</div>"; //close progress_bar
        return $html;
    }

    add_shortcode('no_progress_bar', 'no_progress_bar');
}

/* Progress bar vertical shortcode */

if (!function_exists('no_progress_bar_vertical')) {

    function no_progress_bar_vertical($atts, $content = null) {
        $args = array(
            "title" => "",
            "title_color" => "",
            "title_tag" => "h4",
            "title_size" => "",
            "percent" => "100",
            "show_percent_number" => "yes",
            "show_percent_mark" => "with_mark",
            "percentage_text_size" => "",
            "percent_color" => "",
            "bar_color" => "",
            "bar_border_color" => "",
            "background_color" => "",
            "border_radius" => "",
            "text" => "",
            "text_color" => "",
            "bar_content_height" => ""
        );

        extract(shortcode_atts($args, $atts));


        $title = esc_html($title);
        $title_color = esc_attr($title_color);
        $title_size = esc_attr($title_size);
        $percent = esc_attr($percent);
        $percentage_text_size = esc_attr($percentage_text_size);
        $percent_color = esc_attr($percent_color);
        $bar_color = esc_attr($bar_color);
        $bar_border_color = esc_attr($bar_border_color);
        $background_color = esc_attr($background_color);
        $border_radius = esc_attr($border_radius);
        $text = esc_html($text);
        $text_color = esc_attr($text_color);
        $bar_content_height = esc_attr($bar_content_height);


        $headings_array = array('h2', 'h3', 'h4', 'h5', 'h6');

        //get correct heading value. If provided heading isn't valid get the default one
        $title_tag = (in_array($title_tag, $headings_array)) ? $title_tag : $args['title_tag'];

        //init variables
        $html = "";
        $title_styles = "";
        $bar_styles = "";
        $percentage_styles = "";
        $bar_holder_styles = "";
        $text_styles = "";

        //generate styles
        if ($title_color != "") {
            $title_styles .= "color:" . $title_color . ";";
        }

        if ($title_size != "") {
            $title_styles .= "font-size:" . $title_size . "px;";
        }

        //generate bar holder gradient styles
        if ($background_color != "") {
            $bar_holder_styles .= "background-color: " . $background_color . ";";
        }

        if ($border_radius != "") {
            $bar_holder_styles .= "border-radius: " . $border_radius . "px " . $border_radius . "px 0 0;border-radius: " . $border_radius . "px " . $border_radius . "px 0 0;border-radius: " . $border_radius . "px " . $border_radius . "px 0 0;";
        }

        if ($bar_content_height != "") {
            $bar_holder_styles .= "height: " . $bar_content_height . "px;";
        }

        //generate bar gradient styles
        if ($bar_color != "") {
            $bar_styles .= "background-color: " . $bar_color . ";";
        }

        if ($bar_border_color != "") {
            $bar_styles .= "border-color: " . $bar_border_color;
        }

        if ($percentage_text_size != "") {
            $percentage_styles .= "font-size: " . $percentage_text_size . "px;";
        }

        if ($percent_color != "") {
            $percentage_styles .= "color: " . $percent_color . ";";
        }

        if ($text_color != "") {
            $text_styles .= "color: " . $text_color . ";";
        }

        $html .= "<div class='q_progress_bars_vertical'>";
        $html .= "<div class='progress_content_outer' style='" . $bar_holder_styles . "'>";
        $html .= "<div data-percentage='$percent' class='progress_content' style='" . $bar_styles . "'></div>";
        $html .= "</div>"; //close progress_content_outer

		if($title !== '') {
			$html .= "<{$title_tag} class='progress_title' style='" . $title_styles . "'>$title</{$title_tag}>";
		}

        if ($show_percent_number == 'yes') {
            $html .= "<span class='progress_number " . $show_percent_mark . "' style='" . $percentage_styles . "'>";
            $html .= "<span>$percent</span>";
            $html .= "</span>"; //close progress_number
        }
        $html .= "<span class='progress_text'style='" . $text_styles . "'>" . $text . "</span>"; //close progress_number
        $html .= "</div>"; //close progress_bars_vertical

        return $html;
    }

    add_shortcode('no_progress_bar_vertical', 'no_progress_bar_vertical');
}


/* Progress bars icon shortcode */

if (!function_exists('no_progress_bar_icon')) {

    function no_progress_bar_icon($atts, $content = null) {
        $args = array(
            "icons_number" => "",
            "active_number" => "",
            "type" => "",
            "size" => "",
            "custom_size" => "",
            "icon_color" => "",
            "icon_active_color" => "",
            "background_color" => "",
            "background_active_color" => "",
            "border_color" => "",
            "border_active_color" => ""
        );

        $args = array_merge($args, pitch_qode_icon_collections()->getShortcodeParams());

        extract(shortcode_atts($args, $atts));


        $icons_number = esc_attr($icons_number);
        $active_number = esc_attr($active_number);
        $icon_color = esc_attr($icon_color);
        $icon_active_color = esc_attr($icon_active_color);
        $background_color = esc_attr($background_color);
        $background_active_color = esc_attr($background_active_color);
        $border_color = esc_attr($border_color);
        $border_active_color = esc_attr($border_active_color);

        $custom = "";
        if($size == "custom" && $custom_size !== "") {
            $custom_size = (strstr($custom_size, 'px', true)) ? $custom_size : $custom_size . 'px';
            $custom .= "height: " .$custom_size . ";";
            $custom .= "width: calc(" .$custom_size ." + 2px);";
            $custom .= "line-height: ".$custom_size .";";
            $custom .= "font-size: ". $custom_size . ";";
        }

        $html = "<div class='q_progress_bars_icons_holder'><div class='q_progress_bars_icons'><div class='q_progress_bars_icons_inner " . $type . " " . $size;

        $html .= " clearfix' data-number='" . $active_number . "'>";

        $i = 0;
        while ($i < $icons_number) {
            $html .= "<div class='bar' ".pitch_qode_get_inline_style($custom)."><span class='bar_noactive qode_icon_stack ";
            if ($size != "") {
                if ($size == "tiny") {
                    $html .= "qode_tiny_icon";
                } else if ($size == "small") {
                    $html .= "qode_small_icon";
                } else if ($size == "medium") {
                    $html .= "qode_medium_icon";
                } else if ($size == "large") {
                    $html .= "qode_large_icon";
                } else if ($size == "very_large") {
                    $html .= "qode_huge_icon";
                }
            }
            $html .= "'";
            if ($type == "circle" || $type == "square") {
                if ($background_active_color != "" || $border_active_color != "") {
                    $html .= " style='";
                    if ($background_active_color != "") {
                        $html .= "background-color: " . $background_active_color . ";";
                    }
                    if ($border_active_color != "") {
                        $html .= " border: 1px solid " . $border_active_color . ";";
                    }
                    $html .= "'";
                }
            }

            $html .= ">";

            $icon_collection_obj = pitch_qode_icon_collections()->getIconCollection($icon_pack);

            if (method_exists($icon_collection_obj, 'render')) {

                $html .= $icon_collection_obj->render(${$icon_collection_obj->param}, array(
                    'icon_attributes' => array(
                        'style' => 'color: ' . $icon_active_color,
                        'class' => 'qode_icon_stack_1x'
                    )
                ));

            }

            $html .= "</span><span class='bar_active qode_icon_stack ";
            if ($size != "") {
                if ($size == "tiny") {
                    $html .= "qode_tiny_icon";
                } else if ($size == "small") {
                    $html .= "qode_small_icon";
                } else if ($size == "medium") {
                    $html .= "qode_medium_icon";
                } else if ($size == "large") {
                    $html .= "qode_large_icon";
                } else if ($size == "very_large") {
                    $html .= "qode_huge_icon";
                }
            }
            $html .= "'";
            if ($type == "circle" || $type == "square") {
                if ($background_color != "" || $border_color != "") {
                    $html .= " style='";
                    if ($background_color != "") {
                        $html .= "background-color: " . $background_color . ";";
                    }
                    if ($border_color != "") {
                        $html .= " border: 1px solid " . $border_color . ";";
                    }
                    $html .= "'";
                }
            }
            $html .= ">";

            if (method_exists($icon_collection_obj, 'render')) {

                $html .= $icon_collection_obj->render(${$icon_collection_obj->param}, array(
                    'icon_attributes' => array(
                        'style' => 'color: ' . $icon_color,
                        'class' => 'qode_icon_stack_1x'
                    )
                ));

            }


            $html .= "</span></div>";


            $i++;
        }


        $html .= "</div></div></div>";

        return $html;
    }

    add_shortcode('no_progress_bar_icon', 'no_progress_bar_icon');
}


/* Social Icon shortcode */

if (!function_exists('no_social_icons')) {

    function no_social_icons($atts, $content = null) {
        $args = array(
            "type" => "",
            "link" => "",
            "target" => "",
            "size" => "",
            "icon_color" => "",
            "background_color" => "",
            "border_color" => "",
            "icon_hover_color" => "",
            "background_hover_color" => "",
            "border_hover_color" => ""
        );

        $args = array_merge($args, pitch_qode_icon_collections()->getShortcodeParams());

        extract(shortcode_atts($args, $atts));

        $link = esc_url($link);
        $icon_color = esc_attr($icon_color);
        $background_color = esc_attr($background_color);
        $border_color = esc_attr($border_color);
        $icon_hover_color = esc_attr($icon_hover_color);
        $background_hover_color = esc_attr($background_hover_color);
        $border_hover_color = esc_attr($border_hover_color);


        $html = "";
        $fa_stack_styles = "";
        $icon_styles = "";
        $icon_holder_classes = array();
        $data_attr = "";

        if ($link != "") {
            $icon_holder_classes[] = "with_link";
        }

        if ($type != "") {
            $icon_holder_classes[] = $type;
        }

        if ($icon_color != "") {
            $icon_styles .= "color: " . $icon_color . ";";
        }

        if ($background_color != "") {
            $fa_stack_styles .= "background-color: {$background_color};";
        }

        if ($border_color != "") {
            $fa_stack_styles .= "border: 1px solid {$border_color};";
        }

        if ($background_hover_color != "") {
            $data_attr .= "data-hover-background-color=" . $background_hover_color . " ";
        }

        if ($border_hover_color != "") {
            $data_attr .= "data-hover-border-color=" . $border_hover_color . " ";
        }

        if ($icon_hover_color != "") {
            $data_attr .= "data-hover-color=" . $icon_hover_color;
        }

        $html .= "<span class='q_social_icon_holder " . implode(' ', $icon_holder_classes) . "' $data_attr>";

        if ($link != "") {
            $html .= "<a href='" . $link . "' target='" . $target . "'>";
        }

        $icon_collection_obj = pitch_qode_icon_collections()->getIconCollection($icon_pack);

        if ($type == "normal_social") {

            if (method_exists($icon_collection_obj, 'render')) {

                $html .= $icon_collection_obj->render(${$icon_collection_obj->param}, array(
                    'icon_attributes' => array(
                        'style' => $icon_styles,
                        'class' => 'social_icon ' . $size . ' simple_social'
                    )
                ));

            }

        } else {

            if (method_exists($icon_collection_obj, 'render')) {

                $html .= "<span class='qode_icon_stack " . $size . " " . $type . "' style='" . $icon_styles . $fa_stack_styles . "'>";

                $html .= $icon_collection_obj->render(${$icon_collection_obj->param}, array(
                    'icon_attributes' => array(
                        'class' => 'social_icon'
                    )
                ));

            }

            $html .= "</span>"; //close fa-stack
        }

        if ($link != "") {
            $html .= "</a>";
        }

        $html .= "</span>"; //close q_social_icon_holder
        return $html;
    }

    add_shortcode('no_social_icons', 'no_social_icons');
}


/* Social Share shortcode */
if (!function_exists('no_social_share')) {
    function no_social_share($atts, $content = null) {
        if (pitch_qode_options()->getOptionValue( 'twitter_via' )) {
            $twitter_via = " via " . esc_attr(pitch_qode_options()->getOptionValue( 'twitter_via' )) . " ";
        } else {
            $twitter_via = "";
        }
        if (isset($_SERVER["https"])) {
            $count_char = 23;
        } else {
            $count_char = 22;
        }
        $image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
        $html = "";
        if (pitch_qode_options()->getOptionValue( 'enable_social_share' ) == "yes") {
            $post_type = get_post_type();
            if (pitch_qode_options()->getOptionValue( "post_types_names_$post_type" )) {
                if (pitch_qode_options()->getOptionValue( "post_types_names_$post_type" ) == $post_type) {
                    if ($post_type == "portfolio_page") {
                        $html .= '<div class="portfolio_share">';
                    } elseif ($post_type == "post") {
                        $html .= '<div class="blog_share">';
                    } elseif ($post_type == "page") {
                        $html .= '<div class="page_share">';
                    }
                    $html .= '<div class="social_share_holder">';
                    $html .= '<a href="javascript:void(0)" target="_self"><i class="social_share social_share_icon"></i>';
                    $html .= '<span class="social_share_title">' . esc_html__( 'Share', 'select-core') . '</span>';
                    $html .= '</a>';
                    $html .= '<div class="social_share_dropdown"><ul>';
                    if (pitch_qode_options()->getOptionValue( 'enable_facebook_share' ) == "yes") {
                        $html .= '<li class="facebook_share">';
                        if(wp_is_mobile()) {
                            $html .= '<a href="javascript:void(0)" onclick="window.open(\'https://m.facebook.com/sharer.php?u=' . urlencode(get_permalink());
                        }
                        else {
                            $html .= '<a href="#" onclick="window.open(\'https://www.facebook.com/sharer.php?s=100&amp;p[title]=' . urlencode(esc_attr(get_the_title())) . '&amp;p[url]=' . urlencode(get_permalink()) . '&amp;p[images][0]=';
                            if (function_exists('the_post_thumbnail')) {
                                $html .= wp_get_attachment_url(get_post_thumbnail_id());
                            }
                        }
                        $html .= '&amp;p[summary]=' . urlencode(esc_attr(get_the_excerpt()));
                        $html .='\', \'sharer\', \'toolbar=0,status=0,width=620,height=280\');">';
                        if (pitch_qode_options()->getOptionValue( 'facebook_icon' )) {
	                        $html .= '<img src="' . esc_url( pitch_qode_options()->getOptionValue( "facebook_icon" ) ) . '" alt="' . esc_attr__( 'Social Share Icon', 'select-core' ) . '" />';
                        } else {
                            $html .= '<span class="social_network_icon social_facebook"></span>';
                        }
                        $html .= "</a>";
                        $html .= "</li>";
                    }

                    if (pitch_qode_options()->getOptionValue( 'enable_twitter_share' ) == "yes") {
                        $html .= '<li class="twitter_share">';
                        if(wp_is_mobile()) {
                            $html .= '<a href="#" onclick="popUp=window.open(\'https://twitter.com/intent/tweet?text=' . urlencode(pitch_qode_the_excerpt_max_charlength($count_char) . $twitter_via) . get_permalink() . '\', \'popupwindow\', \'scrollbars=yes,width=800,height=400\');popUp.focus();return false;">';
                        }
                        else {
                            $html .= '<a href="#" onclick="popUp=window.open(\'https://twitter.com/home?status=' . urlencode(pitch_qode_the_excerpt_max_charlength($count_char) . $twitter_via) . get_permalink() . '\', \'popupwindow\', \'scrollbars=yes,width=800,height=400\');popUp.focus();return false;">';
                        }
                        if (pitch_qode_options()->getOptionValue( 'twitter_icon' )) {
                            $html .= '<img src="' . esc_url(pitch_qode_options()->getOptionValue( "twitter_icon" )) . '" alt="' . esc_attr__( 'Social Share Icon', 'select-core' ) . '" />';
                        } else {
                            $html .= '<span class="social_network_icon social_twitter"></span>';
                        }
                        $html .= "</a>";
                        $html .= "</li>";
                    }
                    if (pitch_qode_options()->getOptionValue( 'enable_google_plus' ) == "yes") {
                        $html .= '<li  class="google_share">';
                        $html .= '<a class="share_link" href="#" onclick="popUp=window.open(\'https://plus.google.com/share?url=' . urlencode(get_permalink()) . '\', \'popupwindow\', \'scrollbars=yes,width=800,height=400\');popUp.focus();return false">';
                        if (pitch_qode_options()->getOptionValue( 'google_plus_icon' )) {
                            $html .= '<img src="' . esc_url(pitch_qode_options()->getOptionValue( 'google_plus_icon' )) . '" alt="' . esc_attr__( 'Social Share Icon', 'select-core' ) . '" />';
                        } else {
                            $html .= '<span class="social_network_icon social_googleplus"></span>';
                        }
                        $html .= "</a>";
                        $html .= "</li>";
                    }
                    if (pitch_qode_options()->getOptionValue( 'enable_linkedin' ) == "yes") {
                        $html .= '<li  class="linkedin_share">';
                        $html .= '<a class="share_link" href="#" onclick="popUp=window.open(\'https://linkedin.com/shareArticle?mini=true&amp;url=' . urlencode(get_permalink()) . '&amp;title=' . urlencode(get_the_title()) . '\', \'popupwindow\', \'scrollbars=yes,width=800,height=400\');popUp.focus();return false">';
                        if (pitch_qode_options()->getOptionValue( 'linkedin_icon' )) {
                            $html .= '<img src="' . esc_url(pitch_qode_options()->getOptionValue( 'linkedin_icon' )) . '" alt="' . esc_attr__( 'Social Share Icon', 'select-core' ) . '" />';
                        } else {
                            $html .= '<span class="social_network_icon social_linkedin"></span>';
                        }
                        $html .= "</a>";
                        $html .= "</li>";
                    }
                    if (pitch_qode_options()->getOptionValue( 'enable_tumblr' ) == "yes") {
                        $html .= '<li  class="tumblr_share">';
                        $html .= '<a class="share_link" href="#" onclick="popUp=window.open(\'https://www.tumblr.com/share/link?url=' . urlencode(get_permalink()) . '&amp;name=' . urlencode(get_the_title()) . '&amp;description=' . urlencode(get_the_excerpt()) . '\', \'popupwindow\', \'scrollbars=yes,width=800,height=400\');popUp.focus();return false">';
                        if (pitch_qode_options()->getOptionValue( 'tumblr_icon' )) {
                            $html .= '<img src="' . esc_url(pitch_qode_options()->getOptionValue( 'tumblr_icon' )) . '" alt="' . esc_attr__( 'Social Share Icon', 'select-core' ) . '" />';
                        } else {
                            $html .= '<span class="social_network_icon social_tumblr"></span>';
                        }
                        $html .= "</a>";
                        $html .= "</li>";
                    }
                    if (pitch_qode_options()->getOptionValue( 'enable_pinterest' ) == "yes") {
                        $html .= '<li  class="pinterest_share">';
                        $image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
                        $html .= '<a class="share_link" href="#" onclick="popUp=window.open(\'https://pinterest.com/pin/create/button/?url=' . urlencode(get_permalink()) . '&amp;description=' . esc_attr(get_the_title()) . '&amp;media=' . urlencode($image[0]) . '\', \'popupwindow\', \'scrollbars=yes,width=800,height=400\');popUp.focus();return false">';
                        if (pitch_qode_options()->getOptionValue( 'pinterest_icon' )) {
                            $html .= '<img src="' . esc_url(pitch_qode_options()->getOptionValue( 'pinterest_icon' )) . '" alt="' . esc_attr__( 'Social Share Icon', 'select-core' ) . '" />';
                        } else {
                            $html .= '<span class="social_network_icon social_pinterest"></span>';
                        }
                        $html .= "</a>";
                        $html .= "</li>";
                    }
                    if (pitch_qode_options()->getOptionValue( 'enable_vk' ) == "yes") {
                        $html .= '<li  class="vk_share">';
                        $image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
                        $html .= '<a class="share_link" href="#" onclick="popUp=window.open(\'https://vkontakte.ru/share.php?url=' . urlencode(get_permalink()) . '&amp;title=' . urlencode(get_the_title()) . '&amp;description=' . urlencode(get_the_excerpt()) . '&amp;image=' . urlencode($image[0]) . '\', \'popupwindow\', \'scrollbars=yes,width=800,height=400\');popUp.focus();return false">';
                        if (pitch_qode_options()->getOptionValue( 'vk_icon' )) {
                            $html .= '<img src="' . esc_url(pitch_qode_options()->getOptionValue( 'vk_icon' )) . '" alt="' . esc_attr__( 'Social Share Icon', 'select-core' ) . '" />';
                        } else {
                            $html .= '<span class="social_network_icon"><i class="fa fa-vk"></i></span>';
                        }
                        $html .= "</a>";
                        $html .= "</li>";
                    }
                    $html .= "</ul></div>";
                    $html .= "</div>";

                    if ($post_type == "portfolio_page" || $post_type == "post" || $post_type == "page") {
                        $html .= '</div>';
                    }
                }
            }
        }
        return $html;
    }

    add_shortcode('no_social_share', 'no_social_share');
}

/* Social Share List shortcode */

if (!function_exists('no_social_share_list')) {

    function no_social_share_list($atts, $content = null) {
        if (pitch_qode_options()->getOptionValue( 'twitter_via' )) {
            $twitter_via = " via " . esc_attr(pitch_qode_options()->getOptionValue( 'twitter_via' )) . " ";
        } else {
            $twitter_via = "";
        }
        $image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
        $html = "";
        if (pitch_qode_options()->getOptionValue( 'enable_social_share' ) == "yes") {
            $post_type = get_post_type();

            $share_icons_type = '';
            if(pitch_qode_options()->getOptionValue( 'social_share_list_icons_type' ) !== '') {
                $share_icons_type = pitch_qode_options()->getOptionValue( 'social_share_list_icons_type' );
            }

            if ($share_icons_type == 'circle') {
                $share_icons_type_array = array(
                    'facebook' => 'social_facebook_circle',
                    'twitter' => 'social_twitter_circle',
                    'google_plus' => 'social_googleplus_circle',
                    'linkedin' => 'social_linkedin_circle',
                    'tumblr' => 'social_tumblr_circle',
                    'pinterest' => 'social_pinterest_circle',
                    'vk' => 'fa fa-vk'
                );
            } else {
                $share_icons_type_array = array(
                    'facebook' => 'social_facebook',
                    'twitter' => 'social_twitter',
                    'google_plus' => 'social_googleplus',
                    'linkedin' => 'social_linkedin',
                    'tumblr' => 'social_tumblr',
                    'pinterest' => 'social_pinterest',
                    'vk' => 'fa fa-vk'
                );
            }

            if (pitch_qode_options()->getOptionValue( "post_types_names_$post_type" )) {
                if (pitch_qode_options()->getOptionValue( "post_types_names_$post_type" ) == $post_type) {
                    $html .= '<div class="social_share_list_holder">';
                    $html .= '<ul>';

                    if (pitch_qode_options()->getOptionValue( 'enable_facebook_share' ) == "yes") {
                        $html .= '<li class="facebook_share">';
                        if(wp_is_mobile()) {
                            $html .= '<a href="javascript:void(0)" onclick="window.open(\'https://m.facebook.com/sharer.php?u=' . urlencode(get_permalink());
                        }
                        else {
                            $html .= '<a href="#" onclick="window.open(\'https://www.facebook.com/sharer.php?s=100&amp;p[title]=' . urlencode(esc_attr(get_the_title())) . '&amp;p[url]=' . urlencode(get_permalink()) . '&amp;p[images][0]=';
                            if (function_exists('the_post_thumbnail')) {
                                $html .= wp_get_attachment_url(get_post_thumbnail_id());
                            }
                        }
                        $html .= '&amp;p[summary]=' . urlencode(esc_attr(get_the_excerpt()));
                        $html .='\', \'sharer\', \'toolbar=0,status=0,width=620,height=280\');">';
                        if (pitch_qode_options()->getOptionValue( 'facebook_icon' )) {
                            $html .= '<img src="' . esc_url(pitch_qode_options()->getOptionValue( "facebook_icon" )) . '" alt="' . esc_attr__( 'Social Share Icon', 'select-core' ) . '" />';
                        } else {
                            $html .= '<i class="'.esc_attr($share_icons_type_array['facebook']).'"></i>';
                        }
                        $html .= "</a>";
                        $html .= "</li>";
                    }

                    if (pitch_qode_options()->getOptionValue( 'enable_twitter_share' ) == "yes") {
                        $html .= '<li class="twitter_share">';
                        if(wp_is_mobile()) {
                            $html .= '<a href="#" title="'.esc_attr__("Share on Twitter", 'select-core').'" onclick="popUp=window.open(\'https://twitter.com/intent/tweet?text=' . urlencode(pitch_qode_the_excerpt_max_charlength(mb_strlen(get_permalink())) . $twitter_via) . get_permalink() . '\', \'popupwindow\', \'scrollbars=yes,width=800,height=400\');popUp.focus();return false;">';
                        }
                        else {
                            $html .= '<a href="#" title="'.esc_attr__("Share on Twitter", 'select-core').'" onclick="popUp=window.open(\'https://twitter.com/home?status=' . urlencode(pitch_qode_the_excerpt_max_charlength(mb_strlen(get_permalink())) . $twitter_via) . get_permalink() . '\', \'popupwindow\', \'scrollbars=yes,width=800,height=400\');popUp.focus();return false;">';
                        }
                        if (pitch_qode_options()->getOptionValue( 'twitter_icon' )) {
                            $html .= '<img src="' . esc_url(pitch_qode_options()->getOptionValue( "twitter_icon" )) . '" alt="' . esc_attr__( 'Social Share Icon', 'select-core' ) . '" />';
                        } else {
                            $html .= '<i class="'.esc_attr($share_icons_type_array['twitter']).'"></i>';
                        }

                        $html .= "</a>";
                        $html .= "</li>";
                    }
                    if (pitch_qode_options()->getOptionValue( 'enable_google_plus' ) == "yes") {
                        $html .= '<li  class="google_share">';
                        $html .= '<a href="#" title="' . esc_attr__( "Share on Google+", "select-core") . '" onclick="popUp=window.open(\'https://plus.google.com/share?url=' . urlencode(get_permalink()) . '\', \'popupwindow\', \'scrollbars=yes,width=800,height=400\');popUp.focus();return false">';
                        if (pitch_qode_options()->getOptionValue( 'google_plus_icon' )) {
                            $html .= '<img src="' . esc_url(pitch_qode_options()->getOptionValue( 'google_plus_icon' )) . '" alt="' . esc_attr__( 'Social Share Icon', 'select-core' ) . '" />';
                        } else {
                            $html .= '<i class="'.esc_attr($share_icons_type_array['google_plus']).'"></i>';
                        }

                        $html .= "</a>";
                        $html .= "</li>";
                    }
                    if (pitch_qode_options()->getOptionValue( 'enable_linkedin' ) == "yes") {
                        $html .= '<li  class="linkedin_share">';
                        $html .= '<a href="#" class="' . esc_html__( "Share on LinkedIn", "select-core") . '" onclick="popUp=window.open(\'https://linkedin.com/shareArticle?mini=true&amp;url=' . urlencode(get_permalink()) . '&amp;title=' . urlencode(get_the_title()) . '\', \'popupwindow\', \'scrollbars=yes,width=800,height=400\');popUp.focus();return false">';
                        if (pitch_qode_options()->getOptionValue( 'linkedin_icon' )) {
                            $html .= '<img src="' . esc_url(pitch_qode_options()->getOptionValue( 'linkedin_icon' )) . '" alt="' . esc_attr__( 'Social Share Icon', 'select-core' ) . '" />';
                        } else {
                            $html .= '<i class="'.esc_attr($share_icons_type_array['linkedin']).'"></i>';
                        }

                        $html .= "</a>";
                        $html .= "</li>";
                    }
                    if (pitch_qode_options()->getOptionValue( 'enable_tumblr' ) == "yes") {
                        $html .= '<li  class="tumblr_share">';
                        $html .= '<a href="#" title="' . esc_attr__( "Share on Tumblr", "select-core") . '" onclick="popUp=window.open(\'https://www.tumblr.com/share/link?url=' . urlencode(get_permalink()) . '&amp;name=' . urlencode(get_the_title()) . '&amp;description=' . urlencode(get_the_excerpt()) . '\', \'popupwindow\', \'scrollbars=yes,width=800,height=400\');popUp.focus();return false">';
                        if (pitch_qode_options()->getOptionValue( 'tumblr_icon' )) {
                            $html .= '<img src="' . esc_url(pitch_qode_options()->getOptionValue( 'tumblr_icon' )) . '" alt="' . esc_attr__( 'Social Share Icon', 'select-core' ) . '" />';
                        } else {
                            $html .= '<i class="'.esc_attr($share_icons_type_array['tumblr']).'"></i>';
                        }

                        $html .= "</a>";
                        $html .= "</li>";
                    }
                    if (pitch_qode_options()->getOptionValue( 'enable_pinterest' ) == "yes") {
                        $html .= '<li  class="pinterest_share">';
                        $image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
                        $html .= '<a href="#" title="' . esc_attr__( "Share on Pinterest", "select-core") . '" onclick="popUp=window.open(\'https://pinterest.com/pin/create/button/?url=' . urlencode(get_permalink()) . '&amp;description=' . esc_attr(get_the_title()) . '&amp;media=' . urlencode($image[0]) . '\', \'popupwindow\', \'scrollbars=yes,width=800,height=400\');popUp.focus();return false">';
                        if (pitch_qode_options()->getOptionValue( 'pinterest_icon' )) {
                            $html .= '<img src="' . esc_url(pitch_qode_options()->getOptionValue( 'pinterest_icon' )) . '" alt="' . esc_attr__( 'Social Share Icon', 'select-core' ) . '" />';
                        } else {
                            $html .= '<i class="'.esc_attr($share_icons_type_array['pinterest']).'"></i>';
                        }

                        $html .= "</a>";
                        $html .= "</li>";
                    }
                    if (pitch_qode_options()->getOptionValue( 'enable_vk' ) == "yes") {
                        $html .= '<li  class="vk_share">';
                        $image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
                        $html .= '<a href="#" title="' . esc_attr__( "Share on VK", "select-core") . '" onclick="popUp=window.open(\'https://vkontakte.ru/share.php?url=' . urlencode(get_permalink()) . '&amp;title=' . urlencode(get_the_title()) . '&amp;description=' . urlencode(get_the_excerpt()) . '&amp;image=' . urlencode($image[0]) . '\', \'popupwindow\', \'scrollbars=yes,width=800,height=400\');popUp.focus();return false">';
                        if (pitch_qode_options()->getOptionValue( 'vk_icon' )) {
                            $html .= '<img src="' . esc_url(pitch_qode_options()->getOptionValue( 'vk_icon' )) . '" alt="' . esc_attr__( 'Social Share Icon', 'select-core' ) . '" />';
                        } else {
                            $html .= '<i class="'.esc_attr($share_icons_type_array['vk']).'"></i>';
                        }

                        $html .= "</a>";
                        $html .= "</li>";
                    }

                    $html .= '</ul>'; //close ul
                    $html .= '</div>'; //close div.social_share_list_holder
                }
            }
        }
        return $html;
    }

    add_shortcode('no_social_share_list', 'no_social_share_list');
}

/* Team shortcode */

if (!function_exists('no_team')) {

    function no_team($atts, $content = null) {
        $args = array(
            "team_image" => "",
            "team_image_hover_color" => "",
            "team_image_hover_opacity" => "",
            "team_image_type" => "",
			"team_type" => "on_hover",
			"team_hover_type" => "",
            "team_name" => "",
            "team_name_tag" => "h4",
            "team_name_bottom_margin" => "",
            "team_name_color" => "",
            "team_name_font_size" => "",
            "team_name_font_weight" => "",
            "team_name_text_transform" => "",
            "team_show_separator" => "yes",
            "team_separator_color" => "",
			"team_separator_width" => "",
			"team_separator_thickness" => "",
            "team_position" => "",
            "team_position_color" => "",
            "team_position_font_size" => "",
            "team_position_font_weight" => "",
            "team_position_text_transform" => "",
            "team_info_margin_top" => "",
            "team_description" => "",
            "team_description_color" => "",
            "text_align" => "",
            "background_color" => "",
            "box_border" => "",
            "box_border_width" => "",
            "box_border_color" => "",
            "link" => "",
            "link_target" => "_self",
            "team_social_icon_pack" => "",
            "team_social_icon_type" => "circle_social",
            "team_social_icon_color" => "",
			"team_social_icon_size" => "",
            "team_social_icon_background_color" => "",
            "team_social_icon_border_color" => "",
            "show_skills" => "no",
            "skills_title_size" => "",
            "skill_title_1" => "",
            "skill_percentage_1" => "",
            "skill_title_2" => "",
            "skill_percentage_2" => "",
            "skill_title_3" => "",
            "skill_percentage_3" => "",
			"team_social_style" => '',
			"social_icons_position" => '',
			"team_social_icon_holder_border_color" => "",
			"team_social_icon_holder_back_color" => ""
        );

        $team_social_icons_form_fields = array();
        $number_of_social_icons = 5;
        for ($x = 1; $x <= $number_of_social_icons; $x++) {

            foreach (pitch_qode_icon_collections()->iconCollections as $collection_key => $collection) {

                $team_social_icons_form_fields['team_social_' . $collection->param . '_' . $x] = '';

            }

            $team_social_icons_form_fields['team_social_icon_'.$x.'_link'] = '';
            $team_social_icons_form_fields['team_social_icon_'.$x.'_target'] = '';

        }	
		

        $args = array_merge($args, $team_social_icons_form_fields);

        extract(shortcode_atts($args, $atts));

        $team_image = esc_attr($team_image);
        $team_image_type = esc_attr($team_image_type);
        $team_image_hover_color = esc_attr($team_image_hover_color);
        $team_image_hover_opacity = esc_attr($team_image_hover_opacity);
        $team_name = esc_attr($team_name);
        $team_name_bottom_margin = esc_attr($team_name_bottom_margin);
        $team_name_color = esc_attr($team_name_color);
        $team_name_font_size = esc_attr($team_name_font_size);
        $team_name_font_weight = esc_attr($team_name_font_weight);
        $team_separator_color = esc_attr($team_separator_color);
        $team_position = esc_html($team_position);
        $team_position_color = esc_attr($team_position_color);
        $team_position_font_size = esc_attr($team_position_font_size);
        $team_position_font_weight = esc_attr($team_position_font_weight);
        $team_description = esc_html($team_description);
        $team_info_margin_top = esc_attr($team_info_margin_top);
        $team_description_color = esc_attr($team_description_color);
        $background_color = esc_attr($background_color);
        $box_border_width = esc_attr($box_border_width);
        $box_border_color = esc_attr($box_border_color);
        $link = esc_url($link);

        $team_social_icon_color = esc_attr($team_social_icon_color);
        $team_social_icon_background_color = esc_attr($team_social_icon_background_color);
        $team_social_icon_border_color = esc_attr($team_social_icon_border_color);
		$team_social_icon_holder_back_color = esc_attr($team_social_icon_holder_back_color);
        $team_social_icon_holder_border_color = esc_attr($team_social_icon_holder_border_color);
        $team_social_icon_1_link = esc_url($team_social_icon_1_link);
        $team_social_icon_2_link = esc_url($team_social_icon_2_link);
        $team_social_icon_3_link = esc_url($team_social_icon_3_link);
        $team_social_icon_4_link = esc_url($team_social_icon_4_link);
        $team_social_icon_5_link = esc_url($team_social_icon_5_link);
        $skills_title_size = esc_attr($skills_title_size);
        $skill_title_1 = esc_attr($skill_title_1);
        $skill_percentage_1 = esc_attr($skill_percentage_1);
        $skill_title_2 = esc_attr($skill_title_2);
        $skill_percentage_2 = esc_attr($skill_percentage_2);
        $skill_title_3 = esc_attr($skill_title_3);
        $skill_percentage_3 = esc_attr($skill_percentage_3);



        $headings_array = array('h2', 'h3', 'h4', 'h5', 'h6');

        //get correct heading value. If provided heading isn't valid get the default one
        $team_name_tag = (in_array($team_name_tag, $headings_array)) ? $team_name_tag : $args['team_name_tag'];

        if (is_numeric($team_image)) {
            $team_image_src = wp_get_attachment_url($team_image);
        } else {
            $team_image_src = $team_image;
        }

        $q_team_holder_classes = array();

		if ($team_type != "") {
			$q_team_holder_classes[] = $team_type;
		}
        if ($background_color != "" || $box_border == "yes") {
            $q_team_holder_classes[] = "with_padding";
        }

		if ($team_social_style != "") {
			$q_team_holder_classes[] = $team_social_style;
		}
        
        if($team_image_type != "" && $team_image_type == 'circle'){
            $q_team_holder_classes[] = $team_image_type;
        }

        $q_team_style = "";
        if ($background_color != "") {
            $q_team_style .= " style='";
            $q_team_style .= 'background-color:' . $background_color . ';';
            $q_team_style .= "'";
        }

        $q_team_image_hover_style="";
        if ($team_image_hover_color != "") {
            $q_team_image_hover_style = "style='";
            $opacity = $team_image_hover_opacity != "" ? $team_image_hover_opacity : 1;
            $final_color = pitch_qode_rgba_color($team_image_hover_color, $opacity);
            $q_team_image_hover_style .= 'background-color:' . $final_color . ';';
            $q_team_image_hover_style .= "'";
        }

        $qteam_box_style = "";
        if ($box_border == "yes") {

            $qteam_box_style .= "style=";

            $qteam_box_style .= "border-style:solid;";
            if ($box_border_color != "") {
                $qteam_box_style .= "border-color:" . $box_border_color . ";";
            }
            if ($box_border_width != "") {
                $qteam_box_style .= "border-width:" . $box_border_width . "px;";
            }
			if ( $team_type == "below_image") {
				$qteam_box_style .= 'border-top:none;';
			}
        }

        $q_team_separator_style = '';
        if ($team_separator_color != '') {
            $q_team_separator_style = 'border-color: ' . $team_separator_color.';';
        }
		if ($team_separator_thickness != '') {
            $q_team_separator_style .= ' border-width: ' . $team_separator_thickness.'px;';
        }
		if ($team_separator_width != '') {
            $q_team_separator_style .= 'width: ' . $team_separator_width.'px;';
        }

        $q_team_name_style_array = array();
        $q_team_name_style = '';

        if ($team_name_color != '') {
            $q_team_name_style_array[] = 'color: ' . $team_name_color;
        }

        if ($team_name_bottom_margin != '') {
            $q_team_name_style_array[] = 'margin-bottom: ' . $team_name_bottom_margin. 'px';
        }

        if ($team_name_font_size != '') {
            $q_team_name_style_array[] = 'font-size: ' . $team_name_font_size . 'px!important';
        }

        if ($team_name_font_weight != '') {
            $q_team_name_style_array[] = 'font-weight: ' . $team_name_font_weight;
        }

        if ($team_name_text_transform != '') {
            $q_team_name_style_array[] = 'text-transform: ' . $team_name_text_transform;
        }

        if (is_array($q_team_name_style_array) && count($q_team_name_style_array)) {
            $q_team_name_style = 'style ="' . implode(';', $q_team_name_style_array) . '"';
        }

        $q_team_position_style_array = array();
        $q_team_position_style = '';

        if ($team_position_color != '') {
            $q_team_position_style_array[] = 'color: ' . $team_position_color;
        }

        if ($team_position_font_size != '') {
            $q_team_position_style_array[] = 'font-size: ' . $team_position_font_size . 'px';
        }

        if ($team_position_font_weight != '') {
            $q_team_position_style_array[] = 'font-weight: ' . $team_position_font_weight;
        }

        if ($team_position_text_transform != '') {
            $q_team_position_style_array[] = 'text-transform: ' . $team_position_text_transform;
        }

        if (is_array($q_team_position_style_array) && count($q_team_position_style_array)) {
            $q_team_position_style = 'style ="' . implode(';', $q_team_position_style_array) . '"';
        }

        $q_team_description_style_array = array();
        $q_team_description_style = '';

        if ($team_description_color != '') {
            $q_team_description_style_array[] = 'color: ' . $team_description_color;
        }

        if (is_array($q_team_description_style_array) && count($q_team_description_style_array)) {
            $q_team_description_style = 'style ="' . implode(';', $q_team_description_style_array) . '"';
        }
		
		$social_image_bottom_style = '';
		if($team_type == "below_image" && $team_social_style == "social_style_bottom" ){
			if($team_social_icon_holder_back_color != ""){
				$social_image_bottom_style .= 'background-color: '.$team_social_icon_holder_back_color.';';
			}
			if($team_social_icon_holder_border_color != ""){
				$social_image_bottom_style .= 'border-color: '.$team_social_icon_holder_border_color.';';
			}
		}

		switch ($team_type) {
			case "on_hover":
				$html = "<div class='q_team " . implode(' ', $q_team_holder_classes) . "'" . $q_team_style . ">";
				$html .= "<div class='q_team_inner'>";
				if ($team_image != "") {
					$html .= "<div class='q_team_image'>";
					$html .= "<img src='$team_image_src' alt='" . esc_attr__( 'team_image', 'select-core' ) . "'  />";
					$html .= "<div class='q_team_social_holder " .$team_hover_type. "' " . $q_team_image_hover_style . ">";
					$html .= "<div class='q_team_social'>";
					$html .= "<div class='q_team_social_inner'>";


					if ($team_name !== '' || $team_position !== '' || $team_show_separator == 'yes') {
						$html .= "<div class='q_team_title_holder'>";

                        if ($team_position != "") {
                            $html .= "<h6 class='q_team_position' " . $q_team_position_style . ">" . $team_position . "</h6>";
                        }

						if ($team_name !== '') {
							$html .= "<$team_name_tag class='q_team_name' " . $q_team_name_style . ">";
							$html .= $team_name;
							$html .= "</$team_name_tag>";
						}

						if ($team_show_separator == "yes") {
							$html .= "<span class='separator small' style='" . $q_team_separator_style . "'></span>";
						}

						$html .= "</div>"; //close div.q_team_title_holder

					}

					//generate social icons html
					$team_social_icon_type_label = ''; //used in generating shortcode parameters based on icon pack
					$team_social_icon_param_label = ''; //used in generating shortcode parameters based on icon pack

					if ($team_social_icon_pack !== '') {
						$icon_collection_obj = pitch_qode_icon_collections()->getIconCollection($team_social_icon_pack);

						if (method_exists($icon_collection_obj, 'render')) {
							$team_social_icon_type_label = 'team_social_' . $icon_collection_obj->param;
							$team_social_icon_param_label = $icon_collection_obj->param;
						}

					}

					if ($team_social_icon_pack !== '') {

						$html .= "<div class='q_team_social_wrapp'>";

						$icon_collection_obj = pitch_qode_icon_collections()->getIconCollection($team_social_icon_pack);

						if (method_exists($icon_collection_obj, 'render')) {

							//for each of available icons
							for ($i = 1; $i <= $number_of_social_icons; $i++) {
								$team_social_icon = ${$team_social_icon_type_label . '_' . $i};
								$team_social_link = ${'team_social_icon_' . $i . '_link'};
								$team_social_target = ${'team_social_icon_' . $i . '_target'};

								if ($team_social_icon != "") {


									$social_icons_param_array = array();

									$social_icons_param_array[] = $team_social_icon_param_label . "='" . $team_social_icon . "'";

									if ($team_social_link !== '') {
										$social_icons_param_array[] = "link='" . $team_social_link . "'";
									}

									if ($team_social_target !== '') {
										$social_icons_param_array[] = "target='" . $team_social_target . "'";
									}

									if ($team_social_icon_type !== '') {
										$social_icons_param_array[] = "type='" . $team_social_icon_type . "'";
									}

									if ($team_social_icon_color !== '') {
										$social_icons_param_array[] = "icon_color='" . $team_social_icon_color . "'";
									}

									if ($team_social_icon_background_color !== '') {
										$social_icons_param_array[] = "background_color='" . $team_social_icon_background_color . "'";
									}

									if ($team_social_icon_border_color !== '') {
										$social_icons_param_array[] = "border_color='" . $team_social_icon_border_color . "'";
									}	
									if ($team_social_icon_size !== '') {										
										$social_icons_param_array[] = "fa_size='" . $team_social_icon_size . "'";
										$social_icons_param_array[] = "custom_size='" . $team_social_icon_size . "'";
									}

									$html .= do_shortcode('[no_icons icon_pack="' . $team_social_icon_pack . '" ' . implode(' ', $social_icons_param_array) . ']');
								}
							}

						}

						$html .= '</div>';    //close q_team_social_wrapp
					}

                    if($link != '') {
                        $button_param_array = '';
                        $html .= do_shortcode('[no_button  link="' . $link . '" target="' . $link_target .  '" icon_pack="font_elegant" fe_icon="arrow_right" icon_position="right" text="'.esc_html__( "Read More", "select-core").'"]');
                    }

					$html .= "</div></div></div>"; //close div.q_team_social_holder


					$html .= "</div>"; //close div.q_team_image
				}

				if ($team_description != "" || $show_skills == 'yes') {

					$html .= "<div class='q_team_text " . $text_align . "' " . $qteam_box_style . ">";
					$html .= "<div class='q_team_text_inner'>";


					if ($team_description != "") {

						$html .= "<div class='q_team_description'>";
						$html .= "<p " . $q_team_description_style . ">" . $team_description . "</p>";
						$html .= "</div>"; // close div.q_team_description
					}

					if ($show_skills == 'yes') {
						$html .= '<div class="q_team_skills_holder">';

						for ($i = 1; $i <= 3; $i++) {
							$skill_title = ${"skill_title_" . $i};
							$skill_percentage = ${"skill_percentage_" . $i};

							if ($skill_title != '' && $skill_percentage != '') {

								$skills_param_array = array(
									'title ="' . $skill_title . '"',
									'percent = ' . $skill_percentage
								);

								if ($skills_title_size != '') {
									$skills_param_array[] = 'title_custom_size = ' . $skills_title_size;
								}

								$html .= do_shortcode('[no_progress_bar ' . implode(' ', $skills_param_array) . ']');
							}
						}

						$html .= '</div>';
					}

					$html .= "</div>"; //close div.q_team_text_inners
					$html .= "</div>"; //close div.q_team_text
				}
				$html .= "</div>"; //close div.q_team_inner
				$html .= "</div>"; //close div.q_team
				break;
			case "below_image":
				$html = "<div class='q_team  $text_align " . implode(' ', $q_team_holder_classes) . "'" . $q_team_style . ">";
				$html .= "<div class='q_team_inner'>";
				if ($team_image != "") {
					$html .= "<div class='q_team_image'>";
					$html .= "<img src='$team_image_src' alt='" . esc_attr__( 'team_image', 'select-core' ) . "'  />";
					$html .= "<div class='image_overlay' " . $q_team_image_hover_style . "></div>";
					//generate social icons html
					$team_social_icon_type_label = ''; //used in generating shortcode parameters based on icon pack
					$team_social_icon_param_label = ''; //used in generating shortcode parameters based on icon pack

					if ($team_social_icon_pack !== '') {
						$icon_collection_obj = pitch_qode_icon_collections()->getIconCollection($team_social_icon_pack);

						if (method_exists($icon_collection_obj, 'render')) {
							$team_social_icon_type_label = 'team_social_' . $icon_collection_obj->param;
							$team_social_icon_param_label = $icon_collection_obj->param;
						}


						$html .= "<div class='q_team_social_holder_between " .$team_hover_type. " " .$social_icons_position. "' ".  pitch_qode_get_inline_style($social_image_bottom_style).">";
						$html .= "<div class='q_team_social ".$team_social_icon_type." '>";
						if ($team_social_style == "social_style_between") {
							$html .= '<span class="social_share_icon_shape"><i class="social_share social_share_icon"></i></span>';
						}
						$html .= "<div class='q_team_social_inner'>";
						$html .= "<div class='q_team_social_wrapp'>";



						$icon_collection_obj = pitch_qode_icon_collections()->getIconCollection($team_social_icon_pack);

						if (method_exists($icon_collection_obj, 'render')) {
							if ($team_social_style == "social_style_between") {
								$html .= '<ul>';
							}

							//for each of available icons
							for ($i = 1; $i <= $number_of_social_icons; $i++) {
								$team_social_icon = ${$team_social_icon_type_label . '_' . $i};
								$team_social_link = ${'team_social_icon_' . $i . '_link'};
								$team_social_target = ${'team_social_icon_' . $i . '_target'};

								if ($team_social_icon != "") {

									$social_icons_param_array = array();

									$social_icons_param_array[] = $team_social_icon_param_label . "='" . $team_social_icon . "'";

									if ($team_social_link !== '') {
										$social_icons_param_array[] = "link='" . $team_social_link . "'";
									}

									if ($team_social_target !== '') {
										$social_icons_param_array[] = "target='" . $team_social_target . "'";
									}

									if ($team_social_icon_type !== '') {
										$social_icons_param_array[] = "type='" . $team_social_icon_type . "'";
									}

									if ($team_social_icon_color !== '') {
										$social_icons_param_array[] = "icon_color='" . $team_social_icon_color . "'";
									}

									if ($team_social_icon_background_color !== '') {
										$social_icons_param_array[] = "background_color='" . $team_social_icon_background_color . "'";
									}

									if ($team_social_icon_border_color !== '') {
										$social_icons_param_array[] = "border_color='" . $team_social_icon_border_color . "'";
									}
									if ($team_social_style == "social_style_between") {
										$html .= '<li>';
									}
									$html .= do_shortcode('[no_icons icon_pack="' . $team_social_icon_pack . '" ' . implode(' ', $social_icons_param_array) . ']');
									if ($team_social_style == "social_style_between") {
										$html .= '</li>';
									}
								}

							}
							if ($team_social_style == "social_style_between") {
								$html .= '</ul>';
							}
						}

						$html .= '</div>';//close q_team_social_wrapp
						$html .= "</div></div></div>"; //close div.q_team_social_holder_between

					}
					$html .= "</div>"; //close div.q_team_image


				}
                if($team_type == "below_image" && $box_border == "yes" && $team_info_margin_top != ''){
                    $qteam_box_style .= "margin-top:".$team_info_margin_top."px;";
                }
                elseif($team_info_margin_top != '' && $team_type == "below_image"){
                    $qteam_box_style .= "style=margin-top:".$team_info_margin_top."px;";
                }
				if ($team_name !== '' || $team_position !== '' || $team_show_separator == 'yes' || $team_description != "" || $show_skills == 'yes'){
					$html .= '<div class="q_team_info"  '. $qteam_box_style . '>';

					if ($team_name !== '' || $team_position !== '' || $team_show_separator == 'yes') {
						$html .= "<div class='q_team_title_holder ".$team_social_icon_type."'>";
						if ($team_name !== '') {
							$html .= "<$team_name_tag class='q_team_name' " . $q_team_name_style . ">";
							$html .= $team_name;
							$html .= "</$team_name_tag>";
						}

						if ($team_show_separator == "yes") {
							$html .= "<span class='separator small' style='" . $q_team_separator_style . "'></span>";
						}


						if ($team_position != "") {
							$html .= "<h6 class='q_team_position' " . $q_team_position_style . ">" . $team_position . "</h6>";
						}
						$html .= "</div>"; //close div.q_team_title_holder

					}
					if ($team_description != "" || $show_skills == 'yes') {

						$html .= "<div class='q_team_text'>";
						$html .= "<div class='q_team_text_inner'>";


						if ($team_description != "") {

							$html .= "<div class='q_team_description'>";
							$html .= "<p " . $q_team_description_style . ">" . $team_description . "</p>";
							$html .= "</div>"; // close div.q_team_description
						}

						if ($show_skills == 'yes') {

							for ($i = 1; $i <= 3; $i++) {
								$skill_title = ${"skill_title_" . $i};
								$skill_percentage = ${"skill_percentage_" . $i};

								if ($skill_title != '' && $skill_percentage != '') {

									$skills_param_array = array(
										'title ="' . $skill_title . '"',
										'percent = ' . $skill_percentage
									);

									if ($skills_title_size != '') {
										$skills_param_array[] = 'title_custom_size = ' . $skills_title_size;
									}
									$html .= '<div class="q_team_skills_holder">';
									$html .= do_shortcode('[no_progress_bar ' . implode(' ', $skills_param_array) . ']');
									$html .= '</div>';

								}
							}

						}

						$html .= "</div>"; //close div.q_team_text_inners
						$html .= "</div>"; //close div.q_team_text
					}
					$html .= "</div>"; //close div.q_team_info
				}
				$html .= "</div>"; //close div.q_team_inner
				$html .= "</div>"; //close div.q_team

				break;
		}

        return $html;
    }

    add_shortcode('no_team', 'no_team');
}

/* Team shortcode */

if (!function_exists('no_pricing_info')) {

    function no_pricing_info($atts, $content = null) {
        $args = array(
            "title" => "",
            "title_tag" => "h4",
            "text" => "",
            "animation_delay" => "",
            "enable_animation" => "yes"
        );

        $args = array_merge($args, pitch_qode_icon_collections()->getShortcodeParams());

        extract(shortcode_atts($args, $atts));

        $title = esc_attr($title);
        $text = esc_attr($text);
        $animation_delay = esc_attr($animation_delay);

        $headings_array = array('h2', 'h3', 'h4', 'h5', 'h6');

        //get correct heading value. If provided heading isn't valid get the default one
        $title_tag = (in_array($title_tag, $headings_array)) ? $title_tag : $args['title_tag'];
		
		$pricing_info_style="";
        if($animation_delay != "") {
            $pricing_info_style = 'style="animation-delay: ' .$animation_delay.'s"';
        }

        if($enable_animation == 'yes') {
            $pricing_info_classes = 'animate';
        }

        $html = '';
        $html .= '<div class="pricing_info" ' .$pricing_info_style .'>';
        $html .= '<div class="pricing_info_title_holder ' . $pricing_info_classes . '">';
        if($title != '') {
            $html .= '<' . $title_tag . ' class="pricing_info_title" >' . $title . '</' . $title_tag . '>';
        }

        $icon_collection_obj = pitch_qode_icon_collections()->getIconCollection($icon_pack);

        if (method_exists($icon_collection_obj, 'render')) {

            $html .= $icon_collection_obj->render(${$icon_collection_obj->param}, array(
                'icon_attributes' => array(
                    'style' => '',
                    'class' => 'pricing_info_icon'
                )
            ));

        }
        $html .= '</div>'; //close pricing info title
        $html .= '<div class="pricing_info_text">';
        if($text != '') {
            $html .= '<p>' .$text . '</p>';
        }
        $html .= '</div>'; //close pricing info text
        $html .= '</div>'; //close pricing info

        return $html;

    }

    add_shortcode('no_pricing_info', 'no_pricing_info');
}
/* Unordered List shortcode */

if (!function_exists('no_unordered_list')) {

    function no_unordered_list($atts, $content = null) {
        $args = array(
            "style" => "",
            "animate" => "",
            'number_type' => "",
            "font_weight" => "",
            "padding_left" => "",
			"show_separator" => ""
        );
		
        extract(shortcode_atts($args, $atts));

        $list_item_classes = "";

        if ($style != "") {
            $list_item_classes .= "{$style}";
        }

        if ($number_type != "") {
            $list_item_classes .= " {$number_type}";
        }

        if ($font_weight != "") {
            $list_item_classes .= " {$font_weight}";
        }
		
		$list_style = "";
		if($padding_left != "") {
			$list_style .= "style='padding-left: " . $padding_left ."px;'";
		}
		if($show_separator == "yes"){
			$list_item_classes .= " show_separator";
		}
		
        $html = "<div class='q_list $list_item_classes";
        if ($animate == "yes") {
            $html .= " animate_list' $list_style>" . do_shortcode($content) . "</div>";
        } else {
            $html .= "' $list_style>" . do_shortcode($content) . "</div>";
        }
        return $html;
    }

    add_shortcode('no_unordered_list', 'no_unordered_list');
}


/* Service table shortcode */

if (!function_exists('no_service_table')) {

    function no_service_table($atts, $content = null) {
        $args = array(
            "type" => "icon_image_on_top",
            "title" => "",
            "title_tag" => "h4",
            "title_color" => "",
            "title_background_color" => "",
            "top_background_image" => "",
            "header_type" => "with_icon",
            "icon_color" => "",
            "custom_size" => "",
            "header_image" => "",
            "border" => "",
            "border_below_image" => "yes",
            "border_below_image_width" => "",
            "border_below_image_color" => "",
            "border_width" => "",
            "border_color" => "",
            "active" => "",
			"active_style" => "",
            "active_text" => "Best choice",
            "active_text_color" => "",
            "active_text_background_color" => "",
            "content_background_color" => "",
            "content_background_image" => "",
            "different_odd_even_sections"  => "no",
            "even_back_color" => "",
            "odd_back_color" => "",
            "content_text_color" => "",
            "title_separator" => "",
            "title_separator_color" => "",
            "subtitle" => "",
            "small_title" => "",
            "border_top" => "yes",
            "border_top_color" => "",
            "title_border_bottom" => "yes",
            "title_border_bottom_color" => "",
            "show_icon_image" => "yes",
			"icon_background_color" => "",
			"icon_padding_top" => "",
			"icon_padding_bottom" => "",
        );

        $args = array_merge($args, pitch_qode_icon_collections()->getShortcodeParams());

        extract(shortcode_atts($args, $atts));

        $title = esc_html($title);
        $title_color = esc_attr($title_color);
        $title_background_color = esc_attr($title_background_color);
        $top_background_image = esc_attr($top_background_image);
        $icon_color = esc_attr($icon_color);
        $custom_size = esc_attr($custom_size);
        $header_image = esc_attr($header_image);
        $border_width = esc_attr($border_width);
        $border_below_image_width = esc_attr($border_below_image_width);
        $border_below_image_color = esc_attr($border_below_image_color);
        $border_color = esc_attr($border_color);
		$active_style = esc_attr($active_style);
        $active_text = esc_attr($active_text);
        $active_text_color = esc_attr($active_text_color);
        $active_text_background_color = esc_attr($active_text_background_color);
        $content_background_color = esc_attr($content_background_color);
        $content_background_image = esc_attr($content_background_image);
        $different_odd_even_sections = esc_attr($different_odd_even_sections);
        $even_back_color = esc_attr($even_back_color);
        $odd_back_color = esc_attr($odd_back_color);
        $content_text_color = esc_attr($content_text_color);
        $title_separator_color = esc_attr($title_separator_color);		
        $subtitle = esc_html($subtitle);
        $small_title = esc_html($small_title);
        $border_top_color = esc_attr($border_top_color);
        $title_border_bottom_color = esc_attr($title_border_bottom_color);
		$icon_background_color = esc_attr($icon_background_color);
        $icon_padding_top = esc_attr($icon_padding_top);
        $icon_padding_bottom = esc_attr($icon_padding_bottom);
		

        $headings_array = array('h2', 'h3', 'h4', 'h5', 'h6');

        //get correct heading value. If provided heading isn't valid get the default one
        $title_tag = (in_array($title_tag, $headings_array)) ? $title_tag : $args['title_tag'];

        //init variables
        $html = "";
        $title_holder_style = "";
        $title_style = "";
        $title_classes = "";
        $icon_style = "";
        $service_icon_background_image = "";
        $content_style = "";
        $service_table_border_style = "";
        $service_table_style = "";
        $active_holder_style_array = array();
        $active_holder_style = "";
        $active_text_style_array = array();
        $service_table_border_top_style = array();
        $active_text_style = "";
        $service_table_clasess = '';
        $content_text_style = "";
        $title_separator_style = "";
        $service_header_image = "";
        $basic_title_border_bottom_style = array();
        $active_table_position = "";
		$data_attr = "";

        if ($type == "title_on_top") {
            $service_table_clasess .= ' title_on_top';
        }

        if ($type == "icon_image_on_top") {
            $service_table_clasess .= ' icon_image_on_top';
        }

        if ($active == "yes") {
            $service_table_clasess .= ' active';
        }

		if($active_style == "circle" && $active == "yes"){
			$service_table_clasess .= ' active_circle';
		}
		elseif($active_style == "rectangle" && $active == "yes"){
			$service_table_clasess .= ' active_rectangle';
		}
		
		if($subtitle != "") {
			$service_table_clasess .= ' has_subtitle';
		}

        if($small_title != "") {
            $service_table_clasess .= ' has_small_title';
        }

        if ($title_separator == "yes") {
            $title_classes .= ' active_small_separator';
        }

        if ($active_text_color !== '') {
            $active_text_style_array[] = 'color: ' . $active_text_color;
        }

        if (is_array($active_text_style_array) && count($active_text_style_array)) {
            $active_text_style = 'style="' . implode(';', $active_text_style_array) . '"';
        } else {
            $active_text_style = '';
        }

        if ($title_color != "") {
            $title_style .= "color: " . $title_color . ";";

            $title_holder_style .= "color: " . $title_color . ";";
        }

        if ($title_background_color != "") {
            $title_holder_style .= "background-color: " . $title_background_color . ";";
        }

        if ($title_separator_color != '') {
            $title_separator_style = 'style="background-color: ' . $title_separator_color . ';"';
        }

        $service_icon_background_image = "style='"; 

        if ($top_background_image != "") {
            if (is_numeric($top_background_image)) {
                $background_image_src = wp_get_attachment_url($top_background_image);
            } else {
                $background_image_src = $top_background_image;
            }
            $service_icon_background_image .= "background-image: url(" . $background_image_src . ");";            
        }
        if($border_below_image == 'no'){
            $service_icon_background_image .= "border:none;";
        }
        elseif($border_below_image == 'yes'){
            if($border_below_image_width){
                $service_icon_background_image .= "border-bottom-width:".$border_below_image_width."px;border-bottom-style:solid;";
            }
            if($border_below_image_color){
                $service_icon_background_image .= "border-bottom-color:".$border_below_image_color.";";
            }
        }
        $service_icon_background_image .= "'"; 

        if ($header_image != "") {
            if (is_numeric($header_image)) {
                $background_image_src = wp_get_attachment_url($header_image);
            } else {
                $background_image_src = $header_image;
            }
            $service_header_image .= "<img src=" . $background_image_src . " alt='' />";
        }

        if ($icon_color != "" && $header_type == 'with_icon') {
            $icon_style .= "color: " . $icon_color . ";";
        }
		
		if($icon_background_color != "" && $header_type == 'with_icon'){
			$data_attr .= " data-icon-back-color='" . $icon_background_color . "'";
		}
		
		if($show_icon_image == "yes"){
			if($icon_padding_top != ""){
				$data_attr .= " data-icon-padding-top='" . $icon_padding_top . "'";
			}
			if($icon_padding_bottom != ""){
				$data_attr .= " data-icon-padding-bottom='" . $icon_padding_bottom . "'";
			}			
		}

        if ($custom_size != "" && $header_type == 'with_icon') {
            $icon_style .= "font-size: " . $custom_size . "px;";
        }

        if ($content_background_color != "") {
            $content_style .= "background-color: " . $content_background_color . ";";
        }

        if ($content_background_image != "") {
            if (is_numeric($content_background_image)) {
                $background_image_src = wp_get_attachment_url($content_background_image);
            } else {
                $background_image_src = $content_background_image;
            }
            $content_style .= "background-image: url(" . $background_image_src . ");";
        }

        if($different_odd_even_sections == "yes"){
            if($even_back_color != ""){
                $data_attr .= " data-even-background-color='" . $even_back_color . "'";
            }
            if($odd_back_color != ""){
                $data_attr .= " data-odd-background-color='" . $odd_back_color . "'";
            }
        }

        if ($content_text_color != '') {
            $content_text_style = 'style="color: ' . $content_text_color . ';"';
        }

        if ($border == "yes") {
            $service_table_border_style .= " border-style:solid;";
            if ($border_width != "") {
                $service_table_border_style .= "border-width:" . $border_width . "px;";
            }
            if ($border_color != "") {
                $service_table_border_style .= "border-color:" . $border_color . ";";
            }
        }

        
        if ($active_text_background_color !== '') {
            $active_holder_style_array[] = 'background-color: ' . $active_text_background_color;
        }

        if ($border_top == "no" && $type=="title_on_top") {
            $service_table_border_top_style[] = "border-top: 0;";
            $active_holder_style_array[] = "top: -38px;";
        }

        if ($border_top == "yes" && $border == "yes" && $type=="title_on_top") {
            $service_table_border_style .= "border-top: 0;";
        }

        if (($border_top == "yes") && ($border_top_color != '')  && ($type=="title_on_top")) {
            $service_table_border_top_style[] = "border-top-color: " . $border_top_color . ";";
        }

        if (is_array($service_table_border_top_style) && count($service_table_border_top_style)) {
            $service_table_border_top_style = 'style="' . implode(';', $service_table_border_top_style) . '"';
        } else {
            $service_table_border_top_style = '';
        }

        if (is_array($active_holder_style_array) && count($active_holder_style_array)) {
            $active_holder_style = 'style="' . implode(';', $active_holder_style_array) . '"';
        } else {
            $active_holder_style = '';
        }

        if ($title_border_bottom == "no") {
            $basic_title_border_bottom_style[] = "border-bottom : 0; ";
        }

        if (($title_border_bottom == "yes") && $title_border_bottom_color != '') {
            $basic_title_border_bottom_style[] = "border-bottom-color : " . $title_border_bottom_color . ";";
        }

        if (is_array($basic_title_border_bottom_style) && count($basic_title_border_bottom_style)) {
            $basic_title_border_bottom_style = 'style="' . implode(';', $basic_title_border_bottom_style) . '"';
        } else {
            $basic_title_border_bottom_style = '';
        }

        if ($type == "title_on_top") {
            $html .= "<div class='service_table_holder " . $service_table_clasess . "' " . $service_table_border_top_style . ">";
        }

        if ($type == "icon_image_on_top") {
            $html .= "<div class='service_table_holder " . $service_table_clasess . "'>";
        }

        if ($active == 'yes') {
            $html .= "<div class='active_text' " . $active_holder_style . "><span class='active_text_inner'><span " . $active_text_style . ">" . $active_text . "</span></span></div>";
        }

        $html .= "<ul class='service_table_inner' style='" . $service_table_border_style . " " . $content_style . "' ".$data_attr.">";

        if ($type == 'title_on_top') {
            $html .= "<li class='service_table_title_holder " . $title_classes . "' style='" . $title_holder_style . "'>";
            $html .= "<div class='service_table_title_inner' " . $basic_title_border_bottom_style . ">";
            if($small_title != '') {
                $html .= "<span class='small_title_content'>";
                $html .= $small_title;
                $html .= "</span>";
            }
            if ($title != "") {
                $html .= "<" . $title_tag . " class='service_title' style='" . $title_style . "'>" . $title . "</" . $title_tag . ">";
            }
            $html .= "</div>";
            $html .= "</li>"; //close li.service_table_title_holder

			if ($subtitle != "") {
                $html .= "<li class='service_table_subtitle_holder'>";
                $html .= "<div class='service_table_subtitle_inner'>";
				$html .= "<p class='service_subtitle'>" . $subtitle . "</p>";
                $html .= "</div>";
                $html .= "</li>"; //close li.service_table_subtitle_holder
			}
        }

        if ($show_icon_image == 'yes') {

            if ($header_type == 'with_icon') {
                $html .= "<li class='service_icon' " . $service_icon_background_image . " >";

                $icon_collection_obj = pitch_qode_icon_collections()->getIconCollection($icon_pack);

                if (method_exists($icon_collection_obj, 'render')) {

                    $html .= $icon_collection_obj->render(${$icon_collection_obj->param}, array(
                        'icon_attributes' => array(
                            'style' => $icon_style,
                            'class' => 'service_table_icon'
                        )
                    ));

                }



                $html .= "</li>";
            }


            if ($header_type == 'with_image') {
                $html .= "<li $data_attr class='service_image' " . $service_icon_background_image . ">";
                $html .= $service_header_image;
                $html .= "</li>";
            }
        }

        if ($type == 'icon_image_on_top') {

            $html .= "<li class='service_table_title_holder " . $title_classes . "' style='" . $title_holder_style . "'>";
            $html .= "<div class='service_table_title_inner'>";
            if($small_title != '') {
                $html .= "<span class='small_title_content'>";
                $html .= $small_title;
                $html .= "</span>";
            }
            if ($title != "") {
                $html .= "<" . $title_tag . " class='service_title' style='" . $title_style . "'>" . $title . "</" . $title_tag . ">";
            }
            $html .= "</div>";
            if ($title_separator == "yes") {
                $html .="<div class='title_separator'  " . $title_separator_style . "></div>";
            }
            $html .= "</li>"; //close li.service_table_title_holder
			$html .= "<li class='service_table_subtitle_holder'>";
			$html .= "<div class='service_table_subtitle_inner'>";
			if ($subtitle != "") {
				$html .= "<p class='service_subtitle'>" . $subtitle . "</p>";
			}
			$html .= "</div>";
            $html .= "</li>"; //close li.service_table_subtitle_holder
        }

        $html .= "<li class='service_table_content' " . $content_text_style . ">";

        $html .= do_shortcode($content);

        $html .= "</li>";

        $html .= "</ul></div>";

        return $html;
    }

    add_shortcode('no_service_table', 'no_service_table');
}

/* Select Image Slider with no space shortcode */

if (!function_exists('no_image_slider_no_space')) {

    function no_image_slider_no_space($atts, $content = null) {
        $args = array(
            "images" => "",
            "show_info" => "",
            "info_position" => "",
            "background_color" => "",
            "title_color" => "",
            "title_font_size" => "",
            "description_color" => "",
            "description_font_size" => "",
            "separator_color" => "",
            "separator_opacity" => "",
            "full_screen" => "",
            "height" => "",
            "on_click" => "",
            "custom_links" => "",
            "custom_links_target" => "",
            "navigation_style" => "",
            "highlight_active_image" => "",
            "highlight_inactive_color" => "",
            "highlight_inactive_opacity" => ""
        );

        extract(shortcode_atts($args, $atts));

        $images = esc_attr($images);
        $background_color = esc_attr($background_color);
        $title_color = esc_attr($title_color);
        $title_font_size = esc_attr($title_font_size);
        $description_color = esc_attr($description_color);
        $description_font_size = esc_attr($description_font_size);
        $separator_color = esc_attr($separator_color);
        $separator_opacity = esc_attr($separator_opacity);
        $height = esc_attr($height);
        $custom_links = esc_attr($custom_links);
        $highlight_inactive_color = esc_attr($highlight_inactive_color);
        $highlight_inactive_opacity = esc_attr($highlight_inactive_opacity);


        //init variables
        $html = "";
        $image_gallery_holder_styles = '';
        $image_gallery_holder_classes = '';
        $image_gallery_item_styles = '';
        $custom_links_array = array();
        $using_custom_links = false;
        $highlight_inactive_color_style = '';
        $highlight_inactive_opacity_style = '';

        //is full screen height for the slider set?
        if ($full_screen == 'yes') {
            $image_gallery_holder_classes .= ' full_screen_height';
        }

        //is height for the slider set?
        if ($height !== '' && $full_screen == 'no') {
            $image_gallery_holder_styles .= 'height: ' . $height . 'px;';
            $image_gallery_item_styles .= 'height: ' . $height . 'px;';
        }

        //are we using custom links and is custom links field filled?
        if ($on_click == 'use_custom_links' && $custom_links !== '') {
            //create custom links array
            $custom_links_array = explode(',', strip_tags($custom_links));
        }

        if ($navigation_style !== '') {
            $image_gallery_holder_classes .= ' ' . $navigation_style;
        }

        if ($highlight_active_image == 'yes') {
            $image_gallery_holder_classes .= ' highlight_active';
            if ($highlight_inactive_color != '') {
                $highlight_inactive_color_style .= 'style="background-color:' . $highlight_inactive_color . ';"';
            }
            if ($highlight_inactive_opacity != '') {
                $highlight_inactive_opacity_style .= 'style="opacity:' . $highlight_inactive_opacity . ';"';
            }
        }

        if ($show_info == 'on_hover') {
            $image_gallery_holder_classes .= ' on_hover';
        }
        if($show_info == 'in_bottom_corner'){
            $image_gallery_holder_classes .= ' in_bottom_corner';
            if($info_position == "bottom_left"){ $image_gallery_holder_classes .= ' bottom_left'; }
            if($info_position == "bottom_right"){ $image_gallery_holder_classes .= ' bottom_right'; }
        }

        $html .= "<div class='qode_image_gallery_no_space " . $image_gallery_holder_classes . "'><div class='qode_image_gallery_holder' style='" . $image_gallery_holder_styles . "'><ul " . $highlight_inactive_color_style . ">";



        if ($images != '') {
            $images_gallery_array = explode(',', $images);
        }

        //are we using prettyphoto?
        if ($on_click == 'prettyphoto') {
            //generate random rel attribute
            $pretty_photo_rel = 'prettyPhoto[rel-' . rand() . ']';
        }


        //are we using custom links and is target for those elements chosen?
        if ($on_click == 'use_custom_links' && in_array($custom_links_target, array('_self', '_blank'))) {
            //generate target attribute
            $custom_links_target = 'target="' . $custom_links_target . '"';
        }

        if (isset($images_gallery_array) && count($images_gallery_array) != 0) {
            $i = 0;
            foreach ($images_gallery_array as $gimg_id) {
                $current_item_custom_link = '';

                $gimage_src = wp_get_attachment_image_src($gimg_id, 'full', true);
                $gimage_alt = get_post_meta($gimg_id, '_wp_attachment_image_alt', true);
                $gimage_title = get_the_title($gimg_id);
                $gimage_description = get_post($gimg_id)->post_content;

                $image_src = $gimage_src[0];
                $image_width = $gimage_src[1];
                $image_height = $gimage_src[2];

                //is height set for the slider?
                if ($height !== '' && $full_screen == 'no') {
                    //get image proportion that will be used to calculate image width
                    $proportion = $height / $image_height;

                    //get proper image width based on slider height and proportion
                    $image_width = ceil($image_width * $proportion);
                }

                $html .= '<li><div style="' . $image_gallery_item_styles . ' width:' . $image_width . 'px;">';

                //is on click event chosen?
                if ($on_click !== '') {
                    switch ($on_click) {
                        case 'prettyphoto':
                            $html .= '<a class="lightbox_single_portfolio" data-rel="' . $pretty_photo_rel . '" href="' . $image_src . '">';
                            break;
                        case 'use_custom_links':
                            //does current image has custom link set?
                            if (isset($custom_links_array[$i])) {
                                //get custom link for current image
                                $current_item_custom_link = $custom_links_array[$i];

                                if ($current_item_custom_link !== '') {
                                    $html .= '<a ' . $custom_links_target . ' href="' . $current_item_custom_link . '">';
                                }
                            }
                            break;
                        case 'new_tab':
                            $html .= '<a href="' . $image_src . '" target="_blank">';
                            break;
                        default:
                            break;
                    }
                }
                if ($show_info == 'on_hover') {
                    $background_styles = '';
                    $title_styles = '';
                    $description_styles = '';
                    $separator_styles = '';

                    if ($background_color != "") {
                        $background_styles .= "background-color: " . $background_color . ";";
                    }

                    if ($title_color != "") {
                        $title_styles .= 'color:' . $title_color . ';';
                    }
                    if ($title_font_size != "") {
                        $title_styles .= 'font-size:' . $title_font_size . 'px;';
                    }
                    if ($description_color != "") {
                        $description_styles .= 'color:' . $description_color . ';';
                    }
                    if ($description_font_size != "") {
                        $description_styles .= 'font-size:' . $description_font_size . 'px;';
                    }
                    if ($separator_color != "") {
                        $separator_styles .= 'background-color:' . $separator_color . ';';
                    }
                    if ($separator_opacity != "") {
                        $separator_styles .= 'opacity:' . $separator_opacity . ';';
                    }

                    $html .= '<span class="holder" style="' . $background_styles . '"><span class="outer"><span class="inner">';
                    $html .= '<span class="title" style="' . $title_styles . '">' . $gimage_title . '</span><span class="separator" style="' . $separator_styles . '"></span><span class="description" style="' . $description_styles . '">' . $gimage_description . '</span>';
                    $html .= '</span></span></span>';
                }

                if ($show_info == 'in_bottom_corner') {
                    $background_styles = '';
                    $title_styles = '';
                    $description_styles = '';

                    if ($background_color != "") {
                        $background_styles .= "background-color: " . $background_color . ";";
                    }

                    if ($title_color != "") {
                        $title_styles .= 'color:' . $title_color . ';';
                    }
                    if ($title_font_size != "") {
                        $title_styles .= 'font-size:' . $title_font_size . 'px;';
                    }
                    if ($description_color != "") {
                        $description_styles .= 'color:' . $description_color . ';';
                    }
                    if ($description_font_size != "") {
                        $description_styles .= 'font-size:' . $description_font_size . 'px;';
                    }

                    $html .= '<span class="holder"><span class="outer"><span class="inner">';
                    $html .= '<span class="title" style="' . $title_styles . $background_styles . '">' . $gimage_title . '</span><span class="clear"></span><span class="description" style="' . $description_styles . $background_styles .'">' . $gimage_description . '</span>';
                    $html .= '</span></span></span>';
                }

                $html .= '<img src="' . $image_src . '" alt="' . $gimage_alt . '" ' . $highlight_inactive_opacity_style . ' />';



                //are we using prettyphoto or new tab click event or is custom link for current image set?
                if (in_array($on_click, array('prettyphoto', 'new_tab')) || ($on_click == 'use_custom_links' && $current_item_custom_link !== '')) {
                    //if so close opened link
                    $html .= '</a>';
                }

                $html .= '</div></li>';

                $i++;
            }
        }

        $icon_navigation_class = 'arrow_carrot-';
        if (pitch_qode_options()->getOptionValue( 'carousel_navigation_arrows_type' ) != '') {
            $icon_navigation_class = pitch_qode_options()->getOptionValue( 'carousel_navigation_arrows_type' );
        }

        $direction_nav_classes = pitch_qode_horizontal_slider_icon_classes($icon_navigation_class);

        $html .= "</ul>";
        $html .= '</div>';
        $html .= '<div class="controls">';
        $html .= '<a class="prev-slide" href="#"><span class="'.$direction_nav_classes['left_icon_class'].'"></span></a>';
        $html .= '<a class="next-slide" href="#"><span class="'.$direction_nav_classes['right_icon_class'].'"></span></a>';
        $html .= '</div></div>';

        return $html;
    }

    add_shortcode('no_image_slider_no_space', 'no_image_slider_no_space');
}


/* Countdown shortcode */

if (!function_exists('no_countdown')) {

    function no_countdown($atts, $content = null) {
        extract(shortcode_atts(array("year" => "", "month" => "", "day" => "", "hour" => "", "minute" => "", "month_label" => "", "day_label" => "", "hour_label" => "", "minute_label" => "", "second_label" => "", "month_singular_label" => "", "day_singular_label" => "", "hour_singular_label" => "", "minute_singular_label" => "", "second_singular_label" => "", "color" => "", "digit_font_size" => "", "label_font_size" => "", "font_weight" => "", "show_separator" => ""), $atts));



        $month_label = esc_attr($month_label);
        $day_label = esc_attr($day_label);
        $hour_label = esc_attr($hour_label);
        $minute_label = esc_attr($minute_label);
        $second_label = esc_attr($second_label);
        $month_singular_label = esc_attr($month_singular_label);
        $day_singular_label = esc_attr($day_singular_label);
        $hour_singular_label = esc_attr($hour_singular_label);
        $minute_singular_label = esc_attr($minute_singular_label);
        $second_singular_label = esc_attr($second_singular_label);
        $color = esc_attr($color);
        $digit_font_size = esc_attr($digit_font_size);
        $label_font_size = esc_attr($label_font_size);


        $id = mt_rand(1000, 9999);
        $month_label_value = "Months";
        if ($month_label != "") {
            $month_label_value = $month_label;
        }
        $day_label_value = "Days";
        if ($day_label != "") {
            $day_label_value = $day_label;
        }
        $hour_label_value = "Hours";
        if ($hour_label != "") {
            $hour_label_value = $hour_label;
        }
        $minute_label_value = "Minutes";
        if ($minute_label != "") {
            $minute_label_value = $minute_label;
        }
        $second_label_value = "Seconds";
        if ($second_label != "") {
            $second_label_value = $second_label;
        }

        $month_singular_label_value = "Month";
        if ($month_singular_label != "") {
            $month_singular_label_value = $month_singular_label;
        }
        $day_singular_label_value = "Day";
        if ($day_singular_label != "") {
            $day_singular_label_value = $day_singular_label;
        }
        $hour_singular_label_value = "Hour";
        if ($hour_singular_label != "") {
            $hour_singular_label_value = $hour_singular_label;
        }
        $minute_singular_label_value = "Minute";
        if ($minute_singular_label != "") {
            $minute_singular_label_value = $minute_singular_label;
        }
        $second_singular_label_value = "Second";
        if ($second_singular_label != "") {
            $second_singular_label_value = $second_singular_label;
        }

        $counter_style = "";
        if ($color != "" || $font_weight != '') {
            $counter_style = "style='";
            if ($color != "") {
                $counter_style .="color:" . $color . ";";
            }
            if ($font_weight != "") {
                $counter_style .="font-weight:" . $font_weight . ";";
            }
            $counter_style .="'";
        }

		$data_attr = "";
		if ($year !== ''){
			$data_attr .= 'data-year = '.$year;
		}
		if ($month !== ''){
			$data_attr .= ' data-month = '.$month;
		}
		if ($day !== ''){
			$data_attr .= ' data-day = '.$day;
		}
		if ($hour !== ''){
			$data_attr .= ' data-hour = '.$hour;
		}
		if ($minute !== ''){
			$data_attr .= ' data-minute = '.$minute;
		}
		$data_attr .= ' data-monthsLabel = '.$month_label_value;
		$data_attr .= ' data-daysLabel = '.$day_label_value;
		$data_attr .= ' data-hoursLabel = '.$hour_label_value;
		$data_attr .= ' data-minutesLabel = '.$minute_label_value;
		$data_attr .= ' data-secondsLabel = '.$second_label_value;
		$data_attr .= ' data-monthLabel = '.$month_singular_label_value;
		$data_attr .= ' data-dayLabel = '.$day_singular_label_value;
		$data_attr .= ' data-hourLabel = '.$hour_singular_label_value;
		$data_attr .= ' data-minuteLabel = '.$minute_singular_label_value;
		$data_attr .= ' data-secondLabel = '.$second_singular_label_value;
		$data_attr .= ' data-tickf = setCountdownStyle'. $id;
		$data_attr .= ' data-timezone = '.get_option('gmt_offset');

		if ($digit_font_size !== ''){
			$data_attr .= ' data-digitfs = '.$digit_font_size;
		}
		if ($label_font_size !== ''){
			$data_attr .= ' data-labelfs = '.$label_font_size;
		}
		if ($color !== ''){
			$data_attr .= ' data-color = '.$color;
		}

        $html = "<div class='countdown " . $show_separator . "' id='countdown" . $id . "' " . $counter_style . " " . $data_attr . "></div>";

        return $html;
    }

    add_shortcode('no_countdown', 'no_countdown');
}

/* Google Map Shortcode */

if (!function_exists('no_google_map')) {

    function no_google_map($atts, $content = null) {
        extract(shortcode_atts(
			array(
				"address1" => "",
				"address2" => "",
				"address3" => "",
				"address4" => "",
				"address5" => "",
				"custom_map_style" => false,
				"color_overlay" => "#393939",
				"saturation" => "-100",
				"lightness" => "-60",
				"zoom" => "12",
				"pin" => "",
				"google_maps_scroll_wheel" => false,
				"map_height" => "600",
				"full_screen_map_height" => "",
				"enable_additional_informations" => "",
				"info_box_grid" => "",
				"info_box_left_right_aligment" => "",
				"info_box_top_bottom_aligment" => "",
				"info_box_left_right_distance" => "0",
				"info_box_top_bottom_distance" => "0",
				"info_box_background_color" => "",
				"info_box_width" => ""

             ), $atts));

        $address1 = esc_attr($address1);
        $address2 = esc_attr($address2);
        $address3 = esc_attr($address3);
        $address4 = esc_attr($address4);
        $address5 = esc_attr($address5);
        $color_overlay = esc_attr($color_overlay);
        $saturation = esc_attr($saturation);
        $lightness = esc_attr($lightness);
        $zoom = esc_attr($zoom);
        $pin = esc_attr($pin);
        $map_height = esc_attr($map_height);


        $html = "";
        $unique_id = rand(0, 100000);
        $holder_id = 'map_canvas_' . $unique_id;
        $map_pin = "";

        if ($pin != "") {
            $map_pin = wp_get_attachment_image_src($pin, 'full', true);
            $map_pin = $map_pin[0];
        } else {
            $map_pin = get_template_directory_uri() . "/img/pin.png";
        }


        $data_attribute = '';
        if ($address1 != "" || $address2 != "" || $address3 != "" || $address4 != "" || $address5 != "") {
            $data_attribute .= "data-addresses='[\"";
            $addresses_array = array();
            if ($address1 != "") {
                array_push($addresses_array, esc_attr($address1));
            }
            if ($address2 != "") {
                array_push($addresses_array, esc_attr($address2));
            }
            if ($address3 != "") {
                array_push($addresses_array, esc_attr($address3));
            }
            if ($address4 != "") {
                array_push($addresses_array, esc_attr($address4));
            }
            if ($address5 != "") {
                array_push($addresses_array, esc_attr($address5));
            }
            $data_attribute .= implode('","', $addresses_array);
            $data_attribute .="\"]'";
        }

        $data_attribute .= " data-custom-map-style='" . $custom_map_style . "'";
        $data_attribute .= " data-color-overlay='" . $color_overlay . "'";
        $data_attribute .= " data-saturation='" . $saturation . "'";
        $data_attribute .= " data-lightness='" . $lightness . "'";
        $data_attribute .= " data-zoom='" . $zoom . "'";
        $data_attribute .= " data-pin='" . $map_pin . "'";
        $data_attribute .= " data-unique-id='" . $unique_id . "'";
        $data_attribute .= " data-google-maps-scroll-wheel='" . $google_maps_scroll_wheel . "'";

        if ($map_height != "") {
            $data_attribute .= " data-map-height='" . $map_height . "'";
			$map_height = (strstr($map_height, 'px', true)) ? $map_height : $map_height . 'px';
        }

        if ($full_screen_map_height == "yes"){
			$data_attribute .= " data-map-full='fullscreen'";
			$map_height = '100%';
		}

        $html .= "<div class='google_map_holder' style='height:" . $map_height . "'><div class='q_google_map' id='" . $holder_id . "' " . $data_attribute . "></div>";

        if ($google_maps_scroll_wheel == "false") {
            $html .= "<div class='google_map_ovrlay'></div>";
        }

		$info_box_style = "";
		$info_box_holder_style = "";

		if($info_box_left_right_aligment == "left"){
			if($info_box_left_right_distance !== ""){
				$info_box_style .= "left:" . $info_box_left_right_distance . "px;right:auto;";
			}
		}elseif($info_box_left_right_aligment == "right"){
			if($info_box_left_right_distance !== ""){
				$info_box_style .= "right:" . $info_box_left_right_distance . "px;left:auto;";
			}
		}


		if($info_box_top_bottom_aligment == "top"){
			if($info_box_top_bottom_distance !== ""){
				$info_box_style .= "top:" . $info_box_top_bottom_distance . "px;bottom:auto;";
			}
            $info_box_holder_style .= "top:0;bottom:auto";
		}elseif($info_box_top_bottom_aligment == "bottom"){
			if($info_box_top_bottom_distance !== ""){
				$info_box_style .= "bottom:" . $info_box_top_bottom_distance . "px;top:auto;";
			}
            $info_box_holder_style .= "bottom:0;top:auto";
		}


        if($info_box_background_color !== ""){
            $info_box_style .="background-color:". $info_box_background_color. ";";
        }
        if($info_box_background_color !== ""){
            $info_box_style .="width:". $info_box_width . "%;";
        }

		if($content !== "" && $enable_additional_informations === "yes"){
			$html .= "<div class='google_map_info_box_holder' style=".$info_box_holder_style.">";
			if($info_box_grid == "yes") {
				$html .= "<div class='container clearfix'>";
				$html .= "<div class='container_inner clearfix'>";
					$html .= "<div class='google_map_info_box' style=".$info_box_style.">" . $content . "</div>";
				$html .= "</div>";
				$html .= "</div>";
			} else {
				$html .= "<div class='google_map_info_box' style=".$info_box_style.">" . $content . "</div>";
			}

			$html .= "</div>";
		}



        $html .= "</div>";
        return $html;
    }

    add_shortcode('no_google_map', 'no_google_map');
}

/* Separator with Icon */

if (!function_exists('no_separator_with_icon')) {

    function no_separator_with_icon($atts, $content = null) {
        $default_atts = array(
            'type' => '',
            'position' => '',
            'color' => '',
            'border_style' => 'solid',
            'up' => '',
            'down' => '',
            'thickness' => '',
            'width' => '',
            "icon_custom_size" => "25",
            "icon_shape_size" => "100",
            "icon_type" => "",
            "custom_icon" => "",
            "icon_border_radius" => "",
            "icon_border_color" => "",
            "icon_border_width" => "1",
            "icon_color" => "",
            "icon_background_color" => "",
            "icon_margin" => "",
            "separator_icon_position" => "center",
            "hover_icon_color" => "",
            "hover_icon_border_color" => "",
            "hover_icon_background_color" => "",
			"link" => "",
			"icon_anchor" => "",
			"target" => "self"
        );

        $default_atts = array_merge($default_atts, pitch_qode_icon_collections()->getShortcodeParams());

        extract(shortcode_atts($default_atts, $atts));

        //init variables
        $html = "";

        $separator_classes = "q_separator_with_icon ";
        $separator_styles = array();
        $separator_lines_styles = array();

        $separator_classes .= $type . " ";
        $separator_classes .= $position . " ";
        $separator_classes .= $separator_icon_position . " ";
        $icon_left_margin = "";
        $icon_right_margin = "";


        if ($up != "") {
            $separator_styles[] = "margin-top:" . $up . "px";
        }

        if ($down != "") {
            $separator_styles[] = "margin-bottom:" . $down . "px";
        }

        if ($color != "") {
            $separator_lines_styles[] = "border-color: " . $color;
        }

        if ($thickness != "") {
            $separator_lines_styles[] = "border-bottom-width:" . $thickness . "px";
        }

        if ($width != "") {
            $separator_lines_styles[] = "width:" . $width . "px";
        }

        if ($border_style != "" && $border_style != "transparent") {
            $separator_lines_styles[] = "border-style: " . $border_style;
        }

        if ($border_style != "" && $border_style == "transparent") {
            $separator_lines_styles[] = "border:none";
        }


        if ($thickness != "") {
            $separator_lines_styles[] = "margin-bottom:" . -$thickness / 2 . "px";
        }

        if ($icon_margin != "") {
            $icon_left_margin .= "margin-left:" . $icon_margin . "px;";
        }

        if ($icon_margin != "") {
            $icon_right_margin .= "margin-right:" . $icon_margin . "px;";
        }

        $icons_param_array = array();
        if ($icon_pack !== '') {
            $icons_param_array[] = "icon_pack='" . $icon_pack . "'";
        }

        foreach (pitch_qode_icon_collections()->iconCollections as $icon_set) {
            if (${$icon_set->param}) {
                $icons_param_array[] = $icon_set->param . "='" . ${$icon_set->param} . "'";
            }
        }
        if ($icon_type !== '') {
            $icons_param_array[] = "type='" . $icon_type . "'";
        }
        if ($icon_custom_size != '') {
            $icons_param_array[] = "custom_size='" . $icon_custom_size . "'";
        }

        if($type == 'with_custom_icon' && $custom_icon != '') {
            if (is_numeric($custom_icon)) {
                $custom_icon_src = wp_get_attachment_url($custom_icon);
            } else {
                $custom_icon_src = $custom_icon;
            }
        }


        $icon_position = '50';
        if ($type == 'with_custom_icon' && $custom_icon != '') {
            $custom_icon_dimensions_array = pitch_qode_get_image_dimensions($custom_icon_src);
            if (count($custom_icon_dimensions_array)) {
                $icon_position = -$custom_icon_dimensions_array["height"]/2;
            }
        }
        else {
            if ($icon_shape_size != '') {
                $icons_param_array[] = "shape_size='" . $icon_shape_size . "'";
                // icon has to be on the middle
                if ($icon_type != 'normal') {
                    $icon_position = (-$icon_shape_size / 2);
                } else {
                    $icon_position = (-$icon_custom_size / 2);
                }
            }
        }

        if ($icon_color != '') {
            $icons_param_array[] = "icon_color='" . $icon_color . "'";
        }
        if ($icon_background_color != '') {
            $icons_param_array[] = "background_color='" . $icon_background_color . "'";
        }
        if ($icon_border_color != '') {
            $icons_param_array[] = "border_color='" . $icon_border_color . "'";
        }
        if ($icon_border_radius != '') {
            $icons_param_array[] = "border_radius='" . $icon_border_radius . "'";
        }
        if ($icon_border_width != '') {
            $icons_param_array[] = "border_width='" . $icon_border_width . "'";
        }
        if ($hover_icon_color != '') {
            $icons_param_array[] = "hover_icon_color='" . $hover_icon_color . "'";
        }
        if ($hover_icon_border_color != '') {
            $icons_param_array[] = "hover_border_color='" . $hover_icon_border_color . "'";
        }
        if ($hover_icon_background_color != '') {
            $icons_param_array[] = "hover_background_color='" . $hover_icon_background_color . "'";
        }
		
		if($link != ""){
			$icons_param_array[] ="link='" .$link. "'";
		}
		if($target != ""){
			$icons_param_array[] ="target='" .$target. "'";
		}
		if($target != ""){
			$icons_param_array[] ="anchor_icon='" .$icon_anchor. "'";
		}
		
		$icon_link_classes = "";
		if ($icon_anchor == "yes" && $type == 'with_custom_icon') {
            $icon_link_classes .= 'class="anchor"';
        }
		

        $html .= '<div class="' . esc_attr($separator_classes) . '" '.pitch_qode_get_inline_style($separator_styles).'>';
        $html .= '<div class="q_icon_holder" style="bottom:' . esc_attr($icon_position) . 'px;">';

        $html .= '<div class="q_separator_icon_holder">';

        if ($separator_icon_position == 'right' || $separator_icon_position == 'center') {
            $html .= '<div class="q_line_before"  style="' . esc_attr(implode(';', $separator_lines_styles) . ';' . $icon_right_margin) . '"></div>';
        }

        if($type == 'with_icon'){
            $html .= do_shortcode('[no_icons ' . implode(' ', $icons_param_array) . ']');
        }
        elseif($type == 'with_custom_icon'){
			if($link != "") {
				$html .= '<div class="separator_custom_icon"><a href="'.esc_url($link).'" target="'.esc_attr($target).'" '.$icon_link_classes.'><img src="' . esc_url($custom_icon_src) . '" alt="' . esc_attr__( 'Custom Icon', 'select-core' ) . '" /></a></div>';
			}
			else {
				$html .= '<span><img src="' . esc_url($custom_icon_src) . '" alt="' . esc_attr__( 'Custom Icon', 'select-core' ) . '" /></span>';
			}
		}

        if ($separator_icon_position == 'left' || $separator_icon_position == 'center') {
            $html .= '<div class="q_line_after"  style="' . esc_attr(implode(';', $separator_lines_styles) . ';' . $icon_left_margin) . '"></div>';
        }

        $html .= '</div>'; //close separator_icon_holder

        $html .= '</div>'; //close qode_icon_holder
        $html .= '</div>'; // $separator_classes

        return $html;
    }

    add_shortcode('no_separator_with_icon', 'no_separator_with_icon');
}

if (!function_exists('no_video')) {

    function no_video($atts, $content = null) {
        $args = array(
            'webm' => "",
            'mp4' => "",
            "ogv" => "",
            'loop' => "false",
            'autoplay' => "true"
        );

        extract(shortcode_atts($args, $atts));
		$shortcode_options = '';
		if($webm != ''){
			$shortcode_options .= 'webm = '.$webm.' ';
		}
		if($mp4 != ''){
			$shortcode_options .= 'mp4 = '.$mp4.' ';
		}
		if($ogv != ''){
			$shortcode_options .= 'ogv = '.$ogv.' ';
		}
		if($loop != ''){
			$shortcode_options .= 'loop = '.$loop.' ';
		}
		if($autoplay != ''){
			$shortcode_options .= 'autoplay = '.$autoplay.' ';
		}
		
		$html = '';
		$html .= '<div class = "qodef-video-wrapper">';
		$html .= do_shortcode("[video $shortcode_options]");
		$html .= '</div>';
        return $html;
    }

    add_shortcode('no_video', 'no_video');
}

/* Blog Carousel shortcode */

if (!function_exists('no_blog_carousel')) {
    function no_blog_carousel($atts, $content = null) {
        $args = array(
            "type" => "",
            "hover_box_color" => "",
            "order_by" => "date",
            "order" => "ASC",
            "number" => "-1",
            "blogs_shown" => "",
            "category" => "",
            "selected_projects" => "",
            "post_info_color" => "",
            "show_author" => "yes",
            "author_color" => "",
            "show_date" => "yes",
            "date_position" => "above",
            "date_color" => "",
            "show_categories" => "yes",
            "category_color" => "",
            "title_tag" => "h3",
            "title_color" => "",
            "image_size" => "full",
            "enable_navigation" => "",
            "pager_navigation" => "",
            "show_separator" => "no",
            "separator_color" => "",
            "separator_thickness" => "",
            "separator_width" => "",
            "add_class" => ""
        );
        extract(shortcode_atts($args, $atts));

        $hover_box_color = esc_attr($hover_box_color);
        $number = esc_attr($number);
        $category = esc_attr($category);
        $selected_projects = esc_attr($selected_projects);
        $date_color = esc_attr($date_color);
        $category_color = esc_attr($category_color);
        $title_color = esc_attr($title_color);
        $add_class = esc_attr($add_class);

        $headings_array = array('h2', 'h3', 'h4', 'h5', 'h6');

        //get correct heading value. If provided heading isn't valid get the default one
        $title_tag = (in_array($title_tag, $headings_array)) ? $title_tag : $args['title_tag'];

        $html = '';
        $data_attribute = "";
        $separator_style = "";

        if ($blogs_shown !== "") {
            $data_attribute .= " data-blogs_shown='" . $blogs_shown. "'";
        }

        $title_color_style = '';

        if ($title_color != "") {
            $title_color_style .= 'style="';
            $title_color_style .= 'color: ' . $title_color . ';';
            $title_color_style .= '"';
        }

        $category_style = '';
        if ($category_color != '') {
            $category_style = 'style="color: ' . $category_color . ';"';
        }

        $hover_box_style = "";

        if ($hover_box_color != '') {
            $hover_box_style = 'background-color:' . $hover_box_color . '; ';
        }

        $date_style = "";
        if ($date_color !== "") {
            $date_style .= 'color: ' . $date_color . ';';
        }

        $date_style = 'style= "'.$date_style.'"';

        $author_style = "";
        if ($author_color != ""){
            $author_style .= 'color: ' . $author_color .'; ';
        }

		if ($show_separator == 'yes') {
			if ($separator_color != '') {
				$separator_style .= 'background-color: ' . $separator_color . '; ';
			}
			if ($separator_thickness != '') {
				$separator_thickness = (strstr($separator_thickness, 'px', true)) ? $separator_thickness : $separator_thickness . 'px';
				$separator_style .= 'height: ' . $separator_thickness .';';
			}
			if ($separator_width != '') {
				$separator_width = (strstr($separator_width, 'px', true)) ? $separator_width : $separator_width . 'px';
				$separator_style .= 'width: ' . $separator_width .';';
			}
		}


        //get proper image size
        switch ($image_size) {
            case 'landscape':
                $thumb_size = 'qode-pitch-portfolio-landscape';
                break;
            case 'portrait':
                $thumb_size = 'qode-pitch-portfolio-portrait';
                break;
            default:
                $thumb_size = 'full';
                break;
        }


        $html .= "<div class='blog_slider_holder clearfix " . $add_class . "'><div class='blog_slider'" . $data_attribute . "><ul class='blog_slides'>";

        if ($category == "") {
            $q = array(
	            'post_status' => 'publish',
                'post_type' => 'post',
                'orderby' => $order_by,
                'order' => $order,
                'posts_per_page' => $number
            );
        } else {
            $q = array(
	            'post_status' => 'publish',
                'post_type' => 'post',
                'category_name' => $category,
                'orderby' => $order_by,
                'order' => $order,
                'posts_per_page' => $number
            );
        }

        $project_ids = null;
        if ($selected_projects != "") {
            $project_ids = explode(",", $selected_projects);
            $q['post__in'] = $project_ids;
        }

        $blog_query = new WP_Query($q);

        if ($blog_query->have_posts()) : $postCount = 0;
            while ($blog_query->have_posts()) : $blog_query->the_post();


                $html .= "<li class='item'>";
                $html .= '<div class="item_holder">';

                switch($type) {
                    case 'info_in_bottom':

                        $html .= '<div class="blog_text_holder blog_slider_info_in_bottom" ' . pitch_qode_get_inline_style($hover_box_style) . '>';
                        $html .= '<div class="blog_text_holder_outer">';

                        $html .= '<div class="blog_text_holder_inner">';

                        $html .= '<' . $title_tag . ' class="blog_slider_title" ><a href="' . get_permalink() . '" ' . $title_color_style . '>' . get_the_title() . '</a></' . $title_tag . '>';

                        if ($show_date == 'yes' || $show_author=='yes' || $show_categories == 'yes') {

                            $post_info_style = "";
                            if ($post_info_color != ''){
                                $post_info_style = 'color: ' . $post_info_color . '; ';
                            }

                            $html.= '<div class = "blog_slider_post_info" ' . pitch_qode_get_inline_style($post_info_style) . '>';

                            if ($show_date == 'yes') {
                                $html .= '<span class="blog_slider_date_holder" ' . $date_style . '>';
                                $html .= get_the_time('j M');
                                $html .= '</span>';
                            }

                            if ($show_author == 'yes') {
                                $html .= '<span class="blog_slider_author_holder">' . esc_html__( "by ", "select-core") . '<a href="' . get_author_posts_url(get_the_author_meta("ID")) . '" ' . pitch_qode_get_inline_style($author_style) . '>' . get_the_author_meta("display_name") . '</a></span>';
                            }

                            if ($show_categories == 'yes') {
                                $html .= '<div class="blog_slider_categories">' . esc_html__( "in ", "select-core");


                                // get categories for specific article
                                $category_html = "";
                                $k = 1;
                                $cat = get_the_category();

                                foreach ($cat as $cats) {
                                    $category_html = "$cats->name";
                                    if (count($cat) != $k) {
                                        $category_html .= ', ';
                                    }
                                    $html .= '<a class="blog_project_category" ' . $category_style . ' href="' . get_category_link($cats->term_id) . '">' . $category_html . ' </a> ';
                                    $k++;
                                }

                                $html.= '</div>';
                            }
                            $html .= '</div>'; //blog_slider_post_info
                        }

                        $html .= '</div>'; // blog_text_holder_inner
                        $html .= '</div>';  // blog_text_holder_outer
                        $html .= '</div>'; // blog_text_holder

                        $html .= '<div class="blog_image_holder">';
                        $html .= '<span class="image">';
                        $html .= get_the_post_thumbnail(get_the_ID(), $thumb_size);
                        $html .= '</span>';
                        $html .= '</div>'; // close blog_image_holder

                    break;

                    default:

                        $info_type_class = "";
                        if ($type == "info_always") {
                            $info_type_class = "slider_info_always";
                        }

                        $html .= '<div class="blog_text_holder blog_slider_default ' . $info_type_class . '" ' . pitch_qode_get_inline_style($hover_box_style) . '>';
                        $html .= '<div class="blog_text_holder_outer">';

                        $html .= '<div class="blog_text_holder_inner">';

                        if ($show_date == 'yes' && $date_position == 'above') {
                            $html .= '<span class="blog_slider_date_holder" ' . $date_style . '>';
                            $html .= get_the_time('F d, Y');
                            $html .= '</span>';
                        }


                        $html .= '<' . $title_tag . ' class="blog_slider_title" ><a href="' . get_permalink() . '" ' . $title_color_style . '>' . get_the_title() . '</a></' . $title_tag . '>';

                        if ($show_separator == 'yes') {
                        	$html .= '<span class="blog_slider_separator" '. pitch_qode_get_inline_style($separator_style) . '></span>';
                        }

                        if ($show_date == 'yes' && $date_position == 'below') {
                            $html .= '<span class="blog_slider_date_holder" ' . $date_style . '>';
                            $html .= get_the_time('F d, Y');
                            $html .= '</span>';
                        }

                        if ($show_categories == 'yes') {
                            $html .= '<div class="blog_slider_categories">';


                            // get categories for specific article
                            $category_html = "";
                            $k = 1;
                            $cat = get_the_category();

                            foreach ($cat as $cats) {
                                $category_html = "$cats->name";
                                if (count($cat) != $k) {
                                    $category_html .= ' / ';
                                }
                                $html .= '<a class="blog_project_category" ' . $category_style . ' href="' . get_category_link($cats->term_id) . '">' . $category_html . ' </a> ';
                                $k++;
                            }

                            $html.= '</div>';
                        }

                        $html .= '</div>'; // blog_text_holder_inner
                        $html .= '</div>';  // blog_text_holder_outer
                        $html .= '</div>'; // blog_text_holder

                        $html .= '<div class="blog_image_holder">';
                        $html .= '<span class="image">';
                        $html .= get_the_post_thumbnail(get_the_ID(), $thumb_size);
                        $html .= '</span>';
                        $html .= '</div>'; // close blog_image_holder

                    break;

                }

                $html .= '</div>'; // close item_holder
                $html .= "</li>";

                $postCount++;

            endwhile;

        else:
            $html .= esc_html__( 'Sorry, no posts matched your criteria.', 'select-core');
        endif;

        wp_reset_postdata();

        $html .= "</ul>";
        if ($enable_navigation) {

            $icon_navigation_class = 'arrow_carrot-';
            if (pitch_qode_options()->getOptionValue( 'carousel_navigation_arrows_type' ) != '') {
                $icon_navigation_class = pitch_qode_options()->getOptionValue( 'carousel_navigation_arrows_type' );
            }

            $direction_nav_classes = pitch_qode_horizontal_slider_icon_classes($icon_navigation_class);
            $random_number = rand();

            $html .= '<ul class="caroufredsel-direction-nav"><li><a id="caroufredsel-prev-'.$random_number.'" class="caroufredsel-prev" href="#"><span class="' .$direction_nav_classes['left_icon_class']. '"></span></a></li><li><a class="caroufredsel-next" id="caroufredsel-next-'.$random_number.'" href="#"><span class="' .$direction_nav_classes['right_icon_class']. '"></span></a></li></ul>';
        }

        if ($pager_navigation == "yes") {
            $html .= '<div id="blog_slider_pager-'.$random_number.'" class="blog_slider_pager"></div>';
        }
        $html .= "</div></div>";

        return $html;
    }

    add_shortcode('no_blog_carousel', 'no_blog_carousel');
}

/* Blog Slider shortcode */

if (!function_exists('no_blog_slider')) {
    function no_blog_slider($atts, $content = null) {
        $args = array(
			"type" => "center",
            "order_by" => "date",
            "order" => "ASC",
            "number" => "-1",
			"title_tag" => "h3",
			"image_size" => "full",
			"image_width" => "",
			"image_height" => "",
            "category" => "",
            "selected_projects" => "",
			"show_category" => "yes",
			"show_author" => "yes",
			"show_date" => "yes",
			"show_comments" => "",
			"show_read_more" => "yes"
        );
        extract(shortcode_atts($args, $atts));
		
        $number = esc_attr($number);
        $category = esc_attr($category);
        $selected_projects = esc_attr($selected_projects);
		$show_category = esc_attr($show_category);
		$show_author = esc_attr($show_author);
		$show_date = esc_attr($show_date);
		$show_read_more = esc_attr($show_read_more);
		
		$headings_array = array('h2', 'h3', 'h4', 'h5', 'h6');

        //get correct heading value. If provided heading isn't valid get the default one
        $title_tag = (in_array($title_tag, $headings_array)) ? $title_tag : $args['title_tag'];
		
		//get proper image size
        switch ($image_size) {
            case 'landscape':
                $thumb_size = 'qode-pitch-portfolio-landscape';
                break;
            case 'portrait':
                $thumb_size = 'qode-pitch-portfolio-portrait';
                break;
            default:
                $thumb_size = 'full';
                break;
        }

        $html = "";
		
        $html .= "<div class=' blog_slider_simple_holder flexslider clearfix'><ul class='slides'>";

        if ($category == "") {
            $q = array(
                'post_type' => 'post',
                'orderby' => $order_by,
                'order' => $order,
                'posts_per_page' => $number
            );
        } else {
            $q = array(
	            'post_status' => 'publish',
                'post_type' => 'post',
                'category_name' => $category,
                'orderby' => $order_by,
                'order' => $order,
                'posts_per_page' => $number
            );
        }

		$info_position_class = "";
		if ($type == "bottom"){
			$info_position_class .= "title_info_bottom";
		}

        $project_ids = null;
        if ($selected_projects != "") {
            $project_ids = explode(",", $selected_projects);
            $q['post__in'] = $project_ids;
        }

		$blog_query = new WP_Query($q);

        if ($blog_query->have_posts()) : $postCount = 0;
            while ($blog_query->have_posts()) : $blog_query->the_post();
				$html .= '<li>';
				$html .= '<div class = "blog_post_holder">';
				$html .= '<div class = "blog_image_holder">';
				$html .= '<span class = "image">';
				if ($image_size !== 'custom' || $image_width == '' || $image_height == ''){
					$html.= get_the_post_thumbnail(get_the_ID(), $thumb_size);
				}
				else{
					$html.= pitch_qode_generate_thumbnail(get_post_thumbnail_id(get_the_ID()),null,$image_width,$image_height);
				}
				$html .= '</span>';
				$html .= '</div>';//close blog_image_holder div
				$html .= '<div class = "blog_text_wrapper '.esc_attr($info_position_class).'">';
				$html .= '<div class = "blog_text_holder_outer">';
				$html .= '<div class = "blog_text_holder_inner">';
				$html .= '<div class = "blog_text_holder_inner2">';
				if ($type == 'bottom'){
					$html .= '<div class = "blog_text_date_holder">';
					if($show_date == "yes"){
						$html .= '<div class="post_info_item date">';
						$html .= '<span class="date_day">' . get_the_time('d') .'</span>';
						$html .= '<span class="date_month">' . get_the_time('M') .'</span>';
						$html .= '</div>';
					}
					$html .= '<div class="blog_text_info_holder">';
					$html .= '<'.$title_tag.'  class= "blog_slider_simple_title" ><a href="' . get_permalink() . '">' . get_the_title() . '</a></'.$title_tag.'>';
					if($show_category == "yes" || $show_author == "yes" || $show_comments == "yes"){
						$html .= '<div class="blog_slider_simple_info">';
						if($show_category == "yes"){
							$html .= '<div class = "post_info_item category" >';
								// get categories for specific article
									  $cat_html = "";
									  $k = 1;
									  $cat = get_the_category();

									  foreach ($cat as $cats) {
										  $cat_html = "$cats->name";
										  if (count($cat) != $k) {
											  $cat_html .= ', ';
										  }
										  $html .= '<a class="blog_simple_slider_category" href="' . get_category_link($cats->term_id) . '">' . $cat_html . ' </a> ';
										  $k++;
									  }
							$html .= '</div>'; //close post_info_item category div
						}
                        if ($show_comments == "yes") {
                          $comments_count = get_comments_number();

                            switch ($comments_count) {
                                case 0:
                                    $comments_count_text = esc_html__( 'No comment', 'select-core');
                                    break;
                                case 1:
                                    $comments_count_text = $comments_count . ' ' . esc_html__( 'Comment', 'select-core');
                                    break;
                                default:
                                    $comments_count_text = $comments_count . ' ' . esc_html__( 'Comments', 'select-core');
                                    break;
                            }
                            $html .= '<div class="post_info_item comments"> ';
                            $html .= '<a class="post_comments" href="' . esc_url(get_comments_link()) . '">';
                            $html .= $comments_count_text;
                            $html .= '</a></div>'; //close post_comments
                        }
						if($show_author == "yes"){
							$html .= '<div class = "post_info_item author" >';
							$html .= '<a href="' . get_author_posts_url(get_the_author_meta("ID")) . '" >' . get_the_author_meta("display_name") . '</a>';				
							$html .= '</div>'; //close post_info_item author div
						}
						$html .= '</div>'; //close blog_slider_simple_info div
					}
					if($show_read_more == "yes"){
						$html .= '<div class = "read_more_wrapper">';
						$html .= '<a href="'.get_the_permalink().'" target="_self" class="qbutton small read_more_button">'.esc_html__( "Read More", "select-core").'</a>';
						$html .= '</div>'; //close read_more_wrapper div
					}
					$html .= '</div>'; //closed blog_text_info_holder
					$html .= '</div>'; //closed blog_text_date_holder
				}
				else{
					$html .= '<'.$title_tag.'  class= "blog_slider_simple_title" ><a href="' . get_permalink() . '">' . get_the_title() . '</a></'.$title_tag.'>';
					if($show_category == "yes" || $show_author == "yes" || $show_date == "yes" || $show_comments == "yes"){
						$html .= '<div class="blog_slider_simple_info">';
						if($show_category == "yes"){
							$html .= '<div class = "post_info_item category" >';
								// get categories for specific article
									  $cat_html = "";
									  $k = 1;
									  $cat = get_the_category();

									  foreach ($cat as $cats) {
										  $cat_html = "$cats->name";
										  if (count($cat) != $k) {
											  $cat_html .= ', ';
										  }
										  $html .= '<a class="blog_simple_slider_category" href="' . get_category_link($cats->term_id) . '">' . $cat_html . ' </a> ';
										  $k++;
									  }
							$html .= '</div>'; //close post_info_item category div
						}
	                    if ($show_comments == "yes") {
	                      $comments_count = get_comments_number();

	                        switch ($comments_count) {
	                            case 0:
	                                $comments_count_text = esc_html__( 'No comment', 'select-core');
	                                break;
	                            case 1:
	                                $comments_count_text = $comments_count . ' ' . esc_html__( 'Comment', 'select-core');
	                                break;
	                            default:
	                                $comments_count_text = $comments_count . ' ' . esc_html__( 'Comments', 'select-core');
	                                break;
	                        }
	                        $html .= '<div class="post_info_item comments"> ';
	                        $html .= '<a class="post_comments" href="' . esc_url(get_comments_link()) . '">';
	                        $html .= $comments_count_text;
	                        $html .= '</a></div>'; //close post_comments
	                    }
						if($show_author == "yes"){
							$html .= '<div class = "post_info_item author" >';
							$html .= '<a href="' . get_author_posts_url(get_the_author_meta("ID")) . '" >' . get_the_author_meta("display_name") . '</a>';				
							$html .= '</div>'; //close post_info_item author div
						}
						if($show_date == "yes"){
							$html .= '<div class = "post_info_item date"><span>' . get_the_time(get_option('date_format')) .'</span></div>';
						}
						$html .= '</div>'; //close blog_slider_simple_info div
					}
					if($show_read_more == "yes"){
						$html .= '<div class = "read_more_wrapper">';
						$html .= '<a href="'.get_the_permalink().'" target="_self" class="qbutton small read_more_button">'.esc_html__( "Read More", "select-core").'</a>';
						$html .= '</div>'; //close read_more_wrapper div
					}
				}
				$html .= '</div>'; //close blog_text_holder_inner2 div
				$html .= '</div>'; //close blog_text_holder_inner div		
				$html .= '</div>'; //close blog_text_holder_outer div
				$html .= '</div>'; //close blog_text_wrapper div
				$html .= '</div>'; //close blog_post_holder div
				$html .= '</li>'; //close li	
                $postCount++;

            endwhile;

        else:
            $html .= esc_html__( 'Sorry, no posts matched your criteria.', 'select-core');
        endif;

        wp_reset_postdata();

        $html .= "</ul></div>";

        return $html;
    }

    add_shortcode('no_blog_slider', 'no_blog_slider');
}

/* Product Slider shortcode */

if (!function_exists('no_product_slider')) {
    function no_product_slider($atts, $content = null) {
        $args = array(
                "product_type" => "recent_products",
                "padding_between" => "no",
                "order_by" => "date",
                "order" => "ASC",
                "number" => "-1",
                "products_shown" => "",
                "enable_navigation" => "",
                "pager_navigation" => "",
                "ids" => "",
                "category" => ""
        );
        extract(shortcode_atts($args, $atts));

        $number = esc_attr($number);
        $ids = esc_attr($ids);
        $category = esc_attr($category);

        $html = "";
        $data_attribute = "";

        // adding padding class
        $with_padding_class = "";
        if ($padding_between == 'yes') {
            $with_padding_class .= "with_padding";
        }

        if ($products_shown !== "") {
            $data_attribute .= " data-products_shown='" . $products_shown. "'";
        }

        $product_slider_param_array = array();
        if (($product_type != 'products' && $product_type != 'best_selling_products') && $order_by !== '') {
            $product_slider_param_array[] = "orderby='" . $order_by . "'";
        }
        if ($product_type != 'best_selling_products' && $order_by !== '') {
            $product_slider_param_array[] = "order='" . $order . "'";
        }
        if ($order_by !== '') {
            $product_slider_param_array[] = "per_page='" . $number . "'";
        }
        if ($product_type == 'products' && $ids !== '') {
            $product_slider_param_array[] = "ids='" . $ids . "'";
        }
        if ($product_type == 'product_category' && $category !== '') {
            $product_slider_param_array[] = "category='" . $category . "'";
        }

        $html .= "<div class='product_slider_holder clearfix'><div class='product_slider ".$with_padding_class."'" . $data_attribute . ">";

        $q = array(
            'post_type' => 'post',
            'orderby' => $order_by,
            'order' => $order,
            'posts_per_page' => $number
        );


        $html .= do_shortcode('['.$product_type.' ' . implode(' ', $product_slider_param_array) . ']');

        if ($enable_navigation === 'yes') {

            $icon_navigation_class = 'arrow_carrot-';
            if (pitch_qode_options()->getOptionValue( 'carousel_navigation_arrows_type' ) != '') {
                $icon_navigation_class = pitch_qode_options()->getOptionValue( 'carousel_navigation_arrows_type' );
            }

            $direction_nav_classes = pitch_qode_horizontal_slider_icon_classes($icon_navigation_class);
            $random_number = rand();

            $html .= '<ul class="caroufredsel-direction-nav"><li><a id="caroufredsel-prev-'.$random_number.'" class="caroufredsel-prev" href="#"><span class="' .$direction_nav_classes['left_icon_class']. '"></span></a></li><li><a class="caroufredsel-next" id="caroufredsel-next-'.$random_number.'" href="#"><span class="' .$direction_nav_classes['right_icon_class']. '"></span></a></li></ul>';
        }

        if ($pager_navigation === "yes") {
            $html .= '<div id="product_slider_pager-'.$random_number.'" class="product_slider_pager"></div>';
        }
        $html .= "</div></div>"; //close product_slider ,close product_slider_holder

        return $html;
    }

    add_shortcode('no_product_slider', 'no_product_slider');
}

/* Select Parallax Layers */

if (!function_exists('no_parallax_layers')) {
    function no_parallax_layers($atts, $content = null) {
        $args = array(
            "images" => "",
			"full_screen" => "",
            "height" => "500"
        );

        extract(shortcode_atts($args, $atts));

        $images = esc_attr($images);
		$height = esc_attr($height);

        //init variables
        $html = "";
        $parallax_layers_data_styles = '';
		$parallax_layers_holder_styles = '';
        $parallax_layers_holder_classes = '';

        //is full screen height for the slider set?
        if ($full_screen == 'yes') {
            $parallax_layers_holder_classes .= ' full_screen_height';
        }

        //is height for the slider set?
        if ($height !== '' && $full_screen == 'no') {
            $parallax_layers_holder_styles .= 'height: ' . $height . 'px;';
			$parallax_layers_data_styles = 'data-height="' . $height . '"';
        }

        $html .= "<div class='qode_parallax_layers " . $parallax_layers_holder_classes . "' style='" . $parallax_layers_holder_styles . "' ".$parallax_layers_data_styles."><div class='qode_parallax_layers_holder preload_parallax_layers'>";

        if ($images != '') {
            $parallax_images_array = explode(',', $images);
        }

        if (isset($parallax_images_array) && count($parallax_images_array) != 0) {
            
            foreach ($parallax_images_array as $pimg_id) {

                $pimage_src = wp_get_attachment_image_src($pimg_id, 'full', true);
                $pimage_alt = get_post_meta($pimg_id, '_wp_attachment_image_alt', true);
                $pimage_src = $pimage_src[0];
                          
                $html .= '<div class="image" style="background-image:url(' . $pimage_src . ');" ></div>';
            }
        }
		
		if($content != ""){
            $html .= '<div class="paralax_layers_content_holder"><div class="paralax_layers_content"><div class="paralax_layers_content_inner"><div class="container_inner">'.do_shortcode($content).'</div></div></div></div>';
		}

        $html .= '</div></div>';

        return $html;
    }

    add_shortcode('no_parallax_layers', 'no_parallax_layers');
}

/* Numbered Image shortcode */

if (!function_exists('no_numbered_image')) {

    function no_numbered_image($atts, $content = null) {
        $args = array(
            'image' => '',
            'number' => '',
            'number_color' => '',
            'stripe_color' => ''
        );

        extract(shortcode_atts($args, $atts));

        $image = esc_attr($image);
        $number = esc_attr($number);
        $number_color = esc_attr($number_color);
        $stripe_color = esc_attr($stripe_color);

        $html = "";
        $stripe_style = "";
        $number_style = "";

        if (is_numeric($image)) {
            $image_src = wp_get_attachment_url($image);
        } else {
            $image_src = $image;
        }

        if($stripe_color != '') {
            $stripe_style .= 'background-color: ' . $stripe_color;
        }

        if($number != '' && $number_color != '') {
            $number_style = 'color: ' . $number_color;
        }

        $html .= '<div class="numbered_image_holder">';
        $html .= '<div class="image_holder_inner animate">';
        $html .= '<img src="' . $image_src . '" alt="' . esc_attr__( 'Image', 'select-core' ) . '" />';
        $html .= '</div>';
        $html .= '<div class="stripe_holder"  style="' . $stripe_style . '">';
        $html .= '<div class="number_holder">';
        $html .= '<span class="image_number" style="' . $number_style . '">';
        $html .= $number;
        $html .= '</span>';
        $html .= '</div>';
        $html .= '</div>';
        $html .= '</div>';

        return $html;
    }

    add_shortcode('no_numbered_image', 'no_numbered_image');
}

/* Merging Image shortcode */

if (!function_exists('no_merging_image')) {

    function no_merging_image($atts, $content = null) {
        $args = array(
            'height' => '',
            'ver_img_1' => '',
            'ver_img_2' => '',
            'ver_img_3' => '',
            'ver_img_4' => '',
            'hor_img_1' => '',
            'hor_img_2' => ''
        );

        extract(shortcode_atts($args, $atts));

        $html = 
            '<div class="qode_merging_image"'.(!empty($height) ? ' style="height: '.esc_attr($height).'px;"' : '').'>' .
                '<div class="qode_mi_vert_img">'.(!empty($ver_img_1) ? wp_get_attachment_image($ver_img_1,'full') : '').'</div>' .
                '<div class="qode_mi_vert_img">'.(!empty($ver_img_2) ? wp_get_attachment_image($ver_img_2,'full') : '').'</div>' .
                '<div class="qode_mi_vert_img">'.(!empty($ver_img_3) ? wp_get_attachment_image($ver_img_3,'full') : '').'</div>' .
                '<div class="qode_mi_vert_img">'.(!empty($ver_img_4) ? wp_get_attachment_image($ver_img_4,'full') : '').'</div>' .
                '<div class="qode_mi_hor_img">'.(!empty($hor_img_1) ? wp_get_attachment_image($hor_img_1,'full') : '').'</div>' .
                '<div class="qode_mi_hor_img">'.(!empty($hor_img_2) ? wp_get_attachment_image($hor_img_2,'full') : '').'</div>' .
            '</div>'
        ;

        return $html;
    }

    add_shortcode('no_merging_image', 'no_merging_image');
}
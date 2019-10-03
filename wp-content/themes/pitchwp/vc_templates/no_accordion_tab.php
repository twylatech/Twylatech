<?php
$output = '';
$html_icon = '';

$args = array(
	'title'						=> esc_html__("Accordion Title", "pitch"),
	'title_color'				=> "",
	'title_hover_color'			=> "",
	'mark_icon_color'			=> "",
	'mark_icon_color_hover'		=> "",
	'background_color'			=> "",
	'background_hover_color'	=> "",
	'border_color'				=> "",
	'border_hover_color'		=> "",
	'hide_icon'					=> "no",
	'title_tag'					=> 'h4',
	'el_id' => ''
);

$args = array_merge($args, pitch_qode_icon_collections()->getShortcodeParams());

extract(shortcode_atts($args, $atts));

$title = esc_html($title);
$title_color = esc_attr($title_color);
$title_tag = esc_attr($title_tag);
$mark_icon_color = esc_html($mark_icon_color);
$mark_icon_color_hover = esc_attr($mark_icon_color_hover);
$title_hover_color = esc_attr($title_hover_color);
$background_color = esc_attr($background_color);
$background_hover_color = esc_attr($background_hover_color);
$border_color = esc_attr($border_color);
$border_hover_color = esc_attr($border_hover_color);

$css_class = apply_filters(VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, 'wpb_accordion_section group', $this->settings['base']);
	$heading_styles = '';
	$data_attr = '';
	
	
	if($title_color != "") {
	   $data_attr .= " data-title-color='" . $title_color . "'";	
       $heading_styles .= "color: ".$title_color.";";
    }  
	
	if($title_hover_color != "") {
       $data_attr .= " data-title-hover-color='" . $title_hover_color . "'";
	}
	
	if($title_tag == ""){
    	$title_tag = "h4";
    }
	 	
	if($mark_icon_color != "") {		
	   $data_attr .= " data-mark-icon-color='" . $mark_icon_color . "'";
    }  
	
	if($mark_icon_color_hover != "") {
       $data_attr .= " data-mark-icon-hover-color='" . $mark_icon_color_hover . "'";
    }
	
	if($background_color != "") {
        $heading_styles .= " background-color: ".$background_color.";";
		$data_attr .= " data-background-color='" . $background_color . "'";
    }
	
	if($background_hover_color != "") {
       $data_attr .= " data-background-hover-color='" . $background_hover_color . "'";
    }
	
	if($border_color != "") {
        $heading_styles .= " border-color: ".$border_color.";";
		$data_attr .= " data-border-color='" . $border_color . "'";
    }
	
	if($border_hover_color != "") {
       $data_attr .= " data-border-hover-color='" . $border_hover_color . "'";
    }

	if($hide_icon != 'yes') {
		$icon_collection_obj = pitch_qode_icon_collections()->getIconCollection($icon_pack);

		if (method_exists($icon_collection_obj, 'render')) {

			$html_icon .= $icon_collection_obj->render(${$icon_collection_obj->param}, array(
				'icon_attributes' => array(
					'style' => '',
					'class' => 'accordion_tab_icon '
				)
			));

		}
	}


    $output .= "\n\t\t\t\t" . '<'.$title_tag.' class="clearfix title-holder" style="'.$heading_styles.'" '. $data_attr .'>';

	$output .= '<span class="accordion_mark left_mark"><span class="accordion_mark_icon"><span class="arrow_carrot-down"></span><span class="arrow_carrot-up"></span></span></span>';
	$output .= '<span class="tab-title"><span class="tab-title-inner">'.$title.'</span>';
	if($hide_icon != 'yes') {
		$output .= $html_icon;
	}
	$output .= '</span>';
	$output .= '</'.$title_tag.'>';
    $output .= "\n\t\t\t\t" . '<div ' . ( isset( $el_id ) && ! empty( $el_id ) ? "id='" . esc_attr( $el_id ) . "'" : "" ) . ' class="accordion_content">';
		$output .= "\n\t\t\t" . '<div class="accordion_content_inner">';
			$output .= ($content=='' || $content==' ') ? esc_html__("Empty section. Edit page to add content here.", "pitch") : "\n\t\t\t\t" . wpb_js_remove_wpautop($content);
			$output .= "\n\t\t\t" . '</div>';
		 $output .= "\n\t\t\t\t" . '</div>' . $this->endBlockComment('.wpb_accordion_section') . "\n";

print pitch_qode_get_module_part($output);
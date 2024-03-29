<?php
$output = '';
extract(shortcode_atts(array(
    'el_class' 		                => '',
    'type' 			                => '',
    'position' 		                => '',
    'color' 		                => '',
    'border_style' 	                => '',
    'up' 			                => '',
	'up_style'						=> 'px',
    'down' 			                => '',
	'down_style'					=> 'px',
    'thickness' 	                => '',
    'width' 		                => '',

), $atts));

$el_class = esc_attr($el_class);
$color = esc_attr($color);
$up = esc_attr($up);
$down = esc_attr($down);
$up_style = esc_attr($up_style);
$down_style = esc_attr($down_style);
$thickness = esc_attr($thickness);
$width = esc_attr($width);

$css_class = apply_filters(VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, 'separator', $this->settings['base']);

$separator_classes = "";
$separator_styles  = array();

$separator_classes .= $css_class." ".$el_class." ";
$separator_classes .= $type." ";
$separator_classes .= $position." ";

if($color != "" && $type != "transparent") {
    $separator_styles[] = "border-color: ".$color;
}

if($thickness != "") {
    $separator_styles[] = "border-bottom-width:". $thickness ."px";
}

if($width != ""){
    $separator_styles[]= "width:". $width ."px";
}

if($up != ""){
    $separator_styles[] = "margin-top:". $up.$up_style;
}

if($down != ""){	
    $separator_styles[] = "margin-bottom:". $down.$down_style;
	
}

if($border_style != "") {
    $separator_styles[] = "border-style: ".$border_style;
}

$output .= '<div class="'.$separator_classes.' " style="'.implode(';', $separator_styles).'">';

$output .= '</div>'.$this->endBlockComment('separator')."\n";

print pitch_qode_get_module_part($output);
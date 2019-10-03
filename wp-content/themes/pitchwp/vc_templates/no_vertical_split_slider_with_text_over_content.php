<?php

$args = array(
    "background_image" => "",
	"link" => "",
    "target" => "_self"
);

$html = "";
$qode_splitted_item_style = "";

extract(shortcode_atts($args, $atts));

$background_image = esc_attr($background_image);
$link = esc_url($link);
$target = esc_attr($target);

if($background_image != "") {
    $qode_splitted_item_style .= "style='";
    if ($background_image != "") {
        $background_image_src = wp_get_attachment_url( $background_image );
        $qode_splitted_item_style .= "background-image:url(".$background_image_src.");";
    }
    $qode_splitted_item_style .= "'";
}

if($target == "") {
	$target = "_self";
}

$html .= "<div class='ms-section' ".$qode_splitted_item_style.">";
if($link != "") {
$html .= "<a href='" . esc_url($link) . "' target='" . esc_attr($target) . "'></a>";
}
$html .= "</div>";
print pitch_qode_get_module_part($html);


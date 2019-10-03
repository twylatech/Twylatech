<?php

$args = array(
    "image"         => "",
    "link"          => "",
    "link_target"   => "_self"
);

extract(shortcode_atts($args, $atts));

$html = '';
$image_src = '';
$image_alt = '';

$link = esc_url($link);

if (is_numeric($image)) {
    $image_src = wp_get_attachment_url($image);
    $image_alt = esc_attr(get_post_meta($image, '_wp_attachment_image_alt', true));
}

if($image_src != "") {
   
    $link = ($link != "") ? $link : "javascript: void(0)";

    $html .= '<div class="qode_client_holder">';
		$html .= '<div class="qode_client_holder_inner">';
			$html .= '<div class="qode_client_image_holder grayscale">';
				$html .= '<a href="'.esc_url($link).'" target="'.esc_attr($link_target).'">';
					$html .= '<img src="'.esc_url($image_src).'" alt="'.esc_attr($image_alt).'" />';
				$html .= '</a>';
			$html .= '</div>';
		$html .= '</div>';
    $html .= '</div>';
}

print pitch_qode_get_module_part($html);
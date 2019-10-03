<?php
$html = "";

$html = "<div class='ms-right'>";
$html .= do_shortcode($content);
$html .= '</div>';

print pitch_qode_get_module_part($html);


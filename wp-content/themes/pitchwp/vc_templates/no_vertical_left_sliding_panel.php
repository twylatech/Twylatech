<?php
$html = "";

$html = "<div class='ms-left'>";
$html .= do_shortcode($content);
$html .= '</div>';

print pitch_qode_get_module_part($html);


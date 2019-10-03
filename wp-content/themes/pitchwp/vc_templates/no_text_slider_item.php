<?php

$html  = '<li>';
$html .= do_shortcode($content);
$html .= '</li>';

print pitch_qode_get_module_part($html);
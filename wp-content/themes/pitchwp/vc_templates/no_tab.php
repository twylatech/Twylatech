<?php

$output = $title = $tab_id = '';
$icon_pack = '';

$default_attrs = array(
	'title' => 'Tab',
	'tab_id' => ''
);

$default_attrs = array_merge(pitch_qode_icon_collections()->getShortcodeParams(), $default_attrs);

extract(shortcode_atts($default_attrs, $atts));

$title = esc_html($title);

wp_enqueue_script('jquery_ui_tabs_rotate');

$tab_data_str = '';
if(isset($icon_pack) && $icon_pack !== '') {
	$tab_data_str .= 'data-icon-pack="'.$icon_pack.'" ';

	$collection_obj = pitch_qode_icon_collections()->getIconCollection($icon_pack);
	if(is_object($collection_obj) && property_exists($collection_obj, 'param')) {

		$icon_html = esc_attr($collection_obj->render(${$collection_obj->param}));
		 
		$tab_data_str .= 'data-icon-html="'.$icon_html.'"';
	}
}

$css_class =  apply_filters(VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, 'tab-content', $this->settings['base']);
$output .= "\n\t\t\t" . '<div '.$tab_data_str.' id="tab-'. (empty($tab_id) ? sanitize_title( $title ) : $tab_id) .'" class="'.$css_class.'">';
$output .= ($content=='' || $content==' ') ? esc_html__("Empty section. Edit page to add content here.", "pitch") : "\n\t\t\t\t" . wpb_js_remove_wpautop($content);
$output .= "\n\t\t\t" . '</div> ' . $this->endBlockComment('.wpb_tab');

print pitch_qode_get_module_part($output);
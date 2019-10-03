<?php

/*** Removing shortcodes ***/

vc_remove_element("vc_widget_sidebar");
vc_remove_element("vc_wp_search");
vc_remove_element("vc_wp_meta");
vc_remove_element("vc_wp_recentcomments");
vc_remove_element("vc_wp_calendar");
vc_remove_element("vc_wp_pages");
vc_remove_element("vc_wp_tagcloud");
vc_remove_element("vc_wp_custommenu");
vc_remove_element("vc_wp_text");
vc_remove_element("vc_wp_posts");
vc_remove_element("vc_wp_links");
vc_remove_element("vc_wp_categories");
vc_remove_element("vc_wp_archives");
vc_remove_element("vc_wp_rss");
vc_remove_element("vc_teaser_grid");
vc_remove_element("vc_button");
vc_remove_element("vc_cta_button");
vc_remove_element("vc_cta_button2");
vc_remove_element("vc_message");
vc_remove_element("vc_tour");
vc_remove_element("vc_progress_bar");
vc_remove_element("vc_pie");
vc_remove_element("vc_posts_slider");
vc_remove_element("vc_toggle");
vc_remove_element("vc_images_carousel");
vc_remove_element("vc_posts_grid");
vc_remove_element("vc_carousel");
vc_remove_element("vc_gmaps");
vc_remove_element("vc_cta");
vc_remove_element("vc_round_chart");
vc_remove_element("vc_line_chart");
vc_remove_element("vc_tta_accordion");
vc_remove_element("vc_tta_tour");
vc_remove_element("vc_tta_tabs");
vc_remove_element("vc_section");


/***Remove Grid Elements if disabled ***/

if (!pitch_qode_vc_grid_elements_enabled() && version_compare(pitch_qode_get_vc_version(), '4.4.2') >= 0) {
	vc_remove_element('vc_basic_grid');
	vc_remove_element('vc_media_grid');
	vc_remove_element('vc_masonry_grid');
	vc_remove_element('vc_masonry_media_grid');
	vc_remove_element('vc_icon');
	vc_remove_element('vc_button2');
	vc_remove_element("vc_custom_heading");
	vc_remove_element("vc_btn");
}


/*** Remove unused parameters ***/

if (function_exists('vc_remove_param')) {
	vc_remove_param('vc_single_image', 'css_animation');
	vc_remove_param('vc_single_image', 'title');
	vc_remove_param('vc_gallery', 'title');
	vc_remove_param('vc_column_text', 'css_animation');
	vc_remove_param('vc_row', 'video_bg');
	vc_remove_param('vc_row', 'video_bg_url');
	vc_remove_param('vc_row', 'video_bg_parallax');
	vc_remove_param('vc_row', 'full_height');
	vc_remove_param('vc_row', 'content_placement');
	vc_remove_param('vc_row', 'full_width');
	vc_remove_param('vc_row', 'bg_image');
	vc_remove_param('vc_row', 'bg_color');
	vc_remove_param('vc_row', 'font_color');
	vc_remove_param('vc_row', 'margin_bottom');
	vc_remove_param('vc_row', 'bg_image_repeat');
	vc_remove_param( "vc_row", "css" );
	vc_remove_param( "vc_row_inner", "css" );
	vc_remove_param('vc_tabs', 'interval');
	vc_remove_param('vc_tabs', 'title');
	vc_remove_param('vc_separator', 'style');
	vc_remove_param('vc_separator', 'color');
	vc_remove_param('vc_separator', 'accent_color');
	vc_remove_param('vc_separator', 'el_width');
	vc_remove_param('vc_text_separator', 'style');
	vc_remove_param('vc_text_separator', 'color');
	vc_remove_param('vc_text_separator', 'accent_color');
	vc_remove_param('vc_text_separator', 'el_width');
	vc_remove_param('vc_text_separator', 'title_align');
	vc_remove_param('vc_accordion', 'title');
	vc_remove_param('vc_row', 'gap');
    vc_remove_param('vc_row', 'columns_placement');
    vc_remove_param('vc_row', 'equal_height');
    vc_remove_param('vc_row', 'disable_element');
    vc_remove_param('vc_row_inner', 'disable_element');
    vc_remove_param('vc_row_inner', 'gap');
    vc_remove_param('vc_row_inner', 'content_placement');
    vc_remove_param('vc_row_inner', 'equal_height');
    vc_remove_param('vc_row', 'css_animation');

    //remove vc parallax functionality
    vc_remove_param('vc_row', 'parallax');
    vc_remove_param('vc_row', 'parallax_image');

	vc_remove_param('vc_row', 'parallax_speed_video');
	vc_remove_param('vc_row', 'parallax_speed_bg');

	if(version_compare(pitch_qode_get_vc_version(), '4.4.2') >= 0) {
		vc_remove_param('vc_accordion', 'disable_keyboard');
		vc_remove_param('vc_separator', 'align');
		vc_remove_param('vc_separator', 'border_width');
		vc_remove_param('vc_text_separator', 'align');
		vc_remove_param('vc_text_separator', 'border_width');
	}
	
	if(version_compare(pitch_qode_get_vc_version(), '4.7.4') >= 0) {
		add_action( 'init', 'pitch_qode_remove_vc_image_zoom',11);
		function pitch_qode_remove_vc_image_zoom() {
			//Remove zoom from click action on single image
			$param = WPBMap::getParam( 'vc_single_image', 'onclick' );
			unset($param['value']['Zoom']);
			vc_update_shortcode_param( 'vc_single_image', $param );
		}
		vc_remove_param('vc_text_separator', 'css');
		vc_remove_param('vc_separator', 'css');
	}

}


/*** Remove unused parameters from grid elements ***/

if (function_exists('vc_remove_param') && pitch_qode_vc_grid_elements_enabled() && version_compare(pitch_qode_get_vc_version(), '4.4.2') >= 0) {
	vc_remove_param('vc_basic_grid', 'button_style');
	vc_remove_param('vc_basic_grid', 'button_color');
	vc_remove_param('vc_basic_grid', 'button_size');
	vc_remove_param('vc_basic_grid', 'filter_color');
	vc_remove_param('vc_basic_grid', 'filter_style');
	vc_remove_param('vc_media_grid', 'button_style');
	vc_remove_param('vc_media_grid', 'button_color');
	vc_remove_param('vc_media_grid', 'button_size');
	vc_remove_param('vc_media_grid', 'filter_color');
	vc_remove_param('vc_media_grid', 'filter_style');
	vc_remove_param('vc_masonry_grid', 'button_style');
	vc_remove_param('vc_masonry_grid', 'button_color');
	vc_remove_param('vc_masonry_grid', 'button_size');
	vc_remove_param('vc_masonry_grid', 'filter_color');
	vc_remove_param('vc_masonry_grid', 'filter_style');
	vc_remove_param('vc_masonry_media_grid', 'button_style');
	vc_remove_param('vc_masonry_media_grid', 'button_color');
	vc_remove_param('vc_masonry_media_grid', 'button_size');
	vc_remove_param('vc_masonry_media_grid', 'filter_color');
	vc_remove_param('vc_masonry_media_grid', 'filter_style');
	vc_remove_param('vc_basic_grid', 'paging_color');
	vc_remove_param('vc_basic_grid', 'arrows_color');
	vc_remove_param('vc_media_grid', 'paging_color');
	vc_remove_param('vc_media_grid', 'arrows_color');
	vc_remove_param('vc_masonry_grid', 'paging_color');
	vc_remove_param('vc_masonry_grid', 'arrows_color');
	vc_remove_param('vc_masonry_media_grid', 'paging_color');
	vc_remove_param('vc_masonry_media_grid', 'arrows_color');
}


/*** Remove frontend editor ***/

if(function_exists('vc_disable_frontend')){
	vc_disable_frontend();
}

$animations = array(
	esc_html__( "No animations", 'pitch' ) => "",
	esc_html__( "Elements Shows From Left Side", 'pitch' ) => "element_from_left",
	esc_html__( "Elements Shows From Right Side", 'pitch' ) => "element_from_right",
	esc_html__( "Elements Shows From Top Side", 'pitch' ) => "element_from_top",
	esc_html__( "Elements Shows From Bottom Side", 'pitch' ) => "element_from_bottom",
	esc_html__( "Elements Shows From Fade", 'pitch' ) => "element_from_fade"
);
$font_weight_array = array(
	esc_html__( "Default", 'pitch' ) => "",
	esc_html__( "Thin 100", 'pitch' ) => "100",
	esc_html__( "Extra-Light 200", 'pitch' ) => "200",
	esc_html__( "Light 300", 'pitch' ) => "300",
	esc_html__( "Regular 400", 'pitch' ) => "400",
	esc_html__( "Medium 500", 'pitch' ) => "500",
	esc_html__( "Semi-Bold 600", 'pitch' ) => "600",
	esc_html__( "Bold 700", 'pitch' ) => "700",
	esc_html__( "Extra-Bold 800", 'pitch' ) => "800",
	esc_html__( "Ultra-Bold 900", 'pitch' ) => "900"
);
$social_icons_array = array(
	"" => "",
	esc_html__( "ADN", 'pitch' ) => "fa-adn",
	esc_html__( "Android", 'pitch' ) => "fa-android",
	esc_html__( "Apple", 'pitch' ) => "fa-apple",
	esc_html__( "Bitbucket", 'pitch' ) => "fa-bitbucket",
	esc_html__( "Bitbucket-Sign", 'pitch' ) => "fa-bitbucket-sign",
	esc_html__( "Bitcoin", 'pitch' ) => "fa-bitcoin",
	esc_html__( "BTC", 'pitch' ) => "fa-btc",
	esc_html__( "CSS3", 'pitch' ) => "fa-css3",
	esc_html__( "Dribbble", 'pitch' ) => "fa-dribbble",
	esc_html__( "Dropbox", 'pitch' ) => "fa-dropbox",
	esc_html__( "Facebook", 'pitch' ) => "fa-facebook",
	esc_html__( "Facebook-Sign", 'pitch' ) => "fa-facebook-sign",
	esc_html__( "Flickr", 'pitch' ) => "fa-flickr",
	esc_html__( "Foursquare", 'pitch' ) => "fa-foursquare",
	esc_html__( "GitHub", 'pitch' ) => "fa-github",
	esc_html__( "GitHub-Alt", 'pitch' ) => "fa-github-alt",
	esc_html__( "GitHub-Sign", 'pitch' ) => "fa-github-sign",
	esc_html__( "Gittip", 'pitch' ) => "fa-gittip",
	esc_html__( "Google Plus", 'pitch' ) => "fa-google-plus",
	esc_html__( "Google Plus-Sign", 'pitch' ) => "fa-google-plus-sign",
	esc_html__( "HTML5", 'pitch' ) => "fa-html5",
	esc_html__( "Instagram", 'pitch' ) => "fa-instagram",
	esc_html__( "LinkedIn", 'pitch' ) => "fa-linkedin",
	esc_html__( "LinkedIn-Sign", 'pitch' ) => "fa-linkedin-sign",
	esc_html__( "Linux", 'pitch' ) => "fa-linux",
	esc_html__( "MaxCDN", 'pitch' ) => "fa-maxcdn",
	esc_html__( "Paypal", 'pitch' ) => "fa-paypal",
	esc_html__( "Pinterest", 'pitch' ) => "fa-pinterest",
	esc_html__( "Pinterest-Sign", 'pitch' ) => "fa-pinterest-sign",
	esc_html__( "Renren", 'pitch' ) => "fa-renren",
	esc_html__( "Skype", 'pitch' ) => "fa-skype",
	esc_html__( "StackExchange", 'pitch' ) => "fa-stackexchange",
	esc_html__( "Trello", 'pitch' ) => "fa-trello",
	esc_html__( "Tumblr", 'pitch' ) => "fa-tumblr",
	esc_html__( "Tumblr-Sign", 'pitch' ) => "fa-tumblr-sign",
	esc_html__( "Twitter", 'pitch' ) => "fa-twitter",
	esc_html__( "Twitter-Sign", 'pitch' ) => "fa-twitter-sign",
	esc_html__( "VK", 'pitch' ) => "fa-vk",
	esc_html__( "Weibo", 'pitch' ) => "fa-weibo",
	esc_html__( "Windows", 'pitch' ) => "fa-windows",
	esc_html__( "Xing", 'pitch' ) => "fa-xing",
	esc_html__( "Xing-Sign", 'pitch' ) => "fa-xing-sign",
	esc_html__( "YouTube", 'pitch' ) => "fa-youtube",
	esc_html__( "YouTube Play", 'pitch' ) => "fa-youtube-play",
	esc_html__( "YouTube-Sign", 'pitch' ) => "fa-youtube-sign"
);

/*** Accordion ***/

vc_add_param("vc_accordion", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => esc_html__( "Style", 'pitch' ),
	"param_name" => "style",
	"value" => array(
		esc_html__( "Accordion", 'pitch' ) => "accordion",
		esc_html__( "Toggle", 'pitch' ) => "toggle",
        esc_html__( "Boxed Accordion", 'pitch' ) => "boxed_accordion",
        esc_html__( "Boxed Toggle", 'pitch' ) => "boxed_toggle"
	),
	'save_always' => true
));

vc_add_param("vc_accordion", array(
	"type" => "textfield",
	"class" => "",
	"heading" => esc_html__( "Accordion Title Border Radius", 'pitch' ),
	"param_name" => "accordion_section_border_radius",
	"value" => "",
	"dependency" => Array('element' => "style", 'value' => array('boxed_accordion', 'boxed_toggle'))
));

vc_add_param("vc_accordion", array(
	"type" => "textfield",
	"class" => "",
	"heading" => esc_html__( "Accordion Mark Border Radius", 'pitch' ),
	"param_name" => "accordion_border_radius",
	"value" => "",
	"dependency" => Array('element' => "style", 'value' => array('accordion', 'toggle'))
));

vc_add_param("vc_accordion", array(
	"type" => "textfield",
	"class" => "",
	"heading" => esc_html__( "Accordion Title Height", 'pitch' ),
	"param_name" => "accordion_section_height",
	"value" => ""
));

vc_add_param("vc_accordion", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => esc_html__( "Hide Icon", 'pitch' ),
	"param_name" => "hide_icon",
	"value" => array(
		esc_html__( "Yes", 'pitch' ) => "yes",
		esc_html__( "No", 'pitch' ) => "no"),
	'save_always' => true
));
vc_add_param("vc_accordion", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => esc_html__( "Title Alignment", 'pitch' ),
	"param_name" => "title_alignment",
	"value" => array(
		"" => "",
		esc_html__( "Left", 'pitch' ) => "left",
		esc_html__( "Right", 'pitch' ) => "right",
		esc_html__( "Center", 'pitch' ) => "center",
		),
	"dependency" => Array('element' => "hide_icon", 'value' => "yes")
));

vc_add_param("vc_accordion", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => esc_html__( "Title and Icon Alignment", 'pitch' ),
	"param_name" => "title_icon_alignment",
	"value" => array(
		"" => "",
		esc_html__( "Icon on Left", 'pitch' ) => "icon_left",
		esc_html__( "Text on Left", 'pitch' ) => "text_left",
		esc_html__( "Icon and Text on Left", 'pitch' ) => "icon_left_text_left"
		),
	"description" => esc_html__( "This option is only used for boxed accordions.", 'pitch' ),
	"dependency" => Array('element' => "hide_icon", 'value' => "no")
));

vc_add_param("vc_accordion_tab", array(
	"type" => "colorpicker",
	"class" => "",
	"heading" => esc_html__( "Title Color", 'pitch' ),
	"param_name" => "title_color",
	"value" => ""
));

vc_add_param("vc_accordion_tab", array(
	"type" => "colorpicker",
	"class" => "",
	"heading" => esc_html__( "Title Hover Color", 'pitch' ),
	"param_name" => "title_hover_color",
	"value" => ""
));

vc_add_param("vc_accordion_tab", array(
	"type" => "colorpicker",
	"class" => "",
	"heading" => esc_html__( "Mark Icon Color", 'pitch' ),
	"param_name" => "mark_icon_color",
	"value" => ""
));

vc_add_param("vc_accordion_tab", array(
	"type" => "colorpicker",
	"class" => "",
	"heading" => esc_html__( "Mark Icon Hover Color", 'pitch' ),
	"param_name" => "mark_icon_color_hover",
	"value" => ""
));

vc_add_param("vc_accordion_tab", array(
	"type" => "colorpicker",
	"class" => "",
	"heading" => esc_html__( "Title Background Color", 'pitch' ),
	"param_name" => "background_color",
	"value" => "",
	"description" => esc_html__( "This option is only used for boxed accordions", 'pitch' )
));

vc_add_param("vc_accordion_tab", array(
	"type" => "colorpicker",
	"class" => "",
	"heading" => esc_html__( "Title Background Hover Color", 'pitch' ),
	"param_name" => "background_hover_color",
	"value" => "",
	"description" => esc_html__( "This option is only used for boxed accordions", 'pitch' )
));

vc_add_param("vc_accordion_tab", array(
	"type" => "colorpicker",
	"class" => "",
	"heading" => esc_html__( "Title Border Color", 'pitch' ),
	"param_name" => "border_color",
	"value" => "",
	"description" => esc_html__( "This option is only used for boxed accordions", 'pitch' )
));

vc_add_param("vc_accordion_tab", array(
	"type" => "colorpicker",
	"class" => "",
	"heading" => esc_html__( "Title Border Hover Color", 'pitch' ),
	"param_name" => "border_hover_color",
	"value" => "",
	"description" => esc_html__( "This option is only used for boxed accordions", 'pitch' )
));

vc_add_param("vc_accordion_tab", array(
	"type" => "dropdown",
    "class" => "",
    "heading" => esc_html__( "Title Tag", 'pitch' ),
    "param_name" => "title_tag",
    "value" => array(
        ""   => "",
		"p"  => "p",
        esc_html__( "h2", 'pitch' ) => "h2",
        esc_html__( "h3", 'pitch' ) => "h3",
        esc_html__( "h4", 'pitch' ) => "h4",
        esc_html__( "h5", 'pitch' ) => "h5",
        esc_html__( "h6", 'pitch' ) => "h6",
    )
));


/*** Tabs ***/

vc_add_param("vc_tabs", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => esc_html__( "Style", 'pitch' ),
	"param_name" => "style",
	"value" => array(
		esc_html__( "Horizontal Center", 'pitch' ) => "horizontal",
		esc_html__( "Horizontal Center With Icons", 'pitch' ) => "horizontal_with_icons",
		esc_html__( "Horizontal Center With Text And Icons", 'pitch' ) => "horizontal_with_text_and_icons",
		esc_html__( "Horizontal Left", 'pitch' ) => "horizontal_left",
		esc_html__( "Horizontal Left With Icons", 'pitch' ) => "horizontal_left_with_icons",
		esc_html__( "Horizontal Left With Text And Icons", 'pitch' ) => "horizontal_left_with_text_and_icons",
		esc_html__( "Horizontal Right", 'pitch' ) => "horizontal_right",
		esc_html__( "Horizontal Right With Icons", 'pitch' ) => "horizontal_right_with_icons",
		esc_html__( "Horizontal Right With Text And Icons", 'pitch' ) => "horizontal_right_with_text_and_icons",
		esc_html__( "Vertical Left", 'pitch' ) => "vertical_left",
		esc_html__( "Vertical Left With Icons", 'pitch' ) => "vertical_left_with_icons",
        esc_html__( "Vertical Left With Text and Icons", 'pitch' ) => "vertical_left_with_text_and_icons",
		esc_html__( "Vertical Right", 'pitch' ) => "vertical_right",
        esc_html__( "Vertical Right With Icons", 'pitch' ) => "vertical_right_with_icons",
        esc_html__( "Vertical Right With Text and Icons", 'pitch' ) => "vertical_right_with_text_and_icons",
	),
	'save_always' => true
));

vc_add_param("vc_tabs", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => esc_html__( "Tab Type", 'pitch' ),
	"param_name" => "tab_type_default",
	"value" => array(
		esc_html__( "Default", 'pitch' ) => "default",
		esc_html__( "With Borders", 'pitch' ) => "with_borders"
	),
	'save_always' => true,
	"dependency" => Array('element' => "style", 'value' => array('horizontal','horizontal_left','horizontal_right', 'vertical_left', 'vertical_right','horizontal_with_text_and_icons','horizontal_left_with_text_and_icons','horizontal_right_with_text_and_icons','vertical_left_with_text_and_icons','vertical_right_with_text_and_icons'))
));

vc_add_param("vc_tabs", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => esc_html__( "Tab Type", 'pitch' ),
	"param_name" => "tab_type_icons",
	"value" => array(
		esc_html__( "Default", 'pitch' ) => "default",
		esc_html__( "With Borders", 'pitch' ) => "with_borders",
		esc_html__( "With Lines", 'pitch' ) => "with_lines"
	),
	'save_always' => true,
	"dependency" => Array('element' => "style", 'value' => array('horizontal_with_icons','horizontal_left_with_icons','horizontal_right_with_icons', 'vertical_left_with_icons', 'vertical_right_with_icons'))
));

vc_add_param("vc_tabs", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => esc_html__( "Border Type", 'pitch' ),
	"param_name" => "border_type_default",
	"value" => array(
		esc_html__( "Border Arround Tabs", 'pitch' ) => "border_arround_element",
		esc_html__( "Border Arround Active Tab", 'pitch' ) => "border_arround_active_tab"
	),
	'save_always' => true,
	"dependency" => Array('element' => "tab_type_default", 'value' => array('with_borders'))
));

vc_add_param("vc_tabs", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => esc_html__( "Border Type", 'pitch' ),
	"param_name" => "border_type_icons",
	"value" => array(
		esc_html__( "Border Around Tabs", 'pitch' ) => "border_arround_element",
		esc_html__( "Border Around Active Tab", 'pitch' ) => "border_arround_active_tab"
	),
	'save_always' => true,
	"dependency" => Array('element' => "tab_type_icons", 'value' => array('with_borders'))
));

vc_add_param("vc_tabs", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => esc_html__( "Margin Between Tabs", 'pitch' ),
	"param_name" => "margin_between_tabs",
	"value" => array(
		esc_html__( "Yes", 'pitch' ) => "enable_margin",
		esc_html__( "No", 'pitch' ) => "disable_margin"
	),
	'save_always' => true,
    "dependency" => Array('element' => "tab_type_default", 'value' => array('with_borders'))
));

vc_add_param("vc_tabs", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => esc_html__( "Margin Between Tabs", 'pitch' ),
	"param_name" => "icons_margin_between_tabs",
	"value" => array(
		esc_html__( "Yes", 'pitch' ) => "enable_margin",
		esc_html__( "No", 'pitch' ) => "disable_margin"
	),
	'save_always' => true,
	"dependency" => Array('element' => "border_type_icons", 'value' => array('border_arround_element'))
));

vc_add_param("vc_tabs", array(
    "type" => "textfield",
    "class" => "",
    "heading" => esc_html__( "Space Between Tab and Content (px)", 'pitch' ),
    "param_name" => "space_between_tab_and_content",
    "value" => "",
    "description" => esc_html__( "Insert value for space between Tab and Content (default value is 18px)", 'pitch' ),
    "dependency" => Array('element' => "style", 'value' => array('horizontal_with_icons','horizontal_left_with_icons','horizontal_right_with_icons','horizontal','horizontal_left','horizontal_right','horizontal_with_text_and_icons','horizontal_left_with_text_and_icons','horizontal_right_with_text_and_icons','vertical_left_with_text_and_icons','vertical_right_with_text_and_icons'))
));

vc_add_param("vc_tabs", array(
    "type" => "dropdown",
    "class" => "",
    "heading" => esc_html__( "Border arround Content", 'pitch' ),
    "param_name" => "show_content_border",
	"value" => array(
		esc_html__( "No", 'pitch' ) => "no",
		esc_html__( "Yes", 'pitch' ) => "yes"
	),
	'save_always' => true
));

vc_add_param("vc_tabs", array(
    "type" => "textfield",
    "class" => "",
    "heading" => esc_html__( "Content Padding", 'pitch' ),
    "param_name" => "content_padding",
	"value" => "",
    "description" => esc_html__( "Please insert padding in format (top right bottom left) i.e. 5px 5px 5px 5px", 'pitch' )
));


vc_add_param("vc_tabs", array(
    "type" => "textfield",
    "class" => "",
    "heading" => esc_html__( "Border Radius (px)", 'pitch' ),
    "param_name" => "tab_border_radius",
    "value" => ""
));

vc_add_param("vc_tabs", array(
    "type" => "dropdown",
    "class" => "",
    "heading" => esc_html__( "Icon Position", 'pitch' ),
    "param_name" => "tab_icon_position",
    "value" => array(
        esc_html__( "Left", 'pitch' ) => "left",
        esc_html__( "Right", 'pitch' ) => "right"
    ),
	'save_always' => true,
    "dependency" => Array('element' => "style", 'value' => array('horizontal_with_text_and_icons','horizontal_left_with_text_and_icons','horizontal_right_with_text_and_icons','vertical_left_with_text_and_icons','vertical_right_with_text_and_icons'))
));

vc_add_param("vc_tab", array(
    "type" => "dropdown",
    "class" => "",
    "heading" => esc_html__( "Icon Pack", 'pitch' ),
    "param_name" => pitch_qode_icon_collections()->iconPackParamName,
    "value" => pitch_qode_icon_collections()->getIconCollectionsVC(),
	'save_always' => true,
));

foreach (pitch_qode_icon_collections()->iconCollections as $collection_key => $collection ) {
    vc_add_param("vc_tab", array(
        "type" => "dropdown",
        "class" => "",
        "heading" => esc_html__( "Icon", 'pitch' ),
        "param_name" => $collection->param,
        "value" => $collection->getIconsArray(),
		'save_always' => true,
        "dependency" => Array('element' => pitch_qode_icon_collections()->iconPackParamName, 'value' => array($collection_key))
    ));
}


/*** Flickr Widget ***/

vc_add_param("vc_flickr", array(
    "type" => "dropdown",
    "class" => "",
    "heading" => esc_html__( "Columns", 'pitch' ),
    "param_name" => "columns",
    "value" => array(
        esc_html__( "Two", 'pitch' ) => "two",
        esc_html__( "Three", 'pitch' ) => "three",
        esc_html__( "Four", 'pitch' ) => "four"
    ),
	'save_always' => true
));


/*** Empty Space ***/

vc_add_param("vc_empty_space",  array(
        "type" => "attach_image",
        "holder" => "div",
        'heading' => esc_html__( 'Background Image', 'pitch' ),
        'param_name' => 'background_image',
        'value' => '',
        'description' => esc_html__( 'Select image from media library.', 'pitch' ),
    )
);
vc_add_param("vc_empty_space",  array(
        "type" => "dropdown",
        'heading' => esc_html__( 'Image Repeat', 'pitch' ),
        'param_name' => 'image_repeat',
        "value" => array(
            esc_html__( 'No Repeat', 'pitch' ) => 'no-repeat',
            esc_html__( 'Repeat x', 'pitch' ) => 'repeat-x',
            esc_html__( 'Repeat y', 'pitch' ) => 'repeat-y',
            esc_html__( 'Repeat (x y)', 'pitch' ) => 'repeat'
        ),
		'save_always' => true
    )
);

/*** Gallery ***/

vc_add_param("vc_gallery", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => esc_html__( "Column Number", 'pitch' ),
	"param_name" => "column_number",
	 "value" => array(2, 3, 4, 5, "Disable" => 0),
	'save_always' => true,
	 "dependency" => Array('element' => "type", 'value' => array('image_grid'))
));

vc_add_param("vc_gallery", array(
    "type" => "dropdown",
    "class" => "",
    "heading" => esc_html__( "Grayscale Images", 'pitch' ),
    "param_name" => "grayscale",
    "value" => array(
    	esc_html__( 'No', 'pitch' ) => 'no',
	    esc_html__( 'Yes', 'pitch' ) => 'yes'
    ),
	'save_always' => true,
    "dependency" => Array('element' => "type", 'value' => array('image_grid'))
));

vc_add_param("vc_gallery", array(
    "type" => "dropdown",
    "class" => "",
    "heading" => esc_html__( "Frame", 'pitch' ),
    "param_name" => "frame",
	"value" => array("Use frame?" => "use_frame"),
	"value" => array(
		'' => '',
		esc_html__( 'Yes', 'pitch' ) => 'use_frame',
		esc_html__( 'No', 'pitch' ) => 'no'
	),
    "dependency" => Array('element' => "type", 'value' => array('flexslider_slide'))
));

vc_add_param("vc_gallery", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => esc_html__( "Choose Frame", 'pitch' ),
	"param_name" => "choose_frame",
	"value" => array(
		esc_html__( 'Default', 'pitch' ) => 'default',
		esc_html__( 'Frame 1', 'pitch' ) => 'frame1',
		esc_html__( 'Frame 2', 'pitch' ) => 'frame2',
		esc_html__( 'Frame 3', 'pitch' ) => 'frame3',
		esc_html__( 'Frame 4', 'pitch' ) => 'frame4'
	),
	'save_always' => true,
	"dependency" => Array('element' => "frame", 'value' => array('use_frame'))
));

vc_add_param("vc_gallery", array(
    "type" => "checkbox",
    "class" => "",
    "heading" => esc_html__( "Show image title?", 'pitch' ),
    "param_name" => "show_image_title",
    "value" => array("Show image title in the bottom of image" => "show_image_title"),
    "dependency" => Array('element' => "type", 'value' => array('flexslider_slide', 'flexslider_fade'))
));

vc_add_param("vc_gallery", array(
    "type" => "checkbox",
    "class" => "",
    "heading" => esc_html__( "Disable navigation arrows?", 'pitch' ),
    "param_name" => "disable_navigation_arrows",
    "value" => array("Disable navigation arrows" => "yes"),
    "dependency" => Array('element' => "type", 'value' => array('flexslider_slide', 'flexslider_fade'))
));

vc_add_param("vc_gallery", array(
    "type" => "checkbox",
    "class" => "",
    "heading" => esc_html__( "Show navigation controls?", 'pitch' ),
    "param_name" => "show_navigation_controls",
    "value" => array("Show navigation controls" => "yes"),
    "dependency" => Array('element' => "type", 'value' => array('flexslider_slide', 'flexslider_fade'))
));

vc_add_param("vc_gallery", array(
    "type" => "dropdown",
    "holder" => "div",
    "class" => "",
    "heading" => esc_html__( "Title Alignment", 'pitch' ),
    "param_name" => "title_alignment",
    "value" => array(
        esc_html__( "Left", 'pitch' ) => "left",
        esc_html__( "Center", 'pitch' ) => "center",
        esc_html__( "Right", 'pitch' ) => "right"
    ),
	'save_always' => true,
    "dependency" => Array('element' => "show_image_title", 'value' => array('show_image_title'))
));

vc_add_param("vc_gallery", array(
    "type" => "textfield",
    "class" => "",
    "heading" => esc_html__( "Title Font Family", 'pitch' ),
    "param_name" => "title_font_family",
    "value" => "",
    "dependency" => Array('element' => "show_image_title", 'value' => array('show_image_title'))
));

vc_add_param("vc_gallery", array(
    "type" => "textfield",
    "class" => "",
    "heading" => esc_html__( "Title Font Size (px)", 'pitch' ),
    "param_name" => "title_font_size",
    "value" => "",
    "dependency" => Array('element' => "show_image_title", 'value' => array('show_image_title'))
));

vc_add_param("vc_gallery", array(
    "type" => "dropdown",
    "holder" => "div",
    "class" => "",
    "heading" => esc_html__( "Title Font Weight", 'pitch' ),
    "param_name" => "title_font_weight",
    "value" => array(
        esc_html__( "Default", 'pitch' ) => "",
        esc_html__( "Thin 100", 'pitch' ) => "100",
        esc_html__( "Extra-Light 200", 'pitch' ) => "200",
        esc_html__( "Light 300", 'pitch' ) => "300",
        esc_html__( "Regular 400", 'pitch' ) => "400",
        esc_html__( "Medium 500", 'pitch' ) => "500",
        esc_html__( "Semi-Bold 600", 'pitch' ) => "600",
        esc_html__( "Bold 700", 'pitch' ) => "700",
        esc_html__( "Extra-Bold 800", 'pitch' ) => "800",
        esc_html__( "Ultra-Bold 900", 'pitch' ) => "900"
    ),
    "dependency" => Array('element' => "show_image_title", 'value' => array('show_image_title'))
));

vc_add_param("vc_gallery", array(
    "type" => "dropdown",
    "holder" => "div",
    "class" => "",
    "heading" => esc_html__( "Title Font Style", 'pitch' ),
    "param_name" => "title_font_style",
    "value" => array(
        "" 		   => "",
        esc_html__( "Normal", 'pitch' ) => "normal",
        esc_html__( "Italic", 'pitch' ) => "italic"
    ),
    "dependency" => Array('element' => "show_image_title", 'value' => array('show_image_title'))
));

vc_add_param("vc_gallery", array(
    "type" => "colorpicker",
    "holder" => "div",
    "class" => "",
    "heading" => esc_html__( "Title Layer Color", 'pitch' ),
    "param_name" => "title_layer_color",
    "value" => "",
    "dependency" => Array('element' => "show_image_title", 'value' => array('show_image_title'))
));

vc_add_param("vc_gallery", array(
    "type" => "colorpicker",
    "holder" => "div",
    "class" => "",
    "heading" => esc_html__( "Background hover color", 'pitch' ),
    "param_name" => "background_hover_color",
    "value" => "",
    "dependency" => Array('element' => "grayscale", 'value' => array("no"))
));

vc_add_param("vc_gallery", array(
    "type" => "dropdown",
    "class" => "",
    "heading" => esc_html__( "Choose hover icon", 'pitch' ),
    "param_name" => "hover_icon",
    "value" => array(
    	esc_html__( 'None', 'pitch' ) => 'none',
	    esc_html__( 'Magnifier', 'pitch' ) => 'magnifier',
	    esc_html__( 'Plus', 'pitch' ) => 'plus'
    ),
	'save_always' => true,
    "dependency" => Array('element' => "grayscale", 'value' => array("no"))
));

vc_add_param("vc_gallery", array(
    "type" => "dropdown",
    "class" => "",
    "heading" => esc_html__( "Spaces between images", 'pitch' ),
    "param_name" => "images_space",
    "value" => array(
    	esc_html__( 'No', 'pitch' ) => 'gallery_without_space',
	    esc_html__( 'Yes', 'pitch' ) => 'gallery_with_space'
    ),
	'save_always' => true,
    "dependency" => Array('element' => "type", 'value' => array('image_grid'))
));



/*** Row ***/

vc_add_param("vc_row", array(
	"type" => "dropdown",
	"class" => "",
	"show_settings_on_create"=>true,
	"heading" => esc_html__( "Row Type", 'pitch' ),
	"param_name" => "row_type",
	"value" => array(
		esc_html__( "Row", 'pitch' ) => "row",
		esc_html__( "Parallax", 'pitch' ) => "parallax",
		esc_html__( "Expandable", 'pitch' ) => "expandable",
		esc_html__( "Content menu", 'pitch' ) => "content_menu"
	),
	'save_always' => true
));

vc_add_param("vc_row", array(
	"type" => "dropdown",
	"class" => "",
	"show_settings_on_create"=>true,
	"heading" => esc_html__( "Use Row as Full Screen Section", 'pitch' ),
	"param_name" => "use_row_as_full_screen_section",
	"value" => array(
		esc_html__( "No", 'pitch' ) => "no",
		esc_html__( "Yes", 'pitch' ) => "yes"
	),
	'save_always' => true,
	"description" => esc_html__( "This option works only for Full Screen Sections Template", 'pitch' ),
	"dependency" => Array('element' => "row_type", 'value' => array('row'))
));

vc_add_param("vc_row", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => esc_html__( "Type", 'pitch' ),
	"param_name" => "type",
	"value" => array(
		esc_html__( "Full Width", 'pitch' ) => "full_width",
		esc_html__( "In Grid", 'pitch' ) => "grid"
	),
	'save_always' => true,
	"dependency" => Array('element' => "row_type", 'value' => array('row','parallax','content_menu'))
));

vc_add_param("vc_row", array(
    "type" => "dropdown",
    "class" => "",
    "heading" => esc_html__( "Header Style", 'pitch' ),
    "param_name" => "header_style",
    "value" => array(
        "" => "",
        esc_html__( "Light", 'pitch' ) => "light",
        esc_html__( "Dark", 'pitch' ) => "dark"
    ),
    "dependency" => Array('element' => "row_type", 'value' => array('row','parallax','expandable'))
));

vc_add_param("vc_row", array(
	"type" => "textfield",
	"class" => "",
	"heading" => esc_html__( "Anchor ID (Example home)", 'pitch' ),
	"param_name" => "anchor",
	"value" => "",
	"dependency" => Array('element' => "row_type", 'value' => array('row','parallax','expandable'))
));
vc_add_param("vc_row", array(
	"type" => "checkbox",
	"class" => "",
	"heading" => esc_html__( "Row in content menu", 'pitch' ),
	"value" => array("Use row for content menu?" => "in_content_menu"),
	"param_name" => "in_content_menu",
	"dependency" => Array('element' => "row_type", 'value' => array('row','parallax','expandable', 'expandable_with_background'))
));
vc_add_param("vc_row", array(
	"type" => "textfield",
	"class" => "",
	"heading" => esc_html__( "Content menu title", 'pitch' ),
	"value" => "",
	"param_name" => "content_menu_title",
	"dependency" => Array('element' => "in_content_menu", 'value' => array('in_content_menu'))
));

vc_add_param("vc_row", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => esc_html__( "Content menu icon pack", 'pitch' ),
	"param_name" => pitch_qode_icon_collections()->iconPackParamName,
	"value" => pitch_qode_icon_collections()->getIconCollectionsVC(),
	'save_always' => true,
	"dependency" => Array('element' => "in_content_menu", 'value' => array('in_content_menu'))
));

foreach(pitch_qode_icon_collections()->iconCollections as $collection_key => $collection) {
    vc_add_param("vc_row", array(
        "type" => "dropdown",
        "class" => "",
        "heading" => esc_html__( "Content menu icon", 'pitch' ),
        "param_name" => "content_menu_".$collection->param,
        "value" => $collection->getIconsArray(),
		'save_always' => true,
        "dependency" => Array('element' => pitch_qode_icon_collections()->iconPackParamName, 'value' => array($collection_key))
    ));
}

vc_add_param("vc_row", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => esc_html__( "Text Align", 'pitch' ),
	"param_name" => "text_align",
	"value" => array(
		esc_html__( "Left", 'pitch' ) => "left",
		esc_html__( "Center", 'pitch' ) => "center",
		esc_html__( "Right", 'pitch' ) => "right"
	),
	'save_always' => true,
	"dependency" => Array('element' => "row_type", 'value' => array('row','parallax','expandable'))
));

vc_add_param("vc_row", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => esc_html__( "Video background", 'pitch' ),
	"value" => array(
		esc_html__( "No", 'pitch' ) => "",
		esc_html__( "Yes", 'pitch' ) => "show_video"
	),
	"param_name" => "video",
	"dependency" => Array('element' => "row_type", 'value' => array('row'))
));

vc_add_param("vc_row", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => esc_html__( "Video overlay", 'pitch' ),
	"value" => array(
		esc_html__( "No", 'pitch' ) => "",
		esc_html__( "Yes", 'pitch' ) => "show_video_overlay"
	),
	"param_name" => "video_overlay",
	"dependency" => Array('element' => "video", 'value' => array('show_video'))
));

vc_add_param("vc_row", array(
	"type" => "attach_image",
	"class" => "",
	"heading" => esc_html__( "Video overlay image (pattern)", 'pitch' ),
	"value" => "",
	"param_name" => "video_overlay_image",
	"dependency" => Array('element' => "video_overlay", 'value' => array('show_video_overlay'))
));

vc_add_param("vc_row", array(
	"type" => "textfield",
	"class" => "",
	"heading" => esc_html__( "Video background (webm) file url", 'pitch' ),
	"value" => "",
	"param_name" => "video_webm",
	"dependency" => Array('element' => "video", 'value' => array('show_video'))
));

vc_add_param("vc_row", array(
	"type" => "textfield",
	"class" => "",
	"heading" => esc_html__( "Video background (mp4) file url", 'pitch' ),
	"value" => "",
	"param_name" => "video_mp4",
	"dependency" => Array('element' => "video", 'value' => array('show_video'))
));

vc_add_param("vc_row", array(
	"type" => "textfield",
	"class" => "",
	"heading" => esc_html__( "Video background (ogv) file url", 'pitch' ),
	"value" => "",
	"param_name" => "video_ogv",
	"dependency" => Array('element' => "video", 'value' => array('show_video'))
));

vc_add_param("vc_row", array(
	"type" => "attach_image",
	"class" => "",
	"heading" => esc_html__( "Video preview image", 'pitch' ),
	"value" => "",
	"param_name" => "video_image",
	"dependency" => Array('element' => "video", 'value' => array('show_video'))
));

vc_add_param("vc_row", array(
	"type" => "attach_image",
	"class" => "",
	"heading" => esc_html__( "Background image", 'pitch' ),
	"value" => "",
	"param_name" => "background_image",
	"dependency" => Array('element' => "row_type", 'value' => array('parallax', 'row','expandable'))
));

vc_add_param("vc_row", array(
	"type" => "checkbox",
	"class" => "",
	"heading" => esc_html__( "Pattern background", 'pitch' ),
	"value" => array("Use background image as pattern?" => "pattern_background"),
	"param_name" => "pattern_background",
	"dependency" => Array('element' => "row_type", 'value' => array('row'))
));

vc_add_param("vc_row", array(
	"type" => "attach_image",
	"class" => "",
	"heading" => esc_html__( "Floating Background Image", 'pitch' ),
	"param_name" => "floating_image",
	"value" => "",
	"description" => esc_html__( "For better effect, choose a smaller image, as its multiple instances will float around.", 'pitch' ),
	"dependency" => Array('element' => "row_type", 'value' => array('row'))
));

vc_add_param("vc_row", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => esc_html__( "Direction of Floating", 'pitch' ),
	"param_name" => "floating_direction",
	"value" => array(
		esc_html__( "Top -> Bottom", 'pitch' ) => "top-bottom",
		esc_html__( "Bottom -> Top", 'pitch' ) => "bottom-top",
		esc_html__( "Left -> Right", 'pitch' ) => "left-right",
		esc_html__( "Right -> Left", 'pitch' ) => "right-left",
		esc_html__( "Top Left -> Bottom Right", 'pitch' ) => "top-left-bottom-right",
		esc_html__( "Top Right -> Bottom Left", 'pitch' ) => "top-right-bottom-left",
		esc_html__( "Bottom Left -> Top Right", 'pitch' ) => "bottom-left-top-right",
		esc_html__( "Bottom Right -> Top Left", 'pitch' ) => "bottom-right-top-left",
	),
	'save_always' => true,
	"dependency" => Array('element' => "floating_image", 'not_empty' => true)
));

vc_add_param("vc_row", array(
	"type" => "textfield",
	"class" => "",
	"heading" => esc_html__( "Speed of Floating", 'pitch' ),
	"param_name" => "floating_speed",
	"value" => "3",
	"description" => esc_html__( "How many pixels per second floating images move.", 'pitch' ),
	"dependency" => Array('element' => "floating_image", 'not_empty' => true)
));

vc_add_param("vc_row", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => esc_html__( "Zig-Zag Floating", 'pitch' ),
	"param_name" => "zigzag",
	"value" => array(
		esc_html__( "Yes", 'pitch' ) => "yes",
		esc_html__( "No", 'pitch' ) => "no",
	),
	'save_always' => true,
	"description" => esc_html__( " will cause half of the images to float in opposite direction.", 'pitch' ),
	"dependency" => Array('element' => "floating_image", 'not_empty' => true)
));

vc_add_param("vc_row", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => esc_html__( "Random Sized Floating Images", 'pitch' ),
	"param_name" => "floating_randsize",
	"value" => array(
		esc_html__( "Yes", 'pitch' ) => "yes",
		esc_html__( "No", 'pitch' ) => "no",
	),
	'save_always' => true,
	"description" => esc_html__( " renders the floating image in random sizes.", 'pitch' ),
	"dependency" => Array('element' => "floating_image", 'not_empty' => true)
));

vc_add_param("vc_row", array(
    "type" => "dropdown",
    "class" => "",
    "heading" => esc_html__( "Full Screen Height", 'pitch' ),
    "param_name" => "full_screen_section_height",
    "value" => array(
        esc_html__( "No", 'pitch' ) => "no",
        esc_html__( "Yes", 'pitch' ) => "yes"
    ),
	'save_always' => true,
    "dependency" => Array('element' => "row_type", 'value' => array('parallax'))
));

vc_add_param("vc_row", array(
    "type" => "dropdown",
    "class" => "",
    "heading" => esc_html__( "Vertically Align Content In Middle", 'pitch' ),
    "param_name" => "vertically_align_content_in_middle",
    "value" => array(
        esc_html__( "No", 'pitch' ) => "no",
        esc_html__( "Yes", 'pitch' ) => "yes"
    ),
	'save_always' => true,
    "dependency" => array('element' => 'full_screen_section_height', 'value' => 'yes')
));

vc_add_param("vc_row", array(
	"type" => "textfield",
	"class" => "",
	"heading" => esc_html__( "Section height", 'pitch' ),
	"param_name" => "section_height",
	"value" => "",
	"dependency" => Array('element' => "full_screen_section_height", 'value' => array('no'))
));

vc_add_param("vc_row", array(
	"type" => "checkbox",
	"class" => "",
	"heading" => esc_html__( "Use as box", 'pitch' ),
	"value" => array("Use row as box" => "use_row_as_box" ),
	"param_name" => "use_as_box",
	"dependency" => Array('element' => "row_type", 'value' => array('row'))
));

vc_add_param("vc_row", array(
    "type" => "textfield",
    "class" => "",
    "heading" => esc_html__( "Parallax speed", 'pitch' ),
    "param_name" => "parallax_speed",
    "value" => "",
    "dependency" => Array('element' => "row_type", 'value' => array('parallax'))
));

vc_add_param("vc_row", array(
	"type" => "colorpicker",
	"class" => "",
	"heading" => esc_html__( "Background color", 'pitch' ),
	"param_name" => "background_color",
	"value" => "",
	"dependency" => Array('element' => "row_type", 'value' => array('row','expandable','content_menu'))
));

vc_add_param("vc_row", array(
	"type" => "checkbox",
	"class" => "",
	"heading" => esc_html__( "Show logo", 'pitch' ),
	"value" => array("Show logo in content menu" => "logo_in_content_menu"),
	"param_name" => "logo_in_content_menu",
	"dependency" => Array('element' => "row_type", 'value' => array('content_menu'))
));

vc_add_param("vc_row", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => esc_html__( "Custom widget area", 'pitch' ),
	"param_name" => "custom_widget_area",
	"value" => array_merge(array('' => ''), array_flip(pitch_qode_get_custom_sidebars())),
	"dependency" => Array('element' => "row_type", 'value' => array('content_menu'))
));

vc_add_param("vc_row", array(
	"type" => "checkbox",
	"class" => "",
	"heading" => esc_html__( "Show Border Bottom", 'pitch' ),
	"value" => array("Show border bottom on content menu?" => "yes"),
	"param_name" => "content_menu_border_bottom",
	"dependency" => Array('element' => "row_type", 'value' => array('content_menu'))
));

vc_add_param("vc_row", array(
	"type" => "colorpicker",
	"class" => "",
	"heading" => esc_html__( "Content Menu Border Color", 'pitch' ),
	"param_name" => "content_menu_border_color",
	"value" => "",
	"dependency" => Array('element' => "content_menu_border_bottom", 'value' => array('yes'))
));

vc_add_param("vc_row", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => esc_html__( "Content Menu Border Style", 'pitch' ),
	"param_name" => "content_menu_border_style",
	"value" => array(
		esc_html__( "Solid", 'pitch' ) => "solid",
		esc_html__( "Dashed", 'pitch' ) => "dashed",
		esc_html__( "Dotted", 'pitch' ) => "dotted"
		),
	'save_always' => true,
	"dependency" => Array('element' => "content_menu_border_bottom", 'value' => array('yes'))
));

vc_add_param("vc_row", array(
	"type" => "colorpicker",
	"class" => "",
	"heading" => esc_html__( "Border Top Color", 'pitch' ),
	"param_name" => "border_top_color",
	"value" => "",
	"dependency" => Array('element' => "row_type", 'value' => array('row'))
));

vc_add_param("vc_row", array(
	"type" => "colorpicker",
	"class" => "",
	"heading" => esc_html__( "Border Bottom Color", 'pitch' ),
	"param_name" => "border_color",
	"value" => "",
	"dependency" => Array('element' => "row_type", 'value' => array('row'))
));

vc_add_param("vc_row", array(
	"type" => "textfield",
	"class" => "",
	"heading" => esc_html__( "Padding", 'pitch' ),
	"value" => "",
	"param_name" => "side_padding",
	"description" => esc_html__( "Padding (left/right in pixels or percentage. Put number and px or %. Ex. 30% or 30px)", 'pitch' ),
	"dependency" => Array('element' => "type", 'value' => array('full_width'))
));

vc_add_param("vc_row", array(
	"type" => "textfield",
	"class" => "",
    "heading" => esc_html__( "Padding Top (px)", 'pitch' ),
	"value" => "",
	"param_name" => "padding_top",
	"dependency" => Array('element' => "row_type", 'value' => array('row'))
));

vc_add_param("vc_row", array(
	"type" => "textfield",
	"class" => "",
    "heading" => esc_html__( "Padding Bottom (px)", 'pitch' ),
	"value" => "",
	"param_name" => "padding_bottom",
	"dependency" => Array('element' => "row_type", 'value' => array('row'))
));

vc_add_param("vc_row", array(
	"type" => "colorpicker",
	"class" => "",
	"heading" => esc_html__( "Label Color", 'pitch' ),
	"param_name" => "color",
	"value" => "",
	"dependency" => Array('element' => "row_type", 'value' => array('expandable'))
));

vc_add_param("vc_row", array(
	"type" => "colorpicker",
	"class" => "",
	"heading" => esc_html__( "Label Hover Color", 'pitch' ),
	"param_name" => "hover_color",
	"value" => "",
	"dependency" => Array('element' => "row_type", 'value' => array('expandable'))
));

vc_add_param("vc_row", array(
	"type" => "textfield",
	"class" => "",
	"heading" => esc_html__( "More Label", 'pitch' ),
	"param_name" => "more_button_label",
	"value" =>  "",
	"description" => esc_html__( "Default label is Expand Section", 'pitch' ),
	"dependency" => Array('element' => "row_type", 'value' => array('expandable'))
));

vc_add_param("vc_row", array(
	"type" => "textfield",
	"class" => "",
	"heading" => esc_html__( "Less Label", 'pitch' ),
	"param_name" => "less_button_label",
	"value" =>  "",
	"description" => esc_html__( "Default label is Contract Section", 'pitch' ),
	"dependency" => Array('element' => "row_type", 'value' => array('expandable'))
));

vc_add_param("vc_row", array(
	"type" => "checkbox",
	"class" => "",
	"heading" => esc_html__( "Expanded", 'pitch' ),
	"value" => array("Set as expanded section?" => "set_as_expanded" ),
	"param_name" => "set_as_expanded",
	"dependency" => Array('element' => "row_type", 'value' => array('expandable'))
));

vc_add_param("vc_row", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => esc_html__( "Label Position", 'pitch' ),
	"param_name" => "button_position",
	"value" => array(
		"" => "",
		esc_html__( "Left", 'pitch' ) => "left",
		esc_html__( "Right", 'pitch' ) => "right",
		esc_html__( "Center", 'pitch' ) => "center"
	),
	"dependency" => Array('element' => "row_type", 'value' => array('expandable'))
));

vc_add_param("vc_row",  array(
  "type" => "dropdown",
  "heading" => esc_html__( "CSS Animation", 'pitch' ),
  "param_name" => "css_animation",
  "admin_label" => true,
  "value" => $animations,
	'save_always' => true,
  "dependency" => Array('element' => "row_type", 'value' => array('row'))
  
));

vc_add_param("vc_row",  array(
	"type" => "textfield",
	"heading" => esc_html__( "Transition delay (ms)", 'pitch' ),
	"param_name" => "transition_delay",
	"admin_label" => true,
	"value" => "",
	"dependency" => array("element" => "css_animation", "not_empty" => true)
 
));

vc_add_param("vc_row",  array(
    "type" => "dropdown",
    "class" => "",
    "heading" => esc_html__( "Box Shadow on Row", 'pitch' ),
    "param_name" => "box_shadow_on_row",
    "value" => array(
        esc_html__( "No", 'pitch' ) => "no",
        esc_html__( "Yes", 'pitch' ) => "yes"
    ),
	'save_always' => true,
    "dependency" => array("element" => "row_type", "value" => array("row"))
));

vc_add_param("vc_row",  array(
    "type" => "colorpicker",
    "heading" => esc_html__( "Box Shadow Color", 'pitch' ),
    "param_name" => "box_shadow_color",
    "value" => "",
    "dependency" => array("element" => "box_shadow_on_row", "value" => "yes")
  
));

vc_add_param("vc_row",  array(
    "type" => "textfield",
    "heading" => esc_html__( "Horizontal Offset (px)", 'pitch' ),
    "param_name" => "horizontal_offset",
    "value" => "",
    "description" => esc_html__( "Default value is 1", 'pitch' ),
    "dependency" => array("element" => "box_shadow_on_row", "value" => "yes")
));

vc_add_param("vc_row",  array(
    "type" => "textfield",
    "heading" => esc_html__( "Vertical Offset (px)", 'pitch' ),
    "param_name" => "vertical_offset",
    "value" => "",
    "description" => esc_html__( "Default value is 1", 'pitch' ),
    "dependency" => array("element" => "box_shadow_on_row", "value" => "yes")
));

vc_add_param("vc_row",  array(
    "type" => "textfield",
    "heading" => esc_html__( "Box Shadow Blur (px)", 'pitch' ),
    "param_name" => "box_shadow_blur",
    "value" => "",
    "description" => esc_html__( "Default value is 1", 'pitch' ),
    "dependency" => array("element" => "box_shadow_on_row", "value" => "yes")
));

vc_add_param("vc_row",  array(
    "type" => "textfield",
    "heading" => esc_html__( "Box Shadow Spread (px)", 'pitch' ),
    "param_name" => "box_shadow_spread",
    "value" => "",
    "description" => esc_html__( "Default value is 1", 'pitch' ),
    "dependency" => array("element" => "box_shadow_on_row", "value" => "yes")
));


/*** Row Inner ***/

vc_add_param("vc_row_inner", array(
	"type" => "dropdown",
	"class" => "",
	"show_settings_on_create"=>true,
	"heading" => esc_html__( "Row Type", 'pitch' ),
	"param_name" => "row_type",
	"value" => array(
		esc_html__( "Row", 'pitch' ) => "row",
		esc_html__( "Parallax", 'pitch' ) => "parallax",
		esc_html__( "Expandable", 'pitch' ) => "expandable"
	),
	'save_always' => true
));

vc_add_param("vc_row_inner", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => esc_html__( "Type", 'pitch' ),
	"param_name" => "type",
	"value" => array(
		esc_html__( "Full Width", 'pitch' ) => "full_width",
		esc_html__( "In Grid", 'pitch' ) => "grid"
	),
	'save_always' => true,
	"dependency" => Array('element' => "row_type", 'value' => array('row'))
));

vc_add_param("vc_row_inner", array(
    "type" => "dropdown",
    "class" => "",
    "heading" => esc_html__( "Use Row as Full Screen Section Slide", 'pitch' ),
    "param_name" => "use_row_as_full_screen_section_slide",
    "value" => array(
        esc_html__( "No", 'pitch' ) => "no",
        esc_html__( "Yes", 'pitch' ) => "yes"
    ),
	'save_always' => true,
    "description" => esc_html__( "This option works only for Full Screen Sections Template", 'pitch' ),
    "dependency" => Array('element' => "row_type", 'value' => array('row'))
));

vc_add_param("vc_row_inner", array(
    "type" => "checkbox",
    "class" => "",
    "heading" => esc_html__( "Use as box", 'pitch' ),
    "value" => array("Use row as box" => "use_row_as_box" ),
    "param_name" => "use_as_box",
    "dependency" => Array('element' => "row_type", 'value' => array('row'))
));

vc_add_param("vc_row_inner", array(
	"type" => "textfield",
	"class" => "",
	"heading" => esc_html__( "Border Radius(px)", 'pitch' ),
	"param_name" => "row_box_border_radius",
	"value" => "",
	"dependency" => Array('element' => "use_as_box", 'value' => array('use_row_as_box'))
));

vc_add_param("vc_row_inner", array(
	"type" => "textfield",
	"class" => "",
	"heading" => esc_html__( "Border Width(px)", 'pitch' ),
	"param_name" => "row_box_border_width",
	"value" => "",
	"dependency" => Array('element' => "use_as_box", 'value' => array('use_row_as_box'))
));

vc_add_param("vc_row_inner", array(
	"type" => "textfield",
	"class" => "",
	"heading" => esc_html__( "Anchor ID", 'pitch' ),
	"param_name" => "anchor",
	"value" => ""
));

vc_add_param("vc_row_inner", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => esc_html__( "Text Align", 'pitch' ),
	"param_name" => "text_align",
	"value" => array(
		esc_html__( "Left", 'pitch' ) => "left",
		esc_html__( "Center", 'pitch' ) => "center",
		esc_html__( "Right", 'pitch' ) => "right"
	),
	'save_always' => true
	
));

vc_add_param("vc_row_inner", array(
	"type" => "colorpicker",
	"class" => "",
	"heading" => esc_html__( "Background color", 'pitch' ),
	"param_name" => "background_color",
	"value" => "",
	"dependency" => Array('element' => "row_type", 'value' => array('row','expandable'))
));

vc_add_param("vc_row_inner", array(
	"type" => "attach_image",
	"class" => "",
	"heading" => esc_html__( "Background image", 'pitch' ),
	"value" => "",
	"param_name" => "background_image",
	"dependency" => Array('element' => "row_type", 'value' => array('parallax', 'row'))
));

vc_add_param("vc_row_inner", array(
	"type" => "attach_image",
	"class" => "",
	"heading" => esc_html__( "Floating Image", 'pitch' ),
	"param_name" => "floating_image",
	"value" => "",
	"description" => esc_html__( "For better effect, choose a smaller image, as its multiple instances will float around.", 'pitch' ),
	"dependency" => Array('element' => "row_type", 'value' => array('row'))
));

vc_add_param("vc_row_inner", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => esc_html__( "Direction of Floating", 'pitch' ),
	"param_name" => "floating_direction",
	"value" => array(
		esc_html__( "Top -> Bottom", 'pitch' ) => "top-bottom",
		esc_html__( "Bottom -> Top", 'pitch' ) => "bottom-top",
		esc_html__( "Left -> Right", 'pitch' ) => "left-right",
		esc_html__( "Right -> Left", 'pitch' ) => "right-left",
		esc_html__( "Top Left -> Bottom Right", 'pitch' ) => "top-left-bottom-right",
		esc_html__( "Top Right -> Bottom Left", 'pitch' ) => "top-right-bottom-left",
		esc_html__( "Bottom Left -> Top Right", 'pitch' ) => "bottom-left-top-right",
		esc_html__( "Bottom Right -> Top Left", 'pitch' ) => "bottom-right-top-left",
	),
	'save_always' => true,
	"dependency" => Array('element' => "floating_image", 'not_empty' => true)
));

vc_add_param("vc_row_inner", array(
	"type" => "textfield",
	"class" => "",
	"heading" => esc_html__( "Speed of Floating", 'pitch' ),
	"param_name" => "floating_speed",
	"value" => "3",
	"description" => esc_html__( "How many pixels per second floating images move.", 'pitch' ),
	"dependency" => Array('element' => "floating_image", 'not_empty' => true)
));

vc_add_param("vc_row_inner", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => esc_html__( "Zig-Zag Floating", 'pitch' ),
	"param_name" => "floating_zigzag",
	"value" => array(
		esc_html__( "Yes", 'pitch' ) => "yes",
		esc_html__( "No", 'pitch' ) => "no",
	),
	'save_always' => true,
	"description" => esc_html__( " will cause half of the images to float in oppostie direction.", 'pitch' ),
	"dependency" => Array('element' => "floating_image", 'not_empty' => true)
));

vc_add_param("vc_row_inner", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => esc_html__( "Random Sized Floating Images", 'pitch' ),
	"param_name" => "floating_randsize",
	"value" => array(
		esc_html__( "Yes", 'pitch' ) => "yes",
		esc_html__( "No", 'pitch' ) => "no",
	),
	'save_always' => true,
	"description" => esc_html__( " renders the floating image in random sizes.", 'pitch' ),
	"dependency" => Array('element' => "floating_image", 'not_empty' => true)
));

vc_add_param("vc_row_inner", array(
	"type" => "colorpicker",
	"class" => "",
	"heading" => esc_html__( "Border color", 'pitch' ),
	"param_name" => "border_color",
	"value" => "",
	"dependency" => Array('element' => "row_type", 'value' => array('row','expandable'))
));

vc_add_param("vc_row_inner", array(
	"type" => "textfield",
	"class" => "",
	"heading" => esc_html__( "Padding", 'pitch' ),
	"value" => "",
	"param_name" => "side_padding",
	"description" => esc_html__( "Left and right spacing in pixels", 'pitch' ),
	"dependency" => Array('element' => "type", 'value' => array('full_width'))
));

vc_add_param("vc_row_inner", array(
	"type" => "textfield",
	"class" => "",
	"heading" => esc_html__( "Padding Top", 'pitch' ),
	"value" => "",
	"param_name" => "padding_top",
	"dependency" => Array('element' => "row_type", 'value' => array('row'))
));

vc_add_param("vc_row_inner", array(
	"type" => "textfield",
	"class" => "",
	"heading" => esc_html__( "Padding Bottom", 'pitch' ),
	"value" => "",
	"param_name" => "padding_bottom",
	"dependency" => Array('element' => "row_type", 'value' => array('row'))
));

vc_add_param("vc_row_inner", array(
	"type" => "textfield",
	"class" => "",
	"heading" => esc_html__( "More Button Label", 'pitch' ),
	"param_name" => "more_button_label",
	"value" =>  "",
	"dependency" => Array('element' => "row_type", 'value' => array('expandable'))
));

vc_add_param("vc_row_inner", array(
	"type" => "textfield",
	"class" => "",
	"heading" => esc_html__( "Less Button Label", 'pitch' ),
	"param_name" => "less_button_label",
	"value" =>  "",
	"dependency" => Array('element' => "row_type", 'value' => array('expandable'))
));

vc_add_param("vc_row_inner", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => esc_html__( "Button Position", 'pitch' ),
	"param_name" => "button_position",
	"value" => array(
		"" => "",
		esc_html__( "Left", 'pitch' ) => "left",
		esc_html__( "Right", 'pitch' ) => "right",
		esc_html__( "Center", 'pitch' ) => "center"
	),
	"dependency" => Array('element' => "row_type", 'value' => array('expandable'))
));

vc_add_param("vc_row_inner", array(
	"type" => "colorpicker",
	"class" => "",
	"heading" => esc_html__( "Color", 'pitch' ),
	"param_name" => "color",
	"value" => "",
	"dependency" => Array('element' => "row_type", 'value' => array('expandable'))
));

vc_add_param("vc_row_inner",  array(
	"type" => "dropdown",
	"heading" => esc_html__( "CSS Animation", 'pitch' ),
	"param_name" => "css_animation",
	"admin_label" => true,
	"value" => $animations,
	'save_always' => true,
	"dependency" => Array('element' => "row_type", 'value' => array('row'))
 
));

vc_add_param("vc_row_inner",  array(
  "type" => "textfield",
  "heading" => esc_html__( "Transition delay (ms)", 'pitch' ),
  "param_name" => "transition_delay",
  "admin_label" => true,
  "value" => "",
  "dependency" => Array('element' => "row_type", 'value' => array('row'))
  
));

vc_add_param("vc_row_inner",  array(
    "type" => "dropdown",
    "class" => "",
    "heading" => esc_html__( "Box Shadow on Row", 'pitch' ),
    "param_name" => "box_shadow_on_row",
    "value" => array(
        esc_html__( "No", 'pitch' ) => "no",
        esc_html__( "Yes", 'pitch' ) => "yes"
    ),
	'save_always' => true,
    "dependency" => array("element" => "row_type", "value" => array("row"))
));

vc_add_param("vc_row_inner",  array(
    "type" => "colorpicker",
    "heading" => esc_html__( "Box Shadow Color", 'pitch' ),
    "param_name" => "box_shadow_color",
    "value" => "",
    "dependency" => array("element" => "box_shadow_on_row", "value" => "yes")
  
));

vc_add_param("vc_row_inner",  array(
    "type" => "textfield",
    "heading" => esc_html__( "Horizontal Offset (px)", 'pitch' ),
    "param_name" => "horizontal_offset",
    "value" => "",
    "description" => esc_html__( "Default value is 1", 'pitch' ),
    "dependency" => array("element" => "box_shadow_on_row", "value" => "yes")
));

vc_add_param("vc_row_inner",  array(
    "type" => "textfield",
    "heading" => esc_html__( "Vertical Offset (px)", 'pitch' ),
    "param_name" => "vertical_offset",
    "value" => "",
    "description" => esc_html__( "Default value is 1", 'pitch' ),
    "dependency" => array("element" => "box_shadow_on_row", "value" => "yes")
));

vc_add_param("vc_row_inner",  array(
    "type" => "textfield",
    "heading" => esc_html__( "Box Shadow Blur (px)", 'pitch' ),
    "param_name" => "box_shadow_blur",
    "value" => "",
    "description" => esc_html__( "Default value is 1", 'pitch' ),
    "dependency" => array("element" => "box_shadow_on_row", "value" => "yes")
));

vc_add_param("vc_row_inner",  array(
    "type" => "textfield",
    "heading" => esc_html__( "Box Shadow Spread (px)", 'pitch' ),
    "param_name" => "box_shadow_spread",
    "value" => "",
    "description" => esc_html__( "Default value is 1", 'pitch' ),
    "dependency" => array("element" => "box_shadow_on_row", "value" => "yes")
));


/*** Separator ***/

$separator_setting = array (
  'show_settings_on_create' => true,
  "controls"	=> '',
);
vc_map_update('vc_separator', $separator_setting);

vc_add_param("vc_separator", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => esc_html__( "Type", 'pitch' ),
	"param_name" => "type",
	"value" => array(
		esc_html__( "Normal", 'pitch' ) => "normal",
		esc_html__( "Transparent", 'pitch' ) => "transparent",
		esc_html__( "Small", 'pitch' ) => "small",
	),
	'save_always' => true
));

vc_add_param("vc_separator", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => esc_html__( "Position", 'pitch' ),
	"param_name" => "position",
	"value" => array(
		esc_html__( "Center", 'pitch' ) => "center",
		esc_html__( "Left", 'pitch' ) => "left",
		esc_html__( "Right", 'pitch' ) => "right",
		esc_html__( "Inherit from Elements Holder", 'pitch' ) => "inherit"
	),
	'save_always' => true,
    "dependency" => array("element" => "type", "value" => array("small"))
));

vc_add_param("vc_separator", array(
	"type" => "colorpicker",
	"class" => "",
	"heading" => esc_html__( "Color", 'pitch' ),
	"param_name" => "color",
	"value" => "",
    "dependency" => array("element" => "type", "value" => array("small", "normal"))
));

vc_add_param("vc_separator", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => esc_html__( "Border Style", 'pitch' ),
	"param_name" => "border_style",
	"value" => array(
		"" => "",
		esc_html__( "Dashed", 'pitch' ) => "dashed",
		esc_html__( "Solid", 'pitch' ) => "solid",
        esc_html__( "Dotted", 'pitch' ) => "dotted"
    )
));

vc_add_param("vc_separator", array(
    "type" => "textfield",
    "class" => "",
    "heading" => esc_html__( "Width (px)", 'pitch' ),
    "param_name" => "width",
    "value" => "",
	"dependency" => array("element" => "type", "value" => array("small"))
));

vc_add_param("vc_separator", array(
	"type" => "textfield",
	"class" => "",
	"heading" => esc_html__( "Thickness (px)", 'pitch' ),
	"param_name" => "thickness",
	"value" => ""
));

vc_add_param("vc_separator", array(
	"type" => "textfield",
	"class" => "",
	"heading" => esc_html__( "Top Margin", 'pitch' ),
	"param_name" => "up",
	"value" => ""
));

vc_add_param("vc_separator", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => esc_html__( "Top Margin Measuring Unit", 'pitch' ),
	"param_name" => "up_style",
	"value" => array(
		esc_html__( "Pixels", 'pitch' ) => "px",
		esc_html__( "Percentages", 'pitch' ) => "%",
    ),
	'save_always' => true
));

vc_add_param("vc_separator", array(
	"type" => "textfield",
	"class" => "",
	"heading" => esc_html__( "Bottom Margin", 'pitch' ),
	"param_name" => "down",
	"value" => ""
));

vc_add_param("vc_separator", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => esc_html__( "Bottom Margin Measuring Unit", 'pitch' ),
	"param_name" => "down_style",
	"value" => array(
		esc_html__( "Pixels", 'pitch' ) => "px",
		esc_html__( "Percentages", 'pitch' ) => "%",
    ),
	'save_always' => true
));


/*** Separator With Text ***/

vc_add_param("vc_text_separator", array(
    "type" => "colorpicker",
    "class" => "",
    "heading" => esc_html__( "Title Color", 'pitch' ),
    "param_name" => "title_color",
));

vc_add_param("vc_text_separator", array(
    "type" => "textfield",
    "class" => "",
    "heading" => esc_html__( "Title Font size (px)", 'pitch' ),
    "param_name" => 'title_size',
    "value" => ""
));

vc_add_param("vc_text_separator", array(
    "type" => "dropdown",
    "class" => "",
    "heading" => esc_html__( "Text In Box", 'pitch' ),
    "param_name" => "text_in_box",
    "value" => array(
        esc_html__( "Yes", 'pitch' ) => "yes",
        esc_html__( "No", 'pitch' ) => "no"
    ),
	'save_always' => true
));

vc_add_param("vc_text_separator", array(
    "type" => "dropdown",
    "class" => "",
    "heading" => esc_html__( "Text Position", 'pitch' ),
    "param_name" => "text_position",
    "value" => array(
        esc_html__( "Center", 'pitch' ) => "center",
        esc_html__( "Left", 'pitch' ) => "left",
        esc_html__( "Right", 'pitch' ) => "right"
    ),
	'save_always' => true
));

vc_add_param("vc_text_separator", array(
    "type" => "textfield",
    "holder" => "div",
    "class" => "",
    "heading" => esc_html__( "Height (px)", 'pitch' ),
    "param_name" => 'box_height',
    "value" => "",
    "description" => esc_html__( "Insert height for a shape around the text", 'pitch' )
));

vc_add_param("vc_text_separator", array(
    "type" => "textfield",
    "holder" => "div",
    "class" => "",
    "heading" => esc_html__( "Left/right Padding (px)", 'pitch' ),
    "param_name" => 'box_padding',
    "value" => "",
    "description" => esc_html__( "Insert size for a padding on left and right side of text", 'pitch' ),
));

vc_add_param("vc_text_separator", array(
    "type" => "colorpicker",
    "class" => "",
    "heading" => esc_html__( "Box Background Color", 'pitch' ),
    "param_name" => "box_background_color",
    "dependency" => Array('element' => "text_in_box", 'value' => array('yes'))
));

vc_add_param("vc_text_separator", array(
    "type" => "textfield",
    "holder" => "div",
    "class" => "",
    "heading" => esc_html__( "Box Border Width (px)", 'pitch' ),
    "param_name" => "box_border_width",
    "value" => "",
    "description" => esc_html__( "Insert width for the separator line", 'pitch' ),
    "dependency" => Array('element' => "text_in_box", 'value' => array('yes'))
));

vc_add_param("vc_text_separator", array(
    "type" => "colorpicker",
    "class" => "",
    "heading" => esc_html__( "Box Border Color", 'pitch' ),
    "param_name" => "box_border_color",
    "dependency" => Array('element' => "text_in_box", 'value' => array('yes'))
));

vc_add_param("vc_text_separator", array(
    "type" => "textfield",
    "holder" => "div",
    "class" => "",
    "heading" => esc_html__( "Box Border radius (px)", 'pitch' ),
    "param_name" => "box_border_radius",
    "description" => esc_html__( "Insert border radius(Rounded corners) in px. For example: 4. Leave empty for default.", 'pitch' ),
    "dependency" => Array('element' => "text_in_box", 'value' => array('yes'))
));

vc_add_param("vc_text_separator", array(
    "type" => "dropdown",
    "class" => "",
    "heading" => esc_html__( "Box Border Style", 'pitch' ),
    "param_name" => "box_border_style",
    "value" => array(
        esc_html__( "Solid", 'pitch' ) => "solid",
        esc_html__( "Dashed", 'pitch' ) => "dashed",
        esc_html__( "Dotted", 'pitch' ) => "dotted",
        esc_html__( "Transparent", 'pitch' ) => "transparent"
    ),
	'save_always' => true,
    "description" => esc_html__( "Choose a style for the separator line", 'pitch' ),
    "dependency" => Array('element' => "text_in_box", 'value' => array('yes'))
));

vc_add_param("vc_text_separator", array(
    "type" => "colorpicker",
    "class" => "",
    "heading" => esc_html__( "Line Color", 'pitch' ),
    "param_name" => "line_color",
    "value" => "",
    "description" => esc_html__( "Choose a color for the separator line", 'pitch' )
));

vc_add_param("vc_text_separator", array(
    "type" => "textfield",
    "holder" => "div",
    "class" => "",
    "heading" => esc_html__( "Line Width (px)", 'pitch' ),
    "param_name" => "line_width",
    "value" => "",
    "description" => esc_html__( "Insert width for the separator line", 'pitch' )
));

vc_add_param("vc_text_separator", array(
    "type" => "dropdown",
    "class" => "",
    "heading" => esc_html__( "Animation", 'pitch' ),
    "param_name" => "animation",
    "value" => array(
        esc_html__( "Default", 'pitch' ) => "default",
        esc_html__( "Animate Width", 'pitch' ) => "animate_width"
    ),
	'save_always' => true,
    "description" => esc_html__( "Choose animation for separator", 'pitch' )
));

vc_add_param("vc_text_separator", array(
    "type" => "textfield",
    "holder" => "div",
    "class" => "",
    "heading" => esc_html__( "Line Thickness (px)", 'pitch' ),
    "param_name" => "line_thickness",
    "value" => "",
    "description" => esc_html__( "Insert thickness for the separator line", 'pitch' )
));

vc_add_param("vc_text_separator", array(
    "type" => "dropdown",
    "class" => "",
    "heading" => esc_html__( "Separator Line Style", 'pitch' ),
    "param_name" => "line_border_style",
    "value" => array(
        esc_html__( "Solid", 'pitch' ) => "solid",
        esc_html__( "Dashed", 'pitch' ) => "dashed",
        esc_html__( "Dotted", 'pitch' ) => "dotted",
        esc_html__( "Transparent", 'pitch' ) => "transparent"
    ),
	'save_always' => true,
    "description" => esc_html__( "Choose a style for the separator line", 'pitch' )
));

vc_add_param("vc_text_separator", array(
    "type" => "textfield",
    "holder" => "div",
    "class" => "",
    "heading" => esc_html__( "Top Margin (px)", 'pitch' ),
    "param_name" => "up",
    "value" => "",
    "description" => esc_html__( "Insert top margin for the separator", 'pitch' )
));

vc_add_param("vc_text_separator", array(
    "type" => "textfield",
    "holder" => "div",
    "class" => "",
    "heading" => esc_html__( "Bottom Margin (px)", 'pitch' ),
    "param_name" => "down",
    "value" => "",
    "description" => esc_html__( "Insert bottom margin for the separator", 'pitch' )
));

vc_add_param("vc_text_separator", array(
    "type" => "textfield",
    "holder" => "div",
    "class" => "",
    "heading" => esc_html__( "Box Margins (px)", 'pitch' ),
    "param_name" => "box_margin",
    "description" => esc_html__( "Insert left and right line margins", 'pitch' )
));

vc_add_param("vc_text_separator", array(
    "type" => "dropdown",
    "class" => "",
    "heading" => esc_html__( "Dots on line end ", 'pitch' ),
    "param_name" => "line_dots",
    "value" => array(
        esc_html__( "No", 'pitch' ) => "no",
        esc_html__( "Yes", 'pitch' ) => "yes"
    ),
	'save_always' => true,
    "description" => esc_html__( "Insert icons on the end of the border", 'pitch' )
));

vc_add_param("vc_text_separator", array(
    "type" => "colorpicker",
    "holder" => "div",
    "class" => "",
    "heading" => esc_html__( "Dots Color", 'pitch' ),
    "param_name" => "line_dots_color",
    "description" => esc_html__( "Insert dots color (default value is #b2b2b2)", 'pitch' ),
    "dependency" => Array('element' => "line_dots", 'value' => array('yes'))
));

vc_add_param("vc_text_separator", array(
    "type" => "textfield",
    "holder" => "div",
    "class" => "",
    "heading" => esc_html__( "Dots Size (px)", 'pitch' ),
    "param_name" => "line_dots_size",
    "description" => esc_html__( "Insert dots size", 'pitch' ),
    "dependency" => Array('element' => "line_dots", 'value' => array('yes'))
));


/*** Single Image ***/

vc_add_param("vc_single_image",  array(
	"type" => "dropdown",
	"heading" => esc_html__( "Hover Animation", 'pitch' ),
	"param_name" => "qode_hover_animation",
	"admin_label" => true,
	"value" => array(
        esc_html__( "No Animation", 'pitch' ) => "",
        esc_html__( "Grayscale to Color", 'pitch' ) => "grayscale_to_color"
    ),
	'save_always' => true
));

vc_add_param("vc_single_image",  array(
	"type" => "dropdown",
	"heading" => esc_html__( "CSS Animation", 'pitch' ),
	"param_name" => "qode_css_animation",
	"admin_label" => true,
	"value" => $animations,
	'save_always' => true
));

vc_add_param("vc_single_image",  array(
	"type" => "textfield",
	"heading" => esc_html__( "Transition delay (s)", 'pitch' ),
	"param_name" => "transition_delay",
	"admin_label" => true,
	"value" => "",
	"dependency" => array("element" => "qode_css_animation", "not_empty" => true)
));

function pitch_qode_add_open_prettyphoto() {
    //Get current values stored in the Link Target in "Single Image" element
    $param = WPBMap::getParam('vc_single_image', 'img_link_target');
    //Append new value to the 'value' array
    $param['value'][esc_html__('Open prettyPhoto', 'pitch')] = 'open_prettyphoto';
    //Finally "mutate" param with new values
    WPBMap::mutateParam('vc_single_image', $param);
}
add_action('init', 'pitch_qode_add_open_prettyphoto',11);


/*************************************
 	Mapping Shortcodes
 *************************************/


/*** Elements Holder ***/

class WPBakeryShortCode_No_Elements_Holder  extends WPBakeryShortCodesContainer {}
vc_map( array(
	"name" => esc_html__( 'Elements Holder', 'pitch' ),
	"base" => "no_elements_holder",
	"as_parent" => array('only' => 'no_elements_holder_item'),
	"content_element" => true,
	"category" => esc_html__( 'by Select', 'pitch' ),
	"icon" => "icon-wpb-elements-holder extended-custom-icon",
	"show_settings_on_create" => true,
	"js_view" => 'VcColumnView',
	"params" => array(
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Background Color", 'pitch' ),
			"param_name" => "background_color",
			"value" => ""
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Columns", 'pitch' ),
			"param_name" => "number_of_columns",
			"value" => array(
				esc_html__( "1 Column", 'pitch' ) => "one_column",
				esc_html__( "2 Columns", 'pitch' ) => "two_columns",
				esc_html__( "3 Columns", 'pitch' ) => "three_columns",
				esc_html__( "4 Columns", 'pitch' ) => "four_columns",
				esc_html__( "5 Columns", 'pitch' ) => "five_columns",
				esc_html__( "6 Columns", 'pitch' ) => "six_columns"
			),
			'save_always' => true
		),
		array(
			"type" => "checkbox",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Items Float Left", 'pitch' ),
			"param_name" => "items_float_left",
			"value" => array("Make Items Float Left?" => "yes")
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"group" => esc_html__( "Width & Responsiveness", 'pitch' ),
			"heading" => esc_html__( "Switch to One Column", 'pitch' ),
			"param_name" => "switch_to_one_column",
			"value" => array(
				esc_html__( "Default", 'pitch' ) => "",
				esc_html__( "Below 1300px", 'pitch' ) => "1300",
				esc_html__( "Below 1024px", 'pitch' ) => "1024",
				esc_html__( "Below 768px", 'pitch' ) => "768",
				esc_html__( "Below 600px", 'pitch' ) => "600",
				esc_html__( "Below 480px", 'pitch' ) => "480",
				esc_html__( "Never", 'pitch' ) => "never"
			),
			"description" => esc_html__( "Choose on which stage item will be in one column", 'pitch' )
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"group" => esc_html__( "Width & Responsiveness", 'pitch' ),
			"heading" => esc_html__( "Choose Alignment In Responsive Mode", 'pitch' ),
			"param_name" => "alignment_one_column",
			"value" => array(
				esc_html__( "Default", 'pitch' ) => "",
				esc_html__( "Left", 'pitch' ) => "left",
				esc_html__( "Center", 'pitch' ) => "center",
				esc_html__( "Right", 'pitch' ) => "right"
			),
			"description" => esc_html__( "Alignment When Items are in One Column", 'pitch' )
		)
	)
) );


/*** Elements Holder Item ***/

class WPBakeryShortCode_No_Elements_Holder_Item  extends WPBakeryShortCodesContainer {}
vc_map( array(
	"name" => esc_html__( 'Elements Holder Item', 'pitch' ),
	"base" => "no_elements_holder_item",
	"as_parent" => array('except' => 'vc_accordion, no_cover_boxes, no_portfolio_list, no_portfolio_slider'),
	"as_child" => array('only' => 'no_elements_holder'),
	"content_element" => true,
	"category" => esc_html__( 'by Select', 'pitch' ),
	"icon" => "icon-wpb-elements-holder-item extended-custom-icon",
	"show_settings_on_create" => true,
	"js_view" => 'VcColumnView',
	"params" => array(
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Background Color", 'pitch' ),
			"param_name" => "background_color",
			"value" => ""
		),
		array(
			"type" => "attach_image",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Background Image", 'pitch' ),
			"param_name" => "background_image",
			"value" => ""
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Padding", 'pitch' ),
			"param_name" => "item_padding",
			"value" => "",
			"description" => esc_html__( "Please insert padding in format 0px 10px 0px 10px", 'pitch' )
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Alignment", 'pitch' ),
			"param_name" => "aligment",
			"value" => array(
				esc_html__( "Left", 'pitch' ) => "left",
				esc_html__( "Right", 'pitch' ) => "right",
				esc_html__( "Center", 'pitch' ) => "center"
			),
			'save_always' => true
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Vertical Alignment", 'pitch' ),
			"param_name" => "vertical_alignment",
			"value" => array(
				esc_html__( "Default", 'pitch' ) => "",
				esc_html__( "Top", 'pitch' ) => "top",
				esc_html__( "Middle", 'pitch' ) => "middle",
				esc_html__( "Bottom", 'pitch' ) => "bottom"
			)
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Animation Name", 'pitch' ),
			"param_name" => "animation_name",
			"value" => array(
				esc_html__( "No Animation", 'pitch' ) => "",
				esc_html__( "Flip In", 'pitch' ) => "flip_in",
				esc_html__( "Grow In", 'pitch' ) => "grow_in",
				esc_html__( "X Rotate", 'pitch' ) => "x_rotate",
				esc_html__( "Z Rotate", 'pitch' ) => "z_rotate",
				esc_html__( "Y Translate", 'pitch' ) => "y_translate",
				esc_html__( "Fade In", 'pitch' ) => "fade_in",
				esc_html__( "Fade In Down", 'pitch' ) => "fade_in_down",
				esc_html__( "Fade In Left X Rotate", 'pitch' ) => "fade_in_left_x_rotate"
			)
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Animation Delay (ms)", 'pitch' ),
			"param_name" => "animation_delay",
			"value" => "",
			"dependency" => array('element' => "animation_name", 'value' => array('flip_in', 'grow_in', 'x_rotate','z_rotate','y_translate','fade_in', 'fade_in_down', 'fade_in_left_x_rotate'))
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Advanced Animations", 'pitch' ),
			"param_name" => "advanced_animations",
			"value" => array(
				esc_html__( "No", 'pitch' ) => "no",
				esc_html__( "Yes", 'pitch' ) => "yes"
			),
			'save_always' => true
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Animation Start Position", 'pitch' ),
			"param_name" => "start_position",
			"value" => array(
				esc_html__( 'Bottom of Page', 'pitch' ) => 'bottom',
				esc_html__( 'Center of Page', 'pitch' ) => 'center'
			),
			'save_always' => true,
			"dependency" => array("element" => "advanced_animations", "value" => array("yes"))
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Start Animation Style", 'pitch' ),
			"param_name" => "start_animation_style",
			"dependency" => array("element" => "advanced_animations", "value" => array("yes"))
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Animation End Position", 'pitch' ),
			"param_name" => "end_position",
			"value" => array(
				esc_html__( "Center of Page", 'pitch' ) => "center",
				esc_html__( "Top of Page", 'pitch' ) => "top-bottom"
			),
			'save_always' => true,
			"dependency" => array("element" => "advanced_animations", "value" => array("yes"))
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "End Animation Style", 'pitch' ),
			"param_name" => "end_animation_style",
			"dependency" => array("element" => "advanced_animations", "value" => array("yes"))
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"group" => esc_html__( "Width & Responsiveness", 'pitch' ),
			"heading" => esc_html__( "Padding on screen size between 1300px-1600px", 'pitch' ),
			"param_name" => "item_padding_1300_1600",
			"value" => "",
			"description" => esc_html__( "Please insert padding in format 0px 10px 0px 10px", 'pitch' )
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"group" => esc_html__( "Width & Responsiveness", 'pitch' ),
			"heading" => esc_html__( "Padding on screen size between 1024px-1300px", 'pitch' ),
			"param_name" => "item_padding_1024_1300",
			"value" => "",
			"description" => esc_html__( "Please insert padding in format 0px 10px 0px 10px", 'pitch' )
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"group" => esc_html__( "Width & Responsiveness", 'pitch' ),
			"heading" => esc_html__( "Padding on screen size between 768px-1024px", 'pitch' ),
			"param_name" => "item_padding_768_1024",
			"value" => "",
			"description" => esc_html__( "Please insert padding in format 0px 10px 0px 10px", 'pitch' )
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"group" => esc_html__( "Width & Responsiveness", 'pitch' ),
			"heading" => esc_html__( "Padding on screen size between 600px-768px", 'pitch' ),
			"param_name" => "item_padding_600_768",
			"value" => "",
			"description" => esc_html__( "Please insert padding in format 0px 10px 0px 10px", 'pitch' )
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"group" => esc_html__( "Width & Responsiveness", 'pitch' ),
			"heading" => esc_html__( "Padding on screen size between 480px-600px", 'pitch' ),
			"param_name" => "item_padding_480_600",
			"value" => "",
			"description" => esc_html__( "Please insert padding in format 0px 10px 0px 10px", 'pitch' )
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"group" => esc_html__( "Width & Responsiveness", 'pitch' ),
			"heading" => esc_html__( "Padding on Screen Size Bellow 480px", 'pitch' ),
			"param_name" => "item_padding_480",
			"value" => "",
			"description" => esc_html__( "Please insert padding in format 0px 10px 0px 10px", 'pitch' )
		)
	)
) );


/*** Bordered Elements Holder ***/

class WPBakeryShortCode_No_Bordered_Elements_Holder extends WPBakeryShortCodesContainer {}
vc_map( array(
	'name' => esc_html__( 'Bordered Elements Holder', 'pitch' ),
	'base' => 'no_bordered_elements_holder',
	'as_parent' => array('except' => 'vc_row'),
	'content_element' => true,
	'category' => esc_html__( 'by Select', 'pitch' ),
	"icon" => "icon-wpb-bordered-elements-holder-item extended-custom-icon",
	'show_settings_on_create' => true,
	'js_view' => 'VcColumnView',
	'params' => array(
		array(
			'type' => 'dropdown',
			'holder' => 'div',
			'class' => '',
			'heading' => esc_html__( 'Border Animation Type', 'pitch' ),
			'param_name' => 'animation_type',
			'value' => array(
				esc_html__( 'No Animation', 'pitch' ) => '',
				esc_html__( 'Continue Line', 'pitch' ) => 'qode_box_continue_line',
				esc_html__( 'Corner Line', 'pitch' ) => 'qode_box_corner_line',
				esc_html__( 'Simultaneous Line', 'pitch' ) => 'qode_box_simultaneous_line'
			),
			'description' => esc_html__( 'Choose type of animation', 'pitch' )
		),
		array(
			'type' => 'colorpicker',
			'holder' => 'div',
			'class' => '',
			'heading' => esc_html__( 'Border Color', 'pitch' ),
			'param_name' => 'border_color',
			'value' => ''
		),
		array(
			'type' => 'textfield',
			'holder' => 'div',
			'class' => '',
			'heading' => esc_html__( 'Border Width (px)', 'pitch' ),
			'param_name' => 'border_width',
			'value' => ''
		),
		array(
			'type' => 'textfield',
			'holder' => 'div',
			'class' => '',
			'heading' => esc_html__( 'Duration of the Animation (s)', 'pitch' ),
			'param_name' => 'animation_time',
			'value' => '',
			'description' => esc_html__( 'Default is 2 sec', 'pitch' ),
			'dependency' => array('element' => 'animation_type', 'value' => array('qode_box_continue_line', 'qode_box_corner_line', 'qode_box_simultaneous_line'))
		),
		array(
			'type' => 'textfield',
			'holder' => 'div',
			'class' => '',
			'heading' => esc_html__( 'Holder Padding (px)', 'pitch' ),
			'param_name' => 'holder_padding',
			'value' => ''
		)
	)
) );


/*** Blog List ***/

vc_map( array(
	"name" => esc_html__( "Blog List", 'pitch' ),
	"base" => "no_blog_list",
	"icon" => "icon-wpb-blog-list extended-custom-icon",
	"category" => esc_html__( 'by Select', 'pitch' ),
	"allowed_container_element" => 'vc_row',
	"params" => array_merge(
        array(
            array(
                "type" => "dropdown",
		        "class" => "",
				"admin_label" => true,
                "heading" => esc_html__( "Type", 'pitch' ),
                "param_name" => "type",
                "value" => array(
                    esc_html__( "Image in left box", 'pitch' ) => "image_in_box",
                    esc_html__( "Boxes", 'pitch' ) => "boxes",
                    esc_html__( "Post Over Image", 'pitch' ) => "post_over_image",
                    esc_html__( "Image With Date", 'pitch' ) => "image_with_date",
                    esc_html__( "Minimal", 'pitch' ) => "minimal",
                    esc_html__( "Split column", 'pitch' ) => "split_column",
                    esc_html__( "Date in Left Section", 'pitch' ) => "date_in_left_section",
                    esc_html__( "Masonry", 'pitch' ) => "masonry"
                ),
				'save_always' => true
            ),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Number of Posts", 'pitch' ),
                "param_name" => "number_of_posts",
                "dependency" => Array('element' => "type", 'value' => array('image_in_box', 'minimal', 'post_over_image','boxes','split_column', 'date_in_left_section', 'masonry'))
            ),
            array(
                "type" => "dropdown",
                "class" => "",
                "heading" => esc_html__( "Image Size", 'pitch' ),
                "param_name" => "image_size",
                "value" => array(
                    esc_html__( "Original", 'pitch' ) => "original",
                    esc_html__( "Landscape", 'pitch' ) => "landscape",
                    esc_html__( "Square", 'pitch' ) => "square",
                    esc_html__( "Custom Size", 'pitch' ) => "custom"
                ),
				'save_always' => true,
                "dependency" => Array('element' => "type", 'value' => array('boxes','date_in_left_section', 'split_column'))
            ),
            array(
                "type" => "textfield",
                "class" => "",
                "heading" => esc_html__( "Image Width", 'pitch' ),
                "param_name" => "image_width",
                "value" => "",
                "description" => esc_html__( "Set custom image width", 'pitch' ),
                "dependency" => Array('element' => "image_size", 'value' => array('custom'))
            ),
            array(
                "type" => "textfield",
                "class" => "",
                "heading" => esc_html__( "Image Height", 'pitch' ),
                "param_name" => "image_height",
                "value" => "",
                "description" => esc_html__( "Set custom image size", 'pitch' ),
                "dependency" => Array('element' => "image_size", 'value' => array('custom'))
            ),
            array(
                "type" => "dropdown",
                "class" => "",
                "heading" => esc_html__( "Show Thumbnail", 'pitch' ),
                "param_name" => "show_thumbnail",
                "value" => array(
                    esc_html__( "Yes", 'pitch' ) => "yes",
                    esc_html__( "No", 'pitch' ) => "no",
                ),
				'save_always' => true,
                "dependency" => Array('element' => "type", 'value' => array('boxes'))
            ),
            array(
                "type" => "dropdown",
                "class" => "",
                "heading" => esc_html__( "Number of Columns", 'pitch' ),
                "param_name" => "number_of_columns",
                "value" => array(
                    esc_html__( "One", 'pitch' ) => "1",
                    esc_html__( "Two", 'pitch' ) => "2",
                    esc_html__( "Three", 'pitch' ) => "3",
                    esc_html__( "Four", 'pitch' ) => "4"
                ),
				'save_always' => true,
                "dependency" => Array('element' => "type", 'value' => array('boxes','post_over_image', 'image_with_date', 'date_in_left_section'))
            ),

            array(
                "type" => "colorpicker",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Overlay Color", 'pitch' ),
                "param_name" => "overlay_color",
                "dependency" => Array('element' => "type", 'value' => array('boxes'))
            ),
            array(
                "type" => "dropdown",
                "class" => "",
                "heading" => esc_html__( "Display Overlay Icon", 'pitch' ),
                "param_name" => "overlay_icon",
                "value" => array(
                    esc_html__( "No", 'pitch' ) => "0",
                    esc_html__( "Yes", 'pitch' ) => "1"
                ),
				'save_always' => true,
                "dependency" => Array('element' => "type", 'value' => array('boxes'))
            ),
            array(
                "type" => "dropdown",
				"admin_label" => true,
                "class" => "",
                "heading" => esc_html__( "Order By", 'pitch' ),
                "param_name" => "order_by",
                "value" => array(
                    esc_html__( "Title", 'pitch' ) => "title",
                    esc_html__( "Date", 'pitch' ) => "date"
                ),
				'save_always' => true,
                "dependency" => Array('element' => "type", 'value' => array('image_in_box', 'boxes','post_over_image', 'image_with_date', 'minimal', 'split_column', 'date_in_left_section', 'masonry'))
            ),
            array(
                "type" => "dropdown",
				"admin_label" => true,
                "class" => "",
                "heading" => esc_html__( "Order", 'pitch' ),
                "param_name" => "order",
                "value" => array(
                    esc_html__( "ASC", 'pitch' ) => "ASC",
                    esc_html__( "DESC", 'pitch' ) => "DESC"
                ),
				'save_always' => true,
                "dependency" => Array('element' => "type", 'value' => array('image_in_box', 'boxes','post_over_image', 'image_with_date', 'minimal', 'split_column', 'date_in_left_section', 'masonry'))
            ),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Category Slug", 'pitch' ),
                "param_name" => "category",
                "description" => esc_html__( "Leave empty for all or use comma for list", 'pitch' )
            ),
            array(
                "type" => "dropdown",
                "class" => "",
                "heading" => esc_html__( "Vertical Alignment of text", 'pitch' ),
                "param_name" => "vertical_align_text",
                "value" => array(
                    esc_html__( "Default/middle", 'pitch' ) => "middle",
                    esc_html__( "Top", 'pitch' ) => "top",
                    esc_html__( "Bottom", 'pitch' ) => 'bottom'
                ),
				'save_always' => true,
                "dependency" => array('element' => 'type', 'value' => array('split_column'))
            ),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Text length", 'pitch' ),
                "param_name" => "text_length",
                "description" => esc_html__( "Number of characters", 'pitch' )
            ),
            array(
                "type" => "dropdown",
                "class" => "",
                "heading" => esc_html__( "Title Tag", 'pitch' ),
                "param_name" => "title_tag",
                "value" => array(
                    ""   => "",
                    esc_html__( "h2", 'pitch' ) => "h2",
                    esc_html__( "h3", 'pitch' ) => "h3",
                    esc_html__( "h4", 'pitch' ) => "h4",
                    esc_html__( "h5", 'pitch' ) => "h5",
                    esc_html__( "h6", 'pitch' ) => "h6",
                )
            ),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Title Size (px)", 'pitch' ),
                "param_name" => "title_size"
            ),
            array(
                "type" => "colorpicker",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Title Color", 'pitch' ),
                "param_name" => "title_color"
            ),
            array(
                "type" => "dropdown",
                "class" => "",
                "heading" => esc_html__( "Display excerpt", 'pitch' ),
                "param_name" => "display_excerpt",
                "value" => array(
                    esc_html__( "Default", 'pitch' ) => "",
                    esc_html__( "Yes", 'pitch' ) => "1",
                    esc_html__( "No", 'pitch' ) => "0"
                )
            ),
            array(
                "type" => "colorpicker",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Excerpt Color", 'pitch' ),
                "param_name" => "excerpt_color",
                "dependency" => Array('element' => "display_excerpt", 'value' => array('1', ''))
            ),
            array(
                "type" => "dropdown",
                "class" => "",
                "heading" => esc_html__( "Info Position", 'pitch' ),
                "param_name" => "info_position",
                "value" => array(
                    esc_html__( "Default", 'pitch' ) => "",
                    esc_html__( "Top", 'pitch' ) => "top",
                    esc_html__( "Bottom", 'pitch' ) => "bottom"
                ),
                "dependency" => array('element' => "type", 'value' => array('image_in_box', 'minimal', 'post_over_image','boxes','image_with_date'))
            ),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Post info font size (px)", 'pitch' ),
                "param_name" => "post_info_font_size",
                "dependency" => Array('element' => "type", 'value' => array('image_in_box', 'boxes','post_over_image', 'image_with_date', 'minimal', 'split_column', 'date_in_left_section'))
            ),
            array(
                "type" => "colorpicker",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Post info color", 'pitch' ),
                "param_name" => "post_info_color",
                "dependency" => Array('element' => "type", 'value' => array('image_in_box', 'boxes','post_over_image', 'image_with_date', 'minimal', 'split_column', 'date_in_left_section'))
            ),
            array(
                "type" => "colorpicker",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Post info link color", 'pitch' ),
                "param_name" => "post_info_link_color",
                "dependency" => Array('element' => "type", 'value' => array('image_in_box', 'boxes','post_over_image', 'image_with_date', 'minimal', 'split_column', 'date_in_left_section'))
            ),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Post info font family", 'pitch' ),
                "param_name" => "post_info_font_family",
                "dependency" => Array('element' => "type", 'value' => array('image_in_box', 'boxes','post_over_image', 'image_with_date', 'minimal', 'split_column', 'date_in_left_section'))
            ),
            array(
                "type" => "dropdown",
                "class" => "",
                "heading" => esc_html__( "Post info text transform", 'pitch' ),
                "param_name" => "post_info_text_transform",
                "value" => array(
                    esc_html__( "Default", 'pitch' ) => "",
                    esc_html__( "None", 'pitch' ) => "none",
                    esc_html__( "Capitalize", 'pitch' ) => "capitalize",
                    esc_html__( "Uppercase", 'pitch' ) => "uppercase",
                    esc_html__( "Lowercase", 'pitch' ) => "lowercase"
                ),
                "dependency" => Array('element' => "type", 'value' => array('image_in_box', 'boxes','post_over_image', 'image_with_date', 'minimal', 'split_column', 'date_in_left_section'))
            ),
            array(
                "type" => "dropdown",
                "class" => "",
                "heading" => esc_html__( "Post info font weight", 'pitch' ),
                "param_name" => "post_info_font_weight",
                "value" => $font_weight_array,
				'save_always' => true,
                "dependency" => Array('element' => "type", 'value' => array('image_in_box', 'boxes','post_over_image', 'image_with_date', 'minimal', 'split_column', 'date_in_left_section'))
            ),
            array(
                "type" => "dropdown",
                "class" => "",
                "heading" => esc_html__( "Post info font style", 'pitch' ),
                "param_name" => "post_info_font_style",
                "value" => array(
                    esc_html__( "Default", 'pitch' ) => "",
                    esc_html__( "Normal", 'pitch' ) => "normal",
                    esc_html__( "Italic", 'pitch' ) => "italic"
                ),
                "dependency" => Array('element' => "type", 'value' => array('image_in_box', 'boxes','post_over_image', 'image_with_date', 'minimal', 'split_column', 'date_in_left_section'))
            ),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Post info letter spacing (px)", 'pitch' ),
                "param_name" => "post_info_letter_spacing",
                "dependency" => Array('element' => "type", 'value' => array('image_in_box', 'boxes','post_over_image', 'image_with_date', 'minimal', 'split_column', 'date_in_left_section'))
            ),
            array(
                "type" => "dropdown",
                "class" => "",
                "heading" => esc_html__( "Display category", 'pitch' ),
                "param_name" => "display_category",
                "value" => array(
                    esc_html__( "Default", 'pitch' ) => "",
                    esc_html__( "Yes", 'pitch' ) => "1",
                    esc_html__( "No", 'pitch' ) => "0"
                ),
                "dependency" => Array('element' => "type", 'value' => array('image_in_box','boxes','image_with_date','minimal', 'split_column', 'masonry'))
            ),
            array(
                "type" => "dropdown",
                "class" => "",
                "heading" => esc_html__( "Display date", 'pitch' ),
                "param_name" => "display_date",
                "value" => array(
                    esc_html__( "Default", 'pitch' ) => "",
                    esc_html__( "Yes", 'pitch' ) => "1",
                    esc_html__( "No", 'pitch' ) => "0"
                ),
                "dependency" => Array('element' => "type", 'value' => array('image_in_box', 'boxes','post_over_image', 'image_with_date', 'minimal', 'split_column', 'date_in_left_section', 'masonry'))
            ),
            array(
                "type" => "dropdown",
                "class" => "",
                "heading" => esc_html__( "Date Position", 'pitch' ),
                "param_name" => "date_place",
                "value" => array(
                    esc_html__( "Date by Title", 'pitch' ) => "by_title",
                    esc_html__( "Date by Post Info", 'pitch' ) => "by_post_info",
                    esc_html__( "Date over Title", 'pitch' ) => "over_title"
                ),
				'save_always' => true,
                "description" => esc_html__( 'Choose where the date will be placed', 'pitch' ),
                "dependency" => Array('element' => "type", 'value' => array('boxes','image_in_box','minimal'))
            ),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Date Size (px)", 'pitch' ),
                "param_name" => "date_size",
                "dependency" => array('element' => "type", 'value' => array('boxes', 'image_in_box','minimal'))
            ),
            array(
                "type" => "dropdown",
                "class" => "",
                "heading" => esc_html__( "Date position", 'pitch' ),
                "param_name" => "date_position",
                "value" => array(
                    esc_html__( "In icon", 'pitch' ) => "in_icon",
                    esc_html__( "Down in info section", 'pitch' ) => "down_in_info_section"
                ),
				'save_always' => true,
                "dependency" => Array('element' => "type", 'value' => array('image_with_date'))
            ),
            array(
                "type" => "dropdown",
                "class" => "",
                "heading" => esc_html__( "Display author", 'pitch' ),
                "param_name" => "display_author",
                "value" => array(
                    esc_html__( "Default", 'pitch' ) => "",
                    esc_html__( "Yes", 'pitch' ) => "1",
                    esc_html__( "No", 'pitch' ) => "0"
                )
            ),
            array(
                "type" => "dropdown",
                "class" => "",
                "heading" => esc_html__( "Display comments", 'pitch' ),
                "param_name" => "display_comments",
                "value" => array(
                    esc_html__( "Default", 'pitch' ) => "",
                    esc_html__( "Yes", 'pitch' ) => "1",
                    esc_html__( "No", 'pitch' ) => "0"
                ),
                "dependency" => Array('element' => "type", 'value' => array('image_in_box','boxes','image_with_date','split_column','date_in_left_section'))
            ),
            array(
                "type" => "colorpicker",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Box Background Color", 'pitch' ),
                "param_name" => "background_color",
                "dependency" => Array('element' => "type", 'value' => array('boxes', 'image_in_box', 'split_column','masonry'))
            ),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Box Padding", 'pitch' ),
                "param_name" => "box_info_padding",
                "description" => esc_html__( "Please insert padding in format (top right bottom left) i.e. 5px 5px 5px 5px", 'pitch' ),
                "dependency" => Array('element' => "type", 'value' => array('boxes', 'image_in_box', 'split_column','masonry'))
            ),array(
                "type" => "dropdown",
                "class" => "",
                "heading" => esc_html__( "Border Around Post Info", 'pitch' ),
                "param_name" => "border_around_item",
                "value" => array(
                    esc_html__( "No", 'pitch' ) => "no",
                    esc_html__( "Yes", 'pitch' ) => "yes"
                ),
				'save_always' => true,
                "dependency" => Array('element' => "type", 'value' => 'masonry')
            ),array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Border Width", 'pitch' ),
                "param_name" => "item_border_width",
                "dependency" => Array('element' => "border_around_item", 'value' => 'yes')
            ),array(
                "type" => "colorpicker",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Border Color", 'pitch' ),
                "param_name" => "item_border_color",
                "dependency" => Array('element' => "border_around_item", 'value' => 'yes')
            ),
            array(
                "type" => "dropdown",
                "class" => "",
				"admin_label" => true,
                "heading" => esc_html__( "Separator", 'pitch' ),
                "param_name" => "separator",
                "value" => array(
                    esc_html__( "Yes", 'pitch' ) => "yes",
                    esc_html__( "No", 'pitch' ) => "no"
                ),
				'save_always' => true,
                "dependency" => array('element' => "type", 'value' => array('post_over_image'))
            ),
            array(
                "type" => "colorpicker",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Separator Color", 'pitch' ),
                "param_name" => "separator_color",
                "dependency" => array('element' => "separator", 'value' => array('yes'))
            ),
            array(
                "type" => "dropdown",
                "class" => "",
                "heading" => esc_html__( "Separator Border Style", 'pitch' ),
                "param_name" => "separator_border_style",
                "value" => array(
                    "" => "",
                    esc_html__( "Dashed", 'pitch' ) => "dashed",
                    esc_html__( "Solid", 'pitch' ) => "solid"
                ),
                "dependency" => array('element' => "separator", 'value' => array('yes'))
            ),
            array(
                "type" => "colorpicker",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Separator Between Item Color", 'pitch' ),
                "param_name" => "border_color",
                "dependency" => array('element' => "type", 'value' => array('minimal','image_in_box'))
            ),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Separator Between Item Thickness (px)", 'pitch' ),
                "param_name" => "border_width",
                "dependency" => array('element' => "type", 'value' => array('minimal','image_in_box'))

            ),
            array(
                "type" => "dropdown",
                "class" => "",
                "heading" => esc_html__( "Display Like", 'pitch' ),
                "param_name" => "display_like",
                "value" => array(
                    esc_html__( "Default", 'pitch' ) => "",
                    esc_html__( "Yes", 'pitch' ) => "1",
                    esc_html__( "No", 'pitch' ) => "0"
                ),
                "dependency" => array('element' => 'type', 'value' => array('date_in_left_section')),
                "description" => esc_html__( "Default value is Yes", 'pitch' )
            ),
            array(
                "type" => "dropdown",
                "class" => "",
                "heading" => esc_html__( "Display Share", 'pitch' ),
                "param_name" => "display_share",
                "value" => array(
                    esc_html__( "Default", 'pitch' ) => "",
                    esc_html__( "Yes", 'pitch' ) => "1",
                    esc_html__( "No", 'pitch' ) => "0"
                ),
                "dependency" => array('element' => 'type', 'value' => array('date_in_left_section')),
                "description" => esc_html__( "Default value is No", 'pitch' )
            ),
            array(
                "type" => "dropdown",
                "class" => "",
                "heading" => esc_html__( "Display Button", 'pitch' ),
                "param_name" => "display_button",
                "value" => array(
                    esc_html__( "Default", 'pitch' ) => "",
                    esc_html__( "Yes", 'pitch' ) => "1",
                    esc_html__( "No", 'pitch' ) => "0"
                ),
                "description" => esc_html__( "Show button leading to post single page", 'pitch' ),
                "dependency" => Array('element' => "type", 'value' => array('image_in_box', 'boxes','post_over_image', 'image_with_date', 'minimal', 'split_column', 'date_in_left_section'))

            ),
            array(
                "type" => "dropdown",
                "class" => "",
                "heading" => esc_html__( "Button Size", 'pitch' ),
                "param_name" => "button_size",
                "value" => array(
                    esc_html__( "Default", 'pitch' ) => "",
                    esc_html__( "Small", 'pitch' ) => "small",
                    esc_html__( "Medium", 'pitch' ) => "medium",
                    esc_html__( "Large", 'pitch' ) => "large",
                    esc_html__( "Extra Large", 'pitch' ) => "big_large"
                ),
                "description" => esc_html__( "Default value is small", 'pitch' ),
                "dependency" => array('element' => "display_button", 'value' => '1')
            ),
            array(
                "type" => "dropdown",
                "class" => "",
                "heading" => esc_html__( "Button Style", 'pitch' ),
                "param_name" => "button_style",
                "value" => array(
                    esc_html__( "Default", 'pitch' ) => "",
                    esc_html__( "White", 'pitch' ) => "white"
                ),
                "dependency" => array('element' => "display_button", 'value' => '1')
            ),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Button Text", 'pitch' ),
                "param_name" => "button_text",
                "description" => esc_html__( "Default text is LEARN MORE", 'pitch' ),
                "dependency" => array('element' => "display_button", 'value' => '1')
            ),
            array(
                "type" => "colorpicker",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Button Text Color", 'pitch' ),
                "param_name" => "button_color",
                "dependency" => array('element' => "display_button", 'value' => '1')
            ),
            array(
                "type" => "colorpicker",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Button Text Hover Color", 'pitch' ),
                "param_name" => "button_hover_color",
                "dependency" => array('element' => "display_button", 'value' => '1')
            ),
            array(
                "type" => "colorpicker",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Button Background Color", 'pitch' ),
                "param_name" => "button_background_color",
                "dependency" => array('element' => "display_button", 'value' => '1')
            ),
            array(
                "type" => "colorpicker",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Button Hover Background Color", 'pitch' ),
                "param_name" => "button_hover_background_color",
                "dependency" => array('element' => "display_button", 'value' => '1')
            ),
            array(
                "type" => "colorpicker",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Button Border Color", 'pitch' ),
                "param_name" => "button_border_color",
                "dependency" => array('element' => "display_button", 'value' => '1')
            ),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Button Border Width", 'pitch' ),
                "param_name" => "button_border_width",
                "dependency" => array('element' => "display_button", 'value' => '1')
            ),
            array(
                "type" => "colorpicker",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Button Hover Border Color", 'pitch' ),
                "param_name" => "button_hover_border_color",
                "dependency" => array('element' => "display_button", 'value' => '1')
            ),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Button Border Radius (px)", 'pitch' ),
                "param_name" => "button_border_radius",
                "description" => esc_html__( "Border radius for button", 'pitch' ),
                "dependency" => array('element' => "display_button", 'value' => '1')
            )
        ),
        pitch_qode_icon_collections()->getVCParamsArray( array( 'element' => 'display_button', 'value' => '1' ) ),
        array(
            array(
                "type" => "dropdown",
                "class" => "",
                "heading" => esc_html__( "Icon Position", 'pitch' ),
                "param_name" => "button_icon_position",
                "value" => array(
                    esc_html__( "Right", 'pitch' ) => "right",
                    esc_html__( "Left", 'pitch' ) => "left"
                ),
				'save_always' => true,
                "dependency" => Array('element' => pitch_qode_icon_collections()->iconPackParamName, 'not_empty' => true)
            ),
            array(
                "type" => "colorpicker",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Icon Color", 'pitch' ),
                "param_name" => "button_icon_color",
                "dependency" => Array('element' =>pitch_qode_icon_collections()->iconPackParamName, 'not_empty' => true)
            ),
			  array(
                "type" => "colorpicker",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Icon Hover Color", 'pitch' ),
                "param_name" => "button_icon_hover_color",
                "dependency" => Array('element' =>pitch_qode_icon_collections()->iconPackParamName, 'not_empty' => true)
            )

        )
	)
) );


/*** Blog Carousel ***/

vc_map( array(
	"name" => esc_html__( "Blog Carousel", 'pitch' ),
	"base" => "no_blog_carousel",
	"category" => esc_html__( 'by Select', 'pitch' ),
	"icon" => "icon-wpb-blog-carousel extended-custom-icon",
	"allowed_container_element" => 'vc_row',
	"params" => array(
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Carousel info type", 'pitch' ),
			"param_name" => "type",
			"value" => array(
				esc_html__( "Default", 'pitch' ) => "",
				esc_html__( "Post Info visible", 'pitch' ) => "info_always",
				esc_html__( "Post Info in Bottom", 'pitch' ) => "info_in_bottom"
			)
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Image size", 'pitch' ),
			"param_name" => "image_size",
			"value" => array(
				esc_html__( "Default", 'pitch' ) => "",
				esc_html__( "Original Size", 'pitch' ) => "full",
				esc_html__( "Landscape", 'pitch' ) => "landscape",
				esc_html__( "Portrait", 'pitch' ) => "portrait"
			)
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Order By", 'pitch' ),
			"param_name" => "order_by",
			"value" => array(
				"" => "",
				esc_html__( "Title", 'pitch' ) => "title",
				esc_html__( "Date", 'pitch' ) => "date"
			)
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Order", 'pitch' ),
			"param_name" => "order",
			"value" => array(
				"" => "",
				esc_html__( "ASC", 'pitch' ) => "ASC",
				esc_html__( "DESC", 'pitch' ) => "DESC",
			)
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Number", 'pitch' ),
			"param_name" => "number",
			"value" => "-1",
			"description" => esc_html__( "Number of blog posts on page (-1 is all)", 'pitch' )
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Number of Blog Posts Shown", 'pitch' ),
			"param_name" => "blogs_shown",
			"value" => array(
				"" => "",
				"3" => "3",
				"4" => "4",
				"5" => "5",
				"6" => "6"
			),
			'save_always' => true,
			"description" => esc_html__( "Number of blog posts that are showing at the same time in full width (on smaller screens is responsive so there will be less items shown)", 'pitch' ),
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Category", 'pitch' ),
			"param_name" => "category",
			"value" => "",
			"description" => esc_html__( "Category Slug (leave empty for all)", 'pitch' )
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Selected Projects", 'pitch' ),
			"param_name" => "selected_projects",
			"value" => "",
			"description" => esc_html__( "Selected Projects (leave empty for all, delimit by comma)", 'pitch' )
		),
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Info Box Background Color", 'pitch' ),
			"param_name" => "hover_box_color",
			"value" => ""
		),
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Post Info Color", 'pitch' ),
			"param_name" => "post_info_color",
			"value" => "",
			"dependency" => array("element" => "type","value" => "info_in_bottom")
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Show Author", 'pitch' ),
			"param_name" => "show_author",
			"value" => array(
				esc_html__( "Yes", 'pitch' ) => "yes",
				esc_html__( "No", 'pitch' ) => "no"
			),
			'save_always' => true,
			"description" => esc_html__( "Default value is Yes", 'pitch' ),
			"dependency" => array("element" => "type", "value" => "info_in_bottom")
		),
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Author Color", 'pitch' ),
			"param_name" => "author_color",
			"value" => "",
			"dependency" => array('element' => "show_author", 'value' => array('yes'))
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Show Category Names", 'pitch' ),
			"param_name" => "show_categories",
			"value" => array(
				esc_html__( "Yes", 'pitch' ) => "yes",
				esc_html__( "No", 'pitch' ) => "no"
			),
			'save_always' => true,
			"description" => esc_html__( "Default value is Yes", 'pitch' ),
		),
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Category Name Color", 'pitch' ),
			"param_name" => "category_color",
			"value" => "",
			"dependency" => array('element' => "show_categories", 'value' => array('yes'))
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Show Date", 'pitch' ),
			"param_name" => "show_date",
			"value" => array(
				esc_html__( "Yes", 'pitch' ) => "yes",
				esc_html__( "No", 'pitch' ) => "no"
			),
			'save_always' => true,
			"description" => esc_html__( "Default value is Yes", 'pitch' )
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Date Position", 'pitch' ),
			"param_name" => "date_position",
			"value" => array(
				esc_html__( "Above Title", 'pitch' ) => "above",
				esc_html__( "Below Title", 'pitch' ) => "below"
			),
			'save_always' => true,
			"description" => esc_html__( "Default value is Above", 'pitch' ),
			"dependency" => array('element' => "type",'value' => array('info_always',''))
		),
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Date Color", 'pitch' ),
			"param_name" => "date_color",
			"value" => "",
			"dependency" => array('element' => "show_date", 'value' => array('yes'))
		),
		array(
			"type" => "dropdown",
			"class" => "",
			"heading" => esc_html__( "Title Tag", 'pitch' ),
			"param_name" => "title_tag",
			"value" => array(
				""   => "",
				esc_html__( "h2", 'pitch' ) => "h2",
				esc_html__( "h3", 'pitch' ) => "h3",
				esc_html__( "h4", 'pitch' ) => "h4",
				esc_html__( "h5", 'pitch' ) => "h5",
				esc_html__( "h6", 'pitch' ) => "h6",
			)
		),
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Title Color", 'pitch' ),
			"param_name" => "title_color",
			"value" => ""
		),
		array(
			"type" => "checkbox",
			"class" => "",
			"heading" => esc_html__( "Prev/Next navigation", 'pitch' ),
			"value" => array("Enable prev/next navigation?" => "enable_navigation"),
			"param_name" => "enable_navigation"
		),
		array(
			"type" => "checkbox",
			"class" => "",
			"heading" => esc_html__( "Bullets navigation", 'pitch' ),
			"value" => array("Show bullets navigation?" => "yes"),
			"param_name" => "pager_navigation"
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Show Separator", 'pitch' ),
			"param_name" => "show_separator",
			"value" => array(
				esc_html__( "No", 'pitch' ) => "no",
				esc_html__( "Yes", 'pitch' ) => "yes"
			),
			'save_always' => true,
			"description" => esc_html__( "Show separator below title", 'pitch' ),
			"dependency" => array('element' => 'type', 'value' => array('info_always',''))
		),
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Separator Color", 'pitch' ),
			"param_name" => "separator_color",
			"dependency" => array('element' => "show_separator", 'value' => array('yes'))
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Separator Thickness (px)", 'pitch' ),
			"param_name" => "separator_thickness",
			"dependency" => array('element' => "show_separator", 'value' => array('yes'))
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Separator Width (px)", 'pitch' ),
			"param_name" => "separator_width",
			"dependency" => array('element' => "show_separator", 'value' => array('yes'))
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Extra class name", 'pitch' ),
			"param_name" => "add_class",
			"value" => "",
			"description" => esc_html__( "If you wish to style this particular blog carousel differently, you can use this field to add an extra class name to it and then refer to that class name in your css file.", 'pitch' )
		)
	)
) );


/*** Blog Slider***/

vc_map( array(
	"name" => esc_html__( "Blog Slider", 'pitch' ),
	"base" => "no_blog_slider",
	"category" => esc_html__( 'by Select', 'pitch' ),
	"icon" => "icon-wpb-blog-slider extended-custom-icon",
	"allowed_container_element" => 'vc_row',
	"params" => array(
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Slider Type", 'pitch' ),
			"param_name" => "type",
			"value" => array(
				esc_html__( "Info Centered", 'pitch' ) => "center",
				esc_html__( "Info in Bottom", 'pitch' ) => "bottom"
				),
			'save_always' => true
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Order By", 'pitch' ),
			"param_name" => "order_by",
			"value" => array(
				"" => "",
				esc_html__( "Title", 'pitch' ) => "title",
				esc_html__( "Date", 'pitch' ) => "date"
			)
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Order", 'pitch' ),
			"param_name" => "order",
			"value" => array(
				"" => "",
				esc_html__( "ASC", 'pitch' ) => "ASC",
				esc_html__( "DESC", 'pitch' ) => "DESC",
			)
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Number", 'pitch' ),
			"param_name" => "number",
			"value" => "-1",
			"description" => esc_html__( "Number of blog posts on page (-1 is all)", 'pitch' )
		),
		array(
			"type" => "dropdown",
			"class" => "",
			"heading" => esc_html__( "Title Tag", 'pitch' ),
			"param_name" => "title_tag",
			"value" => array(
				""   => "",
				esc_html__( "h2", 'pitch' ) => "h2",
				esc_html__( "h3", 'pitch' ) => "h3",
				esc_html__( "h4", 'pitch' ) => "h4",
				esc_html__( "h5", 'pitch' ) => "h5",
				esc_html__( "h6", 'pitch' ) => "h6",
			)
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Image size", 'pitch' ),
			"param_name" => "image_size",
			"value" => array(
				esc_html__( "Default", 'pitch' ) => "",
				esc_html__( "Original Size", 'pitch' ) => "full",
				esc_html__( "Landscape", 'pitch' ) => "landscape",
				esc_html__( "Portrait", 'pitch' ) => "portrait",
				esc_html__( "Custom Size", 'pitch' ) => "custom"
			)
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Image Width", 'pitch' ),
			"param_name" => "image_width",
			"value" => "",
			"description" => esc_html__( "Set custom image width", 'pitch' ),
			"dependency" => array("element" => "image_size", "value" => array("custom"))
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Image Height", 'pitch' ),
			"param_name" => "image_height",
			"value" => "",
			"description" => esc_html__( "Set custom image height", 'pitch' ),
			"dependency" => array("element" => "image_size", "value" => array("custom"))
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Category", 'pitch' ),
			"param_name" => "category",
			"value" => "",
			"description" => esc_html__( "Category Slug (leave empty for all)", 'pitch' )
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Selected Projects", 'pitch' ),
			"param_name" => "selected_projects",
			"value" => "",
			"description" => esc_html__( "Selected Projects (leave empty for all, delimit by comma)", 'pitch' )
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Show Category", 'pitch' ),
			"param_name" => "show_category",
			"value" => array(
				esc_html__( "Default", 'pitch' ) => "default",
				esc_html__( "Yes", 'pitch' ) => "yes",
				esc_html__( "No", 'pitch' ) => "no"
			),
			'save_always' => true
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Show Author", 'pitch' ),
			"param_name" => "show_author",
			"value" => array(
				esc_html__( "Default", 'pitch' ) => "default",
				esc_html__( "Yes", 'pitch' ) => "yes",
				esc_html__( "No", 'pitch' ) => "no"
			),
			'save_always' => true
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Show Date", 'pitch' ),
			"param_name" => "show_date",
			"value" => array(
				esc_html__( "Default", 'pitch' ) => "default",
				esc_html__( "Yes", 'pitch' ) => "yes",
				esc_html__( "No", 'pitch' ) => "no"
			),
			'save_always' => true
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Show Comments", 'pitch' ),
			"param_name" => "show_comments",
			"value" => array(
				esc_html__( "Default", 'pitch' ) => "default",
				esc_html__( "Yes", 'pitch' ) => "yes",
				esc_html__( "No", 'pitch' ) => "no"
			),
			'save_always' => true
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Show Read More Button", 'pitch' ),
			"param_name" => "show_read_more",
			"value" => array(
				esc_html__( "Default", 'pitch' ) => "default",
				esc_html__( "Yes", 'pitch' ) => "yes",
				esc_html__( "No", 'pitch' ) => "no"
			),
			'save_always' => true
		),
	)
) );

/*** Vertical Split Slider ***/

class WPBakeryShortCode_No_Vertical_Split_Slider  extends WPBakeryShortCodesContainer {}
vc_map( array(
	"name" => esc_html__( 'Vertical Split Slider', 'pitch' ),
	"base" => "no_vertical_split_slider",
	"as_parent" => array('only' => 'no_vertical_left_sliding_panel,no_vertical_right_sliding_panel'),
	"content_element" => true,
	"category" => esc_html__( 'by Select', 'pitch' ),
	"icon" => "icon-wpb-vertical-split-slider extended-custom-icon",
	"show_settings_on_create" => true,
	"js_view" => 'VcColumnView',
	"params" => array(
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Preloader Background Color", 'pitch' ),
			"param_name" => "background_color",
			"value" => ""
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Left Slide Panel size (%)", 'pitch' ),
			"param_name" => "left_slide_panel_size"
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Right Slide Panel size (%)", 'pitch' ),
			"param_name" => "right_slide_panel_size"
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Disable Dark/Light Header Skin Change", 'pitch' ),
			"param_name" => "disable_header_skin_change",
			"value" => array(
				esc_html__( "No", 'pitch' ) => "no",
				esc_html__( "Yes", 'pitch' ) => "yes"
			),
			'save_always' => true
		)
	)
) );


/*** Vertical Split Slider Left Panel ***/

class WPBakeryShortCode_No_Vertical_Left_Sliding_Panel  extends WPBakeryShortCodesContainer {}
vc_map( array(
	"name" => esc_html__( 'Left Sliding Panel', 'pitch' ),
	"base" => "no_vertical_left_sliding_panel",
	"as_parent" => array('only' => 'no_vertical_slide_content_item'),
	"as_child" => array('only' => 'no_vertical_split_slider'),
	"content_element" => true,
	"category" => esc_html__( 'by Select', 'pitch' ),
	"icon" => "icon-wpb-vertical-split-slider-left-panel extended-custom-icon",
	"show_settings_on_create" => false,
	"js_view" => 'VcColumnView',
	'params' => array()
) );


/*** Vertical Split Slider Right Panel ***/

class WPBakeryShortCode_No_Vertical_Right_Sliding_Panel  extends WPBakeryShortCodesContainer {}
vc_map( array(
	"name" => esc_html__( 'Right Sliding Panel', 'pitch' ),
	"base" => "no_vertical_right_sliding_panel",
	"as_parent" => array('only' => 'no_vertical_slide_content_item'),
	"as_child" => array('only' => 'no_vertical_split_slider'),
	"content_element" => true,
	"category" => esc_html__( 'by Select', 'pitch' ),
	"icon" => "icon-wpb-vertical-split-slider-right-panel extended-custom-icon",
	"show_settings_on_create" => false,
	"js_view" => 'VcColumnView',
	'params' => array()
) );


/*** Vertical Split Slider Content Item ***/

class WPBakeryShortCode_No_Vertical_Slide_Content_Item  extends WPBakeryShortCodesContainer {}
vc_map( array(
	"name" => esc_html__( 'Slide Content Item', 'pitch' ),
	"base" => "no_vertical_slide_content_item",
	"as_parent" => array('except' => 'vc_row, vc_accordion, no_cover_boxes, no_portfolio_list, no_portfolio_slider, no_carousel'),
	"as_child" => array('only' => 'no_vertical_left_sliding_panel, no_vertical_right_sliding_panel'),
	"content_element" => true,
	"category" => esc_html__( 'by Select', 'pitch' ),
	"icon" => "icon-wpb-vertical-split-slider-content-item extended-custom-icon",
	"show_settings_on_create" => true,
	"js_view" => 'VcColumnView',
	"params" => array(
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Background Color", 'pitch' ),
			"param_name" => "background_color",
			"value" => ""
		),
		array(
			"type" => "attach_image",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Background Image", 'pitch' ),
			"param_name" => "background_image",
			"value" => ""
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Padding left/right", 'pitch' ),
			"param_name" => "item_padding",
			"value" => "",
			"description" => esc_html__( "Please insert padding in format 10px", 'pitch' )
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Content Aligment", 'pitch' ),
			"param_name" => "alignment",
			"value" => array(
				esc_html__( "left", 'pitch' ) => "left",
				esc_html__( "right", 'pitch' ) => "right",
				esc_html__( "center", 'pitch' ) => "center"
			),
			'save_always' => true
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Header/Bullets Style", 'pitch' ),
			"param_name" => "header_style",
			"value" => array(
				""	=>	"",
				esc_html__( "Light", 'pitch' ) => "light",
				esc_html__( "Dark", 'pitch' ) => "dark"
			)
		)

	)
) );


/*** Vertical Split Slider With Text Over ***/

class WPBakeryShortCode_No_Vertical_Split_Slider_With_Text_Over  extends WPBakeryShortCodesContainer {}
vc_map( array(
	"name" => esc_html__( 'Vertical Split Slider With Text Over', 'pitch' ),
	"base" => "no_vertical_split_slider_with_text_over",
	"as_parent" => array('only' => 'no_vertical_split_slider_with_text_over_left_panel,no_vertical_split_slider_with_text_over_right_panel'),
	"content_element" => true,
	"category" => esc_html__( 'by Select', 'pitch' ),
	"icon" => "icon-wpb-vertical-split-slider extended-custom-icon",
	"show_settings_on_create" => true,
	"js_view" => 'VcColumnView',
	"params" => array(
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Preloader Background Color", 'pitch' ),
			"param_name" => "background_color",
			"value" => ""
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Slider Title", 'pitch' ),
			"param_name" => "slide_title",
			"value" => ""
		),
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Title Color", 'pitch' ),
			"param_name" => "title_color"
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Font Size (px)", 'pitch' ),
			"param_name" => "title_font_size",
			"value" => ""
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Font Family", 'pitch' ),
			"param_name" => "title_font_family"
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Line Height (px)", 'pitch' ),
			"param_name" => "title_line_height",
			"value" => ""
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Letter Spacing (px)", 'pitch' ),
			"param_name" => "title_letter_spacing",
			"value" => ""
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Font Weight", 'pitch' ),
			"param_name" => "title_font_weight",
			"value" => array(
				esc_html__( "Default", 'pitch' ) => "",
				esc_html__( "Thin 100", 'pitch' ) => "100",
				esc_html__( "Extra-Light 200", 'pitch' ) => "200",
				esc_html__( "Light 300", 'pitch' ) => "300",
				esc_html__( "Regular 400", 'pitch' ) => "400",
				esc_html__( "Medium 500", 'pitch' ) => "500",
				esc_html__( "Semi-Bold 600", 'pitch' ) => "600",
				esc_html__( "Bold 700", 'pitch' ) => "700",
				esc_html__( "Extra-Bold 800", 'pitch' ) => "800",
				esc_html__( "Ultra-Bold 900", 'pitch' ) => "900"
			)
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Text Transform", 'pitch' ),
			"param_name" => "title_text_transform",
			"value" => array(
				esc_html__( "Default", 'pitch' ) => "",
				esc_html__( "None", 'pitch' ) => "none",
				esc_html__( "Capitalize", 'pitch' ) => "capitalize",
				esc_html__( "Uppercase", 'pitch' ) => "uppercase",
				esc_html__( "Lowercase", 'pitch' ) => "lowercase"
			)
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Font Style", 'pitch' ),
			"param_name" => "title_font_style",
			"value" => array(
				"" => "",
				esc_html__( "Normal", 'pitch' ) => "normal",
				esc_html__( "Italic", 'pitch' ) => "italic"
			)
		)
	)
) );


/*** Vertical Split Slider With Text Over Left Panel ***/

class WPBakeryShortCode_No_Vertical_Split_Slider_With_Text_Over_Left_Panel  extends WPBakeryShortCodesContainer {}
vc_map( array(
	"name" => esc_html__( 'Left Panel', 'pitch' ),
	"base" => "no_vertical_split_slider_with_text_over_left_panel",
	"as_parent" => array('only' => 'no_vertical_split_slider_with_text_over_content'),
	"as_child" => array('only' => 'no_vertical_split_slider_with_text_over'),
	"content_element" => true,
	"category" => esc_html__( 'by Select', 'pitch' ),
	"icon" => "icon-wpb-vertical-split-slider-left-panel extended-custom-icon",
	"show_settings_on_create" => false,
	"params" => array(),
	"js_view" => 'VcColumnView'
) );


/*** Vertical Split Slider With Text Over Right Panel ***/

class WPBakeryShortCode_No_Vertical_Split_Slider_With_Text_Over_Right_Panel  extends WPBakeryShortCodesContainer {}
vc_map( array(
	"name" => esc_html__( 'Right Panel', 'pitch' ),
	"base" => "no_vertical_split_slider_with_text_over_right_panel",
	"as_parent" => array('only' => 'no_vertical_split_slider_with_text_over_content'),
	"as_child" => array('only' => 'no_vertical_split_slider_with_text_over'),
	"content_element" => true,
	"category" => esc_html__( 'by Select', 'pitch' ),
	"icon" => "icon-wpb-vertical-split-slider-right-panel extended-custom-icon",
	"show_settings_on_create" => false,
	"params" => array(),
	"js_view" => 'VcColumnView'
) );


/*** Vertical Split Slider With Text Over Content ***/

class WPBakeryShortCode_No_Vertical_Split_Slider_With_Text_Over_Content  extends WPBakeryShortCodesContainer {}
vc_map( array(
	"name" => esc_html__( 'Slide Content Item', 'pitch' ),
	"base" => "no_vertical_split_slider_with_text_over_content",
	"as_child" => array('only' => 'no_vertical_split_slider_with_text_over_left_panel, no_vertical_split_slider_with_text_over_right_panel'),
	"content_element" => true,
	"category" => esc_html__( 'by Select', 'pitch' ),
	"icon" => "icon-wpb-vertical-split-slider-content-item extended-custom-icon",
	"show_settings_on_create" => true,
	"params" => array(
		array(
			"type" => "attach_image",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Image", 'pitch' ),
			"param_name" => "background_image",
			"value" => ""
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Link", 'pitch' ),
			"param_name" => "link"
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Link Target", 'pitch' ),
			"param_name" => "target",
			"value" => array(
				esc_html__( "Self", 'pitch' ) => "_self",
				esc_html__( "Blank", 'pitch' ) => "_blank"
			),
			'save_always' => true
		)

	)
) );


/*** Image slider ***/

vc_map( array(
	"name" => esc_html__( "Image Slider", 'pitch' ),
	"base" => "no_image_slider_no_space",
	"category" => esc_html__( 'by Select', 'pitch' ),
	"icon" => "icon-wpb-image-slider-no-space extended-custom-icon",
	"allowed_container_element" => 'vc_row',
	"params" => array(
		array(
			"type" => "attach_images",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Images", 'pitch' ),
			"param_name" => "images"
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "On click", 'pitch' ),
			"param_name" => "on_click",
			"value" => array(
				esc_html__( "Do nothing", 'pitch' ) => "",
				esc_html__( "Open image in prettyphoto", 'pitch' ) => "prettyphoto",
				esc_html__( "Open image in new tab", 'pitch' ) => "new_tab",
				esc_html__( "Use custom links", 'pitch' ) => "use_custom_links"
			)
		),
		array(
			"type" => "textarea",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Custom Links", 'pitch' ),
			"param_name" => "custom_links",
			"value" => "",
			"dependency" => array('element' => 'on_click', 'value' => 'use_custom_links'),
			"description" => esc_html__( "Enter links for each image here. Divide links with comma.", 'pitch' )
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Custom links target", 'pitch' ),
			"param_name" => "custom_links_target",
			"value" => array(
				"" => "",
				esc_html__( "Same window", 'pitch' ) => "_self",
				esc_html__( "New window", 'pitch' ) => "_blank"
			),
			"dependency" => array('element' => 'on_click', 'value' => 'use_custom_links')
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Show info", 'pitch' ),
			"param_name" => "show_info",
			"value" => array(
				"" => "",
				esc_html__( "On Hover", 'pitch' ) => "on_hover",
				esc_html__( "In The Bottom Corner", 'pitch' ) => "in_bottom_corner",
			),
			"description" => esc_html__( "Show image title and description", 'pitch' )
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Info position", 'pitch' ),
			"param_name" => "info_position",
			"value" => array(
				esc_html__( "Bottom Left", 'pitch' ) => "bottom_left",
				esc_html__( "Bottom Right", 'pitch' ) => "bottom_right",
			),
			'save_always' => true,
			"dependency" => array('element' => "show_info", 'value' => array('in_bottom_corner'))
		),
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Background Color", 'pitch' ),
			"param_name" => "background_color",
			"dependency" => array('element' => "show_info", 'value' => array('on_hover','in_bottom_corner'))
		),
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Title Color", 'pitch' ),
			"param_name" => "title_color",
			"dependency" => array('element' => "show_info", 'value' => array('on_hover','in_bottom_corner'))
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Title font size (px)", 'pitch' ),
			"param_name" => "title_font_size",
			"value" => "",
			"dependency" => array('element' => "show_info", 'value' => array('on_hover','in_bottom_corner'))
		),
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Description Color", 'pitch' ),
			"param_name" => "description_color",
			"dependency" => array('element' => "show_info", 'value' => array('on_hover','in_bottom_corner'))
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Description font size (px)", 'pitch' ),
			"param_name" => "description_font_size",
			"value" => "",
			"dependency" => array('element' => "show_info", 'value' => array('on_hover','in_bottom_corner'))
		),
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Separator Color", 'pitch' ),
			"param_name" => "separator_color",
			"dependency" => array('element' => "show_info", 'value' => 'on_hover')
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Separator opacity (0-1)", 'pitch' ),
			"param_name" => "separator_opacity",
			"value" => "",
			"dependency" => array('element' => "show_info", 'value' => 'on_hover')
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Full Screen Height", 'pitch' ),
			"param_name" => "full_screen",
			"value" => array(
				esc_html__( "No", 'pitch' ) => "no",
				esc_html__( "Yes", 'pitch' ) => "yes"
			),
			'save_always' => true
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Slider height (px)", 'pitch' ),
			"param_name" => "height",
			"value" => "",
			"dependency" => array('element' => 'full_screen', 'value' => 'no')
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Navigation style", 'pitch' ),
			"param_name" => "navigation_style",
			"value" => array(
				"" => "",
				esc_html__( "Light", 'pitch' ) => "light",
				esc_html__( "Dark", 'pitch' ) => "dark"
			)
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Highlight Active Image", 'pitch' ),
			"param_name" => "highlight_active_image",
			"value" => array(
				"" => "",
				esc_html__( "Yes", 'pitch' ) => "yes",
				esc_html__( "No", 'pitch' ) => "no"
			)
		),
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Highlight Inactive Color", 'pitch' ),
			"param_name" => "highlight_inactive_color",
			"dependency" => array('element' => "highlight_active_image", 'value' => 'yes')
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Highlight Inactive Opacity (0-1)", 'pitch' ),
			"param_name" => "highlight_inactive_opacity",
			"value" => "",
			"dependency" => array('element' => "highlight_active_image", 'value' => 'yes')
		)
	)
) );


/*** Parallax Layers ***/

vc_map( array(
	"name" => esc_html__( "Parallax Layers", 'pitch' ),
	"base" => "no_parallax_layers",
	"category" => esc_html__( 'by Select', 'pitch' ),
	"icon" => "icon-wpb-parallax-layers extended-custom-icon",
	"allowed_container_element" => 'vc_row',
	"params" => array(
		array(
			"type" => "attach_images",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Layers", 'pitch' ),
			"param_name" => "images"
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Full Screen Height", 'pitch' ),
			"param_name" => "full_screen",
			"value" => array(
				esc_html__( "No", 'pitch' ) => "no",
				esc_html__( "Yes", 'pitch' ) => "yes"
			),
			'save_always' => true
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Height (px)", 'pitch' ),
			"param_name" => "height",
			"value" => "",
			"dependency" => array('element' => 'full_screen', 'value' => 'no')
		),
        array(
            "type" => "textarea_html",
            "holder" => "div",
            "class" => "",
            "heading" => esc_html__( "Content", 'pitch' ),
            "param_name" => "content",
            "value" => "",
            "description" => esc_html__( "This content will be displayed as final (top) layer over all other layers", 'pitch' )
        )
	)
) );


/*** Google Map ***/

vc_map( array(
	"name" => esc_html__( "Google Map", 'pitch' ),
	"base" => "no_google_map",
	"icon" => "icon-wpb-google-map extended-custom-icon",
	"category" => esc_html__( 'by Select', 'pitch' ),
	"allowed_container_element" => 'vc_row',
	"params" => array(
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Address 1", 'pitch' ),
			"param_name" => "address1"
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Address 2", 'pitch' ),
			"param_name" => "address2"
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Address 3", 'pitch' ),
			"param_name" => "address3"
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Address 4", 'pitch' ),
			"param_name" => "address4"
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Address 5", 'pitch' ),
			"param_name" => "address5"
		),
		array(
			"type" => "dropdown",
			"class" => "",
			"heading" => esc_html__( "Custom Map Style", 'pitch' ),
			"param_name" => "custom_map_style",
			"value" => array(
				esc_html__( "No", 'pitch' ) => "false",
				esc_html__( "Yes", 'pitch' ) => "true"
			),
			'save_always' => true,
			"description" => esc_html__( "Enabling this option will allow Map editing", 'pitch' )
		),
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Color Overlay", 'pitch' ),
			"param_name" => "color_overlay",
			"description" => esc_html__( "Choose a Map color overlay", 'pitch' ),
			"dependency" => Array('element' => "custom_map_style", 'value' => array('true'))
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Saturation", 'pitch' ),
			"param_name" => "saturation",
			"description" => esc_html__( "Choose a level of saturation (-100 = least saturated, 100 = most saturated)", 'pitch' ),
			"dependency" => Array('element' => "custom_map_style", 'value' => array('true'))
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Lightness", 'pitch' ),
			"param_name" => "lightness",
			"description" => esc_html__( "Choose a level of lightness (-100 = darkest, 100 = lightest)", 'pitch' ),
			"dependency" => Array('element' => "custom_map_style", 'value' => array('true'))
		),
		array(
			"type" => "attach_image",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Pin", 'pitch' ),
			"param_name" => "pin",
			"description" => esc_html__( "Select a pin image to be used on Google Map", 'pitch' )
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Map Zoom", 'pitch' ),
			"param_name" => "zoom",
			"description" => esc_html__( "Enter a zoom factor for Google Map (0 = whole worlds, 19 = individual buildings)", 'pitch' )
		),
		array(
			"type" => "dropdown",
			"class" => "",
			"heading" => esc_html__( "Zoom Map on Mouse Wheel", 'pitch' ),
			"param_name" => "google_maps_scroll_wheel",
			"value" => array(
				esc_html__( "No", 'pitch' ) => "false",
				esc_html__( "Yes", 'pitch' ) => "true"
			),
			'save_always' => true,
			"description" => esc_html__( "Enabling this option will allow users to zoom in on Map using mouse wheel", 'pitch' )
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Map Height", 'pitch' ),
			"param_name" => "map_height"
		),
		array(
			"type" => "checkbox",
			"class" => "",
			"heading" => esc_html__( "Fullscreen Map Height", 'pitch' ),
			"param_name" => "full_screen_map_height",
			"value" => array("Enable Fullscreen Map Height?" => "yes"),
			"description" => esc_html__( "Use only with Vertical Split Slider", 'pitch' )
		),

		array(
			"type" => "checkbox",
			"class" => "",
			"heading" => esc_html__( "Additional Informations", 'pitch' ),
			"param_name" => "enable_additional_informations",
			"value" => array("Enable Additional Informations Box?" => "yes"),
			"description" => esc_html__( 'You can set options for this box in Addition Informations tab', 'pitch' )
		),
		array(
			"type" => "textarea_html",
			"class" => "",
			"group" => esc_html__( "Additional Informations", 'pitch' ),
			"heading" => esc_html__( "Additional Informations Text", 'pitch' ),
			"param_name" => "content",
			"value" =>"",
			"description" => esc_html__( "Please Insert Additional Informations", 'pitch' ),
			"dependency" => Array('element' => "enable_additional_informations", 'value' => array('yes'))
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"group" => esc_html__( "Additional Informations", 'pitch' ),
			"heading" => esc_html__( "Info box aligned to grid", 'pitch' ),
			"param_name" => "info_box_grid",
			"value" => array(
				esc_html__( "No ", 'pitch' ) => "no",
				esc_html__( "Yes", 'pitch' ) => "yes"
			),
			'save_always' => true,
			"dependency" => Array('element' => "enable_additional_informations", 'value' => array('yes')),
			"description" => esc_html__( "This options applies only when the map is full width.", 'pitch' )
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"group" => esc_html__( "Additional Informations", 'pitch' ),
			"heading" => esc_html__( "Info Box Left/Right Aligment", 'pitch' ),
			"param_name" => "info_box_left_right_aligment",
			"value" => array(
				esc_html__( "Left ", 'pitch' ) => "left",
				esc_html__( "Right", 'pitch' ) => "right"
			),
			'save_always' => true,
			"dependency" => Array('element' => "enable_additional_informations", 'value' => array('yes'))
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"group" => esc_html__( "Additional Informations", 'pitch' ),
			"heading" => esc_html__( "Info Box Top/Bottom Aligment", 'pitch' ),
			"param_name" => "info_box_top_bottom_aligment",
			"value" => array(
				esc_html__( "Top", 'pitch' ) => "top",
				esc_html__( "Bottom", 'pitch' ) => "bottom"
			),
			'save_always' => true,
			"dependency" => Array('element' => "enable_additional_informations", 'value' => array('yes'))
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"group" => esc_html__( "Additional Informations", 'pitch' ),
			"heading" => esc_html__( "Info box position from Left/Right edge(px)", 'pitch' ),
			"param_name" => "info_box_left_right_distance",
			"value" => "",
			"dependency" => Array('element' => "enable_additional_informations", 'value' => array('yes'))
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"group" => esc_html__( "Additional Informations", 'pitch' ),
			"heading" => esc_html__( "Info box position from Top/Bottom edge(px)", 'pitch' ),
			"param_name" => "info_box_top_bottom_distance",
			"value" => "",
			"dependency" => Array('element' => "enable_additional_informations", 'value' => array('yes'))
		),
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"group" => esc_html__( "Additional Informations", 'pitch' ),
			"heading" => esc_html__( "Info box background color", 'pitch' ),
			"param_name" => "info_box_background_color",
			"value" => "",
			"dependency" => Array('element' => "enable_additional_informations", 'value' => array('yes'))
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"group" => esc_html__( "Additional Informations", 'pitch' ),
			"heading" => esc_html__( "Info box width(%)", 'pitch' ),
			"param_name" => "info_box_width",
			"value" => "",
			"dependency" => Array('element' => "enable_additional_informations", 'value' => array('yes'))
		)
	)
));



/*** Team ***/

$team_social_icons_array = array();
for ($x = 1; $x<6; $x++) {
	$teamIconCollections = pitch_qode_icon_collections()->getCollectionsWithSocialIcons();
	foreach($teamIconCollections as $collection_key => $collection) {

		$team_social_icons_array[] = array(
			"type" => "dropdown",
			"class" => "",
			"heading" => esc_html__( "Social Icon ", 'pitch' ).$x,
			"param_name" => "team_social_".$collection->param."_".$x,
			"value" => $collection->getSocialIconsArrayVC(),
			'save_always' => true,
			"dependency" => Array('element' => "team_social_icon_pack", 'value' => array($collection_key))
		);

	}

	$team_social_icons_array[] = array(
		"type" => "textfield",
		"holder" => "div",
		"class" => "",
		"heading" => esc_html__( "Social Icon Link ", 'pitch' ).$x,
		"param_name" => "team_social_icon_".$x."_link",
		"dependency" => array('element' => 'team_social_icon_pack', 'value' => pitch_qode_icon_collections()->getIconCollectionsKeys())
	);

	$team_social_icons_array[] = array(
		"type" => "dropdown",
		"holder" => "div",
		"class" => "",
		"heading" => esc_html__( "Social Icon Target ", 'pitch' ).$x,
		"param_name" => "team_social_icon_".$x."_target",
		"value" => array(
			"" => "",
			esc_html__( "Self", 'pitch' ) => "_self",
			esc_html__( "Blank", 'pitch' ) => "_blank"
		),
		"dependency" => Array('element' => "team_social_icon_".$x."_link", 'not_empty' => true)
	);

}

vc_map( array(
	"name" => esc_html__( "Team", 'pitch' ),
	"base" => "no_team",
	"category" => esc_html__( 'by Select', 'pitch' ),
	"icon" => "icon-wpb-team extended-custom-icon",
	"allowed_container_element" => 'vc_row',
	"params" => array_merge(
		array(
			array(
				"type" => "dropdown",
				"class" => "",
				"heading" => esc_html__( "Type", 'pitch' ),
				"param_name" => "team_type",
				"value" => array(
					esc_html__( "Main Info on Hover", 'pitch' ) => "on_hover",
					esc_html__( "Main Info Below Image", 'pitch' ) => "below_image"
				),
				'save_always' => true
			),
			array(
				"type" => "attach_image",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Image", 'pitch' ),
				"param_name" => "team_image"
			),
			array(
				"type" => "dropdown",
				"class" => "",
				"heading" => esc_html__( "Image Type", 'pitch' ),
				"param_name" => "team_image_type",
				"value" => array(
					esc_html__( "Default", 'pitch' ) => "",
					esc_html__( "Circle", 'pitch' ) => "circle"
				)
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Image Hover Color", 'pitch' ),
				"param_name" => "team_image_hover_color"
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Image Hover Opacity", 'pitch' ),
				"param_name" => "team_image_hover_opacity"
			),
			array(
				"type" => "dropdown",
				"class" => "",
				"heading" => esc_html__( "Hover Type", 'pitch' ),
				"param_name" => "team_hover_type",
				"value" => array(
					esc_html__( "Text In Center", 'pitch' ) => "in_center",
					esc_html__( "Text in Left Corner", 'pitch' ) => "in_corner"
				),
				'save_always' => true,
				"dependency" => array('element' => "team_type", 'value' => array('on_hover'))
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Image Bottom Margin", 'pitch' ),
				"param_name" => "team_info_margin_top",
				"dependency" => array('element' => "team_type", 'value' => array('below_image'))
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Name", 'pitch' ),
				"param_name" => "team_name"
			),
			array(
				"type" => "dropdown",
				"class" => "",
				"heading" => esc_html__( "Name Tag", 'pitch' ),
				"param_name" => "team_name_tag",
				"value" => array(
					""   => "",
					esc_html__( "h2", 'pitch' ) => "h2",
					esc_html__( "h3", 'pitch' ) => "h3",
					esc_html__( "h4", 'pitch' ) => "h4",
					esc_html__( "h5", 'pitch' ) => "h5",
					esc_html__( "h6", 'pitch' ) => "h6",
				),
				"dependency" => array('element' => 'team_name', 'not_empty' => true)
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Margin bottom(px)", 'pitch' ),
				"param_name" => "team_name_bottom_margin",
				"dependency" => array('element' => 'team_name', 'not_empty' => true)
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Name font size(px)", 'pitch' ),
				"param_name" => "team_name_font_size",
				"dependency" => array('element' => 'team_name', 'not_empty' => true)
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Name color", 'pitch' ),
				"param_name" => "team_name_color",
				"dependency" => array('element' => 'team_name', 'not_empty' => true)
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Name font weight", 'pitch' ),
				"param_name" => "team_name_font_weight",
				"value" => $font_weight_array,
				'save_always' => true,
				"dependency" => array('element' => 'team_name', 'not_empty' => true)
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Name text transform", 'pitch' ),
				"param_name" => "team_name_text_transform",
				"value" => array(
					esc_html__( "Default", 'pitch' ) => "",
					esc_html__( "None", 'pitch' ) => "none",
					esc_html__( "Capitalize", 'pitch' ) => "capitalize",
					esc_html__( "Uppercase", 'pitch' ) => "uppercase",
					esc_html__( "Lowercase", 'pitch' ) => "lowercase"
				),
				"dependency" => array('element' => 'team_name', 'not_empty' => true)
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Show Separator", 'pitch' ),
				"param_name" => "team_show_separator",
				"value" => array(
					esc_html__( "Yes", 'pitch' ) => "yes",
					esc_html__( "No", 'pitch' ) => "no"
				),
				'save_always' => true
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Separator width", 'pitch' ),
				"param_name" => "team_separator_width",
				"dependency" => array('element' => 'team_show_separator', 'value' => "yes")
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Separator thickness", 'pitch' ),
				"param_name" => "team_separator_thickness",
				"dependency" => array('element' => 'team_show_separator', 'value' => "yes")
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Separator color", 'pitch' ),
				"param_name" => "team_separator_color",
				"dependency" => array('element' => 'team_show_separator', 'value' => "yes")
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Position", 'pitch' ),
				"param_name" => "team_position"
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Position font size(px)", 'pitch' ),
				"param_name" => "team_position_font_size",
				"dependency" => array('element' => 'team_position', 'not_empty' => true)
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Position color", 'pitch' ),
				"param_name" => "team_position_color",
				"dependency" => array('element' => 'team_position', 'not_empty' => true)
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Position font weight", 'pitch' ),
				"param_name" => "team_position_font_weight",
				"value" => $font_weight_array,
				'save_always' => true,
				"dependency" => array('element' => 'team_position', 'not_empty' => true)
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Position text transform", 'pitch' ),
				"param_name" => "team_position_text_transform",
				"value" => array(
					esc_html__( "Default", 'pitch' ) => "",
					esc_html__( "None", 'pitch' ) => "none",
					esc_html__( "Capitalize", 'pitch' ) => "capitalize",
					esc_html__( "Uppercase", 'pitch' ) => "uppercase",
					esc_html__( "Lowercase", 'pitch' ) => "lowercase"
				),
				"dependency" => array('element' => 'team_position', 'not_empty' => true)
			),
			array(
				"type" => "textarea",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Description", 'pitch' ),
				"param_name" => "team_description"
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Description color", 'pitch' ),
				"param_name" => "team_description_color",
				"dependency" => array('element' => 'team_description', 'not_empty' => true)
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Text align", 'pitch' ),
				"param_name" => "text_align",
				"value" => array(
					esc_html__( "Default", 'pitch' ) => "",
					esc_html__( "Left", 'pitch' ) => "left_align",
					esc_html__( "Center", 'pitch' ) => "center_align",
					esc_html__( "Right", 'pitch' ) => "right_align"
				)
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Background Color", 'pitch' ),
				"param_name" => "background_color"
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Box Border", 'pitch' ),
				"param_name" => "box_border",
				"value" => array(
					esc_html__( "Default", 'pitch' ) => "",
					esc_html__( "No", 'pitch' ) => "no",
					esc_html__( "Yes", 'pitch' ) => "yes"
				)
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Box Border Width", 'pitch' ),
				"param_name" => "box_border_width",
				"value" => "",
				"dependency" => array('element' => "box_border", 'value' => array('yes'))
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Box Border Color", 'pitch' ),
				"param_name" => "box_border_color",
				"value" => "",
				"dependency" => array('element' => "box_border", 'value' => array('yes'))
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Link", 'pitch' ),
				"param_name" => "link",
				"dependency" => array('element' => "team_type", 'value' => array('on_hover'))
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Link Target", 'pitch' ),
				"param_name" => "link_target",
				"value" => array(
					"" => "",
					esc_html__( "Self", 'pitch' ) => "_self",
					esc_html__( "Blank", 'pitch' ) => "_blank"
				),
				'save_always' => true,
				"dependency" => array('element' => "link", 'not_empty' => true)
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Social Icon Pack", 'pitch' ),
				"param_name" => "team_social_icon_pack",
				"value" => array_merge(array("" => ""),pitch_qode_icon_collections()->getIconCollectionsVCExclude(array('linea_icons','dripicons'))),
				'save_always' => true,
				"dependency" => array('element' => 'team_type', 'value' => 'below_image')
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Social Style", 'pitch' ),
				"param_name" => "team_social_style",
				"value" => array(
					esc_html__( "Between Image and Info", 'pitch' ) => "social_style_between",
					esc_html__( "In the center of the image", 'pitch' ) => "social_style_center",
					esc_html__( "On the bottom of the image", 'pitch' ) => "social_style_bottom"
				),
				'save_always' => true,
				"description" => esc_html__( "Social Style applies only when Main Info Below Image type is selected", 'pitch' ),
				"dependency" => array('element' => 'team_social_icon_pack', 'value' => pitch_qode_icon_collections()->getIconCollectionsKeys())
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Social Icons Border color", 'pitch' ),
				"param_name" => "team_social_icon_holder_border_color",
				"description" => esc_html__( "Social Icons Background Color applies only when Social Style On the bottom of the image is selected", 'pitch' ),
				"dependency" => array('element' => 'team_social_icon_pack', 'value' => pitch_qode_icon_collections()->getIconCollectionsKeys())
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Social Icons Background color", 'pitch' ),
				"param_name" => "team_social_icon_holder_back_color",
				"description" => esc_html__( "Social Icons Background Color applies only when Social Style On the bottom of the image is selected", 'pitch' ),
				"dependency" => array('element' => 'team_social_icon_pack', 'value' => pitch_qode_icon_collections()->getIconCollectionsKeys())
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Social Icons Position", 'pitch' ),
				"param_name" => "social_icons_position",
				"value" => array(
					esc_html__( "Left", 'pitch' ) => "left",
					esc_html__( "Center", 'pitch' ) => "center",
					esc_html__( "Right", 'pitch' ) => "right"
				),
				'save_always' => true,
				"description" => esc_html__( "Social Icons Position applies only when Main Info Below Image type is selected", 'pitch' ),
				"dependency" => array('element' => 'team_social_style', 'value' => array("social_style_between"))
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Social Icons Type", 'pitch' ),
				"param_name" => "team_social_icon_type",
				"value" => array(
					esc_html__( "Normal", 'pitch' ) => "normal",
					esc_html__( "Circle", 'pitch' ) => "circle",
					esc_html__( "Square", 'pitch' ) => "square"
				),
				'save_always' => true,
				"dependency" => array('element' => 'team_social_icon_pack', 'value' => pitch_qode_icon_collections()->getIconCollectionsKeys())
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Social Icons Size(px)", 'pitch' ),
				"param_name" => "team_social_icon_size",
				"dependency" => array('element' => 'team_social_icon_pack', 'value' => pitch_qode_icon_collections()->getIconCollectionsKeys())
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Social Icons color", 'pitch' ),
				"param_name" => "team_social_icon_color",
				"dependency" => array('element' => 'team_social_icon_pack', 'value' => pitch_qode_icon_collections()->getIconCollectionsKeys())
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Social Icons Background Color", 'pitch' ),
				"param_name" => "team_social_icon_background_color",
				"dependency" => array('element' => 'team_social_icon_type', 'value' => array('circle', 'square'))
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Social Icons Border Color", 'pitch' ),
				"param_name" => "team_social_icon_border_color",
				"dependency" => array('element' => 'team_social_icon_type', 'value' => array('circle', 'square'))
			)
		),
		$team_social_icons_array,
		array(
			array(
				"type" => "checkbox",
				"class" => "",
				"heading" => esc_html__( "Team Member Skills", 'pitch' ),
				"value" => array("Show Team Member Skills?" => "yes"),
				"param_name" => "show_skills"
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Skills Title Size", 'pitch' ),
				"param_name" => "skills_title_size",
				"dependency" => array("element" => "show_skills", "value" => "yes")
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "First Skill Title", 'pitch' ),
				"param_name" => "skill_title_1",
				"description" => esc_html__( "For example Web design", 'pitch' ),
				"dependency" => array("element" => "show_skills", "value" => "yes")
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "First Skill Percentage", 'pitch' ),
				"param_name" => "skill_percentage_1",
				"description" => esc_html__( "Enter just number, without %", 'pitch' ),
				"dependency" => array("element" => "show_skills", "value" => "yes")
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Second Skill Title", 'pitch' ),
				"param_name" => "skill_title_2",
				"description" => esc_html__( "For example Web design", 'pitch' ),
				"dependency" => array("element" => "show_skills", "value" => "yes")
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Second Skill Percentage", 'pitch' ),
				"param_name" => "skill_percentage_2",
				"description" => esc_html__( "Enter just number, without %", 'pitch' ),
				"dependency" => array("element" => "show_skills", "value" => "yes")
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Third Skill Title", 'pitch' ),
				"param_name" => "skill_title_3",
				"description" => esc_html__( "For example Web design", 'pitch' ),
				"dependency" => array("element" => "show_skills", "value" => "yes")
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Third Skill Percentage", 'pitch' ),
				"param_name" => "skill_percentage_3",
				"description" => esc_html__( "Enter just number, without %", 'pitch' ),
				"dependency" => array("element" => "show_skills", "value" => "yes")
			)
		)
	)

) );

/*** Pricing info ***/

vc_map( array(
	"name" => esc_html__( "Pricing info", 'pitch' ),
	"base" => "no_pricing_info",
	"category" => esc_html__( 'by Select', 'pitch' ),
	"icon" => "icon-wpb-pricing-info extended-custom-icon",
	"allowed_container_element" => 'vc_row',
	"params" => array_merge(
		array(
			array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Title", 'pitch' ),
			"param_name" => "title"
			),
			array(
				"type" => "dropdown",
				"class" => "",
				"heading" => esc_html__( "Title Tag", 'pitch' ),
				"param_name" => "title_tag",
				"value" => array(
					""   => "",
					esc_html__( "h2", 'pitch' ) => "h2",
					esc_html__( "h3", 'pitch' ) => "h3",
					esc_html__( "h4", 'pitch' ) => "h4",
					esc_html__( "h5", 'pitch' ) => "h5",
					esc_html__( "h6", 'pitch' ) => "h6",
				),
				"dependency" => array('element' => "title", 'not_empty' => true)
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Text", 'pitch' ),
				"param_name" => "text"
			)
		),
		pitch_qode_icon_collections()->getVCParamsArray(),
		array(
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Enable animation", 'pitch' ),
				"param_name" => "enable_animation",
				"value" => array(
					esc_html__( "Yes", 'pitch' ) => "yes",
					esc_html__( "No", 'pitch' ) => "no"
				),
				'save_always' => true
			),
		)
	)
) );


/*** Clients ***/

class WPBakeryShortCode_No_Clients  extends WPBakeryShortCodesContainer {}
vc_map( array(
	"name" => esc_html__( "Clients", 'pitch' ),
	"base" => "no_clients",
	"as_parent" => array('only' => 'no_client'),
	"content_element" => true,
	"category" => esc_html__( 'by Select', 'pitch' ),
	"icon" => "icon-wpb-clients extended-custom-icon",
	"show_settings_on_create" => true,
	"params" => array(
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Show borders", 'pitch' ),
			"param_name" => "client_borders",
			"value" => array(
				esc_html__( "Yes", 'pitch' ) => "yes",
				esc_html__( "No", 'pitch' ) => "no"
			),
			'save_always' => true
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Space between clients", 'pitch' ),
			"param_name" => "space_between_clients",
			"value" => array(
				esc_html__( "No", 'pitch' ) => "no",
				esc_html__( "Yes", 'pitch' ) => "yes"
			),
			'save_always' => true
		)
	),
	"js_view" => 'VcColumnView'
) );


/*** Client ***/

class WPBakeryShortCode_No_Client extends WPBakeryShortCode {}
vc_map( array(
	"name" => esc_html__( "Client", 'pitch' ),
	"base" => "no_client",
	"content_element" => true,
	"icon" => "icon-wpb-client extended-custom-icon",
	"as_child" => array('only' => 'no_clients'),
	"params" => array(
		array(
			"type" => "attach_image",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Image", 'pitch' ),
			"param_name" => "image"
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Link", 'pitch' ),
			"param_name" => "link"
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Link Target", 'pitch' ),
			"param_name" => "link_target",
			"value" => array(
				"" => "",
				esc_html__( "Self", 'pitch' ) => "_self",
				esc_html__( "Blank", 'pitch' ) => "_blank"
			),
			'save_always' => true
		)
	)
) );


/*** Circles ***/

class WPBakeryShortCode_No_Circles  extends WPBakeryShortCodesContainer {}
vc_map( array(
	"name" => esc_html__( "Process Holder", 'pitch' ),
	"base" => "no_circles",
	"as_parent" => array('only' => 'no_circle'),
	"content_element" => true,
	"category" => esc_html__( 'by Select', 'pitch' ),
	"icon" => "icon-wpb-circles extended-custom-icon",
	"show_settings_on_create" => true,
	"params" => array(
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Columns", 'pitch' ),
			"param_name" => "columns",
			"value" => array(
				esc_html__( "Three", 'pitch' ) => "three_columns",
				esc_html__( "Four", 'pitch' ) => "four_columns",
				esc_html__( "Five", 'pitch' ) => "five_columns",
				esc_html__( "Six", 'pitch' ) => "six_columns"
			),
			'save_always' => true
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Arrows between items?", 'pitch' ),
			"param_name" => "lines_between",
			"value" => array(
				esc_html__( "Default", 'pitch' ) => "",
				esc_html__( "No", 'pitch' ) => "no",
				esc_html__( "Yes", 'pitch' ) => "yes"
			),
		),
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Arrow Color", 'pitch' ),
			"param_name" => "line_color"
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Process Item Height (px)", 'pitch' ),
			"param_name" => "process_height"
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Process Item Width (px)", 'pitch' ),
			"param_name" => "process_width"
		)
	),
	"js_view" => 'VcColumnView'
) );


/*** Circle ***/

class WPBakeryShortCode_No_Circle extends WPBakeryShortCode {}
vc_map( array(
	"name" => esc_html__( "Process", 'pitch' ),
	"base" => "no_circle",
	"content_element" => true,
	"icon" => "icon-wpb-circle extended-custom-icon",
	"as_child" => array('only' => 'no_circles'),
	"params" => array_merge(
		array(
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Type", 'pitch' ),
				"param_name" => "type",
				"value" => array(
					esc_html__( "Icon in Process", 'pitch' ) => "icon_type",
					esc_html__( "Image", 'pitch' ) => "image_type",
					esc_html__( "Text in Process", 'pitch' ) => "text_type",
					esc_html__( "Image with Text", 'pitch' ) => "image_with_text_type"
				),
				'save_always' => true
			),
			array(
				"type" => "attach_image",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Process Background Image", 'pitch' ),
				"param_name" => "background_image",
				"dependency" => array('element' => "type", 'value' => array("icon_type"))
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Background Process Color", 'pitch' ),
				"param_name" => "background_color"
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Background Process Transparency", 'pitch' ),
				"param_name" => "background_transparency",
				"description" => esc_html__( "Insert value between 0 and 1", 'pitch' )
			),
			array(
				"type" => "checkbox",
				"class" => "",
				"heading" => esc_html__( "", 'pitch' ),
				"value" => array("Without outer border?" => "yes"),
				"param_name" => "without_double_border"
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Border Process Color", 'pitch' ),
				"param_name" => "border_color"
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Border Process Width", 'pitch' ),
				"param_name" => "border_width"
			)
		),
		pitch_qode_icon_collections()->getVCParamsArray( array( 'element' => 'type', 'value' => array( 'icon_type' ) ) ),
		array(
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Size", 'pitch' ),
				"param_name" => "size",
				"description" => esc_html__( "Enter just number. Omit px", 'pitch' ),
				"dependency" => array('element' => "type", 'value' => array("icon_type"))
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Icon Color", 'pitch' ),
				"param_name" => "icon_color",
				"dependency" => array('element' => "type", 'value' => array("icon_type"))
			),
			array(
				"type" => "attach_image",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Image", 'pitch' ),
				"param_name" => "image",
				"dependency" => array('element' => "type", 'value' => array("image_type", "image_with_text_type"))
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Text in Process", 'pitch' ),
				"param_name" => "text_in_circle",
				"dependency" => array('element' => "type", 'value' => array("text_type", "image_with_text_type"))
			),
			array(
				"type" => "dropdown",
				"class" => "",
				"heading" => esc_html__( "Text in Process Tag", 'pitch' ),
				"param_name" => "text_in_circle_tag",
				"value" => array(
					""   => "",
					esc_html__( "h2", 'pitch' ) => "h2",
					esc_html__( "h3", 'pitch' ) => "h3",
					esc_html__( "h4", 'pitch' ) => "h4",
					esc_html__( "h5", 'pitch' ) => "h5",
					esc_html__( "h6", 'pitch' ) => "h6",
				),
				"dependency" => array('element' => "text_in_circle", 'not_empty' => true)
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Text in Process Size (px)", 'pitch' ),
				"param_name" => "font_size",
				"dependency" => array('element' => "text_in_circle", 'not_empty' => true)
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Text in Process Color", 'pitch' ),
				"param_name" => "text_in_circle_color",
				"dependency" => array('element' => "text_in_circle", 'not_empty' => true)
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Link", 'pitch' ),
				"param_name" => "link"
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Link Target", 'pitch' ),
				"param_name" => "link_target",
				"value" => array(
					"" => "",
					esc_html__( "Self", 'pitch' ) => "_self",
					esc_html__( "Blank", 'pitch' ) => "_blank"
				),
				"dependency" => array('element' => "link", 'not_empty' => true)
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Title", 'pitch' ),
				"param_name" => "title"
			),
			array(
				"type" => "dropdown",
				"class" => "",
				"heading" => esc_html__( "Title Tag", 'pitch' ),
				"param_name" => "title_tag",
				"value" => array(
					""   => "",
					esc_html__( "h2", 'pitch' ) => "h2",
					esc_html__( "h3", 'pitch' ) => "h3",
					esc_html__( "h4", 'pitch' ) => "h4",
					esc_html__( "h5", 'pitch' ) => "h5",
					esc_html__( "h6", 'pitch' ) => "h6",
				),
				"dependency" => array('element' => "title", 'not_empty' => true)
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Title Font Size (px)", 'pitch' ),
				"param_name" => "title_font_size"
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Title Color", 'pitch' ),
				"param_name" => "title_color",
				"dependency" => array('element' => "title", 'not_empty' => true)
			),
			array(
				"type" => "dropdown",
				"class" => "",
				"heading" => esc_html__( "Title Alignment", 'pitch' ),
				"param_name" => "title_alignment",
				"value" => array(
					""   => "",
					esc_html__( "Left", 'pitch' ) => "title_left",
					esc_html__( "Center", 'pitch' ) => "title_center",
					esc_html__( "Right", 'pitch' ) => "title_right"
				),
				"dependency" => array('element' => "title", 'not_empty' => true)
			),
			array(
				"type" => "textarea",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Text", 'pitch' ),
				"param_name" => "text"
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Text Color", 'pitch' ),
				"param_name" => "text_color",
				"dependency" => array('element' => "text", 'not_empty' => true)
			),
			array(
				"type" => "dropdown",
				"class" => "",
				"heading" => esc_html__( "Text Alignment", 'pitch' ),
				"param_name" => "text_alignment",
				"value" => array(
					""   => "",
					esc_html__( "Left", 'pitch' ) => "text_left",
					esc_html__( "Center", 'pitch' ) => "text_center",
					esc_html__( "Right", 'pitch' ) => "text_right"
				),
				"dependency" => array('element' => "text", 'not_empty' => true)
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Space between circle and title", 'pitch' ),
				"param_name" => "title_margin_top",
				"description" => esc_html__( "Enter just number. Omit px (default value is 24)", 'pitch' )
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Space between title and text", 'pitch' ),
				"param_name" => "text_margin_top",
				"description" => esc_html__( "Enter just number. Omit px (default value is 5)", 'pitch' )
			)
		)
	)
) );


/*** Pricing Tables ***/

class WPBakeryShortCode_No_Pricing_Tables  extends WPBakeryShortCodesContainer {}
vc_map( array(
	"name" => esc_html__( "Pricing Tables", 'pitch' ),
	"base" => "no_pricing_tables",
	"as_parent" => array('only' => 'no_pricing_table'),
	"content_element" => true,
	"category" => esc_html__( 'by Select', 'pitch' ),
	"icon" => "icon-wpb-pricing-tables extended-custom-icon",
	"show_settings_on_create" => true,
	"params" => array(
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Columns", 'pitch' ),
			"param_name" => "columns",
			"value" => array(
				esc_html__( "Two", 'pitch' ) => "two_columns",
				esc_html__( "Three", 'pitch' ) => "three_columns",
				esc_html__( "Four", 'pitch' ) => "four_columns",
			),
			'save_always' => true
		)
	),
	"js_view" => 'VcColumnView'
) );


/*** Pricing Table ***/

class WPBakeryShortCode_No_Pricing_Table  extends WPBakeryShortCode {}
vc_map( array(
	"name" => esc_html__( "Pricing Table", 'pitch' ),
	"base" => "no_pricing_table",
	"icon" => "icon-wpb-pricing-table extended-custom-icon",
	"category" => esc_html__( 'by Select', 'pitch' ),
	"allowed_container_element" => 'vc_row',
	"as_child" => array('only' => 'no_pricing_tables'),
	"params" => array(
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Type", 'pitch' ),
			"param_name" => "type",
			"value" => array(
				esc_html__( "Price on top", 'pitch' ) => "price_on_top",
				esc_html__( "Title on top", 'pitch' ) => "title_on_top"
			),
			'save_always' => true
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Small Title", 'pitch' ),
			"param_name" => "small_title",
			"value" => "Basic Plan"
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Title", 'pitch' ),
			"param_name" => "title",
			"value" => "Basic Plan"
		),
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Title Color", 'pitch' ),
			"param_name" => "title_color"
		),
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Title Background Color", 'pitch' ),
			"param_name" => "title_background_color"
		),
		array(
            "type" => "attach_image",
            "holder" => "div",
            "class" => "",
            "heading" => esc_html__( "Title Background Image", 'pitch' ),
            "param_name" => "title_background_image"
        ),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Title Font Family", 'pitch' ),
			"param_name" => "title_font_family"
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Title Alignment", 'pitch' ),
			"param_name" => "title_alignment",
			"value" => array(
				esc_html__( "Left", 'pitch' ) => "left",
				esc_html__( "Center", 'pitch' ) => "center"
			),
			'save_always' => true,
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Title Small Separator", 'pitch' ),
			"param_name" => "title_separator",
			"value" => array(
				esc_html__( "No", 'pitch' ) => "no",
				esc_html__( "Yes", 'pitch' ) => "yes"
			),
			'save_always' => true,
			"dependency" => array('element' => 'type', 'value' => 'price_on_top')
		),
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Title Separator Color", 'pitch' ),
			"param_name" => "title_separator_color",
			"dependency" => array('element' => 'title_separator', 'value' => 'yes')
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Title Border Bottom", 'pitch' ),
			"param_name" => "title_border_bottom",
			"value" => array(
				esc_html__( "Yes", 'pitch' ) => "yes",
				esc_html__( "No", 'pitch' ) => "no"
			),
			'save_always' => true,
			"dependency" => array('element' => 'type', 'value' => 'title_on_top')
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Title Border Bottom Style", 'pitch' ),
			"param_name" => "title_border_bottom_style",
			"value" => array(
				esc_html__( "In grid", 'pitch' ) => "pricing_title_grid",
				esc_html__( "Full Width", 'pitch' ) => "pricing_title_full_width"
			),
			'save_always' => true,
			"dependency" => array('element' => 'title_border_bottom', 'value' => 'yes')
		),
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Title Border Bottom Color", 'pitch' ),
			"param_name" => "title_border_bottom_color",
			"dependency" => array('element' => 'title_border_bottom', 'value' => 'yes')
		),

		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Border Around", 'pitch' ),
			"param_name" => "border_arround",
			"value" => array(
				esc_html__( "No", 'pitch' ) => "no",
				esc_html__( "Yes", 'pitch' ) => "yes"
			),
			'save_always' => true
		),

		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Border Around Color", 'pitch' ),
			"param_name" => "border_arround_color",
			"dependency" => array('element' => 'border_arround', 'value' => 'yes')
		),

		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Wide Border Top", 'pitch' ),
			"param_name" => "table_border_top",
			"value" => array(
				esc_html__( "Yes", 'pitch' ) => "yes",
				esc_html__( "No", 'pitch' ) => "no"
			),
			'save_always' => true,
			"dependency" => array('element' => 'type', 'value' => 'title_on_top')
		),

		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Wide Border Top Color", 'pitch' ),
			"param_name" => "pricing_table_border_top_color",
			"dependency" => array('element' => 'table_border_top', 'value' => 'yes')
		),

		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Price", 'pitch' ),
			"param_name" => "price",
			"description" => esc_html__( "Default value is 100", 'pitch' )
		),
		array(
            "type" => "colorpicker",
            "holder" => "div",
            "class" => "",
            "heading" => esc_html__( "Price Color", 'pitch' ),
            "param_name" => "price_color"
        ),
		array(
			"type" => "attach_image",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Price Background Image", 'pitch' ),
			"param_name" => "price_bckg_image"
		),
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Price Background Color", 'pitch' ),
			"param_name" => "price_background"
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Price Border Bottom", 'pitch' ),
			"param_name" => "price_border_bottom",
			"value" => array(
				esc_html__( "Yes", 'pitch' ) => "yes",
				esc_html__( "No", 'pitch' ) => "no"
			),
			'save_always' => true
		),
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Price Border Bottom Color", 'pitch' ),
			"param_name" => "price_border_bottom_color",
			"dependency" => array('element' => 'price_border_bottom', 'value' => 'yes')
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Price Font Weight", 'pitch' ),
			"param_name" => "price_font_weight",
			"value" => $font_weight_array,
			'save_always' => true
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Currency", 'pitch' ),
			"param_name" => "currency",
			"description" => esc_html__( "Default mark is $", 'pitch' )
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Price Period", 'pitch' ),
			"param_name" => "price_period",
			"description" => esc_html__( "Default label is monthly", 'pitch' )
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Price Period Position", 'pitch' ),
			"param_name" => "price_period_position",
			"value" => array(
				esc_html__( "Default", 'pitch' ) => "",
				esc_html__( "Next to Title", 'pitch' ) => "next_to_title",
				esc_html__( "Bellow Title", 'pitch' ) => "bellow_title"
			),
			"dependency" => array('element' => 'type', 'value' => 'price_on_top')
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Show Button", 'pitch' ),
			"param_name" => "show_button",
			"value" => array(
				esc_html__( "Default", 'pitch' ) => "",
				esc_html__( "Yes", 'pitch' ) => "yes",
				esc_html__( "No", 'pitch' ) => "no"
			)
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Button Type", 'pitch' ),
			"param_name" => "pricing_button_type",
			"value" => array(
				esc_html__( "Standard Button", 'pitch' ) => "standard_button",
				esc_html__( "Button on Bottom", 'pitch' ) => "button_on_bottom"
			),
			'save_always' => true,
			"dependency" => array('element' => 'show_button',  'value' => 'yes')
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Button Text", 'pitch' ),
			"param_name" => "button_text",
			"description" => esc_html__( "Default text is button", 'pitch' ),
			"dependency" => array('element' => 'pricing_button_type',  'value' => 'standard_button')
		),
		array(
            "type" => "textfield",
            "holder" => "div",
            "class" => "",
            "heading" => esc_html__( "Button Font Size (px)", 'pitch' ),
            "param_name" => "button_font_size",
            "dependency" => array('element' => 'show_button',  'value' => 'yes')
        ),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Button Size", 'pitch' ),
			"value" => array(
				esc_html__( "Full Width", 'pitch' ) => "full_width",
				esc_html__( "Normal", 'pitch' ) => "normal"
			),
			'save_always' => true,
			"param_name" => "button_size",
			"description" => esc_html__( "This options is only used for type Title on Top", 'pitch' ),
			"dependency" => array('element' => 'pricing_button_type',  'value' => 'standard_button')
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Button Link", 'pitch' ),
			"param_name" => "link",
			"dependency" => array('element' => 'show_button',  'value' => 'yes')
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Button Target", 'pitch' ),
			"param_name" => "target",
			"value" => array(
				"" => "",
				esc_html__( "Self", 'pitch' ) => "_self",
				esc_html__( "Blank", 'pitch' ) => "_blank"
			),
			"dependency" => array('element' => 'link', 'not_empty' => true)
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Button Font Family", 'pitch' ),
			"param_name" => "button_font_family",
			"dependency" => array('element' => 'show_button', 'value' => 'yes')
		),
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Button Color", 'pitch' ),
			"param_name" => "button_color",
			"dependency" => array('element' => 'show_button', 'value' => 'yes')
		),
		array(
            "type" => "colorpicker",
            "holder" => "div",
            "class" => "",
            "heading" => esc_html__( "Button Hover Color", 'pitch' ),
            "param_name" => "button_hover_color",
            "dependency" => array('element' => 'show_button', 'value' => 'yes')
        ),
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Button Background Color", 'pitch' ),
			"param_name" => "button_background_color",
			"dependency" => array('element' => 'show_button', 'value' => 'yes')
		),
		array(
            "type" => "attach_image",
            "holder" => "div",
            "class" => "",
            "heading" => esc_html__( "Button Background Image", 'pitch' ),
            "param_name" => "button_background_image",
            "dependency" => array('element' => 'pricing_button_type',  'value' => 'standard_button')
        ),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Button Icon Size(px)", 'pitch' ),
			"param_name" => "button_icon_size",
			"dependency" => array('element' => 'pricing_button_type',  'value' => 'button_on_bottom')
		),

		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Button arrow", 'pitch' ),
			"param_name" => "button_arrow",
			"value" => array(
				esc_html__( "No", 'pitch' ) => "no",
				esc_html__( "Yes", 'pitch' ) => "yes"
			),
			'save_always' => true,
			"dependency" => array('element' => 'button_text', 'not_empty' => true)
		),

		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Disable Button Top Border", 'pitch' ),
			"param_name" => "disable_button_border_top",
			"value" => array(
				esc_html__( "Default", 'pitch' ) => "",
				esc_html__( "No", 'pitch' ) => "no",
				esc_html__( "Yes", 'pitch' ) => "yes"
			),
			"description" => esc_html__( "This options is only used for type Title on Top", 'pitch' ),
			"dependency" => array('element' => 'button_text', 'not_empty' => true)
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Active", 'pitch' ),
			"param_name" => "active",
			"value" => array(
				esc_html__( "No", 'pitch' ) => "no",
				esc_html__( "Yes", 'pitch' ) => "yes"
			),
			'save_always' => true
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Active Style", 'pitch' ),
			"param_name" => "active_style",
			"value" => array(
				esc_html__( "Default", 'pitch' ) => "",
				esc_html__( "Circle", 'pitch' ) => "circle",
				esc_html__( "Rectangle", 'pitch' ) => "rectangle",
			),
			"dependency" => array('element' => 'active', 'value' => 'yes')
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Active text", 'pitch' ),
			"param_name" => "active_text",
			"description" => esc_html__( "Best choice", 'pitch' ),
			"dependency" => array('element' => 'active', 'value' => 'yes')
		),
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Active Text Color", 'pitch' ),
			"param_name" => "active_text_color",
			"dependency" => array('element' => 'active', 'value' => 'yes')
		),
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Active Text Background Color", 'pitch' ),
			"param_name" => "active_text_background_color",
			"dependency" => array('element' => 'active', 'value' => 'yes')
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Content Style", 'pitch' ),
			"param_name" => "content_style",
			"value" => array(
				esc_html__( "In Grid", 'pitch' ) => "pricing_content_grid",
				esc_html__( "Full Width ", 'pitch' ) => "pricing_content_full_width",
			),
			'save_always' => true
		),
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Content Text Color", 'pitch' ),
			"param_name" => "content_text_color"
		),
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Content Background Color", 'pitch' ),
			"param_name" => "content_background_color"
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Set Different Background Color for Odd and Even Content Sections?", 'pitch' ),
			"param_name" => "different_odd_even_sections",
			"value" => array(
				esc_html__( "No", 'pitch' ) => "no",
				esc_html__( "Yes", 'pitch' ) => "yes",
			),
			'save_always' => true
		),
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Even Sections Background Color", 'pitch' ),
			"param_name" => "even_back_color",
			"dependency" => array('element' => 'different_odd_even_sections', 'value' => 'yes')
		),
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Odd Sections Background Color", 'pitch' ),
			"param_name" => "odd_back_color",
			"dependency" => array('element' => 'different_odd_even_sections', 'value' => 'yes')
		),
		array(
			"type" => "attach_image",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Pricing Table Background Image", 'pitch' ),
			"param_name" => "content_background_image"
		),
		array(
			"type" => "textarea_html",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Content", 'pitch' ),
			"param_name" => "content",
			"value" => "<li>content content content</li><li>content content content</li><li>content content content</li>"
		)
	)
) );


/*** Pricing List ***/

class WPBakeryShortCode_No_Pricing_List  extends WPBakeryShortCodesContainer {}
vc_map( array(
	"name" => esc_html__( "Pricing List", 'pitch' ),
	"base" => "no_pricing_list",
	"as_parent" => array('only' => 'no_pricing_list_item'),
	"content_element" => true,
	"category" => esc_html__( 'by Select', 'pitch' ),
	"icon" => "icon-wpb-pricing-list extended-custom-icon",
	"show_settings_on_create" => false,
	"js_view" => 'VcColumnView',
	"params" => array(
		array(
			"type" => "dropdown",
			"class" => "",
			"heading" => esc_html__( "Type", 'pitch' ),
			"param_name" => "type",
			"value" => array(
				esc_html__( "Leaders", 'pitch' ) => "with_leaders",
				esc_html__( "Background", 'pitch' ) => "with_background_image"
			),
			'save_always' => true
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Title", 'pitch' ),
			"param_name" => "title",
			"value" => ""
		),
		array(
			"type" => "attach_image",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Background image", 'pitch' ),
			"param_name" => "background_image",
			"dependency" => array('element' => "type", 'value' => array("with_background_image"))
		),
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Background Color", 'pitch' ),
			"param_name" => "backgroundcolor"
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Leaders Type", 'pitch' ),
			"param_name" => "leaders_type",
			"value" => array(
				esc_html__( "Dotted", 'pitch' ) => "dotted",
				esc_html__( "Solid", 'pitch' ) => "solid",
				esc_html__( "Dashed", 'pitch' ) => "dashed"
			),
			'save_always' => true,
			"dependency" => array('element' => "type", 'value' => array("with_leaders"))
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Padding", 'pitch' ),
			"param_name" => "item_padding",
			"value" => "",
			"description" => esc_html__( "Please insert padding in format 0px 10px 0px 10px, default value is 0 0 0 0", 'pitch' )
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Border", 'pitch' ),
			"param_name" => "border",
			"value" => array(
				esc_html__( "No", 'pitch' ) => "no",
				esc_html__( "Yes", 'pitch' ) => "yes",
			),
			'save_always' => true
		),
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Border Color", 'pitch' ),
			"param_name" => "border_color",
			"dependency" => array('element' => "border", 'value' => array("yes"))
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Border Width (px)", 'pitch' ),
			"param_name" => "border_width",
			"dependency" => array('element' => "border", 'value' => array("yes"))
		)
	)
) );


/*** Pricing List Item ***/

class WPBakeryShortCode_No_Pricing_List_Item extends WPBakeryShortCode {}
vc_map( array(
	"name" => esc_html__( "Pricing List Item", 'pitch' ),
	"base" => "no_pricing_list_item",
	"content_element" => true,
	"icon" => "icon-wpb-pricing-list-item extended-custom-icon",
	"as_child" => array('only' => 'no_pricing_list'),
	"params" => array(
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Background color", 'pitch' ),
			"param_name" => "backgroundcolor",
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Title", 'pitch' ),
			"param_name" => "title",
		),
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Title Color", 'pitch' ),
			"param_name" => "title_color",
			"dependency" => array('element' => "title", 'not_empty' => true)
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Title Font Size (px)", 'pitch' ),
			"param_name" => "title_font_size",
			"description" => esc_html__( "Enter just number. Omit unit, it is added automatically", 'pitch' ),
			"dependency" => array('element' => "title", 'not_empty' => true)
		),
		array(
			"type" => "dropdown",
			"class" => "",
			"heading" => esc_html__( "Title Tag", 'pitch' ),
			"param_name" => "title_tag",
			"value" => array(
				""   => "",
				esc_html__( "h2", 'pitch' ) => "h2",
				esc_html__( "h3", 'pitch' ) => "h3",
				esc_html__( "h4", 'pitch' ) => "h4",
				esc_html__( "h5", 'pitch' ) => "h5",
				esc_html__( "h6", 'pitch' ) => "h6",
			),
			"dependency" => array('element' => "title", 'not_empty' => true)
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Title Font Family", 'pitch' ),
			"param_name" => "title_font_family",
			"value" => "",
			"dependency" => array('element' => "title", 'not_empty' => true)
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Title Font Weight", 'pitch' ),
			"param_name" => "title_font_weight",
			"value" => array(
				esc_html__( "Default", 'pitch' ) => "",
				esc_html__( "Thin 100", 'pitch' ) => "100",
				esc_html__( "Extra-Light 200", 'pitch' ) => "200",
				esc_html__( "Light 300", 'pitch' ) => "300",
				esc_html__( "Regular 400", 'pitch' ) => "400",
				esc_html__( "Medium 500", 'pitch' ) => "500",
				esc_html__( "Semi-Bold 600", 'pitch' ) => "600",
				esc_html__( "Bold 700", 'pitch' ) => "700",
				esc_html__( "Extra-Bold 800", 'pitch' ) => "800",
				esc_html__( "Ultra-Bold 900", 'pitch' ) => "900"
			),
			"dependency" => array('element' => "title", 'not_empty' => true)
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Text", 'pitch' ),
			"param_name" => "text",
		),
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Text Color", 'pitch' ),
			"param_name" => "text_color",
			"dependency" => array('element' => "text", 'not_empty' => true)
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Text Font Size (px)", 'pitch' ),
			"param_name" => "text_font_size",
			"description" => esc_html__( "Enter just number. Omit unit, it is added automatically", 'pitch' ),
			"dependency" => array('element' => "text", 'not_empty' => true)
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Price", 'pitch' ),
			"param_name" => "price",
			"description" => esc_html__( "You can append any unit that you want", 'pitch' )
		),
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Price Color", 'pitch' ),
			"param_name" => "price_color",
			"dependency" => array('element' => "price", 'not_empty' => true)
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Price Font Family", 'pitch' ),
			"param_name" => "price_font_family",
			"value" => "",
			"dependency" => array('element' => "price", 'not_empty' => true)
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Price Font Size (px)", 'pitch' ),
			"param_name" => "price_font_size",
			"description" => esc_html__( "Enter just number. Omit unit, it is added automatically", 'pitch' ),
			"dependency" => array('element' => "price", 'not_empty' => true)
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Price Font Weight", 'pitch' ),
			"param_name" => "price_font_weight",
			"value" => array(
				esc_html__( "Default", 'pitch' ) => "",
				esc_html__( "Thin 100", 'pitch' ) => "100",
				esc_html__( "Extra-Light 200", 'pitch' ) => "200",
				esc_html__( "Light 300", 'pitch' ) => "300",
				esc_html__( "Regular 400", 'pitch' ) => "400",
				esc_html__( "Medium 500", 'pitch' ) => "500",
				esc_html__( "Semi-Bold 600", 'pitch' ) => "600",
				esc_html__( "Bold 700", 'pitch' ) => "700",
				esc_html__( "Extra-Bold 800", 'pitch' ) => "800",
				esc_html__( "Ultra-Bold 900", 'pitch' ) => "900"
			),
			"dependency" => array('element' => "price", 'not_empty' => true)
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Price Font Style", 'pitch' ),
			"param_name" => "price_font_style",
			"value" => array(
				"" => "",
				esc_html__( "Normal", 'pitch' ) => "normal",
				esc_html__( "Italic", 'pitch' ) => "italic"
			),
			"dependency" => array('element' => "price", 'not_empty' => true)
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Separator", 'pitch' ),
			"param_name" => "separator",
			"value" => array(
				esc_html__( "No", 'pitch' ) => "no",
				esc_html__( "Yes", 'pitch' ) => "yes",
			),
			'save_always' => true
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Separator Type", 'pitch' ),
			"param_name" => "separator_type",
			"value" => array(
				esc_html__( "Solid", 'pitch' ) => "solid",
				esc_html__( "Dotted", 'pitch' ) => "dotted",
				esc_html__( "Dashed", 'pitch' ) => "dashed"
			),
			'save_always' => true,
			"dependency" => array('element' => "separator", 'value' => array("yes"))
		),
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Separator Color", 'pitch' ),
			"param_name" => "separator_color",
			"dependency" => array('element' => "separator", 'value' => array("yes"))
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Separator Thickness (px)", 'pitch' ),
			"param_name" => "separator_width",
			"dependency" => array('element' => "separator", 'value' => array("yes"))
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Separator Position Top (px)", 'pitch' ),
			"param_name" => "separator_position_top",
			"dependency" => array('element' => "separator", 'value' => array("yes"))
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Separator Position Bottom (px)", 'pitch' ),
			"param_name" => "separator_position_bottom",
			"dependency" => array('element' => "separator", 'value' => array("yes"))
		),
		array(
			"type" => "checkbox",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "New Item", 'pitch' ),
			"param_name" => "enable_new_item",
			"value" => array("Set as new item?" => "enable_new_item"),
			"description" => esc_html__( "Only when pricing list is set to type Leaders", 'pitch' )
		),
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "New Item Text Color", 'pitch' ),
			"param_name" => "new_item_text_color",
			"dependency" => array('element' => "enable_new_item", 'value' => array("enable_new_item"))
		),
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "New Item Icon Color", 'pitch' ),
			"param_name" => "new_item_icon_color",
			"dependency" => array('element' => "enable_new_item", 'value' => array("enable_new_item"))
		),
		array(
			"type" => "checkbox",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Highlighted Item", 'pitch' ),
			"param_name" => "enable_highlighted_item",
			"value" => array("Set as highlighted item?" => "enable_highlighted_item"),
			"description" => esc_html__( "Only when pricing list is set to type Leaders", 'pitch' )
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Highlighted Text", 'pitch' ),
			"param_name" => "highlighted_text",
			"dependency" => array('element' => "enable_highlighted_item", 'value' => array("enable_highlighted_item"))
		),
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Highlighted Text Color", 'pitch' ),
			"param_name" => "highlighted_text_color",
			"dependency" => array('element' => "enable_highlighted_item", 'value' => array("enable_highlighted_item"))
		),
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Highlighted Text Background Color", 'pitch' ),
			"param_name" => "highlighted_text_background_color",
			"dependency" => array('element' => "enable_highlighted_item", 'value' => array("enable_highlighted_item"))
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Item Margin Bottom (px)", 'pitch' ),
			"param_name" => "margin_bottom_item"
		),
	)
) );


/*** Service table ***/

vc_map( array(
		"name" => esc_html__( "Service Table", 'pitch' ),
		"base" => "no_service_table",
		"icon" => "icon-wpb-service-table extended-custom-icon",
		"category" => esc_html__( 'by Select', 'pitch' ),
		"allowed_container_element" => 'vc_row',
		"params" => array_merge(
			array(
				array(
					"type" => "dropdown",
					"class" => "",
					"heading" => esc_html__( "Type", 'pitch' ),
					"param_name" => "type",
					"value" => array(
						esc_html__( "Icon/Image on Top", 'pitch' ) => "icon_image_on_top",
						esc_html__( "Title on Top", 'pitch' ) => "title_on_top",
					),
					'save_always' => true
				),
				array(
					"type" => "textfield",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Title", 'pitch' ),
					"param_name" => "title",
					"value" => ""
				),
				array(
					"type" => "dropdown",
					"class" => "",
					"heading" => esc_html__( "Title Tag", 'pitch' ),
					"param_name" => "title_tag",
					"value" => array(
						""   => "",
						esc_html__( "h2", 'pitch' ) => "h2",
						esc_html__( "h3", 'pitch' ) => "h3",
						esc_html__( "h4", 'pitch' ) => "h4",
						esc_html__( "h5", 'pitch' ) => "h5",
						esc_html__( "h6", 'pitch' ) => "h6",
					)
				),
				array(
					"type" => "colorpicker",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Title Color", 'pitch' ),
					"param_name" => "title_color"
				),
				array(
					"type" => "colorpicker",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Title Background Color", 'pitch' ),
					"param_name" => "title_background_color"
				),
				array(
					"type" => "attach_image",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Top Background Image", 'pitch' ),
					"param_name" => "top_background_image",
					"dependency" => array("element" => "type", "value" => array("icon_image_on_top"))
				),
				array(
					"type" => "dropdown",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Title Small Separator", 'pitch' ),
					"param_name" => "title_separator",
					"value" => array(
						esc_html__( "No", 'pitch' ) => "no",
						esc_html__( "Yes", 'pitch' ) => "yes"
					),
					'save_always' => true,
					"dependency" => array("element" => "type", "value" => array("icon_image_on_top"))
				),
				array(
					"type" => "textfield",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Small Title", 'pitch' ),
					"param_name" => "small_title",
					"value" => ""
				),
				array(
					"type" => "textfield",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Subtitle", 'pitch' ),
					"param_name" => "subtitle",
					"value" => ""
				),
				array(
					"type" => "colorpicker",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Separator Color", 'pitch' ),
					"param_name" => "title_separator_color",
					"dependency" => array("element" => "title_separator", "value" => array("yes"))
				),
				array(
					"type" => "dropdown",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Title Border Bottom", 'pitch' ),
					"param_name" => "title_border_bottom",
					"value" => array(
						esc_html__( "Yes", 'pitch' ) => "yes",
						esc_html__( "No", 'pitch' ) => "no"
					),
					'save_always' => true,
					"dependency" => array("element" => "type", "value" => array("title_on_top"))
				),
				array(
					"type" => "colorpicker",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Title Border Bottom color", 'pitch' ),
					"param_name" => "title_border_bottom_color",
					"dependency" => array("element" => "title_border_bottom", "value" => array("yes"))
				),
				array(
					"type" => "dropdown",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Wide Border Top", 'pitch' ),
					"param_name" => "border_top",
					"value" => array(
						esc_html__( "Yes", 'pitch' ) => "yes",
						esc_html__( "No", 'pitch' ) => "no"
					),
					'save_always' => true,
					"dependency" => array("element" => "type", "value" => array("title_on_top"))
				),
				array(
					"type" => "colorpicker",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Wide Border Top Color", 'pitch' ),
					"param_name" => "border_top_color",
					"dependency" => array("element" => "border_top", "value" => array("yes"))
				),
				array(
					"type" => "dropdown",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Show Icon/Image", 'pitch' ),
					"param_name" => "show_icon_image",
					"value" => array(
						esc_html__( "Yes", 'pitch' ) => "yes",
						esc_html__( "No", 'pitch' ) => "no"
					),
					'save_always' => true
				),
				array(
					"type" => "dropdown",
					"class" => "",
					"heading" => esc_html__( "Header type", 'pitch' ),
					"param_name" => "header_type",
					"value" => array(
						esc_html__( "With Icon", 'pitch' ) => "with_icon",
						esc_html__( "With Image", 'pitch' ) => "with_image"
					),
					'save_always' => true,
					"dependency" => array("element" => "show_icon_image", "value" => array("yes"))
				)
			),
			pitch_qode_icon_collections()->getVCParamsArray(array("element" => "header_type", "value" => array("with_icon"))),
			array(
				array(
					"type" => "colorpicker",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Icon Color", 'pitch' ),
					"param_name" => "icon_color",
					"dependency" => array("element" => "header_type", "value" => array("with_icon"))
				),
				array(
					"type" => "colorpicker",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Icon Holder Background Color", 'pitch' ),
					"param_name" => "icon_background_color",
					"dependency" => array("element" => "header_type", "value" => array("with_icon"))
				),
				array(
					"type" => "textfield",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Icon/Image Holder Padding Top (px)", 'pitch' ),
					"param_name" => "icon_padding_top",
					"value" => "",
					"dependency" => array("element" => "show_icon_image", "value" => array("yes"))
				),
				array(
					"type" => "textfield",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Icon/Image Holder Padding Bottom (px)", 'pitch' ),
					"param_name" => "icon_padding_bottom",
					"value" => "",
					"dependency" => array("element" => "show_icon_image", "value" => array("yes"))
				),
				array(
					"type" => "textfield",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Custom Size (px)", 'pitch' ),
					"param_name" => "custom_size",
					"value" => "",
					"dependency" => array("element" => "header_type", "value" => array("with_icon"))
				),
				array(
					"type" => "attach_image",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Header Image", 'pitch' ),
					"param_name" => "header_image",
					"dependency" => array("element" => "header_type", "value" => array("with_image"))
				),
				array(
					"type" => "dropdown",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Border Below Image/Icon", 'pitch' ),
					"param_name" => "border_below_image",
					"value" => array(
						esc_html__( "Default", 'pitch' ) => "",
						esc_html__( "No", 'pitch' ) => "no",
						esc_html__( "Yes", 'pitch' ) => "yes"
					),
					"dependency" => array("element" => "show_icon_image", "value" => array("yes"))
				),
				array(
					"type" => "colorpicker",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Border Below Image/Icon Color", 'pitch' ),
					"param_name" => "border_below_image_color",
					"dependency" => array("element" => "border_below_image", "value" => array("yes"))),
				array(
					"type" => "textfield",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Border Below Image/Icon Width", 'pitch' ),
					"param_name" => "border_below_image_width",
					"dependency" => array("element" => "border_below_image",  "value" => array("yes"))),
				array(
					"type" => "colorpicker",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Content Background Color", 'pitch' ),
					"param_name" => "content_background_color"
				),
				array(
					"type" => "attach_image",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Content Background Image", 'pitch' ),
					"param_name" => "content_background_image"
				),
				array(
					"type" => "dropdown",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Set Different Background Color for Odd and Even Content Sections?", 'pitch' ),
					"param_name" => "different_odd_even_sections",
					"value" => array(
						esc_html__( "No", 'pitch' ) => "no",
						esc_html__( "Yes", 'pitch' ) => "yes",
					),
					'save_always' => true
				),
				array(
					"type" => "colorpicker",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Even Sections Background Color", 'pitch' ),
					"param_name" => "even_back_color",
					"dependency" => array('element' => 'different_odd_even_sections', 'value' => 'yes')
				),
				array(
					"type" => "colorpicker",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Odd Sections Background Color", 'pitch' ),
					"param_name" => "odd_back_color",
					"dependency" => array('element' => 'different_odd_even_sections', 'value' => 'yes')
				),
				array(
					"type" => "dropdown",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Border Around", 'pitch' ),
					"param_name" => "border",
					"value" => array(
						esc_html__( "Default", 'pitch' ) => "",
						esc_html__( "No", 'pitch' ) => "no",
						esc_html__( "Yes", 'pitch' ) => "yes"
					)
				),
				array(
					"type" => "textfield",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Border width (px)", 'pitch' ),
					"param_name" => "border_width",
					"value" => "",
					"dependency" => array('element' => "border", 'value' => array('yes'))
				),
				array(
					"type" => "colorpicker",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Border color", 'pitch' ),
					"param_name" => "border_color",
					"value" => "",
					"dependency" => array('element' => "border", 'value' => array('yes'))
				),
				array(
					"type" => "dropdown",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Active", 'pitch' ),
					"param_name" => "active",
					"value" => array(
						esc_html__( "No", 'pitch' ) => "no",
						esc_html__( "Yes", 'pitch' ) => "yes"
					),
					'save_always' => true
				),
				array(
					"type" => "dropdown",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Active Style", 'pitch' ),
					"param_name" => "active_style",
					"value" => array(
						esc_html__( "Default", 'pitch' ) => "",
						esc_html__( "Circle", 'pitch' ) => "circle",
						esc_html__( "Rectangle", 'pitch' ) => "rectangle"
					),
					"dependency" => array('element' => "active", 'value' => array('yes'))
				),
				array(
					"type" => "textfield",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Active text", 'pitch' ),
					"param_name" => "active_text",
					"description" => esc_html__( "Best choice", 'pitch' ),
					"dependency" => array('element' => 'active', 'value' => 'yes')
				),
				array(
					"type" => "colorpicker",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Active Text Color", 'pitch' ),
					"param_name" => "active_text_color",
					"dependency" => array('element' => 'active', 'value' => 'yes')
				),
				array(
					"type" => "colorpicker",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Active Text Background Color", 'pitch' ),
					"param_name" => "active_text_background_color",
					"dependency" => array('element' => 'active', 'value' => 'yes')
				),
				array(
					"type" => "colorpicker",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Content Text Color", 'pitch' ),
					"param_name" => "content_text_color"
				),
				array(
					"type" => "textarea_html",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Content", 'pitch' ),
					"param_name" => "content",
					"value" => "<li>content content content</li><li>content content content</li><li>content content content</li>"
				)
			)
		)
	)
);


/*** Call to action ***/

$call_to_action_button_icons_array = array();
$call_to_action_button_IconCollections = pitch_qode_icon_collections()->iconCollections;
foreach($call_to_action_button_IconCollections as $collection_key => $collection) {

    $call_to_action_button_icons_array[] = array(
        "type" => "dropdown",
        "class" => "",
        "heading" => esc_html__( "Button Icon", 'pitch' ),
        "param_name" => "button_".$collection->param,
        "value" => $collection->getIconsArray(),
		'save_always' => true,
        "dependency" => Array('element' => "button_icon_pack", 'value' => array($collection_key))
    );

}


vc_map( array(
		"name" => esc_html__( "Call to Action", 'pitch' ),
		"base" => "no_call_to_action",
		"category" => esc_html__( 'by Select', 'pitch' ),
		"icon" => "icon-wpb-call-to-action extended-custom-icon",
		"allowed_container_element" => 'vc_row',
		"params" => array_merge(
			array(
				array(
					"type"          => "dropdown",
					"holder"        => "div",
					"class"         => "",
					"heading" => esc_html__( "Full Width", 'pitch' ),
					"param_name"    => "full_width",
					"value"         => array(
						esc_html__( "Yes", 'pitch' ) => "yes",
						esc_html__( "No", 'pitch' ) => "no"
					),
					'save_always' => true
				),
				array(
					"type"          => "dropdown",
					"holder"        => "div",
					"class"         => "",
					"heading" => esc_html__( "Content in grid", 'pitch' ),
					"param_name"    => "content_in_grid",
					"value"         => array(
						esc_html__( "Yes", 'pitch' ) => "yes",
						esc_html__( "No", 'pitch' ) => "no"
					),
					'save_always' => true,
					"dependency"    => array("element" => "full_width", "value" => "yes")
				),
				array(
					"type"          => "dropdown",
					"holder"        => "div",
					"class"         => "",
					"heading" => esc_html__( "Grid size", 'pitch' ),
					"param_name"    => "grid_size",
					"value"         => array(
						esc_html__( "75/25", 'pitch' ) => "75",
						esc_html__( "50/50", 'pitch' ) => "50",
						esc_html__( "66/33", 'pitch' ) => "66"
					),
					'save_always' => true,
					"dependency"    => array("element" => "content_in_grid", "value" => "yes")
				),
				array(
					"type" => "dropdown",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Type", 'pitch' ),
					"param_name" => "type",
					"value" => array(
						esc_html__( "Normal", 'pitch' ) => "normal",
						esc_html__( "With Icon", 'pitch' ) => "with_icon",
						esc_html__( "With Custom Icon", 'pitch' ) => "with_custom_icon"
					),
					'save_always' => true
				)
			),
			pitch_qode_icon_collections()->getVCParamsArray(array('element' => 'type', 'value' => array('with_icon'))),
			array(
				array(
					"type" => "attach_image",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Custom Icon", 'pitch' ),
					"param_name" => "custom_icon",
					"dependency" => Array('element' => "type", 'value' => array('with_custom_icon'))
				),
				array(
					"type" => "textfield",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Icon Size (px)", 'pitch' ),
					"param_name" => "icon_size",
					"dependency" => Array('element' => "type", 'value' => array('with_icon'))
				),
				array(
					"type" => "dropdown",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Icon Position", 'pitch' ),
					"param_name" => "icon_position",
					"value" => array(
						esc_html__( "Default/Top", 'pitch' ) => "top",
						esc_html__( "Middle", 'pitch' ) => "middle",
						esc_html__( "Bottom", 'pitch' ) => "bottom"
					),
					'save_always' => true,
					"dependency" => array('element' => 'type', 'value' => array('with_icon','with_custom_icon'))
				),
				array(
					"type" => "colorpicker",
					"class" => "",
					"heading" => esc_html__( "Icon Color", 'pitch' ),
					"param_name" => "icon_color",
					"dependency" => Array('element' => "type", 'value' => array('with_icon'))
				),
				array(
					"type" => "colorpicker",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Background Color", 'pitch' ),
					"param_name" => "background_color"
				),
				array(
					"type" => "colorpicker",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Border Color", 'pitch' ),
					"param_name" => "border_color"
				),
				array(
					"type" => "textfield",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Box Padding (top right bottom left) px", 'pitch' ),
					"param_name" => "box_padding",
					"description" => esc_html__( "Default padding is 20px on all sides", 'pitch' )
				),
				array(
					"type" => "textfield",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Default Text Font Size (px)", 'pitch' ),
					"param_name" => "text_size",
					"description" => esc_html__( "Font size for p tag", 'pitch' )
				),
				array(
					"type" => "dropdown",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Show Button", 'pitch' ),
					"param_name" => "show_button",
					"value" => array(
						esc_html__( "Yes", 'pitch' ) => "yes",
						esc_html__( "No", 'pitch' ) => "no"
					),
					'save_always' => true
				),
				array(
                    "type" => "dropdown",
                    "holder" => "div",
                    "class" => "",
                    "heading" => esc_html__( "Hover Animation", 'pitch' ),
                    "param_name" => "button_hover_animation",
                    "value" => array(
                        esc_html__( "Default", 'pitch' ) => "default",
						esc_html__( "Disable Animation", 'pitch' ) => "disable_animation",
                        esc_html__( "Fill From Top", 'pitch' ) => "fill_from_top",
						esc_html__( "Fill From Left", 'pitch' ) => "fill_from_left",
						esc_html__( "Fill From Bottom", 'pitch' ) => "fill_from_bottom"
                    ),
					'save_always' => true,
                    "dependency" => array('element' => 'show_button', 'value' => 'yes')
                ),
				array(
					"type" => "dropdown",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Button Position", 'pitch' ),
					"param_name" => "button_position",
					"value" => array(
						esc_html__( "Default/right", 'pitch' ) => "",
						esc_html__( "Center", 'pitch' ) => "center",
						esc_html__( "Left", 'pitch' ) => "left"
					),
					"dependency" => array('element' => 'show_button', 'value' => array('yes'))
				),
				array(
					"type" => "dropdown",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Button Size", 'pitch' ),
					"param_name" => "button_size",
					"value" => array(
						esc_html__( "Default", 'pitch' ) => "",
						esc_html__( "Small", 'pitch' ) => "small",
						esc_html__( "Medium", 'pitch' ) => "medium",
						esc_html__( "Large", 'pitch' ) => "large",
						esc_html__( "Extra Large", 'pitch' ) => "big_large"
					),
					"dependency" => array('element' => 'show_button', 'value' => array('yes'))
				),
				array(
					"type" => "textfield",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Button Text", 'pitch' ),
					"param_name" => "button_text",
					"description" => esc_html__( "Default text is button", 'pitch' ),
					"dependency" => array('element' => 'show_button', 'value' => array('yes'))
				),
				array(
					"type" => "textfield",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Button Link", 'pitch' ),
					"param_name" => "button_link",
					"dependency" => array('element' => 'show_button', 'value' => array('yes'))
				),
				array(
					"type" => "dropdown",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Button Target", 'pitch' ),
					"param_name" => "button_target",
					"value" => array(
						"" => "",
						esc_html__( "Self", 'pitch' ) => "_self",
						esc_html__( "Blank", 'pitch' ) => "_blank"
					),
					"dependency" => array('element' => 'show_button', 'value' => array('yes'))
				),
				array(
					"type" => "colorpicker",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Button Text Color", 'pitch' ),
					"param_name" => "button_text_color",
					"dependency" => array('element' => 'show_button', 'value' => array('yes'))
				),
				array(
					"type" => "colorpicker",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Button Hover Text Color", 'pitch' ),
					"param_name" => "button_hover_text_color",
					"dependency" => array('element' => 'show_button', 'value' => array('yes'))
				),
				array(
					"type" => "colorpicker",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Button Background Color", 'pitch' ),
					"param_name" => "button_background_color",
					"dependency" => array('element' => 'show_button', 'value' => array('yes'))
				),
				 array(
					"type" => "colorpicker",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Button Hover Background Color", 'pitch' ),
					"param_name" => "button_hover_background_color",
					"dependency" => array('element' => 'show_button', 'value' => array('yes'))
				),
				array(
					"type" => "colorpicker",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Button Border Color", 'pitch' ),
					"param_name" => "button_border_color",
					"dependency" => array('element' => 'show_button', 'value' => array('yes'))
				),
				array(
					"type" => "colorpicker",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Button Hover Border Color", 'pitch' ),
					"param_name" => "button_hover_border_color",
					"dependency" => array('element' => 'show_button', 'value' => array('yes'))
				),
				array(
					"type" => "textfield",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Button Border Width", 'pitch' ),
					"param_name" => "button_border_width",
					"dependency" => array('element' => 'show_button', 'value' => array('yes'))
				),
				array(
					"type" => "textfield",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Border Radius px", 'pitch' ),
					"param_name" => "border_radius",
					"description" => esc_html__( "Border radius for button", 'pitch' ),
					"dependency" => array('element' => 'show_button', 'value' => array('yes'))
				),
                array(
                    "type" => "dropdown",
                    "holder" => "div",
                    "class" => "",
                    "heading" => esc_html__( "Button Icon Pack", 'pitch' ),
                    "param_name" => "button_icon_pack",
                    "value" => array_merge(array("No Icon" => ""),pitch_qode_icon_collections()->getIconCollectionsVC()),
					'save_always' => true
                )
            ),
            $call_to_action_button_icons_array,
            array(
                array(
                    "type" => "textfield",
                    "holder" => "div",
                    "class" => "",
                    "heading" => esc_html__( "Icon Size", 'pitch' ),
                    "param_name" => "button_icon_size",
                    "dependency" => Array('element' => "button_icon_pack", 'not_empty' => true)
                ),
                array(
                    "type" => "colorpicker",
                    "class" => "",
                    "heading" => esc_html__( "Icon Color", 'pitch' ),
                    "param_name" => "button_icon_color",
                    "dependency" => Array('element' => "button_icon_pack", 'not_empty' => true)
                ),
				array(
					"type" => "colorpicker",
					"class" => "",
					"heading" => esc_html__( "Icon Hover Color", 'pitch' ),
					"param_name" => "button_icon_hover_color",
					"dependency" => Array('element' => "button_icon_pack", 'not_empty' => true)
				),
                array(
                    "type" => "dropdown",
                    "class" => "",
                    "heading" => esc_html__( "Icon Position", 'pitch' ),
                    "param_name" => "button_icon_position",
                    "value" => array(
                    	esc_html__( "Right", 'pitch' ) => "right",
	                    esc_html__( "Left", 'pitch' ) => "left"
                    ),
					'save_always' => true,
                    "dependency" => Array('element' => "button_icon_pack", 'not_empty' => true)
                ),
				array(
					"type" => "textarea_html",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( "Content", 'pitch' ),
					"param_name" => "content",
					"value" => "<p>"."I am test text for Call to action."."</p>"
				)
			)
			)
    )
);


/*** Message shortcode ***/

vc_map( array(
	"name" => esc_html__( "Message", 'pitch' ),
	"base" => "no_message",
	"category" => esc_html__( 'by Select', 'pitch' ),
	"icon" => "icon-wpb-message extended-custom-icon",
	"allowed_container_element" => 'vc_row',
	"params" => array_merge(
		array(
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Type", 'pitch' ),
				"param_name" => "type",
				"value" => array(
					esc_html__( "Normal", 'pitch' ) => "normal",
					esc_html__( "With Icon", 'pitch' ) => "with_icon",
					esc_html__( "With Custom Icon", 'pitch' ) => "with_custom_icon"
				),
				'save_always' => true
			)
		),
		pitch_qode_icon_collections()->getVCParamsArray(array('element' => "type", 'value' => array('with_icon'))),
		array(
			array(
				"type" => "dropdown",
				"class" => "",
				"heading" => esc_html__( "Icon Position", 'pitch' ),
				"param_name" => "icon_position",
				"value" => array(
					esc_html__( "Right", 'pitch' ) => "right",
					esc_html__( "Left", 'pitch' ) => "left"
				),
				'save_always' => true,
				"dependency" => Array('element' => pitch_qode_icon_collections()->iconPackParamName, 'not_empty' => true)
			),
			array(
				"type" => "dropdown",
				"class" => "",
				"heading" => esc_html__( "Icon Position", 'pitch' ),
				"param_name" => "custom_icon_position",
				"value" => array(
					esc_html__( "Right", 'pitch' ) => "right",
					esc_html__( "Left", 'pitch' ) => "left"
				),
				'save_always' => true,
				"dependency" => Array('element' => 'type', 'value' => array('with_custom_icon'))
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Icon Size", 'pitch' ),
				"param_name" => "icon_size",
				"value" => pitch_qode_icon_collections()->getIconSizesArray(),
				'save_always' => true,
				"dependency" => Array('element' => "type", 'value' => array('with_icon'))
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Custom Size (px)", 'pitch' ),
				"param_name" => "icon_custom_size",
				"value" => "",
				"dependency" => Array('element' => "type", 'value' => array('with_icon'))
			),
			array(
				"type" => "colorpicker",
				"class" => "",
				"heading" => esc_html__( "Icon Color", 'pitch' ),
				"param_name" => "icon_color",
				"dependency" => Array('element' => "type", 'value' => array('with_icon'))
			),
			array(
				"type" => "colorpicker",
				"class" => "",
				"heading" => esc_html__( "Icon Background Color", 'pitch' ),
				"param_name" => "icon_background_color",
				"dependency" => Array('element' => "type", 'value' => array('with_icon'))
			),
			array(
				"type" => "attach_image",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Custom Icon", 'pitch' ),
				"param_name" => "custom_icon",
				"dependency" => Array('element' => "type", 'value' => array('with_custom_icon'))
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Background Color", 'pitch' ),
				"param_name" => "background_color"
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Border Color", 'pitch' ),
				"param_name" => "border_color"
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Border Width (px)", 'pitch' ),
				"param_name" => "border_width",
				"description" => esc_html__( "Default value is 1", 'pitch' )
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Close Button Color", 'pitch' ),
				"param_name" => "close_button_color",
				"description" => esc_html__( "Default color is #fff", 'pitch' )
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Close Button Hover Color", 'pitch' ),
				"param_name" => "close_button_hover_color"
			),
			array(
				"type" => "textarea_html",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Content", 'pitch' ),
				"param_name" => "content",
				"value" => "<p>"."I am test text for Message shortcode."."</p>"
			)
		)
	)
) );


/*** Blockquote ***/

vc_map( array(
		"name" => esc_html__( "Blockquote", 'pitch' ),
		"base" => "no_blockquote",
		"category" => esc_html__( 'by Select', 'pitch' ),
		"icon" => "icon-wpb-blockquote extended-custom-icon",
		"allowed_container_element" => 'vc_row',
		"params" => array(
			array(
				"type" => "textarea",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Text", 'pitch' ),
				"param_name" => "text",
				"value" => "Blockquote text"
			),
            array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Text Color", 'pitch' ),
				"param_name" => "text_color"
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Title tag", 'pitch' ),
				"param_name" => "title_tag",
				"value" => array(
					""   => "",
					esc_html__( "h2", 'pitch' ) => "h2",
					esc_html__( "h3", 'pitch' ) => "h3",
					esc_html__( "h4", 'pitch' ) => "h4",
					esc_html__( "h5", 'pitch' ) => "h5",
					esc_html__( "h6", 'pitch' ) => "h6",
				)
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Width", 'pitch' ),
				"param_name" => "width",
				"description" => esc_html__( "Width (%)", 'pitch' )
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Line Height", 'pitch' ),
				"param_name" => "line_height",
				"description" => esc_html__( "Line Height (px)", 'pitch' )
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Left Padding", 'pitch' ),
				"param_name" => "left_padding",
				"description" => esc_html__( "Left padding (px)", 'pitch' )
			),
            array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Background Color", 'pitch' ),
				"param_name" => "background_color"
			),
             array(
                "type" => "dropdown",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Show Border", 'pitch' ),
                "param_name" => "show_border",
                "value" => array(
                    esc_html__( "Yes", 'pitch' ) => "yes",
                    esc_html__( "No", 'pitch' ) => "no"
                ),
				 'save_always' => true
            ),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Border Color", 'pitch' ),
				"param_name" => "border_color",
                "dependency" => array('element' => "show_border", 'value' => 'yes')
			),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Border width (px)", 'pitch' ),
                "param_name" => "border_width",
                "dependency" => array('element' => "show_border", 'value' => 'yes')
            ),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Border Right Margin (px)", 'pitch' ),
                "param_name" => "border_right_margin",
                "dependency" => array('element' => "show_border", 'value' => 'yes')
            ),
            array(
                "type" => "dropdown",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Show Quote Icon", 'pitch' ),
                "param_name" => "show_quote_icon",
                "value" => array(
                    esc_html__( "Yes", 'pitch' ) => "yes",
                    esc_html__( "No", 'pitch' ) => "no"
                ),
				'save_always' => true
            ),
            array(
                "type" => "dropdown",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Use Custom Icon or Font", 'pitch' ),
                "param_name" => "quote_icon_font",
                "value" => array(
                    esc_html__( "No", 'pitch' ) => "",
                    esc_html__( "Use Specific Font", 'pitch' ) => "font_family",
                    esc_html__( "Use Icon", 'pitch' ) => "with_icon"
                ),
                "dependency" => array('element' => "show_quote_icon", 'value' => 'yes')
            ),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Quote Icon Font", 'pitch' ),
                "param_name" => "quote_font_family",
                "dependency" => Array('element' => "quote_icon_font", 'value' => 'font_family')
            ),
            array(
                "type" => "colorpicker",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Quote Icon Color", 'pitch' ),
                "param_name" => "quote_icon_color",
                "dependency" => array('element' => "show_quote_icon", 'value' => 'yes')
            ),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Quote Icon Size (px)", 'pitch' ),
				"param_name" => "quote_icon_size",
                "dependency" => array('element' => "show_quote_icon", 'value' => 'yes')
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Quote Icon Left Padding (px)", 'pitch' ),
				"param_name" => "quote_icon_padding_left",
                "dependency" => array('element' => "show_quote_icon", 'value' => 'yes')
			)
		)
) );


/*** Custom Font ***/

vc_map( array(
	"name" => esc_html__( "Custom Font", 'pitch' ),
	"base" => "no_custom_font",
	"icon" => "icon-wpb-custom-font extended-custom-icon",
	"category" => esc_html__( 'by Select', 'pitch' ),
	"allowed_container_element" => 'vc_row',
	"params" => array(
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Font family", 'pitch' ),
			"param_name" => "font_family",
			"value" => ""
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Font size", 'pitch' ),
			"param_name" => "font_size",
			"value" => ""
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Line height", 'pitch' ),
			"param_name" => "line_height",
			"value" => ""
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Font Style", 'pitch' ),
			"param_name" => "font_style",
			"value" => array(
				esc_html__( "Normal", 'pitch' ) => "normal",
				esc_html__( "Italic", 'pitch' ) => "italic"
			),
			'save_always' => true
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Text Align", 'pitch' ),
			"param_name" => "text_align",
			"value" => array(
				esc_html__( "Left", 'pitch' ) => "left",
				esc_html__( "Center", 'pitch' ) => "center",
				esc_html__( "Right", 'pitch' ) => "right"
			),
			'save_always' => true
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Font weight", 'pitch' ),
			"param_name" => "font_weight",
			"value" => "300",
			'save_always' => true
		),
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Color", 'pitch' ),
			"param_name" => "color"
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Text decoration", 'pitch' ),
			"param_name" => "text_decoration",
			"value" => array(
				esc_html__( "None", 'pitch' ) => "none",
				esc_html__( "Underline", 'pitch' ) => "underline",
				esc_html__( "Overline", 'pitch' ) => "overline",
				esc_html__( "Line Through", 'pitch' ) => "line-through"
			),
			'save_always' => true
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Text transform", 'pitch' ),
			"param_name" => "text_transform",
			"value" => array(
				esc_html__( "None", 'pitch' ) => "none",
				esc_html__( "Uppercase", 'pitch' ) => "uppercase",
				esc_html__( "Lowercase", 'pitch' ) => "lowercase",
				esc_html__( "Capitalize", 'pitch' ) => "capitalize"
			),
			'save_always' => true
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Text shadow", 'pitch' ),
			"param_name" => "text_shadow",
			"value" => array(
				esc_html__( "No", 'pitch' ) => "no",
				esc_html__( "Yes", 'pitch' ) => "yes"
			),
			'save_always' => true
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Letter Spacing (px)", 'pitch' ),
			"param_name" => "letter_spacing",
			"value" => ""
		),
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Background Color", 'pitch' ),
			"param_name" => "background_color"
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Padding", 'pitch' ),
			"param_name" => "padding",
			"value" => "0",
			"description" => esc_html__( "Please insert padding in format (top right bottom left) i.e. 5px 5px 5px 5px", 'pitch' )
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Margin", 'pitch' ),
			"param_name" => "margin",
			"value" => "0",
			"description" => esc_html__( "Please insert margin in format (top right bottom left) i.e. 5px 5px 5px 5px", 'pitch' )
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Show in border box", 'pitch' ),
			"param_name" => "show_in_border_box",
			"value" => array(
				esc_html__( "No", 'pitch' ) => "no",
				esc_html__( "Yes", 'pitch' ) => "yes"
			),
			'save_always' => true
		),
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Border Color", 'pitch' ),
			"param_name" => "border_color",
			"dependency" => array('element' => 'show_in_border_box', 'value' => 'yes')
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Border Thickness (px)", 'pitch' ),
			"param_name" => "border_width",
			"value" => "",
			"dependency" => array('element' => 'show_in_border_box', 'value' => 'yes')
		),
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Text background Color", 'pitch' ),
			"param_name" => "text_background_color",
			"value" => "",
			"dependency" => array('element' => 'show_in_border_box', 'value' => 'yes')
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Text padding (px)", 'pitch' ),
			"param_name" => "text_padding",
			"value" => "",
			"description" => esc_html__( "Please insert padding in format (top right bottom left) i.e. 5px 5px 5px 5px", 'pitch' ),
			"dependency" => array('element' => 'show_in_border_box', 'value' => 'yes')
		),
		array(
			"type" => "textarea_html",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Content", 'pitch' ),
			"param_name" => "content",
			"value" => "<p>content content content</p>"
		)
	)
) );


/***  Text With Number **/

vc_map( array(
	"name" => esc_html__( "Text With Number", 'pitch' ),
	"base" => "no_numbered_steps",
	"icon" => "icon-wpb-numbered-steps extended-custom-icon",
	"category" => esc_html__( 'by Select', 'pitch' ),
	"allowed_container_element" => 'vc_row',
	"params" => array(
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Number", 'pitch' ),
			"param_name" => "number",
			"value" => "",
			"description" => esc_html__( "Insert a number", 'pitch' )
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Title", 'pitch' ),
			"param_name" => "title",
			"value" => "",
			"description" => esc_html__( "Insert title", 'pitch' )
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Subtitle", 'pitch' ),
			"param_name" => "subtitle",
			"value" => "",
			"description" => esc_html__( "Insert subtitle", 'pitch' )
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Show Animation", 'pitch' ),
			"param_name" => "animation",
			"value" => array(
				esc_html__( "No", 'pitch' ) => "no",
				esc_html__( "Yes", 'pitch' ) => "yes"
			),
			'save_always' => true
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Animation Delay", 'pitch' ),
			"param_name" => "animation_delay",
			"value" => "",
			"description" => esc_html__( "Insert transition delay in seconds", 'pitch' ),
			"dependency" => array('element' => "animation", 'value' => array('yes'))
		),
	)
) );

/*** Button shortcode **/

vc_map( array(
		"name" => esc_html__( "Button", 'pitch' ),
		"base" => "no_button",
		"category" => esc_html__( 'by Select', 'pitch' ),
		"icon" => "icon-wpb-button extended-custom-icon",
		"allowed_container_element" => 'vc_row',
		"params" => array_merge(
                    array(
                        array(
                            "type" => "dropdown",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Size", 'pitch' ),
                            "param_name" => "size",
                            "value" => array(
                                esc_html__( "Default", 'pitch' ) => "",
                                esc_html__( "Small", 'pitch' ) => "small",
                                esc_html__( "Medium", 'pitch' ) => "medium",
                                esc_html__( "Large", 'pitch' ) => "large",
                                esc_html__( "Extra Large", 'pitch' ) => "big_large",
                                esc_html__( "Extra Large Full Width", 'pitch' ) => "big_large_full_width"
                            )
                        ),
                        array(
                            "type" => "dropdown",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Style", 'pitch' ),
                            "param_name" => "style",
                            "value" => array(
                                esc_html__( "Default", 'pitch' ) => "",
                                esc_html__( "White", 'pitch' ) => "white",
                                esc_html__( "Transparent", 'pitch' ) => "transparent"
                            )
                        ),
                        array(
                            "type" => "textfield",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Text", 'pitch' ),
                            "param_name" => "text",
                            "description" => esc_html__( "Default text is button", 'pitch' )
                        ),
						 array(
                            "type" => "dropdown",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Hover Animation", 'pitch' ),
                            "param_name" => "button_hover_animation",
                            "value" => array(
                                esc_html__( "Default", 'pitch' ) => "default",
								esc_html__( "Disable Animation", 'pitch' ) => "disable_animation",
                                esc_html__( "Fill From Top", 'pitch' ) => "fill_from_top",
								esc_html__( "Fill From Left", 'pitch' ) => "fill_from_left",
								esc_html__( "Fill From Bottom", 'pitch' ) => "fill_from_bottom"
                            ),
							 'save_always' => true,
                            "dependency" => array('element' => 'style', 'value' => array("","white"))
                        )
                    ),
                    pitch_qode_icon_collections()->getVCParamsArray(array(), '', true),
                    array(
                        array(
                            "type" => "dropdown",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Icon Hover Animation", 'pitch' ),
                            "param_name" => "hover_animation",
                            "value" => array(
                                esc_html__( "Default", 'pitch' ) => "",
                                esc_html__( "Move Icon", 'pitch' ) => "move_icon"
                            ),
                            "dependency" => Array('element' => pitch_qode_icon_collections()->iconPackParamName, 'not_empty' => true)
                        ),
                        array(
                            "type" => "textfield",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Button Width (px)", 'pitch' ),
                            "param_name" => "button_width",
                            "dependency" => array('element' => "hover_animation", 'value' => array('move_icon'))

                        ),
                        array(
                            "type" => "dropdown",
                            "class" => "",
                            "heading" => esc_html__( "Icon Position", 'pitch' ),
                            "param_name" => "icon_position",
                            "value" => array(
                                esc_html__( "Right", 'pitch' ) => "right",
                                esc_html__( "Left", 'pitch' ) => "left"
                            ),
							'save_always' => true,
                            "dependency" => Array('element' => pitch_qode_icon_collections()->iconPackParamName, 'not_empty' => true)
                        ),
						array(
                            "type" => "textfield",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Icon Font Size (px)", 'pitch' ),
                            "param_name" => "icon_font_size",
                            "dependency" => array('element' => pitch_qode_icon_collections()->iconPackParamName, 'not_empty' => true)

                        ),
                        array(
                            "type" => "colorpicker",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Icon Color", 'pitch' ),
                            "param_name" => "icon_color",
                            "dependency" => Array('element' =>pitch_qode_icon_collections()->iconPackParamName, 'not_empty' => true)
                        ),
						array(
                            "type" => "colorpicker",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Icon Hover Color", 'pitch' ),
                            "param_name" => "icon_hover_color",
                            "dependency" => Array('element' =>pitch_qode_icon_collections()->iconPackParamName, 'not_empty' => true)
                        ),
                        array(
                            "type" => "colorpicker",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Icon Background Color", 'pitch' ),
                            "param_name" => "icon_background_color",
                            "dependency" => Array('element' =>pitch_qode_icon_collections()->iconPackParamName, 'not_empty' => true),
                            "description" => esc_html__( "Will have no effect on button with transparent style", 'pitch' )
                        ),
                        array(
                            "type" => "colorpicker",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Icon Background Hover Color", 'pitch' ),
                            "param_name" => "icon_background_hover_color",
                            "dependency" => Array('element' =>pitch_qode_icon_collections()->iconPackParamName, 'not_empty' => true),
                            "description" => esc_html__( "Will have no effect on button with transparent style", 'pitch' )
                        ),
                        array(
                            "type" => "textfield",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Link", 'pitch' ),
                            "param_name" => "link"
                        ),
                        array(
                            "type" => "dropdown",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Link Target", 'pitch' ),
                            "param_name" => "target",
                            "value" => array(
                                esc_html__( "Self", 'pitch' ) => "_self",
                                esc_html__( "Blank", 'pitch' ) => "_blank"
                            ),
							'save_always' => true
                        ),
                        array(
                            "type" => "colorpicker",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Color", 'pitch' ),
                            "param_name" => "color"
                        ),
                        array(
                            "type" => "colorpicker",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Hover Color", 'pitch' ),
                            "param_name" => "hover_color"
                        ),
                        array(
                            "type" => "colorpicker",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Background Color", 'pitch' ),
                            "param_name" => "background_color",
                            "dependency" => array('element' => 'style', 'value' => array("","white"))
                        ),
                        array(
                            "type" => "colorpicker",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Hover Background Color", 'pitch' ),
                            "param_name" => "hover_background_color",
                            "dependency" => array('element' => 'style', 'value' => array("","white"))
                        ),
						array(
							"type" => "attach_image",
							"holder" => "div",
							"class" => "",
							"heading" => esc_html__( "Background Pattern", 'pitch' ),
							"param_name" => "background_pattern",
                            "dependency" => array('element' => 'style', 'value' => array("","white"))
						),
                        array(
                            "type" => "colorpicker",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Border Color", 'pitch' ),
                            "param_name" => "border_color",
                            "dependency" => array('element' => 'style', 'value' => array("","white"))
                        ),
                        array(
                            "type" => "colorpicker",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Hover Border Color", 'pitch' ),
                            "param_name" => "hover_border_color",
                            "dependency" => array('element' => 'style', 'value' => array("","white"))
                        ),
                        array(
                            "type" => "textfield",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Border Width (px)", 'pitch' ),
                            "param_name" => "border_width",
                            "dependency" => array('element' => 'style', 'value' => array("","white"))
                        ),
						array(
                            "type" => "textfield",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Font Size (px)", 'pitch' ),
                            "param_name" => "font_size"
                        ),
						array(
                            "type" => "textfield",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Line Height (px)", 'pitch' ),
                            "param_name" => "line_height"
                        ),
                        array(
                            "type" => "dropdown",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Font Style", 'pitch' ),
                            "param_name" => "font_style",
                            "value" => array(
                                "" => "",
                                esc_html__( "Normal", 'pitch' ) => "normal",
                                esc_html__( "Italic", 'pitch' ) => "italic"
                            )
                        ),
                        array(
                            "type" => "dropdown",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Font Weight", 'pitch' ),
                            "param_name" => "font_weight",
                            "value" => $font_weight_array,
							'save_always' => true
                        ),
                        array(
                            "type" => "textfield",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Margin", 'pitch' ),
                            "param_name" => "margin",
                            "description" => esc_html__( "Please insert margin in format: 0px 0px 1px 0px", 'pitch' ),
                        ),
                        array(
                            "type" => "textfield",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Left/Right Padding (px)", 'pitch' ),
                            "param_name" => "padding",
                            "description" => esc_html__( "For transparent style affects only space between icon and text", 'pitch' ),
                        ),
                        array(
                            "type" => "textfield",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Border radius", 'pitch' ),
                            "param_name" => "border_radius",
                            "description" => esc_html__( "Please insert border radius(Rounded corners) in px. For example: 4 ", 'pitch' ),
                            "dependency" => array('element' => 'style', 'value' => array("","white"))
                        )
                    )
                )
    )
);


/*** Counter ***/

vc_map( array(
	"name" => esc_html__( "Counter", 'pitch' ),
	"base" => "no_counter",
	"category" => esc_html__( 'by Select', 'pitch' ),
	'admin_enqueue_css' => array(pitch_qode_get_skin_uri().'/assets/css/qodef-vc-extend.css'),
	"icon" => "icon-wpb-counter extended-custom-icon",
	"allowed_container_element" => 'vc_row',
	"params" => array_merge(
		array(
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Type", 'pitch' ),
				"param_name" => "type",
				"value" => array(
					esc_html__( "Zero Counter", 'pitch' ) => "zero",
					esc_html__( "Random Counter", 'pitch' ) => "random"
				),
				'save_always' => true
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Box", 'pitch' ),
				"param_name" => "box",
				"value" => array(
					"" => "",
					esc_html__( "Yes", 'pitch' ) => "yes",
					esc_html__( "No", 'pitch' ) => "no"
				)
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Box Border Color", 'pitch' ),
				"param_name" => "box_border_color",
				"dependency" => array('element' => "box", 'value' => array('yes'))
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Position", 'pitch' ),
				"param_name" => "position",
				"value" => array(
					esc_html__( "Left", 'pitch' ) => "left",
					esc_html__( "Right", 'pitch' ) => "right",
					esc_html__( "Center", 'pitch' ) => "center"
				),
				'save_always' => true
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Digit", 'pitch' ),
				"param_name" => "digit"
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Underline Digit", 'pitch' ),
				"param_name" => "underline_digit",
				"value" => array(
					"" => "",
					esc_html__( "Yes", 'pitch' ) => "yes",
					esc_html__( "No", 'pitch' ) => "no"
				)
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Digit Font Size (px)", 'pitch' ),
				"param_name" => "font_size"
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Digit Font Weight", 'pitch' ),
				"param_name" => "font_weight",
				"value" => array(
					esc_html__( "Default", 'pitch' ) => "",
					esc_html__( "Thin 100", 'pitch' ) => "100",
					esc_html__( "Extra-Light 200", 'pitch' ) => "200",
					esc_html__( "Light 300", 'pitch' ) => "300",
					esc_html__( "Regular 400", 'pitch' ) => "400",
					esc_html__( "Medium 500", 'pitch' ) => "500",
					esc_html__( "Semi-Bold 600", 'pitch' ) => "600",
					esc_html__( "Bold 700", 'pitch' ) => "700",
					esc_html__( "Extra-Bold 800", 'pitch' ) => "800",
					esc_html__( "Ultra-Bold 900", 'pitch' ) => "900"
				)
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Digit Letter Spacing (px)", 'pitch' ),
				"param_name" => "digit_letter_spacing"
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Digit Font Color", 'pitch' ),
				"param_name" => "font_color"
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Show icon next to digit", 'pitch' ),
				"param_name" => "counter_icon",
				"value" => array(
					esc_html__( "No", 'pitch' ) => "no",
					esc_html__( "Yes", 'pitch' ) => "yes",
				),
				'save_always' => true
			)
		),
		pitch_qode_icon_collections()->getVCParamsArray(array("element" => "counter_icon", "value" => array("yes"))),
		array(
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Icon Color", 'pitch' ),
				"param_name" => "icon_color",
				"dependency" => Array('element' => "icon_pack", 'value' => pitch_qode_icon_collections()->getIconCollectionsKeys())
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Custom Icon Size (px)", 'pitch' ),
				"param_name" => "icon_custom_size",
				"dependency" => Array('element' => "icon_pack", 'value' => pitch_qode_icon_collections()->getIconCollectionsKeys())
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Title", 'pitch' ),
				"param_name" => "title"
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Title Color", 'pitch' ),
				"param_name" => "title_color"
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Title Tag", 'pitch' ),
				"param_name" => "title_tag",
				"value" => array(
					""   => "",
					esc_html__( "h2", 'pitch' ) => "h2",
					esc_html__( "h3", 'pitch' ) => "h3",
					esc_html__( "h4", 'pitch' ) => "h4",
					esc_html__( "h5", 'pitch' ) => "h5",
					esc_html__( "h6", 'pitch' ) => "h6",
				)
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Title Size (px)", 'pitch' ),
				"param_name" => "title_size"
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Text", 'pitch' ),
				"param_name" => "text"
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Text Size (px)", 'pitch' ),
				"param_name" => "text_size"
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Text Font Weight", 'pitch' ),
				"param_name" => "text_font_weight",
				"value" => array(
					esc_html__( "Default", 'pitch' ) => "",
					esc_html__( "Thin 100", 'pitch' ) => "100",
					esc_html__( "Extra-Light 200", 'pitch' ) => "200",
					esc_html__( "Light 300", 'pitch' ) => "300",
					esc_html__( "Regular 400", 'pitch' ) => "400",
					esc_html__( "Medium 500", 'pitch' ) => "500",
					esc_html__( "Semi-Bold 600", 'pitch' ) => "600",
					esc_html__( "Bold 700", 'pitch' ) => "700",
					esc_html__( "Extra-Bold 800", 'pitch' ) => "800",
					esc_html__( "Ultra-Bold 900", 'pitch' ) => "900"
				)
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Text Transform", 'pitch' ),
				"param_name" => "text_transform",
				"value" => array(
					esc_html__( "Default", 'pitch' ) => "",
					esc_html__( "None", 'pitch' ) => "none",
					esc_html__( "Capitalize", 'pitch' ) => "capitalize",
					esc_html__( "Uppercase", 'pitch' ) => "uppercase",
					esc_html__( "Lowercase", 'pitch' ) => "lowercase"
				)
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Text Color", 'pitch' ),
				"param_name" => "text_color"
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Separator", 'pitch' ),
				"param_name" => "separator",
				"value" => array(
					esc_html__( "Yes", 'pitch' ) => "yes",
					esc_html__( "No", 'pitch' ) => "no"
				),
				'save_always' => true
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Separator Position", 'pitch' ),
				"param_name" => "separator_position",
				"value" => array(
					esc_html__( "Default", 'pitch' ) => "",
					esc_html__( "Above Title", 'pitch' ) => "above_title",
					esc_html__( "Under Title", 'pitch' ) => "under_title",
				),
				"dependency" => array('element' => "separator", 'value' => array('yes'))
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Separator Width (px)", 'pitch' ),
				"param_name" => "separator_width"
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Separator Color", 'pitch' ),
				"param_name" => "separator_color",
				"dependency" => array('element' => "separator", 'value' => array('yes'))
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Separator Thickness (px)", 'pitch' ),
				"param_name" => "separator_thickness",
				"dependency" => array('element' => "separator", 'value' => array('yes'))
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Separator Border Style", 'pitch' ),
				"param_name" => "separator_border_style",
				"value" => array(
					"" => "",
					esc_html__( "Dashed", 'pitch' ) => "dashed",
					esc_html__( "Solid", 'pitch' ) => "solid"
				),
				"dependency" => array('element' => "separator", 'value' => array('yes'))
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Padding Bottom(px)", 'pitch' ),
				"param_name" => "padding_bottom"
			),
		)
	)
) );


/*** Countdown ***/

vc_map( array(
	"name" => esc_html__( "Countdown", 'pitch' ),
	"base" => "no_countdown",
	"category" => esc_html__( 'by Select', 'pitch' ),
	"icon" => "icon-wpb-countdown extended-custom-icon",
	"allowed_container_element" => 'vc_row',
	"params" => array(
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Year", 'pitch' ),
			"param_name" => "year",
			"value" => array(
				"" => "",
				esc_html__( "2014", 'pitch' ) => "2014",
				esc_html__( "2015", 'pitch' ) => "2015",
				esc_html__( "2016", 'pitch' ) => "2016",
				esc_html__( "2017", 'pitch' ) => "2017",
				esc_html__( "2018", 'pitch' ) => "2018",
				esc_html__( "2019", 'pitch' ) => "2019",
				esc_html__( "2020", 'pitch' ) => "2020"
			),
            'save_always' => true
		),

		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Month", 'pitch' ),
			"param_name" => "month",
			"value" => array(
				"" => "",
				esc_html__( "January", 'pitch' ) => "1",
				esc_html__( "February", 'pitch' ) => "2",
				esc_html__( "March", 'pitch' ) => "3",
				esc_html__( "April", 'pitch' ) => "4",
				esc_html__( "May", 'pitch' ) => "5",
				esc_html__( "June", 'pitch' ) => "6",
				esc_html__( "July", 'pitch' ) => "7",
				esc_html__( "August", 'pitch' ) => "8",
				esc_html__( "September", 'pitch' ) => "9",
				esc_html__( "October", 'pitch' ) => "10",
				esc_html__( "November", 'pitch' ) => "11",
				esc_html__( "December", 'pitch' ) => "12"
			),
            'save_always' => true
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Day", 'pitch' ),
			"param_name" => "day",
			"value" => array(
				"" => "",
				"1" => "1",
				"2" => "2",
				"3" => "3",
				"4" => "4",
				"5" => "5",
				"6" => "6",
				"7" => "7",
				"8" => "8",
				"9" => "9",
				"10" => "10",
				"11" => "11",
				"12" => "12",
				"13" => "13",
				"14" => "14",
				"15" => "15",
				"16" => "16",
				"17" => "17",
				"18" => "18",
				"19" => "19",
				"20" => "20",
				"21" => "21",
				"22" => "22",
				"23" => "23",
				"24" => "24",
				"25" => "25",
				"26" => "26",
				"27" => "27",
				"28" => "28",
				"29" => "29",
				"30" => "30",
				"31" => "31",
			),
            'save_always' => true
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Hour", 'pitch' ),
			"param_name" => "hour",
			"value" => array(
				"" => "",
				"0" => "0",
				"1" => "1",
				"2" => "2",
				"3" => "3",
				"4" => "4",
				"5" => "5",
				"6" => "6",
				"7" => "7",
				"8" => "8",
				"9" => "9",
				"10" => "10",
				"11" => "11",
				"12" => "12",
				"13" => "13",
				"14" => "14",
				"15" => "15",
				"16" => "16",
				"17" => "17",
				"18" => "18",
				"19" => "19",
				"20" => "20",
				"21" => "21",
				"22" => "22",
				"23" => "23",
				"24" => "24"
			),
            'save_always' => true
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Minute", 'pitch' ),
			"param_name" => "minute",
			"value" => array(
				"" => "",
				"0" => "0",
				"1" => "1",
				"2" => "2",
				"3" => "3",
				"4" => "4",
				"5" => "5",
				"6" => "6",
				"7" => "7",
				"8" => "8",
				"9" => "9",
				"10" => "10",
				"11" => "11",
				"12" => "12",
				"13" => "13",
				"14" => "14",
				"15" => "15",
				"16" => "16",
				"17" => "17",
				"18" => "18",
				"19" => "19",
				"20" => "20",
				"21" => "21",
				"22" => "22",
				"23" => "23",
				"24" => "24",
				"25" => "25",
				"26" => "26",
				"27" => "27",
				"28" => "28",
				"29" => "29",
				"30" => "30",
				"31" => "31",
				"32" => "32",
				"33" => "33",
				"34" => "34",
				"35" => "35",
				"36" => "36",
				"37" => "37",
				"38" => "38",
				"39" => "39",
				"40" => "40",
				"41" => "41",
				"42" => "42",
				"43" => "43",
				"44" => "44",
				"45" => "45",
				"46" => "46",
				"47" => "47",
				"48" => "48",
				"49" => "49",
				"50" => "50",
				"51" => "51",
				"52" => "52",
				"53" => "53",
				"54" => "54",
				"55" => "55",
				"56" => "56",
				"57" => "57",
				"58" => "58",
				"59" => "59",
				"60" => "60",
			),
            'save_always' => true
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Month Label", 'pitch' ),
			"param_name" => "month_label"
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Day Label", 'pitch' ),
			"param_name" => "day_label"
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Hour Label", 'pitch' ),
			"param_name" => "hour_label"
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Minute Label", 'pitch' ),
			"param_name" => "minute_label"
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Second Label", 'pitch' ),
			"param_name" => "second_label"
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Month Singular Label", 'pitch' ),
			"param_name" => "month_singular_label"
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Day Singular Label", 'pitch' ),
			"param_name" => "day_singular_label"
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Hour Singular Label", 'pitch' ),
			"param_name" => "hour_singular_label"
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Minute Singular Label", 'pitch' ),
			"param_name" => "minute_singular_label"
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Second Singular Label", 'pitch' ),
			"param_name" => "second_singular_label"
		),
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Color", 'pitch' ),
			"param_name" => "color",
			"description" => esc_html__( "For digits, labels and separators", 'pitch' ),
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Digit Font Size (px)", 'pitch' ),
			"param_name" => "digit_font_size"
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Label Font Size (px)", 'pitch' ),
			"param_name" => "label_font_size"
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Font Weight", 'pitch' ),
			"param_name" => "font_weight",
			"description" => esc_html__( "For both digits and labels", 'pitch' ),
			"value" => array(
				esc_html__( "Default", 'pitch' ) => "",
				esc_html__( "Thin 100", 'pitch' ) => "100",
				esc_html__( "Extra-Light 200", 'pitch' ) => "200",
				esc_html__( "Light 300", 'pitch' ) => "300",
				esc_html__( "Regular 400", 'pitch' ) => "400",
				esc_html__( "Medium 500", 'pitch' ) => "500",
				esc_html__( "Semi-Bold 600", 'pitch' ) => "600",
				esc_html__( "Bold 700", 'pitch' ) => "700",
				esc_html__( "Extra-Bold 800", 'pitch' ) => "800",
				esc_html__( "Ultra-Bold 900", 'pitch' ) => "900"
			)
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Show separator", 'pitch' ),
			"param_name" => "show_separator",
			"value" => array(
				esc_html__( "No", 'pitch' ) => "hide_separator",
				esc_html__( "Yes", 'pitch' ) => "show_separator"
			),
			'save_always' => true
		),
	)
) );


/*** Pie Chart ***/

vc_map( array(
		"name" => esc_html__( "Pie Chart", 'pitch' ),
		"base" => "no_pie_chart",
		"icon" => "icon-wpb-pie-chart extended-custom-icon",
		"category" => esc_html__( 'by Select', 'pitch' ),
		"allowed_container_element" => 'vc_row',
		"params" => array(
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Size(px)", 'pitch' ),
                "param_name" => "size"
            ),
            array(
                "type" => "dropdown",
                "class" => "",
                "heading" => esc_html__( "Type of Central text", 'pitch' ),
                "param_name" => "type_of_central_text",
                "value" => array(
                    esc_html__( "Title", 'pitch' ) => "title",
                    esc_html__( "Percent", 'pitch' ) => "percent"
                ),
				'save_always' => true
            ),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Percentage", 'pitch' ),
				"param_name" => "percent"
			),
			array(
				"type" => "dropdown",
				"class" => "",
				"heading" => esc_html__( "Show Percentage Mark", 'pitch' ),
				"param_name" => "show_percent_mark",
				"value" => array(
					esc_html__( "Yes", 'pitch' ) => "with_mark",
					esc_html__( "No", 'pitch' ) => "without_mark"
				),
				'save_always' => true,
				"dependency" => Array('element' => "percent", 'not_empty' => true)
            ),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Percentage Color", 'pitch' ),
				"param_name" => "percentage_color",
				"dependency" => Array('element' => "percent", 'not_empty' => true)
			),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Percentage Font", 'pitch' ),
                "param_name" => "percent_font_family",
                "dependency" => Array('element' => "percent", 'not_empty' => true)
            ),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Percentage Font Size", 'pitch' ),
				"param_name" => "percent_font_size",
				"dependency" => Array('element' => "percent", 'not_empty' => true)
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Percentage Font weight", 'pitch' ),
				"param_name" => "percent_font_weight",
				"value" => array(
					esc_html__( "Default", 'pitch' ) => "",
					esc_html__( "Thin 100", 'pitch' ) => "100",
					esc_html__( "Extra-Light 200", 'pitch' ) => "200",
					esc_html__( "Light 300", 'pitch' ) => "300",
					esc_html__( "Regular 400", 'pitch' ) => "400",
					esc_html__( "Medium 500", 'pitch' ) => "500",
					esc_html__( "Semi-Bold 600", 'pitch' ) => "600",
					esc_html__( "Bold 700", 'pitch' ) => "700",
					esc_html__( "Extra-Bold 800", 'pitch' ) => "800",
					esc_html__( "Ultra-Bold 900", 'pitch' ) => "900"
				),
				"dependency" => Array('element' => "percent", 'not_empty' => true)
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Bar Active Color", 'pitch' ),
				"param_name" => "active_color"
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Bar Inactive Color", 'pitch' ),
				"param_name" => "noactive_color"
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Pie Chart Line Width (px)", 'pitch' ),
				"param_name" => "line_width"
			),
            array(
                "type" => "dropdown",
                "class" => "",
                "heading" => esc_html__( "Chart Alignment", 'pitch' ),
                "param_name" => "chart_alignment",
                "value" => array(
                    esc_html__( "Center", 'pitch' ) => "",
                    esc_html__( "Left", 'pitch' ) => "left",
                    esc_html__( "Right", 'pitch' ) => "right"
                )
            ),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Margin below chart (px)", 'pitch' ),
                "param_name" => "margin_below_chart"
            ),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Title", 'pitch' ),
				"param_name" => "title"
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Title Color", 'pitch' ),
				"param_name" => "title_color"
			),
            array(
				"type" => "dropdown",
				"class" => "",
				"heading" => esc_html__( "Title Tag", 'pitch' ),
				"param_name" => "title_tag",
				"value" => array(
                    ""   => "",
					esc_html__( "h2", 'pitch' ) => "h2",
					esc_html__( "h3", 'pitch' ) => "h3",
					esc_html__( "h4", 'pitch' ) => "h4",
					esc_html__( "h5", 'pitch' ) => "h5",
					esc_html__( "h6", 'pitch' ) => "h6",
				)
            ),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Text", 'pitch' ),
				"param_name" => "text"
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Text Color", 'pitch' ),
				"param_name" => "text_color"
			),
            array(
                "type" => "dropdown",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Separator", 'pitch' ),
                "param_name" => "separator",
                "value" => array(
                    esc_html__( "Yes", 'pitch' ) => "yes",
                    esc_html__( "No", 'pitch' ) => "no"
                ),
				'save_always' => true
            ),
            array(
                "type" => "colorpicker",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Separator Color", 'pitch' ),
                "param_name" => "separator_color",
                "dependency" => array('element' => "separator", 'value' => array('yes'))
            ),
            array(
                "type" => "dropdown",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Separator Border Style", 'pitch' ),
                "param_name" => "separator_border_style",
                "value" => array(
                    "" => "",
                    esc_html__( "Dashed", 'pitch' ) => "dashed",
                    esc_html__( "Solid", 'pitch' ) => "solid"
                ),
                "dependency" => array('element' => "separator", 'value' => array('yes'))
            ),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Separator Width (px)", 'pitch' ),
				"param_name" => "separator_width",
				"dependency" => array('element' => "separator", 'value' => array('yes'))
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Separator Thickness (px)", 'pitch' ),
				"param_name" => "separator_thickness",
				"dependency" => array('element' => "separator", 'value' => array('yes'))
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Separator Margin Top (px)", 'pitch' ),
				"param_name" => "separator_margin_top",
				"dependency" => array('element' => "separator", 'value' => array('yes'))
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Separator Margin Bottom (px)", 'pitch' ),
				"param_name" => "separator_margin_bottom",
				"dependency" => array('element' => "separator", 'value' => array('yes'))
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Show Outer Border", 'pitch' ),
				"param_name" => "outer_border",
				"value" => array(
					esc_html__( "No", 'pitch' ) => "no",
					esc_html__( "Yes", 'pitch' ) => "yes"
				),
				'save_always' => true
			)
		)
) );


/*** Pie Chart 2 (Pie) ***/

vc_map( array(
		"name" => esc_html__( "Pie Chart 2 (Pie)", 'pitch' ),
		"base" => "no_pie_chart2",
		"icon" => "icon-wpb-pie-chart2 extended-custom-icon",
		"category" => esc_html__( 'by Select', 'pitch' ),
		"allowed_container_element" => 'vc_row',
		"params" => array(
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Width", 'pitch' ),
				"param_name" => "width"
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Height", 'pitch' ),
				"param_name" => "height"
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Legend Text Color", 'pitch' ),
				"param_name" => "color"
			),
			array(
				"type" => "textarea_html",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Content", 'pitch' ),
				"param_name" => "content",
				"value" => "15,#b1dbfe,Legend One; 35,#7bc3fd,Legend Two; 50,#279eff,Legend Three"
			)

		)
) );


/*** Pie Chart 3 (Doughnut) ***/

vc_map( array(
		"name" => esc_html__( "Pie Chart 3 (Doughnut)", 'pitch' ),
		"base" => "no_pie_chart3",
		"category" => esc_html__( 'by Select', 'pitch' ),
		"icon" => "icon-wpb-pie-chart3 extended-custom-icon",
		"allowed_container_element" => 'vc_row',
		"params" => array(
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Width", 'pitch' ),
				"param_name" => "width"
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Height", 'pitch' ),
				"param_name" => "height"
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Legend Text Color", 'pitch' ),
				"param_name" => "color"
			),
			array(
				"type" => "textarea_html",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Content", 'pitch' ),
				"param_name" => "content",
				"value" => "15,#b1dbfe,Legend One; 35,#7bc3fd,Legend Two; 50,#279eff,Legend Three"
			)

		)
) );


/*** Pie Chart With Icon ***/

vc_map( array(
	"name" => esc_html__( "Pie Chart With Icon", 'pitch' ),
	"base" => "no_pie_chart_with_icon",
	"icon" => "icon-wpb-pie-chart-with-icon extended-custom-icon",
	"category" => esc_html__( 'by Select', 'pitch' ),
	"allowed_container_element" => 'vc_row',
	"params" => array_merge(
		array(
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Size(px)", 'pitch' ),
				"param_name" => "size"
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Percentage", 'pitch' ),
				"param_name" => "percent"
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Bar Active Color", 'pitch' ),
				"param_name" => "active_color"
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Bar Inactive Color", 'pitch' ),
				"param_name" => "noactive_color"
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Pie Chart Line Width (px)", 'pitch' ),
				"param_name" => "line_width"
			),
			array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Margin below chart (px)", 'pitch' ),
                "param_name" => "margin_below_chart"
            ),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Title", 'pitch' ),
				"param_name" => "title"
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Title Color", 'pitch' ),
				"param_name" => "title_color",
				"dependency" => array('element' => "title", 'not_empty' => true)
			),
			array(
				"type" => "dropdown",
				"class" => "",
				"heading" => esc_html__( "Title Tag", 'pitch' ),
				"param_name" => "title_tag",
				"value" => array(
					""   => "",
					esc_html__( "h2", 'pitch' ) => "h2",
					esc_html__( "h3", 'pitch' ) => "h3",
					esc_html__( "h4", 'pitch' ) => "h4",
					esc_html__( "h5", 'pitch' ) => "h5",
					esc_html__( "h6", 'pitch' ) => "h6",
				),
				"dependency" => array('element' => "title", 'not_empty' => true)
			),
		),
		pitch_qode_icon_collections()->getVCParamsArray(),
		array(
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Icon Color", 'pitch' ),
				"param_name" => "icon_color",
				"dependency" => Array('element' => "icon_pack", 'value' => pitch_qode_icon_collections()->getIconCollectionsKeys())
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Custom Icon Size (px)", 'pitch' ),
				"param_name" => "icon_custom_size",
				"dependency" => Array('element' => "icon_pack", 'value' => pitch_qode_icon_collections()->getIconCollectionsKeys())
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Icon Size", 'pitch' ),
				"param_name" => "icon_size",
				"value" => pitch_qode_icon_collections()->getIconSizesArray(),
				'save_always' => true
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Text", 'pitch' ),
				"param_name" => "text"
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Text Color", 'pitch' ),
				"param_name" => "text_color",
				"dependency" => array('element' => "text", 'not_empty' => true)
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Separator", 'pitch' ),
				"param_name" => "separator",
				"value" => array(
					esc_html__( "Yes", 'pitch' ) => "yes",
					esc_html__( "No", 'pitch' ) => "no"
				),
				'save_always' => true
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Separator Color", 'pitch' ),
				"param_name" => "separator_color",
				"dependency" => array('element' => "separator", 'value' => array('yes'))
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Separator Border Style", 'pitch' ),
				"param_name" => "separator_border_style",
				"value" => array(
					"" => "",
					esc_html__( "Dashed", 'pitch' ) => "dashed",
					esc_html__( "Solid", 'pitch' ) => "solid"
				),
				"dependency" => array('element' => "separator", 'value' => array('yes'))
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Separator Width (px)", 'pitch' ),
				"param_name" => "separator_width",
				"dependency" => array('element' => "separator", 'value' => array('yes'))
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Separator Thickness (px)", 'pitch' ),
				"param_name" => "separator_thickness",
				"dependency" => array('element' => "separator", 'value' => array('yes'))
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Separator Margin Top (px)", 'pitch' ),
				"param_name" => "separator_margin_top",
				"dependency" => array('element' => "separator", 'value' => array('yes'))
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Separator Margin Bottom (px)", 'pitch' ),
				"param_name" => "separator_margin_bottom",
				"dependency" => array('element' => "separator", 'value' => array('yes'))
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Show Outer Border", 'pitch' ),
				"param_name" => "outer_border",
				"value" => array(
					esc_html__( "No", 'pitch' ) => "no",
					esc_html__( "Yes", 'pitch' ) => "yes"
				),
				'save_always' => true
			)
		)
	)

) );


/** Horizontal progress bar shortcode ***/

vc_map( array(
		"name" => esc_html__( "Progress Bar - Horizontal", 'pitch' ),
		"base" => "no_progress_bar",
		"icon" => "icon-wpb-progress-bar extended-custom-icon",
		"category" => esc_html__( 'by Select', 'pitch' ),
		"allowed_container_element" => 'vc_row',
		"params" => array(
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Title", 'pitch' ),
				"param_name" => "title"
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Title Color", 'pitch' ),
				"param_name" => "title_color"
			),
            array(
				"type" => "dropdown",
				"class" => "",
				"heading" => esc_html__( "Title Tag", 'pitch' ),
				"param_name" => "title_tag",
				"value" => array(
                    ""   => "",
					esc_html__( "h2", 'pitch' ) => "h2",
					esc_html__( "h3", 'pitch' ) => "h3",
					esc_html__( "h4", 'pitch' ) => "h4",
					esc_html__( "h5", 'pitch' ) => "h5",
					esc_html__( "h6", 'pitch' ) => "h6",
				)
            ),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Title Custom Size (px)", 'pitch' ),
				"param_name" => "title_custom_size"
			),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Title Padding Bottom(px)", 'pitch' ),
                "param_name" => "title_padding_bottom"
            ),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Percentage", 'pitch' ),
				"param_name" => "percent"
			),
            array(
                "type" => "dropdown",
                "class" => "",
                "heading" => esc_html__( "Show Percentage Number", 'pitch' ),
                "param_name" => "show_percent_number",
                "value" => array(
                    esc_html__( "Yes", 'pitch' ) => "yes",
                    esc_html__( "No", 'pitch' ) => "no"
                ),
				'save_always' => true,
                "dependency" => Array('element' => "percent", 'not_empty' => true)
            ),
			array(
				"type" => "dropdown",
				"class" => "",
				"heading" => esc_html__( "Show Percentage Mark", 'pitch' ),
				"param_name" => "show_percent_mark",
				"value" => array(
					esc_html__( "Yes", 'pitch' ) => "with_mark",
					esc_html__( "No", 'pitch' ) => "without_mark"
				),
				'save_always' => true,
				"dependency" => Array('element' => "percent", 'not_empty' => true)
            ),
            array(
                "type" => "dropdown",
                "class" => "",
                "heading" => esc_html__( "Percentage Type", 'pitch' ),
                "param_name" => "percentage_type",
                "value" => array(
                    esc_html__( "Floating", 'pitch' ) => "floating",
                    esc_html__( "Static", 'pitch' ) => "static"
                ),
				'save_always' => true,
                "dependency" => Array('element' => "percent", 'not_empty' => true)
            ),
			array(
				"type" => "textfield",
				"class" => "",
				"heading" => esc_html__( "Percentage Bar Margin Bottom (px)", 'pitch' ),
				"param_name" => "percentage_bar_margin_bottom",
				"dependency" => array('element' => "percent", 'not_empty' => true)
			),
			array(
				"type" => "textfield",
				"class" => "",
				"heading" => esc_html__( "Percentage Bar Height (px)", 'pitch' ),
				"param_name" => "percentage_bar_height",
				"dependency" => array('element' => "percentage_type", 'value' => array('floating'))
			),
			array(
				"type" => "dropdown",
				"class" => "",
				"heading" => esc_html__( "Floating Type", 'pitch' ),
				"param_name" => "floating_type",
				"value" => array(
					esc_html__( "Outside Floating", 'pitch' ) => "floating_outside",
					esc_html__( "Inside Floating", 'pitch' ) => "floating_inside"
				),
				'save_always' => true,
				"dependency" => array('element' => "percentage_type", 'value' => array('floating'))
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Percentage Color", 'pitch' ),
				"param_name" => "percent_color",
				"dependency" => Array('element' => "percent", 'not_empty' => true)
			),
            array(
                "type" => "colorpicker",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Percentage Background Color", 'pitch' ),
                "param_name" => "percent_background_color",
                "dependency" => Array('element' => "percent", 'not_empty' => true)
            ),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Percentage Border Radius (px)", 'pitch' ),
                "param_name" => "percent_border_radius",
                "dependency" => Array('element' => "percent", 'not_empty' => true)
            ),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Percentage Font Size", 'pitch' ),
				"param_name" => "percent_font_size",
				"dependency" => Array('element' => "percent", 'not_empty' => true)
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Percentage Font weight", 'pitch' ),
				"param_name" => "percent_font_weight",
				"value" => array(
					esc_html__( "Default", 'pitch' ) => "",
					esc_html__( "Thin 100", 'pitch' ) => "100",
					esc_html__( "Extra-Light 200", 'pitch' ) => "200",
					esc_html__( "Light 300", 'pitch' ) => "300",
					esc_html__( "Regular 400", 'pitch' ) => "400",
					esc_html__( "Medium 500", 'pitch' ) => "500",
					esc_html__( "Semi-Bold 600", 'pitch' ) => "600",
					esc_html__( "Bold 700", 'pitch' ) => "700",
					esc_html__( "Extra-Bold 800", 'pitch' ) => "800",
					esc_html__( "Ultra-Bold 900", 'pitch' ) => "900"
				),
				"dependency" => Array('element' => "percent", 'not_empty' => true)
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Active Background Color", 'pitch' ),
				"param_name" => "active_background_color"
			),
            array(
                "type" => "colorpicker",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Active Background Second Color", 'pitch' ),
                "param_name" => "active_background_second_color",
                "description" => esc_html__( "If this color is set, progress bar background will be in gradient. Note: IE9 and earlier versions do not support gradients", 'pitch' ),
                "dependency" => Array('element' => "active_background_color", 'not_empty' => true)
            ),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Active Border Color", 'pitch' ),
				"param_name" => "active_border_color"
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Inactive Background Color", 'pitch' ),
				"param_name" => "noactive_background_color"
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Progress Bar Height (px)", 'pitch' ),
				"param_name" => "height"
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Progress Bar Border Radius)", 'pitch' ),
				"param_name" => "border_radius"
			)
		)
) );


/*** Vertical progress bar shortcode ***/

vc_map( array(
		"name" => esc_html__( "Progress Bar - Vertical", 'pitch' ),
		"base" => "no_progress_bar_vertical",
		"icon" => "icon-wpb-vertical-progress-bar extended-custom-icon",
		"category" => esc_html__( 'by Select', 'pitch' ),
		"allowed_container_element" => 'vc_row',
		"params" => array(
            array (
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Title", 'pitch' ),
				"param_name" => "title"
			),
            array (
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Title Color", 'pitch' ),
				"param_name" => "title_color"
			),
            array(
				"type" => "dropdown",
				"class" => "",
				"heading" => esc_html__( "Title Tag", 'pitch' ),
				"param_name" => "title_tag",
				"value" => array(
                    ""   => "",
					esc_html__( "h2", 'pitch' ) => "h2",
					esc_html__( "h3", 'pitch' ) => "h3",
					esc_html__( "h4", 'pitch' ) => "h4",
					esc_html__( "h5", 'pitch' ) => "h5",
					esc_html__( "h6", 'pitch' ) => "h6",
				)
            ),
            array (
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Title Size", 'pitch' ),
				"param_name" => "title_size"
			),
			 array (
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Progress Bar Height(px)", 'pitch' ),
				"param_name" => "bar_content_height",
				"description" => esc_html__( "Default value is 190px", 'pitch' )
			),
            array (
                "type" => "colorpicker",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Bar Color", 'pitch' ),
                "param_name" => "bar_color"
            ),
            array (
                "type" => "colorpicker",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Bar Border Color", 'pitch' ),
                "param_name" => "bar_border_color"
            ),
			array (
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Background Color", 'pitch' ),
				"param_name" => "background_color"
			),
			array (
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Top Border Radius", 'pitch' ),
				"param_name" => "border_radius"
			),
            array (
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Percent", 'pitch' ),
				"param_name" => "percent"
			),
            array(
                "type" => "dropdown",
                "class" => "",
                "heading" => esc_html__( "Show Percentage Number", 'pitch' ),
                "param_name" => "show_percent_number",
                "value" => array(
                    esc_html__( "Yes", 'pitch' ) => "yes",
                    esc_html__( "No", 'pitch' ) => "no"
                ),
				'save_always' => true,
                "dependency" => Array('element' => "percent", 'not_empty' => true)
            ),
			array(
				"type" => "dropdown",
				"class" => "",
				"heading" => esc_html__( "Show Percentage Mark", 'pitch' ),
				"param_name" => "show_percent_mark",
				"value" => array(
					esc_html__( "Yes", 'pitch' ) => "with_mark",
					esc_html__( "No", 'pitch' ) => "without_mark"
				),
				'save_always' => true,
				"dependency" => Array('element' => "percent", 'not_empty' => true)
            ),
            array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Percentage Text Size", 'pitch' ),
				"param_name" => "percentage_text_size",
				"dependency" => Array('element' => "percent", 'not_empty' => true)
			),
            array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Percentage Color", 'pitch' ),
				"param_name" => "percent_color",
				"dependency" => Array('element' => "percent", 'not_empty' => true)
			),
            array(
				"type" => "textarea",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Text", 'pitch' ),
				"param_name" => "text",
				"value" => ""
			),
            array (
                "type" => "colorpicker",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Text Color", 'pitch' ),
                "param_name" => "text_color",
                "dependency" => Array('element' => "text", 'not_empty' => true)
            )
		)
) );


/*** Progress Bar Icon ***/

vc_map( array(
	"name" => esc_html__( "Progress Bar - Icon", 'pitch' ),
	"base" => "no_progress_bar_icon",
	"icon" => "icon-wpb-progress-bar-icon extended-custom-icon",
	"category" => esc_html__( 'by Select', 'pitch' ),
	"allowed_container_element" => 'vc_row',
	"params" => array_merge(
                array(
                    array(
                        "type" => "textfield",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Number of Icons", 'pitch' ),
                        "param_name" => "icons_number"
                    ),
                    array(
                        "type" => "textfield",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Number of Active Icons", 'pitch' ),
                        "param_name" => "active_number"
                    )
                ),
                pitch_qode_icon_collections()->getVCParamsArray(),
                array(
                    array(
                        "type" => "dropdown",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Size", 'pitch' ),
                        "param_name" => "size",
                        "value" => array(
                            esc_html__( "Tiny", 'pitch' ) => "tiny",
                            esc_html__( "Small", 'pitch' ) => "small",
                            esc_html__( "Medium", 'pitch' ) => "medium",
                            esc_html__( "Large", 'pitch' ) => "large",
                            esc_html__( "Very Large", 'pitch' ) => "very_large",
                            esc_html__( "Custom", 'pitch' ) => "custom"
                        ),
						'save_always' => true,
                    ),
                    array(
                        "type" => "textfield",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Custom Size (px)", 'pitch' ),
                        "param_name" => "custom_size",
                        "value" => "",
                        "dependency" => array('element' => 'size', 'value' => array('custom'))
                    ),
                    array(
                        "type" => "dropdown",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Type", 'pitch' ),
                        "param_name" => "type",
                        "value" => array(
                            esc_html__( "Normal", 'pitch' ) => "normal",
                            esc_html__( "Circle", 'pitch' ) => "circle",
                            esc_html__( "Square", 'pitch' ) => "square"
                        ),
						'save_always' => true,
                        "dependency" => array('element' => 'size', 'value' => array('tiny','small','medium','large','very_large'))
                    ),
                    array(
                        "type" => "colorpicker",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Icon Color", 'pitch' ),
                        "param_name" => "icon_color"
                    ),
                    array(
                        "type" => "colorpicker",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Icon Active Color", 'pitch' ),
                        "param_name" => "icon_active_color"
                    ),
                    array(
                        "type" => "colorpicker",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Background Color", 'pitch' ),
                        "param_name" => "background_color",
                        "dependency" => array('element' => "type", 'value' => array('square', 'circle'))
                    ),
                    array(
                        "type" => "colorpicker",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Background Active Color", 'pitch' ),
                        "param_name" => "background_active_color",
                        "dependency" => array('element' => "type", 'value' => array('square', 'circle'))
                    ),
                    array(
                        "type" => "colorpicker",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Border Color", 'pitch' ),
                        "param_name" => "border_color",
                        "description" => esc_html__( "Only for Square and Circle type", 'pitch' ),
                        "dependency" => array('element' => "type", 'value' => array('square', 'circle'))
                    ),
                    array(
                        "type" => "colorpicker",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Border Active Color", 'pitch' ),
                        "param_name" => "border_active_color",
                        "description" => esc_html__( "Only for Square and Circle type", 'pitch' ),
                        "dependency" => array('element' => "type", 'value' => array('square', 'circle'))
                    )
                )
            )
) );


/*** Line Graph shortcode ***/

vc_map( array(
		"name" => esc_html__( "Line Graph", 'pitch' ),
		"base" => "no_line_graph",
		"icon" => "icon-wpb-line-graph extended-custom-icon",
		"category" => esc_html__( 'by Select', 'pitch' ),
		"allowed_container_element" => 'vc_row',
		"params" => array(
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Type", 'pitch' ),
				"param_name" => "type",
				"value" => array(
					"" => "",
					esc_html__( "Rounded edges", 'pitch' ) => "rounded",
					esc_html__( "Sharp edges", 'pitch' ) => "sharp"
				)
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Width", 'pitch' ),
				"param_name" => "width"
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Height", 'pitch' ),
				"param_name" => "height"
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Custom Color", 'pitch' ),
				"param_name" => "custom_color"
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Scale steps", 'pitch' ),
				"param_name" => "scale_steps"
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Scale step width", 'pitch' ),
				"param_name" => "scale_step_width"
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Labels", 'pitch' ),
				"param_name" => "labels",
				"value" => "Label 1, Label 2, Label 3"
			),
			array(
				"type" => "textarea_html",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Content", 'pitch' ),
				"param_name" => "content",
				"value" => "#279eff,Legend One,1,5,10;#7dc5ff,Legend Two,3,7,20;#bee2ff,Legend Three,10,2,34"
			)
		)
) );


/*** Ordered List ***/

vc_map( array(
		"name" => esc_html__( "List - Ordered", 'pitch' ),
		"base" => "no_ordered_list",
		"icon" => "icon-wpb-ordered-list extended-custom-icon",
		"category" => esc_html__( 'by Select', 'pitch' ),
		"allowed_container_element" => 'vc_row',
		"params" => array(
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Show Separator", 'pitch' ),
				"param_name" => "show_separator",
				"value" => array(
					esc_html__( "No", 'pitch' ) => "no",
					esc_html__( "Yes", 'pitch' ) => "yes"
				),
				'save_always' => true
			),
			array(
				"type" => "textarea_html",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Content", 'pitch' ),
				"param_name" => "content",
				"value" => "<ol><li>Lorem Ipsum</li><li>Lorem Ipsum</li><li>Lorem Ipsum</li></ol>"
			)

		)
) );


/*** Unordered List ***/

vc_map( array(
		"name" => esc_html__( "List - Unordered", 'pitch' ),
		"base" => "no_unordered_list",
		"icon" => "icon-wpb-unordered-list extended-custom-icon",
		"category" => esc_html__( 'by Select', 'pitch' ),
		"allowed_container_element" => 'vc_row',
		"params" => array(
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Style", 'pitch' ),
				"param_name" => "style",
				"value" => array(
					esc_html__( "Circle", 'pitch' ) => "circle",
					esc_html__( "Number", 'pitch' ) => "number",
					esc_html__( "Line", 'pitch' ) => "line"
				),
				'save_always' => true
			),
            array(
                "type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Number Type", 'pitch' ),
				"param_name" => "number_type",
				"value" => array(
					esc_html__( "Circle", 'pitch' ) => "circle_number",
					esc_html__( "Transparent", 'pitch' ) => "transparent_number"
				),
				'save_always' => true,
                "dependency" => array('element' => "style", 'value' => array('number'))
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Animate List", 'pitch' ),
				"param_name" => "animate",
				"value" => array(
					esc_html__( "No", 'pitch' ) => "no",
					esc_html__( "Yes", 'pitch' ) => "yes"
				),
				'save_always' => true
			),
            array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Font Weight", 'pitch' ),
				"param_name" => "font_weight",
				"value" => array(
                    esc_html__( "Default", 'pitch' ) => "",
					esc_html__( "Light", 'pitch' ) => "light",
					esc_html__( "Normal", 'pitch' ) => "normal",
                    esc_html__( "Bold", 'pitch' ) => "bold"
				)
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Padding left (px)", 'pitch' ),
				"param_name" => "padding_left",
				"value" => ""
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Show Separator", 'pitch' ),
				"param_name" => "show_separator",
				"value" => array(
					esc_html__( "No", 'pitch' ) => "no",
					esc_html__( "Yes", 'pitch' ) => "yes"
				),
				'save_always' => true
			),
			array(
				"type" => "textarea_html",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Content", 'pitch' ),
				"param_name" => "content",
				"value" => "<ul><li>Lorem Ipsum</li><li>Lorem Ipsum</li><li>Lorem Ipsum</li></ul>"
			)
		)
) );


/*** Icon List Item ***/

vc_map( array(
	"name" => esc_html__( "Icon List Item", 'pitch' ),
	"base" => "no_icon_list_item",
	"icon" => "icon-wpb-icon-list-item extended-custom-icon",
	"category" => esc_html__( 'by Select', 'pitch' ),
	"params" => array_merge(
		pitch_qode_icon_collections()->getVCParamsArray(),
		array(
			array(
				"type" => "dropdown",
				"class" => "",
				"heading" => esc_html__( "Icon Type", 'pitch' ),
				"param_name" => "icon_type",
				"value" => array(
					esc_html__( "Normal", 'pitch' ) => "normal_icon_list",
					esc_html__( "Small", 'pitch' ) => "small_icon_list"
				),
				'save_always' => true
			),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Icon Size (px)", 'pitch' ),
                "param_name" => "icon_size"
            ),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Icon Color", 'pitch' ),
				"param_name" => "icon_color"
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Icon Margin Right (px)", 'pitch' ),
				"param_name" => "icon_margin_right"
			),
			array(
				"type" => "dropdown",
				"class" => "",
				"heading" => esc_html__( "Border Type", 'pitch' ),
				"param_name" => "border_type",
				"value" => array(
					"" => "",
					esc_html__( "Circle", 'pitch' ) => "circle",
					esc_html__( "Square", 'pitch' ) => "square"
				)
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Border Color", 'pitch' ),
				"param_name" => "border_color"
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Title", 'pitch' ),
				"param_name" => "title"
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Title Color", 'pitch' ),
				"param_name" => "title_color",
                "dependency" => Array('element' => "title", 'not_empty' => true)
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Title size (px)", 'pitch' ),
				"param_name" => "title_size",
                "dependency" => Array('element' => "title", 'not_empty' => true)
			),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Title Font Family", 'pitch' ),
                "param_name" => "title_font_family",
                "dependency" => Array('element' => "title", 'not_empty' => true)
            ),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Title Font Weight (px)", 'pitch' ),
				"param_name" => "title_font_weight",
				"value" => $font_weight_array,
				'save_always' => true,
                "dependency" => Array('element' => "title", 'not_empty' => true)
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Bottom Margin (px)", 'pitch' ),
				"param_name" => "bottom_margin"
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Show Separator", 'pitch' ),
				"param_name" => "show_separator",
				"value" => array(
					esc_html__( "No", 'pitch' ) => "no",
					esc_html__( "Yes", 'pitch' ) => "yes"
				),
				'save_always' => true
			)
		)
	)
) );


/*** Icon Shortcode ***/

vc_map( array(
	"name" => esc_html__( "Icon", 'pitch' ),
	"base" => "no_icons",
	"category" => esc_html__( 'by Select', 'pitch' ),
	"icon" => "icon-wpb-icons extended-custom-icon",
	"allowed_container_element" => 'vc_row',
	"params" => array_merge(
		pitch_qode_icon_collections()->getVCParamsArray(),
		array(
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Size", 'pitch' ),
				"param_name" => 'fa_size',
				"value" => pitch_qode_icon_collections()->getIconSizesArray(),
				'save_always' => true
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Custom Size (px)", 'pitch' ),
				"param_name" => "custom_size",
				"value" => ""
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Type", 'pitch' ),
				"param_name" => "type",
				"value" => array(
					esc_html__( "Normal", 'pitch' ) => "normal",
					esc_html__( "Circle", 'pitch' ) => "circle",
					esc_html__( "Square", 'pitch' ) => "square"
				),
				'save_always' => true
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Rotated Shape", 'pitch' ),
				"param_name" => "rotated_shape",
				"value" => array(
					esc_html__( "No", 'pitch' ) => "no",
					esc_html__( "Yes", 'pitch' ) => "yes"
				),
				'save_always' => true,
				"dependency" => Array('element' => "type", 'value' => "square")
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Border radius", 'pitch' ),
				"param_name" => "border_radius",
				"description" => esc_html__( "Please insert border radius(Rounded corners) in px. For example: 4", 'pitch' ),
				"dependency" => Array('element' => "type", 'value' => array('circle','square'))
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Shape Size (px)", 'pitch' ),
				"param_name" => 'shape_size',
				"value" => "",
				"dependency" => Array('element' => "type", 'value' => array('circle','square'))
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Icon Color", 'pitch' ),
				"param_name" => "icon_color"
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Position", 'pitch' ),
				"param_name" => "position",
				"value" => array(
					esc_html__( "Normal", 'pitch' ) => "",
					esc_html__( "Left", 'pitch' ) => "left",
					esc_html__( "Center", 'pitch' ) => "center",
					esc_html__( "Right", 'pitch' ) => "right"
				)
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Border Color", 'pitch' ),
				"param_name" => "border_color",
				"dependency" => Array('element' => "type", 'value' => array('circle','square')),
				"description" => esc_html__( "Same color for Inner Border if enabled", 'pitch' )
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Border Width", 'pitch' ),
				"param_name" => "border_width",
				"description" => esc_html__( "Default value is 1. Enter just number. Omit pixels", 'pitch' ),
				"dependency" => Array('element' => "type", 'value' => array('circle','square'))
			),
			array(
				"type" => "attach_image",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Background Image", 'pitch' ),
				"param_name" => "background_image",
				"dependency" => Array('element' => "type", 'value' => array('circle','square'))
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Background Color", 'pitch' ),
				"param_name" => "background_color",
				"dependency" => Array('element' => "type", 'value' => array('circle','square'))
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Hover Icon Color", 'pitch' ),
				"param_name" => "hover_icon_color"
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Hover Border Color", 'pitch' ),
				"param_name" => "hover_border_color",
				"dependency" => Array('element' => "type", 'value' => array('circle','square'))
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Hover Background Color", 'pitch' ),
				"param_name" => "hover_background_color",
				"dependency" => Array('element' => "type", 'value' => array('circle','square'))
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Icon Shadow", 'pitch' ),
				"param_name" => "icon_shadow",
				"value" => array(
					esc_html__( "No", 'pitch' ) => "no",
					esc_html__( "Yes", 'pitch' ) => "yes"
				),
				'save_always' => true,
				"dependency" => Array('element' => "type", 'value' => array('circle','square'))
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Shadow Color", 'pitch' ),
				"param_name" => "shadow_color",
				"dependency" => Array('element' => "icon_shadow", 'value' => 'yes')
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Hover Shadow Color", 'pitch' ),
				"param_name" => "hover_shadow_color",
				"dependency" => Array('element' => "icon_shadow", 'value' => 'yes')
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Inner Border", 'pitch' ),
				"param_name" => "inner_border",
				"value" => array(
					esc_html__( "No", 'pitch' ) => "no",
					esc_html__( "Yes", 'pitch' ) => "yes"
				),
				'save_always' => true,
				"dependency" => Array('element' => "type", 'value' => array('circle','square'))
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Margin", 'pitch' ),
				"param_name" => "margin",
				"description" => esc_html__( "Margin (top right bottom left)", 'pitch' )
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Icon Animation", 'pitch' ),
				"param_name" => "icon_animation",
				"value" => array(
					esc_html__( "No", 'pitch' ) => "",
					esc_html__( "Yes", 'pitch' ) => "q_icon_animation"
				)
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Icon Hover Animation", 'pitch' ),
				"param_name" => "icon_hover_animation",
				"value" => array(
					esc_html__( "No Animation", 'pitch' ) => "no_animation",
					esc_html__( "Outline Scale Out", 'pitch' ) => "animation_border_out",
					esc_html__( "Outline Scale In", 'pitch' ) => "animation_border_in",
					esc_html__( "Scale In With Outline", 'pitch' ) => "scale_in_outline",
					esc_html__( "Outline Enlarge", 'pitch' ) => "outline_enlarge",
					esc_html__( "Pulse", 'pitch' ) => "pulse"
				),
				'save_always' => true,
				"dependency" => Array('element' => "type", 'value' => array('circle','square'))
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Outline Color", 'pitch' ),
				"param_name" => "outline_color",
				"dependency" => Array('element' => "icon_hover_animation", 'value' => array('animation_border_out','animation_border_in','scale_in_outline', 'pulse','outline_enlarge'))
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Icon Animation Delay (ms)", 'pitch' ),
				"param_name" => "icon_animation_delay",
				"value" => "",
				"dependency" => Array('element' => "icon_animation", 'value' => 'q_icon_animation')
			),
			array(
				"type" => "checkbox",
				"class" => "",
				"heading" => esc_html__( "Use For Back To Top", 'pitch' ),
				"value" => array("Use this icon as Back to Top button?" => "yes"),
				"param_name" => "back_to_top_icon"
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Link", 'pitch' ),
				"param_name" => "link",
				"value" => ""
			),
			array(
				"type" => "checkbox",
				"class" => "",
				"heading" => esc_html__( "Use Link as Anchor", 'pitch' ),
				"value" => array("Use this icon as Anchor?" => "yes"),
				"param_name" => "anchor_icon",
				"description" => esc_html__( "Check this box to use icon as anchor link (eg. #contact)", 'pitch' ),
				"dependency" => Array('element' => "link", 'not_empty' => true)
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Target", 'pitch' ),
				"param_name" => "target",
				"value" => array(
					esc_html__( "Self", 'pitch' ) => "_self",
					esc_html__( "Blank", 'pitch' ) => "_blank"
				),
				'save_always' => true,
				"dependency" => Array('element' => "link", 'not_empty' => true)
		))
	)
) );


/*** Icon with Text ***/

vc_map( array(
	"name" => esc_html__( "Icon With Text", 'pitch' ),
	"base" => "no_icon_text",
	"icon" => "icon-wpb-icon-with-text extended-custom-icon",
	"category" => esc_html__( 'by Select', 'pitch' ),
	"allowed_container_element" => 'vc_row',
	"params" => array_merge(
                array(
                    array(
                        "type" => "dropdown",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Box type", 'pitch' ),
                        "param_name" => "box_type",
                        "value" => array(
                            esc_html__( "Normal", 'pitch' ) => "normal",
                            esc_html__( "Icon in a box", 'pitch' ) => "icon_in_a_box"
                        ),
						'save_always' => true
                    ),
                    array(
                        "type" => "colorpicker",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Box Border Color", 'pitch' ),
                        "param_name" => "box_border_color",
                        "dependency" => Array('element' => "box_type", 'value' => array('icon_in_a_box'))
                    ),
                    array(
                        "type" => "colorpicker",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Box Background Color", 'pitch' ),
                        "param_name" => "box_background_color",
                        "dependency" => Array('element' => "box_type", 'value' => array('icon_in_a_box'))
                    )
                ),
                pitch_qode_icon_collections()->getVCParamsArray(),
                array(
                    array(
                        "type" => "attach_image",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Custom Icon", 'pitch' ),
                        "param_name" => "custom_icon"
                    ),
					array(
                        "type" => "attach_image",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Custom Hover Icon", 'pitch' ),
                        "param_name" => "custom_icon_hover",
						"dependency" => Array('element' => "custom_icon", 'not_empty' => true)
                    ),
                    array(
                        "type" => "dropdown",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Icon Type", 'pitch' ),
                        "param_name" => "icon_type",
                        "value" => array(
                            esc_html__( "Normal", 'pitch' ) => "normal",
                            esc_html__( "Circle", 'pitch' ) => "circle",
                            esc_html__( "Square", 'pitch' ) => "square"
                        ),
						'save_always' => true,
                        "description" => esc_html__( "This attribute does not work when Icon Position is Top. In This case Icon Type is Normal", 'pitch' ),
                    ),
                    array(
                        "type" => "textfield",
                        "class" => "",
                        "heading" => esc_html__( "Icon border width (px)", 'pitch' ),
                        "param_name" => "icon_border_width",
                        "description" => esc_html__( "Enter just number, omit pixels", 'pitch' ),
                        "dependency" => array('element' => 'icon_type' , 'value' => array('circle', 'square'))
                    ),
                    array(
                        "type" => "dropdown",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Icon Size / Icon Space From Text", 'pitch' ),
                        "param_name" => "icon_size",
                        "value" => pitch_qode_icon_collections()->getIconSizesArray(),
						'save_always' => true,
                        "description" => esc_html__( "This attribute does not work when Icon Position is Top", 'pitch' )
                    ),
                    array(
                        "type" => "textfield",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Custom Icon Size (px)", 'pitch' ),
                        "param_name" => "custom_icon_size",
                        "description" => esc_html__( "Default value is 30", 'pitch' ),
                        "dependency" => Array('element' => "icon_pack", 'value' => pitch_qode_icon_collections()->getIconCollectionsKeys())
                    ),
                    array(
                        "type" => "dropdown",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Icon Animation", 'pitch' ),
                        "param_name" => "icon_animation",
                        "value" => array(
                            esc_html__( "No", 'pitch' ) => "",
                            esc_html__( "Yes", 'pitch' ) => "q_icon_animation"
                        ),
                    ),
                    array(
                        "type" => "textfield",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Icon Animation Delay (ms)", 'pitch' ),
                        "param_name" => "icon_animation_delay",
                        "value" => "",
                        "dependency" => Array('element' => "icon_animation", 'value' => array('q_icon_animation'))
                    ),
                    array(
                        "type" => "dropdown",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Icon Animation on Hover", 'pitch' ),
                        "param_name" => "icon_animation_hover",
                        "value" => array(
                            esc_html__( "No", 'pitch' ) => "no",
                            esc_html__( "Zoom Icon", 'pitch' ) => "zoom"
                        ),
						'save_always' => true
                    ),
                    array(
                        "type" => "dropdown",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Icon Position", 'pitch' ),
                        "param_name" => "icon_position",
                        "value" => array(
                            esc_html__( "Top", 'pitch' ) => "top",
                            esc_html__( "Left", 'pitch' ) => "left",
                            esc_html__( "Left From Title", 'pitch' ) => "left_from_title",
                            esc_html__( "Right", 'pitch' ) => "right",
                            esc_html__( "Right From Title", 'pitch' ) => "right_from_title"
                        ),
						'save_always' => true,
                        "description" => esc_html__( "Icon Position (only for normal box type)", 'pitch' ),
                        "dependency" => Array('element' => "box_type", 'value' => array('normal'))
                    ),
                    array(
                        "type" => "textfield",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Icon Margin", 'pitch' ),
                        "param_name" => "icon_margin",
                        "value" => "",
                        "description" => esc_html__( "Margin should be set in a top right bottom left format", 'pitch' ),
                        "dependency" => array('element' => "box_type", 'value' => array('normal'))
                    ),
                    array(
                        "type" => "textfield",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Text Left Padding (px)", 'pitch' ),
                        "param_name" => "text_left_padding",
                        "description" => esc_html__( "Default value is 86. Only when Icon Position is Left", 'pitch' ),
                        "dependency" => Array('element' => "icon_position", 'value' => array('left'))
                    ),
                    array(
                        "type" => "textfield",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Text Right Padding (px)", 'pitch' ),
                        "param_name" => "text_right_padding",
                        "description" => esc_html__( "Default value is 86. Only when Icon Position is Right", 'pitch' ),
                        "dependency" => Array('element' => "icon_position", 'value' => array('right'))
                    ),
					array(
                        "type" => "textfield",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Shape Size (px)", 'pitch' ),
                        "param_name" => "shape_size"
                    ),
                    array(
                        "type" => "colorpicker",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Icon Border Color", 'pitch' ),
                        "param_name" => "icon_border_color",
                        "description" => esc_html__( "Only for Square and Circle type", 'pitch' ),
                        "dependency" => Array('element' => "icon_type", 'value' => array('square','circle'))
                    ),
                    array(
                        "type" => "colorpicker",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Icon Color", 'pitch' ),
                        "param_name" => "icon_color",
                    ),
                    array(
                        "type" => "colorpicker",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Icon Hover Color", 'pitch' ),
                        "param_name" => "icon_hover_color",
                    ),
                    array(
                        "type" => "colorpicker",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Icon Background Color", 'pitch' ),
                        "param_name" => "icon_background_color",
                        "description" => esc_html__( "Icon Background Color (only for square and circle icon type)", 'pitch' ),
                        "dependency" => Array('element' => "icon_type", 'value' => array('square','circle'))
                    ),
                    array(
                        "type" => "colorpicker",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Icon Hover Background Color", 'pitch' ),
                        "param_name" => "icon_hover_background_color",
                        "description" => esc_html__( "Icon Hover Background Color (only for square and circle icon type)", 'pitch' ),
                        "dependency" => Array('element' => "icon_type", 'value' => array('square','circle'))
                    ),
                    array(
                        "type" => "dropdown",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Separator", 'pitch' ),
                        "param_name" => "separator",
                        "value" => array(
                            esc_html__( "No", 'pitch' ) => "no",
                            esc_html__( "Yes", 'pitch' ) => "yes",
                        ),
						'save_always' => true
                    ),
                    array(
                        "type" => "colorpicker",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Separator Color", 'pitch' ),
                        "param_name" => "separator_color",
                        "dependency" => array('element' => "separator", 'value' => array("yes"))
                    ),
                    array(
                        "type" => "textfield",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Separator Thickness (px)", 'pitch' ),
                        "param_name" => "separator_thickness",
                        "dependency" => array('element' => "separator", 'value' => array("yes"))
                    ),
                    array(
                        "type" => "textfield",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Separator Size (px)", 'pitch' ),
                        "param_name" => "separator_width",
                        "dependency" => array('element' => "separator", 'value' => array("yes"))
                    ),
                    array(
                        "type" => "dropdown",
                        "class" => "",
                        "heading" => esc_html__( "Separator Alignment", 'pitch' ),
                        "param_name" => "separator_alignment",
                        "value" => array(
                            esc_html__( "Center", 'pitch' ) => "none",
                            esc_html__( "Left", 'pitch' ) => "left",
                            esc_html__( "Right", 'pitch' ) => "right",
                        ),
						'save_always' => true,
                        "dependency" => array('element' => "separator", 'value' => array("yes"))
                    ),
                    array(
                        "type" => "textfield",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Title", 'pitch' ),
                        "param_name" => "title",
                        "value" => ""
                    ),
                    array(
                        "type" => "dropdown",
                        "class" => "",
                        "heading" => esc_html__( "Title Tag", 'pitch' ),
                        "param_name" => "title_tag",
                        "value" => array(
                            ""   => "",
                            esc_html__( "h2", 'pitch' ) => "h2",
                            esc_html__( "h3", 'pitch' ) => "h3",
                            esc_html__( "h4", 'pitch' ) => "h4",
                            esc_html__( "h5", 'pitch' ) => "h5",
                            esc_html__( "h6", 'pitch' ) => "h6",
                        ),
                        "dependency" => Array('element' => "title", 'not_empty' => true)
                    ),
                    array(
                        "type" => "colorpicker",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Title Color", 'pitch' ),
                        "param_name" => "title_color",
                        "dependency" => Array('element' => "title", 'not_empty' => true)
                    ),
                    array(
                        "type" => "textfield",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Space Between title and text (px)", 'pitch' ),
                        "param_name" => "title_margin",
                        "value" => "",
                        "dependency" => Array('element' => "title", 'not_empty' => true)
                    ),
                    array(
                        "type" => "textfield",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Title Top Padding (px)", 'pitch' ),
                        "param_name" => "title_padding",
                        "value" => "",
                        "description" => esc_html__( "This attribute is used for boxed type", 'pitch' ),
                        "dependency" => Array('element' => "box_type", 'value' => array('icon_in_a_box'))
                    ),
                    array(
                        "type" => "textfield",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Text", 'pitch' ),
                        "param_name" => "text",
                        "value" => ""
                    ),
                    array(
                        "type" => "colorpicker",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Text Color", 'pitch' ),
                        "param_name" => "text_color",
                        "dependency" => Array('element' => "text", 'not_empty' => true)
                    ),
                    array(
                        "type" => "textfield",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Link", 'pitch' ),
                        "param_name" => "link",
                        "value" => "",
                        "dependency" => Array('element' => "box_type", 'value' => array('normal'))
                    ),
                    array(
                        "type" => "textfield",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Link Text", 'pitch' ),
                        "param_name" => "link_text",
                        "description" => esc_html__( "Default value is READ MORE", 'pitch' ),
                        "dependency" => Array('element' => "link", 'not_empty' => true)
                    ),
                    array(
                        "type" => "colorpicker",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Button Link Text Color", 'pitch' ),
                        "param_name" => "link_color",
                        "dependency" => Array('element' => "link_text", 'not_empty' => true)
                    ),
                    array(
                        "type" => "dropdown",
                        "class" => "",
                        "heading" => esc_html__( "Target", 'pitch' ),
                        "param_name" => "target",
                        "value" => array(
                            ""   => "",
                            esc_html__( "Self", 'pitch' ) => "_self",
                            esc_html__( "Blank", 'pitch' ) => "_blank"
                        ),
                        "dependency" => Array('element' => "link", 'not_empty' => true)
                    )
                )
            )
) );

/*** Separator with Icon ***/

vc_map( array(
	"name" => esc_html__( "Separator with Icon", 'pitch' ),
	"base" => "no_separator_with_icon",
	"category" => esc_html__( 'by Select', 'pitch' ),
	"icon" => "icon-wpb-separator-with-icon extended-custom-icon",
	"allowed_container_element" => 'vc_row',
	"params" => array_merge(
		array(
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Separator Line Style", 'pitch' ),
				"param_name" => "border_style",
				"value" => array(
					esc_html__( "Solid", 'pitch' ) => "solid",
					esc_html__( "Dashed", 'pitch' ) => "dashed",
					esc_html__( "Dotted", 'pitch' ) => "dotted",
					esc_html__( "Transparent", 'pitch' ) => "transparent"
				),
				'save_always' => true,
				"description" => esc_html__( "Choose a style for the separator line", 'pitch' )
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Line Color", 'pitch' ),
				"param_name" => "color",
				"value" => "",
				"description" => esc_html__( "Choose a color for the separator line", 'pitch' )
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Line Width (px)", 'pitch' ),
				"param_name" => "width",
				"value" => "",
				"description" => esc_html__( "Insert width for the separator line", 'pitch' )
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Line Thickness (px)", 'pitch' ),
				"param_name" => "thickness",
				"value" => "",
				"description" => esc_html__( "Insert thickness for the separator line", 'pitch' )
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Top Margin (px)", 'pitch' ),
				"param_name" => "up",
				"value" => "",
				"description" => esc_html__( "Insert top margin for the separator", 'pitch' )
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Bottom Margin (px)", 'pitch' ),
				"param_name" => "down",
				"value" => "",
				"description" => esc_html__( "Insert bottom margin for the separator", 'pitch' )
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Type", 'pitch' ),
				"param_name" => "type",
				"value" => array(
					esc_html__( "Default Icon", 'pitch' ) => "with_icon",
					esc_html__( "Custom Icon", 'pitch' ) => "with_custom_icon"
				),
				'save_always' => true,
				"description" => esc_html__( "Choose a style for the separator line", 'pitch' )
			),
		),
		pitch_qode_icon_collections()->getVCParamsArray(array('element' => "type", 'value' => array('with_icon'))),
		array(
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Icon Custom Size (px)", 'pitch' ),
				"param_name" => "icon_custom_size",
				"value" => "",
				"description" => esc_html__( "Insert size for the icon (default value is 20)", 'pitch' ),
				"dependency" => Array('element' => "type", 'value' => array('with_icon'))
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Icon Type", 'pitch' ),
				"param_name" => "icon_type",
				"value" => array(
					esc_html__( "Normal", 'pitch' ) => "normal",
					esc_html__( "Circle", 'pitch' ) => "circle",
					esc_html__( "Square", 'pitch' ) => "square"
				),
				'save_always' => true,
				"description" => esc_html__( "Choose icon type", 'pitch' ),
				"dependency" => Array('element' => "type", 'value' => array('with_icon'))
			),
			array(
				"type" => "attach_image",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Custom Icon", 'pitch' ),
				"param_name" => "custom_icon",
				"dependency" => Array('element' => "type", 'value' => array('with_custom_icon'))
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Icon Position", 'pitch' ),
				"param_name" => "separator_icon_position",
				"value" => array(
					esc_html__( "Center", 'pitch' ) => "center",
					esc_html__( "Left", 'pitch' ) => "left",
					esc_html__( "Right", 'pitch' ) => "right"
				),
				'save_always' => true,
				"description" => esc_html__( "Choose position of the icon", 'pitch' )
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Icon Margins", 'pitch' ),
				"param_name" => "icon_margin",
				"description" => esc_html__( "Insert left and right icon margins", 'pitch' )
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Icon Border radius", 'pitch' ),
				"param_name" => "icon_border_radius",
				"description" => esc_html__( "Insert border radius(Rounded corners) in px. For example: 4. Leave empty for default.", 'pitch' ),
				"dependency" => Array('element' => "icon_type", 'value' => array('circle','square'))
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Shape Size (px)", 'pitch' ),
				"param_name" => 'icon_shape_size',
				"value" => "",
				"description" => esc_html__( "Insert size for a shape around the icon", 'pitch' ),
				"dependency" => Array('element' => "icon_type", 'value' => array('circle','square'))
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Icon Color", 'pitch' ),
				"param_name" => "icon_color",
				"description" => esc_html__( "Choose a color for the icon", 'pitch' ),
				"dependency" => Array('element' => "type", 'value' => array('with_icon'))
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Border Color", 'pitch' ),
				"param_name" => "icon_border_color",
				"description" => esc_html__( "Choose a color for the border around the icon shape", 'pitch' ),
				"dependency" => Array('element' => "icon_type", 'value' => array('circle','square'))
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Icon Border Width", 'pitch' ),
				"param_name" => "icon_border_width",
				"description" => esc_html__( "Insert border width (just number, omit pixels)", 'pitch' ),
				"dependency" => Array('element' => "icon_type", 'value' => array('circle','square'))
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Icon Background Color", 'pitch' ),
				"param_name" => "icon_background_color",
				"description" => esc_html__( "Choose a background color for the icon shape", 'pitch' ),
				"dependency" => Array('element' => "icon_type", 'value' => array('circle','square'))
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Hover Icon Color", 'pitch' ),
				"param_name" => "hover_icon_color",
				"description" => esc_html__( "Choose a hover color for the icon", 'pitch' ),
				"dependency" => Array('element' => "type", 'value' => array('with_icon'))
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Icon Hover Border Color", 'pitch' ),
				"param_name" => "hover_icon_border_color",
				"description" => esc_html__( "Choose a hover color for the border around the icon shape", 'pitch' ),
				"dependency" => Array('element' => "icon_type", 'value' => array('circle','square'))
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Icon Hover Background Color", 'pitch' ),
				"param_name" => "hover_icon_background_color",
				"description" => esc_html__( "Choose a background hover color for the icon shape", 'pitch' ),
				"dependency" => Array('element' => "icon_type", 'value' => array('circle','square'))
			),array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Link", 'pitch' ),
			"param_name" => "link"
		),
			array(
				"type" => "checkbox",
				"class" => "",
				"heading" => esc_html__( "Use Link as Anchor", 'pitch' ),
				"value" => array("Use this icon as Anchor?" => "yes"),
				"param_name" => "icon_anchor",
				"description" => esc_html__( "Check this box to use icon as anchor link (eg. #contact)", 'pitch' ),
				"dependency" => Array('element' => "link", 'not_empty' => true)
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Target", 'pitch' ),
				"param_name" => "target",
				"value" => array(
					esc_html__( "Self", 'pitch' ) => "_self",
					esc_html__( "Blank", 'pitch' ) => "_blank"
				),
				'save_always' => true,
				"dependency" => Array('element' => "link", 'not_empty' => true)
			)
		)
	)

) );


/*** Animated Icons With Text ***/

class WPBakeryShortCode_No_Animated_Icons_With_Text  extends WPBakeryShortCodesContainer {}
vc_map( array(
	"name" => esc_html__( "Animated Icons With Text", 'pitch' ),
	"base" => "no_animated_icons_with_text",
	"as_parent" => array('only' => 'no_animated_icon_with_text'),
	"content_element" => true,
	"category" => esc_html__( 'by Select', 'pitch' ),
	"icon" => "icon-wpb-animated-icons-with-text extended-custom-icon",
	"show_settings_on_create" => true,
	"params" => array(
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Columns", 'pitch' ),
			"param_name" => "columns",
			"value" => array(
				esc_html__( "Two", 'pitch' ) => "two_columns",
				esc_html__( "Three", 'pitch' ) => "three_columns",
				esc_html__( "Four", 'pitch' ) => "four_columns",
				esc_html__( "Five", 'pitch' ) => "five_columns"
			),
			'save_always' => true
		)
	),
	"js_view" => 'VcColumnView'
) );


/*** Animated Icon With Text ***/

class WPBakeryShortCode_No_Animated_Icon_With_Text extends WPBakeryShortCode {}
vc_map( array(
	"name" => esc_html__( "Animated Icons With Text Item", 'pitch' ),
	"base" => "no_animated_icon_with_text",
	"icon" => "icon-wpb-animated-icon-with-text extended-custom-icon",
	"content_element" => true,
	"as_child" => array('only' => 'no_animated_icons_with_text'),
	"params" => array_merge(
		array(
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Text position", 'pitch' ),
				"param_name" => "text_position",
				"value" => array(
					esc_html__( "Right of icon", 'pitch' ) => "right",
					esc_html__( "Below icon", 'pitch' ) => "below",
				),
				'save_always' => true
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Title", 'pitch' ),
				"param_name" => "title"
			),
			array(
				"type" => "dropdown",
				"class" => "",
				"heading" => esc_html__( "Title Tag", 'pitch' ),
				"param_name" => "title_tag",
				"value" => array(
					""   => "",
					esc_html__( "h2", 'pitch' ) => "h2",
					esc_html__( "h3", 'pitch' ) => "h3",
					esc_html__( "h4", 'pitch' ) => "h4",
					esc_html__( "h5", 'pitch' ) => "h5",
					esc_html__( "h6", 'pitch' ) => "h6",
				)
			),
			array(
				"type" => "textarea",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Text", 'pitch' ),
				"param_name" => "text"
			),
		),
		pitch_qode_icon_collections()->getVCParamsArray(),
		array(
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Icon size", 'pitch' ),
				"param_name" => "size",
				"description" => esc_html__( "Put number in px, ex.25", 'pitch' )
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Icon Color", 'pitch' ),
				"param_name" => "icon_color"
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Icon background Color", 'pitch' ),
				"param_name" => "icon_background_color"
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Border Color", 'pitch' ),
				"param_name" => "border_color"
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Icon Color on hover", 'pitch' ),
				"param_name" => "icon_color_hover"
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Icon background Color On Hover", 'pitch' ),
				"param_name" => "icon_background_color_hover"
			),
			array(
				"type" => "colorpicker",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Border Color On Hover", 'pitch' ),
				"param_name" => "border_color_hover"
			)
		)
	)

) );


/*** Social Share ***/

vc_map( array(
	"name" => esc_html__( "Social Share", 'pitch' ),
	"base" => "no_social_share",
	"icon" => "icon-wpb-social-share extended-custom-icon",
	"category" => esc_html__( 'by Select', 'pitch' ),
	"allowed_container_element" => 'vc_row',
	"show_settings_on_create" => false
) );


/*** Cover Boxes ***/

$cover_boxes_icons_array = array(array());
for ($x = 1; $x<4; $x++) {
    $coverBoxesCollections = pitch_qode_icon_collections()->iconCollections;
    foreach($coverBoxesCollections as $collection_key => $collection) {

        $cover_boxes_icons_array[$x][] = array(
            "type" => "dropdown",
            "class" => "",
            "heading" => esc_html__( "Button Icon ", 'pitch' ).$x,
            "param_name" => "cover_social_".$collection->param."_".$x,
            "value" => $collection->getIconsArray(),
			'save_always' => true,
            "dependency" => Array('element' => "cover_boxes_icon_pack", 'value' => array($collection_key))
        );

    }
}

vc_map( array(
	"name" => esc_html__( "Cover Boxes", 'pitch' ),
	"base" => "no_cover_boxes",
	"icon" => "icon-wpb-cover-boxes extended-custom-icon",
	"category" => esc_html__( 'by Select', 'pitch' ),
	"allowed_container_element" => 'vc_row',
	"params" => array_merge(
        array(
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Active element", 'pitch' ),
                "param_name" => "active_element",
                "value" => ""
            ),
            array(
                "type" => "dropdown",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Title tag", 'pitch' ),
                "param_name" => "title_tag",
                "value" => array(
                    ""   => "",
                    esc_html__( "h2", 'pitch' ) => "h2",
                    esc_html__( "h3", 'pitch' ) => "h3",
                    esc_html__( "h4", 'pitch' ) => "h4",
                    esc_html__( "h5", 'pitch' ) => "h5",
                    esc_html__( "h6", 'pitch' ) => "h6",
                ),
                "description" => esc_html__( "Choose with heading tag to display for titles", 'pitch' )
            ),
            array(
                "type" => "dropdown",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Button Icon Pack", 'pitch' ),
                "param_name" => "cover_boxes_icon_pack",
                "value" => array_merge(array("No Icon" => ""),pitch_qode_icon_collections()->getIconCollectionsVC()),
				'save_always' => true
            ),
            array(
                "type" => "attach_image",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Image 1", 'pitch' ),
                "param_name" => "image1"
            ),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Small Title 1", 'pitch' ),
				"param_name" => "small_title1",
				"value" => ""
			),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Title 1", 'pitch' ),
                "param_name" => "title1",
                "value" => ""
            ),
            array(
                "type" => "colorpicker",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Title Color 1", 'pitch' ),
                "param_name" => "title_color1"
            ),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Text 1", 'pitch' ),
                "param_name" => "text1",
                "value" => ""
            ),
            array(
                "type" => "colorpicker",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Text Color 1", 'pitch' ),
                "param_name" => "text_color1"
            ),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Link 1", 'pitch' ),
                "param_name" => "link1",
                "value" => ""
            ),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Link label 1", 'pitch' ),
                "param_name" => "link_label1",
                "value" => ""
            )
        ),
        $cover_boxes_icons_array['1'],
        array(
            array(
                "type" => "dropdown",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Target 1", 'pitch' ),
                "param_name" => "target1",
                "value" => array(
                    esc_html__( "Self", 'pitch' ) => "_self",
                    esc_html__( "Blank", 'pitch' ) => "_blank"
                ),
				'save_always' => true
            ),
            array(
                "type" => "attach_image",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Image 2", 'pitch' ),
                "param_name" => "image2"
            ),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Small Title 2", 'pitch' ),
				"param_name" => "small_title2",
				"value" => ""
			),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Title 2", 'pitch' ),
                "param_name" => "title2",
                "value" => ""
            ),
            array(
                "type" => "colorpicker",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Title Color 2", 'pitch' ),
                "param_name" => "title_color2"
            ),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Text 2", 'pitch' ),
                "param_name" => "text2",
                "value" => ""
            ),
            array(
                "type" => "colorpicker",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Text Color 2", 'pitch' ),
                "param_name" => "text_color2"
            ),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Link 2", 'pitch' ),
                "param_name" => "link2",
                "value" => ""
            ),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Link label 2", 'pitch' ),
                "param_name" => "link_label2",
                "value" => ""
            )
        ),
        $cover_boxes_icons_array['2'],
        array(
            array(
                "type" => "dropdown",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Target 2", 'pitch' ),
                "param_name" => "target2",
                "value" => array(
                    esc_html__( "Self", 'pitch' ) => "_self",
                    esc_html__( "Blank", 'pitch' ) => "_blank"
                ),
				'save_always' => true
            ),
            array(
                "type" => "attach_image",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Image 3", 'pitch' ),
                "param_name" => "image3"
            ),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Small Title 3", 'pitch' ),
				"param_name" => "small_title3",
				"value" => ""
			),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Title 3", 'pitch' ),
                "param_name" => "title3",
                "value" => ""
            ),
            array(
                "type" => "colorpicker",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Title Color 3", 'pitch' ),
                "param_name" => "title_color3"
            ),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Text 3", 'pitch' ),
                "param_name" => "text3",
                "value" => ""
            ),
            array(
                "type" => "colorpicker",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Text Color 3", 'pitch' ),
                "param_name" => "text_color3"
            ),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Link 3", 'pitch' ),
                "param_name" => "link3",
                "value" => ""
            ),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Link label 3", 'pitch' ),
                "param_name" => "link_label3",
                "value" => ""
            )
        ),
        $cover_boxes_icons_array['3'],
        array(
            array(
                "type" => "dropdown",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Target 3", 'pitch' ),
                "param_name" => "target3",
                "value" => array(
                    esc_html__( "Self", 'pitch' ) => "_self",
                    esc_html__( "Blank", 'pitch' ) => "_blank"
                ),
				'save_always' => true
            ),
            array(
                "type" => "dropdown",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Show Link as Default Button", 'pitch' ),
                "param_name" => "read_more_button_style",
                "value" => array(
                    esc_html__( "Default", 'pitch' ) => "",
                    esc_html__( "No", 'pitch' ) => "no",
                    esc_html__( "Yes", 'pitch' ) => "yes"
                )
            ),
            array(
                "type" => "dropdown",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Separator", 'pitch' ),
                "param_name" => "separator",
                "value" => array(
                    esc_html__( "Yes", 'pitch' ) => "yes",
                    esc_html__( "No", 'pitch' ) => "no"
                ),
				'save_always' => true
            ),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Separator Thicknes (px)", 'pitch' ),
                "param_name" => "separator_thickness",
                "dependency" => array('element' => "separator", 'value' => array('yes'))
            ),
            array(
                "type" => "colorpicker",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Separator Color", 'pitch' ),
                "param_name" => "separator_color",
                "dependency" => array('element' => "separator", 'value' => array('yes'))
            ),
            array(
                "type" => "dropdown",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Separator Border Style", 'pitch' ),
                "param_name" => "separator_border_style",
                "value" => array(
                    "" => "",
                    esc_html__( "Dashed", 'pitch' ) => "dashed",
                    esc_html__( "Solid", 'pitch' ) => "solid"
                ),
                "dependency" => array('element' => "separator", 'value' => array('yes'))
            ),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Button Icon Size (px)", 'pitch' ),
                "param_name" => "button_icon_size",
                "dependency" => Array('element' => "cover_boxes_icon_pack", 'not_empty' => true)
            ),
            array(
                "type" => "colorpicker",
                "class" => "",
                "heading" => esc_html__( "Button Icon Color", 'pitch' ),
                "param_name" => "button_icon_color",
                "dependency" => Array('element' => "cover_boxes_icon_pack", 'not_empty' => true)
            ),
        )
    )
) );


/*** Interactive Banners ***/

vc_map( array(
		"name" => esc_html__( "Interactive Banners", 'pitch' ),
		"base" => "no_interactive_banners",
		"category" => esc_html__( 'by Select', 'pitch' ),
		"icon" => "icon-wpb-interactive-banners extended-custom-icon",
		"allowed_container_element" => 'vc_row',
		"params" => array_merge(
                    array(
                        array(
                            "type" => "dropdown",
                            "class" => "",
                            "heading" => esc_html__( "Width", 'pitch' ),
                            "param_name" => "layout_width",
                            "value" => array(
                                ""   => "",
                                esc_html__( "1/2", 'pitch' ) => "one_half",
                                esc_html__( "1/3", 'pitch' ) => "one_third",
                                esc_html__( "1/4", 'pitch' ) => "one_fourth",
                            )
                        ),
                        array(
                            "type" => "attach_image",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Image", 'pitch' ),
                            "param_name" => "image"
                        ),
                        array(
                            "type" => "colorpicker",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Image Color Overlay", 'pitch' ),
                            "param_name" => "overlay_color",
                            "value" => "",
                        ),
                        array(
                            "type" => "colorpicker",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Image Hover Color Overlay", 'pitch' ),
                            "param_name" => "overlay_color_hover",
                            "value" => "",
                        ),
						array(
							"type" => "dropdown",
							"class" => "",
							"heading" => esc_html__( "Image Zoom on Hover", 'pitch' ),
							"param_name" => "image_animate",
							"value" => array(
								esc_html__( "No", 'pitch' ) => "no",
								esc_html__( "Yes", 'pitch' ) => "yes"
							),
							'save_always' => true,
							"dependency" => Array('element' => "image", 'not_empty' => true)
						),
                        array(
                            "type" => "dropdown",
                            "class" => "",
                            "heading" => esc_html__( "Show Image Inner Border", 'pitch' ),
                            "param_name" => "show_border",
                            "value" => array(
                                esc_html__( "Always", 'pitch' ) => "always",
								esc_html__( "Only On Hover", 'pitch' ) => "on_hover",
								esc_html__( "Only Before Hover", 'pitch' ) => "before_hover",
								esc_html__( "Never", 'pitch' ) => "never"
                            ),
							'save_always' => true
                        ),
                        array(
                            "type" => "colorpicker",
                            "class" => "",
                            "heading" => esc_html__( "Image Inner Border Color", 'pitch' ),
                            "param_name" => "border_color",
                            "dependency" => Array('element' => "show_border", 'value' => array('always','on_hover','before_hover'))
                        ),
						array(
							"type" => "textfield",
							"holder" => "div",
							"class" => "",
							"heading" => esc_html__( "Inner Border Width", 'pitch' ),
							"param_name" => "border_width",
							"value" => "",
							"dependency" => Array('element' => "show_border", 'value' => array('always','on_hover','before_hover'))
						),
                        array(
                            "type" => "textfield",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Inner Border Offset (px)", 'pitch' ),
                            "param_name" => "inner_border_offset",
                            "value" => "",
                            "description" => esc_html__( "Default value is 5", 'pitch' ),
                            "dependency" => Array('element' => "show_border", 'value' => array('always','on_hover','before_hover'))
                        ),
						array(
							"type" => "dropdown",
							"class" => "",
							"heading" => esc_html__( "Show Icon", 'pitch' ),
							"param_name" => "show_icon",
							"value" => array(
								esc_html__( "Always", 'pitch' ) => "always",
								esc_html__( "Only On Hover", 'pitch' ) => "on_hover",
								esc_html__( "Only Before Hover", 'pitch' ) => "before_hover",
								esc_html__( "Never", 'pitch' ) => "never"
							),
							'save_always' => true,
						),
                    ),
                    pitch_qode_icon_collections()->getVCParamsArray((array('element' => "show_icon", 'value' => array('always', 'on_hover', 'before_hover'))), '', true),
                    array(
                        array(
                            "type" => "dropdown",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Icon Type", 'pitch' ),
                            "param_name" => "icon_type",
                            "value" => array(
                                esc_html__( "Normal", 'pitch' ) => "normal",
                                esc_html__( "Circle", 'pitch' ) => "circle",
                                esc_html__( "Square", 'pitch' ) => "square"
                            ),
							'save_always' => true,
                            "dependency" => Array('element' => "icon_pack", 'value' => pitch_qode_icon_collections()->getIconCollectionsKeys())
                        ),
                        array(
                            "type" => "textfield",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Icon Size (px)", 'pitch' ),
                            "param_name" => "icon_custom_size",
                            "value" => "",
                            "description" => esc_html__( "Default value is 20", 'pitch' ),
                            "dependency" => Array('element' => "icon_pack", 'value' => pitch_qode_icon_collections()->getIconCollectionsKeys())
                        ),
                        array(
                            "type" => "colorpicker",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Icon Color", 'pitch' ),
                            "param_name" => "icon_color",
                            "dependency" => Array('element' => "icon_pack", 'value' => pitch_qode_icon_collections()->getIconCollectionsKeys())
                        ),
                        array(
                            "type" => "dropdown",
                            "class" => "",
                            "heading" => esc_html__( "Show Title", 'pitch' ),
                            "param_name" => "show_title",
                            "value" => array(
                                esc_html__( "Always", 'pitch' ) => "always",
                                esc_html__( "Only On Hover", 'pitch' ) => "on_hover",
                                esc_html__( "Only Before Hover", 'pitch' ) => "before_hover",
                                esc_html__( "Never", 'pitch' ) => "never"
                            ),
							'save_always' => true,
                        ),
                        array(
                            "type" => "textfield",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Title Text", 'pitch' ),
                            "param_name" => "title",
                            "dependency" => Array('element' => "show_title", 'value' => array('always','on_hover','before_hover'))
                        ),
                        array(
                            "type" => "colorpicker",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Title Color", 'pitch' ),
                            "param_name" => "title_color",
                            "dependency" => Array('element' => "title", 'not_empty' => true),
                            "dependency" => Array('element' => "show_title", 'value' => array('always','on_hover','before_hover'))
                        ),
                        array(
                            "type" => "textfield",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Title Size (px)", 'pitch' ),
                            "param_name" => "title_size",
                            "description" => esc_html__( "Default value is 17", 'pitch' ),
                            "dependency" => Array('element' => "title", 'not_empty' => true),
                            "dependency" => Array('element' => "show_title", 'value' => array('always','on_hover','before_hover'))
                        ),
                        array(
                            "type" => "dropdown",
                            "class" => "",
                            "heading" => esc_html__( "Title Tag", 'pitch' ),
                            "param_name" => "title_tag",
                            "value" => array(
                                ""   => "",
                                esc_html__( "h2", 'pitch' ) => "h2",
                                esc_html__( "h3", 'pitch' ) => "h3",
                                esc_html__( "h4", 'pitch' ) => "h4",
                                esc_html__( "h5", 'pitch' ) => "h5",
                                esc_html__( "h6", 'pitch' ) => "h6",
                            ),
                            "dependency" => Array('element' => "title", 'not_empty' => true)
                        ),
						array(
							"type" => "textfield",
							"holder" => "div",
							"class" => "",
							"heading" => esc_html__( "Small Title Text", 'pitch' ),
							"param_name" => "small_title",
							"description" => esc_html__( "This text is displayed above the title.", 'pitch' ),
							"dependency" => Array('element' => "show_title", 'value' => array('always','on_hover','before_hover'))
						),
                        array(
                            "type" => "dropdown",
                            "class" => "",
                            "heading" => esc_html__( "Show Button", 'pitch' ),
                            "param_name" => "show_button",
                            "value" => array(
                                esc_html__( "Always", 'pitch' ) => "always",
                                esc_html__( "Only On Hover", 'pitch' ) => "on_hover",
                                esc_html__( "Never", 'pitch' ) => "never"
                            ),
							'save_always' => true,
                        ),
                        array(
                            "type" => "textfield",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Button Height", 'pitch' ),
                            "param_name" => "button_size",
                            "description" => esc_html__( "It uses small button options (px)", 'pitch' ),
                            "dependency" => Array('element' => "show_button", 'value' => array("on_hover","always"))
                        ),
                        array(
                            "type" => "textfield",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Button Left and Right Padding", 'pitch' ),
                            "param_name" => "button_padding",
                            "description" => esc_html__( "It uses small button options (px)", 'pitch' ),
                            "dependency" => Array('element' => "show_button", 'value' => array("on_hover","always"))
                        ),
                        array(
                            "type" => "textfield",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Button Text", 'pitch' ),
                            "param_name" => "link_text",
                            "dependency" => Array('element' => "show_button", 'value' => array("on_hover","always"))
                        ),
                        array(
                            "type" => "textfield",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Link Button to following URL", 'pitch' ),
                            "param_name" => "button_link",
                            "dependency" => Array('element' => "show_button", 'value' => array("on_hover","always"))
                        ),
                        array(
                            "type" => "dropdown",
                            "class" => "",
                            "heading" => esc_html__( "Link Target", 'pitch' ),
                            "param_name" => "target",
                            "value" => array(
                                esc_html__( "Self", 'pitch' ) => "_self",
                                esc_html__( "Blank", 'pitch' ) => "_blank"
                            ),
							'save_always' => true,
                            "dependency" => Array('element' => "show_button", 'value' => array("on_hover","always"))
                        ),
                        array(
                            "type" => "colorpicker",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Button Text Color", 'pitch' ),
                            "param_name" => "link_color",
                            "dependency" => Array('element' => "show_button", 'value' => array("on_hover","always"))
                        ),
                        array(
                            "type" => "colorpicker",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Button Border Color", 'pitch' ),
                            "param_name" => "link_border_color",
                            "dependency" => Array('element' => "show_button", 'value' => array("on_hover","always"))
                        ),
                        array(
                            "type" => "colorpicker",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Button Background Color", 'pitch' ),
                            "param_name" => "link_background_color",
                            "dependency" => Array('element' => "show_button", 'value' => array("on_hover","always"))
                        ),
                        array(
                            "type" => "dropdown",
                            "class" => "",
                            "heading" => esc_html__( "Add Link Over Banner Content", 'pitch' ),
                            "param_name" => "link_over_content",
                            "value" => array(
                                esc_html__( "No", 'pitch' ) => "no",
                                esc_html__( "Yes", 'pitch' ) => "yes"
                            ),
							'save_always' => true,
                            "dependency" => Array('element' => "show_button", 'value' => "never")
                        ),
                        array(
                            "type" => "textfield",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Link Banner Content to following URL", 'pitch' ),
                            "param_name" => "content_link",
                            "dependency" => Array('element' => "link_over_content", 'value' => 'yes')
                        ),
                        array(
                            "type" => "dropdown",
                            "class" => "",
                            "heading" => esc_html__( "Show Separator under Title", 'pitch' ),
                            "param_name" => "separator",
                            "value" => array(
                                esc_html__( "Never", 'pitch' ) => "no",
                                esc_html__( "Always", 'pitch' ) => "yes",
                                esc_html__( "Only On Hover", 'pitch' ) => "on_hover"
                            ),
							'save_always' => true
                        ),
                        array(
                            "type" => "textfield",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Separator Thickness (px)", 'pitch' ),
                            "param_name" => "separator_thickness",
                            "dependency" => Array('element' => "separator", 'value' => array("yes","on_hover"))
                        ),
                        array(
                            "type" => "colorpicker",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Separator Color", 'pitch' ),
                            "param_name" => "separator_color",
                            "dependency" => Array('element' => "separator", 'value' => array("yes","on_hover"))
                        ),
                        array(
                            "type" => "dropdown",
                            "class" => "",
                            "heading" => esc_html__( "Show Content", 'pitch' ),
                            "param_name" => "show_content",
                            "value" => array(
                                esc_html__( "Always", 'pitch' ) => "always",
                                esc_html__( "Only On Hover", 'pitch' ) => "on_hover",
                                esc_html__( "Only Before Hover", 'pitch' ) => "before_hover",
                                esc_html__( "Never", 'pitch' ) => "never"
                            ),
							'save_always' => true,
                        ),
                        array(
                            "type" => "textarea_html",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Content", 'pitch' ),
                            "param_name" => "content",
                            "value" => "<p>"."I am test text for Interactive Banner shortcode."."</p>"
                        )
                    )
                )
    )
);


/*** Image with Text and Icon ***/

vc_map( array(
    "name" => esc_html__( "Image with text and Icon", 'pitch' ),
    "base" => "no_image_with_text_and_icon",
    "icon" => "icon-wpb-image-with-text-and-icon extended-custom-icon",
    "category" => esc_html__( 'by Select', 'pitch' ),
    "allowed_container_element" => 'vc_row',
    "params" => array_merge(
                array(
                    array(
                        "type" => "attach_image",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Image", 'pitch' ),
                        "param_name" => "image"
                    )
                ),
                pitch_qode_icon_collections()->getVCParamsArray(array(), '', true),
                array(
                    array(
                        "type" => "dropdown",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Icon Type", 'pitch' ),
                        "param_name" => "icon_type",
                        "value" => array(
                            esc_html__( "Circle", 'pitch' ) => "circle",
                            esc_html__( "Square", 'pitch' ) => "square"
                        ),
						'save_always' => true,
                        "dependency" => Array('element' => "icon_pack", 'value' => pitch_qode_icon_collections()->getIconCollectionsKeys())
                    ),
                    array(
                        "type" => "textfield",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Custom Size (px)", 'pitch' ),
                        "param_name" => "icon_custom_size",
                        "value" => "",
                        "description" => esc_html__( "Default value is 25", 'pitch' ),
                        "dependency" => Array('element' => "icon_pack", 'value' => pitch_qode_icon_collections()->getIconCollectionsKeys())
                    ),
                    array(
                        "type" => "textfield",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Custom Shape Size (px)", 'pitch' ),
                        "param_name" => "icon_shape_size",
                        "value" => "",
                        "description" => esc_html__( "Default value is 100", 'pitch' ),
                        "dependency" => Array('element' => "icon_pack", 'value' => pitch_qode_icon_collections()->getIconCollectionsKeys())
                    ),
                    array(
                        "type" => "colorpicker",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Icon Color", 'pitch' ),
                        "param_name" => "icon_color",
                        "dependency" => Array('element' => "icon_pack", 'value' => pitch_qode_icon_collections()->getIconCollectionsKeys())
                    ),
                    array(
                        "type" => "colorpicker",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Icon Background Color", 'pitch' ),
                        "param_name" => "icon_background_color",
                        "dependency" => Array('element' => "icon_pack", 'value' => pitch_qode_icon_collections()->getIconCollectionsKeys())
                    ),
                    array(
                        "type" => "textfield",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Link", 'pitch' ),
                        "param_name" => "link"
                    ),
                    array(
                        "type" => "dropdown",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Link Target", 'pitch' ),
                        "param_name" => "target",
                        "value" => array(
                            "" => "",
                            esc_html__( "Self", 'pitch' ) => "_self",
                            esc_html__( "Blank", 'pitch' ) => "_blank"
                        )
                    ),
                    array(
                        "type" => "textfield",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Title", 'pitch' ),
                        "param_name" => "title"
                    ),
                    array(
                        "type" => "dropdown",
                        "class" => "",
                        "heading" => esc_html__( "Title Tag", 'pitch' ),
                        "param_name" => "title_tag",
                        "value" => array(
                            ""   => "",
                            esc_html__( "h2", 'pitch' ) => "h2",
                            esc_html__( "h3", 'pitch' ) => "h3",
                            esc_html__( "h4", 'pitch' ) => "h4",
                            esc_html__( "h5", 'pitch' ) => "h5",
                            esc_html__( "h6", 'pitch' ) => "h6",
                        ),
                        "description" => esc_html__( "Default value is h4", 'pitch' ),
                        "dependency" => Array('element' => "title", 'not_empty' => true)
                    ),
                    array(
                        "type" => "colorpicker",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Title Color", 'pitch' ),
                        "param_name" => "title_color",
                        "dependency" => Array('element' => "title", 'not_empty' => true)
                    ),
                    array(
                        "type" => "textarea_html",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Content", 'pitch' ),
                        "param_name" => "content",
                        "value" => "<p>"."I am test text for Image With Text and Icon shortcode."."</p>"
                    ),
                    array(
                        "type" => "textfield",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Top Margin", 'pitch' ),
                        "param_name" => "position_top",
                        "description" => esc_html__( "Select top position of title from image. Default value is 75", 'pitch' )
                    )
                )
            )

) );


/*** Image with text ***/

vc_map( array(
	"name" => esc_html__( "Image With Text", 'pitch' ),
	"base" => "no_image_with_text",
	"category" => esc_html__( 'by Select', 'pitch' ),
	"icon" => "icon-wpb-image-with-text extended-custom-icon",
	"allowed_container_element" => 'vc_row',
	"params" => array(
		array(
			"type" => "attach_image",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Image", 'pitch' ),
			"param_name" => "image"
		),
		array(
			"type" => "dropdown",
			"class" => "",
			"heading" => esc_html__( "Text over image", 'pitch' ),
			"param_name" => "text_over_image",
			"value" => array(
				esc_html__( "No", 'pitch' ) => "no",
				esc_html__( "Yes", 'pitch' ) => "yes"
			),
			'save_always' => true
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Link", 'pitch' ),
			"param_name" => "link",
			"dependency" => array('element' => "text_over_image", 'value' => array("yes"))
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Target", 'pitch' ),
			"param_name" => "target",
			"value" => array(
				esc_html__( "Self", 'pitch' ) => "_self",
				esc_html__( "Blank", 'pitch' ) => "_blank"
			),
			'save_always' => true,
			"dependency" => array('element' => "text_over_image", 'value' => array("yes"))
		),
		array(
			"type" => "dropdown",
			"class" => "",
			"heading" => esc_html__( "Text position", 'pitch' ),
			"param_name" => "text_position",
			"value" => array(
				esc_html__( "Top", 'pitch' ) => "top",
				esc_html__( "Bottom", 'pitch' ) => "bottom",
				esc_html__( "Center", 'pitch' ) => "center"
			),
			'save_always' => true,
			"dependency" => array('element' => "text_over_image", 'value' => array("yes"))
		),
		array(
			"type" => "dropdown",
			"class" => "",
			"heading" => esc_html__( "Title underline", 'pitch' ),
			"param_name" => "title_underline",
			"value" => array(
				esc_html__( "Yes", 'pitch' ) => "yes",
				esc_html__( "No", 'pitch' ) => "no"
			),
			'save_always' => true,
			"description" => esc_html__( "Underline title text on hover.", 'pitch' ),
			"dependency" => array('element' => "text_over_image", 'value' => array("yes"))
		),
		array(
			"type" => "dropdown",
			"class" => "",
			"heading" => esc_html__( "Alignment", 'pitch' ),
			"param_name" => "alignment",
			"value" => array(
				esc_html__( "Center", 'pitch' ) => "center",
				esc_html__( "Left", 'pitch' ) => "left",
				esc_html__( "Right", 'pitch' ) => "right"
			),
			'save_always' => true
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Small Title", 'pitch' ),
			"param_name" => "small_title"
		),
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Small Title Color", 'pitch' ),
			"param_name" => "small_title_color"
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Title", 'pitch' ),
			"param_name" => "title"
		),
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Title Color", 'pitch' ),
			"param_name" => "title_color"
		),
		array(
			"type" => "dropdown",
			"class" => "",
			"heading" => esc_html__( "Title Tag", 'pitch' ),
			"param_name" => "title_tag",
			"value" => array(
				""   => "",
				esc_html__( "h2", 'pitch' ) => "h2",
				esc_html__( "h3", 'pitch' ) => "h3",
				esc_html__( "h4", 'pitch' ) => "h4",
				esc_html__( "h5", 'pitch' ) => "h5",
				esc_html__( "h6", 'pitch' ) => "h6",
			)
		),
		array(
			"type" => "textarea_html",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Content", 'pitch' ),
			"param_name" => "content",
			"value" => "<p>"."I am test text for Interactive Banners shortcode."."</p>"
		)
	)
) );


/*** Image hover ***/

vc_map( array(
		"name" => esc_html__( "Image Hover", 'pitch' ),
		"base" => "no_image_hover",
		"category" => esc_html__( 'by Select', 'pitch' ),
		"icon" => "icon-wpb-image-hover extended-custom-icon",
		"allowed_container_element" => 'vc_row',
		"params" => array(
			array(
				"type" => "attach_image",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Image", 'pitch' ),
				"param_name" => "image"
			),
			array(
				"type" => "attach_image",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Hover Image", 'pitch' ),
				"param_name" => "hover_image"
			),
            array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Link", 'pitch' ),
				"param_name" => "link"
			),
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Target", 'pitch' ),
				"param_name" => "target",
                "value" => array(
                    esc_html__( "Self", 'pitch' ) => "_self",
                    esc_html__( "Blank", 'pitch' ) => "_blank"
                ),
				'save_always' => true
			),
            array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Animation", 'pitch' ),
				"param_name" => "animation",
                "value" => array(
                    "" => "",
                    esc_html__( "Yes", 'pitch' ) => "yes",
                    esc_html__( "No", 'pitch' ) => "no"
                )
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Animation speed (In seconds)", 'pitch' ),
				"param_name" => "animation_speed",
				"dependency" => array('element' => "animation", 'value' => array("yes"))
			),
            array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Transition delay", 'pitch' ),
				"param_name" => "transition_delay",
                "dependency" => array('element' => "animation", 'value' => array("yes"))
			)
		)
) );


/*** Video ***/

vc_map( array(
	"name" => esc_html__( "Video shortcode", 'pitch' ),
	"base" => "no_video",
	"icon" => "icon-wpb-video extended-custom-icon",
	"category" => esc_html__( 'by Select', 'pitch' ),
	"allowed_container_element" => 'vc_row',
	"params" => array(
		array(
			"type" => "textfield",
			"class" => "",
			"heading" => esc_html__( "Video Type - webm", 'pitch' ),
			"param_name" => "webm",
			"value" => ""
		),
		array(
			"type" => "textfield",
			"class" => "",
			"heading" => esc_html__( "Video Type - mp4", 'pitch' ),
			"param_name" => "mp4",
			"value" => ""
		),
		array(
			"type" => "textfield",
			"class" => "",
			"heading" => esc_html__( "Video Type - ogv", 'pitch' ),
			"param_name" => "ogv",
			"value" => ""
		),
		array(
			"type" => "dropdown",
			"admin_label" => true,
			"class" => "",
			"heading" => esc_html__( "Loop", 'pitch' ),
			"param_name" => "loop",
			"value" => array(
				esc_html__( "Default", 'pitch' ) => "false",
				esc_html__( "No", 'pitch' ) => "false",
				esc_html__( "Yes", 'pitch' ) => "true"
			),
			'save_always' => true
		),
		array(
			"type" => "dropdown",
			"admin_label" => true,
			"class" => "",
			"heading" => esc_html__( "Autoplay", 'pitch' ),
			"param_name" => "autoplay",
			"value" => array(
				esc_html__( "Default", 'pitch' ) => "false",
				esc_html__( "No", 'pitch' ) => "false",
				esc_html__( "Yes", 'pitch' ) => "true"
			),
			'save_always' => true
		)
	)
) );


/*** Contact Form 7 ***/

if(pitch_qode_contact_form_7_installed()){
	vc_add_param("contact-form-7", array(
		"type" => "dropdown",
		"class" => "",
		"heading" => esc_html__( "Style", 'pitch' ),
		"param_name" => "html_class",
		"value" => array(
			esc_html__( "Default", 'pitch' ) => "default",
			esc_html__( "Custom Style 1", 'pitch' ) => "cf7_custom_style_1",
			esc_html__( "Custom Style 2", 'pitch' ) => "cf7_custom_style_2",
			esc_html__( "Custom Style 3", 'pitch' ) => "cf7_custom_style_3"
		),
		'save_always' => true,
		"description" => esc_html__( "You can style each form element individually in Select Options > Contact Form 7", 'pitch' )
	));
}


/*** Product Slider ***/
if(pitch_qode_is_woocommerce_installed()) {
    vc_map(array(
        "name" => esc_html__( "Product Slider", 'pitch' ),
        "base" => "no_product_slider",
        "category" => esc_html__( 'by Select', 'pitch' ),
        "icon" => "icon-wpb-product-slider extended-custom-icon",
        "allowed_container_element" => 'vc_row',
        "params" => array(
            array(
                "type" => "dropdown",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Product type", 'pitch' ),
                "param_name" => "product_type",
                "value" => array(
                    esc_html__( "Recent Products", 'pitch' ) => "recent_products",
                    esc_html__( "Featured Products", 'pitch' ) => "featured_products",
                    esc_html__( "Products By Id", 'pitch' ) => "products",
                    esc_html__( "Products By Category", 'pitch' ) => "product_category",
                    esc_html__( "Products On Sale", 'pitch' ) => "sale_products",
                    esc_html__( "Best Selling", 'pitch' ) => "best_selling_products",
                    esc_html__( "Top Rated", 'pitch' ) => "top_rated_products"
                ),
				'save_always' => true
            ),
            array(
                "type" => "dropdown",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Order By", 'pitch' ),
                "param_name" => "order_by",
                "value" => array(
                    "" => "",
                    esc_html__( "Date", 'pitch' ) => "date",
                    esc_html__( "ID", 'pitch' ) => "date",
                    esc_html__( "Author", 'pitch' ) => "date",
                    esc_html__( "Title", 'pitch' ) => "title",
                    esc_html__( "Modified", 'pitch' ) => "modified",
                    esc_html__( "Random", 'pitch' ) => "rand",
                    esc_html__( "Comment count", 'pitch' ) => "comment_count",
                    esc_html__( "Menu order", 'pitch' ) => "menu_order"
                ),
                "dependency" => array('element' => "product_type", 'value' => array("recent_products","featured_products","product_category","sale_products","top_rated_products"))
            ),
            array(
                "type" => "dropdown",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Padding between product items", 'pitch' ),
                "param_name" => "padding_between",
                "value" => array(
                    esc_html__( "No", 'pitch' ) => "no",
                    esc_html__( "Yes", 'pitch' ) => "yes"
                ),
				'save_always' => true
            ),
            array(
                "type" => "dropdown",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Order", 'pitch' ),
                "param_name" => "order",
                "value" => array(
                    "" => "",
                    esc_html__( "ASC", 'pitch' ) => "ASC",
                    esc_html__( "DESC", 'pitch' ) => "DESC",
                ),
                "dependency" => array('element' => "product_type", 'value' => array("recent_products","featured_products","products","product_category","sale_products","top_rated_products"))
            ),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Number", 'pitch' ),
                "param_name" => "number",
                "value" => "-1",
                "description" => esc_html__( "Number of product on page (-1 is all)", 'pitch' )
            ),
            array(
                "type" => "dropdown",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Number of Products Shown", 'pitch' ),
                "param_name" => "products_shown",
                "value" => array(
                    "" => "",
                    "3" => "3",
                    "4" => "4",
                    "5" => "5",
                    "6" => "6"
                ),
				'save_always' => true,
                "description" => esc_html__( "Number of product posts that are showing at the same time in full width (on smaller screens is responsive so there will be less items shown)", 'pitch' ),
            ),
            array(
                "type" => "checkbox",
                "class" => "",
                "heading" => esc_html__( "Prev/Next navigation", 'pitch' ),
                "value" => array("Enable prev/next navigation?" => "yes"),
                "param_name" => "enable_navigation"
            ),
            array(
                "type" => "checkbox",
                "class" => "",
                "heading" => esc_html__( "Bullets navigation", 'pitch' ),
                "value" => array("Show bullets navigation?" => "yes"),
                "param_name" => "pager_navigation"
            ),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Products", 'pitch' ),
                "param_name" => "ids",
                "value" => "",
                "description" => esc_html__( "Delimit ID numbers by comma", 'pitch' ),
                "dependency" => array('element' => "product_type", 'value' => array("products"))
            ),
            array(
                "type" => "textfield",
                "holder" => "div",
                "class" => "",
                "heading" => esc_html__( "Category", 'pitch' ),
                "param_name" => "category",
                "value" => "",
                "description" => esc_html__( "Delimit category slugs by comma", 'pitch' ),
                "dependency" => array('element' => "product_type", 'value' => array("product_category"))
            ),
        )
    ));
}

/* Text Slider Holder */

class WPBakeryShortCode_No_Text_Slider_Holder  extends WPBakeryShortCodesContainer {}
vc_map( array(
	"name" => esc_html__( "Text Slider Holder", 'pitch' ),
	"base" => "no_text_slider_holder",
	"icon" => "icon-wpb-text-slider-holder extended-custom-icon",
	"category" => esc_html__( 'by Select', 'pitch' ),
	"as_parent" => array('only' => 'no_text_slider_item'),
	"content_element" => true,
	"params" => array(
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Show Navigation", 'pitch' ),
			"param_name" => "show_navigation",
			"value" => array(
				esc_html__( "Yes", 'pitch' ) => 'yes',
				esc_html__( "No", 'pitch' ) => 'no'
			),
			'save_always' => true
		),
		array(
			"type" => "dropdown",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Navigation Position", 'pitch' ),
			"param_name" => "navigation_position",
			"value" => array(
				esc_html__( "Left", 'pitch' ) => 'nav-left',
				esc_html__( "Center", 'pitch' ) => 'nav-center',
				esc_html__( "Right", 'pitch' ) => 'nav-right'
			),
			'save_always' => true,
			"dependency" => Array('element' => "show_navigation", 'value' => array('yes')),
		)
	),
	"js_view" => 'VcColumnView'
) );


/* Text Slider Item */

class WPBakeryShortCode_No_Text_Slider_Item  extends WPBakeryShortCodesContainer {}
vc_map( array(
	"name" => esc_html__( "Text Slider Item", 'pitch' ),
	"base" => "no_text_slider_item",
	"as_parent" => array('only' => 'vc_column_text, vc_separator, no_custom_font, no_icons, no_separator_with_icon, vc_text_separator'),
	"as_child" => array('only' => 'no_text_slider_holder'),
	"content_element" => true,
	"category" => esc_html__( 'by Select', 'pitch' ),
	"icon" => "icon-wpb-text-slider-item extended-custom-icon",
	"js_view" => 'VcColumnView',
	"show_settings_on_create" => false,
	"params" => array()
) );

/* Tabs */

class WPBakeryShortCode_No_Tabs  extends WPBakeryShortCodesContainer {}
vc_map( array(
	"name" => esc_html__( 'Tabs', 'pitch' ),
	"base" => "no_tabs",
	"as_parent" => array('only' => 'no_tab'),
	"content_element" => true,
	"category" => esc_html__( 'by Select', 'pitch' ),
	"icon" => "icon-wpb-tabs extended-custom-icon",
	"show_settings_on_create" => true,
	"js_view" => 'VcColumnView',
	"params" => array(
		array(
			"type" => "dropdown",
			"class" => "",
			"heading" => esc_html__( "Style", 'pitch' ),
			"param_name" => "style",
			"value" => array(
				esc_html__( "Horizontal Center", 'pitch' ) => "horizontal",
				esc_html__( "Horizontal Center With Icons", 'pitch' ) => "horizontal_with_icons",
				esc_html__( "Horizontal Center With Text And Icons", 'pitch' ) => "horizontal_with_text_and_icons",
				esc_html__( "Horizontal Left", 'pitch' ) => "horizontal_left",
				esc_html__( "Horizontal Left With Icons", 'pitch' ) => "horizontal_left_with_icons",
				esc_html__( "Horizontal Left With Text And Icons", 'pitch' ) => "horizontal_left_with_text_and_icons",
				esc_html__( "Horizontal Right", 'pitch' ) => "horizontal_right",
				esc_html__( "Horizontal Right With Icons", 'pitch' ) => "horizontal_right_with_icons",
				esc_html__( "Horizontal Right With Text And Icons", 'pitch' ) => "horizontal_right_with_text_and_icons",
				esc_html__( "Vertical Left", 'pitch' ) => "vertical_left",
				esc_html__( "Vertical Left With Icons", 'pitch' ) => "vertical_left_with_icons",
				esc_html__( "Vertical Left With Text and Icons", 'pitch' ) => "vertical_left_with_text_and_icons",
				esc_html__( "Vertical Right", 'pitch' ) => "vertical_right",
				esc_html__( "Vertical Right With Icons", 'pitch' ) => "vertical_right_with_icons",
				esc_html__( "Vertical Right With Text and Icons", 'pitch' ) => "vertical_right_with_text_and_icons",
			),
			'save_always' => true
		),
		array(
			"type" => "dropdown",
			"class" => "",
			"heading" => esc_html__( "Tab Type", 'pitch' ),
			"param_name" => "tab_type_default",
			"value" => array(
				esc_html__( "Default", 'pitch' ) => "default",
				esc_html__( "With Borders", 'pitch' ) => "with_borders"
			),
			'save_always' => true,
			"dependency" => Array('element' => "style", 'value' => array('horizontal','horizontal_left','horizontal_right', 'vertical_left', 'vertical_right','horizontal_with_text_and_icons','horizontal_left_with_text_and_icons','horizontal_right_with_text_and_icons','vertical_left_with_text_and_icons','vertical_right_with_text_and_icons'))
		),
		array(
			"type" => "dropdown",
			"class" => "",
			"heading" => esc_html__( "Tab Type", 'pitch' ),
			"param_name" => "tab_type_icons",
			"value" => array(
				esc_html__( "Default", 'pitch' ) => "default",
				esc_html__( "With Borders", 'pitch' ) => "with_borders",
				esc_html__( "With Lines", 'pitch' ) => "with_lines"
			),
			'save_always' => true,
			"dependency" => Array('element' => "style", 'value' => array('horizontal_with_icons','horizontal_left_with_icons','horizontal_right_with_icons', 'vertical_left_with_icons', 'vertical_right_with_icons'))
		),
		array(
			"type" => "dropdown",
			"class" => "",
			"heading" => esc_html__( "Border Type", 'pitch' ),
			"param_name" => "border_type_default",
			"value" => array(
				esc_html__( "Border Arround Tabs", 'pitch' ) => "border_arround_element",
				esc_html__( "Border Arround Active Tab", 'pitch' ) => "border_arround_active_tab"
			),
			'save_always' => true,
			"dependency" => Array('element' => "tab_type_default", 'value' => array('with_borders'))
		),
		array(
			"type" => "dropdown",
			"class" => "",
			"heading" => esc_html__( "Border Type", 'pitch' ),
			"param_name" => "border_type_icons",
			"value" => array(
				esc_html__( "Border Around Tabs", 'pitch' ) => "border_arround_element",
				esc_html__( "Border Around Active Tab", 'pitch' ) => "border_arround_active_tab"
			),
			'save_always' => true,
			"dependency" => Array('element' => "tab_type_icons", 'value' => array('with_borders'))
		),
		array(
			"type" => "dropdown",
			"class" => "",
			"heading" => esc_html__( "Margin Between Tabs", 'pitch' ),
			"param_name" => "margin_between_tabs",
			"value" => array(
				esc_html__( "Yes", 'pitch' ) => "enable_margin",
				esc_html__( "No", 'pitch' ) => "disable_margin"
			),
			'save_always' => true,
			"dependency" => Array('element' => "tab_type_default", 'value' => array('with_borders'))
		),
		array(
			"type" => "dropdown",
			"class" => "",
			"heading" => esc_html__( "Margin Between Tabs", 'pitch' ),
			"param_name" => "icons_margin_between_tabs",
			"value" => array(
				esc_html__( "Yes", 'pitch' ) => "enable_margin",
				esc_html__( "No", 'pitch' ) => "disable_margin"
			),
			'save_always' => true,
			"dependency" => Array('element' => "border_type_icons", 'value' => array('border_arround_element'))
		),
		array(
			"type" => "textfield",
			"class" => "",
			"heading" => esc_html__( "Space Between Tab and Content (px)", 'pitch' ),
			"param_name" => "space_between_tab_and_content",
			"value" => "",
			"description" => esc_html__( "Insert value for space between Tab and Content (default value is 18px)", 'pitch' ),
			"dependency" => Array('element' => "style", 'value' => array('horizontal_with_icons','horizontal_left_with_icons','horizontal_right_with_icons','horizontal','horizontal_left','horizontal_right','horizontal_with_text_and_icons','horizontal_left_with_text_and_icons','horizontal_right_with_text_and_icons','vertical_left_with_text_and_icons','vertical_right_with_text_and_icons'))
		),
		array(
			"type" => "dropdown",
			"class" => "",
			"heading" => esc_html__( "Border arround Content", 'pitch' ),
			"param_name" => "show_content_border",
			"value" => array(
				esc_html__( "No", 'pitch' ) => "no",
				esc_html__( "Yes", 'pitch' ) => "yes"
			),
			'save_always' => true,
		),
		array(
			"type" => "textfield",
			"class" => "",
			"heading" => esc_html__( "Content Padding", 'pitch' ),
			"param_name" => "content_padding",
			"value" => "",
			"description" => esc_html__( "Please insert padding in format (top right bottom left) i.e. 5px 5px 5px 5px", 'pitch' )
		),
		array(
			"type" => "textfield",
			"class" => "",
			"heading" => esc_html__( "Border Radius (px)", 'pitch' ),
			"param_name" => "tab_border_radius",
			"value" => ""
		),
		array(
			"type" => "dropdown",
			"class" => "",
			"heading" => esc_html__( "Icon Position", 'pitch' ),
			"param_name" => "tab_icon_position",
			"value" => array(
				esc_html__( "Left", 'pitch' ) => "left",
				esc_html__( "Right", 'pitch' ) => "right"
			),
			'save_always' => true,
			"dependency" => Array('element' => "style", 'value' => array('horizontal_with_text_and_icons','horizontal_left_with_text_and_icons','horizontal_right_with_text_and_icons','vertical_left_with_text_and_icons','vertical_right_with_text_and_icons'))
		)
	),
));

/* Tab */

class WPBakeryShortCode_No_Tab  extends WPBakeryShortCodesContainer {}
vc_map( array(
	"name" => esc_html__( 'Tab', 'pitch' ),
	"base" => "no_tab",
	"as_parent" => array('except' => 'vc_row'),
	"as_child" => array('only' => 'no_tabs'),
	'is_container' => true,
	"category" => esc_html__( 'by Select', 'pitch' ),
	"icon" => "icon-wpb-tab extended-custom-icon",
	"show_settings_on_create" => true,
	"js_view" => 'VcColumnView',
	"params" => array_merge(
		array(
			array(
				"type" => "textfield",
				"class" => "",
				"admin_label" => true,
				"heading" => esc_html__( "Tab Title", 'pitch' ),
				"param_name" => "title",
				"value" => ""
			),
			array(
				"type" => "textfield",
				"heading" => esc_html__( "Tab ID", 'pitch' ),
				"param_name" => "tab_id",
				"value" => rand()
			),
		),
		pitch_qode_icon_collections()->getVCParamsArray()
	)
) );

/* Accordion */

class WPBakeryShortCode_No_Accordion  extends WPBakeryShortCodesContainer {}
vc_map( array(
		"name" => esc_html__( 'Accordion', 'pitch' ),
		"base" => "no_accordion",
		"as_parent" => array('only' => 'no_accordion_tab'),
		"content_element" => true,
		"category" => esc_html__( 'by Select', 'pitch' ),
		"icon" => "icon-wpb-accordion extended-custom-icon",
		"show_settings_on_create" => true,
		"js_view" => 'VcColumnView',
		"params" => array(
			array(
				'type' => 'textfield',
				'heading' => esc_html__( 'Active section', 'pitch' ),
				'param_name' => 'active_tab',
				'value' => 1,
				'description' => esc_html__( 'Enter section number to be active on load or enter false to collapse all sections.', 'pitch' )
			),
			array(
				'type' => 'checkbox',
				'heading' => esc_html__( 'Allow collapse all sections?', 'pitch' ),
				'param_name' => 'collapsible',
				'description' => esc_html__( 'If checked, it is allowed to collapse all sections.', 'pitch' ),
				'value' => array(
					esc_html__( 'Yes', 'pitch' ) => 'yes'
				)
			),
			array(
				'type' => 'textfield',
				'heading' => esc_html__( 'Extra class name', 'pitch' ),
				'param_name' => 'el_class',
				'description' => esc_html__( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'pitch' )
			),
			array(
				"type" => "dropdown",
				"class" => "",
				"heading" => esc_html__( "Style", 'pitch' ),
				"param_name" => "style",
				"value" => array(
					esc_html__( "Accordion", 'pitch' ) => "accordion",
					esc_html__( "Toggle", 'pitch' ) => "toggle",
					esc_html__( "Boxed Accordion", 'pitch' ) => "boxed_accordion",
					esc_html__( "Boxed Toggle", 'pitch' ) => "boxed_toggle"
				),
				'save_always' => true
			),
			array(
				"type" => "textfield",
				"class" => "",
				"heading" => esc_html__( "Accordion Title Border Radius", 'pitch' ),
				"param_name" => "accordion_section_border_radius",
				"value" => "",
				"dependency" => Array('element' => "style", 'value' => array('boxed_accordion', 'boxed_toggle'))
			),
			array(
				"type" => "textfield",
				"class" => "",
				"heading" => esc_html__( "Accordion Mark Border Radius", 'pitch' ),
				"param_name" => "accordion_border_radius",
				"value" => "",
				"dependency" => Array('element' => "style", 'value' => array('accordion', 'toggle'))
			),
			array(
				"type" => "textfield",
				"class" => "",
				"heading" => esc_html__( "Accordion Title Height", 'pitch' ),
				"param_name" => "accordion_section_height",
				"value" => ""
			),
			array(
				"type" => "dropdown",
				"class" => "",
				"heading" => esc_html__( "Hide Icon", 'pitch' ),
				"param_name" => "hide_icon",
				"value" => array(
					esc_html__( "No", 'pitch' ) => "no",
					esc_html__( "Yes", 'pitch' ) => "yes"
				),
				'save_always' => true
			),
			array(
				"type" => "dropdown",
				"class" => "",
				"heading" => esc_html__( "Title Alignment", 'pitch' ),
				"param_name" => "title_alignment",
				"value" => array(
					"" => "",
					esc_html__( "Left", 'pitch' ) => "left",
					esc_html__( "Right", 'pitch' ) => "right",
					esc_html__( "Center", 'pitch' ) => "center",
				),
				"dependency" => Array('element' => "hide_icon", 'value' => "yes")
			),
			array(
				"type" => "dropdown",
				"class" => "",
				"heading" => esc_html__( "Title and Icon Alignment", 'pitch' ),
				"param_name" => "title_icon_alignment",
				"value" => array(
					"" => "",
					esc_html__( "Icon on Left", 'pitch' ) => "icon_left",
					esc_html__( "Text on Left", 'pitch' ) => "text_left",
					esc_html__( "Icon and Text on Left", 'pitch' ) => "icon_left_text_left"
				),
				"description" => esc_html__( "This option is only used for boxed accordions.", 'pitch' ),
				"dependency" => Array('element' => "hide_icon", 'value' => "no")
			)
		)
	)
);

class WPBakeryShortCode_No_Accordion_Tab  extends WPBakeryShortCodesContainer {}
vc_map( array(
	"name" => esc_html__( 'Accordion Tab', 'pitch' ),
	"base" => "no_accordion_tab",
	"as_parent" => array('except' => 'vc_row'),
	"as_child" => array('only' => 'no_accordion'),
	'is_container' => true,
	"category" => esc_html__( 'by Select', 'pitch' ),
	"icon" => "icon-wpb-accordion-section extended-custom-icon",
	"show_settings_on_create" => true,
	"js_view" => 'VcColumnView',
	"params" => array_merge(
		array(
			array(
				'type' => 'textfield',
				'heading' => esc_html__( 'Title', 'pitch' ),
				'param_name' => 'title',
				'admin_label' => true,
				'value' => 'Section',
				'description' => esc_html__( 'Enter accordion section title.', 'pitch' )
			),
			array(
				'type' => 'el_id',
				'heading' => esc_html__( 'Section ID', 'pitch' ),
				'param_name' => 'el_id',
				'description' => esc_html__( 'Enter optional row ID. Make sure it is unique, and it is valid as w3c specification: http://www.w3schools.com/tags/att_global_id.asp (Must not have spaces)', 'pitch' )
			),
			array(
				"type" => "colorpicker",
				"class" => "",
				"heading" => esc_html__( "Title Color", 'pitch' ),
				"param_name" => "title_color",
				"value" => ""
			),
			array(
				"type" => "colorpicker",
				"class" => "",
				"heading" => esc_html__( "Title Hover Color", 'pitch' ),
				"param_name" => "title_hover_color",
				"value" => ""
			),
			array(
				"type" => "colorpicker",
				"class" => "",
				"heading" => esc_html__( "Mark Icon Color", 'pitch' ),
				"param_name" => "mark_icon_color",
				"value" => ""
			),
			array(
				"type" => "colorpicker",
				"class" => "",
				"heading" => esc_html__( "Mark Icon Hover Color", 'pitch' ),
				"param_name" => "mark_icon_color_hover",
				"value" => ""
			),
			array(
				"type" => "colorpicker",
				"class" => "",
				"heading" => esc_html__( "Title Background Color", 'pitch' ),
				"param_name" => "background_color",
				"value" => "",
				"description" => esc_html__( "This option is only used for boxed accordions", 'pitch' )
			),
			array(
				"type" => "colorpicker",
				"class" => "",
				"heading" => esc_html__( "Title Background Hover Color", 'pitch' ),
				"param_name" => "background_hover_color",
				"value" => "",
				"description" => esc_html__( "This option is only used for boxed accordions", 'pitch' )
			),
			array(
				"type" => "colorpicker",
				"class" => "",
				"heading" => esc_html__( "Title Border Color", 'pitch' ),
				"param_name" => "border_color",
				"value" => "",
				"description" => esc_html__( "This option is only used for boxed accordions", 'pitch' )
			),
			array(
				"type" => "colorpicker",
				"class" => "",
				"heading" => esc_html__( "Title Border Hover Color", 'pitch' ),
				"param_name" => "border_hover_color",
				"value" => "",
				"description" => esc_html__( "This option is only used for boxed accordions", 'pitch' )
			),
			array(
				"type" => "dropdown",
				"class" => "",
				"heading" => esc_html__( "Hide Icon", 'pitch' ),
				"param_name" => "hide_icon",
				"value" => array(
					esc_html__( "No", 'pitch' ) => "no",
					esc_html__( "Yes", 'pitch' ) => "yes"
				),
				'save_always' => true
			)
		),
		pitch_qode_icon_collections()->getVCParamsArray(array("element" => "hide_icon", "value" => array("no"))),
		array(
			array(
				"type" => "dropdown",
				"class" => "",
				"heading" => esc_html__( "Title Tag", 'pitch' ),
				"param_name" => "title_tag",
				"value" => array(
					""   => "",
					"p"  => "p",
					esc_html__( "h2", 'pitch' ) => "h2",
					esc_html__( "h3", 'pitch' ) => "h3",
					esc_html__( "h4", 'pitch' ) => "h4",
					esc_html__( "h5", 'pitch' ) => "h5",
					esc_html__( "h6", 'pitch' ) => "h6",
				)
			)
		)
	)

));


/*** Numbered image shortcode ***/

vc_map( array(
	"name" => esc_html__( "Numbered Image", 'pitch' ),
	"base" => "no_numbered_image",
	"category" => esc_html__( 'by Select', 'pitch' ),
	"icon" => "icon-wpb-numbered-image extended-custom-icon",
	"allowed_container_element" => 'vc_row',
	"params" => array(
		array(
			"type" => "attach_image",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Image", 'pitch' ),
			"param_name" => "image"
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Number", 'pitch' ),
			"param_name" => "number"
		),
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Number Color", 'pitch' ),
			"param_name" => "number_color"
		),
		array(
			"type" => "colorpicker",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Stripe Color", 'pitch' ),
			"param_name" => "stripe_color"
		),
	)
) );


/*** Merging Image shortcode ***/

vc_map( array(
	"name" => esc_html__( "Merging Image", 'pitch' ),
	"base" => "no_merging_image",
	"category" => esc_html__( 'by Select', 'pitch' ),
	"icon" => "icon-wpb-merging-image extended-custom-icon",
	"allowed_container_element" => 'vc_row',
	"params" => array(
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Scroll Amount (px)", 'pitch' ),
			"param_name" => "height",
			"description" => esc_html__( "How many pixels of scrolling the animation lasts. The default value adapts to smaller screens.", 'pitch' )
		),
		array(
			"type" => "attach_image",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Quicker Top Image", 'pitch' ),
			"param_name" => "ver_img_1",
			"description" => esc_html__( "This image enters the screen from top moving faster.", 'pitch' )
		),
		array(
			"type" => "attach_image",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Quicker Bottom Image", 'pitch' ),
			"param_name" => "ver_img_2",
			"description" => esc_html__( "This image enters the screen from bottom moving faster.", 'pitch' )
		),
		array(
			"type" => "attach_image",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Slower Top Image", 'pitch' ),
			"param_name" => "ver_img_3",
			"description" => esc_html__( "This image enters the screen from top moving slower.", 'pitch' )
		),
		array(
			"type" => "attach_image",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Slower Bottom Image", 'pitch' ),
			"param_name" => "ver_img_4",
			"description" => esc_html__( "This image enters the screen from bottom moving slower.", 'pitch' )
		),
		array(
			"type" => "attach_image",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Image Entering From the Left", 'pitch' ),
			"param_name" => "hor_img_1",
			"description" => esc_html__( "This image enters the screen from the left.", 'pitch' )
		),
		array(
			"type" => "attach_image",
			"holder" => "div",
			"class" => "",
			"heading" => esc_html__( "Image Entering From the Right", 'pitch' ),
			"param_name" => "hor_img_2",
			"description" => esc_html__( "This image enters the screen from the right.", 'pitch' )
		)
	)
) );

?>
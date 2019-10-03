<?php

$sidebarPage = new QodePitchAdminPage(
	"7",
	esc_html__( "Sidebar", 'pitch' ),
	"fa fa-bars"
);
$pitch_qode_framework->qodeOptions->addAdminPage(
	"sidebar",
	$sidebarPage
);

// Navigation Style

$panel1 = new PitchQodePanel(
	esc_html__( "Widgets", 'pitch' ),
	"widget_style"
);
$sidebarPage->addChild(
	"panel1",
	$panel1
);

$sidebar_background_color = new PitchQodeField(
	"color",
	"sidebar_background_color",
	"",
	esc_html__( "Sidebar Background Color", 'pitch' ),
	esc_html__( "Choose background color for sidebar", 'pitch' )
);
$panel1->addChild(
	"sidebar_background_color",
	$sidebar_background_color
);

$group6 = new PitchQodeGroup(
	esc_html__( "Padding", 'pitch' ),
	esc_html__( "Define padding for sidebar", 'pitch' )
);
$panel1->addChild(
	"group6",
	$group6
);
$row1 = new PitchQodeRow( true );
$group6->addChild(
	"row1",
	$row1
);
$sidebar_padding_top = new PitchQodeField(
	"textsimple",
	"sidebar_padding_top",
	"",
	esc_html__( "Top Padding (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"sidebar_padding_top",
	$sidebar_padding_top
);
$sidebar_padding_right = new PitchQodeField(
	"textsimple",
	"sidebar_padding_right",
	"",
	esc_html__( "Right Padding (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"sidebar_padding_right",
	$sidebar_padding_right
);
$sidebar_padding_bottom = new PitchQodeField(
	"textsimple",
	"sidebar_padding_bottom",
	"",
	esc_html__( "Bottom Padding (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"sidebar_padding_bottom",
	$sidebar_padding_bottom
);
$sidebar_padding_left = new PitchQodeField(
	"textsimple",
	"sidebar_padding_left",
	"",
	esc_html__( "Left Padding (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"sidebar_padding_left",
	$sidebar_padding_left
);

$sidebar_shadow_enable = new PitchQodeField(
	'yesno',
	'sidebar_enable_box_shadow',
	'no',
	esc_html__( 'Enable Shadow For Sidebar', 'pitch' ),
	'',
	array(),
	array(
		'dependence'             => true,
		'dependence_hide_on_yes' => '',
		'dependence_show_on_yes' => '#qodef_sidebar_shadow_container'
	)
);
$panel1->addChild(
	'sidebar_enable_box_shadow',
	$sidebar_shadow_enable
);

$sidebar_shadow_container = new PitchQodeContainer(
	'sidebar_shadow_container',
	'sidebar_enable_box_shadow',
	'no'
);
$panel1->addChild(
	'sidebar_shadow_container',
	$sidebar_shadow_container
);

$sidebar_shadow_horizontal_offset = new PitchQodeField(
	'text',
	'sidebar_shadow_horizontal_offset',
	'',
	esc_html__( 'Horizontal Offset(px)', 'pitch' ),
	esc_html__( 'Use positive numbers for right offset and negative numbers for left offset', 'pitch' ),
	array(),
	array( "col_width" => 3 )
);
$sidebar_shadow_container->addChild(
	'sidebar_shadow_horizontal_offset',
	$sidebar_shadow_horizontal_offset
);

$sidebar_shadow_vertical_offset = new PitchQodeField(
	'text',
	'sidebar_shadow_vertical_offset',
	'',
	esc_html__( 'Vertical Offset(px)', 'pitch' ),
	esc_html__( 'Use positive numbers for bottom offset and negative numbers for top offset', 'pitch' ),
	array(),
	array( "col_width" => 3 )
);
$sidebar_shadow_container->addChild(
	'sidebar_shadow_vertical_offset',
	$sidebar_shadow_vertical_offset
);

$sidebar_shadow_blur = new PitchQodeField(
	'text',
	'sidebar_shadow_blur',
	'',
	esc_html__( 'Blur(px)', 'pitch' ),
	esc_html__( 'Define amount of shadow blur in pixels', 'pitch' ),
	array(),
	array( "col_width" => 3 )
);
$sidebar_shadow_container->addChild(
	'sidebar_shadow_blur',
	$sidebar_shadow_blur
);

$sidebar_shadow_spread = new PitchQodeField(
	'text',
	'sidebar_shadow_spread',
	'',
	esc_html__( 'Spread(px)', 'pitch' ),
	esc_html__( 'Define amount of shadow spread in pixels', 'pitch' ),
	array(),
	array( "col_width" => 3 )
);
$sidebar_shadow_container->addChild(
	'sidebar_shadow_spread',
	$sidebar_shadow_spread
);

$sidebar_shadow_color = new PitchQodeField(
	'color',
	'sidebar_shadow_color',
	'',
	esc_html__( 'Color', 'pitch' ),
	esc_html__( 'Choose color of shadow', 'pitch' )
);
$sidebar_shadow_container->addChild(
	'sidebar_shadow_color',
	$sidebar_shadow_color
);

$sidebar_alignment = new PitchQodeField(
	"select",
	"sidebar_alignment",
	"",
	esc_html__( "Text Alignment", 'pitch' ),
	esc_html__( "Choose text aligment", 'pitch' ),
	array(
		"left" => esc_html__( "Left", 'pitch' ),
		"center" => esc_html__( "Center", 'pitch' ),
		"right" => esc_html__( "Right", 'pitch' )
	)
);
$panel1->addChild(
	"sidebar_alignment",
	$sidebar_alignment
);

$widget_style = new PitchQodeTitle(
	"widget_style",
	esc_html__( "Widget Style", 'pitch' )
);
$panel1->addChild(
	"widget_style",
	$widget_style
);

$widget_background_color = new PitchQodeField(
	"color",
	"widget_background_color",
	"",
	esc_html__( "Background Color", 'pitch' ),
	esc_html__( "Choose color for widget background", 'pitch' )
);
$panel1->addChild(
	"widget_background_color",
	$widget_background_color
);

$widget_border_color = new PitchQodeField(
	"color",
	"widget_border_color",
	"",
	esc_html__( "Border Color", 'pitch' ),
	esc_html__( "Choose a border color around widget", 'pitch' )
);
$panel1->addChild(
	"widget_border_color",
	$widget_border_color
);

$group1 = new PitchQodeGroup(
	esc_html__( "Padding", 'pitch' ),
	esc_html__( "Define padding for widget", 'pitch' )
);
$panel1->addChild(
	"group1",
	$group1
);
$row1 = new PitchQodeRow( true );
$group1->addChild(
	"row1",
	$row1
);
$widget_padding_top = new PitchQodeField(
	"textsimple",
	"widget_padding_top",
	"",
	esc_html__( "Top Padding (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"widget_padding_top",
	$widget_padding_top
);
$widget_padding_right = new PitchQodeField(
	"textsimple",
	"widget_padding_right",
	"",
	esc_html__( "Right Padding (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"widget_padding_right",
	$widget_padding_right
);
$widget_padding_bottom = new PitchQodeField(
	"textsimple",
	"widget_padding_bottom",
	"",
	esc_html__( "Bottom Padding (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"widget_padding_bottom",
	$widget_padding_bottom
);
$widget_padding_left = new PitchQodeField(
	"textsimple",
	"widget_padding_left",
	"",
	esc_html__( "Left Padding (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"widget_padding_left",
	$widget_padding_left
);

$sidebar_widget_enable_box_shadow = new PitchQodeField(
	'yesno',
	'sidebar_widget_enable_box_shadow',
	'no',
	esc_html__( 'Enable Shadow For Widgets', 'pitch' ),
	'',
	array(),
	array(
		'dependence'             => true,
		'dependence_hide_on_yes' => '',
		'dependence_show_on_yes' => '#qodef_sidebar_widget_shadow_container'
	)
);
$panel1->addChild(
	'sidebar_widget_enable_box_shadow',
	$sidebar_widget_enable_box_shadow
);

$sidebar_widget_shadow_container = new PitchQodeContainer(
	'sidebar_widget_shadow_container',
	'sidebar_widget_enable_box_shadow',
	'no'
);
$panel1->addChild(
	'sidebar_widget_shadow_container',
	$sidebar_widget_shadow_container
);

$sidebar_widget_shadow_horizontal_offset = new PitchQodeField(
	'text',
	'sidebar_widget_shadow_horizontal_offset',
	'',
	esc_html__( 'Horizontal Offset(px)', 'pitch' ),
	esc_html__( 'Use positive numbers for right offset and negative numbers for left offset', 'pitch' ),
	array(),
	array( "col_width" => 3 )
);
$sidebar_widget_shadow_container->addChild(
	'sidebar_widget_shadow_horizontal_offset',
	$sidebar_widget_shadow_horizontal_offset
);

$sidebar_widget_shadow_vertical_offset = new PitchQodeField(
	'text',
	'sidebar_widget_shadow_vertical_offset',
	'',
	esc_html__( 'Vertical Offset(px)', 'pitch' ),
	esc_html__( 'Use positive numbers for bottom offset and negative numbers for top offset', 'pitch' ),
	array(),
	array( "col_width" => 3 )
);
$sidebar_widget_shadow_container->addChild(
	'sidebar_widget_shadow_vertical_offset',
	$sidebar_widget_shadow_vertical_offset
);

$sidebar_widget_shadow_blur = new PitchQodeField(
	'text',
	'sidebar_widget_shadow_blur',
	'',
	esc_html__( 'Blur(px)', 'pitch' ),
	esc_html__( 'Define amount of shadow blur in pixels', 'pitch' ),
	array(),
	array( "col_width" => 3 )
);
$sidebar_widget_shadow_container->addChild(
	'sidebar_widget_shadow_blur',
	$sidebar_widget_shadow_blur
);

$sidebar_widget_shadow_spread = new PitchQodeField(
	'text',
	'sidebar_widget_shadow_spread',
	'',
	esc_html__( 'Spread(px)', 'pitch' ),
	esc_html__( 'Define amount of shadow spread in pixels', 'pitch' ),
	array(),
	array( "col_width" => 3 )
);
$sidebar_widget_shadow_container->addChild(
	'sidebar_widget_shadow_spread',
	$sidebar_widget_shadow_spread
);

$sidebar_widget_shadow_color = new PitchQodeField(
	'color',
	'sidebar_widget_shadow_color',
	'',
	esc_html__( 'Color', 'pitch' ),
	esc_html__( 'Choose color of shadow', 'pitch' )
);
$sidebar_widget_shadow_container->addChild(
	'sidebar_widget_shadow_color',
	$sidebar_widget_shadow_color
);

$widget_title = new PitchQodeTitle(
	"widget_title",
	esc_html__( "Widget Title", 'pitch' )
);
$panel1->addChild(
	"widget_title",
	$widget_title
);

$group2 = new PitchQodeGroup(
	esc_html__( "Text Style", 'pitch' ),
	esc_html__( "Define styles for widgets title", 'pitch' )
);
$panel1->addChild(
	"group2",
	$group2
);
$row1 = new PitchQodeRow();
$group2->addChild(
	"row1",
	$row1
);
$sidebar_title_color = new PitchQodeField(
	"colorsimple",
	"sidebar_title_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"sidebar_title_color",
	$sidebar_title_color
);

$sidebar_title_font_size = new PitchQodeField(
	"textsimple",
	"sidebar_title_font_size",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"sidebar_title_font_size",
	$sidebar_title_font_size
);

$sidebar_title_line_height = new PitchQodeField(
	"textsimple",
	"sidebar_title_line_height",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"sidebar_title_line_height",
	$sidebar_title_line_height
);

$sidebar_title_text_transform = new PitchQodeField(
	"selectblanksimple",
	"sidebar_title_text_transform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	"sidebar_title_text_transform",
	$sidebar_title_text_transform
);

$row2 = new PitchQodeRow( true );
$group2->addChild(
	"row2",
	$row2
);
$sidebar_title_font_family = new PitchQodeField(
	"fontsimple",
	"sidebar_title_font_family",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"sidebar_title_font_family",
	$sidebar_title_font_family
);

$sidebar_title_font_style = new PitchQodeField(
	"selectblanksimple",
	"sidebar_title_font_style",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"sidebar_title_font_style",
	$sidebar_title_font_style
);

$sidebar_title_font_weight = new PitchQodeField(
	"selectblanksimple",
	"sidebar_title_font_weight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"sidebar_title_font_weight",
	$sidebar_title_font_weight
);

$sidebar_title_letter_spacing = new PitchQodeField(
	"textsimple",
	"sidebar_title_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"sidebar_title_letter_spacing",
	$sidebar_title_letter_spacing
);

$sidebar_title_aligment = new PitchQodeField(
	"select",
	"sidebar_title_aligment",
	"",
	esc_html__( "Title Text Alignment", 'pitch' ),
	esc_html__( "Choose text alignment for widget title", 'pitch' ),
	array(
		"left" => esc_html__( "Left", 'pitch' ),
		"center" => esc_html__( "Center", 'pitch' ),
		"right" => esc_html__( "Right", 'pitch' )
	)
);
$panel1->addChild(
	"sidebar_title_aligment",
	$sidebar_title_aligment
);

$sidebar_title_background = new PitchQodeField(
	"color",
	"sidebar_title_background",
	"",
	esc_html__( "Background Color", 'pitch' ),
	esc_html__( "Choose color for background", 'pitch' )
);
$panel1->addChild(
	"sidebar_title_background",
	$sidebar_title_background
);

$sidebar_title_border_color = new PitchQodeField(
	"color",
	"sidebar_title_border_color",
	"",
	esc_html__( "Border Color", 'pitch' ),
	esc_html__( "Choose color for border", 'pitch' )
);
$panel1->addChild(
	"sidebar_title_border_color",
	$sidebar_title_border_color
);

$group8 = new PitchQodeGroup(
	esc_html__( "Padding for Title", 'pitch' ),
	esc_html__( "Define padding for title", 'pitch' )
);
$panel1->addChild(
	"group8",
	$group8
);

$row1 = new PitchQodeRow();
$group8->addChild(
	"row1",
	$row1
);

$sidebar_title_padding_top = new PitchQodeField(
	"textsimple",
	"sidebar_title_padding_top",
	"",
	esc_html__( "Top Padding (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"sidebar_title_padding_top",
	$sidebar_title_padding_top
);

$sidebar_title_padding_right = new PitchQodeField(
	"textsimple",
	"sidebar_title_padding_right",
	"",
	esc_html__( "Right Padding (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"sidebar_title_padding_right",
	$sidebar_title_padding_right
);

$sidebar_title_padding_bottom = new PitchQodeField(
	"textsimple",
	"sidebar_title_padding_bottom",
	"",
	esc_html__( "Bottom Padding (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"sidebar_title_padding_bottom",
	$sidebar_title_padding_bottom
);

$sidebar_title_padding_left = new PitchQodeField(
	"textsimple",
	"sidebar_title_padding_left",
	"",
	esc_html__( "Left Padding (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"sidebar_title_padding_left",
	$sidebar_title_padding_left
);

$group4 = new PitchQodeGroup(
	esc_html__( "Separator", 'pitch' ),
	esc_html__( "Define styles for title separator", 'pitch' )
);
$panel1->addChild(
	"group4",
	$group4
);
$row1 = new PitchQodeRow();
$group4->addChild(
	"row1",
	$row1
);
$sidebar_title_border_bottom_color = new PitchQodeField(
	"colorsimple",
	"sidebar_title_border_bottom_color",
	"",
	esc_html__( "Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"sidebar_title_border_bottom_color",
	$sidebar_title_border_bottom_color
);

$sidebar_title_border_bottom_width = new PitchQodeField(
	"textsimple",
	"sidebar_title_border_bottom_width",
	"",
	esc_html__( "Thickness (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"sidebar_title_border_bottom_width",
	$sidebar_title_border_bottom_width
);

$sidebar_title_border_bottom_padding_bottom = new PitchQodeField(
	"textsimple",
	"sidebar_title_border_bottom_padding_bottom",
	"",
	esc_html__( "Top Margin (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"sidebar_title_border_bottom_padding_bottom",
	$sidebar_title_border_bottom_padding_bottom
);

$sidebar_title_border_bottom_margin_bottom = new PitchQodeField(
	"textsimple",
	"sidebar_title_border_bottom_margin_bottom",
	"",
	esc_html__( "Bottom Margin (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"sidebar_title_border_bottom_margin_bottom",
	$sidebar_title_border_bottom_margin_bottom
);

$row2 = new PitchQodeRow();
$group4->addChild(
	"row2",
	$row2
);

$sidebar_title_border_bottom_length = new PitchQodeField(
	"textsimple",
	"sidebar_title_border_bottom_length",
	"",
	esc_html__( "Width (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"sidebar_title_border_bottom_length",
	$sidebar_title_border_bottom_length
);

$widget_text = new PitchQodeTitle(
	"widget_text",
	esc_html__( "Widget Text", 'pitch' )
);
$panel1->addChild(
	"widget_text",
	$widget_text
);

$group7 = new PitchQodeGroup(
	esc_html__( "Text Style", 'pitch' ),
	esc_html__( "Define styles for widgets text", 'pitch' )
);
$panel1->addChild(
	"group7",
	$group7
);
$row1 = new PitchQodeRow();
$group7->addChild(
	"row1",
	$row1
);
$sidebar_text_color = new PitchQodeField(
	"colorsimple",
	"sidebar_text_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"sidebar_text_color",
	$sidebar_text_color
);

$sidebar_text_font_size = new PitchQodeField(
	"textsimple",
	"sidebar_text_font_size",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"sidebar_text_font_size",
	$sidebar_text_font_size
);

$sidebar_text_line_height = new PitchQodeField(
	"textsimple",
	"sidebar_text_line_height",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"sidebar_text_line_height",
	$sidebar_text_line_height
);

$sidebar_text_text_transform = new PitchQodeField(
	"selectblanksimple",
	"sidebar_text_text_transform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	"sidebar_text_text_transform",
	$sidebar_text_text_transform
);

$row2 = new PitchQodeRow( true );
$group7->addChild(
	"row2",
	$row2
);
$sidebar_text_font_family = new PitchQodeField(
	"fontsimple",
	"sidebar_text_font_family",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"sidebar_text_font_family",
	$sidebar_text_font_family
);

$sidebar_text_font_style = new PitchQodeField(
	"selectblanksimple",
	"sidebar_text_font_style",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"sidebar_text_font_style",
	$sidebar_text_font_style
);

$sidebar_text_font_weight = new PitchQodeField(
	"selectblanksimple",
	"sidebar_text_font_weight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"sidebar_text_font_weight",
	$sidebar_text_font_weight
);

$sidebar_text_letter_spacing = new PitchQodeField(
	"textsimple",
	"sidebar_text_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"sidebar_text_letter_spacing",
	$sidebar_text_letter_spacing
);

$widget_link = new PitchQodeTitle(
	"widget_link",
	esc_html__( "Widget Link", 'pitch' )
);
$panel1->addChild(
	"widget_link",
	$widget_link
);

$group3 = new PitchQodeGroup(
	esc_html__( "Text Style", 'pitch' ),
	esc_html__( "Define styles for widget links", 'pitch' )
);
$panel1->addChild(
	"group3",
	$group3
);
$row1 = new PitchQodeRow();
$group3->addChild(
	"row1",
	$row1
);
$sidebar_link_color = new PitchQodeField(
	"colorsimple",
	"sidebar_link_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"sidebar_link_color",
	$sidebar_link_color
);

$sidebar_link_hover_color = new PitchQodeField(
	"colorsimple",
	"sidebar_link_hover_color",
	"",
	esc_html__( "Text Hover Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"sidebar_link_hover_color",
	$sidebar_link_hover_color
);

$sidebar_link_font_size = new PitchQodeField(
	"textsimple",
	"sidebar_link_font_size",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"sidebar_link_font_size",
	$sidebar_link_font_size
);

$sidebar_link_line_height = new PitchQodeField(
	"textsimple",
	"sidebar_link_line_height",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"sidebar_link_line_height",
	$sidebar_link_line_height
);

$row2 = new PitchQodeRow( true );
$group3->addChild(
	"row2",
	$row2
);

$sidebar_link_text_transform = new PitchQodeField(
	"selectblanksimple",
	"sidebar_link_text_transform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row2->addChild(
	"sidebar_link_text_transform",
	$sidebar_link_text_transform
);

$sidebar_link_font_family = new PitchQodeField(
	"fontsimple",
	"sidebar_link_font_family",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"sidebar_link_font_family",
	$sidebar_link_font_family
);

$sidebar_link_font_style = new PitchQodeField(
	"selectblanksimple",
	"sidebar_link_font_style",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"sidebar_link_font_style",
	$sidebar_link_font_style
);

$sidebar_link_font_weight = new PitchQodeField(
	"selectblanksimple",
	"sidebar_link_font_weight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"sidebar_link_font_weight",
	$sidebar_link_font_weight
);

$row3 = new PitchQodeRow( true );
$group3->addChild(
	"row3",
	$row3
);
$sidebar_link_letter_spacing = new PitchQodeField(
	"textsimple",
	"sidebar_link_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row3->addChild(
	"sidebar_link_letter_spacing",
	$sidebar_link_letter_spacing
);

$group9 = new PitchQodeGroup(
	esc_html__( "Separator Style", 'pitch' ),
	esc_html__( "Choose style for separator between links", 'pitch' )
);
$panel1->addChild(
	"group9",
	$group9
);

$row1 = new PitchQodeRow();
$group9->addChild(
	"row1",
	$row1
);

$sidebar_link_separator_color = new PitchQodeField(
	"colorsimple",
	"sidebar_link_separator_color",
	"",
	esc_html__( "Separator between links color", 'pitch' ),
	esc_html__( "Choose color for separator between color", 'pitch' )
);
$row1->addChild(
	"sidebar_link_separator_color",
	$sidebar_link_separator_color
);

$sidebar_link_separator_type = new PitchQodeField(
	"selectblanksimple",
	"sidebar_link_separator_type",
	"",
	esc_html__( "Separator between links style", 'pitch' ),
	esc_html__( "Choose style for separator", 'pitch' ),
	array(
		"solid" => esc_html__( "Solid", 'pitch' ),
		"dotted" => esc_html__( "Dotted", 'pitch' ),
		"dashed" => esc_html__( "Dashed", 'pitch' )
	)
);
$row1->addChild(
	"sidebar_link_separator_type",
	$sidebar_link_separator_type
);

$widget_elements = new PitchQodeTitle(
	"widget_elements",
	esc_html__( "Widget Elements", 'pitch' )
);
$panel1->addChild(
	"widget_elements",
	$widget_elements
);

$group5 = new PitchQodeGroup(
	esc_html__( "Search", 'pitch' ),
	esc_html__( "Define styles for search in widget", 'pitch' )
);
$panel1->addChild(
	"group5",
	$group5
);
$row1 = new PitchQodeRow();
$group5->addChild(
	"row1",
	$row1
);

$sidebar_search_height = new PitchQodeField(
	"textsimple",
	"sidebar_search_height",
	"",
	esc_html__( "Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"sidebar_search_height",
	$sidebar_search_height
);

$sidebar_search_border_color = new PitchQodeField(
	"colorsimple",
	"sidebar_search_border_color",
	"",
	esc_html__( "Border Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"sidebar_search_border_color",
	$sidebar_search_border_color
);

$sidebar_search_loupe_color = new PitchQodeField(
	"colorsimple",
	"sidebar_search_loupe_color",
	"",
	esc_html__( "Magnifier Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"sidebar_search_loupe_color",
	$sidebar_search_loupe_color
);

$sidebar_search_loupe_background_color = new PitchQodeField(
	"colorsimple",
	"sidebar_search_loupe_background_color",
	"",
	esc_html__( "Magnifier Area Background Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"sidebar_search_loupe_background_color",
	$sidebar_search_loupe_background_color
);

$row2 = new PitchQodeRow();
$group5->addChild(
	"row2",
	$row2
);
$sidebar_search_text_color = new PitchQodeField(
	"colorsimple",
	"sidebar_search_text_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"sidebar_search_text_color",
	$sidebar_search_text_color
);

$sidebar_search_focus_text_color = new PitchQodeField(
	"colorsimple",
	"sidebar_search_focus_text_color",
	"",
	esc_html__( "Focus Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"sidebar_search_focus_text_color",
	$sidebar_search_focus_text_color
);

$sidebar_search_text_font_size = new PitchQodeField(
	"textsimple",
	"sidebar_search_text_font_size",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"sidebar_search_text_font_size",
	$sidebar_search_text_font_size
);

$sidebar_search_text_line_height = new PitchQodeField(
	"textsimple",
	"sidebar_search_text_line_height",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"sidebar_search_text_line_height",
	$sidebar_search_text_line_height
);

$row3 = new PitchQodeRow( true );
$group5->addChild(
	"row3",
	$row3
);

$sidebar_search_text_text_transform = new PitchQodeField(
	"selectblanksimple",
	"sidebar_search_text_text_transform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row3->addChild(
	"sidebar_search_text_text_transform",
	$sidebar_search_text_text_transform
);

$sidebar_search_text_font_family = new PitchQodeField(
	"fontsimple",
	"sidebar_search_text_font_family",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row3->addChild(
	"sidebar_search_text_font_family",
	$sidebar_search_text_font_family
);

$sidebar_search_text_font_style = new PitchQodeField(
	"selectblanksimple",
	"sidebar_search_text_font_style",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row3->addChild(
	"sidebar_search_text_font_style",
	$sidebar_search_text_font_style
);

$sidebar_search_text_font_weight = new PitchQodeField(
	"selectblanksimple",
	"sidebar_search_text_font_weight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row3->addChild(
	"sidebar_search_text_font_weight",
	$sidebar_search_text_font_weight
);

$row4 = new PitchQodeRow( true );
$group5->addChild(
	"row4",
	$row4
);

$sidebar_search_text_letter_spacing = new PitchQodeField(
	"textsimple",
	"sidebar_search_text_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row4->addChild(
	"sidebar_search_text_letter_spacing",
	$sidebar_search_text_letter_spacing
);

$sidebar_search_border_around = new PitchQodeField(
	"selectsimple",
	"sidebar_search_border_around",
	"",
	esc_html__( "Border Around", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	array(
		"around_everything" => esc_html__( "Around Everything", 'pitch' ),
		"around_search_text" => esc_html__( "Around Search Text", 'pitch' )
	)
);
$row4->addChild(
	"sidebar_search_border_around",
	$sidebar_search_border_around
);

$widget_blog_list = new PitchQodeTitle(
	"widget_blog_list",
	esc_html__( "Widget - Select Blog", 'pitch' )
);
$panel1->addChild(
	"widget_blog_list",
	$widget_blog_list
);

$group10 = new PitchQodeGroup(
	esc_html__( "Blog List Title", 'pitch' ),
	esc_html__( "Define Blog List title style", 'pitch' )
);
$panel1->addChild(
	"group10",
	$group10
);
$row1 = new PitchQodeRow();
$group10->addChild(
	"row1",
	$row1
);

$widget_blog_list_title_color = new PitchQodeField(
	"colorsimple",
	"widget_blog_list_title_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"widget_blog_list_title_color",
	$widget_blog_list_title_color
);

$widget_blog_list_title_hover_color = new PitchQodeField(
	"colorsimple",
	"widget_blog_list_title_hover_color",
	"",
	esc_html__( "Text Hover Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"widget_blog_list_title_hover_color",
	$widget_blog_list_title_hover_color
);

$widget_blog_list_title_font_size = new PitchQodeField(
	"textsimple",
	"widget_blog_list_title_font_size",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"widget_blog_list_title_font_size",
	$widget_blog_list_title_font_size
);

$widget_blog_list_title_line_height = new PitchQodeField(
	"textsimple",
	"widget_blog_list_title_line_height",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"widget_blog_list_title_line_height",
	$widget_blog_list_title_line_height
);

$row2 = new PitchQodeRow( true );
$group10->addChild(
	"row2",
	$row2
);

$widget_blog_list_title_text_transform = new PitchQodeField(
	"selectblanksimple",
	"widget_blog_list_title_text_transform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row2->addChild(
	"widget_blog_list_title_text_transform",
	$widget_blog_list_title_text_transform
);

$widget_blog_list_title_font_family = new PitchQodeField(
	"fontsimple",
	"widget_blog_list_title_font_family",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"widget_blog_list_title_font_family",
	$widget_blog_list_title_font_family
);

$widget_blog_list_title_font_style = new PitchQodeField(
	"selectblanksimple",
	"widget_blog_list_title_font_style",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"widget_blog_list_title_font_style",
	$widget_blog_list_title_font_style
);

$widget_blog_list_title_font_weight = new PitchQodeField(
	"selectblanksimple",
	"widget_blog_list_title_font_weight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"widget_blog_list_title_font_weight",
	$widget_blog_list_title_font_weight
);

$row3 = new PitchQodeRow( true );
$group10->addChild(
	"row3",
	$row3
);

$widget_blog_list_title_letter_spacing = new PitchQodeField(
	"textsimple",
	"widget_blog_list_title_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row3->addChild(
	"widget_blog_list_title_letter_spacing",
	$widget_blog_list_title_letter_spacing
);

$group11 = new PitchQodeGroup(
	esc_html__( "Blog List Post Info", 'pitch' ),
	esc_html__( "Define blog list post info style", 'pitch' )
);
$panel1->addChild(
	"group11",
	$group11
);
$row1 = new PitchQodeRow();
$group11->addChild(
	"row1",
	$row1
);

$widget_blog_list_post_info_color = new PitchQodeField(
	"colorsimple",
	"widget_blog_list_post_info_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"widget_blog_list_post_info_color",
	$widget_blog_list_post_info_color
);

$widget_blog_list_post_info_link_color = new PitchQodeField(
	"colorsimple",
	"widget_blog_list_post_info_link_color",
	"",
	esc_html__( "Link Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"widget_blog_list_post_info_link_color",
	$widget_blog_list_post_info_link_color
);

$widget_blog_list_post_info_link_hover_color = new PitchQodeField(
	"colorsimple",
	"widget_blog_list_post_info_link_hover_color",
	"",
	esc_html__( "Link Hover Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"widget_blog_list_post_info_link_hover_color",
	$widget_blog_list_post_info_link_hover_color
);

$widget_blog_list_post_info_font_size = new PitchQodeField(
	"textsimple",
	"widget_blog_list_post_info_font_size",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"widget_blog_list_post_info_font_size",
	$widget_blog_list_post_info_font_size
);

$row2 = new PitchQodeRow( true );
$group11->addChild(
	"row2",
	$row2
);

$widget_blog_list_post_info_line_height = new PitchQodeField(
	"textsimple",
	"widget_blog_list_post_info_line_height",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"widget_blog_list_post_info_line_height",
	$widget_blog_list_post_info_line_height
);

$widget_blog_list_post_info_text_transform = new PitchQodeField(
	"selectblanksimple",
	"widget_blog_list_post_info_text_transform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row2->addChild(
	"widget_blog_list_post_info_text_transform",
	$widget_blog_list_post_info_text_transform
);

$widget_blog_list_post_info_font_family = new PitchQodeField(
	"fontsimple",
	"widget_blog_list_post_info_font_family",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"widget_blog_list_post_info_font_family",
	$widget_blog_list_post_info_font_family
);

$widget_blog_list_post_info_font_style = new PitchQodeField(
	"selectblanksimple",
	"widget_blog_list_post_info_font_style",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"widget_blog_list_post_info_font_style",
	$widget_blog_list_post_info_font_style
);

$row3 = new PitchQodeRow( true );
$group11->addChild(
	"row3",
	$row3
);

$widget_blog_list_post_info_font_weight = new PitchQodeField(
	"selectblanksimple",
	"widget_blog_list_post_info_font_weight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row3->addChild(
	"widget_blog_list_post_info_font_weight",
	$widget_blog_list_post_info_font_weight
);

$widget_blog_list_post_info_letter_spacing = new PitchQodeField(
	"textsimple",
	"widget_blog_list_post_info_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row3->addChild(
	"widget_blog_list_post_info_letter_spacing",
	$widget_blog_list_post_info_letter_spacing
);

$group12 = new PitchQodeGroup(
	esc_html__( "Blog List Date Style", 'pitch' ),
	esc_html__( "Define blog list date style", 'pitch' )
);
$panel1->addChild(
	"group12",
	$group12
);
$row1 = new PitchQodeRow();
$group12->addChild(
	"row1",
	$row1
);

$widget_blog_list_date_color = new PitchQodeField(
	"colorsimple",
	"widget_blog_list_date_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"widget_blog_list_date_color",
	$widget_blog_list_date_color
);

$widget_blog_list_date_font_size = new PitchQodeField(
	"textsimple",
	"widget_blog_list_date_font_size",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"widget_blog_list_date_font_size",
	$widget_blog_list_date_font_size
);

$widget_blog_list_date_line_height = new PitchQodeField(
	"textsimple",
	"widget_blog_list_date_line_height",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"widget_blog_list_date_line_height",
	$widget_blog_list_date_line_height
);

$widget_blog_list_date_text_transform = new PitchQodeField(
	"selectblanksimple",
	"widget_blog_list_date_text_transform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	"widget_blog_list_date_text_transform",
	$widget_blog_list_date_text_transform
);

$row2 = new PitchQodeRow( true );
$group12->addChild(
	"row2",
	$row2
);

$widget_blog_list_date_font_family = new PitchQodeField(
	"fontsimple",
	"widget_blog_list_date_font_family",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"widget_blog_list_date_font_family",
	$widget_blog_list_date_font_family
);

$widget_blog_list_date_font_style = new PitchQodeField(
	"selectblanksimple",
	"widget_blog_list_date_font_style",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"widget_blog_list_date_font_style",
	$widget_blog_list_date_font_style
);

$widget_blog_list_date_font_weight = new PitchQodeField(
	"selectblanksimple",
	"widget_blog_list_date_font_weight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"widget_blog_list_date_font_weight",
	$widget_blog_list_date_font_weight
);

$widget_blog_list_date_letter_spacing = new PitchQodeField(
	"textsimple",
	"widget_blog_list_date_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"widget_blog_list_date_letter_spacing",
	$widget_blog_list_date_letter_spacing
);

$group31 = new PitchQodeGroup(
	esc_html__( "Blog List Spacing", 'pitch' ),
	esc_html__( "Define blog list spacing", 'pitch' )
);
$panel1->addChild(
	"group31",
	$group31
);

$row1 = new PitchQodeRow( true );
$group31->addChild(
	"row1",
	$row1
);

$widget_blog_list_title_margin_bttm = new PitchQodeField(
	"textsimple",
	"widget_blog_list_title_margin_bttm",
	"",
	esc_html__( "Margin Under Title (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"widget_blog_list_title_margin_bttm",
	$widget_blog_list_title_margin_bttm
);

$widget_blog_list_post_info_margin_bttm = new PitchQodeField(
	"textsimple",
	"widget_blog_list_post_info_margin_bttm",
	"",
	esc_html__( "Margin Under Post Info (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"widget_blog_list_post_info_margin_bttm",
	$widget_blog_list_post_info_margin_bttm
);

$widget_blog_list_read_more_margin_top = new PitchQodeField(
	"textsimple",
	"widget_blog_list_read_more_margin_top",
	"",
	esc_html__( "Margin Above Read More Button (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"widget_blog_list_read_more_margin_top",
	$widget_blog_list_read_more_margin_top
);  
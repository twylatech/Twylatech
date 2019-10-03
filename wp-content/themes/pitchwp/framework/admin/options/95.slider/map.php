<?php

$sliderPage = new QodePitchAdminPage(
	"10",
	esc_html__( "Select Slider", 'pitch' ),
	"fa fa-arrows-h"
);
$pitch_qode_framework->qodeOptions->addAdminPage(
	"slider",
	$sliderPage
);

// General Style

$panel3 = new PitchQodePanel(
	esc_html__( "General Style", 'pitch' ),
	"navigation_control_style"
);
$sliderPage->addChild(
	"panel3",
	$panel3
);

$qs_slider_height_mobile = new PitchQodeField(
	"text",
	"qs_slider_height_mobile",
	"",
	esc_html__( "Slider Height For Mobile Devices (px)", 'pitch' ),
	esc_html__( "Define slider height for mobile devices", 'pitch' )
);
$panel3->addChild(
	"qs_slider_height_mobile",
	$qs_slider_height_mobile
);

$qs_slider_preloader_background = new PitchQodeField(
	"color",
	"qs_slider_preloader_background",
	"",
	esc_html__( "Slider Preloader Background Color", 'pitch' ),
	esc_html__( "Define background color for slider preloader", 'pitch' )
);
$panel3->addChild(
	"qs_slider_preloader_background",
	$qs_slider_preloader_background
);

$qs_slider_custom_word_color = new PitchQodeField(
	"color",
	"qs_slider_custom_word_color",
	"",
	esc_html__( "Title Highlited Word Color", 'pitch' ),
	esc_html__( "Define color for highlited word in title. Note: highlite the word in title like this: <span class = 'custom'> example </span>", 'pitch' )
);
$panel3->addChild(
	"qs_slider_custom_word_color",
	$qs_slider_custom_word_color
);

$qs_slider_underline_word_color = new PitchQodeField(
	"color",
	"qs_slider_underline_word_color",
	"",
	esc_html__( "Title Underlined Word Color", 'pitch' ),
	esc_html__( "Define color for underlined word in title. Note: underline the word in title like this: <span class = 'underline'> example </span>", 'pitch' )
);
$panel3->addChild(
	"qs_slider_underline_word_color",
	$qs_slider_underline_word_color
);

// Navigation Control Style

$panel2 = new PitchQodePanel(
	esc_html__( "Navigation Bullets Style", 'pitch' ),
	"navigation_control_style"
);
$sliderPage->addChild(
	"panel2",
	$panel2
);

$group1 = new PitchQodeGroup(
	esc_html__( "Colors", 'pitch' ),
	esc_html__( "Choose color styles for navigation bullets", 'pitch' )
);
$panel2->addChild(
	"group1",
	$group1
);

$row1 = new PitchQodeRow();
$group1->addChild(
	"row1",
	$row1
);

$qs_navigation_control_color = new PitchQodeField(
	"colorsimple",
	"qs_navigation_control_color",
	"",
	esc_html__( "Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"qs_navigation_control_color",
	$qs_navigation_control_color
);

$qs_navigation_control_transparency = new PitchQodeField(
	"textsimple",
	"qs_navigation_control_transparency",
	"",
	esc_html__( "Transparency (0-1)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"qs_navigation_control_transparency",
	$qs_navigation_control_transparency
);

$qs_navigation_control_active_color = new PitchQodeField(
	"colorsimple",
	"qs_navigation_control_active_color",
	"",
	esc_html__( "Active Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"qs_navigation_control_active_color",
	$qs_navigation_control_active_color
);

$qs_navigation_control_active_transparency = new PitchQodeField(
	"textsimple",
	"qs_navigation_control_active_transparency",
	"",
	esc_html__( "Active Transparency(0-1)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"qs_navigation_control_active_transparency",
	$qs_navigation_control_active_transparency
);

$group2 = new PitchQodeGroup(
	esc_html__( "Size", 'pitch' ),
	esc_html__( "Define size for navigation bullets controls (w=h in px)", 'pitch' )
);
$panel2->addChild(
	"group2",
	$group2
);

$row1 = new PitchQodeRow();
$group2->addChild(
	"row1",
	$row1
);

$qs_navigation_control_size = new PitchQodeField(
	"textsimple",
	"qs_navigation_control_size",
	"",
	esc_html__( "Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"qs_navigation_control_size",
	$qs_navigation_control_size
);

$qs_navigation_control_active_size = new PitchQodeField(
	"textsimple",
	"qs_navigation_control_active_size",
	"",
	esc_html__( "Active Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"qs_navigation_control_active_size",
	$qs_navigation_control_active_size
);

$group3 = new PitchQodeGroup(
	esc_html__( "Border Style", 'pitch' ),
	esc_html__( "Define border style for navigation bullets", 'pitch' )
);
$panel2->addChild(
	"group3",
	$group3
);

$row1 = new PitchQodeRow();
$group3->addChild(
	"row1",
	$row1
);

$qs_navigation_control_border_color = new PitchQodeField(
	"colorsimple",
	"qs_navigation_control_border_color",
	"",
	esc_html__( "Border Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"qs_navigation_control_border_color",
	$qs_navigation_control_border_color
);

$qs_navigation_control_active_border_color = new PitchQodeField(
	"colorsimple",
	"qs_navigation_control_active_border_color",
	"",
	esc_html__( "Active Border Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"qs_navigation_control_active_border_color",
	$qs_navigation_control_active_border_color
);

$qs_navigation_control_border_radius = new PitchQodeField(
	"textsimple",
	"qs_navigation_control_border_radius",
	"",
	esc_html__( "Border Radius (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"qs_navigation_control_border_radius",
	$qs_navigation_control_border_radius
);

// Custom cursor navigation style

$panel4 = new PitchQodePanel(
	esc_html__( "Custom Cursor Navigation Style", 'pitch' ),
	"navigation_custom_cursor_style"
);
$sliderPage->addChild(
	"panel4",
	$panel4
);

$qs_enable_navigation_custom_cursor = new PitchQodeField(
	"yesno",
	"qs_enable_navigation_custom_cursor",
	"no",
	esc_html__( "Enable Custom Cursor for Navigation", 'pitch' ),
	esc_html__( "Enabling this option will display custom cursors for slider navigation", 'pitch' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_qs_enable_navigation_custom_cursor_container"
	)
);
$panel4->addChild(
	"qs_enable_navigation_custom_cursor",
	$qs_enable_navigation_custom_cursor
);

$qs_enable_navigation_custom_cursor_container = new PitchQodeContainer(
	"qs_enable_navigation_custom_cursor_container",
	"qs_enable_navigation_custom_cursor",
	"no"
);
$panel4->addChild(
	"qs_enable_navigation_custom_cursor_container",
	$qs_enable_navigation_custom_cursor_container
);

$cursor_image_left_right_area_size = new PitchQodeField(
	"text",
	"cursor_image_left_right_area_size",
	"",
	esc_html__( "Clickable Left/Right Area Size (%)", 'pitch' ),
	esc_html__( "Define size of clickable left/right slider area in relation to slider width (default value is 8%)", 'pitch' ),
	array(),
	array( "col_width" => 3 )
);
$qs_enable_navigation_custom_cursor_container->addChild(
	"cursor_image_left_right_area_size",
	$cursor_image_left_right_area_size
);

$cursor_image_left_normal = new PitchQodeField(
	"image",
	"cursor_image_left_normal",
	"",
	esc_html__( "Cursor Image 'Left' - Normal", 'pitch' ),
	esc_html__( "Choose a default cursor 'Left' image to display ", 'pitch' )
);
$qs_enable_navigation_custom_cursor_container->addChild(
	"cursor_image_left_normal",
	$cursor_image_left_normal
);

$cursor_image_right_normal = new PitchQodeField(
	"image",
	"cursor_image_right_normal",
	"",
	esc_html__( "Cursor Image 'Right' - Normal", 'pitch' ),
	esc_html__( "Choose a default cursor 'Right' image to display ", 'pitch' )
);
$qs_enable_navigation_custom_cursor_container->addChild(
	"cursor_image_right_normal",
	$cursor_image_right_normal
);

$cursor_image_left_light = new PitchQodeField(
	"image",
	"cursor_image_left_light",
	"",
	esc_html__( "Cursor Image 'Left' - Light", 'pitch' ),
	esc_html__( "Choose a cursor 'Left' light image to display ", 'pitch' )
);
$qs_enable_navigation_custom_cursor_container->addChild(
	"cursor_image_left_light",
	$cursor_image_left_light
);

$cursor_image_right_light = new PitchQodeField(
	"image",
	"cursor_image_right_light",
	"",
	esc_html__( "Cursor Image 'Right' - Light", 'pitch' ),
	esc_html__( "Choose a cursor 'Right' light image to display ", 'pitch' )
);
$qs_enable_navigation_custom_cursor_container->addChild(
	"cursor_image_right_light",
	$cursor_image_right_light
);

$cursor_image_left_dark = new PitchQodeField(
	"image",
	"cursor_image_left_dark",
	"",
	esc_html__( "Cursor Image 'Left' - Dark", 'pitch' ),
	esc_html__( "Choose a cursor 'Left' dark image to display ", 'pitch' )
);
$qs_enable_navigation_custom_cursor_container->addChild(
	"cursor_image_left_dark",
	$cursor_image_left_dark
);

$cursor_image_right_dark = new PitchQodeField(
	"image",
	"cursor_image_right_dark",
	"",
	esc_html__( "Cursor Image 'Right' - Dark", 'pitch' ),
	esc_html__( "Choose a cursor 'Right' dark image to display ", 'pitch' )
);
$qs_enable_navigation_custom_cursor_container->addChild(
	"cursor_image_right_dark",
	$cursor_image_right_dark
);

$qs_enable_navigation_custom_cursor_grab = new PitchQodeField(
	"yesno",
	"qs_enable_navigation_custom_cursor_grab",
	"no",
	esc_html__( "Enable Custom Cursor for 'Grab' Arrow", 'pitch' ),
	esc_html__( "Enabling this option will display custom cursor for slider 'Grab' arrow", 'pitch' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_qs_enable_navigation_custom_cursor_grab_container"
	)
);
$qs_enable_navigation_custom_cursor_container->addChild(
	"qs_enable_navigation_custom_cursor_grab",
	$qs_enable_navigation_custom_cursor_grab
);

$qs_enable_navigation_custom_cursor_grab_container = new PitchQodeContainer(
	"qs_enable_navigation_custom_cursor_grab_container",
	"qs_enable_navigation_custom_cursor_grab",
	"no"
);
$qs_enable_navigation_custom_cursor_container->addChild(
	"qs_enable_navigation_custom_cursor_grab_container",
	$qs_enable_navigation_custom_cursor_grab_container
);

$cursor_image_grab_normal = new PitchQodeField(
	"image",
	"cursor_image_grab_normal",
	"",
	esc_html__( "Cursor Image 'Grab' - Normal", 'pitch' ),
	esc_html__( "Choose a default cursor 'Grab' image to display", 'pitch' )
);
$qs_enable_navigation_custom_cursor_grab_container->addChild(
	"cursor_image_grab_normal",
	$cursor_image_grab_normal
);

$cursor_image_grab_light = new PitchQodeField(
	"image",
	"cursor_image_grab_light",
	"",
	esc_html__( "Cursor Image 'Grab' - Light", 'pitch' ),
	esc_html__( "Choose a cursor 'Grab' light image to display", 'pitch' )
);
$qs_enable_navigation_custom_cursor_grab_container->addChild(
	"cursor_image_grab_light",
	$cursor_image_grab_light
);

$cursor_image_grab_dark = new PitchQodeField(
	"image",
	"cursor_image_grab_dark",
	"",
	esc_html__( "Cursor Image 'Grab' - Dark", 'pitch' ),
	esc_html__( "Choose a cursor 'Grab' dark image to display", 'pitch' )
);
$qs_enable_navigation_custom_cursor_grab_container->addChild(
	"cursor_image_grab_dark",
	$cursor_image_grab_dark
);
				
				
				
				
				
	
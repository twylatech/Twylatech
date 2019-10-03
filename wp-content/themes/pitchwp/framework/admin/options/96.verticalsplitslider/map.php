<?php

$verticalSplitSliderPage = new QodePitchAdminPage(
	"11",
	esc_html__( "Vertical Split Slider", 'pitch' ),
	"fa fa-arrows-v"
);
$pitch_qode_framework->qodeOptions->addAdminPage(
	"verticalSplitSlider",
	$verticalSplitSliderPage
);

// General Style

$panel10 = new PitchQodePanel(
	esc_html__( "General Style", 'pitch' ),
	"general_style"
);
$verticalSplitSliderPage->addChild(
	"panel10",
	$panel10
);

$group1 = new PitchQodeGroup(
	esc_html__( "Navigation Style", 'pitch' ),
	esc_html__( "Define style for navigation bullets", 'pitch' )
);
$panel10->addChild(
	"group1",
	$group1
);

$row1 = new PitchQodeRow();
$group1->addChild(
	"row1",
	$row1
);

$vss_navigation_inactive_color = new PitchQodeField(
	"colorsimple",
	"vss_navigation_inactive_color",
	"",
	esc_html__( "Navigation Color", 'pitch' ),
	esc_html__( "Define color for navigation dots", 'pitch' )
);
$row1->addChild(
	"vss_navigation_inactive_color",
	$vss_navigation_inactive_color
);

$vss_navigation_inactive_border_color = new PitchQodeField(
	"colorsimple",
	"vss_navigation_inactive_border_color",
	"",
	esc_html__( "Navigation Border Color", 'pitch' ),
	esc_html__( "Define border color for navigation dots", 'pitch' )
);
$row1->addChild(
	"vss_navigation_inactive_border_color",
	$vss_navigation_inactive_border_color
);

$vss_navigation_color = new PitchQodeField(
	"colorsimple",
	"vss_navigation_color",
	"",
	esc_html__( "Navigation Active Color", 'pitch' ),
	esc_html__( "Define active color for navigation dots", 'pitch' )
);
$row1->addChild(
	"vss_navigation_color",
	$vss_navigation_color
);

$vss_navigation_border_color = new PitchQodeField(
	"colorsimple",
	"vss_navigation_border_color",
	"",
	esc_html__( "Navigation Active Border Color", 'pitch' ),
	esc_html__( "Define active border color for navigation dots", 'pitch' )
);
$row1->addChild(
	"vss_navigation_border_color",
	$vss_navigation_border_color
);

$group2 = new PitchQodeGroup(
	esc_html__( "Navigation Light Style", 'pitch' ),
	esc_html__( "Define style for light navigation bullets", 'pitch' )
);
$panel10->addChild(
	"group2",
	$group2
);

$row1 = new PitchQodeRow();
$group2->addChild(
	"row1",
	$row1
);

$vss_navigation_light_inactive_color = new PitchQodeField(
	"colorsimple",
	"vss_navigation_light_inactive_color",
	"",
	esc_html__( "Navigation Color", 'pitch' ),
	esc_html__( "Define color for navigation dots", 'pitch' )
);
$row1->addChild(
	"vss_navigation_light_inactive_color",
	$vss_navigation_light_inactive_color
);

$vss_navigation_light_inactive_border_color = new PitchQodeField(
	"colorsimple",
	"vss_navigation_light_inactive_border_color",
	"",
	esc_html__( "Navigation Border Color", 'pitch' ),
	esc_html__( "Define border color for navigation dots", 'pitch' )
);
$row1->addChild(
	"vss_navigation_light_inactive_border_color",
	$vss_navigation_light_inactive_border_color
);

$vss_navigation_light_color = new PitchQodeField(
	"colorsimple",
	"vss_navigation_light_color",
	"",
	esc_html__( "Navigation Active Color", 'pitch' ),
	esc_html__( "Define active color for navigation dots", 'pitch' )
);
$row1->addChild(
	"vss_navigation_light_color",
	$vss_navigation_light_color
);

$vss_navigation_light_border_color = new PitchQodeField(
	"colorsimple",
	"vss_navigation_light_border_color",
	"",
	esc_html__( "Navigation Active Border Color", 'pitch' ),
	esc_html__( "Define active border color for navigation dots", 'pitch' )
);
$row1->addChild(
	"vss_navigation_light_border_color",
	$vss_navigation_light_border_color
);

$group3 = new PitchQodeGroup(
	esc_html__( "Navigation Dark Style", 'pitch' ),
	esc_html__( "Define style for dark navigation bullets", 'pitch' )
);
$panel10->addChild(
	"group3",
	$group3
);

$row1 = new PitchQodeRow();
$group3->addChild(
	"row1",
	$row1
);

$vss_navigation_dark_inactive_color = new PitchQodeField(
	"colorsimple",
	"vss_navigation_dark_inactive_color",
	"",
	esc_html__( "Navigation Color", 'pitch' ),
	esc_html__( "Define color for navigation dots", 'pitch' )
);
$row1->addChild(
	"vss_navigation_dark_inactive_color",
	$vss_navigation_dark_inactive_color
);

$vss_navigation_dark_inactive_border_color = new PitchQodeField(
	"colorsimple",
	"vss_navigation_dark_inactive_border_color",
	"",
	esc_html__( "Navigation Border Color", 'pitch' ),
	esc_html__( "Define border color for navigation dots", 'pitch' )
);
$row1->addChild(
	"vss_navigation_dark_inactive_border_color",
	$vss_navigation_dark_inactive_border_color
);

$vss_navigation_dark_color = new PitchQodeField(
	"colorsimple",
	"vss_navigation_dark_color",
	"",
	esc_html__( "Navigation Active Color", 'pitch' ),
	esc_html__( "Define active color for navigation dots", 'pitch' )
);
$row1->addChild(
	"vss_navigation_dark_color",
	$vss_navigation_dark_color
);

$vss_navigation_dark_border_color = new PitchQodeField(
	"colorsimple",
	"vss_navigation_dark_border_color",
	"",
	esc_html__( "Navigation Active Border Color", 'pitch' ),
	esc_html__( "Define active border color for navigation dots", 'pitch' )
);
$row1->addChild(
	"vss_navigation_dark_border_color",
	$vss_navigation_dark_border_color
);

$group4 = new PitchQodeGroup(
	esc_html__( "Navigation Size", 'pitch' ),
	esc_html__( "Define size for navigation dots", 'pitch' )
);
$panel10->addChild(
	"group4",
	$group4
);

$row1 = new PitchQodeRow();
$group4->addChild(
	"row1",
	$row1
);

$vss_navigation_size = new PitchQodeField(
	"textsimple",
	"vss_navigation_size",
	"",
	esc_html__( "Size (px)", 'pitch' ),
	esc_html__( "Define size for navigation dots", 'pitch' )
);
$row1->addChild(
	"vss_navigation_size",
	$vss_navigation_size
);

$vss_navigation_active_size = new PitchQodeField(
	"textsimple",
	"vss_navigation_active_size",
	"",
	esc_html__( "Active Size (px)", 'pitch' ),
	esc_html__( "Define active size for navigation dots", 'pitch' )
);
$row1->addChild(
	"vss_navigation_active_size",
	$vss_navigation_active_size
);

$vss_navigation_spacing_from_edge = new PitchQodeField(
	"text",
	"vss_navigation_spacing_from_edge",
	"",
	esc_html__( "Navigation Position (px)", 'pitch' ),
	esc_html__( "Define position of navigation from right/left edge of slider", 'pitch' ),
	array(),
	array( "col_width" => 1 )
);
$panel10->addChild(
	"vss_navigation_spacing_from_edge",
	$vss_navigation_spacing_from_edge
);

$vss_left_panel_size = new PitchQodeField(
	"text",
	"vss_left_panel_size",
	"",
	esc_html__( "Left Slide Panel size (%)", 'pitch' ),
	esc_html__( "Define size for left slide panel. Note that sum of left and right slide panel should be 100.", 'pitch' ),
	array(),
	array( "col_width" => 1 )
);
$panel10->addChild(
	"vss_left_panel_size",
	$vss_left_panel_size
);

$vss_right_panel_size = new PitchQodeField(
	"text",
	"vss_right_panel_size",
	"",
	esc_html__( "Right Slide Panel size (%)", 'pitch' ),
	esc_html__( "Define size for right slide panel. Note that sum of left and right slide panel should be 100.", 'pitch' ),
	array(),
	array( "col_width" => 1 )
);
$panel10->addChild(
	"vss_right_panel_size",
	$vss_right_panel_size
);


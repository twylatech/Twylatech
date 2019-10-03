<?php

$contentbottomPage = new QodePitchAdminPage(
	"16",
	esc_html__( "Content Bottom", 'pitch' ),
	"fa fa-level-down"
);
$pitch_qode_framework->qodeOptions->addAdminPage(
	esc_html__( "Content Bottom", 'pitch' ),
	$contentbottomPage
);

//Content Bottom Area

$panel1 = new PitchQodePanel(
	esc_html__( "Content Bottom Area", 'pitch' ),
	"content_bottom_area_panel"
);
$contentbottomPage->addChild(
	"panel1",
	$panel1
);

$enable_content_bottom_area = new PitchQodeField(
	"yesno",
	"enable_content_bottom_area",
	"no",
	esc_html__( "Enable Content Bottom Area", 'pitch' ),
	esc_html__( "This option will enable Content Bottom area on pages", 'pitch' ),
	array(),
	array(
		"dependence" => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_enable_content_bottom_area_container"
	)
);
$panel1->addChild(
	"enable_content_bottom_area",
	$enable_content_bottom_area
);

$enable_content_bottom_area_container = new PitchQodeContainer(
	"enable_content_bottom_area_container",
	"enable_content_bottom_area",
	"no"
);
$panel1->addChild(
	"enable_content_bottom_area_container",
	$enable_content_bottom_area_container
);

$custom_sidebars = pitch_qode_get_custom_sidebars();

$content_bottom_sidebar_custom_display = new PitchQodeField(
	"selectblank",
	"content_bottom_sidebar_custom_display",
	"",
	esc_html__( "Sidebar to Display", 'pitch' ),
	esc_html__( "Choose a Content Bottom sidebar to display", 'pitch' ),
	$custom_sidebars
);
$enable_content_bottom_area_container->addChild(
	"content_bottom_sidebar_custom_display",
	$content_bottom_sidebar_custom_display
);

$content_bottom_in_grid = new PitchQodeField(
	"yesno",
	"content_bottom_in_grid",
	"yes",
	esc_html__( "Display in Grid", 'pitch' ),
	esc_html__( "Enabling this option will place Content Bottom in grid", 'pitch' )
);
$enable_content_bottom_area_container->addChild(
	"content_bottom_in_grid",
	$content_bottom_in_grid
);

$content_bottom_background_color = new PitchQodeField(
	"color",
	"content_bottom_background_color",
	"",
	esc_html__( "Background Color", 'pitch' ),
	esc_html__( "Choose a background color for Content Bottom area", 'pitch' )
);
$enable_content_bottom_area_container->addChild(
	"content_bottom_background_color",
	$content_bottom_background_color
);
<?php

$elementsPage = new QodePitchAdminPage(
	"6",
	esc_html__( "Elements", 'pitch' ),
	"fa fa-flag-o"
);
$pitch_qode_framework->qodeOptions->addAdminPage(
	"elementsPage",
	$elementsPage
);

//Accordions and Toogles

$panel29 = new PitchQodePanel(
	esc_html__( "Accordions and  Toggles", 'pitch' ),
	"accordions_toogles_panel"
);
$elementsPage->addChild(
	"panel29",
	$panel29
);

$accordion_regular_subtitle = new PitchQodeTitle(
	"accordion_regular_subtitle",
	esc_html__( "Accordion & Toggle Title", 'pitch' )
);
$panel29->addChild(
	"accordion_regular_subtitle",
	$accordion_regular_subtitle
);

$group4 = new PitchQodeGroup(
	esc_html__( "Title Style", 'pitch' ),
	esc_html__( "Define Accordion & Toggle Title style", 'pitch' )
);
$panel29->addChild(
	"group4",
	$group4
);

$row1 = new PitchQodeRow( true );
$group4->addChild(
	"row1",
	$row1
);

$accordion_regular_title_color = new PitchQodeField(
	"colorsimple",
	"accordion_regular_title_color",
	"",
	esc_html__( "Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"accordion_regular_title_color",
	$accordion_regular_title_color
);

$accordion_regular_title_hover_color = new PitchQodeField(
	"colorsimple",
	"accordion_regular_title_hover_color",
	"",
	esc_html__( "Hover Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"accordion_regular_title_hover_color",
	$accordion_regular_title_hover_color
);

$accordion_regular_title_fontsize = new PitchQodeField(
	"textsimple",
	"accordion_regular_title_fontsize",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"accordion_regular_title_fontsize",
	$accordion_regular_title_fontsize
);

$accordion_regular_title_fontweight = new PitchQodeField(
	"selectblanksimple",
	"accordion_regular_title_fontweight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row1->addChild(
	"accordion_regular_title_fontweight",
	$accordion_regular_title_fontweight
);

$accordion_toogle_subtitle = new PitchQodeTitle(
	"accordion_toogle_subtitle",
	esc_html__( "Accordion & Toggle Boxed Title", 'pitch' )
);
$panel29->addChild(
	"accordion_toogle_subtitle",
	$accordion_toogle_subtitle
);

$group1 = new PitchQodeGroup(
	esc_html__( "Title Style", 'pitch' ),
	esc_html__( "Define Accordion & Toggle Boxed Title style", 'pitch' )
);
$panel29->addChild(
	"group1",
	$group1
);

$row1 = new PitchQodeRow( true );
$group1->addChild(
	"row1",
	$row1
);

$accordion_toogle_title_color = new PitchQodeField(
	"colorsimple",
	"accordion_toogle_title_color",
	"",
	esc_html__( "Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"accordion_toogle_title_color",
	$accordion_toogle_title_color
);

$accordion_toogle_title_hover_color = new PitchQodeField(
	"colorsimple",
	"accordion_toogle_title_hover_color",
	"",
	esc_html__( "Hover Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"accordion_toogle_title_hover_color",
	$accordion_toogle_title_hover_color
);

$accordion_toogle_title_fontsize = new PitchQodeField(
	"textsimple",
	"accordion_toogle_title_fontsize",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"accordion_toogle_title_fontsize",
	$accordion_toogle_title_fontsize
);

$accordion_toogle_title_fontweight = new PitchQodeField(
	"selectblanksimple",
	"accordion_toogle_title_fontweight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row1->addChild(
	"accordion_toogle_title_fontweight",
	$accordion_toogle_title_fontweight
);

$accordion_toogle_mark_subtitle = new PitchQodeTitle(
	"accordion_toogle_mark_subtitle",
	esc_html__( "Accordion & Toggle Mark", 'pitch' )
);
$panel29->addChild(
	"accordion_toogle_mark_subtitle",
	$accordion_toogle_mark_subtitle
);

$group2 = new PitchQodeGroup(
	esc_html__( "Mark Style", 'pitch' ),
	esc_html__( "Define mark style", 'pitch' )
);
$panel29->addChild(
	"group2",
	$group2
);

$row1 = new PitchQodeRow( true );
$group2->addChild(
	"row1",
	$row1
);

$accordion_mark_icon_color = new PitchQodeField(
	"colorsimple",
	"accordion_mark_icon_color",
	"",
	esc_html__( "Icon Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"accordion_mark_icon_color",
	$accordion_mark_icon_color
);

$accordion_mark_icon_hover_color = new PitchQodeField(
	"colorsimple",
	"accordion_mark_icon_hover_color",
	"",
	esc_html__( "Icon Hover/Active Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"accordion_mark_icon_hover_color",
	$accordion_mark_icon_hover_color
);

$accordion_mark_icon_fontsize = new PitchQodeField(
	"textsimple",
	"accordion_mark_icon_fontsize",
	"",
	esc_html__( "Icon Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"accordion_mark_icon_fontsize",
	$accordion_mark_icon_fontsize
);

$accordion_mark_icon_fontweight = new PitchQodeField(
	"selectblanksimple",
	"accordion_mark_icon_fontweight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row1->addChild(
	"accordion_mark_icon_fontweight",
	$accordion_mark_icon_fontweight
);

$row2 = new PitchQodeRow( true );
$group2->addChild(
	"row2",
	$row2
);

$accordion_mark_background_color = new PitchQodeField(
	"colorsimple",
	"accordion_mark_background_color",
	"",
	esc_html__( "Background Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"accordion_mark_background_color",
	$accordion_mark_background_color
);

$accordion_mark_background_hover_color = new PitchQodeField(
	"colorsimple",
	"accordion_mark_background_hover_color",
	"",
	esc_html__( "Background Hover/Active Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"accordion_mark_background_hover_color",
	$accordion_mark_background_hover_color
);

$row3 = new PitchQodeRow( true );
$group2->addChild(
	"row3",
	$row3
);

$accordion_mark_border_color = new PitchQodeField(
	"colorsimple",
	"accordion_mark_border_color",
	"",
	esc_html__( "Border Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row3->addChild(
	"accordion_mark_border_color",
	$accordion_mark_border_color
);

$accordion_mark_border_hover_color = new PitchQodeField(
	"colorsimple",
	"accordion_mark_border_hover_color",
	"",
	esc_html__( "Border Hover/Active Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row3->addChild(
	"accordion_mark_border_hover_color",
	$accordion_mark_border_hover_color
);

$accordion_mark_border_radius = new PitchQodeField(
	"textsimple",
	"accordion_mark_border_radius",
	"",
	esc_html__( "Border Radius", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row3->addChild(
	"accordion_mark_border_radius",
	$accordion_mark_border_radius
);

$accordion_toggle_boxed_subtitle = new PitchQodeTitle(
	"accordion_toggle_boxed_subtitle",
	esc_html__( "Accordion & Toggle Boxed Style", 'pitch' )
);
$panel29->addChild(
	"accordion_toggle_boxed_subtitle",
	$accordion_toggle_boxed_subtitle
);

$group3 = new PitchQodeGroup(
	esc_html__( "Boxed Style", 'pitch' ),
	esc_html__( "Define boxed style", 'pitch' )
);
$panel29->addChild(
	"group3",
	$group3
);

$row1 = new PitchQodeRow( true );
$group3->addChild(
	"row1",
	$row1
);

$accordion_toggle_boxed_background_color = new PitchQodeField(
	"colorsimple",
	"accordion_toggle_boxed_background_color",
	"",
	esc_html__( "Background Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"accordion_toggle_boxed_background_color",
	$accordion_toggle_boxed_background_color
);

$accordion_toggle_boxed_background_hover_color = new PitchQodeField(
	"colorsimple",
	"accordion_toggle_boxed_background_hover_color",
	"",
	esc_html__( "Background Hover/Active Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"accordion_toggle_boxed_background_hover_color",
	$accordion_toggle_boxed_background_hover_color
);

$accordion_toggle_boxed_border_color = new PitchQodeField(
	"colorsimple",
	"accordion_toggle_boxed_border_color",
	"",
	esc_html__( "Border Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"accordion_toggle_boxed_border_color",
	$accordion_toggle_boxed_border_color
);

$accordion_toggle_boxed_border_hover_color = new PitchQodeField(
	"colorsimple",
	"accordion_toggle_boxed_border_hover_color",
	"",
	esc_html__( "Border Hover/Active Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"accordion_toggle_boxed_border_hover_color",
	$accordion_toggle_boxed_border_hover_color
);

$row2 = new PitchQodeRow( true );
$group3->addChild(
	"row2",
	$row2
);

$accordion_toggle_boxed_border_radius = new PitchQodeField(
	"textsimple",
	"accordion_toggle_boxed_border_radius",
	"",
	esc_html__( "Border Radius", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"accordion_toggle_boxed_border_radius",
	$accordion_toggle_boxed_border_radius
);

$accordion_toggle_boxed_background_pattern = new PitchQodeField(
	"yesno",
	"accordion_toggle_boxed_background_pattern",
	"no",
	esc_html__( "Boxed Style Pattern", 'pitch' ),
	"Enabling this option will add pattern background to boxed style.
		",
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_accordion_toggle_boxed_background_pattern_image_container"
	)
);
$panel29->addChild(
	"accordion_toggle_boxed_background_pattern",
	$accordion_toggle_boxed_background_pattern
);

$accordion_toggle_boxed_background_pattern_image_container = new PitchQodeContainer(
	"accordion_toggle_boxed_background_pattern_image_container",
	"accordion_toggle_boxed_background_pattern",
	"no"
);
$panel29->addChild(
	"accordion_toggle_boxed_background_pattern_image_container",
	$accordion_toggle_boxed_background_pattern_image_container
);

$group27 = new PitchQodeGroup(
	esc_html__( "Image", 'pitch' ),
	esc_html__( "Choose pattern image for boxed style", 'pitch' )
);
$accordion_toggle_boxed_background_pattern_image_container->addChild(
	"group27",
	$group27
);
$row3 = new PitchQodeRow();
$group27->addChild(
	"row3",
	$row3
);

$accordion_toggle_boxed_background_pattern_image = new PitchQodeField(
	"imagesimple",
	"accordion_toggle_boxed_background_pattern_image",
	"",
	esc_html__( "Pattern image", 'pitch' ),
	""
);
$row3->addChild(
	"accordion_toggle_boxed_background_pattern_image",
	$accordion_toggle_boxed_background_pattern_image
);

$group5 = new PitchQodeGroup(
	esc_html__( "Mark Style", 'pitch' ),
	esc_html__( "Define mark style", 'pitch' )
);
$panel29->addChild(
	"group5",
	$group5
);

$row1 = new PitchQodeRow( true );
$group5->addChild(
	"row1",
	$row1
);

$accordion_boxed_mark_icon_color = new PitchQodeField(
	"colorsimple",
	"accordion_boxed_mark_icon_color",
	"",
	esc_html__( "Icon Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"accordion_boxed_mark_icon_color",
	$accordion_boxed_mark_icon_color
);

$accordion_boxed_mark_icon_hover_color = new PitchQodeField(
	"colorsimple",
	"accordion_boxed_mark_icon_hover_color",
	"",
	esc_html__( "Icon Hover/Active Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"accordion_boxed_mark_icon_hover_color",
	$accordion_boxed_mark_icon_hover_color
);

$accordion_boxed_mark_icon_fontsize = new PitchQodeField(
	"textsimple",
	"accordion_boxed_mark_icon_fontsize",
	"",
	esc_html__( "Icon Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"accordion_boxed_mark_icon_fontsize",
	$accordion_boxed_mark_icon_fontsize
);

$accordion_boxed_mark_icon_fontweight = new PitchQodeField(
	"selectblanksimple",
	"accordion_boxed_mark_icon_fontweight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row1->addChild(
	"accordion_boxed_mark_icon_fontweight",
	$accordion_boxed_mark_icon_fontweight
);

$row2 = new PitchQodeRow( true );
$group5->addChild(
	"row2",
	$row2
);

$accordion_boxed_mark_background_color = new PitchQodeField(
	"colorsimple",
	"accordion_boxed_mark_background_color",
	"",
	esc_html__( "Background Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"accordion_boxed_mark_background_color",
	$accordion_boxed_mark_background_color
);

$accordion_boxed_mark_background_hover_color = new PitchQodeField(
	"colorsimple",
	"accordion_boxed_mark_background_hover_color",
	"",
	esc_html__( "Background Hover/Active Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"accordion_boxed_mark_background_hover_color",
	$accordion_boxed_mark_background_hover_color
);

$row3 = new PitchQodeRow( true );
$group5->addChild(
	"row3",
	$row3
);

$accordion_boxed_mark_border_color = new PitchQodeField(
	"colorsimple",
	"accordion_boxed_mark_border_color",
	"",
	esc_html__( "Border Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row3->addChild(
	"accordion_boxed_mark_border_color",
	$accordion_boxed_mark_border_color
);

$accordion_boxed_mark_border_hover_color = new PitchQodeField(
	"colorsimple",
	"accordion_boxed_mark_border_hover_color",
	"",
	esc_html__( "Border Hover/Active Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row3->addChild(
	"accordion_boxed_mark_border_hover_color",
	$accordion_boxed_mark_border_hover_color
);

$accordion_boxed_mark_border_radius = new PitchQodeField(
	"textsimple",
	"accordion_boxed_mark_border_radius",
	"",
	esc_html__( "Border Radius", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row3->addChild(
	"accordion_boxed_mark_border_radius",
	$accordion_boxed_mark_border_radius
);

//Back to top

$panel1 = new PitchQodePanel(
	"esc_html__( 'Back to Top', 'pitch' ) Link Button",
	"back_to_top_panel"
);
$elementsPage->addChild(
	"panel1",
	$panel1
);

$back_to_top_button_type = new PitchQodeField(
	"select",
	"back_to_top_button_type",
	"square",
	esc_html__( "Button Type", 'pitch' ),
	esc_html__( 'Choose "Back to Top" button type ', 'pitch' ),
	array(
		"square" => esc_html__( "Square", 'pitch' ),
		"triangle" => esc_html__( "Triangle", 'pitch' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			"square"   => "#qodef_back_to_top_type_triangle_container",
			"triangle" => "#qodef_back_to_top_type_square_container"
		),
		"show"       => array(
			"square"   => "#qodef_back_to_top_type_square_container",
			"triangle" => "#qodef_back_to_top_type_triangle_container"
		)
	)
);
$panel1->addChild(
	"back_to_top_button_type",
	$back_to_top_button_type
);

$back_to_top_type_square_container = new PitchQodeContainer(
	"back_to_top_type_square_container",
	"back_to_top_button_type",
	"triangle"
);
$panel1->addChild(
	"back_to_top_type_square_container",
	$back_to_top_type_square_container
);

$group1 = new PitchQodeGroup(
	esc_html__( "Background", 'pitch' ),
	esc_html__( 'Choose background for "Back to Top"', 'pitch' )
);
$back_to_top_type_square_container->addChild(
	"group1",
	$group1
);
$row1 = new PitchQodeRow();
$group1->addChild(
	"row1",
	$row1
);

$back_to_top_background_color = new PitchQodeField(
	"colorsimple",
	"back_to_top_background_color",
	"",
	esc_html__( "Background Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"back_to_top_background_color",
	$back_to_top_background_color
);

$back_to_top_background_hover_color = new PitchQodeField(
	"colorsimple",
	"back_to_top_background_hover_color",
	"",
	esc_html__( "Background Hover Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"back_to_top_background_hover_color",
	$back_to_top_background_hover_color
);

$back_to_top_background_transparency = new PitchQodeField(
	"textsimple",
	"back_to_top_background_transparency",
	"",
	esc_html__( "Background Transparency (0-1)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"back_to_top_background_transparency",
	$back_to_top_background_transparency
);

$back_to_top_background_hover_transparency = new PitchQodeField(
	"textsimple",
	"back_to_top_background_hover_transparency",
	"",
	esc_html__( "Background Hover Transparency (0-1)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"back_to_top_background_hover_transparency",
	$back_to_top_background_hover_transparency
);

$group2 = new PitchQodeGroup(
	esc_html__( "Border", 'pitch' ),
	esc_html__( "Choose Border style for Back to Top", 'pitch' )
);
$back_to_top_type_square_container->addChild(
	"group2",
	$group2
);

$row1 = new PitchQodeRow();
$group2->addChild(
	"row1",
	$row1
);

$back_to_top_border_color = new PitchQodeField(
	"colorsimple",
	"back_to_top_border_color",
	"",
	esc_html__( "Border Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"back_to_top_border_color",
	$back_to_top_border_color
);

$back_to_top_border_hover_color = new PitchQodeField(
	"colorsimple",
	"back_to_top_border_hover_color",
	"",
	esc_html__( "Border Hover Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"back_to_top_border_hover_color",
	$back_to_top_border_hover_color
);

$back_to_top_border_width = new PitchQodeField(
	"textsimple",
	"back_to_top_border_width",
	"",
	esc_html__( "Border Width (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"back_to_top_border_width",
	$back_to_top_border_width
);

$back_to_top_border_radius = new PitchQodeField(
	"textsimple",
	"back_to_top_border_radius",
	"",
	esc_html__( "Border Radius (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"back_to_top_border_radius",
	$back_to_top_border_radius
);

$row2 = new PitchQodeRow( true );
$group2->addChild(
	"row2",
	$row2
);

$back_to_top_border_transparency = new PitchQodeField(
	"textsimple",
	"back_to_top_border_transparency",
	"",
	esc_html__( "Border Transparency (0-1)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"back_to_top_border_transparency",
	$back_to_top_border_transparency
);

$back_to_top_border_hover_transparency = new PitchQodeField(
	"textsimple",
	"back_to_top_border_hover_transparency",
	"",
	esc_html__( "Border Hover Transparency (0-1)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"back_to_top_border_hover_transparency",
	$back_to_top_border_hover_transparency
);

$group3 = new PitchQodeGroup(
	esc_html__( "Button Size", 'pitch' ),
	esc_html__( 'Choose Size for "Back to Top" button', 'pitch' )
);
$back_to_top_type_square_container->addChild(
	"group3",
	$group3
);

$row1 = new PitchQodeRow();
$group3->addChild(
	"row1",
	$row1
);

$back_to_top_height = new PitchQodeField(
	"textsimple",
	"back_to_top_height",
	"",
	esc_html__( "Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"back_to_top_height",
	$back_to_top_height
);
$back_to_top_width = new PitchQodeField(
	"textsimple",
	"back_to_top_width",
	"",
	esc_html__( "Width (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"back_to_top_width",
	$back_to_top_width
);

$group4 = new PitchQodeGroup(
	esc_html__( "Button Position", 'pitch' ),
	esc_html__( 'Define button alignment and margin bottom', 'pitch' )
);
$back_to_top_type_square_container->addChild(
	"group4",
	$group4
);

$row1 = new PitchQodeRow();
$group4->addChild(
	"row1",
	$row1
);

$back_to_top_position = new PitchQodeField(
	"selectsimple",
	"back_to_top_position",
	"",
	esc_html__( "Button Alignment", 'pitch' ),
	esc_html__( 'Choose alignment for "Back to Top" button', 'pitch' ),
	array(
		"right" => esc_html__( "Right", 'pitch' ),
		"left" => esc_html__( "Left", 'pitch' ),
		"center" => esc_html__( "Center", 'pitch' ),
	)
);
$row1->addChild(
	"back_to_top_position",
	$back_to_top_position
);

$back_to_top_button_margin_bottom = new PitchQodeField(
	"textsimple",
	"back_to_top_button_margin_bottom",
	"",
	esc_html__( "Margin Bottom (px)", 'pitch' ),
	esc_html__( "Enter bottom margin", 'pitch' )
);
$row1->addChild(
	"back_to_top_button_margin_bottom",
	$back_to_top_button_margin_bottom
);

$back_to_top_type = new PitchQodeField(
	"select",
	"back_to_top_type",
	"arrow",
	esc_html__( "Button Text Type", 'pitch' ),
	esc_html__( 'Choose "Back to Top" button type ', 'pitch' ),
	array(
		"arrow" => esc_html__( "Arrow", 'pitch' ),
		"text" => esc_html__( "Text", 'pitch' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			"arrow" => "#qodef_back_to_top_type_text_container",
			"text"  => "#qodef_back_to_top_type_arrow_container"
		),
		"show"       => array(
			"arrow" => "#qodef_back_to_top_type_arrow_container",
			"text"  => "#qodef_back_to_top_type_text_container"
		)
	)
);
$back_to_top_type_square_container->addChild(
	"back_to_top_type",
	$back_to_top_type
);

$back_to_top_type_arrow_container = new PitchQodeContainer(
	"back_to_top_type_arrow_container",
	"back_to_top_type",
	"text"
);
$back_to_top_type_square_container->addChild(
	"back_to_top_type_arrow_container",
	$back_to_top_type_arrow_container
);

$group1 = new PitchQodeGroup(
	esc_html__( "Arrow Icon Style", 'pitch' ),
	esc_html__( "Define style for arrow icon", 'pitch' )
);
$back_to_top_type_arrow_container->addChild(
	"group1",
	$group1
);

$row1 = new PitchQodeRow();
$group1->addChild(
	"row1",
	$row1
);

$show_back_button_icon = new PitchQodeField(
	'selectsimple',
	'show_back_button_icon',
	'',
	esc_html__( 'Choose Icon', 'pitch' ),
	esc_html__( 'Choose Icon', 'pitch' ),
	pitch_qode_get_options_value_by_name( 'arrows_up_type' )
);
$row1->addChild(
	'show_back_button_icon',
	$show_back_button_icon
);

$back_to_top_arrow_size = new PitchQodeField(
	"textsimple",
	"back_to_top_arrow_size",
	"14",
	esc_html__( "Icon Size (px)", 'pitch' ),
	esc_html__( "Default value is 14	", 'pitch' )
);
$row1->addChild(
	"back_to_top_arrow_size",
	$back_to_top_arrow_size
);

$back_to_top_arrow_color = new PitchQodeField(
	"colorsimple",
	"back_to_top_arrow_color",
	"",
	esc_html__( "Icon Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"back_to_top_arrow_color",
	$back_to_top_arrow_color
);

$back_to_top_arrow_hover_color = new PitchQodeField(
	"colorsimple",
	"back_to_top_arrow_hover_color",
	"",
	esc_html__( "Icon Hover Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"back_to_top_arrow_hover_color",
	$back_to_top_arrow_hover_color
);

$back_to_top_type_text_container = new PitchQodeContainer(
	"back_to_top_type_text_container",
	"back_to_top_type",
	"arrow"
);
$back_to_top_type_square_container->addChild(
	"back_to_top_type_text_container",
	$back_to_top_type_text_container
);

$back_to_top_text = new PitchQodeField(
	"text",
	"back_to_top_text",
	"",
	esc_html__( "Back to Top Text", 'pitch' ),
	esc_html__( "Enter text for 'Back to Top' button", 'pitch' )
);
$back_to_top_type_text_container->addChild(
	"back_to_top_text",
	$back_to_top_text
);

$group1 = new PitchQodeGroup(
	esc_html__( "Button Text Color", 'pitch' ),
	esc_html__( "Define Color for Text Type", 'pitch' )
);
$back_to_top_type_text_container->addChild(
	"group1",
	$group1
);

$row1 = new PitchQodeRow();
$group1->addChild(
	"row1",
	$row1
);

$back_to_top_text_color = new PitchQodeField(
	"colorsimple",
	"back_to_top_text_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"back_to_top_text_color",
	$back_to_top_text_color
);

$back_to_top_text_hover_color = new PitchQodeField(
	"colorsimple",
	"back_to_top_text_hover_color",
	"",
	esc_html__( "Text Hover Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"back_to_top_text_hover_color",
	$back_to_top_text_hover_color
);

$group2 = new PitchQodeGroup(
	esc_html__( "Button Text Style", 'pitch' ),
	esc_html__( "Define Style for Text Type", 'pitch' )
);
$back_to_top_type_text_container->addChild(
	"group2",
	$group2
);

$row1 = new PitchQodeRow();
$group2->addChild(
	"row1",
	$row1
);

$back_to_top_text_fontsize = new PitchQodeField(
	"textsimple",
	"back_to_top_text_fontsize",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"back_to_top_text_fontsize",
	$back_to_top_text_fontsize
);

$back_to_top_text_lineheight = new PitchQodeField(
	"textsimple",
	"back_to_top_text_lineheight",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"back_to_top_text_lineheight",
	$back_to_top_text_lineheight
);

$back_to_top_text_texttransform = new PitchQodeField(
	"selectblanksimple",
	"back_to_top_text_texttransform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	"back_to_top_text_texttransform",
	$back_to_top_text_texttransform
);

$back_to_top_text_fontfamily = new PitchQodeField(
	"fontsimple",
	"back_to_top_text_fontfamily",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"back_to_top_text_fontfamily",
	$back_to_top_text_fontfamily
);

$row2 = new PitchQodeRow();
$group2->addChild(
	"row2",
	$row2
);

$back_to_top_text_fontstyle = new PitchQodeField(
	"selectblanksimple",
	"back_to_top_text_fontstyle",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"back_to_top_text_fontstyle",
	$back_to_top_text_fontstyle
);

$back_to_top_text_fontweight = new PitchQodeField(
	"selectblanksimple",
	"back_to_top_text_fontweight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"back_to_top_text_fontweight",
	$back_to_top_text_fontweight
);

$back_to_top_text_letterspacing = new PitchQodeField(
	"textsimple",
	"back_to_top_text_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"back_to_top_text_letterspacing",
	$back_to_top_text_letterspacing
);

$back_to_top_type_triangle_container = new PitchQodeContainer(
	"back_to_top_type_triangle_container",
	"back_to_top_button_type",
	"square"
);
$panel1->addChild(
	"back_to_top_type_triangle_container",
	$back_to_top_type_triangle_container
);

$back_to_top_triangle_text = new PitchQodeField(
	"text",
	"back_to_top_triangle_text",
	"",
	esc_html__( "Back to Top Text", 'pitch' ),
	esc_html__( "Enter text for 'Back to Top' button", 'pitch' )
);
$back_to_top_type_triangle_container->addChild(
	"back_to_top_triangle_text",
	$back_to_top_triangle_text
);

$group1 = new PitchQodeGroup(
	esc_html__( "Background Color", 'pitch' ),
	esc_html__( 'Choose background for "Back to Top"', 'pitch' )
);
$back_to_top_type_triangle_container->addChild(
	"group1",
	$group1
);

$row1 = new PitchQodeRow();
$group1->addChild(
	"row1",
	$row1
);

$back_to_top_triangle_background_color = new PitchQodeField(
	"colorsimple",
	"back_to_top_triangle_background_color",
	"",
	esc_html__( "Background Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"back_to_top_triangle_background_color",
	$back_to_top_triangle_background_color
);

$group2 = new PitchQodeGroup(
	esc_html__( "Button Text Color", 'pitch' ),
	esc_html__( "Define text style for button", 'pitch' )
);
$back_to_top_type_triangle_container->addChild(
	"group2",
	$group2
);

$row1 = new PitchQodeRow();
$group2->addChild(
	"row1",
	$row1
);

$back_to_top_triangle_text_color = new PitchQodeField(
	"colorsimple",
	"back_to_top_triangle_text_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"back_to_top_triangle_text_color",
	$back_to_top_triangle_text_color
);

$back_to_top_triangle_text_hover_color = new PitchQodeField(
	"colorsimple",
	"back_to_top_triangle_text_hover_color",
	"",
	esc_html__( "Text Hover Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"back_to_top_triangle_text_hover_color",
	$back_to_top_triangle_text_hover_color
);

$group3 = new PitchQodeGroup(
	esc_html__( "Button Text Style", 'pitch' ),
	esc_html__( "Define Style for Text Type", 'pitch' )
);
$back_to_top_type_triangle_container->addChild(
	"group3",
	$group3
);

$row1 = new PitchQodeRow();
$group3->addChild(
	"row1",
	$row1
);

$back_to_top_triangle_text_fontsize = new PitchQodeField(
	"textsimple",
	"back_to_top_triangle_text_fontsize",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"back_to_top_triangle_text_fontsize",
	$back_to_top_triangle_text_fontsize
);

$back_to_top_triangle_text_lineheight = new PitchQodeField(
	"textsimple",
	"back_to_top_triangle_text_lineheight",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"back_to_top_triangle_text_lineheight",
	$back_to_top_triangle_text_lineheight
);

$back_to_top_triangle_text_texttransform = new PitchQodeField(
	"selectblanksimple",
	"back_to_top_triangle_text_texttransform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	"back_to_top_triangle_text_texttransform",
	$back_to_top_triangle_text_texttransform
);

$back_to_top_triangle_text_fontfamily = new PitchQodeField(
	"fontsimple",
	"back_to_top_triangle_text_fontfamily",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"back_to_top_triangle_text_fontfamily",
	$back_to_top_triangle_text_fontfamily
);

$row2 = new PitchQodeRow();
$group3->addChild(
	"row2",
	$row2
);

$back_to_top_triangle_text_fontstyle = new PitchQodeField(
	"selectblanksimple",
	"back_to_top_triangle_text_fontstyle",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"back_to_top_triangle_text_fontstyle",
	$back_to_top_triangle_text_fontstyle
);

$back_to_top_triangle_text_fontweight = new PitchQodeField(
	"selectblanksimple",
	"back_to_top_triangle_text_fontweight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"back_to_top_triangle_text_fontweight",
	$back_to_top_triangle_text_fontweight
);

$back_to_top_triangle_text_letterspacing = new PitchQodeField(
	"textsimple",
	"back_to_top_triangle_text_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"back_to_top_triangle_text_letterspacing",
	$back_to_top_triangle_text_letterspacing
);

//Buttons

$panel2 = new PitchQodePanel(
	esc_html__( "Buttons", 'pitch' ),
	"buttons_panel"
);
$elementsPage->addChild(
	"panel2",
	$panel2
);

$button_default_section = new PitchQodeTitle(
	"button_default_section",
	esc_html__( "Default Button", 'pitch' )
);
$panel2->addChild(
	"button_default_section",
	$button_default_section
);

$group1 = new PitchQodeGroup(
	esc_html__( "Text Style", 'pitch' ),
	esc_html__( "Define text style", 'pitch' )
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
$button_title_google_fonts = new PitchQodeField(
	"fontsimple",
	"button_title_google_fonts",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"button_title_google_fonts",
	$button_title_google_fonts
);

$button_title_fontsize = new PitchQodeField(
	"textsimple",
	"button_title_fontsize",
	"",
	esc_html__( "Text Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"button_title_fontsize",
	$button_title_fontsize
);

$button_title_fontstyle = new PitchQodeField(
	"selectblanksimple",
	"button_title_fontstyle",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row1->addChild(
	"button_title_fontstyle",
	$button_title_fontstyle
);

$button_title_fontweight = new PitchQodeField(
	"selectblanksimple",
	"button_title_fontweight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row1->addChild(
	"button_title_fontweight",
	$button_title_fontweight
);

$row2 = new PitchQodeRow( true );
$group1->addChild(
	"row2",
	$row2
);
$button_title_letter_spacing = new PitchQodeField(
	"textsimple",
	"button_title_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"button_title_letter_spacing",
	$button_title_letter_spacing
);

$button_title_lineheight = new PitchQodeField(
	"textsimple",
	"button_title_lineheight",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"button_title_lineheight",
	$button_title_lineheight
);

$button_title_color = new PitchQodeField(
	"colorsimple",
	"button_title_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"button_title_color",
	$button_title_color
);

$button_title_hovercolor = new PitchQodeField(
	"colorsimple",
	"button_title_hovercolor",
	"",
	esc_html__( "Hover Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"button_title_hovercolor",
	$button_title_hovercolor
);

$row3 = new PitchQodeRow( true );
$group1->addChild(
	"row3",
	$row3
);

$button_title_texttransform = new PitchQodeField(
	"selectblanksimple",
	"button_title_texttransform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row3->addChild(
	"button_title_texttransform",
	$button_title_texttransform
);

$group21 = new PitchQodeGroup(
	esc_html__( "Icon Style", 'pitch' ),
	esc_html__( "Define icon style", 'pitch' )
);
$panel2->addChild(
	"group21",
	$group21
);
$row1 = new PitchQodeRow();
$group21->addChild(
	"row1",
	$row1
);

$button_icon_size = new PitchQodeField(
	"textsimple",
	"button_icon_size",
	"",
	esc_html__( "Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"button_icon_size",
	$button_icon_size
);

$group2 = new PitchQodeGroup(
	esc_html__( "Background", 'pitch' ),
	esc_html__( "Define background", 'pitch' )
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

$button_backgroundcolor = new PitchQodeField(
	"colorsimple",
	"button_backgroundcolor",
	"",
	esc_html__( "Background Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"button_backgroundcolor",
	$button_backgroundcolor
);

$button_backgroundcolor_hover = new PitchQodeField(
	"colorsimple",
	"button_backgroundcolor_hover",
	"",
	esc_html__( "Background Hover Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"button_backgroundcolor_hover",
	$button_backgroundcolor_hover
);

$button_background_pattern_image = new PitchQodeField(
	"imagesimple",
	"button_background_pattern_image",
	"",
	esc_html__( "Pattern image", 'pitch' ),
	""
);
$row1->addChild(
	"button_background_pattern_image",
	$button_background_pattern_image
);

$group3 = new PitchQodeGroup(
	esc_html__( "Border Style", 'pitch' ),
	esc_html__( "Define border style", 'pitch' )
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

$button_border_color = new PitchQodeField(
	"colorsimple",
	"button_border_color",
	"",
	esc_html__( "Border Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"button_border_color",
	$button_border_color
);

$button_border_hover_color = new PitchQodeField(
	"colorsimple",
	"button_border_hover_color",
	"",
	esc_html__( "Border Hover Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"button_border_hover_color",
	$button_border_hover_color
);

$button_border_width = new PitchQodeField(
	"textsimple",
	"button_border_width",
	"",
	esc_html__( "Border Width (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"button_border_width",
	$button_border_width
);

$button_border_radius = new PitchQodeField(
	"textsimple",
	"button_border_radius",
	"",
	esc_html__( "Border Radius (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"button_border_radius",
	$button_border_radius
);

$button_padding = new PitchQodeField(
	"text",
	"button_padding",
	"",
	esc_html__( "Padding Left/Right (px) ", 'pitch' ),
	esc_html__( "Define padding", 'pitch' ),
	array(),
	array( "col_width" => 3 )
);
$panel2->addChild(
	"button_padding",
	$button_padding
);

$button_hover_animation = new PitchQodeField(
	"selectblank",
	"button_hover_animation",
	"",
	esc_html__( "Button Hover Animation", 'pitch' ),
	esc_html__( "Choose a hover animation for button", 'pitch' ),
	array(
		"fill_from_top" => esc_html__( "Fill From Top", 'pitch' ),
		"fill_from_left" => esc_html__( "Fill From Left", 'pitch' ),
		"fill_from_bottom" => esc_html__( "Fill From Bottom", 'pitch' ),
	)
);
$panel2->addChild(
	"button_hover_animation",
	$button_hover_animation
);

$button_box_shadows = new PitchQodeField(
	'yesno',
	'button_box_shadows',
	'no',
	esc_html__( 'Show Button Shadows', 'pitch' ),
	esc_html__( 'Enabling this option will show button shadows', 'pitch' ),
	array(),
	array(
		'dependence'             => true,
		'dependence_hide_on_yes' => '',
		'dependence_show_on_yes' => '#qodef_button_box_shadows_container'
	)
);
$panel2->addChild(
	'button_box_shadows',
	$button_box_shadows
);

$button_box_shadows_container = new PitchQodeContainer(
	'button_box_shadows_container',
	'button_box_shadows',
	'no'
);
$panel2->addChild(
	'button_box_shadows_container',
	$button_box_shadows_container
);

$group4 = new PitchQodeGroup(
	esc_html__( 'Button Shadows', 'pitch' ),
	esc_html__( 'Set horizontal and vertical position of shadow (negative values are allowed), and define blur and spread.', 'pitch' )
);
$button_box_shadows_container->addChild(
	'group4',
	$group4
);

$row1 = new PitchQodeRow();
$group4->addChild(
	'row1',
	$row1
);

$button_box_shadow_horizontal_shadow = new PitchQodeField(
	'textsimple',
	'button_box_shadow_horizontal_shadow',
	'',
	esc_html__( 'Horizontal Shadow (px)', 'pitch' )
);
$row1->addChild(
	'button_box_shadow_horizontal_shadow',
	$button_box_shadow_horizontal_shadow
);

$button_box_shadow_vertical_shadow = new PitchQodeField(
	'textsimple',
	'button_box_shadow_vertical_shadow',
	'',
	esc_html__( 'Vertical Shadow (px)', 'pitch' )
);
$row1->addChild(
	'button_box_shadow_vertical_shadow',
	$button_box_shadow_vertical_shadow
);

$button_box_shadow_blur_distance = new PitchQodeField(
	'textsimple',
	'button_box_shadow_blur_distance',
	'',
	esc_html__( 'Blur (px)', 'pitch' )
);
$row1->addChild(
	'button_box_shadow_blur_distance',
	$button_box_shadow_blur_distance
);

$button_box_shadow_shadow_size = new PitchQodeField(
	'textsimple',
	'button_box_shadow_shadow_size',
	'',
	esc_html__( 'Spread (px)', 'pitch' )
);
$row1->addChild(
	'button_box_shadow_shadow_size',
	$button_box_shadow_shadow_size
);

$row2 = new PitchQodeRow( true );
$group4->addChild(
	'row2',
	$row2
);

$button_box_shadow_shadow_color = new PitchQodeField(
	'colorsimple',
	'button_box_shadow_shadow_color',
	'',
	esc_html__( 'Shadow color', 'pitch' )
);
$row2->addChild(
	'button_box_shadow_shadow_color',
	$button_box_shadow_shadow_color
);

$button_predefined_white_section = new PitchQodeTitle(
	"button_predefined_white_section",
	esc_html__( "Predefined White Button", 'pitch' )
);
$panel2->addChild(
	"button_predefined_white_section",
	$button_predefined_white_section
);

$group5 = new PitchQodeGroup(
	esc_html__( "Text Style", 'pitch' ),
	esc_html__( "Define text style.", 'pitch' )
);
$panel2->addChild(
	"group5",
	$group5
);
$row1 = new PitchQodeRow();
$group5->addChild(
	"row1",
	$row1
);

$button_white_text_color = new PitchQodeField(
	"colorsimple",
	"button_white_text_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"button_white_text_color",
	$button_white_text_color
);

$button_white_text_color_hover = new PitchQodeField(
	"colorsimple",
	"button_white_text_color_hover",
	"",
	esc_html__( "Hover Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"button_white_text_color_hover",
	$button_white_text_color_hover
);

$group6 = new PitchQodeGroup(
	esc_html__( "Background", 'pitch' ),
	esc_html__( "Define background", 'pitch' )
);
$panel2->addChild(
	"group6",
	$group6
);
$row1 = new PitchQodeRow();
$group6->addChild(
	"row1",
	$row1
);

$button_white_background_color = new PitchQodeField(
	"colorsimple",
	"button_white_background_color",
	"",
	esc_html__( "Background Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"button_white_background_color",
	$button_white_background_color
);

$button_white_background_color_hover = new PitchQodeField(
	"colorsimple",
	"button_white_background_color_hover",
	"",
	esc_html__( "Background Hover Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"button_white_background_color_hover",
	$button_white_background_color_hover
);

$button_white_background_pattern_image = new PitchQodeField(
	"imagesimple",
	"button_white_background_pattern_image",
	"",
	esc_html__( "Pattern image", 'pitch' ),
	""
);
$row1->addChild(
	"button_white_background_pattern_image",
	$button_white_background_pattern_image
);

$group7 = new PitchQodeGroup(
	esc_html__( "Border Style", 'pitch' ),
	esc_html__( "Define border style.", 'pitch' )
);
$panel2->addChild(
	"group7",
	$group7
);

$row1 = new PitchQodeRow();
$group7->addChild(
	"row1",
	$row1
);

$button_white_border_color = new PitchQodeField(
	"colorsimple",
	"button_white_border_color",
	"",
	esc_html__( "Border Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"button_white_border_color",
	$button_white_border_color
);

$button_white_border_color_hover = new PitchQodeField(
	"colorsimple",
	"button_white_border_color_hover",
	"",
	esc_html__( "Border Hover Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"button_white_border_color_hover",
	$button_white_border_color_hover
);

$button_small_section = new PitchQodeTitle(
	"button_small_section",
	esc_html__( "Small Button", 'pitch' )
);
$panel2->addChild(
	"button_small_section",
	$button_small_section
);

$group14 = new PitchQodeGroup(
	esc_html__( "Text Style", 'pitch' ),
	esc_html__( "Define text style", 'pitch' )
);
$panel2->addChild(
	"group14",
	$group14
);
$row1 = new PitchQodeRow();
$group14->addChild(
	"row1",
	$row1
);

$small_button_fontsize = new PitchQodeField(
	"textsimple",
	"small_button_fontsize",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"small_button_fontsize",
	$small_button_fontsize
);

$small_button_fontweight = new PitchQodeField(
	"selectblanksimple",
	"small_button_fontweight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row1->addChild(
	"small_button_fontweight",
	$small_button_fontweight
);

$small_button_lineheight = new PitchQodeField(
	"textsimple",
	"small_button_lineheight",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"small_button_lineheight",
	$small_button_lineheight
);

$group22 = new PitchQodeGroup(
	esc_html__( "Icon Style", 'pitch' ),
	esc_html__( "Define icon style", 'pitch' )
);
$panel2->addChild(
	"group22",
	$group22
);
$row1 = new PitchQodeRow();
$group22->addChild(
	"row1",
	$row1
);

$small_button_icon_size = new PitchQodeField(
	"textsimple",
	"small_button_icon_size",
	"",
	esc_html__( "Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"small_button_icon_size",
	$small_button_icon_size
);

$small_button_padding = new PitchQodeField(
	"text",
	"small_button_padding",
	"",
	esc_html__( "Padding left/right (px) ", 'pitch' ),
	esc_html__( "Define padding", 'pitch' ),
	array(),
	array( "col_width" => 3 )
);
$panel2->addChild(
	"small_button_padding",
	$small_button_padding
);

$small_button_border_radius = new PitchQodeField(
	"text",
	"small_button_border_radius",
	"",
	esc_html__( "Border radius (px)", 'pitch' ),
	esc_html__( "Define border", 'pitch' ),
	array(),
	array( "col_width" => 3 )
);
$panel2->addChild(
	"small_button_border_radius",
	$small_button_border_radius
);

$button_large_section = new PitchQodeTitle(
	"button_large_section",
	esc_html__( "Large Button", 'pitch' )
);
$panel2->addChild(
	"button_large_section",
	$button_large_section
);

$group17 = new PitchQodeGroup(
	esc_html__( "Text Style", 'pitch' ),
	esc_html__( "Define text style", 'pitch' )
);
$panel2->addChild(
	"group17",
	$group17
);

$row1 = new PitchQodeRow();
$group17->addChild(
	"row1",
	$row1
);

$large_button_fontsize = new PitchQodeField(
	"textsimple",
	"large_button_fontsize",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"large_button_fontsize",
	$large_button_fontsize
);

$large_button_fontweight = new PitchQodeField(
	"selectblanksimple",
	"large_button_fontweight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row1->addChild(
	"large_button_fontweight",
	$large_button_fontweight
);

$large_button_lineheight = new PitchQodeField(
	"textsimple",
	"large_button_lineheight",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"large_button_lineheight",
	$large_button_lineheight
);

$group23 = new PitchQodeGroup(
	esc_html__( "Icon Style", 'pitch' ),
	esc_html__( "Define icon style", 'pitch' )
);
$panel2->addChild(
	"group23",
	$group23
);
$row1 = new PitchQodeRow();
$group23->addChild(
	"row1",
	$row1
);

$large_button_icon_size = new PitchQodeField(
	"textsimple",
	"large_button_icon_size",
	"",
	esc_html__( "Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"large_button_icon_size",
	$large_button_icon_size
);

$large_button_padding = new PitchQodeField(
	"text",
	"large_button_padding",
	"",
	esc_html__( "Padding Left/Right (px) ", 'pitch' ),
	esc_html__( "Define padding", 'pitch' ),
	array(),
	array( "col_width" => 3 )
);
$panel2->addChild(
	"large_button_padding",
	$large_button_padding
);

$large_button_border_radius = new PitchQodeField(
	"text",
	"large_button_border_radius",
	"",
	esc_html__( "Border Radius (px)", 'pitch' ),
	esc_html__( "Define border", 'pitch' ),
	array(),
	array( "col_width" => 3 )
);
$panel2->addChild(
	"large_button_border_radius",
	$large_button_border_radius
);

$button_extra_large_section = new PitchQodeTitle(
	"button_extra_large_section",
	esc_html__( "Extra Large Button", 'pitch' )
);
$panel2->addChild(
	"button_extra_large_section",
	$button_extra_large_section
);

$group20 = new PitchQodeGroup(
	esc_html__( "Text Style", 'pitch' ),
	esc_html__( "Define text style", 'pitch' )
);
$panel2->addChild(
	"group20",
	$group20
);
$row1 = new PitchQodeRow();
$group20->addChild(
	"row1",
	$row1
);

$big_large_button_fontsize = new PitchQodeField(
	"textsimple",
	"big_large_button_fontsize",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"big_large_button_fontsize",
	$big_large_button_fontsize
);

$big_large_button_fontweight = new PitchQodeField(
	"selectblanksimple",
	"big_large_button_fontweight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row1->addChild(
	"big_large_button_fontweight",
	$big_large_button_fontweight
);

$big_large_button_lineheight = new PitchQodeField(
	"textsimple",
	"big_large_button_lineheight",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"big_large_button_lineheight",
	$big_large_button_lineheight
);

$group24 = new PitchQodeGroup(
	esc_html__( "Icon Style", 'pitch' ),
	esc_html__( "Define icon style", 'pitch' )
);
$panel2->addChild(
	"group24",
	$group24
);
$row1 = new PitchQodeRow();
$group24->addChild(
	"row1",
	$row1
);

$big_large_button_icon_size = new PitchQodeField(
	"textsimple",
	"big_large_button_icon_size",
	"",
	esc_html__( "Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"big_large_button_icon_size",
	$big_large_button_icon_size
);

$big_large_button_padding = new PitchQodeField(
	"text",
	"big_large_button_padding",
	"",
	esc_html__( "Padding Left/Right (px) ", 'pitch' ),
	esc_html__( "Define padding", 'pitch' ),
	array(),
	array( "col_width" => 3 )
);
$panel2->addChild(
	"big_large_button_padding",
	$big_large_button_padding
);

$big_large_button_border_radius = new PitchQodeField(
	"text",
	"big_large_button_border_radius",
	"",
	esc_html__( "Border Radius (px)", 'pitch' ),
	esc_html__( "Define padding", 'pitch' ),
	array(),
	array( "col_width" => 3 )
);
$panel2->addChild(
	"big_large_button_border_radius",
	$big_large_button_border_radius
);

//Blockquote

$panel3 = new PitchQodePanel(
	esc_html__( "Blockquote", 'pitch' ),
	"blockquote_panel"
);
$elementsPage->addChild(
	"panel3",
	$panel3
);

$group1 = new PitchQodeGroup(
	esc_html__( "Blockquote Style", 'pitch' ),
	esc_html__( "Define Blockquote style", 'pitch' )
);
$panel3->addChild(
	"group1",
	$group1
);
$row1 = new PitchQodeRow();
$group1->addChild(
	"row1",
	$row1
);

$blockquote_color = new PitchQodeField(
	"colorsimple",
	"blockquote_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blockquote_font_color",
	$blockquote_color
);

$blockquote_font_size = new PitchQodeField(
	"textsimple",
	"blockquote_font_size",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blockquote_font_size",
	$blockquote_font_size
);

$blockquote_line_height = new PitchQodeField(
	"textsimple",
	"blockquote_line_height",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blockquote_line_height",
	$blockquote_line_height
);

$blockquote_text_transform = new PitchQodeField(
	"selectblanksimple",
	"blockquote_text_transform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	"blockquote_text_transform",
	$blockquote_text_transform
);

$row2 = new PitchQodeRow( true );
$group1->addChild(
	"row2",
	$row2
);

$blockquote_font_family = new PitchQodeField(
	"fontsimple",
	"blockquote_font_family",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"blockquote_font_family",
	$blockquote_font_family
);

$blockquote_font_style = new PitchQodeField(
	"selectblanksimple",
	"blockquote_font_style",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"blockquote_font_style",
	$blockquote_font_style
);

$blockquote_font_weight = new PitchQodeField(
	"selectblanksimple",
	"blockquote_font_weight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"blockquote_font_weight",
	$blockquote_font_weight
);

$blockquote_letter_spacing = new PitchQodeField(
	"textsimple",
	"blockquote_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"blockquote_letter_spacing",
	$blockquote_letter_spacing
);

$row3 = new PitchQodeRow( true );
$group1->addChild(
	"row3",
	$row3
);

$blockquote_background_color = new PitchQodeField(
	"colorsimple",
	"blockquote_background_color",
	"",
	esc_html__( "Background Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row3->addChild(
	"blockquote_background_color",
	$blockquote_background_color
);

$blockquote_border_color = new PitchQodeField(
	"colorsimple",
	"blockquote_border_color",
	"",
	esc_html__( "Border Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row3->addChild(
	"blockquote_border_color",
	$blockquote_border_color
);

$group2 = new PitchQodeGroup(
	esc_html__( "Blockquote Icon Style", 'pitch' ),
	esc_html__( "Define Blockquote Icon style", 'pitch' )
);
$panel3->addChild(
	"group2",
	$group2
);
$row1 = new PitchQodeRow();
$group2->addChild(
	"row1",
	$row1
);
$blockquote_quote_icon_color = new PitchQodeField(
	"colorsimple",
	"blockquote_quote_icon_color",
	"",
	esc_html__( "Quote Icon Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blockquote_quote_icon_color",
	$blockquote_quote_icon_color
);

$blockquote_icon_type = new PitchQodeField(
	"selectblanksimple",
	"blockquote_icon_type",
	"",
	esc_html__( "Quote Icon", 'pitch' ),
	"",
	pitch_qode_get_options_value_by_name( 'blockquote_type' )
);
$row1->addChild(
	"blockquote_icon_type",
	$blockquote_icon_type
);

//Content Menu

$panel25 = new PitchQodePanel(
	esc_html__( "Content Menu", 'pitch' ),
	"content_menu_panel"
);
$elementsPage->addChild(
	"panel25",
	$panel25
);

$group1 = new PitchQodeGroup(
	esc_html__( "Menu Icons Style", 'pitch' ),
	esc_html__( "Define Icons style", 'pitch' )
);
$panel25->addChild(
	"group1",
	$group1
);
$row1 = new PitchQodeRow();
$group1->addChild(
	"row1",
	$row1
);
$content_menu_icon_color = new PitchQodeField(
	"colorsimple",
	"content_menu_icon_color",
	"",
	esc_html__( "Icon Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"content_menu_icon_color",
	$content_menu_icon_color
);
$content_menu_icon_hover_color = new PitchQodeField(
	"colorsimple",
	"content_menu_icon_hover_color",
	"",
	esc_html__( "Icon Hover Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"content_menu_icon_hover_color",
	$content_menu_icon_hover_color
);
$content_menu_icon_size = new PitchQodeField(
	"textsimple",
	"content_menu_icon_size",
	"",
	esc_html__( "Icon Size", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"content_menu_icon_size",
	$content_menu_icon_size
);

$group2 = new PitchQodeGroup(
	esc_html__( "Text Style", 'pitch' ),
	esc_html__( "Define Text style", 'pitch' )
);
$panel25->addChild(
	"group2",
	$group2
);
$row1 = new PitchQodeRow();
$group2->addChild(
	"row1",
	$row1
);
$content_menu_text_color = new PitchQodeField(
	"colorsimple",
	"content_menu_text_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"content_menu_text_color",
	$content_menu_text_color
);
$content_menu_text_hover_color = new PitchQodeField(
	"colorsimple",
	"content_menu_text_hover_color",
	"",
	esc_html__( "Text Hover Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"content_menu_text_hover_color",
	$content_menu_text_hover_color
);
$content_menu_text_fontsize = new PitchQodeField(
	"textsimple",
	"content_menu_text_fontsize",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"content_menu_text_fontsize",
	$content_menu_text_fontsize
);
$content_menu_text_lineheight = new PitchQodeField(
	"textsimple",
	"content_menu_text_lineheight",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"content_menu_text_lineheight",
	$content_menu_text_lineheight
);
$row2 = new PitchQodeRow();
$group2->addChild(
	"row2",
	$row2
);
$content_menu_text_texttransform = new PitchQodeField(
	"selectblanksimple",
	"content_menu_text_texttransform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row2->addChild(
	"content_menu_text_texttransform",
	$content_menu_text_texttransform
);
$content_menu_text_google_fonts = new PitchQodeField(
	"fontsimple",
	"content_menu_text_google_fonts",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"content_menu_text_google_fonts",
	$content_menu_text_google_fonts
);
$content_menu_text_fontstyle = new PitchQodeField(
	"selectblanksimple",
	"content_menu_text_fontstyle",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"content_menu_text_fontstyle",
	$h1_fontstyle
);
$content_menu_text_fontweight = new PitchQodeField(
	"selectblanksimple",
	"content_menu_text_fontweight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"content_menu_text_fontweight",
	$content_menu_text_fontweight
);
$row3 = new PitchQodeRow();
$group2->addChild(
	"row3",
	$row3
);
$content_menu_text_letterspacing = new PitchQodeField(
	"textsimple",
	"content_menu_text_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"content_menu_text_letterspacing",
	$content_menu_text_letterspacing
);

//Call to action

$panel31 = new PitchQodePanel(
	esc_html__( "Call to Action", 'pitch' ),
	"call_to_action_panel"
);
$elementsPage->addChild(
	"panel31",
	$panel31
);

$call_to_action_button_section = new PitchQodeTitle(
	"call_to_action_button_section",
	esc_html__( "Button", 'pitch' )
);
$panel31->addChild(
	"call_to_action_button_section",
	$call_to_action_button_section
);

$group1 = new PitchQodeGroup(
	esc_html__( "Text Style", 'pitch' ),
	esc_html__( "Define text style", 'pitch' )
);
$panel31->addChild(
	"group1",
	$group1
);
$row1 = new PitchQodeRow();
$group1->addChild(
	"row1",
	$row1
);
$cto_action_bttn_title_google_fonts = new PitchQodeField(
	"fontsimple",
	"cto_action_bttn_title_google_fonts",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"cto_action_bttn_title_google_fonts",
	$cto_action_bttn_title_google_fonts
);

$cto_action_bttn_title_fontsize = new PitchQodeField(
	"textsimple",
	"cto_action_bttn_title_fontsize",
	"",
	esc_html__( "Text Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"cto_action_bttn_title_fontsize",
	$cto_action_bttn_title_fontsize
);

$cto_action_bttn_title_fontstyle = new PitchQodeField(
	"selectblanksimple",
	"cto_action_bttn_title_fontstyle",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row1->addChild(
	"cto_action_bttn_title_fontstyle",
	$cto_action_bttn_title_fontstyle
);

$cto_action_bttn_title_fontweight = new PitchQodeField(
	"selectblanksimple",
	"cto_action_bttn_title_fontweight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row1->addChild(
	"cto_action_bttn_title_fontweight",
	$cto_action_bttn_title_fontweight
);

$row2 = new PitchQodeRow( true );
$group1->addChild(
	"row2",
	$row2
);
$cto_action_bttn_title_letter_spacing = new PitchQodeField(
	"textsimple",
	"cto_action_bttn_title_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"cto_action_bttn_title_letter_spacing",
	$cto_action_bttn_title_letter_spacing
);

$cto_action_bttn_title_lineheight = new PitchQodeField(
	"textsimple",
	"cto_action_bttn_title_lineheight",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"cto_action_bttn_title_lineheight",
	$cto_action_bttn_title_lineheight
);

$cto_action_bttn_title_color = new PitchQodeField(
	"colorsimple",
	"cto_action_bttn_title_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"cto_action_bttn_title_color",
	$cto_action_bttn_title_color
);

$cto_action_bttn_title_hovercolor = new PitchQodeField(
	"colorsimple",
	"cto_action_bttn_title_hovercolor",
	"",
	esc_html__( "Hover Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"cto_action_bttn_title_hovercolor",
	$cto_action_bttn_title_hovercolor
);

$row3 = new PitchQodeRow( true );
$group1->addChild(
	"row3",
	$row3
);

$cto_action_bttn_title_texttransform = new PitchQodeField(
	"selectblanksimple",
	"cto_action_bttn_title_texttransform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row3->addChild(
	"cto_action_bttn_title_texttransform",
	$cto_action_bttn_title_texttransform
);

$group2 = new PitchQodeGroup(
	esc_html__( "Background", 'pitch' ),
	esc_html__( "Define background", 'pitch' )
);
$panel31->addChild(
	"group2",
	$group2
);

$row1 = new PitchQodeRow();
$group2->addChild(
	"row1",
	$row1
);

$cto_action_bttn_backgroundcolor = new PitchQodeField(
	"colorsimple",
	"cto_action_bttn_backgroundcolor",
	"",
	esc_html__( "Background Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"cto_action_bttn_backgroundcolor",
	$cto_action_bttn_backgroundcolor
);

$cto_action_bttn_backgroundcolor_hover = new PitchQodeField(
	"colorsimple",
	"cto_action_bttn_backgroundcolor_hover",
	"",
	esc_html__( "Background Hover Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"cto_action_bttn_backgroundcolor_hover",
	$cto_action_bttn_backgroundcolor_hover
);

$group3 = new PitchQodeGroup(
	esc_html__( "Border Style", 'pitch' ),
	esc_html__( "Define border style", 'pitch' )
);
$panel31->addChild(
	"group3",
	$group3
);

$row1 = new PitchQodeRow();
$group3->addChild(
	"row1",
	$row1
);

$cto_action_bttn_border_color = new PitchQodeField(
	"colorsimple",
	"cto_action_bttn_border_color",
	"",
	esc_html__( "Border Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"cto_action_bttn_border_color",
	$cto_action_bttn_border_color
);

$cto_action_bttn_border_hover_color = new PitchQodeField(
	"colorsimple",
	"cto_action_bttn_border_hover_color",
	"",
	esc_html__( "Border Hover Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"cto_action_bttn_border_hover_color",
	$cto_action_bttn_border_hover_color
);

$cto_action_bttn_border_width = new PitchQodeField(
	"textsimple",
	"cto_action_bttn_border_width",
	"",
	esc_html__( "Border Width (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"cto_action_bttn_border_width",
	$cto_action_bttn_border_width
);

$cto_action_bttn_border_radius = new PitchQodeField(
	"textsimple",
	"cto_action_bttn_border_radius",
	"",
	esc_html__( "Border Radius (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"cto_action_bttn_border_radius",
	$cto_action_bttn_border_radius
);

$cto_action_bttn_padding = new PitchQodeField(
	"text",
	"cto_action_bttn_padding",
	"",
	esc_html__( "Padding Left/Right (px) ", 'pitch' ),
	esc_html__( "Define padding", 'pitch' ),
	array(),
	array( "col_width" => 3 )
);
$panel31->addChild(
	"cto_action_bttn_padding",
	$cto_action_bttn_padding
);

//Counters

$panel4 = new PitchQodePanel(
	esc_html__( "Counters", 'pitch' ),
	"counters_panel"
);
$elementsPage->addChild(
	"panel4",
	$panel4
);

$group1 = new PitchQodeGroup(
	esc_html__( "Counters Style", 'pitch' ),
	esc_html__( "Define styles for Counters", 'pitch' )
);
$panel4->addChild(
	"group1",
	$group1
);
$row1 = new PitchQodeRow();
$group1->addChild(
	"row1",
	$row1
);

$counter_color = new PitchQodeField(
	"colorsimple",
	"counter_color",
	"",
	esc_html__( "Numeral Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"counter_color",
	$counter_color
);

$counter_text_color = new PitchQodeField(
	"colorsimple",
	"counter_text_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"counter_text_color",
	$counter_text_color
);

$counter_separator_color = new PitchQodeField(
	"colorsimple",
	"counter_separator_color",
	"",
	esc_html__( "Separator Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"counter_separator_color",
	$counter_separator_color
);

$counter_icon_color = new PitchQodeField(
	"colorsimple",
	"counter_icon_color",
	"",
	esc_html__( "Icon Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"counter_icon_color",
	$counter_icon_color
);

$row2 = new PitchQodeRow( true );
$group1->addChild(
	"row2",
	$row2
);

$counters_font_family = new PitchQodeField(
	"fontsimple",
	"counters_font_family",
	"-1",
	esc_html__( "Numeral Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"counters_font_family",
	$counters_font_family
);

$counters_font_size = new PitchQodeField(
	"textsimple",
	"counters_font_size",
	"",
	esc_html__( "Numeral Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"counters_font_size",
	$counters_font_size
);

$counters_fontweight = new PitchQodeField(
	"selectblanksimple",
	"counters_fontweight",
	"",
	esc_html__( "Numeral Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"counters_fontweight",
	$counters_fontweight
);

$counters_icon_font_size = new PitchQodeField(
	"textsimple",
	"counters_icon_font_size",
	"",
	esc_html__( "Icon Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"counters_icon_font_size",
	$counters_icon_font_size
);

$row3 = new PitchQodeRow( true );
$group1->addChild(
	"row3",
	$row3
);

$counters_text_font_size = new PitchQodeField(
	"textsimple",
	"counters_text_font_size",
	"",
	esc_html__( "Text Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row3->addChild(
	"counters_text_font_size",
	$counters_text_font_size
);

$counters_text_fontweight = new PitchQodeField(
	"selectblanksimple",
	"counters_text_fontweight",
	"",
	esc_html__( "Text Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row3->addChild(
	"counters_text_fontweight",
	$counters_text_fontweight
);

$counters_text_texttransform = new PitchQodeField(
	"selectblanksimple",
	"counters_text_texttransform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row3->addChild(
	"counters_text_texttransform",
	$counters_text_texttransform
);

$counters_text_letterspacing = new PitchQodeField(
	"textsimple",
	"counters_text_letterspacing",
	"",
	esc_html__( "Text Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row3->addChild(
	"counters_text_letterspacing",
	$counters_text_letterspacing
);

$group2 = new PitchQodeGroup(
	esc_html__( "Counters Title", 'pitch' ),
	esc_html__( "Define Counter title style", 'pitch' )
);
$panel4->addChild(
	"group2",
	$group2
);

$row1 = new PitchQodeRow();
$group2->addChild(
	"row1",
	$row1
);

$counters_title_color = new PitchQodeField(
	"colorsimple",
	"counters_title_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"counters_title_color",
	$counters_title_color
);

$counters_title_font_size = new PitchQodeField(
	"textsimple",
	"counters_title_font_size",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"counters_title_font_size",
	$counters_title_font_size
);

$counters_title_line_height = new PitchQodeField(
	"textsimple",
	"counters_title_line_height",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"counters_title_line_height",
	$counters_title_line_height
);

$counters_title_text_transform = new PitchQodeField(
	"selectblanksimple",
	"counters_title_text_transform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	"counters_title_text_transform",
	$counters_title_text_transform
);

$row2 = new PitchQodeRow( true );
$group2->addChild(
	"row2",
	$row2
);

$counters_title_font_family = new PitchQodeField(
	"fontsimple",
	"counters_title_font_family",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"counters_title_font_family",
	$counters_title_font_family
);

$counters_title_font_style = new PitchQodeField(
	"selectblanksimple",
	"counters_title_font_style",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"counters_title_font_style",
	$counters_title_font_style
);

$counters_title_font_weight = new PitchQodeField(
	"selectblanksimple",
	"counters_title_font_weight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"counters_title_font_weight",
	$counters_title_font_weight
);

$counters_title_letter_spacing = new PitchQodeField(
	"textsimple",
	"counters_title_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"counters_title_letter_spacing",
	$counters_title_letter_spacing
);

$group3 = new PitchQodeGroup(
	esc_html__( "Counters Padding", 'pitch' ),
	esc_html__( "Define padding for Counters", 'pitch' )
);
$panel4->addChild(
	"group3",
	$group3
);

$row1 = new PitchQodeRow();
$group3->addChild(
	"row1",
	$row1
);

$counters_padding_top = new PitchQodeField(
	"textsimple",
	"counters_padding_top",
	"",
	esc_html__( "Padding Top (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"counters_padding_top",
	$counters_padding_top
);

$counters_padding_right = new PitchQodeField(
	"textsimple",
	"counters_padding_right",
	"",
	esc_html__( "Padding Right (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"counters_padding_right",
	$counters_padding_right
);

$counters_padding_bottom = new PitchQodeField(
	"textsimple",
	"counters_padding_bottom",
	"",
	esc_html__( "Padding Bottom (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"counters_padding_bottom",
	$counters_padding_bottom
);

$counters_padding_left = new PitchQodeField(
	"textsimple",
	"counters_padding_left",
	"",
	esc_html__( "Padding Left (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"counters_padding_left",
	$counters_padding_left
);

//Counters

$panel28 = new PitchQodePanel(
	esc_html__( "Countdown", 'pitch' ),
	"countdown_panel"
);
$elementsPage->addChild(
	"panel28",
	$panel28
);

$group1 = new PitchQodeGroup(
	esc_html__( "Countdown Amount", 'pitch' ),
	esc_html__( "Define countdown amount style", 'pitch' )
);
$panel28->addChild(
	"group1",
	$group1
);

$row1 = new PitchQodeRow();
$group1->addChild(
	"row1",
	$row1
);

$countdown_amount_color = new PitchQodeField(
	"colorsimple",
	"countdown_amount_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"countdown_amount_color",
	$countdown_amount_color
);

$countdown_amount_font_size = new PitchQodeField(
	"textsimple",
	"countdown_amount_font_size",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"countdown_amount_font_size",
	$countdown_amount_font_size
);

$countdown_amount_line_height = new PitchQodeField(
	"textsimple",
	"countdown_amount_line_height",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"countdown_amount_line_height",
	$countdown_amount_line_height
);

$countdown_amount_text_transform = new PitchQodeField(
	"selectblanksimple",
	"countdown_amount_text_transform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	"countdown_amount_text_transform",
	$countdown_amount_text_transform
);

$row2 = new PitchQodeRow( true );
$group1->addChild(
	"row2",
	$row2
);

$countdown_amount_font_family = new PitchQodeField(
	"fontsimple",
	"countdown_amount_font_family",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"countdown_amount_font_family",
	$countdown_amount_font_family
);

$countdown_amount_font_style = new PitchQodeField(
	"selectblanksimple",
	"countdown_amount_font_style",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"countdown_amount_font_style",
	$countdown_amount_font_style
);

$countdown_amount_font_weight = new PitchQodeField(
	"selectblanksimple",
	"countdown_amount_font_weight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"countdown_amount_font_weight",
	$countdown_amount_font_weight
);

$countdown_amount_letter_spacing = new PitchQodeField(
	"textsimple",
	"countdown_amount_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"countdown_amount_letter_spacing",
	$countdown_amount_letter_spacing
);

$group2 = new PitchQodeGroup(
	esc_html__( "Countdown Label", 'pitch' ),
	esc_html__( "Define Countdown period style", 'pitch' )
);
$panel28->addChild(
	"group2",
	$group2
);

$row1 = new PitchQodeRow();
$group2->addChild(
	"row1",
	$row1
);

$countdown_label_color = new PitchQodeField(
	"colorsimple",
	"countdown_label_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"countdown_label_color",
	$countdown_label_color
);

$countdown_label_font_size = new PitchQodeField(
	"textsimple",
	"countdown_label_font_size",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"countdown_label_font_size",
	$countdown_label_font_size
);

$countdown_label_line_height = new PitchQodeField(
	"textsimple",
	"countdown_label_line_height",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"countdown_label_line_height",
	$countdown_label_line_height
);

$countdown_label_text_transform = new PitchQodeField(
	"selectblanksimple",
	"countdown_label_text_transform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	"countdown_label_text_transform",
	$countdown_label_text_transform
);

$row2 = new PitchQodeRow( true );
$group2->addChild(
	"row2",
	$row2
);

$countdown_label_font_family = new PitchQodeField(
	"fontsimple",
	"countdown_label_font_family",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"countdown_label_font_family",
	$countdown_label_font_family
);

$countdown_label_font_style = new PitchQodeField(
	"selectblanksimple",
	"countdown_label_font_style",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"countdown_label_font_style",
	$countdown_label_font_style
);

$countdown_label_font_weight = new PitchQodeField(
	"selectblanksimple",
	"countdown_label_font_weight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"countdown_label_font_weight",
	$countdown_label_font_weight
);

$countdown_label_letter_spacing = new PitchQodeField(
	"textsimple",
	"countdown_label_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"countdown_label_letter_spacing",
	$countdown_label_letter_spacing
);

$group3 = new PitchQodeGroup(
	esc_html__( "Countdown Separator", 'pitch' ),
	esc_html__( 'Define styles for separator in countdown shortcode', 'pitch' )
);
$panel28->addChild(
	"group3",
	$group3
);
$row1 = new PitchQodeRow();
$group3->addChild(
	"row1",
	$row1
);

$countdown_separator_color = new PitchQodeField(
	"colorsimple",
	"countdown_separator_color",
	"",
	esc_html__( "Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"countdown_separator_color",
	$countdown_separator_color
);

$countdown_separator_transparency = new PitchQodeField(
	"textsimple",
	"countdown_separator_transparency",
	"",
	esc_html__( "Transparency (0-1)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"countdown_separator_transparency",
	$countdown_separator_transparency
);

$countdown_separator_thickness = new PitchQodeField(
	"textsimple",
	"countdown_separator_thickness",
	"",
	esc_html__( "Thickness (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"countdown_separator_thickness",
	$countdown_separator_thickness
);

$countdown_separator_width = new PitchQodeField(
	"textsimple",
	"countdown_separator_width",
	"",
	esc_html__( "Width (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"countdown_separator_width",
	$countdown_separator_width
);

$row2 = new PitchQodeRow( true );
$group3->addChild(
	"row2",
	$row2
);

$countdown_separator_topmargin = new PitchQodeField(
	"textsimple",
	"countdown_separator_topmargin",
	"",
	esc_html__( "Top Margin (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"countdown_separator_topmargin",
	$countdown_separator_topmargin
);

$countdown_separator_bottommargin = new PitchQodeField(
	"textsimple",
	"countdown_separator_bottommargin",
	"",
	esc_html__( "Bottom Margin (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"countdown_separator_bottommargin",
	$countdown_separator_bottommargin
);

//Expandable Section

$panel5 = new PitchQodePanel(
	esc_html__( "Expandable Section", 'pitch' ),
	"expandable_section_panel"
);
$elementsPage->addChild(
	"panel5",
	$panel5
);

$group1 = new PitchQodeGroup(
	esc_html__( "Title Style", 'pitch' ),
	esc_html__( "Define Expandable Section title style", 'pitch' )
);
$panel5->addChild(
	"group1",
	$group1
);
$row1 = new PitchQodeRow();
$group1->addChild(
	"row1",
	$row1
);

$expandable_label_color = new PitchQodeField(
	"colorsimple",
	"expandable_label_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"expandable_label_color",
	$expandable_label_color
);

$expandable_label_font_size = new PitchQodeField(
	"textsimple",
	"expandable_label_font_size",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"expandable_label_font_size",
	$expandable_label_font_size
);

$expandable_label_text_transform = new PitchQodeField(
	"selectblanksimple",
	"expandable_label_text_transform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	"expandable_label_text_transform",
	$expandable_label_text_transform
);

$row2 = new PitchQodeRow( true );
$group1->addChild(
	"row2",
	$row2
);

$expandable_label_font_family = new PitchQodeField(
	"fontsimple",
	"expandable_label_font_family",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"expandable_label_font_family",
	$expandable_label_font_family
);

$expandable_label_font_weight = new PitchQodeField(
	"selectblanksimple",
	"expandable_label_font_weight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"expandable_label_font_weight",
	$expandable_label_font_weight
);

$expandable_label_letter_spacing = new PitchQodeField(
	"textsimple",
	"expandable_label_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"expandable_label_letter_spacing",
	$expandable_label_letter_spacing
);

$row3 = new PitchQodeRow( true );
$group1->addChild(
	"row3",
	$row3
);

$expandable_background_color = new PitchQodeField(
	"colorsimple",
	"expandable_background_color",
	"",
	esc_html__( "Background Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row3->addChild(
	"expandable_background_color",
	$expandable_background_color
);

$expandable_label_hover_color = new PitchQodeField(
	"colorsimple",
	"expandable_label_hover_color",
	"",
	esc_html__( "Hover Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row3->addChild(
	"expandable_label_hover_color",
	$expandable_label_hover_color
);

//Full Screen Sections

$panel51 = new PitchQodePanel(
	esc_html__( "Full Screen Sections", 'pitch' ),
	"expandable_section_panel"
);
$elementsPage->addChild(
	"panel51",
	$panel51
);
$full_screen_sections_on_small_screens = new PitchQodeField(
	"yesno",
	"full_screen_sections_on_small_screens",
	"no",
	esc_html__( "Enable Full Screen Sections on Small Screens", 'pitch' ),
	esc_html__( "Enabling this option will turn on Full Screen Sections on small screens", 'pitch' )
);
$panel51->addChild(
	"full_screen_sections_on_small_screens",
	$full_screen_sections_on_small_screens
);

//Highlight

$panel17 = new PitchQodePanel(
	esc_html__( "Highlight", 'pitch' ),
	"highlight_panel"
);
$elementsPage->addChild(
	"panel17",
	$panel17
);
$highlight_color = new PitchQodeField(
	"color",
	"highlight_color",
	"",
	esc_html__( "Highlight Color", 'pitch' ),
	esc_html__( "Set color for Highlight", 'pitch' )
);
$panel17->addChild(
	"highlight_color",
	$highlight_color
);

//Horizontal Progress Bars

$panel6 = new PitchQodePanel(
	esc_html__( "Horizontal Progress Bars", 'pitch' ),
	"horizontal_progress_bars_panel"
);
$elementsPage->addChild(
	"panel6",
	$panel6
);

$group1 = new PitchQodeGroup(
	esc_html__( "Progress Bar Title Style", 'pitch' ),
	esc_html__( "Define styles for Horizontal Progress Bars title", 'pitch' )
);
$panel6->addChild(
	"group1",
	$group1
);

$row1 = new PitchQodeRow();
$group1->addChild(
	"row1",
	$row1
);

$progress_bar_horizontal_font_size = new PitchQodeField(
	"textsimple",
	"progress_bar_horizontal_font_size",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"progress_bar_horizontal_font_size",
	$progress_bar_horizontal_font_size
);

$progress_bar_horizontal_color = new PitchQodeField(
	"colorsimple",
	"progress_bar_horizontal_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"progress_bar_horizontal_color",
	$progress_bar_horizontal_color
);

$progress_bar_horizontal_line_height = new PitchQodeField(
	"textsimple",
	"progress_bar_horizontal_line_height",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"progress_bar_horizontal_line_height",
	$progress_bar_horizontal_line_height
);

$progress_bar_horizontal_font_family = new PitchQodeField(
	"fontsimple",
	"progress_bar_horizontal_font_family",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"progress_bar_horizontal_font_family",
	$progress_bar_horizontal_font_family
);

$row2 = new PitchQodeRow( true );
$group1->addChild(
	"row2",
	$row2
);

$progress_bar_horizontal_font_style = new PitchQodeField(
	"selectblanksimple",
	"progress_bar_horizontal_font_style",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"progress_bar_horizontal_font_style",
	$progress_bar_horizontal_font_style
);

$progress_bar_horizontal_font_weight = new PitchQodeField(
	"selectblanksimple",
	"progress_bar_horizontal_font_weight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"progress_bar_horizontal_font_weight",
	$progress_bar_horizontal_font_weight
);

$progress_bar_horizontal_letter_spacing = new PitchQodeField(
	"textsimple",
	"progress_bar_horizontal_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"progress_bar_horizontal_letter_spacing",
	$progress_bar_horizontal_letter_spacing
);

$progress_bar_horizontal_text_transform = new PitchQodeField(
	"selectblanksimple",
	"progress_bar_horizontal_text_transform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row2->addChild(
	"progress_bar_horizontal_text_transform",
	$progress_bar_horizontal_text_transform
);

$group2 = new PitchQodeGroup(
	esc_html__( "Progress Bar Percentage Style", 'pitch' ),
	esc_html__( "Define styles for Horizontal Progress Bars percentage", 'pitch' )
);
$panel6->addChild(
	"group2",
	$group2
);

$row1 = new PitchQodeRow();
$group2->addChild(
	"row1",
	$row1
);

$progress_bar_horizontal_percentage_font_size = new PitchQodeField(
	"textsimple",
	"progress_bar_horizontal_percentage_font_size",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"progress_bar_horizontal_percentage_font_size",
	$progress_bar_horizontal_percentage_font_size
);

$progress_bar_horizontal_percentage_color = new PitchQodeField(
	"colorsimple",
	"progress_bar_horizontal_percentage_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"progress_bar_horizontal_percentage_color",
	$progress_bar_horizontal_percentage_color
);

$progress_bar_horizontal_percentage_line_height = new PitchQodeField(
	"textsimple",
	"progress_bar_horizontal_percentage_line_height",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"progress_bar_horizontal_percentage_line_height",
	$progress_bar_horizontal_percentage_line_height
);

$progress_bar_horizontal_percentage_font_family = new PitchQodeField(
	"fontsimple",
	"progress_bar_horizontal_percentage_font_family",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"progress_bar_horizontal_percentage_font_family",
	$progress_bar_horizontal_percentage_font_family
);

$row2 = new PitchQodeRow( true );
$group2->addChild(
	"row2",
	$row2
);

$progress_bar_horizontal_percentage_font_style = new PitchQodeField(
	"selectblanksimple",
	"progress_bar_horizontal_percentage_font_style",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"progress_bar_horizontal_percentage_font_style",
	$progress_bar_horizontal_percentage_font_style
);

$progress_bar_horizontal_percentage_font_weight = new PitchQodeField(
	"selectblanksimple",
	"progress_bar_horizontal_percentage_font_weight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"progress_bar_horizontal_percentage_font_weight",
	$progress_bar_horizontal_percentage_font_weight
);

$progress_bar_horizontal_percentage_letter_spacing = new PitchQodeField(
	"textsimple",
	"progress_bar_horizontal_percentage_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"progress_bar_horizontal_percentage_letter_spacing",
	$progress_bar_horizontal_percentage_letter_spacing
);

$progress_bar_horizontal_percentage_text_transform = new PitchQodeField(
	"selectblanksimple",
	"progress_bar_horizontal_percentage_text_transform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row2->addChild(
	"progress_bar_horizontal_percentage_text_transform",
	$progress_bar_horizontal_percentage_text_transform
);
//Vertical Progress Bars

$panel73 = new PitchQodePanel(
	esc_html__( "Vertical Progress Bars", 'pitch' ),
	"vertical_progress_bars_panel"
);
$elementsPage->addChild(
	"panel73",
	$panel73
);

$group1 = new PitchQodeGroup(
	esc_html__( "Progress Bar Title Style", 'pitch' ),
	esc_html__( "Define styles for Vertical Progress Bars title", 'pitch' )
);
$panel73->addChild(
	"group1",
	$group1
);

$row1 = new PitchQodeRow();
$group1->addChild(
	"row1",
	$row1
);

$progress_bar_vertical_font_size = new PitchQodeField(
	"textsimple",
	"progress_bar_vertical_font_size",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"progress_bar_vertical_font_size",
	$progress_bar_vertical_font_size
);

$progress_bar_vertical_color = new PitchQodeField(
	"colorsimple",
	"progress_bar_vertical_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"progress_bar_vertical_color",
	$progress_bar_vertical_color
);

$progress_bar_vertical_line_height = new PitchQodeField(
	"textsimple",
	"progress_bar_vertical_line_height",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"progress_bar_vertical_line_height",
	$progress_bar_vertical_line_height
);

$progress_bar_vertical_font_family = new PitchQodeField(
	"fontsimple",
	"progress_bar_vertical_font_family",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"progress_bar_vertical_font_family",
	$progress_bar_vertical_font_family
);

$row2 = new PitchQodeRow( true );
$group1->addChild(
	"row2",
	$row2
);

$progress_bar_vertical_font_style = new PitchQodeField(
	"selectblanksimple",
	"progress_bar_vertical_font_style",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"progress_bar_vertical_font_style",
	$progress_bar_vertical_font_style
);

$progress_bar_vertical_font_weight = new PitchQodeField(
	"selectblanksimple",
	"progress_bar_vertical_font_weight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"progress_bar_vertical_font_weight",
	$progress_bar_vertical_font_weight
);

$progress_bar_vertical_letter_spacing = new PitchQodeField(
	"textsimple",
	"progress_bar_vertical_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"progress_bar_vertical_letter_spacing",
	$progress_bar_vertical_letter_spacing
);

$progress_bar_vertical_text_transform = new PitchQodeField(
	"selectblanksimple",
	"progress_bar_vertical_text_transform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row2->addChild(
	"progress_bar_vertical_text_transform",
	$progress_bar_vertical_text_transform
);

$group2 = new PitchQodeGroup(
	esc_html__( "Progress Bar Percentage Style", 'pitch' ),
	esc_html__( "Define styles for Vertical Progress Bars percentage", 'pitch' )
);
$panel73->addChild(
	"group2",
	$group2
);

$row1 = new PitchQodeRow();
$group2->addChild(
	"row1",
	$row1
);

$progress_bar_vertical_percentage_font_size = new PitchQodeField(
	"textsimple",
	"progress_bar_vertical_percentage_font_size",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"progress_bar_vertical_percentage_font_size",
	$progress_bar_vertical_percentage_font_size
);

$progress_bar_vertical_percentage_color = new PitchQodeField(
	"colorsimple",
	"progress_bar_vertical_percentage_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"progress_bar_vertical_percentage_color",
	$progress_bar_vertical_percentage_color
);

$progress_bar_vertical_percentage_line_height = new PitchQodeField(
	"textsimple",
	"progress_bar_vertical_percentage_line_height",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"progress_bar_vertical_percentage_line_height",
	$progress_bar_vertical_percentage_line_height
);

$progress_bar_vertical_percentage_font_family = new PitchQodeField(
	"fontsimple",
	"progress_bar_vertical_percentage_font_family",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"progress_bar_vertical_percentage_font_family",
	$progress_bar_vertical_percentage_font_family
);

$row2 = new PitchQodeRow( true );
$group2->addChild(
	"row2",
	$row2
);

$progress_bar_vertical_percentage_font_style = new PitchQodeField(
	"selectblanksimple",
	"progress_bar_vertical_percentage_font_style",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"progress_bar_vertical_percentage_font_style",
	$progress_bar_vertical_percentage_font_style
);

$progress_bar_vertical_percentage_font_weight = new PitchQodeField(
	"selectblanksimple",
	"progress_bar_vertical_percentage_font_weight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"progress_bar_vertical_percentage_font_weight",
	$progress_bar_vertical_percentage_font_weight
);

$progress_bar_vertical_percentage_letter_spacing = new PitchQodeField(
	"textsimple",
	"progress_bar_vertical_percentage_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"progress_bar_vertical_percentage_letter_spacing",
	$progress_bar_vertical_percentage_letter_spacing
);

$progress_bar_vertical_percentage_text_transform = new PitchQodeField(
	"selectblanksimple",
	"progress_bar_vertical_percentage_text_transform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row2->addChild(
	"progress_bar_vertical_percentage_text_transform",
	$progress_bar_vertical_percentage_text_transform
);

$group3 = new PitchQodeGroup(
	esc_html__( "Progress Bar Text Style", 'pitch' ),
	esc_html__( "Define styles for Vertical Progress Bars text", 'pitch' )
);
$panel73->addChild(
	"group3",
	$group3
);

$row1 = new PitchQodeRow();
$group3->addChild(
	"row1",
	$row1
);

$progress_bar_vertical_text_font_size = new PitchQodeField(
	"textsimple",
	"progress_bar_vertical_text_font_size",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"progress_bar_vertical_text_font_size",
	$progress_bar_vertical_text_font_size
);

$progress_bar_vertical_text_color = new PitchQodeField(
	"colorsimple",
	"progress_bar_vertical_text_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"progress_bar_vertical_text_color",
	$progress_bar_vertical_text_color
);

$progress_bar_vertical_text_line_height = new PitchQodeField(
	"textsimple",
	"progress_bar_vertical_text_line_height",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"progress_bar_vertical_text_line_height",
	$progress_bar_vertical_text_line_height
);

$progress_bar_vertical_text_font_family = new PitchQodeField(
	"fontsimple",
	"progress_bar_vertical_text_font_family",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"progress_bar_vertical_text_font_family",
	$progress_bar_vertical_text_font_family
);

$row2 = new PitchQodeRow( true );
$group3->addChild(
	"row2",
	$row2
);

$progress_bar_vertical_text_font_style = new PitchQodeField(
	"selectblanksimple",
	"progress_bar_vertical_text_font_style",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"progress_bar_vertical_text_font_style",
	$progress_bar_vertical_text_font_style
);

$progress_bar_vertical_text_font_weight = new PitchQodeField(
	"selectblanksimple",
	"progress_bar_vertical_text_font_weight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"progress_bar_vertical_text_font_weight",
	$progress_bar_vertical_text_font_weight
);

$progress_bar_vertical_text_letter_spacing = new PitchQodeField(
	"textsimple",
	"progress_bar_vertical_text_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"progress_bar_vertical_text_letter_spacing",
	$progress_bar_vertical_text_letter_spacing
);

$progress_bar_vertical_text_text_transform = new PitchQodeField(
	"selectblanksimple",
	"progress_bar_vertical_text_text_transform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row2->addChild(
	"progress_bar_vertical_text_text_transform",
	$progress_bar_vertical_text_text_transform
);

//Icon

$panel19 = new PitchQodePanel(
	esc_html__( "Icons", 'pitch' ),
	"icons_panel"
);
$elementsPage->addChild(
	"panel19",
	$panel19
);

$group1 = new PitchQodeGroup(
	esc_html__( "Normal Icons", 'pitch' ),
	esc_html__( "Define Normal Icons style", 'pitch' )
);
$panel19->addChild(
	"group1",
	$group1
);

$row1 = new PitchQodeRow();
$group1->addChild(
	"row1",
	$row1
);

$icon_color_normal = new PitchQodeField(
	"colorsimple",
	"icon_color_normal",
	"",
	esc_html__( "Icon Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"icon_color_normal",
	$icon_color_normal
);

$icon_hover_color_normal = new PitchQodeField(
	"colorsimple",
	"icon_hover_color_normal",
	"",
	esc_html__( "Icon Hover Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"icon_hover_color_normal",
	$icon_hover_color_normal
);

$group2 = new PitchQodeGroup(
	esc_html__( "Icons Circle/Square", 'pitch' ),
	esc_html__( "Define circle/square Icons style", 'pitch' )
);
$panel19->addChild(
	"group2",
	$group2
);

$row1 = new PitchQodeRow();
$group2->addChild(
	"row1",
	$row1
);

$icon_color = new PitchQodeField(
	"colorsimple",
	"icon_color",
	"",
	esc_html__( "Icon Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"icon_color",
	$icon_color
);

$icon_hover_color = new PitchQodeField(
	"colorsimple",
	"icon_hover_color",
	"",
	esc_html__( "Icon Hover Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"icon_hover_color",
	$icon_hover_color
);

$icon_background_color = new PitchQodeField(
	"colorsimple",
	"icon_background_color",
	"",
	esc_html__( "Icon Background Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"icon_background_color",
	$icon_background_color
);

$icon_hover_background_color = new PitchQodeField(
	"colorsimple",
	"icon_hover_background_color",
	"",
	esc_html__( "Icon Hover Background Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"icon_hover_background_color",
	$icon_hover_background_color
);

$row2 = new PitchQodeRow( true );
$group2->addChild(
	"row2",
	$row2
);

$icon_border_width = new PitchQodeField(
	"textsimple",
	"icon_border_width",
	"",
	esc_html__( "Icon Border Width", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"icon_border_width",
	$icon_border_width
);

$icon_border_color = new PitchQodeField(
	"colorsimple",
	"icon_border_color",
	"",
	esc_html__( "Icon Border Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"icon_border_color",
	$icon_border_color
);

$icon_hover_border_color = new PitchQodeField(
	"colorsimple",
	"icon_hover_border_color",
	"",
	esc_html__( "Icon Hover Border Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"icon_hover_border_color",
	$icon_hover_border_color
);

$icon_box_shadows = new PitchQodeField(
	'yesno',
	'icon_box_shadows',
	'no',
	esc_html__( 'Show Icon Shadows', 'pitch' ),
	esc_html__( 'Enabling this option will show icon shadow', 'pitch' ),
	array(),
	array(
		'dependence'             => true,
		'dependence_hide_on_yes' => '',
		'dependence_show_on_yes' => '#qodef_icon_box_shadows_container'
	)
);
$panel19->addChild(
	'icon_box_shadows',
	$icon_box_shadows
);

$icon_box_shadows_container = new PitchQodeContainer(
	'icon_box_shadows_container',
	'icon_box_shadows',
	'no'
);
$panel19->addChild(
	'icon_box_shadows_container',
	$icon_box_shadows_container
);

$group3 = new PitchQodeGroup(
	esc_html__( 'Icon Shadows', 'pitch' ),
	esc_html__( 'Set horizontal and vertical position of shadow (negative values are allowed), and define blur and spread.', 'pitch' )
);
$icon_box_shadows_container->addChild(
	'group3',
	$group3
);

$row3 = new PitchQodeRow();
$group3->addChild(
	'row3',
	$row3
);

$icon_box_shadow_horizontal_shadow = new PitchQodeField(
	'textsimple',
	'icon_box_shadow_horizontal_shadow',
	'',
	esc_html__( 'Horizontal Shadow (px)', 'pitch' )
);
$row3->addChild(
	'icon_box_shadow_horizontal_shadow',
	$icon_box_shadow_horizontal_shadow
);

$icon_box_shadow_vertical_shadow = new PitchQodeField(
	'textsimple',
	'icon_box_shadow_vertical_shadow',
	'',
	esc_html__( 'Vertical Shadow (px)', 'pitch' )
);
$row3->addChild(
	'icon_box_shadow_vertical_shadow',
	$icon_box_shadow_vertical_shadow
);

$icon_box_shadow_blur_distance = new PitchQodeField(
	'textsimple',
	'icon_box_shadow_blur_distance',
	'',
	esc_html__( 'Blur (px)', 'pitch' )
);
$row3->addChild(
	'icon_box_shadow_blur_distance',
	$icon_box_shadow_blur_distance
);

$icon_box_shadow_shadow_size = new PitchQodeField(
	'textsimple',
	'icon_box_shadow_shadow_size',
	'',
	esc_html__( 'Spread (px)', 'pitch' )
);
$row3->addChild(
	'icon_box_shadow_shadow_size',
	$icon_box_shadow_shadow_size
);

$row4 = new PitchQodeRow( true );
$group3->addChild(
	'row4',
	$row4
);

$icon_box_shadow_shadow_color = new PitchQodeField(
	'colorsimple',
	'icon_box_shadow_shadow_color',
	'',
	esc_html__( 'Shadow color', 'pitch' )
);
$row4->addChild(
	'icon_box_shadow_shadow_color',
	$icon_box_shadow_shadow_color
);

$panel21 = new PitchQodePanel(
	esc_html__( "Icon With Text", 'pitch' ),
	"icon_with_text_panel"
);
$elementsPage->addChild(
	"panel21",
	$panel21
);

$group1 = new PitchQodeGroup(
	esc_html__( "Normal Icons", 'pitch' ),
	esc_html__( "Define Normal Icons style", 'pitch' )
);
$panel21->addChild(
	"group1",
	$group1
);

$row1 = new PitchQodeRow();
$group1->addChild(
	"row1",
	$row1
);

$icon_with_text_icon_color_normal = new PitchQodeField(
	"colorsimple",
	"icon_with_text_icon_color_normal",
	"",
	esc_html__( "Icon Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"icon_with_text_icon_color_normal",
	$icon_with_text_icon_color_normal
);

$icon_with_text_icon_hover_color_normal = new PitchQodeField(
	"colorsimple",
	"icon_with_text_icon_hover_color_normal",
	"",
	esc_html__( "Icon Hover Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"icon_with_text_icon_hover_color_normal",
	$icon_with_text_icon_hover_color_normal
);

$group2 = new PitchQodeGroup(
	esc_html__( "Icons Circle/Square", 'pitch' ),
	esc_html__( "Define circle/square Icons style", 'pitch' )
);
$panel21->addChild(
	"group2",
	$group2
);

$row1 = new PitchQodeRow();
$group2->addChild(
	"row1",
	$row1
);

$icon_with_text_icon_color = new PitchQodeField(
	"colorsimple",
	"icon_with_text_icon_color",
	"",
	esc_html__( "Icon Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"icon_with_text_icon_color",
	$icon_with_text_icon_color
);

$icon_with_text_icon_hover_color = new PitchQodeField(
	"colorsimple",
	"icon_with_text_icon_hover_color",
	"",
	esc_html__( "Icon Hover Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"icon_with_text_icon_hover_color",
	$icon_with_text_icon_hover_color
);

$icon_with_text_icon_background_color = new PitchQodeField(
	"colorsimple",
	"icon_with_text_icon_background_color",
	"",
	esc_html__( "Icon Background Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"icon_with_text_icon_background_color",
	$icon_with_text_icon_background_color
);

$icon_with_text_icon_hover_background_color = new PitchQodeField(
	"colorsimple",
	"icon_with_text_icon_hover_background_color",
	"",
	esc_html__( "Icon Hover Background Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"icon_with_text_icon_hover_background_color",
	$icon_with_text_icon_hover_background_color
);

$row2 = new PitchQodeRow( true );
$group2->addChild(
	"row2",
	$row2
);

$icon_with_text_icon_border_width = new PitchQodeField(
	"textsimple",
	"icon_with_text_icon_border_width",
	"",
	esc_html__( "Icon Border Width", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"icon_with_text_icon_border_width",
	$icon_with_text_icon_border_width
);

$icon_with_text_icon_border_color = new PitchQodeField(
	"colorsimple",
	"icon_with_text_icon_border_color",
	"",
	esc_html__( "Icon Border Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"icon_with_text_icon_border_color",
	$icon_with_text_icon_border_color
);

$icon_with_text_icon_hover_border_color = new PitchQodeField(
	"colorsimple",
	"icon_with_text_icon_hover_border_color",
	"",
	esc_html__( "Icon Hover Border Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"icon_with_text_icon_hover_border_color",
	$icon_with_text_icon_hover_border_color
);

$icon_with_text_box_shadows = new PitchQodeField(
	'yesno',
	'icon_with_text_box_shadows',
	'no',
	esc_html__( 'Show Icon Shadows', 'pitch' ),
	esc_html__( 'Enabling this option will show icon shadow', 'pitch' ),
	array(),
	array(
		'dependence'             => true,
		'dependence_hide_on_yes' => '',
		'dependence_show_on_yes' => '#qodef_icon_with_text_box_shadows_container'
	)
);
$panel21->addChild(
	'icon_with_text_box_shadows',
	$icon_with_text_box_shadows
);

$icon_with_text_box_shadows_container = new PitchQodeContainer(
	'icon_with_text_box_shadows_container',
	'icon_with_text_box_shadows',
	'no'
);
$panel21->addChild(
	'icon_with_text_box_shadows_container',
	$icon_with_text_box_shadows_container
);

$group3 = new PitchQodeGroup(
	esc_html__( 'Icon Shadows', 'pitch' ),
	esc_html__( 'Set horizontal and vertical position of shadow (negative values are allowed), and define blur and spread.', 'pitch' )
);
$icon_with_text_box_shadows_container->addChild(
	'group3',
	$group3
);

$row3 = new PitchQodeRow();
$group3->addChild(
	'row3',
	$row3
);

$icon_with_text_box_shadow_horizontal_shadow = new PitchQodeField(
	'textsimple',
	'icon_with_text_box_shadow_horizontal_shadow',
	'',
	esc_html__( 'Horizontal Shadow (px)', 'pitch' )
);
$row3->addChild(
	'icon_with_text_box_shadow_horizontal_shadow',
	$icon_with_text_box_shadow_horizontal_shadow
);

$icon_with_text_box_shadow_vertical_shadow = new PitchQodeField(
	'textsimple',
	'icon_with_text_box_shadow_vertical_shadow',
	'',
	esc_html__( 'Vertical Shadow (px)', 'pitch' )
);
$row3->addChild(
	'icon_with_text_box_shadow_vertical_shadow',
	$icon_with_text_box_shadow_vertical_shadow
);

$icon_with_text_box_shadow_blur_distance = new PitchQodeField(
	'textsimple',
	'icon_with_text_box_shadow_blur_distance',
	'',
	esc_html__( 'Blur (px)', 'pitch' )
);
$row3->addChild(
	'icon_with_text_box_shadow_blur_distance',
	$icon_with_text_box_shadow_blur_distance
);

$icon_with_text_box_shadow_shadow_size = new PitchQodeField(
	'textsimple',
	'icon_with_text_box_shadow_shadow_size',
	'',
	esc_html__( 'Spread (px)', 'pitch' )
);
$row3->addChild(
	'icon_with_text_box_shadow_shadow_size',
	$icon_with_text_box_shadow_shadow_size
);

$row4 = new PitchQodeRow( true );
$group3->addChild(
	'row4',
	$row4
);

$icon_with_text_box_shadow_shadow_color = new PitchQodeField(
	'colorsimple',
	'icon_with_text_box_shadow_shadow_color',
	'',
	esc_html__( 'Shadow color', 'pitch' )
);
$row4->addChild(
	'icon_with_text_box_shadow_shadow_color',
	$icon_with_text_box_shadow_shadow_color
);

//Input Fields

$panel7 = new PitchQodePanel(
	esc_html__( "Input Fields", 'pitch' ),
	"input_fields_panel"
);
$elementsPage->addChild(
	"panel7",
	$panel7
);

$group1 = new PitchQodeGroup(
	esc_html__( "Input Fields Style", 'pitch' ),
	esc_html__( "Define styles for Input Fields", 'pitch' )
);
$panel7->addChild(
	"group1",
	$group1
);
$row1 = new PitchQodeRow();
$group1->addChild(
	"row1",
	$row1
);

$input_background_color = new PitchQodeField(
	"colorsimple",
	"input_background_color",
	"",
	esc_html__( "Background Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"input_background_color",
	$input_background_color
);

$input_focus_background_color = new PitchQodeField(
	"colorsimple",
	"input_focus_background_color",
	"",
	esc_html__( "Focus Background Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"input_focus_background_color",
	$input_focus_background_color
);

$input_border_color = new PitchQodeField(
	"colorsimple",
	"input_border_color",
	"",
	esc_html__( "Border Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"input_border_color",
	$input_border_color
);

$input_focus_border_color = new PitchQodeField(
	"colorsimple",
	"input_focus_border_color",
	"",
	esc_html__( "Focus Border Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"input_focus_border_color",
	$input_focus_border_color
);

$row2 = new PitchQodeRow( true );
$group1->addChild(
	"row2",
	$row2
);

$input_text_color = new PitchQodeField(
	"colorsimple",
	"input_text_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"input_text_color",
	$input_text_color
);

$input_focus_text_color = new PitchQodeField(
	"colorsimple",
	"input_focus_text_color",
	"",
	esc_html__( "Focus Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"input_focus_text_color",
	$input_focus_text_color
);

//Interactive Banners

$panel71 = new PitchQodePanel(
	esc_html__( "Interactive Banners", 'pitch' ),
	"interactive_banners_panel"
);
$elementsPage->addChild(
	"panel71",
	$panel71
);

$group1 = new PitchQodeGroup(
	esc_html__( "Interactive Banners Style", 'pitch' ),
	esc_html__( "Define styles for Interactive Banners", 'pitch' )
);
$panel71->addChild(
	"group1",
	$group1
);
$row1 = new PitchQodeRow();
$group1->addChild(
	"row1",
	$row1
);

$interactive_banners_background_color = new PitchQodeField(
	"colorsimple",
	"interactive_banners_background_color",
	"",
	esc_html__( "Image Overlay Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"interactive_banners_background_color",
	$interactive_banners_background_color
);

$interactive_banners_background_transparency = new PitchQodeField(
	"textsimple",
	"interactive_banners_background_transparency",
	"",
	esc_html__( "Image Overlay Color Transparency (0-1)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"interactive_banners_background_transparency",
	$interactive_banners_background_transparency
);

$interactive_banners_hover_background_color = new PitchQodeField(
	"colorsimple",
	"interactive_banners_hover_background_color",
	"",
	esc_html__( "Image Overlay Hover Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"interactive_banners_hover_background_color",
	$interactive_banners_hover_background_color
);

$interactive_banners_hover_background_transparency = new PitchQodeField(
	"textsimple",
	"interactive_banners_hover_background_transparency",
	"",
	esc_html__( "Image Overlay Hover Color Transparency", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"interactive_banners_hover_background_transparency",
	$interactive_banners_hover_background_transparency
);

$group2 = new PitchQodeGroup(
	esc_html__( "Interactive Banners Padding", 'pitch' ),
	esc_html__( "Define interactive banners padding", 'pitch' )
);
$panel71->addChild(
	"group2",
	$group2
);

$row1 = new PitchQodeRow( true );
$group2->addChild(
	"row1",
	$row1
);

$interactive_banners_padding_left = new PitchQodeField(
	"textsimple",
	"interactive_banners_padding_left",
	"",
	esc_html__( "Padding Left (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"interactive_banners_padding_left",
	$interactive_banners_padding_left
);

$interactive_banners_padding_right = new PitchQodeField(
	"textsimple",
	"interactive_banners_padding_right",
	"",
	esc_html__( "Padding Right (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"interactive_banners_padding_right",
	$interactive_banners_padding_right
);

$interactive_banners_padding_top = new PitchQodeField(
	"textsimple",
	"interactive_banners_padding_top",
	"",
	esc_html__( "Padding Top (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"interactive_banners_padding_top",
	$interactive_banners_padding_top
);

$interactive_banners_padding_bottom = new PitchQodeField(
	"textsimple",
	"interactive_banners_padding_bottom",
	"",
	esc_html__( "Padding Bottom (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"interactive_banners_padding_bottom",
	$interactive_banners_padding_bottom
);

$group3 = new PitchQodeGroup(
	esc_html__( "Interactive Banners Title", 'pitch' ),
	esc_html__( "Define interactive banners title style", 'pitch' )
);
$panel71->addChild(
	"group3",
	$group3
);

$row1 = new PitchQodeRow();
$group3->addChild(
	"row1",
	$row1
);

$interactive_banners_title_color = new PitchQodeField(
	"colorsimple",
	"interactive_banners_title_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"interactive_banners_title_color",
	$interactive_banners_title_color
);

$interactive_banners_title_font_size = new PitchQodeField(
	"textsimple",
	"interactive_banners_title_font_size",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"interactive_banners_title_font_size",
	$interactive_banners_title_font_size
);

$interactive_banners_title_line_height = new PitchQodeField(
	"textsimple",
	"interactive_banners_title_line_height",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"interactive_banners_title_line_height",
	$interactive_banners_title_line_height
);

$interactive_banners_title_text_transform = new PitchQodeField(
	"selectblanksimple",
	"interactive_banners_title_text_transform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	"interactive_banners_title_text_transform",
	$interactive_banners_title_text_transform
);

$row2 = new PitchQodeRow( true );
$group3->addChild(
	"row2",
	$row2
);

$interactive_banners_title_font_family = new PitchQodeField(
	"fontsimple",
	"interactive_banners_title_font_family",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"interactive_banners_title_font_family",
	$interactive_banners_title_font_family
);

$interactive_banners_title_font_style = new PitchQodeField(
	"selectblanksimple",
	"interactive_banners_title_font_style",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"interactive_banners_title_font_style",
	$interactive_banners_title_font_style
);

$interactive_banners_title_font_weight = new PitchQodeField(
	"selectblanksimple",
	"interactive_banners_title_font_weight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"interactive_banners_title_font_weight",
	$interactive_banners_title_font_weight
);

$interactive_banners_title_letter_spacing = new PitchQodeField(
	"textsimple",
	"interactive_banners_title_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"interactive_banners_title_letter_spacing",
	$interactive_banners_title_letter_spacing
);

//Lists

$panel72 = new PitchQodePanel(
	esc_html__( "Lists", 'pitch' ),
	"lists"
);
$elementsPage->addChild(
	"panel72",
	$panel72
);

$group1 = new PitchQodeGroup(
	esc_html__( "Unordered List Style", 'pitch' ),
	esc_html__( "Define styles for Unordered Lists", 'pitch' )
);
$panel72->addChild(
	"group1",
	$group1
);
$row1 = new PitchQodeRow();
$group1->addChild(
	"row1",
	$row1
);

$list_item_color = new PitchQodeField(
	"colorsimple",
	"list_item_color",
	"",
	esc_html__( "List Bullet Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"list_item_color",
	$list_item_color
);
$row2 = new PitchQodeRow( true );
$group1->addChild(
	"row2",
	$row2
);

$list_color = new PitchQodeField(
	"colorsimple",
	"list_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"list_color",
	$list_color
);

$list_fontsize = new PitchQodeField(
	"textsimple",
	"list_fontsize",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"list_fontsize",
	$list_fontsize
);

$list_lineheight = new PitchQodeField(
	"textsimple",
	"list_lineheight",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"list_lineheight",
	$list_lineheight
);

$list_texttransform = new PitchQodeField(
	"selectblanksimple",
	"list_texttransform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row2->addChild(
	"list_texttransform",
	$list_texttransform
);

$row3 = new PitchQodeRow( true );
$group1->addChild(
	"row3",
	$row3
);
$list_google_fonts = new PitchQodeField(
	"fontsimple",
	"list_google_fonts",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row3->addChild(
	"list_google_fonts",
	$list_google_fonts
);

$list_fontstyle = new PitchQodeField(
	"selectblanksimple",
	"list_fontstyle",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row3->addChild(
	"list_fontstyle",
	$list_fontstyle
);

$list_fontweight = new PitchQodeField(
	"selectblanksimple",
	"list_fontweight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row3->addChild(
	"list_fontweight",
	$list_fontweight
);

$list_letter_spacing = new PitchQodeField(
	"textsimple",
	"list_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row3->addChild(
	"list_letter_spacing",
	$list_letter_spacing
);
$row4 = new PitchQodeRow( true );
$group1->addChild(
	"row4",
	$row4
);
$list_bottom_margin = new PitchQodeField(
	"textsimple",
	"list_bottom_margin",
	"",
	esc_html__( "Item bottom margin (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row4->addChild(
	"list_bottom_margin",
	$list_bottom_margin
);

$list_separator_color = new PitchQodeField(
	"colorsimple",
	"list_separator_color",
	"",
	esc_html__( "Separator Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row4->addChild(
	"list_separator_color",
	$list_separator_color
);

$group2 = new PitchQodeGroup(
	esc_html__( "Ordered List Style", 'pitch' ),
	esc_html__( "Define styles for Ordered lists", 'pitch' )
);
$panel72->addChild(
	"group2",
	$group2
);
$row1 = new PitchQodeRow();
$group2->addChild(
	"row1",
	$row1
);

$list_ordered_item_color = new PitchQodeField(
	"colorsimple",
	"list_ordered_item_color",
	"",
	esc_html__( "List Number Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"list_ordered_item_color",
	$list_ordered_item_color
);
$row2 = new PitchQodeRow( true );
$group2->addChild(
	"row2",
	$row2
);

$list_ordered_color = new PitchQodeField(
	"colorsimple",
	"list_ordered_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"list_ordered_color",
	$list_ordered_color
);

$list_ordered_fontsize = new PitchQodeField(
	"textsimple",
	"list_ordered_fontsize",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"list_ordered_fontsize",
	$list_ordered_fontsize
);

$list_ordered_lineheight = new PitchQodeField(
	"textsimple",
	"list_ordered_lineheight",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"list_ordered_lineheight",
	$list_ordered_lineheight
);

$list_ordered_texttransform = new PitchQodeField(
	"selectblanksimple",
	"list_ordered_texttransform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row2->addChild(
	"list_ordered_texttransform",
	$list_ordered_texttransform
);

$row3 = new PitchQodeRow( true );
$group2->addChild(
	"row3",
	$row3
);
$list_ordered_google_fonts = new PitchQodeField(
	"fontsimple",
	"list_ordered_google_fonts",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row3->addChild(
	"list_ordered_google_fonts",
	$list_ordered_google_fonts
);

$list_ordered_fontstyle = new PitchQodeField(
	"selectblanksimple",
	"list_ordered_fontstyle",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row3->addChild(
	"list_ordered_fontstyle",
	$list_ordered_fontstyle
);

$list_ordered_fontweight = new PitchQodeField(
	"selectblanksimple",
	"list_ordered_fontweight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row3->addChild(
	"list_ordered_fontweight",
	$list_ordered_fontweight
);

$list_ordered_letter_spacing = new PitchQodeField(
	"textsimple",
	"list_ordered_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row3->addChild(
	"list_ordered_letter_spacing",
	$list_ordered_letter_spacing
);
$row4 = new PitchQodeRow( true );
$group2->addChild(
	"row4",
	$row4
);
$list_ordered_bottom_margin = new PitchQodeField(
	"textsimple",
	"list_ordered_bottom_margin",
	"",
	esc_html__( "Item bottom margin (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row4->addChild(
	"list_ordered_bottom_margin",
	$list_ordered_bottom_margin
);

$list_ordered_separator_color = new PitchQodeField(
	"colorsimple",
	"list_ordered_separator_color",
	"",
	esc_html__( "Separator Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row4->addChild(
	"list_ordered_separator_color",
	$list_ordered_separator_color
);

$group3 = new PitchQodeGroup(
	esc_html__( "Icon List Item Style", 'pitch' ),
	esc_html__( "Define styles for icon list item", 'pitch' )
);
$panel72->addChild(
	"group3",
	$group3
);
$row1 = new PitchQodeRow( true );
$group3->addChild(
	"row1",
	$row1
);

$icon_list_item_separator_color = new PitchQodeField(
	"colorsimple",
	"icon_list_item_separator_color",
	"",
	esc_html__( "Separator Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"icon_list_item_separator_color",
	$icon_list_item_separator_color
);

//Masonry Gallery
$panel30 = new PitchQodePanel(
	esc_html__( 'Masonry Gallery', 'pitch' ),
	'masonry_gallery_panel'
);
$elementsPage->addChild(
	'panel30',
	$panel30
);

$masonry_gallery_space = new PitchQodeField(
	"text",
	"masonry_gallery_space",
	"",
	esc_html__( "Space between Items (px)", 'pitch' ),
	esc_html__( "Define a space between items in the Masonry Gallery", 'pitch' ),
	array(),
	array( "col_width" => 3 )
);
$panel30->addChild(
	"masonry_gallery_space",
	$masonry_gallery_space
);

//Square Big
$masonry_gallery_square_big_title = new PitchQodeTitle(
	'masonry_gallery_square_big_title',
	esc_html__( 'Square Big', 'pitch' )
);
$panel30->addChild(
	'masonry_gallery_square_big_title',
	$masonry_gallery_square_big_title
);

$masonry_gallery_square_big_title_group = new PitchQodeGroup(
	esc_html__( 'Title Style', 'pitch' ),
	esc_html__( 'Define Square Big Title Style', 'pitch' )
);
$panel30->addChild(
	'masonry_gallery_square_big_title_group',
	$masonry_gallery_square_big_title_group
);

$row1 = new PitchQodeRow();
$masonry_gallery_square_big_title_group->addChild(
	"row1",
	$row1
);

$masonry_gallery_square_big_title_color = new PitchQodeField(
	'colorsimple',
	'masonry_gallery_square_big_title_color',
	'',
	esc_html__( 'Title Color', 'pitch' )
);
$row1->addChild(
	'masonry_gallery_square_big_title_color',
	$masonry_gallery_square_big_title_color
);

$masonry_gallery_square_big_title_font_size = new PitchQodeField(
	'textsimple',
	'masonry_gallery_square_big_title_font_size',
	'',
	esc_html__( 'Font size (px)', 'pitch' )
);
$row1->addChild(
	'masonry_gallery_square_big_title_font_size',
	$masonry_gallery_square_big_title_font_size
);

$masonry_gallery_square_big_title_line_height = new PitchQodeField(
	'textsimple',
	'masonry_gallery_square_big_title_line_height',
	'',
	esc_html__( 'Line Height (px)', 'pitch' )
);
$row1->addChild(
	'masonry_gallery_square_big_title_line_height',
	$masonry_gallery_square_big_title_line_height
);

$masonry_gallery_square_big_title_text_transform = new PitchQodeField(
	'selectblanksimple',
	'masonry_gallery_square_big_title_text_transform',
	'',
	esc_html__( 'Text Transform', 'pitch' ),
	'',
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	'masonry_gallery_square_big_title_text_transform',
	$masonry_gallery_square_big_title_text_transform
);

$row2 = new PitchQodeRow( true );
$masonry_gallery_square_big_title_group->addChild(
	"row2",
	$row2
);

$masonry_gallery_square_big_title_font_family = new PitchQodeField(
	'fontsimple',
	'masonry_gallery_square_big_title_font_family',
	'-1',
	esc_html__( 'Font Family', 'pitch' )
);
$row2->addChild(
	'masonry_gallery_square_big_title_font_family',
	$masonry_gallery_square_big_title_font_family
);

$masonry_gallery_square_big_title_font_style = new PitchQodeField(
	'selectblanksimple',
	'masonry_gallery_square_big_title_font_style',
	'',
	esc_html__( 'Font Style', 'pitch' ),
	'',
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	'masonry_gallery_square_big_title_font_style',
	$masonry_gallery_square_big_title_font_style
);

$masonry_gallery_square_big_title_font_weight = new PitchQodeField(
	'selectblanksimple',
	'masonry_gallery_square_big_title_font_weight',
	'',
	esc_html__( 'Font Weight', 'pitch' ),
	'',
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	'masonry_gallery_square_big_title_font_weight',
	$masonry_gallery_square_big_title_font_weight
);

$masonry_gallery_square_big_title_letter_spacing = new PitchQodeField(
	'textsimple',
	'masonry_gallery_square_big_title_letter_spacing',
	'',
	esc_html__( 'Letter Spacing', 'pitch' )
);
$row2->addChild(
	'masonry_gallery_square_big_title_letter_spacing',
	$masonry_gallery_square_big_title_letter_spacing
);

$row3 = new PitchQodeRow( true );
$masonry_gallery_square_big_title_group->addChild(
	"row3",
	$row3
);

$masonry_gallery_square_big_title_margin_bottom = new PitchQodeField(
	'textsimple',
	'masonry_gallery_square_big_title_margin_bottom',
	'',
	esc_html__( 'Margin Bottom', 'pitch' )
);
$row3->addChild(
	'masonry_gallery_square_big_title_margin_bottom',
	$masonry_gallery_square_big_title_margin_bottom
);

$masonry_gallery_square_big_text_group = new PitchQodeGroup(
	esc_html__( 'Text Style', 'pitch' ),
	esc_html__( 'Define Square Big Text Style', 'pitch' )
);
$panel30->addChild(
	'masonry_gallery_square_big_text_group',
	$masonry_gallery_square_big_text_group
);

$row1 = new PitchQodeRow();
$masonry_gallery_square_big_text_group->addChild(
	"row1",
	$row1
);

$masonry_gallery_square_big_text_color = new PitchQodeField(
	'colorsimple',
	'masonry_gallery_square_big_text_color',
	'',
	esc_html__( 'Text Color', 'pitch' )
);
$row1->addChild(
	'masonry_gallery_square_big_text_color',
	$masonry_gallery_square_big_text_color
);

$masonry_gallery_square_big_text_font_size = new PitchQodeField(
	'textsimple',
	'masonry_gallery_square_big_text_font_size',
	'',
	esc_html__( 'Font size (px)', 'pitch' )
);
$row1->addChild(
	'masonry_gallery_square_big_text_font_size',
	$masonry_gallery_square_big_text_font_size
);

$masonry_gallery_square_big_text_line_height = new PitchQodeField(
	'textsimple',
	'masonry_gallery_square_big_text_line_height',
	'',
	esc_html__( 'Line Height (px)', 'pitch' )
);
$row1->addChild(
	'masonry_gallery_square_big_text_line_height',
	$masonry_gallery_square_big_text_line_height
);

$masonry_gallery_square_big_text_text_transform = new PitchQodeField(
	'selectblanksimple',
	'masonry_gallery_square_big_text_text_transform',
	'',
	esc_html__( 'Text Transform', 'pitch' ),
	'',
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	'masonry_gallery_square_big_text_text_transform',
	$masonry_gallery_square_big_text_text_transform
);

$row2 = new PitchQodeRow( true );
$masonry_gallery_square_big_text_group->addChild(
	"row2",
	$row2
);

$masonry_gallery_square_big_text_font_family = new PitchQodeField(
	'fontsimple',
	'masonry_gallery_square_big_text_font_family',
	'-1',
	esc_html__( 'Font Family', 'pitch' )
);
$row2->addChild(
	'masonry_gallery_square_big_text_font_family',
	$masonry_gallery_square_big_text_font_family
);

$masonry_gallery_square_big_text_font_style = new PitchQodeField(
	'selectblanksimple',
	'masonry_gallery_square_big_text_font_style',
	'',
	esc_html__( 'Font Style', 'pitch' ),
	'',
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	'masonry_gallery_square_big_text_font_style',
	$masonry_gallery_square_big_text_font_style
);

$masonry_gallery_square_big_text_font_weight = new PitchQodeField(
	'selectblanksimple',
	'masonry_gallery_square_big_text_font_weight',
	'',
	esc_html__( 'Font Weight', 'pitch' ),
	'',
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	'masonry_gallery_square_big_text_font_weight',
	$masonry_gallery_square_big_text_font_weight
);

$masonry_gallery_square_big_text_letter_spacing = new PitchQodeField(
	'textsimple',
	'masonry_gallery_square_big_text_letter_spacing',
	'',
	esc_html__( 'Letter Spacing', 'pitch' )
);
$row2->addChild(
	'masonry_gallery_square_big_text_letter_spacing',
	$masonry_gallery_square_big_text_letter_spacing
);

$masonry_gallery_square_big_button_group = new PitchQodeGroup(
	esc_html__( 'Button Style', 'pitch' ),
	esc_html__( 'Define Square Big Button Style', 'pitch' )
);
$panel30->addChild(
	'masonry_gallery_square_big_button_group',
	$masonry_gallery_square_big_button_group
);

$row1 = new PitchQodeRow();
$masonry_gallery_square_big_button_group->addChild(
	'row1',
	$row1
);

$masonry_gallery_square_big_button_font_family = new PitchQodeField(
	'fontsimple',
	'masonry_gallery_square_big_button_font_family',
	'-1',
	esc_html__( 'Font Family', 'pitch' )
);
$row1->addChild(
	'masonry_gallery_square_big_button_font_family',
	$masonry_gallery_square_big_button_font_family
);

$masonry_gallery_square_big_button_font_style = new PitchQodeField(
	'selectblanksimple',
	'masonry_gallery_square_big_button_font_style',
	'',
	esc_html__( 'Font Style', 'pitch' ),
	'',
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row1->addChild(
	'masonry_gallery_square_big_button_font_style',
	$masonry_gallery_square_big_button_font_style
);

$masonry_gallery_square_big_button_font_weight = new PitchQodeField(
	'selectblanksimple',
	'masonry_gallery_square_big_button_font_weight',
	'',
	esc_html__( 'Font Weight', 'pitch' ),
	'',
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row1->addChild(
	'masonry_gallery_square_big_button_font_weight',
	$masonry_gallery_square_big_button_font_weight
);

$masonry_gallery_square_big_button_text_transform = new PitchQodeField(
	'selectblanksimple',
	'masonry_gallery_square_big_button_text_transform',
	'',
	esc_html__( 'Text Transform', 'pitch' ),
	'',
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	'masonry_gallery_square_big_button_text_transform',
	$masonry_gallery_square_big_button_text_transform
);

$row2 = new PitchQodeRow( true );
$masonry_gallery_square_big_button_group->addChild(
	'row2',
	$row2
);

$masonry_gallery_square_big_button_font_size = new PitchQodeField(
	'textsimple',
	'masonry_gallery_square_big_button_font_size',
	'',
	esc_html__( 'Text Size (px)', 'pitch' )
);
$row2->addChild(
	'masonry_gallery_square_big_button_font_size',
	$masonry_gallery_square_big_button_font_size
);

$masonry_gallery_square_big_button_line_height = new PitchQodeField(
	'textsimple',
	'masonry_gallery_square_big_button_line_height',
	'',
	esc_html__( 'Line Height (px)', 'pitch' )
);
$row2->addChild(
	'masonry_gallery_square_big_button_line_height',
	$masonry_gallery_square_big_button_line_height
);

$masonry_gallery_square_big_button_letter_spacing = new PitchQodeField(
	'textsimple',
	'masonry_gallery_square_big_button_letter_spacing',
	'',
	esc_html__( 'Letter Spacing (px)', 'pitch' )
);
$row2->addChild(
	'masonry_gallery_square_big_button_letter_spacing',
	$masonry_gallery_square_big_button_letter_spacing
);

$row3 = new PitchQodeRow( true );
$masonry_gallery_square_big_button_group->addChild(
	'row3',
	$row3
);

$masonry_gallery_square_big_button_text_color = new PitchQodeField(
	'colorsimple',
	'masonry_gallery_square_big_button_text_color',
	'',
	esc_html__( 'Text Color', 'pitch' )
);
$row3->addChild(
	'masonry_gallery_square_big_button_text_color',
	$masonry_gallery_square_big_button_text_color
);

$masonry_gallery_square_big_button_hover_text_color = new PitchQodeField(
	'colorsimple',
	'masonry_gallery_square_big_button_hover_text_color',
	'',
	esc_html__( 'Hover Text Color', 'pitch' )
);
$row3->addChild(
	'masonry_gallery_square_big_button_hover_text_color',
	$masonry_gallery_square_big_button_hover_text_color
);

$masonry_gallery_square_big_button_background_color = new PitchQodeField(
	'colorsimple',
	'masonry_gallery_square_big_button_background_color',
	'',
	esc_html__( 'Background Color', 'pitch' )
);
$row3->addChild(
	'masonry_gallery_square_big_button_background_color',
	$masonry_gallery_square_big_button_background_color
);

$masonry_gallery_square_big_button_hover_background_color = new PitchQodeField(
	'colorsimple',
	'masonry_gallery_square_big_button_hover_background_color',
	'',
	esc_html__( 'Hover Background Color', 'pitch' )
);
$row3->addChild(
	'masonry_gallery_square_big_button_hover_background_color',
	$masonry_gallery_square_big_button_hover_background_color
);

$row4 = new PitchQodeRow( true );
$masonry_gallery_square_big_button_group->addChild(
	'row4',
	$row4
);

$masonry_gallery_square_big_button_border_color = new PitchQodeField(
	'colorsimple',
	'masonry_gallery_square_big_button_border_color',
	'',
	esc_html__( 'Border Color', 'pitch' )
);
$row4->addChild(
	'masonry_gallery_square_big_button_border_color',
	$masonry_gallery_square_big_button_border_color
);

$masonry_gallery_square_big_button_hover_border_color = new PitchQodeField(
	'colorsimple',
	'masonry_gallery_square_big_button_hover_border_color',
	'',
	esc_html__( 'Hover Border Color', 'pitch' )
);
$row4->addChild(
	'masonry_gallery_square_big_button_hover_border_color',
	$masonry_gallery_square_big_button_hover_border_color
);

$masonry_gallery_square_big_button_border_width = new PitchQodeField(
	'textsimple',
	'masonry_gallery_square_big_button_border_width',
	'',
	esc_html__( 'Border Width (px)', 'pitch' )
);
$row4->addChild(
	'masonry_gallery_square_big_button_border_width',
	$masonry_gallery_square_big_button_border_width
);

$masonry_gallery_square_big_button_border_radius = new PitchQodeField(
	'textsimple',
	'masonry_gallery_square_big_button_border_radius',
	'',
	esc_html__( 'Border Radius (px)', 'pitch' )
);
$row4->addChild(
	'masonry_gallery_square_big_button_border_radius',
	$masonry_gallery_square_big_button_border_radius
);

$row5 = new PitchQodeRow( true );
$masonry_gallery_square_big_button_group->addChild(
	'row5',
	$row5
);

$masonry_gallery_square_big_button_padding_left = new PitchQodeField(
	'textsimple',
	'masonry_gallery_square_big_button_padding_left',
	'',
	esc_html__( 'Padding Left (px)', 'pitch' )
);
$row5->addChild(
	'masonry_gallery_square_big_button_padding_left',
	$masonry_gallery_square_big_button_padding_left
);

$masonry_gallery_square_big_button_padding_right = new PitchQodeField(
	'textsimple',
	'masonry_gallery_square_big_button_padding_right',
	'',
	esc_html__( 'Padding Right (px)', 'pitch' )
);
$row5->addChild(
	'masonry_gallery_square_big_button_padding_right',
	$masonry_gallery_square_big_button_padding_right
);

$masonry_gallery_square_big_button_margin_top = new PitchQodeField(
	'textsimple',
	'masonry_gallery_square_big_button_margin_top',
	'',
	esc_html__( 'Margin Top', 'pitch' )
);
$row5->addChild(
	'masonry_gallery_square_big_button_margin_top',
	$masonry_gallery_square_big_button_margin_top
);

$masonry_gallery_square_big_icon_group = new PitchQodeGroup(
	esc_html__( 'Icon Style', 'pitch' ),
	esc_html__( 'Define Square Big Icon Style', 'pitch' )
);
$panel30->addChild(
	'masonry_gallery_square_big_icon_group',
	$masonry_gallery_square_big_icon_group
);

$row1 = new PitchQodeRow();
$masonry_gallery_square_big_icon_group->addChild(
	'row1',
	$row1
);

$masonry_gallery_square_big_icon_color = new PitchQodeField(
	'colorsimple',
	'masonry_gallery_square_big_icon_color',
	'',
	esc_html__( 'Icon Color', 'pitch' )
);
$row1->addChild(
	'masonry_gallery_square_big_icon_color',
	$masonry_gallery_square_big_icon_color
);

$masonry_gallery_square_big_icon_hover_color = new PitchQodeField(
	'colorsimple',
	'masonry_gallery_square_big_icon_hover_color',
	'',
	esc_html__( 'Icon Hover Color', 'pitch' )
);
$row1->addChild(
	'masonry_gallery_square_big_icon_hover_color',
	$masonry_gallery_square_big_icon_hover_color
);

$masonry_gallery_square_big_icon_size = new PitchQodeField(
	'textsimple',
	'masonry_gallery_square_big_icon_size',
	'',
	esc_html__( 'Icon Size (px)', 'pitch' )
);
$row1->addChild(
	'masonry_gallery_square_big_icon_size',
	$masonry_gallery_square_big_icon_size
);

$masonry_gallery_square_big_icon_margin_bottom = new PitchQodeField(
	'textsimple',
	'masonry_gallery_square_big_icon_margin_bottom',
	'',
	esc_html__( 'Margin Bottom', 'pitch' )
);
$row1->addChild(
	'masonry_gallery_square_big_icon_margin_bottom',
	$masonry_gallery_square_big_icon_margin_bottom
);

$masonry_gallery_square_big_overlay_group = new PitchQodeGroup(
	esc_html__( 'Overlay Style', 'pitch' ),
	esc_html__( 'Define Square Big Overlay Style', 'pitch' )
);
$panel30->addChild(
	'masonry_gallery_square_big_overlay_group',
	$masonry_gallery_square_big_overlay_group
);

$row1 = new PitchQodeRow();
$masonry_gallery_square_big_overlay_group->addChild(
	'row1',
	$row1
);

$masonry_gallery_square_big_overlay_color = new PitchQodeField(
	'colorsimple',
	'masonry_gallery_square_big_overlay_color',
	'',
	esc_html__( 'Color', 'pitch' )
);
$row1->addChild(
	'masonry_gallery_square_big_overlay_color',
	$masonry_gallery_square_big_overlay_color
);

$masonry_gallery_square_big_overlay_transparency = new PitchQodeField(
	'textsimple',
	'masonry_gallery_square_big_overlay_transparency',
	'',
	esc_html__( 'Transparency (0=full - 1=opaque)', 'pitch' )
);
$row1->addChild(
	'masonry_gallery_square_big_overlay_transparency',
	$masonry_gallery_square_big_overlay_transparency
);

$masonry_gallery_square_big_spacing_group = new PitchQodeGroup(
	esc_html__( 'Text Alignment', 'pitch' ),
	esc_html__( 'Define Text Alignment', 'pitch' )
);
$panel30->addChild(
	'masonry_gallery_square_big_spacing_group',
	$masonry_gallery_square_big_spacing_group
);

$row1 = new PitchQodeRow();
$masonry_gallery_square_big_spacing_group->addChild(
	'row1',
	$row1
);

$masonry_gallery_square_big_text_align = new PitchQodeField(
	"selectsimple",
	"masonry_gallery_square_big_text_align",
	"center",
	esc_html__( "Text Alignment", 'pitch' ),
	esc_html__( "Choose text position", 'pitch' ),
	array(
		"center" => esc_html__( "Center", 'pitch' ),
		"left" => esc_html__( "Left", 'pitch' ),
		"right" => esc_html__( "Right", 'pitch' )
	)
);

$row1->addChild(
	"masonry_gallery_square_big_text_align",
	$masonry_gallery_square_big_text_align
);

$masonry_gallery_square_big_padding_group = new PitchQodeGroup(
	esc_html__( 'Content Padding', 'pitch' ),
	esc_html__( 'Please insert padding in px(or %) i.e. 5px (or 5%)', 'pitch' )
);
$panel30->addChild(
	'masonry_gallery_square_big_padding_group',
	$masonry_gallery_square_big_padding_group
);

$row1 = new PitchQodeRow();
$masonry_gallery_square_big_padding_group->addChild(
	'row1',
	$row1
);

$masonry_gallery_square_big_padding_left = new PitchQodeField(
	"textsimple",
	"masonry_gallery_square_big_padding_left",
	"",
	esc_html__( "Padding Left", 'pitch' ),
	esc_html__( "Please insert padding in px(or %) i.e. 5px(or 5%)", 'pitch' ),
	array(),
	array( "col_width" => 3 )
);
$row1->addChild(
	"masonry_gallery_square_big_padding_left",
	$masonry_gallery_square_big_padding_left
);

$masonry_gallery_square_big_padding_right = new PitchQodeField(
	"textsimple",
	"masonry_gallery_square_big_padding_right",
	"",
	esc_html__( "Padding Right", 'pitch' ),
	esc_html__( "Please insert padding in px(or %) i.e. 5px(or 5%)", 'pitch' ),
	array(),
	array( "col_width" => 3 )
);
$row1->addChild(
	"masonry_gallery_square_big_padding_right",
	$masonry_gallery_square_big_padding_right
);

//Square Small
$masonry_gallery_square_small_title = new PitchQodeTitle(
	'masonry_gallery_square_small_title',
	esc_html__( 'Square Small', 'pitch' )
);
$panel30->addChild(
	'masonry_gallery_square_small_title',
	$masonry_gallery_square_small_title
);

$masonry_gallery_square_small_title_group = new PitchQodeGroup(
	esc_html__( 'Title Style', 'pitch' ),
	esc_html__( 'Define Square Small Title Style', 'pitch' )
);
$panel30->addChild(
	'masonry_gallery_square_small_title_group',
	$masonry_gallery_square_small_title_group
);

$row1 = new PitchQodeRow();
$masonry_gallery_square_small_title_group->addChild(
	"row1",
	$row1
);

$masonry_gallery_square_small_title_color = new PitchQodeField(
	'colorsimple',
	'masonry_gallery_square_small_title_color',
	'',
	esc_html__( 'Title Color', 'pitch' )
);
$row1->addChild(
	'masonry_gallery_square_small_title_color',
	$masonry_gallery_square_small_title_color
);

$masonry_gallery_square_small_title_font_size = new PitchQodeField(
	'textsimple',
	'masonry_gallery_square_small_title_font_size',
	'',
	esc_html__( 'Font size (px)', 'pitch' )
);
$row1->addChild(
	'masonry_gallery_square_small_title_font_size',
	$masonry_gallery_square_small_title_font_size
);

$masonry_gallery_square_small_title_line_height = new PitchQodeField(
	'textsimple',
	'masonry_gallery_square_small_title_line_height',
	'',
	esc_html__( 'Line Height (px)', 'pitch' )
);
$row1->addChild(
	'masonry_gallery_square_small_title_line_height',
	$masonry_gallery_square_small_title_line_height
);

$masonry_gallery_square_small_title_text_transform = new PitchQodeField(
	'selectblanksimple',
	'masonry_gallery_square_small_title_text_transform',
	'',
	esc_html__( 'Text Transform', 'pitch' ),
	'',
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	'masonry_gallery_square_small_title_text_transform',
	$masonry_gallery_square_small_title_text_transform
);

$row2 = new PitchQodeRow( true );
$masonry_gallery_square_small_title_group->addChild(
	"row2",
	$row2
);

$masonry_gallery_square_small_title_font_family = new PitchQodeField(
	'fontsimple',
	'masonry_gallery_square_small_title_font_family',
	'-1',
	esc_html__( 'Font Family', 'pitch' )
);
$row2->addChild(
	'masonry_gallery_square_small_title_font_family',
	$masonry_gallery_square_small_title_font_family
);

$masonry_gallery_square_small_title_font_style = new PitchQodeField(
	'selectblanksimple',
	'masonry_gallery_square_small_title_font_style',
	'',
	esc_html__( 'Font Style', 'pitch' ),
	'',
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	'masonry_gallery_square_small_title_font_style',
	$masonry_gallery_square_small_title_font_style
);

$masonry_gallery_square_small_title_font_weight = new PitchQodeField(
	'selectblanksimple',
	'masonry_gallery_square_small_title_font_weight',
	'',
	esc_html__( 'Font Weight', 'pitch' ),
	'',
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	'masonry_gallery_square_small_title_font_weight',
	$masonry_gallery_square_small_title_font_weight
);

$masonry_gallery_square_small_title_letter_spacing = new PitchQodeField(
	'textsimple',
	'masonry_gallery_square_small_title_letter_spacing',
	'',
	esc_html__( 'Letter Spacing', 'pitch' )
);
$row2->addChild(
	'masonry_gallery_square_small_title_letter_spacing',
	$masonry_gallery_square_small_title_letter_spacing
);

$row3 = new PitchQodeRow( true );
$masonry_gallery_square_small_title_group->addChild(
	"row3",
	$row3
);

$masonry_gallery_square_small_title_margin_bottom = new PitchQodeField(
	'textsimple',
	'masonry_gallery_square_small_title_margin_bottom',
	'',
	esc_html__( 'Margin Bottom', 'pitch' )
);
$row3->addChild(
	'masonry_gallery_square_small_title_margin_bottom',
	$masonry_gallery_square_small_title_margin_bottom
);

$masonry_gallery_square_small_text_group = new PitchQodeGroup(
	esc_html__( 'Text Style', 'pitch' ),
	esc_html__( 'Define Square Small Text Style', 'pitch' )
);
$panel30->addChild(
	'masonry_gallery_square_small_text_group',
	$masonry_gallery_square_small_text_group
);

$row1 = new PitchQodeRow();
$masonry_gallery_square_small_text_group->addChild(
	"row1",
	$row1
);

$masonry_gallery_square_small_text_color = new PitchQodeField(
	'colorsimple',
	'masonry_gallery_square_small_text_color',
	'',
	esc_html__( 'Text Color', 'pitch' )
);
$row1->addChild(
	'masonry_gallery_square_small_text_color',
	$masonry_gallery_square_small_text_color
);

$masonry_gallery_square_small_text_font_size = new PitchQodeField(
	'textsimple',
	'masonry_gallery_square_small_text_font_size',
	'',
	esc_html__( 'Font size (px)', 'pitch' )
);
$row1->addChild(
	'masonry_gallery_square_small_text_font_size',
	$masonry_gallery_square_small_text_font_size
);

$masonry_gallery_square_small_text_line_height = new PitchQodeField(
	'textsimple',
	'masonry_gallery_square_small_text_line_height',
	'',
	esc_html__( 'Line Height (px)', 'pitch' )
);
$row1->addChild(
	'masonry_gallery_square_small_text_line_height',
	$masonry_gallery_square_small_text_line_height
);

$masonry_gallery_square_small_text_text_transform = new PitchQodeField(
	'selectblanksimple',
	'masonry_gallery_square_small_text_text_transform',
	'',
	esc_html__( 'Text Transform', 'pitch' ),
	'',
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	'masonry_gallery_square_small_text_text_transform',
	$masonry_gallery_square_small_text_text_transform
);

$row2 = new PitchQodeRow( true );
$masonry_gallery_square_small_text_group->addChild(
	"row2",
	$row2
);

$masonry_gallery_square_small_text_font_family = new PitchQodeField(
	'fontsimple',
	'masonry_gallery_square_small_text_font_family',
	'-1',
	esc_html__( 'Font Family', 'pitch' )
);
$row2->addChild(
	'masonry_gallery_square_small_text_font_family',
	$masonry_gallery_square_small_text_font_family
);

$masonry_gallery_square_small_text_font_style = new PitchQodeField(
	'selectblanksimple',
	'masonry_gallery_square_small_text_font_style',
	'',
	esc_html__( 'Font Style', 'pitch' ),
	'',
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	'masonry_gallery_square_small_text_font_style',
	$masonry_gallery_square_small_text_font_style
);

$masonry_gallery_square_small_text_font_weight = new PitchQodeField(
	'selectblanksimple',
	'masonry_gallery_square_small_text_font_weight',
	'',
	esc_html__( 'Font Weight', 'pitch' ),
	'',
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	'masonry_gallery_square_small_text_font_weight',
	$masonry_gallery_square_small_text_font_weight
);

$masonry_gallery_square_small_text_letter_spacing = new PitchQodeField(
	'textsimple',
	'masonry_gallery_square_small_text_letter_spacing',
	'',
	esc_html__( 'Letter Spacing', 'pitch' )
);
$row2->addChild(
	'masonry_gallery_square_small_text_letter_spacing',
	$masonry_gallery_square_small_text_letter_spacing
);

$masonry_gallery_square_small_button_group = new PitchQodeGroup(
	esc_html__( 'Button Style', 'pitch' ),
	esc_html__( 'Define Square Small Button Style', 'pitch' )
);
$panel30->addChild(
	'masonry_gallery_square_small_button_group',
	$masonry_gallery_square_small_button_group
);

$row1 = new PitchQodeRow();
$masonry_gallery_square_small_button_group->addChild(
	'row1',
	$row1
);

$masonry_gallery_square_small_button_font_family = new PitchQodeField(
	'fontsimple',
	'masonry_gallery_square_small_button_font_family',
	'-1',
	esc_html__( 'Font Family', 'pitch' )
);
$row1->addChild(
	'masonry_gallery_square_small_button_font_family',
	$masonry_gallery_square_small_button_font_family
);

$masonry_gallery_square_small_button_font_style = new PitchQodeField(
	'selectblanksimple',
	'masonry_gallery_square_small_button_font_style',
	'',
	esc_html__( 'Font Style', 'pitch' ),
	'',
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row1->addChild(
	'masonry_gallery_square_small_button_font_style',
	$masonry_gallery_square_small_button_font_style
);

$masonry_gallery_square_small_button_font_weight = new PitchQodeField(
	'selectblanksimple',
	'masonry_gallery_square_small_button_font_weight',
	'',
	esc_html__( 'Font Weight', 'pitch' ),
	'',
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row1->addChild(
	'masonry_gallery_square_small_button_font_weight',
	$masonry_gallery_square_small_button_font_weight
);

$masonry_gallery_square_small_button_text_transform = new PitchQodeField(
	'selectblanksimple',
	'masonry_gallery_square_small_button_text_transform',
	'',
	esc_html__( 'Text Transform', 'pitch' ),
	'',
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	'masonry_gallery_square_small_button_text_transform',
	$masonry_gallery_square_small_button_text_transform
);

$row2 = new PitchQodeRow( true );
$masonry_gallery_square_small_button_group->addChild(
	'row2',
	$row2
);

$masonry_gallery_square_small_button_font_size = new PitchQodeField(
	'textsimple',
	'masonry_gallery_square_small_button_font_size',
	'',
	esc_html__( 'Text Size (px)', 'pitch' )
);
$row2->addChild(
	'masonry_gallery_square_small_button_font_size',
	$masonry_gallery_square_small_button_font_size
);

$masonry_gallery_square_small_button_line_height = new PitchQodeField(
	'textsimple',
	'masonry_gallery_square_small_button_line_height',
	'',
	esc_html__( 'Line Height (px)', 'pitch' )
);
$row2->addChild(
	'masonry_gallery_square_small_button_line_height',
	$masonry_gallery_square_small_button_line_height
);

$masonry_gallery_square_small_button_letter_spacing = new PitchQodeField(
	'textsimple',
	'masonry_gallery_square_small_button_letter_spacing',
	'',
	esc_html__( 'Letter Spacing (px)', 'pitch' )
);
$row2->addChild(
	'masonry_gallery_square_small_button_letter_spacing',
	$masonry_gallery_square_small_button_letter_spacing
);

$row3 = new PitchQodeRow( true );
$masonry_gallery_square_small_button_group->addChild(
	'row3',
	$row3
);

$masonry_gallery_square_small_button_text_color = new PitchQodeField(
	'colorsimple',
	'masonry_gallery_square_small_button_text_color',
	'',
	esc_html__( 'Text Color', 'pitch' )
);
$row3->addChild(
	'masonry_gallery_square_small_button_text_color',
	$masonry_gallery_square_small_button_text_color
);

$masonry_gallery_square_small_button_hover_text_color = new PitchQodeField(
	'colorsimple',
	'masonry_gallery_square_small_button_hover_text_color',
	'',
	esc_html__( 'Hover Text Color', 'pitch' )
);
$row3->addChild(
	'masonry_gallery_square_small_button_hover_text_color',
	$masonry_gallery_square_small_button_hover_text_color
);

$masonry_gallery_square_small_button_background_color = new PitchQodeField(
	'colorsimple',
	'masonry_gallery_square_small_button_background_color',
	'',
	esc_html__( 'Background Color', 'pitch' )
);
$row3->addChild(
	'masonry_gallery_square_small_button_background_color',
	$masonry_gallery_square_small_button_background_color
);

$masonry_gallery_square_small_button_hover_background_color = new PitchQodeField(
	'colorsimple',
	'masonry_gallery_square_small_button_hover_background_color',
	'',
	esc_html__( 'Hover Background Color', 'pitch' )
);
$row3->addChild(
	'masonry_gallery_square_small_button_hover_background_color',
	$masonry_gallery_square_small_button_hover_background_color
);

$row4 = new PitchQodeRow( true );
$masonry_gallery_square_small_button_group->addChild(
	'row4',
	$row4
);

$masonry_gallery_square_small_button_border_color = new PitchQodeField(
	'colorsimple',
	'masonry_gallery_square_small_button_border_color',
	'',
	esc_html__( 'Border Color', 'pitch' )
);
$row4->addChild(
	'masonry_gallery_square_small_button_border_color',
	$masonry_gallery_square_small_button_border_color
);

$masonry_gallery_square_small_button_hover_border_color = new PitchQodeField(
	'colorsimple',
	'masonry_gallery_square_small_button_hover_border_color',
	'',
	esc_html__( 'Hover Border Color', 'pitch' )
);
$row4->addChild(
	'masonry_gallery_square_small_button_hover_border_color',
	$masonry_gallery_square_small_button_hover_border_color
);

$masonry_gallery_square_small_button_border_width = new PitchQodeField(
	'textsimple',
	'masonry_gallery_square_small_button_border_width',
	'',
	esc_html__( 'Border Width (px)', 'pitch' )
);
$row4->addChild(
	'masonry_gallery_square_small_button_border_width',
	$masonry_gallery_square_small_button_border_width
);

$masonry_gallery_square_small_button_border_radius = new PitchQodeField(
	'textsimple',
	'masonry_gallery_square_small_button_border_radius',
	'',
	esc_html__( 'Border Radius (px)', 'pitch' )
);
$row4->addChild(
	'masonry_gallery_square_small_button_border_radius',
	$masonry_gallery_square_small_button_border_radius
);

$row5 = new PitchQodeRow( true );
$masonry_gallery_square_small_button_group->addChild(
	'row5',
	$row5
);

$masonry_gallery_square_small_button_padding_left = new PitchQodeField(
	'textsimple',
	'masonry_gallery_square_small_button_padding_left',
	'',
	esc_html__( 'Padding Left (px)', 'pitch' )
);
$row5->addChild(
	'masonry_gallery_square_small_button_padding_left',
	$masonry_gallery_square_small_button_padding_left
);

$masonry_gallery_square_small_button_padding_right = new PitchQodeField(
	'textsimple',
	'masonry_gallery_square_small_button_padding_right',
	'',
	esc_html__( 'Padding Right (px)', 'pitch' )
);
$row5->addChild(
	'masonry_gallery_square_small_button_padding_right',
	$masonry_gallery_square_small_button_padding_right
);

$masonry_gallery_square_small_button_margin_top = new PitchQodeField(
	'textsimple',
	'masonry_gallery_square_small_button_margin_top',
	'',
	esc_html__( 'Margin Top', 'pitch' )
);
$row5->addChild(
	'masonry_gallery_square_small_button_margin_top',
	$masonry_gallery_square_small_button_margin_top
);

$masonry_gallery_square_small_icon_group = new PitchQodeGroup(
	esc_html__( 'Icon Style', 'pitch' ),
	esc_html__( 'Define Square Small Icon Style', 'pitch' )
);
$panel30->addChild(
	'masonry_gallery_square_small_icon_group',
	$masonry_gallery_square_small_icon_group
);

$row1 = new PitchQodeRow();
$masonry_gallery_square_small_icon_group->addChild(
	'row1',
	$row1
);

$masonry_gallery_square_small_icon_color = new PitchQodeField(
	'colorsimple',
	'masonry_gallery_square_small_icon_color',
	'',
	esc_html__( 'Icon Color', 'pitch' )
);
$row1->addChild(
	'masonry_gallery_square_small_icon_color',
	$masonry_gallery_square_small_icon_color
);

$masonry_gallery_square_small_icon_hover_color = new PitchQodeField(
	'colorsimple',
	'masonry_gallery_square_small_icon_hover_color',
	'',
	esc_html__( 'Icon Hover Color', 'pitch' )
);
$row1->addChild(
	'masonry_gallery_square_small_icon_hover_color',
	$masonry_gallery_square_small_icon_hover_color
);

$masonry_gallery_square_small_icon_size = new PitchQodeField(
	'textsimple',
	'masonry_gallery_square_small_icon_size',
	'',
	esc_html__( 'Icon Size (px)', 'pitch' )
);
$row1->addChild(
	'masonry_gallery_square_small_icon_size',
	$masonry_gallery_square_small_icon_size
);

$masonry_gallery_square_small_icon_margin_bottom = new PitchQodeField(
	'textsimple',
	'masonry_gallery_square_small_icon_margin_bottom',
	'',
	esc_html__( 'Margin Bottom (px)', 'pitch' )
);
$row1->addChild(
	'masonry_gallery_square_small_icon_margin_bottom',
	$masonry_gallery_square_small_icon_margin_bottom
);

$masonry_gallery_square_small_overlay_group = new PitchQodeGroup(
	esc_html__( 'Overlay Style', 'pitch' ),
	esc_html__( 'Define Square Small Overlay Style', 'pitch' )
);
$panel30->addChild(
	'masonry_gallery_square_small_overlay_group',
	$masonry_gallery_square_small_overlay_group
);

$row1 = new PitchQodeRow();
$masonry_gallery_square_small_overlay_group->addChild(
	'row1',
	$row1
);

$masonry_gallery_square_small_overlay_color = new PitchQodeField(
	'colorsimple',
	'masonry_gallery_square_small_overlay_color',
	'',
	esc_html__( 'Color', 'pitch' )
);
$row1->addChild(
	'masonry_gallery_square_small_overlay_color',
	$masonry_gallery_square_small_overlay_color
);

$masonry_gallery_square_small_overlay_transparency = new PitchQodeField(
	'textsimple',
	'masonry_gallery_square_small_overlay_transparency',
	'',
	esc_html__( 'Transparency (0=full - 1=opaque)', 'pitch' )
);
$row1->addChild(
	'masonry_gallery_square_small_overlay_transparency',
	$masonry_gallery_square_small_overlay_transparency
);

$masonry_gallery_square_small_spacing_group = new PitchQodeGroup(
	esc_html__( 'Text Alignment', 'pitch' ),
	esc_html__( 'Define Text Alignment', 'pitch' )
);
$panel30->addChild(
	'masonry_gallery_square_small_spacing_group',
	$masonry_gallery_square_small_spacing_group
);

$row1 = new PitchQodeRow();
$masonry_gallery_square_small_spacing_group->addChild(
	'row1',
	$row1
);

$masonry_gallery_square_small_text_align = new PitchQodeField(
	"selectsimple",
	"masonry_gallery_square_small_text_align",
	"center",
	esc_html__( "Text Alignment", 'pitch' ),
	esc_html__( "Choose text position", 'pitch' ),
	array(
		"center" => esc_html__( "Center", 'pitch' ),
		"left" => esc_html__( "Left", 'pitch' ),
		"right" => esc_html__( "Right", 'pitch' )
	)
);

$row1->addChild(
	"masonry_gallery_square_small_text_align",
	$masonry_gallery_square_small_text_align
);

$masonry_gallery_square_small_padding_group = new PitchQodeGroup(
	esc_html__( 'Content Padding', 'pitch' ),
	esc_html__( 'Please insert padding in px(or %) i.e. 5px (or 5%)', 'pitch' )
);
$panel30->addChild(
	'masonry_gallery_square_small_padding_group',
	$masonry_gallery_square_small_padding_group
);

$row1 = new PitchQodeRow();
$masonry_gallery_square_small_padding_group->addChild(
	'row1',
	$row1
);

$masonry_gallery_square_small_padding_left = new PitchQodeField(
	"textsimple",
	"masonry_gallery_square_small_padding_left",
	"",
	esc_html__( "Padding Left", 'pitch' ),
	esc_html__( "Please insert padding in px(or %) i.e. 5px(or 5%)", 'pitch' ),
	array(),
	array( "col_width" => 3 )
);
$row1->addChild(
	"masonry_gallery_square_small_padding_left",
	$masonry_gallery_square_small_padding_left
);

$masonry_gallery_square_small_padding_right = new PitchQodeField(
	"textsimple",
	"masonry_gallery_square_small_padding_right",
	"",
	esc_html__( "Padding Right", 'pitch' ),
	esc_html__( "Please insert padding in px(or %) i.e. 5px(or 5%)", 'pitch' ),
	array(),
	array( "col_width" => 3 )
);
$row1->addChild(
	"masonry_gallery_square_small_padding_right",
	$masonry_gallery_square_small_padding_right
);

//Rectangle Portrait
$masonry_gallery_rectangle_portrait_title = new PitchQodeTitle(
	'masonry_gallery_rectangle_portrait_title',
	esc_html__( 'Rectangle Portrait', 'pitch' )
);
$panel30->addChild(
	'masonry_gallery_rectangle_portrait_title',
	$masonry_gallery_rectangle_portrait_title
);

$masonry_gallery_rectangle_portrait_title_group = new PitchQodeGroup(
	esc_html__( 'Title Style', 'pitch' ),
	esc_html__( 'Define Rectangle Portrait Title Style', 'pitch' )
);
$panel30->addChild(
	'masonry_gallery_rectangle_portrait_title_group',
	$masonry_gallery_rectangle_portrait_title_group
);

$row1 = new PitchQodeRow();
$masonry_gallery_rectangle_portrait_title_group->addChild(
	"row1",
	$row1
);

$masonry_gallery_rectangle_portrait_title_color = new PitchQodeField(
	'colorsimple',
	'masonry_gallery_rectangle_portrait_title_color',
	'',
	esc_html__( 'Title Color', 'pitch' )
);
$row1->addChild(
	'masonry_gallery_rectangle_portrait_title_color',
	$masonry_gallery_rectangle_portrait_title_color
);

$masonry_gallery_rectangle_portrait_title_font_size = new PitchQodeField(
	'textsimple',
	'masonry_gallery_rectangle_portrait_title_font_size',
	'',
	esc_html__( 'Font size (px)', 'pitch' )
);
$row1->addChild(
	'masonry_gallery_rectangle_portrait_title_font_size',
	$masonry_gallery_rectangle_portrait_title_font_size
);

$masonry_gallery_rectangle_portrait_title_line_height = new PitchQodeField(
	'textsimple',
	'masonry_gallery_rectangle_portrait_title_line_height',
	'',
	esc_html__( 'Line Height (px)', 'pitch' )
);
$row1->addChild(
	'masonry_gallery_rectangle_portrait_title_line_height',
	$masonry_gallery_rectangle_portrait_title_line_height
);

$masonry_gallery_rectangle_portrait_title_text_transform = new PitchQodeField(
	'selectblanksimple',
	'masonry_gallery_rectangle_portrait_title_text_transform',
	'',
	esc_html__( 'Text Transform', 'pitch' ),
	'',
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	'masonry_gallery_rectangle_portrait_title_text_transform',
	$masonry_gallery_rectangle_portrait_title_text_transform
);

$row2 = new PitchQodeRow( true );
$masonry_gallery_rectangle_portrait_title_group->addChild(
	"row2",
	$row2
);

$masonry_gallery_rectangle_portrait_title_font_family = new PitchQodeField(
	'fontsimple',
	'masonry_gallery_rectangle_portrait_title_font_family',
	'-1',
	esc_html__( 'Font Family', 'pitch' )
);
$row2->addChild(
	'masonry_gallery_rectangle_portrait_title_font_family',
	$masonry_gallery_rectangle_portrait_title_font_family
);

$masonry_gallery_rectangle_portrait_title_font_style = new PitchQodeField(
	'selectblanksimple',
	'masonry_gallery_rectangle_portrait_title_font_style',
	'',
	esc_html__( 'Font Style', 'pitch' ),
	'',
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	'masonry_gallery_rectangle_portrait_title_font_style',
	$masonry_gallery_rectangle_portrait_title_font_style
);

$masonry_gallery_rectangle_portrait_title_font_weight = new PitchQodeField(
	'selectblanksimple',
	'masonry_gallery_rectangle_portrait_title_font_weight',
	'',
	esc_html__( 'Font Weight', 'pitch' ),
	'',
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	'masonry_gallery_rectangle_portrait_title_font_weight',
	$masonry_gallery_rectangle_portrait_title_font_weight
);

$masonry_gallery_rectangle_portrait_title_letter_spacing = new PitchQodeField(
	'textsimple',
	'masonry_gallery_rectangle_portrait_title_letter_spacing',
	'',
	esc_html__( 'Letter Spacing', 'pitch' )
);
$row2->addChild(
	'masonry_gallery_rectangle_portrait_title_letter_spacing',
	$masonry_gallery_rectangle_portrait_title_letter_spacing
);

$row3 = new PitchQodeRow( true );
$masonry_gallery_rectangle_portrait_title_group->addChild(
	"row3",
	$row3
);

$masonry_gallery_rectangle_portrait_title_margin_bottom = new PitchQodeField(
	'textsimple',
	'masonry_gallery_rectangle_portrait_title_margin_bottom',
	'',
	esc_html__( 'Margin Bottom', 'pitch' )
);
$row3->addChild(
	'masonry_gallery_rectangle_portrait_title_margin_bottom',
	$masonry_gallery_rectangle_portrait_title_margin_bottom
);

$masonry_gallery_rectangle_portrait_text_group = new PitchQodeGroup(
	esc_html__( 'Text Style', 'pitch' ),
	esc_html__( 'Define Rectangle Portrait Text Style', 'pitch' )
);
$panel30->addChild(
	'masonry_gallery_rectangle_portrait_text_group',
	$masonry_gallery_rectangle_portrait_text_group
);

$row1 = new PitchQodeRow();
$masonry_gallery_rectangle_portrait_text_group->addChild(
	"row1",
	$row1
);

$masonry_gallery_rectangle_portrait_text_color = new PitchQodeField(
	'colorsimple',
	'masonry_gallery_rectangle_portrait_text_color',
	'',
	esc_html__( 'Text Color', 'pitch' )
);
$row1->addChild(
	'masonry_gallery_rectangle_portrait_text_color',
	$masonry_gallery_rectangle_portrait_text_color
);

$masonry_gallery_rectangle_portrait_text_font_size = new PitchQodeField(
	'textsimple',
	'masonry_gallery_rectangle_portrait_text_font_size',
	'',
	esc_html__( 'Font size (px)', 'pitch' )
);
$row1->addChild(
	'masonry_gallery_rectangle_portrait_text_font_size',
	$masonry_gallery_rectangle_portrait_text_font_size
);

$masonry_gallery_rectangle_portrait_text_line_height = new PitchQodeField(
	'textsimple',
	'masonry_gallery_rectangle_portrait_text_line_height',
	'',
	esc_html__( 'Line Height (px)', 'pitch' )
);
$row1->addChild(
	'masonry_gallery_rectangle_portrait_text_line_height',
	$masonry_gallery_rectangle_portrait_text_line_height
);

$masonry_gallery_rectangle_portrait_text_text_transform = new PitchQodeField(
	'selectblanksimple',
	'masonry_gallery_rectangle_portrait_text_text_transform',
	'',
	esc_html__( 'Text Transform', 'pitch' ),
	'',
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	'masonry_gallery_rectangle_portrait_text_text_transform',
	$masonry_gallery_rectangle_portrait_text_text_transform
);

$row2 = new PitchQodeRow( true );
$masonry_gallery_rectangle_portrait_text_group->addChild(
	"row2",
	$row2
);

$masonry_gallery_rectangle_portrait_text_font_family = new PitchQodeField(
	'fontsimple',
	'masonry_gallery_rectangle_portrait_text_font_family',
	'-1',
	esc_html__( 'Font Family', 'pitch' )
);
$row2->addChild(
	'masonry_gallery_rectangle_portrait_text_font_family',
	$masonry_gallery_rectangle_portrait_text_font_family
);

$masonry_gallery_rectangle_portrait_text_font_style = new PitchQodeField(
	'selectblanksimple',
	'masonry_gallery_rectangle_portrait_text_font_style',
	'',
	esc_html__( 'Font Style', 'pitch' ),
	'',
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	'masonry_gallery_rectangle_portrait_text_font_style',
	$masonry_gallery_rectangle_portrait_text_font_style
);

$masonry_gallery_rectangle_portrait_text_font_weight = new PitchQodeField(
	'selectblanksimple',
	'masonry_gallery_rectangle_portrait_text_font_weight',
	'',
	esc_html__( 'Font Weight', 'pitch' ),
	'',
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	'masonry_gallery_rectangle_portrait_text_font_weight',
	$masonry_gallery_rectangle_portrait_text_font_weight
);

$masonry_gallery_rectangle_portrait_text_letter_spacing = new PitchQodeField(
	'textsimple',
	'masonry_gallery_rectangle_portrait_text_letter_spacing',
	'',
	esc_html__( 'Letter Spacing', 'pitch' )
);
$row2->addChild(
	'masonry_gallery_rectangle_portrait_text_letter_spacing',
	$masonry_gallery_rectangle_portrait_text_letter_spacing
);

$masonry_gallery_rectangle_portrait_button_group = new PitchQodeGroup(
	esc_html__( 'Button Style', 'pitch' ),
	esc_html__( 'Define Rectangle Portrait Button Style', 'pitch' )
);
$panel30->addChild(
	'masonry_gallery_rectangle_portrait_button_group',
	$masonry_gallery_rectangle_portrait_button_group
);

$row1 = new PitchQodeRow();
$masonry_gallery_rectangle_portrait_button_group->addChild(
	'row1',
	$row1
);

$masonry_gallery_rectangle_portrait_button_font_family = new PitchQodeField(
	'fontsimple',
	'masonry_gallery_rectangle_portrait_button_font_family',
	'-1',
	esc_html__( 'Font Family', 'pitch' )
);
$row1->addChild(
	'masonry_gallery_rectangle_portrait_button_font_family',
	$masonry_gallery_rectangle_portrait_button_font_family
);

$masonry_gallery_rectangle_portrait_button_font_style = new PitchQodeField(
	'selectblanksimple',
	'masonry_gallery_rectangle_portrait_button_font_style',
	'',
	esc_html__( 'Font Style', 'pitch' ),
	'',
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row1->addChild(
	'masonry_gallery_rectangle_portrait_button_font_style',
	$masonry_gallery_rectangle_portrait_button_font_style
);

$masonry_gallery_rectangle_portrait_button_font_weight = new PitchQodeField(
	'selectblanksimple',
	'masonry_gallery_rectangle_portrait_button_font_weight',
	'',
	esc_html__( 'Font Weight', 'pitch' ),
	'',
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row1->addChild(
	'masonry_gallery_rectangle_portrait_button_font_weight',
	$masonry_gallery_rectangle_portrait_button_font_weight
);

$masonry_gallery_rectangle_portrait_button_text_transform = new PitchQodeField(
	'selectblanksimple',
	'masonry_gallery_rectangle_portrait_button_text_transform',
	'',
	esc_html__( 'Text Transform', 'pitch' ),
	'',
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	'masonry_gallery_rectangle_portrait_button_text_transform',
	$masonry_gallery_rectangle_portrait_button_text_transform
);

$row2 = new PitchQodeRow( true );
$masonry_gallery_rectangle_portrait_button_group->addChild(
	'row2',
	$row2
);

$masonry_gallery_rectangle_portrait_button_font_size = new PitchQodeField(
	'textsimple',
	'masonry_gallery_rectangle_portrait_button_font_size',
	'',
	esc_html__( 'Text Size (px)', 'pitch' )
);
$row2->addChild(
	'masonry_gallery_rectangle_portrait_button_font_size',
	$masonry_gallery_rectangle_portrait_button_font_size
);

$masonry_gallery_rectangle_portrait_button_line_height = new PitchQodeField(
	'textsimple',
	'masonry_gallery_rectangle_portrait_button_line_height',
	'',
	esc_html__( 'Line Height (px)', 'pitch' )
);
$row2->addChild(
	'masonry_gallery_rectangle_portrait_button_line_height',
	$masonry_gallery_rectangle_portrait_button_line_height
);

$masonry_gallery_rectangle_portrait_button_letter_spacing = new PitchQodeField(
	'textsimple',
	'masonry_gallery_rectangle_portrait_button_letter_spacing',
	'',
	esc_html__( 'Letter Spacing (px)', 'pitch' )
);
$row2->addChild(
	'masonry_gallery_rectangle_portrait_button_letter_spacing',
	$masonry_gallery_rectangle_portrait_button_letter_spacing
);

$row3 = new PitchQodeRow( true );
$masonry_gallery_rectangle_portrait_button_group->addChild(
	'row3',
	$row3
);

$masonry_gallery_rectangle_portrait_button_text_color = new PitchQodeField(
	'colorsimple',
	'masonry_gallery_rectangle_portrait_button_text_color',
	'',
	esc_html__( 'Text Color', 'pitch' )
);
$row3->addChild(
	'masonry_gallery_rectangle_portrait_button_text_color',
	$masonry_gallery_rectangle_portrait_button_text_color
);

$masonry_gallery_rectangle_portrait_button_hover_text_color = new PitchQodeField(
	'colorsimple',
	'masonry_gallery_rectangle_portrait_button_hover_text_color',
	'',
	esc_html__( 'Hover Text Color', 'pitch' )
);
$row3->addChild(
	'masonry_gallery_rectangle_portrait_button_hover_text_color',
	$masonry_gallery_rectangle_portrait_button_hover_text_color
);

$masonry_gallery_rectangle_portrait_button_background_color = new PitchQodeField(
	'colorsimple',
	'masonry_gallery_rectangle_portrait_button_background_color',
	'',
	esc_html__( 'Background Color', 'pitch' )
);
$row3->addChild(
	'masonry_gallery_rectangle_portrait_button_background_color',
	$masonry_gallery_rectangle_portrait_button_background_color
);

$masonry_gallery_rectangle_portrait_button_hover_background_color = new PitchQodeField(
	'colorsimple',
	'masonry_gallery_rectangle_portrait_button_hover_background_color',
	'',
	esc_html__( 'Hover Background Color', 'pitch' )
);
$row3->addChild(
	'masonry_gallery_rectangle_portrait_button_hover_background_color',
	$masonry_gallery_rectangle_portrait_button_hover_background_color
);

$row4 = new PitchQodeRow( true );
$masonry_gallery_rectangle_portrait_button_group->addChild(
	'row4',
	$row4
);

$masonry_gallery_rectangle_portrait_button_border_color = new PitchQodeField(
	'colorsimple',
	'masonry_gallery_rectangle_portrait_button_border_color',
	'',
	esc_html__( 'Border Color', 'pitch' )
);
$row4->addChild(
	'masonry_gallery_rectangle_portrait_button_border_color',
	$masonry_gallery_rectangle_portrait_button_border_color
);

$masonry_gallery_rectangle_portrait_button_hover_border_color = new PitchQodeField(
	'colorsimple',
	'masonry_gallery_rectangle_portrait_button_hover_border_color',
	'',
	esc_html__( 'Hover Border Color', 'pitch' )
);
$row4->addChild(
	'masonry_gallery_rectangle_portrait_button_hover_border_color',
	$masonry_gallery_rectangle_portrait_button_hover_border_color
);

$masonry_gallery_rectangle_portrait_button_border_width = new PitchQodeField(
	'textsimple',
	'masonry_gallery_rectangle_portrait_button_border_width',
	'',
	esc_html__( 'Border Width (px)', 'pitch' )
);
$row4->addChild(
	'masonry_gallery_rectangle_portrait_button_border_width',
	$masonry_gallery_rectangle_portrait_button_border_width
);

$masonry_gallery_rectangle_portrait_button_border_radius = new PitchQodeField(
	'textsimple',
	'masonry_gallery_rectangle_portrait_button_border_radius',
	'',
	esc_html__( 'Border Radius (px)', 'pitch' )
);
$row4->addChild(
	'masonry_gallery_rectangle_portrait_button_border_radius',
	$masonry_gallery_rectangle_portrait_button_border_radius
);

$row5 = new PitchQodeRow( true );
$masonry_gallery_rectangle_portrait_button_group->addChild(
	'row5',
	$row5
);

$masonry_gallery_rectangle_portrait_button_padding_left = new PitchQodeField(
	'textsimple',
	'masonry_gallery_rectangle_portrait_button_padding_left',
	'',
	esc_html__( 'Padding Left (px)', 'pitch' )
);
$row5->addChild(
	'masonry_gallery_rectangle_portrait_button_padding_left',
	$masonry_gallery_rectangle_portrait_button_padding_left
);

$masonry_gallery_rectangle_portrait_button_padding_right = new PitchQodeField(
	'textsimple',
	'masonry_gallery_rectangle_portrait_button_padding_right',
	'',
	esc_html__( 'Padding Right (px)', 'pitch' )
);
$row5->addChild(
	'masonry_gallery_rectangle_portrait_button_padding_right',
	$masonry_gallery_rectangle_portrait_button_padding_right
);

$masonry_gallery_rectangle_portrait_button_margin_top = new PitchQodeField(
	'textsimple',
	'masonry_gallery_rectangle_portrait_button_margin_top',
	'',
	esc_html__( 'Margin Top', 'pitch' )
);
$row5->addChild(
	'masonry_gallery_rectangle_portrait_button_margin_top',
	$masonry_gallery_rectangle_portrait_button_margin_top
);

$masonry_gallery_rectangle_portrait_icon_group = new PitchQodeGroup(
	esc_html__( 'Icon Style', 'pitch' ),
	esc_html__( 'Define Rectangle Portrait Icon Style', 'pitch' )
);
$panel30->addChild(
	'masonry_gallery_rectangle_portrait_icon_group',
	$masonry_gallery_rectangle_portrait_icon_group
);

$row1 = new PitchQodeRow();
$masonry_gallery_rectangle_portrait_icon_group->addChild(
	'row1',
	$row1
);

$masonry_gallery_rectangle_portrait_icon_color = new PitchQodeField(
	'colorsimple',
	'masonry_gallery_rectangle_portrait_icon_color',
	'',
	esc_html__( 'Icon Color', 'pitch' )
);
$row1->addChild(
	'masonry_gallery_rectangle_portrait_icon_color',
	$masonry_gallery_rectangle_portrait_icon_color
);

$masonry_gallery_rectangle_portrait_icon_hover_color = new PitchQodeField(
	'colorsimple',
	'masonry_gallery_rectangle_portrait_icon_hover_color',
	'',
	esc_html__( 'Icon Hover Color', 'pitch' )
);
$row1->addChild(
	'masonry_gallery_rectangle_portrait_icon_hover_color',
	$masonry_gallery_rectangle_portrait_icon_hover_color
);

$masonry_gallery_rectangle_portrait_icon_size = new PitchQodeField(
	'textsimple',
	'masonry_gallery_rectangle_portrait_icon_size',
	'',
	esc_html__( 'Icon Size (px)', 'pitch' )
);
$row1->addChild(
	'masonry_gallery_rectangle_portrait_icon_size',
	$masonry_gallery_rectangle_portrait_icon_size
);

$masonry_gallery_rectangle_portrait_icon_margin_bottom = new PitchQodeField(
	'textsimple',
	'masonry_gallery_rectangle_portrait_icon_margin_bottom',
	'',
	esc_html__( 'Margin Bottom (px)', 'pitch' )
);
$row1->addChild(
	'masonry_gallery_rectangle_portrait_icon_margin_bottom',
	$masonry_gallery_rectangle_portrait_icon_margin_bottom
);

$masonry_gallery_rectangle_portrait_overlay_group = new PitchQodeGroup(
	esc_html__( 'Overlay Style', 'pitch' ),
	esc_html__( 'Define Rectangle Portrait Overlay Style', 'pitch' )
);
$panel30->addChild(
	'masonry_gallery_rectangle_portrait_overlay_group',
	$masonry_gallery_rectangle_portrait_overlay_group
);

$row1 = new PitchQodeRow();
$masonry_gallery_rectangle_portrait_overlay_group->addChild(
	'row1',
	$row1
);

$masonry_gallery_rectangle_portrait_overlay_color = new PitchQodeField(
	'colorsimple',
	'masonry_gallery_rectangle_portrait_overlay_color',
	'',
	esc_html__( 'Color', 'pitch' )
);
$row1->addChild(
	'masonry_gallery_rectangle_portrait_overlay_color',
	$masonry_gallery_rectangle_portrait_overlay_color
);

$masonry_gallery_rectangle_portrait_overlay_transparency = new PitchQodeField(
	'textsimple',
	'masonry_gallery_rectangle_portrait_overlay_transparency',
	'',
	esc_html__( 'Transparency (0=full - 1=opaque)', 'pitch' )
);
$row1->addChild(
	'masonry_gallery_rectangle_portrait_overlay_transparency',
	$masonry_gallery_rectangle_portrait_overlay_transparency
);

$masonry_gallery_rectangle_portrait_spacing_group = new PitchQodeGroup(
	esc_html__( 'Text Alignment', 'pitch' ),
	esc_html__( 'Define Text Alignment', 'pitch' )
);
$panel30->addChild(
	'masonry_gallery_rectangle_portrait_spacing_group',
	$masonry_gallery_rectangle_portrait_spacing_group
);

$row1 = new PitchQodeRow();
$masonry_gallery_rectangle_portrait_spacing_group->addChild(
	'row1',
	$row1
);

$masonry_gallery_rectangle_portrait_text_align = new PitchQodeField(
	"selectsimple",
	"masonry_gallery_rectangle_portrait_text_align",
	"center",
	esc_html__( "Text Alignment", 'pitch' ),
	esc_html__( "Choose text position", 'pitch' ),
	array(
		"center" => esc_html__( "Center", 'pitch' ),
		"left" => esc_html__( "Left", 'pitch' ),
		"right" => esc_html__( "Right", 'pitch' )
	)
);

$row1->addChild(
	"masonry_gallery_rectangle_portrait_text_align",
	$masonry_gallery_rectangle_portrait_text_align
);

$masonry_gallery_rectangle_portrait_padding_group = new PitchQodeGroup(
	esc_html__( 'Content Padding', 'pitch' ),
	esc_html__( 'Please insert padding in px(or %) i.e. 5px (or 5%)', 'pitch' )
);
$panel30->addChild(
	'masonry_gallery_rectangle_portrait_padding_group',
	$masonry_gallery_rectangle_portrait_padding_group
);

$row1 = new PitchQodeRow();
$masonry_gallery_rectangle_portrait_padding_group->addChild(
	'row1',
	$row1
);

$masonry_gallery_rectangle_portrait_padding_left = new PitchQodeField(
	"textsimple",
	"masonry_gallery_rectangle_portrait_padding_left",
	"",
	esc_html__( "Padding Left", 'pitch' ),
	esc_html__( "Please insert padding in px(or %) i.e. 5px(or 5%)", 'pitch' ),
	array(),
	array( "col_width" => 3 )
);
$row1->addChild(
	"masonry_gallery_rectangle_portrait_padding_left",
	$masonry_gallery_rectangle_portrait_padding_left
);

$masonry_gallery_rectangle_portrait_padding_right = new PitchQodeField(
	"textsimple",
	"masonry_gallery_rectangle_portrait_padding_right",
	"",
	esc_html__( "Padding Right", 'pitch' ),
	esc_html__( "Please insert padding in px(or %) i.e. 5px(or 5%)", 'pitch' ),
	array(),
	array( "col_width" => 3 )
);
$row1->addChild(
	"masonry_gallery_rectangle_portrait_padding_right",
	$masonry_gallery_rectangle_portrait_padding_right
);

//Rectangle Landscape
$masonry_gallery_rectangle_landscape_title = new PitchQodeTitle(
	'masonry_gallery_rectangle_landscape_title',
	esc_html__( 'Rectangle Landscape', 'pitch' )
);
$panel30->addChild(
	'masonry_gallery_rectangle_landscape_title',
	$masonry_gallery_rectangle_landscape_title
);

$masonry_gallery_rectangle_landscape_title_group = new PitchQodeGroup(
	esc_html__( 'Title Style', 'pitch' ),
	esc_html__( 'Define Rectangle Landscape Title Style', 'pitch' )
);
$panel30->addChild(
	'masonry_gallery_rectangle_landscape_title_group',
	$masonry_gallery_rectangle_landscape_title_group
);

$row1 = new PitchQodeRow();
$masonry_gallery_rectangle_landscape_title_group->addChild(
	"row1",
	$row1
);

$masonry_gallery_rectangle_landscape_title_color = new PitchQodeField(
	'colorsimple',
	'masonry_gallery_rectangle_landscape_title_color',
	'',
	esc_html__( 'Title Color', 'pitch' )
);
$row1->addChild(
	'masonry_gallery_rectangle_landscape_title_color',
	$masonry_gallery_rectangle_landscape_title_color
);

$masonry_gallery_rectangle_landscape_title_font_size = new PitchQodeField(
	'textsimple',
	'masonry_gallery_rectangle_landscape_title_font_size',
	'',
	esc_html__( 'Font size (px)', 'pitch' )
);
$row1->addChild(
	'masonry_gallery_rectangle_landscape_title_font_size',
	$masonry_gallery_rectangle_landscape_title_font_size
);

$masonry_gallery_rectangle_landscape_title_line_height = new PitchQodeField(
	'textsimple',
	'masonry_gallery_rectangle_landscape_title_line_height',
	'',
	esc_html__( 'Line Height (px)', 'pitch' )
);
$row1->addChild(
	'masonry_gallery_rectangle_landscape_title_line_height',
	$masonry_gallery_rectangle_landscape_title_line_height
);

$masonry_gallery_rectangle_landscape_title_text_transform = new PitchQodeField(
	'selectblanksimple',
	'masonry_gallery_rectangle_landscape_title_text_transform',
	'',
	esc_html__( 'Text Transform', 'pitch' ),
	'',
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	'masonry_gallery_rectangle_landscape_title_text_transform',
	$masonry_gallery_rectangle_landscape_title_text_transform
);

$row2 = new PitchQodeRow( true );
$masonry_gallery_rectangle_landscape_title_group->addChild(
	"row2",
	$row2
);

$masonry_gallery_rectangle_landscape_title_font_family = new PitchQodeField(
	'fontsimple',
	'masonry_gallery_rectangle_landscape_title_font_family',
	'-1',
	esc_html__( 'Font Family', 'pitch' )
);
$row2->addChild(
	'masonry_gallery_rectangle_landscape_title_font_family',
	$masonry_gallery_rectangle_landscape_title_font_family
);

$masonry_gallery_rectangle_landscape_title_font_style = new PitchQodeField(
	'selectblanksimple',
	'masonry_gallery_rectangle_landscape_title_font_style',
	'',
	esc_html__( 'Font Style', 'pitch' ),
	'',
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	'masonry_gallery_rectangle_landscape_title_font_style',
	$masonry_gallery_rectangle_landscape_title_font_style
);

$masonry_gallery_rectangle_landscape_title_font_weight = new PitchQodeField(
	'selectblanksimple',
	'masonry_gallery_rectangle_landscape_title_font_weight',
	'',
	esc_html__( 'Font Weight', 'pitch' ),
	'',
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	'masonry_gallery_rectangle_landscape_title_font_weight',
	$masonry_gallery_rectangle_landscape_title_font_weight
);

$masonry_gallery_rectangle_landscape_title_letter_spacing = new PitchQodeField(
	'textsimple',
	'masonry_gallery_rectangle_landscape_title_letter_spacing',
	'',
	esc_html__( 'Letter Spacing', 'pitch' )
);
$row2->addChild(
	'masonry_gallery_rectangle_landscape_title_letter_spacing',
	$masonry_gallery_rectangle_landscape_title_letter_spacing
);

$row3 = new PitchQodeRow( true );
$masonry_gallery_rectangle_landscape_title_group->addChild(
	"row3",
	$row3
);

$masonry_gallery_rectangle_landscape_title_margin_bottom = new PitchQodeField(
	'textsimple',
	'masonry_gallery_rectangle_landscape_title_margin_bottom',
	'',
	esc_html__( 'Margin Bottom', 'pitch' )
);
$row3->addChild(
	'masonry_gallery_rectangle_landscape_title_margin_bottom',
	$masonry_gallery_rectangle_landscape_title_margin_bottom
);

$masonry_gallery_rectangle_landscape_text_group = new PitchQodeGroup(
	esc_html__( 'Text Style', 'pitch' ),
	esc_html__( 'Define Rectangle Landscape Text Style', 'pitch' )
);
$panel30->addChild(
	'masonry_gallery_rectangle_landscape_text_group',
	$masonry_gallery_rectangle_landscape_text_group
);

$row1 = new PitchQodeRow();
$masonry_gallery_rectangle_landscape_text_group->addChild(
	"row1",
	$row1
);

$masonry_gallery_rectangle_landscape_text_color = new PitchQodeField(
	'colorsimple',
	'masonry_gallery_rectangle_landscape_text_color',
	'',
	esc_html__( 'Text Color', 'pitch' )
);
$row1->addChild(
	'masonry_gallery_rectangle_landscape_text_color',
	$masonry_gallery_rectangle_landscape_text_color
);

$masonry_gallery_rectangle_landscape_text_font_size = new PitchQodeField(
	'textsimple',
	'masonry_gallery_rectangle_landscape_text_font_size',
	'',
	esc_html__( 'Font size (px)', 'pitch' )
);
$row1->addChild(
	'masonry_gallery_rectangle_landscape_text_font_size',
	$masonry_gallery_rectangle_landscape_text_font_size
);

$masonry_gallery_rectangle_landscape_text_line_height = new PitchQodeField(
	'textsimple',
	'masonry_gallery_rectangle_landscape_text_line_height',
	'',
	esc_html__( 'Line Height (px)', 'pitch' )
);
$row1->addChild(
	'masonry_gallery_rectangle_landscape_text_line_height',
	$masonry_gallery_rectangle_landscape_text_line_height
);

$masonry_gallery_rectangle_landscape_text_text_transform = new PitchQodeField(
	'selectblanksimple',
	'masonry_gallery_rectangle_landscape_text_text_transform',
	'',
	esc_html__( 'Text Transform', 'pitch' ),
	'',
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	'masonry_gallery_rectangle_landscape_text_text_transform',
	$masonry_gallery_rectangle_landscape_text_text_transform
);

$row2 = new PitchQodeRow( true );
$masonry_gallery_rectangle_landscape_text_group->addChild(
	"row2",
	$row2
);

$masonry_gallery_rectangle_landscape_text_font_family = new PitchQodeField(
	'fontsimple',
	'masonry_gallery_rectangle_landscape_text_font_family',
	'-1',
	esc_html__( 'Font Family', 'pitch' )
);
$row2->addChild(
	'masonry_gallery_rectangle_landscape_text_font_family',
	$masonry_gallery_rectangle_landscape_text_font_family
);

$masonry_gallery_rectangle_landscape_text_font_style = new PitchQodeField(
	'selectblanksimple',
	'masonry_gallery_rectangle_landscape_text_font_style',
	'',
	esc_html__( 'Font Style', 'pitch' ),
	'',
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	'masonry_gallery_rectangle_landscape_text_font_style',
	$masonry_gallery_rectangle_landscape_text_font_style
);

$masonry_gallery_rectangle_landscape_text_font_weight = new PitchQodeField(
	'selectblanksimple',
	'masonry_gallery_rectangle_landscape_text_font_weight',
	'',
	esc_html__( 'Font Weight', 'pitch' ),
	'',
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	'masonry_gallery_rectangle_landscape_text_font_weight',
	$masonry_gallery_rectangle_landscape_text_font_weight
);

$masonry_gallery_rectangle_landscape_text_letter_spacing = new PitchQodeField(
	'textsimple',
	'masonry_gallery_rectangle_landscape_text_letter_spacing',
	'',
	esc_html__( 'Letter Spacing', 'pitch' )
);
$row2->addChild(
	'masonry_gallery_rectangle_landscape_text_letter_spacing',
	$masonry_gallery_rectangle_landscape_text_letter_spacing
);

$masonry_gallery_rectangle_landscape_button_group = new PitchQodeGroup(
	esc_html__( 'Button Style', 'pitch' ),
	esc_html__( 'Define Rectangle Landscape Button Style', 'pitch' )
);
$panel30->addChild(
	'masonry_gallery_rectangle_landscape_button_group',
	$masonry_gallery_rectangle_landscape_button_group
);

$row1 = new PitchQodeRow();
$masonry_gallery_rectangle_landscape_button_group->addChild(
	'row1',
	$row1
);

$masonry_gallery_rectangle_landscape_button_font_family = new PitchQodeField(
	'fontsimple',
	'masonry_gallery_rectangle_landscape_button_font_family',
	'-1',
	esc_html__( 'Font Family', 'pitch' )
);
$row1->addChild(
	'masonry_gallery_rectangle_landscape_button_font_family',
	$masonry_gallery_rectangle_landscape_button_font_family
);

$masonry_gallery_rectangle_landscape_button_font_style = new PitchQodeField(
	'selectblanksimple',
	'masonry_gallery_rectangle_landscape_button_font_style',
	'',
	esc_html__( 'Font Style', 'pitch' ),
	'',
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row1->addChild(
	'masonry_gallery_rectangle_landscape_button_font_style',
	$masonry_gallery_rectangle_landscape_button_font_style
);

$masonry_gallery_rectangle_landscape_button_font_weight = new PitchQodeField(
	'selectblanksimple',
	'masonry_gallery_rectangle_landscape_button_font_weight',
	'',
	esc_html__( 'Font Weight', 'pitch' ),
	'',
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row1->addChild(
	'masonry_gallery_rectangle_landscape_button_font_weight',
	$masonry_gallery_rectangle_landscape_button_font_weight
);

$masonry_gallery_rectangle_landscape_button_text_transform = new PitchQodeField(
	'selectblanksimple',
	'masonry_gallery_rectangle_landscape_button_text_transform',
	'',
	esc_html__( 'Text Transform', 'pitch' ),
	'',
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	'masonry_gallery_rectangle_landscape_button_text_transform',
	$masonry_gallery_rectangle_landscape_button_text_transform
);

$row2 = new PitchQodeRow( true );
$masonry_gallery_rectangle_landscape_button_group->addChild(
	'row2',
	$row2
);

$masonry_gallery_rectangle_landscape_button_font_size = new PitchQodeField(
	'textsimple',
	'masonry_gallery_rectangle_landscape_button_font_size',
	'',
	esc_html__( 'Text Size (px)', 'pitch' )
);
$row2->addChild(
	'masonry_gallery_rectangle_landscape_button_font_size',
	$masonry_gallery_rectangle_landscape_button_font_size
);

$masonry_gallery_rectangle_landscape_button_line_height = new PitchQodeField(
	'textsimple',
	'masonry_gallery_rectangle_landscape_button_line_height',
	'',
	esc_html__( 'Line Height (px)', 'pitch' )
);
$row2->addChild(
	'masonry_gallery_rectangle_landscape_button_line_height',
	$masonry_gallery_rectangle_landscape_button_line_height
);

$masonry_gallery_rectangle_landscape_button_letter_spacing = new PitchQodeField(
	'textsimple',
	'masonry_gallery_rectangle_landscape_button_letter_spacing',
	'',
	esc_html__( 'Letter Spacing (px)', 'pitch' )
);
$row2->addChild(
	'masonry_gallery_rectangle_landscape_button_letter_spacing',
	$masonry_gallery_rectangle_landscape_button_letter_spacing
);

$row3 = new PitchQodeRow( true );
$masonry_gallery_rectangle_landscape_button_group->addChild(
	'row3',
	$row3
);

$masonry_gallery_rectangle_landscape_button_text_color = new PitchQodeField(
	'colorsimple',
	'masonry_gallery_rectangle_landscape_button_text_color',
	'',
	esc_html__( 'Text Color', 'pitch' )
);
$row3->addChild(
	'masonry_gallery_rectangle_landscape_button_text_color',
	$masonry_gallery_rectangle_landscape_button_text_color
);

$masonry_gallery_rectangle_landscape_button_hover_text_color = new PitchQodeField(
	'colorsimple',
	'masonry_gallery_rectangle_landscape_button_hover_text_color',
	'',
	esc_html__( 'Hover Text Color', 'pitch' )
);
$row3->addChild(
	'masonry_gallery_rectangle_landscape_button_hover_text_color',
	$masonry_gallery_rectangle_landscape_button_hover_text_color
);

$masonry_gallery_rectangle_landscape_button_background_color = new PitchQodeField(
	'colorsimple',
	'masonry_gallery_rectangle_landscape_button_background_color',
	'',
	esc_html__( 'Background Color', 'pitch' )
);
$row3->addChild(
	'masonry_gallery_rectangle_landscape_button_background_color',
	$masonry_gallery_rectangle_landscape_button_background_color
);

$masonry_gallery_rectangle_landscape_button_hover_background_color = new PitchQodeField(
	'colorsimple',
	'masonry_gallery_rectangle_landscape_button_hover_background_color',
	'',
	esc_html__( 'Hover Background Color', 'pitch' )
);
$row3->addChild(
	'masonry_gallery_rectangle_landscape_button_hover_background_color',
	$masonry_gallery_rectangle_landscape_button_hover_background_color
);

$row4 = new PitchQodeRow( true );
$masonry_gallery_rectangle_landscape_button_group->addChild(
	'row4',
	$row4
);

$masonry_gallery_rectangle_landscape_button_border_color = new PitchQodeField(
	'colorsimple',
	'masonry_gallery_rectangle_landscape_button_border_color',
	'',
	esc_html__( 'Border Color', 'pitch' )
);
$row4->addChild(
	'masonry_gallery_rectangle_landscape_button_border_color',
	$masonry_gallery_rectangle_landscape_button_border_color
);

$masonry_gallery_rectangle_landscape_button_hover_border_color = new PitchQodeField(
	'colorsimple',
	'masonry_gallery_rectangle_landscape_button_hover_border_color',
	'',
	esc_html__( 'Hover Border Color', 'pitch' )
);
$row4->addChild(
	'masonry_gallery_rectangle_landscape_button_hover_border_color',
	$masonry_gallery_rectangle_landscape_button_hover_border_color
);

$masonry_gallery_rectangle_landscape_button_border_width = new PitchQodeField(
	'textsimple',
	'masonry_gallery_rectangle_landscape_button_border_width',
	'',
	esc_html__( 'Border Width (px)', 'pitch' )
);
$row4->addChild(
	'masonry_gallery_rectangle_landscape_button_border_width',
	$masonry_gallery_rectangle_landscape_button_border_width
);

$masonry_gallery_rectangle_landscape_button_border_radius = new PitchQodeField(
	'textsimple',
	'masonry_gallery_rectangle_landscape_button_border_radius',
	'',
	esc_html__( 'Border Radius (px)', 'pitch' )
);
$row4->addChild(
	'masonry_gallery_rectangle_landscape_button_border_radius',
	$masonry_gallery_rectangle_landscape_button_border_radius
);

$row5 = new PitchQodeRow( true );
$masonry_gallery_rectangle_landscape_button_group->addChild(
	'row5',
	$row5
);

$masonry_gallery_rectangle_landscape_button_padding_left = new PitchQodeField(
	'textsimple',
	'masonry_gallery_rectangle_landscape_button_padding_left',
	'',
	esc_html__( 'Padding Left (px)', 'pitch' )
);
$row5->addChild(
	'masonry_gallery_rectangle_landscape_button_padding_left',
	$masonry_gallery_rectangle_landscape_button_padding_left
);

$masonry_gallery_rectangle_landscape_button_padding_right = new PitchQodeField(
	'textsimple',
	'masonry_gallery_rectangle_landscape_button_padding_right',
	'',
	esc_html__( 'Padding Right (px)', 'pitch' )
);
$row5->addChild(
	'masonry_gallery_rectangle_landscape_button_padding_right',
	$masonry_gallery_rectangle_landscape_button_padding_right
);

$masonry_gallery_rectangle_landscape_button_margin_top = new PitchQodeField(
	'textsimple',
	'masonry_gallery_rectangle_landscape_button_margin_top',
	'',
	esc_html__( 'Margin Top', 'pitch' )
);
$row5->addChild(
	'masonry_gallery_rectangle_landscape_button_margin_top',
	$masonry_gallery_rectangle_landscape_button_margin_top
);

$masonry_gallery_rectangle_landscape_icon_group = new PitchQodeGroup(
	esc_html__( 'Icon Style', 'pitch' ),
	esc_html__( 'Define Rectangle Landscape Icon Style', 'pitch' )
);
$panel30->addChild(
	'masonry_gallery_rectangle_landscape_icon_group',
	$masonry_gallery_rectangle_landscape_icon_group
);

$row1 = new PitchQodeRow();
$masonry_gallery_rectangle_landscape_icon_group->addChild(
	'row1',
	$row1
);

$masonry_gallery_rectangle_landscape_icon_color = new PitchQodeField(
	'colorsimple',
	'masonry_gallery_rectangle_landscape_icon_color',
	'',
	esc_html__( 'Icon Color', 'pitch' )
);
$row1->addChild(
	'masonry_gallery_rectangle_landscape_icon_color',
	$masonry_gallery_rectangle_landscape_icon_color
);

$masonry_gallery_rectangle_landscape_icon_hover_color = new PitchQodeField(
	'colorsimple',
	'masonry_gallery_rectangle_landscape_icon_hover_color',
	'',
	esc_html__( 'Icon Hover Color', 'pitch' )
);
$row1->addChild(
	'masonry_gallery_rectangle_landscape_icon_hover_color',
	$masonry_gallery_rectangle_landscape_icon_hover_color
);

$masonry_gallery_rectangle_landscape_icon_size = new PitchQodeField(
	'textsimple',
	'masonry_gallery_rectangle_landscape_icon_size',
	'',
	esc_html__( 'Icon Size (px)', 'pitch' )
);
$row1->addChild(
	'masonry_gallery_rectangle_landscape_icon_size',
	$masonry_gallery_rectangle_landscape_icon_size
);

$masonry_gallery_rectangle_landscape_icon_margin_bottom = new PitchQodeField(
	'textsimple',
	'masonry_gallery_rectangle_landscape_icon_margin_bottom',
	'',
	esc_html__( 'Margin Bottom (px)', 'pitch' )
);
$row1->addChild(
	'masonry_gallery_rectangle_landscape_icon_margin_bottom',
	$masonry_gallery_rectangle_landscape_icon_margin_bottom
);

$masonry_gallery_rectangle_landscape_overlay_group = new PitchQodeGroup(
	esc_html__( 'Overlay Style', 'pitch' ),
	esc_html__( 'Define Rectangle Landscape Overlay Style', 'pitch' )
);
$panel30->addChild(
	'masonry_gallery_rectangle_landscape_overlay_group',
	$masonry_gallery_rectangle_landscape_overlay_group
);

$row1 = new PitchQodeRow();
$masonry_gallery_rectangle_landscape_overlay_group->addChild(
	'row1',
	$row1
);

$masonry_gallery_rectangle_landscape_overlay_color = new PitchQodeField(
	'colorsimple',
	'masonry_gallery_rectangle_landscape_overlay_color',
	'',
	esc_html__( 'Color', 'pitch' )
);
$row1->addChild(
	'masonry_gallery_rectangle_landscape_overlay_color',
	$masonry_gallery_rectangle_landscape_overlay_color
);

$masonry_gallery_rectangle_landscape_overlay_transparency = new PitchQodeField(
	'textsimple',
	'masonry_gallery_rectangle_landscape_overlay_transparency',
	'',
	esc_html__( 'Transparency (0=full - 1=opaque)', 'pitch' )
);
$row1->addChild(
	'masonry_gallery_rectangle_landscape_overlay_transparency',
	$masonry_gallery_rectangle_landscape_overlay_transparency
);

$masonry_gallery_rectangle_landscape_spacing_group = new PitchQodeGroup(
	esc_html__( 'Text Alignment', 'pitch' ),
	esc_html__( 'Define Text Alignment', 'pitch' )
);
$panel30->addChild(
	'masonry_gallery_rectangle_landscape_spacing_group',
	$masonry_gallery_rectangle_landscape_spacing_group
);

$row1 = new PitchQodeRow();
$masonry_gallery_rectangle_landscape_spacing_group->addChild(
	'row1',
	$row1
);

$masonry_gallery_rectangle_landscape_text_align = new PitchQodeField(
	"selectsimple",
	"masonry_gallery_rectangle_landscape_text_align",
	"center",
	esc_html__( "Text Alignment", 'pitch' ),
	esc_html__( "Choose text position", 'pitch' ),
	array(
		"center" => esc_html__( "Center", 'pitch' ),
		"left" => esc_html__( "Left", 'pitch' ),
		"right" => esc_html__( "Right", 'pitch' )
	)
);

$row1->addChild(
	"masonry_gallery_rectangle_landscape_text_align",
	$masonry_gallery_rectangle_landscape_text_align
);

$masonry_gallery_rectangle_landscape_padding_group = new PitchQodeGroup(
	esc_html__( 'Content Padding', 'pitch' ),
	esc_html__( 'Please insert padding in px(or %) i.e. 5px (or 5%)', 'pitch' )
);
$panel30->addChild(
	'masonry_gallery_rectangle_landscape_padding_group',
	$masonry_gallery_rectangle_landscape_padding_group
);

$row1 = new PitchQodeRow();
$masonry_gallery_rectangle_landscape_padding_group->addChild(
	'row1',
	$row1
);

$masonry_gallery_rectangle_landscape_padding_left = new PitchQodeField(
	"textsimple",
	"masonry_gallery_rectangle_landscape_padding_left",
	"",
	esc_html__( "Padding Left", 'pitch' ),
	esc_html__( "Please insert padding in px(or %) i.e. 5px (or 5%)", 'pitch' ),
	array(),
	array( "col_width" => 3 )
);
$row1->addChild(
	"masonry_gallery_rectangle_landscape_padding_left",
	$masonry_gallery_rectangle_landscape_padding_left
);

$masonry_gallery_rectangle_landscape_padding_right = new PitchQodeField(
	"textsimple",
	"masonry_gallery_rectangle_landscape_padding_right",
	"",
	esc_html__( "Padding Right", 'pitch' ),
	esc_html__( "Please insert padding in px(or %) i.e. 5px(or 5%)", 'pitch' ),
	array(),
	array( "col_width" => 3 )
);
$row1->addChild(
	"masonry_gallery_rectangle_landscape_padding_right",
	$masonry_gallery_rectangle_landscape_padding_right
);

//Message Boxes

$panel8 = new PitchQodePanel(
	esc_html__( "Message Boxes", 'pitch' ),
	"message_boxes_panel"
);
$elementsPage->addChild(
	"panel8",
	$panel8
);

$group1 = new PitchQodeGroup(
	esc_html__( "Message Box Style", 'pitch' ),
	esc_html__( "Define Message Box Style", 'pitch' )
);
$panel8->addChild(
	"group1",
	$group1
);
$row1 = new PitchQodeRow();
$group1->addChild(
	"row1",
	$row1
);

$message_title_color = new PitchQodeField(
	"colorsimple",
	"message_title_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"message_title_color",
	$message_title_color
);

$message_backgroundcolor = new PitchQodeField(
	"colorsimple",
	"message_backgroundcolor",
	"",
	esc_html__( "Background color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"message_backgroundcolor",
	$message_backgroundcolor
);

$row2 = new PitchQodeRow( true );
$group1->addChild(
	"row2",
	$row2
);

$message_title_google_fonts = new PitchQodeField(
	"fontsimple",
	"message_title_google_fonts",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"message_title_google_fonts",
	$message_title_google_fonts
);

$message_title_fontsize = new PitchQodeField(
	"textsimple",
	"message_title_fontsize",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"message_title_fontsize",
	$message_title_fontsize
);

$message_title_lineheight = new PitchQodeField(
	"textsimple",
	"message_title_lineheight",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"message_title_lineheight",
	$message_title_lineheight
);

$message_title_letter_spacing = new PitchQodeField(
	"textsimple",
	"message_title_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"message_title_letter_spacing",
	$message_title_letter_spacing
);

$row3 = new PitchQodeRow( true );
$group1->addChild(
	"row3",
	$row3
);

$message_title_fontstyle = new PitchQodeField(
	"selectblanksimple",
	"message_title_fontstyle",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row3->addChild(
	"message_title_fontstyle",
	$message_title_fontstyle
);

$message_title_fontweight = new PitchQodeField(
	"selectblanksimple",
	"message_title_fontweight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row3->addChild(
	"message_title_fontweight",
	$message_title_fontweight
);

$message_title_text_transform = new PitchQodeField(
	"selectblanksimple",
	"message_title_text_transform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row3->addChild(
	"message_title_text_transform",
	$message_title_text_transform
);

$group2 = new PitchQodeGroup(
	esc_html__( "Message Box Icon Style", 'pitch' ),
	esc_html__( "Define styles for Message Box icons", 'pitch' )
);
$panel8->addChild(
	"group2",
	$group2
);
$row1 = new PitchQodeRow();
$group2->addChild(
	"row1",
	$row1
);

$message_icon_color = new PitchQodeField(
	"colorsimple",
	"message_icon_color",
	"",
	esc_html__( "Icon Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"message_icon_color",
	$message_icon_color
);

$message_icon_fontsize = new PitchQodeField(
	"textsimple",
	"message_icon_fontsize",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"message_icon_fontsize",
	$message_icon_fontsize
);

$group3 = new PitchQodeGroup(
	esc_html__( "Message Box Padding", 'pitch' ),
	esc_html__( "Define message box padding", 'pitch' )
);
$panel8->addChild(
	"group3",
	$group3
);

$row1 = new PitchQodeRow( true );
$group3->addChild(
	"row1",
	$row1
);

$message_padding_left = new PitchQodeField(
	"textsimple",
	"message_padding_left",
	"",
	esc_html__( "Padding Left (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"message_padding_left",
	$message_padding_left
);

$message_padding_right = new PitchQodeField(
	"textsimple",
	"message_padding_right",
	"",
	esc_html__( "Padding Right (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"message_padding_right",
	$message_padding_right
);

$message_padding_top = new PitchQodeField(
	"textsimple",
	"message_padding_top",
	"",
	esc_html__( "Padding Top (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"message_padding_top",
	$message_padding_top
);

$message_padding_bottom = new PitchQodeField(
	"textsimple",
	"message_padding_bottom",
	"",
	esc_html__( "Padding Bottom (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"message_padding_bottom",
	$message_padding_bottom
);

//Pagination

$panel10 = new PitchQodePanel(
	esc_html__( "Pagination", 'pitch' ),
	"pagination_panel"
);
$elementsPage->addChild(
	"panel10",
	$panel10
);

$pagination_type = new PitchQodeField(
	"select",
	"pagination_type",
	"",
	esc_html__( "Type", 'pitch' ),
	esc_html__( "Choose pagination style", 'pitch' ),
	array(
		"standard" => esc_html__( "Standard", 'pitch' ),
		"arrows_on_sides" => esc_html__( "Arrows on Sides", 'pitch' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			"standard"        => "",
			"arrows_on_sides" => "#qodef_pagination_standard_position_container"
		),
		"show"       => array(
			"standard"        => "#qodef_pagination_standard_position_container",
			"arrows_on_sides" => ""
		)
	)
);
$panel10->addChild(
	"pagination_type",
	$pagination_type
);

$pagination_standard_position_container = new PitchQodeContainer(
	"pagination_standard_position_container",
	"pagination_type",
	"arrows_on_sides"
);
$panel10->addChild(
	"pagination_standard_position_container",
	$pagination_standard_position_container
);

$pagination_standard_position = new PitchQodeField(
	"select",
	"pagination_standard_position",
	"",
	esc_html__( "Position", 'pitch' ),
	esc_html__( "Choose position of pagination", 'pitch' ),
	array(
		"left" => esc_html__( "Left", 'pitch' ),
		"center" => esc_html__( "Center", 'pitch' ),
		"right" => esc_html__( "Right", 'pitch' )
	)
);
$pagination_standard_position_container->addChild(
	"pagination_standard_position",
	$pagination_standard_position
);

$group3 = new PitchQodeGroup(
	esc_html__( "Navigation Style", 'pitch' ),
	esc_html__( "Define Navigation styles", 'pitch' )
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

$pagination_button_width = new PitchQodeField(
	"textsimple",
	"pagination_button_width",
	"",
	esc_html__( "Width (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"pagination_button_width",
	$pagination_button_width
);

$pagination_button_height = new PitchQodeField(
	"textsimple",
	"pagination_button_height",
	"",
	esc_html__( "Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"pagination_button_height",
	$pagination_button_height
);

$pagination_space_between_buttons = new PitchQodeField(
	"textsimple",
	"pagination_space_between_buttons",
	"",
	esc_html__( "Space between buttons (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"pagination_space_between_buttons",
	$pagination_space_between_buttons
);

$pagination_button_background_color = new PitchQodeField(
	"colorsimple",
	"pagination_button_background_color",
	"",
	esc_html__( "Background Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"pagination_button_background_color",
	$pagination_button_background_color
);

$row2 = new PitchQodeRow();
$group3->addChild(
	"row2",
	$row2
);

$pagination_button_background_hover_color = new PitchQodeField(
	"colorsimple",
	"pagination_button_background_hover_color",
	"",
	esc_html__( "Background Hover Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"pagination_button_background_hover_color",
	$pagination_button_background_hover_color
);

$pagination_button_background_active_color = new PitchQodeField(
	"colorsimple",
	"pagination_button_background_active_color",
	"",
	esc_html__( "Background Active Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"pagination_button_background_active_color",
	$pagination_button_background_active_color
);

$pagination_button_border_color = new PitchQodeField(
	"colorsimple",
	"pagination_button_border_color",
	"",
	esc_html__( "Border Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"pagination_button_border_color",
	$pagination_button_border_color
);

$pagination_button_border_hover_color = new PitchQodeField(
	"colorsimple",
	"pagination_button_border_hover_color",
	"",
	esc_html__( "Border Hover Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"pagination_button_border_hover_color",
	$pagination_button_border_hover_color
);

$row3 = new PitchQodeRow();
$group3->addChild(
	"row3",
	$row3
);

$pagination_button_border_active_color = new PitchQodeField(
	"colorsimple",
	"pagination_button_border_active_color",
	"",
	esc_html__( "Border Active Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row3->addChild(
	"pagination_button_border_active_color",
	$pagination_button_border_active_color
);

$pagination_button_border_radius = new PitchQodeField(
	"textsimple",
	"pagination_button_border_radius",
	"",
	esc_html__( "Border Radius (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row3->addChild(
	"pagination_button_border_radius",
	$pagination_button_border_radius
);

$pagination_button_border_width = new PitchQodeField(
	"textsimple",
	"pagination_button_border_width",
	"",
	esc_html__( "Border Width (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row3->addChild(
	"pagination_button_border_width",
	$pagination_button_border_width
);

$group1 = new PitchQodeGroup(
	esc_html__( "Text Style", 'pitch' ),
	esc_html__( "Define text styles (this style will also be applied to Only Previous and Next type)", 'pitch' )
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

$pagination_color = new PitchQodeField(
	"colorsimple",
	"pagination_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"pagination_color",
	$pagination_color
);

$pagination_hover_color = new PitchQodeField(
	"colorsimple",
	"pagination_hover_color",
	"",
	esc_html__( "Hover Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"pagination_hover_color",
	$pagination_hover_color
);

$pagination_active_color = new PitchQodeField(
	"colorsimple",
	"pagination_active_color",
	"",
	esc_html__( "Active Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"pagination_active_color",
	$pagination_active_color
);

$pagination_font_size = new PitchQodeField(
	"textsimple",
	"pagination_font_size",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"pagination_font_size",
	$pagination_font_size
);

$row2 = new PitchQodeRow( true );
$group1->addChild(
	"row2",
	$row2
);

$pagination_font_weight = new PitchQodeField(
	"selectblanksimple",
	"pagination_font_weight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"pagination_font_weight",
	$pagination_font_weight
);

$pagination_font_family = new PitchQodeField(
	"fontsimple",
	"pagination_font_family",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"pagination_font_family",
	$pagination_font_family
);

$pagination_font_style = new PitchQodeField(
	"selectblanksimple",
	"pagination_font_style",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"pagination_font_style",
	$pagination_font_style
);

$pagination_letter_spacing = new PitchQodeField(
	"textsimple",
	"pagination_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"pagination_letter_spacing",
	$pagination_letter_spacing
);

$group4 = new PitchQodeGroup(
	esc_html__( "Icon Arrow Style", 'pitch' ),
	esc_html__( "Define arrow styles (this style will also be applied to Only Previous and Next type)", 'pitch' )
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

$pagination_arrow_size = new PitchQodeField(
	"textsimple",
	"pagination_arrow_size",
	"",
	esc_html__( "Arrow Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"pagination_arrow_size",
	$pagination_arrow_size
);

$pagination_arrows_type = new PitchQodeField(
	"selectblanksimple",
	"pagination_arrows_type",
	"",
	esc_html__( "Arrow Icon", 'pitch' ),
	"",
	pitch_qode_get_options_value_by_name( 'arrows_type' )
);
$row1->addChild(
	"pagination_arrows_type",
	$pagination_arrows_type
);

$pagination_double_arrows_type = new PitchQodeField(
	"selectblanksimple",
	"pagination_double_arrows_type",
	"",
	esc_html__( "First/Last Arrow Icon", 'pitch' ),
	"",
	pitch_qode_get_options_value_by_name( 'double_arrows_type' )
);
$row1->addChild(
	"pagination_double_arrows_type",
	$pagination_double_arrows_type
);

$portfolio_pagination_section = new PitchQodeTitle(
	"portfolio_pagination_section",
	esc_html__( "Portfolio Pagination", 'pitch' )
);
$panel10->addChild(
	"portfolio_pagination_section",
	$portfolio_pagination_section
);

$group2 = new PitchQodeGroup(
	esc_html__( "Portfolio Pagination Style", 'pitch' ),
	esc_html__( "Define Pagination styles for portfolio single", 'pitch' )
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

$portfolio_pagination_color = new PitchQodeField(
	"colorsimple",
	"portfolio_pagination_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"portfolio_pagination_color",
	$portfolio_pagination_color
);

$portfolio_pagination_hover_color = new PitchQodeField(
	"colorsimple",
	"portfolio_pagination_hover_color",
	"",
	esc_html__( "Hover Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"portfolio_pagination_hover_color",
	$portfolio_pagination_hover_color
);

$portfolio_pagination_font_size = new PitchQodeField(
	"textsimple",
	"portfolio_pagination_font_size",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"portfolio_pagination_font_size",
	$portfolio_pagination_font_size
);

//Pie Charts

$panel11 = new PitchQodePanel(
	esc_html__( "Pie Charts", 'pitch' ),
	"pie_charts_panel"
);
$elementsPage->addChild(
	"panel11",
	$panel11
);

$pie_charts_margin_below_chart = new PitchQodeField(
	"text",
	"pie_charts_margin_below_chart",
	"",
	esc_html__( "Margin Below Chart (px)", 'pitch' ),
	esc_html__( "Set margin below pie chart", 'pitch' ),
	array(),
	array( "col_width" => 3 )
);
$panel11->addChild(
	"pie_charts_margin_below_chart",
	$pie_charts_margin_below_chart
);

$group1 = new PitchQodeGroup(
	esc_html__( "Pie Chart Percent Style", 'pitch' ),
	esc_html__( "Define text style for Pie Charts percent number", 'pitch' )
);
$panel11->addChild(
	"group1",
	$group1
);

$row1 = new PitchQodeRow();
$group1->addChild(
	"row1",
	$row1
);

$pie_charts_fontsize = new PitchQodeField(
	"textsimple",
	"pie_charts_fontsize",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"pie_charts_fontsize",
	$pie_charts_fontsize
);

$pie_charts_fontweight = new PitchQodeField(
	"selectblanksimple",
	"pie_charts_fontweight",
	"",
	esc_html__( "Text Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row1->addChild(
	"pie_charts_fontweight",
	$pie_charts_fontweight
);

$group2 = new PitchQodeGroup(
	esc_html__( "Pie chart outer border color", 'pitch' ),
	esc_html__( "Set color for Pie Chart outer border", 'pitch' )
);
$panel11->addChild(
	"group2",
	$group2
);

$row2 = new PitchQodeRow();
$group2->addChild(
	"row2",
	$row2
);

$pie_charts_outer_border_color = new PitchQodeField(
	"colorsimple",
	"pie_charts_outer_border_color",
	"",
	"",
	""
);
$row2->addChild(
	"pie_charts_outer_border_color",
	$pie_charts_outer_border_color
);

//Pricing table

$panel12 = new PitchQodePanel(
	esc_html__( "Pricing Table", 'pitch' ),
	"pricing_table_panel"
);
$elementsPage->addChild(
	"panel12",
	$panel12
);

$group1 = new PitchQodeGroup(
	esc_html__( "Pricing Tables Style", 'pitch' ),
	esc_html__( "Define Pricing tables style", 'pitch' )
);
$panel12->addChild(
	"group1",
	$group1
);

$row1 = new PitchQodeRow();
$group1->addChild(
	"row1",
	$row1
);

$pricing_table_title_background_color = new PitchQodeField(
	"colorsimple",
	"pricing_table_title_background_color",
	"",
	esc_html__( "Title Background Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"pricing_table_title_background_color",
	$pricing_table_title_background_color
);

$pricing_table_title_separator_color = new PitchQodeField(
	"colorsimple",
	"pricing_table_title_separator_color",
	"",
	esc_html__( "Title Separator Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"pricing_table_title_separator_color",
	$pricing_table_title_separator_color
);

$pricing_table_title_separator_thickness = new PitchQodeField(
	"textsimple",
	"pricing_table_title_separator_thickness",
	"",
	esc_html__( "Title Separator Thickness (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"pricing_table_title_separator_thickness",
	$pricing_table_title_separator_thickness
);

$row2 = new PitchQodeRow( true );
$group1->addChild(
	"row2",
	$row2
);

$pricing_table_title_top_padding = new PitchQodeField(
	"textsimple",
	"pricing_table_title_top_padding",
	"",
	esc_html__( "Title Padding Top (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"pricing_table_title_top_padding",
	$pricing_table_title_top_padding
);

$pricing_table_title_bottom_padding = new PitchQodeField(
	"textsimple",
	"pricing_table_title_bottom_padding",
	"",
	esc_html__( "Title Padding Bottom (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"pricing_table_title_bottom_padding",
	$pricing_table_title_bottom_padding
);

$row3 = new PitchQodeRow( true );
$group1->addChild(
	"row3",
	$row3
);

$pricing_table_price_background_color = new PitchQodeField(
	"colorsimple",
	"pricing_table_price_background_color",
	"",
	esc_html__( "Price Background Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row3->addChild(
	"pricing_table_price_background_color",
	$pricing_table_price_background_color
);

$pricing_table_price_separator_color = new PitchQodeField(
	"colorsimple",
	"pricing_table_price_separator_color",
	"",
	esc_html__( "Price Separator Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row3->addChild(
	"pricing_table_price_separator_color",
	$pricing_table_price_separator_color
);

$pricing_table_price_separator_thickness = new PitchQodeField(
	"textsimple",
	"pricing_table_price_separator_thickness",
	"",
	esc_html__( "Price Separator Thickness (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row3->addChild(
	"pricing_table_price_separator_thickness",
	$pricing_table_price_separator_thickness
);

$row4 = new PitchQodeRow( true );
$group1->addChild(
	"row4",
	$row4
);

$pricing_table_price_top_padding = new PitchQodeField(
	"textsimple",
	"pricing_table_price_top_padding",
	"",
	esc_html__( "Price Top Padding (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row4->addChild(
	"pricing_table_price_top_padding",
	$pricing_table_price_top_padding
);

$pricing_table_price_bottom_padding = new PitchQodeField(
	"textsimple",
	"pricing_table_price_bottom_padding",
	"",
	esc_html__( "Price Bottom Padding (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row4->addChild(
	"pricing_table_price_bottom_padding",
	$pricing_table_price_bottom_padding
);

$row5 = new PitchQodeRow( true );
$group1->addChild(
	"row5",
	$row5
);

$pricing_table_background_color = new PitchQodeField(
	"colorsimple",
	"pricing_table_background_color",
	"",
	esc_html__( "Content Background Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row5->addChild(
	"pricing_table_background_color",
	$pricing_table_background_color
);

$pricing_table_separator_color = new PitchQodeField(
	"colorsimple",
	"pricing_table_separator_color",
	"",
	esc_html__( "Content Separator Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row5->addChild(
	"pricing_table_separator_color",
	$pricing_table_separator_color
);

$pricing_table_separator_thickness = new PitchQodeField(
	"textsimple",
	"pricing_table_separator_thickness",
	"",
	esc_html__( "Content Separator Thickness (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row5->addChild(
	"pricing_table_separator_thickness",
	$pricing_table_separator_thickness
);

$row6 = new PitchQodeRow( true );
$group1->addChild(
	"row6",
	$row6
);

$pricing_table_content_top_margin = new PitchQodeField(
	"textsimple",
	"pricing_table_content_top_margin",
	"",
	esc_html__( "Content Top Margin (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row6->addChild(
	"pricing_table_content_top_margin",
	$pricing_table_content_top_margin
);

$pricing_table_content_bottom_margin = new PitchQodeField(
	"textsimple",
	"pricing_table_content_bottom_margin",
	"",
	esc_html__( "Content Bottom Margin (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row6->addChild(
	"pricing_table_content_bottom_margin",
	$pricing_table_content_bottom_margin
);

$row7 = new PitchQodeRow( true );
$group1->addChild(
	"row7",
	$row7
);

$pricing_table_button_holder_background_color = new PitchQodeField(
	"colorsimple",
	"pricing_table_button_holder_background_color",
	"",
	esc_html__( "Button Holder Background Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row7->addChild(
	"pricing_table_button_holder_background_color",
	$pricing_table_button_holder_background_color
);

$pricing_table_button_top_padding = new PitchQodeField(
	"textsimple",
	"pricing_table_button_top_padding",
	"",
	esc_html__( "Button Holder Padding Top(px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row7->addChild(
	"pricing_table_button_top_padding",
	$pricing_table_button_top_padding
);

$pricing_table_button_bottom_padding = new PitchQodeField(
	"textsimple",
	"pricing_table_button_bottom_padding",
	"",
	esc_html__( "Button Holder Padding Bottom(px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row7->addChild(
	"pricing_table_button_bottom_padding",
	$pricing_table_button_bottom_padding
);

$group2 = new PitchQodeGroup(
	esc_html__( "Pricing Tables Active Text", 'pitch' ),
	esc_html__( "DefinePricing tables active text style.", 'pitch' )
);
$panel12->addChild(
	"group2",
	$group2
);

$row1 = new PitchQodeRow();
$group2->addChild(
	"row1",
	$row1
);

$pricing_tables_active_text_color = new PitchQodeField(
	"colorsimple",
	"pricing_tables_active_text_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"pricing_tables_active_text_color",
	$pricing_tables_active_text_color
);

$pricing_tables_active_text_font_size = new PitchQodeField(
	"textsimple",
	"pricing_tables_active_text_font_size",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"pricing_tables_active_text_font_size",
	$pricing_tables_active_text_font_size
);

$pricing_tables_active_text_line_height = new PitchQodeField(
	"textsimple",
	"pricing_tables_active_text_line_height",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"pricing_tables_active_text_line_height",
	$pricing_tables_active_text_line_height
);

$pricing_tables_active_text_text_transform = new PitchQodeField(
	"selectblanksimple",
	"pricing_tables_active_text_text_transform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	"pricing_tables_active_text_text_transform",
	$pricing_tables_active_text_text_transform
);

$row2 = new PitchQodeRow( true );
$group2->addChild(
	"row2",
	$row2
);

$pricing_tables_active_text_font_family = new PitchQodeField(
	"fontsimple",
	"pricing_tables_active_text_font_family",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"pricing_tables_active_text_font_family",
	$pricing_tables_active_text_font_family
);

$pricing_tables_active_text_font_style = new PitchQodeField(
	"selectblanksimple",
	"pricing_tables_active_text_font_style",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"pricing_tables_active_text_font_style",
	$pricing_tables_active_text_font_style
);

$pricing_tables_active_text_font_weight = new PitchQodeField(
	"selectblanksimple",
	"pricing_tables_active_text_font_weight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"pricing_tables_active_text_font_weight",
	$pricing_tables_active_text_font_weight
);

$pricing_tables_active_text_letter_spacing = new PitchQodeField(
	"textsimple",
	"pricing_tables_active_text_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"pricing_tables_active_text_letter_spacing",
	$pricing_tables_active_text_letter_spacing
);

$group3 = new PitchQodeGroup(
	esc_html__( "Pricing Tables Title", 'pitch' ),
	esc_html__( "Define Pricing tables title style", 'pitch' )
);
$panel12->addChild(
	"group3",
	$group3
);

$row1 = new PitchQodeRow();
$group3->addChild(
	"row1",
	$row1
);

$pricing_tables_title_color = new PitchQodeField(
	"colorsimple",
	"pricing_tables_title_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"pricing_tables_title_color",
	$pricing_tables_title_color
);

$pricing_tables_title_font_size = new PitchQodeField(
	"textsimple",
	"pricing_tables_title_font_size",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"pricing_tables_title_font_size",
	$pricing_tables_title_font_size
);

$pricing_tables_title_line_height = new PitchQodeField(
	"textsimple",
	"pricing_tables_title_line_height",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"pricing_tables_title_line_height",
	$pricing_tables_title_line_height
);

$pricing_tables_title_text_transform = new PitchQodeField(
	"selectblanksimple",
	"pricing_tables_title_text_transform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	"pricing_tables_title_text_transform",
	$pricing_tables_title_text_transform
);

$row2 = new PitchQodeRow( true );
$group3->addChild(
	"row2",
	$row2
);

$pricing_tables_title_font_family = new PitchQodeField(
	"fontsimple",
	"pricing_tables_title_font_family",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"pricing_tables_title_font_family",
	$pricing_tables_title_font_family
);

$pricing_tables_title_font_style = new PitchQodeField(
	"selectblanksimple",
	"pricing_tables_title_font_style",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"pricing_tables_title_font_style",
	$pricing_tables_title_font_style
);

$pricing_tables_title_font_weight = new PitchQodeField(
	"selectblanksimple",
	"pricing_tables_title_font_weight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"pricing_tables_title_font_weight",
	$pricing_tables_title_font_weight
);

$pricing_tables_title_letter_spacing = new PitchQodeField(
	"textsimple",
	"pricing_tables_title_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"pricing_tables_title_letter_spacing",
	$pricing_tables_title_letter_spacing
);

$group4 = new PitchQodeGroup(
	esc_html__( "Pricing Tables Period", 'pitch' ),
	esc_html__( "DefinePricing tables period style", 'pitch' )
);
$panel12->addChild(
	"group4",
	$group4
);

$row1 = new PitchQodeRow();
$group4->addChild(
	"row1",
	$row1
);

$pricing_tables_period_color = new PitchQodeField(
	"colorsimple",
	"pricing_tables_period_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"pricing_tables_period_color",
	$pricing_tables_period_color
);

$pricing_tables_period_font_size = new PitchQodeField(
	"textsimple",
	"pricing_tables_period_font_size",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"pricing_tables_period_font_size",
	$pricing_tables_period_font_size
);

$pricing_tables_period_line_height = new PitchQodeField(
	"textsimple",
	"pricing_tables_period_line_height",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"pricing_tables_period_line_height",
	$pricing_tables_period_line_height
);

$pricing_tables_period_text_transform = new PitchQodeField(
	"selectblanksimple",
	"pricing_tables_period_text_transform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	"pricing_tables_period_text_transform",
	$pricing_tables_period_text_transform
);

$row2 = new PitchQodeRow( true );
$group4->addChild(
	"row2",
	$row2
);

$pricing_tables_period_font_family = new PitchQodeField(
	"fontsimple",
	"pricing_tables_period_font_family",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"pricing_tables_period_font_family",
	$pricing_tables_period_font_family
);

$pricing_tables_period_font_style = new PitchQodeField(
	"selectblanksimple",
	"pricing_tables_period_font_style",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"pricing_tables_period_font_style",
	$pricing_tables_period_font_style
);

$pricing_tables_period_font_weight = new PitchQodeField(
	"selectblanksimple",
	"pricing_tables_period_font_weight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"pricing_tables_period_font_weight",
	$pricing_tables_period_font_weight
);

$pricing_tables_period_letter_spacing = new PitchQodeField(
	"textsimple",
	"pricing_tables_period_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"pricing_tables_period_letter_spacing",
	$pricing_tables_period_letter_spacing
);

$group5 = new PitchQodeGroup(
	esc_html__( "Pricing Tables Price", 'pitch' ),
	esc_html__( "Define Pricing Tables price style", 'pitch' )
);
$panel12->addChild(
	"group5",
	$group5
);

$row1 = new PitchQodeRow();
$group5->addChild(
	"row1",
	$row1
);

$pricing_tables_price_color = new PitchQodeField(
	"colorsimple",
	"pricing_tables_price_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"pricing_tables_price_color",
	$pricing_tables_price_color
);

$pricing_tables_price_font_size = new PitchQodeField(
	"textsimple",
	"pricing_tables_price_font_size",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"pricing_tables_price_font_size",
	$pricing_tables_price_font_size
);

$pricing_tables_price_line_height = new PitchQodeField(
	"textsimple",
	"pricing_tables_price_line_height",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"pricing_tables_price_line_height",
	$pricing_tables_price_line_height
);

$pricing_tables_price_text_transform = new PitchQodeField(
	"selectblanksimple",
	"pricing_tables_price_text_transform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	"pricing_tables_price_text_transform",
	$pricing_tables_price_text_transform
);

$row2 = new PitchQodeRow( true );
$group5->addChild(
	"row2",
	$row2
);

$pricing_tables_price_font_family = new PitchQodeField(
	"fontsimple",
	"pricing_tables_price_font_family",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"pricing_tables_price_font_family",
	$pricing_tables_price_font_family
);

$pricing_tables_price_font_style = new PitchQodeField(
	"selectblanksimple",
	"pricing_tables_price_font_style",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"pricing_tables_price_font_style",
	$pricing_tables_price_font_style
);

$pricing_tables_price_font_weight = new PitchQodeField(
	"selectblanksimple",
	"pricing_tables_price_font_weight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"pricing_tables_price_font_weight",
	$pricing_tables_price_font_weight
);

$pricing_tables_price_letter_spacing = new PitchQodeField(
	"textsimple",
	"pricing_tables_price_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"pricing_tables_price_letter_spacing",
	$pricing_tables_price_letter_spacing
);

$group6 = new PitchQodeGroup(
	esc_html__( "Pricing Tables Currency", 'pitch' ),
	esc_html__( "Define Pricing tables currency style.", 'pitch' )
);
$panel12->addChild(
	"group6",
	$group6
);
$row1 = new PitchQodeRow();
$group6->addChild(
	"row1",
	$row1
);

$pricing_tables_currency_color = new PitchQodeField(
	"colorsimple",
	"pricing_tables_currency_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"pricing_tables_currency_color",
	$pricing_tables_currency_color
);

$pricing_tables_currency_font_size = new PitchQodeField(
	"textsimple",
	"pricing_tables_currency_font_size",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"pricing_tables_currency_font_size",
	$pricing_tables_currency_font_size
);

$pricing_tables_currency_line_height = new PitchQodeField(
	"textsimple",
	"pricing_tables_currency_line_height",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"pricing_tables_currency_line_height",
	$pricing_tables_currency_line_height
);

$pricing_tables_currency_text_transform = new PitchQodeField(
	"selectblanksimple",
	"pricing_tables_currency_text_transform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	"pricing_tables_currency_text_transform",
	$pricing_tables_currency_text_transform
);

$row2 = new PitchQodeRow( true );
$group6->addChild(
	"row2",
	$row2
);

$pricing_tables_currency_font_family = new PitchQodeField(
	"fontsimple",
	"pricing_tables_currency_font_family",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"pricing_tables_currency_font_family",
	$pricing_tables_currency_font_family
);

$pricing_tables_currency_font_style = new PitchQodeField(
	"selectblanksimple",
	"pricing_tables_currency_font_style",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"pricing_tables_currency_font_style",
	$pricing_tables_currency_font_style
);

$pricing_tables_currency_font_weight = new PitchQodeField(
	"selectblanksimple",
	"pricing_tables_currency_font_weight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"pricing_tables_currency_font_weight",
	$pricing_tables_currency_font_weight
);

$pricing_tables_currency_letter_spacing = new PitchQodeField(
	"textsimple",
	"pricing_tables_currency_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"pricing_tables_currency_letter_spacing",
	$pricing_tables_currency_letter_spacing
);

$group7 = new PitchQodeGroup(
	esc_html__( "Pricing Tables Button", 'pitch' ),
	esc_html__( "Define Pricing Tables button style.", 'pitch' )
);
$panel12->addChild(
	"group7",
	$group7
);

$row1 = new PitchQodeRow();
$group7->addChild(
	"row1",
	$row1
);

$pricing_tables_button_color = new PitchQodeField(
	"colorsimple",
	"pricing_tables_button_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"pricing_tables_button_color",
	$pricing_tables_button_color
);

$pricing_tables_button_font_size = new PitchQodeField(
	"textsimple",
	"pricing_tables_button_font_size",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"pricing_tables_button_font_size",
	$pricing_tables_button_font_size
);

$pricing_tables_button_line_height = new PitchQodeField(
	"textsimple",
	"pricing_tables_button_line_height",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"pricing_tables_button_line_height",
	$pricing_tables_button_line_height
);

$pricing_tables_button_text_transform = new PitchQodeField(
	"selectblanksimple",
	"pricing_tables_button_text_transform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	"pricing_tables_button_text_transform",
	$pricing_tables_button_text_transform
);

$row2 = new PitchQodeRow( true );
$group7->addChild(
	"row2",
	$row2
);

$pricing_tables_button_font_family = new PitchQodeField(
	"fontsimple",
	"pricing_tables_button_font_family",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"pricing_tables_button_font_family",
	$pricing_tables_button_font_family
);

$pricing_tables_button_font_style = new PitchQodeField(
	"selectblanksimple",
	"pricing_tables_button_font_style",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"pricing_tables_button_font_style",
	$pricing_tables_button_font_style
);

$pricing_tables_button_font_weight = new PitchQodeField(
	"selectblanksimple",
	"pricing_tables_button_font_weight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"pricing_tables_button_font_weight",
	$pricing_tables_button_font_weight
);

$pricing_tables_button_letter_spacing = new PitchQodeField(
	"textsimple",
	"pricing_tables_button_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"pricing_tables_button_letter_spacing",
	$pricing_tables_button_letter_spacing
);

$row3 = new PitchQodeRow( true );
$group7->addChild(
	"row3",
	$row3
);
$pricing_tables_button_hovercolor = new PitchQodeField(
	"colorsimple",
	"pricing_tables_button_hovercolor",
	"",
	esc_html__( "Text Hover Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row3->addChild(
	"pricing_tables_button_hovercolor",
	$pricing_tables_button_hovercolor
);

$pricing_tables_button_backgroundcolor = new PitchQodeField(
	"colorsimple",
	"pricing_tables_button_backgroundcolor",
	"",
	esc_html__( "Background Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row3->addChild(
	"pricing_tables_button_backgroundcolor",
	$pricing_tables_button_backgroundcolor
);

$pricing_tables_button_backgroundcolor_hover = new PitchQodeField(
	"colorsimple",
	"pricing_tables_button_backgroundcolor_hover",
	"",
	esc_html__( "Background Hover Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row3->addChild(
	"pricing_tables_button_backgroundcolor_hover",
	$pricing_tables_button_backgroundcolor_hover
);

$row4 = new PitchQodeRow( true );
$group7->addChild(
	"row4",
	$row4
);

$pricing_tables_button_border_width = new PitchQodeField(
	"textsimple",
	"pricing_tables_button_border_width",
	"",
	esc_html__( "Border Width (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row4->addChild(
	"pricing_tables_button_border_width",
	$pricing_tables_button_border_width
);

$pricing_tables_button_border_radius = new PitchQodeField(
	"textsimple",
	"pricing_tables_button_border_radius",
	"",
	esc_html__( "Border Radius (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row4->addChild(
	"pricing_tables_button_border_radius",
	$pricing_tables_button_border_radius
);

$pricing_tables_button_border_color = new PitchQodeField(
	"colorsimple",
	"pricing_tables_button_border_color",
	"",
	esc_html__( "Border Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row4->addChild(
	"pricing_tables_button_border_color",
	$pricing_tables_button_border_color
);

$pricing_tables_button_border_hover_color = new PitchQodeField(
	"colorsimple",
	"pricing_tables_button_border_hover_color",
	"",
	esc_html__( "Border Hover Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row4->addChild(
	"pricing_tables_button_border_hover_color",
	$pricing_tables_button_border_hover_color
);

$group9 = new PitchQodeGroup(
	esc_html__( "Pricing Tables Button Padding", 'pitch' ),
	esc_html__( "Define Pricing Tables button padding (Takes effect only when pricing table button is set to size normal)", 'pitch' )
);
$panel12->addChild(
	"group9",
	$group9
);

$row1 = new PitchQodeRow( true );
$group9->addChild(
	"row1",
	$row1
);

$pricing_table_button_left_padding = new PitchQodeField(
	"textsimple",
	"pricing_table_button_left_padding",
	"",
	esc_html__( "Padding Left (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"pricing_table_button_left_padding",
	$pricing_table_button_left_padding
);

$pricing_table_button_right_padding = new PitchQodeField(
	"textsimple",
	"pricing_table_button_right_padding",
	"",
	esc_html__( "Padding Right (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"pricing_table_button_right_padding",
	$pricing_table_button_right_padding
);

$group8 = new PitchQodeGroup(
	esc_html__( "Pricing Tables Content", 'pitch' ),
	esc_html__( "Define Pricing Tables content style", 'pitch' )
);
$panel12->addChild(
	"group8",
	$group8
);

$row1 = new PitchQodeRow();
$group8->addChild(
	"row1",
	$row1
);

$pricing_tables_content_color = new PitchQodeField(
	"colorsimple",
	"pricing_tables_content_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"pricing_tables_content_color",
	$pricing_tables_content_color
);

$pricing_tables_content_font_size = new PitchQodeField(
	"textsimple",
	"pricing_tables_content_font_size",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"pricing_tables_content_font_size",
	$pricing_tables_content_font_size
);

$pricing_tables_content_line_height = new PitchQodeField(
	"textsimple",
	"pricing_tables_content_line_height",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"pricing_tables_content_line_height",
	$pricing_tables_content_line_height
);

$pricing_tables_content_text_transform = new PitchQodeField(
	"selectblanksimple",
	"pricing_tables_content_text_transform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	"pricing_tables_content_text_transform",
	$pricing_tables_content_text_transform
);

$row2 = new PitchQodeRow( true );
$group8->addChild(
	"row2",
	$row2
);

$pricing_tables_content_font_family = new PitchQodeField(
	"fontsimple",
	"pricing_tables_content_font_family",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"pricing_tables_content_font_family",
	$pricing_tables_content_font_family
);

$pricing_tables_content_font_style = new PitchQodeField(
	"selectblanksimple",
	"pricing_tables_content_font_style",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"pricing_tables_content_font_style",
	$pricing_tables_content_font_style
);

$pricing_tables_content_font_weight = new PitchQodeField(
	"selectblanksimple",
	"pricing_tables_content_font_weight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"pricing_tables_content_font_weight",
	$pricing_tables_content_font_weight
);

$pricing_tables_content_letter_spacing = new PitchQodeField(
	"textsimple",
	"pricing_tables_content_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"pricing_tables_content_letter_spacing",
	$pricing_tables_content_letter_spacing
);

$row3 = new PitchQodeRow( true );
$group8->addChild(
	"row3",
	$row3
);

$pricing_table_content_top_padding = new PitchQodeField(
	"textsimple",
	"pricing_table_content_top_padding",
	"",
	esc_html__( "Content Top Padding (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row3->addChild(
	"pricing_table_content_top_padding",
	$pricing_table_content_top_padding
);

$pricing_table_content_bottom_padding = new PitchQodeField(
	"textsimple",
	"pricing_table_content_bottom_padding",
	"",
	esc_html__( "Content Bottom Padding (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row3->addChild(
	"pricing_table_content_bottom_padding",
	$pricing_table_content_bottom_padding
);

//Pricing List Items

$panel27 = new PitchQodePanel(
	esc_html__( "Pricing List Items", 'pitch' ),
	"pricing_list_item_panel"
);
$elementsPage->addChild(
	"panel27",
	$panel27
);
$group5 = new PitchQodeGroup(
	esc_html__( "Title Style", 'pitch' ),
	esc_html__( "Choose title style for pricing list", 'pitch' )
);
$panel27->addChild(
	"group5",
	$group5
);

$row1 = new PitchQodeRow();
$group5->addChild(
	"row1",
	$row1
);

$pricing_list_title_color = new PitchQodeField(
	"colorsimple",
	"pricing_list_title_color",
	"",
	esc_html__( "Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"pricing_list_title_color",
	$pricing_list_title_color
);

$pricing_list_title_fontsize = new PitchQodeField(
	"textsimple",
	"pricing_list_title_fontsize",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"pricing_list_title_fontsize",
	$pricing_list_title_fontsize
);

$pricing_list_title_lineheight = new PitchQodeField(
	"textsimple",
	"pricing_list_title_lineheight",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"pricing_list_title_lineheight",
	$pricing_list_title_lineheight
);

$pricing_list_title_texttransform = new PitchQodeField(
	"selectblanksimple",
	"pricing_list_title_texttransform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	"pricing_list_title_texttransform",
	$pricing_list_title_texttransform
);

$row2 = new PitchQodeRow( true );
$group5->addChild(
	"row2",
	$row2
);
$pricing_list_title_google_fonts = new PitchQodeField(
	"fontsimple",
	"pricing_list_title_google_fonts",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"pricing_list_title_google_fonts",
	$pricing_list_title_google_fonts
);

$pricing_list_title_fontstyle = new PitchQodeField(
	"selectblanksimple",
	"pricing_list_title_fontstyle",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"pricing_list_title_fontstyle",
	$pricing_list_title_fontstyle
);

$pricing_list_title_fontweight = new PitchQodeField(
	"selectblanksimple",
	"pricing_list_title_fontweight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"pricing_list_title_fontweight",
	$pricing_list_title_fontweight
);

$pricing_list_title_letterspacing = new PitchQodeField(
	"textsimple",
	"pricing_list_title_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"pricing_list_title_letterspacing",
	$pricing_list_title_letterspacing
);

$row3 = new PitchQodeRow( true );
$group5->addChild(
	"row3",
	$row3
);

$pricing_list_title_margin_bottom = new PitchQodeField(
	"textsimple",
	"pricing_list_title_margin_bottom",
	"",
	esc_html__( "Margin Bottom (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row3->addChild(
	"pricing_list_title_margin_bottom",
	$pricing_list_title_margin_bottom
);

$highlighted_item_section = new PitchQodeTitle(
	"highlighted_item_section",
	esc_html__( "Highlighted Item", 'pitch' )
);
$panel27->addChild(
	"highlighted_item_section",
	$highlighted_item_section
);

$group1 = new PitchQodeGroup(
	esc_html__( "Background Style", 'pitch' ),
	esc_html__( "Choose background & border color for highlighted item", 'pitch' )
);
$panel27->addChild(
	"group1",
	$group1
);

$row1 = new PitchQodeRow();
$group1->addChild(
	"row1",
	$row1
);
$pricing_list_highlighted_background_color = new PitchQodeField(
	"colorsimple",
	"pricing_list_highlighted_background_color",
	"",
	esc_html__( "Background & Border Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"pricing_list_highlighted_background_color",
	$pricing_list_highlighted_background_color
);

$group2 = new PitchQodeGroup(
	esc_html__( "Text Style", 'pitch' ),
	esc_html__( "Define text style for highlighted item", 'pitch' )
);
$panel27->addChild(
	"group2",
	$group2
);

$row1 = new PitchQodeRow();
$group2->addChild(
	"row1",
	$row1
);
$pricing_list_highlighted_text_color = new PitchQodeField(
	"colorsimple",
	"pricing_list_highlighted_text_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"pricing_list_highlighted_text_color",
	$pricing_list_highlighted_text_color
);
$pricing_list_highlighted_text_fontsize = new PitchQodeField(
	"textsimple",
	"pricing_list_highlighted_text_fontsize",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"pricing_list_highlighted_text_fontsize",
	$pricing_list_highlighted_text_fontsize
);
$pricing_list_highlighted_text_lineheight = new PitchQodeField(
	"textsimple",
	"pricing_list_highlighted_text_lineheight",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"pricing_list_highlighted_text_lineheight",
	$pricing_list_highlighted_text_lineheight
);
$pricing_list_highlighted_text_texttransform = new PitchQodeField(
	"selectblanksimple",
	"pricing_list_highlighted_text_texttransform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	"pricing_list_highlighted_text_texttransform",
	$pricing_list_highlighted_text_texttransform
);

$row2 = new PitchQodeRow( true );
$group2->addChild(
	"row2",
	$row2
);
$pricing_list_highlighted_text_google_fonts = new PitchQodeField(
	"fontsimple",
	"pricing_list_highlighted_text_google_fonts",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"pricing_list_highlighted_text_google_fonts",
	$pricing_list_highlighted_text_google_fonts
);
$pricing_list_highlighted_text_fontstyle = new PitchQodeField(
	"selectblanksimple",
	"pricing_list_highlighted_text_fontstyle",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"pricing_list_highlighted_text_fontstyle",
	$pricing_list_highlighted_text_fontstyle
);
$pricing_list_highlighted_text_fontweight = new PitchQodeField(
	"selectblanksimple",
	"pricing_list_highlighted_text_fontweight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"pricing_list_highlighted_text_fontweight",
	$pricing_list_highlighted_text_fontweight
);
$pricing_list_highlighted_text_letterspacing = new PitchQodeField(
	"textsimple",
	"pricing_list_highlighted_text_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"pricing_list_highlighted_text_letterspacing",
	$pricing_list_highlighted_text_letterspacing
);

$new_item_section = new PitchQodeTitle(
	"new_item_section",
	esc_html__( "New Item", 'pitch' )
);
$panel27->addChild(
	"new_item_section",
	$new_item_section
);

$group3 = new PitchQodeGroup(
	esc_html__( "Icon Style", 'pitch' ),
	esc_html__( "Choose icon style for new item", 'pitch' )
);
$panel27->addChild(
	"group3",
	$group3
);

$row1 = new PitchQodeRow();
$group3->addChild(
	"row1",
	$row1
);
$pricing_list_new_background_color = new PitchQodeField(
	"colorsimple",
	"pricing_list_new_background_color",
	"",
	esc_html__( "Icon Background Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"pricing_list_new_background_color",
	$pricing_list_new_background_color
);
$pricing_list_new_icon_size = new PitchQodeField(
	"textsimple",
	"pricing_list_new_icon_size",
	"",
	esc_html__( "Icon Size", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"pricing_list_new_icon_size",
	$pricing_list_new_icon_size
);

$group4 = new PitchQodeGroup(
	esc_html__( "Text Style", 'pitch' ),
	esc_html__( "Define text style for new item", 'pitch' )
);
$panel27->addChild(
	"group4",
	$group4
);

$row1 = new PitchQodeRow();
$group4->addChild(
	"row1",
	$row1
);

$pricing_list_new_text_color = new PitchQodeField(
	"colorsimple",
	"pricing_list_new_text_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"pricing_list_new_text_color",
	$pricing_list_new_text_color
);
$pricing_list_new_text_fontsize = new PitchQodeField(
	"textsimple",
	"pricing_list_new_text_fontsize",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"pricing_list_new_text_fontsize",
	$pricing_list_new_text_fontsize
);
$pricing_list_new_text_lineheight = new PitchQodeField(
	"textsimple",
	"pricing_list_new_text_lineheight",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"pricing_list_new_text_lineheight",
	$pricing_list_new_text_lineheight
);
$pricing_list_new_text_texttransform = new PitchQodeField(
	"selectblanksimple",
	"pricing_list_new_text_texttransform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	"pricing_list_new_text_texttransform",
	$pricing_list_new_text_texttransform
);

$row2 = new PitchQodeRow( true );
$group4->addChild(
	"row2",
	$row2
);

$pricing_list_new_text_google_fonts = new PitchQodeField(
	"fontsimple",
	"pricing_list_new_text_google_fonts",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"pricing_list_new_text_google_fonts",
	$pricing_list_new_text_google_fonts
);
$pricing_list_new_text_fontstyle = new PitchQodeField(
	"selectblanksimple",
	"pricing_list_new_text_fontstyle",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"pricing_list_new_text_fontstyle",
	$pricing_list_new_text_fontstyle
);
$pricing_list_new_text_fontweight = new PitchQodeField(
	"selectblanksimple",
	"pricing_list_new_text_fontweight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"pricing_list_new_text_fontweight",
	$pricing_list_new_text_fontweight
);
$pricing_list_new_text_letterspacing = new PitchQodeField(
	"textsimple",
	"pricing_list_new_text_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"pricing_list_new_text_letterspacing",
	$pricing_list_new_text_letterspacing
);

//Service table

$panel22 = new PitchQodePanel(
	esc_html__( "Service Table", 'pitch' ),
	"service_table_panel"
);
$elementsPage->addChild(
	"panel22",
	$panel22
);

$group1 = new PitchQodeGroup(
	esc_html__( "Service Tables Style", 'pitch' ),
	esc_html__( "Define Service tables style", 'pitch' )
);
$panel22->addChild(
	"group1",
	$group1
);

$row1 = new PitchQodeRow();
$group1->addChild(
	"row1",
	$row1
);

$service_table_title_background_color = new PitchQodeField(
	"colorsimple",
	"service_table_title_background_color",
	"",
	esc_html__( "Title Background Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"service_table_title_background_color",
	$service_table_title_background_color
);

$service_table_title_separator_color = new PitchQodeField(
	"colorsimple",
	"service_table_title_separator_color",
	"",
	esc_html__( "Title Separator Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"service_table_title_separator_color",
	$service_table_title_separator_color
);

$service_table_title_separator_thickness = new PitchQodeField(
	"textsimple",
	"service_table_title_separator_thickness",
	"",
	esc_html__( "Title Separator Thickness (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"service_table_title_separator_thickness",
	$service_table_title_separator_thickness
);

$row2 = new PitchQodeRow();
$group1->addChild(
	"row2",
	$row2
);

$service_table_title_padding_top = new PitchQodeField(
	"textsimple",
	"service_table_title_padding_top",
	"",
	esc_html__( "Title Padding Top (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"service_table_title_padding_top",
	$service_table_title_padding_top
);

$service_table_title_padding_bottom = new PitchQodeField(
	"textsimple",
	"service_table_title_padding_bottom",
	"",
	esc_html__( "Title Padding Bottom (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"service_table_title_padding_bottom",
	$service_table_title_padding_bottom
);

$row3 = new PitchQodeRow( true );
$group1->addChild(
	"row3",
	$row3
);

$service_table_background_color = new PitchQodeField(
	"colorsimple",
	"service_table_background_color",
	"",
	esc_html__( "Content Background Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row3->addChild(
	"service_table_background_color",
	$service_table_background_color
);

$service_table_separator_color = new PitchQodeField(
	"colorsimple",
	"service_table_separator_color",
	"",
	esc_html__( "Content Separator Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row3->addChild(
	"service_table_separator_color",
	$service_table_separator_color
);

$service_table_separator_thickness = new PitchQodeField(
	"textsimple",
	"service_table_separator_thickness",
	"",
	esc_html__( "Content Separator Thickness (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row3->addChild(
	"service_table_separator_thickness",
	$service_table_separator_thickness
);

$row4 = new PitchQodeRow();
$group1->addChild(
	"row4",
	$row4
);

$service_table_content_padding_top = new PitchQodeField(
	"textsimple",
	"service_table_content_padding_top",
	"",
	esc_html__( "Content Padding Top (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row4->addChild(
	"service_table_content_padding_top",
	$service_table_content_padding_top
);

$service_table_content_padding_bottom = new PitchQodeField(
	"textsimple",
	"service_table_content_padding_bottom",
	"",
	esc_html__( "Content Padding Bottom (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row4->addChild(
	"service_table_content_padding_bottom",
	$service_table_content_padding_bottom
);

$group2 = new PitchQodeGroup(
	esc_html__( "Service Tables Active Text", 'pitch' ),
	esc_html__( "DefineService tables active text style.", 'pitch' )
);
$panel22->addChild(
	"group2",
	$group2
);

$row1 = new PitchQodeRow();
$group2->addChild(
	"row1",
	$row1
);

$service_tables_active_text_color = new PitchQodeField(
	"colorsimple",
	"service_tables_active_text_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"service_tables_active_text_color",
	$service_tables_active_text_color
);

$service_tables_active_text_font_size = new PitchQodeField(
	"textsimple",
	"service_tables_active_text_font_size",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"service_tables_active_text_font_size",
	$service_tables_active_text_font_size
);

$service_tables_active_text_line_height = new PitchQodeField(
	"textsimple",
	"service_tables_active_text_line_height",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"service_tables_active_text_line_height",
	$service_tables_active_text_line_height
);

$service_tables_active_text_text_transform = new PitchQodeField(
	"selectblanksimple",
	"service_tables_active_text_text_transform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	"service_tables_active_text_text_transform",
	$service_tables_active_text_text_transform
);

$row2 = new PitchQodeRow( true );
$group2->addChild(
	"row2",
	$row2
);

$service_tables_active_text_font_family = new PitchQodeField(
	"fontsimple",
	"service_tables_active_text_font_family",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"service_tables_active_text_font_family",
	$service_tables_active_text_font_family
);

$service_tables_active_text_font_style = new PitchQodeField(
	"selectblanksimple",
	"service_tables_active_text_font_style",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"service_tables_active_text_font_style",
	$service_tables_active_text_font_style
);

$service_tables_active_text_font_weight = new PitchQodeField(
	"selectblanksimple",
	"service_tables_active_text_font_weight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"service_tables_active_text_font_weight",
	$service_tables_active_text_font_weight
);

$service_tables_active_text_letter_spacing = new PitchQodeField(
	"textsimple",
	"service_tables_active_text_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"service_tables_active_text_letter_spacing",
	$service_tables_active_text_letter_spacing
);

$group3 = new PitchQodeGroup(
	esc_html__( "Service Tables Title", 'pitch' ),
	esc_html__( "Define Service tables title style", 'pitch' )
);
$panel22->addChild(
	"group3",
	$group3
);

$row1 = new PitchQodeRow();
$group3->addChild(
	"row1",
	$row1
);

$service_tables_title_color = new PitchQodeField(
	"colorsimple",
	"service_tables_title_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"service_tables_title_color",
	$service_tables_title_color
);

$service_tables_title_font_size = new PitchQodeField(
	"textsimple",
	"service_tables_title_font_size",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"service_tables_title_font_size",
	$service_tables_title_font_size
);

$service_tables_title_line_height = new PitchQodeField(
	"textsimple",
	"service_tables_title_line_height",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"service_tables_title_line_height",
	$service_tables_title_line_height
);

$service_tables_title_text_transform = new PitchQodeField(
	"selectblanksimple",
	"service_tables_title_text_transform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	"service_tables_title_text_transform",
	$service_tables_title_text_transform
);

$row2 = new PitchQodeRow( true );
$group3->addChild(
	"row2",
	$row2
);

$service_tables_title_font_family = new PitchQodeField(
	"fontsimple",
	"service_tables_title_font_family",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"service_tables_title_font_family",
	$service_tables_title_font_family
);

$service_tables_title_font_style = new PitchQodeField(
	"selectblanksimple",
	"service_tables_title_font_style",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"service_tables_title_font_style",
	$service_tables_title_font_style
);

$service_tables_title_font_weight = new PitchQodeField(
	"selectblanksimple",
	"service_tables_title_font_weight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"service_tables_title_font_weight",
	$service_tables_title_font_weight
);

$service_tables_title_letter_spacing = new PitchQodeField(
	"textsimple",
	"service_tables_title_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"service_tables_title_letter_spacing",
	$service_tables_title_letter_spacing
);

$group4 = new PitchQodeGroup(
	esc_html__( "Service Tables Content", 'pitch' ),
	esc_html__( "Define Service tables content style", 'pitch' )
);
$panel22->addChild(
	"group4",
	$group4
);

$row1 = new PitchQodeRow();
$group4->addChild(
	"row1",
	$row1
);

$service_tables_content_color = new PitchQodeField(
	"colorsimple",
	"service_tables_content_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"service_tables_content_color",
	$service_tables_content_color
);

$service_tables_content_font_size = new PitchQodeField(
	"textsimple",
	"service_tables_content_font_size",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"service_tables_content_font_size",
	$service_tables_content_font_size
);

$service_tables_content_line_height = new PitchQodeField(
	"textsimple",
	"service_tables_content_line_height",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"service_tables_content_line_height",
	$service_tables_content_line_height
);

$service_tables_content_text_transform = new PitchQodeField(
	"selectblanksimple",
	"service_tables_content_text_transform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	"service_tables_content_text_transform",
	$service_tables_content_text_transform
);

$row2 = new PitchQodeRow( true );
$group4->addChild(
	"row2",
	$row2
);

$service_tables_content_font_family = new PitchQodeField(
	"fontsimple",
	"service_tables_content_font_family",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"service_tables_content_font_family",
	$service_tables_content_font_family
);

$service_tables_content_font_style = new PitchQodeField(
	"selectblanksimple",
	"service_tables_content_font_style",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"service_tables_content_font_style",
	$service_tables_content_font_style
);

$service_tables_content_font_weight = new PitchQodeField(
	"selectblanksimple",
	"service_tables_content_font_weight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"service_tables_content_font_weight",
	$service_tables_content_font_weight
);

$service_tables_content_letter_spacing = new PitchQodeField(
	"textsimple",
	"service_tables_content_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"service_tables_content_letter_spacing",
	$service_tables_content_letter_spacing
);

//Separators

$panel13 = new PitchQodePanel(
	esc_html__( "Separators", 'pitch' ),
	"separators_panel"
);
$elementsPage->addChild(
	"panel13",
	$panel13
);

$group1 = new PitchQodeGroup(
	esc_html__( "Normal", 'pitch' ),
	esc_html__( 'Define styles for separator of type "Normal"', 'pitch' )
);
$panel13->addChild(
	"group1",
	$group1
);
$row1 = new PitchQodeRow();
$group1->addChild(
	"row1",
	$row1
);

$separator_color = new PitchQodeField(
	"colorsimple",
	"separator_color",
	"",
	esc_html__( "Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"separator_color",
	$separator_color
);

$separator_thickness = new PitchQodeField(
	"textsimple",
	"separator_thickness",
	"",
	esc_html__( "Thickness (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"separator_thickness",
	$separator_thickness
);

$row2 = new PitchQodeRow( true );
$group1->addChild(
	"row2",
	$row2
);

$separator_topmargin = new PitchQodeField(
	"textsimple",
	"separator_topmargin",
	"",
	esc_html__( "Top Margin (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"separator_topmargin",
	$separator_topmargin
);

$separator_bottommargin = new PitchQodeField(
	"textsimple",
	"separator_bottommargin",
	"",
	esc_html__( "Bottom Margin (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"separator_bottommargin",
	$separator_bottommargin
);

$separator_type = new PitchQodeField(
	"selectblanksimple",
	"separator_type",
	"",
	esc_html__( "Separator type", 'pitch' ),
	"",
	array(
		"solid" => esc_html__( "Solid", 'pitch' ),
		"dashed" => esc_html__( "Dashed", 'pitch' ),
		"dotted" => esc_html__( "Dotted", 'pitch' )
	)
);
$row2->addChild(
	"separator_type",
	$separator_type
);

$group2 = new PitchQodeGroup(
	esc_html__( "Small", 'pitch' ),
	esc_html__( 'Define styles for separator of type "Small"', 'pitch' )
);
$panel13->addChild(
	"group2",
	$group2
);
$row1 = new PitchQodeRow();
$group2->addChild(
	"row1",
	$row1
);

$separator_small_color = new PitchQodeField(
	"colorsimple",
	"separator_small_color",
	"",
	esc_html__( "Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"separator_small_color",
	$separator_small_color
);

$separator_small_thickness = new PitchQodeField(
	"textsimple",
	"separator_small_thickness",
	"",
	esc_html__( "Thickness (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"separator_small_thickness",
	$separator_small_thickness
);

$separator_small_width = new PitchQodeField(
	"textsimple",
	"separator_small_width",
	"",
	esc_html__( "Width (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"separator_small_width",
	$separator_small_width
);

$row2 = new PitchQodeRow( true );
$group2->addChild(
	"row2",
	$row2
);

$separator_small_topmargin = new PitchQodeField(
	"textsimple",
	"separator_small_topmargin",
	"",
	esc_html__( "Top Margin (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"separator_small_topmargin",
	$separator_small_topmargin
);

$separator_small_bottommargin = new PitchQodeField(
	"textsimple",
	"separator_small_bottommargin",
	"",
	esc_html__( "Bottom Margin (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"separator_small_bottommargin",
	$separator_small_bottommargin
);

$separator_small_type = new PitchQodeField(
	"selectsimple",
	"separator_small_type",
	"",
	esc_html__( "Separator type", 'pitch' ),
	"",
	array(
		""       => "",
		"solid" => esc_html__( "Solid", 'pitch' ),
		"dashed" => esc_html__( "Dashed", 'pitch' ),
		"dotted" => esc_html__( "Dotted", 'pitch' )
	)
);
$row2->addChild(
	"separator_small_type",
	$separator_small_type
);

//Separators with text

$panel23 = new PitchQodePanel(
	esc_html__( "Separators with Text", 'pitch' ),
	"separators_with_text_panel"
);
$elementsPage->addChild(
	"panel23",
	$panel23
);

$group1 = new PitchQodeGroup(
	esc_html__( "Text Style", 'pitch' ),
	esc_html__( 'Define text styles for separator with text', 'pitch' )
);
$panel23->addChild(
	"group1",
	$group1
);
$row1 = new PitchQodeRow();
$group1->addChild(
	"row1",
	$row1
);

$separators_with_text_text_color = new PitchQodeField(
	"colorsimple",
	"separators_with_text_text_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"separators_with_text_text_color",
	$separators_with_text_text_color
);

$separators_with_text_text_hover_color = new PitchQodeField(
	"colorsimple",
	"separators_with_text_text_hover_color",
	"",
	esc_html__( "Text Hover Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"separators_with_text_text_hover_color",
	$separators_with_text_text_hover_color
);

$separators_with_text_text_fontsize = new PitchQodeField(
	"textsimple",
	"separators_with_text_text_fontsize",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"separators_with_text_text_fontsize",
	$separators_with_text_text_fontsize
);

$separators_with_text_text_lineheight = new PitchQodeField(
	"textsimple",
	"separators_with_text_text_lineheight",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"separators_with_text_text_lineheight",
	$separators_with_text_text_lineheight
);

$row2 = new PitchQodeRow( true );
$group1->addChild(
	"row2",
	$row2
);

$separators_with_text_text_texttransform = new PitchQodeField(
	"selectblanksimple",
	"separators_with_text_text_texttransform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row2->addChild(
	"separators_with_text_text_texttransform",
	$separators_with_text_text_texttransform
);

$separators_with_text_text_google_fonts = new PitchQodeField(
	"fontsimple",
	"separators_with_text_text_google_fonts",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"separators_with_text_text_google_fonts",
	$separators_with_text_text_google_fonts
);

$separators_with_text_text_fontstyle = new PitchQodeField(
	"selectblanksimple",
	"separators_with_text_text_fontstyle",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"separators_with_text_text_fontstyle",
	$separators_with_text_text_fontstyle
);

$separators_with_text_text_fontweight = new PitchQodeField(
	"selectblanksimple",
	"separators_with_text_text_fontweight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"separators_with_text_text_fontweight",
	$separators_with_text_text_fontweight
);

$row3 = new PitchQodeRow( true );
$group1->addChild(
	"row3",
	$row3
);

$separators_with_text_text_letterspacing = new PitchQodeField(
	"textsimple",
	"separators_with_text_text_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row3->addChild(
	"separators_with_text_text_letterspacing",
	$separators_with_text_text_letterspacing
);

$panel24 = new PitchQodePanel(
	esc_html__( "Single Image", 'pitch' ),
	"single_image_panel"
);
$elementsPage->addChild(
	"panel24",
	$panel24
);

$group1 = new PitchQodeGroup(
	esc_html__( "Hover Style", 'pitch' ),
	esc_html__( "Define hover style", 'pitch' )
);
$panel24->addChild(
	"group1",
	$group1
);
$row1 = new PitchQodeRow();
$group1->addChild(
	"row1",
	$row1
);

$single_image_hover_color = new PitchQodeField(
	"colorsimple",
	"single_image_hover_color",
	"",
	esc_html__( "Background Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"single_image_hover_color",
	$single_image_hover_color
);

$single_image_hover_transparency = new PitchQodeField(
	"textsimple",
	"single_image_hover_transparency",
	"",
	esc_html__( "Transparency (0=full - 1=opaque)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"single_image_hover_transparency",
	$single_image_hover_transparency
);

//Slider Navigation Interface

$panel9 = new PitchQodePanel(
	esc_html__( "Slider Navigation Interface", 'pitch' ),
	"navigation_panel"
);
$elementsPage->addChild(
	"panel9",
	$panel9
);

$navigation_slider_horizontal_section = new PitchQodeTitle(
	"navigation_slider_horizontal_section",
	esc_html__( "Qode Slider", 'pitch' )
);
$panel9->addChild(
	"navigation_slider_horizontal_section",
	$navigation_slider_horizontal_section
);

$group1 = new PitchQodeGroup(
	esc_html__( "Navigation Button Size", 'pitch' ),
	esc_html__( "Define navigation button size", 'pitch' )
);
$panel9->addChild(
	"group1",
	$group1
);

$row1 = new PitchQodeRow();
$group1->addChild(
	"row1",
	$row1
);

$navigation_button_width = new PitchQodeField(
	"textsimple",
	"navigation_button_width",
	"",
	esc_html__( "Width (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"navigation_button_width",
	$navigation_button_width
);

$navigation_button_height = new PitchQodeField(
	"textsimple",
	"navigation_button_height",
	"",
	esc_html__( "Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"navigation_button_height",
	$navigation_button_height
);

$group9 = new PitchQodeGroup(
	esc_html__( "Navigation Button Position", 'pitch' ),
	esc_html__( "Enter the amount of pixels you would like to move the navigation buttons towards the edges of the slider", 'pitch' )
);
$panel9->addChild(
	"group9",
	$group9
);

$row1 = new PitchQodeRow();
$group9->addChild(
	"row1",
	$row1
);

$navigation_button_position = new PitchQodeField(
	"textsimple",
	"navigation_button_position",
	"",
	esc_html__( "Position (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"navigation_button_position",
	$navigation_button_position
);

$group2 = new PitchQodeGroup(
	esc_html__( "Icon Arrow Style", 'pitch' ),
	esc_html__( "Define arrow navigation style", 'pitch' )
);
$panel9->addChild(
	"group2",
	$group2
);
$row1 = new PitchQodeRow();
$group2->addChild(
	"row1",
	$row1
);

$navigation_arrow_size = new PitchQodeField(
	"textsimple",
	"navigation_arrow_size",
	"",
	esc_html__( "Arrow Size (px)", 'pitch' ),
	esc_html__( "Default value is 14    ", 'pitch' )
);
$row1->addChild(
	"navigation_arrow_size",
	$navigation_arrow_size
);

$navigation_arrows_type = new PitchQodeField(
	"selectblanksimple",
	"navigation_arrows_type",
	"",
	esc_html__( "Arrow Icon", 'pitch' ),
	"",
	pitch_qode_get_options_value_by_name( 'arrows_type' )
);
$row1->addChild(
	"navigation_arrows_type",
	$navigation_arrows_type
);

$navigation_arrow_color = new PitchQodeField(
	"colorsimple",
	"navigation_arrow_color",
	"",
	esc_html__( "Arrow Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"navigation_arrow_color",
	$navigation_arrow_color
);

$navigation_arrow_transparency = new PitchQodeField(
	"textsimple",
	"navigation_arrow_transparency",
	"",
	esc_html__( "Arrow Transparency (0-1)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"navigation_arrow_transparency",
	$navigation_arrow_transparency
);

$row2 = new PitchQodeRow( true );
$group2->addChild(
	"row2",
	$row2
);

$navigation_arrow_hover_color = new PitchQodeField(
	"colorsimple",
	"navigation_arrow_hover_color",
	"",
	esc_html__( "Arrow Hover Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"navigation_arrow_hover_color",
	$navigation_arrow_hover_color
);

$navigation_arrow_hover_transparency = new PitchQodeField(
	"textsimple",
	"navigation_arrow_hover_transparency",
	"",
	esc_html__( "Arrow Hover Transparency (0-1)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"navigation_arrow_hover_transparency",
	$navigation_arrow_hover_transparency
);

$navigation_number_group = new PitchQodeGroup(
	esc_html__( 'Navigation Numbers Style', 'pitch' ),
	esc_html__( 'Define navigation numbers style', 'pitch' )
);
$panel9->addChild(
	'navigation_number_group',
	$navigation_number_group
);

$row1 = new PitchQodeRow();
$navigation_number_group->addChild(
	'row1',
	$row1
);

$navigation_number_font_size = new PitchQodeField(
	'textsimple',
	'navigation_number_font_size',
	'',
	esc_html__( 'Font Size (px)', 'pitch' ),
	''
);
$row1->addChild(
	'navigation_number_font_size',
	$navigation_number_font_size
);

$navigation_number_letter_spacing = new PitchQodeField(
	'textsimple',
	'navigation_number_letter_spacing',
	'',
	esc_html__( 'Letter Spacing (px)', 'pitch' ),
	''
);
$row1->addChild(
	'navigation_number_letter_spacing',
	$navigation_number_letter_spacing
);

$navigation_number_line_height = new PitchQodeField(
	'textsimple',
	'navigation_number_line_height',
	'',
	esc_html__( 'Line Height', 'pitch' ),
	''
);
$row1->addChild(
	'navigation_number_line_height',
	$navigation_number_line_height
);

$navigation_number_font_font_family = new PitchQodeField(
	'fontsimple',
	'navigation_number_font_font_family',
	'-1',
	esc_html__( 'Font Family', 'pitch' ),
	''
);
$row1->addChild(
	'navigation_number_font_font_family',
	$navigation_number_font_font_family
);

$row2 = new PitchQodeRow( true );
$navigation_number_group->addChild(
	'row2',
	$row2
);

$navigation_number_font_style = new PitchQodeField(
	'selectsimple',
	'navigation_number_font_style',
	'',
	esc_html__( 'Font Style', 'pitch' ),
	'',
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	'navigation_number_font_style',
	$navigation_number_font_style
);

$navigation_number_font_weight = new PitchQodeField(
	'selectsimple',
	'navigation_number_font_weight',
	'',
	esc_html__( 'Font Weight', 'pitch' ),
	'',
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	'navigation_number_font_weight',
	$navigation_number_font_weight
);

$row3 = new PitchQodeRow( true );
$navigation_number_group->addChild(
	'row3',
	$row3
);

$navigation_number_color = new PitchQodeField(
	'colorsimple',
	'navigation_number_color',
	'',
	esc_html__( 'Color', 'pitch' ),
	''
);
$row3->addChild(
	'navigation_number_color',
	$navigation_number_color
);

$navigation_number_hover_color = new PitchQodeField(
	'colorsimple',
	'navigation_number_hover_color',
	'',
	esc_html__( 'Hover Color', 'pitch' ),
	''
);
$row3->addChild(
	'navigation_number_hover_color',
	$navigation_number_hover_color
);

$navigation_number_transparency = new PitchQodeField(
	'textsimple',
	'navigation_number_transparency',
	'',
	esc_html__( 'Transparency (0=full - 1=opaque)', 'pitch' ),
	''
);
$row3->addChild(
	'navigation_number_transparency',
	$navigation_number_transparency
);

$navigation_number_hover_transparency = new PitchQodeField(
	'textsimple',
	'navigation_number_hover_transparency',
	'',
	esc_html__( 'Hover Transparency (0=full - 1=opaque)', 'pitch' ),
	''
);
$row3->addChild(
	'navigation_number_hover_transparency',
	$navigation_number_hover_transparency
);

$group3 = new PitchQodeGroup(
	esc_html__( "Navigation Button Background", 'pitch' ),
	esc_html__( "Define navigation button background", 'pitch' )
);
$panel9->addChild(
	"group3",
	$group3
);

$row1 = new PitchQodeRow();
$group3->addChild(
	"row1",
	$row1
);

$navigation_background_color = new PitchQodeField(
	"colorsimple",
	"navigation_background_color",
	"",
	esc_html__( "Background Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"navigation_background_color",
	$navigation_background_color
);

$navigation_background_transparency = new PitchQodeField(
	"textsimple",
	"navigation_background_transparency",
	"",
	esc_html__( "Background Transparency (0-1)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"navigation_background_transparency",
	$navigation_background_transparency
);

$navigation_background_hover_color = new PitchQodeField(
	"colorsimple",
	"navigation_background_hover_color",
	"",
	esc_html__( "Background Hover Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"navigation_background_hover_color",
	$navigation_background_hover_color
);

$navigation_background_hover_transparency = new PitchQodeField(
	"textsimple",
	"navigation_background_hover_transparency",
	"",
	esc_html__( "Background Hover Transparency (0-1)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"navigation_background_hover_transparency",
	$navigation_background_hover_transparency
);

$group4 = new PitchQodeGroup(
	esc_html__( "Navigation Button Border", 'pitch' ),
	esc_html__( "Define border style", 'pitch' )
);
$panel9->addChild(
	"group4",
	$group4
);

$row1 = new PitchQodeRow();
$group4->addChild(
	"row1",
	$row1
);

$navigation_border_width = new PitchQodeField(
	"textsimple",
	"navigation_border_width",
	"",
	esc_html__( "Border width (px)", 'pitch' ),
	""
);
$row1->addChild(
	"navigation_border_width",
	$navigation_border_width
);

$navigation_border_radius = new PitchQodeField(
	"textsimple",
	"navigation_border_radius",
	"",
	esc_html__( "Border Radius (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"navigation_border_radius",
	$navigation_border_radius
);

$navigation_border_color = new PitchQodeField(
	"colorsimple",
	"navigation_border_color",
	"",
	esc_html__( "Border Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"navigation_border_color",
	$navigation_border_color
);

$navigation_border_transparency = new PitchQodeField(
	"textsimple",
	"navigation_border_transparency",
	"",
	esc_html__( "Border Transparency (0-1)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"navigation_border_transparency",
	$navigation_border_transparency
);

$row2 = new PitchQodeRow( true );
$group4->addChild(
	"row2",
	$row2
);

$navigation_border_hover_color = new PitchQodeField(
	"colorsimple",
	"navigation_border_hover_color",
	"",
	esc_html__( "Border Hover Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"navigation_border_hover_color",
	$navigation_border_hover_color
);

$navigation_border_hover_transparency = new PitchQodeField(
	"textsimple",
	"navigation_border_hover_transparency",
	"",
	esc_html__( "Border Hover Transparency (0-1)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"navigation_border_hover_transparency",
	$navigation_border_hover_transparency
);

$navigation_show_button_shadow = new PitchQodeField(
	"yesno",
	"navigation_show_button_shadow",
	"no",
	esc_html__( "Show Button Shadow", 'pitch' ),
	esc_html__( "Enabling this options will show button shadow", 'pitch' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_navigation_button_shadow_container"
	)
);
$panel9->addChild(
	"navigation_show_button_shadow",
	$navigation_show_button_shadow
);

$navigation_button_shadow_container = new PitchQodeContainer(
	"navigation_button_shadow_container",
	"navigation_show_button_shadow",
	"no"
);
$panel9->addChild(
	"navigation_button_shadow_container",
	$navigation_button_shadow_container
);

$group9 = new PitchQodeGroup(
	esc_html__( "Button Shadow", 'pitch' ),
	esc_html__( "Set horizontal and vertical position of shadow (negative values are allowed), and define blur and spread.", 'pitch' )
);
$navigation_button_shadow_container->addChild(
	"group9",
	$group9
);

$row1 = new PitchQodeRow();
$group9->addChild(
	"row1",
	$row1
);

$navigation_button_shadow_color = new PitchQodeField(
	"colorsimple",
	"navigation_button_shadow_color",
	"",
	esc_html__( "Color", 'pitch' ),
	esc_html__( "Choose color for  box shadow", 'pitch' )
);
$row1->addChild(
	"navigation_button_shadow_color",
	$navigation_button_shadow_color
);

$row2 = new PitchQodeRow();
$group9->addChild(
	"row2",
	$row2
);

$navigation_button_h_shadow = new PitchQodeField(
	"textsimple",
	"navigation_button_h_shadow",
	"",
	esc_html__( "Horizontal shadow (px)", 'pitch' ),
	""
);
$row2->addChild(
	"navigation_button_h_shadow",
	$navigation_button_h_shadow
);

$navigation_button_v_shadow = new PitchQodeField(
	"textsimple",
	"navigation_button_v_shadow",
	"",
	esc_html__( "Vertical shadow (px)", 'pitch' ),
	""
);
$row2->addChild(
	"navigation_button_v_shadow",
	$navigation_button_v_shadow
);

$navigation_button_blur = new PitchQodeField(
	"textsimple",
	"navigation_button_blur",
	"",
	esc_html__( "Blur (px)", 'pitch' ),
	""
);
$row2->addChild(
	"navigation_button_blur",
	$navigation_button_blur
);

$navigation_button_spread = new PitchQodeField(
	"textsimple",
	"navigation_button_spread",
	"",
	esc_html__( "Spread (px)", 'pitch' ),
	""
);
$row2->addChild(
	"navigation_button_spread",
	$navigation_button_spread
);

$navigation_carousels_slider = new PitchQodeTitle(
	"navigation_carousels_slider",
	esc_html__( "Carousel Sliders", 'pitch' )
);
$panel9->addChild(
	"navigation_carousels_slider",
	$navigation_carousels_slider
);

$group16 = new PitchQodeGroup(
	esc_html__( "Navigation Button Size", 'pitch' ),
	esc_html__( "Define navigation button size", 'pitch' )
);
$panel9->addChild(
	"group16",
	$group16
);

$row1 = new PitchQodeRow();
$group16->addChild(
	"row1",
	$row1
);

$carousel_navigation_button_width = new PitchQodeField(
	"textsimple",
	"carousel_navigation_button_width",
	"",
	esc_html__( "Width (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"carousel_navigation_button_width",
	$carousel_navigation_button_width
);

$carousel_navigation_button_height = new PitchQodeField(
	"textsimple",
	"carousel_navigation_button_height",
	"",
	esc_html__( "Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"carousel_navigation_button_height",
	$carousel_navigation_button_height
);

$group17 = new PitchQodeGroup(
	esc_html__( "Navigation Button Position", 'pitch' ),
	esc_html__( "Enter the amount of pixels you would like to move the navigation buttons towards the edges of the slider", 'pitch' )
);
$panel9->addChild(
	"group17",
	$group17
);

$row1 = new PitchQodeRow();
$group17->addChild(
	"row1",
	$row1
);

$carousel_navigation_button_position = new PitchQodeField(
	"textsimple",
	"carousel_navigation_button_position",
	"",
	esc_html__( "Position (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"carousel_navigation_button_position",
	$carousel_navigation_button_position
);

$group18 = new PitchQodeGroup(
	esc_html__( "Icon Arrow Style", 'pitch' ),
	esc_html__( "Define arrow navigation style", 'pitch' )
);
$panel9->addChild(
	"group18",
	$group18
);
$row1 = new PitchQodeRow();
$group18->addChild(
	"row1",
	$row1
);

$carousel_navigation_arrow_size = new PitchQodeField(
	"textsimple",
	"carousel_navigation_arrow_size",
	"",
	esc_html__( "Arrow Size (px)", 'pitch' ),
	esc_html__( "Default value is 14    ", 'pitch' )
);
$row1->addChild(
	"carousel_navigation_arrow_size",
	$carousel_navigation_arrow_size
);

$carousel_navigation_arrows_type = new PitchQodeField(
	"selectblanksimple",
	"carousel_navigation_arrows_type",
	"",
	esc_html__( "Arrow Icon", 'pitch' ),
	"",
	pitch_qode_get_options_value_by_name( 'arrows_type' )
);
$row1->addChild(
	"carousel_navigation_arrows_type",
	$carousel_navigation_arrows_type
);

$carousel_navigation_arrow_color = new PitchQodeField(
	"colorsimple",
	"carousel_navigation_arrow_color",
	"",
	esc_html__( "Arrow Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"carousel_navigation_arrow_color",
	$carousel_navigation_arrow_color
);

$carousel_navigation_arrow_transparency = new PitchQodeField(
	"textsimple",
	"carousel_navigation_arrow_transparency",
	"",
	esc_html__( "Arrow Transparency (0-1)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"carousel_navigation_arrow_transparency",
	$carousel_navigation_arrow_transparency
);

$row2 = new PitchQodeRow( true );
$group18->addChild(
	"row2",
	$row2
);

$carousel_navigation_arrow_hover_color = new PitchQodeField(
	"colorsimple",
	"carousel_navigation_arrow_hover_color",
	"",
	esc_html__( "Arrow Hover Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"carousel_navigation_arrow_hover_color",
	$carousel_navigation_arrow_hover_color
);

$carousel_navigation_arrow_hover_transparency = new PitchQodeField(
	"textsimple",
	"carousel_navigation_arrow_hover_transparency",
	"",
	esc_html__( "Arrow Hover Transparency (0-1)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"carousel_navigation_arrow_hover_transparency",
	$carousel_navigation_arrow_hover_transparency
);

$group19 = new PitchQodeGroup(
	esc_html__( "Navigation Button Background", 'pitch' ),
	esc_html__( "Define navigation button background", 'pitch' )
);
$panel9->addChild(
	"group19",
	$group19
);

$row1 = new PitchQodeRow();
$group19->addChild(
	"row1",
	$row1
);

$carousel_navigation_background_color = new PitchQodeField(
	"colorsimple",
	"carousel_navigation_background_color",
	"",
	esc_html__( "Background Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"carousel_navigation_background_color",
	$carousel_navigation_background_color
);

$carousel_navigation_background_transparency = new PitchQodeField(
	"textsimple",
	"carousel_navigation_background_transparency",
	"",
	esc_html__( "Background Transparency (0-1)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"carousel_navigation_background_transparency",
	$carousel_navigation_background_transparency
);

$carousel_navigation_background_hover_color = new PitchQodeField(
	"colorsimple",
	"carousel_navigation_background_hover_color",
	"",
	esc_html__( "Background Hover Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"carousel_navigation_background_hover_color",
	$carousel_navigation_background_hover_color
);

$carousel_navigation_background_hover_transparency = new PitchQodeField(
	"textsimple",
	"carousel_navigation_background_hover_transparency",
	"",
	esc_html__( "Background Hover Transparency (0-1)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"carousel_navigation_background_hover_transparency",
	$carousel_navigation_background_hover_transparency
);

$group10 = new PitchQodeGroup(
	esc_html__( "Navigation Button Border", 'pitch' ),
	esc_html__( "Define border style", 'pitch' )
);
$panel9->addChild(
	"group10",
	$group10
);

$row1 = new PitchQodeRow();
$group10->addChild(
	"row1",
	$row1
);

$carousel_navigation_border_width = new PitchQodeField(
	"textsimple",
	"carousel_navigation_border_width",
	"",
	esc_html__( "Border width (px)", 'pitch' ),
	""
);
$row1->addChild(
	"carousel_navigation_border_width",
	$carousel_navigation_border_width
);

$carousel_navigation_border_radius = new PitchQodeField(
	"textsimple",
	"carousel_navigation_border_radius",
	"",
	esc_html__( "Border Radius (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"carousel_navigation_border_radius",
	$carousel_navigation_border_radius
);

$carousel_navigation_border_color = new PitchQodeField(
	"colorsimple",
	"carousel_navigation_border_color",
	"",
	esc_html__( "Border Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"carousel_navigation_border_color",
	$carousel_navigation_border_color
);

$carousel_navigation_border_transparency = new PitchQodeField(
	"textsimple",
	"carousel_navigation_border_transparency",
	"",
	esc_html__( "Border Transparency (0-1)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"carousel_navigation_border_transparency",
	$carousel_navigation_border_transparency
);

$row2 = new PitchQodeRow( true );
$group10->addChild(
	"row2",
	$row2
);

$carousel_navigation_border_hover_color = new PitchQodeField(
	"colorsimple",
	"carousel_navigation_border_hover_color",
	"",
	esc_html__( "Border Hover Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"carousel_navigation_border_hover_color",
	$carousel_navigation_border_hover_color
);

$carousel_navigation_border_hover_transparency = new PitchQodeField(
	"textsimple",
	"carousel_navigation_border_hover_transparency",
	"",
	esc_html__( "Border Hover Transparency (0-1)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"carousel_navigation_border_hover_transparency",
	$carousel_navigation_border_hover_transparency
);

$carousel_navigation_show_button_shadow = new PitchQodeField(
	"yesno",
	"carousel_navigation_show_button_shadow",
	"no",
	esc_html__( "Show Button Shadow", 'pitch' ),
	esc_html__( "Enabling this options will show button shadow", 'pitch' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_carousel_navigation_button_shadow_container"
	)
);
$panel9->addChild(
	"carousel_navigation_show_button_shadow",
	$carousel_navigation_show_button_shadow
);

$carousel_navigation_button_shadow_container = new PitchQodeContainer(
	"carousel_navigation_button_shadow_container",
	"carousel_navigation_show_button_shadow",
	"no"
);
$panel9->addChild(
	"carousel_navigation_button_shadow_container",
	$carousel_navigation_button_shadow_container
);

$group9 = new PitchQodeGroup(
	esc_html__( "Button Shadow", 'pitch' ),
	esc_html__( "Set horizontal and vertical position of shadow (negative values are allowed), and define blur and spread.", 'pitch' )
);
$carousel_navigation_button_shadow_container->addChild(
	"group9",
	$group9
);

$row1 = new PitchQodeRow();
$group9->addChild(
	"row1",
	$row1
);

$carousel_navigation_button_shadow_color = new PitchQodeField(
	"colorsimple",
	"carousel_navigation_button_shadow_color",
	"",
	esc_html__( "Color", 'pitch' ),
	esc_html__( "Choose color for  box shadow", 'pitch' )
);
$row1->addChild(
	"carousel_navigation_button_shadow_color",
	$carousel_navigation_button_shadow_color
);

$row2 = new PitchQodeRow();
$group9->addChild(
	"row2",
	$row2
);

$carousel_navigation_button_h_shadow = new PitchQodeField(
	"textsimple",
	"carousel_navigation_button_h_shadow",
	"",
	esc_html__( "Horizontal shadow (px)", 'pitch' ),
	""
);
$row2->addChild(
	"carousel_navigation_button_h_shadow",
	$carousel_navigation_button_h_shadow
);

$carousel_navigation_button_v_shadow = new PitchQodeField(
	"textsimple",
	"carousel_navigation_button_v_shadow",
	"",
	esc_html__( "Vertical shadow (px)", 'pitch' ),
	""
);
$row2->addChild(
	"carousel_navigation_button_v_shadow",
	$carousel_navigation_button_v_shadow
);

$carousel_navigation_button_blur = new PitchQodeField(
	"textsimple",
	"carousel_navigation_button_blur",
	"",
	esc_html__( "Blur (px)", 'pitch' ),
	""
);
$row2->addChild(
	"carousel_navigation_button_blur",
	$carousel_navigation_button_blur
);

$carousel_navigation_button_spread = new PitchQodeField(
	"textsimple",
	"carousel_navigation_button_spread",
	"",
	esc_html__( "Spread (px)", 'pitch' ),
	""
);
$row2->addChild(
	"carousel_navigation_button_spread",
	$carousel_navigation_button_spread
);

$navigation_single_sliders_slider = new PitchQodeTitle(
	"navigation_single_sliders_slider",
	esc_html__( "Flex Sliders", 'pitch' )
);
$panel9->addChild(
	"navigation_single_sliders_slider",
	$navigation_single_sliders_slider
);

$group11 = new PitchQodeGroup(
	esc_html__( "Navigation Button Size", 'pitch' ),
	esc_html__( "Define navigation button size", 'pitch' )
);
$panel9->addChild(
	"group11",
	$group11
);
$row1 = new PitchQodeRow();
$group11->addChild(
	"row1",
	$row1
);

$single_slider_navigation_button_width = new PitchQodeField(
	"textsimple",
	"single_slider_navigation_button_width",
	"",
	esc_html__( "Width (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"single_slider_navigation_button_width",
	$single_slider_navigation_button_width
);

$single_slider_navigation_button_height = new PitchQodeField(
	"textsimple",
	"single_slider_navigation_button_height",
	"",
	esc_html__( "Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"single_slider_navigation_button_height",
	$single_slider_navigation_button_height
);

$group12 = new PitchQodeGroup(
	esc_html__( "Navigation Button Position", 'pitch' ),
	esc_html__( "Enter the amount of pixels you would like to move the navigation buttons towards the edges of the slider", 'pitch' )
);
$panel9->addChild(
	"group12",
	$group12
);

$row1 = new PitchQodeRow();
$group12->addChild(
	"row1",
	$row1
);

$single_slider_navigation_button_position = new PitchQodeField(
	"textsimple",
	"single_slider_navigation_button_position",
	"",
	esc_html__( "Position (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"single_slider_navigation_button_position",
	$single_slider_navigation_button_position
);

$group13 = new PitchQodeGroup(
	esc_html__( "Icon Arrow Style", 'pitch' ),
	esc_html__( "Define arrow navigation style", 'pitch' )
);
$panel9->addChild(
	"group13",
	$group13
);
$row1 = new PitchQodeRow();
$group13->addChild(
	"row1",
	$row1
);

$single_slider_navigation_arrow_size = new PitchQodeField(
	"textsimple",
	"single_slider_navigation_arrow_size",
	"",
	esc_html__( "Arrow Size (px)", 'pitch' ),
	esc_html__( "Default value is 14    ", 'pitch' )
);
$row1->addChild(
	"single_slider_navigation_arrow_size",
	$single_slider_navigation_arrow_size
);

$single_slider_navigation_arrows_type = new PitchQodeField(
	"selectblanksimple",
	"single_slider_navigation_arrows_type",
	"",
	esc_html__( "Arrow Icon", 'pitch' ),
	"",
	pitch_qode_get_options_value_by_name( 'arrows_type' )
);
$row1->addChild(
	"single_slider_navigation_arrows_type",
	$single_slider_navigation_arrows_type
);

$single_slider_navigation_arrow_color = new PitchQodeField(
	"colorsimple",
	"single_slider_navigation_arrow_color",
	"",
	esc_html__( "Arrow Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"single_slider_navigation_arrow_color",
	$single_slider_navigation_arrow_color
);

$single_slider_navigation_arrow_transparency = new PitchQodeField(
	"textsimple",
	"single_slider_navigation_arrow_transparency",
	"",
	esc_html__( "Arrow Transparency (0-1)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"single_slider_navigation_arrow_transparency",
	$single_slider_navigation_arrow_transparency
);

$row2 = new PitchQodeRow( true );
$group13->addChild(
	"row2",
	$row2
);

$single_slider_navigation_arrow_hover_color = new PitchQodeField(
	"colorsimple",
	"single_slider_navigation_arrow_hover_color",
	"",
	esc_html__( "Arrow Hover Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"single_slider_navigation_arrow_hover_color",
	$single_slider_navigation_arrow_hover_color
);

$single_slider_navigation_arrow_hover_transparency = new PitchQodeField(
	"textsimple",
	"single_slider_navigation_arrow_hover_transparency",
	"",
	esc_html__( "Arrow Hover Transparency (0-1)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"single_slider_navigation_arrow_hover_transparency",
	$single_slider_navigation_arrow_hover_transparency
);

$group14 = new PitchQodeGroup(
	esc_html__( "Navigation Button Background", 'pitch' ),
	esc_html__( "Define navigation button background", 'pitch' )
);
$panel9->addChild(
	"group14",
	$group14
);

$row1 = new PitchQodeRow();
$group14->addChild(
	"row1",
	$row1
);

$single_slider_navigation_background_color = new PitchQodeField(
	"colorsimple",
	"single_slider_navigation_background_color",
	"",
	esc_html__( "Background Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"single_slider_navigation_background_color",
	$single_slider_navigation_background_color
);

$single_slider_navigation_background_transparency = new PitchQodeField(
	"textsimple",
	"single_slider_navigation_background_transparency",
	"",
	esc_html__( "Background Transparency (0-1)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"single_slider_navigation_background_transparency",
	$single_slider_navigation_background_transparency
);

$single_slider_navigation_background_hover_color = new PitchQodeField(
	"colorsimple",
	"single_slider_navigation_background_hover_color",
	"",
	esc_html__( "Background Hover Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"single_slider_navigation_background_hover_color",
	$single_slider_navigation_background_hover_color
);

$single_slider_navigation_background_hover_transparency = new PitchQodeField(
	"textsimple",
	"single_slider_navigation_background_hover_transparency",
	"",
	esc_html__( "Background Hover Transparency (0-1)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"single_slider_navigation_background_hover_transparency",
	$single_slider_navigation_background_hover_transparency
);

$group15 = new PitchQodeGroup(
	esc_html__( "Navigation Button Border", 'pitch' ),
	esc_html__( "Define border style", 'pitch' )
);
$panel9->addChild(
	"group15",
	$group15
);

$row1 = new PitchQodeRow();
$group15->addChild(
	"row1",
	$row1
);

$single_slider_navigation_border_width = new PitchQodeField(
	"textsimple",
	"single_slider_navigation_border_width",
	"",
	esc_html__( "Border width (px)", 'pitch' ),
	""
);
$row1->addChild(
	"single_slider_navigation_border_width",
	$single_slider_navigation_border_width
);

$single_slider_navigation_border_radius = new PitchQodeField(
	"textsimple",
	"single_slider_navigation_border_radius",
	"",
	esc_html__( "Border Radius (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"single_slider_navigation_border_radius",
	$single_slider_navigation_border_radius
);

$single_slider_navigation_border_color = new PitchQodeField(
	"colorsimple",
	"single_slider_navigation_border_color",
	"",
	esc_html__( "Border Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"single_slider_navigation_border_color",
	$single_slider_navigation_border_color
);

$single_slider_navigation_border_transparency = new PitchQodeField(
	"textsimple",
	"single_slider_navigation_border_transparency",
	"",
	esc_html__( "Border Transparency (0-1)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"single_slider_navigation_border_transparency",
	$single_slider_navigation_border_transparency
);

$row2 = new PitchQodeRow( true );
$group15->addChild(
	"row2",
	$row2
);

$single_slider_navigation_border_hover_color = new PitchQodeField(
	"colorsimple",
	"single_slider_navigation_border_hover_color",
	"",
	esc_html__( "Border Hover Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"single_slider_navigation_border_hover_color",
	$single_slider_navigation_border_hover_color
);

$single_slider_navigation_border_hover_transparency = new PitchQodeField(
	"textsimple",
	"single_slider_navigation_border_hover_transparency",
	"",
	esc_html__( "Border Hover Transparency (0-1)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"single_slider_navigation_border_hover_transparency",
	$single_slider_navigation_border_hover_transparency
);

$single_slider_navigation_show_button_shadow = new PitchQodeField(
	"yesno",
	"single_slider_navigation_show_button_shadow",
	"no",
	esc_html__( "Show Button Shadow", 'pitch' ),
	esc_html__( "Enabling this options will show button shadow", 'pitch' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_single_slider_navigation_button_shadow_container"
	)
);
$panel9->addChild(
	"single_slider_navigation_show_button_shadow",
	$single_slider_navigation_show_button_shadow
);

$single_slider_navigation_button_shadow_container = new PitchQodeContainer(
	"single_slider_navigation_button_shadow_container",
	"single_slider_navigation_show_button_shadow",
	"no"
);
$panel9->addChild(
	"single_slider_navigation_button_shadow_container",
	$single_slider_navigation_button_shadow_container
);

$group9 = new PitchQodeGroup(
	esc_html__( "Button Shadow", 'pitch' ),
	esc_html__( "Set horizontal and vertical position of shadow (negative values are allowed), and define blur and spread.", 'pitch' )
);
$single_slider_navigation_button_shadow_container->addChild(
	"group9",
	$group9
);

$row1 = new PitchQodeRow();
$group9->addChild(
	"row1",
	$row1
);

$single_slider_navigation_button_shadow_color = new PitchQodeField(
	"colorsimple",
	"single_slider_navigation_button_shadow_color",
	"",
	esc_html__( "Color", 'pitch' ),
	esc_html__( "Choose color for  box shadow", 'pitch' )
);
$row1->addChild(
	"single_slider_navigation_button_shadow_color",
	$single_slider_navigation_button_shadow_color
);

$row2 = new PitchQodeRow();
$group9->addChild(
	"row2",
	$row2
);

$single_slider_navigation_button_h_shadow = new PitchQodeField(
	"textsimple",
	"single_slider_navigation_button_h_shadow",
	"",
	esc_html__( "Horizontal shadow (px)", 'pitch' ),
	""
);
$row2->addChild(
	"single_slider_navigation_button_h_shadow",
	$single_slider_navigation_button_h_shadow
);

$single_slider_navigation_button_v_shadow = new PitchQodeField(
	"textsimple",
	"single_slider_navigation_button_v_shadow",
	"",
	esc_html__( "Vertical shadow (px)", 'pitch' ),
	""
);
$row2->addChild(
	"single_slider_navigation_button_v_shadow",
	$single_slider_navigation_button_v_shadow
);

$single_slider_navigation_button_blur = new PitchQodeField(
	"textsimple",
	"single_slider_navigation_button_blur",
	"",
	esc_html__( "Blur (px)", 'pitch' ),
	""
);
$row2->addChild(
	"single_slider_navigation_button_blur",
	$single_slider_navigation_button_blur
);

$single_slider_navigation_button_spread = new PitchQodeField(
	"textsimple",
	"single_slider_navigation_button_spread",
	"",
	esc_html__( "Spread (px)", 'pitch' ),
	""
);
$row2->addChild(
	"single_slider_navigation_button_spread",
	$single_slider_navigation_button_spread
);

$text_slider_navigation = new PitchQodeTitle(
	"text_slider_navigation",
	esc_html__( "Numbered Navigation", 'pitch' )
);
$panel9->addChild(
	"text_slider_navigation",
	$text_slider_navigation
);

$group88 = new PitchQodeGroup(
	esc_html__( "Numbered Navigation Controls", 'pitch' ),
	esc_html__( "Define numbered navigation style", 'pitch' )
);
$panel9->addChild(
	"group88",
	$group88
);

$row1 = new PitchQodeRow();
$group88->addChild(
	"row1",
	$row1
);

$numbered_navigation_size = new PitchQodeField(
	"textsimple",
	"numbered_navigation_size",
	"",
	esc_html__( "Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"numbered_navigation_size",
	$numbered_navigation_size
);

$numbered_navigation_border_radius = new PitchQodeField(
	"textsimple",
	"numbered_navigation_border_radius",
	"",
	esc_html__( "Border Radius (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"numbered_navigation_border_radius",
	$numbered_navigation_border_radius
);

$numbered_navigation_border_width = new PitchQodeField(
	"textsimple",
	"numbered_navigation_border_width",
	"",
	esc_html__( "Border Width (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"numbered_navigation_border_width",
	$numbered_navigation_border_width
);

$row5 = new PitchQodeRow();
$group88->addChild(
	"row5",
	$row5
);

$numbered_navigation_space_between_numbers = new PitchQodeField(
	"textsimple",
	"numbered_navigation_space_between_numbers",
	"",
	esc_html__( "Space Between Numbers (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row5->addChild(
	"numbered_navigation_space_between_numbers",
	$numbered_navigation_space_between_numbers
);

$numbered_navigation_font_size = new PitchQodeField(
	"textsimple",
	"numbered_navigation_font_size",
	"",
	esc_html__( "Font size (px) ", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row5->addChild(
	"numbered_navigation_font_size",
	$numbered_navigation_font_size
);

$numbered_navigation_font_family = new PitchQodeField(
	"fontsimple",
	"numbered_navigation_font_family",
	"-1",
	esc_html__( "Font family ", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row5->addChild(
	"numbered_navigation_font_family",
	$numbered_navigation_font_family
);

$row2 = new PitchQodeRow();
$group88->addChild(
	"row2",
	$row2
);

$numbered_navigation_background_color = new PitchQodeField(
	"colorsimple",
	"numbered_navigation_background_color",
	"",
	esc_html__( "Background Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"numbered_navigation_background_color",
	$numbered_navigation_background_color
);

$numbered_navigation_border_color = new PitchQodeField(
	"colorsimple",
	"numbered_navigation_border_color",
	"",
	esc_html__( "Border Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"numbered_navigation_border_color",
	$numbered_navigation_border_color
);

$numbered_navigation_number_color = new PitchQodeField(
	"colorsimple",
	"numbered_navigation_number_color",
	"",
	esc_html__( "Numbers Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"numbered_navigation_number_color",
	$numbered_navigation_number_color
);

$row3 = new PitchQodeRow();
$group88->addChild(
	"row3",
	$row3
);

$numbered_navigation_active_background_color = new PitchQodeField(
	"colorsimple",
	"numbered_navigation_active_background_color",
	"",
	esc_html__( "Active Background Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row3->addChild(
	"numbered_navigation_active_background_color",
	$numbered_navigation_active_background_color
);

$numbered_navigation_active_border_color = new PitchQodeField(
	"colorsimple",
	"numbered_navigation_active_border_color",
	"",
	esc_html__( "Active Border Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row3->addChild(
	"numbered_navigation_active_border_color",
	$numbered_navigation_active_border_color
);

$numbered_navigation_active_number_color = new PitchQodeField(
	"colorsimple",
	"numbered_navigation_active_number_color",
	"",
	esc_html__( "Active Number Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row3->addChild(
	"numbered_navigation_active_number_color",
	$numbered_navigation_active_number_color
);

$row4 = new PitchQodeRow();
$group88->addChild(
	"row4",
	$row4
);

$numbered_navigation_hover_background_color = new PitchQodeField(
	"colorsimple",
	"numbered_navigation_hover_background_color",
	"",
	esc_html__( "Hover Background Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row4->addChild(
	"numbered_navigation_hover_background_color",
	$numbered_navigation_hover_background_color
);

$numbered_navigation_hover_border_color = new PitchQodeField(
	"colorsimple",
	"numbered_navigation_hover_border_color",
	"",
	esc_html__( "Hover Border Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row4->addChild(
	"numbered_navigation_hover_border_color",
	$numbered_navigation_hover_border_color
);

$numbered_navigation_hover_number_color = new PitchQodeField(
	"colorsimple",
	"numbered_navigation_hover_number_color",
	"",
	esc_html__( "Hover Number Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row4->addChild(
	"numbered_navigation_hover_number_color",
	$numbered_navigation_hover_number_color
);

$slider_circle_navigation = new PitchQodeTitle(
	"slider_circle_navigation",
	esc_html__( "Bullet Navigation", 'pitch' )
);
$panel9->addChild(
	"slider_circle_navigation",
	$slider_circle_navigation
);

$group8 = new PitchQodeGroup(
	esc_html__( "Navigation Controls", 'pitch' ),
	esc_html__( "Define navigation controls style", 'pitch' )
);
$panel9->addChild(
	"group8",
	$group8
);

$row1 = new PitchQodeRow();
$group8->addChild(
	"row1",
	$row1
);

$navigation_control_color = new PitchQodeField(
	"colorsimple",
	"navigation_control_color",
	"",
	esc_html__( "Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"navigation_control_color",
	$navigation_control_color
);

$navigation_control_active_color = new PitchQodeField(
	"colorsimple",
	"navigation_control_active_color",
	"",
	esc_html__( "Active Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"navigation_control_active_color",
	$navigation_control_active_color
);

$navigation_control_size = new PitchQodeField(
	"textsimple",
	"navigation_control_size",
	"",
	esc_html__( "Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"navigation_control_size",
	$navigation_control_size
);

$navigation_control_active_size = new PitchQodeField(
	"textsimple",
	"navigation_control_active_size",
	"",
	esc_html__( "Active Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"navigation_control_active_size",
	$navigation_control_active_size
);

$row2 = new PitchQodeRow();
$group8->addChild(
	"row2",
	$row2
);

$navigation_control_border_color = new PitchQodeField(
	"colorsimple",
	"navigation_control_border_color",
	"",
	esc_html__( "Border Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"navigation_control_border_color",
	$navigation_control_border_color
);

$navigation_control_active_border_color = new PitchQodeField(
	"colorsimple",
	"navigation_control_active_border_color",
	"",
	esc_html__( "Active Border Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"navigation_control_active_border_color",
	$navigation_control_active_border_color
);

$navigation_control_border_radius = new PitchQodeField(
	"textsimple",
	"navigation_control_border_radius",
	"",
	esc_html__( "Border Radius (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"navigation_control_border_radius",
	$navigation_control_border_radius
);

$navigation_slider_vertical_section = new PitchQodeTitle(
	"navigation_slider_vertical_section",
	esc_html__( "Vertical Sliders (Full Screen Section Template)", 'pitch' )
);
$panel9->addChild(
	"navigation_slider_vertical_section",
	$navigation_slider_vertical_section
);

$fs_navigation_slider_vertical_section_type = new PitchQodeField(
	'select',
	'fs_navigation_slider_vertical_section_type',
	'arrows',
	esc_html__( 'Navigation Type', 'pitch' ),
	esc_html__( 'Choose type of Navigation for Vertical Sliders', 'pitch' ),
	array(
		'arrows' => esc_html__( 'Arrows', 'pitch' ),
		'bullets' => esc_html__( 'Bullets', 'pitch' ),
		'both' => esc_html__( 'Both', 'pitch' )
	)
);
$panel9->addChild(
	'fs_navigation_slider_vertical_section_type',
	$fs_navigation_slider_vertical_section_type
);

$group6 = new PitchQodeGroup(
	esc_html__( "Arrow Navigation Button Size", 'pitch' ),
	esc_html__( "Define arrow navigation button size", 'pitch' )
);
$panel9->addChild(
	"group6",
	$group6
);
$row1 = new PitchQodeRow();
$group6->addChild(
	"row1",
	$row1
);

$fs_navigation_button_width = new PitchQodeField(
	"textsimple",
	"fs_navigation_button_width",
	"",
	esc_html__( "Width (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"fs_navigation_button_width",
	$fs_navigation_button_width
);

$fs_navigation_button_height = new PitchQodeField(
	"textsimple",
	"fs_navigation_button_height",
	"",
	esc_html__( "Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"fs_navigation_button_height",
	$fs_navigation_button_height
);

$group5 = new PitchQodeGroup(
	esc_html__( "Arrow Icon Style", 'pitch' ),
	esc_html__( "Define icon arrow style", 'pitch' )
);
$panel9->addChild(
	"group5",
	$group5
);

$row1 = new PitchQodeRow();
$group5->addChild(
	"row1",
	$row1
);

$fs_navigation_arrow_size = new PitchQodeField(
	"textsimple",
	"fs_navigation_arrow_size",
	"",
	esc_html__( "Icon Arrow Size (px)", 'pitch' ),
	esc_html__( "Define size for arrow navigation icons", 'pitch' )
);
$row1->addChild(
	"fs_navigation_arrow_size",
	$fs_navigation_arrow_size
);

$fs_navigation_arrow_color = new PitchQodeField(
	"colorsimple",
	"fs_navigation_arrow_color",
	"",
	esc_html__( "Arrow Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"fs_navigation_arrow_color",
	$fs_navigation_arrow_color
);

$fs_navigation_arrow_hover_color = new PitchQodeField(
	"colorsimple",
	"fs_navigation_arrow_hover_color",
	"",
	esc_html__( "Arrow Hover Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"fs_navigation_arrow_hover_color",
	$fs_navigation_arrow_hover_color
);

$group7 = new PitchQodeGroup(
	esc_html__( "Arrow Navigation Button Background", 'pitch' ),
	esc_html__( "Define arrow navigation button background", 'pitch' )
);
$panel9->addChild(
	"group7",
	$group7
);

$row1 = new PitchQodeRow();
$group7->addChild(
	"row1",
	$row1
);

$fs_navigation_background_color = new PitchQodeField(
	"colorsimple",
	"fs_navigation_background_color",
	"",
	esc_html__( "Background Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"fs_navigation_background_color",
	$fs_navigation_background_color
);

$fs_navigation_background_transparency = new PitchQodeField(
	"textsimple",
	"fs_navigation_background_transparency",
	"",
	esc_html__( "Background Transparency (0-1)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"fs_navigation_background_transparency",
	$fs_navigation_background_transparency
);

$fs_navigation_background_hover_color = new PitchQodeField(
	"colorsimple",
	"fs_navigation_background_hover_color",
	"",
	esc_html__( "Background Hover Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"fs_navigation_background_hover_color",
	$fs_navigation_background_hover_color
);

$fs_navigation_background_hover_transparency = new PitchQodeField(
	"textsimple",
	"fs_navigation_background_hover_transparency",
	"",
	esc_html__( "Background Hover Transparency (0-1)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"fs_navigation_background_hover_transparency",
	$fs_navigation_background_hover_transparency
);

$group20 = new PitchQodeGroup(
	esc_html__( "Bullets Navigation", 'pitch' ),
	esc_html__( "Define bullets navigation style", 'pitch' )
);
$panel9->addChild(
	"group20",
	$group20
);

$row1 = new PitchQodeRow();
$group20->addChild(
	"row1",
	$row1
);

$fs_navigation_control_color = new PitchQodeField(
	"colorsimple",
	"fs_navigation_control_color",
	"",
	esc_html__( "Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"fs_navigation_control_color",
	$fs_navigation_control_color
);

$fs_navigation_control_active_color = new PitchQodeField(
	"colorsimple",
	"fs_navigation_control_active_color",
	"",
	esc_html__( "Active Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"fs_navigation_control_active_color",
	$fs_navigation_control_active_color
);

$fs_navigation_control_size = new PitchQodeField(
	"textsimple",
	"fs_navigation_control_size",
	"",
	esc_html__( "Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"fs_navigation_control_size",
	$fs_navigation_control_size
);

$fs_navigation_control_active_size = new PitchQodeField(
	"textsimple",
	"fs_navigation_control_active_size",
	"",
	esc_html__( "Active Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"fs_navigation_control_active_size",
	$fs_navigation_control_active_size
);

$row2 = new PitchQodeRow();
$group20->addChild(
	"row2",
	$row2
);

$fs_navigation_control_border_color = new PitchQodeField(
	"colorsimple",
	"fs_navigation_control_border_color",
	"",
	esc_html__( "Border Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"fs_navigation_control_border_color",
	$fs_navigation_control_border_color
);

$fs_navigation_control_active_border_color = new PitchQodeField(
	"colorsimple",
	"fs_navigation_control_active_border_color",
	"",
	esc_html__( "Active Border Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"fs_navigation_control_active_border_color",
	$fs_navigation_control_active_border_color
);

$fs_navigation_control_border_radius = new PitchQodeField(
	"textsimple",
	"fs_navigation_control_border_radius",
	"",
	esc_html__( "Border Radius (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"fs_navigation_control_border_radius",
	$fs_navigation_control_border_radius
);

// Social Share List Icon

$panel26 = new PitchQodePanel(
	esc_html__( "Social Share List", 'pitch' ),
	"social_share_list_icon_panel"
);
$elementsPage->addChild(
	"panel26",
	$panel26
);

$group1 = new PitchQodeGroup(
	esc_html__( "Icons", 'pitch' ),
	esc_html__( "Define Social Icons style for Social Share List", 'pitch' )
);
$panel26->addChild(
	"group1",
	$group1
);
$row1 = new PitchQodeRow();
$group1->addChild(
	"row1",
	$row1
);

$social_share_list_icon_size = new PitchQodeField(
	"textsimple",
	"social_share_list_icon_size",
	"",
	esc_html__( "Icon Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"social_share_list_icon_size",
	$social_share_list_icon_size
);

$social_share_list_icon_margin_right = new PitchQodeField(
	"textsimple",
	"social_share_list_icon_margin_right",
	"",
	esc_html__( "Margin Right (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"social_share_list_icon_margin_right",
	$social_share_list_icon_margin_right
);

$social_share_list_icon_color = new PitchQodeField(
	"colorsimple",
	"social_share_list_icon_color",
	"",
	esc_html__( "Icon Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"social_share_list_icon_color",
	$social_share_list_icon_color
);

$social_share_list_icon_hover_color = new PitchQodeField(
	"colorsimple",
	"social_share_list_icon_hover_color",
	"",
	esc_html__( "Icon Hover Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"social_share_list_icon_hover_color",
	$social_share_list_icon_hover_color
);

$social_share_list_icons_type = new PitchQodeField(
	'select',
	'social_share_list_icons_type',
	'circle',
	esc_html__( 'Icons Type', 'pitch' ),
	esc_html__( 'Choose type of social share list icons', 'pitch' ),
	array(
		'circle' => esc_html__( 'Circle', 'pitch' ),
		'normal' => esc_html__( 'Normal', 'pitch' )
	)
);
$panel26->addChild(
	'social_share_list_icons_type',
	$social_share_list_icons_type
);

//Tabs Panel

$panel15 = new PitchQodePanel(
	esc_html__( "Tabs", 'pitch' ),
	"tabs_panel"
);
$elementsPage->addChild(
	"panel15",
	$panel15
);

$tabs_navigation_subtitle = new PitchQodeTitle(
	"tabs_navigation_subtitle",
	esc_html__( "Tabs Navigation (with Text)", 'pitch' )
);
$panel15->addChild(
	"tabs_navigation_subtitle",
	$tabs_navigation_subtitle
);

$group1 = new PitchQodeGroup(
	esc_html__( "Tabs Navigation Text Style", 'pitch' ),
	esc_html__( "Define Tabs text style", 'pitch' )
);
$panel15->addChild(
	"group1",
	$group1
);

$row1 = new PitchQodeRow();
$group1->addChild(
	"row1",
	$row1
);

$tab_text_color = new PitchQodeField(
	"colorsimple",
	"tab_text_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"tab_text_color",
	$tab_text_color
);

$tab_active_text_color = new PitchQodeField(
	"colorsimple",
	"tab_active_text_color",
	"",
	esc_html__( "Text Active Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"tab_active_text_color",
	$tab_active_text_color
);

$tab_text_size = new PitchQodeField(
	"textsimple",
	"tab_text_size",
	"",
	esc_html__( "Text Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"tab_text_size",
	$tab_text_size
);

$tab_nav_font_family = new PitchQodeField(
	"fontsimple",
	"tab_nav_font_family",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"tab_nav_font_family",
	$tab_nav_font_family
);

$row2 = new PitchQodeRow( true );
$group1->addChild(
	"row2",
	$row2
);

$tab_text_transform = new PitchQodeField(
	"selectblanksimple",
	"tab_text_transform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row2->addChild(
	"tab_text_transform",
	$tab_text_transform
);

$tab_letter_spacing = new PitchQodeField(
	"textsimple",
	"tab_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"tab_letter_spacing",
	$tab_letter_spacing
);

$tab_font_weight = new PitchQodeField(
	"selectblanksimple",
	"tab_font_weight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"tab_font_weight",
	$tab_font_weight
);

$tab_font_style = new PitchQodeField(
	"selectblanksimple",
	"tab_font_style",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"tab_font_style",
	$tab_font_style
);

$tabs_navigation_icon_subtitle = new PitchQodeTitle(
	"tabs_navigation_icon_subtitle",
	esc_html__( "Tabs Navigation (with Icon)", 'pitch' )
);
$panel15->addChild(
	"tabs_navigation_icon_subtitle",
	$tabs_navigation_icon_subtitle
);

$group2 = new PitchQodeGroup(
	esc_html__( "Tabs Navigation Icon Style", 'pitch' ),
	esc_html__( "Define icon style", 'pitch' )
);
$panel15->addChild(
	"group2",
	$group2
);

$row1 = new PitchQodeRow();
$group2->addChild(
	"row1",
	$row1
);

$tabs_icon_size = new PitchQodeField(
	"textsimple",
	"tabs_icon_size",
	"",
	esc_html__( "Icon Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"tabs_icon_size",
	$tabs_icon_size
);

$tab_icon_color = new PitchQodeField(
	"colorsimple",
	"tab_icon_color",
	"",
	esc_html__( "Icon Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"tab_icon_color",
	$tab_icon_color
);

$tab_icon_hover_color = new PitchQodeField(
	"colorsimple",
	"tab_icon_hover_color",
	"",
	esc_html__( "Icon Hover Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"tab_icon_hover_color",
	$tab_icon_hover_color
);

$tabs_navigation_icon_and_text_subtitle = new PitchQodeTitle(
	"tabs_navigation_icon_and_text_subtitle",
	esc_html__( "Tabs Navigation (with Icons and Text)", 'pitch' )
);
$panel15->addChild(
	"tabs_navigation_icon_and_text_subtitle",
	$tabs_navigation_icon_and_text_subtitle
);

$group19 = new PitchQodeGroup(
	esc_html__( "Tabs Navigation Text Style", 'pitch' ),
	esc_html__( "Define Tabs text style (with Icons and Text)", 'pitch' )
);
$panel15->addChild(
	"group19",
	$group19
);

$row1 = new PitchQodeRow();
$group19->addChild(
	"row1",
	$row1
);

$tab_icon_and_text_text_color = new PitchQodeField(
	"colorsimple",
	"tab_icon_and_text_text_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"tab_icon_and_text_text_color",
	$tab_icon_and_text_text_color
);

$tab_icon_and_text_active_text_color = new PitchQodeField(
	"colorsimple",
	"tab_icon_and_text_active_text_color",
	"",
	esc_html__( "Text Active Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"tab_icon_and_text_active_text_color",
	$tab_icon_and_text_active_text_color
);

$tab_icon_and_text_text_size = new PitchQodeField(
	"textsimple",
	"tab_icon_and_text_text_size",
	"",
	esc_html__( "Text Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"tab_icon_and_text_text_size",
	$tab_icon_and_text_text_size
);

$tab_icon_and_text_nav_font_family = new PitchQodeField(
	"fontsimple",
	"tab_icon_and_text_nav_font_family",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"tab_icon_and_text_nav_font_family",
	$tab_icon_and_text_nav_font_family
);

$row2 = new PitchQodeRow( true );
$group19->addChild(
	"row2",
	$row2
);

$tab_icon_and_text_text_transform = new PitchQodeField(
	"selectblanksimple",
	"tab_icon_and_text_text_transform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row2->addChild(
	"tab_icon_and_text_text_transform",
	$tab_icon_and_text_text_transform
);

$tab_icon_and_text_letter_spacing = new PitchQodeField(
	"textsimple",
	"tab_icon_and_text_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"tab_icon_and_text_letter_spacing",
	$tab_icon_and_text_letter_spacing
);

$tab_icon_and_text_font_weight = new PitchQodeField(
	"selectblanksimple",
	"tab_icon_and_text_font_weight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"tab_icon_and_text_font_weight",
	$tab_icon_and_text_font_weight
);

$tab_icon_and_text_font_style = new PitchQodeField(
	"selectblanksimple",
	"tab_icon_and_text_font_style",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"tab_icon_and_text_font_style",
	$tab_icon_and_text_font_style
);

$group20 = new PitchQodeGroup(
	esc_html__( "Tabs Navigation Icon Style", 'pitch' ),
	esc_html__( "Define icon style (with Icons and Text)", 'pitch' )
);
$panel15->addChild(
	"group20",
	$group20
);

$row1 = new PitchQodeRow();
$group20->addChild(
	"row1",
	$row1
);

$tab_icon_and_text_icon_size = new PitchQodeField(
	"textsimple",
	"tab_icon_and_text_icon_size",
	"",
	esc_html__( "Icon Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"tab_icon_and_text_icon_size",
	$tab_icon_and_text_icon_size
);

$tab_icon_and_text_icon_color = new PitchQodeField(
	"colorsimple",
	"tab_icon_and_text_icon_color",
	"",
	esc_html__( "Icon Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"tab_icon_and_text_icon_color",
	$tab_icon_and_text_icon_color
);

$tab_icon_and_text_icon_hover_color = new PitchQodeField(
	"colorsimple",
	"tab_icon_and_text_icon_hover_color",
	"",
	esc_html__( "Icon Hover Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"tab_icon_and_text_icon_hover_color",
	$tab_icon_and_text_icon_hover_color
);

$tabs_navigation_type_with_lines_subtitle = new PitchQodeTitle(
	"tabs_navigation_type_with_lines_subtitle",
	esc_html__( "Tabs Navigation (With Lines)", 'pitch' )
);
$panel15->addChild(
	"tabs_navigation_type_with_lines_subtitle",
	$tabs_navigation_type_with_lines_subtitle
);

$group3 = new PitchQodeGroup(
	esc_html__( "Tabs Navigation Style", 'pitch' ),
	esc_html__( "Define tab style", 'pitch' )
);
$panel15->addChild(
	"group3",
	$group3
);

$row1 = new PitchQodeRow( true );
$group3->addChild(
	"row1",
	$row1
);

$tabs_icon_width = new PitchQodeField(
	"textsimple",
	"tabs_icon_width",
	"",
	esc_html__( "Width (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"tabs_icon_width",
	$tabs_icon_width
);

$tabs_icon_height = new PitchQodeField(
	"textsimple",
	"tabs_icon_height",
	"",
	esc_html__( "Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"tabs_icon_height",
	$tabs_icon_height
);

$tabs_icon_shape_border_width = new PitchQodeField(
	"textsimple",
	"tabs_icon_shape_border_width",
	"",
	esc_html__( "Spike Length (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"tabs_icon_shape_border_width",
	$tabs_icon_shape_border_width
);

$tabs_default_subtitle = new PitchQodeTitle(
	"tabs_default_subtitle",
	esc_html__( "Default Tabs Style", 'pitch' )
);
$panel15->addChild(
	"tabs_default_subtitle",
	$tabs_default_subtitle
);

$tabs_default_show_separator = new PitchQodeField(
	"yesno",
	"tabs_default_show_separator",
	"no",
	esc_html__( "Show Right Separator", 'pitch' ),
	esc_html__( "Enabling this option will show right separator", 'pitch' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_default_tabs_right_separator_container"
	)
);
$panel15->addChild(
	"tabs_default_show_separator",
	$tabs_default_show_separator
);

$default_tabs_right_separator_container = new PitchQodeContainer(
	"default_tabs_right_separator_container",
	"tabs_default_show_separator",
	"no"
);
$panel15->addChild(
	"default_tabs_right_separator_container",
	$default_tabs_right_separator_container
);

$tabs_default_right_separator_color = new PitchQodeField(
	"color",
	"tabs_default_right_separator_color",
	"",
	esc_html__( "Separator Color", 'pitch' ),
	esc_html__( "Choose right separator color", 'pitch' )
);
$default_tabs_right_separator_container->addChild(
	"tabs_default_right_separator_color",
	$tabs_default_right_separator_color
);

$group_default_tabs = new PitchQodeGroup(
	esc_html__( "Tabs Navigation Style", 'pitch' ),
	esc_html__( "Define tab navigation style", 'pitch' )
);
$panel15->addChild(
	"group_default_tabs",
	$group_default_tabs
);

$row1 = new PitchQodeRow( true );
$group_default_tabs->addChild(
	"row1",
	$row1
);

$tabs_default_padding_left = new PitchQodeField(
	"textsimple",
	"tabs_default_padding_left",
	"",
	esc_html__( "Padding Left (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"tabs_default_padding_left",
	$tabs_default_padding_left
);

$tabs_default_padding_right = new PitchQodeField(
	"textsimple",
	"tabs_default_padding_right",
	"",
	esc_html__( "Padding Right (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"tabs_default_padding_right",
	$tabs_default_padding_right
);

$row2 = new PitchQodeRow( true );
$group_default_tabs->addChild(
	"row2",
	$row2
);

$tabs_default_text_color = new PitchQodeField(
	"colorsimple",
	"tabs_default_text_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"tabs_default_text_color",
	$tabs_default_text_color
);

$tabs_default_active_text_color = new PitchQodeField(
	"colorsimple",
	"tabs_default_active_text_color",
	"",
	esc_html__( "Text Active/Hover Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"tabs_default_active_text_color",
	$tabs_default_active_text_color
);

$tabs_navigation_boxed_subtitle = new PitchQodeTitle(
	"tabs_navigation_boxed_subtitle",
	esc_html__( "Tabs Navigation (With Borders)", 'pitch' )
);
$panel15->addChild(
	"tabs_navigation_boxed_subtitle",
	$tabs_navigation_boxed_subtitle
);

$group4 = new PitchQodeGroup(
	esc_html__( "Tabs Navigation Size", 'pitch' ),
	esc_html__( "Define tab size style", 'pitch' )
);
$panel15->addChild(
	"group4",
	$group4
);

$row1 = new PitchQodeRow( true );
$group4->addChild(
	"row1",
	$row1
);

$tabs_with_borders_height = new PitchQodeField(
	"textsimple",
	"tabs_with_borders_height",
	"",
	esc_html__( "Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"tabs_with_borders_height",
	$tabs_with_borders_height
);

$group_hor_with_borders_padding = new PitchQodeGroup(
	esc_html__( "Horizontal Tabs Navigation Padding", 'pitch' ),
	esc_html__( "Define tab size style", 'pitch' )
);
$panel15->addChild(
	"group_hor_with_borders_padding",
	$group_hor_with_borders_padding
);

$row1 = new PitchQodeRow( true );
$group_hor_with_borders_padding->addChild(
	"row1",
	$row1
);

$tabs_with_borders_padding_left = new PitchQodeField(
	"textsimple",
	"tabs_with_borders_padding_left",
	"",
	esc_html__( "Padding Left (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"tabs_with_borders_padding_left",
	$tabs_with_borders_padding_left
);

$tabs_with_borders_padding_right = new PitchQodeField(
	"textsimple",
	"tabs_with_borders_padding_right",
	"",
	esc_html__( "Padding Right (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"tabs_with_borders_padding_right",
	$tabs_with_borders_padding_right
);

//		this options are for type with icon and text, this type need to have smaller paddings

$group_icon_text_diff_padding = new PitchQodeGroup(
	esc_html__( "Horizontal Tabs Navigation Size for Tabs with Icon and Text", 'pitch' ),
	esc_html__( "Define tab size style", 'pitch' )
);
$panel15->addChild(
	"group_icon_text_diff_padding",
	$group_icon_text_diff_padding
);

$row1 = new PitchQodeRow( true );
$group_icon_text_diff_padding->addChild(
	"row1",
	$row1
);

$tabs_with_borders_diff_padding_left = new PitchQodeField(
	"textsimple",
	"tabs_with_borders_diff_padding_left",
	"",
	esc_html__( "Padding Left (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"tabs_with_borders_diff_padding_left",
	$tabs_with_borders_diff_padding_left
);

$tabs_with_borders_diff_padding_right = new PitchQodeField(
	"textsimple",
	"tabs_with_borders_diff_padding_right",
	"",
	esc_html__( "Padding Right (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"tabs_with_borders_diff_padding_right",
	$tabs_with_borders_diff_padding_right
);
$group_ver_with_borders_padding = new PitchQodeGroup(
	esc_html__( "Vertical Tabs Navigation Padding", 'pitch' ),
	esc_html__( "Define tab size style", 'pitch' )
);
$panel15->addChild(
	"group_ver_with_borders_padding",
	$group_ver_with_borders_padding
);

$row1 = new PitchQodeRow( true );
$group_ver_with_borders_padding->addChild(
	"row1",
	$row1
);

$ver_tabs_with_borders_padding_left = new PitchQodeField(
	"textsimple",
	"ver_tabs_with_borders_padding_left",
	"",
	esc_html__( "Padding Left (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"ver_tabs_with_borders_padding_left",
	$ver_tabs_with_borders_padding_left
);

$ver_tabs_with_borders_padding_right = new PitchQodeField(
	"textsimple",
	"ver_tabs_with_borders_padding_right",
	"",
	esc_html__( "Padding Right (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"ver_tabs_with_borders_padding_right",
	$ver_tabs_with_borders_padding_right
);

//		this options are for type with icon and text, this type need to have smaller paddings

$group_ver_icon_text_diff_padding = new PitchQodeGroup(
	esc_html__( "Vertical Tabs Navigation Size for Tabs with Icon and Text", 'pitch' ),
	esc_html__( "Define tab size style", 'pitch' )
);
$panel15->addChild(
	"group_ver_icon_text_diff_padding",
	$group_ver_icon_text_diff_padding
);

$row1 = new PitchQodeRow( true );
$group_ver_icon_text_diff_padding->addChild(
	"row1",
	$row1
);

$ver_tabs_with_borders_diff_padding_left = new PitchQodeField(
	"textsimple",
	"ver_tabs_with_borders_diff_padding_left",
	"",
	esc_html__( "Padding Left (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"ver_tabs_with_borders_diff_padding_left",
	$ver_tabs_with_borders_diff_padding_left
);

$ver_tabs_with_borders_diff_padding_right = new PitchQodeField(
	"textsimple",
	"ver_tabs_with_borders_diff_padding_right",
	"",
	esc_html__( "Padding Right (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"ver_tabs_with_borders_diff_padding_right",
	$ver_tabs_with_borders_diff_padding_right
);

$horizontal_tabs_border_arround_element_no_space = new PitchQodeTitle(
	"horizontal_tabs_border_arround_element_no_space",
	esc_html__( "Horizontal Tabs - Border Around Tabs (Without Space)", 'pitch' )
);
$panel15->addChild(
	"horizontal_tabs_border_arround_element_no_space",
	$horizontal_tabs_border_arround_element_no_space
);

$group5 = new PitchQodeGroup(
	esc_html__( "Tab Styles", 'pitch' ),
	esc_html__( "Define tab style", 'pitch' )
);
$panel15->addChild(
	"group5",
	$group5
);

$row1 = new PitchQodeRow( true );
$group5->addChild(
	"row1",
	$row1
);

$tab_bae_hor_no_marg_background_color = new PitchQodeField(
	"colorsimple",
	"tab_bae_hor_no_marg_background_color",
	"",
	esc_html__( "Background Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"tab_bae_hor_no_marg_background_color",
	$tab_bae_hor_no_marg_background_color
);

$tab_bae_hor_no_marg_background_color_hover = new PitchQodeField(
	"colorsimple",
	"tab_bae_hor_no_marg_background_color_hover",
	"",
	esc_html__( "Background Hover/Active Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"tab_bae_hor_no_marg_background_color_hover",
	$tab_bae_hor_no_marg_background_color_hover
);

$tab_bae_hor_no_marg_border_color = new PitchQodeField(
	"colorsimple",
	"tab_bae_hor_no_marg_border_color",
	"",
	esc_html__( "Border Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"tab_bae_hor_no_marg_border_color",
	$tab_bae_hor_no_marg_border_color
);

$tab_bae_hor_no_marg_border_hover_color = new PitchQodeField(
	"colorsimple",
	"tab_bae_hor_no_marg_border_hover_color",
	"",
	esc_html__( "Border Hover/Active Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"tab_bae_hor_no_marg_border_hover_color",
	$tab_bae_hor_no_marg_border_hover_color
);
$group6 = new PitchQodeGroup(
	esc_html__( "Text Styles", 'pitch' ),
	esc_html__( "Define text styles", 'pitch' )
);
$panel15->addChild(
	"group6",
	$group6
);

$row1 = new PitchQodeRow( true );
$group6->addChild(
	"row1",
	$row1
);

$tab_bae_hor_no_marg_text_color = new PitchQodeField(
	"colorsimple",
	"tab_bae_hor_no_marg_text_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"tab_bae_hor_no_marg_text_color",
	$tab_bae_hor_no_marg_text_color
);

$tab_bae_hor_no_marg_active_text_color = new PitchQodeField(
	"colorsimple",
	"tab_bae_hor_no_marg_active_text_color",
	"",
	esc_html__( "Text Active/Hover Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"tab_bae_hor_no_marg_active_text_color",
	$tab_bae_hor_no_marg_active_text_color
);

$hor_tabs_border_arround_element_with_space = new PitchQodeTitle(
	"hor_tabs_border_arround_element_with_space",
	esc_html__( "Horizontal Tabs -  Border Around Tabs (With Space)", 'pitch' )
);
$panel15->addChild(
	"hor_tabs_border_arround_element_with_space",
	$hor_tabs_border_arround_element_with_space
);

$group7 = new PitchQodeGroup(
	esc_html__( "Tab Styles", 'pitch' ),
	esc_html__( "Define tab style", 'pitch' )
);
$panel15->addChild(
	"group7",
	$group7
);

$row1 = new PitchQodeRow( true );
$group7->addChild(
	"row1",
	$row1
);

$tab_bae_hor_marg_background_color = new PitchQodeField(
	"colorsimple",
	"tab_bae_hor_marg_background_color",
	"",
	esc_html__( "Background Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"tab_bae_hor_marg_background_color",
	$tab_bae_hor_marg_background_color
);

$tab_bae_hor_marg_background_hover_color = new PitchQodeField(
	"colorsimple",
	"tab_bae_hor_marg_background_hover_color",
	"",
	esc_html__( "Background Hover/Active Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"tab_bae_hor_marg_background_hover_color",
	$tab_bae_hor_marg_background_hover_color
);

$tab_bae_hor_marg_border_color = new PitchQodeField(
	"colorsimple",
	"tab_bae_hor_marg_border_color",
	"",
	esc_html__( "Border Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"tab_bae_hor_marg_border_color",
	$tab_bae_hor_marg_border_color
);

$tab_bae_hor_marg_border_hover_color = new PitchQodeField(
	"colorsimple",
	"tab_bae_hor_marg_border_hover_color",
	"",
	esc_html__( "Border Hover/Active Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"tab_bae_hor_marg_border_hover_color",
	$tab_bae_hor_marg_border_hover_color
);

$group8 = new PitchQodeGroup(
	esc_html__( "Text Styles", 'pitch' ),
	esc_html__( "Define text styles", 'pitch' )
);
$panel15->addChild(
	"group8",
	$group8
);

$row1 = new PitchQodeRow( true );
$group8->addChild(
	"row1",
	$row1
);

$tab_bae_hor_marg_text_color = new PitchQodeField(
	"colorsimple",
	"tab_bae_hor_marg_text_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"tab_bae_hor_marg_text_color",
	$tab_bae_hor_marg_text_color
);

$tab_bae_hor_marg_active_text_color = new PitchQodeField(
	"colorsimple",
	"tab_bae_hor_marg_active_text_color",
	"",
	esc_html__( "Text Active/Hover Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"tab_bae_hor_marg_active_text_color",
	$tab_bae_hor_marg_active_text_color
);

$horizontal_tabs_border_arround_active_tab = new PitchQodeTitle(
	"horizontal_tabs_border_arround_active_tab",
	esc_html__( "Horizontal Tabs -  Border Around Active Tab", 'pitch' )
);
$panel15->addChild(
	"horizontal_tabs_border_arround_active_tab",
	$horizontal_tabs_border_arround_active_tab
);

$group9 = new PitchQodeGroup(
	esc_html__( "Tab Styles", 'pitch' ),
	esc_html__( "Define tab style", 'pitch' )
);
$panel15->addChild(
	"group9",
	$group9
);

$row1 = new PitchQodeRow( true );
$group9->addChild(
	"row1",
	$row1
);

$tab_bord_active_background_color = new PitchQodeField(
	"colorsimple",
	"tab_bord_active_background_color",
	"",
	esc_html__( "Background Active Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"tab_bord_active_background_color",
	$tab_bord_active_background_color
);

$tab_bord_active_background_color_hover = new PitchQodeField(
	"colorsimple",
	"tab_bord_active_background_color_hover",
	"",
	esc_html__( "Background Hover Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"tab_bord_active_background_color_hover",
	$tab_bord_active_background_color_hover
);

$tab_bord_active_border_hover_color = new PitchQodeField(
	"colorsimple",
	"tab_bord_active_border_hover_color",
	"",
	esc_html__( "Border Hover Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"tab_bord_active_border_hover_color",
	$tab_bord_active_border_hover_color
);

$tab_bord_active_active_tab_border_hover_color = new PitchQodeField(
	"colorsimple",
	"tab_bord_active_active_tab_border_hover_color",
	"",
	esc_html__( "Border Active Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"tab_bord_active_active_tab_border_hover_color",
	$tab_bord_active_active_tab_border_hover_color
);

$group10 = new PitchQodeGroup(
	esc_html__( "Text Styles", 'pitch' ),
	esc_html__( "Define text style", 'pitch' )
);
$panel15->addChild(
	"group10",
	$group10
);

$row1 = new PitchQodeRow( true );
$group10->addChild(
	"row1",
	$row1
);

$tab_bord_active_text_color = new PitchQodeField(
	"colorsimple",
	"tab_bord_active_text_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"tab_bord_active_text_color",
	$tab_bord_active_text_color
);

$tab_bord_active_active_text_color = new PitchQodeField(
	"colorsimple",
	"tab_bord_active_active_text_color",
	"",
	esc_html__( "Text Active/Hover Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"tab_bord_active_active_text_color",
	$tab_bord_active_active_text_color
);

$vertical_tabs_border_arround_element = new PitchQodeTitle(
	"vertical_tabs_border_arround_element",
	esc_html__( "Vertical Tabs -  Border Around Tabs(Without Space)", 'pitch' )
);
$panel15->addChild(
	"vertical_tabs_border_arround_element",
	$vertical_tabs_border_arround_element
);

$group11 = new PitchQodeGroup(
	esc_html__( "Tab Styles", 'pitch' ),
	esc_html__( "Define tab style", 'pitch' )
);
$panel15->addChild(
	"group11",
	$group11
);

$row1 = new PitchQodeRow( true );
$group11->addChild(
	"row1",
	$row1
);

$ver_tab_bae_background_color = new PitchQodeField(
	"colorsimple",
	"ver_tab_bae_background_color",
	"",
	esc_html__( "Background Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"ver_tab_bae_background_color",
	$ver_tab_bae_background_color
);

$ver_tab_bae_background_color_hover = new PitchQodeField(
	"colorsimple",
	"ver_tab_bae_background_color_hover",
	"",
	esc_html__( "Background Active/HoverColor", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"ver_tab_bae_background_color_hover",
	$ver_tab_bae_background_color_hover
);

$ver_tab_bae_border_color = new PitchQodeField(
	"colorsimple",
	"ver_tab_bae_border_color",
	"",
	esc_html__( "Border Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"ver_tab_bae_border_color",
	$ver_tab_bae_border_color
);

$ver_tab_bae_border_color_hover = new PitchQodeField(
	"colorsimple",
	"ver_tab_bae_border_color_hover",
	"",
	esc_html__( "Border Hover Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"ver_tab_bae_border_color_hover",
	$ver_tab_bae_border_color_hover
);

$group12 = new PitchQodeGroup(
	esc_html__( "Text Styles", 'pitch' ),
	esc_html__( "Define text style", 'pitch' )
);
$panel15->addChild(
	"group12",
	$group12
);

$row1 = new PitchQodeRow( true );
$group12->addChild(
	"row1",
	$row1
);

$ver_tab_bae_text_color = new PitchQodeField(
	"colorsimple",
	"ver_tab_bae_text_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"ver_tab_bae_text_color",
	$ver_tab_bae_text_color
);

$ver_tab_bae_active_text_color = new PitchQodeField(
	"colorsimple",
	"ver_tab_bae_active_text_color",
	"",
	esc_html__( "Text Active/Hover Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"ver_tab_bae_active_text_color",
	$ver_tab_bae_active_text_color
);

$ver_tab_bae_with_space = new PitchQodeTitle(
	"ver_tab_bae_with_space",
	esc_html__( "Vertical Tabs -  Border Around Tabs(With Space)", 'pitch' )
);
$panel15->addChild(
	"ver_tab_bae_with_space",
	$ver_tab_bae_with_space
);

$group_vert_tabs_with_space = new PitchQodeGroup(
	esc_html__( "Tab Styles", 'pitch' ),
	esc_html__( "Define tab style", 'pitch' )
);
$panel15->addChild(
	"group_vert_tabs_with_space",
	$group_vert_tabs_with_space
);

$row1 = new PitchQodeRow( true );
$group_vert_tabs_with_space->addChild(
	"row1",
	$row1
);

$ver_tab_bae_with_space_background_color = new PitchQodeField(
	"colorsimple",
	"ver_tab_bae_with_space_background_color",
	"",
	esc_html__( "Background Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"ver_tab_bae_with_space_background_color",
	$ver_tab_bae_with_space_background_color
);

$ver_tab_bae_with_space_background_color_hover = new PitchQodeField(
	"colorsimple",
	"ver_tab_bae_with_space_background_color_hover",
	"",
	esc_html__( "Background Active/HoverColor", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"ver_tab_bae_with_space_background_color_hover",
	$ver_tab_bae_with_space_background_color_hover
);

$ver_tab_bae_with_space_border_color = new PitchQodeField(
	"colorsimple",
	"ver_tab_bae_with_space_border_color",
	"",
	esc_html__( "Border Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"ver_tab_bae_with_space_border_color",
	$ver_tab_bae_with_space_border_color
);

$ver_tab_bae_with_space_border_color_hover = new PitchQodeField(
	"colorsimple",
	"ver_tab_bae_with_space_border_color_hover",
	"",
	esc_html__( "Border Hover Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"ver_tab_bae_with_space_border_color_hover",
	$ver_tab_bae_with_space_border_color_hover
);

$group_vert_tabs_with_space_text = new PitchQodeGroup(
	esc_html__( "Text Styles", 'pitch' ),
	esc_html__( "Define text style", 'pitch' )
);
$panel15->addChild(
	"group_vert_tabs_with_space_text",
	$group_vert_tabs_with_space_text
);

$row1 = new PitchQodeRow( true );
$group_vert_tabs_with_space_text->addChild(
	"row1",
	$row1
);

$ver_tab_bae_with_space_text_color = new PitchQodeField(
	"colorsimple",
	"ver_tab_bae_with_space_text_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"ver_tab_bae_with_space_text_color",
	$ver_tab_bae_with_space_text_color
);

$ver_tab_bae_with_space_active_text_color = new PitchQodeField(
	"colorsimple",
	"ver_tab_bae_with_space_active_text_color",
	"",
	esc_html__( "Text Active/Hover Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"ver_tab_bae_with_space_active_text_color",
	$ver_tab_bae_with_space_active_text_color
);

$vertical_tabs_border_arround_active_tab = new PitchQodeTitle(
	"vertical_tabs_border_arround_active_tab",
	esc_html__( "Vertical Tabs -  Border Around Active Tab", 'pitch' )
);
$panel15->addChild(
	"vertical_tabs_border_arround_active_tab",
	$vertical_tabs_border_arround_active_tab
);

$group13 = new PitchQodeGroup(
	esc_html__( "Tab Styles", 'pitch' ),
	esc_html__( "Define tab style", 'pitch' )
);
$panel15->addChild(
	"group13",
	$group13
);

$row1 = new PitchQodeRow( true );
$group13->addChild(
	"row1",
	$row1
);

$ver_tab_bord_act_background_color = new PitchQodeField(
	"colorsimple",
	"ver_tab_bord_act_background_color",
	"",
	esc_html__( "Background Active Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"ver_tab_bord_act_background_color",
	$ver_tab_bord_act_background_color
);

$ver_tab_bord_act_background_color_hover = new PitchQodeField(
	"colorsimple",
	"ver_tab_bord_act_background_color_hover",
	"",
	esc_html__( "Background HoverColor", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"ver_tab_bord_act_background_color_hover",
	$ver_tab_bord_act_background_color_hover
);

$ver_tab_bord_act_border_color = new PitchQodeField(
	"colorsimple",
	"ver_tab_bord_act_border_color",
	"",
	esc_html__( "Border Active Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"ver_tab_bord_act_border_color",
	$ver_tab_bord_act_border_color
);

$ver_tab_bord_act_border_color_hover = new PitchQodeField(
	"colorsimple",
	"ver_tab_bord_act_border_color_hover",
	"",
	esc_html__( "Border Hover Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"ver_tab_bord_act_border_color_hover",
	$ver_tab_bord_act_border_color_hover
);

$group14 = new PitchQodeGroup(
	esc_html__( "Text Styles", 'pitch' ),
	esc_html__( "Define text style", 'pitch' )
);
$panel15->addChild(
	"group14",
	$group14
);

$row1 = new PitchQodeRow( true );
$group14->addChild(
	"row1",
	$row1
);

$ver_tab_bord_act_text_color = new PitchQodeField(
	"colorsimple",
	"ver_tab_bord_act_text_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"ver_tab_bord_act_text_color",
	$ver_tab_bord_act_text_color
);

$ver_tab_bord_act_active_text_color = new PitchQodeField(
	"colorsimple",
	"ver_tab_bord_act_active_text_color",
	"",
	esc_html__( "Text Active/Hover Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"ver_tab_bord_act_active_text_color",
	$ver_tab_bord_act_active_text_color
);

$tabs_content_horizontal_subtitle = new PitchQodeTitle(
	"tabs_content_horizontal_subtitle",
	esc_html__( "Horizontal Tabs Content", 'pitch' )
);
$panel15->addChild(
	"tabs_content_horizontal_subtitle",
	$tabs_content_horizontal_subtitle
);

$group15 = new PitchQodeGroup(
	esc_html__( "Tabs Content Styles", 'pitch' ),
	esc_html__( "Define tab content style", 'pitch' )
);
$panel15->addChild(
	"group15",
	$group15
);

$row1 = new PitchQodeRow( true );
$group15->addChild(
	"row1",
	$row1
);

$tabs_content_text_size = new PitchQodeField(
	"textsimple",
	"tabs_content_text_size",
	"",
	esc_html__( "Tabs Content Text Size (px)", 'pitch' ),
	esc_html__( "Enter size for text in tab containers", 'pitch' ),
	array(),
	array( "col_width" => 3 )
);
$row1->addChild(
	"tabs_content_text_size",
	$tabs_content_text_size
);

$tabs_content_background_color = new PitchQodeField(
	"colorsimple",
	"tabs_content_background_color",
	"",
	esc_html__( "Tab Content Background", 'pitch' ),
	esc_html__( "Choose color for tab background", 'pitch' )
);
$row1->addChild(
	"tabs_content_background_color",
	$tabs_content_background_color
);

$tabs_content_border_color = new PitchQodeField(
	"colorsimple",
	"tabs_content_border_color",
	"",
	esc_html__( "Tab Content Border Color", 'pitch' ),
	esc_html__( "Choose border width for tab content", 'pitch' )
);
$row1->addChild(
	"tabs_content_border_color",
	$tabs_content_border_color
);

$group16 = new PitchQodeGroup(
	esc_html__( "Content Padding", 'pitch' ),
	esc_html__( "Define tab content padding", 'pitch' )
);
$panel15->addChild(
	"group16",
	$group16
);

$row1 = new PitchQodeRow( true );
$group16->addChild(
	"row1",
	$row1
);

$tabs_content_padding_left = new PitchQodeField(
	"textsimple",
	"tabs_content_padding_left",
	"",
	esc_html__( "Padding Left (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"tabs_content_padding_left",
	$tabs_content_padding_left
);

$tabs_content_padding_right = new PitchQodeField(
	"textsimple",
	"tabs_content_padding_right",
	"",
	esc_html__( "Padding Right (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"tabs_content_padding_right",
	$tabs_content_padding_right
);

$tabs_content_padding_top = new PitchQodeField(
	"textsimple",
	"tabs_content_padding_top",
	"",
	esc_html__( "Padding Top (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"tabs_content_padding_top",
	$tabs_content_padding_top
);

$tabs_content_padding_bottom = new PitchQodeField(
	"textsimple",
	"tabs_content_padding_bottom",
	"",
	esc_html__( "Padding Bottom (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"tabs_content_padding_bottom",
	$tabs_content_padding_bottom
);

$tabs_vertical_content_subtitle = new PitchQodeTitle(
	"tabs_vertical_content_subtitle",
	esc_html__( "Vertical Tabs Content", 'pitch' )
);
$panel15->addChild(
	"tabs_vertical_content_subtitle",
	$tabs_vertical_content_subtitle
);

$group17 = new PitchQodeGroup(
	esc_html__( "Tabs Content Styles", 'pitch' ),
	esc_html__( "Define tab content style", 'pitch' )
);
$panel15->addChild(
	"group17",
	$group17
);

$row1 = new PitchQodeRow( true );
$group17->addChild(
	"row1",
	$row1
);

$tabs_vertical_content_text_size = new PitchQodeField(
	"textsimple",
	"tabs_vertical_content_text_size",
	"",
	esc_html__( "Tabs Content Text Size (px)", 'pitch' ),
	esc_html__( "Enter size for text in tab containers", 'pitch' ),
	array(),
	array( "col_width" => 3 )
);
$row1->addChild(
	"tabs_vertical_content_text_size",
	$tabs_vertical_content_text_size
);

$tabs_vertical_content_background_color = new PitchQodeField(
	"colorsimple",
	"tabs_vertical_content_background_color",
	"",
	esc_html__( "Tab Content Background", 'pitch' ),
	esc_html__( "Choose color for tab background", 'pitch' )
);
$row1->addChild(
	"tabs_vertical_content_background_color",
	$tabs_vertical_content_background_color
);

$tabs_vertical_content_border_color = new PitchQodeField(
	"colorsimple",
	"tabs_vertical_content_border_color",
	"",
	esc_html__( "Tab Content Border Color", 'pitch' ),
	esc_html__( "Choose border width for tab content", 'pitch' )
);
$row1->addChild(
	"tabs_vertical_content_border_color",
	$tabs_vertical_content_border_color
);

$group18 = new PitchQodeGroup(
	esc_html__( "Content Padding", 'pitch' ),
	esc_html__( "Define tab content padding", 'pitch' )
);
$panel15->addChild(
	"group18",
	$group18
);

$row1 = new PitchQodeRow( true );
$group18->addChild(
	"row1",
	$row1
);

$tabs_vertical_content_padding_left = new PitchQodeField(
	"textsimple",
	"tabs_vertical_content_padding_left",
	"",
	esc_html__( "Padding Left (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"tabs_vertical_content_padding_left",
	$tabs_vertical_content_padding_left
);

$tabs_vertical_content_padding_right = new PitchQodeField(
	"textsimple",
	"tabs_vertical_content_padding_right",
	"",
	esc_html__( "Padding Right (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"tabs_vertical_content_padding_right",
	$tabs_vertical_content_padding_right
);

$tabs_vertical_content_padding_top = new PitchQodeField(
	"textsimple",
	"tabs_vertical_content_padding_top",
	"",
	esc_html__( "Padding Top (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"tabs_vertical_content_padding_top",
	$tabs_vertical_content_padding_top
);

$tabs_vertical_content_padding_bottom = new PitchQodeField(
	"textsimple",
	"tabs_vertical_content_padding_bottom",
	"",
	esc_html__( "Padding Bottom (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"tabs_vertical_content_padding_bottom",
	$tabs_vertical_content_padding_bottom
);

//Tags

$panel18 = new PitchQodePanel(
	esc_html__( "Tags", 'pitch' ),
	"tags_panel"
);
$elementsPage->addChild(
	"panel18",
	$panel18
);

$group1 = new PitchQodeGroup(
	esc_html__( "Tags Style", 'pitch' ),
	esc_html__( "Define Tags style", 'pitch' )
);
$panel18->addChild(
	"group1",
	$group1
);
$row1 = new PitchQodeRow();
$group1->addChild(
	"row1",
	$row1
);

$tags_color = new PitchQodeField(
	"colorsimple",
	"tags_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"tags_color",
	$tags_color
);

$tags_font_size = new PitchQodeField(
	"textsimple",
	"tags_font_size",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"tags_font_size",
	$tags_font_size
);

$tags_line_height = new PitchQodeField(
	"textsimple",
	"tags_line_height",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"tags_line_height",
	$tags_line_height
);

$tags_text_transform = new PitchQodeField(
	"selectblanksimple",
	"tags_text_transform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	"tags_text_transform",
	$tags_text_transform
);

$row2 = new PitchQodeRow( true );
$group1->addChild(
	"row2",
	$row2
);

$tags_font_family = new PitchQodeField(
	"fontsimple",
	"tags_font_family",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"tags_font_family",
	$tags_font_family
);

$tags_font_style = new PitchQodeField(
	"selectblanksimple",
	"tags_font_style",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"tags_font_style",
	$tags_font_style
);

$tags_font_weight = new PitchQodeField(
	"selectblanksimple",
	"tags_font_weight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"tags_font_weight",
	$tags_font_weight
);

$tags_letter_spacing = new PitchQodeField(
	"textsimple",
	"tags_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"tags_letter_spacing",
	$tags_letter_spacing
);

$row3 = new PitchQodeRow( true );
$group1->addChild(
	"row3",
	$row3
);

$tags_hover_color = new PitchQodeField(
	"colorsimple",
	"tags_hover_color",
	"",
	esc_html__( "Hover Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row3->addChild(
	"tags_hover_color",
	$tags_hover_color
);

$tags_background_color = new PitchQodeField(
	"colorsimple",
	"tags_background_color",
	"",
	esc_html__( "Background color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row3->addChild(
	"tags_background_color",
	$tags_background_color
);

$tags_background_hover_color = new PitchQodeField(
	"colorsimple",
	"tags_background_hover_color",
	"",
	esc_html__( "Hover background color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row3->addChild(
	"tags_background_hover_color",
	$tags_background_hover_color
);

$tags_border_radius = new PitchQodeField(
	"textsimple",
	"tags_border_radius",
	"",
	esc_html__( "Border Radius (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row3->addChild(
	"tags_border_radius",
	$tags_border_radius
);

$row4 = new PitchQodeRow( true );
$group1->addChild(
	"row4",
	$row4
);

$tags_border_color = new PitchQodeField(
	"colorsimple",
	"tags_border_color",
	"",
	esc_html__( "Border Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row4->addChild(
	"tags_border_color",
	$tags_border_color
);

$tags_border_hover_color = new PitchQodeField(
	"colorsimple",
	"tags_border_hover_color",
	"",
	esc_html__( "Border Hover Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row4->addChild(
	"tags_border_hover_color",
	$tags_border_hover_color
);

$tags_border_width = new PitchQodeField(
	"textsimple",
	"tags_border_width",
	"",
	esc_html__( "Border Width (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row4->addChild(
	"tags_border_width",
	$tags_border_width
);

//Team

$panel20 = new PitchQodePanel(
	esc_html__( "Team", 'pitch' ),
	"team_panel"
);
$elementsPage->addChild(
	"panel20",
	$panel20
);

$group1 = new PitchQodeGroup(
	esc_html__( "Team Image Hover Overlay", 'pitch' ),
	esc_html__( "Choose team image hover overlay", 'pitch' )
);
$panel20->addChild(
	"group1",
	$group1
);
$row1 = new PitchQodeRow();
$group1->addChild(
	"row1",
	$row1
);
$team_hover_color = new PitchQodeField(
	"colorsimple",
	"team_hover_color",
	"",
	esc_html__( "Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"team_hover_color",
	$team_hover_color
);

$team_hover_color_opacity = new PitchQodeField(
	"textsimple",
	"team_hover_color_opacity",
	"",
	esc_html__( "Transparency (0=full - 1=opaque)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"team_hover_color_opacity",
	$team_hover_color_opacity
);

$team_hover_border_width = new PitchQodeField(
	"textsimple",
	"team_hover_border_width",
	"",
	esc_html__( "Border Width", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"team_hover_border_width",
	$team_hover_border_width
);

$team_hover_border_color = new PitchQodeField(
	"colorsimple",
	"team_hover_border_color",
	"",
	esc_html__( "Border Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"team_hover_border_color",
	$team_hover_border_color
);

$group2 = new PitchQodeGroup(
	esc_html__( "Team Member Name", 'pitch' ),
	esc_html__( "Define styles for team member name", 'pitch' )
);
$panel20->addChild(
	"group2",
	$group2
);
$row1 = new PitchQodeRow();
$group2->addChild(
	"row1",
	$row1
);

$team_color = new PitchQodeField(
	"colorsimple",
	"team_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"team_color",
	$team_color
);

$team_font_size = new PitchQodeField(
	"textsimple",
	"team_font_size",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"team_font_size",
	$team_font_size
);

$team_line_height = new PitchQodeField(
	"textsimple",
	"team_line_height",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"team_line_height",
	$team_line_height
);

$team_text_transform = new PitchQodeField(
	"selectblanksimple",
	"team_text_transform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	"team_text_transform",
	$team_text_transform
);

$row2 = new PitchQodeRow( true );
$group2->addChild(
	"row2",
	$row2
);

$team_font_family = new PitchQodeField(
	"fontsimple",
	"team_font_family",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"team_font_family",
	$team_font_family
);

$team_font_style = new PitchQodeField(
	"selectblanksimple",
	"team_font_style",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"team_font_style",
	$team_font_style
);

$team_font_weight = new PitchQodeField(
	"selectblanksimple",
	"team_font_weight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"team_font_weight",
	$team_font_weight
);

$team_letter_spacing = new PitchQodeField(
	"textsimple",
	"team_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"team_letter_spacing",
	$team_letter_spacing
);

$group5 = new PitchQodeGroup(
	esc_html__( "Team Member Position", 'pitch' ),
	esc_html__( "Define styles for team member position", 'pitch' )
);
$panel20->addChild(
	"group5",
	$group5
);

$row1 = new PitchQodeRow();
$group5->addChild(
	"row1",
	$row1
);

$team_position_color = new PitchQodeField(
	"colorsimple",
	"team_position_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"team_position_color",
	$team_position_color
);

$team_position_font_size = new PitchQodeField(
	"textsimple",
	"team_position_font_size",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"team_position_font_size",
	$team_position_font_size
);

$team_position_line_height = new PitchQodeField(
	"textsimple",
	"team_position_line_height",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"team_position_line_height",
	$team_position_line_height
);

$team_position_text_transform = new PitchQodeField(
	"selectblanksimple",
	"team_position_text_transform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	"team_position_text_transform",
	$team_position_text_transform
);

$row2 = new PitchQodeRow( true );
$group5->addChild(
	"row2",
	$row2
);

$team_position_font_family = new PitchQodeField(
	"fontsimple",
	"team_position_font_family",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"team_position_font_family",
	$team_position_font_family
);

$team_position_font_style = new PitchQodeField(
	"selectblanksimple",
	"team_position_font_style",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"team_position_font_style",
	$team_position_font_style
);

$team_position_font_weight = new PitchQodeField(
	"selectblanksimple",
	"team_position_font_weight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"team_position_font_weight",
	$team_position_font_weight
);

$team_position_letter_spacing = new PitchQodeField(
	"textsimple",
	"team_position_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"team_position_letter_spacing",
	$team_position_letter_spacing
);

$group6 = new PitchQodeGroup(
	esc_html__( "Team Member Description", 'pitch' ),
	esc_html__( "Define styles for team member description", 'pitch' )
);
$panel20->addChild(
	"group6",
	$group6
);

$row1 = new PitchQodeRow();
$group6->addChild(
	"row1",
	$row1
);

$team_description_color = new PitchQodeField(
	"colorsimple",
	"team_description_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"team_description_color",
	$team_description_color
);

$team_description_font_size = new PitchQodeField(
	"textsimple",
	"team_description_font_size",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"team_description_font_size",
	$team_description_font_size
);

$team_description_line_height = new PitchQodeField(
	"textsimple",
	"team_description_line_height",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"team_description_line_height",
	$team_description_line_height
);

$team_description_text_transform = new PitchQodeField(
	"selectblanksimple",
	"team_description_text_transform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	"team_description_text_transform",
	$team_description_text_transform
);

$row2 = new PitchQodeRow( true );
$group6->addChild(
	"row2",
	$row2
);

$team_description_font_family = new PitchQodeField(
	"fontsimple",
	"team_description_font_family",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"team_description_font_family",
	$team_description_font_family
);

$team_description_font_style = new PitchQodeField(
	"selectblanksimple",
	"team_description_font_style",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"team_description_font_style",
	$team_description_font_style
);

$team_description_font_weight = new PitchQodeField(
	"selectblanksimple",
	"team_description_font_weight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"team_description_font_weight",
	$team_description_font_weight
);

$team_description_letter_spacing = new PitchQodeField(
	"textsimple",
	"team_description_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"team_description_letter_spacing",
	$team_description_letter_spacing
);

$group3 = new PitchQodeGroup(
	esc_html__( "Social Icons", 'pitch' ),
	esc_html__( "Define Social Icons style", 'pitch' )
);
$panel20->addChild(
	"group3",
	$group3
);
$row1 = new PitchQodeRow();
$group3->addChild(
	"row1",
	$row1
);

$team_icon_color = new PitchQodeField(
	"colorsimple",
	"team_icon_color",
	"",
	esc_html__( "Icon Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"team_icon_color",
	$team_icon_color
);

$team_icon_hover_color = new PitchQodeField(
	"colorsimple",
	"team_icon_hover_color",
	"",
	esc_html__( "Icon Hover Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"team_icon_hover_color",
	$team_icon_hover_color
);

$team_icon_background_color = new PitchQodeField(
	"colorsimple",
	"team_icon_background_color",
	"",
	esc_html__( "Icon Background Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"team_icon_background_color",
	$team_icon_background_color
);

$team_icon_hover_background_color = new PitchQodeField(
	"colorsimple",
	"team_icon_hover_background_color",
	"",
	esc_html__( "Icon Hover Background Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"team_icon_hover_background_color",
	$team_icon_hover_background_color
);

$row2 = new PitchQodeRow( true );
$group3->addChild(
	"row2",
	$row2
);

$team_icon_border_color = new PitchQodeField(
	"colorsimple",
	"team_icon_border_color",
	"",
	esc_html__( "Icon Border Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"team_icon_border_color",
	$team_icon_border_color
);

$team_icon_hover_border_color = new PitchQodeField(
	"colorsimple",
	"team_icon_hover_border_color",
	"",
	esc_html__( "Icon Hover Border Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"team_icon_hover_border_color",
	$team_icon_hover_border_color
);

$team_icon_size = new PitchQodeField(
	"textsimple",
	"team_icon_size",
	"",
	esc_html__( "Icon Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"team_icon_size",
	$team_icon_size
);

$team_icon_shape_size = new PitchQodeField(
	"textsimple",
	"team_icon_shape_size",
	"",
	esc_html__( "Shape Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"team_icon_shape_size",
	$team_icon_shape_size
);

$row3 = new PitchQodeRow( true );
$group3->addChild(
	"row3",
	$row3
);

$team_icon_space = new PitchQodeField(
	"textsimple",
	"team_icon_space",
	"",
	esc_html__( "Space between Icons (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row3->addChild(
	"team_icon_space",
	$team_icon_space
);

$main_info_below_image_subtitle = new PitchQodeTitle(
	"main_info_below_image_subtitle",
	esc_html__( "Main Info Below Image - Type", 'pitch' )
);
$panel20->addChild(
	"main_info_below_image_subtitle",
	$main_info_below_image_subtitle
);

$group4 = new PitchQodeGroup(
	esc_html__( "Share Icon", 'pitch' ),
	esc_html__( "Define Share Icon style. This applies only if Between Image and Info is selected for Social Style", 'pitch' )
);
$panel20->addChild(
	"group4",
	$group4
);
$row1 = new PitchQodeRow();
$group4->addChild(
	"row1",
	$row1
);

$team_share_icon_color = new PitchQodeField(
	"colorsimple",
	"team_share_icon_color",
	"",
	esc_html__( "Icon Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"team_share_icon_color",
	$team_share_icon_color
);

$team_share_icon_hover_color = new PitchQodeField(
	"colorsimple",
	"team_share_icon_hover_color",
	"",
	esc_html__( "Icon Hover Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"team_share_icon_hover_color",
	$team_share_icon_hover_color
);

$team_share_icon_background_color = new PitchQodeField(
	"colorsimple",
	"team_share_icon_background_color",
	"",
	esc_html__( "Icon Background Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"team_share_icon_background_color",
	$team_share_icon_background_color
);

$team_share_icon_hover_background_color = new PitchQodeField(
	"colorsimple",
	"team_share_icon_hover_background_color",
	"",
	esc_html__( "Icon Hover Background Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"team_share_icon_hover_background_color",
	$team_share_icon_hover_background_color
);

$row2 = new PitchQodeRow( true );
$group4->addChild(
	"row2",
	$row2
);

$team_share_icon_border_color = new PitchQodeField(
	"colorsimple",
	"team_share_icon_border_color",
	"",
	esc_html__( "Icon Border Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"team_share_icon_border_color",
	$team_share_icon_border_color
);

$team_share_icon_hover_border_color = new PitchQodeField(
	"colorsimple",
	"team_share_icon_hover_border_color",
	"",
	esc_html__( "Icon Hover Border Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"team_share_icon_hover_border_color",
	$team_share_icon_hover_border_color
);

$team_share_icon_size = new PitchQodeField(
	"textsimple",
	"team_share_icon_size",
	"",
	esc_html__( "Icon Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"team_share_icon_size",
	$team_share_icon_size
);

$team_share_icon_shape_size = new PitchQodeField(
	"textsimple",
	"team_share_icon_shape_size",
	"",
	esc_html__( "Shape Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"team_share_icon_shape_size",
	$team_share_icon_shape_size
);

//Testimonials

$panel16 = new PitchQodePanel(
	esc_html__( "Testimonials", 'pitch' ),
	"testimonials_panel"
);
$elementsPage->addChild(
	"panel16",
	$panel16
);

$group4 = new PitchQodeGroup(
	esc_html__( "Testimonials Title", 'pitch' ),
	esc_html__( "Define Testimonials title style", 'pitch' )
);
$panel16->addChild(
	"group4",
	$group4
);
$row1 = new PitchQodeRow();
$group4->addChild(
	"row1",
	$row1
);

$testimonials_title_color = new PitchQodeField(
	"colorsimple",
	"testimonials_title_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"testimonials_title_color",
	$testimonials_title_color
);

$testimonials_title_font_size = new PitchQodeField(
	"textsimple",
	"testimonials_title_font_size",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"testimonials_title_font_size",
	$testimonials_title_font_size
);

$testimonials_title_line_height = new PitchQodeField(
	"textsimple",
	"testimonials_title_line_height",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"testimonials_title_line_height",
	$testimonials_title_line_height
);

$testimonials_title_text_transform = new PitchQodeField(
	"selectblanksimple",
	"testimonials_title_text_transform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	"testimonials_title_text_transform",
	$testimonials_title_text_transform
);

$row2 = new PitchQodeRow( true );
$group4->addChild(
	"row2",
	$row2
);

$testimonials_title_font_family = new PitchQodeField(
	"fontsimple",
	"testimonials_title_font_family",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"testimonials_title_font_family",
	$testimonials_title_font_family
);

$testimonials_title_font_style = new PitchQodeField(
	"selectblanksimple",
	"testimonials_title_font_style",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"testimonials_title_font_style",
	$testimonials_title_font_style
);

$testimonials_title_font_weight = new PitchQodeField(
	"selectblanksimple",
	"testimonials_title_font_weight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"testimonials_title_font_weight",
	$testimonials_title_font_weight
);

$testimonials_title_letter_spacing = new PitchQodeField(
	"textsimple",
	"testimonials_title_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"testimonials_title_letter_spacing",
	$testimonials_title_letter_spacing
);

$group1 = new PitchQodeGroup(
	esc_html__( "Testimonials Text", 'pitch' ),
	esc_html__( "Define Testimonials text style", 'pitch' )
);
$panel16->addChild(
	"group1",
	$group1
);
$row1 = new PitchQodeRow();
$group1->addChild(
	"row1",
	$row1
);

$testimonials_text_color = new PitchQodeField(
	"colorsimple",
	"testimonials_text_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"testimonials_text_color",
	$testimonials_text_color
);

$testimonials_text_font_size = new PitchQodeField(
	"textsimple",
	"testimonials_text_font_size",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"testimonials_text_font_size",
	$testimonials_text_font_size
);

$testimonials_text_line_height = new PitchQodeField(
	"textsimple",
	"testimonials_text_line_height",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"testimonials_text_line_height",
	$testimonials_text_line_height
);

$testimonials_text_text_transform = new PitchQodeField(
	"selectblanksimple",
	"testimonials_text_text_transform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	"testimonials_text_text_transform",
	$testimonials_text_text_transform
);

$row2 = new PitchQodeRow( true );
$group1->addChild(
	"row2",
	$row2
);

$testimonials_text_font_family = new PitchQodeField(
	"fontsimple",
	"testimonials_text_font_family",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"testimonials_text_font_family",
	$testimonials_text_font_family
);

$testimonials_text_font_style = new PitchQodeField(
	"selectblanksimple",
	"testimonials_text_font_style",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"testimonials_text_font_style",
	$testimonials_text_font_style
);

$testimonials_text_font_weight = new PitchQodeField(
	"selectblanksimple",
	"testimonials_text_font_weight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"testimonials_text_font_weight",
	$testimonials_text_font_weight
);

$testimonials_text_letter_spacing = new PitchQodeField(
	"textsimple",
	"testimonials_text_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"testimonials_text_letter_spacing",
	$testimonials_text_letter_spacing
);

$group2 = new PitchQodeGroup(
	esc_html__( "Testimonials Author Style", 'pitch' ),
	esc_html__( "Define Testimonials author style", 'pitch' )
);
$panel16->addChild(
	"group2",
	$group2
);
$row1 = new PitchQodeRow();
$group2->addChild(
	"row1",
	$row1
);

$testimonials_author_color = new PitchQodeField(
	"colorsimple",
	"testimonials_author_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"testimonials_author_color",
	$testimonials_author_color
);

$testimonials_author_font_size = new PitchQodeField(
	"textsimple",
	"testimonials_author_font_size",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"testimonials_author_font_size",
	$testimonials_author_font_size
);

$testimonials_author_line_height = new PitchQodeField(
	"textsimple",
	"testimonials_author_line_height",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"testimonials_author_line_height",
	$testimonials_author_line_height
);

$testimonials_author_text_transform = new PitchQodeField(
	"selectblanksimple",
	"testimonials_author_text_transform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	"testimonials_author_text_transform",
	$testimonials_author_text_transform
);

$row2 = new PitchQodeRow( true );
$group2->addChild(
	"row2",
	$row2
);

$testimonials_author_font_family = new PitchQodeField(
	"fontsimple",
	"testimonials_author_font_family",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"testimonials_author_font_family",
	$testimonials_author_font_family
);

$testimonials_author_font_style = new PitchQodeField(
	"selectblanksimple",
	"testimonials_author_font_style",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"testimonials_author_font_style",
	$testimonials_author_font_style
);

$testimonials_author_font_weight = new PitchQodeField(
	"selectblanksimple",
	"testimonials_author_font_weight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"testimonials_author_font_weight",
	$testimonials_author_font_weight
);

$testimonials_author_letter_spacing = new PitchQodeField(
	"textsimple",
	"testimonials_author_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"testimonials_author_letter_spacing",
	$testimonials_author_letter_spacing
);

$group6 = new PitchQodeGroup(
	esc_html__( "Testimonials Job Position Style", 'pitch' ),
	esc_html__( "Define testimonials job position author style", 'pitch' )
);
$panel16->addChild(
	"group6",
	$group6
);
$row1 = new PitchQodeRow();
$group6->addChild(
	"row1",
	$row1
);

$testimonials_author_job_position_color = new PitchQodeField(
	"colorsimple",
	"testimonials_author_job_position_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"testimonials_author_job_position_color",
	$testimonials_author_job_position_color
);

$testimonials_author_job_position_font_size = new PitchQodeField(
	"textsimple",
	"testimonials_author_job_position_font_size",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"testimonials_author_job_position_font_size",
	$testimonials_author_job_position_font_size
);

$testimonials_author_job_position_line_height = new PitchQodeField(
	"textsimple",
	"testimonials_author_job_position_line_height",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"testimonials_author_job_position_line_height",
	$testimonials_author_job_position_line_height
);

$testimonials_author_job_position_text_transform = new PitchQodeField(
	"selectblanksimple",
	"testimonials_author_job_position_text_transform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	"testimonials_author_job_position_text_transform",
	$testimonials_author_job_position_text_transform
);

$row2 = new PitchQodeRow( true );
$group6->addChild(
	"row2",
	$row2
);

$testimonials_author_job_position_font_family = new PitchQodeField(
	"fontsimple",
	"testimonials_author_job_position_font_family",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"testimonials_author_job_position_font_family",
	$testimonials_author_job_position_font_family
);

$testimonials_author_job_position_font_style = new PitchQodeField(
	"selectblanksimple",
	"testimonials_author_job_position_font_style",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"testimonials_author_job_position_font_style",
	$testimonials_author_job_position_font_style
);

$testimonials_author_job_position_font_weight = new PitchQodeField(
	"selectblanksimple",
	"testimonials_author_job_position_font_weight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"testimonials_author_job_position_font_weight",
	$testimonials_author_job_position_font_weight
);

$testimonials_author_job_position_letter_spacing = new PitchQodeField(
	"textsimple",
	"testimonials_author_job_position_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"testimonials_author_job_position_letter_spacing",
	$testimonials_author_job_position_letter_spacing
);

$group3 = new PitchQodeGroup(
	esc_html__( "Testimonials Navigation", 'pitch' ),
	esc_html__( "Define Testimonials navigation style", 'pitch' )
);
$panel16->addChild(
	"group3",
	$group3
);
$row1 = new PitchQodeRow();
$group3->addChild(
	"row1",
	$row1
);

$testimonials_navigation_width = new PitchQodeField(
	"textsimple",
	"testimonials_navigation_width",
	"",
	esc_html__( "Width (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"testimonials_navigation_width",
	$testimonials_navigation_width
);

$testimonials_navigation_height = new PitchQodeField(
	"textsimple",
	"testimonials_navigation_height",
	"",
	esc_html__( "Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"testimonials_navigation_height",
	$testimonials_navigation_height
);

$testimonials_navigation_active_width = new PitchQodeField(
	"textsimple",
	"testimonials_navigation_active_width",
	"",
	esc_html__( "Active Width (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"testimonials_navigation_active_width",
	$testimonials_navigation_active_width
);

$testimonials_navigation_active_height = new PitchQodeField(
	"textsimple",
	"testimonials_navigation_active_height",
	"",
	esc_html__( "Active Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"testimonials_navigation_active_height",
	$testimonials_navigation_active_height
);

$row2 = new PitchQodeRow( true );
$group3->addChild(
	"row2",
	$row2
);

$testimonials_navigation_color = new PitchQodeField(
	"colorsimple",
	"testimonials_navigation_color",
	"",
	esc_html__( "Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"testimonials_navigation_color",
	$testimonials_navigation_color
);

$testimonials_navigation_color_transparency = new PitchQodeField(
	"textsimple",
	"testimonials_navigation_color_transparency",
	"",
	esc_html__( "Color Transparency", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"testimonials_navigation_color_transparency",
	$testimonials_navigation_color_transparency
);

$testimonials_navigation_active_color = new PitchQodeField(
	"colorsimple",
	"testimonials_navigation_active_color",
	"",
	esc_html__( "Active Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"testimonials_navigation_active_color",
	$testimonials_navigation_active_color
);

$testimonials_navigation_active_color_transparency = new PitchQodeField(
	"textsimple",
	"testimonials_navigation_active_color_transparency",
	"",
	esc_html__( "Active Color Transparency", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"testimonials_navigation_active_color_transparency",
	$testimonials_navigation_active_color_transparency
);

$row3 = new PitchQodeRow( true );
$group3->addChild(
	"row3",
	$row3
);

$testimonials_navigation_border_radius = new PitchQodeField(
	"textsimple",
	"testimonials_navigation_border_radius",
	"",
	esc_html__( "Border radius (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row3->addChild(
	"testimonials_navigation_border_radius",
	$testimonials_navigation_border_radius
);

$testimonials_navigation_border_width = new PitchQodeField(
	"textsimple",
	"testimonials_navigation_border_width",
	"",
	esc_html__( "Border width (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row3->addChild(
	"testimonials_navigation_border_width",
	$testimonials_navigation_border_width
);

$testimonials_navigation_border_color = new PitchQodeField(
	"colorsimple",
	"testimonials_navigation_border_color",
	"",
	esc_html__( "Border color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row3->addChild(
	"testimonials_navigation_border_color",
	$testimonials_navigation_border_color
);

$testimonials_navigation_border_transparency = new PitchQodeField(
	"textsimple",
	"testimonials_navigation_border_transparency",
	"",
	esc_html__( "Border Color Transparency", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row3->addChild(
	"testimonials_navigation_border_transparency",
	$testimonials_navigation_border_transparency
);

$row4 = new PitchQodeRow();
$group3->addChild(
	"row4",
	$row4
);

$testimonials_navigation_active_border_color = new PitchQodeField(
	"colorsimple",
	"testimonials_navigation_active_border_color",
	"",
	esc_html__( "Active Border Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row4->addChild(
	"testimonials_navigation_active_border_color",
	$testimonials_navigation_active_border_color
);

$testimonials_navigation_active_border_transparency = new PitchQodeField(
	"textsimple",
	"testimonials_navigation_active_border_transparency",
	"",
	esc_html__( "Active Border Color Transparency", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row4->addChild(
	"testimonials_navigation_active_border_transparency",
	$testimonials_navigation_active_border_transparency
);

$testimonials_navigation_active_outer_border_color = new PitchQodeField(
	"colorsimple",
	"testimonials_navigation_active_outer_border_color",
	"",
	esc_html__( "Outer Border Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row4->addChild(
	"testimonials_navigation_active_outer_border_color",
	$testimonials_navigation_active_outer_border_color
);

$group_testimonials_image = new PitchQodeGroup(
	esc_html__( "Testimonials Image Style", 'pitch' ),
	esc_html__( "Define Testimonials Image Style", 'pitch' )
);
$panel16->addChild(
	"group_testimonials_image",
	$group_testimonials_image
);

$row1 = new PitchQodeRow( true );
$group_testimonials_image->addChild(
	"row1",
	$row1
);

$testimonials_image_border_radius = new PitchQodeField(
	"textsimple",
	"testimonials_image_border_radius",
	"",
	esc_html__( "Border Radius (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"testimonials_image_border_radius",
	$testimonials_image_border_radius
);

$group_testimonials_carousel_type_background = new PitchQodeGroup(
	esc_html__( "Testimonials Carousel Style", 'pitch' ),
	esc_html__( "Define Testimonials Carousel Style", 'pitch' )
);
$panel16->addChild(
	"group_testimonials_carousel_type_background",
	$group_testimonials_carousel_type_background
);

$row1 = new PitchQodeRow( true );
$group_testimonials_carousel_type_background->addChild(
	"row1",
	$row1
);

$testimonials_carousel_type_background_color = new PitchQodeField(
	"colorsimple",
	"testimonials_carousel_type_background_color",
	"",
	esc_html__( "Testimonial Background Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"testimonials_carousel_type_background_color",
	$testimonials_carousel_type_background_color
);

$group5 = new PitchQodeGroup(
	esc_html__( "Testimonials Arrows Style", 'pitch' ),
	esc_html__( "Define Testimonials Arrows Style", 'pitch' )
);
$panel16->addChild(
	"group5",
	$group5
);
$row1 = new PitchQodeRow();
$group5->addChild(
	"row1",
	$row1
);

$testimonials_arrows_button_width = new PitchQodeField(
	"textsimple",
	"testimonials_arrows_button_width",
	"",
	esc_html__( "Width (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"testimonials_arrows_button_width",
	$testimonials_arrows_button_width
);

$testimonials_arrows_button_height = new PitchQodeField(
	"textsimple",
	"testimonials_arrows_button_height",
	"",
	esc_html__( "Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"testimonials_arrows_button_height",
	$testimonials_arrows_button_height
);

$testimonials_arrows_type = new PitchQodeField(
	"selectblanksimple",
	"testimonials_arrows_type",
	"",
	esc_html__( "Arrow Type", 'pitch' ),
	esc_html__( "This option doesn't work for carousel type.", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'arrows_type' )
);
$row1->addChild(
	"testimonials_arrows_type",
	$testimonials_arrows_type
);

$testimonials_arrows_color = new PitchQodeField(
	"colorsimple",
	"testimonials_arrows_color",
	"",
	esc_html__( "Background Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"testimonials_arrows_color",
	$testimonials_arrows_color
);

$row2 = new PitchQodeRow( true );
$group5->addChild(
	"row2",
	$row2
);

$testimonials_arrows_color_transparency = new PitchQodeField(
	"textsimple",
	"testimonials_arrows_color_transparency",
	"",
	esc_html__( "Background Transparency (0=full - 1=opaque)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"testimonials_arrows_color_transparency",
	$testimonials_arrows_color_transparency
);

$testimonials_arrows_active_color = new PitchQodeField(
	"colorsimple",
	"testimonials_arrows_active_color",
	"",
	esc_html__( "Hover Background Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"testimonials_arrows_active_color",
	$testimonials_arrows_active_color
);

$testimonials_arrows_active_color_transparency = new PitchQodeField(
	"textsimple",
	"testimonials_arrows_active_color_transparency",
	"",
	esc_html__( "Background Hover Transparency (0=full - 1=opaque)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"testimonials_arrows_active_color_transparency",
	$testimonials_arrows_active_color_transparency
);

$testimonials_arrows_border_radius = new PitchQodeField(
	"textsimple",
	"testimonials_arrows_border_radius",
	"",
	esc_html__( "Border Radius (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"testimonials_arrows_border_radius",
	$testimonials_arrows_border_radius
);

$row3 = new PitchQodeRow( true );
$group5->addChild(
	"row3",
	$row3
);

$testimonials_arrows_border_width = new PitchQodeField(
	"textsimple",
	"testimonials_arrows_border_width",
	"",
	esc_html__( "Border Width (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row3->addChild(
	"testimonials_arrows_border_width",
	$testimonials_arrows_border_width
);

$testimonials_arrows_border_color = new PitchQodeField(
	"colorsimple",
	"testimonials_arrows_border_color",
	"",
	esc_html__( "Border Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row3->addChild(
	"testimonials_arrows_border_color",
	$testimonials_arrows_border_color
);

$testimonials_arrows_border_transparency = new PitchQodeField(
	"textsimple",
	"testimonials_arrows_border_transparency",
	"",
	esc_html__( "Border Transparency (0=full - 1=opaque)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row3->addChild(
	"testimonials_arrows_border_transparency",
	$testimonials_arrows_border_transparency
);

$testimonials_arrows_border_hover_color = new PitchQodeField(
	"colorsimple",
	"testimonials_arrows_border_hover_color",
	"",
	esc_html__( "Border Hover Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row3->addChild(
	"testimonials_arrows_border_hover_color",
	$testimonials_arrows_border_hover_color
);

$row4 = new PitchQodeRow( true );
$group5->addChild(
	"row4",
	$row4
);

$testimonials_arrows_border_hover_transparency = new PitchQodeField(
	"textsimple",
	"testimonials_arrows_border_hover_transparency",
	"",
	esc_html__( "Border Hover Transparency (0=full - 1=opaque)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row4->addChild(
	"testimonials_arrows_border_hover_transparency",
	$testimonials_arrows_border_hover_transparency
);

$testimonials_arrows_icon_color = new PitchQodeField(
	"colorsimple",
	"testimonials_arrows_icon_color",
	"",
	esc_html__( "Icon Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row4->addChild(
	"testimonials_arrows_icon_color",
	$testimonials_arrows_icon_color
);

$testimonials_arrows_transparency = new PitchQodeField(
	"textsimple",
	"testimonials_arrows_transparency",
	"",
	esc_html__( "Icon Transparency (0=full - 1=opaque)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row4->addChild(
	"testimonials_arrows_transparency",
	$testimonials_arrows_transparency
);

$testimonials_arrows_icon_hover_color = new PitchQodeField(
	"colorsimple",
	"testimonials_arrows_icon_hover_color",
	"",
	esc_html__( "Icon Hover Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row4->addChild(
	"testimonials_arrows_icon_hover_color",
	$testimonials_arrows_icon_hover_color
);

$row5 = new PitchQodeRow( true );
$group5->addChild(
	"row5",
	$row5
);

$testimonials_arrows_hover_transparency = new PitchQodeField(
	"textsimple",
	"testimonials_arrows_hover_transparency",
	"",
	esc_html__( "Icon Hover Transparency (0=full - 1=opaque)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row5->addChild(
	"testimonials_arrows_hover_transparency",
	$testimonials_arrows_hover_transparency
);

$testimonials_arrows_size = new PitchQodeField(
	"textsimple",
	"testimonials_arrows_size",
	"",
	esc_html__( "Icon Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row5->addChild(
	"testimonials_arrows_size",
	$testimonials_arrows_size
);

//Widget - Latest Posts Slider

$panel32 = new PitchQodePanel(
	esc_html__( "Widget - Latest Post Slider", 'pitch' ),
	"menu_latest_post"
);
$elementsPage->addChild(
	"panel32",
	$panel32
);

$group1 = new PitchQodeGroup(
	esc_html__( "Title style", 'pitch' ),
	esc_html__( "Latest Post Slider title style", 'pitch' )
);
$panel32->addChild(
	"group1",
	$group1
);

$row1 = new PitchQodeRow();
$group1->addChild(
	"row1",
	$row1
);

$menu_latest_post_widget_title_color = new PitchQodeField(
	"colorsimple",
	"menu_latest_post_widget_title_color",
	"",
	esc_html__( "Title Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"menu_latest_post_widget_title_color",
	$menu_latest_post_widget_title_color
);

$menu_latest_post_widget_title_hover_color = new PitchQodeField(
	"colorsimple",
	"menu_latest_post_widget_title_hover_color",
	"",
	esc_html__( "Title Hover Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"menu_latest_post_widget_title_hover_color",
	$menu_latest_post_widget_title_hover_color
);

$menu_latest_post_widget_title_font_size = new PitchQodeField(
	"textsimple",
	"menu_latest_post_widget_title_font_size",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"menu_latest_post_widget_title_font_size",
	$menu_latest_post_widget_title_font_size
);

$menu_latest_post_widget_title_line_height = new PitchQodeField(
	"textsimple",
	"menu_latest_post_widget_title_line_height",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"menu_latest_post_widget_title_line_height",
	$menu_latest_post_widget_title_line_height
);

$row2 = new PitchQodeRow();
$group1->addChild(
	"row2",
	$row2
);

$menu_latest_post_widget_title_text_transform = new PitchQodeField(
	"selectblanksimple",
	"menu_latest_post_widget_title_text_transform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row2->addChild(
	"menu_latest_post_widget_title_text_transform",
	$menu_latest_post_widget_title_text_transform
);

$menu_latest_post_widget_title_font_family = new PitchQodeField(
	"fontsimple",
	"menu_latest_post_widget_title_font_family",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"menu_latest_post_widget_title_font_family",
	$menu_latest_post_widget_title_font_family
);

$menu_latest_post_widget_title_font_style = new PitchQodeField(
	"selectblanksimple",
	"menu_latest_post_widget_title_font_style",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"menu_latest_post_widget_title_font_style",
	$menu_latest_post_widget_title_font_style
);

$menu_latest_post_widget_title_font_weight = new PitchQodeField(
	"selectblanksimple",
	"menu_latest_post_widget_title_font_weight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"menu_latest_post_widget_title_font_weight",
	$menu_latest_post_widget_title_font_weight
);

$row3 = new PitchQodeRow();
$group1->addChild(
	"row3",
	$row3
);

$menu_latest_post_widget_title_letter_spacing = new PitchQodeField(
	"textsimple",
	"menu_latest_post_widget_title_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row3->addChild(
	"menu_latest_post_widget_title_letter_spacing",
	$menu_latest_post_widget_title_letter_spacing
);

$group2 = new PitchQodeGroup(
	esc_html__( "Post Info style", 'pitch' ),
	esc_html__( "Latest Post Slider post info style", 'pitch' )
);
$panel32->addChild(
	"group2",
	$group2
);

$row1 = new PitchQodeRow();
$group2->addChild(
	"row1",
	$row1
);

$menu_latest_post_widget_post_info_color = new PitchQodeField(
	"colorsimple",
	"menu_latest_post_widget_post_info_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"menu_latest_post_widget_post_info_color",
	$menu_latest_post_widget_post_info_color
);

$menu_latest_post_widget_post_info_link_color = new PitchQodeField(
	"colorsimple",
	"menu_latest_post_widget_post_info_link_color",
	"",
	esc_html__( "Link Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"menu_latest_post_widget_post_info_link_color",
	$menu_latest_post_widget_post_info_link_color
);

$menu_latest_post_widget_post_info_link_hover_color = new PitchQodeField(
	"colorsimple",
	"menu_latest_post_widget_post_info_link_hover_color",
	"",
	esc_html__( "Link Hover Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"menu_latest_post_widget_post_info_link_hover_color",
	$menu_latest_post_widget_post_info_link_hover_color
);

$menu_latest_post_widget_post_info_font_size = new PitchQodeField(
	"textsimple",
	"menu_latest_post_widget_post_info_font_size",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"menu_latest_post_widget_post_info_font_size",
	$menu_latest_post_widget_post_info_font_size
);

$row2 = new PitchQodeRow();
$group2->addChild(
	"row2",
	$row2
);

$menu_latest_post_widget_post_info_line_height = new PitchQodeField(
	"textsimple",
	"menu_latest_post_widget_post_info_line_height",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"menu_latest_post_widget_post_info_line_height",
	$menu_latest_post_widget_post_info_line_height
);

$menu_latest_post_widget_post_info_text_transform = new PitchQodeField(
	"selectblanksimple",
	"menu_latest_post_widget_post_info_text_transform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row2->addChild(
	"menu_latest_post_widget_post_info_text_transform",
	$menu_latest_post_widget_post_info_text_transform
);

$menu_latest_post_widget_post_info_font_family = new PitchQodeField(
	"fontsimple",
	"menu_latest_post_widget_post_info_font_family",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"menu_latest_post_widget_post_info_font_family",
	$menu_latest_post_widget_post_info_font_family
);

$menu_latest_post_widget_post_info_font_style = new PitchQodeField(
	"selectblanksimple",
	"menu_latest_post_widget_post_info_font_style",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"menu_latest_post_widget_post_info_font_style",
	$menu_latest_post_widget_post_info_font_style
);

$row3 = new PitchQodeRow();
$group2->addChild(
	"row3",
	$row3
);

$menu_latest_post_widget_post_info_font_weight = new PitchQodeField(
	"selectblanksimple",
	"menu_latest_post_widget_post_info_font_weight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row3->addChild(
	"menu_latest_post_widget_post_info_font_weight",
	$menu_latest_post_widget_post_info_font_weight
);

$menu_latest_post_widget_post_info_letter_spacing = new PitchQodeField(
	"textsimple",
	"menu_latest_post_widget_post_info_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row3->addChild(
	"menu_latest_post_widget_post_info_letter_spacing",
	$menu_latest_post_widget_post_info_letter_spacing
);

$group3 = new PitchQodeGroup(
	esc_html__( "Spacing", 'pitch' ),
	esc_html__( "Define spacing for Latest Post Slider widget", 'pitch' )
);
$panel32->addChild(
	"group3",
	$group3
);

$row1 = new PitchQodeRow();
$group3->addChild(
	"row1",
	$row1
);

$menu_latest_post_widget_thumb_margin_bttm = new PitchQodeField(
	"textsimple",
	"menu_latest_post_widget_thumb_margin_bttm",
	"",
	esc_html__( "Margin Under Image (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"menu_latest_post_widget_thumb_margin_bttm",
	$menu_latest_post_widget_thumb_margin_bttm
);

$menu_latest_post_widget_title_margin_bttm = new PitchQodeField(
	"textsimple",
	"menu_latest_post_widget_title_margin_bttm",
	"",
	esc_html__( "Margin Under Title (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"menu_latest_post_widget_title_margin_bttm",
	$menu_latest_post_widget_title_margin_bttm
);

$menu_latest_post_widget_navigation = new PitchQodeTitle(
	"menu_latest_post_widget_navigation",
	esc_html__( "Navigation Buttons Style", 'pitch' )
);
$panel32->addChild(
	"menu_latest_post_widget_navigation",
	$menu_latest_post_widget_navigation
);

$group4 = new PitchQodeGroup(
	esc_html__( "Navigation Arrow Button Size", 'pitch' ),
	esc_html__( "Define arrow size", 'pitch' )
);
$panel32->addChild(
	"group4",
	$group4
);

$row1 = new PitchQodeRow();
$group4->addChild(
	"row1",
	$row1
);

$menu_latest_post_widget_arrow_width = new PitchQodeField(
	"textsimple",
	"menu_latest_post_widget_arrow_width",
	"",
	esc_html__( "Width (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"menu_latest_post_widget_arrow_width",
	$menu_latest_post_widget_arrow_width
);

$menu_latest_post_widget_arrow_height = new PitchQodeField(
	"textsimple",
	"menu_latest_post_widget_arrow_height",
	"",
	esc_html__( "Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"menu_latest_post_widget_arrow_height",
	$menu_latest_post_widget_arrow_height
);

$menu_latest_post_widget_arrow_size = new PitchQodeField(
	"textsimple",
	"menu_latest_post_widget_arrow_size",
	"",
	esc_html__( "Arrow Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"menu_latest_post_widget_arrow_size",
	$menu_latest_post_widget_arrow_size
);

$group5 = new PitchQodeGroup(
	esc_html__( "Navigation Arrow Color", 'pitch' ),
	esc_html__( "Define coloring for navigation arrows", 'pitch' )
);
$panel32->addChild(
	"group5",
	$group5
);

$row1 = new PitchQodeRow();
$group5->addChild(
	"row1",
	$row1
);

$menu_latest_post_widget_arrow_color = new PitchQodeField(
	"colorsimple",
	"menu_latest_post_widget_arrow_color",
	"",
	esc_html__( "Arrow Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"menu_latest_post_widget_arrow_color",
	$menu_latest_post_widget_arrow_color
);

$menu_latest_post_widget_arrow_transparency = new PitchQodeField(
	"textsimple",
	"menu_latest_post_widget_arrow_transparency",
	"",
	esc_html__( "Arrow Transparency (0-1)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"menu_latest_post_widget_arrow_transparency",
	$menu_latest_post_widget_arrow_transparency
);

$menu_latest_post_widget_arrow_hover_color = new PitchQodeField(
	"colorsimple",
	"menu_latest_post_widget_arrow_hover_color",
	"",
	esc_html__( "Arrow Hover Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"menu_latest_post_widget_arrow_hover_color",
	$menu_latest_post_widget_arrow_hover_color
);

$menu_latest_post_widget_arrow_hover_transparency = new PitchQodeField(
	"textsimple",
	"menu_latest_post_widget_arrow_hover_transparency",
	"",
	esc_html__( "Arrow Hover Transparency (0-1)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"menu_latest_post_widget_arrow_hover_transparency",
	$menu_latest_post_widget_arrow_hover_transparency
);

$group6 = new PitchQodeGroup(
	esc_html__( "Navigation Button Background", 'pitch' ),
	esc_html__( "Define navigation button background", 'pitch' )
);
$panel32->addChild(
	"group6",
	$group6
);

$row1 = new PitchQodeRow();
$group6->addChild(
	"row1",
	$row1
);

$menu_latest_post_widget_background_color = new PitchQodeField(
	"colorsimple",
	"menu_latest_post_widget_background_color",
	"",
	esc_html__( "Background Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"menu_latest_post_widget_background_color",
	$menu_latest_post_widget_background_color
);

$menu_latest_post_widget_background_transparency = new PitchQodeField(
	"textsimple",
	"menu_latest_post_widget_background_transparency",
	"",
	esc_html__( "Background Transparency (0-1)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"menu_latest_post_widget_background_transparency",
	$menu_latest_post_widget_background_transparency
);

$menu_latest_post_widget_background_hover_color = new PitchQodeField(
	"colorsimple",
	"menu_latest_post_widget_background_hover_color",
	"",
	esc_html__( "Background Hover Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"menu_latest_post_widget_background_hover_color",
	$menu_latest_post_widget_background_hover_color
);

$menu_latest_post_widget_background_hover_transparency = new PitchQodeField(
	"textsimple",
	"menu_latest_post_widget_background_hover_transparency",
	"",
	esc_html__( "Background Hover Transparency (0-1)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"menu_latest_post_widget_background_hover_transparency",
	$menu_latest_post_widget_background_hover_transparency
);

$group7 = new PitchQodeGroup(
	esc_html__( "Navigation Button Border", 'pitch' ),
	esc_html__( "Define border style", 'pitch' )
);
$panel32->addChild(
	"group7",
	$group7
);

$row1 = new PitchQodeRow();
$group7->addChild(
	"row1",
	$row1
);

$menu_latest_post_widget_border_width = new PitchQodeField(
	"textsimple",
	"menu_latest_post_widget_border_width",
	"",
	esc_html__( "Border width (px)", 'pitch' ),
	""
);
$row1->addChild(
	"menu_latest_post_widget_border_width",
	$menu_latest_post_widget_border_width
);

$menu_latest_post_widget_border_radius = new PitchQodeField(
	"textsimple",
	"menu_latest_post_widget_border_radius",
	"",
	esc_html__( "Border Radius (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"menu_latest_post_widget_border_radius",
	$menu_latest_post_widget_border_radius
);

$menu_latest_post_widget_border_color = new PitchQodeField(
	"colorsimple",
	"menu_latest_post_widget_border_color",
	"",
	esc_html__( "Border Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"menu_latest_post_widget_border_color",
	$menu_latest_post_widget_border_color
);

$menu_latest_post_widget_border_transparency = new PitchQodeField(
	"textsimple",
	"menu_latest_post_widget_border_transparency",
	"",
	esc_html__( "Border Transparency (0-1)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"menu_latest_post_widget_border_transparency",
	$menu_latest_post_widget_border_transparency
);

$row2 = new PitchQodeRow();
$group7->addChild(
	"row2",
	$row2
);

$menu_latest_post_widget_border_hover_color = new PitchQodeField(
	"colorsimple",
	"menu_latest_post_widget_border_hover_color",
	"",
	esc_html__( "Border Hover Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"menu_latest_post_widget_border_hover_color",
	$menu_latest_post_widget_border_hover_color
);

$menu_latest_post_widget_border_hover_transparency = new PitchQodeField(
	"textsimple",
	"menu_latest_post_widget_border_hover_transparency",
	"",
	esc_html__( "Border Hover Transparency (0-1)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"menu_latest_post_widget_border_hover_transparency",
	$menu_latest_post_widget_border_hover_transparency
);

$menu_latest_post_widget_position = new PitchQodeField(
	"text",
	"menu_latest_post_widget_position",
	"",
	esc_html__( "Navigation Buttons Position from Middle (px)", 'pitch' ),
	esc_html__( "Move navigation arrows down(positive value), or up (negative value) from the middle", 'pitch' ),
	array(),
	array( "col_width" => 3 )
);
$panel32->addChild(
	"menu_latest_post_widget_position",
	$menu_latest_post_widget_position
);
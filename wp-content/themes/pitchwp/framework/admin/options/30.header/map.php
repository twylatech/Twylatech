<?php

$headerandfooterPage = new QodePitchAdminPage(
	"2",
	esc_html__( "Header", 'pitch' ),
	"fa fa-header"
);
$pitch_qode_framework->qodeOptions->addAdminPage(
	"headerandfooter",
	$headerandfooterPage
);

// Header Position

$panel6 = new PitchQodePanel(
	esc_html__( "Header Type", 'pitch' ),
	"header_type_panel"
);
$headerandfooterPage->addChild(
	"panel6",
	$panel6
);
$header_type = new PitchQodeField(
	"select",
	"header_type",
	"top",
	esc_html__( "Choose Header Type", 'pitch' ),
	esc_html__( "Select the type of header you would like to use", 'pitch' ),
	array(
		"top" => esc_html__( "Top", 'pitch' ),
		"side" => esc_html__( "Side", 'pitch' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			"top"  => "#qodef_vertical_areas_panel",
			"side" => "#qodef_header_panel,#qodef_top_menu_panel,#qodef_header_top_panel,#qodef_enable_search_panel,#qodef_enable_side_area_panel,#qodef_enable_popup_menu_panel",
		),
		"show"       => array(
			"top"  => "#qodef_header_panel,#qodef_top_menu_panel,#qodef_header_top_panel,#qodef_enable_search_panel,#qodef_enable_side_area_panel,#qodef_enable_popup_menu_panel",
			"side" => "#qodef_vertical_areas_panel",
		)
	)
);
$panel6->addChild(
	"header_type",
	$header_type
);

// Header

$panel5 = new PitchQodePanel(
	esc_html__( "Header", 'pitch' ),
	"header_panel",
	"header_type",
	"",
	array( "side" )
);
$headerandfooterPage->addChild(
	"panel5",
	$panel5
);

$header_in_grid = new PitchQodeField(
	"yesno",
	"header_in_grid",
	"yes",
	esc_html__( "Header in Grid", 'pitch' ),
	esc_html__( "Enabling this option will display header content in grid", 'pitch' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "#qodef_header_padding_container",
		"dependence_show_on_yes" => "#qodef_header_in_grid_container"
	)
);
$panel5->addChild(
	"header_in_grid",
	$header_in_grid
);

$header_bottom_appearance = new PitchQodeField(
	"select",
	"header_bottom_appearance",
	"fixed",
	esc_html__( "Header Type", 'pitch' ),
	esc_html__( "Choose the header layout & behavior", 'pitch' ),
	array(
		"regular" => esc_html__( "Regular", 'pitch' ),
		"fixed" => esc_html__( "Fixed", 'pitch' ),
		"fixed fixed_minimal" => esc_html__( "Fixed Minimal", 'pitch' ),
		"fixed_hiding" => esc_html__( "Fixed Advanced", 'pitch' ),
		"fixed_top_header" => esc_html__( "Fixed Header Top", 'pitch' ),
		"stick" => esc_html__( "Sticky", 'pitch' ),
		"stick menu_bottom" => esc_html__( "Sticky Expanded", 'pitch' ),
		"stick_with_left_right_menu" => esc_html__( "Sticky Divided", 'pitch' ),
		"stick compound" => esc_html__( "Sticky Compound", 'pitch' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			"regular"                    => "#qodef_search_left_sidearea_right_container,#qodef_menu_vertical_position_for_sticky_container,#qodef_menu_background_color_container,#qodef_scroll_amount_for_sticky_container,#qodef_header_height_scroll,#qodef_header_one_scroll_resize,#qodef_header_height_sticky,#qodef_header_height_scroll_hidden,#qodef_header_background_color_scroll,#qodef_header_grid_background_color_scroll,#qodef_header_background_color_sticky,#qodef_header_grid_background_color_sticky,#qodef_header_background_transparency_scroll,#qodef_header_grid_background_transparency_scroll,#qodef_header_background_transparency_sticky,#qodef_header_grid_background_transparency_sticky,#qodef_scroll_amount_for_fixed_hiding_container,#qodef_menu_items_position_container",
			"fixed"                      => "#qodef_search_left_sidearea_right_container,#qodef_menu_vertical_position_for_sticky_container,#qodef_menu_background_color_container,#qodef_scroll_amount_for_sticky_container,#qodef_header_height_sticky,#qodef_header_height_scroll_hidden,#qodef_header_background_color_sticky,#qodef_header_grid_background_color_sticky,#qodef_header_background_transparency_sticky,#qodef_header_grid_background_transparency_sticky,#qodef_scroll_amount_for_fixed_hiding_container,#qodef_menu_items_position_container",
			"fixed_hiding"               => "#qodef_menu_vertical_position_for_sticky_container,#qodef_scroll_amount_for_sticky_container,#qodef_menu_position_container,#qodef_header_height_scroll,#qodef_header_one_scroll_resize,#qodef_header_height_sticky,#qodef_header_background_color_sticky,#qodef_header_grid_background_color_sticky,#qodef_header_background_transparency_sticky,#qodef_header_grid_background_transparency_sticky,#qodef_menu_items_position_container",
			"stick menu_bottom"          => "#qodef_search_left_sidearea_right_container,#qodef_menu_vertical_position_for_sticky_container,#qodef_menu_position_container,#qodef_header_height_scroll,#qodef_header_one_scroll_resize,#qodef_header_height_scroll_hidden,#qodef_header_background_transparency_scroll,#qodef_header_grid_background_transparency_scroll,#qodef_header_background_color_scroll,#qodef_header_grid_background_color_scroll,#qodef_scroll_amount_for_fixed_hiding_container,#qodef_menu_items_position_container",
			"stick_with_left_right_menu" => "#qodef_search_left_sidearea_right_container,#qodef_menu_background_color_container,#qodef_menu_position_container,#qodef_header_height_scroll,#qodef_header_one_scroll_resize,#qodef_header_height_scroll_hidden,#qodef_header_background_transparency_scroll,#qodef_header_grid_background_transparency_scroll,#qodef_header_background_color_scroll,#qodef_scroll_amount_for_fixed_hiding_container",
			"stick"                      => "#qodef_search_left_sidearea_right_container,#qodef_menu_vertical_position_for_sticky_container,#qodef_menu_background_color_container,#qodef_header_height_scroll,#qodef_header_one_scroll_resize,#qodef_header_height_scroll_hidden,#qodef_header_background_color_scroll,#qodef_header_grid_background_color_scroll,#qodef_header_background_transparency_scroll,#qodef_header_grid_background_transparency_scroll,#qodef_scroll_amount_for_fixed_hiding_container,#qodef_menu_items_position_container",
			"fixed_top_header"           => "#qodef_search_left_sidearea_right_container,#qodef_menu_vertical_position_for_sticky_container,#qodef_menu_vertical_position_for_sticky_container,#qodef_header_height_container,#qodef_disable_text_shadow_for_sticky_container,#qodef_menu_background_color_container,#qodef_menu_position_container,#qodef_header_top_area_scroll_container,#qodef_scroll_amount_for_sticky_container,#qodef_header_height_scroll,#qodef_header_one_scroll_resize,#qodef_header_height_sticky,#qodef_header_height_scroll_hidden,#qodef_header_background_color_scroll,#qodef_header_grid_background_color_scroll,#qodef_header_background_color_sticky,#qodef_header_grid_background_color_sticky,#qodef_header_background_transparency_scroll,#qodef_header_grid_background_transparency_scroll,#qodef_header_background_transparency_sticky,#qodef_header_grid_background_transparency_sticky,#qodef_scroll_amount_for_fixed_hiding_container,#qodef_menu_items_position_container,#enable_border_for_sticky_container",
			"fixed fixed_minimal"        => "#qodef_search_left_sidearea_right_container,#qodef_menu_vertical_position_for_sticky_container,#qodef_menu_position_container,#qodef_menu_background_color_container,#qodef_scroll_amount_for_sticky_container,#qodef_header_height_sticky,#qodef_header_height_scroll_hidden,#qodef_header_background_color_sticky,#qodef_header_grid_background_color_sticky,#qodef_header_background_transparency_sticky,#qodef_header_grid_background_transparency_sticky,#qodef_scroll_amount_for_fixed_hiding_container,#qodef_menu_items_position_container",
			"stick compound"             => "#qodef_search_left_sidearea_right_container,#qodef_menu_vertical_position_for_sticky_container,#qodef_menu_background_color_container,#qodef_menu_position_container,#qodef_header_height_scroll,#qodef_header_one_scroll_resize,#qodef_header_height_scroll_hidden,#qodef_header_background_color_scroll,#qodef_header_grid_background_color_scroll,#qodef_header_background_transparency_scroll,#qodef_header_grid_background_transparency_scroll,#qodef_scroll_amount_for_fixed_hiding_container,#qodef_menu_items_position_container",
		),
		"show"       => array(
			"regular"                    => "#qodef_header_height_container,#qodef_menu_position_container,#qodef_disable_text_shadow_for_sticky_container,#enable_border_for_sticky_container",
			"fixed"                      => "#qodef_header_height_container,#qodef_menu_position_container,#qodef_header_height_scroll,#qodef_header_one_scroll_resize,#qodef_header_background_color_scroll,#qodef_header_grid_background_color_scroll,#qodef_header_background_transparency_scroll,#qodef_header_grid_background_transparency_scroll,#qodef_disable_text_shadow_for_sticky_container,#enable_border_for_sticky_container",
			"stick"                      => "#qodef_header_height_container,#qodef_scroll_amount_for_sticky_container,#qodef_menu_position_container,#qodef_header_height_sticky,#qodef_header_background_color_sticky,#qodef_header_grid_background_color_sticky,#qodef_header_background_transparency_sticky,#qodef_header_grid_background_transparency_sticky,#qodef_disable_text_shadow_for_sticky_container,#enable_border_for_sticky_container",
			"stick menu_bottom"          => "#qodef_header_height_container,#qodef_menu_background_color_container,#qodef_scroll_amount_for_sticky_container,#qodef_header_height_sticky,#qodef_header_background_color_sticky,#qodef_header_grid_background_color_sticky,#qodef_header_background_transparency_sticky,#qodef_header_grid_background_transparency_sticky,#qodef_disable_text_shadow_for_sticky_container,#enable_border_for_sticky_container",
			"stick_with_left_right_menu" => "#qodef_menu_vertical_position_for_sticky_container,#qodef_header_height_container,#qodef_scroll_amount_for_sticky_container,#qodef_header_height_sticky,#qodef_header_background_color_sticky,#qodef_header_grid_background_color_sticky,#qodef_header_background_transparency_sticky,#qodef_header_grid_background_transparency_sticky,#qodef_menu_items_position_container,#qodef_disable_text_shadow_for_sticky_container,#enable_border_for_sticky_container",
			"fixed_hiding"               => "#qodef_search_left_sidearea_right_container,#qodef_header_height_container,#qodef_menu_background_color_container,#qodef_header_height_scroll_hidden,#qodef_header_background_color_scroll,#qodef_header_grid_background_color_scroll,#qodef_header_background_transparency_scroll,#qodef_header_grid_background_transparency_scroll,#qodef_scroll_amount_for_fixed_hiding_container,#qodef_disable_text_shadow_for_sticky_container,#enable_border_for_sticky_container",
			"fixed_top_header"           => "",
			"fixed fixed_minimal"        => "#qodef_header_height_container,#qodef_header_height_scroll,#qodef_header_one_scroll_resize,#qodef_header_background_color_scroll,#qodef_header_grid_background_color_scroll,#qodef_header_background_transparency_scroll,#qodef_header_grid_background_transparency_scroll,#qodef_disable_text_shadow_for_sticky_container,#enable_border_for_sticky_container",
			"stick compound"             => "#qodef_header_height_container,#qodef_scroll_amount_for_sticky_container,#qodef_header_height_sticky,#qodef_header_background_color_sticky,#qodef_header_grid_background_color_sticky,#qodef_header_background_transparency_sticky,#qodef_header_grid_background_transparency_sticky,#qodef_disable_text_shadow_for_sticky_container,#enable_border_for_sticky_container"
		)
	)
);

$panel5->addChild(
	"header_bottom_appearance",
	$header_bottom_appearance
);

$search_left_sidearea_right_container = new PitchQodeContainer(
	"search_left_sidearea_right_container",
	"header_bottom_appearance",
	"",
	array(
		"regular",
		"fixed",
		"fixed_top_header",
		"fixed fixed_minimal",
		"stick",
		"stick menu_bottom",
		"stick_with_left_right_menu",
		"fixed_top_header",
		"fixed fixed_minimal",
		"stick compound"
	)
);
$panel5->addChild(
	"search_left_sidearea_right_container",
	$search_left_sidearea_right_container
);

$search_left_sidearea_right = new PitchQodeField(
	"yesno",
	"search_left_sidearea_right",
	"no",
	esc_html__( "Place Search and Side Area Icons to Separate Sides of Header ", 'pitch' ),
	esc_html__( "Enabling this option will set search icon to left side of header and side area icon to right side of header", 'pitch' )
);
$search_left_sidearea_right_container->addChild(
	"search_left_sidearea_right",
	$search_left_sidearea_right
);

$scroll_amount_for_sticky_container = new PitchQodeContainer(
	"scroll_amount_for_sticky_container",
	"header_bottom_appearance",
	"",
	array(
		"regular",
		"fixed",
		"fixed_hiding",
		"fixed_top_header",
		"fixed fixed_minimal"
	)
);
$panel5->addChild(
	"scroll_amount_for_sticky_container",
	$scroll_amount_for_sticky_container
);

$scroll_amount_for_sticky = new PitchQodeField(
	"text",
	"scroll_amount_for_sticky",
	"",
	esc_html__( "Scroll Amount for Sticky (px)", 'pitch' ),
	esc_html__( "Enter scroll amount (in pixels) for Sticky Menu to appear", 'pitch' ),
	array(),
	array( "col_width" => 3 )
);
$scroll_amount_for_sticky_container->addChild(
	"scroll_amount_for_sticky",
	$scroll_amount_for_sticky
);

$hide_initial_sticky = new PitchQodeField(
	"yesno",
	"hide_initial_sticky",
	"no",
	esc_html__( "Hide Header Initially", 'pitch' ),
	esc_html__( "Enabling this option will initially hide the header, and it will only be displayed when the user scrolls down the page", 'pitch' )
);
$scroll_amount_for_sticky_container->addChild(
	"hide_initial_sticky",
	$hide_initial_sticky
);

$menu_items_position_container = new PitchQodeContainer(
	"menu_items_position_container",
	"header_bottom_appearance",
	"",
	array(
		"regular",
		"fixed",
		"fixed_hiding",
		"fixed_top_header",
		"fixed fixed_minimal",
		"stick",
		"stick menu_bottom",
		"stick compound"
	)
);
$panel5->addChild(
	"menu_items_position_container",
	$menu_items_position_container
);

$menu_items_position = new PitchQodeField(
	"select",
	"menu_items_position",
	"",
	esc_html__( "Menu Items Position", 'pitch' ),
	esc_html__( "Choose whether you would like the menu items to start from center of screen and extend outwards, or from the edges of the grid and extend inward", 'pitch' ),
	array(
		"from_center" => esc_html__( "From Center", 'pitch' ),
		"from_edges" => esc_html__( "From Edges of Grid", 'pitch' )
	)
);
$menu_items_position_container->addChild(
	"menu_items_position",
	$menu_items_position
);

$widgets_position = new PitchQodeField(
	"yesno",
	"widgets_position",
	"no",
	esc_html__( "Position Widgets on Edges of Grid", 'pitch' ),
	esc_html__( "Enabling this option will position header bottom widgets to the left/right edges of the grid", 'pitch' )
);
$menu_items_position_container->addChild(
	"widgets_position",
	$widgets_position
);

$menu_vertical_position_for_sticky_container = new PitchQodeContainer(
	"menu_vertical_position_for_sticky_container",
	"header_bottom_appearance",
	"",
	array(
		"regular",
		"fixed",
		"fixed_hiding",
		"fixed_top_header",
		"fixed fixed_minimal",
		"stick menu_bottom",
		"stick compound",
		"stick"
	)
);
$panel5->addChild(
	"menu_vertical_position_for_sticky_container",
	$menu_vertical_position_for_sticky_container
);

$menu_vertical_position_for_sticky = new PitchQodeField(
	"select",
	"menu_vertical_position_for_sticky",
	"",
	esc_html__( "Menu Vertical Alignment", 'pitch' ),
	esc_html__( "Choose the vertical alignment for the menu in the Sticky Divided header", 'pitch' ),
	array(
		"default" => esc_html__( "Default", 'pitch' ),
		"bottom" => esc_html__( "Bottom", 'pitch' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			"default" => "#qodef_menu_bottom_position_container"
		),
		"show"       => array(
			"bottom" => "#qodef_menu_bottom_position_container"
		)
	)
);
$menu_vertical_position_for_sticky_container->addChild(
	"menu_vertical_position_for_sticky",
	$menu_vertical_position_for_sticky
);

$menu_bottom_position_container = new PitchQodeContainer(
	"menu_bottom_position_container",
	"menu_vertical_position_for_sticky",
	"",
	array( "default" )
);
$panel5->addChild(
	"menu_bottom_position_container",
	$menu_bottom_position_container
);

$menu_bottom_position = new PitchQodeField(
	"text",
	"menu_bottom_position",
	"",
	esc_html__( "Menu Bottom Offset (px)", 'pitch' ),
	esc_html__( "Enter the amount of pixels you would like to move the menu from bottom of header", 'pitch' ),
	array(),
	array( "col_width" => 3 )
);
$menu_bottom_position_container->addChild(
	"menu_bottom_position",
	$menu_bottom_position
);

$scroll_amount_for_fixed_hiding_container = new PitchQodeContainer(
	"scroll_amount_for_fixed_hiding_container",
	"header_bottom_appearance",
	"",
	array(
		"regular",
		"fixed",
		"stick",
		"stick menu_bottom",
		"stick_with_left_right_menu",
		"fixed_top_header",
		"fixed fixed_minimal",
		"stick compound"
	)
);
$panel5->addChild(
	"scroll_amount_for_fixed_hiding_container",
	$scroll_amount_for_fixed_hiding_container
);
$scroll_amount_for_fixed_hiding = new PitchQodeField(
	"text",
	"scroll_amount_for_fixed_hiding",
	"",
	esc_html__( "Scroll Amount (px)", 'pitch' ),
	esc_html__( "Enter scroll amount (in pixels) for menu to hide", 'pitch' ),
	array(),
	array( "col_width" => 3 )
);
$scroll_amount_for_fixed_hiding_container->addChild(
	"scroll_amount_for_fixed_hiding",
	$scroll_amount_for_fixed_hiding
);

$menu_position_container = new PitchQodeContainer(
	"menu_position_container",
	"header_bottom_appearance",
	"",
	array(
		"stick menu_bottom",
		"stick_with_left_right_menu",
		"fixed_hiding",
		"fixed_top_header",
		"stick compound"
	)
);
$panel5->addChild(
	"menu_position_container",
	$menu_position_container
);

$menu_position = new PitchQodeField(
	"select",
	"menu_position",
	"",
	esc_html__( "Menu Position", 'pitch' ),
	esc_html__( "Choose a menu position (default is right alignment)", 'pitch' ),
	array(
		"-1" => esc_html__( "Right", 'pitch' ),
		"center" => esc_html__( "Center", 'pitch' ),
		"left" => esc_html__( "Left", 'pitch' )
	)
);
$menu_position_container->addChild(
	"menu_position",
	$menu_position
);

$center_logo_image = new PitchQodeField(
	"yesno",
	"center_logo_image",
	"no",
	esc_html__( "Center Logo", 'pitch' ),
	esc_html__( "Enabling this option will center logo and position it above menu", 'pitch' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_center_logo_image_container"
	)
);
$menu_position_container->addChild(
	"center_logo_image",
	$center_logo_image
);

$center_logo_image_container = new PitchQodeContainer(
	"center_logo_image_container",
	"center_logo_image",
	"no"
);
$menu_position_container->addChild(
	"center_logo_image_container",
	$center_logo_image_container
);

$search_left_sidearea_right_regular = new PitchQodeField(
	"yesno",
	"search_left_sidearea_right_regular",
	"no",
	esc_html__( "Place Search and Side Area Icons to Separate Sides of Header ", 'pitch' ),
	esc_html__( "Enabling this option will set search icon to left side of header and side area icon to right side of header", 'pitch' )
);
$center_logo_image_container->addChild(
	"search_left_sidearea_right_regular",
	$search_left_sidearea_right_regular
);

$enable_border_top_bottom_menu = new PitchQodeField(
	"yesno",
	"enable_border_top_bottom_menu",
	"no",
	esc_html__( "Enable Top/Bottom Border in Menu", 'pitch' ),
	"",
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_menu_border_container"
	)
);
$center_logo_image_container->addChild(
	"enable_border_top_bottom_menu",
	$enable_border_top_bottom_menu
);

$menu_border_container = new PitchQodeContainer(
	"menu_border_container",
	"enable_border_top_bottom_menu",
	"no"
);
$center_logo_image_container->addChild(
	"menu_border_container",
	$menu_border_container
);

$color_border_top_bottom_menu = new PitchQodeField(
	"color",
	"color_border_top_bottom_menu",
	"",
	esc_html__( "Border Color", 'pitch' ),
	esc_html__( "Choose a color for the top/bottom border in menu.", 'pitch' )
);
$menu_border_container->addChild(
	"color_border_top_bottom_menu",
	$color_border_top_bottom_menu
);

$disable_text_shadow_for_sticky_container = new PitchQodeContainer(
	"disable_text_shadow_for_sticky_container",
	"header_bottom_appearance",
	"",
	array( "fixed_top_header" )
);
$panel5->addChild(
	"disable_text_shadow_for_sticky_container",
	$disable_text_shadow_for_sticky_container
);

$disable_text_shadow_for_sticky = new PitchQodeField(
	"yesno",
	"disable_text_shadow_for_sticky",
	"yes",
	esc_html__( "Disable Shadow For Scrolled Header", 'pitch' ),
	esc_html__( "Enabling this option will display text shadow for scrolled/sticky header", 'pitch' )
);
$disable_text_shadow_for_sticky_container->addChild(
	"disable_text_shadow_for_sticky",
	$disable_text_shadow_for_sticky
);

$enable_border_for_sticky_container = new PitchQodeContainer(
	"enable_border_for_sticky_container",
	"header_bottom_appearance",
	"",
	array( "fixed_top_header" )
);
$panel5->addChild(
	"enable_border_for_sticky_container",
	$enable_border_for_sticky_container
);

$enable_border_for_sticky = new PitchQodeField(
	"yesno",
	"enable_border_for_sticky",
	"no",
	esc_html__( "Enable Border For Scrolled Header", 'pitch' ),
	esc_html__( "Enabling this option will display border for scrolled/sticky header", 'pitch' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_enable_border_bottom_color_for_sticky_container"
	)
);
$enable_border_for_sticky_container->addChild(
	"enable_border_for_sticky",
	$enable_border_for_sticky
);

$enable_border_bottom_color_for_sticky_container = new PitchQodeContainer(
	"enable_border_bottom_color_for_sticky_container",
	"enable_border_for_sticky",
	"no"
);
$panel5->addChild(
	"enable_border_color_for_sticky_container",
	$enable_border_bottom_color_for_sticky_container
);

$group1 = new PitchQodeGroup(
	esc_html__( "Border Style", 'pitch' ),
	esc_html__( "Choose style for border for scrolled/sticky header", 'pitch' )
);
$enable_border_bottom_color_for_sticky_container->addChild(
	"group1",
	$group1
);

$row1 = new PitchQodeRow();
$group1->addChild(
	"row1",
	$row1
);

$border_bottom_color_for_sticky = new PitchQodeField(
	"colorsimple",
	"border_bottom_color_for_sticky",
	"",
	esc_html__( "Border Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"border_bottom_color_for_sticky",
	$border_bottom_color_for_sticky
);

$border_bottom_width_for_sticky = new PitchQodeField(
	"textsimple",
	"border_bottom_width_for_sticky",
	"",
	esc_html__( "Border Width", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"border_bottom_width_for_sticky",
	$border_bottom_width_for_sticky
);

$border_bottom_for_sticky_in_grid = new PitchQodeField(
	"yesnosimple",
	"border_bottom_for_sticky_in_grid",
	"no",
	esc_html__( "Border in Grid", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"border_bottom_for_sticky_in_grid",
	$border_bottom_for_sticky_in_grid
);

$header_height_container = new PitchQodeContainerNoStyle(
	"header_height_container",
	"header_bottom_appearance",
	"",
	array( "fixed_top_header" )
);
$panel5->addChild(
	"header_height_container",
	$header_height_container
);

$group1 = new PitchQodeGroup(
	esc_html__( "Header Height", 'pitch' ),
	esc_html__( "Enter header height in pixels", 'pitch' )
);
$header_height_container->addChild(
	"group1",
	$group1
);

$row1 = new PitchQodeRow();
$group1->addChild(
	"row1",
	$row1
);

$header_height = new PitchQodeField(
	"textsimple",
	"header_height",
	"",
	esc_html__( "Initial (px)", 'pitch' ),
	esc_html__( "Initial header (px)", 'pitch' )
);
$row1->addChild(
	"header_height",
	$header_height
);

$header_height_scroll = new PitchQodeField(
	"textsimple",
	"header_height_scroll",
	"",
	esc_html__( "After Scroll (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	array(),
	array(),
	"header_bottom_appearance",
	array(
		"regular",
		"stick",
		"stick menu_bottom",
		"stick_with_left_right_menu",
		"fixed_hiding",
		"fixed_top_header",
		"stick compound"
	)
);
$row1->addChild(
	"header_height_scroll",
	$header_height_scroll
);

$header_one_scroll_resize = new PitchQodeField(
	"yesnosimple",
	"header_one_scroll_resize",
	"no",
	esc_html__( "Resize Header on Single Scroll", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	array(),
	array(),
	"header_bottom_appearance",
	array(
		"regular",
		"stick",
		"stick menu_bottom",
		"stick_with_left_right_menu",
		"fixed_hiding",
		"fixed_top_header",
		"stick compound"
	)
);
$row1->addChild(
	"header_one_scroll_resize",
	$header_one_scroll_resize
);

$header_height_sticky = new PitchQodeField(
	"textsimple",
	"header_height_sticky",
	"",
	esc_html__( "After Scroll (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	array(),
	array(),
	"header_bottom_appearance",
	array(
		"regular",
		"fixed",
		"fixed_hiding",
		"fixed_top_header",
		"fixed fixed_minimal"
	)
);
$row1->addChild(
	"header_height_sticky",
	$header_height_sticky
);

$header_height_scroll_hidden = new PitchQodeField(
	"textsimple",
	"header_height_scroll_hidden",
	"",
	esc_html__( "After Scroll (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	array(),
	array(),
	"header_bottom_appearance",
	array(
		"regular",
		"fixed",
		"stick",
		"stick menu_bottom",
		"stick_with_left_right_menu",
		"fixed_top_header",
		"fixed fixed_minimal",
		"stick compound"
	)
);
$row1->addChild(
	"header_height_scroll_hidden",
	$header_height_scroll_hidden
);

$header_padding_container = new PitchQodeContainer(
	"header_padding_container",
	"header_in_grid",
	"yes"
);
$panel5->addChild(
	"header_padding_container",
	$header_padding_container
);

$header_left_padding = new PitchQodeField(
	"text",
	"header_left_padding",
	"",
	esc_html__( "Header Left Padding", 'pitch' ),
	esc_html__( "Set left padding for header bottom appearance in px or % (default value is 45px)", 'pitch' ),
	array(),
	array( "col_width" => 3 )
);
$header_padding_container->addChild(
	"header_left_padding",
	$header_left_padding
);

$header_right_padding = new PitchQodeField(
	"text",
	"header_right_padding",
	"",
	esc_html__( "Header Right Padding", 'pitch' ),
	esc_html__( "Set right padding for header bottom appearance in px or % (default value is 45px)", 'pitch' ),
	array(),
	array( "col_width" => 3 )
);
$header_padding_container->addChild(
	"header_right_padding",
	$header_right_padding
);

$header_style = new PitchQodeField(
	"select",
	"header_style",
	"",
	esc_html__( "Header Skin", 'pitch' ),
	esc_html__( "Choose a header style to make header elements (logo, main menu, side menu button) in that predefined style", 'pitch' ),
	array(
		"-1"    => "",
		"light" => esc_html__( "Light", 'pitch' ),
		"dark" => esc_html__( "Dark", 'pitch' )
	)
);
$panel5->addChild(
	"header_style",
	$header_style
);

$enable_header_style_on_scroll = new PitchQodeField(
	"yesno",
	"enable_header_style_on_scroll",
	"no",
	esc_html__( "Enable Header Style on Scroll", 'pitch' ),
	esc_html__( "Enabling this option, header will change style depending on row settings for dark/light style", 'pitch' )
);
$panel5->addChild(
	"enable_header_style_on_scroll",
	$enable_header_style_on_scroll
);

$group2 = new PitchQodeGroup(
	esc_html__( "Header Background Color", 'pitch' ),
	esc_html__( "Choose a background color for header area", 'pitch' )
);
$panel5->addChild(
	"group2",
	$group2
);

$row1 = new PitchQodeRow();
$group2->addChild(
	"row1",
	$row1
);

$header_background_color = new PitchQodeField(
	"colorsimple",
	"header_background_color",
	"",
	esc_html__( "Initial", 'pitch' ),
	""
);
$row1->addChild(
	"header_background_color",
	$header_background_color
);

$header_background_color_scroll = new PitchQodeField(
	"colorsimple",
	"header_background_color_scroll",
	"",
	esc_html__( "After Scroll", 'pitch' ),
	"",
	array(),
	array(),
	"header_bottom_appearance",
	array(
		"regular",
		"stick",
		"stick menu_bottom",
		"stick_with_left_right_menu",
		"fixed_top_header",
		"stick compound"
	)
);
$row1->addChild(
	"header_background_color_scroll",
	$header_background_color_scroll
);

$header_background_color_sticky = new PitchQodeField(
	"colorsimple",
	"header_background_color_sticky",
	"",
	esc_html__( "After Scroll", 'pitch' ),
	"",
	array(),
	array(),
	"header_bottom_appearance",
	array(
		"regular",
		"fixed",
		"fixed_hiding",
		"fixed_top_header",
		"fixed fixed_minimal"
	)
);
$row1->addChild(
	"header_background_color_sticky",
	$header_background_color_sticky
);

$group3 = new PitchQodeGroup(
	esc_html__( "Header Transparency", 'pitch' ),
	esc_html__( "Choose a transparency for the header background color (0 = fully transparent, 1 = opaque)", 'pitch' )
);
$panel5->addChild(
	"group3",
	$group3
);

$row1 = new PitchQodeRow();
$group3->addChild(
	"row1",
	$row1
);

$header_background_transparency_initial = new PitchQodeField(
	"textsimple",
	"header_background_transparency_initial",
	"",
	esc_html__( "Initial", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"header_background_transparency_initial",
	$header_background_transparency_initial
);

$header_background_transparency_scroll = new PitchQodeField(
	"textsimple",
	"header_background_transparency_scroll",
	"",
	esc_html__( "After Scroll", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	array(),
	array(),
	"header_bottom_appearance",
	array(
		"regular",
		"stick",
		"stick menu_bottom",
		"stick_with_left_right_menu",
		"fixed_top_header",
		"stick compound"
	)
);
$row1->addChild(
	"header_background_transparency_scroll",
	$header_background_transparency_scroll
);

$header_background_transparency_sticky = new PitchQodeField(
	"textsimple",
	"header_background_transparency_sticky",
	"",
	esc_html__( "After Scroll", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	array(),
	array(),
	"header_bottom_appearance",
	array(
		"regular",
		"fixed",
		"fixed_hiding",
		"fixed_top_header",
		"fixed fixed_minimal"
	)
);
$row1->addChild(
	"header_background_transparency_sticky",
	$header_background_transparency_sticky
);

$group4 = new PitchQodeGroup(
	esc_html__( "Header Background Pattern", 'pitch' ),
	esc_html__( "Choose a pattern for the header background", 'pitch' )
);
$panel5->addChild(
	"group4",
	$group4
);

$row1 = new PitchQodeRow();
$group4->addChild(
	"row1",
	$row1
);

$header_pattern_image_initial = new PitchQodeField(
	"imagesimple",
	"header_pattern_image_initial",
	"",
	esc_html__( "Initial", 'pitch' ),
	""
);
$row1->addChild(
	"header_pattern_image_initial",
	$header_pattern_image_initial
);

$header_pattern_image_scroll = new PitchQodeField(
	"imagesimple",
	"header_pattern_image_scroll",
	"",
	esc_html__( "After Scroll", 'pitch' ),
	""
);
$row1->addChild(
	"header_pattern_image_scroll",
	$header_pattern_image_scroll
);

$header_in_grid_container = new PitchQodeContainerNoStyle(
	'header_in_grid_container',
	'header_in_grid',
	'no'
);
$panel5->addChild(
	'header_in_grid_container',
	$header_in_grid_container
);

$group6 = new PitchQodeGroup(
	esc_html__( 'Header Grid Content Background Color', 'pitch' ),
	esc_html__( 'Choose a background color for header grid content area', 'pitch' )
);
$header_in_grid_container->addChild(
	'group6',
	$group6
);

$row1 = new PitchQodeRow();
$group6->addChild(
	'row1',
	$row1
);

$header_grid_background_color = new PitchQodeField(
	"colorsimple",
	"header_grid_background_color",
	"",
	esc_html__( "Initial", 'pitch' ),
	""
);
$row1->addChild(
	"header_grid_background_color",
	$header_grid_background_color
);

$header_grid_background_color_scroll = new PitchQodeField(
	"colorsimple",
	"header_grid_background_color_scroll",
	"",
	esc_html__( "After Scroll", 'pitch' ),
	"",
	array(),
	array(),
	"header_bottom_appearance",
	array(
		"regular",
		"stick",
		"stick menu_bottom",
		"stick_with_left_right_menu",
		"fixed_top_header",
		"stick compound"
	)
);
$row1->addChild(
	"header_grid_background_color_scroll",
	$header_grid_background_color_scroll
);

$header_grid_background_color_sticky = new PitchQodeField(
	"colorsimple",
	"header_grid_background_color_sticky",
	"",
	esc_html__( "After Scroll", 'pitch' ),
	"",
	array(),
	array(),
	"header_bottom_appearance",
	array(
		"regular",
		"fixed",
		"fixed_hiding",
		"fixed_top_header",
		"fixed fixed_minimal"
	)
);
$row1->addChild(
	"header_grid_background_color_sticky",
	$header_grid_background_color_sticky
);

$group7 = new PitchQodeGroup(
	esc_html__( 'Header Grid Content Transparency', 'pitch' ),
	esc_html__( 'Choose a transparency for the header background color (0 = fully transparent, 1 = opaque', 'pitch' )
);
$header_in_grid_container->addChild(
	'group7',
	$group7
);

$row2 = new PitchQodeRow();
$group7->addChild(
	"row2",
	$row2
);

$header_grid_background_transparency_initial = new PitchQodeField(
	"textsimple",
	"header_grid_background_transparency_initial",
	"",
	esc_html__( "Initial", 'pitch' ),
	""
);
$row2->addChild(
	"header_grid_background_transparency_initial",
	$header_grid_background_transparency_initial
);

$header_grid_background_transparency_scroll = new PitchQodeField(
	"textsimple",
	"header_grid_background_transparency_scroll",
	"",
	esc_html__( "After Scroll", 'pitch' ),
	"",
	array(),
	array(),
	"header_bottom_appearance",
	array(
		"regular",
		"stick",
		"stick menu_bottom",
		"stick_with_left_right_menu",
		"fixed_top_header",
		"stick compound"
	)
);
$row2->addChild(
	"header_grid_background_transparency_scroll",
	$header_grid_background_transparency_scroll
);

$header_grid_background_transparency_sticky = new PitchQodeField(
	"textsimple",
	"header_grid_background_transparency_sticky",
	"",
	esc_html__( "After Scroll", 'pitch' ),
	"",
	array(),
	array(),
	"header_bottom_appearance",
	array(
		"regular",
		"fixed",
		"fixed_hiding",
		"fixed_top_header",
		"fixed fixed_minimal"
	)
);
$row2->addChild(
	"header_grid_background_transparency_sticky",
	$header_grid_background_transparency_sticky
);

$group8 = new PitchQodeGroup(
	esc_html__( 'Header in Grid Padding', 'pitch' ),
	esc_html__( 'Left and right padding for header in grid', 'pitch' )
);
$header_in_grid_container->addChild(
	'group8',
	$group8
);

$row3 = new PitchQodeRow();
$group8->addChild(
	'row3',
	$row3
);

$header_in_grid_padding_left = new PitchQodeField(
	'textsimple',
	'header_in_grid_padding_left',
	'',
	esc_html__( 'Left (px)', 'pitch' ),
	''
);
$row3->addChild(
	'header_in_grid_padding_left',
	$header_in_grid_padding_left
);

$header_in_grid_padding_right = new PitchQodeField(
	'textsimple',
	'header_in_grid_padding_right',
	'',
	esc_html__( 'Right (px)', 'pitch' ),
	''
);
$row3->addChild(
	'header_in_grid_padding_right',
	$header_in_grid_padding_right
);

$enable_header_top_border = new PitchQodeField(
	"yesno",
	"enable_header_top_border",
	"no",
	esc_html__( "Enable Header Top Border", 'pitch' ),
	"",
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_header_top_border_container"
	)
);
$panel5->addChild(
	"enable_header_top_border",
	$enable_header_top_border
);

$header_top_border_container = new PitchQodeContainer(
	"header_top_border_container",
	"enable_header_top_border",
	"no"
);
$panel5->addChild(
	"header_top_border_container",
	$header_top_border_container
);

$header_top_border_width = new PitchQodeField(
	"text",
	"header_top_border_width",
	"",
	esc_html__( "Header Top Border Width (px)", 'pitch' ),
	esc_html__( "Choose a width for the header top border. Note: If width has not been set, border top will not be displayed", 'pitch' ),
	array(),
	array( "col_width" => 3 )
);
$header_top_border_container->addChild(
	"header_top_border_width",
	$header_top_border_width
);

$header_top_border_color = new PitchQodeField(
	"color",
	"header_top_border_color",
	"",
	esc_html__( "Header Top Border Color", 'pitch' ),
	esc_html__( "Choose a color for the header top border. ", 'pitch' )
);
$header_top_border_container->addChild(
	"header_top_border_color",
	$header_top_border_color
);

$header_top_border_transparency = new PitchQodeField(
	"text",
	"header_top_border_transparency",
	"",
	esc_html__( "Header Top Border Transparency", 'pitch' ),
	esc_html__( "Choose a transparency for the header border color (0 = fully transparent, 1 = opaque). Note: Works only if Header top Border Color is filled", 'pitch' ),
	array(),
	array( "col_width" => 3 )
);
$header_top_border_container->addChild(
	"header_top_border_transparency",
	$header_top_border_transparency
);

$enable_header_bottom_border = new PitchQodeField(
	"yesno",
	"enable_header_bottom_border",
	"no",
	esc_html__( "Enable Header Bottom Border", 'pitch' ),
	"",
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_header_bottom_border_container"
	)
);
$panel5->addChild(
	"enable_header_bottom_border",
	$enable_header_bottom_border
);

$header_bottom_border_container = new PitchQodeContainer(
	"header_bottom_border_container",
	"enable_header_bottom_border",
	"no"
);
$panel5->addChild(
	"header_bottom_border_container",
	$header_bottom_border_container
);

$header_bottom_border_width = new PitchQodeField(
	"text",
	"header_bottom_border_width",
	"",
	esc_html__( "Header Bottom Border Width (px)", 'pitch' ),
	esc_html__( "Choose a width for the header bottom  border. Note: If width has not been set, border bottom will not be displayed", 'pitch' ),
	array(),
	array( "col_width" => 3 )
);
$header_bottom_border_container->addChild(
	"header_bottom_border_width",
	$header_bottom_border_width
);

$header_bottom_border_color = new PitchQodeField(
	"color",
	"header_bottom_border_color",
	"",
	esc_html__( "Header Bottom Border Color", 'pitch' ),
	esc_html__( "Choose a color for the header bottom border.", 'pitch' )
);
$header_bottom_border_container->addChild(
	"header_bottom_border_color",
	$header_bottom_border_color
);

$header_botom_border_transparency = new PitchQodeField(
	"text",
	"header_botom_border_transparency",
	"",
	esc_html__( "Header Bottom Border Transparency", 'pitch' ),
	esc_html__( "Choose a transparency for the header border color (0 = fully transparent, 1 = opaque). Note: Works only if Header Bottom Border Color is filled", 'pitch' ),
	array(),
	array( "col_width" => 3 )
);
$header_bottom_border_container->addChild(
	"header_botom_border_transparency",
	$header_botom_border_transparency
);

$header_botom_border_in_grid = new PitchQodeField(
	"yesno",
	"header_botom_border_in_grid",
	"no",
	esc_html__( "Enable Header Bottom Border in Grid", 'pitch' ),
	esc_html__( "Enabling this option will set header border bottom width in grid", 'pitch' )
);
$header_bottom_border_container->addChild(
	"header_botom_border_in_grid",
	$header_botom_border_in_grid
);

// Menu

$panel4 = new PitchQodePanel(
	esc_html__( "Top Menu", 'pitch' ),
	"top_menu_panel",
	"header_type",
	"",
	array( "side" )
);
$headerandfooterPage->addChild(
	"panel4",
	$panel4
);

$menu_appearance = new PitchQodeField(
	"select",
	"menu_appearance",
	"default",
	esc_html__( "Menu Appearance", 'pitch' ),
	esc_html__( "Choose menu appearance style", 'pitch' ),
	array(
		"default" => esc_html__( "Default", 'pitch' ),
		"top_menu_slide_down" => esc_html__( "Slide Down", 'pitch' )
	)
);
$panel4->addChild(
	"menu_appearance",
	$menu_appearance
);

$menu_background_color_container = new PitchQodeContainer(
	"menu_background_color_container",
	"header_bottom_appearance",
	"",
	array(
		"regular",
		"fixed",
		"stick",
		"stick_with_left_right_menu",
		"fixed_top_header",
		"fixed fixed_minimal",
		"stick compound"
	)
);
$panel4->addChild(
	"menu_background_color_container",
	$menu_background_color_container
);

$menu_background_color = new PitchQodeField(
	"color",
	"menu_background_color",
	"",
	esc_html__( "Background Color of 1st Level Menu", 'pitch' ),
	esc_html__( "Choose a color for the menu background (works only for Fixed Advanced and Sticky Expanded header types)", 'pitch' )
);
$menu_background_color_container->addChild(
	"menu_background_color",
	$menu_background_color
);

$enable_menu_top_bottom_border = new PitchQodeField(
	"yesno",
	"enable_menu_top_bottom_border",
	"no",
	esc_html__( "Enable Top/Bottom Borders in 1st Level Menu", 'pitch' ),
	esc_html__( "Enabling this option will display top and bottom borders around 1st level menu (works only for Fixed Advanced and Sticky Expanded header types)", 'pitch' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_menu_top_bottom_border_container"
	)
);
$menu_background_color_container->addChild(
	"enable_menu_top_bottom_border",
	$enable_menu_top_bottom_border
);
$menu_top_bottom_border_container = new PitchQodeContainer(
	"menu_top_bottom_border_container",
	"enable_menu_top_bottom_border",
	"no"
);
$menu_background_color_container->addChild(
	"menu_top_bottom_border_container",
	$menu_top_bottom_border_container
);
$color_menu_top_bottom_border = new PitchQodeField(
	"color",
	"color_menu_top_bottom_border",
	"",
	esc_html__( "Border Color", 'pitch' ),
	esc_html__( "Choose a color for the top/bottom border in 1st level menu.", 'pitch' )
);
$menu_top_bottom_border_container->addChild(
	"color_menu_top_bottom_border",
	$color_menu_top_bottom_border
);

$enable_menu_wide_background = new PitchQodeField(
	"yesno",
	"enable_menu_wide_background",
	"no",
	esc_html__( "Enable wide background in 1st Level Menu", 'pitch' ),
	esc_html__( "Enabling this option will show wide background or borders in 1st level menu (works only for Fixed Advanced and Sticky Expanded header types)", 'pitch' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => ""
	)
);
$menu_background_color_container->addChild(
	"enable_menu_wide_background",
	$enable_menu_wide_background
);

$menu_item_icon_position = new PitchQodeField(
	"select",
	"menu_item_icon_position",
	"left",
	esc_html__( "Icon Position in 1st Level Menu", 'pitch' ),
	esc_html__( "Choose position of icon selected in Appearance->Menu->Menu Structure", 'pitch' ),
	array(
		"left" => esc_html__( "Left", 'pitch' ),
		"top" => esc_html__( "Top", 'pitch' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			"left" => "#qodef_menu_item_icon_position_container"
		),
		"show"       => array(
			"top" => "#qodef_menu_item_icon_position_container"
		)
	)
);
$panel4->addChild(
	"menu_item_icon_position",
	$menu_item_icon_position
);
$menu_item_icon_position_container = new PitchQodeContainer(
	"menu_item_icon_position_container",
	"menu_item_icon_position",
	"left"
);
$panel4->addChild(
	"menu_item_icon_position_container",
	$menu_item_icon_position_container
);

$menu_item_icon_size = new PitchQodeField(
	"text",
	"menu_item_icon_size",
	"",
	esc_html__( "Icon Size (px)", 'pitch' ),
	esc_html__( "Enter icon size in pixels", 'pitch' ),
	array(),
	array( "col_width" => 3 )
);
$menu_item_icon_position_container->addChild(
	"menu_item_icon_size",
	$menu_item_icon_size
);

$menu_item_style = new PitchQodeField(
	"select",
	"menu_item_style",
	"small_item",
	esc_html__( "Item Height in 1st Level Menu", 'pitch' ),
	esc_html__( "Choose menu item height", 'pitch' ),
	array(
		"small_item" => esc_html__( "Small", 'pitch' ),
		"large_item" => esc_html__( "Big", 'pitch' )
	)
);
$panel4->addChild(
	"menu_item_style",
	$menu_item_style
);

$menu_item_hover_animation = new PitchQodeField(
	"select",
	"menu_item_hover_animation",
	"",
	esc_html__( "Hover Animation in 1st Level Menu", 'pitch' ),
	esc_html__( "Choose hover animation for items in 1st level", 'pitch' ),
	array(
		"default" => esc_html__( "Default", 'pitch' ),
		"underline_follow" => esc_html__( "Underline Follows", 'pitch' ),
		"roll" => esc_html__( "Spinning", 'pitch' ),
		"line_under" => esc_html__( "Underline Lift", 'pitch' ),
		"line_spread" => esc_html__( "Underline Stretch", 'pitch' )
	)
);
$panel4->addChild(
	"menu_item_hover_animation",
	$menu_item_hover_animation
);

$enable_manu_item_border = new PitchQodeField(
	"yesno",
	"enable_manu_item_border",
	"no",
	esc_html__( "Enable 1st Level Menu Item Borders", 'pitch' ),
	esc_html__( "Enabling this option will display border around menu items", 'pitch' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_menu_item_border_container"
	)
);
$panel4->addChild(
	"enable_manu_item_border",
	$enable_manu_item_border
);

$menu_item_border_container = new PitchQodeContainer(
	"menu_item_border_container",
	"enable_manu_item_border",
	"no"
);
$panel4->addChild(
	"menu_item_border_container",
	$menu_item_border_container
);

$menu_item_border_style = new PitchQodeField(
	"select",
	"menu_item_border_style",
	"",
	esc_html__( "Menu Item Border", 'pitch' ),
	esc_html__( "Visible only if border width and one of the border color fields are filled.", 'pitch' ),
	array(
		"all_borders" => esc_html__( "All Borders", 'pitch' ),
		"top_bottom_borders" => esc_html__( "Top/Bottom Borders", 'pitch' ),
		"top_border" => esc_html__( "Top Border", 'pitch' ),
		"right_border" => esc_html__( "Right Border", 'pitch' ),
		"bottom_border" => esc_html__( "Bottom Border", 'pitch' ),
		"bottom_border_double" => esc_html__( "Bottom Double Borders", 'pitch' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			"bottom_border_double" => "#qodef_menu_item_border_width_container"
		),
		"show"       => array(
			"all_borders"        => "#qodef_menu_item_border_width_container",
			"top_bottom_borders" => "#qodef_menu_item_border_width_container",
			"top_border"         => "#qodef_menu_item_border_width_container",
			"right_border"       => "#qodef_menu_item_border_width_container",
			"bottom_border"      => "#qodef_menu_item_border_width_container"
		)
	)
);
$menu_item_border_container->addChild(
	"menu_item_border_style",
	$menu_item_border_style
);

$menu_item_border_width_container = new PitchQodeContainer(
	"menu_item_border_width_container",
	"menu_item_border_style",
	"bottom_border_double"
);
$menu_item_border_container->addChild(
	"menu_item_border_width_container",
	$menu_item_border_width_container
);
$menu_item_border_width = new PitchQodeField(
	"text",
	"menu_item_border_width",
	"",
	esc_html__( "Border Width (px)", 'pitch' ),
	esc_html__( "Enter border width (in pixels) ", 'pitch' ),
	array(),
	array( "col_width" => 3 )
);
$menu_item_border_width_container->addChild(
	"menu_item_border_width",
	$menu_item_border_width
);

$menu_item_border_radius = new PitchQodeField(
	"text",
	"menu_item_border_radius",
	"",
	esc_html__( "Border Radius", 'pitch' ),
	esc_html__( "Enter border radius (px)", 'pitch' ),
	array(),
	array( "col_width" => 3 )
);
$menu_item_border_width_container->addChild(
	"menu_item_border_radius",
	$menu_item_border_radius
);

$menu_item_border_style_style = new PitchQodeField(
	"select",
	"menu_item_border_style_style",
	"solid",
	esc_html__( "Border Style", 'pitch' ),
	esc_html__( "Choose border style", 'pitch' ),
	array(
		"solid" => esc_html__( "Solid", 'pitch' ),
		"dotted" => esc_html__( "Dotted", 'pitch' ),
		"dashed" => esc_html__( "Dashed", 'pitch' )
	)
);
$menu_item_border_width_container->addChild(
	"menu_item_border_style_style",
	$menu_item_border_style_style
);
$group1 = new PitchQodeGroup(
	esc_html__( "Border Color", 'pitch' ),
	esc_html__( "Choose a color for border", 'pitch' )
);
$menu_item_border_container->addChild(
	"group1",
	$group1
);
$row1 = new PitchQodeRow();
$group1->addChild(
	"row1",
	$row1
);
$menu_item_border_color = new PitchQodeField(
	"colorsimple",
	"menu_item_border_color",
	"",
	esc_html__( "Border Color", 'pitch' ),
	esc_html__( "Choose border color", 'pitch' )
);
$row1->addChild(
	"menu_item_border_color",
	$menu_item_border_color
);
$menu_item_hover_border_color = new PitchQodeField(
	"colorsimple",
	"menu_item_hover_border_color",
	"",
	esc_html__( "Border Hover Color", 'pitch' ),
	esc_html__( "Choose border color on menu item hover", 'pitch' )
);
$row1->addChild(
	"menu_item_hover_border_color",
	$menu_item_hover_border_color
);
$menu_item_active_border_color = new PitchQodeField(
	"colorsimple",
	"menu_item_active_border_color",
	"",
	esc_html__( "Border Active Color", 'pitch' ),
	esc_html__( "Choose border color on active menu item", 'pitch' )
);
$row1->addChild(
	"menu_item_active_border_color",
	$menu_item_active_border_color
);

$enable_menu_item_separators = new PitchQodeField(
	"yesno",
	"enable_menu_item_separators",
	"no",
	esc_html__( "Enable 1st Level Menu Item Separators", 'pitch' ),
	esc_html__( "Enabling this option will display separators between menu items", 'pitch' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_menu_item_separators_container"
	)
);
$panel4->addChild(
	"enable_menu_item_separators",
	$enable_menu_item_separators
);
$menu_item_separators_container = new PitchQodeContainer(
	"menu_item_separators_container",
	"enable_menu_item_separators",
	"no"
);
$panel4->addChild(
	"menu_item_separators_container",
	$menu_item_separators_container
);
$group1 = new PitchQodeGroup(
	esc_html__( "Menu Item Separators Style", 'pitch' ),
	""
);
$menu_item_separators_container->addChild(
	"group1",
	$group1
);
$row1 = new PitchQodeRow();
$group1->addChild(
	"row1",
	$row1
);
$menu_item_separators_color = new PitchQodeField(
	"colorsimple",
	"menu_item_separators_color",
	"",
	esc_html__( "Separators Color", 'pitch' ),
	esc_html__( "Enter separators color", 'pitch' )
);
$row1->addChild(
	"menu_item_separators_color",
	$menu_item_separators_color
);

$enable_menu_item_text_decoration = new PitchQodeField(
	"yesno",
	"enable_menu_item_text_decoration",
	"no",
	esc_html__( "Enable 1st Level Menu Item Text Decoration", 'pitch' ),
	esc_html__( "Enable this option and choose a text decoration for menu items in first level", 'pitch' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_menu_item_text_decoration_container"
	)
);
$panel4->addChild(
	"enable_menu_item_text_decoration",
	$enable_menu_item_text_decoration
);

$menu_item_text_decoration_container = new PitchQodeContainer(
	"menu_item_text_decoration_container",
	"enable_menu_item_text_decoration",
	"no"
);
$panel4->addChild(
	"menu_item_text_decoration_container",
	$menu_item_text_decoration_container
);

$group1 = new PitchQodeGroup(
	esc_html__( "Menu Item Text Decoration", 'pitch' ),
	""
);
$menu_item_text_decoration_container->addChild(
	"group1",
	$group1
);
$row1 = new PitchQodeRow();
$group1->addChild(
	"row1",
	$row1
);

$menu_item_text_decoration_style = new PitchQodeField(
	"selectsimple",
	"menu_item_text_decoration_style",
	"none",
	esc_html__( "Hover Item Text Decoration", 'pitch' ),
	esc_html__( "Choose text decoration type for hover menu items", 'pitch' ),
	array(
		"none" => esc_html__( "None", 'pitch' ),
		"underline" => esc_html__( "Underline", 'pitch' ),
		"line-through" => esc_html__( "Line-through", 'pitch' ),
		"overline" => esc_html__( "Overline", 'pitch' )
	)
);
$row1->addChild(
	"menu_item_text_decoration_style",
	$menu_item_text_decoration_style
);

$menu_item_active_text_decoration_style = new PitchQodeField(
	"selectsimple",
	"menu_item_active_text_decoration_style",
	"none",
	esc_html__( "Active Item Text Decoration", 'pitch' ),
	esc_html__( "Choose text decoration type for active menu items", 'pitch' ),
	array(
		"none" => esc_html__( "None", 'pitch' ),
		"underline" => esc_html__( "Underline", 'pitch' ),
		"line-through" => esc_html__( "Line-through", 'pitch' ),
		"overline" => esc_html__( "Overline", 'pitch' )
	)
);
$row1->addChild(
	"menu_item_active_text_decoration_style",
	$menu_item_active_text_decoration_style
);

$group1 = new PitchQodeGroup(
	esc_html__( "Main Dropdown Menu", 'pitch' ),
	esc_html__( "Choose a color and transparency for the main menu background (0 = fully transparent, 1 = opaque)", 'pitch' )
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

$dropdown_background_color = new PitchQodeField(
	"colorsimple",
	"dropdown_background_color",
	"",
	esc_html__( "Background Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"dropdown_background_color",
	$dropdown_background_color
);

$dropdown_background_transparency = new PitchQodeField(
	"textsimple",
	"dropdown_background_transparency",
	"",
	esc_html__( "Transparency", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"dropdown_background_transparency",
	$dropdown_background_transparency
);

$dropdown_separator_color = new PitchQodeField(
	"colorsimple",
	"dropdown_separator_color",
	"",
	esc_html__( "Item Bottom Separator Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"dropdown_separator_color",
	$dropdown_separator_color
);

$dropdown_vertical_separator_color = new PitchQodeField(
	"colorsimple",
	"dropdown_vertical_separator_color",
	"",
	esc_html__( "Item Vertical Separator Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"dropdown_vertical_separator_color",
	$dropdown_vertical_separator_color
);

$row2 = new PitchQodeRow();
$group1->addChild(
	"row2",
	$row2
);

$enable_dropdown_separator_full_width = new PitchQodeField(
	"yesnosimple",
	"enable_dropdown_separator_full_width",
	"no",
	esc_html__( "Item Separator Full Width", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"enable_dropdown_separator_full_width",
	$enable_dropdown_separator_full_width
);

$group2 = new PitchQodeGroup(
	esc_html__( "Main Dropdown Menu Padding", 'pitch' ),
	esc_html__( "Choose a top/bottom padding for dropdown menu", 'pitch' )
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

$dropdown_top_padding = new PitchQodeField(
	"textsimple",
	"dropdown_top_padding",
	"",
	esc_html__( "Top Padding (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"dropdown_top_padding",
	$dropdown_top_padding
);

$dropdown_bottom_padding = new PitchQodeField(
	"textsimple",
	"dropdown_bottom_padding",
	"",
	esc_html__( "Bottom Padding (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"dropdown_bottom_padding",
	$dropdown_bottom_padding
);

$menu_dropdown_appearance = new PitchQodeField(
	"select",
	"menu_dropdown_appearance",
	"default",
	esc_html__( "Main Dropdown Menu Appearance", 'pitch' ),
	esc_html__( "Choose appearance for dropdown menu", 'pitch' ),
	array(
		"default" => esc_html__( "Default", 'pitch' ),
		"slide_from_bottom" => esc_html__( "Slide From Bottom", 'pitch' ),
		"slide_from_top" => esc_html__( "Slide From Top", 'pitch' ),
		"animate_height" => esc_html__( "Animate Height", 'pitch' ),
		"slide_from_left" => esc_html__( "Slide From Left", 'pitch' )
	)
);
$panel4->addChild(
	"menu_dropdown_appearance",
	$menu_dropdown_appearance
);

$dropdown_top_position = new PitchQodeField(
	"text",
	"dropdown_top_position",
	"",
	esc_html__( "Dropdown position", 'pitch' ),
	esc_html__( "Enter value in percentage of entire header height", 'pitch' ),
	array(),
	array( "col_width" => 3 )
);
$panel4->addChild(
	"dropdown_top_position",
	$dropdown_top_position
);

$enable_dropdown_menu_item_icon = new PitchQodeField(
	"yesno",
	"enable_dropdown_menu_item_icon",
	"no",
	esc_html__( "Enable Arrow Icon for Dropdown Menu", 'pitch' ),
	esc_html__( "Enabling this option will display an arrow icon for 1st level menu items which have a dropdown menu", 'pitch' )
);
$panel4->addChild(
	"enable_dropdown_menu_item_icon",
	$enable_dropdown_menu_item_icon
);

$enable_dropdown_top_separator = new PitchQodeField(
	"yesno",
	"enable_dropdown_top_separator",
	"no",
	esc_html__( "Enable Dropdown Top Separator", 'pitch' ),
	esc_html__( "Enabling this option will display top separator for second level in dropdown menu", 'pitch' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_disable_dropdown_top_separator_container"
	)
);
$panel4->addChild(
	"enable_dropdown_top_separator",
	$enable_dropdown_top_separator
);

$disable_dropdown_top_separator_container = new PitchQodeContainer(
	"disable_dropdown_top_separator_container",
	"enable_dropdown_top_separator",
	"no"
);
$panel4->addChild(
	"disable_dropdown_top_separator_container",
	$disable_dropdown_top_separator_container
);

$dropdown_top_separator_color = new PitchQodeField(
	"color",
	"dropdown_top_separator_color",
	"",
	esc_html__( "Dropdown Top Separator Color", 'pitch' ),
	esc_html__( "Choose color for top separator", 'pitch' )
);
$disable_dropdown_top_separator_container->addChild(
	"dropdown_top_separator_color",
	$dropdown_top_separator_color
);

$dropdown_border_around = new PitchQodeField(
	"yesno",
	"dropdown_border_around",
	"yes",
	esc_html__( "Enable Dropdown Menu Border", 'pitch' ),
	esc_html__( "Enabling this option will display border around dropdown menu", 'pitch' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_dropdown_border_around_container"
	)
);
$panel4->addChild(
	"dropdown_border_around",
	$dropdown_border_around
);

$dropdown_border_around_container = new PitchQodeContainer(
	"dropdown_border_around_container",
	"dropdown_border_around",
	"no"
);
$panel4->addChild(
	"dropdown_border_around_container",
	$dropdown_border_around_container
);

$dropdown_border_around_color = new PitchQodeField(
	"color",
	"dropdown_border_around_color",
	"",
	esc_html__( "Dropdown Border Color", 'pitch' ),
	esc_html__( "Choose a color for border around dropdown menu", 'pitch' )
);
$dropdown_border_around_container->addChild(
	"dropdown_border_around_color",
	$dropdown_border_around_color
);

$wide_menu_styles = new PitchQodeTitle(
	"wide_menu_styles",
	esc_html__( "Wide Menu", 'pitch' )
);
$panel4->addChild(
	"wide_menu_styles",
	$wide_menu_styles
);

$enable_wide_manu_background = new PitchQodeField(
	"yesno",
	"enable_wide_manu_background",
	"no",
	esc_html__( "Enable Full Width Background for Wide Dropdown Type", 'pitch' ),
	esc_html__( "Enabling this option will show full width background  for wide dropdown type", 'pitch' ),
	array()
);
$panel4->addChild(
	"enable_wide_manu_background",
	$enable_wide_manu_background
);

$wide_image_background = new PitchQodeField(
	"image",
	"wide_image_background",
	"",
	esc_html__( "Set Background Image for Wide Dropdown Type", 'pitch' ),
	"",
	array()
);
$panel4->addChild(
	"wide_image_background",
	$wide_image_background
);

$group6 = new PitchQodeGroup(
	esc_html__( "Wide Dropdown Menu Padding", 'pitch' ),
	esc_html__( "Choose a top/bottom padding for dropdown wide menu", 'pitch' )
);
$panel4->addChild(
	"group6",
	$group6
);

$row1 = new PitchQodeRow();
$group6->addChild(
	"row1",
	$row1
);

$wide_dropdown_top_padding = new PitchQodeField(
	"textsimple",
	"wide_dropdown_top_padding",
	"",
	esc_html__( "Top Padding (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"wide_dropdown_top_padding",
	$wide_dropdown_top_padding
);

$wide_dropdown_bottom_padding = new PitchQodeField(
	"textsimple",
	"wide_dropdown_bottom_padding",
	"",
	esc_html__( "Bottom Padding (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"wide_dropdown_bottom_padding",
	$wide_dropdown_bottom_padding
);

$group3 = new PitchQodeGroup(
	esc_html__( "Wide Menu Size", 'pitch' ),
	esc_html__( "Set size for wide menu width. Note: Wide menu is disabled on mobile menu.", 'pitch' )
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

$wide_menu_width = new PitchQodeField(
	"textsimple",
	"wide_menu_width",
	"",
	esc_html__( "Width (px)", 'pitch' ),
	""
);
$row1->addChild(
	"wide_menu_width",
	$wide_menu_width
);

$wide_menu_width_under_1400 = new PitchQodeField(
	"textsimple",
	"wide_menu_width_under_1400",
	"",
	esc_html__( "Width (px) under 1400px screen size", 'pitch' ),
	""
);
$row1->addChild(
	"wide_menu_width_under_1400",
	$wide_menu_width_under_1400
);

$wide_menu_width_under_1200 = new PitchQodeField(
	"textsimple",
	"wide_menu_width_under_1200",
	"",
	esc_html__( "Width (px) under 1200px screen size", 'pitch' ),
	""
);
$row1->addChild(
	"wide_menu_width_under_1200",
	$wide_menu_width_under_1200
);

$group4 = new PitchQodeGroup(
	esc_html__( "Wide Floating Menu Size ", 'pitch' ),
	esc_html__( "Set size for floating wide menu width. (Left and Right) Note: Wide menu is disabled on mobile menu.", 'pitch' )
);
$panel4->addChild(
	"group4",
	$group4
);

$row1 = new PitchQodeRow();
$group4->addChild(
	"row1",
	$row1
);

$wide_floating_menu_width = new PitchQodeField(
	"textsimple",
	"wide_floating_menu_width",
	"",
	esc_html__( "Width (px)", 'pitch' ),
	""
);
$row1->addChild(
	"wide_floating_menu_width",
	$wide_floating_menu_width
);

$wide_floating_menu_width_under_1400 = new PitchQodeField(
	"textsimple",
	"wide_floating_menu_width_under_1400",
	"",
	esc_html__( "Width under 1400px screen size (px)", 'pitch' ),
	""
);
$row1->addChild(
	"wide_floating_menu_width_under_1400",
	$wide_floating_menu_width_under_1400
);

$wide_floating_menu_width_under_1200 = new PitchQodeField(
	"textsimple",
	"wide_floating_menu_width_under_1200",
	"",
	esc_html__( "Width under 1200px screen size (px)", 'pitch' ),
	""
);
$row1->addChild(
	"wide_floating_menu_width_under_1200",
	$wide_floating_menu_width_under_1200
);

$group5 = new PitchQodeGroup(
	esc_html__( "Wide Floating Menu Position", 'pitch' ),
	esc_html__( "Set position for floating wide menu on smaller screen", 'pitch' )
);
$panel4->addChild(
	"group5",
	$group5
);

$row1 = new PitchQodeRow();
$group5->addChild(
	"row1",
	$row1
);

$wide_floating_menu_position_1400 = new PitchQodeField(
	"textsimple",
	"wide_floating_menu_position_1400",
	"",
	esc_html__( "Position between 1300px and 1400px of screen size (px)", 'pitch' ),
	""
);
$row1->addChild(
	"wide_floating_menu_position_1400",
	$wide_floating_menu_position_1400
);

$wide_floating_menu_position_1300 = new PitchQodeField(
	"textsimple",
	"wide_floating_menu_position_1300",
	"",
	esc_html__( "Position between 1200px and 1300px of screen size (px)", 'pitch' ),
	""
);
$row1->addChild(
	"wide_floating_menu_position_1300",
	$wide_floating_menu_position_1300
);

$wide_floating_menu_position_1200 = new PitchQodeField(
	"textsimple",
	"wide_floating_menu_position_1200",
	"",
	esc_html__( "Position between 1100px and 1200px of screen size (px)", 'pitch' ),
	""
);
$row1->addChild(
	"wide_floating_menu_position_1200",
	$wide_floating_menu_position_1200
);

$wide_floating_menu_position_1100 = new PitchQodeField(
	"textsimple",
	"wide_floating_menu_position_1100",
	"",
	esc_html__( "Position between 1000px and 1100px of screen size (px)", 'pitch' ),
	""
);
$row1->addChild(
	"wide_floating_menu_position_1100",
	$wide_floating_menu_position_1100
);

$panel3 = new PitchQodePanel(
	esc_html__( "Select Search", 'pitch' ),
	"enable_search_panel",
	"header_type",
	"",
	array( "side" )
);
$headerandfooterPage->addChild(
	"panel3",
	$panel3
);

$enable_search = new PitchQodeField(
	"yesno",
	"enable_search",
	"no",
	esc_html__( "Enable Select Search Bar", 'pitch' ),
	"This option enables Select Search functionality (search icon will appear next to main navigation)
        ",
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_enable_search_container"
	)
);
$panel3->addChild(
	"enable_search",
	$enable_search
);

$enable_search_container = new PitchQodeContainer(
	"enable_search_container",
	"enable_search",
	"no"
);
$panel3->addChild(
	"enable_search_container",
	$enable_search_container
);

$search_type = new PitchQodeField(
	"select",
	"search_type",
	"search_slides_from_header_bottom",
	esc_html__( "Select Search Type", 'pitch' ),
	esc_html__( "Choose a type of Select search bar (Note: Slide From Header Bottom search type doesn't work with transparent header)", 'pitch' ),
	array(
		"search_slides_from_header_bottom" => esc_html__( "Slide From Header Bottom", 'pitch' ),
		"search_covers_header" => esc_html__( "Search Covers Header", 'pitch' ),
		"fullscreen_search" => esc_html__( "Fullscreen Search", 'pitch' ),
		"search_slides_from_window_top" => esc_html__( "Slide from Window Top", 'pitch' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			"search_covers_header"             => "#qodef_search_height_container,#qodef_search_animation_container",
			"fullscreen_search"                => "#qodef_search_height_container,#qodef_search_cover_header_container",
			"search_slides_from_header_bottom" => "#qodef_search_animation_container,#qodef_search_cover_header_container",
			"search_slides_from_window_top"    => "#qodef_search_animation_container,#qodef_search_cover_header_container,#qodef_search_height_container"
		),
		"show"       => array(
			"search_slides_from_header_bottom" => "#qodef_search_height_container",
			"fullscreen_search"                => "#qodef_search_animation_container",
			"search_covers_header"             => "#qodef_search_cover_header_container",
			"search_slides_from_window_top"    => ""
		)
	)
);
$enable_search_container->addChild(
	"search_type",
	$search_type
);

$search_height_container = new PitchQodeContainer(
	"search_height_container",
	"search_type",
	"",
	array(
		"search_covers_header",
		"fullscreen_search",
		"search_slides_from_window_top"
	)
);
$enable_search_container->addChild(
	"search_height_container",
	$search_height_container
);

$search_height = new PitchQodeField(
	"text",
	"search_height",
	"",
	esc_html__( "Search bar height", 'pitch' ),
	esc_html__( "Set search bar height (in pixels)", 'pitch' ),
	array(),
	array( "col_width" => 3 )
);
$search_height_container->addChild(
	"search_height",
	$search_height
);

$search_animation_container = new PitchQodeContainer(
	"search_animation_container",
	"search_type",
	"",
	array(
		"search_covers_header",
		"search_slides_from_header_bottom",
		"search_slides_from_window_top"
	)
);
$enable_search_container->addChild(
	"search_animation_container",
	$search_animation_container
);

$search_animation = new PitchQodeField(
	"select",
	"search_animation",
	"fade",
	esc_html__( "Fullscreen Search Overlay Animation", 'pitch' ),
	esc_html__( "Choose animation for fullscreen search overlay", 'pitch' ),
	array(
		"fade" => esc_html__( "Fade", 'pitch' ),
		"from_circle" => esc_html__( "Circle appear", 'pitch' )
	)
);
$search_animation_container->addChild(
	"search_animation",
	$search_animation
);

$search_cover_header_container = new PitchQodeContainer(
	"search_cover_header_container",
	"search_type",
	"",
	array(
		"fullscreen_search",
		"search_slides_from_header_bottom",
		"search_slides_from_window_top"
	)
);
$enable_search_container->addChild(
	"search_cover_header_container",
	$search_cover_header_container
);

$search_cover_only_bottom_yesno = new PitchQodeField(
	"yesno",
	"search_cover_only_bottom_yesno",
	"no",
	esc_html__( "Cover Only Header Bottom", 'pitch' ),
	esc_html__( "Enable this option to make search cover only header bottom", 'pitch' )
);
$search_cover_header_container->addChild(
	"search_cover_only_bottom_yesno",
	$search_cover_only_bottom_yesno
);

$search_icon_pack = new PitchQodeField(
	"select",
	"search_icon_pack",
	"font_awesome",
	esc_html__( "Search Icon Pack", 'pitch' ),
	esc_html__( "Choose icon pack for search icon", 'pitch' ),
	pitch_qode_icon_collections()->getIconCollectionsExclude( 'linea_icons' )
);
$enable_search_container->addChild(
	"search_icon_pack",
	$search_icon_pack
);

$search_icon_in_header_top = new PitchQodeField(
	"yesno",
	"search_icon_in_header_top",
	"no",
	esc_html__( "Search in Header Top", 'pitch' ),
	esc_html__( "Enable this option to put search in Header Top", 'pitch' )
);
$enable_search_container->addChild(
	"search_icon_in_header_top",
	$search_icon_in_header_top
);

$initial_header_icon_title = new PitchQodeTitle(
	"initial_header_icon_title",
	esc_html__( "Initial Search Icon in Header", 'pitch' )
);
$enable_search_container->addChild(
	"initial_header_icon_title",
	$initial_header_icon_title
);

$group7 = new PitchQodeGroup(
	esc_html__( "Initial Search Icon", 'pitch' ),
	esc_html__( "Define size for Search icon in Header", 'pitch' )
);
$enable_search_container->addChild(
	"group7",
	$group7
);
$row1 = new PitchQodeRow();
$group7->addChild(
	"row1",
	$row1
);
$header_search_icon_size = new PitchQodeField(
	"textsimple",
	"header_search_icon_size",
	"",
	esc_html__( "Icon Size", 'pitch' ),
	esc_html__( "Set size for icon (ix pixels)", 'pitch' ),
	array(),
	array( "col_width" => 3 )
);
$row1->addChild(
	"header_search_icon_size",
	$header_search_icon_size
);

$group8 = new PitchQodeGroup(
	esc_html__( "Icon Background Style", 'pitch' ),
	esc_html__( "Define background style for icon", 'pitch' )
);
$enable_search_container->addChild(
	"group8",
	$group8
);

$row1 = new PitchQodeRow();
$group8->addChild(
	"row1",
	$row1
);

$search_icon_background_color = new PitchQodeField(
	"colorsimple",
	"search_icon_background_color",
	"",
	esc_html__( "Background Color", 'pitch' ),
	esc_html__( "Choose a background color for Select search icon", 'pitch' )
);
$row1->addChild(
	"search_icon_background_color",
	$search_icon_background_color
);

$search_icon_background_hover_color = new PitchQodeField(
	"colorsimple",
	"search_icon_background_hover_color",
	"",
	esc_html__( "Background Hover Color", 'pitch' ),
	esc_html__( "Choose a background hover color for Select search icon", 'pitch' )
);
$row1->addChild(
	"search_icon_background_hover_color",
	$search_icon_background_hover_color
);

$search_icon_background_full_height = new PitchQodeField(
	"yesnosimple",
	"search_icon_background_full_height",
	"no",
	esc_html__( "Icon Background Full Height", 'pitch' ),
	esc_html__( "Enabling this option will make seacrh icon background to go full height", 'pitch' )
);
$row1->addChild(
	"search_icon_background_full_height",
	$search_icon_background_full_height
);

$enable_search_icon_text = new PitchQodeField(
	"yesno",
	"enable_search_icon_text",
	"no",
	esc_html__( "Enable Search Icon Text", 'pitch' ),
	esc_html__( "Enable this option to show 'Search' text next to search icon in header", 'pitch' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_enable_search_icon_text_container"
	)
);
$enable_search_container->addChild(
	"enable_search_icon_text",
	$enable_search_icon_text
);

$enable_search_icon_text_container = new PitchQodeContainer(
	"enable_search_icon_text_container",
	"enable_search_icon_text",
	"no"
);
$enable_search_container->addChild(
	"enable_search_icon_text_container",
	$enable_search_icon_text_container
);

$group1 = new PitchQodeGroup(
	esc_html__( "Search Icon Text", 'pitch' ),
	esc_html__( "Define Style for Search Icon Text", 'pitch' )
);
$enable_search_icon_text_container->addChild(
	"group1",
	$group1
);

$row1 = new PitchQodeRow();
$group1->addChild(
	"row1",
	$row1
);

$search_icon_text_color = new PitchQodeField(
	"colorsimple",
	"search_icon_text_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"search_icon_text_color",
	$search_icon_text_color
);
$search_icon_text_color_hover = new PitchQodeField(
	"colorsimple",
	"search_icon_text_color_hover",
	"",
	esc_html__( "Text Hover Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"search_icon_text_color_hover",
	$search_icon_text_color_hover
);
$search_icon_text_fontsize = new PitchQodeField(
	"textsimple",
	"search_icon_text_fontsize",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"search_icon_text_fontsize",
	$search_icon_text_fontsize
);
$search_icon_text_lineheight = new PitchQodeField(
	"textsimple",
	"search_icon_text_lineheight",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"search_icon_text_lineheight",
	$search_icon_text_lineheight
);

$row2 = new PitchQodeRow( true );
$group1->addChild(
	"row2",
	$row2
);

$search_icon_text_texttransform = new PitchQodeField(
	"selectblanksimple",
	"search_icon_text_texttransform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row2->addChild(
	"search_icon_text_texttransform",
	$search_icon_text_texttransform
);
$search_icon_text_google_fonts = new PitchQodeField(
	esc_html__( "Fontsimple", 'pitch' ),
	"search_icon_text_google_fonts",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"search_icon_text_google_fonts",
	$search_icon_text_google_fonts
);
$search_icon_text_fontstyle = new PitchQodeField(
	"selectblanksimple",
	"search_icon_text_fontstyle",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"search_icon_text_fontstyle",
	$search_icon_text_fontstyle
);
$search_icon_text_fontweight = new PitchQodeField(
	"selectblanksimple",
	"search_icon_text_fontweight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"search_icon_text_fontweight",
	$search_icon_text_fontweight
);

$row3 = new PitchQodeRow( true );
$group1->addChild(
	"row3",
	$row3
);

$search_icon_text_letterspacing = new PitchQodeField(
	"textsimple",
	"search_icon_text_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row3->addChild(
	"search_icon_text_letterspacing",
	$search_icon_text_letterspacing
);

$group6 = new PitchQodeGroup(
	esc_html__( "Icon Spacing", 'pitch' ),
	esc_html__( "Define padding and margins for Search icon", 'pitch' )
);
$enable_search_container->addChild(
	"group6",
	$group6
);

$row1 = new PitchQodeRow();
$group6->addChild(
	"row1",
	$row1
);

$search_padding_left = new PitchQodeField(
	"textsimple",
	"search_padding_left",
	"",
	esc_html__( "Padding Left (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"search_padding_left",
	$search_padding_left
);

$search_padding_right = new PitchQodeField(
	"textsimple",
	"search_padding_right",
	"",
	esc_html__( "Padding Right (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"search_padding_right",
	$search_padding_right
);

$search_margin_left = new PitchQodeField(
	"textsimple",
	"search_margin_left",
	"",
	esc_html__( "Margin Left (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"search_margin_left",
	$search_margin_left
);

$search_margin_right = new PitchQodeField(
	"textsimple",
	"search_margin_right",
	"",
	esc_html__( "Margin Right (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"search_margin_right",
	$search_margin_right
);

$search_form_title = new PitchQodeTitle(
	"search_form_title",
	esc_html__( "Select Search Bar", 'pitch' )
);
$enable_search_container->addChild(
	"search_form_title",
	$search_form_title
);

$search_background_color = new PitchQodeField(
	"color",
	"search_background_color",
	"",
	esc_html__( "Background Color", 'pitch' ),
	esc_html__( "Choose a background color for Select search bar", 'pitch' )
);
$enable_search_container->addChild(
	"search_background_color",
	$search_background_color
);

$group1 = new PitchQodeGroup(
	esc_html__( "Search Input Text", 'pitch' ),
	esc_html__( "Define Style for Search text", 'pitch' )
);
$enable_search_container->addChild(
	"group1",
	$group1
);
$row1 = new PitchQodeRow();
$group1->addChild(
	"row1",
	$row1
);
$search_text_color = new PitchQodeField(
	"colorsimple",
	"search_text_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"search_text_color",
	$search_text_color
);
$search_text_disabled_color = new PitchQodeField(
	"colorsimple",
	"search_text_disabled_color",
	"",
	esc_html__( "Disabled Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"search_text_disabled_color",
	$search_text_disabled_color
);
$search_text_fontsize = new PitchQodeField(
	"textsimple",
	"search_text_fontsize",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"search_text_fontsize",
	$search_text_fontsize
);
$search_text_texttransform = new PitchQodeField(
	"selectblanksimple",
	"search_text_texttransform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	"search_text_texttransform",
	$search_text_texttransform
);

$row2 = new PitchQodeRow( true );
$group1->addChild(
	"row2",
	$row2
);
$search_text_google_fonts = new PitchQodeField(
	"fontsimple",
	"search_text_google_fonts",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"search_text_google_fonts",
	$search_text_google_fonts
);
$search_text_fontstyle = new PitchQodeField(
	"selectblanksimple",
	"search_text_fontstyle",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"search_text_fontstyle",
	$search_text_fontstyle
);
$search_text_fontweight = new PitchQodeField(
	"selectblanksimple",
	"search_text_fontweight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"search_text_fontweight",
	$search_text_fontweight
);
$search_text_letterspacing = new PitchQodeField(
	"textsimple",
	"search_text_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"search_text_letterspacing",
	$search_text_letterspacing
);

$group5 = new PitchQodeGroup(
	esc_html__( "Search Label Text", 'pitch' ),
	esc_html__( "Define Style for Search label text", 'pitch' )
);
$enable_search_container->addChild(
	"group5",
	$group5
);
$row1 = new PitchQodeRow();
$group5->addChild(
	"row1",
	$row1
);
$search_label_text_color = new PitchQodeField(
	"colorsimple",
	"search_label_text_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"search_label_text_color",
	$search_label_text_color
);
$search_label_text_fontsize = new PitchQodeField(
	"textsimple",
	"search_label_text_fontsize",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"search_label_text_fontsize",
	$search_label_text_fontsize
);
$search_label_text_texttransform = new PitchQodeField(
	"selectblanksimple",
	"search_label_text_texttransform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	"search_label_text_texttransform",
	$search_label_text_texttransform
);

$row2 = new PitchQodeRow( true );
$group5->addChild(
	"row2",
	$row2
);
$search_label_text_google_fonts = new PitchQodeField(
	"fontsimple",
	"search_label_text_google_fonts",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"search_label_text_google_fonts",
	$search_label_text_google_fonts
);
$search_label_text_fontstyle = new PitchQodeField(
	"selectblanksimple",
	"search_label_text_fontstyle",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"search_label_text_fontstyle",
	$search_label_text_fontstyle
);
$search_label_text_fontweight = new PitchQodeField(
	"selectblanksimple",
	"search_label_text_fontweight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"search_label_text_fontweight",
	$search_label_text_fontweight
);
$search_label_text_letterspacing = new PitchQodeField(
	"textsimple",
	"search_label_text_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"search_label_text_letterspacing",
	$search_label_text_letterspacing
);

$group2 = new PitchQodeGroup(
	esc_html__( "Search Icon", 'pitch' ),
	esc_html__( "Define Style for Search icon", 'pitch' )
);
$enable_search_container->addChild(
	"group2",
	$group2
);
$row1 = new PitchQodeRow();
$group2->addChild(
	"row1",
	$row1
);
$search_icon_color = new PitchQodeField(
	"colorsimple",
	"search_icon_color",
	"",
	esc_html__( "Icon Color", 'pitch' ),
	esc_html__( "Choose icon color for Select search bar", 'pitch' )
);
$row1->addChild(
	"search_icon_color",
	$search_icon_color
);
$search_icon_hover_color = new PitchQodeField(
	"colorsimple",
	"search_icon_hover_color",
	"",
	esc_html__( "Icon Hover Color", 'pitch' ),
	esc_html__( "Choose icon hover color for Select search bar", 'pitch' )
);
$row1->addChild(
	"search_icon_hover_color",
	$search_icon_hover_color
);
$search_icon_disabled_color = new PitchQodeField(
	"colorsimple",
	"search_icon_disabled_color",
	"",
	esc_html__( "Icon Disabled Color", 'pitch' ),
	esc_html__( "Choose icon disabled color for Select search bar", 'pitch' )
);
$row1->addChild(
	"search_icon_disabled_color",
	$search_icon_disabled_color
);
$search_icon_size = new PitchQodeField(
	"textsimple",
	"search_icon_size",
	"",
	esc_html__( "Icon Size", 'pitch' ),
	esc_html__( "Set size for icon (ix pixels)", 'pitch' ),
	array(),
	array( "col_width" => 3 )
);
$row1->addChild(
	"search_icon_size",
	$search_icon_size
);

$group4 = new PitchQodeGroup(
	esc_html__( "Search Close", 'pitch' ),
	esc_html__( "Define style for Search close icon", 'pitch' )
);
$enable_search_container->addChild(
	"group4",
	$group4
);
$row1 = new PitchQodeRow();
$group4->addChild(
	"row1",
	$row1
);
$search_close_color = new PitchQodeField(
	"colorsimple",
	"search_close_color",
	"",
	esc_html__( "Icon Color", 'pitch' ),
	esc_html__( "Choose color for search close icon", 'pitch' )
);
$row1->addChild(
	"search_close_color",
	$search_close_color
);
$search_close_hover_color = new PitchQodeField(
	"colorsimple",
	"search_close_hover_color",
	"",
	esc_html__( "Icon Hover Color", 'pitch' ),
	esc_html__( "Choose hover color for search close icon", 'pitch' )
);
$row1->addChild(
	"search_close_hover_color",
	$search_close_hover_color
);
$search_close_size = new PitchQodeField(
	"textsimple",
	"search_close_size",
	"",
	esc_html__( "Icon Size", 'pitch' ),
	esc_html__( "Choose size for search close icon", 'pitch' )
);
$row1->addChild(
	"search_close_size",
	$search_close_size
);

$group3 = new PitchQodeGroup(
	esc_html__( "Search Bottom Border", 'pitch' ),
	esc_html__( "Define style for Search text input bottom border (for Fullscreen search type)", 'pitch' )
);
$enable_search_container->addChild(
	"group3",
	$group3
);
$row1 = new PitchQodeRow();
$group3->addChild(
	"row1",
	$row1
);
$search_border_color = new PitchQodeField(
	"colorsimple",
	"search_border_color",
	"",
	esc_html__( "Border Color", 'pitch' ),
	esc_html__( "Choose border color for search text input", 'pitch' )
);
$row1->addChild(
	"search_border_color",
	$search_border_color
);
$search_border_focus_color = new PitchQodeField(
	"colorsimple",
	"search_border_focus_color",
	"",
	esc_html__( "Border Focus Color", 'pitch' ),
	esc_html__( "Choose focus color for search text input", 'pitch' )
);
$row1->addChild(
	"search_border_focus_color",
	$search_border_focus_color
);

$panel11 = new PitchQodePanel(
	esc_html__( "Side Area", 'pitch' ),
	"enable_side_area_panel",
	"header_type",
	"",
	array( "side" )
);
$headerandfooterPage->addChild(
	"panel11",
	$panel11
);

$enable_side_area = new PitchQodeField(
	"yesno",
	"enable_side_area",
	"yes",
	esc_html__( "Enable Side Area", 'pitch' ),
	esc_html__( "This option enables a side area to be opened from main menu navigation", 'pitch' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_enable_side_area_container"
	)
);
$panel11->addChild(
	"enable_side_area",
	$enable_side_area
);

$enable_side_area_container = new PitchQodeContainer(
	"enable_side_area_container",
	"enable_side_area",
	"no"
);
$panel11->addChild(
	"enable_side_area_container",
	$enable_side_area_container
);

$side_area_type = new PitchQodeField(
	"select",
	"side_area_type",
	"side_menu_slide_from_right",
	esc_html__( "Side Area Type", 'pitch' ),
	esc_html__( "Choose a type of Side Area", 'pitch' ),
	array(
		"side_menu_slide_from_right" => esc_html__( "Slide from Right Over Content", 'pitch' ),
		"side_menu_slide_with_content" => esc_html__( "Slide from Right With Content", 'pitch' ),
		"side_area_uncovered_from_content" => esc_html__( "Side Area Uncovered from Content", 'pitch' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			"side_menu_slide_from_right"       => "#qodef_side_area_slide_with_content_container",
			"side_menu_slide_with_content"     => "#qodef_side_area_width_container",
			"side_area_uncovered_from_content" => "#qodef_side_area_width_container,#qodef_side_area_slide_with_content_container"
		),
		"show"       => array(
			"side_menu_slide_from_right"       => "#qodef_side_area_width_container",
			"side_menu_slide_with_content"     => "#qodef_side_area_slide_with_content_container",
			"side_area_uncovered_from_content" => ""
		)
	)
);

$enable_side_area_container->addChild(
	"side_area_type",
	$side_area_type
);

$side_area_width_container = new PitchQodeContainer(
	"side_area_width_container",
	"side_area_type",
	"",
	array(
		"side_menu_slide_with_content",
		"side_area_uncovered_from_content"
	)
);
$enable_side_area_container->addChild(
	"side_area_width_container",
	$side_area_width_container
);

$side_area_width = new PitchQodeField(
	"text",
	"side_area_width",
	"",
	esc_html__( "Side Area Width", 'pitch' ),
	esc_html__( "Enter a width for Side Area (in percentages, enter more than 30)", 'pitch' ),
	array(),
	array( "col_width" => 3 )
);
$side_area_width_container->addChild(
	"side_area_width",
	$side_area_width
);

$side_area_content_overlay_color = new PitchQodeField(
	"color",
	"side_area_content_overlay_color",
	"",
	esc_html__( "Content Overlay Background Color", 'pitch' ),
	esc_html__( "Choose a background color for a content overlay", 'pitch' ),
	array(),
	array( "col_width" => 3 )
);
$side_area_width_container->addChild(
	"side_area_content_overlay_color",
	$side_area_content_overlay_color
);

$side_area_content_overlay_opacity = new PitchQodeField(
	"text",
	"side_area_content_overlay_opacity",
	"",
	esc_html__( "Content Overlay Background Transparency", 'pitch' ),
	esc_html__( "Choose a transparency for the content overlay background color (0 = fully transparent, 1 = opaque)", 'pitch' ),
	array(),
	array( "col_width" => 3 )
);
$side_area_width_container->addChild(
	"side_area_content_overlay_opacity",
	$side_area_content_overlay_opacity
);

$side_area_slide_with_content_container = new PitchQodeContainer(
	"side_area_slide_with_content_container",
	"side_area_type",
	"",
	array(
		"side_menu_slide_from_right",
		"side_area_uncovered_from_content"
	)
);
$enable_side_area_container->addChild(
	"side_area_slide_with_content_container",
	$side_area_slide_with_content_container
);

$side_area_slide_with_content_width = new PitchQodeField(
	"select",
	"side_area_slide_with_content_width",
	"width_470",
	esc_html__( "Side Area Width", 'pitch' ),
	esc_html__( "Choose width for Side Area", 'pitch' ),
	array(
		"width_270" => esc_html__( "270px", 'pitch' ),
		"width_370" => esc_html__( "370px", 'pitch' ),
		"width_470" => esc_html__( "470px", 'pitch' )
	)
);
$side_area_slide_with_content_container->addChild(
	"side_area_slide_with_content_width",
	$side_area_slide_with_content_width
);

//init icon pack hide and show array. It will be populated dinamically from collections array
$side_area_icon_pack_hide_array = array();
$side_area_icon_pack_show_array = array();

//do we have some collection added in collections array?
if ( is_array( pitch_qode_icon_collections()->iconCollections ) && count(
		pitch_qode_icon_collections()->iconCollections
	) ) {
	//get collections params array. It will contain values of 'param' property for each collection
	$side_area_icon_collections_params = pitch_qode_icon_collections()->getIconCollectionsParams();
	
	//foreach collection generate hide and show array
	foreach ( pitch_qode_icon_collections()->iconCollections as $dep_collection_key => $dep_collection_object ) {
		$side_area_icon_pack_hide_array[ $dep_collection_key ] = '';
		
		//we need to include only current collection in show string as it is the only one that needs to show
		$side_area_icon_pack_show_array[ $dep_collection_key ] = '#qodef_side_area_icon_' . $dep_collection_object->param . '_container';
		
		//for all collections param generate hide string
		foreach ( $side_area_icon_collections_params as $side_area_icon_collections_param ) {
			//we don't need to include current one, because it needs to be shown, not hidden
			if ( $side_area_icon_collections_param !== $dep_collection_object->param ) {
				$side_area_icon_pack_hide_array[ $dep_collection_key ] .= '#qodef_side_area_icon_' . $side_area_icon_collections_param . '_container,';
			}
		}
		
		//remove remaining ',' character
		$side_area_icon_pack_hide_array[ $dep_collection_key ] = rtrim(
			$side_area_icon_pack_hide_array[ $dep_collection_key ],
			','
		);
	}
	
}

$side_area_button_icon_pack = new PitchQodeField(
	"select",
	"side_area_button_icon_pack",
	"font_awesome",
	esc_html__( "Side Area Button Icon Pack", 'pitch' ),
	esc_html__( "Choose icon pack for side area button", 'pitch' ),
	pitch_qode_icon_collections()->getIconCollections(),
	array(
		"dependence" => true,
		"hide"       => $side_area_icon_pack_hide_array,
		"show"       => $side_area_icon_pack_show_array
	)
);

$enable_side_area_container->addChild(
	"side_area_button_icon_pack",
	$side_area_button_icon_pack
);

if ( is_array( pitch_qode_icon_collections()->iconCollections ) && count(
		pitch_qode_icon_collections()->iconCollections
	) ) {
	//foreach icon collection we need to generate separate container that will have dependency set
	//it will have one field inside with icons dropdown
	foreach ( pitch_qode_icon_collections()->iconCollections as $collection_key => $collection_object ) {
		$icons_array = $collection_object->getIconsArray();
		
		//get icon collection keys (keys from collections array, e.g 'font_awesome', 'font_elegant' etc.)
		$icon_collections_keys = pitch_qode_icon_collections()->getIconCollectionsKeys();
		
		//unset current one, because it doesn't have to be included in dependency that hides icon container
		unset(
			$icon_collections_keys[ array_search(
				$collection_key,
				$icon_collections_keys
			) ]
		);
		
		$side_area_icon_hide_values = $icon_collections_keys;
		$side_area_icon_container   = new PitchQodeContainer(
			"side_area_icon_" . $collection_object->param . "_container",
			"side_area_button_icon_pack",
			"",
			$side_area_icon_hide_values
		);
		$side_area_button_icon      = new PitchQodeField(
			"select",
			"side_area_icon_" . $collection_object->param,
			"fa-bars",
			esc_html__( "Side Area Icon", 'pitch' ),
			esc_html__( "Choose Side Area Icon", 'pitch' ),
			$icons_array,
			array( "col_width" => 3 )
		);
		$side_area_icon_container->addChild(
			"side_area_icon_" . $collection_object->param,
			$side_area_button_icon
		);
		
		$enable_side_area_container->addChild(
			"side_area_icon_" . $collection_object->param . "_container",
			$side_area_icon_container
		);
	}
	
}

$group6 = new PitchQodeGroup(
	esc_html__( "Side Area Icon Spacing", 'pitch' ),
	esc_html__( "Define padding and margin for side area icon", 'pitch' )
);
$enable_side_area_container->addChild(
	"group6",
	$group6
);

$row1 = new PitchQodeRow();
$group6->addChild(
	"row1",
	$row1
);

$side_area_icon_padding_left = new PitchQodeField(
	"textsimple",
	"side_area_icon_padding_left",
	"",
	esc_html__( "Padding Left (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"side_area_icon_padding_left",
	$side_area_icon_padding_left
);

$side_area_icon_padding_right = new PitchQodeField(
	"textsimple",
	"side_area_icon_padding_right",
	"",
	esc_html__( "Padding Right (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"side_area_icon_padding_right",
	$side_area_icon_padding_right
);

$side_area_icon_margin_left = new PitchQodeField(
	"textsimple",
	"side_area_icon_margin_left",
	"",
	esc_html__( "Margin Left (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"side_area_icon_margin_left",
	$side_area_icon_margin_left
);

$side_area_icon_margin_right = new PitchQodeField(
	"textsimple",
	"side_area_icon_margin_right",
	"",
	esc_html__( "Margin Right (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"side_area_icon_margin_right",
	$side_area_icon_margin_right
);

$side_area_icon_border_yesno = new PitchQodeField(
	"yesno",
	"side_area_icon_border_yesno",
	"no",
	esc_html__( "Icon Border", 'pitch' ),
	esc_html__( "Enable border around icon", 'pitch' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_side_area_icon_border_container"
	)
);
$enable_side_area_container->addChild(
	"side_area_icon_border_yesno",
	$side_area_icon_border_yesno
);

$side_area_icon_border_container = new PitchQodeContainer(
	"side_area_icon_border_container",
	"side_area_icon_border_yesno",
	"no"
);
$enable_side_area_container->addChild(
	"side_area_icon_border_container",
	$side_area_icon_border_container
);

$group1 = new PitchQodeGroup(
	esc_html__( "Border Style", 'pitch' ),
	esc_html__( "Define styling for border around icon", 'pitch' )
);
$side_area_icon_border_container->addChild(
	"group1",
	$group1
);

$row1 = new PitchQodeRow();
$group1->addChild(
	"row1",
	$row1
);

$side_area_icon_border_color = new PitchQodeField(
	"colorsimple",
	"side_area_icon_border_color",
	"",
	esc_html__( "Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"side_area_icon_border_color",
	$side_area_icon_border_color
);

$side_area_icon_border_hover_color = new PitchQodeField(
	"colorsimple",
	"side_area_icon_border_hover_color",
	"",
	esc_html__( "Hover Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"side_area_icon_border_hover_color",
	$side_area_icon_border_hover_color
);

$row2 = new PitchQodeRow();
$group1->addChild(
	"row2",
	$row2
);

$side_area_icon_border_width = new PitchQodeField(
	"textsimple",
	"side_area_icon_border_width",
	"",
	esc_html__( "Width (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"side_area_icon_border_width",
	$side_area_icon_border_width
);

$side_area_icon_border_radius = new PitchQodeField(
	"textsimple",
	"side_area_icon_border_radius",
	"",
	esc_html__( "Radius (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"side_area_icon_border_radius",
	$side_area_icon_border_radius
);

$side_area_icon_border_style = new PitchQodeField(
	"selectsimple",
	"side_area_icon_border_style",
	"",
	esc_html__( "Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	array(
		"solid" => esc_html__( "Solid", 'pitch' ),
		"dashed" => esc_html__( "Dashed", 'pitch' ),
		"dotted" => esc_html__( "Dotted", 'pitch' )
	)
);
$row2->addChild(
	"side_area_icon_border_style",
	$side_area_icon_border_style
);

$side_area_aligment = new PitchQodeField(
	"selectblank",
	"side_area_aligment",
	"",
	esc_html__( "Text Aligment", 'pitch' ),
	esc_html__( "Choose text aligment for side area", 'pitch' ),
	array(
		"center" => esc_html__( "Center", 'pitch' ),
		"left" => esc_html__( "Left", 'pitch' ),
		"right" => esc_html__( "Right", 'pitch' )
	
	)
);

$enable_side_area_container->addChild(
	"side_area_aligment",
	$side_area_aligment
);

$side_area_title = new PitchQodeField(
	"text",
	"side_area_title",
	"",
	esc_html__( "Side Area Title", 'pitch' ),
	esc_html__( "Enter a title to appear in Side Area", 'pitch' ),
	array(),
	array( "col_width" => 3 )
);
$enable_side_area_container->addChild(
	"side_area_title",
	$side_area_title
);

$side_area_background_color = new PitchQodeField(
	"color",
	"side_area_background_color",
	"",
	esc_html__( "Background Color", 'pitch' ),
	esc_html__( "Choose a background color for Side Area", 'pitch' )
);
$enable_side_area_container->addChild(
	"side_area_background_color",
	$side_area_background_color
);

$group5 = new PitchQodeGroup(
	esc_html__( "Padding", 'pitch' ),
	esc_html__( "Define padding for Side Area", 'pitch' )
);
$enable_side_area_container->addChild(
	"group5",
	$group5
);
$row1 = new PitchQodeRow( true );
$group5->addChild(
	"row1",
	$row1
);
$side_area_padding_top = new PitchQodeField(
	"textsimple",
	"side_area_padding_top",
	"",
	esc_html__( "Top Padding (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"side_area_padding_top",
	$side_area_padding_top
);
$side_area_padding_right = new PitchQodeField(
	"textsimple",
	"side_area_padding_right",
	"",
	esc_html__( "Right Padding (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"side_area_padding_right",
	$side_area_padding_right
);
$side_area_padding_bottom = new PitchQodeField(
	"textsimple",
	"side_area_padding_bottom",
	"",
	esc_html__( "Bottom Padding (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"side_area_padding_bottom",
	$side_area_padding_bottom
);
$side_area_padding_left = new PitchQodeField(
	"textsimple",
	"side_area_padding_left",
	"",
	esc_html__( "Left Padding (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"side_area_padding_left",
	$side_area_padding_left
);

$side_area_close_icon = new PitchQodeField(
	"select",
	"side_area_close_icon",
	"light",
	esc_html__( "Close Icon Style", 'pitch' ),
	esc_html__( "Choose a type of close icon", 'pitch' ),
	array(
		"light" => esc_html__( "Light", 'pitch' ),
		"dark" => esc_html__( "Dark", 'pitch' )
	)
);

$enable_side_area_container->addChild(
	"side_area_close_icon",
	$side_area_close_icon
);

$side_area_close_icon_size = new PitchQodeField(
	"text",
	"side_area_close_icon_size",
	"",
	esc_html__( "Close Icon Size (px)", 'pitch' ),
	esc_html__( "Define close icon size", 'pitch' ),
	array(),
	array( "col_width" => 3 )
);
$enable_side_area_container->addChild(
	"side_area_close_icon_size",
	$side_area_close_icon_size
);

$group1 = new PitchQodeGroup(
	esc_html__( "Title", 'pitch' ),
	esc_html__( "Define Style for Side Area title", 'pitch' )
);
$enable_side_area_container->addChild(
	"group1",
	$group1
);

$row1 = new PitchQodeRow();
$group1->addChild(
	"row1",
	$row1
);
$side_area_title_color = new PitchQodeField(
	"colorsimple",
	"side_area_title_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"side_area_title_color",
	$side_area_title_color
);
$side_area_title_fontsize = new PitchQodeField(
	"textsimple",
	"side_area_title_fontsize",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"side_area_title_fontsize",
	$side_area_title_fontsize
);
$side_area_title_lineheight = new PitchQodeField(
	"textsimple",
	"side_area_title_lineheight",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"side_area_title_lineheight",
	$side_area_title_lineheight
);
$side_area_title_texttransform = new PitchQodeField(
	"selectblanksimple",
	"side_area_title_texttransform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	"side_area_title_texttransform",
	$side_area_title_texttransform
);
$row2 = new PitchQodeRow( true );
$group1->addChild(
	"row2",
	$row2
);
$side_area_title_google_fonts = new PitchQodeField(
	"fontsimple",
	"side_area_title_google_fonts",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"side_area_title_google_fonts",
	$side_area_title_google_fonts
);
$side_area_title_fontstyle = new PitchQodeField(
	"selectblanksimple",
	"side_area_title_fontstyle",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"side_area_title_fontstyle",
	$side_area_title_fontstyle
);
$side_area_title_fontweight = new PitchQodeField(
	"selectblanksimple",
	"side_area_title_fontweight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"side_area_title_fontweight",
	$side_area_title_fontweight
);
$side_area_title_letterspacing = new PitchQodeField(
	"textsimple",
	"side_area_title_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"side_area_title_letterspacing",
	$side_area_title_letterspacing
);

$group3 = new PitchQodeGroup(
	esc_html__( "Text", 'pitch' ),
	esc_html__( "Define Style for Side Area text", 'pitch' )
);
$enable_side_area_container->addChild(
	"group3",
	$group3
);

$row1 = new PitchQodeRow();
$group3->addChild(
	"row1",
	$row1
);
$side_area_text_color = new PitchQodeField(
	"colorsimple",
	"side_area_text_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"side_area_text_color",
	$side_area_text_color
);
$side_area_text_fontsize = new PitchQodeField(
	"textsimple",
	"side_area_text_fontsize",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"side_area_text_fontsize",
	$side_area_text_fontsize
);
$side_area_text_lineheight = new PitchQodeField(
	"textsimple",
	"side_area_text_lineheight",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"side_area_text_lineheight",
	$side_area_text_lineheight
);
$side_area_text_texttransform = new PitchQodeField(
	"selectblanksimple",
	"side_area_text_texttransform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	"side_area_text_texttransform",
	$side_area_text_texttransform
);
$row2 = new PitchQodeRow( true );
$group3->addChild(
	"row2",
	$row2
);
$side_area_text_google_fonts = new PitchQodeField(
	"fontsimple",
	"side_area_text_google_fonts",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"side_area_text_google_fonts",
	$side_area_text_google_fonts
);
$side_area_text_fontstyle = new PitchQodeField(
	"selectblanksimple",
	"side_area_text_fontstyle",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"side_area_text_fontstyle",
	$side_area_text_fontstyle
);
$side_area_text_fontweight = new PitchQodeField(
	"selectblanksimple",
	"side_area_text_fontweight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"side_area_text_fontweight",
	$side_area_text_fontweight
);
$side_area_text_letterspacing = new PitchQodeField(
	"textsimple",
	"side_area_text_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"side_area_text_letterspacing",
	$side_area_text_letterspacing
);

$group2 = new PitchQodeGroup(
	esc_html__( "Link Style", 'pitch' ),
	esc_html__( "Define styles for side area widget links", 'pitch' )
);
$enable_side_area_container->addChild(
	"group2",
	$group2
);
$row1 = new PitchQodeRow();
$group2->addChild(
	"row1",
	$row1
);
$sidearea_link_color = new PitchQodeField(
	"colorsimple",
	"sidearea_link_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"sidearea_link_color",
	$sidearea_link_color
);

$sidearea_link_font_size = new PitchQodeField(
	"textsimple",
	"sidearea_link_font_size",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"sidearea_link_font_size",
	$sidearea_link_font_size
);

$sidearea_link_line_height = new PitchQodeField(
	"textsimple",
	"sidearea_link_line_height",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"sidearea_link_line_height",
	$sidearea_link_line_height
);

$sidearea_link_text_transform = new PitchQodeField(
	"selectblanksimple",
	"sidearea_link_text_transform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	"sidearea_link_text_transform",
	$sidearea_link_text_transform
);

$row2 = new PitchQodeRow( true );
$group2->addChild(
	"row2",
	$row2
);
$sidearea_link_font_family = new PitchQodeField(
	"fontsimple",
	"sidearea_link_font_family",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"sidearea_link_font_family",
	$sidearea_link_font_family
);

$sidearea_link_font_style = new PitchQodeField(
	"selectblanksimple",
	"sidearea_link_font_style",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"sidearea_link_font_style",
	$sidearea_link_font_style
);

$sidearea_link_font_weight = new PitchQodeField(
	"selectblanksimple",
	"sidearea_link_font_weight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"sidearea_link_font_weight",
	$sidearea_link_font_weight
);

$sidearea_link_letter_spacing = new PitchQodeField(
	"textsimple",
	"sidearea_link_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"sidearea_link_letter_spacing",
	$sidearea_link_letter_spacing
);

$row3 = new PitchQodeRow( true );
$group2->addChild(
	"row3",
	$row3
);
$sidearea_link_hover_color = new PitchQodeField(
	"colorsimple",
	"sidearea_link_hover_color",
	"",
	esc_html__( "Hover Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row3->addChild(
	"sidearea_link_hover_color",
	$sidearea_link_hover_color
);

$side_area_enable_bottom_border = new PitchQodeField(
	"yesno",
	"side_area_enable_bottom_border",
	"no",
	esc_html__( "Border Bottom on Elements", 'pitch' ),
	esc_html__( "Enable border bottom on elements in side area", 'pitch' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_side_area_bottom_border_container"
	)
);
$enable_side_area_container->addChild(
	"side_area_enable_bottom_border",
	$side_area_enable_bottom_border
);

$side_area_bottom_border_container = new PitchQodeContainer(
	"side_area_bottom_border_container",
	"side_area_enable_bottom_border",
	"no"
);
$enable_side_area_container->addChild(
	"side_area_bottom_border_container",
	$side_area_bottom_border_container
);

$side_area_bottom_border_color = new PitchQodeField(
	"color",
	"side_area_bottom_border_color",
	"",
	esc_html__( "Choose Color for Border Bottom", 'pitch' ),
	esc_html__( "Choose color for border bottom on elements in sidearea", 'pitch' )
);
$side_area_bottom_border_container->addChild(
	"side_area_bottom_border_color",
	$side_area_bottom_border_color
);

// Fullscreen Menu

$panel12 = new PitchQodePanel(
	esc_html__( "Fullscreen Menu", 'pitch' ),
	"enable_popup_menu_panel",
	"header_type",
	"",
	array( "side" )
);
$headerandfooterPage->addChild(
	"panel12",
	$panel12
);

$enable_popup_menu = new PitchQodeField(
	"yesno",
	"enable_popup_menu",
	"no",
	esc_html__( "Enable Fullscreen Menu", 'pitch' ),
	esc_html__( "This option enables a fullscreen menu to be opened from main menu navigation", 'pitch' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_enable_popup_menu_container"
	)
);
$panel12->addChild(
	"enable_popup_menu",
	$enable_popup_menu
);

$enable_popup_menu_container = new PitchQodeContainer(
	"enable_popup_menu_container",
	"enable_popup_menu",
	"no"
);
$panel12->addChild(
	"enable_popup_menu_container",
	$enable_popup_menu_container
);

$popup_menu_animation_style = new PitchQodeField(
	"select",
	"popup_menu_animation_style",
	"appear_from_bottom",
	esc_html__( "Fullscreen Menu Overlay Animation", 'pitch' ),
	esc_html__( "Choose animation type for fullscreen menu overlay", 'pitch' ),
	array(
		'fade_push_text_right' => esc_html__( 'Fade Push Text Right', 'pitch' ),
		'fade_push_text_top' => esc_html__( 'Fade Push Text Top', 'pitch' ),
		'fade_text_scaledown' => esc_html__( 'Fade Text Scaledown', 'pitch' )
	)
);
$enable_popup_menu_container->addChild(
	"popup_menu_animation_style",
	$popup_menu_animation_style
);

$logo_image_popup = new PitchQodeField(
	"image",
	"logo_image_popup",
	"",
	esc_html__( "Logo in Fullscreen Menu Overlay", 'pitch' ),
	esc_html__( "Place logo in top left corner of fullscreen menu overlay", 'pitch' )
);
$enable_popup_menu_container->addChild(
	"logo_image_popup",
	$logo_image_popup
);

$popup_in_grid = new PitchQodeField(
	"yesno",
	"popup_in_grid",
	"no",
	esc_html__( "Fullscreen Menu in Grid", 'pitch' ),
	esc_html__( "Enabling this option will put fullscreen menu content in grid", 'pitch' )
);
$enable_popup_menu_container->addChild(
	"popup_in_grid",
	$popup_in_grid
);

$popup_alignment = new PitchQodeField(
	"selectblank",
	"popup_alignment",
	"",
	esc_html__( "Fullscreen Menu Alignment", 'pitch' ),
	esc_html__( "Choose alignment for fullscreen menu content", 'pitch' ),
	array(
		"left" => esc_html__( "Left", 'pitch' ),
		"center" => esc_html__( "Center", 'pitch' ),
		"right" => esc_html__( "Right", 'pitch' )
	)
);
$enable_popup_menu_container->addChild(
	"popup_alignment",
	$popup_alignment
);

$group4 = new PitchQodeGroup(
	esc_html__( "Background", 'pitch' ),
	esc_html__( "Select a background color and transparency for Fullscreen Menu (0 = fully transparent, 1 = opaque)", 'pitch' )
);
$enable_popup_menu_container->addChild(
	"group4",
	$group4
);

$row1 = new PitchQodeRow( true );
$group4->addChild(
	"row1",
	$row1
);

$popup_menu_background_color = new PitchQodeField(
	"colorsimple",
	"popup_menu_background_color",
	"",
	esc_html__( "Background Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"popup_menu_background_color",
	$popup_menu_background_color
);
$popup_menu_background_transparency = new PitchQodeField(
	"textsimple",
	"popup_menu_background_transparency",
	"",
	esc_html__( "Transparency (values:0-1)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"popup_menu_background_transparency",
	$popup_menu_background_transparency
);

$background_image_popup = new PitchQodeField(
	"image",
	"background_image_popup",
	"",
	esc_html__( "Background Image", 'pitch' ),
	esc_html__( "Choose a background image for Fullscreen Menu background", 'pitch' )
);
$enable_popup_menu_container->addChild(
	"background_image_popup",
	$background_image_popup
);

$pattern_image_popup = new PitchQodeField(
	"image",
	"pattern_image_popup",
	"",
	esc_html__( "Pattern Background Image", 'pitch' ),
	esc_html__( "Choose a pattern image for Fullscreen Menu background", 'pitch' )
);
$enable_popup_menu_container->addChild(
	"pattern_image_popup",
	$pattern_image_popup
);

$group1 = new PitchQodeGroup(
	"1st Level Style",
	esc_html__( "Define styles for 1st level in Fullscreen Menu", 'pitch' )
);
$enable_popup_menu_container->addChild(
	"group1",
	$group1
);

$row1 = new PitchQodeRow();
$group1->addChild(
	"row1",
	$row1
);

$popup_menu_color = new PitchQodeField(
	"colorsimple",
	"popup_menu_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"popup_menu_color",
	$popup_menu_color
);
$popup_menu_hover_color = new PitchQodeField(
	"colorsimple",
	"popup_menu_hover_color",
	"",
	esc_html__( "Hover Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"popup_menu_hover_color",
	$popup_menu_hover_color
);
$popup_menu_active_color = new PitchQodeField(
	"colorsimple",
	"popup_menu_active_color",
	"",
	esc_html__( "Active Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"popup_menu_active_color",
	$popup_menu_active_color
);

$row4 = new PitchQodeRow();
$group1->addChild(
	"row4",
	$row4
);
$popup_menu_hover_background_color = new PitchQodeField(
	"colorsimple",
	"popup_menu_hover_background_color",
	"",
	esc_html__( "Background Hover Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row4->addChild(
	"popup_menu_hover_background_color",
	$popup_menu_hover_background_color
);
$popup_menu_active_background_color = new PitchQodeField(
	"colorsimple",
	"popup_menu_active_background_color",
	"",
	esc_html__( "Background Active Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row4->addChild(
	"popup_menu_active_background_color",
	$popup_menu_active_background_color
);

$row2 = new PitchQodeRow( true );
$group1->addChild(
	"row2",
	$row2
);

$popup_menu_google_fonts = new PitchQodeField(
	"fontsimple",
	"popup_menu_google_fonts",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"popup_menu_google_fonts",
	$popup_menu_google_fonts
);
$popup_menu_fontsize = new PitchQodeField(
	"textsimple",
	"popup_menu_fontsize",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"popup_menu_fontsize",
	$popup_menu_fontsize
);
$popup_menu_lineheight = new PitchQodeField(
	"textsimple",
	"popup_menu_lineheight",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"popup_menu_lineheight",
	$popup_menu_lineheight
);

$row3 = new PitchQodeRow( true );
$group1->addChild(
	"row3",
	$row3
);

$popup_menu_fontstyle = new PitchQodeField(
	"selectblanksimple",
	"popup_menu_fontstyle",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row3->addChild(
	"popup_menu_fontstyle",
	$popup_menu_fontstyle
);
$popup_menu_fontweight = new PitchQodeField(
	"selectblanksimple",
	"popup_menu_fontweight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row3->addChild(
	"popup_menu_fontweight",
	$popup_menu_fontweight
);
$popup_menu_letterspacing = new PitchQodeField(
	"textsimple",
	"popup_menu_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row3->addChild(
	"popup_menu_letterspacing",
	$popup_menu_letterspacing
);
$popup_menu_texttransform = new PitchQodeField(
	"selectblanksimple",
	"popup_menu_texttransform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row3->addChild(
	"popup_menu_texttransform",
	$popup_menu_texttransform
);

$group2 = new PitchQodeGroup(
	"2nd Level Style",
	esc_html__( "Define styles for 2nd level in Fullscreen Menu", 'pitch' )
);
$enable_popup_menu_container->addChild(
	"group2",
	$group2
);

$row1 = new PitchQodeRow();
$group2->addChild(
	"row1",
	$row1
);

$popup_menu_color_2nd = new PitchQodeField(
	"colorsimple",
	"popup_menu_color_2nd",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"popup_menu_color_2nd",
	$popup_menu_color_2nd
);
$popup_menu_hover_color_2nd = new PitchQodeField(
	"colorsimple",
	"popup_menu_hover_color_2nd",
	"",
	esc_html__( "Hover Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"popup_menu_hover_color_2nd",
	$popup_menu_hover_color_2nd
);
$popup_menu_hover_background_color_2nd = new PitchQodeField(
	"colorsimple",
	"popup_menu_hover_background_color_2nd",
	"",
	esc_html__( "Background Hover Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"popup_menu_hover_background_color_2nd",
	$popup_menu_hover_background_color_2nd
);

$row2 = new PitchQodeRow( true );
$group2->addChild(
	"row2",
	$row2
);

$popup_menu_google_fonts_2nd = new PitchQodeField(
	"fontsimple",
	"popup_menu_google_fonts_2nd",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"popup_menu_google_fonts_2nd",
	$popup_menu_google_fonts_2nd
);
$popup_menu_fontsize_2nd = new PitchQodeField(
	"textsimple",
	"popup_menu_fontsize_2nd",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"popup_menu_fontsize_2nd",
	$popup_menu_fontsize_2nd
);
$popup_menu_lineheight_2nd = new PitchQodeField(
	"textsimple",
	"popup_menu_lineheight_2nd",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"popup_menu_lineheight_2nd",
	$popup_menu_lineheight_2nd
);

$row3 = new PitchQodeRow( true );
$group2->addChild(
	"row3",
	$row3
);

$popup_menu_fontstyle_2nd = new PitchQodeField(
	"selectblanksimple",
	"popup_menu_fontstyle_2nd",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row3->addChild(
	"popup_menu_fontstyle_2nd",
	$popup_menu_fontstyle_2nd
);
$popup_menu_fontweight_2nd = new PitchQodeField(
	"selectblanksimple",
	"popup_menu_fontweight_2nd",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row3->addChild(
	"popup_menu_fontweight_2nd",
	$popup_menu_fontweight_2nd
);
$popup_menu_letterspacing_2nd = new PitchQodeField(
	"textsimple",
	"popup_menu_letterspacing_2nd",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row3->addChild(
	"popup_menu_letterspacing_2nd",
	$popup_menu_letterspacing_2nd
);
$popup_menu_texttransform_2nd = new PitchQodeField(
	"selectblanksimple",
	"popup_menu_texttransform_2nd",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row3->addChild(
	"popup_menu_texttransform_2nd",
	$popup_menu_texttransform_2nd
);

$group3 = new PitchQodeGroup(
	"3rd Level Style",
	esc_html__( "Define styles for 3rd level in Fullscreen Menu", 'pitch' )
);
$enable_popup_menu_container->addChild(
	"group3",
	$group3
);

$row1 = new PitchQodeRow();
$group3->addChild(
	"row1",
	$row1
);

$popup_menu_3rd_color = new PitchQodeField(
	"colorsimple",
	"popup_menu_3rd_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"popup_menu_3rd_color",
	$popup_menu_3rd_color
);
$popup_menu_3rd_hover_color = new PitchQodeField(
	"colorsimple",
	"popup_menu_3rd_hover_color",
	"",
	esc_html__( "Hover Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"popup_menu_3rd_hover_color",
	$popup_menu_3rd_hover_color
);
$popup_menu_3rd_hover_background_color = new PitchQodeField(
	"colorsimple",
	"popup_menu_3rd_hover_background_color",
	"",
	esc_html__( "Background Hover Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"popup_menu_3rd_hover_background_color",
	$popup_menu_3rd_hover_background_color
);

$row2 = new PitchQodeRow( true );
$group3->addChild(
	"row2",
	$row2
);

$popup_menu_3rd_google_fonts = new PitchQodeField(
	"fontsimple",
	"popup_menu_3rd_google_fonts",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"popup_menu_3rd_google_fonts",
	$popup_menu_3rd_google_fonts
);
$popup_menu_3rd_fontsize = new PitchQodeField(
	"textsimple",
	"popup_menu_3rd_fontsize",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"popup_menu_3rd_fontsize",
	$popup_menu_3rd_fontsize
);
$popup_menu_3rd_lineheight = new PitchQodeField(
	"textsimple",
	"popup_menu_3rd_lineheight",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$popup_menu_3rd_lineheight = new PitchQodeField(
	"textsimple",
	"popup_menu_3rd_lineheight",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"popup_menu_3rd_lineheight",
	$popup_menu_3rd_lineheight
);

$row3 = new PitchQodeRow( true );
$group3->addChild(
	"row3",
	$row3
);

$popup_menu_3rd_fontstyle = new PitchQodeField(
	"selectblanksimple",
	"popup_menu_3rd_fontstyle",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row3->addChild(
	"popup_menu_3rd_fontstyle",
	$popup_menu_3rd_fontstyle
);
$popup_menu_3rd_fontweight = new PitchQodeField(
	"selectblanksimple",
	"popup_menu_3rd_fontweight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row3->addChild(
	"popup_menu_3rd_fontweight",
	$popup_menu_3rd_fontweight
);
$popup_menu_3rd_letterspacing = new PitchQodeField(
	"textsimple",
	"popup_menu_3rd_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row3->addChild(
	"popup_menu_3rd_letterspacing",
	$popup_menu_3rd_letterspacing
);
$popup_menu_3rd_texttransform = new PitchQodeField(
	"selectblanksimple",
	"popup_menu_3rd_texttransform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row3->addChild(
	"popup_menu_3rd_texttransform",
	$popup_menu_3rd_texttransform
);

$group5 = new PitchQodeGroup(
	esc_html__( "Full Screen Menu Icon Spacing", 'pitch' ),
	esc_html__( "Define padding and margin for full screen menu icon", 'pitch' )
);
$enable_popup_menu_container->addChild(
	"group5",
	$group5
);

$row1 = new PitchQodeRow();
$group5->addChild(
	"row1",
	$row1
);

$popup_menu_icon_padding_left = new PitchQodeField(
	"textsimple",
	"popup_menu_icon_padding_left",
	"",
	esc_html__( "Padding Left (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"popup_menu_icon_padding_left",
	$popup_menu_icon_padding_left
);

$popup_menu_icon_padding_right = new PitchQodeField(
	"textsimple",
	"popup_menu_icon_padding_right",
	"",
	esc_html__( "Padding Right (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"popup_menu_icon_padding_right",
	$popup_menu_icon_padding_right
);

$popup_menu_icon_margin_left = new PitchQodeField(
	"textsimple",
	"popup_menu_icon_margin_left",
	"",
	esc_html__( "Margin Left (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"popup_menu_icon_margin_left",
	$popup_menu_icon_margin_left
);

$popup_menu_icon_margin_right = new PitchQodeField(
	"textsimple",
	"popup_menu_icon_margin_right",
	"",
	esc_html__( "Margin Right (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"popup_menu_icon_margin_right",
	$popup_menu_icon_margin_right
);

$panel2 = new PitchQodePanel(
	esc_html__( "Header Top", 'pitch' ),
	"header_top_panel",
	"header_type",
	"",
	array( "side" )
);
$headerandfooterPage->addChild(
	"panel2",
	$panel2
);

$header_top_area = new PitchQodeField(
	"yesno",
	"header_top_area",
	"no",
	esc_html__( "Show Header Top Area", 'pitch' ),
	"Enabling this option will show Header Top area (this setting applies to Header Left and Header Right widgets)
    ",
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_header_top_area_container"
	)
);
$panel2->addChild(
	"header_top_area",
	$header_top_area
);

$header_top_area_container = new PitchQodeContainer(
	"header_top_area_container",
	"header_top_area",
	"no"
);
$panel2->addChild(
	"header_top_area_container",
	$header_top_area_container
);

$header_top_area_scroll_container = new PitchQodeContainer(
	"header_top_area_scroll_container",
	"header_bottom_appearance",
	"",
	array( "fixed_top_header" )
);
$header_top_area_container->addChild(
	"header_top_area_scroll_container",
	$header_top_area_scroll_container
);

$header_top_area_scroll = new PitchQodeField(
	"yesno",
	"header_top_area_scroll",
	"no",
	esc_html__( "Hide on Scroll", 'pitch' ),
	esc_html__( "Enabling this option will hide Header Top on scroll (if fixed header types are chosen)", 'pitch' )
);
$header_top_area_scroll_container->addChild(
	"header_top_area_scroll",
	$header_top_area_scroll
);

$header_top_height = new PitchQodeField(
	"text",
	"header_top_height",
	"",
	esc_html__( "Header Top Height", 'pitch' ),
	esc_html__( "Enter height for header top", 'pitch' ),
	array(),
	array( "col_width" => 3 )
);
$header_top_area_container->addChild(
	"header_top_height",
	$header_top_height
);

$header_top_has_background_pattern = new PitchQodeField(
	"yesno",
	"header_top_has_background_pattern",
	"no",
	esc_html__( "Background Pattern Image", 'pitch' ),
	"Enabling this option will display background pattern image in header top area.
		",
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_header_top_background_pattern_image_container"
	)
);
$header_top_area_container->addChild(
	"header_top_has_background_pattern",
	$header_top_has_background_pattern
);

$header_top_background_pattern_image_container = new PitchQodeContainer(
	"header_top_background_pattern_image_container",
	"header_top_has_background_pattern",
	"no"
);
$header_top_area_container->addChild(
	"header_top_background_pattern_image_container",
	$header_top_background_pattern_image_container
);

$group10 = new PitchQodeGroup(
	esc_html__( "Image", 'pitch' ),
	esc_html__( "Choose pattern image for header top background", 'pitch' )
);
$header_top_background_pattern_image_container->addChild(
	"group10",
	$group10
);
$row1 = new PitchQodeRow();
$group10->addChild(
	"row1",
	$row1
);

$header_top_background_pattern_image = new PitchQodeField(
	"imagesimple",
	"header_top_background_pattern_image",
	"",
	esc_html__( "Pattern Image", 'pitch' ),
	""
);
$row1->addChild(
	"header_top_background_pattern_image",
	$header_top_background_pattern_image
);

$header_top_background_color = new PitchQodeField(
	"color",
	"header_top_background_color",
	"",
	esc_html__( "Background Color", 'pitch' ),
	esc_html__( "Choose a background color for Header Top area", 'pitch' )
);
$header_top_area_container->addChild(
	"header_top_background_color",
	$header_top_background_color
);

$header_top_transparency = new PitchQodeField(
	"text",
	"header_top_transparency",
	"",
	esc_html__( "Header Top Transparency", 'pitch' ),
	esc_html__( "Choose a transparency for the Header Top background color (0 = fully transparent, 1 = opaque)", 'pitch' ),
	array(),
	array( "col_width" => 3 )
);
$header_top_area_container->addChild(
	"header_top_transparency",
	$header_top_transparency
);

$top_header_border_color = new PitchQodeField(
	"color",
	"top_header_border_color",
	"",
	esc_html__( "Border Bottom Color", 'pitch' ),
	esc_html__( "Set a color for the bottom border of the Header Top Area.", 'pitch' )
);
$header_top_area_container->addChild(
	"top_header_border_color",
	$top_header_border_color
);

$top_header_border_weight = new PitchQodeField(
	"text",
	"top_header_border_weight",
	"",
	esc_html__( "Border Width (px)", 'pitch' ),
	esc_html__( "Set a border width for the bottom border of the Header Top Area.", 'pitch' ),
	array(),
	array( "col_width" => 3 )
);
$header_top_area_container->addChild(
	"top_header_border_weight",
	$top_header_border_weight
);

$group_header_top_menu = new PitchQodeGroup(
	esc_html__( "Menu Item Text Decoration", 'pitch' ),
	""
);
$header_top_area_container->addChild(
	"group_header_top_menu",
	$group_header_top_menu
);

$row1 = new PitchQodeRow();
$group_header_top_menu->addChild(
	"row1",
	$row1
);

$header_top_menu_item_text_decoration_style = new PitchQodeField(
	"selectsimple",
	"header_top_menu_item_text_decoration_style",
	"none",
	esc_html__( "Hover Item Text Decoration", 'pitch' ),
	esc_html__( "Choose text decoration type for hover menu items", 'pitch' ),
	array(
		"none" => esc_html__( "None", 'pitch' ),
		"underline" => esc_html__( "Underline", 'pitch' ),
		"line-through" => esc_html__( "Line-through", 'pitch' ),
		"overline" => esc_html__( "Overline", 'pitch' )
	)
);
$row1->addChild(
	"header_top_menu_item_text_decoration_style",
	$header_top_menu_item_text_decoration_style
);

$header_top_menu_active_text_decoration_style = new PitchQodeField(
	"selectsimple",
	"header_top_menu_active_text_decoration_style",
	"none",
	esc_html__( "Active Item Text Decoration", 'pitch' ),
	esc_html__( "Choose text decoration type for active menu items", 'pitch' ),
	array(
		"none" => esc_html__( "None", 'pitch' ),
		"underline" => esc_html__( "Underline", 'pitch' ),
		"line-through" => esc_html__( "Line-through", 'pitch' ),
		"overline" => esc_html__( "Overline", 'pitch' )
	)
);
$row1->addChild(
	"header_top_menu_active_text_decoration_style",
	$header_top_menu_active_text_decoration_style
);

$widget_elements_header_top = new PitchQodeTitle(
	"widget_elements_header_top",
	esc_html__( "Widget Elements", 'pitch' )
);
$header_top_area_container->addChild(
	"widget_elements_header_top",
	$widget_elements_header_top
);

$group9 = new PitchQodeGroup(
	esc_html__( "Search", 'pitch' ),
	esc_html__( "Define styles for search in widget", 'pitch' )
);
$header_top_area_container->addChild(
	"group9",
	$group9
);

$row1 = new PitchQodeRow();
$group9->addChild(
	"row1",
	$row1
);

$header_top_search_height = new PitchQodeField(
	"textsimple",
	"header_top_search_height",
	"",
	esc_html__( "Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"header_top_search_height",
	$header_top_search_height
);

$header_top_search_border_color = new PitchQodeField(
	"colorsimple",
	"header_top_search_border_color",
	"",
	esc_html__( "Border Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"header_top_search_border_color",
	$header_top_search_border_color
);

$header_top_search_loupe_color = new PitchQodeField(
	"colorsimple",
	"header_top_search_loupe_color",
	"",
	esc_html__( "Magnifier Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"header_top_search_loupe_color",
	$header_top_search_loupe_color
);

$header_top_search_loupe_background_color = new PitchQodeField(
	"colorsimple",
	"header_top_search_loupe_background_color",
	"",
	esc_html__( "Magnifier Area Background Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"header_top_search_loupe_background_color",
	$header_top_search_loupe_background_color
);

$row2 = new PitchQodeRow();
$group9->addChild(
	"row2",
	$row2
);

$header_top_search_text_color = new PitchQodeField(
	"colorsimple",
	"header_top_search_text_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"header_top_search_text_color",
	$header_top_search_text_color
);

$header_top_search_focus_text_color = new PitchQodeField(
	"colorsimple",
	"header_top_search_focus_text_color",
	"",
	esc_html__( "Focus Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"header_top_search_focus_text_color",
	$header_top_search_focus_text_color
);

$header_top_search_text_font_size = new PitchQodeField(
	"textsimple",
	"header_top_search_text_font_size",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"header_top_search_text_font_size",
	$header_top_search_text_font_size
);

$header_top_search_text_line_height = new PitchQodeField(
	"textsimple",
	"header_top_search_text_line_height",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"header_top_search_text_line_height",
	$header_top_search_text_line_height
);

$row3 = new PitchQodeRow( true );
$group9->addChild(
	"row3",
	$row3
);

$header_top_search_text_text_transform = new PitchQodeField(
	"selectblanksimple",
	"header_top_search_text_text_transform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row3->addChild(
	"header_top_search_text_text_transform",
	$header_top_search_text_text_transform
);

$header_top_search_text_font_family = new PitchQodeField(
	"fontsimple",
	"header_top_search_text_font_family",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row3->addChild(
	"header_top_search_text_font_family",
	$header_top_search_text_font_family
);

$header_top_search_text_font_style = new PitchQodeField(
	"selectblanksimple",
	"header_top_search_text_font_style",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row3->addChild(
	"header_top_search_text_font_style",
	$header_top_search_text_font_style
);

$header_top_search_text_font_weight = new PitchQodeField(
	"selectblanksimple",
	"header_top_search_text_font_weight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row3->addChild(
	"header_top_search_text_font_weight",
	$header_top_search_text_font_weight
);

$row4 = new PitchQodeRow( true );
$group9->addChild(
	"row4",
	$row4
);

$header_top_search_text_letter_spacing = new PitchQodeField(
	"textsimple",
	"header_top_search_text_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row4->addChild(
	"header_top_search_text_letter_spacing",
	$header_top_search_text_letter_spacing
);

$header_top_search_border_around = new PitchQodeField(
	"selectsimple",
	"header_top_search_border_around",
	"",
	esc_html__( "Border Around", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	array(
		"around_everything" => esc_html__( "Around Everything", 'pitch' ),
		"around_search_text" => esc_html__( "Around Search Text", 'pitch' )
	)
);
$row4->addChild(
	"header_top_search_border_around",
	$header_top_search_border_around
);

$row5 = new PitchQodeRow( true );
$group9->addChild(
	"row5",
	$row5
);

$header_top_search_width = new PitchQodeField(
	"textsimple",
	"header_top_search_width",
	"",
	esc_html__( "Width (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row5->addChild(
	"header_top_search_text_font_size",
	$header_top_search_width
);

$header_top_search_margin_left = new PitchQodeField(
	"textsimple",
	"header_top_search_margin_left",
	"",
	esc_html__( "Left Margin (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row5->addChild(
	"header_top_search_margin_left",
	$header_top_search_margin_left
);

$header_top_search_margin_right = new PitchQodeField(
	"textsimple",
	"header_top_search_margin_right",
	"",
	esc_html__( "Right Margin (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row5->addChild(
	"header_top_search_margin_right",
	$header_top_search_margin_right
);

$panel7 = new PitchQodePanel(
	esc_html__( "Side Menu Area", 'pitch' ),
	"vertical_areas_panel",
	"header_type",
	"",
	array( "top" )
);
$headerandfooterPage->addChild(
	"panel7",
	$panel7
);

$vertical_area_type = new PitchQodeField(
	"select",
	"vertical_area_type",
	"left",
	esc_html__( "Side Menu Area Type", 'pitch' ),
	esc_html__( "Specify menu type", 'pitch' ),
	array(
		"" => esc_html__( "Always Opened (Default)", 'pitch' ),
		"hidden" => esc_html__( "Initially Hidden", 'pitch' ),
		"hidden_with_icons" => esc_html__( "Initially Hidden With Visible Icons", 'pitch' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			""                  => "#qodef_vertical_area_hidden_button_color_container",
			"hidden"            => "",
			"hidden_with_icons" => "#qodef_enable_vertical_menu_item_left_border_container"
		),
		"show"       => array(
			""                  => "#qodef_enable_vertical_menu_item_left_border_container",
			"hidden"            => "#qodef_vertical_area_hidden_button_color_container, #qodef_enable_vertical_menu_item_left_border_container",
			"hidden_with_icons" => "#qodef_vertical_area_hidden_button_color_container"
		)
	)
);
$panel7->addChild(
	"vertical_area_type",
	$vertical_area_type
);

$vertical_area_hidden_button_color_container = new PitchQodeContainer(
	"vertical_area_hidden_button_color_container",
	"vertical_area_type",
	""
);
$panel7->addChild(
	"vertical_area_hidden_button_color_container",
	$vertical_area_hidden_button_color_container
);

$vertical_area_hidden_button_color = new PitchQodeField(
	"color",
	"vertical_area_hidden_button_color",
	"",
	esc_html__( "Button Color", 'pitch' ),
	esc_html__( "Choose a color for button that opens/closes Hidden Side Menu Area", 'pitch' )
);
$vertical_area_hidden_button_color_container->addChild(
	"vertical_area_hidden_button_color",
	$vertical_area_hidden_button_color
);

$vertical_area_width = new PitchQodeField(
	"select",
	"vertical_area_width",
	"width_290",
	esc_html__( "Side Menu Area Width", 'pitch' ),
	esc_html__( "Choose width for side menu area.", 'pitch' ),
	array(
		"width_290" => esc_html__( "290px", 'pitch' ),
		"width_350" => esc_html__( "350px", 'pitch' ),
		"width_400" => esc_html__( "400px", 'pitch' )
	)
);
$panel7->addChild(
	"vertical_area_width",
	$vertical_area_width
);

$vertical_area_position = new PitchQodeField(
	"select",
	"vertical_area_position",
	"left",
	esc_html__( "Side Menu Area Position", 'pitch' ),
	esc_html__( "Choose side menu position relative to browser screen", 'pitch' ),
	array(
		"left" => esc_html__( "Left", 'pitch' ),
		"right" => esc_html__( "Right", 'pitch' )
	)
);
$panel7->addChild(
	"vertical_area_position",
	$vertical_area_position
);

$vertical_area_dropdown_showing = new PitchQodeField(
	"select",
	"vertical_area_dropdown_showing",
	"hover",
	esc_html__( "Submenu Opening Behaviour", 'pitch' ),
	esc_html__( "Specify 2nd and 3rd level menu opening style", 'pitch' ),
	array(
		"hover" => esc_html__( "On Hover", 'pitch' ),
		"click" => esc_html__( "On Click", 'pitch' ),
		"side" => esc_html__( "Slide In", 'pitch' ),
		"to_content" => esc_html__( "Float", 'pitch' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			"hover"      => "#qodef_vertical_area_dropdown_background_container, #qodef_vertical_menu_dd_separator_container",
			"click"      => "#qodef_vertical_area_dropdown_background_container, #qodef_vertical_menu_dd_separator_container",
			"side"       => "#qodef_vertical_area_transparency_container, #qodef_vertical_area_background_container, #qodef_vertical_area_dropdown_background_container, #qodef_vertical_menu_dd_separator_container",
			"to_content" => ""
		),
		"show"       => array(
			"hover"      => "#qodef_vertical_area_transparency_container, #qodef_vertical_area_background_container",
			"click"      => "#qodef_vertical_area_transparency_container, #qodef_vertical_area_background_container",
			"side"       => "",
			"to_content" => "#qodef_vertical_area_transparency_container, #qodef_vertical_area_background_container, #qodef_vertical_area_dropdown_background_container, #qodef_vertical_menu_dd_separator_container"
		)
	)
);
$panel7->addChild(
	"vertical_area_dropdown_showing",
	$vertical_area_dropdown_showing
);

$vertical_area_background = new PitchQodeField(
	"color",
	"vertical_area_background",
	"",
	esc_html__( "Side Menu Area Background Color", 'pitch' ),
	esc_html__( "Choose a color for Side Menu Area background", 'pitch' )
);
$panel7->addChild(
	"vertical_area_background",
	$vertical_area_background
);

$vertical_area_transparency_container = new PitchQodeContainer(
	"vertical_area_transparency_container",
	"vertical_area_dropdown_showing",
	"side"
);
$panel7->addChild(
	"vertical_area_transparency_container",
	$vertical_area_transparency_container
);

$vertical_area_background_transparency = new PitchQodeField(
	"text",
	"vertical_area_background_transparency",
	"",
	esc_html__( "Side Menu Area Background Opacity", 'pitch' ),
	esc_html__( "Choose a opacity for the Side Menu Area Background (0 = fully transparent, 1 = opaque)", 'pitch' ),
	array(),
	array( "col_width" => 3 )
);
$vertical_area_transparency_container->addChild(
	"vertical_area_background_transparency",
	$vertical_area_background_transparency
);

$vertical_area_background_container = new PitchQodeContainer(
	"vertical_area_background_container",
	"vertical_area_dropdown_showing",
	"side"
);
$vertical_area_transparency_container->addChild(
	"vertical_area_background_container",
	$vertical_area_background_container
);

$vertical_area_background_image = new PitchQodeField(
	"image",
	"vertical_area_background_image",
	"",
	esc_html__( "Side Menu Area Background Image", 'pitch' ),
	esc_html__( "Choose an image for Side Menu background", 'pitch' )
);
$vertical_area_background_container->addChild(
	"vertical_area_background_image",
	$vertical_area_background_image
);

$vertical_area_transparency_over_slider = new PitchQodeField(
	"yesno",
	"vertical_area_transparency_over_slider",
	"no",
	esc_html__( "Transparency Setting Takes Effect Only on Select Slider", 'pitch' ),
	esc_html__( "Enabling this option will ensure that the transparency set in the 'Side Menu Area Background Opacity' takes effect only when the side menu area is over the Qode Slider", 'pitch' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => ""
	)
);
$vertical_area_transparency_container->addChild(
	"vertical_area_transparency_over_slider",
	$vertical_area_transparency_over_slider
);

$vertical_area_transparency = new PitchQodeField(
	"yesno",
	"vertical_area_transparency",
	"no",
	esc_html__( "Enable Fully Transparent Side Menu Area Over Qode Slider", 'pitch' ),
	esc_html__( "Enabling this option will make Side Menu Area background over Qode Slider fully transparent", 'pitch' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_vertical_area_transparency_fonts_container"
	)
);
$vertical_area_transparency_container->addChild(
	"vertical_area_transparency",
	$vertical_area_transparency
);

$vertical_area_transparency_fonts_container = new PitchQodeContainer(
	"vertical_area_transparency_fonts_container",
	"vertical_area_transparency",
	"no"
);
$vertical_area_transparency_container->addChild(
	"vertical_area_transparency_fonts_container",
	$vertical_area_transparency_fonts_container
);

$group1 = new PitchQodeGroup(
	"1st Level Transparent Menu Style",
	esc_html__( "Define styles for 1st level in Transparent Side Menu", 'pitch' )
);
$vertical_area_transparency_fonts_container->addChild(
	"group1",
	$group1
);

$row1 = new PitchQodeRow();
$group1->addChild(
	"row1",
	$row1
);

$vertical_transparent_menu_color = new PitchQodeField(
	"colorsimple",
	"vertical_transparent_menu_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"vertical_transparent_menu_color",
	$vertical_transparent_menu_color
);
$vertical_transparent_menu_hovercolor = new PitchQodeField(
	"colorsimple",
	"vertical_transparent_menu_hovercolor",
	"",
	esc_html__( "Hover Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"vertical_transparent_menu_hovercolor",
	$vertical_transparent_menu_hovercolor
);
$vertical_transparent_menu_activecolor = new PitchQodeField(
	"colorsimple",
	"vertical_transparent_menu_activecolor",
	"",
	esc_html__( "Active Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"vertical_transparent_menu_activecolor",
	$vertical_transparent_menu_activecolor
);

$row2 = new PitchQodeRow( true );
$group1->addChild(
	"row2",
	$row2
);

$vertical_transparent_menu_google_fonts = new PitchQodeField(
	"fontsimple",
	"vertical_transparent_menu_google_fonts",
	"-1",
	esc_html__( "Font family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"vertical_transparent_menu_google_fonts",
	$vertical_transparent_menu_google_fonts
);
$vertical_transparent_menu_fontsize = new PitchQodeField(
	"textsimple",
	"vertical_transparent_menu_fontsize",
	"",
	esc_html__( "Font size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"vertical_transparent_menu_fontsize",
	$vertical_transparent_menu_fontsize
);
$vertical_transparent_menu_lineheight = new PitchQodeField(
	"textsimple",
	"vertical_transparent_menu_lineheight",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"vertical_transparent_menu_lineheight",
	$vertical_transparent_menu_lineheight
);

$row3 = new PitchQodeRow( true );
$group1->addChild(
	"row3",
	$row3
);

$vertical_transparent_menu_fontstyle = new PitchQodeField(
	"selectblanksimple",
	"vertical_transparent_menu_fontstyle",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row3->addChild(
	"vertical_transparent_menu_fontstyle",
	$vertical_transparent_menu_fontstyle
);
$vertical_transparent_menu_fontweight = new PitchQodeField(
	"selectblanksimple",
	"vertical_transparent_menu_fontweight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row3->addChild(
	"vertical_transparent_menu_fontweight",
	$vertical_transparent_menu_fontweight
);
$vertical_transparent_menu_letterspacing = new PitchQodeField(
	"textsimple",
	"vertical_transparent_menu_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row3->addChild(
	"vertical_transparent_menu_letterspacing",
	$vertical_transparent_menu_letterspacing
);
$vertical_transparent_menu_texttransform = new PitchQodeField(
	"selectblanksimple",
	"vertical_transparent_menu_texttransform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row3->addChild(
	"vertical_transparent_menu_texttransform",
	$vertical_transparent_menu_texttransform
);

$group2 = new PitchQodeGroup(
	"2nd Level Transparent Menu Style",
	esc_html__( "Define styles for 2nd level in Transparent Side Menu", 'pitch' )
);
$vertical_area_transparency_fonts_container->addChild(
	"group2",
	$group2
);

$row1 = new PitchQodeRow();
$group2->addChild(
	"row1",
	$row1
);

$vertical_transparent_dropdown_color = new PitchQodeField(
	"colorsimple",
	"vertical_transparent_dropdown_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"vertical_transparent_dropdown_color",
	$vertical_transparent_dropdown_color
);
$vertical_transparent_dropdown_hovercolor = new PitchQodeField(
	"colorsimple",
	"vertical_transparent_dropdown_hovercolor",
	"",
	esc_html__( "Hover Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"vertical_transparent_dropdown_hovercolor",
	$vertical_transparent_dropdown_hovercolor
);

$row2 = new PitchQodeRow( true );
$group2->addChild(
	"row2",
	$row2
);

$vertical_transparent_dropdown_google_fonts = new PitchQodeField(
	"fontsimple",
	"vertical_transparent_dropdown_google_fonts",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"vertical_transparent_dropdown_google_fonts",
	$vertical_transparent_dropdown_google_fonts
);
$vertical_transparent_dropdown_fontsize = new PitchQodeField(
	"textsimple",
	"vertical_transparent_dropdown_fontsize",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"vertical_transparent_dropdown_fontsize",
	$vertical_transparent_dropdown_fontsize
);
$vertical_transparent_dropdown_lineheight = new PitchQodeField(
	"textsimple",
	"vertical_transparent_dropdown_lineheight",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"vertical_transparent_dropdown_lineheight",
	$vertical_transparent_dropdown_lineheight
);

$row3 = new PitchQodeRow( true );
$group2->addChild(
	"row3",
	$row3
);

$vertical_transparent_dropdown_fontstyle = new PitchQodeField(
	"selectblanksimple",
	"vertical_transparent_dropdown_fontstyle",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row3->addChild(
	"vertical_transparent_dropdown_fontstyle",
	$vertical_transparent_dropdown_fontstyle
);
$vertical_transparent_dropdown_fontweight = new PitchQodeField(
	"selectblanksimple",
	"vertical_transparent_dropdown_fontweight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row3->addChild(
	"vertical_transparent_dropdown_fontweight",
	$vertical_transparent_dropdown_fontweight
);
$vertical_transparent_dropdown_letterspacing = new PitchQodeField(
	"textsimple",
	"vertical_transparent_dropdown_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row3->addChild(
	"vertical_transparent_dropdown_letterspacing",
	$vertical_transparent_dropdown_letterspacing
);
$vertical_transparent_dropdown_texttransform = new PitchQodeField(
	"selectblanksimple",
	"vertical_transparent_dropdown_texttransform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row3->addChild(
	"vertical_transparent_dropdown_texttransform",
	$vertical_transparent_dropdown_texttransform
);

$group3 = new PitchQodeGroup(
	"3rd Level Transparent Menu Style",
	esc_html__( "Define styles for 3rd level in Transparent Side Menu", 'pitch' )
);
$vertical_area_transparency_fonts_container->addChild(
	"group3",
	$group3
);

$row1 = new PitchQodeRow();
$group3->addChild(
	"row1",
	$row1
);

$vertical_transparent_dropdown_color_thirdlvl = new PitchQodeField(
	"colorsimple",
	"vertical_transparent_dropdown_color_thirdlvl",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"vertical_transparent_dropdown_color_thirdlvl",
	$vertical_transparent_dropdown_color_thirdlvl
);
$vertical_transparent_dropdown_hovercolor_thirdlvl = new PitchQodeField(
	"colorsimple",
	"vertical_transparent_dropdown_hovercolor_thirdlvl",
	"",
	esc_html__( "Hover Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"vertical_transparent_dropdown_hovercolor_thirdlvl",
	$vertical_transparent_dropdown_hovercolor_thirdlvl
);

$row2 = new PitchQodeRow( true );
$group3->addChild(
	"row2",
	$row2
);

$vertical_transparent_dropdown_google_fonts_thirdlvl = new PitchQodeField(
	"fontsimple",
	"vertical_transparent_dropdown_google_fonts_thirdlvl",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"vertical_transparent_dropdown_google_fonts_thirdlvl",
	$vertical_transparent_dropdown_google_fonts_thirdlvl
);
$vertical_transparent_dropdown_fontsize_thirdlvl = new PitchQodeField(
	"textsimple",
	"vertical_transparent_dropdown_fontsize_thirdlvl",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"vertical_transparent_dropdown_fontsize_thirdlvl",
	$vertical_transparent_dropdown_fontsize_thirdlvl
);
$vertical_transparent_dropdown_lineheight_thirdlvl = new PitchQodeField(
	"textsimple",
	"vertical_transparent_dropdown_lineheight_thirdlvl",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"vertical_transparent_dropdown_lineheight_thirdlvl",
	$vertical_transparent_dropdown_lineheight_thirdlvl
);

$row3 = new PitchQodeRow( true );
$group3->addChild(
	"row3",
	$row3
);

$vertical_transparent_dropdown_fontstyle_thirdlvl = new PitchQodeField(
	"selectblanksimple",
	"vertical_transparent_dropdown_fontstyle_thirdlvl",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row3->addChild(
	"vertical_transparent_dropdown_fontstyle_thirdlvl",
	$vertical_transparent_dropdown_fontstyle_thirdlvl
);
$vertical_transparent_dropdown_fontweight_thirdlvl = new PitchQodeField(
	"selectblanksimple",
	"vertical_transparent_dropdown_fontweight_thirdlvl",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row3->addChild(
	"vertical_transparent_dropdown_fontweight_thirdlvl",
	$vertical_transparent_dropdown_fontweight_thirdlvl
);
$vertical_transparent_dropdown_letterspacing_thirdlvl = new PitchQodeField(
	"textsimple",
	"vertical_transparent_dropdown_letterspacing_thirdlvl",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row3->addChild(
	"vertical_transparent_dropdown_letterspacing_thirdlvl",
	$vertical_transparent_dropdown_letterspacing_thirdlvl
);
$vertical_transparent_dropdown_texttransform_thirdlvl = new PitchQodeField(
	"selectblanksimple",
	"vertical_transparent_dropdown_texttransform_thirdlvl",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row3->addChild(
	"vertical_transparent_dropdown_texttransform_thirdlvl",
	$vertical_transparent_dropdown_texttransform_thirdlvl
);

$vertical_area_dropdown_background_container = new PitchQodeContainer(
	"vertical_area_dropdown_background_container",
	"vertical_area_dropdown_showing",
	"side",
	array( "side", "hover", "click" )
);
$panel7->addChild(
	"vertical_area_dropdown_background_container",
	$vertical_area_dropdown_background_container
);

$group1 = new PitchQodeGroup(
	esc_html__( "Dropdown Menu Background", 'pitch' ),
	esc_html__( "Choose Background for dropdown menu", 'pitch' )
);
$vertical_area_dropdown_background_container->addChild(
	"group1",
	$group1
);

$row1 = new PitchQodeRow();
$group1->addChild(
	"row1",
	$row1
);

$vertical_area_dropdown_menu_bckg_color = new PitchQodeField(
	"colorsimple",
	"vertical_area_dropdown_menu_bckg_color",
	"",
	esc_html__( "Background Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"vertical_area_dropdown_menu_bckg_color",
	$vertical_area_dropdown_menu_bckg_color
);

$vertical_area_dropdown_menu_bckg_opacity = new PitchQodeField(
	"textsimple",
	"vertical_area_dropdown_menu_bckg_opacity",
	"",
	esc_html__( "Opacity (0-1)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"vertical_area_dropdown_menu_bckg_opacity",
	$vertical_area_dropdown_menu_bckg_opacity
);

$vertical_area_menu_items_arrow = new PitchQodeField(
	"yesno",
	"vertical_area_menu_items_arrow",
	"no",
	"2nd level menu arrow shape",
	esc_html__( "Enabling this option will display arrow shape on 2nd level menu", 'pitch' )
);
$vertical_area_dropdown_background_container->addChild(
	"vertical_area_menu_items_arrow",
	$vertical_area_menu_items_arrow
);

$vertical_area_padding = new PitchQodeField(
	"text",
	"vertical_area_padding",
	"",
	esc_html__( "Side Menu Area Padding", 'pitch' ),
	esc_html__( "Set padding for Side Menu Area in pixels (default value is 20px 40px 20px 40px)", 'pitch' ),
	array(),
	array( "col_width" => 3 )
);
$panel7->addChild(
	"vertical_area_padding",
	$vertical_area_padding
);

$vertical_area_navigation_top_margin = new PitchQodeField(
	"text",
	"vertical_area_navigation_top_margin",
	"",
	esc_html__( "Navigation Top Margin", 'pitch' ),
	esc_html__( "Set the space between logo and navigation in pixels (default value is 40px)", 'pitch' ),
	array(),
	array( "col_width" => 3 )
);
$panel7->addChild(
	"vertical_area_navigation_top_margin",
	$vertical_area_navigation_top_margin
);

$vertical_area_text_color = new PitchQodeField(
	"color",
	"vertical_area_text_color",
	"",
	esc_html__( "Side Menu Area Text Color (for Widgets)", 'pitch' ),
	esc_html__( "Choose a text color for widgets in Side Menu", 'pitch' )
);
$panel7->addChild(
	"vertical_area_text_color",
	$vertical_area_text_color
);

$vertical_area_alignment = new PitchQodeField(
	"selectblank",
	"vertical_area_alignment",
	"",
	esc_html__( "Side Menu Area Aligment", 'pitch' ),
	esc_html__( "Specify alignment for logo, menu and widgets.", 'pitch' ),
	array(
		"left" => esc_html__( "Left", 'pitch' ),
		"center" => esc_html__( "Center", 'pitch' ),
		"right" => esc_html__( "Right", 'pitch' )
	)
);
$panel7->addChild(
	"vertical_area_alignment",
	$vertical_area_alignment
);

$vertical_area_right_border_color = new PitchQodeField(
	"color",
	"vertical_area_right_border_color",
	"",
	esc_html__( "Side Menu Area Right Border Color", 'pitch' ),
	esc_html__( "Choose a color for right border of side menu area", 'pitch' )
);
$panel7->addChild(
	"vertical_area_right_border_color",
	$vertical_area_right_border_color
);

$vertical_menu_submenu_sign = new PitchQodeField(
	"yesno",
	"vertical_menu_submenu_sign",
	"yes",
	esc_html__( "Enable Plus Sign", 'pitch' ),
	esc_html__( "Enable dropdown plus sign", 'pitch' )
);
$panel7->addChild(
	"vertical_menu_submenu_sign",
	$vertical_menu_submenu_sign
);

$vertical_menu_first_level = new PitchQodeTitle(
	"vertical_menu_first_level",
	esc_html__( "First Level Menu", 'pitch' )
);
$panel7->addChild(
	"vertical_menu_first_level",
	$vertical_menu_first_level
);

$vertical_area_menu_items_padding = new PitchQodeField(
	"text",
	"vertical_area_menu_items_padding",
	"",
	esc_html__( "Menu Items Top/Bottom Padding", 'pitch' ),
	esc_html__( "Enter padding for top and bottom of menu items in menu first level (px)", 'pitch' ),
	array(),
	array( "col_width" => 3 )
);
$panel7->addChild(
	"vertical_area_menu_items_padding",
	$vertical_area_menu_items_padding
);

$full_width_vertical_menu_items = new PitchQodeField(
	"yesno",
	"full_width_vertical_menu_items",
	"no",
	esc_html__( "Full Width Menu Items", 'pitch' ),
	esc_html__( "Enabling this option will set menu item area to full width of vertical menu", 'pitch' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "#qodef_vertical_menu_separators_width_container",
		"dependence_show_on_yes" => "#qodef_vertical_menu_top_bottom_separators_container"
	)
);
$panel7->addChild(
	"full_width_vertical_menu_items",
	$full_width_vertical_menu_items
);

$enable_vertical_menu_separators = new PitchQodeField(
	"yesno",
	"enable_vertical_menu_separators",
	"no",
	esc_html__( "Enable Menu Item Separators", 'pitch' ),
	esc_html__( "Enabling this option will display menu item separators", 'pitch' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_vertical_menu_separators_container"
	)
);
$panel7->addChild(
	"enable_vertical_menu_separators",
	$enable_vertical_menu_separators
);

$vertical_menu_separators_container = new PitchQodeContainer(
	"vertical_menu_separators_container",
	"enable_vertical_menu_separators",
	"no"
);
$panel7->addChild(
	"vertical_menu_separators_container",
	$vertical_menu_separators_container
);

$vertical_menu_separators_width_container = new PitchQodeContainer(
	"vertical_menu_separators_width_container",
	"full_width_vertical_menu_items",
	"yes"
);
$vertical_menu_separators_container->addChild(
	"vertical_menu_separators_width_container",
	$vertical_menu_separators_width_container
);

$vertical_menu_separators_width = new PitchQodeField(
	"text",
	"vertical_menu_separators_width",
	"",
	esc_html__( "Width (px)", 'pitch' ),
	esc_html__( "Enter width for the separators", 'pitch' ),
	array(),
	array( "col_width" => 1 )
);
$vertical_menu_separators_width_container->addChild(
	"vertical_menu_separators_width",
	$vertical_menu_separators_width
);

$vertical_menu_separators_color = new PitchQodeField(
	"color",
	"vertical_menu_separators_color",
	"",
	esc_html__( "Color", 'pitch' ),
	esc_html__( "Choose a color for the menu item separators.", 'pitch' )
);
$vertical_menu_separators_container->addChild(
	"vertical_menu_separators_color",
	$vertical_menu_separators_color
);

$vertical_menu_top_bottom_separators_container = new PitchQodeContainer(
	"vertical_menu_top_bottom_separators_container",
	"full_width_vertical_menu_items",
	"no"
);
$vertical_menu_separators_container->addChild(
	"vertical_menu_top_bottom_separators_container",
	$vertical_menu_top_bottom_separators_container
);

$enable_vertical_menutop_bottom_separators = new PitchQodeField(
	"yesno",
	"enable_vertical_menutop_bottom_separators",
	"no",
	esc_html__( "Enable Menu Top and Bottom Separators", 'pitch' ),
	esc_html__( "Enabling this option will display separators at top and bottom of menu also", 'pitch' )
);
$vertical_menu_top_bottom_separators_container->addChild(
	"enable_vertical_menutop_bottom_separators",
	$enable_vertical_menutop_bottom_separators
);

$enable_vertical_menu_items_background = new PitchQodeField(
	"yesno",
	"enable_vertical_menu_items_background",
	"no",
	esc_html__( "Enable Background for 1st Level Menu Items", 'pitch' ),
	esc_html__( "Enable this option and choose background color for items in first level menu", 'pitch' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_vertical_menu_items_background_container"
	)
);
$panel7->addChild(
	"enable_vertical_menu_items_background",
	$enable_vertical_menu_items_background
);

$vertical_menu_items_background_container = new PitchQodeContainer(
	"vertical_menu_items_background_container",
	"enable_vertical_menu_items_background",
	"no"
);
$panel7->addChild(
	"vertical_menu_items_background_container",
	$vertical_menu_items_background_container
);

$vertical_menu_items_background_color = new PitchQodeField(
	"color",
	"vertical_menu_items_background_color",
	"",
	esc_html__( "Background Color", 'pitch' ),
	esc_html__( "Choose a background color for the menu items", 'pitch' )
);
$vertical_menu_items_background_container->addChild(
	"vertical_menu_items_background_color",
	$vertical_menu_items_background_color
);

$vertical_menu_items_hover_background_color = new PitchQodeField(
	"color",
	"vertical_menu_items_hover_background_color",
	"",
	esc_html__( "Hover Background Color", 'pitch' ),
	esc_html__( "Choose a background color for the hover menu items", 'pitch' )
);
$vertical_menu_items_background_container->addChild(
	"vertical_menu_items_hover_background_color",
	$vertical_menu_items_hover_background_color
);

$vertical_menu_items_active_background_color = new PitchQodeField(
	"color",
	"vertical_menu_items_active_background_color",
	"",
	esc_html__( "Active Background Color", 'pitch' ),
	esc_html__( "Choose a background color for the active menu items", 'pitch' )
);
$vertical_menu_items_background_container->addChild(
	"vertical_menu_items_active_background_color",
	$vertical_menu_items_active_background_color
);

$enable_vertical_menu_item_left_border_container = new PitchQodeContainer(
	"enable_vertical_menu_item_left_border_container",
	"vertical_area_type",
	"hidden_with_icons"
);
$panel7->addChild(
	"enable_vertical_menu_item_left_border_container",
	$enable_vertical_menu_item_left_border_container
);

$enable_vertical_menu_item_left_border = new PitchQodeField(
	"yesno",
	"enable_vertical_menu_item_left_border",
	"no",
	esc_html__( "Enable Left Border for 1st Level Menu Items", 'pitch' ),
	esc_html__( "Enabling this option will display left border in first level menu items", 'pitch' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_vertical_menu_item_left_border_container"
	)
);
$enable_vertical_menu_item_left_border_container->addChild(
	"enable_vertical_menu_item_left_border",
	$enable_vertical_menu_item_left_border
);

$vertical_menu_item_left_border_container = new PitchQodeContainer(
	"vertical_menu_item_left_border_container",
	"enable_vertical_menu_item_left_border",
	"no"
);
$panel7->addChild(
	"vertical_menu_item_left_border_container",
	$vertical_menu_item_left_border_container
);

$vertical_menu_item_left_border_width = new PitchQodeField(
	"text",
	"vertical_menu_item_left_border_width",
	"",
	esc_html__( "Border Width (px)", 'pitch' ),
	esc_html__( "Enter width for the menu item border", 'pitch' ),
	array(),
	array( "col_width" => 1 )
);
$vertical_menu_item_left_border_container->addChild(
	"vertical_menu_item_left_border_width",
	$vertical_menu_item_left_border_width
);

$vertical_menu_item_left_border_color = new PitchQodeField(
	"color",
	"vertical_menu_item_left_border_color",
	"",
	esc_html__( "Border Color", 'pitch' ),
	esc_html__( "Choose a color for the menu item border", 'pitch' )
);
$vertical_menu_item_left_border_container->addChild(
	"vertical_menu_item_left_border_color",
	$vertical_menu_item_left_border_color
);

$vertical_menu_item_left_border_hover_color = new PitchQodeField(
	"color",
	"vertical_menu_item_left_border_hover_color",
	"",
	esc_html__( "Border Hover Color", 'pitch' ),
	esc_html__( "Choose a hover color for the menu item border", 'pitch' )
);
$vertical_menu_item_left_border_container->addChild(
	"vertical_menu_item_left_border_hover_color",
	$vertical_menu_item_left_border_hover_color
);

$vertical_menu_item_left_border_active_color = new PitchQodeField(
	"color",
	"vertical_menu_item_left_border_active_color",
	"",
	esc_html__( "Border Active Color", 'pitch' ),
	esc_html__( "Choose a color for the active menu item border", 'pitch' )
);
$vertical_menu_item_left_border_container->addChild(
	"vertical_menu_item_left_border_active_color",
	$vertical_menu_item_left_border_active_color
);

$enable_vertical_menu_item_text_decoration = new PitchQodeField(
	"yesno",
	"enable_vertical_menu_item_text_decoration",
	"no",
	esc_html__( "Enable 1st Level Menu Item Text Decoration", 'pitch' ),
	esc_html__( "Enable this option and choose a text decoration for menu items in first level", 'pitch' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_vertical_menu_item_text_decoration_container"
	)
);
$panel7->addChild(
	"enable_vertical_menu_item_text_decoration",
	$enable_vertical_menu_item_text_decoration
);

$vertical_menu_item_text_decoration_container = new PitchQodeContainer(
	"vertical_menu_item_text_decoration_container",
	"enable_vertical_menu_item_text_decoration",
	"no"
);
$panel7->addChild(
	"vertical_menu_item_text_decoration_container",
	$vertical_menu_item_text_decoration_container
);

$group1 = new PitchQodeGroup(
	esc_html__( "Menu Item Text Decoration", 'pitch' ),
	""
);
$vertical_menu_item_text_decoration_container->addChild(
	"group1",
	$group1
);
$row1 = new PitchQodeRow();
$group1->addChild(
	"row1",
	$row1
);

$vertical_menu_item_text_decoration_style = new PitchQodeField(
	"selectsimple",
	"vertical_menu_item_text_decoration_style",
	"none",
	esc_html__( "Hover Item Text Decoration", 'pitch' ),
	esc_html__( "Choose text decoration type for hover menu items", 'pitch' ),
	array(
		"none" => esc_html__( "None", 'pitch' ),
		"underline" => esc_html__( "Underline", 'pitch' ),
		"line-through" => esc_html__( "Line-through", 'pitch' ),
		"overline" => esc_html__( "Overline", 'pitch' )
	)
);
$row1->addChild(
	"vertical_menu_item_text_decoration_style",
	$vertical_menu_item_text_decoration_style
);

$vertical_menu_item_active_text_decoration_style = new PitchQodeField(
	"selectsimple",
	"vertical_menu_item_active_text_decoration_style",
	"none",
	esc_html__( "Active Item Text Decoration", 'pitch' ),
	esc_html__( "Choose text decoration type for active menu items", 'pitch' ),
	array(
		"none" => esc_html__( "None", 'pitch' ),
		"underline" => esc_html__( "Underline", 'pitch' ),
		"line-through" => esc_html__( "Line-through", 'pitch' ),
		"overline" => esc_html__( "Overline", 'pitch' )
	)
);
$row1->addChild(
	"vertical_menu_item_active_text_decoration_style",
	$vertical_menu_item_active_text_decoration_style
);

$enable_vertical_menu_item_border = new PitchQodeField(
	"yesno",
	"enable_vertical_menu_item_border",
	"no",
	esc_html__( "Enable Hover Borders for 1st Level Menu Items", 'pitch' ),
	esc_html__( "Enabling this option will show borders on hover around item text in first level menu. In order to work, you need to set border width and color.", 'pitch' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_vertical_menu_item_border_container"
	)
);
$panel7->addChild(
	"enable_vertical_menu_item_border",
	$enable_vertical_menu_item_border
);

$vertical_menu_item_border_container = new PitchQodeContainer(
	"vertical_menu_item_border_container",
	"enable_vertical_menu_item_border",
	"no"
);
$panel7->addChild(
	"vertical_menu_item_border_container",
	$vertical_menu_item_border_container
);

$group1 = new PitchQodeGroup(
	esc_html__( "Hover Border Style", 'pitch' ),
	""
);
$vertical_menu_item_border_container->addChild(
	"group1",
	$group1
);

$row1 = new PitchQodeRow();
$group1->addChild(
	"row1",
	$row1
);

$vertical_menu_item_border_width = new PitchQodeField(
	"textsimple",
	"vertical_menu_item_border_width",
	"",
	esc_html__( "Border Width", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"vertical_menu_item_border_width",
	$vertical_menu_item_border_width
);

$vertical_menu_item_border_hover = new PitchQodeField(
	"colorsimple",
	"vertical_menu_item_border_hover",
	"",
	esc_html__( "Hover Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"vertical_menu_item_border_hover",
	$vertical_menu_item_border_hover
);

$vertical_menu_item_border_active = new PitchQodeField(
	"colorsimple",
	"vertical_menu_item_border_active",
	"",
	esc_html__( "Active Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"vertical_menu_item_border_active",
	$vertical_menu_item_border_active
);

$vertical_menu_dropdown = new PitchQodeTitle(
	"vertical_menu_dropdown",
	esc_html__( "Second Level Menu", 'pitch' )
);
$panel7->addChild(
	"vertical_menu_dropdown",
	$vertical_menu_dropdown
);

$vertical_menu_dropdown_top_padding = new PitchQodeField(
	"text",
	"vertical_menu_dropdown_top_padding",
	"",
	esc_html__( "Dropdown Top Padding", 'pitch' ),
	esc_html__( "Enter top padding for dropdown (in pixels)", 'pitch' ),
	array(),
	array( "col_width" => 3 )
);
$panel7->addChild(
	"vertical_menu_dropdown_top_padding",
	$vertical_menu_dropdown_top_padding
);

$vertical_menu_dropdown_bottom_padding = new PitchQodeField(
	"text",
	"vertical_menu_dropdown_bottom_padding",
	"",
	esc_html__( "Dropdown Bottom Padding", 'pitch' ),
	esc_html__( "Enter bottom padding for dropdown (in pixels)", 'pitch' ),
	array(),
	array( "col_width" => 3 )
);
$panel7->addChild(
	"vertical_menu_dropdown_bottom_padding",
	$vertical_menu_dropdown_bottom_padding
);

$vertical_menu_dd_item_padding_top_bttm = new PitchQodeField(
	"text",
	"vertical_menu_dd_item_padding_top_bttm",
	"",
	esc_html__( "Dropdown Menu Items Top/Bottom Padding", 'pitch' ),
	esc_html__( "Enter padding for top and bottom of menu items in submenu dropdown (px)", 'pitch' ),
	array(),
	array( "col_width" => 3 )
);
$panel7->addChild(
	"vertical_menu_dd_item_padding_top_bttm",
	$vertical_menu_dd_item_padding_top_bttm
);

$vertical_menu_dropdown_plus_color = new PitchQodeField(
	"color",
	"vertical_menu_dropdown_plus_color",
	"",
	esc_html__( "Dropdown 'Plus' Icon Color", 'pitch' ),
	esc_html__( "Choose a color for dropdown 'plus' icon", 'pitch' )
);
$panel7->addChild(
	"vertical_menu_dropdown_plus_color",
	$vertical_menu_dropdown_plus_color
);

$vertical_menu_dd_separator_container = new PitchQodeContainer(
	"vertical_menu_dd_separator_container",
	"vertical_area_dropdown_showing",
	"hover",
	array( "hover", "side", "click" )
);
$panel7->addChild(
	"vertical_menu_dd_separator_container",
	$vertical_menu_dd_separator_container
);

$vertical_dropdown_separators_yesno = new PitchQodeField(
	"yesno",
	"vertical_dropdown_separators_yesno",
	"no",
	esc_html__( "Enable Dropdown Menu Item Separators", 'pitch' ),
	esc_html__( "Enabling this option will display dropdown menu item separators", 'pitch' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_vertical_dropdown_separators_container"
	)
);
$vertical_menu_dd_separator_container->addChild(
	"vertical_dropdown_separators_yesno",
	$vertical_dropdown_separators_yesno
);

$vertical_dropdown_separators_container = new PitchQodeContainer(
	"vertical_dropdown_separators_container",
	"vertical_dropdown_separators_yesno",
	"no"
);
$vertical_menu_dd_separator_container->addChild(
	"vertical_dropdown_separators_container",
	$vertical_dropdown_separators_container
);

$vertical_dropdown_separators_color = new PitchQodeField(
	"color",
	"vertical_dropdown_separators_color",
	"",
	esc_html__( "Color", 'pitch' ),
	esc_html__( "Choose a color for the menu item separators.", 'pitch' )
);
$vertical_dropdown_separators_container->addChild(
	"vertical_dropdown_separators_color",
	$vertical_dropdown_separators_color
);

$enable_vertical_top_bottom_dropdown_separators = new PitchQodeField(
	"yesno",
	"enable_vertical_top_bottom_dropdown_separators",
	"no",
	esc_html__( "Enable Menu Top and Bottom Separators", 'pitch' ),
	esc_html__( "Enabling this option will display separators at top and bottom of menu also", 'pitch' )
);
$vertical_dropdown_separators_container->addChild(
	"enable_vertical_top_bottom_dropdown_separators",
	$enable_vertical_top_bottom_dropdown_separators
);

$vertical_menu_text_icons = new PitchQodeTitle(
	"vertical_menu_text_icons",
	esc_html__( "Menu Text and Icons", 'pitch' )
);
$panel7->addChild(
	"vertical_menu_text_icons",
	$vertical_menu_text_icons
);

$group1 = new PitchQodeGroup(
	"1st Level Menu Style",
	esc_html__( "Define styles for 1st level in Side Menu", 'pitch' )
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

$vertical_menu_color = new PitchQodeField(
	"colorsimple",
	"vertical_menu_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"vertical_menu_color",
	$vertical_menu_color
);
$vertical_menu_hovercolor = new PitchQodeField(
	"colorsimple",
	"vertical_menu_hovercolor",
	"",
	esc_html__( "Hover Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"vertical_menu_hovercolor",
	$vertical_menu_hovercolor
);
$vertical_menu_activecolor = new PitchQodeField(
	"colorsimple",
	"vertical_menu_activecolor",
	"",
	esc_html__( "Active Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"vertical_menu_activecolor",
	$vertical_menu_activecolor
);

$row4 = new PitchQodeRow();
$group1->addChild(
	"row4",
	$row4
);

$vertical_menu_icon_color = new PitchQodeField(
	"colorsimple",
	"vertical_menu_icon_color",
	"",
	esc_html__( "Icon Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row4->addChild(
	"vertical_menu_icon_color",
	$vertical_menu_icon_color
);
$vertical_menu_icon_hovercolor = new PitchQodeField(
	"colorsimple",
	"vertical_menu_icon_hovercolor",
	"",
	esc_html__( "Icon Hover Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row4->addChild(
	"vertical_menu_icon_hovercolor",
	$vertical_menu_icon_hovercolor
);
$vertical_menu_icon_activecolor = new PitchQodeField(
	"colorsimple",
	"vertical_menu_icon_activecolor",
	"",
	esc_html__( "Icon Active Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row4->addChild(
	"vertical_menu_icon_activecolor",
	$vertical_menu_icon_activecolor
);
$vertical_menu_icon_margin = new PitchQodeField(
	"textsimple",
	"vertical_menu_icon_margin",
	"",
	esc_html__( "Space between text and icon (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row4->addChild(
	"vertical_menu_icon_margin",
	$vertical_menu_icon_margin
);

$row2 = new PitchQodeRow( true );
$group1->addChild(
	"row2",
	$row2
);

$vertical_menu_google_fonts = new PitchQodeField(
	"fontsimple",
	"vertical_menu_google_fonts",
	"-1",
	esc_html__( "Font family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"vertical_menu_google_fonts",
	$vertical_menu_google_fonts
);
$vertical_menu_fontsize = new PitchQodeField(
	"textsimple",
	"vertical_menu_fontsize",
	"",
	esc_html__( "Font size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"vertical_menu_fontsize",
	$vertical_menu_fontsize
);
$vertical_menu_icon_fontsize = new PitchQodeField(
	"textsimple",
	"vertical_menu_icon_fontsize",
	"",
	esc_html__( "Icon font size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"vertical_menu_icon_fontsize",
	$vertical_menu_icon_fontsize
);
$vertical_menu_lineheight = new PitchQodeField(
	"textsimple",
	"vertical_menu_lineheight",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"vertical_menu_lineheight",
	$vertical_menu_lineheight
);

$row3 = new PitchQodeRow( true );
$group1->addChild(
	"row3",
	$row3
);

$vertical_menu_fontstyle = new PitchQodeField(
	"selectblanksimple",
	"vertical_menu_fontstyle",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row3->addChild(
	"vertical_menu_fontstyle",
	$vertical_menu_fontstyle
);
$vertical_menu_fontweight = new PitchQodeField(
	"selectblanksimple",
	"vertical_menu_fontweight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row3->addChild(
	"vertical_menu_fontweight",
	$vertical_menu_fontweight
);
$vertical_menu_letterspacing = new PitchQodeField(
	"textsimple",
	"vertical_menu_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row3->addChild(
	"vertical_menu_letterspacing",
	$vertical_menu_letterspacing
);
$vertical_menu_texttransform = new PitchQodeField(
	"selectblanksimple",
	"vertical_menu_texttransform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row3->addChild(
	"vertical_menu_texttransform",
	$vertical_menu_texttransform
);

$group2 = new PitchQodeGroup(
	"2nd Level Menu Style",
	esc_html__( "Define styles for 2nd level in Side Menu", 'pitch' )
);
$panel7->addChild(
	"group2",
	$group2
);

$row1 = new PitchQodeRow();
$group2->addChild(
	"row1",
	$row1
);

$vertical_dropdown_color = new PitchQodeField(
	"colorsimple",
	"vertical_dropdown_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"vertical_dropdown_color",
	$vertical_dropdown_color
);
$vertical_dropdown_hovercolor = new PitchQodeField(
	"colorsimple",
	"vertical_dropdown_hovercolor",
	"",
	esc_html__( "Hover Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"vertical_dropdown_hovercolor",
	$vertical_dropdown_hovercolor
);

$row4 = new PitchQodeRow();
$group2->addChild(
	"row4",
	$row4
);
$vertical_dropdown_icon_color = new PitchQodeField(
	"colorsimple",
	"vertical_dropdown_icon_color",
	"",
	esc_html__( "Icon Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row4->addChild(
	"vertical_dropdown_icon_color",
	$vertical_dropdown_icon_color
);
$vertical_dropdown_icon_hovercolor = new PitchQodeField(
	"colorsimple",
	"vertical_dropdown_icon_hovercolor",
	"",
	esc_html__( "Icon Hover Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row4->addChild(
	"vertical_dropdown_icon_hovercolor",
	$vertical_dropdown_icon_hovercolor
);

$row2 = new PitchQodeRow( true );
$group2->addChild(
	"row2",
	$row2
);

$vertical_dropdown_google_fonts = new PitchQodeField(
	"fontsimple",
	"vertical_dropdown_google_fonts",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"vertical_dropdown_google_fonts",
	$vertical_dropdown_google_fonts
);
$vertical_dropdown_fontsize = new PitchQodeField(
	"textsimple",
	"vertical_dropdown_fontsize",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"vertical_dropdown_fontsize",
	$vertical_dropdown_fontsize
);
$vertical_dropdown_icon_fontsize = new PitchQodeField(
	"textsimple",
	"vertical_dropdown_icon_fontsize",
	"",
	esc_html__( "Icon font size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"vertical_dropdown_icon_fontsize",
	$vertical_dropdown_icon_fontsize
);
$vertical_dropdown_lineheight = new PitchQodeField(
	"textsimple",
	"vertical_dropdown_lineheight",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"vertical_dropdown_lineheight",
	$vertical_dropdown_lineheight
);

$row3 = new PitchQodeRow( true );
$group2->addChild(
	"row3",
	$row3
);

$vertical_dropdown_fontstyle = new PitchQodeField(
	"selectblanksimple",
	"vertical_dropdown_fontstyle",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row3->addChild(
	"vertical_dropdown_fontstyle",
	$vertical_dropdown_fontstyle
);
$vertical_dropdown_fontweight = new PitchQodeField(
	"selectblanksimple",
	"vertical_dropdown_fontweight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row3->addChild(
	"vertical_dropdown_fontweight",
	$vertical_dropdown_fontweight
);
$vertical_dropdown_letterspacing = new PitchQodeField(
	"textsimple",
	"vertical_dropdown_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row3->addChild(
	"vertical_dropdown_letterspacing",
	$vertical_dropdown_letterspacing
);
$vertical_dropdown_texttransform = new PitchQodeField(
	"selectblanksimple",
	"vertical_dropdown_texttransform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row3->addChild(
	"vertical_dropdown_texttransform",
	$vertical_dropdown_texttransform
);

$group3 = new PitchQodeGroup(
	"3rd Level Menu Style",
	esc_html__( "Define styles for 3rd level in Side Menu", 'pitch' )
);
$panel7->addChild(
	"group3",
	$group3
);

$row1 = new PitchQodeRow();
$group3->addChild(
	"row1",
	$row1
);

$vertical_dropdown_color_thirdlvl = new PitchQodeField(
	"colorsimple",
	"vertical_dropdown_color_thirdlvl",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"vertical_dropdown_color_thirdlvl",
	$vertical_dropdown_color_thirdlvl
);
$vertical_dropdown_hovercolor_thirdlvl = new PitchQodeField(
	"colorsimple",
	"vertical_dropdown_hovercolor_thirdlvl",
	"",
	esc_html__( "Hover Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"vertical_dropdown_hovercolor_thirdlvl",
	$vertical_dropdown_hovercolor_thirdlvl
);

$row4 = new PitchQodeRow();
$group3->addChild(
	"row4",
	$row4
);
$vertical_dropdown_icon_color_thirdlvl = new PitchQodeField(
	"colorsimple",
	"vertical_dropdown_icon_color_thirdlvl",
	"",
	esc_html__( "Icon Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row4->addChild(
	"vertical_dropdown_icon_color_thirdlvl",
	$vertical_dropdown_icon_color_thirdlvl
);
$vertical_dropdown_icon_hovercolor_thirdlvl = new PitchQodeField(
	"colorsimple",
	"vertical_dropdown_icon_hovercolor_thirdlvl",
	"",
	esc_html__( "Icon Hover Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row4->addChild(
	"vertical_dropdown_icon_hovercolor_thirdlvl",
	$vertical_dropdown_icon_hovercolor_thirdlvl
);

$row2 = new PitchQodeRow( true );
$group3->addChild(
	"row2",
	$row2
);

$vertical_dropdown_google_fonts_thirdlvl = new PitchQodeField(
	"fontsimple",
	"vertical_dropdown_google_fonts_thirdlvl",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"vertical_dropdown_google_fonts_thirdlvl",
	$vertical_dropdown_google_fonts_thirdlvl
);
$vertical_dropdown_fontsize_thirdlvl = new PitchQodeField(
	"textsimple",
	"vertical_dropdown_fontsize_thirdlvl",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"vertical_dropdown_fontsize_thirdlvl",
	$vertical_dropdown_fontsize_thirdlvl
);
$vertical_dropdown_icon_fontsize_thirdlvl = new PitchQodeField(
	"textsimple",
	"vertical_dropdown_icon_fontsize_thirdlvl",
	"",
	esc_html__( "Icon font size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"vertical_dropdown_icon_fontsize_thirdlvl",
	$vertical_dropdown_icon_fontsize_thirdlvl
);
$vertical_dropdown_lineheight_thirdlvl = new PitchQodeField(
	"textsimple",
	"vertical_dropdown_lineheight_thirdlvl",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"vertical_dropdown_lineheight_thirdlvl",
	$vertical_dropdown_lineheight_thirdlvl
);

$row3 = new PitchQodeRow( true );
$group3->addChild(
	"row3",
	$row3
);

$vertical_dropdown_fontstyle_thirdlvl = new PitchQodeField(
	"selectblanksimple",
	"vertical_dropdown_fontstyle_thirdlvl",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row3->addChild(
	"vertical_dropdown_fontstyle_thirdlvl",
	$vertical_dropdown_fontstyle_thirdlvl
);
$vertical_dropdown_fontweight_thirdlvl = new PitchQodeField(
	"selectblanksimple",
	"vertical_dropdown_fontweight_thirdlvl",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row3->addChild(
	"vertical_dropdown_fontweight_thirdlvl",
	$vertical_dropdown_fontweight_thirdlvl
);
$vertical_dropdown_letterspacing_thirdlvl = new PitchQodeField(
	"textsimple",
	"vertical_dropdown_letterspacing_thirdlvl",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row3->addChild(
	"vertical_dropdown_letterspacing_thirdlvl",
	$vertical_dropdown_letterspacing_thirdlvl
);
$vertical_dropdown_texttransform_thirdlvl = new PitchQodeField(
	"selectblanksimple",
	"vertical_dropdown_texttransform_thirdlvl",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row3->addChild(
	"vertical_dropdown_texttransform_thirdlvl",
	$vertical_dropdown_texttransform_thirdlvl
);

//Mobile menu	

$panel8 = new PitchQodePanel(
	esc_html__( "Mobile Header", 'pitch' ),
	"mobile_menu_panel"
);
$headerandfooterPage->addChild(
	"panel8",
	$panel8
);

$header_height_mobile = new PitchQodeField(
	"text",
	"header_height_mobile",
	"",
	esc_html__( "Mobile Header Height", 'pitch' ),
	esc_html__( "Enter height for mobile header in pixels", 'pitch' ),
	array(),
	array( "col_width" => 3 )
);
$panel8->addChild(
	"header_height_mobile",
	$header_height_mobile
);

$mobile_separator_color = new PitchQodeField(
	"color",
	"mobile_separator_color",
	"",
	esc_html__( "Mobile Menu Item Separator Color", 'pitch' ),
	esc_html__( "Choose color for mobile menu horizontal separators", 'pitch' )
);
$panel8->addChild(
	"mobile_separator_color",
	$mobile_separator_color
);

$mobile_background_color = new PitchQodeField(
	"color",
	"mobile_background_color",
	"",
	esc_html__( "Mobile Header & Menu Background Color", 'pitch' ),
	esc_html__( "Choose color for mobile header&menu background", 'pitch' )
);
$panel8->addChild(
	"mobile_background_color",
	$mobile_background_color
);

$logo_mobile_header_height = new PitchQodeField(
	"text",
	"logo_mobile_header_height",
	"",
	esc_html__( "Logo Height For Mobile Header (px)", 'pitch' ),
	esc_html__( "Define logo height for screen size smaller than 1000px", 'pitch' ),
	array(),
	array( "col_width" => 3 )
);
$panel8->addChild(
	"logo_mobile_header_height",
	$logo_mobile_header_height
);

$logo_mobile_height = new PitchQodeField(
	"text",
	"logo_mobile_height",
	"",
	esc_html__( "Logo Height For Mobile Devices (px)", 'pitch' ),
	esc_html__( "Define logo height for screen size smaller than 480px", 'pitch' ),
	array(),
	array( "col_width" => 3 )
);
$panel8->addChild(
	"logo_mobile_height",
	$logo_mobile_height
);

// Header Button Icons
$panel9 = new PitchQodePanel(
	esc_html__( "Header Button Icons", 'pitch' ),
	"header_buttons_panel"
);
$headerandfooterPage->addChild(
	"panel9",
	$panel9
);

$header_icon_pack = new PitchQodeField(
	'select',
	'header_icon_pack',
	'font_awesome',
	esc_html__( 'Header Icons Icon Pack', 'pitch' ),
	'Choose
	 Icon Pack',
	pitch_qode_icon_collections()->getIconCollectionsExclude( array( 'linea_icons', 'simple_line_icons' ) )
);
$panel9->addChild(
	'header_icon_pack',
	$header_icon_pack
);

$group1 = new PitchQodeGroup(
	esc_html__( "Header Icons Style", 'pitch' ),
	esc_html__( "Define styles for header icons (Search Icon, Fullscreen Menu Icon and Side Area Icon)", 'pitch' )
);
$panel9->addChild(
	"group1",
	$group1
);

$row1 = new PitchQodeRow( true );
$group1->addChild(
	"row1",
	$row1
);

$header_buttons_color = new PitchQodeField(
	"colorsimple",
	"header_buttons_color",
	"",
	esc_html__( "Color", 'pitch' ),
	esc_html__( "Choose a color for Header icons", 'pitch' )
);
$row1->addChild(
	"header_buttons_color",
	$header_buttons_color
);

$header_buttons_hover_color = new PitchQodeField(
	"colorsimple",
	"header_buttons_hover_color",
	"",
	esc_html__( "Hover Color", 'pitch' ),
	esc_html__( "Choose a hover color for Header icons", 'pitch' )
);
$row1->addChild(
	"header_buttons_hover_color",
	$header_buttons_hover_color
);

$row2 = new PitchQodeRow( true );
$group1->addChild(
	"row2",
	$row2
);

$header_light_icons_color = new PitchQodeField(
	"colorsimple",
	"header_light_icons_color",
	"",
	esc_html__( "Light Menu Icon Color", 'pitch' ),
	esc_html__( "Choose a color for Header Light icons", 'pitch' )
);
$row2->addChild(
	"header_light_icons_color",
	$header_light_icons_color
);

$header_light_hover_icons_color = new PitchQodeField(
	"colorsimple",
	"header_light_hover_icons_color",
	"",
	esc_html__( "Light Menu Icon Hover Color", 'pitch' ),
	esc_html__( "Choose a hover color for Header Light icons", 'pitch' )
);
$row2->addChild(
	"header_light_hover_icons_color",
	$header_light_hover_icons_color
);

$row3 = new PitchQodeRow( true );
$group1->addChild(
	"row3",
	$row3
);

$header_dark_icons_color = new PitchQodeField(
	"colorsimple",
	"header_dark_icons_color",
	"",
	esc_html__( "Dark Menu Icon Color", 'pitch' ),
	esc_html__( "Choose a color for Header Light icons", 'pitch' )
);
$row3->addChild(
	"header_dark_icons_color",
	$header_dark_icons_color
);

$header_dark_hover_icons_color = new PitchQodeField(
	"colorsimple",
	"header_dark_hover_icons_color",
	"",
	esc_html__( "Dark Menu Icon Hover Color", 'pitch' ),
	esc_html__( "Choose a hover color for Header Light icons", 'pitch' )
);
$row3->addChild(
	"header_dark_hover_icons_color",
	$header_dark_hover_icons_color
);

$header_buttons_font_size = new PitchQodeField(
	"text",
	"header_buttons_font_size",
	"",
	esc_html__( "Side Area Icon/ Search Icon Size", 'pitch' ),
	esc_html__( "Choose a size for Side Area / Search icons (px)", 'pitch' ),
	array(),
	array( "col_width" => 3 )
);
$panel9->addChild(
	"header_buttons_font_size",
	$header_buttons_font_size
);

$header_buttons_size = new PitchQodeField(
	"select",
	"header_buttons_size",
	"normal",
	esc_html__( "Side Menu Icon / Fullscreen Menu Icon Size", 'pitch' ),
	esc_html__( "Choose predefined size for Side Area / Fullscreen Menu icons", 'pitch' ),
	array(
		"normal" => esc_html__( "Normal", 'pitch' ),
		"medium" => esc_html__( "Medium", 'pitch' ),
		"large" => esc_html__( "Large", 'pitch' )
	)
);
$panel9->addChild(
	"header_buttons_size",
	$header_buttons_size
);

$group3 = new PitchQodeGroup(
	esc_html__( "Mobile Header Icons Color", 'pitch' ),
	esc_html__( "Choose color for mobile header icons (search icon, fullscreen menu icon and side area icon)", 'pitch' )
);
$panel9->addChild(
	"group3",
	$group3
);

$row1 = new PitchQodeRow( true );
$group3->addChild(
	"row1",
	$row1
);

$mobile_button_color = new PitchQodeField(
	"colorsimple",
	"mobile_button_color",
	"",
	esc_html__( "Icon Color", 'pitch' ),
	esc_html__( "Choose a color for mobile menu icon", 'pitch' )
);
$row1->addChild(
	"mobile_button_color",
	$mobile_button_color
);

$mobile_button_color_hover = new PitchQodeField(
	"colorsimple",
	"mobile_button_color_hover",
	"",
	esc_html__( "Icon Hover Color", 'pitch' ),
	esc_html__( "Choose a hover color for mobile menu icon", 'pitch' )
);
$row1->addChild(
	"mobile_button_color_hover",
	$mobile_button_color_hover
);

$group2 = new PitchQodeGroup(
	esc_html__( "Fullscreen Menu Icon Background", 'pitch' ),
	esc_html__( "Define background for fullscreen menu icon in header", 'pitch' )
);
$panel9->addChild(
	"group2",
	$group2
);

$row1 = new PitchQodeRow( true );
$group2->addChild(
	"row1",
	$row1
);

$header_buttons_fullscreen_button_background = new PitchQodeField(
	"colorsimple",
	"header_buttons_fullscreen_button_background",
	"",
	esc_html__( "Background Color", 'pitch' ),
	esc_html__( "Choose a background color for Fullscreen Menu icon", 'pitch' )
);
$row1->addChild(
	"header_buttons_fullscreen_button_background",
	$header_buttons_fullscreen_button_background
);

$header_buttons_fullscreen_button_background_hover = new PitchQodeField(
	"colorsimple",
	"header_buttons_fullscreen_button_background_hover",
	"",
	esc_html__( "Background Hover Color", 'pitch' ),
	esc_html__( "Choose a background hover color for Fullscreen Menu icon", 'pitch' )
);
$row1->addChild(
	"header_buttons_fullscreen_button_background_hover",
	$header_buttons_fullscreen_button_background_hover
);
// WPML Language Selector
if ( pitch_qode_is_wpml_installed() ) {
	
	$panel_lang_selector = new PitchQodePanel(
		esc_html__( "Language Selector", 'pitch' ),
		"lang_selector_panel"
	);
	$headerandfooterPage->addChild(
		"panel_lang_selector",
		$panel_lang_selector
	);
	
	$wpml_first_level_background_color = new PitchQodeField(
		"color",
		"wpml_first_level_background_color",
		"",
		esc_html__( "Background Color for First Level", 'pitch' ),
		esc_html__( "Choose a background color for first level element", 'pitch' )
	);
	$panel_lang_selector->addChild(
		"wpml_first_level_background_color",
		$wpml_first_level_background_color
	);
	
	// First Level Menu 
	
	$group1 = new PitchQodeGroup(
		"1st Level Menu Style",
		esc_html__( "Define styles for first menu level ", 'pitch' )
	);
	$panel_lang_selector->addChild(
		"group1",
		$group1
	);
	
	$row1 = new PitchQodeRow();
	$group1->addChild(
		"row1",
		$row1
	);
	
	$wpml_first_level_menu_color = new PitchQodeField(
		"colorsimple",
		"wpml_first_level_menu_color",
		"",
		esc_html__( "Text Color", 'pitch' ),
		esc_html__( "This is some description", 'pitch' )
	);
	$row1->addChild(
		"wpml_first_level_menu_color",
		$wpml_first_level_menu_color
	);
	
	$wpml_first_level_menu_color_hover = new PitchQodeField(
		"colorsimple",
		"wpml_first_level_menu_color_hover",
		"",
		esc_html__( "Hover Color", 'pitch' ),
		esc_html__( "This is some description", 'pitch' )
	);
	$row1->addChild(
		"wpml_first_level_menu_color_hover",
		$wpml_first_level_menu_color_hover
	);
	
	$wpml_first_level_menu_google_fonts = new PitchQodeField(
		"fontsimple",
		"wpml_first_level_menu_google_fonts",
		"-1",
		esc_html__( "Font Family", 'pitch' ),
		esc_html__( "This is some description", 'pitch' )
	);
	$row1->addChild(
		"wpml_first_level_menu_google_fonts",
		$wpml_first_level_menu_google_fonts
	);
	
	$wpml_first_level_menu_fontsize = new PitchQodeField(
		"textsimple",
		"wpml_first_level_menu_fontsize",
		"",
		esc_html__( "Font Size (px)", 'pitch' ),
		esc_html__( "This is some description", 'pitch' )
	);
	$row1->addChild(
		"wpml_first_level_menu_fontsize",
		$wpml_first_level_menu_fontsize
	);
	
	$row2 = new PitchQodeRow( true );
	$group1->addChild(
		"row2",
		$row2
	);
	
	$wpml_first_level_menu_texttransform = new PitchQodeField(
		"selectblanksimple",
		"wpml_first_level_menu_texttransform",
		"",
		esc_html__( "Text Transform", 'pitch' ),
		esc_html__( "This is some description", 'pitch' ),
		pitch_qode_get_options_value_by_name( 'text_transform' )
	);
	$row2->addChild(
		"wpml_first_level_menu_texttransform",
		$wpml_first_level_menu_texttransform
	);
	
	$wpml_first_level_menu_fontstyle = new PitchQodeField(
		"selectblanksimple",
		"wpml_first_level_menu_fontstyle",
		"",
		esc_html__( "Font Style", 'pitch' ),
		esc_html__( "This is some description", 'pitch' ),
		pitch_qode_get_options_value_by_name( 'font_style' )
	);
	$row2->addChild(
		"wpml_first_level_menu_fontstyle",
		$wpml_first_level_menu_fontstyle
	);
	
	$wpml_first_level_menu_fontweight = new PitchQodeField(
		"selectblanksimple",
		"wpml_first_level_menu_fontweight",
		"",
		esc_html__( "Font Weight", 'pitch' ),
		esc_html__( "This is some description", 'pitch' ),
		pitch_qode_get_options_value_by_name( 'font_weight' )
	);
	$row2->addChild(
		"wpml_first_level_menu_fontweight",
		$wpml_first_level_menu_fontweight
	);
	
	$wpml_first_level_menu_letterspacing = new PitchQodeField(
		"textsimple",
		"wpml_first_level_menu_letterspacing",
		"",
		esc_html__( "Letter Spacing (px)", 'pitch' ),
		esc_html__( "This is some description", 'pitch' )
	);
	$row2->addChild(
		"wpml_first_level_menu_letterspacing",
		$wpml_first_level_menu_letterspacing
	);
	
	$group2 = new PitchQodeGroup(
		"2nd Level Menu Style",
		esc_html__( "Define styles for second menu level ", 'pitch' )
	);
	$panel_lang_selector->addChild(
		"group2",
		$group2
	);
	
	$row1 = new PitchQodeRow();
	$group2->addChild(
		"row1",
		$row1
	);
	
	$wpml_second_level_menu_color = new PitchQodeField(
		"colorsimple",
		"wpml_second_level_menu_color",
		"",
		esc_html__( "Text Color", 'pitch' ),
		esc_html__( "This is some description", 'pitch' )
	);
	$row1->addChild(
		"wpml_second_level_menu_color",
		$wpml_second_level_menu_color
	);
	
	$wpml_second_level_menu_color_hover = new PitchQodeField(
		"colorsimple",
		"wpml_second_level_menu_color_hover",
		"",
		esc_html__( "Hover Color", 'pitch' ),
		esc_html__( "This is some description", 'pitch' )
	);
	$row1->addChild(
		"wpml_second_level_menu_color_hover",
		$wpml_second_level_menu_color_hover
	);
	
	$wpml_second_level_menu_google_fonts = new PitchQodeField(
		"fontsimple",
		"wpml_second_level_menu_google_fonts",
		"-1",
		esc_html__( "Font Family", 'pitch' ),
		esc_html__( "This is some description", 'pitch' )
	);
	$row1->addChild(
		"wpml_second_level_menu_google_fonts",
		$wpml_second_level_menu_google_fonts
	);
	
	$wpml_second_level_menu_fontsize = new PitchQodeField(
		"textsimple",
		"wpml_second_level_menu_fontsize",
		"",
		esc_html__( "Font Size (px)", 'pitch' ),
		esc_html__( "This is some description", 'pitch' )
	);
	$row1->addChild(
		"wpml_second_level_menu_fontsize",
		$wpml_second_level_menu_fontsize
	);
	
	$row2 = new PitchQodeRow( true );
	$group2->addChild(
		"row2",
		$row2
	);
	$wpml_second_level_menu_texttransform = new PitchQodeField(
		"selectblanksimple",
		"wpml_second_level_menu_texttransform",
		"",
		esc_html__( "Text Transform", 'pitch' ),
		esc_html__( "This is some description", 'pitch' ),
		pitch_qode_get_options_value_by_name( 'text_transform' )
	);
	$row2->addChild(
		"wpml_second_level_menu_texttransform",
		$wpml_second_level_menu_texttransform
	);
	
	$wpml_second_level_menu_fontstyle = new PitchQodeField(
		"selectblanksimple",
		"wpml_second_level_menu_fontstyle",
		"",
		esc_html__( "Font Style", 'pitch' ),
		esc_html__( "This is some description", 'pitch' ),
		pitch_qode_get_options_value_by_name( 'font_style' )
	);
	$row2->addChild(
		"wpml_second_level_menu_fontstyle",
		$wpml_second_level_menu_fontstyle
	);
	
	$wpml_second_level_menu_fontweight = new PitchQodeField(
		"selectblanksimple",
		"wpml_second_level_menu_fontweight",
		"",
		esc_html__( "Font Weight", 'pitch' ),
		esc_html__( "This is some description", 'pitch' ),
		pitch_qode_get_options_value_by_name( 'font_weight' )
	);
	$row2->addChild(
		"wpml_second_level_menu_fontweight",
		$wpml_second_level_menu_fontweight
	);
	
	$wpml_second_level_menu_letterspacing = new PitchQodeField(
		"textsimple",
		"wpml_second_level_menu_letterspacing",
		"",
		esc_html__( "Letter Spacing (px)", 'pitch' ),
		esc_html__( "This is some description", 'pitch' )
	);
	$row2->addChild(
		"wpml_second_level_menu_letterspacing",
		$wpml_second_level_menu_letterspacing
	);
	
	$lang_items_padding = new PitchQodeField(
		'text',
		'header_bottom_lang_items_padding',
		'',
		esc_html__( 'Left / Right Spacing Between Languages in List (px)', 'pitch' ),
		esc_html__( 'Set spacing between languages when horizontal language switcher is added to main menu', 'pitch' ),
		array(),
		array( "col_width" => 3 )
	);
	$panel_lang_selector->addChild(
		'header_bottom_lang_items_padding',
		$lang_items_padding
	);
	
}	
	

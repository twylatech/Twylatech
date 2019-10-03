<?php

$titlePage = new QodePitchAdminPage(
	"4",
	esc_html__( "Title", 'pitch' ),
	"fa fa-list-alt"
);
$pitch_qode_framework->qodeOptions->addAdminPage(
	"title",
	$titlePage
);

$panel8 = new PitchQodePanel(
	esc_html__( "Title", 'pitch' ),
	"title_panel"
);
$titlePage->addChild(
	"panel8",
	$panel8
);

$show_page_title = new PitchQodeField(
	"yesno",
	"show_page_title",
	"yes",
	esc_html__( "Enable Page Title Area", 'pitch' ),
	esc_html__( "This option will enable Title Area", 'pitch' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_enable_title_container"
	)
);
$panel8->addChild(
	"show_page_title",
	$show_page_title
);

$enable_title_container = new PitchQodeContainer(
	"enable_title_container",
	"show_page_title",
	"no"
);
$panel8->addChild(
	"enable_title_container",
	$enable_title_container
);

$title_type = new PitchQodeField(
	"select",
	"title_type",
	"standard_title",
	esc_html__( "Title Type", 'pitch' ),
	esc_html__( "Choose title type", 'pitch' ),
	array(
		"standard_title" => esc_html__( "Standard", 'pitch' ),
		"breadcrumbs_title" => esc_html__( "Breadcrumb", 'pitch' )
	),
	array(
		"dependence" => true,
		"hide"       => array( "breadcrumbs_title" => "#qodef_title_standard_container" ),
		"show"       => array( "standard_title" => "#qodef_title_standard_container" )
	)
);
$enable_title_container->addChild(
	"title_type",
	$title_type
);

$animate_title_area = new PitchQodeField(
	"select",
	"animate_title_area",
	"no",
	esc_html__( "Animations", 'pitch' ),
	esc_html__( "Choose an animation for Title Area", 'pitch' ),
	array(
		"no" => esc_html__( "No animation", 'pitch' ),
		"text_right_left" => esc_html__( "Text right to left", 'pitch' ),
		"area_top_bottom" => esc_html__( "Title area top to bottom", 'pitch' )
	)
);
$enable_title_container->addChild(
	"animate_title_area",
	$animate_title_area
);

$page_title_vertical_aligment = new PitchQodeField(
	"select",
	"page_title_vertical_aligment",
	"header_bottom",
	esc_html__( "Vertical Alignment", 'pitch' ),
	esc_html__( "Specify Title vertical alignment", 'pitch' ),
	array(
		"header_bottom" => esc_html__( "From Bottom of Header", 'pitch' ),
		"window_top" => esc_html__( "From Window Top", 'pitch' )
	)
);
$enable_title_container->addChild(
	"page_title_vertical_aligment",
	$page_title_vertical_aligment
);

$show_page_title_text = new PitchQodeField(
	"yesno",
	"show_page_title_text",
	"yes",
	esc_html__( "Enable Page Title Text", 'pitch' ),
	esc_html__( "This option will enable Title Text", 'pitch' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_enable_title_text_container, #qodef_animation_page_title_contaier"
	)
);
$enable_title_container->addChild(
	"show_page_title_text",
	$show_page_title_text
);

$enable_title_text_container = new PitchQodeContainer(
	"enable_title_text_container",
	"show_page_title_text",
	"no"
);
$enable_title_container->addChild(
	"enable_title_text_container",
	$enable_title_text_container
);

$predefined_title_sizes = new PitchQodeField(
	"select",
	"predefined_title_sizes",
	"large",
	esc_html__( "Text Size", 'pitch' ),
	esc_html__( "Choose a default Title size", 'pitch' ),
	array(
		"large" => esc_html__( "Large", 'pitch' ),
		"medium" => esc_html__( "Medium", 'pitch' ),
		"large" => esc_html__( "Large", 'pitch' )
	)
);
$enable_title_text_container->addChild(
	"predefined_title_sizes",
	$predefined_title_sizes
);

$title_text_shadow = new PitchQodeField(
	"yesno",
	"title_text_shadow",
	"no",
	esc_html__( "Title Text Shadow", 'pitch' ),
	esc_html__( "Enabling this option will give Title text a shadow", 'pitch' )
);
$enable_title_text_container->addChild(
	"title_text_shadow",
	$title_text_shadow
);

$page_title_position = new PitchQodeField(
	"select",
	"page_title_position",
	"left",
	esc_html__( "Title Content Alignment", 'pitch' ),
	esc_html__( "Specify title content alignment", 'pitch' ),
	array(
		"left" => esc_html__( "Left", 'pitch' ),
		"center" => esc_html__( "Center", 'pitch' ),
		"right" => esc_html__( "Right", 'pitch' )
	)
);
$enable_title_container->addChild(
	"page_title_position",
	$page_title_position
);

$title_standard_container = new PitchQodeContainer(
	"title_standard_container",
	"title_type",
	"breadcrumbs_title"
);
$enable_title_container->addChild(
	"title_standard_container",
	$title_standard_container
);

//Title like separator with text
$title_like_separator = new PitchQodeField(
	"yesno",
	"title_like_separator",
	"no",
	esc_html__( "Separator Around Title Text", 'pitch' ),
	esc_html__( "Enable separator around title", 'pitch' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_title_like_separator_container"
	)
);
$title_standard_container->addChild(
	"title_like_separator",
	$title_like_separator
);

$title_like_separator_container = new PitchQodeContainer(
	"title_like_separator_container",
	"title_like_separator",
	"no"
);
$title_standard_container->addChild(
	"title_like_separator_container",
	$title_like_separator_container
);

$group1 = new PitchQodeGroup(
	esc_html__( "Line Styles", 'pitch' ),
	esc_html__( "Choose style for separator line", 'pitch' )
);
$title_like_separator_container->addChild(
	"group1",
	$group1
);

$row1 = new PitchQodeRow();
$group1->addChild(
	"row1",
	$row1
);

$title_like_separator_line_color = new PitchQodeField(
	"colorsimple",
	"title_like_separator_line_color",
	"",
	esc_html__( "Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"title_like_separator_line_color",
	$title_like_separator_line_color
);

$title_like_separator_line_width = new PitchQodeField(
	"textsimple",
	"title_like_separator_line_width",
	"",
	esc_html__( "Width", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"title_like_separator_line_width",
	$title_like_separator_line_width
);

$title_like_separator_line_thickness = new PitchQodeField(
	"textsimple",
	"title_like_separator_line_thickness",
	"",
	esc_html__( "Thickness", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"title_like_separator_line_thickness",
	$title_like_separator_line_thickness
);

$title_like_separator_line_style = new PitchQodeField(
	"selectsimple",
	"title_like_separator_line_style",
	"",
	esc_html__( "Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	array(
		"solid" => esc_html__( "Solid", 'pitch' ),
		"dashed" => esc_html__( "Dashed", 'pitch' ),
		"dotted" => esc_html__( "Dotted", 'pitch' )
	)
);
$row1->addChild(
	"title_like_separator_line_style",
	$title_like_separator_line_style
);

$title_like_separator_margins = new PitchQodeField(
	"text",
	"title_like_separator_margins",
	"",
	esc_html__( "Margins for Title", 'pitch' ),
	esc_html__( "Define left/right margins for title from separator", 'pitch' )
);
$title_like_separator_container->addChild(
	"title_like_separator_margins",
	$title_like_separator_margins
);

$title_like_separator_line_dots = new PitchQodeField(
	"yesno",
	"title_like_separator_line_dots",
	"no",
	esc_html__( "Dots on The End of Lines", 'pitch' ),
	esc_html__( "Enabling this option will give lines a dot next to title", 'pitch' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_title_like_separator_dots_container"
	)
);
$title_like_separator_container->addChild(
	"title_like_separator_line_dots",
	$title_like_separator_line_dots
);

$title_like_separator_dots_container = new PitchQodeContainer(
	"title_like_separator_dots_container",
	"title_like_separator_line_dots",
	"no"
);
$title_like_separator_container->addChild(
	"title_like_separator_dots_container",
	$title_like_separator_dots_container
);

$group1 = new PitchQodeGroup(
	esc_html__( "Dots Style", 'pitch' ),
	esc_html__( "Choose style for dots", 'pitch' )
);
$title_like_separator_dots_container->addChild(
	"group1",
	$group1
);

$row1 = new PitchQodeRow();
$group1->addChild(
	"row1",
	$row1
);

$title_like_separator_dots_size = new PitchQodeField(
	"textsimple",
	"title_like_separator_dots_size",
	"",
	esc_html__( "Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"title_like_separator_dots_size",
	$title_like_separator_dots_size
);

$title_like_separator_dots_color = new PitchQodeField(
	"colorsimple",
	"title_like_separator_dots_color",
	"",
	esc_html__( "Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"title_like_separator_dots_color",
	$title_like_separator_dots_color
);

//Subtitle like separator with text
$subtitle_like_separator = new PitchQodeField(
	"yesno",
	"subtitle_like_separator",
	"no",
	esc_html__( "Separator Around Subtitle Text", 'pitch' ),
	esc_html__( "Enable separator around subtitle", 'pitch' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_subtitle_like_separator_container"
	)
);
$title_standard_container->addChild(
	"subtitle_like_separator",
	$subtitle_like_separator
);

$subtitle_like_separator_container = new PitchQodeContainer(
	"subtitle_like_separator_container",
	"subtitle_like_separator",
	"no"
);
$title_standard_container->addChild(
	"subtitle_like_separator_container",
	$subtitle_like_separator_container
);

$group1 = new PitchQodeGroup(
	esc_html__( "Line Styles", 'pitch' ),
	esc_html__( "Choose style for separator line", 'pitch' )
);
$subtitle_like_separator_container->addChild(
	"group1",
	$group1
);

$row1 = new PitchQodeRow();
$group1->addChild(
	"row1",
	$row1
);

$subtitle_like_separator_line_color = new PitchQodeField(
	"colorsimple",
	"subtitle_like_separator_line_color",
	"",
	esc_html__( "Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"subtitle_like_separator_line_color",
	$subtitle_like_separator_line_color
);

$subtitle_like_separator_line_width = new PitchQodeField(
	"textsimple",
	"subtitle_like_separator_line_width",
	"",
	esc_html__( "Width", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"subtitle_like_separator_line_width",
	$subtitle_like_separator_line_width
);

$subtitle_like_separator_line_thickness = new PitchQodeField(
	"textsimple",
	"subtitle_like_separator_line_thickness",
	"",
	esc_html__( "Thickness", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"subtitle_like_separator_line_thickness",
	$subtitle_like_separator_line_thickness
);

$subtitle_like_separator_line_style = new PitchQodeField(
	"selectsimple",
	"subtitle_like_separator_line_style",
	"",
	esc_html__( "Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	array(
		"solid" => esc_html__( "Solid", 'pitch' ),
		"dashed" => esc_html__( "Dashed", 'pitch' ),
		"dotted" => esc_html__( "Dotted", 'pitch' )
	)
);
$row1->addChild(
	"subtitle_like_separator_line_style",
	$subtitle_like_separator_line_style
);

$subtitle_like_separator_margins = new PitchQodeField(
	"text",
	"subtitle_like_separator_margins",
	"",
	esc_html__( "Margins for Subtitle", 'pitch' ),
	esc_html__( "Define left/right margins for subtitle from separator", 'pitch' )
);
$subtitle_like_separator_container->addChild(
	"subtitle_like_separator_margins",
	$subtitle_like_separator_margins
);

$title_background_color = new PitchQodeField(
	"color",
	"title_background_color",
	"",
	esc_html__( "Background Color", 'pitch' ),
	esc_html__( "Choose a background color for Title Area", 'pitch' )
);
$enable_title_container->addChild(
	"title_background_color",
	$title_background_color
);

$title_image = new PitchQodeField(
	"image",
	"title_image",
	"",
	esc_html__( "Background Image", 'pitch' ),
	esc_html__( "Choose an Image for Title Area", 'pitch' )
);
$enable_title_container->addChild(
	"title_image",
	$title_image
);

$responsive_title_image = new PitchQodeField(
	"yesno",
	"responsive_title_image",
	"no",
	esc_html__( "Background Responsive Image", 'pitch' ),
	esc_html__( "Enabling this option will make Title background image responsive", 'pitch' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "#qodef_responsive_title_image_container",
		"dependence_show_on_yes" => ""
	)
);
$enable_title_container->addChild(
	"responsive_title_image",
	$responsive_title_image
);

$responsive_title_image_container = new PitchQodeContainer(
	"responsive_title_image_container",
	"responsive_title_image",
	"yes"
);
$enable_title_container->addChild(
	"responsive_title_image_container",
	$responsive_title_image_container
);
$fixed_title_image = new PitchQodeField(
	"select",
	"fixed_title_image",
	"no",
	esc_html__( "Parallax Title Image", 'pitch' ),
	esc_html__( "Enabling this option will make Title image parallax", 'pitch' ),
	array(
		"no" => esc_html__( "No", 'pitch' ),
		"yes" => esc_html__( "Yes", 'pitch' ),
		"yes_zoom" => esc_html__( "Yes, with zoom out", 'pitch' )
	)
);
$responsive_title_image_container->addChild(
	"fixed_title_image",
	$fixed_title_image
);
$title_height = new PitchQodeField(
	"text",
	"title_height",
	"",
	esc_html__( "Title Height (px)", 'pitch' ),
	esc_html__( "Set a height for Title Area in pixels", 'pitch' ),
	array(),
	array( "col_width" => 3 )
);
$responsive_title_image_container->addChild(
	"title_height",
	$title_height
);

$title_overlay_image = new PitchQodeField(
	"image",
	"title_overlay_image",
	"",
	esc_html__( "Pattern Overlay Image", 'pitch' ),
	esc_html__( "Choose an image to be used as pattern over Title Area", 'pitch' )
);
$enable_title_container->addChild(
	"title_overlay_image",
	$title_overlay_image
);

$title_separator = new PitchQodeField(
	"yesno",
	"title_separator",
	"no",
	esc_html__( "Show Title Separator", 'pitch' ),
	esc_html__( "Enabling this option will display a separator underneath Title", 'pitch' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_title_separator_container, #qodef_animation_page_title_separator_container"
	)
);
$title_standard_container->addChild(
	"title_separator",
	$title_separator
);

$title_separator_container = new PitchQodeContainer(
	"title_separator_container",
	"title_separator",
	"no"
);
$title_standard_container->addChild(
	"title_separator_container",
	$title_separator_container
);

$title_separator_format = new PitchQodeField(
	"select",
	"title_separator_format",
	"normal",
	esc_html__( "Format", 'pitch' ),
	esc_html__( "Choose a format (type) of separator", 'pitch' ),
	array(
		"normal" => esc_html__( "Normal", 'pitch' ),
		"with_icon" => esc_html__( "With Icon", 'pitch' ),
		"with_custom_icon" => esc_html__( "With Custom Icon", 'pitch' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			"normal"           => "#qodef_separator_with_icon_container, #qodef_separator_custom_icon_container, #qodef_separator_all_icons_container",
			"with_custom_icon" => "#qodef_separator_with_icon_container",
			"with_icon"        => "#qodef_separator_custom_icon_container"
		),
		"show"       => array(
			"with_icon"        => "#qodef_separator_with_icon_container, #qodef_separator_all_icons_container",
			"with_custom_icon" => "#qodef_separator_custom_icon_container, #qodef_separator_all_icons_container"
		)
	)
);

$title_separator_container->addChild(
	"title_separator_format",
	$title_separator_format
);

$separator_all_icons_container = new PitchQodeContainer(
	"separator_all_icons_container",
	"title_separator_format",
	"normal"
);
$title_separator_container->addChild(
	"separator_all_icons_container",
	$separator_all_icons_container
);

$group1 = new PitchQodeGroup(
	esc_html__( "Icon Position and Margins", 'pitch' ),
	esc_html__( "Choose icon position and set left(right) margin", 'pitch' )
);
$separator_all_icons_container->addChild(
	"group1",
	$group1
);

$row1 = new PitchQodeRow();
$group1->addChild(
	"row1",
	$row1
);

$title_separator_icon_position = new PitchQodeField(
	"selectsimple",
	"title_separator_icon_position",
	"",
	esc_html__( "Icon Position", 'pitch' ),
	esc_html__( "Choose a position for an icon", 'pitch' ),
	array(
		"left" => esc_html__( "Left", 'pitch' ),
		"center" => esc_html__( "Center", 'pitch' ),
		"right" => esc_html__( "Right", 'pitch' )
	)
);
$row1->addChild(
	"title_separator_icon_position",
	$title_separator_icon_position
);

$title_separator_icon_margins = new PitchQodeField(
	"textsimple",
	"title_separator_icon_margins",
	"",
	esc_html__( "Margins (px)", 'pitch' ),
	esc_html__( "Enter margin that will refer to left and right margin of the icon", 'pitch' )
);
$row1->addChild(
	"title_separator_icon_margins",
	$title_separator_icon_margins
);

$separator_with_icon_container = new PitchQodeContainer(
	"separator_with_icon_container",
	"title_separator_format",
	"normal",
	array( "normal", "with_custom_icon" )
);
$title_separator_container->addChild(
	"separator_with_icon_container",
	$separator_with_icon_container
);

//init icon pack hide and show array. It will be populated dinamically from collections array
$separator_icon_pack_hide_array = array();
$separator_icon_pack_show_array = array();

//do we have some collection added in collections array?
if ( is_array( pitch_qode_icon_collections()->iconCollections ) && count(
		pitch_qode_icon_collections()->iconCollections
	) ) {
	//get collections params array. It will contain values of 'param' property for each collection
	$separator_icon_collections_params = pitch_qode_icon_collections()->getIconCollectionsParams();
	
	//foreach collection generate hide and show array
	foreach ( pitch_qode_icon_collections()->iconCollections as $dep_collection_key => $dep_collection_object ) {
		$separator_icon_pack_hide_array[ $dep_collection_key ] = '';
		
		//we need to include only current collection in show string as it is the only one that needs to show
		$separator_icon_pack_show_array[ $dep_collection_key ] = '#qodef_separator_icon_' . $dep_collection_object->param . '_container';
		
		//for all collections param generate hide string
		foreach ( $separator_icon_collections_params as $separator_icon_collections_param ) {
			//we don't need to include current one, because it needs to be shown, not hidden
			if ( $separator_icon_collections_param !== $dep_collection_object->param ) {
				$separator_icon_pack_hide_array[ $dep_collection_key ] .= '#qodef_separator_icon_' . $separator_icon_collections_param . '_container,';
			}
		}
		
		//remove remaining ',' character
		$separator_icon_pack_hide_array[ $dep_collection_key ] = rtrim(
			$separator_icon_pack_hide_array[ $dep_collection_key ],
			','
		);
	}
	
}

$separator_icon_pack = new PitchQodeField(
	"select",
	"separator_icon_pack",
	"font_awesome",
	esc_html__( "Separator Icon Pack", 'pitch' ),
	esc_html__( "Choose icon pack for separator", 'pitch' ),
	pitch_qode_icon_collections()->getIconCollections(),
	array(
		"dependence" => true,
		"hide"       => $separator_icon_pack_hide_array,
		"show"       => $separator_icon_pack_show_array
	)
);

$separator_with_icon_container->addChild(
	"separator_icon_pack",
	$separator_icon_pack
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
		
		$separator_icon_hide_values = $icon_collections_keys;
		$separator_icon_container   = new PitchQodeContainer(
			"separator_icon_" . $collection_object->param . "_container",
			"separator_icon_pack",
			"",
			$separator_icon_hide_values
		);
		$separator_icon             = new PitchQodeField(
			"select",
			"separator_icon_" . $collection_object->param,
			"",
			esc_html__( "Separator Icon", 'pitch' ),
			esc_html__( "Choose Separator Icon", 'pitch' ),
			$icons_array,
			array( "col_width" => 3 )
		);
		$separator_icon_container->addChild(
			"separator_icon_" . $collection_object->param,
			$separator_icon
		);
		
		$separator_with_icon_container->addChild(
			"separator_icon_" . $collection_object->param . "_container",
			$separator_icon_container
		);
	}
	
}

$group1 = new PitchQodeGroup(
	esc_html__( "Icon Style", 'pitch' ),
	esc_html__( "Choose icon style", 'pitch' )
);
$separator_with_icon_container->addChild(
	"group1",
	$group1
);

$row1 = new PitchQodeRow();
$group1->addChild(
	"row1",
	$row1
);

$title_separator_icon_color = new PitchQodeField(
	"colorsimple",
	"title_separator_icon_color",
	"",
	esc_html__( "Color", 'pitch' ),
	esc_html__( "Choose a color of icon for Title separator", 'pitch' )
);
$row1->addChild(
	"title_separator_icon_color",
	$title_separator_icon_color
);

$title_separator_icon_hover_color = new PitchQodeField(
	"colorsimple",
	"title_separator_icon_hover_color",
	"",
	esc_html__( "Hover Color", 'pitch' ),
	esc_html__( "Choose a hover color of icon for Title separator", 'pitch' )
);
$row1->addChild(
	"title_separator_icon_hover_color",
	$title_separator_icon_hover_color
);

$title_separator_icon_custom_size = new PitchQodeField(
	"textsimple",
	"title_separator_icon_custom_size",
	"",
	esc_html__( "Icon Size", 'pitch' ),
	esc_html__( "Choose size of icon", 'pitch' )
);
$row1->addChild(
	"title_separator_icon_custom_size",
	$title_separator_icon_custom_size
);

$title_separator_icon_type = new PitchQodeField(
	"select",
	"title_separator_icon_type",
	"normal",
	esc_html__( "Icon Type", 'pitch' ),
	esc_html__( "Choose icon type", 'pitch' ),
	array(
		"normal" => esc_html__( "Normal", 'pitch' ),
		"circle" => esc_html__( "Circle", 'pitch' ),
		"square" => esc_html__( "Square", 'pitch' )
	),
	array(
		"dependence" => true,
		"hide"       => array( "normal" => "#qodef_title_separator_types_container" ),
		"show"       => array(
			"circle" => "#qodef_title_separator_types_container",
			"square" => "#qodef_title_separator_types_container"
		)
	)
);
$separator_with_icon_container->addChild(
	"title_separator_icon_type",
	$title_separator_icon_type
);

$title_separator_types_container = new PitchQodeContainer(
	"title_separator_types_container",
	"title_separator_icon_type",
	"normal"
);
$separator_with_icon_container->addChild(
	"title_separator_types_container",
	$title_separator_types_container
);

$group1 = new PitchQodeGroup(
	esc_html__( "Border Style", 'pitch' ),
	esc_html__( "Define border style for icon", 'pitch' )
);
$title_separator_types_container->addChild(
	"group1",
	$group1
);

$row1 = new PitchQodeRow();
$group1->addChild(
	"row1",
	$row1
);

$title_separator_icon_border_radius = new PitchQodeField(
	"textsimple",
	"title_separator_icon_border_radius",
	"",
	esc_html__( "Border Radius (px)", 'pitch' ),
	esc_html__( "Enter border radius for icon", 'pitch' )
);
$row1->addChild(
	"title_separator_icon_border_radius",
	$title_separator_icon_border_radius
);

$title_separator_icon_border_width = new PitchQodeField(
	"textsimple",
	"title_separator_icon_border_width",
	"",
	esc_html__( "Border Width (px)", 'pitch' ),
	esc_html__( "Enter border width for icon", 'pitch' )
);
$row1->addChild(
	"title_separator_icon_border_width",
	$title_separator_icon_border_width
);

$title_separator_icon_border_color = new PitchQodeField(
	"colorsimple",
	"title_separator_icon_border_color",
	"",
	esc_html__( "Border Color", 'pitch' ),
	esc_html__( "Enter border color for icon", 'pitch' )
);
$row1->addChild(
	"title_separator_icon_border_color",
	$title_separator_icon_border_color
);

$title_separator_icon_border_hover_color = new PitchQodeField(
	"colorsimple",
	"title_separator_icon_border_hover_color",
	"",
	esc_html__( "Border Hover Color", 'pitch' ),
	esc_html__( "Enter border color for icon", 'pitch' )
);
$row1->addChild(
	"title_separator_icon_border_hover_color",
	$title_separator_icon_border_hover_color
);

$group2 = new PitchQodeGroup(
	esc_html__( "Additional Icon Style", 'pitch' ),
	esc_html__( "Choose adition icon styling", 'pitch' )
);
$title_separator_types_container->addChild(
	"group2",
	$group2
);

$row1 = new PitchQodeRow();
$group2->addChild(
	"row1",
	$row1
);

$title_separator_icon_shape_size = new PitchQodeField(
	"textsimple",
	"title_separator_icon_shape_size",
	"",
	esc_html__( "Shape Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"title_separator_icon_shape_size",
	$title_separator_icon_shape_size
);

$title_separator_icon_background_color = new PitchQodeField(
	"colorsimple",
	"title_separator_icon_background_color",
	"",
	esc_html__( "Background Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"title_separator_icon_background_color",
	$title_separator_icon_background_color
);

$title_separator_icon_background_hover_color = new PitchQodeField(
	"colorsimple",
	"title_separator_icon_background_hover_color",
	"",
	esc_html__( "Background Hover Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"title_separator_icon_background_hover_color",
	$title_separator_icon_background_hover_color
);

$separator_custom_icon_container = new PitchQodeContainer(
	"separator_custom_icon_container",
	"title_separator_format",
	"normal",
	array( "normal", "with_icon" )
);
$title_separator_container->addChild(
	"separator_custom_icon_container",
	$separator_custom_icon_container
);

$separator_custom_icon = new PitchQodeField(
	"image",
	"separator_custom_icon",
	"",
	esc_html__( "Custom Icon", 'pitch' ),
	esc_html__( "Choose custom icon for separator", 'pitch' )
);
$separator_custom_icon_container->addChild(
	"separator_custom_icon",
	$separator_custom_icon
);

$title_separator_type = new PitchQodeField(
	"select",
	"title_separator_type",
	"",
	esc_html__( "Type", 'pitch' ),
	esc_html__( "Choose a Title separator line style", 'pitch' ),
	array(
		""       => "",
		"solid" => esc_html__( "Solid", 'pitch' ),
		"dashed" => esc_html__( "Dashed", 'pitch' )
	)
);
$title_separator_container->addChild(
	"title_separator_type",
	$title_separator_type
);

$title_separator_position = new PitchQodeField(
	"select",
	"title_separator_position",
	"",
	esc_html__( "Position", 'pitch' ),
	esc_html__( "Choose a Title separator position", 'pitch' ),
	array(
		""      => "",
		"above" => esc_html__( "Above Title", 'pitch' ),
		"below" => esc_html__( "Below Title", 'pitch' )
	)
);
$title_separator_container->addChild(
	"title_separator_position",
	$title_separator_position
);

$title_separator_color = new PitchQodeField(
	"color",
	"title_separator_color",
	"",
	esc_html__( "Color", 'pitch' ),
	esc_html__( "Choose a color for Title separator", 'pitch' )
);
$title_separator_container->addChild(
	"title_separator_color",
	$title_separator_color
);

$group1 = new PitchQodeGroup(
	esc_html__( "Size", 'pitch' ),
	esc_html__( 'Define size for Title separator', 'pitch' )
);
$title_separator_container->addChild(
	"group1",
	$group1
);

$row1 = new PitchQodeRow();
$group1->addChild(
	"row1",
	$row1
);

$title_separator_thickness = new PitchQodeField(
	"textsimple",
	"title_separator_thickness",
	"",
	esc_html__( "Thickness (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"title_separator_thickness",
	$title_separator_thickness
);

$title_separator_width = new PitchQodeField(
	"textsimple",
	"title_separator_width",
	"",
	esc_html__( "Width (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"title_separator_width",
	$title_separator_width
);

$group2 = new PitchQodeGroup(
	esc_html__( "Margin", 'pitch' ),
	esc_html__( 'Add space at top and bottom of Title separator', 'pitch' )
);
$title_separator_container->addChild(
	"group2",
	$group2
);

$row1 = new PitchQodeRow();
$group2->addChild(
	"row1",
	$row1
);

$title_separator_topmargin = new PitchQodeField(
	"textsimple",
	"title_separator_topmargin",
	"",
	esc_html__( "Top Margin (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"title_separator_topmargin",
	$title_separator_topmargin
);

$title_separator_bottommargin = new PitchQodeField(
	"textsimple",
	"title_separator_bottommargin",
	"",
	esc_html__( "Bottom Margin (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"title_separator_bottommargin",
	$title_separator_bottommargin
);

$border_top_title_area = new PitchQodeField(
	"yesno",
	"border_top_title_area",
	"no",
	esc_html__( "Top Border", 'pitch' ),
	esc_html__( "Enabling this option will display top border on Title Area", 'pitch' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_border_top_title_area_container"
	)
);
$enable_title_container->addChild(
	"border_top_title_area",
	$border_top_title_area
);

$border_top_title_area_container = new PitchQodeContainer(
	"border_top_title_area_container",
	"border_top_title_area",
	"no"
);
$enable_title_container->addChild(
	"border_top_title_area_container",
	$border_top_title_area_container
);

$enable_title_border_grid = new PitchQodeField(
	"yesno",
	"enable_title_border_grid",
	"no",
	esc_html__( "Enable Border in Grid", 'pitch' ),
	esc_html__( "This option will show title top border in grid", 'pitch' ),
	array(),
	array(
		'dependence'             => true,
		'dependence_hide_on_yes' => '',
		'dependence_show_on_yes' => ''
	)
);
$border_top_title_area_container->addChild(
	"enable_title_border_grid",
	$enable_title_border_grid
);

$border_top_title_area_width = new PitchQodeField(
	"text",
	"border_top_title_area_width",
	"",
	esc_html__( "Top Border Width (px)", 'pitch' ),
	esc_html__( "Choose a width for Title Area top border Note: If width has not been set, border top will not be displayed", 'pitch' ),
	array(),
	array( "col_width" => 3 )
);
$border_top_title_area_container->addChild(
	"border_top_title_area_width",
	$border_top_title_area_width
);
$border_top_title_area_color = new PitchQodeField(
	"color",
	"border_top_title_area_color",
	"",
	esc_html__( "Top Border Color", 'pitch' ),
	esc_html__( "Choose a color for Title Area top border", 'pitch' )
);
$border_top_title_area_container->addChild(
	"border_top_title_area_color",
	$border_top_title_area_color
);

$border_bottom_title_area = new PitchQodeField(
	"yesno",
	"border_bottom_title_area",
	"no",
	esc_html__( "Bottom Border", 'pitch' ),
	esc_html__( "Enabling this option will display bottom border on Title Area", 'pitch' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_border_bottom_title_area_container"
	)
);
$enable_title_container->addChild(
	"border_bottom_title_area",
	$border_bottom_title_area
);

$border_bottom_title_area_container = new PitchQodeContainer(
	"border_bottom_title_area_container",
	"border_bottom_title_area",
	"no"
);
$enable_title_container->addChild(
	"border_bottom_title_area_container",
	$border_bottom_title_area_container
);

$enable_title_border_grid = new PitchQodeField(
	"yesno",
	"enable_title_border_grid",
	"no",
	esc_html__( "Enable Border in Grid", 'pitch' ),
	esc_html__( "This option will show title bottom border in grid", 'pitch' ),
	array(),
	array(
		'dependence'             => true,
		'dependence_hide_on_yes' => '',
		'dependence_show_on_yes' => ''
	)
);
$border_bottom_title_area_container->addChild(
	"enable_title_border_grid",
	$enable_title_border_grid
);

$border_bottom_title_area_width = new PitchQodeField(
	"text",
	"border_bottom_title_area_width",
	"",
	esc_html__( "Bottom Border Width (px)", 'pitch' ),
	esc_html__( "Choose a width for Title Area bottom border Note: If width has not been set, border bottom will not be displayed", 'pitch' ),
	array(),
	array( "col_width" => 3 )
);
$border_bottom_title_area_container->addChild(
	"border_bottom_title_area_width",
	$border_bottom_title_area_width
);
$border_bottom_title_area_color = new PitchQodeField(
	"color",
	"border_bottom_title_area_color",
	"",
	esc_html__( "Bottom Border Color", 'pitch' ),
	esc_html__( "Choose a color for Title Area bottom border", 'pitch' )
);
$border_bottom_title_area_container->addChild(
	"border_bottom_title_area_color",
	$border_bottom_title_area_color
);

$enable_breadcrumbs = new PitchQodeField(
	"yesno",
	"enable_breadcrumbs",
	"no",
	esc_html__( "Enable Breadcrumbs", 'pitch' ),
	esc_html__( "This option will display Breadcrumbs in Title Area", 'pitch' ),
	array(),
	array(
		'dependence'             => true,
		'dependence_hide_on_yes' => '',
		'dependence_show_on_yes' => '#qodef_animation_page_title_breadcrumbs_container'
	)
);
$enable_title_container->addChild(
	"enable_breadcrumbs",
	$enable_breadcrumbs
);

$title_graphics = new PitchQodeField(
	"image",
	"title_graphics",
	"",
	esc_html__( "Graphics", 'pitch' ),
	esc_html__( "Choose graphics", 'pitch' )
);
$title_standard_container->addChild(
	"title_graphics",
	$title_graphics
);

$group1 = new PitchQodeGroup(
	esc_html__( "Title Area Content Style", 'pitch' ),
	esc_html__( 'Define style for Title Area Content', 'pitch' )
);
$enable_title_container->addChild(
	"group1",
	$group1
);

$row1 = new PitchQodeRow();
$group1->addChild(
	"row1",
	$row1
);

$title_content_background_color = new PitchQodeField(
	"colorsimple",
	"title_content_background_color",
	"",
	esc_html__( "Title Content Background Color", 'pitch' ),
	esc_html__( "Background color for title content", 'pitch' )
);
$row1->addChild(
	"title_content_background_color",
	$title_content_background_color
);

$title_content_background_opacity = new PitchQodeField(
	"textsimple",
	"title_content_background_opacity",
	"",
	esc_html__( "Title Content Background Opacity", 'pitch' ),
	esc_html__( "Choose opacity for background color (0 = fully transparent, 1 = opaque)", 'pitch' )
);
$row1->addChild(
	"title_content_background_opacity",
	$title_content_background_opacity
);

$title_content_in_grid = new PitchQodeField(
	"yesno",
	"title_content_in_grid",
	"yes",
	esc_html__( "Title Area Content In Grid", 'pitch' ),
	esc_html__( "This option will show title area content in grid", 'pitch' )
);
$enable_title_container->addChild(
	"title_content_in_grid",
	$title_content_in_grid
);

$title_content_shadows = new PitchQodeField(
	'yesno',
	'title_content_shadows',
	'no',
	esc_html__( 'Show Title Content Area Shadows', 'pitch' ),
	esc_html__( 'Enabling this option will show shadows on title content area', 'pitch' ),
	array(),
	array(
		'dependence'             => true,
		'dependence_hide_on_yes' => '',
		'dependence_show_on_yes' => '#qodef_title_content_shadows_container'
	)
);
$enable_title_container->addChild(
	'title_content_shadows',
	$title_content_shadows
);

$title_content_shadows_container = new PitchQodeContainer(
	'title_content_shadows_container',
	'title_content_shadows',
	'no'
);
$enable_title_container->addChild(
	'title_content_shadows_container',
	$title_content_shadows_container
);

$group7 = new PitchQodeGroup(
	esc_html__( 'Title Content Area Shadows', 'pitch' ),
	esc_html__( 'Set horizontal and vertical position of shadow (negative values are allowed), and define blur and spread.', 'pitch' )
);
$title_content_shadows_container->addChild(
	'group7',
	$group7
);

$row1 = new PitchQodeRow();
$group7->addChild(
	'row1',
	$row1
);

$title_content_shadow_horizontal_shadow = new PitchQodeField(
	'textsimple',
	'title_content_shadow_horizontal_shadow',
	'',
	esc_html__( 'Horizontal Shadow (px)', 'pitch' )
);
$row1->addChild(
	'title_content_shadow_horizontal_shadow',
	$title_content_shadow_horizontal_shadow
);

$title_content_shadow_vertical_shadow = new PitchQodeField(
	'textsimple',
	'title_content_shadow_vertical_shadow',
	'',
	esc_html__( 'Vertical Shadow (px)', 'pitch' )
);
$row1->addChild(
	'title_content_shadow_vertical_shadow',
	$title_content_shadow_vertical_shadow
);

$title_content_shadow_blur_distance = new PitchQodeField(
	'textsimple',
	'title_content_shadow_blur_distance',
	'',
	esc_html__( 'Blur (px)', 'pitch' )
);
$row1->addChild(
	'title_content_shadow_blur_distance',
	$title_content_shadow_blur_distance
);

$title_content_shadow_shadow_size = new PitchQodeField(
	'textsimple',
	'title_content_shadow_shadow_size',
	'',
	esc_html__( 'Spread (px)', 'pitch' )
);
$row1->addChild(
	'title_content_shadow_shadow_size',
	$title_content_shadow_shadow_size
);

$row2 = new PitchQodeRow( true );
$group7->addChild(
	'row2',
	$row2
);

$title_content_shadow_shadow_color = new PitchQodeField(
	'colorsimple',
	'title_content_shadow_shadow_color',
	'',
	esc_html__( 'Shadow color', 'pitch' )
);
$row2->addChild(
	'title_content_shadow_shadow_color',
	$title_content_shadow_shadow_color
);

$group6 = new PitchQodeGroup(
	esc_html__( "Title Area Content Padding", 'pitch' ),
	esc_html__( "Define padding for title area content", 'pitch' )
);
$enable_title_container->addChild(
	"group6",
	$group6
);

$row1 = new PitchQodeRow();
$group6->addChild(
	"row1",
	$row1
);

$title_content_span_top_padding = new PitchQodeField(
	"textsimple",
	"title_content_span_top_padding",
	"",
	esc_html__( "Top Padding", 'pitch' ),
	esc_html__( "This is some description.", 'pitch' )
);
$row1->addChild(
	"title_content_span_top_padding",
	$title_content_span_top_padding
);

$title_content_span_right_padding = new PitchQodeField(
	"textsimple",
	"title_content_span_right_padding",
	"",
	esc_html__( "Right Padding", 'pitch' ),
	esc_html__( "This is some description.", 'pitch' )
);
$row1->addChild(
	"title_content_span_right_padding",
	$title_content_span_right_padding
);

$title_content_span_bottom_padding = new PitchQodeField(
	"textsimple",
	"title_content_span_bottom_padding",
	"",
	esc_html__( "Bottom Padding", 'pitch' ),
	esc_html__( "This is some description.", 'pitch' )
);
$row1->addChild(
	"title_content_span_bottom_padding",
	$title_content_span_bottom_padding
);

$title_content_span_left_padding = new PitchQodeField(
	"textsimple",
	"title_content_span_left_padding",
	"",
	esc_html__( "Left Padding", 'pitch' ),
	esc_html__( "This is some description.", 'pitch' )
);
$row1->addChild(
	"title_content_span_left_padding",
	$title_content_span_left_padding
);

$group2 = new PitchQodeGroup(
	esc_html__( "Title Style", 'pitch' ),
	esc_html__( 'Define style for Title', 'pitch' )
);
$enable_title_container->addChild(
	"group2",
	$group2
);

$row1 = new PitchQodeRow();
$group2->addChild(
	"row1",
	$row1
);

$title_span_background_color = new PitchQodeField(
	"colorsimple",
	"title_span_background_color",
	"",
	esc_html__( "Title Background Color", 'pitch' ),
	esc_html__( "Background color for title", 'pitch' )
);
$row1->addChild(
	"title_span_background_color",
	$title_span_background_color
);

$title_span_background_opacity = new PitchQodeField(
	"textsimple",
	"title_span_background_opacity",
	"",
	esc_html__( "Title Background Opacity", 'pitch' ),
	esc_html__( "Choose opacity for background color (0 = fully transparent, 1 = opaque)", 'pitch' )
);
$row1->addChild(
	"title_span_background_opacity",
	$title_span_background_opacity
);

$group3 = new PitchQodeGroup(
	esc_html__( "Title Padding", 'pitch' ),
	esc_html__( 'Define padding for Title', 'pitch' )
);
$enable_title_container->addChild(
	"group3",
	$group3
);

$row1 = new PitchQodeRow();
$group3->addChild(
	"row1",
	$row1
);

$title_span_top_padding = new PitchQodeField(
	"textsimple",
	"title_span_top_padding",
	"",
	esc_html__( "Top Padding", 'pitch' ),
	esc_html__( "This is some description.", 'pitch' )
);
$row1->addChild(
	"title_span_top_padding",
	$title_span_top_padding
);

$title_span_right_padding = new PitchQodeField(
	"textsimple",
	"title_span_right_padding",
	"",
	esc_html__( "Right Padding", 'pitch' ),
	esc_html__( "This is some description.", 'pitch' )
);
$row1->addChild(
	"title_span_right_padding",
	$title_span_right_padding
);

$title_span_bottom_padding = new PitchQodeField(
	"textsimple",
	"title_span_bottom_padding",
	"",
	esc_html__( "Bottom Padding", 'pitch' ),
	esc_html__( "This is some description.", 'pitch' )
);
$row1->addChild(
	"title_span_bottom_padding",
	$title_span_bottom_padding
);

$title_span_left_padding = new PitchQodeField(
	"textsimple",
	"title_span_left_padding",
	"",
	esc_html__( "Left Padding", 'pitch' ),
	esc_html__( "This is some description.", 'pitch' )
);
$row1->addChild(
	"title_span_left_padding",
	$title_span_left_padding
);

$subtitle_position = new PitchQodeField(
	"select",
	"subtitle_position",
	"below_title",
	esc_html__( "Subtitle Position", 'pitch' ),
	esc_html__( "Choose a Subtitle position", 'pitch' ),
	array(
		"below_title" => esc_html__( "Below Title", 'pitch' ),
		"above_title" => esc_html__( "Above Title", 'pitch' ),
		"next_to_title" => esc_html__( "Next to Title", 'pitch' )
	)
);
$enable_title_container->addChild(
	"subtitle_position",
	$subtitle_position
);

$group4 = new PitchQodeGroup(
	esc_html__( "Subtitle Style", 'pitch' ),
	esc_html__( 'Define style for subtitle', 'pitch' )
);
$enable_title_container->addChild(
	"group4",
	$group4
);

$row1 = new PitchQodeRow();
$group4->addChild(
	"row1",
	$row1
);

$subtitle_span_background_color = new PitchQodeField(
	"colorsimple",
	"subtitle_span_background_color",
	"",
	esc_html__( "Subtitle Background Color", 'pitch' ),
	esc_html__( "Background color for subtitle", 'pitch' )
);
$row1->addChild(
	"subtitle_span_background_color",
	$subtitle_span_background_color
);

$subtitle_span_background_opacity = new PitchQodeField(
	"textsimple",
	"subtitle_span_background_opacity",
	"",
	esc_html__( "Subtitle Background Opacity", 'pitch' ),
	esc_html__( "Choose opacity for background color (0 = fully transparent, 1 = opaque)", 'pitch' )
);
$row1->addChild(
	"subtitle_span_background_opacity",
	$subtitle_span_background_opacity
);

$group5 = new PitchQodeGroup(
	esc_html__( "Subtitle Padding", 'pitch' ),
	esc_html__( 'Define padding for subtitle', 'pitch' )
);
$enable_title_container->addChild(
	"group5",
	$group5
);

$row1 = new PitchQodeRow();
$group5->addChild(
	"row1",
	$row1
);

$subtitle_span_top_padding = new PitchQodeField(
	"textsimple",
	"subtitle_span_top_padding",
	"",
	esc_html__( "Top Padding", 'pitch' ),
	esc_html__( "This is some description.", 'pitch' )
);
$row1->addChild(
	"subtitle_span_top_padding",
	$subtitle_span_top_padding
);

$subtitle_span_right_padding = new PitchQodeField(
	"textsimple",
	"subtitle_span_right_padding",
	"",
	esc_html__( "Right Padding", 'pitch' ),
	esc_html__( "This is some description.", 'pitch' )
);
$row1->addChild(
	"subtitle_span_right_padding",
	$subtitle_span_right_padding
);

$subtitle_span_bottom_padding = new PitchQodeField(
	"textsimple",
	"subtitle_span_bottom_padding",
	"",
	esc_html__( "Bottom Padding", 'pitch' ),
	esc_html__( "This is some description.", 'pitch' )
);
$row1->addChild(
	"subtitle_span_bottom_padding",
	$subtitle_span_bottom_padding
);

$subtitle_span_left_padding = new PitchQodeField(
	"textsimple",
	"subtitle_span_left_padding",
	"",
	esc_html__( "Left Padding", 'pitch' ),
	esc_html__( "This is some description.", 'pitch' )
);
$row1->addChild(
	"subtitle_span_left_padding",
	$subtitle_span_left_padding
);

$panel9 = new PitchQodePanel(
	esc_html__( 'Title Animations', 'pitch' ),
	'title_animations'
);
$titlePage->addChild(
	'panel9',
	$panel9
);

//Whole title content animation
$page_title_whole_content_animations = new PitchQodeField(
	'yesno',
	'page_title_whole_content_animations',
	'no',
	esc_html__( 'Enable Whole Title Content Animation', 'pitch' ),
	esc_html__( 'This option will enable whole title content animation', 'pitch' ),
	array(),
	array(
		'dependence'             => true,
		'dependence_hide_on_yes' => '',
		'dependence_show_on_yes' => '#qodef_page_title_whole_content_animations_container'
	)
);
$panel9->addChild(
	'page_title_whole_content_animations',
	$page_title_whole_content_animations
);

$page_title_whole_content_animations_container = new PitchQodeContainer(
	'page_title_whole_content_animations_container',
	'page_title_whole_content_animations',
	'no'
);
$panel9->addChild(
	'page_title_whole_content_animations_container',
	$page_title_whole_content_animations_container
);

$page_title_whole_content_animations_data_start = new PitchQodeGroup(
	esc_html__( 'Scrolling Animation Start Point', 'pitch' ),
	esc_html__( 'These are properties for the first keyframe in scrolling animation', 'pitch' )
);
$page_title_whole_content_animations_container->addChild(
	'page_title_whole_content_animations_data_start',
	$page_title_whole_content_animations_data_start
);

$row1 = new PitchQodeRow();
$page_title_whole_content_animations_data_start->addChild(
	'row1',
	$row1
);

$page_title_whole_content_data_start = new PitchQodeField(
	'textsimple',
	'page_title_whole_content_data_start',
	'',
	esc_html__( 'Scrollbar Top Distance (px)', 'pitch' )
);
$row1->addChild(
	'page_title_whole_content_data_start',
	$page_title_whole_content_data_start
);

$page_title_whole_content_start_custom_style = new PitchQodeField(
	'textareasimple',
	'page_title_whole_content_start_custom_style',
	'',
	esc_html__( 'Enter CSS declarations separated by semicolons', 'pitch' )
);
$row1->addChild(
	'page_title_whole_content_start_custom_style',
	$page_title_whole_content_start_custom_style
);

$page_title_whole_content_animations_data_end = new PitchQodeGroup(
	esc_html__( 'Scrolling Animation End Point', 'pitch' ),
	esc_html__( 'These are properties for the last keyframe in scrolling animation', 'pitch' )
);
$page_title_whole_content_animations_container->addChild(
	'page_title_whole_content_animations_data_end',
	$page_title_whole_content_animations_data_end
);

$row2 = new PitchQodeRow();
$page_title_whole_content_animations_data_end->addChild(
	'row2',
	$row2
);

$page_title_whole_content_data_end = new PitchQodeField(
	'textsimple',
	'page_title_whole_content_data_end',
	'',
	esc_html__( 'Scrollbar Top Distance (px)', 'pitch' )
);
$row2->addChild(
	'page_title_whole_content_data_end',
	$page_title_whole_content_data_end
);

$page_title_whole_content_end_custom_style = new PitchQodeField(
	'textareasimple',
	'page_title_whole_content_end_custom_style',
	'',
	esc_html__( 'Enter CSS declarations separated by semicolons', 'pitch' )
);
$row2->addChild(
	'page_title_whole_content_end_custom_style',
	$page_title_whole_content_end_custom_style
);

//Title Animations
$animation_page_title_contaier = new PitchQodeContainerNoStyle(
	'animation_page_title_contaier',
	'show_page_title_text',
	'no'
);
$panel9->addChild(
	'animation_page_title_contaier',
	$animation_page_title_contaier
);

$page_title_animations = new PitchQodeField(
	'yesno',
	'page_title_animations',
	'no',
	esc_html__( 'Enable Page Title Animations', 'pitch' ),
	esc_html__( 'This option will enable Page Title Scroll Animations', 'pitch' ),
	array(),
	array(
		'dependence'             => true,
		'dependence_hide_on_yes' => '',
		'dependence_show_on_yes' => '#qodef_page_title_animations_container'
	)
);
$animation_page_title_contaier->addChild(
	'page_title_animations',
	$page_title_animations
);

$page_title_animations_container = new PitchQodeContainer(
	'page_title_animations_container',
	'page_title_animations',
	'no'
);
$animation_page_title_contaier->addChild(
	'page_title_animations_container',
	$page_title_animations_container
);

$page_title_animations_data_start = new PitchQodeGroup(
	esc_html__( 'Scrolling Animation Start Point', 'pitch' ),
	esc_html__( 'These are properties for the first keyframe in scrolling animation', 'pitch' )
);
$page_title_animations_container->addChild(
	'page_title_animations_data_start',
	$page_title_animations_data_start
);

$row1 = new PitchQodeRow();
$page_title_animations_data_start->addChild(
	'row1',
	$row1
);

$page_title_data_start = new PitchQodeField(
	'textsimple',
	'page_title_data_start',
	'',
	esc_html__( 'Scrollbar Top Distance (px)', 'pitch' )
);
$row1->addChild(
	'page_title_data_start',
	$page_title_data_start
);

$page_title_start_custom_style = new PitchQodeField(
	'textareasimple',
	'page_title_start_custom_style',
	'',
	esc_html__( 'Enter CSS declarations separated by semicolons', 'pitch' )
);
$row1->addChild(
	'page_title_start_custom_style',
	$page_title_start_custom_style
);

$page_title_animations_data_end = new PitchQodeGroup(
	esc_html__( 'Scrolling Animation End Point', 'pitch' ),
	esc_html__( 'These are properties for the last keyframe in scrolling animation', 'pitch' )
);
$page_title_animations_container->addChild(
	'page_title_animations_data_end',
	$page_title_animations_data_end
);

$row2 = new PitchQodeRow();
$page_title_animations_data_end->addChild(
	'row2',
	$row2
);

$page_title_data_end = new PitchQodeField(
	'textsimple',
	'page_title_data_end',
	'',
	esc_html__( 'Scrollbar Top Distance (px)', 'pitch' )
);
$row2->addChild(
	'page_title_data_end',
	$page_title_data_end
);

$page_title_end_custom_style = new PitchQodeField(
	'textareasimple',
	'page_title_end_custom_style',
	'',
	esc_html__( 'Enter CSS declarations separated by semicolons', 'pitch' )
);
$row2->addChild(
	'page_title_end_custom_style',
	$page_title_end_custom_style
);

//Title Separator Animations
$animation_page_title_separator_container = new PitchQodeContainerNoStyle(
	'animation_page_title_separator_container',
	'title_separator',
	'no'
);
$panel9->addChild(
	'animation_page_title_separator_container',
	$animation_page_title_separator_container
);

$page_title_separator_animations = new PitchQodeField(
	'yesno',
	'page_title_separator_animations',
	'no',
	esc_html__( 'Enable Page Separator Title Animations', 'pitch' ),
	esc_html__( 'This option will enable Page Title Separator Scroll Animations', 'pitch' ),
	array(),
	array(
		'dependence'             => true,
		'dependence_hide_on_yes' => '',
		'dependence_show_on_yes' => '#qodef_page_title_separator_animations_container'
	)
);
$animation_page_title_separator_container->addChild(
	'page_title_separator_animations',
	$page_title_separator_animations
);

$page_title_separator_animations_container = new PitchQodeContainer(
	'page_title_separator_animations_container',
	'page_title_separator_animations',
	'no'
);
$animation_page_title_separator_container->addChild(
	'page_title_separator_animations_container',
	$page_title_separator_animations_container
);

$page_title_separator_animations_data_start = new PitchQodeGroup(
	esc_html__( 'Scrolling Animation Start Point', 'pitch' ),
	esc_html__( 'These are properties for the first keyframe in scrolling animation', 'pitch' )
);
$page_title_separator_animations_container->addChild(
	'page_title_separator_animations_data_start',
	$page_title_separator_animations_data_start
);

$row1 = new PitchQodeRow();
$page_title_separator_animations_data_start->addChild(
	'row1',
	$row1
);

$page_title_separator_data_start = new PitchQodeField(
	'textsimple',
	'page_title_separator_data_start',
	'',
	esc_html__( 'Scrollbar Top Distance (px)', 'pitch' )
);
$row1->addChild(
	'page_title_separator_data_start',
	$page_title_separator_data_start
);

$page_title_separator_start_custom_style = new PitchQodeField(
	'textareasimple',
	'page_title_separator_start_custom_style',
	'',
	esc_html__( 'Enter CSS declarations separated by semicolons', 'pitch' )
);
$row1->addChild(
	'page_title_separator_start_custom_style',
	$page_title_separator_start_custom_style
);

$page_title_separator_animations_data_end = new PitchQodeGroup(
	esc_html__( 'Scrolling Animation End Point', 'pitch' ),
	esc_html__( 'These are properties for the last keyframe in scrolling animation', 'pitch' )
);
$page_title_separator_animations_container->addChild(
	'page_title_separator_animations_data_end',
	$page_title_separator_animations_data_end
);

$row2 = new PitchQodeRow();
$page_title_separator_animations_data_end->addChild(
	'row2',
	$row2
);

$page_title_separator_data_end = new PitchQodeField(
	'textsimple',
	'page_title_separator_data_end',
	'',
	esc_html__( 'Scrollbar Top Distance (px)', 'pitch' )
);
$row2->addChild(
	'page_title_separator_data_end',
	$page_title_separator_data_end
);

$page_title_separator_end_custom_style = new PitchQodeField(
	'textareasimple',
	'page_title_separator_end_custom_style',
	'',
	esc_html__( 'Enter CSS declarations separated by semicolons', 'pitch' )
);
$row2->addChild(
	'page_title_separator_end_custom_style',
	$page_title_separator_end_custom_style
);

//Subtitle Animations
$page_subtitle_animations = new PitchQodeField(
	'yesno',
	'page_subtitle_animations',
	'no',
	esc_html__( 'Enable Page Subtitle Animations', 'pitch' ),
	esc_html__( 'This option will enable Page Subtitle Scroll Animations', 'pitch' ),
	array(),
	array(
		'dependence'             => true,
		'dependence_hide_on_yes' => '',
		'dependence_show_on_yes' => '#qodef_page_subtitle_animations_container'
	)
);
$panel9->addChild(
	'page_subtitle_animations',
	$page_subtitle_animations
);

$page_subtitle_animations_container = new PitchQodeContainer(
	'page_subtitle_animations_container',
	'page_subtitle_animations',
	'no'
);
$panel9->addChild(
	'page_subtitle_animations_container',
	$page_subtitle_animations_container
);

$page_subtitle_animations_data_start = new PitchQodeGroup(
	esc_html__( 'Scrolling Animation Start Point', 'pitch' ),
	esc_html__( 'These are properties for the first keyframe in scrolling animation', 'pitch' )
);
$page_subtitle_animations_container->addChild(
	'page_subtitle_animations_data_start',
	$page_subtitle_animations_data_start
);

$row1 = new PitchQodeRow();
$page_subtitle_animations_data_start->addChild(
	'row1',
	$row1
);

$page_subtitle_data_start = new PitchQodeField(
	'textsimple',
	'page_subtitle_data_start',
	'',
	esc_html__( 'Scrollbar Top Distance (px)', 'pitch' )
);
$row1->addChild(
	'page_subtitle_data_start',
	$page_subtitle_data_start
);

$page_subtitle_start_custom_style = new PitchQodeField(
	'textareasimple',
	'page_subtitle_start_custom_style',
	'',
	esc_html__( 'Enter CSS declarations separated by semicolons', 'pitch' )
);
$row1->addChild(
	'page_subtitle_start_custom_style',
	$page_subtitle_start_custom_style
);

$page_subtitle_animations_data_end = new PitchQodeGroup(
	esc_html__( 'Scrolling Animation End Point', 'pitch' ),
	esc_html__( 'These are properties for the last keyframe in scrolling animation', 'pitch' )
);
$page_subtitle_animations_container->addChild(
	'page_subtitle_animations_data_end',
	$page_subtitle_animations_data_end
);

$row2 = new PitchQodeRow();
$page_subtitle_animations_data_end->addChild(
	'row2',
	$row2
);

$page_subtitle_data_end = new PitchQodeField(
	'textsimple',
	'page_subtitle_data_end',
	'',
	esc_html__( 'Scrollbar Top Distance (px)', 'pitch' )
);
$row2->addChild(
	'page_subtitle_data_end',
	$page_subtitle_data_end
);

$page_subtitle_end_custom_style = new PitchQodeField(
	'textareasimple',
	'page_subtitle_end_custom_style',
	'',
	esc_html__( 'Enter CSS declarations separated by semicolons', 'pitch' )
);
$row2->addChild(
	'page_subtitle_end_custom_style',
	$page_subtitle_end_custom_style
);

//Graphic Animations
$page_title_graphic_animations = new PitchQodeField(
	'yesno',
	'page_title_graphic_animations',
	'no',
	esc_html__( 'Enable Page Title Graphic Animations', 'pitch' ),
	esc_html__( 'This option will enable Page Title Graphic Scroll Animations', 'pitch' ),
	array(),
	array(
		'dependence'             => true,
		'dependence_hide_on_yes' => '',
		'dependence_show_on_yes' => '#qodef_page_title_graphic_animations_container'
	)
);
$panel9->addChild(
	'page_title_graphic_animations',
	$page_title_graphic_animations
);

$page_title_graphic_animations_container = new PitchQodeContainer(
	'page_title_graphic_animations_container',
	'page_title_graphic_animations',
	'no'
);
$panel9->addChild(
	'page_title_graphic_animations_container',
	$page_title_graphic_animations_container
);

$page_title_graphic_animations_data_start = new PitchQodeGroup(
	esc_html__( 'Scrolling Animation Start Point', 'pitch' ),
	esc_html__( 'These are properties for the first keyframe in scrolling animation', 'pitch' )
);
$page_title_graphic_animations_container->addChild(
	'page_title_graphic_animations_data_start',
	$page_title_graphic_animations_data_start
);

$row1 = new PitchQodeRow();
$page_title_graphic_animations_data_start->addChild(
	'row1',
	$row1
);

$page_title_graphic_data_start = new PitchQodeField(
	'textsimple',
	'page_title_graphic_data_start',
	'',
	esc_html__( 'Scrollbar Top Distance (px)', 'pitch' )
);
$row1->addChild(
	'page_title_graphic_data_start',
	$page_title_graphic_data_start
);

$page_title_graphic_start_custom_style = new PitchQodeField(
	'textareasimple',
	'page_title_graphic_start_custom_style',
	'',
	esc_html__( 'Enter CSS declarations separated by semicolons', 'pitch' )
);
$row1->addChild(
	'page_title_graphic_start_custom_style',
	$page_title_graphic_start_custom_style
);

$page_title_graphic_animations_data_end = new PitchQodeGroup(
	esc_html__( 'Scrolling Animation End Point', 'pitch' ),
	esc_html__( 'These are properties for the last keyframe in scrolling animation', 'pitch' )
);
$page_title_graphic_animations_container->addChild(
	'$page_title_graphic_animations_data_end',
	$page_title_graphic_animations_data_end
);

$row2 = new PitchQodeRow();
$page_title_graphic_animations_data_end->addChild(
	'row2',
	$row2
);

$page_title_graphic_data_end = new PitchQodeField(
	'textsimple',
	'page_title_graphic_data_end',
	'',
	esc_html__( 'Scrollbar Top Distance (px)', 'pitch' )
);
$row2->addChild(
	'page_title_graphic_data_end',
	$page_title_graphic_data_end
);

$page_title_graphic_end_custom_style = new PitchQodeField(
	'textareasimple',
	'page_title_graphic_end_custom_style',
	'',
	esc_html__( 'Enter CSS declarations separated by semicolons', 'pitch' )
);
$row2->addChild(
	'page_title_graphic_end_custom_style',
	$page_title_graphic_end_custom_style
);

//Breadcrumb animations
$animation_page_title_breadcrumbs_container = new PitchQodeContainerNoStyle(
	'animation_page_title_breadcrumbs_container',
	'enable_breadcrumbs',
	'no'
);
$panel9->addChild(
	'animation_page_title_breadcrumbs_container',
	$animation_page_title_breadcrumbs_container
);

$page_title_breadcrumbs_animations = new PitchQodeField(
	'yesno',
	'page_title_breadcrumbs_animations',
	'no',
	esc_html__( 'Enable Page Title Breadcrumbs Animations', 'pitch' ),
	esc_html__( 'This option will enable Page Title Breadcrumbs Scroll Animations', 'pitch' ),
	array(),
	array(
		'dependence'             => true,
		'dependence_hide_on_yes' => '',
		'dependence_show_on_yes' => '#qodef_page_title_breadcrumbs_animations_container'
	)
);
$animation_page_title_breadcrumbs_container->addChild(
	'page_title_breadcrumbs_animations',
	$page_title_breadcrumbs_animations
);

$page_title_breadcrumbs_animations_container = new PitchQodeContainer(
	'page_title_breadcrumbs_animations_container',
	'page_title_breadcrumbs_animations',
	'no'
);
$animation_page_title_breadcrumbs_container->addChild(
	'page_title_breadcrumbs_animations_container',
	$page_title_breadcrumbs_animations_container
);

$page_title_breadcrumbs_animations_data_start = new PitchQodeGroup(
	esc_html__( 'Scrolling Animation Start Point', 'pitch' ),
	esc_html__( 'These are properties for the first keyframe in scrolling animation', 'pitch' )
);
$page_title_breadcrumbs_animations_container->addChild(
	'page_title_breadcrumbs_animations_data_start',
	$page_title_breadcrumbs_animations_data_start
);

$row1 = new PitchQodeRow();
$page_title_breadcrumbs_animations_data_start->addChild(
	'row1',
	$row1
);

$page_title_breadcrumbs_data_start = new PitchQodeField(
	'textsimple',
	'page_title_breadcrumbs_data_start',
	'',
	esc_html__( 'Scrollbar Top Distance (px)', 'pitch' )
);
$row1->addChild(
	'page_title_breadcrumbs_data_start',
	$page_title_breadcrumbs_data_start
);

$page_title_breadcrumbs_start_custom_style = new PitchQodeField(
	'textareasimple',
	'page_title_breadcrumbs_start_custom_style',
	'',
	esc_html__( 'Enter CSS declarations separated by semicolons', 'pitch' )
);
$row1->addChild(
	'page_title_breadcrumbs_start_custom_style',
	$page_title_breadcrumbs_start_custom_style
);

$page_title_breadcrumbs_animations_data_end = new PitchQodeGroup(
	esc_html__( 'Scrolling Animation End Point', 'pitch' ),
	esc_html__( 'These are properties for the last keyframe in scrolling animation', 'pitch' )
);
$page_title_breadcrumbs_animations_container->addChild(
	'page_title_breadcrumbs_animations_data_end',
	$page_title_breadcrumbs_animations_data_end
);

$row2 = new PitchQodeRow();
$page_title_breadcrumbs_animations_data_end->addChild(
	'row2',
	$row2
);

$page_title_breadcrumbs_data_end = new PitchQodeField(
	'textsimple',
	'page_title_breadcrumbs_data_end',
	'',
	esc_html__( 'Scrollbar Top Distance (px)', 'pitch' )
);
$row2->addChild(
	'page_title_breadcrumbs_data_end',
	$page_title_breadcrumbs_data_end
);

$page_title_breadcrumbs_end_custom_style = new PitchQodeField(
	'textareasimple',
	'page_title_breadcrumbs_end_custom_style',
	'',
	esc_html__( 'Enter CSS declarations separated by semicolons', 'pitch' )
);
$row2->addChild(
	'page_title_breadcrumbs_end_custom_style',
	$page_title_breadcrumbs_end_custom_style
);
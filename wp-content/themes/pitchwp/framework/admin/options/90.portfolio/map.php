<?php

$portfolioPage = new QodePitchAdminPage(
	"9",
	esc_html__( "Portfolio", 'pitch' ),
	"fa fa-camera-retro"
);
$pitch_qode_framework->qodeOptions->addAdminPage(
	"portfolioPage",
	$portfolioPage
);

//Portfolio List

$panel1 = new PitchQodePanel(
	esc_html__( "Portfolio List", 'pitch' ),
	"porfolio_list"
);
$portfolioPage->addChild(
	"panel1",
	$panel1
);

$portfolio_qode_like = new PitchQodeField(
	"onoff",
	"portfolio_qode_like",
	"on",
	esc_html__( "Likes", 'pitch' ),
	esc_html__( 'Enabling this option will turn on "Likes"', 'pitch' )
);
$panel1->addChild(
	"portfolio_qode_like",
	$portfolio_qode_like
);

$portfolio_disable_text_box = new PitchQodeField(
	"yesno",
	"portfolio_disable_text_box",
	"yes",
	esc_html__( "Disable Boxed Style Project Description", 'pitch' ),
	esc_html__( "Disabling boxed styled project description", 'pitch' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "#qodef_enable_portfolio_list_box_container",
		"dependence_show_on_yes" => ""
	)
);
$panel1->addChild(
	"portfolio_disable_text_box",
	$portfolio_disable_text_box
);

$enable_portfolio_list_box_container = new PitchQodeContainer(
	"enable_portfolio_list_box_container",
	"portfolio_disable_text_box",
	"yes"
);
$panel1->addChild(
	"enable_portfolio_list_box_container",
	$enable_portfolio_list_box_container
);

$portfolio_list_box_background_color = new PitchQodeField(
	"color",
	"portfolio_list_box_background_color",
	"",
	esc_html__( "Portfolio Box Background Color", 'pitch' ),
	esc_html__( "Default color is #ffffff", 'pitch' )
);
$enable_portfolio_list_box_container->addChild(
	"portfolio_list_box_background_color",
	$portfolio_list_box_background_color
);

$group1 = new PitchQodeGroup(
	esc_html__( "Image Hover Overlay Color", 'pitch' ),
	esc_html__( "Define icons styles on project hover. Default hover color is #279eff.", 'pitch' )
);
$panel1->addChild(
	"group1",
	$group1
);

$row1 = new PitchQodeRow();
$group1->addChild(
	"row1",
	$row1
);

$portfolio_shader_color = new PitchQodeField(
	"colorsimple",
	"portfolio_shader_color",
	"",
	esc_html__( "Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"portfolio_shader_color",
	$portfolio_shader_color
);

$portfolio_shader_transparency = new PitchQodeField(
	"textsimple",
	"portfolio_shader_transparency",
	"",
	esc_html__( "Transparency (0=full - 1=opaque)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	array(),
	array( "col_width" => 3 )
);
$row1->addChild(
	"portfolio_shader_transparency",
	$portfolio_shader_transparency
);

// Portfolio List TEXT STYLES

$title_text_styles = new PitchQodeTitle(
	"title_text_styles",
	esc_html__( "Title Text Styles", 'pitch' )
);
$panel1->addChild(
	"title_text_styles",
	$title_text_styles
);

$group7 = new PitchQodeGroup(
	esc_html__( "Title Style for Standard and Pinterest Lists", 'pitch' ),
	esc_html__( "Define title styles for standard and pinterest portfolio lists.", 'pitch' )
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
$portfolio_title_standard_list_color = new PitchQodeField(
	"colorsimple",
	"portfolio_title_standard_list_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"portfolio_title_standard_list_color",
	$portfolio_title_standard_list_color
);
$portfolio_title_standard_list_hover_color = new PitchQodeField(
	"colorsimple",
	"portfolio_title_standard_list_hover_color",
	"",
	esc_html__( "Text Hover Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"portfolio_title_standard_list_hover_color",
	$portfolio_title_standard_list_hover_color
);
$portfolio_title_standard_list_font_size = new PitchQodeField(
	"textsimple",
	"portfolio_title_standard_list_font_size",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"portfolio_title_standard_list_font_size",
	$portfolio_title_standard_list_font_size
);
$portfolio_title_standard_list_line_height = new PitchQodeField(
	"textsimple",
	"portfolio_title_standard_list_line_height",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"portfolio_title_standard_list_line_height",
	$portfolio_title_standard_list_line_height
);

$row2 = new PitchQodeRow( true );
$group7->addChild(
	"row2",
	$row2
);
$portfolio_title_standard_list_text_transform = new PitchQodeField(
	"selectblanksimple",
	"portfolio_title_standard_list_text_transform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row2->addChild(
	"portfolio_title_standard_list_text_transform",
	$portfolio_title_standard_list_text_transform
);
$portfolio_title_standard_list_font_family = new PitchQodeField(
	"fontsimple",
	"portfolio_title_standard_list_font_family",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"portfolio_title_standard_list_font_family",
	$portfolio_title_standard_list_font_family
);
$portfolio_title_standard_list_font_style = new PitchQodeField(
	"selectblanksimple",
	"portfolio_title_standard_list_font_style",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"portfolio_title_standard_list_font_style",
	$portfolio_title_standard_list_font_style
);
$portfolio_title_standard_list_font_weight = new PitchQodeField(
	"selectblanksimple",
	"portfolio_title_standard_list_font_weight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"portfolio_title_standard_list_font_weight",
	$portfolio_title_standard_list_font_weight
);

$row3 = new PitchQodeRow( true );
$group7->addChild(
	"row3",
	$row3
);
$portfolio_title_standard_list_letter_spacing = new PitchQodeField(
	"textsimple",
	"portfolio_title_standard_list_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row3->addChild(
	"portfolio_title_standard_list_letter_spacing",
	$portfolio_title_standard_list_letter_spacing
);

$group9 = new PitchQodeGroup(
	esc_html__( "Title Style for Text on Hover Image and Text before Hover Lists", 'pitch' ),
	esc_html__( "Define title styles for text on hover image and text before hover portfolio lists.", 'pitch' )
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
$portfolio_title_hover_box_list_color = new PitchQodeField(
	"colorsimple",
	"portfolio_title_hover_box_list_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"portfolio_title_hover_box_list_color",
	$portfolio_title_hover_box_list_color
);
$portfolio_title_hover_box_list_hover_color = new PitchQodeField(
	"colorsimple",
	"portfolio_title_hover_box_list_hover_color",
	"",
	esc_html__( "Text Hover Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"portfolio_title_hover_box_list_hover_color",
	$portfolio_title_hover_box_list_hover_color
);
$portfolio_title_hover_box_list_font_size = new PitchQodeField(
	"textsimple",
	"portfolio_title_hover_box_list_font_size",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"portfolio_title_hover_box_list_font_size",
	$portfolio_title_hover_box_list_font_size
);
$portfolio_title_hover_box_list_line_height = new PitchQodeField(
	"textsimple",
	"portfolio_title_hover_box_list_line_height",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"portfolio_title_hover_box_list_line_height",
	$portfolio_title_hover_box_list_line_height
);

$row2 = new PitchQodeRow( true );
$group9->addChild(
	"row2",
	$row2
);
$portfolio_title_hover_box_list_font_family = new PitchQodeField(
	"fontsimple",
	"portfolio_title_hover_box_list_font_family",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"portfolio_title_hover_box_list_font_family",
	$portfolio_title_hover_box_list_font_family
);
$portfolio_title_hover_box_list_text_transform = new PitchQodeField(
	"selectblanksimple",
	"portfolio_title_hover_box_list_text_transform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row2->addChild(
	"portfolio_title_hover_box_list_text_transform",
	$portfolio_title_hover_box_list_text_transform
);
$portfolio_title_hover_box_list_font_style = new PitchQodeField(
	"selectblanksimple",
	"portfolio_title_hover_box_list_font_style",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"portfolio_title_hover_box_list_font_style",
	$portfolio_title_hover_box_list_font_style
);
$portfolio_title_hover_box_list_font_weight = new PitchQodeField(
	"selectblanksimple",
	"portfolio_title_hover_box_list_font_weight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"portfolio_title_hover_box_list_font_weight",
	$portfolio_title_hover_box_list_font_weight
);

$row3 = new PitchQodeRow( true );
$group9->addChild(
	"row3",
	$row3
);
$portfolio_title_hover_box_list_letter_spacing = new PitchQodeField(
	"textsimple",
	"portfolio_title_hover_box_list_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row3->addChild(
	"portfolio_title_hover_box_list_letter_spacing",
	$portfolio_title_hover_box_list_letter_spacing
);

$group11 = new PitchQodeGroup(
	esc_html__( "Title Style for Portfolio Slider and Masonry Lists", 'pitch' ),
	esc_html__( "Define title styles for slider and masonry portfolio lists.", 'pitch' )
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
$portfolio_title_list_color = new PitchQodeField(
	"colorsimple",
	"portfolio_title_list_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"portfolio_title_list_color",
	$portfolio_title_list_color
);
$portfolio_title_list_hover_color = new PitchQodeField(
	"colorsimple",
	"portfolio_title_list_hover_color",
	"",
	esc_html__( "Text Hover Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"portfolio_title_list_hover_color",
	$portfolio_title_list_hover_color
);
$portfolio_title_list_font_size = new PitchQodeField(
	"textsimple",
	"portfolio_title_list_font_size",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"portfolio_title_list_font_size",
	$portfolio_title_list_font_size
);
$portfolio_title_list_line_height = new PitchQodeField(
	"textsimple",
	"portfolio_title_list_line_height",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"portfolio_title_list_line_height",
	$portfolio_title_list_line_height
);

$row2 = new PitchQodeRow( true );
$group11->addChild(
	"row2",
	$row2
);
$portfolio_title_list_text_transform = new PitchQodeField(
	"selectblanksimple",
	"portfolio_title_list_text_transform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row2->addChild(
	"portfolio_title_list_text_transform",
	$portfolio_title_list_text_transform
);
$portfolio_title_list_font_family = new PitchQodeField(
	"fontsimple",
	"portfolio_title_list_font_family",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"portfolio_title_list_font_family",
	$portfolio_title_list_font_family
);
$portfolio_title_list_font_style = new PitchQodeField(
	"selectblanksimple",
	"portfolio_title_list_font_style",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"portfolio_title_list_font_style",
	$portfolio_title_list_font_style
);
$portfolio_title_list_font_weight = new PitchQodeField(
	"selectblanksimple",
	"portfolio_title_list_font_weight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"portfolio_title_list_font_weight",
	$portfolio_title_list_font_weight
);

$row3 = new PitchQodeRow( true );
$group11->addChild(
	"row3",
	$row3
);
$portfolio_title_list_letter_spacing = new PitchQodeField(
	"textsimple",
	"portfolio_title_list_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row3->addChild(
	"portfolio_title_list_letter_spacing",
	$portfolio_title_list_letter_spacing
);

$category_text_styles = new PitchQodeTitle(
	"category_text_styles",
	esc_html__( "Category Text Styles", 'pitch' )
);
$panel1->addChild(
	"category_text_styles",
	$category_text_styles
);

$group8 = new PitchQodeGroup(
	esc_html__( "Category Style for Standard and Pinterest Lists", 'pitch' ),
	esc_html__( "Define category styles for standard and pinterest portfolio lists.", 'pitch' )
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
$portfolio_category_standard_list_color = new PitchQodeField(
	"colorsimple",
	"portfolio_category_standard_list_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"portfolio_category_standard_list_color",
	$portfolio_category_standard_list_color
);
$portfolio_category_standard_list_font_size = new PitchQodeField(
	"textsimple",
	"portfolio_category_standard_list_font_size",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"portfolio_category_standard_list_font_size",
	$portfolio_category_standard_list_font_size
);
$portfolio_category_standard_list_line_height = new PitchQodeField(
	"textsimple",
	"portfolio_category_standard_list_line_height",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"portfolio_category_standard_list_line_height",
	$portfolio_category_standard_list_line_height
);
$portfolio_category_standard_list_text_transform = new PitchQodeField(
	"selectblanksimple",
	"portfolio_category_standard_list_text_transform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	"portfolio_category_standard_list_text_transform",
	$portfolio_category_standard_list_text_transform
);

$row2 = new PitchQodeRow( true );
$group8->addChild(
	"row2",
	$row2
);
$portfolio_category_standard_list_font_family = new PitchQodeField(
	"fontsimple",
	"portfolio_category_standard_list_font_family",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"portfolio_category_standard_list_font_family",
	$portfolio_category_standard_list_font_family
);
$portfolio_category_standard_list_font_style = new PitchQodeField(
	"selectblanksimple",
	"portfolio_category_standard_list_font_style",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"portfolio_category_standard_list_font_style",
	$portfolio_category_standard_list_font_style
);
$portfolio_category_standard_list_font_weight = new PitchQodeField(
	"selectblanksimple",
	"portfolio_category_standard_list_font_weight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"portfolio_category_standard_list_font_weight",
	$portfolio_category_standard_list_font_weight
);
$portfolio_category_standard_list_letter_spacing = new PitchQodeField(
	"textsimple",
	"portfolio_category_standard_list_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"portfolio_category_standard_list_letter_spacing",
	$portfolio_category_standard_list_letter_spacing
);

$group10 = new PitchQodeGroup(
	esc_html__( "Category Style for Text on Hover Image and Text before Hover Lists", 'pitch' ),
	esc_html__( "Define category styles for standard and pinterest portfolio lists.", 'pitch' )
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
$portfolio_category_hover_box_list_color = new PitchQodeField(
	"colorsimple",
	"portfolio_category_hover_box_list_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"portfolio_category_hover_box_list_color",
	$portfolio_category_hover_box_list_color
);
$portfolio_category_hover_box_list_font_size = new PitchQodeField(
	"textsimple",
	"portfolio_category_hover_box_list_font_size",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"portfolio_category_hover_box_list_font_size",
	$portfolio_category_hover_box_list_font_size
);
$portfolio_category_hover_box_list_line_height = new PitchQodeField(
	"textsimple",
	"portfolio_category_hover_box_list_line_height",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"portfolio_category_hover_box_list_line_height",
	$portfolio_category_hover_box_list_line_height
);
$portfolio_category_hover_box_list_text_transform = new PitchQodeField(
	"selectblanksimple",
	"portfolio_category_hover_box_list_text_transform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	"portfolio_category_hover_box_list_text_transform",
	$portfolio_category_hover_box_list_text_transform
);

$row2 = new PitchQodeRow( true );
$group10->addChild(
	"row2",
	$row2
);
$portfolio_category_hover_box_list_font_family = new PitchQodeField(
	"fontsimple",
	"portfolio_category_hover_box_list_font_family",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"portfolio_category_hover_box_list_font_family",
	$portfolio_category_hover_box_list_font_family
);
$portfolio_category_hover_box_list_font_style = new PitchQodeField(
	"selectblanksimple",
	"portfolio_category_hover_box_list_font_style",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"portfolio_category_hover_box_list_font_style",
	$portfolio_category_hover_box_list_font_style
);
$portfolio_category_hover_box_list_font_weight = new PitchQodeField(
	"selectblanksimple",
	"portfolio_category_hover_box_list_font_weight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"portfolio_category_hover_box_list_font_weight",
	$portfolio_category_hover_box_list_font_weight
);
$portfolio_category_hover_box_list_letter_spacing = new PitchQodeField(
	"textsimple",
	"portfolio_category_hover_box_list_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"portfolio_category_hover_box_list_letter_spacing",
	$portfolio_category_hover_box_list_letter_spacing
);

$group12 = new PitchQodeGroup(
	esc_html__( "Category Style for Portfolio Slider and Masonry Lists", 'pitch' ),
	esc_html__( "Define category styles for slider and masonry portfolio lists.", 'pitch' )
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
$portfolio_category_list_color = new PitchQodeField(
	"colorsimple",
	"portfolio_category_list_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"portfolio_category_list_color",
	$portfolio_category_list_color
);
$portfolio_category_list_font_size = new PitchQodeField(
	"textsimple",
	"portfolio_category_list_font_size",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"portfolio_category_list_font_size",
	$portfolio_category_list_font_size
);
$portfolio_category_list_line_height = new PitchQodeField(
	"textsimple",
	"portfolio_category_list_line_height",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"portfolio_category_list_line_height",
	$portfolio_category_list_line_height
);
$portfolio_category_list_text_transform = new PitchQodeField(
	"selectblanksimple",
	"portfolio_category_list_text_transform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	"portfolio_category_list_text_transform",
	$portfolio_category_list_text_transform
);

$row2 = new PitchQodeRow( true );
$group12->addChild(
	"row2",
	$row2
);
$portfolio_category_list_font_family = new PitchQodeField(
	"fontsimple",
	"portfolio_category_list_font_family",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"portfolio_category_list_font_family",
	$portfolio_category_list_font_family
);
$portfolio_category_list_font_style = new PitchQodeField(
	"selectblanksimple",
	"portfolio_category_list_font_style",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"portfolio_category_list_font_style",
	$portfolio_category_list_font_style
);
$portfolio_category_list_font_weight = new PitchQodeField(
	"selectblanksimple",
	"portfolio_category_list_font_weight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"portfolio_category_list_font_weight",
	$portfolio_category_list_font_weight
);
$portfolio_category_list_letter_spacing = new PitchQodeField(
	"textsimple",
	"portfolio_category_list_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"portfolio_category_list_letter_spacing",
	$portfolio_category_list_letter_spacing
);

// Portfolio Filter
$portfolio_filter = new PitchQodeTitle(
	"portfolio_filter",
	esc_html__( "Category Filter", 'pitch' )
);
$panel1->addChild(
	"portfolio_filter",
	$portfolio_filter
);

$portfolio_list_filter_background_color = new PitchQodeField(
	"color",
	"portfolio_list_filter_background_color",
	"",
	esc_html__( "Background Color", 'pitch' ),
	esc_html__( "Choose color for background of filter area", 'pitch' ),
	array(),
	array( "col_width" => 3 )
);
$panel1->addChild(
	"portfolio_list_filter_background_color",
	$portfolio_list_filter_background_color
);

$portfolio_list_filter_height = new PitchQodeField(
	"text",
	"portfolio_list_filter_height",
	"",
	esc_html__( "Height (px)", 'pitch' ),
	esc_html__( "Enter height for filter area", 'pitch' ),
	array(),
	array( "col_width" => 3 )
);
$panel1->addChild(
	"portfolio_list_filter_height",
	$portfolio_list_filter_height
);

$portfolio_filter_margin_bottom = new PitchQodeField(
	"text",
	"portfolio_filter_margin_bottom",
	"",
	esc_html__( "Bottom Margin (px)", 'pitch' ),
	esc_html__( "Enter bottom margin for filter area. Default value is 36", 'pitch' ),
	array(),
	array( "col_width" => 3 )
);
$panel1->addChild(
	"portfolio_filter_margin_bottom",
	$portfolio_filter_margin_bottom
);

$group2 = new PitchQodeGroup(
	esc_html__( "Title", 'pitch' ),
	esc_html__( "Define text styles for filter title", 'pitch' )
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
$portfolio_filter_title_color = new PitchQodeField(
	"colorsimple",
	"portfolio_filter_title_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"portfolio_filter_title_color",
	$portfolio_filter_title_color
);
$portfolio_filter_title_font_size = new PitchQodeField(
	"textsimple",
	"portfolio_filter_title_font_size",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"portfolio_filter_title_font_size",
	$portfolio_filter_title_font_size
);
$portfolio_filter_title_line_height = new PitchQodeField(
	"textsimple",
	"portfolio_filter_title_line_height",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"portfolio_filter_title_line_height",
	$portfolio_filter_title_line_height
);
$portfolio_filter_title_text_transform = new PitchQodeField(
	"selectblanksimple",
	"portfolio_filter_title_text_transform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	"portfolio_filter_title_text_transform",
	$portfolio_filter_title_text_transform
);

$row2 = new PitchQodeRow( true );
$group2->addChild(
	"row2",
	$row2
);
$portfolio_filter_title_font_family = new PitchQodeField(
	"fontsimple",
	"portfolio_filter_title_font_family",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"portfolio_filter_title_font_family",
	$portfolio_filter_title_font_family
);
$portfolio_filter_title_font_style = new PitchQodeField(
	"selectblanksimple",
	"portfolio_filter_title_font_style",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"portfolio_filter_title_font_style",
	$portfolio_filter_title_font_style
);
$portfolio_filter_title_font_weight = new PitchQodeField(
	"selectblanksimple",
	"portfolio_filter_title_font_weight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"portfolio_filter_title_font_weight",
	$portfolio_filter_title_font_weight
);
$portfolio_filter_title_letter_spacing = new PitchQodeField(
	"textsimple",
	"portfolio_filter_title_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"portfolio_filter_title_letter_spacing",
	$portfolio_filter_title_letter_spacing
);

$group3 = new PitchQodeGroup(
	esc_html__( "Categories", 'pitch' ),
	esc_html__( "Define text styles for filter categories", 'pitch' )
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
$portfolio_filter_color = new PitchQodeField(
	"colorsimple",
	"portfolio_filter_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"portfolio_filter_color",
	$portfolio_filter_color
);
$portfolio_filter_hovercolor = new PitchQodeField(
	"colorsimple",
	"portfolio_filter_hovercolor",
	"",
	esc_html__( "Hover/Active Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"portfolio_filter_hovercolor",
	$portfolio_filter_hovercolor
);
$portfolio_filter_font_size = new PitchQodeField(
	"textsimple",
	"portfolio_filter_font_size",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"portfolio_filter_font_size",
	$portfolio_filter_font_size
);
$portfolio_filter_line_height = new PitchQodeField(
	"textsimple",
	"portfolio_filter_line_height",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"portfolio_filter_line_height",
	$portfolio_filter_line_height
);

$row2 = new PitchQodeRow( true );
$group3->addChild(
	"row2",
	$row2
);
$portfolio_filter_font_family = new PitchQodeField(
	"fontsimple",
	"portfolio_filter_font_family",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"portfolio_filter_font_family",
	$portfolio_filter_font_family
);
$portfolio_filter_font_style = new PitchQodeField(
	"selectblanksimple",
	"portfolio_filter_font_style",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"portfolio_filter_font_style",
	$portfolio_filter_font_style
);
$portfolio_filter_font_weight = new PitchQodeField(
	"selectblanksimple",
	"portfolio_filter_font_weight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"portfolio_filter_font_weight",
	$portfolio_filter_font_weight
);
$portfolio_filter_text_transform = new PitchQodeField(
	"selectblanksimple",
	"portfolio_filter_text_transform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row2->addChild(
	"portfolio_filter_text_transform",
	$portfolio_filter_text_transform
);

$row3 = new PitchQodeRow( true );
$group3->addChild(
	"row3",
	$row3
);
$portfolio_filter_letter_spacing = new PitchQodeField(
	"textsimple",
	"portfolio_filter_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row3->addChild(
	"portfolio_filter_letter_spacing",
	$portfolio_filter_letter_spacing
);

$portfolio_filter_disable_separator = new PitchQodeField(
	"yesno",
	"portfolio_filter_disable_separator",
	"yes",
	esc_html__( "Disable Separator Between Categories", 'pitch' ),
	esc_html__( "Disabling this option will remove separator between filter categories.", 'pitch' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "#qodef_portfolio_filter_separator_container",
		"dependence_show_on_yes" => "",
	)
);
$panel1->addChild(
	"portfolio_filter_disable_separator",
	$portfolio_filter_disable_separator
);

$portfolio_filter_separator_container = new PitchQodeContainer(
	"portfolio_filter_separator_container",
	"portfolio_filter_disable_separator",
	"yes"
);
$panel1->addChild(
	"portfolio_filter_separator_container",
	$portfolio_filter_separator_container
);

$portfolio_filter_separator_color = new PitchQodeField(
	"color",
	"portfolio_filter_separator_color",
	"",
	esc_html__( "Separator Between Categories Color", 'pitch' ),
	esc_html__( "Choose a color for separator between categories in filter", 'pitch' )
);
$portfolio_filter_separator_container->addChild(
	"portfolio_filter_separator_color",
	$portfolio_filter_separator_color
);

//ICONS STYLE
$icons_style = new PitchQodeTitle(
	"icons_style",
	esc_html__( "Icons", 'pitch' )
);
$panel1->addChild(
	"icons_style",
	$icons_style
);

$portfolio_list_icons_pack = new PitchQodeField(
	"select",
	"portfolio_list_icons_pack",
	"font-awesome",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( 'Choose font family for hover icons on portfolio', 'pitch' ),
	array(
		"font-awesome" => esc_html__( "Font Awesome", 'pitch' ),
		"font-elegant" => esc_html__( "Font Elegant", 'pitch' )
	)
);
$panel1->addChild(
	"portfolio_list_icons_pack",
	$portfolio_list_icons_pack
);

$group25 = new PitchQodeGroup(
	esc_html__( "Size", 'pitch' ),
	esc_html__( "Enter size for icons in portfolio list ", 'pitch' )
);
$panel1->addChild(
	"group25",
	$group25
);

$row1 = new PitchQodeRow( true );
$group25->addChild(
	"row1",
	$row1
);

$portfolio_list_icons_size = new PitchQodeField(
	"textsimple",
	"portfolio_list_icons_size",
	"",
	esc_html__( "Icon Size (px)", 'pitch' ),
	""
);
$row1->addChild(
	"portfolio_list_icons_size",
	$portfolio_list_icons_size
);

$portfolio_list_icons_shape_size = new PitchQodeField(
	"textsimple",
	"portfolio_list_icons_shape_size",
	"",
	esc_html__( "Shape Size (px)", 'pitch' ),
	""
);
$row1->addChild(
	"portfolio_list_icons_shape_size",
	$portfolio_list_icons_shape_size
);

$group4 = new PitchQodeGroup(
	esc_html__( "Color", 'pitch' ),
	esc_html__( "Choose color of the icons on project hover", 'pitch' )
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
$portfolio_list_icons_color = new PitchQodeField(
	"colorsimple",
	"portfolio_list_icons_color",
	"",
	esc_html__( "Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"portfolio_list_icons_color",
	$portfolio_list_icons_color
);
$portfolio_list_icons_hover_color = new PitchQodeField(
	"colorsimple",
	"portfolio_list_icons_hover_color",
	"",
	esc_html__( "Hover Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"portfolio_list_icons_hover_color",
	$portfolio_list_icons_hover_color
);

$group5 = new PitchQodeGroup(
	esc_html__( "Background Color", 'pitch' ),
	esc_html__( "Define icons background color styles on project hover", 'pitch' )
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
$portfolio_list_icons_background_color = new PitchQodeField(
	"colorsimple",
	"portfolio_list_icons_background_color",
	"",
	esc_html__( "Background Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"portfolio_list_icons_background_color",
	$portfolio_list_icons_background_color
);
$portfolio_list_icons_background_hover_color = new PitchQodeField(
	"colorsimple",
	"portfolio_list_icons_background_hover_color",
	"",
	esc_html__( "Background Hover Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"portfolio_list_icons_background_hover_color",
	$portfolio_list_icons_background_hover_color
);

$group6 = new PitchQodeGroup(
	esc_html__( "Border", 'pitch' ),
	esc_html__( "Define icons border styles on project hover", 'pitch' )
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

$portfolio_list_icons_border_color = new PitchQodeField(
	"colorsimple",
	"portfolio_list_icons_border_color",
	"",
	esc_html__( "Border Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"portfolio_list_icons_border_color",
	$portfolio_list_icons_border_color
);
$portfolio_list_icons_border_hover_color = new PitchQodeField(
	"colorsimple",
	"portfolio_list_icons_border_hover_color",
	"",
	esc_html__( "Border Hover Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"portfolio_list_icons_border_hover_color",
	$portfolio_list_icons_border_hover_color
);
$portfolio_list_icons_border_width = new PitchQodeField(
	"textsimple",
	"portfolio_list_icons_border_width",
	"",
	esc_html__( "Border Width (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"portfolio_list_icons_border_width",
	$portfolio_list_icons_border_width
);
$portfolio_list_icons_border_radius = new PitchQodeField(
	"textsimple",
	"portfolio_list_icons_border_radius",
	"",
	esc_html__( "Border Radius (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"portfolio_list_icons_border_radius",
	$portfolio_list_icons_border_radius
);

$portfolio_pinterest_style = new PitchQodeTitle(
	"portfolio_pinterest_style",
	esc_html__( "Pinterest", 'pitch' )
);
$panel1->addChild(
	"portfolio_pinterest_style",
	$portfolio_pinterest_style
);

$group24 = new PitchQodeGroup(
	esc_html__( "Pinterest Padding", 'pitch' ),
	esc_html__( "Define pinterest padding", 'pitch' )
);
$panel1->addChild(
	"group24",
	$group24
);

$row1 = new PitchQodeRow( true );
$group24->addChild(
	"row1",
	$row1
);

$pinterest_padding_left = new PitchQodeField(
	"textsimple",
	"pinterest_padding_left",
	"",
	esc_html__( "Padding Left (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"pinterest_padding_left",
	$pinterest_padding_left
);

$pinterest_padding_right = new PitchQodeField(
	"textsimple",
	"pinterest_padding_right",
	"",
	esc_html__( "Padding Right (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"pinterest_padding_right",
	$pinterest_padding_right
);

$pinterest_padding_top = new PitchQodeField(
	"textsimple",
	"pinterest_padding_top",
	"",
	esc_html__( "Padding Top (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"pinterest_padding_top",
	$pinterest_padding_top
);

$pinterest_padding_bottom = new PitchQodeField(
	"textsimple",
	"pinterest_padding_bottom",
	"",
	esc_html__( "Padding Bottom (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"pinterest_padding_bottom",
	$pinterest_padding_bottom
);

$portfolio_masonry_style = new PitchQodeTitle(
	"portfolio_masonry_style",
	esc_html__( "Masonry", 'pitch' )
);
$panel1->addChild(
	"portfolio_masonry_style",
	$portfolio_masonry_style
);

$portfolio_masonry_with_padding_width = new PitchQodeField(
	"text",
	"portfolio_masonry_with_padding_width",
	"",
	esc_html__( "Space Width (px)", 'pitch' ),
	esc_html__( "Enter space width for Masonry if space is enabled. Default value is 10", 'pitch' ),
	array(),
	array( "col_width" => 3 )
);
$panel1->addChild(
	"portfolio_masonry_with_padding_width",
	$portfolio_masonry_with_padding_width
);

$thin_plus_only_style = new PitchQodeTitle(
	"thin_plus_only_style",
	esc_html__( "Thin Plus Only", 'pitch' )
);
$panel1->addChild(
	"thin_plus_only_style",
	$thin_plus_only_style
);

$group13 = new PitchQodeGroup(
	esc_html__( "Cursor", 'pitch' ),
	esc_html__( "Define styles for Cursor on Thin Plus Only hover type", 'pitch' )
);
$panel1->addChild(
	"group13",
	$group13
);

$row1 = new PitchQodeRow();
$group13->addChild(
	"row1",
	$row1
);
$thin_plus_only_style_color = new PitchQodeField(
	"colorsimple",
	"thin_plus_only_style_color",
	"",
	esc_html__( "Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"thin_plus_only_style_color",
	$thin_plus_only_style_color
);
$thin_plus_only_style_size = new PitchQodeField(
	"textsimple",
	"thin_plus_only_style_size",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"thin_plus_only_style_size",
	$thin_plus_only_style_size
);
$thin_plus_only_style_weight = new PitchQodeField(
	"selectblanksimple",
	"thin_plus_only_style_weight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row1->addChild(
	"thin_plus_only_style_weight",
	$thin_plus_only_style_weight
);

$animated_border_hover_style = new PitchQodeTitle(
	"animated_border_hover_style",
	esc_html__( "Animated Border", 'pitch' )
);
$panel1->addChild(
	"animated_border_hover_style",
	$animated_border_hover_style
);

$group23 = new PitchQodeGroup(
	esc_html__( "Border Hover", 'pitch' ),
	esc_html__( "Define styles for border on Animated Border hover type", 'pitch' )
);
$panel1->addChild(
	"group23",
	$group23
);

$row1 = new PitchQodeRow();
$group23->addChild(
	"row1",
	$row1
);
$animated_border_hover_color = new PitchQodeField(
	"colorsimple",
	"animated_border_hover_color",
	"",
	esc_html__( "Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"animated_border_hover_color",
	$animated_border_hover_color
);
$animated_border_hover_width = new PitchQodeField(
	"textsimple",
	"animated_border_hover_width",
	"",
	esc_html__( "Width (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"animated_border_hover_width",
	$animated_border_hover_width
);

$animated_border_disable_animation = new PitchQodeField(
	"yesno",
	"animated_border_disable_animation",
	"no",
	esc_html__( "Disable Animation", 'pitch' ),
	esc_html__( "Enabling this option will turn off border animation on hover", 'pitch' )
);
$panel1->addChild(
	"animated_border_disable_animation",
	$animated_border_disable_animation
);

//Portfolio Single Project

$panel2 = new PitchQodePanel(
	esc_html__( "Portfolio Single", 'pitch' ),
	"porfolio_single_project"
);
$portfolioPage->addChild(
	"panel2",
	$panel2
);

$portfolio_style = new PitchQodeField(
	"select",
	"portfolio_style",
	"floating-right",
	esc_html__( "Portfolio Type", 'pitch' ),
	esc_html__( 'Choose a default type for Single Project pages', 'pitch' ),
	array(
		"floating-right" => esc_html__( "Portfolio text floating right", 'pitch' ),
		"floating-left" => esc_html__( "Portfolio text floating left", 'pitch' ),
		"fixed-right" => esc_html__( "Portfolio text fixed right", 'pitch' ),
		"fixed-left" => esc_html__( "Portfolio text fixed left", 'pitch' ),
		"big-slider" => esc_html__( "Portfolio big slider", 'pitch' ),
		"custom" => esc_html__( "Portfolio custom", 'pitch' ),
		"central" => esc_html__( "Portfolio central", 'pitch' ),
		"gallery" => esc_html__( "Portfolio gallery", 'pitch' ),
		"gallery-right" => esc_html__( "Portfolio gallery right", 'pitch' ),
		"masonry-gallery-top" => esc_html__( "Portfolio masonry gallery top", 'pitch' ),
		"masonry-gallery-bottom" => esc_html__( "Portfolio masonry gallery bottom", 'pitch' ),
		"masonry-gallery-right" => esc_html__( "Portfolio masonry gallery right", 'pitch' )
	)
);
$panel2->addChild(
	"portfolio_style",
	$portfolio_style
);

$portfolio_enable_animation = new PitchQodeField(
	"selectblank",
	"portfolio_enable_animation",
	"",
	esc_html__( "Enable Loading Animation for Images", 'pitch' ),
	"",
	array(
		"yes" => esc_html__( "Yes", 'pitch' ),
		"no" => esc_html__( "No", 'pitch' )
	)
);
$panel2->addChild(
	"portfolio_enable_animation",
	$portfolio_enable_animation
);

$group3 = new PitchQodeGroup(
	esc_html__( "Portfolio Overlay Color", 'pitch' ),
	esc_html__( "Define color and opacity for overlay color", 'pitch' )
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

$portfolio_gallery_overlay_color = new PitchQodeField(
	"colorsimple",
	"portfolio_gallery_overlay_color",
	"",
	esc_html__( "Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"portfolio_gallery_overlay_color",
	$portfolio_gallery_overlay_color
);

$portfolio_gallery_overlay_transparency = new PitchQodeField(
	"textsimple",
	"portfolio_gallery_overlay_transparency",
	"",
	esc_html__( "Transparency (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"portfolio_gallery_overlay_transparency",
	$portfolio_gallery_overlay_transparency
);

$portfolio_gallery_image_hover_style = new PitchQodeField(
	"select",
	"portfolio_gallery_image_hover_style",
	"magnifier",
	esc_html__( "Portfolio Image Hover", 'pitch' ),
	esc_html__( 'Choose a default hover type for Single Project pages', 'pitch' ),
	array(
		"disable" => esc_html__( "None", 'pitch' ),
		"magnifier" => esc_html__( "Magnifier", 'pitch' ),
		"icon" => esc_html__( "Icon", 'pitch' ),
		"text" => esc_html__( "Image Title", 'pitch' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			"disable"   => "#qodef_portfolio_gallery_image_hover_separator_container,#qodef_portfolio_gallery_image_hover_icon_container",
			"magnifier" => "#qodef_portfolio_gallery_image_hover_separator_container,#qodef_portfolio_gallery_image_hover_icon_container",
			"icon"      => "#qodef_portfolio_gallery_image_hover_separator_container",
			"text"      => "#qodef_portfolio_gallery_image_hover_icon_container"
		),
		"show"       => array(
			"disable"   => "",
			"magnifier" => "",
			"icon"      => "#qodef_portfolio_gallery_image_hover_icon_container",
			"text"      => "#qodef_portfolio_gallery_image_hover_separator_container"
		)
	)
);
$panel2->addChild(
	"portfolio_gallery_image_hover_style",
	$portfolio_gallery_image_hover_style
);

$portfolio_gallery_image_hover_separator_container = new PitchQodeContainer(
	"portfolio_gallery_image_hover_separator_container",
	"portfolio_gallery_image_hover_style",
	"magnifier",
	array( "disable", "magnifier", "icon" )
);
$panel2->addChild(
	"portfolio_gallery_image_hover_separator_container",
	$portfolio_gallery_image_hover_separator_container
);

$portfolio_gallery_image_hover_separator = new PitchQodeField(
	"select",
	"portfolio_gallery_image_hover_separator",
	"",
	esc_html__( "Separator below image title", 'pitch' ),
	esc_html__( "This option will place separator below text", 'pitch' ),
	array(
		"yes" => esc_html__( "Yes", 'pitch' ),
		"no" => esc_html__( "No", 'pitch' )
	),
	array( "col_width" => 3 )
);
$portfolio_gallery_image_hover_separator_container->addChild(
	"portfolio_gallery_image_hover_separator",
	$portfolio_gallery_image_hover_separator
);

$portfolio_gallery_overlay_text_color = new PitchQodeField(
	"color",
	"portfolio_gallery_overlay_text_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "Choose a color for overlay text in Single Project pages", 'pitch' )
);
$portfolio_gallery_image_hover_separator_container->addChild(
	"portfolio_gallery_overlay_text_color",
	$portfolio_gallery_overlay_text_color
);

$portfolio_gallery_image_hover_icon_container = new PitchQodeContainer(
	"portfolio_gallery_image_hover_icon_container",
	"portfolio_gallery_image_hover_style",
	"magnifier",
	array( "disable", "magnifier", "text" )
);
$panel2->addChild(
	"portfolio_gallery_image_hover_icon_container",
	$portfolio_gallery_image_hover_icon_container
);

$group4 = new PitchQodeGroup(
	esc_html__( "Portfolio Image Hover Icon", 'pitch' ),
	esc_html__( "Define style for Portfolio Image Hover Icon", 'pitch' )
);
$portfolio_gallery_image_hover_icon_container->addChild(
	"group4",
	$group4
);

$row1 = new PitchQodeRow();
$group4->addChild(
	"row1",
	$row1
);

$portfolio_gallery_icon_pack = new PitchQodeField(
	"selectsimple",
	"portfolio_gallery_icon_pack",
	"font-awesome",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( 'This is some description', 'pitch' ),
	array(
		"font-awesome" => esc_html__( "Font Awesome", 'pitch' ),
		"font-elegant" => esc_html__( "Font Elegant", 'pitch' )
	)
);
$group4->addChild(
	"portfolio_gallery_icon_pack",
	$portfolio_gallery_icon_pack
);

$portfolio_gallery_icon_size = new PitchQodeField(
	"textsimple",
	"portfolio_gallery_icon_size",
	"",
	esc_html__( "Size", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$group4->addChild(
	"portfolio_gallery_icon_size",
	$portfolio_gallery_icon_size
);

$portfolio_gallery_icon_color = new PitchQodeField(
	"colorsimple",
	"portfolio_gallery_icon_color",
	"",
	esc_html__( "Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$group4->addChild(
	"portfolio_gallery_icon_color",
	$portfolio_gallery_icon_color
);

$group1 = new PitchQodeGroup(
	esc_html__( "Title Style", 'pitch' ),
	esc_html__( "Define title styles on project.", 'pitch' )
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

$portfolio_title_tag = new PitchQodeField(
	"selectsimple",
	"portfolio_title_tag",
	"h3",
	esc_html__( "Tag element", 'pitch' ),
	esc_html__( 'This is some description', 'pitch' ),
	array(
		"h2" => esc_html__( "h2", 'pitch' ),
		"h3" => esc_html__( "h3", 'pitch' ),
		"h4" => esc_html__( "h4", 'pitch' ),
		"h5" => esc_html__( "h5", 'pitch' )
	)
);
$row1->addChild(
	"portfolio_title_tag",
	$portfolio_title_tag
);

$portfolio_title_margin_bottom = new PitchQodeField(
	"textsimple",
	"portfolio_title_margin_bottom",
	"",
	esc_html__( "Margin Bottom (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"portfolio_title_margin_bottom",
	$portfolio_title_margin_bottom
);

$portfolio_title_color = new PitchQodeField(
	"colorsimple",
	"portfolio_title_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"portfolio_title_color",
	$portfolio_title_color
);

$portfolio_title_hidden_in_info = new PitchQodeField(
	"yesno",
	"portfolio_title_hidden_in_info",
	"yes",
	esc_html__( "Hide Title in Info", 'pitch' ),
	esc_html__( "Enabling this option will hide title in portfolio info section.", 'pitch' )
);
$panel2->addChild(
	"portfolio_title_hidden_in_info",
	$portfolio_title_hidden_in_info
);

$group2 = new PitchQodeGroup(
	esc_html__( "Additional Portfolio Titles", 'pitch' ),
	esc_html__( "Define additional portfolio titles styles on project.", 'pitch' )
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

$portfolio_info_tag = new PitchQodeField(
	"selectsimple",
	"portfolio_info_tag",
	"h6",
	esc_html__( "Tag element", 'pitch' ),
	esc_html__( 'This is some description', 'pitch' ),
	array(
		"h4" => esc_html__( "h4", 'pitch' ),
		"h5" => esc_html__( "h5", 'pitch' ),
		"h6" => esc_html__( "h6", 'pitch' )
	)
);
$row1->addChild(
	"portfolio_info_tag",
	$portfolio_info_tag
);

$portfolio_info_margin_bottom = new PitchQodeField(
	"textsimple",
	"portfolio_info_margin_bottom",
	"",
	esc_html__( "Margin Bottom (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"portfolio_info_margin_bottom",
	$portfolio_info_margin_bottom
);

$portfolio_info_color = new PitchQodeField(
	"colorsimple",
	"portfolio_info_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"portfolio_info_color",
	$portfolio_info_color
);

$lightbox_single_project = new PitchQodeField(
	"yesno",
	"lightbox_single_project",
	"yes",
	esc_html__( "Lightbox for Images", 'pitch' ),
	esc_html__( "Enabling this option will turn on lightbox functionality for projects with images.", 'pitch' )
);
$panel2->addChild(
	"lightbox_single_project",
	$lightbox_single_project
);

$lightbox_video_single_project = new PitchQodeField(
	"yesno",
	"lightbox_video_single_project",
	"no",
	esc_html__( "Lightbox for Videos", 'pitch' ),
	esc_html__( "Enabling this option will turn on lightbox functionality for YouTube/Vimeo projects.", 'pitch' )
);
$panel2->addChild(
	"lightbox_video_single_project",
	$lightbox_video_single_project
);

$portfolio_hide_categories = new PitchQodeField(
	"yesno",
	"portfolio_hide_categories",
	"no",
	esc_html__( "Hide Categories", 'pitch' ),
	esc_html__( "Enabling this option will disable category meta description on Single Projects.", 'pitch' )
);
$panel2->addChild(
	"portfolio_hide_categories",
	$portfolio_hide_categories
);

$portfolio_hide_date = new PitchQodeField(
	"yesno",
	"portfolio_hide_date",
	"no",
	esc_html__( "Hide Date", 'pitch' ),
	esc_html__( "Enabling this option will disable date meta on Single Projects.", 'pitch' )
);
$panel2->addChild(
	"portfolio_hide_date",
	$portfolio_hide_date
);

$portfolio_hide_comments = new PitchQodeField(
	"yesno",
	"portfolio_hide_comments",
	"yes",
	esc_html__( "Hide Comments", 'pitch' ),
	esc_html__( "Enabling this option will turn off comments functionality.", 'pitch' )
);
$panel2->addChild(
	"portfolio_hide_comments",
	$portfolio_hide_comments
);

$portfolio_text_follow = new PitchQodeField(
	"portfoliofollow",
	"portfolio_text_follow",
	"portfolio_single_follow",
	esc_html__( "Sticky Side Text ", 'pitch' ),
	esc_html__( "Enabling this option will make side text sticky on Single Project pages", 'pitch' )
);
$panel2->addChild(
	"portfolio_text_follow",
	$portfolio_text_follow
);

$portfolio_related_projects = new PitchQodeField(
	"yesno",
	"portfolio_related_projects",
	"yes",
	esc_html__( "Portfolio Related Projects ", 'pitch' ),
	esc_html__( "Enabling this option will display related projects on Single Project pages", 'pitch' )
);
$panel2->addChild(
	"portfolio_related_projects",
	$portfolio_related_projects
);

$portfolio_hide_pagination = new PitchQodeField(
	"yesno",
	"portfolio_hide_pagination",
	"no",
	esc_html__( "Hide Pagination", 'pitch' ),
	esc_html__( "Enabling this option will turn off portfolio pagination functionality.", 'pitch' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "#qodef_portfolio_hide_pagination_container",
		"dependence_show_on_yes" => ""
	)
);
$panel2->addChild(
	"portfolio_hide_pagination",
	$portfolio_hide_pagination
);

$portfolio_hide_pagination_container = new PitchQodeContainer(
	"portfolio_hide_pagination_container",
	"portfolio_hide_pagination",
	"yes"
);
$panel2->addChild(
	"portfolio_hide_pagination_container",
	$portfolio_hide_pagination_container
);

$portfolio_navigation_through_same_category = new PitchQodeField(
	"yesno",
	"portfolio_navigation_through_same_category",
	"no",
	esc_html__( "Enable Pagination Through Same Category", 'pitch' ),
	esc_html__( "Enabling this option will make portfolio pagination sort through current category.", 'pitch' )
);
$portfolio_hide_pagination_container->addChild(
	"portfolio_navigation_through_same_category",
	$portfolio_navigation_through_same_category
);

$portfolio_box = new PitchQodeField(
	"yesno",
	"portfolio_box",
	"yes",
	esc_html__( "Enable Box Holder", 'pitch' ),
	esc_html__( "Enabling this option will place box holder on project. This option works only if Portfolio style is Big Images, Big Slider or Gallery", 'pitch' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "#qodef_portfolio_without_box_container",
		"dependence_show_on_yes" => "#qodef_portfolio_box_container"
	)
);
$panel2->addChild(
	"portfolio_box",
	$portfolio_box
);

$portfolio_box_container = new PitchQodeContainer(
	"portfolio_box_container",
	"portfolio_box",
	"no"
);
$panel2->addChild(
	"portfolio_box_container",
	$portfolio_box_container
);

$portfolio_box_background_color = new PitchQodeField(
	"color",
	"portfolio_box_background_color",
	"",
	esc_html__( "Background Color", 'pitch' ),
	esc_html__( "Default color is #ffffff", 'pitch' )
);
$portfolio_box_container->addChild(
	"portfolio_box_background_color",
	$portfolio_box_background_color
);

$portfolio_box_lr_padding = new PitchQodeField(
	"text",
	"portfolio_box_lr_padding",
	"",
	esc_html__( "Padding(px)", 'pitch' ),
	esc_html__( "Format: 10px 5px 10px 8px (Default value is 46px 26px 45px 26px)", 'pitch' ),
	array(),
	array( "col_width" => 3 )
);
$portfolio_box_container->addChild(
	"portfolio_box_lr_padding",
	$portfolio_box_lr_padding
);

$portfolio_without_box_container = new PitchQodeContainer(
	"portfolio_without_box_container",
	"portfolio_box",
	"yes"
);
$panel2->addChild(
	"portfolio_without_box_container",
	$portfolio_without_box_container
);

$portfolio_box_top_padding = new PitchQodeField(
	"text",
	"portfolio_box_top_padding",
	"",
	esc_html__( "Top Padding(px)", 'pitch' ),
	esc_html__( "Default value is 46", 'pitch' ),
	array(),
	array( "col_width" => 3 )
);
$portfolio_without_box_container->addChild(
	"portfolio_box_top_padding",
	$portfolio_box_top_padding
);

$portfolio_columns_number = new PitchQodeField(
	"select",
	"portfolio_columns_number",
	"4",
	esc_html__( "Number of Columns", 'pitch' ),
	esc_html__( 'Enter the number of columns for Portfolio Gallery type', 'pitch' ),
	array(
		"2" => esc_html__( "2 columns", 'pitch' ),
		"3" => esc_html__( "3 columns", 'pitch' ),
		"4" => esc_html__( "4 columns", 'pitch' )
	)
);
$panel2->addChild(
	"portfolio_columns_number",
	$portfolio_columns_number
);

$portfolio_single_slug = new PitchQodeField(
	"text",
	"portfolio_single_slug",
	"",
	esc_html__( "Portfolio Single Slug", 'pitch' ),
	esc_html__( 'Enter if you wish to use a different Single Project slug (Note: After entering slug, navigate to Settings -> Permalinks and click "Save" in order for changes to take effect) ', 'pitch' ),
	array(),
	array( "col_width" => 3 )
);
$panel2->addChild(
	"portfolio_single_slug",
	$portfolio_single_slug
);

  
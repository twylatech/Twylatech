<?php

$error404Page = new QodePitchAdminPage(
	"13",
	"404 Error Page",
	"fa fa-exclamation-triangle"
);
$pitch_qode_framework->qodeOptions->addAdminPage(
	"error404Page",
	$error404Page
);

//404 Page Options

$panel1 = new PitchQodePanel(
	"404 Page Options",
	"page_error_options_panel"
);
$error404Page->addChild(
	"panel1",
	$panel1
);

$title_404 = new PitchQodeField(
	"text",
	"404_title",
	"",
	esc_html__( "Title", 'pitch' ),
	esc_html__( "Enter title for 404 page", 'pitch' )
);
$panel1->addChild(
	"404_title",
	$title_404
);

$group1 = new PitchQodeGroup(
	esc_html__( "Title Style", 'pitch' ),
	esc_html__( "Define title styles.", 'pitch' )
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
$title_404_color = new PitchQodeField(
	"colorsimple",
	"404_title_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"404_title_color",
	$title_404_color
);

$title_404_font_size = new PitchQodeField(
	"textsimple",
	"404_title_font_size",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"404_title_font_size",
	$title_404_font_size
);

$title_404_line_height = new PitchQodeField(
	"textsimple",
	"404_title_line_height",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"404_title_line_height",
	$title_404_line_height
);

$title_404_text_transform = new PitchQodeField(
	"selectblanksimple",
	"404_title_text_transform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	"404_title_text_transform",
	$title_404_text_transform
);

$row2 = new PitchQodeRow( true );
$group1->addChild(
	"row2",
	$row2
);
$title_404_font_family = new PitchQodeField(
	"fontsimple",
	"404_title_font_family",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"404_title_font_family",
	$title_404_font_family
);

$title_404_font_style = new PitchQodeField(
	"selectblanksimple",
	"404_title_font_style",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"404_title_font_style",
	$title_404_font_style
);

$title_404_font_weight = new PitchQodeField(
	"selectblanksimple",
	"404_title_font_weight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"404_title_font_weight",
	$title_404_font_weight
);

$title_404_letter_spacing = new PitchQodeField(
	"textsimple",
	"404_title_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"404_title_letter_spacing",
	$title_404_letter_spacing
);

$text_404 = new PitchQodeField(
	"text",
	"404_text",
	"",
	esc_html__( "Text", 'pitch' ),
	esc_html__( "Enter text for 404 page", 'pitch' )
);
$panel1->addChild(
	"404_text",
	$text_404
);

$group2 = new PitchQodeGroup(
	esc_html__( "Text Style", 'pitch' ),
	esc_html__( "Define text style", 'pitch' )
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
$text_404_color = new PitchQodeField(
	"colorsimple",
	"404_text_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"404_text_color",
	$text_404_color
);

$text_404_font_size = new PitchQodeField(
	"textsimple",
	"404_text_font_size",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"404_text_font_size",
	$text_404_font_size
);

$text_404_line_height = new PitchQodeField(
	"textsimple",
	"404_text_line_height",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"404_title_line_height",
	$text_404_line_height
);

$text_404_text_transform = new PitchQodeField(
	"selectblanksimple",
	"404_text_text_transform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	"404_text_text_transform",
	$text_404_text_transform
);

$row2 = new PitchQodeRow( true );
$group2->addChild(
	"row2",
	$row2
);
$text_404_font_family = new PitchQodeField(
	"fontsimple",
	"404_text_font_family",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"404_text_font_family",
	$text_404_font_family
);

$text_404_font_style = new PitchQodeField(
	"selectblanksimple",
	"404_text_font_style",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"404_text_font_style",
	$text_404_font_style
);

$text_404_font_weight = new PitchQodeField(
	"selectblanksimple",
	"404_text_font_weight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"404_text_font_weight",
	$text_404_font_weight
);

$text_404_letter_spacing = new PitchQodeField(
	"textsimple",
	"404_text_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"404_text_letter_spacing",
	$text_404_letter_spacing
);

$backlabel_404 = new PitchQodeField(
	"text",
	"404_backlabel",
	"",
	esc_html__( "Back to Home Button Label", 'pitch' ),
	esc_html__( 'Enter label for "Back to Home" button ', 'pitch' )
);
$panel1->addChild(
	"404_backlabel",
	$backlabel_404
);


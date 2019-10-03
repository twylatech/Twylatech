<?php

$fontsPage = new QodePitchAdminPage(
	"5",
	esc_html__( "Fonts", 'pitch' ),
	"fa fa-font"
);
$pitch_qode_framework->qodeOptions->addAdminPage(
	"fonts",
	$fontsPage
);

// Headings

$panel1 = new PitchQodePanel(
	esc_html__( "Headings", 'pitch' ),
	"headings_panel"
);
$fontsPage->addChild(
	"panel1",
	$panel1
);

$group1 = new PitchQodeGroup(
	esc_html__( "H1 Style", 'pitch' ),
	esc_html__( "Define styles for H1 heading", 'pitch' )
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
$h1_color = new PitchQodeField(
	"colorsimple",
	"h1_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"h1_color",
	$h1_color
);
$h1_fontsize = new PitchQodeField(
	"textsimple",
	"h1_fontsize",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"h1_fontsize",
	$h1_fontsize
);
$h1_lineheight = new PitchQodeField(
	"textsimple",
	"h1_lineheight",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"h1_lineheight",
	$h1_lineheight
);
$h1_texttransform = new PitchQodeField(
	"selectblanksimple",
	"h1_texttransform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	"h1_texttransform",
	$h1_texttransform
);
$row2 = new PitchQodeRow( true );
$group1->addChild(
	"row2",
	$row2
);
$h1_google_fonts = new PitchQodeField(
	"fontsimple",
	"h1_google_fonts",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"h1_google_fonts",
	$h1_google_fonts
);
$h1_fontstyle = new PitchQodeField(
	"selectblanksimple",
	"h1_fontstyle",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"h1_fontstyle",
	$h1_fontstyle
);
$h1_fontweight = new PitchQodeField(
	"selectblanksimple",
	"h1_fontweight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"h1_fontweight",
	$h1_fontweight
);
$h1_letterspacing = new PitchQodeField(
	"textsimple",
	"h1_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"h1_letterspacing",
	$h1_letterspacing
);

$group2 = new PitchQodeGroup(
	esc_html__( "H2 Style", 'pitch' ),
	esc_html__( "Define styles for H2 heading", 'pitch' )
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
$h2_color = new PitchQodeField(
	"colorsimple",
	"h2_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"h2_color",
	$h2_color
);
$h2_fontsize = new PitchQodeField(
	"textsimple",
	"h2_fontsize",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"h2_fontsize",
	$h2_fontsize
);
$h2_lineheight = new PitchQodeField(
	"textsimple",
	"h2_lineheight",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"h2_lineheight",
	$h2_lineheight
);
$h2_texttransform = new PitchQodeField(
	"selectblanksimple",
	"h2_texttransform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	"h2_texttransform",
	$h2_texttransform
);
$row2 = new PitchQodeRow( true );
$group2->addChild(
	"row2",
	$row2
);
$h2_google_fonts = new PitchQodeField(
	"fontsimple",
	"h2_google_fonts",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"h2_google_fonts",
	$h2_google_fonts
);
$h2_fontstyle = new PitchQodeField(
	"selectblanksimple",
	"h2_fontstyle",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"h2_fontstyle",
	$h2_fontstyle
);
$h2_fontweight = new PitchQodeField(
	"selectblanksimple",
	"h2_fontweight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"h2_fontweight",
	$h2_fontweight
);
$h2_letterspacing = new PitchQodeField(
	"textsimple",
	"h2_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"h2_letterspacing",
	$h2_letterspacing
);

$group3 = new PitchQodeGroup(
	esc_html__( "H3 Style", 'pitch' ),
	esc_html__( "Define styles for H3 heading", 'pitch' )
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
$h3_color = new PitchQodeField(
	"colorsimple",
	"h3_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"h3_color",
	$h3_color
);
$h3_fontsize = new PitchQodeField(
	"textsimple",
	"h3_fontsize",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"h3_fontsize",
	$h3_fontsize
);
$h3_lineheight = new PitchQodeField(
	"textsimple",
	"h3_lineheight",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"h3_lineheight",
	$h3_lineheight
);
$h3_texttransform = new PitchQodeField(
	"selectblanksimple",
	"h3_texttransform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	"h3_texttransform",
	$h3_texttransform
);
$row2 = new PitchQodeRow( true );
$group3->addChild(
	"row2",
	$row2
);
$h3_google_fonts = new PitchQodeField(
	"fontsimple",
	"h3_google_fonts",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"h3_google_fonts",
	$h3_google_fonts
);
$h3_fontstyle = new PitchQodeField(
	"selectblanksimple",
	"h3_fontstyle",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"h3_fontstyle",
	$h3_fontstyle
);
$h3_fontweight = new PitchQodeField(
	"selectblanksimple",
	"h3_fontweight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"h3_fontweight",
	$h3_fontweight
);
$h3_letterspacing = new PitchQodeField(
	"textsimple",
	"h3_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"h3_letterspacing",
	$h3_letterspacing
);

$group4 = new PitchQodeGroup(
	esc_html__( "H4 Style", 'pitch' ),
	esc_html__( "Define styles for H4 heading", 'pitch' )
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
$h4_color = new PitchQodeField(
	"colorsimple",
	"h4_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"h4_color",
	$h4_color
);
$h4_fontsize = new PitchQodeField(
	"textsimple",
	"h4_fontsize",
	"",
	esc_html__( "Font size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"h4_fontsize",
	$h4_fontsize
);
$h4_lineheight = new PitchQodeField(
	"textsimple",
	"h4_lineheight",
	"",
	esc_html__( "Line height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"h4_lineheight",
	$h4_lineheight
);
$h4_texttransform = new PitchQodeField(
	"selectblanksimple",
	"h4_texttransform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	"h4_texttransform",
	$h4_texttransform
);
$row2 = new PitchQodeRow( true );
$group4->addChild(
	"row2",
	$row2
);
$h4_google_fonts = new PitchQodeField(
	"fontsimple",
	"h4_google_fonts",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"h4_google_fonts",
	$h4_google_fonts
);
$h4_fontstyle = new PitchQodeField(
	"selectblanksimple",
	"h4_fontstyle",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"h4_fontstyle",
	$h4_fontstyle
);
$h4_fontweight = new PitchQodeField(
	"selectblanksimple",
	"h4_fontweight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"h4_fontweight",
	$h4_fontweight
);
$h4_letterspacing = new PitchQodeField(
	"textsimple",
	"h4_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"h4_letterspacing",
	$h4_letterspacing
);

$group5 = new PitchQodeGroup(
	esc_html__( "H5 style", 'pitch' ),
	esc_html__( "Define styles for H5 heading", 'pitch' )
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
$h5_color = new PitchQodeField(
	"colorsimple",
	"h5_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"h5_color",
	$h5_color
);
$h5_fontsize = new PitchQodeField(
	"textsimple",
	"h5_fontsize",
	"",
	esc_html__( "Font size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"h5_fontsize",
	$h5_fontsize
);
$h5_lineheight = new PitchQodeField(
	"textsimple",
	"h5_lineheight",
	"",
	esc_html__( "Line height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"h5_lineheight",
	$h5_lineheight
);
$h5_texttransform = new PitchQodeField(
	"selectblanksimple",
	"h5_texttransform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	"h5_texttransform",
	$h5_texttransform
);
$row2 = new PitchQodeRow( true );
$group5->addChild(
	"row2",
	$row2
);
$h5_google_fonts = new PitchQodeField(
	"fontsimple",
	"h5_google_fonts",
	"-1",
	esc_html__( "Font family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"h5_google_fonts",
	$h5_google_fonts
);
$h5_fontstyle = new PitchQodeField(
	"selectblanksimple",
	"h5_fontstyle",
	"",
	esc_html__( "Font style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"h5_fontstyle",
	$h5_fontstyle
);
$h5_fontweight = new PitchQodeField(
	"selectblanksimple",
	"h5_fontweight",
	"",
	esc_html__( "Font weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"h5_fontweight",
	$h5_fontweight
);
$h5_letterspacing = new PitchQodeField(
	"textsimple",
	"h5_letterspacing",
	"",
	esc_html__( "Letter spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"h5_letterspacing",
	$h5_letterspacing
);

$group6 = new PitchQodeGroup(
	esc_html__( "H6 Style", 'pitch' ),
	esc_html__( "Define styles for H6 heading", 'pitch' )
);
$panel1->addChild(
	"group6",
	$group6
);
$row1 = new PitchQodeRow();
$group6->addChild(
	"row1",
	$row1
);
$h6_color = new PitchQodeField(
	"colorsimple",
	"h6_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"h6_color",
	$h6_color
);
$h6_fontsize = new PitchQodeField(
	"textsimple",
	"h6_fontsize",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"h6_fontsize",
	$h6_fontsize
);
$h6_lineheight = new PitchQodeField(
	"textsimple",
	"h6_lineheight",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"h6_lineheight",
	$h6_lineheight
);
$h6_texttransform = new PitchQodeField(
	"selectblanksimple",
	"h6_texttransform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	"h6_texttransform",
	$h6_texttransform
);
$row2 = new PitchQodeRow( true );
$group6->addChild(
	"row2",
	$row2
);
$h6_google_fonts = new PitchQodeField(
	"fontsimple",
	"h6_google_fonts",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"h6_google_fonts",
	$h6_google_fonts
);
$h6_fontstyle = new PitchQodeField(
	"selectblanksimple",
	"h6_fontstyle",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"h6_fontstyle",
	$h6_fontstyle
);
$h6_fontweight = new PitchQodeField(
	"selectblanksimple",
	"h6_fontweight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"h6_fontweight",
	$h6_fontweight
);
$h6_letterspacing = new PitchQodeField(
	"textsimple",
	"h6_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"h6_letterspacing",
	$h6_letterspacing
);

// Text

$panel2 = new PitchQodePanel(
	esc_html__( "Text", 'pitch' ),
	"text_panel"
);
$fontsPage->addChild(
	"panel2",
	$panel2
);

$group1 = new PitchQodeGroup(
	esc_html__( "Paragraph", 'pitch' ),
	esc_html__( "Define styles for paragraph text", 'pitch' )
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
$text_color = new PitchQodeField(
	"colorsimple",
	"text_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"text_color",
	$text_color
);
$text_fontsize = new PitchQodeField(
	"textsimple",
	"text_fontsize",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"text_fontsize",
	$text_fontsize
);
$text_lineheight = new PitchQodeField(
	"textsimple",
	"text_lineheight",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"text_lineheight",
	$text_lineheight
);
$text_text_transform = new PitchQodeField(
	"selectblanksimple",
	"text_text_transform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	"text_text_transform",
	$text_text_transform
);
$row2 = new PitchQodeRow( true );
$group1->addChild(
	"row2",
	$row2
);
$text_google_fonts = new PitchQodeField(
	"fontsimple",
	"text_google_fonts",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"text_google_fonts",
	$text_google_fonts
);
$text_fontstyle = new PitchQodeField(
	"selectblanksimple",
	"text_fontstyle",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"text_fontstyle",
	$text_fontstyle
);
$text_fontweight = new PitchQodeField(
	"selectblanksimple",
	"text_fontweight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"text_fontweight",
	$text_fontweight
);
$text_letter_spacing = new PitchQodeField(
	"textsimple",
	"text_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"text_letter_spacing",
	$text_letter_spacing
);

$row3 = new PitchQodeRow( true );
$group1->addChild(
	"row3",
	$row3
);
$text_margin = new PitchQodeField(
	"textsimple",
	"text_margin",
	"",
	esc_html__( "Top/Bottom Margin (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row3->addChild(
	"text_margin",
	$text_margin
);

$group2 = new PitchQodeGroup(
	esc_html__( "Links", 'pitch' ),
	esc_html__( "Define styles for link text", 'pitch' )
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
$link_color = new PitchQodeField(
	"colorsimple",
	"link_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"link_color",
	$link_color
);
$link_hovercolor = new PitchQodeField(
	"colorsimple",
	"link_hovercolor",
	"",
	esc_html__( "Hover Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"link_hovercolor",
	$link_hovercolor
);
$row2 = new PitchQodeRow( true );
$group2->addChild(
	"row2",
	$row2
);
$link_fontstyle = new PitchQodeField(
	"selectblanksimple",
	"link_fontstyle",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"link_fontstyle",
	$link_fontstyle
);
$link_fontweight = new PitchQodeField(
	"selectblanksimple",
	"link_fontweight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"link_fontweight",
	$link_fontweight
);
$link_fontdecoration = new PitchQodeField(
	"selectblanksimple",
	"link_fontdecoration",
	"",
	esc_html__( "Text Decoration", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_decoration' )
);
$row2->addChild(
	"link_fontdecoration",
	$link_fontdecoration
);
$link_hover_fontdecoration = new PitchQodeField(
	"selectblanksimple",
	"link_hover_fontdecoration",
	"",
	esc_html__( "Hover Text Decoration", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_decoration' )
);
$row2->addChild(
	"link_hover_fontdecoration",
	$link_hover_fontdecoration
);

// Header & Menu

$panel4 = new PitchQodePanel(
	esc_html__( "Header & Menu", 'pitch' ),
	"header_and_menu_panel"
);
$fontsPage->addChild(
	"panel4",
	$panel4
);

$group1 = new PitchQodeGroup(
	"1st Level Menu",
	esc_html__( "Define styles for 1st level in Top Navigation Menu", 'pitch' )
);
$panel4->addChild(
	"group1",
	$group1
);
$row1 = new PitchQodeRow( true );
$group1->addChild(
	"row1",
	$row1
);
$menu_color = new PitchQodeField(
	"colorsimple",
	"menu_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"menu_color",
	$menu_color
);
$menu_hovercolor = new PitchQodeField(
	"colorsimple",
	"menu_hovercolor",
	"",
	esc_html__( "Hover Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"menu_hovercolor",
	$menu_hovercolor
);
$menu_activecolor = new PitchQodeField(
	"colorsimple",
	"menu_activecolor",
	"",
	esc_html__( "Active Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"menu_activecolor",
	$menu_activecolor
);
$row5 = new PitchQodeRow( true );
$group1->addChild(
	"row5",
	$row5
);
$menu_text_background_color = new PitchQodeField(
	"colorsimple",
	"menu_text_background_color",
	"",
	esc_html__( "Text Background Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row5->addChild(
	"menu_text_background_color",
	$menu_text_background_color
);
$menu_hover_background_color = new PitchQodeField(
	"colorsimple",
	"menu_hover_background_color",
	"",
	esc_html__( "Hover Text Background Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row5->addChild(
	"menu_hover_background_color",
	$menu_hover_background_color
);
$menu_active_background_color = new PitchQodeField(
	"colorsimple",
	"menu_active_background_color",
	"",
	esc_html__( "Active Text Background Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row5->addChild(
	"menu_active_background_color",
	$menu_active_background_color
);
$row6 = new PitchQodeRow( true );
$group1->addChild(
	"row6",
	$row6
);
$menu_light_hovercolor = new PitchQodeField(
	"colorsimple",
	"menu_light_hovercolor",
	"",
	esc_html__( "Light Menu Hover Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row6->addChild(
	"menu_light_hovercolor",
	$menu_light_hovercolor
);
$menu_light_activecolor = new PitchQodeField(
	"colorsimple",
	"menu_light_activecolor",
	"",
	esc_html__( "Light Menu Active Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row6->addChild(
	"menu_light_activecolor",
	$menu_light_activecolor
);
$menu_light_border_color = new PitchQodeField(
	"colorsimple",
	"menu_light_border_color",
	"",
	esc_html__( "Light Menu Border Hover/Active Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row6->addChild(
	"menu_light_border_color",
	$menu_light_border_color
);
$row7 = new PitchQodeRow( true );
$group1->addChild(
	"row7",
	$row7
);
$menu_dark_hovercolor = new PitchQodeField(
	"colorsimple",
	"menu_dark_hovercolor",
	"",
	esc_html__( "Dark Menu Hover Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row7->addChild(
	"menu_dark_hovercolor",
	$menu_dark_hovercolor
);
$menu_dark_activecolor = new PitchQodeField(
	"colorsimple",
	"menu_dark_activecolor",
	"",
	esc_html__( "Dark Menu Active Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row7->addChild(
	"menu_dark_activecolor",
	$menu_dark_activecolor
);
$menu_dark_border_color = new PitchQodeField(
	"colorsimple",
	"menu_dark_border_color",
	"",
	esc_html__( "Dark Menu Border Hover/Active Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row7->addChild(
	"menu_dark_border_color",
	$menu_dark_border_color
);
$row2 = new PitchQodeRow( true );
$group1->addChild(
	"row2",
	$row2
);
$menu_google_fonts = new PitchQodeField(
	"fontsimple",
	"menu_google_fonts",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"menu_google_fonts",
	$menu_google_fonts
);
$menu_fontsize = new PitchQodeField(
	"textsimple",
	"menu_fontsize",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"menu_fontsize",
	$menu_fontsize
);
$menu_hover_background_color_transparency = new PitchQodeField(
	"textsimple",
	"menu_hover_background_color_transparency",
	"",
	esc_html__( "Hover Background Color Transparency", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"menu_hover_background_color_transparency",
	$menu_hover_background_color_transparency
);
$menu_active_background_color_transparency = new PitchQodeField(
	"textsimple",
	"menu_active_background_color_transparency",
	"",
	esc_html__( "Active Background Color Transparency", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"menu_active_background_color_transparency",
	$menu_active_background_color_transparency
);
$row3 = new PitchQodeRow( true );
$group1->addChild(
	"row3",
	$row3
);
$menu_fontstyle = new PitchQodeField(
	"selectblanksimple",
	"menu_fontstyle",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row3->addChild(
	"menu_fontstyle",
	$menu_fontstyle
);
$menu_fontweight = new PitchQodeField(
	"selectblanksimple",
	"menu_fontweight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row3->addChild(
	"menu_fontweight",
	$menu_fontweight
);
$menu_letterspacing = new PitchQodeField(
	"textsimple",
	"menu_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row3->addChild(
	"menu_letterspacing",
	$menu_letterspacing
);
$menu_texttransform = new PitchQodeField(
	"selectblanksimple",
	"menu_texttransform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row3->addChild(
	"menu_texttransform",
	$menu_texttransform
);
$row4 = new PitchQodeRow( true );
$group1->addChild(
	"row4",
	$row4
);
$menu_lineheight = new PitchQodeField(
	"textsimple",
	"menu_lineheight",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row4->addChild(
	"menu_lineheight",
	$menu_lineheight
);
$menu_padding_left_right = new PitchQodeField(
	"textsimple",
	"menu_padding_left_right",
	"",
	esc_html__( "Padding Left/Right(px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row4->addChild(
	"menu_padding_left_right",
	$menu_padding_left_right
);
$menu_margin_left_right = new PitchQodeField(
	"textsimple",
	"menu_margin_left_right",
	"",
	esc_html__( "Margin Left/Right(px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row4->addChild(
	"menu_margin_left_right",
	$menu_margin_left_right
);
$group2 = new PitchQodeGroup(
	"2nd Level Menu",
	esc_html__( "Define styles for 2nd level in Top Navigation Menu", 'pitch' )
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
$dropdown_color = new PitchQodeField(
	"colorsimple",
	"dropdown_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"dropdown_color",
	$dropdown_color
);
$dropdown_hovercolor = new PitchQodeField(
	"colorsimple",
	"dropdown_hovercolor",
	"",
	esc_html__( "Hover/Active Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"dropdown_hovercolor",
	$dropdown_hovercolor
);
$dropdown_background_hovercolor = new PitchQodeField(
	"colorsimple",
	"dropdown_background_hovercolor",
	"",
	esc_html__( "Hover/Active Background Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"dropdown_background_hovercolor",
	$dropdown_background_hovercolor
);
$row2 = new PitchQodeRow( true );
$group2->addChild(
	"row2",
	$row2
);
$dropdown_google_fonts = new PitchQodeField(
	"fontsimple",
	"dropdown_google_fonts",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"dropdown_google_fonts",
	$dropdown_google_fonts
);
$dropdown_fontsize = new PitchQodeField(
	"textsimple",
	"dropdown_fontsize",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"dropdown_fontsize",
	$dropdown_fontsize
);
$dropdown_lineheight = new PitchQodeField(
	"textsimple",
	"dropdown_lineheight",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"dropdown_lineheight",
	$dropdown_lineheight
);
$row3 = new PitchQodeRow( true );
$group2->addChild(
	"row3",
	$row3
);
$dropdown_fontstyle = new PitchQodeField(
	"selectblanksimple",
	"dropdown_fontstyle",
	"",
	esc_html__( "Font style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row3->addChild(
	"dropdown_fontstyle",
	$dropdown_fontstyle
);
$dropdown_fontweight = new PitchQodeField(
	"selectblanksimple",
	"dropdown_fontweight",
	"",
	esc_html__( "Font weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row3->addChild(
	"dropdown_fontweight",
	$dropdown_fontweight
);
$dropdown_letterspacing = new PitchQodeField(
	"textsimple",
	"dropdown_letterspacing",
	"",
	esc_html__( "Letter spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row3->addChild(
	"dropdown_letterspacing",
	$dropdown_letterspacing
);
$dropdown_texttransform = new PitchQodeField(
	"selectblanksimple",
	"dropdown_texttransform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row3->addChild(
	"dropdown_texttransform",
	$dropdown_texttransform
);
$row4 = new PitchQodeRow();
$group2->addChild(
	"row4",
	$row4
);
$dropdown_padding_top_bottom = new PitchQodeField(
	"textsimple",
	"dropdown_padding_top_bottom",
	"",
	esc_html__( "Padding Top/Bottom (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row4->addChild(
	"dropdown_padding_top_bottom",
	$dropdown_padding_top_bottom
);
$dropdown_margin_left_right = new PitchQodeField(
	"textsimple",
	"dropdown_margin_left_right",
	"",
	esc_html__( "Margin Left/Right (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row4->addChild(
	"dropdown_margin_left_right",
	$dropdown_margin_left_right
);

$group3 = new PitchQodeGroup(
	"2nd Level Wide Menu",
	esc_html__( "Define styles for 2nd level in Wide Menu", 'pitch' )
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
$dropdown_wide_color = new PitchQodeField(
	"colorsimple",
	"dropdown_wide_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"dropdown_wide_color",
	$dropdown_wide_color
);
$dropdown_wide_hovercolor = new PitchQodeField(
	"colorsimple",
	"dropdown_wide_hovercolor",
	"",
	esc_html__( "Hover Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"dropdown_wide_hovercolor",
	$dropdown_wide_hovercolor
);
$dropdown_wide_background_hovercolor = new PitchQodeField(
	"colorsimple",
	"dropdown_wide_background_hovercolor",
	"",
	esc_html__( "Hover/Active Background Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"dropdown_wide_background_hovercolor",
	$dropdown_wide_background_hovercolor
);
$row2 = new PitchQodeRow( true );
$group3->addChild(
	"row2",
	$row2
);
$dropdown_wide_google_fonts = new PitchQodeField(
	"fontsimple",
	"dropdown_wide_google_fonts",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"dropdown_wide_google_fonts",
	$dropdown_wide_google_fonts
);
$dropdown_wide_fontsize = new PitchQodeField(
	"textsimple",
	"dropdown_wide_fontsize",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"dropdown_wide_fontsize",
	$dropdown_wide_fontsize
);
$dropdown_wide_lineheight = new PitchQodeField(
	"textsimple",
	"dropdown_wide_lineheight",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"dropdown_wide_lineheight",
	$dropdown_wide_lineheight
);
$dropdown_wide_padding_top_bottom = new PitchQodeField(
	"textsimple",
	"dropdown_wide_padding_top_bottom",
	"",
	esc_html__( "Padding Top/Bottom", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"dropdown_wide_padding_top_bottom",
	$dropdown_wide_padding_top_bottom
);
$row3 = new PitchQodeRow( true );
$group3->addChild(
	"row3",
	$row3
);
$dropdown_wide_fontstyle = new PitchQodeField(
	"selectblanksimple",
	"dropdown_wide_fontstyle",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row3->addChild(
	"dropdown_wide_fontstyle",
	$dropdown_wide_fontstyle
);
$dropdown_wide_fontweight = new PitchQodeField(
	"selectblanksimple",
	"dropdown_wide_fontweight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row3->addChild(
	"dropdown_wide_fontweight",
	$dropdown_wide_fontweight
);
$dropdown_wide_letterspacing = new PitchQodeField(
	"textsimple",
	"dropdown_wide_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row3->addChild(
	"dropdown_wide_letterspacing",
	$dropdown_wide_letterspacing
);
$dropdown_wide_texttransform = new PitchQodeField(
	"selectblanksimple",
	"dropdown_wide_texttransform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row3->addChild(
	"dropdown_wide_texttransform",
	$dropdown_wide_texttransform
);

$group4 = new PitchQodeGroup(
	"3rd Level Menu",
	esc_html__( "Define styles for 3rd level in Top Navigation Menu", 'pitch' )
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
$dropdown_color_thirdlvl = new PitchQodeField(
	"colorsimple",
	"dropdown_color_thirdlvl",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"dropdown_color_thirdlvl",
	$dropdown_color_thirdlvl
);
$dropdown_hovercolor_thirdlvl = new PitchQodeField(
	"colorsimple",
	"dropdown_hovercolor_thirdlvl",
	"",
	esc_html__( "Hover/Active Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"dropdown_hovercolor_thirdlvl",
	$dropdown_hovercolor_thirdlvl
);
$dropdown_background_hovercolor_thirdlvl = new PitchQodeField(
	"colorsimple",
	"dropdown_background_hovercolor_thirdlvl",
	"",
	esc_html__( "Hover/Active Background Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"dropdown_background_hovercolor_thirdlvl",
	$dropdown_background_hovercolor_thirdlvl
);
$row2 = new PitchQodeRow( true );
$group4->addChild(
	"row2",
	$row2
);
$dropdown_google_fonts_thirdlvl = new PitchQodeField(
	"fontsimple",
	"dropdown_google_fonts_thirdlvl",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"dropdown_google_fonts_thirdlvl",
	$dropdown_google_fonts_thirdlvl
);
$dropdown_fontsize_thirdlvl = new PitchQodeField(
	"textsimple",
	"dropdown_fontsize_thirdlvl",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"dropdown_fontsize_thirdlvl",
	$dropdown_fontsize_thirdlvl
);
$dropdown_lineheight_thirdlvl = new PitchQodeField(
	"textsimple",
	"dropdown_lineheight_thirdlvl",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"dropdown_lineheight_thirdlvl",
	$dropdown_lineheight_thirdlvl
);
$row3 = new PitchQodeRow( true );
$group4->addChild(
	"row3",
	$row3
);
$dropdown_fontstyle_thirdlvl = new PitchQodeField(
	"selectblanksimple",
	"dropdown_fontstyle_thirdlvl",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row3->addChild(
	"dropdown_fontstyle_thirdlvl",
	$dropdown_fontstyle_thirdlvl
);
$dropdown_fontweight_thirdlvl = new PitchQodeField(
	"selectblanksimple",
	"dropdown_fontweight_thirdlvl",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row3->addChild(
	"dropdown_fontweight_thirdlvl",
	$dropdown_fontweight_thirdlvl
);
$dropdown_letterspacing_thirdlvl = new PitchQodeField(
	"textsimple",
	"dropdown_letterspacing_thirdlvl",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row3->addChild(
	"dropdown_letterspacing",
	$dropdown_letterspacing_thirdlvl
);
$dropdown_texttransform_thirdlvl = new PitchQodeField(
	"selectblanksimple",
	"dropdown_texttransform_thirdlvl",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row3->addChild(
	"dropdown_texttransform_thirdlvl",
	$dropdown_texttransform_thirdlvl
);

$group9 = new PitchQodeGroup(
	"3rd Level Wide Menu",
	esc_html__( "Define styles for 3rd level in Wide Menu", 'pitch' )
);
$panel4->addChild(
	"group9",
	$group9
);
$row1 = new PitchQodeRow();
$group9->addChild(
	"row1",
	$row1
);
$dropdown_wide_color_thirdlvl = new PitchQodeField(
	"colorsimple",
	"dropdown_wide_color_thirdlvl",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"dropdown_wide_color_thirdlvl",
	$dropdown_wide_color_thirdlvl
);
$dropdown_wide_hovercolor_thirdlvl = new PitchQodeField(
	"colorsimple",
	"dropdown_wide_hovercolor_thirdlvl",
	"",
	esc_html__( "Hover/Active Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"dropdown_wide_hovercolor_thirdlvl",
	$dropdown_wide_hovercolor_thirdlvl
);
$dropdown_wide_background_hovercolor_thirdlvl = new PitchQodeField(
	"colorsimple",
	"dropdown_wide_background_hovercolor_thirdlvl",
	"",
	esc_html__( "Hover/Active Background Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"dropdown_wide_background_hovercolor_thirdlvl",
	$dropdown_wide_background_hovercolor_thirdlvl
);
$row2 = new PitchQodeRow( true );
$group9->addChild(
	"row2",
	$row2
);
$dropdown_wide_google_fonts_thirdlvl = new PitchQodeField(
	"fontsimple",
	"dropdown_wide_google_fonts_thirdlvl",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"dropdown_wide_google_fonts_thirdlvl",
	$dropdown_wide_google_fonts_thirdlvl
);
$dropdown_wide_fontsize_thirdlvl = new PitchQodeField(
	"textsimple",
	"dropdown_wide_fontsize_thirdlvl",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"dropdown_wide_fontsize_thirdlvl",
	$dropdown_wide_fontsize_thirdlvl
);
$dropdown_wide_lineheight_thirdlvl = new PitchQodeField(
	"textsimple",
	"dropdown_wide_lineheight_thirdlvl",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"dropdown_wide_lineheight_thirdlvl",
	$dropdown_wide_lineheight_thirdlvl
);
$row3 = new PitchQodeRow( true );
$group9->addChild(
	"row3",
	$row3
);
$dropdown_wide_fontstyle_thirdlvl = new PitchQodeField(
	"selectblanksimple",
	"dropdown_wide_fontstyle_thirdlvl",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row3->addChild(
	"dropdown_wide_fontstyle_thirdlvl",
	$dropdown_wide_fontstyle_thirdlvl
);
$dropdown_wide_fontweight_thirdlvl = new PitchQodeField(
	"selectblanksimple",
	"dropdown_wide_fontweight_thirdlvl",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row3->addChild(
	"dropdown_wide_fontweight_thirdlvl",
	$dropdown_wide_fontweight_thirdlvl
);
$dropdown_wide_letterspacing_thirdlvl = new PitchQodeField(
	"textsimple",
	"dropdown_wide_letterspacing_thirdlvl",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row3->addChild(
	"dropdown_wide_letterspacing",
	$dropdown_wide_letterspacing_thirdlvl
);
$dropdown_wide_texttransform_thirdlvl = new PitchQodeField(
	"selectblanksimple",
	"dropdown_wide_texttransform_thirdlvl",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row3->addChild(
	"dropdown_wide_texttransform_thirdlvl",
	$dropdown_wide_texttransform_thirdlvl
);

$group5 = new PitchQodeGroup(
	esc_html__( "Fixed Menu", 'pitch' ),
	esc_html__( "Define styles for fixed menu items", 'pitch' )
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
$fixed_color = new PitchQodeField(
	"colorsimple",
	"fixed_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"fixed_color",
	$fixed_color
);
$fixed_hovercolor = new PitchQodeField(
	"colorsimple",
	"fixed_hovercolor",
	"",
	esc_html__( "Hover/Active Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"fixed_hovercolor",
	$fixed_hovercolor
);
$row2 = new PitchQodeRow( true );
$group5->addChild(
	"row2",
	$row2
);
$fixed_google_fonts = new PitchQodeField(
	"fontsimple",
	"fixed_google_fonts",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"fixed_google_fonts",
	$fixed_google_fonts
);
$fixed_fontsize = new PitchQodeField(
	"textsimple",
	"fixed_fontsize",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"fixed_fontsize",
	$fixed_fontsize
);
$fixed_lineheight = new PitchQodeField(
	"textsimple",
	"fixed_lineheight",
	"",
	esc_html__( "Line height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"fixed_lineheight",
	$fixed_lineheight
);
$fixed_texttransform = new PitchQodeField(
	"selectblanksimple",
	"fixed_texttransform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row2->addChild(
	"fixed_texttransform",
	$fixed_texttransform
);
$row3 = new PitchQodeRow( true );
$group5->addChild(
	"row3",
	$row3
);
$fixed_fontstyle = new PitchQodeField(
	"selectblanksimple",
	"fixed_fontstyle",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row3->addChild(
	"fixed_fontstyle",
	$fixed_fontstyle
);
$fixed_fontweight = new PitchQodeField(
	"selectblanksimple",
	"fixed_fontweight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row3->addChild(
	"fixed_fontweight",
	$fixed_fontweight
);
$fixed_letterspacing = new PitchQodeField(
	"textsimple",
	"fixed_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row3->addChild(
	"fixed_letterspacing",
	$fixed_letterspacing
);

$group6 = new PitchQodeGroup(
	esc_html__( "Sticky Menu", 'pitch' ),
	esc_html__( "Define styles for sticky menu items", 'pitch' )
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
$sticky_color = new PitchQodeField(
	"colorsimple",
	"sticky_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"sticky_color",
	$sticky_color
);
$sticky_hovercolor = new PitchQodeField(
	"colorsimple",
	"sticky_hovercolor",
	"",
	esc_html__( "Hover/Active color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"sticky_hovercolor",
	$sticky_hovercolor
);
$row2 = new PitchQodeRow( true );
$group6->addChild(
	"row2",
	$row2
);
$sticky_google_fonts = new PitchQodeField(
	"fontsimple",
	"sticky_google_fonts",
	"-1",
	esc_html__( "Font family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"sticky_google_fonts",
	$sticky_google_fonts
);
$sticky_fontsize = new PitchQodeField(
	"textsimple",
	"sticky_fontsize",
	"",
	esc_html__( "Font size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"sticky_fontsize",
	$sticky_fontsize
);
$sticky_lineheight = new PitchQodeField(
	"textsimple",
	"sticky_lineheight",
	"",
	esc_html__( "Line height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"sticky_lineheight",
	$sticky_lineheight
);
$sticky_texttransform = new PitchQodeField(
	"selectblanksimple",
	"sticky_texttransform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row2->addChild(
	"sticky_texttransform",
	$sticky_texttransform
);
$row3 = new PitchQodeRow( true );
$group6->addChild(
	"row3",
	$row3
);
$sticky_fontstyle = new PitchQodeField(
	"selectblanksimple",
	"sticky_fontstyle",
	"",
	esc_html__( "Font style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row3->addChild(
	"sticky_fontstyle",
	$sticky_fontstyle
);
$sticky_fontweight = new PitchQodeField(
	"selectblanksimple",
	"sticky_fontweight",
	"",
	esc_html__( "Font weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row3->addChild(
	"sticky_fontweight",
	$sticky_fontweight
);
$sticky_letterspacing = new PitchQodeField(
	"textsimple",
	"sticky_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row3->addChild(
	"sticky_letterspacing",
	$sticky_letterspacing
);

$group7 = new PitchQodeGroup(
	esc_html__( "Mobile Menu", 'pitch' ),
	esc_html__( "Define styles for Mobile Menu (as seen on small screens)", 'pitch' )
);
$panel4->addChild(
	"group7",
	$group7
);
$row1 = new PitchQodeRow();
$group7->addChild(
	"row1",
	$row1
);
$mobile_color = new PitchQodeField(
	"colorsimple",
	"mobile_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"mobile_color",
	$mobile_color
);
$mobile_hovercolor = new PitchQodeField(
	"colorsimple",
	"mobile_hovercolor",
	"",
	esc_html__( "Hover/Active Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"mobile_hovercolor",
	$mobile_hovercolor
);
$row2 = new PitchQodeRow( true );
$group7->addChild(
	"row2",
	$row2
);
$mobile_google_fonts = new PitchQodeField(
	"fontsimple",
	"mobile_google_fonts",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"mobile_google_fonts",
	$mobile_google_fonts
);
$mobile_fontsize = new PitchQodeField(
	"textsimple",
	"mobile_fontsize",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"mobile_fontsize",
	$mobile_fontsize
);
$mobile_lineheight = new PitchQodeField(
	"textsimple",
	"mobile_lineheight",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"mobile_lineheight",
	$mobile_lineheight
);
$mobile_texttransform = new PitchQodeField(
	"selectblanksimple",
	"mobile_texttransform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row2->addChild(
	"mobile_texttransform",
	$mobile_texttransform
);
$row3 = new PitchQodeRow( true );
$group7->addChild(
	"row3",
	$row3
);
$mobile_fontstyle = new PitchQodeField(
	"selectblanksimple",
	"mobile_fontstyle",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row3->addChild(
	"mobile_fontstyle",
	$mobile_fontstyle
);
$mobile_fontweight = new PitchQodeField(
	"selectblanksimple",
	"mobile_fontweight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row3->addChild(
	"mobile_fontweight",
	$mobile_fontweight
);
$mobile_letter_spacing = new PitchQodeField(
	"textsimple",
	"mobile_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row3->addChild(
	"mobile_letter_spacing",
	$mobile_letter_spacing
);

$group8 = new PitchQodeGroup(
	esc_html__( "Header Top", 'pitch' ),
	esc_html__( "Define styles for Header Top area", 'pitch' )
);
$panel4->addChild(
	"group8",
	$group8
);
$row1 = new PitchQodeRow();
$group8->addChild(
	"row1",
	$row1
);
$top_header_text_color = new PitchQodeField(
	"colorsimple",
	"top_header_text_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"top_header_text_color",
	$top_header_text_color
);
$top_header_text_hover_color = new PitchQodeField(
	"colorsimple",
	"top_header_text_hover_color",
	"",
	esc_html__( "Hover Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"top_header_text_hover_color",
	$top_header_text_hover_color
);
$row2 = new PitchQodeRow( true );
$group8->addChild(
	"row2",
	$row2
);
$top_header_text_font_family = new PitchQodeField(
	"fontsimple",
	"top_header_text_font_family",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"top_header_text_font_family",
	$top_header_text_font_family
);
$top_header_text_font_size = new PitchQodeField(
	"textsimple",
	"top_header_text_font_size",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"top_header_text_font_size",
	$top_header_text_font_size
);
$top_header_text_line_height = new PitchQodeField(
	"textsimple",
	"top_header_text_line_height",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"top_header_text_line_height",
	$top_header_text_line_height
);
$row3 = new PitchQodeRow( true );
$group8->addChild(
	"row3",
	$row3
);
$group8->addChild(
	"row3",
	$row3
);
$top_header_text_font_style = new PitchQodeField(
	"selectblanksimple",
	"top_header_text_font_style",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row3->addChild(
	"top_header_text_font_style",
	$top_header_text_font_style
);
$top_header_text_font_weight = new PitchQodeField(
	"selectblanksimple",
	"top_header_text_font_weight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row3->addChild(
	"top_header_text_font_weight",
	$top_header_text_font_weight
);
$top_header_text_letter_spacing = new PitchQodeField(
	"textsimple",
	"top_header_text_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row3->addChild(
	"top_header_text_letter_spacing",
	$top_header_text_letter_spacing
);

// Page title, subtitle and breadcrumbs

$panel3 = new PitchQodePanel(
	esc_html__( "Page Title Style", 'pitch' ),
	"page_title_panel"
);
$fontsPage->addChild(
	"panel3",
	$panel3
);

$group1 = new PitchQodeGroup(
	esc_html__( "Title", 'pitch' ),
	esc_html__( "Define styles for default 'Small' page title", 'pitch' )
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
$page_title_color = new PitchQodeField(
	"colorsimple",
	"page_title_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"page_title_color",
	$page_title_color
);
$page_title_fontsize = new PitchQodeField(
	"textsimple",
	"page_title_fontsize",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"page_title_fontsize",
	$page_title_fontsize
);
$page_title_lineheight = new PitchQodeField(
	"textsimple",
	"page_title_lineheight",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"page_title_lineheight",
	$page_title_lineheight
);
$page_title_texttransform = new PitchQodeField(
	"selectblanksimple",
	"page_title_texttransform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	"page_title_texttransform",
	$page_title_texttransform
);

$row2 = new PitchQodeRow( true );
$group1->addChild(
	"row2",
	$row2
);
$page_title_google_fonts = new PitchQodeField(
	"fontsimple",
	"page_title_google_fonts",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"page_title_google_fonts",
	$page_title_google_fonts
);
$page_title_fontstyle = new PitchQodeField(
	"selectblanksimple",
	"page_title_fontstyle",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"page_title_fontstyle",
	$page_title_fontstyle
);
$page_title_fontweight = new PitchQodeField(
	"selectblanksimple",
	"page_title_fontweight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"page_title_fontweight",
	$page_title_fontweight
);
$page_title_letter_spacing = new PitchQodeField(
	"textsimple",
	"page_title_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"page_title_letter_spacing",
	$page_title_letter_spacing
);

$medium_type = new PitchQodeGroup(
	esc_html__( "Medium Type", 'pitch' ),
	esc_html__( 'Define styles for "Medium" Title', 'pitch' )
);
$panel3->addChild(
	"medium_type",
	$medium_type
);
$row1 = new PitchQodeRow();
$medium_type->addChild(
	"row1",
	$row1
);
$page_title_medium_color = new PitchQodeField(
	"colorsimple",
	"page_title_medium_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"page_title_medium_color",
	$page_title_medium_color
);
$page_title_medium_fontsize = new PitchQodeField(
	"textsimple",
	"page_title_medium_fontsize",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"page_title_medium_fontsize",
	$page_title_medium_fontsize
);
$page_title_medium_lineheight = new PitchQodeField(
	"textsimple",
	"page_title_medium_lineheight",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"page_title_medium_lineheight",
	$page_title_medium_lineheight
);
$page_title_medium_texttransform = new PitchQodeField(
	"selectblanksimple",
	"page_title_medium_texttransform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	"page_title_medium_texttransform",
	$page_title_medium_texttransform
);

$row2 = new PitchQodeRow( true );
$medium_type->addChild(
	"row2",
	$row2
);
$page_title_medium_google_fonts = new PitchQodeField(
	"fontsimple",
	"page_title_medium_google_fonts",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"page_title_medium_google_fonts",
	$page_title_medium_google_fonts
);
$page_title_medium_fontstyle = new PitchQodeField(
	"selectblanksimple",
	"page_title_medium_fontstyle",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"page_title_medium_fontstyle",
	$page_title_medium_fontstyle
);
$page_title_medium_fontweight = new PitchQodeField(
	"selectblanksimple",
	"page_title_medium_fontweight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"page_title_medium_fontweight",
	$page_title_medium_fontweight
);
$page_title_medium_letter_spacing = new PitchQodeField(
	"textsimple",
	"page_title_medium_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"page_title_medium_letter_spacing",
	$page_title_medium_letter_spacing
);

$large_type = new PitchQodeGroup(
	esc_html__( "Large Type", 'pitch' ),
	esc_html__( 'Define styles for "Large" Title', 'pitch' )
);
$panel3->addChild(
	"large_type",
	$large_type
);
$row1 = new PitchQodeRow();
$large_type->addChild(
	"row1",
	$row1
);
$page_title_large_color = new PitchQodeField(
	"colorsimple",
	"page_title_large_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"page_title_large_color",
	$page_title_large_color
);
$page_title_large_fontsize = new PitchQodeField(
	"textsimple",
	"page_title_large_fontsize",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"page_title_large_fontsize",
	$page_title_large_fontsize
);
$page_title_large_lineheight = new PitchQodeField(
	"textsimple",
	"page_title_large_lineheight",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"page_title_large_lineheight",
	$page_title_large_lineheight
);
$page_title_large_texttransform = new PitchQodeField(
	"selectblanksimple",
	"page_title_large_texttransform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	"page_title_large_texttransform",
	$page_title_large_texttransform
);

$row2 = new PitchQodeRow( true );
$large_type->addChild(
	"row2",
	$row2
);
$page_title_large_google_fonts = new PitchQodeField(
	"fontsimple",
	"page_title_large_google_fonts",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"page_title_large_google_fonts",
	$page_title_large_google_fonts
);
$page_title_large_fontstyle = new PitchQodeField(
	"selectblanksimple",
	"page_title_large_fontstyle",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"page_title_large_fontstyle",
	$page_title_large_fontstyle
);
$page_title_large_fontweight = new PitchQodeField(
	"selectblanksimple",
	"page_title_large_fontweight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"page_title_large_fontweight",
	$page_title_large_fontweight
);
$page_title_large_letter_spacing = new PitchQodeField(
	"textsimple",
	"page_title_large_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"page_title_large_letter_spacing",
	$page_title_large_letter_spacing
);

$group2 = new PitchQodeGroup(
	esc_html__( "Subtitle", 'pitch' ),
	esc_html__( "Define styles for page subtitle", 'pitch' )
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
$page_subtitle_color = new PitchQodeField(
	"colorsimple",
	"page_subtitle_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"page_subtitle_color",
	$page_subtitle_color
);
$page_subtitle_fontsize = new PitchQodeField(
	"textsimple",
	"page_subtitle_fontsize",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"page_subtitle_fontsize",
	$page_subtitle_fontsize
);
$page_subtitle_lineheight = new PitchQodeField(
	"textsimple",
	"page_subtitle_lineheight",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"page_subtitle_lineheight",
	$page_subtitle_lineheight
);
$page_subtitle_texttransform = new PitchQodeField(
	"selectblanksimple",
	"page_subtitle_texttransform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	"page_subtitle_texttransform",
	$page_subtitle_texttransform
);

$row2 = new PitchQodeRow( true );
$group2->addChild(
	"row2",
	$row2
);
$page_subtitle_google_fonts = new PitchQodeField(
	"fontsimple",
	"page_subtitle_google_fonts",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"page_subtitle_google_fonts",
	$page_subtitle_google_fonts
);
$page_subtitle_fontstyle = new PitchQodeField(
	"selectblanksimple",
	"page_subtitle_fontstyle",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"page_subtitle_fontstyle",
	$page_subtitle_fontstyle
);
$page_subtitle_fontweight = new PitchQodeField(
	"selectblanksimple",
	"page_subtitle_fontweight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"page_subtitle_fontweight",
	$page_subtitle_fontweight
);
$page_subtitle_letter_spacing = new PitchQodeField(
	"textsimple",
	"page_subtitle_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"page_subtitle_letter_spacing",
	$page_subtitle_letter_spacing
);

$group3 = new PitchQodeGroup(
	esc_html__( "Breadcrumbs", 'pitch' ),
	esc_html__( "Define styles for page breadcrumbs", 'pitch' )
);
$panel3->addChild(
	"group3",
	$group3
);

$row1 = new PitchQodeRow();
$group3->addChild(
	"row1",
	$row1
);
$page_breadcrumb_color = new PitchQodeField(
	"colorsimple",
	"page_breadcrumb_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"page_breadcrumb_color",
	$page_breadcrumb_color
);
$page_breadcrumb_fontsize = new PitchQodeField(
	"textsimple",
	"page_breadcrumb_fontsize",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"page_breadcrumb_fontsize",
	$page_breadcrumb_fontsize
);
$page_breadcrumb_lineheight = new PitchQodeField(
	"textsimple",
	"page_breadcrumb_lineheight",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"page_breadcrumb_lineheight",
	$page_breadcrumb_lineheight
);
$page_breadcrumb_texttransform = new PitchQodeField(
	"selectblanksimple",
	"page_breadcrumb_texttransform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	"page_breadcrumb_texttransform",
	$page_breadcrumb_texttransform
);

$row2 = new PitchQodeRow( true );
$group3->addChild(
	"row2",
	$row2
);
$page_breadcrumb_google_fonts = new PitchQodeField(
	"fontsimple",
	"page_breadcrumb_google_fonts",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"page_breadcrumb_google_fonts",
	$page_breadcrumb_google_fonts
);
$page_breadcrumb_fontstyle = new PitchQodeField(
	"selectblanksimple",
	"page_breadcrumb_fontstyle",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"page_breadcrumb_fontstyle",
	$page_breadcrumb_fontstyle
);
$page_breadcrumb_fontweight = new PitchQodeField(
	"selectblanksimple",
	"page_breadcrumb_fontweight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"page_breadcrumb_fontweight",
	$page_breadcrumb_fontweight
);
$page_breadcrumb_letter_spacing = new PitchQodeField(
	"textsimple",
	"page_breadcrumb_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"page_breadcrumb_letter_spacing",
	$page_breadcrumb_letter_spacing
);

$row3 = new PitchQodeRow( true );
$group3->addChild(
	"row3",
	$row3
);
$page_breadcrumb_hovercolor = new PitchQodeField(
	"colorsimple",
	"page_breadcrumb_hovercolor",
	"",
	esc_html__( "Hover/Active Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row3->addChild(
	"page_breadcrumb_hovercolor",
	$page_breadcrumb_hovercolor
);


<?php

$generalPage = new QodePitchAdminPage(
	"",
	esc_html__( "General", 'pitch' ),
	"fa fa-institution"
);
$pitch_qode_framework->qodeOptions->addAdminPage(
	"general",
	$generalPage
);

// Design Style

$panel1 = new PitchQodePanel(
	esc_html__( "Design Style", 'pitch' ),
	"design_style"
);
$generalPage->addChild(
	"panel1",
	$panel1
);

$google_fonts = new PitchQodeField(
	"font",
	"google_fonts",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "Choose a default Google font for your site", 'pitch' )
);
$panel1->addChild(
	"google_fonts",
	$google_fonts
);

$additional_google_fonts = new PitchQodeField(
	"yesno",
	"additional_google_fonts",
	"no",
	esc_html__( "Additional Google Fonts", 'pitch' ),
	"",
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_additional_google_font_container"
	)
);
$panel1->addChild(
	"additional_google_fonts",
	$additional_google_fonts
);

$additional_google_font_container = new PitchQodeContainer(
	"additional_google_font_container",
	"additional_google_fonts",
	"no"
);
$panel1->addChild(
	"additional_google_font_container",
	$additional_google_font_container
);

$additional_google_font1 = new PitchQodeField(
	"font",
	"additional_google_font1",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "Choose additional Google font for your site", 'pitch' )
);
$additional_google_font_container->addChild(
	"additional_google_font1",
	$additional_google_font1
);

$additional_google_font2 = new PitchQodeField(
	"font",
	"additional_google_font2",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "Choose additional Google font for your site", 'pitch' )
);
$additional_google_font_container->addChild(
	"additional_google_font2",
	$additional_google_font2
);

$additional_google_font3 = new PitchQodeField(
	"font",
	"additional_google_font3",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "Choose additional Google font for your site", 'pitch' )
);
$additional_google_font_container->addChild(
	"additional_google_font3",
	$additional_google_font3
);

$additional_google_font4 = new PitchQodeField(
	"font",
	"additional_google_font4",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "Choose additional Google font for your site", 'pitch' )
);
$additional_google_font_container->addChild(
	"additional_google_font4",
	$additional_google_font4
);

$additional_google_font5 = new PitchQodeField(
	"font",
	"additional_google_font5",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "Choose additional Google font for your site", 'pitch' )
);
$additional_google_font_container->addChild(
	"additional_google_font5",
	$additional_google_font5
);

$first_color = new PitchQodeField(
	"color",
	"first_color",
	"",
	esc_html__( "First Main Color", 'pitch' ),
	esc_html__( "Choose the most dominant theme color. Default color is #f5245f.", 'pitch' )
);
$panel1->addChild(
	"first_color",
	$first_color
);

$background_color = new PitchQodeField(
	"color",
	"background_color",
	"",
	esc_html__( "Content Background Color", 'pitch' ),
	esc_html__( "Choose the background color for page content area. Default color is #f5f5f5.", 'pitch' )
);
$panel1->addChild(
	"background_color",
	$background_color
);

$background_color_grid = new PitchQodeField(
	"color",
	"background_color_grid",
	"",
	esc_html__( "Content Background Color for Templates in Grid", 'pitch' ),
	esc_html__( "Choose the background color for the page templates in grid.", 'pitch' )
);
$panel1->addChild(
	"background_color_grid",
	$background_color_grid
);

$selection_color = new PitchQodeField(
	"color",
	"selection_color",
	"",
	esc_html__( "Text Selection Color", 'pitch' ),
	esc_html__( "Choose the color users see when selecting text", 'pitch' )
);
$panel1->addChild(
	"selection_color",
	$selection_color
);

$content_top_padding = new PitchQodeField(
	"text",
	"content_top_padding",
	"0",
	esc_html__( "Content Top Padding (px)", 'pitch' ),
	esc_html__( "Enter top padding for content area. If you set this value then it's important to set also Content top padding for mobile header value.", 'pitch' ),
	array(),
	array( "col_width" => 3 )
);
$panel1->addChild(
	"content_top_padding",
	$content_top_padding
);

$content_top_padding_default_template = new PitchQodeField(
	"text",
	"content_top_padding_default_template",
	"44",
	esc_html__( "Content Top Padding for Templates in Grid (px)", 'pitch' ),
	esc_html__( "Enter top padding for content area for Templates in grid. If you set this value then it's important to set also Content top padding for mobile header value.", 'pitch' ),
	array(),
	array( "col_width" => 3 )
);
$panel1->addChild(
	"content_top_padding_default_template",
	$content_top_padding_default_template
);

$content_top_padding_mobile = new PitchQodeField(
	"text",
	"content_top_padding_mobile",
	"44",
	esc_html__( "Content Top Padding for Mobile Header (px)", 'pitch' ),
	esc_html__( "Enter top padding for content area for Mobile Header.", 'pitch' ),
	array(),
	array( "col_width" => 3 )
);
$panel1->addChild(
	"content_top_padding_mobile",
	$content_top_padding_mobile
);

$transparent_content = new PitchQodeField(
	"yesno",
	"transparent_content",
	"no",
	esc_html__( "Enable Uniform Site Background", 'pitch' ),
	esc_html__( "If enabled, content background on pages will be transparent (unless set otherwise) and the background you set here will show", 'pitch' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_transparent_content_container"
	)
);
$panel1->addChild(
	"transparent_content",
	$transparent_content
);

$transparent_content_container = new PitchQodeContainer(
	"transparent_content_container",
	"transparent_content",
	"no"
);
$panel1->addChild(
	"transparent_content_container",
	$transparent_content_container
);

$transparent_content_background_color = new PitchQodeField(
	"color",
	"transparent_content_background_color",
	"",
	esc_html__( "Background Color", 'pitch' ),
	esc_html__( "Choose body background color. Default color is #ffffff.", 'pitch' )
);
$transparent_content_container->addChild(
	"transparent_content_background_color",
	$transparent_content_background_color
);

$transparent_content_background_image = new PitchQodeField(
	"image",
	"transparent_content_background_image",
	"",
	esc_html__( "Background Image", 'pitch' ),
	esc_html__( "Choose an image to be displayed in background", 'pitch' )
);
$transparent_content_container->addChild(
	"transparent_content_background_image",
	$transparent_content_background_image
);

$transparent_content_pattern_background_image = new PitchQodeField(
	"image",
	"transparent_content_pattern_background_image",
	"",
	esc_html__( "Background Pattern", 'pitch' ),
	esc_html__( "Choose an image to be used as background pattern", 'pitch' )
);
$transparent_content_container->addChild(
	"transparent_content_pattern_background_image",
	$transparent_content_pattern_background_image
);

$overlapping_content = new PitchQodeField(
	"yesno",
	"overlapping_content",
	"no",
	esc_html__( "Enable Overlapping Content", 'pitch' ),
	esc_html__( "Enabling this option will make content overlap title area or slider for set amount of pixels", 'pitch' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_overlapping_content_container"
	)
);
$panel1->addChild(
	"overlapping_content",
	$overlapping_content
);

$overlapping_content_container = new PitchQodeContainer(
	"overlapping_content_container",
	"overlapping_content",
	"no"
);
$panel1->addChild(
	"overlapping_content_container",
	$overlapping_content_container
);

$overlapping_top_content_amount = new PitchQodeField(
	"text",
	"overlapping_top_content_amount",
	"",
	esc_html__( "Overlapping top amount (px)", 'pitch' ),
	esc_html__( "Enter amount of pixels you would like content to overlap title area or slider (default is 40)", 'pitch' ),
	array(),
	array( "col_width" => 1 )
);
$overlapping_content_container->addChild(
	"overlapping_top_content_amount",
	$overlapping_top_content_amount
);

$overlapping_bottom_content_amount = new PitchQodeField(
	"text",
	"overlapping_bottom_content_amount",
	"",
	esc_html__( "Overlapping bottom amount (px)", 'pitch' ),
	esc_html__( "Enter amount of pixels you would like content to overlap footer (default is 40)", 'pitch' ),
	array(),
	array( "col_width" => 1 )
);
$overlapping_content_container->addChild(
	"overlapping_bottom_content_amount",
	$overlapping_bottom_content_amount
);

$overlapping_content_padding = new PitchQodeField(
	"text",
	"overlapping_content_padding",
	"",
	esc_html__( "Overlapping left/right padding (px)", 'pitch' ),
	esc_html__( "This option takes effect only on Default (in grid) templates", 'pitch' ),
	array(),
	array( "col_width" => 1 )
);
$overlapping_content_container->addChild(
	"overlapping_content_padding",
	$overlapping_content_padding
);

$animate_overlapping_content = new PitchQodeField(
	"yesno",
	"animate_overlapping_content",
	"no",
	esc_html__( "Animate overlapping content", 'pitch' ),
	esc_html__( "Enabling this option will turn on entry animation on overlapping content", 'pitch' )
);
$overlapping_content_container->addChild(
	"animate_overlapping_content",
	$animate_overlapping_content
);

$frame_around_overlapping_content = new PitchQodeField(
	"yesno",
	"frame_around_overlapping_content",
	"no",
	esc_html__( "Frame around overlapping content", 'pitch' ),
	esc_html__( "Enabling this option will set a frame around the overlapping content", 'pitch' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_frame_around_overlapping_content_container"
	)
);
$overlapping_content_container->addChild(
	"frame_around_overlapping_content",
	$frame_around_overlapping_content
);

$frame_around_overlapping_content_container = new PitchQodeContainer(
	"frame_around_overlapping_content_container",
	"frame_around_overlapping_content",
	"no"
);
$overlapping_content_container->addChild(
	"frame_around_overlapping_content_container",
	$frame_around_overlapping_content_container
);

$frame_around_overlapping_content_width = new PitchQodeField(
	"text",
	"frame_around_overlapping_content_width",
	"",
	esc_html__( "Frame width (px)", 'pitch' ),
	esc_html__( "Enter the width of the frame (default is 15)", 'pitch' ),
	array(),
	array( "col_width" => 1 )
);
$frame_around_overlapping_content_container->addChild(
	"frame_around_overlapping_content_width",
	$frame_around_overlapping_content_width
);

$frame_around_overlapping_content_color = new PitchQodeField(
	"color",
	"frame_around_overlapping_content_color",
	"",
	esc_html__( "Frame Color", 'pitch' ),
	esc_html__( "Choose a color for frame", 'pitch' )
);
$frame_around_overlapping_content_container->addChild(
	"frame_around_overlapping_content_color",
	$frame_around_overlapping_content_color
);

$frame_around_overlapping_content_pattern = new PitchQodeField(
	"image",
	"frame_around_overlapping_content_pattern",
	"",
	esc_html__( "Pattern Image", 'pitch' ),
	esc_html__( "Choose an image to be used as a pattern in the frame around the overlapping content", 'pitch' )
);
$frame_around_overlapping_content_container->addChild(
	"frame_around_overlapping_content_pattern",
	$frame_around_overlapping_content_pattern
);

$boxed = new PitchQodeField(
	"yesno",
	"boxed",
	"no",
	esc_html__( "Boxed layout", 'pitch' ),
	esc_html__( "Enabling this option will display site content in grid", 'pitch' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_boxed_container"
	)
);
$panel1->addChild(
	"boxed",
	$boxed
);

$boxed_container = new PitchQodeContainer(
	"boxed_container",
	"boxed",
	"no"
);
$panel1->addChild(
	"boxed_container",
	$boxed_container
);

$spacing_arround_content = new PitchQodeField(
	"yesno",
	"spacing_arround_content",
	"no",
	esc_html__( "Spacing around content", 'pitch' ),
	esc_html__( "Enabling this option will set a spacing around the boxed content", 'pitch' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_spacing_arround_content_container"
	)
);
$boxed_container->addChild(
	"spacing_arround_content",
	$spacing_arround_content
);

$spacing_arround_content_container = new PitchQodeContainer(
	"spacing_arround_content_container",
	"spacing_arround_content",
	"no"
);
$boxed_container->addChild(
	"spacing_arround_content_container",
	$spacing_arround_content_container
);

$spacing_amount = new PitchQodeField(
	"text",
	"spacing_amount",
	"",
	esc_html__( "Spacing amount (px)", 'pitch' ),
	esc_html__( "Enter the amount for the spacing around boxed content (default is 25)", 'pitch' ),
	array(),
	array( "col_width" => 1 )
);
$spacing_arround_content_container->addChild(
	"spacing_amount",
	$spacing_amount
);

$footer_in_content = new PitchQodeField(
	"yesno",
	"footer_in_content",
	"no",
	esc_html__( "Include footer in content area", 'pitch' ),
	esc_html__( "Enabling this option will include the footer in the content area, so the set spacing will wrap around the footer area as well. Otherwise the spacing will separate the footer and content.", 'pitch' )
);
$spacing_arround_content_container->addChild(
	"footer_in_content",
	$footer_in_content
);

$frame_around_content = new PitchQodeField(
	"yesno",
	"frame_around_content",
	"no",
	esc_html__( "Frame around content", 'pitch' ),
	esc_html__( "Enabling this option will set a frame around the content", 'pitch' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_frame_around_content_container"
	)
);
$spacing_arround_content_container->addChild(
	"frame_around_content",
	$frame_around_content
);

$frame_around_content_container = new PitchQodeContainer(
	"frame_around_content_container",
	"frame_around_content",
	"no"
);
$spacing_arround_content_container->addChild(
	"frame_around_content_container",
	$frame_around_content_container
);

$frame_around_content_width = new PitchQodeField(
	"text",
	"frame_around_content_width",
	"",
	esc_html__( "Frame width (px)", 'pitch' ),
	esc_html__( "Enter the width of the frame (default is 15)", 'pitch' ),
	array(),
	array( "col_width" => 1 )
);
$frame_around_content_container->addChild(
	"frame_around_content_width",
	$frame_around_content_width
);

$frame_around_content_color = new PitchQodeField(
	"color",
	"frame_around_content_color",
	"",
	esc_html__( "Frame Color", 'pitch' ),
	esc_html__( "Choose a color for frame", 'pitch' )
);
$frame_around_content_container->addChild(
	"frame_around_content_color",
	$frame_around_content_color
);

$frame_around_content_pattern = new PitchQodeField(
	"image",
	"frame_around_content_pattern",
	"",
	esc_html__( "Pattern Image", 'pitch' ),
	esc_html__( "Choose an image to be used as a pattern in the frame around the content", 'pitch' )
);
$frame_around_content_container->addChild(
	"frame_around_content_pattern",
	$frame_around_content_pattern
);

$background_color_box = new PitchQodeField(
	"color",
	"background_color_box",
	"",
	esc_html__( "Page Background Color", 'pitch' ),
	esc_html__( "Choose the page background (body) color. Default color is #f5f5f5.", 'pitch' )
);
$boxed_container->addChild(
	"background_color_box",
	$background_color_box
);

$background_image = new PitchQodeField(
	"image",
	"background_image",
	"",
	esc_html__( "Background Image", 'pitch' ),
	esc_html__( "Choose an image to be displayed in background", 'pitch' )
);
$boxed_container->addChild(
	"background_image",
	$background_image
);

$pattern_background_image = new PitchQodeField(
	"image",
	"pattern_background_image",
	"",
	esc_html__( "Background Pattern", 'pitch' ),
	esc_html__( "Choose an image to be used as background pattern", 'pitch' )
);
$boxed_container->addChild(
	"pattern_background_image",
	$pattern_background_image
);

$background_image_attachment = new PitchQodeField(
	"select",
	"background_image_attachment",
	"fixed",
	esc_html__( "Background Attachment", 'pitch' ),
	esc_html__( "Choose background attachment behavior", 'pitch' ),
	array(
		"fixed" => esc_html__( "Fixed", 'pitch' ),
		"scroll" => esc_html__( "Scroll", 'pitch' )
	)
);
$boxed_container->addChild(
	"background_image_attachment",
	$background_image_attachment
);

$boxed_padding_general = new PitchQodeField(
	"text",
	"boxed_padding_general",
	"",
	esc_html__( "Left/Right Padding on Content (%)", 'pitch' ),
	esc_html__( "Insert left(right) padding that will apply generaly", 'pitch' ),
	array(),
	array( "col_width" => 3 )
);
$boxed_container->addChild(
	"boxed_padding_general",
	$boxed_padding_general
);

$boxed_padding_on_header = new PitchQodeField(
	"yesno",
	"boxed_padding_on_header",
	"no",
	esc_html__( "Left/Right Padding Affects Header", 'pitch' ),
	esc_html__( "By enabling this option the left/right padding will affect header", 'pitch' )
);
$boxed_container->addChild(
	"boxed_padding_on_header",
	$boxed_padding_on_header
);

$boxed_padding_on_header_footer = new PitchQodeField(
	"yesno",
	"boxed_padding_on_header_footer",
	"no",
	esc_html__( "Left/Right Padding Affects Header and Footer", 'pitch' ),
	esc_html__( "By enabling this option the left/right padding will affect header and footer also", 'pitch' )
);
$boxed_container->addChild(
	"boxed_padding_on_header_footer",
	$boxed_padding_on_header_footer
);

$boxed_padding_on_title_content = new PitchQodeField(
	"yesno",
	"boxed_padding_on_title_content",
	"no",
	esc_html__( "Left/Right Padding Affects Title Content", 'pitch' ),
	esc_html__( "By enabling this option the left/right padding will affect title content", 'pitch' )
);
$boxed_container->addChild(
	"boxed_padding_on_title_content",
	$boxed_padding_on_title_content
);

$boxed_padding_on_title_container = new PitchQodeField(
	"yesno",
	"boxed_padding_on_title_container",
	"no",
	esc_html__( "Left/Right Padding Affects Title Container", 'pitch' ),
	esc_html__( "By enabling this option the left/right padding will affect title container (including title image)", 'pitch' )
);
$boxed_container->addChild(
	"boxed_padding_on_title_container",
	$boxed_padding_on_title_container
);

$paspartu = new PitchQodeField(
	"yesno",
	"paspartu",
	"no",
	esc_html__( "Passepartout", 'pitch' ),
	esc_html__( "Enabling this option will display passepartout around site content", 'pitch' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_paspartu_container"
	)
);
$panel1->addChild(
	"paspartu",
	$paspartu
);

$paspartu_container = new PitchQodeContainer(
	"paspartu_container",
	"paspartu",
	"no"
);
$panel1->addChild(
	"paspartu_container",
	$paspartu_container
);

$paspartu_color = new PitchQodeField(
	"color",
	"paspartu_color",
	"",
	esc_html__( "Passepartout Color", 'pitch' ),
	esc_html__( "Choose passepartout color, default value is #ffffff", 'pitch' )
);
$paspartu_container->addChild(
	"paspartu_color",
	$paspartu_color
);

$paspartu_width = new PitchQodeField(
	"text",
	"paspartu_width",
	"",
	esc_html__( "Passepartout Size (%)", 'pitch' ),
	esc_html__( "Enter size amount for passepartout, default value is 2% (the percent is in relation to site width)", 'pitch' ),
	array(),
	array( "col_width" => 3 )
);
$paspartu_container->addChild(
	"paspartu_width",
	$paspartu_width
);

$paspartu_border_on_edges = new PitchQodeField(
	"yesno",
	"paspartu_border_on_edges",
	"no",
	esc_html__( "Border on passepartout edges", 'pitch' ),
	esc_html__( "Enabling this option will display 1px border on passepartout, only if top and bottom passepartouts are fixed", 'pitch' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_paspartu_border_on_edges_container"
	)
);
$paspartu_container->addChild(
	"paspartu_border_on_edges",
	$paspartu_border_on_edges
);

$paspartu_border_on_edges_container = new PitchQodeContainer(
	"paspartu_border_on_edges_container",
	"paspartu_border_on_edges",
	"no"
);
$paspartu_container->addChild(
	"paspartu_border_on_edges_container",
	$paspartu_border_on_edges_container
);

$paspartu_border_on_edges_color = new PitchQodeField(
	"color",
	"paspartu_border_on_edges_color",
	"",
	esc_html__( "Border Color", 'pitch' ),
	esc_html__( "Choose border color, default value is #e6e6e6", 'pitch' )
);
$paspartu_border_on_edges_container->addChild(
	"paspartu_border_on_edges_color",
	$paspartu_border_on_edges_color
);

$paspartu_header_alignment = new PitchQodeField(
	"yesno",
	"paspartu_header_alignment",
	"no",
	esc_html__( "Align Header With Passepartout", 'pitch' ),
	esc_html__( "Enabling this option will align header content with passepartout borders", 'pitch' )
);
$paspartu_container->addChild(
	"paspartu_header_alignment",
	$paspartu_header_alignment
);

$paspartu_below_tittle = new PitchQodeField(
	"yesno",
	"paspartu_below_tittle",
	"no",
	esc_html__( "Passepartout Below Title", 'pitch' ),
	esc_html__( "Enabling this option will place passepartout below title", 'pitch' )
);
$paspartu_container->addChild(
	"paspartu_below_tittle",
	$paspartu_below_tittle
);

$paspartu_header_inside = new PitchQodeField(
	"yesno",
	"paspartu_header_inside",
	"no",
	esc_html__( "Set Header Inside Passepartout", 'pitch' ),
	esc_html__( "Enabling this option will set the whole header between the left and right border of passepartout", 'pitch' )
);
$paspartu_container->addChild(
	"paspartu_header_inside",
	$paspartu_header_inside
);

$vertical_menu_inside_paspartu = new PitchQodeField(
	"yesno",
	"vertical_menu_inside_paspartu",
	"yes",
	esc_html__( "Vertical Menu Inside Passepartout", 'pitch' ),
	""
);
$paspartu_container->addChild(
	"vertical_menu_inside_paspartu",
	$vertical_menu_inside_paspartu
);

$paspartu_footer_alignment = new PitchQodeField(
	"yesno",
	"paspartu_footer_alignment",
	"no",
	esc_html__( "Align Footer With Passepartout", 'pitch' ),
	esc_html__( "Enabling this option will align footer content with passepartout borders", 'pitch' )
);
$paspartu_container->addChild(
	"paspartu_footer_alignment",
	$paspartu_footer_alignment
);

$paspartu_on_top = new PitchQodeField(
	"yesno",
	"paspartu_on_top",
	"yes",
	esc_html__( "Top Passepartout", 'pitch' ),
	esc_html__( "Disabling this option will disable top part of passepartout", 'pitch' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_paspartu_on_top_fixed_container"
	)
);
$paspartu_container->addChild(
	"paspartu_on_top",
	$paspartu_on_top
);

$paspartu_on_top_fixed_container = new PitchQodeContainer(
	"paspartu_on_top_fixed_container",
	"paspartu_on_top",
	"no"
);
$paspartu_container->addChild(
	"paspartu_on_top_fixed_container",
	$paspartu_on_top_fixed_container
);

$paspartu_on_top_fixed = new PitchQodeField(
	"yesno",
	"paspartu_on_top_fixed",
	"no",
	esc_html__( "Fix Top Passepartout", 'pitch' ),
	esc_html__( "Enabling this option will fix top part of passepartout to the top of the screen", 'pitch' )
);
$paspartu_on_top_fixed_container->addChild(
	"paspartu_on_top_fixed",
	$paspartu_on_top_fixed
);

$paspartu_on_bottom_slider_container = new PitchQodeContainer(
	"paspartu_on_bottom_slider_container",
	"",
	""
);
$paspartu_container->addChild(
	"paspartu_on_bottom_slider_container",
	$paspartu_on_bottom_slider_container
);

$paspartu_on_bottom_slider = new PitchQodeField(
	"yesno",
	"paspartu_on_bottom_slider",
	"no",
	esc_html__( "Show Bottom Passepartout on Select Slider", 'pitch' ),
	esc_html__( "Enabling this option will show bottom passepartout on Select Slider", 'pitch' )
);
$paspartu_on_bottom_slider_container->addChild(
	"paspartu_on_bottom_slider",
	$paspartu_on_bottom_slider
);

$paspartu_on_bottom = new PitchQodeField(
	"yesno",
	"paspartu_on_bottom",
	"yes",
	esc_html__( "Bottom Passepartout", 'pitch' ),
	esc_html__( "Disabling this option will disable bottom part of passepartout", 'pitch' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_paspartu_on_bottom_fixed_container"
	)
);
$paspartu_container->addChild(
	"paspartu_on_bottom",
	$paspartu_on_bottom
);

$paspartu_on_bottom_fixed_container = new PitchQodeContainer(
	"paspartu_on_bottom_fixed_container",
	"paspartu_on_bottom",
	"no"
);
$paspartu_container->addChild(
	"paspartu_on_bottom_fixed_container",
	$paspartu_on_bottom_fixed_container
);

$paspartu_on_bottom_fixed = new PitchQodeField(
	"yesno",
	"paspartu_on_bottom_fixed",
	"no",
	esc_html__( "Fix Bottom Passepartout", 'pitch' ),
	esc_html__( "Enabling this option will fix bottom part of passepartout to the bottom of the screen", 'pitch' )
);
$paspartu_on_bottom_fixed_container->addChild(
	"paspartu_on_bottom_fixed",
	$paspartu_on_bottom_fixed
);

$paspartu_portfolio_full_width = new PitchQodeField(
	"yesno",
	"paspartu_portfolio_full_width",
	"no",
	esc_html__( "Full Width Portfolio List in Passepartout", 'pitch' ),
	esc_html__( "Enabling this option will set portfolio lists within the passepartout to full width of content; otherwise there is a small padding between portfolio and passepartout", 'pitch' )
);
$paspartu_container->addChild(
	"paspartu_portfolio_full_width",
	$paspartu_portfolio_full_width
);

$content_grid_position = new PitchQodeField(
	"select",
	"content_grid_position",
	"",
	esc_html__( "Position of Content in Grid", 'pitch' ),
	esc_html__( "Set position of content in grid", 'pitch' ),
	array(
		"default" => esc_html__( "Default", 'pitch' ),
		"left" => esc_html__( "Left", 'pitch' ),
		"right" => esc_html__( "Right", 'pitch' )
	)
);
$panel1->addChild(
	"content_grid_position",
	$content_grid_position
);

$content_predefined_width = new PitchQodeField(
	"select",
	"content_predefined_width",
	"grid_1300",
	esc_html__( "Initial Width of Content", 'pitch' ),
	esc_html__( "Choose the initial width of content which is in grid (Applies to pages set to 'Default Template' and rows set to 'In Grid' )", 'pitch' ),
	array(
		"" => esc_html__( "1100px", 'pitch' ),
		"grid_1300" => esc_html__( "1300px - default", 'pitch' ),
		"grid_1200" => esc_html__( "1200px", 'pitch' ),
		"grid_1000" => esc_html__( "1000px", 'pitch' ),
		"grid_800" => esc_html__( "800px", 'pitch' )
	)
);
$panel1->addChild(
	"content_predefined_width",
	$content_predefined_width
);

$preload_pattern_image = new PitchQodeField(
	"image",
	"preload_pattern_image",
	PITCH_ROOT . "/img/preload_pattern.png",
	esc_html__( "Preload Pattern Image", 'pitch' ),
	esc_html__( "Choose preload pattern image to be displayed until images are loaded ", 'pitch' )
);
$panel1->addChild(
	"preload_pattern_image",
	$preload_pattern_image
);

$element_appear_amount = new PitchQodeField(
	"text",
	"element_appear_amount",
	"",
	esc_html__( "Element Appearance (px)", 'pitch' ),
	esc_html__( "For animated elements, set distance (related to browser bottom) to start the animation", 'pitch' ),
	array(),
	array( "col_width" => 3 )
);
$panel1->addChild(
	"element_appear_amount",
	$element_appear_amount
);

// Settings

$panel4 = new PitchQodePanel(
	esc_html__( "Settings", 'pitch' ),
	"settings"
);
$generalPage->addChild(
	"panel4",
	$panel4
);

$page_transitions = new PitchQodeField(
	"select",
	"page_transitions",
	"0",
	esc_html__( "Page Transition", 'pitch' ),
	esc_html__( 'Choose a a type of transition between loading pages. In order for animation to work properly, you must choose "Post name" in permalinks settings', 'pitch' ),
	array(
		0 => "No animation",
		1 => "Up/Down",
		2 => "Fade",
		3 => "Up/Down (In) / Fade (Out)",
		4 => "Left/Right"
	),
	array(
		"dependence" => true,
		"hide"       => array(
			"0" => "#qodef_ajax_animate_header_container",
			"1" => "",
			"2" => "",
			"3" => "",
			"4" => ""
		),
		"show"       => array(
			"0" => "",
			"1" => "#qodef_ajax_animate_header_container",
			"2" => "#qodef_ajax_animate_header_container",
			"3" => "#qodef_ajax_animate_header_container",
			"4" => "#qodef_ajax_animate_header_container"
		)
	),
	"enable_grid_elements",
	array( "yes" )
);
$panel4->addChild(
	"page_transitions",
	$page_transitions
);

$page_transitions_notice = new PitchQodeNotice(
	esc_html__( "Page Transition", 'pitch' ),
	esc_html__( 'Choose a a type of transition between loading pages. In order for animation to work properly, you must choose "Post name" in permalinks settings', 'pitch' ),
	esc_html__( "Page transition is disabled because VC Grid is Enabled", 'pitch' ),
	"enable_grid_elements",
	"no"
);
$panel4->addChild(
	"page_transitions_notice",
	$page_transitions_notice
);

$ajax_animate_header_container = new PitchQodeContainer(
	"ajax_animate_header_container",
	"page_transitions",
	"0"
);
$panel4->addChild(
	"ajax_animate_header_container",
	$ajax_animate_header_container
);

$ajax_animate_header = new PitchQodeField(
	"yesno",
	"ajax_animate_header",
	"no",
	esc_html__( "Animate Header", 'pitch' ),
	esc_html__( "Enabling this option will include the header area in the Ajax Page Transition Animations", 'pitch' )
);
$ajax_animate_header_container->addChild(
	"ajax_animate_header",
	$ajax_animate_header
);

$loading_animation = new PitchQodeField(
	"onoff",
	"loading_animation",
	"off",
	esc_html__( "Loading Animation", 'pitch' ),
	esc_html__( "Enabling this option will display animation while page loads", 'pitch' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_loading_animation_container"
	)
);
$panel4->addChild(
	"loading_animation",
	$loading_animation
);

$loading_animation_container = new PitchQodeContainer(
	"loading_animation_container",
	"loading_animation",
	"off"
);
$panel4->addChild(
	"loading_animation_container",
	$loading_animation_container
);

$group1 = new PitchQodeGroup(
	esc_html__( "Loading Animation Graphic", 'pitch' ),
	esc_html__( "Choose type and color of preload graphic animation", 'pitch' )
);
$loading_animation_container->addChild(
	"group1",
	$group1
);

$row1 = new PitchQodeRow();
$group1->addChild(
	"row1",
	$row1
);

$loading_animation_spinner = new PitchQodeField(
	"selectsimple",
	"loading_animation_spinner",
	"pulse",
	esc_html__( "Spinner", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	array(
		"pulse" => esc_html__( "Pulse", 'pitch' ),
		"double_pulse" => esc_html__( "Double Pulse", 'pitch' ),
		"cube" => esc_html__( "Cube", 'pitch' ),
		"rotating_cubes" => esc_html__( "Rotating Cubes", 'pitch' ),
		"stripes" => esc_html__( "Stripes", 'pitch' ),
		"wave" => esc_html__( "Wave", 'pitch' ),
		"two_rotating_circles" => esc_html__( "2 Rotating Circles", 'pitch' ),
		"five_rotating_circles" => esc_html__( "5 Rotating Circles", 'pitch' ),
		"atom" => esc_html__( "Atom", 'pitch' ),
		"clock" => esc_html__( "Clock", 'pitch' ),
		"mitosis" => esc_html__( "Mitosis", 'pitch' ),
		"lines" => esc_html__( "Lines", 'pitch' ),
		"fussion" => esc_html__( "Fussion", 'pitch' ),
		"wave_circles" => esc_html__( "Wave Circles", 'pitch' ),
		"pulse_circles" => esc_html__( "Pulse Circles", 'pitch' )
	)
);
$row1->addChild(
	"loading_animation_spinner",
	$loading_animation_spinner
);

$spinner_color = new PitchQodeField(
	"colorsimple",
	"spinner_color",
	"",
	esc_html__( "Spinner Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"spinner_color",
	$spinner_color
);

$loading_image = new PitchQodeField(
	"image",
	"loading_image",
	"",
	esc_html__( "Loading Image", 'pitch' ),
	esc_html__( 'Upload custom image to be displayed while page loads (Note: Page Transition must not be set to "No Animation")', 'pitch' )
);
$loading_animation_container->addChild(
	"loading_image",
	$loading_image
);

$smooth_scroll = new PitchQodeField(
	"yesno",
	"smooth_scroll",
	"yes",
	esc_html__( "Smooth Scroll", 'pitch' ),
	esc_html__( "Enabling this option will perform a smooth scrolling effect on every page (except on Mac and touch devices)", 'pitch' )
);
$panel4->addChild(
	"smooth_scroll",
	$smooth_scroll
);

$elements_animation_on_touch = new PitchQodeField(
	"yesno",
	"elements_animation_on_touch",
	"no",
	esc_html__( "Elements Animation on Mobile/Touch Devices", 'pitch' ),
	esc_html__( "Enabling this option will allow elements (shortcodes) to animate on mobile / touch devices", 'pitch' )
);
$panel4->addChild(
	"elements_animation_on_touch",
	$elements_animation_on_touch
);

$ios_format_detection = new PitchQodeField(
	"yesno",
	"ios_format_detection",
	"no",
	esc_html__( "Disable Format Detection in Safari on iOS", 'pitch' ),
	esc_html__( "This option disables automatic detection of possible phone numbers in a webpage in Safari on iOS.", 'pitch' )
);
$panel4->addChild(
	"ios_format_detection",
	$ios_format_detection
);

$show_back_button = new PitchQodeField(
	"yesno",
	"show_back_button",
	"yes",
	esc_html__( "Show 'Back To Top Button'", 'pitch' ),
	esc_html__( "Enabling this option will display a Back to Top button on every page", 'pitch' )
);
$panel4->addChild(
	"show_back_button",
	$show_back_button
);

$responsiveness = new PitchQodeField(
	"yesno",
	"responsiveness",
	"yes",
	esc_html__( "Responsiveness", 'pitch' ),
	esc_html__( "Enabling this option will make all pages responsive", 'pitch' )
);
$panel4->addChild(
	"responsiveness",
	$responsiveness
);

$favicon_image = new PitchQodeField(
	"image",
	"favicon_image",
	PITCH_ROOT . "/img/favicon.ico",
	esc_html__( "Favicon Image", 'pitch' ),
	esc_html__( "Choose a favicon image to be displayed", 'pitch' )
);
$panel4->addChild(
	"favicon_image",
	$favicon_image
);

$internal_no_ajax_links = new PitchQodeField(
	"textarea",
	"internal_no_ajax_links",
	"",
	esc_html__( "List of Internal URLs Loaded Without AJAX (Separated With Comma)", 'pitch' ),
	esc_html__( "To disable AJAX transitions on certain pages, enter their full URLs here (for example: http://www.mydomain.com/forum/)", 'pitch' )
);
$panel4->addChild(
	"internal_no_ajax_links",
	$internal_no_ajax_links
);

// Custom Code

$panel3 = new PitchQodePanel(
	esc_html__( "Custom Code", 'pitch' ),
	"custom_code"
);
$generalPage->addChild(
	"panel3",
	$panel3
);

$custom_css = new PitchQodeField(
	"textarea",
	"custom_css",
	"",
	esc_html__( "Custom CSS", 'pitch' ),
	esc_html__( "Enter your custom CSS here", 'pitch' )
);
$panel3->addChild(
	"custom_css",
	$custom_css
);

$custom_svg_css = new PitchQodeField(
	"textarea",
	"custom_svg_css",
	"",
	esc_html__( "Custom SVG CSS", 'pitch' ),
	esc_html__( "Enter your SVG CSS here", 'pitch' )
);
$panel3->addChild(
	"custom_svg_css",
	$custom_svg_css
);

$custom_js = new PitchQodeField(
	"textarea",
	"custom_js",
	"",
	esc_html__( "Custom JS", 'pitch' ),
	esc_html__( 'Enter your custom Javascript here (jQuery selector is "$j" because of the conflict mode)', 'pitch' )
);
$panel3->addChild(
	"custom_js",
	$custom_js
);

// SEO

$panel2 = new PitchQodePanel(
	esc_html__( "SEO", 'pitch' ),
	"seo"
);
$generalPage->addChild(
	"panel2",
	$panel2
);

$disable_qode_seo = new PitchQodeField(
	"yesno",
	"disable_qode_seo",
	"no",
	esc_html__( "Disable SEO", 'pitch' ),
	esc_html__( "Enabling this option will turn off SEO", 'pitch' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "#qodef_disable_qode_seo_container",
		"dependence_show_on_yes" => ""
	)
);
$panel2->addChild(
	"disable_qode_seo",
	$disable_qode_seo
);

$disable_qode_seo_container = new PitchQodeContainer(
	"disable_qode_seo_container",
	"disable_qode_seo",
	"yes"
);
$panel2->addChild(
	"disable_qode_seo_container",
	$disable_qode_seo_container
);

$meta_keywords = new PitchQodeField(
	"textarea",
	"meta_keywords",
	"",
	esc_html__( "Meta Keywords", 'pitch' ),
	esc_html__( "Add relevant keywords separated with commas to improve SEO", 'pitch' )
);
$disable_qode_seo_container->addChild(
	"meta_keywords",
	$meta_keywords
);

$meta_description = new PitchQodeField(
	"textarea",
	"meta_description",
	"",
	esc_html__( "Meta Description", 'pitch' ),
	esc_html__( "Enter a short description of the website for SEO", 'pitch' )
);
$disable_qode_seo_container->addChild(
	"meta_description",
	$meta_description
);

// Google Maps

$panel_google_maps = new PitchQodePanel(
	esc_html__( "Google Maps", 'pitch' ),
	"google_maps"
);
$generalPage->addChild(
	"panel_google_maps",
	$panel_google_maps
);

$google_maps_api_key = new PitchQodeField(
	"text",
	"google_maps_api_key",
	"",
	esc_html__( "Google Maps Api Key", 'pitch' ),
	esc_html__( "Insert your Google Maps API key here.For instructions on how to create a Google Maps API key, please refer to our to our documentation.", 'pitch' )
);
$panel_google_maps->addChild(
	"google_maps_api_key",
	$google_maps_api_key
);
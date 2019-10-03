<?php

$qode_pages = array();
$pages      = get_pages();
foreach ( $pages as $page ) {
	$qode_pages[ $page->ID ] = $page->post_title;
}

//Portfolio Images

$qodePortfolioImages = new QodePitchMetaBox(
	"portfolio_page",
	esc_html__( "Portfolio Images (multiple upload)", 'pitch' )
);
$pitch_qode_framework->qodeMetaBoxes->addMetaBox(
	"portfolio_images",
	$qodePortfolioImages
);

$qode_portfolio_image_gallery = new PitchQodeMultipleImages(
	"qode_portfolio-image-gallery",
	esc_html__( "Portfolio Images", 'pitch' ),
	esc_html__( "Choose your portfolio images", 'pitch' )
);
$qodePortfolioImages->addChild(
	"qode_portfolio-image-gallery",
	$qode_portfolio_image_gallery
);

$qodePortfolioImagesVideos2 = new QodePitchMetaBox(
	"portfolio_page",
	esc_html__( "Portfolio Images/Videos (single upload)", 'pitch' )
);
$pitch_qode_framework->qodeMetaBoxes->addMetaBox(
	"portfolio_images_videos2",
	$qodePortfolioImagesVideos2
);

$qode_portfolio_images_videos2 = new PitchQodeImagesVideosFramework(
	esc_html__( "Portfolio Images/Videos 2", 'pitch' ),
	esc_html__( "ThisIsDescription", 'pitch' )
);
$qodePortfolioImagesVideos2->addChild(
	"qode_portfolio_images_videos2",
	$qode_portfolio_images_videos2
);

//Portfolio Additional Sidebar Items

$qodeAdditionalSidebarItems = new QodePitchMetaBox(
	"portfolio_page",
	esc_html__( "Additional Portfolio Sidebar Items", 'pitch' )
);
$pitch_qode_framework->qodeMetaBoxes->addMetaBox(
	"portfolio_properties",
	$qodeAdditionalSidebarItems
);

$qode_portfolio_properties = new PitchQodeOptionsFramework(
	esc_html__( "Portfolio Properties", 'pitch' ),
	esc_html__( "ThisIsDescription", 'pitch' )
);
$qodeAdditionalSidebarItems->addChild(
	"qode_portfolio_properties",
	$qode_portfolio_properties
);

//General

$qodeGeneral = new QodePitchMetaBox(
	"portfolio_page",
	esc_html__( "General", 'pitch' )
);
$pitch_qode_framework->qodeMetaBoxes->addMetaBox(
	"portfolio_general",
	$qodeGeneral
);

$qode_page_background_color = new PitchQodeMetaField(
	"color",
	"qode_page_background_color",
	"",
	esc_html__( "Page Background Color", 'pitch' ),
	esc_html__( "Choose the page background (body) color", 'pitch' )
);
$qodeGeneral->addChild(
	"qode_page_background_color",
	$qode_page_background_color
);

$group1 = new PitchQodeGroup(
	esc_html__( "Content Style", 'pitch' ),
	esc_html__( "Define styles for Content area", 'pitch' )
);
$qodeGeneral->addChild(
	"group1",
	$group1
);

$row1 = new PitchQodeRow();
$group1->addChild(
	"row1",
	$row1
);

$qode_content_top_padding = new PitchQodeMetaField(
	"textsimple",
	"qode_content-top-padding",
	"",
	esc_html__( "Content Top Padding (px)", 'pitch' ),
	esc_html__( "This option control content top padding.", 'pitch' )
);
$row1->addChild(
	"qode_content-top-padding",
	$qode_content_top_padding
);

$qode_content_top_padding_mobile = new PitchQodeMetaField(
	"selectblanksimple",
	"qode_content-top-padding-mobile",
	"",
	esc_html__( "Set this top padding for mobile header", 'pitch' ),
	"",
	array(
		"no" => esc_html__( "No", 'pitch' ),
		"yes" => esc_html__( "Yes", 'pitch' )
	)
);
$row1->addChild(
	"qode_content-top-padding-mobile",
	$qode_content_top_padding_mobile
);

$qode_show_animation = new PitchQodeMetaField(
	"selectblank",
	"qode_show-animation",
	"",
	esc_html__( "Page Transition", 'pitch' ),
	esc_html__( 'Choose a type of transition between loading pages.', 'pitch' ),
	array(
		"no_animation" => esc_html__( "No Animation", 'pitch' ),
		"updown" => esc_html__( "Up / Down", 'pitch' ),
		"fade" => esc_html__( "Fade", 'pitch' ),
		"updown_fade" => esc_html__( "Up/Down (In) / Fade (Out)", 'pitch' ),
		"leftright" => esc_html__( "Left / Right", 'pitch' )
	),
	array(),
	"enable_grid_elements",
	array( "yes" )
);
$qodeGeneral->addChild(
	"qode_show-animation",
	$qode_show_animation
);

$page_transitions_notice = new PitchQodeNotice(
	esc_html__( "Page Transition", 'pitch' ),
	esc_html__( 'Choose a a type of transition between loading pages. In order for animation to work properly, you must choose "Post name" in permalinks settings', 'pitch' ),
	esc_html__( "AJAX Page transitions are disabled due to VC Grid Elements", 'pitch' ),
	"enable_grid_elements",
	"no"
);
$qodeGeneral->addChild(
	"page_transitions_notice",
	$page_transitions_notice
);

$qode_revolution_slider = new PitchQodeMetaField(
	"text",
	"qode_revolution-slider",
	"",
	esc_html__( "Layer Slider or Select Slider Shortcode", 'pitch' ),
	esc_html__( "Copy and paste your shortcode located in Select Slider -> Slider", 'pitch' )
);
$qodeGeneral->addChild(
	"qode_revolution-slider",
	$qode_revolution_slider
);

$qode_choose_portfolio_single_view = new PitchQodeMetaField(
	"selectblank",
	"qode_choose-portfolio-single-view",
	"",
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
	),
	array(
		"dependence" => true,
		"hide"       => array(
			""                       => "#qodef_qode_choose_number_of_portfolio_columns_container",
			"custom"                 => "#qodef_qode_choose_number_of_portfolio_columns_container",
			"big-slider"             => "#qodef_qode_choose_number_of_portfolio_columns_container",
			"floating-right"         => "#qodef_qode_choose_number_of_portfolio_columns_container",
			"floating-left"          => "#qodef_qode_choose_number_of_portfolio_columns_container",
			"fixed-right"            => "#qodef_qode_choose_number_of_portfolio_columns_container",
			"fixed-left"             => "#qodef_qode_choose_number_of_portfolio_columns_container",
			"masonry-gallery-top"    => "#qodef_qode_choose_number_of_portfolio_columns_container",
			"masonry-gallery-bottom" => "#qodef_qode_choose_number_of_portfolio_columns_container",
			"masonry-gallery-right"  => "#qodef_qode_choose_number_of_portfolio_columns_container",
			"central"                => "#qodef_qode_choose_number_of_portfolio_columns_container"
		),
		"show"       => array(
			"gallery"       => "#qodef_qode_choose_number_of_portfolio_columns_container",
			"gallery-right" => "#qodef_qode_choose_number_of_portfolio_columns_container"
		)
	)
);
$qodeGeneral->addChild(
	"qode_choose-portfolio-single-view",
	$qode_choose_portfolio_single_view
);

$qode_choose_number_of_portfolio_columns_container = new PitchQodeContainer(
	"qode_choose_number_of_portfolio_columns_container",
	"qode_choose-portfolio-single-view",
	"no",
	array( "", "1", "2", "3", "4", "5", "7" )
);
$qodeGeneral->addChild(
	"qode_choose_number_of_portfolio_columns_container",
	$qode_choose_number_of_portfolio_columns_container
);

$qode_choose_number_of_portfolio_columns = new PitchQodeMetaField(
	"selectblank",
	"qode_choose-number-of-portfolio-columns",
	"",
	esc_html__( "Number of Columns", 'pitch' ),
	esc_html__( 'Choose the number of columns for Portfolio Gallery type', 'pitch' ),
	array(
		"2" => esc_html__( "2 Columns", 'pitch' ),
		"3" => esc_html__( "3 Columns", 'pitch' ),
		"4" => esc_html__( "4 Columns", 'pitch' )
	)
);
$qode_choose_number_of_portfolio_columns_container->addChild(
	"qode_choose-number-of-portfolio-columns",
	$qode_choose_number_of_portfolio_columns
);

$qode_choose_portfolio_image_size = new PitchQodeMetaField(
	"select",
	"qode_choose-portfolio-image-size",
	"full",
	esc_html__( "Image Proportions", 'pitch' ),
	esc_html__( 'Choose image proportions for Portfolio Gallery type', 'pitch' ),
	array(
		"full" => esc_html__( "Original Size", 'pitch' ),
		"portfolio-square" => esc_html__( "Square", 'pitch' ),
		"portfolio-landscape" => esc_html__( "Landscape", 'pitch' ),
		"portfolio-portrait" => esc_html__( "Portrait", 'pitch' )
	)
);

$qode_choose_number_of_portfolio_columns_container->addChild(
	"qode_choose-portfolio-image-size",
	$qode_choose_portfolio_image_size
);

$qode_choose_portfolio_list_page = new PitchQodeMetaField(
	"selectblank",
	"qode_choose-portfolio-list-page",
	"",
	esc_html__( 'Back To Link', 'pitch' ),
	esc_html__( 'Choose "Back To" page to link from portfolio Single Project page', 'pitch' ),
	$qode_pages
);
$qodeGeneral->addChild(
	"qode_choose-portfolio-list-page",
	$qode_choose_portfolio_list_page
);

$qode_portfolio_external_link = new PitchQodeMetaField(
	"text",
	"qode_portfolio-external-link",
	"",
	esc_html__( "Portfolio External Link", 'pitch' ),
	esc_html__( "Enter URL to link from Portfolio List page", 'pitch' )
);
$qodeGeneral->addChild(
	"qode_portfolio-external-link",
	$qode_portfolio_external_link
);

$qode_portfolio_lightbox_link = new PitchQodeMetaField(
	"text",
	"qode_portfolio-lightbox-link",
	"",
	esc_html__( "Portfolio Custom Lighbox Content", 'pitch' ),
	esc_html__( "Enter URL to link custom image/video content inside lightbox", 'pitch' )
);
$qodeGeneral->addChild(
	"qode_portfolio-lightbox-link",
	$qode_portfolio_lightbox_link
);

$qode_portfolio_type_masonry_style = new PitchQodeMetaField(
	"select",
	"qode_portfolio_type_masonry_style",
	"",
	esc_html__( "Dimensions for Masonry", 'pitch' ),
	esc_html__( 'Choose image layout when it appears in Masonry type portfolio lists', 'pitch' ),
	array(
		"default" => esc_html__( "Default", 'pitch' ),
		"large_width" => esc_html__( "Large width", 'pitch' ),
		"large_height" => esc_html__( "Large height", 'pitch' ),
		"large_width_height" => esc_html__( "Large width/height", 'pitch' )
	)
);
$qodeGeneral->addChild(
	"qode_portfolio_type_masonry_style",
	$qode_portfolio_type_masonry_style
);

$qode_portfolio_masonry_parallax = new PitchQodeMetaField(
	"select",
	"qode_portfolio_masonry_parallax",
	"no",
	esc_html__( "Set Masonry Item in Parallax", 'pitch' ),
	"",
	array(
		"no" => esc_html__( "No", 'pitch' ),
		"yes" => esc_html__( "Yes", 'pitch' )
	)
);
$qodeGeneral->addChild(
	"qode_portfolio_masonry_parallax",
	$qode_portfolio_masonry_parallax
);

$qode_portfolio_disable_comments = new PitchQodeMetaField(
	"selectblank",
	"qode_portfolio-hide-comments",
	"",
	esc_html__( "Disable Comments", 'pitch' ),
	"",
	array(
		"no" => esc_html__( "No", 'pitch' ),
		"yes" => esc_html__( "Yes", 'pitch' )
	)
);
$qodeGeneral->addChild(
	"qode_portfolio-hide-comments",
	$qode_portfolio_disable_comments
);

$qode_image_hover_container = new PitchQodeGroup(
	esc_html__( "Image Hover Style", 'pitch' ),
	esc_html__( "Define style for hover color", 'pitch' )
);
$qodeGeneral->addChild(
	"qode_image_hover_container",
	$qode_image_hover_container
);

$row11 = new PitchQodeRow();
$qode_image_hover_container->addChild(
	"row11",
	$row11
);

$qode_portfolio_hover_color = new PitchQodeMetaField(
	"colorsimple",
	"qode_portfolio-hover-color",
	"",
	esc_html__( "Portfolio Hover Color", 'pitch' ),
	""
);
$row11->addChild(
	"qode_portfolio-hover-color",
	$qode_portfolio_hover_color
);

$qode_portfolio_hover_color_opacity = new PitchQodeMetaField(
	"textsimple",
	"qode_portfolio-hover-color-opacity",
	"",
	esc_html__( "Portfolio Hover Color Opacity", 'pitch' ),
	""
);
$row11->addChild(
	"qode_portfolio-hover-color-opacity",
	$qode_portfolio_hover_color_opacity
);

$qode_portfolio_enable_animation = new PitchQodeMetaField(
	"selectblank",
	"qode_portfolio-enable_animation",
	"",
	esc_html__( "Enable Loading Animation for Images", 'pitch' ),
	"",
	array(
		"yes" => esc_html__( "Yes", 'pitch' ),
		"no" => esc_html__( "No", 'pitch' )
	)
);
$qodeGeneral->addChild(
	"qode_portfolio-enable_animation",
	$qode_portfolio_enable_animation
);

$qode_portfolio_hide_title_in_info = new PitchQodeMetaField(
	"select",
	"qode_portfolio_hide_title_in_info",
	"no",
	esc_html__( "Hide Title in Portfolio Info Section", 'pitch' ),
	"",
	array(
		"no" => esc_html__( "No", 'pitch' ),
		"yes" => esc_html__( "Yes", 'pitch' )
	)
);
$qodeGeneral->addChild(
	"qode_portfolio_hide_title_in_info",
	$qode_portfolio_hide_title_in_info
);

// Header

$qodeHeader = new QodePitchMetaBox(
	"portfolio_page",
	esc_html__( "Header", 'pitch' ),
	"vertical_area",
	array( "yes" )
);
$pitch_qode_framework->qodeMetaBoxes->addMetaBox(
	"porfolio_header",
	$qodeHeader
);

$qode_header_style = new PitchQodeMetaField(
	"selectblank",
	"qode_header-style",
	"",
	esc_html__( "Header Skin", 'pitch' ),
	esc_html__( "Choose a header style to make header elements (logo, main menu, side menu button) in that predefined style", 'pitch' ),
	array(
		"light" => esc_html__( "Light", 'pitch' ),
		"dark" => esc_html__( "Dark", 'pitch' )
	)
);
$qodeHeader->addChild(
	"qode_header-style",
	$qode_header_style
);

$qode_header_style_on_scroll = new PitchQodeMetaField(
	"selectblank",
	"qode_header-style-on-scroll",
	"",
	esc_html__( "Enable Header Style on Scroll", 'pitch' ),
	esc_html__( "Enabling this option, header will change style on scroll (depending on row settings) to make header elements (logo, main menu, side menu button) in that style", 'pitch' ),
	array(
		"no" => esc_html__( "No", 'pitch' ),
		"yes" => esc_html__( "Yes", 'pitch' )
	)
);
$qodeHeader->addChild(
	"qode_header-style-on-scroll",
	$qode_header_style_on_scroll
);

$qode_header_color_per_page = new PitchQodeMetaField(
	"color",
	"qode_header_color_per_page",
	"",
	esc_html__( "Initial Header Bottom Background Color", 'pitch' ),
	esc_html__( "Choose a background color for header bottom area", 'pitch' )
);
$qodeHeader->addChild(
	"qode_header_color_per_page",
	$qode_header_color_per_page
);

$qode_header_color_transparency_per_page = new PitchQodeMetaField(
	"text",
	"qode_header_color_transparency_per_page",
	"",
	esc_html__( "Initial Header Bottom Transparency", 'pitch' ),
	esc_html__( "Choose a transparency for the header bottom background color (0 = fully transparent, 1 = opaque)", 'pitch' ),
	array(),
	array( "col_width" => 3 )
);
$qodeHeader->addChild(
	"qode_header_color_transparency_per_page",
	$qode_header_color_transparency_per_page
);

$qode_header_bottom_border_color = new PitchQodeMetaField(
	"color",
	"qode_header_bottom_border_color",
	"",
	esc_html__( "Initial Header Bottom Border Color", 'pitch' ),
	esc_html__( "Choose a bottom border color for header area", 'pitch' )
);
$qodeHeader->addChild(
	"qode_header_bottom_border_color",
	$qode_header_bottom_border_color
);

$qode_header_top_color_per_page = new PitchQodeMetaField(
	"color",
	"qode_header_top_color_per_page",
	"",
	esc_html__( "Initial Header Top Background Color", 'pitch' ),
	esc_html__( "Choose a background color for header top area", 'pitch' )
);
$qodeHeader->addChild(
	"qode_header_top_color_per_page",
	$qode_header_top_color_per_page
);

$qode_header_top_color_transparency_per_page = new PitchQodeMetaField(
	"text",
	"qode_header_top_color_transparency_per_page",
	"",
	esc_html__( "Initial Header Top Transparency", 'pitch' ),
	esc_html__( "Choose a transparency for the header top background color (0 = fully transparent, 1 = opaque)", 'pitch' ),
	array(),
	array( "col_width" => 3 )
);
$qodeHeader->addChild(
	"qode_header_top_color_transparency_per_page",
	$qode_header_top_color_transparency_per_page
);

$qode_page_scroll_amount_for_sticky = new PitchQodeMetaField(
	"text",
	"qode_page_scroll_amount_for_sticky",
	"",
	esc_html__( "Scroll amount for sticky header appearance (px)", 'pitch' ),
	esc_html__( "Define scroll amount for sticky header appearance", 'pitch' ),
	array(),
	array( "col_width" => 3 ),
	"header_bottom_appearance",
	array( "regular", "fixed", "fixed_hiding" )
);
$qodeHeader->addChild(
	"qode_page_scroll_amount_for_sticky",
	$qode_page_scroll_amount_for_sticky
);

$qode_page_hide_initial_sticky = new PitchQodeMetaField(
	"selectblank",
	"qode_page_hide_initial_sticky",
	"",
	esc_html__( "Hide Sticky Header Initially", 'pitch' ),
	esc_html__( "Enabling this option will initially hide the header, and it will only be displayed when the user scrolls down the page", 'pitch' ),
	array(
		"no" => esc_html__( "No", 'pitch' ),
		"yes" => esc_html__( "Yes", 'pitch' )
	)
);
$qodeHeader->addChild(
	"qode_page_hide_initial_sticky",
	$qode_page_hide_initial_sticky
);

// Side Menu Area

$qodeLeftMenuArea = new QodePitchMetaBox(
	"portfolio_page",
	esc_html__( "Side Menu Area", 'pitch' ),
	"vertical_area",
	array( "no" )
);
$pitch_qode_framework->qodeMetaBoxes->addMetaBox(
	"porfolio_left_menu",
	$qodeLeftMenuArea
);

$qode_page_vertical_area_transparency = new PitchQodeMetaField(
	"selectblank",
	"qode_page_vertical_area_transparency",
	"",
	esc_html__( "Enable transparent side menu area", 'pitch' ),
	esc_html__( "Enabling this option will make Left Menu background transparent ", 'pitch' ),
	array(
		"no" => esc_html__( "No", 'pitch' ),
		"yes" => esc_html__( "Yes", 'pitch' )
	)
);
$qodeLeftMenuArea->addChild(
	"qode_page_vertical_area_transparency",
	$qode_page_vertical_area_transparency
);

$qode_page_vertical_area_background = new PitchQodeMetaField(
	"color",
	"qode_page_vertical_area_background",
	"",
	esc_html__( "Side Menu Area Background Color", 'pitch' ),
	esc_html__( "Choose a color for Left Menu background", 'pitch' )
);
$qodeLeftMenuArea->addChild(
	"qode_page_vertical_area_background",
	$qode_page_vertical_area_background
);

$qode_page_vertical_area_background_opacity = new PitchQodeMetaField(
	"text",
	"qode_page_vertical_area_background_opacity",
	"",
	esc_html__( "Side Menu Area Background Opacity", 'pitch' ),
	esc_html__( "Choose a opacity for the Side Menu Area Background (0 = fully transparent, 1 = opaque)", 'pitch' ),
	array(),
	array( "col_width" => 3 )
);
$qodeLeftMenuArea->addChild(
	"qode_page_vertical_area_background_opacity",
	$qode_page_vertical_area_background_opacity
);

$qode_page_vertical_area_transparency_over_slider = new PitchQodeMetaField(
	"selectblank",
	"qode_page_vertical_area_transparency_over_slider",
	"",
	esc_html__( "Transparency Setting Takes Effect Only on Select Slider", 'pitch' ),
	esc_html__( "Enabling this option will ensure that the transparency set in the 'Side Menu Area Background Opacity' takes effect only when the side menu area is over the Qode Slider", 'pitch' ),
	array(
		"no" => esc_html__( "No", 'pitch' ),
		"yes" => esc_html__( "Yes", 'pitch' )
	)
);
$qodeLeftMenuArea->addChild(
	"qode_page_vertical_area_transparency_over_slider",
	$qode_page_vertical_area_transparency_over_slider
);

$qode_page_vertical_area_background_image = new PitchQodeMetaField(
	"image",
	"qode_page_vertical_area_background_image",
	"",
	esc_html__( "Side Menu Area Background Image", 'pitch' ),
	esc_html__( "Choose an image for Left Menu background", 'pitch' )
);
$qodeLeftMenuArea->addChild(
	"qode_page_vertical_area_background_image",
	$qode_page_vertical_area_background_image
);

$qode_page_disable_vertical_area_background_image = new PitchQodeMetaField(
	"selectblank",
	"qode_page_disable_vertical_area_background_image",
	"",
	esc_html__( "Disable Side Menu Area Background Image", 'pitch' ),
	esc_html__( "Enabling this option will hide background image in Side Menu", 'pitch' ),
	array(
		"no" => esc_html__( "No", 'pitch' ),
		"yes" => esc_html__( "Yes", 'pitch' )
	)
);
$qodeLeftMenuArea->addChild(
	"qode_page_disable_vertical_area_background_image",
	$qode_page_disable_vertical_area_background_image
);

// Title

$PitchQodeTitle = new QodePitchMetaBox(
	"portfolio_page",
	esc_html__( "Title", 'pitch' )
);
$pitch_qode_framework->qodeMetaBoxes->addMetaBox(
	"porfolio_title",
	$PitchQodeTitle
);

$qode_show_page_title = new PitchQodeMetaField(
	"selectblank",
	"qode_show-page-title",
	"",
	esc_html__( "Show Title Area", 'pitch' ),
	esc_html__( "Disabling this option will turn off page title area", 'pitch' ),
	array(
		"no" => esc_html__( "No", 'pitch' ),
		"yes" => esc_html__( "Yes", 'pitch' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			"no" => "#qodef_qode_page_title_area_container, #qodef-meta-box-portfolio_title_animations"
		),
		"show"       => array(
			""    => "#qodef_qode_page_title_area_container, #qodef-meta-box-portfolio_title_animations",
			"yes" => "#qodef_qode_page_title_area_container, #qodef-meta-box-portfolio_title_animations"
		)
	)
);
$PitchQodeTitle->addChild(
	"qode_show-page-title",
	$qode_show_page_title
);

$qode_page_title_area_container = new PitchQodeContainer(
	"qode_page_title_area_container",
	"qode_show-page-title",
	"no"
);
$PitchQodeTitle->addChild(
	"qode_page_title_area_container",
	$qode_page_title_area_container
);

$qode_page_title_type = new PitchQodeMetaField(
	"selectblank",
	"qode_page_title_type",
	"",
	esc_html__( "Title Type", 'pitch' ),
	esc_html__( "Choose title type for this page.", 'pitch' ),
	array(
		"standard_title" => esc_html__( "Standard", 'pitch' ),
		"breadcrumbs_title" => esc_html__( "Breadcrumbs", 'pitch' )
	),
	array(
		"dependence" => true,
		"hide"       => array( "breadcrumbs_title" => "#qodef_qode_title_standard_container" ),
		"show"       => array(
			"standard_title" => "#qodef_qode_title_standard_container",
			""               => "#qodef_qode_title_standard_container"
		)
	)
);
$qode_page_title_area_container->addChild(
	"qode_page_title_type",
	$qode_page_title_type
);

$qode_animate_page_title = new PitchQodeMetaField(
	"selectblank",
	"qode_animate_page_title",
	"",
	esc_html__( "Animations", 'pitch' ),
	esc_html__( "Choose an animation for Title Area", 'pitch' ),
	array(
		"no" => esc_html__( "No animation", 'pitch' ),
		"text_right_left" => esc_html__( "Text right to left", 'pitch' ),
		"area_top_bottom" => esc_html__( "Title area top to bottom", 'pitch' )
	)
);
$qode_page_title_area_container->addChild(
	"qode_animate_page_title",
	$qode_animate_page_title
);

$qode_page_page_title_vertical_aligment = new PitchQodeMetaField(
	"selectblank",
	"qode_page_page_title_vertical_aligment",
	"",
	esc_html__( "Vertical Alignment", 'pitch' ),
	esc_html__( "Specify Title vertical alignment", 'pitch' ),
	array(
		"header_bottom" => esc_html__( "From Bottom of Header", 'pitch' ),
		"window_top" => esc_html__( "From Window Top", 'pitch' )
	)
);
$qode_page_title_area_container->addChild(
	"qode_page_page_title_vertical_aligment",
	$qode_page_page_title_vertical_aligment
);

$qode_page_title_position = new PitchQodeMetaField(
	"selectblank",
	"qode_page_title_position",
	"",
	esc_html__( "Title Content Alignment", 'pitch' ),
	esc_html__( "Specify title content alignment", 'pitch' ),
	array(
		"left" => esc_html__( "Left", 'pitch' ),
		"center" => esc_html__( "Center", 'pitch' ),
		"right" => esc_html__( "Right", 'pitch' )
	)
);
$qode_page_title_area_container->addChild(
	"qode_page_title_position",
	$qode_page_title_position
);

$qode_show_page_title_text = new PitchQodeMetaField(
	"selectblank",
	"qode_show_page_title_text",
	"",
	esc_html__( "Show Title Text", 'pitch' ),
	esc_html__( "Disabling this option will turn off page title text", 'pitch' ),
	array(
		"no" => esc_html__( "No", 'pitch' ),
		"yes" => esc_html__( "Yes", 'pitch' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			"no" => "#qodef_qode_title_text_container, #qodef_animation_page_page_title_container"
		),
		"show"       => array(
			""    => "#qodef_qode_title_text_container, #qodef_animation_page_page_title_container",
			"yes" => "#qodef_qode_title_text_container, #qodef_animation_page_page_title_container"
		)
	)
);
$qode_page_title_area_container->addChild(
	"qode_show_page_title_text",
	$qode_show_page_title_text
);

$qode_title_text_container = new PitchQodeContainer(
	"qode_title_text_container",
	"qode_show_page_title_text",
	"no"
);
$qode_page_title_area_container->addChild(
	"qode_title_text_container",
	$qode_title_text_container
);

$group1 = new PitchQodeGroup(
	esc_html__( "Title Text Style", 'pitch' ),
	esc_html__( "Define styles for text in Title Area", 'pitch' )
);
$qode_title_text_container->addChild(
	"group1",
	$group1
);

$row1 = new PitchQodeRow();
$group1->addChild(
	"row1",
	$row1
);

$qode_page_title_color = new PitchQodeMetaField(
	"colorsimple",
	"qode_page-title-color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "ThisIsDescription", 'pitch' )
);
$row1->addChild(
	"qode_page-title-color",
	$qode_page_title_color
);

$qode_title_text_shadow = new PitchQodeMetaField(
	"selectblanksimple",
	"qode_title_text_shadow",
	"",
	esc_html__( "Text Shadow", 'pitch' ),
	esc_html__( "ThisIsDescription", 'pitch' ),
	array(
		"no" => esc_html__( "No", 'pitch' ),
		"yes" => esc_html__( "yes", 'pitch' )
	)
);
$row1->addChild(
	"qode_title_text_shadow",
	$qode_title_text_shadow
);

$qode_page_title_font_size = new PitchQodeMetaField(
	"selectblanksimple",
	"qode_page_title_font_size",
	"",
	esc_html__( "Text Size", 'pitch' ),
	esc_html__( "ThisIsDescription", 'pitch' ),
	array(
		"small" => esc_html__( "Small", 'pitch' ),
		"medium" => esc_html__( "Medium", 'pitch' ),
		"large" => esc_html__( "Large", 'pitch' )
	)
);
$row1->addChild(
	"qode_page_title_font_size",
	$qode_page_title_font_size
);

$qode_title_standard_container = new PitchQodeContainer(
	"qode_title_standard_container",
	"qode_page_title_type",
	"breadcrumbs_title"
);
$qode_page_title_area_container->addChild(
	"qode_title_standard_container",
	$qode_title_standard_container
);

$qode_title_like_separator = new PitchQodeMetaField(
	"selectblank",
	"qode_title_like_separator",
	"",
	esc_html__( "Show Separator Around Title Text", 'pitch' ),
	esc_html__( "Choose if you want title to look like separator with text", 'pitch' ),
	array(
		"no" => esc_html__( "No", 'pitch' ),
		"yes" => esc_html__( "Yes", 'pitch' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			"no" => "#qodef_qode_title_like_separator_container",
			""   => "#qodef_qode_title_like_separator_container"
		),
		"show"       => array(
			"yes" => "#qodef_qode_title_like_separator_container"
		)
	)
);
$qode_title_standard_container->addChild(
	"qode_title_like_separator",
	$qode_title_like_separator
);

$qode_title_like_separator_container = new PitchQodeContainer(
	"qode_title_like_separator_container",
	"qode_title_like_separator",
	"",
	array( '', 'no' )
);
$qode_title_standard_container->addChild(
	"qode_title_like_separator_container",
	$qode_title_like_separator_container
);

$group1 = new PitchQodeGroup(
	esc_html__( "Line Styles", 'pitch' ),
	esc_html__( "Choose style for separator line", 'pitch' )
);
$qode_title_like_separator_container->addChild(
	"group1",
	$group1
);

$row1 = new PitchQodeRow();
$group1->addChild(
	"row1",
	$row1
);

$qode_title_like_separator_line_color = new PitchQodeMetaField(
	"colorsimple",
	"qode_title_like_separator_line_color",
	"",
	esc_html__( "Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"qode_title_like_separator_line_color",
	$qode_title_like_separator_line_color
);

$qode_title_like_separator_line_width = new PitchQodeMetaField(
	"textsimple",
	"qode_title_like_separator_line_width",
	"",
	esc_html__( "Width", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"qode_title_like_separator_line_width",
	$qode_title_like_separator_line_width
);

$qode_title_like_separator_line_thickness = new PitchQodeMetaField(
	"textsimple",
	"qode_title_like_separator_line_thickness",
	"",
	esc_html__( "Thickness", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"qode_title_like_separator_line_thickness",
	$qode_title_like_separator_line_thickness
);

$qode_title_like_separator_line_style = new PitchQodeMetaField(
	"selectsimple",
	"qode_title_like_separator_line_style",
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
	"qode_title_like_separator_line_style",
	$qode_title_like_separator_line_style
);

$qode_title_like_separator_margins = new PitchQodeMetaField(
	"text",
	"qode_title_like_separator_margins",
	"",
	esc_html__( "Margins for Title", 'pitch' ),
	esc_html__( "Define left/right margins for title from separator", 'pitch' )
);
$qode_title_like_separator_container->addChild(
	"qode_title_like_separator_margins",
	$qode_title_like_separator_margins
);

$qode_title_like_separator_line_dots = new PitchQodeMetaField(
	"selectblank",
	"qode_title_like_separator_line_dots",
	"",
	esc_html__( "Dots on The End of Lines", 'pitch' ),
	esc_html__( "Enabling this option will give lines a dot next to title", 'pitch' ),
	array(
		"no" => esc_html__( "No", 'pitch' ),
		"yes" => esc_html__( "Yes", 'pitch' )
	),
	array(
		"dependence" => true,
		"hide"       => array( "no" => "#qodef_qode_title_like_separator_dots_container" ),
		"show"       => array(
			"yes" => "#qodef_qode_title_like_separator_dots_container",
			""    => "#qodef_qode_title_like_separator_dots_container"
		)
	)
);
$qode_title_like_separator_container->addChild(
	"qode_title_like_separator_line_dots",
	$qode_title_like_separator_line_dots
);

$qode_title_like_separator_dots_container = new PitchQodeContainer(
	"qode_title_like_separator_dots_container",
	"qode_title_like_separator_line_dots",
	"no"
);
$qode_title_like_separator_container->addChild(
	"qode_title_like_separator_dots_container",
	$qode_title_like_separator_dots_container
);

$group1 = new PitchQodeGroup(
	esc_html__( "Dots Style", 'pitch' ),
	esc_html__( "Choose style for dots", 'pitch' )
);
$qode_title_like_separator_dots_container->addChild(
	"group1",
	$group1
);

$row1 = new PitchQodeRow();
$group1->addChild(
	"row1",
	$row1
);

$qode_title_like_separator_dots_size = new PitchQodeMetaField(
	"textsimple",
	"qode_title_like_separator_dots_size",
	"",
	esc_html__( "Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"qode_title_like_separator_dots_size",
	$qode_title_like_separator_dots_size
);

$qode_title_like_separator_dots_color = new PitchQodeMetaField(
	"colorsimple",
	"qode_title_like_separator_dots_color",
	"",
	esc_html__( "Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"qode_title_like_separator_dots_color",
	$qode_title_like_separator_dots_color
);

//Subtitle like separator with text
$qode_subtitle_like_separator = new PitchQodeMetaField(
	"selectblank",
	"qode_subtitle_like_separator",
	"",
	esc_html__( "Show Separator Around Subtitle Text", 'pitch' ),
	esc_html__( "Choose if you want title to look like separator with text", 'pitch' ),
	array(
		"no" => esc_html__( "No", 'pitch' ),
		"yes" => esc_html__( "Yes", 'pitch' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			"no" => "#qodef_qode_subtitle_like_separator_container",
			""   => "#qodef_qode_subtitle_like_separator_container"
		),
		"show"       => array(
			"yes" => "#qodef_qode_subtitle_like_separator_container"
		)
	)
);
$qode_title_standard_container->addChild(
	"qode_subtitle_like_separator",
	$qode_subtitle_like_separator
);

$qode_subtitle_like_separator_container = new PitchQodeContainer(
	"qode_subtitle_like_separator_container",
	"qode_subtitle_like_separator",
	"",
	array( '', 'no' )
);
$qode_title_standard_container->addChild(
	"qode_subtitle_like_separator_container",
	$qode_subtitle_like_separator_container
);

$group1 = new PitchQodeGroup(
	esc_html__( "Line Styles", 'pitch' ),
	esc_html__( "Choose style for separator line", 'pitch' )
);
$qode_subtitle_like_separator_container->addChild(
	"group1",
	$group1
);

$row1 = new PitchQodeRow();
$group1->addChild(
	"row1",
	$row1
);

$qode_subtitle_like_separator_line_color = new PitchQodeMetaField(
	"colorsimple",
	"qode_subtitle_like_separator_line_color",
	"",
	esc_html__( "Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"qode_subtitle_like_separator_line_color",
	$qode_subtitle_like_separator_line_color
);

$qode_subtitle_like_separator_line_width = new PitchQodeMetaField(
	"textsimple",
	"qode_subtitle_like_separator_line_width",
	"",
	esc_html__( "Width", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"qode_subtitle_like_separator_line_width",
	$qode_subtitle_like_separator_line_width
);

$qode_subtitle_like_separator_line_thickness = new PitchQodeMetaField(
	"textsimple",
	"qode_subtitle_like_separator_line_thickness",
	"",
	esc_html__( "Thickness", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"qode_subtitle_like_separator_line_thickness",
	$qode_subtitle_like_separator_line_thickness
);

$qode_subtitle_like_separator_line_style = new PitchQodeMetaField(
	"selectsimple",
	"qode_subtitle_like_separator_line_style",
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
	"qode_subtitle_like_separator_line_style",
	$qode_subtitle_like_separator_line_style
);

$qode_subtitle_like_separator_margins = new PitchQodeMetaField(
	"text",
	"qode_subtitle_like_separator_margins",
	"",
	esc_html__( "Margins for Subitle", 'pitch' ),
	esc_html__( "Define left/right margins for subtitle from separator", 'pitch' )
);
$qode_subtitle_like_separator_container->addChild(
	"qode_subtitle_like_separator_margins",
	$qode_subtitle_like_separator_margins
);

$qode_page_title_background_color = new PitchQodeMetaField(
	"color",
	"qode_page-title-background-color",
	"",
	esc_html__( "Background Color", 'pitch' ),
	esc_html__( "Choose background color for Title Area", 'pitch' )
);
$qode_page_title_area_container->addChild(
	"qode_page-title-background-color",
	$qode_page_title_background_color
);

$qode_show_page_title_image = new PitchQodeMetaField(
	"yesno",
	"qode_show-page-title-image",
	"no",
	esc_html__( "Don't Show Background Image", 'pitch' ),
	esc_html__( "Enable this option to hide background image in Title Area", 'pitch' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "#qodef_qode_background_image_container",
		"dependence_show_on_yes" => ""
	)
);
$qode_page_title_area_container->addChild(
	"qode_show-page-title-image",
	$qode_show_page_title_image
);

$qode_background_image_container = new PitchQodeContainer(
	"qode_background_image_container",
	"qode_show-page-title-image",
	"yes"
);
$qode_page_title_area_container->addChild(
	"qode_background_image_container",
	$qode_background_image_container
);

$qode_title_image = new PitchQodeMetaField(
	"image",
	"qode_title-image",
	"",
	esc_html__( "Background Image", 'pitch' ),
	esc_html__( "Choose a background image for Title Area", 'pitch' )
);
$qode_background_image_container->addChild(
	"qode_title-image",
	$qode_title_image
);

$qode_title_overlay_image = new PitchQodeMetaField(
	"image",
	"qode_title-overlay-image",
	"",
	esc_html__( "Pattern Overlay Image", 'pitch' ),
	esc_html__( "Choose an image to be used as pattern over Title Area", 'pitch' )
);
$qode_background_image_container->addChild(
	"qode_title-overlay-image",
	$qode_title_overlay_image
);

$qode_responsive_title_image = new PitchQodeMetaField(
	"selectblank",
	"qode_responsive-title-image",
	"",
	esc_html__( "Responsive Background Image", 'pitch' ),
	esc_html__( "Do you want to make Title background image responsive?", 'pitch' ),
	array(
		"no" => esc_html__( "No", 'pitch' ),
		"yes" => esc_html__( "Yes", 'pitch' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			"yes" => "#qodef_qode_responsive_title_image_container, #qodef_qode_title-height"
		),
		"show"       => array(
			""   => "#qodef_qode_responsive_title_image_container, #qodef_qode_title-height",
			"no" => "#qodef_qode_responsive_title_image_container, #qodef_qode_title-height"
		)
	)
);
$qode_background_image_container->addChild(
	"qode_responsive-title-image",
	$qode_responsive_title_image
);

$qode_responsive_title_image_container = new PitchQodeContainer(
	"qode_responsive_title_image_container",
	"qode_responsive-title-image",
	"yes"
);
$qode_background_image_container->addChild(
	"qode_responsive_title_image_container",
	$qode_responsive_title_image_container
);

$qode_fixed_title_image = new PitchQodeMetaField(
	"selectblank",
	"qode_fixed-title-image",
	"",
	esc_html__( "Parallax Background Image", 'pitch' ),
	esc_html__( "Do you want background image to have parallax effect?", 'pitch' ),
	array(
		"no" => esc_html__( "No", 'pitch' ),
		"yes" => esc_html__( "Yes", 'pitch' ),
		"yes_zoom" => esc_html__( "Yes, with zoom out", 'pitch' )
	)
);
$qode_responsive_title_image_container->addChild(
	"qode_fixed-title-image",
	$qode_fixed_title_image
);

$qode_title_height = new PitchQodeMetaField(
	"text",
	"qode_title-height",
	"",
	esc_html__( "Title Height (px)", 'pitch' ),
	esc_html__( "Set a height for Title Area in pixels", 'pitch' ),
	array(),
	array( "col_width" => 3 )
);
$qode_page_title_area_container->addChild(
	"qode_title-height",
	$qode_title_height
);

$qode_title_separator = new PitchQodeMetaField(
	"selectblank",
	"qode_title_separator",
	"",
	esc_html__( "Show Title Separator", 'pitch' ),
	esc_html__( "Enabling this option will display a separator underneath Title", 'pitch' ),
	array(
		"no" => esc_html__( "No", 'pitch' ),
		"yes" => esc_html__( "Yes", 'pitch' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			""   => "#qodef_qode_title_separator_container",
			"no" => "#qodef_qode_title_separator_container"
		),
		"show"       => array(
			"yes" => "#qodef_qode_title_separator_container"
		)
	)
);
$qode_title_standard_container->addChild(
	"qode_title_separator",
	$qode_title_separator
);

$qode_title_separator_container = new PitchQodeContainer(
	"qode_title_separator_container",
	"qode_title_separator",
	"",
	array( '', 'no' )
);
$qode_title_standard_container->addChild(
	"qode_title_separator_container",
	$qode_title_separator_container
);

$qode_title_separator_format = new PitchQodeMetaField(
	"select",
	"qode_title_separator_format",
	"",
	esc_html__( "Format", 'pitch' ),
	esc_html__( "Choose a format (type) of separator", 'pitch' ),
	array(
		""                 => "",
		"normal" => esc_html__( "Normal", 'pitch' ),
		"with_icon" => esc_html__( "With Icon", 'pitch' ),
		"with_custom_icon" => esc_html__( "With Custom Icon", 'pitch' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			""                 => "#qodef_qode_separator_with_icon_container, #qodef_qode_separator_with_custom_icon_container",
			"normal"           => "#qodef_qode_separator_with_icon_container, #qodef_qode_separator_with_custom_icon_container",
			"with_custom_icon" => "#qodef_qode_separator_with_icon_container",
			"with_icon"        => "#qodef_qode_separator_with_custom_icon_container"
		),
		"show"       => array(
			"with_icon"        => "#qodef_qode_separator_with_icon_container",
			"with_custom_icon" => "#qodef_qode_separator_with_custom_icon_container"
		)
	)
);

$qode_title_separator_container->addChild(
	"qode_title_separator_format",
	$qode_title_separator_format
);

$qode_separator_with_icon_container = new PitchQodeContainer(
	"qode_separator_with_icon_container",
	"qode_title_separator_format",
	"normal",
	array( "normal", "with_custom_icon", "" )
);
$qode_title_separator_container->addChild(
	"qode_separator_with_icon_container",
	$qode_separator_with_icon_container
);

//init icon pack hide and show array. It will be populated dinamically from collections array
$separator_icon_pack_hide_array     = array();
$separator_icon_pack_show_array     = array();
$separator_icon_pack_hide_array[""] = "";

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
		$separator_icon_pack_show_array[ $dep_collection_key ] = '#qodef_qode_separator_icon_' . $dep_collection_object->param . '_container';
		$separator_icon_pack_hide_array[""]                    .= '#qodef_qode_separator_icon_' . $dep_collection_object->param . '_container,';
		
		//for all collections param generate hide string
		foreach ( $separator_icon_collections_params as $separator_icon_collections_param ) {
			//we don't need to include current one, because it needs to be shown, not hidden
			if ( $separator_icon_collections_param !== $dep_collection_object->param ) {
				$separator_icon_pack_hide_array[ $dep_collection_key ] .= '#qodef_qode_separator_icon_' . $separator_icon_collections_param . '_container,';
			}
		}
		
		//remove remaining ',' character
		$separator_icon_pack_hide_array[ $dep_collection_key ] = rtrim(
			$separator_icon_pack_hide_array[ $dep_collection_key ],
			','
		);
		
	}
	
	$separator_icon_pack_hide_array[""] = rtrim(
		$separator_icon_pack_hide_array[""],
		','
	);
	
}

$qode_separator_icon_pack = new PitchQodeMetaField(
	"selectblank",
	"qode_separator_icon_pack",
	"",
	esc_html__( "Separator Icon Pack", 'pitch' ),
	esc_html__( "Choose icon pack for separator", 'pitch' ),
	pitch_qode_icon_collections()->getIconCollections(),
	array(
		"dependence" => true,
		"hide"       => $separator_icon_pack_hide_array,
		"show"       => $separator_icon_pack_show_array
	)
);

$qode_separator_with_icon_container->addChild(
	"qode_separator_icon_pack",
	$qode_separator_icon_pack
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
		
		$separator_icon_hide_values    = $icon_collections_keys;
		$separator_icon_hide_values[]  = "";
		$qode_separator_icon_container = new PitchQodeContainer(
			"qode_separator_icon_" . $collection_object->param . "_container",
			"qode_separator_icon_pack",
			"",
			$separator_icon_hide_values
		);
		$qode_separator_icon           = new PitchQodeMetaField(
			"select",
			"qode_separator_icon_" . $collection_object->param,
			"",
			esc_html__( "Separator Icon", 'pitch' ),
			esc_html__( "Choose Separator Icon", 'pitch' ),
			$icons_array,
			array( "col_width" => 3 )
		);
		$qode_separator_icon_container->addChild(
			"qode_separator_icon_" . $collection_object->param,
			$qode_separator_icon
		);
		
		$qode_separator_with_icon_container->addChild(
			"qode_separator_icon_" . $collection_object->param . "_container",
			$qode_separator_icon_container
		);
	}
	
}

$group1 = new PitchQodeGroup(
	esc_html__( "Icon Style", 'pitch' ),
	esc_html__( "Choose icon style", 'pitch' )
);
$qode_separator_with_icon_container->addChild(
	"group1",
	$group1
);

$row1 = new PitchQodeRow();
$group1->addChild(
	"row1",
	$row1
);

$qode_title_separator_icon_color = new PitchQodeMetaField(
	"colorsimple",
	"qode_title_separator_icon_color",
	"",
	esc_html__( "Color", 'pitch' ),
	esc_html__( "Choose a color of icon for Title separator", 'pitch' )
);
$row1->addChild(
	"qode_title_separator_icon_color",
	$qode_title_separator_icon_color
);

$qode_title_separator_icon_hover_color = new PitchQodeMetaField(
	"colorsimple",
	"qode_title_separator_icon_hover_color",
	"",
	esc_html__( "Hover Color", 'pitch' ),
	esc_html__( "Choose a hover color of icon for Title separator", 'pitch' )
);
$row1->addChild(
	"qode_title_separator_icon_hover_color",
	$qode_title_separator_icon_hover_color
);

$qode_title_separator_icon_custom_size = new PitchQodeMetaField(
	"textsimple",
	"qode_title_separator_icon_custom_size",
	"",
	esc_html__( "Icon Size", 'pitch' ),
	esc_html__( "Choose size of icon", 'pitch' )
);
$row1->addChild(
	"qode_title_separator_icon_custom_size",
	$qode_title_separator_icon_custom_size
);

$group2 = new PitchQodeGroup(
	esc_html__( "Icon Position and Margin", 'pitch' ),
	esc_html__( "Choose icon position and left(right) margin", 'pitch' )
);
$qode_separator_with_icon_container->addChild(
	"group2",
	$group2
);

$row1 = new PitchQodeRow();
$group2->addChild(
	"row1",
	$row1
);

$qode_title_separator_icon_position = new PitchQodeMetaField(
	"selectsimple",
	"qode_title_separator_icon_position",
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
	"qode_title_separator_icon_position",
	$qode_title_separator_icon_position
);

$qode_title_separator_icon_margins = new PitchQodeMetaField(
	"textsimple",
	"qode_title_separator_icon_margins",
	"",
	esc_html__( "Margins (px)", 'pitch' ),
	esc_html__( "Enter margin that will refer to left and right margin of the icon", 'pitch' )
);
$row1->addChild(
	"qode_title_separator_icon_margins",
	$qode_title_separator_icon_margins
);

$qode_title_separator_icon_type = new PitchQodeMetaField(
	"selectblank",
	"qode_title_separator_icon_type",
	"",
	esc_html__( "Icon Type", 'pitch' ),
	esc_html__( "Choose icon type", 'pitch' ),
	array(
		"normal" => esc_html__( "Normal", 'pitch' ),
		"circle" => esc_html__( "Circle", 'pitch' ),
		"square" => esc_html__( "Square", 'pitch' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			"normal" => "#qodef_qode_title_separator_types_container",
			""       => "#qodef_qode_title_separator_types_container"
		),
		"show"       => array(
			"circle" => "#qodef_qode_title_separator_types_container",
			"square" => "#qodef_qode_title_separator_types_container"
		)
	)
);
$qode_separator_with_icon_container->addChild(
	"qode_title_separator_icon_type",
	$qode_title_separator_icon_type
);

$qode_title_separator_types_container = new PitchQodeContainer(
	"qode_title_separator_types_container",
	"qode_title_separator_icon_type",
	"",
	array( "", "normal" )
);
$qode_separator_with_icon_container->addChild(
	"qode_title_separator_types_container",
	$qode_title_separator_types_container
);

$group1 = new PitchQodeGroup(
	esc_html__( "Border Style", 'pitch' ),
	esc_html__( "Define border style for icon", 'pitch' )
);
$qode_title_separator_types_container->addChild(
	"group1",
	$group1
);

$row1 = new PitchQodeRow();
$group1->addChild(
	"row1",
	$row1
);

$qode_title_separator_icon_border_radius = new PitchQodeMetaField(
	"textsimple",
	"qode_title_separator_icon_border_radius",
	"",
	esc_html__( "Border Radius (px)", 'pitch' ),
	esc_html__( "Enter border radius for icon", 'pitch' )
);
$row1->addChild(
	"qode_title_separator_icon_border_radius",
	$qode_title_separator_icon_border_radius
);

$qode_title_separator_icon_border_width = new PitchQodeMetaField(
	"textsimple",
	"qode_title_separator_icon_border_width",
	"",
	esc_html__( "Border Width (px)", 'pitch' ),
	esc_html__( "Enter border width for icon", 'pitch' )
);
$row1->addChild(
	"qode_title_separator_icon_border_width",
	$qode_title_separator_icon_border_width
);

$qode_title_separator_icon_border_color = new PitchQodeMetaField(
	"colorsimple",
	"qode_title_separator_icon_border_color",
	"",
	esc_html__( "Border Color", 'pitch' ),
	esc_html__( "Enter border color for icon", 'pitch' )
);
$row1->addChild(
	"qode_title_separator_icon_border_color",
	$qode_title_separator_icon_border_color
);

$qode_title_separator_icon_border_hover_color = new PitchQodeMetaField(
	"colorsimple",
	"qode_title_separator_icon_border_hover_color",
	"",
	esc_html__( "Border Hover Color", 'pitch' ),
	esc_html__( "Enter border color for icon", 'pitch' )
);
$row1->addChild(
	"qode_title_separator_icon_border_hover_color",
	$qode_title_separator_icon_border_hover_color
);

$group2 = new PitchQodeGroup(
	esc_html__( "Additional Icon Style", 'pitch' ),
	esc_html__( "Choose adition icon styling", 'pitch' )
);
$qode_title_separator_types_container->addChild(
	"group2",
	$group2
);

$row1 = new PitchQodeRow();
$group2->addChild(
	"row1",
	$row1
);

$qode_title_separator_icon_shape_size = new PitchQodeMetaField(
	"textsimple",
	"qode_title_separator_icon_shape_size",
	"",
	esc_html__( "Shape Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"qode_title_separator_icon_shape_size",
	$qode_title_separator_icon_shape_size
);

$qode_title_separator_icon_background_color = new PitchQodeMetaField(
	"colorsimple",
	"qode_title_separator_icon_background_color",
	"",
	esc_html__( "Background Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"qode_title_separator_icon_background_color",
	$qode_title_separator_icon_background_color
);

$qode_title_separator_icon_background_hover_color = new PitchQodeMetaField(
	"colorsimple",
	"qode_title_separator_icon_background_hover_color",
	"",
	esc_html__( "Background Hover Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"qode_title_separator_icon_background_hover_color",
	$qode_title_separator_icon_background_hover_color
);

$qode_separator_with_custom_icon_container = new PitchQodeContainer(
	"qode_separator_with_custom_icon_container",
	"qode_title_separator_format",
	"normal",
	array( "normal", "with_icon", "" )
);
$qode_title_separator_container->addChild(
	"qode_separator_with_custom_icon_container",
	$qode_separator_with_custom_icon_container
);

$qode_separator_custom_icon = new PitchQodeMetaField(
	"image",
	"qode_separator_custom_icon",
	"",
	esc_html__( "Custom Icon", 'pitch' ),
	esc_html__( "Choose custom icon for separator", 'pitch' )
);
$qode_separator_with_custom_icon_container->addChild(
	"qode_separator_custom_icon",
	$qode_separator_custom_icon
);

$qode_title_separator_type = new PitchQodeMetaField(
	"select",
	"qode_title_separator_type",
	"",
	esc_html__( "Type", 'pitch' ),
	esc_html__( "Choose a Title separator line style", 'pitch' ),
	array(
		""       => "",
		"solid" => esc_html__( "Solid", 'pitch' ),
		"dashed" => esc_html__( "Dashed", 'pitch' )
	)
);
$qode_title_separator_container->addChild(
	"qode_title_separator_type",
	$qode_title_separator_type
);

$qode_title_separator_position = new PitchQodeMetaField(
	"select",
	"qode_title_separator_position",
	"",
	esc_html__( "Position", 'pitch' ),
	esc_html__( "Choose a Title separator position", 'pitch' ),
	array(
		""      => "",
		"above" => esc_html__( "Above Title", 'pitch' ),
		"below" => esc_html__( "Below Title", 'pitch' )
	)
);
$qode_title_separator_container->addChild(
	"qode_title_separator_position",
	$qode_title_separator_position
);

$qode_title_separator_color = new PitchQodeMetaField(
	"color",
	"qode_title_separator_color",
	"",
	esc_html__( "Color", 'pitch' ),
	esc_html__( "Choose a color for Title separator", 'pitch' )
);
$qode_title_separator_container->addChild(
	"qode_title_separator_color",
	$qode_title_separator_color
);

$group1 = new PitchQodeGroup(
	esc_html__( "Size", 'pitch' ),
	esc_html__( 'Define size for Title separator', 'pitch' )
);
$qode_title_separator_container->addChild(
	"group1",
	$group1
);

$row1 = new PitchQodeRow();
$group1->addChild(
	"row1",
	$row1
);

$qode_title_separator_thickness = new PitchQodeMetaField(
	"textsimple",
	"qode_title_separator_thickness",
	"",
	esc_html__( "Thickness (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"qode_title_separator_thickness",
	$qode_title_separator_thickness
);

$qode_title_separator_width = new PitchQodeMetaField(
	"textsimple",
	"qode_title_separator_width",
	"",
	esc_html__( "Width (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"qode_title_separator_width",
	$qode_title_separator_width
);

$group2 = new PitchQodeGroup(
	esc_html__( "Margin", 'pitch' ),
	esc_html__( 'Add space at top and bottom of Title separator', 'pitch' )
);
$qode_title_separator_container->addChild(
	"group2",
	$group2
);

$row1 = new PitchQodeRow();
$group2->addChild(
	"row1",
	$row1
);

$qode_title_separator_topmargin = new PitchQodeMetaField(
	"textsimple",
	"qode_title_separator_topmargin",
	"",
	esc_html__( "Top Margin (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"qode_title_separator_topmargin",
	$qode_title_separator_topmargin
);

$qode_title_separator_bottommargin = new PitchQodeMetaField(
	"textsimple",
	"qode_title_separator_bottommargin",
	"",
	esc_html__( "Bottom Margin (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"qode_title_separator_bottommargin",
	$qode_title_separator_bottommargin
);

$qode_title_graphics = new PitchQodeMetaField(
	"image",
	"qode_title-graphics",
	"",
	esc_html__( "Title Graphics", 'pitch' ),
	esc_html__( "Choose a graphic for Title Area, appearing above title", 'pitch' )
);
$qode_title_standard_container->addChild(
	"qode_title-graphics",
	$qode_title_graphics
);

$qode_enable_breadcrumbs = new PitchQodeMetaField(
	"selectblank",
	"qode_enable_breadcrumbs",
	"",
	esc_html__( "Enable Breadcrumbs", 'pitch' ),
	esc_html__( "Do you want to display breadcrumbs in title area?", 'pitch' ),
	array(
		"no" => esc_html__( "No", 'pitch' ),
		"yes" => esc_html__( "Yes", 'pitch' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			""   => "#qodef_animation_page_page_title_breadcrumbs_container",
			"no" => "#qodef_animation_page_page_title_breadcrumbs_container"
		),
		"show"       => array(
			"yes" => "#qodef_animation_page_page_title_breadcrumbs_container"
		)
	)
);
$qode_page_title_area_container->addChild(
	"qode_enable_breadcrumbs",
	$qode_enable_breadcrumbs
);

$qode_page_breadcrumbs_color = new PitchQodeMetaField(
	"color",
	"qode_page_breadcrumbs_color",
	"",
	esc_html__( "Breadcrumbs Color", 'pitch' ),
	esc_html__( "Choose a color for breadcrumbs text ", 'pitch' )
);
$qode_page_title_area_container->addChild(
	"qode_page_breadcrumbs_color",
	$qode_page_breadcrumbs_color
);

$qode_page_subtitle = new PitchQodeMetaField(
	"text",
	"qode_page_subtitle",
	"",
	esc_html__( "Subtitle Text", 'pitch' ),
	esc_html__( "Enter your subtitle text", 'pitch' )
);
$qode_page_title_area_container->addChild(
	"qode_page_subtitle",
	$qode_page_subtitle
);

$qode_page_subtitle_position = new PitchQodeMetaField(
	"selectblank",
	"qode_page_subtitle_position",
	"",
	esc_html__( "Subtitle Position", 'pitch' ),
	esc_html__( "Choose a Subtitle position", 'pitch' ),
	array(
		"below_title" => esc_html__( "Below Title", 'pitch' ),
		"above_title" => esc_html__( "Above Title", 'pitch' )
	)
);
$qode_page_title_area_container->addChild(
	"qode_page_subtitle_position",
	$qode_page_subtitle_position
);

$qode_page_subtitle_color = new PitchQodeMetaField(
	"color",
	"qode_page_subtitle_color",
	"",
	esc_html__( "Subtitle Text Color", 'pitch' ),
	esc_html__( "Choose a color for subtitle text", 'pitch' )
);
$qode_page_title_area_container->addChild(
	"qode_page_subtitle_color",
	$qode_page_subtitle_color
);

$qode_title_content_style = new PitchQodeGroup(
	esc_html__( "Title Content Style", 'pitch' ),
	esc_html__( "Define style for title area content", 'pitch' )
);
$qode_page_title_area_container->addChild(
	"qode_title_content_style",
	$qode_title_content_style
);

$row1 = new PitchQodeRow();
$qode_title_content_style->addChild(
	"row1",
	$row1
);

$qode_title_area_content_background_color = new PitchQodeMetaField(
	"colorsimple",
	"qode_title_area_content_background_color",
	"",
	esc_html__( "Title Area Content Background Color", 'pitch' ),
	esc_html__( "Choose a background color for Title Area Content", 'pitch' )
);
$row1->addChild(
	"qode_title_area_content_background_color",
	$qode_title_area_content_background_color
);

$qode_title_area_content_opacity = new PitchQodeMetaField(
	"textsimple",
	"qode_title_area_content_opacity",
	"",
	esc_html__( "Title Area Content Background Color Opacity", 'pitch' ),
	esc_html__( "Choose a transparency for the content area background color (0 = fully transparent, 1 = opaque)", 'pitch' )
);
$row1->addChild(
	"qode_title_area_content_opacity",
	$qode_title_area_content_opacity
);

$qode_title_content_in_grid = new PitchQodeMetaField(
	"yesno",
	"qode_title_content_in_grid",
	"",
	esc_html__( "Title Area Content In Grid", 'pitch' ),
	esc_html__( "This option will show title area content in grid", 'pitch' )
);
$qode_page_title_area_container->addChild(
	"qode_title_content_in_grid",
	$qode_title_content_in_grid
);

$qode_title_content_shadow = new PitchQodeMetaField(
	"yesno",
	"qode_title_content_shadow",
	"",
	esc_html__( "Show Title Content Area Shadows", 'pitch' ),
	esc_html__( "Enabling this option will show shadows on title content area", 'pitch' )
);
$qode_page_title_area_container->addChild(
	"qode_title_content_shadow",
	$qode_title_content_shadow
);

$title_area_padding_group = new PitchQodeGroup(
	esc_html__( "Title Area Content Padding", 'pitch' ),
	esc_html__( "Define padding for title area content", 'pitch' )
);
$qode_page_title_area_container->addChild(
	"title_area_padding_group",
	$title_area_padding_group
);

$row1 = new PitchQodeRow();
$title_area_padding_group->addChild(
	"row1",
	$row1
);

$qode_title_content_top_padding = new PitchQodeMetaField(
	"textsimple",
	"qode_title_content_top_padding",
	"",
	esc_html__( "Top Padding", 'pitch' ),
	esc_html__( "This is some description.", 'pitch' )
);
$row1->addChild(
	"qode_title_content_top_padding",
	$qode_title_content_top_padding
);

$qode_title_content_right_padding = new PitchQodeMetaField(
	"textsimple",
	"qode_title_content_right_padding",
	"",
	esc_html__( "Right Padding", 'pitch' ),
	esc_html__( "This is some description.", 'pitch' )
);
$row1->addChild(
	"qode_title_content_right_padding",
	$qode_title_content_right_padding
);

$qode_title_content_bottom_padding = new PitchQodeMetaField(
	"textsimple",
	"qode_title_content_bottom_padding",
	"",
	esc_html__( "Bottom Padding", 'pitch' ),
	esc_html__( "This is some description.", 'pitch' )
);
$row1->addChild(
	"qode_title_content_bottom_padding",
	$qode_title_content_bottom_padding
);

$qode_title_content_left_padding = new PitchQodeMetaField(
	"textsimple",
	"qode_title_content_left_padding",
	"",
	esc_html__( "Left Padding", 'pitch' ),
	esc_html__( "This is some description.", 'pitch' )
);
$row1->addChild(
	"qode_title_content_left_padding",
	$qode_title_content_left_padding
);

$qode_title_style = new PitchQodeGroup(
	esc_html__( "Title Style", 'pitch' ),
	esc_html__( "Define style for title", 'pitch' )
);
$qode_page_title_area_container->addChild(
	"qode_title_style",
	$qode_title_style
);

$row1 = new PitchQodeRow();
$qode_title_style->addChild(
	"row1",
	$row1
);

$qode_title_background_color = new PitchQodeMetaField(
	"colorsimple",
	"qode_title_background_color",
	"",
	esc_html__( "Title Background Color", 'pitch' ),
	esc_html__( "Choose a background color for Title", 'pitch' )
);
$row1->addChild(
	"qode_title_background_color",
	$qode_title_background_color
);

$qode_title_opacity = new PitchQodeMetaField(
	"textsimple",
	"qode_title_opacity",
	"",
	esc_html__( "Title Background Color Opacity", 'pitch' ),
	esc_html__( "Choose a transparency for the title background color (0 = fully transparent, 1 = opaque)", 'pitch' )
);
$row1->addChild(
	"qode_title_opacity",
	$qode_title_opacity
);

$title_padding_group = new PitchQodeGroup(
	esc_html__( "Padding", 'pitch' ),
	esc_html__( "Define padding for title (When using separator around title, only right margin is counted for left/right margin)", 'pitch' )
);
$qode_page_title_area_container->addChild(
	"title_padding_group",
	$title_padding_group
);

$row1 = new PitchQodeRow( true );
$title_padding_group->addChild(
	"row1",
	$row1
);

$qode_title_top_padding = new PitchQodeMetaField(
	"textsimple",
	"qode_title_top_padding",
	"",
	esc_html__( "Top Padding (px)", 'pitch' ),
	esc_html__( "This is some description.", 'pitch' )
);
$row1->addChild(
	"qode_title_top_padding",
	$qode_title_top_padding
);

$qode_title_right_padding = new PitchQodeMetaField(
	"textsimple",
	"qode_title_right_padding",
	"",
	esc_html__( "Right Padding (px)", 'pitch' ),
	esc_html__( "This is some description.", 'pitch' )
);
$row1->addChild(
	"qode_title_right_padding",
	$qode_title_right_padding
);

$qode_title_bottom_padding = new PitchQodeMetaField(
	"textsimple",
	"qode_title_bottom_padding",
	"",
	esc_html__( "Bottom Padding (px)", 'pitch' ),
	esc_html__( "This is some description.", 'pitch' )
);
$row1->addChild(
	"qode_title_bottom_padding",
	$qode_title_bottom_padding
);

$qode_title_left_padding = new PitchQodeMetaField(
	"textsimple",
	"qode_title_left_padding",
	"",
	esc_html__( "Left Padding (px)", 'pitch' ),
	esc_html__( "This is some description.", 'pitch' )
);
$row1->addChild(
	"qode_title_left_padding",
	$qode_title_left_padding
);

$qode_subtitle_style = new PitchQodeGroup(
	esc_html__( "Subtitle Style", 'pitch' ),
	esc_html__( "Define style for subtitle (When using separator around subtitle, only right margin is counted for left/right margin)", 'pitch' )
);
$qode_page_title_area_container->addChild(
	"qode_subtitle_style",
	$qode_subtitle_style
);

$row1 = new PitchQodeRow();
$qode_subtitle_style->addChild(
	"row1",
	$row1
);

$qode_subtitle_background_color = new PitchQodeMetaField(
	"colorsimple",
	"qode_subtitle_background_color",
	"",
	esc_html__( "Subtitle Background Color", 'pitch' ),
	esc_html__( "Choose a background color for Subtitle", 'pitch' )
);
$row1->addChild(
	"qode_subtitle_background_color",
	$qode_subtitle_background_color
);

$qode_subtitle_opacity = new PitchQodeMetaField(
	"textsimple",
	"qode_subtitle_opacity",
	"",
	esc_html__( "Subtitle Background Color Opacity", 'pitch' ),
	esc_html__( "Choose a transparency for the subtitle background color (0 = fully transparent, 1 = opaque)", 'pitch' )
);
$row1->addChild(
	"qode_subtitle_opacity",
	$qode_subtitle_opacity
);

$subtitle_padding_group = new PitchQodeGroup(
	esc_html__( "Padding", 'pitch' ),
	esc_html__( "Define padding for subtitle", 'pitch' )
);
$qode_page_title_area_container->addChild(
	"subtitle_padding_group",
	$subtitle_padding_group
);
$row1 = new PitchQodeRow( true );
$subtitle_padding_group->addChild(
	"row1",
	$row1
);

$qode_subtitle_top_padding = new PitchQodeMetaField(
	"textsimple",
	"qode_subtitle_top_padding",
	"",
	esc_html__( "Top Padding (px)", 'pitch' ),
	esc_html__( "This is some description.", 'pitch' )
);
$row1->addChild(
	"qode_subtitle_top_padding",
	$qode_subtitle_top_padding
);

$qode_subtitle_right_padding = new PitchQodeMetaField(
	"textsimple",
	"qode_subtitle_right_padding",
	"",
	esc_html__( "Right Padding (px)", 'pitch' ),
	esc_html__( "This is some description.", 'pitch' )
);
$row1->addChild(
	"qode_subtitle_right_padding",
	$qode_subtitle_right_padding
);

$qode_subtitle_bottom_padding = new PitchQodeMetaField(
	"textsimple",
	"qode_subtitle_bottom_padding",
	"",
	esc_html__( "Bottom Padding (px)", 'pitch' ),
	esc_html__( "This is some description.", 'pitch' )
);
$row1->addChild(
	"qode_subtitle_bottom_padding",
	$qode_subtitle_bottom_padding
);

$qode_subtitle_left_padding = new PitchQodeMetaField(
	"textsimple",
	"qode_subtitle_left_padding",
	"",
	esc_html__( "Left Padding (px)", 'pitch' ),
	esc_html__( "This is some description.", 'pitch' )
);
$row1->addChild(
	"qode_subtitle_left_padding",
	$qode_subtitle_left_padding
);

//Portfolio Title Animations
$PitchQodeTitleAnimations = new QodePitchMetaBox(
	'portfolio_page',
	esc_html__( 'Title Animations', 'pitch' ),
	'qode_show-page-title',
	array( 'no' )
);
$pitch_qode_framework->qodeMetaBoxes->addMetaBox(
	'portfolio_title_animations',
	$PitchQodeTitleAnimations
);

//Whole title content animation
$page_page_title_whole_content_animations = new PitchQodeMetaField(
	'selectblank',
	'page_page_title_whole_content_animations',
	'',
	esc_html__( 'Enable Whole Title Content Animation', 'pitch' ),
	esc_html__( 'This option will enable whole title content animation', 'pitch' ),
	array(
		'no' => esc_html__( 'No', 'pitch' ),
		'yes' => esc_html__( 'Yes', 'pitch' )
	),
	array(
		'dependence' => true,
		'hide'       => array(
			''   => '#qodef_page_page_title_whole_content_animations_container',
			'no' => '#qodef_page_page_title_whole_content_animations_container'
		),
		'show'       => array(
			'yes' => '#qodef_page_page_title_whole_content_animations_container'
		)
	)
);
$PitchQodeTitleAnimations->addChild(
	'page_page_title_whole_content_animations',
	$page_page_title_whole_content_animations
);

$page_page_title_whole_content_animations_container = new PitchQodeContainer(
	'page_page_title_whole_content_animations_container',
	'page_page_title_whole_content_animations',
	'',
	array( '', 'no' )
);
$PitchQodeTitleAnimations->addChild(
	'page_page_title_whole_content_animations_container',
	$page_page_title_whole_content_animations_container
);

$page_page_title_whole_content_animations_data_start = new PitchQodeGroup(
	esc_html__( 'Scrolling Animation Start Point', 'pitch' ),
	esc_html__( 'These are properties for the first keyframe in scrolling animation', 'pitch' )
);
$page_page_title_whole_content_animations_container->addChild(
	'page_page_title_whole_content_animations_data_start',
	$page_page_title_whole_content_animations_data_start
);

$row1 = new PitchQodeRow();
$page_page_title_whole_content_animations_data_start->addChild(
	'row1',
	$row1
);

$page_page_title_whole_content_data_start = new PitchQodeMetaField(
	'textsimple',
	'page_page_title_whole_content_data_start',
	'',
	esc_html__( 'Scrollbar Top Distance (px)', 'pitch' )
);
$row1->addChild(
	'page_page_title_whole_content_data_start',
	$page_page_title_whole_content_data_start
);

$page_page_title_whole_content_start_custom_style = new PitchQodeMetaField(
	'textareasimple',
	'page_page_title_whole_content_start_custom_style',
	'',
	esc_html__( 'Enter CSS declarations separated by semicolons', 'pitch' )
);
$row1->addChild(
	'page_page_title_whole_content_start_custom_style',
	$page_page_title_whole_content_start_custom_style
);

$page_page_title_whole_content_animations_data_end = new PitchQodeGroup(
	esc_html__( 'Scrolling Animation End Point', 'pitch' ),
	esc_html__( 'These are properties for the last keyframe in scrolling animation', 'pitch' )
);
$page_page_title_whole_content_animations_container->addChild(
	'page_page_title_whole_content_animations_data_end',
	$page_page_title_whole_content_animations_data_end
);

$row2 = new PitchQodeRow();
$page_page_title_whole_content_animations_data_end->addChild(
	'row2',
	$row2
);

$page_page_title_whole_content_data_end = new PitchQodeMetaField(
	'textsimple',
	'page_page_title_whole_content_data_end',
	'',
	esc_html__( 'Scrollbar Top Distance (px)', 'pitch' )
);
$row2->addChild(
	'page_page_title_whole_content_data_end',
	$page_page_title_whole_content_data_end
);

$page_page_title_whole_content_end_custom_style = new PitchQodeMetaField(
	'textareasimple',
	'page_page_title_whole_content_end_custom_style',
	'',
	esc_html__( 'Enter CSS declarations separated by semicolons', 'pitch' )
);
$row2->addChild(
	'page_page_title_whole_content_end_custom_style',
	$page_page_title_whole_content_end_custom_style
);

//Title Animations
$animation_page_page_title_container = new PitchQodeContainerNoStyle(
	'animation_page_page_title_container',
	'qode_show_page_title_text',
	'no'
);
$PitchQodeTitleAnimations->addChild(
	'animation_page_page_title_container',
	$animation_page_page_title_container
);

$page_page_title_animations = new PitchQodeMetaField(
	'selectblank',
	'page_page_title_animations',
	'',
	esc_html__( 'Enable Page Title Animations', 'pitch' ),
	esc_html__( 'This option will enable Page Title Scroll Animations', 'pitch' ),
	array(
		'no' => esc_html__( 'No', 'pitch' ),
		'yes' => esc_html__( 'Yes', 'pitch' )
	),
	array(
		'dependence' => true,
		'hide'       => array(
			''   => '#qodef_page_page_title_animations_container',
			'no' => '#qodef_page_page_title_animations_container'
		),
		'show'       => array(
			'yes' => '#qodef_page_page_title_animations_container'
		)
	)
);

$animation_page_page_title_container->addChild(
	'page_page_title_animations',
	$page_page_title_animations
);

$page_page_title_animations_container = new PitchQodeContainer(
	'page_page_title_animations_container',
	'page_page_title_animations',
	'',
	array( '', 'no' )
);
$animation_page_page_title_container->addChild(
	'page_page_title_animations_container',
	$page_page_title_animations_container
);

$page_page_title_animations_data_start = new PitchQodeGroup(
	esc_html__( 'Scrolling Animation Start Point', 'pitch' ),
	esc_html__( 'These are properties for the first keyframe in scrolling animation', 'pitch' )
);
$page_page_title_animations_container->addChild(
	'page_page_title_animations_data_start',
	$page_page_title_animations_data_start
);

$row1 = new PitchQodeRow();
$page_page_title_animations_data_start->addChild(
	'row1',
	$row1
);

$page_page_title_data_start = new PitchQodeMetaField(
	'textsimple',
	'page_page_title_data_start',
	'',
	esc_html__( 'Scrollbar Top Distance (px)', 'pitch' )
);
$row1->addChild(
	'page_page_title_data_start',
	$page_page_title_data_start
);

$page_page_title_start_custom_style = new PitchQodeMetaField(
	'textareasimple',
	'page_page_title_start_custom_style',
	'',
	esc_html__( 'Enter CSS declarations separated by semicolons', 'pitch' )
);
$row1->addChild(
	'page_page_title_start_custom_style',
	$page_page_title_start_custom_style
);

$page_page_title_animations_data_end = new PitchQodeGroup(
	esc_html__( 'Scrolling Animation End Point', 'pitch' ),
	esc_html__( 'These are properties for the last keyframe in scrolling animation', 'pitch' )
);
$page_page_title_animations_container->addChild(
	'page_page_title_animations_data_end',
	$page_page_title_animations_data_end
);

$row2 = new PitchQodeRow();
$page_page_title_animations_data_end->addChild(
	'row2',
	$row2
);

$page_page_title_data_end = new PitchQodeMetaField(
	'textsimple',
	'page_page_title_data_end',
	'',
	esc_html__( 'Scrollbar Top Distance (px)', 'pitch' )
);
$row2->addChild(
	'page_page_title_data_end',
	$page_page_title_data_end
);

$page_page_title_end_custom_style = new PitchQodeMetaField(
	'textareasimple',
	'page_page_title_end_custom_style',
	'',
	esc_html__( 'Enter CSS declarations separated by semicolons', 'pitch' )
);
$row2->addChild(
	'page_page_title_end_custom_style',
	$page_page_title_end_custom_style
);

//Title Separator Animations
$page_page_title_separator_animations = new PitchQodeMetaField(
	'selectblank',
	'page_page_title_separator_animations',
	'',
	esc_html__( 'Enable Page Separator Title Animations', 'pitch' ),
	esc_html__( 'This option will enable Page Title Separator Scroll Animations', 'pitch' ),
	array(
		'no' => esc_html__( 'No', 'pitch' ),
		'yes' => esc_html__( 'Yes', 'pitch' )
	),
	array(
		'dependence' => true,
		'hide'       => array(
			''   => '#qodef_page_page_title_separator_animations_container',
			'no' => '#qodef_page_page_title_separator_animations_container'
		),
		'show'       => array(
			'yes' => '#qodef_page_page_title_separator_animations_container'
		)
	)
);
$PitchQodeTitleAnimations->addChild(
	'page_page_title_separator_animations',
	$page_page_title_separator_animations
);

$page_page_title_separator_animations_container = new PitchQodeContainer(
	'page_page_title_separator_animations_container',
	'page_page_title_separator_animations',
	'',
	array( 'no', '' )
);
$PitchQodeTitleAnimations->addChild(
	'page_page_title_separator_animations_container',
	$page_page_title_separator_animations_container
);

$page_page_title_separator_animations_data_start = new PitchQodeGroup(
	esc_html__( 'Scrolling Animation Start Point', 'pitch' ),
	esc_html__( 'These are properties for the first keyframe in scrolling animation', 'pitch' )
);
$page_page_title_separator_animations_container->addChild(
	'page_page_title_separator_animations_data_start',
	$page_page_title_separator_animations_data_start
);

$row1 = new PitchQodeRow();
$page_page_title_separator_animations_data_start->addChild(
	'row1',
	$row1
);

$page_page_title_separator_data_start = new PitchQodeMetaField(
	'textsimple',
	'page_page_title_separator_data_start',
	'',
	esc_html__( 'Scrollbar Top Distance (px)', 'pitch' )
);
$row1->addChild(
	'page_page_title_separator_data_start',
	$page_page_title_separator_data_start
);

$page_page_title_separator_start_custom_style = new PitchQodeMetaField(
	'textareasimple',
	'page_page_title_separator_start_custom_style',
	'',
	esc_html__( 'Enter CSS declarations separated by semicolons', 'pitch' )
);
$row1->addChild(
	'page_page_title_separator_start_custom_style',
	$page_page_title_separator_start_custom_style
);

$page_page_title_separator_animations_data_end = new PitchQodeGroup(
	esc_html__( 'Scrolling Animation End Point', 'pitch' ),
	esc_html__( 'These are properties for the last keyframe in scrolling animation', 'pitch' )
);
$page_page_title_separator_animations_container->addChild(
	'page_page_title_separator_animations_data_end',
	$page_page_title_separator_animations_data_end
);

$row2 = new PitchQodeRow();
$page_page_title_separator_animations_data_end->addChild(
	'row2',
	$row2
);

$page_page_title_separator_data_end = new PitchQodeMetaField(
	'textsimple',
	'page_page_title_separator_data_end',
	'',
	esc_html__( 'Scrollbar Top Distance (px)', 'pitch' )
);
$row2->addChild(
	'page_page_title_separator_data_end',
	$page_page_title_separator_data_end
);

$page_page_title_separator_end_custom_style = new PitchQodeMetaField(
	'textareasimple',
	'page_page_title_separator_end_custom_style',
	'',
	esc_html__( 'Enter CSS declarations separated by semicolons', 'pitch' )
);
$row2->addChild(
	'page_page_title_separator_end_custom_style',
	$page_page_title_separator_end_custom_style
);

//Subtitle Animations
$page_page_subtitle_animations = new PitchQodeMetaField(
	'selectblank',
	'page_page_subtitle_animations',
	'',
	esc_html__( 'Enable Page Subtitle Animations', 'pitch' ),
	esc_html__( 'This option will enable Page Subtitle Scroll Animations', 'pitch' ),
	array(
		'no' => esc_html__( 'No', 'pitch' ),
		'yes' => esc_html__( 'Yes', 'pitch' )
	),
	array(
		'dependence' => true,
		'hide'       => array(
			''   => '#qodef_page_page_subtitle_animations_container',
			'no' => '#qodef_page_page_subtitle_animations_container'
		),
		'show'       => array(
			'yes' => '#qodef_page_page_subtitle_animations_container'
		)
	)
);
$PitchQodeTitleAnimations->addChild(
	'page_page_subtitle_animations',
	$page_page_subtitle_animations
);

$page_page_subtitle_animations_container = new PitchQodeContainer(
	'page_page_subtitle_animations_container',
	'page_page_subtitle_animations',
	'',
	array( '', 'no' )
);
$PitchQodeTitleAnimations->addChild(
	'page_page_subtitle_animations_container',
	$page_page_subtitle_animations_container
);

$page_page_subtitle_animations_data_start = new PitchQodeGroup(
	esc_html__( 'Scrolling Animation Start Point', 'pitch' ),
	esc_html__( 'These are properties for the first keyframe in scrolling animation', 'pitch' )
);
$page_page_subtitle_animations_container->addChild(
	'page_page_subtitle_animations_data_start',
	$page_page_subtitle_animations_data_start
);

$row1 = new PitchQodeRow();
$page_page_subtitle_animations_data_start->addChild(
	'row1',
	$row1
);

$page_page_subtitle_data_start = new PitchQodeMetaField(
	'textsimple',
	'page_page_subtitle_data_start',
	'',
	esc_html__( 'Scrollbar Top Distance (px)', 'pitch' )
);
$row1->addChild(
	'page_page_subtitle_data_start',
	$page_page_subtitle_data_start
);

$page_page_subtitle_start_custom_style = new PitchQodeMetaField(
	'textareasimple',
	'page_page_subtitle_start_custom_style',
	'',
	esc_html__( 'Enter CSS declarations separated by semicolons', 'pitch' )
);
$row1->addChild(
	'page_page_subtitle_start_custom_style',
	$page_page_subtitle_start_custom_style
);

$page_page_subtitle_animations_data_end = new PitchQodeGroup(
	esc_html__( 'Scrolling Animation End Point', 'pitch' ),
	esc_html__( 'These are properties for the last keyframe in scrolling animation', 'pitch' )
);
$page_page_subtitle_animations_container->addChild(
	'page_page_subtitle_animations_data_end',
	$page_page_subtitle_animations_data_end
);

$row2 = new PitchQodeRow();
$page_page_subtitle_animations_data_end->addChild(
	'row2',
	$row2
);

$page_page_subtitle_data_end = new PitchQodeMetaField(
	'textsimple',
	'page_page_subtitle_data_end',
	'',
	esc_html__( 'Scrollbar Top Distance (px)', 'pitch' )
);
$row2->addChild(
	'page_page_subtitle_data_end',
	$page_page_subtitle_data_end
);

$page_page_subtitle_end_custom_style = new PitchQodeMetaField(
	'textareasimple',
	'page_page_subtitle_end_custom_style',
	'',
	esc_html__( 'Enter CSS declarations separated by semicolons', 'pitch' )
);
$row2->addChild(
	'page_page_subtitle_end_custom_style',
	$page_page_subtitle_end_custom_style
);

//Graphic Animations
$page_page_title_graphic_animations = new PitchQodeMetaField(
	'selectblank',
	'page_page_title_graphic_animations',
	'',
	esc_html__( 'Enable Page Title Graphic Animations', 'pitch' ),
	esc_html__( 'This option will enable Page Title Graphic Scroll Animations', 'pitch' ),
	array(
		'no' => esc_html__( 'No', 'pitch' ),
		'yes' => esc_html__( 'Yes', 'pitch' )
	),
	array(
		'dependence' => true,
		'hide'       => array(
			''   => '#qodef_page_page_title_graphic_animations_container',
			'no' => '#qodef_page_page_title_graphic_animations_container'
		),
		'show'       => array(
			'yes' => '#qodef_page_page_title_graphic_animations_container'
		)
	)
);
$PitchQodeTitleAnimations->addChild(
	'page_page_title_graphic_animations',
	$page_page_title_graphic_animations
);

$page_page_title_graphic_animations_container = new PitchQodeContainer(
	'page_page_title_graphic_animations_container',
	'page_page_title_graphic_animations',
	'',
	array( '', 'no' )
);
$PitchQodeTitleAnimations->addChild(
	'page_page_title_graphic_animations_container',
	$page_page_title_graphic_animations_container
);

$page_page_title_graphic_animations_data_start = new PitchQodeGroup(
	esc_html__( 'Scrolling Animation Start Point', 'pitch' ),
	esc_html__( 'These are properties for the first keyframe in scrolling animation', 'pitch' )
);
$page_page_title_graphic_animations_container->addChild(
	'page_page_title_graphic_animations_data_start',
	$page_page_title_graphic_animations_data_start
);

$row1 = new PitchQodeRow();
$page_page_title_graphic_animations_data_start->addChild(
	'row1',
	$row1
);

$page_page_title_graphic_data_start = new PitchQodeMetaField(
	'textsimple',
	'page_page_title_graphic_data_start',
	'',
	esc_html__( 'Scrollbar Top Distance (px)', 'pitch' )
);
$row1->addChild(
	'page_page_title_graphic_data_start',
	$page_page_title_graphic_data_start
);

$page_page_title_graphic_start_custom_style = new PitchQodeMetaField(
	'textareasimple',
	'page_page_title_graphic_start_custom_style',
	'',
	esc_html__( 'Enter CSS declarations separated by semicolons', 'pitch' )
);
$row1->addChild(
	'page_page_title_graphic_start_custom_style',
	$page_page_title_graphic_start_custom_style
);

$page_page_title_graphic_animations_data_end = new PitchQodeGroup(
	esc_html__( 'Scrolling Animation End Point', 'pitch' ),
	esc_html__( 'These are properties for the last keyframe in scrolling animation', 'pitch' )
);
$page_page_title_graphic_animations_container->addChild(
	'page_page_title_graphic_animations_data_end',
	$page_page_title_graphic_animations_data_end
);

$row2 = new PitchQodeRow();
$page_page_title_graphic_animations_data_end->addChild(
	'row2',
	$row2
);

$page_page_title_graphic_data_end = new PitchQodeMetaField(
	'textsimple',
	'page_page_title_graphic_data_end',
	'',
	esc_html__( 'Scrollbar Top Distance (px)', 'pitch' )
);
$row2->addChild(
	'page_page_title_graphic_data_end',
	$page_page_title_graphic_data_end
);

$page_page_title_graphic_end_custom_style = new PitchQodeMetaField(
	'textareasimple',
	'page_page_title_graphic_end_custom_style',
	'',
	esc_html__( 'Enter CSS declarations separated by semicolons', 'pitch' )
);
$row2->addChild(
	'page_page_title_graphic_end_custom_style',
	$page_page_title_graphic_end_custom_style
);

//Breadcrumb animations
$animation_page_page_title_breadcrumbs_container = new PitchQodeContainerNoStyle(
	'animation_page_page_title_breadcrumbs_container',
	'qode_enable_breadcrumbs',
	'no'
);
$PitchQodeTitleAnimations->addChild(
	'animation_page_page_title_breadcrumbs_container',
	$animation_page_page_title_breadcrumbs_container
);

$page_page_title_breadcrumbs_animations = new PitchQodeMetaField(
	'selectblank',
	'page_page_title_breadcrumbs_animations',
	'',
	esc_html__( 'Enable Page Title Breadcrumbs Animations', 'pitch' ),
	esc_html__( 'This option will enable Page Title Breadcrumbs Scroll Animations', 'pitch' ),
	array(
		'no' => esc_html__( 'No', 'pitch' ),
		'yes' => esc_html__( 'Yes', 'pitch' )
	),
	array(
		'dependence' => true,
		'hide'       => array(
			''   => '#qodef_page_page_title_breadcrumbs_animations_container',
			'no' => '#qodef_page_page_title_breadcrumbs_animations_container'
		),
		'show'       => array(
			'yes' => '#qodef_page_page_title_breadcrumbs_animations_container'
		)
	)
);
$animation_page_page_title_breadcrumbs_container->addChild(
	'page_page_title_breadcrumbs_animations',
	$page_page_title_breadcrumbs_animations
);

$page_page_title_breadcrumbs_animations_container = new PitchQodeContainer(
	'page_page_title_breadcrumbs_animations_container',
	'page_page_title_breadcrumbs_animations',
	'',
	array( '', 'no' )
);
$animation_page_page_title_breadcrumbs_container->addChild(
	'page_page_title_breadcrumbs_animations_container',
	$page_page_title_breadcrumbs_animations_container
);

$page_page_title_breadcrumbs_animations_data_start = new PitchQodeGroup(
	esc_html__( 'Scrolling Animation Start Point', 'pitch' ),
	esc_html__( 'These are properties for the first keyframe in scrolling animation', 'pitch' )
);
$page_page_title_breadcrumbs_animations_container->addChild(
	'page_page_title_breadcrumbs_animations_data_start',
	$page_page_title_breadcrumbs_animations_data_start
);

$row1 = new PitchQodeRow();
$page_page_title_breadcrumbs_animations_data_start->addChild(
	'row1',
	$row1
);

$page_page_title_breadcrumbs_data_start = new PitchQodeMetaField(
	'textsimple',
	'page_page_title_breadcrumbs_data_start',
	'',
	esc_html__( 'Scrollbar Top Distance (px)', 'pitch' )
);
$row1->addChild(
	'page_page_title_breadcrumbs_data_start',
	$page_page_title_breadcrumbs_data_start
);

$page_page_title_breadcrumbs_start_custom_style = new PitchQodeMetaField(
	'textareasimple',
	'page_page_title_breadcrumbs_start_custom_style',
	'',
	esc_html__( 'Enter CSS declarations separated by semicolons', 'pitch' )
);
$row1->addChild(
	'page_page_title_breadcrumbs_start_custom_style',
	$page_page_title_breadcrumbs_start_custom_style
);

$page_page_title_breadcrumbs_animations_data_end = new PitchQodeGroup(
	esc_html__( 'Scrolling Animation End Point', 'pitch' ),
	esc_html__( 'These are properties for the last keyframe in scrolling animation', 'pitch' )
);
$page_page_title_breadcrumbs_animations_container->addChild(
	'page_page_title_breadcrumbs_animations_data_end',
	$page_page_title_breadcrumbs_animations_data_end
);

$row2 = new PitchQodeRow();
$page_page_title_breadcrumbs_animations_data_end->addChild(
	'row2',
	$row2
);

$page_page_title_breadcrumbs_data_end = new PitchQodeMetaField(
	'textsimple',
	'page_page_title_breadcrumbs_data_end',
	'',
	esc_html__( 'Scrollbar Top Distance (px)', 'pitch' )
);
$row2->addChild(
	'page_page_title_breadcrumbs_data_end',
	$page_page_title_breadcrumbs_data_end
);

$page_page_title_breadcrumbs_end_custom_style = new PitchQodeMetaField(
	'textareasimple',
	'page_page_title_breadcrumbs_end_custom_style',
	'',
	esc_html__( 'Enter CSS declarations separated by semicolons', 'pitch' )
);
$row2->addChild(
	'page_page_title_breadcrumbs_end_custom_style',
	$page_page_title_breadcrumbs_end_custom_style
);

// Content Bottom

$qodeContentBottom = new QodePitchMetaBox(
	"portfolio_page",
	esc_html__( "Content Bottom", 'pitch' )
);
$pitch_qode_framework->qodeMetaBoxes->addMetaBox(
	"portfolio_content_bottom_page",
	$qodeContentBottom
);

$qode_enable_content_bottom_area = new PitchQodeMetaField(
	"selectblank",
	"qode_enable_content_bottom_area",
	"",
	esc_html__( "Show Content Bottom Area", 'pitch' ),
	esc_html__( "Do you want to show content bottom area?", 'pitch' ),
	array(
		"no" => esc_html__( "No", 'pitch' ),
		"yes" => esc_html__( "Yes", 'pitch' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			"no" => "#qodef_qode_enable_content_bottom_area_container",
			""   => "#qodef_qode_enable_content_bottom_area_container"
		),
		"show"       => array(
			"yes" => "#qodef_qode_enable_content_bottom_area_container"
		)
	)
);
$qodeContentBottom->addChild(
	"qode_enable_content_bottom_area",
	$qode_enable_content_bottom_area
);

$qode_enable_content_bottom_area_container = new PitchQodeContainer(
	"qode_enable_content_bottom_area_container",
	"qode_enable_content_bottom_area",
	"no",
	array( "", "no" )
);
$qodeContentBottom->addChild(
	"qode_enable_content_bottom_area_container",
	$qode_enable_content_bottom_area_container
);

$qode_content_bottom_background_color = new PitchQodeMetaField(
	"color",
	"qode_content_bottom_background_color",
	"",
	esc_html__( "Background Color", 'pitch' ),
	esc_html__( "Choose a color for content bottom area", 'pitch' )
);
$qode_enable_content_bottom_area_container->addChild(
	"qode_content_bottom_background_color",
	$qode_content_bottom_background_color
);

$qode_choose_content_bottom_sidebar = new PitchQodeMetaField(
	"selectblank",
	"qode_choose_content_bottom_sidebar",
	"",
	esc_html__( "Custom Widget", 'pitch' ),
	esc_html__( "Choose Custom Widget area to display", 'pitch' ),
	$qode_custom_sidebars
);
$qode_enable_content_bottom_area_container->addChild(
	"qode_choose_content_bottom_sidebar",
	$qode_choose_content_bottom_sidebar
);

$qode_content_bottom_sidebar_in_grid = new PitchQodeMetaField(
	"selectblank",
	"qode_content_bottom_sidebar_in_grid",
	"",
	esc_html__( "Display in Grid", 'pitch' ),
	esc_html__( "Enabling this option will place Content Bottom in grid", 'pitch' ),
	array(
		"no" => esc_html__( "No", 'pitch' ),
		"yes" => esc_html__( "Yes", 'pitch' )
	)
);
$qode_enable_content_bottom_area_container->addChild(
	"qode_content_bottom_sidebar_in_grid",
	$qode_content_bottom_sidebar_in_grid
);

// Side Bar Area

$qodeSideBar = new QodePitchMetaBox(
	"portfolio_page",
	esc_html__( "Sidebar", 'pitch' )
);
$pitch_qode_framework->qodeMetaBoxes->addMetaBox(
	"portfolio_side_bar",
	$qodeSideBar
);

$qode_show_sidebar = new PitchQodeMetaField(
	"selectblank",
	"qode_portfolio_show_sidebar",
	"default",
	esc_html__( "Layout", 'pitch' ),
	esc_html__( "Choose the sidebar layout", 'pitch' ),
	array(
		"default" => esc_html__( "Default", 'pitch' ),
		"1" => esc_html__( "Sidebar 1/3 right", 'pitch' ),
		"2" => esc_html__( "Sidebar 1/4 right", 'pitch' ),
		"3" => esc_html__( "Sidebar 1/3 left", 'pitch' ),
		"4" => esc_html__( "Sidebar 1/4 left", 'pitch' ),
	)
);
$qodeSideBar->addChild(
	"qode_portfolio_show_sidebar",
	$qode_show_sidebar
);

$qode_choose_sidebar = new PitchQodeMetaField(
	"selectblank",
	"qode_choose-sidebar",
	"default",
	esc_html__( "Choose Widget Area in Sidebar", 'pitch' ),
	esc_html__( "Choose Custom Widget area to display in Sidebar", 'pitch' ),
	$qode_custom_sidebars
);
$qodeSideBar->addChild(
	"qode_choose-sidebar",
	$qode_choose_sidebar
);

// Footer

$qodeFooter = new QodePitchMetaBox(
	"portfolio_page",
	esc_html__( "Footer", 'pitch' )
);
$pitch_qode_framework->qodeMetaBoxes->addMetaBox(
	"portfolio_footer",
	$qodeFooter
);

$qode_footer_disable = new PitchQodeMetaField(
	"yesno",
	"qode_footer-disable",
	"no",
	esc_html__( "Disable Footer for this Page", 'pitch' ),
	esc_html__( "Enabling this option will hide footer on your page", 'pitch' )
);
$qodeFooter->addChild(
	"qode_footer-disable",
	$qode_footer_disable
);

// SEO

$qodeSeo = new QodePitchMetaBox(
	"portfolio_page",
	esc_html__( "SEO", 'pitch' )
);
$pitch_qode_framework->qodeMetaBoxes->addMetaBox(
	"portfolio_seo",
	$qodeSeo
);

$seo_title = new PitchQodeMetaField(
	"text",
	"qode_seo_title",
	"",
	esc_html__( "SEO Title", 'pitch' ),
	esc_html__( "Enter custom Title for this page", 'pitch' )
);
$qodeSeo->addChild(
	"qode_seo_title",
	$seo_title
);

$seo_keywords = new PitchQodeMetaField(
	"text",
	"qode_seo_keywords",
	"",
	esc_html__( "SEO Keywords", 'pitch' ),
	esc_html__( "Enter the list of keywords separated by commas", 'pitch' )
);
$qodeSeo->addChild(
	"qode_seo_keywords",
	$seo_keywords
);

$seo_description = new PitchQodeMetaField(
	"textarea",
	"qode_seo_description",
	"",
	esc_html__( "SEO Description", 'pitch' ),
	esc_html__( "Enter meta description for this page", 'pitch' )
);
$qodeSeo->addChild(
	"qode_seo_description",
	$seo_description
);
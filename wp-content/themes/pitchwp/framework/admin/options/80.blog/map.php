<?php

$blogPage = new QodePitchAdminPage(
	"8",
	esc_html__( "Blog", 'pitch' ),
	"fa fa-files-o"
);
$pitch_qode_framework->qodeOptions->addAdminPage(
	"blogPage",
	$blogPage
);

// Blog Post Lists - General

$panel1 = new PitchQodePanel(
	esc_html__( "Blog Lists", 'pitch' ),
	"post_lists_general_panel"
);
$blogPage->addChild(
	"panel1",
	$panel1
);

$blog_style = new PitchQodeField(
	"select",
	"blog_style",
	"1",
	esc_html__( "Archive and Category Layout", 'pitch' ),
	esc_html__( "Choose a default blog layout for archived Blog Post Lists and Category Blog Lists", 'pitch' ),
	array(
		"blog_standard" => esc_html__( "Blog: Standard", 'pitch' ),
		"blog_masonry" => esc_html__( "Blog: Masonry", 'pitch' ),
		"blog_masonry_full_width" => esc_html__( "Blog: Masonry Full Width", 'pitch' ),
		"blog_standard_whole_post" => esc_html__( "Blog: Standard Whole Post", 'pitch' ),
	)
);
$panel1->addChild(
	"blog_style",
	$blog_style
);

$category_blog_sidebar = new PitchQodeField(
	"select",
	"category_blog_sidebar",
	"default",
	esc_html__( "Archive and Category Sidebar", 'pitch' ),
	esc_html__( "Choose a sidebar layout for archived Blog Post Lists and Category Blog Lists", 'pitch' ),
	array(
		"default" => esc_html__( "No Sidebar", 'pitch' ),
		"1" => esc_html__( "Sidebar 1/3 right", 'pitch' ),
		"2" => esc_html__( "Sidebar 1/4 right", 'pitch' ),
		"3" => esc_html__( "Sidebar 1/3 left", 'pitch' ),
		"4" => esc_html__( "Sidebar 1/4 left", 'pitch' )
	)
);
$panel1->addChild(
	"category_blog_sidebar",
	$category_blog_sidebar
);

$pagination = new PitchQodeField(
	"yesno",
	"pagination",
	"yes",
	esc_html__( "Pagination", 'pitch' ),
	esc_html__( "Enabling this option will display pagination links on bottom of Blog Post List", 'pitch' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_blog_hide_pagination_list_container"
	)
);
$panel1->addChild(
	"pagination",
	$pagination
);

$blog_hide_pagination_list_container = new PitchQodeContainer(
	"blog_hide_pagination_list_container",
	"pagination",
	""
);
$panel1->addChild(
	"blog_hide_pagination_list_container",
	$blog_hide_pagination_list_container
);

$blog_pagination_type = new PitchQodeField(
	"select",
	"blog_pagination_type",
	"standard",
	esc_html__( "Pagination type", 'pitch' ),
	esc_html__( "Choose type of pagination", 'pitch' ),
	array(
		"standard" => esc_html__( "Standard", 'pitch' ),
		"prev_and_next" => esc_html__( "Only Previous and Next", 'pitch' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			"prev_and_next" => "#qodef_blog_page_range_container",
			"standard"      => "#qodef_blog_pagination_text_container"
		),
		"show"       => array(
			"standard"      => "#qodef_blog_page_range_container",
			"prev_and_next" => "#qodef_blog_pagination_text_container"
		)
	)
);
$blog_hide_pagination_list_container->addChild(
	"blog_pagination_type",
	$blog_pagination_type
);

$blog_page_range_container = new PitchQodeContainer(
	"blog_page_range_container",
	"blog_pagination_type",
	"prev_and_next"
);
$blog_hide_pagination_list_container->addChild(
	"blog_page_range_container",
	$blog_page_range_container
);

$blog_page_range = new PitchQodeField(
	"text",
	"blog_page_range",
	"",
	esc_html__( "Pagination Range limit", 'pitch' ),
	esc_html__( "Enter a number that will limit pagination to a certain range of links", 'pitch' ),
	array(),
	array( "col_width" => 3 )
);
$blog_page_range_container->addChild(
	"blog_page_range",
	$blog_page_range
);

$blog_pagination_text_container = new PitchQodeContainer(
	"blog_pagination_text_container",
	"blog_pagination_type",
	"standard"
);
$blog_hide_pagination_list_container->addChild(
	"blog_pagination_text_container",
	$blog_pagination_text_container
);

$group17 = new PitchQodeGroup(
	esc_html__( "Labels for Buttons", 'pitch' ),
	esc_html__( "Enter labels you want for Previous and Next buttons (Previous and Next are standard labels)", 'pitch' )
);
$blog_pagination_text_container->addChild(
	"group17",
	$group17
);

$row1 = new PitchQodeRow();
$group17->addChild(
	"row1",
	$row1
);

$blog_pagination_previous_label = new PitchQodeField(
	"textsimple",
	"blog_pagination_previous_label",
	"",
	esc_html__( "Previous Label", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_pagination_previous_label",
	$blog_pagination_previous_label
);

$blog_pagination_next_label = new PitchQodeField(
	"textsimple",
	"blog_pagination_next_label",
	"",
	esc_html__( "Next Label", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_pagination_next_label",
	$blog_pagination_next_label
);

$blog_pagination_border_above_yesno = new PitchQodeField(
	"yesno",
	"blog_pagination_border_above_yesno",
	"no",
	esc_html__( "Border Above Pagination", 'pitch' ),
	esc_html__( "Enabling this option will display border above pagination", 'pitch' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_show_on_yes" => "#qodef_blog_pagination_border_container"
	)
);
$blog_page_range_container->addChild(
	"blog_pagination_border_above_yesno",
	$blog_pagination_border_above_yesno
);

$blog_pagination_border_container = new PitchQodeContainer(
	"blog_pagination_border_container",
	"blog_pagination_border_above_yesno",
	"no"
);
$blog_page_range_container->addChild(
	"blog_pagination_border_container",
	$blog_pagination_border_container
);

$group18 = new PitchQodeGroup(
	esc_html__( "Border Style", 'pitch' ),
	esc_html__( "Define style for border top on pagination", 'pitch' )
);
$blog_pagination_border_container->addChild(
	"group18",
	$group18
);

$row1 = new PitchQodeRow();
$group18->addChild(
	"row1",
	$row1
);

$blog_pgn_border_color = new PitchQodeField(
	"colorsimple",
	"blog_pgn_border_color",
	"",
	esc_html__( "Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_pgn_border_color",
	$blog_pgn_border_color
);

$blog_pgn_border_width = new PitchQodeField(
	"textsimple",
	"blog_pgn_border_width",
	"",
	esc_html__( "Width (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_pgn_border_width",
	$blog_pgn_border_width
);

$blog_pgn_border_style = new PitchQodeField(
	"selectsimple",
	"blog_pgn_border_style",
	"",
	esc_html__( "Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	array(
		"solid" => esc_html__( "Solid", 'pitch' ),
		"dotted" => esc_html__( "Dotted", 'pitch' ),
		"dashed" => esc_html__( "Dashed", 'pitch' )
	)
);
$row1->addChild(
	"blog_pgn_border_style",
	$blog_pgn_border_style
);

$blog_pagination_border_margin = new PitchQodeField(
	"text",
	"blog_pagination_border_margin",
	"",
	esc_html__( "Margin from Border (px)", 'pitch' ),
	esc_html__( "Set margin from border to pagination buttons", 'pitch' ),
	array(),
	array( "col_width" => 3 )
);
$blog_pagination_border_container->addChild(
	"blog_pagination_border_margin",
	$blog_pagination_border_margin
);

$number_of_chars = new PitchQodeField(
	"text",
	"number_of_chars",
	"45",
	esc_html__( "Number of Words in Excerpt", 'pitch' ),
	' Enter a number of words in excerpt (article summary)',
	array(),
	array( "col_width" => 3 )
);
$panel1->addChild(
	"number_of_chars",
	$number_of_chars
);

// Blog Single

$panel20 = new PitchQodePanel(
	esc_html__( "Blog Single", 'pitch' ),
	"blog_single_panel"
);
$blogPage->addChild(
	"panel20",
	$panel20
);

$blog_single_style = new PitchQodeField(
	"select",
	"blog_single_style",
	"blog_standard_type",
	esc_html__( "Blog Single Post Template", 'pitch' ),
	esc_html__( "Choose template style for blog single post", 'pitch' ),
	array(
		""                   => "",
		"blog_standard_type" => esc_html__( "Blog: Standard", 'pitch' ),
	),
	array(
		"dependence" => true,
		"hide"       => array(
			""                   => "#qodef_blog_single_show_time",
			"blog_standard_type" => "#qodef_blog_single_show_time",
			"blog_masonry"       => "#qodef_blog_single_show_time"
		),
		"show"       => array()
	)
);
$panel20->addChild(
	"blog_single_style",
	$blog_single_style
);

$blog_single_sidebar = new PitchQodeField(
	"select",
	"blog_single_sidebar",
	"default",
	esc_html__( "Sidebar Layout", 'pitch' ),
	esc_html__( "Choose a sidebar layout for Blog Single pages", 'pitch' ),
	array(
		"default" => esc_html__( "No Sidebar", 'pitch' ),
		"1" => esc_html__( "Sidebar 1/3 right", 'pitch' ),
		"2" => esc_html__( "Sidebar 1/4 right", 'pitch' ),
		"3" => esc_html__( "Sidebar 1/3 left", 'pitch' ),
		"4" => esc_html__( "Sidebar 1/4 left", 'pitch' )
	)
);
$panel20->addChild(
	"blog_single_sidebar",
	$blog_single_sidebar
);

$custom_sidebars = pitch_qode_get_custom_sidebars();

$blog_single_sidebar_custom_display = new PitchQodeField(
	"selectblank",
	"blog_single_sidebar_custom_display",
	"",
	esc_html__( "Sidebar to Display", 'pitch' ),
	esc_html__( "Choose a sidebar to display on Blog Single pages", 'pitch' ),
	$custom_sidebars
);
$panel20->addChild(
	"blog_single_sidebar_custom_display",
	$blog_single_sidebar_custom_display
);

$blog_single_image_size = new PitchQodeField(
	"select",
	"blog_single_image_size",
	"full",
	esc_html__( "Blog Image Size", 'pitch' ),
	esc_html__( "Choose image size for Blog Single pages", 'pitch' ),
	array(
		"full" => esc_html__( "Default", 'pitch' ),
		"portfolio-landscape" => esc_html__( "Landscape", 'pitch' ),
		"portfolio-portrait" => esc_html__( "Portrait", 'pitch' ),
		"custom" => esc_html__( "Custom", 'pitch' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			"full"                => "#qodef_blog_single_image_size_container",
			"portfolio-landscape" => "#qodef_blog_single_image_size_container",
			"portfolio-portrait"  => "#qodef_blog_single_image_size_container",
			"custom"              => ""
		),
		"show"       => array(
			"full"                => "",
			"portfolio-landscape" => "",
			"portfolio-portrait"  => "",
			"custom"              => "#qodef_blog_single_image_size_container"
		)
	)
);
$panel20->addChild(
	"blog_single_image_size",
	$blog_single_image_size
);

$blog_single_image_size_container = new PitchQodeContainer(
	"blog_single_image_size_container",
	"blog_single_image_size",
	"",
	array( "full", "portfolio-landscape", "portfolio-portrait" )
);
$panel20->addChild(
	"blog_single_image_size_container",
	$blog_single_image_size_container
);

$blog_single_image_size_height = new PitchQodeField(
	"text",
	"blog_single_image_size_height",
	"",
	esc_html__( "Image Height (px)", 'pitch' ),
	esc_html__( "Enter width (in pixels) for Custom Image for Blog Single", 'pitch' ),
	array(),
	array( "col_width" => 3 )
);
$blog_single_image_size_container->addChild(
	"blog_single_image_size_height",
	$blog_single_image_size_height
);

$blog_single_image_size_width = new PitchQodeField(
	"text",
	"blog_single_image_size_width",
	"",
	esc_html__( "Image Width (px)", 'pitch' ),
	esc_html__( "Enter width (in pixels) for Custom Image for Blog Single", 'pitch' ),
	array(),
	array( "col_width" => 3 )
);
$blog_single_image_size_container->addChild(
	"blog_single_image_size_width",
	$blog_single_image_size_width
);

$blog_single_show_ql_icon = new PitchQodeField(
	"yesno",
	"blog_single_show_ql_icon",
	"yes",
	esc_html__( "Enable Quote/Link Icon", 'pitch' ),
	esc_html__( "Enabling this option will show Quote/Link Icon on Blog Single posts", 'pitch' )
);
$panel20->addChild(
	"blog_single_show_ql_icon",
	$blog_single_show_ql_icon
);

$blog_single_navigation = new PitchQodeField(
	"yesno",
	"blog_single_navigation",
	"no",
	esc_html__( "Enable Prev/Next Single Post Navigation Links", 'pitch' ),
	esc_html__( "Enable navigation links through the blog posts (left and right arrows will appear)", 'pitch' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_blog_hide_pagination_container"
	)
);
$panel20->addChild(
	"blog_single_navigation",
	$blog_single_navigation
);

$blog_hide_pagination_container = new PitchQodeContainer(
	"blog_hide_pagination_container",
	"blog_single_navigation",
	"no"
);
$panel20->addChild(
	"blog_hide_pagination_container",
	$blog_hide_pagination_container
);

$blog_navigation_through_same_category = new PitchQodeField(
	"yesno",
	"blog_navigation_through_same_category",
	"no",
	esc_html__( "Enable Navigation Only in Current Category", 'pitch' ),
	esc_html__( "Limit your navigation only through current category", 'pitch' )
);
$blog_hide_pagination_container->addChild(
	"blog_navigation_through_same_category",
	$blog_navigation_through_same_category
);

$blog_single_title_tags = new PitchQodeField(
	"select",
	"blog_single_title_tags",
	"h5",
	esc_html__( "Headlines Below Post Content", 'pitch' ),
	esc_html__( 'Choose a tag for headlines below post content ("Tags", "Post a comment", etc)', 'pitch' ),
	array(
		"h2" => esc_html__( "h2", 'pitch' ),
		"h3" => esc_html__( "h3", 'pitch' ),
		"h4" => esc_html__( "h4", 'pitch' ),
		"h5" => esc_html__( "h5", 'pitch' ),
		"h6" => esc_html__( "h6", 'pitch' )
	)
);
$panel20->addChild(
	"blog_single_title_tags",
	$blog_single_title_tags
);

$group1 = new PitchQodeGroup(
	esc_html__( "Blog Single Spacing", 'pitch' ),
	esc_html__( "Set spacing for single post pages", 'pitch' )
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

$blog_single_tags_holder_margin_top = new PitchQodeField(
	"textsimple",
	"blog_single_tags_holder_margin_top",
	"",
	esc_html__( "Margin Above Tags(px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_single_tags_holder_margin_top",
	$blog_single_tags_holder_margin_top
);

$blog_single_navigation_margin = new PitchQodeField(
	"textsimple",
	"blog_single_navigation_margin",
	"",
	esc_html__( "Margin Above and Under Navigation(px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_single_navigation_margin",
	$blog_single_navigation_margin
);

$blog_single_comments_holder_margin = new PitchQodeField(
	"textsimple",
	"blog_single_comments_holder_margin",
	"",
	esc_html__( "Margin Above and Under Comments(px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_single_comments_holder_margin",
	$blog_single_comments_holder_margin
);

$post_info_data_single = new PitchQodeTitle(
	"post_info_data_single",
	esc_html__( "Post Info Data Fields", 'pitch' )
);
$panel20->addChild(
	"post_info_data_single",
	$post_info_data_single
);

$blog_single_show_date = new PitchQodeField(
	"yesno",
	"blog_single_show_date",
	"yes",
	esc_html__( "Show Date", 'pitch' ),
	esc_html__( "Enabling this option will show date on Blog Single posts", 'pitch' )
);
$panel20->addChild(
	"blog_single_show_date",
	$blog_single_show_date
);

$blog_single_show_like = new PitchQodeField(
	"yesno",
	"blog_single_show_like",
	"no",
	esc_html__( "Show Like", 'pitch' ),
	esc_html__( "Enabling this option will turn on 'Likes' on Blog Single posts", 'pitch' )
);
$panel20->addChild(
	"blog_single_show_like",
	$blog_single_show_like
);

$blog_single_show_social_share = new PitchQodeField(
	"yesno",
	"blog_single_show_social_share",
	"no",
	esc_html__( "Show Share", 'pitch' ),
	esc_html__( "Enabling this option will show share on Single Post", 'pitch' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_blog_single_share_options_container"
	)
);
$panel20->addChild(
	"blog_single_show_social_share",
	$blog_single_show_social_share
);

$blog_single_share_options_container = new PitchQodeContainer(
	"blog_single_share_options_container",
	"blog_single_show_social_share",
	"no"
);
$panel20->addChild(
	"blog_single_share_options_container",
	$blog_single_share_options_container
);

$blog_single_select_share_option = new PitchQodeField(
	"select",
	"blog_single_select_share_option",
	"dropdown",
	esc_html__( "Social Share Style", 'pitch' ),
	esc_html__( "Choose Social Share Style for Single Post", 'pitch' ),
	array(
		"dropdown" => esc_html__( "Social Share Dropdown", 'pitch' ),
		"list" => esc_html__( "Social Share List", 'pitch' )
	)
);

$blog_single_share_options_container->addChild(
	"blog_single_select_share_option",
	$blog_single_select_share_option
);

$blog_single_show_category = new PitchQodeField(
	"yesno",
	"blog_single_show_category",
	"yes",
	esc_html__( "Show Category", 'pitch' ),
	esc_html__( "Enabling this option will show category/categories on Blog Single posts", 'pitch' )
);
$panel20->addChild(
	"blog_single_show_category",
	$blog_single_show_category
);

$blog_single_show_time = new PitchQodeField(
	"yesno",
	"blog_single_show_time",
	"yes",
	esc_html__( "Show Time", 'pitch' ),
	esc_html__( "Enabling this option will show time on Blog Single posts", 'pitch' ),
	"",
	array( "blog_standard_type", "blog_masonry" )
);
$panel20->addChild(
	"blog_single_show_time",
	$blog_single_show_time
);

$blog_author_info = new PitchQodeField(
	"yesno",
	"blog_author_info",
	"no",
	esc_html__( "Show Author Info", 'pitch' ),
	esc_html__( "Enabling this option will display author name and descriptions on Blog Single pages", 'pitch' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_enable_blog_author_info_container"
	)
);
$panel20->addChild(
	"blog_author_info",
	$blog_author_info
);

$enable_blog_author_info_container = new PitchQodeContainer(
	"enable_blog_author_info_container",
	"blog_author_info",
	"no"
);
$panel20->addChild(
	"enable_blog_author_info_container",
	$enable_blog_author_info_container
);

$enable_author_info_email = new PitchQodeField(
	"yesno",
	"enable_author_info_email",
	"no",
	esc_html__( "Show Author Email", 'pitch' ),
	esc_html__( "Enabling this option will show author email", 'pitch' )
);
$enable_blog_author_info_container->addChild(
	"enable_author_info_email",
	$enable_author_info_email
);

$group1 = new PitchQodeGroup(
	esc_html__( "Blog Single Author Info Box Style", 'pitch' ),
	esc_html__( "Set styles for author info box on single post pages", 'pitch' )
);
$enable_blog_author_info_container->addChild(
	"group1",
	$group1
);

$row1 = new PitchQodeRow();
$group1->addChild(
	"row1",
	$row1
);

$blog_single_post_author_info_margin_top = new PitchQodeField(
	"textsimple",
	"blog_single_post_author_info_margin_top",
	"",
	esc_html__( "Margin Top for Author Info Holder (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_single_post_author_info_margin_top",
	$blog_single_post_author_info_margin_top
);

$blog_single_post_author_info_background_color = new PitchQodeField(
	"colorsimple",
	"blog_single_post_author_info_background_color",
	"",
	esc_html__( "Background Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_single_post_author_info_background_color",
	$blog_single_post_author_info_background_color
);

$blog_single_post_author_info_border_width = new PitchQodeField(
	"textsimple",
	"blog_single_post_author_info_border_width",
	"",
	esc_html__( "Border width(px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_single_post_author_info_border_width",
	$blog_single_post_author_info_border_width
);

$blog_single_post_author_info_border_color = new PitchQodeField(
	"colorsimple",
	"blog_single_post_author_info_border_color",
	"",
	esc_html__( "Border Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_single_post_author_info_border_color",
	$blog_single_post_author_info_border_color
);

$row2 = new PitchQodeRow();
$group1->addChild(
	"row2",
	$row2
);

$blog_single_post_author_info_padding_top = new PitchQodeField(
	"textsimple",
	"blog_single_post_author_info_padding_top",
	"",
	esc_html__( "Padding Top (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"blog_single_post_author_info_padding_top",
	$blog_single_post_author_info_padding_top
);

$blog_single_post_author_info_padding_bottom = new PitchQodeField(
	"textsimple",
	"blog_single_post_author_info_padding_bottom",
	"",
	esc_html__( "Padding Bottom (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"blog_single_post_author_info_padding_bottom",
	$blog_single_post_author_info_padding_bottom
);

$blog_single_post_author_info_padding_left = new PitchQodeField(
	"textsimple",
	"blog_single_post_author_info_padding_left",
	"",
	esc_html__( "Padding Left (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"blog_single_post_author_info_padding_left",
	$blog_single_post_author_info_padding_left
);

$blog_single_post_author_info_padding_right = new PitchQodeField(
	"textsimple",
	"blog_single_post_author_info_padding_right",
	"",
	esc_html__( "Padding Right (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"blog_single_post_author_info_padding_right",
	$blog_single_post_author_info_padding_right
);

$group2 = new PitchQodeGroup(
	esc_html__( "Blog Single Author Info Title Style", 'pitch' ),
	esc_html__( "Set styles for author info title on single post pages", 'pitch' )
);
$enable_blog_author_info_container->addChild(
	"group2",
	$group2
);

$row1 = new PitchQodeRow();
$group2->addChild(
	"row1",
	$row1
);

$blog_single_post_author_info_title_color = new PitchQodeField(
	"colorsimple",
	"blog_single_post_author_info_title_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_single_post_author_info_title_color",
	$blog_single_post_author_info_title_color
);

$blog_single_post_author_info_title_font_family = new PitchQodeField(
	"fontsimple",
	"blog_single_post_author_info_title_font_family",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_single_post_author_info_title_font_family",
	$blog_single_post_author_info_title_font_family
);

$blog_single_post_author_info_title_fontsize = new PitchQodeField(
	"textsimple",
	"blog_single_post_author_info_title_fontsize",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_single_post_author_info_title_fontsize",
	$blog_single_post_author_info_title_fontsize
);

$blog_single_post_author_info_title_lineheight = new PitchQodeField(
	"textsimple",
	"blog_single_post_author_info_title_lineheight",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_single_post_author_info_title_lineheight",
	$blog_single_post_author_info_title_lineheight
);

$row2 = new PitchQodeRow( true );
$group2->addChild(
	"row2",
	$row2
);

$blog_single_post_author_info_title_fontstyle = new PitchQodeField(
	"selectblanksimple",
	"blog_single_post_author_info_title_fontstyle",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"blog_single_post_author_info_title_fontstyle",
	$blog_single_post_author_info_title_fontstyle
);

$blog_single_post_author_info_title_fontweight = new PitchQodeField(
	"selectblanksimple",
	"blog_single_post_author_info_title_fontweight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"blog_single_post_author_info_title_fontweight",
	$blog_single_post_author_info_title_fontweight
);

$blog_single_post_author_info_title_texttransform = new PitchQodeField(
	"selectblanksimple",
	"blog_single_post_author_info_title_texttransform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row2->addChild(
	"blog_single_post_author_info_title_texttransform",
	$blog_single_post_author_info_title_texttransform
);

$blog_single_post_author_info_title_letterspacing = new PitchQodeField(
	"textsimple",
	"blog_single_post_author_info_title_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"blog_single_post_author_info_title_letterspacing",
	$blog_single_post_author_info_title_letterspacing
);

$row3 = new PitchQodeRow();
$group2->addChild(
	"row3",
	$row3
);

$blog_single_post_author_info_title_margin_bottom = new PitchQodeField(
	"textsimple",
	"blog_single_post_author_info_title_margin_bottom",
	"",
	esc_html__( "Margin Bottom for Author Info Title (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row3->addChild(
	"blog_single_post_author_info_title_margin_bottom",
	$blog_single_post_author_info_title_margin_bottom
);

$group3 = new PitchQodeGroup(
	esc_html__( "Blog Single Author Info Text Style", 'pitch' ),
	esc_html__( "Set styles for author info text on single post pages", 'pitch' )
);
$enable_blog_author_info_container->addChild(
	"group3",
	$group3
);

$row1 = new PitchQodeRow();
$group3->addChild(
	"row1",
	$row1
);

$blog_single_post_author_info_text_color = new PitchQodeField(
	"colorsimple",
	"blog_single_post_author_info_text_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_single_post_author_info_text_color",
	$blog_single_post_author_info_text_color
);

$blog_single_post_author_info_text_font_family = new PitchQodeField(
	"fontsimple",
	"blog_single_post_author_info_text_font_family",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_single_post_author_info_text_font_family",
	$blog_single_post_author_info_text_font_family
);

$blog_single_post_author_info_text_fontsize = new PitchQodeField(
	"textsimple",
	"blog_single_post_author_info_text_fontsize",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_single_post_author_info_text_fontsize",
	$blog_single_post_author_info_text_fontsize
);

$blog_single_post_author_info_text_lineheight = new PitchQodeField(
	"textsimple",
	"blog_single_post_author_info_text_lineheight",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_single_post_author_info_text_lineheight",
	$blog_single_post_author_info_text_lineheight
);

$row2 = new PitchQodeRow( true );
$group3->addChild(
	"row2",
	$row2
);

$blog_single_post_author_info_text_fontstyle = new PitchQodeField(
	"selectblanksimple",
	"blog_single_post_author_info_text_fontstyle",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"blog_single_post_author_info_text_fontstyle",
	$blog_single_post_author_info_text_fontstyle
);

$blog_single_post_author_info_text_fontweight = new PitchQodeField(
	"selectblanksimple",
	"blog_single_post_author_info_text_fontweight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"blog_single_post_author_info_text_fontweight",
	$blog_single_post_author_info_text_fontweight
);

$blog_single_post_author_info_text_texttransform = new PitchQodeField(
	"selectblanksimple",
	"blog_single_post_author_info_text_texttransform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row2->addChild(
	"blog_single_post_author_info_text_texttransform",
	$blog_single_post_author_info_text_texttransform
);

$blog_single_post_author_info_text_letterspacing = new PitchQodeField(
	"textsimple",
	"blog_single_post_author_info_text_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"blog_single_post_author_info_text_letterspacing",
	$blog_single_post_author_info_text_letterspacing
);

$blog_single_show_comments = new PitchQodeField(
	"yesno",
	"blog_single_show_comments",
	"yes",
	esc_html__( "Show Comments", 'pitch' ),
	esc_html__( "Enabling this option will show comments on Blog Single posts", 'pitch' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_enable_blog_comments_container"
	)
);
$panel20->addChild(
	"blog_single_show_comments",
	$blog_single_show_comments
);

$enable_blog_comments_container = new PitchQodeContainer(
	"enable_blog_comments_container",
	"blog_single_show_comments",
	"no"
);
$panel20->addChild(
	"enable_blog_comments_container",
	$enable_blog_comments_container
);

$group1 = new PitchQodeGroup(
	esc_html__( "Comments Box Style", 'pitch' ),
	esc_html__( "Set styles for comments box on single post pages", 'pitch' )
);
$enable_blog_comments_container->addChild(
	"group1",
	$group1
);

$row1 = new PitchQodeRow();
$group1->addChild(
	"row1",
	$row1
);

$blog_single_post_comments_background_color = new PitchQodeField(
	"colorsimple",
	"blog_single_post_comments_background_color",
	"",
	esc_html__( "Background Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_single_post_comments_background_color",
	$blog_single_post_comments_background_color
);

$blog_single_post_comments_border_width = new PitchQodeField(
	"textsimple",
	"blog_single_post_comments_border_width",
	"",
	esc_html__( "Border width(px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_single_post_comments_border_width",
	$blog_single_post_comments_border_width
);

$blog_single_post_comments_border_color = new PitchQodeField(
	"colorsimple",
	"blog_single_post_comments_border_color",
	"",
	esc_html__( "Border Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_single_post_comments_border_color",
	$blog_single_post_comments_border_color
);

$blog_single_post_comments_margin_bottom = new PitchQodeField(
	"textsimple",
	"blog_single_post_comments_margin_bottom",
	"",
	esc_html__( "Margin Bottom (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_single_post_comments_margin_bottom",
	$blog_single_post_comments_margin_bottom
);

$row2 = new PitchQodeRow();
$group1->addChild(
	"row2",
	$row2
);

$blog_single_post_comments_padding_top = new PitchQodeField(
	"textsimple",
	"blog_single_post_comments_padding_top",
	"",
	esc_html__( "Padding Top (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"blog_single_post_comments_padding_top",
	$blog_single_post_comments_padding_top
);

$blog_single_post_comments_padding_bottom = new PitchQodeField(
	"textsimple",
	"blog_single_post_comments_padding_bottom",
	"",
	esc_html__( "Padding Bottom (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"blog_single_post_comments_padding_bottom",
	$blog_single_post_comments_padding_bottom
);

$blog_single_post_comments_padding_left = new PitchQodeField(
	"textsimple",
	"blog_single_post_comments_padding_left",
	"",
	esc_html__( "Padding Left (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"blog_single_post_comments_padding_left",
	$blog_single_post_comments_padding_left
);

$blog_single_post_comments_padding_right = new PitchQodeField(
	"textsimple",
	"blog_single_post_comments_padding_right",
	"",
	esc_html__( "Padding Right (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"blog_single_post_comments_padding_right",
	$blog_single_post_comments_padding_right
);

$group2 = new PitchQodeGroup(
	esc_html__( "Comments Color Style", 'pitch' ),
	esc_html__( "Set styles for comments on single post pages", 'pitch' )
);
$enable_blog_comments_container->addChild(
	"group2",
	$group2
);

$row1 = new PitchQodeRow();
$group2->addChild(
	"row1",
	$row1
);

$blog_single_post_comments_title_color = new PitchQodeField(
	"colorsimple",
	"blog_single_post_comments_title_color",
	"",
	esc_html__( "Title Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_single_post_comments_title_color",
	$blog_single_post_comments_title_color
);

$blog_single_post_comments_text_color = new PitchQodeField(
	"colorsimple",
	"blog_single_post_comments_text_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_single_post_comments_text_color",
	$blog_single_post_comments_text_color
);

$blog_single_post_comments_link_color = new PitchQodeField(
	"colorsimple",
	"blog_single_post_comments_link_color",
	"",
	esc_html__( "Link Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_single_post_comments_link_color",
	$blog_single_post_comments_link_color
);

$blog_single_post_comments_date_color = new PitchQodeField(
	"colorsimple",
	"blog_single_post_comments_date_color",
	"",
	esc_html__( "Date Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_single_post_comments_date_color",
	$blog_single_post_comments_date_color
);

// Advanced Options

$panel_advanced_options = new PitchQodePanel(
	esc_html__( "Advanced Options", 'pitch' ),
	"panel_advanced_options"
);
$blogPage->addChild(
	"panel_advanced_options",
	$panel_advanced_options
);

$blog_standard_type_show_options = new PitchQodeField(
	"yesno",
	"blog_standard_type_show_options",
	"no",
	esc_html__( "Show Standard Template Options", 'pitch' ),
	esc_html__( "Editing these options will have affect on Post List & Single Post", 'pitch' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_blog_standard_type_post_lists"
	)
);
$panel_advanced_options->addChild(
	"blog_standard_type_show_options",
	$blog_standard_type_show_options
);

$blog_masonry_show_options = new PitchQodeField(
	"yesno",
	"blog_masonry_show_options",
	"no",
	esc_html__( "Show Masonry & Masonry Full Width Template Options", 'pitch' ),
	esc_html__( "Editing these options will have affect on Post List & Single Post", 'pitch' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_blog_masonry_post_lists"
	)
);
$panel_advanced_options->addChild(
	"blog_masonry_show_options",
	$blog_masonry_show_options
);

// Blog Post List - Blog: Masonry
$panel10 = new PitchQodePanel(
	esc_html__( "Blog List Templates Options: Masonry & Masonry Full Width", 'pitch' ),
	"blog_masonry_post_lists",
	"blog_masonry_show_options",
	"no"
);
$blogPage->addChild(
	"panel10",
	$panel10
);

$blog_masonry_choose_type = new PitchQodeField(
	"select",
	"blog_masonry_choose_type",
	"blog_masonry_standard",
	esc_html__( "Masonry Type", 'pitch' ),
	esc_html__( 'Choose Type for "Masonry" Blog List', 'pitch' ),
	array(
		"blog_masonry_standard" => esc_html__( "Standard", 'pitch' ),
		"blog_masonry_meta_info_featured_on_side" => esc_html__( "Meta Info Featured on Side", 'pitch' )
	)
);
$panel10->addChild(
	"blog_masonry_choose_type",
	$blog_masonry_choose_type
);

$blog_masonry_number_of_chars = new PitchQodeField(
	"text",
	"blog_masonry_number_of_chars",
	"45",
	esc_html__( "Number of Words in Excerpt", 'pitch' ),
	' Enter a number of words in excerpt (article summary)',
	array(),
	array( "col_width" => 3 )
);
$panel10->addChild(
	"blog_masonry_number_of_chars",
	$blog_masonry_number_of_chars
);

$blog_masonry_read_more_button = new PitchQodeField(
	"yesno",
	"blog_masonry_read_more_button",
	"no",
	esc_html__( "Read More Button", 'pitch' ),
	esc_html__( "Enable Read More Button", 'pitch' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_blog_masonry_read_more_button_container"
	)
);
$panel10->addChild(
	"blog_masonry_read_more_button",
	$blog_masonry_read_more_button
);

$blog_masonry_read_more_button_container = new PitchQodeContainer(
	"blog_masonry_read_more_button_container",
	"blog_masonry_read_more_button",
	"no"
);
$panel10->addChild(
	"blog_masonry_read_more_button_container",
	$blog_masonry_read_more_button_container
);

$blog_masonry_read_more_button_icon = new PitchQodeField(
	"yesno",
	"blog_masonry_read_more_button_icon",
	"no",
	esc_html__( "Enable Icon", 'pitch' ),
	esc_html__( "Enabling this option will place icon in read more button", 'pitch' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_blog_masonry_read_more_button_icon_container"
	)
);
$blog_masonry_read_more_button_container->addChild(
	"blog_masonry_read_more_button_icon",
	$blog_masonry_read_more_button_icon
);

$blog_masonry_read_more_button_icon_container = new PitchQodeContainer(
	"blog_masonry_read_more_button_icon_container",
	"blog_masonry_read_more_button_icon",
	"no"
);
$blog_masonry_read_more_button_container->addChild(
	"blog_masonry_read_more_button_icon_container",
	$blog_masonry_read_more_button_icon_container
);

//init icon pack hide and show array. It will be populated dinamically from collections array
$blog_masonry_read_more_button_icon_pack_hide_array = array();
$blog_masonry_read_more_button_icon_pack_show_array = array();

//do we have some collection added in collections array?
if ( is_array( pitch_qode_icon_collections()->iconCollections ) && count( pitch_qode_icon_collections()->iconCollections ) ) {
	//get collections params array. It will contain values of 'param' property for each collection
	$blog_masonry_read_more_button_icon_collections_params = pitch_qode_icon_collections()->getIconCollectionsParams();
	
	//foreach collection generate hide and show array
	foreach ( pitch_qode_icon_collections()->iconCollections as $dep_collection_key => $dep_collection_object ) {
		$blog_masonry_read_more_button_icon_pack_hide_array[ $dep_collection_key ] = '';
		
		//we need to include only current collection in show string as it is the only one that needs to show
		$blog_masonry_read_more_button_icon_pack_show_array[ $dep_collection_key ] = '#qodef_blog_masonry_read_more_button_icon_' . $dep_collection_object->param . '_container';
		
		//for all collections param generate hide string
		foreach ( $blog_masonry_read_more_button_icon_collections_params as $blog_masonry_read_more_button_icon_collections_param ) {
			//we don't need to include current one, because it needs to be shown, not hidden
			if ( $blog_masonry_read_more_button_icon_collections_param !== $dep_collection_object->param ) {
				$blog_masonry_read_more_button_icon_pack_hide_array[ $dep_collection_key ] .= '#qodef_blog_masonry_read_more_button_icon_' . $blog_masonry_read_more_button_icon_collections_param . '_container,';
			}
		}
		
		//remove remaining ',' character
		$blog_masonry_read_more_button_icon_pack_hide_array[ $dep_collection_key ] = rtrim(
			$blog_masonry_read_more_button_icon_pack_hide_array[ $dep_collection_key ],
			','
		);
	}
	
}

$blog_masonry_read_more_button_icon_pack = new PitchQodeField(
	"select",
	"blog_masonry_read_more_button_icon_pack",
	"font_awesome",
	esc_html__( "Icon Pack", 'pitch' ),
	esc_html__( "Choose icon pack for show load more button", 'pitch' ),
	pitch_qode_icon_collections()->getIconCollections(),
	array(
		"dependence" => true,
		"hide"       => $blog_masonry_read_more_button_icon_pack_hide_array,
		"show"       => $blog_masonry_read_more_button_icon_pack_show_array
	)
);

$blog_masonry_read_more_button_icon_container->addChild(
	"blog_masonry_read_more_button_icon_pack",
	$blog_masonry_read_more_button_icon_pack
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
		
		$blog_masonry_read_more_button_icon_hide_values = $icon_collections_keys;
		$blog_icon_container                            = new PitchQodeContainer(
			"blog_masonry_read_more_button_icon_" . $collection_object->param . "_container",
			"blog_masonry_read_more_button_icon_pack",
			"",
			$blog_masonry_read_more_button_icon_hide_values
		);
		$blog_masonry_read_more_button_icon             = new PitchQodeField(
			"select",
			"blog_masonry_read_more_button_icon_" . $collection_object->param,
			"",
			esc_html__( "Button Icon", 'pitch' ),
			esc_html__( "Choose Button Icon", 'pitch' ),
			$icons_array,
			array( "col_width" => 3 )
		);
		$blog_icon_container->addChild(
			"blog_masonry_read_more_button_icon_" . $collection_object->param,
			$blog_masonry_read_more_button_icon
		);
		
		$blog_masonry_read_more_button_icon_container->addChild(
			"blog_masonry_read_more_button_icon_" . $collection_object->param . "_container",
			$blog_icon_container
		);
	}
	
}

$pagination_masonry = new PitchQodeField(
	"select",
	"pagination_masonry",
	"pagination",
	esc_html__( "Pagination on Masonry", 'pitch' ),
	esc_html__( 'Choose a pagination style for "Masonry" Blog List', 'pitch' ),
	array(
		"pagination" => esc_html__( "Pagination", 'pitch' ),
		"load_more" => esc_html__( "Load More", 'pitch' ),
		"infinite_scroll" => esc_html__( "Infinite Scroll", 'pitch' )
	)
);
$panel10->addChild(
	"pagination_masonry",
	$pagination_masonry
);

$blog_masonry_columns = new PitchQodeField(
	'select',
	'blog_masonry_columns',
	'',
	esc_html__( 'Masonry Blog Columns', 'pitch' ),
	esc_html__( 'Choose a number of columns for "Masonry" Blog List without sidebar', 'pitch' ),
	array(
		'two_columns'   => '2',
		'three_columns' => '3'
	)
);
$panel10->addChild(
	'blog_masonry_columns',
	$blog_masonry_columns
);

$blog_masonry_full_width_columns = new PitchQodeField(
	'select',
	'blog_masonry_full_width_columns',
	'',
	esc_html__( 'Full Width Masonry Blog Columns', 'pitch' ),
	esc_html__( 'Choose a number of columns for "Masonry" Blog List', 'pitch' ),
	array(
		'three_columns' => '3',
		'four_columns'  => '4',
		'five_columns'  => '5'
	)
);
$panel10->addChild(
	'blog_masonry_full_width_columns',
	$blog_masonry_full_width_columns
);

$blog_masonry_full_width_margin = new PitchQodeField(
	"text",
	"blog_masonry_full_width_margin",
	"",
	esc_html__( "Full Width Masonry Margin", 'pitch' ),
	esc_html__( 'Please insert margin in px (i.e. 5px), or in % (i.e 5%)', 'pitch' ),
	array(),
	array( "col_width" => 3 )
);
$panel10->addChild(
	"blog_masonry_full_width_margin",
	$blog_masonry_full_width_margin
);

$blog_masonry_filter = new PitchQodeField(
	"yesno",
	"blog_masonry_filter",
	"no",
	esc_html__( "Show Category Filter on Masonry", 'pitch' ),
	esc_html__( 'Enabling this option will display a Category Filter on "Masonry" Blog List', 'pitch' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_blog_masonry_filter_container"
	)
);
$panel10->addChild(
	"blog_masonry_filter",
	$blog_masonry_filter
);

$blog_masonry_filter_container = new PitchQodeContainer(
	"blog_masonry_filter_container",
	"blog_masonry_filter",
	"no"
);
$panel10->addChild(
	"blog_masonry_filter_container",
	$blog_masonry_filter_container
);

// Blog Masonry Filter
$blog_masonry_filter_background_color = new PitchQodeField(
	"color",
	"blog_masonry_filter_background_color",
	"",
	esc_html__( "Background Color", 'pitch' ),
	esc_html__( "Choose color for background of filter area", 'pitch' ),
	array(),
	array( "col_width" => 3 )
);
$blog_masonry_filter_container->addChild(
	"blog_masonry_filter_background_color",
	$blog_masonry_filter_background_color
);

$blog_masonry_filter_height = new PitchQodeField(
	"text",
	"blog_masonry_filter_height",
	"",
	esc_html__( "Height (px)", 'pitch' ),
	esc_html__( "Enter height for filter area", 'pitch' ),
	array(),
	array( "col_width" => 3 )
);
$blog_masonry_filter_container->addChild(
	"blog_masonry_filter_height",
	$blog_masonry_filter_height
);

$blog_masonry_filter_margin_bottom = new PitchQodeField(
	"text",
	"blog_masonry_filter_margin_bottom",
	"",
	esc_html__( "Bottom Margin (px)", 'pitch' ),
	esc_html__( "Enter bottom margin for filter area. Default value is 36", 'pitch' ),
	array(),
	array( "col_width" => 3 )
);
$blog_masonry_filter_container->addChild(
	"blog_masonry_filter_margin_bottom",
	$blog_masonry_filter_margin_bottom
);

$blog_masonry_filter_alignment = new PitchQodeField(
	"select",
	"blog_masonry_filter_alignment",
	"",
	esc_html__( "Horizontal Alignment", 'pitch' ),
	esc_html__( "Choose filter alignment", 'pitch' ),
	array(
		"left" => esc_html__( "Left", 'pitch' ),
		"center" => esc_html__( "Center", 'pitch' ),
		"right" => esc_html__( "Right", 'pitch' )
	)
);
$blog_masonry_filter_container->addChild(
	"blog_masonry_filter_alignment",
	$blog_masonry_filter_alignment
);

$blog_masonry_enable_filter_title = new PitchQodeField(
	"yesno",
	"blog_masonry_enable_filter_title",
	"no",
	esc_html__( "Enable Filter Title", 'pitch' ),
	esc_html__( "Enabling this option will show category filter title", 'pitch' )
);
$blog_masonry_filter_container->addChild(
	"blog_masonry_enable_filter_title",
	$blog_masonry_enable_filter_title
);

$group1 = new PitchQodeGroup(
	esc_html__( "Title", 'pitch' ),
	esc_html__( "Define text styles for filter title", 'pitch' )
);
$blog_masonry_filter_container->addChild(
	"group1",
	$group1
);

$row1 = new PitchQodeRow();
$group1->addChild(
	"row1",
	$row1
);
$blog_masonry_filter_title_color = new PitchQodeField(
	"colorsimple",
	"blog_masonry_filter_title_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_masonry_filter_title_color",
	$blog_masonry_filter_title_color
);
$blog_masonry_filter_title_font_size = new PitchQodeField(
	"textsimple",
	"blog_masonry_filter_title_font_size",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_masonry_filter_title_font_size",
	$blog_masonry_filter_title_font_size
);
$blog_masonry_filter_title_line_height = new PitchQodeField(
	"textsimple",
	"blog_masonry_filter_title_line_height",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_masonry_filter_title_line_height",
	$blog_masonry_filter_title_line_height
);
$blog_masonry_filter_title_text_transform = new PitchQodeField(
	"selectblanksimple",
	"blog_masonry_filter_title_text_transform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	"blog_masonry_filter_title_text_transform",
	$blog_masonry_filter_title_text_transform
);

$row2 = new PitchQodeRow( true );
$group1->addChild(
	"row2",
	$row2
);
$blog_masonry_filter_title_font_family = new PitchQodeField(
	"fontsimple",
	"blog_masonry_filter_title_font_family",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"blog_masonry_filter_title_font_family",
	$blog_masonry_filter_title_font_family
);
$blog_masonry_filter_title_font_style = new PitchQodeField(
	"selectblanksimple",
	"blog_masonry_filter_title_font_style",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"blog_masonry_filter_title_font_style",
	$blog_masonry_filter_title_font_style
);
$blog_masonry_filter_title_font_weight = new PitchQodeField(
	"selectblanksimple",
	"blog_masonry_filter_title_font_weight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"blog_masonry_filter_title_font_weight",
	$blog_masonry_filter_title_font_weight
);
$blog_masonry_filter_title_letter_spacing = new PitchQodeField(
	"textsimple",
	"blog_masonry_filter_title_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"blog_masonry_filter_title_letter_spacing",
	$blog_masonry_filter_title_letter_spacing
);

$group2 = new PitchQodeGroup(
	esc_html__( "Categories", 'pitch' ),
	esc_html__( "Define text styles for filter categories", 'pitch' )
);
$blog_masonry_filter_container->addChild(
	"group2",
	$group2
);

$row1 = new PitchQodeRow();
$group2->addChild(
	"row1",
	$row1
);
$blog_masonry_filter_color = new PitchQodeField(
	"colorsimple",
	"blog_masonry_filter_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_masonry_filter_color",
	$blog_masonry_filter_color
);
$blog_masonry_filter_hovercolor = new PitchQodeField(
	"colorsimple",
	"blog_masonry_filter_hovercolor",
	"",
	esc_html__( "Hover/Active Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_masonry_filter_hovercolor",
	$blog_masonry_filter_hovercolor
);
$blog_masonry_filter_font_size = new PitchQodeField(
	"textsimple",
	"blog_masonry_filter_font_size",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_masonry_filter_font_size",
	$blog_masonry_filter_font_size
);
$blog_masonry_filter_line_height = new PitchQodeField(
	"textsimple",
	"blog_masonry_filter_line_height",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_masonry_filter_line_height",
	$blog_masonry_filter_line_height
);

$row2 = new PitchQodeRow( true );
$group2->addChild(
	"row2",
	$row2
);
$blog_masonry_filter_font_family = new PitchQodeField(
	"fontsimple",
	"blog_masonry_filter_font_family",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"blog_masonry_filter_font_family",
	$blog_masonry_filter_font_family
);
$blog_masonry_filter_font_style = new PitchQodeField(
	"selectblanksimple",
	"blog_masonry_filter_font_style",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"blog_masonry_filter_font_style",
	$blog_masonry_filter_font_style
);
$blog_masonry_filter_font_weight = new PitchQodeField(
	"selectblanksimple",
	"blog_masonry_filter_font_weight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"blog_masonry_filter_font_weight",
	$blog_masonry_filter_font_weight
);
$blog_masonry_filter_text_transform = new PitchQodeField(
	"selectblanksimple",
	"blog_masonry_filter_text_transform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row2->addChild(
	"blog_masonry_filter_text_transform",
	$blog_masonry_filter_text_transform
);

$row3 = new PitchQodeRow( true );
$group2->addChild(
	"row3",
	$row3
);
$blog_masonry_filter_letter_spacing = new PitchQodeField(
	"textsimple",
	"blog_masonry_filter_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row3->addChild(
	"blog_masonry_filter_letter_spacing",
	$blog_masonry_filter_letter_spacing
);

$blog_masonry_filter_disable_separator = new PitchQodeField(
	"yesno",
	"blog_masonry_filter_disable_separator",
	"yes",
	esc_html__( "Disable Separator Between Categories", 'pitch' ),
	esc_html__( "Disabling this option will remove separator between filter categories.", 'pitch' )
);
$blog_masonry_filter_container->addChild(
	"blog_masonry_filter_disable_separator",
	$blog_masonry_filter_disable_separator
);

$blog_masonry_type = new PitchQodeField(
	"select",
	"blog_masonry_type",
	"post_info_below_title",
	esc_html__( "Post Info Position", 'pitch' ),
	esc_html__( "Choose Post Info Position for Masonry Blog List", 'pitch' ),
	array(
		"post_info_below_title" => esc_html__( "Post Info Section Below Title", 'pitch' ),
		"post_info_at_bottom" => esc_html__( "Post Info Section at Bottom", 'pitch' )
	)
);
$panel10->addChild(
	"blog_masonry_type",
	$blog_masonry_type
);

$blog_masonry_content_position = new PitchQodeField(
	"select",
	"blog_masonry_content_position",
	"content_above_blog_list",
	esc_html__( "Content Position", 'pitch' ),
	esc_html__( "Choose content position for blog list template when sidebar is enabled. Note: This settings in only for template, not for archive pages", 'pitch' ),
	array(
		"content_above_blog_list" => esc_html__( "Content Above Blog List", 'pitch' ),
		"content_above_blog_list_and_sidebar" => esc_html__( "Content Above Blog List and Sidebar", 'pitch' )
	)
);
$panel10->addChild(
	"blog_masonry_content_position",
	$blog_masonry_content_position
);

$blog_masonry_post_meta_data_section = new PitchQodeTitle(
	"blog_masonry_post_meta_data_section",
	esc_html__( "Post Info Data Fields", 'pitch' )
);
$panel10->addChild(
	"blog_masonry_post_meta_data_section",
	$blog_masonry_post_meta_data_section
);

$blog_masonry_show_categories = new PitchQodeField(
	"yesno",
	"blog_masonry_show_categories",
	"no",
	esc_html__( "Show Categories", 'pitch' ),
	esc_html__( "Enabling this option will Show Categories on Post List", 'pitch' )
);
$panel10->addChild(
	"blog_masonry_show_categories",
	$blog_masonry_show_categories
);

$blog_masonry_show_comments = new PitchQodeField(
	"yesno",
	"blog_masonry_show_comments",
	"no",
	esc_html__( "Show Comments", 'pitch' ),
	esc_html__( "Enabling this option will Show Comments on Post List", 'pitch' )
);
$panel10->addChild(
	"blog_masonry_show_comments",
	$blog_masonry_show_comments
);

$blog_masonry_show_author = new PitchQodeField(
	"yesno",
	"blog_masonry_show_author",
	"no",
	esc_html__( "Show Author Name", 'pitch' ),
	esc_html__( "Enabling this option will show author name on Post List and Blog Post Single", 'pitch' )
);
$panel10->addChild(
	"blog_masonry_show_author",
	$blog_masonry_show_author
);

$blog_masonry_show_date = new PitchQodeField(
	"yesno",
	"blog_masonry_show_date",
	"no",
	esc_html__( "Show Date", 'pitch' ),
	esc_html__( "Enabling this option will show date on Post List", 'pitch' )
);
$panel10->addChild(
	"blog_masonry_hide_date",
	$blog_masonry_show_date
);

$blog_masonry_show_share = new PitchQodeField(
	"yesno",
	"blog_masonry_show_share",
	"no",
	esc_html__( "Show Share", 'pitch' ),
	esc_html__( "Enabling this option will show share on Post List", 'pitch' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_blog_masonry_share_options_container"
	)
);
$panel10->addChild(
	"blog_masonry_show_share",
	$blog_masonry_show_share
);

$blog_masonry_share_options_container = new PitchQodeContainer(
	"blog_masonry_share_options_container",
	"blog_masonry_show_share",
	"no"
);
$panel10->addChild(
	"blog_masonry_share_options_container",
	$blog_masonry_share_options_container
);

$blog_masonry_select_share_options_masonry_type = new PitchQodeField(
	"select",
	"blog_masonry_select_share_options_masonry_type",
	"dropdown",
	esc_html__( "Social Share Style", 'pitch' ),
	esc_html__( "Choose Social Share Style for Masonry Type", 'pitch' ),
	array(
		"dropdown" => esc_html__( "Social Share Dropdown", 'pitch' ),
		"list" => esc_html__( "Social Share List", 'pitch' )
	),
	array(
		"dependence" => true,
		"show"       => array(
			"list"     => "#qodef_blog_masonry_share_list_type_options_container",
			"dropdown" => "#qodef_blog_masonry_share_dropdown_type_options_container"
		),
		"hide"       => array(
			"dropdown" => "#qodef_blog_masonry_share_list_type_options_container",
			"list"     => "#qodef_blog_masonry_share_dropdown_type_options_container"
		),
	)
);

$blog_masonry_share_options_container->addChild(
	"blog_masonry_select_share_options_masonry_type",
	$blog_masonry_select_share_options_masonry_type
);

$blog_masonry_share_list_type_options_container = new PitchQodeContainer(
	"blog_masonry_share_list_type_options_container",
	"blog_masonry_select_share_options_masonry_type",
	"dropdown"
);
$blog_masonry_share_options_container->addChild(
	"blog_masonry_share_list_type_options_container",
	$blog_masonry_share_list_type_options_container
);

$blog_masonry_share_hld_hover_icon_color = new PitchQodeField(
	"color",
	"blog_masonry_share_hld_hover_icon_color",
	"",
	esc_html__( "Icon color on Quote/Link Holder Hover", 'pitch' ),
	esc_html__( "Choose icon color for share list when the quote/link holder is hovered over", 'pitch' )
);
$blog_masonry_share_list_type_options_container->addChild(
	"blog_masonry_share_hld_hover_icon_color",
	$blog_masonry_share_hld_hover_icon_color
);

$blog_masonry_share_dropdown_type_options_container = new PitchQodeContainer(
	"blog_masonry_share_dropdown_type_options_container",
	"blog_masonry_select_share_options_masonry_type",
	"list"
);
$blog_masonry_share_options_container->addChild(
	"blog_masonry_share_dropdown_type_options_container",
	$blog_masonry_share_dropdown_type_options_container
);

$blog_masonry_share_background_color = new PitchQodeField(
	"color",
	"blog_masonry_share_background_color",
	"",
	esc_html__( "Background Color", 'pitch' ),
	esc_html__( "Choose background color for share dropdown", 'pitch' )
);
$blog_masonry_share_dropdown_type_options_container->addChild(
	"blog_masonry_share_background_color",
	$blog_masonry_share_background_color
);

$blog_masonry_share_background_color_link_post_type = new PitchQodeField(
	"color",
	"blog_masonry_share_background_color_link_post_type",
	"",
	esc_html__( "Background Color on Quote/Link Post Type", 'pitch' ),
	esc_html__( "Choose background color for share dropdown", 'pitch' )
);
$blog_masonry_share_dropdown_type_options_container->addChild(
	"blog_masonry_share_background_color_link_post_type",
	$blog_masonry_share_background_color_link_post_type
);

$blog_masonry_share_icon_color = new PitchQodeField(
	"color",
	"blog_masonry_share_icon_color",
	"",
	esc_html__( "Icon Color", 'pitch' ),
	esc_html__( "Choose icon color for share dropdown and list", 'pitch' )
);
$blog_masonry_share_options_container->addChild(
	"blog_masonry_share_icon_color",
	$blog_masonry_share_icon_color
);

$blog_masonry_share_icon_hover_color = new PitchQodeField(
	"color",
	"blog_masonry_share_icon_hover_color",
	"",
	esc_html__( "Icon Hover Color", 'pitch' ),
	esc_html__( "Choose icon hover color for share dropdown and list", 'pitch' )
);
$blog_masonry_share_options_container->addChild(
	"blog_masonry_share_icon_hover_color",
	$blog_masonry_share_icon_hover_color
);

$blog_masonry_share_icon_color_link_post_type = new PitchQodeField(
	"color",
	"blog_masonry_share_icon_color_link_post_type",
	"",
	esc_html__( "Icon Color for Quote/Link Post Type", 'pitch' ),
	esc_html__( "Choose icon color for share dropdown and list", 'pitch' )
);
$blog_masonry_share_options_container->addChild(
	"blog_masonry_share_icon_color_link_post_type",
	$blog_masonry_share_icon_color_link_post_type
);

$blog_masonry_share_icon_hover_color_link_post_type = new PitchQodeField(
	"color",
	"blog_masonry_share_icon_hover_color_link_post_type",
	"",
	esc_html__( "Icon Hover Color for Quote/Link Post Type", 'pitch' ),
	esc_html__( "Choose icon hover color for share dropdown and list", 'pitch' )
);
$blog_masonry_share_options_container->addChild(
	"blog_masonry_share_icon_hover_color_link_post_type",
	$blog_masonry_share_icon_hover_color_link_post_type
);

$blog_masonry_show_like = new PitchQodeField(
	"yesno",
	"blog_masonry_show_like",
	"no",
	esc_html__( "Show Likes", 'pitch' ),
	esc_html__( 'Enabling this option will turn on "Likes"', 'pitch' )
);
$panel10->addChild(
	"blog_masonry_show_like",
	$blog_masonry_show_like
);

$blog_masonry_post_design_style = new PitchQodeTitle(
	"blog_masonry_post_design_style",
	esc_html__( "Post Design Style", 'pitch' )
);
$panel10->addChild(
	"blog_masonry_post_design_style",
	$blog_masonry_post_design_style
);

$blog_masonry_post_alignment = new PitchQodeField(
	"select",
	"blog_masonry_post_alignment",
	"",
	esc_html__( "Post Alignment", 'pitch' ),
	esc_html__( "Choose alignment for whole post", 'pitch' ),
	array(
		"left" => esc_html__( "Left", 'pitch' ),
		"center" => esc_html__( "Center", 'pitch' ),
		"right" => esc_html__( "Right", 'pitch' )
	)
);
$panel10->addChild(
	"blog_masonry_post_alignment",
	$blog_masonry_post_alignment
);

$blog_masonry_enable_text_box = new PitchQodeField(
	"yesno",
	"blog_masonry_enable_text_box",
	"no",
	esc_html__( "Enable Boxed Styled Post Content", 'pitch' ),
	esc_html__( "Enable post text boxed features", 'pitch' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_blog_masonry_enable_text_box_container"
	)
);
$panel10->addChild(
	"blog_masonry_enable_text_box",
	$blog_masonry_enable_text_box
);

$blog_masonry_enable_text_box_container = new PitchQodeContainer(
	"blog_masonry_enable_text_box_container",
	"blog_masonry_enable_text_box",
	"no"
);
$panel10->addChild(
	"blog_masonry_enable_text_box_container",
	$blog_masonry_enable_text_box_container
);

$blog_masonry_box_background_color = new PitchQodeField(
	"color",
	"blog_masonry_box_background_color",
	"",
	esc_html__( "Background Color", 'pitch' ),
	esc_html__( "Choose background color for post text box", 'pitch' )
);
$blog_masonry_enable_text_box_container->addChild(
	"blog_masonry_box_background_color",
	$blog_masonry_box_background_color
);

$blog_masonry_box_border_color = new PitchQodeField(
	"color",
	"blog_masonry_box_border_color",
	"",
	esc_html__( "Border Color", 'pitch' ),
	esc_html__( "Choose border color for post text box", 'pitch' )
);
$blog_masonry_enable_text_box_container->addChild(
	"blog_masonry_box_border_color",
	$blog_masonry_box_border_color
);

$blog_masonry_box_padding = new PitchQodeField(
	"text",
	"blog_masonry_box_padding",
	"",
	esc_html__( "Text box padding", 'pitch' ),
	esc_html__( "Please insert padding in format (top right bottom left) i.e. 5px 5px 5px 5px", 'pitch' ),
	array(),
	array( "col_width" => 3 )
);
$blog_masonry_enable_text_box_container->addChild(
	"blog_masonry_box_padding",
	$blog_masonry_box_padding
);

$group7 = new PitchQodeGroup(
	esc_html__( "Paragraph", 'pitch' ),
	esc_html__( "Set paragraph color", 'pitch' )
);
$panel10->addChild(
	"group7",
	$group7
);

$blog_masonry_paragraph_color = new PitchQodeField(
	"colorsimple",
	"blog_masonry_paragraph_color",
	"",
	esc_html__( "Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$group7->addChild(
	"blog_masonry_paragraph_color",
	$blog_masonry_paragraph_color
);

$group1 = new PitchQodeGroup(
	esc_html__( "Quote/Link Background", 'pitch' ),
	esc_html__( "Set background of Quote/Link post type", 'pitch' )
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

$blog_masonry_ql_background_image = new PitchQodeField(
	"yesnosimple",
	"blog_masonry_ql_background_image",
	"no",
	esc_html__( "Background Image", 'pitch' ),
	""
);
$row1->addChild(
	"blog_masonry_ql_background_image",
	$blog_masonry_ql_background_image
);

$blog_masonry_ql_background_color = new PitchQodeField(
	"colorsimple",
	"blog_masonry_ql_background_color",
	"",
	esc_html__( "Background Color", 'pitch' ),
	esc_html__( "Default color is #ffffff.", 'pitch' )
);
$row1->addChild(
	"blog_masonry_ql_background_color",
	$blog_masonry_ql_background_color
);

$blog_masonry_ql_hover_background_color = new PitchQodeField(
	"colorsimple",
	"blog_masonry_ql_hover_background_color",
	"",
	esc_html__( "Background Hover Color", 'pitch' ),
	esc_html__( "Default color is #f5245f.", 'pitch' )
);
$row1->addChild(
	"blog_masonry_ql_hover_background_color",
	$blog_masonry_ql_hover_background_color
);

$blog_masonry_show_ql_mark = new PitchQodeField(
	"yesno",
	"blog_masonry_show_ql_mark",
	"yes",
	esc_html__( "Enable Quote/Link Icon", 'pitch' ),
	esc_html__( "Show Icons for quote/link post format", 'pitch' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_blog_masonry_show_ql_mark_container"
	)
);
$panel10->addChild(
	"blog_masonry_show_ql_mark",
	$blog_masonry_show_ql_mark
);

$blog_masonry_show_ql_mark_container = new PitchQodeContainer(
	"blog_masonry_show_ql_mark_container",
	"blog_masonry_show_ql_mark",
	"no"
);
$panel10->addChild(
	"blog_masonry_show_ql_mark_container",
	$blog_masonry_show_ql_mark_container
);

$row1 = new PitchQodeRow();
$blog_masonry_show_ql_mark_container->addChild(
	"row1",
	$row1
);

$blog_masonry_ql_mark_color = new PitchQodeField(
	"color",
	"blog_masonry_ql_mark_color",
	"",
	esc_html__( "Icon Color", 'pitch' ),
	esc_html__( "Choose icon color for quote/link post", 'pitch' )
);
$row1->addChild(
	"blog_masonry_ql_mark_color",
	$blog_masonry_ql_mark_color
);

$blog_masonry_ql_mark_hover_color = new PitchQodeField(
	"color",
	"blog_masonry_ql_mark_hover_color",
	"",
	esc_html__( "Icon Hover Color", 'pitch' ),
	esc_html__( "Choose hover icon color for quote/link post.", 'pitch' )
);
$row1->addChild(
	"blog_masonry_ql_mark_hover_color",
	$blog_masonry_ql_mark_hover_color
);

$group8 = new PitchQodeGroup(
	esc_html__( "Blog List Spacing", 'pitch' ),
	esc_html__( "Set spacing for blog layouts", 'pitch' )
);
$panel10->addChild(
	"group8",
	$group8
);

$row1 = new PitchQodeRow();
$group8->addChild(
	"row1",
	$row1
);

$blog_masonry_image_margin_bottom = new PitchQodeField(
	"textsimple",
	"blog_masonry_image_margin_bottom",
	"",
	esc_html__( "Margin Under Image (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_masonry_image_margin_bottom",
	$blog_masonry_image_margin_bottom
);

$blog_masonry_title_margin_bottom = new PitchQodeField(
	"textsimple",
	"blog_masonry_title_margin_bottom",
	"",
	esc_html__( "Margin Under Title (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_masonry_title_margin_bottom",
	$blog_masonry_title_margin_bottom
);

$blog_masonry_post_info_margin_bottom = new PitchQodeField(
	"textsimple",
	"blog_masonry_post_info_margin_bottom",
	"",
	esc_html__( "Margin Under Post Info (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_masonry_post_info_margin_bottom",
	$blog_masonry_post_info_margin_bottom
);

$blog_masonry_read_more_margin_top = new PitchQodeField(
	"textsimple",
	"blog_masonry_read_more_margin_top",
	"",
	esc_html__( "Margin Above Read More Button (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_masonry_read_more_margin_top",
	$blog_masonry_read_more_margin_top
);

$row2 = new PitchQodeRow();
$group8->addChild(
	"row2",
	$row2
);

$blog_masonry_social_share_list_margin_top = new PitchQodeField(
	"textsimple",
	"blog_masonry_social_share_list_margin_top",
	"",
	esc_html__( "Margin Above Social Share List Holder (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"blog_masonry_social_share_list_margin_top",
	$blog_masonry_social_share_list_margin_top
);

$blog_masonry_article_margin_bottom = new PitchQodeField(
	"textsimple",
	"blog_masonry_article_margin_bottom",
	"",
	esc_html__( "Margin Between Articles (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"blog_masonry_article_margin_bottom",
	$blog_masonry_article_margin_bottom
);

$blog_masonry_post_info_bottom_margin_top = new PitchQodeField(
	"textsimple",
	"blog_masonry_post_info_bottom_margin_top",
	"",
	esc_html__( "Margin Above Post Info When Post Info is on the bottom (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"blog_masonry_post_info_bottom_margin_top",
	$blog_masonry_post_info_bottom_margin_top
);

$group9 = new PitchQodeGroup(
	esc_html__( "Blog List Spacing for Quote and Link Post Type", 'pitch' ),
	esc_html__( "Set spacing for blog layouts", 'pitch' )
);
$panel10->addChild(
	"group9",
	$group9
);

$row1 = new PitchQodeRow();
$group9->addChild(
	"row1",
	$row1
);

$blog_masonry_ql_title_margin_bottom = new PitchQodeField(
	"textsimple",
	"blog_masonry_ql_title_margin_bottom",
	"",
	esc_html__( "Margin Under Title (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_masonry_ql_title_margin_bottom",
	$blog_masonry_ql_title_margin_bottom
);

$blog_masonry_ql_quote_author_margin_bottom = new PitchQodeField(
	"textsimple",
	"blog_masonry_ql_quote_author_margin_bottom",
	"",
	esc_html__( "Margin Under Quote Author (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_masonry_ql_quote_author_margin_bottom",
	$blog_masonry_ql_quote_author_margin_bottom
);

$blog_masonry_ql_social_share_list_margin_top = new PitchQodeField(
	"textsimple",
	"blog_masonry_ql_social_share_list_margin_top",
	"",
	esc_html__( "Margin Above Social Share List Holder (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_masonry_ql_social_share_list_margin_top",
	$blog_masonry_ql_social_share_list_margin_top
);

$group10 = new PitchQodeGroup(
	esc_html__( "Border Arround Article", 'pitch' ),
	esc_html__( "Set border style for articles", 'pitch' )
);
$panel10->addChild(
	"group10",
	$group10
);

$row1 = new PitchQodeRow();
$group10->addChild(
	"row1",
	$row1
);

$blog_masonry_article_border_width = new PitchQodeField(
	"textsimple",
	"blog_masonry_article_border_width",
	"",
	esc_html__( "Border Width (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_masonry_article_border_width",
	$blog_masonry_article_border_width
);

$blog_masonry_article_border_color = new PitchQodeField(
	"colorsimple",
	"blog_masonry_article_border_color",
	"",
	esc_html__( "Border Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_masonry_article_border_color",
	$blog_masonry_article_border_color
);

$post_text_styling = new PitchQodeTitle(
	"post_text_styling",
	esc_html__( "Post Text Style", 'pitch' )
);
$panel10->addChild(
	"post_text_styling",
	$post_text_styling
);

$group2 = new PitchQodeGroup(
	esc_html__( "Post Title", 'pitch' ),
	esc_html__( "Define title styles in this blog post template.", 'pitch' )
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

$blog_masonry_title_color = new PitchQodeField(
	"colorsimple",
	"blog_masonry_title_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_masonry_title_color",
	$blog_masonry_title_color
);

$blog_masonry_title_hover_color = new PitchQodeField(
	"colorsimple",
	"blog_masonry_title_hover_color",
	"",
	esc_html__( "Text Hover Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_masonry_title_hover_color",
	$blog_masonry_title_hover_color
);

$blog_masonry_title_fontsize = new PitchQodeField(
	"textsimple",
	"blog_masonry_title_fontsize",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_masonry_title_fontsize",
	$blog_masonry_title_fontsize
);

$row2 = new PitchQodeRow( true );
$group2->addChild(
	"row2",
	$row2
);

$blog_masonry_title_lineheight = new PitchQodeField(
	"textsimple",
	"blog_masonry_title_lineheight",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_masonry_title_lineheight",
	$blog_masonry_title_lineheight
);

$blog_masonry_title_google_fonts = new PitchQodeField(
	"fontsimple",
	"blog_masonry_title_google_fonts",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"blog_masonry_title_google_fonts",
	$blog_masonry_title_google_fonts
);

$blog_masonry_title_fontstyle = new PitchQodeField(
	"selectblanksimple",
	"blog_masonry_title_fontstyle",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"blog_masonry_title_fontstyle",
	$blog_masonry_title_fontstyle
);

$blog_masonry_title_fontweight = new PitchQodeField(
	"selectblanksimple",
	"blog_masonry_title_fontweight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"blog_masonry_title_fontweight",
	$blog_masonry_title_fontweight
);

$row3 = new PitchQodeRow( true );
$group2->addChild(
	"row3",
	$row3
);

$blog_masonry_title_texttransform = new PitchQodeField(
	"selectblanksimple",
	"blog_masonry_title_texttransform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row2->addChild(
	"blog_masonry_title_texttransform",
	$blog_masonry_title_texttransform
);

$blog_masonry_title_letterspacing = new PitchQodeField(
	"textsimple",
	"blog_masonry_title_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row3->addChild(
	"blog_masonry_title_letterspacing",
	$blog_masonry_title_letterspacing
);

$group4 = new PitchQodeGroup(
	esc_html__( "Post Info Data", 'pitch' ),
	esc_html__( "Define post info text styles (date, category names etc.) Note: Single Posts will take the same styles as in list", 'pitch' )
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

$blog_masonry_info_color = new PitchQodeField(
	"colorsimple",
	"blog_masonry_info_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_masonry_info_color",
	$blog_masonry_info_color
);

$blog_masonry_info_link_color = new PitchQodeField(
	"colorsimple",
	"blog_masonry_info_link_color",
	"",
	esc_html__( "Link Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_masonry_info_link_color",
	$blog_masonry_info_link_color
);

$blog_masonry_info_hover_color = new PitchQodeField(
	"colorsimple",
	"blog_masonry_info_hover_color",
	"",
	esc_html__( "Link Hover Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_masonry_info_hover_color",
	$blog_masonry_info_hover_color
);

$blog_masonry_info_fontsize = new PitchQodeField(
	"textsimple",
	"blog_masonry_info_fontsize",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_masonry_info_fontsize",
	$blog_masonry_info_fontsize
);

$row2 = new PitchQodeRow( true );
$group4->addChild(
	"row2",
	$row2
);

$blog_masonry_info_lineheight = new PitchQodeField(
	"textsimple",
	"blog_masonry_info_lineheight",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"blog_masonry_info_lineheight",
	$blog_masonry_info_lineheight
);

$blog_masonry_info_google_fonts = new PitchQodeField(
	"fontsimple",
	"blog_masonry_info_google_fonts",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"blog_masonry_info_google_fonts",
	$blog_masonry_info_google_fonts
);

$blog_masonry_info_fontstyle = new PitchQodeField(
	"selectblanksimple",
	"blog_masonry_info_fontstyle",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"blog_masonry_info_fontstyle",
	$blog_masonry_info_fontstyle
);

$blog_masonry_info_fontweight = new PitchQodeField(
	"selectblanksimple",
	"blog_masonry_info_fontweight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"blog_masonry_info_fontweight",
	$blog_masonry_info_fontweight
);

$row3 = new PitchQodeRow( true );
$group4->addChild(
	"row3",
	$row3
);

$blog_masonry_info_texttransform = new PitchQodeField(
	"selectblanksimple",
	"blog_masonry_info_texttransform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row3->addChild(
	"blog_masonry_info_texttransform",
	$blog_masonry_info_texttransform
);

$blog_masonry_info_letterspacing = new PitchQodeField(
	"textsimple",
	"blog_masonry_info_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row3->addChild(
	"blog_masonry_info_letterspacing",
	$blog_masonry_info_letterspacing
);

$group3 = new PitchQodeGroup(
	esc_html__( "Quote/Link Title Style", 'pitch' ),
	esc_html__( "Define title styles for Quote/Link articles", 'pitch' )
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

$blog_masonry_ql_title_color = new PitchQodeField(
	"colorsimple",
	"blog_masonry_ql_title_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_masonry_ql_title_color",
	$blog_masonry_ql_title_color
);

$blog_masonry_ql_title_hover_color = new PitchQodeField(
	"colorsimple",
	"blog_masonry_ql_title_hover_color",
	"",
	esc_html__( "Text Hover Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_masonry_ql_title_hover_color",
	$blog_masonry_ql_title_hover_color
);

$blog_masonry_ql_title_fontsize = new PitchQodeField(
	"textsimple",
	"blog_masonry_ql_title_fontsize",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_masonry_ql_title_font_size",
	$blog_masonry_ql_title_fontsize
);

$blog_masonry_ql_title_lineheight = new PitchQodeField(
	"textsimple",
	"blog_masonry_ql_title_lineheight",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_masonry_ql_title_lineheight",
	$blog_masonry_ql_title_lineheight
);

$row2 = new PitchQodeRow( true );
$group3->addChild(
	"row2",
	$row2
);

$blog_masonry_ql_title_texttransform = new PitchQodeField(
	"selectblanksimple",
	"blog_masonry_ql_title_texttransform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row2->addChild(
	"blog_masonry_ql_title_texttransform",
	$blog_masonry_ql_title_texttransform
);

$blog_masonry_ql_title_google_fonts = new PitchQodeField(
	"fontsimple",
	"blog_masonry_ql_title_google_fonts",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"blog_masonry_ql_title_google_fonts",
	$blog_masonry_ql_title_google_fonts
);

$blog_masonry_ql_title_fontstyle = new PitchQodeField(
	"selectblanksimple",
	"blog_masonry_ql_title_fontstyle",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"blog_masonry_ql_title_fontstyle",
	$blog_masonry_ql_title_fontstyle
);

$blog_masonry_ql_title_fontweight = new PitchQodeField(
	"selectblanksimple",
	"blog_masonry_ql_title_fontweight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"blog_masonry_ql_title_fontweight",
	$blog_masonry_ql_title_fontweight
);

$row3 = new PitchQodeRow( true );
$group3->addChild(
	"row3",
	$row3
);

$blog_masonry_ql_title_letterspacing = new PitchQodeField(
	"textsimple",
	"blog_masonry_ql_title_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row3->addChild(
	"blog_masonry_ql_title_letterspacing",
	$blog_masonry_ql_title_letterspacing
);

$group5 = new PitchQodeGroup(
	esc_html__( "Quote/Link Post Info Data", 'pitch' ),
	esc_html__( "Define quote/link post info text styles (date, category names etc.) Note: Single Posts will take the same styles as in list.", 'pitch' )
);
$panel10->addChild(
	"group5",
	$group5
);

$row1 = new PitchQodeRow();
$group5->addChild(
	"row1",
	$row1
);

$blog_masonry_ql_info_color = new PitchQodeField(
	"colorsimple",
	"blog_masonry_ql_info_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_masonry_ql_info_color",
	$blog_masonry_ql_info_color
);

$blog_masonry_ql_info_link_color = new PitchQodeField(
	"colorsimple",
	"blog_masonry_ql_info_link_color",
	"",
	esc_html__( "Link Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_masonry_ql_info_link_color",
	$blog_masonry_ql_info_link_color
);

$blog_masonry_ql_info_hover_color = new PitchQodeField(
	"colorsimple",
	"blog_masonry_ql_info_hover_color",
	"",
	esc_html__( "Hover Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_masonry_ql_info_hover_color",
	$blog_masonry_ql_info_hover_color
);

$blog_masonry_ql_info_fontsize = new PitchQodeField(
	"textsimple",
	"blog_masonry_ql_info_fontsize",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_masonry_ql_info_fontsize",
	$blog_masonry_ql_info_fontsize
);

$row2 = new PitchQodeRow( true );
$group5->addChild(
	"row2",
	$row2
);

$blog_masonry_ql_info_lineheight = new PitchQodeField(
	"textsimple",
	"blog_masonry_ql_info_lineheight",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"blog_masonry_ql_info_lineheight",
	$blog_masonry_ql_info_lineheight
);

$blog_masonry_ql_info_google_fonts = new PitchQodeField(
	"fontsimple",
	"blog_masonry_ql_info_google_fonts",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"blog_masonry_ql_info_google_fonts",
	$blog_masonry_ql_info_google_fonts
);

$blog_masonry_ql_info_fontstyle = new PitchQodeField(
	"selectblanksimple",
	"blog_masonry_ql_info_fontstyle",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"blog_masonry_ql_info_fontstyle",
	$blog_masonry_ql_info_fontstyle
);

$blog_masonry_ql_info_fontweight = new PitchQodeField(
	"selectblanksimple",
	"blog_masonry_ql_info_fontweight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"blog_masonry_ql_info_fontweight",
	$blog_masonry_ql_info_fontweight
);

$row3 = new PitchQodeRow( true );
$group5->addChild(
	"row3",
	$row3
);

$blog_masonry_ql_info_texttransform = new PitchQodeField(
	"selectblanksimple",
	"blog_masonry_ql_info_texttransform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row3->addChild(
	"blog_masonry_ql_info_texttransform",
	$blog_masonry_ql_info_texttransform
);

$blog_masonry_ql_info_letterspacing = new PitchQodeField(
	"textsimple",
	"blog_masonry_ql_info_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row3->addChild(
	"blog_masonry_ql_info_letterspacing",
	$blog_masonry_ql_info_letterspacing
);

$group6 = new PitchQodeGroup(
	esc_html__( "Quote Author Style", 'pitch' ),
	esc_html__( "Define author styles for Quote articles", 'pitch' )
);
$panel10->addChild(
	"group6",
	$group6
);

$row1 = new PitchQodeRow();
$group6->addChild(
	"row1",
	$row1
);

$blog_masonry_ql_author_color = new PitchQodeField(
	"colorsimple",
	"blog_masonry_ql_author_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_masonry_ql_author_color",
	$blog_masonry_ql_author_color
);

$blog_masonry_ql_author_hover_color = new PitchQodeField(
	"colorsimple",
	"blog_masonry_ql_author_hover_color",
	"",
	esc_html__( "Text Hover Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_masonry_ql_author_hover_color",
	$blog_masonry_ql_author_hover_color
);

$blog_masonry_ql_author_fontsize = new PitchQodeField(
	"textsimple",
	"blog_masonry_ql_author_fontsize",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_masonry_ql_author_font_size",
	$blog_masonry_ql_author_fontsize
);

$blog_masonry_ql_author_lineheight = new PitchQodeField(
	"textsimple",
	"blog_masonry_ql_author_lineheight",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_masonry_ql_author_lineheight",
	$blog_masonry_ql_author_lineheight
);

$row2 = new PitchQodeRow( true );
$group6->addChild(
	"row2",
	$row2
);

$blog_masonry_ql_author_texttransform = new PitchQodeField(
	"selectblanksimple",
	"blog_masonry_ql_author_texttransform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row2->addChild(
	"blog_masonry_ql_author_texttransform",
	$blog_masonry_ql_author_texttransform
);

$blog_masonry_ql_author_google_fonts = new PitchQodeField(
	"fontsimple",
	"blog_masonry_ql_author_google_fonts",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"blog_masonry_ql_author_google_fonts",
	$blog_masonry_ql_author_google_fonts
);

$blog_masonry_ql_author_fontstyle = new PitchQodeField(
	"selectblanksimple",
	"blog_masonry_ql_author_fontstyle",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"blog_masonry_ql_author_fontstyle",
	$blog_masonry_ql_author_fontstyle
);

$blog_masonry_ql_author_fontweight = new PitchQodeField(
	"selectblanksimple",
	"blog_masonry_ql_author_fontweight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"blog_masonry_ql_author_fontweight",
	$blog_masonry_ql_author_fontweight
);

$row3 = new PitchQodeRow( true );
$group6->addChild(
	"row3",
	$row3
);

$blog_masonry_ql_author_letterspacing = new PitchQodeField(
	"textsimple",
	"blog_masonry_ql_author_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row3->addChild(
	"blog_masonry_ql_author_letterspacing",
	$blog_masonry_ql_author_letterspacing
);

$blog_masonry_meta_info_featured_subtitle = new PitchQodeTitle(
	"blog_masonry_meta_info_featured_subtitle",
	esc_html__( "Meta Info Featured on Side", 'pitch' )
);
$panel10->addChild(
	"blog_masonry_meta_info_featured_subtitle",
	$blog_masonry_meta_info_featured_subtitle
);

$blog_masonry_meta_info_featured_on_side_post_info_border_color = new PitchQodeField(
	"color",
	"blog_masonry_meta_info_featured_on_side_post_info_border_color",
	"",
	esc_html__( "Post Info Border Color", 'pitch' ),
	esc_html__( "Default color is #ebebeb.", 'pitch' )
);
$panel10->addChild(
	"blog_masonry_meta_info_featured_on_side_post_info_border_color",
	$blog_masonry_meta_info_featured_on_side_post_info_border_color
);

$group11 = new PitchQodeGroup(
	esc_html__( "Post Info Date Box", 'pitch' ),
	esc_html__( "Set style for Post Info Date Box", 'pitch' )
);
$panel10->addChild(
	"group11",
	$group11
);

$row1 = new PitchQodeRow();
$group11->addChild(
	"row1",
	$row1
);

$blog_masonry_meta_info_featured_on_side_date_box_background_color = new PitchQodeField(
	"colorsimple",
	"blog_masonry_meta_info_featured_on_side_date_box_background_color",
	"",
	esc_html__( "Background Color", 'pitch' ),
	esc_html__( "Default color is #ffffff.", 'pitch' )
);
$row1->addChild(
	"blog_masonry_meta_info_featured_on_side_date_box_background_color",
	$blog_masonry_meta_info_featured_on_side_date_box_background_color
);

$blog_masonry_meta_info_featured_on_side_date_month_color = new PitchQodeField(
	"colorsimple",
	"blog_masonry_meta_info_featured_on_side_date_month_color",
	"",
	esc_html__( "Month Color", 'pitch' ),
	esc_html__( "Default color is #f5245f.", 'pitch' )
);
$row1->addChild(
	"blog_masonry_meta_info_featured_on_side_date_month_color",
	$blog_masonry_meta_info_featured_on_side_date_month_color
);

$blog_masonry_meta_info_featured_on_side_date_day_color = new PitchQodeField(
	"colorsimple",
	"blog_masonry_meta_info_featured_on_side_date_day_color",
	"",
	esc_html__( "Day Color", 'pitch' ),
	esc_html__( "Default color is #f5245f.", 'pitch' )
);
$row1->addChild(
	"blog_masonry_meta_info_featured_on_side_date_day_color",
	$blog_masonry_meta_info_featured_on_side_date_day_color
);

$blog_masonry_meta_info_featured_on_side_date_padding_top = new PitchQodeField(
	"textsimple",
	"blog_masonry_meta_info_featured_on_side_date_padding_top",
	"",
	esc_html__( "Padding Top", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_masonry_meta_info_featured_on_side_date_padding_top",
	$blog_masonry_meta_info_featured_on_side_date_padding_top
);

$row2 = new PitchQodeRow();
$group11->addChild(
	"row2",
	$row2
);

$blog_masonry_meta_info_featured_on_side_date_padding_bottom = new PitchQodeField(
	"textsimple",
	"blog_masonry_meta_info_featured_on_side_date_padding_bottom",
	"",
	esc_html__( "Padding Bottom", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"blog_masonry_meta_info_featured_on_side_date_padding_bottom",
	$blog_masonry_meta_info_featured_on_side_date_padding_bottom
);

$group12 = new PitchQodeGroup(
	esc_html__( "Post Info Like Box", 'pitch' ),
	esc_html__( "Set style for Post Info Like Box", 'pitch' )
);
$panel10->addChild(
	"group12",
	$group12
);

$row1 = new PitchQodeRow();
$group12->addChild(
	"row1",
	$row1
);

$blog_masonry_meta_info_featured_on_side_like_box_background_color = new PitchQodeField(
	"colorsimple",
	"blog_masonry_meta_info_featured_on_side_like_box_background_color",
	"",
	esc_html__( "Background Color", 'pitch' ),
	esc_html__( "Default color is #ffffff.", 'pitch' )
);
$row1->addChild(
	"blog_masonry_meta_info_featured_on_side_like_box_background_color",
	$blog_masonry_meta_info_featured_on_side_like_box_background_color
);

$blog_masonry_meta_info_featured_on_side_like_box_color = new PitchQodeField(
	"colorsimple",
	"blog_masonry_meta_info_featured_on_side_like_box_color",
	"",
	esc_html__( "Icon Color", 'pitch' ),
	esc_html__( "Default color is #f5245f.", 'pitch' )
);
$row1->addChild(
	"blog_masonry_meta_info_featured_on_side_like_box_color",
	$blog_masonry_meta_info_featured_on_side_like_box_color
);

$blog_masonry_meta_info_featured_on_side_like_box_hover_color = new PitchQodeField(
	"colorsimple",
	"blog_masonry_meta_info_featured_on_side_like_box_hover_color",
	"",
	esc_html__( "Icon Hover Color", 'pitch' ),
	""
);
$row1->addChild(
	"blog_masonry_meta_info_featured_on_side_like_box_hover_color",
	$blog_masonry_meta_info_featured_on_side_like_box_hover_color
);

$blog_masonry_meta_info_featured_on_side_like_count_number_color = new PitchQodeField(
	"colorsimple",
	"blog_masonry_meta_info_featured_on_side_like_count_number_color",
	"",
	esc_html__( "Number Color", 'pitch' ),
	esc_html__( "Default color is #f5245f.", 'pitch' )
);
$row1->addChild(
	"blog_masonry_meta_info_featured_on_side_like_count_number_color",
	$blog_masonry_meta_info_featured_on_side_like_count_number_color
);

$row2 = new PitchQodeRow();
$group12->addChild(
	"row2",
	$row2
);

$blog_masonry_meta_info_featured_on_side_like_padding_top = new PitchQodeField(
	"textsimple",
	"blog_masonry_meta_info_featured_on_side_like_padding_top",
	"",
	esc_html__( "Padding Top", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"blog_masonry_meta_info_featured_on_side_like_padding_top",
	$blog_masonry_meta_info_featured_on_side_like_padding_top
);

$blog_masonry_meta_info_featured_on_side_like_padding_bottom = new PitchQodeField(
	"textsimple",
	"blog_masonry_meta_info_featured_on_side_like_padding_bottom",
	"",
	esc_html__( "Padding Bottom", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"blog_masonry_meta_info_featured_on_side_like_padding_bottom",
	$blog_masonry_meta_info_featured_on_side_like_padding_bottom
);

$group13 = new PitchQodeGroup(
	esc_html__( "Post Info Share Box", 'pitch' ),
	esc_html__( "Set style for Post Info Share Box", 'pitch' )
);
$panel10->addChild(
	"group13",
	$group13
);

$row1 = new PitchQodeRow();
$group13->addChild(
	"row1",
	$row1
);

$blog_masonry_meta_info_featured_on_side_share_box_background_color = new PitchQodeField(
	"colorsimple",
	"blog_masonry_meta_info_featured_on_side_share_box_background_color",
	"",
	esc_html__( "Background Color", 'pitch' ),
	esc_html__( "Default color is #ffffff.", 'pitch' )
);
$row1->addChild(
	"blog_masonry_meta_info_featured_on_side_share_box_background_color",
	$blog_masonry_meta_info_featured_on_side_share_box_background_color
);

$blog_masonry_meta_info_featured_on_side_share_box_color = new PitchQodeField(
	"colorsimple",
	"blog_masonry_meta_info_featured_on_side_share_box_color",
	"",
	esc_html__( "Color", 'pitch' ),
	esc_html__( "Default color is #f5245f.", 'pitch' )
);
$row1->addChild(
	"blog_masonry_meta_info_featured_on_side_share_box_color",
	$blog_masonry_meta_info_featured_on_side_share_box_color
);

$blog_masonry_meta_info_featured_on_side_share_box_hover_color = new PitchQodeField(
	"colorsimple",
	"blog_masonry_meta_info_featured_on_side_share_box_hover_color",
	"",
	esc_html__( "Hover Color", 'pitch' ),
	esc_html__( "Default color is #f5245f.", 'pitch' )
);
$row1->addChild(
	"blog_masonry_meta_info_featured_on_side_share_box_hover_color",
	$blog_masonry_meta_info_featured_on_side_share_box_hover_color
);

$blog_masonry_meta_info_featured_on_side_share_padding_top = new PitchQodeField(
	"textsimple",
	"blog_masonry_meta_info_featured_on_side_share_padding_top",
	"",
	esc_html__( "Padding Top", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_masonry_meta_info_featured_on_side_share_padding_top",
	$blog_masonry_meta_info_featured_on_side_share_padding_top
);

$row2 = new PitchQodeRow();
$group13->addChild(
	"row2",
	$row2
);

$blog_masonry_meta_info_featured_on_side_share_padding_bottom = new PitchQodeField(
	"textsimple",
	"blog_masonry_meta_info_featured_on_side_share_padding_bottom",
	"",
	esc_html__( "Padding Bottom", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"blog_masonry_meta_info_featured_on_side_share_padding_bottom",
	$blog_masonry_meta_info_featured_on_side_share_padding_bottom
);

// Blog Post List - Blog: Standard
$panel21 = new PitchQodePanel(
	esc_html__( "Blog List Template Options: Standard", 'pitch' ),
	"blog_standard_type_post_lists",
	"blog_standard_type_show_options",
	"no"
);
$blogPage->addChild(
	"panel21",
	$panel21
);

$blog_standard_type_number_of_chars = new PitchQodeField(
	"text",
	"blog_standard_type_number_of_chars",
	"45",
	esc_html__( "Number of Words in Excerpt", 'pitch' ),
	' Enter a number of words in excerpt (article summary)',
	array(),
	array( "col_width" => 3 )
);
$panel21->addChild(
	"blog_standard_type_number_of_chars",
	$blog_standard_type_number_of_chars
);

$blog_standard_type_image_size = new PitchQodeField(
	"select",
	"blog_standard_type_image_size",
	"full",
	esc_html__( "Blog Image Size", 'pitch' ),
	esc_html__( "Choose image size for Blog Single pages", 'pitch' ),
	array(
		"full" => esc_html__( "Default", 'pitch' ),
		"portfolio-landscape" => esc_html__( "Landscape", 'pitch' ),
		"portfolio-portrait" => esc_html__( "Portrait", 'pitch' ),
		"custom" => esc_html__( "Custom", 'pitch' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			"full"                => "#qodef_blog_standard_type_image_size_container",
			"portfolio-landscape" => "#qodef_blog_standard_type_image_size_container",
			"portfolio-portrait"  => "#qodef_blog_standard_type_image_size_container",
			"custom"              => ""
		),
		"show"       => array(
			"full"                => "",
			"portfolio-landscape" => "",
			"portfolio-portrait"  => "",
			"custom"              => "#qodef_blog_standard_type_image_size_container"
		)
	)
);
$panel21->addChild(
	"blog_standard_type_image_size",
	$blog_standard_type_image_size
);

$blog_standard_type_image_size_container = new PitchQodeContainer(
	"blog_standard_type_image_size_container",
	"blog_standard_type_image_size",
	"",
	array(
		"full",
		"portfolio-landscape",
		"portfolio-portrait"
	)
);
$panel21->addChild(
	"blog_standard_type_image_size_container",
	$blog_standard_type_image_size_container
);

$blog_standard_type_image_size_height = new PitchQodeField(
	"text",
	"blog_standard_type_image_size_height",
	"",
	esc_html__( "Image Height (px)", 'pitch' ),
	esc_html__( "Enter width (in pixels) for Custom Image for Blog Single", 'pitch' ),
	array(),
	array( "col_width" => 3 )
);
$blog_standard_type_image_size_container->addChild(
	"blog_standard_type_image_size_height",
	$blog_standard_type_image_size_height
);

$blog_standard_type_image_size_width = new PitchQodeField(
	"text",
	"blog_standard_type_image_size_width",
	"",
	esc_html__( "Image Width (px)", 'pitch' ),
	esc_html__( "Enter width (in pixels) for Custom Image for Blog Single", 'pitch' ),
	array(),
	array( "col_width" => 3 )
);
$blog_standard_type_image_size_container->addChild(
	"blog_standard_type_image_size_width",
	$blog_standard_type_image_size_width
);

$blog_standard_type_read_more_button = new PitchQodeField(
	"yesno",
	"blog_standard_type_read_more_button",
	"yes",
	esc_html__( "Read More Button", 'pitch' ),
	esc_html__( "Enable Read More Button", 'pitch' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_blog_standard_type_read_more_button_container"
	)
);
$panel21->addChild(
	"blog_standard_type_read_more_button",
	$blog_standard_type_read_more_button
);

$blog_standard_type_read_more_button_container = new PitchQodeContainer(
	"blog_standard_type_read_more_button_container",
	"blog_standard_type_read_more_button",
	"no"
);
$panel21->addChild(
	"blog_standard_type_read_more_button_container",
	$blog_standard_type_read_more_button_container
);

$blog_standard_type_read_more_button_icon = new PitchQodeField(
	"yesno",
	"blog_standard_type_read_more_button_icon",
	"no",
	esc_html__( "Enable Icon", 'pitch' ),
	esc_html__( "Enabling this option will place icon in read more button", 'pitch' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_blog_standard_type_read_more_button_icon_container"
	)
);
$blog_standard_type_read_more_button_container->addChild(
	"blog_standard_type_read_more_button_icon",
	$blog_standard_type_read_more_button_icon
);

$blog_standard_type_read_more_button_icon_container = new PitchQodeContainer(
	"blog_standard_type_read_more_button_icon_container",
	"blog_standard_type_read_more_button_icon",
	"no"
);
$blog_standard_type_read_more_button_container->addChild(
	"blog_standard_type_read_more_button_icon_container",
	$blog_standard_type_read_more_button_icon_container
);

//init icon pack hide and show array. It will be populated dinamically from collections array
$blog_standard_type_read_more_button_icon_pack_hide_array = array();
$blog_standard_type_read_more_button_icon_pack_show_array = array();

//do we have some collection added in collections array?
if ( is_array( pitch_qode_icon_collections()->iconCollections ) && count(
		pitch_qode_icon_collections()->iconCollections
	) ) {
	//get collections params array. It will contain values of 'param' property for each collection
	$blog_standard_type_read_more_button_icon_collections_params = pitch_qode_icon_collections()->getIconCollectionsParams(
	);
	
	//foreach collection generate hide and show array
	foreach ( pitch_qode_icon_collections()->iconCollections as $dep_collection_key => $dep_collection_object ) {
		$blog_standard_type_read_more_button_icon_pack_hide_array[ $dep_collection_key ] = '';
		
		//we need to include only current collection in show string as it is the only one that needs to show
		$blog_standard_type_read_more_button_icon_pack_show_array[ $dep_collection_key ] = '#qodef_blog_standard_type_read_more_button_icon_' . $dep_collection_object->param . '_container';
		
		//for all collections param generate hide string
		foreach ( $blog_standard_type_read_more_button_icon_collections_params as $blog_standard_type_read_more_button_icon_collections_param ) {
			//we don't need to include current one, because it needs to be shown, not hidden
			if ( $blog_standard_type_read_more_button_icon_collections_param !== $dep_collection_object->param ) {
				$blog_standard_type_read_more_button_icon_pack_hide_array[ $dep_collection_key ] .= '#qodef_blog_standard_type_read_more_button_icon_' . $blog_standard_type_read_more_button_icon_collections_param . '_container,';
			}
		}
		
		//remove remaining ',' character
		$blog_standard_type_read_more_button_icon_pack_hide_array[ $dep_collection_key ] = rtrim(
			$blog_standard_type_read_more_button_icon_pack_hide_array[ $dep_collection_key ],
			','
		);
	}
	
}

$blog_standard_type_read_more_button_icon_pack = new PitchQodeField(
	"select",
	"blog_standard_type_read_more_button_icon_pack",
	"font_awesome",
	esc_html__( "Icon Pack", 'pitch' ),
	esc_html__( "Choose icon pack for show load more button", 'pitch' ),
	pitch_qode_icon_collections()->getIconCollections(),
	array(
		"dependence" => true,
		"hide"       => $blog_standard_type_read_more_button_icon_pack_hide_array,
		"show"       => $blog_standard_type_read_more_button_icon_pack_show_array
	)
);

$blog_standard_type_read_more_button_icon_container->addChild(
	"blog_standard_type_read_more_button_icon_pack",
	$blog_standard_type_read_more_button_icon_pack
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
		
		$blog_standard_type_read_more_button_icon_hide_values = $icon_collections_keys;
		$blog_icon_container                                  = new PitchQodeContainer(
			"blog_standard_type_read_more_button_icon_" . $collection_object->param . "_container",
			"blog_standard_type_read_more_button_icon_pack",
			"",
			$blog_standard_type_read_more_button_icon_hide_values
		);
		$blog_standard_type_read_more_button_icon             = new PitchQodeField(
			"select",
			"blog_standard_type_read_more_button_icon_" . $collection_object->param,
			"",
			esc_html__( "Button Icon", 'pitch' ),
			esc_html__( "Choose Button Icon", 'pitch' ),
			$icons_array,
			array( "col_width" => 3 )
		);
		$blog_icon_container->addChild(
			"blog_standard_type_read_more_button_icon_" . $collection_object->param,
			$blog_standard_type_read_more_button_icon
		);
		
		$blog_standard_type_read_more_button_icon_container->addChild(
			"blog_standard_type_read_more_button_icon_" . $collection_object->param . "_container",
			$blog_icon_container
		);
	}
	
}

$blog_standard_type_content_position = new PitchQodeField(
	"select",
	"blog_standard_type_content_position",
	"content_above_blog_list",
	esc_html__( "Content Position", 'pitch' ),
	esc_html__( "Choose content position for blog list template when sidebar is enabled. Note: This settings in only for template, not for archive pages", 'pitch' ),
	array(
		"content_above_blog_list" => esc_html__( "Content Above Blog List", 'pitch' ),
		"content_above_blog_list_and_sidebar" => esc_html__( "Content Above Blog List and Sidebar", 'pitch' )
	)
);
$panel21->addChild(
	"blog_standard_type_content_position",
	$blog_standard_type_content_position
);

$blog_standard_type_post_meta_data_section = new PitchQodeTitle(
	"blog_standard_type_post_meta_data_section",
	esc_html__( "Post Info Data Fields", 'pitch' )
);
$panel21->addChild(
	"blog_standard_type_post_meta_data_section",
	$blog_standard_type_post_meta_data_section
);

$blog_standard_type_show_categories = new PitchQodeField(
	"yesno",
	"blog_standard_type_show_categories",
	"yes",
	esc_html__( "Show Categories", 'pitch' ),
	esc_html__( "Enabling this option will Show Categories on Post List", 'pitch' )
);
$panel21->addChild(
	"blog_standard_type_show_categories",
	$blog_standard_type_show_categories
);

$blog_standard_type_show_comments = new PitchQodeField(
	"yesno",
	"blog_standard_type_show_comments",
	"no",
	esc_html__( "Show Comments", 'pitch' ),
	esc_html__( "Enabling this option will Show Comments on Post List", 'pitch' )
);
$panel21->addChild(
	"blog_standard_type_show_comments",
	$blog_standard_type_show_comments
);

$blog_standard_type_show_author = new PitchQodeField(
	"yesno",
	"blog_standard_type_show_author",
	"yes",
	esc_html__( "Show Author Name", 'pitch' ),
	esc_html__( "Enabling this option will show author name on Post List and Blog Post Single", 'pitch' )
);
$panel21->addChild(
	"blog_standard_type_show_author",
	$blog_standard_type_show_author
);

$blog_standard_type_show_date = new PitchQodeField(
	"yesno",
	"blog_standard_type_show_date",
	"yes",
	esc_html__( "Show Date", 'pitch' ),
	esc_html__( "Enabling this option will show date on Post List", 'pitch' )
);
$panel21->addChild(
	"blog_standard_type_hide_date",
	$blog_standard_type_show_date
);

$blog_standard_type_show_share = new PitchQodeField(
	"yesno",
	"blog_standard_type_show_share",
	"no",
	esc_html__( "Show Share", 'pitch' ),
	esc_html__( "Enabling this option will show share on Post List", 'pitch' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_blog_standard_type_share_options_container"
	)
);
$panel21->addChild(
	"blog_standard_type_show_share",
	$blog_standard_type_show_share
);

$blog_standard_type_share_options_container = new PitchQodeContainer(
	"blog_standard_type_share_options_container",
	"blog_standard_type_show_share",
	"no"
);
$panel21->addChild(
	"blog_standard_type_share_options_container",
	$blog_standard_type_share_options_container
);

$blog_standard_type_select_share_option = new PitchQodeField(
	"select",
	"blog_standard_type_select_share_option",
	"dropdown",
	esc_html__( "Social Share Style", 'pitch' ),
	esc_html__( "Choose Social Share Style for Standard Type", 'pitch' ),
	array(
		"dropdown" => esc_html__( "Social Share Dropdown", 'pitch' ),
		"list" => esc_html__( "Social Share List", 'pitch' )
	),
	array(
		"dependence" => true,
		"hide"       => array(
			"dropdown" => "#qodef_blog_standard_type_share_list_type_container",
			"list"     => "#qodef_blog_standard_type_share_dropdown_type_container"
		),
		"show"       => array(
			"dropdown" => "#qodef_blog_standard_type_share_dropdown_type_container",
			"list"     => "#qodef_blog_standard_type_share_list_type_container"
		)
	)
);

$blog_standard_type_share_options_container->addChild(
	"blog_standard_type_select_share_option",
	$blog_standard_type_select_share_option
);

$blog_standard_type_share_list_type_container = new PitchQodeContainer(
	"blog_standard_type_share_list_type_container",
	"blog_standard_type_select_share_option",
	"dropdown"
);
$blog_standard_type_share_options_container->addChild(
	"blog_standard_type_share_list_type_container",
	$blog_standard_type_share_list_type_container
);

$blog_standard_type_share_hld_hover_icon_color = new PitchQodeField(
	"color",
	"blog_standard_type_share_hld_hover_icon_color",
	"",
	esc_html__( "Icon color on Quote/Link Holder Hover", 'pitch' ),
	esc_html__( "Choose icon color for list share type when the quote/link holder is hovered over", 'pitch' )
);
$blog_standard_type_share_list_type_container->addChild(
	"blog_standard_type_share_hld_hover_icon_color",
	$blog_standard_type_share_hld_hover_icon_color
);

$blog_standard_type_share_dropdown_type_container = new PitchQodeContainer(
	"blog_standard_type_share_dropdown_type_container",
	"blog_standard_type_select_share_option",
	"list"
);
$blog_standard_type_share_options_container->addChild(
	"blog_standard_type_share_dropdown_type_container",
	$blog_standard_type_share_dropdown_type_container
);

$blog_standard_type_share_background_color = new PitchQodeField(
	"color",
	"blog_standard_type_share_background_color",
	"",
	esc_html__( "Background Color", 'pitch' ),
	esc_html__( "Choose background color for dropdown share type", 'pitch' )
);
$blog_standard_type_share_dropdown_type_container->addChild(
	"blog_standard_type_share_background_color",
	$blog_standard_type_share_background_color
);

$blog_standard_type_share_background_color_link_post_type = new PitchQodeField(
	"color",
	"blog_standard_type_share_background_color_link_post_type",
	"",
	esc_html__( "Background Color on Quote/Link Post Type", 'pitch' ),
	esc_html__( "Choose background color for dropdown share type on quote post type", 'pitch' )
);
$blog_standard_type_share_dropdown_type_container->addChild(
	"blog_standard_type_share_background_color_link_post_type",
	$blog_standard_type_share_background_color_link_post_type
);

$blog_standard_type_share_icon_color = new PitchQodeField(
	"color",
	"blog_standard_type_share_icon_color",
	"",
	esc_html__( "Icon Color", 'pitch' ),
	esc_html__( "Choose icon color for dropdown and list share type", 'pitch' )
);
$blog_standard_type_share_options_container->addChild(
	"blog_standard_type_share_icon_color",
	$blog_standard_type_share_icon_color
);

$blog_standard_type_share_icon_hover_color = new PitchQodeField(
	"color",
	"blog_standard_type_share_icon_hover_color",
	"",
	esc_html__( "Icon Hover Color", 'pitch' ),
	esc_html__( "Choose icon hover color for dropdown and list Share Type", 'pitch' )
);
$blog_standard_type_share_options_container->addChild(
	"blog_standard_type_share_icon_hover_color",
	$blog_standard_type_share_icon_hover_color
);

$blog_standard_type_share_icon_color_link_post_type = new PitchQodeField(
	"color",
	"blog_standard_type_share_icon_color_link_post_type",
	"",
	esc_html__( "Icon Color For Quote/Link Post Type", 'pitch' ),
	esc_html__( "Choose icon color for dropdown and list share type for quote post type", 'pitch' )
);
$blog_standard_type_share_options_container->addChild(
	"blog_standard_type_share_icon_color_link_post_type",
	$blog_standard_type_share_icon_color_link_post_type
);

$blog_standard_type_share_icon_hover_color_link_post_type = new PitchQodeField(
	"color",
	"blog_standard_type_share_icon_hover_color_link_post_type",
	"",
	esc_html__( "Icon Hover Color For Quote/Link Post Type", 'pitch' ),
	esc_html__( "Choose icon hover color for dropdown and list Share Type for quote post type", 'pitch' )
);
$blog_standard_type_share_options_container->addChild(
	"blog_standard_type_share_icon_hover_color_link_post_type",
	$blog_standard_type_share_icon_hover_color_link_post_type
);

$blog_standard_type_show_like = new PitchQodeField(
	"yesno",
	"blog_standard_type_show_like",
	"no",
	esc_html__( "Show Likes", 'pitch' ),
	esc_html__( 'Enabling this option will turn on "Likes"', 'pitch' )
);
$panel21->addChild(
	"blog_standard_type_show_like",
	$blog_standard_type_show_like
);

$blog_standard_type_post_design_style = new PitchQodeTitle(
	"blog_standard_type_post_design_style",
	esc_html__( "Post Design Style", 'pitch' )
);
$panel21->addChild(
	"blog_standard_type_post_design_style",
	$blog_standard_type_post_design_style
);

$blog_standard_type_enable_text_box = new PitchQodeField(
	"yesno",
	"blog_standard_type_enable_text_box",
	"no",
	esc_html__( "Enable Boxed Styled Post Content", 'pitch' ),
	esc_html__( "Enable post text boxed features", 'pitch' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_blog_standard_type_enable_text_box_container"
	)
);
$panel21->addChild(
	"blog_standard_type_enable_text_box",
	$blog_standard_type_enable_text_box
);

$blog_standard_type_enable_text_box_container = new PitchQodeContainer(
	"blog_standard_type_enable_text_box_container",
	"blog_standard_type_enable_text_box",
	"no"
);
$panel21->addChild(
	"blog_standard_type_enable_text_box_container",
	$blog_standard_type_enable_text_box_container
);

$blog_standard_type_box_background_color = new PitchQodeField(
	"color",
	"blog_standard_type_box_background_color",
	"",
	esc_html__( "Background Color", 'pitch' ),
	esc_html__( "Choose background color for post text box", 'pitch' )
);
$blog_standard_type_enable_text_box_container->addChild(
	"blog_standard_type_box_background_color",
	$blog_standard_type_box_background_color
);

$blog_standard_type_box_border_color = new PitchQodeField(
	"color",
	"blog_standard_type_box_border_color",
	"",
	esc_html__( "Border Color", 'pitch' ),
	esc_html__( "Choose border color for post text box", 'pitch' )
);
$blog_standard_type_enable_text_box_container->addChild(
	"blog_standard_type_box_border_color",
	$blog_standard_type_box_border_color
);

$blog_standard_type_box_padding = new PitchQodeField(
	"text",
	"blog_standard_type_box_padding",
	"",
	esc_html__( "Text box padding", 'pitch' ),
	esc_html__( "Please insert padding in format (top right bottom left) i.e. 5px 5px 5px 5px", 'pitch' ),
	array(),
	array( "col_width" => 3 )
);
$blog_standard_type_enable_text_box_container->addChild(
	"blog_standard_type_box_padding",
	$blog_standard_type_box_padding
);

$group10 = new PitchQodeGroup(
	esc_html__( "Paragraph", 'pitch' ),
	esc_html__( "Set paragraph color", 'pitch' )
);
$panel21->addChild(
	"group10",
	$group10
);

$blog_standard_type_paragraph_color = new PitchQodeField(
	"colorsimple",
	"blog_standard_type_paragraph_color",
	"",
	esc_html__( "Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$group10->addChild(
	"blog_standard_type_paragraph_color",
	$blog_standard_type_paragraph_color
);

$group1 = new PitchQodeGroup(
	esc_html__( "Quote/Link Background", 'pitch' ),
	esc_html__( "Set background of Quote/Link post type", 'pitch' )
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

$blog_standard_type_ql_background_image = new PitchQodeField(
	"yesnosimple",
	"blog_standard_type_ql_background_image",
	"no",
	esc_html__( "Background Image", 'pitch' ),
	""
);
$row1->addChild(
	"blog_standard_type_ql_background_image",
	$blog_standard_type_ql_background_image
);

$blog_standard_type_ql_background_color = new PitchQodeField(
	"colorsimple",
	"blog_standard_type_ql_background_color",
	"",
	esc_html__( "Background Color", 'pitch' ),
	esc_html__( "Default color is #ffffff.", 'pitch' )
);
$row1->addChild(
	"blog_standard_type_ql_background_color",
	$blog_standard_type_ql_background_color
);

$blog_standard_type_ql_hover_background_color = new PitchQodeField(
	"colorsimple",
	"blog_standard_type_ql_hover_background_color",
	"",
	esc_html__( "Background Hover Color", 'pitch' ),
	esc_html__( "Default color is #f5245f.", 'pitch' )
);
$row1->addChild(
	"blog_standard_type_ql_hover_background_color",
	$blog_standard_type_ql_hover_background_color
);

$blog_standard_type_show_ql_mark = new PitchQodeField(
	"yesno",
	"blog_standard_type_show_ql_mark",
	"yes",
	esc_html__( "Enable Quote/Link Icon", 'pitch' ),
	esc_html__( "Show Icons for Quote/Link Post Format", 'pitch' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_blog_standard_type_show_ql_mark_container"
	)
);
$panel21->addChild(
	"blog_standard_type_show_ql_mark",
	$blog_standard_type_show_ql_mark
);

$blog_standard_type_show_ql_mark_container = new PitchQodeContainer(
	"blog_standard_type_show_ql_mark_container",
	"blog_standard_type_show_ql_mark",
	"no"
);
$panel21->addChild(
	"blog_standard_type_show_ql_mark_container",
	$blog_standard_type_show_ql_mark_container
);

$row1 = new PitchQodeRow();
$blog_standard_type_show_ql_mark_container->addChild(
	"row1",
	$row1
);

$blog_standard_type_ql_mark_color = new PitchQodeField(
	"color",
	"blog_standard_type_ql_mark_color",
	"",
	esc_html__( "Icon Color", 'pitch' ),
	esc_html__( "Choose icon color for quote/link post.", 'pitch' )
);
$row1->addChild(
	"blog_standard_type_ql_mark_color",
	$blog_standard_type_ql_mark_color
);

$blog_standard_type_ql_mark_hover_color = new PitchQodeField(
	"color",
	"blog_standard_type_ql_mark_hover_color",
	"",
	esc_html__( "Icon Hover Color", 'pitch' ),
	esc_html__( "Choose hover icon color for quote/link post.", 'pitch' )
);
$row1->addChild(
	"blog_standard_type_ql_mark_hover_color",
	$blog_standard_type_ql_mark_hover_color
);

$group11 = new PitchQodeGroup(
	esc_html__( "Blog List Spacing", 'pitch' ),
	esc_html__( "Set spacing for blog layouts", 'pitch' )
);
$panel21->addChild(
	"group11",
	$group11
);

$row1 = new PitchQodeRow();
$group11->addChild(
	"row1",
	$row1
);

$blog_standard_type_image_margin_bottom = new PitchQodeField(
	"textsimple",
	"blog_standard_type_image_margin_bottom",
	"",
	esc_html__( "Margin Under Image (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_standard_type_image_margin_bottom",
	$blog_standard_type_image_margin_bottom
);

$blog_standard_type_title_margin_bottom = new PitchQodeField(
	"textsimple",
	"blog_standard_type_title_margin_bottom",
	"",
	esc_html__( "Margin Under Title (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_standard_type_title_margin_bottom",
	$blog_standard_type_title_margin_bottom
);

$blog_standard_type_read_more_margin_top = new PitchQodeField(
	"textsimple",
	"blog_standard_type_read_more_margin_top",
	"",
	esc_html__( "Margin Above Read More Button (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_standard_type_read_more_margin_top",
	$blog_standard_type_read_more_margin_top
);

$blog_standard_type_post_info_margin_bottom = new PitchQodeField(
	"textsimple",
	"blog_standard_type_post_info_margin_bottom",
	"",
	esc_html__( "Margin Under Post Info (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_standard_type_post_info_margin_bottom",
	$blog_standard_type_post_info_margin_bottom
);

$row2 = new PitchQodeRow();
$group11->addChild(
	"row2",
	$row2
);

$blog_standard_type_article_margin_bottom = new PitchQodeField(
	"textsimple",
	"blog_standard_type_article_margin_bottom",
	"",
	esc_html__( "Margin Between Articles (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"blog_standard_type_article_margin_bottom",
	$blog_standard_type_article_margin_bottom
);

$blog_standard_type_single_article_social_share_list_margin_top = new PitchQodeField(
	"textsimple",
	"blog_standard_type_single_article_social_share_list_margin_top",
	"",
	esc_html__( "Margin Above Social Share List Holder (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"blog_standard_type_single_article_social_share_list_margin_top",
	$blog_standard_type_single_article_social_share_list_margin_top
);

$group12 = new PitchQodeGroup(
	esc_html__( "Blog List Spacing for Quote and Link Post Type", 'pitch' ),
	esc_html__( "Set spacing for blog layouts", 'pitch' )
);
$panel21->addChild(
	"group12",
	$group12
);

$row1 = new PitchQodeRow();
$group12->addChild(
	"row1",
	$row1
);

$blog_standard_type_ql_title_margin_bottom = new PitchQodeField(
	"textsimple",
	"blog_standard_type_ql_title_margin_bottom",
	"",
	esc_html__( "Margin Under Title (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_standard_type_ql_title_margin_bottom",
	$blog_standard_type_ql_title_margin_bottom
);

$blog_standard_type_ql_social_share_list_margin_top = new PitchQodeField(
	"textsimple",
	"blog_standard_type_ql_social_share_list_margin_top",
	"",
	esc_html__( "Margin Above Social Share List (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_standard_type_ql_social_share_list_margin_top",
	$blog_standard_type_ql_social_share_list_margin_top
);

$blog_standard_type_ql_quote_author_margin_bottom = new PitchQodeField(
	"textsimple",
	"blog_standard_type_ql_quote_author_margin_bottom",
	"",
	esc_html__( "Margin Under Quote Author (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_standard_type_ql_quote_author_margin_bottom",
	$blog_standard_type_ql_quote_author_margin_bottom
);

$post_text_styling = new PitchQodeTitle(
	"post_text_styling",
	esc_html__( "Post Text Style", 'pitch' )
);
$panel21->addChild(
	"post_text_styling",
	$post_text_styling
);

$group5 = new PitchQodeGroup(
	esc_html__( "Post Title", 'pitch' ),
	esc_html__( "Define title styles in this blog post template.", 'pitch' )
);
$panel21->addChild(
	"group5",
	$group5
);

$row1 = new PitchQodeRow();
$group5->addChild(
	"row1",
	$row1
);

$blog_standard_type_title_color = new PitchQodeField(
	"colorsimple",
	"blog_standard_type_title_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_standard_type_title_color",
	$blog_standard_type_title_color
);

$blog_standard_type_title_hover_color = new PitchQodeField(
	"colorsimple",
	"blog_standard_type_title_hover_color",
	"",
	esc_html__( "Text Hover Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_standard_type_title_hover_color",
	$blog_standard_type_title_hover_color
);

$blog_standard_type_title_fontsize = new PitchQodeField(
	"textsimple",
	"blog_standard_type_title_fontsize",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_standard_type_title_fontsize",
	$blog_standard_type_title_fontsize
);

$blog_standard_type_title_lineheight = new PitchQodeField(
	"textsimple",
	"blog_standard_type_title_lineheight",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_standard_type_title_lineheight",
	$blog_standard_type_title_lineheight
);

$row2 = new PitchQodeRow( true );
$group5->addChild(
	"row2",
	$row2
);

$blog_standard_type_title_texttransform = new PitchQodeField(
	"selectblanksimple",
	"blog_standard_type_title_texttransform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row2->addChild(
	"blog_standard_type_title_texttransform",
	$blog_standard_type_title_texttransform
);

$blog_standard_type_title_google_fonts = new PitchQodeField(
	"fontsimple",
	"blog_standard_type_title_google_fonts",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"blog_standard_type_title_google_fonts",
	$blog_standard_type_title_google_fonts
);

$blog_standard_type_title_fontstyle = new PitchQodeField(
	"selectblanksimple",
	"blog_standard_type_title_fontstyle",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"blog_standard_type_title_fontstyle",
	$blog_standard_type_title_fontstyle
);

$blog_standard_type_title_fontweight = new PitchQodeField(
	"selectblanksimple",
	"blog_standard_type_title_fontweight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"blog_standard_type_title_fontweight",
	$blog_standard_type_title_fontweight
);

$row3 = new PitchQodeRow( true );
$group5->addChild(
	"row3",
	$row3
);

$blog_standard_type_title_letterspacing = new PitchQodeField(
	"textsimple",
	"blog_standard_type_title_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row3->addChild(
	"blog_standard_type_title_letterspacing",
	$blog_standard_type_title_letterspacing
);

$group7 = new PitchQodeGroup(
	esc_html__( "Post Info Data", 'pitch' ),
	esc_html__( "Define post info text styles (date, category names etc.) Note: Single Posts will take the same styles as in list", 'pitch' )
);
$panel21->addChild(
	"group7",
	$group7
);

$row1 = new PitchQodeRow();
$group7->addChild(
	"row1",
	$row1
);

$blog_standard_type_info_color = new PitchQodeField(
	"colorsimple",
	"blog_standard_type_info_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_standard_type_info_color",
	$blog_standard_type_info_color
);

$blog_standard_type_info_link_color = new PitchQodeField(
	"colorsimple",
	"blog_standard_type_info_link_color",
	"",
	esc_html__( "Link Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_standard_type_info_link_color",
	$blog_standard_type_info_link_color
);

$blog_standard_type_info_hover_color = new PitchQodeField(
	"colorsimple",
	"blog_standard_type_info_hover_color",
	"",
	esc_html__( "Link Hover Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_standard_type_info_hover_color",
	$blog_standard_type_info_hover_color
);

$blog_standard_type_info_fontsize = new PitchQodeField(
	"textsimple",
	"blog_standard_type_info_fontsize",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_standard_type_info_fontsize",
	$blog_standard_type_info_fontsize
);

$row2 = new PitchQodeRow( true );
$group7->addChild(
	"row2",
	$row2
);

$blog_standard_type_info_lineheight = new PitchQodeField(
	"textsimple",
	"blog_standard_type_info_lineheight",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"blog_standard_type_info_lineheight",
	$blog_standard_type_info_lineheight
);

$blog_standard_type_info_google_fonts = new PitchQodeField(
	"fontsimple",
	"blog_standard_type_info_google_fonts",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"blog_standard_type_info_google_fonts",
	$blog_standard_type_info_google_fonts
);

$blog_standard_type_info_fontstyle = new PitchQodeField(
	"selectblanksimple",
	"blog_standard_type_info_fontstyle",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"blog_standard_type_info_fontstyle",
	$blog_standard_type_info_fontstyle
);

$blog_standard_type_info_fontweight = new PitchQodeField(
	"selectblanksimple",
	"blog_standard_type_info_fontweight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"blog_standard_type_info_fontweight",
	$blog_standard_type_info_fontweight
);

$row3 = new PitchQodeRow( true );
$group7->addChild(
	"row3",
	$row3
);

$blog_standard_type_info_texttransform = new PitchQodeField(
	"selectblanksimple",
	"blog_standard_type_info_texttransform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row3->addChild(
	"blog_standard_type_info_texttransform",
	$blog_standard_type_info_texttransform
);

$blog_standard_type_info_letterspacing = new PitchQodeField(
	"textsimple",
	"blog_standard_type_info_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row3->addChild(
	"blog_standard_type_info_letterspacing",
	$blog_standard_type_info_letterspacing
);

$group6 = new PitchQodeGroup(
	esc_html__( "Quote/Link Title Style", 'pitch' ),
	esc_html__( "Define title styles for Quote/Link articles", 'pitch' )
);
$panel21->addChild(
	"group6",
	$group6
);

$row1 = new PitchQodeRow();
$group6->addChild(
	"row1",
	$row1
);

$blog_standard_type_ql_title_color = new PitchQodeField(
	"colorsimple",
	"blog_standard_type_ql_title_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_standard_type_ql_title_color",
	$blog_standard_type_ql_title_color
);

$blog_standard_type_ql_title_hover_color = new PitchQodeField(
	"colorsimple",
	"blog_standard_type_ql_title_hover_color",
	"",
	esc_html__( "Text Hover Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_standard_type_ql_title_hover_color",
	$blog_standard_type_ql_title_hover_color
);

$blog_standard_type_ql_title_fontsize = new PitchQodeField(
	"textsimple",
	"blog_standard_type_ql_title_fontsize",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_standard_type_ql_title_font_size",
	$blog_standard_type_ql_title_fontsize
);

$blog_standard_type_ql_title_lineheight = new PitchQodeField(
	"textsimple",
	"blog_standard_type_ql_title_lineheight",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_standard_type_ql_title_lineheight",
	$blog_standard_type_ql_title_lineheight
);

$row2 = new PitchQodeRow( true );
$group6->addChild(
	"row2",
	$row2
);

$blog_standard_type_ql_title_texttransform = new PitchQodeField(
	"selectblanksimple",
	"blog_standard_type_ql_title_texttransform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row2->addChild(
	"blog_standard_type_ql_title_texttransform",
	$blog_standard_type_ql_title_texttransform
);

$blog_standard_type_ql_title_google_fonts = new PitchQodeField(
	"fontsimple",
	"blog_standard_type_ql_title_google_fonts",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"blog_standard_type_ql_title_google_fonts",
	$blog_standard_type_ql_title_google_fonts
);

$blog_standard_type_ql_title_fontstyle = new PitchQodeField(
	"selectblanksimple",
	"blog_standard_type_ql_title_fontstyle",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"blog_standard_type_ql_title_fontstyle",
	$blog_standard_type_ql_title_fontstyle
);

$blog_standard_type_ql_title_fontweight = new PitchQodeField(
	"selectblanksimple",
	"blog_standard_type_ql_title_fontweight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"blog_standard_type_ql_title_fontweight",
	$blog_standard_type_ql_title_fontweight
);

$row3 = new PitchQodeRow( true );
$group6->addChild(
	"row3",
	$row3
);

$blog_standard_type_ql_title_letterspacing = new PitchQodeField(
	"textsimple",
	"blog_standard_type_ql_title_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row3->addChild(
	"blog_standard_type_ql_title_letterspacing",
	$blog_standard_type_ql_title_letterspacing
);

$group8 = new PitchQodeGroup(
	esc_html__( "Quote/Link Post Info Data", 'pitch' ),
	esc_html__( "Define quote/link post info text styles (date, category names etc.) Note: Single Posts will take the same styles as in list.", 'pitch' )
);
$panel21->addChild(
	"group8",
	$group8
);

$row1 = new PitchQodeRow();
$group8->addChild(
	"row1",
	$row1
);

$blog_standard_type_ql_info_color = new PitchQodeField(
	"colorsimple",
	"blog_standard_type_ql_info_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_standard_type_ql_info_color",
	$blog_standard_type_ql_info_color
);

$blog_standard_type_ql_info_link_color = new PitchQodeField(
	"colorsimple",
	"blog_standard_type_ql_info_link_color",
	"",
	esc_html__( "Link Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_standard_type_ql_info_link_color",
	$blog_standard_type_ql_info_link_color
);

$blog_standard_type_ql_info_hover_color = new PitchQodeField(
	"colorsimple",
	"blog_standard_type_ql_info_hover_color",
	"",
	esc_html__( "Hover Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_standard_type_ql_info_hover_color",
	$blog_standard_type_ql_info_hover_color
);

$blog_standard_type_ql_info_fontsize = new PitchQodeField(
	"textsimple",
	"blog_standard_type_ql_info_fontsize",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_standard_type_ql_info_fontsize",
	$blog_standard_type_ql_info_fontsize
);

$row2 = new PitchQodeRow( true );
$group8->addChild(
	"row2",
	$row2
);

$blog_standard_type_ql_info_lineheight = new PitchQodeField(
	"textsimple",
	"blog_standard_type_ql_info_lineheight",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"blog_standard_type_ql_info_lineheight",
	$blog_standard_type_ql_info_lineheight
);

$blog_standard_type_ql_info_google_fonts = new PitchQodeField(
	"fontsimple",
	"blog_standard_type_ql_info_google_fonts",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"blog_standard_type_ql_info_google_fonts",
	$blog_standard_type_ql_info_google_fonts
);

$blog_standard_type_ql_info_fontstyle = new PitchQodeField(
	"selectblanksimple",
	"blog_standard_type_ql_info_fontstyle",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"blog_standard_type_ql_info_fontstyle",
	$blog_standard_type_ql_info_fontstyle
);

$blog_standard_type_ql_info_fontweight = new PitchQodeField(
	"selectblanksimple",
	"blog_standard_type_ql_info_fontweight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"blog_standard_type_ql_info_fontweight",
	$blog_standard_type_ql_info_fontweight
);

$row3 = new PitchQodeRow( true );
$group8->addChild(
	"row3",
	$row3
);

$blog_standard_type_ql_info_texttransform = new PitchQodeField(
	"selectblanksimple",
	"blog_standard_type_ql_info_texttransform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row3->addChild(
	"blog_standard_type_ql_info_texttransform",
	$blog_standard_type_ql_info_texttransform
);

$blog_standard_type_ql_info_letterspacing = new PitchQodeField(
	"textsimple",
	"blog_standard_type_ql_info_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row3->addChild(
	"blog_standard_type_ql_info_letterspacing",
	$blog_standard_type_ql_info_letterspacing
);

$group9 = new PitchQodeGroup(
	esc_html__( "Quote Author Style", 'pitch' ),
	esc_html__( "Define author styles for Quote articles", 'pitch' )
);
$panel21->addChild(
	"group9",
	$group9
);

$row1 = new PitchQodeRow();
$group9->addChild(
	"row1",
	$row1
);

$blog_standard_type_ql_author_color = new PitchQodeField(
	"colorsimple",
	"blog_standard_type_ql_author_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_standard_type_ql_author_color",
	$blog_standard_type_ql_author_color
);

$blog_standard_type_ql_author_hover_color = new PitchQodeField(
	"colorsimple",
	"blog_standard_type_ql_author_hover_color",
	"",
	esc_html__( "Text Hover Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_standard_type_ql_author_hover_color",
	$blog_standard_type_ql_author_hover_color
);

$blog_standard_type_ql_author_fontsize = new PitchQodeField(
	"textsimple",
	"blog_standard_type_ql_author_fontsize",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_standard_type_ql_author_font_size",
	$blog_standard_type_ql_author_fontsize
);

$blog_standard_type_ql_author_lineheight = new PitchQodeField(
	"textsimple",
	"blog_standard_type_ql_author_lineheight",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_standard_type_ql_author_lineheight",
	$blog_standard_type_ql_author_lineheight
);

$row2 = new PitchQodeRow( true );
$group9->addChild(
	"row2",
	$row2
);

$blog_standard_type_ql_author_texttransform = new PitchQodeField(
	"selectblanksimple",
	"blog_standard_type_ql_author_texttransform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row2->addChild(
	"blog_standard_type_ql_author_texttransform",
	$blog_standard_type_ql_author_texttransform
);

$blog_standard_type_ql_author_google_fonts = new PitchQodeField(
	"fontsimple",
	"blog_standard_type_ql_author_google_fonts",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"blog_standard_type_ql_author_google_fonts",
	$blog_standard_type_ql_author_google_fonts
);

$blog_standard_type_ql_author_fontstyle = new PitchQodeField(
	"selectblanksimple",
	"blog_standard_type_ql_author_fontstyle",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"blog_standard_type_ql_author_fontstyle",
	$blog_standard_type_ql_author_fontstyle
);

$blog_standard_type_ql_author_fontweight = new PitchQodeField(
	"selectblanksimple",
	"blog_standard_type_ql_author_fontweight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"blog_standard_type_ql_author_fontweight",
	$blog_standard_type_ql_author_fontweight
);

$row3 = new PitchQodeRow( true );
$group9->addChild(
	"row3",
	$row3
);

$blog_standard_type_ql_author_letterspacing = new PitchQodeField(
	"textsimple",
	"blog_standard_type_ql_author_letterspacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row3->addChild(
	"blog_standard_type_ql_author_letterspacing",
	$blog_standard_type_ql_author_letterspacing
);

//Blog List

$panel28 = new PitchQodePanel(
	esc_html__( "Blog List Shortcode", 'pitch' ),
	"blog_list_panel"
);
$blogPage->addChild(
	"panel28",
	$panel28
);

//Blog List Boxes

$blog_list_boxes_section_subtitle = new PitchQodeTitle(
	"blog_list_boxes_section_subtitle",
	esc_html__( "Blog List - Boxes", 'pitch' )
);
$panel28->addChild(
	"blog_list_boxes_section_subtitle",
	$blog_list_boxes_section_subtitle
);

$group6 = new PitchQodeGroup(
	esc_html__( "Blog List Padding", 'pitch' ),
	esc_html__( "Enter Boxes Blog List padding", 'pitch' )
);
$panel28->addChild(
	"group6",
	$group6
);
$row1 = new PitchQodeRow();
$group6->addChild(
	"row1",
	$row1
);

$blog_list_boxes_padding_top = new PitchQodeField(
	"textsimple",
	"blog_list_boxes_padding_top",
	"",
	esc_html__( "Padding Top (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_list_boxes_padding_top",
	$blog_list_boxes_padding_top
);

$blog_list_boxes_padding_right = new PitchQodeField(
	"textsimple",
	"blog_list_boxes_padding_right",
	"",
	esc_html__( "Padding Right (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_list_boxes_padding_right",
	$blog_list_boxes_padding_right
);

$blog_list_boxes_padding_bottom = new PitchQodeField(
	"textsimple",
	"blog_list_boxes_padding_bottom",
	"",
	esc_html__( "Padding Bottom (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_list_boxes_padding_bottom",
	$blog_list_boxes_padding_bottom
);

$blog_list_boxes_padding_left = new PitchQodeField(
	"textsimple",
	"blog_list_boxes_padding_left",
	"",
	esc_html__( "Padding Left (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_list_boxes_padding_left",
	$blog_list_boxes_padding_left
);

$group16 = new PitchQodeGroup(
	esc_html__( "Blog List Spacing", 'pitch' ),
	esc_html__( "Define blog list spacing", 'pitch' )
);
$panel28->addChild(
	"group16",
	$group16
);

$row1 = new PitchQodeRow();
$group16->addChild(
	"row1",
	$row1
);

$blog_list_boxes_title_margin_bottom = new PitchQodeField(
	"textsimple",
	"blog_list_boxes_title_margin_bottom",
	"",
	esc_html__( "Margin Under Title (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_list_boxes_title_margin_bottom",
	$blog_list_boxes_title_margin_bottom
);

$blog_list_boxes_post_info_margin_bottom = new PitchQodeField(
	"textsimple",
	"blog_list_boxes_post_info_margin_bottom",
	"",
	esc_html__( "Margin Under Post Info (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_list_boxes_post_info_margin_bottom",
	$blog_list_boxes_post_info_margin_bottom
);

$blog_list_boxes_read_more_margin_top = new PitchQodeField(
	"textsimple",
	"blog_list_boxes_read_more_margin_top",
	"",
	esc_html__( "Margin Above Read More Button (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_list_boxes_read_more_margin_top",
	$blog_list_boxes_read_more_margin_top
);

$group17 = new PitchQodeGroup(
	esc_html__( "Blog List Title", 'pitch' ),
	esc_html__( "Define Blog List title style", 'pitch' )
);
$panel28->addChild(
	"group17",
	$group17
);

$row1 = new PitchQodeRow();
$group17->addChild(
	"row1",
	$row1
);

$blog_list_boxes_title_color = new PitchQodeField(
	"colorsimple",
	"blog_list_boxes_title_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_list_boxes_title_color",
	$blog_list_boxes_title_color
);

$blog_list_boxes_title_hover_color = new PitchQodeField(
	"colorsimple",
	"blog_list_boxes_title_hover_color",
	"",
	esc_html__( "Text Hover Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_list_boxes_title_hover_color",
	$blog_list_boxes_title_hover_color
);

$blog_list_boxes_title_font_size = new PitchQodeField(
	"textsimple",
	"blog_list_boxes_title_font_size",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_list_boxes_title_font_size",
	$blog_list_boxes_title_font_size
);

$blog_list_boxes_title_line_height = new PitchQodeField(
	"textsimple",
	"blog_list_boxes_title_line_height",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_list_boxes_title_line_height",
	$blog_list_boxes_title_line_height
);

$row2 = new PitchQodeRow();
$group17->addChild(
	"row2",
	$row2
);

$blog_list_boxes_title_text_transform = new PitchQodeField(
	"selectblanksimple",
	"blog_list_boxes_title_text_transform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row2->addChild(
	"blog_list_boxes_title_text_transform",
	$blog_list_boxes_title_text_transform
);

$blog_list_boxes_title_font_family = new PitchQodeField(
	"fontsimple",
	"blog_list_boxes_title_font_family",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"blog_list_boxes_title_font_family",
	$blog_list_boxes_title_font_family
);

$blog_list_boxes_title_font_style = new PitchQodeField(
	"selectblanksimple",
	"blog_list_boxes_title_font_style",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"blog_list_boxes_title_font_style",
	$blog_list_boxes_title_font_style
);

$blog_list_boxes_title_font_weight = new PitchQodeField(
	"selectblanksimple",
	"blog_list_boxes_title_font_weight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"blog_list_boxes_title_font_weight",
	$blog_list_boxes_title_font_weight
);

$row3 = new PitchQodeRow();
$group17->addChild(
	"row3",
	$row3
);

$blog_list_boxes_title_letter_spacing = new PitchQodeField(
	"textsimple",
	"blog_list_boxes_title_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row3->addChild(
	"blog_list_boxes_title_letter_spacing",
	$blog_list_boxes_title_letter_spacing
);

$group18 = new PitchQodeGroup(
	esc_html__( "Blog List Post Info", 'pitch' ),
	esc_html__( "Define blog list post info style", 'pitch' )
);
$panel28->addChild(
	"group18",
	$group18
);

$row1 = new PitchQodeRow();
$group18->addChild(
	"row1",
	$row1
);

$blog_list_boxes_post_info_color = new PitchQodeField(
	"colorsimple",
	"blog_list_boxes_post_info_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_list_boxes_post_info_color",
	$blog_list_boxes_post_info_color
);

$blog_list_boxes_post_info_link_color = new PitchQodeField(
	"colorsimple",
	"blog_list_boxes_post_info_link_color",
	"",
	esc_html__( "Link Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_list_boxes_post_info_link_color",
	$blog_list_boxes_post_info_link_color
);

$blog_list_boxes_post_info_link_hover_color = new PitchQodeField(
	"colorsimple",
	"blog_list_boxes_post_info_link_hover_color",
	"",
	esc_html__( "Link Hover Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_list_boxes_post_info_link_hover_color",
	$blog_list_boxes_post_info_link_hover_color
);

$blog_list_boxes_post_info_font_size = new PitchQodeField(
	"textsimple",
	"blog_list_boxes_post_info_font_size",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_list_boxes_post_info_font_size",
	$blog_list_boxes_post_info_font_size
);

$row2 = new PitchQodeRow();
$group18->addChild(
	"row2",
	$row2
);

$blog_list_boxes_post_info_line_height = new PitchQodeField(
	"textsimple",
	"blog_list_boxes_post_info_line_height",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"blog_list_boxes_post_info_line_height",
	$blog_list_boxes_post_info_line_height
);

$blog_list_boxes_post_info_text_transform = new PitchQodeField(
	"selectblanksimple",
	"blog_list_boxes_post_info_text_transform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row2->addChild(
	"blog_list_boxes_post_info_text_transform",
	$blog_list_boxes_post_info_text_transform
);

$blog_list_boxes_post_info_font_family = new PitchQodeField(
	"fontsimple",
	"blog_list_boxes_post_info_font_family",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"blog_list_boxes_post_info_font_family",
	$blog_list_boxes_post_info_font_family
);

$blog_list_boxes_post_info_font_style = new PitchQodeField(
	"selectblanksimple",
	"blog_list_boxes_post_info_font_style",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"blog_list_boxes_post_info_font_style",
	$blog_list_boxes_post_info_font_style
);

$row3 = new PitchQodeRow();
$group18->addChild(
	"row3",
	$row3
);

$blog_list_boxes_post_info_font_weight = new PitchQodeField(
	"selectblanksimple",
	"blog_list_boxes_post_info_font_weight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row3->addChild(
	"blog_list_boxes_post_info_font_weight",
	$blog_list_boxes_post_info_font_weight
);

$blog_list_boxes_post_info_letter_spacing = new PitchQodeField(
	"textsimple",
	"blog_list_boxes_post_info_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row3->addChild(
	"blog_list_boxes_post_info_letter_spacing",
	$blog_list_boxes_post_info_letter_spacing
);

$blog_list_boxes_date_color = new PitchQodeField(
	"color",
	"blog_list_boxes_date_color",
	"",
	esc_html__( "Date Color", 'pitch' ),
	esc_html__( "Choose color for date", 'pitch' )
);
$panel28->addChild(
	"blog_list_boxes_date_color",
	$blog_list_boxes_date_color
);

//BLog List - Date in Left Section

$date_in_left_section_subtitle = new PitchQodeTitle(
	"date_in_left_section_subtitle",
	esc_html__( "Blog List - Date in Left Section", 'pitch' )
);
$panel28->addChild(
	"date_in_left_section_subtitle",
	$date_in_left_section_subtitle
);

$group1 = new PitchQodeGroup(
	esc_html__( "Blog List Title", 'pitch' ),
	esc_html__( "Define Blog List title style", 'pitch' )
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

$blog_list_sections_title_color = new PitchQodeField(
	"colorsimple",
	"blog_list_sections_title_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_list_sections_title_color",
	$blog_list_sections_title_color
);

$blog_list_sections_title_hover_color = new PitchQodeField(
	"colorsimple",
	"blog_list_sections_title_hover_color",
	"",
	esc_html__( "Text Hover Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_list_sections_title_hover_color",
	$blog_list_sections_title_hover_color
);

$blog_list_sections_title_font_size = new PitchQodeField(
	"textsimple",
	"blog_list_sections_title_font_size",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_list_sections_title_font_size",
	$blog_list_sections_title_font_size
);

$blog_list_sections_title_line_height = new PitchQodeField(
	"textsimple",
	"blog_list_sections_title_line_height",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_list_sections_title_line_height",
	$blog_list_sections_title_line_height
);

$row2 = new PitchQodeRow( true );
$group1->addChild(
	"row2",
	$row2
);

$blog_list_sections_title_text_transform = new PitchQodeField(
	"selectblanksimple",
	"blog_list_sections_title_text_transform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row2->addChild(
	"blog_list_sections_title_text_transform",
	$blog_list_sections_title_text_transform
);

$blog_list_sections_title_font_family = new PitchQodeField(
	"fontsimple",
	"blog_list_sections_title_font_family",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"blog_list_sections_title_font_family",
	$blog_list_sections_title_font_family
);

$blog_list_sections_title_font_style = new PitchQodeField(
	"selectblanksimple",
	"blog_list_sections_title_font_style",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"blog_list_sections_title_font_style",
	$blog_list_sections_title_font_style
);

$blog_list_sections_title_font_weight = new PitchQodeField(
	"selectblanksimple",
	"blog_list_sections_title_font_weight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"blog_list_sections_title_font_weight",
	$blog_list_sections_title_font_weight
);

$row3 = new PitchQodeRow( true );
$group1->addChild(
	"row3",
	$row3
);

$blog_list_sections_title_letter_spacing = new PitchQodeField(
	"textsimple",
	"blog_list_sections_title_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row3->addChild(
	"blog_list_sections_title_letter_spacing",
	$blog_list_sections_title_letter_spacing
);

$group2 = new PitchQodeGroup(
	esc_html__( "Blog List Post Info", 'pitch' ),
	esc_html__( "Define blog list post info style", 'pitch' )
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

$blog_list_sections_post_info_color = new PitchQodeField(
	"colorsimple",
	"blog_list_sections_post_info_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_list_sections_post_info_color",
	$blog_list_sections_post_info_color
);

$blog_list_sections_post_info_link_color = new PitchQodeField(
	"colorsimple",
	"blog_list_sections_post_info_link_color",
	"",
	esc_html__( "Link Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_list_sections_post_info_link_color",
	$blog_list_sections_post_info_link_color
);

$blog_list_sections_post_info_link_hover_color = new PitchQodeField(
	"colorsimple",
	"blog_list_sections_post_info_link_hover_color",
	"",
	esc_html__( "Link Hover Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_list_sections_post_info_link_hover_color",
	$blog_list_sections_post_info_link_hover_color
);

$blog_list_sections_post_info_font_size = new PitchQodeField(
	"textsimple",
	"blog_list_sections_post_info_font_size",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_list_sections_post_info_font_size",
	$blog_list_sections_post_info_font_size
);

$row2 = new PitchQodeRow( true );
$group2->addChild(
	"row2",
	$row2
);

$blog_list_sections_post_info_line_height = new PitchQodeField(
	"textsimple",
	"blog_list_sections_post_info_line_height",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"blog_list_sections_post_info_line_height",
	$blog_list_sections_post_info_line_height
);

$blog_list_sections_post_info_text_transform = new PitchQodeField(
	"selectblanksimple",
	"blog_list_sections_post_info_text_transform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row2->addChild(
	"blog_list_sections_post_info_text_transform",
	$blog_list_sections_post_info_text_transform
);

$blog_list_sections_post_info_font_family = new PitchQodeField(
	"fontsimple",
	"blog_list_sections_post_info_font_family",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"blog_list_sections_post_info_font_family",
	$blog_list_sections_post_info_font_family
);

$blog_list_sections_post_info_font_style = new PitchQodeField(
	"selectblanksimple",
	"blog_list_sections_post_info_font_style",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"blog_list_sections_post_info_font_style",
	$blog_list_sections_post_info_font_style
);

$row3 = new PitchQodeRow( true );
$group2->addChild(
	"row3",
	$row3
);

$blog_list_sections_post_info_font_weight = new PitchQodeField(
	"selectblanksimple",
	"blog_list_sections_post_info_font_weight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row3->addChild(
	"blog_list_sections_post_info_font_weight",
	$blog_list_sections_post_info_font_weight
);

$blog_list_sections_post_info_letter_spacing = new PitchQodeField(
	"textsimple",
	"blog_list_sections_post_info_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row3->addChild(
	"blog_list_sections_post_info_letter_spacing",
	$blog_list_sections_post_info_letter_spacing
);

$group3 = new PitchQodeGroup(
	esc_html__( "Blog List Date Style", 'pitch' ),
	esc_html__( "Define blog list date style", 'pitch' )
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

$blog_list_sections_date_color = new PitchQodeField(
	"colorsimple",
	"blog_list_sections_date_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_list_sections_date_color",
	$blog_list_sections_date_color
);

$blog_list_sections_date_font_size = new PitchQodeField(
	"textsimple",
	"blog_list_sections_date_font_size",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_list_sections_date_font_size",
	$blog_list_sections_date_font_size
);

$blog_list_sections_date_line_height = new PitchQodeField(
	"textsimple",
	"blog_list_sections_date_line_height",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_list_sections_date_line_height",
	$blog_list_sections_date_line_height
);

$blog_list_sections_date_text_transform = new PitchQodeField(
	"selectblanksimple",
	"blog_list_sections_date_text_transform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	"blog_list_sections_date_text_transform",
	$blog_list_sections_date_text_transform
);

$row2 = new PitchQodeRow( true );
$group3->addChild(
	"row2",
	$row2
);

$blog_list_sections_date_font_family = new PitchQodeField(
	"fontsimple",
	"blog_list_sections_date_font_family",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"blog_list_sections_date_font_family",
	$blog_list_sections_date_font_family
);

$blog_list_sections_date_font_style = new PitchQodeField(
	"selectblanksimple",
	"blog_list_sections_date_font_style",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"blog_list_sections_date_font_style",
	$blog_list_sections_date_font_style
);

$blog_list_sections_date_font_weight = new PitchQodeField(
	"selectblanksimple",
	"blog_list_sections_date_font_weight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"blog_list_sections_date_font_weight",
	$blog_list_sections_date_font_weight
);

$blog_list_sections_date_letter_spacing = new PitchQodeField(
	"textsimple",
	"blog_list_sections_date_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"blog_list_sections_date_letter_spacing",
	$blog_list_sections_date_letter_spacing
);

$group4 = new PitchQodeGroup(
	esc_html__( "Blog List Border Style", 'pitch' ),
	esc_html__( "Define blog list border style", 'pitch' )
);
$panel28->addChild(
	"group4",
	$group4
);
$row1 = new PitchQodeRow();
$group4->addChild(
	"row1",
	$row1
);

$blog_list_sections_border_thickness = new PitchQodeField(
	"textsimple",
	"blog_list_sections_border_thickness",
	"",
	esc_html__( "Border Width (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_list_sections_border_thickness",
	$blog_list_sections_border_thickness
);

$blog_list_sections_border_color = new PitchQodeField(
	"colorsimple",
	"blog_list_sections_border_color",
	"",
	esc_html__( "Border Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_list_sections_border_color",
	$blog_list_sections_border_color
);

$blog_list_minimal_subtitle = new PitchQodeTitle(
	"blog_list_minimal_subtitle",
	esc_html__( "Blog List - Minimal", 'pitch' )
);
$panel28->addChild(
	"blog_list_minimal_subtitle",
	$blog_list_minimal_subtitle
);

$group5 = new PitchQodeGroup(
	esc_html__( "Blog List Spacing", 'pitch' ),
	esc_html__( "Define blog list spacing", 'pitch' )
);
$panel28->addChild(
	"group5",
	$group5
);

$row1 = new PitchQodeRow( true );
$group5->addChild(
	"row1",
	$row1
);

$blog_list_minimal_title_margin_bottom = new PitchQodeField(
	"textsimple",
	"blog_list_minimal_title_margin_bottom",
	"",
	esc_html__( "Margin Under Title (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_list_minimal_title_margin_bottom",
	$blog_list_minimal_title_margin_bottom
);

$blog_list_minimal_post_info_margin_bottom = new PitchQodeField(
	"textsimple",
	"blog_list_minimal_post_info_margin_bottom",
	"",
	esc_html__( "Margin Under Post Info (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_list_minimal_post_info_margin_bottom",
	$blog_list_minimal_post_info_margin_bottom
);

$blog_list_minimal_read_more_margin_top = new PitchQodeField(
	"textsimple",
	"blog_list_minimal_read_more_margin_top",
	"",
	esc_html__( "Margin Above Read More Button (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_list_minimal_read_more_margin_top",
	$blog_list_minimal_read_more_margin_top
);

//Split Column
$blog_list_split_column_subtitle = new PitchQodeTitle(
	"blog_list_split_column_subtitle",
	esc_html__( "Blog List - Split Column", 'pitch' )
);
$panel28->addChild(
	"blog_list_split_column_subtitle",
	$blog_list_split_column_subtitle
);

$group11 = new PitchQodeGroup(
	esc_html__( "Blog List Split Column Spacing", 'pitch' ),
	esc_html__( "Define split column spacing", 'pitch' )
);
$panel28->addChild(
	"group11",
	$group11
);

$row1 = new PitchQodeRow();
$group11->addChild(
	"row1",
	$row1
);

$blog_list_split_column_title_margin_bottom = new PitchQodeField(
	"textsimple",
	"blog_list_split_column_title_margin_bottom",
	"",
	esc_html__( "Margin Under Title (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_list_split_column_title_margin_bottom",
	$blog_list_split_column_title_margin_bottom
);

$blog_list_split_column_post_info_margin_bottom = new PitchQodeField(
	"textsimple",
	"blog_list_split_column_post_info_margin_bottom",
	"",
	esc_html__( "Margin Under Post Info (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_list_split_column_post_info_margin_bottom",
	$blog_list_split_column_post_info_margin_bottom
);

$blog_list_split_column_text_section_left_padding = new PitchQodeField(
	"textsimple",
	"blog_list_split_column_text_section_left_padding",
	"",
	esc_html__( "Left Padding For Text Section (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_list_split_column_text_section_left_padding",
	$blog_list_split_column_text_section_left_padding
);

$blog_list_split_column_text_section_right_padding = new PitchQodeField(
	"textsimple",
	"blog_list_split_column_text_section_right_padding",
	"",
	esc_html__( "Right Padding For Text Section (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_list_split_column_text_section_right_padding",
	$blog_list_split_column_text_section_right_padding
);

$blog_list_masonry_subtitle = new PitchQodeTitle(
	'blog_list_masonry_subtitle',
	esc_html__( 'Blog List - Masonry', 'pitch' )
);
$panel28->addChild(
	'blog_list_masonry_subtitle',
	$blog_list_masonry_subtitle
);

$group19 = new PitchQodeGroup(
	esc_html__( 'Blog List Padding', 'pitch' ),
	esc_html__( 'Enter Boxes Blog List padding', 'pitch' )
);
$panel28->addChild(
	'group19',
	$group19
);

$row1 = new PitchQodeRow();
$group19->addChild(
	'row1',
	$row1
);

$blog_list_masonry_padding_top = new PitchQodeField(
	'textsimple',
	'blog_list_masonry_padding_top',
	'',
	esc_html__( 'Padding Top (px)', 'pitch' ),
	''
);
$row1->addChild(
	'blog_list_masonry_padding_top',
	$blog_list_masonry_padding_top
);

$blog_list_masonry_padding_right = new PitchQodeField(
	'textsimple',
	'blog_list_masonry_padding_right',
	'',
	esc_html__( 'Padding Right (px)', 'pitch' ),
	''
);
$row1->addChild(
	'blog_list_masonry_padding_right',
	$blog_list_masonry_padding_right
);

$blog_list_masonry_padding_bottom = new PitchQodeField(
	'textsimple',
	'blog_list_masonry_padding_bottom',
	'',
	esc_html__( 'Padding Bottom (px)', 'pitch' ),
	''
);
$row1->addChild(
	'blog_list_masonry_padding_bottom',
	$blog_list_masonry_padding_bottom
);

$blog_list_masonry_padding_left = new PitchQodeField(
	'textsimple',
	'blog_list_masonry_padding_left',
	'',
	esc_html__( 'Padding Left (px)', 'pitch' ),
	''
);
$row1->addChild(
	'blog_list_masonry_padding_left',
	$blog_list_masonry_padding_left
);

$group20 = new PitchQodeGroup(
	esc_html__( 'Blog List Spacing', 'pitch' ),
	esc_html__( 'Define blog list spacing', 'pitch' )
);
$panel28->addChild(
	'group20',
	$group20
);

$row2 = new PitchQodeRow();
$group20->addChild(
	'row2',
	$row2
);

$blog_list_masonry_title_margin_bottom = new PitchQodeField(
	'textsimple',
	'blog_list_masonry_title_margin_bottom',
	'',
	esc_html__( 'Margin Under Title (px)', 'pitch' ),
	''
);
$row2->addChild(
	'blog_list_masonry_title_margin_bottom',
	$blog_list_masonry_title_margin_bottom
);

$blog_list_masonry_post_info_margin_bottom = new PitchQodeField(
	'textsimple',
	'blog_list_masonry_post_info_margin_bottom',
	'',
	esc_html__( 'Margin Under Post Info (px)', 'pitch' ),
	''
);
$row2->addChild(
	'blog_list_masonry_post_info_margin_bottom',
	$blog_list_masonry_post_info_margin_bottom
);

$group21 = new PitchQodeGroup(
	esc_html__( 'Blog List Title', 'pitch' ),
	esc_html__( 'Define Blog List title style', 'pitch' )
);
$panel28->addChild(
	'group21',
	$group21
);

$row1 = new PitchQodeRow();
$group21->addChild(
	'row1',
	$row1
);

$blog_list_masonry_title_color = new PitchQodeField(
	'colorsimple',
	'blog_list_masonry_title_color',
	'',
	esc_html__( 'Text Color', 'pitch' ),
	''
);
$row1->addChild(
	'blog_list_masonry_title_color',
	$blog_list_masonry_title_color
);

$blog_list_masonry_title_hover_color = new PitchQodeField(
	'colorsimple',
	'blog_list_masonry_title_hover_color',
	'',
	esc_html__( 'Text Hover Color', 'pitch' ),
	''
);
$row1->addChild(
	'blog_list_masonry_title_hover_color',
	$blog_list_masonry_title_hover_color
);

$blog_list_masonry_title_font_size = new PitchQodeField(
	'textsimple',
	'blog_list_masonry_title_font_size',
	'',
	esc_html__( 'Font Size (px)', 'pitch' ),
	''
);
$row1->addChild(
	'blog_list_masonry_title_font_size',
	$blog_list_masonry_title_font_size
);

$blog_list_masonry_title_line_height = new PitchQodeField(
	'textsimple',
	'blog_list_masonry_title_line_height',
	'',
	esc_html__( 'Line Height (px)', 'pitch' ),
	''
);
$row1->addChild(
	'blog_list_masonry_title_line_height',
	$blog_list_masonry_title_line_height
);

$row2 = new PitchQodeRow();
$group21->addChild(
	'row2',
	$row2
);

$blog_list_masonry_title_text_transform = new PitchQodeField(
	'selectblanksimple',
	'blog_list_masonry_title_text_transform',
	'',
	esc_html__( 'Text Transform', 'pitch' ),
	'',
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row2->addChild(
	'blog_list_masonry_title_text_transform',
	$blog_list_masonry_title_text_transform
);

$blog_list_masonry_title_font_family = new PitchQodeField(
	'fontsimple',
	'blog_list_masonry_title_font_family',
	'-1',
	esc_html__( 'Font Family', 'pitch' ),
	''
);
$row2->addChild(
	'blog_list_masonry_title_font_family',
	$blog_list_masonry_title_font_family
);

$blog_list_masonry_title_font_style = new PitchQodeField(
	'selectblanksimple',
	'blog_list_masonry_title_font_style',
	'',
	esc_html__( 'Font Style', 'pitch' ),
	'',
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	'blog_list_masonry_title_font_style',
	$blog_list_masonry_title_font_style
);

$blog_list_masonry_title_font_weight = new PitchQodeField(
	'selectblanksimple',
	'blog_list_masonry_title_font_weight',
	'',
	esc_html__( 'Font Weight', 'pitch' ),
	'',
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	'blog_list_masonry_title_font_weight',
	$blog_list_masonry_title_font_weight
);

$row3 = new PitchQodeRow();
$group21->addChild(
	'row3',
	$row3
);

$blog_list_masonry_title_letter_spacing = new PitchQodeField(
	'textsimple',
	'blog_list_masonry_title_letter_spacing',
	'',
	esc_html__( 'Letter Spacing (px)', 'pitch' ),
	''
);
$row3->addChild(
	'blog_list_masonry_title_letter_spacing',
	$blog_list_masonry_title_letter_spacing
);

$group22 = new PitchQodeGroup(
	esc_html__( 'Blog List Post Info', 'pitch' ),
	esc_html__( 'Define blog list post info style', 'pitch' )
);
$panel28->addChild(
	'group22',
	$group22
);

$row1 = new PitchQodeRow();
$group22->addChild(
	'row1',
	$row1
);

$blog_list_masonry_date_color = new PitchQodeField(
	'colorsimple',
	'blog_list_masonry_date_color',
	'',
	esc_html__( 'Date Color', 'pitch' ),
	esc_html__( 'Choose color for date', 'pitch' )
);
$row1->addChild(
	'blog_list_masonry_date_color',
	$blog_list_masonry_date_color
);

$blog_list_masonry_post_info_link_color = new PitchQodeField(
	'colorsimple',
	'blog_list_masonry_post_info_link_color',
	'',
	esc_html__( 'Link Color', 'pitch' ),
	''
);
$row1->addChild(
	'blog_list_masonry_post_info_link_color',
	$blog_list_masonry_post_info_link_color
);

$blog_list_masonry_post_info_link_hover_color = new PitchQodeField(
	'colorsimple',
	'blog_list_masonry_post_info_link_hover_color',
	'',
	esc_html__( 'Link Hover Color', 'pitch' ),
	''
);
$row1->addChild(
	'blog_list_masonry_post_info_link_hover_color',
	$blog_list_masonry_post_info_link_hover_color
);

$blog_list_masonry_post_info_font_size = new PitchQodeField(
	'textsimple',
	'blog_list_masonry_post_info_font_size',
	'',
	esc_html__( 'Font Size (px)', 'pitch' ),
	''
);
$row1->addChild(
	'blog_list_masonry_post_info_font_size',
	$blog_list_masonry_post_info_font_size
);

$row2 = new PitchQodeRow();
$group22->addChild(
	'row2',
	$row2
);

$blog_list_masonry_post_info_line_height = new PitchQodeField(
	'textsimple',
	'blog_list_masonry_post_info_line_height',
	'',
	esc_html__( 'Line Height (px)', 'pitch' ),
	''
);
$row2->addChild(
	'blog_list_masonry_post_info_line_height',
	$blog_list_masonry_post_info_line_height
);

$blog_list_masonry_post_info_text_transform = new PitchQodeField(
	'selectblanksimple',
	'blog_list_masonry_post_info_text_transform',
	'',
	esc_html__( 'Text Transform', 'pitch' ),
	'',
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row2->addChild(
	'blog_list_masonry_post_info_text_transform',
	$blog_list_masonry_post_info_text_transform
);

$blog_list_masonry_post_info_font_family = new PitchQodeField(
	'fontsimple',
	'blog_list_masonry_post_info_font_family',
	'-1',
	esc_html__( 'Font Family', 'pitch' ),
	''
);
$row2->addChild(
	'blog_list_masonry_post_info_font_family',
	$blog_list_masonry_post_info_font_family
);

$blog_list_masonry_post_info_font_style = new PitchQodeField(
	'selectblanksimple',
	'blog_list_masonry_post_info_font_style',
	'',
	esc_html__( 'Font Style', 'pitch' ),
	'',
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	'blog_list_masonry_post_info_font_style',
	$blog_list_masonry_post_info_font_style
);

$row3 = new PitchQodeRow();
$group22->addChild(
	'row3',
	$row3
);

$blog_list_masonry_post_info_font_weight = new PitchQodeField(
	'selectblanksimple',
	'blog_list_masonry_post_info_font_weight',
	'',
	esc_html__( 'Font Weight', 'pitch' ),
	'',
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row3->addChild(
	'blog_list_masonry_post_info_font_weight',
	$blog_list_masonry_post_info_font_weight
);

$blog_list_masonry_post_info_letter_spacing = new PitchQodeField(
	'textsimple',
	'blog_list_masonry_post_info_letter_spacing',
	'',
	esc_html__( 'Letter Spacing (px)', 'pitch' ),
	''
);
$row3->addChild(
	'blog_list_masonry_post_info_letter_spacing',
	$blog_list_masonry_post_info_letter_spacing
);

$blog_list_masonry_post_info_border_color = new PitchQodeField(
	'colorsimple',
	'blog_list_masonry_post_info_border_color',
	'',
	esc_html__( 'Border Color', 'pitch' ),
	''
);
$row3->addChild(
	'blog_list_masonry_post_info_border_color',
	$blog_list_masonry_post_info_border_color
);

$blog_list_masonry_post_info_border_width = new PitchQodeField(
	'textsimple',
	'blog_list_masonry_post_info_border_width',
	'',
	esc_html__( 'Border Width (px)', 'pitch' ),
	''
);
$row3->addChild(
	'blog_list_masonry_post_info_border_width',
	$blog_list_masonry_post_info_border_width
);

// Image in left box

$image_in_left_box = new PitchQodeTitle(
	"image_in_left_box",
	esc_html__( "Blog List - Image in Left Box", 'pitch' )
);
$panel28->addChild(
	"image_in_left_box",
	$image_in_left_box
);

$group28 = new PitchQodeGroup(
	esc_html__( "Blog List Title", 'pitch' ),
	esc_html__( "Define Blog List title style", 'pitch' )
);
$panel28->addChild(
	"group28",
	$group28
);
$row1 = new PitchQodeRow();
$group28->addChild(
	"row1",
	$row1
);

$blog_list_img_in_lbox_title_color = new PitchQodeField(
	"colorsimple",
	"blog_list_img_in_lbox_title_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_list_img_in_lbox_title_color",
	$blog_list_img_in_lbox_title_color
);

$blog_list_img_in_lbox_title_hover_color = new PitchQodeField(
	"colorsimple",
	"blog_list_img_in_lbox_title_hover_color",
	"",
	esc_html__( "Text Hover Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_list_img_in_lbox_title_hover_color",
	$blog_list_img_in_lbox_title_hover_color
);

$blog_list_img_in_lbox_title_font_size = new PitchQodeField(
	"textsimple",
	"blog_list_img_in_lbox_title_font_size",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_list_img_in_lbox_title_font_size",
	$blog_list_img_in_lbox_title_font_size
);

$blog_list_img_in_lbox_title_line_height = new PitchQodeField(
	"textsimple",
	"blog_list_img_in_lbox_title_line_height",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_list_img_in_lbox_title_line_height",
	$blog_list_img_in_lbox_title_line_height
);

$row2 = new PitchQodeRow( true );
$group28->addChild(
	"row2",
	$row2
);

$blog_list_img_in_lbox_title_text_transform = new PitchQodeField(
	"selectblanksimple",
	"blog_list_img_in_lbox_title_text_transform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row2->addChild(
	"blog_list_img_in_lbox_title_text_transform",
	$blog_list_img_in_lbox_title_text_transform
);

$blog_list_img_in_lbox_title_font_family = new PitchQodeField(
	"fontsimple",
	"blog_list_img_in_lbox_title_font_family",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"blog_list_img_in_lbox_title_font_family",
	$blog_list_img_in_lbox_title_font_family
);

$blog_list_img_in_lbox_title_font_style = new PitchQodeField(
	"selectblanksimple",
	"blog_list_img_in_lbox_title_font_style",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"blog_list_img_in_lbox_title_font_style",
	$blog_list_img_in_lbox_title_font_style
);

$blog_list_img_in_lbox_title_font_weight = new PitchQodeField(
	"selectblanksimple",
	"blog_list_img_in_lbox_title_font_weight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"blog_list_img_in_lbox_title_font_weight",
	$blog_list_img_in_lbox_title_font_weight
);

$row3 = new PitchQodeRow( true );
$group28->addChild(
	"row3",
	$row3
);

$blog_list_img_in_lbox_title_letter_spacing = new PitchQodeField(
	"textsimple",
	"blog_list_img_in_lbox_title_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row3->addChild(
	"blog_list_img_in_lbox_title_letter_spacing",
	$blog_list_img_in_lbox_title_letter_spacing
);

$group29 = new PitchQodeGroup(
	esc_html__( "Blog List Post Info", 'pitch' ),
	esc_html__( "Define blog list post info style", 'pitch' )
);
$panel28->addChild(
	"group29",
	$group29
);
$row1 = new PitchQodeRow();
$group29->addChild(
	"row1",
	$row1
);

$blog_list_img_in_lbox_post_info_color = new PitchQodeField(
	"colorsimple",
	"blog_list_img_in_lbox_post_info_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_list_img_in_lbox_post_info_color",
	$blog_list_img_in_lbox_post_info_color
);

$blog_list_img_in_lbox_post_info_link_color = new PitchQodeField(
	"colorsimple",
	"blog_list_img_in_lbox_post_info_link_color",
	"",
	esc_html__( "Link Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_list_img_in_lbox_post_info_link_color",
	$blog_list_img_in_lbox_post_info_link_color
);

$blog_list_img_in_lbox_post_info_link_hover_color = new PitchQodeField(
	"colorsimple",
	"blog_list_img_in_lbox_post_info_link_hover_color",
	"",
	esc_html__( "Link Hover Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_list_img_in_lbox_post_info_link_hover_color",
	$blog_list_img_in_lbox_post_info_link_hover_color
);

$blog_list_img_in_lbox_post_info_font_size = new PitchQodeField(
	"textsimple",
	"blog_list_img_in_lbox_post_info_font_size",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_list_img_in_lbox_post_info_font_size",
	$blog_list_img_in_lbox_post_info_font_size
);

$row2 = new PitchQodeRow( true );
$group29->addChild(
	"row2",
	$row2
);

$blog_list_img_in_lbox_post_info_line_height = new PitchQodeField(
	"textsimple",
	"blog_list_img_in_lbox_post_info_line_height",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"blog_list_img_in_lbox_post_info_line_height",
	$blog_list_img_in_lbox_post_info_line_height
);

$blog_list_img_in_lbox_post_info_text_transform = new PitchQodeField(
	"selectblanksimple",
	"blog_list_img_in_lbox_post_info_text_transform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row2->addChild(
	"blog_list_img_in_lbox_post_info_text_transform",
	$blog_list_img_in_lbox_post_info_text_transform
);

$blog_list_img_in_lbox_post_info_font_family = new PitchQodeField(
	"fontsimple",
	"blog_list_img_in_lbox_post_info_font_family",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"blog_list_img_in_lbox_post_info_font_family",
	$blog_list_img_in_lbox_post_info_font_family
);

$blog_list_img_in_lbox_post_info_font_style = new PitchQodeField(
	"selectblanksimple",
	"blog_list_img_in_lbox_post_info_font_style",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"blog_list_img_in_lbox_post_info_font_style",
	$blog_list_img_in_lbox_post_info_font_style
);

$row3 = new PitchQodeRow( true );
$group29->addChild(
	"row3",
	$row3
);

$blog_list_img_in_lbox_post_info_font_weight = new PitchQodeField(
	"selectblanksimple",
	"blog_list_img_in_lbox_post_info_font_weight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row3->addChild(
	"blog_list_img_in_lbox_post_info_font_weight",
	$blog_list_img_in_lbox_post_info_font_weight
);

$blog_list_img_in_lbox_post_info_letter_spacing = new PitchQodeField(
	"textsimple",
	"blog_list_img_in_lbox_post_info_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row3->addChild(
	"blog_list_img_in_lbox_post_info_letter_spacing",
	$blog_list_img_in_lbox_post_info_letter_spacing
);

$group30 = new PitchQodeGroup(
	esc_html__( "Blog List Date Style", 'pitch' ),
	esc_html__( "Define blog list date style", 'pitch' )
);
$panel28->addChild(
	"group30",
	$group30
);
$row1 = new PitchQodeRow();
$group30->addChild(
	"row1",
	$row1
);

$blog_list_img_in_lbox_date_color = new PitchQodeField(
	"colorsimple",
	"blog_list_img_in_lbox_date_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_list_img_in_lbox_date_color",
	$blog_list_img_in_lbox_date_color
);

$blog_list_img_in_lbox_date_font_size = new PitchQodeField(
	"textsimple",
	"blog_list_img_in_lbox_date_font_size",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_list_img_in_lbox_date_font_size",
	$blog_list_img_in_lbox_date_font_size
);

$blog_list_img_in_lbox_date_line_height = new PitchQodeField(
	"textsimple",
	"blog_list_img_in_lbox_date_line_height",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_list_img_in_lbox_date_line_height",
	$blog_list_img_in_lbox_date_line_height
);

$blog_list_img_in_lbox_date_text_transform = new PitchQodeField(
	"selectblanksimple",
	"blog_list_img_in_lbox_date_text_transform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	"blog_list_img_in_lbox_date_text_transform",
	$blog_list_img_in_lbox_date_text_transform
);

$row2 = new PitchQodeRow( true );
$group30->addChild(
	"row2",
	$row2
);

$blog_list_img_in_lbox_date_font_family = new PitchQodeField(
	"fontsimple",
	"blog_list_img_in_lbox_date_font_family",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"blog_list_img_in_lbox_date_font_family",
	$blog_list_img_in_lbox_date_font_family
);

$blog_list_img_in_lbox_date_font_style = new PitchQodeField(
	"selectblanksimple",
	"blog_list_img_in_lbox_date_font_style",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"blog_list_img_in_lbox_date_font_style",
	$blog_list_img_in_lbox_date_font_style
);

$blog_list_img_in_lbox_date_font_weight = new PitchQodeField(
	"selectblanksimple",
	"blog_list_img_in_lbox_date_font_weight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"blog_list_img_in_lbox_date_font_weight",
	$blog_list_img_in_lbox_date_font_weight
);

$blog_list_img_in_lbox_date_letter_spacing = new PitchQodeField(
	"textsimple",
	"blog_list_img_in_lbox_date_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"blog_list_img_in_lbox_date_letter_spacing",
	$blog_list_img_in_lbox_date_letter_spacing
);

$group31 = new PitchQodeGroup(
	esc_html__( "Blog List Spacing", 'pitch' ),
	esc_html__( "Define blog list spacing", 'pitch' )
);
$panel28->addChild(
	"group31",
	$group31
);

$row1 = new PitchQodeRow( true );
$group31->addChild(
	"row1",
	$row1
);

$blog_list_img_in_lbox_title_margin_bttm = new PitchQodeField(
	"textsimple",
	"blog_list_img_in_lbox_title_margin_bttm",
	"",
	esc_html__( "Margin Under Title (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_list_img_in_lbox_title_margin_bttm",
	$blog_list_img_in_lbox_title_margin_bttm
);

$blog_list_img_in_lbox_post_info_margin_bttm = new PitchQodeField(
	"textsimple",
	"blog_list_img_in_lbox_post_info_margin_bttm",
	"",
	esc_html__( "Margin Under Post Info (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_list_img_in_lbox_post_info_margin_bttm",
	$blog_list_img_in_lbox_post_info_margin_bttm
);

$blog_list_img_in_lbox_read_more_margin_top = new PitchQodeField(
	"textsimple",
	"blog_list_img_in_lbox_read_more_margin_top",
	"",
	esc_html__( "Margin Above Read More Button (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_list_img_in_lbox_read_more_margin_top",
	$blog_list_img_in_lbox_read_more_margin_top
);

/*** Blog Carousel ***/

$panel31 = new PitchQodePanel(
	esc_html__( "Blog Carousel", 'pitch' ),
	"blog_slider"
);
$blogPage->addChild(
	"panel31",
	$panel31
);

$blog_slider_default_and_with_info_always_title = new PitchQodeTitle(
	"blog_slider_default_and_with_info_always_title",
	esc_html__( "Default and Post Info Visible", 'pitch' )
);
$panel31->addChild(
	"blog_slider_default_and_with_info_always_title",
	$blog_slider_default_and_with_info_always_title
);

$group23 = new PitchQodeGroup(
	esc_html__( "Title style", 'pitch' ),
	esc_html__( "Blog Carousel title style", 'pitch' )
);
$panel31->addChild(
	"group23",
	$group23
);

$row1 = new PitchQodeRow();
$group23->addChild(
	"row1",
	$row1
);

$blog_slider_title_color = new PitchQodeField(
	"colorsimple",
	"blog_slider_title_color",
	"",
	esc_html__( "Title Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_slider_title_color",
	$blog_slider_title_color
);

$blog_slider_title_hover_color = new PitchQodeField(
	"colorsimple",
	"blog_slider_title_hover_color",
	"",
	esc_html__( "Title Hover Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_slider_title_hover_color",
	$blog_slider_title_hover_color
);

$blog_slider_title_font_size = new PitchQodeField(
	"textsimple",
	"blog_slider_title_font_size",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_slider_title_font_size",
	$blog_slider_title_font_size
);

$blog_slider_title_line_height = new PitchQodeField(
	"textsimple",
	"blog_slider_title_line_height",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_slider_title_line_height",
	$blog_slider_title_line_height
);

$row2 = new PitchQodeRow();
$group23->addChild(
	"row2",
	$row2
);

$blog_slider_title_text_transform = new PitchQodeField(
	"selectblanksimple",
	"blog_slider_title_text_transform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row2->addChild(
	"blog_slider_title_text_transform",
	$blog_slider_title_text_transform
);

$blog_slider_title_font_family = new PitchQodeField(
	"fontsimple",
	"blog_slider_title_font_family",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"blog_slider_title_font_family",
	$blog_slider_title_font_family
);

$blog_slider_title_font_style = new PitchQodeField(
	"selectblanksimple",
	"blog_slider_title_font_style",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"blog_slider_title_font_style",
	$blog_slider_title_font_style
);

$blog_slider_title_font_weight = new PitchQodeField(
	"selectblanksimple",
	"blog_slider_title_font_weight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"blog_slider_title_font_weight",
	$blog_slider_title_font_weight
);

$row3 = new PitchQodeRow();
$group23->addChild(
	"row3",
	$row3
);

$blog_slider_title_letter_spacing = new PitchQodeField(
	"textsimple",
	"blog_slider_title_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row3->addChild(
	"blog_slider_title_letter_spacing",
	$blog_slider_title_letter_spacing
);

$group24 = new PitchQodeGroup(
	esc_html__( "Category style", 'pitch' ),
	esc_html__( "Blog Carousel categories style", 'pitch' )
);
$panel31->addChild(
	"group24",
	$group24
);

$row1 = new PitchQodeRow();
$group24->addChild(
	"row1",
	$row1
);

$blog_slider_category_color = new PitchQodeField(
	"colorsimple",
	"blog_slider_category_color",
	"",
	esc_html__( "Category Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_slider_category_color",
	$blog_slider_category_color
);

$blog_slider_category_hover_color = new PitchQodeField(
	"colorsimple",
	"blog_slider_category_hover_color",
	"",
	esc_html__( "Category Hover Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_slider_category_hover_color",
	$blog_slider_category_hover_color
);

$blog_slider_category_font_size = new PitchQodeField(
	"textsimple",
	"blog_slider_category_font_size",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_slider_category_font_size",
	$blog_slider_category_font_size
);

$blog_slider_category_line_height = new PitchQodeField(
	"textsimple",
	"blog_slider_category_line_height",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_slider_category_line_height",
	$blog_slider_category_line_height
);

$row2 = new PitchQodeRow();
$group24->addChild(
	"row2",
	$row2
);

$blog_slider_category_text_transform = new PitchQodeField(
	"selectblanksimple",
	"blog_slider_category_text_transform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row2->addChild(
	"blog_slider_category_text_transform",
	$blog_slider_category_text_transform
);

$blog_slider_category_font_family = new PitchQodeField(
	"fontsimple",
	"blog_slider_category_font_family",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"blog_slider_category_font_family",
	$blog_slider_category_font_family
);

$blog_slider_category_font_style = new PitchQodeField(
	"selectblanksimple",
	"blog_slider_category_font_style",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"blog_slider_category_font_style",
	$blog_slider_category_font_style
);

$blog_slider_category_font_weight = new PitchQodeField(
	"selectblanksimple",
	"blog_slider_category_font_weight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"blog_slider_category_font_weight",
	$blog_slider_category_font_weight
);

$row3 = new PitchQodeRow();
$group24->addChild(
	"row3",
	$row3
);

$blog_slider_category_letter_spacing = new PitchQodeField(
	"textsimple",
	"blog_slider_category_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row3->addChild(
	"blog_slider_category_letter_spacing",
	$blog_slider_category_letter_spacing
);

$group25 = new PitchQodeGroup(
	esc_html__( "Date style", 'pitch' ),
	esc_html__( "Blog Carousel date style", 'pitch' )
);
$panel31->addChild(
	"group25",
	$group25
);

$row1 = new PitchQodeRow();
$group25->addChild(
	"row1",
	$row1
);

$blog_slider_date_color = new PitchQodeField(
	"colorsimple",
	"blog_slider_date_color",
	"",
	esc_html__( "Date Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_slider_date_color",
	$blog_slider_date_color
);

$blog_slider_date_font_size = new PitchQodeField(
	"textsimple",
	"blog_slider_date_font_size",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_slider_date_font_size",
	$blog_slider_date_font_size
);

$blog_slider_date_line_height = new PitchQodeField(
	"textsimple",
	"blog_slider_date_line_height",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_slider_date_line_height",
	$blog_slider_date_line_height
);

$blog_slider_date_text_transform = new PitchQodeField(
	"selectblanksimple",
	"blog_slider_date_text_transform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row1->addChild(
	"blog_slider_date_text_transform",
	$blog_slider_date_text_transform
);

$row2 = new PitchQodeRow();
$group25->addChild(
	"row2",
	$row2
);

$blog_slider_date_font_family = new PitchQodeField(
	"fontsimple",
	"blog_slider_date_font_family",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"blog_slider_date_font_family",
	$blog_slider_date_font_family
);

$blog_slider_date_font_style = new PitchQodeField(
	"selectblanksimple",
	"blog_slider_date_font_style",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"blog_slider_date_font_style",
	$blog_slider_date_font_style
);

$blog_slider_date_font_weight = new PitchQodeField(
	"selectblanksimple",
	"blog_slider_date_font_weight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"blog_slider_date_font_weight",
	$blog_slider_date_font_weight
);

$blog_slider_date_letter_spacing = new PitchQodeField(
	"textsimple",
	"blog_slider_date_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"blog_slider_date_letter_spacing",
	$blog_slider_date_letter_spacing
);

$blog_slider_info_in_bottom_title = new PitchQodeTitle(
	"blog_slider_info_in_bottom_title",
	esc_html__( "Post Info in Bottom", 'pitch' )
);
$panel31->addChild(
	"blog_slider_info_in_bottom_title",
	$blog_slider_info_in_bottom_title
);

$group26 = new PitchQodeGroup(
	esc_html__( "Title style", 'pitch' ),
	esc_html__( "Blog Carousel title style", 'pitch' )
);
$panel31->addChild(
	"group26",
	$group26
);

$row1 = new PitchQodeRow();
$group26->addChild(
	"row1",
	$row1
);

$blog_slider_post_info_in_bottom_title_color = new PitchQodeField(
	"colorsimple",
	"blog_slider_post_info_in_bottom_title_color",
	"",
	esc_html__( "Title Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_slider_post_info_in_bottom_title_color",
	$blog_slider_post_info_in_bottom_title_color
);

$blog_slider_post_info_in_bottom_title_hover_color = new PitchQodeField(
	"colorsimple",
	"blog_slider_post_info_in_bottom_title_hover_color",
	"",
	esc_html__( "Title Hover Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_slider_post_info_in_bottom_title_hover_color",
	$blog_slider_post_info_in_bottom_title_hover_color
);

$blog_slider_post_info_in_bottom_title_font_size = new PitchQodeField(
	"textsimple",
	"blog_slider_post_info_in_bottom_title_font_size",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_slider_post_info_in_bottom_title_font_size",
	$blog_slider_post_info_in_bottom_title_font_size
);

$blog_slider_post_info_in_bottom_title_line_height = new PitchQodeField(
	"textsimple",
	"blog_slider_post_info_in_bottom_title_line_height",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_slider_post_info_in_bottom_title_line_height",
	$blog_slider_post_info_in_bottom_title_line_height
);

$row2 = new PitchQodeRow();
$group26->addChild(
	"row2",
	$row2
);

$blog_slider_post_info_in_bottom_title_text_transform = new PitchQodeField(
	"selectblanksimple",
	"blog_slider_post_info_in_bottom_title_text_transform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row2->addChild(
	"blog_slider_post_info_in_bottom_title_text_transform",
	$blog_slider_post_info_in_bottom_title_text_transform
);

$blog_slider_post_info_in_bottom_title_font_family = new PitchQodeField(
	"fontsimple",
	"blog_slider_post_info_in_bottom_title_font_family",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"blog_slider_post_info_in_bottom_title_font_family",
	$blog_slider_post_info_in_bottom_title_font_family
);

$blog_slider_post_info_in_bottom_title_font_style = new PitchQodeField(
	"selectblanksimple",
	"blog_slider_post_info_in_bottom_title_font_style",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"blog_slider_post_info_in_bottom_title_font_style",
	$blog_slider_post_info_in_bottom_title_font_style
);

$blog_slider_post_info_in_bottom_title_font_weight = new PitchQodeField(
	"selectblanksimple",
	"blog_slider_post_info_in_bottom_title_font_weight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"blog_slider_post_info_in_bottom_title_font_weight",
	$blog_slider_post_info_in_bottom_title_font_weight
);

$row3 = new PitchQodeRow();
$group26->addChild(
	"row3",
	$row3
);

$blog_slider_post_info_in_bottom_title_letter_spacing = new PitchQodeField(
	"textsimple",
	"blog_slider_post_info_in_bottom_title_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row3->addChild(
	"blog_slider_post_info_in_bottom_title_letter_spacing",
	$blog_slider_post_info_in_bottom_title_letter_spacing
);

$group27 = new PitchQodeGroup(
	esc_html__( "Post Info style", 'pitch' ),
	esc_html__( "Blog Carousel post info style", 'pitch' )
);
$panel31->addChild(
	"group27",
	$group27
);

$row1 = new PitchQodeRow();
$group27->addChild(
	"row1",
	$row1
);

$blog_slider_post_info_in_bottom_post_info_color = new PitchQodeField(
	"colorsimple",
	"blog_slider_post_info_in_bottom_post_info_color",
	"",
	esc_html__( "Text Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_slider_post_info_in_bottom_post_info_color",
	$blog_slider_post_info_in_bottom_post_info_color
);

$blog_slider_post_info_in_bottom_post_info_link_color = new PitchQodeField(
	"colorsimple",
	"blog_slider_post_info_in_bottom_post_info_link_color",
	"",
	esc_html__( "Link Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_slider_post_info_in_bottom_post_info_link_color",
	$blog_slider_post_info_in_bottom_post_info_link_color
);

$blog_slider_post_info_in_bottom_post_info_link_hover_color = new PitchQodeField(
	"colorsimple",
	"blog_slider_post_info_in_bottom_post_info_link_hover_color",
	"",
	esc_html__( "Link Hover Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_slider_post_info_in_bottom_post_info_link_hover_color",
	$blog_slider_post_info_in_bottom_post_info_link_hover_color
);

$blog_slider_post_info_in_bottom_post_info_font_size = new PitchQodeField(
	"textsimple",
	"blog_slider_post_info_in_bottom_post_info_font_size",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_slider_post_info_in_bottom_post_info_font_size",
	$blog_slider_post_info_in_bottom_post_info_font_size
);

$row2 = new PitchQodeRow();
$group27->addChild(
	"row2",
	$row2
);

$blog_slider_post_info_in_bottom_post_info_line_height = new PitchQodeField(
	"textsimple",
	"blog_slider_post_info_in_bottom_post_info_line_height",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"blog_slider_post_info_in_bottom_post_info_line_height",
	$blog_slider_post_info_in_bottom_post_info_line_height
);

$blog_slider_post_info_in_bottom_post_info_text_transform = new PitchQodeField(
	"selectblanksimple",
	"blog_slider_post_info_in_bottom_post_info_text_transform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row2->addChild(
	"blog_slider_post_info_in_bottom_post_info_text_transform",
	$blog_slider_post_info_in_bottom_post_info_text_transform
);

$blog_slider_post_info_in_bottom_post_info_font_family = new PitchQodeField(
	"fontsimple",
	"blog_slider_post_info_in_bottom_post_info_font_family",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"blog_slider_post_info_in_bottom_post_info_font_family",
	$blog_slider_post_info_in_bottom_post_info_font_family
);

$blog_slider_post_info_in_bottom_post_info_font_style = new PitchQodeField(
	"selectblanksimple",
	"blog_slider_post_info_in_bottom_post_info_font_style",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"blog_slider_post_info_in_bottom_post_info_font_style",
	$blog_slider_post_info_in_bottom_post_info_font_style
);

$row3 = new PitchQodeRow();
$group27->addChild(
	"row3",
	$row3
);

$blog_slider_post_info_in_bottom_post_info_font_weight = new PitchQodeField(
	"selectblanksimple",
	"blog_slider_post_info_in_bottom_post_info_font_weight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row3->addChild(
	"blog_slider_post_info_in_bottom_post_info_font_weight",
	$blog_slider_post_info_in_bottom_post_info_font_weight
);

$blog_slider_post_info_in_bottom_post_info_letter_spacing = new PitchQodeField(
	"textsimple",
	"blog_slider_post_info_in_bottom_post_info_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row3->addChild(
	"blog_slider_post_info_in_bottom_post_info_letter_spacing",
	$blog_slider_post_info_in_bottom_post_info_letter_spacing
);

/*** Blog Slider ***/

$panel32 = new PitchQodePanel(
	esc_html__( "Blog Slider", 'pitch' ),
	"blog_slider_simple_simple"
);
$blogPage->addChild(
	"panel32",
	$panel32
);

$blog_slider_simple_simple_box = new PitchQodeTitle(
	"blog_slider_simple_simple_box",
	esc_html__( "Box Style", 'pitch' )
);
$panel32->addChild(
	"blog_slider_simple_simple_box",
	$blog_slider_simple_simple_box
);

$blog_slider_simple_box_back_color = new PitchQodeField(
	"color",
	"blog_slider_simple_box_back_color",
	"",
	esc_html__( "Background Color", 'pitch' ),
	esc_html__( "Choose background color", 'pitch' ),
	array(),
	array( "col_width" => 3 )
);
$panel32->addChild(
	"blog_slider_simple_box_back_color",
	$blog_slider_simple_box_back_color
);

$blog_slider_simple_box_opacity = new PitchQodeField(
	"text",
	"blog_slider_simple_box_opacity",
	"",
	esc_html__( "Background Opacity", 'pitch' ),
	esc_html__( "Choose a transparency for the shader background color (0 = fully transparent, 1 = opaque)", 'pitch' ),
	array(),
	array( "col_width" => 3 )
);
$panel32->addChild(
	"blog_slider_simple_box_opacity",
	$blog_slider_simple_box_opacity
);

$blog_slider_simple_box_padding = new PitchQodeField(
	"text",
	"blog_slider_simple_box_padding",
	"",
	esc_html__( "Box Padding", 'pitch' ),
	esc_html__( "Please insert padding in format (top right bottom left) i.e. 5px 5px 5px 5px or 5% 5% 5% 5%", 'pitch' ),
	array(),
	array( "col_width" => 3 )
);
$panel32->addChild(
	"blog_slider_simple_box_padding",
	$blog_slider_simple_box_padding
);

$group_box_border = new PitchQodeGroup(
	esc_html__( "Box Border Style", 'pitch' ),
	esc_html__( "Define style for box border", 'pitch' )
);
$panel32->addChild(
	"group_box_border",
	$group_box_border
);

$row1 = new PitchQodeRow();
$group_box_border->addChild(
	"row1",
	$row1
);

$blog_slider_simple_box_border_color = new PitchQodeField(
	"colorsimple",
	"blog_slider_simple_box_border_color",
	"",
	esc_html__( "Color", 'pitch' ),
	esc_html__( "Choose border color", 'pitch' )
);
$row1->addChild(
	"blog_slider_simple_box_border_color",
	$blog_slider_simple_box_border_color
);

$blog_slider_simple_box_border_width = new PitchQodeField(
	"textsimple",
	"blog_slider_simple_box_border_width",
	"",
	esc_html__( "Width", 'pitch' ),
	esc_html__( "Choose border width", 'pitch' )
);
$row1->addChild(
	"blog_slider_simple_box_border_width",
	$blog_slider_simple_box_border_width
);

$blog_slider_simple_simple_spacing = new PitchQodeTitle(
	"blog_slider_simple_simple_spacing",
	esc_html__( "Blog simple slider spacing", 'pitch' )
);
$panel32->addChild(
	"blog_slider_simple_simple_spacing",
	$blog_slider_simple_simple_spacing
);

$blog_slider_simple_info_margin_top = new PitchQodeField(
	"text",
	"blog_slider_simple_info_margin_top",
	"",
	esc_html__( "Post Info Margin Top (px)", 'pitch' ),
	esc_html__( "Define post info margin top", 'pitch' ),
	array(),
	array( "col_width" => 3 )
);
$panel32->addChild(
	"blog_slider_simple_info_margin_top",
	$blog_slider_simple_info_margin_top
);

$blog_slider_simple_read_more_margin_top = new PitchQodeField(
	"text",
	"blog_slider_simple_read_more_margin_top",
	"",
	esc_html__( "Read More Margin Top (px)", 'pitch' ),
	esc_html__( "Define read more margin top", 'pitch' ),
	array(),
	array( "col_width" => 3 )
);
$panel32->addChild(
	"blog_slider_simple_read_more_margin_top",
	$blog_slider_simple_read_more_margin_top
);

$blog_slider_simple_simple_text = new PitchQodeTitle(
	"blog_slider_simple_simple_text",
	esc_html__( "Post Text Style", 'pitch' )
);
$panel32->addChild(
	"blog_slider_simple_simple_text",
	$blog_slider_simple_simple_text
);

$group_title = new PitchQodeGroup(
	esc_html__( "Title style", 'pitch' ),
	esc_html__( "Blog slider title style", 'pitch' )
);
$panel32->addChild(
	"group_title",
	$group_title
);

$row1 = new PitchQodeRow();
$group_title->addChild(
	"row1",
	$row1
);

$blog_slider_simple_title_color = new PitchQodeField(
	"colorsimple",
	"blog_slider_simple_title_color",
	"",
	esc_html__( "Title Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_slider_simple_title_color",
	$blog_slider_simple_title_color
);

$blog_slider_simple_title_hover_color = new PitchQodeField(
	"colorsimple",
	"blog_slider_simple_title_hover_color",
	"",
	esc_html__( "Title Hover Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_slider_simple_title_hover_color",
	$blog_slider_simple_title_hover_color
);

$blog_slider_simple_title_font_size = new PitchQodeField(
	"textsimple",
	"blog_slider_simple_title_font_size",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_slider_simple_title_font_size",
	$blog_slider_simple_title_font_size
);

$blog_slider_simple_title_line_height = new PitchQodeField(
	"textsimple",
	"blog_slider_simple_title_line_height",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_slider_simple_title_line_height",
	$blog_slider_simple_title_line_height
);

$row2 = new PitchQodeRow();
$group_title->addChild(
	"row2",
	$row2
);

$blog_slider_simple_title_text_transform = new PitchQodeField(
	"selectblanksimple",
	"blog_slider_simple_title_text_transform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row2->addChild(
	"blog_slider_simple_title_text_transform",
	$blog_slider_simple_title_text_transform
);

$blog_slider_simple_title_font_family = new PitchQodeField(
	"fontsimple",
	"blog_slider_simple_title_font_family",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"blog_slider_simple_title_font_family",
	$blog_slider_simple_title_font_family
);

$blog_slider_simple_title_font_style = new PitchQodeField(
	"selectblanksimple",
	"blog_slider_simple_title_font_style",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"blog_slider_simple_title_font_style",
	$blog_slider_simple_title_font_style
);

$blog_slider_simple_title_font_weight = new PitchQodeField(
	"selectblanksimple",
	"blog_slider_simple_title_font_weight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"blog_slider_simple_title_font_weight",
	$blog_slider_simple_title_font_weight
);

$row3 = new PitchQodeRow();
$group_title->addChild(
	"row3",
	$row3
);

$blog_slider_simple_title_letter_spacing = new PitchQodeField(
	"textsimple",
	"blog_slider_simple_title_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row3->addChild(
	"blog_slider_simple_title_letter_spacing",
	$blog_slider_simple_title_letter_spacing
);

$group_post_info = new PitchQodeGroup(
	esc_html__( "Post Info Style", 'pitch' ),
	esc_html__( "Blog slider post info style", 'pitch' )
);
$panel32->addChild(
	"group_post_info",
	$group_post_info
);

$row1 = new PitchQodeRow();
$group_post_info->addChild(
	"row1",
	$row1
);

$blog_slider_simple_info_color = new PitchQodeField(
	"colorsimple",
	"blog_slider_simple_info_color",
	"",
	esc_html__( "Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_slider_simple_info_color",
	$blog_slider_simple_info_color
);

$blog_slider_simple_info_link_color = new PitchQodeField(
	"colorsimple",
	"blog_slider_simple_info_link_color",
	"",
	esc_html__( "Link Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_slider_simple_info_link_color",
	$blog_slider_simple_info_link_color
);

$blog_slider_simple_info_hover_color = new PitchQodeField(
	"colorsimple",
	"blog_slider_simple_info_hover_color",
	"",
	esc_html__( "Link Hover Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_slider_simple_info_hover_color",
	$blog_slider_simple_info_hover_color
);

$blog_slider_simple_info_font_size = new PitchQodeField(
	"textsimple",
	"blog_slider_simple_info_font_size",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_slider_simple_info_font_size",
	$blog_slider_simple_info_font_size
);

$row2 = new PitchQodeRow();
$group_post_info->addChild(
	"row2",
	$row2
);

$blog_slider_simple_info_line_height = new PitchQodeField(
	"textsimple",
	"blog_slider_simple_info_line_height",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"blog_slider_simple_info_line_height",
	$blog_slider_simple_info_line_height
);

$blog_slider_simple_info_text_transform = new PitchQodeField(
	"selectblanksimple",
	"blog_slider_simple_info_text_transform",
	"",
	esc_html__( "Text Transform", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'text_transform' )
);
$row2->addChild(
	"blog_slider_simple_info_text_transform",
	$blog_slider_simple_info_text_transform
);

$blog_slider_simple_info_font_family = new PitchQodeField(
	"fontsimple",
	"blog_slider_simple_info_font_family",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"blog_slider_simple_info_font_family",
	$blog_slider_simple_info_font_family
);

$blog_slider_simple_info_font_style = new PitchQodeField(
	"selectblanksimple",
	"blog_slider_simple_info_font_style",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"blog_slider_simple_info_font_style",
	$blog_slider_simple_info_font_style
);

$row3 = new PitchQodeRow();
$group_post_info->addChild(
	"row3",
	$row3
);

$blog_slider_simple_info_font_weight = new PitchQodeField(
	"selectblanksimple",
	"blog_slider_simple_info_font_weight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row3->addChild(
	"blog_slider_simple_info_font_weight",
	$blog_slider_simple_info_font_weight
);

$blog_slider_simple_info_letter_spacing = new PitchQodeField(
	"textsimple",
	"blog_slider_simple_info_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row3->addChild(
	"blog_slider_simple_info_letter_spacing",
	$blog_slider_simple_info_letter_spacing
);

$group_day = new PitchQodeGroup(
	esc_html__( "Date Day Style", 'pitch' ),
	esc_html__( "Define style for date day for Info in Bottom type", 'pitch' )
);
$panel32->addChild(
	"group_day",
	$group_day
);

$row1 = new PitchQodeRow();
$group_day->addChild(
	"row1",
	$row1
);

$blog_slider_simple_day_color = new PitchQodeField(
	"colorsimple",
	"blog_slider_simple_day_color",
	"",
	esc_html__( "Color", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_slider_simple_day_color",
	$blog_slider_simple_day_color
);

$blog_slider_simple_day_font_size = new PitchQodeField(
	"textsimple",
	"blog_slider_simple_day_font_size",
	"",
	esc_html__( "Font Size (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_slider_simple_day_font_size",
	$blog_slider_simple_day_font_size
);

$blog_slider_simple_day_line_height = new PitchQodeField(
	"textsimple",
	"blog_slider_simple_day_line_height",
	"",
	esc_html__( "Line Height (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_slider_simple_day_line_height",
	$blog_slider_simple_day_line_height
);

$blog_slider_simple_day_font_family = new PitchQodeField(
	"fontsimple",
	"blog_slider_simple_day_font_family",
	"-1",
	esc_html__( "Font Family", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"blog_slider_simple_day_font_family",
	$blog_slider_simple_day_font_family
);

$row2 = new PitchQodeRow();
$group_day->addChild(
	"row2",
	$row2
);

$blog_slider_simple_day_font_style = new PitchQodeField(
	"selectblanksimple",
	"blog_slider_simple_day_font_style",
	"",
	esc_html__( "Font Style", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_style' )
);
$row2->addChild(
	"blog_slider_simple_day_font_style",
	$blog_slider_simple_day_font_style
);

$blog_slider_simple_day_font_weight = new PitchQodeField(
	"selectblanksimple",
	"blog_slider_simple_day_font_weight",
	"",
	esc_html__( "Font Weight", 'pitch' ),
	esc_html__( "This is some description", 'pitch' ),
	pitch_qode_get_options_value_by_name( 'font_weight' )
);
$row2->addChild(
	"blog_slider_simple_day_font_weight",
	$blog_slider_simple_day_font_weight
);

$blog_slider_simple_day_letter_spacing = new PitchQodeField(
	"textsimple",
	"blog_slider_simple_day_letter_spacing",
	"",
	esc_html__( "Letter Spacing (px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row2->addChild(
	"blog_slider_simple_day_letter_spacing",
	$blog_slider_simple_day_letter_spacing
);
<?php

$socialPage = new QodePitchAdminPage(
	"12",
	esc_html__( "Social", 'pitch' ),
	"fa fa-share-alt"
);
$pitch_qode_framework->qodeOptions->addAdminPage(
	"socialPage",
	$socialPage
);

// Social sidebar

$panel1 = new PitchQodePanel(
	esc_html__( "Social Sidebar", 'pitch' ),
	"social_sidebar"
);
$socialPage->addChild(
	"panel1",
	$panel1
);

$enable_social_sidebar = new PitchQodeField(
	"yesno",
	"enable_social_sidebar",
	"no",
	esc_html__( "Enable Social Sidebar", 'pitch' ),
	esc_html__( "Enabling this option will allow social sidebar", 'pitch' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_enable_social_sidebar_container"
	)
);
$panel1->addChild(
	"enable_social_sidebar",
	$enable_social_sidebar
);

$enable_social_sidebar_container = new PitchQodeContainer(
	"enable_social_sidebar_container",
	"enable_social_sidebar",
	"no"
);
$panel1->addChild(
	"enable_social_sidebar_container",
	$enable_social_sidebar_container
);

$social_sidebar_icon_pack = new PitchQodeField(
	'select',
	'social_sidebar_icon_pack',
	'font_elegant',
	esc_html__( 'Social Sidebar Icon Pack', 'pitch' ),
	'',
	pitch_qode_icon_collections()->getIconCollectionsExclude(
		array( 'linea_icons', 'simple_line_icons', 'dripicons' )
	)
);
$enable_social_sidebar_container->addChild(
	'social_sidebar_icon_pack',
	$social_sidebar_icon_pack
);

$social_sidebar_icon_style = new PitchQodeField(
	"select",
	"social_sidebar_icon_style",
	"circle",
	esc_html__( "Icon Shape Type", 'pitch' ),
	esc_html__( "Specify Icon Shape Type", 'pitch' ),
	array(
		"circle" => esc_html__( "Circle", 'pitch' ),
		"square" => esc_html__( "Square", 'pitch' ),
		"normal" => esc_html__( "Normal", 'pitch' ),
	),
	array(
		"dependence" => true,
		"hide"       => array(
			"normal" => "#qodef_enable_social_sidebar_box_type_container"
		),
		"show"       => array(
			"circle" => "#qodef_enable_social_sidebar_box_type_container",
			"square" => "#qodef_enable_social_sidebar_box_type_container"
		)
	)
);
$enable_social_sidebar_container->addChild(
	"social_sidebar_icon_style",
	$social_sidebar_icon_style
);

$social_sidebar_icon_size = new PitchQodeField(
	"text",
	"social_sidebar_icon_size",
	"",
	esc_html__( "Icon Size", 'pitch' ),
	esc_html__( "Set size for icon", 'pitch' ),
	array(),
	array( "col_width" => 3 )
);
$enable_social_sidebar_container->addChild(
	"social_sidebar_icon_size",
	$social_sidebar_icon_size
);

$social_sidebar_icon_shape_size = new PitchQodeField(
	"text",
	"social_sidebar_icon_shape_size",
	"",
	esc_html__( "Shape Size", 'pitch' ),
	esc_html__( "Set size for icon shape", 'pitch' ),
	array(),
	array( "col_width" => 3 )
);
$enable_social_sidebar_container->addChild(
	"social_sidebar_icon_shape_size",
	$social_sidebar_icon_shape_size
);

$social_sidebar_icon_color = new PitchQodeField(
	"color",
	"social_sidebar_icon_color",
	"",
	esc_html__( "Color", 'pitch' ),
	esc_html__( "Set color for Icon", 'pitch' )
);
$enable_social_sidebar_container->addChild(
	"social_sidebar_icon_color",
	$social_sidebar_icon_color
);

$social_sidebar_icon_hover_color = new PitchQodeField(
	"color",
	"social_sidebar_icon_hover_color",
	"",
	esc_html__( "Hover Color", 'pitch' ),
	esc_html__( "Set color for Icon", 'pitch' )
);
$enable_social_sidebar_container->addChild(
	"social_sidebar_icon_hover_color",
	$social_sidebar_icon_hover_color
);

$group1 = new PitchQodeGroup(
	esc_html__( "Position of sidebar", 'pitch' ),
	esc_html__( "Define position for Social Sidebar. Place values with 'px' or '%'", 'pitch' )
);
$enable_social_sidebar_container->addChild(
	"group1",
	$group1
);
$row1 = new PitchQodeRow();
$group1->addChild(
	"row1",
	$row1
);

$social_sidebar_icon_position_top = new PitchQodeField(
	"textsimple",
	"social_sidebar_icon_position_top",
	"",
	esc_html__( "From top (default 20%)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"social_sidebar_icon_position_top",
	$social_sidebar_icon_position_top
);
$social_sidebar_icon_position_right = new PitchQodeField(
	"textsimple",
	"social_sidebar_icon_position_right",
	"",
	esc_html__( "From right (default 30px)", 'pitch' ),
	esc_html__( "This is some description", 'pitch' )
);
$row1->addChild(
	"social_sidebar_icon_position_right",
	$social_sidebar_icon_position_right
);

$social_sidebar_icon_space_size = new PitchQodeField(
	"text",
	"social_sidebar_icon_space_size",
	"",
	esc_html__( "Space Between Icons Size (px)", 'pitch' ),
	esc_html__( "Set size for space between icons. Default value is 2px.", 'pitch' ),
	array(),
	array( "col_width" => 3 )
);
$enable_social_sidebar_container->addChild(
	"social_sidebar_icon_space_size",
	$social_sidebar_icon_space_size
);

$enable_social_sidebar_box_type_container = new PitchQodeContainer(
	"enable_social_sidebar_box_type_container",
	"social_sidebar_icon_style",
	"normal"
);
$enable_social_sidebar_container->addChild(
	"enable_social_sidebar_box_type_container",
	$enable_social_sidebar_box_type_container
);

$social_sidebar_icon_background_color = new PitchQodeField(
	"color",
	"social_sidebar_icon_background_color",
	"",
	esc_html__( "Background Color", 'pitch' ),
	esc_html__( "Set color for background", 'pitch' )
);
$enable_social_sidebar_box_type_container->addChild(
	"social_sidebar_icon_background_color",
	$social_sidebar_icon_background_color
);

$social_sidebar_icon_background_hover_color = new PitchQodeField(
	"color",
	"social_sidebar_icon_background_hover_color",
	"",
	esc_html__( "Background Hover Color", 'pitch' ),
	esc_html__( "Set color for background hover", 'pitch' )
);
$enable_social_sidebar_box_type_container->addChild(
	"social_sidebar_icon_background_hover_color",
	$social_sidebar_icon_background_hover_color
);

$social_sidebar_icon_border_color = new PitchQodeField(
	"color",
	"social_sidebar_icon_border_color",
	"",
	esc_html__( "Border Color", 'pitch' ),
	esc_html__( "Set color for Border", 'pitch' )
);
$enable_social_sidebar_box_type_container->addChild(
	"social_sidebar_icon_border_color",
	$social_sidebar_icon_border_color
);

$social_sidebar_icon_border_hover_color = new PitchQodeField(
	"color",
	"social_sidebar_icon_border_hover_color",
	"",
	esc_html__( "Border Hover Color", 'pitch' ),
	esc_html__( "Set color for border hover", 'pitch' )
);
$enable_social_sidebar_box_type_container->addChild(
	"social_sidebar_icon_border_hover_color",
	$social_sidebar_icon_border_hover_color
);

$social_sidebar_icon_border_width = new PitchQodeField(
	"text",
	"social_sidebar_icon_border_width",
	"",
	esc_html__( "Border Size", 'pitch' ),
	esc_html__( "Set size for border", 'pitch' ),
	array(),
	array( "col_width" => 3 )
);
$enable_social_sidebar_box_type_container->addChild(
	"social_sidebar_icon_border_width",
	$social_sidebar_icon_border_width
);

// Facebook sidebar icon

$social_sidebar_facebook_icon = new PitchQodeField(
	"yesno",
	"social_sidebar_facebook_icon",
	"no",
	esc_html__( "Enable Facebook icon", 'pitch' ),
	esc_html__( "Enabling this option will allow Facebook icon on your Social Sidebar", 'pitch' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_enable_social_sidebar_facebook_icon_container"
	)
);
$enable_social_sidebar_container->addChild(
	"social_sidebar_facebook_icon",
	$social_sidebar_facebook_icon
);

$enable_social_sidebar_facebook_icon_container = new PitchQodeContainer(
	"enable_social_sidebar_facebook_icon_container",
	"social_sidebar_facebook_icon",
	"no"
);
$enable_social_sidebar_container->addChild(
	"enable_social_sidebar_facebook_icon_container",
	$enable_social_sidebar_facebook_icon_container
);
$social_sidebar_facebook_icon_link = new PitchQodeField(
	"text",
	"social_sidebar_facebook_icon_link",
	"",
	esc_html__( "Link", 'pitch' ),
	esc_html__( "Set Facebook link.", 'pitch' ),
	array(),
	array( "col_width" => 3 )
);
$enable_social_sidebar_facebook_icon_container->addChild(
	"social_sidebar_facebook_icon_link",
	$social_sidebar_facebook_icon_link
);

// Twitter sidebar icon

$social_sidebar_twitter_icon = new PitchQodeField(
	"yesno",
	"social_sidebar_twitter_icon",
	"no",
	esc_html__( "Enable Twitter icon", 'pitch' ),
	esc_html__( "Enabling this option will allow Twitter icon on your Social Sidebar", 'pitch' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_enable_social_sidebar_twitter_icon_container"
	)
);
$enable_social_sidebar_container->addChild(
	"social_sidebar_twitter_icon",
	$social_sidebar_twitter_icon
);

$enable_social_sidebar_twitter_icon_container = new PitchQodeContainer(
	"enable_social_sidebar_twitter_icon_container",
	"social_sidebar_twitter_icon",
	"no"
);
$enable_social_sidebar_container->addChild(
	"enable_social_sidebar_twitter_icon_container",
	$enable_social_sidebar_twitter_icon_container
);
$social_sidebar_twitter_icon_link = new PitchQodeField(
	"text",
	"social_sidebar_twitter_icon_link",
	"",
	esc_html__( "Link", 'pitch' ),
	esc_html__( "Set Twitter link.", 'pitch' ),
	array(),
	array( "col_width" => 3 )
);
$enable_social_sidebar_twitter_icon_container->addChild(
	"social_sidebar_twitter_icon_link",
	$social_sidebar_twitter_icon_link
);

// Google Plus sidebar icon

$social_sidebar_google_plus_icon = new PitchQodeField(
	"yesno",
	"social_sidebar_google_plus_icon",
	"no",
	esc_html__( "Enable Google Plus icon", 'pitch' ),
	esc_html__( "Enabling this option will allow Google Plus icon on your Social Sidebar", 'pitch' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_enable_social_sidebar_google_plus_icon_container"
	)
);
$enable_social_sidebar_container->addChild(
	"social_sidebar_google_plus_icon",
	$social_sidebar_google_plus_icon
);

$enable_social_sidebar_google_plus_icon_container = new PitchQodeContainer(
	"enable_social_sidebar_google_plus_icon_container",
	"social_sidebar_google_plus_icon",
	"no"
);
$enable_social_sidebar_container->addChild(
	"enable_social_sidebar_google_plus_icon_container",
	$enable_social_sidebar_google_plus_icon_container
);
$social_sidebar_google_plus_icon_link = new PitchQodeField(
	"text",
	"social_sidebar_google_plus_icon_link",
	"",
	esc_html__( "Link", 'pitch' ),
	esc_html__( "Set Google Plus link.", 'pitch' ),
	array(),
	array( "col_width" => 3 )
);
$enable_social_sidebar_google_plus_icon_container->addChild(
	"social_sidebar_google_plus_icon_link",
	$social_sidebar_google_plus_icon_link
);

// LinkedIn sidebar icon

$social_sidebar_linkedIn_icon = new PitchQodeField(
	"yesno",
	"social_sidebar_linkedIn_icon",
	"no",
	esc_html__( "Enable LinkedIn icon", 'pitch' ),
	esc_html__( "Enabling this option will allow LinkedIn icon on your Social Sidebar", 'pitch' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_enable_social_sidebar_linkedIn_icon_container"
	)
);
$enable_social_sidebar_container->addChild(
	"social_sidebar_linkedIn_icon",
	$social_sidebar_linkedIn_icon
);

$enable_social_sidebar_linkedIn_icon_container = new PitchQodeContainer(
	"enable_social_sidebar_linkedIn_icon_container",
	"social_sidebar_linkedIn_icon",
	"no"
);
$enable_social_sidebar_container->addChild(
	"enable_social_sidebar_linkedIn_icon_container",
	$enable_social_sidebar_linkedIn_icon_container
);
$social_sidebar_linkedIn_icon_link = new PitchQodeField(
	"text",
	"social_sidebar_linkedIn_icon_link",
	"",
	esc_html__( "Link", 'pitch' ),
	esc_html__( "Set LinkedIn link.", 'pitch' ),
	array(),
	array( "col_width" => 3 )
);
$enable_social_sidebar_linkedIn_icon_container->addChild(
	"social_sidebar_linkedIn_icon_link",
	$social_sidebar_linkedIn_icon_link
);

// Tumblr sidebar icon

$social_sidebar_tumblr_icon = new PitchQodeField(
	"yesno",
	"social_sidebar_tumblr_icon",
	"no",
	esc_html__( "Enable Tumblr icon", 'pitch' ),
	esc_html__( "Enabling this option will allow Tumblr icon on your Social Sidebar", 'pitch' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_enable_social_sidebar_tumblr_icon_container"
	)
);
$enable_social_sidebar_container->addChild(
	"social_sidebar_tumblr_icon",
	$social_sidebar_tumblr_icon
);

$enable_social_sidebar_tumblr_icon_container = new PitchQodeContainer(
	"enable_social_sidebar_tumblr_icon_container",
	"social_sidebar_tumblr_icon",
	"no"
);
$enable_social_sidebar_container->addChild(
	"enable_social_sidebar_tumblr_icon_container",
	$enable_social_sidebar_tumblr_icon_container
);
$social_sidebar_tumblr_icon_link = new PitchQodeField(
	"text",
	"social_sidebar_tumblr_icon_link",
	"",
	esc_html__( "Link", 'pitch' ),
	esc_html__( "Set Tumblr link.", 'pitch' ),
	array(),
	array( "col_width" => 3 )
);
$enable_social_sidebar_tumblr_icon_container->addChild(
	"social_sidebar_tumblr_icon_link",
	$social_sidebar_tumblr_icon_link
);

// Pinterest sidebar icon

$social_sidebar_pinterest_icon = new PitchQodeField(
	"yesno",
	"social_sidebar_pinterest_icon",
	"no",
	esc_html__( "Enable Pinterest icon", 'pitch' ),
	esc_html__( "Enabling this option will allow Pinterest icon on your Social Sidebar", 'pitch' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_enable_social_sidebar_pinterest_icon_container"
	)
);
$enable_social_sidebar_container->addChild(
	"social_sidebar_pinterest_icon",
	$social_sidebar_pinterest_icon
);

$enable_social_sidebar_pinterest_icon_container = new PitchQodeContainer(
	"enable_social_sidebar_pinterest_icon_container",
	"social_sidebar_pinterest_icon",
	"no"
);
$enable_social_sidebar_container->addChild(
	"enable_social_sidebar_pinterest_icon_container",
	$enable_social_sidebar_pinterest_icon_container
);
$social_sidebar_pinterest_icon_link = new PitchQodeField(
	"text",
	"social_sidebar_pinterest_icon_link",
	"",
	esc_html__( "Link", 'pitch' ),
	esc_html__( "Set Pinterest link.", 'pitch' ),
	array(),
	array( "col_width" => 3 )
);
$enable_social_sidebar_pinterest_icon_container->addChild(
	"social_sidebar_pinterest_icon_link",
	$social_sidebar_pinterest_icon_link
);

// VK sidebar icon

$social_sidebar_vk_icon = new PitchQodeField(
	"yesno",
	"social_sidebar_vk_icon",
	"no",
	esc_html__( "Enable VK icon", 'pitch' ),
	esc_html__( "Enabling this option will allow VK icon on your Social Sidebar", 'pitch' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_enable_social_sidebar_vk_icon_container"
	)
);
$enable_social_sidebar_container->addChild(
	"social_sidebar_vk_icon",
	$social_sidebar_vk_icon
);

$enable_social_sidebar_vk_icon_container = new PitchQodeContainer(
	"enable_social_sidebar_vk_icon_container",
	"social_sidebar_vk_icon",
	"no"
);
$enable_social_sidebar_container->addChild(
	"enable_social_sidebar_vk_icon_container",
	$enable_social_sidebar_vk_icon_container
);
$social_sidebar_vk_icon_link = new PitchQodeField(
	"text",
	"social_sidebar_vk_icon_link",
	"",
	esc_html__( "Link", 'pitch' ),
	esc_html__( "Set VK link.", 'pitch' ),
	array(),
	array( "col_width" => 3 )
);
$enable_social_sidebar_vk_icon_container->addChild(
	"social_sidebar_vk_icon_link",
	$social_sidebar_vk_icon_link
);

//Enable Social Share

$panel2 = new PitchQodePanel(
	esc_html__( "Enable Social Share", 'pitch' ),
	"social_sharing_panel"
);
$socialPage->addChild(
	"panel2",
	$panel2
);

$enable_social_share = new PitchQodeField(
	"yesno",
	"enable_social_share",
	"no",
	esc_html__( "Enable Social Share", 'pitch' ),
	esc_html__( "Enabling this option will allow social share on networks of your choice", 'pitch' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_social_networks_panel,#qodef_show_social_share_panel"
	)
);
$panel2->addChild(
	"enable_social_share",
	$enable_social_share
);

//Show Social Share

$panel3 = new PitchQodePanel(
	esc_html__( "Show Social Share On", 'pitch' ),
	"show_social_share_panel",
	"enable_social_share",
	"no"
);
$socialPage->addChild(
	"panel3",
	$panel3
);

$post_types_names_post = new PitchQodeField(
	"flagpost",
	"post_types_names_post",
	"",
	esc_html__( "Posts", 'pitch' ),
	esc_html__( "Show Social Share on Blog Posts", 'pitch' )
);
$panel3->addChild(
	"post_types_names_post",
	$post_types_names_post
);

$post_types_names_page = new PitchQodeField(
	"flagpage",
	"post_types_names_page",
	"",
	esc_html__( "Pages", 'pitch' ),
	esc_html__( "Show Social Share on Pages", 'pitch' )
);
$panel3->addChild(
	"post_types_names_page",
	$post_types_names_page
);

$post_types_names_attachment = new PitchQodeField(
	"flagmedia",
	"post_types_names_attachment",
	"",
	esc_html__( "Media", 'pitch' ),
	esc_html__( "Show Social Share for Images and Videos", 'pitch' )
);
$panel3->addChild(
	"post_types_names_attachment",
	$post_types_names_attachment
);

$post_types_names_portfolio_page = new PitchQodeField(
	"flagportfolio",
	"post_types_names_portfolio_page",
	"",
	esc_html__( "Portfolio Item", 'pitch' ),
	esc_html__( "Show Social Share for Portfolio Items", 'pitch' )
);
$panel3->addChild(
	"post_types_names_portfolio_page",
	$post_types_names_portfolio_page
);

if ( pitch_qode_is_woocommerce_installed() ) {
	$post_types_names_product = new PitchQodeField(
		"flagproduct",
		"post_types_names_product",
		"",
		esc_html__( "Product", 'pitch' ),
		esc_html__( "Show Social Share for Product Items", 'pitch' )
	);
	$panel3->addChild(
		"post_types_names_product",
		$post_types_names_product
	);
}

//Social Share Networks

$panel4 = new PitchQodePanel(
	esc_html__( "Social Networks", 'pitch' ),
	"social_networks_panel",
	"enable_social_share",
	"no"
);
$socialPage->addChild(
	"panel4",
	$panel4
);

//Facebook

$facebook_subtitle = new PitchQodeTitle(
	"facebook_subtitle",
	esc_html__( "Share on Facebook", 'pitch' )
);
$panel4->addChild(
	"facebook_subtitle",
	$facebook_subtitle
);

$enable_facebook_share = new PitchQodeField(
	"yesno",
	"enable_facebook_share",
	"no",
	esc_html__( "Enable Share", 'pitch' ),
	esc_html__( "Enabling this option will allow sharing via Facebook", 'pitch' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_enable_facebook_share_container"
	)
);
$panel4->addChild(
	"enable_facebook_share",
	$enable_facebook_share
);

$enable_facebook_share_container = new PitchQodeContainer(
	"enable_facebook_share_container",
	"enable_facebook_share",
	"no"
);
$panel4->addChild(
	"enable_facebook_share_container",
	$enable_facebook_share_container
);

$facebook_icon = new PitchQodeField(
	"image",
	"facebook_icon",
	"",
	esc_html__( "Upload Icon", 'pitch' ),
	""
);
$enable_facebook_share_container->addChild(
	"facebook_icon",
	$facebook_icon
);

//Twitter
$twitter_subtitle = new PitchQodeTitle(
	"twitter_subtitle",
	esc_html__( "Share on Twitter", 'pitch' )
);
$panel4->addChild(
	"twitter_subtitle",
	$twitter_subtitle
);

$enable_twitter_share = new PitchQodeField(
	"yesno",
	"enable_twitter_share",
	"no",
	esc_html__( "Enable Share", 'pitch' ),
	esc_html__( "Enabling this option will allow sharing via Twitter", 'pitch' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_enable_twitter_share_container"
	)
);
$panel4->addChild(
	"enable_twitter_share",
	$enable_twitter_share
);
$enable_twitter_share_container = new PitchQodeContainer(
	"enable_twitter_share_container",
	"enable_twitter_share",
	"no"
);
$panel4->addChild(
	"enable_twitter_share_container",
	$enable_twitter_share_container
);
$twitter_icon = new PitchQodeField(
	"image",
	"twitter_icon",
	"",
	esc_html__( "Upload Icon", 'pitch' ),
	""
);
$enable_twitter_share_container->addChild(
	"twitter_icon",
	$twitter_icon
);
$twitter_via = new PitchQodeField(
	"text",
	"twitter_via",
	"",
	esc_html__( "Via", 'pitch' ),
	""
);
$enable_twitter_share_container->addChild(
	"twitter_via",
	$twitter_via
);

//Google Plus

$google_plus_subtitle = new PitchQodeTitle(
	"google_plus_subtitle",
	esc_html__( "Share on Google Plus", 'pitch' )
);
$panel4->addChild(
	"google_plus_subtitle",
	$google_plus_subtitle
);

$enable_google_plus = new PitchQodeField(
	"yesno",
	"enable_google_plus",
	"no",
	esc_html__( "Enable Share", 'pitch' ),
	esc_html__( "Enabling this option will allow sharing via Google Plus", 'pitch' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_enable_google_plus_container"
	)
);
$panel4->addChild(
	"enable_google_plus",
	$enable_google_plus
);
$enable_google_plus_container = new PitchQodeContainer(
	"enable_google_plus_container",
	"enable_google_plus",
	"no"
);
$panel4->addChild(
	"enable_google_plus_container",
	$enable_google_plus_container
);
$google_plus_icon = new PitchQodeField(
	"image",
	"google_plus_icon",
	"",
	esc_html__( "Upload Icon", 'pitch' ),
	""
);
$enable_google_plus_container->addChild(
	"google_plus_icon",
	$google_plus_icon
);

//LinkedIn

$linkedin_subtitle = new PitchQodeTitle(
	"linkedin_subtitle",
	esc_html__( "Share on LinkedIn", 'pitch' )
);
$panel4->addChild(
	"linkedin_subtitle",
	$linkedin_subtitle
);

$enable_linkedin = new PitchQodeField(
	"yesno",
	"enable_linkedin",
	"no",
	esc_html__( "Enable Share", 'pitch' ),
	esc_html__( "Enabling this option will allow sharing via LinkedIn", 'pitch' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_enable_linkedin_container"
	)
);
$panel4->addChild(
	"enable_linkedin",
	$enable_linkedin
);
$enable_linkedin_container = new PitchQodeContainer(
	"enable_linkedin_container",
	"enable_linkedin",
	"no"
);
$panel4->addChild(
	"enable_linkedin_container",
	$enable_linkedin_container
);
$linkedin_icon = new PitchQodeField(
	"image",
	"linkedin_icon",
	"",
	esc_html__( "Upload Icon", 'pitch' ),
	""
);
$enable_linkedin_container->addChild(
	"linkedin_icon",
	$linkedin_icon
);

//Tumblr

$tumblr_subtitle = new PitchQodeTitle(
	"tumblr_subtitle",
	esc_html__( "Share on Tumblr", 'pitch' )
);
$panel4->addChild(
	"tumblr_subtitle",
	$tumblr_subtitle
);

$enable_tumblr = new PitchQodeField(
	"yesno",
	"enable_tumblr",
	"no",
	esc_html__( "Enable Share", 'pitch' ),
	esc_html__( "Enabling this option will allow sharing via Tumblr", 'pitch' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_enable_tumblr_container"
	)
);
$panel4->addChild(
	"enable_tumblr",
	$enable_tumblr
);

$enable_tumblr_container = new PitchQodeContainer(
	"enable_tumblr_container",
	"enable_tumblr",
	"no"
);
$panel4->addChild(
	"enable_tumblr_container",
	$enable_tumblr_container
);

$tumblr_icon = new PitchQodeField(
	"image",
	"tumblr_icon",
	"",
	esc_html__( "Upload Icon", 'pitch' ),
	""
);
$enable_tumblr_container->addChild(
	"tumblr_icon",
	$tumblr_icon
);

// Pinterest

$pinterest_subtitle = new PitchQodeTitle(
	"pinterest_subtitle",
	esc_html__( "Share on Pinterest", 'pitch' )
);
$panel4->addChild(
	"pinterest_subtitle",
	$pinterest_subtitle
);

$enable_pinterest = new PitchQodeField(
	"yesno",
	"enable_pinterest",
	"no",
	esc_html__( "Enable Share", 'pitch' ),
	esc_html__( "Enabling this option will allow sharing via Pinterest", 'pitch' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_enable_pinterest_container"
	)
);
$panel4->addChild(
	"enable_pinterest",
	$enable_pinterest
);
$enable_pinterest_container = new PitchQodeContainer(
	"enable_pinterest_container",
	"enable_pinterest",
	"no"
);
$panel4->addChild(
	"enable_pinterest_container",
	$enable_pinterest_container
);
$pinterest_icon = new PitchQodeField(
	"image",
	"pinterest_icon",
	"",
	esc_html__( "Upload Icon", 'pitch' ),
	""
);
$enable_pinterest_container->addChild(
	"pinterest_icon",
	$pinterest_icon
);

//VK

$vk_subtitle = new PitchQodeTitle(
	"vk_subtitle",
	esc_html__( "Share on VK", 'pitch' )
);
$panel4->addChild(
	"vk_subtitle",
	$vk_subtitle
);

$enable_vk = new PitchQodeField(
	"yesno",
	"enable_vk",
	"no",
	esc_html__( "Enable Share", 'pitch' ),
	esc_html__( "Enabling this option will allow sharing via VK", 'pitch' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_enable_vk_container"
	)
);
$panel4->addChild(
	"enable_vk",
	$enable_vk
);
$enable_vk_container = new PitchQodeContainer(
	"enable_vk_container",
	"enable_vk",
	"no"
);
$panel4->addChild(
	"enable_vk_container",
	$enable_vk_container
);
$vk_icon = new PitchQodeField(
	"image",
	"vk_icon",
	"",
	esc_html__( "Upload Icon", 'pitch' ),
	""
);
$enable_vk_container->addChild(
	"vk_icon",
	$vk_icon
);

//Twitter pannel

$twitter_panel = new PitchQodePanel(
	esc_html__( 'Twitter', 'pitch' ),
	'twitter_panel'
);
$socialPage->addChild(
	"twitter_panel",
	$twitter_panel
);

$twitter_field = new PitchQodeTwitterFramework();
$twitter_panel->addChild(
	'twitter_field',
	$twitter_field
);

//Instagram pannel

$instagram_panel = new PitchQodePanel(
	esc_html__( 'Instagram', 'pitch' ),
	'instagram_panel'
);
$socialPage->addChild(
	"instagram_panel",
	$instagram_panel
);

$instagram_field = new PitchQodeInstagramFramework();
$instagram_panel->addChild(
	'instagram_field',
	$instagram_field
);
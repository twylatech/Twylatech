<?php

$qode_pages = array();
$pages      = get_posts(
	array(
		'post_type' => esc_html__( 'page', 'pitch' ),
		'meta_key' => esc_html__( '_wp_page_template', 'pitch' ),
		'meta_value' => esc_html__( 'login.php', 'pitch' )
	)
);
foreach ( $pages as $page ) {
	$qode_pages[ $page->ID ] = $page->post_title;
}

$loginPage = new QodePitchAdminPage(
	"20",
	esc_html__( "Login Page", 'pitch' ),
	"fa fa-user"
);
$pitch_qode_framework->qodeOptions->addAdminPage(
	esc_html__( "Login Page", 'pitch' ),
	$loginPage
);

//Maintenance

$panel1 = new PitchQodePanel(
	esc_html__( "Settings", 'pitch' ),
	"login_panel"
);
$loginPage->addChild(
	"panel1",
	$panel1
);

$qode_enable_login_page = new PitchQodeField(
	"yesno",
	"qode_enable_login_page",
	"no",
	esc_html__( "Login Page", 'pitch' ),
	esc_html__( "Turn on this option if you want to enable login page on your site", 'pitch' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_login_container"
	)
);
$panel1->addChild(
	"qode_enable_login_page",
	$qode_enable_login_page
);

$login_container = new PitchQodeContainer(
	"login_container",
	"qode_enable_login_page",
	"no"
);
$panel1->addChild(
	"login_container",
	$login_container
);

$qode_login_page = new PitchQodeField(
	"selectblank",
	"qode_login_page",
	"",
	esc_html__( 'Login Page', 'pitch' ),
	esc_html__( 'Choose login page to display on your site', 'pitch' ),
	$qode_pages
);
$login_container->addChild(
	"qode_login_page",
	$qode_login_page
);

$login_page_title = new PitchQodeField(
	"text",
	"login_page_title",
	"",
	esc_html__( "Login Page Title", 'pitch' ),
	esc_html__( "Enter title you want to have displayed on login page.", 'pitch' ),
	array(),
	array( "col_width" => 12 )
);
$login_container->addChild(
	"login_page_title",
	$login_page_title
);

$login_page_subtitle = new PitchQodeField(
	"text",
	"login_page_subtitle",
	"",
	esc_html__( "Login Page Subtitle", 'pitch' ),
	esc_html__( "Enter subtitle you want to have displayed on login page.", 'pitch' ),
	array(),
	array( "col_width" => 12 )
);
$login_container->addChild(
	"login_page_subtitle",
	$login_page_subtitle
);

$login_page_image = new PitchQodeField(
	"image",
	"login_page_image",
	"",
	esc_html__( "Backround Image", 'pitch' ),
	esc_html__( 'Upload custom image to be displayed as your login page background.', 'pitch' )
);
$login_container->addChild(
	"login_page_image",
	$login_page_image
);
<?php

$logoPage = new QodePitchAdminPage(
	"1",
	esc_html__( "Logo", 'pitch' ),
	"fa fa-coffee"
);
$pitch_qode_framework->qodeOptions->addAdminPage(
	"logo",
	$logoPage
);

$panel1 = new PitchQodePanel(
	esc_html__( "Logo Upload", 'pitch' ),
	"logo"
);
$logoPage->addChild(
	"panel1",
	$panel1
);

$show_logo = new PitchQodeField(
	"yesno",
	"show_logo",
	"yes",
	esc_html__( "Show Logo", 'pitch' ),
	esc_html__( "Disabling this option will hide logo", 'pitch' ),
	array(),
	array(
		"dependence" => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_show_logo_container"
	)
);
$panel1->addChild(
	"show_logo",
	$show_logo
);
$show_logo_container = new PitchQodeContainer(
	"show_logo_container",
	"show_logo",
	"no"
);
$panel1->addChild(
	"show_logo_container",
	$show_logo_container
);

$logo_image = new PitchQodeField(
	"image",
	"logo_image",
	PITCH_ROOT . "/img/logo.png",
	esc_html__( "Logo Image - Normal", 'pitch' ),
	esc_html__( "Choose a default logo image to display ", 'pitch' )
);
$show_logo_container->addChild(
	"logo_image",
	$logo_image
);

$logo_image_light = new PitchQodeField(
	"image",
	"logo_image_light",
	PITCH_ROOT . "/img/logo_white.png",
	esc_html__( "Logo Image - Light", 'pitch' ),
	esc_html__( 'Choose a logo image to display for "Light" header skin', 'pitch' )
);
$show_logo_container->addChild(
	"logo_image_light",
	$logo_image_light
);

$logo_image_dark = new PitchQodeField(
	"image",
	"logo_image_dark",
	PITCH_ROOT . "/img/logo_black.png",
	esc_html__( "Logo Image - Dark", 'pitch' ),
	esc_html__( 'Choose a logo image to display for "Dark" header skin', 'pitch' )
);
$show_logo_container->addChild(
	"logo_image_dark",
	$logo_image_dark
);

$logo_image_sticky = new PitchQodeField(
	"image",
	"logo_image_sticky",
	PITCH_ROOT . "/img/logo_black.png",
	esc_html__( "Logo Image - Sticky Header", 'pitch' ),
	esc_html__( 'Choose a logo image to display for "Sticky" header type', 'pitch' )
);
$show_logo_container->addChild(
	"logo_image_sticky",
	$logo_image_sticky
);

$logo_image_fixed_hidden = new PitchQodeField(
	"image",
	"logo_image_fixed_hidden",
	"",
	esc_html__( "Logo Image - Fixed Advanced Header", 'pitch' ),
	esc_html__( 'Choose a logo image to display for "Fixed Advanced" header type', 'pitch' )
);
$show_logo_container->addChild(
	"logo_image_fixed_hidden",
	$logo_image_fixed_hidden
);

$logo_image_mobile = new PitchQodeField(
	"image",
	"logo_image_mobile",
	"",
	esc_html__( "Logo Image - Mobile Header", 'pitch' ),
	esc_html__( 'Choose a logo image to display for "Mobile" header type', 'pitch' )
);
$show_logo_container->addChild(
	"logo_image_mobile",
	$logo_image_mobile
);

$vertical_logo_bottom = new PitchQodeField(
	"image",
	"vertical_logo_bottom",
	"",
	esc_html__( "Logo Image - Side Menu Area Bottom", 'pitch' ),
	esc_html__( 'Choose a logo image to display on the bottom of side menu area for "Initially Hidden" side menu area type', 'pitch' )
);
$show_logo_container->addChild(
	"vertical_logo_bottom",
	$vertical_logo_bottom
);

$content_menu_logo_image = new PitchQodeField(
	"image",
	"content_menu_logo_image",
	"",
	esc_html__( "Logo Image - Content Menu", 'pitch' ),
	esc_html__( 'Choose a logo image to display on the Content Menu', 'pitch' )
);
$show_logo_container->addChild(
	"content_menu_logo_image",
	$content_menu_logo_image
);
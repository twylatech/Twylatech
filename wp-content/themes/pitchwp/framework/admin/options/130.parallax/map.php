<?php

$parallaxPage = new QodePitchAdminPage(
	"15",
	esc_html__( "Parallax", 'pitch' ),
	"fa fa-unsorted"
);
$pitch_qode_framework->qodeOptions->addAdminPage(
	esc_html__( "Parallax", 'pitch' ),
	$parallaxPage
);

//Parallax Settings

$panel1 = new PitchQodePanel(
	esc_html__( "Parallax Settings", 'pitch' ),
	"parallax_settings_panel"
);
$parallaxPage->addChild(
	"panel1",
	$panel1
);

$parallax_onoff = new PitchQodeField(
	"onoff",
	"parallax_onoff",
	"off",
	esc_html__( "Parallax on touch devices", 'pitch' ),
	esc_html__( "Enabling this option will allow parallax on touch devices", 'pitch' )
);
$panel1->addChild(
	"parallax_onoff",
	$parallax_onoff
);

$parallax_minheight = new PitchQodeField(
	"text",
	"parallax_minheight",
	"400",
	esc_html__( "Parallax Min Height (px)", 'pitch' ),
	esc_html__( "Set a minimum height for parallax images on small displays (phones, tablets, etc.)", 'pitch' ),
	array(),
	array( "col_width" => 3 )
);
$panel1->addChild(
	"parallax_minheight",
	$parallax_minheight
);
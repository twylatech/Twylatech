<?php

$resetPage = new QodePitchAdminPage(
	"21",
	esc_html__( "Reset", 'pitch' ),
	"fa fa-retweet"
);
$pitch_qode_framework->qodeOptions->addAdminPage(
	esc_html__( "Reset", 'pitch' ),
	$resetPage
);

//Reset

$panel1 = new PitchQodePanel(
	esc_html__( "Reset to Defaults", 'pitch' ),
	"reset_panel"
);
$resetPage->addChild(
	"panel1",
	$panel1
);

$reset_to_defaults = new PitchQodeField(
	"yesno",
	"reset_to_defaults",
	"no",
	esc_html__( "Reset to Defaults", 'pitch' ),
	esc_html__( "This option will reset all Select Options values to defaults", 'pitch' )
);
$panel1->addChild(
	"reset_to_defaults",
	$reset_to_defaults
);
<?php

$qode_pages = array();
$pages      = get_posts(
	array(
		'post_type' => esc_html__( 'page', 'pitch' ),
		'meta_key' => esc_html__( '_wp_page_template', 'pitch' ),
		'meta_value' => esc_html__( 'landing_page.php', 'pitch' )
	)
);
foreach ( $pages as $page ) {
	$qode_pages[ $page->ID ] = $page->post_title;
}

$maintenancePage = new QodePitchAdminPage(
	"18",
	esc_html__( "Maintenance Mode", 'pitch' ),
	"fa fa-wrench"
);
$pitch_qode_framework->qodeOptions->addAdminPage(
	esc_html__( "Maintenance Mode", 'pitch' ),
	$maintenancePage
);

//Maintenance

$panel1 = new PitchQodePanel(
	esc_html__( "Settings", 'pitch' ),
	"maintenance_panel"
);
$maintenancePage->addChild(
	"panel1",
	$panel1
);

$maintenance_mode = new PitchQodeField(
	"yesno",
	"qode_maintenance_mode",
	"no",
	esc_html__( "Maintenance Mode", 'pitch' ),
	esc_html__( "Turn on this option if you want to enable maintenance mode on your site", 'pitch' ),
	array(),
	array(
		"dependence"             => true,
		"dependence_hide_on_yes" => "",
		"dependence_show_on_yes" => "#qodef_maintenance_container"
	)
);
$panel1->addChild(
	"qode_maintenance_mode",
	$maintenance_mode
);

$maintenance_container = new PitchQodeContainer(
	"maintenance_container",
	"qode_maintenance_mode",
	"no"
);
$panel1->addChild(
	"maintenance_container",
	$maintenance_container
);

$maintenance_page = new PitchQodeField(
	"selectblank",
	"qode_maintenance_page",
	"",
	esc_html__( 'Maintenance Page', 'pitch' ),
	esc_html__( 'Choose maintenance page to display when user visits your site', 'pitch' ),
	$qode_pages
);
$maintenance_container->addChild(
	"qode_maintenance_page",
	$maintenance_page
);
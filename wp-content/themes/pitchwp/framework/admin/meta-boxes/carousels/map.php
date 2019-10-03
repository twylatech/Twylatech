<?php

//Carousels

$qodeCarousels = new QodePitchMetaBox(
	"carousels",
	esc_html__( "Carousels", 'pitch' )
);
$pitch_qode_framework->qodeMetaBoxes->addMetaBox(
	"carousels",
	$qodeCarousels
);

$qode_carousel_image = new PitchQodeMetaField(
	"image",
	"qode_carousel-image",
	"",
	esc_html__( "Carousel Image", 'pitch' ),
	esc_html__( "Choose carousel image (min width needs to be 215px)", 'pitch' )
);
$qodeCarousels->addChild(
	"qode_carousel-image",
	$qode_carousel_image
);

$qode_carousel_hover_image = new PitchQodeMetaField(
	"image",
	"qode_carousel-hover-image",
	"",
	esc_html__( "Carousel Hover Image", 'pitch' ),
	esc_html__( "Choose carousel hover image (min width needs to be 215px)", 'pitch' )
);
$qodeCarousels->addChild(
	"qode_carousel-hover-image",
	$qode_carousel_hover_image
);

$qode_carousel_item_text = new PitchQodeMetaField(
	"textarea",
	"qode_carousel-item-text",
	"",
	esc_html__( "Text", 'pitch' ),
	esc_html__( "Enter carousel text", 'pitch' )
);
$qodeCarousels->addChild(
	"qode_carousel-item-text",
	$qode_carousel_item_text
);

$qode_carousel_item_link = new PitchQodeMetaField(
	"text",
	"qode_carousel-item-link",
	"",
	esc_html__( "Link", 'pitch' ),
	esc_html__( "Enter the URL to which you want the image to link to (e.g. http://www.example.com)", 'pitch' )
);
$qodeCarousels->addChild(
	"qode_carousel-item-link",  
	$qode_carousel_item_link
);

$qode_carousel_item_target = new PitchQodeMetaField(
	"selectblank",
	"qode_carousel-item-target",
	"",
	esc_html__( "Target", 'pitch' ),
	esc_html__( "Specify where to open the linked document", 'pitch' ),
	array(
		"_self" => esc_html__( "Self", 'pitch' ),
		"_blank" => esc_html__( "Blank", 'pitch' )
	)
);
$qodeCarousels->addChild(
	"qode_carousel-item-target",
	$qode_carousel_item_target
);
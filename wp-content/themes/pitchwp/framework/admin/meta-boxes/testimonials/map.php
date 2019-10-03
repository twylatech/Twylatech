<?php

//Testimonials

$qodeTestimonials = new QodePitchMetaBox(
	"testimonials",
	esc_html__( "Testimonials", 'pitch' )
);
$pitch_qode_framework->qodeMetaBoxes->addMetaBox(
	"testimonials",
	$qodeTestimonials
);

$qode_show_testimonial_title_text = new PitchQodeMetaField(
	"yesno",
	"qode_show_testimonial_title_text",
	"no",
	esc_html__( "Hide Testimonial Title Text", 'pitch' ),
	esc_html__( "Enable this option to hide the title text", 'pitch' ),
	array(),
	array(
		"dependence" => true,
		"dependence_hide_on_yes" => "#qodef_qode_testimonial_title_container",
		"dependence_show_on_yes" => ""
	)
);
$qodeTestimonials->addChild(
	"qode_show_testimonial_title_text",
	$qode_show_testimonial_title_text
);

$qode_testimonial_title_container = new PitchQodeContainer(
	"qode_testimonial_title_container",
	"qode_show_testimonial_title_text",
	"yes"
);
$qodeTestimonials->addChild(
	"qode_testimonial_title_container",
	$qode_testimonial_title_container
);

$qode_testimonial_title = new PitchQodeMetaField(
	"text",
	"qode_testimonial_title",
	"",
	esc_html__( "Title", 'pitch' ),
	esc_html__( "Enter testimonial title", 'pitch' )
);
$qode_testimonial_title_container->addChild(
	"qode_testimonial_title",
	$qode_testimonial_title
);

$qode_testimonial_author = new PitchQodeMetaField(
	"text",
	"qode_testimonial-author",
	"",
	esc_html__( "Author", 'pitch' ),
	esc_html__( "Enter author name", 'pitch' )
);
$qodeTestimonials->addChild(
	"qode_testimonial-author",
	$qode_testimonial_author
);

$qode_testimonial_author_position = new PitchQodeMetaField(
	"text",
	"qode_testimonial_author_position",
	"",
	esc_html__( "Job Position", 'pitch' ),
	esc_html__( "Enter job position name", 'pitch' )
);
$qodeTestimonials->addChild(
	"qode_testimonial_author_position",
	$qode_testimonial_author_position
);

$qode_testimonial_text = new PitchQodeMetaField(
	"textarea",
	"qode_testimonial-text",
	"",
	esc_html__( "Text", 'pitch' ),
	esc_html__( "Enter testimonial text", 'pitch' )
);
$qodeTestimonials->addChild(
	"qode_testimonial-text",
	$qode_testimonial_text
);
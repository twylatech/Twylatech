<?php
//Masonry Gallery Metaboxes

//General settings for text, buttons, links
$qodeMasonryGalleryItemGeneral = new QodePitchMetaBox(
	"masonry_gallery",
	esc_html__( "Masonry Gallery General", 'pitch' )
);
$pitch_qode_framework->qodeMetaBoxes->addMetaBox(
	"masonry_gallery_item_general",
	$qodeMasonryGalleryItemGeneral
);

$qode_masonry_gallery_item_text = new PitchQodeMetaField(
	'text',
	'qode_masonry_gallery_item_text',
	'',
	esc_html__( 'Text', 'pitch' ),
	''
);
$qodeMasonryGalleryItemGeneral->addChild(
	'qode_masonry_gallery_item_text',
	$qode_masonry_gallery_item_text
);

$qode_masonry_gallery_item_link = new PitchQodeMetaField(
	'text',
	'qode_masonry_gallery_item_link',
	'',
	esc_html__( 'Link', 'pitch' ),
	''
);
$qodeMasonryGalleryItemGeneral->addChild(
	'qode_masonry_gallery_item_link',
	$qode_masonry_gallery_item_link
);

$qode_masonry_gallery_item_link_target = new PitchQodeMetaField(
	'select',
	'qode_masonry_gallery_item_link_target',
	'_self',
	esc_html__( 'Link target', 'pitch' ),
	'',
	array(
		'_self' => esc_html__( 'Self', 'pitch' ),
		'_blank' => esc_html__( 'Blank', 'pitch' )
	)
);
$qodeMasonryGalleryItemGeneral->addChild(
	'qode_masonry_gallery_item_link_target',
	$qode_masonry_gallery_item_link_target
);

$qode_masonry_item_parallax = new PitchQodeMetaField(
	"select",
	"qode_masonry_item_parallax",
	"no",
	esc_html__( "Set Item in Parallax", 'pitch' ),
	"",
	array(
		"no" => esc_html__( "No", 'pitch' ),
		"yes" => esc_html__( "Yes", 'pitch' )
	)
);
$qodeMasonryGalleryItemGeneral->addChild(
	"qode_masonry_item_parallax",
	$qode_masonry_item_parallax
);

//Masonry Gallery Style - Size, Type
$section_style_title = new PitchQodeTitle(
	'section_style_title',
	esc_html__( 'Masonry Gallery Item Style', 'pitch' )
);
$qodeMasonryGalleryItemGeneral->addChild(
	'section_style_title',
	$section_style_title
);

$qode_masonry_gallery_item_size = new PitchQodeMetaField(
	'select',
	'qode_masonry_gallery_item_size',
	'square_small',
	esc_html__( 'Size', 'pitch' ),
	'size',
	array(
		'square_small' => esc_html__( 'Square Small', 'pitch' ),
		'square_big' => esc_html__( 'Square Big', 'pitch' ),
		'rectangle_portrait' => esc_html__( 'Rectangle Portrait', 'pitch' ),
		'rectangle_landscape' => esc_html__( 'Rectangle Landscape', 'pitch' )
	)
);
$qodeMasonryGalleryItemGeneral->addChild(
	'qode_masonry_gallery_item_size',
	$qode_masonry_gallery_item_size
);

$qode_masonry_gallery_item_type = new PitchQodeMetaField(
	'select',
	'qode_masonry_gallery_item_type',
	'with_button',
	esc_html__( 'Type', 'pitch' ),
	'type',
	array(
		'with_button' => esc_html__( 'With Button', 'pitch' ),
		'with_icon' => esc_html__( 'With Icon', 'pitch' ),
		'standard' => esc_html__( 'Standard', 'pitch' )
	),
	array(
		'dependence' => true,
		'hide'       => array(
			'with_button' => '#qodef_qode_masonry_gallery_item_icon_type_container',
			'with_icon'   => '#qodef_qode_masonry_gallery_item_button_type_container',
			'standard'    => '#qodef_qode_masonry_gallery_item_button_type_container, #qodef_qode_masonry_gallery_item_icon_type_container'
		),
		'show'       => array(
			'with_button' => '#qodef_qode_masonry_gallery_item_button_type_container',
			'with_icon'   => '#qodef_qode_masonry_gallery_item_icon_type_container',
			'standard'    => ''
		)
	)
);
$qodeMasonryGalleryItemGeneral->addChild(
	'qode_masonry_gallery_item_type',
	$qode_masonry_gallery_item_type
);

$qode_masonry_gallery_item_button_type_container = new PitchQodeContainer(
	'qode_masonry_gallery_item_button_type_container',
	'qode_masonry_gallery_item_type',
	'',
	array( 'standard', 'with_icon' )
);
$qodeMasonryGalleryItemGeneral->addChild(
	'qode_masonry_gallery_item_button_type_container',
	$qode_masonry_gallery_item_button_type_container
);

$qode_masonry_gallery_button_label = new PitchQodeMetaField(
	'text',
	'qode_masonry_gallery_button_label',
	'',
	esc_html__( 'Button Label', 'pitch' ),
	''
);
$qode_masonry_gallery_item_button_type_container->addChild(
	'qode_masonry_gallery_button_label',
	$qode_masonry_gallery_button_label
);

$qode_masonry_gallery_item_icon_type_container = new PitchQodeContainer(
	'qode_masonry_gallery_item_icon_type_container',
	'qode_masonry_gallery_item_type',
	'',
	array( 'standard', 'with_button' )
);
$qodeMasonryGalleryItemGeneral->addChild(
	'qode_masonry_gallery_item_icon_type_container',
	$qode_masonry_gallery_item_icon_type_container
);
//Icon Packages
$qode_masonry_gallery_item_icon_hide_array = array();
$qode_masonry_gallery_item_icon_show_array = array();

if ( is_array( pitch_qode_icon_collections()->iconCollections ) && count( pitch_qode_icon_collections()->iconCollections ) ) {
	
	$qode_masonry_gallery_item_icon_collection_params = pitch_qode_icon_collections()->getIconCollectionsParams();
	
	foreach ( pitch_qode_icon_collections()->iconCollections as $dep_collection_key => $dep_collection_object ) {
		
		$qode_masonry_gallery_item_icon_hide_array[ $dep_collection_key ] = '';
		
		$qode_masonry_gallery_item_icon_show_array[ $dep_collection_key ] = '#qodef_qode_masonry_gallery_item_with_icon_' . $dep_collection_object->param . '_container';
		
		foreach ( $qode_masonry_gallery_item_icon_collection_params as $qode_masonry_gallery_item_icon_collection_param ) {
			
			if ( $qode_masonry_gallery_item_icon_collection_param !== $dep_collection_object->param ) {
				$qode_masonry_gallery_item_icon_hide_array[ $dep_collection_key ] .= '#qodef_qode_masonry_gallery_item_with_icon_' . $qode_masonry_gallery_item_icon_collection_param . '_container,';
			}
			
		}
		
		$qode_masonry_gallery_item_icon_hide_array[ $dep_collection_key ] = rtrim(
			$qode_masonry_gallery_item_icon_hide_array[ $dep_collection_key ],
			','
		);
	}
	
}

$qode_masonry_gallery_item_with_icon_icon_pack = new PitchQodeMetaField(
	'select',
	'qode_masonry_gallery_item_with_icon_icon_pack',
	'font_awesome',
	esc_html__( 'Icon Package', 'pitch' ),
	esc_html__( 'Choose Icon Package', 'pitch' ),
	pitch_qode_icon_collections()->getIconCollections(),
	array(
		'dependence' => true,
		'hide'       => $qode_masonry_gallery_item_icon_hide_array,
		'show'       => $qode_masonry_gallery_item_icon_show_array
	)
);
$qode_masonry_gallery_item_icon_type_container->addChild(
	'qode_masonry_gallery_item_with_icon_icon_pack',
	$qode_masonry_gallery_item_with_icon_icon_pack
);

if ( is_array( pitch_qode_icon_collections()->iconCollections ) && count(
		pitch_qode_icon_collections()->iconCollections
	) ) {
	
	foreach ( pitch_qode_icon_collections()->iconCollections as $collection_key => $collection_object ) {
		$icons_array = $collection_object->getIconsArray();
		
		$icon_collections_keys = pitch_qode_icon_collections()->getIconCollectionsKeys();
		
		unset(
			$icon_collections_keys[ array_search(
				$collection_key,
				$icon_collections_keys
			) ]
		);
		
		$qode_masonry_gallery_item_icon_hide_values = $icon_collections_keys;
		
		$qode_masonry_gallery_item_icon_pack_container = new PitchQodeContainer(
			'qode_masonry_gallery_item_with_icon_' . $collection_object->param . '_container',
			'qode_masonry_gallery_item_with_icon_icon_pack',
			'',
			$qode_masonry_gallery_item_icon_hide_values
		);
		$qode_masonry_gallery_item_icon_type_container->addChild(
			'qode_masonry_gallery_item_with_icon_' . $collection_object->param . '_container',
			$qode_masonry_gallery_item_icon_pack_container
		);
		
		$qode_masonry_gallery_item_with_icon_icon_type = new PitchQodeMetaField(
			'select',
			'qode_masonry_gallery_item_with_icon_' . $collection_object->param,
			'',
			$collection_object->title,
			esc_html__( 'Icon Package', 'pitch' ),
			$icons_array
		);
		$qode_masonry_gallery_item_icon_pack_container->addChild(
			'qode_masonry_gallery_item_with_icon_' . $collection_object->param,
			$qode_masonry_gallery_item_with_icon_icon_type
		);
		
	}
	
}
<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

/**
 * Shortcode attributes
 * @var $atts
 * @var $title
 * @var $source
 * @var $image
 * @var $custom_src
 * @var $onclick
 * @var $img_size
 * @var $external_img_size
 * @var $caption
 * @var $img_link_large
 * @var $link
 * @var $img_link_target
 * @var $alignment
 * @var $el_class
 * @var $el_id
 * @var $css_animation
 * @var $style
 * @var $external_style
 * @var $border_color
 * @var $css
 * Shortcode class
 * @var WPBakeryShortCode_Vc_Single_image $this
 */
$title = $source = $image = $custom_src = $onclick = $img_size = $external_img_size = $caption = $img_link_large = $link = $img_link_target = $alignment = $el_class = $el_id = $css_animation = $style = $external_style = $border_color = $css = '';
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

$default_src = vc_asset_url( 'vc/no_image.png' );

// backward compatibility. since 4.6
if ( empty( $onclick ) && isset( $img_link_large ) && 'yes' === $img_link_large ) {
	$onclick = 'img_link_large';
} else if ( empty( $atts['onclick'] ) && ( ! isset( $atts['img_link_large'] ) || 'yes' !== $atts['img_link_large'] ) ) {
	$onclick = 'custom_link';
}

if ( 'external_link' === $source ) {
	$style = $external_style;
	$border_color = $external_border_color;
}

$border_color = ( $border_color !== '' ) ? ' vc_box_border_' . $border_color : '';

$img = false;

switch ( $source ) {
	case 'media_library':
	case 'featured_image':

		if ( 'featured_image' === $source ) {
			$post_id = get_the_ID();
			if ( $post_id && has_post_thumbnail( $post_id ) ) {
				$img_id = get_post_thumbnail_id( $post_id );
			} else {
				$img_id = 0;
			}
		} else {
			$img_id = preg_replace( '/[^\d]/', '', $image );
		}

		// set rectangular
		if ( preg_match( '/_circle_2$/', $style ) ) {
			$style = preg_replace( '/_circle_2$/', '_circle', $style );
			$img_size = $this->getImageSquareSize( $img_id, $img_size );
		}

		if ( ! $img_size ) {
			$img_size = 'medium';
		}

		$img = wpb_getImageBySize( array(
			'attach_id' => $img_id,
			'thumb_size' => $img_size,
			'class' => 'vc_single_image-img'
		) );

		// don't show placeholder in public version if post doesn't have featured image
		if ( 'featured_image' === $source ) {
			if ( ! $img && 'page' === vc_manager()->mode() ) {
				return;
			}
		}

		break;

	case 'external_link':
		$dimensions = vc_extract_dimensions( $external_img_size );
		$hwstring = $dimensions ? image_hwstring( $dimensions[0], $dimensions[1] ) : '';

		$custom_src = $custom_src ? esc_attr( $custom_src ) : $default_src;

		$img = array(
			'thumbnail' => '<img class="vc_single_image-img" ' . $hwstring . ' src="' . esc_url($custom_src) . '" />'
		);
		break;

	default:
		$img = false;
}

if ( ! $img ) {
	$img['thumbnail'] = '<img class="vc_img-placeholder vc_single_image-img" src="' . esc_url($default_src) . '" />';
}

$el_class = $this->getExtraClass( $el_class );

// backward compatibility
if ( vc_has_class( 'prettyphoto', $el_class ) ) {
	$onclick = 'link_image';
}

// backward compatibility. will be removed in 4.7+
if ( ! empty( $atts['img_link'] ) ) {
	$link = $atts['img_link'];
	if ( ! preg_match( '/^(https?\:\/\/|\/\/)/', $link ) ) {
		$link = 'http://' . $link;
	}
}

// backward compatibility
if ( in_array( $link, array(
	'none',
	'link_no',
), true ) ) {
	$link = '';
}

$a_attrs = array();

switch ( $onclick ) {
	case 'img_link_large':

		if ( 'external_link' === $source ) {
			$link = $custom_src;
		} else {
			$link = wp_get_attachment_image_src( $img_id, 'large' );
			$link = $link[0];
		}

		break;

	case 'link_image':
		//wp_enqueue_script( 'prettyphoto' );
		//wp_enqueue_style( 'prettyphoto' );

		$a_attrs['class'] = 'prettyphoto';
		$a_attrs['rel'] = 'prettyPhoto[rel-' . get_the_ID() . '-' . wp_rand() . ']';

		// backward compatibility
		if ( ! vc_has_class( 'prettyphoto', $el_class ) && 'external_link' === $source ) {
			$link = $custom_src;
		} elseif ( ! vc_has_class( 'prettyphoto', $el_class ) ) {
			$link = wp_get_attachment_image_src( $img_id, 'large' );
			$link = $link[0];
		}

		break;

	case 'custom_link':
		// $link is already defined
		break;

	case 'zoom':
		wp_enqueue_script( 'vc_image_zoom' );

		if ( 'external_link' === $source ) {
			$large_img_src = $custom_src;
		} else {
			$large_img_src = wp_get_attachment_image_src( $img_id, 'large' );
			if ( $large_img_src ) {
				$large_img_src = $large_img_src[0];
			}
		}

		$img['thumbnail'] = str_replace( '<img ', '<img data-vc-zoom="' . $large_img_src . '" ', $img['thumbnail'] );

		break;
}

// backward compatibility
if ( vc_has_class( 'prettyphoto', $el_class ) ) {
	$el_class = vc_remove_class( 'prettyphoto', $el_class );
}

$html = ( 'vc_box_shadow_3d' === $style ) ? '<span class="vc_box_shadow_3d_wrap">' . $img['thumbnail'] . '</span>' : $img['thumbnail'];
$html = '<div class="vc_single_image-wrapper ' . $style . ' ' . $border_color . '">' . $html . '</div>';

if ( $link ) {
	$a_attrs['href'] = $link;
	$a_attrs['target'] = $img_link_target;
	$html = '<a ' . vc_stringify_attributes( $a_attrs ) . '>' . $html . '</a>';
}

$class_to_filter = 'wpb_single_image wpb_content_element vc_align_' . $alignment . ' ' . $this->getCSSAnimation( $css_animation );
$class_to_filter .= vc_shortcode_custom_css_class( $css, ' ' ) . $this->getExtraClass( $el_class );
$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, $class_to_filter, $this->settings['base'], $atts );

if ( in_array( $source, array( 'media_library', 'featured_image' ), true ) && 'yes' === $add_caption ) {
	$img_id = apply_filters( 'wpml_object_id', $img_id, 'attachment' );
	$post = get_post( $img_id );
	$caption = $post->post_excerpt;
} else {
	if ( 'external_link' === $source ) {
		$add_caption = 'yes';
	}
}

if ( 'yes' === $add_caption && '' !== $caption ) {
	$html .= '<figcaption class="vc_figure-caption">' . esc_html( $caption ) . '</figcaption>';
}

	if($qode_css_animation != ""){
		$css_class .=  " " . $qode_css_animation;
	}
	
	if($qode_hover_animation != ""){
		$css_class .=  " " . $qode_hover_animation;
	}
	
	$before_wrapper_start = "";
	$before_wrapper_end = "";
	if($transition_delay != ""){
		$before_wrapper_start = '<div  style="transition-delay:' . $transition_delay . 's; animation-delay:' . $transition_delay . 's; -webkit-animation-delay:' . $transition_delay . 's;">';
		$before_wrapper_end = '</div>';
	}

$output = '
	<div class="' . esc_attr( trim( $css_class ) ) . '">' . $before_wrapper_start .'
		<div class="wpb_wrapper">
			' . wpb_widget_title( array( 'title' => $title, 'extraclass' => 'wpb_singleimage_heading' ) ) . '
			' . $html . '
		</div>' . $before_wrapper_end .'
	</div>
';

echo pitch_qode_get_module_part( $output );


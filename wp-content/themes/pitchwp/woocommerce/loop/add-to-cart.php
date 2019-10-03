<?php
/**
 * Loop Add to Cart
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/add-to-cart.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @package 	WooCommerce/Templates
 * @version     3.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
global $product;

$animate_button_class='';
if(pitch_qode_options()->getOptionValue( 'add_to_cart_button_hover_animation' ) !== ''){
	$animate_button_class = pitch_qode_options()->getOptionValue( 'button_hover_animation' );
}

$type = "type1";

$add_to_cart_text= $product->add_to_cart_text();

if ( ! $product->is_in_stock() ) : ?>
   <div class="product_image_overlay"></div><span class="onsale out-of-stock-button"><span><?php echo apply_filters( 'out_of_stock_add_to_cart_text', esc_html__( 'Out of stock', 'pitch' ) ); ?></span></span>
<?php else :
	if($type == 'type1') {
		echo
			'<div class="woocommerce_single_product_add_to_cart_holder">' .
			apply_filters( 'woocommerce_loop_add_to_cart_link', // WPCS: XSS ok.
				sprintf( '<div class="product_image_overlay"></div><a href="%s" data-quantity="%s" class="qbutton '.$animate_button_class.' add-to-cart-button %s" %s><span class="text_wrap">%s</span><span class="a_overlay"></span></a>',
					esc_url( $product->add_to_cart_url() ),
					esc_attr( isset( $args['quantity'] ) ? $args['quantity'] : 1 ),
					esc_attr( isset( $args['class'] ) ? $args['class'] : 'button' ),
					isset( $args['attributes'] ) ? wc_implode_html_attributes( $args['attributes'] ) : '',
					esc_html( $product->add_to_cart_text() )
				),
				$product, $args ) .
			apply_filters( 'woocommerce_loop_add_to_cart_link', // WPCS: XSS ok.
				sprintf( '<a href="%s" data-quantity="%s" class="qbutton double'.$animate_button_class.' add-to-cart-button %s" %s><span class="text_wrap">%s</span><span class="a_overlay"></span></a>',
					esc_url( $product->add_to_cart_url() ),
					esc_attr( isset( $args['quantity'] ) ? $args['quantity'] : 1 ),
					esc_attr( isset( $args['class'] ) ? $args['class'] : 'button' ),
					isset( $args['attributes'] ) ? wc_implode_html_attributes( $args['attributes'] ) : '',
					esc_html( $product->add_to_cart_text() )
				),
				$product, $args ) .
			'<a href="' . esc_url( home_url( '/' ) ) . '/cart/" class="button added_to_cart_double wc-forward" title="' . esc_attr__("View Cart","pitch") . '">' . esc_html__( 'View Cart', 'pitch' ) . '</a>'
			. '</div>';
	}
	else {
		
		echo apply_filters( 'woocommerce_loop_add_to_cart_link', // WPCS: XSS ok.
			sprintf( '<div class="product_image_overlay"></div><div class="add-to-cart-button-outer"><div class="add-to-cart-button-inner"><div class="add-to-cart-button-inner2"><a class="product_link_over" href="'.get_permalink($product->get_id()).'"></a><a href="%s" data-quantity="%s" class="qbutton '.$animate_button_class.' add-to-cart-button %s" %s><span class="text_wrap">%s</span><span class="a_overlay"></span></a></div></div></div>',
				esc_url( $product->add_to_cart_url() ),
				esc_attr( isset( $args['quantity'] ) ? $args['quantity'] : 1 ),
				esc_attr( isset( $args['class'] ) ? $args['class'] : 'button' ),
				isset( $args['attributes'] ) ? wc_implode_html_attributes( $args['attributes'] ) : '',
				esc_html( $product->add_to_cart_text() )
			),
			$product, $args );
	}

endif;
?>
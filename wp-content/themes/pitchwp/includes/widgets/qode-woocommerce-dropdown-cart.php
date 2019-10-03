<?php

class PitchQodeWoocommerceDropdownCart extends WP_Widget {

	public function __construct() {
		parent::__construct(
			'qode_woocommerce_dropdown_cart', // Base ID
			esc_html__( 'Pitch Woocommerce Dropdown Cart', 'pitch' ), // Name
			array( 'description' => esc_html__( 'Display a shop cart icon with a dropdown that shows products that are in the cart', 'pitch' ), ) // Args
		);
	}

	public function widget( $args, $instance ) {
		extract( $args );
		
		$cart_style = 'with_icon';
		if ( pitch_qode_options()->getOptionValue( 'woo_drop_cart_type' ) ) {
			if ( pitch_qode_options()->getOptionValue( 'woo_drop_cart_type' ) == 'with_icon' ) {
				$cart_style = 'with_icon';
			} elseif ( pitch_qode_options()->getOptionValue( 'woo_drop_cart_type' ) == 'with_icon_label' ) {
				$cart_style = 'with_icon_label';
			} else {
				$cart_style = 'button_with_text';
			}
		}
		?>
		<div class="shopping_cart_outer">
			<div class="shopping_cart_inner">
				<div class="shopping_cart_header">
						<?php if($cart_style == "with_icon") { ?>
							<a class="header_cart" href="<?php echo esc_url( wc_get_cart_url() ); ?>">
								<i class="fa fa-shopping-cart"></i>
								<span class="header_cart_span"><?php echo WC()->cart->cart_contents_count; ?></span>
							</a>
						<?php } if($cart_style == "with_icon_label") { ?>
							<a class="header_cart" href="<?php echo esc_url( wc_get_cart_url() ); ?>">
								<i class="fa fa-shopping-cart"></i>
								<span class="cart_label"><?php esc_html_e('Cart','pitch') ?></span>
							</a>
						<?php } ?>
						<?php if($cart_style == "button_with_text") { ?>
							<a class="header_cart" href="<?php echo esc_url( wc_get_cart_url() ); ?>">
								<span class="cart_label"><?php esc_html_e('Cart','pitch') ?></span>
								<span class="header_cart_span"><?php echo WC()->cart->cart_contents_count; ?></span>
							</a>
						<?php } ?>
					<div class="shopping_cart_dropdown">
						<div class="shopping_cart_dropdown_inner1">
							<?php if ( ! WC()->cart->is_empty() ) :
								foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) :
									$_product = $cart_item['data'];
									
									// Only display if allowed
									if ( ! $_product->exists() || $cart_item['quantity'] == 0 ) {
										continue;
									}
									
									// Get price
									$product_price = get_option( 'woocommerce_tax_display_cart' ) == 'excl' ? wc_get_price_excluding_tax( $_product ) : wc_get_price_including_tax( $_product );
									$product_price = apply_filters( 'woocommerce_cart_item_price_html', wc_price( $product_price ), $cart_item, $cart_item_key );
									?>
										<li>
											<div class="item_image_holder">
												<a href="<?php echo esc_url(get_permalink( $cart_item['product_id'] )); ?>">
													<?php echo wp_kses($_product->get_image(), array(
														'img' => array(
															'src' => true,
															'width' => true,
															'height' => true,
															'class' => true,
															'alt' => true,
															'title' => true,
															'id' => true
														)
													)); ?>
												</a>
											</div>
											<div class="item_info_holder">
												<div class="item_left">
													<a href="<?php echo esc_url(get_permalink( $cart_item['product_id'])); ?>">
														<?php echo apply_filters('woocommerce_widget_cart_product_title', $_product->get_title(), $_product ); ?>
													</a>
													<span class="quantity"><?php esc_html_e('Quantity: ','pitch'); echo esc_html($cart_item['quantity']); ?></span>
												</div>
												<div class="item_right">
													<?php echo apply_filters( 'woocommerce_cart_item_price_html', wc_price( $product_price ), $cart_item, $cart_item_key ); ?>
													<?php echo apply_filters( 'woocommerce_cart_item_remove_link', sprintf('<a href="%s" class="remove" title="%s">&times;</a>', esc_url( wc_get_cart_remove_url( $cart_item_key ) ), esc_html__('Remove this item', 'pitch') ), $cart_item_key ); ?>
												</div>
											</div>
										</li>
									<?php endforeach; ?>
									<div class="cart_bottom">
										<div class="subtotal_holder">
											<span class="total"><?php esc_html_e( 'Total', 'pitch' ); ?>:</span>
											<span class="total_amount"><?php wc_cart_totals_subtotal_html(); ?></span>
										</div>
										<div class="btns_holder">
											<a href="<?php echo esc_url( wc_get_cart_url() ); ?>" class="qbutton small view-cart"><?php esc_html_e( 'Shopping Bag', 'pitch' ); ?></a>
											<a href="<?php echo esc_url( wc_get_checkout_url() ); ?>" class="qbutton small checkout"><?php esc_html_e( 'Checkout', 'pitch' ); ?><span class="arrow_right" aria-hidden="true"></span></a>
										</div>
									</div>
								<?php else : ?>
									<li class="empty_cart"><?php esc_html_e( 'No products in the cart.', 'pitch' ); ?></li>
								<?php endif; ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php
	}
	
	public function update( $new_instance, $old_instance ) {
		$instance = array();

		return $instance;
	}
}

add_filter( 'woocommerce_add_to_cart_fragments', 'pitch_qode_woocommerce_header_add_to_cart_fragment' );

function pitch_qode_woocommerce_header_add_to_cart_fragment( $fragments ) {
	
	$cart_style = 'with_icon';
	if ( pitch_qode_options()->getOptionValue( 'woo_drop_cart_type' ) ) {
		if ( pitch_qode_options()->getOptionValue( 'woo_drop_cart_type' ) == 'with_icon' ) {
			$cart_style = 'with_icon';
		} elseif ( pitch_qode_options()->getOptionValue( 'woo_drop_cart_type' ) == 'with_icon_label' ) {
			$cart_style = 'with_icon_label';
		} else {
			$cart_style = 'button_with_text';
		}
	}
	ob_start();
	?>
	<div class="shopping_cart_header">
		<?php if($cart_style == "with_icon") { ?>
			<a class="header_cart" href="<?php echo esc_url( wc_get_cart_url() ); ?>">
				<i class="fa fa-shopping-cart"></i>
				<span class="header_cart_span"><?php echo WC()->cart->cart_contents_count; ?></span>
			</a>
		<?php } if($cart_style == "with_icon_label") { ?>
			<a class="header_cart" href="<?php echo esc_url( wc_get_cart_url() ); ?>">
				<i class="fa fa-shopping-cart"></i>
				<span class="cart_label"><?php esc_html_e('Cart','pitch') ?></span>
			</a>
		<?php } ?>
		<?php if($cart_style == "button_with_text") { ?>
			<a class="header_cart with_button" href="<?php echo esc_url( wc_get_cart_url() ); ?>">
				<span class="cart_label"><?php esc_html_e('Cart','pitch') ?></span>
				<span class="header_cart_span "><?php echo WC()->cart->cart_contents_count; ?></span>
			</a>
		<?php } ?>
		<div class="shopping_cart_dropdown">
			<div class="shopping_cart_dropdown_inner1">
				<ul>
					<?php if ( ! WC()->cart->is_empty() ) :
						foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) :
							$_product = $cart_item['data'];
							
							// Only display if allowed
							if ( ! $_product->exists() || $cart_item['quantity'] == 0 ) {
								continue;
							}
							
							// Get price
							$product_price = get_option( 'woocommerce_tax_display_cart' ) == 'excl' ? wc_get_price_excluding_tax( $_product ) : wc_get_price_including_tax( $_product );
							$product_price = apply_filters( 'woocommerce_cart_item_price_html', wc_price( $product_price ), $cart_item, $cart_item_key );
							?>
							<li>
								<div class="item_image_holder">
									<?php echo wp_kses($_product->get_image(), array(
										'img' => array(
											'src' => true,
											'width' => true,
											'height' => true,
											'class' => true,
											'alt' => true,
											'title' => true,
											'id' => true
										)
									)); ?>
								</div>
								<div class="item_info_holder">
									<div class="item_left">
										<a href="<?php echo esc_url(get_permalink( $cart_item['product_id'] )); ?>">
											<?php echo apply_filters('woocommerce_widget_cart_product_title', $_product->get_title(), $_product ); ?>
										</a>
										<span class="quantity"><?php esc_html_e('Quantity: ','pitch'); echo esc_html($cart_item['quantity']); ?>
									</div>
									<div class="item_right">
										<?php echo apply_filters( 'woocommerce_cart_item_price_html', wc_price( $product_price ), $cart_item, $cart_item_key ); ?>
										<?php echo apply_filters( 'woocommerce_cart_item_remove_link', sprintf('<a href="%s" class="remove" title="%s">&times;</a>', esc_url( wc_get_cart_remove_url( $cart_item_key ) ), esc_html__('Remove this item', 'pitch') ), $cart_item_key ); ?>
									</div>
								</div>
							</li>
						<?php endforeach; ?>
							<div class="cart_bottom">
								<div class="subtotal_holder">
									<span class="total"><?php esc_html_e( 'Total', 'pitch' ); ?>:</span>
									<span class="total_amount"><?php wc_cart_totals_subtotal_html(); ?></span>
								</div>
								<div class="btns_holder">
									<a href="<?php echo esc_url( wc_get_cart_url() ); ?>" class="qbutton small view-cart"><?php esc_html_e( 'Shopping Bag', 'pitch' ); ?></a>
									<a href="<?php echo esc_url( wc_get_checkout_url() ); ?>" class="qbutton small checkout"><?php esc_html_e( 'Checkout', 'pitch' ); ?><span class="arrow_right" aria-hidden="true"></span></a>
								</div>
							</div>
					<?php else : ?>
						<li class="empty_cart"><?php esc_html_e( 'No products in the cart.', 'pitch' ); ?></li>
					<?php endif; ?>
				</ul>
			</div>
		</div>
	</div>
	<?php
	$fragments['div.shopping_cart_header'] = ob_get_clean();
	return $fragments;
}
?>
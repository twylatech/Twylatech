<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}

$products_list_type = 'type1';

$product_image_src =  wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full');

$show_hover_image = 'no';
if(pitch_qode_options()->getOptionValue( 'woo_products_enable_item_hover_image' )){
	$show_hover_image = pitch_qode_options()->getOptionValue( 'woo_products_enable_item_hover_image' );
}

$woo_products_enable_lighbox_icon_yes_no = "yes";

if(pitch_qode_options()->getOptionValue( 'woo_products_enable_lighbox_icon' )){
	$woo_products_enable_lighbox_icon_yes_no =  pitch_qode_options()->getOptionValue( 'woo_products_enable_lighbox_icon' );
}

$hide_separator = "no";
if(pitch_qode_options()->getOptionValue( 'woo_products_title_separator_hide_title_separator' )){
	$hide_separator = pitch_qode_options()->getOptionValue( 'woo_products_title_separator_hide_title_separator' );
}

?>

<?php switch($products_list_type) {

	case 'type1': ?>
	<li <?php wc_product_class( '', $product ); ?>>
		<?php do_action( 'woocommerce_before_shop_loop_item' ); ?>
			<div class="top-product-section">
				<a href="<?php the_permalink(); ?>">
					<span class="image-wrapper">
					<?php
						/**
						 * woocommerce_before_shop_loop_item_title hook
						 *
						 * @hooked woocommerce_show_product_loop_sale_flash - 10
						 * @hooked woocommerce_template_loop_product_thumbnail - 10
						 */
						do_action( 'woocommerce_before_shop_loop_item_title' );
					?>
					</span>
					<?php
						if($show_hover_image == 'yes') {
							$product_gallery_images = $product->get_gallery_attachment_ids();
							if ($product_gallery_images) {
								$i = 0;
								foreach ($product_gallery_images as $image) {
									$image_src = wp_get_attachment_url($image);
									if (!$image_src)
										continue;
								$i++;
							?>
								<span class="image-wrapper_hover"><?php echo wp_get_attachment_image( $image, 'full' ) ?></span>
								<?php if ($i == 1) break;
								}
							}
						}
					?>
				</a>
				<div class="product_list_button_holder">
					<?php do_action('pitch_qode_action_woocommerce_after_product_image'); ?>
					<div class="woocommerce_single_product_link_holder">
						<a class="qbutton woocommerce_single_product_link" href="<?php the_permalink(); ?>"><?php esc_html_e( ' View ', 'pitch' ); ?><span class="fa-search"></span> </a>
						<a class="qbutton woocommerce_single_product_link double" href="<?php the_permalink(); ?>"><?php esc_html_e( ' View ', 'pitch' ); ?><span class="fa-search"></span> </a>
					</div>
				</div>
			</div>
			<div class="product_info_box">
				<span class="product-categories">
					<?php $product_id = $product->get_id(); ?>
					<?php echo wp_kses(wc_get_product_category_list($product_id), array(
						'a' => array(
							'href' => true,
							'rel' => true,
							'class' => true,
							'title' => true,
							'id' => true
						)
					)); ?>
				</span>
				<a href="<?php the_permalink(); ?>" class="product-category">
					<span class="product-title"><?php the_title(); ?></span>
				</a>
				<?php if($hide_separator == "no") { ?>
					<div class="separator_holder"><span class="separator medium"></span></div>
				<?php } ?>
				<div class="shop_price_lightbox_holder">
					<?php
						/**
						 * woocommerce_after_shop_loop_item_title hook
						 *
						 * @hooked woocommerce_template_loop_rating - 5
						 * @hooked woocommerce_template_loop_price - 10
						 */
						do_action( 'woocommerce_after_shop_loop_item_title' );
					?>
					<?php if($woo_products_enable_lighbox_icon_yes_no == "yes") { ?>
						<div class="shop_lightbox">
							<a class="product_lightbox" title="<?php echo esc_attr(the_title()); ?>" href="<?php echo esc_url($product_image_src[0]); ?>" data-rel="prettyPhoto[single_pretty_photo]">
								<span class="fa-search"></span>
							</a>
						</div>
					<?php } ?>
				</div>				
			</div>
			<?php do_action( 'woocommerce_after_shop_loop_item' ); ?>
	</li>

<?php break; } ?>

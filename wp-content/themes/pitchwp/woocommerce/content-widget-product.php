<?php
/**
 * The template for displaying product widget entries.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-widget-product.php.
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.5.5
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $product;

if ( ! is_a( $product, 'WC_Product' ) ) {
	return;
}

?>
<li>
    <?php do_action( 'woocommerce_widget_product_item_start', $args ); ?>
   	<div class="product_list_widget_image_wrapper">
		<a href="<?php echo esc_url( get_permalink( $product->get_id() ) ); ?>" title="<?php echo esc_attr( $product->get_title() ); ?>">
			<?php echo pitch_qode_kses_img($product->get_image()); ?>
		</a>
	</div>
	<div class="product_list_widget_info_wrapper">
        <div class ="product_list_widget_category_wrapper">
            <?php
            echo wp_kses(wc_get_product_category_list($product), array(
                'a' => array(
                    'title' => true,
                    'href' => true
                )));
            ?>
        </div>
		<a href="<?php echo esc_url( get_permalink( $product->get_id() ) ); ?>" title="<?php echo esc_attr( $product->get_title() ); ?>">
			<span class="product-title"><?php echo esc_html($product->get_title()); ?></span>
		</a>
		<?php if ( ! empty( $show_rating ) ) : ?>
			<?php echo wc_get_rating_html( $product->get_average_rating() ); // PHPCS:Ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
		<?php endif; ?>
		
		<?php echo wp_kses_post($product->get_price_html()); ?>
	</div>
	
	<?php do_action( 'woocommerce_widget_product_item_end', $args ); ?>
</li>
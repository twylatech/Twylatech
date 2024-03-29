<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
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

$products_info_style_type = "accordions";
if(pitch_qode_options()->getOptionValue( 'woo_products_info_style' )) {
	$products_info_style_type = pitch_qode_options()->getOptionValue( 'woo_products_info_style' );
}

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked wc_print_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>

<div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>

	<div class="single_product_image_wrapper">
		<?php
			/**
			 * woocommerce_before_single_product_summary hook
			 *
			 * @hooked woocommerce_show_product_sale_flash - 10
			 * @hooked woocommerce_show_product_images - 20
			 */
			do_action( 'woocommerce_before_single_product_summary' );
		?>
	</div>	

	<div class="summary entry-summary">
        <div class="clearfix summary-inner">
			<?php
				/**
				 * woocommerce_single_product_summary hook
				 *
				 * @hooked woocommerce_template_single_title - 5
				 * @hooked woocommerce_template_single_price - 10
				 * @hooked woocommerce_template_single_sharing - 15
				 * @hooked woocommerce_template_single_excerpt - 20
				 * @hooked woocommerce_template_single_meta - 30
				 * @hooked woocommerce_template_single_add_to_cart - 40
				 */
				do_action( 'woocommerce_single_product_summary' );
			?>
		</div><!-- .summary-inner -->
		<?php
			if($products_info_style_type == "accordions"){
				do_action( 'woocommerce_after_single_product_summary' );
			}
		?>
	</div><!-- .summary -->	
	<?php
		if($products_info_style_type == "vertical_tabs"){
			do_action( 'woocommerce_after_single_product_summary' );
		}
	?>
	<?php if(pitch_qode_options()->getOptionValue( 'woo_product_single_show_related_products' )=='yes') { ?>
		<?php do_action('pitch_qode_action_woocommerce_related_products' ); ?>
	<?php } ?>
	</div>

<?php do_action( 'woocommerce_after_single_product' ); ?>
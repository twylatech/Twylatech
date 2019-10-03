<?php
/**
 * Product Loop Start
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/loop-start.php.
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

$products_list_type = 'type1';

$products_hover_list_type = 'hover_type1';

$class='';
if($products_list_type == 'type1'){
	$class = 'type1';
}

$hover_class='';
if($products_hover_list_type == 'hover_type1'){
    $hover_class = 'hover_type1';
}

$disable_space = '';
if(pitch_qode_options()->getOptionValue( 'woo_products_disable_space_between_products' )=='yes'){
	$disable_space = "article_no_space";
}

?>
<ul class="products clearfix <?php echo esc_attr($class .' '. $hover_class.' '. $disable_space); ?> columns-<?php echo esc_attr( wc_get_loop_prop( 'columns' ) ); ?>">
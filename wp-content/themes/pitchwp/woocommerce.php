<?php 
/*
Template Name: WooCommerce
*/

$pitch_sidebar = pitch_qode_get_sidebar_layout( false );
?>
	<?php get_header(); ?>
        <?php get_template_part( 'title' ); ?>
		<?php get_template_part('slider'); ?>

		<?php if(pitch_qode_options()->getOptionValue( 'woo_products_enable_full_width_template' )=="yes" && !is_singular('product')){ ?>
			<div class="full_width" <?php pitch_qode_inline_page_background_style(); ?>>
		<?php } else{ ?>	
		<div class="container" <?php pitch_qode_inline_page_background_style(); ?>>
		<?php } ?>	
			
		<?php if(pitch_qode_options()->getOptionValue( 'overlapping_content' ) == 'yes') {?>
			<div class="overlapping_content"><div class="overlapping_content_inner">
		<?php } ?>
		<?php if(pitch_qode_options()->getOptionValue( 'woo_products_enable_full_width_template' )=="yes" && !is_singular('product')){ ?>
			<div class="full_width_inner" <?php pitch_qode_inline_page_padding_style(); ?>>
		<?php } else{ ?>
			<div class="container_inner default_template_holder clearfix" <?php pitch_qode_inline_page_padding_style(); ?>>
		<?php } ?>		
				<?php if(!is_singular('product')) { ?>
					<?php if(($pitch_sidebar == "default")||($pitch_sidebar == "")) : ?>
						<div class="page-decription_holder">
							<?php pitch_qode_woocommerce_content_before(); ?>
						</div>
						<?php pitch_qode_woocommerce_content(); ?>
					<?php elseif($pitch_sidebar == "1" || $pitch_sidebar == "2"): ?>
				<?php pitch_qode_set_number_of_columns_woo_product_list(); ?>
					<?php if(pitch_qode_options()->getOptionValue( 'woocommerce_product_list_content_position' ) == 'content_above_product_list_and_sidebar') { ?>
						<div class="page-decription_holder">
							<?php pitch_qode_woocommerce_content_before(); ?>
						</div>
					<?php }	?>
					<?php if($pitch_sidebar == "1") : ?>						
						<div class="two_columns_66_33 grid2 woocommerce_with_sidebar clearfix">
							<div class="column1">
					<?php elseif($pitch_sidebar == "2") : ?>
						<div class="two_columns_75_25 grid2 woocommerce_with_sidebar clearfix">
							<div class="column1 content_left_from_sidebar">
					<?php endif; ?>
								<div class="column_inner">
									<?php if(pitch_qode_options()->getOptionValue( 'woocommerce_product_list_content_position' ) == 'content_above_product_list') { ?>
											<div class="page-decription_holder">
												<?php pitch_qode_woocommerce_content_before(); ?>
											</div>
									<?php }	?>
									<?php pitch_qode_woocommerce_content(); ?>
								</div>
							</div>
							<div class="column2"><?php get_sidebar();?></div>
						</div>
					<?php elseif($pitch_sidebar == "3" || $pitch_sidebar == "4"): ?>
						<?php pitch_qode_set_number_of_columns_woo_product_list(); ?>
						<?php if(pitch_qode_options()->getOptionValue( 'woocommerce_product_list_content_position' ) == 'content_above_product_list_and_sidebar') { ?>
							<div class="page-decription_holder">
								<?php pitch_qode_woocommerce_content_before(); ?>
							</div>
						<?php }	?>
						<?php if($pitch_sidebar == "3") : ?>
							<div class="two_columns_33_66 grid2 woocommerce_with_sidebar clearfix">
								<div class="column1"><?php get_sidebar();?></div>
								<div class="column2">
						<?php elseif($pitch_sidebar == "4") : ?>
							<div class="two_columns_25_75 grid2 woocommerce_with_sidebar clearfix">
								<div class="column1"><?php get_sidebar();?></div>
								<div class="column2 content_right_from_sidebar">
						<?php endif; ?>
									<div class="column_inner">
										<?php if(pitch_qode_options()->getOptionValue( 'woocommerce_product_list_content_position' ) == 'content_above_product_list') { ?>
											<div class="page-decription_holder">
												<?php pitch_qode_woocommerce_content_before(); ?>
											</div>
										<?php }	?>
										<?php pitch_qode_woocommerce_content(); ?>
									</div>
								</div>
							</div>
					<?php endif; ?>
                <?php } else { 
                      pitch_qode_woocommerce_content();
                } ?>
			</div>
			<?php if(pitch_qode_options()->getOptionValue( 'overlapping_content' ) == 'yes') {?>
				</div></div>
			<?php } ?>
		</div>
	<?php get_footer(); ?>
<?php
get_header();

$pitch_sidebar = pitch_qode_get_sidebar_layout();
?>
		<?php get_template_part( 'title' ); ?>
		<?php if(pitch_qode_options()->getOptionValue( 'blog_style' ) == 'blog_masonry_full_width'){
			$blog_style_class = ' blog_masonry_full_width_template';
			?>
			<div class="full_width <?php echo esc_attr($blog_style_class)?> ">
				<div class="full_width_inner">
					<?php
					get_template_part('templates/blog/blog-structure', 'loop');
					?>
				</div>
			</div>

		<?php } else { ?>
		<div class="container">
		<?php if(pitch_qode_options()->getOptionValue( 'overlapping_content' ) == 'yes') {?>
			<div class="overlapping_content"><div class="overlapping_content_inner">
		<?php } ?>
			<div class="container_inner default_template_holder clearfix">
				<?php if(($pitch_sidebar == "default")||($pitch_sidebar == "")) : ?>
					<?php 
						get_template_part('templates/blog/blog', 'structure');
					?>
				<?php elseif($pitch_sidebar == "1" || $pitch_sidebar == "2"): ?>
					<div class="<?php if($pitch_sidebar == "1"):?>two_columns_66_33<?php elseif($pitch_sidebar == "2") : ?>two_columns_75_25<?php endif; ?> background_color_sidebar grid2 clearfix">
						<div class="column1 content_left_from_sidebar">
							<div class="column_inner">
								<?php 
									get_template_part('templates/blog/blog', 'structure');
								?>
							</div>
						</div>
						<div class="column2">
							<?php get_sidebar(); ?>	
						</div>
					</div>
			<?php elseif($pitch_sidebar == "3" || $pitch_sidebar == "4"): ?>
					<div class="<?php if($pitch_sidebar == "3"):?>two_columns_33_66<?php elseif($pitch_sidebar == "4") : ?>two_columns_25_75<?php endif; ?> background_color_sidebar grid2 clearfix">
						<div class="column1">
						<?php get_sidebar(); ?>	
						</div>
						<div class="column2 content_right_from_sidebar">
							<div class="column_inner">
								<?php 
									get_template_part('templates/blog/blog', 'structure');
								?>
							</div>
						</div>
					</div>
				<?php endif; ?>
			</div>
			<?php if(pitch_qode_options()->getOptionValue( 'overlapping_content' ) == 'yes') {?>
				</div></div>
			<?php } ?>
		</div>
		<?php } ?>
<?php get_footer(); ?>
<?php
/*
Template Name: Blog Masonry
*/

get_header();

$pitch_sidebar = pitch_qode_get_sidebar_layout();

$blog_content_position = "content_above_blog_list";
if(pitch_qode_options()->getOptionValue( 'blog_masonry_content_position' )){
	$blog_content_position = pitch_qode_options()->getOptionValue( 'blog_masonry_content_position' );
}

if(pitch_qode_options()->getOptionValue( 'blog_masonry_number_of_chars' ) != "") {
	pitch_qode_set_blog_word_count(esc_attr(pitch_qode_options()->getOptionValue( 'blog_masonry_number_of_chars' )));
}
?>
	<?php get_template_part( 'title' ); ?>
	<?php get_template_part('slider'); ?>
	<div class="container" <?php pitch_qode_inline_page_background_style(); ?>>
		<?php if(pitch_qode_options()->getOptionValue( 'overlapping_content' ) == 'yes') {?>
			<div class="overlapping_content"><div class="overlapping_content_inner">
		<?php } ?>
		<div class="container_inner default_template_holder clearfix" <?php pitch_qode_inline_page_padding_style(); ?>>
			<?php if(($pitch_sidebar == "default")||($pitch_sidebar == "")) : ?>
				<?php
					echo pitch_qode_get_blog_content_part();
					get_template_part('templates/blog/blog', 'structure');
				?>
			<?php elseif($pitch_sidebar == "1" || $pitch_sidebar == "2"): ?>
				<?php
					if($blog_content_position != "content_above_blog_list"){
						echo pitch_qode_get_blog_content_part();
					}
				?>
				<div class="<?php if($pitch_sidebar == "1"):?>two_columns_66_33<?php elseif($pitch_sidebar == "2") : ?>two_columns_75_25<?php endif; ?> clearfix grid2 background_color_sidebar">
					<div class="column1 content_left_from_sidebar">
						<div class="column_inner">
							<?php
							if($blog_content_position == "content_above_blog_list"){
								echo pitch_qode_get_blog_content_part();
							}
							get_template_part('templates/blog/blog', 'structure');
							?>
						</div>
					</div>
					<div class="column2">
						<?php get_sidebar(); ?>
					</div>
				</div>
			<?php elseif($pitch_sidebar == "3" || $pitch_sidebar == "4"): ?>
				<?php
					if($blog_content_position != "content_above_blog_list"){
						echo pitch_qode_get_blog_content_part();
					}
				?>
				<div class="<?php if($pitch_sidebar == "3"):?>two_columns_33_66<?php elseif($pitch_sidebar == "4") : ?>two_columns_25_75<?php endif; ?> grid2 clearfix background_color_sidebar">
					<div class="column1">
						<?php get_sidebar(); ?>
					</div>
					<div class="column2 content_right_from_sidebar">
						<div class="column_inner">
							<?php
								if($blog_content_position == "content_above_blog_list"){
									echo pitch_qode_get_blog_content_part();
								}
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
<?php get_footer(); ?>
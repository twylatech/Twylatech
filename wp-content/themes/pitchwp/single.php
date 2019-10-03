<?php

$pitch_sidebar = pitch_qode_get_sidebar_layout( false );

$blog_single_show_comments = "";
if (pitch_qode_options()->getOptionValue( 'blog_single_show_comments' ))
	$blog_single_show_comments = pitch_qode_options()->getOptionValue( 'blog_single_show_comments' );


$blog_single_loop = "blog_standard_type";
if (pitch_qode_options()->getOptionValue( 'blog_single_style' ) !=="") {
    $blog_single_loop = pitch_qode_options()->getOptionValue( 'blog_single_style' );
}

$gallery_position = "above_post_content";
if(get_post_meta(get_the_ID(), "gallery_position", true) !== ""){
	$gallery_position = get_post_meta(get_the_ID(), "gallery_position", true);
}

?>
<?php get_header(); ?>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
		<?php get_template_part( 'title' ); ?>
		<?php get_template_part('slider'); ?>

		<div class="container" <?php pitch_qode_inline_page_background_style(); ?>>
		<?php if(pitch_qode_options()->getOptionValue( 'overlapping_content' ) == 'yes') {?>
			<div class="overlapping_content"><div class="overlapping_content_inner">
		<?php } ?>
			<div class="container_inner default_template_holder" <?php pitch_qode_inline_page_padding_style(); ?>>

			<?php if(($pitch_sidebar == "default")||($pitch_sidebar == "")) : ?>
				<div class="blog_holder blog_single <?php echo esc_attr($blog_single_loop )?>">
				<?php
					get_template_part('templates/blog/blog_single', 'loop');
				?>
				<?php
					if($blog_single_show_comments == "yes"){
						comments_template('', true);
					}else{
						echo "<br/><br/>";
					}
				?>

			<?php elseif($pitch_sidebar == "1" || $pitch_sidebar == "2"): ?>
				<?php if($gallery_position == "above_post_content_and_sidebar"){
					get_template_part('templates/blog/parts/post-format-gallery-slider');
				}?>	
				<?php if($pitch_sidebar == "1") : ?>
					<div class="two_columns_66_33 background_color_sidebar grid2 clearfix">
					<div class="column1 content_left_from_sidebar">
				<?php elseif($pitch_sidebar == "2") : ?>
					<div class="two_columns_75_25 background_color_sidebar grid2 clearfix">
						<div class="column1 content_left_from_sidebar">
				<?php endif; ?>

							<div class="column_inner">
								<div class="blog_holder blog_single <?php echo esc_attr($blog_single_loop )?>">
									<?php
										get_template_part('templates/blog/blog_single', 'loop');
									?>
								</div>

								<?php
									if($blog_single_show_comments == "yes"){
										comments_template('', true);
									}else{
										echo "<br/><br/>";
									}
								?>
							</div>
						</div>
						<div class="column2">
							<?php get_sidebar(); ?>
						</div>
					</div>
				<?php elseif($pitch_sidebar == "3" || $pitch_sidebar == "4"): ?>
					<?php if($gallery_position == "above_post_content_and_sidebar"){
						get_template_part('templates/blog/parts/post-format-gallery-slider');
					}?>	
					<?php if($pitch_sidebar == "3") : ?>
						<div class="two_columns_33_66 background_color_sidebar grid2 clearfix">
						<div class="column1">
							<?php get_sidebar(); ?>
						</div>
						<div class="column2 content_right_from_sidebar">
					<?php elseif($pitch_sidebar == "4") : ?>
						<div class="two_columns_25_75 background_color_sidebar grid2 clearfix">
							<div class="column1">
								<?php get_sidebar(); ?>
							</div>
							<div class="column2 content_right_from_sidebar">
					<?php endif; ?>

								<div class="column_inner">
									<div class="blog_holder blog_single <?php echo esc_attr($blog_single_loop); ?>">
										<?php
											get_template_part('templates/blog/blog_single', 'loop');
										?>
									</div>
									<?php
										if($blog_single_show_comments == "yes"){
											comments_template('', true);
										}else{
											echo "<br/><br/>";
										}
									?>
								</div>
							</div>

						</div>
				<?php endif; ?>
			</div>
		</div>
		<?php if(pitch_qode_options()->getOptionValue( 'overlapping_content' ) == 'yes') {?>
			</div></div>
		<?php } ?>
	</div>
<?php endwhile; ?>
<?php endif; ?>	


<?php get_footer(); ?>	
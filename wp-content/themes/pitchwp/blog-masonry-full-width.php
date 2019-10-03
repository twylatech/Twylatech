<?php
/*
Template Name: Blog Masonry Full Width
*/

get_header();

if(pitch_qode_options()->getOptionValue( 'blog_masonry_number_of_chars' ) != "") {
	pitch_qode_set_blog_word_count(esc_attr(pitch_qode_options()->getOptionValue( 'blog_masonry_number_of_chars' )));
}

$container_inner_class = "";
if(pitch_qode_options()->getOptionValue( 'blog_masonry_filter' ) == "yes"){
	$container_inner_class = " full_page_container_inner";
}
?>
	<?php get_template_part( 'title' ); ?>
	<?php get_template_part('slider'); ?>
	<div class="full_width" <?php pitch_qode_inline_page_background_style(); ?>>
		<div class="full_width_inner clearfix <?php echo esc_attr($container_inner_class); ?>" <?php pitch_qode_inline_page_padding_style(); ?>>
			<?php
				echo pitch_qode_get_blog_content_part();
				get_template_part('templates/blog/blog', 'structure');
			?>
		</div>
	</div>
<?php get_footer(); ?>
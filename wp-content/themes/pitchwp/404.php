<?php get_header(); ?>
	<?php get_template_part( 'title' ); ?>
	<div class="container">
	<?php if(pitch_qode_options()->getOptionValue( 'overlapping_content' ) == 'yes') {?>
		<div class="overlapping_content"><div class="overlapping_content_inner">
	<?php } ?>
		<div class="container_inner q_404_page default_template_holder">
			<div class="page_not_found">
				<h2><?php if(pitch_qode_options()->getOptionValue( '404_title' ) != ""): echo esc_html(pitch_qode_options()->getOptionValue( '404_title' )); else: ?> <?php esc_html_e('Page you are looking is Not Found', 'pitch'); ?> <?php endif;?></h2>
                <h4><?php if(pitch_qode_options()->getOptionValue( '404_text' ) != ""): echo esc_html(pitch_qode_options()->getOptionValue( '404_text' )); else: ?> <?php esc_html_e('The page you are looking for does not exist. It may have been moved, or removed altogether. Perhaps you can return back to the site\'s homepage and see if you can find what you are looking for.', 'pitch'); ?> <?php endif;?></h4>
				<a class="qbutton with-shadow" href="<?php echo esc_url( home_url( '/' )); ?>"><?php if(pitch_qode_options()->getOptionValue( '404_backlabel' ) != ""): echo esc_html(pitch_qode_options()->getOptionValue( '404_backlabel' )); else: ?> <?php esc_html_e('Back to homepage', 'pitch'); ?> <?php endif;?></a>
			</div>
		</div>
		<?php if(pitch_qode_options()->getOptionValue( 'overlapping_content' ) == 'yes') {?>
				</div></div>
		<?php } ?>
	</div>
<?php get_footer(); ?>
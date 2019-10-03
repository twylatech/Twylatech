<?php
//init variables
$id 						= pitch_qode_get_page_id();

//get current portfolio template
$portfolio_template = 'floating-right';
if(get_post_meta($id, "qode_choose-portfolio-single-view", true) != "") {
	$portfolio_template = get_post_meta($id, "qode_choose-portfolio-single-view", true);
} elseif(pitch_qode_options()->getOptionValue( 'portfolio_style' ) !== '') {
	$portfolio_template = pitch_qode_options()->getOptionValue( 'portfolio_style' );
}

//get current portfolio template
$portfolio_image_animation = '';
if(get_post_meta($id, "qode_portfolio-enable_animation", true) == "yes") {
	$portfolio_image_animation = ' animate';
} 

if((get_post_meta($id, "qode_portfolio-enable_animation", true) == "") && (pitch_qode_options()->getOptionValue( 'portfolio_enable_animation' )) && (pitch_qode_options()->getOptionValue( 'portfolio_enable_animation' )=="yes")) {
	$portfolio_image_animation = ' animate';
} 

?>
<div class="full_width" <?php pitch_qode_inline_page_background_style(); ?>>
	<div class="full_width_inner" <?php pitch_qode_inline_page_padding_style(); ?>>
		<div class="portfolio_single <?php echo esc_attr($portfolio_image_animation); ?> <?php echo esc_attr($portfolio_template); ?>">
			<?php
				if (post_password_required()) {
					echo get_the_password_form();
				} else {
					//load proper portfolio file based on portfolio template
					get_template_part('templates/portfolio/portfolio', $portfolio_template);

					get_template_part('templates/portfolio/parts/portfolio-related-projects');

					get_template_part('templates/portfolio/parts/portfolio-navigation');

					get_template_part('templates/portfolio/parts/portfolio-comments');
				}
			?>
		</div> <!-- close div.portfolio single -->
	</div> <!-- close div.container inner -->
</div> <!-- close div.container -->
<?php

$portfolio_title_tag            = 'h3';
$portfolio_title_style          = '';

//set title tag
if (!empty(pitch_qode_options()->getOptionValue( 'portfolio_title_tag' ))) {
$portfolio_title_tag = pitch_qode_options()->getOptionValue( 'portfolio_title_tag' );
}

//set style for title
if ((pitch_qode_options()->getOptionValue( 'portfolio_title_margin_bottom' ) != '')
	|| (!empty(pitch_qode_options()->getOptionValue( 'portfolio_title_color' )))){

	if (pitch_qode_options()->getOptionValue( 'portfolio_title_margin_bottom' ) != '') {
		$portfolio_title_style .= 'margin-bottom:'.esc_attr(pitch_qode_options()->getOptionValue( 'portfolio_title_margin_bottom' )).'px;';
	}

	if (!empty(pitch_qode_options()->getOptionValue( 'portfolio_title_color' ))) {
		$portfolio_title_style .= 'color:'.esc_attr(pitch_qode_options()->getOptionValue( 'portfolio_title_color' )).';';
	}

}

//check if title is hidden in info section
$portfolio_hide_title = false;
if(get_post_meta($id, "qode_portfolio_hide_title_in_info", true) == "yes") {
	$portfolio_hide_title = true;
}

if(!$portfolio_hide_title) { ?>
	<<?php echo esc_attr($portfolio_title_tag); ?> class="portfolio_single_text_title" <?php pitch_qode_inline_style($portfolio_title_style); ?>><span><?php the_title(); ?></span></<?php echo esc_attr($portfolio_title_tag); ?>>
<?php } ?>

<div class="info portfolio_single_content">
	<?php the_content(); ?>
</div> <!-- close div.portfolio_content -->
<?php

//get portfolio date value
$portfolio_hide_date = "";
if(pitch_qode_options()->getOptionValue( 'portfolio_hide_date' )){
	$portfolio_hide_date = pitch_qode_options()->getOptionValue( 'portfolio_hide_date' );
}

if($portfolio_hide_date != "yes"){

    $portfolio_info_tag             = 'h6';
    $portfolio_info_style           = '';

    //set info tag
    if (pitch_qode_options()->getOptionValue( 'portfolio_info_tag' )) {
    	$portfolio_info_tag = pitch_qode_options()->getOptionValue( 'portfolio_info_tag' );
    }

    //set style for info
    if ((pitch_qode_options()->getOptionValue( 'portfolio_info_margin_bottom' ) != '')
    || (!empty(pitch_qode_options()->getOptionValue( 'portfolio_info_color' )))) {

		if (pitch_qode_options()->getOptionValue( 'portfolio_info_margin_bottom' ) != '') {
			$portfolio_info_style .= 'margin-bottom:' . esc_attr(pitch_qode_options()->getOptionValue( 'portfolio_info_margin_bottom' )) . 'px;';
		}

		if (!empty(pitch_qode_options()->getOptionValue( 'portfolio_info_color' ))) {
			$portfolio_info_style .= 'color:'.esc_attr(pitch_qode_options()->getOptionValue( 'portfolio_info_color' )).';';
		}

    }

   ?>


	<div class="info portfolio_single_custom_date">
		<<?php echo esc_attr($portfolio_info_tag); ?> class="info_section_title" <?php pitch_qode_inline_style($portfolio_info_style); ?>><?php esc_html_e('Date:','pitch'); ?></<?php echo esc_attr($portfolio_info_tag); ?>>
        <p><?php the_time(get_option('date_format')); ?></p>
	</div>
<?php } ?>
<?php

if(pitch_qode_options()->getOptionValue( 'enable_social_sidebar' ) == 'yes') {
	$icons_param_array = array();

	if(pitch_qode_options()->getOptionValue( 'social_sidebar_icon_pack' ) !== '' ) {
		$icon_pack = "icon_pack='".pitch_qode_options()->getOptionValue( 'social_sidebar_icon_pack' )."'";

		$collection_obj = pitch_qode_icon_collections()->getIconCollection(pitch_qode_options()->getOptionValue( 'social_sidebar_icon_pack' ));

		if(property_exists($collection_obj, 'param')) {
			$icon_param = $collection_obj->param;
		}
	}

	if(pitch_qode_options()->getOptionValue( 'social_sidebar_icon_style' ) !== '') {
		$icons_param_array[] = "type='".pitch_qode_options()->getOptionValue( 'social_sidebar_icon_style' )."'";
	}
	if(pitch_qode_options()->getOptionValue( 'social_sidebar_icon_size' ) !== '') {
		$icons_param_array[] = "custom_size='".esc_attr(pitch_qode_options()->getOptionValue( 'social_sidebar_icon_size' ))."'";
	}
	else{
		$icons_param_array[] = "custom_size='20'";
	}
	if(pitch_qode_options()->getOptionValue( 'social_sidebar_icon_shape_size' ) !== '') {
		$icons_param_array[] = "shape_size='".esc_attr(pitch_qode_options()->getOptionValue( 'social_sidebar_icon_shape_size' ))."'";
	}
	if(pitch_qode_options()->getOptionValue( 'social_sidebar_icon_color' )){
		$icons_param_array[] = "icon_color='".esc_attr(pitch_qode_options()->getOptionValue( 'social_sidebar_icon_color' ))."'";
	}
	if(pitch_qode_options()->getOptionValue( 'social_sidebar_icon_hover_color' )){
		$icons_param_array[] = "hover_icon_color='".esc_attr(pitch_qode_options()->getOptionValue( 'social_sidebar_icon_hover_color' ))."'";
	}
	if(pitch_qode_options()->getOptionValue( 'social_sidebar_icon_background_color' )){
		$icons_param_array[] = "background_color='".esc_attr(pitch_qode_options()->getOptionValue( 'social_sidebar_icon_background_color' ))."'";
	}
	if(pitch_qode_options()->getOptionValue( 'social_sidebar_icon_background_hover_color' )){
		$icons_param_array[] = "hover_background_color='".esc_attr(pitch_qode_options()->getOptionValue( 'social_sidebar_icon_background_hover_color' ))."'";
	}
	if(pitch_qode_options()->getOptionValue( 'social_sidebar_icon_border_color' )){
		$icons_param_array[] = "border_color='".esc_attr(pitch_qode_options()->getOptionValue( 'social_sidebar_icon_border_color' ))."'";
	}
	if(pitch_qode_options()->getOptionValue( 'social_sidebar_icon_border_hover_color' )){
		$icons_param_array[] = "hover_border_color='".esc_attr(pitch_qode_options()->getOptionValue( 'social_sidebar_icon_border_hover_color' ))."'";
	}
	if(pitch_qode_options()->getOptionValue( 'social_sidebar_icon_border_width' ) !== '') {
		$icons_param_array[] = "border_width='".esc_attr(pitch_qode_options()->getOptionValue( 'social_sidebar_icon_border_width' ))."'";
	}
	$icons_param_array[] = "target='_self'";

	?>
	<div id="social_icons_widget">
		<div class="social_icons_widget_inner">
			<?php
			if(pitch_qode_options()->getOptionValue( 'social_sidebar_facebook_icon' ) == 'yes') {
				$icon = pitch_qode_icon_collections()->getFacebookIcon(pitch_qode_options()->getOptionValue( 'social_sidebar_icon_pack' ));
				$social_link = "#";
				if(pitch_qode_options()->getOptionValue( 'social_sidebar_facebook_icon_link' ) !== ''){
					$social_link = esc_url(pitch_qode_options()->getOptionValue( 'social_sidebar_facebook_icon_link' ));
				}
				?> <div class="q_social_icon_holder"> <?php
					echo do_shortcode('[no_icons '.$icon_pack.' '.$icon_param.'="'.$icon.'" link="'.$social_link.'" '.implode(' ', $icons_param_array).']'); // XSS OK
					?> </div> <?php
			}
			if(pitch_qode_options()->getOptionValue( 'social_sidebar_twitter_icon' ) == 'yes') {
				$icon = pitch_qode_icon_collections()->getTwitterIcon(pitch_qode_options()->getOptionValue( 'social_sidebar_icon_pack' ));
				$social_link = "#";
				if(pitch_qode_options()->getOptionValue( 'social_sidebar_twitter_icon_link' ) !== ''){
					$social_link = esc_url(pitch_qode_options()->getOptionValue( 'social_sidebar_twitter_icon_link' ));
				}
				?> <div class="q_social_icon_holder"> <?php
					echo do_shortcode('[no_icons '.$icon_pack.' '.$icon_param.'="'.$icon.'" link="'.$social_link.'" '.implode(' ', $icons_param_array).']'); // XSS OK
					?> </div> <?php
			}
			if(pitch_qode_options()->getOptionValue( 'social_sidebar_google_plus_icon' ) == 'yes') {
				$icon = pitch_qode_icon_collections()->getGooglePlusIcon(pitch_qode_options()->getOptionValue( 'social_sidebar_icon_pack' ));
				$social_link = "#";
				if(pitch_qode_options()->getOptionValue( 'social_sidebar_google_plus_icon_link' ) !== ''){
					$social_link = esc_url(pitch_qode_options()->getOptionValue( 'social_sidebar_google_plus_icon_link' ));
				}
				?> <div class="q_social_icon_holder"> <?php
					echo do_shortcode('[no_icons '.$icon_pack.' '.$icon_param.'="'.$icon.'" link="'.$social_link.'" '.implode(' ', $icons_param_array).']'); // XSS OK
					?> </div> <?php
			}
			if(pitch_qode_options()->getOptionValue( 'social_sidebar_linkedIn_icon' ) == 'yes') {
				$icon = pitch_qode_icon_collections()->getLinkedInIcon(pitch_qode_options()->getOptionValue( 'social_sidebar_icon_pack' ));
				$social_link = "#";
				if(pitch_qode_options()->getOptionValue( 'social_sidebar_linkedIn_icon_link' ) !== ''){
					$social_link = esc_url(pitch_qode_options()->getOptionValue( 'social_sidebar_linkedIn_icon_link' ));
				}
				?> <div class="q_social_icon_holder"> <?php
					echo do_shortcode('[no_icons '.$icon_pack.' '.$icon_param.'="'.$icon.'" link="'.$social_link.'" '.implode(' ', $icons_param_array).']'); // XSS OK
					?> </div> <?php
			}
			if(pitch_qode_options()->getOptionValue( 'social_sidebar_tumblr_icon' ) == 'yes') {
				$icon = pitch_qode_icon_collections()->getTumblrIcon(pitch_qode_options()->getOptionValue( 'social_sidebar_icon_pack' ));
				$social_link = "#";
				if(pitch_qode_options()->getOptionValue( 'social_sidebar_tumblr_icon_link' ) !== ''){
					$social_link = esc_url(pitch_qode_options()->getOptionValue( 'social_sidebar_tumblr_icon_link' ));
				}
				?> <div class="q_social_icon_holder"> <?php
					echo do_shortcode('[no_icons '.$icon_pack.' '.$icon_param.'="'.$icon.'" link="'.$social_link.'" '.implode(' ', $icons_param_array).']'); // XSS OK
					?> </div> <?php
			}
			if(pitch_qode_options()->getOptionValue( 'social_sidebar_pinterest_icon' ) == 'yes') {
				$icon = pitch_qode_icon_collections()->getPinterestIcon(pitch_qode_options()->getOptionValue( 'social_sidebar_icon_pack' ));
				$social_link = "#";
				if(pitch_qode_options()->getOptionValue( 'social_sidebar_pinterest_icon_link' ) !== ''){
					$social_link = esc_url(pitch_qode_options()->getOptionValue( 'social_sidebar_pinterest_icon_link' ));
				}
				?> <div class="q_social_icon_holder"> <?php
					echo do_shortcode('[no_icons '.$icon_pack.' '.$icon_param.'="'.$icon.'" link="'.$social_link.'" '.implode(' ', $icons_param_array).']'); // XSS OK
					?> </div> <?php
			}
			if (pitch_qode_options()->getOptionValue( 'social_sidebar_vk_icon' ) == 'yes') {
				$social_link = "#";
				if (pitch_qode_options()->getOptionValue( 'social_sidebar_vk_icon_link' ) !== '') {
					$social_link = esc_url(pitch_qode_options()->getOptionValue( 'social_sidebar_vk_icon_link' ));
				}
				?>
				<div class="q_social_icon_holder"> <?php
					echo do_shortcode('[no_icons icon_pack="font_awesome" fa_icon="fa-vk" link="' . $social_link . '" ' . implode(' ', $icons_param_array) . ']'); // XSS OK
					?> </div> <?php
			}
			?>
		</div>
	</div>
<?php } ?>
<?php if(pitch_qode_options()->getOptionValue( 'enable_social_share' ) == "yes") { ?>
	<div class="portfolio_social_holder">
		<?php echo do_shortcode('[no_social_share_list]'); // XSS OK ?>
	</div> <!-- close div.portfolio_social_holder -->
<?php } ?>
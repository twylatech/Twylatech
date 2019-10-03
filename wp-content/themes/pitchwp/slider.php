<?php
$pitch_slider_shortcode = get_post_meta( $id, "qode_revolution-slider", true );

if ( ! empty( $pitch_slider_shortcode ) ) { ?>
	<div class="q_slider">
		<div class="q_slider_inner">
			<?php echo do_shortcode( wp_kses_post( $pitch_slider_shortcode ) ); // XSS OK ?>
		</div>
	</div>
<?php } ?>
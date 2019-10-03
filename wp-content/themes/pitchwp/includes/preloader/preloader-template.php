<?php

$loading_image = "";
if ( pitch_qode_options()->getOptionValue( 'loading_image' ) ) {
	$loading_image = pitch_qode_options()->getOptionValue( 'loading_image' );
}

if ( pitch_qode_options()->getOptionValue( 'loading_animation' ) == "on" ) { ?>
	<div class="ajax_loader">
		<div class="ajax_loader_1">
			<?php if ( ! empty( $loading_image ) ) { ?>
				<div class="ajax_loader_2"><img src="<?php echo esc_url( $loading_image ); ?>" alt="<?php esc_attr_e( 'Preloader image', 'pitch' ); ?>"/></div>
			<?php } else {
				pitch_qode_loading_spinners();
			} ?>
		</div>
	</div>
<?php }
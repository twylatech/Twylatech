<?php
$qode_page_id = pitch_qode_get_page_id();

//is content bottom area enabled for current page?
$content_bottom_area = "yes";
if ( get_post_meta( $qode_page_id, "qode_enable_content_bottom_area", true ) != "" ) {
	$content_bottom_area = get_post_meta( $qode_page_id, "qode_enable_content_bottom_area", true );
} elseif ( pitch_qode_options()->getOptionValue( 'enable_content_bottom_area' ) ) {
	$content_bottom_area = pitch_qode_options()->getOptionValue( 'enable_content_bottom_area' );
}

//is sidebar chosen for content bottom area for current page?
$content_bottom_area_sidebar = "";
if ( get_post_meta( $qode_page_id, 'qode_choose_content_bottom_sidebar', true ) != "" ) {
	$content_bottom_area_sidebar = get_post_meta( $qode_page_id, 'qode_choose_content_bottom_sidebar', true );
} elseif ( pitch_qode_options()->getOptionValue( 'content_bottom_sidebar_custom_display' ) ) {
	$content_bottom_area_sidebar = pitch_qode_options()->getOptionValue( 'content_bottom_sidebar_custom_display' );
}

//is content bottom area enabled?
if ( $content_bottom_area == 'yes' && is_active_sidebar( $content_bottom_area_sidebar ) ) {
	
	//take content bottom area in grid option for current page if set or from theme options otherwise
	$content_bottom_area_in_grid = true;
	if ( get_post_meta( $qode_page_id, 'qode_content_bottom_sidebar_in_grid', true ) != "" ) {
		$content_bottom_area_in_grid = get_post_meta( $qode_page_id, 'qode_content_bottom_sidebar_in_grid', true );
	} elseif ( pitch_qode_options()->getOptionValue( 'content_bottom_in_grid' ) ) {
		$content_bottom_area_in_grid = pitch_qode_options()->getOptionValue( 'content_bottom_in_grid' );
	}
	
	//is background color for content bottom area set for current page
	$content_bottom_background_color = '';
	if ( get_post_meta( $qode_page_id, "qode_content_bottom_background_color", true ) != "" ) {
		$content_bottom_background_color = 'background-color: ' . esc_attr( get_post_meta( $qode_page_id, "qode_content_bottom_background_color", true ) );
	} ?>
	
	<div class="content_bottom" <?php pitch_qode_inline_style( $content_bottom_background_color ); ?>>
		<?php if ( $content_bottom_area_in_grid == 'yes' ){ ?>
		<div class="container">
			<div class="container_inner clearfix">
				<?php } ?>
				<?php dynamic_sidebar( $content_bottom_area_sidebar ); ?>
				<?php if ( $content_bottom_area_in_grid == 'yes' ){ ?>
			</div>
		</div>
	<?php } ?>
	</div>
<?php } ?>
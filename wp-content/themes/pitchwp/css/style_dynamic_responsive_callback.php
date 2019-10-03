<?php
$root = dirname( dirname( dirname( dirname( dirname( __FILE__ ) ) ) ) );
if ( file_exists( $root . '/wp-load.php' ) ) {
	require_once( $root . '/wp-load.php' );
} else {
	$root = dirname( dirname( dirname( dirname( dirname( dirname( __FILE__ ) ) ) ) ) );
	if ( file_exists( $root . '/wp-load.php' ) ) {
		require_once( $root . '/wp-load.php' );
	}
}
header( "Content-type: text/css; charset=utf-8" );
?>
@media only screen and (max-width: 1000px){
	
	<?php if (pitch_qode_options()->getOptionValue( 'header_background_color' )) { ?>
	.header_bottom {
		background-color: <?php echo esc_attr(pitch_qode_options()->getOptionValue( 'header_background_color' ));  ?>;
	}
	<?php } ?>
	<?php if (pitch_qode_options()->getOptionValue( 'mobile_background_color' )) { ?>
		.header_bottom,
		nav.mobile_menu{
				background-color: <?php echo esc_attr(pitch_qode_options()->getOptionValue( 'mobile_background_color' ));  ?> !important;
		}
	<?php } ?>
	
	 <?php if ((pitch_qode_options()->getOptionValue( 'page_subtitle_fontsize' )) < 28 && (pitch_qode_options()->getOptionValue( 'page_subtitle_fontsize' )) !== '') { ?>
		.subtitle{
			font-size: <?php echo esc_attr(pitch_qode_options()->getOptionValue( 'page_subtitle_fontsize' )) *0.8;  ?>px;
		}
	 <?php }?>
		
	<?php if((pitch_qode_options()->getOptionValue( 'h1_fontsize' ))>80) { ?>
		.title h1,
		.title h1.title_like_separator .vc_text_separator.full .separator_content{
			font-size:<?php echo esc_attr(pitch_qode_options()->getOptionValue( 'h1_fontsize' ))*0.8; ?>px;
		}
	<?php } ?>
	<?php if((pitch_qode_options()->getOptionValue( 'page_title_fontsize' ))>80) { ?>
		.title h1,
		.title h1.title_like_separator .vc_text_separator.full .separator_content{
			font-size:<?php echo esc_attr(pitch_qode_options()->getOptionValue( 'page_title_fontsize' ))*0.8; ?>px;
		}
	<?php } ?>
	<?php if((pitch_qode_options()->getOptionValue( 'h2_fontsize' ))>70) { ?>
		.content h2{
			font-size:<?php echo esc_attr(pitch_qode_options()->getOptionValue( 'h2_fontsize' ))*0.8; ?>px;
		}
	<?php } ?>
	<?php if((pitch_qode_options()->getOptionValue( 'h2_lineheight' ))>70) { ?>
		.content h2{
			line-height: 1.3em;
		}
	<?php } ?>
	<?php if((pitch_qode_options()->getOptionValue( 'h3_fontsize' ))>70) { ?>
		.content h3{
			font-size:<?php echo esc_attr(pitch_qode_options()->getOptionValue( 'h3_fontsize' ))*0.8; ?>px;
		}
	<?php } ?>
	<?php if((pitch_qode_options()->getOptionValue( 'h4_fontsize' ))>70) { ?>
		.content h4:not(.blockquote_text){
			font-size:<?php echo esc_attr(pitch_qode_options()->getOptionValue( 'h4_fontsize' ))*0.8; ?>px;
		}
	<?php } ?>
	<?php if((pitch_qode_options()->getOptionValue( 'h5_fontsize' ))>70) { ?>
		.content h5{
			font-size:<?php echo esc_attr(pitch_qode_options()->getOptionValue( 'h5_fontsize' ))*0.8; ?>px;
		}
	<?php } ?>
	<?php if((pitch_qode_options()->getOptionValue( 'h6_fontsize' ))>70) { ?>
		.content h6{
			font-size:<?php echo esc_attr(pitch_qode_options()->getOptionValue( 'h6_fontsize' ))*0.8; ?>px;
		}
	<?php } ?>

	<?php if(pitch_qode_options()->getOptionValue( 'portfolio_list_filter_height' ) !== '') { ?>
		.filter_outer.filter_portfolio{
			line-height: 2em;
		}
	<?php } ?>
}

@media only screen and (min-width: 480px) and (max-width: 768px){

<?php if(pitch_qode_options()->getOptionValue( 'overlapping_content' ) == 'yes' && pitch_qode_options()->getOptionValue( 'overlapping_top_content_amount' ) > 30){ ?>
    .overlapping_content .content .content_inner > .container .overlapping_content,
    .overlapping_content .content .content_inner > .full_width .full_width_inner{
    margin-top: -30px;
    }

    .overlapping_content .title .title_holder .container{
    padding-bottom: 30px;
    }

    .animate_overlapping_content .overlapping_content,
    .animate_overlapping_content .full_width {
    -webkit-transform: translateY(30px);
    transform: translateY(30px);
    }
<?php }	?>
}

@media only screen and (min-width: 600px) and (max-width: 768px){
	<?php if(pitch_qode_options()->getOptionValue( 'h1_fontsize' ) != '') {
		$title_font_size = pitch_qode_options()->getOptionValue( 'h1_fontsize' );
		if ((pitch_qode_options()->getOptionValue( 'h1_fontsize' ))>80) {
			$title_font_size *= 0.5;
		}
		elseif ((pitch_qode_options()->getOptionValue( 'h1_fontsize' ))>65) {
		 	$title_font_size *= 0.6;
		}
		elseif ((pitch_qode_options()->getOptionValue( 'h1_fontsize' ))>50) {
		 	$title_font_size *= 0.7;
		}
		elseif ((pitch_qode_options()->getOptionValue( 'h1_fontsize' ))>35) {
		 	$title_font_size *= 0.8;
		} ?>
		.title h1,
		.title h1.title_like_separator .vc_text_separator.full .separator_content,
		.title.title_size_large h1,
		.title.title_size_large h1.title_like_separator .vc_text_separator.full .separator_content{
			font-size:<?php echo esc_attr($title_font_size); ?>px;
		}
	<?php } ?>
	<?php if((pitch_qode_options()->getOptionValue( 'h1_lineheight' ))>35) { ?>
		.title h1,
		.title h1.title_like_separator .vc_text_separator.full .separator_content,
		.title.title_size_large h1,
		.title.title_size_large h1.title_like_separator .vc_text_separator.full .separator_content{
			line-height: 1.3em;
		}
	<?php } ?>
	<?php if((pitch_qode_options()->getOptionValue( 'page_title_fontsize' )) !== "") {
		$page_title_font_size = pitch_qode_options()->getOptionValue( 'page_title_fontsize' );
		if ((pitch_qode_options()->getOptionValue( 'page_title_fontsize' ))>80) {
			$page_title_font_size *= 0.5;
		}
		elseif ((pitch_qode_options()->getOptionValue( 'page_title_fontsize' ))>65) {
		 	$page_title_font_size *= 0.6;
		}
		elseif ((pitch_qode_options()->getOptionValue( 'page_title_fontsize' ))>50) {
		 	$page_title_font_size *= 0.7;
		}
		elseif ((pitch_qode_options()->getOptionValue( 'page_title_fontsize' ))>35) {
		 	$page_title_font_size *= 0.8;
		} ?>
		.title h1,
		.title h1.title_like_separator .vc_text_separator.full .separator_content,
		.title.title_size_large h1,
		.title.title_size_large h1.title_like_separator .vc_text_separator.full .separator_content{
			font-size:<?php echo esc_attr($page_title_font_size); ?>px;
		}
	<?php } ?>
	<?php if((pitch_qode_options()->getOptionValue( 'page_title_lineheight' ))>35) { ?>
		.title h1,
		.title h1.title_like_separator .vc_text_separator.full .separator_content,
		.title.title_size_large h1,
		.title.title_size_large h1.title_like_separator .vc_text_separator.full .separator_content{
		line-height: 1.3em;
		}
	<?php } ?>
	<?php if((pitch_qode_options()->getOptionValue( 'h2_fontsize' ))>35) { ?>
		.content h2{
			font-size:<?php echo esc_attr(pitch_qode_options()->getOptionValue( 'h2_fontsize' ))*0.7; ?>px;
		}
	<?php } ?>
	<?php if((pitch_qode_options()->getOptionValue( 'h2_lineheight' ))>45) { ?>
		.content h2{
			line-height: 1.3em;
		}
	<?php } ?>
	<?php if((pitch_qode_options()->getOptionValue( 'h3_fontsize' ))>35) { ?>
		.content h3{
			font-size:<?php echo esc_attr(pitch_qode_options()->getOptionValue( 'h3_fontsize' ))*0.7; ?>px;
		}
	<?php } ?>
	<?php if((pitch_qode_options()->getOptionValue( 'h4_fontsize' ))>35) { ?>
		.content h4{
			font-size:<?php echo esc_attr(pitch_qode_options()->getOptionValue( 'h4_fontsize' ))*0.7; ?>px;
		}
	<?php } ?>
	<?php if((pitch_qode_options()->getOptionValue( 'h5_fontsize' ))>35) { ?>
		.content h5{
			font-size:<?php echo esc_attr(pitch_qode_options()->getOptionValue( 'h5_fontsize' ))*0.7; ?>px;
		}
	<?php } ?>
	<?php if((pitch_qode_options()->getOptionValue( 'h6_fontsize' ))>35) { ?>
		.content h6{
			font-size:<?php echo esc_attr(pitch_qode_options()->getOptionValue( 'h6_fontsize' ))*0.7; ?>px;
		}
	<?php } ?>
	
	<?php if ((pitch_qode_options()->getOptionValue( 'page_subtitle_fontsize' )) < 28 && (pitch_qode_options()->getOptionValue( 'page_subtitle_fontsize' )) !== '') { ?>
		.subtitle{
			font-size: <?php echo esc_attr(pitch_qode_options()->getOptionValue( 'page_subtitle_fontsize' )) *0.8;  ?>px;
		}
	 <?php } ?>
}

@media only screen and (min-width: 480px) and (max-width: 768px){
	<?php if (pitch_qode_options()->getOptionValue( 'parallax_minheight' )) { ?>
        section.parallax_section_holder{
		height: auto !important;
		min-height: <?php echo esc_attr(pitch_qode_options()->getOptionValue( 'parallax_minheight' )); ?>px !important;
	}
	<?php } ?>
	
	<?php if (pitch_qode_options()->getOptionValue( 'header_background_color_mobile' )) { ?>
	header
	{
		 background-color: <?php echo esc_attr(pitch_qode_options()->getOptionValue( 'header_background_color_mobile' ));  ?> !important;
		 background-image:none;
	}
	<?php } ?>
}

@media only screen and (max-width: 600px){
	<?php if(pitch_qode_options()->getOptionValue( 'h1_fontsize' ) !== '') {
		$title_font_size = pitch_qode_options()->getOptionValue( 'h1_fontsize' );
		if ((pitch_qode_options()->getOptionValue( 'h1_fontsize' ))>80) {
			$title_font_size *= 0.4;
		}
		elseif ((pitch_qode_options()->getOptionValue( 'h1_fontsize' ))>65) {
		 	$title_font_size *= 0.5;
		}
		elseif ((pitch_qode_options()->getOptionValue( 'h1_fontsize' ))>50) {
		 	$title_font_size *= 0.6;
		}
		elseif ((pitch_qode_options()->getOptionValue( 'h1_fontsize' ))>35) {
		 	$title_font_size *= 0.7;
		} ?>
		.title h1,
		.title h1.title_like_separator .vc_text_separator.full .separator_content,
		.title.title_size_large h1,
		.title.title_size_large h1.title_like_separator .vc_text_separator.full .separator_content{
			font-size:<?php echo esc_attr($title_font_size); ?>px;
		}
	<?php } ?>
	<?php if((pitch_qode_options()->getOptionValue( 'h1_lineheight' ))>35) { ?>
		.title h1,
		.title h1.title_like_separator .vc_text_separator.full .separator_content,
		.title.title_size_large h1,
		.title.title_size_large h1.title_like_separator .vc_text_separator.full .separator_content{
		line-height: 1.3em;
		}
	<?php } ?>
	<?php if((pitch_qode_options()->getOptionValue( 'page_title_fontsize' )) !== '') {
		$page_title_font_size = pitch_qode_options()->getOptionValue( 'page_title_fontsize' );
		if ((pitch_qode_options()->getOptionValue( 'page_title_fontsize' ))>80) {
			$page_title_font_size *= 0.4;
		}
		elseif ((pitch_qode_options()->getOptionValue( 'page_title_fontsize' ))>65) {
		 	$page_title_font_size *= 0.5;
		}
		elseif ((pitch_qode_options()->getOptionValue( 'page_title_fontsize' ))>50) {
		 	$page_title_font_size *= 0.6;
		}
		elseif ((pitch_qode_options()->getOptionValue( 'page_title_fontsize' ))>35) {
		 	$page_title_font_size *= 0.7;
		} ?>
		.title h1,
		.title h1.title_like_separator .vc_text_separator.full .separator_content,
		.title.title_size_large h1,
		.title.title_size_large h1.title_like_separator .vc_text_separator.full .separator_content{
			font-size:<?php echo esc_attr($page_title_font_size); ?>px;
		}
	<?php } ?>
	<?php if((pitch_qode_options()->getOptionValue( 'page_title_lineheight' ))>35) { ?>
		.title h1,
		.title h1.title_like_separator .vc_text_separator.full .separator_content,
		.title.title_size_large h1,
		.title.title_size_large h1.title_like_separator .vc_text_separator.full .separator_content{
		line-height: 1.3em;
		}
	<?php } ?>
	<?php if((pitch_qode_options()->getOptionValue( 'h2_fontsize' ))>35) { ?>
			.content h2{
				font-size:<?php echo esc_attr(pitch_qode_options()->getOptionValue( 'h2_fontsize' ))*0.5; ?>px;
			}
	<?php } ?>
	<?php if((pitch_qode_options()->getOptionValue( 'h2_lineheight' ))>45) { ?>
		.content h2{
			line-height: 1.3em;
		}
	<?php } ?>
	<?php if((pitch_qode_options()->getOptionValue( 'h3_fontsize' ))>35) { ?>
		.content h3{
			font-size:<?php echo esc_attr(pitch_qode_options()->getOptionValue( 'h3_fontsize' ))*0.5; ?>px;
		}
	<?php } ?>
	<?php if((pitch_qode_options()->getOptionValue( 'h4_fontsize' ))>35) { ?>
		.content h4{
			font-size:<?php echo esc_attr(pitch_qode_options()->getOptionValue( 'h4_fontsize' ))*0.5; ?>px;
		}
	<?php } ?>
	<?php if((pitch_qode_options()->getOptionValue( 'h5_fontsize' ))>35) { ?>
		.content h5{
			font-size:<?php echo esc_attr(pitch_qode_options()->getOptionValue( 'h5_fontsize' ))*0.5; ?>px;
		}
	<?php } ?>
	<?php if((pitch_qode_options()->getOptionValue( 'h6_fontsize' ))>35) { ?>
		.content h6{
			font-size:<?php echo esc_attr(pitch_qode_options()->getOptionValue( 'h6_fontsize' ))*0.5; ?>px;
		}
	<?php } ?>
	<?php if(pitch_qode_options()->getOptionValue( 'title_span_background_color' )) { ?>
		.title h1 span{
			padding: 0 5px;
		}
	<?php } ?>

	<?php if(pitch_qode_options()->getOptionValue( 'portfolio_list_filter_height' ) !== '') { ?>
		.filter_outer.filter_portfolio{
			height:auto;
		}
	<?php } ?>
}

@media only screen and (max-width: 480px){

	<?php if(pitch_qode_options()->getOptionValue( 'h1_fontsize' ) !== '') {
		$title_font_size = pitch_qode_options()->getOptionValue( 'h1_fontsize' );
		if ((pitch_qode_options()->getOptionValue( 'h1_fontsize' ))>65) {
		 	$title_font_size *= 0.4;
		}
		elseif ((pitch_qode_options()->getOptionValue( 'h1_fontsize' ))>50) {
		 	$title_font_size *= 0.5;
		}
		elseif ((pitch_qode_options()->getOptionValue( 'h1_fontsize' ))>35) {
		 	$title_font_size *= 0.6;
		} ?>
		.title h1,
		.title h1.title_like_separator .vc_text_separator.full .separator_content,
		.title.title_size_large h1,
		.title.title_size_large h1.title_like_separator .vc_text_separator.full .separator_content{
			font-size:<?php echo esc_attr($title_font_size); ?>px;
		}
	<?php } ?>
	<?php if((pitch_qode_options()->getOptionValue( 'page_title_lineheight' ))>35) { ?>
		.title h1,
		.title h1.title_like_separator .vc_text_separator.full .separator_content,
		.title.title_size_large h1,
		.title.title_size_large h1.title_like_separator .vc_text_separator.full .separator_content{
		line-height: 1.3em;
		}
	<?php } ?>
	<?php if((pitch_qode_options()->getOptionValue( 'page_title_fontsize' )) !== '') {
		$page_title_font_size = pitch_qode_options()->getOptionValue( 'page_title_fontsize' );
		if ((pitch_qode_options()->getOptionValue( 'page_title_fontsize' ))>65) {
		 	$page_title_font_size *= 0.4;
		}
		elseif ((pitch_qode_options()->getOptionValue( 'page_title_fontsize' ))>50) {
		 	$page_title_font_size *= 0.5;
		}
		elseif ((pitch_qode_options()->getOptionValue( 'page_title_fontsize' ))>35) {
		 	$page_title_font_size *= 0.6;
		} ?>
		.title h1,
		.title h1.title_like_separator .vc_text_separator.full .separator_content,
		.title.title_size_large h1,
		.title.title_size_large h1.title_like_separator .vc_text_separator.full .separator_content{
			font-size:<?php echo esc_attr($page_title_font_size); ?>px;
		}
	<?php } ?>
	<?php if((pitch_qode_options()->getOptionValue( 'page_title_lineheight' ))>35) { ?>
		.title h1,
		.title h1.title_like_separator .vc_text_separator.full .separator_content,
		.title.title_size_large h1,
		.title.title_size_large h1.title_like_separator .vc_text_separator.full .separator_content{
		line-height: 1.3em;
		}
	<?php } ?>
	<?php if((pitch_qode_options()->getOptionValue( 'h2_fontsize' ))>35) { ?>
			.content h2{
				font-size:<?php echo esc_attr(pitch_qode_options()->getOptionValue( 'h2_fontsize' ))*0.4; ?>px;
			}
	<?php } ?>
	<?php if((pitch_qode_options()->getOptionValue( 'h3_fontsize' ))>35) { ?>
		.content h3{
			font-size:<?php echo esc_attr(pitch_qode_options()->getOptionValue( 'h3_fontsize' ))*0.4; ?>px;
		}
	<?php } ?>
	<?php if((pitch_qode_options()->getOptionValue( 'h4_fontsize' ))>35) { ?>
		.content h4{
			font-size:<?php echo esc_attr(pitch_qode_options()->getOptionValue( 'h4_fontsize' ))*0.4; ?>px;
		}
	<?php } ?>
	<?php if((pitch_qode_options()->getOptionValue( 'h5_fontsize' ))>35) { ?>
		.content h5{
			font-size:<?php echo esc_attr(pitch_qode_options()->getOptionValue( 'h5_fontsize' ))*0.4; ?>px;
		}
	<?php } ?>
	<?php if((pitch_qode_options()->getOptionValue( 'h6_fontsize' ))>35) { ?>
		.content h6{
			font-size:<?php echo esc_attr(pitch_qode_options()->getOptionValue( 'h6_fontsize' ))*0.4; ?>px;
		}
	<?php } ?>
		
	<?php if (pitch_qode_options()->getOptionValue( 'parallax_minheight' )) { ?>
	section.parallax_section_holder{
		height: auto !important;
		min-height: <?php echo esc_attr(pitch_qode_options()->getOptionValue( 'parallax_minheight' )); ?>px !important;
	}
	<?php } ?>
	
	
	<?php if (pitch_qode_options()->getOptionValue( 'header_background_color_mobile' )) { ?>
	header
	{
		 background-color: <?php echo esc_attr(pitch_qode_options()->getOptionValue( 'header_background_color_mobile' ));  ?> !important;
		 background-image:none;
	}
	<?php } ?>

	<?php
		if((pitch_qode_options()->getOptionValue( 'masonry_gallery_square_big_title_font_size' )) > 30) { ?>
		        .masonry_gallery_item.square_big h3 {
	        		font-size: <?php echo esc_attr(pitch_qode_options()->getOptionValue( 'masonry_gallery_square_big_title_font_size' ))*0.7; ?>px;
	    		}
		<?php }
	?>
}
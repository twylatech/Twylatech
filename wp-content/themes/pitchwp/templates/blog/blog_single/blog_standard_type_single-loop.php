<?php

$blog_show_comments = "yes";
if (pitch_qode_options()->getOptionValue( 'blog_single_show_comments' )) {
    $blog_show_comments = pitch_qode_options()->getOptionValue( 'blog_single_show_comments' );
}
$blog_show_author = "yes";
if (pitch_qode_options()->getOptionValue( 'blog_author_info' )) {
    $blog_show_author = pitch_qode_options()->getOptionValue( 'blog_author_info' );
}
$blog_show_like = "yes";
if (pitch_qode_options()->getOptionValue( 'blog_single_show_like' )) {
    $blog_show_like = pitch_qode_options()->getOptionValue( 'blog_single_show_like' );
}
$blog_show_date = "yes";
if (pitch_qode_options()->getOptionValue( 'blog_single_show_date' )) {
    $blog_show_date = pitch_qode_options()->getOptionValue( 'blog_single_show_date' );
}

$blog_social_share_type = "dropdown";
if(pitch_qode_options()->getOptionValue( 'blog_single_select_share_option' )){
	$blog_social_share_type = pitch_qode_options()->getOptionValue( 'blog_single_select_share_option' );
}
$blog_show_social_share = "no";
if ((pitch_qode_options()->getOptionValue( 'enable_social_share' )) =="yes"){
    if (pitch_qode_options()->getOptionValue( 'post_types_names_post' ) =="post"){
        if (pitch_qode_options()->getOptionValue( 'blog_single_show_social_share' )) {
            $blog_show_social_share = pitch_qode_options()->getOptionValue( 'blog_single_show_social_share' );
        }
    }
}
$blog_show_categories = "yes";
if (pitch_qode_options()->getOptionValue( 'blog_single_show_category' )) {
    $blog_show_categories = pitch_qode_options()->getOptionValue( 'blog_single_show_category' );
}
$blog_show_ql_icon = "yes";
$blog_title_holder_icon_class = "";
if (pitch_qode_options()->getOptionValue( 'blog_single_show_ql_icon' )) {
    $blog_show_ql_icon = pitch_qode_options()->getOptionValue( 'blog_single_show_ql_icon' );
}

if($blog_show_ql_icon == "yes"){
	$blog_title_holder_icon_class = " with_icon";
}

$blog_image_size = 'full';
if( pitch_qode_options()->getOptionValue( 'blog_single_image_size' ) !== '') {
    $blog_image_size = pitch_qode_options()->getOptionValue( 'blog_single_image_size' );

}

if( $blog_image_size == 'custom'
    && pitch_qode_options()->getOptionValue( 'blog_single_image_size_height' ) !== ''
    && pitch_qode_options()->getOptionValue( 'blog_single_image_size_width' ) !== '') {

    $image_height = pitch_qode_options()->getOptionValue( 'blog_single_image_size_height' );
    $image_width = pitch_qode_options()->getOptionValue( 'blog_single_image_size_width' );

    $image_html = pitch_qode_generate_thumbnail(get_post_thumbnail_id(get_the_ID()),null,$image_width,$image_height);
}
else{
    $image_html = get_the_post_thumbnail(get_the_ID(), $blog_image_size);
}

$blog_ql_background_image = "no";
if(pitch_qode_options()->getOptionValue( 'blog_standard_type_ql_background_image' )){
	$blog_ql_background_image = pitch_qode_options()->getOptionValue( 'blog_standard_type_ql_background_image' );
}
$background_image_object = wp_get_attachment_image_src(get_post_thumbnail_id( get_the_ID()), 'qode-pitch-blog_image_format_link_quote');
$background_image_src = $background_image_object[0];

$_post_format = get_post_format();

$background_image_html = '';
$background_image_html_class = '';
if($blog_ql_background_image == "yes"){
	if(get_post_meta(get_the_ID(), "qode_hide-featured-image", true) != "yes"){		
		if($_post_format == "quote"){
			$background_image_html_class .=  ' quote_image';
		}elseif($_post_format == "link"){
			$background_image_html_class .=  ' link_image';
		}
		$background_image_html = 'background-image: url(' . esc_url($background_image_src) . ')';
	}
}
$gallery_position = "above_post_content";
if(get_post_meta(get_the_ID(), "gallery_position", true) !== ""){
	$gallery_position = get_post_meta(get_the_ID(), "gallery_position", true);
}

?>
<?php
	switch ($_post_format) {
		case "video":
?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="post_content_holder">
				 <div class="post_image">
					<?php $_video_type = get_post_meta(get_the_ID(), "video_format_choose", true);?>
					<?php if($_video_type == "youtube") { ?>
						<iframe  src="https://www.youtube.com/embed/<?php echo esc_attr(get_post_meta(get_the_ID(), "video_format_link", true));  ?>?wmode=transparent" wmode="Opaque" frameborder="0" allowfullscreen></iframe>
					<?php } elseif ($_video_type == "vimeo"){ ?>
						<iframe src="https://player.vimeo.com/video/<?php echo esc_attr(get_post_meta(get_the_ID(), "video_format_link", true));  ?>?title=0&amp;byline=0&amp;portrait=0" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
					<?php } elseif ($_video_type == "self"){ ?> 
						<div class="video"> 
						    <div class="mobile-video-image" style="background-image: url(<?php echo esc_url(get_post_meta(get_the_ID(), "video_format_image", true));  ?>);"></div>
					    	<div class="video-wrap"  >
							    <video class="video" poster="<?php echo esc_url(get_post_meta(get_the_ID(), "video_format_image", true));  ?>" preload="auto">
								    <?php if(get_post_meta(get_the_ID(), "video_format_webm", true) != "") { ?> <source type="video/webm" src="<?php echo esc_url(get_post_meta(get_the_ID(), "video_format_webm", true));  ?>"> <?php } ?>
								    <?php if(get_post_meta(get_the_ID(), "video_format_mp4", true) != "") { ?> <source type="video/mp4" src="<?php echo esc_url(get_post_meta(get_the_ID(), "video_format_mp4", true));  ?>"> <?php } ?>
								    <?php if(get_post_meta(get_the_ID(), "video_format_ogv", true) != "") { ?> <source type="video/ogg" src="<?php echo esc_url(get_post_meta(get_the_ID(), "video_format_ogv", true));  ?>"> <?php } ?>
								    <object width="320" height="240" type="application/x-shockwave-flash" data="<?php echo esc_url(get_template_directory_uri().'/js/flashmediaelement.swf'); ?>">
								    	<param name="movie" value="<?php echo esc_url(get_template_directory_uri().'/js/flashmediaelement.swf'); ?>" />
									    <param name="flashvars" value="controls=true&file=<?php echo esc_url(get_post_meta(get_the_ID(), "video_format_mp4", true));  ?>" />
									    <img src="<?php echo esc_url(get_post_meta(get_the_ID(), "video_format_image", true));  ?>" width="1920" height="800" title="<?php esc_attr_e( 'No video playback capabilities', 'pitch' ); ?>" alt="<?php esc_attr_e( 'Video thumb', 'pitch' ); ?>" />
								    </object>
							    </video>
						    </div>
                        </div>
					<?php } ?>
				 </div>
                 <div class="post_text">
                    <div class="post_text_inner">
						<?php if($blog_show_date == "yes" || $blog_show_categories == "yes" || $blog_show_author == "yes" || $blog_show_comments == "yes") { ?>
							<div class="post_info post_info_top">
								<?php pitch_qode_post_info(array('date' => $blog_show_date, 'category' => $blog_show_categories, 'author' => $blog_show_author, 'comments' => $blog_show_comments)) ?>
							</div>
						<?php } ?>
	                    <h2 class="post_title_label">
							<?php the_title(); ?>
						</h2>
						<?php
							the_content();
						?>
						<div class="post_info post_info_bottom">
							<?php pitch_qode_post_info(array('like' => $blog_show_like)) ?>
							<?php if(pitch_qode_options()->getOptionValue( 'blog_single_show_social_share' ) == "yes" && $blog_social_share_type == "list") { ?>
								<div class="social_share_list_standard_post_holder">
									<i class="fa fa-share"></i>
									<span><?php esc_html_e("Share:","pitch"); ?></span>
									<?php
									echo do_shortcode('[no_social_share_list]'); // XSS OK
									?>
								</div>
							<?php }; ?>
							<?php if(pitch_qode_options()->getOptionValue( 'blog_single_show_social_share' ) == "yes" && $blog_social_share_type == "dropdown") {
								pitch_qode_post_info(array('share' => $blog_show_social_share));
							}; ?>
						</div>
                    </div>
                </div>
			</div>
		</article>
<?php
		break;
		case "audio":
?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="post_content_holder">				
                <?php if(get_post_meta(get_the_ID(), "qode_hide-featured-image", true) != "yes") {
                     if ( has_post_thumbnail() ) { ?>
                        <div class="post_image">
                            <?php echo wp_kses($image_html, array(
                                'img' => array(
                                    'src' => true,
                                    'alt' => true,
                                    'width' => true,
                                    'height' => true,
                                    'draggable' => true
                                )
                            )); ?>
                        </div>
                <?php }} ?>
				<div class="audio_image">
					<audio class="blog_audio" src="<?php echo esc_url(get_post_meta(get_the_ID(), "audio_link", true)) ?>" controls="controls">
						<?php esc_html_e("Your browser don't support audio player","pitch"); ?>
					</audio>
				</div>
                <div class="post_text">
                    <div class="post_text_inner">
						<?php if($blog_show_date == "yes" || $blog_show_categories == "yes" || $blog_show_author == "yes" || $blog_show_comments == "yes") { ?>
							<div class="post_info post_info_top">
								<?php pitch_qode_post_info(array('date' => $blog_show_date, 'category' => $blog_show_categories, 'author' => $blog_show_author, 'comments' => $blog_show_comments)) ?>
							</div>
						<?php } ?>
	                    <h2 class="post_title_label">
							<?php the_title(); ?>
						</h2>
						<?php
							the_content();
						?>
						<div class="post_info post_info_bottom">
							<?php pitch_qode_post_info(array('like' => $blog_show_like)) ?>
							<?php if(pitch_qode_options()->getOptionValue( 'blog_single_show_social_share' ) == "yes" && $blog_social_share_type == "list") { ?>
								<div class="social_share_list_standard_post_holder">
									<i class="fa fa-share"></i>
									<span><?php esc_html_e("Share:","pitch"); ?></span>
									<?php
									echo do_shortcode('[no_social_share_list]'); // XSS OK
									?>
								</div>
							<?php }; ?>
							<?php if(pitch_qode_options()->getOptionValue( 'blog_single_show_social_share' ) == "yes" && $blog_social_share_type == "dropdown") {
								pitch_qode_post_info(array('share' => $blog_show_social_share));
							}; ?>
						</div>
                    </div>
                </div>
			</div>
		</article>
<?php
		break;
		case "link":
?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <div class="post_content_holder">
                <div class="post_text_columns">
					<div class="post_text<?php echo esc_attr($background_image_html_class); ?>" <?php pitch_qode_inline_style($background_image_html); ?>>
						<div class="post_text_inner">
							<?php if($blog_show_date == "yes" || $blog_show_categories == "yes" || $blog_show_author == "yes" || $blog_show_comments == "yes") { ?>
								<div class="post_info post_info_top">
									<?php pitch_qode_post_info(array('date' => $blog_show_date, 'category' => $blog_show_categories, 'author' => $blog_show_author, 'comments' => $blog_show_comments)) ?>
								</div>
							<?php } ?>
							<div class="post_title<?php echo esc_attr($blog_title_holder_icon_class); ?>">
								<?php $title_link = get_post_meta(get_the_ID(), "title_link", true) != '' ? esc_url(get_post_meta(get_the_ID(), "title_link", true)) : 'javascript: void(0)'; ?>
								<h3><a href="<?php echo esc_url($title_link); ?>"><?php the_title(); ?></a></h3>
							</div>
						</div>
					</div>
					<div class="post_content"><?php the_content(); ?></div>
					<div class="post_info post_info_bottom">
						<?php pitch_qode_post_info(array('like' => $blog_show_like)) ?>
						<?php if(pitch_qode_options()->getOptionValue( 'blog_single_show_social_share' ) == "yes" && $blog_social_share_type == "list") { ?>
							<div class="social_share_list_standard_post_holder">
								<i class="fa fa-share"></i>
								<span><?php esc_html_e("Share:","pitch"); ?></span>
								<?php
								echo do_shortcode('[no_social_share_list]'); // XSS OK
								?>
							</div>
						<?php }; ?>
						<?php if(pitch_qode_options()->getOptionValue( 'blog_single_show_social_share' ) == "yes" && $blog_social_share_type == "dropdown") {
							pitch_qode_post_info(array('share' => $blog_show_social_share));
						}; ?>
					</div>
                </div>
            </div>
        </article>
<?php
		break;
		case "gallery":
?>
		<article id="post-<?php the_ID(); ?>">
			<div class="post_content_holder">
				<?php if($gallery_position == "above_post_content"){ ?>
					<div class="post_image">					
						<?php get_template_part('templates/blog/parts/post-format-gallery-slider'); ?>
					</div>
				<?php } ?>
                <div class="post_text">
                    <div class="post_text_inner">
						<?php if($blog_show_date == "yes" || $blog_show_categories == "yes" || $blog_show_author == "yes" || $blog_show_comments == "yes") { ?>
							<div class="post_info post_info_top">
								<?php pitch_qode_post_info(array('date' => $blog_show_date, 'category' => $blog_show_categories, 'author' => $blog_show_author, 'comments' => $blog_show_comments)) ?>
							</div>
						<?php } ?>
	                    <h2 class="post_title_label">
							<?php the_title(); ?>
						</h2>
						<?php
							the_content();
						?>
						<div class="post_info post_info_bottom">
							<?php pitch_qode_post_info(array('like' => $blog_show_like)) ?>
							<?php if(pitch_qode_options()->getOptionValue( 'blog_single_show_social_share' ) == "yes" && $blog_social_share_type == "list") { ?>
								<div class="social_share_list_standard_post_holder">
									<i class="fa fa-share"></i>
									<span><?php esc_html_e("Share:","pitch"); ?></span>
									<?php
									echo do_shortcode('[no_social_share_list]'); // XSS OK
									?>
								</div>
							<?php }; ?>
							<?php if(pitch_qode_options()->getOptionValue( 'blog_single_show_social_share' ) == "yes" && $blog_social_share_type == "dropdown") {
								pitch_qode_post_info(array('share' => $blog_show_social_share));
							}; ?>
						</div>
                    </div>
                </div>
            </div>
		</article>
<?php
		break;
		case "quote":
?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <div class="post_content_holder">
                    <div class="post_text_columns">
                        <div class="post_text<?php echo esc_attr($background_image_html_class); ?>" <?php pitch_qode_inline_style($background_image_html); ?>>
                            <div class="post_text_inner">
								<?php if($blog_show_date == "yes" || $blog_show_categories == "yes" || $blog_show_author == "yes" || $blog_show_comments == "yes") { ?>
									<div class="post_info post_info_top">
										<?php pitch_qode_post_info(array('date' => $blog_show_date, 'category' => $blog_show_categories, 'author' => $blog_show_author, 'comments' => $blog_show_comments)) ?>
									</div>
								<?php } ?>
								<div class="post_title<?php echo esc_attr($blog_title_holder_icon_class); ?>">
									<h3>
										<span><?php echo esc_html(get_post_meta(get_the_ID(), "quote_format", true)); ?></span>
									</h3>								
									<span class="quote_author">&ndash; <?php the_title(); ?></span>
								</div>
                            </div>
                        </div>
						<div class="post_content"><?php the_content(); ?></div>
						<div class="post_info post_info_bottom">
							<?php pitch_qode_post_info(array('like' => $blog_show_like)) ?>
							<?php if(pitch_qode_options()->getOptionValue( 'blog_single_show_social_share' ) == "yes" && $blog_social_share_type == "list") { ?>
								<div class="social_share_list_standard_post_holder">
									<i class="fa fa-share"></i>
									<span><?php esc_html_e("Share:","pitch"); ?></span>
									<?php
									echo do_shortcode('[no_social_share_list]'); // XSS OK
									?>
								</div>
							<?php }; ?>
							<?php if(pitch_qode_options()->getOptionValue( 'blog_single_show_social_share' ) == "yes" && $blog_social_share_type == "dropdown") {
								pitch_qode_post_info(array('share' => $blog_show_social_share));
							}; ?>
						</div>
                    </div>
                </div>
            </article>
<?php
		break;
		default:
?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="post_content_holder">
                <?php if(get_post_meta(get_the_ID(), "qode_hide-featured-image", true) != "yes") {
                    if ( has_post_thumbnail() ) { ?>
                        <div class="post_image">
                            <?php echo wp_kses($image_html, array(
                                'img' => array(
                                    'src' => true,
                                    'alt' => true,
                                    'width' => true,
                                    'height' => true,
                                    'draggable' => true
                                )
                            )); ?>
                        </div>
				<?php }} ?>
				<div class="post_text">
					<div class="post_text_inner">
							<?php if($blog_show_date == "yes" || $blog_show_categories == "yes" || $blog_show_author == "yes" || $blog_show_comments == "yes") { ?>
								<div class="post_info post_info_top">
									<?php pitch_qode_post_info(array('date' => $blog_show_date, 'category' => $blog_show_categories, 'author' => $blog_show_author, 'comments' => $blog_show_comments)) ?>
								</div>
							<?php } ?>
							<h2 class="post_title_label">
                                <?php the_title(); ?>
                            </h2>
							<?php
                                the_content();
							?>
							<div class="post_info post_info_bottom">
								<?php pitch_qode_post_info(array('like' => $blog_show_like)) ?>
								<?php if(pitch_qode_options()->getOptionValue( 'blog_single_show_social_share' ) == "yes" && $blog_social_share_type == "list") { ?>
									<div class="social_share_list_standard_post_holder">
										<i class="fa fa-share"></i>
										<span><?php esc_html_e("Share:","pitch"); ?></span>
										<?php
										echo do_shortcode('[no_social_share_list]'); // XSS OK
										?>
									</div>
								<?php }; ?>
								<?php if(pitch_qode_options()->getOptionValue( 'blog_single_show_social_share' ) == "yes" && $blog_social_share_type == "dropdown") {
									pitch_qode_post_info(array('share' => $blog_show_social_share));
								}; ?>
							</div>
                    </div>
				</div>
			</div>
		</article>
<?php
}
?>
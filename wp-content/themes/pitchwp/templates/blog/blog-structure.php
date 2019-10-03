<?php
$qode_blog_query    = pitch_qode_get_blog_query_posts();
	
	$blog_style = "blog_standard";
	if(pitch_qode_options()->getOptionValue( 'blog_style' )){
		$blog_style = pitch_qode_options()->getOptionValue( 'blog_style' );
	}

	$filter = "no";

	if(pitch_qode_options()->getOptionValue( 'blog_masonry_filter' )){
		$filter = pitch_qode_options()->getOptionValue( 'blog_masonry_filter' );
	}
	
	$blog_masonry_type = "blog_masonry_standard";
	if(pitch_qode_options()->getOptionValue( 'blog_masonry_choose_type' )){
		$blog_masonry_type = pitch_qode_options()->getOptionValue( 'blog_masonry_choose_type' );
	}

	$blog_list = "";
	$page_template_name = pitch_qode_get_page_template_name();
	
	if($page_template_name != "") {
		if($page_template_name == "blog-masonry"){
			if($blog_masonry_type == "blog_masonry_standard"){
				$blog_list = "blog_masonry";
				$blog_list_class = "masonry";
			}if($blog_masonry_type == "blog_masonry_meta_info_featured_on_side"){
				$blog_list = "blog_masonry_meta_info_featured_on_side";
				$blog_list_class = "masonry blog_masonry_meta_info_featured_on_side";
			}
		}elseif($page_template_name == "blog-masonry-full-width"){
			if($blog_masonry_type == "blog_masonry_standard"){
				$blog_list = "blog_masonry";
				$blog_list_class = "masonry_full_width";
			}
			if($blog_masonry_type == "blog_masonry_meta_info_featured_on_side"){
				$blog_list = "blog_masonry_meta_info_featured_on_side";
				$blog_list_class = "masonry_full_width blog_masonry_meta_info_featured_on_side";
			}
		}elseif($page_template_name == "blog-standard"){
            $blog_list = "blog_standard";
            $blog_list_class = "blog_standard_type";
        }elseif($page_template_name == "blog-standard-info-on-side"){
			$blog_list = "blog_standard_info_on_side";
			$blog_list_class = "blog_standard_type";
		}elseif($page_template_name == "blog-standard-whole-post"){
			$blog_list = "blog_standard_whole_post";
			$blog_list_class = "blog_standard_type";
		}else{
			$blog_list = "blog_standard";
			$blog_list_class = "blog_standard_type";
		}
	} else{
		if($blog_style=="blog_standard"){
			$blog_list = "blog_standard";
			$blog_list_class = "blog_standard_type";
		}elseif($blog_style=="blog_masonry"){
			if($blog_masonry_type == "blog_masonry_standard"){
				$blog_list = "blog_masonry";
				$blog_list_class = "masonry";
			}if($blog_masonry_type == "blog_masonry_meta_info_featured_on_side"){
				$blog_list = "blog_masonry_meta_info_featured_on_side";
				$blog_list_class = "masonry blog_masonry_meta_info_featured_on_side";
			}
        }elseif($blog_style=="blog_masonry_full_width"){
			if($blog_masonry_type == "blog_masonry_standard"){
				$blog_list = "blog_masonry";
				$blog_list_class = "masonry_full_width";
			}
			if($blog_masonry_type == "blog_masonry_meta_info_featured_on_side"){
				$blog_list = "blog_masonry_meta_info_featured_on_side";
				$blog_list_class = "masonry_full_width blog_masonry_meta_info_featured_on_side";
			}
        }elseif($blog_style=="blog_standard_whole_post"){
			$blog_list = "blog_standard_whole_post";
			$blog_list_class = "blog_standard_type";
		}else {
			$blog_list = "blog_standard";
			$blog_list_class = "blog_standard_type";
		}
	}

    $pagination_masonry = "pagination";
    if(pitch_qode_options()->getOptionValue( 'pagination_masonry' )){
       $pagination_masonry = pitch_qode_options()->getOptionValue( 'pagination_masonry' );
		if($blog_list == "blog_masonry" || $blog_list == "blog_masonry_meta_info_featured_on_side") {
			$blog_list_class .= " masonry_" . $pagination_masonry;
		}
    }
	
	$pagination_masonry_gallery = "pagination";
    if(pitch_qode_options()->getOptionValue( 'pagination_masonry_gallery' )){
       $pagination_masonry_gallery = pitch_qode_options()->getOptionValue( 'pagination_masonry_gallery' );
    }
?>
<?php

	if(($blog_list == "blog_masonry" || $blog_list == "blog_masonry_meta_info_featured_on_side") && $filter == "yes") {
		get_template_part('templates/blog/masonry', 'filter');

	}

	$blog_masonry_columns = 'three_columns';
	if (pitch_qode_options()->getOptionValue( 'blog_masonry_columns' ) !== '') {
		$blog_masonry_columns = pitch_qode_options()->getOptionValue( 'blog_masonry_columns' );
	}

	$blog_masonry_full_width_columns = 'five_columns';
	if (pitch_qode_options()->getOptionValue( 'blog_masonry_full_width_columns' ) !== '') {
		$blog_masonry_full_width_columns = pitch_qode_options()->getOptionValue( 'blog_masonry_full_width_columns' );
	}

	
	if($page_template_name == "blog-masonry" || $blog_style == 'blog_masonry'){
		$blog_list_class .= " " .$blog_masonry_columns;
	}
	
	if($page_template_name == "blog-masonry-full-width" || $blog_style == 'blog_masonry_full_width'){
		$blog_list_class .= " " .$blog_masonry_full_width_columns;
	}

	
	$icon_left_html =  "<i class='pagination_arrow arrow_carrot-left'></i>";
	if (pitch_qode_options()->getOptionValue( 'pagination_arrows_type' ) != '') {
		$icon_navigation_class = pitch_qode_options()->getOptionValue( 'pagination_arrows_type' );
		$direction_nav_classes = pitch_qode_horizontal_slider_icon_classes($icon_navigation_class);
		$icon_left_html = '<span class="pagination_arrow ' . $direction_nav_classes['left_icon_class']. '"></span>';
	}
	
	$icon_left_html .= '<span class="pagination_label">';
	if (pitch_qode_options()->getOptionValue( 'blog_pagination_previous_label' ) != '') {
		$icon_left_html.= pitch_qode_options()->getOptionValue( 'blog_pagination_previous_label' );
	}
	else{
		$icon_left_html .= esc_html__( "Previous", 'pitch' );
	}
	$icon_left_html .= '</span>';


	$icon_right_html = '<span class="pagination_label">';
	if (pitch_qode_options()->getOptionValue( 'blog_pagination_next_label' ) != '') {
		$icon_right_html .= pitch_qode_options()->getOptionValue( 'blog_pagination_next_label' );
	}
	else {
		$icon_right_html .= esc_html__( "Next", 'pitch' );
	}
	$icon_right_html .= '</span>';

	if (pitch_qode_options()->getOptionValue( 'pagination_arrows_type' ) != '') {
		$icon_navigation_class = pitch_qode_options()->getOptionValue( 'pagination_arrows_type' );
		$direction_nav_classes = pitch_qode_horizontal_slider_icon_classes($icon_navigation_class);
		$icon_right_html .= '<span class="pagination_arrow ' . $direction_nav_classes['right_icon_class']. '"></span>';
	}
	else{
		$icon_right_html .=  "<i class='pagination_arrow arrow_carrot-right'></i>";
	}

	?>

	<div class="blog_holder <?php echo esc_attr($blog_list_class); ?>">
	
	<?php if($blog_list == "blog_masonry" || $blog_list == "blog_masonry_meta_info_featured_on_side") { ?>
		<div class="blog_holder_grid_sizer"></div>
		<div class="blog_holder_grid_gutter"></div>
	<?php } ?>
	<?php if($qode_blog_query->have_posts()) : while ( $qode_blog_query->have_posts() ) : $qode_blog_query->the_post(); ?>
		<?php
			get_template_part('templates/blog/'.$blog_list, 'loop');
		?>
	<?php endwhile; ?>
	<?php if($blog_list != "blog_masonry" && $blog_list != "blog_masonry_meta_info_featured_on_side") {
		if (pitch_qode_options()->getOptionValue( 'blog_pagination_type' ) == 'standard'){
			pitch_qode_get_blog_pagination( $qode_blog_query );
			}
		elseif (pitch_qode_options()->getOptionValue( 'blog_pagination_type' ) == 'prev_and_next'){?>
			<div class="pagination_prev_and_next_only">
				<ul>
					<li class='prev'><?php echo wp_kses_post(get_previous_posts_link($icon_left_html)); ?></li>
					<li class='next'><?php echo wp_kses_post(get_next_posts_link($icon_right_html, $qode_blog_query->max_num_pages)); ?></li>
				</ul>
			</div>
		<?php } ?>
	<?php } ?>
	<?php else: //If no posts are present ?>
	<div class="entry">
			<p><?php esc_html_e('No posts were found.', 'pitch'); ?></p>
	</div>
	<?php endif; ?>
</div>
<?php if($blog_list == "blog_masonry" || $blog_list == "blog_masonry_meta_info_featured_on_side") {
    if($pagination_masonry == "load_more") {
		if (get_next_posts_link(null, $qode_blog_query->max_num_pages)) { ?>
			<div class="blog_load_more_button_holder">
				<div class="blog_load_more_button"><span data-rel="<?php echo esc_attr($qode_blog_query->max_num_pages); ?>"><?php echo wp_kses_post(get_next_posts_link(esc_html__('Show more', 'pitch'), $qode_blog_query->max_num_pages)); ?></span></div>
			</div>
		<?php } ?>
	 <?php } elseif($pagination_masonry == "infinite_scroll") { ?>
		<div class="blog_infinite_scroll_button"><span data-rel="<?php echo esc_attr($qode_blog_query->max_num_pages); ?>"><?php echo wp_kses_post(get_next_posts_link(esc_html__('Show more', 'pitch'), $qode_blog_query->max_num_pages)); ?></span></div>
    <?php }else { ?>
        <?php if(pitch_qode_options()->getOptionValue( 'blog_pagination_type' ) == 'standard' && pitch_qode_options()->getOptionValue( 'pagination' ) != "0") {
		    pitch_qode_get_blog_pagination( $qode_blog_query );
            }
        	elseif (pitch_qode_options()->getOptionValue( 'blog_pagination_type' ) == 'prev_and_next'){ ?>
				<div class="pagination_prev_and_next_only">
					<ul>
						<li class='prev'><?php echo wp_kses_post(get_previous_posts_link($icon_left_html)); ?></li>
						<li class='next'><?php echo wp_kses_post(get_next_posts_link($icon_right_html, $qode_blog_query->max_num_pages)); ?></li>
					</ul>
				</div>
		<?php } ?>
    <?php } ?>
<?php } ?>
<?php wp_reset_postdata(); ?>
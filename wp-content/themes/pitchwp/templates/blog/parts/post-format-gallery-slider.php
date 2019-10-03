<div class="flexslider">
	<ul class="slides">
		<?php
		
		$image_gallery_val = get_post_meta( $post->ID, 'qode_post-image-gallery' , true );
		if($image_gallery_val!='' ) $image_gallery_array=explode(',',$image_gallery_val);

        $blog_image_size = 'full';
        $blog_type = '';
        $image_height = '';
        $image_width = '';

        if(is_single()) {
            $blog_type = 'blog_single';
        }
        elseif(is_page_template( "blog-standard.php" ) || is_page_template( "blog-standard-whole-post.php" ) ) {
            $blog_type = 'blog_standard_type';
        }
        if($blog_type !== ''){
            if( pitch_qode_options()->getOptionValue( $blog_type.'_image_size' ) !== '') {
                $blog_image_size = pitch_qode_options()->getOptionValue( $blog_type.'_image_size' );
            }
            if( $blog_image_size == 'custom'
                && pitch_qode_options()->getOptionValue( $blog_type.'_image_size_height' ) !== ''
                && pitch_qode_options()->getOptionValue( $blog_type.'_image_size_width' ) !== '') {

                $image_height = pitch_qode_options()->getOptionValue( $blog_type.'_image_size_height' );
                $image_width = pitch_qode_options()->getOptionValue( $blog_type.'_image_size_width' );
            }
        }


        if(isset($image_gallery_array) && count($image_gallery_array)!=0):

			foreach($image_gallery_array as $gimg_id): ?>
		
				<li><a href="<?php the_permalink(); ?>">
                        <?php if( $blog_image_size == 'custom' && $image_height !== '' && $image_height !== ''){
                            echo pitch_qode_generate_thumbnail($gimg_id,null,$image_width,$image_height);
                        }
                        else{
                            echo wp_get_attachment_image($gimg_id, $blog_image_size);
                        }
                        ?>
                    </a>
                </li>

			<?php endforeach;

		endif;
		?>
	</ul>
</div>

<?php
/*
Template Name: Full Screen Sections
*/

$fs_navigation_type = "";
if(pitch_qode_options()->getOptionValue( 'fs_navigation_slider_vertical_section_type' )){
    $fs_navigation_type = pitch_qode_options()->getOptionValue( 'fs_navigation_slider_vertical_section_type' );
}
?>
<?php get_header(); ?>
    <div class="full_screen_preloader">
	    <?php get_template_part( 'includes/preloader/preloader-template' ); ?>
    </div>
    <div class="full_screen_holder" <?php pitch_qode_inline_page_background_style(); ?>>
        <div class="full_screen_inner" <?php pitch_qode_inline_page_padding_style(); ?>>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; endif; ?>
        </div>
        <?php if($fs_navigation_type == '' || $fs_navigation_type == 'arrows' || $fs_navigation_type == 'both'){ ?>
            <div class="full_screen_navigation_holder">
                <div class="full_screen_navigation_inner">
                    <a id="up_fs_button" href="#" target="_self"><span class='arrow_carrot-up'></span></a>
                    <a id="down_fs_button" href="#" target="_self"><span class='arrow_carrot-down'></span></a>
                </div>
            </div>
        <?php } ?>
    </div>
<?php get_footer(); ?>
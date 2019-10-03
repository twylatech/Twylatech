<?php
$root = dirname(dirname(dirname(dirname(dirname(__FILE__)))));
if ( file_exists( $root.'/wp-load.php' ) ) {
	require_once( $root.'/wp-load.php' );
} else {
	$root = dirname(dirname(dirname(dirname(dirname(dirname(__FILE__))))));
	if ( file_exists( $root.'/wp-load.php' ) ) {
		require_once( $root.'/wp-load.php' );
	}
}
header('Content-type: application/x-javascript');
?>
var header_height = 90;
var min_header_height_scroll = 57;
var header_one_scroll_resize = false;
var min_header_height_sticky = 60;
var scroll_amount_for_sticky = 85;
var min_header_height_fixed_hidden = 45;
var header_bottom_border_weight = 1;
var scroll_amount_for_fixed_hiding = 200;
var menu_item_margin = 0;
var large_menu_item_border = 0;
var element_appear_amount = -150;
var paspartu_width_init = 0.02;
var directionNavArrows = 'arrow_carrot-';
var directionNavArrowsTestimonials = 'fa fa-angle-';
var enable_navigation_on_full_screen_section = false;

<?php if(pitch_qode_options()->getOptionValue( 'header_height' )){
	if (pitch_qode_options()->getOptionValue( 'header_height' ) !== '') { ?>
	header_height = <?php echo esc_attr(pitch_qode_options()->getOptionValue( 'header_height' )); ?>;
<?php } } ?>
<?php if(pitch_qode_options()->getOptionValue( 'header_height_scroll' )){
	if (pitch_qode_options()->getOptionValue( 'header_height_scroll' ) !== "") { ?>
	min_header_height_scroll = <?php echo esc_attr(pitch_qode_options()->getOptionValue( 'header_height_scroll' )); ?>;
<?php } } ?>
<?php if(pitch_qode_options()->getOptionValue( 'header_one_scroll_resize' )){
	if (pitch_qode_options()->getOptionValue( 'header_one_scroll_resize' ) === "yes") { ?>
	header_one_scroll_resize = true;
<?php } } ?>
<?php if(pitch_qode_options()->getOptionValue( 'header_height_sticky' )){
	if (pitch_qode_options()->getOptionValue( 'header_height_sticky' ) !== "") { ?>
	min_header_height_sticky = <?php echo esc_attr(pitch_qode_options()->getOptionValue( 'header_height_sticky' )); ?>;
<?php } } ?>
<?php if(pitch_qode_options()->getOptionValue( 'scroll_amount_for_sticky' )){
	if (pitch_qode_options()->getOptionValue( 'scroll_amount_for_sticky' )) { ?>
	scroll_amount_for_sticky = <?php echo esc_attr(pitch_qode_options()->getOptionValue( 'scroll_amount_for_sticky' )); ?>;
<?php } } ?>
<?php if(pitch_qode_options()->getOptionValue( 'header_height_scroll_hidden' )){
    if (pitch_qode_options()->getOptionValue( 'header_height_scroll_hidden' )) { ?>
    min_header_height_fixed_hidden = <?php echo esc_attr(pitch_qode_options()->getOptionValue( 'header_height_scroll_hidden' )); ?>;
<?php } } ?>

<?php if(pitch_qode_options()->getOptionValue( 'scroll_amount_for_fixed_hiding' )){
    if (pitch_qode_options()->getOptionValue( 'scroll_amount_for_fixed_hiding' )) { ?>
        scroll_amount_for_fixed_hiding = <?php echo esc_attr(pitch_qode_options()->getOptionValue( 'scroll_amount_for_fixed_hiding' )); ?>;
<?php } } ?>

<?php
if(pitch_qode_options()->getOptionValue( 'enable_manu_item_border' )=='yes' && pitch_qode_options()->getOptionValue( 'menu_item_style' )=='large_item'){
    if(pitch_qode_options()->getOptionValue( 'menu_item_border_style' )=='all_borders'){ ?>
		large_menu_item_border = <?php echo esc_attr(pitch_qode_options()->getOptionValue( 'menu_item_border_width' ))*2;
	} ?>
	<?php if(pitch_qode_options()->getOptionValue( 'menu_item_border_style' )=='top_bottom_borders'){ ?>
		large_menu_item_border = <?php echo esc_attr(pitch_qode_options()->getOptionValue( 'menu_item_border_width' ))*2;
	} ?>
	<?php if((pitch_qode_options()->getOptionValue( 'menu_item_border_style' )=='bottom_border' || pitch_qode_options()->getOptionValue( 'menu_item_border_style' )=='top_border')){ ?>
		large_menu_item_border = <?php  echo esc_attr(pitch_qode_options()->getOptionValue( 'menu_item_border_width' ));
	} ?>
<?php } ?>

<?php if(pitch_qode_options()->getOptionValue( 'element_appear_amount' ) !== ""){ ?>
    element_appear_amount = -<?php echo esc_attr(pitch_qode_options()->getOptionValue( 'element_appear_amount' )); ?>;
<?php } ?>

<?php if(pitch_qode_options()->getOptionValue( 'paspartu_width' ) !== ""){ ?>
    paspartu_width_init = <?php echo esc_attr(pitch_qode_options()->getOptionValue( 'paspartu_width' ))/100; ?>;
<?php } ?>

var logo_height = 130; // pitch logo height
var logo_width = 280; // pitch logo width
	<?php 
		$logo_width = pitch_qode_options()->getOptionValue( 'logo_width' );
		$logo_height = pitch_qode_options()->getOptionValue( 'logo_height' );
	?>
    logo_width = <?php echo esc_attr($logo_width); ?>;
    logo_height = <?php echo esc_attr($logo_height); ?>;

<?php if(pitch_qode_options()->getOptionValue( 'menu_margin_left_right' )){
	if (pitch_qode_options()->getOptionValue( 'menu_margin_left_right' ) !== '') { ?>
		menu_item_margin = <?php echo esc_attr(pitch_qode_options()->getOptionValue( 'menu_margin_left_right' )); ?>;
<?php } } ?>
	
<?php if(pitch_qode_options()->getOptionValue( 'header_top_area' )){
if (pitch_qode_options()->getOptionValue( 'header_top_area' ) == "yes") { ?>
<?php if(pitch_qode_options()->getOptionValue( 'header_top_height' ) !== ""){?>
header_top_height= <?php echo esc_attr(pitch_qode_options()->getOptionValue( 'header_top_height' ));?>;
<?php } else { ?>
header_top_height = 36;
<?php } ?>
<?php } else { ?>
	header_top_height = 0;
<?php } }?>
var loading_text;
loading_text = '<?php esc_html_e('Loading new posts...', 'pitch'); ?>';
var finished_text;
finished_text = '<?php esc_html_e('No more posts', 'pitch'); ?>';

var piechartcolor;
piechartcolor	= "#279eff";

<?php if(pitch_qode_options()->getOptionValue( 'first_color' )){ ?>
	piechartcolor = "<?php echo esc_attr(pitch_qode_options()->getOptionValue( 'first_color' )); ?>";
<?php } ?>

<?php if(pitch_qode_options()->getOptionValue( 'single_slider_navigation_arrows_type' ) != '') { ?>
	directionNavArrows = '<?php echo esc_attr(pitch_qode_options()->getOptionValue( 'single_slider_navigation_arrows_type' )); ?>';
<?php } ?>

<?php if(pitch_qode_options()->getOptionValue( 'testimonials_arrows_type' ) != '') { ?>
	directionNavArrowsTestimonials = '<?php echo esc_attr(pitch_qode_options()->getOptionValue( 'testimonials_arrows_type' )); ?>';
<?php } ?>

<?php if((pitch_qode_options()->getOptionValue( 'fs_navigation_slider_vertical_section_type' ) == 'bullets') || (pitch_qode_options()->getOptionValue( 'fs_navigation_slider_vertical_section_type' ) == 'both')) { ?>
    enable_navigation_on_full_screen_section = true;
<?php } ?>


var no_ajax_pages = [];
var qode_root = '<?php echo esc_url( home_url( '/' )); ?>';
var theme_root = '<?php echo PITCH_ROOT; ?>/';
<?php if(pitch_qode_options()->getOptionValue( 'header_style' ) != ''){ ?>
var header_style_admin = "<?php echo esc_attr(pitch_qode_options()->getOptionValue( 'header_style' )); ?>";
<?php }else{ ?>
var header_style_admin = "";
<?php } ?>
if(typeof no_ajax_obj !== 'undefined') {
no_ajax_pages = no_ajax_obj.no_ajax_pages;
}

var login_page = <?php echo pitch_qode_replace_menu_name(); ?>;
var logoutString = "<?php esc_html_e("Logout", "pitch"); ?>";

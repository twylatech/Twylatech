<?php
namespace QodeCore\CPT\Portfolio\Shortcodes;

use QodeCore\Lib;

/**
 * Class PortfolioList
 * @package QodeCore\CPT\Portfolio\Shortcodes
 */
class PortfolioList implements Lib\ShortcodeInterface {
    /**
     * @var string
     */
    private $base;

    public function __construct() {
        $this->base = 'no_portfolio_list';

        add_action('vc_before_init', array($this, 'vcMap'));
    }

    /**
     * Returns base for shortcode
     * @return string
     */
    public function getBase() {
        return $this->base;
    }

    /**
     * Maps shortcode to Visual Composer
     *
     * @see vc_map
     */
    public function vcMap() {
        if(function_exists('vc_map')) {
	
	        $icons_array = pitch_qode_icon_collections()->getVCParamsArray(array("element" => "show_load_more_icon", "value" => array("yes")));

            vc_map( array(
                "name" => esc_html__( "Portfolio List", 'select-core' ),
                "base" => "no_portfolio_list",
                "category" => esc_html__( 'by Select', 'select-core' ),
                "icon" => "icon-wpb-portfolio extended-custom-icon",
                "allowed_container_element" => 'vc_row',
                "params" => array_merge(array(
                        array(
                            "type" => "dropdown",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Portfolio List Template", 'select-core' ),
                            "param_name" => "type",
                            "value" => array(
                                esc_html__( "Standard", 'select-core' ) => "standard",
                                esc_html__( "Standard No Space", 'select-core' ) => "standard_no_space",
                                esc_html__( "Text on Image Hover", 'select-core' ) => "text_on_hover_image",
                                esc_html__( "Text on Image Hover (No Space)", 'select-core' ) => "text_on_hover_image_no_space",
                                esc_html__( "Text Initially Over Image", 'select-core' ) => "text_before_hover",
                                esc_html__( "Text Initially Over Image (No Space)", 'select-core' ) => "text_before_hover_no_space",
                                esc_html__( "Masonry", 'select-core' ) => "masonry",
                                esc_html__( "Pinterest", 'select-core' ) => "masonry_with_space",
                                esc_html__( "Pinterest With Image Only ", 'select-core' ) => "masonry_with_space_without_description",
                            )
                        ),
                        array(
                            "type" => "textfield",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Padding between portfolio items (px)", 'select-core' ),
                            "param_name" => "padding_between",
                            "value" => "",
                            "dependency" => array('element' => "type", 'value' => array('masonry_with_space','masonry_with_space_without_description'))
                        ),
                        array(
                            "type" => "dropdown",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Masonry space", 'select-core' ),
                            "param_name" => "masonry_space",
                            "value" => array(
                                esc_html__( "No", 'select-core' ) => "no",
                                esc_html__( "Yes", 'select-core' ) => "yes"
                            ),
                            "dependency" => array('element' => "type", 'value' => array('masonry'))
                        ),
                        array(
                            "type" => "textfield",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Parallax Item Speed", 'select-core' ),
                            "param_name" => "parallax_item_speed",
                            "value" => "",
                            "description" => esc_html__( 'This option only takes effect on portfolio items on which Set Masonry Item in Parallax is set to Yes, default value is 0.3', 'select-core' ),
                            "dependency" => array('element' => "type", 'value' => array('masonry'))
                        ),
                        array(
                            "type" => "textfield",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Parallax Item Offset", 'select-core' ),
                            "param_name" => "parallax_item_offset",
                            "value" => "",
                            "description" => esc_html__( 'This option only takes effect on portfolio items on which Set Masonry Item in Parallax is set to Yes, default value is 0', 'select-core' ),
                            "dependency" => array('element' => "type", 'value' => array('masonry'))
                        ),
                        array(
                            "type" => "dropdown",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Force full width", 'select-core' ),
                            "param_name" => "force_full_width",
                            "value" => array(
                                esc_html__( "No", 'select-core' ) => "no",
                                esc_html__( "Yes", 'select-core' ) => "yes"
                            ),
                            "description" => esc_html__( 'This option will disable left and right space on portfolio holder', 'select-core' ),
                            "dependency" => array('element' => "type", 'value' => array('standard','text_on_hover_image','text_before_hover'))
                        ),
                        array(
                            "type" => "dropdown",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Hover Animation Type", 'select-core' ),
                            "param_name" => "hover_type_standard",
                            "value" => array(
                                esc_html__( "Gradient", 'select-core' ) => "gradient_hover",
                                esc_html__( "Upward", 'select-core' ) => "upward_hover",
                                esc_html__( "Opposite Corners", 'select-core' ) => "opposite_corners_hover",
                                esc_html__( "Slide from left", 'select-core' ) => "slide_from_left_hover",
                                esc_html__( "Subtle Vertical", 'select-core' ) => "subtle_vertical_hover",
                                esc_html__( "Image Subtle Rotate Zoom", 'select-core' ) => "image_subtle_rotate_zoom_hover",
                                esc_html__( "Image Text Zoom", 'select-core' ) => "image_text_zoom_hover",
                                esc_html__( "Text Slides With Image", 'select-core' ) => "text_slides_with_image",
                                esc_html__( "Thin Plus Only", 'select-core' ) => "thin_plus_only",
                                esc_html__( "Icons Bottom Corner", 'select-core' ) => "icons_bottom_corner",
                                esc_html__( "Move From Left", 'select-core' ) => "slow_zoom",
                                esc_html__( "Split Up", 'select-core' ) => "split_up",
                                esc_html__( "Circle", 'select-core' ) => "circle_hover"
                            ),
                            "dependency" => array('element' => "type", 'value' => array('standard', 'standard_no_space', 'masonry_with_space'))
                        ),
                        array(
                            "type" => "dropdown",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Hover Animation Type", 'select-core' ),
                            "param_name" => "hover_type_text_on_hover_image",
                            "value" => array(
                                esc_html__( "Upward", 'select-core' ) => "upward_hover",
                                esc_html__( "Opposite Corners", 'select-core' ) => "opposite_corners_hover",
                                esc_html__( "Slide from left", 'select-core' ) => "slide_from_left_hover",
                                esc_html__( "Subtle Vertical", 'select-core' ) => "subtle_vertical_hover",
                                esc_html__( "Image Subtle Rotate Zoom", 'select-core' ) => "image_subtle_rotate_zoom_hover",
                                esc_html__( "Image Text Zoom", 'select-core' ) => "image_text_zoom_hover",
                                esc_html__( "Cursor Change", 'select-core' ) => "cursor_change_hover",
                                esc_html__( "Slide Up", 'select-core' ) => "slide_up_hover",
                                esc_html__( "Text Slides With Image", 'select-core' ) => "text_slides_with_image",
                                esc_html__( "Thin Plus Only", 'select-core' ) => "thin_plus_only",
                                esc_html__( "Icons Bottom Corner", 'select-core' ) => "icons_bottom_corner",
                                esc_html__( "Move From Left", 'select-core' ) => "slow_zoom",
                                esc_html__( "Split Up", 'select-core' ) => "split_up",
                                esc_html__( "Circle", 'select-core' ) => "circle_hover",
                                esc_html__( "Animated Border", 'select-core' ) => "border_hover"
                            ),
                            "dependency" => array('element' => "type", 'value' => array('text_on_hover_image', 'text_on_hover_image_no_space','masonry_with_space_without_description'))
                        ),
                        array(
                            "type" => "dropdown",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Hover Animation Type", 'select-core' ),
                            "param_name" => "hover_type_text_before_hover",
                            "value" => array(
                                esc_html__( "Gradient", 'select-core' ) => "gradient_hover",
                                esc_html__( "Prominent Plain", 'select-core' ) => "prominent_plain_hover",
                                esc_html__( "Prominent Blur", 'select-core' ) => "prominent_blur_hover"
                            ),
                            "dependency" => array('element' => "type", 'value' => array('text_before_hover', 'text_before_hover_no_space'))
                        ),
                        array(
                            "type" => "dropdown",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Hover Animation Type", 'select-core' ),
                            "param_name" => "hover_type_masonry",
                            "value" => array(
                                esc_html__( "Gradient", 'select-core' ) => "gradient_hover",
                                esc_html__( "Upward", 'select-core' ) => "upward_hover",
                                esc_html__( "Opposite Corners", 'select-core' ) => "opposite_corners_hover",
                                esc_html__( "Slide from left", 'select-core' ) => "slide_from_left_hover",
                                esc_html__( "Subtle Vertical", 'select-core' ) => "subtle_vertical_hover",
                                esc_html__( "Image Subtle Rotate & Zoom", 'select-core' ) => "image_subtle_rotate_zoom_hover",
                                esc_html__( "Image & Text Zoom", 'select-core' ) => "image_text_zoom_hover",
                                esc_html__( "Prominent Plain", 'select-core' ) => "prominent_plain_hover",
                                esc_html__( "Prominent Blur", 'select-core' ) => "prominent_blur_hover",
                                esc_html__( "Cursor Change", 'select-core' ) => "cursor_change_hover",
                                esc_html__( "Slide Up", 'select-core' ) => "slide_up_hover",
                                esc_html__( "Text Slides With Image", 'select-core' ) => "text_slides_with_image",
                                esc_html__( "Thin Plus Only", 'select-core' ) => "thin_plus_only",
                                esc_html__( "Icons Bottom Corner", 'select-core' ) => "icons_bottom_corner",
                                esc_html__( "Move From Left", 'select-core' ) => "slow_zoom",
                                esc_html__( "Split Up", 'select-core' ) => "split_up",
                                esc_html__( "Circle", 'select-core' ) => "circle_hover",
                                esc_html__( "Animated Border", 'select-core' ) => "border_hover"
                            ),
                            "dependency" => array('element' => "type", 'value' => array('masonry'))
                        ),
                        array(
                            "type" => "dropdown",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Enable Border on Items", 'select-core' ),
                            "param_name" => "item_border",
                            "value" => array(
                                esc_html__( "No", 'select-core' ) => "no",
                                esc_html__( "Yes", 'select-core' ) => "yes"
                                ),
                            "dependency" => array('element' => "type", 'value' => array('standard_no_space','text_on_hover_image_no_space','text_before_hover_no_space'))
                        ),
                        array(
                            "type" => "colorpicker",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Item Border Color", 'select-core' ),
                            "param_name" => "item_border_color",
                            "value" => "",
                            "dependency" => array('element' => "item_border", 'value' => array('yes'))
                        ),
                        array(
                            "type" => "textfield",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Item Border Width", 'select-core' ),
                            "param_name" => "item_border_width",
                            "value" => "",
                            "dependency" => array('element' => "item_border", 'value' => array('yes'))
                        ),
                        array(
                            "type" => "colorpicker",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Info Box Hover Color", 'select-core' ),
                            "param_name" => "hover_box_color_standard",
                            "value" => "",
                            "dependency" => array('element' => "hover_type_standard", 'value' => array('upward_hover','slide_from_left_hover'))
                        ),
                        array(
                            "type" => "colorpicker",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Info Box Hover Color", 'select-core' ),
                            "param_name" => "hover_box_color_text_on_hover_image",
                            "value" => "",
                            "dependency" => array('element' => "hover_type_text_on_hover_image", 'value' => array('upward_hover','slide_from_left_hover'))
                        ),
                        array(
                            "type" => "colorpicker",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Info Box Hover Color", 'select-core' ),
                            "param_name" => "hover_box_color_masonry",
                            "value" => "",
                            "dependency" => array('element' => "hover_type_masonry", 'value' => array('upward_hover','slide_from_left_hover'))
                        ),
                        array(
                            "type" => "textfield",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Gradient Position Before Hover", 'select-core' ),
                            "param_name" => "gradient_position_standard",
                            "value" => "",
                            "description" => esc_html__( 'Enter position pixels or percentages. Ex. 30px or 30%. Default value is 30%.', 'select-core' ),
                            "dependency" => array('element' => "hover_type_standard", 'value' => array('gradient_hover'))
                        ),
                        array(
                            "type" => "textfield",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Gradient Position Before Hover", 'select-core' ),
                            "param_name" => "gradient_position_text_before_hover",
                            "value" => "",
                            "description" => esc_html__( 'Enter position pixels or percentages. Ex. 30px or 30%. Default value is 30%.', 'select-core' ),
                            "dependency" => array('element' => "hover_type_text_before_hover", 'value' => array('gradient_hover'))
                        ),
                        array(
                            "type" => "textfield",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Gradient Position Before Hover", 'select-core' ),
                            "param_name" => "gradient_position_masonry",
                            "value" => "",
                            "description" => esc_html__( 'Enter position pixels or percentages. Ex. 30px or 30%. Default value is 30%.', 'select-core' ),
                            "dependency" => array('element' => "hover_type_masonry", 'value' => array('gradient_hover'))
                        ),
                        array(
                            "type" => "dropdown",
                            "class" => "",
                            "heading" => esc_html__( "Info Box Text Alignment", 'select-core' ),
                            "param_name" => "text_align",
                            "value" => array(
                                ""   => "",
                                esc_html__( "Left", 'select-core' ) => "left",
                                esc_html__( "Center", 'select-core' ) => "center",
                                esc_html__( "Right", 'select-core' ) => "right"
                            ),
                            "description" => esc_html__( "Note: Info Box, containing Portfolio Title (and Categories), is placed under Portfolio Image", 'select-core' ),
                            "dependency" => array('element' => 'type', 'value' => array('standard', 'standard_no_space', 'masonry_with_space'))
                        ),
                        array(
                            "type" => "colorpicker",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Info Box Background Color", 'select-core' ),
                            "param_name" => "box_background_color",
                            "value" => "",
                            "dependency" => array('element' => "type", 'value' => array('standard','standard_no_space', 'masonry_with_space'))
                        ),
                        array(
                            "type" => "dropdown",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Info Box Border", 'select-core' ),
                            "param_name" => "box_border",
                            "value" => array(
                                esc_html__( "Default", 'select-core' ) => "",
                                esc_html__( "No", 'select-core' ) => "no",
                                esc_html__( "Yes", 'select-core' ) => "yes"
                            ),
                            "dependency" => array('element' => "type", 'value' => array('standard','standard_no_space', 'masonry_with_space'))
                        ),
                        array(
                            "type" => "textfield",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Info Box Border Width (px)", 'select-core' ),
                            "param_name" => "box_border_width",
                            "value" => "",
                            "dependency" => array('element' => "box_border", 'value' => array('yes'))
                        ),
                        array(
                            "type" => "colorpicker",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Box Border Color", 'select-core' ),
                            "param_name" => "box_border_color",
                            "value" => "",
                            "dependency" => array('element' => "box_border", 'value' => array('yes'))
                        ),
                        array(
                            "type" => "textfield",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Info Box Padding", 'select-core' ),
                            "param_name" => "info_box_padding",
                            "value" => "",
                            "description" => esc_html__( "Set padding for info box in format 0px 5px 15px 5px", 'select-core' ),
                            "dependency" => array('element' => "type", 'value' => array('standard','standard_no_space', 'masonry_with_space'))
                        ),
                        array(
                            "type" => "dropdown",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Enable Item Shadow", 'select-core' ),
                            "param_name" => "box_shadow",
                            "value" => array(
                                esc_html__( "Default", 'select-core' ) => "",
                                esc_html__( "No", 'select-core' ) => "no",
                                esc_html__( "Yes", 'select-core' ) => "yes"
                            ),
                            "dependency" => array('element' => "type", 'value' => array('standard', 'text_on_hover_image', 'text_before_hover'))
                        ),
                        array(
                            "type" => "textfield",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Shadow Vertical Offset (px)", 'select-core' ),
                            "param_name" => "box_shadow_vertical_offset",
                            "value" => "",
                            "dependency" => array('element' => "box_shadow", 'value' => array('yes'))
                        ),
                        array(
                            "type" => "textfield",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Shadow Horizontal Offset (px)", 'select-core' ),
                            "param_name" => "box_shadow_horizontal_offset",
                            "value" => "",
                            "dependency" => array('element' => "box_shadow", 'value' => array('yes'))
                        ),
                        array(
                            "type" => "textfield",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Shadow Blur (px)", 'select-core' ),
                            "param_name" => "box_shadow_blur",
                            "value" => "",
                            "dependency" => array('element' => "box_shadow", 'value' => array('yes'))
                        ),
                        array(
                            "type" => "textfield",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Shadow Spread (px)", 'select-core' ),
                            "param_name" => "box_shadow_spread",
                            "value" => "",
                            "dependency" => array('element' => "box_shadow", 'value' => array('yes'))
                        ),
                        array(
                            "type" => "colorpicker",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Shadow Color", 'select-core' ),
                            "param_name" => "box_shadow_color",
                            "value" => "",
                            "dependency" => array('element' => "box_shadow", 'value' => array('yes'))
                        ),
                        array(
                            "type" => "colorpicker",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Image Color Overlay", 'select-core' ),
                            "param_name" => "overlay_background_color",
                            "value" => "",
                            "dependency" => array('element' => 'type', 'value' => array('standard', 'standard_no_space', 'text_on_hover_image', 'text_on_hover_image_no_space', 'text_before_hover', 'text_before_hover_no_space', 'masonry', 'masonry_with_space','masonry_with_space_without_description'))
                        ),
                        array(
                            "type" => "colorpicker",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Cursor Color", 'select-core' ),
                            "param_name" => "cursor_color_hover_type_text_on_hover_image",
                            "value" => "",
                            "dependency" => array('element' => "hover_type_text_on_hover_image", 'value' => array('thin_plus_only'))
                        ),
                        array(
                            "type" => "colorpicker",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Cursor Color", 'select-core' ),
                            "param_name" => "cursor_color_hover_type_masonry",
                            "value" => "",
                            "dependency" => array('element' => "hover_type_masonry", 'value' => array('thin_plus_only'))
                        ),
                        array(
                            "type" => "colorpicker",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Cursor Color", 'select-core' ),
                            "param_name" => "cursor_color_hover_type_standard",
                            "value" => "",
                            "dependency" => array('element' => "hover_type_standard", 'value' => array('thin_plus_only'))
                        ),
                        array(
                            "type" => "dropdown",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Number of Columns", 'select-core' ),
                            "param_name" => "columns",
                            "value" => array(
                                "" => "",
                                "1" => "1",
                                "2" => "2",
                                "3" => "3",
                                "4" => "4",
                                "5" => "5",
                                "6" => "6"
                            ),
                            "dependency" => array('element' => "type", 'value' => array('standard','standard_no_space','text_on_hover_image','text_on_hover_image_no_space', 'text_before_hover','text_before_hover_no_space','masonry_with_space','masonry_with_space_without_description'))
                        ),
                        array(
                            "type" => "dropdown",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Grid Size", 'select-core' ),
                            "param_name" => "grid_size",
                            "value" => array(
                                esc_html__( "Default", 'select-core' ) => "",
                                esc_html__( "3 Columns Grid", 'select-core' ) => "3",
                                esc_html__( "4 Columns Grid", 'select-core' ) => "4",
                                esc_html__( "5 Columns Grid", 'select-core' ) => "5"
                            ),
                            "description" => esc_html__( "This option is only for Full Width Page Template and Full Width option on row", 'select-core' ),
                            "dependency" => array('element' => "type", 'value' => array('masonry'))
                        ),
                        array(
                            "type" => "dropdown",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Portfolio Loading Type", 'select-core' ),
                            "param_name" => "portfolio_loading_type",
                            "value" => array(
                                "" => "",
                                esc_html__( "Fade - one by one", 'select-core' ) => "portfolio_one_by_one",
                                esc_html__( "Slide from top - diagonal", 'select-core' ) => "slide_from_top",
                                esc_html__( "Slide from left - random", 'select-core' ) => "slide_from_left",
                                esc_html__( "Fade - diagonal", 'select-core' ) => "diagonal_fade"
                            ),
                            "dependency" => array('element' => "type", 'value' => array('standard','standard_no_space','text_on_hover_image','text_on_hover_image_no_space', 'text_before_hover','text_before_hover_no_space'))
                        ),
                        array(
                            "type" => "dropdown",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Portfolio Loading Type", 'select-core' ),
                            "param_name" => "portfolio_loading_type_masonry",
                            "value" => array(
                                "" => "",
                                esc_html__( "Fade - one by one", 'select-core' ) => "portfolio_one_by_one",
                                esc_html__( "Fade - from bottom", 'select-core' ) => "portfolio_fade_from_bottom"
                            ),
                            "dependency" => array('element' => "type", 'value' => array('masonry_with_space', 'masonry','masonry_with_space_without_description'))
                        ),
                        array(
                            "type" => "dropdown",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Image Proportions", 'select-core' ),
                            "param_name" => "image_size",
                            "value" => array(
                                esc_html__( "Default Size", 'select-core' ) => "",
                                esc_html__( "Original", 'select-core' ) => "full",
                                esc_html__( "Square", 'select-core' ) => "square",
                                esc_html__( "Landscape", 'select-core' ) => "landscape",
                                esc_html__( "Portrait", 'select-core' ) => "portrait"
                            ),
                            "dependency" => array('element' => "type", 'value' => array('standard', 'standard_no_space','text_on_hover_image','text_on_hover_image_no_space', 'text_before_hover','text_before_hover_no_space'))
                        ),
                        array(
                            "type" => "dropdown",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Order By", 'select-core' ),
                            "param_name" => "order_by",
                            "value" => array(
                                "" => "",
                                esc_html__( "Menu Order", 'select-core' ) => "menu_order",
                                esc_html__( "Title", 'select-core' ) => "title",
                                esc_html__( "Date", 'select-core' ) => "date"
                            )
                        ),
                        array(
                            "type" => "dropdown",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Order", 'select-core' ),
                            "param_name" => "order",
                            "value" => array(
                                "" => "",
                                esc_html__( "ASC", 'select-core' ) => "ASC",
                                esc_html__( "DESC", 'select-core' ) => "DESC",
                            )
                        ),
                        array(
                            "type" => "dropdown",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Enable Category Filter", 'select-core' ),
                            "param_name" => "filter",
                            "value" => array(
                                "" => "",
                                esc_html__( "Yes", 'select-core' ) => "yes",
                                esc_html__( "No", 'select-core' ) => "no"
                            ),
                            "description" => esc_html__( "Default value is No", 'select-core' )
                        ),
                        array(
                            "type" => "dropdown",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Disable Filter Title", 'select-core' ),
                            "param_name" => "disable_filter_title",
                            "value" => array(
                                "" => "",
                                esc_html__( "Yes", 'select-core' ) => "yes",
                                esc_html__( "No", 'select-core' ) => "no"
                            ),
                            "description" => esc_html__( "Default value is Yes", 'select-core' ),
                            "dependency" => array('element' => "filter", 'value' => array('yes'))
                        ),
                        array(
                            "type" => "dropdown",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Filter Order By", 'select-core' ),
                            "param_name" => "filter_order_by",
                            "value" => array(
                                esc_html__( "Name", 'select-core' ) => "name",
                                esc_html__( "Count", 'select-core' ) => "count",
                                esc_html__( "Id", 'select-core' ) => "id",
                                esc_html__( "Slug", 'select-core' ) => "slug"
                            ),
                            "description" => esc_html__( "Default value is Name", 'select-core' ),
                            "dependency" => array('element' => "filter", 'value' => array('yes'))
                        ),
                        array(
                            "type" => "dropdown",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Horizontal Filter Positioning", 'select-core' ),
                            "param_name" => "filter_align",
                            "value" => array(
                                esc_html__( "Left", 'select-core' ) => "left_align",
                                esc_html__( "Center", 'select-core' ) => "center_align",
                                esc_html__( "Right", 'select-core' ) => "right_align"
                            ),
                            "dependency" => array('element' => "filter", 'value' => array('yes'))
                        ),
						array(
                            "type" => "dropdown",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Enable Read More Button", 'select-core' ),
                            "param_name" => "read_more_button",
                            "value" => array(
                                esc_html__( "No", 'select-core' ) => "no",
                                esc_html__( "Yes", 'select-core' ) => "yes"
                            ),
                            "description" => esc_html__( "Display button with Check it out text linking to portfolio page. This option is available only for Text on Image Hover (No Space) template with Subtle Vertical animation.", 'select-core' ),
							"dependency" => array('element' => "hover_type_text_on_hover_image", 'value' => array('subtle_vertical_hover'))
                        ),
						array(
                            "type" => "dropdown",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Button Size", 'select-core' ),
                            "param_name" => "button_size",
                            "value" => array(
                                esc_html__( "Default", 'select-core' ) => "",
                                esc_html__( "Small", 'select-core' ) => "small",
                                esc_html__( "Medium", 'select-core' ) => "medium",
                                esc_html__( "Large", 'select-core' ) => "large",
                                esc_html__( "Extra Large", 'select-core' ) => "big_large"
                            ),
							"dependency" => array('element' => "read_more_button", 'value' => array('yes'))
                        ),
						array(
                            "type" => "dropdown",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Button Style", 'select-core' ),
                            "param_name" => "button_style",
                            "value" => array(
                                esc_html__( "Default", 'select-core' ) => "",
                                esc_html__( "White", 'select-core' ) => "white"
                            ),
							"dependency" => array('element' => "read_more_button", 'value' => array('yes'))
                        ),
                        array(
                            "type" => "dropdown",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Enable Icons on Portfolio Image", 'select-core' ),
                            "param_name" => "show_icons",
                            "value" => array(
                                esc_html__( "Yes", 'select-core' ) => "yes",
                                esc_html__( "No", 'select-core' ) => "no"
                            ),
                            "description" => esc_html__( "Note: Icons will always be disabled if you enable Cursor Change, Thin Plus Only and Split Up and Text Slides With Image as Hover Animation", 'select-core' ),
                            "dependency" => array('element' => 'type', 'value' => array('standard', 'standard_no_space', 'text_on_hover_image', 'text_on_hover_image_no_space', 'text_before_hover', 'text_before_hover_no_space', 'masonry', 'masonry_with_space','masonry_with_space_without_description'))
                        ),
                        array(
                            "type" => "dropdown",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Icons Position", 'select-core' ),
                            "param_name" => "icons_position",
                            "value" => array(
                                esc_html__( "Default", 'select-core' ) => "",
                                esc_html__( "Center", 'select-core' ) => "center",
                                esc_html__( "Left", 'select-core' ) => "left",
                                esc_html__( "Right", 'select-core' ) => "right"
                            ),
                            "description" => esc_html__( "This Option is only available for Icons Bottom Corner, Text Slides With Image and Slow Zoom", 'select-core' ),
                            "dependency" => array('element' => "show_icons", 'value' => array('yes'))
                        ),
                        array(
                            "type" => "dropdown",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Show Link Icon", 'select-core' ),
                            "param_name" => "link_icon",
                            "value" => array(
                                "" => "",
                                esc_html__( "Yes", 'select-core' ) => "yes",
                                esc_html__( "No", 'select-core' ) => "no"
                            ),
                            "description" => esc_html__( "Default value is Yes", 'select-core' ),
                            "dependency" => array('element' => "show_icons", 'value' => array('yes'))
                        ),
                        array(
                            "type" => "dropdown",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Show Lightbox Icon", 'select-core' ),
                            "param_name" => "lightbox",
                            "value" => array(
                                "" => "",
                                esc_html__( "Yes", 'select-core' ) => "yes",
                                esc_html__( "No", 'select-core' ) => "no"
                            ),
                            "description" => esc_html__( "Default value is Yes", 'select-core' ),
                            "dependency" => array('element' => "show_icons", 'value' => array('yes'))
                        ),
                        array(
                            "type" => "dropdown",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Show Like Icon", 'select-core' ),
                            "param_name" => "show_like",
                            "value" => array(
                                "" => "",
                                esc_html__( "Yes", 'select-core' ) => "yes",
                                esc_html__( "No", 'select-core' ) => "no"
                            ),
                            "description" => esc_html__( "Default value is Yes (Disabled on hover type text slides with image)", 'select-core' ),
                            "dependency" => array('element' => "show_icons", 'value' => array('yes'))
                        ),
                        array(
                            "type" => "dropdown",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Show Title", 'select-core' ),
                            "param_name" => "show_title",
                            "value" => array(
                                "" => "",
                                esc_html__( "Yes", 'select-core' ) => "yes",
                                esc_html__( "No", 'select-core' ) => "no"
                            )
                        ),
                        array(
                            "type" => "dropdown",
                            "class" => "",
                            "heading" => esc_html__( "Title Tag", 'select-core' ),
                            "param_name" => "title_tag",
                            "value" => array(
                                ""   => "",
                                esc_html__( "h2", 'select-core' ) => "h2",
                                esc_html__( "h3", 'select-core' ) => "h3",
                                esc_html__( "h4", 'select-core' ) => "h4",
                                esc_html__( "h5", 'select-core' ) => "h5",
                                esc_html__( "h6", 'select-core' ) => "h6",
                            ),
                            "dependency" => array('element' => "show_title", 'value' => array('yes'))
                        ),
                        array(
                            "type" => "colorpicker",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Title Color", 'select-core' ),
                            "param_name" => "title_color",
                            "value" => "",
                            "dependency" => array('element' => "show_title", 'value' => array('yes'))
                        ),
                        array(
                            "type" => "textfield",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Title Font Size (px)", 'select-core' ),
                            "param_name" => "title_font_size",
                            "value" => "",
                            "dependency" => array('element' => "show_title", 'value' => array('yes'))
                        ),
                        array(
                            "type" => "dropdown",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Disable Link On Title", 'select-core' ),
                            "param_name" => "disable_link_on_title",
                            "value" => array(
                                esc_html__( "No", 'select-core' ) => "no",
                                esc_html__( "Yes", 'select-core' ) => "yes"
                            ),
                            "dependency" => array('element' => "show_title", 'value' => array('yes'))
                        ),
                        array(
                            "type" => "dropdown",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Disable Portfolio Image Link", 'select-core' ),
                            "param_name" => "disable_link",
                            "value" => array(
                                "" => "",
                                esc_html__( "Yes", 'select-core' ) => "yes",
                                esc_html__( "No", 'select-core' ) => "no"
                            ),
                            "description" => esc_html__( "Note: Image link will always be disabled if you enable icons in: Subtle Vertical, Image Subtle Rotate & Zoom, Image & Text Zoom, Slide Up, Circle and Animated Border hover animation type", 'select-core' )
                        ),
                        array(
                            "type" => "dropdown",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Portfolio Link Should Point to", 'select-core' ),
                            "param_name" => "portfolio_link_pointer",
                            "value" => array(
                                esc_html__( "Single Portfolio", 'select-core' ) => "single",
                                esc_html__( "Lightbox", 'select-core' ) => "lightbox"
                            ),
                            "description" => esc_html__( "Default value is Single Portfolio", 'select-core' ),
                            "dependency" => array('element' => "disable_link", 'value' => array('no',''))
                        ),
                        array(
                            "type" => "dropdown",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Show Separator", 'select-core' ),
                            "param_name" => "separator",
                            "value" => array(
                                "" => "",
                                esc_html__( "Yes", 'select-core' ) => "yes",
                                esc_html__( "No", 'select-core' ) => "no"
                            )
                        ),
                        array(
                            "type" => "textfield",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Separator thickness (px)", 'select-core' ),
                            "param_name" => "separator_thickness",
                            "dependency" => array('element' => "separator", 'value' => array('yes'))
                        ),
                        array(
                            "type" => "colorpicker",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Separator Color", 'select-core' ),
                            "param_name" => "separator_color",
                            "value" => "",
                            "dependency" => array('element' => "separator", 'value' => array('yes'))
                        ),
                        array(
                            "type" => "dropdown",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Animate Separator", 'select-core' ),
                            "param_name" => "separator_animation",
                            "value" => array(
                                "" => "",
                                esc_html__( "Yes", 'select-core' ) => "yes",
                                esc_html__( "No", 'select-core' ) => "no"
                            ),
                            "dependency" => array('element' => "separator", 'value' => array('yes'))
                        ),
                        array(
                            "type" => "dropdown",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Show Category Names", 'select-core' ),
                            "param_name" => "show_categories",
                            "value" => array(
                                esc_html__( "Yes", 'select-core' ) => "yes",
                                esc_html__( "No", 'select-core' ) => "no"
                            ),
                            "description" => esc_html__( "Default value is Yes", 'select-core' ),
                        ),
                        array(
                            "type" => "colorpicker",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Category Name Color", 'select-core' ),
                            "param_name" => "category_color",
                            "value" => "",
                            "dependency" => array('element' => "show_categories", 'value' => array('yes'))
                        ),
                        array(
                            "type" => "textfield",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "One-Category Portfolio List", 'select-core' ),
                            "param_name" => "category",
                            "value" => "",
                            "description" => esc_html__( "Enter one category slug (leave empty for showing all categories)", 'select-core' )
                        ),
                        array(
                            "type" => "dropdown",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Show Load More", 'select-core' ),
                            "param_name" => "show_load_more",
                            "value" => array(
                                "" => "",
                                esc_html__( "Yes", 'select-core' ) => "yes",
                                esc_html__( "No", 'select-core' ) => "no"
                            ),
                            "description" => esc_html__( "Default value is Yes", 'select-core' ),
                            "dependency" => array('element' => "type", 'value' => array('standard','standard_no_space','text_on_hover_image','text_on_hover_image_no_space',  'text_before_hover','text_before_hover_no_space','masonry_with_space','masonry_with_space_without_description'))
                        ),
                        array(
                            "type" => "textfield",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Load More Button Margin (px)", 'select-core' ),
                            "param_name" => "load_more_margin",
                            "value" => "",
                            "description" =>  esc_html__("Please insert top margin for load more button", 'select-core'),
                            "dependency" => array('element' => "show_load_more", 'value' => array('yes',''))
                        ),
                        array(
                            "type" => "dropdown",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Show Icon In Button", 'select-core' ),
                            "param_name" => "show_load_more_icon",
                            "value" => array(
                                esc_html__( "No", 'select-core' ) => "no",
                                esc_html__( "Yes", 'select-core' ) => "yes"
                            ),
                            "description" => esc_html__( "Default value is No", 'select-core' ),
                            "dependency" => array('element' => "show_load_more", 'value' => array('yes',''))
                        )),
                    $icons_array,
                    array(
                        array(
                            "type" => "textfield",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Icon Size (px)", 'select-core' ),
                            "param_name" => "icon_size",
                            "value" => "",
                            "dependency" => array('element' => "show_load_more_icon", 'value' => array('yes'))
                        ),
                        array(
                            "type" => "textfield",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Number of Portfolios Per Page", 'select-core' ),
                            "param_name" => "number",
                            "value" => "-1",
                            "description" => esc_html__( "(enter -1 to show all)", 'select-core' ),
                            "dependency" => array('element' => "type", 'value' => array('standard','standard_no_space','text_on_hover_image','text_on_hover_image_no_space', 'text_before_hover','text_before_hover_no_space','masonry','masonry_with_space','masonry_with_space_without_description'))
                        ),
                        array(
                            "type" => "textfield",
                            "holder" => "div",
                            "class" => "",
                            "heading" => esc_html__( "Show Only Projects with Listed IDs", 'select-core' ),
                            "param_name" => "selected_projects",
                            "value" => "",
                            "description" => esc_html__( "Delimit ID numbers by comma (leave empty for all)", 'select-core' )
                        )
                    )
                )
            ) );
        }
    }

    /**
     * Renders shortcodes HTML
     *
     * @param $atts array of shortcode params
     * @param $content string shortcode content
     * @return string
     */
    public function render($atts, $content = null) {
        
        $portfolio_qode_like = "on";
        if (pitch_qode_options()->getOptionValue( 'portfolio_qode_like' )) {
            $portfolio_qode_like = pitch_qode_options()->getOptionValue( 'portfolio_qode_like' );
        }

        $portfolio_filter_class = "";
	    if (pitch_qode_options()->getOptionValue( 'portfolio_filter_disable_separator' ) == "yes") {
		    $portfolio_filter_class = "without_separator";
	    }

        $args = array(
            "type" => "standard",
            "padding_between" => "",
            "masonry_space" => "no",
			"parallax_item_speed" => "0.3",
			"parallax_item_offset" => "0",
            "force_full_width" => "no",
            "hover_type_standard" => "gradient_hover",
            "hover_type_text_on_hover_image" => "upward_hover",
            "hover_type_text_before_hover" => "gradient_hover",
            "hover_type_masonry" => "gradient_hover",
            "item_border" => "no",
            "item_border_color" => "",
            "item_border_width" => "",
            "info_box_padding" => "",
            "box_border" => "",
            "box_background_color" => "",
            "box_border_color" => "",
            "box_border_width" => "",
            "box_shadow" => "",
            "box_shadow_vertical_offset" => "",
            "box_shadow_horizontal_offset" => "",
            "box_shadow_blur" => "",
            "box_shadow_spread" => "",
            "box_shadow_color" => "",
            "hover_box_color_standard" => "",
            "hover_box_color_text_on_hover_image" => "",
            "hover_box_color_masonry" => "",
            "overlay_background_color" => "",
            "gradient_position_standard" => "",
            "gradient_position_text_before_hover" => "",
            "gradient_position_masonry" => "",
            "cursor_color_hover_type_text_on_hover_image"          => "",
            "cursor_color_hover_type_masonry"          => "",
            "cursor_color_hover_type_standard"          => "",
            "columns" => "3",
            "grid_size" => "",
            "image_size" => "",
            "order_by" => "menu_order",
            "order" => "ASC",
            "number" => "-1",
            "filter" => "no",
            "disable_filter_title" => "yes",
            "filter_order_by" => "name",
            "filter_align" => "left_align",
            "read_more_button" => "no",
            "button_size" => "",
            "button_style" => "",
            "show_icons" => "yes",
            "icons_position" => "",
            "link_icon" => "yes",
            "lightbox" => "yes",
            "show_like" => "yes",
            "disable_link" => "no",
            "portfolio_link_pointer" => "single",
            "show_categories" => "yes",
            "category_color" => "",
            "category" => "",
            "separator" => "",
            "separator_thickness" => "",
            "separator_color" => "",
            "separator_animation" => "",
            "selected_projects" => "",
            "show_load_more" => "yes",
            "load_more_margin" => "",
            "show_load_more_icon" => "no",
            "icon_size" => "",
            "show_title" => "yes",
            "title_tag" => "h4",
            "title_font_size" => "",
            "title_color" => "",
            "disable_link_on_title" => "",
            "text_align" => "",
            "portfolio_loading_type" => "",
            "portfolio_loading_type_masonry" => ""
        );

        $args = array_merge($args, pitch_qode_icon_collections()->getShortcodeParams());

        extract(shortcode_atts($args, $atts));

        $padding_between = esc_attr($padding_between);
        $masonry_space = esc_attr($masonry_space);
		$parallax_item_speed = esc_attr($parallax_item_speed);
		$parallax_item_offset = esc_attr($parallax_item_offset);
        $info_box_padding = esc_attr($info_box_padding);
        $box_background_color = esc_attr($box_background_color);
        $box_border_color = esc_attr($box_border_color);
        $box_border_width = esc_attr($box_border_width);
        $hover_box_color_standard = esc_attr($hover_box_color_standard);
        $hover_box_color_text_on_hover_image = esc_attr($hover_box_color_text_on_hover_image);
        $hover_box_color_masonry = esc_attr($hover_box_color_masonry);
        $gradient_position_standard = esc_attr($gradient_position_standard);
        $gradient_position_text_before_hover = esc_attr($gradient_position_text_before_hover);
        $gradient_position_masonry = esc_attr($gradient_position_masonry);
        $overlay_background_color = esc_attr($overlay_background_color);
        $cursor_color_hover_type_text_on_hover_image = esc_attr($cursor_color_hover_type_text_on_hover_image);
        $cursor_color_hover_type_masonry = esc_attr($cursor_color_hover_type_masonry);
        $cursor_color_hover_type_standard = esc_attr($cursor_color_hover_type_standard);
        $number = esc_attr($number);
        $grid_size = esc_attr($grid_size);
        $category_color = esc_attr($category_color);
        $category = esc_attr($category);
        $separator_thickness = esc_attr($separator_thickness);
        $separator_color = esc_attr($separator_color);
        $selected_projects = esc_attr($selected_projects);
        $load_more_margin = esc_attr($load_more_margin);
        $title_font_size = esc_attr($title_font_size);
        $title_color = esc_attr($title_color);
        $portfolio_loading_type = esc_attr($portfolio_loading_type);
        $portfolio_loading_type_masonry = esc_attr($portfolio_loading_type_masonry);


        $headings_array = array('h2', 'h3', 'h4', 'h5', 'h6');

        //get correct heading value. If provided heading isn't valid get the default one
        $title_tag = (in_array($title_tag, $headings_array)) ? $title_tag : $args['title_tag'];

        $html = "";
        $article_classes = '';
        $article_style = array();

        // adding correct classes
        $_type_class = '';
        $_portfolio_space_class = '';
        $_portfolio_masonry_with_space_class = '';
        if ($type == "text_on_hover_image" || $type == "text_before_hover") {
            $_type_class = " hover_text";
            $_portfolio_space_class = "portfolio_with_space portfolio_with_hover_text";
        } elseif ($type == "standard" || $type == "masonry_with_space" || $type == "masonry_with_space_without_description") {
            $_type_class = " standard";
            $_portfolio_space_class = "portfolio_with_space portfolio_standard";
            if ($type == "masonry_with_space" || $type == "masonry_with_space_without_description") {
                $_portfolio_masonry_with_space_class = ' masonry_with_space';
            }
        } elseif ($type == "standard_no_space") {
            $_type_class = " standard_no_space";
            $_portfolio_space_class = "portfolio_no_space portfolio_standard";
        } elseif ($type == "text_on_hover_image_no_space" || $type == "text_before_hover_no_space") {
            $_type_class = " hover_text no_space";
            $_portfolio_space_class = "portfolio_no_space portfolio_with_hover_text";
        } elseif($type == "masonry" && $masonry_space == "yes"){
            $_type_class = " masonry_with_padding";
        }

        // portfolio on paspartu has little padding by default
        if (pitch_qode_options()->getOptionValue( 'paspartu_portfolio_full_width' ) =='yes' ){
            $_portfolio_space_class .= ' portfolio_full_width_on_portfolio';
        }

        // adding padding between article and minus margin on project holder for left and right side
        $project_holder_style = '';
        if ( $padding_between !== '' && ($type == "masonry_with_space" || $type == "masonry_with_space_without_description")) {
            $article_style[] = "padding:".$padding_between."px;";
            $article_style[] = "margin: 0;";
            $project_holder_style .= "margin: -".$padding_between."px;";
        }


        if ($item_border == "yes") {
        	if ($type == 'standard_no_space' || $type == 'text_on_hover_image_no_space' || $type == 'text_before_hover_no_space') {
        		if ($item_border_color !== '') {
        			$item_border_width_px = '1px';
        			if ($item_border_width !== '') {
        				$item_border_width_px = (strstr($item_border_width, 'px', true)) ? $item_border_width : $item_border_width . "px";
        			}
        			$article_style[] = 'border: ' . $item_border_width_px .' solid ' . $item_border_color;
        			$article_style[] = 'box-sizing: border-box;';
        		}
        	}
        }

        // adding portfolio loading
        $portfolio_loading_class = '';
        if($portfolio_loading_type !== '' && (!in_array($type, array('masonry_with_space', 'masonry','masonry_with_space_without_description'))) ) {
            $portfolio_loading_class = $portfolio_loading_type;
        }
        elseif($portfolio_loading_type_masonry !== ''){
            $portfolio_loading_class = $portfolio_loading_type_masonry;
        }

        // adding this class will force full width on types with space on full width templates
        $force_full_width_class = '';
        if($force_full_width == 'yes' && (in_array($type, array('standard','text_on_hover_image','text_before_hover'))) ) {
            $force_full_width_class .= 'force_full_width';
        }

        // adding hover type
        $hover_type = "";
        if ($type == 'standard' || $type == 'standard_no_space' || $type == 'masonry_with_space') {
            $hover_type = $hover_type_standard;
        }
        if ($type == 'text_on_hover_image' || $type == 'text_on_hover_image_no_space' || $type == "masonry_with_space_without_description") {
            $hover_type = $hover_type_text_on_hover_image;
        }
        if ($type == 'text_before_hover' || $type == 'text_before_hover_no_space') {
            $hover_type = $hover_type_text_before_hover;
        }
        if ($type == 'masonry') {
            $hover_type = $hover_type_masonry;
        }


        // this is used for color on thin_plus_only
        $cursor_color = '';
        if($cursor_color_hover_type_text_on_hover_image != '' && $hover_type == 'thin_plus_only' && ($type == 'text_on_hover_image' || $type == 'text_on_hover_image_no_space' || $type == 'masonry_with_space_without_description')){
            $cursor_color = 'style="color:'.$cursor_color_hover_type_text_on_hover_image.'"';
        }
        elseif($cursor_color_hover_type_masonry != '' && $hover_type == 'thin_plus_only' && $type == 'masonry'){
            $cursor_color = 'style="color:'.$cursor_color_hover_type_masonry.'"';
        }
        elseif($cursor_color_hover_type_standard != '' && $hover_type == 'thin_plus_only' && ($type == 'standard' || $type == 'standard_no_space')){
            $cursor_color = 'style="color:'.$cursor_color_hover_type_standard.'"';
        }

        // disable text holder if there is no any element
        $disable_text_holder = '';
        if ($show_title == 'no' && $separator == 'no' && $show_categories == 'no') {
            $disable_text_holder = 'yes';
        }

        // for this type holder needs to be shown
        if ($hover_type == 'slide_from_left_hover' && $show_icons == 'no') {
            $show_icons = 'yes';
            $link_icon = 'no';
            $lightbox = 'no';
            $show_like = 'no';
        }

        // for this type only one icon can be shown (link, or lightbox)
        if ($hover_type == 'text_slides_with_image') {
            if($portfolio_link_pointer == 'single'){
                $link_icon = 'yes';
                $lightbox = 'no';
            }
            elseif($portfolio_link_pointer == 'lightbox'){
                $link_icon = 'no';
                $lightbox = 'yes';
            }
            $show_like = 'no';
        }

        // disable link if icons are shown for these hover type
        if (($hover_type == 'subtle_vertical_hover' || $hover_type == 'image_subtle_rotate_zoom_hover' || $hover_type == 'image_text_zoom_hover' || $hover_type == 'slide_up_hover' || $hover_type == 'circle_hover' || $hover_type == 'border_hover') && $show_icons == 'yes') {
            $disable_link = "yes";
        }

        // disable icons on this hover type
        if ($hover_type == 'cursor_change_hover' || $hover_type == 'thin_plus_only' || $hover_type == 'split_up') {
            $show_icons = "no";
        }

        // adding separator style and class
        $separator_animation_class = "";
        if ($separator_animation == 'yes') {
            $separator_animation_class = "animate";
        }

        $separator_style = "";
        if ($separator_color != '' || $separator_thickness != '') {
            $separator_style = 'style="';
            if ($separator_color != '') {
                $separator_style .= 'background-color: ' . $separator_color . ';';
            }
            if ($separator_thickness != '') {
                $valid_height = (strstr($separator_thickness, 'px', true)) ? $separator_thickness : $separator_thickness . "px";
                $separator_style .= 'height: ' . $valid_height . ';';
            }
            $separator_style .= '"';
        }

        // marging same option for 3 different type
        $gradient_position = '';
        if ($hover_type == "gradient_hover") {
            if (($type == 'standard' || $type == 'standard_no_space' || $type == 'masonry_with_space') && $gradient_position_standard != '') {
                $gradient_position = $gradient_position_standard;
            } elseif (($type == 'text_before_hover' || $type == 'text_before_hover_no_space') && $gradient_position_text_before_hover != '') {
                $gradient_position = $gradient_position_text_before_hover;
            } elseif ($type == 'masonry' && $gradient_position_masonry != '') {
                $gradient_position = $gradient_position_masonry;
            }
        }

        // adding position for icons on hovers (Icons Bottom Corner, Text Slides With Image and Slow Zoom)",
        $icons_position_classes = '';
        if(($hover_type == 'icons_bottom_corner' || $hover_type == 'text_slides_with_image' || $hover_type == 'slow_zoom') && $icons_position != ''){
            $icons_position_classes .= $icons_position;
        }

        // setting shader (gradient or full color)
        $portfolio_shader_style = "";
        if ($overlay_background_color != '' || $gradient_position != '') {
            if ($hover_type == "gradient_hover") {
                if (substr($overlay_background_color, 0, 3) === "rgba") { // if rgba is set, portfolio uses default color
                    $portfolio_shader_style = '';
                } else {

                    $rgb = pitch_qode_hex2rgb($overlay_background_color);

                    $opacity = 0;
                    $overlay_background_color1 = 'rgba(' . $rgb[0] . ',' . $rgb[1] . ',' . $rgb[2] . ',' . $opacity . ')';
                    $opacity = 0.9;
                    $overlay_background_color2 = 'rgba(' . $rgb[0] . ',' . $rgb[1] . ',' . $rgb[2] . ',' . $opacity . ')';

                    $portfolio_shader_style = 'style="';

                    $portfolio_shader_style .= 'background: -webkit-linear-gradient(top, ' . $overlay_background_color1 . ' 10%, ' . $overlay_background_color2 . ' 100%);';
                    $portfolio_shader_style .= 'background: linear-gradient(to bottom, ' . $overlay_background_color1 . ' 10%, ' . $overlay_background_color2 . ' 100%);';

                    if ($gradient_position != '') {
                        $portfolio_shader_style .= 'transform: translate3d(0px, ' . $gradient_position . ', 0px);';
                    }

                    $portfolio_shader_style .= '"';
                }
            } else {
                $portfolio_shader_style = 'style="background-color:' . $overlay_background_color . ';"';
            }
        }

        // adding title style and class
        $title_style = '';
        $title_link_style = ''; // with or without 'a' tag
        if ($title_font_size != "" || $title_color != "") {
            $title_link_style .= 'style="';
            $title_style .= 'style="';
            if ($title_font_size != "") {
                $title_style .= 'font-size: ' . $title_font_size . 'px;';
                $title_link_style .= 'font-size: inherit;';
            }
            if ($title_color != "") {
                $title_style .= 'color: ' . $title_color . ';';
                $title_link_style .= 'color: inherit;';
            }
            $title_style .= '"';
            $title_link_style .= '"';
        }

        // adding category style and class
        $category_style = '';
        if ($category_color != '') {
            $category_style = 'style="color: ' . $category_color . ';"';
        }

        // marging same option for 3 different type
        $hover_box_style = "";
        if ($hover_type == 'upward_hover' || $hover_type == 'slide_from_left_hover') {
            if (($type == 'standard' || $type == 'standard_no_space' ||  $type == "masonry_with_space") && $hover_box_color_standard != '') {
                $hover_box_style = 'style="background-color:' . $hover_box_color_standard . ';"';
            } elseif (($type == 'text_on_hover_image' || $type == 'text_on_hover_image_no_space' || $type == "masonry_with_space_without_description") && $hover_box_color_text_on_hover_image != '') {
                $hover_box_style = 'style="background-color:' . $hover_box_color_text_on_hover_image . ';"';
            } elseif (($type == 'masonry') && $hover_box_color_masonry != '') {
                $hover_box_style = 'style="background-color:' . $hover_box_color_masonry . ';"';
            }
        }
        
        // adding style for 'load more'
        $show_more_style = '';
        $add_icon = '';
        if ($show_load_more != 'no') {
            if ($load_more_margin != '') {
                $load_more_margin = (strstr($load_more_margin, 'px', true)) ? $load_more_margin : $load_more_margin . "px";
                $show_more_style .= 'style="margin-top:' . $load_more_margin . '"';
            }
			if($show_load_more_icon != 'no') {
				if ($icon_pack != "") {
					$icon_style = '';
					$icon_collection_obj = pitch_qode_icon_collections()->getIconCollection($icon_pack);

					if ($icon_size != "") {
						$icon_style .= 'font-size: ' . $icon_size . 'px;';
					}

					if (method_exists($icon_collection_obj, 'render')) {
						$add_icon .= $icon_collection_obj->render(${$icon_collection_obj->param}, array(
							'icon_attributes' => array(
								'style' => $icon_style,
								'class' => 'show_load_more_icon'
							)
						));
					}

				}
			}
        }


        // adding info box style and class for 'standard','standard_no_space' and 'masonry_with_space'
        $portfolio_box_style = array();
        $portfolio_description_class = "";
        if (($box_border == "yes" || $box_background_color != "" || $info_box_padding != "") && ($type == 'standard' || $type == 'standard_no_space' || $type == 'masonry_with_space')) {

            if ($box_border == "yes") {
                $portfolio_box_style[]= "border-style:solid";
                if ($box_border_color != "") {
                    $portfolio_box_style[]= "border-color:" . $box_border_color;
                }
                if ($box_border_width != "") {
                    $box_border_width = (strstr($box_border_width, 'px', true)) ? $box_border_width : $box_border_width . "px";
                    $portfolio_box_style[]= "border-width:" . $box_border_width;
                } else {
                    $portfolio_box_style[]= "border-width: 1px";
                }
            }
            if ($box_background_color != "") {
                $portfolio_box_style[]= "background-color:" . $box_background_color;
            }

            if ($info_box_padding !== ""){
            	$portfolio_box_style[] = "padding: ".$info_box_padding;
            }

            $portfolio_description_class .= ' with_padding';

            $_portfolio_space_class = ' with_description_background';
        }

        // adding portfolio shadow style
        if(($type == 'standard' || $type == 'text_on_hover_image' || $type == 'text_before_hover' ) && $box_shadow == 'yes') {
            if($box_shadow_color === '') {
                $box_shadow_color = '#f1f1f1';
            }

            if($box_shadow_vertical_offset === '') {
                $box_shadow_vertical_offset = '1';
            }

            if($box_shadow_horizontal_offset === '') {
                $box_shadow_horizontal_offset = '1';
            }

            if($box_shadow_blur === '') {
                $box_shadow_blur = '1';
            }

            if($box_shadow_spread === '') {
                $box_shadow_spread = '0';
            }

            $article_style[] = '-webkit-box-shadow: '.$box_shadow_horizontal_offset.'px '.$box_shadow_vertical_offset.'px '.$box_shadow_blur.'px '.$box_shadow_spread.'px '.$box_shadow_color;
            $article_style[] = '-moz-box-shadow: '.$box_shadow_horizontal_offset.'px '.$box_shadow_vertical_offset.'px '.$box_shadow_blur.'px '.$box_shadow_spread.'px '.$box_shadow_color;
            $article_style[] = 'box-shadow: '.$box_shadow_horizontal_offset.'px '.$box_shadow_vertical_offset.'px '.$box_shadow_blur.'px '.$box_shadow_spread.'px '.$box_shadow_color;

            $article_classes .= ' with_box_shadow ';
        }

        if ( $box_shadow == 'no') {
            $article_classes .= ' without_box_shadow ';
        }

        if ($text_align !== '') {
            $portfolio_description_class .= ' text_align_' . $text_align;
        }

        //get proper image size
        switch ($image_size) {
            case 'landscape':
                $thumb_size = 'qode-pitch-portfolio-landscape';
                break;
            case 'portrait':
                $thumb_size = 'qode-pitch-portfolio-portrait';
                break;
            case 'square':
                $thumb_size = 'qode-pitch-portfolio-square';
                break;
            case 'full':
                $thumb_size = 'full';
                break;
            default:
                $thumb_size = 'full';
                break;
        }

        if ($type == "masonry_with_space" || $type == "masonry_with_space_without_description") {
            $thumb_size = 'qode-pitch-portfolio_masonry_with_space';
        }

        $article_style_string = '';
        if(is_array($article_style) && count($article_style)) {
            $article_style_string = 'style="'.implode(';', $article_style).'"';
        }

        // printing html

        if ($type != 'masonry') {

            // adding filter on project holder
            $html .= "<div class='projects_holder_outer v$columns $_portfolio_space_class $_portfolio_masonry_with_space_class'>";
            if ($filter == "yes") {
                $html .= "<div class='filter_outer filter_portfolio " . $filter_align . "'>";
                $html .= "<div class='filter_holder " . $portfolio_filter_class . "'><ul>";
                if ($disable_filter_title != "yes") {
                    $html .= "<li class='filter_title'><span>" . esc_html__('Sort Portfolio:', 'select-core') . "</span></li>";
                }
                if ($type == 'masonry_with_space' || $type == 'masonry_with_space_without_description') {
                    $html .= "<li class='filter' data-filter='*'><span>" . esc_html__('All', 'select-core') . "</span></li>";
                } else {
                    $html .= "<li class='filter' data-filter='all'><span>" . esc_html__('All', 'select-core') . "</span></li>";
                }

                if ($category == "") {
                    $args = array(
                        'parent' => 0,
                        'orderby' => $filter_order_by
                    );
                    $portfolio_categories = get_terms('portfolio_category', $args);
                } else {
                    $top_category = get_term_by('slug', $category, 'portfolio_category');
                    $term_id = '';
                    if (isset($top_category->term_id))
                        $term_id = $top_category->term_id;
                    $args = array(
                        'parent' => $term_id,
                        'orderby' => $filter_order_by
                    );
                    $portfolio_categories = get_terms('portfolio_category', $args);
                }
                foreach ($portfolio_categories as $portfolio_category) {
                    if ($type == 'masonry_with_space' || $type == 'masonry_with_space_without_description') {
                        $html .= "<li class='filter' data-filter='.portfolio_category_$portfolio_category->term_id'><span>$portfolio_category->name</span>";
                    } else {
                        $html .= "<li class='filter' data-filter='portfolio_category_$portfolio_category->term_id'><span>$portfolio_category->name</span>";
                    }
                    $args = array(
                        'child_of' => $portfolio_category->term_id
                    );
                    $html .= '</li>';
                }
                $html .= "</ul></div>";
                $html .= "</div>";
            }

            $html .= "<div class='portfolio_main_holder projects_holder $portfolio_loading_class $force_full_width_class clearfix v$columns$_type_class' style='".$project_holder_style."'>\n";
            if ($type == 'masonry_with_space' || $type == "masonry_with_space_without_description") {
                $html .= '<div class="portfolio_masonry_grid_sizer"></div>';
            }
            if (get_query_var('paged')) {
                $paged = get_query_var('paged');
            } elseif (get_query_var('page')) {
                $paged = get_query_var('page');
            } else {
                $paged = 1;
            }
            if ($category == "") {
                $args = array(
	                'post_status' => 'publish',
                    'post_type' => 'portfolio_page',
                    'orderby' => $order_by,
                    'order' => $order,
                    'posts_per_page' => $number,
                    'paged' => $paged
                );
            } else {
                $args = array(
	                'post_status' => 'publish',
                    'post_type' => 'portfolio_page',
                    'portfolio_category' => $category,
                    'orderby' => $order_by,
                    'order' => $order,
                    'posts_per_page' => $number,
                    'paged' => $paged
                );
            }
            $project_ids = null;
            if ($selected_projects != "") {
                $project_ids = explode(",", $selected_projects);
                $args['post__in'] = $project_ids;
            }
            
            $query_loop = new \WP_Query( $args );

            // loop start
            if ($query_loop->have_posts()) : while ($query_loop->have_posts()) : $query_loop->the_post();
                $terms = wp_get_post_terms(get_the_ID(), 'portfolio_category');
                $html .= "<article $article_style_string class='mix $article_classes";
                foreach ($terms as $term) {
                    $html .= "portfolio_category_$term->term_id ";
                }

                $title = get_the_title();
                $featured_image_array = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full'); //original size

                if (get_post_meta(get_the_ID(), 'qode_portfolio-lightbox-link', true) != "") {
                    $large_image = get_post_meta(get_the_ID(), 'qode_portfolio-lightbox-link', true);
                } else {
                    $large_image = $featured_image_array[0];
                }

                $overlay_background_color_custom = "";
                $portfolio_shader_style_custom = $portfolio_shader_style;
                // If Portfolio Single have chosen Image Overlay color for custom field
                if (get_post_meta(get_the_ID(), 'qode_portfolio-hover-color', true) != "") {
                    $overlay_background_color_custom = esc_attr(get_post_meta(get_the_ID(), "qode_portfolio-hover-color", true));
                   
                    $portfolio_shader_style_custom = "";
                    if ($overlay_background_color_custom != '' || $gradient_position != '') {
                        if ($hover_type == "gradient_hover") {
                            if (substr($overlay_background_color_custom, 0, 3) === "rgba") { // if rgba is set, portfolio uses default color
                                $portfolio_shader_style = '';
                            } else {

                                $rgb = pitch_qode_hex2rgb($overlay_background_color_custom);

                                $opacity = 0;
                                $overlay_background_color1 = 'rgba(' . $rgb[0] . ',' . $rgb[1] . ',' . $rgb[2] . ',' . $opacity . ')';
                                $opacity = 0.9;
                                $overlay_background_color2 = 'rgba(' . $rgb[0] . ',' . $rgb[1] . ',' . $rgb[2] . ',' . $opacity . ')';

                                $portfolio_shader_style_custom = 'style="';

                                $portfolio_shader_style_custom .= 'background: -webkit-linear-gradient(top, ' . $overlay_background_color1 . ' 10%, ' . $overlay_background_color2 . ' 100%);';
                                $portfolio_shader_style_custom .= 'background: linear-gradient(to bottom, ' . $overlay_background_color1 . ' 10%, ' . $overlay_background_color2 . ' 100%);';

                                if ($gradient_position != '') {
                                    $portfolio_shader_style_custom .= 'transform: translate3d(0px, ' . $gradient_position . ', 0px);';
                                }

                                $portfolio_shader_style_custom .= '"';
                            }
                        } else {
                            $overlay_background_color_opacity = (get_post_meta(get_the_ID(), "qode_portfolio-hover-color-opacity", true))?esc_attr(get_post_meta(get_the_ID(), "qode_portfolio-hover-color-opacity", true)):'1';
                            $rgb = pitch_qode_hex2rgb($overlay_background_color_custom);
                            $portfolio_shader_style_custom = 'style="background-color:rgba('  . $rgb[0] . ',' . $rgb[1] . ',' . $rgb[2] . ',' . $overlay_background_color_opacity .  ');"';
                        }
                    }

                }


                $slug_list_ = "pretty_photo_gallery";

                $custom_portfolio_link = get_post_meta(get_the_ID(), 'qode_portfolio-external-link', true);
                $portfolio_link = $custom_portfolio_link != "" ? $custom_portfolio_link : get_permalink();
                $target = $custom_portfolio_link != "" ? '_self' : '_self';

                $html .="'>";  //article

                // get categories for specific article
                $category_html = "";
                /* $category_html .= '<span>'. esc_html__('In ', 'select-core') .'</span>'; */
                $k = 1;
                foreach ($terms as $term) {
                    $category_html .= "$term->name";
                    if (count($terms) != $k) {
                        $category_html .= ' / ';
                    }
                    $k++;
                }

                $html .= '<div class="item_holder ' . $hover_type . '">';

                switch ($hover_type) {
                    case 'gradient_hover':
                    case 'upward_hover':
                    case 'subtle_vertical_hover':
                    case 'image_subtle_rotate_zoom_hover':
                    case 'slide_up_hover':
                    case 'cursor_change_hover':
                    case 'image_text_zoom_hover':
                    case 'text_slides_with_image':
                    case 'thin_plus_only':
                    case 'circle_hover':
                    case 'border_hover': {
                        if ($disable_text_holder != 'yes' || $show_icons == 'yes' || $hover_type == 'thin_plus_only') {
                            $html .= '<div class="text_holder" ' . $hover_box_style . '>';
                            $html .= '<div class="text_holder_outer">';
                            $html .= '<div class="text_holder_inner">';
                            if($hover_type == 'thin_plus_only'){
                                $html .= '<span class="thin_plus_only_icon" '.$cursor_color.'>+</span>';
                            }
                            elseif ($type == 'text_on_hover_image' || $type == 'text_on_hover_image_no_space' || $type == 'text_before_hover' || $type == 'text_before_hover_no_space' || $type == 'masonry_with_space_without_description') {
                                if ($show_title == 'yes') {
                                    if ($disable_link_on_title != "yes") {
                                        $html .= '<' . $title_tag . ' class="portfolio_title" ' . $title_style . '><a href="' . $portfolio_link . '" ' . $title_link_style . '>' . get_the_title() . '</a></' . $title_tag . '>';
                                    } else {
                                        $html .= '<' . $title_tag . ' class="portfolio_title" ' . $title_style . '>' . get_the_title() . '</' . $title_tag . '>';
                                    }
                                }
                                if ($separator == 'yes') {
                                    $html .= '<span class="separator ' . $separator_animation_class . '" ' . $separator_style . '></span>';
                                }
                                if ($show_categories == 'yes') {
                                    $html .= '<span class="project_category" ' . $category_style . '>' . $category_html . '</span>';
                                }
                            }
                            if ($show_icons == 'yes') {
                                $html .= '<div class="icons_holder '.$icons_position_classes.'">';
                                if ($lightbox == "yes") {
                                    $html .= '<a class="portfolio_lightbox" title="' . $title . '" href="' . $large_image . '" data-rel="prettyPhoto[' . $slug_list_ . ']"></a>';
                                }
                                if ($portfolio_qode_like == "on" && $show_like == "yes") {
                                    if (function_exists('pitch_qode_like_portfolio_list')) {
                                        $html .= pitch_qode_like_portfolio_list(get_the_ID());
                                    }
                                }
                                if ($link_icon == "yes") {
                                    $html .= '<a class="preview" title="Go to Project" href="' . $portfolio_link . '" data-type="portfolio_list" target="' . $target . '" ></a>';
                                }
                                $html .= '</div>'; // icons_holder
                            }
							if($read_more_button == 'yes' && $hover_type == 'subtle_vertical_hover') {
								$html .= '<div class="read_more_button_holder">';
								$html .= '<a href="' .$portfolio_link .'" target="_self" class="qbutton '. $button_size .' '. $button_style .' read_more_portfolio">' . esc_html__("Check it out","pitchwp") . '</a>';
								$html.='</div>';
							}
                            $html .= '</div>'; // text_holder_inner
                            $html .= '</div>';  // text_holder_outer
                            $html .= '</div>'; // text_holder
                        }
                    }
                        break;
                    case 'opposite_corners_hover':
                    case 'slide_from_left_hover':
                    case 'prominent_plain_hover':
                    case 'prominent_blur_hover':
                    case 'icons_bottom_corner':
                    case 'slow_zoom':
                    case 'split_up': {
                        if ($disable_text_holder != 'yes') {
                            if ($type == 'text_on_hover_image' || $type == 'text_on_hover_image_no_space' || $type == 'text_before_hover' || $type == 'text_before_hover_no_space' || $type == 'masonry_with_space_without_description') {
                                $html .= '<div class="text_holder">';
                                $html .= '<div class="text_holder_outer">';
                                $html .= '<div class="text_holder_inner">';
                                if ($show_title == 'yes') {
                                    if ($disable_link_on_title != "yes") {
                                        $html .= '<' . $title_tag . ' class="portfolio_title" ' . $title_style . '><a href="' . $portfolio_link . '" ' . $title_link_style . '>' . get_the_title() . '</a></' . $title_tag . '>';
                                    } else {
                                        $html .= '<' . $title_tag . ' class="portfolio_title" ' . $title_style . '>' . get_the_title() . '</' . $title_tag . '>';
                                    }
                                }
                                if ($separator == 'yes') {
                                    $html .= '<span class="separator ' . $separator_animation_class . '" ' . $separator_style . '></span>';
                                }
                                if ($show_categories == 'yes') {
                                    $html .= '<span class="project_category" ' . $category_style . '>' . $category_html . '</span>';
                                }
                                $html .= '</div>'; //text_holder_inner
                                $html .= '</div>';  // text_holder_outer
                                $html .= '</div>'; // text_holder
                            }
                        }
                        if ($show_icons == 'yes') {
                            $html .= '<div class="icons_holder '.$icons_position_classes.'" ' . $hover_box_style . '>';
                            if ($lightbox == "yes") {
                                $html .= '<a class="portfolio_lightbox" title="' . $title . '" href="' . $large_image . '" data-rel="prettyPhoto[' . $slug_list_ . ']" rel="prettyPhoto[' . $slug_list_ . ']"></a>';
                            }
                            if ($portfolio_qode_like == "on" && $show_like == "yes") {
                                if (function_exists('pitch_qode_like_portfolio_list')) {
                                    $html .= pitch_qode_like_portfolio_list(get_the_ID());
                                }
                            }
                            if ($link_icon == "yes") {
                                $html .= '<a class="preview" title="Go to Project" href="' . $portfolio_link . '" data-type="portfolio_list" target="' . $target . '" ></a>';
                            }
                            $html .= '</div>';  // icons_holder
                        }
                    }
                        break;
                }

                if ($disable_link != "yes") {
                    if ($portfolio_link_pointer == 'single') {
                        $html .= '<a class="portfolio_link_class" href="' . $portfolio_link . '" target="_self"></a>';
                    } elseif ($portfolio_link_pointer == 'lightbox') {
                        $html .= '<a class="portfolio_link_class" title="' . $title . '" href="' . $large_image . '" data-rel="prettyPhoto[' . $slug_list_ . ']" rel="prettyPhoto[' . $slug_list_ . ']"></a>';
                    }
                }

                $html .= '<div class="portfolio_shader" ' . $portfolio_shader_style_custom . '></div>';
                if($hover_type == 'border_hover'){
                    $html .= '<div class="border_box"><div class="border1"></div><div class="border2"></div><div class="border3"></div><div class="border4"></div></div>';
                }
                $html .= '<div class="image_holder">';
                $html .= '<span class="image">';
                $html .= get_the_post_thumbnail(get_the_ID(), $thumb_size);
                $html .= '</span>';
                $html .= '</div>'; // close image_holder
                $html .= '</div>'; // close item_holder
                // portfolio description start

                if ($type == "standard" || $type == "standard_no_space" || $type == "masonry_with_space") {
                    $html .= "<div class='portfolio_description " . $portfolio_description_class . "' ".pitch_qode_get_inline_style(implode('; ', $portfolio_box_style)).">";

                    if ($show_title == 'yes') {
                        if ($disable_link_on_title != "yes") {
                            $html .= '<' . $title_tag . ' class="portfolio_title" ' . $title_style . '><a href="' . $portfolio_link . '" target="' . $target . '" ' . $title_link_style . '>' . get_the_title() . '</a></' . $title_tag . '>';
                            if ($separator == 'yes') {
                                $html .= '<span class="separator ' . $separator_animation_class . '" ' . $separator_style . '></span>';
                            }
                        } else {
                            $html .= '<' . $title_tag . ' class="portfolio_title" ' . $title_style . '>' . get_the_title() . '</' . $title_tag . '>';
                            if ($separator == 'yes') {
                                $html .= '<span class="separator ' . $separator_animation_class . '" ' . $separator_style . '></span>';
                            }
                        }
                    }
                    if ($show_categories != 'no') {
                        $html .= '<span class="project_category" ' . $category_style . '>' . $category_html . '</span>';
                    }

                    $html .= '</div>'; // close portfolio_description
                }

                $html .= "</article>\n";

            endwhile;

                // loop end

                $i = 1;
                while ($i <= $columns) {
                    $i++;
                    if ($columns != 1) {
                        $html .= "<div class='filler'></div>\n";
                    }
                }

            else:
                ?>
                <p><?php esc_html_e('Sorry, no posts matched your criteria.', 'select-core'); ?></p>
            <?php
            endif;


            $html .= "</div>";  // close projects_holder

            if (get_next_posts_link(null, $query_loop->max_num_pages)) {
                if ($show_load_more == "yes" || $show_load_more == "") {
                    $html .= '<div class="portfolio_paging" ' . $show_more_style . '><span data-rel="' . $query_loop->max_num_pages . '" class="load_more">' . get_next_posts_link(esc_html__('Show more'.$add_icon, 'select-core'), $query_loop->max_num_pages) . '</span></div>';
                    $html .= '<div class="portfolio_paging_loading" ' . $show_more_style . '><a href="javascript: void(0)" class="qbutton">' . esc_html__('Loading...', 'select-core') . '</a></div>';
                }
            }
            $html .= "</div>"; // close projects_holder_outer
            wp_reset_postdata();
        } else {
            if ($filter == "yes") {

                // adding filter on project holder
                $html .= "<div class='filter_outer filter_portfolio " . $filter_align . "'>";
                $html .= "<div class='filter_holder " . $portfolio_filter_class . "'><ul>";
                if ($disable_filter_title != "yes") {
                    $html .= "<li class='filter_title'><span>" . esc_html__('Sort Portfolio:', 'select-core') . "</span></li>";
                }
                $html .= "<li class='filter' data-filter='*'><span>" . esc_html__('All', 'select-core') . "</span></li>";
                if ($category == "") {
                    $args = array(
                        'parent' => 0,
                        'orderby' => $filter_order_by
                    );
                    $portfolio_categories = get_terms('portfolio_category', $args);
                } else {
                    $top_category = get_term_by('slug', $category, 'portfolio_category');
                    $term_id = '';
                    if (isset($top_category->term_id))
                        $term_id = $top_category->term_id;
                    $args = array(
                        'parent' => $term_id,
                        'orderby' => $filter_order_by
                    );
                    $portfolio_categories = get_terms('portfolio_category', $args);
                }
                foreach ($portfolio_categories as $portfolio_category) {
                    $html .= "<li class='filter' data-filter='.portfolio_category_$portfolio_category->term_id'><span>$portfolio_category->name</span>";
                    $args = array(
                        'child_of' => $portfolio_category->term_id
                    );
                    $html .= '</li>';
                }
                $html .= "</ul></div>";
                $html .= "</div>";
            }
            $grid_number_of_columns = "gs5";
            if($grid_size == 4){
                $grid_number_of_columns = "gs4";
            }
            if($grid_size == 3){
                $grid_number_of_columns = "gs3";
            }
            $html .= "<div class='portfolio_main_holder projects_masonry_holder ".$portfolio_loading_class." ". $grid_number_of_columns ." ".$_type_class."' data-parallax_item_speed='".$parallax_item_speed."' data-parallax_item_offset='".$parallax_item_offset."'>";
            $html .= "<div class='portfolio_masonry_grid_sizer'></div>";
            if (get_query_var('paged')) {
                $paged = get_query_var('paged');
            } elseif (get_query_var('page')) {
                $paged = get_query_var('page');
            } else {
                $paged = 1;
            }
            if ($category == "") {
                $args = array(
                    'post_type' => 'portfolio_page',
                    'orderby' => $order_by,
                    'order' => $order,
                    'posts_per_page' => $number,
                    'paged' => $paged
                );
            } else {
                $args = array(
                    'post_type' => 'portfolio_page',
                    'portfolio_category' => $category,
                    'orderby' => $order_by,
                    'order' => $order,
                    'posts_per_page' => $number,
                    'paged' => $paged
                );
            }
            $project_ids = null;
            if ($selected_projects != "") {
                $project_ids = explode(",", $selected_projects);
                $args['post__in'] = $project_ids;
            }
            
			$query_loop = new \WP_Query( $args );
			
            // loop start
            if ($query_loop->have_posts()) : while ($query_loop->have_posts()) : $query_loop->the_post();
                $terms = wp_get_post_terms(get_the_ID(), 'portfolio_category');
                $featured_image_array = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full'); //original size

                if (get_post_meta(get_the_ID(), 'qode_portfolio-lightbox-link', true) != "") {
                    $large_image = get_post_meta(get_the_ID(), 'qode_portfolio-lightbox-link', true);
                } else {
                    $large_image = $featured_image_array[0];
                }


                $overlay_background_color_custom = $overlay_background_color;
                $portfolio_shader_style_custom = $portfolio_shader_style;
                // If Portfolio Single have chosen Image Overlay color for custom field
                if (get_post_meta(get_the_ID(), 'qode_portfolio-hover-color', true) != "") {
                    $overlay_background_color =  esc_attr(get_post_meta(get_the_ID(), "qode_portfolio-hover-color", true));
                    $portfolio_shader_style_custom = "";
                    if ($overlay_background_color != '' || $gradient_position != '') {
                        if ($hover_type == "gradient_hover") {
                            if (substr($overlay_background_color_custom, 0, 3) === "rgba") { // if rgba is set, portfolio uses default color
                                $portfolio_shader_style = '';
                            } else {

                                $rgb = pitch_qode_hex2rgb($overlay_background_color_custom);

                                $opacity = 0;
                                $overlay_background_color1 = 'rgba(' . $rgb[0] . ',' . $rgb[1] . ',' . $rgb[2] . ',' . $opacity . ')';
                                $opacity = 0.9;
                                $overlay_background_color2 = 'rgba(' . $rgb[0] . ',' . $rgb[1] . ',' . $rgb[2] . ',' . $opacity . ')';

                                $portfolio_shader_style_custom = 'style="';

                                $portfolio_shader_style_custom .= 'background: -webkit-linear-gradient(top, ' . $overlay_background_color1 . ' 10%, ' . $overlay_background_color2 . ' 100%);';
                                $portfolio_shader_style_custom .= 'background: linear-gradient(to bottom, ' . $overlay_background_color1 . ' 10%, ' . $overlay_background_color2 . ' 100%);';

                                if ($gradient_position != '') {
                                    $portfolio_shader_style_custom .= 'transform: translate3d(0px, ' . $gradient_position . ', 0px);';
                                }

                                $portfolio_shader_style_custom .= '"';
                            }
                        } else {
                            $overlay_background_color_opacity = (get_post_meta(get_the_ID(), "qode_portfolio-hover-color-opacity", true))?esc_attr(get_post_meta(get_the_ID(), "qode_portfolio-hover-color-opacity", true)):'1';
                            $rgb = pitch_qode_hex2rgb($overlay_background_color_custom);
                            $portfolio_shader_style_custom = 'style="background-color:rgba('  . $rgb[0] . ',' . $rgb[1] . ',' . $rgb[2] . ',' . $overlay_background_color_opacity .  ');"';
                        }
                    }

                }


                $custom_portfolio_link = get_post_meta(get_the_ID(), 'qode_portfolio-external-link', true);
                $portfolio_link = $custom_portfolio_link != "" ? $custom_portfolio_link : get_permalink();
                $target = $custom_portfolio_link != "" ? '_blank' : '_self';

                $masonry_size = "default";
                $masonry_size = get_post_meta(get_the_ID(), "qode_portfolio_type_masonry_style", true);
				$masonry_parallax = get_post_meta(get_the_ID(), "qode_portfolio_masonry_parallax", true);

                $image_size = "";
                if ($masonry_size == "large_width") {
                    $image_size = "qode-pitch-portfolio_masonry_wide";
                } elseif ($masonry_size == "large_height") {
                    $image_size = "qode-pitch-portfolio_masonry_tall";
                } elseif ($masonry_size == "large_width_height") {
                    $image_size = "qode-pitch-portfolio_masonry_large";
                } else {
                    $image_size = "qode-pitch-portfolio-square";
                }

				$masonry_parallax_class = "";
				if($masonry_parallax == "yes"){
					$masonry_parallax_class = " parallax_item";
				}
				
                if ($type == "masonry_with_space") {
                    $image_size = "qode-pitch-portfolio_masonry_with_space";
                }
				
                $slug_list_ = "pretty_photo_gallery";
                $title = get_the_title();

                $html .= "<article class='portfolio_masonry_item ";

                foreach ($terms as $term) {
                    $html .= "portfolio_category_$term->term_id ";
                }

                $html .= " " . $masonry_size . $masonry_parallax_class;
                $html .= "'>"; // article
                // get categories for specific article
                $category_html = "";
                /* $category_html .= '<span>'. esc_html__('In ', 'select-core') .'</span>'; */
                $k = 1;
                foreach ($terms as $term) {
                    $category_html .= "$term->name";
                    if (count($terms) != $k) {
                        $category_html .= ' / ';
                    }
                    $k++;
                }

                $html .= '<div class="item_holder ' . $hover_type . '">';

                switch ($hover_type) {
                    case 'gradient_hover':
                    case 'upward_hover':
                    case 'subtle_vertical_hover':
                    case 'image_subtle_rotate_zoom_hover':
                    case 'slide_up_hover':
                    case 'cursor_change_hover':
                    case 'image_text_zoom_hover':
                    case 'text_slides_with_image':
                    case 'thin_plus_only': {
                        if ($disable_text_holder != 'yes' || $show_icons == 'yes' || $hover_type == 'thin_plus_only') {
                            $html .= '<div class="text_holder" ' . $hover_box_style . '>';
                            $html .= '<div class="text_holder_outer">';
                            $html .= '<div class="text_holder_inner">';
                            if($hover_type == 'thin_plus_only') {
                                $html .= '<span class="thin_plus_only_icon" '.$cursor_color.'>+</span>';
                            }
                            else{
                                if ($show_title == 'yes') {
                                    if ($disable_link_on_title != "yes") {
                                        $html .= '<' . $title_tag . ' class="portfolio_title" ' . $title_style . '><a href="' . $portfolio_link . '" ' . $title_link_style . '>' . get_the_title() . '</a></' . $title_tag . '>';
                                    } else {
                                        $html .= '<' . $title_tag . ' class="portfolio_title" ' . $title_style . '>' . get_the_title() . '</' . $title_tag . '>';
                                    }
                                }
                                if ($separator == 'yes') {
                                    $html .= '<span class="separator ' . $separator_animation_class . '" ' . $separator_style . '></span>';
                                }
                                if ($show_categories == 'yes') {
                                    $html .= '<span class="project_category" ' . $category_style . '>' . $category_html . '</span>';
                                }
                                if ($show_icons == 'yes') {
                                    $html .= '<div class="icons_holder ' . $icons_position_classes . '">';
                                    if ($lightbox == "yes") {
                                        $html .= '<a class="portfolio_lightbox" title="' . $title . '" href="' . $large_image . '" data-rel="prettyPhoto[' . $slug_list_ . ']" rel="prettyPhoto[' . $slug_list_ . ']"></a>';
                                    }
                                    if ($portfolio_qode_like == "on" && $show_like == "yes") {
                                        if (function_exists('pitch_qode_like_portfolio_list')) {
                                            $html .= pitch_qode_like_portfolio_list(get_the_ID());
                                        }
                                    }
                                    if ($link_icon == "yes") {
                                        $html .= '<a class="preview" title="Go to Project" href="' . $portfolio_link . '" data-type="portfolio_list" target="' . $target . '" ></a>';
                                    }
                                    $html .= '</div>'; // icons_holder
                                }
                            }
                            $html .= '</div>'; // text_holder_inner
                            $html .= '</div>';  // text_holder_outer
                            $html .= '</div>'; // text_holder
                        }
                    }
                        break;
                    case 'opposite_corners_hover':
                    case 'slide_from_left_hover':
                    case 'prominent_plain_hover':
                    case 'prominent_blur_hover':
                    case 'icons_bottom_corner':
                    case 'slow_zoom':
                    case 'split_up': {
                        if ($disable_text_holder != 'yes') {
                            $html .= '<div class="text_holder">';
                            $html .= '<div class="text_holder_outer">';
                            $html .= '<div class="text_holder_inner">';
                            if ($show_title == 'yes') {
                                if ($disable_link_on_title != "yes") {
                                    $html .= '<' . $title_tag . ' class="portfolio_title" ' . $title_style . '><a href="' . $portfolio_link . '" ' . $title_link_style . '>' . get_the_title() . '</a></' . $title_tag . '>';
                                } else {
                                    $html .= '<' . $title_tag . ' class="portfolio_title" ' . $title_style . '>' . get_the_title() . '</' . $title_tag . '>';
                                }
                            }
                            if ($separator == 'yes') {
                                $html .= '<span class="separator ' . $separator_animation_class . '" ' . $separator_style . '></span>';
                            }
                            if ($show_categories == 'yes') {
                                $html .= '<span class="project_category" ' . $category_style . '>' . $category_html . '</span>';
                            }
                            $html .= '</div>'; //text_holder_inner
                            $html .= '</div>'; // text_holder_outer
                            $html .= '</div>';  // text_holder
                        }
                        if ($show_icons == "yes") {
                            $html .= '<div class="icons_holder" ' . $hover_box_style . '>';
                            if ($lightbox == "yes") {
                                $html .= '<a class="portfolio_lightbox" title="' . $title . '" href="' . $large_image . '" data-rel="prettyPhoto[' . $slug_list_ . ']" rel="prettyPhoto[' . $slug_list_ . ']"></a>';
                            }
                            if ($portfolio_qode_like == "on" && $show_like == "yes") {
                                if (function_exists('pitch_qode_like_portfolio_list')) {
                                    $html .= pitch_qode_like_portfolio_list(get_the_ID());
                                }
                            }
                            if ($link_icon == "yes") {
                                $html .= '<a class="preview" title="Preview" href="' . $portfolio_link . '" data-type="portfolio_list" target="' . $target . '" ></a>';
                            }
                            $html .= '</div>';  // icons_holder
                        }
                    }
                        break;
                }

                if ($disable_link != "yes") {
                    if ($portfolio_link_pointer == 'single') {
                        $html .= '<a class="portfolio_link_class" href="' . $portfolio_link . '" target="_self"></a>';
                    } elseif ($portfolio_link_pointer == 'lightbox') {
                        $html .= '<a class="portfolio_link_class" title="' . $title . '" href="' . $large_image . '" data-rel="prettyPhoto[' . $slug_list_ . ']" rel="prettyPhoto[' . $slug_list_ . ']"></a>';
                    }
                }

                $html .= '<div class="portfolio_shader" ' . $portfolio_shader_style_custom . '></div>';
                $html .= '<div class="image_holder">';
                $html .= '<span class="image">';
                $html .= get_the_post_thumbnail(get_the_ID(), $image_size);
                $html .= '</span>';
                $html .= '</div>'; // close text_holder
                $html .= '</div>'; // close item_holder

                $html .= "</article>";

            endwhile;
            // loop start
            else:
                ?>
                <p><?php esc_html_e('Sorry, no posts matched your criteria.', 'select-core'); ?></p>
            <?php
            endif;
            wp_reset_postdata();
            $html .= "</div>";
        }
        return $html;
    }


}
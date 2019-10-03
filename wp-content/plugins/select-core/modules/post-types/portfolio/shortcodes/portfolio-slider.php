<?php
namespace QodeCore\CPT\Portfolio\Shortcodes;

use QodeCore\Lib;

/**
 * Class PortfolioSlider
 * @package QodeCore\CPT\Portfolio\Shortcodes
 */
class PortfolioSlider implements Lib\ShortcodeInterface {
    /**
     * @var string
     */
    private $base;

    public function __construct() {
        $this->base = 'no_portfolio_slider';

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
     * @see vc_map()
     */
    public function vcMap() {
        if(function_exists('vc_map')) {
            vc_map( array(
                "name" => esc_html__( "Portfolio Slider", 'select-core' ),
                "base" => $this->base,
                "category" => esc_html__( 'by Select', 'select-core' ),
                "icon" => "icon-wpb-portfolio-slider extended-custom-icon",
                "allowed_container_element" => 'vc_row',
                "params" => array(
                    array(
                        "type" => "dropdown",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Portfolio Slider Template", 'select-core' ),
                        "param_name" => "type",
                        "value" => array(
                            esc_html__( "Text on Image Hover", 'select-core' ) => "text_on_hover_image",
                            esc_html__( "Standard", 'select-core' ) => "standard",
                        )
                    ),
                    array(
                        "type" => "dropdown",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Hover Animation Type", 'select-core' ),
                        "param_name" => "hover_type_text_on_hover_image",
                        "value" => array(
                            esc_html__( "Gradient", 'select-core' ) => "gradient_hover",
                            esc_html__( "Upward", 'select-core' ) => "upward_hover",
                            esc_html__( "Opposite Corners", 'select-core' ) => "opposite_corners_hover",
                            esc_html__( "Slide from left", 'select-core' ) => "slide_from_left_hover",
                            esc_html__( "Subtle Vertical", 'select-core' ) => "subtle_vertical_hover",
                            esc_html__( "Image Subtle Rotate Zoom", 'select-core' ) => "image_subtle_rotate_zoom_hover",
                            esc_html__( "Image Text Zoom", 'select-core' ) => "image_text_zoom_hover",
                            esc_html__( "Prominent Plain", 'select-core' ) => "prominent_plain_hover",
                            esc_html__( "Prominent Blur", 'select-core' ) => "prominent_blur_hover",
                            esc_html__( "Slide Up", 'select-core' ) => "slide_up_hover"
                        ),
                        "dependency" => array('element' => "type", 'value' => array('text_on_hover_image'))
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
                            esc_html__( "Slow Zoom", 'select-core' ) => "slow_zoom",
                            esc_html__( "Split Up", 'select-core' ) => "split_up",
                            esc_html__( "Circle", 'select-core' ) => "circle_hover"
                        ),
                        "dependency" => array('element' => "type", 'value' => array('standard'))
                    ),
                    array(
                        "type" => "dropdown",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Padding between portfolio items", 'select-core' ),
                        "param_name" => "padding_between",
                        "value" => array(
                            esc_html__( "No", 'select-core' ) => "no",
                            esc_html__( "Yes", 'select-core' ) => "yes"
                        )
                    ),
                    array(
                        "type" => "colorpicker",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Image Color Overlay", 'select-core' ),
                        "param_name" => "overlay_background_color",
                        "value" => "",
                        "description" => esc_html__( "Disabled on Upward Hover", 'select-core' ),
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
                        "param_name" => "cursor_color_hover_type_standard",
                        "value" => "",
                        "dependency" => array('element' => "hover_type_standard", 'value' => array('thin_plus_only'))
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
                        "dependency" => array('element' => 'type', 'value' => array('standard'))
                    ),
                    array(
                        "type" => "colorpicker",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Info Box Background Color", 'select-core' ),
                        "param_name" => "box_background_color",
                        "value" => "",
                        "dependency" => array('element' => "type", 'value' => array('standard'))
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
                        "dependency" => array('element' => "type", 'value' => array('standard'))
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
                        "dependency" => array('element' => "type", 'value' => array('standard'))
                    ),
                    array(
                        "type" => "dropdown",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Image size", 'select-core' ),
                        "param_name" => "image_size",
                        "value" => array(
                            esc_html__( "Default", 'select-core' ) => "",
                            esc_html__( "Original Size", 'select-core' ) => "full",
                            esc_html__( "Square", 'select-core' ) => "square",
                            esc_html__( "Landscape", 'select-core' ) => "landscape",
                            esc_html__( "Portrait", 'select-core' ) => "portrait"
                        )
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
                        "type" => "textfield",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Number", 'select-core' ),
                        "param_name" => "number",
                        "value" => "-1",
                        "description" => esc_html__( "Number of portolios on page (-1 is all)", 'select-core' )
                    ),
                    array(
                        "type" => "dropdown",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Number of Portfolios Shown", 'select-core' ),
                        "param_name" => "portfolios_shown",
                        "value" => array(
                            "" => "",
                            "3" => "3",
                            "4" => "4",
                            "5" => "5",
                            "6" => "6"
                        ),
                        "description" => esc_html__( "Number of portfolios that are showing at the same time in full width (on smaller screens is responsive so there will be less items shown)", 'select-core' ),
                    ),
                    array(
                        "type" => "textfield",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Category", 'select-core' ),
                        "param_name" => "category",
                        "value" => "",
                        "description" => esc_html__( "Category Slug (leave empty for all)", 'select-core' )
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
                        )
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
                        "description" => esc_html__( "Default value is Yes", 'select-core' ),
                        "dependency" => array('element' => "show_icons", 'value' => array('yes'))
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
                        "heading" => esc_html__( "Selected Projects", 'select-core' ),
                        "param_name" => "selected_projects",
                        "value" => "",
                        "description" => esc_html__( "Selected Projects (leave empty for all, delimit by comma)", 'select-core' )
                    ),
                    array(
                        "type" => "dropdown",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Disable Portfolio Link", 'select-core' ),
                        "param_name" => "disable_link",
                        "value" => array(
                            "" => "",
                            esc_html__( "Yes", 'select-core' ) => "yes",
                            esc_html__( "No", 'select-core' ) => "no"
                        ),
                        "description" => esc_html__( "Default value is No, but it is always disabled on hover type gradient, prominent_plain and prominent_blur (Also disabled on subtle_vertical, image_subtle_rotate_zoom and image_text_zoom if icons are used)", 'select-core' )
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
                        )
                    ),
                    array(
                        "type" => "colorpicker",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Title Color", 'select-core' ),
                        "param_name" => "title_color",
                        "value" => ""
                    ),
                    array(
                        "type" => "textfield",
                        "holder" => "div",
                        "class" => "",
                        "heading" => esc_html__( "Title Font Size (px)", 'select-core' ),
                        "param_name" => "title_font_size",
                        "value" => ""
                    ),
                    array(
                        "type" => "checkbox",
                        "class" => "",
                        "heading" => esc_html__( "Prev/Next navigation", 'select-core' ),
                        "value" => array("Enable prev/next navigation?" => "enable_navigation"),
                        "param_name" => "enable_navigation"
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

        $args = array(
            "type" => "text_on_hover_image",
            "hover_type_text_on_hover_image" => "gradient_hover",
            "hover_type_standard" => "gradient_hover",
            "padding_between" => "",
            "overlay_background_color" => "",
            "cursor_color_hover_type_text_on_hover_image" => "",
            "cursor_color_hover_type_standard" => "",
            "hover_box_color_standard" => "",
            "hover_box_color_text_on_hover_image" => "",
            "text_align" => "",
            "info_box_padding" => "",
            "box_border" => "",
            "box_background_color" => "",
            "box_border_color" => "",
            "box_border_width" => "",
            "order_by" => "menu_order",
            "order" => "ASC",
            "number" => "-1",
            "portfolios_shown" => "",
            "category" => "",
            "selected_projects" => "",
            "show_icons" => "yes",
            "link_icon" => "yes",
            "lightbox" => "yes",
            "show_like" => "yes",
            "disable_link" => "no",
            "show_categories" => "yes",
            "category_color" => "",
            "separator" => "",
            "separator_thickness" => "",
            "separator_color" => "",
            "separator_animation" => "",
            "title_tag" => "h5",
            "title_font_size" => "",
            "title_color" => "",
            "image_size" => "qode-pitch-portfolio-square",
            "enable_navigation" => ""
        );
        extract(shortcode_atts($args, $atts));


        $overlay_background_color = esc_attr($overlay_background_color);
        $cursor_color_hover_type_text_on_hover_image = esc_attr($cursor_color_hover_type_text_on_hover_image);
        $cursor_color_hover_type_standard = esc_attr($cursor_color_hover_type_standard);
        $hover_box_color_standard = esc_attr($hover_box_color_standard);
        $hover_box_color_text_on_hover_image = esc_attr($hover_box_color_text_on_hover_image);
        $info_box_padding = esc_attr($info_box_padding);
        $box_background_color = esc_attr($box_background_color);
        $box_border_color = esc_attr($box_border_color);
        $box_border_width = esc_attr($box_border_width);
        $number = esc_attr($number);
        $category = esc_attr($category);
        $selected_projects = esc_attr($selected_projects);
        $category_color = esc_attr($category_color);
        $separator_thickness = esc_attr($separator_thickness);
        $separator_color = esc_attr($separator_color);
        $title_font_size = esc_attr($title_font_size);
        $title_color = esc_attr($title_color);


        $headings_array = array('h2', 'h3', 'h4', 'h5', 'h6');

        //get correct heading value. If provided heading isn't valid get the default one
        $title_tag = (in_array($title_tag, $headings_array)) ? $title_tag : $args['title_tag'];

        $html = "";
        $lightbox_slug = 'portfolio_slider_' . rand();
        $data_attribute = "";

        // adding correct classes
        $_type_class = '';
        if ($type == "text_on_hover_image") {
            $_type_class = " hover_text";
        }
        elseif ($type == "standard"){
            $_type_class = " standard";
        }

        if ($portfolios_shown !== "") {
            $data_attribute .= " data-portfolios_shown='" . $portfolios_shown. "'";
        }

        // adding padding class
        $with_padding_class = "";
        if ($padding_between == 'yes') {
            $with_padding_class .= "with_padding";
        }

        // adding hover type
        $hover_type = "";
        if ($type == 'standard') {
            $hover_type = $hover_type_standard;
        }
        if ($type == 'text_on_hover_image') {
            $hover_type = $hover_type_text_on_hover_image;
        }

        // this is used for color on thin_plus_only
        $cursor_color = '';
        if($cursor_color_hover_type_text_on_hover_image != '' && $hover_type == 'thin_plus_only' && $type == 'text_on_hover_image'){
            $cursor_color = 'style="color:'.$cursor_color_hover_type_text_on_hover_image.'"';
        }
        elseif($cursor_color_hover_type_standard != '' && $hover_type == 'thin_plus_only' && $type == 'standard'){
            $cursor_color = 'style="color:'.$cursor_color_hover_type_standard.'"';
        }

        // for this type holder needs to be shown
        if ($hover_type == 'slide_from_left_hover' && $show_icons == 'no') {
            $show_icons = 'yes';
            $link_icon = 'no';
            $lightbox = 'no';
            $show_like = 'no';
        }

        // disable link if icons are shown for these hover type
        if ((($hover_type == 'subtle_vertical_hover' || $hover_type == 'image_subtle_rotate_zoom_hover' || $hover_type == 'image_text_zoom_hover') && $show_icons == 'yes')
            || $hover_type == 'gradient_hover' || $hover_type == 'prominent_plain_hover' || $hover_type == 'prominent_blur_hover') {
            $disable_link = "yes";
        }

        // disable icons on this hover type
        if ($hover_type == 'thin_plus_only' || $hover_type == 'split_up') {
            $show_icons = "no";
        }

        // adding element style and class
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


        $portfolio_shader_style = "";
        if ($overlay_background_color != '') {
            if ($hover_type == "gradient_hover") {
                if (substr($overlay_background_color, 0, 3) === "rgba") { // if rgba is set, portfolio uses default color
                    $portfolio_shader_style = '';
                } else {

                    $rgb = pitch_qode_hex2rgb($overlay_background_color);

                    $opacity = 0;
                    $overlay_background_color1 = 'rgba(' . $rgb[0] . ',' . $rgb[1] . ',' . $rgb[2] . ',' . $opacity . ')';
                    $opacity = 0.9;
                    $overlay_background_color2 = 'rgba(' . $rgb[0] . ',' . $rgb[1] . ',' . $rgb[2] . ',' . $opacity . ')';

                    $portfolio_shader_style = 'style="background: -webkit-linear-gradient(to bottom, ' . $overlay_background_color1 . ' 10%, ' . $overlay_background_color2 . ' 100%);';
                    $portfolio_shader_style .= 'background: linear-gradient(to bottom, ' . $overlay_background_color1 . ' 10%, ' . $overlay_background_color2 . ' 100%);"';
                }
            } else {
                $portfolio_shader_style = 'style="background-color:' . $overlay_background_color . ';"';
            }
        }

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

        $category_style = '';
        if ($category_color != '') {
            $category_style = 'style="color: ' . $category_color . ';"';
        }

        // marging same option for 2 different type
        $hover_box_style = "";
        if ($hover_type == 'upward_hover' || $hover_type == 'slide_from_left_hover') {
            if (($type == 'standard') && $hover_box_color_standard != '') {
                $hover_box_style = 'style="background-color:' . $hover_box_color_standard . ';"';
            } elseif (($type == 'text_on_hover_image') && $hover_box_color_text_on_hover_image != '') {
                $hover_box_style = 'style="background-color:' . $hover_box_color_text_on_hover_image . ';"';
            }
        }

        // adding info box style and class for 'standard'
        $portfolio_box_style = array();
        $portfolio_description_class = "";
        if (($box_border == "yes" || $box_background_color != "" || $info_box_padding != "") && $type == 'standard') {

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

        $html .= "<div class='portfolio_main_holder portfolio_slider_holder clearfix ".$_type_class."'><div class='portfolio_slider ".$with_padding_class."'" . $data_attribute . "><ul class='portfolio_slides'>";

        if ($category == "") {
            $q = array(
	            'post_status' => 'publish',
                'post_type' => 'portfolio_page',
                'orderby' => $order_by,
                'order' => $order,
                'posts_per_page' => $number
            );
        } else {
            $q = array(
	            'post_status' => 'publish',
                'post_type' => 'portfolio_page',
                'portfolio_category' => $category,
                'orderby' => $order_by,
                'order' => $order,
                'posts_per_page' => $number
            );
        }

        $project_ids = null;
        if ($selected_projects != "") {
            $project_ids = explode(",", $selected_projects);
            $q['post__in'] = $project_ids;
        }

        $query_loop = new \WP_Query( $q );

        if ($query_loop->have_posts()) : $postCount = 0;
            while ($query_loop->have_posts()) : $query_loop->the_post();

                $title = get_the_title();
                $terms = wp_get_post_terms(get_the_ID(), 'portfolio_category');

                $overlay_background_color_custom = $overlay_background_color;
                $portfolio_shader_style_custom = $portfolio_shader_style;
                // If Portfolio Single have chosen Image Overlay color for custom field
                if (get_post_meta(get_the_ID(), 'qode_portfolio-hover-color', true) != "") {
                    $overlay_background_color_custom =  esc_attr(get_post_meta(get_the_ID(), "qode_portfolio-hover-color", true));
                    $portfolio_shader_style_custom = "";
                    if ($overlay_background_color_custom != '') {
                        if ($hover_type == "gradient_hover") {
                            if (substr($overlay_background_color_custom, 0, 3) === "rgba") { // if rgba is set, portfolio uses default color
                                $portfolio_shader_style_custom = '';
                            } else {

                                $rgb = pitch_qode_hex2rgb($overlay_background_color_custom);

                                $opacity = 0;
                                $overlay_background_color1 = 'rgba(' . $rgb[0] . ',' . $rgb[1] . ',' . $rgb[2] . ',' . $opacity . ')';
                                $opacity = 0.9;
                                $overlay_background_color2 = 'rgba(' . $rgb[0] . ',' . $rgb[1] . ',' . $rgb[2] . ',' . $opacity . ')';

                                $portfolio_shader_style_custom = 'style="background: -webkit-linear-gradient(to bottom, ' . $overlay_background_color1 . ' 10%, ' . $overlay_background_color2 . ' 100%);';
                                $portfolio_shader_style_custom .= 'background: linear-gradient(to bottom, ' . $overlay_background_color1 . ' 10%, ' . $overlay_background_color2 . ' 100%);"';
                            }
                        } else {
                            $portfolio_shader_style_custom = 'style="background-color:' . $overlay_background_color_custom . ';"';
                        }
                    }
                }

                $featured_image_array = wp_get_attachment_image_src(get_post_thumbnail_id(), $thumb_size);

                if (get_post_meta(get_the_ID(), 'qode_portfolio-lightbox-link', true) != "") {
                    $large_image = get_post_meta(get_the_ID(), 'qode_portfolio-lightbox-link', true);
                } else {
                    $large_image = $featured_image_array[0];
                }

                $slug_list_ = "pretty_photo_gallery";

                $custom_portfolio_link = get_post_meta(get_the_ID(), 'qode_portfolio-external-link', true);
                $portfolio_link = $custom_portfolio_link != "" ? $custom_portfolio_link : get_permalink();
                $target = $custom_portfolio_link != "" ? '_blank' : '_self';

                // get categories for specific article
                $category_html = "";
                $category_html .= '<span>' . esc_html__('In ', 'select-core') . '</span>';
                $k = 1;
                foreach ($terms as $term) {
                    $category_html .= "$term->name";
                    if (count($terms) != $k) {
                        $category_html .= ' / ';
                    }
                    $k++;
                }

                $html .= "<li class='item'>";
                $html .= '<div class="item_holder ' . $hover_type . '">';

                switch ($hover_type) {
                    case 'gradient_hover':
                    case 'upward_hover':
                    case 'subtle_vertical_hover':
                    case 'image_subtle_rotate_zoom_hover':
                    case 'slide_up_hover':
                    case 'image_text_zoom_hover':
                    case 'text_slides_with_image':
                    case 'thin_plus_only':
                    case 'circle_hover': {
                        $html .= '<div class="text_holder" ' . $hover_box_style . '>';
                        $html .= '<div class="text_holder_outer">';
                        $html .= '<div class="text_holder_inner">';
                        if($hover_type == 'thin_plus_only'){
                            $html .= '<span class="thin_plus_only_icon" '.$cursor_color.'>+</span>';
                        }
                        elseif ($type == 'text_on_hover_image') {
                            if ($disable_link != "yes") {
                                $html .= '<' . $title_tag . ' class="portfolio_title" ' . $title_style . '><a href="' . $portfolio_link . '" ' . $title_link_style . '>' . get_the_title() . '</a></' . $title_tag . '>';
                            } else {
                                $html .= '<' . $title_tag . ' class="portfolio_title" ' . $title_style . '>' . get_the_title() . '</' . $title_tag . '>';
                            }
                            if ($separator == 'yes') {
                                $html .= '<span class="separator ' . $separator_animation_class . '" ' . $separator_style . '></span>';
                            }
                            if ($show_categories == 'yes') {
                                $html .= '<span class="project_category" ' . $category_style . '>' . $category_html . '</span>';
                            }
                        }
                        if ($show_icons == 'yes') {
                            $html .= '<div class="icons_holder">';
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

                        $html .= '</div>'; // text_holder_inner
                        $html .= '</div>';  // text_holder_outer
                        $html .= '</div>'; // text_holder
                    }
                        break;
                    case 'opposite_corners_hover':
                    case 'slide_from_left_hover':
                    case 'prominent_plain_hover':
                    case 'prominent_blur_hover':
                    case 'icons_bottom_corner':
                    case 'slow_zoom':
                    case 'split_up': {
                        if ($type == 'text_on_hover_image') {
                            $html .= '<div class="text_holder">';
                            $html .= '<div class="text_holder_outer">';
                            $html .= '<div class="text_holder_inner">';
                            if ($disable_link != "yes") {
                                $html .= '<' . $title_tag . ' class="portfolio_title" ' . $title_style . '><a href="' . $portfolio_link . '" ' . $title_link_style . '>' . get_the_title() . '</a></' . $title_tag . '>';
                            } else {
                                $html .= '<' . $title_tag . ' class="portfolio_title" ' . $title_style . '>' . get_the_title() . '</' . $title_tag . '>';
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
                        if ($show_icons == 'yes') {
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
                                $html .= '<a class="preview" title="Go to Project" href="' . $portfolio_link . '" data-type="portfolio_list" target="' . $target . '" ></a>';
                            }
                            $html .= '</div>';  // icons_holder
                        }
                    }
                        break;
                }

                $html .= '<div class="portfolio_shader" ' . $portfolio_shader_style_custom . '></div>';
                $html .= '<div class="image_holder">';
                $html .= '<span class="image">';
                $html .= get_the_post_thumbnail(get_the_ID(), $thumb_size);
                $html .= '</span>';
                $html .= '</div>'; // close image_holder
                $html .= '</div>'; // close item_holder

                // portfolio description start

                if ($type == "standard") {
                    $html .= "<div class='portfolio_description " . $portfolio_description_class . "' ".pitch_qode_get_inline_style(implode('; ', $portfolio_box_style)).">";

                    $html .= '<' . $title_tag . ' class="portfolio_title" ' . $title_style . '>' . get_the_title() . '</' . $title_tag . '>';
                    if ($separator == 'yes') {
                        $html .= '<span class="separator ' . $separator_animation_class . '" ' . $separator_style . '></span>';
                    }
                    if ($show_categories != 'no') {
                        $html .= '<span class="project_category" ' . $category_style . '>' . $category_html . '</span>';
                    }

                    $html .= '</div>'; // close portfolio_description
                }

                $html .= "</li>";

                $postCount++;

            endwhile;

        else:
            $html .= esc_html__('Sorry, no posts matched your criteria.', 'select-core');
        endif;

        wp_reset_postdata();

        $html .= "</ul>";
        if ($enable_navigation) {

            $icon_navigation_class = 'arrow_carrot-';
            if (pitch_qode_options()->getOptionValue( 'carousel_navigation_arrows_type' )) {
                $icon_navigation_class = pitch_qode_options()->getOptionValue( 'carousel_navigation_arrows_type' );
            }

            $direction_nav_classes = pitch_qode_horizontal_slider_icon_classes($icon_navigation_class);
            $random_number = rand();

            $html .= '<ul class="caroufredsel-direction-nav"><li><a id="caroufredsel-prev-'.$random_number.'" class="caroufredsel-prev" href="#"><span class="' .$direction_nav_classes['left_icon_class']. '"></span></a></li><li><a class="caroufredsel-next" id="caroufredsel-next-'.$random_number.'" href="#"><span class="' .$direction_nav_classes['right_icon_class']. '"></span></a></li></ul>';
        }
        $html .= "</div></div>";

        return $html;
    }
}
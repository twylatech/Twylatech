<?php

namespace QodeCore\CPT\Testimonials\Shortcodes;


use QodeCore\Lib;
/**
 * Class Testimonials
 * @package QodeCore\CPT\Testimonials\Shortcodes
 */
class Testimonials implements Lib\ShortcodeInterface {
    /**
     * @var string
     */
    private $base;
	
    public function __construct() {
        $this->base = 'no_testimonials';

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
	
	        $icons_array = pitch_qode_icon_collections()->getVCParamsArray(array("element" => "testimonial_type", "value" => array("with_icon")), '', false);
			
            vc_map( array(
                "name" => esc_html__( "Testimonials", 'select-core' ),
                "base" => $this->base,
                "category" => esc_html__( 'by Select', 'select-core' ),
                "icon" => "icon-wpb-testimonials extended-custom-icon",
                "allowed_container_element" => 'vc_row',
                "params" => array_merge(
					array(
						array(
							"type" => "dropdown",
							"holder" => "div",
							"class" => "",
							"heading" => esc_html__( "Type", 'select-core' ),
							"param_name" => "testimonial_type",
							"value" => array(
								"Vertically Aligned" => "image_above",
								"Horizontally Aligned" => "image_left",
								"Horizontally Aligned With Icon" => "with_icon",
								"Carousel" => "testimonial_type_carousel"
							),
							"save_always" => true
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
							"type" => "textfield",
							"holder" => "div",
							"class" => "",
							"heading" => esc_html__( "Number", 'select-core' ),
							"param_name" => "number",
							"value" => "",
							"description" => esc_html__( "Number of Testimonials", 'select-core' )
						),
					),
					$icons_array,
					array(
						array(
							"type" => "textfield",
							"holder" => "div",
							"class" => "",
							"heading" => esc_html__( "Icon Font Size", 'select-core' ),
							"param_name" => "icon_font_size",
							"value" => "",
							"dependency" => array("element" => "testimonial_type", "value" => array("with_icon"))
						),
						array(
							"type" => "colorpicker",
							"holder" => "div",
							"class" => "",
							"heading" => esc_html__( "Icon Color", 'select-core' ),
							"param_name" => "icon_color",
							"dependency" => array("element" => "testimonial_type", "value" => array("with_icon"))
						),
						array(
							"type" => "dropdown",
							"holder" => "div",
							"class" => "",
							"heading" => esc_html__( "Show Title", 'select-core' ),
							"param_name" => "show_title",
							"value" => array(
								"Yes" => "yes",
								"No" => "no"
							),
							"dependency" => array(
								"element" => "testimonial_type", 
								"value" => array(
									"with_icon",
									"image_left",
									"image_above"
								)
							),
							"save_always" => true
						),
						array(
							"type" => "colorpicker",
							"holder" => "div",
							"class" => "",
							"heading" => esc_html__( "Title Color", 'select-core' ),
							"param_name" => "title_color",
							"dependency" => array("element" => "show_title", "value" => array("yes"))
						),
						array(
							"type" => "dropdown",
							"holder" => "div",
							"class" => "",
							"heading" => esc_html__( "Show Title Separator", 'select-core' ),
							"param_name" => "show_title_separator",
							"value" => array(
								"No" => "no",
								"Yes" => "yes"
							),
							"dependency" => array(
								"element" => "testimonial_type", 
								"value" => array(
									"with_icon",
									"image_left",
									"image_above"
								)
							),
							"save_always" => true
						),
						array(
							"type" => "colorpicker",
							"holder" => "div",
							"class" => "",
							"heading" => esc_html__( "Separator Color", 'select-core' ),
							"param_name" => "separator_color",
							"dependency" => array("element" => "show_title_separator", "value" => array("yes"))
						),
						array(
							"type" => "textfield",
							"holder" => "div",
							"class" => "",
							"heading" => esc_html__( "Separator Width", 'select-core' ),
							"param_name" => "separator_width",
							"dependency" => array("element" => "show_title_separator", "value" => array("yes"))
						),
						array(
							"type" => "textfield",
							"holder" => "div",
							"class" => "",
							"heading" => esc_html__( "Separator Height", 'select-core' ),
							"param_name" => "separator_height",
							"dependency" => array("element" => "show_title_separator", "value" => array("yes"))
						),
						array(
							"type" => "dropdown",
							"holder" => "div",
							"class" => "",
							"heading" => esc_html__( "Text Align", 'select-core' ),
							"param_name" => "text_align",
							"value" => array(
								"Left"   => "left_align",
								"Center" => "center_align",
								"Right"  => "right_align"
							),
							"dependency" => array(
								"element" => "testimonial_type", 
								"value" => array(
									"with_icon",
									"image_left",
									"image_above"
								)
							),
							"save_always" => true
						),
						array(
							"type" => "colorpicker",
							"holder" => "div",
							"class" => "",
							"heading" => esc_html__( "Text Color", 'select-core' ),
							"param_name" => "text_color"
						),
						array(
							"type" => "textfield",
							"holder" => "div",
							"class" => "",
							"heading" => esc_html__( "Text Font Family", 'select-core' ),
							"param_name" => "text_font_family"
						),
						array(
							"type" => "textfield",
							"holder" => "div",
							"class" => "",
							"heading" => esc_html__( "Text Font Size", 'select-core' ),
							"param_name" => "text_font_size"
						),
						array(
							"type" => "textfield",
							"holder" => "div",
							"class" => "",
							"heading" => esc_html__( "Text Line Height (px)", 'select-core' ),
							"param_name" => "text_line_height"
						),
						array(
							"type" => "dropdown",
							"holder" => "div",
							"class" => "",
							"heading" => esc_html__( "Text Font Style", 'select-core' ),
							"param_name" => "text_font_style",
							"value" => array(
								"" => "",
								esc_html__( "Normal", 'select-core' ) => "normal",
								esc_html__( "Italic", 'select-core' ) => "italic"
							),
							"save_always" => true
						),
						array(
							"type" => "dropdown",
							"holder" => "div",
							"class" => "",
							"heading" => esc_html__( "Text Font Weigth", 'select-core' ),
							"param_name" => "text_font_weight",
							"value" => array(
								esc_html__( "Default", 'select-core' ) => "",
								esc_html__( "Thin 100", 'select-core' ) => "100",
								esc_html__( "Extra-Light 200", 'select-core' ) => "200",
								esc_html__( "Light 300", 'select-core' ) => "300",
								esc_html__( "Regular 400", 'select-core' ) => "400",
								esc_html__( "Medium 500", 'select-core' ) => "500",
								esc_html__( "Semi-Bold 600", 'select-core' ) => "600",
								esc_html__( "Bold 700", 'select-core' ) => "700",
								esc_html__( "Extra-Bold 800", 'select-core' ) => "800",
								esc_html__( "Ultra-Bold 900", 'select-core' ) => "900"
							),
							"save_always" => true
						),
						array(
							"type" => "textfield",
							"holder" => "div",
							"class" => "",
							"heading" => esc_html__( "Text Letter spacing (px)", 'select-core' ),
							"param_name" => "text_letter_spacing"
						),
						array(
							"type" => "textfield",
							"holder" => "div",
							"class" => "",
							"heading" => esc_html__( "Text Top Padding", 'select-core' ),
							"param_name" => "text_top_padding"
						),
						array(
							"type" => "textfield",
							"holder" => "div",
							"class" => "",
							"heading" => esc_html__( "Text Bottom Padding", 'select-core' ),
							"param_name" => "text_bottom_padding"
						),
						array(
							"type" => "dropdown",
							"holder" => "div",
							"class" => "",
							"heading" => esc_html__( "Show Author", 'select-core' ),
							"param_name" => "show_author",
							"value" => array(
								esc_html__( "Yes", 'select-core' ) => "yes",
								esc_html__( "No", 'select-core' ) => "no"
							),
							"save_always" => true
						),
						array(
							"type" => "dropdown",
							"holder" => "div",
							"class" => "",
							"heading" => esc_html__( "Author Position", 'select-core' ),
							"param_name" => "author_position",
							"value" => array(
								esc_html__( "Below Text", 'select-core' ) => "below_text",
								esc_html__( "Above Text", 'select-core' ) => "above_text"
							),
							"description" => esc_html__( "This option does not work when Carousel type is selected.", 'select-core' ),
							"dependency" => array("element" => "show_author", "value" => array("yes")),
							"save_always" => true
						),
						array(
							"type" => "textfield",
							"holder" => "div",
							"class" => "",
							"heading" => esc_html__( "Author Text Font Family", 'select-core' ),
							"param_name" => "author_text_font_family",
							"dependency" => array("element" => "show_author", "value" => array("yes"))
						),
						array(
							"type" => "colorpicker",
							"holder" => "div",
							"class" => "",
							"heading" => esc_html__( "Author Text Color", 'select-core' ),
							"param_name" => "author_text_color",
							"dependency" => array("element" => "show_author", "value" => array("yes"))
						),
						array(
							"type" => "textfield",
							"holder" => "div",
							"class" => "",
							"heading" => esc_html__( "Author Font Size (px)", 'select-core' ),
							"param_name" => "author_font_size",
							"dependency" => array("element" => "show_author", "value" => array("yes"))
						),
						array(
							"type" => "dropdown",
							"holder" => "div",
							"class" => "",
							"heading" => esc_html__( "Author Font Weigth", 'select-core' ),
							"param_name" => "author_font_weight",
							"value" => array(
								esc_html__( "Default", 'select-core' ) => "",
								esc_html__( "Thin 100", 'select-core' ) => "100",
								esc_html__( "Extra-Light 200", 'select-core' ) => "200",
								esc_html__( "Light 300", 'select-core' ) => "300",
								esc_html__( "Regular 400", 'select-core' ) => "400",
								esc_html__( "Medium 500", 'select-core' ) => "500",
								esc_html__( "Semi-Bold 600", 'select-core' ) => "600",
								esc_html__( "Bold 700", 'select-core' ) => "700",
								esc_html__( "Extra-Bold 800", 'select-core' ) => "800",
								esc_html__( "Ultra-Bold 900", 'select-core' ) => "900"
							),
							"dependency" => array("element" => "show_author", "value" => array("yes")),
							"save_always" => true
						),
						array(
							"type" => "dropdown",
							"holder" => "div",
							"class" => "",
							"heading" => esc_html__( "Author Font Style", 'select-core' ),
							"param_name" => "author_font_style",
							"value" => array(
								"" => "",
								esc_html__( "Normal", 'select-core' ) => "normal",
								esc_html__( "Italic", 'select-core' ) => "italic"
							),
							"dependency" => array("element" => "show_author", "value" => array("yes")),
							"save_always" => true
						),
						array(
							"type" => "dropdown",
							"holder" => "div",
							"class" => "",
							"heading" => esc_html__( "Show Author Job Position", 'select-core' ),
							"param_name" => "show_position",
							"value" => array(
								esc_html__( "No", 'select-core' ) => "no",
								esc_html__( "Yes", 'select-core' ) => "yes"
							),
							"dependency" => array("element" => "show_author", "value" => array("yes")),
							"save_always" => true
						),
						array(
							"type" => "dropdown",
							"holder" => "div",
							"class" => "",
							"heading" => esc_html__( "Job Position Placement", 'select-core' ),
							"param_name" => "job_position_placement",
							"value" => array(
								esc_html__( "In line with name", 'select-core' ) => "inline",
								esc_html__( "Below name", 'select-core' ) => "below"
							),
							"dependency" => array("element" => "show_position", "value" => array("yes")),
							"description" => esc_html__( "This option does not work when Carousel type is selected.", 'select-core' ),
							"save_always" => true
						),
						array(
							"type" => "colorpicker",
							"holder" => "div",
							"class" => "",
							"heading" => esc_html__( "Job Color", 'select-core' ),
							"param_name" => "job_color",
							"dependency" => array("element" => "show_position", "value" => array("yes"))
						),
						array(
							"type" => "textfield",
							"holder" => "div",
							"class" => "",
							"heading" => esc_html__( "Job Font size (px)", 'select-core' ),
							"param_name" => "job_font_size",
							"dependency" => array("element" => "show_position", "value" => array("yes"))
						),
						array(
							"type" => "dropdown",
							"holder" => "div",
							"class" => "",
							"heading" => esc_html__( "Job Font style", 'select-core' ),
							"param_name" => "job_font_style",
							"value" => array(
								"" => "",
								esc_html__( "Normal", 'select-core' ) => "normal",
								esc_html__( "Italic", 'select-core' ) => "italic"
							),
							"dependency" => array("element" => "show_position", "value" => array("yes")),
							"save_always" => true
						),
						array(
							"type" => "dropdown",
							"holder" => "div",
							"class" => "",
							"heading" => esc_html__( "Show Image", 'select-core' ),
							"param_name" => "show_image",
							"value" => array(
								esc_html__( "Yes", 'select-core' ) => "yes",
								esc_html__( "No", 'select-core' ) => "no"
							),
							"dependency" => array(
								"element" => "testimonial_type",
								"value" => array(
									"image_above",
									"image_left"
								)
							),
							"save_always" => true
						),
						array(
							"type" => "dropdown",
							"holder" => "div",
							"class" => "",
							"heading" => esc_html__( "Choose Navigation Type", 'select-core' ),
							"param_name" => "navigation_type",
							"value" => array(
								esc_html__( "None", 'select-core' ) => "none",
								esc_html__( "Arrows", 'select-core' ) => "arrows",
								esc_html__( "Buttons", 'select-core' ) => "buttons"
							),
							"dependency" => array(
								"element" => "testimonial_type", 
								"value" => array(
									"image_left",
									"testimonial_type_carousel"
								)
							),
							"save_always" => true
						),
						array(
							"type" => "dropdown",
							"holder" => "div",
							"class" => "",
							"heading" => esc_html__( "Enable outer border around active button", 'select-core' ),
							"param_name" => "active_button_outer_border",
							"value" => array(
								esc_html__( "No", 'select-core' ) => "no",
								esc_html__( "Yes", 'select-core' ) => "yes"
							),
							"dependency" => array(
								"element" => "navigation_type", 
								"value" => array(
									"buttons"
								)
							),
							"save_always" => true
						),
						array(
							"type" => "dropdown",
							"holder" => "div",
							"class" => "",
							"heading" => esc_html__( "Enable dark navigation", 'select-core' ),
							"param_name" => "dark_navigation",
							"value" => array(
								esc_html__( "No", 'select-core' ) => "no",
								esc_html__( "Yes", 'select-core' ) => "yes"
							),
							"dependency" => array(
								"element" => "navigation_type",
								"value" => array(
									"buttons"
								)
							),
							"save_always" => true
						),
						array(
							"type" => "dropdown",
							"holder" => "div",
							"class" => "",
							"heading" => esc_html__( "Auto rotate slides", 'select-core' ),
							"param_name" => "auto_rotate_slides",
							"value" => array(
								"3"         => "3",
								"5"         => "5",
								esc_html__( "10", 'select-core' ) => "10",
								esc_html__( "15", 'select-core' ) => "15",
								esc_html__( "Disable", 'select-core' ) => "0"
							),
							"dependency" => array(
								"element" => "testimonial_type", 
								"value" => array(
									"with_icon",
									"image_left"
								)
							),
							"save_always" => true
						),
						array(
							"type" => "textfield",
							"holder" => "div",
							"class" => "",
							"heading" => esc_html__( "Animation speed", 'select-core' ),
							"param_name" => "animation_speed",
							"value" => "",
							"description" => esc_html__( "Speed of slide animation in miliseconds", 'select-core' ),
							"dependency" => array(
								"element" => "testimonial_type", 
								"value" => array(
									"with_icon",
									"image_left"
								)
							)
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
        $deafult_args = array(
			"testimonial_type" => "image_above",
            "number" => "-1",
            "category" => "",
            "icon_font_size" => "",
            "icon_color" => "",
            "show_title" => "",
            "title_color" => "",
            "show_title_separator" => "no",
            "separator_color" => "",
            "separator_width" => "",
            "separator_height" => "",
            "text_color" => "",
            "text_font_size" => "",
			"text_font_family" => "",
            "text_line_height" => "",
            "text_font_style" => "",
			"text_font_weight" => "",
            "text_letter_spacing" => "",
			"text_top_padding" => "",
			"text_bottom_padding" => "",
            "show_author" => "yes",
            "author_position" => "below_text",
            "author_text_color" => "",
			"author_text_font_family" => "",
            "author_font_size" => "",
			"author_font_weight" => "",
			"author_font_style" => "",
            "show_position" => "no",
            "job_position_placement" => "",
            "job_color" => "",
            "job_font_size" => "",
            "job_font_style" => "",
            "text_align" => "left_align",
            "navigation_type" => "arrows",
            "active_button_outer_border" => "no",
            "dark_navigation" => "no",
            "auto_rotate_slides" => "",
            "animation_speed" => "",
            "show_image" => "yes"
        );
		
		$args = array_merge($deafult_args, pitch_qode_icon_collections()->getShortcodeParams());

        extract(shortcode_atts($args, $atts));
		
        $number = esc_attr($number);
        $category = esc_attr($category);
        $icon_font_size = esc_attr($icon_font_size);
        $icon_color = esc_attr($icon_color);
        $title_color = esc_attr($title_color);
        $separator_color = esc_attr($separator_color);
        $separator_width = esc_attr($separator_width);
        $separator_height = esc_attr($separator_height);
        $text_color = esc_attr($text_color);
		$text_font_family = esc_attr($text_font_family);
        $text_font_size = esc_attr($text_font_size);
        $text_font_style = esc_attr($text_font_style);
		$text_font_weight = esc_attr($text_font_weight);
        $text_letter_spacing = esc_attr($text_letter_spacing);
		$text_top_padding = esc_attr($text_top_padding);
		$text_bottom_padding = esc_attr($text_bottom_padding);
        $author_text_color = esc_attr($author_text_color);
		$author_text_font_family = esc_attr($author_text_font_family);
		$author_font_weight = esc_attr($author_font_weight);
		$author_font_style = esc_attr($author_font_style);
		$author_font_size = esc_attr($author_font_size);
        $job_color = esc_attr($job_color);
        $job_font_size = esc_attr($job_font_size);
        $job_font_style = esc_attr($job_font_style);
        $animation_speed = esc_attr($animation_speed);
		
        $html = "";
        $html_author = "";		
        $add_icon = '';
        $testimonial_p_style = "";
        $testimonial_separator_style = "";
        $testimonial_title_style = "";
		$navigation_button_classes = "";
        $testimonial_name_styles = "";
        $testimonials_clasess = "";
        $image_clasess = "";
        $ul_classes = "";
        $testimonial_image_border_style = "";
        $job_style = "";
		$data_attr = '';
		$show_navigation_arrows = '';
		$show_navigation = '';

		if ($testimonial_type == "image_left" || $testimonial_type == 'testimonial_type_carousel') {
			if ($navigation_type != 'none') {
				if ($navigation_type == 'arrows') {
					$show_navigation_arrows = 'yes';
					$show_navigation = 'no';
				}
				else {
					$show_navigation_arrows = 'no';
					$show_navigation = 'yes';
				}
			}
			else {
				$show_navigation_arrows = 'no';
				$show_navigation = 'no';
			}
		}

		
		if($active_button_outer_border == 'yes'){
			$navigation_button_classes .= 'button_with_border';
		}

		if($dark_navigation == 'yes') {
			$navigation_button_classes .= ' dark_navigation';
		}

		if ($show_navigation_arrows == "yes") {
			$testimonials_clasess .= ' with_arrows ';
		}

		if ($testimonial_type != "") {
			$testimonials_clasess .= ' ' . $testimonial_type;
		}

		if ($show_image == "yes") {
			$testimonials_clasess .= ' show_images';
		}

        if ($separator_color != "") {
            $testimonial_separator_style .= "background-color: " . $separator_color . ";";
        }
        if ($separator_width != "") {
            $testimonial_separator_style .= "width: " . $separator_width . "px;";
        }
        if ($separator_height != "") {
            $testimonial_separator_style .= "height: " . $separator_height . "px;";
        }
        if ($title_color != "") {
            $testimonial_title_style .= "color: " . $title_color . ";";
        }

		
		if ($icon_pack != "") {
			$testimonial_icon_style = '';
			$icon_collection_obj = pitch_qode_icon_collections()->getIconCollection($icon_pack);

			if ($icon_font_size != "") {
				$testimonial_icon_style .= 'font-size: ' . $icon_font_size . 'px;';
			}
			
			if ($icon_color != "") {
				$testimonial_icon_style .= "color:" . $icon_color . ";";
			}

				if (method_exists($icon_collection_obj, 'render')) {
				$add_icon .= $icon_collection_obj->render(${$icon_collection_obj->param}, array(
					'icon_attributes' => array(
						'style' => $testimonial_icon_style,
						'class' => 'show_load_more_icon'
					)
				));
			}

		}

        if ($text_font_size != "" || $text_color != "" || $text_top_padding != "" || $text_bottom_padding != "" || $text_font_style != "" || $text_font_weight != "" || $text_letter_spacing != "" || $text_line_height != "" || $text_font_family !="") {
            $testimonial_p_style = " style='";
			if ($text_font_family != "") {
                $testimonial_p_style .= "font-family:" . $text_font_family . "!important;";
            }
            if ($text_font_size != "") {
                $testimonial_p_style .= "font-size:" . $text_font_size . "px;";
            }
            if ($text_font_style != "") {
                $testimonial_p_style .= "font-style:" . $text_font_style . ";";
            }
			if ($text_font_weight != "") {
                $testimonial_p_style .= "font-weight:" . $text_font_weight . ";";
            }
			if ($text_letter_spacing != "") {
                $testimonial_p_style .= "letter-spacing:" . $text_letter_spacing . "px;";
            }
			if ($text_line_height != "") {
				$text_line_height = (strstr($text_line_height, 'px', true)) ? $text_line_height : $text_line_height . 'px';
				$testimonial_p_style .= "line-height:" . $text_line_height . ";";
			}
            if ($text_color != "") {
                $testimonial_p_style .= "color:" . $text_color . ";";
            }
            if ($text_top_padding != "") {
				$testimonial_p_style .= "padding-top:" . $text_top_padding . "px;";
			}
			if ($text_bottom_padding != "") {
				 $testimonial_p_style .= "padding-bottom:" . $text_bottom_padding . "px;";
			}
            $testimonial_p_style .= "'";
        }

        if ($author_text_color != "") {
            $testimonial_name_styles .= "color: " . $author_text_color . ";";
        }
		if ($author_text_font_family != "") {
            $testimonial_name_styles .= "font-family: " . $author_text_font_family . ";";
        }
        if ($author_font_size != "") {
            $author_font_size = (strstr($author_font_size, 'px', true)) ? $author_font_size : $author_font_size . 'px';
            $testimonial_name_styles .= "font-size: " . $author_font_size . ";";
        }		
		if ($author_font_weight != "") {
            $testimonial_name_styles .= "font-weight: " . $author_font_weight . ";";
        }
		if ($author_font_style != "") {
            $testimonial_name_styles .= "font-style: " . $author_font_style . ";";
        }

        if ($job_color != "") {
            $job_style .= 'color: '.$job_color.';';
        }
        if ($job_font_size != "") {
            $job_font_size = (strstr($job_font_size, 'px', true)) ? $job_font_size : $job_font_size . 'px';
            $job_style .= 'font-size: '.$job_font_size.'px;';
        }
        if ($job_font_style != "") {
            $job_style .= 'font-style: '.$job_font_style.';';
        }

        $args = array(
	        'post_status' => 'publish',
            'post_type' => 'testimonials',
            'orderby' => "date",
            'order' => "DESC",
            'posts_per_page' => $number
        );

        if ($category != "") {
            $args['testimonials_category'] = $category;
        }


        

		$html .= "<div class='testimonials_holder clearfix " . $text_align . "'>";

		if($testimonial_type != 'image_above') {
			$html .= '<div class="testimonials testimonials_carousel ' . $testimonials_clasess . ' ' . $navigation_button_classes . '" data-show-navigation="' . $show_navigation . '" data-show-navigation-arrows="' . $show_navigation_arrows . '" data-animation-speed="' . $animation_speed . '" data-auto-rotate-slides="' . $auto_rotate_slides . '">';
			$html .= '<ul class="slides ' . $ul_classes . '">';
		}
		else {
			$html .= '<div class="testimonials ' . $testimonials_clasess .'">';
		}

        $query_loop = new \WP_Query( $args );
		
        if ($query_loop->have_posts()) :
            while ($query_loop->have_posts()) : $query_loop->the_post();
                $author = get_post_meta(get_the_ID(), "qode_testimonial-author", true);
                $text = get_post_meta(get_the_ID(), "qode_testimonial-text", true);
                $title = get_post_meta(get_the_ID(), "qode_testimonial_title", true);
                $job = get_post_meta(get_the_ID(), "qode_testimonial_author_position", true);


                $html .= '<li id="testimonials' . get_the_ID() . '" class="testimonial_content ' . $text_align . ' ' . $image_clasess . '">';

                switch ($testimonial_type) {
                	case 'image_left':
                		
                		$html .= '<div class = "testimonial_image_left_holder" '.$data_attr.'>';

		                $html .= '<div class="testimonial_content_inner">';
		                $html .= '<div class="testimonial_text_holder ' . $text_align . '">';

		                if ($show_author == "yes") {
							$html_author = '<div class="testimonial_author_info">';
							if ($show_image == "yes" && has_post_thumbnail(get_the_ID())) {
								$html_author .= '<div class="testimonial_image_holder" style="' . $testimonial_image_border_style . '">' . get_the_post_thumbnail(get_the_ID()) . '</div>';
							}
							$html_author .= '<div class="author_name_holder">';
		                    $html_author .= '<span class="testimonial_author" style="' . $testimonial_name_styles . '">' . $author;
		                    if ($show_position == "yes" && $job !== '') {
		                        if( $job_position_placement == "inline" ) {
		                            $html_author .= ' / <span class="testimonials_job" style="'.$job_style.'">'.$job.'</span>';
		                        }
		                        elseif ( $job_position_placement == "below") {
		                            $html_author .= '<span class="testimonials_job below" style="'.$job_style.'">'.$job.'</span>';
		                        }
		                    }
		                    $html_author .= '</span>';
		                    $html_author .= '</div>';
		                    $html_author .= '</div>';
		                }

		                $testimonial_text_inner_class = '';
		                if($show_title == "no") {
		                    $testimonial_text_inner_class .= ' without_title';
		                }

		                $html .= '<div class="testimonial_text_inner'. $testimonial_text_inner_class .'">';
		                if ($show_title == "yes") {
		                    $html .= '<p class="testimonial_title" style="' . $testimonial_title_style . '">' . $title . '</p>';
		                }
		                if ($show_title_separator == "yes") {
		                    $html .= '<span class="testimonial_separator" style="' . $testimonial_separator_style . '"></span>';
		                }
		                if ($author_position == "below_text") {
		                    $html .= '<p class="testimonial_text"' . $testimonial_p_style . '>' . trim($text) . '</p>';
		                    $html .= $html_author;
		                } elseif ($author_position == "above_text") {
		                    $html .= $html_author;
		                    $html .= '<p class="testimonial_text"' . $testimonial_p_style . '>' . trim($text) . '</p>';
		                }


		                $html .= '</div>'; //close testimonial_text_inner
		                $html .= '</div>'; //close testimonial_text_holder
		                $html .= '</div>'; //close testimonial_image_left_holder

		                $html .= '</div>'; //close testimonial_content_inner
		                break;
                	
                	case 'image_above':
						$html .= '<div class="testimonial_content_inner">';

						if ($show_author == "yes") {
							$html_author = '<p class="testimonial_author" style="' . $testimonial_name_styles . '"> ' . $author;
							if ($show_position == "yes" && $job !== '') {
								if( $job_position_placement == "inline" ) {
									$html_author .= ' / <span class="testimonials_job" style="'.$job_style.'">'.$job.'</span>';
								}
								elseif ( $job_position_placement == "below") {
									$html_author .= '<span class="testimonials_job below" style="'.$job_style.'">'.$job.'</span>';
								}
							}
							$html_author .= '</p>';
						}

						$html_content = '<div class="testimonial_text_holder ' . $text_align . '">';

						$testimonial_text_inner_class = '';
						if($show_title == "no") {
							$testimonial_text_inner_class .= ' without_title';
						}
						if($show_image == 'no') {
							$testimonial_text_inner_class .= ' without_image';
						}

						$html_content .= '<div class="testimonial_text_inner'. $testimonial_text_inner_class .'">';
						if ($show_title == "yes") {
							$html_content .= '<p class="testimonial_title" style="' . $testimonial_title_style . '">' . $title . '</p>';
						}
						if ($show_title_separator == "yes") {
							$html_content .= '<span class="testimonial_separator" style="' . $testimonial_separator_style . '"></span>';
						}

						$html_content .= '<p class="testimonial_text"' . $testimonial_p_style . '>' . trim($text) . '</p>';

						$html_content .= '</div>'; //close testimonial_text_inner
						$html_content .= '</div>'; //close testimonial_text_holder

						if ($show_image == "yes" || $show_author == "yes") {
							if ($author_position == "below_text") {
								$html .= $html_content;
								$html .= '<div class="testimonial_info_holder testimonial_text_inner ">';
								if ($show_image == "yes") {
									$html .= '<div class="testimonial_image_holder" style="' . $testimonial_image_border_style . '">' . get_the_post_thumbnail(get_the_ID()) . '</div>';
								}
								$html .= $html_author;
								$html .= '</div>';
							} elseif ($author_position == "above_text") {
								$html .= '<div class="testimonial_info_holder testimonial_text_inner ">';
								if ($show_image == "yes") {
									$html .= '<div class="testimonial_image_holder" style="' . $testimonial_image_border_style . '">' . get_the_post_thumbnail(get_the_ID()) . '</div>';
								}
								$html .= $html_author;
								$html .= '</div>';
								$html .= $html_content;
							}
						}
						else if ($show_image == "no" && $show_author == "no"){
							$html .= $html_content;
						}

		                $html .= '</div>'; //close testimonial_content_inner
                		break;
						
					case 'with_icon':
						$html .= '<div class = "testimonial_with_icon_holder" '.$data_attr.'>';			               
						$html .= '<div class="testimonial_icon_holder">';
						$html .= $add_icon;
						$html .= '</span>';							
						$html .= '</div>';		               
		                $html .= '<div class="testimonial_content_inner">';
		                $html .= '<div class="testimonial_text_holder ' . $text_align . '">';

		                if ($show_author == "yes") {
		                    $html_author = '<p class="testimonial_author" style="' . $testimonial_name_styles . '">- ' . $author;
		                    if ($show_position == "yes" && $job !== '') {
		                        if( $job_position_placement == "inline" ) {
		                            $html_author .= ', <span class="testimonials_job" style="'.$job_style.'">'.$job.'</span>';
		                        }
		                        elseif ( $job_position_placement == "below") {
		                            $html_author .= '<span class="testimonials_job below" style="'.$job_style.'">'.$job.'</span>';
		                        }
		                    }
		                    $html_author .= '</p>';
		                }

		                $testimonial_text_inner_class = '';
		                if($show_title == "no") {
		                    $testimonial_text_inner_class .= ' without_title';
		                }

		                $html .= '<div class="testimonial_text_inner'. $testimonial_text_inner_class .'">';
		                if ($show_title == "yes" && $title != "") {
		                    $html .= '<p class="testimonial_title" style="' . $testimonial_title_style . '">' . $title . '</p>';
		                }
		                if ($show_title_separator == "yes") {
		                    $html .= '<span class="testimonial_separator" style="' . $testimonial_separator_style . '"></span>';
		                }
		                if ($author_position == "below_text") {
		                    $html .= '<p class="testimonial_text"' . $testimonial_p_style . '>' . trim($text) . '</p>';
		                    $html .= $html_author;
		                } elseif ($author_position == "above_text") {
		                    $html .= $html_author;
		                    $html .= '<p class="testimonial_text"' . $testimonial_p_style . '>' . trim($text) . '</p>';
		                }


		                $html .= '</div>'; //close testimonial_text_inner
		                $html .= '</div>'; //close testimonial_text_holder
		                $html .= '</div>'; //close testimonial_image_left_holder

		                $html .= '</div>'; //close testimonial_content_inner
		                break;
						
					case 'testimonial_type_carousel':
						$html .= '<div class="top_color_holder"></div>'; //top color holder
						$html .= '<div class = "testimonial_type_carousel_container" '.$data_attr.'>'; //open single carousel
						$html .= '<div class="content_holder">'; //open carousel content holder
						$html .= '<div class = "testimonial_type_carousel_text_holder">'; // open text holder
						$html .= '<p class="testimonial_text"' . $testimonial_p_style . '>' . trim($text) . '</p>';
						$html .= '<div class="testimonial_type_carousel_triangle"></div>';
						$html .= '</div>'; // closing text holder
						$html .= '<div class="testimonial_image_holder">' . get_the_post_thumbnail(get_the_ID()) . '</div>';
						$html .= '<div class="testimonial_author_holder ' . $text_align . '">'; // open author holder
						$html .= '<p class="testimonial_author" style="' . $testimonial_name_styles . '"> ' . $author . '</p>';
						if ($job !== '') {
							$html .= '<p class="testimonials_job" style="'.$job_style.'">'.$job.'</p>';
		                }
						$html .= '</div>'; // close author holder
						$html .= '</div>'; // close carousel content holder
						$html .= '</div>'; // closing single carousel
					break;

                	default:
						$html .= '<div class="testimonial_content_inner">';

						if ($show_author == "yes") {
							$html_author = '<p class="testimonial_author" style="' . $testimonial_name_styles . '"> ' . $author;
							if ($show_position == "yes" && $job !== '') {
								if( $job_position_placement == "inline" ) {
									$html_author .= ' / <span class="testimonials_job" style="'.$job_style.'">'.$job.'</span>';
								}
								elseif ( $job_position_placement == "below") {
									$html_author .= '<span class="testimonials_job below" style="'.$job_style.'">'.$job.'</span>';
								}
							}
							$html_author .= '</p>';
						}

						$html_content = '<div class="testimonial_text_holder ' . $text_align . '">';

						$testimonial_text_inner_class = '';
						if($show_title == "no") {
							$testimonial_text_inner_class .= ' without_title';
						}
						if($show_image == 'no') {
							$testimonial_text_inner_class .= ' without_image';
						}

						$html_content .= '<div class="testimonial_text_inner'. $testimonial_text_inner_class .'">';
						if ($show_title == "yes") {
							$html_content .= '<p class="testimonial_title" style="' . $testimonial_title_style . '">' . $title . '</p>';
						}
						if ($show_title_separator == "yes") {
							$html_content .= '<span class="testimonial_separator" style="' . $testimonial_separator_style . '"></span>';
						}

						$html_content .= '<p class="testimonial_text"' . $testimonial_p_style . '>' . trim($text) . '</p>';

						$html_content .= '</div>'; //close testimonial_text_inner
						$html_content .= '</div>'; //close testimonial_text_holder

						if ($show_image == "yes" || $show_author == "yes") {
							if ($author_position == "below_text") {
								$html .= $html_content;
								$html .= '<div class="testimonial_info_holder testimonial_text_inner ">';
								if ($show_image == "yes") {
									$html .= '<div class="testimonial_image_holder" style="' . $testimonial_image_border_style . '">' . get_the_post_thumbnail(get_the_ID()) . '</div>';
								}
								$html .= $html_author;
								$html .= '</div>';
							} elseif ($author_position == "above_text") {
								$html .= '<div class="testimonial_info_holder testimonial_text_inner ">';
								if ($show_image == "yes") {
									$html .= '<div class="testimonial_image_holder" style="' . $testimonial_image_border_style . '">' . get_the_post_thumbnail(get_the_ID()) . '</div>';
								}
								$html .= $html_author;
								$html .= '</div>';
								$html .= $html_content;
							}
						}
						else if ($show_image == "no" && $show_author == "no"){
							$html .= $html_content;
						}

						$html .= '</div>'; //close testimonial_content_inner
						break;
                }

                $html .= '</li>'; //close testimonials
            endwhile;
        else:
            $html .= esc_html__('Sorry, no posts matched your criteria.', 'select-core');
        endif;

        wp_reset_postdata();
        $html .= '</ul>'; //close slides
		if($testimonial_type == 'testimonial_type_carousel') {
			if ($navigation_type != 'none') {
				if ($navigation_type == 'arrows') {
					$html .= '<ul class="caroufredsel-direction-nav"><li><a id="caroufredsel-prev" class="caroufredsel-prev" href="#"><span class="fa fa-angle-left"></span></a></li><li><a class="caroufredsel-next" id="caroufredsel-next" href="#"><span class="fa fa-angle-right"></span></a></li></ul>';
				}
				if ($navigation_type == 'buttons') {
					$html .= '<div id="testimonial_slider_pager" class="testimonial_slider_pager ' . $navigation_button_classes .'"></div>';
				}
			}
		}
        $html .= '</div>';
        $html .= '</div>';
        return $html;
    }
}
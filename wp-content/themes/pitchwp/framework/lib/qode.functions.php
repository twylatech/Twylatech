<?php

/**
 * Function that checks if option has value from theme options.
 * It first checks global $pitch_qode_options variable and if option does'nt exists there
 * it checks default theme options
 *
 * @param $name string name of the option to retrieve
 * @return bool
 */
function pitch_qode_option_has_value($name) {
	global $pitch_qode_options;
	global $pitch_qode_framework;

	if (array_key_exists($name, $pitch_qode_framework->qodeOptions->options)) {
		if(isset($pitch_qode_options[$name])) {
			return true;
		} else {
			return false;
		}
	} else {
		global $post;

		$value = get_post_meta( $post->ID, $name, true );

		if (isset($value) && $value !== "") {
			return true;
		} else {
			return false;
		}

	}
}

/**
 * Function that gets option by it's name.
 * It first checks if option exists in $pitch_qode_options global array and if it does'nt exists there
 * it checks default theme options array.
 *
 * @param $name string name of the option to retrieve
 * @return mixed|void
 */
function pitch_qode_option_get_value($name) {
	global $pitch_qode_options;
	global $pitch_qode_framework;

	if (array_key_exists($name, $pitch_qode_framework->qodeOptions->options)) {
		if(isset($pitch_qode_options[$name])){
			return $pitch_qode_options[$name];
		} else {
			return $pitch_qode_framework->qodeOptions->getOption($name);
		}
	} else {
		global $post;

		$value = ! empty( $post ) ? get_post_meta( $post->ID, $name, true ) : '';
		if (isset($value) && $value !== "") {
			return $value;
		} else {
			return $pitch_qode_framework->qodeMetaBoxes->getOption($name);
		}

	}
}

/**
 * Function that gets attachment thumbnail url from attachment url
 * @param $attachment_url string url of the attachment
 * @return bool|string
 *
 * @see pitch_qode_get_attachment_id_from_url()
 */
function pitch_qode_get_attachment_thumb_url($attachment_url) {
	$attachment_id = pitch_qode_get_attachment_id_from_url($attachment_url);

	if(!empty($attachment_id)) {
		return wp_get_attachment_thumb_url($attachment_id);
	} else {
		return $attachment_url;
	}
}

/**
 * Function that enqueue skin style. Wrapper around wp_enqueue_style function,
 * it prepends $src with skin path
 * @param $handle string unique key for style
 * @param $src string path inside skin folder
 * @param array $deps array of handles that style will depend on
 * @param bool|string $ver whether to add version string or not.
 * @param string $media media for which to add style. Defaults to 'all'
 *
 * @see wp_enqueue_style()
 */
function pitch_qode_enqueue_skin_style($handle, $src, $deps = array(), $ver = false, $media = 'all') {
	global $pitch_qode_framework;

	$src = get_template_directory_uri().'/framework/admin/skins/'.$pitch_qode_framework->getSkin().'/'.$src;
	wp_enqueue_style($handle, $src, $deps, $ver, $media);
}

/**
 * Function that registers skin style. Wrapper around wp_register_style function,
 * it prepends $src with skin path
 * @param $handle string unique key for style
 * @param $src string path inside skin folder
 * @param array $deps array of handles that style will depend on
 * @param bool|string $ver whether to add version string or not.
 * @param string $media media for which to add style. Defaults to 'all'
 *
 * @see wp_register_style()
 */
function pitch_qode_register_skin_style($handle, $src, $deps = array(), $ver = false, $media = 'all') {
	global $pitch_qode_framework;

	$src = get_template_directory_uri().'/framework/admin/skins/'.$pitch_qode_framework->getSkin().'/'.$src;
	wp_register_style($handle, $src, $deps = array(), $ver = false, $media = 'all');
}

/**
 * Function that enqueue skin script. Wrapper around wp_enqueue_script function,
 * it prepends $src with skin path
 * @param $handle string unique key for style
 * @param $src string path inside skin folder
 * @param array $deps array of handles that style will depend on
 * @param bool|string $ver whether to add version string or not.
 * @param bool $in_footer whether to include script in footer or not.
 *
 * @see wp_enqueue_script()
 */
function pitch_qode_enqueue_skin_script($handle, $src, $deps = array(), $ver = false, $in_footer = false) {
	global $pitch_qode_framework;

	$src = get_template_directory_uri().'/framework/admin/skins/'.$pitch_qode_framework->getSkin().'/'.$src;
	wp_enqueue_script($handle, $src, $deps, $ver, $in_footer);
}

/**
 * Function that registers skin script. Wrapper around wp_register_script function,
 * it prepends $src with skin path
 * @param $handle string unique key for style
 * @param $src string path inside skin folder
 * @param array $deps array of handles that style will depend on
 * @param bool|string $ver whether to add version string or not.
 * @param bool $in_footer whether to include script in footer or not.
 *
 * @see wp_register_script()
 */
function pitch_qode_register_skin_script($handle, $src, $deps = array(), $ver = false, $in_footer = false) {
	global $pitch_qode_framework;

	$src = get_template_directory_uri().'/framework/admin/skins/'.$pitch_qode_framework->getSkin().'/'.$src;
	wp_register_script($handle, $src, $deps, $ver, $in_footer);
}

if ( ! function_exists( 'pitch_qode_gallery_upload_get_images' ) ) {
	/**
	 * Function that outputs single image html that is used in multiple image upload field
	 */
	function pitch_qode_gallery_upload_get_images() {
		check_ajax_referer( 'pitch-qode-update-images_' . sanitize_text_field( $_POST['post_name'] ), 'upload_gallery_nonce' );
		
		if ( ! empty( $_POST['ids'] ) ) {
			foreach($_POST['ids'] as $id):
				$image = wp_get_attachment_image_src( intval( $id ), 'thumbnail', true );
				echo '<li class="qode-gallery-image-holder"><img src="' . esc_url( $image[0] ) . '"/></li>';
			endforeach;
		}
		exit;
	}
	
	add_action( 'wp_ajax_pitch_qode_gallery_upload_get_images', 'pitch_qode_gallery_upload_get_images' );
}

if (!function_exists('pitch_qode_hex2rgb')) {
	/**
	 * Function that transforms hex color to rgb color
	 * @param $hex string original hex string
	 * @return array array containing three elements (r, g, b)
	 */
	function pitch_qode_hex2rgb($hex) {
		$hex = str_replace("#", "", $hex);

		if(strlen($hex) == 3) {
			$r = hexdec(substr($hex,0,1).substr($hex,0,1));
			$g = hexdec(substr($hex,1,1).substr($hex,1,1));
			$b = hexdec(substr($hex,2,1).substr($hex,2,1));
		} else {
			$r = hexdec(substr($hex,0,2));
			$g = hexdec(substr($hex,2,2));
			$b = hexdec(substr($hex,4,2));
		}
		$rgb = array($r, $g, $b);
		//return implode(",", $rgb); // returns the rgb values separated by commas
		return $rgb; // returns an array with the rgb values
	}
}

if(!function_exists('pitch_qode_get_attachment_meta')) {
	/**
	 * Function that returns attachment meta data from attachment id
	 * @param $attachment_id
	 * @param array $keys sub array of attachment meta
	 * @return array|mixed
	 */
	function pitch_qode_get_attachment_meta($attachment_id, $keys = array()) {
		$meta_data = array();

		//is attachment id set?
		if(!empty($attachment_id)) {
			//get all post meta for given attachment id
			$meta_data = get_post_meta($attachment_id, '_wp_attachment_metadata', true);

			//is subarray of meta array keys set?
			if(is_array($keys) && count($keys) && !empty($meta_data)) {
				$sub_array = array();

				//for each defined key
				foreach($keys as $key) {
					//check if that key exists in all meta array
					if(array_key_exists($key, $meta_data)) {
						//assign key from meta array for current key to meta subarray
						$sub_array[$key] = $meta_data[$key];
					}
				}

				//we want meta array to be subarray because that is what used whants to get
				$meta_data = $sub_array;
			}
		}

		//return meta array
		return $meta_data;
	}
}

if(!function_exists('pitch_qode_get_attachment_id_from_url')) {
	/**
	 * Function that retrieves attachment id for passed attachment url
	 * @param $attachment_url
	 * @return null|string
	 */
	function pitch_qode_get_attachment_id_from_url($attachment_url) {
		global $wpdb;
		$attachment_id = '';

		//is attachment url set?
		if($attachment_url !== '') {
			//prepare query

			$query = $wpdb->prepare("SELECT ID FROM {$wpdb->posts} WHERE guid=%s", $attachment_url);

			//get attachment id
			$attachment_id = $wpdb->get_var($query);
		}

		//return id
		return $attachment_id;
	}
}

if(!function_exists('pitch_qode_get_attachment_meta_from_url')) {
	/**
	 * Function that returns meta array for give attachment url
	 * @param $attachment_url
	 * @param array $keys sub array of attachment meta
	 * @return array|mixed
	 *
	 * @see pitch_qode_get_attachment_id_from_url()
	 * @see pitch_qode_get_attachment_meta()
	 *
	 * @version 0.1
	 */
	function pitch_qode_get_attachment_meta_from_url($attachment_url, $keys = array()) {
		$attachment_meta = array();

		//get attachment id for attachment url
		$attachment_id 	= pitch_qode_get_attachment_id_from_url($attachment_url);

		//is attachment id set?
		if(!empty($attachment_id)) {
			//get post meta
			$attachment_meta = pitch_qode_get_attachment_meta($attachment_id, $keys);
		}

		//return post meta
		return $attachment_meta;
	}
}

if(!function_exists('pitch_qode_get_image_dimensions')) {
	/**
	 * Function that returns image sizes array. First looks in post_meta table if attachment exists in the database,
	 * if it doesn't than it uses getimagesize PHP function to get image sizes
	 * @param $url string url of the image
	 * @return array array of image sizes that containes height and width
	 *
	 * @see pitch_qode_get_attachment_meta_from_url()
	 * @uses getimagesize
	 *
	 * @version 0.1
	 */
	function pitch_qode_get_image_dimensions($url) {
		$image_sizes = array();

		//is url passed?
		if($url !== '') {
			//get image sizes from posts meta if attachment exists
			$image_sizes = pitch_qode_get_attachment_meta_from_url($url, array('width', 'height'));

			//image does not exists in post table, we have to use PHP way of getting image size
			if(!count($image_sizes)) {
				require_once( ABSPATH . 'wp-admin/includes/file.php' );
				
				//can we open file by url?
				if ( ini_get( 'allow_url_fopen' ) == 1 && file_exists( $url ) ) {
					list( $width, $height, $type, $attr ) = getimagesize( $url );
				} else {
					//we can't open file directly, have to locate it with relative path.
					$image_obj           = parse_url( $url );
					$image_relative_path = rtrim( get_home_path(), '/' ) . $image_obj['path'];
					
					if ( file_exists( $image_relative_path ) ) {
						list( $width, $height, $type, $attr ) = getimagesize( $image_relative_path );
					}
				}

				//did we get width and height from some of above methods?
				if(isset($width) && isset($height)) {
					//set them to our image sizes array
					$image_sizes = array(
						'width' => $width,
						'height' => $height
					);
				}
			}
		}

		return $image_sizes;
	}
}

if(!function_exists('pitch_qode_get_native_fonts_list')) {
	/**
	 * Function that returns array of native fonts
	 * @return array
	 */
	function pitch_qode_get_native_fonts_list(){

		return array(
			'Arial',
			'Arial Black',
			'Comic Sans MS',
			'Courier New',
			'Georgia',
			'Impact',
			'Lucida Console',
			'Lucida Sans Unicode',
			'Palatino Linotype',
			'Tahoma',
			'Times New Roman',
			'Trebuchet MS',
			'Verdana');

	}
}

if(!function_exists('pitch_qode_get_native_fonts_array')) {
	/**
	 * Function that returns formatted array of native fonts
	 *
	 * @uses pitch_qode_get_native_fonts_list()
	 * @return array
	 */
	function pitch_qode_get_native_fonts_array(){
		$native_fonts_list = pitch_qode_get_native_fonts_list();
		$native_font_index = 0;
		$native_fonts_array = array();

		foreach($native_fonts_list as $native_font){
			$native_fonts_array[$native_font_index] = array('family' => $native_font);
			$native_font_index++;
		}

		return $native_fonts_array;
	}
}

if(!function_exists('pitch_qode_is_native_font')) {
	/**
	 * Function that checks if given font is native font
	 * @param $font_family string
	 * @return bool
	 */
	function pitch_qode_is_native_font($font_family) {
		return  in_array(str_replace('+', ' ', $font_family), pitch_qode_get_native_fonts_list());
	}
}


if(!function_exists('pitch_qode_merge_fonts')) {
	/**
	 * Function that merge google and native fonts
	 *
	 * @uses pitch_qode_get_native_fonts_array()
	 * @return array
	 */
	function pitch_qode_merge_fonts() {
		global $pitch_fonts_array;
		$native_fonts = pitch_qode_get_native_fonts_array();

		if(is_array($native_fonts) && count($native_fonts)){
			$pitch_fonts_array = array_merge($native_fonts, $pitch_fonts_array);
		}
	}

	add_action('admin_init', 'pitch_qode_merge_fonts');
}

if(!function_exists('pitch_qode_inline_style')) {
	/**
	 * Function that echoes generated style attribute
	 * @param $value string | array attribute value
	 *
	 * @see pitch_qode_get_inline_style()
	 */
	function pitch_qode_inline_style($value) {
		echo pitch_qode_get_inline_style($value);
	}
}

if(!function_exists('pitch_qode_get_inline_style')) {
	/**
	 * Function that generates style attribute and returns generated string
	 * @param $value string | array value of style attribute
	 * @return string generated style attribute
	 *
	 * @see pitch_qode_get_inline_style()
	 */
	function pitch_qode_get_inline_style($value) {
		return pitch_qode_get_inline_attr($value, 'style', ';');
	}
}

if(!function_exists('pitch_qode_class_attribute')) {
	/**
	 * Function that echoes class attribute
	 * @param $value string value of class attribute
	 *
	 * @see pitch_qode_get_class_attribute()
	 */
	function pitch_qode_class_attribute($value) {
		echo pitch_qode_get_class_attribute($value);
	}
}

if(!function_exists('pitch_qode_get_class_attribute')) {
	/**
	 * Function that returns generated class attribute
	 * @param $value string value of class attribute
	 * @return string generated class attribute
	 *
	 * @see pitch_qode_get_inline_attr()
	 */
	function pitch_qode_get_class_attribute($value) {
		return pitch_qode_get_inline_attr($value, 'class');
	}
}

if(!function_exists('pitch_qode_get_inline_attr')) {
	/**
	 * Function that generates html attribute
	 * @param $value string | array value of html attribute
	 * @param $attr string name of html attribute to generate
	 * @param $glue string glue with which to implode $attr. Used only when $attr is array
	 * @return string generated html attribute
	 */
	function pitch_qode_get_inline_attr($value, $attr, $glue = '') {
		if(!empty($value)) {

			if(is_array($value) && count($value)) {
				$properties = implode($glue, $value);
			} elseif($value !== '') {
				$properties = $value;
			}

			return $attr.'="'.esc_attr($properties).'"';
		}

		return '';
	}
}

if(!function_exists('pitch_qode_get_skin_uri')) {
    /**
     * Returns current skin URI
     * @return mixed
     */
    function pitch_qode_get_skin_uri() {
		global $pitch_qode_framework;

		$current_skin = $pitch_qode_framework->getSkin();

		return $current_skin->getSkinURI();
	}
}

if(!function_exists('pitch_qode_resize_image')) {
    /**
     * Functin that generates custom thumbnail for given attachment
     * @param null $attach_id id of attachment
     * @param null $attach_url URL of attachment
     * @param int $width desired height of custom thumbnail
     * @param int $height desired width of custom thumbnail
     * @param bool $crop whether to crop image or not
     * @return array returns array containing img_url, width and height
     *
     * @see pitch_qode_get_attachment_id_from_url()
     * @see get_attached_file()
     * @see wp_get_attachment_url()
     * @see wp_get_image_editor()
     */
    function pitch_qode_resize_image($attach_id = null, $attach_url = null, $width = null, $height = null, $crop = true) {
        $return_array = array();

        //is attachment id empty?
        if(empty($attach_id) && $attach_url !== '') {
            //get attachment id from url
            $attach_id = pitch_qode_get_attachment_id_from_url($attach_url);
        }

        if(!empty($attach_id) && (isset($width) && isset($height))) {

            //get file path of the attachment
            $img_path = get_attached_file($attach_id);

            //get attachment url
            $img_url  = wp_get_attachment_url($attach_id);

            //break down img path to array so we can use it's components in building thumbnail path
            $img_path_array = pathinfo($img_path);

            //build thumbnail path
            $new_img_path = $img_path_array['dirname'].'/'.$img_path_array['filename'].'-'.$width.'x'.$height.'.'.$img_path_array['extension'];

            //build thumbnail url
            $new_img_url = str_replace($img_path_array['filename'], $img_path_array['filename'].'-'.$width.'x'.$height, $img_url);

            //check if thumbnail exists by it's path
            if(!file_exists($new_img_path)) {
                //get image manipulation object
                $image_object = wp_get_image_editor($img_path);

                if(!is_wp_error($image_object)) {
                    //resize image and save it new to path
                    $image_object->resize($width, $height, $crop);
                    $image_object->save($new_img_path);

                    //get sizes of newly created thumbnail.
                    ///we don't use $width and $height because those might differ from end result based on $crop parameter
                    $image_sizes = $image_object->get_size();

                    $width = $image_sizes['width'];
                    $height = $image_sizes['height'];
                }
            }

            //generate data to be returned
            $return_array = array(
                'img_url' => $new_img_url,
                'img_width' => $width,
                'img_height' => $height
            );
        }

        //attachment wasn't found, probably because it comes from external source
        elseif($attach_url !== '' && (isset($width) && isset($height))) {
            //generate data to be returned
            $return_array = array(
                'img_url' => $attach_url,
                'img_width' => $width,
                'img_height' => $height
            );
        }

        return $return_array;
    }
}

if(!function_exists('pitch_qode_generate_thumbnail')) {
    /**
     * Generates thumbnail img tag. It calls pitch_qode_resize_image function which resizes img on the fly
     * @param null $attach_id attachment id
     * @param null $attach_url attachment URL
     * @param  int$width width of thumbnail
     * @param int $height height of thumbnail
     * @param bool $crop whether to crop thumbnail or not
     * @return string generated img tag
     *
     * @see pitch_qode_resize_image()
     * @see pitch_qode_get_attachment_id_from_url()
     */
    function pitch_qode_generate_thumbnail($attach_id = null, $attach_url = null, $width = null, $height = null, $crop = true) {
        //is attachment id empty?
        if(empty($attach_id)) {
            //get attachment id from attachment url
            $attach_id = pitch_qode_get_attachment_id_from_url($attach_url);
        }

        if(!empty($attach_id) || !empty($attach_url)) {
            $img_info = pitch_qode_resize_image($attach_id, $attach_url, $width, $height, $crop);
            $img_alt = !empty($attach_id) ? get_post_meta($attach_id, '_wp_attachment_image_alt', true) : '';

            if(is_array($img_info) && count($img_info)) {
                return '<img src="'.esc_url($img_info['img_url']).'" alt="'.esc_attr($img_alt).'" width="'.intval($img_info['img_width']).'" height="'.intval($img_info['img_height']).'" />';
            }
        }

        return '';
    }
}
if (!function_exists('pitch_qode_paged_home')) {
	/**
	 * Set false to on paged url on homepage
	 *
	 * @return int
	 */
	function pitch_qode_paged_home() {
		if (is_page() && !is_feed() && 'page' == get_option('show_on_front') && pitch_qode_return_global_wp_query()->queried_object->ID == get_option('page_on_front')) {
			$redirect_url = false;

			return $redirect_url;
		}
	}

	add_filter('redirect_canonical', 'pitch_qode_paged_home');
}

if ( ! function_exists( 'pitch_qode_get_options_value_by_name' ) ) {
	function pitch_qode_get_options_value_by_name( $name ) {
		$options = array();
		
		if ( ! empty( $name ) ) {
			switch ( $name ) {
				case 'font_style':
					$options = array(
						"normal" => esc_html__( "Normal", "pitch" ),
						"italic" => esc_html__( "Italic", "pitch" )
					);
					break;
				case 'font_weight':
					$options = array(
						"100" => esc_html__( "100", "pitch" ),
						"200" => esc_html__( "200", "pitch" ),
						"300" => esc_html__( "300", "pitch" ),
						"400" => esc_html__( "400", "pitch" ),
						"500" => esc_html__( "500", "pitch" ),
						"600" => esc_html__( "600", "pitch" ),
						"700" => esc_html__( "700", "pitch" ),
						"800" => esc_html__( "800", "pitch" ),
						"900" => esc_html__( "900", "pitch" )
					);
					break;
				case 'text_transform':
					$options = array(
						"none"       => esc_html__( "None", "pitch" ),
						"capitalize" => esc_html__( "Capitalize", "pitch" ),
						"uppercase"  => esc_html__( "Uppercase", "pitch" ),
						"lowercase"  => esc_html__( "Lowercase", "pitch" )
					);
					break;
				case 'text_decoration':
					$options = array(
						"none"      => esc_html__( "None", "pitch" ),
						"underline" => esc_html__( "Underline", "pitch" )
					);
					break;
				case 'arrows_type':
					$options = array(
						'fa fa-angle-double-'               => 'fa-angle-double',
						'fa fa-angle-'                      => 'fa-angle',
						'fa fa-arrow-circle-'               => 'fa-arrow-circle',
						'fa fa-arrow-circle-o-'             => 'fa-arrow-circle-o',
						'fa fa-arrow-'                      => 'fa-arrow',
						'fa fa-caret-'                      => 'fa-caret',
						'fa fa-caret-square-o-'             => 'fa-caret-square-o',
						'fa fa-chevron-circle-'             => 'fa-chevron-circle',
						'fa fa-chevron-'                    => 'fa-chevron',
						'fa fa-hand-o-'                     => 'fa-hand-o',
						'fa fa-long-arrow-'                 => 'fa-long-arrow',
						'arrow_'                            => 'arrow',
						'arrow_carrot-'                     => 'arrow_carrot',
						'arrow_carrot-2'                    => 'arrow_carrot-2',
						'arrow_carrot-left_alt2'            => 'arrow_carrot alt2',
						'arrow_carrot-2left_alt2'           => 'arrow_carrot 2 alt2',
						'arrow_triangle-'                   => 'arrow_triangle',
						'arrow_triangle-left_alt2'          => 'arrow_triangle alt2',
						'icon-arrows-drag-'                 => 'icon-arrows-drag',
						'icon-arrows-drag-left-dashed'      => 'icon-arrows-drag dashed',
						'icon-arrows-keyboard-'             => 'icon-arrows-keyboard',
						'icon-arrows-'                      => 'icon-arrows',
						'icon-arrows-left-double-32'        => 'icon-arrows double',
						'icon-arrows-move-'                 => 'icon-arrows-move',
						'icon-arrows-sign-'                 => 'icon-arrows-sign',
						'icon-arrows-slide-left1'           => 'icon-arrows-slide 1',
						'icon-arrows-slide-left2'           => 'icon-arrows-slide 2',
						'icon-arrows-slim-'                 => 'icon-arrows-slim',
						'icon-arrows-slim-left-dashed'      => 'icon-arrows-slim dashed',
						'icon-arrows-square-'               => 'icon-arrows-square',
						'ion-arrow-left-a'                  => 'ion-arrow a',
						'ion-arrow-left-b'                  => 'ion-arrow b',
						'ion-arrow-left-c'                  => 'ion-arrow c',
						'ion-chevron-'                      => 'ion-chevron',
						'ion-ios-arrow-'                    => 'ion-ios-arrow',
						'ion-ios-arrow-thin-'               => 'ion-ios-arrow-thin',
						'ion-ios-fastforward'               => 'ion-ios fastforward/rewind',
						'ion-ios-fastforward-outline'       => 'ion-ios fastforward/rewind outline',
						'ion-ios-skipbackward'              => 'ion-ios skipbackward/skipforward',
						'ion-ios-skipbackward-outline'      => 'ion-ios skipbackward/skipforward outline',
						'ion-android-arrow-'                => 'ion-android-arrow',
						'ion-android-arrow-drop'            => 'ion-android-arrow-dropleft/dropright',
						'ion-android-arrow-dropleft-circle' => 'ion-android-arrow-dropleft/dropright circle',
					);
					break;
				case 'double_arrows_type':
					$options = array(
						'fa fa-angle-double-'          => 'fa-angle-double',
						'arrow_carrot-2'               => 'arrow_carrot-2',
						'arrow_carrot-2left_alt2'      => 'arrow_carrot 2 alt2',
						'icon-arrows-left-double-32'   => 'icon-arrows double',
						'icon-arrows-move-'            => 'icon-arrows-move',
						'ion-ios-fastforward'          => 'ion-ios fastforward/rewind',
						'ion-ios-fastforward-outline'  => 'ion-ios fastforward/rewind outline',
						'ion-ios-skipbackward'         => 'ion-ios skipbackward/skipforward',
						'ion-ios-skipbackward-outline' => 'ion-ios skipbackward/skipforward outline',
					);
					break;
				case 'arrows_up_type':
					$options = array(
						'fa fa-arrow-circle-o-up'         => 'fa-arrow-circle-o-up',
						'fa fa-arrow-circle-up'           => 'fa-arrow-circle-up',
						'fa fa-arrow-up'                  => 'fa-arrow-up',
						'fa fa-long-arrow-up'             => 'fa-long-arrow-up',
						'fa fa-caret-square-o-up'         => 'fa-caret-square-o-up',
						'fa fa-caret-up'                  => 'fa-caret-up',
						'fa fa-chevron-circle-up'         => 'fa-chevron-circle-up',
						'fa fa-chevron-up'                => 'fa-chevron-up',
						'fa fa-angle-up'                  => 'fa-angle-up',
						'fa fa-angle-double-up'           => 'fa-angle-double-up',
						'fa fa-hand-o-up'                 => 'fa-hand-o-up',
						'arrow_up'                        => 'arrow_up',
						'arrow_up_alt'                    => 'arrow_up_alt',
						'arrow_carrot-up'                 => 'arrow_carrot-up',
						'arrow_carrot-2up'                => 'arrow_carrot-2up',
						'arrow_carrot-up_alt2'            => 'arrow_carrot-up_alt2',
						'arrow_carrot-2up_alt2'           => 'arrow_carrot-2up_alt2',
						'arrow_carrot_up_alt'             => 'arrow_carrot_up_alt',
						'arrow_carrot-2up_alt'            => 'arrow_carrot-2up_alt',
						'arrow_triangle-up'               => 'arrow_triangle-up',
						'arrow_triangle-up_alt'           => 'arrow_triangle-up_alt',
						'arrow_triangle-up_alt2'          => 'arrow_triangle-up_alt2',
						'ion-arrow-up-a'                  => 'ion-arrow-up-a',
						'ion-arrow-up-b'                  => 'ion-arrow-up-b',
						'ion-arrow-up-c'                  => 'ion-arrow-up-c',
						'ion-chevron-up'                  => 'ion-chevron-up',
						'ion-ios-arrow-up'                => 'ion-ios-arrow-up',
						'ion-ios-arrow-thin-up'           => 'ion-ios-arrow-thin-up',
						'ion-android-arrow-up'            => 'ion-android-arrow-up',
						'ion-android-arrow-dropup'        => 'ion-android-arrow-dropup',
						'ion-android-arrow-dropup-circle' => 'ion-android-arrow-dropup-circle',
						'ion-android-navigate'            => 'ion-android-navigate',
					);
					break;
				case 'blockquote_type':
					$options = array(
						'fa fa-quote-right'    => 'fa-quote-right',
						'fa fa-quote-left'     => 'fa-quote-left',
						'icon_quotations'      => 'icon_quotations',
						'icon_quotations_alt'  => 'icon_quotations_alt',
						'icon_quotations_alt2' => 'icon_quotations_alt2',
						'ion-quote'            => 'ion-quote',
					);
					break;
			}
		}
		
		return $options;
	}
}
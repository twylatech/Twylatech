<?php
if ( ! function_exists( 'add_action' ) ) {
	header( 'Status: 403 Forbidden' );
	header( 'HTTP/1.1 403 Forbidden' );
	exit();
}

class PitchQodeImport {
	public $message = "";
	public $attachments = false;
	
	function __construct() {
		add_action( 'admin_menu', array( &$this, 'qode_admin_import' ) );
		add_action( 'admin_init', array( &$this, 'qode_register_theme_settings' ) );
	}
	
	function qode_register_theme_settings() {
		register_setting( 'qode_options_import_page', 'qode_options_import' );
	}
	
	public function import_content( $file ) {
		ob_start();
		
		require_once ABSPATH . 'wp-admin/includes/class-wp-importer.php';
		require_once PITCH_CORE_MODULES_PATH . '/import/class.wordpress-importer.php';
		
		$qode_import = new WP_Import();
		set_time_limit( 0 );
		
		$qode_import->fetch_attachments = $this->attachments;
		$returned_value                 = $qode_import->import( $file );
		if ( is_wp_error( $returned_value ) ) {
			$this->message = esc_html__( "An Error Occurred During Import", "select-core" );
		} else {
			$this->message = esc_html__( "Content imported successfully", "select-core" );
		}
		ob_get_clean();
	}
	
	public function import_widgets( $file, $file2 ) {
		$this->import_custom_sidebars( $file2 );
		$options = $this->file_options( $file );
		foreach ( (array) $options['widgets'] as $qode_widget_id => $qode_widget_data ) {
			update_option( 'widget_' . $qode_widget_id, $qode_widget_data );
		}
		$this->import_sidebars_widgets( $file );
		$this->message = esc_html__( "Widgets imported successfully", "select-core" );
	}
	
	public function import_sidebars_widgets( $file ) {
		$qode_sidebars = get_option( "sidebars_widgets" );
		unset( $qode_sidebars['array_version'] );
		$data = $this->file_options( $file );
		if ( is_array( $data['sidebars'] ) ) {
			$qode_sidebars = array_merge( (array) $qode_sidebars, (array) $data['sidebars'] );
			unset( $qode_sidebars['wp_inactive_widgets'] );
			$qode_sidebars                  = array_merge( array( 'wp_inactive_widgets' => array() ), $qode_sidebars );
			$qode_sidebars['array_version'] = 2;
			wp_set_sidebars_widgets( $qode_sidebars );
		}
	}
	
	public function import_custom_sidebars( $file ) {
		$options = $this->file_options( $file );
		update_option( 'qode_sidebars', $options );
		$this->message = esc_html__( "Custom sidebars imported successfully", "select-core" );
	}
	
	public function import_options( $file ) {
		$options = $this->file_options( $file );
		update_option( 'qode_options_pitch', $options );
		$this->message = esc_html__( "Options imported successfully", "select-core" );
	}
	
	public function import_menus( $file ) {
		global $wpdb;
		$qode_terms_table = $wpdb->prefix . "terms";
		$this->menus_data = $this->file_options( $file );
		$menu_array       = array();
		foreach ( $this->menus_data as $registered_menu => $menu_slug ) {
			$term_rows = $wpdb->get_results( $wpdb->prepare( "SELECT * FROM $qode_terms_table where slug=%s", $menu_slug ), ARRAY_A );
			if ( isset( $term_rows[0]['term_id'] ) ) {
				$term_id_by_slug = $term_rows[0]['term_id'];
			} else {
				$term_id_by_slug = null;
			}
			$menu_array[ $registered_menu ] = $term_id_by_slug;
		}
		set_theme_mod( 'nav_menu_locations', array_map( 'absint', $menu_array ) );
		
	}
	
	public function import_settings_pages( $file ) {
		$pages = $this->file_options( $file );
		foreach ( $pages as $qode_page_option => $qode_page_id ) {
			update_option( $qode_page_option, $qode_page_id );
		}
	}
	
	function update_meta_fields_after_import( $folder ) {
		global $wpdb;
		
		$url       = esc_url( home_url( '/' ) );
		$demo_urls = $this->import_get_demo_urls( $folder );
		
		foreach ( $demo_urls as $demo_url ) {
			$sql_query   = "SELECT meta_id, meta_value FROM {$wpdb->postmeta} WHERE meta_key LIKE 'qode%' AND meta_value LIKE '" . esc_url( $demo_url ) . "%';";
			$meta_values = $wpdb->get_results( $sql_query );
			
			if ( ! empty( $meta_values ) ) {
				foreach ( $meta_values as $meta_value ) {
					$new_value = $this->recalc_serialized_lengths( str_replace( $demo_url, $url, $meta_value->meta_value ) );
					
					$wpdb->update( $wpdb->postmeta,	array( 'meta_value' => $new_value ), array( 'meta_id' => $meta_value->meta_id )	);
				}
			}
		}
	}
	
	function update_options_after_import( $folder ) {
		$url       = esc_url( home_url( '/' ) );
		$demo_urls = $this->import_get_demo_urls( $folder );
		
		foreach ( $demo_urls as $demo_url ) {
			$global_options    = get_option( 'qode_options_pitch' );
			$new_global_values = str_replace( $demo_url, $url, $global_options );
			
			update_option( 'qode_options_pitch', $new_global_values );
		}
	}
	
	function import_get_demo_urls( $folder ) {
		$demo_urls  = array();
		$domain_url = 'demo.select-themes.com/' . $folder;
		
		$demo_urls[] = ! empty( $domain_url ) ? 'http://' . $domain_url : '';
		$demo_urls[] = ! empty( $domain_url ) ? 'https://' . $domain_url : '';
		
		return $demo_urls;
	}
	
	function recalc_serialized_lengths( $sObject ) {
		$ret = preg_replace_callback( '!s:(\d+):"(.*?)";!', 'recalc_serialized_lengths_callback', $sObject );
		
		return $ret;
	}
	
	function recalc_serialized_lengths_callback( $matches ) {
		return "s:" . strlen( $matches[2] ) . ":\"$matches[2]\";";
	}
	
	public function file_options( $file ) {
		$file_content = $this->qode_file_contents( $file );
		if ( $file_content ) {
			$unserialized_content = unserialize( base64_decode( $file_content ) );
			if ( $unserialized_content ) {
				return $unserialized_content;
			}
		}
		
		return false;
	}
	
	function qode_file_contents( $path ) {
		$url      = "http://export.select-themes.com/" . $path;
		$response = wp_remote_get( $url );
		$body     = wp_remote_retrieve_body( $response );
		
		return $body;
	}
	
	function qode_admin_import() {
		global $pitch_qode_framework;
		
		$slug           = "_tabimport";
		$this->pagehook = add_submenu_page(
			'qode_pitch_theme_menu',
			esc_html__( 'Select Options - Select Import', "select-core" ),                   // The value used to populate the browser's title bar when the menu page is active
			esc_html__( 'Import', "select-core" ),                   // The text of the menu in the administrator's sidebar
			'administrator',                  // What roles are able to access the menu
			'qode_pitch_theme_menu' . $slug,                // The ID used to bind submenu items to this menu
			array( $pitch_qode_framework->getSkin(), 'renderImport' )
		);
		
		add_action( 'admin_print_scripts-' . $this->pagehook, 'pitch_qode_enqueue_admin_scripts' );
		add_action( 'admin_print_styles-' . $this->pagehook, 'pitch_qode_enqueue_admin_styles' );
	}
}

if ( ! function_exists( 'pitch_core_initialize_import_object' ) ) {
	function pitch_core_initialize_import_object() {
		$qode_import_object = pitch_core_get_import_object();
	}
	
	add_action( 'init', 'pitch_core_initialize_import_object' );
}

if ( ! function_exists( 'pitch_core_get_import_object' ) ) {
	function pitch_core_get_import_object() {
		$import_object = new PitchQodeImport();
		
		return $import_object;
	}
}

if ( ! function_exists( 'pitch_core_data_import' ) ) {
	function pitch_core_data_import() {
		$pitch_core_import = pitch_core_get_import_object();
		
		if ( $_POST['import_attachments'] == 1 ) {
			$pitch_core_import->attachments = true;
		} else {
			$pitch_core_import->attachments = false;
		}
		
		$folder = "pitch/";
		if ( ! empty( $_POST['example'] ) ) {
			$folder = $_POST['example'] . "/";
		}
		
		$pitch_core_import->import_content( $folder . $_POST['xml'] );
		$pitch_core_import->update_meta_fields_after_import( $folder );
		
		die();
	}
	
	add_action( 'wp_ajax_pitch_core_action_data_import', 'pitch_core_data_import' );
}

if ( ! function_exists( 'pitch_core_widgets_import' ) ) {
	function pitch_core_widgets_import() {
		$pitch_core_import = pitch_core_get_import_object();
		
		$folder = "pitch/";
		if ( ! empty( $_POST['example'] ) ) {
			$folder = $_POST['example'] . "/";
		}
		
		$pitch_core_import->import_widgets( $folder . 'widgets.txt', $folder . 'custom_sidebars.txt' );
		
		die();
	}
	
	add_action( 'wp_ajax_pitch_core_action_widgets_import', 'pitch_core_widgets_import' );
}

if ( ! function_exists( 'pitch_core_options_import' ) ) {
	function pitch_core_options_import() {
		$pitch_core_import = pitch_core_get_import_object();
		
		$folder = "pitch/";
		if ( ! empty( $_POST['example'] ) ) {
			$folder = $_POST['example'] . "/";
		}
		
		$pitch_core_import->import_options( $folder . 'options.txt' );
		$pitch_core_import->update_options_after_import( $folder );
		
		die();
	}
	
	add_action( 'wp_ajax_pitch_core_action_options_import', 'pitch_core_options_import' );
}

if ( ! function_exists( 'pitch_core_other_import' ) ) {
	function pitch_core_other_import() {
		$pitch_core_import = pitch_core_get_import_object();
		
		$folder = "pitch/";
		if ( ! empty( $_POST['example'] ) ) {
			$folder = $_POST['example'] . "/";
		}
		
		$pitch_core_import->import_options( $folder . 'options.txt' );
		$pitch_core_import->import_widgets( $folder . 'widgets.txt', $folder . 'custom_sidebars.txt' );
		$pitch_core_import->import_menus( $folder . 'menus.txt' );
		$pitch_core_import->import_settings_pages( $folder . 'settingpages.txt' );
		
		$pitch_core_import->update_meta_fields_after_import( $folder );
		$pitch_core_import->update_options_after_import( $folder );
		
		die();
	}
	
	add_action( 'wp_ajax_pitch_core_action_other_import', 'pitch_core_other_import' );
}
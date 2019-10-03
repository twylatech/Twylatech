<?php

if ( ! function_exists( 'pitch_qode_register_theme_included_plugins' ) ) {
	/**
	 * Registers theme required and optional plugins. Hooks to tgmpa_register hook
	 */
	function pitch_qode_register_theme_included_plugins() {
		$plugins = array(
			array(
				'name'               => esc_html__( 'Select Core', 'pitch' ),
				'slug'               => 'select-core',
				'source'             => get_template_directory() . '/plugins/select-core.zip',
				'required'           => true,
				'version'            => '1.3.1',
				'force_activation'   => false,
				'force_deactivation' => false,
				'external_url'       => ''
			),
			array(
				'name'               => esc_html__( 'Select Twitter Feed', 'pitch' ),
				'slug'               => 'select-twitter-feed',
				'source'             => get_template_directory() . '/plugins/select-twitter-feed.zip',
				'required'           => false,
				'version'            => '1.0.3',
				'force_activation'   => false,
				'force_deactivation' => false,
				'external_url'       => ''
			),
			array(
				'name'               => esc_html__( 'WPBakery Page Builder', 'pitch' ),
				'slug'               => 'js_composer',
				'source'             => get_template_directory() . '/plugins/js_composer.zip',
				'required'           => true,
				'version'            => '6.0.2',
				'force_activation'   => false,
				'force_deactivation' => false,
				'external_url'       => ''
			),
			array(
				'name'               => esc_html__( 'LayerSlider WP', 'pitch' ),
				'slug'               => 'LayerSlider',
				'source'             => get_template_directory() . '/plugins/LayerSlider.zip',
				'required'           => true,
				'version'            => '6.8.4',
				'force_activation'   => false,
				'force_deactivation' => false,
				'external_url'       => ''
			),
			array(
				'name'     => esc_html__( 'Envato Market', 'pitch' ),
				'slug'     => 'envato-market',
				'source'   => 'https://envato.github.io/wp-envato-market/dist/envato-market.zip',
				'required' => false
			),
			array(
				'name'         => esc_html__( 'WooCommerce', 'pitch' ),
				'slug'         => 'woocommerce',
				'external_url' => 'https://wordpress.org/plugins/woocommerce/',
				'required'     => false
			),
			array(
				'name'         => esc_html__( 'Contact Form 7', 'pitch' ),
				'slug'         => 'contact-form-7',
				'external_url' => 'https://wordpress.org/plugins/contact-form-7/',
				'required'     => false
			)
		);
		
		$config = array(
			'domain'       => 'pitch',
			'default_path' => '',
			'parent_slug'  => 'themes.php',
			'capability'   => 'edit_theme_options',
			'menu'         => 'install-required-plugins',
			'has_notices'  => true,
			'is_automatic' => false,
			'message'      => '',
			'strings'      => array(
				'page_title'                      => esc_html__( 'Install Required Plugins', 'pitch' ),
				'menu_title'                      => esc_html__( 'Install Plugins', 'pitch' ),
				'installing'                      => esc_html__( 'Installing Plugin: %s', 'pitch' ),
				'oops'                            => esc_html__( 'Something went wrong with the plugin API.', 'pitch' ),
				'notice_can_install_required'     => _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.', 'pitch' ),
				'notice_can_install_recommended'  => _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.', 'pitch' ),
				'notice_cannot_install'           => _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.', 'pitch' ),
				'notice_can_activate_required'    => _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.', 'pitch' ),
				'notice_can_activate_recommended' => _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.', 'pitch' ),
				'notice_cannot_activate'          => _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.', 'pitch' ),
				'notice_ask_to_update'            => _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.', 'pitch' ),
				'notice_cannot_update'            => _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.', 'pitch' ),
				'install_link'                    => _n_noop( 'Begin installing plugin', 'Begin installing plugins', 'pitch' ),
				'activate_link'                   => _n_noop( 'Activate installed plugin', 'Activate installed plugins', 'pitch' ),
				'return'                          => esc_html__( 'Return to Required Plugins Installer', 'pitch' ),
				'plugin_activated'                => esc_html__( 'Plugin activated successfully.', 'pitch' ),
				'complete'                        => esc_html__( 'All plugins installed and activated successfully. %s', 'pitch' ),
				'nag_type'                        => 'updated'
			)
		);
		
		tgmpa( $plugins, $config );
	}
	
	add_action( 'tgmpa_register', 'pitch_qode_register_theme_included_plugins' );
}

/**
 * Force Visual Composer to initialize as "built into the theme". This will hide certain tabs under the Settings->Visual Composer page
 */
if ( function_exists( 'vc_set_as_theme' ) ) {
	vc_set_as_theme( true );
}

// Initialising Shortcodes
if ( class_exists( 'WPBakeryVisualComposerAbstract' ) ) {
	function pitch_qode_require_vc_Extend() {
		require_once locate_template( '/extendvc/extend-vc.php' );
	}
	
	add_action( 'after_setup_theme', 'pitch_qode_require_vc_Extend', 2 );
}
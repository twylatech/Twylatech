<?php

define( 'PITCH_QODE', true );
define( 'PITCH_ROOT', get_template_directory_uri() );
define( 'PITCH_ROOT_DIR', get_template_directory() );
define( 'PITCH_CSS_ROOT', PITCH_ROOT . '/css' );
define( 'PITCH_CSS_ROOT_DIR', PITCH_ROOT_DIR . '/css' );
define( 'PITCH_JS_ROOT', PITCH_ROOT . '/js' );
define( 'PITCH_JS_ROOT_DIR', PITCH_ROOT_DIR . '/js' );
define( 'PITCH_FRAMEWORK_ROOT', PITCH_ROOT . '/framework' );
define( 'PITCH_FRAMEWORK_ROOT_DIR', PITCH_ROOT_DIR . '/framework' );
define( 'PITCH_INCLUDES_ROOT', PITCH_ROOT . '/includes' );
define( 'PITCH_INCLUDES_ROOT_DIR', PITCH_ROOT_DIR . '/includes' );

include_once PITCH_FRAMEWORK_ROOT_DIR . '/qode-fallback-helper-functions.php';
include_once PITCH_FRAMEWORK_ROOT_DIR . '/qode-framework.php';
include_once PITCH_INCLUDES_ROOT_DIR . '/qode-plugin-helper-functions.php';
include_once PITCH_INCLUDES_ROOT_DIR . '/qode-dynamic-helper-functions.php';
include_once PITCH_INCLUDES_ROOT_DIR . '/qode-body-classes.php';

if ( file_exists( PITCH_ROOT_DIR . '/export' ) && file_exists( PITCH_ROOT_DIR . '/export/qode-export.php' ) ) {
	include_once PITCH_ROOT_DIR . '/export/qode-export.php';
}

include_once PITCH_INCLUDES_ROOT_DIR . '/qode-breadcrumbs.php';
include_once PITCH_INCLUDES_ROOT_DIR . '/nav_menu/qode-menu.php';
include_once PITCH_INCLUDES_ROOT_DIR . '/sidebar/qode-custom-sidebar.php';
include_once PITCH_INCLUDES_ROOT_DIR . '/header/qode-header-functions.php';
include_once PITCH_INCLUDES_ROOT_DIR . '/title/qode-title-functions.php';
include_once PITCH_INCLUDES_ROOT_DIR . '/qode-portfolio-functions.php';
include_once PITCH_INCLUDES_ROOT_DIR . '/qode-loading-spinners.php';
include_once PITCH_INCLUDES_ROOT_DIR . '/qode-options-helper-functions.php';
include_once PITCH_INCLUDES_ROOT_DIR . '/sidebar/sidebar.php';
require_once PITCH_ROOT_DIR . '/plugins/class-tgm-plugin-activation.php';
include_once PITCH_ROOT_DIR . '/plugins/plugins-activation.php';
include_once PITCH_INCLUDES_ROOT_DIR . '/qode-blog-functions.php';
include_once PITCH_INCLUDES_ROOT_DIR . '/widgets/qode-call-to-action-widget.php';
include_once PITCH_INCLUDES_ROOT_DIR . '/widgets/qode-sticky-sidebar.php';
include_once PITCH_INCLUDES_ROOT_DIR . '/widgets/qode-latest-posts-widget.php';
include_once PITCH_INCLUDES_ROOT_DIR . '/widgets/qode-latest-posts-menu-widget.php';
include_once PITCH_INCLUDES_ROOT_DIR . '/widgets/qode-instagram-widget.php';

//does woocommerce function exists?
if ( pitch_qode_is_woocommerce_installed() ) {
	//include woocommerce configuration
	require_once PITCH_ROOT_DIR . '/woocommerce/woocommerce_configuration.php';
	//include cart dropdown widget
	include_once PITCH_INCLUDES_ROOT_DIR . '/widgets/qode-woocommerce-dropdown-cart.php';
}
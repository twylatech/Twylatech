<?php

if ( ! function_exists( 'pitch_qode_register_sidebars' ) ) {
	/**
	 * Function that registers theme's sidebars
	 */
	function pitch_qode_register_sidebars() {
		$centered_logo = false;
		if ( pitch_qode_options()->getOptionValue( 'center_logo_image' ) == "yes" ) {
			$centered_logo = true;
		}
		
		if ( pitch_qode_options()->getOptionValue( 'header_bottom_appearance' ) == "fixed_hiding" ) {
			$centered_logo = true;
		}
		
		register_sidebar( array(
			'name'          => esc_html__( 'Sidebar', 'pitch' ),
			'id'            => 'sidebar',
			'description'   => esc_html__( 'Default Sidebar area. In order to display this area you need to enable sidebar layout through global theme options or on page meta box options.', 'pitch' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s posts_holder">',
			'after_widget'  => '</div>',
			'before_title' => '<h4>',
			'after_title' => '</h4>'
		) );
		
		register_sidebar( array(
			'name'          => esc_html__( 'Sidebar Page', 'pitch' ),
			'id'            => 'sidebar_page',
			'description'   => esc_html__( 'Default Sidebar area for Pages. In order to display this area you need to enable sidebar layout through global theme options or on page meta box options.', 'pitch' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s posts_holder">',
			'after_widget'  => '</div>',
			'before_title' => '<h4>',
			'after_title' => '</h4>'
		) );
		
		register_sidebar( array(
			'name'          => esc_html__( 'Header Top Left', 'pitch' ),
			'id'            => 'header_left',
			'description'   => esc_html__( 'Widgets added here will appear on the left side in top header area', 'pitch' ),
			'before_widget' => '<div class="header-widget %2$s header-left-widget">',
			'after_widget'  => '</div>',
			'before_title'  => '',
			'after_title'   => ''
		) );
		
		register_sidebar( array(
			'name'          => esc_html__( 'Header Top Right', 'pitch' ),
			'id'            => 'header_right',
			'description'   => esc_html__( 'Widgets added here will appear on the right side in top header area', 'pitch' ),
			'before_widget' => '<div class="header-widget %2$s header-right-widget">',
			'after_widget'  => '</div>',
			'before_title'  => '',
			'after_title'   => ''
		) );
		
		if ( $centered_logo ) {
			register_sidebar( array(
				'name'          => esc_html__( 'Header Left From Logo', 'pitch' ),
				'id'            => 'header_left_from_logo',
				'description'   => esc_html__( 'Widgets added here will appear on the left side of logo area', 'pitch' ),
				'before_widget' => '<div class="header-widget %2$s header-left-from-logo-widget"><div class="header-left-from-logo-widget-inner"><div class="header-left-from-logo-widget-inner2">',
				'after_widget'  => '</div></div></div>',
				'before_title'  => '',
				'after_title'   => ''
			) );
			
			register_sidebar( array(
				'name'          => esc_html__( 'Header Right From Logo', 'pitch' ),
				'id'            => 'header_right_from_logo',
				'description'   => esc_html__( 'Widgets added here will appear on the right side of logo area', 'pitch' ),
				'before_widget' => '<div class="header-widget %2$s header-right-from-logo-widget"><div class="header-right-from-logo-widget-inner"><div class="header-right-from-logo-widget-inner2">',
				'after_widget'  => '</div></div></div>',
				'before_title'  => '',
				'after_title'   => ''
			) );
		}
		
		if ( pitch_qode_options()->getOptionValue( 'header_bottom_appearance' ) == "stick_with_left_right_menu" ||  $centered_logo == true ) {
			register_sidebar( array(
				'name'          => esc_html__( 'Header Bottom Left', 'pitch' ),
				'id'            => 'header_bottom_left',
				'description'   => esc_html__( 'Widgets added here will appear on the left side in menu header area', 'pitch' ),
				'before_widget' => '<div class="header_bottom_widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '',
				'after_title'   => ''
			) );
		}
		
		register_sidebar( array(
			'name'          => esc_html__( 'Header Bottom Right', 'pitch' ),
			'id'            => 'header_bottom_right',
			'description'   => esc_html__( 'Widgets added here will appear on the right side in menu header area', 'pitch' ),
			'before_widget' => '<div class="header_bottom_widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '',
			'after_title'   => ''
		) );
		
		register_sidebar( array(
			'name'          => esc_html__( 'Header Bottom Center', 'pitch' ),
			'id'            => 'header_bottom_center',
			'description'   => esc_html__( 'This widget area is used only for content of Header Bottom when header type is set to Fixed Header Top', 'pitch' ),
			'before_widget' => '<div class="header_bottom_center_widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '',
			'after_title'   => ''
		) );
		
		register_sidebar( array(
			'name'          => esc_html__( 'Fullscreen Menu Bottom', 'pitch' ),
			'id'            => 'fullscreen_menu',
			'description'   => esc_html__( 'This widget area is rendered below fullscreen menu', 'pitch' ),
			'before_widget' => '<div class="header-widget %2$s fullscreen-menu-widget">',
			'after_widget'  => '</div>',
			'before_title'  => '',
			'after_title'   => ''
		) );
		
		register_sidebar( array(
			'name'          => esc_html__( 'Fullscreen Menu Top', 'pitch' ),
			'id'            => 'fullscreen_above_menu',
			'description'   => esc_html__( 'This widget area is rendered above fullscreen menu', 'pitch' ),
			'before_widget' => '<div class="header-above-menu-widget %2$s fullscreen-above-menu-widget">',
			'after_widget'  => '</div>',
			'before_title'  => '',
			'after_title'   => ''
		) );
		
		register_sidebar( array(
			'name'          => esc_html__( 'Left Menu Area', 'pitch' ),
			'id'            => 'vertical_menu_area',
			'description'   => esc_html__( 'Widgets added here will appear inside Left Menu Area', 'pitch' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4>',
			'after_title'   => '</h4>'
		) );
		
		register_sidebar( array(
			'name'          => esc_html__( 'Side Area', 'pitch' ),
			'id'            => 'sidearea',
			'description'   => esc_html__( 'Widgets added here will appear inside Side Area', 'pitch' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s posts_holder">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4>',
			'after_title'   => '</h4>'
		) );
		
		register_sidebar( array(
			'name'          => esc_html__( 'Footer Column 1', 'pitch' ),
			'id'            => 'footer_column_1',
			'description'   => esc_html__( 'Widgets added here will appear in the first column of top footer area', 'pitch' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4>',
			'after_title'   => '</h4>'
		) );
		
		register_sidebar( array(
			'name'          => esc_html__( 'Footer Column 2', 'pitch' ),
			'id'            => 'footer_column_2',
			'description'   => esc_html__( 'Widgets added here will appear in the second column of top footer area', 'pitch' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4>',
			'after_title'   => '</h4>'
		) );
		
		register_sidebar( array(
			'name'          => esc_html__( 'Footer Column 3', 'pitch' ),
			'id'            => 'footer_column_3',
			'description'   => esc_html__( 'Widgets added here will appear in the third column of top footer area', 'pitch' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4>',
			'after_title'   => '</h4>'
		) );
		
		register_sidebar( array(
			'name'          => esc_html__( 'Footer Column 4', 'pitch' ),
			'id'            => 'footer_column_4',
			'description'   => esc_html__( 'Widgets added here will appear in the fourth column of top footer area', 'pitch' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4>',
			'after_title'   => '</h4>'
		) );
		
		register_sidebar( array(
			'name'          => esc_html__( 'Footer Text', 'pitch' ),
			'id'            => 'footer_text',
			'description'   => esc_html__( 'Widgets added here will appear in the footer bottom text area', 'pitch' ),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '',
			'after_title'   => ''
		) );
		
		register_sidebar( array(
			'name'          => esc_html__( 'Footer Bottom Left', 'pitch' ),
			'id'            => 'footer_bottom_left',
			'description'   => esc_html__( 'Widgets added here will appear in the left side of footer bottom area', 'pitch' ),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '',
			'after_title'   => ''
		) );
		
		register_sidebar( array(
			'name'          => esc_html__( 'Footer Bottom Right', 'pitch' ),
			'id'            => 'footer_bottom_right',
			'description'   => esc_html__( 'Widgets added here will appear in the right side of footer bottom area', 'pitch' ),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '',
			'after_title'   => ''
		) );
	}
	
	add_action( 'widgets_init', 'pitch_qode_register_sidebars' );
}

if ( ! function_exists( 'pitch_qode_add_support_custom_sidebar' ) ) {
	/**
	 * Function that adds theme support for custom sidebars. It also creates qode_sidebar object
	 */
	function pitch_qode_add_support_custom_sidebar() {
		add_theme_support( 'PitchQodeSidebar' );
		
		if ( get_theme_support( 'PitchQodeSidebar' ) ) {
			new PitchQodeSidebar();
		}
	}
	
	add_action( 'after_setup_theme', 'pitch_qode_add_support_custom_sidebar' );
}
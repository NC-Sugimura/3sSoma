<?php
/**
* Theme Emanon Pro customizer header panel
* @package WordPress
* @subpackage Emanon_Pro
* @since Emanon Pro 1.0
*/

	/*------------------------------------------------------------------------------------
	/* Header Settings
	/*----------------------------------------------------------------------------------*/
	$wp_customize->add_panel( 'emanon_header_settings', array(
	'priority' => 35,
	'capability' => 'edit_theme_options',
	'title' => __( 'Header settings', 'emanon' ),
	) );

		/*------------------------------------------------------------------------------------
		/* Layout Design Options
		/*----------------------------------------------------------------------------------*/
		$wp_customize->add_section( 'emanon_header_design_options', array (
			'title' => __( 'Layout design', 'emanon' ),
			'priority' => 1,
			'panel' => 'emanon_header_settings',
		) );

			// Header type
			$wp_customize->add_setting( 'header_layout_type', array(
				'default' => 'header-default',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_header_layout_type',
			) );
			$wp_customize->add_control( 'header_layout_type', array(
				'label' => __( 'Header layout type', 'emanon' ),
				'section' => 'emanon_header_design_options',
				'settings' => 'header_layout_type',
				'type' => 'radio',
				'choices' => array(
					'header-default' => __( 'Header default layout', 'emanon' ),
					'header-center' => __( 'Header center layout', 'emanon' ),
					'header-line' => __( 'Header line layout', 'emanon' ),
					),
				'priority' => 1,
			) );

			// Description position type
			$wp_customize->add_setting( 'header_tagline_position_type', array(
				'default' => 'upper-left',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_header_tagline_position_type',
			) );
			$wp_customize->add_control( 'header_tagline_position_type', array(
				'label' => __( 'Description position type', 'emanon' ),
				'section' => 'emanon_header_design_options',
				'settings' => 'header_tagline_position_type',
				'type' => 'radio',
				'choices' => array(
					'upper-left' => __( 'Upper left', 'emanon' ),
					'logo-under' => __( 'Logo under', 'emanon' ),
					'no-display' => __( 'No display description', 'emanon' ),
					),
				'priority' => 2,
			) );

			// Description font size
			$wp_customize->add_setting( 'header_tagline_font_size', array(
				'default' => 12,
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_number',
			) );
			$wp_customize->add_control( 'header_tagline_font_size', array(
				'label' => __( 'Description font size under logo', 'emanon' ),
				'description' => __( 'default 12 : This setting is applied when the description position is below the logo.', 'emanon' ),
				'section' => 'emanon_header_design_options',
				'settings' => 'header_tagline_font_size',
				'type' => 'number',
				'input_attrs' => array(
					'min' => 0,
					'step' => 1,
				),
				'priority' => 3,
			) );

			// Header sitename font size pc
			$wp_customize->add_setting( 'header_sitename_font_size_pc', array(
				'default' => 24,
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_number',
			) );
			$wp_customize->add_control( 'header_sitename_font_size_pc', array(
				'label' => __( 'Site namen font size : PC', 'emanon' ),
				'description' => __( 'Default 24 : This setting is applied when no logo img.', 'emanon' ),
				'section' => 'emanon_header_design_options',
				'settings' => 'header_sitename_font_size_pc',
				'type' => 'number',
				'input_attrs' => array(
					'min' => 0,
					'step' => 1,
				),
				'priority' => 4,
			) );

			// Header sitename font size sp
			$wp_customize->add_setting( 'header_sitename_font_size_mobile', array(
				'default' => 16,
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_number',
			) );
			$wp_customize->add_control( 'header_sitename_font_size_mobile', array(
				'label' => __( 'Site namen font size : SP', 'emanon' ),
				'description' => __( 'Default 16 :This setting is applied when no logo img.Check the size with a smartphone.', 'emanon' ),
				'section' => 'emanon_header_design_options',
				'settings' => 'header_sitename_font_size_mobile',
				'type' => 'number',
				'input_attrs' => array(
					'min' => 0,
					'step' => 1,
				),
				'priority' => 5,
			) );
	
			// Header logo
			$wp_customize->add_setting( 'display_header_logo', array (
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'display_header_logo', array (
				'label' => __( 'Display header logo', 'emanon' ),
				'section' => 'emanon_header_design_options',
				'settings' => 'display_header_logo',
				'priority' => 6,
			) ) );

			// Header logo height
			$wp_customize->add_setting( 'header_logo_height', array(
				'default' => 50,
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_number',
			) );
			$wp_customize->add_control( 'header_logo_height', array(
				'label' => __( 'Header logo height (max 96px)', 'emanon' ),
				'section' => 'emanon_header_design_options',
				'settings' => 'header_logo_height',
				'type' => 'number',
				'input_attrs' => array(
					'min' => 0,
					'max' => 96,
					'step' => 1,
				),
				'priority' => 7,
			) );

			// Header logo height for mobile
			$wp_customize->add_setting( 'header_logo_height_mobile', array(
				'default' => 50,
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_number',
			) );
			$wp_customize->add_control( 'header_logo_height_mobile', array(
				'label' => __( 'Header logo height for mobile (max 60px)', 'emanon' ),
				'section' => 'emanon_header_design_options',
				'settings' => 'header_logo_height_mobile',
				'type' => 'number',
				'input_attrs' => array(
					'min' => 0,
					'max' => 60,
					'step' => 1,
				),
				'priority' => 8,
			) );

			// PC background image
			$wp_customize->add_setting( 'header_background_image', array (
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'header_background_image', array (
				'label' => __( 'Header background image', 'emanon' ),
				'section' => 'emanon_header_design_options',
				'settings' => 'header_background_image',
				'priority' => 9,
			) ) );

			// Mobile background image
			$wp_customize->add_setting( 'mobile_header_background_image', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'mobile_header_background_image', array (
				'label' => __( 'Mobile background image', 'emanon' ),
				'description' => __( 'It is used when you want to change the image as seen from a smartphone or tablet.', 'emanon' ),
				'section' => 'emanon_header_design_options',
				'settings' => 'mobile_header_background_image',
				'priority' => 10,
			) ) );

			// Header area height
			$wp_customize->add_setting( 'header_area_height', array(
				'default' => 96,
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_number',
			) );
			$wp_customize->add_control( 'header_area_height', array(
				'label' => __( 'Header area height:PC', 'emanon' ),
				'description' => __( 'Default 96 : Only header default layout and header center layout.', 'emanon' ),
				'section' => 'emanon_header_design_options',
				'settings' => 'header_area_height',
				'type' => 'number',
				'input_attrs' => array(
					'min' => 0,
					'step' => 1,
				),
				'priority' => 11,
			) );

			// Mobile header area height
			$wp_customize->add_setting( 'mobile_header_area_height', array(
				'default' => 96,
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_number',
			) );
			$wp_customize->add_control( 'mobile_header_area_height', array(
				'label' => __( 'Header area height:Mobile', 'emanon' ),
				'description' => __( 'Default 96 : Only header default layout and header center layout.', 'emanon' ),
				'section' => 'emanon_header_design_options',
				'settings' => 'mobile_header_area_height',
				'type' => 'number',
				'input_attrs' => array(
					'min' => 0,
					'step' => 1,
				),
				'priority' => 12,
			) );

			// Header tagline background color
			$wp_customize->add_setting( 'header_tagline_background_color', array(
				'default' => '#f8f8f8',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_tagline_background_color', array(
				'label' => __( 'Header tagline background color', 'emanon' ),
				'section' => 'emanon_header_design_options',
				'settings' => 'header_tagline_background_color',
				'priority' => 13,
			) ) );

			// header tagline text color
			$wp_customize->add_setting( 'header_tagline_text_color', array(
				'default' => '#000c15',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_tagline_text_color', array(
				'label' => __( 'Header tagline text color', 'emanon' ),
				'section' => 'emanon_header_design_options',
				'settings' => 'header_tagline_text_color',
				'priority' => 14,
			) ) );

			// Header title color
			$wp_customize->add_setting( 'header_site_title_color', array(
				'default' => '#000c15',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_site_title_color', array(
				'label' => __( 'Header site title color', 'emanon' ),
				'section' => 'emanon_header_design_options',
				'settings' => 'header_site_title_color',
				'priority' => 15,
			) ) );

			// Header background color
			$wp_customize->add_setting( 'header_background_color', array(
				'default' => '#fff',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_background_color', array(
				'label' => __( 'Header background color', 'emanon' ),
				'section' => 'emanon_header_design_options',
				'settings' => 'header_background_color',
				'priority' => 16,
			) ) );

			// Global nav color
			$wp_customize->add_setting( 'global_nav_color', array(
				'default' => '#000c15',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'global_nav_color', array(
				'label' => __( 'Nav color (Only line layout)', 'emanon' ),
				'section' => 'emanon_header_design_options',
				'settings' => 'global_nav_color',
				'priority' => 17,
			) ) );

		/*------------------------------------------------------------------------------------
		/* Header CTA
		/*----------------------------------------------------------------------------------*/
		$wp_customize->add_section( 'emanon_header_cta', array (
			'title' => __( 'Header cta settings', 'emanon' ),
			'priority' => 2,
			'panel' => 'emanon_header_settings',
		));

			// Display header cta
			$wp_customize->add_setting( 'display_header_cta', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_header_cta', array(
				'label' =>__( 'Display header cta', 'emanon' ),
				'description' => __( 'In case of header default layout, header cta is displayed.', 'emanon' ),
				'section' => 'emanon_header_cta',
				'settings' => 'display_header_cta',
				'type' => 'checkbox',
				'priority' => 1,
			) );

			// Fontawesome Icon [Tel PC]
			$wp_customize->add_setting( 'header_tel_icon_pc', array(
				'default' => 'fa fa-phone',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'header_tel_icon_pc', array (
				'label' => __( 'Tel icon［PC］', 'emanon' ),
				'description' => sprintf('%1$s <a href="https://fontawesome.com/v4.7.0/icons/" target="_blank">%2$s</a>',
						__( "Font Awesome Icon Click" , 'emanon' ),
						__( "here" , 'emanon') ),
				'section' => 'emanon_header_cta',
				'settings' => 'header_tel_icon_pc',
				'type' => 'text',
				'priority' => 2,
			) );

			// Header tel
			$wp_customize->add_setting( 'header_tel', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'header_tel', array(
				'label' => __( 'CTA tell', 'emanon' ),
				'section' => 'emanon_header_cta',
				'settings' => 'header_tel',
				'type' => 'text',
				'priority' => 3,
			) );

			// Header tel font size
			$wp_customize->add_setting( 'header_tel_font_size', array(
				'default' => 24,
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_number',
			) );
			$wp_customize->add_control( 'header_tel_font_size', array(
				'label' => __( 'Tell font size (default 24)', 'emanon' ),
				'section' => 'emanon_header_cta',
				'settings' => 'header_tel_font_size',
				'type' => 'number',
				'input_attrs' => array(
					'min' => 0,
					'step' => 1,
				),
				'priority' => 4,
			) );

			// Header tel icon height
			$wp_customize->add_setting( 'header_tel_icon_height', array(
				'default' => 18,
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_number',
			) );
			$wp_customize->add_control( 'header_tel_icon_height', array(
				'label' => __( 'Tell icon height (default 18)', 'emanon' ),
				'section' => 'emanon_header_cta',
				'settings' => 'header_tel_icon_height',
				'type' => 'number',
				'input_attrs' => array(
					'min' => 0,
					'step' => 1,
				),
				'priority' => 5,
			) );

			// Header tel text
			$wp_customize->add_setting( 'header_tel_text', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'header_tel_text', array(
				'label' => __( 'CTA text', 'emanon' ),
				'section' => 'emanon_header_cta',
				'settings' => 'header_tel_text',
				'type' => 'text',
				'priority' => 6,
			) );

			// Header cta btn text
			$wp_customize->add_setting( 'header_cta_btn_text', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'header_cta_btn_text', array(
				'label' => __( 'Button text', 'emanon' ),
				'section' => 'emanon_header_cta',
				'settings' => 'header_cta_btn_text',
				'type' => 'text',
				'priority' => 7,
			) );

			// Header cta btn url
			$wp_customize->add_setting( 'header_cta_btn_url', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control( 'header_cta_btn_url', array(
				'label' => __( 'CTA button url', 'emanon' ),
				'section' => 'emanon_header_cta',
				'settings' => 'header_cta_btn_url',
				'type' => 'url',
				'priority' => 8,
			) );

			// Display cta section
			$wp_customize->add_setting( 'display_header_cta_type', array(
				'default' => 'tel',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_header_cta_btn_type',
			) );
			$wp_customize->add_control( 'display_header_cta_type', array(
				'label' => __( 'Display cta type［SP］', 'emanon' ),
				'section' => 'emanon_header_cta',
				'settings' => 'display_header_cta_type',
				'type' => 'radio',
				'choices' => array(
					'tel' => __( 'Tel only', 'emanon' ),
					'mail' => __( 'BTN only', 'emanon' ),
					'tel_mail' => __( 'Tel ＆ BTN', 'emanon' ),
					'no_display' => __( 'No display', 'emanon' ),
					),
				'priority' => 9,
			) );

			// Fontawesome Icon [Tel SP]
			$wp_customize->add_setting( 'header_tel_icon_sp', array(
				'default' => 'fa fa-phone-square',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'header_tel_icon_sp', array (
				'label' => __( 'Tel icon［SP］', 'emanon' ),
				'description' => sprintf('%1$s <a href="https://fontawesome.com/v4.7.0/icons/" target="_blank">%2$s</a>',
						__( "Font Awesome Icon Click" , 'emanon' ),
						__( "here" , 'emanon') ),
				'section' => 'emanon_header_cta',
				'settings' => 'header_tel_icon_sp',
				'type' => 'text',
				'priority' => 10,
			) );

			// Fontawesome Icon [BTN SP]
			$wp_customize->add_setting( 'header_mail_icon_sp', array(
				'default' => 'fa fa-envelope-o',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'header_mail_icon_sp', array (
				'label' => __( 'BTN icon［SP］', 'emanon' ),
				'description' => sprintf('%1$s <a href="https://fontawesome.com/v4.7.0/icons/" target="_blank">%2$s</a>',
						__( "Font Awesome Icon Click" , 'emanon' ),
						__( "here" , 'emanon') ),
				'section' => 'emanon_header_cta',
				'settings' => 'header_mail_icon_sp',
				'type' => 'text',
				'priority' => 11,
			) );

			// Icon color
			$wp_customize->add_setting( 'header_cta_icon_color', array(
				'default' => '#b5b5b5',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_cta_icon_color', array(
				'label' => __( 'Icon color', 'emanon' ),
				'section' => 'emanon_header_cta',
				'settings' => 'header_cta_icon_color',
				'priority' => 12,
			) ) );

			// CTA tell color
			$wp_customize->add_setting( 'header_cta_tell_color', array(
				'default' => '#000c15',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_cta_tell_color', array(
				'label' => __( 'Tell color', 'emanon' ),
				'section' => 'emanon_header_cta',
				'settings' => 'header_cta_tell_color',
				'priority' => 13,
			) ) );

			// CTA text color
			$wp_customize->add_setting( 'header_cta_text_color', array(
				'default' => '#000c15',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_cta_text_color', array(
				'label' => __( 'Text color', 'emanon' ),
				'section' => 'emanon_header_cta',
				'settings' => 'header_cta_text_color',
				'priority' => 14,
			) ) );

			// Button background color
			$wp_customize->add_setting( 'header_cta_btn_background_color', array(
				'default' => '#37db9b',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_cta_btn_background_color', array(
				'label' => __( 'Button background color', 'emanon' ),
				'section' => 'emanon_header_cta',
				'settings' => 'header_cta_btn_background_color',
				'priority' => 15,
			) ) );

			// Button text color
			$wp_customize->add_setting( 'header_cta_btn_text_color', array(
				'default' => '#fff',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_cta_btn_text_color', array(
				'label' => __( 'Button text color', 'emanon' ),
				'section' => 'emanon_header_cta',
				'settings' => 'header_cta_btn_text_color',
				'priority' => 16,
			) ) );

		/*------------------------------------------------------------------------------------
		/* Global Nav Options
		/*----------------------------------------------------------------------------------*/
		$wp_customize->add_section( 'emanon_global_nav_options', array (
			'title' => __( 'Global nav', 'emanon' ),
			'priority' => 3,
			'panel' => 'emanon_header_settings',
		) );

			// Global nav design type
			$wp_customize->add_setting( 'global_nav_design_type', array(
				'default' => 'default',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_global_nav_design_type',
			) );
			$wp_customize->add_control( 'global_nav_design_type', array(
				'label' => __( 'Global nav design type', 'emanon' ),
				'section' => 'emanon_global_nav_options',
				'settings' => 'global_nav_design_type',
				'type' => 'radio',
				'choices' => array(
					'default' => __( 'Default type', 'emanon' ),
					'tracking' => __( 'Scroll tracking type', 'emanon' ),
					),
				'priority' => 1,
			) );

			// Tracking header sitename font size
			$wp_customize->add_setting( 'tracking_header_sitename_font_size', array(
				'default' => 16,
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_number',
			) );
			$wp_customize->add_control( 'tracking_header_sitename_font_size', array(
				'label' => __( 'Site name: Position Fixed', 'emanon' ),
				'description' => __( 'Default 16:This setting is applied when no logo img.', 'emanon' ),
				'section' => 'emanon_global_nav_options',
				'settings' => 'tracking_header_sitename_font_size',
				'type' => 'number',
				'input_attrs' => array(
					'min' => 0,
					'step' => 1,
				),
				'priority' => 2,
			) );

			// Tracking header logo height
			$wp_customize->add_setting( 'tracking_header_logo_height', array(
				'default' => 40,
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_number',
			) );
			$wp_customize->add_control( 'tracking_header_logo_height', array(
				'label' => __( 'Logo Height: Position Fixed (Max : 40)', 'emanon' ),
				'section' => 'emanon_global_nav_options',
				'settings' => 'tracking_header_logo_height',
				'type' => 'number',
				'input_attrs' => array(
					'min' => 0,
					'max' => 40,
					'step' => 1,
				),
				'priority' => 3,
			) );

			// Tracking header background color
			$wp_customize->add_setting( 'tracking_header_background_color', array(
				'default' => '#fff',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tracking_header_background_color', array(
				'label' => __( 'Tracking header background color', 'emanon' ),
				'section' => 'emanon_global_nav_options',
				'settings' => 'tracking_header_background_color',
				'priority' => 4,
			) ) );

			// Tracking header font color
			$wp_customize->add_setting( 'tracking_header_font_color', array(
				'default' => '#000c15',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tracking_header_font_color', array(
				'label' => __( 'Tracking header font color', 'emanon' ),
				'section' => 'emanon_global_nav_options',
				'settings' => 'tracking_header_font_color',
				'priority' => 5,
			) ) );

			// Display mobile nav
			$wp_customize->add_setting( 'display_mobile_nav', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_mobile_nav', array(
				'label'	 => __( 'Display mobile nav', 'emanon' ),
				'section' => 'emanon_global_nav_options',
				'settings' => 'display_mobile_nav',
				'type' => 'checkbox',
				'priority' => 6,
			) );

			// Display mobile nav scroll arrow
			$wp_customize->add_setting( 'display_mb_scroll_arrow', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_mb_scroll_arrow', array(
				'label'	 => __( 'Display mobile nav scroll arrow', 'emanon' ),
				'section' => 'emanon_global_nav_options',
				'settings' => 'display_mb_scroll_arrow',
				'type' => 'checkbox',
				'priority' => 7,
			) );

			// Hamburger menu text
			$wp_customize->add_setting( 'hamburger_menu_text', array(
				'default' => 'Menu',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'hamburger_menu_text', array(
				'label' => __( 'Hamburger menu text (default : Menu)', 'emanon' ),
				'section' => 'emanon_global_nav_options',
				'settings' => 'hamburger_menu_text',
				'type' => 'text',
				'priority' => 8,
			) );

			// Hamburger menu text color
			$wp_customize->add_setting( 'hamburger_menu_text_color', array(
				'default' => '#000c15',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hamburger_menu_text_color', array(
				'label' => __( 'Hamburger menu text color', 'emanon' ),
				'section' => 'emanon_global_nav_options',
				'settings' => 'hamburger_menu_text_color',
				'priority' => 9,
			) ) );

			// Hamburger menu color
			$wp_customize->add_setting( 'hamburger_menu_color', array(
				'default' => '#9b8d77',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hamburger_menu_color', array(
				'label' => __( 'Hamburger menu color', 'emanon' ),
				'section' => 'emanon_global_nav_options',
				'settings' => 'hamburger_menu_color',
				'priority' => 10,
			) ) );

			// Modal global nav background color
			$wp_customize->add_setting( 'modal_global_nav_background_color', array(
				'default' => '#fff',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'modal_global_nav_background_color', array(
				'label' => __( 'Modal global nav background color', 'emanon' ),
				'section' => 'emanon_global_nav_options',
				'settings' => 'modal_global_nav_background_color',
				'priority' => 11,
			) ) );

			// Modal global nav title color
			$wp_customize->add_setting( 'modal_global_nav_title_color', array(
				'default' => '#000c15',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'modal_global_nav_title_color', array(
				'label' => __( 'Modal global nav title color', 'emanon' ),
				'section' => 'emanon_global_nav_options',
				'settings' => 'modal_global_nav_title_color',
				'priority' => 12,
			) ) );

			// Modal global nav font color
			$wp_customize->add_setting( 'modal_global_nav_font_color', array(
				'default' => '#000c15',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'modal_global_nav_font_color', array(
				'label' => __( 'Modal global nav font color', 'emanon' ),
				'section' => 'emanon_global_nav_options',
				'settings' => 'modal_global_nav_font_color',
				'priority' => 13,
			) ) );

		/*------------------------------------------------------------------------------------
		/* Header info
		/*----------------------------------------------------------------------------------*/
		$wp_customize->add_section( 'emanon_header_info_options', array (
			'title' => __( 'Header info', 'emanon' ),
			'priority' => 4,
			'panel' => 'emanon_header_settings',
		) );

			// Front page
			$wp_customize->add_setting( 'display_header_info_front_page', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_header_info_front_page', array(
				'label' => __( 'Display on front page', 'emanon' ),
				'section' => 'emanon_header_info_options',
				'settings' => 'display_header_info_front_page',
				'type' => 'checkbox',
				'priority' => 1,
			) );

			// Post
			$wp_customize->add_setting( 'display_header_info_post', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_header_info_post', array(
				'label' => __( 'Display on post', 'emanon' ),
				'section' => 'emanon_header_info_options',
				'settings' => 'display_header_info_post',
				'type' => 'checkbox',
				'priority' => 2,
			) );

			// Page
			$wp_customize->add_setting( 'display_header_info_page', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_header_info_page', array(
				'label' => __( 'Display on page', 'emanon' ),
				'section' => 'emanon_header_info_options',
				'settings' => 'display_header_info_page',
				'type' => 'checkbox',
				'priority' => 3,
			) );

			// Archive page
			$wp_customize->add_setting( 'display_header_info_archive', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_header_info_archive', array(
				'label' => __( 'Display on archive page', 'emanon' ),
				'section' => 'emanon_header_info_options',
				'settings' => 'display_header_info_archive',
				'type' => 'checkbox',
				'priority' => 4,
			) );

			// Header info Title
			$wp_customize->add_setting( 'header_info_title', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'header_tel_icon_pc', array (
				'label' => __( 'Title', 'emanon' ),
				'section' => 'emanon_header_info_options',
				'settings' => 'header_info_title',
				'type' => 'text',
				'priority' => 5,
			) );

			// Header info url
			$wp_customize->add_setting( 'header_info_url', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control( 'header_info_url', array(
				'label' => __( 'URL', 'emanon' ),
				'section' => 'emanon_header_info_options',
				'settings' => 'header_info_url',
				'type' => 'url',
				'priority' => 6,
			) );

			// header info text color
			$wp_customize->add_setting( 'header_info_text_color', array(
				'default' => '#000c15',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_info_text_color', array(
				'label' => __( 'Text color', 'emanon' ),
				'section' => 'emanon_header_info_options',
				'settings' => 'header_info_text_color',
				'priority' => 7,
			) ) );

			// header info background color
			$wp_customize->add_setting( 'header_info_background_color', array(
				'default' => '#e2e5e8',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_info_background_color', array(
				'label' => __( 'Background color', 'emanon' ),
				'section' => 'emanon_header_info_options',
				'settings' => 'header_info_background_color',
				'priority' => 8,
			) ) );

			// header info text hover color
			$wp_customize->add_setting( 'header_info_text_hover_color', array(
				'default' => '#fff',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_info_text_hover_color', array(
				'label' => __( 'Text hover color', 'emanon' ),
				'section' => 'emanon_header_info_options',
				'settings' => 'header_info_text_hover_color',
				'priority' => 9,
			) ) );

			// header info background hover color
			$wp_customize->add_setting( 'header_info_background_hover_color', array(
				'default' => '#bcc3ca',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_info_background_hover_color', array(
				'label' => __( 'Background hover color', 'emanon' ),
				'section' => 'emanon_header_info_options',
				'settings' => 'header_info_background_hover_color',
				'priority' => 10,
			) ) );

		/*------------------------------------------------------------------------------------
		/* Keywords lists Settings
		/*----------------------------------------------------------------------------------*/
		$wp_customize->add_section( 'emanon_keywords_lists_settings', array (
			'title' => __( 'Keywords lists settings', 'emanon' ),
			'priority' => 5,
			'panel' => 'emanon_header_settings',
		) );

			// Search keywords lists PC
			$wp_customize->add_setting( 'display_search_keywords_lists_pc', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_search_keywords_lists_pc', array(
				'label' =>__( 'Search keywords lists［PC］', 'emanon' ),
				'section' => 'emanon_keywords_lists_settings',
				'settings' => 'display_search_keywords_lists_pc',
				'type' => 'checkbox',
				'priority' => 1,
			) );

			// Search keywords lists MB
			$wp_customize->add_setting( 'display_search_keywords_lists_mb', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_search_keywords_lists_mb', array(
				'label' =>__( 'Search keywords lists［MB］', 'emanon' ),
				'section' => 'emanon_keywords_lists_settings',
				'settings' => 'display_search_keywords_lists_mb',
				'type' => 'checkbox',
				'priority' => 2,
			) );

			// Display mobile nav scroll arrow
			$wp_customize->add_setting( 'display_mb_scroll_arrow_sk', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_mb_scroll_arrow_sk', array(
				'label'	 => __( 'Display scroll arrow［MB］', 'emanon' ),
				'section' => 'emanon_keywords_lists_settings',
				'settings' => 'display_mb_scroll_arrow_sk',
				'type' => 'checkbox',
				'priority' => 3,
			) );

			// Search keywords label
			$wp_customize->add_setting( 'search_keywords_label', array(
				'default' => __( 'Remarks', 'emanon' ),
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'search_keywords_label', array (
				'label' => __( 'Search keywords label', 'emanon' ),
				'section' => 'emanon_keywords_lists_settings',
				'settings' => 'search_keywords_label',
				'type' => 'text',
				'priority' => 4,
			) );

			// Search keywords［1］
			$wp_customize->add_setting( 'search_keywords_1', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'search_keywords_1', array (
				'label' => __( 'Search keywords［1］', 'emanon' ),
				'section' => 'emanon_keywords_lists_settings',
				'settings' => 'search_keywords_1',
				'type' => 'text',
				'priority' => 5,
			) );

			// Search keywords［2］
			$wp_customize->add_setting( 'search_keywords_2', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'search_keywords_2', array (
				'label' => __( 'Search keywords［2］', 'emanon' ),
				'section' => 'emanon_keywords_lists_settings',
				'settings' => 'search_keywords_2',
				'type' => 'text',
				'priority' => 6,
			) );

			// Search keywords［3］
			$wp_customize->add_setting( 'search_keywords_3', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'search_keywords_3', array (
				'label' => __( 'Search keywords［3］', 'emanon' ),
				'section' => 'emanon_keywords_lists_settings',
				'settings' => 'search_keywords_3',
				'type' => 'text',
				'priority' => 7,
			) );

			// Search keywords［4］
			$wp_customize->add_setting( 'search_keywords_4', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'search_keywords_4', array (
				'label' => __( 'Search keywords［4］', 'emanon' ),
				'section' => 'emanon_keywords_lists_settings',
				'settings' => 'search_keywords_4',
				'type' => 'text',
				'priority' => 8,
			) );

			// Search keywords［5］
			$wp_customize->add_setting( 'search_keywords_5', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'search_keywords_5', array (
				'label' => __( 'Search keywords［5］', 'emanon' ),
				'section' => 'emanon_keywords_lists_settings',
				'settings' => 'search_keywords_5',
				'type' => 'text',
				'priority' => 9,
			) );

			// Search keywords［6］
			$wp_customize->add_setting( 'search_keywords_6', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'search_keywords_6', array (
				'label' => __( 'Search keywords［6］', 'emanon' ),
				'section' => 'emanon_keywords_lists_settings',
				'settings' => 'search_keywords_6',
				'type' => 'text',
				'priority' => 10,
			) );

			// Search keywords［7］
			$wp_customize->add_setting( 'search_keywords_7', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'search_keywords_7', array (
				'label' => __( 'Search keywords［7］', 'emanon' ),
				'section' => 'emanon_keywords_lists_settings',
				'settings' => 'search_keywords_7',
				'type' => 'text',
				'priority' => 11,
			) );

			// Search keywords［8］
			$wp_customize->add_setting( 'search_keywords_8', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'search_keywords_8', array (
				'label' => __( 'Search keywords［8］', 'emanon' ),
				'section' => 'emanon_keywords_lists_settings',
				'settings' => 'search_keywords_8',
				'type' => 'text',
				'priority' => 12,
			) );

			// Search keywords［9］
			$wp_customize->add_setting( 'search_keywords_9', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'search_keywords_9', array (
				'label' => __( 'Search keywords［9］', 'emanon' ),
				'section' => 'emanon_keywords_lists_settings',
				'settings' => 'search_keywords_9',
				'type' => 'text',
				'priority' => 13,
			) );

			// Search keywords［10］
			$wp_customize->add_setting( 'search_keywords_10', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'search_keywords_10', array (
				'label' => __( 'Search keywords［10］', 'emanon' ),
				'section' => 'emanon_keywords_lists_settings',
				'settings' => 'search_keywords_10',
				'type' => 'text',
				'priority' => 14,
			) );

			// Search keywords label color
			$wp_customize->add_setting( 'search_keywords_label_color', array(
				'default' => '#161410',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'search_keywords_label_color', array(
				'label' => __( 'Label color', 'emanon' ),
				'section' => 'emanon_keywords_lists_settings',
				'settings' => 'search_keywords_label_color',
				'priority' => 15,
			) ) );

			// Search keywords background color
			$wp_customize->add_setting( 'search_keywords_background_color', array(
				'default' => '#f8f8f8',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'search_keywords_background_color', array(
				'label' => __( 'Background color', 'emanon' ),
				'section' => 'emanon_keywords_lists_settings',
				'settings' => 'search_keywords_background_color',
				'priority' => 16,
			) ) );

			// Search keywords text color
			$wp_customize->add_setting( 'search_keywords_text_color', array(
				'default' => '#9b8d77',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'search_keywords_text_color', array(
				'label' => __( 'Text color', 'emanon' ),
				'section' => 'emanon_keywords_lists_settings',
				'settings' => 'search_keywords_text_color',
				'priority' => 17,
			) ) );

			// Search keywords text hover color
			$wp_customize->add_setting( 'search_keywords_text_hover_color', array(
				'default' => '#b5b5b5',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'search_keywords_text_hover_color', array(
				'label' => __( 'Text hover color', 'emanon' ),
				'section' => 'emanon_keywords_lists_settings',
				'settings' => 'search_keywords_text_hover_color',
				'priority' => 18,
			) ) );
<?php
/**
* Theme Emanon Pro customizer landing page panel
* @package WordPress
* @subpackage Emanon_Pro
* @since Emanon Pro 1.0
*/

	/*------------------------------------------------------------------------------------
	/* Landing Page Settings
	/*----------------------------------------------------------------------------------*/
	$wp_customize->add_panel( 'emanon_landing_page_settings', array(
	'priority' => 65,
	'capability' => 'edit_theme_options',
	'title' => __( 'Landing page settings', 'emanon' ),
	) );

		/*------------------------------------------------------------------------------------
		/* Header Section
		/*----------------------------------------------------------------------------------*/
			// Display header section
			$wp_customize->add_setting( 'display_header_section', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_header_section', array(
				'label' =>__( 'Display header section', 'emanon' ),
				'section' => 'header_image',
				'settings' => 'display_header_section',
				'type' => 'checkbox',
				'priority' => 1,
			) );

			// Parallax header image
			$wp_customize->add_setting( 'parallax_header_image', array(
				'default' => true,
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'parallax_header_image', array(
				'label' =>__( 'Parallax header image', 'emanon' ),
				'section' => 'header_image',
				'settings' => 'parallax_header_image',
				'type' => 'checkbox',
				'priority' => 2,
			) );

			// Mobile background image
			$wp_customize->add_setting( 'mobile_header_image', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'mobile_header_image', array (
				'label' => __( 'Mobile background image', 'emanon' ),
				'description' => __( 'It is used when you want to change the image as seen from a smartphone or tablet.', 'emanon' ),
				'section' => 'header_image',
				'settings' => 'mobile_header_image',
				'priority' => 10,
			) ) );

			//Header image height
			$wp_customize->add_setting( 'header_image_height', array(
				'default' => 500,
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_number',
			) );
			$wp_customize->add_control( 'header_image_height', array(
				'label' => __( 'Header image height (default 500px)', 'emanon' ),
				'section' => 'header_image',
				'settings' => 'header_image_height',
				'type' => 'number',
				'input_attrs' => array(
					'min' => 300,
					'max' => 720,
					'step' => 1,
				),
				'priority' => 11,
			) );

			// Header message layout type
			$wp_customize->add_setting( 'header_message_layout_type', array(
				'default' => 'header_message_center',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_header_message_layout_type',
			) );
			$wp_customize->add_control( 'header_message_layout_type', array(
				'label' => __( 'Header message layout type', 'emanon' ),
				'section' => 'header_image',
				'settings' => 'header_message_layout_type',
				'type' => 'radio',
				'choices' => array(
					'header_message_left' => __( 'Message left layout', 'emanon' ),
					'header_message_center' => __( 'Message center layout', 'emanon' ),
					'header_message_right' => __( 'Message right layout', 'emanon' ),
					),
				'priority' => 12,
			) );

			// Header image target message
			$wp_customize->add_setting( 'header_image_target_message', array(
				'default' => __( 'Looking for SEO WordPress theme?', 'emanon' ),
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'header_image_target_message', array(
				'label' => __( 'Target message', 'emanon' ),
				'section' => 'header_image',
				'settings' => 'header_image_target_message',
				'type' => 'text',
				'priority' => 13,
			) );

			// Header image title
			$wp_customize->add_setting( 'header_image_title', array(
				'default' => __( 'Welcome to Emanon Pro', 'emanon' ),
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'header_image_title', array(
				'label' => __( 'Title', 'emanon' ),
				'section' => 'header_image',
				'settings' => 'header_image_title',
				'type' => 'text',
				'priority' => 14,
			) );

			// Header image sub title
			$wp_customize->add_setting( 'header_image_sub_title', array(
				'default' => __( 'Ready to Start Your Own Business?', 'emanon' ),
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( new Customize_Textarea_Control( $wp_customize, 'header_image_sub_title', array(
				'label' => __( 'Sub title', 'emanon' ),
				'section' => 'header_image',
				'settings' => 'header_image_sub_title',
				'type' => 'text',
				'priority' => 15,
			) ) );

			// Header btn text
			$wp_customize->add_setting( 'header_btn_text', array(
				'default' => 'Sign up',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'header_btn_text', array(
				'label' => __( 'Button text', 'emanon' ),
				'section' => 'header_image',
				'settings' => 'header_btn_text',
				'type' => 'text',
				'priority' => 16,
			) );

			// Text shadow
			$wp_customize->add_setting( 'header_image_text_shadow', array(
				'default' => true,
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'header_image_text_shadow', array(
				'label' => __( 'Text shadow', 'emanon' ),
				'section' => 'header_image',
				'settings' => 'header_image_text_shadow',
				'type' => 'checkbox',
				'priority' => 17,
			) );

			// Header image title color
			$wp_customize->add_setting( 'header_image_title_color', array(
				'default' => '#fff',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_image_title_color', array(
				'label' => __( 'Title color', 'emanon' ),
				'section' => 'header_image',
				'settings' => 'header_image_title_color',
				'priority' => 18,
			) ) );

			// Header image sub title color
			$wp_customize->add_setting( 'header_image_sub_title_color', array(
				'default' => '#fff',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_image_sub_title_color', array(
				'label' => __( 'Sub title color', 'emanon' ),
				'section' => 'header_image',
				'settings' => 'header_image_sub_title_color',
				'priority' => 19,
			) ) );

			// Header button background color
			$wp_customize->add_setting( 'header_btn_background_color', array(
				'default' => '#9b8d77',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_btn_background_color', array(
				'label' => __( 'Button background color', 'emanon' ),
				'section' => 'header_image',
				'settings' => 'header_btn_background_color',
				'priority' => 20,
			) ) );

			// Header button text color
			$wp_customize->add_setting( 'header_btn_text_color', array(
				'default' => '#fff',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_btn_text_color', array(
				'label' => __( 'Button text color', 'emanon' ),
				'section' => 'header_image',
				'settings' => 'header_btn_text_color',
				'priority' => 21,
			) ) );

			// Header image background color start
			$wp_customize->add_setting( 'header_image_background_color_start', array(
				'default' => '#000',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_image_background_color_start', array(
				'label' => __( 'Background color ［start］', 'emanon' ),
				'section' => 'header_image',
				'settings' => 'header_image_background_color_start',
				'priority' => 22,
			) ) );

			// Header image background color end
			$wp_customize->add_setting( 'header_image_background_color_end', array(
				'default' => '#000',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_image_background_color_end', array(
				'label' => __( 'Background color ［end］', 'emanon' ),
				'section' => 'header_image',
				'settings' => 'header_image_background_color_end',
				'priority' => 23,
			) ) );

			// Header image background color degree
			$wp_customize->add_setting( 'header_image_background_color_degree', array(
				'default' =>135,
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_number',
			) );
			$wp_customize->add_control( 'header_image_background_color_degree', array(
				'label' => __( 'Degree', 'emanon' ),
				'section' => 'header_image',
				'settings' => 'header_image_background_color_degree',
				'type' => 'number',
				'priority' => 24,
			) );

			// Dsplay overlay pattern
			$wp_customize->add_setting( 'header_display_overlay', array(
				'default' => 'pattern_none',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_overlay_pattern_type',
			) );
			$wp_customize->add_control( 'header_display_overlay', array(
				'label' =>__( 'Dsplay overlay pattern', 'emanon' ),
				'section' => 'header_image',
				'settings' => 'header_display_overlay',
				'type' => 'radio',
				'choices' => array(
					'pattern_none' => __( 'None display pattern', 'emanon' ),
					'pattern_dots' => __( 'Display display pattern dots', 'emanon' ),
					'pattern_diamond' => __( 'Display pattern diamond', 'emanon' ),
					),
				'priority' => 25,
			) );

			// Background color opacity
			$wp_customize->add_setting( 'header_image_opacity', array(
				'default' => 0.5,
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_rangeslider'
			) );
			$wp_customize->add_control( 'header_image_opacity', array(
				'label' => __( 'Background color opacity', 'emanon' ),
				'section' => 'header_image',
				'settings' => 'header_image_opacity',
				'type' => 'range',
					'input_attrs' => array(
					'min' => 0,
					'max' => 1,
					'step' => 0.05,
					),
				'priority' => 26,
			) );

		/*------------------------------------------------------------------------------------
		/* Lp Header Cta
		/*----------------------------------------------------------------------------------*/
		$wp_customize->add_section( 'emanon_lp_header_cta', array (
			'title' => __( 'Header cta settings', 'emanon' ),
			'description' => __( 'To display the section, you need to set header image.', 'emanon' ),
			'priority' => 2,
			'panel' => 'emanon_landing_page_settings',
		));

			// Display lp header cta
			$wp_customize->add_setting( 'display_lp_header_cta', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_lp_header_cta', array(
				'label' =>__( 'Display header cta', 'emanon' ),
				'description' => __( 'Please display header cta logo by header setting', 'emanon' ),
				'section' => 'emanon_lp_header_cta',
				'settings' => 'display_lp_header_cta',
				'type' => 'checkbox',
				'priority' => 1,
			) );

			// Lp header cta type
			$wp_customize->add_setting( 'lp_header_cta_type', array(
				'default' => 'default',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_lp_header_cta_type',
			) );
			$wp_customize->add_control( 'lp_header_cta_type', array(
				'label' => __( 'LP header cta type type', 'emanon' ),
				'section' => 'emanon_lp_header_cta',
				'settings' => 'lp_header_cta_type',
				'type' => 'radio',
				'choices' => array(
					'default' => __( 'Default type', 'emanon' ),
					'tracking' => __( 'Scroll tracking type', 'emanon' ),
					),
				'priority' => 2,
			) );

			// Lp header description
			$wp_customize->add_setting( 'lp_header_description', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'lp_header_description', array(
				'label' => __( 'Header description', 'emanon' ),
				'section' => 'emanon_lp_header_cta',
				'settings' => 'lp_header_description',
				'type' => 'text',
				'priority' => 3,
			) );

			// Lp header tel
			$wp_customize->add_setting( 'lp_header_tel', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'lp_header_tel', array(
				'label' => __( 'CTA tel', 'emanon' ),
				'section' => 'emanon_lp_header_cta',
				'settings' => 'lp_header_tel',
				'type' => 'text',
				'priority' => 4,
			) );

			// Header tel font size
			$wp_customize->add_setting( 'lp_header_tel_font_size', array(
				'default' => 24,
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_number',
			) );
			$wp_customize->add_control( 'lp_header_tel_font_size', array(
				'label' => __( 'Tell font size (default 24)', 'emanon' ),
				'section' => 'emanon_lp_header_cta',
				'settings' => 'lp_header_tel_font_size',
				'type' => 'number',
				'input_attrs' => array(
					'min' => 0,
					'step' => 1,
				),
				'priority' => 5,
			) );

			// Header tel icon height
			$wp_customize->add_setting( 'lp_header_tel_icon_height', array(
				'default' => 18,
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_number',
			) );
			$wp_customize->add_control( 'lp_header_tel_icon_height', array(
				'label' => __( 'Tell icon height (default 18)', 'emanon' ),
				'section' => 'emanon_lp_header_cta',
				'settings' => 'lp_header_tel_icon_height',
				'type' => 'number',
				'input_attrs' => array(
					'min' => 0,
					'step' => 1,
				),
				'priority' => 6,
			) );

			// Lp header tel text
			$wp_customize->add_setting( 'lp_header_tel_text', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'lp_header_tel_text', array(
				'label' => __( 'CTA text', 'emanon' ),
				'section' => 'emanon_lp_header_cta',
				'settings' => 'lp_header_tel_text',
				'type' => 'text',
				'priority' => 7,
			) );

			// Lp header cta btn text
			$wp_customize->add_setting( 'lp_header_cta_btn_text', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'lp_header_cta_btn_text', array(
				'label' => __( 'Button text', 'emanon' ),
				'section' => 'emanon_lp_header_cta',
				'settings' => 'lp_header_cta_btn_text',
				'type' => 'text',
				'priority' => 8,
			) );

			// Icon color
			$wp_customize->add_setting( 'lp_header_cta_icon_color', array(
				'default' => '#b5b5b5',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'lp_header_cta_icon_color', array(
				'label' => __( 'Icon color', 'emanon' ),
				'section' => 'emanon_lp_header_cta',
				'settings' => 'lp_header_cta_icon_color',
				'priority' => 9,
			) ) );

			// Button background color
			$wp_customize->add_setting( 'lp_header_cta_btn_background_color', array(
				'default' => '#37db9b',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'lp_header_cta_btn_background_color', array(
				'label' => __( 'Button background color', 'emanon' ),
				'section' => 'emanon_lp_header_cta',
				'settings' => 'lp_header_cta_btn_background_color',
				'priority' => 10,
			) ) );

			// Button text color
			$wp_customize->add_setting( 'lp_header_cta_btn_text_color', array(
				'default' => '#fff',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'lp_header_cta_btn_text_color', array(
				'label' => __( 'Button text color', 'emanon' ),
				'section' => 'emanon_lp_header_cta',
				'settings' => 'lp_header_cta_btn_text_color',
				'priority' => 11,
			) ) );

		/*------------------------------------------------------------------------------------
		/* Header Nav Section
		/*----------------------------------------------------------------------------------*/
		$wp_customize->add_section( 'emanon_header_nav', array (
			'title' => __( 'Header gloval nav section settings', 'emanon' ),
			'description' => __( 'To display the section, you need to set header image.', 'emanon' ),
			'priority' => 3,
			'panel' => 'emanon_landing_page_settings',
		));

			// Display gloval nav
			$wp_customize->add_setting( 'display_lp_gloval_nav', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_lp_gloval_nav', array(
				'label' =>__( 'Display gloval nav', 'emanon' ),
				'section' => 'emanon_header_nav',
				'settings' => 'display_lp_gloval_nav',
				'type' => 'checkbox',
				'priority' => 1,
			) );

			// Display hanger nav
			$wp_customize->add_setting( 'display_hanger_nav', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_hanger_nav', array(
				'label' =>__( 'Display hanger menu', 'emanon' ),
				'section' => 'emanon_header_nav',
				'settings' => 'display_hanger_nav',
				'type' => 'checkbox',
				'priority' => 2,
			) );

			// Display lp mobile nav
			$wp_customize->add_setting( 'display_lp_mobile_nav', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_lp_mobile_nav', array(
				'label'	 => __( 'Display mobile nav', 'emanon' ),
				'section' => 'emanon_header_nav',
				'settings' => 'display_lp_mobile_nav',
				'type' => 'checkbox',
				'priority' => 3,
			) );

			// Display lp mobile nav scroll arrow
			$wp_customize->add_setting( 'display_lp_mb_scroll_arrow', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_lp_mb_scroll_arrow', array(
				'label'	 => __( 'Display mobile nav scroll arrow', 'emanon' ),
				'section' => 'emanon_header_nav',
				'settings' => 'display_lp_mb_scroll_arrow',
				'type' => 'checkbox',
				'priority' => 4,
			) );

		/*------------------------------------------------------------------------------------
		/* Empathy Section
		/*----------------------------------------------------------------------------------*/
		$wp_customize->add_section( 'emanon_empathy_section', array (
			'title' => __( 'Empathy section settings', 'emanon' ),
			'priority' => 4,
			'panel' => 'emanon_landing_page_settings',
		));

			// Display empathy section
			$wp_customize->add_setting( 'display_empathy_section', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_empathy_section', array(
				'label' =>__( 'Display empathy section', 'emanon' ),
				'section' => 'emanon_empathy_section',
				'settings' => 'display_empathy_section',
				'type' => 'checkbox',
				'priority' => 1,
			) );

			// Empathy type
			$wp_customize->add_setting( 'empathy_layout_type', array(
				'default' => 'default',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_empathy_layout_type',
			) );
			$wp_customize->add_control( 'empathy_layout_type', array(
				'label' => __( 'Empathy layout type', 'emanon' ),
				'section' => 'emanon_empathy_section',
				'settings' => 'empathy_layout_type',
				'type' => 'radio',
				'choices' => array(
					'default' => __( 'Default layout', 'emanon' ),
					'image' => __( 'Image layout', 'emanon' ),
					),
				'priority' => 2,
			) );

			// Empathy title
			$wp_customize->add_setting( 'empathy_section_title', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'empathy_section_title', array(
				'label' => __( 'Title', 'emanon' ),
				'section' => 'emanon_empathy_section',
				'settings' => 'empathy_section_title',
				'type' => 'text',
				'priority' => 3,
			) );

			// Empathy sub title
			$wp_customize->add_setting( 'empathy_section_sub_title', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( new Customize_Textarea_Control( $wp_customize, 'empathy_section_sub_title', array(
				'label' => __( 'Sub title', 'emanon' ),
				'section' => 'emanon_empathy_section',
				'settings' => 'empathy_section_sub_title',
				'priority' => 4,
			) ) );

			// Trouble title[1]
			$wp_customize->add_setting( 'trouble_1', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'trouble_1', array(
				'label' => __( 'Trouble[1]', 'emanon' ),
				'section' => 'emanon_empathy_section',
				'settings' => 'trouble_1',
				'type' => 'text',
				'priority' => 5,
			) );

			// Trouble title[2]
			$wp_customize->add_setting( 'trouble_2', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'trouble_2', array(
				'label' => __( 'Trouble[2]', 'emanon' ),
				'section' => 'emanon_empathy_section',
				'settings' => 'trouble_2',
				'type' => 'text',
				'priority' => 6,
			) );

			// Trouble title[3]
			$wp_customize->add_setting( 'trouble_3', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'trouble_3', array(
				'label' => __( 'Trouble[3]', 'emanon' ),
				'section' => 'emanon_empathy_section',
				'settings' => 'trouble_3',
				'type' => 'text',
				'priority' => 7,
			) );

			// Trouble title[4]
			$wp_customize->add_setting( 'trouble_4', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'trouble_4', array(
				'label' => __( 'Trouble[4]', 'emanon' ),
				'section' => 'emanon_empathy_section',
				'settings' => 'trouble_4',
				'type' => 'text',
				'priority' => 8,
			) );

			// Trouble title[5]
			$wp_customize->add_setting( 'trouble_5', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'trouble_5', array(
				'label' => __( 'Trouble[5]', 'emanon' ),
				'section' => 'emanon_empathy_section',
				'settings' => 'trouble_5',
				'type' => 'text',
				'priority' => 9,
			) );

			// Trouble title[6]
			$wp_customize->add_setting( 'trouble_6', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'trouble_6', array(
				'label' => __( 'Trouble[6]', 'emanon' ),
				'section' => 'emanon_empathy_section',
				'settings' => 'trouble_6',
				'type' => 'text',
				'priority' => 10,
			) );

			// Fontawesome Icon [List]
			$wp_customize->add_setting( 'empathy_section_icon', array(
				'default' => 'fa fa-check-square-o',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'empathy_section_icon', array (
				'label' => __( 'Trouble list icon', 'emanon' ),
				'description' => sprintf('%1$s <a href="https://fontawesome.com/v4.7.0/icons/" target="_blank">%2$s</a>',
						__( "Font Awesome Icon Click" , 'emanon' ),
						__( "here" , 'emanon') ),
				'section' => 'emanon_empathy_section',
				'settings' => 'empathy_section_icon',
				'type' => 'text',
				'priority' => 11,
			) );

			// Main image
			$wp_customize->add_setting( 'empathy_section_main_image', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'empathy_section_main_image', array (
				'label' => __( 'Image', 'emanon' ),
				'description' => __( 'The minimum size of the image is the width 90px height 90px.', 'emanon' ),
				'section' => 'emanon_empathy_section',
				'settings' => 'empathy_section_main_image',
				'priority' => 12,
			) ) );

			// Fontawesome Icon [Scroll down]
			$wp_customize->add_setting( 'scroll_down_icon', array(
				'default' => 'fa fa-angle-down',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'scroll_down_icon', array (
				'label' => __( 'Scroll down icon', 'emanon' ),
				'description' => sprintf('%1$s <a href="https://fontawesome.com/v4.7.0/icons/" target="_blank">%2$s</a>',
						__( "Font Awesome Icon Click" , 'emanon' ),
						__( "here" , 'emanon') ),
				'section' => 'emanon_empathy_section',
				'settings' => 'scroll_down_icon',
				'type' => 'text',
				'priority' => 13,
			) );

			// Background color
			$wp_customize->add_setting( 'empathy_section_background_color', array(
				'default' => '#fff',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'empathy_section_background_color', array(
				'label' => __( 'Background color', 'emanon' ),
				'section' => 'emanon_empathy_section',
				'settings' => 'empathy_section_background_color',
				'priority' => 14,
			) ) );

			// Title color
			$wp_customize->add_setting( 'empathy_section_title_color', array(
				'default' => '#000c15',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'empathy_section_title_color', array(
				'label' => __( 'Title color', 'emanon' ),
				'section' => 'emanon_empathy_section',
				'settings' => 'empathy_section_title_color',
				'priority' => 15,
			) ) );

			// Sub title color
			$wp_customize->add_setting( 'empathy_section_sub_title_color', array(
				'default' => '#303030',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'empathy_section_sub_title_color', array(
				'label' => __( 'Sub title color', 'emanon' ),
				'section' => 'emanon_empathy_section',
				'settings' => 'empathy_section_sub_title_color',
				'priority' => 16,
			) ) );

			// Text box background color
			$wp_customize->add_setting( 'empathy_textbox_background_color', array(
				'default' => '#fff',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'empathy_textbox_background_color', array(
				'label' => __( 'Text box background color', 'emanon' ),
				'section' => 'emanon_empathy_section',
				'settings' => 'empathy_textbox_background_color',
				'priority' => 17,
			) ) );

			// Text color
			$wp_customize->add_setting( 'empathy_section_text_color', array(
				'default' => '#303030',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'empathy_section_text_color', array(
				'label' => __( 'Text color', 'emanon' ),
				'section' => 'emanon_empathy_section',
				'settings' => 'empathy_section_text_color',
				'priority' => 18,
			) ) );

			// Icon color
			$wp_customize->add_setting( 'empathy_section_icon_color', array(
				'default' => '#b5b5b5',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'empathy_section_icon_color', array(
				'label' => __( 'Icon color', 'emanon' ),
				'section' => 'emanon_empathy_section',
				'settings' => 'empathy_section_icon_color',
				'priority' => 19,
			) ) );

			// Scroll down background color
			$wp_customize->add_setting( 'scroll_down_background_color', array(
				'default' => '#9b8d77',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'scroll_down_background_color', array(
				'label' => __( 'Scroll down background color', 'emanon' ),
				'section' => 'emanon_empathy_section',
				'settings' => 'scroll_down_background_color',
				'priority' => 20,
			) ) );

			// Scroll down section icon color
			$wp_customize->add_setting( 'scroll_down_icon_color', array(
				'default' => '#fff',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'scroll_down_icon_color', array(
				'label' => __( 'Scroll down icon color', 'emanon' ),
				'section' => 'emanon_empathy_section',
				'settings' => 'scroll_down_icon_color',
				'priority' => 21,
			) ) );

		/*------------------------------------------------------------------------------------
		/* Advantage Section
		/*----------------------------------------------------------------------------------*/
		$wp_customize->add_section( 'emanon_advantage_section', array (
			'title' => __( 'Advantage section settings', 'emanon' ),
			'priority' => 5,
			'panel' => 'emanon_landing_page_settings',
		));

			// Display advantage section
			$wp_customize->add_setting( 'display_advantage_section', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_advantage_section', array(
				'label' =>__( 'Display advantage section', 'emanon' ),
				'section' => 'emanon_advantage_section',
				'settings' => 'display_advantage_section',
				'type' => 'checkbox',
				'priority' => 1,
			) );

			// Advantage header title
			$wp_customize->add_setting( 'advantage_section_title', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'advantage_section_title', array(
				'label' => __( 'Title', 'emanon' ),
				'section' => 'emanon_advantage_section',
				'settings' => 'advantage_section_title',
				'type' => 'text',
				'priority' => 2,
			) );

			// Advantage header sub title
			$wp_customize->add_setting( 'advantage_section_sub_title', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( new Customize_Textarea_Control( $wp_customize, 'advantage_section_sub_title', array(
				'label' => __( 'Sub title', 'emanon' ),
				'section' => 'emanon_advantage_section',
				'settings' => 'advantage_section_sub_title',
				'priority' => 3,
			) ) );

			// Advantage section title[1]
			$wp_customize->add_setting( 'advantage_section_title_1', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'advantage_section_title_1', array(
				'label' => __( 'Title[1]', 'emanon' ),
				'section' => 'emanon_advantage_section',
				'settings' => 'advantage_section_title_1',
				'type' => 'text',
				'priority' => 4,
			) );

			// Advantage section description[1]
			$wp_customize->add_setting( 'advantage_section_description_1', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( new Customize_Textarea_Control( $wp_customize, 'advantage_section_description_1', array(
				'label' => __( 'Description[1]', 'emanon' ),
				'section' => 'emanon_advantage_section',
				'settings' => 'advantage_section_description_1',
				'priority' => 5,
			) ) );

			// Advantage section url[1]
			$wp_customize->add_setting( 'advantage_section_url_1', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control( 'advantage_section_url_1', array(
				'label' => __( 'url[1]', 'emanon' ),
				'section' => 'emanon_advantage_section',
				'settings' => 'advantage_section_url_1',
				'type' => 'text',
				'priority' => 6,
			) );

			// Fontawesome Icon[1]
			$wp_customize->add_setting( 'advantage_section_icon_1', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'advantage_section_icon_1', array (
				'label' => __( 'Icon[1]', 'emanon' ),
				'description' => sprintf('%1$s <a href="https://fontawesome.com/v4.7.0/icons/" target="_blank">%2$s</a>',
						__( "Font Awesome Icon Click" , 'emanon' ),
						__( "here" , 'emanon') ),
				'section' => 'emanon_advantage_section',
				'settings' => 'advantage_section_icon_1',
				'type' => 'text',
				'priority' => 7,
			) );

			// Advantage section image[1]
			$wp_customize->add_setting( 'advantage_section_image_1', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'advantage_section_image_1', array (
				'label' => __( 'Image[1]', 'emanon' ),
				'description' => __( 'The minimum size of the image is the width 90px height 90px.', 'emanon' ),
				'section' => 'emanon_advantage_section',
				'settings' => 'advantage_section_image_1',
				'priority' => 8,
			) ) );

			// Advantage section title[2]
			$wp_customize->add_setting( 'advantage_section_title_2', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'advantage_section_title_2', array(
				'label' => __( 'Title[2]', 'emanon' ),
				'section' => 'emanon_advantage_section',
				'settings' => 'advantage_section_title_2',
				'type' => 'text',
				'priority' => 9,
			) );

			// Advantage section description[2]
			$wp_customize->add_setting( 'advantage_section_description_2', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( new Customize_Textarea_Control( $wp_customize, 'advantage_section_description_2', array(
				'label' => __( 'Description[2]', 'emanon' ),
				'section' => 'emanon_advantage_section',
				'settings' => 'advantage_section_description_2',
				'priority' => 10,
			) ) );

			// Advantage section url[2]
			$wp_customize->add_setting( 'advantage_section_url_2', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control( 'advantage_section_url_2', array(
				'label' => __( 'url[2]', 'emanon' ),
				'section' => 'emanon_advantage_section',
				'settings' => 'advantage_section_url_2',
				'type' => 'text',
				'priority' => 11,
			) );

			// Fontawesome Icon[2]
			$wp_customize->add_setting( 'advantage_section_icon_2', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'advantage_section_icon_2', array (
				'label' => __( 'Icon[2]', 'emanon' ),
				'description' => sprintf('%1$s <a href=" https://fontawesome.com/v4.7.0/icons/" target="_blank">%2$s</a>',
						__( "Font Awesome Icon Click" , 'emanon' ),
						__( "here" , 'emanon') ),
				'section' => 'emanon_advantage_section',
				'settings' => 'advantage_section_icon_2',
				'type' => 'text',
				'priority' => 12,
			) );

			// Advantage section image[2]
			$wp_customize->add_setting( 'advantage_section_image_2', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'advantage_section_image_2', array (
				'label' => __( 'Image[2]', 'emanon' ),
				'description' => __( 'The minimum size of the image is the width 90px height 90px.', 'emanon' ),
				'section' => 'emanon_advantage_section',
				'settings' => 'advantage_section_image_2',
				'priority' => 13,
			) ) );

			// Advantage section title[3]
			$wp_customize->add_setting( 'advantage_section_title_3', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'advantage_section_title_3', array(
				'label' => __( 'Title[3]', 'emanon' ),
				'section' => 'emanon_advantage_section',
				'settings' => 'advantage_section_title_3',
				'type' => 'text',
				'priority' => 14,
			) );

			// Advantage section description[3]
			$wp_customize->add_setting( 'advantage_section_description_3', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( new Customize_Textarea_Control( $wp_customize, 'advantage_section_description_3', array(
				'label' => __( 'Description[3]', 'emanon' ),
				'section' => 'emanon_advantage_section',
				'settings' => 'advantage_section_description_3',
				'priority' => 15,
			) ) );

			// Advantage section url[3]
			$wp_customize->add_setting( 'advantage_section_url_3', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control( 'advantage_section_url_3', array(
				'label' => __( 'url[3]', 'emanon' ),
				'section' => 'emanon_advantage_section',
				'settings' => 'advantage_section_url_3',
				'type' => 'text',
				'priority' => 16,
			) );

			// Fontawesome Icon[3]
			$wp_customize->add_setting( 'advantage_section_icon_3', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'advantage_section_icon_3', array (
				'label' => __( 'Icon[3]', 'emanon' ),
				'description' => sprintf('%1$s <a href=" https://fontawesome.com/v4.7.0/icons/" target="_blank">%2$s</a>',
						__( "Font Awesome Icon Click" , 'emanon' ),
						__( "here" , 'emanon') ),
				'section' => 'emanon_advantage_section',
				'settings' => 'advantage_section_icon_3',
				'type' => 'text',
				'priority' => 17,
			) );

			// Advantage section image[3]
			$wp_customize->add_setting( 'advantage_section_image_3', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'advantage_section_image_3', array (
				'label' => __( 'Image[3]', 'emanon' ),
				'description' => __( 'The minimum size of the image is the width 90px height 90px.', 'emanon' ),
				'section' => 'emanon_advantage_section',
				'settings' => 'advantage_section_image_3',
				'priority' => 18,
			) ) );

			// Advantage section title[4]
			$wp_customize->add_setting( 'advantage_section_title_4', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'advantage_section_title_4', array(
				'label' => __( 'Title[4]', 'emanon' ),
				'section' => 'emanon_advantage_section',
				'settings' => 'advantage_section_title_4',
				'type' => 'text',
				'priority' => 19,
			) );

			// Advantage section description[4]
			$wp_customize->add_setting( 'advantage_section_description_4', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( new Customize_Textarea_Control( $wp_customize, 'advantage_section_description_4', array(
				'label' => __( 'Description[4]', 'emanon' ),
				'section' => 'emanon_advantage_section',
				'settings' => 'advantage_section_description_4',
				'priority' => 20,
			) ) );

			// Advantage section url[4]
			$wp_customize->add_setting( 'advantage_section_url_4', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control( 'advantage_section_url_4', array(
				'label' => __( 'url[4]', 'emanon' ),
				'section' => 'emanon_advantage_section',
				'settings' => 'advantage_section_url_4',
				'type' => 'text',
				'priority' => 21,
			) );

			// Fontawesome Icon[4]
			$wp_customize->add_setting( 'advantage_section_icon_4', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'advantage_section_icon_4', array (
				'label' => __( 'Icon[4]', 'emanon' ),
				'description' => sprintf('%1$s <a href=" https://fontawesome.com/v4.7.0/icons/" target="_blank">%2$s</a>',
						__( "Font Awesome Icon Click" , 'emanon' ),
						__( "here" , 'emanon') ),
				'section' => 'emanon_advantage_section',
				'settings' => 'advantage_section_icon_4',
				'type' => 'text',
				'priority' => 22,
			) );

			// Advantage section image[4]
			$wp_customize->add_setting( 'advantage_section_image_4', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'advantage_section_image_4', array (
				'label' => __( 'Image[4]', 'emanon' ),
				'description' => __( 'The minimum size of the image is the width 90px height 90px.', 'emanon' ),
				'section' => 'emanon_advantage_section',
				'settings' => 'advantage_section_image_4',
				'priority' => 23,
			) ) );

			// Advantage section title[5]
			$wp_customize->add_setting( 'advantage_section_title_5', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'advantage_section_title_5', array(
				'label' => __( 'Title[5]', 'emanon' ),
				'section' => 'emanon_advantage_section',
				'settings' => 'advantage_section_title_5',
				'type' => 'text',
				'priority' => 24,
			) );

			// Advantage section description[5]
			$wp_customize->add_setting( 'advantage_section_description_5', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( new Customize_Textarea_Control( $wp_customize, 'advantage_section_description_5', array(
				'label' => __( 'Description[5]', 'emanon' ),
				'section' => 'emanon_advantage_section',
				'settings' => 'advantage_section_description_5',
				'priority' => 25,
			) ) );

			// Advantage section url[5]
			$wp_customize->add_setting( 'advantage_section_url_5', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control( 'advantage_section_url_5', array(
				'label' => __( 'url[5]', 'emanon' ),
				'section' => 'emanon_advantage_section',
				'settings' => 'advantage_section_url_5',
				'type' => 'text',
				'priority' => 26,
			) );

			// Fontawesome Icon[5]
			$wp_customize->add_setting( 'advantage_section_icon_5', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'advantage_section_icon_5', array (
				'label' => __( 'Icon[5]', 'emanon' ),
				'description' => sprintf('%1$s <a href=" https://fontawesome.com/v4.7.0/icons/" target="_blank">%2$s</a>',
						__( "Font Awesome Icon Click" , 'emanon' ),
						__( "here" , 'emanon') ),
				'section' => 'emanon_advantage_section',
				'settings' => 'advantage_section_icon_5',
				'type' => 'text',
				'priority' => 27,
			) );

			// Advantage section image[5]
			$wp_customize->add_setting( 'advantage_section_image_5', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'advantage_section_image_5', array (
				'label' => __( 'Image[5]', 'emanon' ),
				'description' => __( 'The minimum size of the image is the width 90px height 90px.', 'emanon' ),
				'section' => 'emanon_advantage_section',
				'settings' => 'advantage_section_image_5',
				'priority' => 28,
			) ) );

			// Advantage section title[6]
			$wp_customize->add_setting( 'advantage_section_title_6', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'advantage_section_title_6', array(
				'label' => __( 'Title[6]', 'emanon' ),
				'section' => 'emanon_advantage_section',
				'settings' => 'advantage_section_title_6',
				'type' => 'text',
				'priority' => 29,
			) );

			// Advantage section description[6]
			$wp_customize->add_setting( 'advantage_section_description_6', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( new Customize_Textarea_Control( $wp_customize, 'advantage_section_description_6', array(
				'label' => __( 'Description[6]', 'emanon' ),
				'section' => 'emanon_advantage_section',
				'settings' => 'advantage_section_description_6',
				'priority' => 30,
			) ) );

			// Advantage section url[6]
			$wp_customize->add_setting( 'advantage_section_url_6', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control( 'advantage_section_url_6', array(
				'label' => __( 'url[6]', 'emanon' ),
				'section' => 'emanon_advantage_section',
				'settings' => 'advantage_section_url_6',
				'type' => 'text',
				'priority' => 31,
			) );

			// Fontawesome Icon[6]
			$wp_customize->add_setting( 'advantage_section_icon_6', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'advantage_section_icon_6', array (
				'label' => __( 'Icon[6]', 'emanon' ),
				'description' => sprintf('%1$s <a href=" https://fontawesome.com/v4.7.0/icons/" target="_blank">%2$s</a>',
						__( "Font Awesome Icon Click" , 'emanon' ),
						__( "here" , 'emanon') ),
				'section' => 'emanon_advantage_section',
				'settings' => 'advantage_section_icon_6',
				'type' => 'text',
				'priority' => 32,
			) );

			// Advantage section image[6]
			$wp_customize->add_setting( 'advantage_section_image_6', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'advantage_section_image_6', array (
				'label' => __( 'Image[6]', 'emanon' ),
				'description' => __( 'The minimum size of the image is the width 90px height 90px.', 'emanon' ),
				'section' => 'emanon_advantage_section',
				'settings' => 'advantage_section_image_6',
				'priority' => 33,
			) ) );

			// Background color
			$wp_customize->add_setting( 'advantage_section_background_color', array(
				'default' => '#f8f8f8',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advantage_section_background_color', array(
				'label' => __( 'Background color', 'emanon' ),
				'section' => 'emanon_advantage_section',
				'settings' => 'advantage_section_background_color',
				'priority' => 34,
			) ) );

			// Title color
			$wp_customize->add_setting( 'advantage_section_title_color', array(
				'default' => '#000c15',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advantage_section_title_color', array(
				'label' => __( 'Title color', 'emanon' ),
				'section' => 'emanon_advantage_section',
				'settings' => 'advantage_section_title_color',
				'priority' => 35,
			) ) );

			// Sub title color
			$wp_customize->add_setting( 'advantage_section_sub_title_color', array(
				'default' => '#000c15',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advantage_section_sub_title_color', array(
				'label' => __( 'Sub title color', 'emanon' ),
				'section' => 'emanon_advantage_section',
				'settings' => 'advantage_section_sub_title_color',
				'priority' => 36,
			) ) );

			// Text color
			$wp_customize->add_setting( 'advantage_section_text_color', array(
				'default' => '#303030',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advantage_section_text_color', array(
				'label' => __( 'Text color', 'emanon' ),
				'section' => 'emanon_advantage_section',
				'settings' => 'advantage_section_text_color',
				'priority' => 37,
			) ) );

			// Icon color
			$wp_customize->add_setting( 'advantage_section_icon_color', array(
				'default' => '#9b8d77',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advantage_section_icon_color', array(
				'label' => __( 'Icon color', 'emanon' ),
				'section' => 'emanon_advantage_section',
				'settings' => 'advantage_section_icon_color',
				'priority' => 38,
			) ) );

		/*------------------------------------------------------------------------------------
		/* Calls To Action Btn Section
		/*----------------------------------------------------------------------------------*/
		$wp_customize->add_section( 'emanon_cta_btn_section', array (
			'title' => __( 'Calls to action［button］settings', 'emanon' ),
			'priority' => 6,
			'panel' => 'emanon_landing_page_settings',
		) );

			// Display cta btn section［1］
			$wp_customize->add_setting( 'display_cta_btn_lp_1', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_cta_btn_lp_1', array(
				'label'	 => __( 'Display CTA btn for landing page［1］', 'emanon' ),
				'section' => 'emanon_cta_btn_section',
				'settings' => 'display_cta_btn_lp_1',
				'type' => 'checkbox',
				'priority' => 1,
			) );

			// Display cta btn section［2］
			$wp_customize->add_setting( 'display_cta_btn_lp_2', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_cta_btn_lp_2', array(
				'label'	 => __( 'Display CTA btn for landing page［2］', 'emanon' ),
				'section' => 'emanon_cta_btn_section',
				'settings' => 'display_cta_btn_lp_2',
				'type' => 'checkbox',
				'priority' => 2,
			) );

			// Display cta btn section［3］
			$wp_customize->add_setting( 'display_cta_btn_lp_3', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_cta_btn_lp_3', array(
				'label'	 => __( 'Display CTA btn for landing page［3］', 'emanon' ),
				'section' => 'emanon_cta_btn_section',
				'settings' => 'display_cta_btn_lp_3',
				'type' => 'checkbox',
				'priority' => 3,
			) );

			// Display cta section
			$wp_customize->add_setting( 'display_cta_lp_type', array(
				'default' => 'mail',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_lp_cta_btn_type',
			) );
			$wp_customize->add_control( 'display_cta_lp_type', array(
				'label' => __( 'Display cta type', 'emanon' ),
				'section' => 'emanon_cta_btn_section',
				'settings' => 'display_cta_lp_type',
				'type' => 'radio',
				'choices' => array(
					'mail' => __( 'Mail only', 'emanon' ),
					'tel' => __( 'Tel only', 'emanon' ),
					'tel_mail' => __( 'Tel ＆ Mail', 'emanon' ),
					),
				'priority' => 4,
			) );

			// Fontawesome Icon[mail]
			$wp_customize->add_setting( 'cta_tel_lp_icon', array(
				'default' => 'fa fa-phone',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'cta_tel_lp_icon', array (
				'label' => __( 'Icon [Tel]', 'emanon' ),
				'description' => sprintf('%1$s <a href="https://fontawesome.com/v4.7.0/icons/" target="_blank">%2$s</a>.',
						__( "Fontawesome Icon Click" , 'emanon' ),
						__( "here" , 'emanon') ),
				'section' => 'emanon_cta_btn_section',
				'settings' => 'cta_tel_lp_icon',
				'type' => 'text',
				'priority' => 5,
			) );

			// CTA section tel title
			$wp_customize->add_setting( 'cta_tel_lp_title', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'cta_tel_lp_title', array(
				'label' => __( 'Title [Tel]', 'emanon' ),
				'section' => 'emanon_cta_btn_section',
				'settings' => 'cta_tel_lp_title',
				'type' => 'text',
				'priority' => 6,
			) );

			// CTA section tel description
			$wp_customize->add_setting( 'cta_tel_lp_description', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( new Customize_Textarea_Control( $wp_customize, 'cta_tel_lp_description', array(
				'label' => __( 'Description [Tel]', 'emanon' ),
				'section' => 'emanon_cta_btn_section',
				'settings' => 'cta_tel_lp_description',
				'type' => 'text',
				'priority' => 7,
			) ) );

			// CTA section tel number
			$wp_customize->add_setting( 'cta_tel_lp_number', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'cta_tel_lp_number', array(
				'label' => __( 'Tel number', 'emanon' ),
				'section' => 'emanon_cta_btn_section',
				'settings' => 'cta_tel_lp_number',
				'type' => 'text',
				'priority' => 8,
			) );

			// CTA section business hours
			$wp_customize->add_setting( 'cta_tel_lp_business_hours', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'cta_tel_lp_business_hours', array(
				'label' => __( 'Business hours', 'emanon' ),
				'section' => 'emanon_cta_btn_section',
				'settings' => 'cta_tel_lp_business_hours',
				'type' => 'text',
				'priority' => 9,
			) );

			// Fontawesome Icon[mail]
			$wp_customize->add_setting( 'cta_btn_lp_icon', array(
				'default' => 'fa fa-envelope-o',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'cta_btn_lp_icon', array (
				'label' => __( 'Icon [Mail]', 'emanon' ),
				'description' => sprintf('%1$s <a href="https://fontawesome.com/v4.7.0/icons/" target="_blank">%2$s</a>.',
						__( "Fontawesome Icon Click" , 'emanon' ),
						__( "here" , 'emanon') ),
				'section' => 'emanon_cta_btn_section',
				'settings' => 'cta_btn_lp_icon',
				'type' => 'text',
				'priority' => 10,
			) );

			// CTA btn section title
			$wp_customize->add_setting( 'cta_btn_lp_title', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'cta_btn_lp_title', array(
				'label' => __( 'Title [Mail]', 'emanon' ),
				'section' => 'emanon_cta_btn_section',
				'settings' => 'cta_btn_lp_title',
				'type' => 'text',
				'priority' => 11,
			) );

			// CTA btn section description
			$wp_customize->add_setting( 'cta_btn_lp_description', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( new Customize_Textarea_Control( $wp_customize, 'cta_btn_lp_description', array(
				'label' => __( 'Description [Mail]', 'emanon' ),
				'section' => 'emanon_cta_btn_section',
				'settings' => 'cta_btn_lp_description',
				'priority' => 12,
			) ) );

			// CTA btn text
			$wp_customize->add_setting( 'cta_btn_lp_btn_text', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'cta_btn_lp_btn_text', array(
				'label' => __( 'Button text [Mail]', 'emanon' ),
				'section' => 'emanon_cta_btn_section',
				'settings' => 'cta_btn_lp_btn_text',
				'type' => 'text',
				'priority' => 13,
			) );

			// Background color
			$wp_customize->add_setting( 'cta_btn_lp_background_color', array(
				'default' => '#fff',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cta_btn_lp_background_color', array(
				'label' => __( 'Background color', 'emanon' ),
				'section' => 'emanon_cta_btn_section',
				'settings' => 'cta_btn_lp_background_color',
				'priority' => 14,
			) ) );

			// Title color
			$wp_customize->add_setting( 'cta_btn_lp_title_color', array(
				'default' => '#000c15',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cta_btn_lp_title_color', array(
				'label' => __( 'Title color', 'emanon' ),
				'section' => 'emanon_cta_btn_section',
				'settings' => 'cta_btn_lp_title_color',
				'priority' => 15,
			) ) );

			// Text color
			$wp_customize->add_setting( 'cta_btn_lp_text_color', array(
				'default' => '#303030',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cta_btn_lp_text_color', array(
				'label' => __( 'Text color', 'emanon' ),
				'section' => 'emanon_cta_btn_section',
				'settings' => 'cta_btn_lp_text_color',
				'priority' => 16,
			) ) );

			// Button background color
			$wp_customize->add_setting( 'cta_btn_lp_btn_background_color', array(
				'default' => '#37db9b',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cta_btn_lp_btn_background_color', array(
				'label' => __( 'Button background color', 'emanon' ),
				'section' => 'emanon_cta_btn_section',
				'settings' => 'cta_btn_lp_btn_background_color',
				'priority' => 17,
			) ) );

			// Button text color
			$wp_customize->add_setting( 'cta_btn_lp_btn_text_color', array(
				'default' => '#fff',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cta_btn_lp_btn_text_color', array(
				'label' => __( 'Button text color', 'emanon' ),
				'section' => 'emanon_cta_btn_section',
				'settings' => 'cta_btn_lp_btn_text_color',
				'priority' => 18,
			) ) );

		/*------------------------------------------------------------------------------------
		/* Content Section
		/*----------------------------------------------------------------------------------*/
		$wp_customize->add_section( 'emanon_content_section', array (
			'title' => __( 'Content section settings', 'emanon' ),
			'description' => __( 'Display the contents of the fixed page.', 'emanon' ),
			'priority' => 7,
			'panel' => 'emanon_landing_page_settings',
		));

			// Display content section
			$wp_customize->add_setting( 'display_content_section', array(
				'default' => true,
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_content_section', array(
				'label' =>__( 'Display content section', 'emanon' ),
				'section' => 'emanon_content_section',
				'settings' => 'display_content_section',
				'type' => 'checkbox',
				'priority' => 1,
			) );

			// Background color
			$wp_customize->add_setting( 'content_section_background_color', array(
				'default' => '#f8f8f8',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'content_section_background_color', array(
				'label' => __( 'Background color', 'emanon' ),
				'section' => 'emanon_content_section',
				'settings' => 'content_section_background_color',
				'priority' => 2,
			) ) );

		/*------------------------------------------------------------------------------------
		/* Product Features Section
		/*----------------------------------------------------------------------------------*/
		$wp_customize->add_section( 'emanon_product_features_section', array (
			'title' => __( 'Product Features settings', 'emanon' ),
			'priority' => 8,
			'panel' => 'emanon_landing_page_settings',
		) );

			// Display product features section
			$wp_customize->add_setting( 'display_product_features_section', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_product_features_section', array(
				'label' =>__( 'Display product features section', 'emanon' ),
				'section' => 'emanon_product_features_section',
				'settings' => 'display_product_features_section',
				'type' => 'checkbox',
				'priority' => 1,
			) );

			// Product features section title
			$wp_customize->add_setting( 'product_features_section_title', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'product_features_section_title', array(
				'label' => __( 'Title', 'emanon' ),
				'section' => 'emanon_product_features_section',
				'settings' => 'product_features_section_title',
				'type' => 'text',
				'priority' => 2,
			) );

			// Product features section sub title
			$wp_customize->add_setting( 'product_features_section_sub_title', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( new Customize_Textarea_Control( $wp_customize, 'product_features_section_sub_title', array(
				'label' => __( 'Sub title', 'emanon' ),
				'section' => 'emanon_product_features_section',
				'settings' => 'product_features_section_sub_title',
				'type' => 'text',
				'priority' => 3,
			) ) );

			// Image[1]
			$wp_customize->add_setting( 'product_features_image_1', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'product_features_image_1', array (
				'label' => __( 'Image[1]', 'emanon' ),
				'section' => 'emanon_product_features_section',
				'settings' => 'product_features_image_1',
				'priority' => 4,
			) ) );

			// Title[1]
			$wp_customize->add_setting( 'product_features_title_1', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'product_features_title_1', array(
				'label' => __( 'Title[1]', 'emanon' ),
				'section' => 'emanon_product_features_section',
				'settings' => 'product_features_title_1',
				'type' => 'text',
				'priority' => 5,
			) );

			// Description[1]
			$wp_customize->add_setting( 'product_features_description_1', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( new Customize_Textarea_Control( $wp_customize, 'product_features_description_1', array(
				'label' => __( 'Description[1]', 'emanon' ),
				'section' => 'emanon_product_features_section',
				'settings' => 'product_features_description_1',
				'type' => 'text',
				'priority' => 6,
			) ) );

			// Image[2]
			$wp_customize->add_setting( 'product_features_image_2', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'product_features_image_2', array (
				'label' => __( 'Image[2]', 'emanon' ),
				'section' => 'emanon_product_features_section',
				'settings' => 'product_features_image_2',
				'priority' => 7,
			) ) );

			// Title[2]
			$wp_customize->add_setting( 'product_features_title_2', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'product_features_title_2', array(
				'label' => __( 'Title[2]', 'emanon' ),
				'section' => 'emanon_product_features_section',
				'settings' => 'product_features_title_2',
				'type' => 'text',
				'priority' => 8,
			) );

			// Description[2]
			$wp_customize->add_setting( 'product_features_description_2', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( new Customize_Textarea_Control( $wp_customize, 'product_features_description_2', array(
				'label' => __( 'Description[2]', 'emanon' ),
				'section' => 'emanon_product_features_section',
				'settings' => 'product_features_description_2',
				'type' => 'text',
				'priority' => 9,
			) ) );

			// Image[3]
			$wp_customize->add_setting( 'product_features_image_3', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'product_features_image_3', array (
				'label' => __( 'Image[3]', 'emanon' ),
				'section' => 'emanon_product_features_section',
				'settings' => 'product_features_image_3',
				'priority' => 10,
			) ) );

			// Title[3]
			$wp_customize->add_setting( 'product_features_title_3', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'product_features_title_3', array(
				'label' => __( 'Title[3]', 'emanon' ),
				'section' => 'emanon_product_features_section',
				'settings' => 'product_features_title_3',
				'type' => 'text',
				'priority' => 11,
			) );

			// Description[3]
			$wp_customize->add_setting( 'product_features_description_3', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( new Customize_Textarea_Control( $wp_customize, 'product_features_description_3', array(
				'label' => __( 'Description[3]', 'emanon' ),
				'section' => 'emanon_product_features_section',
				'settings' => 'product_features_description_3',
				'type' => 'text',
				'priority' => 12,
			) ) );

			// Image[4]
			$wp_customize->add_setting( 'product_features_image_4', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'product_features_image_4', array (
				'label' => __( 'Image[4]', 'emanon' ),
				'section' => 'emanon_product_features_section',
				'settings' => 'product_features_image_4',
				'priority' => 13,
			) ) );

			// Title[4]
			$wp_customize->add_setting( 'product_features_title_4', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'product_features_title_4', array(
				'label' => __( 'Title[4]', 'emanon' ),
				'section' => 'emanon_product_features_section',
				'settings' => 'product_features_title_4',
				'type' => 'text',
				'priority' => 14,
			) );

			// Description[4]
			$wp_customize->add_setting( 'product_features_description_4', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( new Customize_Textarea_Control( $wp_customize, 'product_features_description_4', array(
				'label' => __( 'Description[4]', 'emanon' ),
				'section' => 'emanon_product_features_section',
				'settings' => 'product_features_description_4',
				'type' => 'text',
				'priority' => 15,
			) ) );

			// Image[5]
			$wp_customize->add_setting( 'product_features_image_5', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'product_features_image_5', array (
				'label' => __( 'Image[5]', 'emanon' ),
				'section' => 'emanon_product_features_section',
				'settings' => 'product_features_image_5',
				'priority' => 16,
			) ) );

			// Title[5]
			$wp_customize->add_setting( 'product_features_title_5', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'product_features_title_5', array(
				'label' => __( 'Title[5]', 'emanon' ),
				'section' => 'emanon_product_features_section',
				'settings' => 'product_features_title_5',
				'type' => 'text',
				'priority' => 17,
			) );

			// Description[5]
			$wp_customize->add_setting( 'product_features_description_5', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( new Customize_Textarea_Control( $wp_customize, 'product_features_description_5', array(
				'label' => __( 'Description[5]', 'emanon' ),
				'section' => 'emanon_product_features_section',
				'settings' => 'product_features_description_5',
				'type' => 'text',
				'priority' => 18,
			) ) );

			// Image[6]
			$wp_customize->add_setting( 'product_features_image_6', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'product_features_image_6', array (
				'label' => __( 'Image[6]', 'emanon' ),
				'section' => 'emanon_product_features_section',
				'settings' => 'product_features_image_6',
				'priority' => 19,
			) ) );

			// Title[6]
			$wp_customize->add_setting( 'product_features_title_6', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'product_features_title_6', array(
				'label' => __( 'Title[6]', 'emanon' ),
				'section' => 'emanon_product_features_section',
				'settings' => 'product_features_title_6',
				'type' => 'text',
				'priority' => 20,
			) );

			// Description[6]
			$wp_customize->add_setting( 'product_features_description_6', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( new Customize_Textarea_Control( $wp_customize, 'product_features_description_6', array(
				'label' => __( 'Description[6]', 'emanon' ),
				'section' => 'emanon_product_features_section',
				'settings' => 'product_features_description_6',
				'type' => 'text',
				'priority' => 21,
			) ) );

			// Background color
			$wp_customize->add_setting( 'product_features_section_background_color', array(
				'default' => '#f8f8f8',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'product_features_section_background_color', array(
				'label' => __( 'Background color', 'emanon' ),
				'section' => 'emanon_product_features_section',
				'settings' => 'product_features_section_background_color',
				'priority' => 22,
			) ) );

			// Title color
			$wp_customize->add_setting( 'product_features_title_color', array(
				'default' => '#000c15',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'product_features_title_color', array(
				'label' => __( 'Title color', 'emanon' ),
				'section' => 'emanon_product_features_section',
				'settings' => 'product_features_title_color',
				'priority' => 23,
			) ) );

			// Sub title color
			$wp_customize->add_setting( 'product_features_sub_title_color', array(
				'default' => '#303030',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'product_features_sub_title_color', array(
				'label' => __( 'Sub title color', 'emanon' ),
				'section' => 'emanon_product_features_section',
				'settings' => 'product_features_sub_title_color',
				'priority' => 24,
			) ) );

			// Headline color
			$wp_customize->add_setting( 'product_features_headline_color', array(
				'default' => '#303030',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'product_features_headline_color', array(
				'label' => __( 'Headline color', 'emanon' ),
				'section' => 'emanon_product_features_section',
				'settings' => 'product_features_headline_color',
				'priority' => 25,
			) ) );

			// Text color
			$wp_customize->add_setting( 'product_features_text_color', array(
				'default' => '#303030',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'product_features_text_color', array(
				'label' => __( 'Text color', 'emanon' ),
				'section' => 'emanon_product_features_section',
				'settings' => 'product_features_text_color',
				'priority' => 26,
			) ) );

		/*------------------------------------------------------------------------------------
		/* Comparison Table Section
		/*----------------------------------------------------------------------------------*/
		$wp_customize->add_section( 'emanon_comparison_table', array (
			'title' => __( 'Comparison Table section settings', 'emanon' ),
			'priority' => 9,
			'panel' => 'emanon_landing_page_settings',
		));

			// Display lp header cta
			$wp_customize->add_setting( 'display_comparison_table_section', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_comparison_table_section', array(
				'label' =>__( 'Display comparison table section', 'emanon' ),
				'section' => 'emanon_comparison_table',
				'settings' => 'display_comparison_table_section',
				'type' => 'checkbox',
				'priority' => 1,
			) );

			// Comparison section title
			$wp_customize->add_setting( 'comparison_table_section_title', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'comparison_table_section_title', array(
				'label' => __( 'Title', 'emanon' ),
				'section' => 'emanon_comparison_table',
				'settings' => 'comparison_table_section_title',
				'type' => 'text',
				'priority' => 2,
			) );

			// Comparison section sub title
			$wp_customize->add_setting( 'comparison_table_section_sub_title', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( new Customize_Textarea_Control( $wp_customize, 'comparison_table_section_sub_title', array(
				'label' => __( 'Sub title', 'emanon' ),
				'section' => 'emanon_comparison_table',
				'settings' => 'comparison_table_section_sub_title',
				'type' => 'text',
				'priority' => 3,
			) ) );

			// My item
			$wp_customize->add_setting( 'comparison_item_1', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'comparison_item_1', array(
				'label' => __( 'My item', 'emanon' ),
				'section' => 'emanon_comparison_table',
				'settings' => 'comparison_item_1',
				'type' => 'text',
				'priority' => 4,
			) );

			// My Recommend
			$wp_customize->add_setting( 'comparison_recommend_1', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'comparison_recommend_1', array(
				'label' => __( 'My recommend', 'emanon' ),
				'section' => 'emanon_comparison_table',
				'settings' => 'comparison_recommend_1',
				'type' => 'text',
				'priority' => 5,
			) );

			// My Features
		 $wp_customize->add_setting( 'comparison_features_1', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( new Customize_Textarea_Control( $wp_customize, 'comparison_features_1', array(
				'label' => __( 'My features', 'emanon' ),
				'section' => 'emanon_comparison_table',
				'settings' => 'comparison_features_1',
				'type' => 'text',
				'priority' => 6,
			) ) );

			// Item[1]
			$wp_customize->add_setting( 'comparison_item_2', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'comparison_item_2', array(
				'label' => __( 'Item[1]', 'emanon' ),
				'section' => 'emanon_comparison_table',
				'settings' => 'comparison_item_2',
				'type' => 'text',
				'priority' => 4,
			) );

			// Recommend[1]
			$wp_customize->add_setting( 'comparison_recommend_2', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'comparison_recommend_2', array(
				'label' => __( 'Recommend[1]', 'emanon' ),
				'section' => 'emanon_comparison_table',
				'settings' => 'comparison_recommend_2',
				'type' => 'text',
				'priority' => 5,
			) );

			// Features[1]
		 $wp_customize->add_setting( 'comparison_features_2', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( new Customize_Textarea_Control( $wp_customize, 'comparison_features_2', array(
				'label' => __( 'Features[1]', 'emanon' ),
				'section' => 'emanon_comparison_table',
				'settings' => 'comparison_features_2',
				'type' => 'text',
				'priority' => 6,
			) ) );

			// Item[2]
			$wp_customize->add_setting( 'comparison_item_3', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'comparison_item_3', array(
				'label' => __( 'Item[2]', 'emanon' ),
				'section' => 'emanon_comparison_table',
				'settings' => 'comparison_item_3',
				'type' => 'text',
				'priority' => 4,
			) );

			// Recommend[2]
			$wp_customize->add_setting( 'comparison_recommend_3', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'comparison_recommend_3', array(
				'label' => __( 'Recommend[2]', 'emanon' ),
				'section' => 'emanon_comparison_table',
				'settings' => 'comparison_recommend_3',
				'type' => 'text',
				'priority' => 5,
			) );

			// Features[2]
		 $wp_customize->add_setting( 'comparison_features_3', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( new Customize_Textarea_Control( $wp_customize, 'comparison_features_3', array(
				'label' => __( 'Features[2]', 'emanon' ),
				'section' => 'emanon_comparison_table',
				'settings' => 'comparison_features_3',
				'type' => 'text',
				'priority' => 6,
			) ) );

			// Background color
			$wp_customize->add_setting( 'comparison_section_background_color', array(
				'default' => '#fff',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'comparison_section_background_color', array(
				'label' => __( 'Background color', 'emanon' ),
				'section' => 'emanon_comparison_table',
				'settings' => 'comparison_section_background_color',
				'priority' => 7,
			) ) );

			// Title color
			$wp_customize->add_setting( 'comparison_section_title_color', array(
				'default' => '#000c15',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'comparison_section_title_color', array(
				'label' => __( 'Title color', 'emanon' ),
				'section' => 'emanon_comparison_table',
				'settings' => 'comparison_section_title_color',
				'priority' => 8,
			) ) );

			// Sub title color
			$wp_customize->add_setting( 'comparison_section_sub_title_color', array(
				'default' => '#303030',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'comparison_section_sub_title_color', array(
				'label' => __( 'Sub title color', 'emanon' ),
				'section' => 'emanon_comparison_table',
				'settings' => 'comparison_section_sub_title_color',
				'priority' => 9,
			) ) );

			// My item background color
			$wp_customize->add_setting( 'comparison_section_myitem_background_color', array(
				'default' => '#9b8d77',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'comparison_section_myitem_background_color', array(
				'label' => __( 'My item background color', 'emanon' ),
				'section' => 'emanon_comparison_table',
				'settings' => 'comparison_section_myitem_background_color',
				'priority' => 10,
			) ) );

			// My item text color
			$wp_customize->add_setting( 'comparison_section_myitem_text_color', array(
				'default' => '#fff',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'comparison_section_myitem_text_color', array(
				'label' => __( 'My item text color', 'emanon' ),
				'section' => 'emanon_comparison_table',
				'settings' => 'comparison_section_myitem_text_color',
				'priority' => 11,
			) ) );

			// Item background color
			$wp_customize->add_setting( 'comparison_section_item_background_color', array(
				'default' => '#f4f6fa',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'comparison_section_item_background_color', array(
				'label' => __( 'Item background color', 'emanon' ),
				'section' => 'emanon_comparison_table',
				'settings' => 'comparison_section_item_background_color',
				'priority' => 12,
			) ) );

			// Item text color
			$wp_customize->add_setting( 'comparison_section_item_text_color', array(
				'default' => '#000c15',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'comparison_section_item_text_color', array(
				'label' => __( 'Item text color', 'emanon' ),
				'section' => 'emanon_comparison_table',
				'settings' => 'comparison_section_item_text_color',
				'priority' => 13,
			) ) );

			// Text box background color
			$wp_customize->add_setting( 'comparison_textbox_background_color', array(
				'default' => '#fff',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'comparison_textbox_background_color', array(
				'label' => __( 'Text box background color', 'emanon' ),
				'section' => 'emanon_comparison_table',
				'settings' => 'comparison_textbox_background_color',
				'priority' => 14,
			) ) );

		/*------------------------------------------------------------------------------------
		/* Testimonial Section
		/*----------------------------------------------------------------------------------*/
		$wp_customize->add_section( 'emanon_testimonial_section', array (
			'title' => __( 'Testimonial section settings', 'emanon' ),
			'priority' => 10,
			'panel' => 'emanon_landing_page_settings',
		));

			// Display testimonial section
			$wp_customize->add_setting( 'display_testimonial_section', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_testimonial_section', array(
				'label' =>__( 'Display testimonial section', 'emanon' ),
				'description' => __( 'Voice of the Customer is a minimum of two people are required.', 'emanon' ),
				'section' => 'emanon_testimonial_section',
				'settings' => 'display_testimonial_section',
				'type' => 'checkbox',
				'priority' => 1,
			) );

			// Testimonial section title
			$wp_customize->add_setting( 'testimonial_section_title', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'testimonial_section_title', array(
				'label' => __( 'Title', 'emanon' ),
				'section' => 'emanon_testimonial_section',
				'settings' => 'testimonial_section_title',
				'type' => 'text',
				'priority' => 2,
			) );

			// Testimonial section sub title
			$wp_customize->add_setting( 'testimonial_section_sub_title', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( new Customize_Textarea_Control( $wp_customize, 'testimonial_section_sub_title', array(
				'label' => __( 'Sub title', 'emanon' ),
				'section' => 'emanon_testimonial_section',
				'settings' => 'testimonial_section_sub_title',
				'type' => 'text',
				'priority' => 3,
			) ) );

			// Customers name[1]
			$wp_customize->add_setting( 'customers_name_1', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'customers_name_1', array(
				'label' => __( 'Name[1]', 'emanon' ),
				'section' => 'emanon_testimonial_section',
				'settings' => 'customers_name_1',
				'type' => 'text',
				'priority' => 4,
			) );

			// Customers testimonials title[1]
			$wp_customize->add_setting( 'customers_testimonials_title_1', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'customers_testimonials_title_1', array(
				'label' => __( 'Title[1]', 'emanon' ),
				'section' => 'emanon_testimonial_section',
				'settings' => 'customers_testimonials_title_1',
				'type' => 'text',
				'priority' => 5,
			) );

			// Customers testimonials[1]
			$wp_customize->add_setting( 'customers_testimonials_1', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( new Customize_Textarea_Control( $wp_customize, 'customers_testimonials_1', array(
				'label' => __( 'Testimonials[1]', 'emanon' ),
				'section' => 'emanon_testimonial_section',
				'settings' => 'customers_testimonials_1',
				'type' => 'text',
				'priority' => 6,
			) ) );

			// Customers image[1]
			$wp_customize->add_setting( 'customers_image_1', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'customers_image_1', array (
				'label' => __( 'Image[1]', 'emanon' ),
				'description' => __( 'The minimum size of the image is the width 90px height 90px.', 'emanon' ),
				'section' => 'emanon_testimonial_section',
				'settings' => 'customers_image_1',
				'priority' => 7,
			) ) );

			// Customers name[2]
			$wp_customize->add_setting( 'customers_name_2', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'customers_name_2', array(
				'label' => __( 'Name[2]', 'emanon' ),
				'section' => 'emanon_testimonial_section',
				'settings' => 'customers_name_2',
				'type' => 'text',
				'priority' => 8,
			) );

			// Customers testimonials title[2]
			$wp_customize->add_setting( 'customers_testimonials_title_2', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'customers_testimonials_title_2', array(
				'label' => __( 'Title[2]', 'emanon' ),
				'section' => 'emanon_testimonial_section',
				'settings' => 'customers_testimonials_title_2',
				'type' => 'text',
				'priority' => 9,
			) );

			// Customers testimonials[2]
			$wp_customize->add_setting( 'customers_testimonials_2', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( new Customize_Textarea_Control( $wp_customize, 'customers_testimonials_2', array(
				'label' => __( 'Testimonials[2]', 'emanon' ),
				'section' => 'emanon_testimonial_section',
				'settings' => 'customers_testimonials_2',
				'priority' => 10,
			) ) );

			// Customers image[2]
			$wp_customize->add_setting( 'customers_image_2', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'customers_image_2', array (
				'label' => __( 'Image[2]', 'emanon' ),
				'description' => __( 'The minimum size of the image is the width 90px height 90px.', 'emanon' ),
				'section' => 'emanon_testimonial_section',
				'settings' => 'customers_image_2',
				'priority' => 11,
			) ) );

			// Customers name[3]
			$wp_customize->add_setting( 'customers_name_3', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'customers_name_3', array(
				'label' => __( 'Name[3]', 'emanon' ),
				'section' => 'emanon_testimonial_section',
				'settings' => 'customers_name_3',
				'type' => 'text',
				'priority' => 12,
			) );

			// Customers testimonials title[3]
			$wp_customize->add_setting( 'customers_testimonials_title_3', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'customers_testimonials_title_3', array(
				'label' => __( 'Title[3]', 'emanon' ),
				'section' => 'emanon_testimonial_section',
				'settings' => 'customers_testimonials_title_3',
				'type' => 'text',
				'priority' => 13,
			) );

			// Customers testimonials[3]
			$wp_customize->add_setting( 'customers_testimonials_3', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( new Customize_Textarea_Control( $wp_customize, 'customers_testimonials_3', array(
				'label' => __( 'Testimonials[3]', 'emanon' ),
				'section' => 'emanon_testimonial_section',
				'settings' => 'customers_testimonials_3',
				'priority' => 14,
			) ) );

			// Customers image[3]
			$wp_customize->add_setting( 'customers_image_3', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'customers_image_3', array (
				'label' => __( 'Image[3]', 'emanon' ),
				'description' => __( 'The minimum size of the image is the width 90px height 90px.', 'emanon' ),
				'section' => 'emanon_testimonial_section',
				'settings' => 'customers_image_3',
				'priority' => 15,
			) ) );

			// Customers name[4]
			$wp_customize->add_setting( 'customers_name_4', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'customers_name_4', array(
				'label' => __( 'Name[4]', 'emanon' ),
				'section' => 'emanon_testimonial_section',
				'settings' => 'customers_name_4',
				'type' => 'text',
				'priority' => 16,
			) );

			// Customers testimonials title[4]
			$wp_customize->add_setting( 'customers_testimonials_title_4', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'customers_testimonials_title_4', array(
				'label' => __( 'Title[4]', 'emanon' ),
				'section' => 'emanon_testimonial_section',
				'settings' => 'customers_testimonials_title_4',
				'type' => 'text',
				'priority' => 17,
			) );

			// Customers testimonials[4]
			$wp_customize->add_setting( 'customers_testimonials_4', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( new Customize_Textarea_Control( $wp_customize, 'customers_testimonials_4', array(
				'label' => __( 'Testimonials[4]', 'emanon' ),
				'section' => 'emanon_testimonial_section',
				'settings' => 'customers_testimonials_4',
				'priority' => 18,
			) ) );

			// Customers image[4]
			$wp_customize->add_setting( 'customers_image_4', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'customers_image_4', array (
				'label' => __( 'Image[4]', 'emanon' ),
				'description' => __( 'The minimum size of the image is the width 90px height 90px.', 'emanon' ),
				'section' => 'emanon_testimonial_section',
				'settings' => 'customers_image_4',
				'priority' => 19,
			) ) );

			// Customers name[5]
			$wp_customize->add_setting( 'customers_name_5', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'customers_name_5', array(
				'label' => __( 'Name[5]', 'emanon' ),
				'section' => 'emanon_testimonial_section',
				'settings' => 'customers_name_5',
				'type' => 'text',
				'priority' => 20,
			) );

			// Customers testimonials title[5]
			$wp_customize->add_setting( 'customers_testimonials_title_5', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'customers_testimonials_title_5', array(
				'label' => __( 'Title[5]', 'emanon' ),
				'section' => 'emanon_testimonial_section',
				'settings' => 'customers_testimonials_title_5',
				'type' => 'text',
				'priority' => 21,
			) );

			// Customers testimonials[5]
			$wp_customize->add_setting( 'customers_testimonials_5', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( new Customize_Textarea_Control( $wp_customize, 'customers_testimonials_5', array(
				'label' => __( 'Testimonials[5]', 'emanon' ),
				'section' => 'emanon_testimonial_section',
				'settings' => 'customers_testimonials_5',
				'priority' => 22,
			) ) );

			// Customers image[5]
			$wp_customize->add_setting( 'customers_image_5', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'customers_image_5', array (
				'label' => __( 'Image[5]', 'emanon' ),
				'description' => __( 'The minimum size of the image is the width 90px height 90px.', 'emanon' ),
				'section' => 'emanon_testimonial_section',
				'settings' => 'customers_image_5',
				'priority' => 23,
			) ) );

			// Customers name[6]
			$wp_customize->add_setting( 'customers_name_6', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'customers_name_6', array(
				'label' => __( 'Name[6]', 'emanon' ),
				'section' => 'emanon_testimonial_section',
				'settings' => 'customers_name_6',
				'type' => 'text',
				'priority' => 24,
			) );

			// Customers testimonials title[6]
			$wp_customize->add_setting( 'customers_testimonials_title_6', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'customers_testimonials_title_6', array(
				'label' => __( 'Title[6]', 'emanon' ),
				'section' => 'emanon_testimonial_section',
				'settings' => 'customers_testimonials_title_6',
				'type' => 'text',
				'priority' => 25,
			) );

			// Customers testimonials[6]
			$wp_customize->add_setting( 'customers_testimonials_6', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( new Customize_Textarea_Control( $wp_customize, 'customers_testimonials_6', array(
				'label' => __( 'Testimonials[6]', 'emanon' ),
				'section' => 'emanon_testimonial_section',
				'settings' => 'customers_testimonials_6',
				'priority' => 26,
			) ) );

			// Customers image[6]
			$wp_customize->add_setting( 'customers_image_6', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'customers_image_6', array (
				'label' => __( 'Image[6]', 'emanon' ),
				'description' => __( 'The minimum size of the image is the width 90px height 90px.', 'emanon' ),
				'section' => 'emanon_testimonial_section',
				'settings' => 'customers_image_6',
				'priority' => 27,
			) ) );

			// Background color
			$wp_customize->add_setting( 'testimonial_section_background_color', array(
				'default' => '#fff',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'testimonial_section_background_color', array(
				'label' => __( 'Background color', 'emanon' ),
				'section' => 'emanon_testimonial_section',
				'settings' => 'testimonial_section_background_color',
				'priority' => 28,
			) ) );

			// Title color
			$wp_customize->add_setting( 'testimonial_section_title_color', array(
				'default' => '#000c15',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'testimonial_section_title_color', array(
				'label' => __( 'Title color', 'emanon' ),
				'section' => 'emanon_testimonial_section',
				'settings' => 'testimonial_section_title_color',
				'priority' => 29,
			) ) );

			// Sub title color
			$wp_customize->add_setting( 'testimonial_section_sub_title_color', array(
				'default' => '#303030',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'testimonial_section_sub_title_color', array(
				'label' => __( 'Sub title color', 'emanon' ),
				'section' => 'emanon_testimonial_section',
				'settings' => 'testimonial_section_sub_title_color',
				'priority' => 30,
			) ) );

			// Text color
			$wp_customize->add_setting( 'testimonial_section_text_color', array(
				'default' => '#303030',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'testimonial_section_text_color', array(
				'label' => __( 'Text color', 'emanon' ),
				'section' => 'emanon_testimonial_section',
				'settings' => 'testimonial_section_text_color',
				'priority' => 31,
			) ) );

			// Testimonial balloon background color
			$wp_customize->add_setting( 'testimonial_balloon_background_color', array(
				'default' => '#fcfcfc',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'testimonial_balloon_background_color', array(
				'label' => __( 'Testimonial balloon background color', 'emanon' ),
				'section' => 'emanon_testimonial_section',
				'settings' => 'testimonial_balloon_background_color',
				'priority' => 32,
			) ) );

			// Testimonial balloon text color
			$wp_customize->add_setting( 'testimonial_balloon_text_color', array(
				'default' => '#303030',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'testimonial_balloon_text_color', array(
				'label' => __( 'Testimonial balloon text color', 'emanon' ),
				'section' => 'emanon_testimonial_section',
				'settings' => 'testimonial_balloon_text_color',
				'priority' => 33,
			) ) );

		/*------------------------------------------------------------------------------------
		/* Offer section
		/*----------------------------------------------------------------------------------*/
		$wp_customize->add_section( 'emanon_offer_section', array (
			'title' => __( 'Offer section settings', 'emanon' ),
			'priority' => 11,
			'panel' => 'emanon_landing_page_settings',
		) );

			// Display offer section
			$wp_customize->add_setting( 'display_offer_section', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_offer_section', array(
				'label' =>__( 'Display offer section', 'emanon' ),
				'section' => 'emanon_offer_section',
				'settings' => 'display_offer_section',
				'type' => 'checkbox',
				'priority' => 1,
			) );

			// Offer section title
			$wp_customize->add_setting( 'offer_title', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'offer_title', array(
				'label' => __( 'Title', 'emanon' ),
				'section' => 'emanon_offer_section',
				'settings' => 'offer_title',
				'type' => 'text',
				'priority' => 2,
			) );

			// Offer section description
			$wp_customize->add_setting( 'offer_text', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( new Customize_Textarea_Control( $wp_customize, 'offer_text', array(
				'label' => __( 'Description', 'emanon' ),
				'section' => 'emanon_offer_section',
				'settings' => 'offer_text',
				'priority' => 3,
			) ) );

			// Offer main image
			$wp_customize->add_setting( 'offer_main_img', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'offer_main_img', array (
				'label' => __( 'Main Image', 'emanon' ),
				'description' => __( 'The minimum size of the image is the width 420px.', 'emanon' ),
				'section' => 'emanon_offer_section',
				'settings' => 'offer_main_img',
				'priority' => 4,
			) ) );

			// Fontawesome Icon[1]
			$wp_customize->add_setting( 'offer_icon_1', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'offer_icon_1', array (
				'label' => __( 'Icon[1]', 'emanon' ),
				'description' => sprintf('%1$s <a href="https://fontawesome.com/v4.7.0/icons/" target="_blank">%2$s</a>',
						__( "Fontawesome Icon Click" , 'emanon' ),
						__( "here" , 'emanon') ),
				'section' => 'emanon_offer_section',
				'settings' => 'offer_icon_1',
				'type' => 'text',
				'priority' => 5,
			) );

			// Offer image[1]
			$wp_customize->add_setting( 'offer_img_1', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'offer_img_1', array (
				'label' => __( 'Image[1]', 'emanon' ),
				'description' => __( 'The minimum size of the image is the width 48px height 48px.', 'emanon' ),
				'section' => 'emanon_offer_section',
				'settings' => 'offer_img_1',
				'priority' => 6,
			) ) );

			// Offer sub title[1]
			$wp_customize->add_setting( 'offer_sub_title_1',array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			));
			
			$wp_customize->add_control( 'offer_sub_title_1',array(
				'label' => __( 'Offer sub title[1]','emanon'),
				'section' => 'emanon_offer_section',
				'settings' => 'offer_sub_title_1',
				'type' => 'text',
				'priority' => 7,
			));

			// Offer sub text[1]
			$wp_customize->add_setting( 'offer_sub_text_1', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( new Customize_Textarea_Control( $wp_customize, 'offer_sub_text_1', array(
				'label' => __( 'Offer sub text[1]', 'emanon' ),
				'section' => 'emanon_offer_section',
				'settings' => 'offer_sub_text_1',
				'priority' => 8,
			) ) );

			// Fontawesome Icon[2]
			$wp_customize->add_setting( 'offer_icon_2', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'offer_icon_2', array (
				'label' => __( 'Icon[2]', 'emanon' ),
				'description' => sprintf('%1$s <a href="https://fontawesome.com/v4.7.0/icons/" target="_blank">%2$s</a>',
						__( "Fontawesome Icon Click" , 'emanon' ),
						__( "here" , 'emanon') ),
				'section' => 'emanon_offer_section',
				'settings' => 'offer_icon_2',
				'type' => 'text',
				'priority' => 9,
			) );

			// Offer image[2]
			$wp_customize->add_setting( 'offer_img_2', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'offer_img_2', array (
				'label' => __( 'Image[2]', 'emanon' ),
				'description' => __( 'The minimum size of the image is the width 48px height 48px.', 'emanon' ),
				'section' => 'emanon_offer_section',
				'settings' => 'offer_img_2',
				'priority' => 10,
			) ) );

			// Offer sub title[2]
			$wp_customize->add_setting( 'offer_sub_title_2',array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			));

			$wp_customize->add_control( 'offer_sub_title_2',array(
				'label' => __( 'Offer sub title[2]','emanon'),
				'section' => 'emanon_offer_section',
				'settings' => 'offer_sub_title_2',
				'type' => 'text',
				'priority' => 11,
			));

			// Offer sub text[2]
			$wp_customize->add_setting( 'offer_sub_text_2', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( new Customize_Textarea_Control( $wp_customize, 'offer_sub_text_2', array(
				'label' => __( 'Offer sub text[2]', 'emanon' ),
				'section' => 'emanon_offer_section',
				'settings' => 'offer_sub_text_2',
				'priority' => 12,
			) ) );

			// Fontawesome Icon[3]
			$wp_customize->add_setting( 'offer_icon_3', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'offer_icon_3', array (
				'label' => __( 'Icon[3]', 'emanon' ),
				'description' => sprintf('%1$s <a href="https://fontawesome.com/v4.7.0/icons/" target="_blank">%2$s</a>',
						__( "Fontawesome Icon Click" , 'emanon' ),
						__( "here" , 'emanon') ),
				'section' => 'emanon_offer_section',
				'settings' => 'offer_icon_3',
				'type' => 'text',
				'priority' => 13,
			) );

			// Offer image[3]
			$wp_customize->add_setting( 'offer_img_3', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'offer_img_3', array (
				'label' => __( 'Image[3]', 'emanon' ),
				'description' => __( 'The minimum size of the image is the width 48px height 48px.', 'emanon' ),
				'section' => 'emanon_offer_section',
				'settings' => 'offer_img_3',
				'priority' => 14,
			) ) );

			// Offer sub title[3]
			$wp_customize->add_setting( 'offer_sub_title_3',array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			));

			$wp_customize->add_control( 'offer_sub_title_3',array(
				'label' => __( 'Offer sub title[3]','emanon'),
				'section' => 'emanon_offer_section',
				'settings' => 'offer_sub_title_3',
				'type' => 'text',
				'priority' => 15,
			));

			// Offer sub text[3]
			$wp_customize->add_setting( 'offer_sub_text_3', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( new Customize_Textarea_Control( $wp_customize, 'offer_sub_text_3', array(
				'label' => __( 'Offer sub text[3]', 'emanon' ),
				'section' => 'emanon_offer_section',
				'settings' => 'offer_sub_text_3',
				'type' => 'text',
				'priority' => 16,
			) ) );

			// Item
			$wp_customize->add_setting( 'offer_item', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'offer_item', array(
				'label' => __( 'Item', 'emanon' ),
				'section' => 'emanon_offer_section',
				'settings' => 'offer_item',
				'type' => 'text',
				'priority' => 17,
			) );

			// Price
			$wp_customize->add_setting( 'offer_item_price', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'offer_item_price', array(
				'label' => __( 'Price', 'emanon' ),
				'section' => 'emanon_offer_section',
				'settings' => 'offer_item_price',
				'type' => 'text',
				'priority' => 18,
			) );

			// Features
		 $wp_customize->add_setting( 'offer_item_features', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( new Customize_Textarea_Control( $wp_customize, 'offer_item_features', array(
				'label' => __( 'Features', 'emanon' ),
				'section' => 'emanon_offer_section',
				'settings' => 'offer_item_features',
				'type' => 'text',
				'priority' => 19,
			) ) );

			// Background color
			$wp_customize->add_setting( 'offer_section_background_color', array(
				'default' => '#f8f8f8',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'offer_section_background_color', array(
				'label' => __( 'Background color', 'emanon' ),
				'section' => 'emanon_offer_section',
				'settings' => 'offer_section_background_color',
				'priority' => 20,
			) ) );

			// Title color
			$wp_customize->add_setting( 'offer_section_title_color', array(
				'default' => '#000c15',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'offer_section_title_color', array(
				'label' => __( 'Title color', 'emanon' ),
				'section' => 'emanon_offer_section',
				'settings' => 'offer_section_title_color',
				'priority' => 21,
			) ) );

			// Sub title color
			$wp_customize->add_setting( 'offer_section_sub_title_color', array(
				'default' => '#000c15',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'offer_section_sub_title_color', array(
				'label' => __( 'Sub title color', 'emanon' ),
				'section' => 'emanon_offer_section',
				'settings' => 'offer_section_sub_title_color',
				'priority' => 21,
			) ) );

			// Text color
			$wp_customize->add_setting( 'offer_section_text_color', array(
				'default' => '#303030',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'offer_section_text_color', array(
				'label' => __( 'Text color', 'emanon' ),
				'section' => 'emanon_offer_section',
				'settings' => 'offer_section_text_color',
				'priority' => 23,
			) ) );

			// Icon color
			$wp_customize->add_setting( 'offer_section_icon_color', array(
				'default' => '#9b8d77',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'offer_section_icon_color', array(
				'label' => __( 'Icon color', 'emanon' ),
				'section' => 'emanon_offer_section',
				'settings' => 'offer_section_icon_color',
				'priority' => 24,
			) ) );

			// Item background color
			$wp_customize->add_setting( 'offer_section_item_background_color', array(
				'default' => '#b5b5b5',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'offer_section_item_background_color', array(
				'label' => __( 'Item background color', 'emanon' ),
				'section' => 'emanon_offer_section',
				'settings' => 'offer_section_item_background_color',
				'priority' => 25,
			) ) );

			// Item color
			$wp_customize->add_setting( 'offer_section_item_color', array(
				'default' => '#fff',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'offer_section_item_color', array(
				'label' => __( 'Item color', 'emanon' ),
				'section' => 'emanon_offer_section',
				'settings' => 'offer_section_item_color',
				'priority' => 26,
			) ) );

			// Item price background color
			$wp_customize->add_setting( 'offer_section_item_price_background_color', array(
				'default' => '#fff',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'offer_section_item_price_background_color', array(
				'label' => __( 'Item price background color', 'emanon' ),
				'section' => 'emanon_offer_section',
				'settings' => 'offer_section_item_price_background_color',
				'priority' => 27,
			) ) );

			// Item price color
			$wp_customize->add_setting( 'offer_section_item_price_color', array(
				'default' => '#000c15',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'offer_section_item_price_color', array(
				'label' => __( 'Item price color', 'emanon' ),
				'section' => 'emanon_offer_section',
				'settings' => 'offer_section_item_price_color',
				'priority' => 28,
			) ) );

		/*------------------------------------------------------------------------------------
		/* Benefits Section
		/*----------------------------------------------------------------------------------*/
		$wp_customize->add_section( 'emanon_benefits_section', array (
			'title' => __( 'Benefits section settings', 'emanon' ),
			'priority' => 12,
			'panel' => 'emanon_landing_page_settings',
		) );

			// Display benefits section
			$wp_customize->add_setting( 'display_benefits_section', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_benefits_section', array(
				'label' =>__( 'Display Benefits section', 'emanon' ),
				'section' => 'emanon_benefits_section',
				'settings' => 'display_benefits_section',
				'type' => 'checkbox',
				'priority' => 1,
			) );

			// Benefits section title
			$wp_customize->add_setting( 'benefits_title', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'benefits_title', array(
				'label' => __( 'Title', 'emanon' ),
				'section' => 'emanon_benefits_section',
				'settings' => 'benefits_title',
				'type' => 'text',
				'priority' => 2,
			) );

			// Benefits section description
			$wp_customize->add_setting( 'benefits_text', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( new Customize_Textarea_Control( $wp_customize, 'benefits_text', array(
				'label' => __( 'Description', 'emanon' ),
				'section' => 'emanon_benefits_section',
				'settings' => 'benefits_text',
				'priority' => 3,
			) ) );

			// Benefits title[1]
			$wp_customize->add_setting( 'benefits_1', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'benefits_1', array(
				'label' => __( 'Benefits[1]', 'emanon' ),
				'section' => 'emanon_benefits_section',
				'settings' => 'benefits_1',
				'type' => 'text',
				'priority' => 4,
			) );

			// Benefits title[2]
			$wp_customize->add_setting( 'benefits_2', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'benefits_2', array(
				'label' => __( 'Benefits[2]', 'emanon' ),
				'section' => 'emanon_benefits_section',
				'settings' => 'benefits_2',
				'type' => 'text',
				'priority' => 5,
			) );

			// Benefits title[3]
			$wp_customize->add_setting( 'benefits_3', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'benefits_3', array(
				'label' => __( 'Benefits[3]', 'emanon' ),
				'section' => 'emanon_benefits_section',
				'settings' => 'benefits_3',
				'type' => 'text',
				'priority' => 6,
			) );

			// Benefits title[4]
			$wp_customize->add_setting( 'benefits_4', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'benefits_4', array(
				'label' => __( 'Benefits[4]', 'emanon' ),
				'section' => 'emanon_benefits_section',
				'settings' => 'benefits_4',
				'type' => 'text',
				'priority' => 7,
			) );

			// Benefits title[5]
			$wp_customize->add_setting( 'benefits_5', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'benefits_5', array(
				'label' => __( 'Benefits[5]', 'emanon' ),
				'section' => 'emanon_benefits_section',
				'settings' => 'benefits_5',
				'type' => 'text',
				'priority' => 8,
			) );

			// Benefits title[6]
			$wp_customize->add_setting( 'benefits_6', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'benefits_6', array(
				'label' => __( 'Benefits[6]', 'emanon' ),
				'section' => 'emanon_benefits_section',
				'settings' => 'benefits_6',
				'type' => 'text',
				'priority' => 9,
			) );

			// Fontawesome Icon [List]
			$wp_customize->add_setting( 'benefits_section_icon', array(
				'default' => 'fa fa-check-square-o',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'benefits_section_icon', array (
				'label' => __( 'List icon', 'emanon' ),
				'description' => sprintf('%1$s <a href="https://fontawesome.com/v4.7.0/icons/" target="_blank">%2$s</a>',
						__( "Font Awesome Icon Click" , 'emanon' ),
						__( "here" , 'emanon') ),
				'section' => 'emanon_benefits_section',
				'settings' => 'benefits_section_icon',
				'type' => 'text',
				'priority' => 10,
			) );

			// Benefits background color
			$wp_customize->add_setting( 'benefits_section_background_color', array(
				'default' => '#fff',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'benefits_section_background_color', array(
				'label' => __( 'Benefits background color', 'emanon' ),
				'section' => 'emanon_benefits_section',
				'settings' => 'benefits_section_background_color',
				'priority' => 11,
			) ) );

			// Title color
			$wp_customize->add_setting( 'benefits_section_title_color', array(
				'default' => '#000c15',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'benefits_section_title_color', array(
				'label' => __( 'Title color', 'emanon' ),
				'section' => 'emanon_benefits_section',
				'settings' => 'benefits_section_title_color',
				'priority' => 12,
			) ) );

			// Sub title color
			$wp_customize->add_setting( 'benefits_section_sub_title_color', array(
				'default' => '#303030',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'benefits_section_sub_title_color', array(
				'label' => __( 'Sub title color', 'emanon' ),
				'section' => 'emanon_benefits_section',
				'settings' => 'benefits_section_sub_title_color',
				'priority' => 13,
			) ) );

			// Text box background color
			$wp_customize->add_setting( 'benefits_textbox_background_color', array(
				'default' => '#fff',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'benefits_textbox_background_color', array(
				'label' => __( 'Text box background color', 'emanon' ),
				'section' => 'emanon_benefits_section',
				'settings' => 'benefits_textbox_background_color',
				'priority' => 14,
			) ) );

			// Text color
			$wp_customize->add_setting( 'benefits_section_text_color', array(
				'default' => '#303030',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'benefits_section_text_color', array(
				'label' => __( 'Text color', 'emanon' ),
				'section' => 'emanon_benefits_section',
				'settings' => 'benefits_section_text_color',
				'priority' => 15,
			) ) );

			// Icon color
			$wp_customize->add_setting( 'benefits_section_icon_color', array(
				'default' => '#b5b5b5',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'benefits_section_icon_color', array(
				'label' => __( 'Icon color', 'emanon' ),
				'section' => 'emanon_benefits_section',
				'settings' => 'benefits_section_icon_color',
				'priority' => 16,
			) ) );

		/*------------------------------------------------------------------------------------
		/* Closing section
		/*----------------------------------------------------------------------------------*/
		$wp_customize->add_section( 'emanon_closing_section', array (
			'title' => __( 'Closing section settings', 'emanon' ),
			'priority' => 13,
			'panel' => 'emanon_landing_page_settings',
		) );

			// Display closing section
			$wp_customize->add_setting( 'display_closing_section', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_closing_section', array(
				'label' =>__( 'Display closing section', 'emanon' ),
				'section' => 'emanon_closing_section',
				'settings' => 'display_closing_section',
				'type' => 'checkbox',
				'priority' => 1,
			) );

			// Closing section image
			$wp_customize->add_setting( 'closing_section_image', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'closing_section_image', array (
				'label' => __( 'Image', 'emanon' ),
				'description' => __( 'The minimum size of the image is the width 1920px height 400px.', 'emanon' ),
				'section' => 'emanon_closing_section',
				'settings' => 'closing_section_image',
				'priority' => 2,
			) ) );

			// Closing section title
			$wp_customize->add_setting( 'closing_section_title', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'closing_section_title', array(
				'label' => __( 'Title', 'emanon' ),
				'section' => 'emanon_closing_section',
				'settings' => 'closing_section_title',
				'type' => 'text',
				'priority' => 3,
			) );

			// Closing section title color
			$wp_customize->add_setting( 'closing_section_title_color', array(
				'default' => '#fff',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'closing_section_title_color', array(
				'label' => __( 'Title color', 'emanon' ),
				'section' => 'emanon_closing_section',
				'settings' => 'closing_section_title_color',
				'priority' => 4,
			) ) );

			// Closing section background color start
			$wp_customize->add_setting( 'closing_section_background_color_start', array(
				'default' => '#000',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'closing_section_background_color_start', array(
				'label' => __( 'Background color ［start］', 'emanon' ),
				'section' => 'emanon_closing_section',
				'settings' => 'closing_section_background_color_start',
				'priority' => 5,
			) ) );

			// Closing section background color end
			$wp_customize->add_setting( 'closing_section_background_color_end', array(
				'default' => '#000',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'closing_section_background_color_end', array(
				'label' => __( 'Background color ［end］', 'emanon' ),
				'section' => 'emanon_closing_section',
				'settings' => 'closing_section_background_color_end',
				'priority' => 6,
			) ) );

			// Closing section background color degree
			$wp_customize->add_setting( 'closing_section_background_color_degree', array(
				'default' =>135,
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_number',
			) );
			$wp_customize->add_control( 'closing_section_background_color_degree', array(
				'label' => __( 'Degree', 'emanon' ),
				'section' => 'emanon_closing_section',
				'settings' => 'closing_section_background_color_degree',
				'type' => 'number',
				'priority' => 7,
			) );

			// Closing section overlay pattern
			$wp_customize->add_setting( 'closing_section_display_overlay', array(
				'default' => 'pattern_none',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_overlay_pattern_type',
			) );
			$wp_customize->add_control( 'closing_section_display_overlay', array(
				'label' =>__( 'Dsplay overlay pattern', 'emanon' ),
				'section' => 'emanon_closing_section',
				'settings' => 'closing_section_display_overlay',
				'type' => 'radio',
				'choices' => array(
					'pattern_none' => __( 'None display pattern', 'emanon' ),
					'pattern_dots' => __( 'Display display pattern dots', 'emanon' ),
					'pattern_diamond' => __( 'Display pattern diamond', 'emanon' ),
					),
				'priority' => 8,
			) );

			// Closing section color opacity
			$wp_customize->add_setting( 'closing_section_background_opacity', array(
				'default' => 0,
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_rangeslider'
			) );
			$wp_customize->add_control( 'closing_section_background_opacity', array(
				'label' => __( 'Closing section background color opacity', 'emanon' ),
				'section' => 'emanon_closing_section',
				'settings' => 'closing_section_background_opacity',
				'type' => 'range',
					'input_attrs' => array(
					'min' => 0,
					'max' => 1,
					'step' => 0.05,
					),
				'priority' => 9,
			) );

		/*------------------------------------------------------------------------------------
		/* Calls To Action Contact Section
		/*----------------------------------------------------------------------------------*/
		$wp_customize->add_section( 'emanon_cta_section', array (
			'title' => __( 'Calls to action section［Contact Form］settings', 'emanon' ),
			'priority' => 14,
			'panel' => 'emanon_landing_page_settings',
		) );

			// Display CTA landing page section
			$wp_customize->add_setting( 'display_cta_lp', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_cta_lp', array(
				'label'	 => __( 'Display CTA for landing page', 'emanon' ),
				'section' => 'emanon_cta_section',
				'settings' => 'display_cta_lp',
				'type' => 'checkbox',
				'priority' => 1,
			) );

			// Fontawesome Icon
			$wp_customize->add_setting( 'cta_lp_icon', array(
				'default' => 'fa fa-envelope-o',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'cta_lp_icon', array (
				'label' => __( 'CTA landing page icon', 'emanon' ),
				'description' => sprintf('%1$s <a href=" https://fontawesome.com/v4.7.0/icons/" target="_blank">%2$s</a>',
						__( "Font Awesome Icon Click" , 'emanon' ),
						__( "here" , 'emanon') ),
				'section' => 'emanon_cta_section',
				'settings' => 'cta_lp_icon',
				'type' => 'text',
				'priority' => 2,
			) );

			// CTA landing page title
			$wp_customize->add_setting( 'cta_lp_title', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'cta_lp_title', array(
				'label' => __( 'Title', 'emanon' ),
				'section' => 'emanon_cta_section',
				'settings' => 'cta_lp_title',
				'type' => 'text',
				'priority' => 3,
			) );

			// CTA landing page text
			$wp_customize->add_setting( 'cta_lp_sub_title', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( new Customize_Textarea_Control( $wp_customize, 'cta_lp_sub_title', array(
				'label' => __( 'Sub title', 'emanon' ),
				'section' => 'emanon_cta_section',
				'settings' => 'cta_lp_sub_title',
				'priority' => 4,
			) ) );

			// CTA landing page btn url
			$wp_customize->add_setting( 'cta_lp_btn_url', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control( 'cta_lp_btn_url', array(
				'label' => __( 'CTA landing page button url', 'emanon' ),
				'section' => 'emanon_cta_section',
				'settings' => 'cta_lp_btn_url',
				'type' => 'url',
				'priority' => 5,
			) );

			// CTA landing page btn text
			$wp_customize->add_setting( 'cta_lp_btn_text', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'cta_lp_btn_text', array(
				'label' => __( 'CTA landing page button text', 'emanon' ),
				'section' => 'emanon_cta_section',
				'settings' => 'cta_lp_btn_text',
				'type' => 'text',
				'priority' => 6,
			) );

			// Contact form7
			$wp_customize->add_setting( 'cta_lp_contactform7', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'cta_lp_contactform7', array(
				'label' => __( 'Contact Form7', 'emanon' ),
				'description' => __( 'Input short code example [contact-form-7 id="XXXX" title="XXXXX"]', 'emanon' ),
				'section' => 'emanon_cta_section',
				'settings' => 'cta_lp_contactform7',
				'type' => 'text',
				'priority' => 7,
			) );
	
			// Background color
			$wp_customize->add_setting( 'cta_lp_section_background_color', array(
				'default' => '#fff',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cta_lp_section_background_color', array(
				'label' => __( 'Background color', 'emanon' ),
				'section' => 'emanon_cta_section',
				'settings' => 'cta_lp_section_background_color',
				'priority' => 8,
			) ) );

			// Contactform background color
			$wp_customize->add_setting( 'cta_lp_contactform_background_color', array(
				'default' => '#fff',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cta_lpcontactform_background_color', array(
				'label' => __( 'Contact form background color', 'emanon' ),
				'section' => 'emanon_cta_section',
				'settings' => 'cta_lp_contactform_background_color',
				'priority' => 9,
			) ) );

			// Icon color
			$wp_customize->add_setting( 'cta_lp_icon_color', array(
				'default' => '#b5b5b5',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cta_lp_icon_color', array(
				'label' => __( 'Icon color', 'emanon' ),
				'section' => 'emanon_cta_section',
				'settings' => 'cta_lp_icon_color',
				'priority' => 10,
			) ) );

			// Title color
			$wp_customize->add_setting( 'cta_lp_title_color', array(
				'default' => '#000c15',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cta_lp_title_color', array(
				'label' => __( 'Title color', 'emanon' ),
				'section' => 'emanon_cta_section',
				'settings' => 'cta_lp_title_color',
				'priority' => 11,
			) ) );

			// Sub title color
			$wp_customize->add_setting( 'cta_lp_sub_title_color', array(
				'default' => '#303030',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cta_lp_sub_title_color', array(
				'label' => __( 'Sub title color', 'emanon' ),
				'section' => 'emanon_cta_section',
				'settings' => 'cta_lp_sub_title_color',
				'priority' => 12,
			) ) );

			// Text color
			$wp_customize->add_setting( 'cta_lp_text_color', array(
				'default' => '#303030',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cta_lp_text_color', array(
				'label' => __( 'Text color', 'emanon' ),
				'section' => 'emanon_cta_section',
				'settings' => 'cta_lp_text_color',
				'priority' => 13,
			) ) );

			// Button background color
			$wp_customize->add_setting( 'cta_lp_btn_background_color', array(
				'default' => '#9b8d77',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cta_lp_btn_background_color', array(
				'label' => __( 'Button background color', 'emanon' ),
				'section' => 'emanon_cta_section',
				'settings' => 'cta_lp_btn_background_color',
				'priority' => 14,
			) ) );

			// Button text color
			$wp_customize->add_setting( 'cta_lp_btn_text_color', array(
				'default' => '#fff',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cta_lp_btn_text_color', array(
				'label' => __( 'Button text color', 'emanon' ),
				'section' => 'emanon_cta_section',
				'settings' => 'cta_lp_btn_text_color',
				'priority' => 15,
			) ) );

			// Background Image
			$wp_customize->add_setting( 'cta_lp_section_background_image', array(
				'default' => get_template_directory_uri() . '/lib/images/graphy.png',
				'type' => 'theme_mod',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'cta_lp_section_background_image', array (
				'label' => __( 'CTA background Image', 'emanon' ),
				'section' => 'emanon_cta_section',
				'settings' => 'cta_lp_section_background_image',
				'type' => 'image',
				'priority' => 16,
			) ) );

		/*------------------------------------------------------------------------------------
		/* FAQ Section
		/*----------------------------------------------------------------------------------*/
		$wp_customize->add_section( 'emanon_faq_section', array (
			'title' => __( 'FAQ section settings', 'emanon' ),
			'priority' => 15,
			'panel' => 'emanon_landing_page_settings',
		));

			// Display faq section
			$wp_customize->add_setting( 'display_faq_section', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_faq_section', array(
				'label' =>__( 'Display faq section', 'emanon' ),
				'section' => 'emanon_faq_section',
				'settings' => 'display_faq_section',
				'type' => 'checkbox',
				'priority' => 1,
			) );

			// FAQ title
			$wp_customize->add_setting( 'faq_section_title', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'faq_section_title', array(
				'label' => __( 'Title', 'emanon' ),
				'section' => 'emanon_faq_section',
				'settings' => 'faq_section_title',
				'type' => 'text',
				'priority' => 2,
			) );

			// FAQ sub title
			$wp_customize->add_setting( 'faq_section_sub_title', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( new Customize_Textarea_Control( $wp_customize, 'faq_section_sub_title', array(
				'label' => __( 'Sub title', 'emanon' ),
				'section' => 'emanon_faq_section',
				'settings' => 'faq_section_sub_title',
				'priority' => 3,
			) ) );

			// Question title[1]
			$wp_customize->add_setting( 'question_1', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'question_1', array(
				'label' => __( 'Question[1]', 'emanon' ),
				'section' => 'emanon_faq_section',
				'settings' => 'question_1',
				'type' => 'text',
				'priority' => 4,
			) );

			// Answer[1]
			$wp_customize->add_setting( 'answer_1', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( new Customize_Textarea_Control( $wp_customize, 'answer_1', array(
				'label' => __( 'Answer[1]', 'emanon' ),
				'section' => 'emanon_faq_section',
				'settings' => 'answer_1',
				'priority' => 5,
			) ) );

			// Question title[2]
			$wp_customize->add_setting( 'question_2', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'question_2', array(
				'label' => __( 'Question[2]', 'emanon' ),
				'section' => 'emanon_faq_section',
				'settings' => 'question_2',
				'type' => 'text',
				'priority' => 10,
			) );

			// Answer[2]
			$wp_customize->add_setting( 'answer_2', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( new Customize_Textarea_Control( $wp_customize, 'answer_2', array(
				'label' => __( 'Answer[2]', 'emanon' ),
				'section' => 'emanon_faq_section',
				'settings' => 'answer_2',
				'priority' => 11,
			) ) );

			// Question title[3]
			$wp_customize->add_setting( 'question_3', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'question_3', array(
				'label' => __( 'Question[3]', 'emanon' ),
				'section' => 'emanon_faq_section',
				'settings' => 'question_3',
				'type' => 'text',
				'priority' => 12,
			) );

			// Answer[3]
			$wp_customize->add_setting( 'answer_3', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( new Customize_Textarea_Control( $wp_customize, 'answer_3', array(
				'label' => __( 'Answer[3]', 'emanon' ),
				'section' => 'emanon_faq_section',
				'settings' => 'answer_3',
				'priority' => 13,
			) ) );

			// Question title[4]
			$wp_customize->add_setting( 'question_4', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'question_4', array(
				'label' => __( 'Question[4]', 'emanon' ),
				'section' => 'emanon_faq_section',
				'settings' => 'question_4',
				'type' => 'text',
				'priority' => 14,
			) );

			// Answer[4]
			$wp_customize->add_setting( 'answer_4', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( new Customize_Textarea_Control( $wp_customize, 'answer_4', array(
				'label' => __( 'Answer[4]', 'emanon' ),
				'section' => 'emanon_faq_section',
				'settings' => 'answer_4',
				'priority' => 15,
			) ) );

			// Question title[5]
			$wp_customize->add_setting( 'question_5', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'question_5', array(
				'label' => __( 'Question[5]', 'emanon' ),
				'section' => 'emanon_faq_section',
				'settings' => 'question_5',
				'type' => 'text',
				'priority' => 16,
			) );

			// Answer[5]
			$wp_customize->add_setting( 'answer_5', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( new Customize_Textarea_Control( $wp_customize, 'answer_5', array(
				'label' => __( 'Answer[5]', 'emanon' ),
				'section' => 'emanon_faq_section',
				'settings' => 'answer_5',
				'priority' => 17,
			) ) );

			// Question title[6]
			$wp_customize->add_setting( 'question_6', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'question_6', array(
				'label' => __( 'Question[6]', 'emanon' ),
				'section' => 'emanon_faq_section',
				'settings' => 'question_6',
				'type' => 'text',
				'priority' => 18,
			) );

			// Answer[6]
			$wp_customize->add_setting( 'answer_6', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( new Customize_Textarea_Control( $wp_customize, 'answer_6', array(
				'label' => __( 'Answer[6]', 'emanon' ),
				'section' => 'emanon_faq_section',
				'settings' => 'answer_6',
				'priority' => 19,
			) ) );

			// Background color
			$wp_customize->add_setting( 'faq_section_background_color', array(
				'default' => '#fff',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'faq_section_background_color', array(
				'label' => __( 'Background color', 'emanon' ),
				'section' => 'emanon_faq_section',
				'settings' => 'faq_section_background_color',
				'priority' => 20,
			) ) );

			// Title color
			$wp_customize->add_setting( 'faq_title_color', array(
				'default' => '#000c15',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'faq_title_color', array(
				'label' => __( 'Title color', 'emanon' ),
				'section' => 'emanon_faq_section',
				'settings' => 'faq_title_color',
				'priority' => 21,
			) ) );

			// Sub title color
			$wp_customize->add_setting( 'faq_sub_title_color', array(
				'default' => '#303030',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'faq_sub_title_color', array(
				'label' => __( 'Sub title color', 'emanon' ),
				'section' => 'emanon_faq_section',
				'settings' => 'faq_sub_title_color',
				'priority' => 22,
			) ) );

			// Text color
			$wp_customize->add_setting( 'faq_section_text_color', array(
				'default' => '#303030',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'faq_section_text_color', array(
				'label' => __( 'Text color', 'emanon' ),
				'section' => 'emanon_faq_section',
				'settings' => 'faq_section_text_color',
				'priority' => 23,
			) ) );

			// Question Icon color
			$wp_customize->add_setting( 'faq_section_q_icon_color', array(
				'default' => '#9b8d77',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'faq_section_q_icon_color', array(
				'label' => __( 'Question icon color', 'emanon' ),
				'section' => 'emanon_faq_section',
				'settings' => 'faq_section_q_icon_color',
				'priority' => 24,
			) ) );

			// Answer Icon color
			$wp_customize->add_setting( 'faq_section_a_icon_color', array(
				'default' => '#b5b5b5',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'faq_section_a_icon_color', array(
				'label' => __( 'Answer icon color', 'emanon' ),
				'section' => 'emanon_faq_section',
				'settings' => 'faq_section_a_icon_color',
				'priority' => 25,
			) ) );

		/*------------------------------------------------------------------------------------
		/* Postscript section
		/*----------------------------------------------------------------------------------*/
		$wp_customize->add_section( 'emanon_postscript_section', array (
			'title' => __( 'Postscript section settings', 'emanon' ),
			'priority' => 16,
			'panel' => 'emanon_landing_page_settings',
		) );

			// Display postscript section
			$wp_customize->add_setting( 'display_postscript_section', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_postscript_section', array(
				'label' =>__( 'Display postscript section', 'emanon' ),
				'section' => 'emanon_postscript_section',
				'settings' => 'display_postscript_section',
				'type' => 'checkbox',
				'priority' => 1,
			) );

			// Postscript section layout type
			$wp_customize->add_setting( 'postscript_section_layout_type', array(
				'default' => 'postscript_right',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_postscript_layout_type',
			) );
			$wp_customize->add_control( 'postscript_section_layout_type', array(
				'label' => __( 'Postscript layout type', 'emanon' ),
				'section' => 'emanon_postscript_section',
				'settings' => 'postscript_section_layout_type',
				'type' => 'radio',
				'choices' => array(
					'postscript_right' => __( 'Postscript right layout', 'emanon' ),
					'postscript_center' => __( 'Postscript center layout', 'emanon' ),
					'postscript_left' => __( 'Postscript left layout', 'emanon' ),
					),
				'priority' => 2,
			) );

			// Postscript section image
			$wp_customize->add_setting( 'postscript_section_image', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'postscript_section_image', array (
				'label' => __( 'Image', 'emanon' ),
				'description' => __( 'The minimum size of the image is the width 900px.', 'emanon' ),
				'section' => 'emanon_postscript_section',
				'settings' => 'postscript_section_image',
				'priority' => 3,
			) ) );

			// Postscript section title
			$wp_customize->add_setting( 'postscript_section_title', array(
				'default' => __( 'Postscrip', 'emanon' ),
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'postscript_section_title', array(
				'label' => __( 'Title', 'emanon' ),
				'section' => 'emanon_postscript_section',
				'settings' => 'postscript_section_title',
				'type' => 'text',
				'priority' => 4,
			) );

			// Postscript section description
			$wp_customize->add_setting( 'postscript_section_text', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( new Customize_Textarea_Control( $wp_customize, 'postscript_section_text', array(
				'label' => __( 'Description', 'emanon' ),
				'section' => 'emanon_postscript_section',
				'settings' => 'postscript_section_text',
				'priority' => 5,
			) ) );

			// Postscript btn text
			$wp_customize->add_setting( 'postscript_section_btn_text', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'postscript_section_btn_text', array(
				'label' => __( 'postscript button text', 'emanon' ),
				'section' => 'emanon_postscript_section',
				'settings' => 'postscript_section_btn_text',
				'type' => 'text',
				'priority' => 6,
			) );

			// Background color
			$wp_customize->add_setting( 'postscript_section_background_color', array(
				'default' => '#f8f8f8',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'postscript_section_background_color', array(
				'label' => __( 'Background color', 'emanon' ),
				'section' => 'emanon_postscript_section',
				'settings' => 'postscript_section_background_color',
				'priority' => 7,
			) ) );

			// Title color
			$wp_customize->add_setting( 'postscript_section_title_color', array(
				'default' => '#000c15',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'postscript_section_title_color', array(
				'label' => __( 'Title color', 'emanon' ),
				'section' => 'emanon_postscript_section',
				'settings' => 'postscript_section_title_color',
				'priority' => 8,
			) ) );

			// Text color
			$wp_customize->add_setting( 'postscript_section_text_color', array(
				'default' => '#303030',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'postscript_section_text_color', array(
				'label' => __( 'Text color', 'emanon' ),
				'section' => 'emanon_postscript_section',
				'settings' => 'postscript_section_text_color',
				'priority' => 9,
			) ) );

			// Button background color
			$wp_customize->add_setting( 'postscript_section_btn_background_color', array(
				'default' => '#9b8d77',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'postscript_section_btn_background_color', array(
				'label' => __( 'Button background color', 'emanon' ),
				'section' => 'emanon_postscript_section',
				'settings' => 'postscript_section_btn_background_color',
				'priority' => 10,
			) ) );

			// Button text color
			$wp_customize->add_setting( 'postscript_section_btn_text_color', array(
				'default' => '#fff',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'postscript_section_btn_text_color', array(
				'label' => __( 'Button text color', 'emanon' ),
				'section' => 'emanon_postscript_section',
				'settings' => 'postscript_section_btn_text_color',
				'priority' => 11,
			) ) );

		/*------------------------------------------------------------------------------------
		/* Mobile Cta Section
		/*----------------------------------------------------------------------------------*/
		$wp_customize->add_section( 'emanon_mobile_cta_section', array (
			'title' => __( 'Mobile cta section settings', 'emanon' ),
			'priority' => 17,
			'panel' => 'emanon_landing_page_settings',
		) );

			// Display mobile cta section
			$wp_customize->add_setting( 'display_mobile_cta_section', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_mobile_cta_section', array(
				'label' =>__( 'Display mobile cta section', 'emanon' ),
				'section' => 'emanon_mobile_cta_section',
				'settings' => 'display_mobile_cta_section',
				'type' => 'checkbox',
				'priority' => 1,
			) );

			// Mobile cta title[1]
			$wp_customize->add_setting( 'mobile_cta_title_1', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'mobile_cta_title_1', array(
				'label' => __( 'Title[1]', 'emanon' ),
				'description' => __( 'Ex TEL', 'emanon'),
				'section' => 'emanon_mobile_cta_section',
				'settings' => 'mobile_cta_title_1',
				'type' => 'text',
				'priority' => 2,
			) );

			// Mobile cta url[1]
			$wp_customize->add_setting( 'mobile_cta_url_1', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control( 'mobile_cta_url_1', array(
				'label' => __( 'url[1]', 'emanon' ),
				'description' => __( 'Ex tel:0312345678', 'emanon'),
				'section' => 'emanon_mobile_cta_section',
				'settings' => 'mobile_cta_url_1',
				'type' => 'url',
				'priority' => 3,
			) );

			// Fontawesome Icon[1]
			$wp_customize->add_setting( 'mobile_cta_icon_1', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'mobile_cta_icon_1', array (
				'label' => __( 'Icon[1]', 'emanon' ),
				'description' => sprintf('%1$s <a href=" https://fontawesome.com/v4.7.0/icons/" target="_blank">%2$s</a> %3$s',
						__( "Font Awesome Icon Click" , 'emanon' ),
						__( "here" , 'emanon' ),
						__( "Ex fa fa-phone" , 'emanon') ),
				'section' => 'emanon_mobile_cta_section',
				'settings' => 'mobile_cta_icon_1',
				'type' => 'text',
				'priority' => 4,
			) );

			// Mobile cta title[2]
			$wp_customize->add_setting( 'mobile_cta_title_2', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'mobile_cta_title_2', array(
				'label' => __( 'Title[2]', 'emanon' ),
				'description' => __( 'Ex Mail', 'emanon'),
				'section' => 'emanon_mobile_cta_section',
				'settings' => 'mobile_cta_title_2',
				'type' => 'text',
				'priority' => 5,
			) );

			// Mobile cta url[2]
			$wp_customize->add_setting( 'mobile_cta_url_2', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control( 'mobile_cta_url_2', array(
				'label' => __( 'url[2]', 'emanon' ),
				'section' => 'emanon_mobile_cta_section',
				'settings' => 'mobile_cta_url_2',
				'type' => 'url',
				'priority' => 6,
			) );

			// Fontawesome Icon[2]
			$wp_customize->add_setting( 'mobile_cta_icon_2', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'mobile_cta_icon_2', array (
				'label' => __( 'Icon[2]', 'emanon' ),
				'description' => sprintf('%1$s <a href=" https://fontawesome.com/v4.7.0/icons/" target="_blank">%2$s</a> %3$s',
						__( "Font Awesome Icon Click" , 'emanon' ),
						__( "here" , 'emanon' ),
						__( "Ex fa fa-envelope-o" , 'emanon') ),
				'section' => 'emanon_mobile_cta_section',
				'settings' => 'mobile_cta_icon_2',
				'type' => 'text',
				'priority' => 7,
			) );

			// Mobile cta title[3]
			$wp_customize->add_setting( 'mobile_cta_title_3', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'mobile_cta_title_3', array(
				'label' => __( 'Title[3]', 'emanon' ),
				'description' => __( 'Ex Purchase', 'emanon'),
				'section' => 'emanon_mobile_cta_section',
				'settings' => 'mobile_cta_title_3',
				'type' => 'text',
				'priority' => 8,
			) );

			// Mobile cta url[3]
			$wp_customize->add_setting( 'mobile_cta_url_3', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control( 'mobile_cta_url_3', array(
				'label' => __( 'url[3]', 'emanon' ),
				'section' => 'emanon_mobile_cta_section',
				'settings' => 'mobile_cta_url_3',
				'type' => 'url',
				'priority' => 9,
			) );

			// Fontawesome Icon[3]
			$wp_customize->add_setting( 'mobile_cta_icon_3', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'mobile_cta_icon_3', array (
				'label' => __( 'Icon[3]', 'emanon' ),
				'description' => sprintf('%1$s <a href=" https://fontawesome.com/v4.7.0/icons/" target="_blank">%2$s</a> %3$s',
						__( "Font Awesome Icon Click" , 'emanon' ),
						__( "here" , 'emanon' ),
						__( "Ex fa fa-cart-plus" , 'emanon') ),
				'section' => 'emanon_mobile_cta_section',
				'settings' => 'mobile_cta_icon_3',
				'type' => 'text',
				'priority' => 10,
			) );

			// Mobile cta background color[1]
			$wp_customize->add_setting( 'mobile_cta_section_background_color_1', array(
				'default' => '#9b8d77',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mobile_cta_section_background_color_1', array(
				'label' => __( 'Mobile cta background color[1]', 'emanon' ),
				'section' => 'emanon_mobile_cta_section',
				'settings' => 'mobile_cta_section_background_color_1',
				'priority' => 11,
			) ) );

			// Mobile cta text & Icon color[1]
			$wp_customize->add_setting( 'mobile_cta_section_text_color_1', array(
				'default' => '#fff',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mobile_scta_ection_text_color_1', array(
				'label' => __( 'Text & Icon color[1]', 'emanon' ),
				'section' => 'emanon_mobile_cta_section',
				'settings' => 'mobile_cta_section_text_color_1',
				'priority' => 12,
			) ) );

			// Mobile cta background color[2]
			$wp_customize->add_setting( 'mobile_cta_section_background_color_2', array(
				'default' => '#a29581',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mobile_cta_section_background_color_2', array(
				'label' => __( 'Mobile cta background color[2]', 'emanon' ),
				'section' => 'emanon_mobile_cta_section',
				'settings' => 'mobile_cta_section_background_color_2',
				'priority' => 13,
			) ) );

			// Mobile cta text & Icon color[2]
			$wp_customize->add_setting( 'mobile_cta_section_text_color_2', array(
				'default' => '#fff',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mobile_scta_ection_text_color_2', array(
				'label' => __( 'Text & Icon color[2]', 'emanon' ),
				'section' => 'emanon_mobile_cta_section',
				'settings' => 'mobile_cta_section_text_color_2',
				'priority' => 14,
			) ) );

			// Mobile cta background color[3]
			$wp_customize->add_setting( 'mobile_cta_section_background_color_3', array(
				'default' => '#9b8d77',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mobile_cta_section_background_color_3', array(
				'label' => __( 'Mobile cta background color[3]', 'emanon' ),
				'section' => 'emanon_mobile_cta_section',
				'settings' => 'mobile_cta_section_background_color_3',
				'priority' => 15,
			) ) );

			// Mobile cta text & Icon color[3]
			$wp_customize->add_setting( 'mobile_cta_section_text_color_3', array(
				'default' => '#fff',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mobile_scta_ection_text_color_3', array(
				'label' => __( 'Text & Icon color[3]', 'emanon' ),
				'section' => 'emanon_mobile_cta_section',
				'settings' => 'mobile_cta_section_text_color_3',
				'priority' => 16,
			) ) );

		/*------------------------------------------------------------------------------------
		/* Footer Section
		/*----------------------------------------------------------------------------------*/
		$wp_customize->add_section( 'emanon_lp_footer_section', array (
			'title' => __( 'Footer section settings', 'emanon' ),
			'priority' => 18,
			'panel' => 'emanon_landing_page_settings',
		) );

			// Display Footer Section
			$wp_customize->add_setting( 'display_lp_footer_section', array(
				'default' => true,
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_lp_footer_section', array(
				'label' => __( 'Display Footer Section', 'emanon' ),
				'section' => 'emanon_lp_footer_section',
				'settings' => 'display_lp_footer_section',
				'type' => 'checkbox',
				'priority' => 1,
			) );
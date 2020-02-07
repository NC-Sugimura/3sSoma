<?php
/**
* Theme Emanon Pro customizer front page panel
* @package WordPress
* @subpackage Emanon_Pro
* @since Emanon Pro 1.0
*/

	/*------------------------------------------------------------------------------------
	/* Front Page Settings
	/*----------------------------------------------------------------------------------*/
	$wp_customize->add_panel( 'emanon_front_page_settings', array(
	'priority' => 50,
	'capability' => 'edit_theme_options',
	'title' => __( 'Front page settings', 'emanon' ),
	) );

		/*------------------------------------------------------------------------------------
		/* First View Layout
		/*----------------------------------------------------------------------------------*/
		$wp_customize->add_section( 'emanon_firstview_layout', array (
			'title' => __( 'First View layout settings', 'emanon' ),
			'priority' => 1,
			'panel' => 'emanon_front_page_settings',
		) );

			// Front sidebar layout
			$wp_customize->add_setting( 'firstview_layout', array(
				'default' => 'no_display',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_firstview_layout_type',
			) );
			$wp_customize->add_control( 'firstview_layout', array(
				'label' => __( 'First View layout type', 'emanon' ),
				'section' => 'emanon_firstview_layout',
				'settings' => 'firstview_layout',
				'type' => 'radio',
				'choices' => array(
					'slider' => __( 'Slider', 'emanon' ),
					'slider-content' => __( 'Slider Content', 'emanon' ),
					'featured' => __( 'Featured', 'emanon' ),
					'pagebox' => __( 'Page box', 'emanon' ),
					'video' => __( 'Video', 'emanon' ),
					'eyecatch' => __( 'Eye catch', 'emanon' ),
					'no_display' => __( 'No display firstview', 'emanon' ),
					),
				'priority' => 1,
			) );

		/*------------------------------------------------------------------------------------
		/* Slider Section
		/*----------------------------------------------------------------------------------*/
		$wp_customize->add_section( 'emanon_slider_image', array (
			'title' => __( 'Slider section settings', 'emanon' ),
			'description' => __( 'To display the section, you need to set the first view layout.', 'emanon' ),
			'priority' => 2,
			'panel' => 'emanon_front_page_settings',
		) );

			// Slider image responsive
			$wp_customize->add_setting( 'slider_image_responsive', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'slider_image_responsive', array(
				'label' => __( 'Slider image responsive', 'emanon' ),
				'description' => __( 'The height of the image changes according to the screen size. The smartphone image is not displayed.', 'emanon' ),
				'section' => 'emanon_slider_image',
				'settings' => 'slider_image_responsive',
				'type' => 'checkbox',
				'priority' => 1,
			) );

			// Slider image title[1]
			$wp_customize->add_setting( 'slider_title_1', array(
				'default' => __( 'Welcome to Emanon', 'emanon' ),
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'slider_title_1', array(
				'label' => __( 'Title[1]', 'emanon' ),
				'section' => 'emanon_slider_image',
				'settings' => 'slider_title_1',
				'type' => 'text',
				'priority' => 2,
			) );

			// Slider image sub title[1]
			$wp_customize->add_setting( 'slider_sub_title_1', array(
				'default' => __( 'Ready to Start Your Own Business?', 'emanon' ),
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( new Customize_Textarea_Control( $wp_customize, 'slider_sub_title_1', array(
				'label' => __( 'Sub title[1]', 'emanon' ),
				'section' => 'emanon_slider_image',
				'settings' => 'slider_sub_title_1',
				'priority' => 3,
			) ) );

			// Slider image[1]
			$wp_customize->add_setting( 'slider_image_1', array(
				'default' => get_theme_file_uri('/lib/images/emanon-header-img.jpg'),
				'type' => 'theme_mod',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'slider_image_1', array (
				'label' => __( 'Slider image[1]', 'emanon' ),
				'description' => __( 'Image size recommended width 1920px height 500px.', 'emanon' ),
				'section' => 'emanon_slider_image',
				'settings' => 'slider_image_1',
				'priority' => 4,
			) ) );

			// SP slider image[1]
			$wp_customize->add_setting( 'slider_image_sp_1', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'slider_image_sp_1', array (
				'label' => __( 'SP slider image[1]', 'emanon' ),
				'description' => __( 'It is used when you want to change the slider image as seen from a smartphone.', 'emanon' ),
				'section' => 'emanon_slider_image',
				'settings' => 'slider_image_sp_1',
				'priority' => 5,
			) ) );

			// Slider image title[2]
			$wp_customize->add_setting( 'slider_title_2', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'slider_title_2', array(
				'label' => __( 'Title[2]', 'emanon' ),
				'section' => 'emanon_slider_image',
				'settings' => 'slider_title_2',
				'type' => 'text',
				'priority' => 6,
			) );

			// Slider image sub title[2]
			$wp_customize->add_setting( 'slider_sub_title_2', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( new Customize_Textarea_Control( $wp_customize, 'slider_sub_title_2', array(
				'label' => __( 'Sub title[2]', 'emanon' ),
				'section' => 'emanon_slider_image',
				'settings' => 'slider_sub_title_2',
				'priority' => 7,
			) ) );

			// Slider image[2]
			$wp_customize->add_setting( 'slider_image_2', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'slider_image_2', array (
				'label' => __( 'Slider image[2]', 'emanon' ),
				'description' => __( 'Image size recommended width 1920px height 500px.', 'emanon' ),
				'section' => 'emanon_slider_image',
				'settings' => 'slider_image_2',
				'priority' => 8,
			) ) );

			// SP slider image[2]
			$wp_customize->add_setting( 'slider_image_sp_2', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'slider_image_sp_2', array (
				'label' => __( 'SP slider image[2]', 'emanon' ),
				'description' => __( 'It is used when you want to change the slider image as seen from a smartphone.', 'emanon' ),
				'section' => 'emanon_slider_image',
				'settings' => 'slider_image_sp_2',
				'priority' => 9,
			) ) );

			// Slider image title[3]
			$wp_customize->add_setting( 'slider_title_3', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'slider_title_3', array(
				'label' => __( 'Title[3]', 'emanon' ),
				'section' => 'emanon_slider_image',
				'settings' => 'slider_title_3',
				'type' => 'text',
				'priority' => 10,
			) );

			// Slider image sub title[3]
			$wp_customize->add_setting( 'slider_sub_title_3', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( new Customize_Textarea_Control( $wp_customize, 'slider_sub_title_3', array(
				'label' => __( 'Sub title[3]', 'emanon' ),
				'section' => 'emanon_slider_image',
				'settings' => 'slider_sub_title_3',
				'priority' => 11,
			) ) );

			// Slider image[3]
			$wp_customize->add_setting( 'slider_image_3', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'slider_image_3', array (
				'label' => __( 'Slider image[3]', 'emanon' ),
				'description' => __( 'Image size recommended width 1920px height 500px.', 'emanon' ),
				'section' => 'emanon_slider_image',
				'settings' => 'slider_image_3',
				'priority' => 12,
			) ) );

			// SP slider image[3]
			$wp_customize->add_setting( 'slider_image_sp_3', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'slider_image_sp_3', array (
				'label' => __( 'SP slider image[3]', 'emanon' ),
				'description' => __( 'It is used when you want to change the slider image as seen from a smartphone.', 'emanon' ),
				'section' => 'emanon_slider_image',
				'settings' => 'slider_image_sp_3',
				'priority' => 13,
			) ) );

			// Slider image title[4]
			$wp_customize->add_setting( 'slider_title_4', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'slider_title_4', array(
				'label' => __( 'Title[4]', 'emanon' ),
				'section' => 'emanon_slider_image',
				'settings' => 'slider_title_4',
				'type' => 'text',
				'priority' => 14,
			) );

			// Slider image sub title[4]
			$wp_customize->add_setting( 'slider_sub_title_4', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( new Customize_Textarea_Control( $wp_customize, 'slider_sub_title_4', array(
				'label' => __( 'Sub title[4]', 'emanon' ),
				'section' => 'emanon_slider_image',
				'settings' => 'slider_sub_title_4',
				'priority' => 15,
			) ) );

			// Slider image[4]
			$wp_customize->add_setting( 'slider_image_4', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'slider_image_4', array (
				'label' => __( 'Slider image[4]', 'emanon' ),
				'description' => __( 'Image size recommended width 1920px height 500px.', 'emanon' ),
				'section' => 'emanon_slider_image',
				'settings' => 'slider_image_4',
				'priority' => 16,
			) ) );

			// SP slider image[4]
			$wp_customize->add_setting( 'slider_image_sp_4', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'slider_image_sp_4', array (
				'label' => __( 'SP slider image[4]', 'emanon' ),
				'description' => __( 'It is used when you want to change the slider image as seen from a smartphone.', 'emanon' ),
				'section' => 'emanon_slider_image',
				'settings' => 'slider_image_sp_4',
				'priority' => 17,
			) ) );

			// Slider image title[5]
			$wp_customize->add_setting( 'slider_title_5', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'slider_title_5', array(
				'label' => __( 'Title[5]', 'emanon' ),
				'section' => 'emanon_slider_image',
				'settings' => 'slider_title_5',
				'type' => 'text',
				'priority' => 18,
			) );

			// Slider image sub title[5]
			$wp_customize->add_setting( 'slider_sub_title_5', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( new Customize_Textarea_Control( $wp_customize, 'slider_sub_title_5', array(
				'label' => __( 'Sub title[5]', 'emanon' ),
				'section' => 'emanon_slider_image',
				'settings' => 'slider_sub_title_5',
				'priority' => 19,
			) ) );

			// Slider image[5]
			$wp_customize->add_setting( 'slider_image_5', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'slider_image_5', array (
				'label' => __( 'Slider image[5]', 'emanon' ),
				'description' => __( 'Image size recommended width 1920px height 500px.', 'emanon' ),
				'section' => 'emanon_slider_image',
				'settings' => 'slider_image_5',
				'priority' => 20,
			) ) );

			// SP slider image[5]
			$wp_customize->add_setting( 'slider_image_sp_5', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'slider_image_sp_5', array (
				'label' => __( 'SP slider image[5]', 'emanon' ),
				'description' => __( 'It is used when you want to change the slider image as seen from a smartphone.', 'emanon' ),
				'section' => 'emanon_slider_image',
				'settings' => 'slider_image_sp_5',
				'priority' => 21,
			) ) );

			// Slider btn url
			$wp_customize->add_setting( 'slider_btn_url', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control( 'slider_btn_url', array(
				'label' => __( 'Button url', 'emanon' ),
				'section' => 'emanon_slider_image',
				'settings' => 'slider_btn_url',
				'type' => 'url',
				'priority' => 22,
			) );

			// Slider btn text
			$wp_customize->add_setting( 'slider_btn_text', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'slider_btn_text', array(
				'label' => __( 'Button text', 'emanon' ),
				'section' => 'emanon_slider_image',
				'settings' => 'slider_btn_text',
				'type' => 'text',
				'priority' => 23,
			) );

			// Slider message layout type
			$wp_customize->add_setting( 'slider_message_layout_type', array(
				'default' => 'slider_message_center',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_slider_message_layout_type',
			) );
			$wp_customize->add_control( 'slider_message_layout_type', array(
				'label' => __( 'Slider message layout type', 'emanon' ),
				'section' => 'emanon_slider_image',
				'settings' => 'slider_message_layout_type',
				'type' => 'radio',
				'choices' => array(
					'slider_message_left' => __( 'Slider message left layout', 'emanon' ),
					'slider_message_center' => __( 'Slider message center layout', 'emanon' ),
					'slider_message_right' => __( 'Slider message right layout', 'emanon' ),
					),
				'priority' => 24,
			) );

			// Slider image height
			$wp_customize->add_setting( 'slider_image_height', array(
				'default' => 500,
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_number',
			) );
			$wp_customize->add_control( 'slider_image_height', array(
				'label' => __( 'Slider image height (default 500px)', 'emanon' ),
				'description' => __( 'This setting will not work if Slider image responsive is enabled.', 'emanon' ),
				'section' => 'emanon_slider_image',
				'settings' => 'slider_image_height',
				'type' => 'number',
				'input_attrs' => array(
					'min' => 224,
					'max' => 640,
					'step' => 1,
				),
				'priority' => 25,
			) );

			// Slider speed
			$wp_customize->add_setting( 'slider_speed', array(
				'default' => 4000,
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_number',
			) );
			$wp_customize->add_control( 'slider_speed', array(
				'label' => __( 'Slider speed (default 4000)', 'emanon' ),
				'section' => 'emanon_slider_image',
				'type' => 'number',
				'input_attrs' => array(
					'min' => 0,
				),
				'priority' => 26,
			) );

			// Slider animation
			$wp_customize->add_setting( 'slider_animation', array(
				'default' => 'fade',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_slider_animation_type',
			) );
			$wp_customize->add_control( 'slider_animation', array(
				'label' => __( 'Slider animation type', 'emanon' ),
				'section' => 'emanon_slider_image',
				'settings' => 'slider_animation',
				'type' => 'radio',
				'choices' => array(
					'fade' => __( 'Fade', 'emanon' ),
					'horizontal' => __( 'Slide', 'emanon' ),
					),
				'priority' => 27,
			) );

			// Auto slider animation
			$wp_customize->add_setting( 'slider_auto', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'slider_auto', array(
				'label' => __( 'Auto slider animation', 'emanon' ),
				'section' => 'emanon_slider_image',
				'settings' => 'slider_auto',
				'type' => 'checkbox',
				'priority' => 28,
			) );

			// Slider controls
			$wp_customize->add_setting( 'slider_controls', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'slider_controls', array(
				'label' => __( 'Display slider controls', 'emanon' ),
				'section' => 'emanon_slider_image',
				'settings' => 'slider_controls',
				'type' => 'checkbox',
				'priority' => 29,
			) );

			// Slider pager
			$wp_customize->add_setting( 'slider_pager', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'slider_pager', array(
				'label' => __( 'Display slider pager', 'emanon' ),
				'section' => 'emanon_slider_image',
				'settings' => 'slider_pager',
				'type' => 'checkbox',
				'priority' => 30,
			) );

			// Stop text animation
			$wp_customize->add_setting( 'slider_text_stop', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'slider_text_stop', array(
				'label' => __( 'Stop text animation', 'emanon' ),
				'section' => 'emanon_slider_image',
				'settings' => 'slider_text_stop',
				'type' => 'checkbox',
				'priority' => 31,
			) );

			// Slider text animation
			$wp_customize->add_setting( 'slider_text_animation', array(
				'default' => 'fade',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_slider_animation_type',
			) );
			$wp_customize->add_control( 'slider_text_animation', array(
				'label' => __( 'Slider text animation type', 'emanon' ),
				'section' => 'emanon_slider_image',
				'settings' => 'slider_text_animation',
				'type' => 'radio',
				'choices' => array(
					'fade' => __( 'Fade', 'emanon' ),
					'horizontal' => __( 'Slide', 'emanon' ),
					),
				'priority' => 32,
			) );

			// Slider text speed
			$wp_customize->add_setting( 'slider_text_speed', array(
				'default' => 4000,
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_number',
			) );
			$wp_customize->add_control( 'slider_text_speed', array(
				'label' => __( 'Slider text speed (default 4000)', 'emanon' ),
				'section' => 'emanon_slider_image',
				'type' => 'number',
				'input_attrs' => array(
					'min' => 0,
				),
				'priority' => 33,
			) );

			// Text shadow
			$wp_customize->add_setting( 'slider_image_text_shadow', array(
				'default' => true,
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'slider_image_text_shadow', array(
				'label' => __( 'Text shadow', 'emanon' ),
				'section' => 'emanon_slider_image',
				'settings' => 'slider_image_text_shadow',
				'type' => 'checkbox',
				'priority' => 34,
			) );

			// Title colors
			$wp_customize->add_setting( 'slider_image_title_color', array(
				'default' => '#fff',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			));
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'slider_image_title_color', array(
				'label' => __( 'Title colors', 'emanon' ),
				'section' => 'emanon_slider_image',
				'settings' => 'slider_image_title_color',
				'priority' => 35,
			) ) );

			// Sub title color
			$wp_customize->add_setting( 'slider_image_sub_title_color', array(
				'default' => '#fff',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			));
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'slider_image_sub_title_color', array(
				'label' => __( 'Sub title color', 'emanon' ),
				'section' => 'emanon_slider_image',
				'settings' => 'slider_image_sub_title_color',
				'priority' => 36,
			) ) );

			// Btn background color
			$wp_customize->add_setting( 'slider_btn_background_color', array(
				'default' => '#9b8d77',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'slider_btn_background_color', array(
				'label' => __( 'Slider button background color', 'emanon' ),
				'section' => 'emanon_slider_image',
				'settings' => 'slider_btn_background_color',
				'priority' => 37,
			) ) );

			// Btn text color
			$wp_customize->add_setting( 'slider_btn_text_color', array(
				'default' => '#fff',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'slider_btn_text_color', array(
				'label' => __( 'Slider button text color', 'emanon' ),
				'section' => 'emanon_slider_image',
				'settings' => 'slider_btn_text_color',
				'priority' => 38,
			) ) );

			// Background color start
			$wp_customize->add_setting( 'slider_background_color_start', array(
				'default' => '#000',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'slider_background_color_start', array(
				'label' => __( 'Background color［start］', 'emanon' ),
				'section' => 'emanon_slider_image',
				'settings' => 'slider_background_color_start',
				'priority' => 39,
			) ) );

			// Background color end
			$wp_customize->add_setting( 'slider_background_color_end', array(
				'default' => '#000',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'slider_background_color_end', array(
				'label' => __( 'Background color［end］', 'emanon' ),
				'section' => 'emanon_slider_image',
				'settings' => 'slider_background_color_end',
				'priority' => 40,
			) ) );

			// Background color degree
			$wp_customize->add_setting( 'slider_background_color_degree', array(
				'default' => 135,
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_number',
			) );
			$wp_customize->add_control( 'slider_background_color_degree', array(
				'label' => __( 'Degree', 'emanon' ),
				'section' => 'emanon_slider_image',
				'settings' => 'slider_background_color_degree',
				'type' => 'number',
				'priority' => 41,
			) );

			// Display overlay pattern
			$wp_customize->add_setting( 'slider_display_overlay', array(
				'default' => 'pattern_none',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_overlay_pattern_type',
			) );
			$wp_customize->add_control( 'slider_display_overlay', array(
				'label' =>__( 'Display overlay pattern', 'emanon' ),
				'section' => 'emanon_slider_image',
				'settings' => 'slider_display_overlay',
				'type' => 'radio',
				'choices' => array(
					'pattern_none' => __( 'None display pattern', 'emanon' ),
					'pattern_dots' => __( 'Display display pattern dots', 'emanon' ),
					'pattern_diamond' => __( 'Display pattern diamond', 'emanon' ),
					),
				'priority' => 42,
			) );

			// Background color opacity
			$wp_customize->add_setting( 'slider_image_opacity', array(
				'default' => 0,
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_rangeslider'
			) );
			$wp_customize->add_control( 'slider_image_opacity', array(
				'label' => __( 'Header background color opacity', 'emanon' ),
				'section' => 'emanon_slider_image',
				'settings' => 'slider_image_opacity',
				'type' => 'range',
					'input_attrs' => array(
					'min' => 0,
					'max' => 1,
					'step' => 0.05,
					),
				'priority' => 43,
			) );

		/*------------------------------------------------------------------------------------
		/* Slider Content Section
		/*----------------------------------------------------------------------------------*/
		$wp_customize->add_section( 'emanon_slider_content', array (
			'title' => __( 'Slider content section settings', 'emanon' ),
			'description' => __( 'To display the section, you need to set the first view layout.', 'emanon' ),
			'priority' => 3,
			'panel' => 'emanon_front_page_settings',
		) );

			// Display type
			$wp_customize->add_setting( 'slider_content_display_type', array(
				'default' => 'new_arrivals',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_slider_content_display_type',
			) );
			$wp_customize->add_control( 'slider_content_display_type', array(
				'label' => __( 'Featured display type', 'emanon' ),
				'section' => 'emanon_slider_content',
				'settings' => 'slider_content_display_type',
				'type' => 'radio',
				'choices' => array(
					'new_arrivals' => __( 'Display New arrivals', 'emanon' ),
					'featured' => __( 'Display Featured', 'emanon' ),
					'category' => __( 'Display Category (Selected id)', 'emanon' ),
					),
				'priority' => 1,
			) );

			// Category id
			$wp_customize->add_setting( 'slider_content_category_id', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'slider_content_category_id', array(
				'label' => __( 'Category id', 'emanon' ),
				'description' => __( 'When the display type is category, please enter category id.', 'emanon' ),
				'section' => 'emanon_slider_content',
				'settings' => 'slider_content_category_id',
				'type' => 'text',
				'priority' => 2,
			) );

			// Number of slider content
			$wp_customize->add_setting( 'slider_content_max', array(
				'default' => 3,
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_number',
			) );
			$wp_customize->add_control( 'slider_content_max', array(
				'label' => __( 'Number of entry (default 3)', 'emanon' ),
				'section' => 'emanon_slider_content',
				'settings' => 'slider_content_max',
				'type' => 'number',
				'input_attrs' => array(
					'min' => 1,
					'step' => 1,
				),
				'priority' => 3,
			) );

			// Display date
			$wp_customize->add_setting( 'display_slider_content_date', array(
				'default' => true,
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_slider_content_date', array(
				'label' =>__( 'Display date', 'emanon' ),
				'section' => 'emanon_slider_content',
				'settings' => 'display_slider_content_date',
				'type' => 'checkbox',
				'priority' => 4,
			) );

			// Display updade date
			$wp_customize->add_setting( 'display_slider_content_update_date', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_slider_content_update_date', array(
				'label' =>__( 'Display updade date', 'emanon' ),
				'section' => 'emanon_slider_content',
				'settings' => 'display_slider_content_update_date',
				'type' => 'checkbox',
				'priority' => 5,
			) );

			// Display category
			$wp_customize->add_setting( 'display_slider_content_category', array(
				'default' => true,
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_slider_content_category', array(
				'label' => __( 'Display category', 'emanon' ),
				'section' => 'emanon_slider_content',
				'settings' => 'display_slider_content_category',
				'type' => 'checkbox',
				'priority' => 6,
			) );

			// Display tag
			$wp_customize->add_setting( 'display_slider_content_tag', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_slider_content_tag', array(
				'label' => __( 'Display tag', 'emanon' ),
				'section' => 'emanon_slider_content',
				'settings' => 'display_slider_content_tag',
				'type'	=> 'checkbox',
				'priority' => 7,
			) );

			// Display comments number
			$wp_customize->add_setting( 'display_slider_content_comments_number', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_slider_content_comments_number', array(
				'label' => __( 'Display comments number', 'emanon' ),
				'section' => 'emanon_slider_content',
				'settings' => 'display_slider_content_comments_number',
				'type' => 'checkbox',
				'priority' => 8,
			) );

			// Display author
			$wp_customize->add_setting( 'display_slider_content_author', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_slider_content_author', array(
				'label' => __( 'Display author', 'emanon' ),
				'section' => 'emanon_slider_content',
				'settings' => 'display_slider_content_author',
				'type' => 'checkbox',
				'priority' => 9,
			) );

			// Read More
			$wp_customize->add_setting( 'slider_content_read_more', array(
				'default' => __( 'Read More', 'emanon' ),
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'slider_content_read_more', array(
				'label' => __( 'Display read more', 'emanon' ),
				'section' => 'emanon_slider_content',
				'settings' => 'slider_content_read_more',
				'type' => 'text',
				'priority' => 10,
				) );

			// Slider content height
			$wp_customize->add_setting( 'slider_content_height', array(
				'default' => 500,
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_number',
			) );
			$wp_customize->add_control( 'slider_content_height', array(
				'label' => __( 'Slider Content height (default 500px)', 'emanon' ),
				'section' => 'emanon_slider_content',
				'settings' => 'slider_content_height',
				'type' => 'number',
				'input_attrs' => array(
					'min' => 224,
					'max' => 640,
					'step' => 1,
				),
				'priority' => 11,
			) );

			// Slider content speed
			$wp_customize->add_setting( 'slider_content_speed', array(
				'default' => 4000,
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_number',
			) );
			$wp_customize->add_control( 'slider_content_speed', array(
				'label' => __( 'Slider speed (default 4000)', 'emanon' ),
				'section' => 'emanon_slider_content',
				'type' => 'number',
				'input_attrs' => array(
					'min' => 0,
				),
				'priority' => 12,
			) );

			// Slider content animation
			$wp_customize->add_setting( 'slider_content_animation', array(
				'default' => 'fade',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_slider_animation_type',
			) );
			$wp_customize->add_control( 'slider_content_animation', array(
				'label' => __( 'Slider animation type', 'emanon' ),
				'section' => 'emanon_slider_content',
				'settings' => 'slider_content_animation',
				'type' => 'radio',
				'choices' => array(
					'fade' => __( 'Fade', 'emanon' ),
					'horizontal' => __( 'Slide', 'emanon' ),
					),
				'priority' => 13,
			) );

			// Auto slider content animation
			$wp_customize->add_setting( 'slider_content_auto', array(
				'default' => true,
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'slider_content_auto', array(
				'label' => __( 'Auto slider animation', 'emanon' ),
				'section' => 'emanon_slider_content',
				'settings' => 'slider_content_auto',
				'type' => 'checkbox',
				'priority' => 14,
			) );

			// Slider content controls
			$wp_customize->add_setting( 'slider_content_controls', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'slider_content_controls', array(
				'label' => __( 'Display slider controls', 'emanon' ),
				'section' => 'emanon_slider_content',
				'settings' => 'slider_content_controls',
				'type' => 'checkbox',
				'priority' => 15,
			) );

			// Slider content pager
			$wp_customize->add_setting( 'slider_content_pager', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'slider_content_pager', array(
				'label' => __( 'Display slider pager', 'emanon' ),
				'section' => 'emanon_slider_content',
				'settings' => 'slider_content_pager',
				'type' => 'checkbox',
				'priority' => 16,
			) );

			// Text shadow
			$wp_customize->add_setting( 'slider_content_text_shadow', array(
				'default' => true,
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'slider_content_text_shadow', array(
				'label' => __( 'Text shadow', 'emanon' ),
				'section' => 'emanon_slider_content',
				'settings' => 'slider_content_text_shadow',
				'type' => 'checkbox',
				'priority' => 17,
			) );

			// Text colors
			$wp_customize->add_setting( 'slider_content_text_color', array(
				'default' => '#fff',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			));
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'slider_content_text_color', array(
				'label' => __( 'Text colors', 'emanon' ),
				'section' => 'emanon_slider_content',
				'settings' => 'slider_content_text_color',
				'priority' => 18,
			) ) );

			// Background color start
			$wp_customize->add_setting( 'slider_content_background_color_start', array(
				'default' => '#000',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'slider_content_background_color_start', array(
				'label' => __( 'Background color［start］', 'emanon' ),
				'section' => 'emanon_slider_content',
				'settings' => 'slider_content_background_color_start',
				'priority' => 19,
			) ) );

			// Background color end
			$wp_customize->add_setting( 'slider_content_background_color_end', array(
				'default' => '#000',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'slider_content_background_color_end', array(
				'label' => __( 'Background color［end］', 'emanon' ),
				'section' => 'emanon_slider_content',
				'settings' => 'slider_content_background_color_end',
				'priority' => 20,
			) ) );

			// Background color degree
			$wp_customize->add_setting( 'slider_content_background_color_degree', array(
				'default' => 135,
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_number',
			) );
			$wp_customize->add_control( 'slider_content_background_color_degree', array(
				'label' => __( 'Degree', 'emanon' ),
				'section' => 'emanon_slider_content',
				'settings' => 'slider_content_background_color_degree',
				'type' => 'number',
				'priority' => 21,
			) );

			// Display overlay pattern
			$wp_customize->add_setting( 'slider_content_display_overlay', array(
				'default' => 'pattern_none',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_overlay_pattern_type',
			) );
			$wp_customize->add_control( 'slider_content_display_overlay', array(
				'label' =>__( 'Display overlay pattern', 'emanon' ),
				'section' => 'emanon_slider_content',
				'settings' => 'slider_content_display_overlay',
				'type' => 'radio',
				'choices' => array(
					'pattern_none' => __( 'None display pattern', 'emanon' ),
					'pattern_dots' => __( 'Display display pattern dots', 'emanon' ),
					'pattern_diamond' => __( 'Display pattern diamond', 'emanon' ),
					),
				'priority' => 22,
			) );

			// Background color opacity
			$wp_customize->add_setting( 'slider_content_image_opacity', array(
				'default' => 0,
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_rangeslider'
			) );
			$wp_customize->add_control( 'slider_content_image_opacity', array(
				'label' => __( 'Header background color opacity', 'emanon' ),
				'section' => 'emanon_slider_content',
				'settings' => 'slider_content_image_opacity',
				'type' => 'range',
					'input_attrs' => array(
					'min' => 0,
					'max' => 1,
					'step' => 0.05,
					),
				'priority' => 23,
			) );

		/*------------------------------------------------------------------------------------
		/* Featured Section
		/*----------------------------------------------------------------------------------*/
		$wp_customize->add_section( 'emanon_featured_section', array (
			'title' => __( 'Featured section settings', 'emanon' ),
			'description' => __( 'To display the section, you need to set the first view layout.', 'emanon' ),
			'priority' => 4,
			'panel' => 'emanon_front_page_settings',
		) );

			// Featured article type
			$wp_customize->add_setting( 'featured_article_type', array(
				'default' => 'post',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_featured_article_type',
			) );
			$wp_customize->add_control( 'featured_article_type', array(
				'label' => __( 'Featured article type', 'emanon' ),
				'section' => 'emanon_featured_section',
				'settings' => 'featured_article_type',
				'type' => 'radio',
				'choices' => array(
					'post' => __( 'Display post', 'emanon' ),
					'page' => __( 'Display page', 'emanon' ),
					),
				'priority' => 1,
			) );

			// Display type
			$wp_customize->add_setting( 'featured_display_type', array(
				'default' => 'new_arrivals',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_featured_display_type',
			) );
			$wp_customize->add_control( 'featured_display_type', array(
				'label' => __( 'Featured display type', 'emanon' ),
				'section' => 'emanon_featured_section',
				'settings' => 'featured_display_type',
				'type' => 'radio',
				'choices' => array(
					'new_arrivals' => __( 'Display New arrivals', 'emanon' ),
					'featured' => __( 'Display Featured', 'emanon' ),
					),
				'priority' => 2,
			) );

			// Exclude sticky page
			$wp_customize->add_setting( 'featured_exclude_sticky_page', array(
				'default' => true,
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'featured_exclude_sticky_page', array(
				'label' => __( 'Exclude sticky page', 'emanon' ),
				'section' => 'emanon_featured_section',
				'settings' => 'featured_exclude_sticky_page',
				'type' => 'checkbox',
				'priority' => 3,
			) );

			// Number of featured article
			$wp_customize->add_setting( 'featured_max', array(
				'default' => 3,
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_number',
			) );
			$wp_customize->add_control( 'featured_max', array(
				'label' => __( 'Number of entry (default 3)', 'emanon' ),
				'section' => 'emanon_featured_section',
				'settings' => 'featured_max',
				'type' => 'number',
				'input_attrs' => array(
					'min' => 1,
					'step' => 1,
				),
				'priority' => 4,
			) );

			// Featured section label
			$wp_customize->add_setting( 'featured_section_label', array(
				'default' => __( 'PICK UP', 'emanon' ),
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'featured_section_label', array(
				'label' => __( 'Section label', 'emanon' ),
				'section' => 'emanon_featured_section',
				'settings' => 'featured_section_label',
				'type' => 'text',
				'priority' => 5,
			) );

			// Background color
			$wp_customize->add_setting( 'featured_section_background_color', array(
				'default' => '#ededed',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'featured_section_background_color', array(
				'label' => __( 'Featured background color', 'emanon' ),
				'section' => 'emanon_featured_section',
				'settings' => 'featured_section_background_color',
				'priority' => 6,
			) ) );

			// Background image
			$wp_customize->add_setting( 'featured_image', array(
				'default' =>	get_theme_file_uri('/lib/images/emanon-header-img.jpg'),
				'type' => 'theme_mod',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'featured_image', array (
				'label' => __( 'Featured background image', 'emanon' ),
				'description' => __( 'Image size recommended width 1920px height 400px.', 'emanon' ),
				'section' => 'emanon_featured_section',
				'settings' => 'featured_image',
				'priority' => 7,
			) ) );

			// Background image opacity
			$wp_customize->add_setting( 'featured_background_image_opacity', array(
				'default' => 1,
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_rangeslider'
			) );
			$wp_customize->add_control( 'featured_background_image_opacity', array(
				'label' => __( 'Featured background image opacity', 'emanon' ),
			 'section' => 'emanon_featured_section',
				'settings' => 'featured_background_image_opacity',
				'type' => 'range',
					'input_attrs' => array(
					'min' => 0,
					'max' => 1,
					'step' => 0.05,
					),
				'priority' => 8,
			) );

			// Background image blur
			$wp_customize->add_setting( 'featured_image_blur', array(
				'default' => 0,
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_number',
			) );
			$wp_customize->add_control( 'featured_image_blur', array(
				'label' => __( 'Featured background image blur (default 0)', 'emanon' ),
				'section' => 'emanon_featured_section',
				'settings' => 'featured_image_blur',
				'type' => 'number',
				'input_attrs' => array(
					'min' => 0,
				),
				'priority' => 9,
			) );

			// Display overlay pattern
			$wp_customize->add_setting( 'featured_display_overlay', array(
				'default' => 'pattern_none',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_overlay_pattern_type',
			) );
			$wp_customize->add_control( 'featured_display_overlay', array(
				'label' =>__( 'Display overlay pattern', 'emanon' ),
				'section' => 'emanon_featured_section',
				'settings' => 'featured_display_overlay',
				'type' => 'radio',
				'choices' => array(
					'pattern_none' => __( 'None display pattern', 'emanon' ),
					'pattern_dots' => __( 'Display display pattern dots', 'emanon' ),
					'pattern_diamond' => __( 'Display pattern diamond', 'emanon' ),
					),
				'priority' => 10,
			) );

		/*------------------------------------------------------------------------------------
		/* Page Box Section
		/*----------------------------------------------------------------------------------*/
		$wp_customize->add_section( 'emanon_pagebox_section', array (
			'title' => __( 'Page box section settings', 'emanon' ),
			'description' => __( 'To display the section, you need to set the first view layout.', 'emanon' ),
			'priority' => 5,
			'panel' => 'emanon_front_page_settings',
		) );

			// Page setting[1]
			$wp_customize->add_setting( 'pagebox_setting_1',array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback'	=> 'emanon_customize_integer'
			) );

			$wp_customize->add_control( 'pagebox_setting_1',array(
				'label' => __( 'Select page for list one','emanon'),
				'section' => 'emanon_pagebox_section',
				'settings' => 'pagebox_setting_1',
				'type' => 'dropdown-pages',
				'priority' => 1,
			) );

			// Page description[1]
			$wp_customize->add_setting( 'pagebox_description_1', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( new Customize_Textarea_Control( $wp_customize, 'pagebox_description_1', array(
				'label' => __( 'Page description for list one', 'emanon' ),
				'section' => 'emanon_pagebox_section',
				'settings' => 'pagebox_description_1',
				'priority' => 2,
			) ) );

			// Page setting[2]
			$wp_customize->add_setting( 'pagebox_setting_2',array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback'	=> 'emanon_customize_integer'
			) );

			$wp_customize->add_control( 'pagebox_setting_2',array(
				'label' => __( 'Select page for list two','emanon'),
				'section' => 'emanon_pagebox_section',
				'settings' => 'pagebox_setting_2',
				'type' => 'dropdown-pages',
				'priority' => 3,
			) );

			// Page description[2]
			$wp_customize->add_setting( 'pagebox_description_2', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( new Customize_Textarea_Control( $wp_customize, 'pagebox_description_2', array(
				'label' => __( 'Page description for list two', 'emanon' ),
				'section' => 'emanon_pagebox_section',
				'settings' => 'pagebox_description_2',
				'priority' => 4,
			) ) );

			// Page setting[3]
			$wp_customize->add_setting( 'pagebox_setting_3',array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback'	=> 'emanon_customize_integer'
			));
			
			$wp_customize->add_control( 'pagebox_setting_3',array(
				'label' => __( 'Select page for list three','emanon'),
				'section' => 'emanon_pagebox_section',
				'settings' => 'pagebox_setting_3',
				'type' => 'dropdown-pages',
				'priority' => 5,
			) );

			// Page description[3]
			$wp_customize->add_setting( 'pagebox_description_3', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( new Customize_Textarea_Control( $wp_customize, 'pagebox_description_3', array(
				'label' => __( 'Page description for list three', 'emanon' ),
				'section' => 'emanon_pagebox_section',
				'settings' => 'pagebox_description_3',
				'priority' => 6,
			) ) );

		/*------------------------------------------------------------------------------------
		/* Video Section
		/*----------------------------------------------------------------------------------*/
		$wp_customize->add_section( 'emanon_header_video', array (
			'title' => __( 'Video section settings', 'emanon' ),
			'description' => __( 'To display the section, you need to set the first view layout.', 'emanon' ),
			'priority' => 6,
			'panel' => 'emanon_front_page_settings',
		) );

			// Video mp4
			$wp_customize->add_setting( 'header_video_mp4', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'absint',
			) );
			$wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'header_video_mp4', array(
				'label' => __( 'Header Movie MP4', 'emanon' ),
				'description' => __( 'Upload your video in mp4 format', 'emanon' ),
				'section' => 'emanon_header_video',
				'settings' => 'header_video_mp4',
				'mime_type' => 'video',
				'button_labels' => array(
					'select' => __( 'Select Video', 'emanon' ),
					'change' => __( 'Change Video', 'emanon' ),
					'placeholder' => __( 'No video selected', 'emanon' ),
					'frame_title' => __( 'Select Video', 'emanon' ),
					'frame_button' => __( 'Choose Video', 'emanon' ),
					),
				'priority' => 1,
			) ) );

			// Substitution image
			$wp_customize->add_setting( 'substitution_image', array(
				'default' => get_theme_file_uri('/lib/images/emanon-header-img.jpg'),
				'type' => 'theme_mod',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'substitution_image', array (
				'label' => __( 'Substitution image', 'emanon' ),
				'section' => 'emanon_header_video',
				'settings' => 'substitution_image',
				'priority' => 2,
			) ) );

			// Substitution image om pc
			$wp_customize->add_setting( 'substitution_image_pc', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'substitution_image_pc', array(
				'label' => __( 'Substitution image on PC', 'emanon' ),
				'description' => __( 'Display images instead of videos', 'emanon' ),
				'section' => 'emanon_header_video',
				'settings' => 'substitution_image_pc',
				'type' => 'checkbox',
				'priority' => 3,
			) );

			// Title
			$wp_customize->add_setting( 'video_title', array(
				'default' => __( 'Welcome to Emanon', 'emanon' ),
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'video_title', array(
				'label' => __( 'Title', 'emanon' ),
				'section' => 'emanon_header_video',
				'settings' => 'video_title',
				'type' => 'text',
				'priority' => 4,
			) );

			// Header logo
			$wp_customize->add_setting( 'video_logo', array (
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'video_logo', array (
				'label' => __( 'Display logo', 'emanon' ),
				'section' => 'emanon_header_video',
				'settings' => 'video_logo',
				'priority' => 5,
			) ) );

			// Sub title
			$wp_customize->add_setting( 'video_sub_title', array(
				'default' => __( 'Ready to Start Your Own Business?', 'emanon' ),
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( new Customize_Textarea_Control( $wp_customize, 'video_sub_title', array(
				'label' => __( 'Sub title', 'emanon' ),
				'section' => 'emanon_header_video',
				'settings' => 'video_sub_title',
				'priority' => 6,
			) ) );

			// Btn url
			$wp_customize->add_setting( 'video_btn_url', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control( 'video_btn_url', array(
				'label' => __( 'Button url', 'emanon' ),
				'section' => 'emanon_header_video',
				'settings' => 'video_btn_url',
				'type' => 'url',
				'priority' => 7,
			) );

			// Btn text
			$wp_customize->add_setting( 'video_btn_text', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'video_btn_text', array(
				'label' => __( 'Button text', 'emanon' ),
				'section' => 'emanon_header_video',
				'settings' => 'video_btn_text',
				'type' => 'text',
				'priority' => 8,
			) );

			// Fontawesome Icon [Down icon]
			$wp_customize->add_setting( 'video_down_icon', array(
				'default' => 'fa fa-angle-down',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'video_down_icon', array (
				'label' => __( 'Down icon', 'emanon' ),
				'description' => sprintf('%1$s <a href="https://fontawesome.com/v4.7.0/icons/" target="_blank">%2$s</a>',
						__( "Font Awesome Icon Click" , 'emanon' ),
						__( "here" , 'emanon') ),
				'section' => 'emanon_header_video',
				'settings' => 'video_down_icon',
				'type' => 'text',
				'priority' => 9,
			) );

			// header tagline text color
			$wp_customize->add_setting( 'video_header_tagline_text_color', array(
				'default' => '#000c15',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'video_header_tagline_text_color', array(
				'label' => __( 'Header tagline text color', 'emanon' ),
				'section' => 'emanon_header_video',
				'settings' => 'video_header_tagline_text_color',
				'priority' => 10,
			) ) );

			// Header site title color
			$wp_customize->add_setting( 'video_header_site_title_color', array(
				'default' => '#000c15',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'video_header_site_title_color', array(
				'label' => __( 'Header site title color', 'emanon' ),
				'section' => 'emanon_header_video',
				'settings' => 'video_header_site_title_color',
				'priority' => 11,
			) ) );

			// Text shadow
			$wp_customize->add_setting( 'video_text_shadow', array(
				'default' => true,
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'video_text_shadow', array(
				'label' => __( 'Text shadow', 'emanon' ),
				'section' => 'emanon_header_video',
				'settings' => 'video_text_shadow',
				'type' => 'checkbox',
				'priority' => 12,
			) );

			// Title colors
			$wp_customize->add_setting( 'video_title_color', array(
				'default' => '#fff',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			));
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'video_title_color', array(
				'label' => __( 'Title colors', 'emanon' ),
				'section' => 'emanon_header_video',
				'settings' => 'video_title_color',
				'priority' => 13,
			) ) );

			// Sub title color
			$wp_customize->add_setting( 'video_sub_title_color', array(
				'default' => '#fff',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			));
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'video_sub_title_color', array(
				'label' => __( 'Sub title color', 'emanon' ),
				'section' => 'emanon_header_video',
				'settings' => 'video_sub_title_color',
				'priority' => 14,
			) ) );

			// Btn background color
			$wp_customize->add_setting( 'video_btn_background_color', array(
				'default' => '#9b8d77',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'video_btn_background_color', array(
				'label' => __( 'Button background color', 'emanon' ),
				'section' => 'emanon_header_video',
				'settings' => 'video_btn_background_color',
				'priority' => 15,
			) ) );

			// Btn text color
			$wp_customize->add_setting( 'video_btn_text_color', array(
				'default' => '#fff',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'video_btn_text_color', array(
				'label' => __( 'Button text color', 'emanon' ),
				'section' => 'emanon_header_video',
				'settings' => 'video_btn_text_color',
				'priority' => 16,
			) ) );

			// Video down icon color
			$wp_customize->add_setting( 'video_down_icon_color', array(
				'default' => '#fff',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'video_down_icon_color', array(
				'label' => __( 'Down icon color', 'emanon' ),
				'section' => 'emanon_header_video',
				'settings' => 'video_down_icon_color',
				'priority' => 17,
			) ) );

			// Background color start
			$wp_customize->add_setting( 'video_background_color_start', array(
				'default' => '#000',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'video_background_color_start', array(
				'label' => __( 'Background color［start］', 'emanon' ),
				'section' => 'emanon_header_video',
				'settings' => 'video_background_color_start',
				'priority' => 18,
			) ) );

			// Background color end
			$wp_customize->add_setting( 'video_background_color_end', array(
				'default' => '#000',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'video_background_color_end', array(
				'label' => __( 'Background color［end］', 'emanon' ),
				'section' => 'emanon_header_video',
				'settings' => 'video_background_color_end',
				'priority' => 19,
			) ) );

			// Background color degree
			$wp_customize->add_setting( 'video_background_color_degree', array(
				'default' => 135,
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_number',
			) );
			$wp_customize->add_control( 'video_background_color_degree', array(
				'label' => __( 'Degree', 'emanon' ),
				'section' => 'emanon_header_video',
				'settings' => 'video_background_color_degree',
				'type' => 'number',
				'priority' => 20,
			) );

			// Background color opacity
			$wp_customize->add_setting( 'video_background_color_opacity', array(
				'default' => 0,
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_rangeslider'
			) );
			$wp_customize->add_control( 'video_background_color_opacity', array(
				'label' => __( 'Header background color opacity', 'emanon' ),
				'section' => 'emanon_header_video',
				'settings' => 'video_background_color_opacity',
				'type' => 'range',
					'input_attrs' => array(
					'min' => 0,
					'max' => 1,
					'step' => 0.05,
					),
				'priority' => 21,
			) );

			// Display overlay pattern
			$wp_customize->add_setting( 'video_display_overlay', array(
				'default' => 'pattern_none',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_overlay_pattern_type',
			) );
			$wp_customize->add_control( 'video_display_overlay', array(
				'label' =>__( 'Display overlay pattern', 'emanon' ),
				'section' => 'emanon_header_video',
				'settings' => 'video_display_overlay',
				'type' => 'radio',
				'choices' => array(
					'pattern_none' => __( 'None display pattern', 'emanon' ),
					'pattern_dots' => __( 'Display display pattern dots', 'emanon' ),
					'pattern_diamond' => __( 'Display pattern diamond', 'emanon' ),
					),
				'priority' => 22,
			) );

		/*------------------------------------------------------------------------------------
		/* Eye catch Section
		/*----------------------------------------------------------------------------------*/
		$wp_customize->add_section( 'emanon_eyecatch_image', array (
			'title' => __( 'Eye catch section settings', 'emanon' ),
			'description' => __( 'To display the section, you need to set the first view layout.', 'emanon' ),
			'priority' => 6,
			'panel' => 'emanon_front_page_settings',
		) );

			// Reverse layout
			$wp_customize->add_setting( 'eyecatch_layout_reverse', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'eyecatch_layout_reverse', array(
				'label' =>__( 'Reverse layout', 'emanon' ),
				'description' => __( 'Position of image and text can be reversed left and right.', 'emanon' ),
				'section' => 'emanon_eyecatch_image',
				'settings' => 'eyecatch_layout_reverse',
				'type' => 'checkbox',
				'priority' => 1,
			) );

			// Eye catch image
			$wp_customize->add_setting( 'eyecatch_image', array(
				'default' =>'',
				'type' => 'theme_mod',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'eyecatch_image', array (
				'label' => __( 'Eye catch image', 'emanon' ),
				'description' => __( 'Image size recommended width 500px.', 'emanon' ),
				'section' => 'emanon_eyecatch_image',
				'settings' => 'eyecatch_image',
				'priority' => 2,
			) ) );

			// SP eye catch image
			$wp_customize->add_setting( 'display_sp_eyecatch_image', array(
				'default' => true,
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_sp_eyecatch_image', array(
				'label' =>__( 'Display eye catch image［SP］', 'emanon' ),
				'description' => __( 'When you look at the site from the smartphone, eye catch images are displayed.', 'emanon' ),
				'section' => 'emanon_eyecatch_image',
				'settings' => 'display_sp_eyecatch_image',
				'type' => 'checkbox',
				'priority' => 3,
			) );

			// Eye catch image title
			$wp_customize->add_setting( 'eyecatch_title', array(
				'default' => __( 'Welcome to Emanon', 'emanon' ),
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( new Customize_Textarea_Control( $wp_customize, 'eyecatch_title', array(
				'label' => __( 'Title', 'emanon' ),
				'section' => 'emanon_eyecatch_image',
				'settings' => 'eyecatch_title',
				'priority' => 4,
			) ) );

			// Eye catch image sub title
			$wp_customize->add_setting( 'eyecatch_sub_title', array(
				'default' => __( 'Ready to Start Your Own Business?', 'emanon' ),
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( new Customize_Textarea_Control( $wp_customize, 'eyecatch_sub_title', array(
				'label' => __( 'Sub title', 'emanon' ),
				'section' => 'emanon_eyecatch_image',
				'settings' => 'eyecatch_sub_title',
				'priority' => 5,
			) ) );

			// PC background image
			$wp_customize->add_setting( 'eyecatch_background_image', array(
				'default' => get_theme_file_uri('/lib/images/emanon-header-img.jpg'),
				'type' => 'theme_mod',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'eyecatch_background_image', array (
				'label' => __( 'PC background image', 'emanon' ),
				'section' => 'emanon_eyecatch_image',
				'settings' => 'eyecatch_background_image',
				'priority' => 6,
			) ) );

			// Mobile background image
			$wp_customize->add_setting( 'mobile_eyecatch_background_image', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'mobile_eyecatch_background_image', array (
				'label' => __( 'Mobile background image', 'emanon' ),
				'description' => __( 'It is used when you want to change the image as seen from a smartphone or tablet.', 'emanon' ),
				'section' => 'emanon_eyecatch_image',
				'settings' => 'mobile_eyecatch_background_image',
				'priority' => 7,
			) ) );

			// Btn url
			$wp_customize->add_setting( 'eyecatch_btn_url', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control( 'eyecatch_btn_url', array(
				'label' => __( 'Button url', 'emanon' ),
				'section' => 'emanon_eyecatch_image',
				'settings' => 'eyecatch_btn_url',
				'type' => 'url',
				'priority' => 8,
			) );

			// Btn text
			$wp_customize->add_setting( 'eyecatch_btn_text', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'eyecatch_btn_text', array(
				'label' => __( 'Button text', 'emanon' ),
				'section' => 'emanon_eyecatch_image',
				'settings' => 'eyecatch_btn_text',
				'type' => 'text',
				'priority' => 9,
			) );

			// Eye catch container padding
			$wp_customize->add_setting( 'eyecatch_container_padding', array(
				'default' => 64,
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_number',
			) );
			$wp_customize->add_control( 'eyecatch_container_padding', array(
				'label' => __( 'Padding (default 64px)', 'emanon' ),
				'section' => 'emanon_eyecatch_image',
				'settings' => 'eyecatch_container_padding',
				'type' => 'number',
				'input_attrs' => array(
					'step' => 1,
				),
				'priority' => 10,
			) );

			// Text shadow
			$wp_customize->add_setting( 'eyecatch_image_text_shadow', array(
				'default' => true,
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'eyecatch_image_text_shadow', array(
				'label' => __( 'Text shadow', 'emanon' ),
				'section' => 'emanon_eyecatch_image',
				'settings' => 'eyecatch_image_text_shadow',
				'type' => 'checkbox',
				'priority' => 11,
			) );

			// Title colors
			$wp_customize->add_setting( 'eyecatch_image_title_color', array(
				'default' => '#fff',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			));
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'eyecatch_image_title_color', array(
				'label' => __( 'Title colors', 'emanon' ),
				'section' => 'emanon_eyecatch_image',
				'settings' => 'eyecatch_image_title_color',
				'priority' => 12,
			) ) );

			// Sub title color
			$wp_customize->add_setting( 'eyecatch_image_sub_title_color', array(
				'default' => '#fff',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			));
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'eyecatch_image_sub_title_color', array(
				'label' => __( 'Sub title color', 'emanon' ),
				'section' => 'emanon_eyecatch_image',
				'settings' => 'eyecatch_image_sub_title_color',
				'priority' => 13,
			) ) );

			// Btn background color
			$wp_customize->add_setting( 'eyecatch_btn_background_color', array(
				'default' => '#9b8d77',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'eyecatch_btn_background_color', array(
				'label' => __( 'Button background color', 'emanon' ),
				'section' => 'emanon_eyecatch_image',
				'settings' => 'eyecatch_btn_background_color',
				'priority' => 14,
			) ) );

			// Btn text color
			$wp_customize->add_setting( 'eyecatch_btn_text_color', array(
				'default' => '#fff',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'eyecatch_btn_text_color', array(
				'label' => __( 'Button text color', 'emanon' ),
				'section' => 'emanon_eyecatch_image',
				'settings' => 'eyecatch_btn_text_color',
				'priority' => 15,
			) ) );

			// Background color start
			$wp_customize->add_setting( 'eyecatch_background_color_start', array(
				'default' => '#000',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'eyecatch_background_color_start', array(
				'label' => __( 'Background color［start］', 'emanon' ),
				'section' => 'emanon_eyecatch_image',
				'settings' => 'eyecatch_background_color_start',
				'priority' => 16,
			) ) );

			// Background color end
			$wp_customize->add_setting( 'eyecatch_background_color_end', array(
				'default' => '#000',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'eyecatch_background_color_end', array(
				'label' => __( 'Background color［end］', 'emanon' ),
				'section' => 'emanon_eyecatch_image',
				'settings' => 'eyecatch_background_color_end',
				'priority' => 17,
			) ) );

			// Background color degree
			$wp_customize->add_setting( 'eyecatch_background_color_degree', array(
				'default' => 135,
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_number',
			) );
			$wp_customize->add_control( 'eyecatch_background_color_degree', array(
				'label' => __( 'Degree', 'emanon' ),
				'section' => 'emanon_eyecatch_image',
				'settings' => 'eyecatch_background_color_degree',
				'type' => 'number',
				'priority' => 18,
			) );

			// Dsplay overlay pattern
			$wp_customize->add_setting( 'eyecatch_display_overlay', array(
				'default' => 'pattern_none',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_overlay_pattern_type',
			) );
			$wp_customize->add_control( 'eyecatch_display_overlay', array(
				'label' =>__( 'Dsplay overlay pattern', 'emanon' ),
				'section' => 'emanon_eyecatch_image',
				'settings' => 'eyecatch_display_overlay',
				'type' => 'radio',
				'choices' => array(
					'pattern_none' => __( 'None display pattern', 'emanon' ),
					'pattern_dots' => __( 'Display display pattern dots', 'emanon' ),
					'pattern_diamond' => __( 'Display pattern diamond', 'emanon' ),
					),
				'priority' => 19,
			) );

			// Background color opacity
			$wp_customize->add_setting( 'eyecatch_background_opacity', array(
				'default' => 0,
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_rangeslider'
			) );
			$wp_customize->add_control( 'eyecatch_background_opacity', array(
				'label' => __( 'Background color opacity', 'emanon' ),
				'section' => 'emanon_eyecatch_image',
				'settings' => 'eyecatch_background_opacity',
				'type' => 'range',
					'input_attrs' => array(
					'min' => 0,
					'max' => 1,
					'step' => 0.05,
					),
				'priority' => 20,
			) );

		/*------------------------------------------------------------------------------------
		/* Entry Section
		/*----------------------------------------------------------------------------------*/
		$wp_customize->add_section( 'emanon_entry_section', array (
			'title' => __( 'Entry section settings', 'emanon' ),
			'priority' => 15,
			'panel' => 'emanon_front_page_settings',
		) );

			// Display entry section
			$wp_customize->add_setting( 'display_entry_section', array(
				'default' => 'true',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_entry_section', array(
				'label' =>__( 'Display entry section', 'emanon' ),
				'section' => 'emanon_entry_section',
				'settings' => 'display_entry_section',
				'type' => 'checkbox',
				'priority' => 1,
			) );

			// Entry section title
			$wp_customize->add_setting( 'entry_section_title', array(
				'default' => __( 'Latest Posts', 'emanon' ),
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'entry_section_title', array(
				'label' => __( 'Entry section title', 'emanon' ),
				'section' => 'emanon_entry_section',
				'settings' => 'entry_section_title',
				'type' => 'text',
				'priority' => 2,
			) );

			// Entry section title type
			$wp_customize->add_setting( 'entry_section_title_style', array(
				'default' => 'border-bottom-two',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_h_style',
			) );
			$wp_customize->add_control( 'entry_section_title_style', array(
				'label' => __( 'Entry section title h type', 'emanon' ),
				'description' => __( 'It is also reflected in the h tag of the archive article list (category page and author page).', 'emanon' ),
				'section' => 'emanon_entry_section',
				'settings' => 'entry_section_title_style',
				'type' => 'radio',
				'choices' => array(
					'none' => __( 'None', 'emanon' ),
					'background' => __( 'Background color', 'emanon' ),
					'balloon' => __( 'Balloon', 'emanon' ),
					'border-left' => __( 'Border left', 'emanon' ),
					'border-left-background' => __( 'Border left background', 'emanon' ),
					'border-left-bottom' => __( 'Border left bottom', 'emanon' ),
					'border-bottom' => __( 'Border bottom', 'emanon' ),
					'border-bottom-two' => __( 'Border bottom two', 'emanon' ),
					'border-left-background-stripe' => __( 'Border left background stripe', 'emanon' ),
					'border-top-bottom-stripe' => __( 'Border top bottom stripe', 'emanon' ),
					),
				'priority' => 3,
			) );

			// Display tab list
			$wp_customize->add_setting( 'display_tab_list', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_tab_list', array(
				'label' => __( 'Display Tab list', 'emanon' ),
				'section' => 'emanon_entry_section',
				'settings' => 'display_tab_list',
				'type' => 'checkbox',
				'priority' => 4,
			) );

			// Tab[1] type
			$wp_customize->add_setting( 'tab_1', array(
				'default' => 'tab_new_arrivals',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_tab_1',
			) );
			$wp_customize->add_control( 'tab_1', array(
				'label' => __( 'Tab[1]', 'emanon' ),
				'description' => __( 'The title of the article section is reflected in tab 1.', 'emanon' ),
				'section' => 'emanon_entry_section',
				'settings' => 'tab_1',
				'type' => 'radio',
				'choices' => array(
					'tab_new_arrivals' => __( 'New arrivals', 'emanon' ),
					'tab_category_1' => __( 'Category', 'emanon' ),
					'tab_featured_1' => __( 'Featured', 'emanon' ),
					),
				'priority' => 5,
			) );

			// Tab category[1]
			$wp_customize->add_setting( 'tab_category_id_1', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'tab_category_id_1', array(
				'label' => __( 'Tab[1] Category id', 'emanon' ),
				'section' => 'emanon_entry_section',
				'settings' => 'tab_category_id_1',
				'type' => 'text',
				'priority' => 6,
			) );

			// Btn url[1]
			$wp_customize->add_setting( 'tab_btn_url_1', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control( 'tab__btn_url_1', array(
				'label' => __( 'Tab[1] Button url', 'emanon' ),
				'section' => 'emanon_entry_section',
				'settings' => 'tab_btn_url_1',
				'type' => 'url',
				'priority' => 7,
			) );

			// Btn text[1]
			$wp_customize->add_setting( 'tab_btn_text_1', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'tab_btn_text_1', array(
				'label' => __( 'Tab[1] Button text', 'emanon' ),
				'section' => 'emanon_entry_section',
				'settings' => 'tab_btn_text_1',
				'type' => 'text',
				'priority' => 8,
			) );
	
			// Tab title[2]
			$wp_customize->add_setting( 'tab_title_2', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'tab_title_2', array(
				'label' => __( 'Tab[2] Title', 'emanon' ),
				'section' => 'emanon_entry_section',
				'settings' => 'tab_title_2',
				'type' => 'text',
				'priority' => 9,
			) );

			// Tab category[2]
			$wp_customize->add_setting( 'tab_category_id_2', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'tab_category_id_2', array(
				'label' => __( 'Tab[2] Category id', 'emanon' ),
				'section' => 'emanon_entry_section',
				'settings' => 'tab_category_id_2',
				'type' => 'text',
				'priority' => 10,
			) );

			// Tab featured[2]
			$wp_customize->add_setting( 'tab_featured_2', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'tab_featured_2', array(
				'label' => __( 'Tab[2] Featured', 'emanon' ),
				'section' => 'emanon_entry_section',
				'settings' => 'tab_featured_2',
				'type' => 'checkbox',
				'priority' => 11,
			) );

			// Btn url[2]
			$wp_customize->add_setting( 'tab_btn_url_2', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control( 'tab__btn_url_2', array(
				'label' => __( 'Tab[2] Button url', 'emanon' ),
				'section' => 'emanon_entry_section',
				'settings' => 'tab_btn_url_2',
				'type' => 'url',
				'priority' => 12,
			) );

			// Btn text[2]
			$wp_customize->add_setting( 'tab_btn_text_2', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'tab_btn_text_2', array(
				'label' => __( 'Tab[2] Button text', 'emanon' ),
				'section' => 'emanon_entry_section',
				'settings' => 'tab_btn_text_2',
				'type' => 'text',
				'priority' => 13,
			) );

			// Tab title[3]
			$wp_customize->add_setting( 'tab_title_3', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'tab_title_3', array(
				'label' => __( 'Tab[3] Title', 'emanon' ),
				'section' => 'emanon_entry_section',
				'settings' => 'tab_title_3',
				'type' => 'text',
				'priority' => 14,
			) );

			// Tab category[3]
			$wp_customize->add_setting( 'tab_category_id_3', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'tab_category_id_3', array(
				'label' => __( 'Tab[3] Category id', 'emanon' ),
				'section' => 'emanon_entry_section',
				'settings' => 'tab_category_id_3',
				'type' => 'text',
				'priority' => 15,
			) );

			// Tab featured[3]
			$wp_customize->add_setting( 'tab_featured_3', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'tab_featured_3', array(
				'label' => __( 'Tab[3] Featured', 'emanon' ),
				'section' => 'emanon_entry_section',
				'settings' => 'tab_featured_3',
				'type' => 'checkbox',
				'priority' => 16,
			) );

			// Btn url[3]
			$wp_customize->add_setting( 'tab_btn_url_3', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control( 'tab__btn_url_3', array(
				'label' => __( 'Tab[3] Button url', 'emanon' ),
				'section' => 'emanon_entry_section',
				'settings' => 'tab_btn_url_3',
				'type' => 'url',
				'priority' => 17,
			) );

			// Btn text[3]
			$wp_customize->add_setting( 'tab_btn_text_3', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'tab_btn_text_3', array(
				'label' => __( 'Tab[3] Button text', 'emanon' ),
				'section' => 'emanon_entry_section',
				'settings' => 'tab_btn_text_3',
				'type' => 'text',
				'priority' => 18,
			) );

			// Tab title[4]
			$wp_customize->add_setting( 'tab_title_4', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'tab_title_4', array(
				'label' => __( 'Tab[4] Title', 'emanon' ),
				'section' => 'emanon_entry_section',
				'settings' => 'tab_title_4',
				'type' => 'text',
				'priority' => 19,
			) );

			// Tab category[4]
			$wp_customize->add_setting( 'tab_category_id_4', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'tab_category_id_4', array(
				'label' => __( 'Tab[4] Category id', 'emanon' ),
				'section' => 'emanon_entry_section',
				'settings' => 'tab_category_id_4',
				'type' => 'text',
				'priority' => 20,
			) );

			// Tab featured[4]
			$wp_customize->add_setting( 'tab_featured_4', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'tab_featured_4', array(
				'label' => __( 'Tab[4] Featured', 'emanon' ),
				'section' => 'emanon_entry_section',
				'settings' => 'tab_featured_4',
				'type' => 'checkbox',
				'priority' => 21,
			) );

			// Btn url[4]
			$wp_customize->add_setting( 'tab_btn_url_4', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control( 'tab__btn_url_4', array(
				'label' => __( 'Tab[4] Button url', 'emanon' ),
				'section' => 'emanon_entry_section',
				'settings' => 'tab_btn_url_4',
				'type' => 'url',
				'priority' => 22,
			) );

			// Btn text[4]
			$wp_customize->add_setting( 'tab_btn_text_4', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'tab_btn_text_4', array(
				'label' => __( 'Tab[4] Button text', 'emanon' ),
				'section' => 'emanon_entry_section',
				'settings' => 'tab_btn_text_4',
				'type' => 'text',
				'priority' => 23,
			) );

			// Btn background color
			$wp_customize->add_setting( 'tab_btn_background_color', array(
				'default' => '#9b8d77',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tab_btn_background_color', array(
				'label' => __( 'Button background color', 'emanon' ),
				'section' => 'emanon_entry_section',
				'settings' => 'tab_btn_background_color',
				'priority' => 24,
			) ) );

			// Btn text color
			$wp_customize->add_setting( 'tab_btn_text_color', array(
				'default' => '#fff',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tab_btn_text_color', array(
				'label' => __( 'Button text color', 'emanon' ),
				'section' => 'emanon_entry_section',
				'settings' => 'tab_btn_text_color',
				'priority' => 25,
			) ) );

			// Tab color
			$wp_customize->add_setting( 'tab_color', array(
				'default' => '#f1f1f1',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tab_color', array(
				'label' => __( 'Tab color', 'emanon' ),
				'section' => 'emanon_entry_section',
				'settings' => 'tab_color',
				'priority' => 26,
			) ) );

			// Tab active color
			$wp_customize->add_setting( 'tab_active_color', array(
				'default' => '#e2e5e8',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tab_active_color', array(
				'label' => __( 'Tab active color', 'emanon' ),
				'section' => 'emanon_entry_section',
				'settings' => 'tab_active_color',
				'priority' => 27,
			) ) );

			// Tab text color
			$wp_customize->add_setting( 'tab_text_color', array(
				'default' => '#000c15;',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tab_text_color', array(
				'label' => __( 'Tab text color', 'emanon' ),
				'section' => 'emanon_entry_section',
				'settings' => 'tab_text_color',
				'priority' => 28,
			) ) );
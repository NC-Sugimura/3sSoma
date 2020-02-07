<?php
/**
* Theme emanon business customizer front page panel
* @package WordPress
* @subpackage Emanon_Business
* @since Emanon Business 1.0
*/

	/*------------------------------------------------------------------------------------
	/* Front page settings
	/*----------------------------------------------------------------------------------*/
	$wp_customize->add_panel( 'emanon_front_page_settings', array(
	'priority' => 60,
	'capability' => 'edit_theme_options',
	'title' => __( 'Front page settings', 'emanon' ),
	) );

		/*------------------------------------------------------------------------------------
		/* Newsticker section
		/*----------------------------------------------------------------------------------*/
		$wp_customize->add_section( 'emanon_newsticker_section', array (
			'title' => __( 'Newsticker section settings', 'emanon' ),
			'priority' => 7,
			'panel' => 'emanon_front_page_settings',
		));

			// Display newsticker section
			$wp_customize->add_setting( 'display_newsticker_section', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_newsticker_section', array(
				'label' =>__( 'Display newsticker section', 'emanon' ),
				'section' => 'emanon_newsticker_section',
				'settings' => 'display_newsticker_section',
				'type' => 'checkbox',
				'priority' => 1,
			) );

			// Newsticker title
			$wp_customize->add_setting( 'newsticker_title', array(
				'default' => __( 'NEWS', 'emanon' ),
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'newsticker_title', array(
				'label' => __( 'Section title', 'emanon' ),
				'section' => 'emanon_newsticker_section',
				'settings' => 'newsticker_title',
				'type' => 'text',
				'priority' => 2,
			) );

			// Number of Newsticker
			$wp_customize->add_setting( 'newsticker_max', array(
				'default' => 5,
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_number',
			) );
			$wp_customize->add_control( 'newsticker_max', array(
				'label' => __( 'Number of newsticker (default 5)', 'emanon' ),
				'section' => 'emanon_newsticker_section',
				'settings' => 'newsticker_max',
				'type' => 'number',
				'input_attrs' => array(
					'min' => 0,
					'step' => 1,
				),
				'priority' => 3,
			) );

			// Newsticker category id
			$wp_customize->add_setting( 'newsticker_category_id', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'newsticker_category_id', array(
				'label' => __( 'Category id', 'emanon' ),
				'section' => 'emanon_newsticker_section',
				'settings' => 'newsticker_category_id',
				'type' => 'text',
				'priority' => 4,
			) );

			// Newsticker background color
			$wp_customize->add_setting( 'newsticker_background_color', array(
				'default' => '#f8f8f8',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'newsticker_background_color', array(
				'label' => __( 'Background color', 'emanon' ),
				'section' => 'emanon_newsticker_section',
				'settings' => 'newsticker_background_color',
				'priority' => 5,
			) ) );

			// Newsticker text color
			$wp_customize->add_setting( 'newsticker_text_color', array(
				'default' => '#161410',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'newsticker_text_color', array(
				'label' => __( 'Text color', 'emanon' ),
				'section' => 'emanon_newsticker_section',
				'settings' => 'newsticker_text_color',
				'priority' => 6,
			) ) );

		/*------------------------------------------------------------------------------------
		/* Solution section
		/*----------------------------------------------------------------------------------*/
		$wp_customize->add_section( 'emanon_solution_section', array (
			'title' => __( 'Solution section settings', 'emanon' ),
			'priority' => 8,
			'panel' => 'emanon_front_page_settings',
		));

			// Display solution section
			$wp_customize->add_setting( 'display_solution_section', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_solution_section', array(
				'label' =>__( 'Display solution section', 'emanon' ),
				'section' => 'emanon_solution_section',
				'settings' => 'display_solution_section',
				'type' => 'checkbox',
				'priority' => 1,
			) );

			// Solution section title
			$wp_customize->add_setting( 'solution_section_title', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'solution_section_title', array(
				'label' => __( 'Section title', 'emanon' ),
				'section' => 'emanon_solution_section',
				'settings' => 'solution_section_title',
				'type' => 'text',
				'priority' => 2,
			) );

			// Solution section description
			$wp_customize->add_setting( 'solution_section_description', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( new Customize_Textarea_Control( $wp_customize, 'solution_section_description', array(
				'label' => __( 'Description', 'emanon' ),
				'section' => 'emanon_solution_section',
				'settings' => 'solution_section_description',
				'type' => 'text',
				'priority' => 3,
			) ) );

			// Fontawesome Icon[1]
			$wp_customize->add_setting( 'solution_icon_1', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'solution_icon_1', array (
				'label' => __( 'Icon[1]', 'emanon' ),
				'description' => sprintf('%1$s <a href="https://fontawesome.com/v4.7.0/icons/" target="_blank">%2$s</a>.',
						__( "Fontawesome Icon Click" , 'emanon' ),
						__( "here" , 'emanon') ),
				'section' => 'emanon_solution_section',
				'settings' => 'solution_icon_1',
				'type' => 'text',
				'priority' => 4,
			) );

			// Solution image[1]
			$wp_customize->add_setting( 'solution_image_1', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'solution_image_1', array (
				'label' => __( 'Image[1]', 'emanon' ),
				'description' => __( 'The minimum size of the image is the width 96px height 96px.', 'emanon' ),
				'section' => 'emanon_solution_section',
				'settings' => 'solution_image_1',
				'type' => 'image',
				'priority' => 5,
			) ) );

			// Solution title[1]
			$wp_customize->add_setting( 'solution_title_1', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'solution_title_1', array(
				'label' => __( 'Title[1]', 'emanon' ),
				'section' => 'emanon_solution_section',
				'settings' => 'solution_title_1',
				'type' => 'text',
				'priority' => 6,
			) );

			// Solution description[1]
			$wp_customize->add_setting( 'solution_description_1', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( new Customize_Textarea_Control( $wp_customize, 'solution_description_1', array(
				'label' => __( 'Description[1]', 'emanon' ),
				'section' => 'emanon_solution_section',
				'settings' => 'solution_description_1',
				'type' => 'text',
				'priority' => 7,
			) ) );

			// Solution url[1]
			$wp_customize->add_setting( 'solution_url_1', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control( 'solution_url_1', array(
				'label' => __( 'url[1]', 'emanon' ),
				'section' => 'emanon_solution_section',
				'settings' => 'solution_url_1',
				'type' => 'text',
				'priority' => 8,
			) );

			// Fontawesome Icon[2]
			$wp_customize->add_setting( 'solution_icon_2', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'solution_icon_2', array (
				'label' => __( 'Icon[2]', 'emanon' ),
				'description' => sprintf('%1$s <a href="https://fontawesome.com/v4.7.0/icons/" target="_blank">%2$s</a>.',
						__( "Fontawesome Icon Click" , 'emanon' ),
						__( "here" , 'emanon') ),
				'section' => 'emanon_solution_section',
				'settings' => 'solution_icon_2',
				'type' => 'text',
				'priority' => 9,
			) );

			// Solution image[2]
			$wp_customize->add_setting( 'solution_image_2', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'solution_image_2', array (
				'label' => __( 'Image[2]', 'emanon' ),
				'description' => __( 'The minimum size of the image is the width 96px height 96px.', 'emanon' ),
				'section' => 'emanon_solution_section',
				'settings' => 'solution_image_2',
				'type' => 'image',
				'priority' => 10,
			) ) );

			// Solution title[2]
			$wp_customize->add_setting( 'solution_title_2', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'solution_title_2', array(
				'label' => __( 'Title[2]', 'emanon' ),
				'section' => 'emanon_solution_section',
				'settings' => 'solution_title_2',
				'type' => 'text',
				'priority' => 11,
			) );

			// Solution description[2]
			$wp_customize->add_setting( 'solution_description_2', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( new Customize_Textarea_Control( $wp_customize, 'solution_description_2', array(
				'label' => __( 'Description[2]', 'emanon' ),
				'section' => 'emanon_solution_section',
				'settings' => 'solution_description_2',
				'type' => 'text',
				'priority' => 12,
			) ) );

			// Solution url[2]
			$wp_customize->add_setting( 'solution_url_2', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control( 'solution_url_2', array(
				'label' => __( 'url[2]', 'emanon' ),
				'section' => 'emanon_solution_section',
				'settings' => 'solution_url_2',
				'type' => 'text',
				'priority' => 13,
			) );

			// Fontawesome Icon[3]
			$wp_customize->add_setting( 'solution_icon_3', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'solution_icon_3', array (
				'label' => __( 'Icon[3]', 'emanon' ),
				'description' => sprintf('%1$s <a href="https://fontawesome.com/v4.7.0/icons/" target="_blank">%2$s</a>.',
						__( "Fontawesome Icon Click" , 'emanon' ),
						__( "here" , 'emanon') ),
				'section' => 'emanon_solution_section',
				'settings' => 'solution_icon_3',
				'type' => 'text',
				'priority' => 14,
			) );

			// Solution image[3]
			$wp_customize->add_setting( 'solution_image_3', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'solution_image_3', array (
				'label' => __( 'Image[3]', 'emanon' ),
				'description' => __( 'The minimum size of the image is the width 96px height 96px.', 'emanon' ),
				'section' => 'emanon_solution_section',
				'settings' => 'solution_image_3',
				'type' => 'image',
				'priority' => 15,
			) ) );

			// Solution title[3]
			$wp_customize->add_setting( 'solution_title_3', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'solution_title_3', array(
				'label' => __( 'Title[3]', 'emanon' ),
				'section' => 'emanon_solution_section',
				'settings' => 'solution_title_3',
				'type' => 'text',
				'priority' => 16,
			) );

			// Solution description[3]
			$wp_customize->add_setting( 'solution_description_3', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( new Customize_Textarea_Control( $wp_customize, 'solution_description_3', array(
				'label' => __( 'Description[3]', 'emanon' ),
				'section' => 'emanon_solution_section',
				'settings' => 'solution_description_3',
				'type' => 'text',
				'priority' => 17,
			) ) );

			// Solution url[3]
			$wp_customize->add_setting( 'solution_url_3', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control( 'solution_url_3', array(
				'label' => __( 'url[3]', 'emanon' ),
				'section' => 'emanon_solution_section',
				'settings' => 'solution_url_3',
				'type' => 'text',
				'priority' => 18,
			) );

			// Solution section background color
			$wp_customize->add_setting( 'solution_section_background_color', array(
				'default' => '#fff',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'solution_section_background_color', array(
				'label' => __( 'Background color', 'emanon' ),
				'section' => 'emanon_solution_section',
				'settings' => 'solution_section_background_color',
				'priority' => 19,
			) ) );

			// Solution section title color
			$wp_customize->add_setting( 'solution_section_title_color', array(
				'default' => '#000c15',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'solution_section_title_color', array(
				'label' => __( 'Title color', 'emanon' ),
				'section' => 'emanon_solution_section',
				'settings' => 'solution_section_title_color',
				'priority' => 20,
			) ) );

			// Solution section description color
			$wp_customize->add_setting( 'solution_section_description_color', array(
				'default' => '#303030',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'solution_section_description_color', array(
				'label' => __( 'Description color', 'emanon' ),
				'section' => 'emanon_solution_section',
				'settings' => 'solution_section_description_color',
				'priority' => 21,
			) ) );

			// Solution title color
			$wp_customize->add_setting( 'solution_title_color', array(
				'default' => '#000c15',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'solution_title_color', array(
				'label' => __( 'Title color［1］〜［3］', 'emanon' ),
				'section' => 'emanon_solution_section',
				'settings' => 'solution_title_color',
				'priority' => 22,
			) ) );

			// Solution description color
			$wp_customize->add_setting( 'solution_description_color', array(
				'default' => '#303030',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'solution_description_color', array(
				'label' => __( 'Description color［1］〜［3］', 'emanon' ),
				'section' => 'emanon_solution_section',
				'settings' => 'solution_description_color',
				'priority' => 23,
			) ) );

			// Solution icon color
			$wp_customize->add_setting( 'solution_icon_color', array(
				'default' => '#9b8d77',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'solution_icon_color', array(
				'label' => __( 'Icon color', 'emanon' ),
				'section' => 'emanon_solution_section',
				'settings' => 'solution_icon_color',
				'priority' => 24,
			) ) );

		/*------------------------------------------------------------------------------------
		/* Sales section
		/*----------------------------------------------------------------------------------*/
		$wp_customize->add_section( 'emanon_sales_section', array (
			'title' => __( 'Sales section settings', 'emanon' ),
			'priority' => 9,
			'panel' => 'emanon_front_page_settings',
		));

			// Display sales section
			$wp_customize->add_setting( 'display_sales_section', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_sales_section', array(
				'label' =>__( 'Display sales section', 'emanon' ),
				'section' => 'emanon_sales_section',
				'settings' => 'display_sales_section',
				'type' => 'checkbox',
				'priority' => 1,
			) );

			// Sales section title
			$wp_customize->add_setting( 'sales_section_title', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'sales_section_title', array(
				'label' => __( 'Section title', 'emanon' ),
				'section' => 'emanon_sales_section',
				'type' => 'text',
				'priority' => 2,
			) );

			// Sales section description
			$wp_customize->add_setting( 'sales_section_description', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( new Customize_Textarea_Control( $wp_customize, 'sales_section_description', array(
				'label' => __( 'Description', 'emanon' ),
				'section' => 'emanon_sales_section',
				'settings' => 'sales_section_description',
				'type' => 'text',
				'priority' => 3,
			) ) );

			// Sales section image
			$wp_customize->add_setting( 'sales_section_image', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'sales_section_image', array (
				'label' => __( 'Image', 'emanon' ),
				'section' => 'emanon_sales_section',
				'settings' => 'sales_section_image',
				'type' => 'image',
				'priority' => 4,
			) ) );

			// Video mp4
			$wp_customize->add_setting( 'sales_section_video_mp4', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'absint',
			) );
			$wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'sales_section_video_mp4', array(
				'label' => __( 'Movie MP4', 'emanon' ),
				'description' => __( 'Upload your video in mp4 format', 'emanon' ),
				'section' => 'emanon_sales_section',
				'settings' => 'sales_section_video_mp4',
				'mime_type' => 'video',
				'button_labels' => array(
					'select' => __( 'Select Video', 'emanon' ),
					'change' => __( 'Change Video', 'emanon' ),
					'placeholder' => __( 'No video selected', 'emanon' ),
					'frame_title' => __( 'Select Video', 'emanon' ),
					'frame_button' => __( 'Choose Video', 'emanon' ),
					),
				'priority' => 5,
			) ) );

			// Autoplay
			$wp_customize->add_setting( 'sales_section_video_autoplay', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'sales_section_video_autoplay', array(
				'label' =>__( 'Movie MP4 autoplay', 'emanon' ),
				'section' => 'emanon_sales_section',
				'settings' => 'sales_section_video_autoplay',
				'type' => 'checkbox',
				'priority' => 6,
			) );

			// Loop
			$wp_customize->add_setting( 'sales_section_video_loop', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'sales_section_video_loop', array(
				'label' =>__( 'Movie MP4 loop', 'emanon' ),
				'section' => 'emanon_sales_section',
				'settings' => 'sales_section_video_loop',
				'type' => 'checkbox',
				'priority' => 7,
			) );

			// Muted
			$wp_customize->add_setting( 'sales_section_video_muted', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'sales_section_video_muted', array(
				'label' =>__( 'Movie MP4 muted', 'emanon' ),
				'section' => 'emanon_sales_section',
				'settings' => 'sales_section_video_muted',
				'type' => 'checkbox',
				'priority' => 8,
			) );

			// Controls
			$wp_customize->add_setting( 'sales_section_video_controls', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'sales_section_video_controls', array(
				'label' =>__( 'Movie MP4 controls', 'emanon' ),
				'section' => 'emanon_sales_section',
				'settings' => 'sales_section_video_controls',
				'type' => 'checkbox',
				'priority' => 9,
			) );

			// Loop sp
			$wp_customize->add_setting( 'sales_section_video_loop_sp', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'sales_section_video_loop_sp', array(
				'label' =>__( 'Movie MP4 loop［SP］', 'emanon' ),
				'section' => 'emanon_sales_section',
				'settings' => 'sales_section_video_loop_sp',
				'type' => 'checkbox',
				'priority' => 10,
			) );

			// Muted sp
			$wp_customize->add_setting( 'sales_section_video_muted_sp', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'sales_section_video_muted_sp', array(
				'label' =>__( 'Movie MP4 muted［SP］', 'emanon' ),
				'section' => 'emanon_sales_section',
				'settings' => 'sales_section_video_muted_sp',
				'type' => 'checkbox',
				'priority' => 11,
			) );

			// Controls sp
			$wp_customize->add_setting( 'sales_section_video_controls_sp', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'sales_section_video_controls_sp', array(
				'label' =>__( 'Movie MP4 controls［SP］', 'emanon' ),
				'section' => 'emanon_sales_section',
				'settings' => 'sales_section_video_controls_sp',
				'type' => 'checkbox',
				'priority' => 12,
			) );

			// Sales section btn url
			$wp_customize->add_setting( 'sales_section_btn_url', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control( 'sales_section_btn_url', array(
				'label' => __( 'Button url', 'emanon' ),
				'section' => 'emanon_sales_section',
				'settings' => 'sales_section_btn_url',
				'type' => 'text',
				'priority' => 13,
			) );

			// Sales section btn text
			$wp_customize->add_setting( 'sales_section_btn_text', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'sales_section_btn_text', array(
				'label' => __( 'Button text', 'emanon' ),
				'section' => 'emanon_sales_section',
				'settings' => 'sales_section_btn_text',
				'type' => 'text',
				'priority' => 14,
			) );

			// Fontawesome Icon[1]
			$wp_customize->add_setting( 'sales_icon_1', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'sales_icon_1', array (
				'label' => __( 'Icon[1]', 'emanon' ),
				'description' => sprintf('%1$s <a href="https://fontawesome.com/v4.7.0/icons/" target="_blank">%2$s</a>.',
						__( "Fontawesome Icon Click" , 'emanon' ),
						__( "here" , 'emanon') ),
				'section' => 'emanon_sales_section',
				'settings' => 'sales_icon_1',
				'type' => 'text',
				'priority' => 15,
			) );

			// Sales title[1]
			$wp_customize->add_setting( 'sales_title_1', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'sales_title_1', array(
				'label' => __( 'Title[1]', 'emanon' ),
				'section' => 'emanon_sales_section',
				'settings' => 'sales_title_1',
				'type' => 'text',
				'priority' => 16,
			) );

			// Sales description[1]
			$wp_customize->add_setting( 'sales_description_1', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( new Customize_Textarea_Control( $wp_customize, 'sales_description_1', array(
				'label' => __( 'Description[1]', 'emanon' ),
				'section' => 'emanon_sales_section',
				'settings' => 'sales_description_1',
				'type' => 'text',
				'priority' => 17,
			) ) );

			// Sales url[1]
			$wp_customize->add_setting( 'sales_url_1', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control( 'sales_url_1', array(
				'label' => __( 'url[1]', 'emanon' ),
				'section' => 'emanon_sales_section',
				'settings' => 'sales_url_1',
				'type' => 'text',
				'priority' => 18,
			) );

			// Fontawesome Icon[2]
			$wp_customize->add_setting( 'sales_icon_2', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'sales_icon_2', array (
				'label' => __( 'Icon[2]', 'emanon' ),
				'description' => sprintf('%1$s <a href="https://fontawesome.com/v4.7.0/icons/" target="_blank">%2$s</a>.',
						__( "Fontawesome Icon Click" , 'emanon' ),
						__( "here" , 'emanon') ),
				'section' => 'emanon_sales_section',
				'settings' => 'sales_icon_2',
				'type' => 'text',
				'priority' => 19,
			) );

			// Sales title[2]
			$wp_customize->add_setting( 'sales_title_2', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'sales_title_2', array(
				'label' => __( 'Title[2]', 'emanon' ),
				'section' => 'emanon_sales_section',
				'settings' => 'sales_title_2',
				'type' => 'text',
				'priority' => 20,
			) );

			// Sales description[2]
			$wp_customize->add_setting( 'sales_description_2', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( new Customize_Textarea_Control( $wp_customize, 'sales_description_2', array(
				'label' => __( 'Description[2]', 'emanon' ),
				'section' => 'emanon_sales_section',
				'settings' => 'sales_description_2',
				'type' => 'text',
				'priority' => 21,
			) ) );

			// Sales url[2]
			$wp_customize->add_setting( 'sales_url_2', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control( 'sales_url_2', array(
				'label' => __( 'url[2]', 'emanon' ),
				'section' => 'emanon_sales_section',
				'settings' => 'sales_url_2',
				'type' => 'text',
				'priority' => 22,
			) );

			// Fontawesome Icon[3]
			$wp_customize->add_setting( 'sales_icon_3', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'sales_icon_3', array (
				'label' => __( 'Icon[3]', 'emanon' ),
				'description' => sprintf('%1$s <a href="https://fontawesome.com/v4.7.0/icons/" target="_blank">%2$s</a>.',
						__( "Fontawesome Icon Click" , 'emanon' ),
						__( "here" , 'emanon') ),
				'section' => 'emanon_sales_section',
				'settings' => 'sales_icon_3',
				'type' => 'text',
				'priority' => 23,
			) );

			// Sales title[3]
			$wp_customize->add_setting( 'sales_title_3', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'sales_title_3', array(
				'label' => __( 'Title[3]', 'emanon' ),
				'section' => 'emanon_sales_section',
				'settings' => 'sales_title_3',
				'type' => 'text',
				'priority' => 24,
			) );

			// Sales description[3]
			$wp_customize->add_setting( 'sales_description_3', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( new Customize_Textarea_Control( $wp_customize, 'sales_description_3', array(
				'label' => __( 'Description[3]', 'emanon' ),
				'section' => 'emanon_sales_section',
				'settings' => 'sales_description_3',
				'type' => 'text',
				'priority' => 25,
			) ) );

			// Sales url[3]
			$wp_customize->add_setting( 'sales_url_3', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control( 'sales_url_3', array(
				'label' => __( 'url[3]', 'emanon' ),
				'section' => 'emanon_sales_section',
				'settings' => 'sales_url_3',
				'type' => 'text',
				'priority' => 26,
			) );

			// Sales section background color
			$wp_customize->add_setting( 'sales_section_background_color', array(
				'default' => '#f8f8f8',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sales_section_background_color', array(
				'label' => __( 'Section background color', 'emanon' ),
				'section' => 'emanon_sales_section',
				'settings' => 'sales_section_background_color',
				'priority' => 27,
			) ) );

			// Sales section title color
			$wp_customize->add_setting( 'sales_section_title_color', array(
				'default' => '#000c15',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sales_section_title_color', array(
				'label' => __( 'Section title color', 'emanon' ),
				'section' => 'emanon_sales_section',
				'settings' => 'sales_section_title_color',
				'priority' => 28,
			) ) );

			// Sales section description color
			$wp_customize->add_setting( 'sales_section_description_color', array(
				'default' => '#303030',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sales_section_description_color', array(
				'label' => __( 'Section description color', 'emanon' ),
				'section' => 'emanon_sales_section',
				'settings' => 'sales_section_description_color',
				'priority' => 29,
			) ) );

			// Sales section button background color
			$wp_customize->add_setting( 'sales_section_btn_background_color', array(
				'default' => '#9b8d77',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sales_section_btn_background_color', array(
				'label' => __( 'Button background color', 'emanon' ),
				'section' => 'emanon_sales_section',
				'settings' => 'sales_section_btn_background_color',
				'priority' => 30,
			) ) );

			// Sales section button text color
			$wp_customize->add_setting( 'sales_section_btn_text_color', array(
				'default' => '#fff',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sales_section_btn_text_color', array(
				'label' => __( 'Button text color', 'emanon' ),
				'section' => 'emanon_sales_section',
				'settings' => 'sales_section_btn_text_color',
				'priority' => 31,
			) ) );

			// Sales icon color
			$wp_customize->add_setting( 'sales_icon_color', array(
				'default' => '#9b8d77',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sales_icon_color', array(
				'label' => __( 'Icon color', 'emanon' ),
				'section' => 'emanon_sales_section',
				'settings' => 'sales_icon_color',
				'priority' => 32,
			) ) );

			// Sales title color
			$wp_customize->add_setting( 'sales_title_color', array(
				'default' => '#000c15',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sales_title_color', array(
				'label' => __( 'Title color［1］〜［3］', 'emanon' ),
				'section' => 'emanon_sales_section',
				'settings' => 'sales_title_color',
				'priority' => 33,
			) ) );

			// Sales description color
			$wp_customize->add_setting( 'sales_description_color', array(
				'default' => '#303030',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sales_description_color', array(
				'label' => __( 'Description color［1］〜［3］', 'emanon' ),
				'section' => 'emanon_sales_section',
				'settings' => 'sales_description_color',
				'priority' => 34,
			) ) );

		/*------------------------------------------------------------------------------------
		/* Benefit section
		/*----------------------------------------------------------------------------------*/
		$wp_customize->add_section( 'emanon_benefit_section', array (
			'title' => __( 'Benefit section settings', 'emanon' ),
			'priority' => 10,
			'panel' => 'emanon_front_page_settings',
		));

			// Display benefit section
			$wp_customize->add_setting( 'display_benefit_section', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_benefit_section', array(
				'label' =>__( 'Display benefit section', 'emanon' ),
				'section' => 'emanon_benefit_section',
				'settings' => 'display_benefit_section',
				'type' => 'checkbox',
				'priority' => 1,
			) );

			// Benefit section layout
			$wp_customize->add_setting( 'benefit_section_layout', array(
				'default' => 4,
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_section_layout_type',
			) );
			$wp_customize->add_control( 'benefit_section_layout', array(
				'label' => __( 'Section layout type', 'emanon' ),
				'section' => 'emanon_benefit_section',
				'settings' => 'benefit_section_layout',
				'type' => 'radio',
				'choices' => array(
					4 => __( 'One row', 'emanon' ),
					7 => __( 'Two row', 'emanon' ),
					),
				'priority' => 2,
			) );

			// Benefit section title
			$wp_customize->add_setting( 'benefit_section_title', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'benefit_section_title', array(
				'label' => __( 'Section title', 'emanon' ),
				'section' => 'emanon_benefit_section',
				'settings' => 'benefit_section_title',
				'type' => 'text',
				'priority' => 3,
			) );

			// Benefit section description
			$wp_customize->add_setting( 'benefit_section_description', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( new Customize_Textarea_Control( $wp_customize, 'benefit_section_description', array(
				'label' => __( 'Description', 'emanon' ),
				'section' => 'emanon_benefit_section',
				'settings' => 'benefit_section_description',
				'type' => 'text',
				'priority' => 4,
			) ) );

			// Benefit title[1]
			$wp_customize->add_setting( 'benefit_title_1', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'benefit_title_1', array(
				'label' => __( 'Title[1]', 'emanon' ),
				'section' => 'emanon_benefit_section',
				'settings' => 'benefit_title_1',
				'type' => 'text',
				'priority' => 5,
			) );

			// Benefit description[1]
			$wp_customize->add_setting( 'benefit_description_1', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( new Customize_Textarea_Control( $wp_customize, 'benefit_description_1', array(
				'label' => __( 'Description[1]', 'emanon' ),
				'section' => 'emanon_benefit_section',
				'settings' => 'benefit_description_1',
				'type' => 'text',
				'priority' => 6,
			) ) );

			// Benefit url[1]
			$wp_customize->add_setting( 'benefit_url_1', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control( 'benefit_url_1', array(
				'label' => __( 'url[1]', 'emanon' ),
				'section' => 'emanon_benefit_section',
				'settings' => 'benefit_url_1',
				'type' => 'text',
				'priority' => 7,
			) );

			// Fontawesome Icon[1]
			$wp_customize->add_setting( 'benefit_icon_1', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'benefit_icon_1', array (
				'label' => __( 'Icon[1]', 'emanon' ),
				'description' => sprintf('%1$s <a href="https://fontawesome.com/v4.7.0/icons/" target="_blank">%2$s</a>.',
						__( "Fontawesome Icon Click" , 'emanon' ),
						__( "here" , 'emanon') ),
				'section' => 'emanon_benefit_section',
				'settings' => 'benefit_icon_1',
				'type' => 'text',
				'priority' => 8,
			) );

			// Benefit section image[1]
			$wp_customize->add_setting( 'benefit_image_1', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'benefit_image_1', array (
				'label' => __( 'Image[1]', 'emanon' ),
				'description' => __( 'The minimum size of the image is the width 350px.', 'emanon' ),
				'section' => 'emanon_benefit_section',
				'settings' => 'benefit_image_1',
				'type' => 'image',
				'priority' => 9,
			) ) );

			// Benefit section title[2]
			$wp_customize->add_setting( 'benefit_title_2', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'benefit_title_2', array(
				'label' => __( 'Title[2]', 'emanon' ),
				'section' => 'emanon_benefit_section',
				'settings' => 'benefit_title_2',
				'type' => 'text',
				'priority' => 10,
			) );

			// Benefit section description[2]
			$wp_customize->add_setting( 'benefit_description_2', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( new Customize_Textarea_Control( $wp_customize, 'benefit_description_2', array(
				'label' => __( 'Description[2]', 'emanon' ),
				'section' => 'emanon_benefit_section',
				'settings' => 'benefit_description_2',
				'type' => 'text',
				'priority' => 11,
			) ) );

			// Benefit section url[2]
			$wp_customize->add_setting( 'benefit_url_2', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control( 'benefit_url_2', array(
				'label' => __( 'url[2]', 'emanon' ),
				'section' => 'emanon_benefit_section',
				'settings' => 'benefit_url_2',
				'type' => 'text',
				'priority' => 12,
			) );

			// Fontawesome Icon[2]
			$wp_customize->add_setting( 'benefit_icon_2', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'benefit_icon_2', array (
				'label' => __( 'Icon[2]', 'emanon' ),
				'description' => sprintf('%1$s <a href="https://fontawesome.com/v4.7.0/icons/" target="_blank">%2$s</a>.',
						__( "Fontawesome Icon Click" , 'emanon' ),
						__( "here" , 'emanon') ),
				'section' => 'emanon_benefit_section',
				'settings' => 'benefit_icon_2',
				'type' => 'text',
				'priority' => 13,
			) );

			// Benefit section image[2]
			$wp_customize->add_setting( 'benefit_image_2', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'benefit_image_2', array (
				'label' => __( 'Image[2]', 'emanon' ),
				'description' => __( 'The minimum size of the image is the width 350px.', 'emanon' ),
				'section' => 'emanon_benefit_section',
				'settings' => 'benefit_image_2',
				'type' => 'image',
				'priority' => 14,
			) ) );

			// Benefit section title[3]
			$wp_customize->add_setting( 'benefit_title_3', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'benefit_title_3', array(
				'label' => __( 'Title[3]', 'emanon' ),
				'section' => 'emanon_benefit_section',
				'settings' => 'benefit_title_3',
				'type' => 'text',
				'priority' => 15,
			) );

			// Benefit section description[3]
			$wp_customize->add_setting( 'benefit_description_3', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( new Customize_Textarea_Control( $wp_customize, 'benefit_description_3', array(
				'label' => __( 'Description[3]', 'emanon' ),
				'section' => 'emanon_benefit_section',
				'settings' => 'benefit_description_3',
				'type' => 'text',
				'priority' => 16,
			) ) );

			// Benefit section url[3]
			$wp_customize->add_setting( 'benefit_url_3', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control( 'benefit_url_3', array(
				'label' => __( 'url[3]', 'emanon' ),
				'section' => 'emanon_benefit_section',
				'settings' => 'benefit_url_3',
				'type' => 'text',
				'priority' => 17,
			) );

			// Fontawesome Icon[3]
			$wp_customize->add_setting( 'benefit_icon_3', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'benefit_icon_3', array (
				'label' => __( 'Icon[3]', 'emanon' ),
				'description' => sprintf('%1$s <a href="https://fontawesome.com/v4.7.0/icons/" target="_blank">%2$s</a>.',
						__( "Fontawesome Icon Click" , 'emanon' ),
						__( "here" , 'emanon') ),
				'section' => 'emanon_benefit_section',
				'settings' => 'benefit_icon_3',
				'type' => 'text',
				'priority' => 18,
			) );

			// Benefit section image[3]
			$wp_customize->add_setting( 'benefit_image_3', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'benefit_image_3', array (
				'label' => __( 'Image[3]', 'emanon' ),
				'description' => __( 'The minimum size of the image is the width 350px.', 'emanon' ),
				'section' => 'emanon_benefit_section',
				'settings' => 'benefit_image_3',
				'type' => 'image',
				'priority' => 19,
			) ) );

			// Benefit section title[4]
			$wp_customize->add_setting( 'benefit_title_4', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'benefit_title_4', array(
				'label' => __( 'Title[4]', 'emanon' ),
				'section' => 'emanon_benefit_section',
				'settings' => 'benefit_title_4',
				'type' => 'text',
				'priority' => 20,
			) );

			// Benefit section description[4]
			$wp_customize->add_setting( 'benefit_description_4', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( new Customize_Textarea_Control( $wp_customize, 'benefit_description_4', array(
				'label' => __( 'Description[4]', 'emanon' ),
				'section' => 'emanon_benefit_section',
				'settings' => 'benefit_description_4',
				'type' => 'text',
				'priority' => 21,
			) ) );

			// Benefit section url[4]
			$wp_customize->add_setting( 'benefit_url_4', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control( 'benefit_url_4', array(
				'label' => __( 'url[4]', 'emanon' ),
				'section' => 'emanon_benefit_section',
				'settings' => 'benefit_url_4',
				'type' => 'text',
				'priority' => 22,
			) );

			// Fontawesome Icon[4]
			$wp_customize->add_setting( 'benefit_icon_4', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'benefit_icon_4', array (
				'label' => __( 'Icon[4]', 'emanon' ),
				'description' => sprintf('%1$s <a href="https://fontawesome.com/v4.7.0/icons/" target="_blank">%2$s</a>.',
						__( "Fontawesome Icon Click" , 'emanon' ),
						__( "here" , 'emanon') ),
				'section' => 'emanon_benefit_section',
				'settings' => 'benefit_icon_4',
				'type' => 'text',
				'priority' => 23,
			) );

			// Benefit section image[4]
			$wp_customize->add_setting( 'benefit_image_4', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'benefit_image_4', array (
				'label' => __( 'Image[4]', 'emanon' ),
				'description' => __( 'The minimum size of the image is the width 350px.', 'emanon' ),
				'section' => 'emanon_benefit_section',
				'settings' => 'benefit_image_4',
				'type' => 'image',
				'priority' => 24,
			) ) );

			// Benefit section title[5]
			$wp_customize->add_setting( 'benefit_title_5', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'benefit_title_5', array(
				'label' => __( 'Title[5]', 'emanon' ),
				'section' => 'emanon_benefit_section',
				'settings' => 'benefit_title_5',
				'type' => 'text',
				'priority' => 25,
			) );

			// Benefit section description[5]
			$wp_customize->add_setting( 'benefit_description_5', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( new Customize_Textarea_Control( $wp_customize, 'benefit_description_5', array(
				'label' => __( 'Description[5]', 'emanon' ),
				'section' => 'emanon_benefit_section',
				'settings' => 'benefit_description_5',
				'type' => 'text',
				'priority' => 26,
			) ) );

			// Benefit section url[5]
			$wp_customize->add_setting( 'benefit_url_5', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control( 'benefit_url_5', array(
				'label' => __( 'url[5]', 'emanon' ),
				'section' => 'emanon_benefit_section',
				'settings' => 'benefit_url_5',
				'type' => 'text',
				'priority' => 27,
			) );

			// Fontawesome Icon[5]
			$wp_customize->add_setting( 'benefit_icon_5', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'benefit_icon_5', array (
				'label' => __( 'Icon[5]', 'emanon' ),
				'description' => sprintf('%1$s <a href="https://fontawesome.com/v4.7.0/icons/" target="_blank">%2$s</a>.',
						__( "Fontawesome Icon Click" , 'emanon' ),
						__( "here" , 'emanon') ),
				'section' => 'emanon_benefit_section',
				'settings' => 'benefit_icon_5',
				'type' => 'text',
				'priority' => 28,
			) );

			// Benefit section image[5]
			$wp_customize->add_setting( 'benefit_image_5', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'benefit_image_5', array (
				'label' => __( 'Image[5]', 'emanon' ),
				'description' => __( 'The minimum size of the image is the width 350px.', 'emanon' ),
				'section' => 'emanon_benefit_section',
				'settings' => 'benefit_image_5',
				'type' => 'image',
				'priority' => 29,
			) ) );

			// Benefit section title[6]
			$wp_customize->add_setting( 'benefit_title_6', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'benefit_title_6', array(
				'label' => __( 'Title[6]', 'emanon' ),
				'section' => 'emanon_benefit_section',
				'settings' => 'benefit_title_6',
				'type' => 'text',
				'priority' => 30,
			) );

			// Benefit section description[6]
			$wp_customize->add_setting( 'benefit_description_6', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( new Customize_Textarea_Control( $wp_customize, 'benefit_description_6', array(
				'label' => __( 'Description[6]', 'emanon' ),
				'section' => 'emanon_benefit_section',
				'settings' => 'benefit_description_6',
				'type' => 'text',
				'priority' => 31,
			) ) );

			// Benefit section url[6]
			$wp_customize->add_setting( 'benefit_url_6', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control( 'benefit_url_6', array(
				'label' => __( 'url[6]', 'emanon' ),
				'section' => 'emanon_benefit_section',
				'settings' => 'benefit_url_6',
				'type' => 'text',
				'priority' => 32,
			) );

			// Fontawesome Icon[6]
			$wp_customize->add_setting( 'benefit_icon_6', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'benefit_icon_6', array (
				'label' => __( 'Icon[6]', 'emanon' ),
				'description' => sprintf('%1$s <a href="https://fontawesome.com/v4.7.0/icons/" target="_blank">%2$s</a>.',
						__( "Fontawesome Icon Click" , 'emanon' ),
						__( "here" , 'emanon') ),
				'section' => 'emanon_benefit_section',
				'settings' => 'benefit_icon_6',
				'type' => 'text',
				'priority' => 33,
			) );

			// Benefit section image[6]
			$wp_customize->add_setting( 'benefit_image_6', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'benefit_image_6', array (
				'label' => __( 'Image[6]', 'emanon' ),
				'description' => __( 'The minimum size of the image is the width 350px.', 'emanon' ),
				'section' => 'emanon_benefit_section',
				'settings' => 'benefit_image_6',
				'type' => 'image',
				'priority' => 34,
			) ) );

			// Benefit btn url
			$wp_customize->add_setting( 'benefit_btn_url', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control( 'benefit_btn_url', array(
				'label' => __( 'Button url', 'emanon' ),
				'section' => 'emanon_benefit_section',
				'settings' => 'benefit_btn_url',
				'type' => 'text',
				'priority' => 35,
			) );

			// Benefit btn text
			$wp_customize->add_setting( 'benefit_btn_text', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'benefit_btn_text', array(
				'label' => __( 'Button text', 'emanon' ),
				'section' => 'emanon_benefit_section',
				'settings' => 'benefit_btn_text',
				'type' => 'text',
				'priority' => 36,
			) );

			// Benefit section background color
			$wp_customize->add_setting( 'benefit_section_background_color', array(
				'default' => '#fff',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'benefit_section_background_color', array(
				'label' => __( 'Section background color', 'emanon' ),
				'section' => 'emanon_benefit_section',
				'settings' => 'benefit_section_background_color',
				'priority' => 36,
			) ) );

			// Benefit section title color
			$wp_customize->add_setting( 'benefit_section_title_color', array(
				'default' => '#000c15',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'benefit_section_title_color', array(
				'label' => __( 'Section title color', 'emanon' ),
				'section' => 'emanon_benefit_section',
				'settings' => 'benefit_section_title_color',
				'priority' => 37,
			) ) );

			// Benefit section description color
			$wp_customize->add_setting( 'benefit_section_description_color', array(
				'default' => '#303030',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'benefit_section_description_color', array(
				'label' => __( 'Section description color', 'emanon' ),
				'section' => 'emanon_benefit_section',
				'settings' => 'benefit_section_description_color',
				'priority' => 38,
			) ) );

			// Benefit box background color
			$wp_customize->add_setting( 'benefit_box_background_color', array(
				'default' => '#f4f4f4',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'benefit_box_background_color', array(
				'label' => __( 'Box background color', 'emanon' ),
				'section' => 'emanon_benefit_section',
				'settings' => 'benefit_box_background_color',
				'priority' => 39,
			) ) );

			// Benefit icon color
			$wp_customize->add_setting( 'benefit_icon_color', array(
				'default' => '#9b8d77',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'benefit_icon_color', array(
				'label' => __( 'Icon color', 'emanon' ),
				'section' => 'emanon_benefit_section',
				'settings' => 'benefit_icon_color',
				'priority' => 40,
			) ) );

			// Benefit title color
			$wp_customize->add_setting( 'benefit_title_color', array(
				'default' => '#000c15',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'benefit_title_color', array(
				'label' => __( 'Benefit title color', 'emanon' ),
				'section' => 'emanon_benefit_section',
				'settings' => 'benefit_title_color',
				'priority' => 41,
			) ) );

			// Benefit description color
			$wp_customize->add_setting( 'benefit_description_color', array(
				'default' => '#303030',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'benefit_description_color', array(
				'label' => __( 'Benefit description color', 'emanon' ),
				'section' => 'emanon_benefit_section',
				'settings' => 'benefit_description_color',
				'priority' => 42,
			) ) );

			// Benefit section button background color
			$wp_customize->add_setting( 'benefit_section_btn_background_color', array(
				'default' => '#9b8d77',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'benefit_section_btn_background_color', array(
				'label' => __( 'Button background color', 'emanon' ),
				'section' => 'emanon_benefit_section',
				'settings' => 'benefit_section_btn_background_color',
				'priority' => 43,
			) ) );

			// Benefit section button text color
			$wp_customize->add_setting( 'benefit_section_btn_text_color', array(
				'default' => '#fff',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'benefit_section_btn_text_color', array(
				'label' => __( 'Button text color', 'emanon' ),
				'section' => 'emanon_benefit_section',
				'settings' => 'benefit_section_btn_text_color',
				'priority' => 44,
			) ) );

		/*------------------------------------------------------------------------------------
		/* Case Section
		/*----------------------------------------------------------------------------------*/
		$wp_customize->add_section( 'emanon_case_section', array (
			'title' => __( 'Case section settings', 'emanon' ),
			'priority' => 11,
			'panel' => 'emanon_front_page_settings',
		) );

			// Display case section
			$wp_customize->add_setting( 'display_case_section', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_case_section', array(
				'label' =>__( 'Display case section', 'emanon' ),
				'section' => 'emanon_case_section',
				'settings' => 'display_case_section',
				'type' => 'checkbox',
				'priority' => 1,
			) );

			// Case article type
			$wp_customize->add_setting( 'case_article_type', array(
				'default' => 'works',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_case_article_type',
			) );
			$wp_customize->add_control( 'case_article_type', array(
				'label' => __( 'Case article type', 'emanon' ),
				'section' => 'emanon_case_section',
				'settings' => 'case_article_type',
				'type' => 'radio',
				'choices' => array(
					'post' => __( 'Display post', 'emanon' ),
					'page' => __( 'Display page', 'emanon' ),
					),
				'priority' => 2,
			) );

			// Display type
			$wp_customize->add_setting( 'case_display_type', array(
				'default' => 'category',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_case_display_type',
			) );
			$wp_customize->add_control( 'case_display_type', array(
				'label' => __( 'Case display type', 'emanon' ),
				'section' => 'emanon_case_section',
				'settings' => 'case_display_type',
				'type' => 'radio',
				'choices' => array(
					'category' => __( 'Display Category (Selected id)', 'emanon' ),
					'featured' => __( 'Display Featured', 'emanon' ),
					'new_arrivals' => __( 'Display New arrivals', 'emanon' ),
					),
				'priority' => 3,
			) );

			// Category id
			$wp_customize->add_setting( 'case_category_id', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'case_category_id', array(
				'label' => __( 'Category id', 'emanon' ),
				'description' => __( 'When the display type is category, please enter category id.', 'emanon' ),
				'section' => 'emanon_case_section',
				'settings' => 'case_category_id',
				'type' => 'text',
				'priority' => 4,
			) );

			// Number of case article
			$wp_customize->add_setting( 'case_max', array(
				'default' => 3,
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_number',
			) );
			$wp_customize->add_control( 'case_max', array(
				'label' => __( 'Number of entry (default 3)', 'emanon' ),
				'section' => 'emanon_case_section',
				'settings' => 'case_max',
				'type' => 'number',
				'input_attrs' => array(
					'min' => 1,
					'step' => 1,
				),
				'priority' => 5,
			) );

			// Case section title
			$wp_customize->add_setting( 'case_section_title', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'case_section_title', array(
				'label' => __( 'Section title', 'emanon' ),
				'section' => 'emanon_case_section',
				'settings' => 'case_section_title',
				'type' => 'text',
				'priority' => 6,
			) );

			// Case section description
			$wp_customize->add_setting( 'case_section_description', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( new Customize_Textarea_Control( $wp_customize, 'case_section_description', array(
				'label' => __( 'Description', 'emanon' ),
				'section' => 'emanon_case_section',
				'settings' => 'case_section_description',
				'type' => 'text',
				'priority' => 7,
			) ) );

			// Case section label
			$wp_customize->add_setting( 'case_section_label', array(
				'default' => __( 'Case', 'emanon' ),
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'case_section_label', array(
				'label' => __( 'Section label', 'emanon' ),
				'section' => 'emanon_case_section',
				'settings' => 'case_section_label',
				'type' => 'text',
				'priority' => 8,
			) );

			// Case btn url
			$wp_customize->add_setting( 'case_btn_url', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control( 'case_btn_url', array(
				'label' => __( 'Button url', 'emanon' ),
				'section' => 'emanon_case_section',
				'settings' => 'case_btn_url',
				'type' => 'text',
				'priority' => 9,
			) );

			// Case btn text
			$wp_customize->add_setting( 'case_btn_text', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'case_btn_text', array(
				'label' => __( 'Button text', 'emanon' ),
				'section' => 'emanon_case_section',
				'settings' => 'case_btn_text',
				'type' => 'text',
				'priority' => 10,
			) );

			// Title color
			$wp_customize->add_setting( 'case_title_color', array(
				'default' => '#000c15',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'case_title_color', array(
				'label' => __( 'Title color', 'emanon' ),
				'section' => 'emanon_case_section',
				'settings' => 'case_title_color',
				'priority' => 11,
			) ) );

			// Description color
			$wp_customize->add_setting( 'case_description_color', array(
				'default' => '#303030',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'case_description_color', array(
				'label' => __( 'Description color', 'emanon' ),
				'section' => 'emanon_case_section',
				'settings' => 'case_description_color',
				'priority' => 12,
			) ) );

			// Text color
			$wp_customize->add_setting( 'case_text_color', array(
				'default' => '#303030',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'case_text_color', array(
				'label' => __( 'Text color', 'emanon' ),
				'section' => 'emanon_case_section',
				'settings' => 'case_text_color',
				'priority' => 13,
			) ) );

			// Case section button background color
			$wp_customize->add_setting( 'case_section_btn_background_color', array(
				'default' => '#9b8d77',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'case_section_btn_background_color', array(
				'label' => __( 'Button background color', 'emanon' ),
				'section' => 'emanon_case_section',
				'settings' => 'case_section_btn_background_color',
				'priority' => 14,
			) ) );

			// Case section button text color
			$wp_customize->add_setting( 'case_section_btn_text_color', array(
				'default' => '#fff',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'case_section_btn_text_color', array(
				'label' => __( 'Button text color', 'emanon' ),
				'section' => 'emanon_case_section',
				'settings' => 'case_section_btn_text_color',
				'priority' => 15,
			) ) );

			// Background color
			$wp_customize->add_setting( 'case_section_background_color', array(
				'default' => '#f8f8f8',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'case_section_background_color', array(
				'label' => __( 'Background color', 'emanon' ),
				'section' => 'emanon_case_section',
				'settings' => 'case_section_background_color',
				'priority' => 16,
			) ) );

		/*------------------------------------------------------------------------------------
		/* Product section
		/*----------------------------------------------------------------------------------*/
		$wp_customize->add_section( 'emanon_product_section', array (
			'title' => __( 'Product section settings', 'emanon' ),
			'priority' => 11,
			'panel' => 'emanon_front_page_settings',
		));

			// Display product section
			$wp_customize->add_setting( 'display_product_section', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_product_section', array(
				'label' =>__( 'Display product section', 'emanon' ),
				'section' => 'emanon_product_section',
				'settings' => 'display_product_section',
				'type' => 'checkbox',
				'priority' => 1,
			) );

			// Product section image
			$wp_customize->add_setting( 'product_background_image', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'product_background_image', array (
				'label' => __( 'Image', 'emanon' ),
				'section' => 'emanon_product_section',
				'settings' => 'product_background_image',
				'type' => 'image',
				'priority' => 2,
			) ) );
	
			// Product background image height
			$wp_customize->add_setting( 'product_background_image_height', array(
				'default' => 400,
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_number',
			) );
			$wp_customize->add_control( 'product_background_image_height', array(
				'label' => __( 'Product image height (default 400px)', 'emanon' ),
				'section' => 'emanon_product_section',
				'settings' => 'product_background_image_height',
				'type' => 'number',
				'input_attrs' => array(
					'min' => 224,
					'max' => 640,
					'step' => 1,
				),
				'priority' => 3,
			) );

			// Product message layout type
			$wp_customize->add_setting( 'product_message_layout_type', array(
				'default' => 'product_message_center',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_product_message_layout_type',
			) );
			$wp_customize->add_control( 'product_message_layout_type', array(
				'label' => __( 'Product message layout type', 'emanon' ),
				'section' => 'emanon_product_section',
				'settings' => 'product_message_layout_type',
				'type' => 'radio',
				'choices' => array(
					'product_message_left' => __( 'Message left layout', 'emanon' ),
					'product_message_center' => __( 'Message center layout', 'emanon' ),
					'product_message_right' => __( 'Message right layout', 'emanon' ),
					),
				'priority' => 4,
			) );

			// Product section title
			$wp_customize->add_setting( 'product_section_title', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'product_section_title', array(
				'label' => __( 'Section title', 'emanon' ),
				'section' => 'emanon_product_section',
				'settings' => 'product_section_title',
				'type' => 'text',
				'priority' => 5,
			) );

			// Product section description
			$wp_customize->add_setting( 'product_section_description', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( new Customize_Textarea_Control( $wp_customize, 'product_section_description', array(
				'label' => __( 'Description', 'emanon' ),
				'section' => 'emanon_product_section',
				'settings' => 'product_section_description',
				'type' => 'text',
				'priority' => 6,
			) ) );

			// Product btn text
			$wp_customize->add_setting( 'product_btn_text', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'product_btn_text', array(
				'label' => __( 'Button text', 'emanon' ),
				'section' => 'emanon_product_section',
				'settings' => 'product_btn_text',
				'type' => 'text',
				'priority' => 7,
			) );

			// Product btn url
			$wp_customize->add_setting( 'product_btn_url', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control( 'product_btn_url', array(
				'label' => __( 'CTA button url #contactfrom-section', 'emanon' ),
				'section' => 'emanon_product_section',
				'settings' => 'product_btn_url',
				'type' => 'text',
				'priority' => 8,
			) );

			// Product section title color
			$wp_customize->add_setting( 'product_section_title_color', array(
				'default' => '#fff',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'product_section_title_color', array(
				'label' => __( 'Section title color', 'emanon' ),
				'section' => 'emanon_product_section',
				'settings' => 'product_section_title_color',
				'priority' => 9,
			) ) );

			// Product section description color
			$wp_customize->add_setting( 'product_section_description_color', array(
				'default' => '#fff',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'product_section_description_color', array(
				'label' => __( 'Section description color', 'emanon' ),
				'section' => 'emanon_product_section',
				'settings' => 'product_section_description_color',
				'priority' => 10,
			) ) );

			// Product button background color
			$wp_customize->add_setting( 'product_section_btn_background_color', array(
				'default' => '#9b8d77',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'product_section_btn_background_color', array(
				'label' => __( 'Button background color', 'emanon' ),
				'section' => 'emanon_product_section',
				'settings' => 'product_section_btn_background_color',
				'priority' => 11,
			) ) );

			// Product button text color
			$wp_customize->add_setting( 'product_section_btn_text_color', array(
				'default' => '#fff',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'product_section_btn_text_color', array(
				'label' => __( 'Button text color', 'emanon' ),
				'section' => 'emanon_product_section',
				'settings' => 'product_section_btn_text_color',
				'priority' => 12,
			) ) );

			// Product section background color start
			$wp_customize->add_setting( 'product_section_background_color_start', array(
				'default' => '#000',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'product_section_background_color_start', array(
				'label' => __( 'Background color ［start］', 'emanon' ),
				'section' => 'emanon_product_section',
				'settings' => 'product_section_background_color_start',
				'priority' => 13,
			) ) );

			// Product section background color end
			$wp_customize->add_setting( 'product_section_background_color_end', array(
				'default' => '#000',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'product_section_background_color_end', array(
				'label' => __( 'Background color ［end］', 'emanon' ),
				'section' => 'emanon_product_section',
				'settings' => 'product_section_background_color_end',
				'priority' => 14,
			) ) );

			// Product section background color degree
			$wp_customize->add_setting( 'product_section_background_color_degree', array(
				'default' => 135,
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_number',
			) );
			$wp_customize->add_control( 'product_section_background_color_degree', array(
				'label' => __( 'Degree', 'emanon' ),
				'section' => 'emanon_product_section',
				'settings' => 'product_section_background_color_degree',
				'type' => 'number',
				'priority' => 15,
			) );

			// Dsplay overlay pattern
			$wp_customize->add_setting( 'product_display_overlay', array(
				'default' => 'pattern_none',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_overlay_pattern_type',
			) );
			$wp_customize->add_control( 'product_display_overlay', array(
				'label' =>__( 'Dsplay overlay pattern', 'emanon' ),
				'section' => 'emanon_product_section',
				'settings' => 'product_display_overlay',
				'type' => 'radio',
				'choices' => array(
					'pattern_none' => __( 'None display pattern', 'emanon' ),
					'pattern_dots' => __( 'Display display pattern dots', 'emanon' ),
					'pattern_diamond' => __( 'Display pattern diamond', 'emanon' ),
					),
				'priority' => 16,
			) );

			// Product background color opacity
			$wp_customize->add_setting( 'product_background_opacity', array(
				'default' => 0,
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_rangeslider'
			) );
			$wp_customize->add_control( 'product_background_opacity', array(
				'label' => __( 'Background color opacity', 'emanon' ),
				'section' => 'emanon_product_section',
				'settings' => 'product_background_opacity',
				'type' => 'range',
					'input_attrs' => array(
					'min' => 0,
					'max' => 1,
					'step' => 0.05,
					),
				'priority' => 17,
			) );

		/*------------------------------------------------------------------------------------
		/* Price Table Section
		/*----------------------------------------------------------------------------------*/
		$wp_customize->add_section( 'emanon_price_table', array (
			'title' => __( 'Price Table section settings', 'emanon' ),
			'priority' => 12,
			'panel' => 'emanon_front_page_settings',
		));

			// Display lp header cta
			$wp_customize->add_setting( 'display_price_table_section', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_price_table_section', array(
				'label' =>__( 'Display price table section', 'emanon' ),
				'section' => 'emanon_price_table',
				'settings' => 'display_price_table_section',
				'type' => 'checkbox',
				'priority' => 1,
			) );

			// Price section title
			$wp_customize->add_setting( 'price_table_section_title', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'price_table_section_title', array(
				'label' => __( 'Section title', 'emanon' ),
				'section' => 'emanon_price_table',
				'settings' => 'price_table_section_title',
				'type' => 'text',
				'priority' => 2,
			) );

			// Price section description
			$wp_customize->add_setting( 'price_table_section_description', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( new Customize_Textarea_Control( $wp_customize, 'price_table_section_description', array(
				'label' => __( 'Description', 'emanon' ),
				'section' => 'emanon_price_table',
				'settings' => 'price_table_section_description',
				'type' => 'text',
				'priority' => 3,
			) ) );

			// Item[1]
			$wp_customize->add_setting( 'price_item_1', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'price_item_1', array(
				'label' => __( 'Item[1]', 'emanon' ),
				'section' => 'emanon_price_table',
				'settings' => 'price_item_1',
				'type' => 'text',
				'priority' => 4,
			) );

			// Selling price[1]
			$wp_customize->add_setting( 'price_selling_1', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'price_selling_1', array(
				'label' => __( 'Selling price[1]', 'emanon' ),
				'section' => 'emanon_price_table',
				'settings' => 'price_selling_1',
				'type' => 'text',
				'priority' => 5,
			) );

			// Description[1]
		 $wp_customize->add_setting( 'price_description_1', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( new Customize_Textarea_Control( $wp_customize, 'price_description_1', array(
				'label' => __( 'Description[1]', 'emanon' ),
				'section' => 'emanon_price_table',
				'settings' => 'price_description_1',
				'type' => 'text',
				'priority' => 6,
			) ) );

			// Item[2]
			$wp_customize->add_setting( 'price_item_2', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'price_item_2', array(
				'label' => __( 'Item[2]', 'emanon' ),
				'section' => 'emanon_price_table',
				'settings' => 'price_item_2',
				'type' => 'text',
				'priority' => 4,
			) );

			// Selling price[2]
			$wp_customize->add_setting( 'price_selling_2', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'price_selling_2', array(
				'label' => __( 'Selling price[2]', 'emanon' ),
				'section' => 'emanon_price_table',
				'settings' => 'price_selling_2',
				'type' => 'text',
				'priority' => 5,
			) );

			// Description[2]
		 $wp_customize->add_setting( 'price_description_2', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( new Customize_Textarea_Control( $wp_customize, 'price_description_2', array(
				'label' => __( 'Description[2]', 'emanon' ),
				'section' => 'emanon_price_table',
				'settings' => 'price_description_2',
				'type' => 'text',
				'priority' => 6,
			) ) );

			// Item[3]
			$wp_customize->add_setting( 'price_item_3', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'price_item_3', array(
				'label' => __( 'Item[3]', 'emanon' ),
				'section' => 'emanon_price_table',
				'settings' => 'price_item_3',
				'type' => 'text',
				'priority' => 4,
			) );

			// Selling price[3]
			$wp_customize->add_setting( 'price_selling_3', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'price_selling_3', array(
				'label' => __( 'Selling price[3]', 'emanon' ),
				'section' => 'emanon_price_table',
				'settings' => 'price_selling_3',
				'type' => 'text',
				'priority' => 5,
			) );

			// Description[3]
		 $wp_customize->add_setting( 'price_description_3', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( new Customize_Textarea_Control( $wp_customize, 'price_description_3', array(
				'label' => __( 'Description[3]', 'emanon' ),
				'section' => 'emanon_price_table',
				'settings' => 'price_description_3',
				'type' => 'text',
				'priority' => 6,
			) ) );

			// Price btn url
			$wp_customize->add_setting( 'price_btn_url', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control( 'price_btn_url', array(
				'label' => __( 'Button url', 'emanon' ),
				'section' => 'emanon_price_table',
				'settings' => 'price_btn_url',
				'type' => 'text',
				'priority' => 7,
			) );

			// Price btn text
			$wp_customize->add_setting( 'price_btn_text', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'price_btn_text', array(
				'label' => __( 'Button text', 'emanon' ),
				'section' => 'emanon_price_table',
				'settings' => 'price_btn_text',
				'type' => 'text',
				'priority' => 8,
			) );

			// Title color
			$wp_customize->add_setting( 'price_section_title_color', array(
				'default' => '#000c15',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'price_section_title_color', array(
				'label' => __( 'Title color', 'emanon' ),
				'section' => 'emanon_price_table',
				'settings' => 'price_section_title_color',
				'priority' => 9,
			) ) );

			// Sub title color
			$wp_customize->add_setting( 'price_section_sub_title_color', array(
				'default' => '#303030',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'price_section_sub_title_color', array(
				'label' => __( 'Sub title color', 'emanon' ),
				'section' => 'emanon_price_table',
				'settings' => 'price_section_sub_title_color',
				'priority' => 10,
			) ) );

			// Item background color
			$wp_customize->add_setting( 'price_section_item_background_color', array(
				'default' => '#9b8d77',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'price_section_item_background_color', array(
				'label' => __( 'Item background color', 'emanon' ),
				'section' => 'emanon_price_table',
				'settings' => 'price_section_item_background_color',
				'priority' => 11,
			) ) );

			// Item text color
			$wp_customize->add_setting( 'price_section_item_text_color', array(
				'default' => '#fff',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'price_section_item_text_color', array(
				'label' => __( 'Item text color', 'emanon' ),
				'section' => 'emanon_price_table',
				'settings' => 'price_section_item_text_color',
				'priority' => 12,
			) ) );

			// Box background color
			$wp_customize->add_setting( 'price_textbox_background_color', array(
				'default' => '#fff',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'price_textbox_background_color', array(
				'label' => __( 'Box background color', 'emanon' ),
				'section' => 'emanon_price_table',
				'settings' => 'price_textbox_background_color',
				'priority' => 13,
			) ) );

			// Text box background color
			$wp_customize->add_setting( 'price_textbox_text_color', array(
				'default' => '#303030',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'price_text_background_color', array(
				'label' => __( 'Box text color', 'emanon' ),
				'section' => 'emanon_price_table',
				'settings' => 'price_textbox_text_color',
				'priority' => 14,
			) ) );

			// Background color
			$wp_customize->add_setting( 'price_section_background_color', array(
				'default' => '#f8f8f8',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'price_section_background_color', array(
				'label' => __( 'Background color', 'emanon' ),
				'section' => 'emanon_price_table',
				'settings' => 'price_section_background_color',
				'priority' => 15,
			) ) );

			// Price section button background color
			$wp_customize->add_setting( 'price_section_btn_background_color', array(
				'default' => '#9b8d77',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'price_section_btn_background_color', array(
				'label' => __( 'Button background color', 'emanon' ),
				'section' => 'emanon_price_table',
				'settings' => 'price_section_btn_background_color',
				'priority' => 16,
			) ) );

			// Price section button text color
			$wp_customize->add_setting( 'price_section_btn_text_color', array(
				'default' => '#fff',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'price_section_btn_text_color', array(
				'label' => __( 'Button text color', 'emanon' ),
				'section' => 'emanon_price_table',
				'settings' => 'price_section_btn_text_color',
				'priority' => 17,
			) ) );

		/*------------------------------------------------------------------------------------
		/* CTA section
		/*----------------------------------------------------------------------------------*/
		$wp_customize->add_section( 'emanon_front_cta_section', array (
			'title' => __( 'CTA section settings', 'emanon' ),
			'priority' => 13,
			'panel' => 'emanon_front_page_settings',
		));

			// Display cta section
			$wp_customize->add_setting( 'display_front_cta_section', array(
				'default' => 'no_display',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_front_cta_type',
			) );
			$wp_customize->add_control( 'display_front_cta_section', array(
				'label' => __( 'Display cta section', 'emanon' ),
				'section' => 'emanon_front_cta_section',
				'settings' => 'display_front_cta_section',
				'type' => 'radio',
				'choices' => array(
					'no_display' => __( 'No display front cta', 'emanon' ),
					'tell' => __( 'Tell only', 'emanon' ),
					'mail' => __( 'Mail only', 'emanon' ),
					'tell_mail' => __( 'Tell ＆ Mail', 'emanon' ),
					),
				'priority' => 1,
			) );

			// Fontawesome Icon[mail]
			$wp_customize->add_setting( 'cta_section_tell_icon', array(
				'default' => 'fa fa-phone',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'cta_section_tell_icon', array (
				'label' => __( 'Icon [Tell]', 'emanon' ),
				'description' => sprintf('%1$s <a href="https://fontawesome.com/v4.7.0/icons/" target="_blank">%2$s</a>.',
						__( "Fontawesome Icon Click" , 'emanon' ),
						__( "here" , 'emanon') ),
				'section' => 'emanon_front_cta_section',
				'settings' => 'cta_section_tell_icon',
				'type' => 'text',
				'priority' => 2,
			) );

			// CTA section tel title
			$wp_customize->add_setting( 'cta_section_title_tell', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'cta_section_title_tell', array(
				'label' => __( 'Title [Tell]', 'emanon' ),
				'section' => 'emanon_front_cta_section',
				'settings' => 'cta_section_title_tell',
				'type' => 'text',
				'priority' => 3,
			) );

			// CTA section tell description
			$wp_customize->add_setting( 'cta_section_tell_description', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( new Customize_Textarea_Control( $wp_customize, 'cta_section_tell_description', array(
				'label' => __( 'Description [Tell]', 'emanon' ),
				'section' => 'emanon_front_cta_section',
				'settings' => 'cta_section_tell_description',
				'type' => 'text',
				'priority' => 4,
			) ) );

			// CTA section tel number
			$wp_customize->add_setting( 'cta_section_tell_number', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'cta_section_tell_number', array(
				'label' => __( 'Tell number', 'emanon' ),
				'section' => 'emanon_front_cta_section',
				'settings' => 'cta_section_tell_number',
				'type' => 'text',
				'priority' => 5,
			) );

			// CTA section business hours
			$wp_customize->add_setting( 'cta_section_business_hours', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'cta_section_business_hours', array(
				'label' => __( 'Business hours', 'emanon' ),
				'section' => 'emanon_front_cta_section',
				'settings' => 'cta_section_business_hours',
				'type' => 'text',
				'priority' => 6,
			) );

			// Fontawesome Icon[mail]
			$wp_customize->add_setting( 'cta_section_mail_icon', array(
				'default' => 'fa fa-envelope-o',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'cta_section_mail_icon', array (
				'label' => __( 'Icon [Mail]', 'emanon' ),
				'description' => sprintf('%1$s <a href="https://fontawesome.com/v4.7.0/icons/" target="_blank">%2$s</a>.',
						__( "Fontawesome Icon Click" , 'emanon' ),
						__( "here" , 'emanon') ),
				'section' => 'emanon_front_cta_section',
				'settings' => 'cta_section_mail_icon',
				'type' => 'text',
				'priority' => 7,
			) );

			// CTA section mail title
			$wp_customize->add_setting( 'cta_section_title_mail', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'cta_section_title_mail', array(
				'label' => __( 'Title [Mail]', 'emanon' ),
				'section' => 'emanon_front_cta_section',
				'settings' => 'cta_section_title_mail',
				'type' => 'text',
				'priority' => 8,
			) );

			// CTA section mail description
			$wp_customize->add_setting( 'cta_section_description_mail', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( new Customize_Textarea_Control( $wp_customize, 'cta_section_description_mail', array(
				'label' => __( 'Description [Mail]', 'emanon' ),
				'section' => 'emanon_front_cta_section',
				'settings' => 'cta_section_description_mail',
				'type' => 'text',
				'priority' => 9,
			) ) );

			// CTA section btn url
			$wp_customize->add_setting( 'cta_section_btn_url', array(
				'default' => '#contactfrom-section',
				'type' => 'theme_mod',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control( 'cta_section_btn_url', array(
				'label' => __( 'Button url [Mail] #contactfrom-section', 'emanon' ),
				'section' => 'emanon_front_cta_section',
				'settings' => 'cta_section_btn_url',
				'type' => 'text',
				'priority' => 10,
			) );

			// CTA section btn text
			$wp_customize->add_setting( 'cta_section_btn_text', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'cta_section_btn_text', array(
				'label' => __( 'Button text [Mail]', 'emanon' ),
				'section' => 'emanon_front_cta_section',
				'settings' => 'cta_section_btn_text',
				'type' => 'text',
				'priority' => 11,
			) );

			// CTA section background color
			$wp_customize->add_setting( 'cta_section_background_color', array(
				'default' => '#161410',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cta_section_background_color', array(
				'label' => __( 'Section background color', 'emanon' ),
				'section' => 'emanon_front_cta_section',
				'settings' => 'cta_section_background_color',
				'priority' => 12,
			) ) );

			// CTA section title color
			$wp_customize->add_setting( 'cta_section_title_color', array(
				'default' => '#fff',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cta_section_title_color', array(
				'label' => __( 'Section title color', 'emanon' ),
				'section' => 'emanon_front_cta_section',
				'settings' => 'cta_section_title_color',
				'priority' => 13,
			) ) );

			// CTA section description color
			$wp_customize->add_setting( 'cta_section_description_color', array(
				'default' => '#fff',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cta_section_description_color', array(
				'label' => __( 'Section description color', 'emanon' ),
				'section' => 'emanon_front_cta_section',
				'settings' => 'cta_section_description_color',
				'priority' => 14,
			) ) );

			// CTA section button background color
			$wp_customize->add_setting( 'cta_section_btn_background_color', array(
				'default' => '#9b8d77',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cta_section_btn_background_color', array(
				'label' => __( 'Button background color', 'emanon' ),
				'section' => 'emanon_front_cta_section',
				'settings' => 'cta_section_btn_background_color',
				'priority' => 15,
			) ) );

			// CTA section button text color
			$wp_customize->add_setting( 'cta_section_btn_text_color', array(
				'default' => '#fff',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cta_section_btn_text_color', array(
				'label' => __( 'Section button text color', 'emanon' ),
				'section' => 'emanon_front_cta_section',
				'settings' => 'cta_section_btn_text_color',
				'priority' => 16,
			) ) );

		/*------------------------------------------------------------------------------------
		/* Category section
		/*----------------------------------------------------------------------------------*/
		$wp_customize->add_section( 'emanon_category_section', array (
			'title' => __( 'Category section settings', 'emanon' ),
			'priority' => 14,
			'panel' => 'emanon_front_page_settings',
		));

			// Display category section
			$wp_customize->add_setting( 'display_category_section', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_category_section', array(
				'label' =>__( 'Display category section', 'emanon' ),
				'section' => 'emanon_category_section',
				'settings' => 'display_category_section',
				'type' => 'checkbox',
				'priority' => 1,
			) );

			// Category section layout
			$wp_customize->add_setting( 'category_section_layout', array(
				'default' => 4,
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_section_layout_type',
			) );
			$wp_customize->add_control( 'category_section_layout', array(
				'label' => __( 'Section layout type', 'emanon' ),
				'section' => 'emanon_category_section',
				'settings' => 'category_section_layout',
				'type' => 'radio',
				'choices' => array(
					4 => __( 'One row', 'emanon' ),
					7 => __( 'Two row', 'emanon' ),
					),
				'priority' => 2,
			) );

			// Category section title
			$wp_customize->add_setting( 'category_section_title', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'category_section_title', array(
				'label' => __( 'Section title', 'emanon' ),
				'section' => 'emanon_category_section',
				'settings' => 'category_section_title',
				'type' => 'text',
				'priority' => 2,
			) );

			// Category section description
			$wp_customize->add_setting( 'category_section_description', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( new Customize_Textarea_Control( $wp_customize, 'category_section_description', array(
				'label' => __( 'Description', 'emanon' ),
				'section' => 'emanon_category_section',
				'settings' => 'category_section_description',
				'type' => 'text',
				'priority' => 3,
			) ) );

			// Number of category list
			$wp_customize->add_setting( 'category_list_max', array(
				'default' => 3,
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_number',
			) );
			$wp_customize->add_control( 'category_list_max', array(
				'label' => __( 'Number of category list (default 3)', 'emanon' ),
				'section' => 'emanon_category_section',
				'settings' => 'category_list_max',
				'type' => 'number',
				'input_attrs' => array(
					'min' => 0,
					'step' => 1,
				),
				'priority' => 4,
			) );

			// Category id[1] image
			$wp_customize->add_setting( 'category_image_1', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'category_image_1', array (
				'label' => __( 'Image[1]', 'emanon' ),
				'section' => 'emanon_category_section',
				'settings' => 'category_image_1',
				'type' => 'image',
				'priority' => 5,
			) ) );

			// Category id[1]
			$wp_customize->add_setting( 'category_id_1', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'category_id_1', array(
				'label' => __( 'Category id[1]', 'emanon' ),
				'section' => 'emanon_category_section',
				'settings' => 'category_id_1',
				'type' => 'text',
				'priority' => 6,
			) );

			// Category title[1]
			$wp_customize->add_setting( 'category_title_1', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'category_title_1', array(
				'label' => __( 'Title[1]', 'emanon' ),
				'section' => 'emanon_category_section',
				'settings' => 'category_title_1',
				'type' => 'text',
				'priority' => 7,
			) );

			// Category description[1]
			$wp_customize->add_setting( 'category_description_1', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( new Customize_Textarea_Control( $wp_customize, 'category_description_1', array(
				'label' => __( 'Description[1]', 'emanon' ),
				'section' => 'emanon_category_section',
				'settings' => 'category_description_1',
				'type' => 'text',
				'priority' => 8,
			) ) );

			// Category btn text[1]
			$wp_customize->add_setting( 'category_btn_text_1', array(
				'default' => __( 'Read More Post List', 'emanon' ),
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'category_btn_text_1', array(
				'label' => __( 'Button text[1]', 'emanon' ),
				'section' => 'emanon_category_section',
				'settings' => 'category_btn_text_1',
				'type' => 'text',
				'priority' => 9,
			) );

			// Category id[2] image
			$wp_customize->add_setting( 'category_image_2', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'category_image_2', array (
				'label' => __( 'Image[2]', 'emanon' ),
				'section' => 'emanon_category_section',
				'settings' => 'category_image_2',
				'type' => 'image',
				'priority' => 10,
			) ) );

			// Category id[2]
			$wp_customize->add_setting( 'category_id_2', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'category_id_2', array(
				'label' => __( 'Category id[2]', 'emanon' ),
				'section' => 'emanon_category_section',
				'settings' => 'category_id_2',
				'type' => 'text',
				'priority' => 11,
			) );

			// Category title[2]
			$wp_customize->add_setting( 'category_title_2', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'category_title_2', array(
				'label' => __( 'Title[2]', 'emanon' ),
				'section' => 'emanon_category_section',
				'settings' => 'category_title_2',
				'type' => 'text',
				'priority' => 12,
			) );

			// Category description[2]
			$wp_customize->add_setting( 'category_description_2', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( new Customize_Textarea_Control( $wp_customize, 'category_description_2', array(
				'label' => __( 'Description[2]', 'emanon' ),
				'section' => 'emanon_category_section',
				'settings' => 'category_description_2',
				'type' => 'text',
				'priority' => 13,
			) ) );

			// Category btn text[2]
			$wp_customize->add_setting( 'category_btn_text_2', array(
				'default' => __( 'Read More Post List', 'emanon' ),
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'category_btn_text_2', array(
				'label' => __( 'Button text[2]', 'emanon' ),
				'section' => 'emanon_category_section',
				'settings' => 'category_btn_text_2',
				'type' => 'text',
				'priority' => 14,
			) );

			// Category id[3] image
			$wp_customize->add_setting( 'category_image_3', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'category_image_3', array (
				'label' => __( 'Image[3]', 'emanon' ),
				'section' => 'emanon_category_section',
				'settings' => 'category_image_3',
				'type' => 'image',
				'priority' => 15,
			) ) );

			// Category id[3]
			$wp_customize->add_setting( 'category_id_3', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'category_id_3', array(
				'label' => __( 'Category id[3]', 'emanon' ),
				'section' => 'emanon_category_section',
				'settings' => 'category_id_3',
				'type' => 'text',
				'priority' => 16,
			) );

			// Category title[3]
			$wp_customize->add_setting( 'category_title_3', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'category_title_3', array(
				'label' => __( 'Title[3]', 'emanon' ),
				'section' => 'emanon_category_section',
				'settings' => 'category_title_3',
				'type' => 'text',
				'priority' => 17,
			) );

			// Category description[3]
			$wp_customize->add_setting( 'category_description_3', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( new Customize_Textarea_Control( $wp_customize, 'category_description_3', array(
				'label' => __( 'Description[3]', 'emanon' ),
				'section' => 'emanon_category_section',
				'settings' => 'category_description_3',
				'type' => 'text',
				'priority' => 18,
			) ) );

			// Category btn text[3]
			$wp_customize->add_setting( 'category_btn_text_3', array(
				'default' => __( 'Read More Post List', 'emanon' ),
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'category_btn_text_3', array(
				'label' => __( 'Button text[3]', 'emanon' ),
				'section' => 'emanon_category_section',
				'settings' => 'category_btn_text_3',
				'type' => 'text',
				'priority' => 19,
			) );

			// Category id[4] image
			$wp_customize->add_setting( 'category_image_4', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'category_image_4', array (
				'label' => __( 'Image[4]', 'emanon' ),
				'section' => 'emanon_category_section',
				'settings' => 'category_image_4',
				'type' => 'image',
				'priority' => 20,
			) ) );

			// Category id[4]
			$wp_customize->add_setting( 'category_id_4', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'category_id_4', array(
				'label' => __( 'Category id[4]', 'emanon' ),
				'section' => 'emanon_category_section',
				'settings' => 'category_id_4',
				'type' => 'text',
				'priority' => 21,
			) );

			// Category title[4]
			$wp_customize->add_setting( 'category_title_4', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'category_title_4', array(
				'label' => __( 'Title[4]', 'emanon' ),
				'section' => 'emanon_category_section',
				'settings' => 'category_title_4',
				'type' => 'text',
				'priority' => 22,
			) );

			// Category description[4]
			$wp_customize->add_setting( 'category_description_4', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( new Customize_Textarea_Control( $wp_customize, 'category_description_4', array(
				'label' => __( 'Description[4]', 'emanon' ),
				'section' => 'emanon_category_section',
				'settings' => 'category_description_4',
				'type' => 'text',
				'priority' => 23,
			) ) );

			// Category btn text[4]
			$wp_customize->add_setting( 'category_btn_text_4', array(
				'default' => __( 'Read More Post List', 'emanon' ),
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'category_btn_text_4', array(
				'label' => __( 'Button text[4]', 'emanon' ),
				'section' => 'emanon_category_section',
				'settings' => 'category_btn_text_4',
				'type' => 'text',
				'priority' => 24,
			) );

			// Category id[5] image
			$wp_customize->add_setting( 'category_image_5', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'category_image_5', array (
				'label' => __( 'Image[5]', 'emanon' ),
				'section' => 'emanon_category_section',
				'settings' => 'category_image_5',
				'type' => 'image',
				'priority' => 25,
			) ) );

			// Category id[5]
			$wp_customize->add_setting( 'category_id_5', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'category_id_5', array(
				'label' => __( 'Category id[5]', 'emanon' ),
				'section' => 'emanon_category_section',
				'settings' => 'category_id_5',
				'type' => 'text',
				'priority' => 26,
			) );

			// Category title[5]
			$wp_customize->add_setting( 'category_title_5', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'category_title_5', array(
				'label' => __( 'Title[5]', 'emanon' ),
				'section' => 'emanon_category_section',
				'settings' => 'category_title_5',
				'type' => 'text',
				'priority' => 27,
			) );

			// Category description[5]
			$wp_customize->add_setting( 'category_description_5', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( new Customize_Textarea_Control( $wp_customize, 'category_description_5', array(
				'label' => __( 'Description[5]', 'emanon' ),
				'section' => 'emanon_category_section',
				'settings' => 'category_description_5',
				'type' => 'text',
				'priority' => 28,
			) ) );

			// Category btn text[5]
			$wp_customize->add_setting( 'category_btn_text_5', array(
				'default' => __( 'Read More Post List', 'emanon' ),
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'category_btn_text_5', array(
				'label' => __( 'Button text[5]', 'emanon' ),
				'section' => 'emanon_category_section',
				'settings' => 'category_btn_text_5',
				'type' => 'text',
				'priority' => 29,
			) );

			// Category id[6] image
			$wp_customize->add_setting( 'category_image_6', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'category_image_6', array (
				'label' => __( 'Image[6]', 'emanon' ),
				'section' => 'emanon_category_section',
				'settings' => 'category_image_6',
				'type' => 'image',
				'priority' => 30,
			) ) );

			// Category id[6]
			$wp_customize->add_setting( 'category_id_6', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'category_id_6', array(
				'label' => __( 'Category id[6]', 'emanon' ),
				'section' => 'emanon_category_section',
				'settings' => 'category_id_6',
				'type' => 'text',
				'priority' => 31,
			) );

			// Category title[6]
			$wp_customize->add_setting( 'category_title_6', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'category_title_6', array(
				'label' => __( 'Title[6]', 'emanon' ),
				'section' => 'emanon_category_section',
				'settings' => 'category_title_6',
				'type' => 'text',
				'priority' => 32,
			) );

			// Category description[6]
			$wp_customize->add_setting( 'category_description_6', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( new Customize_Textarea_Control( $wp_customize, 'category_description_6', array(
				'label' => __( 'Description[6]', 'emanon' ),
				'section' => 'emanon_category_section',
				'settings' => 'category_description_6',
				'type' => 'text',
				'priority' => 33,
			) ) );

			// Category btn text[6]
			$wp_customize->add_setting( 'category_btn_text_6', array(
				'default' => __( 'Read More Post List', 'emanon' ),
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'category_btn_text_6', array(
				'label' => __( 'Button text[6]', 'emanon' ),
				'section' => 'emanon_category_section',
				'settings' => 'category_btn_text_6',
				'type' => 'text',
				'priority' => 34,
			) );

			// Category section background color
			$wp_customize->add_setting( 'category_section_background_color', array(
				'default' => '#fff',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'category_section_background_color', array(
				'label' => __( 'Section background color', 'emanon' ),
				'section' => 'emanon_category_section',
				'settings' => 'category_section_background_color',
				'priority' => 35,
			) ) );

			// Category section title color
			$wp_customize->add_setting( 'category_section_title_color', array(
				'default' => '#000c15',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'category_section_title_color', array(
				'label' => __( 'Section title color', 'emanon' ),
				'section' => 'emanon_category_section',
				'settings' => 'category_section_title_color',
				'priority' => 36,
			) ) );

			// Category section description color
			$wp_customize->add_setting( 'category_section_description_color', array(
				'default' => '#303030',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'category_section_description_color', array(
				'label' => __( 'Section description color', 'emanon' ),
				'section' => 'emanon_category_section',
				'settings' => 'category_section_description_color',
				'priority' => 37,
			) ) );

			// Category box background color
			$wp_customize->add_setting( 'category_box_background_color', array(
				'default' => '#f4f4f4',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'category_box_background_color', array(
				'label' => __( 'Box background color', 'emanon' ),
				'section' => 'emanon_category_section',
				'settings' => 'category_box_background_color',
				'priority' => 38,
			) ) );

			// Category title color
			$wp_customize->add_setting( 'category_title_color', array(
				'default' => '#000c15',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'category_title_color', array(
				'label' => __( 'Category title color', 'emanon' ),
				'section' => 'emanon_category_section',
				'settings' => 'category_title_color',
				'priority' => 39,
			) ) );

			// Category description color
			$wp_customize->add_setting( 'category_description_color', array(
				'default' => '#303030',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'category_description_color', array(
				'label' => __( 'Category description color', 'emanon' ),
				'section' => 'emanon_category_section',
				'settings' => 'category_description_color',
				'priority' => 40,
			) ) );

			// Category section button background color
			$wp_customize->add_setting( 'category_section_btn_background_color', array(
				'default' => '#9b8d77',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'category_section_btn_background_color', array(
				'label' => __( 'Button background color', 'emanon' ),
				'section' => 'emanon_category_section',
				'settings' => 'category_section_btn_background_color',
				'priority' => 41,
			) ) );

			// Category section button text color
			$wp_customize->add_setting( 'category_section_btn_text_color', array(
				'default' => '#fff',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'category_section_btn_text_color', array(
				'label' => __( 'Section button text color', 'emanon' ),
				'section' => 'emanon_category_section',
				'settings' => 'category_section_btn_text_color',
				'priority' => 42,
			) ) );

		/*------------------------------------------------------------------------------------
		/* Information Section
		/*----------------------------------------------------------------------------------*/
		$wp_customize->add_section( 'emanon_info_section', array (
			'title' => __( 'Information section settings', 'emanon' ),
			'priority' => 17,
			'panel' => 'emanon_front_page_settings',
		));

			// Display info section
			$wp_customize->add_setting( 'display_info_section', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_info_section', array(
				'label' =>__( 'Display Information section', 'emanon' ),
				'section' => 'emanon_info_section',
				'settings' => 'display_info_section',
				'type' => 'checkbox',
				'priority' => 1,
			) );

			// Info section title
			$wp_customize->add_setting( 'info_section_title', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'info_section_title', array(
				'label' => __( 'Section title', 'emanon' ),
				'section' => 'emanon_info_section',
				'settings' => 'info_section_title',
				'type' => 'text',
				'priority' => 2,
			) );

			// Info section description
			$wp_customize->add_setting( 'info_section_description', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( new Customize_Textarea_Control( $wp_customize, 'info_section_description', array(
				'label' => __( 'Description', 'emanon' ),
				'section' => 'emanon_info_section',
				'settings' => 'info_section_description',
				'priority' => 3,
			) ) );

			// Display type
			$wp_customize->add_setting( 'info_display_type', array(
				'default' => 'new_arrivals',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_info_display_type',
			) );
			$wp_customize->add_control( 'info_display_type', array(
				'label' => __( 'Info section display type', 'emanon' ),
				'section' => 'emanon_info_section',
				'settings' => 'info_display_type',
				'type' => 'radio',
				'choices' => array(
					'new_arrivals' => __( 'Display New arrivals', 'emanon' ),
					'featured' => __( 'Display Featured', 'emanon' ),
					'category' => __( 'Display Category (Selected id)', 'emanon' ),
					),
				'priority' => 4,
			) );

			// Category id
			$wp_customize->add_setting( 'info_category_id', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'info_category_id', array(
				'label' => __( 'Category id', 'emanon' ),
				'description' => __( 'When the display type is category, please enter category id.', 'emanon' ),
				'section' => 'emanon_info_section',
				'settings' => 'info_category_id',
				'type' => 'text',
				'priority' => 5,
			) );

			// Number of info content
			$wp_customize->add_setting( 'info_max', array(
				'default' => 3,
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_number',
			) );
			$wp_customize->add_control( 'info_max', array(
				'label' => __( 'Number of entry (default 3)', 'emanon' ),
				'section' => 'emanon_info_section',
				'settings' => 'info_max',
				'type' => 'number',
				'input_attrs' => array(
					'min' => 1,
					'step' => 1,
				),
				'priority' => 6,
			) );

			// Info btn url
			$wp_customize->add_setting( 'info_btn_url', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control( 'info_btn_url', array(
				'label' => __( 'Button url', 'emanon' ),
				'section' => 'emanon_info_section',
				'settings' => 'info_btn_url',
				'type' => 'text',
				'priority' => 7,
			) );

			// Info btn text
			$wp_customize->add_setting( 'info_btn_text', array(
				'default' =>  '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'info_btn_text', array(
				'label' => __( 'Button text', 'emanon' ),
				'section' => 'emanon_info_section',
				'settings' => 'info_btn_text',
				'type' => 'text',
				'priority' => 8,
			) );

			// Info section background color
			$wp_customize->add_setting( 'info_section_background_color', array(
				'default' => '#f8f8f8',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'info_section_background_color', array(
				'label' => __( 'Background color', 'emanon' ),
				'section' => 'emanon_info_section',
				'settings' => 'info_section_background_color',
				'priority' => 9,
			) ) );

			// Info section title color
			$wp_customize->add_setting( 'info_title_color', array(
				'default' => '#000c15',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'info_title_color', array(
				'label' => __( 'Title color', 'emanon' ),
				'section' => 'emanon_info_section',
				'settings' => 'info_title_color',
				'priority' => 10,
			) ) );

			// Info section sub title color
			$wp_customize->add_setting( 'info_sub_title_color', array(
				'default' => '#303030',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'info_sub_title_color', array(
				'label' => __( 'Sub title color', 'emanon' ),
				'section' => 'emanon_info_section',
				'settings' => 'info_sub_title_color',
				'priority' => 11,
			) ) );

			// Info section text color
			$wp_customize->add_setting( 'info_text_color', array(
				'default' => '#303030',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'info_text_color', array(
				'label' => __( 'Text color', 'emanon' ),
				'section' => 'emanon_info_section',
				'settings' => 'info_text_color',
				'priority' => 12,
			) ) );

			// Info section hover
			$wp_customize->add_setting( 'info_section_hover_color', array(
				'default' => '#fff',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'info_section_hover_color', array(
				'label' => __( 'Hover color', 'emanon' ),
				'section' => 'emanon_info_section',
				'settings' => 'info_section_hover_color',
				'priority' => 13,
			) ) );

			// Info section button background color
			$wp_customize->add_setting( 'info_section_btn_background_color', array(
				'default' => '#9b8d77',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'info_section_btn_background_color', array(
				'label' => __( 'Button background color', 'emanon' ),
				'section' => 'emanon_info_section',
				'settings' => 'info_section_btn_background_color',
				'priority' => 14,
			) ) );

			// Info section button text color
			$wp_customize->add_setting( 'info_section_btn_text_color', array(
				'default' => '#fff',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'info_section_btn_text_color', array(
				'label' => __( 'Button text color', 'emanon' ),
				'section' => 'emanon_info_section',
				'settings' => 'info_section_btn_text_color',
				'priority' => 15,
			) ) );

		/*------------------------------------------------------------------------------------
		/* Accordion FAQ Section
		/*----------------------------------------------------------------------------------*/
		$wp_customize->add_section( 'emanon_accordion_faq_section', array (
			'title' => __( 'FAQ section settings', 'emanon' ),
			'priority' => 18,
			'panel' => 'emanon_front_page_settings',
		));

			// Display faq section
			$wp_customize->add_setting( 'display_accordion_faq_section', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_accordion_faq_section', array(
				'label' =>__( 'Display faq section', 'emanon' ),
				'section' => 'emanon_accordion_faq_section',
				'settings' => 'display_accordion_faq_section',
				'type' => 'checkbox',
				'priority' => 1,
			) );

			// FAQ section title
			$wp_customize->add_setting( 'accordion_faq_section_title', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'accordion_faq_section_title', array(
				'label' => __( 'Section title', 'emanon' ),
				'section' => 'emanon_accordion_faq_section',
				'settings' => 'accordion_faq_section_title',
				'type' => 'text',
				'priority' => 2,
			) );

			// FAQ section description
			$wp_customize->add_setting( 'accordion_faq_section_description', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( new Customize_Textarea_Control( $wp_customize, 'accordion_faq_section_description', array(
				'label' => __( 'Description', 'emanon' ),
				'section' => 'emanon_accordion_faq_section',
				'settings' => 'accordion_faq_section_description',
				'priority' => 3,
			) ) );

			// Accordion question title[1]
			$wp_customize->add_setting( 'accordion_question_1', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'accordion_question_1', array(
				'label' => __( 'Question[1]', 'emanon' ),
				'section' => 'emanon_accordion_faq_section',
				'settings' => 'accordion_question_1',
				'type' => 'text',
				'priority' => 4,
			) );

			// Accordion answer[1]
			$wp_customize->add_setting( 'accordion_answer_1', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( new Customize_Textarea_Control( $wp_customize, 'accordion_answer_1', array(
				'label' => __( 'Answer[1]', 'emanon' ),
				'section' => 'emanon_accordion_faq_section',
				'settings' => 'accordion_answer_1',
				'priority' => 5,
			) ) );

			// Accordion question title[2]
			$wp_customize->add_setting( 'accordion_question_2', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'accordion_question_2', array(
				'label' => __( 'Question[2]', 'emanon' ),
				'section' => 'emanon_accordion_faq_section',
				'settings' => 'accordion_question_2',
				'type' => 'text',
				'priority' => 6,
			) );

			// Accordion answer[2]
			$wp_customize->add_setting( 'accordion_answer_2', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( new Customize_Textarea_Control( $wp_customize, 'accordion_answer_2', array(
				'label' => __( 'Answer[2]', 'emanon' ),
				'section' => 'emanon_accordion_faq_section',
				'settings' => 'accordion_answer_2',
				'priority' => 7,
			) ) );

			// Accordion question title[3]
			$wp_customize->add_setting( 'accordion_question_3', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'accordion_question_3', array(
				'label' => __( 'Question[3]', 'emanon' ),
				'section' => 'emanon_accordion_faq_section',
				'settings' => 'accordion_question_3',
				'type' => 'text',
				'priority' => 8,
			) );

			// Accordion answer[3]
			$wp_customize->add_setting( 'accordion_answer_3', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( new Customize_Textarea_Control( $wp_customize, 'accordion_answer_3', array(
				'label' => __( 'Answer[3]', 'emanon' ),
				'section' => 'emanon_accordion_faq_section',
				'settings' => 'accordion_answer_3',
				'priority' => 9,
			) ) );

			// Accordion question title[4]
			$wp_customize->add_setting( 'accordion_question_4', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'accordion_question_4', array(
				'label' => __( 'Question[4]', 'emanon' ),
				'section' => 'emanon_accordion_faq_section',
				'settings' => 'accordion_question_4',
				'type' => 'text',
				'priority' => 10,
			) );

			// Accordion answer[4]
			$wp_customize->add_setting( 'accordion_answer_4', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( new Customize_Textarea_Control( $wp_customize, 'accordion_answer_4', array(
				'label' => __( 'Answer[4]', 'emanon' ),
				'section' => 'emanon_accordion_faq_section',
				'settings' => 'accordion_answer_4',
				'priority' => 11,
			) ) );

			// Accordion question title[5]
			$wp_customize->add_setting( 'accordion_question_5', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'accordion_question_5', array(
				'label' => __( 'Question[5]', 'emanon' ),
				'section' => 'emanon_accordion_faq_section',
				'settings' => 'accordion_question_5',
				'type' => 'text',
				'priority' => 12,
			) );

			// Accordion answer[5]
			$wp_customize->add_setting( 'accordion_answer_5', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( new Customize_Textarea_Control( $wp_customize, 'accordion_answer_5', array(
				'label' => __( 'Answer[5]', 'emanon' ),
				'section' => 'emanon_accordion_faq_section',
				'settings' => 'accordion_answer_5',
				'priority' => 13,
			) ) );

			// Accordion question title[6]
			$wp_customize->add_setting( 'accordion_question_6', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'accordion_question_6', array(
				'label' => __( 'Question[6]', 'emanon' ),
				'section' => 'emanon_accordion_faq_section',
				'settings' => 'accordion_question_6',
				'type' => 'text',
				'priority' => 14,
			) );

			// Accordion answer[6]
			$wp_customize->add_setting( 'accordion_answer_6', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( new Customize_Textarea_Control( $wp_customize, 'accordion_answer_6', array(
				'label' => __( 'Answer[6]', 'emanon' ),
				'section' => 'emanon_accordion_faq_section',
				'settings' => 'accordion_answer_6',
				'priority' => 15,
			) ) );

			// Accordion question title[7]
			$wp_customize->add_setting( 'accordion_question_7', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'accordion_question_7', array(
				'label' => __( 'Question[7]', 'emanon' ),
				'section' => 'emanon_accordion_faq_section',
				'settings' => 'accordion_question_7',
				'type' => 'text',
				'priority' => 16,
			) );

			// Accordion answer[7]
			$wp_customize->add_setting( 'accordion_answer_7', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( new Customize_Textarea_Control( $wp_customize, 'accordion_answer_7', array(
				'label' => __( 'Answer[7]', 'emanon' ),
				'section' => 'emanon_accordion_faq_section',
				'settings' => 'accordion_answer_7',
				'priority' => 17,
			) ) );

			// Accordion question title[8]
			$wp_customize->add_setting( 'accordion_question_8', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'accordion_question_8', array(
				'label' => __( 'Question[8]', 'emanon' ),
				'section' => 'emanon_accordion_faq_section',
				'settings' => 'accordion_question_8',
				'type' => 'text',
				'priority' => 18,
			) );

			// Accordion answer[8]
			$wp_customize->add_setting( 'accordion_answer_8', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( new Customize_Textarea_Control( $wp_customize, 'accordion_answer_8', array(
				'label' => __( 'Answer[8]', 'emanon' ),
				'section' => 'emanon_accordion_faq_section',
				'settings' => 'accordion_answer_8',
				'priority' => 19,
			) ) );

			// Accordion question title[9]
			$wp_customize->add_setting( 'accordion_question_9', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'accordion_question_9', array(
				'label' => __( 'Question[9]', 'emanon' ),
				'section' => 'emanon_accordion_faq_section',
				'settings' => 'accordion_question_9',
				'type' => 'text',
				'priority' => 20,
			) );

			// Accordion answer[9]
			$wp_customize->add_setting( 'accordion_answer_9', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( new Customize_Textarea_Control( $wp_customize, 'accordion_answer_9', array(
				'label' => __( 'Answer[9]', 'emanon' ),
				'section' => 'emanon_accordion_faq_section',
				'settings' => 'accordion_answer_9',
				'priority' => 21,
			) ) );

			// Accordion question title[10]
			$wp_customize->add_setting( 'accordion_question_10', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'accordion_question_10', array(
				'label' => __( 'Question[10]', 'emanon' ),
				'section' => 'emanon_accordion_faq_section',
				'settings' => 'accordion_question_10',
				'type' => 'text',
				'priority' => 22,
			) );

			// Accordion answer[10]
			$wp_customize->add_setting( 'accordion_answer_10', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( new Customize_Textarea_Control( $wp_customize, 'accordion_answer_10', array(
				'label' => __( 'Answer[10]', 'emanon' ),
				'section' => 'emanon_accordion_faq_section',
				'settings' => 'accordion_answer_10',
				'priority' => 23,
			) ) );

			// Faq btn url
			$wp_customize->add_setting( 'faq_btn_url', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control( 'faq_btn_url', array(
				'label' => __( 'Button url', 'emanon' ),
				'section' => 'emanon_accordion_faq_section',
				'settings' => 'faq_btn_url',
				'type' => 'text',
				'priority' => 24,
			) );

			// Faq btn text
			$wp_customize->add_setting( 'faq_btn_text', array(
				'default' =>  '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'faq_btn_text', array(
				'label' => __( 'Button text', 'emanon' ),
				'section' => 'emanon_accordion_faq_section',
				'settings' => 'faq_btn_text',
				'type' => 'text',
				'priority' => 25,
			) );

			// Faq section background color
			$wp_customize->add_setting( 'accordion_faq_section_background_color', array(
				'default' => '#fff',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'accordion_faq_section_background_color', array(
				'label' => __( 'Background color', 'emanon' ),
				'section' => 'emanon_accordion_faq_section',
				'settings' => 'accordion_faq_section_background_color',
				'priority' => 26,
			) ) );

			// Faq section title color
			$wp_customize->add_setting( 'accordion_faq_title_color', array(
				'default' => '#000c15',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'accordion_faq_title_color', array(
				'label' => __( 'Title color', 'emanon' ),
				'section' => 'emanon_accordion_faq_section',
				'settings' => 'accordion_faq_title_color',
				'priority' => 27,
			) ) );

			// Faq section sub title color
			$wp_customize->add_setting( 'accordion_faq_sub_title_color', array(
				'default' => '#303030',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'accordion_faq_sub_title_color', array(
				'label' => __( 'Sub title color', 'emanon' ),
				'section' => 'emanon_accordion_faq_section',
				'settings' => 'accordion_faq_sub_title_color',
				'priority' => 28,
			) ) );

			// Faq section text color
			$wp_customize->add_setting( 'accordion_faq_section_text_color', array(
				'default' => '#303030',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'accordion_faq_section_text_color', array(
				'label' => __( 'Text color', 'emanon' ),
				'section' => 'emanon_accordion_faq_section',
				'settings' => 'accordion_faq_section_text_color',
				'priority' => 29,
			) ) );

			// Accordion_question Icon color
			$wp_customize->add_setting( 'accordion_faq_section_q_icon_color', array(
				'default' => '#9b8d77',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'accordion_faq_section_q_icon_color', array(
				'label' => __( 'Question icon color', 'emanon' ),
				'section' => 'emanon_accordion_faq_section',
				'settings' => 'accordion_faq_section_q_icon_color',
				'priority' => 30,
			) ) );

			// Accordion_answer Icon color
			$wp_customize->add_setting( 'accordion_faq_section_a_icon_color', array(
				'default' => '#b5b5b5',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'accordion_faq_section_a_icon_color', array(
				'label' => __( 'Answer icon color', 'emanon' ),
				'section' => 'emanon_accordion_faq_section',
				'settings' => 'accordion_faq_section_a_icon_color',
				'priority' => 31,
			) ) );

			// Faq section button background color
			$wp_customize->add_setting( 'faq_section_btn_background_color', array(
				'default' => '#9b8d77',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'faq_section_btn_background_color', array(
				'label' => __( 'Button background color', 'emanon' ),
				'section' => 'emanon_accordion_faq_section',
				'settings' => 'faq_section_btn_background_color',
				'priority' => 32,
			) ) );

			// Faq section button text color
			$wp_customize->add_setting( 'faq_section_btn_text_color', array(
				'default' => '#fff',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'faq_section_btn_text_color', array(
				'label' => __( 'Button text color', 'emanon' ),
				'section' => 'emanon_accordion_faq_section',
				'settings' => 'faq_section_btn_text_color',
				'priority' => 33,
			) ) );

		/*------------------------------------------------------------------------------------
		/* Front contactform section
		/*----------------------------------------------------------------------------------*/
		$wp_customize->add_section( 'emanon_front_contactfrom_section', array (
			'title' => __( 'Contactform section settings', 'emanon' ),
			'priority' => 19,
			'panel' => 'emanon_front_page_settings',
		) );

			// Display contactform section
			$wp_customize->add_setting( 'display_contactfrom_section', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_contactfrom_section', array(
				'label'	 => __( 'Display Contactfrom section', 'emanon' ),
				'section' => 'emanon_front_contactfrom_section',
				'settings' => 'display_contactfrom_section',
				'type' => 'checkbox',
				'priority' => 1,
			) );

			// Contactform section title
			$wp_customize->add_setting( 'contactfrom_sectionn_title', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'contactfrom_sectionn_title', array(
				'label' => __( 'Section title', 'emanon' ),
				'section' => 'emanon_front_contactfrom_section',
				'settings' => 'contactfrom_sectionn_title',
				'type' => 'text',
				'priority' => 2,
			) );

			// Contactform section description
			$wp_customize->add_setting( 'contactfrom_section_description', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( new Customize_Textarea_Control( $wp_customize, 'contactfrom_section_description', array(
				'label' => __( 'Section description', 'emanon' ),
				'section' => 'emanon_front_contactfrom_section',
				'settings' => 'contactfrom_section_description',
				'type' => 'text',
				'priority' => 3,
			) ) );

			// Contactfrom section btn url
			$wp_customize->add_setting( 'contactfrom_section_btn_url', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control( 'contactfrom_section_btn_url', array(
				'label' => __( 'Button url', 'emanon' ),
				'section' => 'emanon_front_contactfrom_section',
				'settings' => 'contactfrom_section_btn_url',
				'type' => 'text',
				'priority' => 4,
			) );

			// Contactfrom section btn text
			$wp_customize->add_setting( 'contactfrom_section_btn_text', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'contactfrom_section_btn_text', array(
				'label' => __( 'Button text', 'emanon' ),
				'section' => 'emanon_front_contactfrom_section',
				'settings' => 'contactfrom_section_btn_text',
				'type' => 'text',
				'priority' => 5,
			) );

			// Contact form7
			$wp_customize->add_setting( 'contactfrom_section_contactform7', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'cta_form_section_contactform7', array(
				'label' => __( 'Contact Form7', 'emanon' ),
				'description' => __( 'Input short code example [contact-form-7 id="XXXX" title="XXXXX"]', 'emanon' ),
				'section' => 'emanon_front_contactfrom_section',
				'settings' => 'contactfrom_section_contactform7',
				'type' => 'text',
				'priority' => 6,
			) );

			// Contactfrom section background color
			$wp_customize->add_setting( 'contactfrom_section_background_color', array(
				'default' => '#f4f4f4',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'contactfrom_section_background_color', array(
				'label' => __( 'Section background color', 'emanon' ),
				'section' => 'emanon_front_contactfrom_section',
				'settings' => 'contactfrom_section_background_color',
				'priority' => 7,
			) ) );

			// Contactfrom section title color
			$wp_customize->add_setting( 'contactfrom_section_title_color', array(
				'default' => '#000c15',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'contactfrom_section_title_color', array(
				'label' => __( 'Section title color', 'emanon' ),
				'section' => 'emanon_front_contactfrom_section',
				'settings' => 'contactfrom_section_title_color',
				'priority' => 8,
			) ) );

			// Contactfrom section description color
			$wp_customize->add_setting( 'contactfrom_section_description_color', array(
				'default' => '#303030',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'contactfrom_section_description_color', array(
				'label' => __( 'Section description color', 'emanon' ),
				'section' => 'emanon_front_contactfrom_section',
				'settings' => 'contactfrom_section_description_color',
				'priority' => 9,
			) ) );

			// Contactfrom section button background color
			$wp_customize->add_setting( 'contactfrom_section_btn_background_color', array(
				'default' => '#9b8d77',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'contactfrom_section_btn_background_color', array(
				'label' => __( 'Button background color', 'emanon' ),
				'section' => 'emanon_front_contactfrom_section',
				'settings' => 'contactfrom_section_btn_background_color',
				'priority' => 10,
			) ) );

			// Contactfrom section button text color
			$wp_customize->add_setting( 'contactfrom_section_btn_text_color', array(
				'default' => '#fff',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'contactfrom_section_btn_text_color', array(
				'label' => __( 'Section button text color', 'emanon' ),
				'section' => 'emanon_front_contactfrom_section',
				'settings' => 'contactfrom_section_btn_text_color',
				'priority' => 11,
			) ) );

			// Contact Form7 background color
			$wp_customize->add_setting( 'contactForm7_background_color', array(
				'default' => '#fff',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'contactForm7_background_color', array(
				'label' => __( 'Contact Form7 background color', 'emanon' ),
				'section' => 'emanon_front_contactfrom_section',
				'settings' => 'contactForm7_background_color',
				'priority' => 12,
			) ) );

			// Contactfrom section image
			$wp_customize->add_setting( 'contactfrom_section_background_image', array(
				'default' => get_stylesheet_directory_uri() . '/lib/images/axiom-pattern.png',
				'type' => 'theme_mod',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'contactfrom_section_background_image', array (
				'label' => __( 'Background Image', 'emanon' ),
				'section' => 'emanon_front_contactfrom_section',
				'settings' => 'contactfrom_section_background_image',
				'type' => 'image',
				'priority' => 13,
			) ) );
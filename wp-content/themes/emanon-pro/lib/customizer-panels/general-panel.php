<?php
/**
* Theme Emanon Pro customizer general Panel
* @package WordPress
* @subpackage Emanon_Pro
* @since Emanon Pro 1.0
*/

	/*------------------------------------------------------------------------------------
	/* General Settings
	/*----------------------------------------------------------------------------------*/
	$wp_customize->add_panel( 'emanon_general_settings', array(
	'priority' => 30,
	'capability' => 'edit_theme_options',
	'title' => __( 'General settings', 'emanon' ),
	) );

		/*------------------------------------------------------------------------------------
		/* Meta Tages
		/*----------------------------------------------------------------------------------*/
		$wp_customize->add_section( 'emanon_meta_tages', array (
			'title'	 => __( 'Header meta tage', 'emanon' ),
			'priority' => 1,
			'panel' => 'emanon_general_settings',
		) );

			// Active meta tage settings
			$wp_customize->add_setting( 'active_meta_tage_settings', array(
				'default' => true,
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'active_meta_tage_settings', array(
				'label' =>__( 'Active meta tage settings', 'emanon' ),
				'description' => __( 'When disabled, automatic output of the meta tag stops. SEO setting function is turns off.', 'emanon' ),
				'section' => 'emanon_meta_tages',
				'settings' => 'active_meta_tage_settings',
				'type' => 'checkbox',
				'priority' => 1,
			) );

			// Meta keywords
			$wp_customize->add_setting( 'top_keywords', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'top_keywords', array (
				'label' => __( 'Meta keywords', 'emanon' ),
				'description' => __( 'Meta keywords set of front page (optional).', 'emanon' ),
				'section' => 'emanon_meta_tages',
				'settings' => 'top_keywords',
				'type' => 'text',
				'priority' => 2,
			) );

			// Meta description
			$wp_customize->add_setting( 'top_description', array (
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( new Customize_Textarea_Control( $wp_customize, 'top_description', array(
				'label' => __( 'Meta description', 'emanon' ),
				'description' => __( 'Meta description set of front page (optional).', 'emanon' ),
				'section' => 'emanon_meta_tages',
				'settings' => 'top_description',
				'priority' => 3,
			) ) );

		/*------------------------------------------------------------------------------------
		/* Facebook OGP
		/*----------------------------------------------------------------------------------*/
		$wp_customize->add_section( 'emanon_facebook_opg_options', array (
			'title'	 => __( 'Facebook OGP', 'emanon'),
			'priority' => 2,
			'panel' => 'emanon_general_settings',
		) );

			// Facebook OGP
			$wp_customize->add_setting( 'display_facebook_opg', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_facebook_opg', array(
				'label' =>__( 'Display facebook opg meta tag', 'emanon' ),
				'section' => 'emanon_facebook_opg_options',
				'settings' => 'display_facebook_opg',
				'type' => 'checkbox',
				'priority' => 1,
			) );

			// Facebook Application ID
			$wp_customize->add_setting( 'facebook_app_id', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'facebook_app_id', array(
				'label' => __( 'Facebook application id', 'emanon' ),
				'section' => 'emanon_facebook_opg_options',
				'settings' => 'facebook_app_id',
				'type' => 'text',
				'priority' => 2,
			) );

			// Facebook OGP image
			$wp_customize->add_setting( 'facebook_opg_image', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'facebook_opg_image', array (
				'label' => __( 'Facebook OGP image', 'emanon' ),
				'section' => 'emanon_facebook_opg_options',
				'settings' => 'facebook_opg_image',
				'priority' => 3,
			) ) );

		/*------------------------------------------------------------------------------------
		/* Twitter Card
		/*----------------------------------------------------------------------------------*/
		$wp_customize->add_section( 'emanon_twitter_card_options', array (
			'title'	 => __( 'Twitter card', 'emanon' ),
			'priority' => 3,
			'panel' => 'emanon_general_settings',
		) );

			// Display twitter card
			$wp_customize->add_setting( 'display_twitter_card', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_twitter_card', array(
				'label' =>__( 'Display twitter cards meta tag', 'emanon' ),
				'section' => 'emanon_twitter_card_options',
				'settings' => 'display_twitter_card',
				'type' => 'checkbox',
				'priority' => 1,
			) );

			// Twitter card type
			$wp_customize->add_setting( 'twitter_card_type', array(
				'default' => 'summary',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_twitter_card_type',
			) );
			$wp_customize->add_control( 'twitter_card_type', array(
				'label' => __( 'Twitter card type', 'emanon' ),
				'section' => 'emanon_twitter_card_options',
				'settings' => 'twitter_card_type',
				'type' => 'radio',
				'choices' => array(
					'summary' => __( 'Summary', 'emanon' ),
					'summary_large_image' => __( 'Summary large image', 'emanon' ),
					),
				'priority' => 2,
			) );

			// Twitter ID
			$wp_customize->add_setting( 'twitter_id', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'twitter_id', array(
				'label' => __( 'Twitter id', 'emanon' ),
				'description' => __( 'Enter the ID including @ mark.', 'emanon' ),
				'section' => 'emanon_twitter_card_options',
				'settings' => 'twitter_id',
				'type' => 'text',
				'priority' => 3,
			) );

			// Twitter OGP image
			$wp_customize->add_setting( 'twitter_opg_image', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'twitter_opg_image', array (
				'label' => __( 'Twitter OGP image', 'emanon' ),
				'section' => 'emanon_twitter_card_options',
				'settings' => 'twitter_opg_image',
				'priority' => 4,
			) ) );

		/*------------------------------------------------------------------------------------
		/* Google Tracking Tag
		/*----------------------------------------------------------------------------------*/
		$wp_customize->add_section( 'emanon_google_tracking_tag', array (
			'title' => __( 'Google tracking tag', 'emanon' ),
			'priority' => 4,
			'panel' => 'emanon_general_settings',
		) );

			// Google analytics tracking id
			$wp_customize->add_setting( 'tracking_id', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'tracking_id', array(
				'label' => __( 'Google analytics tracking ID', 'emanon' ),
				'description' => __( 'Input example UA-XXXXXXXX-XX', 'emanon' ),
				'section' => 'emanon_google_tracking_tag',
				'settings' => 'tracking_id',
				'type' => 'text',
				'priority' => 1,
			) );

			// Google Tag Manager ID
			$wp_customize->add_setting( 'tag_manager_id', array (
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'tag_manager_id', array(
				'label' => __( 'Google tag manager container ID', 'emanon' ),
				'description' => __( 'Input example GTM-XXXXXXX', 'emanon' ),
				'section' => 'emanon_google_tracking_tag',
				'settings' => 'tag_manager_id',
				'type' => 'text',
				'priority' => 2,
				) );

		/*------------------------------------------------------------------------------------
		/* Action Hook Head and Footer
		/*----------------------------------------------------------------------------------*/
		$wp_customize->add_section( 'emanon_action_fook_tag', array (
			'title' => __( 'Insert code before </head> and </body>', 'emanon' ),
			'description' => __( 'Insert JavaScript', 'emanon' ),
			'priority' => 5,
			'panel' => 'emanon_general_settings',
		) );

			// </head>
			$wp_customize->add_setting( 'insert_head', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_no_sanitize',
			) );
			$wp_customize->add_control( new Customize_Textarea_Control( $wp_customize, 'insert_head', array(
				'label' => __( 'Code /head to insert just before', 'emanon' ),
				'section' => 'emanon_action_fook_tag',
				'settings' => 'insert_head',
				'priority' => 1,
			) ) );

			// <body>
			$wp_customize->add_setting( 'insert_body_after', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_no_sanitize',
			) );
			$wp_customize->add_control( new Customize_Textarea_Control( $wp_customize, 'insert_body_after', array(
				'label' => __( 'Code body to insert just after', 'emanon' ),
				'section' => 'emanon_action_fook_tag',
				'settings' => 'insert_body_after',
				'priority' => 2,
			) ) );

			// </body>
			$wp_customize->add_setting( 'insert_footercod', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_no_sanitize',
			) );
			$wp_customize->add_control( new Customize_Textarea_Control( $wp_customize, 'insert_footercod', array(
				'label' => __( 'Code /body to insert just before', 'emanon' ),
				'section' => 'emanon_action_fook_tag',
				'settings' => 'insert_footercod',
				'priority' => 3,
			) ) );

		/*------------------------------------------------------------------------------------
		/* SNS Follow Url
		/*----------------------------------------------------------------------------------*/
		$wp_customize->add_section( 'emanon_sns_follow_links', array (
			'title' => __( 'SNS follow url', 'emanon' ),
			'priority' => 6,
			'panel' => 'emanon_general_settings',
		) );

			// Twitter url
			$wp_customize->add_setting( 'twitter_profile_url', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control( 'twitter_profile_url', array(
				'label' => __( 'Twitter profile url', 'emanon' ),
				'section' => 'emanon_sns_follow_links',
				'settings' => 'twitter_profile_url',
				'type' => 'url',
				'priority' => 1,
			) );

			// Facebook url
			$wp_customize->add_setting( 'facebook_profile_url', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control( 'facebook_profile_url', array(
				'label' => __( 'Facebooke profile url', 'emanon' ),
				'section' => 'emanon_sns_follow_links',
				'settings' => 'facebook_profile_url',
				'type'	=> 'url',
				'priority' => 2,
			) );

			// Instagram url
			$wp_customize->add_setting( 'instagram_profile_url', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control( 'instagram_profile_url', array(
				'label' => __( 'Instagram profile url', 'emanon' ),
				'section' => 'emanon_sns_follow_links',
				'settings' => 'instagram_profile_url',
				'type' => 'url',
				'priority' => 3,
			) );

			// LINE url
			$wp_customize->add_setting( 'line_profile_url', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control( 'line_profile_url', array(
				'label' => __( 'LINE@ profile url', 'emanon' ),
				'section' => 'emanon_sns_follow_links',
				'settings' => 'line_profile_url',
				'type' => 'url',
				'priority' => 4,
			) );

			// YouTube url
			$wp_customize->add_setting( 'youtube_profile_url', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control( 'youtube_profile_url', array(
				'label' => __( 'YouTube profile url', 'emanon' ),
				'section' => 'emanon_sns_follow_links',
				'settings' => 'youtube_profile_url',
				'type' => 'url',
				'priority' => 5,
			) );

			// Feedly
			$wp_customize->add_setting( 'feedly_url', array(
				'default' => get_bloginfo( 'rss2_url' ),
				'type' => 'theme_mod',
				'sanitize_callback' => 'esc_url_raw',
			) );
			$wp_customize->add_control( 'feedly_url', array(
				'label' =>__( 'RSS feed (default is the wordpress feed)', 'emanon' ),
				'section' => 'emanon_sns_follow_links',
				'settings' => 'feedly_url',
				'type' => 'url',
				'priority' => 6,
			) );

		/*------------------------------------------------------------------------------------
		/* Animation Settings
		/*----------------------------------------------------------------------------------*/
		$wp_customize->add_section( 'emanon_animation', array (
			'title' => __( 'Animation settings', 'emanon' ),
			'priority' => 7,
			'panel' => 'emanon_general_settings',
		) );

			// Stop animation
			$wp_customize->add_setting( 'stop_animation', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'stop_animation', array(
				'label' =>__( 'Stop animation style', 'emanon' ),
				'description' => __( 'Stop the animation function of the web site.', 'emanon' ),
				'section' => 'emanon_animation',
				'settings' => 'stop_animation',
				'type' => 'checkbox',
				'priority' => 1,
			) );

			// Stop mobile animation
			$wp_customize->add_setting( 'stop_mobile_animation', array(
				'default' => true,
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'stop_mobile_animation', array(
				'label' =>__( 'Stop mobile animation style', 'emanon' ),
				'description' => __( 'Stop the animation function of the web site in mobile.', 'emanon' ),
				'section' => 'emanon_animation',
				'settings' => 'stop_mobile_animation',
				'type' => 'checkbox',
				'priority' => 1,
			) );

		/*------------------------------------------------------------------------------------
		/* Add QTags button
		/*----------------------------------------------------------------------------------*/
		$wp_customize->add_section( 'emanon_add_qtags_button', array (
			'title' => __( 'Add QTags button', 'emanon' ),
			'priority' => 8,
			'panel' => 'emanon_general_settings',
		) );

			// QTags Add button
			$wp_customize->add_setting( 'qtags_add_button', array(
				'default' => true,
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'qtags_add_button', array(
				'label' =>__( 'Add QTags button', 'emanon' ),
				'description' => __( 'Add Qtags buttons in text (HTML) mode of WordPress editor.', 'emanon' ),
				'section' => 'emanon_add_qtags_button',
				'settings' => 'qtags_add_button',
				'type' => 'checkbox',
				'priority' => 1,
			) );

		/*------------------------------------------------------------------------------------
		/* Search range
		/*----------------------------------------------------------------------------------*/
		$wp_customize->add_section( 'emanon_search_range', array (
			'title' => __( 'Search range', 'emanon' ),
			'priority' => 9,
			'panel' => 'emanon_general_settings',
		) );

			// Search results post
			$wp_customize->add_setting( 'search_results_post', array(
				'default' => true,
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'search_results_post', array(
				'label' =>__( 'Display post only', 'emanon' ),
				'description' => __( 'When disabled, pages are also displayed in search results.', 'emanon' ),
				'section' => 'emanon_search_range',
				'settings' => 'search_results_post',
				'type' => 'checkbox',
				'priority' => 1,
			) );

		/*------------------------------------------------------------------------------------
		/* Color
		/*----------------------------------------------------------------------------------*/
		// Color scheme
		$wp_customize->add_setting( 'color_scheme', array(
			'default' => '',
			'type' => 'theme_mod',
			'sanitize_callback' => 'emanon_customize_sanitize_color_scheme',
			) );
		$wp_customize->add_control( 'color_scheme', array(
			'label' => __( 'Color Scheme', 'emanon' ),
			'section' => 'colors',
			'settings' => 'color_scheme',
			'type' => 'select',
			'choices' => array(
				'' => __( 'Default color', 'emanon' ),
				'#161616,#777,#aaa'		 => __( 'Color scheme of black', 'emanon' ),
				'#d2d5d9,#7c899a,#acb4bf' => __( 'Color scheme of gray', 'emanon' ),
				'#ed5058,#eeb043,#eeb043' => __( 'Color scheme of red', 'emanon' ),
				'#ffab11,#f25800,#ff8037' => __( 'Color scheme of orange', 'emanon' ),
				'#ff8cb2,#914a8d,#b977b5' => __( 'Color scheme of pink', 'emanon' ),
				'#00b7e0,#6c819a,#9eacbc' => __( 'Color scheme of blue', 'emanon' ),
				'#a8e798,#4cd1db,#76dce4' => __( 'Color scheme of green', 'emanon' ),
				'#957dc6,#c4b0a4,#d1c3b9' => __( 'Color scheme of purple', 'emanon' ),
				),
			'priority' => 1,
		) );

		// Main color
		$wp_customize->add_setting( 'main_color', array(
			'default' => '#161410',
			'type' => 'theme_mod',
			'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'main_color', array(
			'label' => __( 'Main color', 'emanon' ),
			'section' => 'colors',
			'settings' => 'main_color',
			'priority' => 2,
		) ) );

		// Link color
		$wp_customize->add_setting( 'link_color', array(
			'default' => '#9b8d77',
			'type' => 'theme_mod',
			'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link_color', array(
			'label' => __( 'Link color', 'emanon' ),
			'section' => 'colors',
			'settings' => 'link_color',
			'priority' => 3,
		) ) );

		// Link color hover
		$wp_customize->add_setting( 'link_hover', array(
			'default' => '#b5b5b5',
			'type' => 'theme_mod',
			'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link_hover', array(
			'label' => __( 'Link hover', 'emanon' ),
			'section' => 'colors',
			'settings' => 'link_hover',
			'priority' => 4,
		) ) );

		// Footer background color
		$wp_customize->add_setting( 'footer_background_color', array(
			'default' => '#232323',
			'type' => 'theme_mod',
			'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_background_color', array(
			'label' => __( 'Footer background color', 'emanon' ),
			'section' => 'colors',
			'settings' => 'footer_background_color',
			'priority' => 5,
		) ) );

		// Footer text color
		$wp_customize->add_setting( 'footer_text_color', array(
			'default' => '#b5b5b5',
			'type' => 'theme_mod',
			'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_text_color', array(
			'label' => __( 'Footer text color', 'emanon' ),
			'section' => 'colors',
			'settings' => 'footer_text_color',
			'priority' =>6,
		) ) );

		// Footer link hover
		$wp_customize->add_setting( 'footer_link_hover', array(
			'default' => '#fff',
			'type' => 'theme_mod',
			'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_link_hover', array(
			'label' => __( 'Footer link hover', 'emanon' ),
			'section' => 'colors',
			'settings' => 'footer_link_hover',
			'priority' => 7,
		) ) );

		// Btn background color
		$wp_customize->add_setting( 'btn_background_color', array(
			'default' => '#9b8d77',
			'type' => 'theme_mod',
			'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'btn_background_color', array(
			'label' => __( 'Button background color', 'emanon' ),
			'section' => 'colors',
			'settings' => 'btn_background_color',
			'priority' => 8,
		) ) );

		// Btn text color
		$wp_customize->add_setting( 'btn_text_color', array(
			'default' => '#fff',
			'type' => 'theme_mod',
			'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'btn_text_color', array(
			'label' => __( 'Button text color', 'emanon' ),
			'section' => 'colors',
			'settings' => 'btn_text_color',
			'priority' => 8,
		) ) );
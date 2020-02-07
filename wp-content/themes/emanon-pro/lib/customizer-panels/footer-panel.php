<?php
/**
* Theme Emanon Pro customizer footer panel
* @package WordPress
* @subpackage Emanon_Pro
* @since Emanon Pro 1.0
*/

	/*------------------------------------------------------------------------------------
	/* Footer Settings
	/*----------------------------------------------------------------------------------*/
	$wp_customize->add_panel( 'emanon_footer_settings', array(
	'priority' => 45,
	'capability' => 'edit_theme_options',
	'title' => __( 'Footer settings', 'emanon' ),
	) );

		/*------------------------------------------------------------------------------------
		/* Layout Design Options
		/*----------------------------------------------------------------------------------*/
		$wp_customize->add_section( 'emanon_footer_design_options', array (
			'title' => __( 'Layout design', 'emanon' ),
			'priority' => 1,
			'panel' => 'emanon_footer_settings',
		) );

			// Display top page btn
			$wp_customize->add_setting( 'display_top_page_btn_pc', array(
				'default' => true,
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_top_page_btn_pc', array(
				'label' => __( 'Display top page btn［PC］', 'emanon' ),
				'section' => 'emanon_footer_design_options',
				'settings' => 'display_top_page_btn_pc',
				'type' => 'checkbox',
				'priority' => 1,
			) );

			// Display top page btn
			$wp_customize->add_setting( 'display_top_page_btn_sp', array(
				'default' => true,
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_top_page_btn_sp', array(
				'label' => __( 'Display top page btn［SP］', 'emanon' ),
				'section' => 'emanon_footer_design_options',
				'settings' => 'display_top_page_btn_sp',
				'type' => 'checkbox',
				'priority' => 2,
			) );

			// Display SNS follow botton in footer
			$wp_customize->add_setting( 'display_footer_sns_follow', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_footer_sns_follow', array(
				'label' => __( 'Display SNS follow botton in footer', 'emanon' ),
				'section' => 'emanon_footer_design_options',
				'settings' => 'display_footer_sns_follow',
				'type' => 'checkbox',
				'priority' => 3,
			) );

			// Footer top background color
			$wp_customize->add_setting( 'footer_top_background_color', array(
				'default' => '#323638',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_colorcode',
				) );
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_top_background_color', array(
				'label' => __( 'Footer top background color', 'emanon' ),
				'section' => 'emanon_footer_design_options',
				'settings' => 'footer_top_background_color',
				'priority' => 4,
			) ) );
<?php
/**
* Theme Emanon Pro customizer page speed panel
* @package WordPress
* @subpackage Emanon_Pro
* @since Emanon Pro 1.1
*/

	/*------------------------------------------------------------------------------------
	/* Page Speed Settings
	/*----------------------------------------------------------------------------------*/
	$wp_customize->add_panel( 'emanon_page_speed_settings', array(
	'priority' => 75,
	'capability' => 'edit_theme_options',
	'title' => __( 'Page speed settings', 'emanon' ),
	) );

		/*------------------------------------------------------------------------------------
		/* Optimized Jquery
		/*----------------------------------------------------------------------------------*/
		$wp_customize->add_section( 'emanon_jquery_optimized', array (
			'title' => __( 'Optimized jQuery', 'emanon' ),
			'priority' => 1,
			'panel' => 'emanon_page_speed_settings',
		) );

			// Put jquery at the bottom
			$wp_customize->add_setting( 'jquery_bottom', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'jquery_bottom', array(
				'label'	 => __( 'Put jQuery at the bottom', 'emanon' ),
				'section' => 'emanon_jquery_optimized',
				'settings' => 'jquery_bottom',
				'type' => 'checkbox',
				'priority' => 1,
			) );

		/*------------------------------------------------------------------------------------
		/* Optimized CSS
		/*----------------------------------------------------------------------------------*/
		$wp_customize->add_section( 'emanon_css_optimized', array (
			'title' => __( 'Optimized CSS', 'emanon' ),
			'priority' => 2,
			'panel' => 'emanon_page_speed_settings',
		) );

			// Minified style.css
			$wp_customize->add_setting( 'css_minified', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'css_minified', array(
				'label' => __( 'Use binding style.css', 'emanon' ),
				'description' => __( 'When adding CSS to style sheet, please turn off CSS compression.After adding CSS, please turn on CSS compression.', 'emanon' ),
				'section' => 'emanon_css_optimized',
				'settings' => 'css_minified',
				'type' => 'checkbox',
				'priority' => 1,
			) );

			// Lazy Load font-awesome.css
			$wp_customize->add_setting( 'font_awesome_lazyload', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'font_awesome_lazyload', array(
				'label' => __( 'Lazy Load font-awesome.css', 'emanon' ),
				'section' => 'emanon_css_optimized',
				'settings' => 'font_awesome_lazyload',
				'type' => 'checkbox',
				'priority' => 2,
			) );

		/*------------------------------------------------------------------------------------
		/* Optimized HTML
		/*----------------------------------------------------------------------------------*/
		$wp_customize->add_section( 'emanon_html_optimized', array (
			'title' => __( 'Optimized HTML', 'emanon' ),
			'priority' => 3,
			'panel' => 'emanon_page_speed_settings',
		) );

			// Minified HTML
			$wp_customize->add_setting( 'html_minified', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'html_minified', array(
				'label' => __( 'Minified HTML', 'emanon' ),
				'section' => 'emanon_html_optimized',
				'settings' => 'html_minified',
				'type' => 'checkbox',
				'priority' => 1,
			) );
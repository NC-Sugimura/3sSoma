<?php
/**
* Theme Emanon Pro customizer advertisement panel
* @package WordPress
* @subpackage Emanon_Pro
* @since Emanon Pro 1.0
*/

	/*------------------------------------------------------------------------------------
	/* Advertisement Settings
	/*----------------------------------------------------------------------------------*/
	$wp_customize->add_panel( 'emanon_ad_settings', array(
	'priority' => 70,
	'capability' => 'edit_theme_options',
	'title' => __( 'AD settings', 'emanon' ),
	) );

		/*------------------------------------------------------------------------------------
		/* Display Ad
		/*----------------------------------------------------------------------------------*/
		$wp_customize->add_section( 'emanon_display_ad', array (
			'title' => __( 'Display ad', 'emanon' ),
			 'description' => __( 'Paste ad code in the widget is required.', 'emanon' ),
			'priority' => 1,
			'panel' => 'emanon_ad_settings',
		) );

			// Display ad emanon_ad_label
			$wp_customize->add_setting( 'emanon_ad_label', array(
				'default' => __( 'Sponsor link', 'emanon' ),
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'emanon_ad_label', array(
				'label' => __( 'Ad label', 'emanon' ),
				'section' => 'emanon_display_ad',
				'settings' => 'emanon_ad_label',
				'type' => 'text',
				'priority' => 1,
			) );

			// Display ad on list page
			$wp_customize->add_setting( 'display_ad_listpage', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_ad_listpage', array(
				'label' =>__( 'Display ad on list page', 'emanon' ),
				'section' => 'emanon_display_ad',
				'settings' => 'display_ad_listpage',
				'type' => 'checkbox',
				'priority' => 2,
			) );

			// Display ad on single page
			$wp_customize->add_setting( 'display_ad_single', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_ad_single', array(
				'label' =>__( 'Display ad on single page', 'emanon' ),
				'section' => 'emanon_display_ad',
				'settings' => 'display_ad_single',
				'type' => 'checkbox',
				'priority' => 3,
			) );

			// Display ad on page
			$wp_customize->add_setting( 'display_ad_page', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_ad_page', array(
				'label' =>__( 'Display ad on page', 'emanon' ),
				'section' => 'emanon_display_ad',
				'settings' => 'display_ad_page',
				'type' => 'checkbox',
				'priority' => 4,
			) );

			// Place of display ad infeed
			$wp_customize->add_setting( 'display_adinfeed_place', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			) );
			$wp_customize->add_control( 'display_adinfeed_place', array(
				'label' => __( 'Place of display ad infeed', 'emanon' ),
				'section' => 'emanon_display_ad',
				'settings' => 'display_adinfeed_place',
				'type' => 'text',
				'input_attrs' => array(
					'min' => 0,
					'step' => 1,
				),
				'priority' => 5,
			) );

			// Display ad infeed on front page
			$wp_customize->add_setting( 'display_adinfeed_front_page', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_adinfeed_front_page', array(
				'label' =>__( 'Display ad infeed on front page', 'emanon' ),
				'section' => 'emanon_display_ad',
				'settings' => 'display_adinfeed_front_page',
				'type' => 'checkbox',
				'priority' => 6,
			) );

			// Display ad infeed on archive
			$wp_customize->add_setting( 'display_adinfeed_archive', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_adinfeed_archive', array(
				'label' =>__( 'Display ad infeed on archive', 'emanon' ),
				'section' => 'emanon_display_ad',
				'settings' => 'display_adinfeed_archive',
				'type' => 'checkbox',
				'priority' => 7,
			) );

		/*------------------------------------------------------------------------------------
		/* Display Ad Position
		/*----------------------------------------------------------------------------------*/
		$wp_customize->add_section( 'emanon_display_ad_position', array (
			'title' => __( 'Display ad position', 'emanon' ),
			'priority' => 2,
			'panel' => 'emanon_ad_settings',
		) );

			// Side bar ad 300px 250px
			$wp_customize->add_setting( 'sidebar_ad300', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'sidebar_ad300', array(
				'label' =>__( 'Side bar ad 300px 250px', 'emanon' ),
				'section' => 'emanon_display_ad_position',
				'settings' => 'sidebar_ad300',
				'type' => 'checkbox',
				'priority' => 1,
			) );

			// Article h2 over left ad 300px 250px
			$wp_customize->add_setting( 'h2_left_ad300', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'h2_left_ad300', array(
				'label' =>__( 'Article h2 over left ad 300px 250px', 'emanon' ),
				'section' => 'emanon_display_ad_position',
				'settings' => 'h2_left_ad300',
				'type' => 'checkbox',
				'priority' => 2,
			) );

			// Article h2 over right ad 300px 250px
			$wp_customize->add_setting( 'h2_right_ad300', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'h2_right_ad300', array(
				'label' =>__( 'Article h2 over right ad 300px 250px', 'emanon' ),
				'section' => 'emanon_display_ad_position',
				'settings' => 'h2_right_ad300',
				'type' => 'checkbox',
				'priority' => 3,
			) );

			// Article under left ad 300px 250px
			$wp_customize->add_setting( 'under_left_ad300', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'under_left_ad300', array(
				'label' =>__( 'Article under left ad 300px 250px', 'emanon' ),
				'section' => 'emanon_display_ad_position',
				'settings' => 'under_left_ad300',
				'type' => 'checkbox',
				'priority' => 4,
			) );

			// Article under right ad 300px 250px
			$wp_customize->add_setting( 'under_right_ad300', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'under_right_ad300', array(
				'label' =>__( 'Article under right ad 300px 250px', 'emanon' ),
				'section' => 'emanon_display_ad_position',
				'settings' => 'under_right_ad300',
				'type' => 'checkbox',
				'priority' => 5,
			) );

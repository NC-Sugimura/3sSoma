<?php
/**
* Theme customizer functionality
* @package WordPress
* @subpackage Emanon_Business
* @since Emanon Business 1.0
*/


/*------------------------------------------------------------------------------------
/* Customize register
/*----------------------------------------------------------------------------------*/
	add_action( 'customize_register', 'emanon_customize_child_register', 50 );
	function emanon_customize_child_register( $wp_customize ) {

	// Remove section
	// $wp_customize->remove_section( 'emanon_firstview_layout' ); //

	/* Front page panel */
	require get_stylesheet_directory() . '/lib/customizer-panels/front-page-panel.php';

	}

/*------------------------------------------------------------------------------------
/* Sanitize
/*----------------------------------------------------------------------------------*/
	function emanon_customize_sanitize_front_cta_type( $input ) {
		if( $input == 'no_display' || $input == 'tell' || $input == 'mail' || $input == 'tell_mail' ) {
		return $input;
		} else {
			return 'no_display';
		}
	}

	function emanon_customize_sanitize_section_layout_type( $input ) {
		if( $input == 4 || $input == 7 ) {
		return $input;
		} else {
			return 4;
		}
	}

	function emanon_customize_sanitize_product_message_layout_type( $input ) {
		if( $input == 'product_message_left' || $input == 'product_message_center' || $input == 'product_message_right' ) {
		return $input;
		} else {
			return 'product_message_center';
		}
	}

	function emanon_customize_sanitize_case_article_type( $input ) {
		if( $input == 'post' || $input == 'page' ) {
		return $input;
		} else {
			return 'post';
		}
	}

	function emanon_customize_sanitize_case_display_type( $input ) {
		if( $input == 'category' || $input == 'featured' || $input == 'new_arrivals' ) {
		return $input;
		} else {
			return 'category';
		}
	}

	function emanon_customize_sanitize_info_display_type( $input ) {
		if( $input == 'new_arrivals'|| $input == 'featured' || $input == 'category' ) {
		return $input;
		} else {
			return 'new_arrivals';
		}
	}

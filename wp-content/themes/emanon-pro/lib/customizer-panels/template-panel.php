<?php
/**
* Theme Emanon Pro customizer template panel
* @package WordPress
* @subpackage Emanon_Pro
* @since Emanon Pro 1.0
*/

	/*------------------------------------------------------------------------------------
	/* Template Settings
	/*----------------------------------------------------------------------------------*/
	$wp_customize->add_panel( 'emanon_template_settings', array(
	'priority' => 55,
	'capability' => 'edit_theme_options',
	'title' => __( 'Template settings', 'emanon' ),
	) );

		/*------------------------------------------------------------------------------------
		/* Sidebar Layout
		/*----------------------------------------------------------------------------------*/
		$wp_customize->add_section( 'emanon_sidebar_layout', array (
			'title' => __( 'Sidebar layout', 'emanon' ),
			'priority' => 1,
			'panel' => 'emanon_template_settings',
		) );

			// Front sidebar layout
			$wp_customize->add_setting( 'front_sidebar_layout', array(
				'default' => 'right_sidebar',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_sidebar_layout_type',
			) );
			$wp_customize->add_control( 'front_sidebar_layout', array(
				'label' => __( 'Front page sidebar layout type', 'emanon' ),
				'section' => 'emanon_sidebar_layout',
				'settings' => 'front_sidebar_layout',
				'type' => 'radio',
				'choices' => array(
					'right_sidebar' => __( 'Right sidebar', 'emanon' ),
					'left_sidebar' => __( 'Left sidebar', 'emanon' ),
					'no_sidebar' => __( 'No sidebar', 'emanon' ),
					),
				'priority' => 1,
			) );

			// Content sidebar layout
			$wp_customize->add_setting( 'content_sidebar_layout', array(
				'default' => 'right_sidebar',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_sidebar_layout_type',
			) );
			$wp_customize->add_control( 'content_sidebar_layout', array(
				'label' => __( 'Content sidebar layout type', 'emanon' ),
				'description' => __( 'Display setting of the post, the page.', 'emanon' ),
				'section' => 'emanon_sidebar_layout',
				'settings' => 'content_sidebar_layout',
				'type' => 'radio',
				'choices' => array(
					'right_sidebar' => __( 'Right sidebar', 'emanon' ),
					'left_sidebar' => __( 'Left sidebar', 'emanon' ),
					'no_sidebar' => __( 'No sidebar', 'emanon' ),
					),
				'priority' => 2,
			) );

			// Archive sidebar layout
			$wp_customize->add_setting( 'archive_sidebar_layout', array(
				'default' => 'right_sidebar',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_sidebar_layout_type',
			) );
			$wp_customize->add_control( 'archive_sidebar_layout', array(
				'label' => __( 'Archive sidebar layout type', 'emanon' ),
				'description' => __( 'Display setting of the archive page.', 'emanon' ),
				'section' => 'emanon_sidebar_layout',
				'settings' => 'archive_sidebar_layout',
				'type' => 'radio',
				'choices' => array(
					'right_sidebar' => __( 'Right sidebar', 'emanon' ),
					'left_sidebar' => __( 'Left sidebar', 'emanon' ),
					'no_sidebar' => __( 'No sidebar', 'emanon' ),
					),
				'priority' => 3,
			) );

		/*------------------------------------------------------------------------------------
		/* Entry List Layout
		/*----------------------------------------------------------------------------------*/
		$wp_customize->add_section( 'emanon_entry_list_layout', array (
			'title' => __( 'Entry list layout', 'emanon' ),
			'priority' => 2,
			'panel' => 'emanon_template_settings',
		) );

			// Content entry layout
			$wp_customize->add_setting( 'content_entry_layout', array(
				'default' => 'one_column',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_entry_layout_type',
			) );
			$wp_customize->add_control( 'content_entry_layout', array(
				'label' => __( 'Entry list layout type', 'emanon' ),
				'description' => __( 'Display setting of the front page.', 'emanon' ),
				'section' => 'emanon_entry_list_layout',
				'settings' => 'content_entry_layout',
				'type' => 'radio',
				'choices' => array(
					'one_column' => __( 'One column', 'emanon' ),
					'two_column' => __( 'Two column', 'emanon' ),
					'three_column' => __( 'Three column', 'emanon' ),
					'big_column' => __( 'Big column', 'emanon' ),
					),
				'priority' => 1,
			) );

			// Archive entry layout
			$wp_customize->add_setting( 'archive_entry_layout', array(
				'default' => 'one_column',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_entry_layout_type',
			) );
			$wp_customize->add_control( 'archive_entry_layout', array(
				'label' => __( 'Archive list layout type', 'emanon' ),
				'description' => __( 'Display setting of the archive page.', 'emanon' ),
				'section' => 'emanon_entry_list_layout',
				'settings' => 'archive_entry_layout',
				'type' => 'radio',
				'choices' => array(
					'one_column' => __( 'One column', 'emanon' ),
					'two_column' => __( 'Two column', 'emanon' ),
					'three_column' => __( 'Three column', 'emanon' ),
					'big_column' => __( 'Big column', 'emanon' ),
					),
				'priority' => 2,
			) );

			// Author list layout
			$wp_customize->add_setting( 'author_list_layout', array(
				'default' => 'one_column',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_list_layout_type',
			) );
			$wp_customize->add_control( 'author_list_layout', array(
				'label' => __( 'Author list layout type', 'emanon' ),
				'description' => __( 'Display setting of the author list .', 'emanon' ),
				'section' => 'emanon_entry_list_layout',
				'settings' => 'author_list_layout',
				'type' => 'radio',
				'choices' => array(
					'one_column' => __( 'One col', 'emanon' ),
					'two_column' => __( 'Two col', 'emanon' ),
					'three_column' => __( 'Three col', 'emanon' ),
					),
				'priority' => 3,
			) );

			// Exclude author userr id
			$wp_customize->add_setting( 'exclude_author_user_id', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			));
			$wp_customize->add_control( 'exclude_author_user_id', array(
				'label' => __( 'Exclude author user id', 'emanon' ),
				'section' => 'emanon_entry_list_layout',
				'settings' => 'exclude_author_user_id',
				'type' => 'text',
				'priority' => 4,
			));

			// Display date
			$wp_customize->add_setting( 'display_entry_date_list', array(
				'default' => true,
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_entry_date_list', array(
				'label' =>__( 'Display date', 'emanon' ),
				'section' => 'emanon_entry_list_layout',
				'settings' => 'display_entry_date_list',
				'type' => 'checkbox',
				'priority' => 5,
			) );

			// Display updade date
			$wp_customize->add_setting( 'display_update_date_list', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_update_date_list', array(
				'label' =>__( 'Display updade date', 'emanon' ),
				'section' => 'emanon_entry_list_layout',
				'settings' => 'display_update_date_list',
				'type' => 'checkbox',
				'priority' => 6,
			) );

			// Display category
			$wp_customize->add_setting( 'display_category_list', array(
				'default' => true,
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_category_list', array(
				'label' => __( 'Display category', 'emanon' ),
				'section' => 'emanon_entry_list_layout',
				'settings' => 'display_category_list',
				'type' => 'checkbox',
				'priority' => 7,
			) );

			// Display tag
			$wp_customize->add_setting( 'display_tag_list', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_tag_list', array(
				'label' => __( 'Display tag', 'emanon' ),
				'section' => 'emanon_entry_list_layout',
				'settings' => 'display_tag_list',
				'type'	=> 'checkbox',
				'priority' => 8,
			) );

			// Display comments number
			$wp_customize->add_setting( 'display_comments_number_list', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_comments_number_list', array(
				'label' => __( 'Display comments number', 'emanon' ),
				'section' => 'emanon_entry_list_layout',
				'settings' => 'display_comments_number_list',
				'type' => 'checkbox',
				'priority' => 9,
			) );

			// Display author
			$wp_customize->add_setting( 'display_author_list', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_autho_list', array(
				'label' => __( 'Display author', 'emanon' ),
				'section' => 'emanon_entry_list_layout',
				'settings' => 'display_author_list',
				'type' => 'checkbox',
				'priority' => 10,
			) );

			// Display excerpt
			$wp_customize->add_setting( 'display_excerpt', array(
				'default' => true,
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_excerpt', array(
				'label' =>__( 'Display excerpt', 'emanon' ),
				'section' => 'emanon_entry_list_layout',
				'settings' => 'display_excerpt',
				'type' => 'checkbox',
				'priority' => 11,
			) );

			// Display category nicename
			$wp_customize->add_setting( 'display_category_nicename', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_category_nicename', array(
				'label' =>__( 'Display category nicename class', 'emanon' ),
				'section' => 'emanon_entry_list_layout',
				'settings' => 'display_category_nicename',
				'type' => 'checkbox',
				'priority' => 12,
			) );

			// Number of excerpt length
			$wp_customize->add_setting( 'excerpt_length', array(
				'default' => 40,
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_number',
			));
			$wp_customize->add_control( 'excerpt_length', array(
				'label' => __( 'Number of excerpt length (default 40)', 'emanon' ),
				'section' => 'emanon_entry_list_layout',
				'settings' => 'excerpt_length',
				'type' => 'number',
				'input_attrs' => array(
					'min' => 0,
					'step' => 1,
				),
				'priority' => 13,
			));

			// Excerpt more
			$wp_customize->add_setting( 'excerpt_more', array(
				'default' => '',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_text',
			));
			$wp_customize->add_control( 'excerpt_more', array(
				'label' => __( 'Excerpt more', 'emanon' ),
				'section' => 'emanon_entry_list_layout',
				'settings' => 'excerpt_more',
				'type' => 'text',
				'priority' => 14,
			));

			// Display read more
			$wp_customize->add_setting( 'display_read_more', array(
				'default' => true,
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_checkbox',
			) );
			$wp_customize->add_control( 'display_read_more', array(
				'label' =>__( 'Display read more', 'emanon' ),
				'section' => 'emanon_entry_list_layout',
				'settings' => 'display_read_more',
				'type' => 'checkbox',
				'priority' => 15,
			) );

			// Read more type
			$wp_customize->add_setting( 'read_more_type', array(
				'default' => 'read_more',
				'type' => 'theme_mod',
				'sanitize_callback' => 'emanon_customize_sanitize_read_more',
			) );
			$wp_customize->add_control( 'read_more_type', array(
				'label' => __( 'Read more type', 'emanon' ),
				'section' => 'emanon_entry_list_layout',
				'settings' => 'read_more_type',
				'type' => 'radio',
				'choices' => array(
					'read_more' => __( 'Read more', 'emanon' ),
					'read_more_post_title' => __( 'Post title', 'emanon' ),
					),
				'priority' => 16,
			) );

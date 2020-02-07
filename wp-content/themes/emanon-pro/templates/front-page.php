<?php
/**
* Template Name: フロントページ（固定ページ）
* @package WordPress
* @subpackage Emanon_Pro
* @since Emanon Pro 1.1.1
*/

get_header(); ?>

<?php emanon_firstview(); ?>

<?php // 固定ページレイアウトの表示判定
	$front_layout_type = get_theme_mod( 'front_sidebar_layout', 'right_sidebar' );
	if ( $front_layout_type == 'right_sidebar') {
		get_template_part( 'blog-templates/page/right-sidebar-page' );
	}
	if ( $front_layout_type == 'left_sidebar' ) {
		get_template_part( 'blog-templates/page/left-sidebar-page' );
	}
	if ( $front_layout_type == 'no_sidebar' ) {
	 get_template_part( 'blog-templates/page/no-sidebar-page' );
	}
; ?>

<?php get_footer(); ?>
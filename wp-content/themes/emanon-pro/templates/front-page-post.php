<?php
/**
* Template Name: フロントページ（記事一覧）
* @package WordPress
* @subpackage Emanon_Pro
* @since Emanon Pro 1.7.1
*/

get_header(); ?>

<?php emanon_firstview(); ?>

<?php // フロントページレイアウトの表示判定
	$display_entry_section = get_theme_mod( 'display_entry_section', true );
	$front_layout_type = get_theme_mod( 'front_sidebar_layout', 'right_sidebar' );
	if ( $front_layout_type == 'right_sidebar' && $display_entry_section ) {
		get_template_part( 'blog-templates/front-page/front-right-sidebar');
	}
	if ( $front_layout_type == 'left_sidebar' && $display_entry_section ) {
		get_template_part( 'blog-templates/front-page/front-left-sidebar' );
	}
	if ( $front_layout_type == 'no_sidebar' && $display_entry_section ) {
		get_template_part( 'blog-templates/front-page/front-no-sidebar' );
	}
?>

<?php get_footer(); ?>
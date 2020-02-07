<?php
/**
* Template author archive
* @package WordPress
* @subpackage Emanon_Pro
* @since Emanon Pro 1.1
*/

get_header(); ?>

<?php // アーカイブレイアウトの表示判定
	$archive_layout_type = get_theme_mod( 'archive_sidebar_layout', 'right_sidebar' );
	if ( $archive_layout_type == 'right_sidebar') {
		get_template_part( 'blog-templates/archive-author/right-sidebar-author' );
	}
	if ( $archive_layout_type == 'left_sidebar' ) {
		get_template_part( 'blog-templates/archive-author/left-sidebar-author' );
	}
	if ( $archive_layout_type == 'no_sidebar' ) {
		get_template_part( 'blog-templates/archive-author/no-sidebar-author' );
	}
; ?>

<?php get_footer(); ?>
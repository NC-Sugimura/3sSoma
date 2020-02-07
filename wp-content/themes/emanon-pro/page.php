<?php
/**
* Template Page
* @package WordPress
* @subpackage Emanon_Pro
* @since Emanon Pro 1.0
*/

get_header(); ?>

<?php // 固定ページレイアウトの表示判定
	$page_layout_type = get_theme_mod( 'content_sidebar_layout', 'right_sidebar' );
	if ( $page_layout_type == 'right_sidebar') {
		get_template_part( 'blog-templates/page/right-sidebar-page' );
	}
	elseif ( $page_layout_type == 'left_sidebar' ) {
		get_template_part( 'blog-templates/page/left-sidebar-page' );
	}
	elseif ( $page_layout_type == 'no_sidebar' ) {
	 get_template_part( 'blog-templates/page/no-sidebar-page' );
	}
?>

<?php get_footer(); ?>
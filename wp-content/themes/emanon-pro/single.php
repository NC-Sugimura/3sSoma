<?php
/**
* Template single posts
* @package WordPress
* @subpackage Emanon_Pro
* @since Emanon Pro 1.0
*/

get_header(); ?>

<?php // 投稿ページレイアウトの表示判定
	$single_layout_type = get_theme_mod( 'content_sidebar_layout', 'right_sidebar' );
	if ( $single_layout_type == 'right_sidebar') {
		get_template_part( 'blog-templates/single/right-sidebar-single' );
	}
	elseif ( $single_layout_type == 'left_sidebar' ) {
		get_template_part( 'blog-templates/single/left-sidebar-single' );
	}
	elseif ( $single_layout_type == 'no_sidebar' ) {
	 get_template_part( 'blog-templates/single/no-sidebar-single' );
	}
?>

<?php get_footer(); ?>
<?php
	if( !is_bot() && !is_user_logged_in() && is_active_widget( '', '', 'popular_posts_widget' ) ) { 
		set_emanon_post_views( get_the_ID() );
	}
?>
<?php
/**
* Content
* @package WordPress
* @subpackage Emanon_Pro
* @since Emanon Pro 1.0
*/
	$post_thumbnail_layout = get_theme_mod( 'post_thumbnail_layout', 'wide' );
	$none_display_thumbnail = post_custom( 'emanon_none_display_thumbnail' );
	$display_mobile_footer_single = get_theme_mod( 'display_mobile_footer_single', '' );
	$display_fb_like_btn = get_theme_mod( 'display_fb_like_btn', '' );
	$display_content_twitter_follow = get_theme_mod( 'display_content_twitter_follow', '' );
	$display_content_sns_follow = get_theme_mod( 'display_content_sns_follow', '' );
	$display_author_profile = get_theme_mod( 'display_author_profile', '' );
	$display_sns_on_post = get_theme_mod( 'display_sns_on_post', true );
?>
<!--article-->
<article <?php post_class( 'article' ); ?>>
	<?php while ( have_posts() ): the_post(); ?>
	<header>
		<div class="article-header">
			<h1 class="entry-title"><?php the_title(); ?><?php emanon_subtitle(); ?><?php edit_post_link( __( 'Edit', 'emanon' ), '<span class="edit-link"><i class="fa fa-pencil-square-o"></i>', '</span>' ); ?></h1>
			<?php emanon_entry_meta(); ?>
		</div>
		<?php if( $none_display_thumbnail ): ?>
		<?php elseif( has_post_thumbnail() && $post_thumbnail_layout != 'no_display' ): ?>
		<div class="article-thumbnail">
			<?php the_post_thumbnail( 'large-thumbnail' ); ?>
			<?php emanon_post_thumbnail_caption(); ?>
		</div>
		<?php endif; ?>
	</header>
	<?php if( $display_sns_on_post ) :?>
	<?php emanon_top_sns_share(); ?>
	<?php endif; ?>
	<?php if( is_mobile() ) :?>
	<?php dynamic_sidebar( 'page-top-sp' ); ?>
	<?php else:?>
	<?php dynamic_sidebar( 'page-top-pc' ); ?>
	<?php endif; ?>

	<section class="article-body">
		<?php the_content(); ?>
		<?php wp_link_pages('before=<div class="next-page">&after=</div>&next_or_number=number&pagelink=<span class="page-numbers">%</span>'); ?>
	</section>

	<?php if( is_mobile() ) :?>
	<?php dynamic_sidebar( 'page-bottom-sp' ); ?>
	<?php else:?>
	<?php dynamic_sidebar( 'page-bottom-pc' ); ?>
	<?php endif; ?>

	<?php if( $display_sns_on_post ) :?>
	<?php emanon_bottom_sns_share(); ?>
	<?php endif; ?>
	<?php emanon_under_ad300(); ?>
	<?php emanon_cta_single(); ?>

	<?php if ( comments_open() || get_comments_number() || $display_fb_like_btn || $display_content_twitter_follow || $display_content_sns_follow || $display_author_profile ): ?>
	<footer class="article-footer">
		<?php emanon_content_fb_like_follow(); ?>
		<?php emanon_content_twitter_follow(); ?>
		<?php emanon_content_sns_follow(); ?>
		<?php emanon_author_profile(); ?>
		<?php comments_template(); ?>
	</footer>
	<?php endif; ?>
	<?php if ( $display_mobile_footer_single && is_mobile() ): ?>
		<?php emanon_mobile_footer_buttons_single(); ?>
		<?php emanon_mobile_footer_buttons_modal_window(); ?>
	<?php endif; ?>
	<?php endwhile; ?>
</article>
<!--end article-->
<?php emanon_display_pre_nex(); ?>
<?php emanon_related_post(); ?>
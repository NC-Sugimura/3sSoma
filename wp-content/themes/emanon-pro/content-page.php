<?php
/**
* Content page
* @package WordPress
* @subpackage Emanon_Pro
* @since Emanon Pro 1.0
*/
	$page_thumbnail_layout = get_theme_mod( 'page_thumbnail_layout', 'wide' );
	$none_display_thumbnail = post_custom( 'emanon_none_display_thumbnail' );
	$display_mobile_footer_page = get_theme_mod( 'display_mobile_footer_page', '' );
	$display_sns_on_page = get_theme_mod( 'display_sns_on_page', '' );
?>
<!--article-->
<article class="article content-page">
	<?php while ( have_posts() ) : the_post(); ?>
	<header>
		<div class="article-header">
			<h1><?php the_title(); ?><?php emanon_subtitle(); ?><?php edit_post_link( __( 'Edit', 'emanon' ), '<span class="edit-link"><i class="fa fa-pencil-square-o"></i>', '</span>' ); ?></h1>
		</div>
		<?php if( $none_display_thumbnail ): ?>
		<?php elseif( has_post_thumbnail() && $page_thumbnail_layout != 'no_display' ): ?>
		<div class="article-thumbnail">
			<?php the_post_thumbnail( 'large-thumbnail' ); ?>
		</div>
		<?php endif; ?>
	</header>
	<?php if( $display_sns_on_page ) :?>
	<?php emanon_top_sns_share(); ?>
	<?php endif; ?>
	<section class="article-body">
	<?php the_content(); ?>
	</section>
	<?php if( $display_sns_on_page ) :?>
	<?php emanon_bottom_sns_share(); ?>
	<?php endif; ?>
	<?php emanon_under_ad300(); ?>
	<?php emanon_cta_page(); ?>
	<?php if ( comments_open() || get_comments_number() ): ?>
	<footer class="article-footer">
		<?php comments_template(); ?>
	</footer>
	<?php endif; ?>
	<?php if ( $display_mobile_footer_page && is_mobile() ): ?>
		<?php emanon_mobile_footer_buttons_page(); ?>
		<?php emanon_mobile_footer_buttons_modal_window(); ?>
	<?php endif; ?>
	<?php endwhile; ?>
</article>
<!--end article-->

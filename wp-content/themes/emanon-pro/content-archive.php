<?php
/**
* Content archive
* @package WordPress
* @subpackage Emanon_Pro
* @since Emanon Pro 1.0
*/
	$display_adinfeed_archive = get_theme_mod( 'display_adinfeed_archive', '' );
	$ads_infeed = explode( ',', get_theme_mod( 'display_adinfeed_place' ) );
	$ads_infeed_num = 0;
	$ads_infeed_count = 1;
	$archive_entry_layout = get_theme_mod( 'archive_entry_layout', 'one_column' );
	$archive_sidebar_layout = get_theme_mod( 'archive_sidebar_layout', 'right_sidebar' );
?>
<div <?php post_class( "clearfix" ); ?>>
	<!--loop of article-->
	<?php while ( have_posts() ) : the_post(); ?>

	<?php if( $display_adinfeed_archive && isset( $ads_infeed[$ads_infeed_num] ) && $ads_infeed[$ads_infeed_num] == $ads_infeed_count ): ?>
	<!--ad infeed-->
	<?php if ( $archive_entry_layout == 'two_column' || !wp_is_mobile() && $archive_entry_layout == 'three_column' && $archive_sidebar_layout == 'no_sidebar' || is_mobile() && $archive_entry_layout == 'three_column' || $archive_entry_layout == 'big_column' ): ?>
	<article class="archive-list">
	<?php dynamic_sidebar( 'ad-infeed-sp' ); ?>
	</article>
	<?php elseif ( $archive_entry_layout == 'one_column' ): ?>
	<article class="archive-list">
	<?php dynamic_sidebar( 'ad-infeed-pc' ); ?>
	</article>
	<?php endif; ?>
	<!--end ad infeed-->
	<?php $ads_infeed_num++; $ads_infeed_count++; ?>
	<?php endif; ?>

	<article class="archive-list">
		<?php emanon_content_entry_thumbnail(); ?>
		<header class="archive-header">
			<?php emanon_entry_meta_list(); ?>
			<h2 class="archive-header-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
			<?php if ( emanon_excerpt() ): ?>
			<?php the_excerpt(); ?>
			<?php endif; ?>
			<?php emanon_read_more(); ?>
		</header>
	</article>
	<?php $ads_infeed_count++;?>
	<?php endwhile; ?>
	<!--end loop of article-->
</div>
<?php the_posts_pagination( array( 'prev_text' => __( 'Previous', 'emanon' ), 'next_text' => __( 'Next', 'emanon' ), ) ); ?>
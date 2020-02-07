<?php
/**
* Content home
* @package WordPress
* @subpackage Emanon_Pro
* @since Emanon Pro 1.7.1
*/
	global $wp_query;
	if ( get_query_var('paged') ) { $paged = get_query_var('paged'); }
	elseif ( get_query_var('page') ) { $paged = get_query_var('page'); }
	else { $paged = $wp_query->max_num_pages; }
	$password_post = get_theme_mod( 'display_password_post' ) ? null : false;
	$args = array(
		'post_type' => 'post',
		'order' => 'DESC',
		'orderby' => 'post_date',
		'has_password' => $password_post,
		'paged' => $paged,
	);
	$front_page_query = new WP_Query( $args );
	$display_adinfeed_front_page = get_theme_mod( 'display_adinfeed_front_page', '' );
	$ads_infeed = explode( ',', get_theme_mod( 'display_adinfeed_place' ) );
	$ads_infeed_num = 0;
	$ads_infeed_count = 1;
	$content_entry_layout = get_theme_mod( 'content_entry_layout', 'one_column' );
	$front_sidebar_layout = get_theme_mod( 'front_sidebar_layout', 'right_sidebar' );
?>

<div <?php post_class( "clearfix" ); ?>>
	<!--loop of article-->
	<?php if( $front_page_query->have_posts() ) : ?>
	<?php while ( $front_page_query->have_posts() ) : $front_page_query->the_post(); ?>

	<?php if( $display_adinfeed_front_page && isset( $ads_infeed[$ads_infeed_num] ) && $ads_infeed[$ads_infeed_num] == $ads_infeed_count ): ?>
	<!--ad infeed-->
	<?php if ( $content_entry_layout == 'two_column' || !wp_is_mobile() && $content_entry_layout == 'three_column' && $front_sidebar_layout == 'no_sidebar' || is_mobile() && $content_entry_layout == 'three_column' || $content_entry_layout == 'big_column' ): ?>
	<article class="archive-list">
	<?php dynamic_sidebar( 'ad-infeed-sp' ); ?>
	</article>
	<?php elseif ( $content_entry_layout == 'one_column' ): ?>
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
			<h3 class="archive-header-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
			<?php if ( emanon_excerpt() ): ?>
			<?php the_excerpt(); ?>
			<?php endif; ?>
			<?php emanon_read_more(); ?>
		</header>
	</article>
	<?php $ads_infeed_count++;?>
	<?php endwhile; ?>
	<?php endif; ?>
	<!--end loop of article-->
</div>
<?php if ( $front_page_query->max_num_pages > 1 ) {
	echo '<nav class="navigation pagination" role="navigation"><div class="nav-links">' . "\n";
	echo paginate_links( array (
		'base' => get_pagenum_link(1) . '%_%',
		'format' => 'page/%#%/',
		'current' => max( 1, $paged ),
		'mid_size' => 1,
		'prev_text' => __( 'Previous', 'emanon' ),
		'next_text' => __( 'Next', 'emanon' ),
		'total' => $front_page_query->max_num_pages,
	));
	echo '</div></nav>' . "\n";
	}
	wp_reset_postdata();
?>

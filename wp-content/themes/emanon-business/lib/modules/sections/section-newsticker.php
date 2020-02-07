<?php
/**
* Newsticker section
* @package WordPress
* @subpackage Emanon_Business
* @since Emanon Business 1.0
*/
	$newsticker_title = get_theme_mod( 'newsticker_title',	__( 'News', 'emanon' ) );
	$newsticker_max = get_theme_mod( 'newsticker_max', 5 );
	$newsticker_category_id = get_theme_mod( 'newsticker_category_id', '' );
	$args = array(
		'order' => 'DESC',
		'orderby' => 'post_date',
		'posts_per_page' => intval( $newsticker_max ), //表示件数
		'cat' => $newsticker_category_id, //指定カテゴリid
		'ignore_sticky_posts' => 1//先頭固定記事の除外
	);
	$newsticker_query = new WP_Query( $args );
	$category_link = get_category_link( $newsticker_category_id );
?>
<?php if( is_front_page() ) :?>
<div class="eb-ticker-section">
	<div class="container">
		<div class="col12">
		<?php if ( $newsticker_title ): ?>
		<div class="ticker-label"><a href="<?php echo esc_url( $category_link ); ?>"><?php echo esc_html( $newsticker_title ); ?></a></div>
		<?php endif; ?>
		<ul class="ticker-title">
			<?php while ( $newsticker_query->have_posts() ) : $newsticker_query->the_post(); ?>
			<li><span class="ticker-date"><?php echo esc_html( get_the_date() ); ?><i class="fa fa-angle-right"></i></span><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>
			<?php endwhile; wp_reset_postdata(); ?>
		</ul>
		</div>
	</div>
</div>
<?php endif; ?>
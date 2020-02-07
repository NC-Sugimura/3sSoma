<?php
/**
* Top featured section
* @package WordPress
* @subpackage Emanon_Pro
* @since Emanon Pro 1.0
*/
	$featured_section_label = get_theme_mod( 'featured_section_label', __( 'PICK UP', 'emanon' ) );
	$featured_display_type = get_theme_mod( 'featured_display_type', 'new_arrivals' );
	$featured_article_type = get_theme_mod( 'featured_article_type', 'post' );
	$featured_exclude_sticky_page = get_theme_mod( 'featured_exclude_sticky_page', true );
	$sticky_posts = get_option( 'sticky_posts' );
	$sticky  = $featured_exclude_sticky_page  ? $sticky_posts : false;
	$featured_max = get_theme_mod( 'featured_max', 3 );
	if ( $featured_display_type == 'new_arrivals' ) { //新着順
		$args = array(
			'post_type' => $featured_article_type,
			'order' => 'DESC',
			'orderby' => 'post_date',
			'post__not_in' => $sticky,
			'posts_per_page' => $featured_max, //表示件数
		);
	} elseif ( $featured_display_type == 'featured' ) { //おすすめ記事
			$args = array(
			'post_type' => $featured_article_type,
			'order' => 'DESC',
			'orderby' => 'post_date',
			'post__not_in' => $sticky,
			'posts_per_page' => $featured_max, //表示件数
			'meta_key' => 'emanon_featured_entry', //指定カスタムフィールド名
			'meta_value' => 1, //カスタムフィールド値
		);
	}
	$featured_query = new WP_Query( $args );
?>
<?php if( is_front_page() && !is_paged() ) :?>
<!--featured-->
<div class="featured">
	<div class="container">
	<?php if( $featured_query->have_posts() ) : ?>
	<ul id="featured-slider" class="featured-list wow fadeInUp" data-wow-delay="0.4s">
	<?php while ( $featured_query->have_posts() ) : $featured_query->the_post(); ?>
		<li>
			<!--thumbnail-->
			<?php if ( has_post_thumbnail() ): ?>
			<div class="featured-thumbnail">
				<a class="image-link" href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'slider-thumbnail' ); ?></a>
				<?php if ( $featured_section_label ): ?><span class="cat-name"><?php echo esc_html( $featured_section_label ); ?></span><?php endif; ?>
			</div>
			<?php else: ?>
			<div class="featured-thumbnail">
				<a class="image-link" href="<?php the_permalink(); ?>"><img width="733" height="353" src="<?php echo get_template_directory_uri(); ?>/lib/images/no-img/slider-no-img.png" alt="no image" /></a>
				<?php if ( $featured_section_label ): ?><span class="cat-name"><?php echo esc_html( $featured_section_label ); ?></span><?php endif; ?>
			</div>
			<?php endif; ?>
			<!--end thumbnail-->
			<div class="featured-post">
				<?php emanon_entry_meta_list(); ?>
				<div class="featured-title">
					<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
				</div>
				<div class="featured-date">
					<?php if ( emanon_excerpt() ): ?>
					<?php the_excerpt(); ?>
					<?php endif; ?>
				</div>
			</div>
		</li>
	<?php endwhile; wp_reset_postdata(); ?>
	</ul>
	<?php endif; ?>
	</div>
	<div class="loading-wrapper"></div>
	<div class="featured-overlay"></div>
</div>
<!--end featured-->
<?php endif; ?>
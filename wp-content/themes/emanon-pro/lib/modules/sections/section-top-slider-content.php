<?php
/**
* Top slider content section
* @package WordPress
* @subpackage Emanon_Pro
* @since Emanon Pro 1.3.4
*/
	$slider_content_display_type = get_theme_mod( 'slider_content_display_type', 'new_arrivals' );
	$slider_content_max = get_theme_mod( 'slider_content_max', 3 );
	$slider_content_category_id = get_theme_mod( 'slider_content_category_id', '' );
	$slider_content_speed = get_theme_mod( 'slider_content_speed', 4000 );
	$slider_content_animation = get_theme_mod( 'slider_content_animation', 'fade' );
	$slider_content_controls = get_theme_mod( 'slider_content_controls', '' );
	$slider_content_pager = get_theme_mod( 'slider_content_pager', '' );
	$slider_content_auto = get_theme_mod( 'slider_content_auto', 'true' );
	$slider_content_no_image_url = get_theme_file_uri() . '/lib/images/emanon-header-img.jpg';
	$slider_content_read_more = get_theme_mod( 'slider_content_read_more', __( 'Read More', 'emanon' ) );
	if ( $slider_content_display_type == 'new_arrivals' ) { //新着順
		$args = array(
			'post_type' => 'post',
			'order' => 'DESC',
			'orderby' => 'post_date',
			'posts_per_page' => $slider_content_max, //表示件数
		);
	} elseif ( $slider_content_display_type == 'featured' ) { //おすすめ記事
		$args = array(
			'post_type' => 'post',
			'order' => 'DESC',
			'orderby' => 'post_date',
			'posts_per_page' => $slider_content_max, //表示件数
			'meta_key' => 'emanon_featured_entry', //指定カスタムフィールド名
			'meta_value' => 1, //カスタムフィールド値
		);
	} elseif ( $slider_content_display_type == 'category' ) { //カテゴリ指定
		$args = array(
			'post_type' => 'post',
			'order' => 'DESC',
			'orderby' => 'post_date',
			'posts_per_page' => $slider_content_max, //表示件数
			'cat' => $slider_content_category_id, //指定カテゴリid
		);
	}
	$slider_content_query = new WP_Query( $args );
?>
<?php if( is_front_page() && !is_paged() ) :?>
<!--slider content-->
<div class="slider-content">
	<?php if( have_posts() ) : ?>
		<ul id="bxslider" data-auto="<?php echo esc_attr( $slider_content_auto ); ?>" data-animation="<?php echo esc_attr( $slider_content_animation ) ; ?>" data-speed="<?php echo esc_attr( $slider_content_speed ); ?>" data-pager="<?php echo esc_attr( $slider_content_pager ); ?>" data-controls="<?php echo esc_attr( $slider_content_controls) ; ?>">
			<?php while ( $slider_content_query->have_posts() ) : $slider_content_query->the_post(); ?>
			<?php if ( has_post_thumbnail() ): ?>
			<?php $slider_content_image_id = get_post_thumbnail_id (); ?>
			<?php $slider_content_image_url = wp_get_attachment_image_src ( $slider_content_image_id, true ); ?>
			<li style="background-image:url(<?php echo esc_url( $slider_content_image_url[0] ); ?>);">
			<?php else: ?>
			<li style="background-image:url(<?php echo esc_url( $slider_content_no_image_url ); ?>);">
			 <?php endif; ?>
				<div class="slider-post">
				<h2 class="slider-post-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
				<?php emanon_slider_content_category(); ?>
				<?php emanon_slider_content_meta(); ?>
				<?php if ( $slider_content_read_more ): ?>
				<div class="slider-content-btn">
					<span class="btn btn-sm slider-content-btn-bg"><a href="<?php the_permalink() ?>"><?php echo esc_html( $slider_content_read_more ); ?></a></span>
				</div>
				<?php endif; ?>
				</div>
				<div class="slider-overlay"></div>
			</li>
			<?php endwhile; wp_reset_postdata(); ?>
		</ul>
	<?php endif; ?>
	<div class="loading-wrapper"></div>
</div>
<!--end slider content-->
<?php endif; ?>
<?php
/**
* Info section
* @package WordPress
* @subpackage Emanon_Business
* @since Emanon Business 1.5.0
*/
	$info_display_type = get_theme_mod( 'info_display_type', 'new_arrivals' );
	$info_section_title = get_theme_mod( 'info_section_title', '' );
	$info_section_description = get_theme_mod( 'info_section_description', '' );
	$info_category_id = get_theme_mod( 'info_category_id', '' );
	$info_max = get_theme_mod( 'info_max', 3 );
	if ( $info_display_type == 'new_arrivals' ) { //新着順
		$args = array(
			'post_type' => 'post',
			'order' => 'DESC',
			'orderby' => 'post_date',
			'posts_per_page' => $info_max, //表示件数
			'ignore_sticky_posts' => 1 //先頭固定記事の除外
		);
	} elseif ( $info_display_type == 'featured' ) { //おすすめ記事
		$args = array(
			'post_type' => 'post',
			'order' => 'DESC',
			'orderby' => 'post_date',
			'posts_per_page' => $info_max, //表示件数
			'meta_key' => 'emanon_featured_entry', //指定カスタムフィールド名
			'meta_value' => 1, //カスタムフィールド値
			'ignore_sticky_posts' => 1 //先頭固定記事の除外
		);
	} elseif ( $info_display_type == 'category' ) { //カテゴリ指定
		$args = array(
			'post_type' => 'post',
			'order' => 'DESC',
			'orderby' => 'post_date',
			'posts_per_page' => $info_max, //表示件数
			'cat' => $info_category_id, //指定カテゴリid
			'ignore_sticky_posts' => 1 //先頭固定記事の除外
		);
	}
	$info_query = new WP_Query( $args );
	$info_btn_url = get_theme_mod( 'info_btn_url', '' );
	$info_btn_text = get_theme_mod( 'info_btn_text', '' );
?>
<?php if( is_front_page() && !is_paged() ) :?>
<!--info content-->
<div id="info-section clearfix" class="eb-info-section">
	<div class="info-container inner">
		<?php if ( $info_section_title ): ?>
		<div class="info-header wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
		<p class="h2"><?php echo esc_html( $info_section_title ); ?></p>
		<?php if ( $info_section_description ): ?>
		<p><?php echo nl2br( esc_html( $info_section_description ) ); ?></p>
		<?php endif; ?>
		</div>
		<?php endif; ?>
		<?php if( have_posts() ) : ?>
			<ol class="wow fadeIn" data-wow-delay="0.8s">
				<?php while ( $info_query->have_posts() ) : $info_query->the_post(); ?>
					<li>
					<?php emanon_info_meta(); ?><h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
				</li>
				<?php endwhile; wp_reset_postdata(); ?>
			</ol>
		<?php endif; ?>
	</div>
	<?php if ( $info_btn_url ): ?>
	<div class="wow fadeIn" data-wow-duration="1.0s" data-wow-delay="1.0s">
	<span class="btn info-section-btn"><a href="<?php echo esc_url( $info_btn_url ); ?>"><?php echo esc_html( $info_btn_text ); ?></a></span>
	</div>
	<?php endif; ?>
</div>
<!--end info content-->
<?php endif; ?>
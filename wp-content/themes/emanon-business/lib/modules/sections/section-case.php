<?php
/**
* Case section
* @package WordPress
* @subpackage Emanon_Business
* @since Emanon Business 1.2.5
*/
	$case_section_title = get_theme_mod( 'case_section_title', '' );
	$case_section_description = get_theme_mod( 'case_section_description', '' );
	$case_section_label = get_theme_mod( 'case_section_label', __( 'CASE', 'emanon' ) );
	$case_article_type = get_theme_mod( 'case_article_type', 'post' );
	$case_display_type = get_theme_mod( 'case_display_type', 'category' );
	$case_category_id = get_theme_mod( 'case_category_id', '' );
	$case_max = get_theme_mod( 'case_max', 3 );
	if ( $case_display_type == 'category' ) { //カテゴリ指定
		$args = array(
			'post_type' => 'works',//***元$case_article_type,
			'order' => 'DESC',
			'orderby' => 'post_date',
			'posts_per_page' => 10, //表示件数//***元$case_max
			'cat' => $case_category_id //指定カテゴリid
		);
	} elseif ( $case_display_type == 'featured' ) { //おすすめ記事
		$args = array(
			'post_type' => $case_article_type,
			'order' => 'DESC',
			'orderby' => 'post_date',
			'posts_per_page' => $case_max, //表示件数
			'meta_key' => 'emanon_featured_entry', //指定カスタムフィールド名
			'meta_value' => 1, //カスタムフィールド値
			'ignore_sticky_posts' => 1 //先頭固定記事の除外
		);
	} elseif ( $case_display_type == 'new_arrivals' ) { //新着順
		$args = array(
			'order' => 'DESC',
			'orderby' => 'post_date',
			'post_type' => $case_article_type,
			'posts_per_page' => $case_max //表示件数
		);
	}
	$case_query = new WP_Query( $args );
	$case_btn_text = get_theme_mod( 'case_btn_text', '' );
	$case_btn_url = get_theme_mod( 'case_btn_url', '' );
?>
<?php if( is_front_page() && !is_paged() ) :?>
<!--case section-->
<div id="case-section" class="eb-case-section">
	<div class="container swiper-container">
		<div class="case-header wow fadeInUp" data-wow-duration="0.4s" data-wow-delay="0.4s">
			<?php if ( $case_section_title ): ?>
			<h2><?php echo esc_html( $case_section_title ); ?></h2>
			<?php endif; ?>
			<?php if ( $case_section_description ): ?>
			<p><?php echo nl2br( $case_section_description ); ?></p>
			<?php endif; ?>
		</div>
	<?php if( $case_query->have_posts() ) : ?>
	<ul class="swiper-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
	<?php while ( $case_query->have_posts() ) : $case_query->the_post(); ?>
		<li class="swiper-slide">
			<!--thumbnail-->
			<?php if ( has_post_thumbnail() ): ?>
			<div class="case-thumbnail">
				<a class="image-link" href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'slider-thumbnail' ); ?></a>
			</div>
			<?php else: ?>
			<div class="case-thumbnail">
				<a class="image-link" href="<?php the_permalink(); ?>"><img width="733" height="353" src="<?php echo get_template_directory_uri(); ?>/lib/images/no-img/slider-no-img.png" alt="no image" /></a>
				<?php if ( $case_section_label ): ?><span class="cat-name"><?php echo esc_html( $case_section_label ); ?></span><?php endif; ?>
			</div>
			<?php endif; ?>
			<!--end thumbnail-->
			<div class="case-post">
				<div class="case-title">
					<p><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></p>
				</div>
			</div>
		</li>
	<?php endwhile; wp_reset_postdata(); ?>
	</ul>
	<?php endif; ?>
	</div>
		<div class="wow fadeIn" data-wow-delay="0.8s">
			<!-- If we need pagination -->
			<div class="swiper-pagination"></div>
			<!-- If we need navigation buttons -->
			<div class="swiper-button-prev"></div>
			<div class="swiper-button-next"></div>
		</div>
			<?php if ( $case_btn_url ): ?>
			<div class="case-section-cta wow fadeIn" data-wow-duration="1.0s" data-wow-delay="1.0s">
			<span class="btn case-section-btn"><a href="<?php echo esc_url( $case_btn_url ); ?>"><?php echo esc_html( $case_btn_text ); ?></a></span>
			</div>
			<?php endif; ?>
</div>
<!--end case section-->
<?php endif; ?>
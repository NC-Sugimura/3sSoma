<?php
/**
* Content home tab
* @package WordPress
* @subpackage Emanon_Pro
* @since Emanon Pro 1.8.5
*/
	$display_adinfeed_front_page = get_theme_mod( 'display_adinfeed_front_page', '' );
	$ads_infeed = explode( ',', get_theme_mod( 'display_adinfeed_place' ) );
	$ads_infeed_num = 0;
	$ads_infeed_count = 1;
	$content_entry_layout = get_theme_mod( 'content_entry_layout', 'one_column' );
	$front_sidebar_layout = get_theme_mod( 'front_sidebar_layout', 'right_sidebar' );
	$paged = get_query_var('paged') ? get_query_var('paged') : 1;
	$password_post = get_theme_mod( 'display_password_post' ) ? null : false;
	$tab_1 = get_theme_mod( 'tab_1', 'tab_new_arrivals' );
	$tab_category_id_1 = get_theme_mod( 'tab_category_id_1', '' );
	if( $tab_1 == 'tab_new_arrivals' ) {
		$args_tab1 = array(
			'post_type' => 'post',
			'order' => 'DESC',
			'orderby' => 'post_date',
			'has_password' => $password_post,
			'paged' => $paged,
		);
	} elseif( $tab_1 == 'tab_featured_1' ) {
		$args_tab1 = array(
			'post_type' => 'post',
			'order' => 'DESC',
			'orderby' => 'post_date',
			'meta_key' => 'emanon_featured_entry',
			'meta_value' => 1,
			'has_password' => $password_post,
			'paged' => $paged,
		);
	} elseif( $tab_1 == 'tab_category_1' ) {
			$args_tab1 = array(
			'post_type' => 'post',
			'order' => 'DESC',
			'orderby' => 'post_date',
			'has_password' => $password_post,
			'cat' => $tab_category_id_1,
			'paged' => $paged,
		);
	}
	$tab_btn_url_1 = get_theme_mod( 'tab_btn_url_1', '' );
	$tab_btn_text_1 = get_theme_mod( 'tab_btn_text_1', '' );
?>
<div id="panel1" <?php post_class( "tab-panel nav-tab-active clearfix" ); ?>>
	<div class="clearfix">
	<?php $query_tab1 = new WP_Query( $args_tab1 ); ?>
	<?php while ( $query_tab1->have_posts() ) : $query_tab1->the_post(); ?>

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
	<?php endwhile; wp_reset_postdata(); ?>
	</div>

	<?php if ( $query_tab1 ->max_num_pages > 1 && !$tab_btn_url_1 ) {
		echo '<nav class="navigation pagination" role="navigation"><div class="nav-links">' . "\n";
		echo paginate_links( array (
			'base' => get_pagenum_link(1) . '%_%',
			'format' => '?paged=%#%',
			'current' => max(1, get_query_var( 'paged' )),
			'mid_size' => 1,
			'prev_text' => __( 'Previous', 'emanon' ),
			'next_text' => __( 'Next', 'emanon' ),
			'total' => $query_tab1 ->max_num_pages,
		));
		echo '</div></nav>' . "\n";
		}
		wp_reset_postdata();
	?>

	<!--read more btn-->
	<?php if ( $tab_btn_url_1 ): ?>
	<div class="tab-btn clearfix">
	<?php if ( is_mobile() ): ?>
	<span class="btn btn-sm tab-btn-bg"><a href="<?php echo esc_url( $tab_btn_url_1 ); ?>"><?php echo esc_html( $tab_btn_text_1 ); ?></a></span>
	<?php else: ?>
	<span class="btn btn-mid tab-btn-bg"><a href="<?php echo esc_url( $tab_btn_url_1 ); ?>"><?php echo esc_html( $tab_btn_text_1 ); ?></a></span>
	<?php endif; ?>
	</div>
	<?php endif; ?>
	<!--end read more btn-->
</div>

<?php for($c=2; $c<5; $c++) {
	$tab_featured = get_theme_mod( 'tab_featured_'.$c,'' );
	$tab_category_id = get_theme_mod( 'tab_category_id_'.$c,'' );
	$tab_btn_url = get_theme_mod( 'tab_btn_url_'.$c,'' );
	$tab_btn_text = get_theme_mod( 'tab_btn_text_'.$c,'' );
	if( $tab_featured ) {//おすすめ記事一覧を取得
		$args = array(
			'post_type' => 'post',
			'order' => 'DESC',
			'orderby' => 'post_date',
			'meta_key' => 'emanon_featured_entry', //指定カスタムフィールド名
			'meta_value' => 1,
			'has_password' => $password_post,
		);
	} else {//カテゴリーIDで一覧を取得
		$args =  array (
			'post_type' => 'post',
			'order' => 'DESC',
			'orderby' => 'post_date',
			'has_password' => $password_post,
			'cat' => $tab_category_id,
		);
	}
?>

<?php $tabe_query = new WP_Query( $args ); ?>
<div id="panel<?php echo( $c ); ?>" <?php post_class( "tab-panel clearfix" ); ?>>
	<div class="clearfix">
	<?php while ( $tabe_query->have_posts() ) : $tabe_query->the_post(); ?>
	<!--loop of article-->
	<article class="archive-list">
		<?php emanon_content_entry_thumbnail(); ?>
		<header class="archive-header">
			<?php emanon_entry_meta_list(); ?>
			<h3 class="archive-header-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			<?php if ( emanon_excerpt() ): ?>
			<?php the_excerpt(); ?>
			<?php endif; ?>
			<?php emanon_read_more(); ?>
		</header>
	</article>
	<?php endwhile; wp_reset_postdata(); ?>
	</div>
	<!--end loop of article-->
	<!--read more btn-->
	<?php if ( $tab_btn_url ): ?>
	<div class="tab-btn clearfix">
	<?php if ( is_mobile() ): ?>
	<span class="btn btn-sm tab-btn-bg"><a href="<?php echo esc_url( $tab_btn_url ); ?>"><?php echo esc_html( $tab_btn_text ); ?></a></span>
	<?php else: ?>
	<span class="btn btn-mid tab-btn-bg"><a href="<?php echo esc_url( $tab_btn_url ); ?>"><?php echo esc_html( $tab_btn_text ); ?></a></span>
	<?php endif; ?>
	</div>
	<?php endif; ?>
	<!--end read more btn-->
</div>
<?php } ?>
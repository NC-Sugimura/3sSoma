<?php
/**
* Category section
* @package WordPress
* @subpackage Emanon_Business
* @since Emanon Business 1.0
*/
	$category_section_title = get_theme_mod( 'category_section_title', '' );
	$category_section_description = get_theme_mod( 'category_section_description', '' );
	$category_list_max = get_theme_mod( 'category_list_max', 3 );
	$category_section_layout = get_theme_mod( 'category_section_layout', 4 );
?>
<?php if( is_front_page() && !is_paged() ) :?>
<!--category section-->
<div id="category-section" class="eb-category-section">
	<div class="container inner">

		<div class="category-header wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
			<?php if ( $category_section_title ): ?>
			<h2><?php echo esc_html( $category_section_title ); ?></h2>
			<?php endif; ?>
			<?php if ( $category_section_description ): ?>
			<p><?php echo nl2br( $category_section_description ); ?></p>
			<?php endif; ?>
		</div>

		<?php for($li=1; $li<$category_section_layout; $li++) { ?>

		<?php $category_image = get_theme_mod( 'category_image_'.$li, '' ); ?>
		<?php $category_title = get_theme_mod( 'category_title_'.$li, '' ); ?>
		<?php $category_description = get_theme_mod( 'category_description_'.$li, '' ); ?>
		<?php $category_btn_url = get_theme_mod( 'category_btn_url_'.$li, '' ); ?>
		<?php $category_btn_text = get_theme_mod( 'category_btn_text_'.$li, __( 'Read More Post List', 'emanon' )	 ); ?>
		<?php $delay = (pow($li, 2)); ?>
		<?php $category_id = get_theme_mod( 'category_id_'.$li, '' ); ?>
		<?php $category_link = get_category_link( $category_id ); ?>
		<?php $args = array(
				'posts_per_page' => $category_list_max, //表示件数
				'cat' => $category_id, //指定カテゴリid
			);
		$category_query = new WP_Query( $args ); ?>

		<div class="category-box box-list wow fadeIn" data-wow-duration="1s" data-wow-delay="0.<?php echo $delay; ?>s">
			<div class="category-box-list">
			<?php if( $category_query->have_posts() ) : ?>
			<?php if ( $category_image ): ?>
			<div class="category-img">
				<a href="<?php echo esc_url( $category_link ); ?>"><img src="<?php echo esc_url( $category_image ); ?>" alt="<?php echo esc_html( $category_title ); ?>"></a>
			</div>
			<?php endif; ?>
			<div class="category-box-header">
				<?php if ( $category_title ): ?>
				<h3><?php echo esc_html( $category_title ); ?></h3>
				<?php endif; ?>
				<?php if ( $category_description ): ?>
				<p><?php echo nl2br( $category_description ); ?></p>
				<?php endif; ?>
			</div>
			<ul class="category-list wow fadeInUp" data-wow-delay="0.4s">
			<?php while ( $category_query->have_posts() ) : $category_query->the_post(); ?>
				<li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
			<?php endwhile; wp_reset_postdata(); ?>
			</ul>
			<?php endif; ?>
		</div>

		<?php if ( $category_btn_text ): ?>
		<div class="category-box-footer">
		<span class="btn btn-mid category-btn"><a href="<?php echo esc_url( $category_link ); ?>"><?php echo esc_html( $category_btn_text ); ?></a></span>
		</div>
		<?php endif; ?>

		</div>

		<?php } ?>

	</div>

</div>
<!--end category section-->
<?php endif; ?>
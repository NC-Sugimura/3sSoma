<?php
/**
* Related post
* @package WordPress
* @subpackage Emanon_Pro
* @since Emanon Pro 1.0
*/
	$related_post_pc_style = get_theme_mod( 'related_post_pc_style', 'display_two_row' );
	$related_post_sp_style = get_theme_mod( 'related_post_sp_style', 'display_related_list' );
	$emanon_related_post_title = get_theme_mod( 'emanon_related_post_title', __( 'Related Post', 'emanon' ) );
	$related_post_max = get_theme_mod( 'related_post_max', 4 );
	$display_related_post_date = get_theme_mod( 'display_related_post_date', true );
	$categories = get_the_category( $post->ID );
	$category_ID = array();
	foreach( $categories as $category ):
	array_push( $category_ID, $category -> cat_ID );
	endforeach ;
	$args = array(
	'post__not_in' => array( $post -> ID ),
	'posts_per_page'=> intval( $related_post_max ),
	'category__in' => $category_ID,
	'orderby' => 'rand',
	);
	$query = new WP_Query( $args );
?>

<?php if( is_mobile() ) :?>

<?php if ( $related_post_sp_style == 'display_related_list' ): ?>
<!--related post two row-->
<aside>
	<div class="related wow fadeIn" data-wow-delay="0.2s">
		<?php if ( $emanon_related_post_title ): ?>
		<h3><?php echo esc_html( $emanon_related_post_title ); ?></h3>
		<?php endif; ?>
		<?php if( $query -> have_posts() ): ?>
		<ul class="related-list-two">
			<?php while ( $query -> have_posts()) : $query -> the_post(); ?>
			<li class="related-col6">
				<?php if ( has_post_thumbnail() ): ?>
				<div class="related-thumbnail-square">
					<a class="image-link" href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'square-thumbnail' ); ?></a>
				</div>
				<?php else: ?>
				<div class="related-thumbnail-square">
					<a class="image-link" href="<?php the_permalink(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/lib/images/no-img/square-no-img.png" alt="no image" width="80" height="80" /></a>
				</div>
				<?php endif; ?>
				<div class="related-date">
					<?php if( $display_related_post_date ): ?><span class="post-meta small"><?php echo esc_html( get_the_date() ); ?></span><?php endif; ?>
					<h4><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php if( mb_strlen( $post -> post_title ) > 27 ) { $title= mb_substr( $post -> post_title, 0, 27 ) ; echo $title. '...' ;} else { echo $post -> post_title; }?></a></h4>
				</div>
			</li>
			<?php endwhile;?>
		</ul>
		<?php else:?>
		<p><?php _e( 'Not Related Post', 'emanon' ); ?></p>
		<?php endif; wp_reset_postdata(); ?>
	</div>
</aside>
<!--end related post two row-->
<?php elseif ( $related_post_sp_style == 'display_related_card' ): ?>
<!--related post-->
<aside>
	<div class="related wow fadeIn" data-wow-delay="0.2s">
		<?php if ( $emanon_related_post_title ): ?>
		<h3><?php echo esc_html( $emanon_related_post_title ); ?></h3>
		<?php endif; ?>
		<?php if( $query -> have_posts() ): ?>
		<ul class="related-list-three">
			<?php while ( $query -> have_posts()) : $query -> the_post(); ?>
			<li class="related-col4">
				<?php if ( has_post_thumbnail() ): ?>
				<div class="related-thumbnail-small">
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'small-thumbnail' ); ?></a>
				</div>
				<?php else: ?>
				<div class="related-thumbnail-small">
					<a href="<?php the_permalink(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/lib/images/no-img/small-no-img.png" alt="no image" /></a>
				</div>
				<?php endif; ?>
				<div class="related-date">
					<?php if( $display_related_post_date ): ?><span class="post-meta small"><?php echo esc_html( get_the_date() ); ?></span><?php endif; ?>
					<h4><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php if( mb_strlen( $post -> post_title ) > 27 ) { $title = mb_substr( $post -> post_title, 0, 27 ) ; echo $title. '...' ;} else { echo $post -> post_title; }?></a></h4>
				</div>
			</li>
			<?php endwhile;?>
		</ul>
		<?php else:?>
		<p><?php _e( 'Not Related Post', 'emanon' ); ?></p>
		<?php endif; wp_reset_postdata(); ?>
	</div>
</aside>
<!--end related post-->
<?php endif; ?>

<?php else:?>

<?php if ( $related_post_pc_style == 'display_two_row' ): ?>
<!--related post two row-->
<aside>
	<div class="related wow fadeIn" data-wow-delay="0.2s">
		<?php if ( $emanon_related_post_title ): ?>
		<h3><?php echo esc_html( $emanon_related_post_title ); ?></h3>
		<?php endif; ?>
		<?php if( $query -> have_posts() ): ?>
		<ul class="related-list-two">
			<?php while ( $query -> have_posts()) : $query -> the_post(); ?>
			<li class="related-col6">
				<?php if ( has_post_thumbnail() ): ?>
				<div class="related-thumbnail-square">
					<a class="image-link" href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'square-thumbnail' ); ?></a>
				</div>
				<?php else: ?>
				<div class="related-thumbnail-square">
					<a class="image-link" href="<?php the_permalink(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/lib/images/no-img/square-no-img.png" alt="no image" width="80" height="80" /></a>
				</div>
				<?php endif; ?>
				<div class="related-date">
					<?php if( $display_related_post_date ): ?><span class="post-meta small"><?php echo esc_html( get_the_date() ); ?></span><?php endif; ?>
					<h4><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php if( mb_strlen( $post-> post_title ) > 27 ) { $title = mb_substr( $post -> post_title, 0, 27 ) ; echo $title. '...' ;} else { echo $post -> post_title; }?></a></h4>
				</div>
			</li>
			<?php endwhile;?>
		</ul>
		<?php else:?>
		<p><?php _e( 'Not Related Post', 'emanon' ); ?></p>
		<?php endif; wp_reset_postdata(); ?>
	</div>
</aside>
<!--end related post two row-->
<?php elseif ( $related_post_pc_style == 'display_three_row' ): ?>
<!--related post-->
<aside>
	<div class="related wow fadeIn" data-wow-delay="0.2s">
		<?php if ( $emanon_related_post_title ): ?>
		<h3><?php echo esc_html( $emanon_related_post_title ); ?></h3>
		<?php endif; ?>
		<?php if( $query -> have_posts() ): ?>
		<ul class="related-list-three">
			<?php while ( $query -> have_posts()) : $query -> the_post(); ?>
			<li class="related-col4">
				<?php if ( has_post_thumbnail() ): ?>
				<div class="related-thumbnail-small">
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'small-thumbnail' ); ?></a>
				</div>
				<?php else: ?>
				<div class="related-thumbnail-small">
					<a href="<?php the_permalink(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/lib/images/no-img/small-no-img.png" alt="no image" /></a>
				</div>
				<?php endif; ?>
				<div class="related-date">
					<?php if( $display_related_post_date ): ?><span class="post-meta small"><?php echo esc_html( get_the_date() ); ?></span><?php endif; ?>
					<h4><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php if( mb_strlen( $post -> post_title ) > 27 ) { $title = mb_substr( $post -> post_title, 0, 27 ) ; echo $title. '...' ;} else { echo $post -> post_title; }?></a></h4>
				</div>
			</li>
			<?php endwhile;?>
		</ul>
		<?php else:?>
		<p><?php _e( 'Not Related Post', 'emanon' ); ?></p>
		<?php endif; wp_reset_postdata(); ?>
	</div>
</aside>
<!--end related post-->
<?php endif; ?>

<?php endif; ?>
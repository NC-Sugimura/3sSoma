<?php
/**
* YARPP Template: Emanon Pro YARPP
* @package WordPress YARPP
* @subpackage Emanon_Pro
* @since Emanon Pro 1.3.4
*/
?>
<!--recommend post-->
<div class="recommend wow fadeIn" data-wow-delay="0.2s">
	<h3><?php _e( 'Recommend Posts', 'emanon' ); ?></h3>
	<?php if (have_posts()):?>
	<ul class="recommend-list">
		<?php while (have_posts()) : the_post(); ?>
		<li class="col6">
			<?php if ( has_post_thumbnail() ): ?>
			<div class="recommend-thumbnail">
				<a class="image-link" href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'square-thumbnail' ); ?></a>
			</div>
			<?php else: ?>
			<div class="recommend-thumbnail">
				<a class="image-link" href="<?php the_permalink(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/lib/images/no-img/square-no-img.png" alt="no image" width="80" height="80" /></a>
			</div>
			<?php endif; ?>
			<div class="recommend-date">
				<span class="post-meta small"><?php echo esc_html( get_the_date() ); ?></span>
				<h4><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php if(mb_strlen($post->post_title)>30) { $title= mb_substr($post->post_title,0,30) ; echo $title. '...' ;} else {echo $post->post_title;}?></a></h4>
			</div>
		</li>
		<?php endwhile; ?>
	</ul>
	<?php else: ?>
	<p><?php _e( 'No recommend posts', 'emanon' ); ?></p>
	<?php endif; ?>
</div>
<!--end recommend post-->

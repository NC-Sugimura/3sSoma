<?php
/**
* Content landing page for sales
* @package WordPress
* @subpackage Emanon_Pro
* @since Emanon Pro 1.0
*/
?>
<section id="lp-content-section" class="content wow fadeIn" data-wow-delay="0.8s">
	<div class="lp-container">
		<div class="col12">
		<!--article-->
		<div class="article">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php if( has_post_thumbnail() ): ?>
				<div class="article-thumbnail">
				<?php the_post_thumbnail( 'large-thumbnail', array( 'itemprop' => 'image' ) ); ?>
				</div>
				<?php endif; ?>
				<div class="article-header">
					<h2><?php the_title(); ?><?php edit_post_link( __( 'Edit', 'emanon' ), '<span class="edit-link"><i class="fa fa-pencil-square-o"></i>', '</span>' ); ?></h2>
				</div>
			<div class="article-body">
				<?php the_content(); ?>
			</div>
			<?php endwhile; ?>
		</div>
		<!--end article-->
		</div>
	</div>
	<div class="loading-wrapper-section"></div>
</section>

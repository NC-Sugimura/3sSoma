<?php
/**
* Content landing page for lead
* @package WordPress
* @subpackage Emanon_Pro
* @since Emanon Pro 1.3
*/
	$emanon_form_title = post_custom( 'emanon_form_title' );
	$emanon_form_action = post_custom( 'emanon_form_action' );
	$emanon_input_hidden = post_custom( 'emanon_input_hidden' );
	$emanon_input_submit = post_custom( 'emanon_input_submit' );
	$emanon_form_message = post_custom( 'emanon_form_message' );
	$emanon_short_code = post_custom( 'emanon_short_code' );
?>
<!--article-->
<article class="article content-page">
	<?php while ( have_posts() ) : the_post(); ?>
	<header>
		<div class="article-header lp-lead-header">
			<h1><?php the_title(); ?><?php emanon_subtitle(); ?><?php edit_post_link( __( 'Edit', 'emanon' ), '<span class="edit-link"><i class="fa fa-pencil-square-o"></i>', '</span>' ); ?></h1>
		</div>
	</header>
	<section class="article-body">
		<div class="col-main first">
			<?php if( has_post_thumbnail() ): ?>
			<div class="article-thumbnail">
			<?php the_post_thumbnail( 'large-thumbnail', array( 'itemprop' => 'image' ) ); ?>
			</div>
			<?php endif; ?>
			<?php the_content(); ?>
		</div>
		<!--page lp form-->
		<?php if ( $emanon_form_action || $emanon_short_code ): ?>
		<aside class="col-sidebar">
			<div id="sidebar-lp-lead" class="side-widget-fixed">
				<?php echo $emanon_form_action; ?>
				<?php echo $emanon_input_hidden; ?>
				<?php if( $emanon_form_title ): ?>
				<div class="side-widget-title text-center">
				<span><?php echo esc_html( $emanon_form_title ); ?></span>
				</div>
				<?php endif; ?>
				<?php for($li=1; $li<7; $li++) { ?>
				<?php $emanon_input_label = post_custom( 'emanon_input_label_'.$li ); ?>
				<?php $emanon_input_text = post_custom( 'emanon_input_text_'.$li ); ?>
				<?php if( $emanon_input_label ): ?>
				<dl>
					<dt><?php echo esc_html( $emanon_input_label ); ?></dt>
					<dd><?php echo ( $emanon_input_text ); ?></dd>
				</dl>
				<?php endif; ?>
				<?php } ?>
				<div class="submit"><?php echo $emanon_input_submit; ?></div>
				<?php if ( $emanon_short_code ): ?>
					<!--contact form 7-->
					<?php echo do_shortcode( $emanon_short_code ); ?>
					<!--end contact form 7-->
				<?php endif; ?>
				<?php if( $emanon_form_message ): ?>
				<div class="text-center">
				<span class="small"><?php echo esc_html( $emanon_form_message ); ?></span>
				</div>
				<?php endif; ?>
				<?php if ( $emanon_form_action ) { ?></form><?php } ?>
			</div>
		</aside>
		<?php endif; ?>
		<!--end page lp form-->
	</section>
	<?php emanon_cta_page(); ?>
	<?php if ( comments_open() || get_comments_number() ): ?>
	<footer class="article-footer">
		<?php comments_template(); ?>
	</footer>
	<?php endif; ?>
	<?php endwhile; ?>
</article>
<!--end article-->

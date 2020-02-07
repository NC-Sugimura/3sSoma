<?php
/**
* Content search
* @package WordPress
* @subpackage Emanon_Pro
* @since Emanon Pro 1.0
*/
?>
<?php if ( have_posts() ) : ?>
<!--find keyword-->
<div <?php post_class( "clearfix" ); ?>>
 <?php while ( have_posts() ) : the_post() ?>
 <article class="archive-list">
		<?php emanon_content_entry_thumbnail(); ?>
		<header class="archive-header">
			<?php emanon_entry_meta_list(); ?>
			<h2 class="archive-header-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
			<?php if ( emanon_excerpt() ): ?>
			<?php the_excerpt(); ?>
			<?php endif; ?>
			<?php emanon_read_more(); ?>
		</header>
	</article >
	<?php endwhile; ?>
	<?php the_posts_pagination( array( 'prev_text' => __( 'Previous', 'emanon' ), 'next_text' => __( 'Next', 'emanon' ), ) ); ?>
</div>
<!--end find keyword-->
<?php else: ?>
<!--not find keyword-->
<article class="article">
	<header class="article-header">
		<h1><?php _e( 'Search keyword is not entered.', 'emanon' ); ?></h1>
	</header>
	<section class="article-body">
		<p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'emanon' ); ?></p>
		<?php get_search_form(); ?>
		<h2><?php _e( 'Find page from the category list.', 'emanon' ); ?></h2>
		<ul>
		<?php $args = array(
			'title_li' => '',
		); ?>
		<?php wp_list_categories( $args ); ?>
		</ul>
	</section>
</article >
<!--end not find keyword-->
<?php endif; ?>

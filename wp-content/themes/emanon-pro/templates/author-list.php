<?php
/**
* Template Name: 投稿者一覧
* @package WordPress
* @subpackage Emanon_Pro
* @since Emanon Pro 1.1
*/

get_header(); ?>

<div class="content">
	<div class="container">
		<?php emanon_page_breadcrumb(); ?>
		<!--main-->
		<main>
			<div class="col12">
			<?php	get_template_part( 'content', 'author' ); ?>
			</div>
		</main>
		<!--end main-->
	</div>
</div>
<?php get_footer(); ?>
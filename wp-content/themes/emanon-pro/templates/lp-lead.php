<?php
/**
* Template Name: ランディングページ（リード）
* @package WordPress
* @subpackage Emanon_Pro
* @since Emanon Pro 1.3
*/

get_header(); ?>

<div class="content">
	<div class="container">
		<?php emanon_page_breadcrumb(); ?>
		<!--main-->
		<main>
			<div class="col12">
			<?php	get_template_part( 'content', 'landing-page-lead' ); ?>
			</div>
		</main>
		<!--end main-->
	</div>
</div>
<?php get_footer(); ?>
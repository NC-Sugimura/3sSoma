<?php
/**
* Template no sidebar author
* @package WordPress
* @subpackage Emanon_Pro
* @since Emanon Pro 1.1
*/
?>
<!--content-->
<div class="content">
	<div class="container">
		<?php emanon_archive_breadcrumb(); ?>
		<!--main-->
		<main>
			<div class="col12 clearfix">
				<?php the_archive_title( '<div class="archive-title"><h1><span>','</span></h1></div>' ); ?>
				<?php emanon_author_archive(); ?>
				<?php get_template_part( 'content', 'archive' ); ?>
			</div>
		</main>
		<!--end main-->
	</div>
</div>
<!--end content-->

<?php
/**
* Template right sidebar frontpage
* @package WordPress
* @subpackage Emanon_Pro
* @since Emanon Pro 1.0
*/
	$entry_section_title = get_theme_mod( 'entry_section_title', __( 'Latest Posts', 'emanon' ) );
	$display_tab_list = get_theme_mod( 'display_tab_list', '' );
	$tab_title_2 = get_theme_mod( 'tab_title_2', '' );
	$tab_title_3 = get_theme_mod( 'tab_title_3', '' );
	$tab_title_4 = get_theme_mod( 'tab_title_4', '' );
?>
<!--content-->
<div class="content">
	<div class="container">
		<!--main-->
		<main>
			<div class="col-main-right clearfix">
			<?php get_template_part( 'lib/modules/components/ad-front-top' ); ?>
			<?php if ( $display_tab_list && is_front_page() ): ?>
			<div class="tab-area clearfix">
				<div class="nav-tab nav-tab-active" for="tab1"><?php echo esc_html( $entry_section_title) ; ?></div>
				<?php if( $tab_title_2 ): ?><div class="nav-tab" for="tab2"><?php echo esc_html( $tab_title_2 ); ?></div><?php endif; ?>
				<?php if( $tab_title_3 ): ?><div class="nav-tab" for="tab3"><?php echo esc_html( $tab_title_3 ); ?></div><?php endif; ?>
				<?php if( $tab_title_4 ): ?><div class="nav-tab" for="tab4"><?php echo esc_html( $tab_title_4 ); ?></div><?php endif; ?>
			</div>
			<?php elseif ( $entry_section_title ): ?>
			<div class="entry-header">
				<h2><span><?php echo esc_html( $entry_section_title ); ?></span></h2>
			</div>
			<?php endif; ?>
			<?php if ( $display_tab_list && is_front_page() ): ?>
			<?php	get_template_part( 'content', 'home-tab' ); ?>
			<?php else: ?>
			<?php	get_template_part( 'content', 'home' ); ?>
			<?php endif; ?>
			<?php get_template_part( 'lib/modules/components/ad-front-bottom' ); ?>
			</div>
		</main>
		<!--end main-->
		<!--sidebar-->
		<aside class="col-sidebar-left sidebar">
			<?php get_sidebar(); ?>
		</aside>
		<!--end sidebar-->
	</div>
</div>
<!--end content-->

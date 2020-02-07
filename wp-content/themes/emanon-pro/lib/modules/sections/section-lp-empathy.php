<?php
/**
* LP empathy section
* @package WordPress
* @subpackage Emanon_Pro
* @since Emanon Pro 1.1
*/
	$empathy_layout_type = get_theme_mod( 'empathy_layout_type', 'default' );
	$empathy_section_title = get_theme_mod( 'empathy_section_title', '' );
	$empathy_section_sub_title = get_theme_mod( 'empathy_section_sub_title', '' );
	$empathy_section_icon = get_theme_mod( 'empathy_section_icon', 'fa fa-check-square-o' );
	$empathy_section_main_image = get_theme_mod( 'empathy_section_main_image', '' );
	$scroll_down_icon = get_theme_mod( 'scroll_down_icon', 'fa fa-angle-down' );
?>
<!--empathy section-->
<section id="empathy-section" class="lp-empathy">
	<?php if ( $empathy_layout_type == 'default' ): ?>
		<div class="lp-container">
			<div class="empathy-header wow fadeIn">
			<?php if ( $empathy_section_title ): ?>
			<h2><?php echo esc_html( $empathy_section_title ); ?></h2>
			<?php endif; ?>
			<?php if ( $empathy_section_sub_title ): ?>
			<p><?php echo nl2br( esc_html( $empathy_section_sub_title ) ); ?></p>
			<?php endif; ?>
			</div>
			<div class="empathy-content wow fadeIn" data-wow-delay="0.2s">
				<ul>
					<?php for($li=1; $li<7; $li++) { ?>
					<?php $trouble = get_theme_mod( 'trouble_'.$li ); ?>
					<?php if( $trouble ): ?>
					<li><i class="<?php echo esc_html( $empathy_section_icon ); ?>"></i><?php echo esc_html( $trouble ); ?></li>
					<?php endif; ?>
					<?php } ?>
				</ul>
			</div>
		</div>
	<?php elseif ( $empathy_layout_type == 'image' ): ?>
		<div class="lp-container">
			<div class="empathy-header wow fadeIn">
			<?php if ( $empathy_section_title ): ?>
			<h2><?php echo esc_html( $empathy_section_title ); ?></h2>
			<?php endif; ?>
			<?php if ( $empathy_section_sub_title ): ?>
			<p><?php echo nl2br( esc_html( $empathy_section_sub_title ) ); ?></p>
			<?php endif; ?>
			</div>
			<div class="col4 first box-list empathy-box-r wow fadeIn" data-wow-delay="0.2s">
				<ul>
					<?php for($li=1; $li<4; $li++) { ?>
					<?php $trouble = get_theme_mod( 'trouble_'.$li ); ?>
					<?php if( $trouble ): ?>
					<li><i class="<?php echo esc_html( $empathy_section_icon ); ?>"></i><?php echo esc_html( $trouble ); ?></li>
					<?php endif; ?>
					<?php } ?>
				</ul>
			</div>
			<?php if( $empathy_section_main_image ): ?>
			<div class="col4 box-list empathy-image wow fadeIn">
				<img src="<?php echo esc_url( $empathy_section_main_image ); ?>" alt="<?php echo esc_html( $empathy_section_title ); ?>">
			</div>
			<?php endif; ?>
			<div class="col4 box-list empathy-box-l wow fadeIn" data-wow-delay="0.2s">
				<ul>
					<?php for($li=4; $li<7; $li++) { ?>
					<?php $trouble = get_theme_mod( 'trouble_'.$li ); ?>
					<?php if( $trouble ): ?>
					<li><i class="<?php echo esc_html( $empathy_section_icon ); ?>"></i><?php echo esc_html( $trouble ); ?></li>
					<?php endif; ?>
					<?php } ?>
				</ul>
			</div>

		</div>
	</div>
 <?php endif; ?>
	<!-- scroll -->
	<div class="scroll-down">
		<a href="#advantage-section"><span><i class="<?php echo esc_html( $scroll_down_icon ); ?>"></i></span></a>
	</div>
	<!-- end scroll -->
	<div class="loading-wrapper-section"></div>
</section>
<!--end empathy section-->

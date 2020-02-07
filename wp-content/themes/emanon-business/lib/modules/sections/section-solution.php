<?php
/**
 * Solution section
 * @package WordPress
 * @subpackage Emanon_Business
 * @since Emanon Business 1.0
 */
$solution_section_title = get_theme_mod( 'solution_section_title', '' );
$solution_section_description = get_theme_mod( 'solution_section_description', '' );
?>
<?php if( is_front_page() && !is_paged() ) :?>
<!--solution section-->
<div id="solution-section" class="eb-solution-section angle">
	<div class="container inner">
		<div class="solution-header wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
			<?php if ( $solution_section_title ): ?>
			<h2>
				<?php echo esc_html( $solution_section_title ); ?>
			</h2>
			<?php endif; ?>
			<?php if ( $solution_section_description ): ?>
			<p>
				<?php echo nl2br( $solution_section_description ); ?>
			</p>
			<?php endif; ?>
		</div>
		<?php for($li=1; $li<4; $li++) { ?>
		<?php $solution_icon = get_theme_mod( 'solution_icon_'.$li ); ?>
		<?php $solution_image = get_theme_mod( 'solution_image_'.$li ); ?>
		<?php $solution_url = get_theme_mod( 'solution_url_'.$li ); ?>
		<?php $solution_title = get_theme_mod( 'solution_title_'.$li ); ?>
		<?php $solution_description = get_theme_mod( 'solution_description_'.$li ); ?>
		<?php $delay = (pow($li, 2)); ?>
		<div class="solution-box-list box-list wow fadeIn" data-wow-duration="1s" data-wow-delay="0.<?php echo $delay; ?>s">
			<?php if ( $solution_url ) { ?>
			<a href="<?php echo esc_url( $solution_url ); ?>">
				<?php } ?>
				<?php if( $solution_icon && empty( $solution_image ) ): ?>
				<div class="solution-box-icon">
					<i class="<?php echo esc_html( $solution_icon ); ?> fa-2x"></i>
				</div>
				<?php endif; ?>
				<?php if( $solution_image && empty( $solution_icon ) ): ?>
				<div class="solution-box-icon">
					<img src="<?php echo esc_url( $solution_image ); ?>" alt="<?php echo esc_html( $solution_title ); ?>">
				</div>
				<?php endif; ?>
				<div class="solution-box-detail">
					<h3>
						<?php echo esc_html( $solution_title ); ?>
					</h3>
					<p>
						<?php echo nl2br( $solution_description ); ?>
					</p>
				</div>
				<?php if ( $solution_url ) { ?>
			</a>
			<?php } ?>
		</div>
		<?php } ?>
		<div id="user-bunner" class="container inner wow fadeInUp flex" data-wow-duration="1s" data-wow-delay="0.1s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: B;">
			<a href="https://www.3s-soma.co.jp/business/">
				<img src="https://www.3s-soma.co.jp/wp-content/uploads/2019/05/法人バナー横.png" alt="法人の方はこちら">
			</a>		
			<a href="https://www.3s-soma.co.jp/personal/">
				<img src="https://www.3s-soma.co.jp/wp-content/uploads/2019/05/個人バナー横.png" alt="個人の方はこちら">
			</a>		
		</div>
	</div>
</div>
<!--end solution section-->
<?php endif; ?>
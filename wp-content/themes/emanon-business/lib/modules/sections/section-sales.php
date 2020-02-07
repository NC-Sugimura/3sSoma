<?php
/**
* Sales section
* @package WordPress
* @subpackage Emanon_Business
* @since Emanon Business 1.2
*/
	$sales_section_title = get_theme_mod( 'sales_section_title', '' );
	$sales_section_description = get_theme_mod( 'sales_section_description', '' );
	$sales_section_image = get_theme_mod( 'sales_section_image', '' );
	$sales_section_video_mp4_id = get_theme_mod( 'sales_section_video_mp4', '' );
	$sales_section_video_mp4 = wp_get_attachment_url( $sales_section_video_mp4_id );
	$autoplay = get_theme_mod( 'sales_section_video_autoplay', '' );
	$loop = get_theme_mod( 'sales_section_video_loop', '' );
	$muted = get_theme_mod( 'sales_section_video_muted', '' );
	$controls = get_theme_mod( 'sales_section_video_controls', '' ); 
	$autoplay_sp = get_theme_mod( 'sales_section_video_autoplay_sp', '' );
	$loop_sp = get_theme_mod( 'sales_section_video_loop_sp', '' );
	$muted_sp = get_theme_mod( 'sales_section_video_muted_sp', '' );
	$controls_sp = get_theme_mod( 'sales_section_video_controls_sp', '' ); 
	$sales_section_btn_url = get_theme_mod( 'sales_section_btn_url', '' );
	$sales_section_btn_text = get_theme_mod( 'sales_section_btn_text', '' );
?>
<?php if( is_front_page() && !is_paged() ) :?>
<!--sales section-->
<div id="sales-section" class="eb-sales-section">

	<?php if ( $sales_section_title ): ?>
	<div class="container inner wow fadeInUp" data-wow-duration="0.4s" data-wow-delay="0.4s">
		<div class="sales-header">
		 <h2><?php echo esc_html( $sales_section_title ); ?></h2>
		</div>
	</div>
	<?php endif; ?>

	<div class="container inner">
		<div class="sales-section-col wow fadeIn" data-wow-duration="1.6s" data-wow-delay="0.1s">
			<div class="sales-content">
				<?php if ( $sales_section_image && !$sales_section_video_mp4 ): ?>
				<img src="<?php echo esc_url( $sales_section_image ); ?>" alt="<?php echo esc_html( $sales_section_title ); ?>">
				<?php endif; ?>
				<?php if ( $sales_section_video_mp4 ): ?>
				<div class="sales-section-video-wrap">
				<?php if ( !is_mobile() ): ?>
				<video <?php if ( $autoplay ) { ?>autoplay<?php } ?> <?php if ( $loop ) { ?>loop<?php } ?> <?php if ( $muted ) { ?>muted<?php } ?> <?php if ( $controls ) { ?>controls<?php } ?> id="sales-section-video" poster="<?php echo esc_url( $sales_section_image ); ?>" >
					<source src="<?php echo esc_url( $sales_section_video_mp4 ); ?>" type="video/mp4" />
				</video>
				<?PHP elseif ( is_mobile() ): ?>
				<video <?php if ( $autoplay_sp ) { ?>autoplay<?php } ?> <?php if ( $loop_sp ) { ?>loop<?php } ?> <?php if ( $muted_sp ) { ?>muted<?php } ?> <?php if ( $controls_sp ) { ?>controls<?php } ?> id="sales-section-video" poster="<?php echo esc_url( $sales_section_image ); ?>" >
					<source src="<?php echo esc_url( $sales_section_video_mp4 ); ?>" type="video/mp4" />
				</video>
				<?php endif; ?>
				<div class="sales-section-video-btn" id="sales-section-video-btn"></div>
				</div>
				<?php endif; ?>
				<?php if ( $sales_section_description ): ?>
				<p><?php echo nl2br( $sales_section_description ); ?></p>
				<?php endif; ?>
				<?php if ( $sales_section_btn_url ): ?>
				<div class="sales-section-cta wow fadeIn" data-wow-duration="2s" data-wow-delay="0.6s">
				<span class="btn sales-section-btn"><a href="<?php echo esc_url( $sales_section_btn_url ); ?>"><?php echo esc_html( $sales_section_btn_text ); ?></a></span>
				</div>
				<?php endif; ?>
			</div>
		</div>
		<div class="sales-section-col sales-section-box">
		<?php for($li=1; $li<4; $li++) { ?>
			<?php $sales_icon = get_theme_mod( 'sales_icon_'.$li ); ?>
			<?php $sales_url = get_theme_mod( 'sales_url_'.$li ); ?>
			<?php $sales_title = get_theme_mod( 'sales_title_'.$li ); ?>
			<?php $sales_description = get_theme_mod( 'sales_description_'.$li ); ?>
			<?php $delay = (pow($li, 2)); ?>
			<div class="sales-box-list wow fadeIn" data-wow-duration="1.6s" data-wow-delay="0.<?php echo $delay; ?>s">
				<?php if ( $sales_url ) { ?><a href="<?php echo esc_url( $sales_url ); ?>"><?php } ?>
				<div class="sales-box-header">
					<?php if( $sales_icon ): ?>
					<div class="sales-box-icon">
						<i class="<?php echo esc_html( $sales_icon ); ?> fa-2x"></i>
					</div>
					<?php endif; ?>
					<h3><?php echo esc_html( $sales_title ); ?></h3>
				</div>
				<?php if ( $sales_url ) { ?></a><?php } ?>
				<div class="sales-box-detail">
					<p><?php echo nl2br( $sales_description ); ?></p>
				</div>
			</div>
		<?php } ?>
		</div>

	</div>
</div>
<!--end sales section-->
<?php endif; ?>

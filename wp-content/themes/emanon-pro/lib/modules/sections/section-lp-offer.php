<?php
/**
* LP offer section
* @package WordPress
* @subpackage Emanon_Pro
* @since Emanon Pro 1.1
*/
	$offer_title = get_theme_mod( 'offer_title', '' );
	$offer_text = get_theme_mod( 'offer_text', '' );
	$offer_main_img = get_theme_mod( 'offer_main_img', '' );
	$offer_item = get_theme_mod( 'offer_item', '' );
	$offer_item_price = get_theme_mod( 'offer_item_price', '' );
	$offer_item_features = get_theme_mod( 'offer_item_features', '' );
?>
<!--offer section-->
<section id="offer-section" class="lp-offer">
	<div class="lp-container">
		<div class="offer-header wow fadeInDown" data-wow-delay="0.2s">
			<?php if ( $offer_title ): ?>
			<h2><?php echo esc_html( $offer_title ); ?></h2>
			<?php endif; ?>
			<?php if ( $offer_text ): ?>
			<p><?php echo nl2br( $offer_text ); ?></p>
			<?php endif; ?>
		</div>
	</div>
	<?php if ( $offer_main_img ): ?>
	<div class="lp-container">
		<div class="col6 push6 first wow fadeIn" data-wow-delay="0.4s">
			<div class="offer-main-image">
			<img src="<?php echo esc_url( $offer_main_img ); ?>" alt="<?php echo esc_html( $offer_title ); ?>">
			</div>
		</div>
		<div class="col6 pull6 wow fadeIn" data-wow-delay="0.4s">
			<?php for($li=1; $li<4; $li++) { ?>
				<?php $offer_icon = get_theme_mod( 'offer_icon_'.$li , '' ); ?>
				<?php $offer_img = get_theme_mod( 'offer_img_'.$li , '' ); ?>
				<?php $offer_sub_title = get_theme_mod( 'offer_sub_title_'.$li , '' ); ?>
				<?php $offer_sub_text = get_theme_mod( 'offer_sub_text_'.$li , '' ); ?>
				<div class="offer-list">
					<?php if( $offer_icon && empty( $offer_img ) ): ?>
					<div class="offer-icon offer-fa-icon">
						<i class="<?php echo esc_html( $offer_icon ); ?> fa-2x"></i>
					</div>
					<?php endif; ?>
					<?php if( $offer_img && empty( $offer_icon ) ): ?>
					<div class="offer-icon">
						<img src="<?php echo esc_url( $offer_img ); ?>" alt="<?php echo esc_html( $offer_sub_title ); ?>">
					</div>
					<?php endif; ?>
					<div class="offer-date">
						<?php if ( $offer_sub_title ): ?>
						<h3><?php echo esc_html( $offer_sub_title); ?></h3>
						<?php endif; ?>
						<?php if ( $offer_sub_text ): ?>
						<div class="offer-text">
							<p><?php echo nl2br( $offer_sub_text ); ?></p>
						</div>
						<?php endif; ?>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
	<?php else : ?>
	<div class="lp-container">
		<div class="col12 wow fadeIn" data-wow-delay="0.4s">
			<?php for($li=1; $li<4; $li++) { ?>
				<?php $offer_icon = get_theme_mod( 'offer_icon_'.$li , '' ); ?>
				<?php $offer_img = get_theme_mod( 'offer_img_'.$li , '' ); ?>
				<?php $offer_sub_title = get_theme_mod( 'offer_sub_title_'.$li , '' ); ?>
				<?php $offer_sub_text = get_theme_mod( 'offer_sub_text_'.$li , '' ); ?>
				<?php if( $offer_icon && empty( $offer_img ) ): ?>
				<div class="offer-icon offer-fa-icon">
					<i class="<?php echo esc_html( $offer_icon ); ?> fa-2x"></i>
				</div>
				<?php endif; ?>
				<?php if( $offer_img && empty( $offer_icon ) ): ?>
				<div class="offer-icon">
					<img src="<?php echo esc_url( $offer_img ); ?>" alt="<?php echo esc_html( $offer_sub_title ); ?>">
				</div>
				<?php endif; ?>
				<div class="offer-date">
					<?php if ( $offer_sub_title ): ?>
					<h3><?php echo esc_html( $offer_sub_title ); ?></h3>
					<?php endif; ?>
					<?php if ( $offer_sub_text ): ?>
					<div class="offer-text">
						<p><?php echo nl2br( $offer_sub_text ); ?></p>
					</div>
					<?php endif; ?>
				</div>
			<?php } ?>
		</div>
	</div>
	<?php endif; ?>
	<?php if (	$offer_item ): ?>
	<div class="lp-container">
		<a href="#cta-section">
			 <div class="offer-footer wow fadeIn" data-wow-delay="0.4s">
				 <dl>
					<dt class="offer-item"><?php echo esc_html( $offer_item ); ?></dt>
					<dd class="offer-item-price"><?php echo esc_html( $offer_item_price ); ?></dd>
					<dd class="offer-item-features"><?php echo esc_html( $offer_item_features ); ?></dd>
				 </dl>
			 </div>
		</a>
	 </div>
	<?php endif; ?>
</section>
<!--end offer section-->

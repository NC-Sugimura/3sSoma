<?php
/**
* LP comparison table section
* @package WordPress
* @subpackage Emanon_Pro
* @since Emanon Pro 1.3
*/
	$comparison_table_section_title = get_theme_mod( 'comparison_table_section_title', '' );
	$comparison_table_section_sub_title = get_theme_mod( 'comparison_table_section_sub_title', '' );
?>
<!--comparison table section-->
<section id="comparison_section" class="lp-comparison">
	<div class="lp-container">
		<div class="comparison-header wow fadeInDown" data-wow-delay="0.2s">
		<?php if ( $comparison_table_section_title ): ?>
		<h2><?php echo esc_html( $comparison_table_section_title ); ?></h2>
		<?php endif; ?>
		<?php if ( $comparison_table_section_sub_title ): ?>
		<p><?php echo nl2br( esc_html( $comparison_table_section_sub_title ) ); ?></p>
		<?php endif; ?>
		</div>
		<table class="wow fadeIn" data-wow-delay="0.6s">
			<tbody>
				<tr>
					<?php for( $li=1; $li<4; $li++ ) { ?>
					<?php $comparison_item = get_theme_mod( 'comparison_item_'.$li ); ?>
					<?php if( $comparison_item ): ?>
					<td>
					<div class="comparison-item"><?php echo esc_html( $comparison_item ); ?></div>
					<?php endif; ?>
					<?php $comparison_recommend = get_theme_mod( 'comparison_recommend_'.$li ); ?>
					<?php if( $comparison_recommend ): ?>
					<div class="comparison-recommend"><?php echo esc_html( $comparison_recommend ); ?></div>
					<?php endif; ?>
					<?php $comparison_features = get_theme_mod( 'comparison_features_'.$li ); ?>
					<?php if( $comparison_features ): ?>
					<div class="comparison-features"><?php echo nl2br( esc_html( $comparison_features )	 ); ?></div>
					<?php endif; ?>
					</td>
				<?php } ?>
				</tr>
			</tbody>
		</table>
	</div>
</section>
<!--end comparison table section-->

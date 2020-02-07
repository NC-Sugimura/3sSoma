<?php
/**
* SNS follow btn for single
* @package WordPress
* @subpackage Emanon_Pro
* @since Emanon Pro 1.0
*/
	$sns_follow_title = get_theme_mod( 'sns_follow_title', __( 'Follow me on sns', 'emanon' ) );
?>
<!--sns follow-->
<div class="sns-follow">
	<?php if ( $sns_follow_title ): ?> 
	<h3><?php echo esc_html( $sns_follow_title ); ?></h3>
	<?php endif; ?>
	<ul>
		<?php if ( get_emanon_twitter_profile_url() ): ?>
		<li class="twitter"><a href="<?php echo esc_html( get_emanon_twitter_profile_url() ); ?>" target="_blank"><i class="fa fa-twitter"></i>Twitter</a></li>
		<?php endif; ?>
		<?php if ( get_emanon_facebook_profile_url() ): ?>
		<li class="facebook"><a href="<?php echo esc_url( get_emanon_facebook_profile_url() ); ?>" target="_blank"><i class="fa fa-facebook"></i>Facebook</a></li>
		<?php endif; ?>
		<?php if ( get_emanon_instagram_profile_url() ): ?>
		<li class="instagram"><a href="<?php echo esc_url( get_emanon_instagram_profile_url() ); ?>" target="_blank"><i class="fa fa-instagram"></i>Instagram</a></li>
		<?php endif; ?>
		<?php if ( get_emanon_line_profile_url() ): ?>
		<li class="line"><a href="<?php echo esc_url( get_emanon_line_profile_url() ); ?>" target="_blank">LINE</a></li>
		<?php endif; ?>
		<?php if ( get_emanon_youtube_profile_url() ): ?>
		<li class="youtube"><a href="<?php echo esc_url( get_emanon_youtube_profile_url() ); ?>" target="_blank"><i class="fa fa-youtube"></i>YouTube</a></li>
		<?php endif; ?>
		<?php if ( get_emanon_feedly_url() ): ?>
		<li class="feedly"><a href="https://feedly.com/i/subscription/feed/<?php echo esc_url( get_emanon_feedly_url() ); ?>" target="_blank"><i class="fa fa-rss"></i>Feedly</a></li>
		<?php endif; ?>
 </ul>
</div>
<!--end sns follow-->
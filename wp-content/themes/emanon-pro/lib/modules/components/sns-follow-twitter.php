<?php
/**
* Twitter follow button
* @package WordPress
* @subpackage Emanon_Pro
* @since Emanon Pro 1.2
*/
	$twitter_follow_title = get_theme_mod( 'twitter_follow_title', __( 'Follow me on twitter', 'emanon' ) );
?>
<!--twitter follow-->
<div class="twitter-follow">
<span class="twitter-follow-label"><?php echo esc_html( $twitter_follow_title ); ?></span><a href="<?php echo esc_html( get_emanon_twitter_profile_url() ); ?>" class="twitter-follow-button" data-show-count="true" data-size="large" data-show-screen-name="false">Follow <?php echo esc_html( get_emanon_twitter_id() ); ?></a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
</div>
<!--end twitter follow-->
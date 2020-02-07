<?php
/**
* Content author
* @package WordPress
* @subpackage Emanon_Pro
* @since Emanon Pro 1.1
*/
	$user_id= get_theme_mod( 'exclude_author_user_id','' );
?>
<!--article-->
<article class="article content-page">
	<?php while ( have_posts() ) : the_post(); ?>
	<header>
		<div class="article-header">
			<h1><?php the_title(); ?><?php emanon_subtitle(); ?><?php edit_post_link( __( 'Edit', 'emanon' ), '<span class="edit-link"><i class="fa fa-pencil-square-o"></i>', '</span>' ); ?></h1>
		</div>
		<?php if( has_post_thumbnail() ): ?>
		<div class="article-thumbnail">
		<?php the_post_thumbnail( 'large-thumbnail', array( 'itemprop' => 'image' ) ); ?>
		</div>
		<?php endif; ?>
	</header>
	<section class="article-body">
		<?php the_content(); ?>
		<!--user list-->
		<div <?php post_class( "clearfix" ); ?>>
			<?php $users = get_users( array( 'orderby' => 'ID' , 'order' => 'ASC' , 'exclude' => $user_id ) ); ?>
			<?php foreach( $users as $user ) {
			$user_id = $user->ID;
			$user_display_name = $user->display_name;
			$user_position = $user->user_position;
			$user_description = $user->user_description;
			$user_twitter = $user->user_twitter;
			$user_facebook = $user->user_facebook;
			$user_instagram = $user->user_instagram;
			$user_line = $user->user_line;
			$user_youtube = $user->user_youtube;
			?>
			<!--user profile-->
			<div class="user-profile">
				<div class="user-avatar">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>?author=<?php echo $user_id ?>"><?php echo get_avatar( $user_id ,72, '', $user_display_name ); ?></a>
				</div>
				<div class="user-profile-content">
					<div class="user-name"><?php echo esc_html( $user_display_name ); ?><?php if( $user_position ){ ?><span class="user-position"><?php echo esc_html( $user_position ); ?></span><?php } ?></div>
					<p class="user-description"><?php echo nl2br( esc_html( $user_description ) ); ?></p>
					<span><i class="fa fa-angle-right"></i><a href="<?php echo esc_url( home_url( '/' ) ); ?>?author=<?php echo $user_id ?>"><?php _e( 'Post List', 'emanon' ); ?></a></span>
					<div class="user-sns">
						<?php if( $user_twitter || $user_facebook || $user_instagram || $user_line || $user_youtube ) { ?>
						<ul>
							<?php } ?>
							<?php if( $user_twitter ){ ?>
							<li class="follow-twitter"><a href="<?php echo $user_twitter ?>"><i class="fa fa-twitter"></i></a></li>
							<?php } ?>
							<?php if( $user_facebook ){ ?>
							<li class="follow-facebook"><a href="<?php echo $user_facebook ?>"><i class="fa fa-facebook"></i></a></li>
							<?php } ?>
							<?php if( $user_instagram ){ ?>
							<li class="follow-instagram"><a href="<?php echo $user_instagram ?>"><i class="fa fa-instagram"></i></a></li>
							<?php } ?>
							<?php if( $user_line ){ ?>
							<li class="follow-line"><a href="<?php echo $user_line ?>">LINE@</a></li>
							<?php } ?>
							<?php if( $user_youtube ){ ?>
							<li class="follow-youtube"><a href="<?php echo $user_youtube ?>"><i class="fa fa-youtube"></i></a></li>
							<?php } ?>
							<?php if( $user_twitter || $user_facebook || $user_instagram || $user_line || $user_youtube ) { ?>
						</ul>
						<?php } ?>
					</div>
				</div>
			</div>
			<!--end user profile-->
			<?php } ?>
		</div>
		<!--end user list-->
	</section>
	<footer class="article-footer">
		<?php emanon_under_ad300(); ?>
		<?php comments_template(); ?>
	</footer>
	<?php endwhile; ?>
	<?php emanon_cta_page(); ?>
</article>
<!--end article-->
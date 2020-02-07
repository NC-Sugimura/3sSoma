<?php
/**
* Widet my profile
* @package WordPress
* @subpackage Emanon_Pro
* @since Emanon Pro 1.3
*/

class My_Profile extends WP_Widget {

	/**
	 * ウィジェットを登録
	 */
	function __construct() {
		parent::__construct(
			'my_profile_widget', // Base ID
			__( '［E］Profile widget','emanon', 'emanon' ), // Name
			array( 'description' => __( 'Display my profile widget','emanon' ), ) // Args
		);
	}

	/**
	 * ウィジェットのフロントエンド表示
	 *
	 * @param array $args     ウィジェットの引数 「before_title, after_title, before_widget, after_widget」
	 * @param array $instance  Widgetの設定項目
	 */
	public function widget( $args, $instance ) {
		$title = apply_filters( 'widget_title', empty( $instance['title'] ) ? '' : $instance['title'], $instance, $this->id_base );
		$my_name = empty( $instance['my_name'] ) ? '' : $instance['my_name'];
		$my_image = empty( $instance['my_image'] ) ? '' : $instance['my_image'];
		$my_profile = empty( $instance['my_profile'] ) ? '' : $instance['my_profile'];
		$twitter = empty( $instance['twitter'] ) ? '' : $instance['twitter'];
		$facebook = empty( $instance['facebook'] ) ? '' : $instance['facebook'];
		$instagram = empty( $instance['instagram'] ) ? '' : $instance['instagram'];
		$line = empty( $instance['line'] ) ? '' : $instance['line'];
		$youtube = empty( $instance['youtube'] ) ? '' : $instance['youtube'];
		$link = empty( $instance['link'] ) ? '' : $instance['link'];
		$link_text = empty( $instance['link_text'] ) ? '' : $instance['link_text'];

		echo $args['before_widget'];
		if ( ! empty( $title ) ) :
			echo $args['before_title'] . $title . $args['after_title'];
		endif; ?>
		<div id="my-profile">
		<?php if( $my_image ) { ?><div><?php if( $link ) { ?><a href="<?php echo $link; ?>"><?php } ?><img src="<?php echo $my_image; ?>" alt="<?php echo $my_name; ?>"><?php if( $link ) { ?></a><?php } ?></div><?php } ?>
			<h4><?php echo $my_name; ?></h4>
				<?php if( $twitter || $facebook || $instagram || $line || $youtube ){ ?>
				<ul>
					<?php } ?>
					<?php if( $twitter ){ ?>
					<li class="widget-twitter"><a href="<?php echo $twitter; ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
					<?php } ?>
					<?php if( $facebook ){ ?>
					<li class="widget-facebook"><a href="<?php echo $facebook; ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
					<?php } ?>
					<?php if( $instagram ){ ?>
					<li class="widget-instagram"><a href="<?php echo $instagram; ?>" target="_blank"><i class="fa fa-instagram"></i></a></li>
					<?php } ?>
					<?php if( $line ){ ?>
					<li class="widget-line"><a href="<?php echo $line; ?>" target="_blank">LINE@</a></li>
					<?php } ?>
					<?php if( $youtube ){ ?>
					<li class="widget-youtube"><a href="<?php echo $youtube; ?>" target="_blank"><i class="fa fa-youtube"></i></a></li>
					<?php } ?>
					<?php if( $twitter || $facebook || $instagram || $line || $youtube ){ ?>
				</ul>
				<?php } ?>
			<?php if( $my_profile ) { ?>
			<div class="profile-text">
				<p><?php echo nl2br( $my_profile ); ?></p>
			</div>
			<?php } ?>
			<?php if( $link ) { ?>
			<div>
				<a href="<?php echo $link; ?>"><?php echo $link_text; ?></a>
			</div>
			<?php } ?>
		</div>
		<?php
			echo $args['after_widget'];
	}

	/**
	 * 管理画面にWidgetを表示
	 *
	 * @param array $instance データベースからの前回保存された値
	 */

	public function form( $instance ) {

		$defaults = array(
			'title' => '',
			'my_name' => '',
			'my_image' => '',
			'my_profile' => '',
			'twitter' => '',
			'facebook' => '',
			'instagram' => '',
			'line' => '',
			'youtube' => '',
			'link' => '',
			'link_text' => '',
		);

		$instance = wp_parse_args( (array) $instance, $defaults );
		$title = esc_attr( $instance['title'] );
		$my_name = esc_attr( $instance['my_name'] );
		$my_image = esc_url_raw( $instance['my_image'] );
		$my_profile = esc_textarea($instance['my_profile'] );
		$twitter = esc_url( $instance['twitter'] );
		$facebook = esc_url( $instance['facebook'] );
		$instagram = esc_url( $instance['instagram'] );
		$line = esc_url( $instance['line'] );
		$youtube = esc_url( $instance['youtube'] );
		$link = esc_url( $instance['link'] );
		$link_text = esc_attr( $instance['link_text'] );
		?>
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>">
			<?php _e( 'Title:','emanon' ); ?>
			</label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo $title; ?>">
		</p>
		
		<p>
			<label for="<?php echo $this->get_field_id( 'my_name' ); ?>">
			<?php _e( 'Name:','emanon' ); ?>
			</label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'my_name' ); ?>" name="<?php echo $this->get_field_name( 'my_name' ); ?>" type="text" value="<?php echo $my_name; ?>">
		</p>
		
		<p>
			<label for="<?php echo $this->get_field_id( 'my_image' ); ?>">
			<?php _e( 'Upload image URL:','emanon' ); ?>
			</label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'my_image' ); ?>" name="<?php echo $this->get_field_name( 'my_image' ); ?>" type="text" value="<?php echo $my_image; ?>">
		</p>
		
		<p>
			<label for="<?php echo $this->get_field_id( 'my_profile' ); ?>">
			<?php _e( 'Profile text:','emanon' ); ?>
			</label>
			<textarea class="widefat" rows="3" colls="4" id="<?php echo $this->get_field_id( 'my_profile' ); ?>" name="<?php echo $this->get_field_name( 'my_profile' ); ?>"><?php echo $my_profile; ?></textarea>
		</p>
		
		<p>
			<label for="<?php echo $this->get_field_id( 'twitter' ); ?>">
			<?php _e( 'Twitter profile url:','emanon' ); ?>
			</label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'twitter' ); ?>" name="<?php echo $this->get_field_name( 'twitter' ); ?>" type="text" value="<?php echo $twitter; ?>">
		</p>
		
		<p>
			<label for="<?php echo $this->get_field_id( 'facebook' ); ?>">
			<?php _e( 'Facebook profile url:','emanon' ); ?>
			</label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'facebook' ); ?>" name="<?php echo $this->get_field_name( 'facebook' ); ?>" type="text" value="<?php echo $facebook; ?>">
		</p>
	
		<p>
			<label for="<?php echo $this->get_field_id( 'instagram' ); ?>">
			<?php _e( 'Instagram profile url:','emanon' ); ?>
			</label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'instagram' ); ?>" name="<?php echo $this->get_field_name( 'instagram' ); ?>" type="text" value="<?php echo $instagram; ?>">
		</p>
	
		<p>
			<label for="<?php echo $this->get_field_id( 'line' ); ?>">
			<?php _e( 'LINE@ profile url:','emanon' ); ?>
			</label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'line' ); ?>" name="<?php echo $this->get_field_name( 'line' ); ?>" type="text" value="<?php echo $line; ?>">
		</p>
	
		<p>
			<label for="<?php echo $this->get_field_id( 'youtube' ); ?>">
			<?php _e( 'YouTube profile url:','emanon' ); ?>
			</label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'youtube' ); ?>" name="<?php echo $this->get_field_name( 'youtube' ); ?>" type="text" value="<?php echo $youtube; ?>">
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'link' ); ?>">
			<?php _e( 'Link url:','emanon' ); ?>
			</label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'link' ); ?>" name="<?php echo $this->get_field_name( 'link' ); ?>" type="text" value="<?php echo $link; ?>">
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'link_text' ); ?>">
			<?php _e( 'Link text:','emanon' ); ?>
			</label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'link_text' ); ?>" name="<?php echo $this->get_field_name( 'link_text' ); ?>" type="text" value="<?php echo $link_text; ?>">
		</p>

		<?php
	}

	/**
	 * Widgetフォームの値を保存用にサニタイズ
	 *
	 * @param array $new_instance 新しいオプション値
	 * @param array $old_instance 以前のオプション値
	 *
	 * @return array 保存（更新）する設定データ
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['title'] = sanitize_text_field( $new_instance['title'] );
		$instance['my_name'] = sanitize_text_field( $new_instance['my_name'] );
		$instance['my_image'] = esc_url_raw( $new_instance['my_image'] );
		$instance['my_profile'] = sanitize_text_field( $new_instance['my_profile'] );
		$instance['twitter'] = esc_url( $new_instance['twitter'] );
		$instance['facebook'] = esc_url( $new_instance['facebook'] );
		$instance['instagram'] = esc_url( $new_instance['instagram'] );
		$instance['line'] = esc_url( $new_instance['line'] );
		$instance['youtube'] = esc_url( $new_instance['youtube'] );
		$instance['link'] = esc_url( $new_instance['link'] );
		$instance['link_text'] = sanitize_text_field( $new_instance['link_text'] );
		return $instance;
	}

} // class My_Profile

// Widgetの登録
add_action( 'widgets_init', 'emanon_register_my_profile_widget' );
	function emanon_register_my_profile_widget() {
		register_widget( 'My_Profile' );
}
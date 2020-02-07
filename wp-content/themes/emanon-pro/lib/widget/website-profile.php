<?php
/**
* Widget website profile
* @package WordPress
* @subpackage Emanon_Pro
* @since Emanon Pro 1.3
*/

class Website_Profile extends WP_Widget {

	/**
	 * ウィジェットを登録
	 */
	function __construct() {
		parent::__construct(
			'website_profile_widget', // Base ID
			__( '［E］Website Profile widget', 'emanon' ), // Name
			array( 'description' => __( 'Display website profile', 'emanon' ), ) // Args
		);
	}

	/**
	 * ウィジェットのフロントエンド表示
	 *
	 * @param array $args     ウィジェットの引数 「before_title, after_title, before_widget, after_widget」
	 * @param array $instance  Widgetの設定項目
	 */
	public function widget( $args, $instance ) {
		$title      = apply_filters( 'widget_title', empty( $instance['title'] ) ? '' : $instance['title'], $instance, $this->id_base );
		$website_title = empty( $instance['website_title'] ) ? '' : $instance['website_title'];
		$website_logo = empty( $instance['website_logo'] ) ? '' : $instance['website_logo'];
		$website_profile = empty( $instance['website_profile'] ) ? '' : $instance['website_profile'];
		$website_twitter = empty( $instance['website_twitter'] ) ? '' : $instance['website_twitter'];
		$website_facebook = empty( $instance['website_facebook'] ) ? '' : $instance['website_facebook'];
		$website_instagram = empty( $instance['website_instagram'] ) ? '' : $instance['website_instagram'];
		$website_line = empty( $instance['website_line'] ) ? '' : $instance['website_line'];
		$website_youtube = empty( $instance['website_youtube'] ) ? '' : $instance['website_youtube'];
		$website_contact = empty( $instance['website_contact'] ) ? '' : $instance['website_contact'];

		echo $args['before_widget'];
		if ( ! empty( $title ) ) :
			echo $args['before_title'] . $title . $args['after_title'];
		endif; ?>
		<div id="website-profile">
		<?php if( $website_logo ) { ?><div class="website-logo"><a href="<?php echo home_url( '/' ) ; ?>"><img src="<?php echo $website_logo; ?>" alt="<?php echo $website_title; ?>"></a></div><?php } ?>
			<h4><a href="<?php echo home_url( '/' ) ; ?>"><?php echo $website_title; ?></a></h4>
				<div class="website-profile-text">
				<p><?php echo nl2br( $website_profile ); ?></p>
				</div>
				<?php if( $website_twitter || $website_facebook || $website_instagram || $website_line || $website_youtube || $website_contact ){ ?>
				<ul>
					<?php } ?>
					<?php if( $website_twitter ){ ?>
					<li class="widget-twitter"><a href="<?php echo $website_twitter ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
					<?php } ?>
					<?php if( $website_facebook ){ ?>
					<li class="widget-facebook"><a href="<?php echo $website_facebook ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
					<?php } ?>
					<?php if( $website_instagram ){ ?>
					<li class="widget-instagram"><a href="<?php echo $website_instagram ?>" target="_blank"><i class="fa fa-instagram"></i></a></li>
					<?php } ?>
					<?php if( $website_line ){ ?>
					<li class="widget-line"><a href="<?php echo $website_line ?>" target="_blank">LINE@</a></li>
					<?php } ?>
					<?php if( $website_youtube ){ ?>
					<li class="widget-youtube"><a href="<?php echo $website_youtube ?>"><i class="fa fa-youtube"></i></a></li>
					<?php } ?>
					<?php if( $website_contact ){ ?>
					<li class="widget-contact"><a href="<?php echo $website_contact ?>"><i class="fa fa-envelope-o"></i></a></li>
					<?php } ?>
					<?php if( $website_twitter || $website_facebook || $website_instagram || $website_line || $website_youtube || $website_contact ){ ?>
				</ul>
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
			'website_title' => '',
			'website_logo' => '',
			'website_profile' => '',
			'website_twitter' => '',
			'website_facebook' => '',
			'website_instagram' => '',
			'website_line' => '',
			'website_youtube' => '',
			'website_contact' => '',
		);

		$instance = wp_parse_args( (array) $instance, $defaults );
		$title = ( $instance['title'] );
		$website_title = esc_attr( $instance['website_title'] );
		$website_logo = esc_url_raw( $instance['website_logo'] ) ;
		$website_profile = esc_textarea($instance['website_profile'] );
		$website_twitter = esc_url( $instance['website_twitter'] );
		$website_facebook = esc_url( $instance['website_facebook'] );
		$website_instagram = esc_url( $instance['website_instagram'] );
		$website_line = esc_url( $instance['website_line'] );
		$website_youtube = esc_url( $instance['website_youtube'] );
		$website_contact = esc_url( $instance['website_contact'] );
		?>
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>">
			<?php _e( 'Title:','emanon' ); ?>
			</label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo $title; ?>">
		</p>
		
		<p>
			<label for="<?php echo $this->get_field_id( 'website_logo' ); ?>">
			<?php _e( 'Logo image URL:','emanon' ); ?>
			</label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'website_logo' ); ?>" name="<?php echo $this->get_field_name( 'website_logo' ); ?>" type="text" value="<?php echo $website_logo; ?>">
		</p>
		
		<p>
			<label for="<?php echo $this->get_field_id( 'website_title' ); ?>">
			<?php _e( 'Website title:','emanon' ); ?>
			</label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'website_title' ); ?>" name="<?php echo $this->get_field_name( 'website_title' ); ?>" type="text" value="<?php echo $website_title; ?>">
		</p>
		
		<p>
			<label for="<?php echo $this->get_field_id( 'website_profile' ); ?>">
			<?php _e( 'Profile text:','emanon' ); ?>
			</label>
			<textarea class="widefat" rows="3" colls="4" id="<?php echo $this->get_field_id( 'website_profile' ); ?>" name="<?php echo $this->get_field_name( 'website_profile') ; ?>"><?php echo $website_profile; ?></textarea>
		</p>
		
		<p>
			<label for="<?php echo $this->get_field_id( 'website_twitter' ); ?>">
			<?php _e( 'Twitter profile url:','emanon' ); ?>
			</label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'website_twitter' ); ?>" name="<?php echo $this->get_field_name( 'website_twitter' ); ?>" type="text" value="<?php echo $website_twitter; ?>">
		</p>
		
		<p>
			<label for="<?php echo $this->get_field_id( 'website_facebook' ); ?>">
			<?php _e( 'Facebook profile url:','emanon' ); ?>
			</label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'website_facebook' ); ?>" name="<?php echo $this->get_field_name( 'website_facebook' ); ?>" type="text" value="<?php echo $website_facebook; ?>">
		</p>
		
		<p>
			<label for="<?php echo $this->get_field_id( 'website_instagram' ); ?>">
			<?php _e( 'Instagram profile url:','emanon' ); ?>
			</label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'website_instagram' ); ?>" name="<?php echo $this->get_field_name( 'website_instagram' ); ?>" type="text" value="<?php echo $website_instagram; ?>">
		</p>
	
		<p>
			<label for="<?php echo $this->get_field_id( 'website_line' ); ?>">
			<?php _e( 'LINE@ profile url:','emanon' ); ?>
			</label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'website_line' ); ?>" name="<?php echo $this->get_field_name( 'website_line' ); ?>" type="text" value="<?php echo $website_line; ?>">
		</p>
	
		<p>
			<label for="<?php echo $this->get_field_id( 'website_youtube' ); ?>">
			<?php _e( 'YouTube profile url:','emanon' ); ?>
			</label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'website_youtube' ); ?>" name="<?php echo $this->get_field_name( 'website_youtube' ); ?>" type="text" value="<?php echo $website_youtube; ?>">
		</p>
	
		<p>
			<label for="<?php echo $this->get_field_id( 'website_contact' ); ?>">
			<?php _e( 'Contact url:','emanon' ); ?>
			</label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'website_contact' ); ?>" name="<?php echo $this->get_field_name( 'website_contact' ); ?>" type="text" value="<?php echo $website_contact; ?>">
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
		$instance['website_title'] = sanitize_text_field( $new_instance['website_title'] );
		$instance['website_logo'] = esc_url_raw( $new_instance['website_logo'] );
		$instance['website_profile'] = sanitize_text_field( $new_instance['website_profile'] );
		$instance['website_twitter'] = esc_url( $new_instance['website_twitter'] );
		$instance['website_facebook'] = esc_url( $new_instance['website_facebook'] );
		$instance['website_instagram'] = esc_url( $new_instance['website_instagram'] );
		$instance['website_line'] = esc_url( $new_instance['website_line'] );
		$instance['website_youtube'] = esc_url( $new_instance['website_youtube'] );
		$instance['website_contact'] = esc_url( $new_instance['website_contact'] );
		return $instance;
	}

} // class Website_Profile

// Widgetの登録
add_action( 'widgets_init', 'emanon_register_website_profile_widget' );
	function emanon_register_website_profile_widget() {
		register_widget( 'Website_Profile' );
}
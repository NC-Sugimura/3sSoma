<?php
/**
* Widet banner
* @package WordPress
* @subpackage Emanon_Pro
* @since Emanon Pro 1.3
*/

class Banner extends WP_Widget {

	/**
	 * ウィジェットを登録
	 */
	function __construct() {
		parent::__construct(
			'banner_widget', // Base ID
			__( '［E］Banner widget', 'emanon' ), // Name
			array( 'description' => __( 'Display banner widget.', 'emanon' ), ) // Args
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
		$banner_alt = empty( $instance['banner_alt'] ) ? '' : $instance['banner_alt'];
		$banner_image = empty( $instance['banner_image'] ) ? '' : $instance['banner_image'];
		$banner_url = empty( $instance['banner_url'] ) ? '' : $instance['banner_url'];
		$target_blank = empty( $instance['target_blank'] ) ? '' : $instance['target_blank'];

		echo $args['before_widget'];
		if ( ! empty( $title ) ) :
			echo $args['before_title'] . $title . $args['after_title'];
		endif; ?>
		<?php if( $banner_image && $target_blank ) { ?>
		<div class="text-center"><a href="<?php echo $banner_url ?>" target="_blank"><img src="<?php echo $banner_image; ?>" alt="<?php echo $banner_alt; ?>"></a></div>
		<?php } elseif( $banner_image && !$target_blank ) { ?>
		<div class="text-center"><a href="<?php echo $banner_url ?>"><img src="<?php echo $banner_image; ?>" alt="<?php echo $banner_alt; ?>"></a></div>
		<?php } ?>
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
			'banner_alt' => '',
			'banner_image' => '',
			'banner_url' => '',
			'target_blank' => '',
		);

		$instance = wp_parse_args( (array) $instance, $defaults );
		
		$title = ( $instance['title'] );
		$banner_image = esc_url_raw( $instance['banner_image'] );
		$banner_alt = esc_attr( $instance['banner_alt'] );
		$banner_url = esc_url( $instance['banner_url'] );
		$target_blank = $instance['target_blank'];
		?>
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>">
			<?php _e( 'Title:','emanon' ); ?>
			</label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo $title; ?>">
		</p>
	
		<p>
			<label for="<?php echo $this->get_field_id( 'banner_image' ); ?>">
			<?php _e( 'Upload image URL:','emanon' ); ?>
			</label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'banner_image' ); ?>" name="<?php echo $this->get_field_name( 'banner_image' ); ?>" type="text" value="<?php echo $banner_image; ?>">
		</p>
	
		<p>
			<label for="<?php echo $this->get_field_id( 'banner_alt' ); ?>">
			<?php _e( 'Image alt:','emanon' ); ?>
			</label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'banner_alt' ); ?>" name="<?php echo $this->get_field_name( 'banner_alt' ); ?>" type="text" value="<?php echo $banner_alt; ?>">
		</p>
	
		<p>
			<label for="<?php echo $this->get_field_id( 'banner_url' ); ?>">
			<?php _e( 'Banner url:','emanon' ); ?>
			</label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'banner_url' ); ?>" name="<?php echo $this->get_field_name( 'banner_url' ); ?>" type="text" value="<?php echo $banner_url; ?>">
		</p>
	
	<p>
		<label for="<?php echo $this->get_field_id( 'target_blank' ); ?>">
		</label>
		<input class="checkbox" type="checkbox" <?php checked( $target_blank ); ?> id="<?php echo $this->get_field_id( 'target_blank' ); ?>" name="<?php echo $this->get_field_name( 'target_blank' ); ?>" />	<?php _e( 'Target blank link','emanon' ); ?>
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
		$instance['banner_alt'] = sanitize_text_field( $new_instance['banner_alt'] );
		$instance['banner_image'] = esc_url_raw( $new_instance['banner_image'] );
		$instance['banner_url'] = esc_url( $new_instance['banner_url'] );
		$instance['target_blank'] = (bool) $new_instance['target_blank'];
	
		return $instance;
	}

} // class Banner

// Widgetの登録
add_action( 'widgets_init', 'emanon_register_banner_widget' );
	function emanon_register_banner_widget() {
		register_widget( 'Banner' );
}
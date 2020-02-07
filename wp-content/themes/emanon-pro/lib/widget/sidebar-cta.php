<?php
/**
* Widget sidebar cta
* @package WordPress
* @subpackage Emanon_Pro
* @since Emanon Pro 1.3
*/

class Sidebar_CTA extends WP_Widget {

	/**
	 * ウィジェットを登録
	 */
	function __construct() {
		parent::__construct(
			'categor_posts_widget', // Base ID
			__( '［E］Sidebar CTA widget', 'emanon' ), // Name
			array( 'description' => __( 'Display CTA', 'emanon' ), ) // Args
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
		$sidebar_cta_image = empty( $instance['sidebar_cta_image'] ) ? '' : $instance['sidebar_cta_image'];
		$sidebar_cta_title = empty( $instance['sidebar_cta_title'] ) ? '' : $instance['sidebar_cta_title'];
		$sidebar_cta_description = empty( $instance['sidebar_cta_description'] ) ? '' : $instance['sidebar_cta_description'];
		$sidebar_cta_btn_text = empty( $instance['sidebar_cta_btn_text'] ) ? '' : $instance['sidebar_cta_btn_text'];
		$sidebar_cta_btn_url = empty( $instance['sidebar_cta_btn_url'] ) ? '' : $instance['sidebar_cta_btn_url'];
	
		echo $args['before_widget'];
		if ( ! empty( $title ) ) :
			echo $args['before_title'] . $title . $args['after_title'];
		endif; ?>
		<div id="sidebar-cta">
		<?php if( $sidebar_cta_image ) { ?>
		<div><?php if( $sidebar_cta_btn_url ){ ?><a href="<?php echo $sidebar_cta_btn_url ?>"><?php } ?><img src="<?php echo $sidebar_cta_image; ?>" alt="<?php echo $sidebar_cta_title; ?>"><?php if( $sidebar_cta_btn_url ){ ?></a><?php } ?></div><?php } ?>
			<h4><?php echo $sidebar_cta_title; ?></h4>
				<p><?php echo nl2br( $sidebar_cta_description ); ?></p>
				<?php if( $sidebar_cta_btn_url ){ ?>
				<div class="sidebar-cta-btn">
				<span class="btn"><a href="<?php echo esc_url( $sidebar_cta_btn_url ); ?>" ><?php echo esc_html( $sidebar_cta_btn_text ); ?></a></span>
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
		'sidebar_cta_image' => '',
		'sidebar_cta_title' => '',
		'sidebar_cta_description' => '',
		'sidebar_cta_btn_text' => '',
		'sidebar_cta_btn_url' => '',
		);
		$instance = wp_parse_args( (array) $instance, $defaults );
		$title = ( $instance['title'] );
		$sidebar_cta_image = esc_url_raw( $instance['sidebar_cta_image'] );
		$sidebar_cta_title = esc_attr( $instance['sidebar_cta_title'] );
		$sidebar_cta_description = esc_textarea($instance['sidebar_cta_description'] );
		$sidebar_cta_btn_text = esc_attr( $instance['sidebar_cta_btn_text'] );
		$sidebar_cta_btn_url = esc_url( $instance['sidebar_cta_btn_url'] );
		?>
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>">
			<?php _e( 'Title:','emanon' ); ?>
			</label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo $title; ?>">
		</p>
		
		<p>
			<label for="<?php echo $this->get_field_id( 'sidebar_cta_imagee' ); ?>">
			<?php _e( 'Upload image URL:','emanon' ); ?>
			</label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'sidebar_cta_imagee' ); ?>" name="<?php echo $this->get_field_name( 'sidebar_cta_image' ); ?>" type="text" value="<?php echo $sidebar_cta_image; ?>">
		</p>
		
		<p>
			<label for="<?php echo $this->get_field_id( 'sidebar_cta_title' ); ?>">
			<?php _e( 'CTA Title:','emanon' ); ?>
			</label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'sidebar_cta_title' ); ?>" name="<?php echo $this->get_field_name( 'sidebar_cta_title' ); ?>" type="text" value="<?php echo $sidebar_cta_title; ?>">
		</p>
		
		<p>
			<label for="<?php echo $this->get_field_id( 'sidebar_cta_description' ); ?>">
			<?php _e( 'Description:','emanon' ); ?>
			</label>
			<textarea class="widefat" rows="3" colls="4" id="<?php echo $this->get_field_id( 'sidebar_cta_description' ); ?>" name="<?php echo $this->get_field_name( 'sidebar_cta_description' ); ?>"><?php echo $sidebar_cta_description; ?></textarea>
		</p>
		
		<p>
			<label for="<?php echo $this->get_field_id( 'sidebar_cta_btn_text' ); ?>">
			<?php _e( 'Btn text:','emanon' ); ?>
			</label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'sidebar_cta_btn_text' ); ?>" name="<?php echo $this->get_field_name( 'sidebar_cta_btn_text' ); ?>" type="text" value="<?php echo $sidebar_cta_btn_text; ?>">
		</p>
		
		<p>
			<label for="<?php echo $this->get_field_id( 'sidebar_cta_btn_url' ); ?>">
			<?php _e( 'Btn url:','emanon' ); ?>
			</label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'sidebar_cta_btn_url' ); ?>" name="<?php echo $this->get_field_name( 'sidebar_cta_btn_url' ); ?>" type="text" value="<?php echo $sidebar_cta_btn_url; ?>">
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
		$instance['sidebar_cta_image'] = esc_url_raw( $new_instance['sidebar_cta_image'] );
		$instance['sidebar_cta_title'] = sanitize_text_field( $new_instance['sidebar_cta_title'] );
		$instance['sidebar_cta_description'] = sanitize_text_field( $new_instance['sidebar_cta_description'] );
		$instance['sidebar_cta_btn_text'] = sanitize_text_field( $new_instance['sidebar_cta_btn_text'] );
		$instance['sidebar_cta_btn_url'] = esc_url( $new_instance['sidebar_cta_btn_url'] );

		return $instance;
	}

} // class Sidebar_CTA

// Widgetの登録
add_action( 'widgets_init', 'emanon_register_sidebar_cta_widget' );
	function emanon_register_sidebar_cta_widget() {
		register_widget( 'Sidebar_CTA' );
}
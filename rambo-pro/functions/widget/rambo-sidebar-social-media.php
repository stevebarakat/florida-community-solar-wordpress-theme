<?php
add_action( 'widgets_init','rambo_widget_socialmedia'); 
   function rambo_widget_socialmedia() { return   register_widget( 'rambo_sidbar_social_media_widget' ); }
/**
 * Adds rambo_sidbar_usefull_page_widget widget.
 */
class rambo_sidbar_social_media_widget extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'rambo_sidbar_social_media_widget', // Base ID
			__('Rambo Sidebar Social Media', 'rambo'), // Name
			array( 'description' => __( 'A list Social media list.', 'rambo' ), ) // Args
		);
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
		$title = apply_filters( 'widget_title', $instance['title'] );		
		
		echo $args['before_widget'];
		if ( ! empty( $title ) )
		echo $args['before_title'] . $title . $args['after_title']; ?>		
		<div class="sidebar_social">
			<?php $current_options = get_option('rambo_pro_theme_options'); ?>
			<a href="<?php if($current_options['social_media_facebook_link']!='') { echo esc_attr($current_options['social_media_facebook_link']); } else { echo "#"; } ?>" class="facebook">&nbsp;</a>
			<a href="<?php if($current_options['social_media_twitter_link']!='') { echo esc_attr($current_options['social_media_twitter_link']); } else { echo "#"; } ?>" class="twitter">&nbsp;</a>
			<a href="<?php if($current_options['social_media_linkedin_link']!='') { echo esc_attr($current_options['social_media_linkedin_link']); } else { echo "#"; } ?>" class="linked-in">&nbsp;</a>
			<a href="<?php if($current_options['social_media_google_plus']!='') { echo esc_attr($current_options['social_media_google_plus']); } else { echo "#"; } ?>" class="google_plus">&nbsp;</a>
		</div>
		<?php		
		echo $args['after_widget']; // end of sidbar usefull links widget		
	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
		if ( isset( $instance[ 'title' ] )) {
			$title = $instance[ 'title' ];			
		}
		else {
			$title = __( 'Social Media', 'rambo' );			
		}
		?>
		<p>
		<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:','rambo' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
		</p>			
		<?php 
	}

	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';		
		return $instance;
	}

} // class Foo_Widget
?>
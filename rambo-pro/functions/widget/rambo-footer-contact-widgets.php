<?php
add_action( 'widgets_init','rambo_footer_widget_contact'); 
   function rambo_footer_widget_contact() { return   register_widget( 'rambo_footer_contact_widget' ); }
/**
 * Adds rambo footer contact  widget.
 */
class rambo_footer_contact_widget extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'rambo_footer_contact_widget', // Base ID
			__('Rambo Footer Contact', 'rambo'), // Name
			array( 'description' => __( 'Your contact details display', 'rambo' ), ) // Args
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
		$Contact_address = apply_filters( 'widget_title', $instance['Contact_address'] );
		$Contact_phone_number = apply_filters( 'widget_title', $instance['Contact_phone_number'] );
		$Contact_email_address = apply_filters( 'widget_title', $instance['Contact_email_address'] );
		
		
		echo $args['before_widget'];
		if ( ! empty( $title ) )
		echo $args['before_title'] . $title . $args['after_title']; 
		//$current_options = get_option('rambo_pro_theme_options');
		?>
		<p class="widget_con_detail">
			<i class="fa fa-home icon-spacing"></i> 
			<?php if($Contact_address) { echo $Contact_address; } else { echo _('New York City, USA','rambo'); } ?>
		</p>
		<p class="widget_con_detail">
			<i class="fa fa-phone icon-spacing"></i> 
			<?php if($Contact_phone_number) { echo $Contact_phone_number; } else { echo _('420-300-3850','rambo'); } ?>
		</p>
		<p class="widget_con_detail">
			<i class="fa fa-envelope icon-spacing"></i> 
			<?php if($Contact_email_address) { echo $Contact_email_address; } else { echo _('info@rambotheme.com','rambo'); } ?>
			<!--<a href="mailto:someone@example.com?Subject=Hello%20again" target="_top"></a> -->
		</p>		
		<?php		
		echo $args['after_widget']; // end of footer usefull links widget		
	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
		if ( isset( $instance[ 'title' ] )) { $title = $instance[ 'title' ];	}
		else {	$title = __( 'Contact Info', 'rambo' );		}
		
		if ( isset( $instance[ 'Contact_address' ] )) { $Contact_address = $instance[ 'Contact_address' ];	}
		else {	$Contact_address = __( 'New York City, USA ', 'rambo' );		}
		
		if ( isset( $instance[ 'Contact_phone_number' ] )) { $Contact_phone_number = $instance[ 'Contact_phone_number' ];	}
		else {	$Contact_phone_number = __( '420-300-3850', 'rambo' );		}
		
		if ( isset( $instance[ 'Contact_email_address' ] )) { $Contact_email_address = $instance[ 'Contact_email_address' ];	}
		else {	$Contact_email_address = __( 'info@rambotheme.com ', 'rambo' );		}
		?>
		<p>
		<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:','rambo' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
		</p>
		<p>
		<label for="<?php echo $this->get_field_id( 'Contact_address' ); ?>"><?php _e( 'Contact address:','rambo' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'Contact_address' ); ?>" name="<?php echo $this->get_field_name( 'Contact_address' ); ?>" type="text" value="<?php echo $Contact_address; ?>" />
		</p>
		<p>	<label for="<?php echo $this->get_field_id( 'Contact_phone_number' ); ?>"><?php _e( 'Contact phone number:','rambo' ); ?></label> 
			<input class="widefat" id="<?php echo $this->get_field_id( 'Contact_phone_number' ); ?>" name="<?php echo $this->get_field_name( 'Contact_phone_number' ); ?>" type="text" value="<?php echo $Contact_phone_number ; ?>" />
		</p>
		<p>
		<label for="<?php echo $this->get_field_id( 'Contact_email_address' ); ?>"><?php _e( 'Contact email address:','rambo' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'Contact_email_address' ); ?>" name="<?php echo $this->get_field_name( 'Contact_email_address' ); ?>" type="text" value="<?php echo $Contact_email_address; ?>" />
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
		$instance['Contact_address'] = ( ! empty( $new_instance['Contact_address'] ) ) ? strip_tags( $new_instance['Contact_address'] ) : '';	
		$instance['Contact_phone_number'] = ( ! empty( $new_instance['Contact_phone_number'] ) ) ? strip_tags( $new_instance['Contact_phone_number'] ) : '';	
		$instance['Contact_email_address'] = ( ! empty( $new_instance['Contact_email_address'] ) ) ? strip_tags( $new_instance['Contact_email_address'] ) : '';	
		return $instance;
	}

} // class Foo_Widget
?>
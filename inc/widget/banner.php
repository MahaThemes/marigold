<?php
/**
 * Plugin Name: Banner Widget
 */

add_action( 'widgets_init', 'maha_banner_load_widget' );

function maha_banner_load_widget() {
	register_widget( 'maha_widget_banner' );
}

class maha_widget_banner extends WP_Widget {

	/**
	 * Widget setup.
	 */
	public function __construct() {
		parent::__construct(
			'maha_widget_banner', // Base ID
			__( wp_get_theme().': Banner (Image with Link)', 'marigold' ), // Name
			array( 'width' => 290, 'height' => 300, 'id_base' => 'maha_widget_banner' ), // Control
			array( 'classname' => 'maha-widget-banner', 'description' => __( 'Widget to display your Banner', 'marigold' ), ) // Setting
		);
	}

	/**
	 * How to display the widget on the screen.
	 */
	function widget( $args, $instance ) {
		extract( $args );

		/* Our variables from the widget settings. */
		$title = apply_filters('widget_title', $instance['title'] );
		$image = $instance['image'];
		$link = $instance['link'];
		$new_tab = $instance['new_tab'];
		
		/* Before widget (defined by themes). */
		echo $before_widget;

		/* Display the widget title if one was input (before and after defined by themes). */
		if ( $title )
			echo $before_title . $title . $after_title;

		?>
			
			<div class="banner-widget">
			
			<?php if($link) : ?>
				<a href="<?php echo $link; ?>" target="<?php if ($new_tab) : echo "_blank"; endif; ?>">
				<?php if($image) : ?>
					<img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_html($title); ?>" />
				<?php endif; ?>
				</a>
			<?php endif; ?>
			
			</div>
			
		<?php

		/* After widget (defined by themes). */
		echo $after_widget;
	}

	/**
	 * Update the widget settings.
	 */
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;

		/* Strip tags for title and name to remove HTML (important for text inputs). */
		$instance['title'] = strip_tags( $new_instance['title'] );
		$instance['image'] = strip_tags( $new_instance['image'] );
		$instance['new_tab'] = $new_instance['new_tab'];
		$instance['link'] = $new_instance['link'];

		return $instance;
	}


	function form( $instance ) {

		/* Set up some default widget settings. */
		$defaults = array( 'title' => 'Banner', 'image' => '', 'link' => '', 'new_tab' => false);
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>

		<!-- Widget Title: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>">Title:</label>
			<input id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" style="width:96%;" />
		</p>
		
		<!-- image url -->
		<p>
			<label for="<?php echo $this->get_field_id( 'image' ); ?>">Image URL:</label>
			<input id="<?php echo $this->get_field_id( 'image' ); ?>" name="<?php echo $this->get_field_name( 'image' ); ?>" value="<?php echo $instance['image']; ?>" style="width:96%;" /><br />
		</p>
		
		<!-- link -->
		<p>
			<label for="<?php echo $this->get_field_id( 'link' ); ?>">Link URL:</label>
			<input id="<?php echo $this->get_field_id( 'link' ); ?>" name="<?php echo $this->get_field_name( 'link' ); ?>" value="<?php echo $instance['link']; ?>" style="width:96%;" /><br />
		</p>

		<!-- new tab -->
		<p>
			<label for="<?php echo $this->get_field_id( 'new_tab' ); ?>">Open link in new Tab:</label>
			<input type="checkbox" id="<?php echo $this->get_field_id( 'new_tab' ); ?>" name="<?php echo $this->get_field_name( 'new_tab' ); ?>" <?php checked( (bool) $instance['new_tab'], true ); ?> />
		</p>

	<?php
	}
}
?>
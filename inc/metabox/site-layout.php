<?php
/**
 * Maha Meta Boxes
 */

add_action('add_meta_boxes', 'marigold_add_custom_box');
/**
 * Add Meta Boxes.
 * Add Meta box in page and post post types.
 */
function marigold_add_custom_box()
{

	// For Post
	add_meta_box(
		'post-siderbar-layout',
		__('Post Layout', 'marigold'),
		'marigold_sidebar_layout',
		'post',
		'side'
	);

	// For Page
	add_meta_box('page-siderbar-layout',
		__('Page Layout', 'marigold'),
		'marigold_sidebar_layout',
		'page',
		'side'
	);
	
}

/**
 * Displays metabox to for sidebar layout
 */
function marigold_sidebar_layout()
{
	global $sidebar_position, $post;
	// Use nonce for verification
	

	wp_nonce_field(basename(__FILE__), 'custom_meta_box_nonce'); ?>

	<p class="post-attributes-label-wrapper"><label class="post-attributes-label" for="post_layout"><?php _e('Template','marigold')?></label></p>
	<?php
	$layout = get_post_meta($post->ID, 'post_layout', true);?>                        
	<select name="post_layout" id="post_layout">
		<?php foreach( $sidebar_position as $key=>$val ) { ?>
			<option value="<?php echo $key; ?>" <?php selected( $layout, $key ); ?> ><?php echo $val; ?></option><?php
		}?>
	</select>
	<?php
}


add_action('save_post', 'marigold_save_custom_meta');
/**
 * save the custom metabox data
 * @hooked to save_post hook
 */
function marigold_save_custom_meta($post_id)
{
	global $post;
	
	// Verify the nonce before proceeding.
	if (!isset($_POST['custom_meta_box_nonce']) || !wp_verify_nonce($_POST['custom_meta_box_nonce'], basename(__FILE__)))
		return;
	
	// Stop WP from clearing custom fields on autosave
	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
		return;
	
	if ('page' == $_POST['post_type']) {
		if (!current_user_can('edit_page', $post_id))
			return $post_id;
	} elseif (!current_user_can('edit_post', $post_id)) {
		return $post_id;
	}

	if ( $_POST['post_layout'] ) {
		update_post_meta($post_id, 'post_layout', esc_html( $_POST['post_layout'] ));
	} else{
		delete_post_meta($post_id, 'post_layout');
	}
}
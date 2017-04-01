<?php
/**
 * Actions required
 */
wp_enqueue_style( 'plugin-install' );
wp_enqueue_script( 'plugin-install' );
wp_enqueue_script( 'updates' );
?>

<div class="feature-section action-required demo-import-boxed" id="plugin-filter">

	<?php
	global $maha_required_actions;
	if ( ! empty( $maha_required_actions ) ):
		/* maha_show_required_actions is an array of true/false for each required action that was dismissed */
		$maha_show_required_actions = get_option( "maha_show_required_actions" );
		foreach ( $maha_required_actions as $maha_required_action_key => $maha_required_action_value ):
			if ( @$maha_show_required_actions[ $maha_required_action_value['id'] ] === false ) {
				continue;
			}
			if ( @$maha_required_action_value['check'] ) {
				continue;
			}
			?>
			<div class="maha-action-required-box">
				<span class="dashicons dashicons-no-alt maha-dismiss-required-action"
				      id="<?php echo $maha_required_action_value['id']; ?>"></span>
				<h3><?php if ( ! empty( $maha_required_action_value['title'] ) ): echo $maha_required_action_value['title']; endif; ?></h3>
				<p>
					<?php if ( ! empty( $maha_required_action_value['description'] ) ): echo $maha_required_action_value['description']; endif; ?>
					<?php if ( ! empty( $maha_required_action_value['help'] ) ): echo '<br/>' . $maha_required_action_value['help']; endif; ?>
				</p>
				<?php
				if ( ! empty( $maha_required_action_value['plugin_slug'] ) ) {
					$active = $this->check_active( $maha_required_action_value['plugin_slug'] );
					$url    = $this->create_action_link( $active['needs'], $maha_required_action_value['plugin_slug'] );
					$label  = '';
					switch ( $active['needs'] ) {
						case 'install':
							$class = 'install-now button';
							$label = __( 'Install', 'marigold' );
							break;
						case 'activate':
							$class = 'activate-now button button-primary';
							$label = __( 'Activate', 'marigold' );
							break;
						case 'deactivate':
							$class = 'deactivate-now button';
							$label = __( 'Deactivate', 'marigold' );
							break;
					}
					?>
					<p class="plugin-card-<?php echo esc_attr( $maha_required_action_value['plugin_slug'] ) ?> action_button <?php echo ( $active['needs'] !== 'install' && $active['status'] ) ? 'active' : '' ?>">
						<a data-slug="<?php echo esc_attr( $maha_required_action_value['plugin_slug'] ) ?>"
						   class="<?php echo $class; ?>"
						   href="<?php echo esc_url( $url ) ?>"> <?php echo $label ?> </a>
					</p>
					<?php
				};
				?>
			</div>
			<?php
		endforeach;
	endif;
	$nr_actions_required = 0;
	/* get number of required actions */
	if ( get_option( 'maha_show_required_actions' ) ):
		$maha_show_required_actions = get_option( 'maha_show_required_actions' );
	else:
		$maha_show_required_actions = array();
	endif;
	if ( ! empty( $maha_required_actions ) ):
		foreach ( $maha_required_actions as $maha_required_action_value ):
			if ( ( ! isset( $maha_required_action_value['check'] ) || ( isset( $maha_required_action_value['check'] ) && ( $maha_required_action_value['check'] == false ) ) ) && ( ( isset( $maha_show_required_actions[ $maha_required_action_value['id'] ] ) && ( $maha_show_required_actions[ $maha_required_action_value['id'] ] == true ) ) || ! isset( $maha_show_required_actions[ $maha_required_action_value['id'] ] ) ) ) :
				$nr_actions_required ++;
			endif;
		endforeach;
	endif;
	if ( $nr_actions_required == 0 ):
		echo '<span class="hooray">' . __( 'Hooray! There are no required actions for you right now.', 'marigold' ) . '</span>';
	endif;
	?>

</div>
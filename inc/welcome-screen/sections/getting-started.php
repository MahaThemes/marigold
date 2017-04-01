<?php
/**
 * Getting started template
 */
$customizer_url = admin_url() . 'customize.php';
$count = $this->count_actions();
?>

<div class="feature-section three-col">
	<div class="col">
		<h3><?php esc_html_e( 'Step 1 - Implement recommended actions', 'marigold' ); ?></h3>
		<p><?php esc_html_e( 'We\'ve compiled a list of steps for you, to make sure the experience using one of our products is very easy to follow.', 'marigold' ); ?></p>
		<?php if ( $count == 0 ) { ?>
			<p><span class="dashicons dashicons-yes"></span>
				<a href="<?php echo admin_url( 'themes.php?page=activel-welcome&tab=recommended_actions' ); ?>"><?php esc_html_e( 'No recommended actions left to perform', 'marigold' ); ?></a>
			</p>
		<?php } else { ?>
			<p><a href="<?php echo admin_url( 'themes.php?page=marigold-welcome&tab=recommended_actions' ); ?>"><?php esc_html_e( 'Check recommended actions', 'marigold' ); ?></a>
			</p> <?php
		}; ?>
	</div><!--/.col-->

	<div class="col">
		<h3><?php esc_html_e( 'Step 2 - Check our documentation', 'marigold' ); ?></h3>
		<p><?php esc_html_e( 'Even if you\'re a long-time WordPress user, we still believe you should give our documentation a very quick Read.', 'marigold' ) ?></p>
		<p><a target="_blank" href="<?php echo esc_url( 'https://mahathemes.com/documentation-marigold/' ); ?>"><?php esc_html_e( 'Full documentation', 'marigold' ); ?></a>
		</p>
	</div><!--/.col-->

	<div class="col">
		<h3><?php esc_html_e( 'Step 3 - Customize everything easily', 'marigold' ); ?></h3>
		<p><?php esc_html_e( 'Using the WordPress Customizer you can easily customize every aspect of the theme.', 'marigold' ); ?></p>
		<p><a target="_blank" href="<?php echo esc_url( $customizer_url ); ?>" class="button button-primary"><?php esc_html_e( 'Go to Customizer', 'marigold' ); ?></a>
		</p>
	</div><!--/.col-->
</div><!--/.feature-section-->
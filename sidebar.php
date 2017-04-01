<aside id="area-side" <?php if( marigold_mod('mgmod_sidebar_smart') == true ) : ?>class="smart-scroll"<?php endif; ?>>
	<div class="theiaStickySidebar">
	<?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('Sidebar') ) ?>
	</div>
</aside>
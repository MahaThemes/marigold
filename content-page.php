<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<div class="post-head">						
		<h1><?php the_title(); ?></h1>
	</div>
	
	<div class="post-img">
		<a href="<?php echo get_permalink() ?>"><?php the_post_thumbnail('full-thumb'); ?></a>
	</div>
	
	<div class="post-entry">
		<?php the_content(__('<span class="more-button">Continue Reading</span>', 'marigold')); ?>
		<?php wp_link_pages(); ?>
	</div>
	
	<?php if(!marigold_mod('mgmod_page_metas') && !comments_open()) : else :?>
	<div class="post-meta">
		<div class="meta-comments">
			<?php comments_popup_link( '0 Comments', '1 Comments', '% Comments', '', ''); ?>
		</div>
		
		<?php if(marigold_mod('mgmod_page_metas')) : ?>
		<div class="meta-share">
			<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>"><i class="mf-facebook"></i><?php _e( 'Facebook', 'marigold' ); ?></a>
			<a target="_blank" href="https://twitter.com/intent/tweet?text=Check%20out%20this%20article:%20<?php print maha_html_decode( get_the_title() ); ?>&url=<?php echo urlencode(the_permalink()); ?>"><i class="mf-twitter"></i><?php _e( 'Twitter', 'marigold' ); ?></a>
			<?php $pin_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID)); ?>
			<a data-pin-do="none" target="_blank" href="https://pinterest.com/pin/create/button/?url=<?php echo urlencode(the_permalink()); ?>&media=<?php echo esc_url($pin_image); ?>&description=<?php print maha_html_decode( get_the_title() ); ?>"><i class="mf-pinterest"></i><?php _e( 'Pinterest', 'marigold' ); ?></a>
			<a target="_blank" href="https://plus.google.com/share?url=<?php the_permalink(); ?>"><i class="mf-googleplus"></i><?php _e( 'Google+', 'marigold' ); ?></a>
		</div>
		<?php endif; ?>
	</div>
	<?php endif; ?>
	
	<?php comments_template( '', true );  ?>
	
</article>
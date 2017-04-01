<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<div class="post-head">
		
		<?php if(!marigold_mod('mgmod_post_cat')) : ?>
		<span class="cat"><?php maha_category(' '); ?></span>
		<?php endif; ?>
		
		<?php if(is_single()) : ?>
			<h1><?php the_title(); ?></h1>
		<?php else : ?>
			<h2><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
		<?php endif; ?>
		
		<div class="metas">
			<?php if(!marigold_mod('mgmod_post_author')) : ?>
			<span class="author"><?php echo get_the_author(); ?></span>
			<?php endif; ?>
			<?php if(!marigold_mod('mgmod_post_date')) : ?>
			<span class="date"><?php the_time( get_option('date_format') ); ?></span>
			<?php endif; ?>
			<?php if(!marigold_mod('mgmod_post_comment_link')) : ?>		
			<span class="comments"><?php comments_popup_link( '0 Comments', '1 Comment', '% Comments', '', ''); ?></span>
			<?php endif; ?>
		</div>
		
	</div>
	
	<!-- POST TYPE -->
	<?php if(has_post_format('gallery')) : ?>
	
		<?php $images = get_post_meta( $post->ID, '_format_gallery_images', true ); ?>
		
		<?php if($images) : ?>
		<div class="post-img">
			<ul class="maha-gallery bxslider">
			<?php foreach($images as $image) : ?>
				
				<?php $the_image = wp_get_attachment_image_src( $image, 'full-thumb' ); ?> 
				<?php $the_caption = get_post_field('post_excerpt', $image); ?>
				<li><img src="<?php echo esc_url($the_image[0]); ?>" <?php if($the_caption) : ?>title="<?php echo $the_caption; ?>"<?php endif; ?> /></li>
				
			<?php endforeach; ?>
			</ul>
		</div>
		<?php endif; ?>
	
	<?php elseif(has_post_format('video')) : ?>
	
		<div class="post-img">
			<?php $mgmod_video = get_post_meta( $post->ID, '_format_video_embed', true ); ?>
			<?php if(wp_oembed_get( $mgmod_video )) : ?>
				<?php echo wp_oembed_get($mgmod_video); ?>
			<?php else : ?>
				<?php echo $mgmod_video; ?>
			<?php endif; ?>
		</div>
	
	<?php elseif(has_post_format('audio')) : ?>
	
		<div class="post-img audio">
			<?php $mgmod_audio = get_post_meta( $post->ID, '_format_audio_embed', true ); ?>
			<?php if(wp_oembed_get( $mgmod_audio )) : ?>
				<?php echo wp_oembed_get($mgmod_audio); ?>
			<?php else : ?>
				<?php echo $mgmod_audio; ?>
			<?php endif; ?>
		</div>
	
	<?php else : ?>
		
		<?php if(has_post_thumbnail()) : ?>
		<?php if(!marigold_mod('mgmod_post_thumb')) : ?>
		<div class="post-img">
			<a href="<?php echo get_permalink() ?>"><?php the_post_thumbnail('full-thumb'); ?></a>
		</div>
		<?php endif; ?>
		<?php endif; ?>
		
	<?php endif; ?>
	
	<div class="post-entry">
		
		<?php if(is_single()) : ?>
		
			<?php the_content(__('<span class="more-button">Continue Reading</span>', 'marigold')); ?>
			
		<?php else : ?>
		
			<?php if(marigold_mod('mgmod_post_summary') == 'excerpt') : ?>
				
				<p><?php echo maha_words_limit(get_the_excerpt(), 80); ?>&hellip;</p>
				<p><a href="<?php echo get_permalink() ?>" class="more-link"><span class="more-button"><?php _e( 'Continue Reading', 'marigold' ); ?></span></a>
				
			<?php else : ?>
				
				<?php the_content(__('<span class="more-button">Continue Reading</span>', 'marigold')); ?>
				
			<?php endif; ?>
		
		<?php endif; ?>
		
		
		<?php wp_link_pages(); ?>
		
		<?php if(!marigold_mod('mgmod_post_tags')) : ?>
		<?php if(is_single()) : ?>
		<?php if(has_tag()) : ?>
			<div class="post-tags">
				<?php the_tags("",""); ?>
			</div>
		<?php endif; ?>	
		<?php endif; ?>
		<?php endif; ?>
						
	</div>
	
	<?php if(marigold_mod('mgmod_post_comment_link') && marigold_mod('mgmod_post_share')) : else : ?>	
	<div class="post-meta">
		<?php if(!marigold_mod('mgmod_post_share')) : ?>
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
	
	<?php if(!marigold_mod('mgmod_post_author')) : ?>
	<?php if(is_single()) : ?>
		<?php get_template_part('inc/template/author'); ?>
	<?php endif; ?>
	<?php endif; ?>
	
	<?php if(!marigold_mod('mgmod_post_related')) : ?>
	<?php if(is_single()) : ?>
		<?php get_template_part('inc/template/related'); ?>
	<?php endif; ?>
	<?php endif; ?>
	
	<?php comments_template( '', true );  ?>
	
</article>
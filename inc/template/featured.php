<div class="maha-featured">
	<div class="container">
		<ul class="maha-slider bxslider">
			<?php
			$featured_cat = marigold_mod( 'mgmod_featured_cat' );
			$number = marigold_mod( 'mgmod_featured_slider_slides' );
			?>
			
			<?php $feat_query = new WP_Query( array( 'cat' => $featured_cat, 'showposts' => $number ) ); ?>
			<?php if ($feat_query->have_posts()) : while ($feat_query->have_posts()) : $feat_query->the_post(); ?>

			<li>
			<div class="loop-feat" style="background-image:url(<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full-thumb' ); echo $image[0]; ?>);">
				<div class="fi-wrap">
					<div class="fi-inner">
						<div class="post-head">
							<?php if(!marigold_mod('mgmod_post_cat')) : ?>
							<span class="cat"><?php maha_category(' '); ?></span>
							<?php endif; ?>
							<h2><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
							<a href="<?php echo get_permalink(); ?>" class="read-more"><?php _e( 'Read More', 'marigold' ); ?></a>
						</div>				
					</div>
				</div>
			</div>
			</li>
			
			<?php endwhile; endif; ?>
		</ul>
	</div>
</div>
<div class="post-author">	
	<div class="author-img">
		<?php echo get_avatar( get_the_author_meta('email'), '100' ); ?>
	</div>
	<div class="author-content">
		<h5><?php the_author_posts_link(); ?></h5>
		<p><?php the_author_meta('description'); ?></p>
		<div class="author-social-wrap">
			<?php if(get_the_author_meta('facebook')) : ?><a target="_blank" class="author-social" href="http://facebook.com/<?php echo the_author_meta('facebook'); ?>"><i class="mf-facebook"></i></a><?php endif; ?>
			<?php if(get_the_author_meta('twitter')) : ?><a target="_blank" class="author-social" href="http://twitter.com/<?php echo the_author_meta('twitter'); ?>"><i class="mf-twitter"></i></a><?php endif; ?>
			<?php if(get_the_author_meta('instagram')) : ?><a target="_blank" class="author-social" href="http://instagram.com/<?php echo the_author_meta('instagram'); ?>"><i class="mf-instagram"></i></a><?php endif; ?>
			<?php if(get_the_author_meta('google')) : ?><a target="_blank" class="author-social" href="http://plus.google.com/<?php echo the_author_meta('google'); ?>?rel=author"><i class="mf-googleplus"></i></a><?php endif; ?>
			<?php if(get_the_author_meta('pinterest')) : ?><a target="_blank" class="author-social" href="http://pinterest.com/<?php echo the_author_meta('pinterest'); ?>"><i class="mf-pinterest"></i></a><?php endif; ?>
			<?php if(get_the_author_meta('tumblr')) : ?><a target="_blank" class="author-social" href="http://<?php echo the_author_meta('tumblr'); ?>.tumblr.com/"><i class="mf-tumblr"></i></a><?php endif; ?>
		</div>
	</div>
</div>
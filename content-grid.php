<li>
<article id="post-<?php the_ID(); ?>" <?php post_class('loop-grid'); ?>>

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
		<?php if(!marigold_mod('mgmod_post_date')) : ?>
		<span class="date"><?php the_time( get_option('date_format') ); ?></span>
		<?php endif; ?>
		</div>
	</div>
	
	<?php if(has_post_thumbnail()) : ?>
	<div class="post-img">
		<a href="<?php echo get_permalink() ?>"><?php the_post_thumbnail('misc-thumb'); ?></a>
	</div>
	<?php endif; ?>
	
	<div class="post-entry">
		<p><?php echo maha_words_limit(get_the_excerpt(), 34); ?>&hellip;</p>
	</div>
	
</article>
</li>
<?php get_header(); ?>
<?php
// Modification Layout
$mgmod_archive_layout = marigold_mod('mgmod_archive_layout');
?>
<div class="archive-box">
	<div class="ab-wrap">
		<span><?php _e( 'Search results for', 'marigold' ); ?></span>
		<h1><?php printf( __( '%s', 'marigold' ), get_search_query() ); ?></h1>
	</div>
</div>

<div class="container">
	<div id="content" class="<?php echo marigold_mod('mgmod_sidebar_archive'); ?>">
	
		<div id="area-main" <?php if(marigold_mod('mgmod_sidebar_archive') == 'full-width') : echo 'class="full-width"'; endif; ?>>
			<?php if($mgmod_archive_layout == 'grid' || $mgmod_archive_layout == 'full_grid') : ?><ul class="grid-wrapper"><?php endif; ?>
			
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				
				<?php if($mgmod_archive_layout == 'grid') : ?>
				
					<?php get_template_part('content', 'grid'); ?>
				
				<?php elseif($mgmod_archive_layout == 'list') : ?>
				
					<?php get_template_part('content', 'list'); ?>
					
				<?php elseif($mgmod_archive_layout == 'full_list') : ?>
				
					<?php if( $wp_query->current_post == 0 && !is_paged() ) : ?>
						<?php get_template_part('content'); ?>
					<?php else : ?>
						<?php get_template_part('content', 'list'); ?>
					<?php endif; ?>
				
				<?php elseif($mgmod_archive_layout == 'full_grid') : ?>
				
					<?php if( $wp_query->current_post == 0 && !is_paged() ) : ?>
						<?php get_template_part('content'); ?>
					<?php else : ?>
						<?php get_template_part('content', 'grid'); ?>
					<?php endif; ?>
				
				<?php else : ?>
					
					<?php get_template_part('content'); ?>
					
				<?php endif; ?>	
					
			<?php endwhile; ?>
			
			<?php if($mgmod_archive_layout == 'grid' || $mgmod_archive_layout == 'full_grid') : ?></ul><?php endif; ?>
			
				<?php omaha_pagination(); ?>
			
			<?php else : ?>
				
				<p class="not-found"><?php _e( 'Sorry, no posts were found. Try searching for something else.', 'marigold' ); ?></p>
			
			<?php endif; ?>
		</div>

		<?php if(marigold_mod('mgmod_sidebar_archive') != 'full-width') : ?><?php get_sidebar(); ?><?php endif; ?>

<?php get_footer(); ?>
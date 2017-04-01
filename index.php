<?php get_header(); ?>
<?php
// Featured Area
if(marigold_mod( 'mgmod_featured_slider' ) == true ) :
	get_template_part('inc/template/featured');
endif;

// Modification Home Layout
$mgmod_home_layout = marigold_mod('mgmod_home_layout');

// Demo Home Layout -----------------------------------
if ( ! empty( $_GET ) ) { $mgmod_home_layout = $_GET['home_layout']; }
?>
<div class="container">
	
	<div id="content" class="<?php echo marigold_mod('mgmod_sidebar_homepage'); ?>">
		<div id="area-main" <?php if(marigold_mod('mgmod_sidebar_homepage') == 'full-width') : echo 'class="full-width"'; endif; ?>>
			<?php if( $mgmod_home_layout == 'grid' || $mgmod_home_layout == 'full_grid') : ?><ul class="grid-wrapper"><?php endif; ?>
			
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				
				<?php if($mgmod_home_layout == 'grid') : ?>
				
					<?php get_template_part('content', 'grid'); ?>
				
				<?php elseif($mgmod_home_layout == 'list') : ?>
				
					<?php get_template_part('content', 'list'); ?>
					
				<?php elseif($mgmod_home_layout == 'full_list') : ?>
				
					<?php if( $wp_query->current_post == 0 && !is_paged() ) : ?>
						<?php get_template_part('content'); ?>
					<?php else : ?>
						<?php get_template_part('content', 'list'); ?>
					<?php endif; ?>
				
				<?php elseif($mgmod_home_layout == 'full_grid') : ?>
				
					<?php if( $wp_query->current_post == 0 && !is_paged() ) : ?>
						<?php get_template_part('content'); ?>
					<?php else : ?>
						<?php get_template_part('content', 'grid'); ?>
					<?php endif; ?>
				
				<?php else : ?>
					
					<?php get_template_part('content'); ?>
					
				<?php endif; ?>	
					
			<?php endwhile; ?>
			
			<?php if($mgmod_home_layout == 'grid' || $mgmod_home_layout == 'full_grid') : ?></ul><?php endif; ?>
			
				<?php omaha_pagination(); ?>
			
			<?php endif; ?>
		</div>

		<?php if(marigold_mod('mgmod_sidebar_homepage') != 'full-width') : ?><?php get_sidebar(); ?><?php endif; ?>
			
<?php get_footer(); ?>
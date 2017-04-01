<?php get_header(); ?>
<?php
// Post Layout Options
$post_layout = 'side-right';
if( is_singular() && ( get_post_meta($post->ID, 'post_layout', true) ) ){
	$post_layout = get_post_meta($post->ID, 'post_layout', true);
}
?>
<div class="container">
	<div id="content" class="<?php echo $post_layout; ?>">
	
		<div id="area-main" <?php if($post_layout == 'full-width') : echo 'class="full-width"'; endif; ?>>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php get_template_part('content'); ?>
			<?php endwhile; ?>
			<?php endif; ?>
		</div>

		<?php if($post_layout != 'full-width') : ?><?php get_sidebar(); ?><?php endif; ?>

<?php get_footer(); ?>
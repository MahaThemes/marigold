		<!-- END CONTENT -->
		</div>
		
	<!-- END CONTAINER -->
	</div>
	
	<!-- FOOTER -->
	<div id="instagram-footer"><?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('Instagram Footer') ) ?></div>
	<div id="footer">
		<div class="container">
			<?php if(marigold_mod('mgmod_footer_logo_switch')) : ?>
				<div id="footer-logo">
				<?php if(!marigold_mod('mgmod_footer_logo_img')) : ?>
					<a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/static/img/footer-logo.png" alt="<?php bloginfo( 'name' ); ?>" /></a>
				<?php else : ?>
					<a href="<?php echo home_url(); ?>"><img src="<?php echo esc_url(marigold_mod('mgmod_footer_logo_img')); ?>" alt="<?php bloginfo( 'name' ); ?>" /></a>
				<?php endif; ?>
				</div>
			<?php endif; ?>

			<div class="copy-social">
				<div class="copyright"><p><?php echo wp_kses_post(marigold_mod('mgmod_footer_copyright')); ?> Theme by <a target="_blank" href="https://mahathemes.com">MahaThemes</a> Powered by <a target="_blank" href="https://wordpress.org">Wordpress</a></p></div>
				
				<?php if(marigold_mod('mgmod_footer_social')) : ?>
				<div class="footer-social social-link">
					<?php if(marigold_mod('mgmod_facebook') != '' ) { ?><a href="http://facebook.com/<?php echo esc_html(marigold_mod('mgmod_facebook')); ?>" target="_blank"><i class="mf-facebook"></i></a><?php } ?>
					<?php if(marigold_mod('mgmod_twitter') != '' ) { ?><a href="http://twitter.com/<?php echo esc_html(marigold_mod('mgmod_twitter')); ?>" target="_blank"><i class="mf-twitter"></i></a><?php } ?>
					<?php if(marigold_mod('mgmod_instagram') != '' ) { ?><a href="http://instagram.com/<?php echo esc_html(marigold_mod('mgmod_instagram')); ?>" target="_blank"><i class="mf-instagram"></i></a><?php } ?>
					<?php if(marigold_mod('mgmod_pinterest') != '' ) { ?><a href="http://pinterest.com/<?php echo esc_html(marigold_mod('mgmod_pinterest')); ?>" target="_blank"><i class="mf-pinterest"></i></a><?php } ?>
					<?php if(marigold_mod('mgmod_bloglovin') != '' ) { ?><a href="http://bloglovin.com/<?php echo esc_html(marigold_mod('mgmod_bloglovin')); ?>" target="_blank"><i class="mf-bloglovin"></i></a><?php } ?>
					<?php if(marigold_mod('mgmod_google') != '' ) { ?><a href="http://plus.google.com/<?php echo esc_html(marigold_mod('mgmod_google')); ?>" target="_blank"><i class="mf-googleplus"></i></a><?php } ?>
					<?php if(marigold_mod('mgmod_tumblr') != '' ) { ?><a href="http://<?php echo esc_html(marigold_mod('mgmod_tumblr')); ?>.tumblr.com/" target="_blank"><i class="mf-tumblr"></i></a><?php } ?>
					<?php if(marigold_mod('mgmod_youtube') != '' ) { ?><a href="http://youtube.com/<?php echo esc_html(marigold_mod('mgmod_youtube')); ?>" target="_blank"><i class="mf-youtube"></i></a><?php } ?>
					<?php if(marigold_mod('mgmod_dribbble') != '' ) { ?><a href="http://dribbble.com/<?php echo esc_html(marigold_mod('mgmod_dribbble')); ?>" target="_blank"><i class="mf-dribbble"></i></a><?php } ?>
					<?php if(marigold_mod('mgmod_soundcloud') != '' ) { ?><a href="http://soundcloud.com/<?php echo esc_html(marigold_mod('mgmod_soundcloud')); ?>" target="_blank"><i class="mf-soundcloud"></i></a><?php } ?>
					<?php if(marigold_mod('mgmod_vimeo') != '' ) { ?><a href="http://vimeo.com/<?php echo esc_html(marigold_mod('mgmod_vimeo')); ?>" target="_blank"><i class="mf-vimeo"></i></a><?php } ?>
					<?php if(marigold_mod('mgmod_linkedin') != '' ) { ?><a href="<?php echo esc_html(marigold_mod('mgmod_linkedin')); ?>" target="_blank"><i class="mf-linkedin"></i></a><?php } ?>
					<?php if(marigold_mod('mgmod_snapchat') != '' ) { ?><a href="https://snapchat.com/add/<?php echo esc_html(marigold_mod('mgmod_snapchat')); ?>" target="_blank"><i class="mf-snapchat"></i></a><?php } ?>
					<?php if(marigold_mod('mgmod_rss') != '' ) { ?><a href="<?php echo esc_url(marigold_mod('mgmod_rss')); ?>" target="_blank"><i class="mf-rss"></i></a><?php } ?>
				</div>
				<?php endif; ?>
			</div>
		</div>
	</div>

	<!-- SEARCH BOX -->
	<div id="search-overlay">
		<div class="close-search">
			<span class="stripe2"></span>
		</div>
		<div class="container">
			<?php get_search_form(); ?>
		</div>
	</div>
	
	<?php wp_footer(); ?>
</body>
</html>
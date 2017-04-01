<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="profile" href="http://gmpg.org/xfn/11" />
	
	<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

	<!-- NOTIF TOP -->
	<?php if ( marigold_mod('mgmod_notif_top') == true ) : ?>
	<div id="notif-top">
		<a <?php if ( marigold_mod('mgmod_notif_newtab') == true ) : echo 'target="_blank"'; endif; ?> href="<?php echo marigold_mod('mgmod_notif_link'); ?>"><?php echo marigold_mod('mgmod_notif_text'); ?></a>
	</div>
	<?php endif; ?>

	<!-- NAV TOP -->
	<div id="top-nav">
		<div class="container">
			<div class="top-menu">
				<?php wp_nav_menu( array( 'container' => false, 'theme_location' => 'main-menu', 'menu_class' => 'menu' ) ); ?>
			</div>
			
			<div class="mobile-nav"></div>
			
			<div class="social-top social-link">
				<?php if( marigold_mod('mgmod_navtop_social_check') == true ) : ?>
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
				<?php endif; ?>
				<?php if( marigold_mod('mgmod_navtop_search_check') == true ) : ?><a class="toggle-search"><i class="mf-search"></i></a><?php endif; ?>
			</div>
		</div>
	</div>
	<!-- END NAV TOP -->
	
	<!-- HEADER -->
	<header id="header">
		<div id="logo">
			<?php if(!marigold_mod('mgmod_logo')) : ?>
				<?php if(is_front_page()) : ?>
					<h1><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/static/img/logo.png" alt="<?php bloginfo( 'name' ); ?>" /></a></h1>
				<?php else : ?>
					<h2><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/static/img/logo.png" alt="<?php bloginfo( 'name' ); ?>" /></a></h2>
				<?php endif; ?>
			<?php else : ?>
				<?php if(is_front_page()) : ?>
					<h1><a href="<?php echo home_url(); ?>"><img src="<?php echo esc_url(marigold_mod('mgmod_logo')); ?>" alt="<?php bloginfo( 'name' ); ?>" /></a></h1>
				<?php else : ?>
					<h2><a href="<?php echo home_url(); ?>"><img src="<?php echo esc_url(marigold_mod('mgmod_logo')); ?>" alt="<?php bloginfo( 'name' ); ?>" /></a></h2>
				<?php endif; ?>
			<?php endif; ?>
		</div>
	</header>
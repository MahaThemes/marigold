<?php
//=====================================================
// Customizer - Add CSS
//=====================================================
function omaha_generate_css() {
    ?>
    <style type="text/css">
		#notif-top{background:<?php echo marigold_mod('mgmod_notif_bg'); ?>;}
		#notif-top a{color:<?php echo marigold_mod('mgmod_notif_txt_color'); ?>;}
		#logo { padding:<?php echo marigold_mod( 'mgmod_header_padding_top' ); ?>px 0 <?php echo marigold_mod( 'mgmod_header_padding_bottom' ); ?>px; }
		body{background:<?php echo marigold_mod('mgmod_bg'); ?>;}
		<?php if(marigold_mod( 'mgmod_navtop_bg' )) : ?>#top-bar, .slicknav_menu { background:<?php echo marigold_mod( 'mgmod_navtop_bg' ); ?>; }<?php endif; ?>
		<?php if(marigold_mod( 'mgmod_navtop_nav_color' )) : ?>.top-menu .menu li a{ color:<?php echo marigold_mod( 'mgmod_navtop_nav_color' ); ?>; }<?php endif; ?>
		.top-menu .menu li.current-menu-item > a, .top-menu .menu li.current_page_item > a, .top-menu .menu li a:hover, .social-top a:hover, .social-top .toggle-search:hover {  color:<?php echo marigold_mod( 'mgmod_navtop_nav_color_active' ); ?>; }
		
		.top-menu .menu .sub-menu, .top-menu .menu .children { background: <?php echo marigold_mod( 'mgmod_drop_bg' ); ?>; }
		.top-menu ul.menu ul a, .top-menu .menu ul ul a { <?php if(marigold_mod( 'mgmod_drop_border' )) : ?>border-top: 1px solid <?php echo marigold_mod( 'mgmod_drop_border' ); ?>;<?php endif; ?> color:<?php echo marigold_mod( 'mgmod_navtop_nav_color' ); ?>; }
		.top-menu ul.menu ul li > a:hover, .top-menu .menu ul ul li > a:hover { color: <?php echo marigold_mod( 'mgmod_drop_text_hover_color' ); ?>; }
		.slicknav_menu .slicknav_icon-bar { background-color:<?php echo marigold_mod( 'mgmod_navtop_nav_color' ); ?>; }
		
		.slicknav_btn + .slicknav_nav { background:<?php echo marigold_mod( 'mgmod_mobile_bg' ); ?>; }
		.slicknav_nav a { color:<?php echo marigold_mod( 'mgmod_mobile_text' ); ?>; }
		.slicknav_nav li > a { border-color:<?php echo marigold_mod( 'mgmod_mobile_border' ); ?>; }
		
		.social-top .toggle-search { color:<?php echo marigold_mod( 'mgmod_navtop_search_magnify' ); ?>; }
		.social-top a + .toggle-search:before { border-color:<?php echo marigold_mod( 'mgmod_navtop_search_line' ); ?>; }
		
		.widget-title, .widget .tagcloud a, .post-tags a { background:<?php echo marigold_mod( 'mgmod_sidebar_title_bg' ); ?>; color:<?php echo marigold_mod( 'mgmod_sidebar_title_text' ); ?>; }
		
		a, .post-head h2 a:hover, .social-widget a:hover > i, .footer-social a:hover, .author-content .author-social:hover, .archive-box h1{ color:<?php echo marigold_mod( 'mgmod_color_accent' ); ?>; }
		.post-head .cat a, .pagination a, #area-side .widget_mc4wp_form_widget [type="submit"], .author-content h5 a, .post-box-title, #respond h3{ border-color:<?php echo marigold_mod( 'mgmod_color_accent' ); ?>; }
		
 		.more-button, #respond #submit, .wpcf7 .wpcf7-submit{ background: <?php echo marigold_mod('mgmod_button_bg'); ?>; color: <?php echo marigold_mod('mgmod_button_text'); ?>; <?php echo "border-color:".marigold_mod('mgmod_button_border').";"; ?> }
 		.more-button:hover, #respond #submit:hover, .wpcf7 .wpcf7-submit:hover, #area-side .widget_mc4wp_form_widget [type="submit"]{ background: <?php echo marigold_mod('mgmod_button_bg_hover'); ?>; color: <?php echo marigold_mod('mgmod_button_text_hover'); ?>; <?php echo "border-color:".marigold_mod('mgmod_button_bg_hover').";"; ?> }
 		 #area-side .widget_mc4wp_form_widget [type="submit"]:hover{background: <?php echo marigold_mod('mgmod_color_accent'); ?>; color: <?php echo marigold_mod('mgmod_button_text_hover'); ?>; border-color: <?php echo marigold_mod('mgmod_color_accent'); ?>;}

 		#footer{color:<?php echo marigold_mod('mgmod_footer_text'); ?>; background-color: <?php echo marigold_mod('mgmod_footer_bg');?>;}
 		#footer a{color:<?php echo marigold_mod('mgmod_footer_text'); ?>;}
 		#footer a:hover{color:<?php echo marigold_mod('mgmod_color_accent'); ?>;}
 		#footer-logo:after{border-bottom: 1px dotted <?php echo marigold_mod('mgmod_footer_text');?>;}
    </style>
    <?php
}
add_action( 'wp_head', 'omaha_generate_css' );

?>
<?php

/**
 * Global Default Modifications
 */
global $sidebar_position, $marigold_layout, $marigold_summary;
$marigold_layout = array(
	'full'   => esc_html__('Regular Post Layout','marigold'),
	'grid'  => esc_html__('Grid Post Layout','marigold'),
	'full_grid'  => esc_html__('1 Regular then Grid Layout','marigold'),
	'list'  => esc_html__('List Post Layout','marigold'),
	'full_list'  => esc_html__('1 Regular then List Layout','marigold'),
);
$marigold_summary = array(
	'full'   => esc_html__('Use Read More Tag','marigold'),
	'excerpt'  => esc_html__('Use Excerpt','marigold'),
);
$sidebar_position = array (
	'side-right' =>  esc_html__('Right Sidebar','marigold'),
	'side-left' => esc_html__('Left Sidebar','marigold'),
	'full-width' => esc_html__('Full Width (No Sidebar)','marigold')
);
function maha_category_raw() {
	$cats = array();
	$cats[0] = "&mdash; Select &mdash;";
	
	foreach ( get_categories() as $categories => $category ) {
		$cats[$category->term_id] = $category->name;
	}

	return $cats;
}

$maha_mod = array(
	// General
	'mgmod_responsive'				=> array( 'type' => 'checkbox', 'val' => true),
	'mgmod_home_layout'				=> array( 'type' => 'opt_layout', 'val' => 'full'),
	'mgmod_archive_layout'			=> array( 'type' => 'opt_layout', 'val' => 'full'),
	'mgmod_sidebar_homepage'		=> array( 'type' => 'opt_sidebar', 'val' => 'side-right'),
	'mgmod_sidebar_archive'			=> array( 'type' => 'opt_sidebar', 'val' => 'side-right'),
	'mgmod_header_padding_top'		=> array( 'type' => 'number', 'val' => '65'),
	'mgmod_header_padding_bottom'	=> array( 'type' => 'number', 'val' => '55'),
	'mgmod_post_summary'			=> array( 'type' => 'opt_summary', 'val' => 'full'),
	'mgmod_sidebar_smart'			=> array( 'type' => 'checkbox', 'val' => true),
	// Notification Top
	'mgmod_notif_top'				=> array( 'type' => 'checkbox', 'val' => false),
	'mgmod_notif_text'				=> array( 'type' => 'strip_slashes', 'val' => 'New Announcement !'),
	'mgmod_notif_link'				=> array( 'type' => 'esc_url_raw', 'val' => 'https://mahathemes.com'),
	'mgmod_notif_newtab'			=> array( 'type' => 'checkbox', 'val' => false),
	'mgmod_notif_bg'				=> array( 'type' => 'colorhex', 'val' => '#bd966b'),
	'mgmod_notif_txt_color'			=> array( 'type' => 'colorhex', 'val' => '#FFFFFF'),
	// Header & Logo
	'mgmod_logo'					=> array( 'type' => 'esc_url_raw', 'val' => ''),
	'mgmod_navtop_social_check'		=> array( 'type' => 'checkbox', 'val' => true),
	'mgmod_navtop_search_check'		=> array( 'type' => 'checkbox', 'val' => true),
	// Featured Area
	'mgmod_featured_slider'			=> array( 'type' => 'checkbox', 'val' => true),
	'mgmod_featured_cat'			=> array( 'type' => 'opt_category', 'val' => ''),
	'mgmod_featured_cat_hide'		=> array( 'type' => 'checkbox', 'val' => true),
	'mgmod_featured_slider_slides'	=> array( 'type' => 'number', 'val' => '4'),
	// Post Options
	'mgmod_post_tags'				=> array( 'type' => 'checkbox', 'val' => false),
	'mgmod_post_author_info'		=> array( 'type' => 'checkbox', 'val' => false),
	'mgmod_post_author'				=> array( 'type' => 'checkbox', 'val' => false),
	'mgmod_post_related'			=> array( 'type' => 'checkbox', 'val' => false),
	'mgmod_post_share'				=> array( 'type' => 'checkbox', 'val' => false),
	'mgmod_post_comment_link'		=> array( 'type' => 'checkbox', 'val' => false),
	'mgmod_post_thumb'				=> array( 'type' => 'checkbox', 'val' => false),
	'mgmod_post_date'				=> array( 'type' => 'checkbox', 'val' => false),
	'mgmod_post_cat'				=> array( 'type' => 'checkbox', 'val' => false),
	// Page Options
	'mgmod_page_metas'				=> array( 'type' => 'checkbox', 'val' => false),
	// Social Media
	'mgmod_facebook'				=> array( 'type' => 'strip_slashes', 'val' => 'mahathemes'),
	'mgmod_twitter'					=> array( 'type' => 'strip_slashes', 'val' => 'mahathemes'),
	'mgmod_instagram'				=> array( 'type' => 'strip_slashes', 'val' => 'mahathemes'),
	'mgmod_pinterest'				=> array( 'type' => 'strip_slashes', 'val' => 'mahathemes'),
	'mgmod_tumblr'					=> array( 'type' => 'strip_slashes', 'val' => ''),
	'mgmod_bloglovin'				=> array( 'type' => 'strip_slashes', 'val' => ''),
	'mgmod_tumblr'					=> array( 'type' => 'strip_slashes', 'val' => ''),
	'mgmod_google'					=> array( 'type' => 'strip_slashes', 'val' => ''),
	'mgmod_youtube'					=> array( 'type' => 'strip_slashes', 'val' => ''),
	'mgmod_dribbble'				=> array( 'type' => 'strip_slashes', 'val' => ''),
	'mgmod_soundcloud'				=> array( 'type' => 'strip_slashes', 'val' => ''),
	'mgmod_vimeo'					=> array( 'type' => 'strip_slashes', 'val' => ''),
	'mgmod_linkedin'				=> array( 'type' => 'strip_slashes', 'val' => ''),
	'mgmod_snapchat'				=> array( 'type' => 'strip_slashes', 'val' => ''),
	'mgmod_rss'						=> array( 'type' => 'strip_slashes', 'val' => ''),
	// Footer
	'mgmod_footer_logo_switch'		=> array( 'type' => 'checkbox', 'val' => true),
	'mgmod_footer_logo_img'			=> array( 'type' => 'esc_url_raw', 'val' => ''),
	'mgmod_footer_copyright'		=> array( 'type' => 'strip_slashes', 'val' => '&copy; 2017 - Marigold.'),
	'mgmod_footer_social'			=> array( 'type' => 'checkbox', 'val' => true),
	// Color : Nav Top
	'mgmod_navtop_bg'				=> array( 'type' => 'colorhex', 'val' => '#1E1D1D'),
	'mgmod_navtop_nav_color'		=> array( 'type' => 'colorhex', 'val' => '#E4E4E4'),
	'mgmod_navtop_nav_color_active'	=> array( 'type' => 'colorhex', 'val' => '#bd966b'),
	'mgmod_drop_bg'					=> array( 'type' => 'colorhex', 'val' => '#1E1D1D'),
	'mgmod_drop_border'				=> array( 'type' => 'colorhex', 'val' => '#333333'),
	'mgmod_drop_text_hover_color'	=> array( 'type' => 'colorhex', 'val' => '#bd966b'),
	'mgmod_navtop_search_magnify'	=> array( 'type' => 'colorhex', 'val' => '#bd966b'),
	'mgmod_navtop_search_line'		=> array( 'type' => 'colorhex', 'val' => '#E4E4E4'),
	// Color : Mobile
	'mgmod_mobile_bg'				=> array( 'type' => 'colorhex', 'val' => '#1E1D1D'),
	'mgmod_mobile_text'				=> array( 'type' => 'colorhex', 'val' => '#E4E4E4'),
	'mgmod_mobile_border'			=> array( 'type' => 'colorhex', 'val' => '#333333'),
	// Color : Sidebar
	'mgmod_sidebar_title_bg'		=> array( 'type' => 'colorhex', 'val' => '#EEEEEE'),
	'mgmod_sidebar_title_text'		=> array( 'type' => 'colorhex', 'val' => '#000000'),
	// Color : General
	'mgmod_bg'						=> array( 'type' => 'colorhex', 'val' => '#ffffff'),
	'mgmod_color_accent'			=> array( 'type' => 'colorhex', 'val' => '#bd966b'),
	'mgmod_button_bg'				=> array( 'type' => 'colorhex', 'val' => '#FFFFFF'),
	'mgmod_button_text'				=> array( 'type' => 'colorhex', 'val' => '#000000'),
	'mgmod_button_bg_hover'			=> array( 'type' => 'colorhex', 'val' => '#000000'),
	'mgmod_button_text_hover'		=> array( 'type' => 'colorhex', 'val' => '#ffffff'),
	'mgmod_button_border'			=> array( 'type' => 'colorhex', 'val' => '#bd966b'),
	// Color : Footer
	'mgmod_footer_bg'				=> array( 'type' => 'colorhex', 'val' => '#1E1D1D'),
	'mgmod_footer_text'				=> array( 'type' => 'colorhex', 'val' => '#E4E4E4'),
);

//=====================================================
// Customizer - Add Custom Styling
//=====================================================
function omaha_customizer_style() {
	wp_enqueue_style('customizer-css', get_stylesheet_directory_uri() . '/inc/customizer/css/style.css');
}
add_action('customize_controls_print_styles', 'omaha_customizer_style');

//=====================================================
// Customizer - Add Settings
//=====================================================
function omaha_options( $wp_customize ) {

	global $maha_mod, $sidebar_position, $marigold_layout, $marigold_summary;
	
	// Add Sections

	$wp_customize->add_panel('maha_new_section_color_panel', array(
		'capability' => 'edit_theme_options',
		'theme_supports' => '',
		'title' => esc_html__('Colors', 'marigold'),
		'description' => '', // Include html tags such as <p>.
		'priority' => 96 // Mixed with top-level-section hierarchy.
	));

	$wp_customize->add_section( 'maha_new_section_color_footer' , array(
		'title'      => esc_html__('Footer','marigold'),
		'description'=> '',
		'priority'   => 101,
		'panel'		 => 'maha_new_section_color_panel'
	) );

	$wp_customize->add_section( 'maha_new_section_color_sidebar' , array(
		'title'      => esc_html__('Sidebar','marigold'),
		'description'=> '',
		'priority'   => 100,
		'panel'		 => 'maha_new_section_color_panel'
	) );
	
	$wp_customize->add_section( 'maha_new_section_mobile' , array(
		'title'      => esc_html__('Mobile Menu','marigold'),
		'description'=> '',
		'priority'   => 99,
		'panel'		 => 'maha_new_section_color_panel'
	) );
	
	$wp_customize->add_section( 'maha_new_section_color_general' , array(
		'title'      => esc_html__('General','marigold'),
		'description'=> '',
		'priority'   => 98,
		'panel'		 => 'maha_new_section_color_panel'
	) );
	
	$wp_customize->add_section( 'maha_new_section_color_topbar' , array(
		'title'      => esc_html__('Top Bar','marigold'),
		'description'=> '',
		'priority'   => 97,
		'panel'		 => 'maha_new_section_color_panel'
	) );
	
	$wp_customize->add_section( 'maha_new_section_footer' , array(
		'title'      => esc_html__('Footer','marigold'),
		'description'=> '',
		'priority'   => 95,
	) );
	
	$wp_customize->add_section( 'maha_new_section_social' , array(
		'title'      => esc_html__('Social Media','marigold'),
		'description'=> 'Enter your social media usernames. Icons will not show if left blank.',
		'priority'   => 94,
	) );
	
	$wp_customize->add_section( 'maha_new_section_page' , array(
		'title'      => esc_html__('Page Options','marigold'),
		'description'=> '',
		'priority'   => 93,
	) );
	
	$wp_customize->add_section( 'maha_new_section_post' , array(
		'title'      => esc_html__('Post Options','marigold'),
		'description'=> '',
		'priority'   => 92,
	) );
	
	$wp_customize->add_section( 'maha_new_section_featured' , array(
		'title'      => esc_html__('Featured Area (Slider)','marigold'),
		'description'=> '',
		'priority'   => 91,
	) );
	
	$wp_customize->add_section( 'maha_new_section_topbar' , array(
		'title'      => esc_html__('Top Bar','marigold'),
		'description'=> '',
		'priority'   => 90,
	) );
	
	$wp_customize->add_section( 'maha_new_section_logo_header' , array(
		'title'      => esc_html__('Logo and Header','marigold'),
		'description'=> '',
		'priority'   => 89,
	) );
	
	$wp_customize->add_section( 'maha_new_section_notif_top' , array(
		'title'      => esc_html__('Notification on Top','marigold'),
		'description'=> '',
		'priority'   => 87,
	) );

	$wp_customize->add_section( 'maha_new_section_general' , array(
		'title'      => esc_html__('General Options','marigold'),
		'description'=> '',
		'priority'   => 86,
	) );
	
	
	
	// Add Setting
	foreach ($maha_mod as $mod_key => $mod_val) {
		// print_r($mod_val);
		// die();
		$this_sanitize_callback = 'maha_sanitize_'.$mod_val['type'];
		$wp_customize->add_setting(
			$mod_key,
			array(
				'default' => $mod_val['val'],
				'sanitize_callback' => $this_sanitize_callback
			)
		);
	}
		

	// Add Control
	
		// General
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'responsive',
				array(
					'label'      => esc_html__('Responsive','marigold'),
					'section'    => 'maha_new_section_general',
					'settings'   => 'mgmod_responsive',
					'type'		 => 'checkbox',
					'priority'	 => 2
				)
			)
		);
		
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'home_layout',
				array(
					'label'          => esc_html__('Homepage Layout','marigold'),
					'section'        => 'maha_new_section_general',
					'settings'       => 'mgmod_home_layout',
					'type'           => 'radio',
					'priority'	 	 => 3,
					'choices'        => $marigold_layout
				)
			)
		);
		
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'archive_layout',
				array(
					'label'          => esc_html__('Archive Layout','marigold'),
					'section'        => 'maha_new_section_general',
					'settings'       => 'mgmod_archive_layout',
					'type'           => 'radio',
					'priority'	 	 => 5,
					'choices'        => $marigold_layout
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'sidebar_homepage',
				array(
					'label'      => esc_html__('Homepage Sidebar','marigold'),
					'section'    => 'maha_new_section_general',
					'settings'   => 'mgmod_sidebar_homepage',
					'type'		 => 'radio',
					'priority'	 => 4,
					'choices'    => $sidebar_position
				)
			)
		);
		
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'sidebar_archive',
				array(
					'label'      => esc_html__('Archive Sidebar','marigold'),
					'section'    => 'maha_new_section_general',
					'settings'   => 'mgmod_sidebar_archive',
					'type'		 => 'radio',
					'priority'	 => 6,
					'choices'    => $sidebar_position
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'post_summary',
				array(
					'label'          => esc_html__('Post Summary Setting','marigold'),
					'section'        => 'maha_new_section_general',
					'settings'       => 'mgmod_post_summary',
					'type'           => 'radio',
					'priority'	 => 8,
					'choices'        => $marigold_summary
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'sidebar_smart',
				array(
					'label'      => esc_html__('Sidebar Smart Scroll','marigold'),
					'section'    => 'maha_new_section_general',
					'settings'   => 'mgmod_sidebar_smart',
					'type'		 => 'checkbox',
					'priority'	 => 9
				)
			)
		);

		// Notification Top
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'notif_top',
				array(
					'label'      => esc_html__('Notification on Top','marigold'),
					'section'    => 'maha_new_section_notif_top',
					'settings'   => 'mgmod_notif_top',
					'type'		 => 'checkbox',
					'priority'	 => 1
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'notif_top_text',
				array(
					'label'      => esc_html__('Notification Text','marigold'),
					'section'    => 'maha_new_section_notif_top',
					'settings'   => 'mgmod_notif_text',
					'type'		 => 'text',
					'priority'	 => 2
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'notif_top_link',
				array(
					'label'		 => esc_html__('Notification Link','marigold'),
					'section'	 => 'maha_new_section_notif_top',
					'settings'	 => 'mgmod_notif_link',
					'type'		 => 'text',
					'priority'	 => 3
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'notif_top_newtab',
				array(
					'label'      => esc_html__('Open Link in New Tab','marigold'),
					'section'    => 'maha_new_section_notif_top',
					'settings'   => 'mgmod_notif_newtab',
					'type'		 => 'checkbox',
					'priority'	 => 4
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'notif_top_bg',
				array(
					'label'      => esc_html__('Notification BG','marigold'),
					'section'    => 'maha_new_section_notif_top',
					'settings'   => 'mgmod_notif_bg',
					'priority'	 => 5
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'notif_top_txt_color',
				array(
					'label'      => esc_html__('Notification Text Color','marigold'),
					'section'    => 'maha_new_section_notif_top',
					'settings'   => 'mgmod_notif_txt_color',
					'priority'	 => 6
				)
			)
		);
		
		// Header and Logo
		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'upload_logo',
				array(
					'label'      => esc_html__('Upload Logo','marigold'),
					'section'    => 'maha_new_section_logo_header',
					'settings'   => 'mgmod_logo',
					'priority'	 => 20
				)
			)
		);
		
		$wp_customize->add_control(
			new Customize_Number_Control(
				$wp_customize,
				'header_padding_top',
				array(
					'label'      => esc_html__('Top Header Padding','marigold'),
					'section'    => 'maha_new_section_logo_header',
					'settings'   => 'mgmod_header_padding_top',
					'type'		 => 'number',
					'priority'	 => 22
				)
			)
		);
		$wp_customize->add_control(
			new Customize_Number_Control(
				$wp_customize,
				'header_padding_bottom',
				array(
					'label'      => esc_html__('Bottom Header Padding','marigold'),
					'section'    => 'maha_new_section_logo_header',
					'settings'   => 'mgmod_header_padding_bottom',
					'type'		 => 'number',
					'priority'	 => 23
				)
			)
		);
		
		// Top Bar
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'topbar_social_check',
				array(
					'label'      => esc_html__('Top Bar Social Icons','marigold'),
					'section'    => 'maha_new_section_topbar',
					'settings'   => 'mgmod_navtop_social_check',
					'type'		 => 'checkbox',
					'priority'	 => 3
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'topbar_search_check',
				array(
					'label'      => esc_html__('Top Bar Search','marigold'),
					'section'    => 'maha_new_section_topbar',
					'settings'   => 'mgmod_navtop_search_check',
					'type'		 => 'checkbox',
					'priority'	 => 4
				)
			)
		);
		
		
		// Featured area
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'featured_slider',
				array(
					'label'      => esc_html__('Featured Slider','marigold'),
					'section'    => 'maha_new_section_featured',
					'settings'   => 'mgmod_featured_slider',
					'type'		 => 'checkbox',
					'priority'	 => 2
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Category_Control(
				$wp_customize,
				'featured_cat',
				array(
					'label'    => esc_html__('Select Featured Category','marigold'),
					'settings' => 'mgmod_featured_cat',
					'section'  => 'maha_new_section_featured',
					'priority'	 => 3
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'featured_cat_hide',
				array(
					'label'      => esc_html__('Hide Featured Category','marigold'),
					'section'    => 'maha_new_section_featured',
					'settings'   => 'mgmod_featured_cat_hide',
					'type'		 => 'checkbox',
					'priority'	 => 4
				)
			)
		);
		
		
		$wp_customize->add_control(
			new Customize_Number_Control(
				$wp_customize,
				'featured_slider_slides',
				array(
					'label'      => esc_html__('Amount of Slides','marigold'),
					'section'    => 'maha_new_section_featured',
					'settings'   => 'mgmod_featured_slider_slides',
					'type'		 => 'number',
					'priority'	 => 5
				)
			)
		);
		
		// Post Settings
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'post_cat',
				array(
					'label'      => esc_html__('Hide Category','marigold'),
					'section'    => 'maha_new_section_post',
					'settings'   => 'mgmod_post_cat',
					'type'		 => 'checkbox',
					'priority'	 => 2
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'post_date',
				array(
					'label'      => esc_html__('Hide Date','marigold'),
					'section'    => 'maha_new_section_post',
					'settings'   => 'mgmod_post_date',
					'type'		 => 'checkbox',
					'priority'	 => 3
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'post_tags',
				array(
					'label'      => esc_html__('Hide Tags','marigold'),
					'section'    => 'maha_new_section_post',
					'settings'   => 'mgmod_post_tags',
					'type'		 => 'checkbox',
					'priority'	 => 4
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'post_share',
				array(
					'label'      => esc_html__('Hide Share Buttons','marigold'),
					'section'    => 'maha_new_section_post',
					'settings'   => 'mgmod_post_share',
					'type'		 => 'checkbox',
					'priority'	 => 5
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'post_comment_link',
				array(
					'label'      => esc_html__('Hide Comment Link','marigold'),
					'section'    => 'maha_new_section_post',
					'settings'   => 'mgmod_post_comment_link',
					'type'		 => 'checkbox',
					'priority'	 => 6
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'post_author',
				array(
					'label'      => esc_html__('Hide Author Info','marigold'),
					'section'    => 'maha_new_section_post',
					'settings'   => 'mgmod_post_author_info',
					'type'		 => 'checkbox',
					'priority'	 => 7
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'post_author',
				array(
					'label'      => esc_html__('Hide Author Box','marigold'),
					'section'    => 'maha_new_section_post',
					'settings'   => 'mgmod_post_author',
					'type'		 => 'checkbox',
					'priority'	 => 8
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'post_related',
				array(
					'label'      => esc_html__('Hide Related Posts Box','marigold'),
					'section'    => 'maha_new_section_post',
					'settings'   => 'mgmod_post_related',
					'type'		 => 'checkbox',
					'priority'	 => 9
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'post_thumb',
				array(
					'label'      => esc_html__('Hide Featured Image from top of Post','marigold'),
					'section'    => 'maha_new_section_post',
					'settings'   => 'mgmod_post_thumb',
					'type'		 => 'checkbox',
					'priority'	 => 10
				)
			)
		);
		
		// Page
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'page_share',
				array(
					'label'      => esc_html__('Show Page Metas & Share','marigold'),
					'section'    => 'maha_new_section_page',
					'settings'   => 'mgmod_page_metas',
					'type'		 => 'checkbox',
					'priority'	 => 2
				)
			)
		);
		
		// Social Media
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'facebook',
				array(
					'label'      => esc_html__('Facebook','marigold'),
					'section'    => 'maha_new_section_social',
					'settings'   => 'mgmod_facebook',
					'type'		 => 'text',
					'priority'	 => 1
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'twitter',
				array(
					'label'      => esc_html__('Twitter','marigold'),
					'section'    => 'maha_new_section_social',
					'settings'   => 'mgmod_twitter',
					'type'		 => 'text',
					'priority'	 => 2
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'instagram',
				array(
					'label'      => esc_html__('Instagram','marigold'),
					'section'    => 'maha_new_section_social',
					'settings'   => 'mgmod_instagram',
					'type'		 => 'text',
					'priority'	 => 3
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'pinterest',
				array(
					'label'      => esc_html__('Pinterest','marigold'),
					'section'    => 'maha_new_section_social',
					'settings'   => 'mgmod_pinterest',
					'type'		 => 'text',
					'priority'	 => 4
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'bloglovin',
				array(
					'label'      => esc_html__('Bloglovin','marigold'),
					'section'    => 'maha_new_section_social',
					'settings'   => 'mgmod_bloglovin',
					'type'		 => 'text',
					'priority'	 => 5
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'google',
				array(
					'label'      => esc_html__('Google Plus','marigold'),
					'section'    => 'maha_new_section_social',
					'settings'   => 'mgmod_google',
					'type'		 => 'text',
					'priority'	 => 6
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'tumblr',
				array(
					'label'      => esc_html__('Tumblr','marigold'),
					'section'    => 'maha_new_section_social',
					'settings'   => 'mgmod_tumblr',
					'type'		 => 'text',
					'priority'	 => 7
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'youtube',
				array(
					'label'      => esc_html__('Youtube','marigold'),
					'section'    => 'maha_new_section_social',
					'settings'   => 'mgmod_youtube',
					'type'		 => 'text',
					'priority'	 => 8
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'dribbble',
				array(
					'label'      => esc_html__('Dribbble','marigold'),
					'section'    => 'maha_new_section_social',
					'settings'   => 'mgmod_dribbble',
					'type'		 => 'text',
					'priority'	 => 9
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'soundcloud',
				array(
					'label'      => esc_html__('Soundcloud','marigold'),
					'section'    => 'maha_new_section_social',
					'settings'   => 'mgmod_soundcloud',
					'type'		 => 'text',
					'priority'	 => 10
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'vimeo',
				array(
					'label'      => esc_html__('Vimeo','marigold'),
					'section'    => 'maha_new_section_social',
					'settings'   => 'mgmod_vimeo',
					'type'		 => 'text',
					'priority'	 => 11
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'linkedin',
				array(
					'label'      => esc_html__('Linkedin (Your Linkedin profile URL)','marigold'),
					'section'    => 'maha_new_section_social',
					'settings'   => 'mgmod_linkedin',
					'type'		 => 'text',
					'priority'	 => 12
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'snapchat',
				array(
					'label'      => esc_html__('Snapchat','marigold'),
					'section'    => 'maha_new_section_social',
					'settings'   => 'mgmod_snapchat',
					'type'		 => 'text',
					'priority'	 => 13
				)
			)
		);		
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'rss',
				array(
					'label'      => esc_html__('RSS Link','marigold'),
					'section'    => 'maha_new_section_social',
					'settings'   => 'mgmod_rss',
					'type'		 => 'text',
					'priority'	 => 14
				)
			)
		);
		
		// Footer
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'footer_upload_logo_switch',
				array(
					'label'		 => esc_html__('Footer Logo','marigold'),
					'section'	 => 'maha_new_section_footer',
					'settings'	 => 'mgmod_footer_logo_switch',
					'type'		 => 'checkbox',
					'priority'	 => 1
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'footer_upload_logo',
				array(
					'label'      => esc_html__('Upload Footer Logo','marigold'),
					'section'    => 'maha_new_section_footer',
					'settings'   => 'mgmod_footer_logo_img',
					'priority'	 => 2
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'footer_copyright',
				array(
					'label'      => esc_html__('Footer Copyright Left Text','marigold'),
					'section'    => 'maha_new_section_footer',
					'settings'   => 'mgmod_footer_copyright',
					'type'		 => 'text',
					'priority'	 => 3
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'footer_social',
				array(
					'label'		 => esc_html__('Footer Social Link','marigold'),
					'section'	 => 'maha_new_section_footer',
					'settings'	 => 'mgmod_footer_social',
					'type'		 => 'checkbox',
					'priority'	 => 4
				)
			)
		);
		
		
		// Colors
			
			// Top bar Colors
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'topbar_bg',
					array(
						'label'      => esc_html__('Top Bar BG','marigold'),
						'section'    => 'maha_new_section_color_topbar',
						'settings'   => 'mgmod_navtop_bg',
						'priority'	 => 1
					)
				)
			);
			
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'topbar_nav_color',
					array(
						'label'      => esc_html__('Top Bar Menu Text Color','marigold'),
						'section'    => 'maha_new_section_color_topbar',
						'settings'   => 'mgmod_navtop_nav_color',
						'priority'	 => 2
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'topbar_nav_color_active',
					array(
						'label'      => esc_html__('Top Bar Menu Text Hover/Active Color','marigold'),
						'section'    => 'maha_new_section_color_topbar',
						'settings'   => 'mgmod_navtop_nav_color_active',
						'priority'	 => 3
					)
				)
			);
			
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'drop_bg',
					array(
						'label'      => esc_html__('Dropdown BG','marigold'),
						'section'    => 'maha_new_section_color_topbar',
						'settings'   => 'mgmod_drop_bg',
						'priority'	 => 4
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'drop_border',
					array(
						'label'      => esc_html__('Dropdown Border Color','marigold'),
						'section'    => 'maha_new_section_color_topbar',
						'settings'   => 'mgmod_drop_border',
						'priority'	 => 5
					)
				)
			);
			
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'drop_text_hover_color',
					array(
						'label'      => esc_html__('Dropdown Text Hover Color','marigold'),
						'section'    => 'maha_new_section_color_topbar',
						'settings'   => 'mgmod_drop_text_hover_color',
						'priority'	 => 8
					)
				)
			);
			
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'topbar_search_magnify',
					array(
						'label'      => esc_html__('Top Bar Search Magnify Color','marigold'),
						'section'    => 'maha_new_section_color_topbar',
						'settings'   => 'mgmod_navtop_search_magnify',
						'priority'	 => 13
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'topbar_search_line',
					array(
						'label'      => esc_html__('Top Bar Search Seperator Line','marigold'),
						'section'    => 'maha_new_section_color_topbar',
						'settings'   => 'mgmod_navtop_search_line',
						'priority'	 => 14
					)
				)
			);
			
			// Mobile menu
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'mobile_bg',
					array(
						'label'      => esc_html__('Mobile Menu BG Color','marigold'),
						'section'    => 'maha_new_section_mobile',
						'settings'   => 'mgmod_mobile_bg',
						'priority'	 => 1
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'mobile_text',
					array(
						'label'      => esc_html__('Mobile Menu Link Color','marigold'),
						'section'    => 'maha_new_section_mobile',
						'settings'   => 'mgmod_mobile_text',
						'priority'	 => 2
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'mobile_border',
					array(
						'label'      => esc_html__('Mobile Menu Border Color','marigold'),
						'section'    => 'maha_new_section_mobile',
						'settings'   => 'mgmod_mobile_border',
						'priority'	 => 3
					)
				)
			);
			
			// Sidebar
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'sidebar_title_bg',
					array(
						'label'      => esc_html__('Sidebar Widget Title BG','marigold'),
						'section'    => 'maha_new_section_color_sidebar',
						'settings'   => 'mgmod_sidebar_title_bg',
						'priority'	 => 1
					)
				)
			);

			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'sidebar_title_text',
					array(
						'label'      => esc_html__('Sidebar Widget Title Text Color','marigold'),
						'section'    => 'maha_new_section_color_sidebar',
						'settings'   => 'mgmod_sidebar_title_text',
						'priority'	 => 3
					)
				)
			);
			
			// Colors general
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'color_bg',
					array(
						'label'      => esc_html__('Background Color','marigold'),
						'section'    => 'maha_new_section_color_general',
						'settings'   => 'mgmod_bg',
						'priority'	 => 1
					)
				)
			);

			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'color_accent',
					array(
						'label'      => esc_html__('Accent Color','marigold'),
						'section'    => 'maha_new_section_color_general',
						'settings'   => 'mgmod_color_accent',
						'priority'	 => 1
					)
				)
			);
			
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'color_button_bg',
					array(
						'label'      => esc_html__('Button BG Color','marigold'),
						'section'    => 'maha_new_section_color_general',
						'settings'   => 'mgmod_button_bg',
						'priority'	 => 4
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'color_button_text',
					array(
						'label'      => esc_html__('Button Text Color','marigold'),
						'section'    => 'maha_new_section_color_general',
						'settings'   => 'mgmod_button_text',
						'priority'	 => 5
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'color_button_border',
					array(
						'label'		 => esc_html__('Button Border Color','marigold'),
						'section'	 => 'maha_new_section_color_general',
						'settings'	 => 'mgmod_button_border',
						'priority'	 => 6
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'color_button_bg_hover',
					array(
						'label'      => esc_html__('Button BG Hover Color','marigold'),
						'section'    => 'maha_new_section_color_general',
						'settings'   => 'mgmod_button_bg_hover',
						'priority'	 => 7
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'color_button_text_hover',
					array(
						'label'      => esc_html__('Button Text Hover Color','marigold'),
						'section'    => 'maha_new_section_color_general',
						'settings'   => 'mgmod_button_text_hover',
						'priority'	 => 8
					)
				)
			);

			// Footer (colors)
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'footer_bg',
					array(
						'label'      => esc_html__('Background Color','marigold'),
						'section'    => 'maha_new_section_color_footer',
						'settings'   => 'mgmod_footer_bg',
						'priority'	 => 1
					)
				)
			);
			
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'footer_text',
					array(
						'label'      => esc_html__('Text Color','marigold'),
						'section'    => 'maha_new_section_color_footer',
						'settings'   => 'mgmod_footer_text',
						'priority'	 => 1
					)
				)
			);
	

	// Remove Sections
	// $wp_customize->remove_section( 'title_tagline');
	// $wp_customize->remove_section( 'nav');
	// $wp_customize->remove_section( 'static_front_page');
	// $wp_customize->remove_section( 'colors');
	$wp_customize->remove_section( 'background_image');
	
 
}
add_action( 'customize_register', 'omaha_options' );

// sanitization callback function: Strip Slashes
function maha_sanitize_strip_slashes($input) {
	return wp_kses_stripslashes($input);
}

// Sanitzie checkbox for WordPress customizer
function maha_sanitize_checkbox( $input ) {
	if ( $input == true ) {
		return true;
	} else {
		return false;
	}
}

// sanitization callback function: colors
function maha_sanitize_colorhex($color) {
	if ($unhashed = sanitize_hex_color_no_hash($color))
		return '#' . $unhashed;
	return $color;
}

// sanitization callback function: Number
function maha_sanitize_number($input) {
	if ( isset( $input ) && is_numeric( $input ) ) {
		return $input;
	}
}

// sanitization callback function: Number
function maha_sanitize_esc_url_raw($input) {
	if ( isset( $input ) && esc_url_raw( $input ) ) {
		return esc_url_raw( $input );
	} else {
		return '';
	}
}

// sanitization callback function: Sidebar
function maha_sanitize_opt_sidebar( $input ) {
   global $sidebar_position;
    if ( array_key_exists( $input, $sidebar_position ) ) {
        return $input;
    } else {
        return 'side-right';
    }
}

// sanitization callback function: Summary
function maha_sanitize_opt_summary( $input ) {
	global $marigold_summary;
	if ( array_key_exists( $input, $marigold_summary ) ) {
		return $input;
	} else {
		return 'full';
	}
}

// sanitization callback function: Module Layout
function maha_sanitize_opt_layout( $input ) {
	global $marigold_layout;
	if ( array_key_exists( $input, $marigold_layout ) ) {
		return $input;
	} else {
		return 'full';
	}
}

// sanitization callback function: Category
function maha_sanitize_opt_category( $input ) {
	if ( array_key_exists( $input, maha_category_raw() ) ) {
		return $input;
	} else {
		return '0';
	}
}

?>
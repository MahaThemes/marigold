<?php
/**
 * Maha functions and definitions
 *
 * @package marigold
 */


/**
 * Set Content Width
 */
if ( ! isset( $content_width ) ) {
	$content_width = 1080;
}


/**
 * Theme setup
 */
if ( !function_exists('marigold_setup') ) {

	function marigold_setup() {
	
		// Register navigation menu
		register_nav_menus( array( 'main-menu' => 'Primary Menu' ) );
		
		// Localization support
		load_theme_textdomain('marigold', get_template_directory() . '/languages');
		
		// Title Tag
		add_theme_support( 'title-tag' );

		// Post formats
		add_theme_support( 'post-formats', array( 'gallery', 'video', 'audio' ) );
		
		// Featured image
		add_theme_support( 'post-thumbnails' );
		add_image_size( 'full-thumb', 1080, 0, true );
		add_image_size( 'misc-thumb', 520, 380, true );
		
		// Feed Links
		add_theme_support( 'automatic-feed-links' );

		// Enable support for HTML5 markup.
		add_theme_support( 'html5', array(
			'comment-list',
			'search-form',
			'comment-form',
			'gallery',
			'caption',
		) );

		// Backwards compatibility for custom Logo
		$old_logo = get_theme_mod( 'header_logo' );
		if ( $old_logo ) {
			set_theme_mod( 'custom_logo', $old_logo );
			remove_theme_mod( 'header_logo' );
		}

		// Backwards compatibility for custom CSS
		$custom_css = get_theme_mod('custom_css');
		if ( $custom_css ) {
			wp_update_custom_css_post( $custom_css );
			remove_theme_mod( 'custom_css' );
		}
	
	}

}
add_action( 'after_setup_theme', 'marigold_setup' );


/**
 * Register sidebar area
 */
if ( ! function_exists( 'marigold_widgets_init' ) ) {

	function marigold_widgets_init() {

		register_sidebar(array(
			'name' => 'Sidebar',
			'id' => 'blog-sidebar',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h4 class="widget-title">',
			'after_title' => '</h4>',
			'description' => __('Widget area for blog pages.', 'marigold'),
		));
		register_sidebar(array(
			'name' => 'Instagram Footer',
			'id' => 'instagram-sidebar',
			'before_widget' => '<aside id="%1$s" class="instagram-widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h4 class="instagram-title">',
			'after_title' => '</h4>',
			'description' => __('Use the Instagram widget here. IMPORTANT: For best result select "Large" under "Photo Size" and set number of photos to 6.','marigold')
		));
	}
}
add_action( 'widgets_init', 'marigold_widgets_init' );


/**
 * Global Theme Modifications
 */
if ( !function_exists('marigold_mod') ) {
	
	function marigold_mod( $name ) {
		global $maha_mod;

		return get_theme_mod( $name , $maha_mod[ $name ]['val'] );
	}
}


/**
 * Register & enqueue styles/scripts
 */
function maha_scripts() {

	// Register styles
	wp_register_style('maha-ext-css', get_template_directory_uri() . '/static/css/ext.css');
	wp_register_style('maha-sive', get_template_directory_uri() . '/static/css/responsive.css');
	wp_register_style('maha-css', get_stylesheet_directory_uri() . '/style.css');
	
	// Register scripts
	wp_register_script('maha-ext-js', get_template_directory_uri() . '/static/js/ext.js', 'jquery', '', true);
	wp_register_script('maha-script', get_template_directory_uri() . '/static/js/script.js', 'jquery', '', true);
	
	// Enqueue styles
	wp_enqueue_style('maha-ext-css');
	wp_enqueue_style('maha-css');
	
	// If Resnponsive enable
	if(marigold_mod('mgmod_responsive')) { wp_enqueue_style('maha-sive'); }

	// Fonts
	wp_enqueue_style('default_body_font', 'https://fonts.googleapis.com/css?family=Crimson+Text&subset=latin,latin-ext');
	wp_enqueue_style('default_heading_font', 'https://fonts.googleapis.com/css?family=Montserrat&subset=latin,latin-ext');
	
	// Enqueue scripts
	wp_enqueue_script('jquery');
	wp_enqueue_script('maha-ext-js');
	wp_enqueue_script('maha-script');

	// Threaded comments
	if (is_singular() && comments_open() && get_option('thread_comments'))	wp_enqueue_script('comment-reply');
	
}
add_action( 'wp_enqueue_scripts','maha_scripts' );


/**
 * Comments Layout
 */
if ( !function_exists('omaha_comments') ) {

	function omaha_comments($comment, $args, $depth) {
		$GLOBALS['comment'] = $comment;
		?>
		<li <?php comment_class(); ?> id="comment-<?php comment_ID() ?>">
			
			<div class="thecomment">
						
				<div class="author-img">
					<?php echo get_avatar($comment,$args['avatar_size']); ?>
				</div>
				
				<div class="comment-text">
					<span class="reply">
						<?php comment_reply_link(array_merge( $args, array('reply_text' => __('Reply', 'marigold'), 'depth' => $depth, 'max_depth' => $args['max_depth'])), $comment->comment_ID); ?>
						<?php edit_comment_link(__('Edit', 'marigold')); ?>
					</span>
					<span class="author"><?php echo get_comment_author_link(); ?></span>
					<span class="date"><?php printf(__('%1$s at %2$s', 'marigold'), get_comment_date(),  get_comment_time()) ?></span>
					<?php if ($comment->comment_approved == '0') : ?>
						<em><i class="icon-info-sign"></i> <?php _e('Comment awaiting approval', 'marigold'); ?></em>
						<br />
					<?php endif; ?>
					<?php comment_text(); ?>
				</div>
						
			</div>
			
			
		</li>

		<?php 
	}
}


/**
 * Custom Pagination
 */
if ( !function_exists('omaha_pagination') ) {

	function omaha_pagination() {
		?>
		<div class="pagination">
			<div class="older"><?php next_posts_link(__( '<i class="mf-double-left"></i> Older Posts', 'marigold')); ?></div>
			<div class="newer"><?php previous_posts_link(__( 'Newer Posts <i class="mf-double-right"></i>', 'marigold')); ?></div>
		</div>
		<?php
		
	}
}


/**
 * Register Author Social Networks Link
 */
if ( !function_exists('omaha_usercontact') ) {

	function omaha_usercontact( $contactmethods ) {

		$contactmethods['twitter']   = 'Twitter Username';
		$contactmethods['facebook']  = 'Facebook Username';
		$contactmethods['google']    = 'Google Plus Username';
		$contactmethods['tumblr']    = 'Tumblr Username';
		$contactmethods['instagram'] = 'Instagram Username';
		$contactmethods['pinterest'] = 'Pinterest Username';

		return $contactmethods;
	}
	add_filter('user_contactmethods','omaha_usercontact',10,1);
}


/**
 * Prevent Scroll on Read More Link
 */
if ( !function_exists('maha_remove_more_link') ) {

	function maha_remove_more_link( $link ) {
		$link = preg_replace( '|#more-[0-9]+|', '', $link );
		return $link;
	}
	add_filter( 'the_content_more_link', 'maha_remove_more_link' );
}


/**
 * Exclude featured category
 */
if ( !function_exists('maha_category') ) {

	function maha_category($separator) {
		
		if(marigold_mod( 'mgmod_featured_cat_hide' ) == true) {
			
			$excluded_cat = get_theme_mod('mgmod_featured_cat');
			
			$first_time = 1;
			foreach((get_the_category()) as $category) {
				if ($category->cat_ID != $excluded_cat) {
					if ($first_time == 1) {
						echo '<a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( 'View all posts in %s', 'marigold' ), $category->name ) . '" ' . '>'  . $category->name.'</a>';
						$first_time = 0;
					} else {
						echo $separator . '<a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( 'View all posts in %s', 'marigold' ), $category->name ) . '" ' . '>' . $category->name.'</a>';
					}
				}
			}
		
		} else {
			
			$first_time = 1;
			foreach((get_the_category()) as $category) {
				if ($first_time == 1) {
					echo '<a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( 'View all posts in %s', 'marigold' ), $category->name ) . '" ' . '>'  . $category->name.'</a>';
					$first_time = 0;
				} else {
					echo $separator . '<a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( 'View all posts in %s', 'marigold' ), $category->name ) . '" ' . '>' . $category->name.'</a>';
				}
			}
		
		}
	}
}


/**
 * From Twentyfourteen
 * @return string The filtered title.
 */
if ( !function_exists('omaha_wp_title') ) {
function omaha_wp_title( $title, $sep ) {
	global $paged, $page;

	if ( is_feed() ) {
		return $title;
	}

	// Add the site name.
	$title .= get_bloginfo( 'name', 'display' );

	// Add the site description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) ) {
		$title = "$title $sep $site_description";
	}

	// Add a page number if necessary.
	if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() ) {
		$title = "$title $sep " . sprintf( __( 'Page %s', 'marigold' ), max( $paged, $page ) );
	}

	return $title;
}
add_filter( 'wp_title', 'omaha_wp_title', 10, 2 );
}


/**
 * Titles for WordPress before 4.1
 */
if ( ! function_exists( '_wp_render_title_tag' ) ) {
	function omaha_slug_render_title() { ?>
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<?php }
	add_action( 'wp_head', 'omaha_slug_render_title' );
}


/**
 * THE EXCERPT
 */
if ( !function_exists('maha_excerpt_length') ) {
function maha_excerpt_length( $length ) {
	return 200;
}
add_filter( 'excerpt_length', 'maha_excerpt_length', 999 );
}


if ( !function_exists('maha_words_limit') ) {
function maha_words_limit($string, $word_limit)
{
	$words = explode(' ', $string, ($word_limit + 1));
	
	if(count($words) > $word_limit) {
		array_pop($words);
	}
	
	return implode(' ', $words);
}
}


/**
 * Twitter Ampersand entity decode
 */
if ( !function_exists('maha_html_decode') ) {
function maha_html_decode( $title ) {
	$title = html_entity_decode( $title );
	$title = urlencode( $title );
	return $title;
}
}


/**
 * Include files
 */

// Theme Options (Customizer)
require get_template_directory() . '/inc/customizer/controller.php';
require get_template_directory() . '/inc/customizer/options.php';
require get_template_directory() . '/inc/customizer/style.php';

// Widgets
require get_template_directory() . '/inc/widget/about.php';
require get_template_directory() . '/inc/widget/social.php';
require get_template_directory() . '/inc/widget/latest_post.php';
require get_template_directory() . '/inc/widget/facebook.php';
require get_template_directory() . '/inc/widget/banner.php';

// Meta Boxes
require get_template_directory() . '/inc/metabox/site-layout.php';

// Maha welcome screen
require get_template_directory() . '/inc/welcome-screen/welcome-page-setup.php';

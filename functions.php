<?php
/**
 * Twenty Sixteen functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * {@link https://codex.wordpress.org/Plugin_API}
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

/**
 * Twenty Sixteen only works in WordPress 4.4 or later.
 */
if ( version_compare( $GLOBALS['wp_version'], '4.4-alpha', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
}

if ( ! function_exists( 'twentysixteen_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 *
 * Create your own twentysixteen_setup() function to override in a child theme.
 *
 * @since Twenty Sixteen 1.0
 */
function twentysixteen_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed at WordPress.org. See: https://translate.wordpress.org/projects/wp-themes/twentysixteen
	 * If you're building a theme based on Twenty Sixteen, use a find and replace
	 * to change 'twentysixteen' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'twentysixteen' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for custom logo.
	 *
	 *  @since Twenty Sixteen 1.2
	 */
	add_theme_support( 'custom-logo', array(
		'height'      => 240,
		'width'       => 240,
		'flex-height' => true,
	) );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 1200, 9999 );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'twentysixteen' ),
		'social'  => __( 'Social Links Menu', 'twentysixteen' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'status',
		'audio',
		'chat',
	) );

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, icons, and column width.
	 */
	add_editor_style( array( 'css/editor-style.css', twentysixteen_fonts_url() ) );

	// Indicate widget sidebars can use selective refresh in the Customizer.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif; // twentysixteen_setup
add_action( 'after_setup_theme', 'twentysixteen_setup' );

/**
 * Sets the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 *
 * @since Twenty Sixteen 1.0
 */
function twentysixteen_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'twentysixteen_content_width', 840 );
}
add_action( 'after_setup_theme', 'twentysixteen_content_width', 0 );

/**
 * Registers a widget area.
 *
 * @link https://developer.wordpress.org/reference/functions/register_sidebar/
 *
 * @since Twenty Sixteen 1.0
 */
function twentysixteen_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'twentysixteen' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'twentysixteen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Content Bottom 1', 'twentysixteen' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'twentysixteen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Content Bottom 2', 'twentysixteen' ),
		'id'            => 'sidebar-3',
		'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'twentysixteen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Language', 'twentysixteen' ),
		'id'            => 'language',
		'description'   => __( 'Add widgets here to appear in your footer.', 'twentysixteen' ),
		) );
		
	register_sidebar( array(
		'name'          => __( 'Copyright', 'twentysixteen' ),
		'id'            => 'copyright',
		'description'   => __( 'Add widgets here to appear in your footer.', 'twentysixteen' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
		) );
		register_sidebar( array(
		'name'          => __( 'Socialmedia', 'twentysixteen' ),
		'id'            => 'socialmedia',
		'description'   => __( 'Add widgets here to appear in your footer.', 'twentysixteen' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
		) );
}
add_action( 'widgets_init', 'twentysixteen_widgets_init' );

if ( ! function_exists( 'twentysixteen_fonts_url' ) ) :
/**
 * Register Google fonts for Twenty Sixteen.
 *
 * Create your own twentysixteen_fonts_url() function to override in a child theme.
 *
 * @since Twenty Sixteen 1.0
 *
 * @return string Google fonts URL for the theme.
 */
function twentysixteen_fonts_url() {
	$fonts_url = '';
	$fonts     = array();
	$subsets   = 'latin,latin-ext';

	/* translators: If there are characters in your language that are not supported by Merriweather, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Merriweather font: on or off', 'twentysixteen' ) ) {
		$fonts[] = 'Merriweather:400,700,900,400italic,700italic,900italic';
	}

	/* translators: If there are characters in your language that are not supported by Montserrat, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Montserrat font: on or off', 'twentysixteen' ) ) {
		$fonts[] = 'Montserrat:400,700';
	}

	/* translators: If there are characters in your language that are not supported by Inconsolata, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Inconsolata font: on or off', 'twentysixteen' ) ) {
		$fonts[] = 'Inconsolata:400';
	}

	if ( $fonts ) {
		$fonts_url = add_query_arg( array(
			'family' => urlencode( implode( '|', $fonts ) ),
			'subset' => urlencode( $subsets ),
		), 'https://fonts.googleapis.com/css' );
	}

	return $fonts_url;
}
endif;

/**
 * Handles JavaScript detection.
 *
 * Adds a `js` class to the root `<html>` element when JavaScript is detected.
 *
 * @since Twenty Sixteen 1.0
 */
function twentysixteen_javascript_detection() {
	echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
}
add_action( 'wp_head', 'twentysixteen_javascript_detection', 0 );

/**
 * Enqueues scripts and styles.
 *
 * @since Twenty Sixteen 1.0
 */
function twentysixteen_scripts() {
	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style( 'twentysixteen-fonts', twentysixteen_fonts_url(), array(), null );

	// Add Genericons, used in the main stylesheet.
	wp_enqueue_style( 'genericons', get_template_directory_uri() . '/genericons/genericons.css', array(), '3.4.1' );

	// Theme stylesheet.
	wp_enqueue_style( 'twentysixteen-style', get_stylesheet_uri() );

	// Load the Internet Explorer specific stylesheet.
	wp_enqueue_style( 'twentysixteen-ie', get_template_directory_uri() . '/css/ie.css', array( 'twentysixteen-style' ), '20160816' );
	wp_style_add_data( 'twentysixteen-ie', 'conditional', 'lt IE 10' );

	// Load the Internet Explorer 8 specific stylesheet.
	wp_enqueue_style( 'twentysixteen-ie8', get_template_directory_uri() . '/css/ie8.css', array( 'twentysixteen-style' ), '20160816' );
	wp_style_add_data( 'twentysixteen-ie8', 'conditional', 'lt IE 9' );

	// Load the Internet Explorer 7 specific stylesheet.
	wp_enqueue_style( 'twentysixteen-ie7', get_template_directory_uri() . '/css/ie7.css', array( 'twentysixteen-style' ), '20160816' );
	wp_style_add_data( 'twentysixteen-ie7', 'conditional', 'lt IE 8' );

	wp_enqueue_style( 'world-map', get_template_directory_uri() . '/css/world-map.css', array( ), '20160816' );

	// Load the html5 shiv.
	//wp_enqueue_script( 'twentysixteen-html5', get_template_directory_uri() . '/js/html5.js', array(), '3.7.3' );
	wp_script_add_data( 'twentysixteen-html5', 'conditional', 'lt IE 9' );

	wp_enqueue_script( 'twentysixteen-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20160816', true );

	wp_enqueue_script( 'world-map', get_template_directory_uri() . '/js/world-map.js', array(), '20160816', true );


	/* Styles and scripts for Projects Home and axSpa pages*/
	if ( is_page_template('templates/tmp-blocks.php') || is_page_template('templates/tmp-axspa.php') ) {

		//fonts
		wp_enqueue_style( 'montserrat-font', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap', false );
		wp_enqueue_style( 'open-sans-font', 'https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap', false );

		//css + js
		wp_enqueue_style('main', get_template_directory_uri() . '/dist/main.min.css', array(), '1.0.0', 'all');
		wp_enqueue_script('main', get_template_directory_uri() . '/dist/main.min.js', array('jquery'), '1.0.0', true);

	}


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'twentysixteen-keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20160816' );
	}

	wp_enqueue_script( 'twentysixteen-script', get_template_directory_uri() . '/js/functions.js', array( 'jquery' ), '20160816', true );

	wp_localize_script( 'twentysixteen-script', 'screenReaderText', array(
		'expand'   => __( 'expand child menu', 'twentysixteen' ),
		'collapse' => __( 'collapse child menu', 'twentysixteen' ),
	) );
}
add_action( 'wp_enqueue_scripts', 'twentysixteen_scripts' );

/**
 * Adds custom classes to the array of body classes.
 *
 * @since Twenty Sixteen 1.0
 *
 * @param array $classes Classes for the body element.
 * @return array (Maybe) filtered body classes.
 */
function twentysixteen_body_classes( $classes ) {
	// Adds a class of custom-background-image to sites with a custom background image.
	if ( get_background_image() ) {
		$classes[] = 'custom-background-image';
	}

	// Adds a class of group-blog to sites with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	// Adds a class of no-sidebar to sites without active sidebar.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'twentysixteen_body_classes' );

/**
 * Converts a HEX value to RGB.
 *
 * @since Twenty Sixteen 1.0
 *
 * @param string $color The original color, in 3- or 6-digit hexadecimal form.
 * @return array Array containing RGB (red, green, and blue) values for the given
 *               HEX code, empty array otherwise.
 */
function twentysixteen_hex2rgb( $color ) {
	$color = trim( $color, '#' );

	if ( strlen( $color ) === 3 ) {
		$r = hexdec( substr( $color, 0, 1 ).substr( $color, 0, 1 ) );
		$g = hexdec( substr( $color, 1, 1 ).substr( $color, 1, 1 ) );
		$b = hexdec( substr( $color, 2, 1 ).substr( $color, 2, 1 ) );
	} else if ( strlen( $color ) === 6 ) {
		$r = hexdec( substr( $color, 0, 2 ) );
		$g = hexdec( substr( $color, 2, 2 ) );
		$b = hexdec( substr( $color, 4, 2 ) );
	} else {
		return array();
	}

	return array( 'red' => $r, 'green' => $g, 'blue' => $b );
}

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Add custom image sizes attribute to enhance responsive image functionality
 * for content images
 *
 * @since Twenty Sixteen 1.0
 *
 * @param string $sizes A source size value for use in a 'sizes' attribute.
 * @param array  $size  Image size. Accepts an array of width and height
 *                      values in pixels (in that order).
 * @return string A source size value for use in a content image 'sizes' attribute.
 */
function twentysixteen_content_image_sizes_attr( $sizes, $size ) {
	$width = $size[0];

	if ( 840 <= $width ) {
		$sizes = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 62vw, 840px';
	}

	if ( 'page' === get_post_type() ) {
		if ( 840 > $width ) {
			$sizes = '(max-width: ' . $width . 'px) 85vw, ' . $width . 'px';
		}
	} else {
		if ( 840 > $width && 600 <= $width ) {
			$sizes = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 984px) 61vw, (max-width: 1362px) 45vw, 600px';
		} elseif ( 600 > $width ) {
			$sizes = '(max-width: ' . $width . 'px) 85vw, ' . $width . 'px';
		}
	}

	return $sizes;
}
add_filter( 'wp_calculate_image_sizes', 'twentysixteen_content_image_sizes_attr', 10 , 2 );

/**
 * Add custom image sizes attribute to enhance responsive image functionality
 * for post thumbnails
 *
 * @since Twenty Sixteen 1.0
 *
 * @param array $attr Attributes for the image markup.
 * @param int   $attachment Image attachment ID.
 * @param array $size Registered image size or flat array of height and width dimensions.
 * @return array The filtered attributes for the image markup.
 */
function twentysixteen_post_thumbnail_sizes_attr( $attr, $attachment, $size ) {
	if ( 'post-thumbnail' === $size ) {
		if ( is_active_sidebar( 'sidebar-1' ) ) {
			$attr['sizes'] = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 984px) 60vw, (max-width: 1362px) 62vw, 840px';
		} else {
			$attr['sizes'] = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 88vw, 1200px';
		}
	}
	return $attr;
}
add_filter( 'wp_get_attachment_image_attributes', 'twentysixteen_post_thumbnail_sizes_attr', 10 , 3 );

/**
 * Modifies tag cloud widget arguments to display all tags in the same font size
 * and use list format for better accessibility.
 *
 * @since Twenty Sixteen 1.1
 *
 * @param array $args Arguments for tag cloud widget.
 * @return array The filtered arguments for tag cloud widget.
 */
function twentysixteen_widget_tag_cloud_args( $args ) {
	$args['largest']  = 1;
	$args['smallest'] = 1;
	$args['unit']     = 'em';
	$args['format']   = 'list'; 

	return $args;
}
add_filter( 'widget_tag_cloud_args', 'twentysixteen_widget_tag_cloud_args' );
include('inc/bs4navwalker.php');
include('inc/project_posttype.php');
include('inc/asifteam_post.php');
include('inc/country_post.php');

function theme_url_shortcode(){
 $themeurl = get_stylesheet_directory_uri();
 return $themeurl;
}
add_shortcode('theme-url','theme_url_shortcode');

// site url shortcode
function benview_site_url_shortcode(){
 $siteurl = esc_url( home_url( '' ) );
 return $siteurl;
}
add_shortcode('site-url','benview_site_url_shortcode');
add_filter('widget_text', 'do_shortcode');
add_action('after_setup_theme', 'remove_admin_bar');
 
function remove_admin_bar() {
if (!current_user_can('administrator') && !is_admin()) {
  show_admin_bar(false);
}
}
	
add_action ('wp_logout','auto_redirect_after_logout');
function auto_redirect_after_logout(){
  wp_redirect( home_url() );
  exit();
}

function add_login_logout_register_menu( $items, $args ) {
 if ( $args->theme_location != 'primary' ) {
 return $items;
 }
 
 if ( is_user_logged_in() ) {
 $items .= '<li><a href="' . wp_logout_url() . '" class="nav-link">' . __( 'Logout' ) . '</a></li>';
 } else {
 $items .= '<li><a href="http://asif.info/login/" class="nav-link">' . __( 'Login' ) . '</a></li>';
 $items .= '<li><a href="http://asif.info/register/" class="nav-link">' . __( 'Registration' ) . '</a></li>';
 }
 
 return $items;
}
 
//add_filter( 'wp_nav_menu_items', 'add_login_logout_register_menu', 199, 2 );

add_filter( 'wpmem_login_redirect', 'custom_login_redirect' );
function custom_login_redirect() {
$url = 'http://asif.info/forum/';
return $url;
}



  add_filter( 'gettext', 'user_email_login_text', 20, 3 );
  function user_email_login_text( $translated_text, $text, $domain) {
      
    global $wp_query;
   $postid =  $wp_query->post->ID;

    if ($translated_text == 'Username or Email' && $postid == 841) {
    $translated_text = 'Email';
    }

    return $translated_text;

}
add_filter('body_class','my_class_names');
function my_class_names($classes) {
    if (! ( is_user_logged_in() ) ) {
        $classes[] = 'logged-out';
    }
    return $classes;
}
/* SVG Support */
function add_file_types_to_uploads($file_types){
$new_filetypes = array();
$new_filetypes['svg'] = 'image/svg+xml';
$file_types = array_merge($file_types, $new_filetypes );
return $file_types;
}
add_filter('upload_mimes', 'add_file_types_to_uploads');


// Limit custom ACF sub !!! field to use as excerpt
function custom_content($limit, $field ,$post_id=-1) {
    if($post_id==-1):
      $excerpt = explode(' ', get_sub_field($field), $limit);
    else:
      $excerpt = explode(' ', get_sub_field($field ,$post_id), $limit);
    endif;
    if (count($excerpt)>=$limit) {
      array_pop($excerpt);
      $excerpt = implode(" ",$excerpt).'...';
    } else {
      $excerpt = implode(" ",$excerpt);
    } 
    $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
    return $excerpt;
}


function get_inline_svg($name){
	if($name):
	  return file_get_contents(esc_url(get_template_directory().'/'.$name));
	endif;
	return '';
}

function asif_post_type_language() {
	$supports = array(
	'title',
	'editor',
	'author',
	'thumbnail',
	'custom-fields',
	'excerpt',
	);
	$labels = array(
	'name' => _x('Languages', 'plural'),
	'singular_name' => _x('Language', 'singular'),
	'menu_name' => _x('Languages', 'admin menu'),
	'name_admin_bar' => _x('Languages', 'admin bar'),
	'add_new' => _x('Add New', 'add new'),
	'add_new_item' => __('Add New Language'),
	'new_item' => __('New Language'),
	'edit_item' => __('Edit Language'),
	'view_item' => __('View Language'),
	'all_items' => __('All Languages'),
	'search_items' => __('Search Language'),
	'not_found' => __('No Language found.'),
	);
	$args = array(
	'supports' => $supports,
	'labels' => $labels,
	'public' => true,
	'query_var' => true,
	'rewrite' => array('slug' => 'languages'),
	'has_archive' => true,
	'hierarchical' => false,
	);
	register_post_type('languages', $args);
}
add_action('init', 'asif_post_type_language');

function header_vid()
{
	$postid = $_POST['postid'];
	if(get_field('header_video',$postid) != '')
	{
	?>
	 
                                    
                                        <div class="header-group" id="process-video">
                                            <div id="poster-image">
                                                <img src="<?php echo get_field('header_video_poster_image',$postid); ?>"/>
                                            </div>
                                            <iframe id="vimeoheader" src="<?php echo get_field('header_video',$postid); ?>" width="670" height="450" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen allow="autoplay"></iframe>
                                            <div id="play-btn-header"><svg xmlns="http://www.w3.org/2000/svg" width="92" height="92" viewBox="0 0 92 92"><g id="Group_378" data-name="Group 378" transform="translate(-924 -391)"><circle id="Ellipse_2" data-name="Ellipse 2" cx="46" cy="46" r="46" transform="translate(924 391)" fill="#de4208" opacity="0.87"/><path id="Polygon_1" data-name="Polygon 1" d="M9,0l9,14H0Z" transform="translate(977 428) rotate(90)" fill="#fff"/></g></svg></div>
                                        </div>
                                        <div class="language-sec">
                                            <div class="lang-icnam">
                                                <img src="<?php echo get_field('language_flag',$postid) ?>">
                                                <?php echo get_the_title($postid); ?>
                                            </div>
                                            <div class="lang-dropa">
                                                <button type="button" class="dropdown-toggle category-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <svg id="Group_17" data-name="Group 17" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="23" height="23" viewBox="0 0 23 23">
                                                        <defs>
                                                            <clipPath id="clip-path">
                                                            <rect id="Rectangle_7" data-name="Rectangle 7" width="23" height="23" fill="#1d1d1d" stroke="rgba(0,0,0,0)" stroke-width="1"/>
                                                            </clipPath>
                                                        </defs>
                                                        <g id="Group_16" data-name="Group 16" clip-path="url(#clip-path)">
                                                            <path id="Path_3" data-name="Path 3" d="M11.383,0A11.383,11.383,0,1,0,22.766,11.383,11.4,11.4,0,0,0,11.383,0m9.708,11.383A9.671,9.671,0,0,1,19.08,17.29a1.551,1.551,0,0,1-.378-1.807,8.647,8.647,0,0,0,.371-3.3c-.079-.7-.445-2.4-1.44-2.419a2.3,2.3,0,0,1-2.265-1.522c-1.225-2.452,2.3-2.922,1.074-4.281-.343-.381-2.114,1.57-2.374-1.03a1.356,1.356,0,0,1,.4-.751,9.722,9.722,0,0,1,6.625,9.2M10.049,1.771c-.232.452-.845.636-1.218.976-.81.734-1.158.632-1.6,1.336S5.378,5.8,5.378,6.312s.716,1.11,1.075.993a3.828,3.828,0,0,1,1.858.084c.556.2,4.641.393,3.34,3.846-.412,1.1-2.221.913-2.7,2.732a14.84,14.84,0,0,0-.339,1.779c-.03.576.408,2.748-.148,2.748S6.4,16.551,6.4,16.2a22.275,22.275,0,0,1-.39-2.644c0-1.057-1.8-1.04-1.8-2.446,0-1.269.976-1.9.756-2.506s-1.929-.627-2.643-.7a9.732,9.732,0,0,1,7.724-6.132M8.33,20.6c.583-.308.642-.705,1.171-.727a10.755,10.755,0,0,0,1.779-.385,16.375,16.375,0,0,1,2.641-.825c.8-.065,2.389.042,2.816.818A9.668,9.668,0,0,1,8.33,20.6" transform="translate(0 -0.051)" fill="#1d1d1d" stroke="rgba(0,0,0,0)" stroke-width="1"/>
                                                        </g>
                                                    </svg>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <ul id="header-lang">
                                                        <?php $args = array(
                                                            'post_type' => 'languages',
                                                            'posts_per_page' => -1
                                                        );
                                                        $query = new WP_Query($args);
                                                        if ($query->have_posts() ) : 
                                                            
                                                            while ( $query->have_posts() ) : $query->the_post(); 
                                                        		if(get_field('header_video',get_the_ID()) != '') { ?>

                                                                <li data-target="<?php echo get_the_ID(); ?>" class="dropdown-item"><?php echo get_the_title(); ?></li>
                                                                <?php } ?>
                                                        <?php endwhile;
                                                            
                                                            wp_reset_postdata();
                                                        endif; ?>
                                                        
                                                    </ul>                                            
                                                    <div></div>
                                                </div>
                                            </div>

                                        </div>
                                   
    
<?php
	} 
	else
	{
		echo "Sorry don't have videos";
	}
	exit;

}
add_action('wp_ajax_header_vid','header_vid');
add_action('wp_ajax_nopriv_header_vid','header_vid');

function bottom_vid1()
{
	$postid = $_POST['postid'];

	if(get_field('bottom_video1',$postid) != '')
	{
	?>
	<div class="vid-group" id="process-video1">
                                    <div id="poster-image1" class="posterimg">
                                        <img src="<?php echo get_field('bottom_video1_poster_image',$postid); ?>"/>
                                    </div>
                                    <iframe id="vimeoheader1" src="<?php echo get_field('bottom_video1',$postid); ?>" width="100%" height="169" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen allow="autoplay"></iframe>
                                    <div id="play-btn-header1"  class="play-btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="62" height="62" viewBox="0 0 62 62"><g id="Group_380" data-name="Group 380" transform="translate(-924 -391)"><circle id="Ellipse_2" data-name="Ellipse 2" cx="31" cy="31" r="31" transform="translate(924 391)" fill="#de4208" opacity="0.87"/><path id="Polygon_1" data-name="Polygon 1" d="M6,0l6,10H0Z" transform="translate(960 416) rotate(90)" fill="#fff"/></g></svg>
                                    </div>
                                </div>
                                <?php if(get_field('bottom_video1_title',$postid) != '') { ?>
                                <h4 class="vdtl"><?php echo get_field('bottom_video1_title',$postid); ?></h4>
                                <?php } ?>
                                <div class="language-sec-vid1">      
                                    <div class="lang-icnam">                                        
                                        <img src="<?php echo get_field('language_flag',$postid) ?>">
                                        <?php echo get_the_title($postid); ?>
                                    </div>    
                                    <div class="lang-dropa">
                                        <button type="button" class="dropdown-toggle category-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <svg id="Group_17" data-name="Group 17" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="23" height="23" viewBox="0 0 23 23">
                                                        <defs>
                                                            <clipPath id="clip-path">
                                                            <rect id="Rectangle_7" data-name="Rectangle 7" width="23" height="23" fill="#1d1d1d" stroke="rgba(0,0,0,0)" stroke-width="1"/>
                                                            </clipPath>
                                                        </defs>
                                                        <g id="Group_16" data-name="Group 16" clip-path="url(#clip-path)">
                                                            <path id="Path_3" data-name="Path 3" d="M11.383,0A11.383,11.383,0,1,0,22.766,11.383,11.4,11.4,0,0,0,11.383,0m9.708,11.383A9.671,9.671,0,0,1,19.08,17.29a1.551,1.551,0,0,1-.378-1.807,8.647,8.647,0,0,0,.371-3.3c-.079-.7-.445-2.4-1.44-2.419a2.3,2.3,0,0,1-2.265-1.522c-1.225-2.452,2.3-2.922,1.074-4.281-.343-.381-2.114,1.57-2.374-1.03a1.356,1.356,0,0,1,.4-.751,9.722,9.722,0,0,1,6.625,9.2M10.049,1.771c-.232.452-.845.636-1.218.976-.81.734-1.158.632-1.6,1.336S5.378,5.8,5.378,6.312s.716,1.11,1.075.993a3.828,3.828,0,0,1,1.858.084c.556.2,4.641.393,3.34,3.846-.412,1.1-2.221.913-2.7,2.732a14.84,14.84,0,0,0-.339,1.779c-.03.576.408,2.748-.148,2.748S6.4,16.551,6.4,16.2a22.275,22.275,0,0,1-.39-2.644c0-1.057-1.8-1.04-1.8-2.446,0-1.269.976-1.9.756-2.506s-1.929-.627-2.643-.7a9.732,9.732,0,0,1,7.724-6.132M8.33,20.6c.583-.308.642-.705,1.171-.727a10.755,10.755,0,0,0,1.779-.385,16.375,16.375,0,0,1,2.641-.825c.8-.065,2.389.042,2.816.818A9.668,9.668,0,0,1,8.33,20.6" transform="translate(0 -0.051)" fill="#1d1d1d" stroke="rgba(0,0,0,0)" stroke-width="1"/>
                                                        </g>
                                                    </svg>
                                        </button>
                                        <div class="dropdown-menu">
                                            <ul id="bottom-vid-lang" class="btm-vid1">
                                                <?php $args = array(
                                                    'post_type' => 'languages',
                                                    'posts_per_page' => -1
                                                );
                                            $query = new WP_Query($args);
                                            if ($query->have_posts() ) : 
                                                
                                                while ( $query->have_posts() ) : $query->the_post();
                                                if(get_field('bottom_video1',get_the_ID()) != '') {  ?>
                                                    <li data-target="<?php echo get_the_ID(); ?>" class="dropdown-item"><?php echo get_the_title(); ?></li>
                                                <?php } ?>
                                            <?php endwhile;
                                                
                                                wp_reset_postdata();
                                            endif; ?>
                                                
                                            </ul>
                                        
                                            <div>

                                            </div>                                        
                                        </div>
                                    </div>    
                                </div>
<?php
	} 
	else
	{
		echo "Sorry don't have videos";
	}
	exit;

}
add_action('wp_ajax_bottom_vid1','bottom_vid1');
add_action('wp_ajax_nopriv_bottom_vid1','bottom_vid1');


function bottom_vid2()
{
	$postid = $_POST['postid'];

	if(get_field('bottom_video2',$postid) != '')
	{
	?>
	<div class="vid-group" id="process-video2">
                                            <div id="poster-image2" class="posterimg">
                                                <img src="<?php echo get_field('bottom_video2_poster_image',$postid); ?>"/>
                                            </div>
                                            <iframe id="vimeoheader2" src="<?php echo get_field('bottom_video2',$postid); ?>" width="100%" height="169" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen allow="autoplay"></iframe>
                                            <div id="play-btn-header2"  class="play-btn">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="62" height="62" viewBox="0 0 62 62"><g id="Group_380" data-name="Group 380" transform="translate(-924 -391)"><circle id="Ellipse_2" data-name="Ellipse 2" cx="31" cy="31" r="31" transform="translate(924 391)" fill="#de4208" opacity="0.87"/><path id="Polygon_1" data-name="Polygon 1" d="M6,0l6,10H0Z" transform="translate(960 416) rotate(90)" fill="#fff"/></g></svg>
                                            </div>
                                        </div>
                                         <?php if(get_field('bottom_video2_title',$postid) != '') { ?>
                                                <h4 class="vdtl"><?php echo get_field('bottom_video2_title',$postid); ?></h4>
                                         <?php } ?>
                                        <div class="language-sec-vid1">
                                            <div class="lang-icnam">                                        
                                                <img src="<?php echo get_field('language_flag',$postid) ?>">
                                                <?php echo get_the_title($postid); ?>
                                            </div>    
                                            <div class="lang-dropa">
                                            <button type="button" class="dropdown-toggle category-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <svg id="Group_17" data-name="Group 17" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="23" height="23" viewBox="0 0 23 23">
                                                        <defs>
                                                            <clipPath id="clip-path">
                                                            <rect id="Rectangle_7" data-name="Rectangle 7" width="23" height="23" fill="#1d1d1d" stroke="rgba(0,0,0,0)" stroke-width="1"/>
                                                            </clipPath>
                                                        </defs>
                                                        <g id="Group_16" data-name="Group 16" clip-path="url(#clip-path)">
                                                            <path id="Path_3" data-name="Path 3" d="M11.383,0A11.383,11.383,0,1,0,22.766,11.383,11.4,11.4,0,0,0,11.383,0m9.708,11.383A9.671,9.671,0,0,1,19.08,17.29a1.551,1.551,0,0,1-.378-1.807,8.647,8.647,0,0,0,.371-3.3c-.079-.7-.445-2.4-1.44-2.419a2.3,2.3,0,0,1-2.265-1.522c-1.225-2.452,2.3-2.922,1.074-4.281-.343-.381-2.114,1.57-2.374-1.03a1.356,1.356,0,0,1,.4-.751,9.722,9.722,0,0,1,6.625,9.2M10.049,1.771c-.232.452-.845.636-1.218.976-.81.734-1.158.632-1.6,1.336S5.378,5.8,5.378,6.312s.716,1.11,1.075.993a3.828,3.828,0,0,1,1.858.084c.556.2,4.641.393,3.34,3.846-.412,1.1-2.221.913-2.7,2.732a14.84,14.84,0,0,0-.339,1.779c-.03.576.408,2.748-.148,2.748S6.4,16.551,6.4,16.2a22.275,22.275,0,0,1-.39-2.644c0-1.057-1.8-1.04-1.8-2.446,0-1.269.976-1.9.756-2.506s-1.929-.627-2.643-.7a9.732,9.732,0,0,1,7.724-6.132M8.33,20.6c.583-.308.642-.705,1.171-.727a10.755,10.755,0,0,0,1.779-.385,16.375,16.375,0,0,1,2.641-.825c.8-.065,2.389.042,2.816.818A9.668,9.668,0,0,1,8.33,20.6" transform="translate(0 -0.051)" fill="#1d1d1d" stroke="rgba(0,0,0,0)" stroke-width="1"/>
                                                        </g>
                                                    </svg>
                                            </button>
                                            <div class="dropdown-menu">
                                                <ul id="bottom-vid-lang" class="btm-vid2">
                                                    <?php $args = array(
                                                        'post_type' => 'languages',
                                                        'posts_per_page' => -1
                                                    );
                                                $query = new WP_Query($args);
                                                if ($query->have_posts() ) : 
                                                    
                                                    while ( $query->have_posts() ) : $query->the_post(); 
                                                		if(get_field('bottom_video2',get_the_ID()) != '') { ?>
                                                        <li data-target="<?php echo get_the_ID(); ?>" class="dropdown-item"><?php echo get_the_title(); ?></li>
                                                        <?php } ?>
                                                <?php endwhile;
                                                    
                                                    wp_reset_postdata();
                                                endif; ?>
                                                    
                                                </ul>
                                            
                                                <div></div>
                                            </div>
                                            </div>
                                        </div>
<?php
	} 
	else
	{
		echo "Sorry don't have videos";
	}
	exit;

}
add_action('wp_ajax_bottom_vid2','bottom_vid2');
add_action('wp_ajax_nopriv_bottom_vid2','bottom_vid2');


function bottom_vid3()
{
	$postid = $_POST['postid'];

	if(get_field('bottom_video3',$postid) != '')
	{
	?>
	<div class="vid-group" id="process-video3">
                                            <div id="poster-image3" class="posterimg">
                                                <img src="<?php echo get_field('bottom_video3_poster_image',$postid); ?>" />
                                            </div>
                                            <iframe id="vimeoheader3" src="<?php echo get_field('bottom_video3',$postid); ?>" width="100%" height="169" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen allow="autoplay"></iframe>
                                            <div id="play-btn-header3"  class="play-btn">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="62" height="62" viewBox="0 0 62 62"><g id="Group_380" data-name="Group 380" transform="translate(-924 -391)"><circle id="Ellipse_2" data-name="Ellipse 2" cx="31" cy="31" r="31" transform="translate(924 391)" fill="#de4208" opacity="0.87"/><path id="Polygon_1" data-name="Polygon 1" d="M6,0l6,10H0Z" transform="translate(960 416) rotate(90)" fill="#fff"/></g></svg>
                                            </div>
                                        </div>
                                         <?php if(get_field('bottom_video3_title',$postid) != '') { ?>
                                                <h4 class="vdtl"><?php echo get_field('bottom_video3_title',$postid); ?></h4>
                                        <?php } ?>
                                        <div class="language-sec-vid1">
                                            <div class="lang-icnam">                                        
                                                <img src="<?php echo get_field('language_flag',$postid) ?>">
                                                <?php echo get_the_title($postid); ?>
                                            </div>    
                                            <div class="lang-dropa">
                                            <button type="button" class="dropdown-toggle category-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <svg id="Group_17" data-name="Group 17" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="23" height="23" viewBox="0 0 23 23">
                                                        <defs>
                                                            <clipPath id="clip-path">
                                                            <rect id="Rectangle_7" data-name="Rectangle 7" width="23" height="23" fill="#1d1d1d" stroke="rgba(0,0,0,0)" stroke-width="1"/>
                                                            </clipPath>
                                                        </defs>
                                                        <g id="Group_16" data-name="Group 16" clip-path="url(#clip-path)">
                                                            <path id="Path_3" data-name="Path 3" d="M11.383,0A11.383,11.383,0,1,0,22.766,11.383,11.4,11.4,0,0,0,11.383,0m9.708,11.383A9.671,9.671,0,0,1,19.08,17.29a1.551,1.551,0,0,1-.378-1.807,8.647,8.647,0,0,0,.371-3.3c-.079-.7-.445-2.4-1.44-2.419a2.3,2.3,0,0,1-2.265-1.522c-1.225-2.452,2.3-2.922,1.074-4.281-.343-.381-2.114,1.57-2.374-1.03a1.356,1.356,0,0,1,.4-.751,9.722,9.722,0,0,1,6.625,9.2M10.049,1.771c-.232.452-.845.636-1.218.976-.81.734-1.158.632-1.6,1.336S5.378,5.8,5.378,6.312s.716,1.11,1.075.993a3.828,3.828,0,0,1,1.858.084c.556.2,4.641.393,3.34,3.846-.412,1.1-2.221.913-2.7,2.732a14.84,14.84,0,0,0-.339,1.779c-.03.576.408,2.748-.148,2.748S6.4,16.551,6.4,16.2a22.275,22.275,0,0,1-.39-2.644c0-1.057-1.8-1.04-1.8-2.446,0-1.269.976-1.9.756-2.506s-1.929-.627-2.643-.7a9.732,9.732,0,0,1,7.724-6.132M8.33,20.6c.583-.308.642-.705,1.171-.727a10.755,10.755,0,0,0,1.779-.385,16.375,16.375,0,0,1,2.641-.825c.8-.065,2.389.042,2.816.818A9.668,9.668,0,0,1,8.33,20.6" transform="translate(0 -0.051)" fill="#1d1d1d" stroke="rgba(0,0,0,0)" stroke-width="1"/>
                                                        </g>
                                                    </svg>
                                            </button>
                                            <div class="dropdown-menu">
                                                <ul id="bottom-vid-lang" class="btm-vid3">
                                                    <?php $args = array(
                                                        'post_type' => 'languages',
                                                        'posts_per_page' => -1
                                                    );
                                                $query = new WP_Query($args);
                                                if ($query->have_posts() ) : 
                                                    
                                                    while ( $query->have_posts() ) : $query->the_post(); 
                                                		if(get_field('bottom_video3',get_the_ID()) != '') { ?>
                                                        <li data-target="<?php echo get_the_ID(); ?>" class="dropdown-item"><?php echo get_the_title(); ?></li>
                                                        <?php } ?>
                                                <?php endwhile;
                                                    
                                                    wp_reset_postdata();
                                                endif; ?>
                                                    
                                                </ul>
                                            
                                                <div></div>
                                            </div>
                                        </div></div>
<?php
	} 
	else
	{
		echo "Sorry don't have videos";
	}
	exit;

}
add_action('wp_ajax_bottom_vid3','bottom_vid3');
add_action('wp_ajax_nopriv_bottom_vid3','bottom_vid3');


function bottom_vid4()
{
	$postid = $_POST['postid'];

	if(get_field('bottom_video4',$postid) != '')
	{
	?>
	<div class="vid-group" id="process-video4">
                                            <div id="poster-image4" class="posterimg">
                                                <img src="<?php echo get_field('bottom_video4_poster_image',$postid); ?>" />
                                            </div>
                                            <iframe id="vimeoheader4" src="<?php echo get_field('bottom_video4',$postid); ?>" width="100%" height="169" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen allow="autoplay"></iframe>
                                            <div id="play-btn-header4" class="play-btn">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="62" height="62" viewBox="0 0 62 62"><g id="Group_380" data-name="Group 380" transform="translate(-924 -391)"><circle id="Ellipse_2" data-name="Ellipse 2" cx="31" cy="31" r="31" transform="translate(924 391)" fill="#de4208" opacity="0.87"/><path id="Polygon_1" data-name="Polygon 1" d="M6,0l6,10H0Z" transform="translate(960 416) rotate(90)" fill="#fff"/></g></svg>
                                            </div>
                                        </div>
                                         <?php if(get_field('bottom_video4_title',$postid) != '') { ?>
                                                <h4 class="vdtl"><?php echo get_field('bottom_video4_title',$postid); ?></h4>
                                          <?php } ?>
                                        <div class="language-sec-vid1">
                                            <div class="lang-icnam">                                        
                                                <img src="<?php echo get_field('language_flag',$postid) ?>">
                                                <?php echo get_the_title($postid); ?>
                                            </div>    
                                            <div class="lang-dropa">
                                            <button type="button" class="dropdown-toggle category-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <svg id="Group_17" data-name="Group 17" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="23" height="23" viewBox="0 0 23 23">
                                                        <defs>
                                                            <clipPath id="clip-path">
                                                            <rect id="Rectangle_7" data-name="Rectangle 7" width="23" height="23" fill="#1d1d1d" stroke="rgba(0,0,0,0)" stroke-width="1"/>
                                                            </clipPath>
                                                        </defs>
                                                        <g id="Group_16" data-name="Group 16" clip-path="url(#clip-path)">
                                                            <path id="Path_3" data-name="Path 3" d="M11.383,0A11.383,11.383,0,1,0,22.766,11.383,11.4,11.4,0,0,0,11.383,0m9.708,11.383A9.671,9.671,0,0,1,19.08,17.29a1.551,1.551,0,0,1-.378-1.807,8.647,8.647,0,0,0,.371-3.3c-.079-.7-.445-2.4-1.44-2.419a2.3,2.3,0,0,1-2.265-1.522c-1.225-2.452,2.3-2.922,1.074-4.281-.343-.381-2.114,1.57-2.374-1.03a1.356,1.356,0,0,1,.4-.751,9.722,9.722,0,0,1,6.625,9.2M10.049,1.771c-.232.452-.845.636-1.218.976-.81.734-1.158.632-1.6,1.336S5.378,5.8,5.378,6.312s.716,1.11,1.075.993a3.828,3.828,0,0,1,1.858.084c.556.2,4.641.393,3.34,3.846-.412,1.1-2.221.913-2.7,2.732a14.84,14.84,0,0,0-.339,1.779c-.03.576.408,2.748-.148,2.748S6.4,16.551,6.4,16.2a22.275,22.275,0,0,1-.39-2.644c0-1.057-1.8-1.04-1.8-2.446,0-1.269.976-1.9.756-2.506s-1.929-.627-2.643-.7a9.732,9.732,0,0,1,7.724-6.132M8.33,20.6c.583-.308.642-.705,1.171-.727a10.755,10.755,0,0,0,1.779-.385,16.375,16.375,0,0,1,2.641-.825c.8-.065,2.389.042,2.816.818A9.668,9.668,0,0,1,8.33,20.6" transform="translate(0 -0.051)" fill="#1d1d1d" stroke="rgba(0,0,0,0)" stroke-width="1"/>
                                                        </g>
                                                    </svg>
                                            </button>
                                            <div class="dropdown-menu">
                                                <ul id="bottom-vid-lang" class="btm-vid4">
                                                    <?php $args = array(
                                                        'post_type' => 'languages',
                                                        'posts_per_page' => -1
                                                    );
                                                $query = new WP_Query($args);
                                                if ($query->have_posts() ) : 
                                                    
                                                    while ( $query->have_posts() ) : $query->the_post();
                                                    if(get_field('bottom_video4',get_the_ID()) != '') {  ?>
                                                        <li data-target="<?php echo get_the_ID(); ?>" class="dropdown-item"><?php echo get_the_title(); ?></li>
                                                        <?php } ?>
                                                <?php endwhile;
                                                    
                                                    wp_reset_postdata();
                                                endif; ?>
                                                    
                                                </ul>
                                            
                                                <div></div></div>
                                            </div>
                                        </div>
<?php
	} 
	else
	{
		echo "Sorry don't have videos";
	}
	exit;

}
add_action('wp_ajax_bottom_vid4','bottom_vid4');
add_action('wp_ajax_nopriv_bottom_vid4','bottom_vid4');

function pdf_files()
{
	$postid = $_POST['postid'];
	 if(get_field('pdf_file',$postid) != '')
	 { 
		$img =  get_field('pdf_file_poster_image',$postid);
		$link = get_field('pdf_file',$postid);
		$flag = get_field('language_flag',$postid);
		$lang_name = get_the_title($postid);
		
	}
	echo $img."|".$link."|".$flag."|".$lang_name;
	exit;

}
add_action('wp_ajax_pdf_files','pdf_files');
add_action('wp_ajax_nopriv_pdf_files','pdf_files');

function pdf_files_mobile()
{
	$postid = $_POST['postid'];
	 //if(get_field('pdf_file_mobile',$postid) != '')
	 //{ 
		$img =  get_field('pdf_file_poster_image',$postid);
		$linkmob = get_field('pdf_file_mobile',$postid);
		$flag = get_field('language_flag',$postid);
		$lang_name = get_the_title($postid);
		
	//}
	echo $img."|".$linkmob."|".$flag."|".$lang_name;
	exit;

}
add_action('wp_ajax_pdf_files_mobile','pdf_files_mobile');
add_action('wp_ajax_nopriv_pdf_files_mobile','pdf_files_mobile');
/**
 * Incude custom acf-functions
 */

include( get_template_directory() . '/inc/acf-functions.php' );


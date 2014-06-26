<?php
/**
 * Ammarath functions and definitions
 *
 * @package Ammarath
 */


/**
* FOR DEVELOPMENT
*/

show_admin_bar( false );



add_theme_support( 'post-thumbnails' ); 


/**
* Add Resposive Class to Images
*/
function add_image_responsive_class($content) {
   global $post;
   $pattern ="/<img(.*?)class=\"(.*?)\"(.*?)>/i";
   $replacement = '<img$1class="$2 img-responsive"$3>';
   $content = preg_replace($pattern, $replacement, $content);
   return $content;
}
add_filter('the_content', 'add_image_responsive_class');


add_image_size( 'single-post', 1200, 9999 ); 


/*
* ADD BREADCRUMBS
**/
function the_breadcrumb() {
    global $post;
    echo '<ol class="breadcrumb">';
    if (!is_home()) {
        echo '<li><a href="';
        echo get_option('home');
        echo '">';
        echo 'Home';
        echo '</a></li>';
        if (is_category() || is_single()) {
            echo '<li>';
            the_category(' </li><li> ');
            if (is_single()) {
                echo '</li><li>';
                the_title();
                echo '</li>';
            }
        } elseif (is_page()) {
            if($post->post_parent){
                $anc = get_post_ancestors( $post->ID );
                $title = get_the_title();
                foreach ( $anc as $ancestor ) {
                    $output = '<li><a href="'.get_permalink($ancestor).'" title="'.get_the_title($ancestor).'">'.get_the_title($ancestor).'</a></li>';
                }
                echo $output;
                echo '<strong title="'.$title.'"> '.$title.'</strong>';
            } else {
                echo '<li><strong> '.get_the_title().'</strong></li>';
            }
        }
    }
    elseif (is_tag()) {single_tag_title();}
    elseif (is_day()) {echo"<li>Archive for "; the_time('F jS, Y'); echo'</li>';}
    elseif (is_month()) {echo"<li>Archive for "; the_time('F, Y'); echo'</li>';}
    elseif (is_year()) {echo"<li>Archive for "; the_time('Y'); echo'</li>';}
    elseif (is_author()) {echo"<li>Author Archive"; echo'</li>';}
    elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {echo "<li>Blog Archives"; echo'</li>';}
    elseif (is_search()) {echo"<li>Search Results"; echo'</li>';}
    echo '</ol>';
}



//define( 'OPTIONS_FRAMEWORK_DIRECTORY', get_template_directory_uri() . '/admin/' );
//require_once dirname( __FILE__ ) . '/admin/options-framework.php';


/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'ammarath_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function ammarath_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Ammarath, use a find and replace
	 * to change 'ammarath' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'ammarath', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'ammarath' ),
	) );
	
	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link','audio'
	) );

	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'ammarath_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // ammarath_setup
add_action( 'after_setup_theme', 'ammarath_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function ammarath_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'ammarath' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'ammarath_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function ammarath_scripts() {
	wp_enqueue_style( 'ammarath-style', get_stylesheet_uri() );
	wp_enqueue_style( 'ammarath-custom', get_template_directory_uri().'/css/modern-business.css' );
	wp_enqueue_style( 'ammarath-bootstrap', get_template_directory_uri().'/css/bootstrap.min.css' );
	wp_enqueue_style( 'ammarath-flat-ui', get_template_directory_uri().'/css/flat-ui.css' );
	wp_enqueue_style( 'ammarath-awesome', get_template_directory_uri().'/font-awesome/css/font-awesome.min.css' );


	wp_enqueue_script( 'ammarath-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );
	wp_enqueue_script( 'ammarath-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '20120206', true );
	wp_enqueue_script( 'ammarath-custom', get_template_directory_uri() . '/js/modern-business.js', array(), '20120206', true );
	wp_enqueue_script( 'ammarath-hover', get_template_directory_uri() . '/inc/bootstrap-hover-dropdown.min.js', array(), '20120206', true );

	wp_enqueue_script( 'ammarath-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'ammarath_scripts' );


/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Load Post Types file.
 */
require get_template_directory() . '/inc/post-types.php';

/**
 * Load vafpress framework
 */
require_once get_template_directory() . '/inc/vafpress/bootstrap.php';


/**
 *Register Custom Navigation Walker
 */
require_once get_template_directory() . '/inc/wp_bootstrap_navwalker.php';

/**
 * Include Custom Data Sources
 */
require_once 'admin/data_sources.php';

// options
$tmpl_opt  = get_template_directory() . '/admin/option/option.php';

/**
 * Create instance of Options
 */
$theme_options = new VP_Option(array(
	'is_dev_mode'           => false,                                  // dev mode, default to false
	'option_key'            => 'ammarath_option',                           // options key in db, required
	'page_slug'             => 'ammarath_option',                           // options page slug, required
	'template'              => $tmpl_opt,                              // template file path or array, required
	'menu_page'             => 'themes.php',                           // parent menu slug or supply `array` (can contains 'icon_url' & 'position') for top level menu
	'use_auto_group_naming' => true,                                   // default to true
	'use_util_menu'         => true,                                   // default to true, shows utility menu
	'minimum_role'          => 'edit_theme_options',                   // default to 'edit_theme_options'
	'layout'                => 'fixed',                                // fluid or fixed, default to fixed
	'page_title'            => __( 'Theme Options', 'vp_textdomain' ), // page title
	'menu_label'            => __( 'Theme Options', 'vp_textdomain' ), // menu label
));


/**
* DEFINE METABOX TEMPLATES
**/
 $mb_about  = get_template_directory() . '/inc/vafpress/mb_about.php';
 $mb_faq  = get_template_directory() . '/inc/vafpress/mb_faq.php';
 $mb_services  = get_template_directory() . '/inc/vafpress/mb_services.php';
 $mb_homepage  = get_template_directory() . '/inc/vafpress/mb_homepage.php';

/**
* CREATE THE META BOXES
**/
$mb1 = new VP_Metabox($mb_about);
$mb2 = new VP_Metabox($mb_faq);
$mb3 = new VP_Metabox($mb_services);
$mb4 = new VP_Metabox($mb_homepage);

/** SHORTCODES **/
$tmpl_sg1  = get_template_directory() . '/inc/vafpress/shortcodes1.php';

/**
 * Create instances of Shortcode Generator
 */
$tmpl_sg1 = array(
	'name'           => 'sg_1',                                        // unique name, required
	'template'       => $tmpl_sg1,                                     // template file or array, required
	'modal_title'    => __( 'Ammarath Shortcodes', 'vp_textdomain'), // modal title, default to empty string
	'main_image'     => get_template_directory_uri() . '/inc/vafpress/public/img/vp_shortcode_icon.png',
	'button_title'   => __( 'Ammarath Shortcodes', 'vp_textdomain'),              // button title, default to empty string
	'types'          => array( 'post', 'page' ),                       // at what post types the generator should works, default to post and page
	'included_pages' => array( 'appearance_page_vpt_option' ),         // or to what other admin pages it should appears
);

$sg1 = new VP_ShortcodeGenerator($tmpl_sg1);





// column (grid) shortcode
function ammarath_grid($atts,$content=null){
   extract(shortcode_atts(array(
      'col_lg' => 12,
      'col_xs' => 12,
      'offset_lg' => 0,
      'offset_xs' => 0
   ), $atts));
    return '<div class="col-md-'.$col_lg. ' ' . 'col-xs-'.$col_xs. ' ' . 'col-md-offset-'.$offset_lg. ' ' . 'col-xs-offset-'.$offset_xs.'">'.$content.'</div>';
}
add_shortcode('grid', 'ammarath_grid');

// Section shortcode
function ammarath_section($atts){
   extract(shortcode_atts(array(
      'title' => '',
      'section_content' => ''
   ), $atts));
    return '<div class="section-colored text-center"><div class="container"><div class="row"><div class="col-lg-12">
    <h2>' . $title .'</h2>
    <p>' .$section_content .'</p><hr>
    </div></div> <!-- /.row --></div><!-- /.container --></div>';
}
add_shortcode('section', 'ammarath_section');

// Call To Action shortcode
function ammarath_action($atts){
   extract(shortcode_atts(array(
      'title' => '',
      'section_content' => '',
      'btn_text' => '',
      'btn_link' => ''
   ), $atts));
    return '<div class="container">

        <div class="row well">
            <div class="col-lg-8 col-md-8">
                <h4>' . $title . '</h4>
                <p>' . $section_content . '</p>
            </div>
            <div class="col-lg-4 col-md-4">
                <a class="btn btn-lg btn-primary pull-right" href="' . $btn_link . '">' . $btn_text . '</a>
            </div>
        </div>
        <!-- /.row -->

    </div>';
}
add_shortcode('call_to_action', 'ammarath_action');







/****** DYNAMIC CSS ******/

// hook into options after ajax saving
add_action('vp_option_after_ajax_save-ammarath_option', 'ammarath_generate_dynamic_css', 10, 1);

function ammarath_generate_dynamic_css( $option ) {
    // write the dynamic css file
    // you can use $option variable or access them using vp_option
	$data = $option;	
	$css_dir = get_template_directory() . '/css/'; // Shorten code, save 1 call
	ob_start(); // Capture all output (output buffering)

	require($css_dir . 'dynamic-css.php'); // Generate CSS

	$css = ob_get_clean(); // Get generated CSS (output buffering)
	file_put_contents($css_dir . 'dynamic-css.css', $css, LOCK_EX); // Save it

}



function ammarath_enqueue_dynamic_css() {
wp_register_style('options', get_template_directory_uri() . '/css/dynamic-css.css', 'style');
wp_enqueue_style( 'options');
}
add_action('wp_print_styles', 'ammarath_enqueue_dynamic_css');
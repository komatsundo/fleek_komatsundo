<?php
/**
 * fleek functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package fleek
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'fleek_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function fleek_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on fleek, use a find and replace
		 * to change 'fleek' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'fleek', get_template_directory() . '/languages' );

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
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'fleek' ),
				'menu-2' => esc_html__( 'Footer', 'fleek' ),
			)
		);

		$test = 'sdafsdfas';
class custom_walker_nav_menu extends Walker_Nav_Menu {
	function start_lvl(&$output, $depth = 0, $args = array()) {
		$output .= '<div class="submenuWrap"><div class="submenu_in"><ul class="sub-menu">';
	}
	function end_lvl(&$output, $depth = 0, $args = array()) {
		$output .= '</ul></div></div>';
	}
}
		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'fleek_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'fleek_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function fleek_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'fleek_content_width', 640 );
}
add_action( 'after_setup_theme', 'fleek_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function fleek_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'fleek' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'fleek' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'fleek_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function fleek_scripts() {
	wp_enqueue_style( 'fleek-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'fleek-style', 'rtl', 'replace' );

	wp_enqueue_script( 'fleek-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'fleek_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

//画像パス用のショートコード
function imgPathcode() {
  return get_template_directory_uri();
}
add_shortcode('imgPath', 'imgPathcode');

//カスタムポストの記事一覧のページャー表示
function bmPageNavi() {
  global $wp_rewrite;
  global $wp_query;
  global $paged;

  $paginate_base = get_pagenum_link(1);
  if (strpos($paginate_base, '?') || ! $wp_rewrite->using_permalinks()) {
	$paginate_format = '';
	$paginate_base = add_query_arg('page', '%#%');
  } else {
	$paginate_format = (substr($paginate_base, -1 ,1) == '/' ? '' : '/') .
	untrailingslashit('?page=%#%', 'paged');;
	$paginate_base .= '%_%';
  }

  $result = paginate_links( array(
	'base' => $paginate_base,
	'format' => $paginate_format,
	'total' => $wp_query->max_num_pages,
	'mid_size' => 5,
	'prev_text' => '前の記事',
	'next_text' => '次の記事',
  ));

  return $result;
}

//cssファイルにタイムスタンプを追加
add_filter('style_loader_tag', 'add_timestamp_param_on_enqueue', 10, 3);
add_filter('script_loader_tag', 'add_timestamp_param_on_enqueue', 10, 3);

function add_timestamp_param_on_enqueue($html, $handle, $href){
  $varkey = 'timestamp';

  // ソースファイルのURLとサイトURLと先頭が一致しない場合は処理しない
  $siteUrl = site_url();
  if(strncmp($siteUrl, $href, strlen($siteUrl))===0){
	$isProc = true; // 処理するか否かのフラグ

	// $varkey の名前が別途指定されている場合は処理しない。
	$query = parse_url($href, PHP_URL_QUERY);
	if($query!==null){
	  foreach(explode('&', $query) as $param){
		$a = explode('=', $param);
		if($a[0]===$varkey){
		  $isProc = false;
		  break;
		}
	  }
	}

	// 処理する場合
	if($isProc){
	  $docRoot = rtrim($_SERVER['DOCUMENT_ROOT'], '/').'/';
	  $path = $docRoot . $uri;
	  if(file_exists($path)){
		$newVar = filemtime($path);
		$symbol = $query===null ? '?' : '&';
		$newHref = $href.$symbol.$varkey.'='.$newVar;
		$html = str_replace($href, $newHref, $html);
	  }
	}
  }

  return $html;
}
function the_timestamped_style($cssPath){
  echo add_timestamp_param_on_enqueue('<link rel="stylesheet" href="'.$cssPath.'">', 0, $cssPath);
}
function the_timestamped_script($jsPath){
  echo add_timestamp_param_on_enqueue('<script src="'.$jsPath.'"></script>', 0, $jsPath);
}

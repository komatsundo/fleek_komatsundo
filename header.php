<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fleek
 */
?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo("charset"); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/top/onfleek_favicon.ico">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
	integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<!-- CSS -->
	<?php the_timestamped_style(get_stylesheet_directory_uri().'/css/style.css'); ?>
	<!-- js -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/slick.min.js"></script>

</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
<div class="siteWrapper">
<!-- ヘッダー -->
<header>
  <div class="h-bar flex wrapper">
	<div class="h-left flex">
	  <div class="logo">
		<p>新車購入がオンラインでも完結</p>
		<a href="/">
		<img src="<?php echo get_template_directory_uri(); ?>/images/header/top_logo.png">
		</a>
	  </div>
	  <div class="logo-txt">
		<p>オンライン通販店</p>
	  </div>
	</div>
	<div class="h-right flex">
	  <div class="tel">
		<span><a href="tel:000-000-0000">000-000-0000</a></span>
		<small class="biz-hour">営業時間 10:00〜18:00</small>
	  </div>
	  <div class="contact">
		<p><a href="https://tayori.com/f/onfleek01/" rel="noopener" target="_blank" class="inquiry-button">お問い合わせ</a></p>
	  </div>
	</div>
  </div>


<?php //各グローバルナビのリンクをidで指定
function gloval_nav_link($id){
	$permalink_id = get_permalink($id);
	$page_title = get_page($id);
	$display_page_title = $page_title->post_title;
	echo '<li class="menu-list__link"><a href="'.$permalink_id.'">'.$display_page_title.'</a></li>';
}
function gloval_nav_linki_mobile($id){
	$permalink_id = get_permalink($id);
	$page_title = get_page($id);
	$display_page_title = $page_title->post_title;
	echo '<li><a href="'.$permalink_id.'">'.$display_page_title.'</a></li>';
}
?>


  <div class="h-menu wrapper pc-only">
	  <nav class="h-menu__pc full-width">
<div class="h-menu__pc-inner">
	<ul class="flex menu-list">
		<?php gloval_nav_link(380 /*TOYOTA ミニバン*/) ?>
		<?php gloval_nav_link(379 /*TOYOTA SUV*/) ?>
		<?php gloval_nav_link(76 /*TOYOTA セダン他*/) ?>
		<?php gloval_nav_link(49 /*当社コンセプト*/) ?>

	<li class="menu-list__link">
	  <?php
   $id = "55" /*新車ニュース*/;
   $page_title = get_page($id);
   echo $page_title->post_title;
   ?>
  <div class="bg-white">
	  <div class="mask"></div>
	  <ul>
		<?php
  $args = [
    "posts_per_page" => 11, // 表示する投稿数
    "post_type" => ["newcar"], // 取得する投稿タイプのスラッグ
    "orderby" => "date", //日付で並び替え
    "order" => "DESC", // 降順 or 昇順
  ];
  $my_posts = get_posts($args);
  ?>
		<?php foreach ($my_posts as $post):
    setup_postdata($post); ?>
		  <li>
			<a href="<?php echo get_permalink($post->ID); ?>">
				<?php echo get_the_title($post->ID); ?>
			</a>
		  </li>
		<?php
  endforeach; ?>
		<?php wp_reset_postdata(); ?>
		<li><a href="<?php
			$id = "55" /*新車ニュース*/;
			 echo get_permalink($id);
			 ?>"><?php $page_title = get_page($id);
				echo $page_title->post_title; ?>一覧</a></li>
	  </ul>
  </div>
  </li>
<li class="menu-list__link">
  <?php
  $id = "58" /*買取ニュース*/;
  $page_title = get_page($id);
  echo $page_title->post_title;
  ?>
<div class="bg-white">
	<div class="mask"></div>
<ul>
  <?php
  $args = [
    "posts_per_page" => 11, // 表示する投稿数
    "post_type" => ["purchase"], // 取得する投稿タイプのスラッグ
    "orderby" => "date", //日付で並び替え
    "order" => "DESC", // 降順 or 昇順
  ];
  $my_posts = get_posts($args);
  ?>
  <?php foreach ($my_posts as $post):
    setup_postdata($post); ?>
	<li>
	  <a href="<?php echo get_permalink($post->ID); ?>">
		  <?php echo get_the_title($post->ID); ?>
	  </a>
	</li>
  <?php
  endforeach; ?>
  <?php wp_reset_postdata(); ?>
  <li><a href="<?php $id = "58" /*買取ニュース*/; echo get_permalink($id);
	   ?>"><?php $page_title = get_page($id);
		  echo $page_title->post_title; ?>一覧</a></li>
</ul>
		</div>
	  </li>
	  <?php gloval_nav_link(158 /*ブログ*/) ?>

		</ul>
		</div>Í

		</nav>
  </div>

  <div id="navArea">
	<nav>
	  <div class="inner">
		<ul class="menu-list">
			<?php gloval_nav_linki_mobile(380 /*TOYOTA ミニバン*/) ?>
			<?php gloval_nav_linki_mobile(379 /*TOYOTA SUV*/) ?>
			<?php gloval_nav_linki_mobile(76 /*TOYOTA セダン他*/) ?>
			<?php gloval_nav_linki_mobile(49 /*当社コンセプト*/) ?>
		  <li><a href="<?php
		  $id = "55" /*新車ニュース*/;
		   echo get_permalink($id);
		   ?>"><?php $page_title = get_page($id);
			  echo $page_title->post_title; ?></a></li>
		  <li><a href="<?php $id = "58" /*買取ニュース*/; echo get_permalink($id);
			 ?>"><?php $page_title = get_page($id);
				echo $page_title->post_title; ?></a></li>
		  <li><a href="<?php
		  $id = "158" /*ブログ*/;
		  echo get_permalink($id);
		  ?>">
			<?php
			$page_title = get_page($id);
			echo $page_title->post_title;
			?></a></li>
		</ul>
		<div class="tel">
		  <span><a href="tel:000-000-0000">000-000-0000</a></span>
		  <small class="biz-hour">営業時間 10:00〜18:00</small>
		</div>
		<div class="contact"><a href="https://tayori.com/f/onfleek01/" rel="noopener" target="_blank" class="inquiry-button">お問い合わせ</a></div>
	  </div>
	</nav>
	<div class="toggle_btn sp-only">
	  <span></span>
	  <span></span>
	  <span></span>
	</div>
	<div id="mask"></div>
  </div>

<!-- #site-navigation -->

</header>
<aside class="breadcrumb-wrap">
<?php
if ( function_exists('yoast_breadcrumb') ) {
	yoast_breadcrumb('
	<p id="breadcrumbs">','</p>');
}
?>
</aside>

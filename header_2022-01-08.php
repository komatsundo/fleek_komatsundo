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
	
	  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
		integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	  <!-- CSS -->
	  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css" />
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
		<p><a href="<?php
			$id = "161" /*お問合せ*/;
			echo get_permalink($id);
			?>" class="inquiry-button">
			  <?php
			  $page_title = get_page($id);
			  echo $page_title->post_title;
			  ?></a></p>
	  </div>
	</div>
  </div>

  <div class="h-menu wrapper pc-only">
	  <nav class="h-menu__pc full-width">
<div class="h-menu__pc-inner">
	<ul class="flex menu-list">
	  <li><a href="<?php
   $id = "61" /*TOYOTA ミニバン/ SUV*/;
   echo get_permalink($id);
   ?>">
		  <?php
    $page_title = get_page($id);
    echo $page_title->post_title;
    ?></a></li>
	  <li><a href="<?php
   $id = "76" /*TOYOTA セダン他*/;
   echo get_permalink($id);
   ?>">
		  <?php
    $page_title = get_page($id);
    echo $page_title->post_title;
    ?></a></li>
	<li><a href="<?php
 $id = "49" /*当社コンセプト*/;
 echo get_permalink($id);
 ?>">
	  <?php
   $page_title = get_page($id);
   echo $page_title->post_title;
   ?></a></li>
	<li id="sub-1">
	  <?php
   $id = "55" /*新車ニュース*/;
   $page_title = get_page($id);
   echo $page_title->post_title;
   ?>
  <div class="bg-white">
	  <ul id="sub-1">
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
<li>
  <?php
  $id = "58" /*買取ニュース*/;
  $page_title = get_page($id);
  echo $page_title->post_title;
  ?>
<div class="bg-white">
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
<li><a href="<?php
$id = "158" /*ブログ*/;
echo get_permalink($id);
?>">
  <?php
  $page_title = get_page($id);
  echo $page_title->post_title;
  ?></a></li>
		</ul>
		</div>
		</nav>
  </div>
  <div id="navArea">
	<nav>
	  <div class="inner">
		<ul class="menu-list">
		  <li><a href="<?php
				 $id = "61" /*TOYOTA ミニバン/ SUV*/;
				 echo get_permalink($id);
				 ?>">
						<?php
				  $page_title = get_page($id);
				  echo $page_title->post_title;
				  ?></a></li>
		  <li><a href="<?php
				 $id = "76" /*TOYOTA セダン他*/;
				 echo get_permalink($id);
				 ?>">
						<?php
				  $page_title = get_page($id);
				  echo $page_title->post_title;
				  ?></a></li>
		  <li><a href="<?php
			   $id = "49" /*当社コンセプト*/;
			   echo get_permalink($id);
			   ?>">
					<?php
				 $page_title = get_page($id);
				 echo $page_title->post_title;
				 ?></a></li>
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
		<div class="contact"><a href="<?php $id = "161" /*お問合せ*/; echo get_permalink($id); ?>" class="inquiry-button"><?php $page_title = get_page($id); echo $page_title->post_title; ?></a></div>
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

<?php
if ( function_exists('yoast_breadcrumb') ) {
	yoast_breadcrumb('
	<p id="breadcrumbs">','</p>');
}
?>
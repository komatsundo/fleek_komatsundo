<?php
/**
 * Template Name: Front Page
 */

get_header(); ?>
<style>
	.entry-title{
		display :none!important;
	}
</style>
	<main id="primary" class="site-main">

<div class="slider">
  <ul id="fv-slider">
	<li><a href="<?php if( get_field('main_image_link_1') ) { ?><?php the_field('main_image_link_1'); ?><?php } ?>"><img src="<?php if( get_field('main_image_1') ) { ?><?php the_field('main_image_1'); ?><?php } ?>" alt=""></a></li>
	<li><a href="<?php if( get_field('main_image_link_2') ) { ?><?php the_field('main_image_link_2'); ?><?php } ?>"><img src="<?php if( get_field('main_image_2') ) { ?><?php the_field('main_image_2'); ?><?php } ?>" alt=""></a></li>
	<li><a href="<?php if( get_field('main_image_link_3') ) { ?><?php the_field('main_image_link_3'); ?><?php } ?>"><img src="<?php if( get_field('main_image_3') ) { ?><?php the_field('main_image_3'); ?><?php } ?>" alt=""></a></li>
	<li><a href="<?php if( get_field('main_image_4') ) { ?><?php the_field('main_image_4'); ?><?php } ?>"><img src="<?php if( get_field('main_image_4') ) { ?><?php the_field('main_image_4'); ?><?php } ?>" alt=""></a></li>
  </ul>
</div>

  <!-- ファーストビューの下画像 -->
  <div class="fv-low wrapper">
	<ul class="flex">
	  <li><a href="<?php if( get_field('banner_link_1') ) { ?><?php the_field('banner_link_1'); ?><?php } ?>"><img src="<?php if( get_field('banner_1') ) { ?><?php the_field('banner_1'); ?><?php } ?>" alt=""></a></li>
	  <li><a href="<?php if( get_field('banner_link_2') ) { ?><?php the_field('banner_link_2'); ?><?php } ?>"><img src="<?php if( get_field('banner_2') ) { ?><?php the_field('banner_2'); ?><?php } ?>" alt=""></a></li>
	<li><a href="<?php if( get_field('banner_link_3') ) { ?><?php the_field('banner_link_3'); ?><?php } ?>"><img src="<?php if( get_field('banner_3') ) { ?><?php the_field('banner_3'); ?><?php } ?>" alt=""></a></li>
	<li><a href="<?php if( get_field('banner_link_4') ) { ?><?php the_field('banner_link_4'); ?><?php } ?>"><img src="<?php if( get_field('banner_4') ) { ?><?php the_field('banner_4'); ?><?php } ?>" alt=""></a></li>
</ul>
  </div>



<!-- コンテンツ -->
	<section class="wrapper">
		 <div class="contents-wrapper">
	<div class="contents">
	  <h2><?php if( get_field('title_1') ) { ?><?php the_field('title_1'); ?><?php } ?></h2><br>
	  <p><?php if( get_field('text_1') ) { ?><?php the_field('text_1'); ?><?php } ?></p>
	  <a href="<?php if( get_field('link_image_url_1') ) { ?><?php the_field('link_image_url_1'); ?><?php } ?>"><img src="<?php if( get_field('link_image_1') ) { ?><?php the_field('link_image_1'); ?><?php } ?>" alt=""></a>
	</div>
	<div class="contents">
<h2><?php if( get_field('title_2') ) { ?><?php the_field('title_2'); ?><?php } ?></h2><br>
  <p><?php if( get_field('text_2') ) { ?><?php the_field('text_2'); ?><?php } ?></p>
  <a href="<?php if( get_field('link_image_url_2') ) { ?><?php the_field('link_image_url_2'); ?><?php } ?>"><img src="<?php if( get_field('link_image_2') ) { ?><?php the_field('link_image_2'); ?><?php } ?>" alt=""></a>
	</div>
	<div class="contents">
<h2><?php if( get_field('title_3') ) { ?><?php the_field('title_3'); ?><?php } ?></h2><br>
  <p><?php if( get_field('text_3') ) { ?><?php the_field('text_3'); ?><?php } ?></p>
  <a href="<?php if( get_field('link_image_url_3') ) { ?><?php the_field('link_image_url_3'); ?><?php } ?>"><img src="<?php if( get_field('link_image_3') ) { ?><?php the_field('link_image_3'); ?><?php } ?>" alt=""></a>
	</div>
	<div class="contents">
<h2><?php if( get_field('title_4') ) { ?><?php the_field('title_4'); ?><?php } ?></h2><br>
  <p><?php if( get_field('text_4') ) { ?><?php the_field('text_4'); ?><?php } ?></p>
  <a href="<?php if( get_field('link_image_url_4') ) { ?><?php the_field('link_image_url_4'); ?><?php } ?>"><img src="<?php if( get_field('link_image_4') ) { ?><?php the_field('link_image_4'); ?><?php } ?>" alt=""></a>
	</div>
  </div>
  <!-- 「新車のお店」の新車販売 -->
  <div class="img-card">
	<img src="<?php echo get_template_directory_uri(); ?>/images/top/pic_kari1.jpg" alt="『新車のお店』の新車販売のイメージ画像" class="left">
	<div class="c-txt">
	  <div class="txt-contents">
		<h2>『新車のお店』の新車販売</h2>
		<p>
		  当社では、提携ディーラー様へ大量発注することで<br>大きな値引きをもらうとともに、<br>自社の徹底したコストダウンを行うことで、<br>エンドユーザーである皆様へそのままダイレクトに<br>大きな値引きを提示できることを強みとしております。
		</p>
			<a href="<?php
			   $id = "55" /*新車ニュース*/;
			   echo get_permalink($id);
			   ?>" class="button">さらに詳しい情報はこちら</a>
	  </div>
	</div>
  </div>

  <!-- 新車ニュース -->
  <section class="cars-news-list no-pager">
	<h2>新車ニュース</h2>

	<?php
 $custom_post_type = "newcar";
 get_template_part("template-parts/front-news-block-list", null, $custom_post_type);
 ?>

	<div class="button">
	  <a href="<?php
   $id = "58" /*買取ニュース*/;
   echo get_permalink($id);
   ?>"><?php
$page_title = get_page($id);
echo $page_title->post_title;
?>一覧はこちら</a>
	</div>
  </section>
   <!-- 「新車のお店」の車買取 -->
   <div class="img-card img-card-reverse">
	<img src="<?php echo get_template_directory_uri(); ?>/images/top/pic_kari2.jpg" alt="『新車のお店』の車買取のイメージ画像" class="right">
	<div class="c-txt c-txt-reverse">
	  <div class="txt-contents">
		<h2>『新車のお店』の車買取</h2>
		<p>
		  自動車業界の今！を車屋目線でいろいろな視点で<br>コンテンツを作成しております。<br>業界情報をはじめ、新型車の試乗インプレッションや実燃費情報、<br>使いやすさや乗り心地のなど様々な視点で見ていきたいと思います。<br>また、当社での納車情報なども随時更新していきます。
		</p>
		<a href="<?php
		   $id = "55" /*新車ニュース*/;
		   echo get_permalink($id);
		   ?>" class="button">さらに詳しい情報はこちら</a>
	  </div>
	</div>
	</div>
  <section class="cars-news-list no-pager">
	<h2>買取ニュース</h2>
<?php
$custom_post_type = "purchase";
get_template_part("template-parts/front-news-block-list", null, $custom_post_type);
?>
	<div class="button">
<a href="<?php
$id = "58" /*買取ニュース*/;
echo get_permalink($id);
?>"><?php
$page_title = get_page($id);
echo $page_title->post_title;
?>一覧はこちら</a>
	</div>
  </section>
  <!-- ブログ -->
  <div class="blog">
	<h2 class="mb-30">ブログ</h2>
	<p>当社では、一台一台のグレードや装備内容をきっちり査定に反映します。当たり前の話の様ですが、これが当たり前ではないのが実情です。<br>特に、高年式の車両は安全装備や特殊な電子装置が多くついており、実際に大きくプラス査定になるオプションを知らないスタッフが査定したらどうなるでしょう？？また、日本車は世界各国から愛されています。<br>つまり、国内の業者間の売買では、輸出に向けた相場いかに織り込めるかが高値で買取れる秘訣です。経験豊富な当社へお任せください。</p>
	<a href="<?php
	   $id = "158" /*ブログ*/;
	   echo get_permalink($id);
	   ?>"class="button">さらに詳しい情報はこちら</a>
  </div>
  <!-- ブログ一覧 -->
	  <section class="blog-list front-page__blog no-pager">
		  <h2 class="mb-30">ブログ</h2>
<?php
$custom_post_type = "blog";
get_template_part("template-parts/blog-list", null, $custom_post_type);
?>

<div class="button">
	  <a href="<?php
   $id = "158" /*ブログ*/;
   echo get_permalink($id);
   ?>"><?php
$page_title = get_page($id);
echo $page_title->post_title;
?>一覧はこちら</a>
	</div>

  </section>
</section>
</main><!-- #main -->
<?php get_footer();

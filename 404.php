<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package fleek
 */

get_header();
?>

	<!-- メイン -->
		<main class="wrapper archive-wrapper">

		  <h2 class="archive-title">エラー 404: ページが見つかりません。</h2>
		  <p>お探しの記事や情報が見つからない場合は、お気軽にお問い合わせください。</p>
		  <section class="blog-area">
			 <?php
			 $custom_post_type = "blog";
			 get_template_part( 'template-parts/blog-list', null, $custom_post_type); ?>

		  </section>
	</main><!-- #main -->
<?php
get_footer();

<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package fleek
 */

get_header();
?>

		<!-- メイン -->
		<main class="wrapper archive-wrapper">

		  <h2 class="archive-title">ブログ</h2>
		  <div class="category-navi">
			<ul class="category-list">
			  <li class="category-item"><a href="/category/blog/blog_car-industry-info/">車業界情報</a></li>
			  <li class="category-item"><a href="/category/blog/blog_car-test-drive/">新型車早速体感</a></li>
			  <li class="category-item"><a href="/category/blog/blog_delivery-info/">納車情報</a></li>
			</ul>
		  </div>
		  <section class="blog-area">
			 
		<?php 
		  $custom_post_type = "blog";		  
		  get_template_part( 'template-parts/blog-list', null, $custom_post_type); ?>
		  </section>
	</main><!-- #main -->

<?php
get_footer();

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

<?php if ( is_category('blog_delivery-info') ) : ?>

<h2 class="archive-title">納車情報</h2>
  <?php get_template_part( 'template-parts/blog-list-menu'); ?>

<?php
  $custom_post_category = "blog_delivery-info";
  get_template_part( 'template-parts/blog-list-category', null, $custom_post_category); ?>

<?php elseif ( is_category('blog_car-test-drive') ) : ?>

<h2 class="archive-title">新型車早速体感</h2>
  <?php get_template_part( 'template-parts/blog-list-menu'); ?>

<?php
  $custom_post_category = "blog_car-test-drive";
  get_template_part( 'template-parts/blog-list-category', null, $custom_post_category); ?>

<?php elseif ( is_category('blog_car-industry-info') ) : ?>

<h2 class="archive-title">車業界情報</h2>
  <?php get_template_part( 'template-parts/blog-list-menu'); ?>

<?php
  $custom_post_category = "blog_car-industry-info";
  get_template_part( 'template-parts/blog-list-category', null, $custom_post_category); ?>

<?php else : ?>

<h2 class="archive-title">ブログ</h2>
  <?php get_template_part( 'template-parts/blog-list-menu'); ?>

		<?php
		  $custom_post_type = "blog";
		  get_template_part( 'template-parts/blog-list', null, $custom_post_type); ?>

<?php endif; ?>
</section>


	</main><!-- #main -->

<?php
get_footer();

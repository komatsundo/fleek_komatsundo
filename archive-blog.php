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
		  <?php get_template_part( 'template-parts/blog-list-menu'); ?>

		  <section class="blog-area">

	 		<?php
		     $custom_post_type = "blog";
		     get_template_part( 'template-parts/blog-list', null, $custom_post_type); ?>

		  </section>
	</main><!-- #main -->

<?php
get_footer();

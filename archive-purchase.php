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

		  <h2 class="archive-title">買取ニュース</h2>
		  <section class="cars-news-list no-border">
		  <?php 
		  	$custom_post_type = "purchase";		  
		  	get_template_part( 'template-parts/news-block-list', null, $custom_post_type); ?>
		  </section>			 
	</main><!-- #main -->

<?php
get_footer();

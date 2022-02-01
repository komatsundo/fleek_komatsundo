<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package fleek
 */

get_header();
?>

	<main id="primary" class="site-main">
		
		<?php
			$maker_name = "maker_toyota";
			get_template_part( 'template-parts/car-detail', null, $maker_name);
		  ?>

	</main><!-- #main -->

<?php
get_footer();

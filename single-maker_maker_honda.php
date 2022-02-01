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
			$maker_name = "maker_honda";
			get_template_part( 'template-parts/cars-list', null, $maker_name);
		  ?>

	</main><!-- #main -->

<?php
get_footer();

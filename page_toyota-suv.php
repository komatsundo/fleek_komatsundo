<?php
/**
 * Template Name: TOYOTA製車種
 */

get_header();
?>

	<main id="primary" class="site-main">

<?php
    $maker_name = "maker_toyota";
    get_template_part( 'template-parts/cars-list-toyota', null, $maker_name);
  ?>
	</main><!-- #main -->

<?php
get_footer();


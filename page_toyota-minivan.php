<?php
/**
 * Template Name: TOYOTA ミニバン
 */

get_header();
?>

	<main id="primary" class="site-main">


<?php
    $maker_name = "maker_toyota";
    get_template_part( 'template-parts/cars-list', null, $maker_name);
  ?>
	</main><!-- #main -->

<?php
get_footer();


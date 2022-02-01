<?php
/**
 * Template Name: 買取ニュース
 */

get_header();
?>

	<main id="primary" class="site-main">

  	  <?php
		$custom_post_type = "purchase";
		get_template_part( 'template-parts/custom-post-list', null, $custom_post_type);
	  ?>

	</main><!-- #main -->

<?php
get_footer();


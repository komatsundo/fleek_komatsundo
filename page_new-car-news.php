<?php
/**
 * Template Name: 新車ニュース
 */

get_header();
?>

	<main id="primary" class="site-main">

	<?php
		$custom_post_type = "newcar";
		get_template_part( 'template-parts/custom-post-list', null, $custom_post_type);
    ?>

	</main><!-- #main -->

<?php
get_footer();

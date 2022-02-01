<?php
/**
 * Template Name: お見積もり
 */

get_header();
?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/estimate.css" />

	<main id="primary" class="site-main wrapper estimate-wrapper">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_footer();

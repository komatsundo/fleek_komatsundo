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

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/estimate.css" />

	<main id="primary" class="site-main wrapper estimate-wrapper">
		<!-- メイン -->
			<div class="wrapper">
<?php if( get_field('estimate_short_code') ) { ?>
	<?php
		$short_code = get_field('estimate_short_code');
		echo do_shortcode($short_code);
	  ?>
  <?php } ?>
			</div>

	</main><!-- #main -->

<?php
get_footer();

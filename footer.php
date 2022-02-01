<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fleek
 */
?>

<!-- フッター -->
	<footer>
	  <div class="wrapper">
		<nav id="site-navigation" class="main-navigation footer-nav">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-2',
					'menu_id'        => 'footer-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
		<div class="footer-img">
		  <img src="<?php echo get_template_directory_uri(); ?>/images/footer/onfleek_logo.png">
		  <p>株式会社ON FLEEEK<br>
			<a href="mailto:info@fleek.co.jp">info@fleek.co.jp</a><br>
			  〒920-0901 石川県金沢市彦三町1丁目2−1アソルティ金沢彦三1F<br>
			  </p>
		</div>
	  </div>
	</footer>
<?php wp_footer(); ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/slick.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
</div> <!-- #page -->
</div> <!-- .siteWrapper -->
</body>
</html>

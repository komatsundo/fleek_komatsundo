<?php
/**
 * Template Name: ブログ
 */

get_header();
?>

<main id="primary" class="site-main">


<div class="pagination">
   <div class="list-box">
	   <ul>
		<?php
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		$the_query = new WP_Query( array(
			'post_status' => 'publish',
			'post_type' => 'blog', //ページの種類（例、page、post、カスタム投稿タイプ）
			'paged' => $paged,
			'posts_per_page' => 3, // 表示件数
			'orderby'     => 'date',
			'order' => 'DESC'
		) );
		if ($the_query->have_posts()) :
			while ($the_query->have_posts()) : $the_query->the_post();
			?>

	<li>
	  <a href="<?php echo get_permalink($post->ID); ?>">
		<?php
		// アイキャッチ画像を取得
		$thumbnail_id = get_post_thumbnail_id($post->ID);
		$thumb_url = wp_get_attachment_image_src($thumbnail_id, 'small');
		if (get_post_thumbnail_id($post->ID)) {
		  echo '<figure><img src="' . $thumb_url[0] . '" alt=""></figure>';
		} else {
		  // アイキャッチ画像が登録されていなかったときの画像
		  echo '<figure><img src="' . get_template_directory_uri() . '/img/img-default.png" alt=""></figure>';
		}
		?>
		<?php
		// ターム名を表示
		$terms = get_the_terms($post->ID, 'tax_name_1'); // タームが所属するタクソノミースラッグを指定
		if (!empty($terms)) { // タームが複数選択されていたらカンマ区切りで表示
		  $output = array();
		  foreach ($terms as $term) {
			if ($term->parent != 0)
			  $output[] = $term->name;
		  }
		  if (count($output)) {
			echo '<span class="term">' . join(", ", $output) . '</span>';
		  } else {
			echo '<span class="term">' . $term->name . '</span>';
		  }
		}
		?>
		<p>
		  <span class="date"><?php the_time('Y.m.d') ?></span>
		  <?php echo get_the_title($post->ID); ?>
		</p>
	  </a>
	</li>
  <?php wp_reset_postdata(); ?>

			<?php
			endwhile;
		else:
			echo '<div><p>ありません。</p></div>';
		endif;
		?>
		</ul>
	</div>
	<?php wp_pagenavi(array('query' => $the_query)); ?>
</div>
</ul>

	</main><!-- #main -->
		
<?php
get_footer();

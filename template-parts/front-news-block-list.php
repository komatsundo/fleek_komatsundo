	<ul>	
		  <?php
		  //get_template_partの引数を格納」
			$custom_post_type = $args;
	  // initialize
	  $temp = $wp_query; 
	  $wp_query = null; 
	  $wp_query = new WP_Query();
	  // 数値のみ受け取る
	  $paged = (preg_match("/^[0-9]+$/",htmlspecialchars($_GET['page']))) ? htmlspecialchars($_GET['page']) : 1;
	  $param = array(
		  'posts_per_page' => 6,
		  'paged' => $paged,
		  'post_type'      => array($custom_post_type),
		  'orderby'        => 'post_date',
		  'order'          => 'DESC'
	  );
	  $wp_query->query($param); 
	  get_header(); ?>
		  <?php if ( $wp_query->have_posts() ) : ?>
			  <?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
			  
			  <li class="card">
				  <a href="<?php echo get_permalink($post->ID); ?>">
					  <?php
						// アイキャッチ画像を取得
						$thumbnail_id = get_post_thumbnail_id($post->ID);
						$thumb_url = wp_get_attachment_image_src($thumbnail_id, 'small');
						if (get_post_thumbnail_id($post->ID)) {
						  echo '<figure><img src="' . $thumb_url[0] . '" class="card-img" alt=""></figure>';
						} else {
						  // アイキャッチ画像が登録されていなかったときの画像
						  echo '<figure><img src="' . get_template_directory_uri() . '/img/img-default.png" class="card-img" alt=""></figure>';
						}
						?>
					  
				  <div class="card-tag"><?php 
					  $tags = get_the_tags();
					  if($tags): 
						foreach($tags as $tag):
						   $tag_name = $tag->name;
						  echo '<p class="blog-tag-item">'.$tag_name.'</p>';
						endforeach;
					  endif;
					  ?></div>
				  <div class="card-content">
					<h2 class="card-title"><?php echo get_the_title($post->ID); ?></h2>
				  </div>
				  </a>
				</li>  
		<?php endwhile; ?>
		  <?php endif; ?>
</ul>
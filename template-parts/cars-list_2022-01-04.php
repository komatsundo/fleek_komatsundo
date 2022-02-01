
<?php
  //get_template_partの引数を格納」
  $custom_post_type = $args;
  
  $args = array(
	'posts_per_page' => 5, // 表示する投稿数
	'post_type' => array($custom_post_type), // 取得する投稿タイプのスラッグ
	'orderby' => 'date', //日付で並び替え
	'order' => 'DESC' // 降順 or 昇順
  );
  $my_posts = get_posts($args);
  
  
  ?>
 


 
  
  <?php  
  /*	
  
  function displayImage ($displayImage) {		  	
		 $img_field = get_field($displayImage);
		 if($img_field){				
		$url = esc_url($img_field['url']);
		$alt = esc_attr($img_field['alt']);
		$caption = esc_html($img_field['caption']);
		echo $caption;
		echo '<figure><img src="'.$url.'" alt="'.$alt.'"><figcaption>'.$caption.'</figcaption></figure>';
		  }		
		  
		  関数参考
		  https://on-ze.com/archives/441
		  		  
		  */
  ?>  
  
  
  <?php foreach ($my_posts as $post) : setup_postdata($post); ?>
  
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
		  
		  				  		  
		  
		  <ul>			  
			  <li>
				  
				  <?php
				  $img_field = get_field('thumbnail');
				  if($img_field){	
				  ?>
					  <figure>
						  <img
						   src="<?php echo esc_url($img_field['url']) ?>"
						   alt="<?php echo esc_attr($img_field['alt']) ?>"
						  > 
						  <figcaption><?php echo esc_html($img_field['caption']) ?></figcaption>
					  </figure>
				  <?php } ?>
				   
				   
					  </li>
			  <li>
				  <?php
					$img_field = get_field('other_image');
					if($img_field){	
					?>
						<figure>
							<img
							 src="<?php echo esc_url($img_field['url']) ?>"
							 alt="<?php echo esc_attr($img_field['alt']) ?>"
							> 
							<figcaption><?php echo esc_html($img_field['caption']) ?></figcaption>
						</figure>
					<?php } ?>
				  
			  </li>
			  <li>
				  <?php
				  $img_field = get_field('side_image');
				  if($img_field){	
				  ?>
					  <figure>
						  <img
						   src="<?php echo esc_url($img_field['url']) ?>"
						   alt="<?php echo esc_attr($img_field['alt']) ?>"
						  > 
						  <figcaption><?php echo esc_html($img_field['caption']) ?></figcaption>
					  </figure>
				  <?php } ?>
				  
			  </li>
			  <li>
				  <?php
				  $img_field = get_field('rear_image');
				  if($img_field){	
				  ?>
					  <figure>
						  <img
						   src="<?php echo esc_url($img_field['url']) ?>"
						   alt="<?php echo esc_attr($img_field['alt']) ?>"
						  > 
						  <figcaption><?php echo esc_html($img_field['caption']) ?></figcaption>
					  </figure>
				  <?php } ?>
				  
			  </li>
			  <li>
				  <?php
				  $img_field = get_field('front_image');
				  if($img_field){	
				  ?>
					  <figure>
						  <img
						   src="<?php echo esc_url($img_field['url']) ?>"
						   alt="<?php echo esc_attr($img_field['alt']) ?>"
						  > 
						  <figcaption><?php echo esc_html($img_field['caption']) ?></figcaption>
					  </figure>
				  <?php } ?>
				  
			  </li>
			  
			  
			  <li>
		  <?php if( get_field('form_url') ) { ?>
			<?php the_field('form_url'); ?>
		  <?php } ?>
			  </li>
		  <li>
		  <?php if( get_field('modified-date') ) { ?>
			<?php the_field('modified-date'); ?>
		  <?php } ?>
		  </li>
		  <li>
		  <?php if( get_field('max_price') ) { ?>
			<?php the_field('max_price'); ?>
		  <?php } ?>
		  </li>
		  <li>
		  <?php if( get_field('min_price') ) { ?>
			<?php the_field('min_price'); ?>
		  <?php } ?>
		  </li>
		  <li>
		  <?php if( get_field('car_name') ) { ?>
			<?php the_field('car_name'); ?>
		  <?php } ?>
		  </li>
		  <li>
		  <?php if( get_field('producer') ) { ?>
			<?php the_field('producer'); ?>
		  <?php } ?>
		  </li>
		  
		  
	
		  <li>		
<?php
  $colors = get_field('car_model');
  if( $car_model ){
	echo implode(', ', $car_model);
  }
?>
  </li>
<li>更新日: <?php the_date(); ?>
</li>
  
 
 		  </ul>
		  
		  
		  
		</p>
	  </a>
	</li>
  <?php endforeach; ?>
  <?php wp_reset_postdata(); ?>
</ul>
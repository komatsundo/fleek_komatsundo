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
						  'posts_per_page' => 3,
						  'paged' => $paged,
						  'post_type'      => array($custom_post_type),
						  'orderby'        => 'post_date',
						  'order'          => 'DESC'
					  );
					  $wp_query->query($param);
					  get_header(); ?>
						  <?php if ( $wp_query->have_posts() ) : ?>
							  <?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>

							  <li class="blog-item">
								<a href="<?php echo get_permalink($post->ID); ?>">
									<div class="blog-image">
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
								  </div>

								  <div class="blog-info">
									<div class="blog-flex">
									  <p class="blog-date"><?php the_time('Y.m.d') ?></p>
									  <div class="blog-tag-list">

										<?php
										$tags = get_the_tags();
										if($tags):
										  foreach($tags as $tag):
											 $tag_name = $tag->name;
											echo '<p class="blog-tag-item">'.$tag_name.'</p>';
										  endforeach;
										endif;
										?>
									  </div>
									</div>
									<p class="blog-title"><?php echo get_the_title($post->ID); ?></p>
								  </div>



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
								</a>
							  </li>

						<?php endwhile; ?>
						  <?php endif; ?>

						  <div class="pager-area">
							<?php echo bmPageNavi(); // ページネーション出力
								  $wp_query = null;
								  $wp_query = $temp;  // Reset
								  ?>
							</div>

			  </ul>

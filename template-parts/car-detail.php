<!-- メイン -->
<main>
	<div class="wrapper">
		<?php
		//表示期間を設定
			date_default_timezone_set('Asia/Tokyo');
			$today = date("Ymd");
			$date_start = get_field('start_date');
			$date_end = get_field('end_date');
		?>
		<?php if(strtotime($today) >= strtotime($date_start) && strtotime($today) <= strtotime($date_end)) : ?>

		<div class="slider car-model-slide">

			<?php //計5枚の各車の画像表示
			function display_car_detail_images($field_name){
				$img_field = get_field($field_name);
				$img_field_url = esc_url($img_field['url']);
				$img_field_alt = esc_attr($img_field['alt']);
				$img_field_caption = esc_html($img_field['caption']);

				if($img_field){
					echo '<figure>
						<img
						 src="'.$img_field_url.'"
						 alt="'.$img_field_alt.'"
						>
						<figcaption>'.$img_field_caption.'</figcaption>
					</figure>';
				}
			}
			?>

			<ul id="fv-slider">
				<li>
					<?php display_car_detail_images('front_image'); ?>
				</li>
				<li>
					<?php display_car_detail_images('rear_image'); ?>
				</li>
				<li>
					<?php display_car_detail_images('side_image'); ?>
				</li>
				<li>
					<?php display_car_detail_images('other_image'); ?>
				</li>
			</ul>
		</div>
		<!-- ./slide-end -->
	</div>
	<!-- ./wrapper -->

	<section class="page-car-kind">
		<div class="wrapper">
			<h1 class="sec-line-ttl page-car-kind-ttl">
				<?php if( get_field('car_name') ) { ?>
					<?php the_field('car_name'); ?>
				<?php } ?></h1>
			<div class="flex car-info-box">
				<dl class="car-info-box-group">
					<dt class="car-info-box-ttl">メーカー</dt>
					<dd class="car-info-box-data">
						<?php if( get_field('producer') ) { ?>
							<?php the_field('producer'); ?>
						  <?php } ?></dd>
				</dl>
				<dl class="car-info-box-group">
					<dt class="car-info-box-ttl">カテゴリー</dt>
					<dd class="car-info-box-data">ミニバン</dd>
				</dl>
				<dl class="car-info-box-group">
					<dt class="car-info-box-ttl">価格</dt>
					<dd class="car-info-box-data">
						  <?php if( get_field('max_price') ) { ?>
							<?php the_field('max_price'); ?>
						  <?php } ?>万円
						  〜
						  <?php if( get_field('min_price') ) { ?>
							<?php the_field('min_price'); ?>
						  <?php } ?>万円
						</dd>
				</dl>
				<dl class="car-info-box-group">
					<dt class="car-info-box-ttl">更新日</dt>
					<dd class="car-info-box-data">
<?php the_modified_date('Y/m/d') ?>
				</dl>
			</div>
		</div>
	</section>

	<section class="page-car-detail">
		<div class="wrapper">
			<h2 class="sec-line-ttl page-car-detail-ttl"><?php if( get_field('title') ) { ?>
					<?php the_field('title'); ?>
				  <?php } ?></h2>
			<div class="detail-group">
				<h3 class="detail-group-ttl"><?php if( get_field('heading') ) { ?>
						<?php the_field('heading'); ?>
					  <?php } ?></h3>
				<section class="detail-group-desc"><?php if( get_field('text') ) { ?>
						<?php the_field('text'); ?>
					  <?php } ?>
				 </section>

				<section class="detail-group-movie">
					  <?php
					  $movie = get_field('movie');
					  if( !empty($movie) ):
					  ?>
						  <figure>
							  <video controls
								  src="<?php echo $movie; ?>">
							  ご利用のブラウザーは動画再生に対応していないようです。
							  </video>
						  </figure>
					  <?php endif; ?>
				</section>
				<?php
  					$form_url = get_field('form_url');
  					if( !empty($form_url) ):
  				?>
				  <a href="<?php echo $form_url; ?>" class="button-large detail-group-btn">
					  <span class="button-large-inside">オプションを選んで見積る
						  <i class="button-large-arw"><img src="<?php echo get_template_directory_uri(); ?>/images/common/link-arrow-white.svg" alt="ボタン矢印"></i>
					  </span>
				  </a>
				  <?php else: ?>
				  <!--見積もりフォーム用URL未設定-->
				<?php endif; ?>
			</div>
		</div>
	</section>
	<?php else : ?>
	<div class="slider car-model-slide" style="display: flex; position: fixed; top: 0; left: 0; width: 100%; height: 100%; justify-content: space-around;	opacity: 0.7; z-index: 2000000000; background-color:#000;">
	<div style="opacity: 1; font-size: 2em; color: white; margin: auto;"><p style="line-height: 5rem; text-align: center;	padding: 2rem;">当該のお車の掲載期間は終了いたしました。</p>
<a href="/" style="font-size:2rem;margin:3rem auto;text-align:center;display:block;color:#fff;border:1px solid #fff;padding:2rem; border-radius:1rem;width:300px;">トップページへ戻る</a></div>
	</div>
	<div class="slider car-model-slide" >

				<?php //計5枚の各車の画像表示
				function display_car_detail_images($field_name){
					$img_field = get_field($field_name);
					$img_field_url = esc_url($img_field['url']);
					$img_field_alt = esc_attr($img_field['alt']);
					$img_field_caption = esc_html($img_field['caption']);

					if($img_field){
						echo '<figure>
							<img
							 src="'.$img_field_url.'"
							 alt="'.$img_field_alt.'"
							>
							<figcaption>'.$img_field_caption.'</figcaption>
						</figure>';
					}
				}
				?>

				<ul>
					<li>
						<?php display_car_detail_images('front_image'); ?>
					</li>
				</ul>
			</div>
			<!-- ./slide-end -->
		</div>
		<!-- ./wrapper -->

		<section class="page-car-kind">
			<div class="wrapper">
				<h1 class="sec-line-ttl page-car-kind-ttl">
					<?php if( get_field('car_name') ) { ?>
						<?php the_field('car_name'); ?>
					<?php } ?></h1>
				<div class="flex car-info-box">
					<dl class="car-info-box-group">
						<dt class="car-info-box-ttl">メーカー</dt>
						<dd class="car-info-box-data">
							<?php if( get_field('producer') ) { ?>
								<?php the_field('producer'); ?>
							  <?php } ?></dd>
					</dl>
					<dl class="car-info-box-group">
						<dt class="car-info-box-ttl">カテゴリー</dt>
						<dd class="car-info-box-data">ミニバン</dd>
					</dl>
					<dl class="car-info-box-group">
						<dt class="car-info-box-ttl">価格</dt>
						<dd class="car-info-box-data">
							  <?php if( get_field('max_price') ) { ?>
								<?php the_field('max_price'); ?>
							  <?php } ?>万円
							  〜
							  <?php if( get_field('min_price') ) { ?>
								<?php the_field('min_price'); ?>
							  <?php } ?>万円
							</dd>
					</dl>
					<dl class="car-info-box-group">
						<dt class="car-info-box-ttl">更新日</dt>
						<dd class="car-info-box-data">
	<?php the_modified_date('Y/m/d') ?>
					</dl>
				</div>
			</div>
		</section>

		<section class="page-car-detail">
			<div class="wrapper">
				<h2 class="sec-line-ttl page-car-detail-ttl"><?php if( get_field('title') ) { ?>
						<?php the_field('title'); ?>
					  <?php } ?></h2>
				<div class="detail-group">
					<h3 class="detail-group-ttl"><?php if( get_field('heading') ) { ?>
							<?php the_field('heading'); ?>
						  <?php } ?></h3>
					<section class="detail-group-desc"><?php if( get_field('text') ) { ?>
							<?php the_field('text'); ?>
						  <?php } ?>
					 </section>

					<section class="detail-group-movie">
						  <?php
						  $movie = get_field('movie');
						  if( !empty($movie) ):
						  ?>
							  <figure>
								  <video controls
									  src="<?php echo $movie; ?>">
								  ご利用のブラウザーは動画再生に対応していないようです。
								  </video>
							  </figure>
						  <?php endif; ?>
					</section>
					<?php
						  $form_url = get_field('form_url');
						  if( !empty($form_url) ):
					  ?>
					  <a href="<?php echo $form_url; ?>" class="button-large detail-group-btn">
						  <span class="button-large-inside">オプションを選んで見積る
							  <i class="button-large-arw"><img src="<?php echo get_template_directory_uri(); ?>/images/common/link-arrow-white.svg" alt="ボタン矢印"></i>
						  </span>
					  </a>
					  <?php else: ?>
					  <!--見積もりフォーム用URL未設定-->
					<?php endif; ?>
				</div>
			</div>
		</section>

		<?php //表示期間外の場合は非表示 ?>
	<?php endif; ?>

</main>
  <?php wp_reset_postdata(); ?>

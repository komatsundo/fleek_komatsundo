<?php
  //get_template_partの引数を格納」
  $maker_name = $args;

//TOYOTA セダン他 のページかどうか判定し、特定のカテゴリの車のみを表示
if( is_page(76) ) :
  $cat_id = 4;
else:
  $cat_id = 5;
endif;

  $args = array(
	'posts_per_page' => 12, // 表示する投稿数
	'post_type' => array($maker_name), // 取得する投稿タイプのスラッグ
	'category' => $cat_id,
	'orderby' => 'date', //日付で並び替え
	'order' => 'DESC' // 降順 or 昇順
  );
    $my_posts = get_posts($args);

  ?>

  <!-- minivan_suv開始 -->
  <section class="minivan-suv">
	  <h2 class="entry-title"><?php the_title() ?></h2>
	  <div class="minivan-suv-item-wrapper">

		<?php foreach ($my_posts as $post) : setup_postdata($post); ?>

		<?php
		//表示期間を設定
			date_default_timezone_set('Asia/Tokyo');
			$today = date("Ymd");
			$date_start = get_field('start_date');
			$date_end = get_field('end_date');
		?>
		<?php if(strtotime($today) >= strtotime($date_start) && strtotime($today) <= strtotime($date_end)) : ?>

		<div class="minivan-suv-item">
			<a href="<?php echo get_permalink($post->ID); ?>">
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

			<h3><?php if( get_field('car_name') ) { ?>
					<?php the_field('car_name'); ?>
				  <?php } ?></h3>
			<p class="minivan-suv-item-text">
			  メーカー：<?php if( get_field('producer') ) { ?>
				  <?php the_field('producer'); ?>
				<?php } ?>
			</p>
			<p class="minivan-suv-item-text">
			  タイプ：<?php if( get_field('car_model') ) { ?>
				  <?php the_field('car_model'); ?>
				<?php } ?>
			</p>
			<p class="minivan-suv-item-text">
			  価格：<?php if( get_field('min_price') ) { ?>
				  <?php the_field('min_price'); ?>
				<?php } ?>
			  万円 〜 <?php if( get_field('max_price') ) { ?>
				<?php the_field('max_price'); ?>
			  <?php } ?>万円
			</p>
			<p class="minivan-suv-item-text">
			  更新日：<?php
			  $date = get_the_modified_date('Y/m/d');
			  if (isset( $date )){ ?>
				  <?php echo $date ?>　更新あり
			  <?php } else { ?>
				  <?php the_time('Y/m/d');?>更新なし
			  <?php } ?>
			</p>
		  </a>
		  <div class="minivan-suv-item-svg">
			<svg xmlns="http://www.w3.org/2000/svg" width="19.365" height="6.846">
			  <path id="パス_34" data-name="パス 34" d="M841.137,926h15L850,922v3.047l2.179-.515" transform="translate(-840.137 -920.154)" fill="none" stroke="#941f24" stroke-linecap="round" stroke-width="2"/>
			</svg>
		  </div>
		</div>
		<!-- minivan-suv-item -->
		<?php else : ?>
			<?php //表示期間外の場合は非表示 ?>
		<?php endif; ?>

  <!-- minivan_suv終了 -->
  <?php endforeach; ?>
  <?php wp_reset_postdata(); ?>
  </div>
	</section>

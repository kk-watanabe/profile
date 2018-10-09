<?php get_header('kinomama'); ?>

<div id="main" class="l-main">
	<?php
		if (have_posts()): while(have_posts()): the_post();
			//カテゴリ
			$post_type = get_post_type();
			$post_url  = '/'.$post_type.'/';

			$cate      = get_the_terms( $id, 'cate');
			$cate      = $cate[0];
			$cate_name = $cate->name;
			$cate_slug = $cate->slug;
			$cate_url  = $post_url.'cate/'.$cate_slug.'';
			//img
			$img_id = get_post_thumbnail_id();
	?>
	<main id="conts" class="l-conts" data-aos="fade-right">
		<article>
			<header class="p-detail__head">
				<h1 itemprop="headline" class="c-headline01 p-detail__head--ttl"><?php the_title(); ?></h1>

				<div id="pagepath" class="l-pagepath p-detail__head--path" itemscope itemtype="http://schema.org/BreadcrumbList">
					<div class="l-pagepath__list" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
						<a href="<?php echo $post_url; ?>" itemprop="item" class="l-pagepath__anc">
							<span itemprop="name" class="l-pagepath__txt">HOME</span>
						</a>
						<meta itemprop="position" content="3">
					</div>
					<div class="l-pagepath__list" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
						<a href="<?php echo $cate_url; ?>" itemprop="item" class="l-pagepath__anc">
							<span itemprop="name" class="l-pagepath__txt"><?php echo $cate_name; ?></span>
						</a>
						<meta itemprop="position" content="2">
					</div>
					<div class="l-pagepath__list" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
						<a href="<?php the_permalink(); ?>" itemprop="item" class="l-pagepath__anc is-not_anc">
							<span itemprop="name" class="l-pagepath__txt"><?php the_title(); ?></span>
						</a>
						<meta itemprop="position" content="1">
					</div>
				</div>

				<div class="p-detail__head--top">
					<time itemprop="datePublished" datetime="<?php the_time('Y-m-d'); ?>" class="p-detail__head--txt p-detail__time"><?php the_time('Y/m/d'); ?></time>
					<?php if ($cate): ?>
					<span itemprop="keywords" class="p-detail__head--txt p-detail__cate">
						<a href="<?php echo $cate_url; ?>" class="p-detail__cate--anc"><?php echo $cate_name; ?></a>
					</span>
					<?php endif ?>
				</div>

				<?php cureate_sns_list(get_the_ID(), 'p-detail__head--sns'); ?>
			</header>

			<div class="p-detail__body" itemprop="mainEntityOfPage">
				<?php
					if ($img_id):
						$img = wp_get_attachment_image_src($img_id, 'detail_img');
				?>
				<div class="p-detail__mv" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
					<img src="<?php echo $img[0]; ?>" width="800" height="530" alt="" itemprop="thumbnailUrl">
					<meta itemprop="url" content="<?php echo $img[0]; ?>">
					<meta itemprop="width" content="800">
					<meta itemprop="height" content="530">
				</div>
				<?php endif ?>

				<dl id="js-pagenaviTable" class="p-detail__table">
					<dt id="js-tableTtl" class="p-detail__table--ttl u-hide__type--pc">目次</dt>
					<dd class="p-detail__pagenavi">
						<ol id="js-pagenavi" class="p-detail__pagenavi--in"></ol>
						<!-- /.p-detail__pagenavi--in -->
					</dd>
					<!-- /.p-detail__pagenavi -->
				</dl>

				<div id="js-detailBody" class="p-detail__box">
					<?php the_content(); ?>
				</div>
			</div>

			<footer class="p-detail__foot">
				<?php get_account_data($post); ?>

				<?php cureate_sns_list(get_the_ID(), 'is-center'); ?>

				<a href="/kinomama/<?php echo $cate_url; ?>" class="p-detail__home c-btn01 is-prev"><span class="c-btn01__txt">一覧ページへ</span></a>
			</footer>
		</article>

		<section class="p-detail__sub">
			<h2 class="p-detail__sub--ttl"><span class="p-detail__sub--ttl__in">コメント</span></h2>
			<div class="p-detail__sub--body">
			<?php
				//コメント
				if( is_singular('kinomama') ) {
					comments_template();
				}
			?>
			</div>
		</section>

		<?php
			$args = array(
				'post_type' => 'kinomama',
				'posts_per_page' => 3,
				'post__not_in' => array($post->ID),
				'tax_query' => array(
					array(
						'taxonomy' => 'cate',
						'field'    => 'slug',
						'terms'    => $cate_slug,
					),
				),
			);

			$the_query = new WP_Query($args);

			if ($the_query->have_posts()):
		?>
		<aside class="p-detail__sub">
			<h2 class="p-detail__sub--ttl"><span class="p-detail__sub--ttl__in">関連記事</span></h2>

			<div class="p-detail__sub--body">

				<?php
					while($the_query->have_posts()): $the_query->the_post();
						$rel_id   = get_the_ID();
						$rel_post = get_post($id);
				?>
				<?php echo cureate_basic_list($rel_post); ?>
				<?php endwhile; ?>
			</div>
		</aside>
		<?php endif ?>
	</main><!-- /#main -->
	<?php endwhile; endif; ?>

	<?php get_sidebar('kinomama'); ?>
</div><!-- /#main -->

<?php get_footer('kinomama'); ?>

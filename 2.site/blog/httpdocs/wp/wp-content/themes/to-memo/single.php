<?php get_header(); ?>

<?php
	if (have_posts()): while(have_posts()): the_post();
		//カテゴリ
		$cate = get_the_category();
		$cate_id = $cate[0]->term_id;
		$cate_name = $cate[0]->name;
		$cate_url = get_category_link($cate_id);

		//img
		$img_id = get_post_thumbnail_id();

		//user
		$anc_id = $post->post_author;
		$anc = get_users($anc_id)[0];
		$anc_name = $anc->user_nicename;
?>

<div id="pagepath" class="l-pagepath">
	<div class="l-pagepath__in" itemscope itemtype="http://schema.org/BreadcrumbList">
		<div class="l-pagepath__list" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
			<a href="/" itemprop="item" class="l-pagepath__anc">
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
</div>

<main id="main" class="l-main">
	<article itemscope itemtype="http://schema.org/BlogPosting">
		<div class="c-box01">
			<header class="p-detail__head">
				<div class="p-detail__head--top">
					<time itemprop="datePublished" datetime="<?php the_time('Y-m-d'); ?>" class="p-detail__head--txt p-detail__time"><?php the_time('Y/m/d'); ?></time>
					<?php if ($cate): ?>
					<span itemprop="keywords" class="p-detail__head--txt p-detail__cate">
						<a href="<?php echo $cate_url; ?>" class="p-detail__cate--anc"><?php echo $cate_name; ?></a>
					</span>
					<?php endif ?>
				</div>

				<h1 itemprop="headline" class="p-detail__ttl"><?php the_title(); ?></h1>

				<ul class="p-detail__sns">
					<li class="p-detail__sns--list">
						<a href="https://twitter.com/share?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>" target="_blank" class="p-detail__sns--anc is-tw">
							<span class="p-detail__sns--txt">
								<svg role="img" width="12" height="10" class="p-detail__sns--icon">
									<use xlink:href="/assets/img/sprite.min.svg#twitterIcon">
								</svg>
								twiiter
							</span>
						</a>
					</li>
					<li class="p-detail__sns--list">
						<a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="_blank" class="p-detail__sns--anc is-fb">
							<span class="p-detail__sns--txt">
								<svg role="img" width="12" height="10" class="p-detail__sns--icon">
									<use xlink:href="/assets/img/sprite.min.svg#facebookIcon2">
								</svg>
								facebook
							</span>
						</a>
					</li>
					<li class="p-detail__sns--list">
						<a href="http://b.hatena.ne.jp/entry/<?php the_permalink(); ?>" target="_blank" class="p-detail__sns--anc is-ha">
							<span class="p-detail__sns--txt">
								<svg role="img" width="12" height="10" class="p-detail__sns--icon">
									<use xlink:href="/assets/img/sprite.min.svg#hatenaIcon2">
								</svg>
								Hatena
							</span>
						</a>
					</li>
				</ul>
			</header>

			<div class="p-detail__body" itemprop="mainEntityOfPage">
				<?php
					if ($img_id):
						$img = wp_get_attachment_image_src($img_id, 'detail_img');
				?>
				<div class="p-detail__mv" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
					<img src="<?php echo $img[0]; ?>" width="800" height="530" alt="" itemprop="thumbnailUrl" class="p-detail__mv--img">
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
				<div class="u-hide">
					<?php if ($anc_id): ?>
					<div itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
						<div itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
							<meta itemprop="url" content="<?php echo get_bloginfo('url'); ?>/assets/img/logo.png">
							<meta itemprop="width" content="561">
							<meta itemprop="height" content="100">
						</div>
						<meta itemprop="name" content="my-site">
					</div>
					<div itemprop="author"><?php echo $anc_name; ?></div>
					<?php endif ?>
				</div>

				<ul class="p-detail__sns is-center">
					<li class="p-detail__sns--list">
						<a target="_blank" href="https://twitter.com/share?url=<?php the_permalink(); ?>&text=<?php echo get_the_title(); ?>" class="p-detail__sns--anc is-tw">
							<span class="p-detail__sns--txt">
								<svg role="img" width="24" height="20" class="p-detail__sns--icon">
									<use xlink:href="/assets/img/sprite.min.svg#twitterIcon">
								</svg>
								twiiter
							</span>
						</a>
					</li>
					<li class="p-detail__sns--list">
						<a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="_blank" class="p-detail__sns--anc is-fb">
							<span class="p-detail__sns--txt">
								<svg role="img" width="24" height="20" class="p-detail__sns--icon">
									<use xlink:href="/assets/img/sprite.min.svg#facebookIcon2">
								</svg>
								facebook
							</span>
						</a>
					</li>
					<li class="p-detail__sns--list">
						<a href="http://b.hatena.ne.jp/entry/<?php the_permalink(); ?>" target="_blank" class="p-detail__sns--anc is-ha">
							<span class="p-detail__sns--txt">
								<svg role="img" width="24" height="20" class="p-detail__sns--icon">
									<use xlink:href="/assets/img/sprite.min.svg#hatenaIcon2">
								</svg>
								Hatena
							</span>
						</a>
					</li>
				</ul>

				<a href="<?php echo $cate_url; ?>" class="c-btn01 is-prev"><span class="c-btn01__txt">一覧ページへ</span></a>
			</footer>
		</div>

		<div class="p-ad">
			<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
			<!-- to-memo -->
			<ins class="adsbygoogle"
			     style="display:block"
			     data-ad-client="ca-pub-4404457845572260"
			     data-ad-slot="2030780825"
			     data-ad-format="auto"></ins>
			<script>
			(adsbygoogle = window.adsbygoogle || []).push({});
			</script>
		</div>
		<!-- /.c-box01 -->

		<section class="p-comment c-box01">
			<h2 class="c-ttl01">コメント一覧</h2>
		<?php
			//コメント
			if( is_singular('post') ) {
				comments_template();
			}
		?>
		</section>

		<div id="articleList"></div>

		<?php
			$args = array(
				'post_type' => 'post',
				'posts_per_page' => 3,
				'cat' => $cate_id,
				'post__not_in' => array($post->ID)
			);

			$the_query = new WP_Query($args);

			if ($the_query->have_posts()):
		?>
		<aside class="p-relation c-box01">
			<h2 class="c-ttl01">関連記事</h2>

			<div class="p-relation__in">
				<?php
					while($the_query->have_posts()): $the_query->the_post();
						$rel_ttl = get_the_title();
						$rel_url = get_the_permalink();
						$rel_text = get_field('simple_text');

						//img
						$thum_id = get_post_thumbnail_id();
						$thum = wp_get_attachment_image_src($thum_id, 'list_img');
				?>
				<article class="p-relation__list" itemscope itemtype="http://schema.org/BlogPosting">
					<a itemprop="url" href="<?php echo $rel_url; ?>" title="<?php echo $rel_ttl; ?>" class="p-relation__anc">
						<div class="p-relation__img" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
							<img src="<?php echo $thum[0]; ?>" width="300" height="200" alt="" itemprop="thumbnailUrl">
							<meta itemprop="url" content="<?php echo $thum[0]; ?>">
							<meta itemprop="width" content="300">
							<meta itemprop="height" content="200">
						</div>
						<div class="p-relation__detail">
							<div class="p-relation__head">
								<time itemprop="datePublished" datetime="<?php echo the_time('Y-m-d'); ?>" class="p-relation__time"><?php echo the_time('Y/m/d'); ?></time>
							</div>

							<h2 class="p-relation__ttl"><span itemprop="headline" class="p-relation__ttl--in"><?php echo $rel_ttl; ?></span></h2>

							<div itemprop="articleBody" class="p-relation__box"><p class="p-relation__box--txt"><?php echo $rel_text; ?></p></div>

							<div class="u-hide">
								<div itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
									<div itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
										<meta itemprop="url" content="<?php echo get_bloginfo('url'); ?>/assets/img/logo.png">
										<meta itemprop="width" content="561">
										<meta itemprop="height" content="100">
									</div>
									<meta itemprop="name" content="my-site">
								</div>
								<div itemprop="author"><?php echo $anc_name; ?></div>
							</div>
						</div>
					</a>
				</article>
				<?php endwhile; ?>
			</div>
		</aside>
		<?php endif ?>
	</article>
</main><!-- /#main -->

<?php endwhile; endif; ?>

<?php get_footer(); ?>

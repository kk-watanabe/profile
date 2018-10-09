<?php require_once($_SERVER['DOCUMENT_ROOT'].'/assets/inc/meta.php');?>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/assets/inc/header.php');?>

	<main class="l-main" data-selector="main">
		<div class="p-mv" data-selector="mv">
			<div class="p-mv__bg">
				<div class="p-mv__txt">
					<span class="p-mv__txt--line">CREATE</span>
					<span class="p-mv__txt--line">NEW</span>
					<span class="p-mv__txt--line">PROMOTION</span>
				</div>
			</div>

			<button type="button" class="p-mv__scrl" data-scroll-target="business">
				<svg role="img" width="32" height="16" class="p-mv__scrl--icon">
					<title itemprop="about">下に進む</title>
					<use xlink:href="/assets/img/svg.svg#chevron-down">
				</svg>
			</button>

			<div class="p-mv__movie u-hide__type--sp" data-selector="mvVideo">
				<video
				 width="1920"
				 height="1080"
				 loop
				 id="topVideo"
				 class="p-mv__movie--video"
				 src="/assets/movie/top.mp4"
				 preload="none"
				 muted></video>
			</div>
			<!-- /.movie -->
		</div>
		<!-- /.p-mv -->

		<div class="p-index__body">
			<section class="p-index__frame" data-target="business">
				<h2 class="c-ttl01" data-aos="fade-up">
					<span class="c-ttl01__main is-roboto">BUSINESS</span>
					<span class="c-ttl01__sub p-topSubTtl">事業内容</span>
				</h2>

				<div class="p-index__frame--txt c-sentence01" data-aos="fade-up">
					<p class="c-sentence01__txt">
						アーリークロスでは、「EC事業」と「SP事業」を二軸に事業を推進。<br>
						ネット通販を通じて、全国のお客様にノベルティグッズ等を提供する「EC事業」と、<br>
						お客様の販促ツールを企画立案からイベント実施まで支援する「SP事業」を展開しています。
					</p>
				</div>

				<?php require_once($_SERVER['DOCUMENT_ROOT'].'/assets/inc/parts/business_navi.php');?>

				<div class="p-loopSlider" data-aos="zoom-in">
					<div class="p-loopSlider__in" data-selector="loopSlider">
						<div class="p-loopSlider__list"><img src="/assets/img/index/slider01.jpg" width="376" height="250" alt="" class="p-loopSlider__img"></div>
						<div class="p-loopSlider__list"><img src="/assets/img/index/slider02.jpg" width="376" height="250" alt="" class="p-loopSlider__img"></div>
						<div class="p-loopSlider__list"><img src="/assets/img/index/slider03.jpg" width="376" height="250" alt="" class="p-loopSlider__img"></div>
						<div class="p-loopSlider__list"><img src="/assets/img/index/slider04.jpg" width="376" height="250" alt="" class="p-loopSlider__img"></div>
						<div class="p-loopSlider__list"><img src="/assets/img/index/slider05.jpg" width="376" height="250" alt="" class="p-loopSlider__img"></div>
						<div class="p-loopSlider__list"><img src="/assets/img/index/slider06.jpg" width="376" height="250" alt="" class="p-loopSlider__img"></div>
						<div class="p-loopSlider__list"><img src="/assets/img/index/slider07.jpg" width="376" height="250" alt="" class="p-loopSlider__img"></div>
					</div>
				</div>
				<!-- /.p-loopSlider -->
			</section>

			<section class="p-index__frame p-topNews">
				<h2 class="c-ttl01" data-aos="fade-up">
					<span class="c-ttl01__main is-roboto">NEWS</span>
					<span class="c-ttl01__sub p-topSubTtl">新着情報</span>
				</h2>

				<div class="c-newsList c-contsFix01" data-aos="fade-up">
					<?php
						//$info_tops = $news->get_title_from_news(_PAGER_COUNT_RATE_);

						if (!empty($info_tops)):
							foreach ($info_tops as $info_top):
								$news_id   = $info_top['id'];
								$news_date = $info_top['date'];
								$news_time = str_replace('.', '-', $news_date);
								$news_ttl  = $info_top['title'];
								$news_link = '/news/detail.php?news_id='.$news_id;

								$new_icon   = $news->set_new_icon($news_date);
					?>
					<article class="c-newsList__list" data-aos="fade-up">
						<a href="<?php echo $news_link; ?>" class="c-newsList__anchor">
							<h3 class="c-newsList__time"><time datetime="<?php echo $news_time; ?>"><?php echo $news_time; ?></time></h3>
							<div class="c-newsList__box">
								<p class="c-newsList__txt"><?php echo $news_ttl; ?></p>
							</div>
							<?php if ($new_icon): ?>
							<span class="c-newsList__icon is-new">NEW</span>
							<?php endif ?>
						</a>
					</article>
					<?php endforeach; endif; ?>

					<article class="c-newsList__list">
						<a href="" class="c-newsList__anchor">
							<h2 class="c-newsList__time"><time datetime="2017-01-17">2017.01.27</time></h2>
							<div class="c-newsList__box">
								<p class="c-newsList__txt">ホームページをリニューアルしました。</p>
							</div>
							<span class="c-newsList__icon is-new">NEW</span>
						</a>
					</article>
					<article class="c-newsList__list">
						<a href="" class="c-newsList__anchor">
							<h2 class="c-newsList__time"><time datetime="2017-01-17">2017.01.27</time></h2>
							<div class="c-newsList__box">
								<p class="c-newsList__txt">サンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキスプルテキスプルテキスンプ</p>
							</div>
						</a>
					</article>
					<article class="c-newsList__list">
						<a href="" class="c-newsList__anchor">
							<h2 class="c-newsList__time"><time datetime="2017-01-17">2017.01.27</time></h2>
							<div class="c-newsList__box">
								<p class="c-newsList__txt">サンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキスプルテキスプルテキスンプ</p>
							</div>
						</a>
					</article>
					<article class="c-newsList__list">
						<a href="" class="c-newsList__anchor">
							<h2 class="c-newsList__time"><time datetime="2017-01-17">2017.01.27</time></h2>
							<div class="c-newsList__box">
								<p class="c-newsList__txt">サンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキスプルテキスプルテキスンプサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキスプルテキスプルテキスンプ</p>
							</div>
						</a>
					</article>
					<article class="c-newsList__list">
						<a href="" class="c-newsList__anchor">
							<h2 class="c-newsList__time"><time datetime="2017-01-17">2017.01.27</time></h2>
							<div class="c-newsList__box">
								<p class="c-newsList__txt">サンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキスプルテキスプルテキスンプ</p>
							</div>
						</a>
					</article>
					<article class="c-newsList__list">
						<a href="" class="c-newsList__anchor">
							<h2 class="c-newsList__time"><time datetime="2017-01-17">2017.01.27</time></h2>
							<div class="c-newsList__box">
								<p class="c-newsList__txt">ホームページをリニューアルしました。</p>
							</div>
						</a>
					</article>
				</div>
				<!-- /.c-newsList -->

				<div data-aos="fade-up">
					<a href="/news/" class="c-btn01 p-topNews__btn is-w300">
						<span class="c-btn01__txt">新着情報一覧</span>
					</a>
				</div>
			</section>

			<div class="c-pageNavi p-topNavi" data-aos="fade-up">
				<section class="c-pageNavi__list is-bg-company is-col2">
					<a href="/company/" class="c-pageNavi__anchor">
						<div class="c-pageNavi__in">
							<h2 class="c-ttl01 is-white01">
								<span class="c-ttl01__main is-roboto">COMPANY</span>
								<span class="c-ttl01__sub">企業情報</span>
							</h2>
							<p class="c-pageNavi__txt">
								アーリークロスは、SP事業・EC事業を通して、<br class="u-lineSize02">あらゆる要望に応え、<br>
								「アイデアをカタチに」をモットーに、<br class="u-lineSize01">お客様の販促宣伝を支援する価値創造企業です。
							</p>
						</div>
						<span class="c-pageNavi__line is-tb"></span><span class="c-pageNavi__line is-lr"></span>
					</a>
				</section>

				<section class="c-pageNavi__list is-bg-recruit is-col2">
					<a href="/recruit/" class="c-pageNavi__anchor">
						<div class="c-pageNavi__in">
							<h2 class="c-ttl01 is-white01">
								<span class="c-ttl01__main is-roboto">RECRUIT</span>
								<span class="c-ttl01__sub">採用情報</span>
							</h2>

							<p class="c-pageNavi__txt">
								株式会社アーリークロスでは<br class="u-lineSize02">求人を募集しています。<br>
								募集要項はこちらからご確認ください。
							</p>
						</div>
						<span class="c-pageNavi__line is-tb"></span><span class="c-pageNavi__line is-lr"></span>
					</a>
				</section>
			</div>

			<?php require($_SERVER['DOCUMENT_ROOT'].'/assets/inc/parts/contact.php');?>
		</div>
	</main><!-- /#main -->

	</div><!-- /.barba-container -->
	</div><!-- /#barba-wrapper -->

<?php require_once($_SERVER['DOCUMENT_ROOT'].'/assets/inc/footer.php');?>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/assets/inc/end.php');?>

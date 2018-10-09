<?php require_once($_SERVER['DOCUMENT_ROOT'].'/assets/inc/meta.php');?>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/assets/inc/header.php');?>

	<main class="l-main">
		<?php $sanitize->get_headline(); ?>

		<div class="l-body">
			<?php $sanitize->get_page_path(); ?>
			<!-- パンくず -->

			<div class="c-newsList c-contsFix01">
				<?php
					$page  = 1;
					$start = 0;
					$max   = 10;

					if (isset($_GET['page']) && !empty($_GET['page'])) {
						$page  = $_GET['page'];
						$start = ($page - 1) * 10;
					}

					//$info_tops = $news->get_news_data($start, $max);

					if (!empty($info_tops)):
						foreach ($info_tops as $info_top):
							$news_id   = $info_top['id'];
							$news_date = $info_top['date'];
							$news_time = str_replace('-', '.', $news_date);
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
			</div>
			<!-- /.c-newsList -->


			<?php //echo $news->set_pager($page, $max); ?>
			<!-- /.p-pager -->
		</div>
	</main><!-- /#main -->

	<?php require($_SERVER['DOCUMENT_ROOT'].'/assets/inc/parts/contact.php');?>

	</div><!-- /.barba-container -->
	</div><!-- /#barba-wrapper -->

<?php require_once($_SERVER['DOCUMENT_ROOT'].'/assets/inc/footer.php');?>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/assets/inc/end.php');?>

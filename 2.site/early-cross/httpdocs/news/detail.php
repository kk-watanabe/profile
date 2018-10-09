<?php
	$url = (empty($_SERVER["HTTPS"]) ? "http://" : "https://") . $_SERVER["HTTP_HOST"];
	$news_id = 0;
	if (isset($_GET['news_id']) && !empty($_GET['news_id'])) {
		$news_id  = $_GET['news_id'];
	} else {
		//header("Location: {$url}");
	}

	//$info   = $news->get_data_from_news($news_id);
	//$date   = $info['date'];
	//$time   = str_replace('-', '.',  $date);
	//$title  = $info['title'];
	//$text   = $info['comment'];
	//$public = $info['public'];
//
	//$imgtag = '';
	//if (isset($info["image"][1]) && !empty($info["image"][1])) {
		//$image  = $info["image"][1]['news_image_thumbs_path'];
		//$bigimg = $info["image"][1]['news_image_path'];
//		$imgtag = '<div class="c-figure01"><a href="'.$bigimg.'" class="u-imgHover01"><img src="'.$image.'" alt=""></a></div>';
	//}
//
	//if ($public === '非公開') {
		//header("Location: {$url}");
	//}

?>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/assets/inc/meta.php');?>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/assets/inc/header.php');?>

	<main class="l-main">
		<?php $sanitize->get_headline(); ?>

		<div class="l-body">
			<?php $sanitize->get_page_path(); ?>
			<!-- パンくず -->

			<div class="p-newsConts c-contsFix01">
				<div class="p-newsDetail">
					<p class="p-newsDetail__time" data-aos="fade-up"><time datetime="<?php //echo $date; ?>"><?php //echo $time; ?></time></p>

					<h1 class="p-newsDetail__ttl" data-aos="fade-up"><?php //echo $title; ?></h1>

					<div class="p-newsDetail__box" data-aos="fade-up">
						<?php //echo $imgtag; ?>
						<?php //echo $text; ?>
					</div>

					<div class="p-pager" data-aos="fade-up">
						<a href="javascript: history.back()" class="p-pager__return">ニュースリリース一覧に戻る</a>
					</div>
					<!-- /.p-pager -->
				</div>

				<div class="p-news" data-aos="fade-up">
					<?php
						//$info_tops = $news->get_title_from_news(5);

						if (!empty($info_tops)):
							foreach ($info_tops as $info_top):
								$news_id   = $info_top['id'];
								$news_date = $info_top['date'];
								$news_time = str_replace('.', '-', $news_date);
								$news_ttl  = $info_top['title'];
								$news_link = '/news/detail.php?news_id='.$news_id;
					?>
					<article class="p-news__list">
						<a href="<?php echo $news_link; ?>" class="p-news__anchor">
							<h3 class="p-news__time"><time datetime="<?php echo $news_time; ?>"><?php echo $news_time; ?></time></h3>
							<div class="p-news__box">
								<p class="p-news__txt"><?php echo $news_ttl; ?></p>
							</div>
						</a>
					</article>
					<?php endforeach; endif; ?>
				</div>
				<!-- /.p-newsList -->
			</div>
			<!-- /.p newsConts -->
		</div>
	</main><!-- /#main -->

	<?php require($_SERVER['DOCUMENT_ROOT'].'/assets/inc/parts/contact.php');?>

	</div><!-- /.barba-container -->
	</div><!-- /#barba-wrapper -->

<?php require_once($_SERVER['DOCUMENT_ROOT'].'/assets/inc/footer.php');?>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/assets/inc/end.php');?>

<?php require_once($_SERVER['DOCUMENT_ROOT'].'/assets/inc/meta.php');?>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/assets/inc/header.php');?>

	<main class="l-main">
		<?php $sanitize->get_headline(); ?>

		<div class="l-body">
			<?php $sanitize->get_page_path(); ?>
			<!-- パンくず -->

			<div class="c-contsFix01">
				<div class="c-sentence01" data-aos="fade-up">
					<p class="c-sentence01__txt">
						株式会社アーリークロスは現在下記の求人を募集しております。<br>
						募集要項ご確認の上、お問い合わせからご連絡ください。
					</p>
				</div>

				<ul class="p-jobSelect u-hide__type--sp">
					<li class="p-jobSelect__list"  data-aos="fade-up">
						<div class="p-jobSelect__in">
							<input type="radio" name="job_select" id="job_select1" class="p-jobSelect__radio" data-selector="jobSelect" value="1">
							<label for="job_select1" class="p-jobSelect__anchor">セールスプロモーター<br>（SP事業）</label>
						</div><!-- /.p-jobSelect__in -->
					</li>
					<li class="p-jobSelect__list"  data-aos="fade-up" data-aos-delay="100">
						<div class="p-jobSelect__in">
							<input type="radio" name="job_select" id="job_select2" class="p-jobSelect__radio" data-selector="jobSelect" value="2">
							<label for="job_select2" class="p-jobSelect__anchor">インターネット受付事務<br>（EC事業）</label>
						</div><!-- /.p-jobSelect__in -->
					</li>
					<li class="p-jobSelect__list"  data-aos="fade-up" data-aos-delay="200">
						<div class="p-jobSelect__in">
							<input type="radio" name="job_select" id="job_select3" class="p-jobSelect__radio" data-selector="jobSelect" value="3">
							<label for="job_select3" class="p-jobSelect__anchor">製造管理</label>
						</div><!-- /.p-jobSelect__in -->
					</li>
					<li class="p-jobSelect__list"  data-aos="fade-up">
						<div class="p-jobSelect__in">
							<input type="radio" name="job_select" id="job_select4" class="p-jobSelect__radio" data-selector="jobSelect" value="4">
							<label for="job_select4" class="p-jobSelect__anchor">製造オペレーター</label>
						</div><!-- /.p-jobSelect__in -->
					</li>
					<li class="p-jobSelect__list"  data-aos="fade-up" data-aos-delay="100">
						<div class="p-jobSelect__in">
							<input type="radio" name="job_select" id="job_select5" class="p-jobSelect__radio" data-selector="jobSelect" value="5">
							<label for="job_select5" class="p-jobSelect__anchor">グラフィックデザイナー</label>
						</div><!-- /.p-jobSelect__in -->
					</li>
					<li class="p-jobSelect__list"  data-aos="fade-up" data-aos-delay="200">
						<div class="p-jobSelect__in">
							<input type="radio" name="job_select" id="job_select6" class="p-jobSelect__radio" data-selector="jobSelect" value="6">
							<label for="job_select6" class="p-jobSelect__anchor">WEBプログラマー</label>
						</div><!-- /.p-jobSelect__in -->
					</li>
					<li class="p-jobSelect__list"  data-aos="fade-up">
						<div class="p-jobSelect__in">
							<input type="radio" name="job_select" id="job_select7" class="p-jobSelect__radio" data-selector="jobSelect" value="7">
							<label for="job_select7" class="p-jobSelect__anchor">WEBコーダー</label>
						</div><!-- /.p-jobSelect__in -->
					</li>
					<li class="p-jobSelect__list"  data-aos="fade-up" data-aos-delay="100">
						<div class="p-jobSelect__in">
							<input type="radio" name="job_select" id="job_select8" class="p-jobSelect__radio" data-selector="jobSelect" value="8">
							<label for="job_select8" class="p-jobSelect__anchor">WEBデザイナー</label>
						</div><!-- /.p-jobSelect__in -->
					</li>
				</ul>

				<div class="p-jobSelecter u-hide__type--pc" data-aos="fade-up">
					<select name="job_selecter" id="job_selecter" data-selector="jobSelecter" class="p-jobSelecter__btn">
						<option value="1">セールスプロモーター（SP事業）</option>
						<option value="2">インターネット受付事務（EC事業）</option>
						<option value="3">製造管理</option>
						<option value="4">製造オペレーター</option>
						<option value="5">グラフィックデザイナー</option>
						<option value="6">WEBプログラマー</option>
						<option value="7">WEBコーダー</option>
						<option value="8">WEBデザイナー</option>
					</select>
				</div>

				<section class="p-jobOffer" data-aos="fade-up">
					<h2 class="c-ttl01" data-aos="fade-up">
						<span class="c-ttl01__main">募集要項紹介</span>
					</h2>

					<div class="p-recruitDetail" data-selector="recruitDetail" data-aos="fade-up">
						<div class="c-sentence01" data-aos="fade-up">
							<p class="c-sentence01__txt">
								上記職種を選択して下さい。
							</p>
						</div>
					</div>
				</section>
				<!-- /.p-recruitDetail -->
			</div>
			<!-- /.c-contsFix01 -->
		</div>
	</main><!-- /#main -->

	<?php require($_SERVER['DOCUMENT_ROOT'].'/assets/inc/parts/contact.php');?>

	</div><!-- /.barba-container -->
	</div><!-- /#barba-wrapper -->

<?php require_once($_SERVER['DOCUMENT_ROOT'].'/assets/inc/footer.php');?>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/assets/inc/end.php');?>

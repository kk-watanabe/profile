<?php require_once($_SERVER['DOCUMENT_ROOT'].'/assets/inc/meta.php');?>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/assets/inc/header.php');?>

	<main class="l-main">
		<?php $sanitize->get_headline(); ?>
		<!-- headline -->

		<div class="l-body">
			<?php $sanitize->get_page_path(); ?>
			<!-- パンくず -->

			<h1 class="c-ttl01" data-aos="fade-up">
				<span class="c-ttl01__main">会社概要</span>
			</h1>

			<div class="p-profile" data-aos="fade-up">
				<div class="c-table01 is-w20-80 is-vtop">
					<dl class="c-table01__row">
						<dt class="c-table01__cell is-th">会社名</dt>
						<dd class="c-table01__cell">株式会社アーリークロス</dd>
					</dl>
					<dl class="c-table01__row">
						<dt class="c-table01__cell is-th">代表取締役</dt>
						<dd class="c-table01__cell">佐藤 智裕</dd>
					</dl>
					<dl class="c-table01__row">
						<dt class="c-table01__cell is-th">設立年月日</dt>
						<dd class="c-table01__cell">2008年8月19日</dd>
					</dl>
					<dl class="c-table01__row">
						<dt class="c-table01__cell is-th">資本金</dt>
						<dd class="c-table01__cell">1,000万円</dd>
					</dl>
					<dl class="c-table01__row">
						<dt class="c-table01__cell is-th">所在地</dt>
						<dd class="c-table01__cell">
							<dl class="p-location">
								<dt class="p-location__office">本社</dt>
								<dd class="p-location__address">
									〒983-0038<br>
									宮城県仙台市宮城野区新田2丁目8-50<br>
									TEL： 022-349-9371(代)<br>
									FAX： 022-349-9372
								</dd>
							</dl>
							<!-- /.p-location -->
						</dd>
					</dl>
					<dl class="c-table01__row">
						<dt class="c-table01__cell is-th">E-mail</dt>
						<dd class="c-table01__cell">
							<a href="m&#97;i&#108;t&#111;:&#105;&#110;fo&#64;e&#97;&#114;&#108;y&#45;&#99;&#114;&#111;ss&#46;c&#111;&#46;jp" class="p-profile__link">&#105;&#110;fo&#64;e&#97;&#114;&#108;y&#45;&#99;&#114;&#111;ss&#46;c&#111;&#46;jp</a>
						</dd>
					</dl>
					<dl class="c-table01__row">
						<dt class="c-table01__cell is-th">取引銀行</dt>
						<dd class="c-table01__cell">
							七十七銀行　多賀城支店<br>
							福島銀行　仙台支店<br>
							仙台銀行　苦竹支店
						</dd>
					</dl>
					<dl class="c-table01__row">
						<dt class="c-table01__cell is-th">顧問先</dt>
						<dd class="c-table01__cell">
							弁護士　白根澤俊夫法律事務所<br>
							税理士　菊地敦税理士事務所<br>
							社労士　豊嶋社会保険労務士事務所
						</dd>
					</dl>
					<dl class="c-table01__row">
						<dt class="c-table01__cell is-th">会員</dt>
						<dd class="c-table01__cell">
							<div class="p-jfec">
								<div class="p-jfec__txt">
									（公社）宮城県観光連盟<br>
									（公財）仙台観光国際協会<br>
									仙台商工会議所
								</div>

								<div class="p-jfec__img">
									<a href="http://www.j-fec.or.jp/member/certificate/i/c/611006" target="_blank" class="u-imgHover01">
										<img src="/assets/img/company/profile/j-fec.png" width="135" height="86" alt="J-FEC MEMBER認証 2014.11 日本の安心ネット通販">
									</a>
								</div>
							</div>
							<!-- /.p-jfec -->
						</dd>
					</dl>
				</div>
				<!-- /.c-table01 is-w25-75 -->
			</div>
		</div>
	</main><!-- /#main -->

	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/assets/inc/parts/company_navi.php');?>
	<?php require($_SERVER['DOCUMENT_ROOT'].'/assets/inc/parts/contact.php');?>

	</div><!-- /.barba-container -->
	</div><!-- /#barba-wrapper -->

<?php require_once($_SERVER['DOCUMENT_ROOT'].'/assets/inc/footer.php');?>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/assets/inc/end.php');?>

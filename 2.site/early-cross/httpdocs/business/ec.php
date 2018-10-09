<?php require_once($_SERVER['DOCUMENT_ROOT'].'/assets/inc/meta.php');?>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/assets/inc/header.php');?>
<?php
	// ob_start();
	// echo $sanitize->get_ec_portfolio_create();
	// $portfolio = ob_get_contents();
	// ob_end_clean();
?>
	<main class="l-main">
		<div class="p-businessHead is-ec">
			<div class="p-businessHead__bg">
				<div class="p-businessHead__box" data-selector="showTxt" data-show="false">
					<h1 class="p-businessHead__ttl">
						<span data-show-block="1">E C</span>
						<span class="p-businessHead__ttl--notation" data-show-block="3">エレクトロニックコマース</span>
					</h1>
					<p class="p-businessHead__txt" data-selector="randomTxt" data-show-block="2">
						各種ノベルティ関連のインターネット通販サイトを展開。<br>
						企業、官公庁、学校、病院等をはじめ、日本全国のあらゆる業種のお客様に、<br>
						安価で迅速な高品質のサービスを提供しています。
					</p>
				</div>
				<!-- /.box -->
			</div>
		</div>

		<div class="l-body">
			<?php $sanitize->get_page_path(); ?>
			<!-- パンくず -->

			<div class="c-sentence01" data-aos="fade-up">
				<p class="c-sentence01__txt">
					ホームページを利用したネット販売にも力を入れており、全国に販売しております。<br>
					これからも、お客様の売上向上に繋げる商品アイテムを考えて参ります。<br>
					また、より快適にECサイトをご利用いただけるように日々改善に力を入れて参ります。
				</p>
			</div>

			<div class="c-contsFix01">
				<section class="p-ecSite">
					<h2 class="c-ttl01" data-aos="fade-up">
						<span class="c-ttl01__main">運営サイト一覧</span>
					</h2>

					<div class="c-sentence01" data-aos="fade-up">
						<p class="c-sentence01__txt">
							弊社ではノベルティ関連のECサイトを運営しております。<br>
							企業、個人問わずに多くの依頼を受けております。ご依頼したい商品がございましたら各ECサイトからご連絡ください。<br>
							ご不明な点も各サイトの担当者が丁寧な対応を致します。
						</p>
					</div>

					<div class="p-ecSite__btn" data-aos="fade-up">
						<a
						 href="/assets/pdf/earlycross_noveltycatalog.pdf"
						 target="_blank"
						 class="c-btn01 c-btnIcon01__pdf01 is-w450 no-barba"
						 onclick="gtag('event', 'download', {'event_category' : 'pdf', 'event_label' : 'earlycross_noveltycatalog.pdf'});">
							<span class="c-btn01__txt"><span class="u-hide__type--sp">ノベルティカタログ </span><span class="is-roboto">PDF Download</span></span>

							<svg width="19" height="25" class="c-btnIcon01__pdf01--icon">
								<use xlink:href="/assets/img/svg.svg#pdf_icon">
							</svg>
						</a>

						<p class="p-ecSite__btn--txt">
							ECサイトで販売してる商品カタログになります。<br>
							ぜひ一度、ご覧ください。
						</p>
					</div><!-- /.p-ecSite__btn -->

					<section class="p-ecSite__cate">
						<h3 class="c-ttl02" data-aos="fade-up">ノベルティ関連</h3>

						<ul class="p-ecSite__summary">
							<li class="p-ecSite__summary--list" data-aos="fade-up">
								<a href="https://www.e-fusenshi.com" target="_blank" class="p-ecSite__summary--anchor">
									<div class="p-ecSite__summary--frame">
										<div class="p-ecSite__summary--img">
											<img
											 src="/assets/img/business/ec/img01.jpg"
											 srcset="/assets/img/business/ec/img01_min.jpg 1x,/assets/img/business/ec/img01.jpg 2x"
											 width="300" height="184" alt="" class="p-ecSite__summary--img__photo">
										</div>
										<dl class="p-ecSite__summary--info">
											<dt class="p-ecSite__summary--info__name is-fusen">ふせん紙王国</dt>
											<dd class="p-ecSite__summary--info__txt">
												抜群の実用性で大人気<br>
												豊富なタイプであらゆるニーズに対応
											</dd>
										</dl>
									</div>
									<div class="p-ecSite__summary--return u-hide__type--sp">
										<img src="/assets/img/business/ec/img01_hover.jpg" width="300" height="272" alt="" class="p-ecSite__summary--return__img">
									</div>
								</a>
							</li>
							<li class="p-ecSite__summary--list" data-aos="fade-up">
								<a href="https://www.original-memo.com" target="_blank" class="p-ecSite__summary--anchor">
									<div class="p-ecSite__summary--frame">
										<div class="p-ecSite__summary--img">
											<img
											 src="/assets/img/business/ec/img02.jpg"
											 srcset="/assets/img/business/ec/img02_min.jpg 1x,/assets/img/business/ec/img02.jpg 2x"
											 width="300" height="184" alt="" class="p-ecSite__summary--img__photo">
										</div>
										<dl class="p-ecSite__summary--info">
											<dt class="p-ecSite__summary--info__name is-memo">メモ帳王国</dt>
											<dd class="p-ecSite__summary--info__txt">
												圧倒的な販促効果<br>
												形状・加工も種類豊富で、喜ばれる一品
											</dd>
										</dl>
									</div>
									<div class="p-ecSite__summary--return u-hide__type--sp">
										<img src="/assets/img/business/ec/img02_hover.jpg" width="300" height="272" alt="" class="p-ecSite__summary--return__img">
									</div>
								</a>
							</li>
							<li class="p-ecSite__summary--list" data-aos="fade-up">
								<a href="https://www.ringmemo.com" target="_blank" class="p-ecSite__summary--anchor">
									<div class="p-ecSite__summary--frame">
										<div class="p-ecSite__summary--img">
											<img
											 src="/assets/img/business/ec/img03.jpg"
											 srcset="/assets/img/business/ec/img03_min.jpg 1x,/assets/img/business/ec/img03.jpg 2x"
											 width="300" height="184" alt="" class="p-ecSite__summary--img__photo">
										</div>
										<dl class="p-ecSite__summary--info">
											<dt class="p-ecSite__summary--info__name is-ringmemo">リングメモ王国</dt>
											<dd class="p-ecSite__summary--info__txt">
												使いやすさが好評<br>
												フルカラー表紙からクラフト紙まで多彩な品揃え
											</dd>
										</dl>
									</div>
									<div class="p-ecSite__summary--return u-hide__type--sp">
										<img src="/assets/img/business/ec/img03_hover.jpg" width="300" height="272" alt="" class="p-ecSite__summary--return__img">
									</div>
								</a>
							</li>
							<li class="p-ecSite__summary--list" data-aos="fade-up">
								<a href="https://www.calendar-naire.com" target="_blank" class="p-ecSite__summary--anchor">
									<div class="p-ecSite__summary--frame">
										<div class="p-ecSite__summary--img">
											<img
											 src="/assets/img/business/ec/img04.jpg"
											 srcset="/assets/img/business/ec/img04_min.jpg 1x,/assets/img/business/ec/img04.jpg 2x"
											 width="300" height="184" alt="" class="p-ecSite__summary--img__photo">
										</div>
										<dl class="p-ecSite__summary--info">
											<dt class="p-ecSite__summary--info__name is-calendar">カレンダー王国</dt>
											<dd class="p-ecSite__summary--info__txt">
												販促グッズの超定番<br>
												卓上に、壁掛けに、毎日見るからPR効果大
											</dd>
										</dl>
									</div>
									<div class="p-ecSite__summary--return u-hide__type--sp">
										<img src="/assets/img/business/ec/img04_hover.jpg" width="300" height="272" alt="" class="p-ecSite__summary--return__img">
									</div>
								</a>
							</li>
							<li class="p-ecSite__summary--list" data-aos="fade-up">
								<a href="https://www.fiber-cloth.com" target="_blank" class="p-ecSite__summary--anchor">
									<div class="p-ecSite__summary--frame">
										<div class="p-ecSite__summary--img">
											<img
											 src="/assets/img/business/ec/img05.jpg"
											 srcset="/assets/img/business/ec/img05_min.jpg 1x,/assets/img/business/ec/img05.jpg 2x"
											 width="300" height="184" alt="" class="p-ecSite__summary--img__photo">
										</div>
										<dl class="p-ecSite__summary--info">
											<dt class="p-ecSite__summary--info__name is-fiberCloth">マイクロファイバークロス王国</dt>
											<dd class="p-ecSite__summary--info__txt">
												幅広い利用用途で効果大<br>
												スマホ、PC、タブレットのクリーナーに使える
											</dd>
										</dl>
									</div>
									<div class="p-ecSite__summary--return u-hide__type--sp">
										<img src="/assets/img/business/ec/img05_hover.jpg" width="300" height="272" alt="" class="p-ecSite__summary--return__img">
									</div>
								</a>
							</li>
							<li class="p-ecSite__summary--list" data-aos="fade-up">
								<a href="https://www.ee-uchiwa.com" target="_blank" class="p-ecSite__summary--anchor">
									<div class="p-ecSite__summary--frame">
										<div class="p-ecSite__summary--img">
											<img
											 src="/assets/img/business/ec/img06.jpg"
											 srcset="/assets/img/business/ec/img06_min.jpg 1x,/assets/img/business/ec/img06.jpg 2x"
											 width="300" height="184" alt="" class="p-ecSite__summary--img__photo">
										</div>
										<dl class="p-ecSite__summary--info">
											<dt class="p-ecSite__summary--info__name is-uchiwa">うちわ王国</dt>
											<dd class="p-ecSite__summary--info__txt">
												夏のイベントの必須アイテム<br>
												定番の紙うちわからクラフトや和紙の変わり種まで
											</dd>
										</dl>
									</div>
									<div class="p-ecSite__summary--return u-hide__type--sp">
										<img src="/assets/img/business/ec/img06_hover.jpg" width="300" height="272" alt="" class="p-ecSite__summary--return__img">
									</div>
								</a>
							</li>
							<li class="p-ecSite__summary--list" data-aos="fade-up">
								<a href="https://www.box-tissue.com" target="_blank" class="p-ecSite__summary--anchor">
									<div class="p-ecSite__summary--frame">
										<div class="p-ecSite__summary--img">
											<img
											 src="/assets/img/business/ec/img07.jpg"
											 srcset="/assets/img/business/ec/img07_min.jpg 1x,/assets/img/business/ec/img07.jpg 2x"
											 width="300" height="184" alt="" class="p-ecSite__summary--img__photo">
										</div>
										<dl class="p-ecSite__summary--info">
											<dt class="p-ecSite__summary--info__name is-boxTissue">ボックスティッシュ王国</dt>
											<dd class="p-ecSite__summary--info__txt">
												もらって嬉しい一品<br>
												デスクの必需品だから、圧倒的な宣伝効果
											</dd>
										</dl>
									</div>
									<div class="p-ecSite__summary--return u-hide__type--sp">
										<img src="/assets/img/business/ec/img07_hover.jpg" width="300" height="272" alt="" class="p-ecSite__summary--return__img">
									</div>
								</a>
							</li>
							<li class="p-ecSite__summary--list" data-aos="fade-up">
								<a href="https://www.e-clearfile.com" target="_blank" class="p-ecSite__summary--anchor">
									<div class="p-ecSite__summary--frame">
										<div class="p-ecSite__summary--img">
											<img
											 src="/assets/img/business/ec/img08.jpg"
											 srcset="/assets/img/business/ec/img08_min.jpg 1x,/assets/img/business/ec/img08.jpg 2x"
											 width="300" height="184" alt="" class="p-ecSite__summary--img__photo">
										</div>
										<dl class="p-ecSite__summary--info">
											<dt class="p-ecSite__summary--info__name is-clearfile">クリアファイル王国</dt>
											<dd class="p-ecSite__summary--info__txt">
												販促のマストグッズ<br>
												学生から社会人まで、あらゆる層に高い利便性
											</dd>
										</dl>
									</div>
									<div class="p-ecSite__summary--return u-hide__type--sp">
										<img src="/assets/img/business/ec/img08_hover.jpg" width="300" height="272" alt="" class="p-ecSite__summary--return__img">
									</div>
								</a>
							</li>
							<li class="p-ecSite__summary--list" data-aos="fade-up">
								<a href="https://www.original-clip.com" target="_blank" class="p-ecSite__summary--anchor">
									<div class="p-ecSite__summary--frame">
										<div class="p-ecSite__summary--img">
											<img
											 src="/assets/img/business/ec/img09.jpg"
											 srcset="/assets/img/business/ec/img09_min.jpg 1x,/assets/img/business/ec/img09.jpg 2x"
											 width="300" height="184" alt="" class="p-ecSite__summary--img__photo">
										</div>
										<dl class="p-ecSite__summary--info">
											<dt class="p-ecSite__summary--info__name is-clip">クリップ王国</dt>
											<dd class="p-ecSite__summary--info__txt">
												書類仕事の必要グッズ<br>
												会社でも学校でもどこでも使える優しい製品
											</dd>
										</dl>
									</div>
									<div class="p-ecSite__summary--return u-hide__type--sp">
										<img src="/assets/img/business/ec/img09_hover.jpg" width="300" height="272" alt="" class="p-ecSite__summary--return__img">
									</div>
								</a>
							</li>
							<li class="p-ecSite__summary--list" data-aos="fade-up">
								<a href="https://www.ee-magnet.com" target="_blank" class="p-ecSite__summary--anchor">
									<div class="p-ecSite__summary--frame">
										<div class="p-ecSite__summary--img">
											<img
											 src="/assets/img/business/ec/img10.jpg"
											 srcset="/assets/img/business/ec/img10_min.jpg 1x,/assets/img/business/ec/img10.jpg 2x"
											 width="300" height="184" alt="" class="p-ecSite__summary--img__photo">
										</div>
										<dl class="p-ecSite__summary--info">
											<dt class="p-ecSite__summary--info__name is-magnet">マグネット王国</dt>
											<dd class="p-ecSite__summary--info__txt">
												キッチン周りやオフィスに⼤活躍<br>
												主婦から社会⼈まで喜ばれる⼈気商品
											</dd>
										</dl>
									</div>
									<div class="p-ecSite__summary--return u-hide__type--sp">
										<img src="/assets/img/business/ec/img10_hover.jpg" width="300" height="272" alt="" class="p-ecSite__summary--return__img">
									</div>
								</a>
							</li>
						</ul>
					</section>
					<!-- /.category -->
				</section>
				<!-- /.operationSite -->

				<section class="p-portfolio">
					<h2 class="c-ttl01" data-aos="fade-up">
						<span class="c-ttl01__main">制作実績</span>
					</h2>

					<div class="c-sentence01" data-aos="fade-up">
						<p class="c-sentence01__txt">
							今まで依頼いただいた商品の一部を掲載いたします。<br>
							ご参考にしていただけたらと思います。
						</p>

						<p class="c-sentence01__txt p-portfolio__comingSoon is-roboto">COMING SOON</p>
						<!-- /.p-portfolio__comingSoon -->
					</div>

					<!-- <ul class="c-itemList01" data-selector="portfolioPopup"> -->
						<?php
							//echo $portfolio;
						?>
					<!-- </ul> -->
					<!-- /.c-itemList01 -->
				</section>
			</div>
		</div>
	</main><!-- /#main -->

	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/assets/inc/parts/business_navi.php');?>
	<?php require($_SERVER['DOCUMENT_ROOT'].'/assets/inc/parts/contact.php');?>

	</div><!-- /.barba-container -->
	</div><!-- /#barba-wrapper -->

<?php require_once($_SERVER['DOCUMENT_ROOT'].'/assets/inc/footer.php');?>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/assets/inc/end.php');?>

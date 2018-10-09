<?php require_once($_SERVER['DOCUMENT_ROOT'].'/assets/inc/meta.php');?>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/assets/inc/header.php');?>

	<main class="l-main">
		<?php $sanitize->get_headline(); ?>

		<div class="l-body">
			<?php $sanitize->get_page_path(); ?>
			<!-- パンくず -->

			<div class="c-contsFix01">
				<ol class="p-contactFlow">
					<li data-aos="fade-right" class="p-contactFlow__list">1. <span class="u-hide__type--sp">お問い合わせ内容を</span>入力</li>
					<li data-aos="fade-right" data-aos-delay="500" class="p-contactFlow__list">2. <span class="u-hide__type--sp">入力内容を</span>確認</li>
					<li data-aos="fade-right" data-aos-delay="1000" class="p-contactFlow__list is-current">3. <span class="u-hide__type--sp">お問い合わせ内容</span>完了</li>
				</ol>

				<h1 class="c-ttl01" data-aos="fade-up">
					<span class="c-ttl01__main">お問い合わせ完了</span>
				</h1>

				<div class="c-sentence01" data-aos="fade-up">
					<p class="c-sentence01__txt">
						お問い合わせいただき、ありがとうございました<br>
						自動返信メールをお客様宛てへ送信いたしましたのでご確認ください。
					</p>

					<p class="c-sentence01__txt">
						３日営業日以内に担当者からお返事を差し上げますが、３日営業日以内に連絡がない場合、<br>
						大変お手数ですが、もう一度お問い合わせいただくか電話にてご連絡ください。
					</p>
				</div>

				<dl class="p-companyInfo" data-aos="fade-up">
					<dt class="p-companyInfo__ttl">連絡先</dt>
					<dd class="p-companyInfo__box">
						株式会社アーリークロス<br>
						所在地： 〒983-0038 宮城県仙台市宮城野区新田2丁目8-50<br>
						フリーダイヤル： <a href="tel:0120-972-602" class="p-companyInfo__tel">0120-972-602</a><br>
						TEL： 022-349-9371<br>
						FAX： 022-349-9372<br>
						メールアドレス：
						<script type="text/javascript">
							function converter(M){
								var str="", str_as="";
								for(var i=0;i<M.length;i++){
									str_as = M.charCodeAt(i);
									str += String.fromCharCode(str_as + 1);
								}

								return str;
							}

							var ad = converter(String.fromCharCode(104,109,101,110,63,100,96,113,107,120)+String.fromCharCode(44,98,113,110,114,114,45,98,110,45,105,111));

							document.write("<a href=\"mai"+"lto:"+ad+"\" class=\"p-companyInfo__mail\">"+ad+"<\/a>");
						</script>
						<noscript><img src="/assets/img/common/mailadress.png" width="140" height="16" alt=""></noscript>
					</dd>
				</dl>
				<!-- /.p-companyInfo -->

				<a href="/" class="c-btn01 is-w300" data-aos="fade-up">
					<span class="c-btn01__txt">HOMEへ戻る</span>
				</a>
			</div>
		</div>
	</main><!-- /#main -->

	</div><!-- /.barba-container -->
	</div><!-- /#barba-wrapper -->

<?php require_once($_SERVER['DOCUMENT_ROOT'].'/assets/inc/footer.php');?>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/assets/inc/end.php');?>

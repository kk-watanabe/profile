<?php require_once($_SERVER['DOCUMENT_ROOT'].'/assets/inc/meta.php');?>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/assets/inc/header.php');?>

	<main class="l-main">
		<?php $sanitize->get_headline(); ?>

		<div class="l-body">
			<?php $sanitize->get_page_path(); ?>
			<!-- パンくず -->

			<section>
				<h2 class="c-ttl01">エラー内容確認画面</h2>

				<div class="c-sentence01">
					<p class="c-sentence01__txt">
						エラー項目があります。<br>
						エラー内容をご確認のうえ修正してください。
					</p>
				</div>

				<div class="c-contsFix01">
					<ol class="p-contactFlow">
						<li class="p-contactFlow__list is-current">1. <span class="u-hide__type--sp">お問い合わせ内容を</span>入力</li>
						<li class="p-contactFlow__list">2. <span class="u-hide__type--sp">入力内容を</span>確認</li>
						<li class="p-contactFlow__list">3. <span class="u-hide__type--sp">お問い合わせ内容</span>完了</li>
					</ol>

					<form action="" method="post" class="p-contactForm">
						<dl class="p-contactForm__in">
							<dt class="p-contactForm__ttl"><label class="p-contactForm__ttl--label">お問い合せ項目<span class="p-required">※</span></label></dt>
							<dd class="p-contactForm__box">
								<?php echo $helper->checkbox("type", $post['type'], $setting_parameter['type']); ?>
							</dd>

							<dt class="p-contactForm__ttl"><label for="fName" class="p-contactForm__ttl--label">お名前<span class="p-required">※</span></label></dt>
							<dd class="p-contactForm__box">
								<input type="text" name="name" id="fName" value="<!--{$name}-->" placeholder="例）山田　太郎" class="p-inputParts01">
							</dd>

							<dt class="p-contactForm__ttl"><label for="fKana" class="p-contactForm__ttl--label">フリガナ<span class="p-required">※</span></label></dt>
							<dd class="p-contactForm__box">
								<input type="text" name="kana" id="fKana" value="<!--{$kana}-->" placeholder="例）ヤマダ　タロウ" class="p-inputParts01">
							</dd>

							<dt class="p-contactForm__ttl"><label for="fCompany" class="p-contactForm__ttl--label">会社名</label></dt>
							<dd class="p-contactForm__box">
								<input type="text" name="company" id="fCompany" value="<!--{$company}-->" placeholder="例）株式会社アーリークロス" class="p-inputParts01">
							</dd>

							<dt class="p-contactForm__ttl"><label for="fTel" class="p-contactForm__ttl--label">電話番号<span class="p-required">※</span></label></dt>
							<dd class="p-contactForm__box">
								<input type="number" name="tel" id="fTel" value="<!--{$tel}-->" placeholder="例）0223499371" class="p-inputParts01">
							</dd>

							<dt class="p-contactForm__ttl"><label for="fEmail" class="p-contactForm__ttl--label">メールアドレス<span class="p-required">※</span></label></dt>
							<dd class="p-contactForm__box">
								<input type="text" name="email" id="fEmail" value="<!--{$email}-->" placeholder="例）info@early-cross.co.jp" class="p-inputParts01">
							</dd>

							<dt class="p-contactForm__ttl"><label for="fContent" class="p-contactForm__ttl--label">お問い合わせ内容<span class="p-required">※</span></label></dt>
							<dd class="p-contactForm__box">
								<textarea name="content" id="fContent" cols="30" rows="10" class="p-textarea01"><!--{$content}--></textarea>
							</dd>
						</dl>

						<div class="p-contactForm__privacy">
							<div class="p-contactForm__privacy--in">
								<?php echo $helper->checkbox("privacy", $post['privacy'], $setting_parameter['privacy']); ?>
								<span class="p-required">※</span>
							</div>

							<a href="/privacy/" class="p-contactForm__privacy--anchor">個人情報保護方針のご確認はこちらから</a>
						</div>

						<ul class="p-contactForm__submit">
							<li class="p-contactForm__submit--list">
								<button type="submit" name="__submit__" class="c-btn01 is-w300 p-contactForm__btn">
									<span class="c-btn01__txt">入力内容の確認</span>
								</button>
							</li>
						</ul>
					</form>
					<!-- /.p-contactForm -->
				</div>
			</section>
		</div>
	</main><!-- /#main -->
</div><!-- /#barba-wrapper -->

<?php require_once($_SERVER['DOCUMENT_ROOT'].'/assets/inc/footer.php');?>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/assets/inc/end.php');?>

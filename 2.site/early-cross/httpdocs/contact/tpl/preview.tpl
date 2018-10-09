<?php require_once($_SERVER['DOCUMENT_ROOT'].'/assets/inc/meta.php');?>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/assets/inc/header.php');?>

	<main class="l-main">
		<?php $sanitize->get_headline(); ?>

		<div class="l-body">
			<?php $sanitize->get_page_path(); ?>
			<!-- パンくず -->

			<section>
				<h2 class="c-ttl01" data-aos="fade-up">
					<span class="c-ttl01__main">入力内容確認画面</span>
				</h2>

				<div class="c-sentence01" data-aos="fade-up">
					<p class="c-sentence01__txt">
						入力内容の確認画面になります。<br>
						問題なければ「送信する」ボタンを、修正があれば「修正する」ボタンを押して下さい。
					</p>
				</div>

				<div class="c-contsFix01">
					<ol class="p-contactFlow">
						<li data-aos="fade-right" class="p-contactFlow__list">1. <span class="u-hide__type--sp">お問い合わせ内容を</span>入力</li>
						<li data-aos="fade-right" data-aos-delay="500" class="p-contactFlow__list is-current">2. <span class="u-hide__type--sp">入力内容を</span>確認</li>
						<li data-aos="fade-right" data-aos-delay="1000" class="p-contactFlow__list">3. <span class="u-hide__type--sp">お問い合わせ内容</span>完了</li>
					</ol>

					<form action="?page_move=1" method="post" class="p-contactForm" data-aos="fade-up">
						<?php echo $helper->hidden_tag($post); ?>

						<dl class="p-contactForm__in">
							<dt class="p-contactForm__ttl">お問い合せ項目</dt>
							<dd class="p-contactForm__box is-confirm">
								<?php echo $helper->disp_checkbox_value('type', $post); ?>
							</dd>

							<dt class="p-contactForm__ttl">お名前</dt>
							<dd class="p-contactForm__box is-confirm"><!--{$name|escape}--></dd>

							<dt class="p-contactForm__ttl">フリガナ</dt>
							<dd class="p-contactForm__box is-confirm"><!--{$kana|escape}--></dd>

							<dt class="p-contactForm__ttl">会社名</dt>
							<dd class="p-contactForm__box is-confirm"><!--{$company|escape}--></dd>

							<dt class="p-contactForm__ttl">電話番号</dt>
							<dd class="p-contactForm__box is-confirm"><!--{$tel|escape}--></dd>

							<dt class="p-contactForm__ttl">メールアドレス</dt>
							<dd class="p-contactForm__box is-confirm"><!--{$email|escape}--></dd>

							<dt class="p-contactForm__ttl">お問い合わせ内容</dt>
							<dd class="p-contactForm__box is-confirm"><!--{$content|nl2br}--></dd>
						</dl>

						<ul class="p-contactForm__submit">
							<li class="p-contactForm__submit--list">
								<button type="submit" name="__retry__" class="c-btn02 is-w300 p-contactForm__btn is-repair">
									<span class="c-btn02__txt">入力内容を修正する</span>
								</button>
							</li>

							<li class="p-contactForm__submit--list">
								<button type="submit" name="__send__" class="c-btn01 is-w300 p-contactForm__btn">
									<span class="c-btn01__txt">送信する</span>
								</button>
							</li>
						</ul>
					</form>
					<!-- /.p-contactForm -->
				</div>
			</section>
		</div>
	</main><!-- /#main -->

	</div><!-- /.barba-container -->
	</div><!-- /#barba-wrapper -->

<?php require_once($_SERVER['DOCUMENT_ROOT'].'/assets/inc/footer.php');?>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/assets/inc/end.php');?>

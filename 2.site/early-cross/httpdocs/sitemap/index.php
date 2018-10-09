<?php require_once($_SERVER['DOCUMENT_ROOT'].'/assets/inc/meta.php');?>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/assets/inc/header.php');?>

	<main class="l-main">
		<?php $sanitize->get_headline(); ?>

		<div class="l-body">
			<?php $sanitize->get_page_path(); ?>
			<!-- パンくず -->

			<ul class="p-sitemap">
				<li class="p-sitemap__list" data-aos="fade-up">
					<a href="/" class="p-sitemap__anchor p-sitemap__hover">
						<span class="p-sitemap__txt">
							<span class="p-sitemap__en is-roboto">HOME</span>
						</span>
					</a>
				</li>
				<li class="p-sitemap__list" data-aos="fade-up">
					<a href="/business/" class="p-sitemap__anchor p-sitemap__hover">
						<span class="p-sitemap__txt">
							<span class="p-sitemap__en is-roboto">BUSINESS</span>
							<span class="p-sitemap__jp">事業案内</span>
						</span>
					</a>

					<ul class="p-sitemap__level">
						<li class="p-sitemap__level--list" data-aos="fade-up">
							<a href="/business/ec.php" class="p-sitemap__level--anchor p-sitemap__hover">
								<span class="p-sitemap__txt">EC事業</span>
							</a>
						</li>
						<li class="p-sitemap__level--list" data-aos="fade-up">
							<a href="/business/sp.php" class="p-sitemap__level--anchor p-sitemap__hover">
								<span class="p-sitemap__txt">SP事業</span>
							</a>
						</li>
					</ul>
				</li>
				<li class="p-sitemap__list" data-aos="fade-up">
					<a href="/company/" class="p-sitemap__anchor p-sitemap__hover">
						<span class="p-sitemap__txt">
							<span class="p-sitemap__en is-roboto">COMPANY</span>
							<span class="p-sitemap__jp">企業情報</span>
						</span>
					</a>

					<ul class="p-sitemap__level">
						<li class="p-sitemap__level--list" data-aos="fade-up">
							<a href="/company/ceo.php" class="p-sitemap__level--anchor p-sitemap__hover">
								<span class="p-sitemap__txt">代表挨拶</span>
							</a>
						</li>
						<li class="p-sitemap__level--list" data-aos="fade-up">
							<a href="/company/profile.php" class="p-sitemap__level--anchor p-sitemap__hover">
								<span class="p-sitemap__txt">会社概要</span>
							</a>
						</li>
						<li class="p-sitemap__level--list" data-aos="fade-up">
							<a href="/company/access.php" class="p-sitemap__level--anchor p-sitemap__hover">
								<span class="p-sitemap__txt">アクセス</span>
							</a>
						</li>
						<li class="p-sitemap__level--list" data-aos="fade-up">
							<a href="/company/organization.php" class="p-sitemap__level--anchor p-sitemap__hover">
								<span class="p-sitemap__txt">組織概要</span>
							</a>
						</li>
						<li class="p-sitemap__level--list" data-aos="fade-up">
							<a href="/company/history.php" class="p-sitemap__level--anchor p-sitemap__hover">
								<span class="p-sitemap__txt">沿革</span>
							</a>
						</li>
						<li class="p-sitemap__level--list" data-aos="fade-up">
							<a href="/compnay/customer.php" class="p-sitemap__level--anchor p-sitemap__hover">
								<span class="p-sitemap__txt">取引先実績</span>
							</a>
						</li>
					</ul>
				</li>
				<li class="p-sitemap__list" data-aos="fade-up">
					<a href="/recruit/" class="p-sitemap__anchor p-sitemap__hover">
						<span class="p-sitemap__txt">
							<span class="p-sitemap__en is-roboto">RECUIT</span>
							<span class="p-sitemap__jp">採用情報</span>
						</span>
					</a>
				</li>
				<li class="p-sitemap__list" data-aos="fade-up">
					<a href="/contact/" class="p-sitemap__anchor p-sitemap__hover">
						<span class="p-sitemap__txt">
							<span class="p-sitemap__en is-roboto">CONTACT</span>
							<span class="p-sitemap__jp">お問い合せ</span>
						</span>
					</a>
				</li>
				<li class="p-sitemap__list" data-aos="fade-up">
					<a href="/news/" class="p-sitemap__anchor p-sitemap__hover">
						<span class="p-sitemap__txt">
							<span class="p-sitemap__en is-roboto">NEWS</span>
							<span class="p-sitemap__jp">ニュースリリース</span>
						</span>
					</a>
				</li>
				<li class="p-sitemap__list" data-aos="fade-up">
					<a href="/privacy/" class="p-sitemap__anchor p-sitemap__hover">
						<span class="p-sitemap__txt">
							<span class="p-sitemap__en is-roboto">PRIVACY</span>
							<span class="p-sitemap__jp">個人情報保護方針</span>
						</span>
					</a>
				</li>
				<li class="p-sitemap__list" data-aos="fade-up">
					<a href="/sitemap/" class="p-sitemap__anchor p-sitemap__hover">
						<span class="p-sitemap__txt">
							<span class="p-sitemap__en is-roboto">SITEMAP</span>
							<span class="p-sitemap__jp">サイトマップ</span>
						</span>
					</a>
				</li>
			</ul>
			<!-- /.p-sitemap -->
		</div>
	</main><!-- /#main -->

	<?php require($_SERVER['DOCUMENT_ROOT'].'/assets/inc/parts/contact.php');?>

	</div><!-- /.barba-container -->
	</div><!-- /#barba-wrapper -->

<?php require_once($_SERVER['DOCUMENT_ROOT'].'/assets/inc/footer.php');?>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/assets/inc/end.php');?>

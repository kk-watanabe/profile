<div class="l-looding" data-selector="looding"><span class="l-looding__bar is-basic"></span><span class="l-looding__bar is-orange"></span></div>

<div class="l-container" data-target="container">
	<header class="l-header" data-selector="siteHeader">
		<?php
			$logo_tag = 'h1';
			if (count($sanitize->get_script()) > 1) {
				$logo_tag = 'div';
			}
		?>

		<<?php echo $logo_tag; ?> class="l-header__logo">
			<a href="/" class="l-header__logo--anchor">
				<svg role="img" width="210" height="69" class="l-header__logo--img">
					<title itemprop="about">株式会社アーリークロス</title>
					<use xlink:href="/assets/img/svg.svg#logo">
				</svg>

				<svg role="img" width="149" height="49" class="l-header__logo--top">
					<title itemprop="about">株式会社アーリークロス</title>
					<use xlink:href="/assets/img/svg.svg#logo_w">
				</svg>
			</a>
		</<?php echo $logo_tag; ?>>
	</header>

	<button class="l-menuBtn u-hide__type--pc" data-selector="spMenuOpenBtn" data-href="container">
		<span class="l-menuBtn__in">
			<span class="l-menuBtn__bar is-top"></span>
			<span class="l-menuBtn__bar is-middle"></span>
			<span class="l-menuBtn__bar is-bottom"></span>
		</span>
	</button>

	<nav class="l-gNavi">
		<div class="l-gNavi__wrap">
			<ul class="l-gNavi__in">
				<li class="l-gNavi__list u-hide__type--pc">
					<a href="/" class="l-gNavi__anchor">
						<span class="l-gNavi__txt">
							<span class="l-gNavi__txt--en is-roboto">HOME</span>
						</span>
					</a>
				</li>
				<li class="l-gNavi__list">
					<a href="/business/" class="l-gNavi__anchor">
						<span class="l-gNavi__txt">
							<span class="l-gNavi__txt--en is-roboto">BUSINESS</span>
							<span class="l-gNavi__txt--jp u-hide__type--pc">事業内容</span>
						</span>
					</a>

					<div class="l-gNavi__level">
						<ul class="l-gNavi__level--in">
							<li class="l-gNavi__level--list">
								<a href="/business/ec.php" class="l-gNavi__level--anchor">EC事業</a>
							</li>
							<li class="l-gNavi__level--list">
								<a href="/business/sp.php" class="l-gNavi__level--anchor">SP事業</a>
							</li>
						</ul>
					</div>

				</li>
				<li class="l-gNavi__list">
					<a href="/company/" class="l-gNavi__anchor">
						<span class="l-gNavi__txt">
							<span class="l-gNavi__txt--en is-roboto">COMPANY</span>
							<span class="l-gNavi__txt--jp u-hide__type--pc">企業情報</span>
						</span>
					</a>

					<div class="l-gNavi__level">
						<ul class="l-gNavi__level--in">
							<li class="l-gNavi__level--list">
								<a href="/company/ceo.php" class="l-gNavi__level--anchor">代表挨拶</a>
							</li>
							<li class="l-gNavi__level--list">
								<a href="/company/profile.php" class="l-gNavi__level--anchor">会社概要</a>
							</li>
							<li class="l-gNavi__level--list">
								<a href="/company/access.php" class="l-gNavi__level--anchor">アクセス</a>
							</li>
							<li class="l-gNavi__level--list">
								<a href="/company/organization.php" class="l-gNavi__level--anchor">組織概要</a>
							</li>
							<li class="l-gNavi__level--list">
								<a href="/company/history.php" class="l-gNavi__level--anchor">沿革</a>
							</li>
							<li class="l-gNavi__level--list">
								<a href="/company/customer.php" class="l-gNavi__level--anchor">取引先実績</a>
							</li>
						</ul>
					</div>
				</li>
				<li class="l-gNavi__list">
					<a href="/recruit/" class="l-gNavi__anchor">
						<span class="l-gNavi__txt">
							<span class="l-gNavi__txt--en is-roboto">RECRUIT</span>
							<span class="l-gNavi__txt--jp u-hide__type--pc">採用情報</span>
						</span>
					</a>
				</li>
				<li class="l-gNavi__list">
					<a href="/contact/" class="l-gNavi__anchor">
						<span class="l-gNavi__txt">
							<span class="l-gNavi__txt--en is-roboto">CONTACT</span>
							<span class="l-gNavi__txt--jp u-hide__type--pc">お問い合わせ</span>
						</span>
					</a>
				</li>
				<li class="l-gNavi__list u-hide__type--pc">
					<a href="/news/" class="l-gNavi__anchor">
						<span class="l-gNavi__txt">
							<span class="l-gNavi__txt--en is-roboto">NEWS</span>
							<span class="l-gNavi__txt--jp u-hide__type--pc">ニュースリリース</span>
						</span>
					</a>
				</li>
				<li class="l-gNavi__list u-hide__type--pc">
					<a href="/privacy/" class="l-gNavi__anchor">
						<span class="l-gNavi__txt">
							<span class="l-gNavi__txt--en is-roboto">PRIVACY</span>
							<span class="l-gNavi__txt--jp u-hide__type--pc">個人情報保護方針</span>
						</span>
					</a>
				</li>
				<li class="l-gNavi__list u-hide__type--pc">
					<a href="/sitemap/" class="l-gNavi__anchor">
						<span class="l-gNavi__txt">
							<span class="l-gNavi__txt--en is-roboto">SITEMAP</span>
							<span class="l-gNavi__txt--jp u-hide__type--pc">サイトマップ</span>
						</span>
					</a>
				</li>
			</ul>

			<dl class="l-gNavi__contact u-hide__type--pc">
				<dt class="l-gNavi__contact--name">お電話でのお問い合わせ</dt>
				<dd class="l-gNavi__contact--txt">
					<a href="tel:0223499371" class="l-gNavi__contact--btn is-tel">
						0223499371

						<svg role="img" width="19" height="14" class="l-gNavi__contact--btn__icon">
							<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/assets/img/svg.svg#tel">
						</use></svg>
					</a>
					営業時間 平日 9:00～18:00
				</dd>

				<dt class="l-gNavi__contact--name">メールでのお問い合わせ</dt>
				<dd class="l-gNavi__contact--txt">
					<a href="/contact/" class="l-gNavi__contact--btn is-mail">
						お問い合わせ

						<svg role="img" width="19" height="14" class="l-gNavi__contact--btn__icon">
							<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/assets/img/svg.svg#mail">
						</use></svg>
					</a>
				</dd>
			</dl>

			<ul class="l-snsNavi u-hide__type--pc">
				<li class="l-snsNavi__list">
					<a href="https://www.instagram.com/early_cross/?hl=ja" target="_blank" class="l-snsNavi__anchor">
						<svg role="img" width="20" height="20" class="l-snsNavi__icon is-instagram">
							<title itemprop="about">Instagram</title>
							<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/assets/img/svg.svg#instagram">
						</use></svg>
					</a>
				</li>
				<li class="l-snsNavi__list">
					<a href="https://twitter.com/info_earlycross" target="_blank" class="l-snsNavi__anchor">
						<svg role="img" width="20" height="20" class="l-snsNavi__icon">
							<title itemprop="about">Twiiter</title>
							<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/assets/img/svg.svg#twitter">
						</use></svg>
					</a>
				</li>
				<li class="l-snsNavi__list">
					<a href="https://ameblo.jp/early-cross" target="_blank" class="l-snsNavi__anchor">
						<svg role="img" width="20" height="20" class="l-snsNavi__icon">
							<title itemprop="about">Blog</title>
							<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/assets/img/svg.svg#note">
						</use></svg>
					</a>
				</li>
			</ul>
			<!-- /.l-snsNavi -->
		</div>
		<!-- /.l-gNavi__wrap -->
	</nav>

	<div id="barba-wrapper">
	<div class="barba-container" data-namespace="<?php echo $sanitize->get_meta_body_id(); ?>">

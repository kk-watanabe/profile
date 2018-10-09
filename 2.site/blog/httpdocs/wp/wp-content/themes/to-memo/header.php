<!DOCTYPE html>
<html lang="ja">
<head>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PB5JZJJ');</script>
<!-- End Google Tag Manager -->

<?php get_head(); ?>

<?php wp_head(); ?>

<link rel="shortcut icon" href="/assets/img/favicon.ico">
<link href="https://fonts.googleapis.com/earlyaccess/notosansjapanese.css" rel="stylesheet">
<link href="/assets/css/style.css" rel="stylesheet">

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-104530762-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-104530762-1');
</script>

</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PB5JZJJ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<div id="container">
	<header id="header" class="l-header" itemscope itemtype="https://schema.org/WPHeader">
		<?php if (is_home()): ?>
		<h1 class="l-header__logo">
		<?php else: ?>
		<div class="l-header__logo">
		<?php endif ?>
			<a href="/" itemprop="url">
				<svg role="img" width="194" height="35" class="l-header__logo--img">
					<title itemprop="about">toMemo</title>
					<use xlink:href="/assets/img/sprite.min.svg#logo">
				</svg>
			</a>
		<?php if (is_home()): ?>
		</h1>
		<?php else: ?>
		</div>
		<?php endif ?>

		<nav id="navi" class="l-gnavi">
			<button type="button" id="js-menu__btn" class="l-gnavi__menu">
				<span class="l-gnavi__menu--in">
					<span class="l-gnavi__menu--bar is-top"></span>
					<span class="l-gnavi__menu--bar is-middle"></span>
					<span class="l-gnavi__menu--bar is-bottom"></span>
				</span>
			</button>

			<div class="l-gnavi__search">
				<form role="search" method="get" action="/" id="searchform" class="l-gnavi__search--in">
					<input type="text" name="s" value="<?php echo get_search_query(); ?>" placeholder="検索" class="l-gnavi__search--text">
					<button type="submit" class="l-gnavi__search--btn">
						<svg role="img" width="12" height="12" class="l-gnavi__search--btn_img">
							<title>検索する</title>
							<use xlink:href="/assets/img/sprite.min.svg#search">
						</svg>
					</button>
				</form>
			</div>

			<div id="js-menu_navi" class="l-gnavi__overlay" itemscope itemtype="https://schema.org/SiteNavigationElement">
				<div class="l-gnavi__overlay--scrl">
					<div class="l-gnavi__overlay--in">
						<?php
							$cates = get_terms('category');
							if ($cates):
						?>
						<section class="l-gnavi__overlay--box">
							<h2 class="l-gnavi__overlay--ttl">カテゴリ一覧</h2>
							<ul class="l-gnavi__cate">
								<?php
									foreach ($cates as $cate):
										$cate_id = $cate->term_id;
										$cate_name = $cate->name;
										$cate_url = get_category_link($cate_id);
								?>
								<li class="l-gnavi__cate--list">
									<a href="<?php echo $cate_url; ?>" class="l-gnavi__cate--anc" itemprop="url">
										<span itemprop="name"><?php echo $cate_name; ?></span>
									</a>
								</li>
								<?php endforeach ?>
							</ul>
						</section>
						<?php endif ?>

						<section class="l-gnavi__overlay--box">
							<h2 class="l-gnavi__overlay--ttl">きのまま</h2>
							<ul class="l-gnavi__cate">
								<li class="l-gnavi__cate--list">
									<a href="/kinomama/" class="l-gnavi__cate--anc" itemprop="url">
										<span itemprop="name">きのまま - HOME</span>
									</a>
								</li>
								<?php
									$kinomama_cates = get_terms('cate');

									if ($kinomama_cates):
									foreach ($kinomama_cates as $kinomama_cate):
										$kinomama_cate_id = $kinomama_cate->term_id;
										$kinomama_cate_name = $kinomama_cate->name;
										$kinomama_cate_url = get_category_link($kinomama_cate_id);
								?>
								<li class="l-gnavi__cate--list">
									<a href="<?php echo $kinomama_cate_url; ?>" class="l-gnavi__cate--anc" itemprop="url">
										<span itemprop="name"><?php echo $kinomama_cate_name; ?></span>
									</a>
								</li>
								<?php endforeach; endif; ?>
							</ul>
						</section>
					</div>
				</div>
			</div>
		</nav>
	</header>

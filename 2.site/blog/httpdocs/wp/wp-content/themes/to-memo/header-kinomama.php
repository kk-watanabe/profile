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

<!-- Google Web Font -->
<link rel="shortcut icon" href="/assets/img/kinomama/favicon.ico">
<link href="https://fonts.googleapis.com/earlyaccess/notosansjapanese.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=M+PLUS+1p:300,400,500,700,800,900&amp;subset=japanese" rel="stylesheet">

<link href="/assets/css/kinomama/style.css" rel="stylesheet">

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
			<a href="/kinomama/" itemprop="url" class="l-header__logo--anc">
				きのまま
			</a>
		<?php if (is_home()): ?>
		</h1>
		<?php else: ?>
		</div>
		<?php endif ?>

		<nav id="navi" class="l-gnavi">
			<button type="button" id="js-menu__btn" class="l-gnavi__menu">
				<div class="l-gnavi__menu--in">
					<div class="l-gnavi__menu--bar is-top"></div>
					<div class="l-gnavi__menu--bar is-middle"></div>
					<div class="l-gnavi__menu--bar is-bottom"></div>
				</div>
			</button>

			<?php create_header_navi(); ?>
			<!-- /.l-gnavi__in -->
		</nav>
	</header>

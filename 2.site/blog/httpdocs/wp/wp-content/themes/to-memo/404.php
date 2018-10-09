<?php get_header(); ?>

<div id="pagepath" class="l-pagepath">
	<div class="l-pagepath__in" itemscope itemtype="http://schema.org/BreadcrumbList">
		<div class="l-pagepath__list" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
			<a href="/" itemprop="item" class="l-pagepath__anc">
				<span itemprop="name" class="l-pagepath__txt">HOME</span>
			</a>
			<meta itemprop="position" content="2">
		</div>
		<div class="l-pagepath__list" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
			<a href="" itemprop="item" class="l-pagepath__anc is-not_anc">
				<span itemprop="name" class="l-pagepath__txt">404ページ</span>
			</a>
			<meta itemprop="position" content="1">
		</div>
	</div>
</div>

<main id="main" class="l-main">
	<article itemscope itemtype="http://schema.org/BlogPosting">
		<div class="c-box01">
			<header class="p-detail__head">
				<h1 itemprop="headline" class="p-detail__ttl">NOT FOUND</h1>
			</header>

			<div class="p-detail__body" itemprop="mainEntityOfPage">
				<div class="p-detail__box">
					<p>
						申し訳ありませんが、お探しのページを見つけることができませんでした。<br>
						すでに削除されたか、アドレスが間違っている可能性がございます。入力されたURLが正しいかご確認ください。
					</p>
				</div>
			</div>

			<footer class="p-detail__foot">
				<a href="/" class="c-btn01 is-prev"><span class="c-btn01__txt">TOPページへ</span></a>
			</footer>
		</div>
	</article>
</main><!-- /#main -->

<?php get_footer(); ?>

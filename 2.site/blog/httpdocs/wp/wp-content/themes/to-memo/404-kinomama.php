<?php
//きのまま - 404

get_header('kinomama'); ?>

<div id="main" class="l-main p-listConts">
	<main id="conts" class="l-conts">
		<div id="pagepath" class="l-pagepath" itemscope itemtype="http://schema.org/BreadcrumbList">
			<div class="l-pagepath__list" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
				<a href="/kinomama/" itemprop="item" class="l-pagepath__anc">
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

		<h1 class="c-headline01">NOT FOUND</h1>

		<p>
			申し訳ありませんが、お探しのページを見つけることができませんでした。<br>
			すでに削除されたか、アドレスが間違っている可能性がございます。入力されたURLが正しいかご確認ください。
		</p>

		<div class="c-box02"><?php echo get_search_content(); ?></div>

		<a href="/" class="c-btn01 is-prev"><span class="c-btn01__txt">TOPページへ</span></a>
	</main><!-- /#main -->

	<?php get_sidebar('kinomama'); ?>
</div><!-- /#main -->

<?php get_footer('kinomama'); ?>

<?php
// 検索結果
$search_val = get_search_query();

get_header(); ?>

<div id="pagepath" class="l-pagepath">
	<div class="l-pagepath__in" itemscope itemtype="http://schema.org/BreadcrumbList">
		<div class="l-pagepath__list" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
			<a href="/" itemprop="item" class="l-pagepath__anc">
				<span itemprop="name" class="l-pagepath__txt">HOME</span>
			</a>
			<meta itemprop="position" content="3">
		</div>
		<div class="l-pagepath__list" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
			<a href="<?php the_permalink(); ?>" itemprop="item" class="l-pagepath__anc is-not_anc">
				<span itemprop="name" class="l-pagepath__txt">「<?php echo $search_val; ?>」の検索結果</span>
			</a>
			<meta itemprop="position" content="1">
		</div>
	</div>
</div>

<main id="main" class="l-main p-index_main">
	<h1 class="c-headline01">「<?php echo $search_val; ?>」の検索結果</h1>

	<div class="p-layout">
		<div class="js-layout_btn p-layout__btn is-card">
			<div class="p-layout__in">
				<div class="p-layout__bar"></div>
				<div class="p-layout__bar"></div>
				<div class="p-layout__bar"></div>
				<div class="p-layout__bar"></div>
			</div>
		</div>

		<div class="js-layout_btn p-layout__btn is-list is-active">
			<div class="p-layout__in">
				<div class="p-layout__bar is-s"></div>
				<div class="p-layout__bar is-l"></div>
				<div class="p-layout__bar is-s"></div>
				<div class="p-layout__bar is-l"></div>
				<div class="p-layout__bar is-s"></div>
				<div class="p-layout__bar is-l"></div>
			</div>
		</div>
	</div>

	<div id="conts" class="l-main__in is-layout_list">
		<div id="js-articleList" data-start-num="1" data-stop-num="12" data-show-num="1" data-load-end="false" data-cate-id="" data-max-post="<?php echo max_posts_num(); ?>"></div>
	</div>
</main><!-- /#main -->

<?php get_footer(); ?>

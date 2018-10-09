<?php
// カテゴリー
$second_navi;
$second_navi_ttl;
$second_navi_url;

$term     = get_current_term();
$term_id  = $term->term_id;
$term_url = get_category_link($term_id);
$page_ttl = $term->name;

get_header(); ?>

<div id="pagepath" class="l-pagepath">
	<div class="l-pagepath__in" itemscope itemtype="http://schema.org/BreadcrumbList">
		<div class="l-pagepath__list" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
			<a href="/" itemprop="item" class="l-pagepath__anc">
				<span itemprop="name" class="l-pagepath__txt">HOME</span>
			</a>
			<meta itemprop="position" content="2">
		</div>
		<div class="l-pagepath__list" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
			<a href="<?php echo $term_url; ?>" itemprop="item" class="l-pagepath__anc is-not_anc">
				<span itemprop="name" class="l-pagepath__txt"><?php single_cat_title( '', true ); ?></span>
			</a>
			<meta itemprop="position" content="1">
		</div>
	</div>
</div>

<main id="main" class="l-main p-index_main">
	<h1 class="c-headline01"><?php echo $page_ttl; ?></h1>

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
		<div id="js-articleList" data-start-num="1" data-stop-num="12" data-show-num="1" data-load-end="false" data-cate-id="<?php echo $term_id; ?>" data-max-post="<?php echo max_posts_num(); ?>"></div>
	</div>
</main><!-- /#main -->

<?php get_footer(); ?>

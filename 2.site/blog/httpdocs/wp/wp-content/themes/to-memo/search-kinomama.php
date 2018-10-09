<?php
// きのまま - 検索結果
$search_val = get_search_query();

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
				<a href="<?php the_permalink(); ?>" itemprop="item" class="l-pagepath__anc is-not_anc">
					<span itemprop="name" class="l-pagepath__txt"><?php echo $search_val; ?></span>
				</a>
				<meta itemprop="position" content="1">
			</div>
		</div>

		<h1 class="c-headline01">「<?php echo $search_val; ?>」の検索結果</h1>

		<?php create_list_news(); ?>
	</main><!-- /#main -->

	<?php get_sidebar('kinomama'); ?>
</div><!-- /#main -->

<?php get_footer('kinomama'); ?>

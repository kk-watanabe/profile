<?php
//きのまま - カテゴリ

$term     = get_current_term();
$term_url = get_category_link($term->term_id);
$page_ttl = $term->name;

get_header('kinomama'); ?>

<div id="main" class="l-main p-listConts">
	<main id="conts" class="l-conts" data-aos="fade-right">
		<div id="pagepath" class="l-pagepath" itemscope itemtype="http://schema.org/BreadcrumbList">
			<div class="l-pagepath__list" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
				<a href="/kinomama/" itemprop="item" class="l-pagepath__anc">
					<span itemprop="name" class="l-pagepath__txt">HOME</span>
				</a>
				<meta itemprop="position" content="2">
			</div>
			<div class="l-pagepath__list" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
				<a href="<?php echo $term_url; ?>" itemprop="item" class="l-pagepath__anc is-not_anc">
					<span itemprop="name" class="l-pagepath__txt"><?php echo $page_ttl; ?></span>
				</a>
				<meta itemprop="position" content="1">
			</div>
		</div>

		<h1 class="c-headline01"><?php echo $page_ttl; ?></h1>

		<?php create_list_news(); ?>
	</main><!-- /#main -->

	<?php get_sidebar('kinomama'); ?>
</div><!-- /#main -->

<?php get_footer('kinomama'); ?>

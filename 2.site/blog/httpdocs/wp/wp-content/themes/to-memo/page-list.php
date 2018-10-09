<?php

/*
Template Name: リストナビ
*/

$page = get_post();
$page_ttl = $page->post_title;
$page_slug = $page->post_name;

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
			<a href="/<?php echo $page_slug; ?>" itemprop="item" class="l-pagepath__anc is-not_anc">
				<span itemprop="name" class="l-pagepath__txt"><?php echo $page_ttl; ?></span>
			</a>
			<meta itemprop="position" content="1">
		</div>
	</div>
</div>

<main id="main" class="l-main c-list_box01">
	<h1 class="c-headline01"><?php echo $page_ttl; ?></h1>

	<?php
		if ($page_slug === 'category_list') {
			$cates = get_terms('category');
		} elseif ($page_slug === 'tag_list') {
			$cates = get_tags();
		}

	?>
	<?php if ($cates): ?>
	<ul class="c-group_navi01">
		<?php
			foreach ($cates as $cate):
				$cate_id = $cate->term_id;
				$cate_name = $cate->name;
				$cate_url = get_category_link($cate_id);
		?>
		<li class="c-group_navi01--list">
			<a href="<?php echo $cate_url; ?>" class="c-group_navi01--anc" itemprop="url">
				<span itemprop="name"><?php echo $cate_name; ?></span>
			</a>
		</li>
		<?php endforeach ?>
	</ul>
	<?php endif ?>
</main><!-- /#main -->

<?php get_footer(); ?>

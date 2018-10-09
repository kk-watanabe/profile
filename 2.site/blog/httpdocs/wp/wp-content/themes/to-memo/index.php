<?php
// TOP???
get_header(); ?>

<main id="main" class="l-main p-index_main">
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

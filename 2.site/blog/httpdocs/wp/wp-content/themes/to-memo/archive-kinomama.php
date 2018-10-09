<?php
//きのまま - 一覧

get_header('kinomama'); ?>

<div id="main" class="l-main p-listConts">
	<main id="conts" class="l-conts" data-aos="fade-right">
		<?php create_list_news(); ?>
	</main><!-- /#main -->

	<?php get_sidebar('kinomama'); ?>
</div><!-- /#main -->

<?php get_footer('kinomama'); ?>

<?php if($the_query->max_num_pages > 1): ?>
<div class="pageNavi">
<?php
	echo paginate_links(array(
		'base' => get_pagenum_link(1) . '%_%',
		'format' => 'page/%#%/',
		'total' => $the_query->max_num_pages,
		'current' => max(1, $paged),
		'mid_size' => 2,
		'prev_text' => '&lt;&lt; 前へ',
		'next_text' => '次へ &gt;&gt;',
		'type' => 'list'
	));
?>
</div>
<?php endif; ?>

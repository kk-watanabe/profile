<?php
if (post_password_required()) {
	return;
}
?>
<section class="p-comment c-box01">

<?php if (have_comments()) :?>
	<h2 class="c-ttl01">コメント一覧</h2>
	<ul id="comments-list">
	<?php wp_list_comments(array(
			'avatar_size'=>48,
			'style'=>'ul',
			'type'=>'comment',
			//'callback'=>'mytheme_comments'
		)); ?>
	</ul>
<?php if (get_comment_pages_count() > 1) : ?>
	<ul id="comments-pagination">
		<li id="prev-comments"><?php previous_comments_link('&lt;&lt; 前のコメント'); ?></li>
		<li id="next-comments"><?php next_comments_link('次のコメント &gt;&gt;'); ?></li>
	</ul>
<?php endif; endif; ?>
<?php comment_form(get_the_ID()); ?>

</section><!-- #comments -->

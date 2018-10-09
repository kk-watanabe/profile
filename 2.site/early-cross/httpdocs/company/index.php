<?php require_once($_SERVER['DOCUMENT_ROOT'].'/assets/inc/meta.php');?>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/assets/inc/header.php');?>

	<main class="l-main">
		<?php $sanitize->get_headline(); ?>

		<div class="l-body">
			<?php $sanitize->get_page_path(); ?>
			<!-- パンくず -->

			<div class="c-sentence01" data-aos="fade-up">
				<p class="c-sentence01__txt">
					アーリークロスは、EC事業・SP事業を通して、あらゆる要望に応え、<br>
					「アイデアをカタチに」をモットーに、お客様の販促宣伝を支援する価値創造企業です。
				</p>
			</div>

			<?php require_once($_SERVER['DOCUMENT_ROOT'].'/assets/inc/parts/company_navi.php');?>
		</div>
	</main><!-- /#main -->

	<?php require($_SERVER['DOCUMENT_ROOT'].'/assets/inc/parts/contact.php');?>

	</div><!-- /.barba-container -->
	</div><!-- /#barba-wrapper -->

<?php require_once($_SERVER['DOCUMENT_ROOT'].'/assets/inc/footer.php');?>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/assets/inc/end.php');?>

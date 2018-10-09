<?php require_once($_SERVER['DOCUMENT_ROOT'].'/assets/inc/meta.php');?>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/assets/inc/header.php');?>

	<main class="l-main">
		<?php $sanitize->get_headline(); ?>
		<!-- headline -->

		<div class="l-body">
			<?php $sanitize->get_page_path(); ?>
			<!-- パンくず -->

			<h1 class="c-ttl01" data-aos="fade-up">
				<span class="c-ttl01__main">アクセス</span>
			</h1>

			<div class="p-access">
				<section class="p-access__location" data-aos="fade-up">
					<h2 class="p-access__ttl is-headOffice">本社</h2>
					<p class="p-access__transportation"><span class="p-access__transportation--ttl">交通手段</span>東北本線「東仙台」駅から徒歩10分</p>
					<div class="p-access__map is-main" data-selector="headOfficeMap"></div>
				</section>
			</div>
			<!-- /.p-access -->
		</div>
	</main><!-- /#main -->

	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/assets/inc/parts/company_navi.php');?>
	<?php require($_SERVER['DOCUMENT_ROOT'].'/assets/inc/parts/contact.php');?>

	</div><!-- /.barba-container -->
	</div><!-- /#barba-wrapper -->

<?php require_once($_SERVER['DOCUMENT_ROOT'].'/assets/inc/footer.php');?>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/assets/inc/end.php');?>

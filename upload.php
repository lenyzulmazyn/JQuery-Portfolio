<?php
	set_include_path ('inc');
	include "header.php";
	include "nav.php";
?>

		<!--MAIN WRAPPER SECTION-->
		<div id="mainContainer" class="main-wrapper cfix">
			<div class="container">
				<section class="page-upload">
					<h1>UPLOAD IMAGE</h1>
					<div class="upload-btn">
						<img src="images/icon_upload.png" />
						<span>CHOOSE FILE TO POST/UPLOAD</span>
					</div>
				</section>
			</div>
		</div>
		<!--END OF MAIN WRAPPER SECTION-->

		<?php include "overlay-popups.php"; ?>

<?php include "footer.php"; ?>

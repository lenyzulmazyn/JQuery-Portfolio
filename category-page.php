<?php
	set_include_path ('inc');
	include "header2.php";
	$cat = "current";
	include "nav.php";
?>

		<!--MAIN WRAPPER SECTION-->
		<div id="mainContainer" class="main-wrapper cfix">
			<div class="container">

				<?php include "posts.php"; ?>

			</div>
		</div>
		<!--END OF MAIN WRAPPER SECTION-->

<?php include "footer.php"; ?>

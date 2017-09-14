<?php
	set_include_path ('inc');
	include "header3.php";
?>

		<!--MAIN WRAPPER SECTION-->
		<div id="mainContainer" class="main-wrapper layout2 cfix">
			<div class="container cfix">

				<div class="deactive-page">
					<h2>Now just a minute.</h2>

					<p>Are you sure you want to delete your whole account? You’ll lose everything. Usernames, the love we shared, likes, and everything you’ve ever posted will be gone forever.</p>
					<p>If you’re sure, confirm by logging in below.</p>

					<form class="deactive-access-login" action="deactive-access-page2.php" method="post">
						<input type="text" name="email" placeholder="Email" />
						<input type="password" name="password" placeholder="Password" />
						<input type="submit" name="submit" value="Delete Everything" />
						<p><a href="edit-profile.php">I change my mind</a></p>
					</form>

				</div>

			</div>
		</div>
		<!--END OF MAIN WRAPPER SECTION-->

<?php include "footer.php"; ?>

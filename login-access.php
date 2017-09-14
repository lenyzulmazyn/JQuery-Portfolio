<?php
	set_include_path ('inc');
	include "header3.php";
?>

		<!--MAIN WRAPPER SECTION-->
		<div id="mainContainer" class="main-wrapper cfix">
			<div class="container cfix">

				<div class="login-page cfix">

					<form class="access-login" action="upload-profile-photo-2.php" method="post">
						<input type="text" name="user" placeholder="Username" />
						<input type="password" name="password" placeholder="Password" /><div class="forgot-link">Forgot?</div>
						<input type="submit" name="login" value="Log in" />
						<div class="sign-up-link">Don't have an account? <a href="login-register.php">Sign up</a></p>
					</form>

				</div>

			</div>
		</div>
		<!--END OF MAIN WRAPPER SECTION-->

<?php include "footer.php"; ?>

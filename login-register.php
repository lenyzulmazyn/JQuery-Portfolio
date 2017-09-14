<?php
	set_include_path ('inc');
	include "header3.php";
?>

		<!--MAIN WRAPPER SECTION-->
		<div id="mainContainer" class="main-wrapper cfix">
			<div class="container cfix">

				<div class="login-page">
					<div class="fb-login-btn"><span><img src="images/icon_fb.png" alt="" /> Log in with Facebook</span></div>

					<div class="border-access"><span>OR</span></div>

					<form class="access-login" action="login-access.php" method="post">
						<input type="text" name="email" placeholder="Email" />
						<input type="text" name="mnumber" placeholder="Mobile Number" />
						<input type="text" name="birthdate" placeholder="Name" />
						<input type="text" name="user" placeholder="Username" />
						<input type="password" name="pass" placeholder="Password" />
						<input type="password" name="cpass" placeholder="Confirm Password" />
						<input type="submit" name="signup" value="Sign up" />
						<div class="login-link">Have an account? <a href="login-access.php">Log in</a></div>
					</form>

				</div>

			</div>
		</div>
		<!--END OF MAIN WRAPPER SECTION-->

<?php include "footer.php"; ?>

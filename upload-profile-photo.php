<?php
	set_include_path ('inc');
	include "header.php";
	include "nav.php";
?>

		<!--MAIN WRAPPER SECTION-->
		<div id="mainContainer" class="main-wrapper profile-page cfix">
			<div class="container">

				<section class="share-photos-section">
					<a href="new-profile.php"><img class="cancel-btn" src="images/icon_cancel.png" alt="" /></a>
					<div class="upload-btn"><img src="images/icon_upload.png" alt="" /></div>
					Upload a profile photo
				</section>

				<section class="header-banner">
					<img src="images/icon_logo.png" alt="" />
					Welcome to JokerON!
					<span>Users you follow will appear in your feeds</span>
				</section>

				<div class="follow-page followers-tab cfix">
					<h3>USERS YOU MIGHT LIKE</h3>
					<ul class="follow-lists">
						<li>
							<a href="other-profile.php"><img class="profile-img" src="images/profile.jpg" alt="" /></a>
							<span>thememelord</span>
						</li>
						<li>
							<a href="other-profile.php"><img class="profile-img" src="images/profile.jpg" alt="" /></a>
							<span>thememelord</span>
						</li>
						<li>
							<a href="other-profile.php"><img class="profile-img" src="images/profile.jpg" alt="" /></a>
							<span>thememelord</span>
						</li>
						<li>
							<a href="other-profile.php"><img class="profile-img" src="images/profile.jpg" alt="" /></a>
							<span>thememelord</span>
						</li>
						<li>
							<a href="other-profile.php"><img class="profile-img" src="images/profile.jpg" alt="" /></a>
							<span>thememelord</span>
						</li>
						<li>
							<a href="other-profile.php"><img class="profile-img" src="images/profile.jpg" alt="" /></a>
							<span>thememelord</span>
						</li>
						<li>
							<a href="other-profile.php"><img class="profile-img" src="images/profile.jpg" alt="" /></a>
							<span>thememelord</span>
						</li>
						<li>
							<a href="other-profile.php"><img class="profile-img" src="images/profile.jpg" alt="" /></a>
							<span>thememelord</span>
						</li>
						<li>
							<a href="other-profile.php"><img class="profile-img" src="images/profile.jpg" alt="" /></a>
							<span>thememelord</span>
						</li>
					</ul>
				</div>

			</div>
		</div>
		<!--END OF MAIN WRAPPER SECTION-->

		<?php include "overlay-popups.php"; ?>

<?php include "footer.php"; ?>

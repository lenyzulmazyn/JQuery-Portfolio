<?php
	set_include_path ('inc');
	include "header.php";
	include "nav.php";
?>

		<!--MAIN WRAPPER SECTION-->
		<div id="mainContainer" class="main-wrapper profile-page cfix">
			<div class="container">

				<section class="profile-header cfix">
					<div class="profile-wrap">
						<div class="dummy-featured"><img src="images/dummy-img.png" alt="" /></div>
						<h2>THEMEMELORD</h2>
						<ul class="profile-follow cfix">
							<li>0<span>POINTS</span></li>
							<li>0<span>FOLLOWERS</span></li>
							<li>0<span>FOLLOWING</span></li>
						</ul>
						<div class="edit-profile-btn"><a href="edit-profile.php">EDIT PROFILE</a></div>
					</div>
				</section>

				<section class="share-photos-section">
					<div class="upload-btn"><img src="images/icon_camera.png" alt="" /></div>
					Share photos
					<span>Photos will appear here in your profile.</span>
				</section>

			</div>
		</div>
		<!--END OF MAIN WRAPPER SECTION-->

<?php include "footer.php"; ?>

<?php
	set_include_path ('inc');
	include "header.php";
	include "nav.php";
?>

		<!--MAIN WRAPPER SECTION-->
		<div id="mainContainer" class="main-wrapper cfix">
			<div class="container cfix">

				<section class="profile-header cfix">
					<div class="profile-wrap">
						<img class="profile-featured" src="images/users/8.jpg" alt="" />
						<h2>kittymeow <img class="user-settings" src="images/icon_dots.png" alt="" /></h2>
						<ul class="profile-follow cfix">
							<li>498<span>POINTS</span></li>
							<li><a href="other-profile-followers.php">200<span>FOLLOWERS</span></a></li>
							<li><a href="other-profile-following.php">154<span>FOLLOWING</span></a></li>
						</ul>
						<div class="edit-profile-btn other-profile follow-btn1"><img src="images/icon_plus2.png" /> FOLLOW</div>
						<div class="edit-profile-btn other-profile follow-btn2"><img src="images/icon_check2.png" /> FOLLOWING</div>
					</div>
				</section>

				<div class="follow-page followers-tab cfix">
					<h3>Followers</h3>
					<ul class="follow-lists">
						<li>
							<a href="other-profile.php"><img class="profile-img" src="images/users/5.jpg" alt="" /></a>
							<span class="clicked">thememelord</span>
						</li>
						<li>
							<a href="other-profile.php"><img class="profile-img" src="images/users/4.jpg" alt="" /></a>
							<span>thememelord</span>
						</li>
						<li>
							<a href="other-profile.php"><img class="profile-img" src="images/users/1.jpg" alt="" /></a>
							<span>thememelord</span>
						</li>
						<li>
							<a href="other-profile.php"><img class="profile-img" src="images/users/2.jpg" alt="" /></a>
							<span>thememelord</span>
						</li>
						<li>
							<a href="other-profile.php"><img class="profile-img" src="images/users/3.jpg" alt="" /></a>
							<span class="clicked">thememelord</span>
						</li>
						<li>
							<a href="other-profile.php"><img class="profile-img" src="images/users/7.jpg" alt="" /></a>
							<span>thememelord</span>
						</li>
						<li>
							<a href="other-profile.php"><img class="profile-img" src="images/users/9.jpg" alt="" /></a>
							<span>thememelord</span>
						</li>
						<li>
							<a href="other-profile.php"><img class="profile-img" src="images/users/8.jpg" alt="" /></a>
							<span>thememelord</span>
						</li>
						<li>
							<a href="other-profile.php"><img class="profile-img" src="images/users/6.jpg" alt="" /></a>
							<span>thememelord</span>
						</li>
					</ul>
				</div>

			</div>
		</div>
		<!--END OF MAIN WRAPPER SECTION-->

		<?php include "overlay-popups.php"; ?>

<?php include "footer.php"; ?>

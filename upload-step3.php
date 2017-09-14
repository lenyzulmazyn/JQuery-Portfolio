<?php
	set_include_path ('inc');
	include "header.php";
	$prof = "current";
	include "nav.php";
?>

		<!--MAIN WRAPPER SECTION-->
		<div id="mainContainer" class="main-wrapper profile-page cfix">
			<div class="container">

				<div class="uploaded-post cfix">
					<img src="images/icon_cancel.png" alt="" />
					Uploaded. Your submission is in moderation. Wait for you image to load in the feed.
				</div>

				<section class="profile-header cfix">
					<div class="profile-wrap">
						<img class="profile-featured" src="images/users/4.jpg" alt="" />
						<h2>THEMEMELORD</h2>
						<ul class="profile-follow cfix">
							<li>498<span>POINTS</span></li>
							<li><a href="profile-followers.php">200<span>FOLLOWERS</span></a></li>
							<li><a href="profile-following.php">154<span>FOLLOWING</span></a></li>
						</ul>
						<div class="edit-profile-btn"><a href="edit-profile.php">EDIT PROFILE</a></div>
					</div>
				</section>

				<!--SAMPLE POST 1-->
				<section class="post-item">
					<div class="post-header">
						<h3>FUNNY LONG CAPTION HERE LONG CAPTIONS</h3>
						<div class="post-item-setting"><img src="images/icon_dots.png" alt="" /></div>
					</div>
					<div class="post-img">
						<a href="single.php"><img src="images/posts/3.jpg" alt="" /></a>
						<ul class="post-tags cfix">
							<li><a href="">#memeoftheday</a></li>
							<li><a href="">#dailymeme</a></li>
							<li><a href="">#memefied</a></li>
							<li><a href="">#hillarytrump</a></li>
							<li><a href="">#memeubec</a></li>
						</ul>
						<?php include "share.php"; ?>
					</div>
					<?php include "post-buttons.php"; ?>
				</section>

				<!--SAMPLE POST 2-->
				<section class="post-item">
					<div class="post-header">
						<h3>THE QUICK BROWN FOX JUMP OVER THE LAZY DOG.</h3>
						<div class="post-item-setting"><img src="images/icon_dots.png" alt="" /></div>
					</div>
					<div class="post-img">
						<a href="single.php"><img src="images/posts/2.jpg" alt="" /></a>
						<ul class="post-tags cfix">
							<li><a href="">#memeoftheday</a></li>
							<li><a href="">#dailymeme</a></li>
							<li><a href="">#memefied</a></li>
						</ul>
						<?php include "share.php"; ?>
					</div>
					<?php include "post-buttons.php"; ?>
				</section>

				<!--SAMPLE POST 3-->
				<section class="post-item">
					<div class="post-header">
						<h3>LOREM IPSUM DOLOR SET AMIT CON TODO.</h3>
						<div class="post-item-setting"><img src="images/icon_dots.png" alt="" /></div>
					</div>
					<div class="post-img">
							<a href="single.php"><img src="images/posts/6.jpg" alt="" /></a>
							<ul class="post-tags cfix">
								<li><a href="">#dailymeme</a></li>
								<li><a href="">#hillarytrump</a></li>
								<li><a href="">#memeubec</a></li>
							</ul>
							<?php include "share.php"; ?>
					</div>
					<?php include "post-buttons.php"; ?>
				</section>

			</div>
		</div>
		<!--END OF MAIN WRAPPER SECTION-->

		<?php include "overlay-popups.php"; ?>

	<?php include "footer.php"; ?>

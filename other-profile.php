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

				<!--SAMPLE POST 1-->
				<section class="post-item">
					<div class="post-header">
						<h3>FUNNY LONG CAPTION HERE LONG CAPTIONS</h3>
						<div class="post-item-setting"><img src="images/icon_dots.png" alt="" /></div>
					</div>
					<div class="post-img">
						<a href="single.php"><img src="images/posts/5.jpg" alt="" /></a>
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
						<a href="single.php"><img src="images/posts/3.jpg" alt="" /></a>
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
						<a href="single.php"><img src="images/posts/7.jpg" alt="" /></a>
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

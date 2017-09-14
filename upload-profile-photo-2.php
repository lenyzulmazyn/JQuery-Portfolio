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
					<div class="upload-btn upbtn2"><img src="images/icon_upload.png" alt="" /></div>
					Upload a profile photo
				</section>

				<section class="header-banner">
					<img src="images/icon_logo.png" alt="" />
					Welcome to JokerON!
					<span>Users you follow will appear in your feeds</span>
				</section>

				<!--SAMPLE POST 1-->
				<section class="post-item">
					<div class="post-header">
						<h3>FUNNY LONG CAPTION HERE LONG CAPTIONS</h3>
						<div class="post-item-setting"><img src="images/icon_dots.png" alt="" /></div>
					</div>
					<div class="post-img">
						<a href="single.php"><img src="images/posts/1.jpg" alt="" /></a>
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
							<a href="single.php"><img src="images/posts/3.jpg" alt="" /></a>
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

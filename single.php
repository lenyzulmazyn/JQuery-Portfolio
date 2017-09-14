<?php
	set_include_path ('inc');
	include "header.php";
	include "nav.php";
?>

		<!--MAIN WRAPPER SECTION-->
		<div id="mainContainer" class="main-wrapper cfix">
			<div class="container">

				<!--SAMPLE POST 1-->
				<section class="post-item">
					<div class="post-header">
						<div class="follow-btn">&nbsp;</div>
						<a href="other-profile.php"><img class="profile-img" src="images/users/5.jpg" alt="" /></a>
						<h3>FUNNY LONG CAPTION HERE LONG CAPTIONS</h3>
					</div>
					<div class="post-img">
						<div class="postbtn post-prev"><i class="left"></i></div>
						<div class="postbtn post-next"><i class="right"></i></div>
						<img src="images/posts/5.jpg" alt="" />
						<?php include "share.php"; ?>
					</div>
					<div class="post-setting cfix">
						<ul class="cfix">
							<li class="laugh"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 15.56"><path class="happy" d="M38.56 417.92a1.11 1.11 0 0 1-1.11-1.11 1.11 1.11 0 1 0-2.22 0 1.11 1.11 0 0 1-2.22 0 3.33 3.33 0 1 1 6.67 0 1.11 1.11 0 0 1-1.12 1.11zM36.33 414.58a3.34 3.34 0 0 1 3.25 2.62 1.1 1.1 0 0 0 .08-.4 3.33 3.33 0 1 0-6.67 0 1.11 1.11 0 0 0 .08.4 3.34 3.34 0 0 1 3.26-2.62zM51.89 417.92a1.11 1.11 0 0 1-1.11-1.11 1.11 1.11 0 1 0-2.22 0 1.11 1.11 0 0 1-2.22 0 3.33 3.33 0 1 1 6.67 0 1.11 1.11 0 0 1-1.12 1.11zM49.67 414.58a3.34 3.34 0 0 1 3.25 2.62 1.1 1.1 0 0 0 .08-.4 3.33 3.33 0 1 0-6.67 0 1.11 1.11 0 0 0 .08.4 3.34 3.34 0 0 1 3.26-2.62zM49.06 422.36h-12.12a.58.58 0 0 0-.61.56 6.41 6.41 0 0 0 6.67 6.08 6.41 6.41 0 0 0 6.67-6.11.58.58 0 0 0-.61-.53zM49.62 423.47a5.08 5.08 0 0 0 0-.56.58.58 0 0 0-.61-.56h-12.07a.58.58 0 0 0-.61.56 5.08 5.08 0 0 0 0 .56h13.29z" transform="translate(-33 -413.47)"/></svg> 300</li>
							<li class="smirk"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 16"><circle class="sad" cx="2.5" cy="2.5" r="2.5"/><circle class="sad" cx="17.5" cy="2.5" r="2.5"/><path class="sad" d="M160.45 429a2.17 2.17 0 0 1-1.05-.27 10.43 10.43 0 0 0-8.79 0 2.15 2.15 0 0 1-2.81-.64 1.79 1.79 0 0 1 .69-2.58 14.74 14.74 0 0 1 13 0 1.79 1.79 0 0 1 .69 2.58 2.09 2.09 0 0 1-1.73.91z" transform="translate(-145 -413.03)"/></svg> 500</li>
							<li class="active"><img src="images/icon_comment.png" alt="" /></li>
							<li class="rofl"><img src="images/icon_set.png" alt="" /></li>
						</ul>
						<div class="comment-box comment-single-post">
							<div class="arrow"></div>
							<div class="comment-wrap">
								<form id="comment-post-item" class="cfix">
						      <textarea name="textarea-box" placeholder="Add a comment..."></textarea>
						      <div class="comment-info">
						        <span>0/140</span>
						        Don't forget our <a href="">community rules</a>
						      </div>
						      <input type="submit" value="POST" name="submit" />
						    </form>
								<ul class="comment-lists cfix">
									<li>
										<div class="follow-btn" href="">&nbsp;</div>
										<div class="comment-header">
											<a href="other-profile.php"><img class="profile-img" src="images/users/8.jpg" alt="" /></a> <strong>thememelord1</strong> <span>7 hours ago</span>
										</div>
										so funny!!
										<ul class="comment-item">
											<li class="reply">
												REPLY
											</li>
											<li class="laugh"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 15.56"><path class="happy" d="M38.56 417.92a1.11 1.11 0 0 1-1.11-1.11 1.11 1.11 0 1 0-2.22 0 1.11 1.11 0 0 1-2.22 0 3.33 3.33 0 1 1 6.67 0 1.11 1.11 0 0 1-1.12 1.11zM36.33 414.58a3.34 3.34 0 0 1 3.25 2.62 1.1 1.1 0 0 0 .08-.4 3.33 3.33 0 1 0-6.67 0 1.11 1.11 0 0 0 .08.4 3.34 3.34 0 0 1 3.26-2.62zM51.89 417.92a1.11 1.11 0 0 1-1.11-1.11 1.11 1.11 0 1 0-2.22 0 1.11 1.11 0 0 1-2.22 0 3.33 3.33 0 1 1 6.67 0 1.11 1.11 0 0 1-1.12 1.11zM49.67 414.58a3.34 3.34 0 0 1 3.25 2.62 1.1 1.1 0 0 0 .08-.4 3.33 3.33 0 1 0-6.67 0 1.11 1.11 0 0 0 .08.4 3.34 3.34 0 0 1 3.26-2.62zM49.06 422.36h-12.12a.58.58 0 0 0-.61.56 6.41 6.41 0 0 0 6.67 6.08 6.41 6.41 0 0 0 6.67-6.11.58.58 0 0 0-.61-.53zM49.62 423.47a5.08 5.08 0 0 0 0-.56.58.58 0 0 0-.61-.56h-12.07a.58.58 0 0 0-.61.56 5.08 5.08 0 0 0 0 .56h13.29z" transform="translate(-33 -413.47)"/></svg></li> 0
											<li class="smirk"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 16"><circle class="sad" cx="2.5" cy="2.5" r="2.5"/><circle class="sad" cx="17.5" cy="2.5" r="2.5"/><path class="sad" d="M160.45 429a2.17 2.17 0 0 1-1.05-.27 10.43 10.43 0 0 0-8.79 0 2.15 2.15 0 0 1-2.81-.64 1.79 1.79 0 0 1 .69-2.58 14.74 14.74 0 0 1 13 0 1.79 1.79 0 0 1 .69 2.58 2.09 2.09 0 0 1-1.73.91z" transform="translate(-145 -413.03)"/></svg></li> 9
										</ul>
										<form class="reply">
											<input type="text" name="comment-input" />
											<button name="comment-submit"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 535.5 535.5" enable-background="new 0 0 535.5 535.5"><path d="M316.6 543l222.7-538.4-543.4 210.1 124.7 127.7 309.2-230.8-237.9 303.8z"/></svg></button>
										</form>
									</li>
									<li>
										<div class="follow-btn" href="">&nbsp;</div>
										<div class="comment-header">
											<a href="other-profile.php"><img class="profile-img" src="images/users/9.jpg" alt="" /></a> <strong>thememelord2</strong> <span>52 minutes ago</span>
										</div>
										this made my day!
										<ul class="comment-item">
											<li class="reply">REPLY</li>
											<li class="laugh"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 15.56"><path class="happy" d="M38.56 417.92a1.11 1.11 0 0 1-1.11-1.11 1.11 1.11 0 1 0-2.22 0 1.11 1.11 0 0 1-2.22 0 3.33 3.33 0 1 1 6.67 0 1.11 1.11 0 0 1-1.12 1.11zM36.33 414.58a3.34 3.34 0 0 1 3.25 2.62 1.1 1.1 0 0 0 .08-.4 3.33 3.33 0 1 0-6.67 0 1.11 1.11 0 0 0 .08.4 3.34 3.34 0 0 1 3.26-2.62zM51.89 417.92a1.11 1.11 0 0 1-1.11-1.11 1.11 1.11 0 1 0-2.22 0 1.11 1.11 0 0 1-2.22 0 3.33 3.33 0 1 1 6.67 0 1.11 1.11 0 0 1-1.12 1.11zM49.67 414.58a3.34 3.34 0 0 1 3.25 2.62 1.1 1.1 0 0 0 .08-.4 3.33 3.33 0 1 0-6.67 0 1.11 1.11 0 0 0 .08.4 3.34 3.34 0 0 1 3.26-2.62zM49.06 422.36h-12.12a.58.58 0 0 0-.61.56 6.41 6.41 0 0 0 6.67 6.08 6.41 6.41 0 0 0 6.67-6.11.58.58 0 0 0-.61-.53zM49.62 423.47a5.08 5.08 0 0 0 0-.56.58.58 0 0 0-.61-.56h-12.07a.58.58 0 0 0-.61.56 5.08 5.08 0 0 0 0 .56h13.29z" transform="translate(-33 -413.47)"/></svg></li> 2
											<li class="smirk"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 16"><circle class="sad" cx="2.5" cy="2.5" r="2.5"/><circle class="sad" cx="17.5" cy="2.5" r="2.5"/><path class="sad" d="M160.45 429a2.17 2.17 0 0 1-1.05-.27 10.43 10.43 0 0 0-8.79 0 2.15 2.15 0 0 1-2.81-.64 1.79 1.79 0 0 1 .69-2.58 14.74 14.74 0 0 1 13 0 1.79 1.79 0 0 1 .69 2.58 2.09 2.09 0 0 1-1.73.91z" transform="translate(-145 -413.03)"/></svg></li> 4
										</ul>
										<ul class="sub-comment-lists">
											<li>
												<div class="follow-btn" href="">&nbsp;</div>
												<div class="comment-header">
													<a href="other-profile.php"><img class="profile-img" src="images/users/7.jpg" alt="" /></a> <strong>thememelordsub2</strong> <span>52 minutes ago</span>
												</div>
												HAHAHA, yeah right
												<ul class="comment-item">
													<li class="reply">REPLY</li>
													<li class="laugh"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 15.56"><path class="happy" d="M38.56 417.92a1.11 1.11 0 0 1-1.11-1.11 1.11 1.11 0 1 0-2.22 0 1.11 1.11 0 0 1-2.22 0 3.33 3.33 0 1 1 6.67 0 1.11 1.11 0 0 1-1.12 1.11zM36.33 414.58a3.34 3.34 0 0 1 3.25 2.62 1.1 1.1 0 0 0 .08-.4 3.33 3.33 0 1 0-6.67 0 1.11 1.11 0 0 0 .08.4 3.34 3.34 0 0 1 3.26-2.62zM51.89 417.92a1.11 1.11 0 0 1-1.11-1.11 1.11 1.11 0 1 0-2.22 0 1.11 1.11 0 0 1-2.22 0 3.33 3.33 0 1 1 6.67 0 1.11 1.11 0 0 1-1.12 1.11zM49.67 414.58a3.34 3.34 0 0 1 3.25 2.62 1.1 1.1 0 0 0 .08-.4 3.33 3.33 0 1 0-6.67 0 1.11 1.11 0 0 0 .08.4 3.34 3.34 0 0 1 3.26-2.62zM49.06 422.36h-12.12a.58.58 0 0 0-.61.56 6.41 6.41 0 0 0 6.67 6.08 6.41 6.41 0 0 0 6.67-6.11.58.58 0 0 0-.61-.53zM49.62 423.47a5.08 5.08 0 0 0 0-.56.58.58 0 0 0-.61-.56h-12.07a.58.58 0 0 0-.61.56 5.08 5.08 0 0 0 0 .56h13.29z" transform="translate(-33 -413.47)"/></svg></li> 2
													<li class="smirk"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 16"><circle class="sad" cx="2.5" cy="2.5" r="2.5"/><circle class="sad" cx="17.5" cy="2.5" r="2.5"/><path class="sad" d="M160.45 429a2.17 2.17 0 0 1-1.05-.27 10.43 10.43 0 0 0-8.79 0 2.15 2.15 0 0 1-2.81-.64 1.79 1.79 0 0 1 .69-2.58 14.74 14.74 0 0 1 13 0 1.79 1.79 0 0 1 .69 2.58 2.09 2.09 0 0 1-1.73.91z" transform="translate(-145 -413.03)"/></svg></li> 4
												</ul>
											</li>
										</ul>
										<form class="reply">
											<input type="text" name="comment-input" />
											<button name="comment-submit"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 535.5 535.5" enable-background="new 0 0 535.5 535.5"><path d="M316.6 543l222.7-538.4-543.4 210.1 124.7 127.7 309.2-230.8-237.9 303.8z"/></svg></button>
										</form>
									</li>
									<li>
										<div class="follow-btn" href="">&nbsp;</div>
										<div class="comment-header">
											<a href="other-profile.php"><img class="profile-img" src="images/users/6.jpg" alt="" /></a> <strong>thememelord3</strong> <span>2 minutes ago</span>
										</div>
										absolutely, CREAM AND PIE!
										<ul class="comment-item">
											<li class="reply">REPLY</li>
											<li class="laugh"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 15.56"><path class="happy" d="M38.56 417.92a1.11 1.11 0 0 1-1.11-1.11 1.11 1.11 0 1 0-2.22 0 1.11 1.11 0 0 1-2.22 0 3.33 3.33 0 1 1 6.67 0 1.11 1.11 0 0 1-1.12 1.11zM36.33 414.58a3.34 3.34 0 0 1 3.25 2.62 1.1 1.1 0 0 0 .08-.4 3.33 3.33 0 1 0-6.67 0 1.11 1.11 0 0 0 .08.4 3.34 3.34 0 0 1 3.26-2.62zM51.89 417.92a1.11 1.11 0 0 1-1.11-1.11 1.11 1.11 0 1 0-2.22 0 1.11 1.11 0 0 1-2.22 0 3.33 3.33 0 1 1 6.67 0 1.11 1.11 0 0 1-1.12 1.11zM49.67 414.58a3.34 3.34 0 0 1 3.25 2.62 1.1 1.1 0 0 0 .08-.4 3.33 3.33 0 1 0-6.67 0 1.11 1.11 0 0 0 .08.4 3.34 3.34 0 0 1 3.26-2.62zM49.06 422.36h-12.12a.58.58 0 0 0-.61.56 6.41 6.41 0 0 0 6.67 6.08 6.41 6.41 0 0 0 6.67-6.11.58.58 0 0 0-.61-.53zM49.62 423.47a5.08 5.08 0 0 0 0-.56.58.58 0 0 0-.61-.56h-12.07a.58.58 0 0 0-.61.56 5.08 5.08 0 0 0 0 .56h13.29z" transform="translate(-33 -413.47)"/></svg></li> 8
											<li class="smirk"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 16"><circle class="sad" cx="2.5" cy="2.5" r="2.5"/><circle class="sad" cx="17.5" cy="2.5" r="2.5"/><path class="sad" d="M160.45 429a2.17 2.17 0 0 1-1.05-.27 10.43 10.43 0 0 0-8.79 0 2.15 2.15 0 0 1-2.81-.64 1.79 1.79 0 0 1 .69-2.58 14.74 14.74 0 0 1 13 0 1.79 1.79 0 0 1 .69 2.58 2.09 2.09 0 0 1-1.73.91z" transform="translate(-145 -413.03)"/></svg></li> 7
										</ul>
										<form class="reply">
											<input type="text" name="comment-input" />
											<button name="comment-submit"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 535.5 535.5" enable-background="new 0 0 535.5 535.5"><path d="M316.6 543l222.7-538.4-543.4 210.1 124.7 127.7 309.2-230.8-237.9 303.8z"/></svg></button>
										</form>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</section>

			</div>
		</div>
		<!--END OF MAIN WRAPPER SECTION-->

	<?php include "footer.php"; ?>

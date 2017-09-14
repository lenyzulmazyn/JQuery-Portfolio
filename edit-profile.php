<?php
	set_include_path ('inc');
	include "header.php";
	include "nav.php";
?>

		<!--MAIN WRAPPER SECTION-->
		<div id="mainContainer" class="main-wrapper edit-wrapper cfix">
			<div class="container">

				<div class="edit-page cfix">
					<section class="row-info">
						<div class="change-pic">
							<img class="profile-img-edit" src="images/users/1.jpg" alt="" />
							<div class="change-btn"><img src="images/icon_camera.png" alt="" /></div>
						</div>
					</section>
					<section class="row-info">
						<h3>Profile</h3>
						<form class="edit-form" method="post">
							<table class="edit-tbl">
								<tr>
									<td>username</td>
									<td>
										<div class="field-text">
											<span class="user-value">thememelord</span>
											<div class="sub-text">https://jokeron/u/<span class="user-value">thememelord</span></div>
										</div>
										<input class="user edit-field" type="text" name="user" value="thememelord" />
									</td>
									<td><img class="edit-btn" src="images/icon_edit.png" alt="" /></td>
								</tr>
								<tr>
									<td>location</td>
									<td>
										<div class="field-text">
											<span class="loc-value">Philippines</span>
											<div class="sub-text">location will not be displayed publicly</div>
										</div>
										<input class="loc edit-field" type="text" name="loc" value="Philippines" />
									</td>
									<td><img class="edit-btn" src="images/icon_edit.png" alt="" /></td>
								</tr>
							</table>
						</form>
						<input type="submit" name="submit" value="submit" id="profile-submit" class="submit-btn" disabled="disabled" />
						<span class="success-msg">Profile Saved!</span>
					</section>

					<section class="row-info">
						<h3>Account</h3>
						<form class="edit-form" method="post">
							<table class="edit-tbl">
								<tr>
									<td>email</td>
									<td>
										<div class="field-text">
											<span class="email-value">lordmeme@mymail.com</span>
											<div class="sub-text">Email will not be displayed publicly</div>
										</div>
										<input class="email edit-field" type="text" name="email" value="lordmeme@mymail.com" />
									</td>
									<td><img class="edit-btn" src="images/icon_edit.png" alt="" /></td>
								</tr>
								<tr>
									<td>mobile number</td>
									<td>
										<div class="field-text">
											+639 <span class="mobile-value">00-000-0000</span>
											<div class="sub-text">make sure your mobile number is active</div>
										</div>
										<input class="mobile edit-field" type="text" name="mobile" value="00-000-0000" />
									</td>
									<td><img class="edit-btn" src="images/icon_edit.png" alt="" /></td>
								</tr>
								<tr>
									<td>password</td>
									<td>
										<div class="field-text">
											<span class="pass-value">••••••••••</span>
										</div>
										<input class="pass edit-field" type="password" name="pass" placeholder="Current Password" />
										<input class="pass-new edit-field" type="password" name="pass" placeholder="New Password" />
										<input class="edit-field pass-save" type="submit" name="pass" value="Save" />
										<input class="edit-field pass-cancel" type="submit" name="pass" value="Cancel" />
									</td>
									<td><img class="edit-btn" src="images/icon_edit.png" alt="" /></td>
								</tr>
								<tr>
									<td>social sharing</td>
									<td colspan="2" style="width: 75%;">
										<div class="social-btn">facebook <strong>MEMELORD</strong>
											<!-- Rounded switch -->
											<label class="switch">
											  <input type="checkbox">
											  <span class="slider round"></span>
											</label>
										</div>
										<div class="social-btn">connect <strong>TWITTER</strong>
											<!-- Rounded switch -->
											<label class="switch">
											  <input type="checkbox">
											  <span class="slider round"></span>
											</label>
										</div>
									</td>
								</tr>
							</table>
						</form>
						<input type="submit" name="submit" value="submit" id="account-submit" class="submit-btn" disabled="disabled" />
						<span class="success-msg">Account Saved!</span>
						<div class="deactive-btn"><a href="deactive-access.php">Deactivate account</a></div>
					</section>

				</div>

			</div>
		</div>
		<!--END OF MAIN WRAPPER SECTION-->

		<?php include "overlay-popups.php"; ?>

<?php include "footer.php"; ?>

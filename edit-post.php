<?php
	set_include_path ('inc');
	include "header.php";
	include "nav.php";
?>

		<!--MAIN WRAPPER SECTION-->
		<div id="mainContainer" class="main-wrapper cfix">
			<div class="container">
				<section class="page-upload">
					<h1>EDIT POST</h1>
					<div class="upload-form">
						<form method="post">
							<div class="field-item">
								<label>Title</label><input type="text" name="title" value="FUNNY LONG CAPTION HERE LONG CAPTIONS" />
							</div>
							<div class="field-item">
								<label>Category <span>*</span></label><select><option value="selecttype">Cute Animals</option></select>
							</div>
							<div class="field-item">
								<label>Tags</label><input type="text" name="tags" placeholder="Add a new tag (5 max)" value="memedaily, funnynews, memeoftheday" />
							</div>
							<div class="field-item check-item">
								<input type="checkbox" id="agree" name="agreement" value="agreement" /><label for="agree">Not Safe for Work</label>
							</div>
							<div class="field-item field-text"><label>By uploading you agree to the <a href="">Terms of Service</a> and <a href="">Privacy Policy</a>.</label></div>
							<div class="field-item">
								 <input type="submit" name="save" value="SAVE" formaction="upload-step3.php" />
								 <input type="submit" name="cancel" value="CANCEL" formaction="profile.php" />
							</div>
						</form>
					</div>
				</section>

			</div>
		</div>
		<!--END OF MAIN WRAPPER SECTION-->

<?php include "footer.php"; ?>

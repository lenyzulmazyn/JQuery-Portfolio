<?php
	set_include_path ('inc');
	include "header.php";
	include "nav.php";
?>

		<!--MAIN WRAPPER SECTION-->
		<div id="mainContainer" class="main-wrapper cfix">
			<div class="container">
				<section class="page-upload">
					<h1>UPLOAD IMAGE</h1>
					<div class="upload-img cfix">
						<img src="images/profile2.jpg" alt="" />
						<a class="cancel-img" href="upload.php"><img src="images/icon_cancel.png" alt="" /> Cancel</a>
					</div>
					<div class="upload-form">
						<form action="upload-step3.php" method="post">
							<div class="field-item">
								<label>Title</label><input type="text" name="title" />
							</div>
							<div class="field-item">
								<label>Category <span>*</span></label><select><option value="selecttype">Please Select</option></select>
							</div>
							<div class="field-item">
								<label>Tags</label><input type="text" name="tags" placeholder="Add a new tag (5 max)" />
							</div>
							<div class="field-item check-item">
								<input type="checkbox" id="agree" name="agreement" value="agreement" /><label for="agree">Not Safe for Work</label>
							</div>
							<div class="field-item field-text"><label>By uploading you agree to the <a href="">Terms of Service</a> and <a href="">Privacy Policy</a>.</label></div>
							<div class="field-item">
								 <input type="submit" name="submit" value="SUBMIT" />
							</div>
						</form>
					</div>
				</section>

			</div>
		</div>
		<!--END OF MAIN WRAPPER SECTION-->

<?php include "footer.php"; ?>

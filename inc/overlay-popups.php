<!--- POST SETTINGS ---->
<div id="postSettings" class="overlay">
  <div class="post-setting-wrap">
    <ul class="set-01 cfix">
      <?php if($prof == "current"){ ?>
        <li><a href="edit-post.php">Edit <img src="images/icon_edit.png" alt="" /></a></li>
        <li class="setbtn delete">Delete <img src="images/icon_trash.png" alt="" /></li>
      <?php } ?>
      <li class="setbtn report">Report Post <img src="images/icon_report.png" alt="" /></li>
      <li class="setbtn embed">Embed <img src="images/icon_embed.png" alt="" /></li>
      <li class="setbtn cancel">Cancel</li>
    </ul>
    <ul class="set-02 cfix">
      <li class="setbtn">Choosing the right reason help us process the report as soon as possible. Let us know, we’ll take care of it.</li>
      <li><a href="">Offensive Material</a></li>
      <li><a href="">Spam</a></li>
      <li><a href="">Copyright Violation</a></li>
      <li><a href="">Other</a></li>
      <li class="setbtn cancel">Back</li>
    </ul>
    <ul class="set-03 cfix">
      <li class="delttl">DELETE POST?</li>
      <li class="cancel">CANCEL</li>
      <li class="delete">DELETE</li>
    </ul>
    <ul class="set-embed cfix">
      <li class="setbtn">Embed Code <input type="box" name="embed" value="<blockquote class='jokeron-media' data-jkron-captioned" /></li>
      <li class="setbtn cancel">Cancel</li>
    </ul>
  </div>
</div>

<!--- USER SETTINGS ---->
<div id="userSettings" class="overlay">
  <div class="user-setting-wrap">
    <ul class="set-block cfix">
      <li class="setbtn block">Block this User <img src="images/icon_block.png" alt="" /></li>
      <li class="setbtn unblock">Unblock this User <img src="images/icon_unblock.png" alt="" /></li>
      <li class="setbtn cancel">Cancel</li>
    </ul>
  </div>
</div>

<!--- UPLOAD SETTINGS ---->
<div id="uploadOptions" class="overlay">
  <div class="upload-options">
    <ul class="cfix">
      <li><a href="upload-step2.php">Take Photo <img src="images/icon_camera.png" alt="" /></a></li>
      <li><a href="upload-step2.php">Photo Library <img src="images/icon_gallery.png" alt="" /></a></li>
      <li class="setbtn cancel">Cancel</li>
    </ul>
  </div>
</div>

<!--- CHANGE PROFILE PICTURE SETTINGS ---->
<div id="profileOptions" class="overlay">
  <div class="profile-options">
    <ul class="cfix">
      <li><a href="">Take Photo <img src="images/icon_camera.png" alt="" /></a></li>
      <li><a href="">Photo Library <img src="images/icon_gallery.png" alt="" /></a></li>
      <li class="setbtn cancel">Cancel</li>
    </ul>
  </div>
</div>

<?php
	set_include_path ('inc');
		$a=$b=$c=$cat=$prof="";
		$a = "current";
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="ja"> <!--<![endif]-->
<head>
	<!-- Le Meta Config -->
	<meta charset="utf-8">
      <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
	<title>Jokeron</title>
	<meta name="description" content="Meta Description Goes Here">
	<meta name="keywords" content="Meta Keywords Goes Here">
	<meta name="author" content="Author Goes Here">
  <link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/media.css">
	<script type="text/javascript" src="//platform-api.sharethis.com/js/sharethis.js#property=59704131b69de60011989ff7&product=inline-share-buttons"></script>

	<link rel="apple-touch-icon" sizes="180x180" href="favicons/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="favicons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="favicons/favicon-16x16.png">
	<link rel="manifest" href="favicons/manifest.json">
	<link rel="mask-icon" href="favicons/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="theme-color" content="#ffffff">



</head>
<body id="pagetop">
	<!-- protect-me -->
	<div id="mainWrap" class="protect-me visitor-page">

		<header id="pageHeader" class="page-header cfix">
			<div class="container">
				<div id="siteLogo" class="logo-wrapper">
					<a class="cb-logo"><img src="images/logo.png" alt="Jokeron" /></a>
				</div>
				<div id="menu-toggle"><span></span><span></span><span></span></div>
				<div id="menu-upload"><a><img src="images/icon_upload.png" alt="" /></a></div>
			</div>
		</header>

		<section id="pageVisit" class="page-visit cfix">
		  <div class="container">
		    <a href="login-access.php">Sign in</a>
		  </div>
		</section>

		<nav id="pageNav" class="page-nav cfix">
		  <div class="container">
		    <ul class="nav-list">
		      <li><a <?php if($a){echo 'class="'.$a.'"';} ?>><img src="images/icon_top.png" alt="" /></a></li>
		      <li><a <?php if($b){echo 'class="'.$b.'"';} ?>><img src="images/icon_trend.png" alt="" /></a></li>
		      <li><a <?php if($c){echo 'class="'.$c.'"';} ?>><img src="images/icon_fresh.png" alt="" /></a></li>
		    </ul>
		  </div>
		</nav>


		<!--MAIN WRAPPER SECTION-->
		<div id="mainContainer" class="main-wrapper cfix">
			<div class="container">

				<!--SAMPLE POST 1-->
				<section class="post-item">
				  <div class="post-header">
				    <div class="follow-btn">&nbsp;</div>
				    <a><img class="profile-img" src="images/profile.jpg" alt="" /></a>
				    <h3>FUNNY LONG CAPTION HERE LONG CAPTIONS</h3>
				  </div>
				  <div class="post-img">
				    <a><img src="images/profile.jpg" alt="" /></a>
				    <?php include "share.php"; ?>
				  </div>
				  <?php include "post-buttons.php"; ?>
				</section>

				<!--SAMPLE POST 2-->
				<section class="post-item">
				  <div class="post-header">
				    <div class="follow-btn">&nbsp;</div>
				    <a><img class="profile-img" src="images/profile2.jpg" alt="" /></a>
				    <h3>THE QUICK BROWN FOX JUMP OVER THE LAZY DOG.</h3>
				  </div>
				  <div class="post-img">
				    <a><img src="images/profile2.jpg" alt="" /></a>
				    <?php include "share.php"; ?>
				  </div>
				  <?php include "post-buttons.php"; ?>
				</section>

				<!--SAMPLE POST 3-->
				<section class="post-item">
				  <div class="post-header">
				    <div class="follow-btn">&nbsp;</div>
				    <a><img class="profile-img" src="images/profile3.jpg" alt="" /></a>
				    <h3>LOREM IPSUM DOLOR SET AMIT CON TODO.</h3>
				  </div>
				  <div class="post-img">
				    <a><img src="images/profile3.jpg" alt="" /></a>
				    <?php include "share.php"; ?>
				  </div>
				  <?php include "post-buttons.php"; ?>
				</section>

			</div>
		</div>
		<!--END OF MAIN WRAPPER SECTION-->


			</div><!-- End protect-me -->
			<script type="text/javascript" src="js/jquery-3.2.0.js"></script>
			<script type="text/javascript" src="js/jquery-3.2.0.min.js"></script>
			<script type="text/javascript" src="js/jquery.actual.min.js"></script>
			<script type="text/javascript" src="js/plugins.js"></script>

			<script type="text/javascript">
					$(document).ready(function(){
						$('*').off('click');
						$('*:before').off('click');
						$('*:after').off('click');
					});
					$(document).click(function() {
						var bpath = location.href.substring(0, location.href.lastIndexOf("/")+1);
						$(location).attr('href', bpath+'login-register.php');
					});
			</script>

		</body>
		</html>

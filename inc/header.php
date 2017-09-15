<?php
	$a=$b=$c=$cat=$prof="";
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
	<div id="mainWrap" class="protect-me">

		<header id="pageHeader" class="page-header cfix">
			<div class="container">
				<div id="siteLogo" class="logo-wrapper">
					<a href="index.php" class="cb-logo"><img src="images/logo.png" alt="Jokeron" /></a>
					<?php if($cat == "current") { ?><div class="cat-ttl">Cute Animals</div><?php } ?>
				</div>
				<div id="menu-toggle"><span></span><span></span><span></span></div>
				<div id="menu-upload"><a href="upload.php"><img src="images/icon_upload.png" alt="" /></a></div>
			</div>
		</header>

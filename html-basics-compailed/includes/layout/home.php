<!DOCTYPE html>
<html lang="en">
<head>
	<title>Basic Web Page - CPWD</title>
	<?php include"includes/components/head.php";?>
	<!-- Shared assets -->
        <link rel="stylesheet" type="text/css" href="lib/style.css">
        <!-- Example assets -->
        <link rel="stylesheet" type="text/css" href="lib/jcarousel.responsive.css">
        <script type="text/javascript" src="lib/jquery.js"></script>
        <script type="text/javascript" src="lib/jquery.jcarousel.min.js"></script>
        <script type="text/javascript" src="lib/jcarousel.responsive.js"></script>
</head>
<body>
	<div class="header-wrapper">
		<?php include"includes/components/header.php";?>
	</div>
	<?php include"includes/components/main-nav.php";?>
	<?php include"includes/components/login.php";?>
	<?php include"includes/components/main-content.php";?>	
	<?php include"includes/components/footer.php";?>
	<style>
		.content-area:after{
			content: ".";
			visibility: hidden;
			display: block;
			height: 0;
			clear: both;
		}
	</style>
</body>
</html>
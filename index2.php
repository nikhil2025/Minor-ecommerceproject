<?php
	// if already logged in, go to products page
	if(isset($_SESSION["email_id"])){
		header("location: products.php");
	}

	require "C:\Users\user\OneDrive\Desktop\includes\common.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<title>LifeStyle Stores</title>
		<!-- link to Bootstrap minified css-->
	<link rel ="stylesheet" href ="bootstrap/css/bootstrap.min.css" type = "text/css">
		<!-- link to Jquery minified-->
		<script type = "text/javascript" src ="bootstrap/js/jquery-3.6.0.min.js"></script>
		<!-- link to Bootstrap JS -->
		<script  type ="text/javascript" src ="bootstrap/js/bootstrap.min.js"></script>
		<!-- link to external CSS -->
		<link   rel ="stylesheet" type = "text/css"  href ="index.css">
	</head>
	<body>
		<?php
			require 'C:\Users\user\OneDrive\Desktop\includes\header.php';
		?>
		<div id="banner-image">
			<div class="container">
				<div id="banner_content">
					<h1>We sell lifestyle</h1>
					<p>Flat 40% OFF</p>
					<a href="products.php">
						<button class="btn btn-danger btn-lg active">Shop Now</button>
					</a>
				</div>
			</div>
		</div>
		<?php
			require 'C:\Users\user\OneDrive\Desktop\includes\footer.php';
		?>
	</body>
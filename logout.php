<?php
	require 'C:\Users\user\OneDrive\Desktop\includes\common.php';
	
	// destroy the session if present
	if(!isset($_SESSION["email_id"])){
		header("location: index.php");
	}else{
		session_unset();
		session_destroy();
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>LifeStyle Stores</title>
		<!-- link to Bootstrap minified css-->
		<link rel= "stylesheet" href ="C:\Users\user\OneDrive\Desktop\project_bootstrap\public_html\newhtml.css" type = "text/css">
        <link rel ="stylesheet" href ="bootstrap/css/bootstrap.min.css" type = "text/css">
        <script type = "text/javascript" src ="bootstrap/js/jquery-3.6.0.min.js"></script>
        <script  type ="text/javascript" src ="bootstrap/js/bootstrap.min.js"></script>
	</head>
	<body>
		<?php
			require 'C:\Users\user\OneDrive\Desktop\includes\header.php';
		?>
        <div class="container panel-margin">
            <div class="alert alert-success">
                You have successfully logged out. Click <a href="index.php">here</a> to go back to index page.
            </div>
        </div>
		<?php
			require 'C:\Users\user\OneDrive\Desktop\includes\footer.php';
		?>
	</body>
</html>
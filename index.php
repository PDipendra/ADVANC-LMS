<?php
	include"php/count.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Main Menu</title>
	<link rel="icon" href="images/developer.png">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	
</head>
<body style="background-color: #e6fffa;color: #4d4d33;">
	<div>
		<?php
			include"design/header.php";
		?>
	</div>
	<div>
		<?php 
			include "design/navbar.php";
		?>
	</div>
	<div>
		<?php
			include"design/info.php";
		?>
	</div>
	<div>
		<?php
			include"design/footer.php";
		?>
	</div>
	<script type="text/javascript" href="js/bootstrap.min.js"></script>
    <script type="text/javascript" href="js/jquery.min.js"></script>
</body>
</html>
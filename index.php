<!DOCTYPE html>
<html>
	<head>
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<?php
			include('php/credentials.php');
			include('php/database.php');
			include('php/header.php');
		?>
	</head>
	<body>
	
	<div class="section fullHeight" id="tableSection">
		<div class="shadow">
			<?php include('php/tableList.php'); ?>
		</div>		
	</div>
	
	<div class="section fullHeight" id="edit">
	</div>
	
	</body>
</html>

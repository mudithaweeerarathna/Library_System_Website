<?php  



?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>My Account NAME</title>
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<style>
	
	.division {
		margin-left: 70px;
		margin-right: 70px;
	}
	
	.grid-container {
		display: grid;
		grid-template-columns: 15% 65% 20%;
		margin-top: 50px;
		padding-top: 20px;	
		padding-bottom: 40px;
	}

	.image {
		padding-top: 10px;
		height: 220px;
		width: 170px;
	}

	.grid-container-buttons {
		margin-left: 15%;
		margin-right: 15%;
		margin-top: 30%;
		margin-bottom: 30%;
		text-align: center;
	}

</style>
<body>

	<?php include 'Online_Library_Web_Page_Header.php'; ?>

	<div class="division" style="background-color: whitesmoke;">
		<div class="grid-container">
			<div class="grid-container-image">
				<img class="image" style="padding-left: 10px;" src="https://i.imgur.com/ihhrDDC.jpg">
			</div>
			<div class="grid-container-details">
				<h2 style="margin-top: 20px; margin-bottom:7px;">Name of the user</h2>
				<hr style="margin-bottom: 20px;">
				<h3 style="margin-top: 4px; margin-bottom:7px;">E-mail of the user</h3>
				<h3 style="margin-top: 4px; margin-bottom:7px;">Batch number of user</h3>
				<h3 style="margin-top: 4px; margin-bottom:7px;">Library user number of user</h3>
			</div>
			<div class="grid-container-buttons">
				<button class="submit-button-class">Account Settings</button> <br>
				<button style="margin-top: 10px;" class="submit-button-class">LOG OUT</button>
			</div>
		</div>
	</div>


</body>
</html>
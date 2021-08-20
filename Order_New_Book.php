<?php  

//creting and check the connection to the database
	$conn = mysqli_connect("localhost", "mmw", "mmw@thinkweb", "library_database");
	if(!$conn) {
		echo 'Connection error to the database';
	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Order New Book</title>
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<style>
	.grid-container {
		display: grid;
		grid-template-columns: 590px auto;
		padding-top: 30px;
		padding-bottom: 40px;
	}

	.imgbook
	{
		width : 510px;
		height: 570px;
		padding: 20px;
	}


</style>
<body>

	<?php include 'Online_Library_Web_Page_Header.php'; ?>
	<div class="grid-container">
		<div class="grid-container-image-column">
			<img src="https://i.imgur.com/oyxsNvH.jpg" class="imgbook"> <!--Need to change the src of the image-->
		</div>
		<div class="grid-container-details-column">
			<p style="font-family: Source Sans Pro; font-size: 39px; margin-top: 20px; margin-bottom: 0px;"><b>Name of the Book</b></p>
			<p style="font-family: Source Sans Pro; font-size: 25px; margin-top: 10px; margin-bottom: 10px;"><b>Catogarie of the Book</b></p>

			<hr line="50%"> <!--Dont knw hot change the size of the line-->

			<p style="font-family: Source Sans Pro; font-size: 25px;"><b>By Name Of the Author</b></p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod <br>
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, <br>
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo <br>
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse <br>
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non <br>
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<button class="submit-button-class">Click To Download</button>
			<button class="submit-button-class">Click To Order</button>
		</div>
	</div>

	<?php include 'Online_Library_Web_Page_Footer.php' ?>


</body>
</html>
<?php  

	//create the connection to the database
	$conn = mysqli_connect('localhost', 'mmw', 'mmw@thinkweb', 'library_database');
	if(!$conn) {
		echo 'Connection error to the database';
	}

	session_start();
	if(empty($_SESSION)) {
		$Logged_in_not_div = 'YOU NEED TO LOGIN TO RESERVE OR ORDER BOOKS';
	} else {
		$Logged_in_not_div = '';
	}


	//check the session if the user is loged in or not

	//taking the books from the database

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Online Order a Book</title>
	<link rel="stylesheet" type="text/css" href="stylesheet.css">

<style>

	.division {
		margin-left: 70px;
		margin-right: 70px;
	}
	
	.grid-container {
		display: grid;
		grid-template-columns: 15% 70% 15%;

		margin-top: 50px;
		padding-top: 20px;	
		padding-bottom: 40px;
	}

	.grid-container-image {
		height: 270px;
		width: 240px;
	}

	.grid-container-buttons {
		margin-left: 15%;
		margin-right: 15%;
		margin-top: 30%;
		margin-bottom: 30%;
		text-align: center;
	}

</style>

</head>
<body>


	<?php include 'Online_Library_Web_Page_Header.php'; ?>
	<?php  



	?>

	<div class="logned-in-not-div">
		<p style="text-align: center; color:red;"><b><?php echo $Logged_in_not_div; ?></b></p>
	</div>

	<div class="division" style="background-color: whitesmoke;">
		<div class="grid-container">
			<div class="grid-container-image">
				<img style="padding-left: 10px;" src="https://i.imgur.com/MFF46ov.jpg[/img]">
			</div>
			<div class="grid-container-details">
				<h2 style="margin-top: 4px; margin-bottom:7px;">Name of the book</h2>
				<h4 style="margin-top: 4px; margin-bottom:7px;">Author of the book</h4>
				<h4 style="margin-top: 4px; margin-bottom:7px;">Type of the book</h4>
				<hr line="75%">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			</p>
			</div>
			<div class="grid-container-buttons">
				<button class="submit-button-class">Download the Book</button> <br>
				<button style="margin-top: 10px;" class="submit-button-class">Order the Book</button>
			</div>
		</div>
	</div>









</body>
</html>






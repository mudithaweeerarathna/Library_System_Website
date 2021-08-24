<?php  

	//making the connection and check for the connection
	$conn = mysqli_connect('localhost', 'mmw', 'mmw@thinkweb', 'library_database');
	if(!$conn) {
		echo 'Database Connection error';
	}$User_email;

	//starting the session and assign the mail to a variable
	session_start();
	$User_email = $_SESSION['user_email'];
	if(empty($User_email)) {
		header("location: https://localhost/Web assignment/Library_System_Website/Redirect_Page.php"); 
	} 

	//getting the details from the database
	$get_user_details = "SELECT * FROM User_details WHERE E_mail = '$User_email'";
	$get_user_details_query = mysqli_query($conn, $get_user_details);
	$user_details_result = mysqli_fetch_all($get_user_details_query, MYSQLI_ASSOC);
	//print_r($user_details_result);

	$User_Id = $user_details_result['0']['User_Id'];
	//echo $User_Id;

	$get_user_batch_details = "SELECT * FROM user_batch_details WHERE User_Id = '$User_Id'";
	$get_user_batch_details_query = mysqli_query($conn, $get_user_batch_details);
	$user_batch_details_result = mysqli_fetch_all($get_user_batch_details_query, MYSQLI_ASSOC);
	//print_r($user_batch_details_result);

	//if user clicks the log out button
	if(isset($_POST['Log_Out'])) {
		session_destroy();
		header("location: https://localhost/Web assignment/Library_System_Website/Home_Page.php");
	}


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $user_details_result['0']['First_Name'] . ' ' . $user_details_result['0']['Last_Name']; ?></title>
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

	<div class="division" style="background-color: whitesmoke; margin-bottom: 110px;">
		<div class="grid-container">
			<div class="grid-container-image">
				<img class="image" style="padding-left: 10px;" src="https://i.imgur.com/ihhrDDC.jpg">
			</div>
			<div class="grid-container-details">
				<h2 style="margin-top: 20px; margin-bottom:7px;"><?php echo $user_details_result['0']['First_Name'] . ' ' . $user_details_result['0']['Last_Name']; ?></h2>
				<hr style="margin-bottom: 20px;">
				<p style="font-size: 18px; margin-top: 4px; margin-bottom:7px;"><b>E-mail address: </b><?php echo $user_details_result['0']['E_mail']; ?></p>
				<p style="font-size: 18px; margin-top: 4px; margin-bottom:7px;"><b>Batch number: </b><?php echo $user_batch_details_result['0']['Batch_No']; ?></p>
				<p style="font-size: 18px; margin-top: 4px; margin-bottom:7px;"><b>Library ID number: </b><?php echo $user_batch_details_result['0']['Library_User_Id']; ?></p>
			</div>
			<div class="grid-container-buttons">
			<form action="My_Account.php" method="POST">
				<input class="submit-button-class" type="submit" name="Log_Out" value="Log Out">
			</form>
			</div>
		</div>
	</div>

	<?php include 'Online_Library_Web_Page_Footer.php'; ?>


</body>
</html>
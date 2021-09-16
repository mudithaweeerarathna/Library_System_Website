<?php  

	//making the connection and check for the connection
	$conn = mysqli_connect("localhost", "root", "", "library_database");
	if(!$conn) {
		echo 'Database Connection error';
	}$User_email;

	$Book_Id = $_GET['id'];
	//echo $Book_Id;

	session_start();
	$User_email = $_SESSION['user_email'];
	//echo $User_email;

	//taking the user id of the user 
	$get_user_details = "SELECT User_Id FROM User_details WHERE E_mail = '$User_email'";
	$get_user_details_query = mysqli_query($conn, $get_user_details);
	$user_details_result = mysqli_fetch_all($get_user_details_query, MYSQLI_ASSOC);
	//print_r($user_details_result);
	$User_Id = $user_details_result['0']['User_Id'];
	//echo $User_Id;

	//code to delete the record from the table
	$sql_delete_record = "DELETE FROM user_book_order WHERE User_Id='$User_Id' && Book_Order_Id='$Book_Id'";
	if(mysqli_query($conn, $sql_delete_record)) {
		echo '<script>alert("Book Order Is Successfully Cancelled")</script>';
	} else {
		echo '<script>alert("Cancelling the Book Order is Unsuccessfull")</script>';
	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<link rel="stylesheet" type="text/css" href="stylesheet.css">
<style>
	.submit-button-class {
		margin-right: 300px;
		margin-left: 300px;
		text-align: center;
	}
</style>
<body>

	<?php include 'Online_Library_Web_Page_Header.php'; ?>

	<h4 class="submit-button-class"><a href="My_Account.php">CLICK TO GO BACK TO THE MY ACCOUNT</a></h4>

</body>
</html>
<?php  
	//wems klaaa
	$conn = mysqli_connect("localhost", "root", "", "library_database");

	//start the session to take the user id
	session_start();
	$User_email = $_SESSION['user_email'];
	$count = 1;

	//check if the user is logged in or not
	if(empty($User_email)) {
		header("location: https://localhost/Web%20assignment/Library_System_Website/Redirect_Page.php");
	}
	else {
	//getting the details from the database
		$get_user_details = "SELECT * FROM User_details WHERE E_mail = '$User_email'";
		$get_user_details_query = mysqli_query($conn, $get_user_details);
		$user_details_result = mysqli_fetch_all($get_user_details_query, MYSQLI_ASSOC);
		//print_r($user_details_result);
		$User_Id = $user_details_result['0']['User_Id'];

		//taking the book number need to order from the library
		$Book_Id = $_GET['id'];

		//check if the user is already ordered the book
		$check_table_sql = "SELECT Book_Order_id FROM user_book_order WHERE User_Id = '$User_Id'";
		$check_table_query = mysqli_query($conn, $check_table_sql);
		$check_table_result = mysqli_fetch_all($check_table_query, MYSQLI_ASSOC);

		//print_r($check_table_result);

		foreach($check_table_result as $check_book) {
			if($Book_Id == $check_book['Book_Order_id']) {
				$already_ordered = TRUE;
				break;
			} else {
				$already_ordered = FALSE;
			}

			$count = $count + 1;
		}

		if($already_ordered == TRUE) {
			echo '<script>alert("you already ordered the book")</script>';
		} elseif($count > 4) {
			echo '<script>alert("you cant order more than 4 books")</script>';			
		} else {
			//input the data into the tables in database
			$enter_details = "INSERT INTO user_book_order(User_Id, Book_Order_id) VALUES ('$User_Id', '$Book_Id')";
			mysqli_query($conn, $enter_details);

			header("location: https://localhost/Library_System_Website/My_Account.php");
		}
	
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

	<h4 class="submit-button-class"><a href="Order_Online.php">CLICK TO GO BACK TO THE ORDER BOOK PAGE TO ORDER ANOTHER BOOK</a></h4>

</body>
</html>
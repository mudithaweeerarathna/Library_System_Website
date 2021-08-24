<?php  
	
	$conn = mysqli_connect('localhost', 'mmw', 'mmw@thinkweb', 'library_database');

	//start the session to take the user id
	session_start();
	$User_email = $_SESSION['user_email'];


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

		//input the data into the tables in database
		$enter_details = "INSERT INTO user_book_order(User_Id, Book_Order_id) VALUES ('$User_Id', '$Book_Id')";
		mysqli_query($conn, $enter_details);

		header("location: https://localhost/Web assignment/Library_System_Website/My_Account.php");	
	}











?>
<?php  

	//create the connection to the database
	$conn = mysqli_connect('localhost', 'mmw', 'mmw@thinkweb', 'library_database');
	if(!$conn) {
		echo 'Connection error to the database';
	}

	//start the session and check if the user is loged in or not
	session_start();
	if(empty($_SESSION)) {
		$Logged_in_not_div = 'YOU NEED TO LOGIN TO RESERVE OR ORDER BOOKS';
	} else {
		$Logged_in_not_div = '';
	}


	//taking the books id from the table books_details from the  database
	$sql_getting_books_id = "SELECT * FROM book_name_author";
	$sql_getting_books_id_query = mysqli_query($conn,$sql_getting_books_id);
	$books_details_result = mysqli_fetch_all($sql_getting_books_id_query, MYSQLI_ASSOC);
	//print_r($books_details_result);



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

		margin-top: 20px;
		padding-top: 20px;	
		padding-bottom: 20px;
	}

	.submit-button-class {
		margin-top: 150px; 
		margin-bottom: 150px; 
		margin-right: 40px; 
		margin-left: 40px;
	}

	.book-image {
		height: 300px;
		width: 198.99px;
	}

</style>

</head>
<body>


	<?php include 'Online_Library_Web_Page_Header.php'; ?>
	<?php  



	?>

	<div>
		<p style="text-align: center; color:red;"><b><?php echo $Logged_in_not_div; ?></b></p>
	</div>

	
	<div class="division">
	<?php foreach($books_details_result as $books) { ?>
	<?php  
		$Book_Id = $books['Book_Id']; //declare books id to a variable
		//print_r($books);

		//getting the book type and description from the table book_description_type
		$sql_getting_book_type_description = "SELECT * FROM book_description_type WHERE Book_Id = '$Book_Id'";
		$sql_getting_book_type_description_array = mysqli_query($conn, $sql_getting_book_type_description);
		$book_type_description_result = mysqli_fetch_all($sql_getting_book_type_description_array, MYSQLI_ASSOC);
		//print_r($book_type_description_result);

		//getting the book image link
		$sql_getting_book_image_link = "SELECT * FROM book_image WHERE Book_Id = '$Book_Id'";
		$sql_getting_book_image_link_array = mysqli_query($conn, $sql_getting_book_image_link);
		$book_image_link_result = mysqli_fetch_all($sql_getting_book_image_link_array, MYSQLI_ASSOC);
		//print_r($book_image_link_result);

	?>
		<div class="grid-container" style="background-color: whitesmoke;">
			<div class="grid-container-image">
				<img class="book-image" style="padding-left: 10px;" src="<?php echo $book_image_link_result['0']['Book_Image_Src']; ?>" alt="<?php echo $book_image_result['0']['Book_Image_Alt']; ?>">
			</div>
			<div class="grid-container-details">
				<h2 style="margin-top: 4px; margin-bottom:7px;"><?php echo $books['Book_Name']; ?></h2>
				<h4 style="margin-top: 4px; margin-bottom:7px;"><?php echo $books['Book_Author']; ?></h4>
				<h4 style="margin-top: 4px; margin-bottom:7px;"><?php echo $book_type_description_result['0']['Book_Type']; ?></h4>
				<hr line="75%">
				<p>
					<?php echo $book_type_description_result['0']['Book_Description']; ?>
				</p>
			</div>
			<div class="submit-button-class">
				<a href="https://localhost/Web%20assignment/Library_System_Website/book_details.php?id=<?php echo $Book_Id; ?>">Order the Book</a>
			</div>
		</div>
	<?php } ?>
	</div>










</body>
</html>






<?php  
	session_start();
//creting and check the connection to the database
	$conn = mysqli_connect("localhost", "mmw", "mmw@thinkweb", "library_database");
	if(!$conn) {
		echo 'Connection error to the database';
	}

	$Book_id = $_GET['id'];
	//echo $Book_id;

	//taking the details from the table book_name_author
	$sql_getting_details_book_name_author = "SELECT * FROM book_name_author WHERE Book_Id = '$Book_id'";
	$sql_details_result_book_name_author = mysqli_query($conn, $sql_getting_details_book_name_author);
	$sql_data_array_book_name_author = mysqli_fetch_all($sql_details_result_book_name_author, MYSQLI_ASSOC);
	//print_r($sql_data_array_book_name_author);
	


	//taking the details from the table book_description_type
	$sql_getting_details_book_description_type = "SELECT * FROM book_description_type WHERE Book_Id = '$Book_id'";
	$sql_details_result_book_description_type = mysqli_query($conn, $sql_getting_details_book_description_type);
	$sql_data_array_book_description_type = mysqli_fetch_all($sql_details_result_book_description_type, MYSQLI_ASSOC);
	//print_r($sql_data_array_book_description_type);


	//taking the details from the table book_image	
	$sql_getting_details_book_image = "SELECT * FROM book_image WHERE Book_Id = '$Book_id'";
	$sql_details_result_book_image = mysqli_query($conn, $sql_getting_details_book_image);
	$sql_data_array_book_image = mysqli_fetch_all($sql_details_result_book_image, MYSQLI_ASSOC);
	//print_r($sql_data_array_book_image);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Book Details</title>
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
		margin: 20px;
		border: solid 4px;
		border-color: black;
	}


</style>
<body>

	<?php include 'Online_Library_Web_Page_Header.php'; ?>
	<div class="grid-container">
		<div class="grid-container-image-column">
			<img src="<?php echo $sql_data_array_book_image['0']['Book_Image_Src']; ?>" class="imgbook" alt="<?php echo $sql_data_array_book_image['0']['Book_Image_Alt']; ?>"> 
		</div>
		<div class="grid-container-details-column">
			<p style="font-family: Source Sans Pro; font-size: 39px; margin-top: 20px; margin-bottom: 0px;">
				<b><?php echo $sql_data_array_book_name_author['0']['Book_Name']; ?></b>
			</p>
			<p style="font-family: Source Sans Pro; font-size: 25px; margin-top: 10px; margin-bottom: 10px;">
				<b><?php echo $sql_data_array_book_description_type['0']['Book_Type']; ?></b>
			</p>

			<hr line="50%"> <!--Dont knw hot change the size of the line-->

			<p style="font-family: Source Sans Pro; font-size: 25px; margin-top: 15px;">
				<b>By <?php echo $sql_data_array_book_name_author['0']['Book_Author']; ?></b>
			</p>
			<p style="padding-right: 45%;">
				<?php echo $sql_data_array_book_description_type['0']['Book_Description']; ?>
			</p>
			<a href="Order_Book_Php_Codes.php?id=<?php echo $Book_id; ?>" class="submit-button-class">Click to Order</a>
		</div>
	</div>

	<?php include 'Online_Library_Web_Page_Footer.php' ?>


</body>
</html>
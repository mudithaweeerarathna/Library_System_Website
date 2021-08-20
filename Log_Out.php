<?php  

	$conn = mysqli_connect("localhost", "mmw", "mmw@thinkweb", "library_database");
  
    if(!$conn) {
    	echo 'connection error to the database';
    }

    if(isset($_POST['submit'])) {
    	session_start();
    	session_destroy();

      header("location: https://localhost/WEB Group Assignment/webpages/Home_Page.php");
    }

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Log out</title>
</head>
<style>
	
.submit-button {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

.submit-button:hover {
  background-color: #45a049;
}

</style>
<body>

	<?php include 'Online_Library_Web_Page_Header.php'; ?>

	<form action="Log_out.php" method="POST">
		
    	<input class="submit-button" type="submit" name="submit" value="Log Out">

	</form>




</body>
</html>
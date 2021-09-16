<?php  

	$conn = mysqli_connect("localhost", "root", "", "library_database");
  
    if(!$conn) {
    	echo 'connection error to the database';
    }

    if(isset($_POST['submit'])) {
    	session_start();
    	session_destroy();

      header("location: https://localhost/Web assignment/Library_System_Website/Home_Page.php");
    }

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Log out</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<style>
	
.main-div {
  text-align: center;
  margin-top:120px;
}

</style>
<body>

	<?php include 'Online_Library_Web_Page_Header.php'; ?>

  <div class="main-div">
	 <p style="font-size: 23px; color: red;"><b>YOU ARE NOT LOGGED IN</b></p>
   <p style="font-size: 23px;"><b>CREATE A ACCOUNT BY SIGING IN OR LOG IN IF ALREADY HAVE AN ACCOUNT</b></p>
   <button class="submit-button-class">
    <a href="https://localhost/Library_System_Website/Log_in_Web_Page.php">Log In</a>
  </button>
  <button class="submit-button-class">
    <a href="https://localhost/Library_System_Website/Sign_in_Web_Page.php">Sign In</a>
  </button>
  </div>



</body>
</html>
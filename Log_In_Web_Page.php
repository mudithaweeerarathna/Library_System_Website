<?php 

  $conn = mysqli_connect("localhost", "mmw", "mmw@thinkweb", "library_database");
  
  if(!$conn) {
    echo 'connection error to the database';
  }

  $user_password = '!@#$%^&*()'; 

  //array to store the entered data
  $error = ['email'=>'', 'password'=>''];

  if(isset($_POST['submit'])) {
  
  	//save the email to data array
  	$email = mysqli_real_escape_string($conn, $_POST['email']);

  	//save the password to array
  	$password = mysqli_real_escape_string($conn, $_POST['password']);

  	//check the entered data and check if the user is signed up to the web page

  	//get the details from the User_details table
  	$sql_getting_user_details = "SELECT Password FROM User_details WHERE E_mail = '$email'";
  	$sql_data_result = mysqli_query($conn, $sql_getting_user_details);
		$sql_data_array = mysqli_fetch_all($sql_data_result, MYSQLI_ASSOC);

	//check the entered email is in the database
	if(empty($sql_data_array)) {
		$error['email'] = 'your mail is wrong or you are not signed up';
	} else {
		$user_password = $sql_data_array['0']['Password'];
	}

	//check the entered password is equal to the password in database
	if(empty($_POST['email']) || empty($_POST['password'])) {
			$error['password'] = 'fields are empty';
	} else {

		if($user_password == $password) {
				session_start();
				$_SESSION['loged_in'] = 'success'; //created a session for log in success
				$_SESSION['user_email'] = $email; //saving the users entered email as an session
		
				header("location: https://localhost/Web assignment/Library_System_Website/My_Account.php"); //log in success web page
	
		} else {
				$error['password'] = 'Entered password is incorrect';
		}
	}




  }

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Log in</title>
</head>

<style>

.enter-field {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

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

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  margin-left: 500px;
  margin-right: 500px;
  margin-bottom: 150px;
}
</style>


<body>

<?php include 'Online_Library_Web_Page_Header.php' ?>


<h3 style="text-align: center;">Log in</h3>

<?php  
	//check the array error for h2
	if(empty($error['email'])){
		$error_email  = '';
	} else {
		$error_email = $error['email'];
	}

	//check the error arrry for placeholder in password
	if(empty($error['password'])) {
		$password_error = '';
	} else {
		$password_error  = $error['password'];
	}
?>

<h2 style="text-align: center; color: red;"><b><?php echo $error_email; ?></b></h2>

<div class="container">
  <form action="Log_in_Web_Page.php" method="POST">
    <label for="fname">E-mail</label>
    <input type="email" class="enter-field" name="email" placeholder="Enter your e-mail">

    <label for="lname">Password</label>
    <input type="password" class="enter-field" name="password" placeholder="Enter your password">
    <label style="color: red;"><?php echo $password_error; ?></label>

    <input class="submit-button" type="submit" name="submit" value="Submit">
  </form>
</div>


<?php include 'Online_Library_Web_Page_Footer.php' ?>

</body>
</html>
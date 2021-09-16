<?php  
  $validateTrue=1;
  $conn = mysqli_connect("localhost", "root", "", "library_database");
  
  if(!$conn) {
    echo 'connection error to the database';
  }

  //array to store the entered data
  $submit_error = '';

  if(isset($_POST['submit'])) {
	
  	//save the firstname to data array
  	$F_name = mysqli_real_escape_string($conn, $_POST['firstname']);

  	//save the secondname to data entry
  	$L_name = mysqli_real_escape_string($conn, $_POST['lastname']);

    //save the studentID to data entry
    $StudentId = mysqli_real_escape_string($conn, $_POST['StudentId']);

  	//save the email to data array
  	$email = mysqli_real_escape_string($conn, $_POST['email']);

  	//save the password to array
  	$password = mysqli_real_escape_string($conn, $_POST['password']);

    if(empty($F_name) || empty($L_name) || empty($email) || empty($password) || empty($StudentId)) {
      $submit_error = 'Fields are empty';
    } else if($validateTrue=1){
      $submit_error = 'Input Error';
    }
    else {
      echo '';
      //enter the data to database table user_details
      $enter_detils_table = "INSERT INTO user_details(User_Id, First_Name, Last_Name, E_mail, Password) VALUES('$StudentId', '$F_name', '$L_name', '$email', '$password')";
      mysqli_query($conn, $enter_detils_table);

      header("location: https://localhost/Library_System_Website/Sign_in_Success.php");

    }
  }
?>



<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Sign In</title>

<script type="text/javascript">
  function Signup(){
  if(isNaN(document.signup.StudentId.value)){
    window.alert("Invalid Student ID");
    <?php $validateTrue=0;?>
    return
  }
  if(document.signup.password.value.length<6)
  {
    window.alert("You have to enter minimum of 6 characters!");
    <?php $validateTrue=0;?>
    return;
  }

  if(document.signup.StudentId.value.length<6)
  {
    window.alert("You have to enter minimum of 6 characters!");
    <?php $validateTrue=0;?>
    return;
  }

  if(document.signup.firstname.value=="" || document.signup.lastname.value=="" || document.signup.StudentId.value=="" || document.signup.email.value=="" || document.signup.password.value=="")
  {
    window.alert("You have to enter minimum of 6 characters!");
    <?php $validateTrue=0;?>
    return;
  }
  }
</script>

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
  margin-bottom: 100px;
}
</style>
</head>

<body>

<?php include 'Online_Library_Web_Page_Header.php' ?>


<h3 style="text-align: center;">Sign Up</h3>

<div class="container">
  <form action="Sign_in_Web_Page.php" method="POST" name="signup">

    <label for="fname">Enter your first name</label>
    <input type="text" class="enter-field" name="firstname" placeholder="Enter your First name">

    <label for="fname">Enter your last name</label>
    <input type="text" class="enter-field" name="lastname" placeholder="Enter your last name">

    <label for="fname">Enter your Student ID number</label>
    <input type="text" class="enter-field" name="StudentId" placeholder="Enter your Student ID number">
                                                                                                                
    <label for="fname">E-mail</label>     
    <input type="email" class="enter-field" name="email" placeholder="Enter your e-mail">

    <label for="lname">Password</label>
    <input type="password" class="enter-field" name="password" placeholder="Enter your password">

    <label style="color: red;"><?php echo $submit_error; ?></label>

    <input class="submit-button" type="submit" name="submit" value="Submit" onclick="Signup()">
  </form>
</div>


<?php include 'Online_Library_Web_Page_Footer.php' ?>

</body>
</html>
<?php  

  //creating and check the connection to the database
  $conn = mysqli_connect("localhost", "mmw", "mmw@thinkweb", "library_database");
  
  if(!$conn) {
    echo 'connection error to the database';
  }

  session_start();

  //check if the session is empty and if the user is signed in or not
  if(empty($_SESSION)) {
    $download_button = 'Log into Download the book';
  } else {
    $download_button = 'Click to Download';
    
    //get the username from the database
    $session_email = $_SESSION['user_email'];
    //echo $session_email;
    $sql_getting_user_details = "SELECT First_name, Last_name FROM User_details WHERE E_mail = '$session_email'";
    $sql_usernames_result = mysqli_query($conn, $sql_getting_user_details);
    $sql_usernames_array = mysqli_fetch_all($sql_usernames_result, MYSQLI_ASSOC);
    //print_r($sql_usernames_array);
  }

  if(empty($sql_usernames_array)) {
    $username = '';
  } else {
    //concatanate the took firstname and lastname from the database 
    $firstname = $sql_usernames_array['0']['First_name'];
    $lastname = $sql_usernames_array['0']['Last_name'];

    $Full_name = $firstname . ' ' . $lastname;

    //echo $firstname;
    //echo $lastname;
    //echo $Full_name; 
  }
  

?>
<!DOCTYPE html>
<html>
<head>
  <link rel="icon" type="image/png" href="https://i.imgur.com/UmY5PqQ.png"/>
  <meta charset="utf-8">
  <title>Online_Library_Web_Page_Header</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;600&display=swap" rel="stylesheet">
<style>
body {
  font-family: Source Sans Pro;
  margin: 0px;
  border: 0px;

}

a {
  color: black;
  text-decoration: none;
}

.grid-container-header {
  display: grid;
  grid-template-columns: auto auto auto;
  background-color: #90EE90; 
}

.grid-container-logo-img {
  height: 100px;
  width:  auto;
}

.grid-container-accounts-link {
  padding: 8px;
}

.grid-container-accounts-link:hover {
  background-color: #00FA9A;
}

.grid-container-header-menu {
  display: grid;
  grid-template-columns: auto auto auto auto auto;
  background-color: #F0FFF0; 
  text-align: center;
  border: solid;
  border-color: black;
  border-bottom: 0px;
  border-left: 0px;
  border-right: 0px;
}

.grid-container-menu-name-a-link:hover {
  background-color: #00FA9A;
}

.grid-container-menu-name-h3 {
  margin-top: 13px;
  margin-bottom: 13px;
}

</style>
</head>
<body>

<!--HEADER GRID-INFO-->
<div class="grid-container-header" style="text-align: center;">
  <div class="grid-container-logo">
    <img style="height: 100px; width: 100px;" src="https://i.imgur.com/UmY5PqQ.png">
  </div>
  <div class="grid-container-name">
    <h1 style="margin-bottom: 0px; margin-top: 15px;"><b>Online Library</b></h1>
    <p>Created by NSBM Green University Students</p>
  </div>
  <div class="grid-container-accounts">

    <?php  
      //php code to set the log in or log out button base on whether the user is signed in or not
      if(empty($_SESSION['loged_in'])) {
        $log_in_out_href_link = 'Log_in_Web_Page.php';
        $log_in_out_h3 = 'Log in';
      } else {
        $log_in_out_href_link = 'Log_out.php';
        $log_in_out_h3 = 'Log out ' . '(' . $Full_name . ')';
      }

    ?>

      <h3><div><a href="Sign_in_Web_Page.php" class="grid-container-accounts-link">Sign in</a></div></h3>
      <h3><div><a href="<?php echo $log_in_out_href_link; ?>" class="grid-container-accounts-link"><?php echo $log_in_out_h3; ?></a></div></h3>
  </div>
</div>

<!--HEADER GRID MENU-->
<div class="grid-container-header-menu">
  <a class="grid-container-menu-name-a-link" href="Home_Page.php">
    <div class="grid-container-menu-name">
      <h3 class="grid-container-menu-name-h3">Home Page</h3>
    </div>
  </a>

  <a href="Book_Catogaries.php" class="grid-container-menu-name-a-link">
    <div class="grid-container-menu-name">
      <h3 class="grid-container-menu-name-h3">Book Catogaries</h3>
    </div>
  </a>

  <a href="" class="grid-container-menu-name-a-link">
    <div class="grid-container-menu-name">
      <h3 class="grid-container-menu-name-h3">menu type one</h3>
    </div>
  </a>

  <a href="" class="grid-container-menu-name-a-link"> 
    <div class="grid-container-menu-name">
      <h3 class="grid-container-menu-name-h3">menu type one</h3>
    </div>
  </a>

  <a href="Add_New_Book.php" class="grid-container-menu-name-a-link">
    <div class="grid-container-menu-name">
      <h3 class="grid-container-menu-name-h3">Add new book</h3>
    </div>
  </a>

</div>



</body>
</html>
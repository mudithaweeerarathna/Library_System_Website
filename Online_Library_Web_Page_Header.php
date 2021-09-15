<?php  

  //creating and check the connection to the database
  $conn = mysqli_connect("localhost", "mmw", "mmw@thinkweb", "library_database");
  
  if(!$conn) {
    echo 'connection error to the database';
  }

  

  //check if the session is empty and if the user is signed in or not
  if(empty($_SESSION)) {
    //$Loged_in_not_div = 'YOU NEED TO LOGIN TO RESERVE BOOKS';
  } else {
    //$Loged_in_not_div = '';

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
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
<style>
body 
{
  font-family: Source Sans Pro;
  margin: 0px;
  border: 0px;

}

a 
{
  color: black;
  text-decoration: none;
}

.grid-container-header 
{
  display: grid;
  grid-template-columns: auto auto auto;
  background-color: #4E4E50;  /*uda paata */
}

.grid-container-logo-img 
{
  height: 100px;
  width:  auto;
}

.grid-container-accounts-link 
{
  
}

.grid-container-accounts-link:hover /*login,sign*/ 
{
  font-weight: bold;
}

.signlogin
{
  margin-top: 22px;
  font-size: 15px;
}

.grid-container-header-menu 
{
  display: grid;
  grid-template-columns: auto auto auto auto;
  background-color: #5D5C61; /*yta paata */
  text-align: center;
  height: 40px;
}

.grid-container-menu-name-a-link:hover {
  background-color: #B1A296; 
}

.grid-container-menu-name-h3 {
  margin-top: 8px;
  font-size: 17px;
}

.span1
{
  font-family: crimson text;
  font-size: 50px;
  font-weight: bold:;
  color: white;
}
.span2
{
  font-family: cambria;
  font-size: 14px;
  color: white;
}

</style>
</head>
<body>

<!--HEADER GRID-INFO-->
<div class="grid-container-header" style="text-align: center;">
  <div class="grid-container-logo">
    <img style="height: 100px; width: 100px; margin-top: 10px;" src="https://i.imgur.com/fCZCCDh.png[/img]">
  </div>

<div class="grid-container-name">
    <p><span class="span1">ONLINE LIBRARY</span><br><span class="span2">Created by NSBM Green University Students</span></p> 
  
  </div>
  <div class="grid-container-accounts">

    <?php  
      //php code to set the log in or log out button base on whether the user is signed in or not
      if(empty($_SESSION['loged_in'])) {
        $log_in_out_href_link = 'Log_in_Web_Page.php';
        $log_in_out_h3 = 'Log in';
      } else {
        $log_in_out_href_link = 'My_Account.php';
        $log_in_out_h3 = 'Log out ' . '(' . $Full_name . ')';
      }

    ?>

      <h3 class="signlogin"><div><a href="Sign_in_Web_Page.php" class="grid-container-accounts-link">Sign in</a></div></h3>

      <h3 class="signlogin"><div><a href="<?php echo $log_in_out_href_link; ?>" class="grid-container-accounts-link"><?php echo $log_in_out_h3; ?></a></div></h3>
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
      <h3 class="grid-container-menu-name-h3">Book Categories</h3>
    </div>
  </a>

  <a href="Order_Online.php" class="grid-container-menu-name-a-link">
    <div class="grid-container-menu-name">
      <h3 class="grid-container-menu-name-h3">Order a Book</h3>
    </div>
  </a>

  <a href="My_Account.php" class="grid-container-menu-name-a-link">
    <div class="grid-container-menu-name">
      <h3 class="grid-container-menu-name-h3">My account</h3>
    </div>
  </a>

</div>



</body>
</html>
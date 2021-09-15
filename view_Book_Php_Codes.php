<?php 

$Book_Id = $_GET['id'];

// Store the file name into variable
$file = 'http://www.africau.edu/images/default/sample.pdf';
  
// Header content type
header('Content-type: application/pdf');
  
header('Content-Disposition: inline; filename="' . $file . '"');
  
header('Content-Transfer-Encoding: binary');
  
header('Accept-Ranges: bytes');
  
// Read the file
@readfile($file);

?>
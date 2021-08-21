<?php 

// Store the file name into variable
$file = 'D:\My document\assignment.pdf';
$filename = 'D:\My document\assignment.pdf';
  
// Header content type
header('Content-type: application/pdf');
  
header('Content-Disposition: inline; filename="' . $filename . '"');
  
header('Content-Transfer-Encoding: binary');
  
header('Accept-Ranges: bytes');
  
// Read the file
@readfile($file);

 ?>
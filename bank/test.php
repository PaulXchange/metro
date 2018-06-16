<?php



// database connection config
$dbHost = 'localhost';
$dbUser = 'tobe';
$dbPass = '';
$dbName = '53bn';


$con = mysqli_connect($dbHost,$dbUser,$dbPass,$dbName);

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  else{
  
  echo "Connected successfully";
  }
?>



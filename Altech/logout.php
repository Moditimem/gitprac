<?php
session_start();
/*include('config1.php');
$timeout = date("H:i:s");
$con=mysqli_connect("$localhost","$my_user","$my_password","$my_db");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

mysqli_query($con,"UPDATE reports 
								SET logout = '$timeout'
								WHERE id = '55'");
mysqli_query($con,"SELECT * FROM reports");								

// Print auto-generated id
$_SESSION['id']=mysqli_insert_id($con); 
$lastid=$_SESSION['id'];
mysqli_close($con);*/




session_destroy();

header("Location: index.php");

exit;
?>
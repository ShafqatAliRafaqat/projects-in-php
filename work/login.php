<?php
include('connection.php');
$USER_NAME =$_POST['username'];
$USER_PASSWORD =$_POST['password'];
$query="INSERT INTO LOGIN (USERNAME,PASSWORD)VALUES ('$USER_NAME','$USER_PASSWORD')";
$runquery=mysqli_query($database,$query);
echo "LOGIN SUCCESSULLY"		
?>
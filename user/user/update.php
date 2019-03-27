<?php
include('connection.php');

$name=$_POST['name'];
$gender=$_POST['gender'];
$username=$_POST['username'];
$password=$_POST['password'];
$type=$_POST['type'];



$update= "UPDATE USER SET 
GENDER='$gender',
USERNAME='$username', 
PASSWORD='$password', 
TYPE='$type'
WHERE NAME='$name'";

$updatequery= mysqli_query($database,$update);
echo "Data is Updated successfully"

?>

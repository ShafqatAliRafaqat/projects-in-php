<?php
include('connection.php');

$name=$_POST['name'];
$gender =$_POST['gender'];
$username =$_POST['username'];
$password =$_POST['password'];
$type =$_POST['type'];

$query= "INSERT INTO USER (NAME,GENDER,USERNAME,PASSWORD,TYPE)
VALUES ('$name','$gender','$username','$password','$type')";
$runquery= mysqli_query($database,$query);
echo "Data is Insert successfully"

?>

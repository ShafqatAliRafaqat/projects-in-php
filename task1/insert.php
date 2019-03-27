<?php
include('connection.php');

$name=$_POST['name'];
$id =$_POST['id'];

$query= "INSERT INTO GROUPNAME (NAME,ID)
VALUES ('$name','$id')";
$runquery= mysqli_query($database,$query);
echo "Data is Insert successfully"

?>

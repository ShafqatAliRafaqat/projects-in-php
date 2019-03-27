<?php
include('connection.php');

$name=$_POST['name'];
$id=$_POST['id'];



$update= "UPDATE GROUPNAME SET 
NAME='$name' 
WHERE ID='$id'";

$updatequery= mysqli_query($database,$update);
echo "Data is Updated successfully"

?>

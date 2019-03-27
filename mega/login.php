<?php
include('connection.php');
$username=$_POST['username'];
$password=$_POST['password'];
$query = mysqli_query($database,"SELECT * FROM USER WHERE USERNAME='$username' and PASSWORD='$password' ");
$row = mysqli_fetch_array($query,MYSQLI_BOTH);
if($row !=''){

header("location:home.php?row=true");

}
else{

header ("location:login1.php?row=false");

}
?>
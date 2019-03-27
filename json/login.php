<?php
include('inc/connection.php');
$username=$_POST['username'];
$password=$_POST['password'];
$query = mysqli_query("SELECT * FROM USER WHERE USERNAME='$username' and PASSWORD='$password' ");
$row = mysqli_fetch_array($database,$query);
if($row !=''){

header("location:login1.php?row=true");

}
else{

header ("location:home.php?row=false");

}
?>
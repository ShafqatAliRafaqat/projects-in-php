<?php
include('inc/connection.php');
$username=$_POST['username'];
$password=$_POST['password'];
$query = mysql_query("SELECT * FROM LOGIN WHERE USERNAME='$username' and PASSWORD='$password' ");
$row = mysql_fetch_array($query);
if($row !=''){

header("location:home.php?row=true");

}
else{

header ("location:login1.php?row=false");

}
?>
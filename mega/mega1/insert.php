<?php
include('conn.php');

$user_name=$_POST['user_name'];
$password =$_POST['password'];

$query= "INSERT INTO LOGIN (USERNAME,PASSWORD)
VALUES ('$user_name', '$password')";
$result= mysqli_query($database,$query);


?>

<script> location.href="fetch.php"; </script>


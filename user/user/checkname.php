<?php
include('connection.php');
$name=$_POST['name'];
$query=("SELECT * FROM USER WHERE NAME = '$name'");
$runquery=mysqli_query($database,$query);
$result=mysqli_fetch_array($runquery,MYSQLI_BOTH);
$data['NAME']=$result['NAME'];
$data['GENDER']=$result['GENDER'];
$data['USERNAME']=$result['USERNAME'];
$data['PASSWORD']=$result['PASSWORD'];
$data['TYPE']=$result['TYPE'];

echo json_encode($data);
?>
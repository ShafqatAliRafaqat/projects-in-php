<?php
include('connection.php');
$PRODUCTCODE=$_POST['pcode'];

echo $PRODUCTCODE;
$query=("SELECT * FROM products WHERE PRODUCTCODE = '$PRODUCTCODE'");
$runquery=mysqli_query($database,$query);
$result=mysqli_fetch_array($runquery,MYSQLI_BOTH);
$data['PRODUCTCODE']=$result['PRODUCTCODE'];
$data['PRODUCTUNIT']=$result['PRODUCTUNIT'];
$data['PRODUCTSALE']=$result['PRODUCTSALE'];
$data['PRODUCTPURCHASE']=$result['PRODUCTPURCHASE'];

echo json_encode($data);
?>
<?php
include('inc/connection.php');

$productcode=$_POST['PRODUCTCODE'];
$productunit =$_POST['PRODUCTUNIT'];
$productsale =$_POST['PRODUCTSALE'];
$productpurchase =$_POST['PRODUCTPURCHASE'];

$query= "INSERT INTO PRODUCT (PRODUCTCODE,PRODUCTUNIT,PRODUCTSALE,PRODUCTPURCHASE)
VALUES ('$productcode', '$productunit','$productsale','$productpurchase')";
$runquery= mysql_query($query);
echo "Data is Insert successfully"

?>

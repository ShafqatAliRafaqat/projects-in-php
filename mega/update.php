<?php
include('connection.php');

$productcode=$_POST['PRODUCTCODE'];
$productunit=$_POST['PRODUCTUNIT'];
$productsale=$_POST['PRODUCTSALE'];
$productpurchase=$_POST['PRODUCTPURCHASE'];

$update= "UPDATE PRODUCT SET 
PRODUCTUNIT='$productunit ',
PRODUCTSALE='$productsale', 
PRODUCTPURCHASE='$productpurchase'
WHERE PRODUCTCODE='$productcode'";

$updatequery= mysqli_query($database,$update);
echo "Data is Updated successfully"

?>

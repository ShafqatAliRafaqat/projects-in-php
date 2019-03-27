<?php 
include('inc/connection.php');

$a= $_POST['p'];

$query = " SELECT * FROM PRODUCT WHERE PRODUCTCODE='$a'";
$runquery = mysql_query($query);
$result = mysql_fetch_array($runquery);
$data['PRODUCTCODE'] = $result['PRODUCTCODE'];
$data['PRODUCTUINT'] = $result['PRODUCTUINT'];
$data['PRODUCTSALE'] = $result['PRODUCTSALE'];
$data['PRODUCTPURCHASE'] = $result['PRODUCTPURCHASE'];

echo json_encode($data);

?>
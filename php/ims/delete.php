<?php
include('inc/connection.php');
$productcode = $_POST['pcode'];
$sql = "DELETE FROM PRODUCT  WHERE PRODUCTCODE = '$productcode'";
$deletequery= mysql_query($sql);
		
		
if($deletequery !=''){
     
  echo "Data have been deleted";
    
}
	
         
    
?>

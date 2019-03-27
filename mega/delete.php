<?php
include('connection.php');
$productcode = $_POST['pcode'];
$sql = "DELETE FROM PRODUCT  WHERE PRODUCTCODE = '$productcode'";
$deletequery= mysqli_query($database,$sql);
		
		
if($deletequery !=''){
     
  echo "Data have been deleted";
    
}
	
         
    
?>

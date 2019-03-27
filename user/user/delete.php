<?php
include('connection.php');
$name = $_POST['name'];
$sql = "DELETE FROM USER  WHERE NAME ='$name'" ;
$deletequery= mysqli_query($database,$sql);
		
		
if($deletequery !=''){echo "Data have been deleted";
    
}
         
    
?>

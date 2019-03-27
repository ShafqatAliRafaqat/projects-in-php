<?php
include('connection.php');
$id = $_POST['id'];
$sql = "DELETE FROM GROUPNAME  WHERE ID ='$id'" ;
$deletequery= mysqli_query($database,$sql);
		
		
if($deletequery !=''){echo "Data have been deleted";
    
}
         
    
?>

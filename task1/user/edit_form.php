<?php 
include('connection.php');
?>
<div class="panel-body">
<?php
$id=$_POST['id'];
$query ="SELECT * FROM GROUPNAME WHERE ID='$id' ";
$result= mysqli_query($database,$query);
$data= mysqli_fetch_array($result,MYSQLI_BOTH);
?>
<form class="form-horizontal"  action="javascript:update_data();" method="post">
<div class="form-group">
<label class="control-label col-sm-3" >NAME:</label>
<div class="col-sm-9">
<input type="text" class="form-control" id="NAME_E" name="name" value="<?php echo $data['NAME'];?>" required >
</div>
</div>



<div class="form-group">
<div class="col-sm-9">
<input type="hidden" class="form-control" id="ID_E" value="<?php echo $data['ID'];?>" >
</div>
</div>

<div class="col-sm-offset-3 col-sm-9">
<button type="submit"  class="btn btn-success">Update</button>
<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
</form>
</div>

<?php 
include('connection.php');
?>
<div class="panel-body">
<?php
$name=$_POST['name'];
$query ="SELECT * FROM USER WHERE NAME='$name' ";
$result= mysqli_query($database,$query);
$data= mysqli_fetch_array($result,MYSQLI_BOTH);

?>
<form class="form-horizontal">
<div class="form-group">
<label class="control-label col-sm-3" >NAME:</label>
<div class="col-sm-9">
<input type="text" readonly class="form-control" value="<?php echo $data['NAME'];?>">
</div>
</div>
<div class="form-group">
<label class="control-label col-sm-3" >NAME:</label>
<div class="col-sm-9">
<input type="text" readonly class="form-control" value="<?php echo $data['GENDER'];?>">
</div>
</div>
<div class="form-group">
<label class="control-label col-sm-3">User Name:</label>
<div class="col-sm-9">
<input type="text" readonly class="form-control" value="<?php echo $data['USERNAME'];?>" required>
</div>
</div>
<div class="form-group">
<label class="control-label col-sm-3">Password:</label>
<div class="col-sm-9">
<input type="text" readonly class="form-control" value="<?php echo $data['PASSWORD'];?>" required>
</div>
</div>
<div class="form-group">
<label class="control-label col-sm-3">Type:</label>
<div class="col-sm-9">
<input type="text" readonly class="form-control" value="<?php echo $data['TYPE'];?>" required>
</div>
</div>

<div class="col-sm-offset-3 col-sm-9">
<button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
</div>
</form>
</div>
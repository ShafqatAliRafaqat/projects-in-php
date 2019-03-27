<?php include('connection.php');?>
<form class="form-horizontal"  action="javascript:insert_record();" method="post">
<?php
$query_max = mysqli_query($database,"SELECT MAX(ID) AS id FROM GROUPNAME");
$result_query_max= mysqli_fetch_array($query_max,MYSQLI_BOTH);
$id=$result_query_max['id'];
$id=$id+1;
?>

<div class="form-group">
<label class="control-label col-sm-3" > Name:</label>
<div class="col-sm-9">
<input type="hidden" class="form-control"  id="id" value="<?php echo $id ?>" >
<input type="text" class="form-control" name="name" id="name" placeholder="Name" required>

</div>
</div>
<div class="col-sm-offset-3 col-sm-9">
<button type="submit" class="btn btn-success">Submit</button>
</div>
</form>
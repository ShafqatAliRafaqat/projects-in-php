<?php 
include('connection.php');
?>
<div class="panel-body">
<?php
$name=$_POST['name'];
$query ="SELECT * FROM USER WHERE NAME='$name' ";
$result= mysqli_query($database,$query);
$data= mysqli_fetch_array($result,MYSQLI_BOTH);
$gender=$data['GENDER'];
$TYPE=$data['TYPE'];
?>
<form class="form-horizontal"  action="javascript:update_data();" method="post">
<div class="form-group">
<label class="control-label col-sm-3" >NAME:</label>
<div class="col-sm-9">
<input type="text" readonly class="form-control" id="NAME_E" name="name" value="<?php echo $data['NAME'];?>">
</div>
</div>
<div class="form-group">
<label class="control-label col-sm-3" > Gender:</label>
<div class="col-sm-9" id="GENDER_E">
<input type="radio" name="gender_e" <?php if($gender=='male') {echo "checked";} ?>  value="male" > Male 
<input type="radio" name="gender_e" <?php if($gender=='female') {echo "checked";}?> value="female"> Female
<input type="radio" name="gender_e" <?php if($gender=='other') {echo "checked";} ?> value="other"> Other
</div>
</div>

<div class="form-group">
<label class="control-label col-sm-3">User Name:</label>
<div class="col-sm-9">
<input type="text" class="form-control" id="USERNAME_E" name="username" value="<?php echo $data['USERNAME'];?>" required>
</div>
</div>
<div class="form-group">
<label class="control-label col-sm-3">Password:</label>
<div class="col-sm-9">
<input type="password" class="form-control" id="PASSWORD_E" name="password" value="<?php echo $data['PASSWORD'];?>" required>
</div>
</div>
<div class="form-group">
<label class="control-label col-sm-3" > Type:</label>
<div class="col-sm-9">
<select id="TYPE_E">
<option>Please Select Type</option>
<option <?php if($TYPE=='user') {echo "selected";} ?> value="user">User</option>
<option <?php if($TYPE=='admin') {echo "selected";} ?> value="admin">Admin</option>
</select>
</div>
</div>

<div class="col-sm-offset-3 col-sm-9">
<button type="submit"  class="btn btn-success">Update</button>
<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
</form>
</div>

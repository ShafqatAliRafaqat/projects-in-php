<form class="form-horizontal"  action="javascript:insert_record();" method="post">

<div class="form-group">
<label class="control-label col-sm-3" > Name:*</label>
<div class="col-sm-9">
<input type="text" class="form-control" name="name" onchange="javascript:checkname();" id="name" placeholder="Name" required>
</div>
</div>

<div class="form-group">
<label class="control-label col-sm-3" > Gender:*</label>
<div class="col-sm-9" id="gender">
<input type="radio" name="gender" value="male" checked > Male 
<input type="radio" name="gender" value="female"> Female
<input type="radio" name="gender" value="other"> Other
</div>
</div>



<div class="form-group">
<label class="control-label col-sm-3" > Username:*</label>
<div class="col-sm-9">
<input type="text" class="form-control" name="username" id="username" placeholder="Username" required>
</div>
</div>

<div class="form-group">
<label class="control-label col-sm-3" > Password:*</label>
<div class="col-sm-9">
<input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
</div>
</div>

<div class="form-group">
<label class="control-label col-sm-3" > Type:*</label>
<div class="col-sm-3">
<select class="state js-states form-control" id="type">
<option></option>
<option value="user">User</option>
<option value="admin">Admin</option>
</select>
</div>
</div>

<div class="col-sm-offset-3 col-sm-9">
<button type="submit" class="btn btn-success">Submit</button>
</div>
</form>
</div>
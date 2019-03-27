<form class="form-horizontal">
<div class="form-group">
<label class="control-label col-sm-3" > Name:</label>
<div class="col-sm-9">
<input type="text" class="form-control" name="name" id="name" placeholder="Name" required>
</div>
</div>

<div class="form-group">
<label class="control-label col-sm-3" > Gender:</label>
<div class="col-sm-9" id="gender">
<input type="radio" name="gender" value="male" checked > Male 
<input type="radio" name="gender" value="female"> Female
<input type="radio" name="gender" value="other"> Other
</div>
</div>



<div class="form-group">
<label class="control-label col-sm-3" > Username:</label>
<div class="col-sm-9">
<input type="text" class="form-control" name="username" id="username" placeholder="Username" required>
</div>
</div>

<div class="form-group">
<label class="control-label col-sm-3" > Password:</label>
<div class="col-sm-9">
<input type="text" class="form-control" name="password" id="password" placeholder="Password" required>
</div>
</div>

<div class="form-group">
<label class="control-label col-sm-3" > Type:</label>
<div class="col-sm-9">
<select id="type">
<option>Please Select Type</option>
<option value="user">User</option>
<option value="admin">Admin</option>
</select>
</div>
</div>


<div class="form-group">
<div class="col-sm-offset-3 col-sm-9">
<input type="button" class="btn btn-success" value="Submit"/> 
</div>
</div>
</form>
</div>
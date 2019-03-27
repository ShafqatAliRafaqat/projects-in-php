<html>
<head>
<title> Data Masking </title>
<script src="assets/jquery-3.2.1.min.js"></script>
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/select2.min.css">
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/dist/sweetalert.min.js"></script>
<script src="assets/js/select2.min.js"></script>
<link rel="stylesheet" type="text/css" href="assets/dist/sweetalert.css">
<link rel="stylesheet" type="text/css" href="assets/css/custom.css">
<script src="assets/js/jquery.masked-input.js"></script>
</head>
<body>

<div class="container">
<div class="row">
<div class="col-sm-offset-2 col-sm-8">
<div class="panel panel-Primary">
<div class="panel-heading"><h4 style="text-align:center"> User Information <h4></div>
<div class="panel-body">

<form class="form-horizontal">
<div class="form-group">
<label class="control-label col-sm-3" > Name:*</label>
<div class="col-sm-9">
<input type="text" class="form-control" name="name" id="name" placeholder="Name" required>
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
<label class="control-label col-sm-3">Phone Number</label>
<div class="control-input col-sm-9">
<input type="text" id="phone" name="phone" class="form-control" data-masked-input="9999-9999999" placeholder="XXXX-XXXXXXX" maxlength="12">
</div>
</div>
<div class="form-group">
<label class="control-label col-sm-3">Cell Number</label>
<div class="control-input col-sm-9">
<input type="text" id="cphone" name="cphone" class="form-control" data-masked-input="(999) 999-9999" placeholder="(XXX) XXX-XXXX" maxlength="14">
</div>
</div>
<div class="form-group">
<label class="control-label col-sm-3">CNIC</label>
<div class="control-input col-sm-9">
<input type="text" id="cnic" name="cnic" class="form-control" data-masked-input="99999-9999999-9" placeholder="XXXXX-XXXXXXX-X" maxlength="13">
</div>
</div>
<div class="form-group">
<label for="dob" class="control-label col-sm-3">Birth Date</label>
<div class="control-input col-sm-9">
<input type="text" id="dob" name="dob" class="form-control" data-masked-input="99/99/9999" placeholder="MM/DD/YYYY" maxlength="10">
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
</div>
</div>
</div>
</div>
</body>
</html>
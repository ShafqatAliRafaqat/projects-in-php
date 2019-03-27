<html>
<head>
<title> Mega Inventory </title>
<script src="assets/jquery-3.2.1.min.js"></script>
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/select2.min.css">
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/dist/sweetalert.min.js"></script>
<script src="assets/js/select2.min.js"></script>
<link rel="stylesheet" type="text/css" href="assets/dist/sweetalert.css">
<link rel="stylesheet" type="text/css" href="assets/css/custom.css">
</head>
<body>

<div class="container">
<div class="row">
<div class="col-sm-offset-2 col-sm-8">
<div class="panel panel-Primary">
<div class="panel-heading"><h4 style="text-align:center"> User Information <h4></div>
<div class="panel-body" id="form_reload">
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
</div>
</div>
</div>
</div>

<div class="container">
<div class="row">
<div class="col-sm-offset-2 col-sm-8">
<div class="panel panel-Primary">
<div class="panel-heading"><h4 style="text-align:center"> User List <h4></div>
<div class="panel-body" id="list_reload">

</div>
</div>

</div>
</div>
</div>

<script>
$(document).ready(function() {
    $('.state').select2({
		 placeholder: "Select a Type",
    allowClear: true
	});
});

window.onload = function()
{$.post('user/list.php',{},function(data){
$('#list_reload',).html(data);
});
}; 
</script>



<!-- Update Modal   -->
<div id="updatedata" class="modal" role="dialog">
<div class="modal-dialog" >

<!-- Modal content-->
<div class="modal-content ">
<div class="modal-header modal-header-primary ">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title" style="text-align:center">Edit</h4>
</div>
<div class="modal-body" id="edit_form">

</div>
</div>
</div>
</div>
<!-- End of Modal -->



<!-- Detail Modal   -->
<div id="detail_data" class="modal" role="dialog">
<div class="modal-dialog">

<!-- Modal content-->
<div class="modal-content">
<div class="modal-header modal-header-primary ">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title" style="text-align:center">Details</h4>
</div>
<div class="modal-body" id="detail_form">

</div>
</div>
</div>
</div>
<!-- End of Modal -->

</body>
<script src="user/ajax.js"></script>
</html>


<?php
include('connection.php');
?>
<html>
<head>
<title> Ajax </title>
<script src="jquery-3.2.1.min.js"></script>
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="js/bootstrap.min.js"></script>
</head>
<body>


<div class="contaier-fluid">
<div class="row" style="margin-top:50px">
<div class="col-sm-offset-4 col-sm-4" id="loginforms">

<div class="panel panel-success">
<div class="panel-heading">LOGIN</div>
<div class="panel-body">
<form id="loginform" action="javascript:savedata();" method="post">
<div class="form-group">
<label class="control-label"> USER NAME: </label>
<input type="text" placeholder="ENTER USERNAME" required class="form-control" name="username" id="username">
</div>
<div class="form-group">
<label class="control-label"> PASSWORD: </label>   
<input type="password" placeholder="ENTER PASSWORD" required class="form-control" name="password" id="password">
</div>
<div class="form-group">
<div class="col-sm-offset-4 col-sm-4">
<input type="submit" value="LOGIN" class="btn btn-success" class="form-control" >
</div> 
</div> 
</form>
</div>
</div>

</div>
</div>
</div>


</body>
<script src="dist/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="dist/sweetalert.css">
<script src="ajax.js"></script>
</html>
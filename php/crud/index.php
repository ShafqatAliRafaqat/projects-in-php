<html>
<head>
<?php
include('connection.php');
?>
<title> LOGIN Form </title>
<script src="assets/jquery-3.2.1.min.js"></script>
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<script src="assets/js/bootstrap.min.js"></script>
</head>
<body>
<!-- main contaier -->

<div class="contaier-fluid">
<div class="row" style="margin-top:50px">
<div class="col-sm-offset-4 col-sm-4" id="">

<!-- Panal -->

<div class="panel panel-success">
<div class="panel-heading">LOGIN</div>

<div class="panel-body">


<form id=""  action="login.php" method="post">

<div class="form-group">
<label class="control-label"> USER NAME: </label>
<input type="text" placeholder="ENTER USERNAME" required class="form-control" name="username" id="username">
</div>


<div class="form-group">
<label class="control-label"> PASSWORD: </label>   
<input type="password" placeholder="ENTER PASSWORD" required class="form-control" name="password" id="password">
</div>

<div class="col-sm-offset-4 col-sm-4">
<input type="submit" value="LOGIN" class="btn btn-success">
</div> 

</form>

</div>
</div>

</div>
</div>
</div>


</body>
<script src="assets/dist/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="assets/dist/sweetalert.css">

</html>
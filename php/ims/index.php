<html>
<head>
<title>Mega System</title>
<?php
include('inc/connection.php');
include('inc/header.php');
?>
</head>

<body class="login" style="background-color:#008080;">
<div class="row">
<div class="main-login col-sm-offset-4 col-sm-4">
<div class="logo">
<h2 style="color:black" >Admin Of Mega Inventory</h2>
</div>

<div class="box-login" style="margin-top:20px">
<h3 style="color:black">Sign in to your account</h3>
<p>Enter your name and password to log in.</p>
<form class="form-login" method="post" action="login.php">
<div class="form-group">
<span class="input-icon">
<input type="text" class="form-control" name="username" Required  id="username" placeholder="Username">
<i class="fa fa-user"></i> </span>
</div>

<div class="form-group">
<span class="input-icon">
<input type="password" class="form-control password" name="password" id="password" placeholder="Password">
<i class="fa fa-lock"></i>
<a class="forgot" href="#">
<p style="color:black">I forgot my password</p>
</a> </span>
</div>

<div class="form-actions">
<label class="checkbox-inline">
<input type="checkbox" class="grey remember" id="remember" name="remember">
Keep me signed in
</label>
<button type="submit" name="adminlogin" class="btn btn-green pull-right">
Login <i class="fa fa-arrow-circle-right"></i>
</button>
</div>

</form>

<div class="copyright">
<p style="color:black">2018 &copy; Mage Inventory System.</p>
</div>

</div>

<div class="box-forgot" style="margin-top:20px">
<h3 style="color:black">Forget Password?</h3>
<p>Enter your e-mail address below to reset your password.</p>
<form class="form-forgot">
<div class="errorHandler alert alert-danger no-display">
<i class="fa fa-remove-sign"></i> You have some form errors. Please check below.
</div>

<div class="form-group">
<span class="input-icon">
<input type="email" class="form-control" name="email" placeholder="Email">
<i class="fa fa-envelope"></i> </span>
</div>
<div class="form-actions">
<a class="btn btn-light-grey go-back">
<i class="fa fa-chevron-circle-left"></i> Log-In
</a>
<button type="submit" class="btn btn-green pull-right">
Submit <i class="fa fa-arrow-circle-right"></i>
</button>
</div>
</form>
<div class="copyright">
2014 &copy; Rapido by cliptheme.
</div>
</div>
</div>


</body>
<script>
jQuery(document).ready(function() {
Main.init();
Login.init();
});
</script>


<?php include('inc/footer.php');?>
</html>
<html>
<head>
<?php
include('connection.php');
error_reporting(0);
?>
<title> Mega Inventory </title>
<link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>

<!-- end: META -->
<!-- start: MAIN CSS -->
<link href='http://fonts.googleapis.com/css?family=Raleway:400,300,500,600,700,200,100,800' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="assets/plugins/iCheck/skins/all.css">
<link rel="stylesheet" href="assets/plugins/perfect-scrollbar/src/perfect-scrollbar.css">
<link rel="stylesheet" href="assets/plugins/animate.css/animate.min.css">
<!-- end: MAIN CSS -->
<!-- start: CSS REQUIRED FOR SUBVIEW CONTENTS -->
<link rel="stylesheet" href="assets/plugins/owl-carousel/owl-carousel/owl.carousel.css">
<link rel="stylesheet" href="assets/plugins/owl-carousel/owl-carousel/owl.theme.css">
<link rel="stylesheet" href="assets/plugins/owl-carousel/owl-carousel/owl.transitions.css">
<link rel="stylesheet" href="assets/plugins/summernote/dist/summernote.css">
<link rel="stylesheet" href="assets/plugins/fullcalendar/fullcalendar/fullcalendar.css">
<link rel="stylesheet" href="assets/plugins/toastr/toastr.min.css">
<link rel="stylesheet" href="assets/plugins/bootstrap-select/bootstrap-select.min.css">
<link rel="stylesheet" href="assets/plugins/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.min.css">
<link rel="stylesheet" href="assets/plugins/DataTables/media/css/DT_bootstrap.css">
<link rel="stylesheet" href="assets/plugins/bootstrap-fileupload/bootstrap-fileupload.min.css">
<link rel="stylesheet" href="assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css">
<!-- end: CSS REQUIRED FOR THIS SUBVIEW CONTENTS-->
<!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
<link rel="stylesheet" href="assets/plugins/weather-icons/css/weather-icons.min.css">
<link rel="stylesheet" href="assets/plugins/nvd3/nv.d3.min.css">
<!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->
<!-- start: CORE CSS -->
<link rel="stylesheet" href="assets/css/styles.css">
<link rel="stylesheet" href="assets/css/styles-responsive.css">
<link rel="stylesheet" href="assets/css/plugins.css">
<link rel="stylesheet" href="assets/css/themes/theme-default.css" type="text/css" id="skin_color">
<link rel="stylesheet" href="assets/css/print.css" type="text/css" media="print"/>
<!-- end: CORE CSS -->
<link rel="shortcut icon" href="favicon.ico" />




<script src="assets/jquery-3.2.1.min.js"></script>
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/dist/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="assets/dist/sweetalert.css">
<script src="ajax.js"></script>

</head>

<body>
<?php
include('nav.php');
?>
<div class="container-fluid">

<div class="row" id="insertform">
<div class="col-sm-6">
<div class="panel panel-info">
<div class="panel-heading">Add product</div>

<div class="panel-body" id="">
<form class="form-horizontal"  action="javascript:savedata();" method="post">
<div class="form-group">
<label class="control-label col-sm-3" for="Productcode">Product Code:</label>
<div class="col-sm-9">
<input type="text" class="form-control" name="PRODUCTCODE" id="PRODUCTCODE" placeholder="Product Code" required>
</div>
</div>
<div class="form-group">
<label class="control-label col-sm-3" for="PRODUCTUNIT">Product Unit:</label>
<div class="col-sm-9">
<input type="text" class="form-control" name="PRODUCTUNIT" id="PRODUCTUNIT" placeholder="Product Unit" required>
</div>
</div>
<div class="form-group">
<label class="control-label col-sm-3" for="PRODUCTSALE">Product Sale:</label>
<div class="col-sm-9">
<input type="text" class="form-control" name="PRODUCTSALE" id="PRODUCTSALE" placeholder="Product Sale" required>
</div>
</div>
<div class="form-group">
<label class="control-label col-sm-3" for="PRODUCTPURCHASE">Product Purchase:</label>
<div class="col-sm-9">
<input type="text" class="form-control" name="PRODUCTPURCHASE" id="PRODUCTPURCHASE" placeholder="Product Purchase" required>
</div>
</div>
<div class="col-sm-offset-3 col-sm-9">
<button type="submit" class="btn btn-success">Submit</button>
</div>
</form>

</div>
</div>
</div>

<div class="col-sm-6" >

<div class="panel panel-info">
<div class="panel-heading">Details of Products </div>
<div class="panel-body" id="fetchdata">
<table class="table">
<thead>
<tr>
<th class="collapse">Product Code</th>
<th>Product Unit</th>
<th>Product Sale</th>
<th>Product Purchase</th>
<th> Action</th>
</tr>
</thead>
<tbody >
<?php
$query ="select * FROM PRODUCT";

$result= mysqli_query($database,$query);
while($data= mysqli_fetch_array($result,MYSQLI_BOTH))
{
?>
<tr>
<td class="collapse"><?php echo $data['PRODUCTCODE'];?></td>
<td><?php echo $data['PRODUCTUNIT'];?></td>
<td><?php echo $data['PRODUCTSALE'];?></td>
<td><?php echo $data['PRODUCTPURCHASE'];?></td>
<td>
<div class="dropdown">
<button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown">Actions</button>
<ul class="dropdown-menu">
<li>

<a type="button"  onclick="details (<?php echo $data['PRODUCTCODE'];?>)"  class="btn btn-info">
<span class="glyphicon glyphicon-eye-open"></span>
</a>

</li>
<li>



<a type="button" onclick= "editdata(<?php echo $data['PRODUCTCODE']; ?>);" class="btn btn-info">
<span class="glyphicon glyphicon-pencil"></span>
</a>
</li>
<li>
<a type="button" onclick= "deletedata(<?php echo $data['PRODUCTCODE'];  ?>);" class="btn btn-info">
<span class="glyphicon glyphicon-trash" ></span>
</a>
</li>
</ul>
</div>
</td>



</tr>
<?php }?>
</tbody>
</table>



<!-- Modal -->
<div id="myModal" class="modal" role="dialog">
<div class="modal-dialog">

<!-- Modal content-->
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title">Edit</h4>
</div>
<div class="modal-body" id="editform">
</div>

</div>

</div>
</div>







</div>
</div>

</div>

</div>
</div>
<?php
$a =$_GET['row'];
if($a == 'true')
{
?>
<script>
swal('Wellcome to Home');
</script>
<?php
}
?>
</body>
<script src="assets/dist/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="assets/dist/sweetalert.css">
<script src="ajax.js"></script>






		<script src="assets/plugins/jQuery/jquery-2.1.1.min.js"></script>
		<!--<![endif]-->
		<script src="assets/plugins/jquery-ui/jquery-ui-1.10.2.custom.min.js"></script>
		<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
		<script src="assets/plugins/blockUI/jquery.blockUI.js"></script>
		<script src="assets/plugins/iCheck/jquery.icheck.min.js"></script>
		<script src="assets/plugins/moment/min/moment.min.js"></script>
		<script src="assets/plugins/perfect-scrollbar/src/jquery.mousewheel.js"></script>
		<script src="assets/plugins/perfect-scrollbar/src/perfect-scrollbar.js"></script>
		<script src="assets/plugins/bootbox/bootbox.min.js"></script>
		<script src="assets/plugins/jquery.scrollTo/jquery.scrollTo.min.js"></script>
		<script src="assets/plugins/ScrollToFixed/jquery-scrolltofixed-min.js"></script>
		<script src="assets/plugins/jquery.appear/jquery.appear.js"></script>
		<script src="assets/plugins/jquery-cookie/jquery.cookie.js"></script>
		<script src="assets/plugins/velocity/jquery.velocity.min.js"></script>
		<script src="assets/plugins/TouchSwipe/jquery.touchSwipe.min.js"></script>
		<!-- end: MAIN JAVASCRIPTS -->
		<!-- start: JAVASCRIPTS REQUIRED FOR SUBVIEW CONTENTS -->
		<script src="assets/plugins/owl-carousel/owl-carousel/owl.carousel.js"></script>
		<script src="assets/plugins/jquery-mockjax/jquery.mockjax.js"></script>
		<script src="assets/plugins/toastr/toastr.js"></script>
		<script src="assets/plugins/bootstrap-modal/js/bootstrap-modal.js"></script>
		<script src="assets/plugins/bootstrap-modal/js/bootstrap-modalmanager.js"></script>
		<script src="assets/plugins/fullcalendar/fullcalendar/fullcalendar.min.js"></script>
		<script src="assets/plugins/bootstrap-switch/dist/js/bootstrap-switch.min.js"></script>
		<script src="assets/plugins/bootstrap-select/bootstrap-select.min.js"></script>
		<script src="assets/plugins/jquery-validation/dist/jquery.validate.min.js"></script>
		<script src="assets/plugins/bootstrap-fileupload/bootstrap-fileupload.min.js"></script>
		<script src="assets/plugins/DataTables/media/js/jquery.dataTables.min.js"></script>
		<script src="assets/plugins/DataTables/media/js/DT_bootstrap.js"></script>
		<script src="assets/plugins/truncate/jquery.truncate.js"></script>
		<script src="assets/plugins/summernote/dist/summernote.min.js"></script>
		<script src="assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
		<script src="assets/js/subview.js"></script>
		<script src="assets/js/subview-examples.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR SUBVIEW CONTENTS -->
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script src="assets/plugins/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
		<script src="assets/plugins/nvd3/lib/d3.v3.js"></script>
		<script src="assets/plugins/nvd3/nv.d3.min.js"></script>
		<script src="assets/plugins/nvd3/src/models/historicalBar.js"></script>
		<script src="assets/plugins/nvd3/src/models/historicalBarChart.js"></script>
		<script src="assets/plugins/nvd3/src/models/stackedArea.js"></script>
		<script src="assets/plugins/nvd3/src/models/stackedAreaChart.js"></script>
		<script src="assets/plugins/jquery.sparkline/jquery.sparkline.js"></script>
		<script src="assets/plugins/easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
		<script src="assets/js/index.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<!-- start: CORE JAVASCRIPTS  -->
		<script src="assets/js/main.js"></script>




</html>
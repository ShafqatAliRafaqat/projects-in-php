<?php
include('connection.php');

?>
<div class="col-sm-6">
<div class="panel panel-info">
<div class="panel-heading">Add product</div>

<div class="panel-body" id="insertform">
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

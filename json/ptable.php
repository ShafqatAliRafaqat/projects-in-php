

<?php
include('inc/connection.php');
?>

<table class="table table-hover table-responsive ">
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
<button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown">Actions
</button>
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



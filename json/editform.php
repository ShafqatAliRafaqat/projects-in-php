<?php 
include('inc/connection.php');
?>
<div class="panel-body">
<?php
$productcode=$_POST['pcode'];
$query ="SELECT * FROM PRODUCT WHERE PRODUCTCODE='$productcode' ";
$result= mysqli_query($database,$query);
While($data= mysqli_fetch_array($result,MYSQLI_BOTH))
{
?>
<form class="form-horizontal"  action="javascript:updatedata();" method="post">
<div class="form-group">
<label class="control-label col-sm-3" >Product Code:</label>
<div class="col-sm-9">
<input type="text" readonly class="form-control" id="PRODUCTCODE_E" name="PRODUCTCODE" value="<?php echo $data['PRODUCTCODE'];?>">
</div>
</div>
<div class="form-group">
<label class="control-label col-sm-3">Product Unit:</label>
<div class="col-sm-9">
<input type="text" class="form-control" name="PRODUCTUNIT" id="PRODUCTUNIT_E" value="<?php echo $data['PRODUCTUNIT'];?>" required>
</div>
</div>
<div class="form-group">
<label class="control-label col-sm-3">Product Sale:</label>
<div class="col-sm-9">
<input type="text" class="form-control" id="PRODUCTSALE_E" name="PRODUCTSALE" value="<?php echo $data['PRODUCTSALE'];?>" required>
</div>
</div>
<div class="form-group">
<label class="control-label col-sm-3">Product Purchase:</label>
<div class="col-sm-9">
<input type="text" class="form-control" id="PRODUCTPURCHASE_E" name="PRODUCTPURCHASE" value="<?php echo $data['PRODUCTPURCHASE'];?>" required>
</div>
</div>
<div class="col-sm-offset-3 col-sm-9">
<button type="submit"  class="btn btn-success">Update</button>
<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
</form>
<?php }?>
</div>

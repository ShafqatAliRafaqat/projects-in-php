<?php
include('inc/connection.php');

?>
<form class="form-horizontal"  action="javascript:savedata();" method="post">
<div class="form-group">
<label class="control-label col-sm-3" ><p style="color:black">Product Code:</p></label>
<div class="col-sm-9">
<input type="text" class="form-control" name="PRODUCTCODE" id="PRODUCTCODE" placeholder="Product Code" required>
</div>
</div>
<div class="form-group">
<label class="control-label col-sm-3" ><p style="color:black">Product Unit:</p></label>
<div class="col-sm-9">
<input type="text" class="form-control" name="PRODUCTUNIT" id="PRODUCTUNIT" placeholder="Product Unit" required>
</div>
</div>
<div class="form-group">
<label class="control-label col-sm-3" ><p style="color:black">Product Sale:</p></label>
<div class="col-sm-9">
<input type="text" class="form-control" name="PRODUCTSALE" id="PRODUCTSALE" placeholder="Product Sale" required>
</div>
</div>
<div class="form-group">
<label class="control-label col-sm-3" ><p style="color:black">Product Purchase:</p></label>
<div class="col-sm-9">
<input type="text" class="form-control" name="PRODUCTPURCHASE" id="PRODUCTPURCHASE" placeholder="Product Purchase" required>
</div>
</div>
<div class="col-sm-offset-3 col-sm-9">
<button type="submit" class="btn btn-success">Submit</button>
</div>
</form>
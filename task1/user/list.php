<?php include ('connection.php'); ?>
<table class="table table-bordered table-striped table-responsive">
<thead>
<tr>
<th>Sr#</th>
<th class="collapse">ID</th>
<th>Name</th>
<th>Action</th>
</tr>
</thead>
<tbody>

<?php
$sr = 1;
$query ="select * FROM GROUPNAME";
$result= mysqli_query($database,$query);
while($data = mysqli_fetch_array($result,MYSQLI_BOTH))
{
?>
<tr>
<td><?php echo $sr; ?></td>
<td class="collapse"><?php echo $data['ID']; ?></td>
<td><?php echo $data['NAME'];?></td>
<td>
<div class="dropdown">
<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"> Action
<span class="caret"></span></button>
<ul class="dropdown-menu">
<li><a href="#" onclick="editdata(<?php echo $data['ID'];?>);" >Edit</a></li>
<li class="divider"></li>
<li><a href="#" onclick="deletedata(<?php echo $data['ID'];?>);" >Delete</a></li>
<li class="divider"></li>
<li><a href="#" onclick="detaildata(<?php echo $data['ID'];?>)">Details</a></li>
</ul>
</div>
</td>
</tr>
<?php $sr++; }?>
</tbody>
</table>



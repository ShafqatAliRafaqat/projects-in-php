<?php include ('connection.php'); ?>
<table class="table table-bordered table-striped table-responsive">
<thead>
<tr>
<th>Sr#</th>
<th>Name</th>
<th>Gender</th>
<th>Username</th>
<th class="collapse">Password</th>
<th>Type</th>
<th>Action</th>
</tr>
</thead>
<tbody>

<?php
$sr = 1;
$query ="select * FROM USER";
$result= mysqli_query($database,$query);
while($data = mysqli_fetch_array($result,MYSQLI_BOTH))
{?>
<tr>
<td><?php echo $sr; ?></td>
<td><?php echo $data['NAME'];?></td>
<td><?php echo $data['GENDER'];?></td>
<td><?php echo $data['USERNAME'];?></td>
<td class="collapse"><?php echo $data['PASSWORD'];?></td>
<td><?php echo $data['TYPE'];?></td>
<td><div class="dropdown">
<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"> Action
<span class="caret"></span></button>
<ul class="dropdown-menu">
<li><a href="#" onclick="editdata('<?php echo $data['NAME'];?>');" >Edit</a></li>
<li class="divider"></li>
<li><a href="#" onclick="deletedata('<?php echo $data['NAME'];?>');" >Delete</a></li>
<li class="divider"></li>
<li><a href="#" onclick="detaildata('<?php echo $data['NAME'];?>')">Details</a></li>
</ul>
</div></td></tr>
<?php $sr++; }?>
</tbody>
</table>



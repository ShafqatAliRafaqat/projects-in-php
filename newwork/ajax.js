function savedata()
{
var C = $('#PCODE').val();
var U = $('#PUNIT').val();
var S = $('#PSALE').val();
var P = $('#PPURCHASE').val();

$.ajax({
type: "POST",
url: "insert.php",
data:
{
PRODUCTCODE: C,
PRODUCTUNIT:U,
PRODUCTSALE:S,
PRODUCTPURCHASE:P
},
success: function(result)
{   
swal(result);
$.post('pform.php', {},function(data){
$('#insertform',).html(data);
});	
}
});
}

function checkpcode()
{
var pcode = $('#PCODE').val();

$.ajax({
type: "GET",
url: "json.php",
data:
{
p:pcode
},
dataType:"JSON",
success: function(data)
{   
$('#PCODE').val(data.PRODUCTCODE);
$('#PUNIT').val(data.PRODUCTUNIT);
$('#PSALE').val(data.PRODUCTSALE);
$('#PPURCHASE').val(data.PRODUCTPURCHASE);
}
});

}



function deletedata(a)
{
var PRODUCTCODE = a;
swal({
  title: "Are you sure?",
  text: "Your will not be able to recover this imaginary file!",
  type: "warning",
  showCancelButton: true,
  confirmButtonClass: "btn-danger",
  confirmButtonText: "Yes, delete it!",
  closeOnConfirm: false
},
function(){ $.ajax({
type: "POST",
url: "delete.php",
data:
{
pcode:PRODUCTCODE 
},
success: function(result)
{   
$.post('ptable.php',{},function(data){
$('#fetchdata').html(data);
});	
}
});
  swal("Deleted!", "Your imaginary file has been deleted.", "success");
});
}


function editdata(a)
{
$('#myModal').modal('show');
$.post('editform.php',{pcode:a},function(data){
$('#editform').html(data);
});	
}


function updatedata()
{
var PRODUCTCODE = $('#PRODUCTCODE_E').val();
var PRODUCTUNIT = $('#PRODUCTUNIT_E').val();
var PRODUCTSALE = $('#PRODUCTSALE_E').val();
var PRODUCTPURCHASE = $('#PRODUCTPURCHASE_E').val();
$.ajax({
type: "POST",
url: "update.php",
data:
{
PRODUCTCODE:PRODUCTCODE ,
PRODUCTUNIT:PRODUCTUNIT,
PRODUCTSALE:PRODUCTSALE,
PRODUCTPURCHASE:PRODUCTPURCHASE
},
success: function(result)
{   
swal(result);

$.post('ptable.php',{},function(data){
$('#fetchdata').html(data);
});	

$('#myModal').modal('hide');
}
});
}


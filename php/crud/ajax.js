function savedata()
{
var PRODUCTCODE = $('#PRODUCTCODE').val();
var PRODUCTUNIT = $('#PRODUCTUNIT').val();
var PRODUCTSALE = $('#PRODUCTSALE').val();
var PRODUCTPURCHASE = $('#PRODUCTPURCHASE').val();

$.ajax({
type: "POST",
url: "insert.php",
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
$.post('pform.php', {},function(data){
$('#insertform',).html(data);
fetch();
});	

}
});
}



function fetch()
{
$.post('ptable.php',{},function(data){
$('#ptable').html(data);
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
$('#ptable').html(data);
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

$.post('home.php',{},function(data){
$('#ptable').html(data);

});	


}
});
}




function detaildata(a)
{
$('#detail_data').modal('show');
$.post('user/details_of_user.php',{id:a},function(data){
$('#detail_form').html(data);
});	
}

function editdata(a)
{
$('#updatedata').modal('show');
$.post('user/edit_form.php',{id:a},function(data){
$('#edit_form').html(data);
});	
}

function update_data()
{
var name = $('#NAME_E').val();
var id = $('#ID_E').val();

$.ajax({
type: "POST",
url: "user/update.php",
data:
{
name:name ,
id:id
},
success: function(result)
{   swal(result);
$.post('pform.php', {},function(data){
$('#form_reload',).html(data);
});	
$.post('user/list.php', {},function(data){
$('#list_reload',).html(data);
$('#updatedata').modal('hide');

});

}
});
}





function deletedata(a)
{
var id = a;
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
url: "user/delete.php",
data:
{
id:id 
},
success: function(result)
{   
$.post('user/list.php',{},function(data){
$('#list_reload').html(data);
});
$.post('pform.php', {},function(data){
$('#form_reload',).html(data);
});	
}
});
  swal("Deleted!", "Your imaginary file has been deleted.", "success");
});
}




function insert_record()
{
var name =$('#name').val();
var id =$('#id').val();
$.ajax({
type: "POST",
url: "insert.php",
data:
{
name:name ,
id:id
},
success: function(result)
{   
swal(result);
$.post('pform.php', {},function(data){
$('#form_reload',).html(data);
});	
$.post('user/list.php', {},function(data){
$('#list_reload',).html(data);
});	
}
});
}

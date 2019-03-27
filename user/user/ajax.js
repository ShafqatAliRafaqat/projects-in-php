function checkname()
{
var name = $('#name').val();
$.ajax({
type: "GET",
url: "checkname.php",
data:
{
name:name
},
dataType:"JSON",
success: function(data)
{   
$('#name').val(data.NAME);
$('#gender').val(data.GENDER);
$('#username').val(data.USERNAME);
$('#password').val(data.PASSWORD);
$('#type').val(data.TYPE);
}
});

}




function detaildata(a)
{
$('#detail_data').modal('show');
$.post('user/details_of_user.php',{name:a},function(data){
$('#detail_form').html(data);
});	
}

function editdata(a)
{
$('#updatedata').modal('show');
$.post('user/edit_form.php',{name:a},function(data){
$('#edit_form').html(data);
});	
}

function update_data()
{
var name = $('#NAME_E').val();
var gender = document.querySelector('input[name = gender_e]:checked').value;
var username = $('#USERNAME_E').val();
var password = $('#PASSWORD_E').val();
var type = $('#TYPE_E').val();

$.ajax({
type: "POST",
url: "user/update.php",
data:
{
name:name ,
gender:gender,
username:username,
password:password,
type:type
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
var name = a;
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
name:name 
},
success: function(result)
{   
$.post('user/list.php',{},function(data){
$('#list_reload').html(data);
});	
}
});
  swal("Deleted!", "Your imaginary file has been deleted.", "success");
});
}




function insert_record()
{
var name =$('#name').val();
var gender = document.querySelector('input[name = gender]:checked').value;
var username =$('#username').val();
var password =$('#password').val();
var typed=$('#type').val();
$.ajax({
type: "POST",
url: "insert.php",
data:
{
name:name ,
gender:gender,
username:username,
password:password,
typed:typed
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

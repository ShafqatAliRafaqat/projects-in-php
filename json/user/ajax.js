function insert_record()
{
var name =$('#name').val();
var gender =$('#gender').val();
var username =$('#username').val();
var password =$('#password').val();
var type=$('#type').val();
$.ajax({
type:"POST",
url:"insert.php",
data{
name = name,
gender = gender,
username = username,
password = password,
type = type
},
success: function(result)
{   
swal(result);
$.post('pform.php', {},function(data){
$('#form_reload',).html(data);
});	
}
})
}
function savedata()
{
var username = $('#username').val();
var password = $('#password').val();
$('#loginforms').html('<h1 align="center"><img src="Loading _save.gif"/></h1>');
$.ajax({
type: "POST",
url: "login.php",
data:
{
username: username,
password: password
},
success: function(result)
{   
swal(result);
$.post('loginform.php',{},function(data){
$('#loginforms').html(data);
});	
}
});
}

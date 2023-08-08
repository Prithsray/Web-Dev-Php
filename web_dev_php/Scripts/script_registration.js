
$(document).ready(function() {

$('#register_submit').on('click', function(){

var register_form = $('#registerform').serialize();
$.ajax({
   type: 'POST',
   url:'Registration.php',
   data:register_form,
   success: function(response){
alert(response);
if(response=="Registered Successfully"){
   window.location="../auth/login_form.php";
}
else if(response== "You already have An Account"){
   window.location="../auth/login_form.php";
}
else if(response=="Register Again"){
   window.location="../auth/Register_form.php";

}
   }
});



});
});
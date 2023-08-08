
$(document).ready(function() {

    $('#login_submit').on('click', function(){
    
    var login_form = $('#loginform').serialize();
    $.ajax({
       type: 'POST',
       url:'Login.php',
       data:login_form,
       success: function(response){
        
        alert(response);

        if(response==="Login Success"){
            window.location="../index.php";
        }
        else if(response === "Login Success..... Ridirecting to dashboard"){
            window.location="../Dashboard.php";

        }
        else if(response=== "Invalid Password"){
            window.location="../auth/Login_Form.php";
        }
        else {
            window.location="../auth/Login_Form.php";
        }

       }
    });
    
    
    
    });
    });
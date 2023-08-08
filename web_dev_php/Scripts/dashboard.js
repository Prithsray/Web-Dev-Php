const text= "dashboard";

document.title = text;

const nbar = document.querySelector(".lists");
const arrowbar = document.querySelector(".drpdwn_btn");

arrowbar.addEventListener('click',()=>{
    const visi = nbar.getAttribute('data-visible');
    arrowbar.classList.toggle("click");
    if (visi === "false") {
        nbar.setAttribute('data-visible', true);
        arrowbar.setAttribute('aria-expanded', true);
    }else{
        nbar.setAttribute('data-visible', false);
        arrowbar.setAttribute('aria-expanded', false);
    }
});

document.onclick = function (e) {
    if (!nbar.contains(e.target) && !arrowbar.contains(e.target)) {
        arrowbar.classList.remove("click");
        nbar.setAttribute('data-visible', false);
        arrowbar.setAttribute('aria-expanded', false);
    }
};

//Profile Picture

$(document).on("change", ".uploadProfileInput", function () {
    var triggerInput = this;
    var currentImg = $(this).closest(".pic-holder").find(".pic").attr("src");
    var holder = $(this).closest(".pic-holder");
    var wrapper = $(this).closest(".profile-pic-wrapper");
    $(wrapper).find('[role="alert"]').remove();
    triggerInput.blur();
    var files = !!this.files ? this.files : [];
    if (!files.length || !window.FileReader) {
      return;
    }
    if (/^image/.test(files[0].type)) {
      // only image file
      var reader = new FileReader(); // instance of the FileReader
      reader.readAsDataURL(files[0]); // read the local file
  
      reader.onloadend = function () {
        $(holder).addClass("uploadInProgress");
        $(holder).find(".pic").attr("src", this.result);
        $(holder).append(
          '<div class="upload-loader"><div class="spinner-border text-primary" role="status"><span class="sr-only">Loading...</span></div></div>'
        );
  
        // Dummy timeout; call API or AJAX below
        setTimeout(() => {
          $(holder).removeClass("uploadInProgress");
          $(holder).find(".upload-loader").remove();
          // If upload successful
          if (Math.random() < 0.9) {
            $(wrapper).append(
              '<div class="snackbar show" role="alert"><i class="fa fa-check-circle text-success"></i> Profile image updated successfully</div>'
            );
  
            // Clear input after upload
            $(triggerInput).val("");
  
            setTimeout(() => {
              $(wrapper).find('[role="alert"]').remove();
            }, 3000);
          } else {
            $(holder).find(".pic").attr("src", currentImg);
            $(wrapper).append(
              '<div class="snackbar show" role="alert"><i class="fa fa-times-circle text-danger"></i> There is an error while uploading! Please try again later.</div>'
            );
  
            // Clear input after upload
            $(triggerInput).val("");
            setTimeout(() => {
              $(wrapper).find('[role="alert"]').remove();
            }, 3000);
          }
        }, 1500);
      };
    } else {
      $(wrapper).append(
        '<div class="alert alert-danger d-inline-block p-2 small" role="alert">Please choose the valid image.</div>'
      );
      setTimeout(() => {
        $(wrapper).find('role="alert"').remove();
      }, 3000);
    }
  });
  





// User Details 
$(document).ready(function(){



$("#user_detaiL_submit").on('click', function(){

  if($.trim($("#email_id").val())==''){
   alert("Please Enter Your Email Id");
   $('#email_id').css('border-color', 'red');
   return false;
 }else{$('#email_id').css('border-color', 'green');}


 if($.trim($("#working_domain").val())==''){
  alert("Please Enter Your Working Domain");
  $('#working_domain').css('border-color', 'red');
  return false;
}else{$('#working_domain').css('border-color', 'green');}

if($.trim($("#project_details").val())==''){
 alert("Please Enter Your Project Details");
 $('#project_details').css('border-color', 'red');
 return false;
}else{$('#project_details').css('border-color', 'green');}


 if($.trim($("#college_university_details").val())==''){
  alert("Please Enter Your College University Details");
  $('#college_university_details').css('border-color', 'red');
  return false;
}else{$('#college_university_details').css('border-color', 'green');}

if($.trim($("#school_details").val())==''){
 alert("Please Enter Your School Details");
 $('#school_details').css('border-color', 'red');
 return false;
}else{$('#school_details').css('border-color', 'green');}


 if($.trim($("#skill").val())==''){
  alert("Please Enter Your Skills");
  $('#skill').css('border-color', 'red');
  return false;
}else{$('#skill').css('border-color', 'green');}


 if($.trim($("#linkdin_link").val())==''){
  alert("Please Enter Your LinkedIn Profile Link");
  $('#linkdin_link').css('border-color', 'red');
  return false;
}else{$('#linkdin_link').css('border-color', 'green');}

if($.trim($("#github_link").val())==''){
 alert("Please Enter Your Github Profile Link");
 $('#github_link').css('border-color', 'red');
 return false;
}else{$('#github_link').css('border-color', 'green');}

var user_detail_form= $('#user_details').serialize();

$.ajax({
  type : 'POST',
  url:'dashboard_user_details.php',
  data: user_detail_form,
  datatype :'json',
  success: function(response){
    alert(response);

  
  }
});

});
});
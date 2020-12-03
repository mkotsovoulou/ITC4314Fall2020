/*alert("JS RUNNING");*/
$(document).ready(function() {
 $('#registrationForm').submit(function (e) {
   //prevent the default form submit operation since we will manually submit the form using ajax
   e.preventDefault();
   
   var password1 = $('#password1').val();
   var password2 = $('#password2').val();

   if (password1 != password2) {
     $('#flashMessage').removeClass('alert-success').addClass('alert-danger');
     $('#flashMessage').html("Your passwords do not match");
     $('#flashMessage').slideDown(1000).delay(1000).slideUp();
   } 
   else {
     var username = $('#username').val();
     var email = $('#email').val();
 
    $.ajax({
      type: "POST",
      url: "insert_user.php", //call php to insert the data in the db
      data: { 
            p_username: username,
            p_password: password1,
            p_email : email
            }
    }).done(function (msg) { //the msg is returned in a json encoded array from the php
           // console.log(JSON.stringify(msg));
            if (!msg.status){
                 $('#flashMessage').removeClass('alert-success').addClass('alert-danger');
            } else {
                 $('#flashMessage').removeClass('alert-danger').addClass('alert-success');
                //CLEAR THE FIELDS 
                 $('#username').val("");
                 $('#password1').val("");
                 $('#password2').val("");
                 $('#email').val("");
//    OR REDIRECT TO ANOTHER PAGE!!!
//                	setTimeout(function() {
// 					              window.top.location = "index.php";
// 				          }, 1500);
              
            }
        $('#flashMessage').html(msg.text);
        $('#flashMessage').slideDown(1000).delay(1000).slideUp();
     }); // end of done in ajax call
   } //else from the validate password
 }); // end of registration form submit
});
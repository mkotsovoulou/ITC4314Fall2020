/*alert("JS RUNNING");*/
$(document).ready(function() {
 $('#registrationForm').submit(function (e) {
   e.preventDefault(); //We will handle the form submit and not the form
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
     /* Insert the data into the database  if everything ok --> call insert_user.php */
    $.ajax({
      type: "POST",
      url: "insert_user.php",
      data: { 
            p_username: username,
            p_password: password1,
            p_email : email
            }
    }).done(function (msg) { //the msg is returned a json encoded array from the php
            if (!msg[0]){
                 $('#flashMessage').removeClass('alert-success').addClass('alert-danger');
                 $('#flashMessage').html(msg[1]);
                 $('#flashMessage').slideDown(1000).delay(1000).slideUp();
            } else {
                 $('#flashMessage').removeClass('alert-danger').addClass('alert-success');
                 $('#flashMessage').html(msg[1]);
                 $('#flashMessage').slideDown(1000).delay(1000).slideUp();
            }
     }); // end of done in ajax call
   } //else from the validate password
   
 }); // end of registration form submit
});
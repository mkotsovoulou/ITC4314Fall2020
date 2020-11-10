/*alert("JS RUNNING");*/
$(document).ready(function() {
 $('#registrationForm').submit(function (e) {
   e.preventDefault(); 
   var password1 = $('#password1').val();
   var password2 = $('#password2').val();
   console.log (" in registration submit function");
   console.log(password1);
   console.log(password2);
   
   if (password1 != password2) {
     $('#flashMessage').removeClass('alert-success').addClass('alert-danger');
     $('#flashMessage').html("Your passwords do not match");
     $('#flashMessage').slideDown(1000).delay(1000).slideUp();
   } 
   else {
     
     /* Insert the data into the database  if everything ok */
   
     $('#flashMessage').removeClass('alert-danger').addClass('alert-success');
     $('#flashMessage').html("You have been registered!");
     $('#flashMessage').slideDown(1000).delay(1000).slideUp();
   }
 });
});
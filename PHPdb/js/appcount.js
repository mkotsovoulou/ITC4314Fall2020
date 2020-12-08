$(document).ready(function() {
 $('#tForm').submit(function (e) {
   //prevent the default form submit operation since we will manually submit the form using ajax
    e.preventDefault();
    var username = $('#username').val();
    $.ajax({
      type: "POST",
      url: "usercount.php", //call php to insert the data in the db
      data: {
            p_username: username
            }
     }).done(function (msg) { //the msg is returned in a json encoded array from the php
           // console.log(JSON.stringify(msg));
           $('#flashMessage').removeClass('alert-danger').addClass('alert-success');
           $('#flashMessage').html(msg.text);
           $('#flashMessage').slideDown(1000).delay(1000).slideUp();
            //CLEAR THE FIELDS 
           $('#username').val("");
     }); // end of done in ajax call
 }); // end of registration form submit
});
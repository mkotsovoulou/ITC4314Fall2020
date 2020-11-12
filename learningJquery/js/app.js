$('#flashMessage').hide();


function isEmail(email) {
   if (email.includes('@'))
      return true;
   else
     return false;
 }

$('#previewButton').click( function (e) {
        $('#flashMessage').text("Your changes have been saved");
       //$('#messages').text("validating html form rules").delay(1000);
       const email = $('#blogUser').val();
       console.log(isEmail(email));

       if (!isEmail(email))  {
         $('#flashMessage').text("Not a valid email address");
         $('#flashMessage').fadeIn(1000).delay(1000).fadeOut(1000);
         $('blogUser').focus();
       }

       title = $('#blogTitleInput').val();
       $('#blogTitlePreview').text(title);

       content = $('#blogContentInput').val();
       $('#blogContentPreview').text(content);

       $('#flashMessage').fadeIn(1000).delay(1000).fadeOut(1000);
       $('#flashMessage').toggleClass('capitalLetters');
    
});

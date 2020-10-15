/*console.log("executing");
document.getElementById("flashMessage").style.display = "none";*/
$('#flashMessage').hide();

$('#previewButton').click( function () {
       title = $('#blogTitleInput').val();
       $('#blogTitlePreview').text(title);

       content = $('#blogContentInput').val();
       $('#blogContentPreview').text(content);

       $('#flashMessage').fadeIn(1000).delay(1000).fadeOut(1000);
       $('#flashMessage').toggleClass('capitalLetters');
});



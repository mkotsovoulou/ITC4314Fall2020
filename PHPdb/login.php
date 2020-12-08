<?php
session_start();
?>
<html>
  <head>
    <title>Login</title>
  </head>

  <h1>
     HELLO 
  </h1>
  <?php 
 
  if (empty($_SESSION['username'])) { ?>
  <h1>
     Login
  </h1>

  <form id="loginForm">
    <label for="username">Username:</label>
    <input type="text" name="username" id="username"> <br>
      <label for="password">Password:</label>
    <input type="password" name="password" id="password"> <br>
    <input type="submit" name="submit" value="Login">
  </form>
  
  <div id="status">
    
  </div>
  <?php 
  }
  else { 
        echo '<h1>' . $_SESSION['username']. ' You are logged in... </h1>'; ?>
  <a href="clearSession.php"> Click here to logout</a>
<?php  } ?>
  
  
   <script src="https://code.jquery.com/jquery-3.5.1.min.js"
            integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
            crossorigin="anonymous"></script>
  
<script>
$(document).ready(function() {
 $('#loginForm').submit(function (e) {
   //prevent the default form submit operation since we will manually submit the form using ajax
   e.preventDefault();
     var username = $('#username').val();
     var password = $('#password').val();
     console.log(username + " " + password);
     $.ajax({
      type: "POST",
      url: "checklogin_ajax.php", //call php to insert the data in the db
      data: {
            p_username: username,
            p_password: password
            }
    }).done(function (message) { //the msg is returned in a json encoded array from the php
           console.log(JSON.stringify(message));
           $('#status').html(message['text']);
     });
 });
});
    
</script>
</html>
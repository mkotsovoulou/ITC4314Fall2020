<?php session_start();?>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="author" content="M.K.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo Session Variables</title>
  </head>
  <body>
    <h1>
     Setting a session variable!
    </h1>
    <?php
    var_dump($_SESSION); ?>
    <form action="setSession.php" method="post">
      <input type="text" name="favColor" id="favColor" placeholde="Type your favourite color...">
      <input type="submit">
    </form>
    
    <a href="checkSession.php"> Click here to check if the session variable exists...</a>
    <a href="clearSession.php"> Click here to close your session</a>
  </body>
</html>
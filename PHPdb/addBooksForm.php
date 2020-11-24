<?php
//To hide this page from non admin users uncomment this code2020#
//
//session_start();
//if ($_SESSION["Admin"]!='Y') {
//header('Location:displaybooks.php');
//}
?>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="author" content="M.K.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Books</title>
  </head>
  <body>
    <h1> Add new Books</h1>
    <h2>
      
    </h2>
    <form method="POST" action="addBooks.php">
      <input type="text" id="p_title" name="p_title" placeholder="Book title..."> <br>
          <input type="text" id="p_quantity" name="p_quantity" placeholder="Book quantity..."><br>
          <input type="text" id="p_description" name="p_description" placeholder="Book description..."><br>
          <input type="text" id="p_price" name="p_price" placeholder="Book price..."><br>
          <input type="text" id="p_image" name="p_image" placeholder="Book image filename"><br>
      <input type="submit">
    </form>
    <div id="message">
    </div>
  </body>
</html>
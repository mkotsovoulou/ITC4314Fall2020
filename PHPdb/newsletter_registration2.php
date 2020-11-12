<html>
  <head>
    <meta charset="UTF-8">
    <meta name="author" content="M.K.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Newsletter Registration</title>
  </head>
  <body>
    <h1>
      Newsletter registration 2
    </h1>
    <h2>
      HTML form AND PHP in the same page
    </h2>
    <form method="POST" action="#">
      <label for="p_email">Email:</label>
      <input type="email" id="p_email" name="p_email">
      <input type="submit">
    </form>
    <div id="message">
      <?php
      $message = Array();
      if ($_POST['p_email']) { 
        include ('db.php');
        $email = $_POST['p_email'];
        $results = $db->prepare('insert into newsletter (email) values (?)');
        $results->bindValue(1, $email);
        try {
          $results->execute();
          $message["status"]=1;
          $message["text"]="You have been registered...";
        } catch (PDOException $e) {
          if ($e->getCode() == 23000) {
            $message["status"]=0; 
            $message["text"]= "This email is already registered.";
          }
          else {
            $message["status"]= $e->getCode(); 
            $message["text"]= $e->getMessage();
          }
        }
        echo $message["text"];
      }
      ?>
    </div>
  </body>
</html>
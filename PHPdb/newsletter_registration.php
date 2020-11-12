<?php
//If this php is called from the form then the POST package will have data else it will be redirected to the form
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
      $message["status"]= $e->getCode(); 
      $message["text"]= $e->getMessage();
  }
  echo $message["text"];
  echo json_encode($message);
} else {
  echo "Use the <a href='newsletter_registration_form.php'> email registration form </a> to register!";
  exit;
}
?>

<meta http-equiv="refresh" content="2;url=newsletter_registration_form.php">

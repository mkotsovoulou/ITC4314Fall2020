<?php
include ('db.php');
header("Content-Type: application/json");
$username = $_POST['p_username'];
$message = Array();

try {
  $results = $db->prepare("insert into usercount (username, countt) values (?,?)");
  $results->bindValue(1,$username);
  $results->bindValue(2,1);
  $results->execute();
  $message["text"]=$username. " Inserted and Counted!!!";
} catch (PDOException $e) {
   $results = $db->prepare("update usercount set countt = countt+1 where username = ?");
   $results->bindValue(1,$username);
   $results->execute();
   $message["text"]=$username. " Counted!!!";
}

echo json_encode($message);
?>
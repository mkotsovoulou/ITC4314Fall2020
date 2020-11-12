<?php
include ('db.php');
header("Content-Type: application/json");

$username = $_POST['p_username'];
$password = $_POST['p_password'];
$email = $_POST['p_email']; 

//$username = 'mairakot';
//$password = '123';
//$email = 'mairak@acg.edu';

$password=password_hash($password, PASSWORD_DEFAULT);

/* this is the SQL we want to execute:
 *  insert into users (username, password, email) values (? , ? , ?) */
$results = $db->prepare("insert into users (username, password, email) values (?,?,?)");
$results->bindValue(1,$username);
$results->bindValue(2,$password);
$results->bindValue(3,$email);
$message = Array();
try {
  $results->execute();
  $message["status"]=true;
  $message["text"]="Registration success";
} catch (PDOException $e) {
  $message["status"]=false;
  $message["text"]="Username or email already taken"; 
}

echo json_encode($message);
?>
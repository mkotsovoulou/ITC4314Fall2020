<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include ('db.php');

header("Content-Type: application/json");

$msg = array();

$username = $_POST['p_username'];
$password = $_POST['p_password'];
$email = $_POST['p_email']; 

/*$username = 'mairak';
$password = '123';
$email = 'maira@acg.edu';*/

/* insert into users (username, password, email) values (? , ? , ?) */
$password=password_hash($password, PASSWORD_DEFAULT);

$results = $db->prepare("insert into users (username, password, email) values (?,?,?)");
$results->bindValue(1,$username);
$results->bindValue(2,$password);
$results->bindValue(3,$email);

try {
  $results->execute();
  $msg[0]=true;
  $msg[1]="Registration success";
} catch (Exception $e) {
  $msg[0]=false;
  $msg[1]="Username or email already taken"; 
}
  
echo json_encode($msg);
?>
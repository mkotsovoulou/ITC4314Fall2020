<?php
session_start();
$u = $_POST['username'];
$p = $_POST['password'];

//Perform some string sanitazion

include ('db.php');
$query = $db->prepare("select * from users where username = ?");
$query->bindValue(1,$u);
$query->execute();
$results = $query->fetchALL(PDO::FETCH_ASSOC);

$dbpassword=$results[0]["password"]; //This is required when the password is HASHED in the database

$message = Array();


if (count($results)==1 && password_verify($p, $dbpassword))
{
   $_SESSION['username'] = $u;
   $message["status"]=true;
   $message["text"]="Login success!";
} else {
   $message["status"]=false;
   $message["text"]="Invalid Username or Password...";
}

echo '<meta http-equiv="refresh" content="2;url=login.php" />';
?>




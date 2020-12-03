<?php
include ('db.php');
header("Content-Type: application/json");
$username = $_POST['p_username'];
$message = Array();




$message["text"]=$username. " Counted!!!";
echo json_encode($message);
?>
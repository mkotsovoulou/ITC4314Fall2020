<?php
session_start();
$color=$_POST["favColor"];
setcookie("Color", $color , time() + (86400 * 30), "/");

$_SESSION["favColor"]=$color;
echo "your favorite color will remain in this wesite until you logoff!";

?>

<a href="checkSession.php"> Click here to check if the session variable exists...</a>
<a href="clearSession.php"> Click here to close your session</a>

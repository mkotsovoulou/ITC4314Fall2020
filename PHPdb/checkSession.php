<?php
session_start();
var_dump($_SESSION);
if (isset($_SESSION["favColor"]))
  echo 'Your favorite color is ' . $_SESSION["favColor"];
else
  echo 'You have not set a color is your session!';


if (isset($_COOKIE["color"])) {
echo "Cookie value found and is: " . $_COOKIE["color"];
}
?>
  <a href="clearSession.php"> Click here to close your session</a>
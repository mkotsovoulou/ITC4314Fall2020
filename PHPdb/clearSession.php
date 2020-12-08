<?php 
session_start();
session_destroy();
session_unset();
echo "Your session is now cleared!!!";
//header('Location:sessions1.php');
?>
<meta http-equiv="refresh" content="0;url=login.php" />


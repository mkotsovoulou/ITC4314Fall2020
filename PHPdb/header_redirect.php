<?php
header("refresh:2; url=newsletter_registration_form.php");
exit;

//OR WE CAN DO IT WITH JAVASCRIPT
ob_start();
echo "<script>document.location.href='http://yoururlhere?var=yourvar'</script>";
ob_end_flush(); 

?>
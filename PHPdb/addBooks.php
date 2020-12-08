<?php
 
if($_POST['p_title']) {
    include ('db.php');
    $title = $_POST['p_title'];
    $quantity = $_POST['p_quantity'];
    $description = $_POST['p_description']; 
    $price = $_POST['p_price']; 
    $imagename = $_FILES['p_image']['name'];
    $imagetemp = $_FILES['p_image']['tmp_name'];
    $imagesize = $_FILES['p_image']['size'];
    $imagetype = $_FILES['p_image']['type'];
    $imageContents = file_get_contents($imagetemp);
    
    $target_dir = "images/";
    $target_filename = $target_dir . $imagename;
  
    echo $title . ", " . $quantity . ", " . $description . ", " . $price . ", " . $imagename . "<br>";
    echo 'image size:'. $imagesize . '<br>';
    echo 'image type:'. $imagetype . '<br>';
    echo 'temp name:'. $imagetemp . '<br>';
    
    $displayImage = base64_encode($imageContents);
    $src = "data:". $imagetype . ';base64,'.$displayImage;
     echo '<img src="' . $src. '">';
  
   if (move_uploaded_file($_FILES["p_image"]["tmp_name"], $target_filename))
      echo 'File uploaded';
   else echo 'error uploading';
  
  $insert_statement='insert into books (title, quantity, description, price, image_filename) values (?,?,?,?,?)';
  $query=$db->prepare($insert_statement);
  $query->bindValue(1, $title);
  $query->bindValue(2, $quantity);
  $query->bindValue(3, $description);
  $query->bindValue(4, $price);
  $query->bindValue(5, $imagename);
  $query->execute();
  echo 'Book inserted!';
  
}

?>
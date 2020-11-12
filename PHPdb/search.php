<?php
include ('db.php');
header("Content-Type: application/json");
//$search_arr is an array of arrays and that is why we use: $search_arr[] = array() to insert rows
$search_arr = array();  

$searchText = $_GET['term'];
$searchText = '%'. $searchText . '%';

if(!empty($searchText)) {
  $query = $db->prepare('select * from books where title like ?');
  $query->bindValue(1, $searchText);
  $query->execute();
  $results = $query->fetchALL(PDO::FETCH_ASSOC); 

   foreach($results as $row) {
     //label tag is mandatory for the autocomplete  to work
    $search_arr[] = array('id'=>$row['id'], 'label' => $row['title'], 'price'=>$row['price'], 'image'=>$row['image_filename']);
    } 
}
echo json_encode($search_arr);
?>


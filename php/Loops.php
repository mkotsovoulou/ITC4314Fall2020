<h1>
  Arrays and Loops
</h1>

<?php 
$sum=0;
$grades = array(54,34,98,65,78,43,56,32,99,66,45,87,56);
echo '<table>';
for ($i = 0 ; $i < count($grades); $i++) {
  echo '<tr><td>'. $grades[$i] . '</td></tr>'; 
  $sum+=$grades[$i];
}
echo '</table>';
echo 'The sum of grades is ' . $sum . '</br>';
echo 'The average grade is ' . $sum/count($grades);

?>


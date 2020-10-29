<?php
$emp1 = array('Name'=>'Maira', 'Salary'=>100, 'Department'=> 'IT');
$emp2 = array('Name'=>'Jes', 'Salary'=>200, 'Department'=> 'IT');

//foreach field in emp1 array
foreach ($emp1 as $key=>$value) { 
  echo $key . ' ' . $value . '<br />'; 
}
$emp2["Salary"]=500;
foreach ($emp2 as $key=>$value) { 
  echo $value . '<br />'; 
}
?>


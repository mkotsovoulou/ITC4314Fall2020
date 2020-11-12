<h1> Demo </h1>
<?php
  $space = '&nbsp;';
  $enter = '</br>';
  $x=1;
  //Use var_dump to debug your code!
  //var_dump($x);
  //var_dump($space);

  $name = "Maira";
  $needaBreak = TRUE;
  echo '<h1> Hello ' . $name  . '</h1>';
  echo 1+3;
  echo $enter;
  echo gettype($x); 
  echo $space;
  echo gettype($name);
  echo $space;
  $needaBreak = FALSE;

   echo "Do I need a break? ";

  if ($needaBreak)
    echo "Yes I need one!";
 else 
   echo "No, I am fine!";

   $namesArray = array("Chris", "Mike", "Amy", "Jane"); 
    echo $enter;
    echo $namesArray[3];
    $namesArray[4]= "Maira";
    echo $namesArray[4];
    echo $enter;
    //var_dump($namesArray);
    echo 'Before the function ' . $x;
    echo add(5,10);
 

function add($a, $b) {
  global $x;
  $x = 20;
  return $a + $b + $x;
}
  echo 'After the function ' . $x;

?>

<p> dsadsa </p>
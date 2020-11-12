<html>
  <head>
    <title> students</title>
  </head>
  <body>
    <h1>
       List of students
    </h1>
    
    <?php 
       include "db.php";
       $query = $db->query("select * from student");
       $results = $query->fetchALL(PDO::FETCH_ASSOC);
      // var_dump($results);
      echo '<ol>';
    foreach ($results as $row)
    {
      echo '<li>'. $row['first_name'] . " " . $row['last_name']. '</li>';
    }
     echo '</ol>';
    ?>
    
  </body>
</html>
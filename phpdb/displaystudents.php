<html>
  <head>
    <title> students</title>
  </head>
  <body>
    <h1>
       list of students
    </h1>
    
    <?php 
       include "db.php";
       $query = $db->query("select * from student");
       $results = $query->fetchALL(PDO::FETCH_ASSOC);
       var_dump($results);
    ?>
    
  </body>
</html>
<html>
  <head>
    <title> students</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="display-1">
      List of Books Now
    </h1>

    <?php
    include "db.php";
    $query = $db->query("select * from books");
    $results = $query->fetchALL(PDO::FETCH_ASSOC); 
    ?>

    <table class="table">
      <thead class="thead-light">
        <tr><th> id </th><th> book title </th><th> quantity </th><th>price</th><th> description </th><th> date added </th><th> book cover</th></tr>
      <tbody>

        <?php    
        foreach($results as $row)
        {
          echo "<tr><td>".$row['id']."</td><td>".$row['title']."</td><td>".$row['quantity']." items</td><td>".$row['price']." $</td><td>".$row['description']."</td><td>".$row['date_added']."</td><td><img src='images/".$row['image_filename']."' width='50px'></td></tr>";
        } ?>
      </tbody>
    </table>  

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>
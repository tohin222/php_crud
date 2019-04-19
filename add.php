<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $hostname ="localhost";
    $username ="root";
    $password ="";
    $database ="sk_crud";
    $connection = mysqli_connect($hostname,$username,$password,$database);
    if ($_POST['name']!= "") {
      $name =  $_POST['name'];
      echo "<br>";
      $email =  $_POST['email'];
       $insert_query = "insert into users(name,email) value('$name','$email')";
       mysqli_query($connection,$insert_query);
    }
    else {
      echo "nai";
    }



     ?>

     <?php
     $hostname ="localhost";
     $username ="root";
     $password ="";
     $database ="sk_crud";
     $connection = mysqli_connect($hostname,$username,$password,$database);

     $query_string = "select * from users";

     $results = mysqli_query($connection,$query_string);
echo "<br>";

     foreach ($results as $result) {
      // echo "string";
         //print_r($result['name']);


         echo "<br>";
         ?>
 <table border="2">
           <tr>
             <td><?= $result['id'] ?> </td>
             <td><?=$result['name']?></td>
             <td><?=$result['email']?></td>
             <td> <a href="#">Edit</a> | <a href="#">delete</a> </td>
           </tr>
<table>
         <?php

     }

     if (mysqli_connect_errno()) {
       echo "error ace";
     }
      ?>
  </body>
</html>

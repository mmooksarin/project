<?php
require('dbconnect.php');

    $type_garbage = $_POST['type_garbage'];
    $name = $_POST['price_unit'];


    $sql = "INSERT INTO price_garbage (type_garbage,price_unit)
      VALUES('$type_garbage','$price_unit')";



    if (mysqli_query($conn, $sql)) {
       echo "Record successfully";
       header('Location: garbageprice1.php');
   } else {
       echo "Error deleteing record: " . mysqli_error($conn);
   }

    header('Location: garbageprice1.php');
    exit();

 ?>

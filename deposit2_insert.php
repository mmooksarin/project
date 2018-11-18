<?php
require('dbconnect.php');

    $account_number = $_POST['account_number'];
    $name = $_POST['name'];
    $cash = $_POST['cash'];
    $date = $_POST['date'];
    $note = $_POST['note'];


    $sql = "INSERT INTO deposit_cash (account_number,name,cash,date,note)
      VALUES('$account_number','$name','$cash','$date','$note')";



    if (mysqli_query($conn, $sql)) {
       echo "Record successfully";
       header('Location: deposit_cshow.php');
   } else {
       echo "Error deleteing record: " . mysqli_error($conn);
   }

    header('Location: deposit_cshow.php');
    exit();

 ?>

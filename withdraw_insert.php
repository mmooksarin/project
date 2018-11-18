<?php
require('dbconnect.php');

    $account_number = $_POST['account_number'];
    $name = $_POST['name'];
    $amount = $_POST['amount'];
    $date = $_POST['date'];
    $note = $_POST['note'];


    $sql = "INSERT INTO withdraw (account_number,name,amount,date,note)
      VALUES('$account_number','$name','$amount','$date','$note')";



    if (mysqli_query($conn, $sql)) {
       echo "Record successfully";
       header('Location: withdraw_show.php');
   } else {
       echo "Error deleteing record:" . mysqli_error($conn);
   }

    header('Location: withdraw_show.php');
    exit();

 ?>

<?php
require('dbconnect.php');

    $account_number = $_POST['account_number'];
    $name = $_POST['name'];
    $cargb = $_POST['cargb'];
    $catergory_gb = $_POST['catergory_gb'];
    $amount = $_POST['amount'];
    $date = $_POST['date'];
    $note = $_POST['note'];


    $sql = "INSERT INTO deposit_gb (account_number,name,cargb,catergory_gb,amount,date,note)
      VALUES('$account_number','$name','$cargb','$catergory_gb','$amount','$date','$note')";



    if (mysqli_query($conn, $sql)) {
       echo "Record successfully";
       header('Location: deposit_gbshow.php');
   } else {
       echo "Error deleteing record: " . mysqli_error($conn);
   }

    header('Location: deposit_gbshow.php');
    exit();

 ?>

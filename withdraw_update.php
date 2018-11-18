<?php
require('dbconnect.php');
session_start();

    $id_withdraw = $_GET['id_withdraw'];
    $account_number = $_POST['account_number'];
    $name = $_POST['name'];
    $amount = $_POST['amount'];
    $date = $_POST['date'];
    $note = $_POST['note'];

  // เก็บข้อมูลอื่นๆลงฐานข้อมูล

            $sql = "UPDATE withdraw set account_number = '$account_number'name = '$name',amount = '$amount',date = '$date',note = '$note', where id_withdraw = '$id_withdraw'";

    if (mysqli_query($conn, $sql)) {
       echo "Record successfully";
       header('Location: withdraw_show.php');
       unset($_SESSION['id_withdraw']);
   } else {
       echo "Error deleting record: " . mysqli_error($conn);
   }

    header('Location: withdraw_show.php');
    exit();

 ?>

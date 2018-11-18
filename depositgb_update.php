<?php
require('dbconnect.php');
session_start();

    $id_deposit_gb = $_GET['id_deposit_gb'];
    $account_number = $_POST['account_number'];
    $name = $_POST['name'];
    $cargb = $_POST['cargb'];
    $catergory_gb = $_POST['catergory_gb'];
    $amount = $_POST['amount'];
    $date = $_POST['date'];
    $note = $_POST['note'];

  // เก็บข้อมูลอื่นๆลงฐานข้อมูล

            $sql = "UPDATE deposit_gb set account_number = '$account_number', name = '$name',cargb = '$cargb',catergory_gb = '$catergory_gb',amount = '$amount',date = '$date',note = '$note', where id_deposit_gb = '$id_deposit_gb'";

    if (mysqli_query($conn, $sql)) {
       echo "Record successfully";
       header('Location: deposit_gbshow.php');
       unset($_SESSION['id_deposit_gb']);
   } else {
       echo "Error deleting record: " . mysqli_error($conn);
   }

    header('Location: deposit_gbshow.php');
    exit();

 ?>

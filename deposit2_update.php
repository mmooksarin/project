<?php
require('dbconnect.php');
session_start();

    $id_deposit_cash = $_GET['id_deposit_cash'];
    $account_number = $_POST['account_number'];
    $name = $_POST['name'];
    $cash = $_POST['cash'];
    $date = $_POST['date'];
    $note = $_POST['note'];

  // เก็บข้อมูลอื่นๆลงฐานข้อมูล

            $sql = "UPDATE deposit_cash set name = '$name',cash = '$cash',date = '$date',note = '$note', where id_deposit_cash = '$id_deposit_cash'";

    if (mysqli_query($conn, $sql)) {
       echo "อัพเดตข้อมูลสำเร็จ";
       header('Location: deposit_cshow.php');
       unset($_SESSION['id_deposit_cash']);
   } else {
       echo "Error deleting record: " . mysqli_error($conn);
   }

    header('Location: deposit_cshow.php');
    exit();

 ?>

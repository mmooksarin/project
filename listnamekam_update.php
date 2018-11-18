<?php
require('dbconnect.php');
session_start();

    $id_kam = $_POST['id_kam'];
    $name = $_POST['name'];
    $status = $_POST['status'];
    $address = $_POST['address'];
    $tel = $_POST['tel'];

  // เก็บข้อมูลอื่นๆลงฐานข้อมูล

            $sql = "UPDATE fn_kam set id_kam = '$id_kam',name = '$name',status = '$status',address = '$address',tel = '$tel',where id_kam = '$id_kam'";

    if (mysqli_query($conn, $sql)) {
       echo "Record successfully";
       header('Location: fn_kam.php');
       unset($_SESSION['id_kam']);
   } else {
       echo "Error deleting record: " . mysqli_error($conn);
   }

    header('Location: listnamekammakan.php');
    exit();

 ?>

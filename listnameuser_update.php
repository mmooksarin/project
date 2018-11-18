<?php
require('dbconnect.php');
session_start();

    $account_number = $_POST['account_number'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $moo = $_POST['moo'];
    $id_card = $_POST['id_card'];
    $note = $_POST['note'];

  // เก็บข้อมูลอื่นๆลงฐานข้อมูล

            $sql = "UPDATE formlistnameuser set account_number = account_number = '$account_number',name ='$name',address = '$address',moo = '$moo',id_card = '$id_card',note = '$note', where id_listname_user = '$id_listname_user'";

    if (mysqli_query($conn, $sql)) {
       echo "Record successfully";
       header('Location: formlistnameuser.php');
       unset($_SESSION['id_listname_user']);
   } else {
       echo "Error deleting record: " . mysqli_error($conn);
   }

    header('Location: listnameuser.php');
    exit();

 ?>

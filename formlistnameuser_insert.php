<?php
require('dbconnect.php');

$account_number = $_POST['account_number'];
$name = $_POST['name'];
$address = $_POST['address'];
$moo = $_POST['moo'];
$id_card = $_POST['id_card'];
$note = $_POST['note'];



    $sql = "INSERT INTO formlistnameuser (account_number,name,address,moo,id_card,note)
      VALUES('$account_number','$name','$address','$moo','$id_card','$note')";



    if (mysqli_query($conn, $sql)) {
       echo "Record successfully";
       header('Location: listnameuser.php');
   } else {
       echo "Error deleteing record: " . mysqli_error($conn);
   }

    header('Location: listnameuser.php');
    exit();

 ?>

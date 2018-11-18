<?php
require('dbconnect.php');

$account_number = $_POST['account_number'];
$name = $_POST['name'];
$status = $_POST['status'];
$address = $_POST['address'];
$tel = $_POST['tel'];

    $sql = "INSERT INTO fn_kam (account_number,name,status,address,tel)
      VALUES('$account_number,'$name','$status','$address','$tel')";



    if (mysqli_query($conn, $sql)) {
       echo "Record successfully";
       header('Location: listnamekammakan.php');
   } else {
       echo "Error deleteing record: " . mysqli_error($conn);
   }

    header('Location: listnamekammakan.php');
    exit();

 ?>

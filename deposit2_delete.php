<?php
require('dbconnect.php');

if (isset($_GET['id_deposit_cash'])){
	$id_deposit_cash = $_GET['id_deposit_cash'];
	$sql = "DELETE from deposit_cash where id_deposit_cash = '$id_deposit_cash'";
	if ($conn->query($sql) === TRUE) {
		echo "ลบข้อมูลสำเร็จ";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	header('Location: deposit_cshow.php');
	exit();
}
?>

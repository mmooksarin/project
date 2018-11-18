<?php
require('dbconnect.php');

if (isset($_GET['id_deposit_gb'])){
	$id_deposit_gb = $_GET['id_deposit_gb'];
	$sql = "DELETE from deposit_gb where id_deposit_gb = '$id_deposit_gb'";
	if ($conn->query($sql) === TRUE) {
		echo "ลบข้อมูลสำเร็จ";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	header('Location: deposit_gbshow.php');
	exit();
}
?>

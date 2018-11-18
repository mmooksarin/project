<?php
require('dbconnect.php');

if (isset($_GET['id_withdraw'])){
	$id_withdraw = $_GET['id_withdraw'];
	$sql = "DELETE from withdraw where id_withdraw = '$id_withdraw'";
	if ($conn->query($sql) === TRUE) {
		echo "ลบข้อมูลสำเร็จ";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	header('Location: withdraw_show.php');
	exit();
}
?>

<?php
require('dbconnect.php');

if (isset($_GET['id_kam'])){
	$number_user = $_GET['id_kam'];
	$sql = "DELETE from fn_kam where id_kam = '$id_kam'";
	if ($conn->query($sql) === TRUE) {
		echo "ลบข้อมูลสำเร็จ";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	header('Location: listnamekammakan.php');
	exit();
}
?>

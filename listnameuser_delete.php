<?php
require('dbconnect.php');

if (isset($_GET['id_listname_user'])){
	$id_listname_user = $_GET['id_listname_user'];
	$sql = "DELETE from formlistnameuser where id_listname_user = 'id_listname_user'";
	if ($conn->query($sql) === TRUE) {
		echo "ลบข้อมูลสำเร็จ";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	header('Location: listnameuser.php');
	exit();
}
?>

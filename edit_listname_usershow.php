<meta charset="UTF-8">
<?php
//1. เชื่อมต่อ database:
include('dbconnect.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
    $id_listname_user = $_GET['id_listname_user'];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  $account_number = $_POST['account_number'];
  $name = $_POST['name'];
  $address = $_POST['address'];
  $moo = $_POST['moo'];
  $id_card = $_POST['id_card'];
  $note = $_POST['note'];

//ทำการปรับปรุงข้อมูลที่จะแก้ไขลงใน database

	$sql = "UPDATE formlistnameuser SET
      account_number = '$account_number' ,
      name='$name' ,
      address = '$address',
      moo = '$moo',
      id_card = '$id_card',
      note = '$note'
      WHERE id_listname_user = ".id_listname_user." ";
      $result = mysqli_query($conn, $sql) or die ("Error ");

}

	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('บันทึกข้อมูลสำเร็จ');";
	echo "window.location = 'listnameuser.php'; ";
	echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('บันทึกข้อมูลไม่สำเร็จ โปรดลองอีกครั้ง');";
	echo "</script>";
}

mysqli_close($conn);
?>

-<meta charset="UTF-8">
<?php
//1. เชื่อมต่อ database:
include('dbconnect.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
    $id_kam = $_GET['id_kam'];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  $account_number = $_POST['account_number'];
  $name = $_POST['name'];
  $status = $_POST['status'];
  $address = $_POST['address'];
  $tel = $_POST['tel'];

//ทำการปรับปรุงข้อมูลที่จะแก้ไขลงใน database

	$sql = "UPDATE fn_kam SET
      account_number = '$account_number' ,
      name='$name' ,
      status = '$status',
      address = '$address',
      tel = '$tel',
      WHERE id_kam = ".id_kam." ";
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

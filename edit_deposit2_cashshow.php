<meta charset="UTF-8">
<?php
//1. เชื่อมต่อ database:
include('dbconnect.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
    $id_deposit_gb = $_GET['id_deposit_cash'];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  $account_number = $_POST['account_number'];
  $name = $_POST['name'];
  $cash = $_POST['cash'];
  $date = $_POST['date'];
  $note = $_POST['note'];

//ทำการปรับปรุงข้อมูลที่จะแก้ไขลงใน database

	$sql = "UPDATE deposit_cash SET
      account_number = '$account_number' ,
      name='$name' ,
      casht = '$cash',
      date = '$date',
      note = '$note'
      WHERE id_deposit_cash = ".$id_deposit_cash." ";
      $result = mysqli_query($conn, $sql) or die ("Error ");

}

	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('บันทึกข้อมูลสำเร็จ');";
	echo "window.location = 'deposit_cshow.php'; ";
	echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('บันทึกข้อมูลไม่สำเร็จ โปรดลองอีกครั้ง');";
	echo "</script>";
}

mysqli_close($conn);
?>

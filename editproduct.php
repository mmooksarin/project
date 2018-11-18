<?php
  require('dbconnect.php');
  session_start();
  $p_id = $_GET['p_id'];
  $_SESSION['p_id'] = $p_id;
?>
<!DOCTYPE html>
<html>
<title>โชคอนันต์วัสดุก่อสร้าง</title>
<?php

require('dbconnect.php');

?>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
</style>
<body class="w3-light-grey w3-content" style="max-width:1600px">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container">
    <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
      <i class="fa fa-remove"></i>
    </a>
    <img src="si/user.png" style="width:45%;" class="w3-round"><br><br>
    <h4><b>ADMIN</b></h4>

  </div>
  <div class="w3-bar-block">
    <a href="index3.html" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>จัดการสินค้า</a>
    <a href="t3.html" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>โปรโมชั่น</a>
    <a href="indexx.html" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="glyphicon glyphicon-home fa-fw w3-margin-right"></i>หน้าหลัก</a>
  </div>

</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">

  <!-- Header -->
  <header id="portfolio">
    <a href="#"><img src="si/user.png" style="width:65px;" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
    <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
    <div class="w3-container">
    <h1><b>จัดการสินค้า</b></h1>
  </header>
  <?php
    $sql = "SELECT * from product as p inner join product_category as pc on p.p_categoryID = pc.p_categoryID where p_id = '$p_id'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
  ?>
 <form action="product_update.php" method="post" enctype="multipart/form-data" id="form1">
 <fieldset>
   <legend>แก้ไขสินค้า</legend>
          <div class="form-group">
           <label>รหัสสินค้า: </label>
           <input name="p_numproduct" type="text" id="p_numproduct" size="40" class="form-control" value="<?php echo $row['p_numproduct']; ?>">
          </div>
         <label>ประเภทสินค้า: </label>
         <select name="p_category" id="p_category" class="form-control">;
           <option value="<?php echo $row['p_categoryID']; ?>">ประเภทสินค้าเดิม-><?php echo $row['p_categoryName']; ?></option>
           <option value="1">ปูน หิน ทราย</option>
           <option value="2">อิฐต่างๆ</option>
           <option value="3">ตะปู ดอกสว่าน</option>
           <option value="4">ผนัง เพดาน</option>
           <option value="5">ท่อและอุปกรณ์พีวีซี</option>
           <option value="6">เคมีภัณฑ์ สี</option>
           <option value="7">ฮาร์ดแวร์</option>
           <option value="8">เครื่องมือช่าง</option>
           <option value="9">ประตู หน้าต่าง</option>
           <option value="10">สุขภัณฑ์</option>
           <option value="11">อุปกรณ์ไฟฟ้า</option>
         </select>
         <br>
         <div class="form-group">
           <label>ชื่อสินค้า: </label>
           <input name="p_name" type="text" id="p_name" size="40" class="form-control" value="<?php echo $row['p_name']; ?>">
         </div>
        <div class="form-group">
          <label>รายละเอียดสินค้า: </label>
          <textarea name="p_detail" class="form-control"><?php echo $row['p_detail']; ?></textarea>
        </div>
        <div class="form-group">
         <label>ราคาสินค้า: </label>
         <input name="p_price" type="text" id="p_price" size="40" class="form-control" value="<?php echo $row['p_price']; ?>">
        </div>
         <br>
         รูปสินค้าเดิม : <img src="images/product/<?php echo $row['p_image']; ?>" width="50" height="50"><br><br>
        <label>รูปภาพสินค้า</label>
         <input type="file" name="image" id="p_image" />
         <br>
 </fieldset>
 <br>

 &nbsp&nbsp&nbsp<input class="btn btn-danger" type="submit" value="บันทึก">&nbsp&nbsp
 <a href="index.html"class="btn btn-default">ยกเลิก</a>
 </form>
 <br>

  <div class="w3-black w3-center w3-padding-24">ร้านโชคอนันต์</div>

<!-- End page content -->
</div>
<br>

<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}

function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
</script>

</body>
</html>

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
body,h1,h2,h3,h4,h5,h6 {font-family: "Supermarket"}
</style>
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>
<body class="w3-light-grey w3-content" style="max-width:1600px">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container">
    <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
      <i class="fa fa-remove"></i>
    </a>
    <img src="images/user.png" style="width:45%;" class="w3-round"><br><br>
    <h4><b>ADMIN</b></h4>

  </div>
  <div class="w3-bar-block">
    <a href="index3.html" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>จัดการสินค้า</a>
    <a href="t3.html" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>โปรโมชั่น</a>
    <a href="index2.html" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="glyphicon glyphicon-home fa-fw w3-margin-right"></i>หน้าหลัก</a>
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

 <form action="product_insert.php" method="post" enctype="multipart/form-data" id="form1">
 <fieldset>
   <legend>เพิ่มสินค้า</legend>
         <label>ประเภทสินค้า: </label>
         <select name="p_category" id="p_category" class="form-control">;
           <?php $sql = "SELECT * FROM product_category";
             $result = $conn->query($sql);
             while ($row = $result->fetch_assoc()) {
           ?>
           <option value="<?php echo $row['p_categoryID']; ?>"><?php echo $row['p_categoryName']; ?></option>
          <?php } ?>
         </select>
         <br>
         <div class="form-group">
           <label>ชื่อสินค้า: </label>
           <input name="p_name" type="text" id="p_name" size="40" class="form-control">
         </div>
        <div class="form-group">
          <label>รายละเอียดสินค้า: </label>
          <textarea name="p_detail" class="form-control"></textarea>
        </div>
        <div class="form-inline">
          <div class="form-group">
           <label>หน่วยสินค้าที่ต้องการแสดง : </label>
           <select name="name_unit" id="name_unit" class="form-control">
             <option value="">---เลือกหน่วยสินค้า---</option>
             <?php $sql = "SELECT * FROM unit";
               $result = $conn->query($sql);
               while ($row = $result->fetch_assoc()) {
             ?>
             <option value="<?php echo $row['id_unit']; ?>"><?php echo $row['name_unit']; ?></option>
           <?php } ?>
           </select>
         </div>
          <div class="form-group">
           <label>ราคาสินค้า: </label>
           <input name="p_price" type="text" id="p_price" size="20" class="form-control"> บาท
         </div>
      </div><br>
        <div class="form-group">
          <label>เพิ่มราคาต่อหน่วย: </label>
         <select name="menu1" onChange="MM_jumpMenu('parent',this,0)" class="form-control" style="width: 10%;">
         <?php
         for($i=1;$i<=10;$i++)
         {
           if($_GET["Line"] == $i)
           {
             $sel = "selected";
           }
           else
           {
             $sel = "";
           }
         ?>
           <option value="<?php echo $_SERVER["PHP_SELF"];?>?Line=<?php echo $i;?>" <?php echo $sel;?>><?php echo $i;?></option>
         <?php
         }
         ?>
         </select>
        </div>
        <?php
          $line = $_GET["Line"];
          if($line == 0){$line=1;}
          for($i=1;$i<=$line;$i++)
          {
        ?>
        <div class="form-inline">
          <div class="form-group">
           <label>หน่วยสินค้า: </label>
           <select name="cal_name_unit<?php echo $i;?>" id="name_unit" class="form-control">
             <option value="">---เลือกหน่วยสินค้า---</option>
             <?php $sql = "SELECT * FROM unit";
               $result = $conn->query($sql);
               while ($row = $result->fetch_assoc()) {
             ?>
             <option value="<?php echo $row['id_unit']; ?>"><?php echo $row['name_unit']; ?></option>
           <?php } ?>
           </select>
         </div>
          <div class="form-group">
           <label>ราคาสินค้า: </label>
           <input name="cal_p_price<?php echo $i;?>" type="text" id="p_price" size="20" class="form-control"> บาท
         </div>
           <input type="hidden" name="hdnLine" value="<?php echo $i;?>">
      </div><br>
      <?php
      }
      ?>

         <br>
        <label>รูปภาพสินค้า</label>
         <input type="file" name="image" id="p_image" />
         <br>
 </fieldset>
 <br>

 &nbsp&nbsp&nbsp<input class="btn btn-danger" type="submit" value="บันทึก">&nbsp&nbsp
 <a href="index2.html"class="btn btn-default">ยกเลิก</a>
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

<?php
  require('dbconnect.php');
  session_start();
  $id_deposit_cash = $_GET['id_deposit_cash'];
  $_SESSION['id_deposit_cash'] = $id_deposit_cash;
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ธนาคารขยะบ้านคลองแม่ระกา</title>
    <?php
      require('dbconnect.php')
      ?>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>

    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="indexadmin1.php">admin</a>
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"><a href="login.html" class="btn btn-danger square-btn-adjust">ออกจากระบบ</a> </div>
        </nav>
        <!-- /. NAV TOP  -->
             <nav class="navbar-default navbar-side" role="navigation">
         <div class="sidebar-collapse">
             <ul class="nav" id="main-menu">
     <li class="text-center">
                 <img src="assets/img/find_user.png" class="user-image img-responsive"/>
       </li>
       <li>
           <a  href="indexadmin.html"><i class="fa fa-dashboard fa-3x"></i>หน้าหลัก</a>
       </li>
       <li>
           <a class="active-menu" href="#"><i class="fa fa-sitemap fa-3x"></i>ฝาก<span class="fa arrow"></span></a>
           <ul class="nav nav-second-level">
               <li>
                   <a href="deposit1.php">ขยะ</a>
               </li>
               <li>
                   <a href="deposit2.php">เงินสด</a>
               </li>
               <li>
                   <a href="deposit_gbshow.php">ข้อมูลการฝากขยะ</a>
               </li>
               <li>
                   <a class="active-menu" href="deposit_cshow.php">ข้อมูลการฝากเงิน</a>
               </li>
           </ul>

       </li>
       <li>
           <a href="#"><i class="fa fa-sitemap fa-3x"></i>ถอน<span class="fa arrow"></span></a>
           <ul class="nav nav-second-level">
               <li>
                   <a href="withdraw.php">ถอนเงิน</a>
               </li>
               <li>
                   <a href="withdraw_show.php">ข้อมูลการถอนเงิน</a>
               </li>
           </ul>

       </li>
       <li>
         <a href="namemember.php"><i class="fa fa-desktop fa-3x"></i>รายชื่อ</a>
       </li>
         <li>
            <a  href="accountbook1.php"><i class="fa fa-desktop fa-3x"></i>บัญชีคุมรายการฝากถอน</a>
        </li>
       <li  >
           <a   href="projectcost1.php"><i class="fa fa-bar-chart-o fa-3x"></i>บันทึกการดำเนินโครงการ</a>
       </li>
         <li  >
           <a  href="garbageprice1.php"><i class="fa fa-table fa-3x"></i>ราคาขยะ</a>
       </li>
       <li  >
           <a  href="garbagecalender1.php"><i class="fa fa-edit fa-3x"></i>ปฏิทินวันขายขยะ</a>
       </li>

                     </ul>

         </div>

     </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <center>
                       <h2>แก้ไขข้อมูลการถอน</h2>

                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
                 <div class="section group">
                 <div class="panel-body">
                   <?php
    $sql = "SELECT * from deposit_cash WHERE id_deposit_cash = '".$_GET["id_deposit_cash"]."' ";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
  ?>
                <form method="post" action="edit_deposit2_cashshow.php?id_deposit_cash=<?php echo $row['id_deposit_cash'] ?>" id="form2">

                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="account_number">เลขที่สมาชิก</label>
                      <input type="text" class="form-control" name="account_number" id="account_number"value="<?php echo $row['account_number']; ?>">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="name">ชื่อ-นามสกุล</label>
                      <input type="text" class="form-control" name="name" id="name" value="<?php echo $row['name']; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-group col-md-4">
                      <label for="cash">จำนวน</label>
                      <input type="text" class="form-control" name="cash" id="cash" value="<?php echo $row['cash']; ?>">
                    </div>
                    </div>
                <div class="form-group col-md-12">
                  <label for="date">วันที่:</label>
                  <input type="text" class="form-control" name="date" id="date" value="<?php echo $row['date']; ?>" readonly>
                </div>
                <div class="form-group col-md-12">
                  <label for="exampleFormControlTextarea1">หมายเหตุ</label>
                  <textarea class="form-control" name="note" id="note" rows="3" ><?php echo $row['note']; ?></textarea>
                </div>


                         <br>
                         <br>
                           &nbsp&nbsp&nbsp<input class="btn btn-danger" type="submit" value="บันทึก">&nbsp&nbsp
                           <a href="deposit_cshow.php"class="btn btn-default">ยกเลิก</a>
</form>

    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
   </div>
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>


</body>
</html>

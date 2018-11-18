<?php
  require('dbconnect.php');
  session_start();
  $number_user = $_GET['number_user'];
  $_SESSION['number_user'] = $number_user;
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
              <a class="active-menu"  href="indexadmin.html"><i class="fa fa-dashboard fa-3x"></i>หน้าหลัก</a>
          </li>
           <li>
              <a  href="deposit1.php"><i class="fa fa-desktop fa-3x"></i>ฝากถอน</a>
          </li>
          <li>
              <a href="#"><i class="fa fa-sitemap fa-3x"></i>แก้ไขรายชื่อ<span class="fa arrow"></span></a>
              <ul class="nav nav-second-level">
                  <li>
                      <a href="editlistnameuser1.php">รายชื่อสมาชิก</a>
                  </li>
                  <li>
                      <a href="editlistnamekammakarn1.php">รายชื่อกรรมการ</a>
                  </li>
                  <li>
                      <a href="editlistnametoday1.php">รายชื่อผู้เข้าร่วมประจำวันประจำวัน</a>
                  </li>
              </ul>
            </li>
          <li  >
              <a   href="projectcost1.php"><i class="fa fa-bar-chart-o fa-3x"></i>ค่าใช้จ่ายภายในโครงการ</a>
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
                       <h2>แก้ไขรายชื่อสมาชิก</h2>

                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
                 <div class="section group">
                 <div class="panel-body">
                   <?php
    $sql = "SELECT * from fn_kaminsert.php";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
  ?>
                <form method="post" action="listnamekam_update.php" id="form1">

                       <div class="form-group col-md-6">
                         <label>ชื่อ-นามสกุล</label>
                         <input type="text" class="form-control" name="name" id="name" value="<?php echo $row['name']; ?>">
                       </div>
                       <div class="form-row">
                         <div class="form-group col-md-6">
                           <label>ที่อยู่</label>
                           <input type="text" class="form-control" name="address" id="address" value="<?php echo $row['address']; ?>">
                         </div>
                         <div class="form-row">
                           <div class="form-group col-md-6">
                             <label>หมู่</label>
                             <input type="text" class="form-control" name="moo" id="i=moo" value="<?php echo $row['moo']; ?>">
                           </div>
                           <div class="form-group col-md-6">
                             <label> รหัสประจำตัวประชาชน</label>
                             <input type="text" class="form-control" name="id_card" id="id_card" value="<?php echo $row['id_card']; ?>">
                           </div>
                           <div class="form-group col-md-12" >
                             <label> หมายเหตุ</label>
                             <input type="text" class="form-control" name="note" id="note" value="<?php echo $row['note']; ?>">
                           </div>
                           &nbsp&nbsp&nbsp<input class="btn btn-danger" type="submit" value="บันทึก">&nbsp&nbsp
                           <a href="listnameuser.php"class="btn btn-default">ยกเลิก</a>
                         </form>
                         <br>

                   <!-- <div class="form-group col-md-12">
                     <label>หมายเหตุ</label>
                     <textarea class="form-control" name="note" rows="3" id="note"></textarea>
                   </div> -->
                   <!-- <div class="form-group col-md-12">
                   <center><input type="submit" name="submit" value="ยืนยัน" class="btn btn-primary btn-lg btn-block"></input></center>
                   </div> -->
                 </form>
                     <!-- <div class="row">
                         <div class="col-md-6">
                             <form role="form">
                                 <div class="form-group">
                                     <label>รหัสผู้ใช้</label>
                                     <input class="form-control" />
                                     <p class="help-block">Help text here.</p>
                                 </div>
                                 <div class="form-group">
                                     <label>ชื่อ-นามสกุล</label>
                                     <input class="form-control" placeholder="PLease Enter Keyword" />
                                 </div>
                                 <div class="form-group">
                                   <label for="dt">วันที่ </label>
                                   <input name="dt" type="date" class="form-control">
                                 </div> -->
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

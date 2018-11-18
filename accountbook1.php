<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <?php
require('dbconnect.php');
    $sql = "SELECT * from deposit_gb";

$results = $conn->query($sql);
?>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Binary Admin</title>
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
          font-size: 16px;"><a href="indexgeneral.html" class="btn btn-warning square-btn-adjust">ออกจากระบบ</a> </div>
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
              <a href="#"><i class="fa fa-sitemap fa-3x"></i>ฝาก<span class="fa arrow"></span></a>
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
                      <a href="deposit_cshow.php">ข้อมูลการฝากเงิน</a>
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
               <a class="active-menu"  href="accountbook1.php"><i class="fa fa-desktop fa-3x"></i>บัญชีคุมรายการฝากถอน</a>
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

                </div>
                 <!-- /. ROW  -->
                 <hr />
                 <div class="row">
                     <div class="col-md-12">
                       <!--   Kitchen Sink -->
                         <div class="panel panel-default">
                             <div class="panel-heading">
                                 Kitchen Sink
                             </div>

                             <div class="panel-body">
                                 <div class="table-responsive">
                                     <table class="table table-striped table-bordered table-hover">
                                         <thead>
                                             <tr>
                                                 <th>วันเดือนปี</th>
                                                 <th>เลขที่สมาชิก</th>
                                                 <th>ชื่อ-นามสกุล</th>
                                                 <th>ฝาก</th>
                                                 <th>ถอน</th>
                                                 <th>เงินคงเหลือ</th>
                                                 <th>หมายเหตุ</th>
                                             </tr>
                                         </thead>
                                         <?php
                                         while($row = $results->fetch_assoc()) {
                                             ?>
                                         <tr>
                                              <td><?php echo $row['date'] ?></td>
                                              <td><?php echo $row['account_number'] ?></td>
                                              <td><?php echo $row['name'] ?></td>
                                              <td><?php echo $row['cargb'] ?></td>
                                              <td><?php echo $row['catergory_gb'] ?></td>
                                              <td><?php echo $row['amount'] ?></td>
                                              <td><?php echo $row['note'] ?></td>
                                               
                                         </tr>
                                             <?php
                                         }
                                         ?>
                                         </tbody><?php
                                 $conn->close();
                                 ?>
                                     </table>
                                 </div>
                             </div>
                         </div>
                          <!-- End  Kitchen Sink -->
                     </div>
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
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

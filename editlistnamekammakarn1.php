<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
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
font-size: 16px;"> Last access : 30 May 2014 &nbsp; <a href="login.html" class="btn btn-danger square-btn-adjust">ออกจากระบบ</a> </div>
        </nav>
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
					</li>


          <li>
              <a class="active-menu"  href="indexadmin1.php"><i class="fa fa-dashboard fa-3x"></i>หน้าหลัก</a>
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

                </div>
                 <!-- /. ROW  -->
                 <hr />
                 <div class="row">
                     <div class="col-md-12">
                       <!--   Kitchen Sink -->
                       <div class="pull-right hidden-phone">
                          <button class="btn btn-success btn-xs"><i class=" fa fa-plus"></i></button>
                          <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                          <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                        </div>
                         <div class="panel panel-default">
                             <div class="panel-heading">
                                 Kitchen Sink
                             </div>

                             <div class="panel-body">
                                 <div class="table-responsive">
                                     <table class="table table-striped table-bordered table-hover">
                                         <thead>
                                             <tr>
                                                 <th>ลำดับ</th>
                                                 <th>ชื่อ-นามสกุล</th>
                                                 <th>ตำแหน่ง</th>
                                                 <th>บ้านเลขที่</th>
                                                 <th>เลขบัตรประชาชน</th>
                                                 <th>เบอร์โทร</th>
                                                 <td>เพิ่ม</td>
                                                 <td>ลบ</td>
                                                 <td>แก้ไข</td>
                                             </tr>
                                         </thead>
                                         <tbody>
                                             <tr>
                                                 <td>1</td>
                                                 <td>Mark</td>
                                                 <td>กรรมการ</td>
                                                 <td>Otto</td>
                                                 <td>@gat</td>
                                                 <td>#</td>
                                                 <td>เพิ่ม</td>
                                                 <td>ลบ</td>
                                                 <td>แก้ไข</td>
                                             </tr>
                                             <tr>
                                                 <td>2</td>
                                                 <td>Jacob</td>
                                                 <td>Thornton</td>
                                                 <td>@fat</td>
                                             </tr>
                                             <tr>
                                                 <td>3</td>
                                                 <td>Larry</td>
                                                 <td>the Bird</td>
                                                 <td>@twitter</td>
                                             </tr>
                                         </tbody>
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

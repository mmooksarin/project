<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ธนาคารขยะบ้านคลองแม่ระกา</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
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
               <a  href="accountbook1.php"><i class="fa fa-desktop fa-3x"></i>บัญชีคุมรายการฝากถอน</a>
           </li>
          <li  >
              <a class="active-menu"  href="projectcost1.php"><i class="fa fa-bar-chart-o fa-3x"></i>บันทึกการดำเนินโครงการ</a>
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
                     <h2>Admin Dashboard</h2>
                        <h5>Welcome Jhon Deo , Love to see you back. </h5>
                    </div>
                </div>
                 <!-- /. ROW  -->
                  <hr />
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>ว/ด/ป</th>
                                            <th>เลขที่เอกสาร</th>
                                            <th>รายการ</th>
                                            <td align=”center” colspan="3">เงินสดในมือ
                                              <table border="1" bordercolor="silver">
                                                <tr><td>รายรับ</td><td>รายจ่าย</td><td>คงเหลือ</td></tr>
                                              </table>
                                            </td>
																						<td colspan="3">เงินฝากธนาคาร</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                            <td>100090</td>
																						<td>#</td>
																						<td>-</td>
																						<td>-</td>
																						<td>-</td>
                                        </tr>
																				<tr>
                                            <td>1</td>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                            <td>100090</td>
																						<td>#</td>
																						<td>-</td>
																						<td>-</td>
																						<td>-</td>
                                        </tr>
																				<tr>
                                            <td>2</td>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                            <td>100090</td>
																						<td>#</td>
																						<td>-</td>
																						<td>-</td>
																						<td>-</td>
                                        </tr>
																				<tr>
                                            <td>3</td>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                            <td>100090</td>
																						<td>#</td>
																						<td>-</td>
																						<td>-</td>
																						<td>-</td>
                                        </tr>
																				<tr>
                                            <td>4</td>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                            <td>100090</td>
																						<td>#</td>
																						<td>-</td>
																						<td>-</td>
																						<td>-</td>
                                        </tr>
																				<tr>
                                            <td>5</td>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                            <td>100090</td>
																						<td>#</td>
																						<td>-</td>
																						<td>-</td>
																						<td>-</td>
                                        </tr>
																				<tr>
                                            <td>6</td>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                            <td>100090</td>
																						<td>#</td>
																						<td>-</td>
																						<td>-</td>
																						<td>-</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    </div>
                </div>
                 <!-- /. ROW  -->

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
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>


</body>
</html>

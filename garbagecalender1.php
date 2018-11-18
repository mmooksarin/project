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

   <!--external css-->
   <link href="lib_dashio/font-awesome/css/font-awesome.css" rel="stylesheet" />
   <link href="lib_dashio/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
   <!-- Custom styles for this template -->
   <link href="css_dashio/style.css" rel="stylesheet">
   <link href="css_dashio/style-responsive.css" rel="stylesheet">
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
              <a   href="projectcost1.php"><i class="fa fa-bar-chart-o fa-3x"></i>บันทึกการดำเนินโครงการ</a>
          </li>
            <li  >
              <a  href="garbageprice1.php"><i class="fa fa-table fa-3x"></i>ราคาขยะ</a>
          </li>
          <li  >
              <a class="active-menu"  href="garbagecalender1.php"><i class="fa fa-edit fa-3x"></i>ปฏิทินวันขายขยะ</a>
          </li>

                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">

                 <!-- /. ROW  -->



<!--main content start-->
    <h3><i class="fa fa-angle-right"></i>ปฏิทินวันขายขยะ</h3>
    <!-- page start-->
    <div class="row mt">
      <aside class="col-lg-3 mt">
        <h4><i class="fa fa-angle-right"></i> Draggable Events</h4>
        <div id="external-events">
          <div class="external-event label label-theme">My Event 1</div>
          <div class="external-event label label-success">My Event 2</div>
          <div class="external-event label label-info">My Event 3</div>
          <div class="external-event label label-warning">My Event 4</div>
          <div class="external-event label label-danger">My Event 5</div>
          <div class="external-event label label-default">My Event 6</div>
          <div class="external-event label label-theme">My Event 7</div>
          <div class="external-event label label-info">My Event 8</div>
          <div class="external-event label label-success">My Event 9</div>
          <p class="drop-after">
            <input type="checkbox" id="drop-remove"> Remove After Drop
          </p>
        </div>
      </aside>
      <aside class="col-lg-9 mt">
        <section class="panel">
          <div class="panel-body">
            <div id="calendar" class="has-toolbar"></div>
          </div>
        </section>
      </aside>
    </div>
    </div>
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

    <script src="lib_dashio/jquery/jquery.min.js"></script>
    <script src="lib_dashio/jquery-ui-1.9.2.custom.min.js"></script>
    <script src="lib_dashio/fullcalendar/fullcalendar.min.js"></script>
    <script src="lib_dashio/bootstrap/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="lib_dashio/jquery.dcjqaccordion.2.7.js"></script>
    <script src="lib_dashio/jquery.scrollTo.min.js"></script>
    <script src="lib_dashio/jquery.nicescroll.js" type="text/javascript"></script>
    <!--common script for all pages-->
    <script src="lib_dashio/common-scripts.js"></script>
    <!--script for this page-->
    <script src="lib_dashio/calendar-conf-events.js"></script>


</body>
</html>

<!DOCTYPE HTML>
<head>
<title>ธนาคารขยะบ้านคลองแม่ระกา</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
</head>
<body>
	<div class="header">
		 <div class="headertop_desc">
			<div class="wrap">
				<div class="nav_list">
					<ul>
						<li><a href="indexgeneral.html">หน้าหลัก</a></li>
						<li><a href="contact.html">ติดต่อ</a></li>
					</ul>
				</div>
					<div class="account_desc">
						<ul>
							<li><a href="register.html">ลงทะเบียน</a></li>
							<li><a href="login.html">เข้าสู่ระบบ</a></li>
						</ul>
					</div>
				<div class="clear"></div>
			</div>
	  	</div>
  	  		<div class="wrap">
				<div class="header_top">
					<div class="logo">
						<a href="indexgeneral.html"><img src="images/logo.png" alt="" /></a>
					</div>

						  <script type="text/javascript">
								function DropDown(el) {
									this.dd = el;
									this.initEvents();
								}
								DropDown.prototype = {
									initEvents : function() {
										var obj = this;

										obj.dd.on('click', function(event){
											$(this).toggleClass('active');
											event.stopPropagation();
										});
									}
								}

								$(function() {

									var dd = new DropDown( $('#dd') );

									$(document).click(function() {
										// all dropdowns
										$('.wrapper-dropdown-2').removeClass('active');
									});

								});
					    </script>
			   <div class="clear"></div>
  		    </div>
   		</div>
   </div>
 <div class="main">
 	<!-- <div class="wrap">
    	<div class="section group">
				<div class="col span_2_of_3">
				  <div class="contact-form">
				  	<h2>สมัครสมาชิก</h2>
					    <form method="post" action="contact-post.html">
					    	<div>
						    	<span><label>ชื่อ-นามสกุล</label></span>
						    	<span><input name="userName" type="text" class="textbox" ></span>
						    </div>
						    <div>
						     	<span><label>บ้านเลขที่</label></span>
						    	<span><input name="usernumber" type="number" class="textbox"></span>
						    </div>
								<div>
						     	<span><label>รหัสผ่าน</label></span>
						    	<span><input name="usernumber" type="number" class="textbox"></span>
						    </div>
								<form action="/action_page.php">
  								<div class="form-group">
  									<div class="checkbox">
    									<label><input type="checkbox">Remember me</label>
										</div>
  								</div>
								</form>

						   <div>
						   		<span><input type="submit" value="Submit"  class="mybutton"></span>
						  </div>
					    </form>
				  </div>
  				</div>

				 </div>
			  </div>
         </div>
    </div> -->
		<!DOCTYPE html>
		<html lang="en">
		<head>
		  <title>Bootstrap Example</title>
		  <meta charset="utf-8">
		  <meta name="viewport" content="width=device-width, initial-scale=1">
		  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		</head>
		<body>

		<div class="container">
		  <h2>รายชื่อผู้เข้าร่วมโครงการ</h2>
		  <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>
		  <table class="table">
		    <thead>
		      <tr>
		        <th>ชื่อจริง</th>
		        <th>นามสกุล</th>
		        <th>เบอร์โทร</th>
            <th>บ้านเลขที่</th>
		      </tr>
		    </thead>
		    <tbody>
		      <tr>
		        <td>John</td>
		        <td>Doe</td>
		        <td>john@example.com</td>
            <td>222 phs</td>
		      </tr>
		      <tr>
		        <td>Mary</td>
		        <td>Moe</td>
		        <td>mary@example.com</td>
            <td>222 phs</td>
		      </tr>
		      <tr>
		        <td>July</td>
		        <td>Dooley</td>
		        <td>july@example.com</td>
            <td>222 phs</td>
		      </tr>
		    </tbody>
		  </table>
		</div>

		</body>
		</html>
 </div>

			 <div class="copy_right">
				<p>Company Name © All rights Reseverd | Design by  <a href="http://w3layouts.com">W3Layouts</a> </p>
		   </div>
        </div>
    </div>
    <script type="text/javascript">
		$(document).ready(function() {
			$().UItoTop({ easingType: 'easeOutQuart' });

		});
	</script>
    <a href="#" id="toTop"><span id="toTopHover"> </span></a>
</body>
</html>

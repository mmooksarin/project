<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<?php
  require('dbconnect.php');
  require('session.php');
  ?>
<head>
<title>ธนาคารขยะบ้านคลองแม่ระกา</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/slider.css" rel="stylesheet" type="text/css" media="all"/>
<link rel="stylesheet" href="css/magnific-popup.css">
<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
<script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>
</head>
<div id="id01" class="w3-modal">
           <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

           <div class="w3-center"><br>
             <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-transparent w3-display-topright" title="Close Modal">X</span>

           </div>
         <br>
           <form class="w3-container" name="form1" method="post" action="check_login.php">
             <div class="w3-section">
               <label><b>Username</b></label>
               <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Username" name="txtUsername" id="txtUsername" required>
               <label><b>Password</b></label>
               <input class="w3-input w3-border" type="text" placeholder="Enter Password" name="txtPassword" id="txtPassword" required><br>
               <button class="w3-button w3-block w3-green w3-section w3-padding" type="submit">Login</button>
               <input class="w3-check w3-margin-top" type="checkbox" checked="checked"> Remember me
             </div>
           </form>

           <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
           <button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-button w3-red">Cancel</button>
           </div>

         </div>
     </div>
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
							<li><a href="login.html">เข้าสู่ระบบ</a></li>
							<li><a href="#" onclick="document.getElementById('id01').style.display='block'">admin</a></li>
						</ul>
					</div>
				<div class="clear"></div>
			</div>
	  	</div>
  	  		<div class="wrap">
				<div class="header_top">
					<div class="logo">
						<a href="index.html"><img src="images/logo.png" alt="" /></a>
					</div>
						<div class="header_top_right">
							  <div class="search_box">
                </div>
						 <div class="clear"></div>
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
				<div class="header_bottom">
					<div class="header_bottom_left">
						<div class="categories">
						   <ul>
						  	   <h3>รายการ</h3>
                   <li><a href="about_project.php">เกี่ยวกับโครงการ</a></li>
							      <li><a href="#">รายการค่าใช้จ่ายภายในโครงการ</a></li>
							       <li><a href="listnamekammakarn_general.php">รายชื่อคณะกรรมการ</a></li>
							       <li><a href="listnameuser_general.php">รายชื่อผู้เข้าร่วมโครงการ</a></li>
							       <li><a href="gbcld_general.php">ปฏิทินวันขายขยะ</a></li>
							       <li><a href="#">ราคาขยะ</a></li>
							       <li><a href="#">Kids</a></li>
							       <li><a href="#">Animation</a></li>
							       <li><a href="#">Games</a></li>
						  	 </ul>
						</div>
		  	         </div>
						    <div class="header_bottom_right">
						 	    <!------ Slider ------------>
								  <div class="slider">
							      	<div class="slider-wrapper theme-default">
							            <div id="slider" class="nivoSlider">
							                <img src="images/1.jpg" data-thumb="images/1.jpg" alt="" />
							                <img src="images/2.jpg" data-thumb="images/2.jpg" alt="" />
							                <img src="images/3.jpg" data-thumb="images/3.jpg" alt="" />
							                <img src="images/4.jpg" data-thumb="images/4.jpg" alt="" />
							                 <img src="images/5.jpg" data-thumb="images/5.jpg" alt="" />
							            </div>
							        </div>
						   		</div>
						<!------End Slider ------------>
			         </div>
			     <div class="clear"></div>
			</div>
   		</div>
   </div>
   <br><br>
   <!------------End Header ------------>
  <div class="main">
  	<div class="wrap">
      <div class="content">
    	<div class="content_top">
    		<div class="heading">
    		<h3>ประชาสัมพันธ์</h3>
    		</div>
    	</div>
	      <div class="section group">
				<div class="grid_1_of_5 images_1_of_5">
					 <a href="preview.html"><img src="images/end-game.jpg" alt="" /></a>
					 <h2><a href="preview.html">End Game</a></h2>
					<div class="price-details">
				       <div class="price-number">
					    </div>
					       		<div class="add-cart">
                    </div>
                    <div class="clear"></div>
					</div>
				</div>
				<div class="grid_1_of_5 images_1_of_5">
					 <a href="preview.html"><img src="images/Sorority_Wars.jpg" alt="" /></a>
					 <h2><a href="preview.html">Sorority Wars</a></h2>
					<div class="price-details">
				       <div class="price-number">
					    </div>
					       		<div class="add-cart">
							     </div>
							 <div class="clear"></div>
					</div>

				</div>
				<div class="grid_1_of_5 images_1_of_5">
					<a href="preview.html"><img src="images/New-Moon-The-Score-cover-twilight.jpg" alt="" /></a>
					 <h2><a href="preview.html">Twilight New Moon</a></h2>
					<div class="price-details">
				       <div class="price-number">
					    </div>
					       		<div class="add-cart">
							     </div>
							 <div class="clear"></div>
					</div>

				</div>
				<div class="grid_1_of_5 images_1_of_5">
					<a href="preview.html"><img src="images/avatar_movie.jpg" alt="" /></a>
					 <h2><a href="preview.html">Avatar</a></h2>
					 <div class="price-details">
				       <div class="price-number">
					    </div>
					       		<div class="add-cart">
							     </div>
							 <div class="clear"></div>
					</div>
				</div>
				<div class="grid_1_of_5 images_1_of_5">
					<a href="preview.html"><img src="images/black-swan.jpg" alt="" /></a>
					 <h2><a href="preview.html">Black Swan</a></h2>
					<div class="price-details">
				       <div class="price-number">
					    </div>
					       		<div class="add-cart">
							     </div>
							 <div class="clear"></div>
					</div>
				</div>
			</div>


   <div class="footer">
   	  <div class="wrap">
	     <div class="section group">
 					<div class="contact_info">
     	 				<h2>แผนที่โครงการ</h2>
 					    	  <div class="map">
 							   	    <iframe width="100%" height="175" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265&amp;output=embed"></iframe><br><small><a href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265" style="color:#888;text-align:left;font-size:0.85em">ดูแผนที่ขนาดใหญ่</a></small>
 							  </div>
       				</div>
              <div class="header_bottom">
                <div class="company_address">
                    <div class="col_1_of_4 span_1_of_4">
          					  <h4>ที่อยู่</h4>
          						<ul>
          							<li><span>ม.2 บ้านคลองแม่ระกา ต.ท่าไม้ อ.พรานกระต่าย จ.กำแพงเพชร 62110</span></li>
          						</ul>
                    </div>
                    <div class="col_1_of_4 span_1_of_4">
          					  <h4>ติดต่อ</h4>
          						<ul>
          							<li><span>Phone:(00) 222 666 444</span></li>
          							<li><span>Fax: (000) 000 00 00 0</span></li>
          						</ul>
                    </div>
                    <div class="col_1_of_4 span_1_of_4">
          					  <h4>ผู้ดูแลโครงการ</h4>
          						<ul>
          							<li><span>Phone:(00) 222 666 444</span></li>
          							<li><span>Fax: (000) 000 00 00 0</span></li>
          						</ul>
                    </div>
                    <div class="col_1_of_4 span_1_of_4">
          					  <h4>ผู้สนับสนุนโครงการ</h4>
          						<ul>
          							<li><span>สำนักงานกองทุนสนับสนุนการสร้างเสริมสุขภาพ (สสส.)</span></li>
          						</ul>
                    </div>
             </div>
				</div>
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

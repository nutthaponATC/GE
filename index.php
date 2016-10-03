<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="icon.png">

	<!-- font -->
	<link href="https://fonts.googleapis.com/css?family=Athiti:400" rel="stylesheet">
  	
	<title>สำนักวิชาศึกษาทั่วไป General Education</title>

	<link rel="stylesheet" href="style.css">

	<!-- bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
	<!-- fa -->
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">
	<!-- animate -->
	<link rel="stylesheet" href="css/animate.css">

	<!-- aos animation scroll -->
	<link rel="stylesheet" href="css/aos.css" />

	<!-- thumnail hover -->
	<link rel="stylesheet" type="text/css" href="css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="css/demo.css" />
	<link rel="stylesheet" type="text/css" href="css/set2.css" />
</head>
<body>
	<!-- slider -->
	<script type="text/javascript" src="js/jssor.slider.min.js"></script>
	<script type="text/javascript" src="js/slide.js"></script>

	<div id="custom-bootstrap-menu" class="navbar navbar-default" style="border-style: none; z-index: 900; margin-left:-5px; width:100%+20px;" role="navigation">
	    <div class="container-fluid">
	        <div class="navbar-header">
	        	<a class="navbar-brand visible-xs" href="#">เมนู</a>
	            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder">
	            	<span class="sr-only">Toggle navigation</span>
	            	<span class="icon-bar"></span>
	            	<span class="icon-bar"></span>
	            	<span class="icon-bar"></span>
	            </button>
	        </div>
	        <div class="collapse navbar-collapse navbar-menubuilder">
	            <ul class="nav navbar-nav navbar-left" id="menu-main">
	            	<li><a href="index.php"><img src="logo2.png" style="margin-top:-10px; margin-bottom:-10px;" width="15%"> สำนักวิชาศึกษาทั่วไป</a></li>
	            	<li style="border-left:1px solid rgba(255, 255, 255, 0.3); "><a href="index.php">หน้าหลัก</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">เกี่ยวกับสำนัก</b></a>
						<ul class="dropdown-menu" id="dropdown">
							<li><a href="about.php"> ประวัติความเป็นมา</a></li>
							<li><a href="about.php#vision">วิสัยทัศน์ พันธกิจ</a></li>
							<li><a href="about.php#mission">นโยบายการบริหาร</a></li>
							<li><a href="about.php#oganizetion">โครงสร้างการบริหาร</a></li>
							<li><a href="about.php#staff">บุคลากร</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">หลักสูตร</b></a>
						<ul class="dropdown-menu" id="dropdown">
							<li><a href="culiculum.php">โครงสร้างรายวิชา</a></li>
							<li><a href="culiculum.php#2">กลุ่ม</a></li>
							<li><a href="culiculum.php#3">รายวิชา</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="activity.php" class="dropdown-toggle" data-toggle="dropdown">กิจกรรม</b></a>
						<ul class="dropdown-menu" id="dropdown">
							<li><a href="activity.php">บุคลากร</a></li>
							<li><a href="activity.php#student">นักศึกษา</a></li>
						</ul>
					</li>
					<li><a href="public.php">เอกสาร | วิดีโอเผยแพร่</a></li>
					<li><a href="contact.php">ติดต่อเรา</a></li>
	            </ul>
	        </div>
	    </div>
	</div>
	
	<main class="cd-main-content" style="margin-top:-40px;">
		<div class="jumbotron visible-lg" id="banner">
			
		</div>

		<!-- phone -->
		<div class="jumbotron hidden-lg" id="banner2">
			
		</div>

		<div style="width: 100%; margin-top:-30px; height:34%;">
			<div class="col-md-1"></div>
			<div class="col-md-2 subject1" style=" text-align:center;  height: 100%; border-left:1px solid rgba(243, 115, 66, 1);">
				<H3 style="margin-top:30%;">คุณค่าแห่งชีวิต</H3>
			</div>
			<div class="col-md-2 subject2" style=" text-align:center;  height: 100%; border-left:1px solid rgba(254, 215, 78, 1);">
				<H3 style="margin-top:30%;">วิถีแห่งสังคม</H3>
			</div>
			<div class="col-md-2 subject3" style=" text-align:center;  height: 100%; border-left:1px solid rgba(113, 176, 96, 1);">
				<H3 style="margin-top:30%;">ศาสตร์แห่งการคิด</H3>
			</div>
			<div class="col-md-2 subject4" style=" text-align:center;  height: 100%; border-left:1px solid rgba(152, 81, 139, 1);">
				<H3 style="margin-top:30%;">ศิลปะแห่งการจัดการ</H3>
			</div>
			<div class="col-md-2 subject5" style=" text-align:center;  height: 100%; border-left:1px solid rgba(69, 148, 191, 1);">
				<H3 style="margin-top:30%;">ภาษาและการสื่อสาร</H3>
			</div>
			<div class="col-md-1"></div>
		</div>

		<div class="jumbotron cd-fixed-bg" style="background-color:#ffffff; top:0px;">
			<div style="width:60%; height: 100%; background-color:#fff0df; float:left;">
				<div style="margin-left:30%; width:100%; color:#be6a77; padding-top:10px;">
					<h3>ข่าวประชาสัมพันธ์</h3>
				</div>
				<div class="line2" style="margin-left:30%; width:150px;"></div>
				<div style="margin-left:30%; width:70%; border-bottom:solid 2px #be6a77;"></div>
				<div style="width:100%; margin-left:30%; margin-top:20px;">
					<p>หัวข้อข่าวประชาสัมพันธ์</p>
					<i class="fa fa-clock-o" aria-hidden="true" style="color:#be6a77; margin-top:-10px;"> 22-09-2559</i>
				</div>

				<div style="width:100%; margin-left:30%; margin-top:40px; border-top:solid 2px #ffffff;">
					<p>หัวข้อข่าวประชาสัมพันธ์</p>
					<i class="fa fa-clock-o" aria-hidden="true" style="color:#be6a77; margin-top:-10px;"> 22-09-2559</i>
				</div>

				<div style="width:100%; margin-left:30%; margin-top:40px; border-top:solid 2px #ffffff;">
					<p>หัวข้อข่าวประชาสัมพันธ์</p>
					<i class="fa fa-clock-o" aria-hidden="true" style="color:#be6a77; margin-top:-10px;"> 22-09-2559</i>
				</div>

				<div style="width:100%; margin-left:30%; margin-top:40px; border-top:solid 2px #ffffff;">
					<p>หัวข้อข่าวประชาสัมพันธ์</p>
					<i class="fa fa-clock-o" aria-hidden="true" style="color:#be6a77; margin-top:-10px;"> 22-09-2559</i>
				</div>

				<div style="width:100%; margin-left:30%; margin-top:40px;">
					<h5 style="color:#be6a77;">ดูทั้งหมด</h5>
				</div>
			</div>

			<div style="width:40%; height:100%; background-color:#e39ba6; float:left;">
				<div>
					<h3 style="margin-left: 42%; padding-top:10px; color:#fff0df;">ข่าวสัมมนา</h3>
				</div>
				<div class="line2" style="margin-left: 40%; background: #fff0df; width:150px; margin-bottom:-2px;"></div>
				<div style="width:40%; border-bottom:solid 2px #fff0df;"></div>

				<div style="width:100%; padding-left:30px;  margin-top:20px;">
					<span style="font-size:30; color:#fff0df;">02 ก.ย.</span><span style="font-size:20; margin-left:5px;"> หัวข้อข่าวสัมมนา</span>
				</div>

				<div style="width:100%; padding-left:30px;  margin-top:20px;">
					<span style="font-size:30; color:#fff0df;">12 ก.ย.</span><span style="font-size:20; margin-left:5px;"> หัวข้อข่าวสัมมนา</span>
				</div>

				<div style="width:100%; padding-left:30px;  margin-top:20px;">
					<span style="font-size:30; color:#fff0df;">22 ก.ย.</span><span style="font-size:20; margin-left:5px;"> หัวข้อข่าวสัมมนา</span>
				</div>

				<div style="margin-top:27%;"></div>

				<div style="width:100%; padding-left:30px;  margin-top:40px;">
					<h5 style="color:#fff0df;">ดูทั้งหมด</h5>
				</div>
			</div>

		</div>		

		<div class="jumbotron cd-fixed-bg" id="activity" style="background-color:#ffffff; margin-bottom:20%; height:800px;">
			<div class="cd-fixed-bg">
			<!-- <div class="container"> -->
				<div class="col-md-12" style="margin-bottom:20px;">
					<div class="col-md-4 line2 visible-lg"></div>
					<div class="col-md-4" style="margin-top:-30px; text-align:center;">
						<h3><img src="icon.png" style="margin-top:-10px;"> ภาพถ่ายกิจกรรม</h3>
					</div>
					<div class="col-md-4 line2 visible-lg"></div>
				</div>

				<div style="margin-top:20px;"></div>
				<div class="grid" style="text-align:center;">
					<figure class="effect-apollo">
						<img src="image/info/1.jpg"/>
						<figcaption>
							<h3>ชื่อกิจกรรม</h3>
							<p>รายละเอียดกิจกรรม</p>
							<a href="#">ดูเพิ่มเติม</a>
						</figcaption>			
					</figure>
					<figure class="effect-apollo">
						<img src="image/info/2.jpg"/>
						<figcaption>
							<h3>ชื่อกิจกรรม</h3>
							<p>รายละเอียดกิจกรรม</p>
							<a href="#">ดูเพิ่มเติม</a>
						</figcaption>			
					</figure>
					<figure class="effect-apollo">
						<img src="image/info/3.jpg"/>
						<figcaption>
							<h3>ชื่อกิจกรรม</h3>
							<p>รายละเอียดกิจกรรม</p>
							<a href="#">ดูเพิ่มเติม</a>
						</figcaption>			
					</figure>
					<figure class="effect-apollo">
						<img src="image/info/4.jpg"/>
						<figcaption>
							<h3>ชื่อกิจกรรม</h3>
							<p>รายละเอียดกิจกรรม</p>
							<a href="#">ดูเพิ่มเติม</a>
						</figcaption>			
					</figure>
					<figure class="effect-apollo">
						<img src="image/info/5.jpg"/>
						<figcaption>
							<h3>ชื่อกิจกรรม</h3>
							<p>รายละเอียดกิจกรรม</p>
							<a href="#">ดูเพิ่มเติม</a>
						</figcaption>			
					</figure>
					<figure class="effect-apollo">
						<img src="image/info/1.jpg"/>
						<figcaption>
							<h3>ชื่อกิจกรรม</h3>
							<p>รายละเอียดกิจกรรม</p>
							<a href="#">ดูเพิ่มเติม</a>
						</figcaption>			
					</figure>
					<figure class="effect-apollo">
						<img src="image/info/2.jpg"/>
						<figcaption>
							<h3>ชื่อกิจกรรม</h3>
							<p>รายละเอียดกิจกรรม</p>
							<a href="#">ดูเพิ่มเติม</a>
						</figcaption>			
					</figure>
					<figure class="effect-apollo">
						<img src="image/info/3.jpg"/>
						<figcaption>
							<h3>ชื่อกิจกรรม</h3>
							<p>รายละเอียดกิจกรรม</p>
							<a href="#">ดูเพิ่มเติม</a>
						</figcaption>			
					</figure>
					<figure class="effect-apollo">
						<img src="image/info/4.jpg"/>
						<figcaption>
							<h3>ชื่อกิจกรรม</h3>
							<p>รายละเอียดกิจกรรม</p>
							<a href="#">ดูเพิ่มเติม</a>
						</figcaption>			
					</figure>
				</div>
				<div class="col-md-12" style="margin-top:30px;">
					<div class="col-md-3"></div>
					<div class="col-md-6">
						<a href="#"><p style="text-align: right; margin-top:-30px; font-size: 100%;"><i class="fa fa-play" aria-hidden="true"></i> ดูทั้งหมด</p></a>
					</div>
					<div class="col-md-3">
					</div>
				</div>
			</div>
		</div>

		<div class="cd-fixed-bg cd-bg-3">
			<div class="hidden-lg" style="padding-top:30px; text-align:center; color:#ffffff; text-shadow: 2px 2px 4px #000000;">
				<h3>เอกสาร | วิดีโอเผยแพร่</h3>
			</div>
			<div>
				<div class="container" style="text-align:center; padding-top:50px;">
					<div class="col-md-3">
						<h3>
							<a href="" class="shadow" style="color:#ffffff;">
								<i class="fa fa-file-text fa-3x text" aria-hidden="true"></i>
								<br>ชื่อไฟล์เอกสาร
							</a>
						</h3>
					</div>
					<div class="col-md-3">
						<h3>
							<a href="" class="shadow" style="color:#ffffff;">
								<i class="fa fa-file-text fa-3x text" aria-hidden="true"></i>
								<br>ชื่อไฟล์เอกสาร
							</a>
						</h3>
					</div>
					<div class="col-md-3">
						<h3>
							<a href="" class="shadow" style="color:#ffffff;">
								<i class="fa fa-file-text fa-3x text" aria-hidden="true"></i>
								<br>ชื่อไฟล์เอกสาร
							</a>
						</h3>
					</div>
					<div class="col-md-3">
						<h3>
							<a href="" class="shadow" style="color:#ffffff;">
								<i class="fa fa-file-text fa-3x text" aria-hidden="true"></i>
								<br>ชื่อไฟล์เอกสาร
							</a>
						</h3>
					</div>
				</div>
			</div>
			
			<div class="visible-lg">
				<h2>เอกสาร และวิดีโอเผยแพร่</h2>
			</div>

			<div>
				<div class="container" style="text-align:center; margin-top:20%; padding-bottom:30px;">
					<div class="col-md-3 shadow">
						<iframe width="250" height="150" src="https://www.youtube.com/embed/8opzU51pwfM" frameborder="0" allowfullscreen></iframe>
					</div>
					<div class="col-md-3 shadow">
						<iframe width="250" height="150" src="https://www.youtube.com/embed/z34mhkRB1Xc" frameborder="0" allowfullscreen></iframe>
					</div>
					<div class="col-md-3 shadow">
						<iframe width="250" height="150" src="https://www.youtube.com/embed/nyjn3eXbkSI" frameborder="0" allowfullscreen></iframe>
					</div>
					<div class="col-md-3 shadow">
						<iframe width="250" height="150" src="https://www.youtube.com/embed/eFR-hG_SM9U" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</div> <!-- cd-fixed-bg -->

		<div class="jumbotron" style="background-color:#8e3240; margin-bottom:0px; margin-top:30px;">
			<div class="container" style="color:#ffffff;">
				<div class="col-md-3">
					<br>
					<!-- <br><br> -->
					Copyright © 2016 สำนักวิชาศึกษาทั่วไป
				</div>
				<div class="col-md-5" style="text-align:center;">
					<br>
						อาคารกรมหลวงนราธิวาสราชนครินทร์  ชั้น 10 <br>สถาบันเทคโนโลยีพระจอมเกล้าเจ้าคุณทหารลาดกระบัง <br>
						เลขที่ 1 ซอยฉลองกรุง 1 แขวงลาดกระบัง เขตลาดกระบัง กรุงเทพฯ 10520					
				</div>
				<div class="col-md-1">
				</div>
				<div class="col-md-3">
					<br>
					<i class="fa fa-phone" style="font-size:16px;"></i> โทรศัพท์/โทรสาร 02 329 8220 <br>
					E-mail :  gened@kmitl.ac.th <br>
					<a style="color:#ffffff;" href="https://web.facebook.com/KMITL-GenEd-524957101005643/"><i class="fa fa-facebook-square" style="font-size:20px;"></i> KMITL-GenEd</a>
				</div>
			</div>
		</div>

	</main> <!-- cd-main-content -->
	
	<script src="js/main.js"></script> <!-- background -->
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/navbar.js"></script>
	<script src="js/animate-scroll.js"></script>
	<script src="js/magic-line.js"></script>
	<script>
        jssor_1_slider_init();
    </script>
    <script src="js/aos.js"></script>
    <script>
      AOS.init({
        easing: 'ease-in-out-sine'
      });
    </script>
</body>
</html>
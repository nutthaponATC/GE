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
	
	<!-- <main class="cd-main-content">
		<div class="cd-fixed-bg cd-bg-1">
			<div>
				<h1>เกี่ยวกับเรา</h1>
			</div>
		</div>
	</main> -->

	<div class="jumbotron" style="margin-top:20px; background-color:#ffffff;">
		<div class="container visible-lg" id="philosophy">
			<div class="col-md-1">
				<img src="icon.png" style="margin-top:-10px;">
			</div>
			<div class="col-md-3">
				<h2 style="margin-top:-15px; margin-left:-40px;">ประวัติความเป็นมา</h2>
			</div>
			<div class="col-md-12 line"></div>
		</div>
		<div class="container hidden-lg" style="margin-top:70px;">
			<div class="col-md-12" style="text-align:center;">
				<h2 style="margin-top:-15px; margin-left:-40px;">ประวัติความเป็นมา</h2>
			</div>
			<div class="col-md-12 line"></div>
		</div>
		<div class="container aos-all">
			<p data-aos="fade-left" style="margin-top:-40px; margin:-auto; text-indent: 2.5em;">
			สำนักวิชาศึกษาทั่วไป เป็นส่วนงานของสถาบันเทคโนโลยีพระจอมเกล้าเจ้าคุณทหารลาดกระบัง ซึ่งเกิดขึ้นตามนโยบายของสถาบันที่ให้จัดตั้งหน่วยงาน เพื่อบริหารจัดการและพัฒนาด้านการเรียนการสอนวิชาศึกษาทั่วไปของสถาบัน  โดยได้ผ่านการอนุมัติจากการประชุมสภาสถาบันเทคโนโลยีพระจอมเกล้าเจ้าคุณทหารลาดกระบัง ครั้งที่ 12/2557 วันที่ 26 พฤศจิกายน 2557 เรื่อง ขอเสนอพิจารณาประกาศสถาบัน เรื่อง การจัดตั้งสำนักวิชาศึกษาทั่วไป เป็นส่วนงานในสถาบันเทคโนโลยีพระจอมเกล้าเจ้าคุณทหารลาดกระบัง (ฉบับที่ 5) พ.ศ....... โดยมีประกาศสถาบันเทคโนโลยีพระจอมเกล้าเจ้าคุณทหารลาดกระบัง เรื่อง การจัดตั้งส่วนงานในสถาบันเทคโนโลยีพระจอมเกล้าเจ้าคุณทหารลาดกระบัง (ฉบับที่ 5) พ.ศ.2557 วันที่ ๓ ธันวาคม ๒๕๕๗  (ประกาศในราชกิจจานุเบกษาหน้า 12 เล่ม 131 ตอนพิเศษ 262 ง วันที่ 23 ธันวาคม 2557)
			</p>
		</div>

		<div class="container visible-lg" id="vision" style="margin-top:70px;">
			<div class="col-md-1">
				<img src="icon.png" style="margin-top:-10px;">
			</div>
			<div class="col-md-2">
				<h2 style="margin-top:-15px; margin-left:-40px;">วิสัยทัศน์</h2>
			</div>
			<div class="col-md-12 line"></div>
		</div>
		<div class="container hidden-lg" style="margin-top:70px;">
			<div class="col-md-12" style="text-align:center;">
				<h2 style="margin-top:-15px; margin-left:-40px;">วิสัยทัศน์</h2>
			</div>
			<div class="col-md-12 line"></div>
		</div>
		<div class="container aos-all" style="text-align:center;">
			<p data-aos="fade-left" style="margin-top:-40px;">
			เป็นองค์กรที่มีความเป็นเลิศในการบริหารจัดการวิชาศึกษาทั่วไป 
เพื่อสร้างบัณฑิตที่สอดคล้องตามอัตลักษณ์ของสถาบันฯ
			</p>
		</div>

		<div class="container visible-lg" id="vision" style="margin-top:70px;">
			<div class="col-md-1">
				<img src="icon.png" style="margin-top:-10px;">
			</div>
			<div class="col-md-2">
				<h2 style="margin-top:-15px; margin-left:-40px;">พันธกิจ</h2>
			</div>
			<div class="col-md-12 line"></div>
		</div>
		<div class="container hidden-lg" style="margin-top:70px;">
			<div class="col-md-12" style="text-align:center;">
				<h2 style="margin-top:-15px; margin-left:-40px;">พันธกิจ</h2>
			</div>
			<div class="col-md-12 line"></div>
		</div>
		<div class="container aos-all" style="text-align:left;">
			<p data-aos="fade-left" style="margin-top:-40px;">
			๑.	พัฒนาและบูรณาการรายวิชาศึกษาทั่วไปอย่างต่อเนื่อง ให้นักศึกษาได้ศึกษาเรียนรู้เพื่อเป็นบัณฑิตตามอัตลักษณ์ของสถาบันฯ <br>
๒.	พัฒนารูปแบบการเรียนการสอนรายวิชาศึกษาทั่วไปเพื่อให้เป็นไปตามผลลัพธ์การเรียนรู้ตามที่ตั้งไว้ โดยเน้นการเรียนรู้เชิงรุก (Active Learning) <br>
๓.	พัฒนาระบบสารสนเทศเพื่อการบริหารจัดการและกำกับดูแลคุณภาพการเรียนการสอนให้มีประสิทธิภาพ <br>
๔.	ดำเนินการให้การบริหารจัดการวิชาศึกษาทั่วไปเป็นไปตามหลักธรรมาภิบาล <br>
๕.	ส่งเสริมและพัฒนาสมรรถนะขีดความสามารถของบุคลากรในสำนักอย่างเป็นระบบและต่อเนื่อง <br>
๖.	สนับสนุนและเข้าร่วมกิจกรรมของเครือข่ายการศึกษาทั่วไปแห่งประเทศไทยเพื่อการพัฒนาในทุกด้านอย่างยั่งยืน

			</p>
		</div>

		<div class="container visible-lg" id="mission" style="margin-top:70px;">
			<div class="col-md-1">
				<img src="icon.png" style="margin-top:-10px;">
			</div>
			<div class="col-md-3">
				<h2 style="margin-top:-15px; margin-left:-40px;">นโยบายการบริหาร</h2>
			</div>
			<div class="col-md-12 line"></div>
		</div>
		<div class="container hidden-lg" style="margin-top:70px;">
			<div class="col-md-12" style="text-align:center;">
				<h2 style="margin-top:-15px; margin-left:-40px;">นโยบายการบริหาร</h2>
			</div>
			<div class="col-md-12 line"></div>
		</div>
		<div class="container aos-all" style="margin-right:50px;">
			<p data-aos="fade-left" style="margin-top:-40px;">	
				นโยบายการบริหาร
			</p>
		</div>
		<div class="container visible-lg" id="oganizetion" style="margin-top:70px;">
			<div class="col-md-1">
				<img src="icon.png" style="margin-top:-10px;">
			</div>
			<div class="col-md-5">
				<h2 style="margin-top:-15px; margin-left:-40px;">โครงสร้างการบริหาร</h2>
			</div>
			<div class="col-md-12 line"></div>
		</div>
		<div class="container hidden-lg" style="margin-top:70px;">
			<div class="col-md-12" style="text-align:center;">
				<h2 style="margin-top:-15px; margin-left:-40px;">โครงสร้างการบริหาร</h2>
			</div>
			<div class="col-md-12 line"></div>
		</div>
		<div class="container aos-all" style="text-align:center;">
			<img src="image/oganize.png" class="img-responsive" data-aos="zoom-in">
		</div>

		<div class="container visible-lg" id="staff" style="margin-top:170px;">
			<div class="col-md-1">
				<img src="icon.png" style="margin-top:-10px;">
			</div>
			<div class="col-md-3">
				<h2 style="margin-top:-15px; margin-left:-40px;">ผู้บริหาร</h2>
			</div>
			<div class="col-md-12 line"></div>
		</div>
		<div class="container hidden-lg" style="margin-top:70px;">
			<div class="col-md-12" style="text-align:center;">
				<h2 style="margin-top:-15px; margin-left:-40px;">ผู้บริหาร</h2>
			</div>
			<div class="col-md-12 line"></div>
		</div>
		<div class="container">
			<img src="image/ge-team.png" width="100%">
			<div style="width:100%;">
				<img src="image/ge-team-black.jpg" width="20%">	
			</div>
			<div style="width:50%; float:left;">
				<h2>(1) ดร.อำภาพรรณ  ตันตินาครกูล</h2>
				<p>ผู้อำนวยการสำนักวิชาศึกษาทั่วไป</p>
			</div>
			<div style="width:50%; float:left;">
				<h2>(2) ผศ.ดร.สมศักดิ์  วลัยรัชต์</h2>
				<p>รองผู้อำนวยการสำนักวิชาศึกษาทั่วไป</p>
			</div>
			<div style="width:50%; float:left;">
				<h2>(3) ผศ.ดร.ประสันต์  ชุ่มใจหาญ</h2>
				<p>รองผู้อำนวยการสำนักวิชาศึกษาทั่วไป</p>
			</div>
			<div style="width:50%; float:left;">
				<h2>(4) รศ.ดร.กาญจนา บุญภักดิ์</h2>
				<p>รองผู้อำนวยการสำนักวิชาศึกษาทั่วไป</p>
			</div>
			<div style="width:50%; float:left;">
				<h2>(5) ดร.รวิช ควรประเสริฐ</h2>
				<p>ผู้ช่วยผู้อำนวยการสำนักวิชาศึกษาทั่วไป</p>
			</div>
			<div style="width:50%; float:left;">
				<h2>(6) ผศ.ดร.ฐิยาพร  กันตาธนวัฒน์</h2>
				<p>ผู้ช่วยผู้อำนวยการสำนักวิชาศึกษาทั่วไป</p>
			</div>
		</div>
			

		<div class="container visible-lg" style="margin-top:100px;">
			<div class="col-md-1">
				<img src="icon.png" style="margin-top:-10px;">
			</div>
			<div class="col-md-1">
				<h2 style="margin-top:-15px; margin-left:-40px;">เจ้าหน้าที่</h2>
			</div>
			<div class="col-md-10 line2"></div>
		</div>
		<div class="container hidden-lg" style="margin-top:70px;">
			<div class="col-md-12" style="text-align:center;">
				<h2 style="margin-top:-15px; margin-left:-40px;">เจ้าหน้าที่</h2>
			</div>
			<div class="col-md-12 line2"></div>
		</div>
		<div class="container">
			<div class="grid3">
				<div class="col-md-4" style="text-align:center;">
					<p style="margin-top:30px; font-size: 170%; color:#be6a77;">เจ้าหน้าที่บริหารงานทั่วไป</p>
					<figure class="effect-julia">
						<img src="" class="img-responsive" style=""/>
						<figcaption>
							<h2>นางสาวกฤชกมล  มงคลสวัสดิ์</h2>
							<div></div>
						</figcaption>			
					</figure>
				</div>
				<div class="col-md-4" style="text-align:center;">
					<p style="margin-top:30px; font-size: 170%; color:#be6a77;">นักวิชาการศึกษา</p>
					<figure class="effect-julia">
						<img src="" class="img-responsive" style=""/>
						<figcaption>
							<h2>นางพิมสิริ  อุ่นตรงจิตร</h2>
							<div></div>
						</figcaption>			
					</figure>
				</div>
				<div class="col-md-4" style="text-align:center;">
					<p style="margin-top:30px; font-size: 170%; color:#be6a77;">นักวิชาการศึกษา</p>
					<figure class="effect-julia">
						<img src="" class="img-responsive" style=""/>
						<figcaption>
							<h2>นางสาวผจงจิตต์  ยืนวงษ์</h2>
							<div></div>
						</figcaption>			
					</figure>
				</div>
			</div>
		</div>
	</div>
	
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
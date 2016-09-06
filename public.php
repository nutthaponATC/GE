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

	<!-- language -->
	<div class="container">
		<div class="col-md-11">
			<img src="logo.png" class="img-responsive">
		</div>
		<div class="col-md-1">
			<div class="visible-lg" style="margin-top:100%; color:#be6a77; text-align:center;">
				<p style="display: inline-block;">Language</p>
				<a href="">TH</a> | <a href="">EN</a>
			</div>
			<div class="hidden-lg" style="text-align: center; color:#be6a77;">
				<p style="display: inline-block;">language</p>
				<a href="">TH</a> | <a href="">EN</a>
			</div>
		</div>
	</div>

	<!-- navbar -->
	<div class="container" style="margin-bottom:20px;">
		<div id="custom-bootstrap-menu" class="navbar navbar-default " role="navigation">
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
		            	<li><a href="index.php">หน้าหลัก</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">เกี่ยวกับสำนัก</b></a>
							<ul class="dropdown-menu" id="dropdown">
								<li><a href="about.php"><i class="fa fa-chevron-right" style="font-size:8px;"></i> ประวัติความเป็นมา</a></li>
								<li><a href="about.php#vision"><i class="fa fa-chevron-right" style="font-size:8px;"></i> วิสัยทัศน์ พันธกิจ</a></li>
								<li><a href="about.php#mission"><i class="fa fa-chevron-right" style="font-size:8px;"></i> นโยบายการบริหาร</a></li>
								<li><a href="about.php#oganizetion"><i class="fa fa-chevron-right" style="font-size:8px;"></i> โครงสร้างการบริหาร</a></li>
								<li><a href="about.php#staff"><i class="fa fa-chevron-right" style="font-size:8px;"></i> บุคลากร</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">หลักสูตร</b></a>
							<ul class="dropdown-menu" id="dropdown">
								<li><a href="culiculum.php"><i class="fa fa-chevron-right" style="font-size:8px;"></i> โครงสร้างรายวิชา</a></li>
								<li><a href="culiculum.php#2"><i class="fa fa-chevron-right" style="font-size:8px;"></i> กลุ่ม</a></li>
								<li><a href="culiculum.php#3"><i class="fa fa-chevron-right" style="font-size:8px;"></i> รายวิชา</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="activity.php" class="dropdown-toggle" data-toggle="dropdown">กิจกรรม</b></a>
							<ul class="dropdown-menu" id="dropdown">
								<li><a href="activity.php"><i class="fa fa-chevron-right" style="font-size:8px;"></i> บุคลากร</a></li>
								<li><a href="activity.php#student"><i class="fa fa-chevron-right" style="font-size:8px;"></i> นักศึกษา</a></li>
							</ul>
						</li>
						<li><a href="public.php">เอกสาร | วิดีโอเผยแพร่</a></li>
						<li><a href="contact.php">ติดต่อเรา</a></li>
		            </ul>
		        </div>
		    </div>
		</div>
	</div>
	
	<main class="cd-main-content">
		<div class="cd-fixed-bg cd-bg-2">
			<div>
				<h1>เอกสาร และวิดีโอเผยแพร่</h1>
			</div>
		</div>
	</main>

	<div class="jumbotron" style="margin-top:20px; background-color:#ffffff;">
		<div class="container visible-lg">
			<div class="col-md-1">
				<img src="icon.png" style="margin-top:-10px;">
			</div>
			<div class="col-md-1">
				<h2 style="margin-top:-15px; margin-left:-40px;">เอกสาร</h2>
			</div>
			<div class="col-md-10 line2"></div>
		</div>
		<div class="container hidden-lg" style="margin-top:70px;">
			<div class="col-md-12" style="text-align:center;">
				<h2 style="margin-top:-15px; margin-left:-40px;">เอกสาร</h2>
			</div>
			<div class="col-md-12 line2"></div>
		</div>
		<div class="container" style="margin-top:20px;">
			<?php for ($i=0; $i < 10; $i++) { 
			?>
			<a href="#" class="text2">
				<div class="col-md-1">
				</div>
				<div class="col-md-2">
					<div class="col-md-1">
						<i class="fa fa-play fa-lg" aria-hidden="true" style="margin-top:15px;"></i>
					</div>
					<div class="col-md-1">
						<i class="fa fa-file-text fa-3x" aria-hidden="true"></i>
					</div>
				</div>
				<div class="col-md-9">
					<p style="margin-top:5px;">ชื่อไฟล์เอกสาร</p>
				</div>
			</a>
			<?php }  ?>
			<div style="text-align:center;">
				<nav aria-label="Page navigation">
					<ul class="pagination">
						<li>
							<a href="#" aria-label="Previous">
								<span aria-hidden="true">&laquo;</span>
							</a>
						</li>
						<li><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li>
							<a href="#" aria-label="Next">
								<span aria-hidden="true">&raquo;</span>
							</a>
						</li>
					</ul>
				</nav>
			</div>
		</div>

		<div class="container visible-lg" style="margin-top:80px;">
			<div class="col-md-1">
				<img src="icon.png" style="margin-top:-10px;">
			</div>
			<div class="col-md-1">
				<h2 style="margin-top:-15px; margin-left:-40px;">วิดีโอ</h2>
			</div>
			<div class="col-md-10 line2"></div>
		</div>
		<div class="container hidden-lg" style="margin-top:70px;">
			<div class="col-md-12" style="text-align:center;">
				<h2 style="margin-top:-15px; margin-left:-40px;">วิดีโอ</h2>
			</div>
			<div class="col-md-12 line2"></div>
		</div>
		<div class="container" style="margin-top:20px;">
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

		<div class="container" style="margin-top:20px;">
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

		<div class="container" style="margin-top:20px;">
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
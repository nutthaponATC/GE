<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="icon.png">

	<!-- font -->
	<link href="https://fonts.googleapis.com/css?family=Athiti:500" rel="stylesheet">
  	
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

	<div id="custom-bootstrap-menu" class="navbar navbar-default" style="border-style: none; z-index: 900; width:100%; position: fixed; top:0;" role="navigation">
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
	            	<li><a href="index.php" id="fz2"><img src="logo2.png" style="margin-top:-10px; margin-bottom:-10px;" width="15%"> สำนักวิชาศึกษาทั่วไป</a></li>
	            	<li style="border-left:2px solid rgba(255, 255, 255, 0.3); "><a href="index.php" id="fz">หน้าหลัก</a></li>
					<li><a href="about.php" id="fz">เกี่ยวกับสำนัก</a></li>
					<li class="dropdown">
						<a href="#"  id="fz" class="dropdown-toggle" data-toggle="dropdown">หมวดวิชาศึกษาทั่วไป</b></a>
						<ul class="dropdown-menu" id="dropdown">
							<li><a href="culiculum57.php">ฉบับปรับปรุง 57</a></li>
							<li><a href="culiculum59.php">ฉบับปรับปรุง 59</a></li>
						</ul>
					</li>
					<li><a href="instructor.php" id="fz">ทำเนียบอาจารย์ผู้สอน</a></li>
					<li><a href="activity.php" id="fz">กิจกรรม</a></li>
					<li><a href="public.php" id="fz">เอกสาร | วิดีโอเผยแพร่</a></li>
					<li><a href="index.php#info" id="fz">ข่าวประชาสัมพันธ์</a></li>
					<li><a href="contact.php" id="fz">ติดต่อเรา</a></li>
					<li><a href="">TH | ENG</a></li>
	            </ul>
	        </div>
	    </div>
	</div>

	<a href="index.php" class="visible-lg"><img src="mc.png" id="bthome"></a>
	<a href="index.php" class="hidden-lg"><img src="mc.png" id="bthome2"></a>

	<div style="margin-top:60px;">
		<div class="container visible-lg" id="1" style="margin-top:100px;">
			<div class="col-md-2">
				<img src="logo2.png" style="margin-top:-40px;">
			</div>
			<div class="col-md-3">
				<h2 style="margin-top:-15px; margin-left:-40px;">ทำเนียบอาจารย์ผู้สอน</h2>
			</div>
			<div class="col-md-7 line"></div>
		</div>
		<div class="container hidden-lg" style="margin-top:70px;">
			<div class="col-md-12" style="text-align:center;">
				<h2 style="margin-top:-15px; margin-left:-40px;">ทำเนียบอาจารย์ผู้สอน</h2>
			</div>
			<div class="col-md-12 line"></div>
		</div>

		<div class="container" style="margin-top:40px;">
		<?php 
		include('admin/config.php');

		$sql = "SELECT * FROM instructor ORDER BY name DESC";
		mysql_query("SET NAMES utf8");
		$query = mysql_query($sql);
		while ($data = mysql_fetch_array($query)) {
			echo "<div class='col-md-6'>";
			echo "<div class='col-md-4'>";
			echo "<img src='image/instructor/".$data['picture']."' height='250px'>";
			echo "</div>";	
			echo "<div class='col-md-8'>";
			echo "<h3 style='margin-top:130px;'>".$data['name']."</h3>";
			echo "</div>";	
			echo "</div>";	
		}

		 ?>
		</div>
	</div>
	
	<div class="visible-lg" style="margin-top:40px; background-color:#8e3240; padding-bottom:20px;">
		<div class="container" style="color:#ffffff;">
			<div class="col-md-3">
				<br>
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

	<div class="hidden-lg" style="background-color:#8e3240; text-align:center; padding-bottom:20px;">
		<div class="container" style="color:#ffffff;">
			<div class="col-md-3">
				<br>
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
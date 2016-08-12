<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="icon.png">

	<link href="https://fonts.googleapis.com/css?family=Athiti:400" rel="stylesheet">

	<link rel="stylesheet" href="reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="style.css"> <!-- Resource style -->
	<script src="modernizr.js"></script> <!-- Modernizr -->
  	
	<title>สำนักศึกษาทั่วไป General Education</title>

	<link rel="stylesheet" href="style.css">

	<!-- bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">
	<link rel="stylesheet" href="animate.css">
</head>
<body>
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
		            	<li><a href="#">หน้าหลัก</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">หลักสูตร</b></a>
							<ul class="dropdown-menu" id="dropdown">
								<li><a href="#"><i class="fa fa-chevron-right" style="font-size:8px;"></i> ผลลัพธ์การเรียนรู้</a></li>
								<li><a href="#"><i class="fa fa-chevron-right" style="font-size:8px;"></i> กลุ่มวิชา</a></li>
								<li><a href="#"><i class="fa fa-chevron-right" style="font-size:8px;"></i> โครงสร้างรายวิชา</a></li>
								<li><a href="#"><i class="fa fa-chevron-right" style="font-size:8px;"></i> รายวิชา</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">กิจกรรม</b></a>
							<ul class="dropdown-menu" id="dropdown">
								<li><a href="#"><i class="fa fa-chevron-right" style="font-size:8px;"></i> บุคลากร</a></li>
								<li><a href="#"><i class="fa fa-chevron-right" style="font-size:8px;"></i> นักศึกษา</a></li>
							</ul>
						</li>
						<li><a href="#">เอกสาร | วิดีโอเผยแพร่</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">เกี่ยวกับเรา</b></a>
							<ul class="dropdown-menu" id="dropdown">
								<li><a href="#"><i class="fa fa-chevron-right" style="font-size:8px;"></i> ปรัชญา</a></li>
								<li><a href="#"><i class="fa fa-chevron-right" style="font-size:8px;"></i> วิสัยทัศน์</a></li>
								<li><a href="#"><i class="fa fa-chevron-right" style="font-size:8px;"></i> พันธกิจ</a></li>
								<li><a href="#"><i class="fa fa-chevron-right" style="font-size:8px;"></i> บุคลากร</a></li>
							</ul>
						</li>
						<li><a href="#">ติดต่อเรา</a></li>
		            </ul>
		        </div>
		    </div>
		</div>
	</div>

	<!-- <div class="jumbotron">

	</div> -->
	

	<main class="cd-main-content">
		<div class="cd-fixed-bg cd-bg-1">
			<h1>สำนักศึกษาทั่วไป General Education</h1>
		</div> <!-- cd-fixed-bg -->

		<div class="jumbotron">
			<div class="container">
				<div class="col-md-12">
					<h3><i class="fa fa-flag" aria-hidden="true"></i> ประชาสัมพันธ์</h3><a href="#"><p style="text-align: right; margin-top:-30px; font-size: 100%;">ดูทั้งหมด</p></a>
				</div>
				<div class="animation-element">
				<?php 
					for ($i=0; $i < 6; $i++) { 
				?>
				<div class="col-md-4 fadeInDown animated">
					<div class="infomation">
					<a href="#" style="text-decoration: none;"><div class="thumbnail">
						<img class="img-responsive"  src="image/info.png">
						<div class="caption">
							<p>หัวข้อประชาสัมพันธ์</p>
							รายละเอียด รายละเอียด รายละเอียด รายละเอียด รายละเอียด รายละเอียด รายละเอียด รายละเอียด 
						</div>
					</div></a>
					</div>
				</div>
				<?php } ?>
				</div>	
			</div>
		</div>

		<div class="cd-fixed-bg cd-bg-2" style="heigth:50%;">
			<h2>กิจกรรม</h2>
		</div> <!-- cd-fixed-bg -->

		<div class="cd-scrolling-bg cd-color-3">
			<div class="cd-container">
				<p>
					
				</p>
			</div> <!-- cd-container -->
		</div> <!-- cd-scrolling-bg -->

		<div class="cd-fixed-bg cd-bg-3">
			<h2>เอกสาร | วิดีโอเผยแพร่</h2>
		</div> <!-- cd-fixed-bg -->

	</main> <!-- cd-main-content -->
	
	<script src="main.js"></script> <!-- background -->
	<script src="jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/navbar.js"></script>
	<script src="js/animate-scroll.js"></script>
	<script src="magic-line.js"></script>
</body>
</html>
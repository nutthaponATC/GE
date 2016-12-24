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
					<li class="dropdown">
						<a href="activity.php" class="dropdown-toggle" data-toggle="dropdown" id="fz">กิจกรรม</b></a>
						<ul class="dropdown-menu" id="dropdown">
							<li><a href="activity.php">บุคลากร</a></li>
							<li><a href="activity.php#student">นักศึกษา</a></li>
						</ul>
					</li>
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
	
	<div class="cd-fixed-bg cd-bg-2" style="margin-top:60px;">
		<div>
			<h1>เอกสาร และวิดีโอเผยแพร่</h1>
		</div>
	</div>

	<div class="jumbotron" style="margin-top:20px; background-color:#ffffff;">
		<div class="container visible-lg" style="margin-top:80px;">
			<div class="col-md-2">
				<img src="logo2.png" style="margin-top:-40px;">
			</div>
			<div class="col-md-1">
				<h2 style="margin-top:-15px; margin-left:-40px;">เอกสาร</h2>
			</div>
			<div class="col-md-9 line2"></div>
		</div>
		<div class="container hidden-lg" style="margin-top:20px;">
			<div class="col-md-12" style="text-align:center;">
				<h2 style="margin-top:-15px;">เอกสาร</h2>
			</div>
			<div class="col-md-12 line2"></div>
		</div>
		<div class="container" style="margin-top:20px; height:1000px;">
			<div class="col-md-4" style="text-align:center;">
				<div class="col-md-12" id="btm1" style="margin-top:5px; border: 4px solid #ee8e3c; border-radius: 10px;">
					<h3>ปฏิทินกิจกรรม GenEd</h3>
				</div>
				<div class="col-md-12" id="btm2" style="margin-top:5px; border: 4px solid #ee8e3c; border-radius: 10px;">
					<h3>แบบฟอร์มสำหรับ อาจารย์</h3>
				</div>
				<div class="col-md-12" id="btm3" style="margin-top:5px; border: 4px solid #ee8e3c; border-radius: 10px;">
					<h3>แบบฟอร์มสำหรับ นักศึกษา</h3>
				</div>
				<div class="col-md-12" id="btm4" style="margin-top:5px; border: 4px solid #ee8e3c; border-radius: 10px;">
					<h3>ประกาศที่เกี่ยวข้อง</h3>
				</div>
				<div class="col-md-12" id="btm5" style="margin-top:5px; border: 4px solid #ee8e3c; border-radius: 10px;">
					<h3>เอกสารประกอบการสอน</h3>
				</div>
					<div class="col-md-11" id="group1" style="margin-left:30px; margin-top:5px; background-color:#be6a77; color:#ffffff; border-radius: 10px;">
						<h3>กลุ่มคุณค่าแห่งชีวิต</h3>
					</div>
						<div class="col-md-10" id="group1-1" style="margin-left:60px; margin-top:5px; background-color:#ee8e3c; color:#ffffff; border-radius: 10px;">
							<h3>วิชา 90159001</h3>
						</div>
						<div class="col-md-10" id="group1-2" style="margin-left:60px; margin-top:5px; background-color:#ee8e3c; color:#ffffff; border-radius: 10px;">
							<h3>วิชา 90159002</h3>
						</div>
						<div class="col-md-10" id="group1-3" style="margin-left:60px; margin-top:5px; background-color:#ee8e3c; color:#ffffff; border-radius: 10px;">
							<h3>วิชา 90159003</h3>
						</div>
						<div class="col-md-10" id="group1-4" style="margin-left:60px; margin-top:5px; background-color:#ee8e3c; color:#ffffff; border-radius: 10px;">
							<h3>วิชา 90159004</h3>
						</div>

					<div class="col-md-11" id="group2" style="margin-left:30px; margin-top:5px; background-color:#be6a77; color:#ffffff; border-radius: 10px;">
						<h3>กลุ่มวิถีแห่งสังคม</h3>
					</div>
					<div class="col-md-11" id="group3" style="margin-left:30px; margin-top:5px; background-color:#be6a77; color:#ffffff; border-radius: 10px;">
						<h3>กลุ่มศาสตร์แห่งความคิด</h3>
					</div>
					<div class="col-md-11" id="group4" style="margin-left:30px; margin-top:5px; background-color:#be6a77; color:#ffffff; border-radius: 10px;">
						<h3>กลุ่มศิลปะแห่งการจัดการ</h3>
					</div>
					<div class="col-md-11" id="group5" style="margin-left:30px; margin-top:5px; background-color:#be6a77; color:#ffffff; border-radius: 10px;">
						<h3>กลุ่มภาษาและการสื่อสาร</h3>
					</div>
				<div class="col-md-12" id="btm6" style="margin-top:5px; border: 4px solid #ee8e3c; border-radius: 10px;">
					<h3>หนังสือนอกเวลา</h3>
				</div>
			</div>

			<div class="col-md-8">
				<div class="col-md-12" id="table1">
					<h3>ปฏิทินกิจกรรม GenEd</h3>
					<table class="table table-bordered table-inverse">
						<thead>
							<tr class="bg-danger">
								<th width="5%"></th>
								<th></th>
								<th width="5%"></th>
								<th width="5%"></th>
							</tr>
						</thead>
						<tbody>
							<tr class="bg-warning">
								<th scope="row">1</th>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">2</th>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">3</th>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">4</th>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">5</th>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">6</th>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">7</th>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">8</th>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">9</th>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">10</th>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">11</th>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">12</th>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">13</th>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">14</th>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">15</th>
								<td></td>
								<td></td>
								<td></td>
							</tr>
						</tbody>
					</table>
				</div>

				<div class="col-md-12" id="table2">
					<h3>แบบฟอร์มสำหรับ อาจารย์</h3>
					<table class="table table-bordered table-inverse">
						<thead>
							<tr class="bg-danger">
								<th width="10%">ฉบับที่</th>
								<th>เอกสาร</th>
								<th width="5%">download</th>
								<th width="5%"></th>
							</tr>
						</thead>
						<tbody>
							<tr class="bg-warning">
								<th scope="row">1</th>
								<td>มคอ 3</td>
								<td>
									<i class="fa fa-file-text-o" aria-hidden="true"></i>
								</td>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">2</th>
								<td>มคอ 5</td>
								<td>
									<i class="fa fa-file-text-o" aria-hidden="true"></i>
								</td>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">3</th>
								<td>เอกสารสมัครสอน</td>
								<td>
									<i class="fa fa-file-text-o" aria-hidden="true"></i>
								</td>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">4</th>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">5</th>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">6</th>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">7</th>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">8</th>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">9</th>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">10</th>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">11</th>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">12</th>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">13</th>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">14</th>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">15</th>
								<td></td>
								<td></td>
								<td></td>
							</tr>
						</tbody>
					</table>
				</div>

				<div class="col-md-12" id="table3">
					<h3>แบบฟอร์มสำหรับ นักศึกษา</h3>
					<table class="table table-bordered table-inverse">
						<thead>
							<tr class="bg-danger">
								<th width="10%">ฉบับที่</th>
								<th>เอกสาร</th>
								<th width="5%">download</th>
								<th width="5%"></th>
							</tr>
						</thead>
						<tbody>
							<tr class="bg-warning">
								<th scope="row">1</th>
								<td></td>
								<td>
									<i class="fa fa-file-text-o" aria-hidden="true"></i>
								</td>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">2</th>
								<td></td>
								<td>
									<i class="fa fa-file-text-o" aria-hidden="true"></i>
								</td>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">3</th>
								<td></td>
								<td>
									<i class="fa fa-file-text-o" aria-hidden="true"></i>
								</td>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">4</th>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">5</th>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">6</th>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">7</th>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">8</th>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">9</th>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">10</th>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">11</th>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">12</th>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">13</th>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">14</th>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">15</th>
								<td></td>
								<td></td>
								<td></td>
							</tr>
						</tbody>
					</table>
				</div>

				<div class="col-md-12" id="table4">
					<h3>ประกาศที่เกี่ยวข้อง</h3>
					<table class="table table-bordered table-inverse">
						<thead>
							<tr class="bg-danger">
								<th width="10%">ฉบับที่</th>
								<th>ประกาศ</th>
							</tr>
						</thead>
						<tbody>
							<tr class="bg-warning">
								<th scope="row">1</th>
								<td></td>
							<tr class="bg-warning">
								<th scope="row">2</th>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">3</th>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">4</th>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">5</th>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">6</th>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">7</th>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">8</th>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">9</th>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">10</th>
								<td></td>							
							</tr>
							<tr class="bg-warning">
								<th scope="row">11</th>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">12</th>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">13</th>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">14</th>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">15</th>
								<td></td>
							</tr>
						</tbody>
					</table>
				</div>

				<div class="col-md-12" id="tableG1S1">
					<h3>วิชา 90159001</h3>
					<table class="table table-bordered table-inverse">
						<thead>
							<tr class="bg-danger">
								<th width="10%">ฉบับที่</th>
								<th>เอกสาร</th>
								<th width="5%">download</th>
								<th width="5%"></th>
							</tr>
						</thead>
						<tbody>
							<tr class="bg-warning">
								<th scope="row">1</th>
								<td>มคอ 3</td>
								<td>
									<i class="fa fa-file-text-o" aria-hidden="true"></i>
								</td>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">2</th>
								<td>มคอ 5</td>
								<td>
									<i class="fa fa-file-text-o" aria-hidden="true"></i>
								</td>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">3</th>
								<td></td>
								<td>
									<i class="fa fa-file-text-o" aria-hidden="true"></i>
								</td>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">4</th>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">5</th>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">6</th>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">7</th>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">8</th>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">9</th>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">10</th>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">11</th>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">12</th>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">13</th>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">14</th>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">15</th>
								<td></td>
								<td></td>
								<td></td>
							</tr>
						</tbody>
					</table>
				</div>

				<div class="col-md-12" id="tableG1S2">
					<h3>วิชา 90159002</h3>
					<table class="table table-bordered table-inverse">
						<thead>
							<tr class="bg-danger">
								<th width="10%">ฉบับที่</th>
								<th>เอกสาร</th>
								<th width="5%">download</th>
								<th width="5%"></th>
							</tr>
						</thead>
						<tbody>
							<tr class="bg-warning">
								<th scope="row">1</th>
								<td>มคอ 3</td>
								<td>
									<i class="fa fa-file-text-o" aria-hidden="true"></i>
								</td>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">2</th>
								<td>มคอ 5</td>
								<td>
									<i class="fa fa-file-text-o" aria-hidden="true"></i>
								</td>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">3</th>
								<td></td>
								<td>
									<i class="fa fa-file-text-o" aria-hidden="true"></i>
								</td>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">4</th>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">5</th>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">6</th>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">7</th>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">8</th>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">9</th>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">10</th>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">11</th>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">12</th>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">13</th>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">14</th>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">15</th>
								<td></td>
								<td></td>
								<td></td>
							</tr>
						</tbody>
					</table>
				</div>

				<div class="col-md-12" id="tableG1S3">
					<h3>วิชา 90159003</h3>
					<table class="table table-bordered table-inverse">
						<thead>
							<tr class="bg-danger">
								<th width="10%">ฉบับที่</th>
								<th>เอกสาร</th>
								<th width="5%">download</th>
								<th width="5%"></th>
							</tr>
						</thead>
						<tbody>
							<tr class="bg-warning">
								<th scope="row">1</th>
								<td>มคอ 3</td>
								<td>
									<i class="fa fa-file-text-o" aria-hidden="true"></i>
								</td>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">2</th>
								<td>มคอ 5</td>
								<td>
									<i class="fa fa-file-text-o" aria-hidden="true"></i>
								</td>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">3</th>
								<td></td>
								<td>
									<i class="fa fa-file-text-o" aria-hidden="true"></i>
								</td>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">4</th>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">5</th>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">6</th>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">7</th>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">8</th>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">9</th>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">10</th>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">11</th>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">12</th>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">13</th>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">14</th>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">15</th>
								<td></td>
								<td></td>
								<td></td>
							</tr>
						</tbody>
					</table>
				</div>

				<div class="col-md-12" id="tableG1S4">
					<h3>วิชา 90159004</h3>
					<table class="table table-bordered table-inverse">
						<thead>
							<tr class="bg-danger">
								<th width="10%">ฉบับที่</th>
								<th>เอกสาร</th>
								<th width="5%">download</th>
								<th width="5%"></th>
							</tr>
						</thead>
						<tbody>
							<tr class="bg-warning">
								<th scope="row">1</th>
								<td>มคอ 3</td>
								<td>
									<i class="fa fa-file-text-o" aria-hidden="true"></i>
								</td>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">2</th>
								<td>มคอ 5</td>
								<td>
									<i class="fa fa-file-text-o" aria-hidden="true"></i>
								</td>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">3</th>
								<td></td>
								<td>
									<i class="fa fa-file-text-o" aria-hidden="true"></i>
								</td>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">4</th>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">5</th>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">6</th>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">7</th>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">8</th>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">9</th>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">10</th>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">11</th>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">12</th>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">13</th>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">14</th>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">15</th>
								<td></td>
								<td></td>
								<td></td>
							</tr>
						</tbody>
					</table>
				</div>

				<div class="col-md-12" id="table6">
					<h3>หนังสือนอกเวลา</h3>
					<table class="table table-bordered table-inverse">
						<thead>
							<tr class="bg-danger">
								<th width="10%">ลำดับ</th>
								<th>ชื่อหนังสือ</th>
								<th width="5%">download</th>
							</tr>
						</thead>
						<tbody>
							<tr class="bg-warning">
								<th scope="row">1</th>
								<td></td>
								<td>
									<i class="fa fa-file-text-o" aria-hidden="true"></i>
								</td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">2</th>
								<td></td>
								<td>
									<i class="fa fa-file-text-o" aria-hidden="true"></i>
								</td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">3</th>
								<td></td>
								<td>
									<i class="fa fa-file-text-o" aria-hidden="true"></i>
								</td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">4</th>
								<td></td>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">5</th>
								<td></td>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">6</th>
								<td></td>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">7</th>
								<td></td>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">8</th>
								<td></td>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">9</th>
								<td></td>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">10</th>
								<td></td>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">11</th>
								<td></td>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">12</th>
								<td></td>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">13</th>
								<td></td>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">14</th>
								<td></td>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">15</th>
								<td></td>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">16</th>
								<td></td>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">17</th>
								<td></td>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">18</th>
								<td></td>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">19</th>
								<td></td>
								<td></td>
							</tr>
							<tr class="bg-warning">
								<th scope="row">20</th>
								<td></td>
								<td></td>
							</tr>
						</tbody>
					</table>
				</div>

			</div>
		</div>

		<div class="container visible-lg" style="margin-top:50px;">
			<div class="col-md-2">
				<img src="logo2.png" style="margin-top:-40px;">
			</div>
			<div class="col-md-2">
				<h2 style="margin-top:-15px; margin-left:-40px;">วิดีโอเผยแพร่</h2>
			</div>
			<div class="col-md-8 line2"></div>
		</div>
		<div class="container hidden-lg" style="margin-top:50px;">
			<div class="col-md-12" style="text-align:center;">
				<h2 style="margin-top:-15px;">วิดีโอเผยแพร่</h2>
			</div>
			<div class="col-md-12 line2"></div>
		</div>

		<div class="container" style="margin-top:30px;">
			<div class="col-md-4" style="margin-top:10px;">
				<iframe class="responsive" width="100%" height="40%" src="https://www.youtube.com/embed/8opzU51pwfM" frameborder="0" allowfullscreen></iframe>
			</div>
			<div class="col-md-4" style="margin-top:10px;">
				<iframe class="responsive" width="100%" height="40%" src="https://www.youtube.com/embed/8opzU51pwfM" frameborder="0" allowfullscreen></iframe>
			</div>
			<div class="col-md-4" style="margin-top:10px;">
				<iframe class="responsive" width="100%" height="40%" src="https://www.youtube.com/embed/8opzU51pwfM" frameborder="0" allowfullscreen></iframe>
			</div>

			<div class="col-md-4" style="margin-top:10px;">
				<iframe class="responsive" width="100%" height="40%" src="https://www.youtube.com/embed/8opzU51pwfM" frameborder="0" allowfullscreen></iframe>
			</div>
			<div class="col-md-4" style="margin-top:10px;">
				<iframe class="responsive" width="100%" height="40%" src="https://www.youtube.com/embed/8opzU51pwfM" frameborder="0" allowfullscreen></iframe>
			</div>
			<div class="col-md-4" style="margin-top:10px;">
				<iframe class="responsive" width="100%" height="40%" src="https://www.youtube.com/embed/8opzU51pwfM" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>
	</div>

	<div class="visible-lg" style="background-color:#8e3240; padding-bottom:20px;">
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

<script type="text/javascript">
	$(document).ready(function(){
		$("#table1").hide();
		$("#table2").hide();
		$("#table3").hide();
		$("#table4").hide();
		$("#table6").hide();

		$("#tableG1S1").hide();
		$("#tableG1S2").hide();
		$("#tableG1S3").hide();
		$("#tableG1S4").hide();

		$("#group1").hide();
	    $("#group2").hide();
	    $("#group3").hide();
	    $("#group4").hide();
	    $("#group5").hide();

	    $("#group1-1").hide();
	    $("#group1-2").hide();
	    $("#group1-3").hide();
	    $("#group1-4").hide();

	    $("#btm1").click(function(){
		    $("#table1").toggle();
			$("#table2").hide();
			$("#table3").hide();
			$("#table4").hide();
			$("#table6").hide();

			$("#tableG1S1").hide();
			$("#tableG1S2").hide();
			$("#tableG1S3").hide();
			$("#tableG1S4").hide();
		});
		$("#btm2").click(function(){
		    $("#table2").toggle();
		    $("#table1").hide();
			$("#table3").hide();
			$("#table4").hide();
			$("#table6").hide();

			$("#tableG1S1").hide();
			$("#tableG1S2").hide();
			$("#tableG1S3").hide();
			$("#tableG1S4").hide();
		});
		$("#btm3").click(function(){
		    $("#table3").toggle();
		    $("#table1").hide();
			$("#table2").hide();
			$("#table4").hide();
			$("#table6").hide();

			$("#tableG1S1").hide();
			$("#tableG1S2").hide();
			$("#tableG1S3").hide();
			$("#tableG1S4").hide();
		});
		$("#btm4").click(function(){
		    $("#table4").toggle();
		    $("#table1").hide();
			$("#table2").hide();
			$("#table3").hide();
			$("#table6").hide();

			$("#tableG1S1").hide();
			$("#tableG1S2").hide();
			$("#tableG1S3").hide();
			$("#tableG1S4").hide();
		});
	    $("#btm5").click(function(){
		    $("#group1").toggle();
		    	$("#group1-1").hide();
		    	$("#group1-2").hide();
			    $("#group1-3").hide();
			    $("#group1-4").hide();
		    $("#group2").toggle();
		    $("#group3").toggle();
		    $("#group4").toggle();
		    $("#group5").toggle();

		    $("#table1").hide();
			$("#table2").hide();
			$("#table3").hide();
			$("#table4").hide();
			$("#table6").hide();
		});

		$("#group1").click(function(){
		    $("#group1-1").toggle();
		    $("#group1-2").toggle();
		    $("#group1-3").toggle();
		    $("#group1-4").toggle();
		});

		$("#group1-1").click(function(){
		    $("#tableG1S1").toggle();
		    $("#table1").hide();
			$("#table2").hide();
			$("#table3").hide();
			$("#table4").hide();
			$("#table6").hide();

			$("#tableG1S2").hide();
			$("#tableG1S3").hide();
			$("#tableG1S4").hide();
		});
		$("#group1-2").click(function(){
		    $("#tableG1S2").toggle();
		    $("#table1").hide();
			$("#table2").hide();
			$("#table3").hide();
			$("#table4").hide();
			$("#table6").hide();

			$("#tableG1S1").hide();
			$("#tableG1S3").hide();
			$("#tableG1S4").hide();
		});
		$("#group1-3").click(function(){
		    $("#tableG1S3").toggle();
		    $("#table1").hide();
			$("#table2").hide();
			$("#table3").hide();
			$("#table4").hide();
			$("#table6").hide();

			$("#tableG1S1").hide();
			$("#tableG1S2").hide();
			$("#tableG1S4").hide();
		});
		$("#group1-4").click(function(){
		    $("#tableG1S4").toggle();
		    $("#table1").hide();
			$("#table2").hide();
			$("#table3").hide();
			$("#table4").hide();
			$("#table6").hide();

			$("#tableG1S1").hide();
			$("#tableG1S2").hide();
			$("#tableG1S3").hide();
		});
		$("#btm6").click(function(){
		    $("#table1").hide();
			$("#table2").hide();
			$("#table3").hide();
			$("#table4").hide();
			$("#table6").toggle();

			$("#tableG1S1").hide();
			$("#tableG1S2").hide();
			$("#tableG1S3").hide();
			$("#tableG1S4").hide();
		});
	});
</script>
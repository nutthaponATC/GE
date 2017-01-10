<?php include('admin/config.php'); ?>
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

	<style type="text/css">
		#banner {
		width: 100%;
		height: 110%;
		background-color: #000000;
		-webkit-animation: 20s sliderPic infinite;
		animation: 20s sliderPic infinite;
		position: relative;
		background-size: cover;
		overflow: hidden; 
		}	

		#banner2 {
		width: 100%;
		height: 50%;
		background-color: #000000;
		-webkit-animation: 20s sliderPic2 infinite;
		animation: 20s sliderPic2 infinite;
		position: relative;
		background-size: 100% 100%;
		overflow: hidden; 
		}
		
		<?php 
		$sql = "SELECT * FROM slide";
		$query = mysql_query($sql);
		$count = mysql_num_rows($query);

		$percent = 100 / $count;

		$i = 0;
		echo "@-webkit-keyframes sliderPic {";
		while ($data = mysql_fetch_array($query)) {
			if ($i == 0) {
				$imageSlide = $data['image'];
			}
			echo $i."% {";
			echo "background-image: url('img-bg/".$data['image']."');";
			echo "}";

			$i = $i + $percent;
		}
		echo "100% {";
		echo "background-image: url('img-bg/".$imageSlide."');";
		echo "}";
		echo "}";

		$j = 0;
		echo "@-webkit-keyframes sliderPic2 {";
		while ($data = mysql_fetch_array($query)) {
			if ($j == 0) {
				$imageSlide = $data['image'];
			}
			echo $j."% {";
			echo "background-image: url('img-bg/".$data['image']."');";
			echo "background-size: 100% 100%;";
		    echo "background-repeat: no-repeat;";
		    echo "background-position: center center;";
			echo "}";

			$j = $j + $percent;
		}
		echo "100% {";
		echo "background-image: url('img-bg/".$imageSlide."');";
		echo "background-size: 100% 100%;";
	    echo "background-repeat: no-repeat;";
	    echo "background-position: center center;";
		echo "}";
		echo "}";

		?>
	</style>
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
	
	<div id="banner" class="visible-lg" style="margin-top:40px;">

	</div>

	<!-- phone -->
	<div id="banner2" class="hidden-lg" style="margin-top:40px;">
		
	</div>

	<div style="width: 100%; height:34%;" class="visible-lg">
		<div class="col-md-1"></div>
		<a href="subpage.php" style="color:#000000;">
			<div class="col-md-2 subject1" style="text-align:center;  height: 100%; border-left:1px solid rgba(243, 115, 66, 1);">
				<H3 style="margin-top:30%; font-size: 190%;  ">คุณค่าแห่งชีวิต</H3>
			</div>
		</a>
		<a href="subpage.php#subject2" style="color:#000000;">
			<div class="col-md-2 subject2" style=" text-align:center;  height: 100%; border-left:1px solid rgba(254, 215, 78, 1);">
				<H3 style="margin-top:30%; font-size: 190%; ">วิถีแห่งสังคม</H3>
			</div>
		</a>
		<a href="subpage.php#subject3" style="color:#000000;">
			<div class="col-md-2 subject3" style=" text-align:center;  height: 100%; border-left:1px solid rgba(113, 176, 96, 1);">
				<H3 style="margin-top:30%; font-size: 190%; ">ศาสตร์แห่งการคิด</H3>
			</div>
		</a>
		<a href="subpage.php#subject4" style="color:#000000;">
			<div class="col-md-2 subject4" style=" text-align:center;  height: 100%; border-left:1px solid rgba(152, 81, 139, 1);">
				<H3 style="margin-top:30%; font-size: 190%; ">ศิลปะแห่งการจัดการ</H3>
			</div>
		</a>
		<a href="subpage.php#subject5" style="color:#000000;">
			<div class="col-md-2 subject5" style=" text-align:center;  height: 100%; border-left:1px solid rgba(69, 148, 191, 1);">
				<H3 style="margin-top:30%; font-size: 190%; ">ภาษาและการสื่อสาร</H3>
			</div>
		</a>
		<div class="col-md-1"></div>
	</div>

	<!-- phone -->
	<a href="subpage.php#subject1" style="color:#000000;">
		<div class="col-md-12 subject1 hidden-lg" style="margin-top:-20px; text-align:center;  height: 30px; border-left:1px solid rgba(243, 115, 66, 1);">
			<H3>คุณค่าแห่งชีวิต</H3>
		</div>
	</a>
	<a href="subpage.php#subject2" style="color:#000000;">
		<div class="col-md-12 subject2 hidden-lg" style="margin-top:-20px; text-align:center;  height: 30px; border-left:1px solid rgba(254, 215, 78, 1);">
			<H3>วิถีแห่งสังคม</H3>
		</div>
	</a>
	<a href="subpage.php#subject3" style="color:#000000;">
		<div class="col-md-12 subject3 hidden-lg" style="margin-top:-20px; text-align:center;  height: 30px; border-left:1px solid rgba(113, 176, 96, 1);">
			<H3>ศาสตร์แห่งการคิด</H3>
		</div>
	</a>
	<a href="subpage.php#subject4" style="color:#000000;">
		<div class="col-md-12 subject4 hidden-lg" style="margin-top:-20px; text-align:center;  height: 30px; border-left:1px solid rgba(152, 81, 139, 1);">
			<H3>ศิลปะแห่งการจัดการ</H3>
		</div>
	</a>
	<a href="subpage.php#subject5" style="color:#000000;">
		<div class="col-md-12 subject5 hidden-lg" style="margin-top:-20px; text-align:center;  height: 30px; border-left:1px solid rgba(69, 148, 191, 1);">
			<H3>ภาษาและการสื่อสาร</H3>
		</div>
	</a>
	<div class="visible-lg" id="info" style="background-color:#ffffff; margin-top:30px;">
		<div style="width:60%; height: 120%; background-color:#fff0df; float:left;">
			<div style="margin-left:30%; width:100%; color:#be6a77; padding-top:10px;">
				<h3>ข่าวประชาสัมพันธ์</h3>
			</div>
			<div class="line2" style="margin-left:30%; width:150px;"></div>
			<div style="margin-left:30%; width:70%; border-bottom:solid 2px #be6a77;"></div>

			<?php 
				$sql = "SELECT * FROM info WHERE status = 1 ORDER BY id_info DESC LIMIT 4 ;";
				mysql_query("SET NAMES utf8");
				$query = mysql_query($sql);
				while ($data = mysql_fetch_array($query)) {
					echo "<div class='col-md-12' style='margin-top:20px;'>";
					echo "<div class='col-md-6'>";
					echo "<img src='image/".$data['picture']."' align='right' height='20%'>";
					echo "</div>";

					echo "<div class='col-md-6'>";
					echo "<a href='detail_info.php?id_info=".$data['id_info']."' style='color:#000000; text-decoration: none;'>";
					echo "<div style='width:70%; margin-top:20px;'>";
					echo	"<p style='font-size:20;'>".$data['header']."</p>";
					echo	"<p><i class='fa fa-clock-o' aria-hidden='true' style='color:#be6a77; margin-top:-10px;'></i> ".$data['date']."</p>";
					echo "</div></a>";
					echo "</div>";					
					echo "</div>";				
				}
			 ?>
		</div>

		<div style="width:40%; height:50%; background-color:#e39ba6; float:left;">
			<div>
				<h3 style="margin-left: 42%; padding-top:10px; color:#fff0df;">ข่าวสัมมนา</h3>
			</div>
			<div class="line2" style="margin-left: 40%; background: #fff0df; width:150px; height:7px; position: relative;"></div>
			<div style="width:40%; border-bottom:solid 2px #fff0df; margin-top:-2px; position: relative;"></div>

			<?php 
				$sql = "SELECT * FROM info WHERE status = 2 ORDER BY id_info DESC LIMIT 3 ;";
				mysql_query("SET NAMES utf8");
				$query = mysql_query($sql);
				while ($data = mysql_fetch_array($query)) {
					echo "<a href='detail_info.php?id_info=".$data['id_info']."' style='color:#000000; text-decoration: none;'>";
					echo "<div style='width:80%; padding-left:30px;  margin-top:10px;'>";
					echo	"<span style='font-size:30; color:#fff0df;'> ".$data['date']."</span>";
					echo	"<span style='font-size:20; margin-left:5px;'>".$data['header']."</span>";
					echo "</div></a>";
				}
			 ?>

		</div>

		<div style="width:40%; height:70%; background-color:#e39ba6; float:left;">
			<div>
				<h3 style="margin-left: 42%; padding-top:10px; color:#fff0df;">จดหมายข่าว</h3>
			</div>
			<div class="line2" style="margin-left: 40%; background: #fff0df; width:150px; height:7px; position: relative;"></div>
			<div style="width:40%; border-bottom:solid 2px #fff0df; margin-top:-2px; position: relative;"></div>

			<?php 
				$sql = "SELECT * FROM info WHERE status = 3 ORDER BY id_info DESC LIMIT 3 ;";
				mysql_query("SET NAMES utf8");
				$query = mysql_query($sql);
				while ($data = mysql_fetch_array($query)) {
					echo "<a href='detail_info.php?id_info=".$data['id_info']."' style='color:#000000; text-decoration: none;'>";
					echo "<div style='width:80%; padding-left:30px;  margin-top:10px;'>";
					echo	"<span style='font-size:20; margin-left:5px;'>".$data['header']."</span>";
					echo	"<p><i class='fa fa-clock-o' aria-hidden='true' style='color:#be6a77; margin-top:-10px;'></i>".$data['date']."</p>";
					echo "</div></a>";
				}
			 ?>
		</div>
	</div>

	<!-- phone -->
	<div class="hidden-lg"  id="info" style="background-color:#ffffff; margin-top:30px;">
		<div style="width:100%; background-color:#fff0df; float:left;">
			<div style="margin-left:10%; width:90%; color:#be6a77; padding-top:10px;">
				<h3>ข่าวประชาสัมพันธ์</h3>
			</div>
			<div class="line2" style="margin-left:10%; width:90%;"></div>

			<?php 
				include('admin/config.php');
				$sql = "SELECT * FROM info WHERE status = 1 ORDER BY id_info DESC LIMIT 4 ;";
				mysql_query("SET NAMES utf8");
				$query = mysql_query($sql);
				while ($data = mysql_fetch_array($query)) {
					echo "<a href='detail_info.php?id_info=".$data['id_info']."' style='color:#000000; text-decoration: none;'>";
					echo "<div style='width:70%; margin-left:10%; margin-top:5%;'>";
					echo	"<p style='font-size:20;'>".$data['header']."</p>";
					echo	"<p><i class='fa fa-clock-o' aria-hidden='true' style='color:#be6a77; margin-top:-10px;'></i> ".$data['date']."</p>";
					echo "</div></a>";
				}
			 ?>

		</div>

		<div style="width:100%; background-color:#e39ba6; float:left;">
			<div>
				<h3 style="margin-left: 42%; padding-top:10px; color:#fff0df;">ข่าวสัมมนา</h3>
			</div>
			<div class="line2" style="background: #fff0df; width:80%; margin-bottom:-2px;"></div>

			<?php 
				$sql = "SELECT * FROM info WHERE status = 2 ORDER BY id_info DESC LIMIT 4 ;";
				mysql_query("SET NAMES utf8");
				$query = mysql_query($sql);
				while ($data = mysql_fetch_array($query)) {
					echo "<a href='detail_info.php?id_info=".$data['id_info']."' style='color:#000000; text-decoration: none;'>";
					echo "<div style='width:100%; padding-left:10%;  margin-top:5%;'>";
					echo	"<span style='font-size:24; color:#fff0df;'> ".$data['date']."</span>";
					echo	"<span style='font-size:20; margin-left:5px;'> ".$data['header']."</span>";
					echo "</div></a>";
				}
			 ?>

		</div>

		<div style="width:100%; background-color:#e39ba6; float:left;">
			<div>
				<h3 style="margin-left: 42%; padding-top:10px; color:#fff0df;">จดหมายข่าว</h3>
			</div>
			<div class="line2" style="background: #fff0df; width:80%; margin-bottom:-2px;"></div>

			<?php 
				$sql = "SELECT * FROM info WHERE status = 3 ORDER BY id_info DESC LIMIT 4 ;";
				mysql_query("SET NAMES utf8");
				$query = mysql_query($sql);
				while ($data = mysql_fetch_array($query)) {
					echo "<a href='detail_info.php?id_info=".$data['id_info']."' style='color:#000000; text-decoration: none;'>";
					echo "<div style='width:100%; padding-left:10%;  margin-top:5%;'>";
					echo	"<span style='font-size:20; margin-left:5px;'>  ".$data['header']."</span>";
					echo	"<p><i class='fa fa-clock-o' aria-hidden='true' style='color:#be6a77; margin-top:-10px;'></i> ".$data['date']."</p>";
					echo "</div></a>";
				}
			 ?>

			<div style="width:100%; padding-left:10%;  margin-top:5%;">
				<a href="info.php"><h5 style="color:#fff0df;">ดูทั้งหมด</h5></a>
			</div>
		</div>
	</div>

	<div class="visible-lg" style="background-color:#8e3240; padding-bottom:20px;">
		<div class="container" style="color:#ffffff;">
			<div class="col-md-12">
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
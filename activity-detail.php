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

	<?php include('fancyBox.html'); ?>
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
	            	<li style="border-left:2px solid rgba(255, 255, 255, 0.3); "><a href="index.php">หน้าหลัก</a></li>
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
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">หมวดวิชาศึกษาทั่วไป</b></a>
						<ul class="dropdown-menu" id="dropdown">
							<li><a href="culiculum57.php">ฉบับปรับปรุง 57</a></li>
							<li><a href="culiculum59.php">ฉบับปรับปรุง 59</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">อาจารย์ผู้สอน</b></a>
						<ul class="dropdown-menu" id="dropdown">
							<li><a href="">กลุ่มคุณค่าแห่งชีวิต</a></li>
							<li><a href="">กลุ่มวิถีแห่งสังคม</a></li>
							<li><a href="">กลุ่มศาสตร์แห่งความคิด</a></li>
							<li><a href="">กลุ่มศิลปะแห่งการจัดการ</a></li>
							<li><a href="">กลุ่มภาษาและการสื่อสาร</a></li>
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
	
	<div class="col-md-5" style="color:#be6a77;">
		<div class="col-md-12" style="position: absolute;">
			<img src="image/info/1.jpg" width="500px">
		</div>
		<div class="col-md-12" style="position: relative; margin-top:280px; color:#ffffff; background-color: rgba(0, 0, 0, 0.2); width:500px; margin-left:15px;">
			<h4>กิจกรรมชื่อ ............... โดย  ..................</h4><br>
			<h4 style="margin-top:-20px;">จัดเมื่อวันที่........</h4><br>
			<h4 style="margin-top:-20px;">ห้อง........</h4>
		</div>
		<div class="col-md-12" style="position: relative; margin-top:30px;">
			<h4>Download here <i class="fa fa-file-text-o" aria-hidden="true"></i> <a href="">เอกสารโครงการ</a></h4>
			<a href=""><h4 style="margin-left:138px;">รายชื่อผู้เข้าร่วมกิจกรรม</h4></a>
		</div>
		<div style="width:100%; margin-top:50px; float:left; margin-left:10px;">
			<h4> วิดีโอกิจกรรม</h4>
			<iframe class="responsive" width="250" height="150" src="https://www.youtube.com/embed/8opzU51pwfM" frameborder="0" allowfullscreen></iframe>

			<iframe class="responsive" width="250" height="150" src="https://www.youtube.com/embed/8opzU51pwfM" frameborder="0" allowfullscreen></iframe>
		</div>
		<div style="width:100%; float:left; margin-left:10px;">
			<iframe class="responsive" width="250" height="150" src="https://www.youtube.com/embed/8opzU51pwfM" frameborder="0" allowfullscreen></iframe>

			<iframe class="responsive" width="250" height="150" src="https://www.youtube.com/embed/8opzU51pwfM" frameborder="0" allowfullscreen></iframe>
		</div>
	</div>
	<div class="col-md-7">
		<?php
$allowed_types=array('jpg','jpeg','gif','png');
$dir    ="./";
$files1 = scandir($dir);
$total=0; // ¹Ñº¨Ó¹Ç¹ÃÙ»·Ñé§ËÁ´
$pic_path=array();
foreach($files1 as $key=>$value){
	if($key>1){
		$file_parts = explode('.',$value);
		$ext = strtolower(array_pop($file_parts));
		if(in_array($ext,$allowed_types)){
			$pic_path[]=$dir.$value;
			$total++;
			
		}

	}
}
// ¨Ó¹Ç¹ÃÒÂ¡ÒÃ·ÕèµéÍ§¡ÒÃáÊ´§ áµèÅÐË¹éÒ
$perPage = 12;

// ¤Ó¹Ç³¨Ó¹Ç¹Ë¹éÒ·Ñé§ËÁ´
$num_naviPage=ceil($total/$perPage);

// ¡ÓË¹´¨Ø´àÃÔèÁµé¹ áÅÐÊÔé¹ÊØ´¢Í§ÃÒÂ¡ÒÃáµèÅÐË¹éÒ·Õè¨ÐáÊ´§
if(!isset($_GET['page'])){
	$s_key=0;
	$e_key=$perPage;	
	$_GET['page']=1;
}else{
	$s_key=($_GET['page']*$perPage)-$perPage;
	$e_key=$perPage*$_GET['page'];
	$e_key=($e_key>$total)?$total:$e_key;
}
for($i=1;$i<=$num_naviPage;$i++){
	echo "<font class='Font_Violet_10half'>  | <a href=\"?page=".$i."\">$i</a></font>";
}
echo "<br><br>";	

// áÊ´§ÃÒÂ¡ÒÃ
for($indexPicture=$s_key;$indexPicture<$e_key;$indexPicture++){

		// echo "<a href='".$pic_path[$indexPicture]."'target='blank'><img style='width:250px;' src='".$pic_path[$indexPicture]."' class='pic_radius'/></a>&nbsp;";
		echo "<a class='fancybox' href='".$pic_path[$indexPicture]."' data-fancybox-group='gallery' title=''><img style='width:250px;' src='".$pic_path[$indexPicture]."' class='pic_radius'/></a>&nbsp";	
}

// áÊ´§Ë¹éÒ»Ñ¨¨ØºÑ¹
echo "<br><font class='Font_Violet_10half'/>Page: ".$_GET['page'];
?> 

	</div>

	<!-- <div style="background-color:#8e3240; padding-bottom:20px;">
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
	</div> -->
	
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
<?php 
$id_media = $_GET['id_media'];
include('admin/config.php');
ini_set('display_errors', 0);
error_reporting(E_ERROR | E_WARNING | E_PARSE);
?>
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

	<!--  -->
	<!-- Add jQuery library -->
	<script type="text/javascript" src="lib/jquery-1.10.1.min.js"></script>

	<!-- Add mousewheel plugin (this is optional) -->
	<script type="text/javascript" src="lib/jquery.mousewheel-3.0.6.pack.js"></script>

	<!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="source/jquery.fancybox.js?v=2.1.5"></script>
	<link rel="stylesheet" type="text/css" href="source/jquery.fancybox.css?v=2.1.5" media="screen" />

	<script type="text/javascript">
		$(document).ready(function() {
			$('.fancybox').fancybox();
		});
	</script>
</head>
<body>
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

	<?php 
	$sql = "SELECT * FROM media WHERE id_media = $id_media AND status = 1;";
	mysql_query("SET NAMES utf8");
	$query = mysql_query($sql);
	$data = mysql_fetch_array($query);
	 ?>
	
	<div class="col-md-12" style="margin-bottom:20px; margin-top:20px;">
		<div class="col-md-4 line visible-lg">
			<img src="logo2.png" width="50" style="margin-top:-20px;">
		</div>
		<div class="col-md-4" style="margin-top:-30px; text-align:center;">
			<h1><?php echo $data['name']; ?> </h1>
		</div>
		<div class="col-md-4 line visible-lg"></div>
	</div>
	<div class="visible-lg" style="margin-top:60px;">
	<div class="col-md-5" style="color:#be6a77;">
		<div class="col-md-12" style="position: absolute;">
			<img src="<?php echo "activity/".$data['pathPicture']."/".$data['cover']."" ?>" style="width:100%;">
		</div>
		<div class="col-md-12" style="position: relative; margin-top:55%; color:#ffffff; background-color: rgba(0, 0, 0, 0.5); width:100%; margin-left:15px;">
			<h3>กิจกรรมชื่อ <?php echo $data['name'] ?></h3><br>
			<h3 style="margin-top:-20px;">จัดเมื่อวันที่ <?php echo $data['date']; ?></h3><br>
		</div>
		<div class="col-md-12" style="position: relative; margin-top:8%;">
			<h4>Download here <i class="fa fa-file-text-o" aria-hidden="true"></i> <a href="<?php echo "activity/".$data['pathPicture']."/".$data['file']."" ?>" download><?php echo $data['file']; ?></a></h4>
		</div>
		<div style="width:100%; margin-top:4%; float:left; margin-left:10px;">
			<h4> วิดีโอกิจกรรม</h4>
			<iframe class="responsive" width="98%" height="80%" src="<?php echo $data['video']; ?>" frameborder="0" allowfullscreen></iframe>

			<!-- <iframe class="responsive" width="48%" height="40%" src="https://www.youtube.com/embed/8opzU51pwfM" frameborder="0" allowfullscreen></iframe> -->
		</div>
		<!-- <div style="width:100%; float:left; margin-left:10px;">
			<iframe class="responsive" width="48%" height="40%" src="https://www.youtube.com/embed/8opzU51pwfM" frameborder="0" allowfullscreen></iframe>

			<iframe class="responsive" width="48%" height="40%" src="https://www.youtube.com/embed/8opzU51pwfM" frameborder="0" allowfullscreen></iframe>
		</div> -->
	</div>
	<div class="col-md-7">
		<?php
		$allowed_types=array('jpg','jpeg','gif','png');
		$dir    ="activity/".$data['pathPicture']."/";
		$files1 = scandir($dir);
		$total=0; 
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

		if ($total < 28) {
			$perPage = $total;
		} else {
			$perPage = 28;
		}

		$num_naviPage=ceil($total/$perPage);

		if(!isset($_GET['page'])){
			$s_key=0;
			$e_key=$perPage;	
			$_GET['page']=1;
		}else{
			$s_key=($_GET['page']*$perPage)-$perPage;
			$e_key=$perPage*$_GET['page'];
			$e_key=($e_key>$total)?$total:$e_key;
		}

		for($indexPicture=$s_key;$indexPicture<$e_key;$indexPicture++){
			echo "<a class='fancybox' href='".$pic_path[$indexPicture]."' data-fancybox-group='gallery' title=''><img style='width:22%; margin-top:10px; margin-left:10px;' src='".$pic_path[$indexPicture]."' class='pic_radius'/></a>&nbsp";	
		}

		echo "<br><br>";
		for($i=1;$i<=$num_naviPage;$i++){
			echo "<font class='Font_Violet_10half'><a href=\"?page=".$i."\"> หน้าที่ $i |</a></font>";
		}

?> 
	</div>
	</div>

	<!-- phone -->
	<div class="hidden-lg">
	<?php 
	$sql = "SELECT * FROM media WHERE id_media = $id_media;";
	mysql_query("SET NAMES utf8");
	$query = mysql_query($sql);
	$data = mysql_fetch_array($query);
	echo $sql;
	 ?>
	<div class="col-md-12" style="color:#be6a77;">
		<div class="col-md-12" style="position: absolute; margin-top:-30%;">
			<img src="image/info/1.jpg" style="width:100%;">
		</div>
		<div class="col-md-12" style="position: relative; margin-top:55%; color:#ffffff; background-color: rgba(0, 0, 0, 0.2); width:95%; margin-left:15px;">
			<h4>กิจกรรมชื่อ <?php echo $data['name'] ?></h4><br>
			<h4 style="margin-top:-20px;">จัดเมื่อวันที่ <?php echo $data['date']; ?></h4><br>
		</div>
		<div class="col-md-12" style="position: relative; margin-top:8%;">
			<h4>Download here <i class="fa fa-file-text-o" aria-hidden="true"></i> <a href="<?php echo "activity/".$data['pathPicture']."/".$data['file']."" ?>" download><?php echo $data['file']; ?></a></h4>
		</div>
		<div style="width:100%; margin-top:4%; float:left; margin-left:10px;">
			<h4> วิดีโอกิจกรรม</h4>
			<iframe class="responsive" width="98%" height="80%" src="<?php echo $data['video']; ?>" frameborder="0" allowfullscreen></iframe>

			<!-- <iframe class="responsive" width="48%" height="40%" src="https://www.youtube.com/embed/8opzU51pwfM" frameborder="0" allowfullscreen></iframe> -->
		</div>
		<!-- <div style="width:100%; float:left; margin-left:10px;">
			<iframe class="responsive" width="48%" height="40%" src="https://www.youtube.com/embed/8opzU51pwfM" frameborder="0" allowfullscreen></iframe>

			<iframe class="responsive" width="48%" height="40%" src="https://www.youtube.com/embed/8opzU51pwfM" frameborder="0" allowfullscreen></iframe>
		</div> -->
	</div>
	<div class="col-md-7">
		<?php
		$allowed_types=array('jpg','jpeg','gif','png');
		$dir    ="activity/".$data['pathPicture']."/";
		$files1 = scandir($dir);
		$total=0; 
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

		if ($total < 28) {
			$perPage = $total;
		} else {
			$perPage = 28;
		}

$num_naviPage=ceil($total/$perPage);

if(!isset($_GET['page'])){
	$s_key=0;
	$e_key=$perPage;	
	$_GET['page']=1;
}else{
	$s_key=($_GET['page']*$perPage)-$perPage;
	$e_key=$perPage*$_GET['page'];
	$e_key=($e_key>$total)?$total:$e_key;
}

for($indexPicture=$s_key;$indexPicture<$e_key;$indexPicture++){
	echo "<a class='fancybox' href='".$pic_path[$indexPicture]."' data-fancybox-group='gallery' title=''><img style='width:28%; margin-top:10px; margin-left:10px;' src='".$pic_path[$indexPicture]."' class='pic_radius'/></a>&nbsp";	
}

echo "<br><br>";
for($i=1;$i<=$num_naviPage;$i++){
	echo "<font class='Font_Violet_10half'><a href=\"?page=".$i."\"> หน้าที่ $i |</a></font>";
}

?> 
	</div>
	</div>


	<div style="background-color:#ffffff; padding-bottom:20px;">
		<div class="container" style="color:#ffffff;">
			
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
	
	<script src="js/main.js"></script>
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
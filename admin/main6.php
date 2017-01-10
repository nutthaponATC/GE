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

	<!-- datatable -->
	<script src="datatable/jquery-1.12.0.min.js"></script>      
	<script type="text/javascript" src="datatable/jquery.dataTables.min.js"></script>
	<link rel="stylesheet" href="datatable/jquery.dataTables.min.css"/>
</head>
<body>
	<div style="width:20%; height:100%; background-color:#be6a77; float:left; position:fixed;">
		<div class="col-md-12" id="left-menu">
			<a href="../index.php" style="color:#ffffff;"><h3><img src="../logo2.png" style="margin-top:-10px;" width="15%"> สำนักศึกษาทั่วไป</h3></a>
		</div>
		<div class="col-md-12" id="left-menu">
			<a href="main.php" style="color:#ffffff;"><h3> ข่าวประชาสัมพันธ์</h3></a>
		</div>
		<div class="col-md-12" id="left-menu">
			<a href="main2.php" style="color:#ffffff;"><h3> ข่าวสัมมนา</h3></a>
		</div>
		<div class="col-md-12" id="left-menu">
			<a href="main3.php" style="color:#ffffff;"><h3> จดหมายข่าว</h3></a>
		</div>
		<div class="col-md-12" id="left-menu">
			<a href="main4.php" style="color:#ffffff;"><h3> ภาพกิจกรรม</h3></a>
		</div>
		<div class="col-md-12" id="left-menu">
			<a href="main5.php" style="color:#ffffff;"><h3> อาจารย์ผู้สอน</h3></a>
		</div>
		<div class="col-md-12" id="left-menu">
			<a href="main6.php" style="color:#ffffff;"><h3> รูปสไลด์</h3></a>
		</div>
		<div class="col-md-12" id="left-menu">
			<a href="main7.php" style="color:#ffffff;"><h3> ปฏิทินกิจกรรม GenEd</h3></a>
		</div>
		<div class="col-md-12" id="left-menu">
			<a href="main8.php" style="color:#ffffff;"><h3> ประกาศที่เกี่ยวข้อง</h3></a>
		</div>
		<div class="col-md-12" id="left-menu">
			<a href="main9.php" style="color:#ffffff;"><h3> แบบฟอร์มสำหรับ อาจารย์</h3></a>
		</div>
		<div class="col-md-12" id="left-menu">
			<a href="main10.php" style="color:#ffffff;"><h3> แบบฟอร์มสำหรับ นักศึกษา</h3></a>
		</div>
		<div class="col-md-12" id="left-menu">
			<a href="main11.php" style="color:#ffffff;"><h3> หนังสือนอกเวลา</h3></a>
		</div>
	</div>

	<div style="width:80%; left:20%; height:100%; float:left; position:relative;">
		<div id="info1" class="container">
			<form action="add_slide.php" method="post" enctype="multipart/form-data">
				<h3 style="margin-left: 30px;">เพิ่มข้อมูลข่าวประชาสัมพันธ์</h3>
				<div class="col-md-10">
					<div class="col-md-10">
						<img id="image" height="300" width="100%"/>
					</div>
					<div class="col-md-2">
						<div class="col-md-12">
							<input class="form-control" style="margin-top:20px; width:300px;" type="file" id="files" name="image">
						</div>
						<div class="col-md-12">
							<input class="btn btn-default" style="margin-top:20px; background-color:#b45564; color:white;" type="submit" name="submit" value="เพิ่มข้อมูล">
						</div>
					</div>
				</div>

				<?php 
				include('config.php');

				$sql = "SELECT * FROM slide ORDER BY id_slide DESC";
				$query = mysql_query($sql);
				while ($data = mysql_fetch_array($query)) {
					echo "<div class='col-md-12' style='margin-top:20px;'>";
						echo "<div class='col-md-10'>";
							echo "<img src='../img-bg/".$data['image']."' id='image' height='300' width='100%'/>";
						echo "</div>";
						echo "<div class='col-md-2'>";
							echo "<div class='col-md-12'>";
								echo "<a href='remove6.php?id_slide=".$data['id_slide']."'><i class='fa fa-times' style='color:#b45564; font-size:30px;' aria-hidden='true'></i><p style='float:left; margin-top:5px;'>ลบ</p></a>";
							echo "</div>";
						echo "</div>";
					echo "</div>";
				}

				 ?>				
			</form>
		</div>
	</div>

</body>
</html>

<script language='javascript'>
document.getElementById("files").onchange = function () {
    var reader = new FileReader();
    reader.onload = function (e) {
        document.getElementById("image").src = e.target.result;
    };
    reader.readAsDataURL(this.files[0]);
};
</script>
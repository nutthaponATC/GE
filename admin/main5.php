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
		<div class="col-md-12" style="width:100%; height:60px; background-color:#b45564; border-bottom:1px solid rgba(255, 255, 255, 0.6); color:#ffffff;">
			<a href="../index.php" style="color:#ffffff;"><center><h3><img src="../logo2.png" style="margin-top:-10px;" width="15%"> สำนักศึกษาทั่วไป</h3></center></a>
		</div>
		<div class="col-md-12" style="width:100%; height:60px; background-color:#b45564; border-bottom:1px solid rgba(255, 255, 255, 0.6); color:#ffffff;">
			<a href="main.php" style="color:#ffffff;"><center><h3> ข่าวประชาสัมพันธ์</h3></center></a>
		</div>
		<div class="col-md-12" style="width:100%; height:60px; background-color:#b45564; border-bottom:1px solid rgba(255, 255, 255, 0.6); color:#ffffff;">
			<a href="main2.php" style="color:#ffffff;"><center><h3> ข่าวสัมมนา</h3></center></a>
		</div>
		<div class="col-md-12" style="width:100%; height:60px; background-color:#b45564; border-bottom:1px solid rgba(255, 255, 255, 0.6); color:#ffffff;">
			<a href="main3.php" style="color:#ffffff;"><center><h3> จดหมายข่าว</h3></center></a>
		</div>
		<div class="col-md-12" style="width:100%; height:60px; background-color:#b45564; border-bottom:1px solid rgba(255, 255, 255, 0.6); color:#ffffff;">
			<a href="main4.php" style="color:#ffffff;"><center><h3> ภาพกิจกรรม</h3></center></a>
		</div>
		<div class="col-md-12" style="width:100%; height:60px; background-color:#b45564; border-bottom:1px solid rgba(255, 255, 255, 0.6); color:#ffffff;">
			<a href="main5.php" style="color:#ffffff;"><center><h3> อาจารย์ผู้สอน</h3></center></a>
		</div>
	</div>

	<div style="width:80%; left:20%; height:100%; float:left; position:relative;">
		<div id="info1" class="container">
			<form action="add_instructor.php" method="post" enctype="multipart/form-data">
				<h3>เพิ่มข้อมูลอาจารย์ผู้สอน</h3>
				<div class="col-md-4">
					<h4>รูปถ่ายอาจารย์ผู้สอน</h4>
					<img id="image" style="margin-left:20px;" height="300" width="250"/>
				</div>
				<div class="col-md-8">
					<h4>ชื่ออาจารย์ผู้สอน</h4><input class="form-control" type="text" name="header">
					<div class="col-md-6">
						<input class="form-control" style="margin-top:20px; width:300px;" type="file" id="files" name="image">
					</div>
					<div class="col-md-6">
						<input class="btn btn-default" style="margin-top:20px; background-color:b45564; color:white;" type="submit" name="submit" value="เพิ่มข้อมูล">
					</div>
				</div>
			</form>
			<table id="example" class="display" style="font-size: 15px; padding-top:30px;" cellspacing="0" width="100%">
		        <thead>
		            <tr>
		            	<th width="170">รูปถ่ายอาจารย์ผู้สอน</th>
		                <th>ชื่อ - นามสกุล</th>
		                <th width="50"><center>แก้ไข</center></th>
		                <th width="50"><center>ลบ</center></th>
		            </tr>
		        </thead>
		        <tbody>
		        	<?php 
		        	include('config.php');

		        	$sql = "SELECT * FROM instructor WHERE status = 1";
		        	mysql_query("SET NAMES utf8");
		        	$query = mysql_query($sql);

		        	while ($data = mysql_fetch_array($query)) {
		        		echo "
		        		<tr style='cursor:pointer;' data-href='edit5.php?id_instructor=".$data['id_instructor']."'>
		        			<td><img src='../image/instructor/".$data['picture']."' width='100px'></td>
			                <td>".$data['name']."</td>
			                <td><center><a href='edit5.php?id_instructor=".$data['id_instructor']."'><i class='fa fa-cog' style='color:#b45564; font-size:30px;' aria-hidden='true'></i></a></center></td>
				            <td><center><a href='remove5.php?id_instructor=".$data['id_instructor']."'><i class='fa fa-times' style='color:#b45564; font-size:30px;' aria-hidden='true'></a></i></center></td>
			            </tr>";
		        	}
		        	 ?>
		            
		        </tbody>
		    </table>
		</div>
	</div>

</body>
</html>

<script language='javascript'>

// datatable
$(document).ready(function() {
	//Filter Postion
	$('#example').DataTable( {
        "sDom": '<"top"f>t<"bottom"p><"clear">'
    } );
} );

jQuery(document).ready(function($) {
    $('#example').on( 'click', 'tbody tr', function () {
        window.document.location = $(this).data("href");
    });
});

document.getElementById("files").onchange = function () {
    var reader = new FileReader();
    reader.onload = function (e) {
        document.getElementById("image").src = e.target.result;
    };
    reader.readAsDataURL(this.files[0]);
};
</script>
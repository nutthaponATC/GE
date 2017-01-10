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

	<div style="width:80%; height:100%; left:20%; float:left;  position:relative;">
		<div id="info1" class="container">
			<form action="add_10.php" method="post" enctype="multipart/form-data">
				<h3>แบบฟอร์มสำหรับ นักศึกษา</h3>
				<br>
				<h4>หัวแบบฟอร์มสำหรับ นักศึกษา</h4><input class="form-control" type="text" name="header">
				<input class="form-control" style="margin-top:20px; width:300px;" type="file" id="files" name="image">
				<input id="bt" class="btn btn-default" style="margin-top:10px; background-color:b45564; color:white;" type="submit" name="submit" value="เพิ่มข้อมูล">
			</form>
			<table id="example" class="display" style="font-size: 15px; padding-top:30px;" cellspacing="0" width="100%">
		        <thead>
		            <tr>
		                <th width="50"><center>ลำดับ</center></th>
		                <th><center>หัวข้อ</center></th>
		                <th><center>ไฟล์</center></th>
		                <th width="50"><center>แก้ไข</center></th>
		                <th width="50"><center>ลบ</center></th>
		            </tr>
		        </thead>
		        <tbody>
		        	<?php 
		        	include('config.php');

		        	$sql = "SELECT * FROM public WHERE status = 4 ORDER BY id_public ASC";
		        	mysql_query("SET NAMES utf8");
		        	$query = mysql_query($sql);

		        	$i = 1;
		        	while ($data = mysql_fetch_array($query)) {
		        		echo "
		        		<tr style='cursor:pointer;' data-href='edit10.php?id_public=".$data['id_public']."'>
		        			<td>".$i."</td>
			                <td>".$data['title']."</td>
			                <td>".$data['file']."</td>
			                <td><center><a href='edit10.php?id_public=".$data['id_public']."'><i class='fa fa-cog' style='color:#b45564; font-size:30px;' aria-hidden='true'></i></a></center></td>
				            <td><center><a href='remove10.php?id_public=".$data['id_public']."'><i class='fa fa-times' style='color:#b45564; font-size:30px;' aria-hidden='true'></a></i></center></td>
			            </tr>";
			            $i++;
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
</script>
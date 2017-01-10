<?php 
include('config.php'); 
$id_info = $_GET['id_info'];

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
	</div>

	<div style="width:80%; height:100%; left:20%; float:left;  position:relative;">
		<div id="info1" class="container">
			<form action="edit_process3.php" method="post">
				<?php 
				$sql = "SELECT * FROM info WHERE id_info = $id_info;";
				mysql_query("SET NAMES utf8");
				$query = mysql_query($sql);
				$data = mysql_fetch_array($query);
				?>
				<input class="form-control" type="hidden" name="id_info" value="<?php echo $data['id_info']; ?>">
				<h3>เพิ่มข้อมูลจดหมายข่าว</h3>
				<br>
				<h4>หัวข้อจดหมายข่าว</h4><input class="form-control" type="text" name="header" value="<?php echo $data['header']; ?>">
				<h4>รายละเอียดจดหมายข่าว</h4>
				<textarea class="form-control" name="detail" rows="4" cols="50"><?php echo $data['detail']; ?></textarea>	
				<input id="bt" class="btn btn-default" style="margin-top:10px; background-color:b45564; color:white;" type="submit" name="edit" value="แก้ไข">
				<a href="remove3.php?id_info=<?php echo $data['id_info']; ?>"><input id="bt" class="btn btn-default" style="margin-top:10px; background-color:b45564; color:white;" type="button" name="delete" value="ลบ"></a>
			</form>
			<table id="example" class="display" style="font-size: 15px; padding-top:30px;" cellspacing="0" width="100%">
		        <thead>
		            <tr>
		                <th width="170"><center>หัวข้อจดหมายข่าว</center></th>
		                <th><center>รายละเอียดจดหมายข่าว</center></th>
		                <th width="70"><center>วันที่</center></th>
		            </tr>
		        </thead>
		        <tbody>
		        	<?php 
		        	include('config.php');

		        	$sql = "SELECT * FROM info WHERE status = 3";
		        	mysql_query("SET NAMES utf8");
		        	$query = mysql_query($sql);

		        	while ($data = mysql_fetch_array($query)) {
		        		echo "
		        		<tr style='cursor:pointer;' data-href='edit3.php?id_info=".$data['id_info']."'>
			                <td>".$data['header']."</td>
			                <td>".$data['detail']."</td>
			                <td><center>".$data['date']."</center></td>
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
</script>
<?php 
echo "<meta charset='utf-8'>";
include('config.php');

$name = $_POST['header'];
$detail = $_POST['detail'];
$video = $_POST['video'];

if (isset($name) && $name != "" && isset($detail) && $detail != "") {
	$sql = "SELECT * FROM media ORDER BY id_media DESC limit 1";
	$query = mysql_query($sql);

	if ($query) {
		$count = mysql_fetch_array($query);
		$countID = $count['id_media'];
	} else {
		$sql = "SELECT * FROM media";
		$query = mysql_query($sql);

		$count = mysql_num_rows($query);
		$countID = $count + 1;
	}

	mkdir("../activity/$countID");

	if(($_FILES["image"]["tmp_name"]) != "") {
		$realnameCover = $_FILES["image"]["name"];
		copy($_FILES["image"]["tmp_name"],"../activity/$countID/".$realnameCover);
	} else {
		$realnameCover = NULL;
	} ;

	if(($_FILES["imageMulti"]["tmp_name"]) != "") {
		$realnameImageMulti = $countID;
		copy($_FILES["fileMulti"]["tmp_name"],"../activity/$countID/".$_FILES["fileMulti"]["name"]);
	} else {
		$realnameImageMulti = $countID;
	} ;

	if(($_FILES["fileMulti"]["tmp_name"]) != "") {
		$realnameFileMulti = $_FILES["fileMulti"]["name"];
		copy($_FILES["fileMulti"]["tmp_name"],"../activity/$countID/".$realnameFileMulti);
	} else {
		$realnameFileMulti = NULL;
	} ;

	$date = date("Y/m/d");

	$sql = "INSERT INTO `info` VALUES (NULL, '$name', '$detail', '$realnameFileMulti', '$$realnameCover', '$realnameImageMulti', '$video', '$date', 1);";

	mysql_query("SET NAMES utf8");
	$query = mysql_query($sql);

	if ($query) {
		echo "<script language='javascript'>";
		echo "alert('เพิ่มข้อมูลเรียบร้อย');";
		echo "location='main4.php';";
		echo "</script>";
	} else {
		echo "<script language='javascript'>";
		echo "alert('ไม่สามารถเพิ่มข้อมูลได้ กรุณาป้อนใหม่อีกครั้ง');";
		echo "location='main4.php';";
		echo "</script>";
	}

} else {
	echo "<script language='javascript'>";
	echo "alert('กรุณาป้อนข้อมูลอีกครั้ง');";
	echo "location='main4.php';";
	echo "</script>";
}
?>
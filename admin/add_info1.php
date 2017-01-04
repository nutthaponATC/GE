<?php 
echo "<meta charset='utf-8'>";
include('config.php');

$header = $_POST['header'];
$detail = $_POST['detail'];

if (isset($header) && $header != "" && isset($detail) && $detail != "") {
	if(($_FILES["image"]["tmp_name"]) != "") {
		$realname = $_FILES["image"]["name"];
	} else {
		$realname = NULL;
	} ;

	$date = date("Y/m/d");

	$sql = "INSERT INTO `info` VALUES (NULL, '$header', '$detail', '$date', '$realname','1');";

	mysql_query("SET NAMES utf8");
	$query = mysql_query($sql);

	if ($query) {
		if(($_FILES["image"]["tmp_name"]) != "") {
			copy($_FILES["image"]["tmp_name"],"../image/".$realname);
		}
		echo "<script language='javascript'>";
		echo "alert('เพิ่มข้อมูลเรียบร้อย');";
		echo "location='main.php';";
		echo "</script>";
	} else {
		echo "<script language='javascript'>";
		echo "alert('ไม่สามารถเพิ่มข้อมูลได้ กรุณาป้อนใหม่อีกครั้ง');";
		echo "location='main.php';";
		echo "</script>";
	}

} else {
	echo "<script language='javascript'>";
	echo "alert('กรุณาป้อนข้อมูลอีกครั้ง');";
	echo "location='main.php';";
	echo "</script>";
}
 ?>
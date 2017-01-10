<?php 
echo "<meta charset='utf-8'>";
include('config.php');

if(($_FILES["image"]["tmp_name"]) != "") {
	$realname = $_FILES["image"]["name"];
	copy($_FILES["image"]["tmp_name"],"../img-bg/".$realname);

	$sql = "INSERT INTO `slide` VALUES (NULL, '$realname');";
	mysql_query("SET NAMES utf8");
	$query = mysql_query($sql);
	if ($query) {
		echo "<script language='javascript'>";
		echo "alert('เพิ่มข้อมูลเรียบร้อย');";
		echo "location='main6.php';";
		echo "</script>";
	} else {
		echo "<script language='javascript'>";
		echo "alert('ไม่สามารถเพิ่มข้อมูลได้ กรุณาป้อนใหม่อีกครั้ง');";
		echo "location='main6.php';";
		echo "</script>";
	}
} else {
	echo "<script language='javascript'>";
	echo "alert('กรุณาเลือกรูปภาพ');";
	echo "location='main6.php';";
	echo "</script>";
} ;
 ?>
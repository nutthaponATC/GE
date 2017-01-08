<?php 
echo "<meta charset='utf-8'>";
include('config.php');

$header = $_POST['header'];
$detail = $_POST['detail'];

if (isset($header) && $header != "") {
	if(($_FILES["image"]["tmp_name"]) != "") {
		$realname = $_FILES["image"]["name"];
	} else {
		$realname = NULL;
	} ;

	$sql = "INSERT INTO `instructor` VALUES (NULL, '$header', '$realname','1');";

	mysql_query("SET NAMES utf8");
	$query = mysql_query($sql);

	if ($query) {
		if(($_FILES["image"]["tmp_name"]) != "") {
			copy($_FILES["image"]["tmp_name"],"../image/instructor/".$realname);
		}
		echo "<script language='javascript'>";
		echo "alert('เพิ่มข้อมูลเรียบร้อย');";
		echo "location='main5.php';";
		echo "</script>";
	} else {
		echo "<script language='javascript'>";
		echo "alert('ไม่สามารถเพิ่มข้อมูลได้ กรุณาป้อนใหม่อีกครั้ง');";
		echo "location='main5.php';";
		echo "</script>";
	}

} else {
	echo "<script language='javascript'>";
	echo "alert('กรุณาป้อนข้อมูลอีกครั้ง');";
	echo "location='main.php';";
	echo "</script>";
}
 ?>
<?php 
echo "<meta charset='utf-8'>";
include('config.php');

$id_info = $_POST['id_info'];
$header = $_POST['header'];
$detail = $_POST['detail'];

if (isset($header) && $header != "" && isset($detail) && $detail != "") {
	$date = date("Y/m/d");

	$sql = "UPDATE `info` SET `header` = '$header', `detail` = '$detail' WHERE `info`.`id_info` = $id_info;";

	mysql_query("SET NAMES utf8");
	$query = mysql_query($sql);

	if ($query) {
		echo "<script language='javascript'>";
		echo "alert('แก้ไขข้อมูลเรียบร้อย');";
		echo "location='main3.php';";
		echo "</script>";
	} else {
		echo "<script language='javascript'>";
		echo "alert('ไม่สามารถแก้ไขข้อมูลได้ กรุณาป้อนใหม่อีกครั้ง');";
		echo "location='main3.php';";
		echo "</script>";
	}

} else {
	echo "<script language='javascript'>";
	echo "alert('กรุณาป้อนข้อมูลอีกครั้ง');";
	echo "location='main3.php';";
	echo "</script>";
}
 ?>
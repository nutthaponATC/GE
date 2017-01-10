<?php 
echo "<meta charset='utf-8'>";
include('config.php');

$id_public = $_POST['id_public'];
$header = $_POST['header'];

if (isset($header) && $header != "") {

	$sql = "UPDATE `public` SET `title` = '$header' WHERE `id_public` = $id_public;";

	mysql_query("SET NAMES utf8");
	$query = mysql_query($sql);

	if ($query) {
		echo "<script language='javascript'>";
		echo "alert('แก้ไขข้อมูลเรียบร้อย');";
		echo "location='main8.php';";
		echo "</script>";
	} else {
		echo "<script language='javascript'>";
		echo "alert('ไม่สามารถแก้ไขข้อมูลได้ กรุณาป้อนใหม่อีกครั้ง');";
		echo "location='main8.php';";
		echo "</script>";
	}

} else {
	echo "<script language='javascript'>";
	echo "alert('กรุณาป้อนข้อมูลอีกครั้ง');";
	echo "location='main8.php';";
	echo "</script>";
}
 ?>
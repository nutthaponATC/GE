<?php 
echo "<meta charset='utf-8'>";
include('config.php');

$id_media = $_GET['id_media'];

// $sql = "UPDATE media SET status = 0 WHERE `id_media` = $id_media;";
$sql = "UPDATE `media` SET `status` = '0' WHERE `media`.`id_media` = $id_media;";

mysql_query("SET NAMES utf8");
$query = mysql_query($sql);

if ($query) {
	echo "<script language='javascript'>";
	echo "alert('ลบข้อมูลเรียบร้อย');";
	echo "location='main4.php';";
	echo "</script>";
} else {
	echo "<script language='javascript'>";
	echo "alert('ไม่สามารถลบข้อมูลได้ กรุณาป้อนใหม่อีกครั้ง');";
	echo "location='main4.php';";
	echo "</script>";
}
 ?>
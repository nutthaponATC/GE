<?php 
echo "<meta charset='utf-8'>";
include('config.php');

$id_info = $_GET['id_info'];

$sql = "DELETE FROM `info` WHERE `info`.`id_info` = $id_info;";

mysql_query("SET NAMES utf8");
$query = mysql_query($sql);

if ($query) {
	echo "<script language='javascript'>";
	echo "alert('ลบข้อมูลเรียบร้อย');";
	echo "location='main3.php';";
	echo "</script>";
} else {
	echo "<script language='javascript'>";
	echo "alert('ไม่สามารถลบข้อมูลได้ กรุณาป้อนใหม่อีกครั้ง');";
	echo "location='main3.php';";
	echo "</script>";
}
 ?>
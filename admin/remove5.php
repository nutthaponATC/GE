<?php 
echo "<meta charset='utf-8'>";
include('config.php');

$id_instructor = $_GET['id_instructor'];

$sql = "DELETE FROM `instructor` WHERE `id_instructor` = $id_instructor;";

mysql_query("SET NAMES utf8");
$query = mysql_query($sql);

if ($query) {
	echo "<script language='javascript'>";
	echo "alert('ลบข้อมูลเรียบร้อย');";
	echo "location='main5.php';";
	echo "</script>";
} else {
	echo "<script language='javascript'>";
	echo "alert('ไม่สามารถลบข้อมูลได้ กรุณาป้อนใหม่อีกครั้ง');";
	echo "location='main5.php';";
	echo "</script>";
}
 ?>
<?php 
echo "<meta charset='utf-8'>";
include('config.php');

$id_public = $_GET['id_public'];

$sql = "DELETE FROM `public` WHERE `id_public` = $id_public;";

mysql_query("SET NAMES utf8");
$query = mysql_query($sql);

if ($query) {
	echo "<script language='javascript'>";
	echo "alert('ลบข้อมูลเรียบร้อย');";
	echo "location='main11.php';";
	echo "</script>";
} else {
	echo "<script language='javascript'>";
	echo "alert('ไม่สามารถลบข้อมูลได้ กรุณาป้อนใหม่อีกครั้ง');";
	echo "location='main11.php';";
	echo "</script>";
}
 ?>
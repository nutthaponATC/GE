<?php 
echo "<meta charset='utf-8'>";
include('config.php');

$id_slide = $_GET['id_slide'];

if (confirm('ยืนยันการลบข้อมูล?')) {
    $sql = "DELETE FROM `slide` WHERE `id_slide` = $id_slide;";

	mysql_query("SET NAMES utf8");
	$query = mysql_query($sql);

	if ($query) {
		echo "<script language='javascript'>";
		echo "alert('ลบข้อมูลเรียบร้อย');";
		echo "location='main6.php';";
		echo "</script>";
	} else {
		echo "<script language='javascript'>";
		echo "alert('ไม่สามารถลบข้อมูลได้ กรุณาป้อนใหม่อีกครั้ง');";
		echo "location='main6.php';";
		echo "</script>";
	}	
} else {
    echo "<meta http-equiv='refresh' content='0; url=main6.php' />";
}


?>
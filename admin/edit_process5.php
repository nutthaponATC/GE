<?php 
echo "<meta charset='utf-8'>";
include('config.php');

$id_instructor = $_POST['id_instructor'];
$header = $_POST['header'];

if (isset($header) && $header != "") {
	$date = date("Y/m/d");

	if(($_FILES["image"]["tmp_name"]) != "") {
		$realname = $_FILES["image"]["name"];
		copy($_FILES["image"]["tmp_name"],"../image/instructor/".$realname);

		$sql = "UPDATE `instructor` SET `name` = '$header', `picture` = '$realname' WHERE id_instructor = $id_instructor;";
	} else {
		$sql = "UPDATE `instructor` SET `name` = '$header' WHERE id_instructor = $id_instructor;";
	} ;

	// echo $sql;
	// exit();

	// $sql = "UPDATE `instructor` SET `name` = '$header' WHERE `instructor`.`id_instructor` = $id_instructor;";

	mysql_query("SET NAMES utf8");
	$query = mysql_query($sql);

	if ($query) {
		echo "<script language='javascript'>";
		echo "alert('แก้ไขข้อมูลเรียบร้อย');";
		echo "location='main5.php';";
		echo "</script>";
	} else {
		echo "<script language='javascript'>";
		echo "alert('ไม่สามารถแก้ไขข้อมูลได้ กรุณาป้อนใหม่อีกครั้ง');";
		echo "location='main5.php';";
		echo "</script>";
	}

} else {
	echo "<script language='javascript'>";
	echo "alert('กรุณาป้อนข้อมูลอีกครั้ง');";
	echo "location='main5.php';";
	echo "</script>";
}
 ?>
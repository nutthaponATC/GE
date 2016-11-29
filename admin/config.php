<?php 
// $host = "localhost"; 
// $user = "root"; 
// $pass = "";
// $DBName = "ge";

$host = "localhost"; 
$user = "maxtaxitha_root2"; 
$pass = "nuttha12345678";
$DBName = "maxtaxitha_ge";
$con = mysql_connect($host, $user, $pass) or die("ติดต่อฐานข้อมูลไม่ได้");
mysql_select_db($DBName, $con) or die("เลือกฐานข้อมูลไม่ได้");

 ?>
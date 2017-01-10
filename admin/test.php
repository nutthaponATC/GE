<?php 
include('config.php');

$sql = "SELECT * FROM media ORDER BY id_media DESC limit 1";
$query = mysql_query($sql);

$count = mysql_fetch_array($query);
$countID = $count['id_media']


mkdir("../activity/$countID");

 ?>
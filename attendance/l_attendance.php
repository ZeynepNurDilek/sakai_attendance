<?php 
session_start();

$sid = $_GET["sid"];
$cid = $_GET["cid"];
include_once 'db_functions.php';
$db = new DB_Functions();
$result = $db->getStudentImages($sid,$cid);

while($row = mysql_fetch_array($result)){
	echo "<br>";
	echo "<img src ='".$row['url']."'/>";


}



?>
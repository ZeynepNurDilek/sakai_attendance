<?php 
session_start();

$cid = $_GET["cid"];
echo $cid;

include_once 'db_functions.php';
$db = new DB_Functions();
$result = $db->getCourseStudents($cid);

while($row = mysql_fetch_array($result)){
	echo "<br>";
	echo "<a href ='l_attendance.php?sid=".$row['USER_ID']."&cid=".$cid."'>".$row["FIRST_NAME"]. " ". $row["LAST_NAME"]."</a>"."<br>";


}



?>
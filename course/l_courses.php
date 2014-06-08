<html>
<head>
	<title></title>
</head>
<body>
<?php 
session_start();

include_once 'db_functions.php';
$db = new DB_Functions();
$result = $db->getLecturerCourses($_SESSION["userId"]);

while($row = mysql_fetch_array($result)){

echo "<br>";
echo "<a href ='l_new_lesson.php?id=".$row['ID']."&name=".$row['NAME']."&date=".$row['DATE']."'>".$row["NAME"]. " ". $row["DATE"]."</a>"."<br>";
	
}
?> 

	
</body>
</html>
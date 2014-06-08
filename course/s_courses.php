<html>
<head>
	<title></title>
</head>
<body>

<?php

	session_start();
	include_once 'db_functions.php';
	$db = new DB_Functions();
	$result = $db->getStudentCourses($_SESSION["userId"]);
	while($row= mysql_fetch_array($result)){
		echo $row["NAME"]. "   ". $row["DATE"] ."<br>";
	}

echo $_SESSION["userId"];

?>

		


</body>
</html>
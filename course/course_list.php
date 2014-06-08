<html>
<head>
	<title></title>
</head>
<body>

<?php

	session_start();
	include_once 'db_functions.php';
	$db = new DB_Functions();
	$result = $db->getCourses();
	while($row= mysql_fetch_array($result)){
		echo "<a href = s_enroll.php?id=".$row["ID"]."&name=".$row["NAME"].">". $row["NAME"]. "   ". $row["DATE"] ."</a>"."<br>";
	}
?>

</body>
</html>
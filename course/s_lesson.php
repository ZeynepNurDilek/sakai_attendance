<html>
<head>
	<title></title>
</head>
<body>

<?php
session_start();

include_once 'db_functions.php';
$db = new DB_Functions();
$result = $db->getActiveLesson($_SESSION["userId"]);
$row = mysql_fetch_array($result);
echo $row["NAME"];
?>





</body>
</html>
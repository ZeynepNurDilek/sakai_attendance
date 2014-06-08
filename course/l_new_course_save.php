<html>
<head>
	<title></title>
</head>
<body>
<?php
session_start();
include_once 'db_functions.php';
$db = new DB_Functions();
$db->addCourse($_SESSION["userId"], $_POST['name'],$_POST["season"] );
?>


</body>
</html>
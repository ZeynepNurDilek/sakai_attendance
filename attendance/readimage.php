<html>
<head>
	<title></title>
</head>
<body>

<?php
	session_start();
	include_once 'db_functions.php';
	$db = new DB_Functions();
	$date_time = date("Y-m-d H:i:s");
	$result = $db->getImageUrl($_SESSION["userId"]);
	$row = mysql_fetch_array($result);
	$url = $row["url"];

?>



<img src="<?php echo $url ?>"/>


</body>
</html>
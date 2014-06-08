<html>
<head>
	<title></title>
</head>
<body>

<?php
session_start();
$id = $_GET["id"];
echo $_GET["name"];
echo $_GET["date"];
?>

<form action="l_new_lesson_save.php" method="post">
		<label><?php echo $_GET["name"]?></label>
		<input type ="hidden" name = "c_id" value ="<?php echo $id ?>"/>
 		<input type="submit" value = "Start Lesson"/>
</form>

</body>
</html>




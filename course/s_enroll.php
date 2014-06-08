<html>
<head>
	<title></title>
</head>
<body>
<?php
$id = $_GET["id"];
?>
<form action="s_enroll_save.php" method="post">
		
		<label>Course Name: </label>
		<label><?php echo $_GET["name"]?></label>
		<br>
		

		<input type ="hidden" name = "c_id" value ="<?php echo $id ?>"/>
 		<input type="submit" value = "Enroll Course"/>
</form>


</body>
</html>
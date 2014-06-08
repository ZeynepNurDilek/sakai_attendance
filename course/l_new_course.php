<html>
<head>
	<title></title>
</head>
<body>

<?php 	
session_start();

?>
<form action="l_new_course_save.php" method="post">
 		<label>Course Name: </label>
 		<input type="text" name = "name"/>
 		<br>
 		<label>Season: </label>
 		<input type="text" name = "season"/>
 		<br>
 		<input type="submit" value = "Save Course"/>
</form>



</body>
</html>
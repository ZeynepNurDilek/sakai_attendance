<html>
<head>
	<title>Sakai</title>
</head>
<body>

	<?php 
		session_start();
 		$_SESSION["siteId"] = $_GET[siteId];
 		$_SESSION["userId"] = $_GET[userId];
 		$_SESSION["userFirst"] = $_GET[userFirst];
 		$_SESSION["userLast"] = $_GET[userLast];
 		$_SESSION["userRole"] = $_GET[userRole];
 
 		include_once 'db_functions.php';
		$db = new DB_Functions();
		$result = $db->getActiveLesson($_SESSION["userId"]);
		$row = mysql_fetch_array($result);
		$_SESSION["activeLesson"] = $row["ID"];
		$result2 = $db->getLecturerCourses($_SESSION["userId"]);
		

 	?>

	<?php
 		if ($_SESSION["userRole"] == "maintain"){
 		//lecturer page
 			while($row2 = mysql_fetch_array($result2) ){
 			echo "<br>";
			echo "<a href ='l_students.php?cid=".$row2['ID']."&name=".$row2['NAME']."&date=".$row2['DATE']."'>".$row2["NAME"]. " ". $row2["DATE"]."</a>"."<br>";

 			}

 	?>

 	<?php
 		} 
 		else {
 			//student page
 	?>

		Active Lesson => <br>
		<label><?php echo $row["NAME"] ?></label>
		<label><?php echo $_SESSION["activeLesson"] ?></label>

		<a href = 'webcam.php'>START LESSON</a>

 
	<?php
 		}
 	?>
</body>
</html>
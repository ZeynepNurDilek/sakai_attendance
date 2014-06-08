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
 	?>

 	<?php
 		if ($_SESSION["userRole"] == "maintain"){
 		//lecturer page
 	?>

		<form action="l_new_course.php" method="post">
 			<input type="submit" value = "New Course"/>
		</form>
		

		<form action="l_courses.php" method="post">
 			<input type="submit" value = "My Courses"/>
		</form>
		<br>

 	<?php
 		} 
 		else {
 			//student page
 	?>

 	<form action="course_list.php" method="post">
 		<input type="submit" value = "Courses"/>
	</form>

	<form action="s_courses.php" method="post">
 		<input type="submit" value = "My Courses"/>
	</form>

	<form action="s_lesson.php" method="post">
 		<input type="submit" value = "Active Lesson"/>
	</form>


 	<?php
 		}
 	?>
	

</body>
</html>
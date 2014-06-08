<?php
	session_start();
	include_once 'db_functions.php';
	$db = new DB_Functions();
	$db->enrollCourse($_SESSION["userId"],$_POST["c_id"]);

?>
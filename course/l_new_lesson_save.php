<?php
session_start();
include_once 'db_functions.php';
$db = new DB_Functions();
$db->startLesson($_POST["c_id"]);

?>
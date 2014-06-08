
<?php

	
class DB_Functions {
	private $db;

	function __construct(){
		include_once './db_connect.php';
		$this->db = new DB_Connect();
		$this->db->connect();
		mysql_query("SET NAMES 'utf8'");
    	mysql_query("SET CHARACTER SET utf8_general_ci");  
	}

	function __destruct(){

	}

//get active lesson
	public function getActiveLesson($s_id){
		$result2 = mysql_query("SELECT * FROM AD_COURSE WHERE ID IN (SELECT COURSE_ID FROM AD_LESSON WHERE ONLINE =  '1' AND COURSE_ID IN (SELECT COURSE_ID FROM AD_STUDENT_COURSE WHERE STUDENT_ID =  '".$s_id."' ) ) ORDER BY DATE DESC  ");
		//$result = mysql_query("SELECT * FROM AD_LESSON WHERE ONLINE ='1' AND COURSE_ID IN (SELECT COURSE_ID FROM AD_STUDENT_COURSE WHERE STUDENT_ID = '".$s_id."') ");
		if($result2){
			return $result2;
		}
		else{
			echo "Error on getting active lesson.";
		}

	}


//enroll course
	public function enrollCourse($s_id, $c_id){
		$result = mysql_query("INSERT INTO AD_STUDENT_COURSE(STUDENT_ID, COURSE_ID) VALUES ('".$s_id."','".$c_id."')");
		if($result){
			echo "You are succesfully enrolled.";
		}
		else{
			echo "Error on enrollment.";
		}
	
	}


//start lesson
	public function startLesson($c_id){
		$result = mysql_query("INSERT INTO AD_LESSON(COURSE_ID,ONLINE) VALUES ('".$c_id."',1)");
	if($result){
		echo "Lesson started.";
	}		
	else{
		echo "An error occured.";
	}
	}





//get student courses
	public function getStudentCourses($id){
		$result = mysql_query("SELECT * FROM AD_COURSE WHERE ID IN (SELECT COURSE_ID FROM AD_STUDENT_COURSE WHERE STUDENT_ID ='".$id."')");
		if($result){
			return $result;
		}
		else{
			echo "Error.";
		}
			 

	}



//get all courses
	public function getCourses(){
		$result= mysql_query("SELECT * from AD_COURSE");
		if($result){
			return $result;
		}
		else{
			echo "There is an error.";
		}
	}




//get all courses of lecturer
	public function getLecturerCourses($id){
		$result= mysql_query("SELECT * FROM AD_COURSE where LECTURER_ID ='".$id."'");
	if($result){

		return $result;
	}
	else {
		echo "Please try again.";
	}

	}



//new Course 

	public function addCourse($userId, $name , $season){
		$result = mysql_query("INSERT INTO AD_COURSE(NAME,LECTURER_ID) VALUES ('".$name."','".$userId."')");
		if($result){
			echo "Course Added";
		}		
		else
			echo "Please try again.";

	}

}

?>
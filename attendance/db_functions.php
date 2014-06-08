
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

public function getStudentImages($sid,$cid){
		$result = mysql_query("SELECT * FROM AD_STUDENT_IMAGE WHERE id = '".$sid."' AND course_id = '".$cid."' ");
		if($result){
			return $result;
		}
		else {
			echo "Please try again.";
		}


	}




	public function getCourseStudents($cid){
		$result = mysql_query("SELECT * FROM SAKAI_USER WHERE USER_ID IN (SELECT STUDENT_ID FROM AD_STUDENT_COURSE WHERE COURSE_ID = '".$cid."' )");
		if($result){
			return $result;
		}
		else {
			echo "Please try again.";
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




	public function getImageUrl($id){
		$result = mysql_query("SELECT * FROM AD_STUDENT_IMAGE ");
		if($result){
			return $result;
		}
		else{
			echo "Error on getting active lesson.";
		}
	}


public function saveImageUrl($id,$url,$cid){
	$result = mysql_query("INSERT INTO AD_STUDENT_IMAGE(id, url,course_id) VALUES ('".$id."','".$url."','".$cid."')");
		if($result){
			echo "Succesful";
		}
		else{
			echo "Error on getting active lesson.";
		}

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

}

?>
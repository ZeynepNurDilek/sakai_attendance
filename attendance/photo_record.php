



<html>
<head>
	<title></title>
</head>
<body>

<h1> Taking snapshot...</h1>



<?php

	session_start();
	include_once 'db_functions.php';
	$db = new DB_Functions();
	$date_time = date("Y-m-d H:i:s");
	$url = "images/".$date_time.".jpg";
	$cid = $_SESSION["activeLesson"];
	$db->saveImageUrl($_SESSION["userId"],$url,$cid);





	$encoded_data = $_POST["mydata"];
    $binary_data = base64_decode( $encoded_data );

    // save to server (beware of permissions)
    //chmod($dir, 0777);
	//chmod($filename,0777);
	chmod('/var/www/', 0777);
	mkdir('images/');
    $result = file_put_contents( 'images/'.$date_time.'.jpg', $binary_data );
    // print_r( $_COOKIE );
    if (!$result) die("Could not save image!  Check file permissions.");
    
?>

</body>
</html>
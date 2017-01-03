<?php
	header("Access-Control-Allow-Origin: *");
	header("Content-Type: application/json; charset=UTF-8");
	session_start();

    $pwd = $_SESSION['key'];
    $email = $_SESSION['email'];

	require("apis/dbconnect.php");
	
	$query = "SELECT * from users where email = '$email' and password = '$pwd'";
	$result = mysqli_query($con, $query);
	$arr = array();

	if(mysqli_num_rows($result) != 0) {	
		while($row = mysqli_fetch_assoc($result)){
			$arr[] = $row;
		}
	echo json_encode($arr);
	}
	else{
		echo json_encode("not logged in");
	}

	
?>
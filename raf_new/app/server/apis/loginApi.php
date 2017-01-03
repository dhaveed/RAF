<?php
	session_start();
	//including the dbcon file;
	require_once 'dbconnect.php';

	$formData = file_get_contents("php://input");
	$userInput = json_decode($formData);

	$uEmail = mysqli_real_escape_string($con, $userInput->email);
	$uPass = md5(mysqli_real_escape_string($con, $userInput->password));
	$rem = mysqli_real_escape_string($con, $userInput->remember);
	
	// mysqli query to fetch the corresponding user data from the db
	$query = "SELECT * from users where email = '$uEmail' and password = '$uPass'";
	$result = mysqli_query($con, $query);

	$cookie_val = $uPass;
	// $arr = array();
	if(mysqli_num_rows($result) != 0) {	
		 	if($rem == true){
		 		setcookie("user", $cookie_val, time() + (120), "/");
		 	};
		 	$_SESSION['email'] = $uEmail;
		 	$_SESSION['key'] = $cookie_val;
		echo "yes";
	}
	elseif(mysqli_num_rows($result) == 0) { //otherwise it's invalid credentials
		echo "invalid credentials";
	}
	else{
		echo "an error occured";
	}

	
?>
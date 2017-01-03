<?php
	session_start();
	//including the dbcon file;
	require_once 'dbconnect.php';

	$formData = file_get_contents("php://input");
	$userInput = json_decode($formData);

	$uEmail = mysqli_real_escape_string($con, $userInput->email);
	$uPass = md5(mysqli_real_escape_string($con, $userInput->password));
	
	// mysqli query to fetch the corresponding user data from the db
	$query = "SELECT * from users where email = '$uEmail' and password = '$uPass'";
	$result = mysqli_query($con, $query);
	$arr = array();

	//check if the user is already logged in
	if($uEmail == $_SESSION['email'] && $uPass == $_SESSION['key']){
		//if the user is logged in, do this;
		echo "user already logged in";
	}
	//if the user is not currently logged in, log them in
	elseif(mysqli_num_rows($result) != 0) {	
		 $_SESSION['email'] = $uEmail;
		 $_SESSION['key'] = $uPass;
		echo "yes";
	}
	else { //otherwise it's invalid credentials
		echo "invalid credentials";
	}

	//remove this line and add it to the logout script wen done with everything 

	/*session_destroy();*/

	/*don't forget to do the part that checks if the user is logged in or not befre even clicking the page evne opens*/
?>
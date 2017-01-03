<?php
	include("dbconnect.php");
	$formData = file_get_contents("php://input");
	$useable = json_decode($formData);

	//form vars
	$userDetails = "Client Name: " . mysqli_real_escape_string($con, $useable->fullname) . "\r\n";
	// $userDetails .= mysqli_real_escape_string($con, $useable->email) . "\r\n";
	$email  = mysqli_real_escape_string($con, $useable->email);
	$userDetails .= "Client Phone Number: " . mysqli_real_escape_string($con, $useable->phone) . "\r\n";
	$userDetails .= "Message: " . mysqli_real_escape_string($con, $useable->message);

	//mail construct vars !important
	$subject = "New message from RAF Ventures contact form";
	$to = "noreply@rafonline.com" . ",\r" ;
	$to .= "david@raf.com" . ",\r" ;
	$to .= "something@something.com";

	//headers
	$headers = "From: RAF Ventures web application contact form <$to>\r\n";
	$headers .= "Reply-To: <$email>";

	if(mail($to, $subject, $headers, $userDetails)){
		echo "sent";
	}
	else{
		echo "error";
	};
?>
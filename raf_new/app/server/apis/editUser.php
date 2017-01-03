<?php
	include('dbconnect.php');

	$realInput = json_decode(file_get_contents("php://"));

	$userId = mysqli_real_escape_string($con, $realInput->_id);
	$fullname = mysqli_real_escape_string($con, $realInput->fullName);
	$companyName = mysqli_real_escape_string($con, $realInput->companyName);
	$email = mysqli_real_escape_string($con, $realInput->email);
	$password = mysqli_real_escape_string($con, $realInput->password);
	$phone = mysqli_real_escape_string($con, $realInput->phone);
	$companyAddress = mysqli_real_escape_string($con, $realInput->companyAddress);

	$checkquery = "SELECT * FROM users WHERE _id = '$userId'";
?>
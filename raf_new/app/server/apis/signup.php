<?php
	//includng the dbcon file;
	require_once 'dbconnect.php';

	//fetching the data and converting it to array
	$posted_data = json_decode(file_get_contents("php://input"));

	//escaping the vars from the input
	$name = mysqli_real_escape_string($con, $posted_data->fullname);
	$email = mysqli_real_escape_string($con, $posted_data->email);
	$password = md5(mysqli_real_escape_string($con, $posted_data->pass1));
	$phone1 = mysqli_real_escape_string($con, $posted_data->phone1);
	$phone2 = mysqli_real_escape_string($con, $posted_data->phone2);

	//verifying that the values are not null

	

	//query to insert into the db
	$query = "INSERT INTO users(fullName,email,password,phone1,phone2) VALUES ('$name','$email','$password','$phone1','$phone2')";

	//query to check if the user already exists

	$isExist = "SELECT * from users where email = '$email'";
	$result = mysqli_query($con, $isExist);

	if($name == null || $email == null || $password == null || $phone1 == null){
		echo "fields cannot be empty";
	}
	elseif(mysqli_num_rows($result) != 0){
		echo "user already exists";

	}
	elseif(mysqli_query($con, $query)){
		echo "successfully inserted into db";
	}
	else{
		echo "sorry an error occured while registering you";
	};
	
?>
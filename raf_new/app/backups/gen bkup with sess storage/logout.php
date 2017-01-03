<?php
session_start();
if($_SESSION['key'] != "" && $_SESSION['email'] != "") // check if the session exists
{
	//if it does, clear it...
	$_SESSION['key'] = "";
	$_SESSION['email'] = "";

	header("Location: login"); // Redirecting To login Page
}
?>

<?php
session_start();
if($_SESSION['key'] != "" && $_SESSION['email'] != "") // check if the session exists
{
	//if it does, clear it...
	session_unset();
	setcookie("user", null, time() - 1200, "/");
	header("Location: login"); // Redirecting To login Page
}
?>
<?php
if(count($_COOKIE) > 0) {
    echo "Cookies are enabled.";
} else {
    echo "Cookies are disabled.";
}
?>
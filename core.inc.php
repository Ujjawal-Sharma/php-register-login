<?php 
ob_start();
$current_file = $_SERVER['SCRIPT_NAME'];
$http_referer = $_SERVER['HTTP_REFERER'];
session_start();

function loggedin() {
	if(!empty($_SESSION['user_id'])) {
		//echo "Hello".$_SESSION['user_id'];
		return true;
	}
	else {
		return false;
	}
}

?>
<?php 
require 'core.inc.php';
require 'connect.inc.php';
session_start();
if(isset($_POST['username']) && isset($_POST['password'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	$password_hash = md5($password);

	if (!empty($username) && !empty($password)) {
		$query = "SELECT `id` FROM `users` WHERE `username` = '$username' AND `password` = '$password_hash'"; 
			if ($query_run = mysqli_query($link, $query)) {
				$query_num_rows = mysqli_num_rows($query_run); 
				if($query_num_rows == 0) {
					echo 'Invalid Username/Password';
				} else {
					//echo 'login successfully';
					$user_id = $_POST['username'];
					$_SESSION['user_id'] = $user_id;
					header('Location: index.php'); 
			} 
		}

	} else {
		echo "You must enter a username and password.";
	}
}
?>

<form action="" method="POST">
	Username: 
	<input type="text" name="username">
	Password:
	<input type="Password" name="password">
	<input type="submit" name="" value="Log In">
</form>
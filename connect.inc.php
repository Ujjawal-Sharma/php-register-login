<?php
$mysql_host = "localhost";
$mysql_user = 'root';
$mysql_pass = '';

$mysql_db = 'php-login';

$link = mysqli_connect($mysql_host, $mysql_user, $mysql_pass);

// make foo the current db
$db_selected = mysqli_select_db($link, 'php_login');


if(!$link || !$db_selected) {
	die('unable to connect');
}

?>
<?php 
require 'core.inc.php';
session_destroy();
//echo $http_referer;
header('Location:'.$http_referer);
?>
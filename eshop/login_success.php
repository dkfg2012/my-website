<?php 
	include 'login_check.php';
	session_start();
	echo $_SESSION['user_login'];
	echo unserialize($_COOKIE['user'])['username'];
	echo unserialize($_COOKIE['user'])['cart'];
 ?>
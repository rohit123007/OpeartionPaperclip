<?php
	date_default_timezone_set('America/New_York');
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	$dbname = 'comment';

	$connect = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die(mysqli_error($connect));
?>

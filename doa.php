<?php
function connectDB(){
	$host = 'localhost';
	$user = 'root';
	$passwd = '';
	$database = 'db';
	// connect to database
$connect = mysqli_connect($host,$user,$passwd,$database);
	// check db connection
	if (!$connect) {
		die("Connection failed. ". mysqli_connect_error);
	}
	return $connect;
}
?>

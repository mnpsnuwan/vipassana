<?php

/*
	DATABASE
	DB connection settings
*/ 
//database settings
$server = 'localhost';
$user = 'root';
$pass = '';
$db = 'vipassana';

// connect to the database
$Database = mysqli_connect($server, $user, $pass, $db);

//Test if connection occurred
if(mysqli_connect_errno()){
	die("Database connection faild: " . mysqli_connect_error() . " (" . mysqli_connect_errno() . ")");
}
?>

	
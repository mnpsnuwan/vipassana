<?php 
	if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
    if(!$_SESSION["user"]){
        header("location:login.php?session=notset");
	
    }
	?>
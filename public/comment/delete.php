<?php
require ('connect.php');
$deleteid = $_GET['id']; 
$dequery = "DELETE FROM comment WHERE id = '$deleteid';";
mysqli_query($Database, $dequery);
header("Location: success.php");



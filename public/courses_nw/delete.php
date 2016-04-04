<?php
require ('database.php');
$deleteid = $_GET['courseID']; 
$dequery = "DELETE FROM courses WHERE courseID = '$deleteid';";
mysqli_query($Database, $dequery);
header("Location: success.php");
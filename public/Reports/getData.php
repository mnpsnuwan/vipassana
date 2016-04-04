<?php
include "database.php";
$database = new MySQLDatabase();
$udataD = (int) $_POST['udataD'];  //post karapu data ,udata yana namin labala gani.. -->
$udataM = (int) $_POST['udataM'];
$udataY = (int) $_POST['udataY'];
$qre = "select * from confermedapplication where date1 = '$udataD' AND month1=$udataM AND year1= $udataY";

$h = $database->query($qre);

/*if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
	/* special ajax here 
	die($content);
         echo " special ajax here";
}else{
    echo 'fuck off';
}*/

if (mysqli_num_rows($h) > 0) {
   
    $rows = array();
    while ($row = mysqli_fetch_assoc($h)) {
        $j = 1;
       $rows[] = $row;

    }
}
$json = json_encode($rows);
echo $json;

$database->close_connection();
?>
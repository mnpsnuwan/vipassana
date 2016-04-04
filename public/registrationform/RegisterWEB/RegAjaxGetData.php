<?php
include_once "database.php";
include_once "allQuery.php";

//header('Content-Type: application/json');  /* You can send an application/json header via PHP */

$queries = new Querys();
$database = new MySQLDatabase();
$database->open_connection();

/*() decide what the content should be up here .... */
 /*AJAX check 
if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
	/ special ajax here 
	die($content);
         echo " special ajax here";
}else{
    echo 'fuck off';
}*/


$udataN = (int) $_POST['udataN'];  //post karapu data ,udata yana namin labala gani.. -->

//$udataE = (int) $_POST['postdataE'];
//$qre = " select * from confermedapplication where nic2 = '$udataN' OR email2= '$udataE' " ;

$qre = " select * from confermedapplication where nic2 = '$udataN' " ;
//$qre = " select * from confermedapplication where nic2 = '1' " ;

$h = $queries->Query_connection($qre);
if (mysqli_num_rows($h) > 0){
   
    $rows = array();if (mysqli_num_rows($h) > 0){

    while ($row = mysqli_fetch_assoc($h)) {
        $j = 1;
       $rows[] = $row;
    }
}
}
//echo $row ;
/*header('Content-Type: application/json');*/

$json = json_encode($rows);
echo "$json";


/*this code will give weather "request" come or not*/

if(isset($_POST["udataN"]))
{
   
    $json = json_decode($_POST["udataN"]);
    if(!empty($json))
    {
            echo "\n IT WORKED!!!!";
    }
        else
            echo "\n NOT POSTED";
}


$database->close_connection();

?>
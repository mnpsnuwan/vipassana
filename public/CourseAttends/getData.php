<?php
include "database.php";
$database = new MySQLDatabase();
$udataD = (int) $_POST['udataD'];  //post karapu data ,udata yana namin labala gani.. -->
$udataM = (int) $_POST['udataM'];
$udataY = (int) $_POST['udataY'];
$qre = "select * from registerform where date1 = '$udataD' AND month1=$udataM AND year1= $udataY";

$h = $database->query($qre);

if (mysqli_num_rows($h) > 0) {
    $count = 1;
    $rows = array();
    while ($row = mysqli_fetch_assoc($h)) {
        $j = 1;
        $rows[] = $row;

      //    echo $count;
     //    echo  $tr[0];
     //     echo  $tr[1];
     //    echo $tr[5] . "  " . $tr[6];
    }
}
$json = json_encode($rows);
echo $json;

//mysqli_close($conn);
?>
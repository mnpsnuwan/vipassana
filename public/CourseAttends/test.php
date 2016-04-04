<?php
session_start();

$x =  $_SESSION['RegNo'] ; 

if (isset($_POST['Yes'])) {
  $yesQuery =  "UPDATE confermedapplication SET participating1 = 'Yes'  WHERE RegNo = '$x' " ;          
  $database->query($yesQuery) ;
  echo "aaaaa";
}

if (isset($_POST['No'])) {
  $yesQuery =  "UPDATE confermedapplication SET participating1 = 'No'  WHERE RegNo = '$tr[0]'" ;
  $database->query($yesQuery) ;   
}
?>
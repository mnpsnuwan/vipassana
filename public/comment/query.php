<?php

//Perform Database Quary
$quary = "SELECT * ";
$quary .= "FROM comment ORDER BY id DESC";
$result = mysqli_query($Database, $quary);
//Test if there was a quary error
if (!$result) {
    die("Database quary failed");
}


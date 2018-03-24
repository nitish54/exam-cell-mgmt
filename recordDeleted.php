<?php

session_start();
$getvar[0] = $_POST["year"];
$getvar[1] = $_POST["semester"];
$getvar[2] = $_POST["txtSession"];
$getvar[3] = $_POST["combo"];
$table = implode("_", $getvar); 

include 'dbconfig.php';
//$username = $_GET["name"];
$sql="DROP TABLE exam_cell.$table;";
mysql_query($sql) or die("Error: Wrong table name");
header('location: deleteOld.php?msg=Record Successfully deleted');
?>
